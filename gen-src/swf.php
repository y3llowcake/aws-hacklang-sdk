<?hh // strict
namespace slack\aws\swf;

interface SWF {
  public function CountClosedWorkflowExecutions(CountClosedWorkflowExecutionsInput $in): Awaitable<\Errors\Result<WorkflowExecutionCount>>;
  public function CountOpenWorkflowExecutions(CountOpenWorkflowExecutionsInput $in): Awaitable<\Errors\Result<WorkflowExecutionCount>>;
  public function CountPendingActivityTasks(CountPendingActivityTasksInput $in): Awaitable<\Errors\Result<PendingTaskCount>>;
  public function CountPendingDecisionTasks(CountPendingDecisionTasksInput $in): Awaitable<\Errors\Result<PendingTaskCount>>;
  public function DeprecateActivityType(DeprecateActivityTypeInput $in): Awaitable<\Errors\Error>;
  public function DeprecateDomain(DeprecateDomainInput $in): Awaitable<\Errors\Error>;
  public function DeprecateWorkflowType(DeprecateWorkflowTypeInput $in): Awaitable<\Errors\Error>;
  public function DescribeActivityType(DescribeActivityTypeInput $in): Awaitable<\Errors\Result<ActivityTypeDetail>>;
  public function DescribeDomain(DescribeDomainInput $in): Awaitable<\Errors\Result<DomainDetail>>;
  public function DescribeWorkflowExecution(DescribeWorkflowExecutionInput $in): Awaitable<\Errors\Result<WorkflowExecutionDetail>>;
  public function DescribeWorkflowType(DescribeWorkflowTypeInput $in): Awaitable<\Errors\Result<WorkflowTypeDetail>>;
  public function GetWorkflowExecutionHistory(GetWorkflowExecutionHistoryInput $in): Awaitable<\Errors\Result<History>>;
  public function ListActivityTypes(ListActivityTypesInput $in): Awaitable<\Errors\Result<ActivityTypeInfos>>;
  public function ListClosedWorkflowExecutions(ListClosedWorkflowExecutionsInput $in): Awaitable<\Errors\Result<WorkflowExecutionInfos>>;
  public function ListDomains(ListDomainsInput $in): Awaitable<\Errors\Result<DomainInfos>>;
  public function ListOpenWorkflowExecutions(ListOpenWorkflowExecutionsInput $in): Awaitable<\Errors\Result<WorkflowExecutionInfos>>;
  public function ListTagsForResource(ListTagsForResourceInput $in): Awaitable<\Errors\Result<ListTagsForResourceOutput>>;
  public function ListWorkflowTypes(ListWorkflowTypesInput $in): Awaitable<\Errors\Result<WorkflowTypeInfos>>;
  public function PollForActivityTask(PollForActivityTaskInput $in): Awaitable<\Errors\Result<ActivityTask>>;
  public function PollForDecisionTask(PollForDecisionTaskInput $in): Awaitable<\Errors\Result<DecisionTask>>;
  public function RecordActivityTaskHeartbeat(RecordActivityTaskHeartbeatInput $in): Awaitable<\Errors\Result<ActivityTaskStatus>>;
  public function RegisterActivityType(RegisterActivityTypeInput $in): Awaitable<\Errors\Error>;
  public function RegisterDomain(RegisterDomainInput $in): Awaitable<\Errors\Error>;
  public function RegisterWorkflowType(RegisterWorkflowTypeInput $in): Awaitable<\Errors\Error>;
  public function RequestCancelWorkflowExecution(RequestCancelWorkflowExecutionInput $in): Awaitable<\Errors\Error>;
  public function RespondActivityTaskCanceled(RespondActivityTaskCanceledInput $in): Awaitable<\Errors\Error>;
  public function RespondActivityTaskCompleted(RespondActivityTaskCompletedInput $in): Awaitable<\Errors\Error>;
  public function RespondActivityTaskFailed(RespondActivityTaskFailedInput $in): Awaitable<\Errors\Error>;
  public function RespondDecisionTaskCompleted(RespondDecisionTaskCompletedInput $in): Awaitable<\Errors\Error>;
  public function SignalWorkflowExecution(SignalWorkflowExecutionInput $in): Awaitable<\Errors\Error>;
  public function StartWorkflowExecution(StartWorkflowExecutionInput $in): Awaitable<\Errors\Result<Run>>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Error>;
  public function TerminateWorkflowExecution(TerminateWorkflowExecutionInput $in): Awaitable<\Errors\Error>;
  public function UndeprecateActivityType(UndeprecateActivityTypeInput $in): Awaitable<\Errors\Error>;
  public function UndeprecateDomain(UndeprecateDomainInput $in): Awaitable<\Errors\Error>;
  public function UndeprecateWorkflowType(UndeprecateWorkflowTypeInput $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Error>;
}

type ActivityId = string;

class ActivityTask {
  public ?ActivityId $activity_id;
  public ?ActivityType $activity_type;
  public ?Data $input;
  public ?EventId $started_event_id;
  public ?TaskToken $task_token;
  public ?WorkflowExecution $workflow_execution;

  public function __construct(shape(
    ?'activity_id' => ?ActivityId,
    ?'activity_type' => ?ActivityType,
    ?'input' => ?Data,
    ?'started_event_id' => ?EventId,
    ?'task_token' => ?TaskToken,
    ?'workflow_execution' => ?WorkflowExecution,
  ) $s = shape()) {
    $this->activity_id = $s['activity_id'] ?? '';
    $this->activity_type = $s['activity_type'] ?? null;
    $this->input = $s['input'] ?? '';
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->task_token = $s['task_token'] ?? '';
    $this->workflow_execution = $s['workflow_execution'] ?? null;
  }
}

class ActivityTaskCancelRequestedEventAttributes {
  public ?ActivityId $activity_id;
  public ?EventId $decision_task_completed_event_id;

  public function __construct(shape(
    ?'activity_id' => ?ActivityId,
    ?'decision_task_completed_event_id' => ?EventId,
  ) $s = shape()) {
    $this->activity_id = $s['activity_id'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
  }
}

class ActivityTaskCanceledEventAttributes {
  public ?Data $details;
  public ?EventId $latest_cancel_requested_event_id;
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'latest_cancel_requested_event_id' => ?EventId,
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->latest_cancel_requested_event_id = $s['latest_cancel_requested_event_id'] ?? 0;
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
  }
}

class ActivityTaskCompletedEventAttributes {
  public ?Data $result;
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;

  public function __construct(shape(
    ?'result' => ?Data,
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
  ) $s = shape()) {
    $this->result = $s['result'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
  }
}

class ActivityTaskFailedEventAttributes {
  public ?Data $details;
  public ?FailureReason $reason;
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'reason' => ?FailureReason,
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
  }
}

class ActivityTaskScheduledEventAttributes {
  public ?ActivityId $activity_id;
  public ?ActivityType $activity_type;
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?DurationInSecondsOptional $heartbeat_timeout;
  public ?Data $input;
  public ?DurationInSecondsOptional $schedule_to_close_timeout;
  public ?DurationInSecondsOptional $schedule_to_start_timeout;
  public ?DurationInSecondsOptional $start_to_close_timeout;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;

  public function __construct(shape(
    ?'activity_id' => ?ActivityId,
    ?'activity_type' => ?ActivityType,
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'heartbeat_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'schedule_to_close_timeout' => ?DurationInSecondsOptional,
    ?'schedule_to_start_timeout' => ?DurationInSecondsOptional,
    ?'start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
  ) $s = shape()) {
    $this->activity_id = $s['activity_id'] ?? '';
    $this->activity_type = $s['activity_type'] ?? null;
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->heartbeat_timeout = $s['heartbeat_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->schedule_to_close_timeout = $s['schedule_to_close_timeout'] ?? '';
    $this->schedule_to_start_timeout = $s['schedule_to_start_timeout'] ?? '';
    $this->start_to_close_timeout = $s['start_to_close_timeout'] ?? '';
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
  }
}

class ActivityTaskStartedEventAttributes {
  public ?Identity $identity;
  public ?EventId $scheduled_event_id;

  public function __construct(shape(
    ?'identity' => ?Identity,
    ?'scheduled_event_id' => ?EventId,
  ) $s = shape()) {
    $this->identity = $s['identity'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
  }
}

class ActivityTaskStatus {
  public ?Canceled $cancel_requested;

  public function __construct(shape(
    ?'cancel_requested' => ?Canceled,
  ) $s = shape()) {
    $this->cancel_requested = $s['cancel_requested'] ?? false;
  }
}

class ActivityTaskTimedOutEventAttributes {
  public ?LimitedData $details;
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;
  public ?ActivityTaskTimeoutType $timeout_type;

  public function __construct(shape(
    ?'details' => ?LimitedData,
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'timeout_type' => ?ActivityTaskTimeoutType,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->timeout_type = $s['timeout_type'] ?? '';
  }
}

type ActivityTaskTimeoutType = string;

class ActivityType {
  public ?Name $name;
  public ?Version $version;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class ActivityTypeConfiguration {
  public ?DurationInSecondsOptional $default_task_heartbeat_timeout;
  public ?TaskList $default_task_list;
  public ?TaskPriority $default_task_priority;
  public ?DurationInSecondsOptional $default_task_schedule_to_close_timeout;
  public ?DurationInSecondsOptional $default_task_schedule_to_start_timeout;
  public ?DurationInSecondsOptional $default_task_start_to_close_timeout;

  public function __construct(shape(
    ?'default_task_heartbeat_timeout' => ?DurationInSecondsOptional,
    ?'default_task_list' => ?TaskList,
    ?'default_task_priority' => ?TaskPriority,
    ?'default_task_schedule_to_close_timeout' => ?DurationInSecondsOptional,
    ?'default_task_schedule_to_start_timeout' => ?DurationInSecondsOptional,
    ?'default_task_start_to_close_timeout' => ?DurationInSecondsOptional,
  ) $s = shape()) {
    $this->default_task_heartbeat_timeout = $s['default_task_heartbeat_timeout'] ?? '';
    $this->default_task_list = $s['default_task_list'] ?? null;
    $this->default_task_priority = $s['default_task_priority'] ?? '';
    $this->default_task_schedule_to_close_timeout = $s['default_task_schedule_to_close_timeout'] ?? '';
    $this->default_task_schedule_to_start_timeout = $s['default_task_schedule_to_start_timeout'] ?? '';
    $this->default_task_start_to_close_timeout = $s['default_task_start_to_close_timeout'] ?? '';
  }
}

class ActivityTypeDetail {
  public ?ActivityTypeConfiguration $configuration;
  public ?ActivityTypeInfo $type_info;

  public function __construct(shape(
    ?'configuration' => ?ActivityTypeConfiguration,
    ?'type_info' => ?ActivityTypeInfo,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->type_info = $s['type_info'] ?? null;
  }
}

class ActivityTypeInfo {
  public ?ActivityType $activity_type;
  public ?Timestamp $creation_date;
  public ?Timestamp $deprecation_date;
  public ?Description $description;
  public ?RegistrationStatus $status;

  public function __construct(shape(
    ?'activity_type' => ?ActivityType,
    ?'creation_date' => ?Timestamp,
    ?'deprecation_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'status' => ?RegistrationStatus,
  ) $s = shape()) {
    $this->activity_type = $s['activity_type'] ?? null;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->deprecation_date = $s['deprecation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type ActivityTypeInfoList = vec<ActivityTypeInfo>;

class ActivityTypeInfos {
  public ?PageToken $next_page_token;
  public ?ActivityTypeInfoList $type_infos;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'type_infos' => ?ActivityTypeInfoList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->type_infos = $s['type_infos'] ?? vec[];
  }
}

type Arn = string;

class CancelTimerDecisionAttributes {
  public ?TimerId $timer_id;

  public function __construct(shape(
    ?'timer_id' => ?TimerId,
  ) $s = shape()) {
    $this->timer_id = $s['timer_id'] ?? '';
  }
}

type CancelTimerFailedCause = string;

class CancelTimerFailedEventAttributes {
  public ?CancelTimerFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;
  public ?TimerId $timer_id;

  public function __construct(shape(
    ?'cause' => ?CancelTimerFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'timer_id' => ?TimerId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->timer_id = $s['timer_id'] ?? '';
  }
}

class CancelWorkflowExecutionDecisionAttributes {
  public ?Data $details;

  public function __construct(shape(
    ?'details' => ?Data,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
  }
}

type CancelWorkflowExecutionFailedCause = string;

class CancelWorkflowExecutionFailedEventAttributes {
  public ?CancelWorkflowExecutionFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;

  public function __construct(shape(
    ?'cause' => ?CancelWorkflowExecutionFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
  }
}

type Canceled = bool;

type CauseMessage = string;

type ChildPolicy = string;

class ChildWorkflowExecutionCanceledEventAttributes {
  public ?Data $details;
  public ?EventId $initiated_event_id;
  public ?EventId $started_event_id;
  public ?WorkflowExecution $workflow_execution;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'initiated_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'workflow_execution' => ?WorkflowExecution,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->workflow_execution = $s['workflow_execution'] ?? null;
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class ChildWorkflowExecutionCompletedEventAttributes {
  public ?EventId $initiated_event_id;
  public ?Data $result;
  public ?EventId $started_event_id;
  public ?WorkflowExecution $workflow_execution;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'initiated_event_id' => ?EventId,
    ?'result' => ?Data,
    ?'started_event_id' => ?EventId,
    ?'workflow_execution' => ?WorkflowExecution,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->result = $s['result'] ?? '';
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->workflow_execution = $s['workflow_execution'] ?? null;
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class ChildWorkflowExecutionFailedEventAttributes {
  public ?Data $details;
  public ?EventId $initiated_event_id;
  public ?FailureReason $reason;
  public ?EventId $started_event_id;
  public ?WorkflowExecution $workflow_execution;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'initiated_event_id' => ?EventId,
    ?'reason' => ?FailureReason,
    ?'started_event_id' => ?EventId,
    ?'workflow_execution' => ?WorkflowExecution,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->reason = $s['reason'] ?? '';
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->workflow_execution = $s['workflow_execution'] ?? null;
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class ChildWorkflowExecutionStartedEventAttributes {
  public ?EventId $initiated_event_id;
  public ?WorkflowExecution $workflow_execution;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'initiated_event_id' => ?EventId,
    ?'workflow_execution' => ?WorkflowExecution,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->workflow_execution = $s['workflow_execution'] ?? null;
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class ChildWorkflowExecutionTerminatedEventAttributes {
  public ?EventId $initiated_event_id;
  public ?EventId $started_event_id;
  public ?WorkflowExecution $workflow_execution;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'initiated_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'workflow_execution' => ?WorkflowExecution,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->workflow_execution = $s['workflow_execution'] ?? null;
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class ChildWorkflowExecutionTimedOutEventAttributes {
  public ?EventId $initiated_event_id;
  public ?EventId $started_event_id;
  public ?WorkflowExecutionTimeoutType $timeout_type;
  public ?WorkflowExecution $workflow_execution;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'initiated_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'timeout_type' => ?WorkflowExecutionTimeoutType,
    ?'workflow_execution' => ?WorkflowExecution,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->timeout_type = $s['timeout_type'] ?? '';
    $this->workflow_execution = $s['workflow_execution'] ?? null;
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type CloseStatus = string;

class CloseStatusFilter {
  public ?CloseStatus $status;

  public function __construct(shape(
    ?'status' => ?CloseStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

class CompleteWorkflowExecutionDecisionAttributes {
  public ?Data $result;

  public function __construct(shape(
    ?'result' => ?Data,
  ) $s = shape()) {
    $this->result = $s['result'] ?? '';
  }
}

type CompleteWorkflowExecutionFailedCause = string;

class CompleteWorkflowExecutionFailedEventAttributes {
  public ?CompleteWorkflowExecutionFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;

  public function __construct(shape(
    ?'cause' => ?CompleteWorkflowExecutionFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
  }
}

class ContinueAsNewWorkflowExecutionDecisionAttributes {
  public ?ChildPolicy $child_policy;
  public ?DurationInSecondsOptional $execution_start_to_close_timeout;
  public ?Data $input;
  public ?Arn $lambda_role;
  public ?TagList $tag_list;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;
  public ?DurationInSecondsOptional $task_start_to_close_timeout;
  public ?Version $workflow_type_version;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'lambda_role' => ?Arn,
    ?'tag_list' => ?TagList,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
    ?'task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'workflow_type_version' => ?Version,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->execution_start_to_close_timeout = $s['execution_start_to_close_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->lambda_role = $s['lambda_role'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
    $this->task_start_to_close_timeout = $s['task_start_to_close_timeout'] ?? '';
    $this->workflow_type_version = $s['workflow_type_version'] ?? '';
  }
}

type ContinueAsNewWorkflowExecutionFailedCause = string;

class ContinueAsNewWorkflowExecutionFailedEventAttributes {
  public ?ContinueAsNewWorkflowExecutionFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;

  public function __construct(shape(
    ?'cause' => ?ContinueAsNewWorkflowExecutionFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
  }
}

type Count = int;

class CountClosedWorkflowExecutionsInput {
  public ?CloseStatusFilter $close_status_filter;
  public ?ExecutionTimeFilter $close_time_filter;
  public ?DomainName $domain;
  public ?WorkflowExecutionFilter $execution_filter;
  public ?ExecutionTimeFilter $start_time_filter;
  public ?TagFilter $tag_filter;
  public ?WorkflowTypeFilter $type_filter;

  public function __construct(shape(
    ?'close_status_filter' => ?CloseStatusFilter,
    ?'close_time_filter' => ?ExecutionTimeFilter,
    ?'domain' => ?DomainName,
    ?'execution_filter' => ?WorkflowExecutionFilter,
    ?'start_time_filter' => ?ExecutionTimeFilter,
    ?'tag_filter' => ?TagFilter,
    ?'type_filter' => ?WorkflowTypeFilter,
  ) $s = shape()) {
    $this->close_status_filter = $s['close_status_filter'] ?? null;
    $this->close_time_filter = $s['close_time_filter'] ?? null;
    $this->domain = $s['domain'] ?? '';
    $this->execution_filter = $s['execution_filter'] ?? null;
    $this->start_time_filter = $s['start_time_filter'] ?? null;
    $this->tag_filter = $s['tag_filter'] ?? null;
    $this->type_filter = $s['type_filter'] ?? null;
  }
}

class CountOpenWorkflowExecutionsInput {
  public ?DomainName $domain;
  public ?WorkflowExecutionFilter $execution_filter;
  public ?ExecutionTimeFilter $start_time_filter;
  public ?TagFilter $tag_filter;
  public ?WorkflowTypeFilter $type_filter;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'execution_filter' => ?WorkflowExecutionFilter,
    ?'start_time_filter' => ?ExecutionTimeFilter,
    ?'tag_filter' => ?TagFilter,
    ?'type_filter' => ?WorkflowTypeFilter,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->execution_filter = $s['execution_filter'] ?? null;
    $this->start_time_filter = $s['start_time_filter'] ?? null;
    $this->tag_filter = $s['tag_filter'] ?? null;
    $this->type_filter = $s['type_filter'] ?? null;
  }
}

class CountPendingActivityTasksInput {
  public ?DomainName $domain;
  public ?TaskList $task_list;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'task_list' => ?TaskList,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->task_list = $s['task_list'] ?? null;
  }
}

class CountPendingDecisionTasksInput {
  public ?DomainName $domain;
  public ?TaskList $task_list;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'task_list' => ?TaskList,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->task_list = $s['task_list'] ?? null;
  }
}

type Data = string;

class Decision {
  public ?CancelTimerDecisionAttributes $cancel_timer_decision_attributes;
  public ?CancelWorkflowExecutionDecisionAttributes $cancel_workflow_execution_decision_attributes;
  public ?CompleteWorkflowExecutionDecisionAttributes $complete_workflow_execution_decision_attributes;
  public ?ContinueAsNewWorkflowExecutionDecisionAttributes $continue_as_new_workflow_execution_decision_attributes;
  public ?DecisionType $decision_type;
  public ?FailWorkflowExecutionDecisionAttributes $fail_workflow_execution_decision_attributes;
  public ?RecordMarkerDecisionAttributes $record_marker_decision_attributes;
  public ?RequestCancelActivityTaskDecisionAttributes $request_cancel_activity_task_decision_attributes;
  public ?RequestCancelExternalWorkflowExecutionDecisionAttributes $request_cancel_external_workflow_execution_decision_attributes;
  public ?ScheduleActivityTaskDecisionAttributes $schedule_activity_task_decision_attributes;
  public ?ScheduleLambdaFunctionDecisionAttributes $schedule_lambda_function_decision_attributes;
  public ?SignalExternalWorkflowExecutionDecisionAttributes $signal_external_workflow_execution_decision_attributes;
  public ?StartChildWorkflowExecutionDecisionAttributes $start_child_workflow_execution_decision_attributes;
  public ?StartTimerDecisionAttributes $start_timer_decision_attributes;

  public function __construct(shape(
    ?'cancel_timer_decision_attributes' => ?CancelTimerDecisionAttributes,
    ?'cancel_workflow_execution_decision_attributes' => ?CancelWorkflowExecutionDecisionAttributes,
    ?'complete_workflow_execution_decision_attributes' => ?CompleteWorkflowExecutionDecisionAttributes,
    ?'continue_as_new_workflow_execution_decision_attributes' => ?ContinueAsNewWorkflowExecutionDecisionAttributes,
    ?'decision_type' => ?DecisionType,
    ?'fail_workflow_execution_decision_attributes' => ?FailWorkflowExecutionDecisionAttributes,
    ?'record_marker_decision_attributes' => ?RecordMarkerDecisionAttributes,
    ?'request_cancel_activity_task_decision_attributes' => ?RequestCancelActivityTaskDecisionAttributes,
    ?'request_cancel_external_workflow_execution_decision_attributes' => ?RequestCancelExternalWorkflowExecutionDecisionAttributes,
    ?'schedule_activity_task_decision_attributes' => ?ScheduleActivityTaskDecisionAttributes,
    ?'schedule_lambda_function_decision_attributes' => ?ScheduleLambdaFunctionDecisionAttributes,
    ?'signal_external_workflow_execution_decision_attributes' => ?SignalExternalWorkflowExecutionDecisionAttributes,
    ?'start_child_workflow_execution_decision_attributes' => ?StartChildWorkflowExecutionDecisionAttributes,
    ?'start_timer_decision_attributes' => ?StartTimerDecisionAttributes,
  ) $s = shape()) {
    $this->cancel_timer_decision_attributes = $s['cancel_timer_decision_attributes'] ?? null;
    $this->cancel_workflow_execution_decision_attributes = $s['cancel_workflow_execution_decision_attributes'] ?? null;
    $this->complete_workflow_execution_decision_attributes = $s['complete_workflow_execution_decision_attributes'] ?? null;
    $this->continue_as_new_workflow_execution_decision_attributes = $s['continue_as_new_workflow_execution_decision_attributes'] ?? null;
    $this->decision_type = $s['decision_type'] ?? '';
    $this->fail_workflow_execution_decision_attributes = $s['fail_workflow_execution_decision_attributes'] ?? null;
    $this->record_marker_decision_attributes = $s['record_marker_decision_attributes'] ?? null;
    $this->request_cancel_activity_task_decision_attributes = $s['request_cancel_activity_task_decision_attributes'] ?? null;
    $this->request_cancel_external_workflow_execution_decision_attributes = $s['request_cancel_external_workflow_execution_decision_attributes'] ?? null;
    $this->schedule_activity_task_decision_attributes = $s['schedule_activity_task_decision_attributes'] ?? null;
    $this->schedule_lambda_function_decision_attributes = $s['schedule_lambda_function_decision_attributes'] ?? null;
    $this->signal_external_workflow_execution_decision_attributes = $s['signal_external_workflow_execution_decision_attributes'] ?? null;
    $this->start_child_workflow_execution_decision_attributes = $s['start_child_workflow_execution_decision_attributes'] ?? null;
    $this->start_timer_decision_attributes = $s['start_timer_decision_attributes'] ?? null;
  }
}

type DecisionList = vec<Decision>;

class DecisionTask {
  public ?HistoryEventList $events;
  public ?PageToken $next_page_token;
  public ?EventId $previous_started_event_id;
  public ?EventId $started_event_id;
  public ?TaskToken $task_token;
  public ?WorkflowExecution $workflow_execution;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'events' => ?HistoryEventList,
    ?'next_page_token' => ?PageToken,
    ?'previous_started_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'task_token' => ?TaskToken,
    ?'workflow_execution' => ?WorkflowExecution,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->previous_started_event_id = $s['previous_started_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->task_token = $s['task_token'] ?? '';
    $this->workflow_execution = $s['workflow_execution'] ?? null;
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class DecisionTaskCompletedEventAttributes {
  public ?Data $execution_context;
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;

  public function __construct(shape(
    ?'execution_context' => ?Data,
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
  ) $s = shape()) {
    $this->execution_context = $s['execution_context'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
  }
}

class DecisionTaskScheduledEventAttributes {
  public ?DurationInSecondsOptional $start_to_close_timeout;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;

  public function __construct(shape(
    ?'start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
  ) $s = shape()) {
    $this->start_to_close_timeout = $s['start_to_close_timeout'] ?? '';
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
  }
}

class DecisionTaskStartedEventAttributes {
  public ?Identity $identity;
  public ?EventId $scheduled_event_id;

  public function __construct(shape(
    ?'identity' => ?Identity,
    ?'scheduled_event_id' => ?EventId,
  ) $s = shape()) {
    $this->identity = $s['identity'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
  }
}

class DecisionTaskTimedOutEventAttributes {
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;
  public ?DecisionTaskTimeoutType $timeout_type;

  public function __construct(shape(
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'timeout_type' => ?DecisionTaskTimeoutType,
  ) $s = shape()) {
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->timeout_type = $s['timeout_type'] ?? '';
  }
}

type DecisionTaskTimeoutType = string;

type DecisionType = string;

class DefaultUndefinedFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DeprecateActivityTypeInput {
  public ?ActivityType $activity_type;
  public ?DomainName $domain;

  public function __construct(shape(
    ?'activity_type' => ?ActivityType,
    ?'domain' => ?DomainName,
  ) $s = shape()) {
    $this->activity_type = $s['activity_type'] ?? null;
    $this->domain = $s['domain'] ?? '';
  }
}

class DeprecateDomainInput {
  public ?DomainName $name;

  public function __construct(shape(
    ?'name' => ?DomainName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DeprecateWorkflowTypeInput {
  public ?DomainName $domain;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class DescribeActivityTypeInput {
  public ?ActivityType $activity_type;
  public ?DomainName $domain;

  public function __construct(shape(
    ?'activity_type' => ?ActivityType,
    ?'domain' => ?DomainName,
  ) $s = shape()) {
    $this->activity_type = $s['activity_type'] ?? null;
    $this->domain = $s['domain'] ?? '';
  }
}

class DescribeDomainInput {
  public ?DomainName $name;

  public function __construct(shape(
    ?'name' => ?DomainName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class DescribeWorkflowExecutionInput {
  public ?DomainName $domain;
  public ?WorkflowExecution $execution;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'execution' => ?WorkflowExecution,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->execution = $s['execution'] ?? null;
  }
}

class DescribeWorkflowTypeInput {
  public ?DomainName $domain;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type Description = string;

class DomainAlreadyExistsFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DomainConfiguration {
  public ?DurationInDays $workflow_execution_retention_period_in_days;

  public function __construct(shape(
    ?'workflow_execution_retention_period_in_days' => ?DurationInDays,
  ) $s = shape()) {
    $this->workflow_execution_retention_period_in_days = $s['workflow_execution_retention_period_in_days'] ?? '';
  }
}

class DomainDeprecatedFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DomainDetail {
  public ?DomainConfiguration $configuration;
  public ?DomainInfo $domain_info;

  public function __construct(shape(
    ?'configuration' => ?DomainConfiguration,
    ?'domain_info' => ?DomainInfo,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->domain_info = $s['domain_info'] ?? null;
  }
}

class DomainInfo {
  public ?Arn $arn;
  public ?Description $description;
  public ?DomainName $name;
  public ?RegistrationStatus $status;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'description' => ?Description,
    ?'name' => ?DomainName,
    ?'status' => ?RegistrationStatus,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type DomainInfoList = vec<DomainInfo>;

class DomainInfos {
  public ?DomainInfoList $domain_infos;
  public ?PageToken $next_page_token;

  public function __construct(shape(
    ?'domain_infos' => ?DomainInfoList,
    ?'next_page_token' => ?PageToken,
  ) $s = shape()) {
    $this->domain_infos = $s['domain_infos'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

type DomainName = string;

type DurationInDays = string;

type DurationInSeconds = string;

type DurationInSecondsOptional = string;

type ErrorMessage = string;

type EventId = int;

type EventType = string;

type ExecutionStatus = string;

class ExecutionTimeFilter {
  public ?Timestamp $latest_date;
  public ?Timestamp $oldest_date;

  public function __construct(shape(
    ?'latest_date' => ?Timestamp,
    ?'oldest_date' => ?Timestamp,
  ) $s = shape()) {
    $this->latest_date = $s['latest_date'] ?? 0;
    $this->oldest_date = $s['oldest_date'] ?? 0;
  }
}

class ExternalWorkflowExecutionCancelRequestedEventAttributes {
  public ?EventId $initiated_event_id;
  public ?WorkflowExecution $workflow_execution;

  public function __construct(shape(
    ?'initiated_event_id' => ?EventId,
    ?'workflow_execution' => ?WorkflowExecution,
  ) $s = shape()) {
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->workflow_execution = $s['workflow_execution'] ?? null;
  }
}

class ExternalWorkflowExecutionSignaledEventAttributes {
  public ?EventId $initiated_event_id;
  public ?WorkflowExecution $workflow_execution;

  public function __construct(shape(
    ?'initiated_event_id' => ?EventId,
    ?'workflow_execution' => ?WorkflowExecution,
  ) $s = shape()) {
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->workflow_execution = $s['workflow_execution'] ?? null;
  }
}

class FailWorkflowExecutionDecisionAttributes {
  public ?Data $details;
  public ?FailureReason $reason;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'reason' => ?FailureReason,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type FailWorkflowExecutionFailedCause = string;

class FailWorkflowExecutionFailedEventAttributes {
  public ?FailWorkflowExecutionFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;

  public function __construct(shape(
    ?'cause' => ?FailWorkflowExecutionFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
  }
}

type FailureReason = string;

type FunctionId = string;

type FunctionInput = string;

type FunctionName = string;

class GetWorkflowExecutionHistoryInput {
  public ?DomainName $domain;
  public ?WorkflowExecution $execution;
  public ?PageSize $maximum_page_size;
  public ?PageToken $next_page_token;
  public ?ReverseOrder $reverse_order;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'execution' => ?WorkflowExecution,
    ?'maximum_page_size' => ?PageSize,
    ?'next_page_token' => ?PageToken,
    ?'reverse_order' => ?ReverseOrder,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->execution = $s['execution'] ?? null;
    $this->maximum_page_size = $s['maximum_page_size'] ?? 0;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->reverse_order = $s['reverse_order'] ?? false;
  }
}

class History {
  public ?HistoryEventList $events;
  public ?PageToken $next_page_token;

  public function __construct(shape(
    ?'events' => ?HistoryEventList,
    ?'next_page_token' => ?PageToken,
  ) $s = shape()) {
    $this->events = $s['events'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class HistoryEvent {
  public ?ActivityTaskCancelRequestedEventAttributes $activity_task_cancel_requested_event_attributes;
  public ?ActivityTaskCanceledEventAttributes $activity_task_canceled_event_attributes;
  public ?ActivityTaskCompletedEventAttributes $activity_task_completed_event_attributes;
  public ?ActivityTaskFailedEventAttributes $activity_task_failed_event_attributes;
  public ?ActivityTaskScheduledEventAttributes $activity_task_scheduled_event_attributes;
  public ?ActivityTaskStartedEventAttributes $activity_task_started_event_attributes;
  public ?ActivityTaskTimedOutEventAttributes $activity_task_timed_out_event_attributes;
  public ?CancelTimerFailedEventAttributes $cancel_timer_failed_event_attributes;
  public ?CancelWorkflowExecutionFailedEventAttributes $cancel_workflow_execution_failed_event_attributes;
  public ?ChildWorkflowExecutionCanceledEventAttributes $child_workflow_execution_canceled_event_attributes;
  public ?ChildWorkflowExecutionCompletedEventAttributes $child_workflow_execution_completed_event_attributes;
  public ?ChildWorkflowExecutionFailedEventAttributes $child_workflow_execution_failed_event_attributes;
  public ?ChildWorkflowExecutionStartedEventAttributes $child_workflow_execution_started_event_attributes;
  public ?ChildWorkflowExecutionTerminatedEventAttributes $child_workflow_execution_terminated_event_attributes;
  public ?ChildWorkflowExecutionTimedOutEventAttributes $child_workflow_execution_timed_out_event_attributes;
  public ?CompleteWorkflowExecutionFailedEventAttributes $complete_workflow_execution_failed_event_attributes;
  public ?ContinueAsNewWorkflowExecutionFailedEventAttributes $continue_as_new_workflow_execution_failed_event_attributes;
  public ?DecisionTaskCompletedEventAttributes $decision_task_completed_event_attributes;
  public ?DecisionTaskScheduledEventAttributes $decision_task_scheduled_event_attributes;
  public ?DecisionTaskStartedEventAttributes $decision_task_started_event_attributes;
  public ?DecisionTaskTimedOutEventAttributes $decision_task_timed_out_event_attributes;
  public ?EventId $event_id;
  public ?Timestamp $event_timestamp;
  public ?EventType $event_type;
  public ?ExternalWorkflowExecutionCancelRequestedEventAttributes $external_workflow_execution_cancel_requested_event_attributes;
  public ?ExternalWorkflowExecutionSignaledEventAttributes $external_workflow_execution_signaled_event_attributes;
  public ?FailWorkflowExecutionFailedEventAttributes $fail_workflow_execution_failed_event_attributes;
  public ?LambdaFunctionCompletedEventAttributes $lambda_function_completed_event_attributes;
  public ?LambdaFunctionFailedEventAttributes $lambda_function_failed_event_attributes;
  public ?LambdaFunctionScheduledEventAttributes $lambda_function_scheduled_event_attributes;
  public ?LambdaFunctionStartedEventAttributes $lambda_function_started_event_attributes;
  public ?LambdaFunctionTimedOutEventAttributes $lambda_function_timed_out_event_attributes;
  public ?MarkerRecordedEventAttributes $marker_recorded_event_attributes;
  public ?RecordMarkerFailedEventAttributes $record_marker_failed_event_attributes;
  public ?RequestCancelActivityTaskFailedEventAttributes $request_cancel_activity_task_failed_event_attributes;
  public ?RequestCancelExternalWorkflowExecutionFailedEventAttributes $request_cancel_external_workflow_execution_failed_event_attributes;
  public ?RequestCancelExternalWorkflowExecutionInitiatedEventAttributes $request_cancel_external_workflow_execution_initiated_event_attributes;
  public ?ScheduleActivityTaskFailedEventAttributes $schedule_activity_task_failed_event_attributes;
  public ?ScheduleLambdaFunctionFailedEventAttributes $schedule_lambda_function_failed_event_attributes;
  public ?SignalExternalWorkflowExecutionFailedEventAttributes $signal_external_workflow_execution_failed_event_attributes;
  public ?SignalExternalWorkflowExecutionInitiatedEventAttributes $signal_external_workflow_execution_initiated_event_attributes;
  public ?StartChildWorkflowExecutionFailedEventAttributes $start_child_workflow_execution_failed_event_attributes;
  public ?StartChildWorkflowExecutionInitiatedEventAttributes $start_child_workflow_execution_initiated_event_attributes;
  public ?StartLambdaFunctionFailedEventAttributes $start_lambda_function_failed_event_attributes;
  public ?StartTimerFailedEventAttributes $start_timer_failed_event_attributes;
  public ?TimerCanceledEventAttributes $timer_canceled_event_attributes;
  public ?TimerFiredEventAttributes $timer_fired_event_attributes;
  public ?TimerStartedEventAttributes $timer_started_event_attributes;
  public ?WorkflowExecutionCancelRequestedEventAttributes $workflow_execution_cancel_requested_event_attributes;
  public ?WorkflowExecutionCanceledEventAttributes $workflow_execution_canceled_event_attributes;
  public ?WorkflowExecutionCompletedEventAttributes $workflow_execution_completed_event_attributes;
  public ?WorkflowExecutionContinuedAsNewEventAttributes $workflow_execution_continued_as_new_event_attributes;
  public ?WorkflowExecutionFailedEventAttributes $workflow_execution_failed_event_attributes;
  public ?WorkflowExecutionSignaledEventAttributes $workflow_execution_signaled_event_attributes;
  public ?WorkflowExecutionStartedEventAttributes $workflow_execution_started_event_attributes;
  public ?WorkflowExecutionTerminatedEventAttributes $workflow_execution_terminated_event_attributes;
  public ?WorkflowExecutionTimedOutEventAttributes $workflow_execution_timed_out_event_attributes;

  public function __construct(shape(
    ?'activity_task_cancel_requested_event_attributes' => ?ActivityTaskCancelRequestedEventAttributes,
    ?'activity_task_canceled_event_attributes' => ?ActivityTaskCanceledEventAttributes,
    ?'activity_task_completed_event_attributes' => ?ActivityTaskCompletedEventAttributes,
    ?'activity_task_failed_event_attributes' => ?ActivityTaskFailedEventAttributes,
    ?'activity_task_scheduled_event_attributes' => ?ActivityTaskScheduledEventAttributes,
    ?'activity_task_started_event_attributes' => ?ActivityTaskStartedEventAttributes,
    ?'activity_task_timed_out_event_attributes' => ?ActivityTaskTimedOutEventAttributes,
    ?'cancel_timer_failed_event_attributes' => ?CancelTimerFailedEventAttributes,
    ?'cancel_workflow_execution_failed_event_attributes' => ?CancelWorkflowExecutionFailedEventAttributes,
    ?'child_workflow_execution_canceled_event_attributes' => ?ChildWorkflowExecutionCanceledEventAttributes,
    ?'child_workflow_execution_completed_event_attributes' => ?ChildWorkflowExecutionCompletedEventAttributes,
    ?'child_workflow_execution_failed_event_attributes' => ?ChildWorkflowExecutionFailedEventAttributes,
    ?'child_workflow_execution_started_event_attributes' => ?ChildWorkflowExecutionStartedEventAttributes,
    ?'child_workflow_execution_terminated_event_attributes' => ?ChildWorkflowExecutionTerminatedEventAttributes,
    ?'child_workflow_execution_timed_out_event_attributes' => ?ChildWorkflowExecutionTimedOutEventAttributes,
    ?'complete_workflow_execution_failed_event_attributes' => ?CompleteWorkflowExecutionFailedEventAttributes,
    ?'continue_as_new_workflow_execution_failed_event_attributes' => ?ContinueAsNewWorkflowExecutionFailedEventAttributes,
    ?'decision_task_completed_event_attributes' => ?DecisionTaskCompletedEventAttributes,
    ?'decision_task_scheduled_event_attributes' => ?DecisionTaskScheduledEventAttributes,
    ?'decision_task_started_event_attributes' => ?DecisionTaskStartedEventAttributes,
    ?'decision_task_timed_out_event_attributes' => ?DecisionTaskTimedOutEventAttributes,
    ?'event_id' => ?EventId,
    ?'event_timestamp' => ?Timestamp,
    ?'event_type' => ?EventType,
    ?'external_workflow_execution_cancel_requested_event_attributes' => ?ExternalWorkflowExecutionCancelRequestedEventAttributes,
    ?'external_workflow_execution_signaled_event_attributes' => ?ExternalWorkflowExecutionSignaledEventAttributes,
    ?'fail_workflow_execution_failed_event_attributes' => ?FailWorkflowExecutionFailedEventAttributes,
    ?'lambda_function_completed_event_attributes' => ?LambdaFunctionCompletedEventAttributes,
    ?'lambda_function_failed_event_attributes' => ?LambdaFunctionFailedEventAttributes,
    ?'lambda_function_scheduled_event_attributes' => ?LambdaFunctionScheduledEventAttributes,
    ?'lambda_function_started_event_attributes' => ?LambdaFunctionStartedEventAttributes,
    ?'lambda_function_timed_out_event_attributes' => ?LambdaFunctionTimedOutEventAttributes,
    ?'marker_recorded_event_attributes' => ?MarkerRecordedEventAttributes,
    ?'record_marker_failed_event_attributes' => ?RecordMarkerFailedEventAttributes,
    ?'request_cancel_activity_task_failed_event_attributes' => ?RequestCancelActivityTaskFailedEventAttributes,
    ?'request_cancel_external_workflow_execution_failed_event_attributes' => ?RequestCancelExternalWorkflowExecutionFailedEventAttributes,
    ?'request_cancel_external_workflow_execution_initiated_event_attributes' => ?RequestCancelExternalWorkflowExecutionInitiatedEventAttributes,
    ?'schedule_activity_task_failed_event_attributes' => ?ScheduleActivityTaskFailedEventAttributes,
    ?'schedule_lambda_function_failed_event_attributes' => ?ScheduleLambdaFunctionFailedEventAttributes,
    ?'signal_external_workflow_execution_failed_event_attributes' => ?SignalExternalWorkflowExecutionFailedEventAttributes,
    ?'signal_external_workflow_execution_initiated_event_attributes' => ?SignalExternalWorkflowExecutionInitiatedEventAttributes,
    ?'start_child_workflow_execution_failed_event_attributes' => ?StartChildWorkflowExecutionFailedEventAttributes,
    ?'start_child_workflow_execution_initiated_event_attributes' => ?StartChildWorkflowExecutionInitiatedEventAttributes,
    ?'start_lambda_function_failed_event_attributes' => ?StartLambdaFunctionFailedEventAttributes,
    ?'start_timer_failed_event_attributes' => ?StartTimerFailedEventAttributes,
    ?'timer_canceled_event_attributes' => ?TimerCanceledEventAttributes,
    ?'timer_fired_event_attributes' => ?TimerFiredEventAttributes,
    ?'timer_started_event_attributes' => ?TimerStartedEventAttributes,
    ?'workflow_execution_cancel_requested_event_attributes' => ?WorkflowExecutionCancelRequestedEventAttributes,
    ?'workflow_execution_canceled_event_attributes' => ?WorkflowExecutionCanceledEventAttributes,
    ?'workflow_execution_completed_event_attributes' => ?WorkflowExecutionCompletedEventAttributes,
    ?'workflow_execution_continued_as_new_event_attributes' => ?WorkflowExecutionContinuedAsNewEventAttributes,
    ?'workflow_execution_failed_event_attributes' => ?WorkflowExecutionFailedEventAttributes,
    ?'workflow_execution_signaled_event_attributes' => ?WorkflowExecutionSignaledEventAttributes,
    ?'workflow_execution_started_event_attributes' => ?WorkflowExecutionStartedEventAttributes,
    ?'workflow_execution_terminated_event_attributes' => ?WorkflowExecutionTerminatedEventAttributes,
    ?'workflow_execution_timed_out_event_attributes' => ?WorkflowExecutionTimedOutEventAttributes,
  ) $s = shape()) {
    $this->activity_task_cancel_requested_event_attributes = $s['activity_task_cancel_requested_event_attributes'] ?? null;
    $this->activity_task_canceled_event_attributes = $s['activity_task_canceled_event_attributes'] ?? null;
    $this->activity_task_completed_event_attributes = $s['activity_task_completed_event_attributes'] ?? null;
    $this->activity_task_failed_event_attributes = $s['activity_task_failed_event_attributes'] ?? null;
    $this->activity_task_scheduled_event_attributes = $s['activity_task_scheduled_event_attributes'] ?? null;
    $this->activity_task_started_event_attributes = $s['activity_task_started_event_attributes'] ?? null;
    $this->activity_task_timed_out_event_attributes = $s['activity_task_timed_out_event_attributes'] ?? null;
    $this->cancel_timer_failed_event_attributes = $s['cancel_timer_failed_event_attributes'] ?? null;
    $this->cancel_workflow_execution_failed_event_attributes = $s['cancel_workflow_execution_failed_event_attributes'] ?? null;
    $this->child_workflow_execution_canceled_event_attributes = $s['child_workflow_execution_canceled_event_attributes'] ?? null;
    $this->child_workflow_execution_completed_event_attributes = $s['child_workflow_execution_completed_event_attributes'] ?? null;
    $this->child_workflow_execution_failed_event_attributes = $s['child_workflow_execution_failed_event_attributes'] ?? null;
    $this->child_workflow_execution_started_event_attributes = $s['child_workflow_execution_started_event_attributes'] ?? null;
    $this->child_workflow_execution_terminated_event_attributes = $s['child_workflow_execution_terminated_event_attributes'] ?? null;
    $this->child_workflow_execution_timed_out_event_attributes = $s['child_workflow_execution_timed_out_event_attributes'] ?? null;
    $this->complete_workflow_execution_failed_event_attributes = $s['complete_workflow_execution_failed_event_attributes'] ?? null;
    $this->continue_as_new_workflow_execution_failed_event_attributes = $s['continue_as_new_workflow_execution_failed_event_attributes'] ?? null;
    $this->decision_task_completed_event_attributes = $s['decision_task_completed_event_attributes'] ?? null;
    $this->decision_task_scheduled_event_attributes = $s['decision_task_scheduled_event_attributes'] ?? null;
    $this->decision_task_started_event_attributes = $s['decision_task_started_event_attributes'] ?? null;
    $this->decision_task_timed_out_event_attributes = $s['decision_task_timed_out_event_attributes'] ?? null;
    $this->event_id = $s['event_id'] ?? 0;
    $this->event_timestamp = $s['event_timestamp'] ?? 0;
    $this->event_type = $s['event_type'] ?? '';
    $this->external_workflow_execution_cancel_requested_event_attributes = $s['external_workflow_execution_cancel_requested_event_attributes'] ?? null;
    $this->external_workflow_execution_signaled_event_attributes = $s['external_workflow_execution_signaled_event_attributes'] ?? null;
    $this->fail_workflow_execution_failed_event_attributes = $s['fail_workflow_execution_failed_event_attributes'] ?? null;
    $this->lambda_function_completed_event_attributes = $s['lambda_function_completed_event_attributes'] ?? null;
    $this->lambda_function_failed_event_attributes = $s['lambda_function_failed_event_attributes'] ?? null;
    $this->lambda_function_scheduled_event_attributes = $s['lambda_function_scheduled_event_attributes'] ?? null;
    $this->lambda_function_started_event_attributes = $s['lambda_function_started_event_attributes'] ?? null;
    $this->lambda_function_timed_out_event_attributes = $s['lambda_function_timed_out_event_attributes'] ?? null;
    $this->marker_recorded_event_attributes = $s['marker_recorded_event_attributes'] ?? null;
    $this->record_marker_failed_event_attributes = $s['record_marker_failed_event_attributes'] ?? null;
    $this->request_cancel_activity_task_failed_event_attributes = $s['request_cancel_activity_task_failed_event_attributes'] ?? null;
    $this->request_cancel_external_workflow_execution_failed_event_attributes = $s['request_cancel_external_workflow_execution_failed_event_attributes'] ?? null;
    $this->request_cancel_external_workflow_execution_initiated_event_attributes = $s['request_cancel_external_workflow_execution_initiated_event_attributes'] ?? null;
    $this->schedule_activity_task_failed_event_attributes = $s['schedule_activity_task_failed_event_attributes'] ?? null;
    $this->schedule_lambda_function_failed_event_attributes = $s['schedule_lambda_function_failed_event_attributes'] ?? null;
    $this->signal_external_workflow_execution_failed_event_attributes = $s['signal_external_workflow_execution_failed_event_attributes'] ?? null;
    $this->signal_external_workflow_execution_initiated_event_attributes = $s['signal_external_workflow_execution_initiated_event_attributes'] ?? null;
    $this->start_child_workflow_execution_failed_event_attributes = $s['start_child_workflow_execution_failed_event_attributes'] ?? null;
    $this->start_child_workflow_execution_initiated_event_attributes = $s['start_child_workflow_execution_initiated_event_attributes'] ?? null;
    $this->start_lambda_function_failed_event_attributes = $s['start_lambda_function_failed_event_attributes'] ?? null;
    $this->start_timer_failed_event_attributes = $s['start_timer_failed_event_attributes'] ?? null;
    $this->timer_canceled_event_attributes = $s['timer_canceled_event_attributes'] ?? null;
    $this->timer_fired_event_attributes = $s['timer_fired_event_attributes'] ?? null;
    $this->timer_started_event_attributes = $s['timer_started_event_attributes'] ?? null;
    $this->workflow_execution_cancel_requested_event_attributes = $s['workflow_execution_cancel_requested_event_attributes'] ?? null;
    $this->workflow_execution_canceled_event_attributes = $s['workflow_execution_canceled_event_attributes'] ?? null;
    $this->workflow_execution_completed_event_attributes = $s['workflow_execution_completed_event_attributes'] ?? null;
    $this->workflow_execution_continued_as_new_event_attributes = $s['workflow_execution_continued_as_new_event_attributes'] ?? null;
    $this->workflow_execution_failed_event_attributes = $s['workflow_execution_failed_event_attributes'] ?? null;
    $this->workflow_execution_signaled_event_attributes = $s['workflow_execution_signaled_event_attributes'] ?? null;
    $this->workflow_execution_started_event_attributes = $s['workflow_execution_started_event_attributes'] ?? null;
    $this->workflow_execution_terminated_event_attributes = $s['workflow_execution_terminated_event_attributes'] ?? null;
    $this->workflow_execution_timed_out_event_attributes = $s['workflow_execution_timed_out_event_attributes'] ?? null;
  }
}

type HistoryEventList = vec<HistoryEvent>;

type Identity = string;

class LambdaFunctionCompletedEventAttributes {
  public ?Data $result;
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;

  public function __construct(shape(
    ?'result' => ?Data,
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
  ) $s = shape()) {
    $this->result = $s['result'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
  }
}

class LambdaFunctionFailedEventAttributes {
  public ?Data $details;
  public ?FailureReason $reason;
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'reason' => ?FailureReason,
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
  }
}

class LambdaFunctionScheduledEventAttributes {
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?FunctionId $id;
  public ?FunctionInput $input;
  public ?FunctionName $name;
  public ?DurationInSecondsOptional $start_to_close_timeout;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'id' => ?FunctionId,
    ?'input' => ?FunctionInput,
    ?'name' => ?FunctionName,
    ?'start_to_close_timeout' => ?DurationInSecondsOptional,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->start_to_close_timeout = $s['start_to_close_timeout'] ?? '';
  }
}

class LambdaFunctionStartedEventAttributes {
  public ?EventId $scheduled_event_id;

  public function __construct(shape(
    ?'scheduled_event_id' => ?EventId,
  ) $s = shape()) {
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
  }
}

class LambdaFunctionTimedOutEventAttributes {
  public ?EventId $scheduled_event_id;
  public ?EventId $started_event_id;
  public ?LambdaFunctionTimeoutType $timeout_type;

  public function __construct(shape(
    ?'scheduled_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'timeout_type' => ?LambdaFunctionTimeoutType,
  ) $s = shape()) {
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->timeout_type = $s['timeout_type'] ?? '';
  }
}

type LambdaFunctionTimeoutType = string;

class LimitExceededFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LimitedData = string;

class ListActivityTypesInput {
  public ?DomainName $domain;
  public ?PageSize $maximum_page_size;
  public ?Name $name;
  public ?PageToken $next_page_token;
  public ?RegistrationStatus $registration_status;
  public ?ReverseOrder $reverse_order;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'maximum_page_size' => ?PageSize,
    ?'name' => ?Name,
    ?'next_page_token' => ?PageToken,
    ?'registration_status' => ?RegistrationStatus,
    ?'reverse_order' => ?ReverseOrder,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->maximum_page_size = $s['maximum_page_size'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->registration_status = $s['registration_status'] ?? '';
    $this->reverse_order = $s['reverse_order'] ?? false;
  }
}

class ListClosedWorkflowExecutionsInput {
  public ?CloseStatusFilter $close_status_filter;
  public ?ExecutionTimeFilter $close_time_filter;
  public ?DomainName $domain;
  public ?WorkflowExecutionFilter $execution_filter;
  public ?PageSize $maximum_page_size;
  public ?PageToken $next_page_token;
  public ?ReverseOrder $reverse_order;
  public ?ExecutionTimeFilter $start_time_filter;
  public ?TagFilter $tag_filter;
  public ?WorkflowTypeFilter $type_filter;

  public function __construct(shape(
    ?'close_status_filter' => ?CloseStatusFilter,
    ?'close_time_filter' => ?ExecutionTimeFilter,
    ?'domain' => ?DomainName,
    ?'execution_filter' => ?WorkflowExecutionFilter,
    ?'maximum_page_size' => ?PageSize,
    ?'next_page_token' => ?PageToken,
    ?'reverse_order' => ?ReverseOrder,
    ?'start_time_filter' => ?ExecutionTimeFilter,
    ?'tag_filter' => ?TagFilter,
    ?'type_filter' => ?WorkflowTypeFilter,
  ) $s = shape()) {
    $this->close_status_filter = $s['close_status_filter'] ?? null;
    $this->close_time_filter = $s['close_time_filter'] ?? null;
    $this->domain = $s['domain'] ?? '';
    $this->execution_filter = $s['execution_filter'] ?? null;
    $this->maximum_page_size = $s['maximum_page_size'] ?? 0;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->reverse_order = $s['reverse_order'] ?? false;
    $this->start_time_filter = $s['start_time_filter'] ?? null;
    $this->tag_filter = $s['tag_filter'] ?? null;
    $this->type_filter = $s['type_filter'] ?? null;
  }
}

class ListDomainsInput {
  public ?PageSize $maximum_page_size;
  public ?PageToken $next_page_token;
  public ?RegistrationStatus $registration_status;
  public ?ReverseOrder $reverse_order;

  public function __construct(shape(
    ?'maximum_page_size' => ?PageSize,
    ?'next_page_token' => ?PageToken,
    ?'registration_status' => ?RegistrationStatus,
    ?'reverse_order' => ?ReverseOrder,
  ) $s = shape()) {
    $this->maximum_page_size = $s['maximum_page_size'] ?? 0;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->registration_status = $s['registration_status'] ?? '';
    $this->reverse_order = $s['reverse_order'] ?? false;
  }
}

class ListOpenWorkflowExecutionsInput {
  public ?DomainName $domain;
  public ?WorkflowExecutionFilter $execution_filter;
  public ?PageSize $maximum_page_size;
  public ?PageToken $next_page_token;
  public ?ReverseOrder $reverse_order;
  public ?ExecutionTimeFilter $start_time_filter;
  public ?TagFilter $tag_filter;
  public ?WorkflowTypeFilter $type_filter;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'execution_filter' => ?WorkflowExecutionFilter,
    ?'maximum_page_size' => ?PageSize,
    ?'next_page_token' => ?PageToken,
    ?'reverse_order' => ?ReverseOrder,
    ?'start_time_filter' => ?ExecutionTimeFilter,
    ?'tag_filter' => ?TagFilter,
    ?'type_filter' => ?WorkflowTypeFilter,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->execution_filter = $s['execution_filter'] ?? null;
    $this->maximum_page_size = $s['maximum_page_size'] ?? 0;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->reverse_order = $s['reverse_order'] ?? false;
    $this->start_time_filter = $s['start_time_filter'] ?? null;
    $this->tag_filter = $s['tag_filter'] ?? null;
    $this->type_filter = $s['type_filter'] ?? null;
  }
}

class ListTagsForResourceInput {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceOutput {
  public ?ResourceTagList $tags;

  public function __construct(shape(
    ?'tags' => ?ResourceTagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListWorkflowTypesInput {
  public ?DomainName $domain;
  public ?PageSize $maximum_page_size;
  public ?Name $name;
  public ?PageToken $next_page_token;
  public ?RegistrationStatus $registration_status;
  public ?ReverseOrder $reverse_order;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'maximum_page_size' => ?PageSize,
    ?'name' => ?Name,
    ?'next_page_token' => ?PageToken,
    ?'registration_status' => ?RegistrationStatus,
    ?'reverse_order' => ?ReverseOrder,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->maximum_page_size = $s['maximum_page_size'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->registration_status = $s['registration_status'] ?? '';
    $this->reverse_order = $s['reverse_order'] ?? false;
  }
}

type MarkerName = string;

class MarkerRecordedEventAttributes {
  public ?EventId $decision_task_completed_event_id;
  public ?Data $details;
  public ?MarkerName $marker_name;

  public function __construct(shape(
    ?'decision_task_completed_event_id' => ?EventId,
    ?'details' => ?Data,
    ?'marker_name' => ?MarkerName,
  ) $s = shape()) {
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->details = $s['details'] ?? '';
    $this->marker_name = $s['marker_name'] ?? '';
  }
}

type Name = string;

type OpenDecisionTasksCount = int;

class OperationNotPermittedFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PageSize = int;

type PageToken = string;

class PendingTaskCount {
  public ?Count $count;
  public ?Truncated $truncated;

  public function __construct(shape(
    ?'count' => ?Count,
    ?'truncated' => ?Truncated,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->truncated = $s['truncated'] ?? false;
  }
}

class PollForActivityTaskInput {
  public ?DomainName $domain;
  public ?Identity $identity;
  public ?TaskList $task_list;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'identity' => ?Identity,
    ?'task_list' => ?TaskList,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->identity = $s['identity'] ?? '';
    $this->task_list = $s['task_list'] ?? null;
  }
}

class PollForDecisionTaskInput {
  public ?DomainName $domain;
  public ?Identity $identity;
  public ?PageSize $maximum_page_size;
  public ?PageToken $next_page_token;
  public ?ReverseOrder $reverse_order;
  public ?TaskList $task_list;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'identity' => ?Identity,
    ?'maximum_page_size' => ?PageSize,
    ?'next_page_token' => ?PageToken,
    ?'reverse_order' => ?ReverseOrder,
    ?'task_list' => ?TaskList,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->identity = $s['identity'] ?? '';
    $this->maximum_page_size = $s['maximum_page_size'] ?? 0;
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->reverse_order = $s['reverse_order'] ?? false;
    $this->task_list = $s['task_list'] ?? null;
  }
}

class RecordActivityTaskHeartbeatInput {
  public ?LimitedData $details;
  public ?TaskToken $task_token;

  public function __construct(shape(
    ?'details' => ?LimitedData,
    ?'task_token' => ?TaskToken,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->task_token = $s['task_token'] ?? '';
  }
}

class RecordMarkerDecisionAttributes {
  public ?Data $details;
  public ?MarkerName $marker_name;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'marker_name' => ?MarkerName,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->marker_name = $s['marker_name'] ?? '';
  }
}

type RecordMarkerFailedCause = string;

class RecordMarkerFailedEventAttributes {
  public ?RecordMarkerFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;
  public ?MarkerName $marker_name;

  public function __construct(shape(
    ?'cause' => ?RecordMarkerFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'marker_name' => ?MarkerName,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->marker_name = $s['marker_name'] ?? '';
  }
}

class RegisterActivityTypeInput {
  public ?DurationInSecondsOptional $default_task_heartbeat_timeout;
  public ?TaskList $default_task_list;
  public ?TaskPriority $default_task_priority;
  public ?DurationInSecondsOptional $default_task_schedule_to_close_timeout;
  public ?DurationInSecondsOptional $default_task_schedule_to_start_timeout;
  public ?DurationInSecondsOptional $default_task_start_to_close_timeout;
  public ?Description $description;
  public ?DomainName $domain;
  public ?Name $name;
  public ?Version $version;

  public function __construct(shape(
    ?'default_task_heartbeat_timeout' => ?DurationInSecondsOptional,
    ?'default_task_list' => ?TaskList,
    ?'default_task_priority' => ?TaskPriority,
    ?'default_task_schedule_to_close_timeout' => ?DurationInSecondsOptional,
    ?'default_task_schedule_to_start_timeout' => ?DurationInSecondsOptional,
    ?'default_task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'description' => ?Description,
    ?'domain' => ?DomainName,
    ?'name' => ?Name,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->default_task_heartbeat_timeout = $s['default_task_heartbeat_timeout'] ?? '';
    $this->default_task_list = $s['default_task_list'] ?? null;
    $this->default_task_priority = $s['default_task_priority'] ?? '';
    $this->default_task_schedule_to_close_timeout = $s['default_task_schedule_to_close_timeout'] ?? '';
    $this->default_task_schedule_to_start_timeout = $s['default_task_schedule_to_start_timeout'] ?? '';
    $this->default_task_start_to_close_timeout = $s['default_task_start_to_close_timeout'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class RegisterDomainInput {
  public ?Description $description;
  public ?DomainName $name;
  public ?ResourceTagList $tags;
  public ?DurationInDays $workflow_execution_retention_period_in_days;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'name' => ?DomainName,
    ?'tags' => ?ResourceTagList,
    ?'workflow_execution_retention_period_in_days' => ?DurationInDays,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->workflow_execution_retention_period_in_days = $s['workflow_execution_retention_period_in_days'] ?? '';
  }
}

class RegisterWorkflowTypeInput {
  public ?ChildPolicy $default_child_policy;
  public ?DurationInSecondsOptional $default_execution_start_to_close_timeout;
  public ?Arn $default_lambda_role;
  public ?TaskList $default_task_list;
  public ?TaskPriority $default_task_priority;
  public ?DurationInSecondsOptional $default_task_start_to_close_timeout;
  public ?Description $description;
  public ?DomainName $domain;
  public ?Name $name;
  public ?Version $version;

  public function __construct(shape(
    ?'default_child_policy' => ?ChildPolicy,
    ?'default_execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'default_lambda_role' => ?Arn,
    ?'default_task_list' => ?TaskList,
    ?'default_task_priority' => ?TaskPriority,
    ?'default_task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'description' => ?Description,
    ?'domain' => ?DomainName,
    ?'name' => ?Name,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->default_child_policy = $s['default_child_policy'] ?? '';
    $this->default_execution_start_to_close_timeout = $s['default_execution_start_to_close_timeout'] ?? '';
    $this->default_lambda_role = $s['default_lambda_role'] ?? '';
    $this->default_task_list = $s['default_task_list'] ?? null;
    $this->default_task_priority = $s['default_task_priority'] ?? '';
    $this->default_task_start_to_close_timeout = $s['default_task_start_to_close_timeout'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type RegistrationStatus = string;

class RequestCancelActivityTaskDecisionAttributes {
  public ?ActivityId $activity_id;

  public function __construct(shape(
    ?'activity_id' => ?ActivityId,
  ) $s = shape()) {
    $this->activity_id = $s['activity_id'] ?? '';
  }
}

type RequestCancelActivityTaskFailedCause = string;

class RequestCancelActivityTaskFailedEventAttributes {
  public ?ActivityId $activity_id;
  public ?RequestCancelActivityTaskFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;

  public function __construct(shape(
    ?'activity_id' => ?ActivityId,
    ?'cause' => ?RequestCancelActivityTaskFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
  ) $s = shape()) {
    $this->activity_id = $s['activity_id'] ?? '';
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
  }
}

class RequestCancelExternalWorkflowExecutionDecisionAttributes {
  public ?Data $control;
  public ?WorkflowRunIdOptional $run_id;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->run_id = $s['run_id'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

type RequestCancelExternalWorkflowExecutionFailedCause = string;

class RequestCancelExternalWorkflowExecutionFailedEventAttributes {
  public ?RequestCancelExternalWorkflowExecutionFailedCause $cause;
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?EventId $initiated_event_id;
  public ?WorkflowRunIdOptional $run_id;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'cause' => ?RequestCancelExternalWorkflowExecutionFailedCause,
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'initiated_event_id' => ?EventId,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->run_id = $s['run_id'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class RequestCancelExternalWorkflowExecutionInitiatedEventAttributes {
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?WorkflowRunIdOptional $run_id;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->run_id = $s['run_id'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class RequestCancelWorkflowExecutionInput {
  public ?DomainName $domain;
  public ?WorkflowRunIdOptional $run_id;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->run_id = $s['run_id'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class ResourceTag {
  public ?ResourceTagKey $key;
  public ?ResourceTagValue $value;

  public function __construct(shape(
    ?'key' => ?ResourceTagKey,
    ?'value' => ?ResourceTagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ResourceTagKey = string;

type ResourceTagKeyList = vec<ResourceTagKey>;

type ResourceTagList = vec<ResourceTag>;

type ResourceTagValue = string;

class RespondActivityTaskCanceledInput {
  public ?Data $details;
  public ?TaskToken $task_token;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'task_token' => ?TaskToken,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->task_token = $s['task_token'] ?? '';
  }
}

class RespondActivityTaskCompletedInput {
  public ?Data $result;
  public ?TaskToken $task_token;

  public function __construct(shape(
    ?'result' => ?Data,
    ?'task_token' => ?TaskToken,
  ) $s = shape()) {
    $this->result = $s['result'] ?? '';
    $this->task_token = $s['task_token'] ?? '';
  }
}

class RespondActivityTaskFailedInput {
  public ?Data $details;
  public ?FailureReason $reason;
  public ?TaskToken $task_token;

  public function __construct(shape(
    ?'details' => ?Data,
    ?'reason' => ?FailureReason,
    ?'task_token' => ?TaskToken,
  ) $s = shape()) {
    $this->details = $s['details'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->task_token = $s['task_token'] ?? '';
  }
}

class RespondDecisionTaskCompletedInput {
  public ?DecisionList $decisions;
  public ?Data $execution_context;
  public ?TaskToken $task_token;

  public function __construct(shape(
    ?'decisions' => ?DecisionList,
    ?'execution_context' => ?Data,
    ?'task_token' => ?TaskToken,
  ) $s = shape()) {
    $this->decisions = $s['decisions'] ?? vec[];
    $this->execution_context = $s['execution_context'] ?? '';
    $this->task_token = $s['task_token'] ?? '';
  }
}

type ReverseOrder = bool;

class Run {
  public ?WorkflowRunId $run_id;

  public function __construct(shape(
    ?'run_id' => ?WorkflowRunId,
  ) $s = shape()) {
    $this->run_id = $s['run_id'] ?? '';
  }
}

class ScheduleActivityTaskDecisionAttributes {
  public ?ActivityId $activity_id;
  public ?ActivityType $activity_type;
  public ?Data $control;
  public ?DurationInSecondsOptional $heartbeat_timeout;
  public ?Data $input;
  public ?DurationInSecondsOptional $schedule_to_close_timeout;
  public ?DurationInSecondsOptional $schedule_to_start_timeout;
  public ?DurationInSecondsOptional $start_to_close_timeout;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;

  public function __construct(shape(
    ?'activity_id' => ?ActivityId,
    ?'activity_type' => ?ActivityType,
    ?'control' => ?Data,
    ?'heartbeat_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'schedule_to_close_timeout' => ?DurationInSecondsOptional,
    ?'schedule_to_start_timeout' => ?DurationInSecondsOptional,
    ?'start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
  ) $s = shape()) {
    $this->activity_id = $s['activity_id'] ?? '';
    $this->activity_type = $s['activity_type'] ?? null;
    $this->control = $s['control'] ?? '';
    $this->heartbeat_timeout = $s['heartbeat_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->schedule_to_close_timeout = $s['schedule_to_close_timeout'] ?? '';
    $this->schedule_to_start_timeout = $s['schedule_to_start_timeout'] ?? '';
    $this->start_to_close_timeout = $s['start_to_close_timeout'] ?? '';
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
  }
}

type ScheduleActivityTaskFailedCause = string;

class ScheduleActivityTaskFailedEventAttributes {
  public ?ActivityId $activity_id;
  public ?ActivityType $activity_type;
  public ?ScheduleActivityTaskFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;

  public function __construct(shape(
    ?'activity_id' => ?ActivityId,
    ?'activity_type' => ?ActivityType,
    ?'cause' => ?ScheduleActivityTaskFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
  ) $s = shape()) {
    $this->activity_id = $s['activity_id'] ?? '';
    $this->activity_type = $s['activity_type'] ?? null;
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
  }
}

class ScheduleLambdaFunctionDecisionAttributes {
  public ?Data $control;
  public ?FunctionId $id;
  public ?FunctionInput $input;
  public ?FunctionName $name;
  public ?DurationInSecondsOptional $start_to_close_timeout;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'id' => ?FunctionId,
    ?'input' => ?FunctionInput,
    ?'name' => ?FunctionName,
    ?'start_to_close_timeout' => ?DurationInSecondsOptional,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->start_to_close_timeout = $s['start_to_close_timeout'] ?? '';
  }
}

type ScheduleLambdaFunctionFailedCause = string;

class ScheduleLambdaFunctionFailedEventAttributes {
  public ?ScheduleLambdaFunctionFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;
  public ?FunctionId $id;
  public ?FunctionName $name;

  public function __construct(shape(
    ?'cause' => ?ScheduleLambdaFunctionFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'id' => ?FunctionId,
    ?'name' => ?FunctionName,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class SignalExternalWorkflowExecutionDecisionAttributes {
  public ?Data $control;
  public ?Data $input;
  public ?WorkflowRunIdOptional $run_id;
  public ?SignalName $signal_name;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'input' => ?Data,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'signal_name' => ?SignalName,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->run_id = $s['run_id'] ?? '';
    $this->signal_name = $s['signal_name'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

type SignalExternalWorkflowExecutionFailedCause = string;

class SignalExternalWorkflowExecutionFailedEventAttributes {
  public ?SignalExternalWorkflowExecutionFailedCause $cause;
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?EventId $initiated_event_id;
  public ?WorkflowRunIdOptional $run_id;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'cause' => ?SignalExternalWorkflowExecutionFailedCause,
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'initiated_event_id' => ?EventId,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->run_id = $s['run_id'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class SignalExternalWorkflowExecutionInitiatedEventAttributes {
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?Data $input;
  public ?WorkflowRunIdOptional $run_id;
  public ?SignalName $signal_name;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'input' => ?Data,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'signal_name' => ?SignalName,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->input = $s['input'] ?? '';
    $this->run_id = $s['run_id'] ?? '';
    $this->signal_name = $s['signal_name'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

type SignalName = string;

class SignalWorkflowExecutionInput {
  public ?DomainName $domain;
  public ?Data $input;
  public ?WorkflowRunIdOptional $run_id;
  public ?SignalName $signal_name;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'input' => ?Data,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'signal_name' => ?SignalName,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->run_id = $s['run_id'] ?? '';
    $this->signal_name = $s['signal_name'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class StartChildWorkflowExecutionDecisionAttributes {
  public ?ChildPolicy $child_policy;
  public ?Data $control;
  public ?DurationInSecondsOptional $execution_start_to_close_timeout;
  public ?Data $input;
  public ?Arn $lambda_role;
  public ?TagList $tag_list;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;
  public ?DurationInSecondsOptional $task_start_to_close_timeout;
  public ?WorkflowId $workflow_id;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'control' => ?Data,
    ?'execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'lambda_role' => ?Arn,
    ?'tag_list' => ?TagList,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
    ?'task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'workflow_id' => ?WorkflowId,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->control = $s['control'] ?? '';
    $this->execution_start_to_close_timeout = $s['execution_start_to_close_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->lambda_role = $s['lambda_role'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
    $this->task_start_to_close_timeout = $s['task_start_to_close_timeout'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type StartChildWorkflowExecutionFailedCause = string;

class StartChildWorkflowExecutionFailedEventAttributes {
  public ?StartChildWorkflowExecutionFailedCause $cause;
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?EventId $initiated_event_id;
  public ?WorkflowId $workflow_id;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'cause' => ?StartChildWorkflowExecutionFailedCause,
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'initiated_event_id' => ?EventId,
    ?'workflow_id' => ?WorkflowId,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->initiated_event_id = $s['initiated_event_id'] ?? 0;
    $this->workflow_id = $s['workflow_id'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class StartChildWorkflowExecutionInitiatedEventAttributes {
  public ?ChildPolicy $child_policy;
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?DurationInSecondsOptional $execution_start_to_close_timeout;
  public ?Data $input;
  public ?Arn $lambda_role;
  public ?TagList $tag_list;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;
  public ?DurationInSecondsOptional $task_start_to_close_timeout;
  public ?WorkflowId $workflow_id;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'lambda_role' => ?Arn,
    ?'tag_list' => ?TagList,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
    ?'task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'workflow_id' => ?WorkflowId,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->execution_start_to_close_timeout = $s['execution_start_to_close_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->lambda_role = $s['lambda_role'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
    $this->task_start_to_close_timeout = $s['task_start_to_close_timeout'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type StartLambdaFunctionFailedCause = string;

class StartLambdaFunctionFailedEventAttributes {
  public ?StartLambdaFunctionFailedCause $cause;
  public ?CauseMessage $message;
  public ?EventId $scheduled_event_id;

  public function __construct(shape(
    ?'cause' => ?StartLambdaFunctionFailedCause,
    ?'message' => ?CauseMessage,
    ?'scheduled_event_id' => ?EventId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->scheduled_event_id = $s['scheduled_event_id'] ?? 0;
  }
}

class StartTimerDecisionAttributes {
  public ?Data $control;
  public ?DurationInSeconds $start_to_fire_timeout;
  public ?TimerId $timer_id;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'start_to_fire_timeout' => ?DurationInSeconds,
    ?'timer_id' => ?TimerId,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->start_to_fire_timeout = $s['start_to_fire_timeout'] ?? '';
    $this->timer_id = $s['timer_id'] ?? '';
  }
}

type StartTimerFailedCause = string;

class StartTimerFailedEventAttributes {
  public ?StartTimerFailedCause $cause;
  public ?EventId $decision_task_completed_event_id;
  public ?TimerId $timer_id;

  public function __construct(shape(
    ?'cause' => ?StartTimerFailedCause,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'timer_id' => ?TimerId,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->timer_id = $s['timer_id'] ?? '';
  }
}

class StartWorkflowExecutionInput {
  public ?ChildPolicy $child_policy;
  public ?DomainName $domain;
  public ?DurationInSecondsOptional $execution_start_to_close_timeout;
  public ?Data $input;
  public ?Arn $lambda_role;
  public ?TagList $tag_list;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;
  public ?DurationInSecondsOptional $task_start_to_close_timeout;
  public ?WorkflowId $workflow_id;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'domain' => ?DomainName,
    ?'execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'lambda_role' => ?Arn,
    ?'tag_list' => ?TagList,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
    ?'task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'workflow_id' => ?WorkflowId,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->execution_start_to_close_timeout = $s['execution_start_to_close_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->lambda_role = $s['lambda_role'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
    $this->task_start_to_close_timeout = $s['task_start_to_close_timeout'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type Tag = string;

class TagFilter {
  public ?Tag $tag;

  public function __construct(shape(
    ?'tag' => ?Tag,
  ) $s = shape()) {
    $this->tag = $s['tag'] ?? '';
  }
}

type TagList = vec<Tag>;

class TagResourceInput {
  public ?Arn $resource_arn;
  public ?ResourceTagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tags' => ?ResourceTagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TaskList {
  public ?Name $name;

  public function __construct(shape(
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type TaskPriority = string;

type TaskToken = string;

type TerminateReason = string;

class TerminateWorkflowExecutionInput {
  public ?ChildPolicy $child_policy;
  public ?Data $details;
  public ?DomainName $domain;
  public ?TerminateReason $reason;
  public ?WorkflowRunIdOptional $run_id;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'details' => ?Data,
    ?'domain' => ?DomainName,
    ?'reason' => ?TerminateReason,
    ?'run_id' => ?WorkflowRunIdOptional,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->details = $s['details'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->run_id = $s['run_id'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class TimerCanceledEventAttributes {
  public ?EventId $decision_task_completed_event_id;
  public ?EventId $started_event_id;
  public ?TimerId $timer_id;

  public function __construct(shape(
    ?'decision_task_completed_event_id' => ?EventId,
    ?'started_event_id' => ?EventId,
    ?'timer_id' => ?TimerId,
  ) $s = shape()) {
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->timer_id = $s['timer_id'] ?? '';
  }
}

class TimerFiredEventAttributes {
  public ?EventId $started_event_id;
  public ?TimerId $timer_id;

  public function __construct(shape(
    ?'started_event_id' => ?EventId,
    ?'timer_id' => ?TimerId,
  ) $s = shape()) {
    $this->started_event_id = $s['started_event_id'] ?? 0;
    $this->timer_id = $s['timer_id'] ?? '';
  }
}

type TimerId = string;

class TimerStartedEventAttributes {
  public ?Data $control;
  public ?EventId $decision_task_completed_event_id;
  public ?DurationInSeconds $start_to_fire_timeout;
  public ?TimerId $timer_id;

  public function __construct(shape(
    ?'control' => ?Data,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'start_to_fire_timeout' => ?DurationInSeconds,
    ?'timer_id' => ?TimerId,
  ) $s = shape()) {
    $this->control = $s['control'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->start_to_fire_timeout = $s['start_to_fire_timeout'] ?? '';
    $this->timer_id = $s['timer_id'] ?? '';
  }
}

type Timestamp = int;

class TooManyTagsFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Truncated = bool;

class TypeAlreadyExistsFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TypeDeprecatedFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UndeprecateActivityTypeInput {
  public ?ActivityType $activity_type;
  public ?DomainName $domain;

  public function __construct(shape(
    ?'activity_type' => ?ActivityType,
    ?'domain' => ?DomainName,
  ) $s = shape()) {
    $this->activity_type = $s['activity_type'] ?? null;
    $this->domain = $s['domain'] ?? '';
  }
}

class UndeprecateDomainInput {
  public ?DomainName $name;

  public function __construct(shape(
    ?'name' => ?DomainName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class UndeprecateWorkflowTypeInput {
  public ?DomainName $domain;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'domain' => ?DomainName,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class UnknownResourceFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceInput {
  public ?Arn $resource_arn;
  public ?ResourceTagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tag_keys' => ?ResourceTagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

type Version = string;

type VersionOptional = string;

class WorkflowExecution {
  public ?WorkflowRunId $run_id;
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'run_id' => ?WorkflowRunId,
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->run_id = $s['run_id'] ?? '';
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class WorkflowExecutionAlreadyStartedFault {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type WorkflowExecutionCancelRequestedCause = string;

class WorkflowExecutionCancelRequestedEventAttributes {
  public ?WorkflowExecutionCancelRequestedCause $cause;
  public ?EventId $external_initiated_event_id;
  public ?WorkflowExecution $external_workflow_execution;

  public function __construct(shape(
    ?'cause' => ?WorkflowExecutionCancelRequestedCause,
    ?'external_initiated_event_id' => ?EventId,
    ?'external_workflow_execution' => ?WorkflowExecution,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->external_initiated_event_id = $s['external_initiated_event_id'] ?? 0;
    $this->external_workflow_execution = $s['external_workflow_execution'] ?? null;
  }
}

class WorkflowExecutionCanceledEventAttributes {
  public ?EventId $decision_task_completed_event_id;
  public ?Data $details;

  public function __construct(shape(
    ?'decision_task_completed_event_id' => ?EventId,
    ?'details' => ?Data,
  ) $s = shape()) {
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->details = $s['details'] ?? '';
  }
}

class WorkflowExecutionCompletedEventAttributes {
  public ?EventId $decision_task_completed_event_id;
  public ?Data $result;

  public function __construct(shape(
    ?'decision_task_completed_event_id' => ?EventId,
    ?'result' => ?Data,
  ) $s = shape()) {
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->result = $s['result'] ?? '';
  }
}

class WorkflowExecutionConfiguration {
  public ?ChildPolicy $child_policy;
  public ?DurationInSeconds $execution_start_to_close_timeout;
  public ?Arn $lambda_role;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;
  public ?DurationInSeconds $task_start_to_close_timeout;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'execution_start_to_close_timeout' => ?DurationInSeconds,
    ?'lambda_role' => ?Arn,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
    ?'task_start_to_close_timeout' => ?DurationInSeconds,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->execution_start_to_close_timeout = $s['execution_start_to_close_timeout'] ?? '';
    $this->lambda_role = $s['lambda_role'] ?? '';
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
    $this->task_start_to_close_timeout = $s['task_start_to_close_timeout'] ?? '';
  }
}

class WorkflowExecutionContinuedAsNewEventAttributes {
  public ?ChildPolicy $child_policy;
  public ?EventId $decision_task_completed_event_id;
  public ?DurationInSecondsOptional $execution_start_to_close_timeout;
  public ?Data $input;
  public ?Arn $lambda_role;
  public ?WorkflowRunId $new_execution_run_id;
  public ?TagList $tag_list;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;
  public ?DurationInSecondsOptional $task_start_to_close_timeout;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'decision_task_completed_event_id' => ?EventId,
    ?'execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'lambda_role' => ?Arn,
    ?'new_execution_run_id' => ?WorkflowRunId,
    ?'tag_list' => ?TagList,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
    ?'task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->execution_start_to_close_timeout = $s['execution_start_to_close_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->lambda_role = $s['lambda_role'] ?? '';
    $this->new_execution_run_id = $s['new_execution_run_id'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
    $this->task_start_to_close_timeout = $s['task_start_to_close_timeout'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

class WorkflowExecutionCount {
  public ?Count $count;
  public ?Truncated $truncated;

  public function __construct(shape(
    ?'count' => ?Count,
    ?'truncated' => ?Truncated,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->truncated = $s['truncated'] ?? false;
  }
}

class WorkflowExecutionDetail {
  public ?WorkflowExecutionConfiguration $execution_configuration;
  public ?WorkflowExecutionInfo $execution_info;
  public ?Timestamp $latest_activity_task_timestamp;
  public ?Data $latest_execution_context;
  public ?WorkflowExecutionOpenCounts $open_counts;

  public function __construct(shape(
    ?'execution_configuration' => ?WorkflowExecutionConfiguration,
    ?'execution_info' => ?WorkflowExecutionInfo,
    ?'latest_activity_task_timestamp' => ?Timestamp,
    ?'latest_execution_context' => ?Data,
    ?'open_counts' => ?WorkflowExecutionOpenCounts,
  ) $s = shape()) {
    $this->execution_configuration = $s['execution_configuration'] ?? null;
    $this->execution_info = $s['execution_info'] ?? null;
    $this->latest_activity_task_timestamp = $s['latest_activity_task_timestamp'] ?? 0;
    $this->latest_execution_context = $s['latest_execution_context'] ?? '';
    $this->open_counts = $s['open_counts'] ?? null;
  }
}

class WorkflowExecutionFailedEventAttributes {
  public ?EventId $decision_task_completed_event_id;
  public ?Data $details;
  public ?FailureReason $reason;

  public function __construct(shape(
    ?'decision_task_completed_event_id' => ?EventId,
    ?'details' => ?Data,
    ?'reason' => ?FailureReason,
  ) $s = shape()) {
    $this->decision_task_completed_event_id = $s['decision_task_completed_event_id'] ?? 0;
    $this->details = $s['details'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

class WorkflowExecutionFilter {
  public ?WorkflowId $workflow_id;

  public function __construct(shape(
    ?'workflow_id' => ?WorkflowId,
  ) $s = shape()) {
    $this->workflow_id = $s['workflow_id'] ?? '';
  }
}

class WorkflowExecutionInfo {
  public ?Canceled $cancel_requested;
  public ?CloseStatus $close_status;
  public ?Timestamp $close_timestamp;
  public ?WorkflowExecution $execution;
  public ?ExecutionStatus $execution_status;
  public ?WorkflowExecution $parent;
  public ?Timestamp $start_timestamp;
  public ?TagList $tag_list;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'cancel_requested' => ?Canceled,
    ?'close_status' => ?CloseStatus,
    ?'close_timestamp' => ?Timestamp,
    ?'execution' => ?WorkflowExecution,
    ?'execution_status' => ?ExecutionStatus,
    ?'parent' => ?WorkflowExecution,
    ?'start_timestamp' => ?Timestamp,
    ?'tag_list' => ?TagList,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->cancel_requested = $s['cancel_requested'] ?? false;
    $this->close_status = $s['close_status'] ?? '';
    $this->close_timestamp = $s['close_timestamp'] ?? 0;
    $this->execution = $s['execution'] ?? null;
    $this->execution_status = $s['execution_status'] ?? '';
    $this->parent = $s['parent'] ?? null;
    $this->start_timestamp = $s['start_timestamp'] ?? 0;
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type WorkflowExecutionInfoList = vec<WorkflowExecutionInfo>;

class WorkflowExecutionInfos {
  public ?WorkflowExecutionInfoList $execution_infos;
  public ?PageToken $next_page_token;

  public function __construct(shape(
    ?'execution_infos' => ?WorkflowExecutionInfoList,
    ?'next_page_token' => ?PageToken,
  ) $s = shape()) {
    $this->execution_infos = $s['execution_infos'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class WorkflowExecutionOpenCounts {
  public ?Count $open_activity_tasks;
  public ?Count $open_child_workflow_executions;
  public ?OpenDecisionTasksCount $open_decision_tasks;
  public ?Count $open_lambda_functions;
  public ?Count $open_timers;

  public function __construct(shape(
    ?'open_activity_tasks' => ?Count,
    ?'open_child_workflow_executions' => ?Count,
    ?'open_decision_tasks' => ?OpenDecisionTasksCount,
    ?'open_lambda_functions' => ?Count,
    ?'open_timers' => ?Count,
  ) $s = shape()) {
    $this->open_activity_tasks = $s['open_activity_tasks'] ?? 0;
    $this->open_child_workflow_executions = $s['open_child_workflow_executions'] ?? 0;
    $this->open_decision_tasks = $s['open_decision_tasks'] ?? 0;
    $this->open_lambda_functions = $s['open_lambda_functions'] ?? 0;
    $this->open_timers = $s['open_timers'] ?? 0;
  }
}

class WorkflowExecutionSignaledEventAttributes {
  public ?EventId $external_initiated_event_id;
  public ?WorkflowExecution $external_workflow_execution;
  public ?Data $input;
  public ?SignalName $signal_name;

  public function __construct(shape(
    ?'external_initiated_event_id' => ?EventId,
    ?'external_workflow_execution' => ?WorkflowExecution,
    ?'input' => ?Data,
    ?'signal_name' => ?SignalName,
  ) $s = shape()) {
    $this->external_initiated_event_id = $s['external_initiated_event_id'] ?? 0;
    $this->external_workflow_execution = $s['external_workflow_execution'] ?? null;
    $this->input = $s['input'] ?? '';
    $this->signal_name = $s['signal_name'] ?? '';
  }
}

class WorkflowExecutionStartedEventAttributes {
  public ?ChildPolicy $child_policy;
  public ?WorkflowRunIdOptional $continued_execution_run_id;
  public ?DurationInSecondsOptional $execution_start_to_close_timeout;
  public ?Data $input;
  public ?Arn $lambda_role;
  public ?EventId $parent_initiated_event_id;
  public ?WorkflowExecution $parent_workflow_execution;
  public ?TagList $tag_list;
  public ?TaskList $task_list;
  public ?TaskPriority $task_priority;
  public ?DurationInSecondsOptional $task_start_to_close_timeout;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'continued_execution_run_id' => ?WorkflowRunIdOptional,
    ?'execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'input' => ?Data,
    ?'lambda_role' => ?Arn,
    ?'parent_initiated_event_id' => ?EventId,
    ?'parent_workflow_execution' => ?WorkflowExecution,
    ?'tag_list' => ?TagList,
    ?'task_list' => ?TaskList,
    ?'task_priority' => ?TaskPriority,
    ?'task_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->continued_execution_run_id = $s['continued_execution_run_id'] ?? '';
    $this->execution_start_to_close_timeout = $s['execution_start_to_close_timeout'] ?? '';
    $this->input = $s['input'] ?? '';
    $this->lambda_role = $s['lambda_role'] ?? '';
    $this->parent_initiated_event_id = $s['parent_initiated_event_id'] ?? 0;
    $this->parent_workflow_execution = $s['parent_workflow_execution'] ?? null;
    $this->tag_list = $s['tag_list'] ?? vec[];
    $this->task_list = $s['task_list'] ?? null;
    $this->task_priority = $s['task_priority'] ?? '';
    $this->task_start_to_close_timeout = $s['task_start_to_close_timeout'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type WorkflowExecutionTerminatedCause = string;

class WorkflowExecutionTerminatedEventAttributes {
  public ?WorkflowExecutionTerminatedCause $cause;
  public ?ChildPolicy $child_policy;
  public ?Data $details;
  public ?TerminateReason $reason;

  public function __construct(shape(
    ?'cause' => ?WorkflowExecutionTerminatedCause,
    ?'child_policy' => ?ChildPolicy,
    ?'details' => ?Data,
    ?'reason' => ?TerminateReason,
  ) $s = shape()) {
    $this->cause = $s['cause'] ?? '';
    $this->child_policy = $s['child_policy'] ?? '';
    $this->details = $s['details'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

class WorkflowExecutionTimedOutEventAttributes {
  public ?ChildPolicy $child_policy;
  public ?WorkflowExecutionTimeoutType $timeout_type;

  public function __construct(shape(
    ?'child_policy' => ?ChildPolicy,
    ?'timeout_type' => ?WorkflowExecutionTimeoutType,
  ) $s = shape()) {
    $this->child_policy = $s['child_policy'] ?? '';
    $this->timeout_type = $s['timeout_type'] ?? '';
  }
}

type WorkflowExecutionTimeoutType = string;

type WorkflowId = string;

type WorkflowRunId = string;

type WorkflowRunIdOptional = string;

class WorkflowType {
  public ?Name $name;
  public ?Version $version;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class WorkflowTypeConfiguration {
  public ?ChildPolicy $default_child_policy;
  public ?DurationInSecondsOptional $default_execution_start_to_close_timeout;
  public ?Arn $default_lambda_role;
  public ?TaskList $default_task_list;
  public ?TaskPriority $default_task_priority;
  public ?DurationInSecondsOptional $default_task_start_to_close_timeout;

  public function __construct(shape(
    ?'default_child_policy' => ?ChildPolicy,
    ?'default_execution_start_to_close_timeout' => ?DurationInSecondsOptional,
    ?'default_lambda_role' => ?Arn,
    ?'default_task_list' => ?TaskList,
    ?'default_task_priority' => ?TaskPriority,
    ?'default_task_start_to_close_timeout' => ?DurationInSecondsOptional,
  ) $s = shape()) {
    $this->default_child_policy = $s['default_child_policy'] ?? '';
    $this->default_execution_start_to_close_timeout = $s['default_execution_start_to_close_timeout'] ?? '';
    $this->default_lambda_role = $s['default_lambda_role'] ?? '';
    $this->default_task_list = $s['default_task_list'] ?? null;
    $this->default_task_priority = $s['default_task_priority'] ?? '';
    $this->default_task_start_to_close_timeout = $s['default_task_start_to_close_timeout'] ?? '';
  }
}

class WorkflowTypeDetail {
  public ?WorkflowTypeConfiguration $configuration;
  public ?WorkflowTypeInfo $type_info;

  public function __construct(shape(
    ?'configuration' => ?WorkflowTypeConfiguration,
    ?'type_info' => ?WorkflowTypeInfo,
  ) $s = shape()) {
    $this->configuration = $s['configuration'] ?? null;
    $this->type_info = $s['type_info'] ?? null;
  }
}

class WorkflowTypeFilter {
  public ?Name $name;
  public ?VersionOptional $version;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'version' => ?VersionOptional,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class WorkflowTypeInfo {
  public ?Timestamp $creation_date;
  public ?Timestamp $deprecation_date;
  public ?Description $description;
  public ?RegistrationStatus $status;
  public ?WorkflowType $workflow_type;

  public function __construct(shape(
    ?'creation_date' => ?Timestamp,
    ?'deprecation_date' => ?Timestamp,
    ?'description' => ?Description,
    ?'status' => ?RegistrationStatus,
    ?'workflow_type' => ?WorkflowType,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->deprecation_date = $s['deprecation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->workflow_type = $s['workflow_type'] ?? null;
  }
}

type WorkflowTypeInfoList = vec<WorkflowTypeInfo>;

class WorkflowTypeInfos {
  public ?PageToken $next_page_token;
  public ?WorkflowTypeInfoList $type_infos;

  public function __construct(shape(
    ?'next_page_token' => ?PageToken,
    ?'type_infos' => ?WorkflowTypeInfoList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->type_infos = $s['type_infos'] ?? vec[];
  }
}

