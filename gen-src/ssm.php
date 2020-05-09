<?hh // strict
namespace slack\aws\ssm;

interface SSM {
  public function AddTagsToResource(AddTagsToResourceRequest) Awaitable<Errors\Result<AddTagsToResourceResult>>;
  public function CancelCommand(CancelCommandRequest) Awaitable<Errors\Result<CancelCommandResult>>;
  public function CancelMaintenanceWindowExecution(CancelMaintenanceWindowExecutionRequest) Awaitable<Errors\Result<CancelMaintenanceWindowExecutionResult>>;
  public function CreateActivation(CreateActivationRequest) Awaitable<Errors\Result<CreateActivationResult>>;
  public function CreateAssociation(CreateAssociationRequest) Awaitable<Errors\Result<CreateAssociationResult>>;
  public function CreateAssociationBatch(CreateAssociationBatchRequest) Awaitable<Errors\Result<CreateAssociationBatchResult>>;
  public function CreateDocument(CreateDocumentRequest) Awaitable<Errors\Result<CreateDocumentResult>>;
  public function CreateMaintenanceWindow(CreateMaintenanceWindowRequest) Awaitable<Errors\Result<CreateMaintenanceWindowResult>>;
  public function CreateOpsItem(CreateOpsItemRequest) Awaitable<Errors\Result<CreateOpsItemResponse>>;
  public function CreatePatchBaseline(CreatePatchBaselineRequest) Awaitable<Errors\Result<CreatePatchBaselineResult>>;
  public function CreateResourceDataSync(CreateResourceDataSyncRequest) Awaitable<Errors\Result<CreateResourceDataSyncResult>>;
  public function DeleteActivation(DeleteActivationRequest) Awaitable<Errors\Result<DeleteActivationResult>>;
  public function DeleteAssociation(DeleteAssociationRequest) Awaitable<Errors\Result<DeleteAssociationResult>>;
  public function DeleteDocument(DeleteDocumentRequest) Awaitable<Errors\Result<DeleteDocumentResult>>;
  public function DeleteInventory(DeleteInventoryRequest) Awaitable<Errors\Result<DeleteInventoryResult>>;
  public function DeleteMaintenanceWindow(DeleteMaintenanceWindowRequest) Awaitable<Errors\Result<DeleteMaintenanceWindowResult>>;
  public function DeleteParameter(DeleteParameterRequest) Awaitable<Errors\Result<DeleteParameterResult>>;
  public function DeleteParameters(DeleteParametersRequest) Awaitable<Errors\Result<DeleteParametersResult>>;
  public function DeletePatchBaseline(DeletePatchBaselineRequest) Awaitable<Errors\Result<DeletePatchBaselineResult>>;
  public function DeleteResourceDataSync(DeleteResourceDataSyncRequest) Awaitable<Errors\Result<DeleteResourceDataSyncResult>>;
  public function DeregisterManagedInstance(DeregisterManagedInstanceRequest) Awaitable<Errors\Result<DeregisterManagedInstanceResult>>;
  public function DeregisterPatchBaselineForPatchGroup(DeregisterPatchBaselineForPatchGroupRequest) Awaitable<Errors\Result<DeregisterPatchBaselineForPatchGroupResult>>;
  public function DeregisterTargetFromMaintenanceWindow(DeregisterTargetFromMaintenanceWindowRequest) Awaitable<Errors\Result<DeregisterTargetFromMaintenanceWindowResult>>;
  public function DeregisterTaskFromMaintenanceWindow(DeregisterTaskFromMaintenanceWindowRequest) Awaitable<Errors\Result<DeregisterTaskFromMaintenanceWindowResult>>;
  public function DescribeActivations(DescribeActivationsRequest) Awaitable<Errors\Result<DescribeActivationsResult>>;
  public function DescribeAssociation(DescribeAssociationRequest) Awaitable<Errors\Result<DescribeAssociationResult>>;
  public function DescribeAssociationExecutionTargets(DescribeAssociationExecutionTargetsRequest) Awaitable<Errors\Result<DescribeAssociationExecutionTargetsResult>>;
  public function DescribeAssociationExecutions(DescribeAssociationExecutionsRequest) Awaitable<Errors\Result<DescribeAssociationExecutionsResult>>;
  public function DescribeAutomationExecutions(DescribeAutomationExecutionsRequest) Awaitable<Errors\Result<DescribeAutomationExecutionsResult>>;
  public function DescribeAutomationStepExecutions(DescribeAutomationStepExecutionsRequest) Awaitable<Errors\Result<DescribeAutomationStepExecutionsResult>>;
  public function DescribeAvailablePatches(DescribeAvailablePatchesRequest) Awaitable<Errors\Result<DescribeAvailablePatchesResult>>;
  public function DescribeDocument(DescribeDocumentRequest) Awaitable<Errors\Result<DescribeDocumentResult>>;
  public function DescribeDocumentPermission(DescribeDocumentPermissionRequest) Awaitable<Errors\Result<DescribeDocumentPermissionResponse>>;
  public function DescribeEffectiveInstanceAssociations(DescribeEffectiveInstanceAssociationsRequest) Awaitable<Errors\Result<DescribeEffectiveInstanceAssociationsResult>>;
  public function DescribeEffectivePatchesForPatchBaseline(DescribeEffectivePatchesForPatchBaselineRequest) Awaitable<Errors\Result<DescribeEffectivePatchesForPatchBaselineResult>>;
  public function DescribeInstanceAssociationsStatus(DescribeInstanceAssociationsStatusRequest) Awaitable<Errors\Result<DescribeInstanceAssociationsStatusResult>>;
  public function DescribeInstanceInformation(DescribeInstanceInformationRequest) Awaitable<Errors\Result<DescribeInstanceInformationResult>>;
  public function DescribeInstancePatchStates(DescribeInstancePatchStatesRequest) Awaitable<Errors\Result<DescribeInstancePatchStatesResult>>;
  public function DescribeInstancePatchStatesForPatchGroup(DescribeInstancePatchStatesForPatchGroupRequest) Awaitable<Errors\Result<DescribeInstancePatchStatesForPatchGroupResult>>;
  public function DescribeInstancePatches(DescribeInstancePatchesRequest) Awaitable<Errors\Result<DescribeInstancePatchesResult>>;
  public function DescribeInventoryDeletions(DescribeInventoryDeletionsRequest) Awaitable<Errors\Result<DescribeInventoryDeletionsResult>>;
  public function DescribeMaintenanceWindowExecutionTaskInvocations(DescribeMaintenanceWindowExecutionTaskInvocationsRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowExecutionTaskInvocationsResult>>;
  public function DescribeMaintenanceWindowExecutionTasks(DescribeMaintenanceWindowExecutionTasksRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowExecutionTasksResult>>;
  public function DescribeMaintenanceWindowExecutions(DescribeMaintenanceWindowExecutionsRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowExecutionsResult>>;
  public function DescribeMaintenanceWindowSchedule(DescribeMaintenanceWindowScheduleRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowScheduleResult>>;
  public function DescribeMaintenanceWindowTargets(DescribeMaintenanceWindowTargetsRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowTargetsResult>>;
  public function DescribeMaintenanceWindowTasks(DescribeMaintenanceWindowTasksRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowTasksResult>>;
  public function DescribeMaintenanceWindows(DescribeMaintenanceWindowsRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowsResult>>;
  public function DescribeMaintenanceWindowsForTarget(DescribeMaintenanceWindowsForTargetRequest) Awaitable<Errors\Result<DescribeMaintenanceWindowsForTargetResult>>;
  public function DescribeOpsItems(DescribeOpsItemsRequest) Awaitable<Errors\Result<DescribeOpsItemsResponse>>;
  public function DescribeParameters(DescribeParametersRequest) Awaitable<Errors\Result<DescribeParametersResult>>;
  public function DescribePatchBaselines(DescribePatchBaselinesRequest) Awaitable<Errors\Result<DescribePatchBaselinesResult>>;
  public function DescribePatchGroupState(DescribePatchGroupStateRequest) Awaitable<Errors\Result<DescribePatchGroupStateResult>>;
  public function DescribePatchGroups(DescribePatchGroupsRequest) Awaitable<Errors\Result<DescribePatchGroupsResult>>;
  public function DescribePatchProperties(DescribePatchPropertiesRequest) Awaitable<Errors\Result<DescribePatchPropertiesResult>>;
  public function DescribeSessions(DescribeSessionsRequest) Awaitable<Errors\Result<DescribeSessionsResponse>>;
  public function GetAutomationExecution(GetAutomationExecutionRequest) Awaitable<Errors\Result<GetAutomationExecutionResult>>;
  public function GetCalendarState(GetCalendarStateRequest) Awaitable<Errors\Result<GetCalendarStateResponse>>;
  public function GetCommandInvocation(GetCommandInvocationRequest) Awaitable<Errors\Result<GetCommandInvocationResult>>;
  public function GetConnectionStatus(GetConnectionStatusRequest) Awaitable<Errors\Result<GetConnectionStatusResponse>>;
  public function GetDefaultPatchBaseline(GetDefaultPatchBaselineRequest) Awaitable<Errors\Result<GetDefaultPatchBaselineResult>>;
  public function GetDeployablePatchSnapshotForInstance(GetDeployablePatchSnapshotForInstanceRequest) Awaitable<Errors\Result<GetDeployablePatchSnapshotForInstanceResult>>;
  public function GetDocument(GetDocumentRequest) Awaitable<Errors\Result<GetDocumentResult>>;
  public function GetInventory(GetInventoryRequest) Awaitable<Errors\Result<GetInventoryResult>>;
  public function GetInventorySchema(GetInventorySchemaRequest) Awaitable<Errors\Result<GetInventorySchemaResult>>;
  public function GetMaintenanceWindow(GetMaintenanceWindowRequest) Awaitable<Errors\Result<GetMaintenanceWindowResult>>;
  public function GetMaintenanceWindowExecution(GetMaintenanceWindowExecutionRequest) Awaitable<Errors\Result<GetMaintenanceWindowExecutionResult>>;
  public function GetMaintenanceWindowExecutionTask(GetMaintenanceWindowExecutionTaskRequest) Awaitable<Errors\Result<GetMaintenanceWindowExecutionTaskResult>>;
  public function GetMaintenanceWindowExecutionTaskInvocation(GetMaintenanceWindowExecutionTaskInvocationRequest) Awaitable<Errors\Result<GetMaintenanceWindowExecutionTaskInvocationResult>>;
  public function GetMaintenanceWindowTask(GetMaintenanceWindowTaskRequest) Awaitable<Errors\Result<GetMaintenanceWindowTaskResult>>;
  public function GetOpsItem(GetOpsItemRequest) Awaitable<Errors\Result<GetOpsItemResponse>>;
  public function GetOpsSummary(GetOpsSummaryRequest) Awaitable<Errors\Result<GetOpsSummaryResult>>;
  public function GetParameter(GetParameterRequest) Awaitable<Errors\Result<GetParameterResult>>;
  public function GetParameterHistory(GetParameterHistoryRequest) Awaitable<Errors\Result<GetParameterHistoryResult>>;
  public function GetParameters(GetParametersRequest) Awaitable<Errors\Result<GetParametersResult>>;
  public function GetParametersByPath(GetParametersByPathRequest) Awaitable<Errors\Result<GetParametersByPathResult>>;
  public function GetPatchBaseline(GetPatchBaselineRequest) Awaitable<Errors\Result<GetPatchBaselineResult>>;
  public function GetPatchBaselineForPatchGroup(GetPatchBaselineForPatchGroupRequest) Awaitable<Errors\Result<GetPatchBaselineForPatchGroupResult>>;
  public function GetServiceSetting(GetServiceSettingRequest) Awaitable<Errors\Result<GetServiceSettingResult>>;
  public function LabelParameterVersion(LabelParameterVersionRequest) Awaitable<Errors\Result<LabelParameterVersionResult>>;
  public function ListAssociationVersions(ListAssociationVersionsRequest) Awaitable<Errors\Result<ListAssociationVersionsResult>>;
  public function ListAssociations(ListAssociationsRequest) Awaitable<Errors\Result<ListAssociationsResult>>;
  public function ListCommandInvocations(ListCommandInvocationsRequest) Awaitable<Errors\Result<ListCommandInvocationsResult>>;
  public function ListCommands(ListCommandsRequest) Awaitable<Errors\Result<ListCommandsResult>>;
  public function ListComplianceItems(ListComplianceItemsRequest) Awaitable<Errors\Result<ListComplianceItemsResult>>;
  public function ListComplianceSummaries(ListComplianceSummariesRequest) Awaitable<Errors\Result<ListComplianceSummariesResult>>;
  public function ListDocumentVersions(ListDocumentVersionsRequest) Awaitable<Errors\Result<ListDocumentVersionsResult>>;
  public function ListDocuments(ListDocumentsRequest) Awaitable<Errors\Result<ListDocumentsResult>>;
  public function ListInventoryEntries(ListInventoryEntriesRequest) Awaitable<Errors\Result<ListInventoryEntriesResult>>;
  public function ListResourceComplianceSummaries(ListResourceComplianceSummariesRequest) Awaitable<Errors\Result<ListResourceComplianceSummariesResult>>;
  public function ListResourceDataSync(ListResourceDataSyncRequest) Awaitable<Errors\Result<ListResourceDataSyncResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function ModifyDocumentPermission(ModifyDocumentPermissionRequest) Awaitable<Errors\Result<ModifyDocumentPermissionResponse>>;
  public function PutComplianceItems(PutComplianceItemsRequest) Awaitable<Errors\Result<PutComplianceItemsResult>>;
  public function PutInventory(PutInventoryRequest) Awaitable<Errors\Result<PutInventoryResult>>;
  public function PutParameter(PutParameterRequest) Awaitable<Errors\Result<PutParameterResult>>;
  public function RegisterDefaultPatchBaseline(RegisterDefaultPatchBaselineRequest) Awaitable<Errors\Result<RegisterDefaultPatchBaselineResult>>;
  public function RegisterPatchBaselineForPatchGroup(RegisterPatchBaselineForPatchGroupRequest) Awaitable<Errors\Result<RegisterPatchBaselineForPatchGroupResult>>;
  public function RegisterTargetWithMaintenanceWindow(RegisterTargetWithMaintenanceWindowRequest) Awaitable<Errors\Result<RegisterTargetWithMaintenanceWindowResult>>;
  public function RegisterTaskWithMaintenanceWindow(RegisterTaskWithMaintenanceWindowRequest) Awaitable<Errors\Result<RegisterTaskWithMaintenanceWindowResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest) Awaitable<Errors\Result<RemoveTagsFromResourceResult>>;
  public function ResetServiceSetting(ResetServiceSettingRequest) Awaitable<Errors\Result<ResetServiceSettingResult>>;
  public function ResumeSession(ResumeSessionRequest) Awaitable<Errors\Result<ResumeSessionResponse>>;
  public function SendAutomationSignal(SendAutomationSignalRequest) Awaitable<Errors\Result<SendAutomationSignalResult>>;
  public function SendCommand(SendCommandRequest) Awaitable<Errors\Result<SendCommandResult>>;
  public function StartAssociationsOnce(StartAssociationsOnceRequest) Awaitable<Errors\Result<StartAssociationsOnceResult>>;
  public function StartAutomationExecution(StartAutomationExecutionRequest) Awaitable<Errors\Result<StartAutomationExecutionResult>>;
  public function StartSession(StartSessionRequest) Awaitable<Errors\Result<StartSessionResponse>>;
  public function StopAutomationExecution(StopAutomationExecutionRequest) Awaitable<Errors\Result<StopAutomationExecutionResult>>;
  public function TerminateSession(TerminateSessionRequest) Awaitable<Errors\Result<TerminateSessionResponse>>;
  public function UpdateAssociation(UpdateAssociationRequest) Awaitable<Errors\Result<UpdateAssociationResult>>;
  public function UpdateAssociationStatus(UpdateAssociationStatusRequest) Awaitable<Errors\Result<UpdateAssociationStatusResult>>;
  public function UpdateDocument(UpdateDocumentRequest) Awaitable<Errors\Result<UpdateDocumentResult>>;
  public function UpdateDocumentDefaultVersion(UpdateDocumentDefaultVersionRequest) Awaitable<Errors\Result<UpdateDocumentDefaultVersionResult>>;
  public function UpdateMaintenanceWindow(UpdateMaintenanceWindowRequest) Awaitable<Errors\Result<UpdateMaintenanceWindowResult>>;
  public function UpdateMaintenanceWindowTarget(UpdateMaintenanceWindowTargetRequest) Awaitable<Errors\Result<UpdateMaintenanceWindowTargetResult>>;
  public function UpdateMaintenanceWindowTask(UpdateMaintenanceWindowTaskRequest) Awaitable<Errors\Result<UpdateMaintenanceWindowTaskResult>>;
  public function UpdateManagedInstanceRole(UpdateManagedInstanceRoleRequest) Awaitable<Errors\Result<UpdateManagedInstanceRoleResult>>;
  public function UpdateOpsItem(UpdateOpsItemRequest) Awaitable<Errors\Result<UpdateOpsItemResponse>>;
  public function UpdatePatchBaseline(UpdatePatchBaselineRequest) Awaitable<Errors\Result<UpdatePatchBaselineResult>>;
  public function UpdateResourceDataSync(UpdateResourceDataSyncRequest) Awaitable<Errors\Result<UpdateResourceDataSyncResult>>;
  public function UpdateServiceSetting(UpdateServiceSettingRequest) Awaitable<Errors\Result<UpdateServiceSettingResult>>;
}

class Account {
}

class AccountId {
}

class AccountIdList {
}

class AccountSharingInfo {
  public AccountId $account_id;
  public SharedDocumentVersion $shared_document_version;
}

class AccountSharingInfoList {
}

class Accounts {
}

class Activation {
  public ActivationId $activation_id;
  public CreatedDate $created_date;
  public DefaultInstanceName $default_instance_name;
  public ActivationDescription $description;
  public ExpirationDate $expiration_date;
  public boolean $expired;
  public IamRole $iam_role;
  public RegistrationLimit $registration_limit;
  public RegistrationsCount $registrations_count;
  public TagList $tags;
}

class ActivationCode {
}

class ActivationDescription {
}

class ActivationId {
}

class ActivationList {
}

class AddTagsToResourceRequest {
  public ResourceId $resource_id;
  public ResourceTypeForTagging $resource_type;
  public TagList $tags;
}

class AddTagsToResourceResult {
}

class AgentErrorCode {
}

class AggregatorSchemaOnly {
}

class AllowedPattern {
}

class AlreadyExistsException {
  public string $message;
}

class ApproveAfterDays {
}

class AssociatedInstances {
}

class Association {
  public AssociationId $association_id;
  public AssociationName $association_name;
  public AssociationVersion $association_version;
  public DocumentVersion $document_version;
  public InstanceId $instance_id;
  public DateTime $last_execution_date;
  public DocumentARN $name;
  public AssociationOverview $overview;
  public ScheduleExpression $schedule_expression;
  public Targets $targets;
}

class AssociationAlreadyExists {
}

class AssociationComplianceSeverity {
}

class AssociationDescription {
  public AssociationId $association_id;
  public AssociationName $association_name;
  public AssociationVersion $association_version;
  public AutomationTargetParameterName $automation_target_parameter_name;
  public AssociationComplianceSeverity $compliance_severity;
  public DateTime $date;
  public DocumentVersion $document_version;
  public InstanceId $instance_id;
  public DateTime $last_execution_date;
  public DateTime $last_successful_execution_date;
  public DateTime $last_update_association_date;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public DocumentARN $name;
  public InstanceAssociationOutputLocation $output_location;
  public AssociationOverview $overview;
  public Parameters $parameters;
  public ScheduleExpression $schedule_expression;
  public AssociationStatus $status;
  public Targets $targets;
}

class AssociationDescriptionList {
}

class AssociationDoesNotExist {
  public string $message;
}

class AssociationExecution {
  public AssociationId $association_id;
  public AssociationVersion $association_version;
  public DateTime $created_time;
  public StatusName $detailed_status;
  public AssociationExecutionId $execution_id;
  public DateTime $last_execution_date;
  public ResourceCountByStatus $resource_count_by_status;
  public StatusName $status;
}

class AssociationExecutionDoesNotExist {
  public string $message;
}

class AssociationExecutionFilter {
  public AssociationExecutionFilterKey $key;
  public AssociationFilterOperatorType $type;
  public AssociationExecutionFilterValue $value;
}

class AssociationExecutionFilterKey {
}

class AssociationExecutionFilterList {
}

class AssociationExecutionFilterValue {
}

class AssociationExecutionId {
}

class AssociationExecutionTarget {
  public AssociationId $association_id;
  public AssociationVersion $association_version;
  public StatusName $detailed_status;
  public AssociationExecutionId $execution_id;
  public DateTime $last_execution_date;
  public OutputSource $output_source;
  public AssociationResourceId $resource_id;
  public AssociationResourceType $resource_type;
  public StatusName $status;
}

class AssociationExecutionTargetsFilter {
  public AssociationExecutionTargetsFilterKey $key;
  public AssociationExecutionTargetsFilterValue $value;
}

class AssociationExecutionTargetsFilterKey {
}

class AssociationExecutionTargetsFilterList {
}

class AssociationExecutionTargetsFilterValue {
}

class AssociationExecutionTargetsList {
}

class AssociationExecutionsList {
}

class AssociationFilter {
  public AssociationFilterKey $key;
  public AssociationFilterValue $value;
}

class AssociationFilterKey {
}

class AssociationFilterList {
}

class AssociationFilterOperatorType {
}

class AssociationFilterValue {
}

class AssociationId {
}

class AssociationIdList {
}

class AssociationLimitExceeded {
}

class AssociationList {
}

class AssociationName {
}

class AssociationOverview {
  public AssociationStatusAggregatedCount $association_status_aggregated_count;
  public StatusName $detailed_status;
  public StatusName $status;
}

class AssociationResourceId {
}

class AssociationResourceType {
}

class AssociationStatus {
  public StatusAdditionalInfo $additional_info;
  public DateTime $date;
  public StatusMessage $message;
  public AssociationStatusName $name;
}

class AssociationStatusAggregatedCount {
}

class AssociationStatusName {
}

class AssociationVersion {
}

class AssociationVersionInfo {
  public AssociationId $association_id;
  public AssociationName $association_name;
  public AssociationVersion $association_version;
  public AssociationComplianceSeverity $compliance_severity;
  public DateTime $created_date;
  public DocumentVersion $document_version;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public DocumentARN $name;
  public InstanceAssociationOutputLocation $output_location;
  public Parameters $parameters;
  public ScheduleExpression $schedule_expression;
  public Targets $targets;
}

class AssociationVersionLimitExceeded {
  public string $message;
}

class AssociationVersionList {
}

class AttachmentContent {
  public AttachmentHash $hash;
  public AttachmentHashType $hash_type;
  public AttachmentName $name;
  public ContentLength $size;
  public AttachmentUrl $url;
}

class AttachmentContentList {
}

class AttachmentHash {
}

class AttachmentHashType {
}

class AttachmentIdentifier {
}

class AttachmentInformation {
  public AttachmentName $name;
}

class AttachmentInformationList {
}

class AttachmentName {
}

class AttachmentUrl {
}

class AttachmentsSource {
  public AttachmentsSourceKey $key;
  public AttachmentIdentifier $name;
  public AttachmentsSourceValues $values;
}

class AttachmentsSourceKey {
}

class AttachmentsSourceList {
}

class AttachmentsSourceValue {
}

class AttachmentsSourceValues {
}

class AttributeName {
}

class AttributeValue {
}

class AutomationActionName {
}

class AutomationDefinitionNotFoundException {
  public string $message;
}

class AutomationDefinitionVersionNotFoundException {
  public string $message;
}

class AutomationExecution {
  public AutomationExecutionId $automation_execution_id;
  public AutomationExecutionStatus $automation_execution_status;
  public string $current_action;
  public string $current_step_name;
  public DocumentName $document_name;
  public DocumentVersion $document_version;
  public string $executed_by;
  public DateTime $execution_end_time;
  public DateTime $execution_start_time;
  public string $failure_message;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public ExecutionMode $mode;
  public AutomationParameterMap $outputs;
  public AutomationParameterMap $parameters;
  public AutomationExecutionId $parent_automation_execution_id;
  public ProgressCounters $progress_counters;
  public ResolvedTargets $resolved_targets;
  public StepExecutionList $step_executions;
  public boolean $step_executions_truncated;
  public string $target;
  public TargetLocations $target_locations;
  public TargetMaps $target_maps;
  public AutomationParameterKey $target_parameter_name;
  public Targets $targets;
}

class AutomationExecutionFilter {
  public AutomationExecutionFilterKey $key;
  public AutomationExecutionFilterValueList $values;
}

class AutomationExecutionFilterKey {
}

class AutomationExecutionFilterList {
}

class AutomationExecutionFilterValue {
}

class AutomationExecutionFilterValueList {
}

class AutomationExecutionId {
}

class AutomationExecutionLimitExceededException {
  public string $message;
}

class AutomationExecutionMetadata {
  public AutomationExecutionId $automation_execution_id;
  public AutomationExecutionStatus $automation_execution_status;
  public AutomationType $automation_type;
  public string $current_action;
  public string $current_step_name;
  public DocumentName $document_name;
  public DocumentVersion $document_version;
  public string $executed_by;
  public DateTime $execution_end_time;
  public DateTime $execution_start_time;
  public string $failure_message;
  public string $log_file;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public ExecutionMode $mode;
  public AutomationParameterMap $outputs;
  public AutomationExecutionId $parent_automation_execution_id;
  public ResolvedTargets $resolved_targets;
  public string $target;
  public TargetMaps $target_maps;
  public AutomationParameterKey $target_parameter_name;
  public Targets $targets;
}

class AutomationExecutionMetadataList {
}

class AutomationExecutionNotFoundException {
  public string $message;
}

class AutomationExecutionStatus {
}

class AutomationParameterKey {
}

class AutomationParameterMap {
}

class AutomationParameterValue {
}

class AutomationParameterValueList {
}

class AutomationStepNotFoundException {
  public string $message;
}

class AutomationTargetParameterName {
}

class AutomationType {
}

class BaselineDescription {
}

class BaselineId {
}

class BaselineName {
}

class BatchErrorMessage {
}

class Boolean {
}

class CalendarNameOrARN {
}

class CalendarNameOrARNList {
}

class CalendarState {
}

class CancelCommandRequest {
  public CommandId $command_id;
  public InstanceIdList $instance_ids;
}

class CancelCommandResult {
}

class CancelMaintenanceWindowExecutionRequest {
  public MaintenanceWindowExecutionId $window_execution_id;
}

class CancelMaintenanceWindowExecutionResult {
  public MaintenanceWindowExecutionId $window_execution_id;
}

class ClientToken {
}

class CloudWatchLogGroupName {
}

class CloudWatchOutputConfig {
  public CloudWatchLogGroupName $cloud_watch_log_group_name;
  public CloudWatchOutputEnabled $cloud_watch_output_enabled;
}

class CloudWatchOutputEnabled {
}

class Command {
  public CloudWatchOutputConfig $cloud_watch_output_config;
  public CommandId $command_id;
  public Comment $comment;
  public CompletedCount $completed_count;
  public DeliveryTimedOutCount $delivery_timed_out_count;
  public DocumentName $document_name;
  public DocumentVersion $document_version;
  public ErrorCount $error_count;
  public DateTime $expires_after;
  public InstanceIdList $instance_ids;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public NotificationConfig $notification_config;
  public S3BucketName $output_s_3_bucket_name;
  public S3KeyPrefix $output_s_3_key_prefix;
  public S3Region $output_s_3_region;
  public Parameters $parameters;
  public DateTime $requested_date_time;
  public ServiceRole $service_role;
  public CommandStatus $status;
  public StatusDetails $status_details;
  public TargetCount $target_count;
  public Targets $targets;
}

class CommandFilter {
  public CommandFilterKey $key;
  public CommandFilterValue $value;
}

class CommandFilterKey {
}

class CommandFilterList {
}

class CommandFilterValue {
}

class CommandId {
}

class CommandInvocation {
  public CloudWatchOutputConfig $cloud_watch_output_config;
  public CommandId $command_id;
  public CommandPluginList $command_plugins;
  public Comment $comment;
  public DocumentName $document_name;
  public DocumentVersion $document_version;
  public InstanceId $instance_id;
  public InstanceTagName $instance_name;
  public NotificationConfig $notification_config;
  public DateTime $requested_date_time;
  public ServiceRole $service_role;
  public Url $standard_error_url;
  public Url $standard_output_url;
  public CommandInvocationStatus $status;
  public StatusDetails $status_details;
  public InvocationTraceOutput $trace_output;
}

class CommandInvocationList {
}

class CommandInvocationStatus {
}

class CommandList {
}

class CommandMaxResults {
}

class CommandPlugin {
  public CommandPluginName $name;
  public CommandPluginOutput $output;
  public S3BucketName $output_s_3_bucket_name;
  public S3KeyPrefix $output_s_3_key_prefix;
  public S3Region $output_s_3_region;
  public ResponseCode $response_code;
  public DateTime $response_finish_date_time;
  public DateTime $response_start_date_time;
  public Url $standard_error_url;
  public Url $standard_output_url;
  public CommandPluginStatus $status;
  public StatusDetails $status_details;
}

class CommandPluginList {
}

class CommandPluginName {
}

class CommandPluginOutput {
}

class CommandPluginStatus {
}

class CommandStatus {
}

class Comment {
}

class CompletedCount {
}

class ComplianceExecutionId {
}

class ComplianceExecutionSummary {
  public ComplianceExecutionId $execution_id;
  public DateTime $execution_time;
  public ComplianceExecutionType $execution_type;
}

class ComplianceExecutionType {
}

class ComplianceFilterValue {
}

class ComplianceItem {
  public ComplianceTypeName $compliance_type;
  public ComplianceItemDetails $details;
  public ComplianceExecutionSummary $execution_summary;
  public ComplianceItemId $id;
  public ComplianceResourceId $resource_id;
  public ComplianceResourceType $resource_type;
  public ComplianceSeverity $severity;
  public ComplianceStatus $status;
  public ComplianceItemTitle $title;
}

class ComplianceItemContentHash {
}

class ComplianceItemDetails {
}

class ComplianceItemEntry {
  public ComplianceItemDetails $details;
  public ComplianceItemId $id;
  public ComplianceSeverity $severity;
  public ComplianceStatus $status;
  public ComplianceItemTitle $title;
}

class ComplianceItemEntryList {
}

class ComplianceItemId {
}

class ComplianceItemList {
}

class ComplianceItemTitle {
}

class ComplianceQueryOperatorType {
}

class ComplianceResourceId {
}

class ComplianceResourceIdList {
}

class ComplianceResourceType {
}

class ComplianceResourceTypeList {
}

class ComplianceSeverity {
}

class ComplianceStatus {
}

class ComplianceStringFilter {
  public ComplianceStringFilterKey $key;
  public ComplianceQueryOperatorType $type;
  public ComplianceStringFilterValueList $values;
}

class ComplianceStringFilterKey {
}

class ComplianceStringFilterList {
}

class ComplianceStringFilterValueList {
}

class ComplianceSummaryCount {
}

class ComplianceSummaryItem {
  public ComplianceTypeName $compliance_type;
  public CompliantSummary $compliant_summary;
  public NonCompliantSummary $non_compliant_summary;
}

class ComplianceSummaryItemList {
}

class ComplianceTypeCountLimitExceededException {
  public string $message;
}

class ComplianceTypeName {
}

class CompliantSummary {
  public ComplianceSummaryCount $compliant_count;
  public SeveritySummary $severity_summary;
}

class ComputerName {
}

class ConnectionStatus {
}

class ContentLength {
}

class CreateActivationRequest {
  public DefaultInstanceName $default_instance_name;
  public ActivationDescription $description;
  public ExpirationDate $expiration_date;
  public IamRole $iam_role;
  public RegistrationLimit $registration_limit;
  public TagList $tags;
}

class CreateActivationResult {
  public ActivationCode $activation_code;
  public ActivationId $activation_id;
}

class CreateAssociationBatchRequest {
  public CreateAssociationBatchRequestEntries $entries;
}

class CreateAssociationBatchRequestEntries {
}

class CreateAssociationBatchRequestEntry {
  public AssociationName $association_name;
  public AutomationTargetParameterName $automation_target_parameter_name;
  public AssociationComplianceSeverity $compliance_severity;
  public DocumentVersion $document_version;
  public InstanceId $instance_id;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public DocumentARN $name;
  public InstanceAssociationOutputLocation $output_location;
  public Parameters $parameters;
  public ScheduleExpression $schedule_expression;
  public Targets $targets;
}

class CreateAssociationBatchResult {
  public FailedCreateAssociationList $failed;
  public AssociationDescriptionList $successful;
}

class CreateAssociationRequest {
  public AssociationName $association_name;
  public AutomationTargetParameterName $automation_target_parameter_name;
  public AssociationComplianceSeverity $compliance_severity;
  public DocumentVersion $document_version;
  public InstanceId $instance_id;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public DocumentARN $name;
  public InstanceAssociationOutputLocation $output_location;
  public Parameters $parameters;
  public ScheduleExpression $schedule_expression;
  public Targets $targets;
}

class CreateAssociationResult {
  public AssociationDescription $association_description;
}

class CreateDocumentRequest {
  public AttachmentsSourceList $attachments;
  public DocumentContent $content;
  public DocumentFormat $document_format;
  public DocumentType $document_type;
  public DocumentName $name;
  public DocumentRequiresList $requires;
  public TagList $tags;
  public TargetType $target_type;
  public DocumentVersionName $version_name;
}

class CreateDocumentResult {
  public DocumentDescription $document_description;
}

class CreateMaintenanceWindowRequest {
  public MaintenanceWindowAllowUnassociatedTargets $allow_unassociated_targets;
  public ClientToken $client_token;
  public MaintenanceWindowCutoff $cutoff;
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowDurationHours $duration;
  public MaintenanceWindowStringDateTime $end_date;
  public MaintenanceWindowName $name;
  public MaintenanceWindowSchedule $schedule;
  public MaintenanceWindowTimezone $schedule_timezone;
  public MaintenanceWindowStringDateTime $start_date;
  public TagList $tags;
}

class CreateMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;
}

class CreateOpsItemRequest {
  public OpsItemCategory $category;
  public OpsItemDescription $description;
  public OpsItemNotifications $notifications;
  public OpsItemOperationalData $operational_data;
  public OpsItemPriority $priority;
  public RelatedOpsItems $related_ops_items;
  public OpsItemSeverity $severity;
  public OpsItemSource $source;
  public TagList $tags;
  public OpsItemTitle $title;
}

class CreateOpsItemResponse {
  public string $ops_item_id;
}

class CreatePatchBaselineRequest {
  public PatchRuleGroup $approval_rules;
  public PatchIdList $approved_patches;
  public PatchComplianceLevel $approved_patches_compliance_level;
  public boolean $approved_patches_enable_non_security;
  public ClientToken $client_token;
  public BaselineDescription $description;
  public PatchFilterGroup $global_filters;
  public BaselineName $name;
  public OperatingSystem $operating_system;
  public PatchIdList $rejected_patches;
  public PatchAction $rejected_patches_action;
  public PatchSourceList $sources;
  public TagList $tags;
}

class CreatePatchBaselineResult {
  public BaselineId $baseline_id;
}

class CreateResourceDataSyncRequest {
  public ResourceDataSyncS3Destination $s_3_destination;
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncSource $sync_source;
  public ResourceDataSyncType $sync_type;
}

class CreateResourceDataSyncResult {
}

class CreatedDate {
}

class CustomSchemaCountLimitExceededException {
  public string $message;
}

class DateTime {
}

class DefaultBaseline {
}

class DefaultInstanceName {
}

class DeleteActivationRequest {
  public ActivationId $activation_id;
}

class DeleteActivationResult {
}

class DeleteAssociationRequest {
  public AssociationId $association_id;
  public InstanceId $instance_id;
  public DocumentARN $name;
}

class DeleteAssociationResult {
}

class DeleteDocumentRequest {
  public DocumentVersion $document_version;
  public boolean $force;
  public DocumentName $name;
  public DocumentVersionName $version_name;
}

class DeleteDocumentResult {
}

class DeleteInventoryRequest {
  public ClientToken $client_token;
  public DryRun $dry_run;
  public InventorySchemaDeleteOption $schema_delete_option;
  public InventoryItemTypeName $type_name;
}

class DeleteInventoryResult {
  public InventoryDeletionId $deletion_id;
  public InventoryDeletionSummary $deletion_summary;
  public InventoryItemTypeName $type_name;
}

class DeleteMaintenanceWindowRequest {
  public MaintenanceWindowId $window_id;
}

class DeleteMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;
}

class DeleteParameterRequest {
  public PSParameterName $name;
}

class DeleteParameterResult {
}

class DeleteParametersRequest {
  public ParameterNameList $names;
}

class DeleteParametersResult {
  public ParameterNameList $deleted_parameters;
  public ParameterNameList $invalid_parameters;
}

class DeletePatchBaselineRequest {
  public BaselineId $baseline_id;
}

class DeletePatchBaselineResult {
  public BaselineId $baseline_id;
}

class DeleteResourceDataSyncRequest {
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncType $sync_type;
}

class DeleteResourceDataSyncResult {
}

class DeliveryTimedOutCount {
}

class DeregisterManagedInstanceRequest {
  public ManagedInstanceId $instance_id;
}

class DeregisterManagedInstanceResult {
}

class DeregisterPatchBaselineForPatchGroupRequest {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;
}

class DeregisterPatchBaselineForPatchGroupResult {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;
}

class DeregisterTargetFromMaintenanceWindowRequest {
  public boolean $safe;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;
}

class DeregisterTargetFromMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;
}

class DeregisterTaskFromMaintenanceWindowRequest {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;
}

class DeregisterTaskFromMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;
}

class DescribeActivationsFilter {
  public DescribeActivationsFilterKeys $filter_key;
  public StringList $filter_values;
}

class DescribeActivationsFilterKeys {
}

class DescribeActivationsFilterList {
}

class DescribeActivationsRequest {
  public DescribeActivationsFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeActivationsResult {
  public ActivationList $activation_list;
  public NextToken $next_token;
}

class DescribeAssociationExecutionTargetsRequest {
  public AssociationId $association_id;
  public AssociationExecutionId $execution_id;
  public AssociationExecutionTargetsFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeAssociationExecutionTargetsResult {
  public AssociationExecutionTargetsList $association_execution_targets;
  public NextToken $next_token;
}

class DescribeAssociationExecutionsRequest {
  public AssociationId $association_id;
  public AssociationExecutionFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeAssociationExecutionsResult {
  public AssociationExecutionsList $association_executions;
  public NextToken $next_token;
}

class DescribeAssociationRequest {
  public AssociationId $association_id;
  public AssociationVersion $association_version;
  public InstanceId $instance_id;
  public DocumentARN $name;
}

class DescribeAssociationResult {
  public AssociationDescription $association_description;
}

class DescribeAutomationExecutionsRequest {
  public AutomationExecutionFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeAutomationExecutionsResult {
  public AutomationExecutionMetadataList $automation_execution_metadata_list;
  public NextToken $next_token;
}

class DescribeAutomationStepExecutionsRequest {
  public AutomationExecutionId $automation_execution_id;
  public StepExecutionFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public boolean $reverse_order;
}

class DescribeAutomationStepExecutionsResult {
  public NextToken $next_token;
  public StepExecutionList $step_executions;
}

class DescribeAvailablePatchesRequest {
  public PatchOrchestratorFilterList $filters;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeAvailablePatchesResult {
  public NextToken $next_token;
  public PatchList $patches;
}

class DescribeDocumentPermissionRequest {
  public DocumentName $name;
  public DocumentPermissionType $permission_type;
}

class DescribeDocumentPermissionResponse {
  public AccountIdList $account_ids;
  public AccountSharingInfoList $account_sharing_info_list;
}

class DescribeDocumentRequest {
  public DocumentVersion $document_version;
  public DocumentARN $name;
  public DocumentVersionName $version_name;
}

class DescribeDocumentResult {
  public DocumentDescription $document;
}

class DescribeEffectiveInstanceAssociationsRequest {
  public InstanceId $instance_id;
  public EffectiveInstanceAssociationMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeEffectiveInstanceAssociationsResult {
  public InstanceAssociationList $associations;
  public NextToken $next_token;
}

class DescribeEffectivePatchesForPatchBaselineRequest {
  public BaselineId $baseline_id;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeEffectivePatchesForPatchBaselineResult {
  public EffectivePatchList $effective_patches;
  public NextToken $next_token;
}

class DescribeInstanceAssociationsStatusRequest {
  public InstanceId $instance_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeInstanceAssociationsStatusResult {
  public InstanceAssociationStatusInfos $instance_association_status_infos;
  public NextToken $next_token;
}

class DescribeInstanceInformationRequest {
  public InstanceInformationStringFilterList $filters;
  public InstanceInformationFilterList $instance_information_filter_list;
  public MaxResultsEC2Compatible $max_results;
  public NextToken $next_token;
}

class DescribeInstanceInformationResult {
  public InstanceInformationList $instance_information_list;
  public NextToken $next_token;
}

class DescribeInstancePatchStatesForPatchGroupRequest {
  public InstancePatchStateFilterList $filters;
  public PatchComplianceMaxResults $max_results;
  public NextToken $next_token;
  public PatchGroup $patch_group;
}

class DescribeInstancePatchStatesForPatchGroupResult {
  public InstancePatchStatesList $instance_patch_states;
  public NextToken $next_token;
}

class DescribeInstancePatchStatesRequest {
  public InstanceIdList $instance_ids;
  public PatchComplianceMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeInstancePatchStatesResult {
  public InstancePatchStateList $instance_patch_states;
  public NextToken $next_token;
}

class DescribeInstancePatchesRequest {
  public PatchOrchestratorFilterList $filters;
  public InstanceId $instance_id;
  public PatchComplianceMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeInstancePatchesResult {
  public NextToken $next_token;
  public PatchComplianceDataList $patches;
}

class DescribeInventoryDeletionsRequest {
  public InventoryDeletionId $deletion_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeInventoryDeletionsResult {
  public InventoryDeletionsList $inventory_deletions;
  public NextToken $next_token;
}

class DescribeMaintenanceWindowExecutionTaskInvocationsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowExecutionTaskId $task_id;
  public MaintenanceWindowExecutionId $window_execution_id;
}

class DescribeMaintenanceWindowExecutionTaskInvocationsResult {
  public NextToken $next_token;
  public MaintenanceWindowExecutionTaskInvocationIdentityList $window_execution_task_invocation_identities;
}

class DescribeMaintenanceWindowExecutionTasksRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowExecutionId $window_execution_id;
}

class DescribeMaintenanceWindowExecutionTasksResult {
  public NextToken $next_token;
  public MaintenanceWindowExecutionTaskIdentityList $window_execution_task_identities;
}

class DescribeMaintenanceWindowExecutionsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowId $window_id;
}

class DescribeMaintenanceWindowExecutionsResult {
  public NextToken $next_token;
  public MaintenanceWindowExecutionList $window_executions;
}

class DescribeMaintenanceWindowScheduleRequest {
  public PatchOrchestratorFilterList $filters;
  public MaintenanceWindowSearchMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
}

class DescribeMaintenanceWindowScheduleResult {
  public NextToken $next_token;
  public ScheduledWindowExecutionList $scheduled_window_executions;
}

class DescribeMaintenanceWindowTargetsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowId $window_id;
}

class DescribeMaintenanceWindowTargetsResult {
  public NextToken $next_token;
  public MaintenanceWindowTargetList $targets;
}

class DescribeMaintenanceWindowTasksRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowId $window_id;
}

class DescribeMaintenanceWindowTasksResult {
  public NextToken $next_token;
  public MaintenanceWindowTaskList $tasks;
}

class DescribeMaintenanceWindowsForTargetRequest {
  public MaintenanceWindowSearchMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;
}

class DescribeMaintenanceWindowsForTargetResult {
  public NextToken $next_token;
  public MaintenanceWindowsForTargetList $window_identities;
}

class DescribeMaintenanceWindowsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeMaintenanceWindowsResult {
  public NextToken $next_token;
  public MaintenanceWindowIdentityList $window_identities;
}

class DescribeOpsItemsRequest {
  public OpsItemMaxResults $max_results;
  public string $next_token;
  public OpsItemFilters $ops_item_filters;
}

class DescribeOpsItemsResponse {
  public string $next_token;
  public OpsItemSummaries $ops_item_summaries;
}

class DescribeParametersRequest {
  public ParametersFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ParameterStringFilterList $parameter_filters;
}

class DescribeParametersResult {
  public NextToken $next_token;
  public ParameterMetadataList $parameters;
}

class DescribePatchBaselinesRequest {
  public PatchOrchestratorFilterList $filters;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;
}

class DescribePatchBaselinesResult {
  public PatchBaselineIdentityList $baseline_identities;
  public NextToken $next_token;
}

class DescribePatchGroupStateRequest {
  public PatchGroup $patch_group;
}

class DescribePatchGroupStateResult {
  public int $instances;
  public int $instances_with_failed_patches;
  public int $instances_with_installed_other_patches;
  public int $instances_with_installed_patches;
  public InstancesCount $instances_with_installed_pending_reboot_patches;
  public InstancesCount $instances_with_installed_rejected_patches;
  public int $instances_with_missing_patches;
  public int $instances_with_not_applicable_patches;
  public int $instances_with_unreported_not_applicable_patches;
}

class DescribePatchGroupsRequest {
  public PatchOrchestratorFilterList $filters;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;
}

class DescribePatchGroupsResult {
  public PatchGroupPatchBaselineMappingList $mappings;
  public NextToken $next_token;
}

class DescribePatchPropertiesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OperatingSystem $operating_system;
  public PatchSet $patch_set;
  public PatchProperty $property;
}

class DescribePatchPropertiesResult {
  public NextToken $next_token;
  public PatchPropertiesList $properties;
}

class DescribeSessionsRequest {
  public SessionFilterList $filters;
  public SessionMaxResults $max_results;
  public NextToken $next_token;
  public SessionState $state;
}

class DescribeSessionsResponse {
  public NextToken $next_token;
  public SessionList $sessions;
}

class DescriptionInDocument {
}

class DocumentARN {
}

class DocumentAlreadyExists {
  public string $message;
}

class DocumentContent {
}

class DocumentDefaultVersionDescription {
  public DocumentVersion $default_version;
  public DocumentVersionName $default_version_name;
  public DocumentName $name;
}

class DocumentDescription {
  public AttachmentInformationList $attachments_information;
  public DateTime $created_date;
  public DocumentVersion $default_version;
  public DescriptionInDocument $description;
  public DocumentFormat $document_format;
  public DocumentType $document_type;
  public DocumentVersion $document_version;
  public DocumentHash $hash;
  public DocumentHashType $hash_type;
  public DocumentVersion $latest_version;
  public DocumentARN $name;
  public DocumentOwner $owner;
  public DocumentParameterList $parameters;
  public PlatformTypeList $platform_types;
  public DocumentRequiresList $requires;
  public DocumentSchemaVersion $schema_version;
  public DocumentSha1 $sha_1;
  public DocumentStatus $status;
  public DocumentStatusInformation $status_information;
  public TagList $tags;
  public TargetType $target_type;
  public DocumentVersionName $version_name;
}

class DocumentFilter {
  public DocumentFilterKey $key;
  public DocumentFilterValue $value;
}

class DocumentFilterKey {
}

class DocumentFilterList {
}

class DocumentFilterValue {
}

class DocumentFormat {
}

class DocumentHash {
}

class DocumentHashType {
}

class DocumentIdentifier {
  public DocumentFormat $document_format;
  public DocumentType $document_type;
  public DocumentVersion $document_version;
  public DocumentARN $name;
  public DocumentOwner $owner;
  public PlatformTypeList $platform_types;
  public DocumentRequiresList $requires;
  public DocumentSchemaVersion $schema_version;
  public TagList $tags;
  public TargetType $target_type;
  public DocumentVersionName $version_name;
}

class DocumentIdentifierList {
}

class DocumentKeyValuesFilter {
  public DocumentKeyValuesFilterKey $key;
  public DocumentKeyValuesFilterValues $values;
}

class DocumentKeyValuesFilterKey {
}

class DocumentKeyValuesFilterList {
}

class DocumentKeyValuesFilterValue {
}

class DocumentKeyValuesFilterValues {
}

class DocumentLimitExceeded {
  public string $message;
}

class DocumentName {
}

class DocumentOwner {
}

class DocumentParameter {
  public DocumentParameterDefaultValue $default_value;
  public DocumentParameterDescrption $description;
  public DocumentParameterName $name;
  public DocumentParameterType $type;
}

class DocumentParameterDefaultValue {
}

class DocumentParameterDescrption {
}

class DocumentParameterList {
}

class DocumentParameterName {
}

class DocumentParameterType {
}

class DocumentPermissionLimit {
  public string $message;
}

class DocumentPermissionType {
}

class DocumentRequires {
  public DocumentARN $name;
  public DocumentVersion $version;
}

class DocumentRequiresList {
}

class DocumentSchemaVersion {
}

class DocumentSha1 {
}

class DocumentStatus {
}

class DocumentStatusInformation {
}

class DocumentType {
}

class DocumentVersion {
}

class DocumentVersionInfo {
  public DateTime $created_date;
  public DocumentFormat $document_format;
  public DocumentVersion $document_version;
  public boolean $is_default_version;
  public DocumentName $name;
  public DocumentStatus $status;
  public DocumentStatusInformation $status_information;
  public DocumentVersionName $version_name;
}

class DocumentVersionLimitExceeded {
  public string $message;
}

class DocumentVersionList {
}

class DocumentVersionName {
}

class DocumentVersionNumber {
}

class DoesNotExistException {
  public string $message;
}

class DryRun {
}

class DuplicateDocumentContent {
  public string $message;
}

class DuplicateDocumentVersionName {
  public string $message;
}

class DuplicateInstanceId {
}

class EffectiveInstanceAssociationMaxResults {
}

class EffectivePatch {
  public Patch $patch;
  public PatchStatus $patch_status;
}

class EffectivePatchList {
}

class ErrorCount {
}

class ExecutionMode {
}

class ExecutionRoleName {
}

class ExpirationDate {
}

class FailedCreateAssociation {
  public CreateAssociationBatchRequestEntry $entry;
  public Fault $fault;
  public BatchErrorMessage $message;
}

class FailedCreateAssociationList {
}

class FailureDetails {
  public AutomationParameterMap $details;
  public string $failure_stage;
  public string $failure_type;
}

class Fault {
}

class FeatureNotAvailableException {
  public string $message;
}

class GetAutomationExecutionRequest {
  public AutomationExecutionId $automation_execution_id;
}

class GetAutomationExecutionResult {
  public AutomationExecution $automation_execution;
}

class GetCalendarStateRequest {
  public ISO8601String $at_time;
  public CalendarNameOrARNList $calendar_names;
}

class GetCalendarStateResponse {
  public ISO8601String $at_time;
  public ISO8601String $next_transition_time;
  public CalendarState $state;
}

class GetCommandInvocationRequest {
  public CommandId $command_id;
  public InstanceId $instance_id;
  public CommandPluginName $plugin_name;
}

class GetCommandInvocationResult {
  public CloudWatchOutputConfig $cloud_watch_output_config;
  public CommandId $command_id;
  public Comment $comment;
  public DocumentName $document_name;
  public DocumentVersion $document_version;
  public StringDateTime $execution_elapsed_time;
  public StringDateTime $execution_end_date_time;
  public StringDateTime $execution_start_date_time;
  public InstanceId $instance_id;
  public CommandPluginName $plugin_name;
  public ResponseCode $response_code;
  public StandardErrorContent $standard_error_content;
  public Url $standard_error_url;
  public StandardOutputContent $standard_output_content;
  public Url $standard_output_url;
  public CommandInvocationStatus $status;
  public StatusDetails $status_details;
}

class GetConnectionStatusRequest {
  public SessionTarget $target;
}

class GetConnectionStatusResponse {
  public ConnectionStatus $status;
  public SessionTarget $target;
}

class GetDefaultPatchBaselineRequest {
  public OperatingSystem $operating_system;
}

class GetDefaultPatchBaselineResult {
  public BaselineId $baseline_id;
  public OperatingSystem $operating_system;
}

class GetDeployablePatchSnapshotForInstanceRequest {
  public InstanceId $instance_id;
  public SnapshotId $snapshot_id;
}

class GetDeployablePatchSnapshotForInstanceResult {
  public InstanceId $instance_id;
  public Product $product;
  public SnapshotDownloadUrl $snapshot_download_url;
  public SnapshotId $snapshot_id;
}

class GetDocumentRequest {
  public DocumentFormat $document_format;
  public DocumentVersion $document_version;
  public DocumentARN $name;
  public DocumentVersionName $version_name;
}

class GetDocumentResult {
  public AttachmentContentList $attachments_content;
  public DocumentContent $content;
  public DocumentFormat $document_format;
  public DocumentType $document_type;
  public DocumentVersion $document_version;
  public DocumentARN $name;
  public DocumentRequiresList $requires;
  public DocumentStatus $status;
  public DocumentStatusInformation $status_information;
  public DocumentVersionName $version_name;
}

class GetInventoryRequest {
  public InventoryAggregatorList $aggregators;
  public InventoryFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResultAttributeList $result_attributes;
}

class GetInventoryResult {
  public InventoryResultEntityList $entities;
  public NextToken $next_token;
}

class GetInventorySchemaMaxResults {
}

class GetInventorySchemaRequest {
  public AggregatorSchemaOnly $aggregator;
  public GetInventorySchemaMaxResults $max_results;
  public NextToken $next_token;
  public IsSubTypeSchema $sub_type;
  public InventoryItemTypeNameFilter $type_name;
}

class GetInventorySchemaResult {
  public NextToken $next_token;
  public InventoryItemSchemaResultList $schemas;
}

class GetMaintenanceWindowExecutionRequest {
  public MaintenanceWindowExecutionId $window_execution_id;
}

class GetMaintenanceWindowExecutionResult {
  public DateTime $end_time;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowExecutionTaskIdList $task_ids;
  public MaintenanceWindowExecutionId $window_execution_id;
}

class GetMaintenanceWindowExecutionTaskInvocationRequest {
  public MaintenanceWindowExecutionTaskInvocationId $invocation_id;
  public MaintenanceWindowExecutionTaskId $task_id;
  public MaintenanceWindowExecutionId $window_execution_id;
}

class GetMaintenanceWindowExecutionTaskInvocationResult {
  public DateTime $end_time;
  public MaintenanceWindowExecutionTaskExecutionId $execution_id;
  public MaintenanceWindowExecutionTaskInvocationId $invocation_id;
  public OwnerInformation $owner_information;
  public MaintenanceWindowExecutionTaskInvocationParameters $parameters;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowExecutionTaskId $task_execution_id;
  public MaintenanceWindowTaskType $task_type;
  public MaintenanceWindowExecutionId $window_execution_id;
  public MaintenanceWindowTaskTargetId $window_target_id;
}

class GetMaintenanceWindowExecutionTaskRequest {
  public MaintenanceWindowExecutionTaskId $task_id;
  public MaintenanceWindowExecutionId $window_execution_id;
}

class GetMaintenanceWindowExecutionTaskResult {
  public DateTime $end_time;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public MaintenanceWindowTaskPriority $priority;
  public ServiceRole $service_role;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowExecutionTaskId $task_execution_id;
  public MaintenanceWindowTaskParametersList $task_parameters;
  public MaintenanceWindowTaskType $type;
  public MaintenanceWindowExecutionId $window_execution_id;
}

class GetMaintenanceWindowRequest {
  public MaintenanceWindowId $window_id;
}

class GetMaintenanceWindowResult {
  public MaintenanceWindowAllowUnassociatedTargets $allow_unassociated_targets;
  public DateTime $created_date;
  public MaintenanceWindowCutoff $cutoff;
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowDurationHours $duration;
  public MaintenanceWindowEnabled $enabled;
  public MaintenanceWindowStringDateTime $end_date;
  public DateTime $modified_date;
  public MaintenanceWindowName $name;
  public MaintenanceWindowStringDateTime $next_execution_time;
  public MaintenanceWindowSchedule $schedule;
  public MaintenanceWindowTimezone $schedule_timezone;
  public MaintenanceWindowStringDateTime $start_date;
  public MaintenanceWindowId $window_id;
}

class GetMaintenanceWindowTaskRequest {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;
}

class GetMaintenanceWindowTaskResult {
  public MaintenanceWindowDescription $description;
  public LoggingInfo $logging_info;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public MaintenanceWindowName $name;
  public MaintenanceWindowTaskPriority $priority;
  public ServiceRole $service_role_arn;
  public Targets $targets;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowTaskInvocationParameters $task_invocation_parameters;
  public MaintenanceWindowTaskParameters $task_parameters;
  public MaintenanceWindowTaskType $task_type;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;
}

class GetOpsItemRequest {
  public OpsItemId $ops_item_id;
}

class GetOpsItemResponse {
  public OpsItem $ops_item;
}

class GetOpsSummaryRequest {
  public OpsAggregatorList $aggregators;
  public OpsFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OpsResultAttributeList $result_attributes;
  public ResourceDataSyncName $sync_name;
}

class GetOpsSummaryResult {
  public OpsEntityList $entities;
  public NextToken $next_token;
}

class GetParameterHistoryRequest {
  public MaxResults $max_results;
  public PSParameterName $name;
  public NextToken $next_token;
  public boolean $with_decryption;
}

class GetParameterHistoryResult {
  public NextToken $next_token;
  public ParameterHistoryList $parameters;
}

class GetParameterRequest {
  public PSParameterName $name;
  public boolean $with_decryption;
}

class GetParameterResult {
  public Parameter $parameter;
}

class GetParametersByPathMaxResults {
}

class GetParametersByPathRequest {
  public GetParametersByPathMaxResults $max_results;
  public NextToken $next_token;
  public ParameterStringFilterList $parameter_filters;
  public PSParameterName $path;
  public boolean $recursive;
  public boolean $with_decryption;
}

class GetParametersByPathResult {
  public NextToken $next_token;
  public ParameterList $parameters;
}

class GetParametersRequest {
  public ParameterNameList $names;
  public boolean $with_decryption;
}

class GetParametersResult {
  public ParameterNameList $invalid_parameters;
  public ParameterList $parameters;
}

class GetPatchBaselineForPatchGroupRequest {
  public OperatingSystem $operating_system;
  public PatchGroup $patch_group;
}

class GetPatchBaselineForPatchGroupResult {
  public BaselineId $baseline_id;
  public OperatingSystem $operating_system;
  public PatchGroup $patch_group;
}

class GetPatchBaselineRequest {
  public BaselineId $baseline_id;
}

class GetPatchBaselineResult {
  public PatchRuleGroup $approval_rules;
  public PatchIdList $approved_patches;
  public PatchComplianceLevel $approved_patches_compliance_level;
  public boolean $approved_patches_enable_non_security;
  public BaselineId $baseline_id;
  public DateTime $created_date;
  public BaselineDescription $description;
  public PatchFilterGroup $global_filters;
  public DateTime $modified_date;
  public BaselineName $name;
  public OperatingSystem $operating_system;
  public PatchGroupList $patch_groups;
  public PatchIdList $rejected_patches;
  public PatchAction $rejected_patches_action;
  public PatchSourceList $sources;
}

class GetServiceSettingRequest {
  public ServiceSettingId $setting_id;
}

class GetServiceSettingResult {
  public ServiceSetting $service_setting;
}

class HierarchyLevelLimitExceededException {
  public string $message;
}

class HierarchyTypeMismatchException {
  public string $message;
}

class IPAddress {
}

class ISO8601String {
}

class IamRole {
}

class IdempotencyToken {
}

class IdempotentParameterMismatch {
  public string $message;
}

class IncompatiblePolicyException {
  public string $message;
}

class InstallOverrideList {
}

class InstanceAggregatedAssociationOverview {
  public StatusName $detailed_status;
  public InstanceAssociationStatusAggregatedCount $instance_association_status_aggregated_count;
}

class InstanceAssociation {
  public AssociationId $association_id;
  public AssociationVersion $association_version;
  public DocumentContent $content;
  public InstanceId $instance_id;
}

class InstanceAssociationExecutionSummary {
}

class InstanceAssociationList {
}

class InstanceAssociationOutputLocation {
  public S3OutputLocation $s_3_location;
}

class InstanceAssociationOutputUrl {
  public S3OutputUrl $s_3_output_url;
}

class InstanceAssociationStatusAggregatedCount {
}

class InstanceAssociationStatusInfo {
  public AssociationId $association_id;
  public AssociationName $association_name;
  public AssociationVersion $association_version;
  public StatusName $detailed_status;
  public DocumentVersion $document_version;
  public AgentErrorCode $error_code;
  public DateTime $execution_date;
  public InstanceAssociationExecutionSummary $execution_summary;
  public InstanceId $instance_id;
  public DocumentARN $name;
  public InstanceAssociationOutputUrl $output_url;
  public StatusName $status;
}

class InstanceAssociationStatusInfos {
}

class InstanceCount {
}

class InstanceId {
}

class InstanceIdList {
}

class InstanceInformation {
  public ActivationId $activation_id;
  public Version $agent_version;
  public InstanceAggregatedAssociationOverview $association_overview;
  public StatusName $association_status;
  public ComputerName $computer_name;
  public IPAddress $ip_address;
  public IamRole $iam_role;
  public InstanceId $instance_id;
  public boolean $is_latest_version;
  public DateTime $last_association_execution_date;
  public DateTime $last_ping_date_time;
  public DateTime $last_successful_association_execution_date;
  public string $name;
  public PingStatus $ping_status;
  public string $platform_name;
  public PlatformType $platform_type;
  public string $platform_version;
  public DateTime $registration_date;
  public ResourceType $resource_type;
}

class InstanceInformationFilter {
  public InstanceInformationFilterKey $key;
  public InstanceInformationFilterValueSet $value_set;
}

class InstanceInformationFilterKey {
}

class InstanceInformationFilterList {
}

class InstanceInformationFilterValue {
}

class InstanceInformationFilterValueSet {
}

class InstanceInformationList {
}

class InstanceInformationStringFilter {
  public InstanceInformationStringFilterKey $key;
  public InstanceInformationFilterValueSet $values;
}

class InstanceInformationStringFilterKey {
}

class InstanceInformationStringFilterList {
}

class InstancePatchState {
  public BaselineId $baseline_id;
  public PatchFailedCount $failed_count;
  public InstallOverrideList $install_override_list;
  public PatchInstalledCount $installed_count;
  public PatchInstalledOtherCount $installed_other_count;
  public PatchInstalledPendingRebootCount $installed_pending_reboot_count;
  public PatchInstalledRejectedCount $installed_rejected_count;
  public InstanceId $instance_id;
  public DateTime $last_no_reboot_install_operation_time;
  public PatchMissingCount $missing_count;
  public PatchNotApplicableCount $not_applicable_count;
  public PatchOperationType $operation;
  public DateTime $operation_end_time;
  public DateTime $operation_start_time;
  public OwnerInformation $owner_information;
  public PatchGroup $patch_group;
  public RebootOption $reboot_option;
  public SnapshotId $snapshot_id;
  public PatchUnreportedNotApplicableCount $unreported_not_applicable_count;
}

class InstancePatchStateFilter {
  public InstancePatchStateFilterKey $key;
  public InstancePatchStateOperatorType $type;
  public InstancePatchStateFilterValues $values;
}

class InstancePatchStateFilterKey {
}

class InstancePatchStateFilterList {
}

class InstancePatchStateFilterValue {
}

class InstancePatchStateFilterValues {
}

class InstancePatchStateList {
}

class InstancePatchStateOperatorType {
}

class InstancePatchStatesList {
}

class InstanceTagName {
}

class InstancesCount {
}

class Integer {
}

class InternalServerError {
  public string $message;
}

class InvalidActivation {
  public string $message;
}

class InvalidActivationId {
  public string $message;
}

class InvalidAggregatorException {
  public string $message;
}

class InvalidAllowedPatternException {
  public string $message;
}

class InvalidAssociation {
  public string $message;
}

class InvalidAssociationVersion {
  public string $message;
}

class InvalidAutomationExecutionParametersException {
  public string $message;
}

class InvalidAutomationSignalException {
  public string $message;
}

class InvalidAutomationStatusUpdateException {
  public string $message;
}

class InvalidCommandId {
}

class InvalidDeleteInventoryParametersException {
  public string $message;
}

class InvalidDeletionIdException {
  public string $message;
}

class InvalidDocument {
  public string $message;
}

class InvalidDocumentContent {
  public string $message;
}

class InvalidDocumentOperation {
  public string $message;
}

class InvalidDocumentSchemaVersion {
  public string $message;
}

class InvalidDocumentType {
  public string $message;
}

class InvalidDocumentVersion {
  public string $message;
}

class InvalidFilter {
  public string $message;
}

class InvalidFilterKey {
}

class InvalidFilterOption {
  public string $message;
}

class InvalidFilterValue {
  public string $message;
}

class InvalidInstanceId {
  public string $message;
}

class InvalidInstanceInformationFilterValue {
  public string $message;
}

class InvalidInventoryGroupException {
  public string $message;
}

class InvalidInventoryItemContextException {
  public string $message;
}

class InvalidInventoryRequestException {
  public string $message;
}

class InvalidItemContentException {
  public string $message;
  public InventoryItemTypeName $type_name;
}

class InvalidKeyId {
  public string $message;
}

class InvalidNextToken {
  public string $message;
}

class InvalidNotificationConfig {
  public string $message;
}

class InvalidOptionException {
  public string $message;
}

class InvalidOutputFolder {
}

class InvalidOutputLocation {
}

class InvalidParameters {
  public string $message;
}

class InvalidPermissionType {
  public string $message;
}

class InvalidPluginName {
}

class InvalidPolicyAttributeException {
  public string $message;
}

class InvalidPolicyTypeException {
  public string $message;
}

class InvalidResourceId {
}

class InvalidResourceType {
}

class InvalidResultAttributeException {
  public string $message;
}

class InvalidRole {
  public string $message;
}

class InvalidSchedule {
  public string $message;
}

class InvalidTarget {
  public string $message;
}

class InvalidTypeNameException {
  public string $message;
}

class InvalidUpdate {
  public string $message;
}

class InventoryAggregator {
  public InventoryAggregatorList $aggregators;
  public InventoryAggregatorExpression $expression;
  public InventoryGroupList $groups;
}

class InventoryAggregatorExpression {
}

class InventoryAggregatorList {
}

class InventoryAttributeDataType {
}

class InventoryDeletionId {
}

class InventoryDeletionLastStatusMessage {
}

class InventoryDeletionLastStatusUpdateTime {
}

class InventoryDeletionStartTime {
}

class InventoryDeletionStatus {
}

class InventoryDeletionStatusItem {
  public InventoryDeletionId $deletion_id;
  public InventoryDeletionStartTime $deletion_start_time;
  public InventoryDeletionSummary $deletion_summary;
  public InventoryDeletionStatus $last_status;
  public InventoryDeletionLastStatusMessage $last_status_message;
  public InventoryDeletionLastStatusUpdateTime $last_status_update_time;
  public InventoryItemTypeName $type_name;
}

class InventoryDeletionSummary {
  public RemainingCount $remaining_count;
  public InventoryDeletionSummaryItems $summary_items;
  public TotalCount $total_count;
}

class InventoryDeletionSummaryItem {
  public ResourceCount $count;
  public RemainingCount $remaining_count;
  public InventoryItemSchemaVersion $version;
}

class InventoryDeletionSummaryItems {
}

class InventoryDeletionsList {
}

class InventoryFilter {
  public InventoryFilterKey $key;
  public InventoryQueryOperatorType $type;
  public InventoryFilterValueList $values;
}

class InventoryFilterKey {
}

class InventoryFilterList {
}

class InventoryFilterValue {
}

class InventoryFilterValueList {
}

class InventoryGroup {
  public InventoryFilterList $filters;
  public InventoryGroupName $name;
}

class InventoryGroupList {
}

class InventoryGroupName {
}

class InventoryItem {
  public InventoryItemCaptureTime $capture_time;
  public InventoryItemEntryList $content;
  public InventoryItemContentHash $content_hash;
  public InventoryItemContentContext $context;
  public InventoryItemSchemaVersion $schema_version;
  public InventoryItemTypeName $type_name;
}

class InventoryItemAttribute {
  public InventoryAttributeDataType $data_type;
  public InventoryItemAttributeName $name;
}

class InventoryItemAttributeList {
}

class InventoryItemAttributeName {
}

class InventoryItemCaptureTime {
}

class InventoryItemContentContext {
}

class InventoryItemContentHash {
}

class InventoryItemEntry {
}

class InventoryItemEntryList {
}

class InventoryItemList {
}

class InventoryItemSchema {
  public InventoryItemAttributeList $attributes;
  public InventoryTypeDisplayName $display_name;
  public InventoryItemTypeName $type_name;
  public InventoryItemSchemaVersion $version;
}

class InventoryItemSchemaResultList {
}

class InventoryItemSchemaVersion {
}

class InventoryItemTypeName {
}

class InventoryItemTypeNameFilter {
}

class InventoryQueryOperatorType {
}

class InventoryResultEntity {
  public InventoryResultItemMap $data;
  public InventoryResultEntityId $id;
}

class InventoryResultEntityId {
}

class InventoryResultEntityList {
}

class InventoryResultItem {
  public InventoryItemCaptureTime $capture_time;
  public InventoryItemEntryList $content;
  public InventoryItemContentHash $content_hash;
  public InventoryItemSchemaVersion $schema_version;
  public InventoryItemTypeName $type_name;
}

class InventoryResultItemKey {
}

class InventoryResultItemMap {
}

class InventorySchemaDeleteOption {
}

class InventoryTypeDisplayName {
}

class InvocationDoesNotExist {
}

class InvocationTraceOutput {
}

class IsSubTypeSchema {
}

class ItemContentMismatchException {
  public string $message;
  public InventoryItemTypeName $type_name;
}

class ItemSizeLimitExceededException {
  public string $message;
  public InventoryItemTypeName $type_name;
}

class KeyList {
}

class LabelParameterVersionRequest {
  public ParameterLabelList $labels;
  public PSParameterName $name;
  public PSParameterVersion $parameter_version;
}

class LabelParameterVersionResult {
  public ParameterLabelList $invalid_labels;
  public PSParameterVersion $parameter_version;
}

class LastResourceDataSyncMessage {
}

class LastResourceDataSyncStatus {
}

class LastResourceDataSyncTime {
}

class LastSuccessfulResourceDataSyncTime {
}

class ListAssociationVersionsRequest {
  public AssociationId $association_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListAssociationVersionsResult {
  public AssociationVersionList $association_versions;
  public NextToken $next_token;
}

class ListAssociationsRequest {
  public AssociationFilterList $association_filter_list;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListAssociationsResult {
  public AssociationList $associations;
  public NextToken $next_token;
}

class ListCommandInvocationsRequest {
  public CommandId $command_id;
  public boolean $details;
  public CommandFilterList $filters;
  public InstanceId $instance_id;
  public CommandMaxResults $max_results;
  public NextToken $next_token;
}

class ListCommandInvocationsResult {
  public CommandInvocationList $command_invocations;
  public NextToken $next_token;
}

class ListCommandsRequest {
  public CommandId $command_id;
  public CommandFilterList $filters;
  public InstanceId $instance_id;
  public CommandMaxResults $max_results;
  public NextToken $next_token;
}

class ListCommandsResult {
  public CommandList $commands;
  public NextToken $next_token;
}

class ListComplianceItemsRequest {
  public ComplianceStringFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ComplianceResourceIdList $resource_ids;
  public ComplianceResourceTypeList $resource_types;
}

class ListComplianceItemsResult {
  public ComplianceItemList $compliance_items;
  public NextToken $next_token;
}

class ListComplianceSummariesRequest {
  public ComplianceStringFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListComplianceSummariesResult {
  public ComplianceSummaryItemList $compliance_summary_items;
  public NextToken $next_token;
}

class ListDocumentVersionsRequest {
  public MaxResults $max_results;
  public DocumentARN $name;
  public NextToken $next_token;
}

class ListDocumentVersionsResult {
  public DocumentVersionList $document_versions;
  public NextToken $next_token;
}

class ListDocumentsRequest {
  public DocumentFilterList $document_filter_list;
  public DocumentKeyValuesFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDocumentsResult {
  public DocumentIdentifierList $document_identifiers;
  public NextToken $next_token;
}

class ListInventoryEntriesRequest {
  public InventoryFilterList $filters;
  public InstanceId $instance_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public InventoryItemTypeName $type_name;
}

class ListInventoryEntriesResult {
  public InventoryItemCaptureTime $capture_time;
  public InventoryItemEntryList $entries;
  public InstanceId $instance_id;
  public NextToken $next_token;
  public InventoryItemSchemaVersion $schema_version;
  public InventoryItemTypeName $type_name;
}

class ListResourceComplianceSummariesRequest {
  public ComplianceStringFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListResourceComplianceSummariesResult {
  public NextToken $next_token;
  public ResourceComplianceSummaryItemList $resource_compliance_summary_items;
}

class ListResourceDataSyncRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceDataSyncType $sync_type;
}

class ListResourceDataSyncResult {
  public NextToken $next_token;
  public ResourceDataSyncItemList $resource_data_sync_items;
}

class ListTagsForResourceRequest {
  public ResourceId $resource_id;
  public ResourceTypeForTagging $resource_type;
}

class ListTagsForResourceResult {
  public TagList $tag_list;
}

class LoggingInfo {
  public S3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public S3Region $s_3_region;
}

class Long {
}

class MaintenanceWindowAllowUnassociatedTargets {
}

class MaintenanceWindowAutomationParameters {
  public DocumentVersion $document_version;
  public AutomationParameterMap $parameters;
}

class MaintenanceWindowCutoff {
}

class MaintenanceWindowDescription {
}

class MaintenanceWindowDurationHours {
}

class MaintenanceWindowEnabled {
}

class MaintenanceWindowExecution {
  public DateTime $end_time;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowExecutionId $window_execution_id;
  public MaintenanceWindowId $window_id;
}

class MaintenanceWindowExecutionId {
}

class MaintenanceWindowExecutionList {
}

class MaintenanceWindowExecutionStatus {
}

class MaintenanceWindowExecutionStatusDetails {
}

class MaintenanceWindowExecutionTaskExecutionId {
}

class MaintenanceWindowExecutionTaskId {
}

class MaintenanceWindowExecutionTaskIdList {
}

class MaintenanceWindowExecutionTaskIdentity {
  public DateTime $end_time;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowExecutionTaskId $task_execution_id;
  public MaintenanceWindowTaskType $task_type;
  public MaintenanceWindowExecutionId $window_execution_id;
}

class MaintenanceWindowExecutionTaskIdentityList {
}

class MaintenanceWindowExecutionTaskInvocationId {
}

class MaintenanceWindowExecutionTaskInvocationIdentity {
  public DateTime $end_time;
  public MaintenanceWindowExecutionTaskExecutionId $execution_id;
  public MaintenanceWindowExecutionTaskInvocationId $invocation_id;
  public OwnerInformation $owner_information;
  public MaintenanceWindowExecutionTaskInvocationParameters $parameters;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowExecutionTaskId $task_execution_id;
  public MaintenanceWindowTaskType $task_type;
  public MaintenanceWindowExecutionId $window_execution_id;
  public MaintenanceWindowTaskTargetId $window_target_id;
}

class MaintenanceWindowExecutionTaskInvocationIdentityList {
}

class MaintenanceWindowExecutionTaskInvocationParameters {
}

class MaintenanceWindowFilter {
  public MaintenanceWindowFilterKey $key;
  public MaintenanceWindowFilterValues $values;
}

class MaintenanceWindowFilterKey {
}

class MaintenanceWindowFilterList {
}

class MaintenanceWindowFilterValue {
}

class MaintenanceWindowFilterValues {
}

class MaintenanceWindowId {
}

class MaintenanceWindowIdentity {
  public MaintenanceWindowCutoff $cutoff;
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowDurationHours $duration;
  public MaintenanceWindowEnabled $enabled;
  public MaintenanceWindowStringDateTime $end_date;
  public MaintenanceWindowName $name;
  public MaintenanceWindowStringDateTime $next_execution_time;
  public MaintenanceWindowSchedule $schedule;
  public MaintenanceWindowTimezone $schedule_timezone;
  public MaintenanceWindowStringDateTime $start_date;
  public MaintenanceWindowId $window_id;
}

class MaintenanceWindowIdentityForTarget {
  public MaintenanceWindowName $name;
  public MaintenanceWindowId $window_id;
}

class MaintenanceWindowIdentityList {
}

class MaintenanceWindowLambdaClientContext {
}

class MaintenanceWindowLambdaParameters {
  public MaintenanceWindowLambdaClientContext $client_context;
  public MaintenanceWindowLambdaPayload $payload;
  public MaintenanceWindowLambdaQualifier $qualifier;
}

class MaintenanceWindowLambdaPayload {
}

class MaintenanceWindowLambdaQualifier {
}

class MaintenanceWindowMaxResults {
}

class MaintenanceWindowName {
}

class MaintenanceWindowResourceType {
}

class MaintenanceWindowRunCommandParameters {
  public CloudWatchOutputConfig $cloud_watch_output_config;
  public Comment $comment;
  public DocumentHash $document_hash;
  public DocumentHashType $document_hash_type;
  public DocumentVersion $document_version;
  public NotificationConfig $notification_config;
  public S3BucketName $output_s_3_bucket_name;
  public S3KeyPrefix $output_s_3_key_prefix;
  public Parameters $parameters;
  public ServiceRole $service_role_arn;
  public TimeoutSeconds $timeout_seconds;
}

class MaintenanceWindowSchedule {
}

class MaintenanceWindowSearchMaxResults {
}

class MaintenanceWindowStepFunctionsInput {
}

class MaintenanceWindowStepFunctionsName {
}

class MaintenanceWindowStepFunctionsParameters {
  public MaintenanceWindowStepFunctionsInput $input;
  public MaintenanceWindowStepFunctionsName $name;
}

class MaintenanceWindowStringDateTime {
}

class MaintenanceWindowTarget {
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;
}

class MaintenanceWindowTargetId {
}

class MaintenanceWindowTargetList {
}

class MaintenanceWindowTask {
  public MaintenanceWindowDescription $description;
  public LoggingInfo $logging_info;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public MaintenanceWindowName $name;
  public MaintenanceWindowTaskPriority $priority;
  public ServiceRole $service_role_arn;
  public Targets $targets;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowTaskParameters $task_parameters;
  public MaintenanceWindowTaskType $type;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;
}

class MaintenanceWindowTaskArn {
}

class MaintenanceWindowTaskId {
}

class MaintenanceWindowTaskInvocationParameters {
  public MaintenanceWindowAutomationParameters $automation;
  public MaintenanceWindowLambdaParameters $lambda;
  public MaintenanceWindowRunCommandParameters $run_command;
  public MaintenanceWindowStepFunctionsParameters $step_functions;
}

class MaintenanceWindowTaskList {
}

class MaintenanceWindowTaskParameterName {
}

class MaintenanceWindowTaskParameterValue {
}

class MaintenanceWindowTaskParameterValueExpression {
  public MaintenanceWindowTaskParameterValueList $values;
}

class MaintenanceWindowTaskParameterValueList {
}

class MaintenanceWindowTaskParameters {
}

class MaintenanceWindowTaskParametersList {
}

class MaintenanceWindowTaskPriority {
}

class MaintenanceWindowTaskTargetId {
}

class MaintenanceWindowTaskType {
}

class MaintenanceWindowTimezone {
}

class MaintenanceWindowsForTargetList {
}

class ManagedInstanceId {
}

class MaxConcurrency {
}

class MaxDocumentSizeExceeded {
  public string $message;
}

class MaxErrors {
}

class MaxResults {
}

class MaxResultsEC2Compatible {
}

class ModifyDocumentPermissionRequest {
  public AccountIdList $account_ids_to_add;
  public AccountIdList $account_ids_to_remove;
  public DocumentName $name;
  public DocumentPermissionType $permission_type;
  public SharedDocumentVersion $shared_document_version;
}

class ModifyDocumentPermissionResponse {
}

class NextToken {
}

class NonCompliantSummary {
  public ComplianceSummaryCount $non_compliant_count;
  public SeveritySummary $severity_summary;
}

class NormalStringMap {
}

class NotificationArn {
}

class NotificationConfig {
  public NotificationArn $notification_arn;
  public NotificationEventList $notification_events;
  public NotificationType $notification_type;
}

class NotificationEvent {
}

class NotificationEventList {
}

class NotificationType {
}

class OperatingSystem {
}

class OpsAggregator {
  public OpsAggregatorType $aggregator_type;
  public OpsAggregatorList $aggregators;
  public OpsDataAttributeName $attribute_name;
  public OpsFilterList $filters;
  public OpsDataTypeName $type_name;
  public OpsAggregatorValueMap $values;
}

class OpsAggregatorList {
}

class OpsAggregatorType {
}

class OpsAggregatorValue {
}

class OpsAggregatorValueKey {
}

class OpsAggregatorValueMap {
}

class OpsDataAttributeName {
}

class OpsDataTypeName {
}

class OpsEntity {
  public OpsEntityItemMap $data;
  public OpsEntityId $id;
}

class OpsEntityId {
}

class OpsEntityItem {
  public OpsEntityItemCaptureTime $capture_time;
  public OpsEntityItemEntryList $content;
}

class OpsEntityItemCaptureTime {
}

class OpsEntityItemEntry {
}

class OpsEntityItemEntryList {
}

class OpsEntityItemKey {
}

class OpsEntityItemMap {
}

class OpsEntityList {
}

class OpsFilter {
  public OpsFilterKey $key;
  public OpsFilterOperatorType $type;
  public OpsFilterValueList $values;
}

class OpsFilterKey {
}

class OpsFilterList {
}

class OpsFilterOperatorType {
}

class OpsFilterValue {
}

class OpsFilterValueList {
}

class OpsItem {
  public OpsItemCategory $category;
  public string $created_by;
  public DateTime $created_time;
  public OpsItemDescription $description;
  public string $last_modified_by;
  public DateTime $last_modified_time;
  public OpsItemNotifications $notifications;
  public OpsItemOperationalData $operational_data;
  public OpsItemId $ops_item_id;
  public OpsItemPriority $priority;
  public RelatedOpsItems $related_ops_items;
  public OpsItemSeverity $severity;
  public OpsItemSource $source;
  public OpsItemStatus $status;
  public OpsItemTitle $title;
  public string $version;
}

class OpsItemAlreadyExistsException {
  public string $message;
  public string $ops_item_id;
}

class OpsItemCategory {
}

class OpsItemDataKey {
}

class OpsItemDataType {
}

class OpsItemDataValue {
  public OpsItemDataType $type;
  public OpsItemDataValueString $value;
}

class OpsItemDataValueString {
}

class OpsItemDescription {
}

class OpsItemFilter {
  public OpsItemFilterKey $key;
  public OpsItemFilterOperator $operator;
  public OpsItemFilterValues $values;
}

class OpsItemFilterKey {
}

class OpsItemFilterOperator {
}

class OpsItemFilterValue {
}

class OpsItemFilterValues {
}

class OpsItemFilters {
}

class OpsItemId {
}

class OpsItemInvalidParameterException {
  public string $message;
  public OpsItemParameterNamesList $parameter_names;
}

class OpsItemLimitExceededException {
  public int $limit;
  public string $limit_type;
  public string $message;
  public OpsItemParameterNamesList $resource_types;
}

class OpsItemMaxResults {
}

class OpsItemNotFoundException {
  public string $message;
}

class OpsItemNotification {
  public string $arn;
}

class OpsItemNotifications {
}

class OpsItemOperationalData {
}

class OpsItemOpsDataKeysList {
}

class OpsItemParameterNamesList {
}

class OpsItemPriority {
}

class OpsItemSeverity {
}

class OpsItemSource {
}

class OpsItemStatus {
}

class OpsItemSummaries {
}

class OpsItemSummary {
  public OpsItemCategory $category;
  public string $created_by;
  public DateTime $created_time;
  public string $last_modified_by;
  public DateTime $last_modified_time;
  public OpsItemOperationalData $operational_data;
  public OpsItemId $ops_item_id;
  public OpsItemPriority $priority;
  public OpsItemSeverity $severity;
  public OpsItemSource $source;
  public OpsItemStatus $status;
  public OpsItemTitle $title;
}

class OpsItemTitle {
}

class OpsResultAttribute {
  public OpsDataTypeName $type_name;
}

class OpsResultAttributeList {
}

class OutputSource {
  public OutputSourceId $output_source_id;
  public OutputSourceType $output_source_type;
}

class OutputSourceId {
}

class OutputSourceType {
}

class OwnerInformation {
}

class PSParameterName {
}

class PSParameterSelector {
}

class PSParameterValue {
}

class PSParameterVersion {
}

class Parameter {
  public string $arn;
  public DateTime $last_modified_date;
  public PSParameterName $name;
  public PSParameterSelector $selector;
  public string $source_result;
  public ParameterType $type;
  public PSParameterValue $value;
  public PSParameterVersion $version;
}

class ParameterAlreadyExists {
  public string $message;
}

class ParameterDescription {
}

class ParameterHistory {
  public AllowedPattern $allowed_pattern;
  public ParameterDescription $description;
  public ParameterKeyId $key_id;
  public ParameterLabelList $labels;
  public DateTime $last_modified_date;
  public string $last_modified_user;
  public PSParameterName $name;
  public ParameterPolicyList $policies;
  public ParameterTier $tier;
  public ParameterType $type;
  public PSParameterValue $value;
  public PSParameterVersion $version;
}

class ParameterHistoryList {
}

class ParameterInlinePolicy {
  public string $policy_status;
  public string $policy_text;
  public string $policy_type;
}

class ParameterKeyId {
}

class ParameterLabel {
}

class ParameterLabelList {
}

class ParameterLimitExceeded {
  public string $message;
}

class ParameterList {
}

class ParameterMaxVersionLimitExceeded {
  public string $message;
}

class ParameterMetadata {
  public AllowedPattern $allowed_pattern;
  public ParameterDescription $description;
  public ParameterKeyId $key_id;
  public DateTime $last_modified_date;
  public string $last_modified_user;
  public PSParameterName $name;
  public ParameterPolicyList $policies;
  public ParameterTier $tier;
  public ParameterType $type;
  public PSParameterVersion $version;
}

class ParameterMetadataList {
}

class ParameterName {
}

class ParameterNameList {
}

class ParameterNotFound {
  public string $message;
}

class ParameterPatternMismatchException {
  public string $message;
}

class ParameterPolicies {
}

class ParameterPolicyList {
}

class ParameterStringFilter {
  public ParameterStringFilterKey $key;
  public ParameterStringQueryOption $option;
  public ParameterStringFilterValueList $values;
}

class ParameterStringFilterKey {
}

class ParameterStringFilterList {
}

class ParameterStringFilterValue {
}

class ParameterStringFilterValueList {
}

class ParameterStringQueryOption {
}

class ParameterTier {
}

class ParameterType {
}

class ParameterValue {
}

class ParameterValueList {
}

class ParameterVersionLabelLimitExceeded {
  public string $message;
}

class ParameterVersionNotFound {
  public string $message;
}

class Parameters {
}

class ParametersFilter {
  public ParametersFilterKey $key;
  public ParametersFilterValueList $values;
}

class ParametersFilterKey {
}

class ParametersFilterList {
}

class ParametersFilterValue {
}

class ParametersFilterValueList {
}

class Patch {
  public PatchClassification $classification;
  public PatchContentUrl $content_url;
  public PatchDescription $description;
  public PatchId $id;
  public PatchKbNumber $kb_number;
  public PatchLanguage $language;
  public PatchMsrcNumber $msrc_number;
  public PatchMsrcSeverity $msrc_severity;
  public PatchProduct $product;
  public PatchProductFamily $product_family;
  public DateTime $release_date;
  public PatchTitle $title;
  public PatchVendor $vendor;
}

class PatchAction {
}

class PatchBaselineIdentity {
  public BaselineDescription $baseline_description;
  public BaselineId $baseline_id;
  public BaselineName $baseline_name;
  public DefaultBaseline $default_baseline;
  public OperatingSystem $operating_system;
}

class PatchBaselineIdentityList {
}

class PatchBaselineMaxResults {
}

class PatchClassification {
}

class PatchComplianceData {
  public PatchClassification $classification;
  public DateTime $installed_time;
  public PatchKbNumber $kb_id;
  public PatchSeverity $severity;
  public PatchComplianceDataState $state;
  public PatchTitle $title;
}

class PatchComplianceDataList {
}

class PatchComplianceDataState {
}

class PatchComplianceLevel {
}

class PatchComplianceMaxResults {
}

class PatchContentUrl {
}

class PatchDeploymentStatus {
}

class PatchDescription {
}

class PatchFailedCount {
}

class PatchFilter {
  public PatchFilterKey $key;
  public PatchFilterValueList $values;
}

class PatchFilterGroup {
  public PatchFilterList $patch_filters;
}

class PatchFilterKey {
}

class PatchFilterList {
}

class PatchFilterValue {
}

class PatchFilterValueList {
}

class PatchGroup {
}

class PatchGroupList {
}

class PatchGroupPatchBaselineMapping {
  public PatchBaselineIdentity $baseline_identity;
  public PatchGroup $patch_group;
}

class PatchGroupPatchBaselineMappingList {
}

class PatchId {
}

class PatchIdList {
}

class PatchInstalledCount {
}

class PatchInstalledOtherCount {
}

class PatchInstalledPendingRebootCount {
}

class PatchInstalledRejectedCount {
}

class PatchKbNumber {
}

class PatchLanguage {
}

class PatchList {
}

class PatchMissingCount {
}

class PatchMsrcNumber {
}

class PatchMsrcSeverity {
}

class PatchNotApplicableCount {
}

class PatchOperationType {
}

class PatchOrchestratorFilter {
  public PatchOrchestratorFilterKey $key;
  public PatchOrchestratorFilterValues $values;
}

class PatchOrchestratorFilterKey {
}

class PatchOrchestratorFilterList {
}

class PatchOrchestratorFilterValue {
}

class PatchOrchestratorFilterValues {
}

class PatchProduct {
}

class PatchProductFamily {
}

class PatchPropertiesList {
}

class PatchProperty {
}

class PatchPropertyEntry {
}

class PatchRule {
  public ApproveAfterDays $approve_after_days;
  public PatchStringDateTime $approve_until_date;
  public PatchComplianceLevel $compliance_level;
  public boolean $enable_non_security;
  public PatchFilterGroup $patch_filter_group;
}

class PatchRuleGroup {
  public PatchRuleList $patch_rules;
}

class PatchRuleList {
}

class PatchSet {
}

class PatchSeverity {
}

class PatchSource {
  public PatchSourceConfiguration $configuration;
  public PatchSourceName $name;
  public PatchSourceProductList $products;
}

class PatchSourceConfiguration {
}

class PatchSourceList {
}

class PatchSourceName {
}

class PatchSourceProduct {
}

class PatchSourceProductList {
}

class PatchStatus {
  public DateTime $approval_date;
  public PatchComplianceLevel $compliance_level;
  public PatchDeploymentStatus $deployment_status;
}

class PatchStringDateTime {
}

class PatchTitle {
}

class PatchUnreportedNotApplicableCount {
}

class PatchVendor {
}

class PingStatus {
}

class PlatformType {
}

class PlatformTypeList {
}

class PoliciesLimitExceededException {
  public string $message;
}

class Product {
}

class ProgressCounters {
  public int $cancelled_steps;
  public int $failed_steps;
  public int $success_steps;
  public int $timed_out_steps;
  public int $total_steps;
}

class PutComplianceItemsRequest {
  public ComplianceTypeName $compliance_type;
  public ComplianceExecutionSummary $execution_summary;
  public ComplianceItemContentHash $item_content_hash;
  public ComplianceItemEntryList $items;
  public ComplianceResourceId $resource_id;
  public ComplianceResourceType $resource_type;
}

class PutComplianceItemsResult {
}

class PutInventoryMessage {
}

class PutInventoryRequest {
  public InstanceId $instance_id;
  public InventoryItemList $items;
}

class PutInventoryResult {
  public PutInventoryMessage $message;
}

class PutParameterRequest {
  public AllowedPattern $allowed_pattern;
  public ParameterDescription $description;
  public ParameterKeyId $key_id;
  public PSParameterName $name;
  public boolean $overwrite;
  public ParameterPolicies $policies;
  public TagList $tags;
  public ParameterTier $tier;
  public ParameterType $type;
  public PSParameterValue $value;
}

class PutParameterResult {
  public ParameterTier $tier;
  public PSParameterVersion $version;
}

class RebootOption {
}

class Region {
}

class Regions {
}

class RegisterDefaultPatchBaselineRequest {
  public BaselineId $baseline_id;
}

class RegisterDefaultPatchBaselineResult {
  public BaselineId $baseline_id;
}

class RegisterPatchBaselineForPatchGroupRequest {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;
}

class RegisterPatchBaselineForPatchGroupResult {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;
}

class RegisterTargetWithMaintenanceWindowRequest {
  public ClientToken $client_token;
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
}

class RegisterTargetWithMaintenanceWindowResult {
  public MaintenanceWindowTargetId $window_target_id;
}

class RegisterTaskWithMaintenanceWindowRequest {
  public ClientToken $client_token;
  public MaintenanceWindowDescription $description;
  public LoggingInfo $logging_info;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public MaintenanceWindowName $name;
  public MaintenanceWindowTaskPriority $priority;
  public ServiceRole $service_role_arn;
  public Targets $targets;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowTaskInvocationParameters $task_invocation_parameters;
  public MaintenanceWindowTaskParameters $task_parameters;
  public MaintenanceWindowTaskType $task_type;
  public MaintenanceWindowId $window_id;
}

class RegisterTaskWithMaintenanceWindowResult {
  public MaintenanceWindowTaskId $window_task_id;
}

class RegistrationLimit {
}

class RegistrationsCount {
}

class RelatedOpsItem {
  public string $ops_item_id;
}

class RelatedOpsItems {
}

class RemainingCount {
}

class RemoveTagsFromResourceRequest {
  public ResourceId $resource_id;
  public ResourceTypeForTagging $resource_type;
  public KeyList $tag_keys;
}

class RemoveTagsFromResourceResult {
}

class ResetServiceSettingRequest {
  public ServiceSettingId $setting_id;
}

class ResetServiceSettingResult {
  public ServiceSetting $service_setting;
}

class ResolvedTargets {
  public TargetParameterList $parameter_values;
  public boolean $truncated;
}

class ResourceComplianceSummaryItem {
  public ComplianceTypeName $compliance_type;
  public CompliantSummary $compliant_summary;
  public ComplianceExecutionSummary $execution_summary;
  public NonCompliantSummary $non_compliant_summary;
  public ComplianceSeverity $overall_severity;
  public ComplianceResourceId $resource_id;
  public ComplianceResourceType $resource_type;
  public ComplianceStatus $status;
}

class ResourceComplianceSummaryItemList {
}

class ResourceCount {
}

class ResourceCountByStatus {
}

class ResourceDataSyncAWSKMSKeyARN {
}

class ResourceDataSyncAlreadyExistsException {
  public ResourceDataSyncName $sync_name;
}

class ResourceDataSyncAwsOrganizationsSource {
  public ResourceDataSyncOrganizationSourceType $organization_source_type;
  public ResourceDataSyncOrganizationalUnitList $organizational_units;
}

class ResourceDataSyncConflictException {
  public string $message;
}

class ResourceDataSyncCountExceededException {
  public string $message;
}

class ResourceDataSyncCreatedTime {
}

class ResourceDataSyncDestinationDataSharing {
  public ResourceDataSyncDestinationDataSharingType $destination_data_sharing_type;
}

class ResourceDataSyncDestinationDataSharingType {
}

class ResourceDataSyncIncludeFutureRegions {
}

class ResourceDataSyncInvalidConfigurationException {
  public string $message;
}

class ResourceDataSyncItem {
  public LastResourceDataSyncStatus $last_status;
  public LastSuccessfulResourceDataSyncTime $last_successful_sync_time;
  public LastResourceDataSyncMessage $last_sync_status_message;
  public LastResourceDataSyncTime $last_sync_time;
  public ResourceDataSyncS3Destination $s_3_destination;
  public ResourceDataSyncCreatedTime $sync_created_time;
  public ResourceDataSyncLastModifiedTime $sync_last_modified_time;
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncSourceWithState $sync_source;
  public ResourceDataSyncType $sync_type;
}

class ResourceDataSyncItemList {
}

class ResourceDataSyncLastModifiedTime {
}

class ResourceDataSyncName {
}

class ResourceDataSyncNotFoundException {
  public string $message;
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncType $sync_type;
}

class ResourceDataSyncOrganizationSourceType {
}

class ResourceDataSyncOrganizationalUnit {
  public ResourceDataSyncOrganizationalUnitId $organizational_unit_id;
}

class ResourceDataSyncOrganizationalUnitId {
}

class ResourceDataSyncOrganizationalUnitList {
}

class ResourceDataSyncS3BucketName {
}

class ResourceDataSyncS3Destination {
  public ResourceDataSyncAWSKMSKeyARN $awskms_key_arn;
  public ResourceDataSyncS3BucketName $bucket_name;
  public ResourceDataSyncDestinationDataSharing $destination_data_sharing;
  public ResourceDataSyncS3Prefix $prefix;
  public ResourceDataSyncS3Region $region;
  public ResourceDataSyncS3Format $sync_format;
}

class ResourceDataSyncS3Format {
}

class ResourceDataSyncS3Prefix {
}

class ResourceDataSyncS3Region {
}

class ResourceDataSyncSource {
  public ResourceDataSyncAwsOrganizationsSource $aws_organizations_source;
  public ResourceDataSyncIncludeFutureRegions $include_future_regions;
  public ResourceDataSyncSourceRegionList $source_regions;
  public ResourceDataSyncSourceType $source_type;
}

class ResourceDataSyncSourceRegion {
}

class ResourceDataSyncSourceRegionList {
}

class ResourceDataSyncSourceType {
}

class ResourceDataSyncSourceWithState {
  public ResourceDataSyncAwsOrganizationsSource $aws_organizations_source;
  public ResourceDataSyncIncludeFutureRegions $include_future_regions;
  public ResourceDataSyncSourceRegionList $source_regions;
  public ResourceDataSyncSourceType $source_type;
  public ResourceDataSyncState $state;
}

class ResourceDataSyncState {
}

class ResourceDataSyncType {
}

class ResourceId {
}

class ResourceInUseException {
  public string $message;
}

class ResourceLimitExceededException {
  public string $message;
}

class ResourceType {
}

class ResourceTypeForTagging {
}

class ResponseCode {
}

class ResultAttribute {
  public InventoryItemTypeName $type_name;
}

class ResultAttributeList {
}

class ResumeSessionRequest {
  public SessionId $session_id;
}

class ResumeSessionResponse {
  public SessionId $session_id;
  public StreamUrl $stream_url;
  public TokenValue $token_value;
}

class S3BucketName {
}

class S3KeyPrefix {
}

class S3OutputLocation {
  public S3BucketName $output_s_3_bucket_name;
  public S3KeyPrefix $output_s_3_key_prefix;
  public S3Region $output_s_3_region;
}

class S3OutputUrl {
  public Url $output_url;
}

class S3Region {
}

class ScheduleExpression {
}

class ScheduledWindowExecution {
  public MaintenanceWindowStringDateTime $execution_time;
  public MaintenanceWindowName $name;
  public MaintenanceWindowId $window_id;
}

class ScheduledWindowExecutionList {
}

class SendAutomationSignalRequest {
  public AutomationExecutionId $automation_execution_id;
  public AutomationParameterMap $payload;
  public SignalType $signal_type;
}

class SendAutomationSignalResult {
}

class SendCommandRequest {
  public CloudWatchOutputConfig $cloud_watch_output_config;
  public Comment $comment;
  public DocumentHash $document_hash;
  public DocumentHashType $document_hash_type;
  public DocumentARN $document_name;
  public DocumentVersion $document_version;
  public InstanceIdList $instance_ids;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public NotificationConfig $notification_config;
  public S3BucketName $output_s_3_bucket_name;
  public S3KeyPrefix $output_s_3_key_prefix;
  public S3Region $output_s_3_region;
  public Parameters $parameters;
  public ServiceRole $service_role_arn;
  public Targets $targets;
  public TimeoutSeconds $timeout_seconds;
}

class SendCommandResult {
  public Command $command;
}

class ServiceRole {
}

class ServiceSetting {
  public string $arn;
  public DateTime $last_modified_date;
  public string $last_modified_user;
  public ServiceSettingId $setting_id;
  public ServiceSettingValue $setting_value;
  public string $status;
}

class ServiceSettingId {
}

class ServiceSettingNotFound {
  public string $message;
}

class ServiceSettingValue {
}

class Session {
  public SessionDetails $details;
  public DocumentName $document_name;
  public DateTime $end_date;
  public SessionManagerOutputUrl $output_url;
  public SessionOwner $owner;
  public SessionId $session_id;
  public DateTime $start_date;
  public SessionStatus $status;
  public SessionTarget $target;
}

class SessionDetails {
}

class SessionFilter {
  public SessionFilterKey $key;
  public SessionFilterValue $value;
}

class SessionFilterKey {
}

class SessionFilterList {
}

class SessionFilterValue {
}

class SessionId {
}

class SessionList {
}

class SessionManagerCloudWatchOutputUrl {
}

class SessionManagerOutputUrl {
  public SessionManagerCloudWatchOutputUrl $cloud_watch_output_url;
  public SessionManagerS3OutputUrl $s_3_output_url;
}

class SessionManagerParameterName {
}

class SessionManagerParameterValue {
}

class SessionManagerParameterValueList {
}

class SessionManagerParameters {
}

class SessionManagerS3OutputUrl {
}

class SessionMaxResults {
}

class SessionOwner {
}

class SessionState {
}

class SessionStatus {
}

class SessionTarget {
}

class SeveritySummary {
  public ComplianceSummaryCount $critical_count;
  public ComplianceSummaryCount $high_count;
  public ComplianceSummaryCount $informational_count;
  public ComplianceSummaryCount $low_count;
  public ComplianceSummaryCount $medium_count;
  public ComplianceSummaryCount $unspecified_count;
}

class SharedDocumentVersion {
}

class SignalType {
}

class SnapshotDownloadUrl {
}

class SnapshotId {
}

class StandardErrorContent {
}

class StandardOutputContent {
}

class StartAssociationsOnceRequest {
  public AssociationIdList $association_ids;
}

class StartAssociationsOnceResult {
}

class StartAutomationExecutionRequest {
  public IdempotencyToken $client_token;
  public DocumentARN $document_name;
  public DocumentVersion $document_version;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public ExecutionMode $mode;
  public AutomationParameterMap $parameters;
  public TagList $tags;
  public TargetLocations $target_locations;
  public TargetMaps $target_maps;
  public AutomationParameterKey $target_parameter_name;
  public Targets $targets;
}

class StartAutomationExecutionResult {
  public AutomationExecutionId $automation_execution_id;
}

class StartSessionRequest {
  public DocumentARN $document_name;
  public SessionManagerParameters $parameters;
  public SessionTarget $target;
}

class StartSessionResponse {
  public SessionId $session_id;
  public StreamUrl $stream_url;
  public TokenValue $token_value;
}

class StatusAdditionalInfo {
}

class StatusDetails {
}

class StatusMessage {
}

class StatusName {
}

class StatusUnchanged {
}

class StepExecution {
  public AutomationActionName $action;
  public DateTime $execution_end_time;
  public DateTime $execution_start_time;
  public FailureDetails $failure_details;
  public string $failure_message;
  public NormalStringMap $inputs;
  public boolean $is_critical;
  public boolean $is_end;
  public int $max_attempts;
  public string $next_step;
  public string $on_failure;
  public AutomationParameterMap $outputs;
  public AutomationParameterMap $overridden_parameters;
  public string $response;
  public string $response_code;
  public string $step_execution_id;
  public string $step_name;
  public AutomationExecutionStatus $step_status;
  public TargetLocation $target_location;
  public Targets $targets;
  public Long $timeout_seconds;
  public ValidNextStepList $valid_next_steps;
}

class StepExecutionFilter {
  public StepExecutionFilterKey $key;
  public StepExecutionFilterValueList $values;
}

class StepExecutionFilterKey {
}

class StepExecutionFilterList {
}

class StepExecutionFilterValue {
}

class StepExecutionFilterValueList {
}

class StepExecutionList {
}

class StopAutomationExecutionRequest {
  public AutomationExecutionId $automation_execution_id;
  public StopType $type;
}

class StopAutomationExecutionResult {
}

class StopType {
}

class StreamUrl {
}

class String {
}

class StringDateTime {
}

class StringList {
}

class SubTypeCountLimitExceededException {
  public string $message;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagList {
}

class TagValue {
}

class Target {
  public TargetKey $key;
  public TargetValues $values;
}

class TargetCount {
}

class TargetInUseException {
  public string $message;
}

class TargetKey {
}

class TargetLocation {
  public Accounts $accounts;
  public ExecutionRoleName $execution_role_name;
  public Regions $regions;
  public MaxConcurrency $target_location_max_concurrency;
  public MaxErrors $target_location_max_errors;
}

class TargetLocations {
}

class TargetMap {
}

class TargetMapKey {
}

class TargetMapValue {
}

class TargetMapValueList {
}

class TargetMaps {
}

class TargetNotConnected {
  public string $message;
}

class TargetParameterList {
}

class TargetType {
}

class TargetValue {
}

class TargetValues {
}

class Targets {
}

class TerminateSessionRequest {
  public SessionId $session_id;
}

class TerminateSessionResponse {
  public SessionId $session_id;
}

class TimeoutSeconds {
}

class TokenValue {
}

class TooManyTagsError {
}

class TooManyUpdates {
  public string $message;
}

class TotalCount {
}

class TotalSizeLimitExceededException {
  public string $message;
}

class UnsupportedCalendarException {
  public string $message;
}

class UnsupportedFeatureRequiredException {
  public string $message;
}

class UnsupportedInventoryItemContextException {
  public string $message;
  public InventoryItemTypeName $type_name;
}

class UnsupportedInventorySchemaVersionException {
  public string $message;
}

class UnsupportedOperatingSystem {
  public string $message;
}

class UnsupportedParameterType {
  public string $message;
}

class UnsupportedPlatformType {
  public string $message;
}

class UpdateAssociationRequest {
  public AssociationId $association_id;
  public AssociationName $association_name;
  public AssociationVersion $association_version;
  public AutomationTargetParameterName $automation_target_parameter_name;
  public AssociationComplianceSeverity $compliance_severity;
  public DocumentVersion $document_version;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public DocumentARN $name;
  public InstanceAssociationOutputLocation $output_location;
  public Parameters $parameters;
  public ScheduleExpression $schedule_expression;
  public Targets $targets;
}

class UpdateAssociationResult {
  public AssociationDescription $association_description;
}

class UpdateAssociationStatusRequest {
  public AssociationStatus $association_status;
  public InstanceId $instance_id;
  public DocumentARN $name;
}

class UpdateAssociationStatusResult {
  public AssociationDescription $association_description;
}

class UpdateDocumentDefaultVersionRequest {
  public DocumentVersionNumber $document_version;
  public DocumentName $name;
}

class UpdateDocumentDefaultVersionResult {
  public DocumentDefaultVersionDescription $description;
}

class UpdateDocumentRequest {
  public AttachmentsSourceList $attachments;
  public DocumentContent $content;
  public DocumentFormat $document_format;
  public DocumentVersion $document_version;
  public DocumentName $name;
  public TargetType $target_type;
  public DocumentVersionName $version_name;
}

class UpdateDocumentResult {
  public DocumentDescription $document_description;
}

class UpdateMaintenanceWindowRequest {
  public MaintenanceWindowAllowUnassociatedTargets $allow_unassociated_targets;
  public MaintenanceWindowCutoff $cutoff;
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowDurationHours $duration;
  public MaintenanceWindowEnabled $enabled;
  public MaintenanceWindowStringDateTime $end_date;
  public MaintenanceWindowName $name;
  public boolean $replace;
  public MaintenanceWindowSchedule $schedule;
  public MaintenanceWindowTimezone $schedule_timezone;
  public MaintenanceWindowStringDateTime $start_date;
  public MaintenanceWindowId $window_id;
}

class UpdateMaintenanceWindowResult {
  public MaintenanceWindowAllowUnassociatedTargets $allow_unassociated_targets;
  public MaintenanceWindowCutoff $cutoff;
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowDurationHours $duration;
  public MaintenanceWindowEnabled $enabled;
  public MaintenanceWindowStringDateTime $end_date;
  public MaintenanceWindowName $name;
  public MaintenanceWindowSchedule $schedule;
  public MaintenanceWindowTimezone $schedule_timezone;
  public MaintenanceWindowStringDateTime $start_date;
  public MaintenanceWindowId $window_id;
}

class UpdateMaintenanceWindowTargetRequest {
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public boolean $replace;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;
}

class UpdateMaintenanceWindowTargetResult {
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;
}

class UpdateMaintenanceWindowTaskRequest {
  public MaintenanceWindowDescription $description;
  public LoggingInfo $logging_info;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public MaintenanceWindowName $name;
  public MaintenanceWindowTaskPriority $priority;
  public boolean $replace;
  public ServiceRole $service_role_arn;
  public Targets $targets;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowTaskInvocationParameters $task_invocation_parameters;
  public MaintenanceWindowTaskParameters $task_parameters;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;
}

class UpdateMaintenanceWindowTaskResult {
  public MaintenanceWindowDescription $description;
  public LoggingInfo $logging_info;
  public MaxConcurrency $max_concurrency;
  public MaxErrors $max_errors;
  public MaintenanceWindowName $name;
  public MaintenanceWindowTaskPriority $priority;
  public ServiceRole $service_role_arn;
  public Targets $targets;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowTaskInvocationParameters $task_invocation_parameters;
  public MaintenanceWindowTaskParameters $task_parameters;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;
}

class UpdateManagedInstanceRoleRequest {
  public IamRole $iam_role;
  public ManagedInstanceId $instance_id;
}

class UpdateManagedInstanceRoleResult {
}

class UpdateOpsItemRequest {
  public OpsItemCategory $category;
  public OpsItemDescription $description;
  public OpsItemNotifications $notifications;
  public OpsItemOperationalData $operational_data;
  public OpsItemOpsDataKeysList $operational_data_to_delete;
  public OpsItemId $ops_item_id;
  public OpsItemPriority $priority;
  public RelatedOpsItems $related_ops_items;
  public OpsItemSeverity $severity;
  public OpsItemStatus $status;
  public OpsItemTitle $title;
}

class UpdateOpsItemResponse {
}

class UpdatePatchBaselineRequest {
  public PatchRuleGroup $approval_rules;
  public PatchIdList $approved_patches;
  public PatchComplianceLevel $approved_patches_compliance_level;
  public boolean $approved_patches_enable_non_security;
  public BaselineId $baseline_id;
  public BaselineDescription $description;
  public PatchFilterGroup $global_filters;
  public BaselineName $name;
  public PatchIdList $rejected_patches;
  public PatchAction $rejected_patches_action;
  public boolean $replace;
  public PatchSourceList $sources;
}

class UpdatePatchBaselineResult {
  public PatchRuleGroup $approval_rules;
  public PatchIdList $approved_patches;
  public PatchComplianceLevel $approved_patches_compliance_level;
  public boolean $approved_patches_enable_non_security;
  public BaselineId $baseline_id;
  public DateTime $created_date;
  public BaselineDescription $description;
  public PatchFilterGroup $global_filters;
  public DateTime $modified_date;
  public BaselineName $name;
  public OperatingSystem $operating_system;
  public PatchIdList $rejected_patches;
  public PatchAction $rejected_patches_action;
  public PatchSourceList $sources;
}

class UpdateResourceDataSyncRequest {
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncSource $sync_source;
  public ResourceDataSyncType $sync_type;
}

class UpdateResourceDataSyncResult {
}

class UpdateServiceSettingRequest {
  public ServiceSettingId $setting_id;
  public ServiceSettingValue $setting_value;
}

class UpdateServiceSettingResult {
}

class Url {
}

class ValidNextStep {
}

class ValidNextStepList {
}

class Version {
}

