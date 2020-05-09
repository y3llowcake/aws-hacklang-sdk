<?hh // strict
namespace slack\aws\codedeploy;

interface CodeDeploy {
  public function AddTagsToOnPremisesInstances(AddTagsToOnPremisesInstancesInput) Awaitable<Errors\Error>;
  public function BatchGetApplicationRevisions(BatchGetApplicationRevisionsInput) Awaitable<Errors\Result<BatchGetApplicationRevisionsOutput>>;
  public function BatchGetApplications(BatchGetApplicationsInput) Awaitable<Errors\Result<BatchGetApplicationsOutput>>;
  public function BatchGetDeploymentGroups(BatchGetDeploymentGroupsInput) Awaitable<Errors\Result<BatchGetDeploymentGroupsOutput>>;
  public function BatchGetDeploymentInstances(BatchGetDeploymentInstancesInput) Awaitable<Errors\Result<BatchGetDeploymentInstancesOutput>>;
  public function BatchGetDeploymentTargets(BatchGetDeploymentTargetsInput) Awaitable<Errors\Result<BatchGetDeploymentTargetsOutput>>;
  public function BatchGetDeployments(BatchGetDeploymentsInput) Awaitable<Errors\Result<BatchGetDeploymentsOutput>>;
  public function BatchGetOnPremisesInstances(BatchGetOnPremisesInstancesInput) Awaitable<Errors\Result<BatchGetOnPremisesInstancesOutput>>;
  public function ContinueDeployment(ContinueDeploymentInput) Awaitable<Errors\Error>;
  public function CreateApplication(CreateApplicationInput) Awaitable<Errors\Result<CreateApplicationOutput>>;
  public function CreateDeployment(CreateDeploymentInput) Awaitable<Errors\Result<CreateDeploymentOutput>>;
  public function CreateDeploymentConfig(CreateDeploymentConfigInput) Awaitable<Errors\Result<CreateDeploymentConfigOutput>>;
  public function CreateDeploymentGroup(CreateDeploymentGroupInput) Awaitable<Errors\Result<CreateDeploymentGroupOutput>>;
  public function DeleteApplication(DeleteApplicationInput) Awaitable<Errors\Error>;
  public function DeleteDeploymentConfig(DeleteDeploymentConfigInput) Awaitable<Errors\Error>;
  public function DeleteDeploymentGroup(DeleteDeploymentGroupInput) Awaitable<Errors\Result<DeleteDeploymentGroupOutput>>;
  public function DeleteGitHubAccountToken(DeleteGitHubAccountTokenInput) Awaitable<Errors\Result<DeleteGitHubAccountTokenOutput>>;
  public function DeregisterOnPremisesInstance(DeregisterOnPremisesInstanceInput) Awaitable<Errors\Error>;
  public function GetApplication(GetApplicationInput) Awaitable<Errors\Result<GetApplicationOutput>>;
  public function GetApplicationRevision(GetApplicationRevisionInput) Awaitable<Errors\Result<GetApplicationRevisionOutput>>;
  public function GetDeployment(GetDeploymentInput) Awaitable<Errors\Result<GetDeploymentOutput>>;
  public function GetDeploymentConfig(GetDeploymentConfigInput) Awaitable<Errors\Result<GetDeploymentConfigOutput>>;
  public function GetDeploymentGroup(GetDeploymentGroupInput) Awaitable<Errors\Result<GetDeploymentGroupOutput>>;
  public function GetDeploymentInstance(GetDeploymentInstanceInput) Awaitable<Errors\Result<GetDeploymentInstanceOutput>>;
  public function GetDeploymentTarget(GetDeploymentTargetInput) Awaitable<Errors\Result<GetDeploymentTargetOutput>>;
  public function GetOnPremisesInstance(GetOnPremisesInstanceInput) Awaitable<Errors\Result<GetOnPremisesInstanceOutput>>;
  public function ListApplicationRevisions(ListApplicationRevisionsInput) Awaitable<Errors\Result<ListApplicationRevisionsOutput>>;
  public function ListApplications(ListApplicationsInput) Awaitable<Errors\Result<ListApplicationsOutput>>;
  public function ListDeploymentConfigs(ListDeploymentConfigsInput) Awaitable<Errors\Result<ListDeploymentConfigsOutput>>;
  public function ListDeploymentGroups(ListDeploymentGroupsInput) Awaitable<Errors\Result<ListDeploymentGroupsOutput>>;
  public function ListDeploymentInstances(ListDeploymentInstancesInput) Awaitable<Errors\Result<ListDeploymentInstancesOutput>>;
  public function ListDeploymentTargets(ListDeploymentTargetsInput) Awaitable<Errors\Result<ListDeploymentTargetsOutput>>;
  public function ListDeployments(ListDeploymentsInput) Awaitable<Errors\Result<ListDeploymentsOutput>>;
  public function ListGitHubAccountTokenNames(ListGitHubAccountTokenNamesInput) Awaitable<Errors\Result<ListGitHubAccountTokenNamesOutput>>;
  public function ListOnPremisesInstances(ListOnPremisesInstancesInput) Awaitable<Errors\Result<ListOnPremisesInstancesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function PutLifecycleEventHookExecutionStatus(PutLifecycleEventHookExecutionStatusInput) Awaitable<Errors\Result<PutLifecycleEventHookExecutionStatusOutput>>;
  public function RegisterApplicationRevision(RegisterApplicationRevisionInput) Awaitable<Errors\Error>;
  public function RegisterOnPremisesInstance(RegisterOnPremisesInstanceInput) Awaitable<Errors\Error>;
  public function RemoveTagsFromOnPremisesInstances(RemoveTagsFromOnPremisesInstancesInput) Awaitable<Errors\Error>;
  public function SkipWaitTimeForInstanceTermination(SkipWaitTimeForInstanceTerminationInput) Awaitable<Errors\Error>;
  public function StopDeployment(StopDeploymentInput) Awaitable<Errors\Result<StopDeploymentOutput>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdateApplication(UpdateApplicationInput) Awaitable<Errors\Error>;
  public function UpdateDeploymentGroup(UpdateDeploymentGroupInput) Awaitable<Errors\Result<UpdateDeploymentGroupOutput>>;
}

class AddTagsToOnPremisesInstancesInput {
  public InstanceNameList $instance_names;
  public TagList $tags;
}

class AdditionalDeploymentStatusInfo {
}

class Alarm {
  public AlarmName $name;
}

class AlarmConfiguration {
  public AlarmList $alarms;
  public boolean $enabled;
  public boolean $ignore_poll_alarm_failure;
}

class AlarmList {
}

class AlarmName {
}

class AlarmsLimitExceededException {
}

class AppSpecContent {
  public RawStringContent $content;
  public RawStringSha256 $sha_256;
}

class ApplicationAlreadyExistsException {
}

class ApplicationDoesNotExistException {
}

class ApplicationId {
}

class ApplicationInfo {
  public ApplicationId $application_id;
  public ApplicationName $application_name;
  public ComputePlatform $compute_platform;
  public Timestamp $create_time;
  public GitHubAccountTokenName $git_hub_account_name;
  public boolean $linked_to_git_hub;
}

class ApplicationLimitExceededException {
}

class ApplicationName {
}

class ApplicationNameRequiredException {
}

class ApplicationRevisionSortBy {
}

class ApplicationsInfoList {
}

class ApplicationsList {
}

class Arn {
}

class ArnNotSupportedException {
}

class AutoRollbackConfiguration {
  public boolean $enabled;
  public AutoRollbackEventsList $events;
}

class AutoRollbackEvent {
}

class AutoRollbackEventsList {
}

class AutoScalingGroup {
  public AutoScalingGroupHook $hook;
  public AutoScalingGroupName $name;
}

class AutoScalingGroupHook {
}

class AutoScalingGroupList {
}

class AutoScalingGroupName {
}

class AutoScalingGroupNameList {
}

class BatchGetApplicationRevisionsInput {
  public ApplicationName $application_name;
  public RevisionLocationList $revisions;
}

class BatchGetApplicationRevisionsOutput {
  public ApplicationName $application_name;
  public ErrorMessage $error_message;
  public RevisionInfoList $revisions;
}

class BatchGetApplicationsInput {
  public ApplicationsList $application_names;
}

class BatchGetApplicationsOutput {
  public ApplicationsInfoList $applications_info;
}

class BatchGetDeploymentGroupsInput {
  public ApplicationName $application_name;
  public DeploymentGroupsList $deployment_group_names;
}

class BatchGetDeploymentGroupsOutput {
  public DeploymentGroupInfoList $deployment_groups_info;
  public ErrorMessage $error_message;
}

class BatchGetDeploymentInstancesInput {
  public DeploymentId $deployment_id;
  public InstancesList $instance_ids;
}

class BatchGetDeploymentInstancesOutput {
  public ErrorMessage $error_message;
  public InstanceSummaryList $instances_summary;
}

class BatchGetDeploymentTargetsInput {
  public DeploymentId $deployment_id;
  public TargetIdList $target_ids;
}

class BatchGetDeploymentTargetsOutput {
  public DeploymentTargetList $deployment_targets;
}

class BatchGetDeploymentsInput {
  public DeploymentsList $deployment_ids;
}

class BatchGetDeploymentsOutput {
  public DeploymentsInfoList $deployments_info;
}

class BatchGetOnPremisesInstancesInput {
  public InstanceNameList $instance_names;
}

class BatchGetOnPremisesInstancesOutput {
  public InstanceInfoList $instance_infos;
}

class BatchLimitExceededException {
}

class BlueGreenDeploymentConfiguration {
  public DeploymentReadyOption $deployment_ready_option;
  public GreenFleetProvisioningOption $green_fleet_provisioning_option;
  public BlueInstanceTerminationOption $terminate_blue_instances_on_deployment_success;
}

class BlueInstanceTerminationOption {
  public InstanceAction $action;
  public Duration $termination_wait_time_in_minutes;
}

class Boolean {
}

class BucketNameFilterRequiredException {
}

class BundleType {
}

class CommitId {
}

class ComputePlatform {
}

class ContinueDeploymentInput {
  public DeploymentId $deployment_id;
  public DeploymentWaitType $deployment_wait_type;
}

class CreateApplicationInput {
  public ApplicationName $application_name;
  public ComputePlatform $compute_platform;
  public TagList $tags;
}

class CreateApplicationOutput {
  public ApplicationId $application_id;
}

class CreateDeploymentConfigInput {
  public ComputePlatform $compute_platform;
  public DeploymentConfigName $deployment_config_name;
  public MinimumHealthyHosts $minimum_healthy_hosts;
  public TrafficRoutingConfig $traffic_routing_config;
}

class CreateDeploymentConfigOutput {
  public DeploymentConfigId $deployment_config_id;
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
}

class CreateDeploymentGroupOutput {
  public DeploymentGroupId $deployment_group_id;
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
}

class CreateDeploymentOutput {
  public DeploymentId $deployment_id;
}

class DeleteApplicationInput {
  public ApplicationName $application_name;
}

class DeleteDeploymentConfigInput {
  public DeploymentConfigName $deployment_config_name;
}

class DeleteDeploymentGroupInput {
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;
}

class DeleteDeploymentGroupOutput {
  public AutoScalingGroupList $hooks_not_cleaned_up;
}

class DeleteGitHubAccountTokenInput {
  public GitHubAccountTokenName $token_name;
}

class DeleteGitHubAccountTokenOutput {
  public GitHubAccountTokenName $token_name;
}

class DeploymentAlreadyCompletedException {
}

class DeploymentAlreadyStartedException {
}

class DeploymentConfigAlreadyExistsException {
}

class DeploymentConfigDoesNotExistException {
}

class DeploymentConfigId {
}

class DeploymentConfigInUseException {
}

class DeploymentConfigInfo {
  public ComputePlatform $compute_platform;
  public Timestamp $create_time;
  public DeploymentConfigId $deployment_config_id;
  public DeploymentConfigName $deployment_config_name;
  public MinimumHealthyHosts $minimum_healthy_hosts;
  public TrafficRoutingConfig $traffic_routing_config;
}

class DeploymentConfigLimitExceededException {
}

class DeploymentConfigName {
}

class DeploymentConfigNameRequiredException {
}

class DeploymentConfigsList {
}

class DeploymentCreator {
}

class DeploymentDoesNotExistException {
}

class DeploymentGroupAlreadyExistsException {
}

class DeploymentGroupDoesNotExistException {
}

class DeploymentGroupId {
}

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
}

class DeploymentGroupInfoList {
}

class DeploymentGroupLimitExceededException {
}

class DeploymentGroupName {
}

class DeploymentGroupNameRequiredException {
}

class DeploymentGroupsList {
}

class DeploymentId {
}

class DeploymentIdRequiredException {
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
}

class DeploymentIsNotInReadyStateException {
}

class DeploymentLimitExceededException {
}

class DeploymentNotStartedException {
}

class DeploymentOption {
}

class DeploymentOverview {
  public InstanceCount $failed;
  public InstanceCount $in_progress;
  public InstanceCount $pending;
  public InstanceCount $ready;
  public InstanceCount $skipped;
  public InstanceCount $succeeded;
}

class DeploymentReadyAction {
}

class DeploymentReadyOption {
  public DeploymentReadyAction $action_on_timeout;
  public Duration $wait_time_in_minutes;
}

class DeploymentStatus {
}

class DeploymentStatusList {
}

class DeploymentStatusMessageList {
}

class DeploymentStyle {
  public DeploymentOption $deployment_option;
  public DeploymentType $deployment_type;
}

class DeploymentTarget {
  public DeploymentTargetType $deployment_target_type;
  public ECSTarget $ecs_target;
  public InstanceTarget $instance_target;
  public LambdaTarget $lambda_target;
}

class DeploymentTargetDoesNotExistException {
}

class DeploymentTargetIdRequiredException {
}

class DeploymentTargetList {
}

class DeploymentTargetListSizeExceededException {
}

class DeploymentTargetType {
}

class DeploymentType {
}

class DeploymentWaitType {
}

class DeploymentsInfoList {
}

class DeploymentsList {
}

class DeregisterOnPremisesInstanceInput {
  public InstanceName $instance_name;
}

class Description {
}

class DescriptionTooLongException {
}

class Diagnostics {
  public LifecycleErrorCode $error_code;
  public LogTail $log_tail;
  public LifecycleMessage $message;
  public ScriptName $script_name;
}

class Duration {
}

class EC2TagFilter {
  public Key $key;
  public EC2TagFilterType $type;
  public Value $value;
}

class EC2TagFilterList {
}

class EC2TagFilterType {
}

class EC2TagSet {
  public EC2TagSetList $ec_2_tag_set_list;
}

class EC2TagSetList {
}

class ECSClusterName {
}

class ECSService {
  public ECSClusterName $cluster_name;
  public ECSServiceName $service_name;
}

class ECSServiceList {
}

class ECSServiceMappingLimitExceededException {
}

class ECSServiceName {
}

class ECSTarget {
  public DeploymentId $deployment_id;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetStatus $status;
  public TargetArn $target_arn;
  public TargetId $target_id;
  public ECSTaskSetList $task_sets_info;
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
}

class ECSTaskSetCount {
}

class ECSTaskSetIdentifier {
}

class ECSTaskSetList {
}

class ECSTaskSetStatus {
}

class ELBInfo {
  public ELBName $name;
}

class ELBInfoList {
}

class ELBName {
}

class ETag {
}

class ErrorCode {
}

class ErrorInformation {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class ErrorMessage {
}

class FileExistsBehavior {
}

class FilterValue {
}

class FilterValueList {
}

class GenericRevisionInfo {
  public DeploymentGroupsList $deployment_groups;
  public Description $description;
  public Timestamp $first_used_time;
  public Timestamp $last_used_time;
  public Timestamp $register_time;
}

class GetApplicationInput {
  public ApplicationName $application_name;
}

class GetApplicationOutput {
  public ApplicationInfo $application;
}

class GetApplicationRevisionInput {
  public ApplicationName $application_name;
  public RevisionLocation $revision;
}

class GetApplicationRevisionOutput {
  public ApplicationName $application_name;
  public RevisionLocation $revision;
  public GenericRevisionInfo $revision_info;
}

class GetDeploymentConfigInput {
  public DeploymentConfigName $deployment_config_name;
}

class GetDeploymentConfigOutput {
  public DeploymentConfigInfo $deployment_config_info;
}

class GetDeploymentGroupInput {
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;
}

class GetDeploymentGroupOutput {
  public DeploymentGroupInfo $deployment_group_info;
}

class GetDeploymentInput {
  public DeploymentId $deployment_id;
}

class GetDeploymentInstanceInput {
  public DeploymentId $deployment_id;
  public InstanceId $instance_id;
}

class GetDeploymentInstanceOutput {
  public InstanceSummary $instance_summary;
}

class GetDeploymentOutput {
  public DeploymentInfo $deployment_info;
}

class GetDeploymentTargetInput {
  public DeploymentId $deployment_id;
  public TargetId $target_id;
}

class GetDeploymentTargetOutput {
  public DeploymentTarget $deployment_target;
}

class GetOnPremisesInstanceInput {
  public InstanceName $instance_name;
}

class GetOnPremisesInstanceOutput {
  public InstanceInfo $instance_info;
}

class GitHubAccountTokenDoesNotExistException {
}

class GitHubAccountTokenName {
}

class GitHubAccountTokenNameList {
}

class GitHubAccountTokenNameRequiredException {
}

class GitHubLocation {
  public CommitId $commit_id;
  public Repository $repository;
}

class GreenFleetProvisioningAction {
}

class GreenFleetProvisioningOption {
  public GreenFleetProvisioningAction $action;
}

class IamArnRequiredException {
}

class IamSessionArn {
}

class IamSessionArnAlreadyRegisteredException {
}

class IamUserArn {
}

class IamUserArnAlreadyRegisteredException {
}

class IamUserArnRequiredException {
}

class InstanceAction {
}

class InstanceArn {
}

class InstanceCount {
}

class InstanceDoesNotExistException {
}

class InstanceId {
}

class InstanceIdRequiredException {
}

class InstanceInfo {
  public Timestamp $deregister_time;
  public IamSessionArn $iam_session_arn;
  public IamUserArn $iam_user_arn;
  public InstanceArn $instance_arn;
  public InstanceName $instance_name;
  public Timestamp $register_time;
  public TagList $tags;
}

class InstanceInfoList {
}

class InstanceLimitExceededException {
}

class InstanceName {
}

class InstanceNameAlreadyRegisteredException {
}

class InstanceNameList {
}

class InstanceNameRequiredException {
}

class InstanceNotRegisteredException {
}

class InstanceStatus {
}

class InstanceStatusList {
}

class InstanceSummary {
  public DeploymentId $deployment_id;
  public InstanceId $instance_id;
  public InstanceType $instance_type;
  public Timestamp $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public InstanceStatus $status;
}

class InstanceSummaryList {
}

class InstanceTarget {
  public DeploymentId $deployment_id;
  public TargetLabel $instance_label;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetStatus $status;
  public TargetArn $target_arn;
  public TargetId $target_id;
}

class InstanceType {
}

class InstanceTypeList {
}

class InstancesList {
}

class InvalidAlarmConfigException {
}

class InvalidApplicationNameException {
}

class InvalidArnException {
}

class InvalidAutoRollbackConfigException {
}

class InvalidAutoScalingGroupException {
}

class InvalidBlueGreenDeploymentConfigurationException {
}

class InvalidBucketNameFilterException {
}

class InvalidComputePlatformException {
}

class InvalidDeployedStateFilterException {
}

class InvalidDeploymentConfigIdException {
}

class InvalidDeploymentConfigNameException {
}

class InvalidDeploymentGroupNameException {
}

class InvalidDeploymentIdException {
}

class InvalidDeploymentInstanceTypeException {
}

class InvalidDeploymentStatusException {
}

class InvalidDeploymentStyleException {
}

class InvalidDeploymentTargetIdException {
}

class InvalidDeploymentWaitTypeException {
}

class InvalidEC2TagCombinationException {
}

class InvalidEC2TagException {
}

class InvalidECSServiceException {
}

class InvalidFileExistsBehaviorException {
}

class InvalidGitHubAccountTokenException {
}

class InvalidGitHubAccountTokenNameException {
}

class InvalidIamSessionArnException {
}

class InvalidIamUserArnException {
}

class InvalidIgnoreApplicationStopFailuresValueException {
}

class InvalidInputException {
}

class InvalidInstanceIdException {
}

class InvalidInstanceNameException {
}

class InvalidInstanceStatusException {
}

class InvalidInstanceTypeException {
}

class InvalidKeyPrefixFilterException {
}

class InvalidLifecycleEventHookExecutionIdException {
}

class InvalidLifecycleEventHookExecutionStatusException {
}

class InvalidLoadBalancerInfoException {
}

class InvalidMinimumHealthyHostValueException {
}

class InvalidNextTokenException {
}

class InvalidOnPremisesTagCombinationException {
}

class InvalidOperationException {
}

class InvalidRegistrationStatusException {
}

class InvalidRevisionException {
}

class InvalidRoleException {
}

class InvalidSortByException {
}

class InvalidSortOrderException {
}

class InvalidTagException {
}

class InvalidTagFilterException {
}

class InvalidTagsToAddException {
}

class InvalidTargetException {
}

class InvalidTargetFilterNameException {
}

class InvalidTargetGroupPairException {
}

class InvalidTargetInstancesException {
}

class InvalidTimeRangeException {
}

class InvalidTrafficRoutingConfigurationException {
}

class InvalidTriggerConfigException {
}

class InvalidUpdateOutdatedInstancesOnlyValueException {
}

class Key {
}

class LambdaFunctionAlias {
}

class LambdaFunctionInfo {
  public Version $current_version;
  public LambdaFunctionAlias $function_alias;
  public LambdaFunctionName $function_name;
  public Version $target_version;
  public TrafficWeight $target_version_weight;
}

class LambdaFunctionName {
}

class LambdaTarget {
  public DeploymentId $deployment_id;
  public LambdaFunctionInfo $lambda_function_info;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetStatus $status;
  public TargetArn $target_arn;
  public TargetId $target_id;
}

class LastDeploymentInfo {
  public Timestamp $create_time;
  public DeploymentId $deployment_id;
  public Timestamp $end_time;
  public DeploymentStatus $status;
}

class LifecycleErrorCode {
}

class LifecycleEvent {
  public Diagnostics $diagnostics;
  public Timestamp $end_time;
  public LifecycleEventName $lifecycle_event_name;
  public Timestamp $start_time;
  public LifecycleEventStatus $status;
}

class LifecycleEventAlreadyCompletedException {
}

class LifecycleEventHookExecutionId {
}

class LifecycleEventList {
}

class LifecycleEventName {
}

class LifecycleEventStatus {
}

class LifecycleHookLimitExceededException {
}

class LifecycleMessage {
}

class ListApplicationRevisionsInput {
  public ApplicationName $application_name;
  public ListStateFilterAction $deployed;
  public NextToken $next_token;
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key_prefix;
  public ApplicationRevisionSortBy $sort_by;
  public SortOrder $sort_order;
}

class ListApplicationRevisionsOutput {
  public NextToken $next_token;
  public RevisionLocationList $revisions;
}

class ListApplicationsInput {
  public NextToken $next_token;
}

class ListApplicationsOutput {
  public ApplicationsList $applications;
  public NextToken $next_token;
}

class ListDeploymentConfigsInput {
  public NextToken $next_token;
}

class ListDeploymentConfigsOutput {
  public DeploymentConfigsList $deployment_configs_list;
  public NextToken $next_token;
}

class ListDeploymentGroupsInput {
  public ApplicationName $application_name;
  public NextToken $next_token;
}

class ListDeploymentGroupsOutput {
  public ApplicationName $application_name;
  public DeploymentGroupsList $deployment_groups;
  public NextToken $next_token;
}

class ListDeploymentInstancesInput {
  public DeploymentId $deployment_id;
  public InstanceStatusList $instance_status_filter;
  public InstanceTypeList $instance_type_filter;
  public NextToken $next_token;
}

class ListDeploymentInstancesOutput {
  public InstancesList $instances_list;
  public NextToken $next_token;
}

class ListDeploymentTargetsInput {
  public DeploymentId $deployment_id;
  public NextToken $next_token;
  public TargetFilters $target_filters;
}

class ListDeploymentTargetsOutput {
  public NextToken $next_token;
  public TargetIdList $target_ids;
}

class ListDeploymentsInput {
  public ApplicationName $application_name;
  public TimeRange $create_time_range;
  public DeploymentGroupName $deployment_group_name;
  public DeploymentStatusList $include_only_statuses;
  public NextToken $next_token;
}

class ListDeploymentsOutput {
  public DeploymentsList $deployments;
  public NextToken $next_token;
}

class ListGitHubAccountTokenNamesInput {
  public NextToken $next_token;
}

class ListGitHubAccountTokenNamesOutput {
  public NextToken $next_token;
  public GitHubAccountTokenNameList $token_name_list;
}

class ListOnPremisesInstancesInput {
  public NextToken $next_token;
  public RegistrationStatus $registration_status;
  public TagFilterList $tag_filters;
}

class ListOnPremisesInstancesOutput {
  public InstanceNameList $instance_names;
  public NextToken $next_token;
}

class ListStateFilterAction {
}

class ListTagsForResourceInput {
  public NextToken $next_token;
  public Arn $resource_arn;
}

class ListTagsForResourceOutput {
  public NextToken $next_token;
  public TagList $tags;
}

class ListenerArn {
}

class ListenerArnList {
}

class LoadBalancerInfo {
  public ELBInfoList $elb_info_list;
  public TargetGroupInfoList $target_group_info_list;
  public TargetGroupPairInfoList $target_group_pair_info_list;
}

class LogTail {
}

class Message {
}

class MinimumHealthyHosts {
  public MinimumHealthyHostsType $type;
  public MinimumHealthyHostsValue $value;
}

class MinimumHealthyHostsType {
}

class MinimumHealthyHostsValue {
}

class MultipleIamArnsProvidedException {
}

class NextToken {
}

class NullableBoolean {
}

class OnPremisesTagSet {
  public OnPremisesTagSetList $on_premises_tag_set_list;
}

class OnPremisesTagSetList {
}

class OperationNotSupportedException {
}

class Percentage {
}

class PutLifecycleEventHookExecutionStatusInput {
  public DeploymentId $deployment_id;
  public LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;
  public LifecycleEventStatus $status;
}

class PutLifecycleEventHookExecutionStatusOutput {
  public LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;
}

class RawString {
  public RawStringContent $content;
  public RawStringSha256 $sha_256;
}

class RawStringContent {
}

class RawStringSha256 {
}

class RegisterApplicationRevisionInput {
  public ApplicationName $application_name;
  public Description $description;
  public RevisionLocation $revision;
}

class RegisterOnPremisesInstanceInput {
  public IamSessionArn $iam_session_arn;
  public IamUserArn $iam_user_arn;
  public InstanceName $instance_name;
}

class RegistrationStatus {
}

class RemoveTagsFromOnPremisesInstancesInput {
  public InstanceNameList $instance_names;
  public TagList $tags;
}

class Repository {
}

class ResourceArnRequiredException {
}

class ResourceValidationException {
}

class RevisionDoesNotExistException {
}

class RevisionInfo {
  public GenericRevisionInfo $generic_revision_info;
  public RevisionLocation $revision_location;
}

class RevisionInfoList {
}

class RevisionLocation {
  public AppSpecContent $app_spec_content;
  public GitHubLocation $git_hub_location;
  public RevisionLocationType $revision_type;
  public S3Location $s_3_location;
  public RawString $string;
}

class RevisionLocationList {
}

class RevisionLocationType {
}

class RevisionRequiredException {
}

class Role {
}

class RoleRequiredException {
}

class RollbackInfo {
  public DeploymentId $rollback_deployment_id;
  public Description $rollback_message;
  public DeploymentId $rollback_triggering_deployment_id;
}

class S3Bucket {
}

class S3Key {
}

class S3Location {
  public S3Bucket $bucket;
  public BundleType $bundle_type;
  public ETag $e_tag;
  public S3Key $key;
  public VersionId $version;
}

class ScriptName {
}

class SkipWaitTimeForInstanceTerminationInput {
  public DeploymentId $deployment_id;
}

class SortOrder {
}

class StopDeploymentInput {
  public NullableBoolean $auto_rollback_enabled;
  public DeploymentId $deployment_id;
}

class StopDeploymentOutput {
  public StopStatus $status;
  public Message $status_message;
}

class StopStatus {
}

class Tag {
  public Key $key;
  public Value $value;
}

class TagFilter {
  public Key $key;
  public TagFilterType $type;
  public Value $value;
}

class TagFilterList {
}

class TagFilterType {
}

class TagKeyList {
}

class TagLimitExceededException {
}

class TagList {
}

class TagRequiredException {
}

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagSetListLimitExceededException {
}

class TargetArn {
}

class TargetFilterName {
}

class TargetFilters {
}

class TargetGroupInfo {
  public TargetGroupName $name;
}

class TargetGroupInfoList {
}

class TargetGroupName {
}

class TargetGroupPairInfo {
  public TrafficRoute $prod_traffic_route;
  public TargetGroupInfoList $target_groups;
  public TrafficRoute $test_traffic_route;
}

class TargetGroupPairInfoList {
}

class TargetId {
}

class TargetIdList {
}

class TargetInstances {
  public AutoScalingGroupNameList $auto_scaling_groups;
  public EC2TagSet $ec_2_tag_set;
  public EC2TagFilterList $tag_filters;
}

class TargetLabel {
}

class TargetStatus {
}

class ThrottlingException {
}

class Time {
}

class TimeBasedCanary {
  public WaitTimeInMins $canary_interval;
  public Percentage $canary_percentage;
}

class TimeBasedLinear {
  public WaitTimeInMins $linear_interval;
  public Percentage $linear_percentage;
}

class TimeRange {
  public Timestamp $end;
  public Timestamp $start;
}

class Timestamp {
}

class TrafficRoute {
  public ListenerArnList $listener_arns;
}

class TrafficRoutingConfig {
  public TimeBasedCanary $time_based_canary;
  public TimeBasedLinear $time_based_linear;
  public TrafficRoutingType $type;
}

class TrafficRoutingType {
}

class TrafficWeight {
}

class TriggerConfig {
  public TriggerEventTypeList $trigger_events;
  public TriggerName $trigger_name;
  public TriggerTargetArn $trigger_target_arn;
}

class TriggerConfigList {
}

class TriggerEventType {
}

class TriggerEventTypeList {
}

class TriggerName {
}

class TriggerTargetArn {
}

class TriggerTargetsLimitExceededException {
}

class UnsupportedActionForDeploymentTypeException {
}

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceOutput {
}

class UpdateApplicationInput {
  public ApplicationName $application_name;
  public ApplicationName $new_application_name;
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
}

class UpdateDeploymentGroupOutput {
  public AutoScalingGroupList $hooks_not_cleaned_up;
}

class Value {
}

class Version {
}

class VersionId {
}

class WaitTimeInMins {
}

