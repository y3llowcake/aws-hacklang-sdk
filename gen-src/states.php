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

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ActivityFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class ActivityLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ActivityList = vec<ActivityListItem>;

class ActivityListItem {
  public Arn $activity_arn;
  public Timestamp $creation_date;
  public Name $name;

  public function __construct(shape(
  ?'activity_arn' => Arn,
  ?'creation_date' => Timestamp,
  ?'name' => Name,
  ) $s = shape()) {
    $this->activity_arn = $activity_arn ?? "";
    $this->creation_date = $creation_date ?? 0;
    $this->name = $name ?? "";
  }
}

class ActivityScheduleFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class ActivityScheduledEventDetails {
  public TimeoutInSeconds $heartbeat_in_seconds;
  public SensitiveData $input;
  public Arn $resource;
  public TimeoutInSeconds $timeout_in_seconds;

  public function __construct(shape(
  ?'heartbeat_in_seconds' => TimeoutInSeconds,
  ?'input' => SensitiveData,
  ?'resource' => Arn,
  ?'timeout_in_seconds' => TimeoutInSeconds,
  ) $s = shape()) {
    $this->heartbeat_in_seconds = $heartbeat_in_seconds ?? 0;
    $this->input = $input ?? "";
    $this->resource = $resource ?? "";
    $this->timeout_in_seconds = $timeout_in_seconds ?? 0;
  }
}

class ActivityStartedEventDetails {
  public Identity $worker_name;

  public function __construct(shape(
  ?'worker_name' => Identity,
  ) $s = shape()) {
    $this->worker_name = $worker_name ?? "";
  }
}

class ActivitySucceededEventDetails {
  public SensitiveData $output;

  public function __construct(shape(
  ?'output' => SensitiveData,
  ) $s = shape()) {
    $this->output = $output ?? "";
  }
}

class ActivityTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class ActivityWorkerLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Arn = string;

class CloudWatchLogsLogGroup {
  public Arn $log_group_arn;

  public function __construct(shape(
  ?'log_group_arn' => Arn,
  ) $s = shape()) {
    $this->log_group_arn = $log_group_arn ?? "";
  }
}

type ConnectorParameters = string;

class CreateActivityInput {
  public Name $name;
  public TagList $tags;

  public function __construct(shape(
  ?'name' => Name,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateActivityOutput {
  public Arn $activity_arn;
  public Timestamp $creation_date;

  public function __construct(shape(
  ?'activity_arn' => Arn,
  ?'creation_date' => Timestamp,
  ) $s = shape()) {
    $this->activity_arn = $activity_arn ?? "";
    $this->creation_date = $creation_date ?? 0;
  }
}

class CreateStateMachineInput {
  public Definition $definition;
  public LoggingConfiguration $logging_configuration;
  public Name $name;
  public Arn $role_arn;
  public TagList $tags;
  public StateMachineType $type;

  public function __construct(shape(
  ?'definition' => Definition,
  ?'logging_configuration' => LoggingConfiguration,
  ?'name' => Name,
  ?'role_arn' => Arn,
  ?'tags' => TagList,
  ?'type' => StateMachineType,
  ) $s = shape()) {
    $this->definition = $definition ?? "";
    $this->logging_configuration = $logging_configuration ?? null;
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->tags = $tags ?? [];
    $this->type = $type ?? "";
  }
}

class CreateStateMachineOutput {
  public Timestamp $creation_date;
  public Arn $state_machine_arn;

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'state_machine_arn' => Arn,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? 0;
    $this->state_machine_arn = $state_machine_arn ?? "";
  }
}

type Definition = string;

class DeleteActivityInput {
  public Arn $activity_arn;

  public function __construct(shape(
  ?'activity_arn' => Arn,
  ) $s = shape()) {
    $this->activity_arn = $activity_arn ?? "";
  }
}

class DeleteActivityOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteStateMachineInput {
  public Arn $state_machine_arn;

  public function __construct(shape(
  ?'state_machine_arn' => Arn,
  ) $s = shape()) {
    $this->state_machine_arn = $state_machine_arn ?? "";
  }
}

class DeleteStateMachineOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeActivityInput {
  public Arn $activity_arn;

  public function __construct(shape(
  ?'activity_arn' => Arn,
  ) $s = shape()) {
    $this->activity_arn = $activity_arn ?? "";
  }
}

class DescribeActivityOutput {
  public Arn $activity_arn;
  public Timestamp $creation_date;
  public Name $name;

  public function __construct(shape(
  ?'activity_arn' => Arn,
  ?'creation_date' => Timestamp,
  ?'name' => Name,
  ) $s = shape()) {
    $this->activity_arn = $activity_arn ?? "";
    $this->creation_date = $creation_date ?? 0;
    $this->name = $name ?? "";
  }
}

class DescribeExecutionInput {
  public Arn $execution_arn;

  public function __construct(shape(
  ?'execution_arn' => Arn,
  ) $s = shape()) {
    $this->execution_arn = $execution_arn ?? "";
  }
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

  public function __construct(shape(
  ?'execution_arn' => Arn,
  ?'input' => SensitiveData,
  ?'name' => Name,
  ?'output' => SensitiveData,
  ?'start_date' => Timestamp,
  ?'state_machine_arn' => Arn,
  ?'status' => ExecutionStatus,
  ?'stop_date' => Timestamp,
  ) $s = shape()) {
    $this->execution_arn = $execution_arn ?? "";
    $this->input = $input ?? "";
    $this->name = $name ?? "";
    $this->output = $output ?? "";
    $this->start_date = $start_date ?? 0;
    $this->state_machine_arn = $state_machine_arn ?? "";
    $this->status = $status ?? "";
    $this->stop_date = $stop_date ?? 0;
  }
}

class DescribeStateMachineForExecutionInput {
  public Arn $execution_arn;

  public function __construct(shape(
  ?'execution_arn' => Arn,
  ) $s = shape()) {
    $this->execution_arn = $execution_arn ?? "";
  }
}

class DescribeStateMachineForExecutionOutput {
  public Definition $definition;
  public LoggingConfiguration $logging_configuration;
  public Name $name;
  public Arn $role_arn;
  public Arn $state_machine_arn;
  public Timestamp $update_date;

  public function __construct(shape(
  ?'definition' => Definition,
  ?'logging_configuration' => LoggingConfiguration,
  ?'name' => Name,
  ?'role_arn' => Arn,
  ?'state_machine_arn' => Arn,
  ?'update_date' => Timestamp,
  ) $s = shape()) {
    $this->definition = $definition ?? "";
    $this->logging_configuration = $logging_configuration ?? null;
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->state_machine_arn = $state_machine_arn ?? "";
    $this->update_date = $update_date ?? 0;
  }
}

class DescribeStateMachineInput {
  public Arn $state_machine_arn;

  public function __construct(shape(
  ?'state_machine_arn' => Arn,
  ) $s = shape()) {
    $this->state_machine_arn = $state_machine_arn ?? "";
  }
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

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'definition' => Definition,
  ?'logging_configuration' => LoggingConfiguration,
  ?'name' => Name,
  ?'role_arn' => Arn,
  ?'state_machine_arn' => Arn,
  ?'status' => StateMachineStatus,
  ?'type' => StateMachineType,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? 0;
    $this->definition = $definition ?? "";
    $this->logging_configuration = $logging_configuration ?? null;
    $this->name = $name ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->state_machine_arn = $state_machine_arn ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
  }
}

type ErrorMessage = string;

type EventId = int;

class ExecutionAbortedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class ExecutionAlreadyExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ExecutionDoesNotExist {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ExecutionFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class ExecutionLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ExecutionList = vec<ExecutionListItem>;

class ExecutionListItem {
  public Arn $execution_arn;
  public Name $name;
  public Timestamp $start_date;
  public Arn $state_machine_arn;
  public ExecutionStatus $status;
  public Timestamp $stop_date;

  public function __construct(shape(
  ?'execution_arn' => Arn,
  ?'name' => Name,
  ?'start_date' => Timestamp,
  ?'state_machine_arn' => Arn,
  ?'status' => ExecutionStatus,
  ?'stop_date' => Timestamp,
  ) $s = shape()) {
    $this->execution_arn = $execution_arn ?? "";
    $this->name = $name ?? "";
    $this->start_date = $start_date ?? 0;
    $this->state_machine_arn = $state_machine_arn ?? "";
    $this->status = $status ?? "";
    $this->stop_date = $stop_date ?? 0;
  }
}

class ExecutionStartedEventDetails {
  public SensitiveData $input;
  public Arn $role_arn;

  public function __construct(shape(
  ?'input' => SensitiveData,
  ?'role_arn' => Arn,
  ) $s = shape()) {
    $this->input = $input ?? "";
    $this->role_arn = $role_arn ?? "";
  }
}

type ExecutionStatus = string;

class ExecutionSucceededEventDetails {
  public SensitiveData $output;

  public function __construct(shape(
  ?'output' => SensitiveData,
  ) $s = shape()) {
    $this->output = $output ?? "";
  }
}

class ExecutionTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class GetActivityTaskInput {
  public Arn $activity_arn;
  public Name $worker_name;

  public function __construct(shape(
  ?'activity_arn' => Arn,
  ?'worker_name' => Name,
  ) $s = shape()) {
    $this->activity_arn = $activity_arn ?? "";
    $this->worker_name = $worker_name ?? "";
  }
}

class GetActivityTaskOutput {
  public SensitiveDataJobInput $input;
  public TaskToken $task_token;

  public function __construct(shape(
  ?'input' => SensitiveDataJobInput,
  ?'task_token' => TaskToken,
  ) $s = shape()) {
    $this->input = $input ?? "";
    $this->task_token = $task_token ?? "";
  }
}

class GetExecutionHistoryInput {
  public Arn $execution_arn;
  public PageSize $max_results;
  public PageToken $next_token;
  public ReverseOrder $reverse_order;

  public function __construct(shape(
  ?'execution_arn' => Arn,
  ?'max_results' => PageSize,
  ?'next_token' => PageToken,
  ?'reverse_order' => ReverseOrder,
  ) $s = shape()) {
    $this->execution_arn = $execution_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->reverse_order = $reverse_order ?? false;
  }
}

class GetExecutionHistoryOutput {
  public HistoryEventList $events;
  public PageToken $next_token;

  public function __construct(shape(
  ?'events' => HistoryEventList,
  ?'next_token' => PageToken,
  ) $s = shape()) {
    $this->events = $events ?? [];
    $this->next_token = $next_token ?? "";
  }
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

  public function __construct(shape(
  ?'activity_failed_event_details' => ActivityFailedEventDetails,
  ?'activity_schedule_failed_event_details' => ActivityScheduleFailedEventDetails,
  ?'activity_scheduled_event_details' => ActivityScheduledEventDetails,
  ?'activity_started_event_details' => ActivityStartedEventDetails,
  ?'activity_succeeded_event_details' => ActivitySucceededEventDetails,
  ?'activity_timed_out_event_details' => ActivityTimedOutEventDetails,
  ?'execution_aborted_event_details' => ExecutionAbortedEventDetails,
  ?'execution_failed_event_details' => ExecutionFailedEventDetails,
  ?'execution_started_event_details' => ExecutionStartedEventDetails,
  ?'execution_succeeded_event_details' => ExecutionSucceededEventDetails,
  ?'execution_timed_out_event_details' => ExecutionTimedOutEventDetails,
  ?'id' => EventId,
  ?'lambda_function_failed_event_details' => LambdaFunctionFailedEventDetails,
  ?'lambda_function_schedule_failed_event_details' => LambdaFunctionScheduleFailedEventDetails,
  ?'lambda_function_scheduled_event_details' => LambdaFunctionScheduledEventDetails,
  ?'lambda_function_start_failed_event_details' => LambdaFunctionStartFailedEventDetails,
  ?'lambda_function_succeeded_event_details' => LambdaFunctionSucceededEventDetails,
  ?'lambda_function_timed_out_event_details' => LambdaFunctionTimedOutEventDetails,
  ?'map_iteration_aborted_event_details' => MapIterationEventDetails,
  ?'map_iteration_failed_event_details' => MapIterationEventDetails,
  ?'map_iteration_started_event_details' => MapIterationEventDetails,
  ?'map_iteration_succeeded_event_details' => MapIterationEventDetails,
  ?'map_state_started_event_details' => MapStateStartedEventDetails,
  ?'previous_event_id' => EventId,
  ?'state_entered_event_details' => StateEnteredEventDetails,
  ?'state_exited_event_details' => StateExitedEventDetails,
  ?'task_failed_event_details' => TaskFailedEventDetails,
  ?'task_scheduled_event_details' => TaskScheduledEventDetails,
  ?'task_start_failed_event_details' => TaskStartFailedEventDetails,
  ?'task_started_event_details' => TaskStartedEventDetails,
  ?'task_submit_failed_event_details' => TaskSubmitFailedEventDetails,
  ?'task_submitted_event_details' => TaskSubmittedEventDetails,
  ?'task_succeeded_event_details' => TaskSucceededEventDetails,
  ?'task_timed_out_event_details' => TaskTimedOutEventDetails,
  ?'timestamp' => Timestamp,
  ?'type' => HistoryEventType,
  ) $s = shape()) {
    $this->activity_failed_event_details = $activity_failed_event_details ?? null;
    $this->activity_schedule_failed_event_details = $activity_schedule_failed_event_details ?? null;
    $this->activity_scheduled_event_details = $activity_scheduled_event_details ?? null;
    $this->activity_started_event_details = $activity_started_event_details ?? null;
    $this->activity_succeeded_event_details = $activity_succeeded_event_details ?? null;
    $this->activity_timed_out_event_details = $activity_timed_out_event_details ?? null;
    $this->execution_aborted_event_details = $execution_aborted_event_details ?? null;
    $this->execution_failed_event_details = $execution_failed_event_details ?? null;
    $this->execution_started_event_details = $execution_started_event_details ?? null;
    $this->execution_succeeded_event_details = $execution_succeeded_event_details ?? null;
    $this->execution_timed_out_event_details = $execution_timed_out_event_details ?? null;
    $this->id = $id ?? 0;
    $this->lambda_function_failed_event_details = $lambda_function_failed_event_details ?? null;
    $this->lambda_function_schedule_failed_event_details = $lambda_function_schedule_failed_event_details ?? null;
    $this->lambda_function_scheduled_event_details = $lambda_function_scheduled_event_details ?? null;
    $this->lambda_function_start_failed_event_details = $lambda_function_start_failed_event_details ?? null;
    $this->lambda_function_succeeded_event_details = $lambda_function_succeeded_event_details ?? null;
    $this->lambda_function_timed_out_event_details = $lambda_function_timed_out_event_details ?? null;
    $this->map_iteration_aborted_event_details = $map_iteration_aborted_event_details ?? null;
    $this->map_iteration_failed_event_details = $map_iteration_failed_event_details ?? null;
    $this->map_iteration_started_event_details = $map_iteration_started_event_details ?? null;
    $this->map_iteration_succeeded_event_details = $map_iteration_succeeded_event_details ?? null;
    $this->map_state_started_event_details = $map_state_started_event_details ?? null;
    $this->previous_event_id = $previous_event_id ?? 0;
    $this->state_entered_event_details = $state_entered_event_details ?? null;
    $this->state_exited_event_details = $state_exited_event_details ?? null;
    $this->task_failed_event_details = $task_failed_event_details ?? null;
    $this->task_scheduled_event_details = $task_scheduled_event_details ?? null;
    $this->task_start_failed_event_details = $task_start_failed_event_details ?? null;
    $this->task_started_event_details = $task_started_event_details ?? null;
    $this->task_submit_failed_event_details = $task_submit_failed_event_details ?? null;
    $this->task_submitted_event_details = $task_submitted_event_details ?? null;
    $this->task_succeeded_event_details = $task_succeeded_event_details ?? null;
    $this->task_timed_out_event_details = $task_timed_out_event_details ?? null;
    $this->timestamp = $timestamp ?? 0;
    $this->type = $type ?? "";
  }
}

type HistoryEventList = vec<HistoryEvent>;

type HistoryEventType = string;

type Identity = string;

type IncludeExecutionData = bool;

class InvalidArn {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDefinition {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidExecutionInput {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidLoggingConfiguration {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidName {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidOutput {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidToken {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LambdaFunctionFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class LambdaFunctionScheduleFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class LambdaFunctionScheduledEventDetails {
  public SensitiveData $input;
  public Arn $resource;
  public TimeoutInSeconds $timeout_in_seconds;

  public function __construct(shape(
  ?'input' => SensitiveData,
  ?'resource' => Arn,
  ?'timeout_in_seconds' => TimeoutInSeconds,
  ) $s = shape()) {
    $this->input = $input ?? "";
    $this->resource = $resource ?? "";
    $this->timeout_in_seconds = $timeout_in_seconds ?? 0;
  }
}

class LambdaFunctionStartFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class LambdaFunctionSucceededEventDetails {
  public SensitiveData $output;

  public function __construct(shape(
  ?'output' => SensitiveData,
  ) $s = shape()) {
    $this->output = $output ?? "";
  }
}

class LambdaFunctionTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
  }
}

class ListActivitiesInput {
  public PageSize $max_results;
  public PageToken $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => PageToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListActivitiesOutput {
  public ActivityList $activities;
  public PageToken $next_token;

  public function __construct(shape(
  ?'activities' => ActivityList,
  ?'next_token' => PageToken,
  ) $s = shape()) {
    $this->activities = $activities ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListExecutionsInput {
  public PageSize $max_results;
  public ListExecutionsPageToken $next_token;
  public Arn $state_machine_arn;
  public ExecutionStatus $status_filter;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => ListExecutionsPageToken,
  ?'state_machine_arn' => Arn,
  ?'status_filter' => ExecutionStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->state_machine_arn = $state_machine_arn ?? "";
    $this->status_filter = $status_filter ?? "";
  }
}

class ListExecutionsOutput {
  public ExecutionList $executions;
  public ListExecutionsPageToken $next_token;

  public function __construct(shape(
  ?'executions' => ExecutionList,
  ?'next_token' => ListExecutionsPageToken,
  ) $s = shape()) {
    $this->executions = $executions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ListExecutionsPageToken = string;

class ListStateMachinesInput {
  public PageSize $max_results;
  public PageToken $next_token;

  public function __construct(shape(
  ?'max_results' => PageSize,
  ?'next_token' => PageToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListStateMachinesOutput {
  public PageToken $next_token;
  public StateMachineList $state_machines;

  public function __construct(shape(
  ?'next_token' => PageToken,
  ?'state_machines' => StateMachineList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->state_machines = $state_machines ?? [];
  }
}

class ListTagsForResourceInput {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceOutput {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class LogDestination {
  public CloudWatchLogsLogGroup $cloud_watch_logs_log_group;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group' => CloudWatchLogsLogGroup,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group = $cloud_watch_logs_log_group ?? null;
  }
}

type LogDestinationList = vec<LogDestination>;

type LogLevel = string;

class LoggingConfiguration {
  public LogDestinationList $destinations;
  public IncludeExecutionData $include_execution_data;
  public LogLevel $level;

  public function __construct(shape(
  ?'destinations' => LogDestinationList,
  ?'include_execution_data' => IncludeExecutionData,
  ?'level' => LogLevel,
  ) $s = shape()) {
    $this->destinations = $destinations ?? [];
    $this->include_execution_data = $include_execution_data ?? false;
    $this->level = $level ?? "";
  }
}

class MapIterationEventDetails {
  public UnsignedInteger $index;
  public Name $name;

  public function __construct(shape(
  ?'index' => UnsignedInteger,
  ?'name' => Name,
  ) $s = shape()) {
    $this->index = $index ?? 0;
    $this->name = $name ?? "";
  }
}

class MapStateStartedEventDetails {
  public UnsignedInteger $length;

  public function __construct(shape(
  ?'length' => UnsignedInteger,
  ) $s = shape()) {
    $this->length = $length ?? 0;
  }
}

class MissingRequiredParameter {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Name = string;

type PageSize = int;

type PageToken = string;

class ResourceNotFound {
  public ErrorMessage $message;
  public Arn $resource_name;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_name' => Arn,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

type ReverseOrder = bool;

class SendTaskFailureInput {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public TaskToken $task_token;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ?'task_token' => TaskToken,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
    $this->task_token = $task_token ?? "";
  }
}

class SendTaskFailureOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SendTaskHeartbeatInput {
  public TaskToken $task_token;

  public function __construct(shape(
  ?'task_token' => TaskToken,
  ) $s = shape()) {
    $this->task_token = $task_token ?? "";
  }
}

class SendTaskHeartbeatOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SendTaskSuccessInput {
  public SensitiveData $output;
  public TaskToken $task_token;

  public function __construct(shape(
  ?'output' => SensitiveData,
  ?'task_token' => TaskToken,
  ) $s = shape()) {
    $this->output = $output ?? "";
    $this->task_token = $task_token ?? "";
  }
}

class SendTaskSuccessOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SensitiveCause = string;

type SensitiveData = string;

type SensitiveDataJobInput = string;

type SensitiveError = string;

class StartExecutionInput {
  public SensitiveData $input;
  public Name $name;
  public Arn $state_machine_arn;

  public function __construct(shape(
  ?'input' => SensitiveData,
  ?'name' => Name,
  ?'state_machine_arn' => Arn,
  ) $s = shape()) {
    $this->input = $input ?? "";
    $this->name = $name ?? "";
    $this->state_machine_arn = $state_machine_arn ?? "";
  }
}

class StartExecutionOutput {
  public Arn $execution_arn;
  public Timestamp $start_date;

  public function __construct(shape(
  ?'execution_arn' => Arn,
  ?'start_date' => Timestamp,
  ) $s = shape()) {
    $this->execution_arn = $execution_arn ?? "";
    $this->start_date = $start_date ?? 0;
  }
}

class StateEnteredEventDetails {
  public SensitiveData $input;
  public Name $name;

  public function __construct(shape(
  ?'input' => SensitiveData,
  ?'name' => Name,
  ) $s = shape()) {
    $this->input = $input ?? "";
    $this->name = $name ?? "";
  }
}

class StateExitedEventDetails {
  public Name $name;
  public SensitiveData $output;

  public function __construct(shape(
  ?'name' => Name,
  ?'output' => SensitiveData,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->output = $output ?? "";
  }
}

class StateMachineAlreadyExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class StateMachineDeleting {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class StateMachineDoesNotExist {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class StateMachineLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type StateMachineList = vec<StateMachineListItem>;

class StateMachineListItem {
  public Timestamp $creation_date;
  public Name $name;
  public Arn $state_machine_arn;
  public StateMachineType $type;

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'name' => Name,
  ?'state_machine_arn' => Arn,
  ?'type' => StateMachineType,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? 0;
    $this->name = $name ?? "";
    $this->state_machine_arn = $state_machine_arn ?? "";
    $this->type = $type ?? "";
  }
}

type StateMachineStatus = string;

type StateMachineType = string;

class StateMachineTypeNotSupported {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class StopExecutionInput {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Arn $execution_arn;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ?'execution_arn' => Arn,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
    $this->execution_arn = $execution_arn ?? "";
  }
}

class StopExecutionOutput {
  public Timestamp $stop_date;

  public function __construct(shape(
  ?'stop_date' => Timestamp,
  ) $s = shape()) {
    $this->stop_date = $stop_date ?? 0;
  }
}

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceInput {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TaskDoesNotExist {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TaskFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ?'resource' => Name,
  ?'resource_type' => Name,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class TaskScheduledEventDetails {
  public ConnectorParameters $parameters;
  public Name $region;
  public Name $resource;
  public Name $resource_type;
  public TimeoutInSeconds $timeout_in_seconds;

  public function __construct(shape(
  ?'parameters' => ConnectorParameters,
  ?'region' => Name,
  ?'resource' => Name,
  ?'resource_type' => Name,
  ?'timeout_in_seconds' => TimeoutInSeconds,
  ) $s = shape()) {
    $this->parameters = $parameters ?? "";
    $this->region = $region ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->timeout_in_seconds = $timeout_in_seconds ?? 0;
  }
}

class TaskStartFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ?'resource' => Name,
  ?'resource_type' => Name,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class TaskStartedEventDetails {
  public Name $resource;
  public Name $resource_type;

  public function __construct(shape(
  ?'resource' => Name,
  ?'resource_type' => Name,
  ) $s = shape()) {
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class TaskSubmitFailedEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ?'resource' => Name,
  ?'resource_type' => Name,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class TaskSubmittedEventDetails {
  public SensitiveData $output;
  public Name $resource;
  public Name $resource_type;

  public function __construct(shape(
  ?'output' => SensitiveData,
  ?'resource' => Name,
  ?'resource_type' => Name,
  ) $s = shape()) {
    $this->output = $output ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class TaskSucceededEventDetails {
  public SensitiveData $output;
  public Name $resource;
  public Name $resource_type;

  public function __construct(shape(
  ?'output' => SensitiveData,
  ?'resource' => Name,
  ?'resource_type' => Name,
  ) $s = shape()) {
    $this->output = $output ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class TaskTimedOut {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TaskTimedOutEventDetails {
  public SensitiveCause $cause;
  public SensitiveError $error;
  public Name $resource;
  public Name $resource_type;

  public function __construct(shape(
  ?'cause' => SensitiveCause,
  ?'error' => SensitiveError,
  ?'resource' => Name,
  ?'resource_type' => Name,
  ) $s = shape()) {
    $this->cause = $cause ?? "";
    $this->error = $error ?? "";
    $this->resource = $resource ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type TaskToken = string;

type TimeoutInSeconds = int;

type Timestamp = int;

class TooManyTags {
  public ErrorMessage $message;
  public Arn $resource_name;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'resource_name' => Arn,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->resource_name = $resource_name ?? "";
  }
}

type UnsignedInteger = int;

class UntagResourceInput {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateStateMachineInput {
  public Definition $definition;
  public LoggingConfiguration $logging_configuration;
  public Arn $role_arn;
  public Arn $state_machine_arn;

  public function __construct(shape(
  ?'definition' => Definition,
  ?'logging_configuration' => LoggingConfiguration,
  ?'role_arn' => Arn,
  ?'state_machine_arn' => Arn,
  ) $s = shape()) {
    $this->definition = $definition ?? "";
    $this->logging_configuration = $logging_configuration ?? null;
    $this->role_arn = $role_arn ?? "";
    $this->state_machine_arn = $state_machine_arn ?? "";
  }
}

class UpdateStateMachineOutput {
  public Timestamp $update_date;

  public function __construct(shape(
  ?'update_date' => Timestamp,
  ) $s = shape()) {
    $this->update_date = $update_date ?? 0;
  }
}

