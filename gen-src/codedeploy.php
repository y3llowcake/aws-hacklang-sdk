<?hh // strict
namespace slack\aws\codedeploy;

interface CodeDeploy {
  public function AddTagsToOnPremisesInstances(AddTagsToOnPremisesInstancesInput): Awaitable<Errors\Error>;
  public function BatchGetApplicationRevisions(BatchGetApplicationRevisionsInput): Awaitable<Errors\Result<BatchGetApplicationRevisionsOutput>>;
  public function BatchGetApplications(BatchGetApplicationsInput): Awaitable<Errors\Result<BatchGetApplicationsOutput>>;
  public function BatchGetDeploymentGroups(BatchGetDeploymentGroupsInput): Awaitable<Errors\Result<BatchGetDeploymentGroupsOutput>>;
  public function BatchGetDeploymentInstances(BatchGetDeploymentInstancesInput): Awaitable<Errors\Result<BatchGetDeploymentInstancesOutput>>;
  public function BatchGetDeploymentTargets(BatchGetDeploymentTargetsInput): Awaitable<Errors\Result<BatchGetDeploymentTargetsOutput>>;
  public function BatchGetDeployments(BatchGetDeploymentsInput): Awaitable<Errors\Result<BatchGetDeploymentsOutput>>;
  public function BatchGetOnPremisesInstances(BatchGetOnPremisesInstancesInput): Awaitable<Errors\Result<BatchGetOnPremisesInstancesOutput>>;
  public function ContinueDeployment(ContinueDeploymentInput): Awaitable<Errors\Error>;
  public function CreateApplication(CreateApplicationInput): Awaitable<Errors\Result<CreateApplicationOutput>>;
  public function CreateDeployment(CreateDeploymentInput): Awaitable<Errors\Result<CreateDeploymentOutput>>;
  public function CreateDeploymentConfig(CreateDeploymentConfigInput): Awaitable<Errors\Result<CreateDeploymentConfigOutput>>;
  public function CreateDeploymentGroup(CreateDeploymentGroupInput): Awaitable<Errors\Result<CreateDeploymentGroupOutput>>;
  public function DeleteApplication(DeleteApplicationInput): Awaitable<Errors\Error>;
  public function DeleteDeploymentConfig(DeleteDeploymentConfigInput): Awaitable<Errors\Error>;
  public function DeleteDeploymentGroup(DeleteDeploymentGroupInput): Awaitable<Errors\Result<DeleteDeploymentGroupOutput>>;
  public function DeleteGitHubAccountToken(DeleteGitHubAccountTokenInput): Awaitable<Errors\Result<DeleteGitHubAccountTokenOutput>>;
  public function DeregisterOnPremisesInstance(DeregisterOnPremisesInstanceInput): Awaitable<Errors\Error>;
  public function GetApplication(GetApplicationInput): Awaitable<Errors\Result<GetApplicationOutput>>;
  public function GetApplicationRevision(GetApplicationRevisionInput): Awaitable<Errors\Result<GetApplicationRevisionOutput>>;
  public function GetDeployment(GetDeploymentInput): Awaitable<Errors\Result<GetDeploymentOutput>>;
  public function GetDeploymentConfig(GetDeploymentConfigInput): Awaitable<Errors\Result<GetDeploymentConfigOutput>>;
  public function GetDeploymentGroup(GetDeploymentGroupInput): Awaitable<Errors\Result<GetDeploymentGroupOutput>>;
  public function GetDeploymentInstance(GetDeploymentInstanceInput): Awaitable<Errors\Result<GetDeploymentInstanceOutput>>;
  public function GetDeploymentTarget(GetDeploymentTargetInput): Awaitable<Errors\Result<GetDeploymentTargetOutput>>;
  public function GetOnPremisesInstance(GetOnPremisesInstanceInput): Awaitable<Errors\Result<GetOnPremisesInstanceOutput>>;
  public function ListApplicationRevisions(ListApplicationRevisionsInput): Awaitable<Errors\Result<ListApplicationRevisionsOutput>>;
  public function ListApplications(ListApplicationsInput): Awaitable<Errors\Result<ListApplicationsOutput>>;
  public function ListDeploymentConfigs(ListDeploymentConfigsInput): Awaitable<Errors\Result<ListDeploymentConfigsOutput>>;
  public function ListDeploymentGroups(ListDeploymentGroupsInput): Awaitable<Errors\Result<ListDeploymentGroupsOutput>>;
  public function ListDeploymentInstances(ListDeploymentInstancesInput): Awaitable<Errors\Result<ListDeploymentInstancesOutput>>;
  public function ListDeploymentTargets(ListDeploymentTargetsInput): Awaitable<Errors\Result<ListDeploymentTargetsOutput>>;
  public function ListDeployments(ListDeploymentsInput): Awaitable<Errors\Result<ListDeploymentsOutput>>;
  public function ListGitHubAccountTokenNames(ListGitHubAccountTokenNamesInput): Awaitable<Errors\Result<ListGitHubAccountTokenNamesOutput>>;
  public function ListOnPremisesInstances(ListOnPremisesInstancesInput): Awaitable<Errors\Result<ListOnPremisesInstancesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function PutLifecycleEventHookExecutionStatus(PutLifecycleEventHookExecutionStatusInput): Awaitable<Errors\Result<PutLifecycleEventHookExecutionStatusOutput>>;
  public function RegisterApplicationRevision(RegisterApplicationRevisionInput): Awaitable<Errors\Error>;
  public function RegisterOnPremisesInstance(RegisterOnPremisesInstanceInput): Awaitable<Errors\Error>;
  public function RemoveTagsFromOnPremisesInstances(RemoveTagsFromOnPremisesInstancesInput): Awaitable<Errors\Error>;
  public function SkipWaitTimeForInstanceTermination(SkipWaitTimeForInstanceTerminationInput): Awaitable<Errors\Error>;
  public function StopDeployment(StopDeploymentInput): Awaitable<Errors\Result<StopDeploymentOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdateApplication(UpdateApplicationInput): Awaitable<Errors\Error>;
  public function UpdateDeploymentGroup(UpdateDeploymentGroupInput): Awaitable<Errors\Result<UpdateDeploymentGroupOutput>>;
}

class AddTagsToOnPremisesInstancesInput {
  public InstanceNameList $instance_names;
  public TagList $tags;

  public function __construct(shape(
  ?'instance_names' => InstanceNameList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->instance_names = $instance_names ?? ;
    $this->tags = $tags ?? ;
  }
}

type AdditionalDeploymentStatusInfo = string;

class Alarm {
  public AlarmName $name;

  public function __construct(shape(
  ?'name' => AlarmName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class AlarmConfiguration {
  public AlarmList $alarms;
  public boolean $enabled;
  public boolean $ignore_poll_alarm_failure;

  public function __construct(shape(
  ?'alarms' => AlarmList,
  ?'enabled' => boolean,
  ?'ignore_poll_alarm_failure' => boolean,
  ) $s = shape()) {
    $this->alarms = $alarms ?? ;
    $this->enabled = $enabled ?? ;
    $this->ignore_poll_alarm_failure = $ignore_poll_alarm_failure ?? ;
  }
}

type AlarmList = vec<Alarm>;

type AlarmName = string;

class AlarmsLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AppSpecContent {
  public RawStringContent $content;
  public RawStringSha256 $sha_256;

  public function __construct(shape(
  ?'content' => RawStringContent,
  ?'sha_256' => RawStringSha256,
  ) $s = shape()) {
    $this->content = $content ?? ;
    $this->sha_256 = $sha_256 ?? ;
  }
}

class ApplicationAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApplicationDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApplicationId = string;

class ApplicationInfo {
  public ApplicationId $application_id;
  public ApplicationName $application_name;
  public ComputePlatform $compute_platform;
  public Timestamp $create_time;
  public GitHubAccountTokenName $git_hub_account_name;
  public boolean $linked_to_git_hub;

  public function __construct(shape(
  ?'application_id' => ApplicationId,
  ?'application_name' => ApplicationName,
  ?'compute_platform' => ComputePlatform,
  ?'create_time' => Timestamp,
  ?'git_hub_account_name' => GitHubAccountTokenName,
  ?'linked_to_git_hub' => boolean,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
    $this->application_name = $application_name ?? ;
    $this->compute_platform = $compute_platform ?? ;
    $this->create_time = $create_time ?? ;
    $this->git_hub_account_name = $git_hub_account_name ?? ;
    $this->linked_to_git_hub = $linked_to_git_hub ?? ;
  }
}

class ApplicationLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApplicationName = string;

class ApplicationNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ApplicationRevisionSortBy = string;

type ApplicationsInfoList = vec<ApplicationInfo>;

type ApplicationsList = vec<ApplicationName>;

type Arn = string;

class ArnNotSupportedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AutoRollbackConfiguration {
  public boolean $enabled;
  public AutoRollbackEventsList $events;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'events' => AutoRollbackEventsList,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->events = $events ?? ;
  }
}

type AutoRollbackEvent = string;

type AutoRollbackEventsList = vec<AutoRollbackEvent>;

class AutoScalingGroup {
  public AutoScalingGroupHook $hook;
  public AutoScalingGroupName $name;

  public function __construct(shape(
  ?'hook' => AutoScalingGroupHook,
  ?'name' => AutoScalingGroupName,
  ) $s = shape()) {
    $this->hook = $hook ?? ;
    $this->name = $name ?? ;
  }
}

type AutoScalingGroupHook = string;

type AutoScalingGroupList = vec<AutoScalingGroup>;

type AutoScalingGroupName = string;

type AutoScalingGroupNameList = vec<AutoScalingGroupName>;

class BatchGetApplicationRevisionsInput {
  public ApplicationName $application_name;
  public RevisionLocationList $revisions;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'revisions' => RevisionLocationList,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->revisions = $revisions ?? ;
  }
}

class BatchGetApplicationRevisionsOutput {
  public ApplicationName $application_name;
  public ErrorMessage $error_message;
  public RevisionInfoList $revisions;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'error_message' => ErrorMessage,
  ?'revisions' => RevisionInfoList,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->error_message = $error_message ?? ;
    $this->revisions = $revisions ?? ;
  }
}

class BatchGetApplicationsInput {
  public ApplicationsList $application_names;

  public function __construct(shape(
  ?'application_names' => ApplicationsList,
  ) $s = shape()) {
    $this->application_names = $application_names ?? ;
  }
}

class BatchGetApplicationsOutput {
  public ApplicationsInfoList $applications_info;

  public function __construct(shape(
  ?'applications_info' => ApplicationsInfoList,
  ) $s = shape()) {
    $this->applications_info = $applications_info ?? ;
  }
}

class BatchGetDeploymentGroupsInput {
  public ApplicationName $application_name;
  public DeploymentGroupsList $deployment_group_names;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'deployment_group_names' => DeploymentGroupsList,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->deployment_group_names = $deployment_group_names ?? ;
  }
}

class BatchGetDeploymentGroupsOutput {
  public DeploymentGroupInfoList $deployment_groups_info;
  public ErrorMessage $error_message;

  public function __construct(shape(
  ?'deployment_groups_info' => DeploymentGroupInfoList,
  ?'error_message' => ErrorMessage,
  ) $s = shape()) {
    $this->deployment_groups_info = $deployment_groups_info ?? ;
    $this->error_message = $error_message ?? ;
  }
}

class BatchGetDeploymentInstancesInput {
  public DeploymentId $deployment_id;
  public InstancesList $instance_ids;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'instance_ids' => InstancesList,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->instance_ids = $instance_ids ?? ;
  }
}

class BatchGetDeploymentInstancesOutput {
  public ErrorMessage $error_message;
  public InstanceSummaryList $instances_summary;

  public function __construct(shape(
  ?'error_message' => ErrorMessage,
  ?'instances_summary' => InstanceSummaryList,
  ) $s = shape()) {
    $this->error_message = $error_message ?? ;
    $this->instances_summary = $instances_summary ?? ;
  }
}

class BatchGetDeploymentTargetsInput {
  public DeploymentId $deployment_id;
  public TargetIdList $target_ids;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'target_ids' => TargetIdList,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->target_ids = $target_ids ?? ;
  }
}

class BatchGetDeploymentTargetsOutput {
  public DeploymentTargetList $deployment_targets;

  public function __construct(shape(
  ?'deployment_targets' => DeploymentTargetList,
  ) $s = shape()) {
    $this->deployment_targets = $deployment_targets ?? ;
  }
}

class BatchGetDeploymentsInput {
  public DeploymentsList $deployment_ids;

  public function __construct(shape(
  ?'deployment_ids' => DeploymentsList,
  ) $s = shape()) {
    $this->deployment_ids = $deployment_ids ?? ;
  }
}

class BatchGetDeploymentsOutput {
  public DeploymentsInfoList $deployments_info;

  public function __construct(shape(
  ?'deployments_info' => DeploymentsInfoList,
  ) $s = shape()) {
    $this->deployments_info = $deployments_info ?? ;
  }
}

class BatchGetOnPremisesInstancesInput {
  public InstanceNameList $instance_names;

  public function __construct(shape(
  ?'instance_names' => InstanceNameList,
  ) $s = shape()) {
    $this->instance_names = $instance_names ?? ;
  }
}

class BatchGetOnPremisesInstancesOutput {
  public InstanceInfoList $instance_infos;

  public function __construct(shape(
  ?'instance_infos' => InstanceInfoList,
  ) $s = shape()) {
    $this->instance_infos = $instance_infos ?? ;
  }
}

class BatchLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BlueGreenDeploymentConfiguration {
  public DeploymentReadyOption $deployment_ready_option;
  public GreenFleetProvisioningOption $green_fleet_provisioning_option;
  public BlueInstanceTerminationOption $terminate_blue_instances_on_deployment_success;

  public function __construct(shape(
  ?'deployment_ready_option' => DeploymentReadyOption,
  ?'green_fleet_provisioning_option' => GreenFleetProvisioningOption,
  ?'terminate_blue_instances_on_deployment_success' => BlueInstanceTerminationOption,
  ) $s = shape()) {
    $this->deployment_ready_option = $deployment_ready_option ?? ;
    $this->green_fleet_provisioning_option = $green_fleet_provisioning_option ?? ;
    $this->terminate_blue_instances_on_deployment_success = $terminate_blue_instances_on_deployment_success ?? ;
  }
}

class BlueInstanceTerminationOption {
  public InstanceAction $action;
  public Duration $termination_wait_time_in_minutes;

  public function __construct(shape(
  ?'action' => InstanceAction,
  ?'termination_wait_time_in_minutes' => Duration,
  ) $s = shape()) {
    $this->action = $action ?? ;
    $this->termination_wait_time_in_minutes = $termination_wait_time_in_minutes ?? ;
  }
}

type Boolean = bool;

class BucketNameFilterRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type BundleType = string;

type CommitId = string;

type ComputePlatform = string;

class ContinueDeploymentInput {
  public DeploymentId $deployment_id;
  public DeploymentWaitType $deployment_wait_type;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'deployment_wait_type' => DeploymentWaitType,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->deployment_wait_type = $deployment_wait_type ?? ;
  }
}

class CreateApplicationInput {
  public ApplicationName $application_name;
  public ComputePlatform $compute_platform;
  public TagList $tags;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'compute_platform' => ComputePlatform,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->compute_platform = $compute_platform ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateApplicationOutput {
  public ApplicationId $application_id;

  public function __construct(shape(
  ?'application_id' => ApplicationId,
  ) $s = shape()) {
    $this->application_id = $application_id ?? ;
  }
}

class CreateDeploymentConfigInput {
  public ComputePlatform $compute_platform;
  public DeploymentConfigName $deployment_config_name;
  public MinimumHealthyHosts $minimum_healthy_hosts;
  public TrafficRoutingConfig $traffic_routing_config;

  public function __construct(shape(
  ?'compute_platform' => ComputePlatform,
  ?'deployment_config_name' => DeploymentConfigName,
  ?'minimum_healthy_hosts' => MinimumHealthyHosts,
  ?'traffic_routing_config' => TrafficRoutingConfig,
  ) $s = shape()) {
    $this->compute_platform = $compute_platform ?? ;
    $this->deployment_config_name = $deployment_config_name ?? ;
    $this->minimum_healthy_hosts = $minimum_healthy_hosts ?? ;
    $this->traffic_routing_config = $traffic_routing_config ?? ;
  }
}

class CreateDeploymentConfigOutput {
  public DeploymentConfigId $deployment_config_id;

  public function __construct(shape(
  ?'deployment_config_id' => DeploymentConfigId,
  ) $s = shape()) {
    $this->deployment_config_id = $deployment_config_id ?? ;
  }
}

class CreateDeploymentGroupInput {
  public AlarmConfiguration $alarm_configuration;
  public ApplicationName $application_name;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public AutoScalingGroupNameList $auto_scaling_groups;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public DeploymentConfigName $deployment_config_name;
  public DeploymentGroupName $deployment_group_name;
  public DeploymentStyle $deployment_style;
  public EC2TagFilterList $ec_2_tag_filters;
  public EC2TagSet $ec_2_tag_set;
  public ECSServiceList $ecs_services;
  public LoadBalancerInfo $load_balancer_info;
  public TagFilterList $on_premises_instance_tag_filters;
  public OnPremisesTagSet $on_premises_tag_set;
  public Role $service_role_arn;
  public TagList $tags;
  public TriggerConfigList $trigger_configurations;

  public function __construct(shape(
  ?'alarm_configuration' => AlarmConfiguration,
  ?'application_name' => ApplicationName,
  ?'auto_rollback_configuration' => AutoRollbackConfiguration,
  ?'auto_scaling_groups' => AutoScalingGroupNameList,
  ?'blue_green_deployment_configuration' => BlueGreenDeploymentConfiguration,
  ?'deployment_config_name' => DeploymentConfigName,
  ?'deployment_group_name' => DeploymentGroupName,
  ?'deployment_style' => DeploymentStyle,
  ?'ec_2_tag_filters' => EC2TagFilterList,
  ?'ec_2_tag_set' => EC2TagSet,
  ?'ecs_services' => ECSServiceList,
  ?'load_balancer_info' => LoadBalancerInfo,
  ?'on_premises_instance_tag_filters' => TagFilterList,
  ?'on_premises_tag_set' => OnPremisesTagSet,
  ?'service_role_arn' => Role,
  ?'tags' => TagList,
  ?'trigger_configurations' => TriggerConfigList,
  ) $s = shape()) {
    $this->alarm_configuration = $alarm_configuration ?? ;
    $this->application_name = $application_name ?? ;
    $this->auto_rollback_configuration = $auto_rollback_configuration ?? ;
    $this->auto_scaling_groups = $auto_scaling_groups ?? ;
    $this->blue_green_deployment_configuration = $blue_green_deployment_configuration ?? ;
    $this->deployment_config_name = $deployment_config_name ?? ;
    $this->deployment_group_name = $deployment_group_name ?? ;
    $this->deployment_style = $deployment_style ?? ;
    $this->ec_2_tag_filters = $ec_2_tag_filters ?? ;
    $this->ec_2_tag_set = $ec_2_tag_set ?? ;
    $this->ecs_services = $ecs_services ?? ;
    $this->load_balancer_info = $load_balancer_info ?? ;
    $this->on_premises_instance_tag_filters = $on_premises_instance_tag_filters ?? ;
    $this->on_premises_tag_set = $on_premises_tag_set ?? ;
    $this->service_role_arn = $service_role_arn ?? ;
    $this->tags = $tags ?? ;
    $this->trigger_configurations = $trigger_configurations ?? ;
  }
}

class CreateDeploymentGroupOutput {
  public DeploymentGroupId $deployment_group_id;

  public function __construct(shape(
  ?'deployment_group_id' => DeploymentGroupId,
  ) $s = shape()) {
    $this->deployment_group_id = $deployment_group_id ?? ;
  }
}

class CreateDeploymentInput {
  public ApplicationName $application_name;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public DeploymentConfigName $deployment_config_name;
  public DeploymentGroupName $deployment_group_name;
  public Description $description;
  public FileExistsBehavior $file_exists_behavior;
  public boolean $ignore_application_stop_failures;
  public RevisionLocation $revision;
  public TargetInstances $target_instances;
  public boolean $update_outdated_instances_only;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'auto_rollback_configuration' => AutoRollbackConfiguration,
  ?'deployment_config_name' => DeploymentConfigName,
  ?'deployment_group_name' => DeploymentGroupName,
  ?'description' => Description,
  ?'file_exists_behavior' => FileExistsBehavior,
  ?'ignore_application_stop_failures' => boolean,
  ?'revision' => RevisionLocation,
  ?'target_instances' => TargetInstances,
  ?'update_outdated_instances_only' => boolean,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->auto_rollback_configuration = $auto_rollback_configuration ?? ;
    $this->deployment_config_name = $deployment_config_name ?? ;
    $this->deployment_group_name = $deployment_group_name ?? ;
    $this->description = $description ?? ;
    $this->file_exists_behavior = $file_exists_behavior ?? ;
    $this->ignore_application_stop_failures = $ignore_application_stop_failures ?? ;
    $this->revision = $revision ?? ;
    $this->target_instances = $target_instances ?? ;
    $this->update_outdated_instances_only = $update_outdated_instances_only ?? ;
  }
}

class CreateDeploymentOutput {
  public DeploymentId $deployment_id;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
  }
}

class DeleteApplicationInput {
  public ApplicationName $application_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
  }
}

class DeleteDeploymentConfigInput {
  public DeploymentConfigName $deployment_config_name;

  public function __construct(shape(
  ?'deployment_config_name' => DeploymentConfigName,
  ) $s = shape()) {
    $this->deployment_config_name = $deployment_config_name ?? ;
  }
}

class DeleteDeploymentGroupInput {
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'deployment_group_name' => DeploymentGroupName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->deployment_group_name = $deployment_group_name ?? ;
  }
}

class DeleteDeploymentGroupOutput {
  public AutoScalingGroupList $hooks_not_cleaned_up;

  public function __construct(shape(
  ?'hooks_not_cleaned_up' => AutoScalingGroupList,
  ) $s = shape()) {
    $this->hooks_not_cleaned_up = $hooks_not_cleaned_up ?? ;
  }
}

class DeleteGitHubAccountTokenInput {
  public GitHubAccountTokenName $token_name;

  public function __construct(shape(
  ?'token_name' => GitHubAccountTokenName,
  ) $s = shape()) {
    $this->token_name = $token_name ?? ;
  }
}

class DeleteGitHubAccountTokenOutput {
  public GitHubAccountTokenName $token_name;

  public function __construct(shape(
  ?'token_name' => GitHubAccountTokenName,
  ) $s = shape()) {
    $this->token_name = $token_name ?? ;
  }
}

class DeploymentAlreadyCompletedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentAlreadyStartedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentConfigAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentConfigDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentConfigId = string;

class DeploymentConfigInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentConfigInfo {
  public ComputePlatform $compute_platform;
  public Timestamp $create_time;
  public DeploymentConfigId $deployment_config_id;
  public DeploymentConfigName $deployment_config_name;
  public MinimumHealthyHosts $minimum_healthy_hosts;
  public TrafficRoutingConfig $traffic_routing_config;

  public function __construct(shape(
  ?'compute_platform' => ComputePlatform,
  ?'create_time' => Timestamp,
  ?'deployment_config_id' => DeploymentConfigId,
  ?'deployment_config_name' => DeploymentConfigName,
  ?'minimum_healthy_hosts' => MinimumHealthyHosts,
  ?'traffic_routing_config' => TrafficRoutingConfig,
  ) $s = shape()) {
    $this->compute_platform = $compute_platform ?? ;
    $this->create_time = $create_time ?? ;
    $this->deployment_config_id = $deployment_config_id ?? ;
    $this->deployment_config_name = $deployment_config_name ?? ;
    $this->minimum_healthy_hosts = $minimum_healthy_hosts ?? ;
    $this->traffic_routing_config = $traffic_routing_config ?? ;
  }
}

class DeploymentConfigLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentConfigName = string;

class DeploymentConfigNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentConfigsList = vec<DeploymentConfigName>;

type DeploymentCreator = string;

class DeploymentDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentGroupAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentGroupDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentGroupId = string;

class DeploymentGroupInfo {
  public AlarmConfiguration $alarm_configuration;
  public ApplicationName $application_name;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public AutoScalingGroupList $auto_scaling_groups;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public ComputePlatform $compute_platform;
  public DeploymentConfigName $deployment_config_name;
  public DeploymentGroupId $deployment_group_id;
  public DeploymentGroupName $deployment_group_name;
  public DeploymentStyle $deployment_style;
  public EC2TagFilterList $ec_2_tag_filters;
  public EC2TagSet $ec_2_tag_set;
  public ECSServiceList $ecs_services;
  public LastDeploymentInfo $last_attempted_deployment;
  public LastDeploymentInfo $last_successful_deployment;
  public LoadBalancerInfo $load_balancer_info;
  public TagFilterList $on_premises_instance_tag_filters;
  public OnPremisesTagSet $on_premises_tag_set;
  public Role $service_role_arn;
  public RevisionLocation $target_revision;
  public TriggerConfigList $trigger_configurations;

  public function __construct(shape(
  ?'alarm_configuration' => AlarmConfiguration,
  ?'application_name' => ApplicationName,
  ?'auto_rollback_configuration' => AutoRollbackConfiguration,
  ?'auto_scaling_groups' => AutoScalingGroupList,
  ?'blue_green_deployment_configuration' => BlueGreenDeploymentConfiguration,
  ?'compute_platform' => ComputePlatform,
  ?'deployment_config_name' => DeploymentConfigName,
  ?'deployment_group_id' => DeploymentGroupId,
  ?'deployment_group_name' => DeploymentGroupName,
  ?'deployment_style' => DeploymentStyle,
  ?'ec_2_tag_filters' => EC2TagFilterList,
  ?'ec_2_tag_set' => EC2TagSet,
  ?'ecs_services' => ECSServiceList,
  ?'last_attempted_deployment' => LastDeploymentInfo,
  ?'last_successful_deployment' => LastDeploymentInfo,
  ?'load_balancer_info' => LoadBalancerInfo,
  ?'on_premises_instance_tag_filters' => TagFilterList,
  ?'on_premises_tag_set' => OnPremisesTagSet,
  ?'service_role_arn' => Role,
  ?'target_revision' => RevisionLocation,
  ?'trigger_configurations' => TriggerConfigList,
  ) $s = shape()) {
    $this->alarm_configuration = $alarm_configuration ?? ;
    $this->application_name = $application_name ?? ;
    $this->auto_rollback_configuration = $auto_rollback_configuration ?? ;
    $this->auto_scaling_groups = $auto_scaling_groups ?? ;
    $this->blue_green_deployment_configuration = $blue_green_deployment_configuration ?? ;
    $this->compute_platform = $compute_platform ?? ;
    $this->deployment_config_name = $deployment_config_name ?? ;
    $this->deployment_group_id = $deployment_group_id ?? ;
    $this->deployment_group_name = $deployment_group_name ?? ;
    $this->deployment_style = $deployment_style ?? ;
    $this->ec_2_tag_filters = $ec_2_tag_filters ?? ;
    $this->ec_2_tag_set = $ec_2_tag_set ?? ;
    $this->ecs_services = $ecs_services ?? ;
    $this->last_attempted_deployment = $last_attempted_deployment ?? ;
    $this->last_successful_deployment = $last_successful_deployment ?? ;
    $this->load_balancer_info = $load_balancer_info ?? ;
    $this->on_premises_instance_tag_filters = $on_premises_instance_tag_filters ?? ;
    $this->on_premises_tag_set = $on_premises_tag_set ?? ;
    $this->service_role_arn = $service_role_arn ?? ;
    $this->target_revision = $target_revision ?? ;
    $this->trigger_configurations = $trigger_configurations ?? ;
  }
}

type DeploymentGroupInfoList = vec<DeploymentGroupInfo>;

class DeploymentGroupLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentGroupName = string;

class DeploymentGroupNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentGroupsList = vec<DeploymentGroupName>;

type DeploymentId = string;

class DeploymentIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentInfo {
  public AdditionalDeploymentStatusInfo $additional_deployment_status_info;
  public ApplicationName $application_name;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public Timestamp $complete_time;
  public ComputePlatform $compute_platform;
  public Timestamp $create_time;
  public DeploymentCreator $creator;
  public DeploymentConfigName $deployment_config_name;
  public DeploymentGroupName $deployment_group_name;
  public DeploymentId $deployment_id;
  public DeploymentOverview $deployment_overview;
  public DeploymentStatusMessageList $deployment_status_messages;
  public DeploymentStyle $deployment_style;
  public Description $description;
  public ErrorInformation $error_information;
  public FileExistsBehavior $file_exists_behavior;
  public boolean $ignore_application_stop_failures;
  public boolean $instance_termination_wait_time_started;
  public LoadBalancerInfo $load_balancer_info;
  public RevisionLocation $previous_revision;
  public RevisionLocation $revision;
  public RollbackInfo $rollback_info;
  public Timestamp $start_time;
  public DeploymentStatus $status;
  public TargetInstances $target_instances;
  public boolean $update_outdated_instances_only;

  public function __construct(shape(
  ?'additional_deployment_status_info' => AdditionalDeploymentStatusInfo,
  ?'application_name' => ApplicationName,
  ?'auto_rollback_configuration' => AutoRollbackConfiguration,
  ?'blue_green_deployment_configuration' => BlueGreenDeploymentConfiguration,
  ?'complete_time' => Timestamp,
  ?'compute_platform' => ComputePlatform,
  ?'create_time' => Timestamp,
  ?'creator' => DeploymentCreator,
  ?'deployment_config_name' => DeploymentConfigName,
  ?'deployment_group_name' => DeploymentGroupName,
  ?'deployment_id' => DeploymentId,
  ?'deployment_overview' => DeploymentOverview,
  ?'deployment_status_messages' => DeploymentStatusMessageList,
  ?'deployment_style' => DeploymentStyle,
  ?'description' => Description,
  ?'error_information' => ErrorInformation,
  ?'file_exists_behavior' => FileExistsBehavior,
  ?'ignore_application_stop_failures' => boolean,
  ?'instance_termination_wait_time_started' => boolean,
  ?'load_balancer_info' => LoadBalancerInfo,
  ?'previous_revision' => RevisionLocation,
  ?'revision' => RevisionLocation,
  ?'rollback_info' => RollbackInfo,
  ?'start_time' => Timestamp,
  ?'status' => DeploymentStatus,
  ?'target_instances' => TargetInstances,
  ?'update_outdated_instances_only' => boolean,
  ) $s = shape()) {
    $this->additional_deployment_status_info = $additional_deployment_status_info ?? ;
    $this->application_name = $application_name ?? ;
    $this->auto_rollback_configuration = $auto_rollback_configuration ?? ;
    $this->blue_green_deployment_configuration = $blue_green_deployment_configuration ?? ;
    $this->complete_time = $complete_time ?? ;
    $this->compute_platform = $compute_platform ?? ;
    $this->create_time = $create_time ?? ;
    $this->creator = $creator ?? ;
    $this->deployment_config_name = $deployment_config_name ?? ;
    $this->deployment_group_name = $deployment_group_name ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->deployment_overview = $deployment_overview ?? ;
    $this->deployment_status_messages = $deployment_status_messages ?? ;
    $this->deployment_style = $deployment_style ?? ;
    $this->description = $description ?? ;
    $this->error_information = $error_information ?? ;
    $this->file_exists_behavior = $file_exists_behavior ?? ;
    $this->ignore_application_stop_failures = $ignore_application_stop_failures ?? ;
    $this->instance_termination_wait_time_started = $instance_termination_wait_time_started ?? ;
    $this->load_balancer_info = $load_balancer_info ?? ;
    $this->previous_revision = $previous_revision ?? ;
    $this->revision = $revision ?? ;
    $this->rollback_info = $rollback_info ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
    $this->target_instances = $target_instances ?? ;
    $this->update_outdated_instances_only = $update_outdated_instances_only ?? ;
  }
}

class DeploymentIsNotInReadyStateException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentNotStartedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentOption = string;

class DeploymentOverview {
  public InstanceCount $failed;
  public InstanceCount $in_progress;
  public InstanceCount $pending;
  public InstanceCount $ready;
  public InstanceCount $skipped;
  public InstanceCount $succeeded;

  public function __construct(shape(
  ?'failed' => InstanceCount,
  ?'in_progress' => InstanceCount,
  ?'pending' => InstanceCount,
  ?'ready' => InstanceCount,
  ?'skipped' => InstanceCount,
  ?'succeeded' => InstanceCount,
  ) $s = shape()) {
    $this->failed = $failed ?? ;
    $this->in_progress = $in_progress ?? ;
    $this->pending = $pending ?? ;
    $this->ready = $ready ?? ;
    $this->skipped = $skipped ?? ;
    $this->succeeded = $succeeded ?? ;
  }
}

type DeploymentReadyAction = string;

class DeploymentReadyOption {
  public DeploymentReadyAction $action_on_timeout;
  public Duration $wait_time_in_minutes;

  public function __construct(shape(
  ?'action_on_timeout' => DeploymentReadyAction,
  ?'wait_time_in_minutes' => Duration,
  ) $s = shape()) {
    $this->action_on_timeout = $action_on_timeout ?? ;
    $this->wait_time_in_minutes = $wait_time_in_minutes ?? ;
  }
}

type DeploymentStatus = string;

type DeploymentStatusList = vec<DeploymentStatus>;

type DeploymentStatusMessageList = vec<ErrorMessage>;

class DeploymentStyle {
  public DeploymentOption $deployment_option;
  public DeploymentType $deployment_type;

  public function __construct(shape(
  ?'deployment_option' => DeploymentOption,
  ?'deployment_type' => DeploymentType,
  ) $s = shape()) {
    $this->deployment_option = $deployment_option ?? ;
    $this->deployment_type = $deployment_type ?? ;
  }
}

class DeploymentTarget {
  public DeploymentTargetType $deployment_target_type;
  public ECSTarget $ecs_target;
  public InstanceTarget $instance_target;
  public LambdaTarget $lambda_target;

  public function __construct(shape(
  ?'deployment_target_type' => DeploymentTargetType,
  ?'ecs_target' => ECSTarget,
  ?'instance_target' => InstanceTarget,
  ?'lambda_target' => LambdaTarget,
  ) $s = shape()) {
    $this->deployment_target_type = $deployment_target_type ?? ;
    $this->ecs_target = $ecs_target ?? ;
    $this->instance_target = $instance_target ?? ;
    $this->lambda_target = $lambda_target ?? ;
  }
}

class DeploymentTargetDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeploymentTargetIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentTargetList = vec<DeploymentTarget>;

class DeploymentTargetListSizeExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeploymentTargetType = string;

type DeploymentType = string;

type DeploymentWaitType = string;

type DeploymentsInfoList = vec<DeploymentInfo>;

type DeploymentsList = vec<DeploymentId>;

class DeregisterOnPremisesInstanceInput {
  public InstanceName $instance_name;

  public function __construct(shape(
  ?'instance_name' => InstanceName,
  ) $s = shape()) {
    $this->instance_name = $instance_name ?? ;
  }
}

type Description = string;

class DescriptionTooLongException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Diagnostics {
  public LifecycleErrorCode $error_code;
  public LogTail $log_tail;
  public LifecycleMessage $message;
  public ScriptName $script_name;

  public function __construct(shape(
  ?'error_code' => LifecycleErrorCode,
  ?'log_tail' => LogTail,
  ?'message' => LifecycleMessage,
  ?'script_name' => ScriptName,
  ) $s = shape()) {
    $this->error_code = $error_code ?? ;
    $this->log_tail = $log_tail ?? ;
    $this->message = $message ?? ;
    $this->script_name = $script_name ?? ;
  }
}

type Duration = int;

class EC2TagFilter {
  public Key $key;
  public EC2TagFilterType $type;
  public Value $value;

  public function __construct(shape(
  ?'key' => Key,
  ?'type' => EC2TagFilterType,
  ?'value' => Value,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? ;
    $this->value = $value ?? "";
  }
}

type EC2TagFilterList = vec<EC2TagFilter>;

type EC2TagFilterType = string;

class EC2TagSet {
  public EC2TagSetList $ec_2_tag_set_list;

  public function __construct(shape(
  ?'ec_2_tag_set_list' => EC2TagSetList,
  ) $s = shape()) {
    $this->ec_2_tag_set_list = $ec_2_tag_set_list ?? ;
  }
}

type EC2TagSetList = vec<EC2TagFilterList>;

type ECSClusterName = string;

class ECSService {
  public ECSClusterName $cluster_name;
  public ECSServiceName $service_name;

  public function __construct(shape(
  ?'cluster_name' => ECSClusterName,
  ?'service_name' => ECSServiceName,
  ) $s = shape()) {
    $this->cluster_name = $cluster_name ?? ;
    $this->service_name = $service_name ?? ;
  }
}

type ECSServiceList = vec<ECSService>;

class ECSServiceMappingLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ECSServiceName = string;

class ECSTarget {
  public DeploymentId $deployment_id;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetStatus $status;
  public TargetArn $target_arn;
  public TargetId $target_id;
  public ECSTaskSetList $task_sets_info;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'last_updated_at' => Time,
  ?'lifecycle_events' => LifecycleEventList,
  ?'status' => TargetStatus,
  ?'target_arn' => TargetArn,
  ?'target_id' => TargetId,
  ?'task_sets_info' => ECSTaskSetList,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->lifecycle_events = $lifecycle_events ?? ;
    $this->status = $status ?? ;
    $this->target_arn = $target_arn ?? ;
    $this->target_id = $target_id ?? ;
    $this->task_sets_info = $task_sets_info ?? ;
  }
}

class ECSTaskSet {
  public ECSTaskSetCount $desired_count;
  public ECSTaskSetIdentifier $identifer;
  public ECSTaskSetCount $pending_count;
  public ECSTaskSetCount $running_count;
  public ECSTaskSetStatus $status;
  public TargetGroupInfo $target_group;
  public TargetLabel $task_set_label;
  public TrafficWeight $traffic_weight;

  public function __construct(shape(
  ?'desired_count' => ECSTaskSetCount,
  ?'identifer' => ECSTaskSetIdentifier,
  ?'pending_count' => ECSTaskSetCount,
  ?'running_count' => ECSTaskSetCount,
  ?'status' => ECSTaskSetStatus,
  ?'target_group' => TargetGroupInfo,
  ?'task_set_label' => TargetLabel,
  ?'traffic_weight' => TrafficWeight,
  ) $s = shape()) {
    $this->desired_count = $desired_count ?? ;
    $this->identifer = $identifer ?? ;
    $this->pending_count = $pending_count ?? ;
    $this->running_count = $running_count ?? ;
    $this->status = $status ?? ;
    $this->target_group = $target_group ?? ;
    $this->task_set_label = $task_set_label ?? ;
    $this->traffic_weight = $traffic_weight ?? ;
  }
}

type ECSTaskSetCount = int;

type ECSTaskSetIdentifier = string;

type ECSTaskSetList = vec<ECSTaskSet>;

type ECSTaskSetStatus = string;

class ELBInfo {
  public ELBName $name;

  public function __construct(shape(
  ?'name' => ELBName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type ELBInfoList = vec<ELBInfo>;

type ELBName = string;

type ETag = string;

type ErrorCode = string;

class ErrorInformation {
  public ErrorCode $code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type ErrorMessage = string;

type FileExistsBehavior = string;

type FilterValue = string;

type FilterValueList = vec<FilterValue>;

class GenericRevisionInfo {
  public DeploymentGroupsList $deployment_groups;
  public Description $description;
  public Timestamp $first_used_time;
  public Timestamp $last_used_time;
  public Timestamp $register_time;

  public function __construct(shape(
  ?'deployment_groups' => DeploymentGroupsList,
  ?'description' => Description,
  ?'first_used_time' => Timestamp,
  ?'last_used_time' => Timestamp,
  ?'register_time' => Timestamp,
  ) $s = shape()) {
    $this->deployment_groups = $deployment_groups ?? ;
    $this->description = $description ?? ;
    $this->first_used_time = $first_used_time ?? ;
    $this->last_used_time = $last_used_time ?? ;
    $this->register_time = $register_time ?? ;
  }
}

class GetApplicationInput {
  public ApplicationName $application_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
  }
}

class GetApplicationOutput {
  public ApplicationInfo $application;

  public function __construct(shape(
  ?'application' => ApplicationInfo,
  ) $s = shape()) {
    $this->application = $application ?? ;
  }
}

class GetApplicationRevisionInput {
  public ApplicationName $application_name;
  public RevisionLocation $revision;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'revision' => RevisionLocation,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->revision = $revision ?? ;
  }
}

class GetApplicationRevisionOutput {
  public ApplicationName $application_name;
  public RevisionLocation $revision;
  public GenericRevisionInfo $revision_info;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'revision' => RevisionLocation,
  ?'revision_info' => GenericRevisionInfo,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->revision = $revision ?? ;
    $this->revision_info = $revision_info ?? ;
  }
}

class GetDeploymentConfigInput {
  public DeploymentConfigName $deployment_config_name;

  public function __construct(shape(
  ?'deployment_config_name' => DeploymentConfigName,
  ) $s = shape()) {
    $this->deployment_config_name = $deployment_config_name ?? ;
  }
}

class GetDeploymentConfigOutput {
  public DeploymentConfigInfo $deployment_config_info;

  public function __construct(shape(
  ?'deployment_config_info' => DeploymentConfigInfo,
  ) $s = shape()) {
    $this->deployment_config_info = $deployment_config_info ?? ;
  }
}

class GetDeploymentGroupInput {
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'deployment_group_name' => DeploymentGroupName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->deployment_group_name = $deployment_group_name ?? ;
  }
}

class GetDeploymentGroupOutput {
  public DeploymentGroupInfo $deployment_group_info;

  public function __construct(shape(
  ?'deployment_group_info' => DeploymentGroupInfo,
  ) $s = shape()) {
    $this->deployment_group_info = $deployment_group_info ?? ;
  }
}

class GetDeploymentInput {
  public DeploymentId $deployment_id;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
  }
}

class GetDeploymentInstanceInput {
  public DeploymentId $deployment_id;
  public InstanceId $instance_id;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'instance_id' => InstanceId,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->instance_id = $instance_id ?? ;
  }
}

class GetDeploymentInstanceOutput {
  public InstanceSummary $instance_summary;

  public function __construct(shape(
  ?'instance_summary' => InstanceSummary,
  ) $s = shape()) {
    $this->instance_summary = $instance_summary ?? ;
  }
}

class GetDeploymentOutput {
  public DeploymentInfo $deployment_info;

  public function __construct(shape(
  ?'deployment_info' => DeploymentInfo,
  ) $s = shape()) {
    $this->deployment_info = $deployment_info ?? ;
  }
}

class GetDeploymentTargetInput {
  public DeploymentId $deployment_id;
  public TargetId $target_id;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'target_id' => TargetId,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->target_id = $target_id ?? ;
  }
}

class GetDeploymentTargetOutput {
  public DeploymentTarget $deployment_target;

  public function __construct(shape(
  ?'deployment_target' => DeploymentTarget,
  ) $s = shape()) {
    $this->deployment_target = $deployment_target ?? ;
  }
}

class GetOnPremisesInstanceInput {
  public InstanceName $instance_name;

  public function __construct(shape(
  ?'instance_name' => InstanceName,
  ) $s = shape()) {
    $this->instance_name = $instance_name ?? ;
  }
}

class GetOnPremisesInstanceOutput {
  public InstanceInfo $instance_info;

  public function __construct(shape(
  ?'instance_info' => InstanceInfo,
  ) $s = shape()) {
    $this->instance_info = $instance_info ?? ;
  }
}

class GitHubAccountTokenDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type GitHubAccountTokenName = string;

type GitHubAccountTokenNameList = vec<GitHubAccountTokenName>;

class GitHubAccountTokenNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GitHubLocation {
  public CommitId $commit_id;
  public Repository $repository;

  public function __construct(shape(
  ?'commit_id' => CommitId,
  ?'repository' => Repository,
  ) $s = shape()) {
    $this->commit_id = $commit_id ?? ;
    $this->repository = $repository ?? ;
  }
}

type GreenFleetProvisioningAction = string;

class GreenFleetProvisioningOption {
  public GreenFleetProvisioningAction $action;

  public function __construct(shape(
  ?'action' => GreenFleetProvisioningAction,
  ) $s = shape()) {
    $this->action = $action ?? ;
  }
}

class IamArnRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type IamSessionArn = string;

class IamSessionArnAlreadyRegisteredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type IamUserArn = string;

class IamUserArnAlreadyRegisteredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IamUserArnRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InstanceAction = string;

type InstanceArn = string;

type InstanceCount = int;

class InstanceDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InstanceId = string;

class InstanceIdRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InstanceInfo {
  public Timestamp $deregister_time;
  public IamSessionArn $iam_session_arn;
  public IamUserArn $iam_user_arn;
  public InstanceArn $instance_arn;
  public InstanceName $instance_name;
  public Timestamp $register_time;
  public TagList $tags;

  public function __construct(shape(
  ?'deregister_time' => Timestamp,
  ?'iam_session_arn' => IamSessionArn,
  ?'iam_user_arn' => IamUserArn,
  ?'instance_arn' => InstanceArn,
  ?'instance_name' => InstanceName,
  ?'register_time' => Timestamp,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->deregister_time = $deregister_time ?? ;
    $this->iam_session_arn = $iam_session_arn ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->instance_arn = $instance_arn ?? ;
    $this->instance_name = $instance_name ?? ;
    $this->register_time = $register_time ?? ;
    $this->tags = $tags ?? ;
  }
}

type InstanceInfoList = vec<InstanceInfo>;

class InstanceLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InstanceName = string;

class InstanceNameAlreadyRegisteredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InstanceNameList = vec<InstanceName>;

class InstanceNameRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InstanceNotRegisteredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InstanceStatus = string;

type InstanceStatusList = vec<InstanceStatus>;

class InstanceSummary {
  public DeploymentId $deployment_id;
  public InstanceId $instance_id;
  public InstanceType $instance_type;
  public Timestamp $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public InstanceStatus $status;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'instance_id' => InstanceId,
  ?'instance_type' => InstanceType,
  ?'last_updated_at' => Timestamp,
  ?'lifecycle_events' => LifecycleEventList,
  ?'status' => InstanceStatus,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->instance_id = $instance_id ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->lifecycle_events = $lifecycle_events ?? ;
    $this->status = $status ?? ;
  }
}

type InstanceSummaryList = vec<InstanceSummary>;

class InstanceTarget {
  public DeploymentId $deployment_id;
  public TargetLabel $instance_label;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetStatus $status;
  public TargetArn $target_arn;
  public TargetId $target_id;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'instance_label' => TargetLabel,
  ?'last_updated_at' => Time,
  ?'lifecycle_events' => LifecycleEventList,
  ?'status' => TargetStatus,
  ?'target_arn' => TargetArn,
  ?'target_id' => TargetId,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->instance_label = $instance_label ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->lifecycle_events = $lifecycle_events ?? ;
    $this->status = $status ?? ;
    $this->target_arn = $target_arn ?? ;
    $this->target_id = $target_id ?? ;
  }
}

type InstanceType = string;

type InstanceTypeList = vec<InstanceType>;

type InstancesList = vec<InstanceId>;

class InvalidAlarmConfigException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidApplicationNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidAutoRollbackConfigException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidAutoScalingGroupException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidBlueGreenDeploymentConfigurationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidBucketNameFilterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidComputePlatformException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeployedStateFilterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentConfigIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentConfigNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentGroupNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentInstanceTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentStatusException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentStyleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentTargetIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeploymentWaitTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidEC2TagCombinationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidEC2TagException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidECSServiceException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidFileExistsBehaviorException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidGitHubAccountTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidGitHubAccountTokenNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidIamSessionArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidIamUserArnException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidIgnoreApplicationStopFailuresValueException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidInputException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidInstanceIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidInstanceNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidInstanceStatusException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidInstanceTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidKeyPrefixFilterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidLifecycleEventHookExecutionIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidLifecycleEventHookExecutionStatusException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidLoadBalancerInfoException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidMinimumHealthyHostValueException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidNextTokenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidOnPremisesTagCombinationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRegistrationStatusException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRevisionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRoleException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSortByException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSortOrderException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagFilterException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTagsToAddException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetFilterNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetGroupPairException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetInstancesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTimeRangeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTrafficRoutingConfigurationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTriggerConfigException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidUpdateOutdatedInstancesOnlyValueException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Key = string;

type LambdaFunctionAlias = string;

class LambdaFunctionInfo {
  public Version $current_version;
  public LambdaFunctionAlias $function_alias;
  public LambdaFunctionName $function_name;
  public Version $target_version;
  public TrafficWeight $target_version_weight;

  public function __construct(shape(
  ?'current_version' => Version,
  ?'function_alias' => LambdaFunctionAlias,
  ?'function_name' => LambdaFunctionName,
  ?'target_version' => Version,
  ?'target_version_weight' => TrafficWeight,
  ) $s = shape()) {
    $this->current_version = $current_version ?? ;
    $this->function_alias = $function_alias ?? ;
    $this->function_name = $function_name ?? ;
    $this->target_version = $target_version ?? ;
    $this->target_version_weight = $target_version_weight ?? ;
  }
}

type LambdaFunctionName = string;

class LambdaTarget {
  public DeploymentId $deployment_id;
  public LambdaFunctionInfo $lambda_function_info;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetStatus $status;
  public TargetArn $target_arn;
  public TargetId $target_id;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'lambda_function_info' => LambdaFunctionInfo,
  ?'last_updated_at' => Time,
  ?'lifecycle_events' => LifecycleEventList,
  ?'status' => TargetStatus,
  ?'target_arn' => TargetArn,
  ?'target_id' => TargetId,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->lambda_function_info = $lambda_function_info ?? ;
    $this->last_updated_at = $last_updated_at ?? ;
    $this->lifecycle_events = $lifecycle_events ?? ;
    $this->status = $status ?? ;
    $this->target_arn = $target_arn ?? ;
    $this->target_id = $target_id ?? ;
  }
}

class LastDeploymentInfo {
  public Timestamp $create_time;
  public DeploymentId $deployment_id;
  public Timestamp $end_time;
  public DeploymentStatus $status;

  public function __construct(shape(
  ?'create_time' => Timestamp,
  ?'deployment_id' => DeploymentId,
  ?'end_time' => Timestamp,
  ?'status' => DeploymentStatus,
  ) $s = shape()) {
    $this->create_time = $create_time ?? ;
    $this->deployment_id = $deployment_id ?? ;
    $this->end_time = $end_time ?? ;
    $this->status = $status ?? ;
  }
}

type LifecycleErrorCode = string;

class LifecycleEvent {
  public Diagnostics $diagnostics;
  public Timestamp $end_time;
  public LifecycleEventName $lifecycle_event_name;
  public Timestamp $start_time;
  public LifecycleEventStatus $status;

  public function __construct(shape(
  ?'diagnostics' => Diagnostics,
  ?'end_time' => Timestamp,
  ?'lifecycle_event_name' => LifecycleEventName,
  ?'start_time' => Timestamp,
  ?'status' => LifecycleEventStatus,
  ) $s = shape()) {
    $this->diagnostics = $diagnostics ?? ;
    $this->end_time = $end_time ?? ;
    $this->lifecycle_event_name = $lifecycle_event_name ?? ;
    $this->start_time = $start_time ?? ;
    $this->status = $status ?? ;
  }
}

class LifecycleEventAlreadyCompletedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LifecycleEventHookExecutionId = string;

type LifecycleEventList = vec<LifecycleEvent>;

type LifecycleEventName = string;

type LifecycleEventStatus = string;

class LifecycleHookLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LifecycleMessage = string;

class ListApplicationRevisionsInput {
  public ApplicationName $application_name;
  public ListStateFilterAction $deployed;
  public NextToken $next_token;
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key_prefix;
  public ApplicationRevisionSortBy $sort_by;
  public SortOrder $sort_order;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'deployed' => ListStateFilterAction,
  ?'next_token' => NextToken,
  ?'s_3_bucket' => S3Bucket,
  ?'s_3_key_prefix' => S3Key,
  ?'sort_by' => ApplicationRevisionSortBy,
  ?'sort_order' => SortOrder,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->deployed = $deployed ?? ;
    $this->next_token = $next_token ?? ;
    $this->s_3_bucket = $s_3_bucket ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? ;
    $this->sort_by = $sort_by ?? ;
    $this->sort_order = $sort_order ?? ;
  }
}

class ListApplicationRevisionsOutput {
  public NextToken $next_token;
  public RevisionLocationList $revisions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'revisions' => RevisionLocationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->revisions = $revisions ?? ;
  }
}

class ListApplicationsInput {
  public NextToken $next_token;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class ListApplicationsOutput {
  public ApplicationsList $applications;
  public NextToken $next_token;

  public function __construct(shape(
  ?'applications' => ApplicationsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->applications = $applications ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentConfigsInput {
  public NextToken $next_token;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentConfigsOutput {
  public DeploymentConfigsList $deployment_configs_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'deployment_configs_list' => DeploymentConfigsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->deployment_configs_list = $deployment_configs_list ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentGroupsInput {
  public ApplicationName $application_name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentGroupsOutput {
  public ApplicationName $application_name;
  public DeploymentGroupsList $deployment_groups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'deployment_groups' => DeploymentGroupsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->deployment_groups = $deployment_groups ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentInstancesInput {
  public DeploymentId $deployment_id;
  public InstanceStatusList $instance_status_filter;
  public InstanceTypeList $instance_type_filter;
  public NextToken $next_token;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'instance_status_filter' => InstanceStatusList,
  ?'instance_type_filter' => InstanceTypeList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->instance_status_filter = $instance_status_filter ?? ;
    $this->instance_type_filter = $instance_type_filter ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentInstancesOutput {
  public InstancesList $instances_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instances_list' => InstancesList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instances_list = $instances_list ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentTargetsInput {
  public DeploymentId $deployment_id;
  public NextToken $next_token;
  public TargetFilters $target_filters;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'next_token' => NextToken,
  ?'target_filters' => TargetFilters,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->next_token = $next_token ?? ;
    $this->target_filters = $target_filters ?? ;
  }
}

class ListDeploymentTargetsOutput {
  public NextToken $next_token;
  public TargetIdList $target_ids;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'target_ids' => TargetIdList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->target_ids = $target_ids ?? ;
  }
}

class ListDeploymentsInput {
  public ApplicationName $application_name;
  public TimeRange $create_time_range;
  public DeploymentGroupName $deployment_group_name;
  public DeploymentStatusList $include_only_statuses;
  public NextToken $next_token;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'create_time_range' => TimeRange,
  ?'deployment_group_name' => DeploymentGroupName,
  ?'include_only_statuses' => DeploymentStatusList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->create_time_range = $create_time_range ?? ;
    $this->deployment_group_name = $deployment_group_name ?? ;
    $this->include_only_statuses = $include_only_statuses ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListDeploymentsOutput {
  public DeploymentsList $deployments;
  public NextToken $next_token;

  public function __construct(shape(
  ?'deployments' => DeploymentsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->deployments = $deployments ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListGitHubAccountTokenNamesInput {
  public NextToken $next_token;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
  }
}

class ListGitHubAccountTokenNamesOutput {
  public NextToken $next_token;
  public GitHubAccountTokenNameList $token_name_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'token_name_list' => GitHubAccountTokenNameList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->token_name_list = $token_name_list ?? ;
  }
}

class ListOnPremisesInstancesInput {
  public NextToken $next_token;
  public RegistrationStatus $registration_status;
  public TagFilterList $tag_filters;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'registration_status' => RegistrationStatus,
  ?'tag_filters' => TagFilterList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->registration_status = $registration_status ?? ;
    $this->tag_filters = $tag_filters ?? ;
  }
}

class ListOnPremisesInstancesOutput {
  public InstanceNameList $instance_names;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_names' => InstanceNameList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_names = $instance_names ?? ;
    $this->next_token = $next_token ?? ;
  }
}

type ListStateFilterAction = string;

class ListTagsForResourceInput {
  public NextToken $next_token;
  public Arn $resource_arn;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceOutput {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? ;
  }
}

type ListenerArn = string;

type ListenerArnList = vec<ListenerArn>;

class LoadBalancerInfo {
  public ELBInfoList $elb_info_list;
  public TargetGroupInfoList $target_group_info_list;
  public TargetGroupPairInfoList $target_group_pair_info_list;

  public function __construct(shape(
  ?'elb_info_list' => ELBInfoList,
  ?'target_group_info_list' => TargetGroupInfoList,
  ?'target_group_pair_info_list' => TargetGroupPairInfoList,
  ) $s = shape()) {
    $this->elb_info_list = $elb_info_list ?? ;
    $this->target_group_info_list = $target_group_info_list ?? ;
    $this->target_group_pair_info_list = $target_group_pair_info_list ?? ;
  }
}

type LogTail = string;

type Message = string;

class MinimumHealthyHosts {
  public MinimumHealthyHostsType $type;
  public MinimumHealthyHostsValue $value;

  public function __construct(shape(
  ?'type' => MinimumHealthyHostsType,
  ?'value' => MinimumHealthyHostsValue,
  ) $s = shape()) {
    $this->type = $type ?? ;
    $this->value = $value ?? ;
  }
}

type MinimumHealthyHostsType = string;

type MinimumHealthyHostsValue = int;

class MultipleIamArnsProvidedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NextToken = string;

type NullableBoolean = bool;

class OnPremisesTagSet {
  public OnPremisesTagSetList $on_premises_tag_set_list;

  public function __construct(shape(
  ?'on_premises_tag_set_list' => OnPremisesTagSetList,
  ) $s = shape()) {
    $this->on_premises_tag_set_list = $on_premises_tag_set_list ?? ;
  }
}

type OnPremisesTagSetList = vec<TagFilterList>;

class OperationNotSupportedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Percentage = int;

class PutLifecycleEventHookExecutionStatusInput {
  public DeploymentId $deployment_id;
  public LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;
  public LifecycleEventStatus $status;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ?'lifecycle_event_hook_execution_id' => LifecycleEventHookExecutionId,
  ?'status' => LifecycleEventStatus,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
    $this->lifecycle_event_hook_execution_id = $lifecycle_event_hook_execution_id ?? ;
    $this->status = $status ?? ;
  }
}

class PutLifecycleEventHookExecutionStatusOutput {
  public LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;

  public function __construct(shape(
  ?'lifecycle_event_hook_execution_id' => LifecycleEventHookExecutionId,
  ) $s = shape()) {
    $this->lifecycle_event_hook_execution_id = $lifecycle_event_hook_execution_id ?? ;
  }
}

class RawString {
  public RawStringContent $content;
  public RawStringSha256 $sha_256;

  public function __construct(shape(
  ?'content' => RawStringContent,
  ?'sha_256' => RawStringSha256,
  ) $s = shape()) {
    $this->content = $content ?? ;
    $this->sha_256 = $sha_256 ?? ;
  }
}

type RawStringContent = string;

type RawStringSha256 = string;

class RegisterApplicationRevisionInput {
  public ApplicationName $application_name;
  public Description $description;
  public RevisionLocation $revision;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'description' => Description,
  ?'revision' => RevisionLocation,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->description = $description ?? ;
    $this->revision = $revision ?? ;
  }
}

class RegisterOnPremisesInstanceInput {
  public IamSessionArn $iam_session_arn;
  public IamUserArn $iam_user_arn;
  public InstanceName $instance_name;

  public function __construct(shape(
  ?'iam_session_arn' => IamSessionArn,
  ?'iam_user_arn' => IamUserArn,
  ?'instance_name' => InstanceName,
  ) $s = shape()) {
    $this->iam_session_arn = $iam_session_arn ?? ;
    $this->iam_user_arn = $iam_user_arn ?? ;
    $this->instance_name = $instance_name ?? ;
  }
}

type RegistrationStatus = string;

class RemoveTagsFromOnPremisesInstancesInput {
  public InstanceNameList $instance_names;
  public TagList $tags;

  public function __construct(shape(
  ?'instance_names' => InstanceNameList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->instance_names = $instance_names ?? ;
    $this->tags = $tags ?? ;
  }
}

type Repository = string;

class ResourceArnRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResourceValidationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RevisionDoesNotExistException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RevisionInfo {
  public GenericRevisionInfo $generic_revision_info;
  public RevisionLocation $revision_location;

  public function __construct(shape(
  ?'generic_revision_info' => GenericRevisionInfo,
  ?'revision_location' => RevisionLocation,
  ) $s = shape()) {
    $this->generic_revision_info = $generic_revision_info ?? ;
    $this->revision_location = $revision_location ?? ;
  }
}

type RevisionInfoList = vec<RevisionInfo>;

class RevisionLocation {
  public AppSpecContent $app_spec_content;
  public GitHubLocation $git_hub_location;
  public RevisionLocationType $revision_type;
  public S3Location $s_3_location;
  public RawString $string;

  public function __construct(shape(
  ?'app_spec_content' => AppSpecContent,
  ?'git_hub_location' => GitHubLocation,
  ?'revision_type' => RevisionLocationType,
  ?'s_3_location' => S3Location,
  ?'string' => RawString,
  ) $s = shape()) {
    $this->app_spec_content = $app_spec_content ?? ;
    $this->git_hub_location = $git_hub_location ?? ;
    $this->revision_type = $revision_type ?? ;
    $this->s_3_location = $s_3_location ?? ;
    $this->string = $string ?? ;
  }
}

type RevisionLocationList = vec<RevisionLocation>;

type RevisionLocationType = string;

class RevisionRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Role = string;

class RoleRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RollbackInfo {
  public DeploymentId $rollback_deployment_id;
  public Description $rollback_message;
  public DeploymentId $rollback_triggering_deployment_id;

  public function __construct(shape(
  ?'rollback_deployment_id' => DeploymentId,
  ?'rollback_message' => Description,
  ?'rollback_triggering_deployment_id' => DeploymentId,
  ) $s = shape()) {
    $this->rollback_deployment_id = $rollback_deployment_id ?? ;
    $this->rollback_message = $rollback_message ?? ;
    $this->rollback_triggering_deployment_id = $rollback_triggering_deployment_id ?? ;
  }
}

type S3Bucket = string;

type S3Key = string;

class S3Location {
  public S3Bucket $bucket;
  public BundleType $bundle_type;
  public ETag $e_tag;
  public S3Key $key;
  public VersionId $version;

  public function __construct(shape(
  ?'bucket' => S3Bucket,
  ?'bundle_type' => BundleType,
  ?'e_tag' => ETag,
  ?'key' => S3Key,
  ?'version' => VersionId,
  ) $s = shape()) {
    $this->bucket = $bucket ?? ;
    $this->bundle_type = $bundle_type ?? ;
    $this->e_tag = $e_tag ?? ;
    $this->key = $key ?? ;
    $this->version = $version ?? ;
  }
}

type ScriptName = string;

class SkipWaitTimeForInstanceTerminationInput {
  public DeploymentId $deployment_id;

  public function __construct(shape(
  ?'deployment_id' => DeploymentId,
  ) $s = shape()) {
    $this->deployment_id = $deployment_id ?? ;
  }
}

type SortOrder = string;

class StopDeploymentInput {
  public NullableBoolean $auto_rollback_enabled;
  public DeploymentId $deployment_id;

  public function __construct(shape(
  ?'auto_rollback_enabled' => NullableBoolean,
  ?'deployment_id' => DeploymentId,
  ) $s = shape()) {
    $this->auto_rollback_enabled = $auto_rollback_enabled ?? ;
    $this->deployment_id = $deployment_id ?? ;
  }
}

class StopDeploymentOutput {
  public StopStatus $status;
  public Message $status_message;

  public function __construct(shape(
  ?'status' => StopStatus,
  ?'status_message' => Message,
  ) $s = shape()) {
    $this->status = $status ?? ;
    $this->status_message = $status_message ?? ;
  }
}

type StopStatus = string;

class Tag {
  public Key $key;
  public Value $value;

  public function __construct(shape(
  ?'key' => Key,
  ?'value' => Value,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

class TagFilter {
  public Key $key;
  public TagFilterType $type;
  public Value $value;

  public function __construct(shape(
  ?'key' => Key,
  ?'type' => TagFilterType,
  ?'value' => Value,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? ;
    $this->value = $value ?? "";
  }
}

type TagFilterList = vec<TagFilter>;

type TagFilterType = string;

type TagKeyList = vec<Key>;

class TagLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagList = vec<Tag>;

class TagRequiredException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TagSetListLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TargetArn = string;

type TargetFilterName = string;

type TargetFilters = dict<TargetFilterName, FilterValueList>;

class TargetGroupInfo {
  public TargetGroupName $name;

  public function __construct(shape(
  ?'name' => TargetGroupName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type TargetGroupInfoList = vec<TargetGroupInfo>;

type TargetGroupName = string;

class TargetGroupPairInfo {
  public TrafficRoute $prod_traffic_route;
  public TargetGroupInfoList $target_groups;
  public TrafficRoute $test_traffic_route;

  public function __construct(shape(
  ?'prod_traffic_route' => TrafficRoute,
  ?'target_groups' => TargetGroupInfoList,
  ?'test_traffic_route' => TrafficRoute,
  ) $s = shape()) {
    $this->prod_traffic_route = $prod_traffic_route ?? ;
    $this->target_groups = $target_groups ?? ;
    $this->test_traffic_route = $test_traffic_route ?? ;
  }
}

type TargetGroupPairInfoList = vec<TargetGroupPairInfo>;

type TargetId = string;

type TargetIdList = vec<TargetId>;

class TargetInstances {
  public AutoScalingGroupNameList $auto_scaling_groups;
  public EC2TagSet $ec_2_tag_set;
  public EC2TagFilterList $tag_filters;

  public function __construct(shape(
  ?'auto_scaling_groups' => AutoScalingGroupNameList,
  ?'ec_2_tag_set' => EC2TagSet,
  ?'tag_filters' => EC2TagFilterList,
  ) $s = shape()) {
    $this->auto_scaling_groups = $auto_scaling_groups ?? ;
    $this->ec_2_tag_set = $ec_2_tag_set ?? ;
    $this->tag_filters = $tag_filters ?? ;
  }
}

type TargetLabel = string;

type TargetStatus = string;

class ThrottlingException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Time = int;

class TimeBasedCanary {
  public WaitTimeInMins $canary_interval;
  public Percentage $canary_percentage;

  public function __construct(shape(
  ?'canary_interval' => WaitTimeInMins,
  ?'canary_percentage' => Percentage,
  ) $s = shape()) {
    $this->canary_interval = $canary_interval ?? ;
    $this->canary_percentage = $canary_percentage ?? ;
  }
}

class TimeBasedLinear {
  public WaitTimeInMins $linear_interval;
  public Percentage $linear_percentage;

  public function __construct(shape(
  ?'linear_interval' => WaitTimeInMins,
  ?'linear_percentage' => Percentage,
  ) $s = shape()) {
    $this->linear_interval = $linear_interval ?? ;
    $this->linear_percentage = $linear_percentage ?? ;
  }
}

class TimeRange {
  public Timestamp $end;
  public Timestamp $start;

  public function __construct(shape(
  ?'end' => Timestamp,
  ?'start' => Timestamp,
  ) $s = shape()) {
    $this->end = $end ?? ;
    $this->start = $start ?? ;
  }
}

type Timestamp = int;

class TrafficRoute {
  public ListenerArnList $listener_arns;

  public function __construct(shape(
  ?'listener_arns' => ListenerArnList,
  ) $s = shape()) {
    $this->listener_arns = $listener_arns ?? ;
  }
}

class TrafficRoutingConfig {
  public TimeBasedCanary $time_based_canary;
  public TimeBasedLinear $time_based_linear;
  public TrafficRoutingType $type;

  public function __construct(shape(
  ?'time_based_canary' => TimeBasedCanary,
  ?'time_based_linear' => TimeBasedLinear,
  ?'type' => TrafficRoutingType,
  ) $s = shape()) {
    $this->time_based_canary = $time_based_canary ?? ;
    $this->time_based_linear = $time_based_linear ?? ;
    $this->type = $type ?? ;
  }
}

type TrafficRoutingType = string;

type TrafficWeight = float;

class TriggerConfig {
  public TriggerEventTypeList $trigger_events;
  public TriggerName $trigger_name;
  public TriggerTargetArn $trigger_target_arn;

  public function __construct(shape(
  ?'trigger_events' => TriggerEventTypeList,
  ?'trigger_name' => TriggerName,
  ?'trigger_target_arn' => TriggerTargetArn,
  ) $s = shape()) {
    $this->trigger_events = $trigger_events ?? ;
    $this->trigger_name = $trigger_name ?? ;
    $this->trigger_target_arn = $trigger_target_arn ?? ;
  }
}

type TriggerConfigList = vec<TriggerConfig>;

type TriggerEventType = string;

type TriggerEventTypeList = vec<TriggerEventType>;

type TriggerName = string;

type TriggerTargetArn = string;

class TriggerTargetsLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnsupportedActionForDeploymentTypeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateApplicationInput {
  public ApplicationName $application_name;
  public ApplicationName $new_application_name;

  public function __construct(shape(
  ?'application_name' => ApplicationName,
  ?'new_application_name' => ApplicationName,
  ) $s = shape()) {
    $this->application_name = $application_name ?? ;
    $this->new_application_name = $new_application_name ?? ;
  }
}

class UpdateDeploymentGroupInput {
  public AlarmConfiguration $alarm_configuration;
  public ApplicationName $application_name;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public AutoScalingGroupNameList $auto_scaling_groups;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public DeploymentGroupName $current_deployment_group_name;
  public DeploymentConfigName $deployment_config_name;
  public DeploymentStyle $deployment_style;
  public EC2TagFilterList $ec_2_tag_filters;
  public EC2TagSet $ec_2_tag_set;
  public ECSServiceList $ecs_services;
  public LoadBalancerInfo $load_balancer_info;
  public DeploymentGroupName $new_deployment_group_name;
  public TagFilterList $on_premises_instance_tag_filters;
  public OnPremisesTagSet $on_premises_tag_set;
  public Role $service_role_arn;
  public TriggerConfigList $trigger_configurations;

  public function __construct(shape(
  ?'alarm_configuration' => AlarmConfiguration,
  ?'application_name' => ApplicationName,
  ?'auto_rollback_configuration' => AutoRollbackConfiguration,
  ?'auto_scaling_groups' => AutoScalingGroupNameList,
  ?'blue_green_deployment_configuration' => BlueGreenDeploymentConfiguration,
  ?'current_deployment_group_name' => DeploymentGroupName,
  ?'deployment_config_name' => DeploymentConfigName,
  ?'deployment_style' => DeploymentStyle,
  ?'ec_2_tag_filters' => EC2TagFilterList,
  ?'ec_2_tag_set' => EC2TagSet,
  ?'ecs_services' => ECSServiceList,
  ?'load_balancer_info' => LoadBalancerInfo,
  ?'new_deployment_group_name' => DeploymentGroupName,
  ?'on_premises_instance_tag_filters' => TagFilterList,
  ?'on_premises_tag_set' => OnPremisesTagSet,
  ?'service_role_arn' => Role,
  ?'trigger_configurations' => TriggerConfigList,
  ) $s = shape()) {
    $this->alarm_configuration = $alarm_configuration ?? ;
    $this->application_name = $application_name ?? ;
    $this->auto_rollback_configuration = $auto_rollback_configuration ?? ;
    $this->auto_scaling_groups = $auto_scaling_groups ?? ;
    $this->blue_green_deployment_configuration = $blue_green_deployment_configuration ?? ;
    $this->current_deployment_group_name = $current_deployment_group_name ?? ;
    $this->deployment_config_name = $deployment_config_name ?? ;
    $this->deployment_style = $deployment_style ?? ;
    $this->ec_2_tag_filters = $ec_2_tag_filters ?? ;
    $this->ec_2_tag_set = $ec_2_tag_set ?? ;
    $this->ecs_services = $ecs_services ?? ;
    $this->load_balancer_info = $load_balancer_info ?? ;
    $this->new_deployment_group_name = $new_deployment_group_name ?? ;
    $this->on_premises_instance_tag_filters = $on_premises_instance_tag_filters ?? ;
    $this->on_premises_tag_set = $on_premises_tag_set ?? ;
    $this->service_role_arn = $service_role_arn ?? ;
    $this->trigger_configurations = $trigger_configurations ?? ;
  }
}

class UpdateDeploymentGroupOutput {
  public AutoScalingGroupList $hooks_not_cleaned_up;

  public function __construct(shape(
  ?'hooks_not_cleaned_up' => AutoScalingGroupList,
  ) $s = shape()) {
    $this->hooks_not_cleaned_up = $hooks_not_cleaned_up ?? ;
  }
}

type Value = string;

type Version = string;

type VersionId = string;

type WaitTimeInMins = int;

