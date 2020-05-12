<?hh // strict
namespace slack\aws\codedeploy;

interface CodeDeploy {
  public function AddTagsToOnPremisesInstances(AddTagsToOnPremisesInstancesInput $in): Awaitable<\Errors\Error>;
  public function BatchGetApplicationRevisions(BatchGetApplicationRevisionsInput $in): Awaitable<\Errors\Result<BatchGetApplicationRevisionsOutput>>;
  public function BatchGetApplications(BatchGetApplicationsInput $in): Awaitable<\Errors\Result<BatchGetApplicationsOutput>>;
  public function BatchGetDeploymentGroups(BatchGetDeploymentGroupsInput $in): Awaitable<\Errors\Result<BatchGetDeploymentGroupsOutput>>;
  public function BatchGetDeploymentInstances(BatchGetDeploymentInstancesInput $in): Awaitable<\Errors\Result<BatchGetDeploymentInstancesOutput>>;
  public function BatchGetDeploymentTargets(BatchGetDeploymentTargetsInput $in): Awaitable<\Errors\Result<BatchGetDeploymentTargetsOutput>>;
  public function BatchGetDeployments(BatchGetDeploymentsInput $in): Awaitable<\Errors\Result<BatchGetDeploymentsOutput>>;
  public function BatchGetOnPremisesInstances(BatchGetOnPremisesInstancesInput $in): Awaitable<\Errors\Result<BatchGetOnPremisesInstancesOutput>>;
  public function ContinueDeployment(ContinueDeploymentInput $in): Awaitable<\Errors\Error>;
  public function CreateApplication(CreateApplicationInput $in): Awaitable<\Errors\Result<CreateApplicationOutput>>;
  public function CreateDeployment(CreateDeploymentInput $in): Awaitable<\Errors\Result<CreateDeploymentOutput>>;
  public function CreateDeploymentConfig(CreateDeploymentConfigInput $in): Awaitable<\Errors\Result<CreateDeploymentConfigOutput>>;
  public function CreateDeploymentGroup(CreateDeploymentGroupInput $in): Awaitable<\Errors\Result<CreateDeploymentGroupOutput>>;
  public function DeleteApplication(DeleteApplicationInput $in): Awaitable<\Errors\Error>;
  public function DeleteDeploymentConfig(DeleteDeploymentConfigInput $in): Awaitable<\Errors\Error>;
  public function DeleteDeploymentGroup(DeleteDeploymentGroupInput $in): Awaitable<\Errors\Result<DeleteDeploymentGroupOutput>>;
  public function DeleteGitHubAccountToken(DeleteGitHubAccountTokenInput $in): Awaitable<\Errors\Result<DeleteGitHubAccountTokenOutput>>;
  public function DeregisterOnPremisesInstance(DeregisterOnPremisesInstanceInput $in): Awaitable<\Errors\Error>;
  public function GetApplication(GetApplicationInput $in): Awaitable<\Errors\Result<GetApplicationOutput>>;
  public function GetApplicationRevision(GetApplicationRevisionInput $in): Awaitable<\Errors\Result<GetApplicationRevisionOutput>>;
  public function GetDeployment(GetDeploymentInput $in): Awaitable<\Errors\Result<GetDeploymentOutput>>;
  public function GetDeploymentConfig(GetDeploymentConfigInput $in): Awaitable<\Errors\Result<GetDeploymentConfigOutput>>;
  public function GetDeploymentGroup(GetDeploymentGroupInput $in): Awaitable<\Errors\Result<GetDeploymentGroupOutput>>;
  public function GetDeploymentInstance(GetDeploymentInstanceInput $in): Awaitable<\Errors\Result<GetDeploymentInstanceOutput>>;
  public function GetDeploymentTarget(GetDeploymentTargetInput $in): Awaitable<\Errors\Result<GetDeploymentTargetOutput>>;
  public function GetOnPremisesInstance(GetOnPremisesInstanceInput $in): Awaitable<\Errors\Result<GetOnPremisesInstanceOutput>>;
  public function ListApplicationRevisions(ListApplicationRevisionsInput $in): Awaitable<\Errors\Result<ListApplicationRevisionsOutput>>;
  public function ListApplications(ListApplicationsInput $in): Awaitable<\Errors\Result<ListApplicationsOutput>>;
  public function ListDeploymentConfigs(ListDeploymentConfigsInput $in): Awaitable<\Errors\Result<ListDeploymentConfigsOutput>>;
  public function ListDeploymentGroups(ListDeploymentGroupsInput $in): Awaitable<\Errors\Result<ListDeploymentGroupsOutput>>;
  public function ListDeploymentInstances(ListDeploymentInstancesInput $in): Awaitable<\Errors\Result<ListDeploymentInstancesOutput>>;
  public function ListDeploymentTargets(ListDeploymentTargetsInput $in): Awaitable<\Errors\Result<ListDeploymentTargetsOutput>>;
  public function ListDeployments(ListDeploymentsInput $in): Awaitable<\Errors\Result<ListDeploymentsOutput>>;
  public function ListGitHubAccountTokenNames(ListGitHubAccountTokenNamesInput $in): Awaitable<\Errors\Result<ListGitHubAccountTokenNamesOutput>>;
  public function ListOnPremisesInstances(ListOnPremisesInstancesInput $in): Awaitable<\Errors\Result<ListOnPremisesInstancesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput $in): Awaitable<\Errors\Result<ListTagsForResourceOutput>>;
  public function PutLifecycleEventHookExecutionStatus(PutLifecycleEventHookExecutionStatusInput $in): Awaitable<\Errors\Result<PutLifecycleEventHookExecutionStatusOutput>>;
  public function RegisterApplicationRevision(RegisterApplicationRevisionInput $in): Awaitable<\Errors\Error>;
  public function RegisterOnPremisesInstance(RegisterOnPremisesInstanceInput $in): Awaitable<\Errors\Error>;
  public function RemoveTagsFromOnPremisesInstances(RemoveTagsFromOnPremisesInstancesInput $in): Awaitable<\Errors\Error>;
  public function SkipWaitTimeForInstanceTermination(SkipWaitTimeForInstanceTerminationInput $in): Awaitable<\Errors\Error>;
  public function StopDeployment(StopDeploymentInput $in): Awaitable<\Errors\Result<StopDeploymentOutput>>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Result<UntagResourceOutput>>;
  public function UpdateApplication(UpdateApplicationInput $in): Awaitable<\Errors\Error>;
  public function UpdateDeploymentGroup(UpdateDeploymentGroupInput $in): Awaitable<\Errors\Result<UpdateDeploymentGroupOutput>>;
}

class AddTagsToOnPremisesInstancesInput {
  public ?InstanceNameList $instance_names;
  public ?TagList $tags;

  public function __construct(shape(
    ?'instance_names' => ?InstanceNameList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->instance_names = $s['instance_names'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

type AdditionalDeploymentStatusInfo = string;

class Alarm {
  public ?AlarmName $name;

  public function __construct(shape(
    ?'name' => ?AlarmName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class AlarmConfiguration {
  public ?AlarmList $alarms;
  public bool $enabled;
  public bool $ignore_poll_alarm_failure;

  public function __construct(shape(
    ?'alarms' => ?AlarmList,
    ?'enabled' => bool,
    ?'ignore_poll_alarm_failure' => bool,
  ) $s = shape()) {
    $this->alarms = $s['alarms'] ?? vec[];
    $this->enabled = $s['enabled'] ?? false;
    $this->ignore_poll_alarm_failure = $s['ignore_poll_alarm_failure'] ?? false;
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
  public ?RawStringContent $content;
  public ?RawStringSha256 $sha_256;

  public function __construct(shape(
    ?'content' => ?RawStringContent,
    ?'sha_256' => ?RawStringSha256,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->sha_256 = $s['sha_256'] ?? '';
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
  public ?ApplicationId $application_id;
  public ?ApplicationName $application_name;
  public ?ComputePlatform $compute_platform;
  public ?Timestamp $create_time;
  public ?GitHubAccountTokenName $git_hub_account_name;
  public bool $linked_to_git_hub;

  public function __construct(shape(
    ?'application_id' => ?ApplicationId,
    ?'application_name' => ?ApplicationName,
    ?'compute_platform' => ?ComputePlatform,
    ?'create_time' => ?Timestamp,
    ?'git_hub_account_name' => ?GitHubAccountTokenName,
    ?'linked_to_git_hub' => bool,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->application_name = $s['application_name'] ?? '';
    $this->compute_platform = $s['compute_platform'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->git_hub_account_name = $s['git_hub_account_name'] ?? '';
    $this->linked_to_git_hub = $s['linked_to_git_hub'] ?? false;
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
  public bool $enabled;
  public ?AutoRollbackEventsList $events;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'events' => ?AutoRollbackEventsList,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->events = $s['events'] ?? vec[];
  }
}

type AutoRollbackEvent = string;

type AutoRollbackEventsList = vec<AutoRollbackEvent>;

class AutoScalingGroup {
  public ?AutoScalingGroupHook $hook;
  public ?AutoScalingGroupName $name;

  public function __construct(shape(
    ?'hook' => ?AutoScalingGroupHook,
    ?'name' => ?AutoScalingGroupName,
  ) $s = shape()) {
    $this->hook = $s['hook'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type AutoScalingGroupHook = string;

type AutoScalingGroupList = vec<AutoScalingGroup>;

type AutoScalingGroupName = string;

type AutoScalingGroupNameList = vec<AutoScalingGroupName>;

class BatchGetApplicationRevisionsInput {
  public ?ApplicationName $application_name;
  public ?RevisionLocationList $revisions;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'revisions' => ?RevisionLocationList,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->revisions = $s['revisions'] ?? vec[];
  }
}

class BatchGetApplicationRevisionsOutput {
  public ?ApplicationName $application_name;
  public ?ErrorMessage $error_message;
  public ?RevisionInfoList $revisions;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'error_message' => ?ErrorMessage,
    ?'revisions' => ?RevisionInfoList,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->revisions = $s['revisions'] ?? vec[];
  }
}

class BatchGetApplicationsInput {
  public ?ApplicationsList $application_names;

  public function __construct(shape(
    ?'application_names' => ?ApplicationsList,
  ) $s = shape()) {
    $this->application_names = $s['application_names'] ?? vec[];
  }
}

class BatchGetApplicationsOutput {
  public ?ApplicationsInfoList $applications_info;

  public function __construct(shape(
    ?'applications_info' => ?ApplicationsInfoList,
  ) $s = shape()) {
    $this->applications_info = $s['applications_info'] ?? vec[];
  }
}

class BatchGetDeploymentGroupsInput {
  public ?ApplicationName $application_name;
  public ?DeploymentGroupsList $deployment_group_names;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'deployment_group_names' => ?DeploymentGroupsList,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->deployment_group_names = $s['deployment_group_names'] ?? vec[];
  }
}

class BatchGetDeploymentGroupsOutput {
  public ?DeploymentGroupInfoList $deployment_groups_info;
  public ?ErrorMessage $error_message;

  public function __construct(shape(
    ?'deployment_groups_info' => ?DeploymentGroupInfoList,
    ?'error_message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->deployment_groups_info = $s['deployment_groups_info'] ?? vec[];
    $this->error_message = $s['error_message'] ?? '';
  }
}

class BatchGetDeploymentInstancesInput {
  public ?DeploymentId $deployment_id;
  public ?InstancesList $instance_ids;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'instance_ids' => ?InstancesList,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class BatchGetDeploymentInstancesOutput {
  public ?ErrorMessage $error_message;
  public ?InstanceSummaryList $instances_summary;

  public function __construct(shape(
    ?'error_message' => ?ErrorMessage,
    ?'instances_summary' => ?InstanceSummaryList,
  ) $s = shape()) {
    $this->error_message = $s['error_message'] ?? '';
    $this->instances_summary = $s['instances_summary'] ?? vec[];
  }
}

class BatchGetDeploymentTargetsInput {
  public ?DeploymentId $deployment_id;
  public ?TargetIdList $target_ids;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'target_ids' => ?TargetIdList,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->target_ids = $s['target_ids'] ?? vec[];
  }
}

class BatchGetDeploymentTargetsOutput {
  public ?DeploymentTargetList $deployment_targets;

  public function __construct(shape(
    ?'deployment_targets' => ?DeploymentTargetList,
  ) $s = shape()) {
    $this->deployment_targets = $s['deployment_targets'] ?? vec[];
  }
}

class BatchGetDeploymentsInput {
  public ?DeploymentsList $deployment_ids;

  public function __construct(shape(
    ?'deployment_ids' => ?DeploymentsList,
  ) $s = shape()) {
    $this->deployment_ids = $s['deployment_ids'] ?? vec[];
  }
}

class BatchGetDeploymentsOutput {
  public ?DeploymentsInfoList $deployments_info;

  public function __construct(shape(
    ?'deployments_info' => ?DeploymentsInfoList,
  ) $s = shape()) {
    $this->deployments_info = $s['deployments_info'] ?? vec[];
  }
}

class BatchGetOnPremisesInstancesInput {
  public ?InstanceNameList $instance_names;

  public function __construct(shape(
    ?'instance_names' => ?InstanceNameList,
  ) $s = shape()) {
    $this->instance_names = $s['instance_names'] ?? vec[];
  }
}

class BatchGetOnPremisesInstancesOutput {
  public ?InstanceInfoList $instance_infos;

  public function __construct(shape(
    ?'instance_infos' => ?InstanceInfoList,
  ) $s = shape()) {
    $this->instance_infos = $s['instance_infos'] ?? vec[];
  }
}

class BatchLimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BlueGreenDeploymentConfiguration {
  public ?DeploymentReadyOption $deployment_ready_option;
  public ?GreenFleetProvisioningOption $green_fleet_provisioning_option;
  public ?BlueInstanceTerminationOption $terminate_blue_instances_on_deployment_success;

  public function __construct(shape(
    ?'deployment_ready_option' => ?DeploymentReadyOption,
    ?'green_fleet_provisioning_option' => ?GreenFleetProvisioningOption,
    ?'terminate_blue_instances_on_deployment_success' => ?BlueInstanceTerminationOption,
  ) $s = shape()) {
    $this->deployment_ready_option = $s['deployment_ready_option'] ?? null;
    $this->green_fleet_provisioning_option = $s['green_fleet_provisioning_option'] ?? null;
    $this->terminate_blue_instances_on_deployment_success = $s['terminate_blue_instances_on_deployment_success'] ?? null;
  }
}

class BlueInstanceTerminationOption {
  public ?InstanceAction $action;
  public ?Duration $termination_wait_time_in_minutes;

  public function __construct(shape(
    ?'action' => ?InstanceAction,
    ?'termination_wait_time_in_minutes' => ?Duration,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->termination_wait_time_in_minutes = $s['termination_wait_time_in_minutes'] ?? 0;
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
  public ?DeploymentId $deployment_id;
  public ?DeploymentWaitType $deployment_wait_type;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'deployment_wait_type' => ?DeploymentWaitType,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_wait_type = $s['deployment_wait_type'] ?? '';
  }
}

class CreateApplicationInput {
  public ?ApplicationName $application_name;
  public ?ComputePlatform $compute_platform;
  public ?TagList $tags;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'compute_platform' => ?ComputePlatform,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->compute_platform = $s['compute_platform'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateApplicationOutput {
  public ?ApplicationId $application_id;

  public function __construct(shape(
    ?'application_id' => ?ApplicationId,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
  }
}

class CreateDeploymentConfigInput {
  public ?ComputePlatform $compute_platform;
  public ?DeploymentConfigName $deployment_config_name;
  public ?MinimumHealthyHosts $minimum_healthy_hosts;
  public ?TrafficRoutingConfig $traffic_routing_config;

  public function __construct(shape(
    ?'compute_platform' => ?ComputePlatform,
    ?'deployment_config_name' => ?DeploymentConfigName,
    ?'minimum_healthy_hosts' => ?MinimumHealthyHosts,
    ?'traffic_routing_config' => ?TrafficRoutingConfig,
  ) $s = shape()) {
    $this->compute_platform = $s['compute_platform'] ?? '';
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
    $this->minimum_healthy_hosts = $s['minimum_healthy_hosts'] ?? null;
    $this->traffic_routing_config = $s['traffic_routing_config'] ?? null;
  }
}

class CreateDeploymentConfigOutput {
  public ?DeploymentConfigId $deployment_config_id;

  public function __construct(shape(
    ?'deployment_config_id' => ?DeploymentConfigId,
  ) $s = shape()) {
    $this->deployment_config_id = $s['deployment_config_id'] ?? '';
  }
}

class CreateDeploymentGroupInput {
  public ?AlarmConfiguration $alarm_configuration;
  public ?ApplicationName $application_name;
  public ?AutoRollbackConfiguration $auto_rollback_configuration;
  public ?AutoScalingGroupNameList $auto_scaling_groups;
  public ?BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public ?DeploymentConfigName $deployment_config_name;
  public ?DeploymentGroupName $deployment_group_name;
  public ?DeploymentStyle $deployment_style;
  public ?EC2TagFilterList $ec_2_tag_filters;
  public ?EC2TagSet $ec_2_tag_set;
  public ?ECSServiceList $ecs_services;
  public ?LoadBalancerInfo $load_balancer_info;
  public ?TagFilterList $on_premises_instance_tag_filters;
  public ?OnPremisesTagSet $on_premises_tag_set;
  public ?Role $service_role_arn;
  public ?TagList $tags;
  public ?TriggerConfigList $trigger_configurations;

  public function __construct(shape(
    ?'alarm_configuration' => ?AlarmConfiguration,
    ?'application_name' => ?ApplicationName,
    ?'auto_rollback_configuration' => ?AutoRollbackConfiguration,
    ?'auto_scaling_groups' => ?AutoScalingGroupNameList,
    ?'blue_green_deployment_configuration' => ?BlueGreenDeploymentConfiguration,
    ?'deployment_config_name' => ?DeploymentConfigName,
    ?'deployment_group_name' => ?DeploymentGroupName,
    ?'deployment_style' => ?DeploymentStyle,
    ?'ec_2_tag_filters' => ?EC2TagFilterList,
    ?'ec_2_tag_set' => ?EC2TagSet,
    ?'ecs_services' => ?ECSServiceList,
    ?'load_balancer_info' => ?LoadBalancerInfo,
    ?'on_premises_instance_tag_filters' => ?TagFilterList,
    ?'on_premises_tag_set' => ?OnPremisesTagSet,
    ?'service_role_arn' => ?Role,
    ?'tags' => ?TagList,
    ?'trigger_configurations' => ?TriggerConfigList,
  ) $s = shape()) {
    $this->alarm_configuration = $s['alarm_configuration'] ?? null;
    $this->application_name = $s['application_name'] ?? '';
    $this->auto_rollback_configuration = $s['auto_rollback_configuration'] ?? null;
    $this->auto_scaling_groups = $s['auto_scaling_groups'] ?? vec[];
    $this->blue_green_deployment_configuration = $s['blue_green_deployment_configuration'] ?? null;
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
    $this->deployment_group_name = $s['deployment_group_name'] ?? '';
    $this->deployment_style = $s['deployment_style'] ?? null;
    $this->ec_2_tag_filters = $s['ec_2_tag_filters'] ?? vec[];
    $this->ec_2_tag_set = $s['ec_2_tag_set'] ?? null;
    $this->ecs_services = $s['ecs_services'] ?? vec[];
    $this->load_balancer_info = $s['load_balancer_info'] ?? null;
    $this->on_premises_instance_tag_filters = $s['on_premises_instance_tag_filters'] ?? vec[];
    $this->on_premises_tag_set = $s['on_premises_tag_set'] ?? null;
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->trigger_configurations = $s['trigger_configurations'] ?? vec[];
  }
}

class CreateDeploymentGroupOutput {
  public ?DeploymentGroupId $deployment_group_id;

  public function __construct(shape(
    ?'deployment_group_id' => ?DeploymentGroupId,
  ) $s = shape()) {
    $this->deployment_group_id = $s['deployment_group_id'] ?? '';
  }
}

class CreateDeploymentInput {
  public ?ApplicationName $application_name;
  public ?AutoRollbackConfiguration $auto_rollback_configuration;
  public ?DeploymentConfigName $deployment_config_name;
  public ?DeploymentGroupName $deployment_group_name;
  public ?Description $description;
  public ?FileExistsBehavior $file_exists_behavior;
  public bool $ignore_application_stop_failures;
  public ?RevisionLocation $revision;
  public ?TargetInstances $target_instances;
  public bool $update_outdated_instances_only;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'auto_rollback_configuration' => ?AutoRollbackConfiguration,
    ?'deployment_config_name' => ?DeploymentConfigName,
    ?'deployment_group_name' => ?DeploymentGroupName,
    ?'description' => ?Description,
    ?'file_exists_behavior' => ?FileExistsBehavior,
    ?'ignore_application_stop_failures' => bool,
    ?'revision' => ?RevisionLocation,
    ?'target_instances' => ?TargetInstances,
    ?'update_outdated_instances_only' => bool,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->auto_rollback_configuration = $s['auto_rollback_configuration'] ?? null;
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
    $this->deployment_group_name = $s['deployment_group_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->file_exists_behavior = $s['file_exists_behavior'] ?? '';
    $this->ignore_application_stop_failures = $s['ignore_application_stop_failures'] ?? false;
    $this->revision = $s['revision'] ?? null;
    $this->target_instances = $s['target_instances'] ?? null;
    $this->update_outdated_instances_only = $s['update_outdated_instances_only'] ?? false;
  }
}

class CreateDeploymentOutput {
  public ?DeploymentId $deployment_id;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class DeleteApplicationInput {
  public ?ApplicationName $application_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
  }
}

class DeleteDeploymentConfigInput {
  public ?DeploymentConfigName $deployment_config_name;

  public function __construct(shape(
    ?'deployment_config_name' => ?DeploymentConfigName,
  ) $s = shape()) {
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
  }
}

class DeleteDeploymentGroupInput {
  public ?ApplicationName $application_name;
  public ?DeploymentGroupName $deployment_group_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'deployment_group_name' => ?DeploymentGroupName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->deployment_group_name = $s['deployment_group_name'] ?? '';
  }
}

class DeleteDeploymentGroupOutput {
  public ?AutoScalingGroupList $hooks_not_cleaned_up;

  public function __construct(shape(
    ?'hooks_not_cleaned_up' => ?AutoScalingGroupList,
  ) $s = shape()) {
    $this->hooks_not_cleaned_up = $s['hooks_not_cleaned_up'] ?? vec[];
  }
}

class DeleteGitHubAccountTokenInput {
  public ?GitHubAccountTokenName $token_name;

  public function __construct(shape(
    ?'token_name' => ?GitHubAccountTokenName,
  ) $s = shape()) {
    $this->token_name = $s['token_name'] ?? '';
  }
}

class DeleteGitHubAccountTokenOutput {
  public ?GitHubAccountTokenName $token_name;

  public function __construct(shape(
    ?'token_name' => ?GitHubAccountTokenName,
  ) $s = shape()) {
    $this->token_name = $s['token_name'] ?? '';
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
  public ?ComputePlatform $compute_platform;
  public ?Timestamp $create_time;
  public ?DeploymentConfigId $deployment_config_id;
  public ?DeploymentConfigName $deployment_config_name;
  public ?MinimumHealthyHosts $minimum_healthy_hosts;
  public ?TrafficRoutingConfig $traffic_routing_config;

  public function __construct(shape(
    ?'compute_platform' => ?ComputePlatform,
    ?'create_time' => ?Timestamp,
    ?'deployment_config_id' => ?DeploymentConfigId,
    ?'deployment_config_name' => ?DeploymentConfigName,
    ?'minimum_healthy_hosts' => ?MinimumHealthyHosts,
    ?'traffic_routing_config' => ?TrafficRoutingConfig,
  ) $s = shape()) {
    $this->compute_platform = $s['compute_platform'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->deployment_config_id = $s['deployment_config_id'] ?? '';
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
    $this->minimum_healthy_hosts = $s['minimum_healthy_hosts'] ?? null;
    $this->traffic_routing_config = $s['traffic_routing_config'] ?? null;
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
  public ?AlarmConfiguration $alarm_configuration;
  public ?ApplicationName $application_name;
  public ?AutoRollbackConfiguration $auto_rollback_configuration;
  public ?AutoScalingGroupList $auto_scaling_groups;
  public ?BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public ?ComputePlatform $compute_platform;
  public ?DeploymentConfigName $deployment_config_name;
  public ?DeploymentGroupId $deployment_group_id;
  public ?DeploymentGroupName $deployment_group_name;
  public ?DeploymentStyle $deployment_style;
  public ?EC2TagFilterList $ec_2_tag_filters;
  public ?EC2TagSet $ec_2_tag_set;
  public ?ECSServiceList $ecs_services;
  public ?LastDeploymentInfo $last_attempted_deployment;
  public ?LastDeploymentInfo $last_successful_deployment;
  public ?LoadBalancerInfo $load_balancer_info;
  public ?TagFilterList $on_premises_instance_tag_filters;
  public ?OnPremisesTagSet $on_premises_tag_set;
  public ?Role $service_role_arn;
  public ?RevisionLocation $target_revision;
  public ?TriggerConfigList $trigger_configurations;

  public function __construct(shape(
    ?'alarm_configuration' => ?AlarmConfiguration,
    ?'application_name' => ?ApplicationName,
    ?'auto_rollback_configuration' => ?AutoRollbackConfiguration,
    ?'auto_scaling_groups' => ?AutoScalingGroupList,
    ?'blue_green_deployment_configuration' => ?BlueGreenDeploymentConfiguration,
    ?'compute_platform' => ?ComputePlatform,
    ?'deployment_config_name' => ?DeploymentConfigName,
    ?'deployment_group_id' => ?DeploymentGroupId,
    ?'deployment_group_name' => ?DeploymentGroupName,
    ?'deployment_style' => ?DeploymentStyle,
    ?'ec_2_tag_filters' => ?EC2TagFilterList,
    ?'ec_2_tag_set' => ?EC2TagSet,
    ?'ecs_services' => ?ECSServiceList,
    ?'last_attempted_deployment' => ?LastDeploymentInfo,
    ?'last_successful_deployment' => ?LastDeploymentInfo,
    ?'load_balancer_info' => ?LoadBalancerInfo,
    ?'on_premises_instance_tag_filters' => ?TagFilterList,
    ?'on_premises_tag_set' => ?OnPremisesTagSet,
    ?'service_role_arn' => ?Role,
    ?'target_revision' => ?RevisionLocation,
    ?'trigger_configurations' => ?TriggerConfigList,
  ) $s = shape()) {
    $this->alarm_configuration = $s['alarm_configuration'] ?? null;
    $this->application_name = $s['application_name'] ?? '';
    $this->auto_rollback_configuration = $s['auto_rollback_configuration'] ?? null;
    $this->auto_scaling_groups = $s['auto_scaling_groups'] ?? vec[];
    $this->blue_green_deployment_configuration = $s['blue_green_deployment_configuration'] ?? null;
    $this->compute_platform = $s['compute_platform'] ?? '';
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
    $this->deployment_group_id = $s['deployment_group_id'] ?? '';
    $this->deployment_group_name = $s['deployment_group_name'] ?? '';
    $this->deployment_style = $s['deployment_style'] ?? null;
    $this->ec_2_tag_filters = $s['ec_2_tag_filters'] ?? vec[];
    $this->ec_2_tag_set = $s['ec_2_tag_set'] ?? null;
    $this->ecs_services = $s['ecs_services'] ?? vec[];
    $this->last_attempted_deployment = $s['last_attempted_deployment'] ?? null;
    $this->last_successful_deployment = $s['last_successful_deployment'] ?? null;
    $this->load_balancer_info = $s['load_balancer_info'] ?? null;
    $this->on_premises_instance_tag_filters = $s['on_premises_instance_tag_filters'] ?? vec[];
    $this->on_premises_tag_set = $s['on_premises_tag_set'] ?? null;
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->target_revision = $s['target_revision'] ?? null;
    $this->trigger_configurations = $s['trigger_configurations'] ?? vec[];
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
  public ?AdditionalDeploymentStatusInfo $additional_deployment_status_info;
  public ?ApplicationName $application_name;
  public ?AutoRollbackConfiguration $auto_rollback_configuration;
  public ?BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public ?Timestamp $complete_time;
  public ?ComputePlatform $compute_platform;
  public ?Timestamp $create_time;
  public ?DeploymentCreator $creator;
  public ?DeploymentConfigName $deployment_config_name;
  public ?DeploymentGroupName $deployment_group_name;
  public ?DeploymentId $deployment_id;
  public ?DeploymentOverview $deployment_overview;
  public ?DeploymentStatusMessageList $deployment_status_messages;
  public ?DeploymentStyle $deployment_style;
  public ?Description $description;
  public ?ErrorInformation $error_information;
  public ?FileExistsBehavior $file_exists_behavior;
  public bool $ignore_application_stop_failures;
  public bool $instance_termination_wait_time_started;
  public ?LoadBalancerInfo $load_balancer_info;
  public ?RevisionLocation $previous_revision;
  public ?RevisionLocation $revision;
  public ?RollbackInfo $rollback_info;
  public ?Timestamp $start_time;
  public ?DeploymentStatus $status;
  public ?TargetInstances $target_instances;
  public bool $update_outdated_instances_only;

  public function __construct(shape(
    ?'additional_deployment_status_info' => ?AdditionalDeploymentStatusInfo,
    ?'application_name' => ?ApplicationName,
    ?'auto_rollback_configuration' => ?AutoRollbackConfiguration,
    ?'blue_green_deployment_configuration' => ?BlueGreenDeploymentConfiguration,
    ?'complete_time' => ?Timestamp,
    ?'compute_platform' => ?ComputePlatform,
    ?'create_time' => ?Timestamp,
    ?'creator' => ?DeploymentCreator,
    ?'deployment_config_name' => ?DeploymentConfigName,
    ?'deployment_group_name' => ?DeploymentGroupName,
    ?'deployment_id' => ?DeploymentId,
    ?'deployment_overview' => ?DeploymentOverview,
    ?'deployment_status_messages' => ?DeploymentStatusMessageList,
    ?'deployment_style' => ?DeploymentStyle,
    ?'description' => ?Description,
    ?'error_information' => ?ErrorInformation,
    ?'file_exists_behavior' => ?FileExistsBehavior,
    ?'ignore_application_stop_failures' => bool,
    ?'instance_termination_wait_time_started' => bool,
    ?'load_balancer_info' => ?LoadBalancerInfo,
    ?'previous_revision' => ?RevisionLocation,
    ?'revision' => ?RevisionLocation,
    ?'rollback_info' => ?RollbackInfo,
    ?'start_time' => ?Timestamp,
    ?'status' => ?DeploymentStatus,
    ?'target_instances' => ?TargetInstances,
    ?'update_outdated_instances_only' => bool,
  ) $s = shape()) {
    $this->additional_deployment_status_info = $s['additional_deployment_status_info'] ?? '';
    $this->application_name = $s['application_name'] ?? '';
    $this->auto_rollback_configuration = $s['auto_rollback_configuration'] ?? null;
    $this->blue_green_deployment_configuration = $s['blue_green_deployment_configuration'] ?? null;
    $this->complete_time = $s['complete_time'] ?? 0;
    $this->compute_platform = $s['compute_platform'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->creator = $s['creator'] ?? '';
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
    $this->deployment_group_name = $s['deployment_group_name'] ?? '';
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->deployment_overview = $s['deployment_overview'] ?? null;
    $this->deployment_status_messages = $s['deployment_status_messages'] ?? vec[];
    $this->deployment_style = $s['deployment_style'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->error_information = $s['error_information'] ?? null;
    $this->file_exists_behavior = $s['file_exists_behavior'] ?? '';
    $this->ignore_application_stop_failures = $s['ignore_application_stop_failures'] ?? false;
    $this->instance_termination_wait_time_started = $s['instance_termination_wait_time_started'] ?? false;
    $this->load_balancer_info = $s['load_balancer_info'] ?? null;
    $this->previous_revision = $s['previous_revision'] ?? null;
    $this->revision = $s['revision'] ?? null;
    $this->rollback_info = $s['rollback_info'] ?? null;
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->target_instances = $s['target_instances'] ?? null;
    $this->update_outdated_instances_only = $s['update_outdated_instances_only'] ?? false;
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
  public ?InstanceCount $failed;
  public ?InstanceCount $in_progress;
  public ?InstanceCount $pending;
  public ?InstanceCount $ready;
  public ?InstanceCount $skipped;
  public ?InstanceCount $succeeded;

  public function __construct(shape(
    ?'failed' => ?InstanceCount,
    ?'in_progress' => ?InstanceCount,
    ?'pending' => ?InstanceCount,
    ?'ready' => ?InstanceCount,
    ?'skipped' => ?InstanceCount,
    ?'succeeded' => ?InstanceCount,
  ) $s = shape()) {
    $this->failed = $s['failed'] ?? 0;
    $this->in_progress = $s['in_progress'] ?? 0;
    $this->pending = $s['pending'] ?? 0;
    $this->ready = $s['ready'] ?? 0;
    $this->skipped = $s['skipped'] ?? 0;
    $this->succeeded = $s['succeeded'] ?? 0;
  }
}

type DeploymentReadyAction = string;

class DeploymentReadyOption {
  public ?DeploymentReadyAction $action_on_timeout;
  public ?Duration $wait_time_in_minutes;

  public function __construct(shape(
    ?'action_on_timeout' => ?DeploymentReadyAction,
    ?'wait_time_in_minutes' => ?Duration,
  ) $s = shape()) {
    $this->action_on_timeout = $s['action_on_timeout'] ?? '';
    $this->wait_time_in_minutes = $s['wait_time_in_minutes'] ?? 0;
  }
}

type DeploymentStatus = string;

type DeploymentStatusList = vec<DeploymentStatus>;

type DeploymentStatusMessageList = vec<ErrorMessage>;

class DeploymentStyle {
  public ?DeploymentOption $deployment_option;
  public ?DeploymentType $deployment_type;

  public function __construct(shape(
    ?'deployment_option' => ?DeploymentOption,
    ?'deployment_type' => ?DeploymentType,
  ) $s = shape()) {
    $this->deployment_option = $s['deployment_option'] ?? '';
    $this->deployment_type = $s['deployment_type'] ?? '';
  }
}

class DeploymentTarget {
  public ?DeploymentTargetType $deployment_target_type;
  public ?ECSTarget $ecs_target;
  public ?InstanceTarget $instance_target;
  public ?LambdaTarget $lambda_target;

  public function __construct(shape(
    ?'deployment_target_type' => ?DeploymentTargetType,
    ?'ecs_target' => ?ECSTarget,
    ?'instance_target' => ?InstanceTarget,
    ?'lambda_target' => ?LambdaTarget,
  ) $s = shape()) {
    $this->deployment_target_type = $s['deployment_target_type'] ?? '';
    $this->ecs_target = $s['ecs_target'] ?? null;
    $this->instance_target = $s['instance_target'] ?? null;
    $this->lambda_target = $s['lambda_target'] ?? null;
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
  public ?InstanceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?InstanceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

type Description = string;

class DescriptionTooLongException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Diagnostics {
  public ?LifecycleErrorCode $error_code;
  public ?LogTail $log_tail;
  public ?LifecycleMessage $message;
  public ?ScriptName $script_name;

  public function __construct(shape(
    ?'error_code' => ?LifecycleErrorCode,
    ?'log_tail' => ?LogTail,
    ?'message' => ?LifecycleMessage,
    ?'script_name' => ?ScriptName,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->log_tail = $s['log_tail'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->script_name = $s['script_name'] ?? '';
  }
}

type Duration = int;

class EC2TagFilter {
  public ?Key $key;
  public ?EC2TagFilterType $type;
  public ?Value $value;

  public function __construct(shape(
    ?'key' => ?Key,
    ?'type' => ?EC2TagFilterType,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type EC2TagFilterList = vec<EC2TagFilter>;

type EC2TagFilterType = string;

class EC2TagSet {
  public ?EC2TagSetList $ec_2_tag_set_list;

  public function __construct(shape(
    ?'ec_2_tag_set_list' => ?EC2TagSetList,
  ) $s = shape()) {
    $this->ec_2_tag_set_list = $s['ec_2_tag_set_list'] ?? vec[];
  }
}

type EC2TagSetList = vec<EC2TagFilterList>;

type ECSClusterName = string;

class ECSService {
  public ?ECSClusterName $cluster_name;
  public ?ECSServiceName $service_name;

  public function __construct(shape(
    ?'cluster_name' => ?ECSClusterName,
    ?'service_name' => ?ECSServiceName,
  ) $s = shape()) {
    $this->cluster_name = $s['cluster_name'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
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
  public ?DeploymentId $deployment_id;
  public ?Time $last_updated_at;
  public ?LifecycleEventList $lifecycle_events;
  public ?TargetStatus $status;
  public ?TargetArn $target_arn;
  public ?TargetId $target_id;
  public ?ECSTaskSetList $task_sets_info;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'last_updated_at' => ?Time,
    ?'lifecycle_events' => ?LifecycleEventList,
    ?'status' => ?TargetStatus,
    ?'target_arn' => ?TargetArn,
    ?'target_id' => ?TargetId,
    ?'task_sets_info' => ?ECSTaskSetList,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->lifecycle_events = $s['lifecycle_events'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
    $this->task_sets_info = $s['task_sets_info'] ?? vec[];
  }
}

class ECSTaskSet {
  public ?ECSTaskSetCount $desired_count;
  public ?ECSTaskSetIdentifier $identifer;
  public ?ECSTaskSetCount $pending_count;
  public ?ECSTaskSetCount $running_count;
  public ?ECSTaskSetStatus $status;
  public ?TargetGroupInfo $target_group;
  public ?TargetLabel $task_set_label;
  public ?TrafficWeight $traffic_weight;

  public function __construct(shape(
    ?'desired_count' => ?ECSTaskSetCount,
    ?'identifer' => ?ECSTaskSetIdentifier,
    ?'pending_count' => ?ECSTaskSetCount,
    ?'running_count' => ?ECSTaskSetCount,
    ?'status' => ?ECSTaskSetStatus,
    ?'target_group' => ?TargetGroupInfo,
    ?'task_set_label' => ?TargetLabel,
    ?'traffic_weight' => ?TrafficWeight,
  ) $s = shape()) {
    $this->desired_count = $s['desired_count'] ?? 0;
    $this->identifer = $s['identifer'] ?? '';
    $this->pending_count = $s['pending_count'] ?? 0;
    $this->running_count = $s['running_count'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->target_group = $s['target_group'] ?? null;
    $this->task_set_label = $s['task_set_label'] ?? '';
    $this->traffic_weight = $s['traffic_weight'] ?? 0.0;
  }
}

type ECSTaskSetCount = int;

type ECSTaskSetIdentifier = string;

type ECSTaskSetList = vec<ECSTaskSet>;

type ECSTaskSetStatus = string;

class ELBInfo {
  public ?ELBName $name;

  public function __construct(shape(
    ?'name' => ?ELBName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type ELBInfoList = vec<ELBInfo>;

type ELBName = string;

type ETag = string;

type ErrorCode = string;

class ErrorInformation {
  public ?ErrorCode $code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'code' => ?ErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ErrorMessage = string;

type FileExistsBehavior = string;

type FilterValue = string;

type FilterValueList = vec<FilterValue>;

class GenericRevisionInfo {
  public ?DeploymentGroupsList $deployment_groups;
  public ?Description $description;
  public ?Timestamp $first_used_time;
  public ?Timestamp $last_used_time;
  public ?Timestamp $register_time;

  public function __construct(shape(
    ?'deployment_groups' => ?DeploymentGroupsList,
    ?'description' => ?Description,
    ?'first_used_time' => ?Timestamp,
    ?'last_used_time' => ?Timestamp,
    ?'register_time' => ?Timestamp,
  ) $s = shape()) {
    $this->deployment_groups = $s['deployment_groups'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->first_used_time = $s['first_used_time'] ?? 0;
    $this->last_used_time = $s['last_used_time'] ?? 0;
    $this->register_time = $s['register_time'] ?? 0;
  }
}

class GetApplicationInput {
  public ?ApplicationName $application_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
  }
}

class GetApplicationOutput {
  public ?ApplicationInfo $application;

  public function __construct(shape(
    ?'application' => ?ApplicationInfo,
  ) $s = shape()) {
    $this->application = $s['application'] ?? null;
  }
}

class GetApplicationRevisionInput {
  public ?ApplicationName $application_name;
  public ?RevisionLocation $revision;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'revision' => ?RevisionLocation,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->revision = $s['revision'] ?? null;
  }
}

class GetApplicationRevisionOutput {
  public ?ApplicationName $application_name;
  public ?RevisionLocation $revision;
  public ?GenericRevisionInfo $revision_info;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'revision' => ?RevisionLocation,
    ?'revision_info' => ?GenericRevisionInfo,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->revision = $s['revision'] ?? null;
    $this->revision_info = $s['revision_info'] ?? null;
  }
}

class GetDeploymentConfigInput {
  public ?DeploymentConfigName $deployment_config_name;

  public function __construct(shape(
    ?'deployment_config_name' => ?DeploymentConfigName,
  ) $s = shape()) {
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
  }
}

class GetDeploymentConfigOutput {
  public ?DeploymentConfigInfo $deployment_config_info;

  public function __construct(shape(
    ?'deployment_config_info' => ?DeploymentConfigInfo,
  ) $s = shape()) {
    $this->deployment_config_info = $s['deployment_config_info'] ?? null;
  }
}

class GetDeploymentGroupInput {
  public ?ApplicationName $application_name;
  public ?DeploymentGroupName $deployment_group_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'deployment_group_name' => ?DeploymentGroupName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->deployment_group_name = $s['deployment_group_name'] ?? '';
  }
}

class GetDeploymentGroupOutput {
  public ?DeploymentGroupInfo $deployment_group_info;

  public function __construct(shape(
    ?'deployment_group_info' => ?DeploymentGroupInfo,
  ) $s = shape()) {
    $this->deployment_group_info = $s['deployment_group_info'] ?? null;
  }
}

class GetDeploymentInput {
  public ?DeploymentId $deployment_id;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class GetDeploymentInstanceInput {
  public ?DeploymentId $deployment_id;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class GetDeploymentInstanceOutput {
  public ?InstanceSummary $instance_summary;

  public function __construct(shape(
    ?'instance_summary' => ?InstanceSummary,
  ) $s = shape()) {
    $this->instance_summary = $s['instance_summary'] ?? null;
  }
}

class GetDeploymentOutput {
  public ?DeploymentInfo $deployment_info;

  public function __construct(shape(
    ?'deployment_info' => ?DeploymentInfo,
  ) $s = shape()) {
    $this->deployment_info = $s['deployment_info'] ?? null;
  }
}

class GetDeploymentTargetInput {
  public ?DeploymentId $deployment_id;
  public ?TargetId $target_id;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'target_id' => ?TargetId,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

class GetDeploymentTargetOutput {
  public ?DeploymentTarget $deployment_target;

  public function __construct(shape(
    ?'deployment_target' => ?DeploymentTarget,
  ) $s = shape()) {
    $this->deployment_target = $s['deployment_target'] ?? null;
  }
}

class GetOnPremisesInstanceInput {
  public ?InstanceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?InstanceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class GetOnPremisesInstanceOutput {
  public ?InstanceInfo $instance_info;

  public function __construct(shape(
    ?'instance_info' => ?InstanceInfo,
  ) $s = shape()) {
    $this->instance_info = $s['instance_info'] ?? null;
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
  public ?CommitId $commit_id;
  public ?Repository $repository;

  public function __construct(shape(
    ?'commit_id' => ?CommitId,
    ?'repository' => ?Repository,
  ) $s = shape()) {
    $this->commit_id = $s['commit_id'] ?? '';
    $this->repository = $s['repository'] ?? '';
  }
}

type GreenFleetProvisioningAction = string;

class GreenFleetProvisioningOption {
  public ?GreenFleetProvisioningAction $action;

  public function __construct(shape(
    ?'action' => ?GreenFleetProvisioningAction,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
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
  public ?Timestamp $deregister_time;
  public ?IamSessionArn $iam_session_arn;
  public ?IamUserArn $iam_user_arn;
  public ?InstanceArn $instance_arn;
  public ?InstanceName $instance_name;
  public ?Timestamp $register_time;
  public ?TagList $tags;

  public function __construct(shape(
    ?'deregister_time' => ?Timestamp,
    ?'iam_session_arn' => ?IamSessionArn,
    ?'iam_user_arn' => ?IamUserArn,
    ?'instance_arn' => ?InstanceArn,
    ?'instance_name' => ?InstanceName,
    ?'register_time' => ?Timestamp,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->deregister_time = $s['deregister_time'] ?? 0;
    $this->iam_session_arn = $s['iam_session_arn'] ?? '';
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->instance_arn = $s['instance_arn'] ?? '';
    $this->instance_name = $s['instance_name'] ?? '';
    $this->register_time = $s['register_time'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
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
  public ?DeploymentId $deployment_id;
  public ?InstanceId $instance_id;
  public ?InstanceType $instance_type;
  public ?Timestamp $last_updated_at;
  public ?LifecycleEventList $lifecycle_events;
  public ?InstanceStatus $status;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'instance_id' => ?InstanceId,
    ?'instance_type' => ?InstanceType,
    ?'last_updated_at' => ?Timestamp,
    ?'lifecycle_events' => ?LifecycleEventList,
    ?'status' => ?InstanceStatus,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->lifecycle_events = $s['lifecycle_events'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

type InstanceSummaryList = vec<InstanceSummary>;

class InstanceTarget {
  public ?DeploymentId $deployment_id;
  public ?TargetLabel $instance_label;
  public ?Time $last_updated_at;
  public ?LifecycleEventList $lifecycle_events;
  public ?TargetStatus $status;
  public ?TargetArn $target_arn;
  public ?TargetId $target_id;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'instance_label' => ?TargetLabel,
    ?'last_updated_at' => ?Time,
    ?'lifecycle_events' => ?LifecycleEventList,
    ?'status' => ?TargetStatus,
    ?'target_arn' => ?TargetArn,
    ?'target_id' => ?TargetId,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->instance_label = $s['instance_label'] ?? '';
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->lifecycle_events = $s['lifecycle_events'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
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
  public ?Version $current_version;
  public ?LambdaFunctionAlias $function_alias;
  public ?LambdaFunctionName $function_name;
  public ?Version $target_version;
  public ?TrafficWeight $target_version_weight;

  public function __construct(shape(
    ?'current_version' => ?Version,
    ?'function_alias' => ?LambdaFunctionAlias,
    ?'function_name' => ?LambdaFunctionName,
    ?'target_version' => ?Version,
    ?'target_version_weight' => ?TrafficWeight,
  ) $s = shape()) {
    $this->current_version = $s['current_version'] ?? '';
    $this->function_alias = $s['function_alias'] ?? '';
    $this->function_name = $s['function_name'] ?? '';
    $this->target_version = $s['target_version'] ?? '';
    $this->target_version_weight = $s['target_version_weight'] ?? 0.0;
  }
}

type LambdaFunctionName = string;

class LambdaTarget {
  public ?DeploymentId $deployment_id;
  public ?LambdaFunctionInfo $lambda_function_info;
  public ?Time $last_updated_at;
  public ?LifecycleEventList $lifecycle_events;
  public ?TargetStatus $status;
  public ?TargetArn $target_arn;
  public ?TargetId $target_id;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'lambda_function_info' => ?LambdaFunctionInfo,
    ?'last_updated_at' => ?Time,
    ?'lifecycle_events' => ?LifecycleEventList,
    ?'status' => ?TargetStatus,
    ?'target_arn' => ?TargetArn,
    ?'target_id' => ?TargetId,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->lambda_function_info = $s['lambda_function_info'] ?? null;
    $this->last_updated_at = $s['last_updated_at'] ?? 0;
    $this->lifecycle_events = $s['lifecycle_events'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
  }
}

class LastDeploymentInfo {
  public ?Timestamp $create_time;
  public ?DeploymentId $deployment_id;
  public ?Timestamp $end_time;
  public ?DeploymentStatus $status;

  public function __construct(shape(
    ?'create_time' => ?Timestamp,
    ?'deployment_id' => ?DeploymentId,
    ?'end_time' => ?Timestamp,
    ?'status' => ?DeploymentStatus,
  ) $s = shape()) {
    $this->create_time = $s['create_time'] ?? 0;
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->end_time = $s['end_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type LifecycleErrorCode = string;

class LifecycleEvent {
  public ?Diagnostics $diagnostics;
  public ?Timestamp $end_time;
  public ?LifecycleEventName $lifecycle_event_name;
  public ?Timestamp $start_time;
  public ?LifecycleEventStatus $status;

  public function __construct(shape(
    ?'diagnostics' => ?Diagnostics,
    ?'end_time' => ?Timestamp,
    ?'lifecycle_event_name' => ?LifecycleEventName,
    ?'start_time' => ?Timestamp,
    ?'status' => ?LifecycleEventStatus,
  ) $s = shape()) {
    $this->diagnostics = $s['diagnostics'] ?? null;
    $this->end_time = $s['end_time'] ?? 0;
    $this->lifecycle_event_name = $s['lifecycle_event_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
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
  public ?ApplicationName $application_name;
  public ?ListStateFilterAction $deployed;
  public ?NextToken $next_token;
  public ?S3Bucket $s_3_bucket;
  public ?S3Key $s_3_key_prefix;
  public ?ApplicationRevisionSortBy $sort_by;
  public ?SortOrder $sort_order;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'deployed' => ?ListStateFilterAction,
    ?'next_token' => ?NextToken,
    ?'s_3_bucket' => ?S3Bucket,
    ?'s_3_key_prefix' => ?S3Key,
    ?'sort_by' => ?ApplicationRevisionSortBy,
    ?'sort_order' => ?SortOrder,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->deployed = $s['deployed'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key_prefix = $s['s_3_key_prefix'] ?? '';
    $this->sort_by = $s['sort_by'] ?? '';
    $this->sort_order = $s['sort_order'] ?? '';
  }
}

class ListApplicationRevisionsOutput {
  public ?NextToken $next_token;
  public ?RevisionLocationList $revisions;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'revisions' => ?RevisionLocationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->revisions = $s['revisions'] ?? vec[];
  }
}

class ListApplicationsInput {
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListApplicationsOutput {
  public ?ApplicationsList $applications;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'applications' => ?ApplicationsList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->applications = $s['applications'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentConfigsInput {
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentConfigsOutput {
  public ?DeploymentConfigsList $deployment_configs_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'deployment_configs_list' => ?DeploymentConfigsList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->deployment_configs_list = $s['deployment_configs_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentGroupsInput {
  public ?ApplicationName $application_name;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentGroupsOutput {
  public ?ApplicationName $application_name;
  public ?DeploymentGroupsList $deployment_groups;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'deployment_groups' => ?DeploymentGroupsList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->deployment_groups = $s['deployment_groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentInstancesInput {
  public ?DeploymentId $deployment_id;
  public ?InstanceStatusList $instance_status_filter;
  public ?InstanceTypeList $instance_type_filter;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'instance_status_filter' => ?InstanceStatusList,
    ?'instance_type_filter' => ?InstanceTypeList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->instance_status_filter = $s['instance_status_filter'] ?? vec[];
    $this->instance_type_filter = $s['instance_type_filter'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentInstancesOutput {
  public ?InstancesList $instances_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instances_list' => ?InstancesList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instances_list = $s['instances_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentTargetsInput {
  public ?DeploymentId $deployment_id;
  public ?NextToken $next_token;
  public ?TargetFilters $target_filters;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'next_token' => ?NextToken,
    ?'target_filters' => ?TargetFilters,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->target_filters = $s['target_filters'] ?? dict[];
  }
}

class ListDeploymentTargetsOutput {
  public ?NextToken $next_token;
  public ?TargetIdList $target_ids;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'target_ids' => ?TargetIdList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->target_ids = $s['target_ids'] ?? vec[];
  }
}

class ListDeploymentsInput {
  public ?ApplicationName $application_name;
  public ?TimeRange $create_time_range;
  public ?DeploymentGroupName $deployment_group_name;
  public ?DeploymentStatusList $include_only_statuses;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'create_time_range' => ?TimeRange,
    ?'deployment_group_name' => ?DeploymentGroupName,
    ?'include_only_statuses' => ?DeploymentStatusList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->create_time_range = $s['create_time_range'] ?? null;
    $this->deployment_group_name = $s['deployment_group_name'] ?? '';
    $this->include_only_statuses = $s['include_only_statuses'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeploymentsOutput {
  public ?DeploymentsList $deployments;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'deployments' => ?DeploymentsList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->deployments = $s['deployments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGitHubAccountTokenNamesInput {
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGitHubAccountTokenNamesOutput {
  public ?NextToken $next_token;
  public ?GitHubAccountTokenNameList $token_name_list;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'token_name_list' => ?GitHubAccountTokenNameList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->token_name_list = $s['token_name_list'] ?? vec[];
  }
}

class ListOnPremisesInstancesInput {
  public ?NextToken $next_token;
  public ?RegistrationStatus $registration_status;
  public ?TagFilterList $tag_filters;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'registration_status' => ?RegistrationStatus,
    ?'tag_filters' => ?TagFilterList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->registration_status = $s['registration_status'] ?? '';
    $this->tag_filters = $s['tag_filters'] ?? vec[];
  }
}

class ListOnPremisesInstancesOutput {
  public ?InstanceNameList $instance_names;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_names' => ?InstanceNameList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_names = $s['instance_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListStateFilterAction = string;

class ListTagsForResourceInput {
  public ?NextToken $next_token;
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceOutput {
  public ?NextToken $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ListenerArn = string;

type ListenerArnList = vec<ListenerArn>;

class LoadBalancerInfo {
  public ?ELBInfoList $elb_info_list;
  public ?TargetGroupInfoList $target_group_info_list;
  public ?TargetGroupPairInfoList $target_group_pair_info_list;

  public function __construct(shape(
    ?'elb_info_list' => ?ELBInfoList,
    ?'target_group_info_list' => ?TargetGroupInfoList,
    ?'target_group_pair_info_list' => ?TargetGroupPairInfoList,
  ) $s = shape()) {
    $this->elb_info_list = $s['elb_info_list'] ?? vec[];
    $this->target_group_info_list = $s['target_group_info_list'] ?? vec[];
    $this->target_group_pair_info_list = $s['target_group_pair_info_list'] ?? vec[];
  }
}

type LogTail = string;

type Message = string;

class MinimumHealthyHosts {
  public ?MinimumHealthyHostsType $type;
  public ?MinimumHealthyHostsValue $value;

  public function __construct(shape(
    ?'type' => ?MinimumHealthyHostsType,
    ?'value' => ?MinimumHealthyHostsValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? 0;
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
  public ?OnPremisesTagSetList $on_premises_tag_set_list;

  public function __construct(shape(
    ?'on_premises_tag_set_list' => ?OnPremisesTagSetList,
  ) $s = shape()) {
    $this->on_premises_tag_set_list = $s['on_premises_tag_set_list'] ?? vec[];
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
  public ?DeploymentId $deployment_id;
  public ?LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;
  public ?LifecycleEventStatus $status;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
    ?'lifecycle_event_hook_execution_id' => ?LifecycleEventHookExecutionId,
    ?'status' => ?LifecycleEventStatus,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
    $this->lifecycle_event_hook_execution_id = $s['lifecycle_event_hook_execution_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class PutLifecycleEventHookExecutionStatusOutput {
  public ?LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;

  public function __construct(shape(
    ?'lifecycle_event_hook_execution_id' => ?LifecycleEventHookExecutionId,
  ) $s = shape()) {
    $this->lifecycle_event_hook_execution_id = $s['lifecycle_event_hook_execution_id'] ?? '';
  }
}

class RawString {
  public ?RawStringContent $content;
  public ?RawStringSha256 $sha_256;

  public function __construct(shape(
    ?'content' => ?RawStringContent,
    ?'sha_256' => ?RawStringSha256,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->sha_256 = $s['sha_256'] ?? '';
  }
}

type RawStringContent = string;

type RawStringSha256 = string;

class RegisterApplicationRevisionInput {
  public ?ApplicationName $application_name;
  public ?Description $description;
  public ?RevisionLocation $revision;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'description' => ?Description,
    ?'revision' => ?RevisionLocation,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->revision = $s['revision'] ?? null;
  }
}

class RegisterOnPremisesInstanceInput {
  public ?IamSessionArn $iam_session_arn;
  public ?IamUserArn $iam_user_arn;
  public ?InstanceName $instance_name;

  public function __construct(shape(
    ?'iam_session_arn' => ?IamSessionArn,
    ?'iam_user_arn' => ?IamUserArn,
    ?'instance_name' => ?InstanceName,
  ) $s = shape()) {
    $this->iam_session_arn = $s['iam_session_arn'] ?? '';
    $this->iam_user_arn = $s['iam_user_arn'] ?? '';
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

type RegistrationStatus = string;

class RemoveTagsFromOnPremisesInstancesInput {
  public ?InstanceNameList $instance_names;
  public ?TagList $tags;

  public function __construct(shape(
    ?'instance_names' => ?InstanceNameList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->instance_names = $s['instance_names'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
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
  public ?GenericRevisionInfo $generic_revision_info;
  public ?RevisionLocation $revision_location;

  public function __construct(shape(
    ?'generic_revision_info' => ?GenericRevisionInfo,
    ?'revision_location' => ?RevisionLocation,
  ) $s = shape()) {
    $this->generic_revision_info = $s['generic_revision_info'] ?? null;
    $this->revision_location = $s['revision_location'] ?? null;
  }
}

type RevisionInfoList = vec<RevisionInfo>;

class RevisionLocation {
  public ?AppSpecContent $app_spec_content;
  public ?GitHubLocation $git_hub_location;
  public ?RevisionLocationType $revision_type;
  public ?S3Location $s_3_location;
  public ?RawString $string;

  public function __construct(shape(
    ?'app_spec_content' => ?AppSpecContent,
    ?'git_hub_location' => ?GitHubLocation,
    ?'revision_type' => ?RevisionLocationType,
    ?'s_3_location' => ?S3Location,
    ?'string' => ?RawString,
  ) $s = shape()) {
    $this->app_spec_content = $s['app_spec_content'] ?? null;
    $this->git_hub_location = $s['git_hub_location'] ?? null;
    $this->revision_type = $s['revision_type'] ?? '';
    $this->s_3_location = $s['s_3_location'] ?? null;
    $this->string = $s['string'] ?? null;
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
  public ?DeploymentId $rollback_deployment_id;
  public ?Description $rollback_message;
  public ?DeploymentId $rollback_triggering_deployment_id;

  public function __construct(shape(
    ?'rollback_deployment_id' => ?DeploymentId,
    ?'rollback_message' => ?Description,
    ?'rollback_triggering_deployment_id' => ?DeploymentId,
  ) $s = shape()) {
    $this->rollback_deployment_id = $s['rollback_deployment_id'] ?? '';
    $this->rollback_message = $s['rollback_message'] ?? '';
    $this->rollback_triggering_deployment_id = $s['rollback_triggering_deployment_id'] ?? '';
  }
}

type S3Bucket = string;

type S3Key = string;

class S3Location {
  public ?S3Bucket $bucket;
  public ?BundleType $bundle_type;
  public ?ETag $e_tag;
  public ?S3Key $key;
  public ?VersionId $version;

  public function __construct(shape(
    ?'bucket' => ?S3Bucket,
    ?'bundle_type' => ?BundleType,
    ?'e_tag' => ?ETag,
    ?'key' => ?S3Key,
    ?'version' => ?VersionId,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->bundle_type = $s['bundle_type'] ?? '';
    $this->e_tag = $s['e_tag'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type ScriptName = string;

class SkipWaitTimeForInstanceTerminationInput {
  public ?DeploymentId $deployment_id;

  public function __construct(shape(
    ?'deployment_id' => ?DeploymentId,
  ) $s = shape()) {
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

type SortOrder = string;

class StopDeploymentInput {
  public ?NullableBoolean $auto_rollback_enabled;
  public ?DeploymentId $deployment_id;

  public function __construct(shape(
    ?'auto_rollback_enabled' => ?NullableBoolean,
    ?'deployment_id' => ?DeploymentId,
  ) $s = shape()) {
    $this->auto_rollback_enabled = $s['auto_rollback_enabled'] ?? false;
    $this->deployment_id = $s['deployment_id'] ?? '';
  }
}

class StopDeploymentOutput {
  public ?StopStatus $status;
  public ?Message $status_message;

  public function __construct(shape(
    ?'status' => ?StopStatus,
    ?'status_message' => ?Message,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type StopStatus = string;

class Tag {
  public ?Key $key;
  public ?Value $value;

  public function __construct(shape(
    ?'key' => ?Key,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class TagFilter {
  public ?Key $key;
  public ?TagFilterType $type;
  public ?Value $value;

  public function __construct(shape(
    ?'key' => ?Key,
    ?'type' => ?TagFilterType,
    ?'value' => ?Value,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
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
  public ?Arn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?TargetGroupName $name;

  public function __construct(shape(
    ?'name' => ?TargetGroupName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type TargetGroupInfoList = vec<TargetGroupInfo>;

type TargetGroupName = string;

class TargetGroupPairInfo {
  public ?TrafficRoute $prod_traffic_route;
  public ?TargetGroupInfoList $target_groups;
  public ?TrafficRoute $test_traffic_route;

  public function __construct(shape(
    ?'prod_traffic_route' => ?TrafficRoute,
    ?'target_groups' => ?TargetGroupInfoList,
    ?'test_traffic_route' => ?TrafficRoute,
  ) $s = shape()) {
    $this->prod_traffic_route = $s['prod_traffic_route'] ?? null;
    $this->target_groups = $s['target_groups'] ?? vec[];
    $this->test_traffic_route = $s['test_traffic_route'] ?? null;
  }
}

type TargetGroupPairInfoList = vec<TargetGroupPairInfo>;

type TargetId = string;

type TargetIdList = vec<TargetId>;

class TargetInstances {
  public ?AutoScalingGroupNameList $auto_scaling_groups;
  public ?EC2TagSet $ec_2_tag_set;
  public ?EC2TagFilterList $tag_filters;

  public function __construct(shape(
    ?'auto_scaling_groups' => ?AutoScalingGroupNameList,
    ?'ec_2_tag_set' => ?EC2TagSet,
    ?'tag_filters' => ?EC2TagFilterList,
  ) $s = shape()) {
    $this->auto_scaling_groups = $s['auto_scaling_groups'] ?? vec[];
    $this->ec_2_tag_set = $s['ec_2_tag_set'] ?? null;
    $this->tag_filters = $s['tag_filters'] ?? vec[];
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
  public ?WaitTimeInMins $canary_interval;
  public ?Percentage $canary_percentage;

  public function __construct(shape(
    ?'canary_interval' => ?WaitTimeInMins,
    ?'canary_percentage' => ?Percentage,
  ) $s = shape()) {
    $this->canary_interval = $s['canary_interval'] ?? 0;
    $this->canary_percentage = $s['canary_percentage'] ?? 0;
  }
}

class TimeBasedLinear {
  public ?WaitTimeInMins $linear_interval;
  public ?Percentage $linear_percentage;

  public function __construct(shape(
    ?'linear_interval' => ?WaitTimeInMins,
    ?'linear_percentage' => ?Percentage,
  ) $s = shape()) {
    $this->linear_interval = $s['linear_interval'] ?? 0;
    $this->linear_percentage = $s['linear_percentage'] ?? 0;
  }
}

class TimeRange {
  public ?Timestamp $end;
  public ?Timestamp $start;

  public function __construct(shape(
    ?'end' => ?Timestamp,
    ?'start' => ?Timestamp,
  ) $s = shape()) {
    $this->end = $s['end'] ?? 0;
    $this->start = $s['start'] ?? 0;
  }
}

type Timestamp = int;

class TrafficRoute {
  public ?ListenerArnList $listener_arns;

  public function __construct(shape(
    ?'listener_arns' => ?ListenerArnList,
  ) $s = shape()) {
    $this->listener_arns = $s['listener_arns'] ?? vec[];
  }
}

class TrafficRoutingConfig {
  public ?TimeBasedCanary $time_based_canary;
  public ?TimeBasedLinear $time_based_linear;
  public ?TrafficRoutingType $type;

  public function __construct(shape(
    ?'time_based_canary' => ?TimeBasedCanary,
    ?'time_based_linear' => ?TimeBasedLinear,
    ?'type' => ?TrafficRoutingType,
  ) $s = shape()) {
    $this->time_based_canary = $s['time_based_canary'] ?? null;
    $this->time_based_linear = $s['time_based_linear'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

type TrafficRoutingType = string;

type TrafficWeight = float;

class TriggerConfig {
  public ?TriggerEventTypeList $trigger_events;
  public ?TriggerName $trigger_name;
  public ?TriggerTargetArn $trigger_target_arn;

  public function __construct(shape(
    ?'trigger_events' => ?TriggerEventTypeList,
    ?'trigger_name' => ?TriggerName,
    ?'trigger_target_arn' => ?TriggerTargetArn,
  ) $s = shape()) {
    $this->trigger_events = $s['trigger_events'] ?? vec[];
    $this->trigger_name = $s['trigger_name'] ?? '';
    $this->trigger_target_arn = $s['trigger_target_arn'] ?? '';
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

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateApplicationInput {
  public ?ApplicationName $application_name;
  public ?ApplicationName $new_application_name;

  public function __construct(shape(
    ?'application_name' => ?ApplicationName,
    ?'new_application_name' => ?ApplicationName,
  ) $s = shape()) {
    $this->application_name = $s['application_name'] ?? '';
    $this->new_application_name = $s['new_application_name'] ?? '';
  }
}

class UpdateDeploymentGroupInput {
  public ?AlarmConfiguration $alarm_configuration;
  public ?ApplicationName $application_name;
  public ?AutoRollbackConfiguration $auto_rollback_configuration;
  public ?AutoScalingGroupNameList $auto_scaling_groups;
  public ?BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public ?DeploymentGroupName $current_deployment_group_name;
  public ?DeploymentConfigName $deployment_config_name;
  public ?DeploymentStyle $deployment_style;
  public ?EC2TagFilterList $ec_2_tag_filters;
  public ?EC2TagSet $ec_2_tag_set;
  public ?ECSServiceList $ecs_services;
  public ?LoadBalancerInfo $load_balancer_info;
  public ?DeploymentGroupName $new_deployment_group_name;
  public ?TagFilterList $on_premises_instance_tag_filters;
  public ?OnPremisesTagSet $on_premises_tag_set;
  public ?Role $service_role_arn;
  public ?TriggerConfigList $trigger_configurations;

  public function __construct(shape(
    ?'alarm_configuration' => ?AlarmConfiguration,
    ?'application_name' => ?ApplicationName,
    ?'auto_rollback_configuration' => ?AutoRollbackConfiguration,
    ?'auto_scaling_groups' => ?AutoScalingGroupNameList,
    ?'blue_green_deployment_configuration' => ?BlueGreenDeploymentConfiguration,
    ?'current_deployment_group_name' => ?DeploymentGroupName,
    ?'deployment_config_name' => ?DeploymentConfigName,
    ?'deployment_style' => ?DeploymentStyle,
    ?'ec_2_tag_filters' => ?EC2TagFilterList,
    ?'ec_2_tag_set' => ?EC2TagSet,
    ?'ecs_services' => ?ECSServiceList,
    ?'load_balancer_info' => ?LoadBalancerInfo,
    ?'new_deployment_group_name' => ?DeploymentGroupName,
    ?'on_premises_instance_tag_filters' => ?TagFilterList,
    ?'on_premises_tag_set' => ?OnPremisesTagSet,
    ?'service_role_arn' => ?Role,
    ?'trigger_configurations' => ?TriggerConfigList,
  ) $s = shape()) {
    $this->alarm_configuration = $s['alarm_configuration'] ?? null;
    $this->application_name = $s['application_name'] ?? '';
    $this->auto_rollback_configuration = $s['auto_rollback_configuration'] ?? null;
    $this->auto_scaling_groups = $s['auto_scaling_groups'] ?? vec[];
    $this->blue_green_deployment_configuration = $s['blue_green_deployment_configuration'] ?? null;
    $this->current_deployment_group_name = $s['current_deployment_group_name'] ?? '';
    $this->deployment_config_name = $s['deployment_config_name'] ?? '';
    $this->deployment_style = $s['deployment_style'] ?? null;
    $this->ec_2_tag_filters = $s['ec_2_tag_filters'] ?? vec[];
    $this->ec_2_tag_set = $s['ec_2_tag_set'] ?? null;
    $this->ecs_services = $s['ecs_services'] ?? vec[];
    $this->load_balancer_info = $s['load_balancer_info'] ?? null;
    $this->new_deployment_group_name = $s['new_deployment_group_name'] ?? '';
    $this->on_premises_instance_tag_filters = $s['on_premises_instance_tag_filters'] ?? vec[];
    $this->on_premises_tag_set = $s['on_premises_tag_set'] ?? null;
    $this->service_role_arn = $s['service_role_arn'] ?? '';
    $this->trigger_configurations = $s['trigger_configurations'] ?? vec[];
  }
}

class UpdateDeploymentGroupOutput {
  public ?AutoScalingGroupList $hooks_not_cleaned_up;

  public function __construct(shape(
    ?'hooks_not_cleaned_up' => ?AutoScalingGroupList,
  ) $s = shape()) {
    $this->hooks_not_cleaned_up = $s['hooks_not_cleaned_up'] ?? vec[];
  }
}

type Value = string;

type Version = string;

type VersionId = string;

type WaitTimeInMins = int;

