<?hh // strict
namespace slack\aws\gamelift;

interface GameLift {
  public function AcceptMatch(AcceptMatchInput $in): Awaitable<\Errors\Result<AcceptMatchOutput>>;
  public function ClaimGameServer(ClaimGameServerInput $in): Awaitable<\Errors\Result<ClaimGameServerOutput>>;
  public function CreateAlias(CreateAliasInput $in): Awaitable<\Errors\Result<CreateAliasOutput>>;
  public function CreateBuild(CreateBuildInput $in): Awaitable<\Errors\Result<CreateBuildOutput>>;
  public function CreateFleet(CreateFleetInput $in): Awaitable<\Errors\Result<CreateFleetOutput>>;
  public function CreateGameServerGroup(CreateGameServerGroupInput $in): Awaitable<\Errors\Result<CreateGameServerGroupOutput>>;
  public function CreateGameSession(CreateGameSessionInput $in): Awaitable<\Errors\Result<CreateGameSessionOutput>>;
  public function CreateGameSessionQueue(CreateGameSessionQueueInput $in): Awaitable<\Errors\Result<CreateGameSessionQueueOutput>>;
  public function CreateMatchmakingConfiguration(CreateMatchmakingConfigurationInput $in): Awaitable<\Errors\Result<CreateMatchmakingConfigurationOutput>>;
  public function CreateMatchmakingRuleSet(CreateMatchmakingRuleSetInput $in): Awaitable<\Errors\Result<CreateMatchmakingRuleSetOutput>>;
  public function CreatePlayerSession(CreatePlayerSessionInput $in): Awaitable<\Errors\Result<CreatePlayerSessionOutput>>;
  public function CreatePlayerSessions(CreatePlayerSessionsInput $in): Awaitable<\Errors\Result<CreatePlayerSessionsOutput>>;
  public function CreateScript(CreateScriptInput $in): Awaitable<\Errors\Result<CreateScriptOutput>>;
  public function CreateVpcPeeringAuthorization(CreateVpcPeeringAuthorizationInput $in): Awaitable<\Errors\Result<CreateVpcPeeringAuthorizationOutput>>;
  public function CreateVpcPeeringConnection(CreateVpcPeeringConnectionInput $in): Awaitable<\Errors\Result<CreateVpcPeeringConnectionOutput>>;
  public function DeleteAlias(DeleteAliasInput $in): Awaitable<\Errors\Error>;
  public function DeleteBuild(DeleteBuildInput $in): Awaitable<\Errors\Error>;
  public function DeleteFleet(DeleteFleetInput $in): Awaitable<\Errors\Error>;
  public function DeleteGameServerGroup(DeleteGameServerGroupInput $in): Awaitable<\Errors\Result<DeleteGameServerGroupOutput>>;
  public function DeleteGameSessionQueue(DeleteGameSessionQueueInput $in): Awaitable<\Errors\Result<DeleteGameSessionQueueOutput>>;
  public function DeleteMatchmakingConfiguration(DeleteMatchmakingConfigurationInput $in): Awaitable<\Errors\Result<DeleteMatchmakingConfigurationOutput>>;
  public function DeleteMatchmakingRuleSet(DeleteMatchmakingRuleSetInput $in): Awaitable<\Errors\Result<DeleteMatchmakingRuleSetOutput>>;
  public function DeleteScalingPolicy(DeleteScalingPolicyInput $in): Awaitable<\Errors\Error>;
  public function DeleteScript(DeleteScriptInput $in): Awaitable<\Errors\Error>;
  public function DeleteVpcPeeringAuthorization(DeleteVpcPeeringAuthorizationInput $in): Awaitable<\Errors\Result<DeleteVpcPeeringAuthorizationOutput>>;
  public function DeleteVpcPeeringConnection(DeleteVpcPeeringConnectionInput $in): Awaitable<\Errors\Result<DeleteVpcPeeringConnectionOutput>>;
  public function DeregisterGameServer(DeregisterGameServerInput $in): Awaitable<\Errors\Error>;
  public function DescribeAlias(DescribeAliasInput $in): Awaitable<\Errors\Result<DescribeAliasOutput>>;
  public function DescribeBuild(DescribeBuildInput $in): Awaitable<\Errors\Result<DescribeBuildOutput>>;
  public function DescribeEC2InstanceLimits(DescribeEC2InstanceLimitsInput $in): Awaitable<\Errors\Result<DescribeEC2InstanceLimitsOutput>>;
  public function DescribeFleetAttributes(DescribeFleetAttributesInput $in): Awaitable<\Errors\Result<DescribeFleetAttributesOutput>>;
  public function DescribeFleetCapacity(DescribeFleetCapacityInput $in): Awaitable<\Errors\Result<DescribeFleetCapacityOutput>>;
  public function DescribeFleetEvents(DescribeFleetEventsInput $in): Awaitable<\Errors\Result<DescribeFleetEventsOutput>>;
  public function DescribeFleetPortSettings(DescribeFleetPortSettingsInput $in): Awaitable<\Errors\Result<DescribeFleetPortSettingsOutput>>;
  public function DescribeFleetUtilization(DescribeFleetUtilizationInput $in): Awaitable<\Errors\Result<DescribeFleetUtilizationOutput>>;
  public function DescribeGameServer(DescribeGameServerInput $in): Awaitable<\Errors\Result<DescribeGameServerOutput>>;
  public function DescribeGameServerGroup(DescribeGameServerGroupInput $in): Awaitable<\Errors\Result<DescribeGameServerGroupOutput>>;
  public function DescribeGameSessionDetails(DescribeGameSessionDetailsInput $in): Awaitable<\Errors\Result<DescribeGameSessionDetailsOutput>>;
  public function DescribeGameSessionPlacement(DescribeGameSessionPlacementInput $in): Awaitable<\Errors\Result<DescribeGameSessionPlacementOutput>>;
  public function DescribeGameSessionQueues(DescribeGameSessionQueuesInput $in): Awaitable<\Errors\Result<DescribeGameSessionQueuesOutput>>;
  public function DescribeGameSessions(DescribeGameSessionsInput $in): Awaitable<\Errors\Result<DescribeGameSessionsOutput>>;
  public function DescribeInstances(DescribeInstancesInput $in): Awaitable<\Errors\Result<DescribeInstancesOutput>>;
  public function DescribeMatchmaking(DescribeMatchmakingInput $in): Awaitable<\Errors\Result<DescribeMatchmakingOutput>>;
  public function DescribeMatchmakingConfigurations(DescribeMatchmakingConfigurationsInput $in): Awaitable<\Errors\Result<DescribeMatchmakingConfigurationsOutput>>;
  public function DescribeMatchmakingRuleSets(DescribeMatchmakingRuleSetsInput $in): Awaitable<\Errors\Result<DescribeMatchmakingRuleSetsOutput>>;
  public function DescribePlayerSessions(DescribePlayerSessionsInput $in): Awaitable<\Errors\Result<DescribePlayerSessionsOutput>>;
  public function DescribeRuntimeConfiguration(DescribeRuntimeConfigurationInput $in): Awaitable<\Errors\Result<DescribeRuntimeConfigurationOutput>>;
  public function DescribeScalingPolicies(DescribeScalingPoliciesInput $in): Awaitable<\Errors\Result<DescribeScalingPoliciesOutput>>;
  public function DescribeScript(DescribeScriptInput $in): Awaitable<\Errors\Result<DescribeScriptOutput>>;
  public function DescribeVpcPeeringAuthorizations(DescribeVpcPeeringAuthorizationsInput $in): Awaitable<\Errors\Result<DescribeVpcPeeringAuthorizationsOutput>>;
  public function DescribeVpcPeeringConnections(DescribeVpcPeeringConnectionsInput $in): Awaitable<\Errors\Result<DescribeVpcPeeringConnectionsOutput>>;
  public function GetGameSessionLogUrl(GetGameSessionLogUrlInput $in): Awaitable<\Errors\Result<GetGameSessionLogUrlOutput>>;
  public function GetInstanceAccess(GetInstanceAccessInput $in): Awaitable<\Errors\Result<GetInstanceAccessOutput>>;
  public function ListAliases(ListAliasesInput $in): Awaitable<\Errors\Result<ListAliasesOutput>>;
  public function ListBuilds(ListBuildsInput $in): Awaitable<\Errors\Result<ListBuildsOutput>>;
  public function ListFleets(ListFleetsInput $in): Awaitable<\Errors\Result<ListFleetsOutput>>;
  public function ListGameServerGroups(ListGameServerGroupsInput $in): Awaitable<\Errors\Result<ListGameServerGroupsOutput>>;
  public function ListGameServers(ListGameServersInput $in): Awaitable<\Errors\Result<ListGameServersOutput>>;
  public function ListScripts(ListScriptsInput $in): Awaitable<\Errors\Result<ListScriptsOutput>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutScalingPolicy(PutScalingPolicyInput $in): Awaitable<\Errors\Result<PutScalingPolicyOutput>>;
  public function RegisterGameServer(RegisterGameServerInput $in): Awaitable<\Errors\Result<RegisterGameServerOutput>>;
  public function RequestUploadCredentials(RequestUploadCredentialsInput $in): Awaitable<\Errors\Result<RequestUploadCredentialsOutput>>;
  public function ResolveAlias(ResolveAliasInput $in): Awaitable<\Errors\Result<ResolveAliasOutput>>;
  public function ResumeGameServerGroup(ResumeGameServerGroupInput $in): Awaitable<\Errors\Result<ResumeGameServerGroupOutput>>;
  public function SearchGameSessions(SearchGameSessionsInput $in): Awaitable<\Errors\Result<SearchGameSessionsOutput>>;
  public function StartFleetActions(StartFleetActionsInput $in): Awaitable<\Errors\Result<StartFleetActionsOutput>>;
  public function StartGameSessionPlacement(StartGameSessionPlacementInput $in): Awaitable<\Errors\Result<StartGameSessionPlacementOutput>>;
  public function StartMatchBackfill(StartMatchBackfillInput $in): Awaitable<\Errors\Result<StartMatchBackfillOutput>>;
  public function StartMatchmaking(StartMatchmakingInput $in): Awaitable<\Errors\Result<StartMatchmakingOutput>>;
  public function StopFleetActions(StopFleetActionsInput $in): Awaitable<\Errors\Result<StopFleetActionsOutput>>;
  public function StopGameSessionPlacement(StopGameSessionPlacementInput $in): Awaitable<\Errors\Result<StopGameSessionPlacementOutput>>;
  public function StopMatchmaking(StopMatchmakingInput $in): Awaitable<\Errors\Result<StopMatchmakingOutput>>;
  public function SuspendGameServerGroup(SuspendGameServerGroupInput $in): Awaitable<\Errors\Result<SuspendGameServerGroupOutput>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateAlias(UpdateAliasInput $in): Awaitable<\Errors\Result<UpdateAliasOutput>>;
  public function UpdateBuild(UpdateBuildInput $in): Awaitable<\Errors\Result<UpdateBuildOutput>>;
  public function UpdateFleetAttributes(UpdateFleetAttributesInput $in): Awaitable<\Errors\Result<UpdateFleetAttributesOutput>>;
  public function UpdateFleetCapacity(UpdateFleetCapacityInput $in): Awaitable<\Errors\Result<UpdateFleetCapacityOutput>>;
  public function UpdateFleetPortSettings(UpdateFleetPortSettingsInput $in): Awaitable<\Errors\Result<UpdateFleetPortSettingsOutput>>;
  public function UpdateGameServer(UpdateGameServerInput $in): Awaitable<\Errors\Result<UpdateGameServerOutput>>;
  public function UpdateGameServerGroup(UpdateGameServerGroupInput $in): Awaitable<\Errors\Result<UpdateGameServerGroupOutput>>;
  public function UpdateGameSession(UpdateGameSessionInput $in): Awaitable<\Errors\Result<UpdateGameSessionOutput>>;
  public function UpdateGameSessionQueue(UpdateGameSessionQueueInput $in): Awaitable<\Errors\Result<UpdateGameSessionQueueOutput>>;
  public function UpdateMatchmakingConfiguration(UpdateMatchmakingConfigurationInput $in): Awaitable<\Errors\Result<UpdateMatchmakingConfigurationOutput>>;
  public function UpdateRuntimeConfiguration(UpdateRuntimeConfigurationInput $in): Awaitable<\Errors\Result<UpdateRuntimeConfigurationOutput>>;
  public function UpdateScript(UpdateScriptInput $in): Awaitable<\Errors\Result<UpdateScriptOutput>>;
  public function ValidateMatchmakingRuleSet(ValidateMatchmakingRuleSetInput $in): Awaitable<\Errors\Result<ValidateMatchmakingRuleSetOutput>>;
}

class AcceptMatchInput {
  public ?AcceptanceType $acceptance_type;
  public ?StringList $player_ids;
  public ?MatchmakingIdStringModel $ticket_id;

  public function __construct(shape(
    ?'acceptance_type' => ?AcceptanceType,
    ?'player_ids' => ?StringList,
    ?'ticket_id' => ?MatchmakingIdStringModel,
  ) $s = shape()) {
    $this->acceptance_type = $s['acceptance_type'] ?? '';
    $this->player_ids = $s['player_ids'] ?? vec[];
    $this->ticket_id = $s['ticket_id'] ?? '';
  }
}

class AcceptMatchOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AcceptanceType = string;

class Alias {
  public ?AliasArn $alias_arn;
  public ?AliasId $alias_id;
  public ?Timestamp $creation_time;
  public ?FreeText $description;
  public ?Timestamp $last_updated_time;
  public ?NonBlankAndLengthConstraintString $name;
  public ?RoutingStrategy $routing_strategy;

  public function __construct(shape(
    ?'alias_arn' => ?AliasArn,
    ?'alias_id' => ?AliasId,
    ?'creation_time' => ?Timestamp,
    ?'description' => ?FreeText,
    ?'last_updated_time' => ?Timestamp,
    ?'name' => ?NonBlankAndLengthConstraintString,
    ?'routing_strategy' => ?RoutingStrategy,
  ) $s = shape()) {
    $this->alias_arn = $s['alias_arn'] ?? '';
    $this->alias_id = $s['alias_id'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->routing_strategy = $s['routing_strategy'] ?? null;
  }
}

type AliasArn = string;

type AliasId = string;

type AliasIdOrArn = string;

type AliasList = vec<Alias>;

type AmazonResourceName = string;

type ArnStringModel = string;

class AttributeValue {
  public ?DoubleObject $n;
  public ?NonZeroAndMaxString $s;
  public ?StringDoubleMap $sdm;
  public ?StringList $sl;

  public function __construct(shape(
    ?'n' => ?DoubleObject,
    ?'s' => ?NonZeroAndMaxString,
    ?'sdm' => ?StringDoubleMap,
    ?'sl' => ?StringList,
  ) $s = shape()) {
    $this->n = $s['n'] ?? 0.0;
    $this->s = $s['s'] ?? '';
    $this->sdm = $s['sdm'] ?? dict[];
    $this->sl = $s['sl'] ?? vec[];
  }
}

type AutoScalingGroupArn = string;

class AwsCredentials {
  public ?NonEmptyString $access_key_id;
  public ?NonEmptyString $secret_access_key;
  public ?NonEmptyString $session_token;

  public function __construct(shape(
    ?'access_key_id' => ?NonEmptyString,
    ?'secret_access_key' => ?NonEmptyString,
    ?'session_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
    $this->secret_access_key = $s['secret_access_key'] ?? '';
    $this->session_token = $s['session_token'] ?? '';
  }
}

type BackfillMode = string;

type BalancingStrategy = string;

type BooleanModel = bool;

class Build {
  public ?BuildArn $build_arn;
  public ?BuildId $build_id;
  public ?Timestamp $creation_time;
  public ?FreeText $name;
  public ?OperatingSystem $operating_system;
  public ?PositiveLong $size_on_disk;
  public ?BuildStatus $status;
  public ?FreeText $version;

  public function __construct(shape(
    ?'build_arn' => ?BuildArn,
    ?'build_id' => ?BuildId,
    ?'creation_time' => ?Timestamp,
    ?'name' => ?FreeText,
    ?'operating_system' => ?OperatingSystem,
    ?'size_on_disk' => ?PositiveLong,
    ?'status' => ?BuildStatus,
    ?'version' => ?FreeText,
  ) $s = shape()) {
    $this->build_arn = $s['build_arn'] ?? '';
    $this->build_id = $s['build_id'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->operating_system = $s['operating_system'] ?? '';
    $this->size_on_disk = $s['size_on_disk'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type BuildArn = string;

type BuildId = string;

type BuildIdOrArn = string;

type BuildList = vec<Build>;

type BuildStatus = string;

class CertificateConfiguration {
  public ?CertificateType $certificate_type;

  public function __construct(shape(
    ?'certificate_type' => ?CertificateType,
  ) $s = shape()) {
    $this->certificate_type = $s['certificate_type'] ?? '';
  }
}

type CertificateType = string;

class ClaimGameServerInput {
  public ?GameServerData $game_server_data;
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerId $game_server_id;

  public function __construct(shape(
    ?'game_server_data' => ?GameServerData,
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'game_server_id' => ?GameServerId,
  ) $s = shape()) {
    $this->game_server_data = $s['game_server_data'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_id = $s['game_server_id'] ?? '';
  }
}

class ClaimGameServerOutput {
  public ?GameServer $game_server;

  public function __construct(shape(
    ?'game_server' => ?GameServer,
  ) $s = shape()) {
    $this->game_server = $s['game_server'] ?? null;
  }
}

type ComparisonOperatorType = string;

class ConflictException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateAliasInput {
  public ?NonZeroAndMaxString $description;
  public ?NonBlankAndLengthConstraintString $name;
  public ?RoutingStrategy $routing_strategy;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => ?NonZeroAndMaxString,
    ?'name' => ?NonBlankAndLengthConstraintString,
    ?'routing_strategy' => ?RoutingStrategy,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->routing_strategy = $s['routing_strategy'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateAliasOutput {
  public ?Alias $alias;

  public function __construct(shape(
    ?'alias' => ?Alias,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? null;
  }
}

class CreateBuildInput {
  public ?NonZeroAndMaxString $name;
  public ?OperatingSystem $operating_system;
  public ?S3Location $storage_location;
  public ?TagList $tags;
  public ?NonZeroAndMaxString $version;

  public function __construct(shape(
    ?'name' => ?NonZeroAndMaxString,
    ?'operating_system' => ?OperatingSystem,
    ?'storage_location' => ?S3Location,
    ?'tags' => ?TagList,
    ?'version' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->operating_system = $s['operating_system'] ?? '';
    $this->storage_location = $s['storage_location'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->version = $s['version'] ?? '';
  }
}

class CreateBuildOutput {
  public ?Build $build;
  public ?S3Location $storage_location;
  public ?AwsCredentials $upload_credentials;

  public function __construct(shape(
    ?'build' => ?Build,
    ?'storage_location' => ?S3Location,
    ?'upload_credentials' => ?AwsCredentials,
  ) $s = shape()) {
    $this->build = $s['build'] ?? null;
    $this->storage_location = $s['storage_location'] ?? null;
    $this->upload_credentials = $s['upload_credentials'] ?? null;
  }
}

class CreateFleetInput {
  public ?BuildIdOrArn $build_id;
  public ?CertificateConfiguration $certificate_configuration;
  public ?NonZeroAndMaxString $description;
  public ?IpPermissionsList $ec_2_inbound_permissions;
  public ?EC2InstanceType $ec_2_instance_type;
  public ?FleetType $fleet_type;
  public ?NonEmptyString $instance_role_arn;
  public ?StringList $log_paths;
  public ?MetricGroupList $metric_groups;
  public ?NonZeroAndMaxString $name;
  public ?ProtectionPolicy $new_game_session_protection_policy;
  public ?NonZeroAndMaxString $peer_vpc_aws_account_id;
  public ?NonZeroAndMaxString $peer_vpc_id;
  public ?ResourceCreationLimitPolicy $resource_creation_limit_policy;
  public ?RuntimeConfiguration $runtime_configuration;
  public ?ScriptIdOrArn $script_id;
  public ?NonZeroAndMaxString $server_launch_parameters;
  public ?NonZeroAndMaxString $server_launch_path;
  public ?TagList $tags;

  public function __construct(shape(
    ?'build_id' => ?BuildIdOrArn,
    ?'certificate_configuration' => ?CertificateConfiguration,
    ?'description' => ?NonZeroAndMaxString,
    ?'ec_2_inbound_permissions' => ?IpPermissionsList,
    ?'ec_2_instance_type' => ?EC2InstanceType,
    ?'fleet_type' => ?FleetType,
    ?'instance_role_arn' => ?NonEmptyString,
    ?'log_paths' => ?StringList,
    ?'metric_groups' => ?MetricGroupList,
    ?'name' => ?NonZeroAndMaxString,
    ?'new_game_session_protection_policy' => ?ProtectionPolicy,
    ?'peer_vpc_aws_account_id' => ?NonZeroAndMaxString,
    ?'peer_vpc_id' => ?NonZeroAndMaxString,
    ?'resource_creation_limit_policy' => ?ResourceCreationLimitPolicy,
    ?'runtime_configuration' => ?RuntimeConfiguration,
    ?'script_id' => ?ScriptIdOrArn,
    ?'server_launch_parameters' => ?NonZeroAndMaxString,
    ?'server_launch_path' => ?NonZeroAndMaxString,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->build_id = $s['build_id'] ?? '';
    $this->certificate_configuration = $s['certificate_configuration'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->ec_2_inbound_permissions = $s['ec_2_inbound_permissions'] ?? vec[];
    $this->ec_2_instance_type = $s['ec_2_instance_type'] ?? '';
    $this->fleet_type = $s['fleet_type'] ?? '';
    $this->instance_role_arn = $s['instance_role_arn'] ?? '';
    $this->log_paths = $s['log_paths'] ?? vec[];
    $this->metric_groups = $s['metric_groups'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->new_game_session_protection_policy = $s['new_game_session_protection_policy'] ?? '';
    $this->peer_vpc_aws_account_id = $s['peer_vpc_aws_account_id'] ?? '';
    $this->peer_vpc_id = $s['peer_vpc_id'] ?? '';
    $this->resource_creation_limit_policy = $s['resource_creation_limit_policy'] ?? null;
    $this->runtime_configuration = $s['runtime_configuration'] ?? null;
    $this->script_id = $s['script_id'] ?? '';
    $this->server_launch_parameters = $s['server_launch_parameters'] ?? '';
    $this->server_launch_path = $s['server_launch_path'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateFleetOutput {
  public ?FleetAttributes $fleet_attributes;

  public function __construct(shape(
    ?'fleet_attributes' => ?FleetAttributes,
  ) $s = shape()) {
    $this->fleet_attributes = $s['fleet_attributes'] ?? null;
  }
}

class CreateGameServerGroupInput {
  public ?GameServerGroupAutoScalingPolicy $auto_scaling_policy;
  public ?BalancingStrategy $balancing_strategy;
  public ?GameServerGroupName $game_server_group_name;
  public ?GameServerProtectionPolicy $game_server_protection_policy;
  public ?InstanceDefinitions $instance_definitions;
  public ?LaunchTemplateSpecification $launch_template;
  public ?PositiveInteger $max_size;
  public ?WholeNumber $min_size;
  public ?IamRoleArn $role_arn;
  public ?TagList $tags;
  public ?VpcSubnets $vpc_subnets;

  public function __construct(shape(
    ?'auto_scaling_policy' => ?GameServerGroupAutoScalingPolicy,
    ?'balancing_strategy' => ?BalancingStrategy,
    ?'game_server_group_name' => ?GameServerGroupName,
    ?'game_server_protection_policy' => ?GameServerProtectionPolicy,
    ?'instance_definitions' => ?InstanceDefinitions,
    ?'launch_template' => ?LaunchTemplateSpecification,
    ?'max_size' => ?PositiveInteger,
    ?'min_size' => ?WholeNumber,
    ?'role_arn' => ?IamRoleArn,
    ?'tags' => ?TagList,
    ?'vpc_subnets' => ?VpcSubnets,
  ) $s = shape()) {
    $this->auto_scaling_policy = $s['auto_scaling_policy'] ?? null;
    $this->balancing_strategy = $s['balancing_strategy'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_protection_policy = $s['game_server_protection_policy'] ?? '';
    $this->instance_definitions = $s['instance_definitions'] ?? vec[];
    $this->launch_template = $s['launch_template'] ?? null;
    $this->max_size = $s['max_size'] ?? 0;
    $this->min_size = $s['min_size'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_subnets = $s['vpc_subnets'] ?? vec[];
  }
}

class CreateGameServerGroupOutput {
  public ?GameServerGroup $game_server_group;

  public function __construct(shape(
    ?'game_server_group' => ?GameServerGroup,
  ) $s = shape()) {
    $this->game_server_group = $s['game_server_group'] ?? null;
  }
}

class CreateGameSessionInput {
  public ?AliasIdOrArn $alias_id;
  public ?NonZeroAndMaxString $creator_id;
  public ?FleetIdOrArn $fleet_id;
  public ?GamePropertyList $game_properties;
  public ?GameSessionData $game_session_data;
  public ?IdStringModel $game_session_id;
  public ?IdStringModel $idempotency_token;
  public ?WholeNumber $maximum_player_session_count;
  public ?NonZeroAndMaxString $name;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
    ?'creator_id' => ?NonZeroAndMaxString,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'game_properties' => ?GamePropertyList,
    ?'game_session_data' => ?GameSessionData,
    ?'game_session_id' => ?IdStringModel,
    ?'idempotency_token' => ?IdStringModel,
    ?'maximum_player_session_count' => ?WholeNumber,
    ?'name' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
    $this->creator_id = $s['creator_id'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->game_properties = $s['game_properties'] ?? vec[];
    $this->game_session_data = $s['game_session_data'] ?? '';
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->maximum_player_session_count = $s['maximum_player_session_count'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

class CreateGameSessionOutput {
  public ?GameSession $game_session;

  public function __construct(shape(
    ?'game_session' => ?GameSession,
  ) $s = shape()) {
    $this->game_session = $s['game_session'] ?? null;
  }
}

class CreateGameSessionQueueInput {
  public ?GameSessionQueueDestinationList $destinations;
  public ?GameSessionQueueName $name;
  public ?PlayerLatencyPolicyList $player_latency_policies;
  public ?TagList $tags;
  public ?WholeNumber $timeout_in_seconds;

  public function __construct(shape(
    ?'destinations' => ?GameSessionQueueDestinationList,
    ?'name' => ?GameSessionQueueName,
    ?'player_latency_policies' => ?PlayerLatencyPolicyList,
    ?'tags' => ?TagList,
    ?'timeout_in_seconds' => ?WholeNumber,
  ) $s = shape()) {
    $this->destinations = $s['destinations'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->player_latency_policies = $s['player_latency_policies'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->timeout_in_seconds = $s['timeout_in_seconds'] ?? 0;
  }
}

class CreateGameSessionQueueOutput {
  public ?GameSessionQueue $game_session_queue;

  public function __construct(shape(
    ?'game_session_queue' => ?GameSessionQueue,
  ) $s = shape()) {
    $this->game_session_queue = $s['game_session_queue'] ?? null;
  }
}

class CreateMatchmakingConfigurationInput {
  public ?BooleanModel $acceptance_required;
  public ?MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public ?WholeNumber $additional_player_count;
  public ?BackfillMode $backfill_mode;
  public ?CustomEventData $custom_event_data;
  public ?NonZeroAndMaxString $description;
  public ?GamePropertyList $game_properties;
  public ?GameSessionData $game_session_data;
  public ?QueueArnsList $game_session_queue_arns;
  public ?MatchmakingIdStringModel $name;
  public ?SnsArnStringModel $notification_target;
  public ?MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public ?MatchmakingRuleSetName $rule_set_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'acceptance_required' => ?BooleanModel,
    ?'acceptance_timeout_seconds' => ?MatchmakingAcceptanceTimeoutInteger,
    ?'additional_player_count' => ?WholeNumber,
    ?'backfill_mode' => ?BackfillMode,
    ?'custom_event_data' => ?CustomEventData,
    ?'description' => ?NonZeroAndMaxString,
    ?'game_properties' => ?GamePropertyList,
    ?'game_session_data' => ?GameSessionData,
    ?'game_session_queue_arns' => ?QueueArnsList,
    ?'name' => ?MatchmakingIdStringModel,
    ?'notification_target' => ?SnsArnStringModel,
    ?'request_timeout_seconds' => ?MatchmakingRequestTimeoutInteger,
    ?'rule_set_name' => ?MatchmakingRuleSetName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->acceptance_required = $s['acceptance_required'] ?? false;
    $this->acceptance_timeout_seconds = $s['acceptance_timeout_seconds'] ?? 0;
    $this->additional_player_count = $s['additional_player_count'] ?? 0;
    $this->backfill_mode = $s['backfill_mode'] ?? '';
    $this->custom_event_data = $s['custom_event_data'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->game_properties = $s['game_properties'] ?? vec[];
    $this->game_session_data = $s['game_session_data'] ?? '';
    $this->game_session_queue_arns = $s['game_session_queue_arns'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->notification_target = $s['notification_target'] ?? '';
    $this->request_timeout_seconds = $s['request_timeout_seconds'] ?? 0;
    $this->rule_set_name = $s['rule_set_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateMatchmakingConfigurationOutput {
  public ?MatchmakingConfiguration $configuration;

  public function __construct(shape(
    ?'configuration' => ?MatchmakingConfiguration,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
  }
}

class CreateMatchmakingRuleSetInput {
  public ?MatchmakingIdStringModel $name;
  public ?RuleSetBody $rule_set_body;
  public ?TagList $tags;

  public function __construct(shape(
    ?'name' => ?MatchmakingIdStringModel,
    ?'rule_set_body' => ?RuleSetBody,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->rule_set_body = $s['rule_set_body'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateMatchmakingRuleSetOutput {
  public ?MatchmakingRuleSet $rule_set;

  public function __construct(shape(
    ?'rule_set' => ?MatchmakingRuleSet,
  ) $s = shape()) {
    $this->rule_set = $s['rule_set'] ?? null;
  }
}

class CreatePlayerSessionInput {
  public ?ArnStringModel $game_session_id;
  public ?PlayerData $player_data;
  public ?NonZeroAndMaxString $player_id;

  public function __construct(shape(
    ?'game_session_id' => ?ArnStringModel,
    ?'player_data' => ?PlayerData,
    ?'player_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->player_data = $s['player_data'] ?? '';
    $this->player_id = $s['player_id'] ?? '';
  }
}

class CreatePlayerSessionOutput {
  public ?PlayerSession $player_session;

  public function __construct(shape(
    ?'player_session' => ?PlayerSession,
  ) $s = shape()) {
    $this->player_session = $s['player_session'] ?? null;
  }
}

class CreatePlayerSessionsInput {
  public ?ArnStringModel $game_session_id;
  public ?PlayerDataMap $player_data_map;
  public ?PlayerIdList $player_ids;

  public function __construct(shape(
    ?'game_session_id' => ?ArnStringModel,
    ?'player_data_map' => ?PlayerDataMap,
    ?'player_ids' => ?PlayerIdList,
  ) $s = shape()) {
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->player_data_map = $s['player_data_map'] ?? dict[];
    $this->player_ids = $s['player_ids'] ?? vec[];
  }
}

class CreatePlayerSessionsOutput {
  public ?PlayerSessionList $player_sessions;

  public function __construct(shape(
    ?'player_sessions' => ?PlayerSessionList,
  ) $s = shape()) {
    $this->player_sessions = $s['player_sessions'] ?? vec[];
  }
}

class CreateScriptInput {
  public ?NonZeroAndMaxString $name;
  public ?S3Location $storage_location;
  public ?TagList $tags;
  public ?NonZeroAndMaxString $version;
  public ?ZipBlob $zip_file;

  public function __construct(shape(
    ?'name' => ?NonZeroAndMaxString,
    ?'storage_location' => ?S3Location,
    ?'tags' => ?TagList,
    ?'version' => ?NonZeroAndMaxString,
    ?'zip_file' => ?ZipBlob,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->storage_location = $s['storage_location'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->version = $s['version'] ?? '';
    $this->zip_file = $s['zip_file'] ?? '';
  }
}

class CreateScriptOutput {
  public ?Script $script;

  public function __construct(shape(
    ?'script' => ?Script,
  ) $s = shape()) {
    $this->script = $s['script'] ?? null;
  }
}

class CreateVpcPeeringAuthorizationInput {
  public ?NonZeroAndMaxString $game_lift_aws_account_id;
  public ?NonZeroAndMaxString $peer_vpc_id;

  public function __construct(shape(
    ?'game_lift_aws_account_id' => ?NonZeroAndMaxString,
    ?'peer_vpc_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_lift_aws_account_id = $s['game_lift_aws_account_id'] ?? '';
    $this->peer_vpc_id = $s['peer_vpc_id'] ?? '';
  }
}

class CreateVpcPeeringAuthorizationOutput {
  public ?VpcPeeringAuthorization $vpc_peering_authorization;

  public function __construct(shape(
    ?'vpc_peering_authorization' => ?VpcPeeringAuthorization,
  ) $s = shape()) {
    $this->vpc_peering_authorization = $s['vpc_peering_authorization'] ?? null;
  }
}

class CreateVpcPeeringConnectionInput {
  public ?FleetId $fleet_id;
  public ?NonZeroAndMaxString $peer_vpc_aws_account_id;
  public ?NonZeroAndMaxString $peer_vpc_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
    ?'peer_vpc_aws_account_id' => ?NonZeroAndMaxString,
    ?'peer_vpc_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->peer_vpc_aws_account_id = $s['peer_vpc_aws_account_id'] ?? '';
    $this->peer_vpc_id = $s['peer_vpc_id'] ?? '';
  }
}

class CreateVpcPeeringConnectionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CustomEventData = string;

class DeleteAliasInput {
  public ?AliasIdOrArn $alias_id;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
  }
}

class DeleteBuildInput {
  public ?BuildIdOrArn $build_id;

  public function __construct(shape(
    ?'build_id' => ?BuildIdOrArn,
  ) $s = shape()) {
    $this->build_id = $s['build_id'] ?? '';
  }
}

class DeleteFleetInput {
  public ?FleetIdOrArn $fleet_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class DeleteGameServerGroupInput {
  public ?GameServerGroupDeleteOption $delete_option;
  public ?GameServerGroupNameOrArn $game_server_group_name;

  public function __construct(shape(
    ?'delete_option' => ?GameServerGroupDeleteOption,
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
  ) $s = shape()) {
    $this->delete_option = $s['delete_option'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
  }
}

class DeleteGameServerGroupOutput {
  public ?GameServerGroup $game_server_group;

  public function __construct(shape(
    ?'game_server_group' => ?GameServerGroup,
  ) $s = shape()) {
    $this->game_server_group = $s['game_server_group'] ?? null;
  }
}

class DeleteGameSessionQueueInput {
  public ?GameSessionQueueNameOrArn $name;

  public function __construct(shape(
    ?'name' => ?GameSessionQueueNameOrArn,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteGameSessionQueueOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteMatchmakingConfigurationInput {
  public ?MatchmakingConfigurationName $name;

  public function __construct(shape(
    ?'name' => ?MatchmakingConfigurationName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteMatchmakingConfigurationOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteMatchmakingRuleSetInput {
  public ?MatchmakingRuleSetName $name;

  public function __construct(shape(
    ?'name' => ?MatchmakingRuleSetName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeleteMatchmakingRuleSetOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteScalingPolicyInput {
  public ?FleetIdOrArn $fleet_id;
  public ?NonZeroAndMaxString $name;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
    ?'name' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class DeleteScriptInput {
  public ?ScriptIdOrArn $script_id;

  public function __construct(shape(
    ?'script_id' => ?ScriptIdOrArn,
  ) $s = shape()) {
    $this->script_id = $s['script_id'] ?? '';
  }
}

class DeleteVpcPeeringAuthorizationInput {
  public ?NonZeroAndMaxString $game_lift_aws_account_id;
  public ?NonZeroAndMaxString $peer_vpc_id;

  public function __construct(shape(
    ?'game_lift_aws_account_id' => ?NonZeroAndMaxString,
    ?'peer_vpc_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_lift_aws_account_id = $s['game_lift_aws_account_id'] ?? '';
    $this->peer_vpc_id = $s['peer_vpc_id'] ?? '';
  }
}

class DeleteVpcPeeringAuthorizationOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteVpcPeeringConnectionInput {
  public ?FleetId $fleet_id;
  public ?NonZeroAndMaxString $vpc_peering_connection_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
    ?'vpc_peering_connection_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

class DeleteVpcPeeringConnectionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterGameServerInput {
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerId $game_server_id;

  public function __construct(shape(
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'game_server_id' => ?GameServerId,
  ) $s = shape()) {
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_id = $s['game_server_id'] ?? '';
  }
}

class DescribeAliasInput {
  public ?AliasIdOrArn $alias_id;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
  }
}

class DescribeAliasOutput {
  public ?Alias $alias;

  public function __construct(shape(
    ?'alias' => ?Alias,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? null;
  }
}

class DescribeBuildInput {
  public ?BuildIdOrArn $build_id;

  public function __construct(shape(
    ?'build_id' => ?BuildIdOrArn,
  ) $s = shape()) {
    $this->build_id = $s['build_id'] ?? '';
  }
}

class DescribeBuildOutput {
  public ?Build $build;

  public function __construct(shape(
    ?'build' => ?Build,
  ) $s = shape()) {
    $this->build = $s['build'] ?? null;
  }
}

class DescribeEC2InstanceLimitsInput {
  public ?EC2InstanceType $ec_2_instance_type;

  public function __construct(shape(
    ?'ec_2_instance_type' => ?EC2InstanceType,
  ) $s = shape()) {
    $this->ec_2_instance_type = $s['ec_2_instance_type'] ?? '';
  }
}

class DescribeEC2InstanceLimitsOutput {
  public ?EC2InstanceLimitList $ec_2_instance_limits;

  public function __construct(shape(
    ?'ec_2_instance_limits' => ?EC2InstanceLimitList,
  ) $s = shape()) {
    $this->ec_2_instance_limits = $s['ec_2_instance_limits'] ?? vec[];
  }
}

class DescribeFleetAttributesInput {
  public ?FleetIdOrArnList $fleet_ids;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_ids' => ?FleetIdOrArnList,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_ids = $s['fleet_ids'] ?? vec[];
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetAttributesOutput {
  public ?FleetAttributesList $fleet_attributes;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_attributes' => ?FleetAttributesList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_attributes = $s['fleet_attributes'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetCapacityInput {
  public ?FleetIdOrArnList $fleet_ids;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_ids' => ?FleetIdOrArnList,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_ids = $s['fleet_ids'] ?? vec[];
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetCapacityOutput {
  public ?FleetCapacityList $fleet_capacity;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_capacity' => ?FleetCapacityList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_capacity = $s['fleet_capacity'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetEventsInput {
  public ?Timestamp $end_time;
  public ?FleetIdOrArn $fleet_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeFleetEventsOutput {
  public ?EventList $events;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'events' => ?EventList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetPortSettingsInput {
  public ?FleetIdOrArn $fleet_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class DescribeFleetPortSettingsOutput {
  public ?IpPermissionsList $inbound_permissions;

  public function __construct(shape(
    ?'inbound_permissions' => ?IpPermissionsList,
  ) $s = shape()) {
    $this->inbound_permissions = $s['inbound_permissions'] ?? vec[];
  }
}

class DescribeFleetUtilizationInput {
  public ?FleetIdOrArnList $fleet_ids;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_ids' => ?FleetIdOrArnList,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_ids = $s['fleet_ids'] ?? vec[];
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetUtilizationOutput {
  public ?FleetUtilizationList $fleet_utilization;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_utilization' => ?FleetUtilizationList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_utilization = $s['fleet_utilization'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeGameServerGroupInput {
  public ?GameServerGroupNameOrArn $game_server_group_name;

  public function __construct(shape(
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
  ) $s = shape()) {
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
  }
}

class DescribeGameServerGroupOutput {
  public ?GameServerGroup $game_server_group;

  public function __construct(shape(
    ?'game_server_group' => ?GameServerGroup,
  ) $s = shape()) {
    $this->game_server_group = $s['game_server_group'] ?? null;
  }
}

class DescribeGameServerInput {
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerId $game_server_id;

  public function __construct(shape(
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'game_server_id' => ?GameServerId,
  ) $s = shape()) {
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_id = $s['game_server_id'] ?? '';
  }
}

class DescribeGameServerOutput {
  public ?GameServer $game_server;

  public function __construct(shape(
    ?'game_server' => ?GameServer,
  ) $s = shape()) {
    $this->game_server = $s['game_server'] ?? null;
  }
}

class DescribeGameSessionDetailsInput {
  public ?AliasIdOrArn $alias_id;
  public ?FleetIdOrArn $fleet_id;
  public ?ArnStringModel $game_session_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?NonZeroAndMaxString $status_filter;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'game_session_id' => ?ArnStringModel,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'status_filter' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status_filter = $s['status_filter'] ?? '';
  }
}

class DescribeGameSessionDetailsOutput {
  public ?GameSessionDetailList $game_session_details;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'game_session_details' => ?GameSessionDetailList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_session_details = $s['game_session_details'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeGameSessionPlacementInput {
  public ?IdStringModel $placement_id;

  public function __construct(shape(
    ?'placement_id' => ?IdStringModel,
  ) $s = shape()) {
    $this->placement_id = $s['placement_id'] ?? '';
  }
}

class DescribeGameSessionPlacementOutput {
  public ?GameSessionPlacement $game_session_placement;

  public function __construct(shape(
    ?'game_session_placement' => ?GameSessionPlacement,
  ) $s = shape()) {
    $this->game_session_placement = $s['game_session_placement'] ?? null;
  }
}

class DescribeGameSessionQueuesInput {
  public ?PositiveInteger $limit;
  public ?GameSessionQueueNameOrArnList $names;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'limit' => ?PositiveInteger,
    ?'names' => ?GameSessionQueueNameOrArnList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->names = $s['names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeGameSessionQueuesOutput {
  public ?GameSessionQueueList $game_session_queues;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'game_session_queues' => ?GameSessionQueueList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_session_queues = $s['game_session_queues'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeGameSessionsInput {
  public ?AliasIdOrArn $alias_id;
  public ?FleetIdOrArn $fleet_id;
  public ?ArnStringModel $game_session_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?NonZeroAndMaxString $status_filter;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'game_session_id' => ?ArnStringModel,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'status_filter' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status_filter = $s['status_filter'] ?? '';
  }
}

class DescribeGameSessionsOutput {
  public ?GameSessionList $game_sessions;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'game_sessions' => ?GameSessionList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_sessions = $s['game_sessions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstancesInput {
  public ?FleetIdOrArn $fleet_id;
  public ?InstanceId $instance_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
    ?'instance_id' => ?InstanceId,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstancesOutput {
  public ?InstanceList $instances;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'instances' => ?InstanceList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeMatchmakingConfigurationsInput {
  public ?PositiveInteger $limit;
  public ?MatchmakingConfigurationNameList $names;
  public ?NonZeroAndMaxString $next_token;
  public ?MatchmakingRuleSetName $rule_set_name;

  public function __construct(shape(
    ?'limit' => ?PositiveInteger,
    ?'names' => ?MatchmakingConfigurationNameList,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'rule_set_name' => ?MatchmakingRuleSetName,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->names = $s['names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->rule_set_name = $s['rule_set_name'] ?? '';
  }
}

class DescribeMatchmakingConfigurationsOutput {
  public ?MatchmakingConfigurationList $configurations;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'configurations' => ?MatchmakingConfigurationList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->configurations = $s['configurations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeMatchmakingInput {
  public ?MatchmakingIdList $ticket_ids;

  public function __construct(shape(
    ?'ticket_ids' => ?MatchmakingIdList,
  ) $s = shape()) {
    $this->ticket_ids = $s['ticket_ids'] ?? vec[];
  }
}

class DescribeMatchmakingOutput {
  public ?MatchmakingTicketList $ticket_list;

  public function __construct(shape(
    ?'ticket_list' => ?MatchmakingTicketList,
  ) $s = shape()) {
    $this->ticket_list = $s['ticket_list'] ?? vec[];
  }
}

class DescribeMatchmakingRuleSetsInput {
  public ?RuleSetLimit $limit;
  public ?MatchmakingRuleSetNameList $names;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'limit' => ?RuleSetLimit,
    ?'names' => ?MatchmakingRuleSetNameList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->names = $s['names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeMatchmakingRuleSetsOutput {
  public ?NonZeroAndMaxString $next_token;
  public ?MatchmakingRuleSetList $rule_sets;

  public function __construct(shape(
    ?'next_token' => ?NonZeroAndMaxString,
    ?'rule_sets' => ?MatchmakingRuleSetList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->rule_sets = $s['rule_sets'] ?? vec[];
  }
}

class DescribePlayerSessionsInput {
  public ?ArnStringModel $game_session_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?NonZeroAndMaxString $player_id;
  public ?PlayerSessionId $player_session_id;
  public ?NonZeroAndMaxString $player_session_status_filter;

  public function __construct(shape(
    ?'game_session_id' => ?ArnStringModel,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'player_id' => ?NonZeroAndMaxString,
    ?'player_session_id' => ?PlayerSessionId,
    ?'player_session_status_filter' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->player_id = $s['player_id'] ?? '';
    $this->player_session_id = $s['player_session_id'] ?? '';
    $this->player_session_status_filter = $s['player_session_status_filter'] ?? '';
  }
}

class DescribePlayerSessionsOutput {
  public ?NonZeroAndMaxString $next_token;
  public ?PlayerSessionList $player_sessions;

  public function __construct(shape(
    ?'next_token' => ?NonZeroAndMaxString,
    ?'player_sessions' => ?PlayerSessionList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->player_sessions = $s['player_sessions'] ?? vec[];
  }
}

class DescribeRuntimeConfigurationInput {
  public ?FleetIdOrArn $fleet_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class DescribeRuntimeConfigurationOutput {
  public ?RuntimeConfiguration $runtime_configuration;

  public function __construct(shape(
    ?'runtime_configuration' => ?RuntimeConfiguration,
  ) $s = shape()) {
    $this->runtime_configuration = $s['runtime_configuration'] ?? null;
  }
}

class DescribeScalingPoliciesInput {
  public ?FleetIdOrArn $fleet_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?ScalingStatusType $status_filter;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'status_filter' => ?ScalingStatusType,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status_filter = $s['status_filter'] ?? '';
  }
}

class DescribeScalingPoliciesOutput {
  public ?NonZeroAndMaxString $next_token;
  public ?ScalingPolicyList $scaling_policies;

  public function __construct(shape(
    ?'next_token' => ?NonZeroAndMaxString,
    ?'scaling_policies' => ?ScalingPolicyList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->scaling_policies = $s['scaling_policies'] ?? vec[];
  }
}

class DescribeScriptInput {
  public ?ScriptIdOrArn $script_id;

  public function __construct(shape(
    ?'script_id' => ?ScriptIdOrArn,
  ) $s = shape()) {
    $this->script_id = $s['script_id'] ?? '';
  }
}

class DescribeScriptOutput {
  public ?Script $script;

  public function __construct(shape(
    ?'script' => ?Script,
  ) $s = shape()) {
    $this->script = $s['script'] ?? null;
  }
}

class DescribeVpcPeeringAuthorizationsInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeVpcPeeringAuthorizationsOutput {
  public ?VpcPeeringAuthorizationList $vpc_peering_authorizations;

  public function __construct(shape(
    ?'vpc_peering_authorizations' => ?VpcPeeringAuthorizationList,
  ) $s = shape()) {
    $this->vpc_peering_authorizations = $s['vpc_peering_authorizations'] ?? vec[];
  }
}

class DescribeVpcPeeringConnectionsInput {
  public ?FleetId $fleet_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class DescribeVpcPeeringConnectionsOutput {
  public ?VpcPeeringConnectionList $vpc_peering_connections;

  public function __construct(shape(
    ?'vpc_peering_connections' => ?VpcPeeringConnectionList,
  ) $s = shape()) {
    $this->vpc_peering_connections = $s['vpc_peering_connections'] ?? vec[];
  }
}

class DesiredPlayerSession {
  public ?PlayerData $player_data;
  public ?NonZeroAndMaxString $player_id;

  public function __construct(shape(
    ?'player_data' => ?PlayerData,
    ?'player_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->player_data = $s['player_data'] ?? '';
    $this->player_id = $s['player_id'] ?? '';
  }
}

type DesiredPlayerSessionList = vec<DesiredPlayerSession>;

type DnsName = string;

type Double = float;

type DoubleObject = float;

class EC2InstanceCounts {
  public ?WholeNumber $active;
  public ?WholeNumber $desired;
  public ?WholeNumber $idle;
  public ?WholeNumber $maximum;
  public ?WholeNumber $minimum;
  public ?WholeNumber $pending;
  public ?WholeNumber $terminating;

  public function __construct(shape(
    ?'active' => ?WholeNumber,
    ?'desired' => ?WholeNumber,
    ?'idle' => ?WholeNumber,
    ?'maximum' => ?WholeNumber,
    ?'minimum' => ?WholeNumber,
    ?'pending' => ?WholeNumber,
    ?'terminating' => ?WholeNumber,
  ) $s = shape()) {
    $this->active = $s['active'] ?? 0;
    $this->desired = $s['desired'] ?? 0;
    $this->idle = $s['idle'] ?? 0;
    $this->maximum = $s['maximum'] ?? 0;
    $this->minimum = $s['minimum'] ?? 0;
    $this->pending = $s['pending'] ?? 0;
    $this->terminating = $s['terminating'] ?? 0;
  }
}

class EC2InstanceLimit {
  public ?WholeNumber $current_instances;
  public ?EC2InstanceType $ec_2_instance_type;
  public ?WholeNumber $instance_limit;

  public function __construct(shape(
    ?'current_instances' => ?WholeNumber,
    ?'ec_2_instance_type' => ?EC2InstanceType,
    ?'instance_limit' => ?WholeNumber,
  ) $s = shape()) {
    $this->current_instances = $s['current_instances'] ?? 0;
    $this->ec_2_instance_type = $s['ec_2_instance_type'] ?? '';
    $this->instance_limit = $s['instance_limit'] ?? 0;
  }
}

type EC2InstanceLimitList = vec<EC2InstanceLimit>;

type EC2InstanceType = string;

class Event {
  public ?EventCode $event_code;
  public ?NonZeroAndMaxString $event_id;
  public ?Timestamp $event_time;
  public ?NonEmptyString $message;
  public ?NonZeroAndMaxString $pre_signed_log_url;
  public ?NonZeroAndMaxString $resource_id;

  public function __construct(shape(
    ?'event_code' => ?EventCode,
    ?'event_id' => ?NonZeroAndMaxString,
    ?'event_time' => ?Timestamp,
    ?'message' => ?NonEmptyString,
    ?'pre_signed_log_url' => ?NonZeroAndMaxString,
    ?'resource_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->event_code = $s['event_code'] ?? '';
    $this->event_id = $s['event_id'] ?? '';
    $this->event_time = $s['event_time'] ?? 0;
    $this->message = $s['message'] ?? '';
    $this->pre_signed_log_url = $s['pre_signed_log_url'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

type EventCode = string;

type EventList = vec<Event>;

type FleetAction = string;

type FleetActionList = vec<FleetAction>;

type FleetArn = string;

class FleetAttributes {
  public ?BuildArn $build_arn;
  public ?BuildId $build_id;
  public ?CertificateConfiguration $certificate_configuration;
  public ?Timestamp $creation_time;
  public ?NonZeroAndMaxString $description;
  public ?FleetArn $fleet_arn;
  public ?FleetId $fleet_id;
  public ?FleetType $fleet_type;
  public ?NonEmptyString $instance_role_arn;
  public ?EC2InstanceType $instance_type;
  public ?StringList $log_paths;
  public ?MetricGroupList $metric_groups;
  public ?NonZeroAndMaxString $name;
  public ?ProtectionPolicy $new_game_session_protection_policy;
  public ?OperatingSystem $operating_system;
  public ?ResourceCreationLimitPolicy $resource_creation_limit_policy;
  public ?ScriptArn $script_arn;
  public ?ScriptId $script_id;
  public ?NonZeroAndMaxString $server_launch_parameters;
  public ?NonZeroAndMaxString $server_launch_path;
  public ?FleetStatus $status;
  public ?FleetActionList $stopped_actions;
  public ?Timestamp $termination_time;

  public function __construct(shape(
    ?'build_arn' => ?BuildArn,
    ?'build_id' => ?BuildId,
    ?'certificate_configuration' => ?CertificateConfiguration,
    ?'creation_time' => ?Timestamp,
    ?'description' => ?NonZeroAndMaxString,
    ?'fleet_arn' => ?FleetArn,
    ?'fleet_id' => ?FleetId,
    ?'fleet_type' => ?FleetType,
    ?'instance_role_arn' => ?NonEmptyString,
    ?'instance_type' => ?EC2InstanceType,
    ?'log_paths' => ?StringList,
    ?'metric_groups' => ?MetricGroupList,
    ?'name' => ?NonZeroAndMaxString,
    ?'new_game_session_protection_policy' => ?ProtectionPolicy,
    ?'operating_system' => ?OperatingSystem,
    ?'resource_creation_limit_policy' => ?ResourceCreationLimitPolicy,
    ?'script_arn' => ?ScriptArn,
    ?'script_id' => ?ScriptId,
    ?'server_launch_parameters' => ?NonZeroAndMaxString,
    ?'server_launch_path' => ?NonZeroAndMaxString,
    ?'status' => ?FleetStatus,
    ?'stopped_actions' => ?FleetActionList,
    ?'termination_time' => ?Timestamp,
  ) $s = shape()) {
    $this->build_arn = $s['build_arn'] ?? '';
    $this->build_id = $s['build_id'] ?? '';
    $this->certificate_configuration = $s['certificate_configuration'] ?? null;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->fleet_type = $s['fleet_type'] ?? '';
    $this->instance_role_arn = $s['instance_role_arn'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->log_paths = $s['log_paths'] ?? vec[];
    $this->metric_groups = $s['metric_groups'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->new_game_session_protection_policy = $s['new_game_session_protection_policy'] ?? '';
    $this->operating_system = $s['operating_system'] ?? '';
    $this->resource_creation_limit_policy = $s['resource_creation_limit_policy'] ?? null;
    $this->script_arn = $s['script_arn'] ?? '';
    $this->script_id = $s['script_id'] ?? '';
    $this->server_launch_parameters = $s['server_launch_parameters'] ?? '';
    $this->server_launch_path = $s['server_launch_path'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->stopped_actions = $s['stopped_actions'] ?? vec[];
    $this->termination_time = $s['termination_time'] ?? 0;
  }
}

type FleetAttributesList = vec<FleetAttributes>;

class FleetCapacity {
  public ?FleetId $fleet_id;
  public ?EC2InstanceCounts $instance_counts;
  public ?EC2InstanceType $instance_type;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
    ?'instance_counts' => ?EC2InstanceCounts,
    ?'instance_type' => ?EC2InstanceType,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->instance_counts = $s['instance_counts'] ?? null;
    $this->instance_type = $s['instance_type'] ?? '';
  }
}

class FleetCapacityExceededException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type FleetCapacityList = vec<FleetCapacity>;

type FleetId = string;

type FleetIdList = vec<FleetId>;

type FleetIdOrArn = string;

type FleetIdOrArnList = vec<FleetIdOrArn>;

type FleetStatus = string;

type FleetType = string;

class FleetUtilization {
  public ?WholeNumber $active_game_session_count;
  public ?WholeNumber $active_server_process_count;
  public ?WholeNumber $current_player_session_count;
  public ?FleetId $fleet_id;
  public ?WholeNumber $maximum_player_session_count;

  public function __construct(shape(
    ?'active_game_session_count' => ?WholeNumber,
    ?'active_server_process_count' => ?WholeNumber,
    ?'current_player_session_count' => ?WholeNumber,
    ?'fleet_id' => ?FleetId,
    ?'maximum_player_session_count' => ?WholeNumber,
  ) $s = shape()) {
    $this->active_game_session_count = $s['active_game_session_count'] ?? 0;
    $this->active_server_process_count = $s['active_server_process_count'] ?? 0;
    $this->current_player_session_count = $s['current_player_session_count'] ?? 0;
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->maximum_player_session_count = $s['maximum_player_session_count'] ?? 0;
  }
}

type FleetUtilizationList = vec<FleetUtilization>;

type Float = float;

type FreeText = string;

class GameProperty {
  public ?GamePropertyKey $key;
  public ?GamePropertyValue $value;

  public function __construct(shape(
    ?'key' => ?GamePropertyKey,
    ?'value' => ?GamePropertyValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type GamePropertyKey = string;

type GamePropertyList = vec<GameProperty>;

type GamePropertyValue = string;

class GameServer {
  public ?GameServerClaimStatus $claim_status;
  public ?GameServerConnectionInfo $connection_info;
  public ?GameServerSortKey $custom_sort_key;
  public ?GameServerData $game_server_data;
  public ?GameServerGroupArn $game_server_group_arn;
  public ?GameServerGroupName $game_server_group_name;
  public ?GameServerId $game_server_id;
  public ?GameServerInstanceId $instance_id;
  public ?Timestamp $last_claim_time;
  public ?Timestamp $last_health_check_time;
  public ?Timestamp $registration_time;
  public ?GameServerUtilizationStatus $utilization_status;

  public function __construct(shape(
    ?'claim_status' => ?GameServerClaimStatus,
    ?'connection_info' => ?GameServerConnectionInfo,
    ?'custom_sort_key' => ?GameServerSortKey,
    ?'game_server_data' => ?GameServerData,
    ?'game_server_group_arn' => ?GameServerGroupArn,
    ?'game_server_group_name' => ?GameServerGroupName,
    ?'game_server_id' => ?GameServerId,
    ?'instance_id' => ?GameServerInstanceId,
    ?'last_claim_time' => ?Timestamp,
    ?'last_health_check_time' => ?Timestamp,
    ?'registration_time' => ?Timestamp,
    ?'utilization_status' => ?GameServerUtilizationStatus,
  ) $s = shape()) {
    $this->claim_status = $s['claim_status'] ?? '';
    $this->connection_info = $s['connection_info'] ?? '';
    $this->custom_sort_key = $s['custom_sort_key'] ?? '';
    $this->game_server_data = $s['game_server_data'] ?? '';
    $this->game_server_group_arn = $s['game_server_group_arn'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_id = $s['game_server_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->last_claim_time = $s['last_claim_time'] ?? 0;
    $this->last_health_check_time = $s['last_health_check_time'] ?? 0;
    $this->registration_time = $s['registration_time'] ?? 0;
    $this->utilization_status = $s['utilization_status'] ?? '';
  }
}

type GameServerClaimStatus = string;

type GameServerConnectionInfo = string;

type GameServerData = string;

class GameServerGroup {
  public ?AutoScalingGroupArn $auto_scaling_group_arn;
  public ?BalancingStrategy $balancing_strategy;
  public ?Timestamp $creation_time;
  public ?GameServerGroupArn $game_server_group_arn;
  public ?GameServerGroupName $game_server_group_name;
  public ?GameServerProtectionPolicy $game_server_protection_policy;
  public ?InstanceDefinitions $instance_definitions;
  public ?Timestamp $last_updated_time;
  public ?IamRoleArn $role_arn;
  public ?GameServerGroupStatus $status;
  public ?NonZeroAndMaxString $status_reason;
  public ?GameServerGroupActions $suspended_actions;

  public function __construct(shape(
    ?'auto_scaling_group_arn' => ?AutoScalingGroupArn,
    ?'balancing_strategy' => ?BalancingStrategy,
    ?'creation_time' => ?Timestamp,
    ?'game_server_group_arn' => ?GameServerGroupArn,
    ?'game_server_group_name' => ?GameServerGroupName,
    ?'game_server_protection_policy' => ?GameServerProtectionPolicy,
    ?'instance_definitions' => ?InstanceDefinitions,
    ?'last_updated_time' => ?Timestamp,
    ?'role_arn' => ?IamRoleArn,
    ?'status' => ?GameServerGroupStatus,
    ?'status_reason' => ?NonZeroAndMaxString,
    ?'suspended_actions' => ?GameServerGroupActions,
  ) $s = shape()) {
    $this->auto_scaling_group_arn = $s['auto_scaling_group_arn'] ?? '';
    $this->balancing_strategy = $s['balancing_strategy'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->game_server_group_arn = $s['game_server_group_arn'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_protection_policy = $s['game_server_protection_policy'] ?? '';
    $this->instance_definitions = $s['instance_definitions'] ?? vec[];
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
    $this->suspended_actions = $s['suspended_actions'] ?? vec[];
  }
}

type GameServerGroupAction = string;

type GameServerGroupActions = vec<GameServerGroupAction>;

type GameServerGroupArn = string;

class GameServerGroupAutoScalingPolicy {
  public ?PositiveInteger $estimated_instance_warmup;
  public ?TargetTrackingConfiguration $target_tracking_configuration;

  public function __construct(shape(
    ?'estimated_instance_warmup' => ?PositiveInteger,
    ?'target_tracking_configuration' => ?TargetTrackingConfiguration,
  ) $s = shape()) {
    $this->estimated_instance_warmup = $s['estimated_instance_warmup'] ?? 0;
    $this->target_tracking_configuration = $s['target_tracking_configuration'] ?? null;
  }
}

type GameServerGroupDeleteOption = string;

type GameServerGroupInstanceType = string;

type GameServerGroupName = string;

type GameServerGroupNameOrArn = string;

type GameServerGroupStatus = string;

type GameServerGroups = vec<GameServerGroup>;

type GameServerHealthCheck = string;

type GameServerId = string;

type GameServerInstanceId = string;

type GameServerProtectionPolicy = string;

type GameServerSortKey = string;

type GameServerUtilizationStatus = string;

type GameServers = vec<GameServer>;

class GameSession {
  public ?Timestamp $creation_time;
  public ?NonZeroAndMaxString $creator_id;
  public ?WholeNumber $current_player_session_count;
  public ?DnsName $dns_name;
  public ?FleetArn $fleet_arn;
  public ?FleetId $fleet_id;
  public ?GamePropertyList $game_properties;
  public ?GameSessionData $game_session_data;
  public ?NonZeroAndMaxString $game_session_id;
  public ?IpAddress $ip_address;
  public ?MatchmakerData $matchmaker_data;
  public ?WholeNumber $maximum_player_session_count;
  public ?NonZeroAndMaxString $name;
  public ?PlayerSessionCreationPolicy $player_session_creation_policy;
  public ?PortNumber $port;
  public ?GameSessionStatus $status;
  public ?GameSessionStatusReason $status_reason;
  public ?Timestamp $termination_time;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'creator_id' => ?NonZeroAndMaxString,
    ?'current_player_session_count' => ?WholeNumber,
    ?'dns_name' => ?DnsName,
    ?'fleet_arn' => ?FleetArn,
    ?'fleet_id' => ?FleetId,
    ?'game_properties' => ?GamePropertyList,
    ?'game_session_data' => ?GameSessionData,
    ?'game_session_id' => ?NonZeroAndMaxString,
    ?'ip_address' => ?IpAddress,
    ?'matchmaker_data' => ?MatchmakerData,
    ?'maximum_player_session_count' => ?WholeNumber,
    ?'name' => ?NonZeroAndMaxString,
    ?'player_session_creation_policy' => ?PlayerSessionCreationPolicy,
    ?'port' => ?PortNumber,
    ?'status' => ?GameSessionStatus,
    ?'status_reason' => ?GameSessionStatusReason,
    ?'termination_time' => ?Timestamp,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->creator_id = $s['creator_id'] ?? '';
    $this->current_player_session_count = $s['current_player_session_count'] ?? 0;
    $this->dns_name = $s['dns_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->game_properties = $s['game_properties'] ?? vec[];
    $this->game_session_data = $s['game_session_data'] ?? '';
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->matchmaker_data = $s['matchmaker_data'] ?? '';
    $this->maximum_player_session_count = $s['maximum_player_session_count'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->player_session_creation_policy = $s['player_session_creation_policy'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
    $this->termination_time = $s['termination_time'] ?? 0;
  }
}

type GameSessionActivationTimeoutSeconds = int;

class GameSessionConnectionInfo {
  public ?DnsName $dns_name;
  public ?ArnStringModel $game_session_arn;
  public ?StringModel $ip_address;
  public ?MatchedPlayerSessionList $matched_player_sessions;
  public ?PositiveInteger $port;

  public function __construct(shape(
    ?'dns_name' => ?DnsName,
    ?'game_session_arn' => ?ArnStringModel,
    ?'ip_address' => ?StringModel,
    ?'matched_player_sessions' => ?MatchedPlayerSessionList,
    ?'port' => ?PositiveInteger,
  ) $s = shape()) {
    $this->dns_name = $s['dns_name'] ?? '';
    $this->game_session_arn = $s['game_session_arn'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->matched_player_sessions = $s['matched_player_sessions'] ?? vec[];
    $this->port = $s['port'] ?? 0;
  }
}

type GameSessionData = string;

class GameSessionDetail {
  public ?GameSession $game_session;
  public ?ProtectionPolicy $protection_policy;

  public function __construct(shape(
    ?'game_session' => ?GameSession,
    ?'protection_policy' => ?ProtectionPolicy,
  ) $s = shape()) {
    $this->game_session = $s['game_session'] ?? null;
    $this->protection_policy = $s['protection_policy'] ?? '';
  }
}

type GameSessionDetailList = vec<GameSessionDetail>;

class GameSessionFullException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type GameSessionList = vec<GameSession>;

class GameSessionPlacement {
  public ?DnsName $dns_name;
  public ?Timestamp $end_time;
  public ?GamePropertyList $game_properties;
  public ?NonZeroAndMaxString $game_session_arn;
  public ?GameSessionData $game_session_data;
  public ?NonZeroAndMaxString $game_session_id;
  public ?NonZeroAndMaxString $game_session_name;
  public ?GameSessionQueueName $game_session_queue_name;
  public ?NonZeroAndMaxString $game_session_region;
  public ?IpAddress $ip_address;
  public ?MatchmakerData $matchmaker_data;
  public ?WholeNumber $maximum_player_session_count;
  public ?PlacedPlayerSessionList $placed_player_sessions;
  public ?IdStringModel $placement_id;
  public ?PlayerLatencyList $player_latencies;
  public ?PortNumber $port;
  public ?Timestamp $start_time;
  public ?GameSessionPlacementState $status;

  public function __construct(shape(
    ?'dns_name' => ?DnsName,
    ?'end_time' => ?Timestamp,
    ?'game_properties' => ?GamePropertyList,
    ?'game_session_arn' => ?NonZeroAndMaxString,
    ?'game_session_data' => ?GameSessionData,
    ?'game_session_id' => ?NonZeroAndMaxString,
    ?'game_session_name' => ?NonZeroAndMaxString,
    ?'game_session_queue_name' => ?GameSessionQueueName,
    ?'game_session_region' => ?NonZeroAndMaxString,
    ?'ip_address' => ?IpAddress,
    ?'matchmaker_data' => ?MatchmakerData,
    ?'maximum_player_session_count' => ?WholeNumber,
    ?'placed_player_sessions' => ?PlacedPlayerSessionList,
    ?'placement_id' => ?IdStringModel,
    ?'player_latencies' => ?PlayerLatencyList,
    ?'port' => ?PortNumber,
    ?'start_time' => ?Timestamp,
    ?'status' => ?GameSessionPlacementState,
  ) $s = shape()) {
    $this->dns_name = $s['dns_name'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->game_properties = $s['game_properties'] ?? vec[];
    $this->game_session_arn = $s['game_session_arn'] ?? '';
    $this->game_session_data = $s['game_session_data'] ?? '';
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->game_session_name = $s['game_session_name'] ?? '';
    $this->game_session_queue_name = $s['game_session_queue_name'] ?? '';
    $this->game_session_region = $s['game_session_region'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->matchmaker_data = $s['matchmaker_data'] ?? '';
    $this->maximum_player_session_count = $s['maximum_player_session_count'] ?? 0;
    $this->placed_player_sessions = $s['placed_player_sessions'] ?? vec[];
    $this->placement_id = $s['placement_id'] ?? '';
    $this->player_latencies = $s['player_latencies'] ?? vec[];
    $this->port = $s['port'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type GameSessionPlacementState = string;

class GameSessionQueue {
  public ?GameSessionQueueDestinationList $destinations;
  public ?GameSessionQueueArn $game_session_queue_arn;
  public ?GameSessionQueueName $name;
  public ?PlayerLatencyPolicyList $player_latency_policies;
  public ?WholeNumber $timeout_in_seconds;

  public function __construct(shape(
    ?'destinations' => ?GameSessionQueueDestinationList,
    ?'game_session_queue_arn' => ?GameSessionQueueArn,
    ?'name' => ?GameSessionQueueName,
    ?'player_latency_policies' => ?PlayerLatencyPolicyList,
    ?'timeout_in_seconds' => ?WholeNumber,
  ) $s = shape()) {
    $this->destinations = $s['destinations'] ?? vec[];
    $this->game_session_queue_arn = $s['game_session_queue_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->player_latency_policies = $s['player_latency_policies'] ?? vec[];
    $this->timeout_in_seconds = $s['timeout_in_seconds'] ?? 0;
  }
}

type GameSessionQueueArn = string;

class GameSessionQueueDestination {
  public ?ArnStringModel $destination_arn;

  public function __construct(shape(
    ?'destination_arn' => ?ArnStringModel,
  ) $s = shape()) {
    $this->destination_arn = $s['destination_arn'] ?? '';
  }
}

type GameSessionQueueDestinationList = vec<GameSessionQueueDestination>;

type GameSessionQueueList = vec<GameSessionQueue>;

type GameSessionQueueName = string;

type GameSessionQueueNameOrArn = string;

type GameSessionQueueNameOrArnList = vec<GameSessionQueueNameOrArn>;

type GameSessionStatus = string;

type GameSessionStatusReason = string;

class GetGameSessionLogUrlInput {
  public ?ArnStringModel $game_session_id;

  public function __construct(shape(
    ?'game_session_id' => ?ArnStringModel,
  ) $s = shape()) {
    $this->game_session_id = $s['game_session_id'] ?? '';
  }
}

class GetGameSessionLogUrlOutput {
  public ?NonZeroAndMaxString $pre_signed_url;

  public function __construct(shape(
    ?'pre_signed_url' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->pre_signed_url = $s['pre_signed_url'] ?? '';
  }
}

class GetInstanceAccessInput {
  public ?FleetIdOrArn $fleet_id;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class GetInstanceAccessOutput {
  public ?InstanceAccess $instance_access;

  public function __construct(shape(
    ?'instance_access' => ?InstanceAccess,
  ) $s = shape()) {
    $this->instance_access = $s['instance_access'] ?? null;
  }
}

type IamRoleArn = string;

type IdStringModel = string;

class IdempotentParameterMismatchException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Instance {
  public ?Timestamp $creation_time;
  public ?DnsName $dns_name;
  public ?FleetId $fleet_id;
  public ?InstanceId $instance_id;
  public ?IpAddress $ip_address;
  public ?OperatingSystem $operating_system;
  public ?InstanceStatus $status;
  public ?EC2InstanceType $type;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dns_name' => ?DnsName,
    ?'fleet_id' => ?FleetId,
    ?'instance_id' => ?InstanceId,
    ?'ip_address' => ?IpAddress,
    ?'operating_system' => ?OperatingSystem,
    ?'status' => ?InstanceStatus,
    ?'type' => ?EC2InstanceType,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dns_name = $s['dns_name'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->operating_system = $s['operating_system'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InstanceAccess {
  public ?InstanceCredentials $credentials;
  public ?FleetId $fleet_id;
  public ?InstanceId $instance_id;
  public ?IpAddress $ip_address;
  public ?OperatingSystem $operating_system;

  public function __construct(shape(
    ?'credentials' => ?InstanceCredentials,
    ?'fleet_id' => ?FleetId,
    ?'instance_id' => ?InstanceId,
    ?'ip_address' => ?IpAddress,
    ?'operating_system' => ?OperatingSystem,
  ) $s = shape()) {
    $this->credentials = $s['credentials'] ?? null;
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->operating_system = $s['operating_system'] ?? '';
  }
}

class InstanceCredentials {
  public ?NonEmptyString $secret;
  public ?NonEmptyString $user_name;

  public function __construct(shape(
    ?'secret' => ?NonEmptyString,
    ?'user_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->secret = $s['secret'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class InstanceDefinition {
  public ?GameServerGroupInstanceType $instance_type;
  public ?WeightedCapacity $weighted_capacity;

  public function __construct(shape(
    ?'instance_type' => ?GameServerGroupInstanceType,
    ?'weighted_capacity' => ?WeightedCapacity,
  ) $s = shape()) {
    $this->instance_type = $s['instance_type'] ?? '';
    $this->weighted_capacity = $s['weighted_capacity'] ?? '';
  }
}

type InstanceDefinitions = vec<InstanceDefinition>;

type InstanceId = string;

type InstanceList = vec<Instance>;

type InstanceStatus = string;

type Integer = int;

class InternalServiceException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidFleetStatusException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidGameSessionStatusException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IpAddress = string;

class IpPermission {
  public ?PortNumber $from_port;
  public ?NonBlankString $ip_range;
  public ?IpProtocol $protocol;
  public ?PortNumber $to_port;

  public function __construct(shape(
    ?'from_port' => ?PortNumber,
    ?'ip_range' => ?NonBlankString,
    ?'protocol' => ?IpProtocol,
    ?'to_port' => ?PortNumber,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->ip_range = $s['ip_range'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

type IpPermissionsList = vec<IpPermission>;

type IpProtocol = string;

type LatencyMap = dict<NonEmptyString, PositiveInteger>;

type LaunchTemplateId = string;

type LaunchTemplateName = string;

class LaunchTemplateSpecification {
  public ?LaunchTemplateId $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public ?LaunchTemplateVersion $version;

  public function __construct(shape(
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'version' => ?LaunchTemplateVersion,
  ) $s = shape()) {
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type LaunchTemplateVersion = string;

class LimitExceededException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListAliasesInput {
  public ?PositiveInteger $limit;
  public ?NonEmptyString $name;
  public ?NonEmptyString $next_token;
  public ?RoutingStrategyType $routing_strategy_type;

  public function __construct(shape(
    ?'limit' => ?PositiveInteger,
    ?'name' => ?NonEmptyString,
    ?'next_token' => ?NonEmptyString,
    ?'routing_strategy_type' => ?RoutingStrategyType,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->routing_strategy_type = $s['routing_strategy_type'] ?? '';
  }
}

class ListAliasesOutput {
  public ?AliasList $aliases;
  public ?NonEmptyString $next_token;

  public function __construct(shape(
    ?'aliases' => ?AliasList,
    ?'next_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->aliases = $s['aliases'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBuildsInput {
  public ?PositiveInteger $limit;
  public ?NonEmptyString $next_token;
  public ?BuildStatus $status;

  public function __construct(shape(
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonEmptyString,
    ?'status' => ?BuildStatus,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListBuildsOutput {
  public ?BuildList $builds;
  public ?NonEmptyString $next_token;

  public function __construct(shape(
    ?'builds' => ?BuildList,
    ?'next_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->builds = $s['builds'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFleetsInput {
  public ?BuildIdOrArn $build_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?ScriptIdOrArn $script_id;

  public function __construct(shape(
    ?'build_id' => ?BuildIdOrArn,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'script_id' => ?ScriptIdOrArn,
  ) $s = shape()) {
    $this->build_id = $s['build_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->script_id = $s['script_id'] ?? '';
  }
}

class ListFleetsOutput {
  public ?FleetIdList $fleet_ids;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'fleet_ids' => ?FleetIdList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_ids = $s['fleet_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGameServerGroupsInput {
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGameServerGroupsOutput {
  public ?GameServerGroups $game_server_groups;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'game_server_groups' => ?GameServerGroups,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_server_groups = $s['game_server_groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGameServersInput {
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListGameServersOutput {
  public ?GameServers $game_servers;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'game_servers' => ?GameServers,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_servers = $s['game_servers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListScriptsInput {
  public ?PositiveInteger $limit;
  public ?NonEmptyString $next_token;

  public function __construct(shape(
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListScriptsOutput {
  public ?NonEmptyString $next_token;
  public ?ScriptList $scripts;

  public function __construct(shape(
    ?'next_token' => ?NonEmptyString,
    ?'scripts' => ?ScriptList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->scripts = $s['scripts'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?AmazonResourceName $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class MatchedPlayerSession {
  public ?NonZeroAndMaxString $player_id;
  public ?PlayerSessionId $player_session_id;

  public function __construct(shape(
    ?'player_id' => ?NonZeroAndMaxString,
    ?'player_session_id' => ?PlayerSessionId,
  ) $s = shape()) {
    $this->player_id = $s['player_id'] ?? '';
    $this->player_session_id = $s['player_session_id'] ?? '';
  }
}

type MatchedPlayerSessionList = vec<MatchedPlayerSession>;

type MatchmakerData = string;

type MatchmakingAcceptanceTimeoutInteger = int;

class MatchmakingConfiguration {
  public ?BooleanModel $acceptance_required;
  public ?MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public ?WholeNumber $additional_player_count;
  public ?BackfillMode $backfill_mode;
  public ?MatchmakingConfigurationArn $configuration_arn;
  public ?Timestamp $creation_time;
  public ?CustomEventData $custom_event_data;
  public ?NonZeroAndMaxString $description;
  public ?GamePropertyList $game_properties;
  public ?GameSessionData $game_session_data;
  public ?QueueArnsList $game_session_queue_arns;
  public ?MatchmakingIdStringModel $name;
  public ?SnsArnStringModel $notification_target;
  public ?MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public ?MatchmakingRuleSetArn $rule_set_arn;
  public ?MatchmakingIdStringModel $rule_set_name;

  public function __construct(shape(
    ?'acceptance_required' => ?BooleanModel,
    ?'acceptance_timeout_seconds' => ?MatchmakingAcceptanceTimeoutInteger,
    ?'additional_player_count' => ?WholeNumber,
    ?'backfill_mode' => ?BackfillMode,
    ?'configuration_arn' => ?MatchmakingConfigurationArn,
    ?'creation_time' => ?Timestamp,
    ?'custom_event_data' => ?CustomEventData,
    ?'description' => ?NonZeroAndMaxString,
    ?'game_properties' => ?GamePropertyList,
    ?'game_session_data' => ?GameSessionData,
    ?'game_session_queue_arns' => ?QueueArnsList,
    ?'name' => ?MatchmakingIdStringModel,
    ?'notification_target' => ?SnsArnStringModel,
    ?'request_timeout_seconds' => ?MatchmakingRequestTimeoutInteger,
    ?'rule_set_arn' => ?MatchmakingRuleSetArn,
    ?'rule_set_name' => ?MatchmakingIdStringModel,
  ) $s = shape()) {
    $this->acceptance_required = $s['acceptance_required'] ?? false;
    $this->acceptance_timeout_seconds = $s['acceptance_timeout_seconds'] ?? 0;
    $this->additional_player_count = $s['additional_player_count'] ?? 0;
    $this->backfill_mode = $s['backfill_mode'] ?? '';
    $this->configuration_arn = $s['configuration_arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->custom_event_data = $s['custom_event_data'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->game_properties = $s['game_properties'] ?? vec[];
    $this->game_session_data = $s['game_session_data'] ?? '';
    $this->game_session_queue_arns = $s['game_session_queue_arns'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->notification_target = $s['notification_target'] ?? '';
    $this->request_timeout_seconds = $s['request_timeout_seconds'] ?? 0;
    $this->rule_set_arn = $s['rule_set_arn'] ?? '';
    $this->rule_set_name = $s['rule_set_name'] ?? '';
  }
}

type MatchmakingConfigurationArn = string;

type MatchmakingConfigurationList = vec<MatchmakingConfiguration>;

type MatchmakingConfigurationName = string;

type MatchmakingConfigurationNameList = vec<MatchmakingConfigurationName>;

type MatchmakingConfigurationStatus = string;

type MatchmakingIdList = vec<MatchmakingIdStringModel>;

type MatchmakingIdStringModel = string;

type MatchmakingRequestTimeoutInteger = int;

class MatchmakingRuleSet {
  public ?Timestamp $creation_time;
  public ?MatchmakingRuleSetArn $rule_set_arn;
  public ?RuleSetBody $rule_set_body;
  public ?MatchmakingIdStringModel $rule_set_name;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'rule_set_arn' => ?MatchmakingRuleSetArn,
    ?'rule_set_body' => ?RuleSetBody,
    ?'rule_set_name' => ?MatchmakingIdStringModel,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->rule_set_arn = $s['rule_set_arn'] ?? '';
    $this->rule_set_body = $s['rule_set_body'] ?? '';
    $this->rule_set_name = $s['rule_set_name'] ?? '';
  }
}

type MatchmakingRuleSetArn = string;

type MatchmakingRuleSetList = vec<MatchmakingRuleSet>;

type MatchmakingRuleSetName = string;

type MatchmakingRuleSetNameList = vec<MatchmakingRuleSetName>;

class MatchmakingTicket {
  public ?MatchmakingConfigurationArn $configuration_arn;
  public ?MatchmakingIdStringModel $configuration_name;
  public ?Timestamp $end_time;
  public ?WholeNumber $estimated_wait_time;
  public ?GameSessionConnectionInfo $game_session_connection_info;
  public ?PlayerList $players;
  public ?Timestamp $start_time;
  public ?MatchmakingConfigurationStatus $status;
  public ?StringModel $status_message;
  public ?StringModel $status_reason;
  public ?MatchmakingIdStringModel $ticket_id;

  public function __construct(shape(
    ?'configuration_arn' => ?MatchmakingConfigurationArn,
    ?'configuration_name' => ?MatchmakingIdStringModel,
    ?'end_time' => ?Timestamp,
    ?'estimated_wait_time' => ?WholeNumber,
    ?'game_session_connection_info' => ?GameSessionConnectionInfo,
    ?'players' => ?PlayerList,
    ?'start_time' => ?Timestamp,
    ?'status' => ?MatchmakingConfigurationStatus,
    ?'status_message' => ?StringModel,
    ?'status_reason' => ?StringModel,
    ?'ticket_id' => ?MatchmakingIdStringModel,
  ) $s = shape()) {
    $this->configuration_arn = $s['configuration_arn'] ?? '';
    $this->configuration_name = $s['configuration_name'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->estimated_wait_time = $s['estimated_wait_time'] ?? 0;
    $this->game_session_connection_info = $s['game_session_connection_info'] ?? null;
    $this->players = $s['players'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->status_reason = $s['status_reason'] ?? '';
    $this->ticket_id = $s['ticket_id'] ?? '';
  }
}

type MatchmakingTicketList = vec<MatchmakingTicket>;

type MaxConcurrentGameSessionActivations = int;

type MetricGroup = string;

type MetricGroupList = vec<MetricGroup>;

type MetricName = string;

type NonBlankAndLengthConstraintString = string;

type NonBlankString = string;

type NonEmptyString = string;

type NonNegativeDouble = float;

type NonZeroAndMaxString = string;

class NotFoundException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OperatingSystem = string;

class OutOfCapacityException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PlacedPlayerSession {
  public ?NonZeroAndMaxString $player_id;
  public ?PlayerSessionId $player_session_id;

  public function __construct(shape(
    ?'player_id' => ?NonZeroAndMaxString,
    ?'player_session_id' => ?PlayerSessionId,
  ) $s = shape()) {
    $this->player_id = $s['player_id'] ?? '';
    $this->player_session_id = $s['player_session_id'] ?? '';
  }
}

type PlacedPlayerSessionList = vec<PlacedPlayerSession>;

class Player {
  public ?LatencyMap $latency_in_ms;
  public ?PlayerAttributeMap $player_attributes;
  public ?NonZeroAndMaxString $player_id;
  public ?NonZeroAndMaxString $team;

  public function __construct(shape(
    ?'latency_in_ms' => ?LatencyMap,
    ?'player_attributes' => ?PlayerAttributeMap,
    ?'player_id' => ?NonZeroAndMaxString,
    ?'team' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->latency_in_ms = $s['latency_in_ms'] ?? dict[];
    $this->player_attributes = $s['player_attributes'] ?? dict[];
    $this->player_id = $s['player_id'] ?? '';
    $this->team = $s['team'] ?? '';
  }
}

type PlayerAttributeMap = dict<NonZeroAndMaxString, AttributeValue>;

type PlayerData = string;

type PlayerDataMap = dict<NonZeroAndMaxString, PlayerData>;

type PlayerIdList = vec<NonZeroAndMaxString>;

class PlayerLatency {
  public ?Float $latency_in_milliseconds;
  public ?NonZeroAndMaxString $player_id;
  public ?NonZeroAndMaxString $region_identifier;

  public function __construct(shape(
    ?'latency_in_milliseconds' => ?Float,
    ?'player_id' => ?NonZeroAndMaxString,
    ?'region_identifier' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->latency_in_milliseconds = $s['latency_in_milliseconds'] ?? 0.0;
    $this->player_id = $s['player_id'] ?? '';
    $this->region_identifier = $s['region_identifier'] ?? '';
  }
}

type PlayerLatencyList = vec<PlayerLatency>;

class PlayerLatencyPolicy {
  public ?WholeNumber $maximum_individual_player_latency_milliseconds;
  public ?WholeNumber $policy_duration_seconds;

  public function __construct(shape(
    ?'maximum_individual_player_latency_milliseconds' => ?WholeNumber,
    ?'policy_duration_seconds' => ?WholeNumber,
  ) $s = shape()) {
    $this->maximum_individual_player_latency_milliseconds = $s['maximum_individual_player_latency_milliseconds'] ?? 0;
    $this->policy_duration_seconds = $s['policy_duration_seconds'] ?? 0;
  }
}

type PlayerLatencyPolicyList = vec<PlayerLatencyPolicy>;

type PlayerList = vec<Player>;

class PlayerSession {
  public ?Timestamp $creation_time;
  public ?DnsName $dns_name;
  public ?FleetArn $fleet_arn;
  public ?FleetId $fleet_id;
  public ?NonZeroAndMaxString $game_session_id;
  public ?IpAddress $ip_address;
  public ?PlayerData $player_data;
  public ?NonZeroAndMaxString $player_id;
  public ?PlayerSessionId $player_session_id;
  public ?PortNumber $port;
  public ?PlayerSessionStatus $status;
  public ?Timestamp $termination_time;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'dns_name' => ?DnsName,
    ?'fleet_arn' => ?FleetArn,
    ?'fleet_id' => ?FleetId,
    ?'game_session_id' => ?NonZeroAndMaxString,
    ?'ip_address' => ?IpAddress,
    ?'player_data' => ?PlayerData,
    ?'player_id' => ?NonZeroAndMaxString,
    ?'player_session_id' => ?PlayerSessionId,
    ?'port' => ?PortNumber,
    ?'status' => ?PlayerSessionStatus,
    ?'termination_time' => ?Timestamp,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->dns_name = $s['dns_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->player_data = $s['player_data'] ?? '';
    $this->player_id = $s['player_id'] ?? '';
    $this->player_session_id = $s['player_session_id'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->termination_time = $s['termination_time'] ?? 0;
  }
}

type PlayerSessionCreationPolicy = string;

type PlayerSessionId = string;

type PlayerSessionList = vec<PlayerSession>;

type PlayerSessionStatus = string;

type PolicyType = string;

type PortNumber = int;

type PositiveInteger = int;

type PositiveLong = int;

type ProtectionPolicy = string;

class PutScalingPolicyInput {
  public ?ComparisonOperatorType $comparison_operator;
  public ?PositiveInteger $evaluation_periods;
  public ?FleetIdOrArn $fleet_id;
  public ?MetricName $metric_name;
  public ?NonZeroAndMaxString $name;
  public ?PolicyType $policy_type;
  public int $scaling_adjustment;
  public ?ScalingAdjustmentType $scaling_adjustment_type;
  public ?TargetConfiguration $target_configuration;
  public ?Double $threshold;

  public function __construct(shape(
    ?'comparison_operator' => ?ComparisonOperatorType,
    ?'evaluation_periods' => ?PositiveInteger,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'metric_name' => ?MetricName,
    ?'name' => ?NonZeroAndMaxString,
    ?'policy_type' => ?PolicyType,
    ?'scaling_adjustment' => int,
    ?'scaling_adjustment_type' => ?ScalingAdjustmentType,
    ?'target_configuration' => ?TargetConfiguration,
    ?'threshold' => ?Double,
  ) $s = shape()) {
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->evaluation_periods = $s['evaluation_periods'] ?? 0;
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policy_type = $s['policy_type'] ?? '';
    $this->scaling_adjustment = $s['scaling_adjustment'] ?? 0;
    $this->scaling_adjustment_type = $s['scaling_adjustment_type'] ?? '';
    $this->target_configuration = $s['target_configuration'] ?? null;
    $this->threshold = $s['threshold'] ?? 0.0;
  }
}

class PutScalingPolicyOutput {
  public ?NonZeroAndMaxString $name;

  public function __construct(shape(
    ?'name' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type QueueArnsList = vec<ArnStringModel>;

class RegisterGameServerInput {
  public ?GameServerConnectionInfo $connection_info;
  public ?GameServerSortKey $custom_sort_key;
  public ?GameServerData $game_server_data;
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerId $game_server_id;
  public ?GameServerInstanceId $instance_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'connection_info' => ?GameServerConnectionInfo,
    ?'custom_sort_key' => ?GameServerSortKey,
    ?'game_server_data' => ?GameServerData,
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'game_server_id' => ?GameServerId,
    ?'instance_id' => ?GameServerInstanceId,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->connection_info = $s['connection_info'] ?? '';
    $this->custom_sort_key = $s['custom_sort_key'] ?? '';
    $this->game_server_data = $s['game_server_data'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_id = $s['game_server_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class RegisterGameServerOutput {
  public ?GameServer $game_server;

  public function __construct(shape(
    ?'game_server' => ?GameServer,
  ) $s = shape()) {
    $this->game_server = $s['game_server'] ?? null;
  }
}

class RequestUploadCredentialsInput {
  public ?BuildIdOrArn $build_id;

  public function __construct(shape(
    ?'build_id' => ?BuildIdOrArn,
  ) $s = shape()) {
    $this->build_id = $s['build_id'] ?? '';
  }
}

class RequestUploadCredentialsOutput {
  public ?S3Location $storage_location;
  public ?AwsCredentials $upload_credentials;

  public function __construct(shape(
    ?'storage_location' => ?S3Location,
    ?'upload_credentials' => ?AwsCredentials,
  ) $s = shape()) {
    $this->storage_location = $s['storage_location'] ?? null;
    $this->upload_credentials = $s['upload_credentials'] ?? null;
  }
}

class ResolveAliasInput {
  public ?AliasIdOrArn $alias_id;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
  }
}

class ResolveAliasOutput {
  public ?FleetArn $fleet_arn;
  public ?FleetId $fleet_id;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'fleet_id' => ?FleetId,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class ResourceCreationLimitPolicy {
  public ?WholeNumber $new_game_sessions_per_creator;
  public ?WholeNumber $policy_period_in_minutes;

  public function __construct(shape(
    ?'new_game_sessions_per_creator' => ?WholeNumber,
    ?'policy_period_in_minutes' => ?WholeNumber,
  ) $s = shape()) {
    $this->new_game_sessions_per_creator = $s['new_game_sessions_per_creator'] ?? 0;
    $this->policy_period_in_minutes = $s['policy_period_in_minutes'] ?? 0;
  }
}

class ResumeGameServerGroupInput {
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerGroupActions $resume_actions;

  public function __construct(shape(
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'resume_actions' => ?GameServerGroupActions,
  ) $s = shape()) {
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->resume_actions = $s['resume_actions'] ?? vec[];
  }
}

class ResumeGameServerGroupOutput {
  public ?GameServerGroup $game_server_group;

  public function __construct(shape(
    ?'game_server_group' => ?GameServerGroup,
  ) $s = shape()) {
    $this->game_server_group = $s['game_server_group'] ?? null;
  }
}

class RoutingStrategy {
  public ?FleetId $fleet_id;
  public ?FreeText $message;
  public ?RoutingStrategyType $type;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
    ?'message' => ?FreeText,
    ?'type' => ?RoutingStrategyType,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type RoutingStrategyType = string;

type RuleSetBody = string;

type RuleSetLimit = int;

class RuntimeConfiguration {
  public ?GameSessionActivationTimeoutSeconds $game_session_activation_timeout_seconds;
  public ?MaxConcurrentGameSessionActivations $max_concurrent_game_session_activations;
  public ?ServerProcessList $server_processes;

  public function __construct(shape(
    ?'game_session_activation_timeout_seconds' => ?GameSessionActivationTimeoutSeconds,
    ?'max_concurrent_game_session_activations' => ?MaxConcurrentGameSessionActivations,
    ?'server_processes' => ?ServerProcessList,
  ) $s = shape()) {
    $this->game_session_activation_timeout_seconds = $s['game_session_activation_timeout_seconds'] ?? 0;
    $this->max_concurrent_game_session_activations = $s['max_concurrent_game_session_activations'] ?? 0;
    $this->server_processes = $s['server_processes'] ?? vec[];
  }
}

class S3Location {
  public ?NonEmptyString $bucket;
  public ?NonEmptyString $key;
  public ?NonEmptyString $object_version;
  public ?NonEmptyString $role_arn;

  public function __construct(shape(
    ?'bucket' => ?NonEmptyString,
    ?'key' => ?NonEmptyString,
    ?'object_version' => ?NonEmptyString,
    ?'role_arn' => ?NonEmptyString,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->object_version = $s['object_version'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

type ScalingAdjustmentType = string;

class ScalingPolicy {
  public ?ComparisonOperatorType $comparison_operator;
  public ?PositiveInteger $evaluation_periods;
  public ?FleetId $fleet_id;
  public ?MetricName $metric_name;
  public ?NonZeroAndMaxString $name;
  public ?PolicyType $policy_type;
  public int $scaling_adjustment;
  public ?ScalingAdjustmentType $scaling_adjustment_type;
  public ?ScalingStatusType $status;
  public ?TargetConfiguration $target_configuration;
  public ?Double $threshold;

  public function __construct(shape(
    ?'comparison_operator' => ?ComparisonOperatorType,
    ?'evaluation_periods' => ?PositiveInteger,
    ?'fleet_id' => ?FleetId,
    ?'metric_name' => ?MetricName,
    ?'name' => ?NonZeroAndMaxString,
    ?'policy_type' => ?PolicyType,
    ?'scaling_adjustment' => int,
    ?'scaling_adjustment_type' => ?ScalingAdjustmentType,
    ?'status' => ?ScalingStatusType,
    ?'target_configuration' => ?TargetConfiguration,
    ?'threshold' => ?Double,
  ) $s = shape()) {
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->evaluation_periods = $s['evaluation_periods'] ?? 0;
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policy_type = $s['policy_type'] ?? '';
    $this->scaling_adjustment = $s['scaling_adjustment'] ?? 0;
    $this->scaling_adjustment_type = $s['scaling_adjustment_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->target_configuration = $s['target_configuration'] ?? null;
    $this->threshold = $s['threshold'] ?? 0.0;
  }
}

type ScalingPolicyList = vec<ScalingPolicy>;

type ScalingStatusType = string;

class Script {
  public ?Timestamp $creation_time;
  public ?NonZeroAndMaxString $name;
  public ?ScriptArn $script_arn;
  public ?ScriptId $script_id;
  public ?PositiveLong $size_on_disk;
  public ?S3Location $storage_location;
  public ?NonZeroAndMaxString $version;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'name' => ?NonZeroAndMaxString,
    ?'script_arn' => ?ScriptArn,
    ?'script_id' => ?ScriptId,
    ?'size_on_disk' => ?PositiveLong,
    ?'storage_location' => ?S3Location,
    ?'version' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->script_arn = $s['script_arn'] ?? '';
    $this->script_id = $s['script_id'] ?? '';
    $this->size_on_disk = $s['size_on_disk'] ?? 0;
    $this->storage_location = $s['storage_location'] ?? null;
    $this->version = $s['version'] ?? '';
  }
}

type ScriptArn = string;

type ScriptId = string;

type ScriptIdOrArn = string;

type ScriptList = vec<Script>;

class SearchGameSessionsInput {
  public ?AliasIdOrArn $alias_id;
  public ?NonZeroAndMaxString $filter_expression;
  public ?FleetIdOrArn $fleet_id;
  public ?PositiveInteger $limit;
  public ?NonZeroAndMaxString $next_token;
  public ?NonZeroAndMaxString $sort_expression;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
    ?'filter_expression' => ?NonZeroAndMaxString,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'limit' => ?PositiveInteger,
    ?'next_token' => ?NonZeroAndMaxString,
    ?'sort_expression' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
    $this->filter_expression = $s['filter_expression'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_expression = $s['sort_expression'] ?? '';
  }
}

class SearchGameSessionsOutput {
  public ?GameSessionList $game_sessions;
  public ?NonZeroAndMaxString $next_token;

  public function __construct(shape(
    ?'game_sessions' => ?GameSessionList,
    ?'next_token' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->game_sessions = $s['game_sessions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ServerProcess {
  public ?PositiveInteger $concurrent_executions;
  public ?NonZeroAndMaxString $launch_path;
  public ?NonZeroAndMaxString $parameters;

  public function __construct(shape(
    ?'concurrent_executions' => ?PositiveInteger,
    ?'launch_path' => ?NonZeroAndMaxString,
    ?'parameters' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->concurrent_executions = $s['concurrent_executions'] ?? 0;
    $this->launch_path = $s['launch_path'] ?? '';
    $this->parameters = $s['parameters'] ?? '';
  }
}

type ServerProcessList = vec<ServerProcess>;

type SnsArnStringModel = string;

type SortOrder = string;

class StartFleetActionsInput {
  public ?FleetActionList $actions;
  public ?FleetIdOrArn $fleet_id;

  public function __construct(shape(
    ?'actions' => ?FleetActionList,
    ?'fleet_id' => ?FleetIdOrArn,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class StartFleetActionsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartGameSessionPlacementInput {
  public ?DesiredPlayerSessionList $desired_player_sessions;
  public ?GamePropertyList $game_properties;
  public ?GameSessionData $game_session_data;
  public ?NonZeroAndMaxString $game_session_name;
  public ?GameSessionQueueNameOrArn $game_session_queue_name;
  public ?WholeNumber $maximum_player_session_count;
  public ?IdStringModel $placement_id;
  public ?PlayerLatencyList $player_latencies;

  public function __construct(shape(
    ?'desired_player_sessions' => ?DesiredPlayerSessionList,
    ?'game_properties' => ?GamePropertyList,
    ?'game_session_data' => ?GameSessionData,
    ?'game_session_name' => ?NonZeroAndMaxString,
    ?'game_session_queue_name' => ?GameSessionQueueNameOrArn,
    ?'maximum_player_session_count' => ?WholeNumber,
    ?'placement_id' => ?IdStringModel,
    ?'player_latencies' => ?PlayerLatencyList,
  ) $s = shape()) {
    $this->desired_player_sessions = $s['desired_player_sessions'] ?? vec[];
    $this->game_properties = $s['game_properties'] ?? vec[];
    $this->game_session_data = $s['game_session_data'] ?? '';
    $this->game_session_name = $s['game_session_name'] ?? '';
    $this->game_session_queue_name = $s['game_session_queue_name'] ?? '';
    $this->maximum_player_session_count = $s['maximum_player_session_count'] ?? 0;
    $this->placement_id = $s['placement_id'] ?? '';
    $this->player_latencies = $s['player_latencies'] ?? vec[];
  }
}

class StartGameSessionPlacementOutput {
  public ?GameSessionPlacement $game_session_placement;

  public function __construct(shape(
    ?'game_session_placement' => ?GameSessionPlacement,
  ) $s = shape()) {
    $this->game_session_placement = $s['game_session_placement'] ?? null;
  }
}

class StartMatchBackfillInput {
  public ?MatchmakingConfigurationName $configuration_name;
  public ?ArnStringModel $game_session_arn;
  public ?PlayerList $players;
  public ?MatchmakingIdStringModel $ticket_id;

  public function __construct(shape(
    ?'configuration_name' => ?MatchmakingConfigurationName,
    ?'game_session_arn' => ?ArnStringModel,
    ?'players' => ?PlayerList,
    ?'ticket_id' => ?MatchmakingIdStringModel,
  ) $s = shape()) {
    $this->configuration_name = $s['configuration_name'] ?? '';
    $this->game_session_arn = $s['game_session_arn'] ?? '';
    $this->players = $s['players'] ?? vec[];
    $this->ticket_id = $s['ticket_id'] ?? '';
  }
}

class StartMatchBackfillOutput {
  public ?MatchmakingTicket $matchmaking_ticket;

  public function __construct(shape(
    ?'matchmaking_ticket' => ?MatchmakingTicket,
  ) $s = shape()) {
    $this->matchmaking_ticket = $s['matchmaking_ticket'] ?? null;
  }
}

class StartMatchmakingInput {
  public ?MatchmakingConfigurationName $configuration_name;
  public ?PlayerList $players;
  public ?MatchmakingIdStringModel $ticket_id;

  public function __construct(shape(
    ?'configuration_name' => ?MatchmakingConfigurationName,
    ?'players' => ?PlayerList,
    ?'ticket_id' => ?MatchmakingIdStringModel,
  ) $s = shape()) {
    $this->configuration_name = $s['configuration_name'] ?? '';
    $this->players = $s['players'] ?? vec[];
    $this->ticket_id = $s['ticket_id'] ?? '';
  }
}

class StartMatchmakingOutput {
  public ?MatchmakingTicket $matchmaking_ticket;

  public function __construct(shape(
    ?'matchmaking_ticket' => ?MatchmakingTicket,
  ) $s = shape()) {
    $this->matchmaking_ticket = $s['matchmaking_ticket'] ?? null;
  }
}

class StopFleetActionsInput {
  public ?FleetActionList $actions;
  public ?FleetIdOrArn $fleet_id;

  public function __construct(shape(
    ?'actions' => ?FleetActionList,
    ?'fleet_id' => ?FleetIdOrArn,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class StopFleetActionsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StopGameSessionPlacementInput {
  public ?IdStringModel $placement_id;

  public function __construct(shape(
    ?'placement_id' => ?IdStringModel,
  ) $s = shape()) {
    $this->placement_id = $s['placement_id'] ?? '';
  }
}

class StopGameSessionPlacementOutput {
  public ?GameSessionPlacement $game_session_placement;

  public function __construct(shape(
    ?'game_session_placement' => ?GameSessionPlacement,
  ) $s = shape()) {
    $this->game_session_placement = $s['game_session_placement'] ?? null;
  }
}

class StopMatchmakingInput {
  public ?MatchmakingIdStringModel $ticket_id;

  public function __construct(shape(
    ?'ticket_id' => ?MatchmakingIdStringModel,
  ) $s = shape()) {
    $this->ticket_id = $s['ticket_id'] ?? '';
  }
}

class StopMatchmakingOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type StringDoubleMap = dict<NonZeroAndMaxString, DoubleObject>;

type StringList = vec<NonZeroAndMaxString>;

type StringModel = string;

class SuspendGameServerGroupInput {
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerGroupActions $suspend_actions;

  public function __construct(shape(
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'suspend_actions' => ?GameServerGroupActions,
  ) $s = shape()) {
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->suspend_actions = $s['suspend_actions'] ?? vec[];
  }
}

class SuspendGameServerGroupOutput {
  public ?GameServerGroup $game_server_group;

  public function __construct(shape(
    ?'game_server_group' => ?GameServerGroup,
  ) $s = shape()) {
    $this->game_server_group = $s['game_server_group'] ?? null;
  }
}

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TaggingFailedException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TargetConfiguration {
  public ?Double $target_value;

  public function __construct(shape(
    ?'target_value' => ?Double,
  ) $s = shape()) {
    $this->target_value = $s['target_value'] ?? 0.0;
  }
}

class TargetTrackingConfiguration {
  public ?NonNegativeDouble $target_value;

  public function __construct(shape(
    ?'target_value' => ?NonNegativeDouble,
  ) $s = shape()) {
    $this->target_value = $s['target_value'] ?? 0.0;
  }
}

class TerminalRoutingStrategyException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

class UnauthorizedException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnsupportedRegionException {
  public ?NonEmptyString $message;

  public function __construct(shape(
    ?'message' => ?NonEmptyString,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
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

class UpdateAliasInput {
  public ?AliasIdOrArn $alias_id;
  public ?NonZeroAndMaxString $description;
  public ?NonBlankAndLengthConstraintString $name;
  public ?RoutingStrategy $routing_strategy;

  public function __construct(shape(
    ?'alias_id' => ?AliasIdOrArn,
    ?'description' => ?NonZeroAndMaxString,
    ?'name' => ?NonBlankAndLengthConstraintString,
    ?'routing_strategy' => ?RoutingStrategy,
  ) $s = shape()) {
    $this->alias_id = $s['alias_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->routing_strategy = $s['routing_strategy'] ?? null;
  }
}

class UpdateAliasOutput {
  public ?Alias $alias;

  public function __construct(shape(
    ?'alias' => ?Alias,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? null;
  }
}

class UpdateBuildInput {
  public ?BuildIdOrArn $build_id;
  public ?NonZeroAndMaxString $name;
  public ?NonZeroAndMaxString $version;

  public function __construct(shape(
    ?'build_id' => ?BuildIdOrArn,
    ?'name' => ?NonZeroAndMaxString,
    ?'version' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->build_id = $s['build_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class UpdateBuildOutput {
  public ?Build $build;

  public function __construct(shape(
    ?'build' => ?Build,
  ) $s = shape()) {
    $this->build = $s['build'] ?? null;
  }
}

class UpdateFleetAttributesInput {
  public ?NonZeroAndMaxString $description;
  public ?FleetIdOrArn $fleet_id;
  public ?MetricGroupList $metric_groups;
  public ?NonZeroAndMaxString $name;
  public ?ProtectionPolicy $new_game_session_protection_policy;
  public ?ResourceCreationLimitPolicy $resource_creation_limit_policy;

  public function __construct(shape(
    ?'description' => ?NonZeroAndMaxString,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'metric_groups' => ?MetricGroupList,
    ?'name' => ?NonZeroAndMaxString,
    ?'new_game_session_protection_policy' => ?ProtectionPolicy,
    ?'resource_creation_limit_policy' => ?ResourceCreationLimitPolicy,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->metric_groups = $s['metric_groups'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->new_game_session_protection_policy = $s['new_game_session_protection_policy'] ?? '';
    $this->resource_creation_limit_policy = $s['resource_creation_limit_policy'] ?? null;
  }
}

class UpdateFleetAttributesOutput {
  public ?FleetId $fleet_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class UpdateFleetCapacityInput {
  public ?WholeNumber $desired_instances;
  public ?FleetIdOrArn $fleet_id;
  public ?WholeNumber $max_size;
  public ?WholeNumber $min_size;

  public function __construct(shape(
    ?'desired_instances' => ?WholeNumber,
    ?'fleet_id' => ?FleetIdOrArn,
    ?'max_size' => ?WholeNumber,
    ?'min_size' => ?WholeNumber,
  ) $s = shape()) {
    $this->desired_instances = $s['desired_instances'] ?? 0;
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->max_size = $s['max_size'] ?? 0;
    $this->min_size = $s['min_size'] ?? 0;
  }
}

class UpdateFleetCapacityOutput {
  public ?FleetId $fleet_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class UpdateFleetPortSettingsInput {
  public ?FleetIdOrArn $fleet_id;
  public ?IpPermissionsList $inbound_permission_authorizations;
  public ?IpPermissionsList $inbound_permission_revocations;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
    ?'inbound_permission_authorizations' => ?IpPermissionsList,
    ?'inbound_permission_revocations' => ?IpPermissionsList,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->inbound_permission_authorizations = $s['inbound_permission_authorizations'] ?? vec[];
    $this->inbound_permission_revocations = $s['inbound_permission_revocations'] ?? vec[];
  }
}

class UpdateFleetPortSettingsOutput {
  public ?FleetId $fleet_id;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

class UpdateGameServerGroupInput {
  public ?BalancingStrategy $balancing_strategy;
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerProtectionPolicy $game_server_protection_policy;
  public ?InstanceDefinitions $instance_definitions;
  public ?IamRoleArn $role_arn;

  public function __construct(shape(
    ?'balancing_strategy' => ?BalancingStrategy,
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'game_server_protection_policy' => ?GameServerProtectionPolicy,
    ?'instance_definitions' => ?InstanceDefinitions,
    ?'role_arn' => ?IamRoleArn,
  ) $s = shape()) {
    $this->balancing_strategy = $s['balancing_strategy'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_protection_policy = $s['game_server_protection_policy'] ?? '';
    $this->instance_definitions = $s['instance_definitions'] ?? vec[];
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class UpdateGameServerGroupOutput {
  public ?GameServerGroup $game_server_group;

  public function __construct(shape(
    ?'game_server_group' => ?GameServerGroup,
  ) $s = shape()) {
    $this->game_server_group = $s['game_server_group'] ?? null;
  }
}

class UpdateGameServerInput {
  public ?GameServerSortKey $custom_sort_key;
  public ?GameServerData $game_server_data;
  public ?GameServerGroupNameOrArn $game_server_group_name;
  public ?GameServerId $game_server_id;
  public ?GameServerHealthCheck $health_check;
  public ?GameServerUtilizationStatus $utilization_status;

  public function __construct(shape(
    ?'custom_sort_key' => ?GameServerSortKey,
    ?'game_server_data' => ?GameServerData,
    ?'game_server_group_name' => ?GameServerGroupNameOrArn,
    ?'game_server_id' => ?GameServerId,
    ?'health_check' => ?GameServerHealthCheck,
    ?'utilization_status' => ?GameServerUtilizationStatus,
  ) $s = shape()) {
    $this->custom_sort_key = $s['custom_sort_key'] ?? '';
    $this->game_server_data = $s['game_server_data'] ?? '';
    $this->game_server_group_name = $s['game_server_group_name'] ?? '';
    $this->game_server_id = $s['game_server_id'] ?? '';
    $this->health_check = $s['health_check'] ?? '';
    $this->utilization_status = $s['utilization_status'] ?? '';
  }
}

class UpdateGameServerOutput {
  public ?GameServer $game_server;

  public function __construct(shape(
    ?'game_server' => ?GameServer,
  ) $s = shape()) {
    $this->game_server = $s['game_server'] ?? null;
  }
}

class UpdateGameSessionInput {
  public ?ArnStringModel $game_session_id;
  public ?WholeNumber $maximum_player_session_count;
  public ?NonZeroAndMaxString $name;
  public ?PlayerSessionCreationPolicy $player_session_creation_policy;
  public ?ProtectionPolicy $protection_policy;

  public function __construct(shape(
    ?'game_session_id' => ?ArnStringModel,
    ?'maximum_player_session_count' => ?WholeNumber,
    ?'name' => ?NonZeroAndMaxString,
    ?'player_session_creation_policy' => ?PlayerSessionCreationPolicy,
    ?'protection_policy' => ?ProtectionPolicy,
  ) $s = shape()) {
    $this->game_session_id = $s['game_session_id'] ?? '';
    $this->maximum_player_session_count = $s['maximum_player_session_count'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->player_session_creation_policy = $s['player_session_creation_policy'] ?? '';
    $this->protection_policy = $s['protection_policy'] ?? '';
  }
}

class UpdateGameSessionOutput {
  public ?GameSession $game_session;

  public function __construct(shape(
    ?'game_session' => ?GameSession,
  ) $s = shape()) {
    $this->game_session = $s['game_session'] ?? null;
  }
}

class UpdateGameSessionQueueInput {
  public ?GameSessionQueueDestinationList $destinations;
  public ?GameSessionQueueNameOrArn $name;
  public ?PlayerLatencyPolicyList $player_latency_policies;
  public ?WholeNumber $timeout_in_seconds;

  public function __construct(shape(
    ?'destinations' => ?GameSessionQueueDestinationList,
    ?'name' => ?GameSessionQueueNameOrArn,
    ?'player_latency_policies' => ?PlayerLatencyPolicyList,
    ?'timeout_in_seconds' => ?WholeNumber,
  ) $s = shape()) {
    $this->destinations = $s['destinations'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->player_latency_policies = $s['player_latency_policies'] ?? vec[];
    $this->timeout_in_seconds = $s['timeout_in_seconds'] ?? 0;
  }
}

class UpdateGameSessionQueueOutput {
  public ?GameSessionQueue $game_session_queue;

  public function __construct(shape(
    ?'game_session_queue' => ?GameSessionQueue,
  ) $s = shape()) {
    $this->game_session_queue = $s['game_session_queue'] ?? null;
  }
}

class UpdateMatchmakingConfigurationInput {
  public ?BooleanModel $acceptance_required;
  public ?MatchmakingAcceptanceTimeoutInteger $acceptance_timeout_seconds;
  public ?WholeNumber $additional_player_count;
  public ?BackfillMode $backfill_mode;
  public ?CustomEventData $custom_event_data;
  public ?NonZeroAndMaxString $description;
  public ?GamePropertyList $game_properties;
  public ?GameSessionData $game_session_data;
  public ?QueueArnsList $game_session_queue_arns;
  public ?MatchmakingConfigurationName $name;
  public ?SnsArnStringModel $notification_target;
  public ?MatchmakingRequestTimeoutInteger $request_timeout_seconds;
  public ?MatchmakingRuleSetName $rule_set_name;

  public function __construct(shape(
    ?'acceptance_required' => ?BooleanModel,
    ?'acceptance_timeout_seconds' => ?MatchmakingAcceptanceTimeoutInteger,
    ?'additional_player_count' => ?WholeNumber,
    ?'backfill_mode' => ?BackfillMode,
    ?'custom_event_data' => ?CustomEventData,
    ?'description' => ?NonZeroAndMaxString,
    ?'game_properties' => ?GamePropertyList,
    ?'game_session_data' => ?GameSessionData,
    ?'game_session_queue_arns' => ?QueueArnsList,
    ?'name' => ?MatchmakingConfigurationName,
    ?'notification_target' => ?SnsArnStringModel,
    ?'request_timeout_seconds' => ?MatchmakingRequestTimeoutInteger,
    ?'rule_set_name' => ?MatchmakingRuleSetName,
  ) $s = shape()) {
    $this->acceptance_required = $s['acceptance_required'] ?? false;
    $this->acceptance_timeout_seconds = $s['acceptance_timeout_seconds'] ?? 0;
    $this->additional_player_count = $s['additional_player_count'] ?? 0;
    $this->backfill_mode = $s['backfill_mode'] ?? '';
    $this->custom_event_data = $s['custom_event_data'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->game_properties = $s['game_properties'] ?? vec[];
    $this->game_session_data = $s['game_session_data'] ?? '';
    $this->game_session_queue_arns = $s['game_session_queue_arns'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->notification_target = $s['notification_target'] ?? '';
    $this->request_timeout_seconds = $s['request_timeout_seconds'] ?? 0;
    $this->rule_set_name = $s['rule_set_name'] ?? '';
  }
}

class UpdateMatchmakingConfigurationOutput {
  public ?MatchmakingConfiguration $configuration;

  public function __construct(shape(
    ?'configuration' => ?MatchmakingConfiguration,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
  }
}

class UpdateRuntimeConfigurationInput {
  public ?FleetIdOrArn $fleet_id;
  public ?RuntimeConfiguration $runtime_configuration;

  public function __construct(shape(
    ?'fleet_id' => ?FleetIdOrArn,
    ?'runtime_configuration' => ?RuntimeConfiguration,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->runtime_configuration = $s['runtime_configuration'] ?? null;
  }
}

class UpdateRuntimeConfigurationOutput {
  public ?RuntimeConfiguration $runtime_configuration;

  public function __construct(shape(
    ?'runtime_configuration' => ?RuntimeConfiguration,
  ) $s = shape()) {
    $this->runtime_configuration = $s['runtime_configuration'] ?? null;
  }
}

class UpdateScriptInput {
  public ?NonZeroAndMaxString $name;
  public ?ScriptIdOrArn $script_id;
  public ?S3Location $storage_location;
  public ?NonZeroAndMaxString $version;
  public ?ZipBlob $zip_file;

  public function __construct(shape(
    ?'name' => ?NonZeroAndMaxString,
    ?'script_id' => ?ScriptIdOrArn,
    ?'storage_location' => ?S3Location,
    ?'version' => ?NonZeroAndMaxString,
    ?'zip_file' => ?ZipBlob,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->script_id = $s['script_id'] ?? '';
    $this->storage_location = $s['storage_location'] ?? null;
    $this->version = $s['version'] ?? '';
    $this->zip_file = $s['zip_file'] ?? '';
  }
}

class UpdateScriptOutput {
  public ?Script $script;

  public function __construct(shape(
    ?'script' => ?Script,
  ) $s = shape()) {
    $this->script = $s['script'] ?? null;
  }
}

class ValidateMatchmakingRuleSetInput {
  public ?RuleSetBody $rule_set_body;

  public function __construct(shape(
    ?'rule_set_body' => ?RuleSetBody,
  ) $s = shape()) {
    $this->rule_set_body = $s['rule_set_body'] ?? '';
  }
}

class ValidateMatchmakingRuleSetOutput {
  public ?BooleanModel $valid;

  public function __construct(shape(
    ?'valid' => ?BooleanModel,
  ) $s = shape()) {
    $this->valid = $s['valid'] ?? false;
  }
}

class VpcPeeringAuthorization {
  public ?Timestamp $creation_time;
  public ?Timestamp $expiration_time;
  public ?NonZeroAndMaxString $game_lift_aws_account_id;
  public ?NonZeroAndMaxString $peer_vpc_aws_account_id;
  public ?NonZeroAndMaxString $peer_vpc_id;

  public function __construct(shape(
    ?'creation_time' => ?Timestamp,
    ?'expiration_time' => ?Timestamp,
    ?'game_lift_aws_account_id' => ?NonZeroAndMaxString,
    ?'peer_vpc_aws_account_id' => ?NonZeroAndMaxString,
    ?'peer_vpc_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->expiration_time = $s['expiration_time'] ?? 0;
    $this->game_lift_aws_account_id = $s['game_lift_aws_account_id'] ?? '';
    $this->peer_vpc_aws_account_id = $s['peer_vpc_aws_account_id'] ?? '';
    $this->peer_vpc_id = $s['peer_vpc_id'] ?? '';
  }
}

type VpcPeeringAuthorizationList = vec<VpcPeeringAuthorization>;

class VpcPeeringConnection {
  public ?FleetArn $fleet_arn;
  public ?FleetId $fleet_id;
  public ?NonZeroAndMaxString $game_lift_vpc_id;
  public ?NonZeroAndMaxString $ip_v_4_cidr_block;
  public ?NonZeroAndMaxString $peer_vpc_id;
  public ?VpcPeeringConnectionStatus $status;
  public ?NonZeroAndMaxString $vpc_peering_connection_id;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'fleet_id' => ?FleetId,
    ?'game_lift_vpc_id' => ?NonZeroAndMaxString,
    ?'ip_v_4_cidr_block' => ?NonZeroAndMaxString,
    ?'peer_vpc_id' => ?NonZeroAndMaxString,
    ?'status' => ?VpcPeeringConnectionStatus,
    ?'vpc_peering_connection_id' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->game_lift_vpc_id = $s['game_lift_vpc_id'] ?? '';
    $this->ip_v_4_cidr_block = $s['ip_v_4_cidr_block'] ?? '';
    $this->peer_vpc_id = $s['peer_vpc_id'] ?? '';
    $this->status = $s['status'] ?? null;
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

type VpcPeeringConnectionList = vec<VpcPeeringConnection>;

class VpcPeeringConnectionStatus {
  public ?NonZeroAndMaxString $code;
  public ?NonZeroAndMaxString $message;

  public function __construct(shape(
    ?'code' => ?NonZeroAndMaxString,
    ?'message' => ?NonZeroAndMaxString,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type VpcSubnet = string;

type VpcSubnets = vec<VpcSubnet>;

type WeightedCapacity = string;

type WholeNumber = int;

type ZipBlob = string;

