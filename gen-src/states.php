<?hh // strict
namespace slack\aws\states;

interface SFN {
  public function CreateActivity(CreateActivityInput): Awaitable<Errors\Result<CreateActivityOutput>>;
  public function CreateStateMachine(CreateStateMachineInput): Awaitable<Errors\Result<CreateStateMachineOutput>>;
  public function DeleteActivity(DeleteActivityInput): Awaitable<Errors\Result<DeleteActivityOutput>>;
  public function DeleteStateMachine(DeleteStateMachineInput): Awaitable<Errors\Result<DeleteStateMachineOutput>>;
  public function DescribeActivity(DescribeActivityInput): Awaitable<Errors\Result<DescribeActivityOutput>>;
  public function DescribeExecution(DescribeExecutionInput): Awaitable<Errors\Result<DescribeExecutionOutput>>;
  public function DescribeStateMachine(DescribeStateMachineInput): Awaitable<Errors\Result<DescribeStateMachineOutput>>;
  public function DescribeStateMachineForExecution(DescribeStateMachineForExecutionInput): Awaitable<Errors\Result<DescribeStateMachineForExecutionOutput>>;
  public function GetActivityTask(GetActivityTaskInput): Awaitable<Errors\Result<GetActivityTaskOutput>>;
  public function GetExecutionHistory(GetExecutionHistoryInput): Awaitable<Errors\Result<GetExecutionHistoryOutput>>;
  public function ListActivities(ListActivitiesInput): Awaitable<Errors\Result<ListActivitiesOutput>>;
  public function ListExecutions(ListExecutionsInput): Awaitable<Errors\Result<ListExecutionsOutput>>;
  public function ListStateMachines(ListStateMachinesInput): Awaitable<Errors\Result<ListStateMachinesOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function SendTaskFailure(SendTaskFailureInput): Awaitable<Errors\Result<SendTaskFailureOutput>>;
  public function SendTaskHeartbeat(SendTaskHeartbeatInput): Awaitable<Errors\Result<SendTaskHeartbeatOutput>>;
  public function SendTaskSuccess(SendTaskSuccessInput): Awaitable<Errors\Result<SendTaskSuccessOutput>>;
  public function StartExecution(StartExecutionInput): Awaitable<Errors\Result<StartExecutionOutput>>;
  public function StopExecution(StopExecutionInput): Awaitable<Errors\Result<StopExecutionOutput>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceOutput>>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceOutput>>;
  public function UpdateStateMachine(UpdateStateMachineInput): Awaitable<Errors\Result<UpdateStateMachineOutput>>;
}

class ActivityDoesNotExist {
  public ErrorMessage $message;
}

class ActivityFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class ActivityLimitExceeded {
  public ErrorMessage $message;
}

class ActivityList {
}

class ActivityListItem {
  public Arn $activity_arn;
  public Timestamp $creation_date;
  public Name $name;
}

class ActivityScheduleFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class ActivityScheduledEventDetails {
  public TimeoutInSeconds $heartbeat_in_seconds;
  public SensitiveData $input;
  public Arn $resource;
  public TimeoutInSeconds $timeout_in_seconds;
}

class ActivityStartedEventDetails {
  public Identity $worker_name;
}

class ActivitySucceededEventDetails {
  public SensitiveData $output;
}

class ActivityTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class ActivityWorkerLimitExceeded {
  public ErrorMessage $message;
}

class Arn {
}

class CloudWatchLogsLogGroup {
  public Arn $log_group_arn;
}

class ConnectorParameters {
}

class CreateActivityInput {
  public Name $name;
  public TagList $tags;
}

class CreateActivityOutput {
  public Arn $activity_arn;
  public Timestamp $creation_date;
}

class CreateStateMachineInput {
  public Definition $definition;
  public LoggingConfiguration $logging_configuration;
  public Name $name;
  public Arn $role_arn;
  public TagList $tags;
  public StateMachineType $type;
}

class CreateStateMachineOutput {
  public Timestamp $creation_date;
  public Arn $state_machine_arn;
}

class Definition {
}

class DeleteActivityInput {
  public Arn $activity_arn;
}

class DeleteActivityOutput {
}

class DeleteStateMachineInput {
  public Arn $state_machine_arn;
}

class DeleteStateMachineOutput {
}

class DescribeActivityInput {
  public Arn $activity_arn;
}

class DescribeActivityOutput {
  public Arn $activity_arn;
  public Timestamp $creation_date;
  public Name $name;
}

class DescribeExecutionInput {
  public Arn $execution_arn;
}

class DescribeExecutionOutput {
  public Arn $execution_arn;
  public SensitiveData $input;
  public Name $name;
  public SensitiveData $output;
  public Timestamp $start_date;
  public Arn $state_machine_arn;
  public ExecutionStatus $status;
  public Timestamp $stop_date;
}

class DescribeStateMachineForExecutionInput {
  public Arn $execution_arn;
}

class DescribeStateMachineForExecutionOutput {
  public Definition $definition;
  public LoggingConfiguration $logging_configuration;
  public Name $name;
  public Arn $role_arn;
  public Arn $state_machine_arn;
  public Timestamp $update_date;
}

class DescribeStateMachineInput {
  public Arn $state_machine_arn;
}

class DescribeStateMachineOutput {
  public Timestamp $creation_date;
  public Definition $definition;
  public LoggingConfiguration $logging_configuration;
  public Name $name;
  public Arn $role_arn;
  public Arn $state_machine_arn;
  public StateMachineStatus $status;
  public StateMachineType $type;
}

class ErrorMessage {
}

class EventId {
}

class ExecutionAbortedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class ExecutionAlreadyExists {
  public ErrorMessage $message;
}

class ExecutionDoesNotExist {
  public ErrorMessage $message;
}

class ExecutionFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class ExecutionLimitExceeded {
  public ErrorMessage $message;
}

class ExecutionList {
}

class ExecutionListItem {
  public Arn $execution_arn;
  public Name $name;
  public Timestamp $start_date;
  public Arn $state_machine_arn;
  public ExecutionStatus $status;
  public Timestamp $stop_date;
}

class ExecutionStartedEventDetails {
  public SensitiveData $input;
  public Arn $role_arn;
}

class ExecutionStatus {
}

class ExecutionSucceededEventDetails {
  public SensitiveData $output;
}

class ExecutionTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class GetActivityTaskInput {
  public Arn $activity_arn;
  public Name $worker_name;
}

class GetActivityTaskOutput {
  public SensitiveDataJobInput $input;
  public TaskToken $task_token;
}

class GetExecutionHistoryInput {
  public Arn $execution_arn;
  public PageSize $max_results;
  public PageToken $next_token;
  public ReverseOrder $reverse_order;
}

class GetExecutionHistoryOutput {
  public HistoryEventList $events;
  public PageToken $next_token;
}

class HistoryEvent {
  public ActivityFailedEventDetails $activity_failed_event_details;
  public ActivityScheduleFailedEventDetails $activity_schedule_failed_event_details;
  public ActivityScheduledEventDetails $activity_scheduled_event_details;
  public ActivityStartedEventDetails $activity_started_event_details;
  public ActivitySucceededEventDetails $activity_succeeded_event_details;
  public ActivityTimedOutEventDetails $activity_timed_out_event_details;
  public ExecutionAbortedEventDetails $execution_aborted_event_details;
  public ExecutionFailedEventDetails $execution_failed_event_details;
  public ExecutionStartedEventDetails $execution_started_event_details;
  public ExecutionSucceededEventDetails $execution_succeeded_event_details;
  public ExecutionTimedOutEventDetails $execution_timed_out_event_details;
  public EventId $id;
  public LambdaFunctionFailedEventDetails $lambda_function_failed_event_details;
  public LambdaFunctionScheduleFailedEventDetails $lambda_function_schedule_failed_event_details;
  public LambdaFunctionScheduledEventDetails $lambda_function_scheduled_event_details;
  public LambdaFunctionStartFailedEventDetails $lambda_function_start_failed_event_details;
  public LambdaFunctionSucceededEventDetails $lambda_function_succeeded_event_details;
  public LambdaFunctionTimedOutEventDetails $lambda_function_timed_out_event_details;
  public MapIterationEventDetails $map_iteration_aborted_event_details;
  public MapIterationEventDetails $map_iteration_failed_event_details;
  public MapIterationEventDetails $map_iteration_started_event_details;
  public MapIterationEventDetails $map_iteration_succeeded_event_details;
  public MapStateStartedEventDetails $map_state_started_event_details;
  public EventId $previous_event_id;
  public StateEnteredEventDetails $state_entered_event_details;
  public StateExitedEventDetails $state_exited_event_details;
  public TaskFailedEventDetails $task_failed_event_details;
  public TaskScheduledEventDetails $task_scheduled_event_details;
  public TaskStartFailedEventDetails $task_start_failed_event_details;
  public TaskStartedEventDetails $task_started_event_details;
  public TaskSubmitFailedEventDetails $task_submit_failed_event_details;
  public TaskSubmittedEventDetails $task_submitted_event_details;
  public TaskSucceededEventDetails $task_succeeded_event_details;
  public TaskTimedOutEventDetails $task_timed_out_event_details;
  public Timestamp $timestamp;
  public HistoryEventType $type;
}

class HistoryEventList {
}

class HistoryEventType {
}

class Identity {
}

class IncludeExecutionData {
}

class InvalidArn {
  public ErrorMessage $message;
}

class InvalidDefinition {
  public ErrorMessage $message;
}

class InvalidExecutionInput {
  public ErrorMessage $message;
}

class InvalidLoggingConfiguration {
  public ErrorMessage $message;
}

class InvalidName {
  public ErrorMessage $message;
}

class InvalidOutput {
  public ErrorMessage $message;
}

class InvalidToken {
  public ErrorMessage $message;
}

class LambdaFunctionFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class LambdaFunctionScheduleFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class LambdaFunctionScheduledEventDetails {
  public SensitiveData $input;
  public Arn $resource;
  public TimeoutInSeconds $timeout_in_seconds;
}

class LambdaFunctionStartFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class LambdaFunctionSucceededEventDetails {
  public SensitiveData $output;
}

class LambdaFunctionTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
}

class ListActivitiesInput {
  public PageSize $max_results;
  public PageToken $next_token;
}

class ListActivitiesOutput {
  public ActivityList $activities;
  public PageToken $next_token;
}

class ListExecutionsInput {
  public PageSize $max_results;
  public ListExecutionsPageToken $next_token;
  public Arn $state_machine_arn;
  public ExecutionStatus $status_filter;
}

class ListExecutionsOutput {
  public ExecutionList $executions;
  public ListExecutionsPageToken $next_token;
}

class ListExecutionsPageToken {
}

class ListStateMachinesInput {
  public PageSize $max_results;
  public PageToken $next_token;
}

class ListStateMachinesOutput {
  public PageToken $next_token;
  public StateMachineList $state_machines;
}

class ListTagsForResourceInput {
  public Arn $resource_arn;
}

class ListTagsForResourceOutput {
  public TagList $tags;
}

class LogDestination {
  public CloudWatchLogsLogGroup $cloud_watch_logs_log_group;
}

class LogDestinationList {
}

class LogLevel {
}

class LoggingConfiguration {
  public LogDestinationList $destinations;
  public IncludeExecutionData $include_execution_data;
  public LogLevel $level;
}

class MapIterationEventDetails {
  public UnsignedInteger $index;
  public Name $name;
}

class MapStateStartedEventDetails {
  public UnsignedInteger $length;
}

class MissingRequiredParameter {
  public ErrorMessage $message;
}

class Name {
}

class PageSize {
}

class PageToken {
}

class ResourceNotFound {
  public ErrorMessage $message;
  public Arn $resource_name;
}

class ReverseOrder {
}

class SendTaskFailureInput {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public TaskToken $task_token;
}

class SendTaskFailureOutput {
}

class SendTaskHeartbeatInput {
  public TaskToken $task_token;
}

class SendTaskHeartbeatOutput {
}

class SendTaskSuccessInput {
  public SensitiveData $output;
  public TaskToken $task_token;
}

class SendTaskSuccessOutput {
}

class SensitiveCause {
}

class SensitiveData {
}

class SensitiveDataJobInput {
}

class SensitiveError {
}

class StartExecutionInput {
  public SensitiveData $input;
  public Name $name;
  public Arn $state_machine_arn;
}

class StartExecutionOutput {
  public Arn $execution_arn;
  public Timestamp $start_date;
}

class StateEnteredEventDetails {
  public SensitiveData $input;
  public Name $name;
}

class StateExitedEventDetails {
  public Name $name;
  public SensitiveData $output;
}

class StateMachineAlreadyExists {
  public ErrorMessage $message;
}

class StateMachineDeleting {
  public ErrorMessage $message;
}

class StateMachineDoesNotExist {
  public ErrorMessage $message;
}

class StateMachineLimitExceeded {
  public ErrorMessage $message;
}

class StateMachineList {
}

class StateMachineListItem {
  public Timestamp $creation_date;
  public Name $name;
  public Arn $state_machine_arn;
  public StateMachineType $type;
}

class StateMachineStatus {
}

class StateMachineType {
}

class StateMachineTypeNotSupported {
  public ErrorMessage $message;
}

class StopExecutionInput {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Arn $execution_arn;
}

class StopExecutionOutput {
  public Timestamp $stop_date;
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

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagResourceOutput {
}

class TagValue {
}

class TaskDoesNotExist {
  public ErrorMessage $message;
}

class TaskFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;
}

class TaskScheduledEventDetails {
  public ConnectorParameters $parameters;
  public Name $region;
  public Name $resource;
  public Name $resource_type;
  public TimeoutInSeconds $timeout_in_seconds;
}

class TaskStartFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;
}

class TaskStartedEventDetails {
  public Name $resource;
  public Name $resource_type;
}

class TaskSubmitFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;
}

class TaskSubmittedEventDetails {
  public SensitiveData $output;
  public Name $resource;
  public Name $resource_type;
}

class TaskSucceededEventDetails {
  public SensitiveData $output;
  public Name $resource;
  public Name $resource_type;
}

class TaskTimedOut {
  public ErrorMessage $message;
}

class TaskTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;
}

class TaskToken {
}

class TimeoutInSeconds {
}

class Timestamp {
}

class TooManyTags {
  public ErrorMessage $message;
  public Arn $resource_name;
}

class UnsignedInteger {
}

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceOutput {
}

class UpdateStateMachineInput {
  public Definition $definition;
  public LoggingConfiguration $logging_configuration;
  public Arn $role_arn;
  public Arn $state_machine_arn;
}

class UpdateStateMachineOutput {
  public Timestamp $update_date;
}

