<?hh // strict
namespace slack\aws\swf;

interface SWF {
  public function CountClosedWorkflowExecutions(CountClosedWorkflowExecutionsInput): Awaitable<Errors\Result<WorkflowExecutionCount>>;
  public function CountOpenWorkflowExecutions(CountOpenWorkflowExecutionsInput): Awaitable<Errors\Result<WorkflowExecutionCount>>;
  public function CountPendingActivityTasks(CountPendingActivityTasksInput): Awaitable<Errors\Result<PendingTaskCount>>;
  public function CountPendingDecisionTasks(CountPendingDecisionTasksInput): Awaitable<Errors\Result<PendingTaskCount>>;
  public function DeprecateActivityType(DeprecateActivityTypeInput): Awaitable<Errors\Error>;
  public function DeprecateDomain(DeprecateDomainInput): Awaitable<Errors\Error>;
  public function DeprecateWorkflowType(DeprecateWorkflowTypeInput): Awaitable<Errors\Error>;
  public function DescribeActivityType(DescribeActivityTypeInput): Awaitable<Errors\Result<ActivityTypeDetail>>;
  public function DescribeDomain(DescribeDomainInput): Awaitable<Errors\Result<DomainDetail>>;
  public function DescribeWorkflowExecution(DescribeWorkflowExecutionInput): Awaitable<Errors\Result<WorkflowExecutionDetail>>;
  public function DescribeWorkflowType(DescribeWorkflowTypeInput): Awaitable<Errors\Result<WorkflowTypeDetail>>;
  public function GetWorkflowExecutionHistory(GetWorkflowExecutionHistoryInput): Awaitable<Errors\Result<History>>;
  public function ListActivityTypes(ListActivityTypesInput): Awaitable<Errors\Result<ActivityTypeInfos>>;
  public function ListClosedWorkflowExecutions(ListClosedWorkflowExecutionsInput): Awaitable<Errors\Result<WorkflowExecutionInfos>>;
  public function ListDomains(ListDomainsInput): Awaitable<Errors\Result<DomainInfos>>;
  public function ListOpenWorkflowExecutions(ListOpenWorkflowExecutionsInput): Awaitable<Errors\Result<WorkflowExecutionInfos>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListWorkflowTypes(ListWorkflowTypesInput): Awaitable<Errors\Result<WorkflowTypeInfos>>;
  public function PollForActivityTask(PollForActivityTaskInput): Awaitable<Errors\Result<ActivityTask>>;
  public function PollForDecisionTask(PollForDecisionTaskInput): Awaitable<Errors\Result<DecisionTask>>;
  public function RecordActivityTaskHeartbeat(RecordActivityTaskHeartbeatInput): Awaitable<Errors\Result<ActivityTaskStatus>>;
  public function RegisterActivityType(RegisterActivityTypeInput): Awaitable<Errors\Error>;
  public function RegisterDomain(RegisterDomainInput): Awaitable<Errors\Error>;
  public function RegisterWorkflowType(RegisterWorkflowTypeInput): Awaitable<Errors\Error>;
  public function RequestCancelWorkflowExecution(RequestCancelWorkflowExecutionInput): Awaitable<Errors\Error>;
  public function RespondActivityTaskCanceled(RespondActivityTaskCanceledInput): Awaitable<Errors\Error>;
  public function RespondActivityTaskCompleted(RespondActivityTaskCompletedInput): Awaitable<Errors\Error>;
  public function RespondActivityTaskFailed(RespondActivityTaskFailedInput): Awaitable<Errors\Error>;
  public function RespondDecisionTaskCompleted(RespondDecisionTaskCompletedInput): Awaitable<Errors\Error>;
  public function SignalWorkflowExecution(SignalWorkflowExecutionInput): Awaitable<Errors\Error>;
  public function StartWorkflowExecution(StartWorkflowExecutionInput): Awaitable<Errors\Result<Run>>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Error>;
  public function TerminateWorkflowExecution(TerminateWorkflowExecutionInput): Awaitable<Errors\Error>;
  public function UndeprecateActivityType(UndeprecateActivityTypeInput): Awaitable<Errors\Error>;
  public function UndeprecateDomain(UndeprecateDomainInput): Awaitable<Errors\Error>;
  public function UndeprecateWorkflowType(UndeprecateWorkflowTypeInput): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Error>;
}

class ActivityId {
}

class ActivityTask {
  public ActivityId $activity_id;
  public ActivityType $activity_type;
  public Data $input;
  public EventId $started_event_id;
  public TaskToken $task_token;
  public WorkflowExecution $workflow_execution;
}

class ActivityTaskCancelRequestedEventAttributes {
  public ActivityId $activity_id;
  public EventId $decision_task_completed_event_id;
}

class ActivityTaskCanceledEventAttributes {
  public Data $details;
  public EventId $latest_cancel_requested_event_id;
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
}

class ActivityTaskCompletedEventAttributes {
  public Data $result;
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
}

class ActivityTaskFailedEventAttributes {
  public Data $details;
  public FailureReason $reason;
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
}

class ActivityTaskScheduledEventAttributes {
  public ActivityId $activity_id;
  public ActivityType $activity_type;
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public DurationInSecondsOptional $heartbeat_timeout;
  public Data $input;
  public DurationInSecondsOptional $schedule_to_close_timeout;
  public DurationInSecondsOptional $schedule_to_start_timeout;
  public DurationInSecondsOptional $start_to_close_timeout;
  public TaskList $task_list;
  public TaskPriority $task_priority;
}

class ActivityTaskStartedEventAttributes {
  public Identity $identity;
  public EventId $scheduled_event_id;
}

class ActivityTaskStatus {
  public Canceled $cancel_requested;
}

class ActivityTaskTimedOutEventAttributes {
  public LimitedData $details;
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
  public ActivityTaskTimeoutType $timeout_type;
}

class ActivityTaskTimeoutType {
}

class ActivityType {
  public Name $name;
  public Version $version;
}

class ActivityTypeConfiguration {
  public DurationInSecondsOptional $default_task_heartbeat_timeout;
  public TaskList $default_task_list;
  public TaskPriority $default_task_priority;
  public DurationInSecondsOptional $default_task_schedule_to_close_timeout;
  public DurationInSecondsOptional $default_task_schedule_to_start_timeout;
  public DurationInSecondsOptional $default_task_start_to_close_timeout;
}

class ActivityTypeDetail {
  public ActivityTypeConfiguration $configuration;
  public ActivityTypeInfo $type_info;
}

class ActivityTypeInfo {
  public ActivityType $activity_type;
  public Timestamp $creation_date;
  public Timestamp $deprecation_date;
  public Description $description;
  public RegistrationStatus $status;
}

class ActivityTypeInfoList {
}

class ActivityTypeInfos {
  public PageToken $next_page_token;
  public ActivityTypeInfoList $type_infos;
}

class Arn {
}

class CancelTimerDecisionAttributes {
  public TimerId $timer_id;
}

class CancelTimerFailedCause {
}

class CancelTimerFailedEventAttributes {
  public CancelTimerFailedCause $cause;
  public EventId $decision_task_completed_event_id;
  public TimerId $timer_id;
}

class CancelWorkflowExecutionDecisionAttributes {
  public Data $details;
}

class CancelWorkflowExecutionFailedCause {
}

class CancelWorkflowExecutionFailedEventAttributes {
  public CancelWorkflowExecutionFailedCause $cause;
  public EventId $decision_task_completed_event_id;
}

class Canceled {
}

class CauseMessage {
}

class ChildPolicy {
}

class ChildWorkflowExecutionCanceledEventAttributes {
  public Data $details;
  public EventId $initiated_event_id;
  public EventId $started_event_id;
  public WorkflowExecution $workflow_execution;
  public WorkflowType $workflow_type;
}

class ChildWorkflowExecutionCompletedEventAttributes {
  public EventId $initiated_event_id;
  public Data $result;
  public EventId $started_event_id;
  public WorkflowExecution $workflow_execution;
  public WorkflowType $workflow_type;
}

class ChildWorkflowExecutionFailedEventAttributes {
  public Data $details;
  public EventId $initiated_event_id;
  public FailureReason $reason;
  public EventId $started_event_id;
  public WorkflowExecution $workflow_execution;
  public WorkflowType $workflow_type;
}

class ChildWorkflowExecutionStartedEventAttributes {
  public EventId $initiated_event_id;
  public WorkflowExecution $workflow_execution;
  public WorkflowType $workflow_type;
}

class ChildWorkflowExecutionTerminatedEventAttributes {
  public EventId $initiated_event_id;
  public EventId $started_event_id;
  public WorkflowExecution $workflow_execution;
  public WorkflowType $workflow_type;
}

class ChildWorkflowExecutionTimedOutEventAttributes {
  public EventId $initiated_event_id;
  public EventId $started_event_id;
  public WorkflowExecutionTimeoutType $timeout_type;
  public WorkflowExecution $workflow_execution;
  public WorkflowType $workflow_type;
}

class CloseStatus {
}

class CloseStatusFilter {
  public CloseStatus $status;
}

class CompleteWorkflowExecutionDecisionAttributes {
  public Data $result;
}

class CompleteWorkflowExecutionFailedCause {
}

class CompleteWorkflowExecutionFailedEventAttributes {
  public CompleteWorkflowExecutionFailedCause $cause;
  public EventId $decision_task_completed_event_id;
}

class ContinueAsNewWorkflowExecutionDecisionAttributes {
  public ChildPolicy $child_policy;
  public DurationInSecondsOptional $execution_start_to_close_timeout;
  public Data $input;
  public Arn $lambda_role;
  public TagList $tag_list;
  public TaskList $task_list;
  public TaskPriority $task_priority;
  public DurationInSecondsOptional $task_start_to_close_timeout;
  public Version $workflow_type_version;
}

class ContinueAsNewWorkflowExecutionFailedCause {
}

class ContinueAsNewWorkflowExecutionFailedEventAttributes {
  public ContinueAsNewWorkflowExecutionFailedCause $cause;
  public EventId $decision_task_completed_event_id;
}

class Count {
}

class CountClosedWorkflowExecutionsInput {
  public CloseStatusFilter $close_status_filter;
  public ExecutionTimeFilter $close_time_filter;
  public DomainName $domain;
  public WorkflowExecutionFilter $execution_filter;
  public ExecutionTimeFilter $start_time_filter;
  public TagFilter $tag_filter;
  public WorkflowTypeFilter $type_filter;
}

class CountOpenWorkflowExecutionsInput {
  public DomainName $domain;
  public WorkflowExecutionFilter $execution_filter;
  public ExecutionTimeFilter $start_time_filter;
  public TagFilter $tag_filter;
  public WorkflowTypeFilter $type_filter;
}

class CountPendingActivityTasksInput {
  public DomainName $domain;
  public TaskList $task_list;
}

class CountPendingDecisionTasksInput {
  public DomainName $domain;
  public TaskList $task_list;
}

class Data {
}

class Decision {
  public CancelTimerDecisionAttributes $cancel_timer_decision_attributes;
  public CancelWorkflowExecutionDecisionAttributes $cancel_workflow_execution_decision_attributes;
  public CompleteWorkflowExecutionDecisionAttributes $complete_workflow_execution_decision_attributes;
  public ContinueAsNewWorkflowExecutionDecisionAttributes $continue_as_new_workflow_execution_decision_attributes;
  public DecisionType $decision_type;
  public FailWorkflowExecutionDecisionAttributes $fail_workflow_execution_decision_attributes;
  public RecordMarkerDecisionAttributes $record_marker_decision_attributes;
  public RequestCancelActivityTaskDecisionAttributes $request_cancel_activity_task_decision_attributes;
  public RequestCancelExternalWorkflowExecutionDecisionAttributes $request_cancel_external_workflow_execution_decision_attributes;
  public ScheduleActivityTaskDecisionAttributes $schedule_activity_task_decision_attributes;
  public ScheduleLambdaFunctionDecisionAttributes $schedule_lambda_function_decision_attributes;
  public SignalExternalWorkflowExecutionDecisionAttributes $signal_external_workflow_execution_decision_attributes;
  public StartChildWorkflowExecutionDecisionAttributes $start_child_workflow_execution_decision_attributes;
  public StartTimerDecisionAttributes $start_timer_decision_attributes;
}

class DecisionList {
}

class DecisionTask {
  public HistoryEventList $events;
  public PageToken $next_page_token;
  public EventId $previous_started_event_id;
  public EventId $started_event_id;
  public TaskToken $task_token;
  public WorkflowExecution $workflow_execution;
  public WorkflowType $workflow_type;
}

class DecisionTaskCompletedEventAttributes {
  public Data $execution_context;
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
}

class DecisionTaskScheduledEventAttributes {
  public DurationInSecondsOptional $start_to_close_timeout;
  public TaskList $task_list;
  public TaskPriority $task_priority;
}

class DecisionTaskStartedEventAttributes {
  public Identity $identity;
  public EventId $scheduled_event_id;
}

class DecisionTaskTimedOutEventAttributes {
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
  public DecisionTaskTimeoutType $timeout_type;
}

class DecisionTaskTimeoutType {
}

class DecisionType {
}

class DefaultUndefinedFault {
  public ErrorMessage $message;
}

class DeprecateActivityTypeInput {
  public ActivityType $activity_type;
  public DomainName $domain;
}

class DeprecateDomainInput {
  public DomainName $name;
}

class DeprecateWorkflowTypeInput {
  public DomainName $domain;
  public WorkflowType $workflow_type;
}

class DescribeActivityTypeInput {
  public ActivityType $activity_type;
  public DomainName $domain;
}

class DescribeDomainInput {
  public DomainName $name;
}

class DescribeWorkflowExecutionInput {
  public DomainName $domain;
  public WorkflowExecution $execution;
}

class DescribeWorkflowTypeInput {
  public DomainName $domain;
  public WorkflowType $workflow_type;
}

class Description {
}

class DomainAlreadyExistsFault {
  public ErrorMessage $message;
}

class DomainConfiguration {
  public DurationInDays $workflow_execution_retention_period_in_days;
}

class DomainDeprecatedFault {
  public ErrorMessage $message;
}

class DomainDetail {
  public DomainConfiguration $configuration;
  public DomainInfo $domain_info;
}

class DomainInfo {
  public Arn $arn;
  public Description $description;
  public DomainName $name;
  public RegistrationStatus $status;
}

class DomainInfoList {
}

class DomainInfos {
  public DomainInfoList $domain_infos;
  public PageToken $next_page_token;
}

class DomainName {
}

class DurationInDays {
}

class DurationInSeconds {
}

class DurationInSecondsOptional {
}

class ErrorMessage {
}

class EventId {
}

class EventType {
}

class ExecutionStatus {
}

class ExecutionTimeFilter {
  public Timestamp $latest_date;
  public Timestamp $oldest_date;
}

class ExternalWorkflowExecutionCancelRequestedEventAttributes {
  public EventId $initiated_event_id;
  public WorkflowExecution $workflow_execution;
}

class ExternalWorkflowExecutionSignaledEventAttributes {
  public EventId $initiated_event_id;
  public WorkflowExecution $workflow_execution;
}

class FailWorkflowExecutionDecisionAttributes {
  public Data $details;
  public FailureReason $reason;
}

class FailWorkflowExecutionFailedCause {
}

class FailWorkflowExecutionFailedEventAttributes {
  public FailWorkflowExecutionFailedCause $cause;
  public EventId $decision_task_completed_event_id;
}

class FailureReason {
}

class FunctionId {
}

class FunctionInput {
}

class FunctionName {
}

class GetWorkflowExecutionHistoryInput {
  public DomainName $domain;
  public WorkflowExecution $execution;
  public PageSize $maximum_page_size;
  public PageToken $next_page_token;
  public ReverseOrder $reverse_order;
}

class History {
  public HistoryEventList $events;
  public PageToken $next_page_token;
}

class HistoryEvent {
  public ActivityTaskCancelRequestedEventAttributes $activity_task_cancel_requested_event_attributes;
  public ActivityTaskCanceledEventAttributes $activity_task_canceled_event_attributes;
  public ActivityTaskCompletedEventAttributes $activity_task_completed_event_attributes;
  public ActivityTaskFailedEventAttributes $activity_task_failed_event_attributes;
  public ActivityTaskScheduledEventAttributes $activity_task_scheduled_event_attributes;
  public ActivityTaskStartedEventAttributes $activity_task_started_event_attributes;
  public ActivityTaskTimedOutEventAttributes $activity_task_timed_out_event_attributes;
  public CancelTimerFailedEventAttributes $cancel_timer_failed_event_attributes;
  public CancelWorkflowExecutionFailedEventAttributes $cancel_workflow_execution_failed_event_attributes;
  public ChildWorkflowExecutionCanceledEventAttributes $child_workflow_execution_canceled_event_attributes;
  public ChildWorkflowExecutionCompletedEventAttributes $child_workflow_execution_completed_event_attributes;
  public ChildWorkflowExecutionFailedEventAttributes $child_workflow_execution_failed_event_attributes;
  public ChildWorkflowExecutionStartedEventAttributes $child_workflow_execution_started_event_attributes;
  public ChildWorkflowExecutionTerminatedEventAttributes $child_workflow_execution_terminated_event_attributes;
  public ChildWorkflowExecutionTimedOutEventAttributes $child_workflow_execution_timed_out_event_attributes;
  public CompleteWorkflowExecutionFailedEventAttributes $complete_workflow_execution_failed_event_attributes;
  public ContinueAsNewWorkflowExecutionFailedEventAttributes $continue_as_new_workflow_execution_failed_event_attributes;
  public DecisionTaskCompletedEventAttributes $decision_task_completed_event_attributes;
  public DecisionTaskScheduledEventAttributes $decision_task_scheduled_event_attributes;
  public DecisionTaskStartedEventAttributes $decision_task_started_event_attributes;
  public DecisionTaskTimedOutEventAttributes $decision_task_timed_out_event_attributes;
  public EventId $event_id;
  public Timestamp $event_timestamp;
  public EventType $event_type;
  public ExternalWorkflowExecutionCancelRequestedEventAttributes $external_workflow_execution_cancel_requested_event_attributes;
  public ExternalWorkflowExecutionSignaledEventAttributes $external_workflow_execution_signaled_event_attributes;
  public FailWorkflowExecutionFailedEventAttributes $fail_workflow_execution_failed_event_attributes;
  public LambdaFunctionCompletedEventAttributes $lambda_function_completed_event_attributes;
  public LambdaFunctionFailedEventAttributes $lambda_function_failed_event_attributes;
  public LambdaFunctionScheduledEventAttributes $lambda_function_scheduled_event_attributes;
  public LambdaFunctionStartedEventAttributes $lambda_function_started_event_attributes;
  public LambdaFunctionTimedOutEventAttributes $lambda_function_timed_out_event_attributes;
  public MarkerRecordedEventAttributes $marker_recorded_event_attributes;
  public RecordMarkerFailedEventAttributes $record_marker_failed_event_attributes;
  public RequestCancelActivityTaskFailedEventAttributes $request_cancel_activity_task_failed_event_attributes;
  public RequestCancelExternalWorkflowExecutionFailedEventAttributes $request_cancel_external_workflow_execution_failed_event_attributes;
  public RequestCancelExternalWorkflowExecutionInitiatedEventAttributes $request_cancel_external_workflow_execution_initiated_event_attributes;
  public ScheduleActivityTaskFailedEventAttributes $schedule_activity_task_failed_event_attributes;
  public ScheduleLambdaFunctionFailedEventAttributes $schedule_lambda_function_failed_event_attributes;
  public SignalExternalWorkflowExecutionFailedEventAttributes $signal_external_workflow_execution_failed_event_attributes;
  public SignalExternalWorkflowExecutionInitiatedEventAttributes $signal_external_workflow_execution_initiated_event_attributes;
  public StartChildWorkflowExecutionFailedEventAttributes $start_child_workflow_execution_failed_event_attributes;
  public StartChildWorkflowExecutionInitiatedEventAttributes $start_child_workflow_execution_initiated_event_attributes;
  public StartLambdaFunctionFailedEventAttributes $start_lambda_function_failed_event_attributes;
  public StartTimerFailedEventAttributes $start_timer_failed_event_attributes;
  public TimerCanceledEventAttributes $timer_canceled_event_attributes;
  public TimerFiredEventAttributes $timer_fired_event_attributes;
  public TimerStartedEventAttributes $timer_started_event_attributes;
  public WorkflowExecutionCancelRequestedEventAttributes $workflow_execution_cancel_requested_event_attributes;
  public WorkflowExecutionCanceledEventAttributes $workflow_execution_canceled_event_attributes;
  public WorkflowExecutionCompletedEventAttributes $workflow_execution_completed_event_attributes;
  public WorkflowExecutionContinuedAsNewEventAttributes $workflow_execution_continued_as_new_event_attributes;
  public WorkflowExecutionFailedEventAttributes $workflow_execution_failed_event_attributes;
  public WorkflowExecutionSignaledEventAttributes $workflow_execution_signaled_event_attributes;
  public WorkflowExecutionStartedEventAttributes $workflow_execution_started_event_attributes;
  public WorkflowExecutionTerminatedEventAttributes $workflow_execution_terminated_event_attributes;
  public WorkflowExecutionTimedOutEventAttributes $workflow_execution_timed_out_event_attributes;
}

class HistoryEventList {
}

class Identity {
}

class LambdaFunctionCompletedEventAttributes {
  public Data $result;
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
}

class LambdaFunctionFailedEventAttributes {
  public Data $details;
  public FailureReason $reason;
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
}

class LambdaFunctionScheduledEventAttributes {
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public FunctionId $id;
  public FunctionInput $input;
  public FunctionName $name;
  public DurationInSecondsOptional $start_to_close_timeout;
}

class LambdaFunctionStartedEventAttributes {
  public EventId $scheduled_event_id;
}

class LambdaFunctionTimedOutEventAttributes {
  public EventId $scheduled_event_id;
  public EventId $started_event_id;
  public LambdaFunctionTimeoutType $timeout_type;
}

class LambdaFunctionTimeoutType {
}

class LimitExceededFault {
  public ErrorMessage $message;
}

class LimitedData {
}

class ListActivityTypesInput {
  public DomainName $domain;
  public PageSize $maximum_page_size;
  public Name $name;
  public PageToken $next_page_token;
  public RegistrationStatus $registration_status;
  public ReverseOrder $reverse_order;
}

class ListClosedWorkflowExecutionsInput {
  public CloseStatusFilter $close_status_filter;
  public ExecutionTimeFilter $close_time_filter;
  public DomainName $domain;
  public WorkflowExecutionFilter $execution_filter;
  public PageSize $maximum_page_size;
  public PageToken $next_page_token;
  public ReverseOrder $reverse_order;
  public ExecutionTimeFilter $start_time_filter;
  public TagFilter $tag_filter;
  public WorkflowTypeFilter $type_filter;
}

class ListDomainsInput {
  public PageSize $maximum_page_size;
  public PageToken $next_page_token;
  public RegistrationStatus $registration_status;
  public ReverseOrder $reverse_order;
}

class ListOpenWorkflowExecutionsInput {
  public DomainName $domain;
  public WorkflowExecutionFilter $execution_filter;
  public PageSize $maximum_page_size;
  public PageToken $next_page_token;
  public ReverseOrder $reverse_order;
  public ExecutionTimeFilter $start_time_filter;
  public TagFilter $tag_filter;
  public WorkflowTypeFilter $type_filter;
}

class ListTagsForResourceInput {
  public Arn $resource_arn;
}

class ListTagsForResourceOutput {
  public ResourceTagList $tags;
}

class ListWorkflowTypesInput {
  public DomainName $domain;
  public PageSize $maximum_page_size;
  public Name $name;
  public PageToken $next_page_token;
  public RegistrationStatus $registration_status;
  public ReverseOrder $reverse_order;
}

class MarkerName {
}

class MarkerRecordedEventAttributes {
  public EventId $decision_task_completed_event_id;
  public Data $details;
  public MarkerName $marker_name;
}

class Name {
}

class OpenDecisionTasksCount {
}

class OperationNotPermittedFault {
  public ErrorMessage $message;
}

class PageSize {
}

class PageToken {
}

class PendingTaskCount {
  public Count $count;
  public Truncated $truncated;
}

class PollForActivityTaskInput {
  public DomainName $domain;
  public Identity $identity;
  public TaskList $task_list;
}

class PollForDecisionTaskInput {
  public DomainName $domain;
  public Identity $identity;
  public PageSize $maximum_page_size;
  public PageToken $next_page_token;
  public ReverseOrder $reverse_order;
  public TaskList $task_list;
}

class RecordActivityTaskHeartbeatInput {
  public LimitedData $details;
  public TaskToken $task_token;
}

class RecordMarkerDecisionAttributes {
  public Data $details;
  public MarkerName $marker_name;
}

class RecordMarkerFailedCause {
}

class RecordMarkerFailedEventAttributes {
  public RecordMarkerFailedCause $cause;
  public EventId $decision_task_completed_event_id;
  public MarkerName $marker_name;
}

class RegisterActivityTypeInput {
  public DurationInSecondsOptional $default_task_heartbeat_timeout;
  public TaskList $default_task_list;
  public TaskPriority $default_task_priority;
  public DurationInSecondsOptional $default_task_schedule_to_close_timeout;
  public DurationInSecondsOptional $default_task_schedule_to_start_timeout;
  public DurationInSecondsOptional $default_task_start_to_close_timeout;
  public Description $description;
  public DomainName $domain;
  public Name $name;
  public Version $version;
}

class RegisterDomainInput {
  public Description $description;
  public DomainName $name;
  public ResourceTagList $tags;
  public DurationInDays $workflow_execution_retention_period_in_days;
}

class RegisterWorkflowTypeInput {
  public ChildPolicy $default_child_policy;
  public DurationInSecondsOptional $default_execution_start_to_close_timeout;
  public Arn $default_lambda_role;
  public TaskList $default_task_list;
  public TaskPriority $default_task_priority;
  public DurationInSecondsOptional $default_task_start_to_close_timeout;
  public Description $description;
  public DomainName $domain;
  public Name $name;
  public Version $version;
}

class RegistrationStatus {
}

class RequestCancelActivityTaskDecisionAttributes {
  public ActivityId $activity_id;
}

class RequestCancelActivityTaskFailedCause {
}

class RequestCancelActivityTaskFailedEventAttributes {
  public ActivityId $activity_id;
  public RequestCancelActivityTaskFailedCause $cause;
  public EventId $decision_task_completed_event_id;
}

class RequestCancelExternalWorkflowExecutionDecisionAttributes {
  public Data $control;
  public WorkflowRunIdOptional $run_id;
  public WorkflowId $workflow_id;
}

class RequestCancelExternalWorkflowExecutionFailedCause {
}

class RequestCancelExternalWorkflowExecutionFailedEventAttributes {
  public RequestCancelExternalWorkflowExecutionFailedCause $cause;
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public EventId $initiated_event_id;
  public WorkflowRunIdOptional $run_id;
  public WorkflowId $workflow_id;
}

class RequestCancelExternalWorkflowExecutionInitiatedEventAttributes {
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public WorkflowRunIdOptional $run_id;
  public WorkflowId $workflow_id;
}

class RequestCancelWorkflowExecutionInput {
  public DomainName $domain;
  public WorkflowRunIdOptional $run_id;
  public WorkflowId $workflow_id;
}

class ResourceTag {
  public ResourceTagKey $key;
  public ResourceTagValue $value;
}

class ResourceTagKey {
}

class ResourceTagKeyList {
}

class ResourceTagList {
}

class ResourceTagValue {
}

class RespondActivityTaskCanceledInput {
  public Data $details;
  public TaskToken $task_token;
}

class RespondActivityTaskCompletedInput {
  public Data $result;
  public TaskToken $task_token;
}

class RespondActivityTaskFailedInput {
  public Data $details;
  public FailureReason $reason;
  public TaskToken $task_token;
}

class RespondDecisionTaskCompletedInput {
  public DecisionList $decisions;
  public Data $execution_context;
  public TaskToken $task_token;
}

class ReverseOrder {
}

class Run {
  public WorkflowRunId $run_id;
}

class ScheduleActivityTaskDecisionAttributes {
  public ActivityId $activity_id;
  public ActivityType $activity_type;
  public Data $control;
  public DurationInSecondsOptional $heartbeat_timeout;
  public Data $input;
  public DurationInSecondsOptional $schedule_to_close_timeout;
  public DurationInSecondsOptional $schedule_to_start_timeout;
  public DurationInSecondsOptional $start_to_close_timeout;
  public TaskList $task_list;
  public TaskPriority $task_priority;
}

class ScheduleActivityTaskFailedCause {
}

class ScheduleActivityTaskFailedEventAttributes {
  public ActivityId $activity_id;
  public ActivityType $activity_type;
  public ScheduleActivityTaskFailedCause $cause;
  public EventId $decision_task_completed_event_id;
}

class ScheduleLambdaFunctionDecisionAttributes {
  public Data $control;
  public FunctionId $id;
  public FunctionInput $input;
  public FunctionName $name;
  public DurationInSecondsOptional $start_to_close_timeout;
}

class ScheduleLambdaFunctionFailedCause {
}

class ScheduleLambdaFunctionFailedEventAttributes {
  public ScheduleLambdaFunctionFailedCause $cause;
  public EventId $decision_task_completed_event_id;
  public FunctionId $id;
  public FunctionName $name;
}

class SignalExternalWorkflowExecutionDecisionAttributes {
  public Data $control;
  public Data $input;
  public WorkflowRunIdOptional $run_id;
  public SignalName $signal_name;
  public WorkflowId $workflow_id;
}

class SignalExternalWorkflowExecutionFailedCause {
}

class SignalExternalWorkflowExecutionFailedEventAttributes {
  public SignalExternalWorkflowExecutionFailedCause $cause;
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public EventId $initiated_event_id;
  public WorkflowRunIdOptional $run_id;
  public WorkflowId $workflow_id;
}

class SignalExternalWorkflowExecutionInitiatedEventAttributes {
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public Data $input;
  public WorkflowRunIdOptional $run_id;
  public SignalName $signal_name;
  public WorkflowId $workflow_id;
}

class SignalName {
}

class SignalWorkflowExecutionInput {
  public DomainName $domain;
  public Data $input;
  public WorkflowRunIdOptional $run_id;
  public SignalName $signal_name;
  public WorkflowId $workflow_id;
}

class StartChildWorkflowExecutionDecisionAttributes {
  public ChildPolicy $child_policy;
  public Data $control;
  public DurationInSecondsOptional $execution_start_to_close_timeout;
  public Data $input;
  public Arn $lambda_role;
  public TagList $tag_list;
  public TaskList $task_list;
  public TaskPriority $task_priority;
  public DurationInSecondsOptional $task_start_to_close_timeout;
  public WorkflowId $workflow_id;
  public WorkflowType $workflow_type;
}

class StartChildWorkflowExecutionFailedCause {
}

class StartChildWorkflowExecutionFailedEventAttributes {
  public StartChildWorkflowExecutionFailedCause $cause;
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public EventId $initiated_event_id;
  public WorkflowId $workflow_id;
  public WorkflowType $workflow_type;
}

class StartChildWorkflowExecutionInitiatedEventAttributes {
  public ChildPolicy $child_policy;
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public DurationInSecondsOptional $execution_start_to_close_timeout;
  public Data $input;
  public Arn $lambda_role;
  public TagList $tag_list;
  public TaskList $task_list;
  public TaskPriority $task_priority;
  public DurationInSecondsOptional $task_start_to_close_timeout;
  public WorkflowId $workflow_id;
  public WorkflowType $workflow_type;
}

class StartLambdaFunctionFailedCause {
}

class StartLambdaFunctionFailedEventAttributes {
  public StartLambdaFunctionFailedCause $cause;
  public CauseMessage $message;
  public EventId $scheduled_event_id;
}

class StartTimerDecisionAttributes {
  public Data $control;
  public DurationInSeconds $start_to_fire_timeout;
  public TimerId $timer_id;
}

class StartTimerFailedCause {
}

class StartTimerFailedEventAttributes {
  public StartTimerFailedCause $cause;
  public EventId $decision_task_completed_event_id;
  public TimerId $timer_id;
}

class StartWorkflowExecutionInput {
  public ChildPolicy $child_policy;
  public DomainName $domain;
  public DurationInSecondsOptional $execution_start_to_close_timeout;
  public Data $input;
  public Arn $lambda_role;
  public TagList $tag_list;
  public TaskList $task_list;
  public TaskPriority $task_priority;
  public DurationInSecondsOptional $task_start_to_close_timeout;
  public WorkflowId $workflow_id;
  public WorkflowType $workflow_type;
}

class Tag {
}

class TagFilter {
  public Tag $tag;
}

class TagList {
}

class TagResourceInput {
  public Arn $resource_arn;
  public ResourceTagList $tags;
}

class TaskList {
  public Name $name;
}

class TaskPriority {
}

class TaskToken {
}

class TerminateReason {
}

class TerminateWorkflowExecutionInput {
  public ChildPolicy $child_policy;
  public Data $details;
  public DomainName $domain;
  public TerminateReason $reason;
  public WorkflowRunIdOptional $run_id;
  public WorkflowId $workflow_id;
}

class TimerCanceledEventAttributes {
  public EventId $decision_task_completed_event_id;
  public EventId $started_event_id;
  public TimerId $timer_id;
}

class TimerFiredEventAttributes {
  public EventId $started_event_id;
  public TimerId $timer_id;
}

class TimerId {
}

class TimerStartedEventAttributes {
  public Data $control;
  public EventId $decision_task_completed_event_id;
  public DurationInSeconds $start_to_fire_timeout;
  public TimerId $timer_id;
}

class Timestamp {
}

class TooManyTagsFault {
  public ErrorMessage $message;
}

class Truncated {
}

class TypeAlreadyExistsFault {
  public ErrorMessage $message;
}

class TypeDeprecatedFault {
  public ErrorMessage $message;
}

class UndeprecateActivityTypeInput {
  public ActivityType $activity_type;
  public DomainName $domain;
}

class UndeprecateDomainInput {
  public DomainName $name;
}

class UndeprecateWorkflowTypeInput {
  public DomainName $domain;
  public WorkflowType $workflow_type;
}

class UnknownResourceFault {
  public ErrorMessage $message;
}

class UntagResourceInput {
  public Arn $resource_arn;
  public ResourceTagKeyList $tag_keys;
}

class Version {
}

class VersionOptional {
}

class WorkflowExecution {
  public WorkflowRunId $run_id;
  public WorkflowId $workflow_id;
}

class WorkflowExecutionAlreadyStartedFault {
  public ErrorMessage $message;
}

class WorkflowExecutionCancelRequestedCause {
}

class WorkflowExecutionCancelRequestedEventAttributes {
  public WorkflowExecutionCancelRequestedCause $cause;
  public EventId $external_initiated_event_id;
  public WorkflowExecution $external_workflow_execution;
}

class WorkflowExecutionCanceledEventAttributes {
  public EventId $decision_task_completed_event_id;
  public Data $details;
}

class WorkflowExecutionCompletedEventAttributes {
  public EventId $decision_task_completed_event_id;
  public Data $result;
}

class WorkflowExecutionConfiguration {
  public ChildPolicy $child_policy;
  public DurationInSeconds $execution_start_to_close_timeout;
  public Arn $lambda_role;
  public TaskList $task_list;
  public TaskPriority $task_priority;
  public DurationInSeconds $task_start_to_close_timeout;
}

class WorkflowExecutionContinuedAsNewEventAttributes {
  public ChildPolicy $child_policy;
  public EventId $decision_task_completed_event_id;
  public DurationInSecondsOptional $execution_start_to_close_timeout;
  public Data $input;
  public Arn $lambda_role;
  public WorkflowRunId $new_execution_run_id;
  public TagList $tag_list;
  public TaskList $task_list;
  public TaskPriority $task_priority;
  public DurationInSecondsOptional $task_start_to_close_timeout;
  public WorkflowType $workflow_type;
}

class WorkflowExecutionCount {
  public Count $count;
  public Truncated $truncated;
}

class WorkflowExecutionDetail {
  public WorkflowExecutionConfiguration $execution_configuration;
  public WorkflowExecutionInfo $execution_info;
  public Timestamp $latest_activity_task_timestamp;
  public Data $latest_execution_context;
  public WorkflowExecutionOpenCounts $open_counts;
}

class WorkflowExecutionFailedEventAttributes {
  public EventId $decision_task_completed_event_id;
  public Data $details;
  public FailureReason $reason;
}

class WorkflowExecutionFilter {
  public WorkflowId $workflow_id;
}

class WorkflowExecutionInfo {
  public Canceled $cancel_requested;
  public CloseStatus $close_status;
  public Timestamp $close_timestamp;
  public WorkflowExecution $execution;
  public ExecutionStatus $execution_status;
  public WorkflowExecution $parent;
  public Timestamp $start_timestamp;
  public TagList $tag_list;
  public WorkflowType $workflow_type;
}

class WorkflowExecutionInfoList {
}

class WorkflowExecutionInfos {
  public WorkflowExecutionInfoList $execution_infos;
  public PageToken $next_page_token;
}

class WorkflowExecutionOpenCounts {
  public Count $open_activity_tasks;
  public Count $open_child_workflow_executions;
  public OpenDecisionTasksCount $open_decision_tasks;
  public Count $open_lambda_functions;
  public Count $open_timers;
}

class WorkflowExecutionSignaledEventAttributes {
  public EventId $external_initiated_event_id;
  public WorkflowExecution $external_workflow_execution;
  public Data $input;
  public SignalName $signal_name;
}

class WorkflowExecutionStartedEventAttributes {
  public ChildPolicy $child_policy;
  public WorkflowRunIdOptional $continued_execution_run_id;
  public DurationInSecondsOptional $execution_start_to_close_timeout;
  public Data $input;
  public Arn $lambda_role;
  public EventId $parent_initiated_event_id;
  public WorkflowExecution $parent_workflow_execution;
  public TagList $tag_list;
  public TaskList $task_list;
  public TaskPriority $task_priority;
  public DurationInSecondsOptional $task_start_to_close_timeout;
  public WorkflowType $workflow_type;
}

class WorkflowExecutionTerminatedCause {
}

class WorkflowExecutionTerminatedEventAttributes {
  public WorkflowExecutionTerminatedCause $cause;
  public ChildPolicy $child_policy;
  public Data $details;
  public TerminateReason $reason;
}

class WorkflowExecutionTimedOutEventAttributes {
  public ChildPolicy $child_policy;
  public WorkflowExecutionTimeoutType $timeout_type;
}

class WorkflowExecutionTimeoutType {
}

class WorkflowId {
}

class WorkflowRunId {
}

class WorkflowRunIdOptional {
}

class WorkflowType {
  public Name $name;
  public Version $version;
}

class WorkflowTypeConfiguration {
  public ChildPolicy $default_child_policy;
  public DurationInSecondsOptional $default_execution_start_to_close_timeout;
  public Arn $default_lambda_role;
  public TaskList $default_task_list;
  public TaskPriority $default_task_priority;
  public DurationInSecondsOptional $default_task_start_to_close_timeout;
}

class WorkflowTypeDetail {
  public WorkflowTypeConfiguration $configuration;
  public WorkflowTypeInfo $type_info;
}

class WorkflowTypeFilter {
  public Name $name;
  public VersionOptional $version;
}

class WorkflowTypeInfo {
  public Timestamp $creation_date;
  public Timestamp $deprecation_date;
  public Description $description;
  public RegistrationStatus $status;
  public WorkflowType $workflow_type;
}

class WorkflowTypeInfoList {
}

class WorkflowTypeInfos {
  public PageToken $next_page_token;
  public WorkflowTypeInfoList $type_infos;
}

