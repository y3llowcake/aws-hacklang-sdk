<?hh // strict
namespace slack\aws\codedeploy;

interface CodeDeploy {
  public function ListGitHubAccountTokenNames(ListGitHubAccountTokenNamesInput) Awaitable<Errors\Result<ListGitHubAccountTokenNamesOutput>>;
  public function ListOnPremisesInstances(ListOnPremisesInstancesInput) Awaitable<Errors\Result<ListOnPremisesInstancesOutput>>;
  public function UpdateDeploymentGroup(UpdateDeploymentGroupInput) Awaitable<Errors\Result<UpdateDeploymentGroupOutput>>;
  public function BatchGetDeploymentInstances(BatchGetDeploymentInstancesInput) Awaitable<Errors\Result<BatchGetDeploymentInstancesOutput>>;
  public function ListDeploymentConfigs(ListDeploymentConfigsInput) Awaitable<Errors\Result<ListDeploymentConfigsOutput>>;
  public function ListDeployments(ListDeploymentsInput) Awaitable<Errors\Result<ListDeploymentsOutput>>;
  public function DeregisterOnPremisesInstance(DeregisterOnPremisesInstanceInput) Awaitable<Errors\Error>;
  public function GetDeploymentConfig(GetDeploymentConfigInput) Awaitable<Errors\Result<GetDeploymentConfigOutput>>;
  public function ListDeploymentInstances(ListDeploymentInstancesInput) Awaitable<Errors\Result<ListDeploymentInstancesOutput>>;
  public function RegisterApplicationRevision(RegisterApplicationRevisionInput) Awaitable<Errors\Error>;
  public function StopDeployment(StopDeploymentInput) Awaitable<Errors\Result<StopDeploymentOutput>>;
  public function CreateDeployment(CreateDeploymentInput) Awaitable<Errors\Result<CreateDeploymentOutput>>;
  public function DeleteDeploymentGroup(DeleteDeploymentGroupInput) Awaitable<Errors\Result<DeleteDeploymentGroupOutput>>;
  public function DeleteGitHubAccountToken(DeleteGitHubAccountTokenInput) Awaitable<Errors\Result<DeleteGitHubAccountTokenOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceOutput>>;
  public function ListDeploymentTargets(ListDeploymentTargetsInput) Awaitable<Errors\Result<ListDeploymentTargetsOutput>>;
  public function SkipWaitTimeForInstanceTermination(SkipWaitTimeForInstanceTerminationInput) Awaitable<Errors\Error>;
  public function GetDeployment(GetDeploymentInput) Awaitable<Errors\Result<GetDeploymentOutput>>;
  public function GetDeploymentTarget(GetDeploymentTargetInput) Awaitable<Errors\Result<GetDeploymentTargetOutput>>;
  public function GetOnPremisesInstance(GetOnPremisesInstanceInput) Awaitable<Errors\Result<GetOnPremisesInstanceOutput>>;
  public function ListApplications(ListApplicationsInput) Awaitable<Errors\Result<ListApplicationsOutput>>;
  public function ListDeploymentGroups(ListDeploymentGroupsInput) Awaitable<Errors\Result<ListDeploymentGroupsOutput>>;
  public function BatchGetApplications(BatchGetApplicationsInput) Awaitable<Errors\Result<BatchGetApplicationsOutput>>;
  public function BatchGetOnPremisesInstances(BatchGetOnPremisesInstancesInput) Awaitable<Errors\Result<BatchGetOnPremisesInstancesOutput>>;
  public function CreateApplication(CreateApplicationInput) Awaitable<Errors\Result<CreateApplicationOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function RegisterOnPremisesInstance(RegisterOnPremisesInstanceInput) Awaitable<Errors\Error>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceOutput>>;
  public function UpdateApplication(UpdateApplicationInput) Awaitable<Errors\Error>;
  public function BatchGetApplicationRevisions(BatchGetApplicationRevisionsInput) Awaitable<Errors\Result<BatchGetApplicationRevisionsOutput>>;
  public function BatchGetDeployments(BatchGetDeploymentsInput) Awaitable<Errors\Result<BatchGetDeploymentsOutput>>;
  public function DeleteDeploymentConfig(DeleteDeploymentConfigInput) Awaitable<Errors\Error>;
  public function GetApplication(GetApplicationInput) Awaitable<Errors\Result<GetApplicationOutput>>;
  public function GetApplicationRevision(GetApplicationRevisionInput) Awaitable<Errors\Result<GetApplicationRevisionOutput>>;
  public function ListApplicationRevisions(ListApplicationRevisionsInput) Awaitable<Errors\Result<ListApplicationRevisionsOutput>>;
  public function AddTagsToOnPremisesInstances(AddTagsToOnPremisesInstancesInput) Awaitable<Errors\Error>;
  public function BatchGetDeploymentTargets(BatchGetDeploymentTargetsInput) Awaitable<Errors\Result<BatchGetDeploymentTargetsOutput>>;
  public function CreateDeploymentGroup(CreateDeploymentGroupInput) Awaitable<Errors\Result<CreateDeploymentGroupOutput>>;
  public function PutLifecycleEventHookExecutionStatus(PutLifecycleEventHookExecutionStatusInput) Awaitable<Errors\Result<PutLifecycleEventHookExecutionStatusOutput>>;
  public function RemoveTagsFromOnPremisesInstances(RemoveTagsFromOnPremisesInstancesInput) Awaitable<Errors\Error>;
  public function DeleteApplication(DeleteApplicationInput) Awaitable<Errors\Error>;
  public function GetDeploymentGroup(GetDeploymentGroupInput) Awaitable<Errors\Result<GetDeploymentGroupOutput>>;
  public function GetDeploymentInstance(GetDeploymentInstanceInput) Awaitable<Errors\Result<GetDeploymentInstanceOutput>>;
  public function BatchGetDeploymentGroups(BatchGetDeploymentGroupsInput) Awaitable<Errors\Result<BatchGetDeploymentGroupsOutput>>;
  public function ContinueDeployment(ContinueDeploymentInput) Awaitable<Errors\Error>;
  public function CreateDeploymentConfig(CreateDeploymentConfigInput) Awaitable<Errors\Result<CreateDeploymentConfigOutput>>;
}

class ApplicationRevisionSortBy {
}

class DeleteDeploymentConfigInput {
  public DeploymentConfigName $deployment_config_name;
}

class InvalidNextTokenException {
}

class InvalidUpdateOutdatedInstancesOnlyValueException {
}

class ListGitHubAccountTokenNamesOutput {
  public GitHubAccountTokenNameList $token_name_list;
  public NextToken $next_token;
}

class Value {
}

class AutoRollbackEventsList {
}

class CreateDeploymentOutput {
  public DeploymentId $deployment_id;
}

class EC2TagSetList {
}

class InstanceCount {
}

class LifecycleMessage {
}

class ListDeploymentInstancesOutput {
  public InstancesList $instances_list;
  public NextToken $next_token;
}

class GitHubLocation {
  public Repository $repository;
  public CommitId $commit_id;
}

class InstanceTarget {
  public DeploymentId $deployment_id;
  public TargetId $target_id;
  public TargetArn $target_arn;
  public TargetStatus $status;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetLabel $instance_label;
}

class BatchGetApplicationRevisionsOutput {
  public ApplicationName $application_name;
  public ErrorMessage $error_message;
  public RevisionInfoList $revisions;
}

class BlueInstanceTerminationOption {
  public InstanceAction $action;
  public Duration $termination_wait_time_in_minutes;
}

class BucketNameFilterRequiredException {
}

class DeploymentConfigId {
}

class ECSTaskSetIdentifier {
}

class GitHubAccountTokenNameList {
}

class InvalidDeploymentStatusException {
}

class RevisionRequiredException {
}

class TargetGroupName {
}

class AdditionalDeploymentStatusInfo {
}

class Key {
}

class LifecycleEventList {
}

class PutLifecycleEventHookExecutionStatusInput {
  public DeploymentId $deployment_id;
  public LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;
  public LifecycleEventStatus $status;
}

class TrafficRoutingType {
}

class TrafficWeight {
}

class DeploymentGroupLimitExceededException {
}

class DeploymentStyle {
  public DeploymentType $deployment_type;
  public DeploymentOption $deployment_option;
}

class GenericRevisionInfo {
  public Description $description;
  public DeploymentGroupsList $deployment_groups;
  public Timestamp $first_used_time;
  public Timestamp $last_used_time;
  public Timestamp $register_time;
}

class InvalidTimeRangeException {
}

class RoleRequiredException {
}

class ApplicationAlreadyExistsException {
}

class CreateDeploymentGroupOutput {
  public DeploymentGroupId $deployment_group_id;
}

class DeploymentWaitType {
}

class LoadBalancerInfo {
  public ELBInfoList $elb_info_list;
  public TargetGroupInfoList $target_group_info_list;
  public TargetGroupPairInfoList $target_group_pair_info_list;
}

class RevisionLocation {
  public AppSpecContent $app_spec_content;
  public RevisionLocationType $revision_type;
  public S3Location $s_3_location;
  public GitHubLocation $git_hub_location;
  public RawString $string;
}

class TargetFilterName {
}

class DeploymentOverview {
  public InstanceCount $pending;
  public InstanceCount $in_progress;
  public InstanceCount $succeeded;
  public InstanceCount $failed;
  public InstanceCount $skipped;
  public InstanceCount $ready;
}

class DeploymentReadyAction {
}

class Description {
}

class ECSService {
  public ECSServiceName $service_name;
  public ECSClusterName $cluster_name;
}

class VersionId {
}

class BatchGetDeploymentsOutput {
  public DeploymentsInfoList $deployments_info;
}

class CreateDeploymentConfigOutput {
  public DeploymentConfigId $deployment_config_id;
}

class DeploymentNotStartedException {
}

class TargetLabel {
}

class TargetStatus {
}

class GetDeploymentConfigOutput {
  public DeploymentConfigInfo $deployment_config_info;
}

class InvalidKeyPrefixFilterException {
}

class RawString {
  public RawStringContent $content;
  public RawStringSha256 $sha_256;
}

class RegisterApplicationRevisionInput {
  public ApplicationName $application_name;
  public Description $description;
  public RevisionLocation $revision;
}

class TargetFilters {
}

class TargetIdList {
}

class LambdaTarget {
  public TargetArn $target_arn;
  public TargetStatus $status;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public LambdaFunctionInfo $lambda_function_info;
  public DeploymentId $deployment_id;
  public TargetId $target_id;
}

class RollbackInfo {
  public DeploymentId $rollback_triggering_deployment_id;
  public Description $rollback_message;
  public DeploymentId $rollback_deployment_id;
}

class AppSpecContent {
  public RawStringContent $content;
  public RawStringSha256 $sha_256;
}

class AutoScalingGroup {
  public AutoScalingGroupName $name;
  public AutoScalingGroupHook $hook;
}

class DeploymentConfigsList {
}

class EC2TagFilterList {
}

class GreenFleetProvisioningAction {
}

class InvalidDeploymentGroupNameException {
}

class Time {
}

class Timestamp {
}

class DeploymentIdRequiredException {
}

class MinimumHealthyHosts {
  public MinimumHealthyHostsValue $value;
  public MinimumHealthyHostsType $type;
}

class WaitTimeInMins {
}

class InstanceAction {
}

class InstanceLimitExceededException {
}

class InvalidBlueGreenDeploymentConfigurationException {
}

class InvalidSortByException {
}

class TargetId {
}

class AlarmName {
}

class BatchLimitExceededException {
}

class DeploymentConfigDoesNotExistException {
}

class InvalidAlarmConfigException {
}

class InvalidInstanceIdException {
}

class Message {
}

class NextToken {
}

class TagLimitExceededException {
}

class SortOrder {
}

class ApplicationId {
}

class GitHubAccountTokenDoesNotExistException {
}

class InvalidAutoRollbackConfigException {
}

class ListTagsForResourceInput {
  public Arn $resource_arn;
  public NextToken $next_token;
}

class RegisterOnPremisesInstanceInput {
  public InstanceName $instance_name;
  public IamSessionArn $iam_session_arn;
  public IamUserArn $iam_user_arn;
}

class S3Key {
}

class TrafficRoutingConfig {
  public TrafficRoutingType $type;
  public TimeBasedCanary $time_based_canary;
  public TimeBasedLinear $time_based_linear;
}

class BatchGetApplicationRevisionsInput {
  public ApplicationName $application_name;
  public RevisionLocationList $revisions;
}

class DeleteGitHubAccountTokenOutput {
  public GitHubAccountTokenName $token_name;
}

class GitHubAccountTokenNameRequiredException {
}

class InstanceSummaryList {
}

class InstancesList {
}

class MultipleIamArnsProvidedException {
}

class CreateApplicationOutput {
  public ApplicationId $application_id;
}

class LifecycleEventHookExecutionId {
}

class LifecycleHookLimitExceededException {
}

class AddTagsToOnPremisesInstancesInput {
  public TagList $tags;
  public InstanceNameList $instance_names;
}

class EC2TagSet {
  public EC2TagSetList $ec_2_tag_set_list;
}

class Role {
}

class Tag {
  public Key $key;
  public Value $value;
}

class DeleteApplicationInput {
  public ApplicationName $application_name;
}

class InstanceDoesNotExistException {
}

class InvalidBucketNameFilterException {
}

class InvalidEC2TagCombinationException {
}

class ListApplicationRevisionsInput {
  public SortOrder $sort_order;
  public S3Bucket $s_3_bucket;
  public S3Key $s_3_key_prefix;
  public ListStateFilterAction $deployed;
  public NextToken $next_token;
  public ApplicationName $application_name;
  public ApplicationRevisionSortBy $sort_by;
}

class ListDeploymentTargetsInput {
  public NextToken $next_token;
  public TargetFilters $target_filters;
  public DeploymentId $deployment_id;
}

class AutoScalingGroupNameList {
}

class InstanceName {
}

class InstanceStatus {
}

class InvalidInstanceStatusException {
}

class ListOnPremisesInstancesOutput {
  public InstanceNameList $instance_names;
  public NextToken $next_token;
}

class OnPremisesTagSet {
  public OnPremisesTagSetList $on_premises_tag_set_list;
}

class GetApplicationInput {
  public ApplicationName $application_name;
}

class IamSessionArnAlreadyRegisteredException {
}

class LifecycleEvent {
  public LifecycleEventName $lifecycle_event_name;
  public Diagnostics $diagnostics;
  public Timestamp $start_time;
  public Timestamp $end_time;
  public LifecycleEventStatus $status;
}

class TagFilter {
  public Key $key;
  public Value $value;
  public TagFilterType $type;
}

class TargetGroupPairInfoList {
}

class CreateDeploymentInput {
  public DeploymentGroupName $deployment_group_name;
  public RevisionLocation $revision;
  public DeploymentConfigName $deployment_config_name;
  public Description $description;
  public boolean $ignore_application_stop_failures;
  public TargetInstances $target_instances;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public boolean $update_outdated_instances_only;
  public FileExistsBehavior $file_exists_behavior;
  public ApplicationName $application_name;
}

class DeploymentGroupName {
}

class IamUserArnRequiredException {
}

class InvalidInstanceTypeException {
}

class ResourceArnRequiredException {
}

class UpdateDeploymentGroupInput {
  public EC2TagFilterList $ec_2_tag_filters;
  public Role $service_role_arn;
  public DeploymentStyle $deployment_style;
  public DeploymentGroupName $new_deployment_group_name;
  public TagFilterList $on_premises_instance_tag_filters;
  public AlarmConfiguration $alarm_configuration;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public LoadBalancerInfo $load_balancer_info;
  public ECSServiceList $ecs_services;
  public DeploymentGroupName $current_deployment_group_name;
  public AutoScalingGroupNameList $auto_scaling_groups;
  public TriggerConfigList $trigger_configurations;
  public ApplicationName $application_name;
  public DeploymentConfigName $deployment_config_name;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public EC2TagSet $ec_2_tag_set;
  public OnPremisesTagSet $on_premises_tag_set;
}

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class DeploymentConfigLimitExceededException {
}

class DeploymentGroupDoesNotExistException {
}

class InvalidArnException {
}

class MinimumHealthyHostsValue {
}

class RevisionInfo {
  public RevisionLocation $revision_location;
  public GenericRevisionInfo $generic_revision_info;
}

class S3Bucket {
}

class TimeRange {
  public Timestamp $start;
  public Timestamp $end;
}

class ECSTaskSet {
  public ECSTaskSetStatus $status;
  public TrafficWeight $traffic_weight;
  public TargetGroupInfo $target_group;
  public TargetLabel $task_set_label;
  public ECSTaskSetIdentifier $identifer;
  public ECSTaskSetCount $desired_count;
  public ECSTaskSetCount $pending_count;
  public ECSTaskSetCount $running_count;
}

class GreenFleetProvisioningOption {
  public GreenFleetProvisioningAction $action;
}

class InvalidLifecycleEventHookExecutionStatusException {
}

class InvalidTargetGroupPairException {
}

class LifecycleErrorCode {
}

class ListTagsForResourceOutput {
  public TagList $tags;
  public NextToken $next_token;
}

class ListDeploymentInstancesInput {
  public DeploymentId $deployment_id;
  public NextToken $next_token;
  public InstanceStatusList $instance_status_filter;
  public InstanceTypeList $instance_type_filter;
}

class Percentage {
}

class BatchGetDeploymentGroupsOutput {
  public DeploymentGroupInfoList $deployment_groups_info;
  public ErrorMessage $error_message;
}

class BatchGetDeploymentInstancesOutput {
  public InstanceSummaryList $instances_summary;
  public ErrorMessage $error_message;
}

class DeploymentGroupInfoList {
}

class DeploymentInfo {
  public RollbackInfo $rollback_info;
  public DeploymentStyle $deployment_style;
  public DeploymentOverview $deployment_overview;
  public Timestamp $complete_time;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public DeploymentId $deployment_id;
  public TargetInstances $target_instances;
  public AdditionalDeploymentStatusInfo $additional_deployment_status_info;
  public DeploymentStatusMessageList $deployment_status_messages;
  public ComputePlatform $compute_platform;
  public Description $description;
  public DeploymentCreator $creator;
  public ErrorInformation $error_information;
  public DeploymentConfigName $deployment_config_name;
  public RevisionLocation $revision;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public DeploymentStatus $status;
  public boolean $instance_termination_wait_time_started;
  public Timestamp $start_time;
  public boolean $update_outdated_instances_only;
  public LoadBalancerInfo $load_balancer_info;
  public Timestamp $create_time;
  public boolean $ignore_application_stop_failures;
  public RevisionLocation $previous_revision;
  public FileExistsBehavior $file_exists_behavior;
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;
}

class InstanceStatusList {
}

class InvalidFileExistsBehaviorException {
}

class RevisionDoesNotExistException {
}

class TriggerConfig {
  public TriggerName $trigger_name;
  public TriggerTargetArn $trigger_target_arn;
  public TriggerEventTypeList $trigger_events;
}

class AutoScalingGroupName {
}

class DeploymentTargetIdRequiredException {
}

class InvalidTagException {
}

class TriggerEventTypeList {
}

class ArnNotSupportedException {
}

class DeleteDeploymentGroupOutput {
  public AutoScalingGroupList $hooks_not_cleaned_up;
}

class DeploymentTargetDoesNotExistException {
}

class DeploymentTargetList {
}

class InvalidEC2TagException {
}

class TriggerTargetsLimitExceededException {
}

class BatchGetDeploymentTargetsInput {
  public TargetIdList $target_ids;
  public DeploymentId $deployment_id;
}

class DeploymentCreator {
}

class ErrorCode {
}

class InvalidRevisionException {
}

class LifecycleEventStatus {
}

class ListApplicationsOutput {
  public ApplicationsList $applications;
  public NextToken $next_token;
}

class ListDeploymentConfigsOutput {
  public DeploymentConfigsList $deployment_configs_list;
  public NextToken $next_token;
}

class ScriptName {
}

class StopStatus {
}

class DeploymentGroupAlreadyExistsException {
}

class DeploymentTargetType {
}

class ELBInfo {
  public ELBName $name;
}

class InstanceSummary {
  public DeploymentId $deployment_id;
  public InstanceId $instance_id;
  public InstanceStatus $status;
  public Timestamp $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public InstanceType $instance_type;
}

class InvalidDeploymentIdException {
}

class ListDeploymentConfigsInput {
  public NextToken $next_token;
}

class RevisionInfoList {
}

class TagSetListLimitExceededException {
}

class AlarmList {
}

class DeleteDeploymentGroupInput {
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;
}

class DeploymentAlreadyStartedException {
}

class EC2TagFilter {
  public Key $key;
  public Value $value;
  public EC2TagFilterType $type;
}

class ECSTaskSetList {
}

class InvalidDeploymentInstanceTypeException {
}

class InstanceType {
}

class InvalidSortOrderException {
}

class ApplicationDoesNotExistException {
}

class ApplicationName {
}

class CommitId {
}

class CreateDeploymentConfigInput {
  public DeploymentConfigName $deployment_config_name;
  public MinimumHealthyHosts $minimum_healthy_hosts;
  public TrafficRoutingConfig $traffic_routing_config;
  public ComputePlatform $compute_platform;
}

class DeploymentIsNotInReadyStateException {
}

class DeploymentStatusMessageList {
}

class TargetGroupInfoList {
}

class DeploymentId {
}

class ECSClusterName {
}

class InstanceNameList {
}

class InvalidDeploymentStyleException {
}

class InvalidTargetInstancesException {
}

class TargetInstances {
  public EC2TagSet $ec_2_tag_set;
  public EC2TagFilterList $tag_filters;
  public AutoScalingGroupNameList $auto_scaling_groups;
}

class BatchGetDeploymentInstancesInput {
  public InstancesList $instance_ids;
  public DeploymentId $deployment_id;
}

class DeploymentDoesNotExistException {
}

class GetOnPremisesInstanceInput {
  public InstanceName $instance_name;
}

class InvalidComputePlatformException {
}

class StopDeploymentOutput {
  public StopStatus $status;
  public Message $status_message;
}

class TargetGroupPairInfo {
  public TargetGroupInfoList $target_groups;
  public TrafficRoute $prod_traffic_route;
  public TrafficRoute $test_traffic_route;
}

class ListOnPremisesInstancesInput {
  public RegistrationStatus $registration_status;
  public TagFilterList $tag_filters;
  public NextToken $next_token;
}

class TagFilterList {
}

class ApplicationLimitExceededException {
}

class DeploymentConfigName {
}

class Diagnostics {
  public LifecycleErrorCode $error_code;
  public ScriptName $script_name;
  public LifecycleMessage $message;
  public LogTail $log_tail;
}

class InstanceNotRegisteredException {
}

class InvalidRoleException {
}

class ListDeploymentGroupsInput {
  public ApplicationName $application_name;
  public NextToken $next_token;
}

class TagFilterType {
}

class BatchGetApplicationsInput {
  public ApplicationsList $application_names;
}

class DeploymentGroupInfo {
  public ECSServiceList $ecs_services;
  public DeploymentGroupName $deployment_group_name;
  public TriggerConfigList $trigger_configurations;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
  public LastDeploymentInfo $last_attempted_deployment;
  public TagFilterList $on_premises_instance_tag_filters;
  public ComputePlatform $compute_platform;
  public ApplicationName $application_name;
  public RevisionLocation $target_revision;
  public LoadBalancerInfo $load_balancer_info;
  public Role $service_role_arn;
  public AlarmConfiguration $alarm_configuration;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public DeploymentStyle $deployment_style;
  public DeploymentGroupId $deployment_group_id;
  public DeploymentConfigName $deployment_config_name;
  public EC2TagFilterList $ec_2_tag_filters;
  public AutoScalingGroupList $auto_scaling_groups;
  public LastDeploymentInfo $last_successful_deployment;
  public EC2TagSet $ec_2_tag_set;
  public OnPremisesTagSet $on_premises_tag_set;
}

class DeploymentGroupsList {
}

class TagKeyList {
}

class TagRequiredException {
}

class TargetGroupInfo {
  public TargetGroupName $name;
}

class DeploymentAlreadyCompletedException {
}

class ELBInfoList {
}

class ErrorInformation {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class GetDeploymentInstanceOutput {
  public InstanceSummary $instance_summary;
}

class TriggerConfigList {
}

class ECSTarget {
  public TargetArn $target_arn;
  public Time $last_updated_at;
  public LifecycleEventList $lifecycle_events;
  public TargetStatus $status;
  public ECSTaskSetList $task_sets_info;
  public DeploymentId $deployment_id;
  public TargetId $target_id;
}

class RemoveTagsFromOnPremisesInstancesInput {
  public TagList $tags;
  public InstanceNameList $instance_names;
}

class AutoRollbackEvent {
}

class BatchGetDeploymentTargetsOutput {
  public DeploymentTargetList $deployment_targets;
}

class DeploymentLimitExceededException {
}

class DeploymentReadyOption {
  public DeploymentReadyAction $action_on_timeout;
  public Duration $wait_time_in_minutes;
}

class FilterValue {
}

class ListGitHubAccountTokenNamesInput {
  public NextToken $next_token;
}

class InvalidDeployedStateFilterException {
}

class InvalidGitHubAccountTokenNameException {
}

class BatchGetOnPremisesInstancesInput {
  public InstanceNameList $instance_names;
}

class ComputePlatform {
}

class DeploymentConfigAlreadyExistsException {
}

class DeploymentConfigInfo {
  public ComputePlatform $compute_platform;
  public TrafficRoutingConfig $traffic_routing_config;
  public DeploymentConfigId $deployment_config_id;
  public DeploymentConfigName $deployment_config_name;
  public MinimumHealthyHosts $minimum_healthy_hosts;
  public Timestamp $create_time;
}

class InstanceIdRequiredException {
}

class InvalidApplicationNameException {
}

class RawStringContent {
}

class Version {
}

class DeploymentGroupId {
}

class InvalidAutoScalingGroupException {
}

class InvalidIamUserArnException {
}

class ListDeploymentsOutput {
  public DeploymentsList $deployments;
  public NextToken $next_token;
}

class InvalidECSServiceException {
}

class InvalidTrafficRoutingConfigurationException {
}

class ListStateFilterAction {
}

class ThrottlingException {
}

class DeploymentStatus {
}

class EC2TagFilterType {
}

class ETag {
}

class InvalidDeploymentConfigNameException {
}

class SkipWaitTimeForInstanceTerminationInput {
  public DeploymentId $deployment_id;
}

class TriggerTargetArn {
}

class IamUserArn {
}

class DeploymentsInfoList {
}

class Duration {
}

class GetDeploymentInstanceInput {
  public DeploymentId $deployment_id;
  public InstanceId $instance_id;
}

class InstanceArn {
}

class InstanceNameRequiredException {
}

class TagList {
}

class ApplicationsInfoList {
}

class DescriptionTooLongException {
}

class ECSServiceList {
}

class GetOnPremisesInstanceOutput {
  public InstanceInfo $instance_info;
}

class TimeBasedLinear {
  public Percentage $linear_percentage;
  public WaitTimeInMins $linear_interval;
}

class TrafficRoute {
  public ListenerArnList $listener_arns;
}

class DeploymentsList {
}

class GetDeploymentGroupInput {
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;
}

class GetDeploymentInput {
  public DeploymentId $deployment_id;
}

class InvalidIgnoreApplicationStopFailuresValueException {
}

class InvalidTriggerConfigException {
}

class InvalidOnPremisesTagCombinationException {
}

class LambdaFunctionInfo {
  public TrafficWeight $target_version_weight;
  public LambdaFunctionName $function_name;
  public LambdaFunctionAlias $function_alias;
  public Version $current_version;
  public Version $target_version;
}

class BatchGetDeploymentsInput {
  public DeploymentsList $deployment_ids;
}

class BatchGetOnPremisesInstancesOutput {
  public InstanceInfoList $instance_infos;
}

class ContinueDeploymentInput {
  public DeploymentWaitType $deployment_wait_type;
  public DeploymentId $deployment_id;
}

class IamArnRequiredException {
}

class InstanceNameAlreadyRegisteredException {
}

class InvalidMinimumHealthyHostValueException {
}

class ResourceValidationException {
}

class UpdateDeploymentGroupOutput {
  public AutoScalingGroupList $hooks_not_cleaned_up;
}

class ListDeploymentGroupsOutput {
  public NextToken $next_token;
  public ApplicationName $application_name;
  public DeploymentGroupsList $deployment_groups;
}

class NullableBoolean {
}

class AlarmConfiguration {
  public boolean $enabled;
  public boolean $ignore_poll_alarm_failure;
  public AlarmList $alarms;
}

class CreateDeploymentGroupInput {
  public DeploymentStyle $deployment_style;
  public TagList $tags;
  public Role $service_role_arn;
  public TriggerConfigList $trigger_configurations;
  public AutoRollbackConfiguration $auto_rollback_configuration;
  public TagFilterList $on_premises_instance_tag_filters;
  public AutoScalingGroupNameList $auto_scaling_groups;
  public LoadBalancerInfo $load_balancer_info;
  public EC2TagSet $ec_2_tag_set;
  public ECSServiceList $ecs_services;
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;
  public EC2TagFilterList $ec_2_tag_filters;
  public OnPremisesTagSet $on_premises_tag_set;
  public AlarmConfiguration $alarm_configuration;
  public DeploymentConfigName $deployment_config_name;
  public BlueGreenDeploymentConfiguration $blue_green_deployment_configuration;
}

class ErrorMessage {
}

class IamUserArnAlreadyRegisteredException {
}

class ListenerArn {
}

class TimeBasedCanary {
  public Percentage $canary_percentage;
  public WaitTimeInMins $canary_interval;
}

class ApplicationNameRequiredException {
}

class DeploymentConfigNameRequiredException {
}

class FilterValueList {
}

class RegistrationStatus {
}

class RevisionLocationList {
}

class DeploymentOption {
}

class GetDeploymentGroupOutput {
  public DeploymentGroupInfo $deployment_group_info;
}

class InstanceId {
}

class InvalidLifecycleEventHookExecutionIdException {
}

class InvalidTargetException {
}

class S3Location {
  public S3Bucket $bucket;
  public S3Key $key;
  public BundleType $bundle_type;
  public VersionId $version;
  public ETag $e_tag;
}

class AlarmsLimitExceededException {
}

class FileExistsBehavior {
}

class GetDeploymentOutput {
  public DeploymentInfo $deployment_info;
}

class GetDeploymentTargetOutput {
  public DeploymentTarget $deployment_target;
}

class InvalidTagFilterException {
}

class UntagResourceOutput {
}

class GitHubAccountTokenName {
}

class IamSessionArn {
}

class Arn {
}

class BatchGetApplicationsOutput {
  public ApplicationsInfoList $applications_info;
}

class BundleType {
}

class DeleteGitHubAccountTokenInput {
  public GitHubAccountTokenName $token_name;
}

class GetApplicationRevisionInput {
  public ApplicationName $application_name;
  public RevisionLocation $revision;
}

class GetDeploymentConfigInput {
  public DeploymentConfigName $deployment_config_name;
}

class InvalidInstanceNameException {
}

class OnPremisesTagSetList {
}

class DeregisterOnPremisesInstanceInput {
  public InstanceName $instance_name;
}

class LifecycleEventAlreadyCompletedException {
}

class AutoScalingGroupList {
}

class DeploymentStatusList {
}

class LambdaFunctionName {
}

class PutLifecycleEventHookExecutionStatusOutput {
  public LifecycleEventHookExecutionId $lifecycle_event_hook_execution_id;
}

class RevisionLocationType {
}

class InvalidLoadBalancerInfoException {
}

class Repository {
}

class CreateApplicationInput {
  public ApplicationName $application_name;
  public ComputePlatform $compute_platform;
  public TagList $tags;
}

class ELBName {
}

class GetDeploymentTargetInput {
  public DeploymentId $deployment_id;
  public TargetId $target_id;
}

class InstanceInfoList {
}

class InstanceTypeList {
}

class InvalidGitHubAccountTokenException {
}

class AutoRollbackConfiguration {
  public boolean $enabled;
  public AutoRollbackEventsList $events;
}

class DeploymentTargetListSizeExceededException {
}

class DeploymentType {
}

class MinimumHealthyHostsType {
}

class InvalidTargetFilterNameException {
}

class ListApplicationsInput {
  public NextToken $next_token;
}

class ECSServiceName {
}

class GetApplicationRevisionOutput {
  public ApplicationName $application_name;
  public RevisionLocation $revision;
  public GenericRevisionInfo $revision_info;
}

class InstanceInfo {
  public InstanceName $instance_name;
  public IamSessionArn $iam_session_arn;
  public IamUserArn $iam_user_arn;
  public InstanceArn $instance_arn;
  public Timestamp $register_time;
  public Timestamp $deregister_time;
  public TagList $tags;
}

class InvalidIamSessionArnException {
}

class InvalidOperationException {
}

class InvalidTagsToAddException {
}

class ListDeploymentsInput {
  public ApplicationName $application_name;
  public DeploymentGroupName $deployment_group_name;
  public DeploymentStatusList $include_only_statuses;
  public TimeRange $create_time_range;
  public NextToken $next_token;
}

class OperationNotSupportedException {
}

class RawStringSha256 {
}

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;
}

class UnsupportedActionForDeploymentTypeException {
}

class ListApplicationRevisionsOutput {
  public RevisionLocationList $revisions;
  public NextToken $next_token;
}

class LogTail {
}

class ApplicationInfo {
  public ComputePlatform $compute_platform;
  public ApplicationId $application_id;
  public ApplicationName $application_name;
  public Timestamp $create_time;
  public boolean $linked_to_git_hub;
  public GitHubAccountTokenName $git_hub_account_name;
}

class BatchGetDeploymentGroupsInput {
  public ApplicationName $application_name;
  public DeploymentGroupsList $deployment_group_names;
}

class DeploymentGroupNameRequiredException {
}

class ECSTaskSetCount {
}

class ECSTaskSetStatus {
}

class InvalidInputException {
}

class StopDeploymentInput {
  public DeploymentId $deployment_id;
  public NullableBoolean $auto_rollback_enabled;
}

class Alarm {
  public AlarmName $name;
}

class ApplicationsList {
}

class AutoScalingGroupHook {
}

class DeploymentTarget {
  public DeploymentTargetType $deployment_target_type;
  public InstanceTarget $instance_target;
  public LambdaTarget $lambda_target;
  public ECSTarget $ecs_target;
}

class InvalidDeploymentConfigIdException {
}

class ListDeploymentTargetsOutput {
  public TargetIdList $target_ids;
  public NextToken $next_token;
}

class Boolean {
}

class DeploymentConfigInUseException {
}

class TagResourceOutput {
}

class TriggerEventType {
}

class TriggerName {
}

class UpdateApplicationInput {
  public ApplicationName $application_name;
  public ApplicationName $new_application_name;
}

class ECSServiceMappingLimitExceededException {
}

class GetApplicationOutput {
  public ApplicationInfo $application;
}

class InvalidDeploymentWaitTypeException {
}

class LambdaFunctionAlias {
}

class LifecycleEventName {
}

class ListenerArnList {
}

class BlueGreenDeploymentConfiguration {
  public BlueInstanceTerminationOption $terminate_blue_instances_on_deployment_success;
  public DeploymentReadyOption $deployment_ready_option;
  public GreenFleetProvisioningOption $green_fleet_provisioning_option;
}

class InvalidDeploymentTargetIdException {
}

class InvalidRegistrationStatusException {
}

class LastDeploymentInfo {
  public DeploymentStatus $status;
  public Timestamp $end_time;
  public Timestamp $create_time;
  public DeploymentId $deployment_id;
}

class TargetArn {
}

