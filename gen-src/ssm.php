<?hh // strict
namespace slack\aws\ssm;

interface SSM {
  public function AddTagsToResource(AddTagsToResourceRequest): Awaitable<Errors\Result<AddTagsToResourceResult>>;
  public function CancelCommand(CancelCommandRequest): Awaitable<Errors\Result<CancelCommandResult>>;
  public function CancelMaintenanceWindowExecution(CancelMaintenanceWindowExecutionRequest): Awaitable<Errors\Result<CancelMaintenanceWindowExecutionResult>>;
  public function CreateActivation(CreateActivationRequest): Awaitable<Errors\Result<CreateActivationResult>>;
  public function CreateAssociation(CreateAssociationRequest): Awaitable<Errors\Result<CreateAssociationResult>>;
  public function CreateAssociationBatch(CreateAssociationBatchRequest): Awaitable<Errors\Result<CreateAssociationBatchResult>>;
  public function CreateDocument(CreateDocumentRequest): Awaitable<Errors\Result<CreateDocumentResult>>;
  public function CreateMaintenanceWindow(CreateMaintenanceWindowRequest): Awaitable<Errors\Result<CreateMaintenanceWindowResult>>;
  public function CreateOpsItem(CreateOpsItemRequest): Awaitable<Errors\Result<CreateOpsItemResponse>>;
  public function CreatePatchBaseline(CreatePatchBaselineRequest): Awaitable<Errors\Result<CreatePatchBaselineResult>>;
  public function CreateResourceDataSync(CreateResourceDataSyncRequest): Awaitable<Errors\Result<CreateResourceDataSyncResult>>;
  public function DeleteActivation(DeleteActivationRequest): Awaitable<Errors\Result<DeleteActivationResult>>;
  public function DeleteAssociation(DeleteAssociationRequest): Awaitable<Errors\Result<DeleteAssociationResult>>;
  public function DeleteDocument(DeleteDocumentRequest): Awaitable<Errors\Result<DeleteDocumentResult>>;
  public function DeleteInventory(DeleteInventoryRequest): Awaitable<Errors\Result<DeleteInventoryResult>>;
  public function DeleteMaintenanceWindow(DeleteMaintenanceWindowRequest): Awaitable<Errors\Result<DeleteMaintenanceWindowResult>>;
  public function DeleteParameter(DeleteParameterRequest): Awaitable<Errors\Result<DeleteParameterResult>>;
  public function DeleteParameters(DeleteParametersRequest): Awaitable<Errors\Result<DeleteParametersResult>>;
  public function DeletePatchBaseline(DeletePatchBaselineRequest): Awaitable<Errors\Result<DeletePatchBaselineResult>>;
  public function DeleteResourceDataSync(DeleteResourceDataSyncRequest): Awaitable<Errors\Result<DeleteResourceDataSyncResult>>;
  public function DeregisterManagedInstance(DeregisterManagedInstanceRequest): Awaitable<Errors\Result<DeregisterManagedInstanceResult>>;
  public function DeregisterPatchBaselineForPatchGroup(DeregisterPatchBaselineForPatchGroupRequest): Awaitable<Errors\Result<DeregisterPatchBaselineForPatchGroupResult>>;
  public function DeregisterTargetFromMaintenanceWindow(DeregisterTargetFromMaintenanceWindowRequest): Awaitable<Errors\Result<DeregisterTargetFromMaintenanceWindowResult>>;
  public function DeregisterTaskFromMaintenanceWindow(DeregisterTaskFromMaintenanceWindowRequest): Awaitable<Errors\Result<DeregisterTaskFromMaintenanceWindowResult>>;
  public function DescribeActivations(DescribeActivationsRequest): Awaitable<Errors\Result<DescribeActivationsResult>>;
  public function DescribeAssociation(DescribeAssociationRequest): Awaitable<Errors\Result<DescribeAssociationResult>>;
  public function DescribeAssociationExecutionTargets(DescribeAssociationExecutionTargetsRequest): Awaitable<Errors\Result<DescribeAssociationExecutionTargetsResult>>;
  public function DescribeAssociationExecutions(DescribeAssociationExecutionsRequest): Awaitable<Errors\Result<DescribeAssociationExecutionsResult>>;
  public function DescribeAutomationExecutions(DescribeAutomationExecutionsRequest): Awaitable<Errors\Result<DescribeAutomationExecutionsResult>>;
  public function DescribeAutomationStepExecutions(DescribeAutomationStepExecutionsRequest): Awaitable<Errors\Result<DescribeAutomationStepExecutionsResult>>;
  public function DescribeAvailablePatches(DescribeAvailablePatchesRequest): Awaitable<Errors\Result<DescribeAvailablePatchesResult>>;
  public function DescribeDocument(DescribeDocumentRequest): Awaitable<Errors\Result<DescribeDocumentResult>>;
  public function DescribeDocumentPermission(DescribeDocumentPermissionRequest): Awaitable<Errors\Result<DescribeDocumentPermissionResponse>>;
  public function DescribeEffectiveInstanceAssociations(DescribeEffectiveInstanceAssociationsRequest): Awaitable<Errors\Result<DescribeEffectiveInstanceAssociationsResult>>;
  public function DescribeEffectivePatchesForPatchBaseline(DescribeEffectivePatchesForPatchBaselineRequest): Awaitable<Errors\Result<DescribeEffectivePatchesForPatchBaselineResult>>;
  public function DescribeInstanceAssociationsStatus(DescribeInstanceAssociationsStatusRequest): Awaitable<Errors\Result<DescribeInstanceAssociationsStatusResult>>;
  public function DescribeInstanceInformation(DescribeInstanceInformationRequest): Awaitable<Errors\Result<DescribeInstanceInformationResult>>;
  public function DescribeInstancePatchStates(DescribeInstancePatchStatesRequest): Awaitable<Errors\Result<DescribeInstancePatchStatesResult>>;
  public function DescribeInstancePatchStatesForPatchGroup(DescribeInstancePatchStatesForPatchGroupRequest): Awaitable<Errors\Result<DescribeInstancePatchStatesForPatchGroupResult>>;
  public function DescribeInstancePatches(DescribeInstancePatchesRequest): Awaitable<Errors\Result<DescribeInstancePatchesResult>>;
  public function DescribeInventoryDeletions(DescribeInventoryDeletionsRequest): Awaitable<Errors\Result<DescribeInventoryDeletionsResult>>;
  public function DescribeMaintenanceWindowExecutionTaskInvocations(DescribeMaintenanceWindowExecutionTaskInvocationsRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowExecutionTaskInvocationsResult>>;
  public function DescribeMaintenanceWindowExecutionTasks(DescribeMaintenanceWindowExecutionTasksRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowExecutionTasksResult>>;
  public function DescribeMaintenanceWindowExecutions(DescribeMaintenanceWindowExecutionsRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowExecutionsResult>>;
  public function DescribeMaintenanceWindowSchedule(DescribeMaintenanceWindowScheduleRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowScheduleResult>>;
  public function DescribeMaintenanceWindowTargets(DescribeMaintenanceWindowTargetsRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowTargetsResult>>;
  public function DescribeMaintenanceWindowTasks(DescribeMaintenanceWindowTasksRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowTasksResult>>;
  public function DescribeMaintenanceWindows(DescribeMaintenanceWindowsRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowsResult>>;
  public function DescribeMaintenanceWindowsForTarget(DescribeMaintenanceWindowsForTargetRequest): Awaitable<Errors\Result<DescribeMaintenanceWindowsForTargetResult>>;
  public function DescribeOpsItems(DescribeOpsItemsRequest): Awaitable<Errors\Result<DescribeOpsItemsResponse>>;
  public function DescribeParameters(DescribeParametersRequest): Awaitable<Errors\Result<DescribeParametersResult>>;
  public function DescribePatchBaselines(DescribePatchBaselinesRequest): Awaitable<Errors\Result<DescribePatchBaselinesResult>>;
  public function DescribePatchGroupState(DescribePatchGroupStateRequest): Awaitable<Errors\Result<DescribePatchGroupStateResult>>;
  public function DescribePatchGroups(DescribePatchGroupsRequest): Awaitable<Errors\Result<DescribePatchGroupsResult>>;
  public function DescribePatchProperties(DescribePatchPropertiesRequest): Awaitable<Errors\Result<DescribePatchPropertiesResult>>;
  public function DescribeSessions(DescribeSessionsRequest): Awaitable<Errors\Result<DescribeSessionsResponse>>;
  public function GetAutomationExecution(GetAutomationExecutionRequest): Awaitable<Errors\Result<GetAutomationExecutionResult>>;
  public function GetCalendarState(GetCalendarStateRequest): Awaitable<Errors\Result<GetCalendarStateResponse>>;
  public function GetCommandInvocation(GetCommandInvocationRequest): Awaitable<Errors\Result<GetCommandInvocationResult>>;
  public function GetConnectionStatus(GetConnectionStatusRequest): Awaitable<Errors\Result<GetConnectionStatusResponse>>;
  public function GetDefaultPatchBaseline(GetDefaultPatchBaselineRequest): Awaitable<Errors\Result<GetDefaultPatchBaselineResult>>;
  public function GetDeployablePatchSnapshotForInstance(GetDeployablePatchSnapshotForInstanceRequest): Awaitable<Errors\Result<GetDeployablePatchSnapshotForInstanceResult>>;
  public function GetDocument(GetDocumentRequest): Awaitable<Errors\Result<GetDocumentResult>>;
  public function GetInventory(GetInventoryRequest): Awaitable<Errors\Result<GetInventoryResult>>;
  public function GetInventorySchema(GetInventorySchemaRequest): Awaitable<Errors\Result<GetInventorySchemaResult>>;
  public function GetMaintenanceWindow(GetMaintenanceWindowRequest): Awaitable<Errors\Result<GetMaintenanceWindowResult>>;
  public function GetMaintenanceWindowExecution(GetMaintenanceWindowExecutionRequest): Awaitable<Errors\Result<GetMaintenanceWindowExecutionResult>>;
  public function GetMaintenanceWindowExecutionTask(GetMaintenanceWindowExecutionTaskRequest): Awaitable<Errors\Result<GetMaintenanceWindowExecutionTaskResult>>;
  public function GetMaintenanceWindowExecutionTaskInvocation(GetMaintenanceWindowExecutionTaskInvocationRequest): Awaitable<Errors\Result<GetMaintenanceWindowExecutionTaskInvocationResult>>;
  public function GetMaintenanceWindowTask(GetMaintenanceWindowTaskRequest): Awaitable<Errors\Result<GetMaintenanceWindowTaskResult>>;
  public function GetOpsItem(GetOpsItemRequest): Awaitable<Errors\Result<GetOpsItemResponse>>;
  public function GetOpsSummary(GetOpsSummaryRequest): Awaitable<Errors\Result<GetOpsSummaryResult>>;
  public function GetParameter(GetParameterRequest): Awaitable<Errors\Result<GetParameterResult>>;
  public function GetParameterHistory(GetParameterHistoryRequest): Awaitable<Errors\Result<GetParameterHistoryResult>>;
  public function GetParameters(GetParametersRequest): Awaitable<Errors\Result<GetParametersResult>>;
  public function GetParametersByPath(GetParametersByPathRequest): Awaitable<Errors\Result<GetParametersByPathResult>>;
  public function GetPatchBaseline(GetPatchBaselineRequest): Awaitable<Errors\Result<GetPatchBaselineResult>>;
  public function GetPatchBaselineForPatchGroup(GetPatchBaselineForPatchGroupRequest): Awaitable<Errors\Result<GetPatchBaselineForPatchGroupResult>>;
  public function GetServiceSetting(GetServiceSettingRequest): Awaitable<Errors\Result<GetServiceSettingResult>>;
  public function LabelParameterVersion(LabelParameterVersionRequest): Awaitable<Errors\Result<LabelParameterVersionResult>>;
  public function ListAssociationVersions(ListAssociationVersionsRequest): Awaitable<Errors\Result<ListAssociationVersionsResult>>;
  public function ListAssociations(ListAssociationsRequest): Awaitable<Errors\Result<ListAssociationsResult>>;
  public function ListCommandInvocations(ListCommandInvocationsRequest): Awaitable<Errors\Result<ListCommandInvocationsResult>>;
  public function ListCommands(ListCommandsRequest): Awaitable<Errors\Result<ListCommandsResult>>;
  public function ListComplianceItems(ListComplianceItemsRequest): Awaitable<Errors\Result<ListComplianceItemsResult>>;
  public function ListComplianceSummaries(ListComplianceSummariesRequest): Awaitable<Errors\Result<ListComplianceSummariesResult>>;
  public function ListDocumentVersions(ListDocumentVersionsRequest): Awaitable<Errors\Result<ListDocumentVersionsResult>>;
  public function ListDocuments(ListDocumentsRequest): Awaitable<Errors\Result<ListDocumentsResult>>;
  public function ListInventoryEntries(ListInventoryEntriesRequest): Awaitable<Errors\Result<ListInventoryEntriesResult>>;
  public function ListResourceComplianceSummaries(ListResourceComplianceSummariesRequest): Awaitable<Errors\Result<ListResourceComplianceSummariesResult>>;
  public function ListResourceDataSync(ListResourceDataSyncRequest): Awaitable<Errors\Result<ListResourceDataSyncResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResult>>;
  public function ModifyDocumentPermission(ModifyDocumentPermissionRequest): Awaitable<Errors\Result<ModifyDocumentPermissionResponse>>;
  public function PutComplianceItems(PutComplianceItemsRequest): Awaitable<Errors\Result<PutComplianceItemsResult>>;
  public function PutInventory(PutInventoryRequest): Awaitable<Errors\Result<PutInventoryResult>>;
  public function PutParameter(PutParameterRequest): Awaitable<Errors\Result<PutParameterResult>>;
  public function RegisterDefaultPatchBaseline(RegisterDefaultPatchBaselineRequest): Awaitable<Errors\Result<RegisterDefaultPatchBaselineResult>>;
  public function RegisterPatchBaselineForPatchGroup(RegisterPatchBaselineForPatchGroupRequest): Awaitable<Errors\Result<RegisterPatchBaselineForPatchGroupResult>>;
  public function RegisterTargetWithMaintenanceWindow(RegisterTargetWithMaintenanceWindowRequest): Awaitable<Errors\Result<RegisterTargetWithMaintenanceWindowResult>>;
  public function RegisterTaskWithMaintenanceWindow(RegisterTaskWithMaintenanceWindowRequest): Awaitable<Errors\Result<RegisterTaskWithMaintenanceWindowResult>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceRequest): Awaitable<Errors\Result<RemoveTagsFromResourceResult>>;
  public function ResetServiceSetting(ResetServiceSettingRequest): Awaitable<Errors\Result<ResetServiceSettingResult>>;
  public function ResumeSession(ResumeSessionRequest): Awaitable<Errors\Result<ResumeSessionResponse>>;
  public function SendAutomationSignal(SendAutomationSignalRequest): Awaitable<Errors\Result<SendAutomationSignalResult>>;
  public function SendCommand(SendCommandRequest): Awaitable<Errors\Result<SendCommandResult>>;
  public function StartAssociationsOnce(StartAssociationsOnceRequest): Awaitable<Errors\Result<StartAssociationsOnceResult>>;
  public function StartAutomationExecution(StartAutomationExecutionRequest): Awaitable<Errors\Result<StartAutomationExecutionResult>>;
  public function StartSession(StartSessionRequest): Awaitable<Errors\Result<StartSessionResponse>>;
  public function StopAutomationExecution(StopAutomationExecutionRequest): Awaitable<Errors\Result<StopAutomationExecutionResult>>;
  public function TerminateSession(TerminateSessionRequest): Awaitable<Errors\Result<TerminateSessionResponse>>;
  public function UpdateAssociation(UpdateAssociationRequest): Awaitable<Errors\Result<UpdateAssociationResult>>;
  public function UpdateAssociationStatus(UpdateAssociationStatusRequest): Awaitable<Errors\Result<UpdateAssociationStatusResult>>;
  public function UpdateDocument(UpdateDocumentRequest): Awaitable<Errors\Result<UpdateDocumentResult>>;
  public function UpdateDocumentDefaultVersion(UpdateDocumentDefaultVersionRequest): Awaitable<Errors\Result<UpdateDocumentDefaultVersionResult>>;
  public function UpdateMaintenanceWindow(UpdateMaintenanceWindowRequest): Awaitable<Errors\Result<UpdateMaintenanceWindowResult>>;
  public function UpdateMaintenanceWindowTarget(UpdateMaintenanceWindowTargetRequest): Awaitable<Errors\Result<UpdateMaintenanceWindowTargetResult>>;
  public function UpdateMaintenanceWindowTask(UpdateMaintenanceWindowTaskRequest): Awaitable<Errors\Result<UpdateMaintenanceWindowTaskResult>>;
  public function UpdateManagedInstanceRole(UpdateManagedInstanceRoleRequest): Awaitable<Errors\Result<UpdateManagedInstanceRoleResult>>;
  public function UpdateOpsItem(UpdateOpsItemRequest): Awaitable<Errors\Result<UpdateOpsItemResponse>>;
  public function UpdatePatchBaseline(UpdatePatchBaselineRequest): Awaitable<Errors\Result<UpdatePatchBaselineResult>>;
  public function UpdateResourceDataSync(UpdateResourceDataSyncRequest): Awaitable<Errors\Result<UpdateResourceDataSyncResult>>;
  public function UpdateServiceSetting(UpdateServiceSettingRequest): Awaitable<Errors\Result<UpdateServiceSettingResult>>;
}

type Account = string;

type AccountId = string;

type AccountIdList = vec<AccountId>;

class AccountSharingInfo {
  public AccountId $account_id;
  public SharedDocumentVersion $shared_document_version;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'shared_document_version' => SharedDocumentVersion,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->shared_document_version = $shared_document_version ?? "";
  }
}

type AccountSharingInfoList = vec<AccountSharingInfo>;

type Accounts = vec<Account>;

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

  public function __construct(shape(
  ?'activation_id' => ActivationId,
  ?'created_date' => CreatedDate,
  ?'default_instance_name' => DefaultInstanceName,
  ?'description' => ActivationDescription,
  ?'expiration_date' => ExpirationDate,
  ?'expired' => boolean,
  ?'iam_role' => IamRole,
  ?'registration_limit' => RegistrationLimit,
  ?'registrations_count' => RegistrationsCount,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->activation_id = $activation_id ?? "";
    $this->created_date = $created_date ?? 0;
    $this->default_instance_name = $default_instance_name ?? "";
    $this->description = $description ?? "";
    $this->expiration_date = $expiration_date ?? 0;
    $this->expired = $expired ?? false;
    $this->iam_role = $iam_role ?? "";
    $this->registration_limit = $registration_limit ?? 0;
    $this->registrations_count = $registrations_count ?? 0;
    $this->tags = $tags ?? [];
  }
}

type ActivationCode = string;

type ActivationDescription = string;

type ActivationId = string;

type ActivationList = vec<Activation>;

class AddTagsToResourceRequest {
  public ResourceId $resource_id;
  public ResourceTypeForTagging $resource_type;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceTypeForTagging,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->tags = $tags ?? [];
  }
}

class AddTagsToResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AgentErrorCode = string;

type AggregatorSchemaOnly = bool;

type AllowedPattern = string;

class AlreadyExistsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ApproveAfterDays = int;

class AssociatedInstances {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_name' => AssociationName,
  ?'association_version' => AssociationVersion,
  ?'document_version' => DocumentVersion,
  ?'instance_id' => InstanceId,
  ?'last_execution_date' => DateTime,
  ?'name' => DocumentARN,
  ?'overview' => AssociationOverview,
  ?'schedule_expression' => ScheduleExpression,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_name = $association_name ?? "";
    $this->association_version = $association_version ?? "";
    $this->document_version = $document_version ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->last_execution_date = $last_execution_date ?? 0;
    $this->name = $name ?? "";
    $this->overview = $overview ?? null;
    $this->schedule_expression = $schedule_expression ?? "";
    $this->targets = $targets ?? [];
  }
}

class AssociationAlreadyExists {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AssociationComplianceSeverity = string;

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

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_name' => AssociationName,
  ?'association_version' => AssociationVersion,
  ?'automation_target_parameter_name' => AutomationTargetParameterName,
  ?'compliance_severity' => AssociationComplianceSeverity,
  ?'date' => DateTime,
  ?'document_version' => DocumentVersion,
  ?'instance_id' => InstanceId,
  ?'last_execution_date' => DateTime,
  ?'last_successful_execution_date' => DateTime,
  ?'last_update_association_date' => DateTime,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => DocumentARN,
  ?'output_location' => InstanceAssociationOutputLocation,
  ?'overview' => AssociationOverview,
  ?'parameters' => Parameters,
  ?'schedule_expression' => ScheduleExpression,
  ?'status' => AssociationStatus,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_name = $association_name ?? "";
    $this->association_version = $association_version ?? "";
    $this->automation_target_parameter_name = $automation_target_parameter_name ?? "";
    $this->compliance_severity = $compliance_severity ?? "";
    $this->date = $date ?? 0;
    $this->document_version = $document_version ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->last_execution_date = $last_execution_date ?? 0;
    $this->last_successful_execution_date = $last_successful_execution_date ?? 0;
    $this->last_update_association_date = $last_update_association_date ?? 0;
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->output_location = $output_location ?? null;
    $this->overview = $overview ?? null;
    $this->parameters = $parameters ?? [];
    $this->schedule_expression = $schedule_expression ?? "";
    $this->status = $status ?? null;
    $this->targets = $targets ?? [];
  }
}

type AssociationDescriptionList = vec<AssociationDescription>;

class AssociationDoesNotExist {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_version' => AssociationVersion,
  ?'created_time' => DateTime,
  ?'detailed_status' => StatusName,
  ?'execution_id' => AssociationExecutionId,
  ?'last_execution_date' => DateTime,
  ?'resource_count_by_status' => ResourceCountByStatus,
  ?'status' => StatusName,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_version = $association_version ?? "";
    $this->created_time = $created_time ?? 0;
    $this->detailed_status = $detailed_status ?? "";
    $this->execution_id = $execution_id ?? "";
    $this->last_execution_date = $last_execution_date ?? 0;
    $this->resource_count_by_status = $resource_count_by_status ?? "";
    $this->status = $status ?? "";
  }
}

class AssociationExecutionDoesNotExist {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AssociationExecutionFilter {
  public AssociationExecutionFilterKey $key;
  public AssociationFilterOperatorType $type;
  public AssociationExecutionFilterValue $value;

  public function __construct(shape(
  ?'key' => AssociationExecutionFilterKey,
  ?'type' => AssociationFilterOperatorType,
  ?'value' => AssociationExecutionFilterValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

type AssociationExecutionFilterKey = string;

type AssociationExecutionFilterList = vec<AssociationExecutionFilter>;

type AssociationExecutionFilterValue = string;

type AssociationExecutionId = string;

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

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_version' => AssociationVersion,
  ?'detailed_status' => StatusName,
  ?'execution_id' => AssociationExecutionId,
  ?'last_execution_date' => DateTime,
  ?'output_source' => OutputSource,
  ?'resource_id' => AssociationResourceId,
  ?'resource_type' => AssociationResourceType,
  ?'status' => StatusName,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_version = $association_version ?? "";
    $this->detailed_status = $detailed_status ?? "";
    $this->execution_id = $execution_id ?? "";
    $this->last_execution_date = $last_execution_date ?? 0;
    $this->output_source = $output_source ?? null;
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->status = $status ?? "";
  }
}

class AssociationExecutionTargetsFilter {
  public AssociationExecutionTargetsFilterKey $key;
  public AssociationExecutionTargetsFilterValue $value;

  public function __construct(shape(
  ?'key' => AssociationExecutionTargetsFilterKey,
  ?'value' => AssociationExecutionTargetsFilterValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type AssociationExecutionTargetsFilterKey = string;

type AssociationExecutionTargetsFilterList = vec<AssociationExecutionTargetsFilter>;

type AssociationExecutionTargetsFilterValue = string;

type AssociationExecutionTargetsList = vec<AssociationExecutionTarget>;

type AssociationExecutionsList = vec<AssociationExecution>;

class AssociationFilter {
  public AssociationFilterKey $key;
  public AssociationFilterValue $value;

  public function __construct(shape(
  ?'key' => AssociationFilterKey,
  ?'value' => AssociationFilterValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type AssociationFilterKey = string;

type AssociationFilterList = vec<AssociationFilter>;

type AssociationFilterOperatorType = string;

type AssociationFilterValue = string;

type AssociationId = string;

type AssociationIdList = vec<AssociationId>;

class AssociationLimitExceeded {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AssociationList = vec<Association>;

type AssociationName = string;

class AssociationOverview {
  public AssociationStatusAggregatedCount $association_status_aggregated_count;
  public StatusName $detailed_status;
  public StatusName $status;

  public function __construct(shape(
  ?'association_status_aggregated_count' => AssociationStatusAggregatedCount,
  ?'detailed_status' => StatusName,
  ?'status' => StatusName,
  ) $s = shape()) {
    $this->association_status_aggregated_count = $association_status_aggregated_count ?? [];
    $this->detailed_status = $detailed_status ?? "";
    $this->status = $status ?? "";
  }
}

type AssociationResourceId = string;

type AssociationResourceType = string;

class AssociationStatus {
  public StatusAdditionalInfo $additional_info;
  public DateTime $date;
  public StatusMessage $message;
  public AssociationStatusName $name;

  public function __construct(shape(
  ?'additional_info' => StatusAdditionalInfo,
  ?'date' => DateTime,
  ?'message' => StatusMessage,
  ?'name' => AssociationStatusName,
  ) $s = shape()) {
    $this->additional_info = $additional_info ?? "";
    $this->date = $date ?? 0;
    $this->message = $message ?? "";
    $this->name = $name ?? "";
  }
}

type AssociationStatusAggregatedCount = dict<StatusName, InstanceCount>;

type AssociationStatusName = string;

type AssociationVersion = string;

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

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_name' => AssociationName,
  ?'association_version' => AssociationVersion,
  ?'compliance_severity' => AssociationComplianceSeverity,
  ?'created_date' => DateTime,
  ?'document_version' => DocumentVersion,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => DocumentARN,
  ?'output_location' => InstanceAssociationOutputLocation,
  ?'parameters' => Parameters,
  ?'schedule_expression' => ScheduleExpression,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_name = $association_name ?? "";
    $this->association_version = $association_version ?? "";
    $this->compliance_severity = $compliance_severity ?? "";
    $this->created_date = $created_date ?? 0;
    $this->document_version = $document_version ?? "";
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->output_location = $output_location ?? null;
    $this->parameters = $parameters ?? [];
    $this->schedule_expression = $schedule_expression ?? "";
    $this->targets = $targets ?? [];
  }
}

class AssociationVersionLimitExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AssociationVersionList = vec<AssociationVersionInfo>;

class AttachmentContent {
  public AttachmentHash $hash;
  public AttachmentHashType $hash_type;
  public AttachmentName $name;
  public ContentLength $size;
  public AttachmentUrl $url;

  public function __construct(shape(
  ?'hash' => AttachmentHash,
  ?'hash_type' => AttachmentHashType,
  ?'name' => AttachmentName,
  ?'size' => ContentLength,
  ?'url' => AttachmentUrl,
  ) $s = shape()) {
    $this->hash = $hash ?? "";
    $this->hash_type = $hash_type ?? "";
    $this->name = $name ?? "";
    $this->size = $size ?? 0;
    $this->url = $url ?? "";
  }
}

type AttachmentContentList = vec<AttachmentContent>;

type AttachmentHash = string;

type AttachmentHashType = string;

type AttachmentIdentifier = string;

class AttachmentInformation {
  public AttachmentName $name;

  public function __construct(shape(
  ?'name' => AttachmentName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type AttachmentInformationList = vec<AttachmentInformation>;

type AttachmentName = string;

type AttachmentUrl = string;

class AttachmentsSource {
  public AttachmentsSourceKey $key;
  public AttachmentIdentifier $name;
  public AttachmentsSourceValues $values;

  public function __construct(shape(
  ?'key' => AttachmentsSourceKey,
  ?'name' => AttachmentIdentifier,
  ?'values' => AttachmentsSourceValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type AttachmentsSourceKey = string;

type AttachmentsSourceList = vec<AttachmentsSource>;

type AttachmentsSourceValue = string;

type AttachmentsSourceValues = vec<AttachmentsSourceValue>;

type AttributeName = string;

type AttributeValue = string;

type AutomationActionName = string;

class AutomationDefinitionNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class AutomationDefinitionVersionNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'automation_execution_id' => AutomationExecutionId,
  ?'automation_execution_status' => AutomationExecutionStatus,
  ?'current_action' => string,
  ?'current_step_name' => string,
  ?'document_name' => DocumentName,
  ?'document_version' => DocumentVersion,
  ?'executed_by' => string,
  ?'execution_end_time' => DateTime,
  ?'execution_start_time' => DateTime,
  ?'failure_message' => string,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'mode' => ExecutionMode,
  ?'outputs' => AutomationParameterMap,
  ?'parameters' => AutomationParameterMap,
  ?'parent_automation_execution_id' => AutomationExecutionId,
  ?'progress_counters' => ProgressCounters,
  ?'resolved_targets' => ResolvedTargets,
  ?'step_executions' => StepExecutionList,
  ?'step_executions_truncated' => boolean,
  ?'target' => string,
  ?'target_locations' => TargetLocations,
  ?'target_maps' => TargetMaps,
  ?'target_parameter_name' => AutomationParameterKey,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->automation_execution_id = $automation_execution_id ?? "";
    $this->automation_execution_status = $automation_execution_status ?? "";
    $this->current_action = $current_action ?? "";
    $this->current_step_name = $current_step_name ?? "";
    $this->document_name = $document_name ?? "";
    $this->document_version = $document_version ?? "";
    $this->executed_by = $executed_by ?? "";
    $this->execution_end_time = $execution_end_time ?? 0;
    $this->execution_start_time = $execution_start_time ?? 0;
    $this->failure_message = $failure_message ?? "";
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->mode = $mode ?? "";
    $this->outputs = $outputs ?? [];
    $this->parameters = $parameters ?? [];
    $this->parent_automation_execution_id = $parent_automation_execution_id ?? "";
    $this->progress_counters = $progress_counters ?? null;
    $this->resolved_targets = $resolved_targets ?? null;
    $this->step_executions = $step_executions ?? [];
    $this->step_executions_truncated = $step_executions_truncated ?? false;
    $this->target = $target ?? "";
    $this->target_locations = $target_locations ?? [];
    $this->target_maps = $target_maps ?? [];
    $this->target_parameter_name = $target_parameter_name ?? "";
    $this->targets = $targets ?? [];
  }
}

class AutomationExecutionFilter {
  public AutomationExecutionFilterKey $key;
  public AutomationExecutionFilterValueList $values;

  public function __construct(shape(
  ?'key' => AutomationExecutionFilterKey,
  ?'values' => AutomationExecutionFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type AutomationExecutionFilterKey = string;

type AutomationExecutionFilterList = vec<AutomationExecutionFilter>;

type AutomationExecutionFilterValue = string;

type AutomationExecutionFilterValueList = vec<AutomationExecutionFilterValue>;

type AutomationExecutionId = string;

class AutomationExecutionLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'automation_execution_id' => AutomationExecutionId,
  ?'automation_execution_status' => AutomationExecutionStatus,
  ?'automation_type' => AutomationType,
  ?'current_action' => string,
  ?'current_step_name' => string,
  ?'document_name' => DocumentName,
  ?'document_version' => DocumentVersion,
  ?'executed_by' => string,
  ?'execution_end_time' => DateTime,
  ?'execution_start_time' => DateTime,
  ?'failure_message' => string,
  ?'log_file' => string,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'mode' => ExecutionMode,
  ?'outputs' => AutomationParameterMap,
  ?'parent_automation_execution_id' => AutomationExecutionId,
  ?'resolved_targets' => ResolvedTargets,
  ?'target' => string,
  ?'target_maps' => TargetMaps,
  ?'target_parameter_name' => AutomationParameterKey,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->automation_execution_id = $automation_execution_id ?? "";
    $this->automation_execution_status = $automation_execution_status ?? "";
    $this->automation_type = $automation_type ?? "";
    $this->current_action = $current_action ?? "";
    $this->current_step_name = $current_step_name ?? "";
    $this->document_name = $document_name ?? "";
    $this->document_version = $document_version ?? "";
    $this->executed_by = $executed_by ?? "";
    $this->execution_end_time = $execution_end_time ?? 0;
    $this->execution_start_time = $execution_start_time ?? 0;
    $this->failure_message = $failure_message ?? "";
    $this->log_file = $log_file ?? "";
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->mode = $mode ?? "";
    $this->outputs = $outputs ?? [];
    $this->parent_automation_execution_id = $parent_automation_execution_id ?? "";
    $this->resolved_targets = $resolved_targets ?? null;
    $this->target = $target ?? "";
    $this->target_maps = $target_maps ?? [];
    $this->target_parameter_name = $target_parameter_name ?? "";
    $this->targets = $targets ?? [];
  }
}

type AutomationExecutionMetadataList = vec<AutomationExecutionMetadata>;

class AutomationExecutionNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AutomationExecutionStatus = string;

type AutomationParameterKey = string;

type AutomationParameterMap = dict<AutomationParameterKey, AutomationParameterValueList>;

type AutomationParameterValue = string;

type AutomationParameterValueList = vec<AutomationParameterValue>;

class AutomationStepNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type AutomationTargetParameterName = string;

type AutomationType = string;

type BaselineDescription = string;

type BaselineId = string;

type BaselineName = string;

type BatchErrorMessage = string;

type Boolean = bool;

type CalendarNameOrARN = string;

type CalendarNameOrARNList = vec<CalendarNameOrARN>;

type CalendarState = string;

class CancelCommandRequest {
  public CommandId $command_id;
  public InstanceIdList $instance_ids;

  public function __construct(shape(
  ?'command_id' => CommandId,
  ?'instance_ids' => InstanceIdList,
  ) $s = shape()) {
    $this->command_id = $command_id ?? "";
    $this->instance_ids = $instance_ids ?? [];
  }
}

class CancelCommandResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CancelMaintenanceWindowExecutionRequest {
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

class CancelMaintenanceWindowExecutionResult {
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

type ClientToken = string;

type CloudWatchLogGroupName = string;

class CloudWatchOutputConfig {
  public CloudWatchLogGroupName $cloud_watch_log_group_name;
  public CloudWatchOutputEnabled $cloud_watch_output_enabled;

  public function __construct(shape(
  ?'cloud_watch_log_group_name' => CloudWatchLogGroupName,
  ?'cloud_watch_output_enabled' => CloudWatchOutputEnabled,
  ) $s = shape()) {
    $this->cloud_watch_log_group_name = $cloud_watch_log_group_name ?? "";
    $this->cloud_watch_output_enabled = $cloud_watch_output_enabled ?? false;
  }
}

type CloudWatchOutputEnabled = bool;

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

  public function __construct(shape(
  ?'cloud_watch_output_config' => CloudWatchOutputConfig,
  ?'command_id' => CommandId,
  ?'comment' => Comment,
  ?'completed_count' => CompletedCount,
  ?'delivery_timed_out_count' => DeliveryTimedOutCount,
  ?'document_name' => DocumentName,
  ?'document_version' => DocumentVersion,
  ?'error_count' => ErrorCount,
  ?'expires_after' => DateTime,
  ?'instance_ids' => InstanceIdList,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'notification_config' => NotificationConfig,
  ?'output_s_3_bucket_name' => S3BucketName,
  ?'output_s_3_key_prefix' => S3KeyPrefix,
  ?'output_s_3_region' => S3Region,
  ?'parameters' => Parameters,
  ?'requested_date_time' => DateTime,
  ?'service_role' => ServiceRole,
  ?'status' => CommandStatus,
  ?'status_details' => StatusDetails,
  ?'target_count' => TargetCount,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->cloud_watch_output_config = $cloud_watch_output_config ?? null;
    $this->command_id = $command_id ?? "";
    $this->comment = $comment ?? "";
    $this->completed_count = $completed_count ?? 0;
    $this->delivery_timed_out_count = $delivery_timed_out_count ?? 0;
    $this->document_name = $document_name ?? "";
    $this->document_version = $document_version ?? "";
    $this->error_count = $error_count ?? 0;
    $this->expires_after = $expires_after ?? 0;
    $this->instance_ids = $instance_ids ?? [];
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->notification_config = $notification_config ?? null;
    $this->output_s_3_bucket_name = $output_s_3_bucket_name ?? "";
    $this->output_s_3_key_prefix = $output_s_3_key_prefix ?? "";
    $this->output_s_3_region = $output_s_3_region ?? "";
    $this->parameters = $parameters ?? [];
    $this->requested_date_time = $requested_date_time ?? 0;
    $this->service_role = $service_role ?? "";
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->target_count = $target_count ?? 0;
    $this->targets = $targets ?? [];
  }
}

class CommandFilter {
  public CommandFilterKey $key;
  public CommandFilterValue $value;

  public function __construct(shape(
  ?'key' => CommandFilterKey,
  ?'value' => CommandFilterValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type CommandFilterKey = string;

type CommandFilterList = vec<CommandFilter>;

type CommandFilterValue = string;

type CommandId = string;

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

  public function __construct(shape(
  ?'cloud_watch_output_config' => CloudWatchOutputConfig,
  ?'command_id' => CommandId,
  ?'command_plugins' => CommandPluginList,
  ?'comment' => Comment,
  ?'document_name' => DocumentName,
  ?'document_version' => DocumentVersion,
  ?'instance_id' => InstanceId,
  ?'instance_name' => InstanceTagName,
  ?'notification_config' => NotificationConfig,
  ?'requested_date_time' => DateTime,
  ?'service_role' => ServiceRole,
  ?'standard_error_url' => Url,
  ?'standard_output_url' => Url,
  ?'status' => CommandInvocationStatus,
  ?'status_details' => StatusDetails,
  ?'trace_output' => InvocationTraceOutput,
  ) $s = shape()) {
    $this->cloud_watch_output_config = $cloud_watch_output_config ?? null;
    $this->command_id = $command_id ?? "";
    $this->command_plugins = $command_plugins ?? [];
    $this->comment = $comment ?? "";
    $this->document_name = $document_name ?? "";
    $this->document_version = $document_version ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->instance_name = $instance_name ?? "";
    $this->notification_config = $notification_config ?? null;
    $this->requested_date_time = $requested_date_time ?? 0;
    $this->service_role = $service_role ?? "";
    $this->standard_error_url = $standard_error_url ?? "";
    $this->standard_output_url = $standard_output_url ?? "";
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->trace_output = $trace_output ?? "";
  }
}

type CommandInvocationList = vec<CommandInvocation>;

type CommandInvocationStatus = string;

type CommandList = vec<Command>;

type CommandMaxResults = int;

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

  public function __construct(shape(
  ?'name' => CommandPluginName,
  ?'output' => CommandPluginOutput,
  ?'output_s_3_bucket_name' => S3BucketName,
  ?'output_s_3_key_prefix' => S3KeyPrefix,
  ?'output_s_3_region' => S3Region,
  ?'response_code' => ResponseCode,
  ?'response_finish_date_time' => DateTime,
  ?'response_start_date_time' => DateTime,
  ?'standard_error_url' => Url,
  ?'standard_output_url' => Url,
  ?'status' => CommandPluginStatus,
  ?'status_details' => StatusDetails,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->output = $output ?? "";
    $this->output_s_3_bucket_name = $output_s_3_bucket_name ?? "";
    $this->output_s_3_key_prefix = $output_s_3_key_prefix ?? "";
    $this->output_s_3_region = $output_s_3_region ?? "";
    $this->response_code = $response_code ?? 0;
    $this->response_finish_date_time = $response_finish_date_time ?? 0;
    $this->response_start_date_time = $response_start_date_time ?? 0;
    $this->standard_error_url = $standard_error_url ?? "";
    $this->standard_output_url = $standard_output_url ?? "";
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
  }
}

type CommandPluginList = vec<CommandPlugin>;

type CommandPluginName = string;

type CommandPluginOutput = string;

type CommandPluginStatus = string;

type CommandStatus = string;

type Comment = string;

type CompletedCount = int;

type ComplianceExecutionId = string;

class ComplianceExecutionSummary {
  public ComplianceExecutionId $execution_id;
  public DateTime $execution_time;
  public ComplianceExecutionType $execution_type;

  public function __construct(shape(
  ?'execution_id' => ComplianceExecutionId,
  ?'execution_time' => DateTime,
  ?'execution_type' => ComplianceExecutionType,
  ) $s = shape()) {
    $this->execution_id = $execution_id ?? "";
    $this->execution_time = $execution_time ?? 0;
    $this->execution_type = $execution_type ?? "";
  }
}

type ComplianceExecutionType = string;

type ComplianceFilterValue = string;

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

  public function __construct(shape(
  ?'compliance_type' => ComplianceTypeName,
  ?'details' => ComplianceItemDetails,
  ?'execution_summary' => ComplianceExecutionSummary,
  ?'id' => ComplianceItemId,
  ?'resource_id' => ComplianceResourceId,
  ?'resource_type' => ComplianceResourceType,
  ?'severity' => ComplianceSeverity,
  ?'status' => ComplianceStatus,
  ?'title' => ComplianceItemTitle,
  ) $s = shape()) {
    $this->compliance_type = $compliance_type ?? "";
    $this->details = $details ?? [];
    $this->execution_summary = $execution_summary ?? null;
    $this->id = $id ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->severity = $severity ?? "";
    $this->status = $status ?? "";
    $this->title = $title ?? "";
  }
}

type ComplianceItemContentHash = string;

type ComplianceItemDetails = dict<AttributeName, AttributeValue>;

class ComplianceItemEntry {
  public ComplianceItemDetails $details;
  public ComplianceItemId $id;
  public ComplianceSeverity $severity;
  public ComplianceStatus $status;
  public ComplianceItemTitle $title;

  public function __construct(shape(
  ?'details' => ComplianceItemDetails,
  ?'id' => ComplianceItemId,
  ?'severity' => ComplianceSeverity,
  ?'status' => ComplianceStatus,
  ?'title' => ComplianceItemTitle,
  ) $s = shape()) {
    $this->details = $details ?? [];
    $this->id = $id ?? "";
    $this->severity = $severity ?? "";
    $this->status = $status ?? "";
    $this->title = $title ?? "";
  }
}

type ComplianceItemEntryList = vec<ComplianceItemEntry>;

type ComplianceItemId = string;

type ComplianceItemList = vec<ComplianceItem>;

type ComplianceItemTitle = string;

type ComplianceQueryOperatorType = string;

type ComplianceResourceId = string;

type ComplianceResourceIdList = vec<ComplianceResourceId>;

type ComplianceResourceType = string;

type ComplianceResourceTypeList = vec<ComplianceResourceType>;

type ComplianceSeverity = string;

type ComplianceStatus = string;

class ComplianceStringFilter {
  public ComplianceStringFilterKey $key;
  public ComplianceQueryOperatorType $type;
  public ComplianceStringFilterValueList $values;

  public function __construct(shape(
  ?'key' => ComplianceStringFilterKey,
  ?'type' => ComplianceQueryOperatorType,
  ?'values' => ComplianceStringFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? "";
    $this->values = $values ?? [];
  }
}

type ComplianceStringFilterKey = string;

type ComplianceStringFilterList = vec<ComplianceStringFilter>;

type ComplianceStringFilterValueList = vec<ComplianceFilterValue>;

type ComplianceSummaryCount = int;

class ComplianceSummaryItem {
  public ComplianceTypeName $compliance_type;
  public CompliantSummary $compliant_summary;
  public NonCompliantSummary $non_compliant_summary;

  public function __construct(shape(
  ?'compliance_type' => ComplianceTypeName,
  ?'compliant_summary' => CompliantSummary,
  ?'non_compliant_summary' => NonCompliantSummary,
  ) $s = shape()) {
    $this->compliance_type = $compliance_type ?? "";
    $this->compliant_summary = $compliant_summary ?? null;
    $this->non_compliant_summary = $non_compliant_summary ?? null;
  }
}

type ComplianceSummaryItemList = vec<ComplianceSummaryItem>;

class ComplianceTypeCountLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ComplianceTypeName = string;

class CompliantSummary {
  public ComplianceSummaryCount $compliant_count;
  public SeveritySummary $severity_summary;

  public function __construct(shape(
  ?'compliant_count' => ComplianceSummaryCount,
  ?'severity_summary' => SeveritySummary,
  ) $s = shape()) {
    $this->compliant_count = $compliant_count ?? 0;
    $this->severity_summary = $severity_summary ?? null;
  }
}

type ComputerName = string;

type ConnectionStatus = string;

type ContentLength = int;

class CreateActivationRequest {
  public DefaultInstanceName $default_instance_name;
  public ActivationDescription $description;
  public ExpirationDate $expiration_date;
  public IamRole $iam_role;
  public RegistrationLimit $registration_limit;
  public TagList $tags;

  public function __construct(shape(
  ?'default_instance_name' => DefaultInstanceName,
  ?'description' => ActivationDescription,
  ?'expiration_date' => ExpirationDate,
  ?'iam_role' => IamRole,
  ?'registration_limit' => RegistrationLimit,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->default_instance_name = $default_instance_name ?? "";
    $this->description = $description ?? "";
    $this->expiration_date = $expiration_date ?? 0;
    $this->iam_role = $iam_role ?? "";
    $this->registration_limit = $registration_limit ?? 0;
    $this->tags = $tags ?? [];
  }
}

class CreateActivationResult {
  public ActivationCode $activation_code;
  public ActivationId $activation_id;

  public function __construct(shape(
  ?'activation_code' => ActivationCode,
  ?'activation_id' => ActivationId,
  ) $s = shape()) {
    $this->activation_code = $activation_code ?? "";
    $this->activation_id = $activation_id ?? "";
  }
}

class CreateAssociationBatchRequest {
  public CreateAssociationBatchRequestEntries $entries;

  public function __construct(shape(
  ?'entries' => CreateAssociationBatchRequestEntries,
  ) $s = shape()) {
    $this->entries = $entries ?? [];
  }
}

type CreateAssociationBatchRequestEntries = vec<CreateAssociationBatchRequestEntry>;

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

  public function __construct(shape(
  ?'association_name' => AssociationName,
  ?'automation_target_parameter_name' => AutomationTargetParameterName,
  ?'compliance_severity' => AssociationComplianceSeverity,
  ?'document_version' => DocumentVersion,
  ?'instance_id' => InstanceId,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => DocumentARN,
  ?'output_location' => InstanceAssociationOutputLocation,
  ?'parameters' => Parameters,
  ?'schedule_expression' => ScheduleExpression,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->association_name = $association_name ?? "";
    $this->automation_target_parameter_name = $automation_target_parameter_name ?? "";
    $this->compliance_severity = $compliance_severity ?? "";
    $this->document_version = $document_version ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->output_location = $output_location ?? null;
    $this->parameters = $parameters ?? [];
    $this->schedule_expression = $schedule_expression ?? "";
    $this->targets = $targets ?? [];
  }
}

class CreateAssociationBatchResult {
  public FailedCreateAssociationList $failed;
  public AssociationDescriptionList $successful;

  public function __construct(shape(
  ?'failed' => FailedCreateAssociationList,
  ?'successful' => AssociationDescriptionList,
  ) $s = shape()) {
    $this->failed = $failed ?? [];
    $this->successful = $successful ?? [];
  }
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

  public function __construct(shape(
  ?'association_name' => AssociationName,
  ?'automation_target_parameter_name' => AutomationTargetParameterName,
  ?'compliance_severity' => AssociationComplianceSeverity,
  ?'document_version' => DocumentVersion,
  ?'instance_id' => InstanceId,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => DocumentARN,
  ?'output_location' => InstanceAssociationOutputLocation,
  ?'parameters' => Parameters,
  ?'schedule_expression' => ScheduleExpression,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->association_name = $association_name ?? "";
    $this->automation_target_parameter_name = $automation_target_parameter_name ?? "";
    $this->compliance_severity = $compliance_severity ?? "";
    $this->document_version = $document_version ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->output_location = $output_location ?? null;
    $this->parameters = $parameters ?? [];
    $this->schedule_expression = $schedule_expression ?? "";
    $this->targets = $targets ?? [];
  }
}

class CreateAssociationResult {
  public AssociationDescription $association_description;

  public function __construct(shape(
  ?'association_description' => AssociationDescription,
  ) $s = shape()) {
    $this->association_description = $association_description ?? null;
  }
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

  public function __construct(shape(
  ?'attachments' => AttachmentsSourceList,
  ?'content' => DocumentContent,
  ?'document_format' => DocumentFormat,
  ?'document_type' => DocumentType,
  ?'name' => DocumentName,
  ?'requires' => DocumentRequiresList,
  ?'tags' => TagList,
  ?'target_type' => TargetType,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->attachments = $attachments ?? [];
    $this->content = $content ?? "";
    $this->document_format = $document_format ?? "";
    $this->document_type = $document_type ?? "";
    $this->name = $name ?? "";
    $this->requires = $requires ?? [];
    $this->tags = $tags ?? [];
    $this->target_type = $target_type ?? "";
    $this->version_name = $version_name ?? "";
  }
}

class CreateDocumentResult {
  public DocumentDescription $document_description;

  public function __construct(shape(
  ?'document_description' => DocumentDescription,
  ) $s = shape()) {
    $this->document_description = $document_description ?? null;
  }
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

  public function __construct(shape(
  ?'allow_unassociated_targets' => MaintenanceWindowAllowUnassociatedTargets,
  ?'client_token' => ClientToken,
  ?'cutoff' => MaintenanceWindowCutoff,
  ?'description' => MaintenanceWindowDescription,
  ?'duration' => MaintenanceWindowDurationHours,
  ?'end_date' => MaintenanceWindowStringDateTime,
  ?'name' => MaintenanceWindowName,
  ?'schedule' => MaintenanceWindowSchedule,
  ?'schedule_timezone' => MaintenanceWindowTimezone,
  ?'start_date' => MaintenanceWindowStringDateTime,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->allow_unassociated_targets = $allow_unassociated_targets ?? false;
    $this->client_token = $client_token ?? "";
    $this->cutoff = $cutoff ?? 0;
    $this->description = $description ?? "";
    $this->duration = $duration ?? 0;
    $this->end_date = $end_date ?? "";
    $this->name = $name ?? "";
    $this->schedule = $schedule ?? "";
    $this->schedule_timezone = $schedule_timezone ?? "";
    $this->start_date = $start_date ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
  }
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

  public function __construct(shape(
  ?'category' => OpsItemCategory,
  ?'description' => OpsItemDescription,
  ?'notifications' => OpsItemNotifications,
  ?'operational_data' => OpsItemOperationalData,
  ?'priority' => OpsItemPriority,
  ?'related_ops_items' => RelatedOpsItems,
  ?'severity' => OpsItemSeverity,
  ?'source' => OpsItemSource,
  ?'tags' => TagList,
  ?'title' => OpsItemTitle,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->description = $description ?? "";
    $this->notifications = $notifications ?? [];
    $this->operational_data = $operational_data ?? [];
    $this->priority = $priority ?? 0;
    $this->related_ops_items = $related_ops_items ?? [];
    $this->severity = $severity ?? "";
    $this->source = $source ?? "";
    $this->tags = $tags ?? [];
    $this->title = $title ?? "";
  }
}

class CreateOpsItemResponse {
  public string $ops_item_id;

  public function __construct(shape(
  ?'ops_item_id' => string,
  ) $s = shape()) {
    $this->ops_item_id = $ops_item_id ?? "";
  }
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

  public function __construct(shape(
  ?'approval_rules' => PatchRuleGroup,
  ?'approved_patches' => PatchIdList,
  ?'approved_patches_compliance_level' => PatchComplianceLevel,
  ?'approved_patches_enable_non_security' => boolean,
  ?'client_token' => ClientToken,
  ?'description' => BaselineDescription,
  ?'global_filters' => PatchFilterGroup,
  ?'name' => BaselineName,
  ?'operating_system' => OperatingSystem,
  ?'rejected_patches' => PatchIdList,
  ?'rejected_patches_action' => PatchAction,
  ?'sources' => PatchSourceList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->approval_rules = $approval_rules ?? null;
    $this->approved_patches = $approved_patches ?? [];
    $this->approved_patches_compliance_level = $approved_patches_compliance_level ?? "";
    $this->approved_patches_enable_non_security = $approved_patches_enable_non_security ?? false;
    $this->client_token = $client_token ?? "";
    $this->description = $description ?? "";
    $this->global_filters = $global_filters ?? null;
    $this->name = $name ?? "";
    $this->operating_system = $operating_system ?? "";
    $this->rejected_patches = $rejected_patches ?? [];
    $this->rejected_patches_action = $rejected_patches_action ?? "";
    $this->sources = $sources ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreatePatchBaselineResult {
  public BaselineId $baseline_id;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
  }
}

class CreateResourceDataSyncRequest {
  public ResourceDataSyncS3Destination $s_3_destination;
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncSource $sync_source;
  public ResourceDataSyncType $sync_type;

  public function __construct(shape(
  ?'s_3_destination' => ResourceDataSyncS3Destination,
  ?'sync_name' => ResourceDataSyncName,
  ?'sync_source' => ResourceDataSyncSource,
  ?'sync_type' => ResourceDataSyncType,
  ) $s = shape()) {
    $this->s_3_destination = $s_3_destination ?? null;
    $this->sync_name = $sync_name ?? "";
    $this->sync_source = $sync_source ?? null;
    $this->sync_type = $sync_type ?? "";
  }
}

class CreateResourceDataSyncResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CreatedDate = int;

class CustomSchemaCountLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DateTime = int;

type DefaultBaseline = bool;

type DefaultInstanceName = string;

class DeleteActivationRequest {
  public ActivationId $activation_id;

  public function __construct(shape(
  ?'activation_id' => ActivationId,
  ) $s = shape()) {
    $this->activation_id = $activation_id ?? "";
  }
}

class DeleteActivationResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAssociationRequest {
  public AssociationId $association_id;
  public InstanceId $instance_id;
  public DocumentARN $name;

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'instance_id' => InstanceId,
  ?'name' => DocumentARN,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->name = $name ?? "";
  }
}

class DeleteAssociationResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDocumentRequest {
  public DocumentVersion $document_version;
  public boolean $force;
  public DocumentName $name;
  public DocumentVersionName $version_name;

  public function __construct(shape(
  ?'document_version' => DocumentVersion,
  ?'force' => boolean,
  ?'name' => DocumentName,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->document_version = $document_version ?? "";
    $this->force = $force ?? false;
    $this->name = $name ?? "";
    $this->version_name = $version_name ?? "";
  }
}

class DeleteDocumentResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInventoryRequest {
  public ClientToken $client_token;
  public DryRun $dry_run;
  public InventorySchemaDeleteOption $schema_delete_option;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'dry_run' => DryRun,
  ?'schema_delete_option' => InventorySchemaDeleteOption,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->dry_run = $dry_run ?? false;
    $this->schema_delete_option = $schema_delete_option ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class DeleteInventoryResult {
  public InventoryDeletionId $deletion_id;
  public InventoryDeletionSummary $deletion_summary;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'deletion_id' => InventoryDeletionId,
  ?'deletion_summary' => InventoryDeletionSummary,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->deletion_id = $deletion_id ?? "";
    $this->deletion_summary = $deletion_summary ?? null;
    $this->type_name = $type_name ?? "";
  }
}

class DeleteMaintenanceWindowRequest {
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
  }
}

class DeleteMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
  }
}

class DeleteParameterRequest {
  public PSParameterName $name;

  public function __construct(shape(
  ?'name' => PSParameterName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class DeleteParameterResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteParametersRequest {
  public ParameterNameList $names;

  public function __construct(shape(
  ?'names' => ParameterNameList,
  ) $s = shape()) {
    $this->names = $names ?? [];
  }
}

class DeleteParametersResult {
  public ParameterNameList $deleted_parameters;
  public ParameterNameList $invalid_parameters;

  public function __construct(shape(
  ?'deleted_parameters' => ParameterNameList,
  ?'invalid_parameters' => ParameterNameList,
  ) $s = shape()) {
    $this->deleted_parameters = $deleted_parameters ?? [];
    $this->invalid_parameters = $invalid_parameters ?? [];
  }
}

class DeletePatchBaselineRequest {
  public BaselineId $baseline_id;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
  }
}

class DeletePatchBaselineResult {
  public BaselineId $baseline_id;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
  }
}

class DeleteResourceDataSyncRequest {
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncType $sync_type;

  public function __construct(shape(
  ?'sync_name' => ResourceDataSyncName,
  ?'sync_type' => ResourceDataSyncType,
  ) $s = shape()) {
    $this->sync_name = $sync_name ?? "";
    $this->sync_type = $sync_type ?? "";
  }
}

class DeleteResourceDataSyncResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeliveryTimedOutCount = int;

class DeregisterManagedInstanceRequest {
  public ManagedInstanceId $instance_id;

  public function __construct(shape(
  ?'instance_id' => ManagedInstanceId,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
  }
}

class DeregisterManagedInstanceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterPatchBaselineForPatchGroupRequest {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->patch_group = $patch_group ?? "";
  }
}

class DeregisterPatchBaselineForPatchGroupResult {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->patch_group = $patch_group ?? "";
  }
}

class DeregisterTargetFromMaintenanceWindowRequest {
  public boolean $safe;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;

  public function __construct(shape(
  ?'safe' => boolean,
  ?'window_id' => MaintenanceWindowId,
  ?'window_target_id' => MaintenanceWindowTargetId,
  ) $s = shape()) {
    $this->safe = $safe ?? false;
    $this->window_id = $window_id ?? "";
    $this->window_target_id = $window_target_id ?? "";
  }
}

class DeregisterTargetFromMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ?'window_target_id' => MaintenanceWindowTargetId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
    $this->window_target_id = $window_target_id ?? "";
  }
}

class DeregisterTaskFromMaintenanceWindowRequest {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
    $this->window_task_id = $window_task_id ?? "";
  }
}

class DeregisterTaskFromMaintenanceWindowResult {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
    $this->window_task_id = $window_task_id ?? "";
  }
}

class DescribeActivationsFilter {
  public DescribeActivationsFilterKeys $filter_key;
  public StringList $filter_values;

  public function __construct(shape(
  ?'filter_key' => DescribeActivationsFilterKeys,
  ?'filter_values' => StringList,
  ) $s = shape()) {
    $this->filter_key = $filter_key ?? "";
    $this->filter_values = $filter_values ?? [];
  }
}

type DescribeActivationsFilterKeys = string;

type DescribeActivationsFilterList = vec<DescribeActivationsFilter>;

class DescribeActivationsRequest {
  public DescribeActivationsFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => DescribeActivationsFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeActivationsResult {
  public ActivationList $activation_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'activation_list' => ActivationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->activation_list = $activation_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAssociationExecutionTargetsRequest {
  public AssociationId $association_id;
  public AssociationExecutionId $execution_id;
  public AssociationExecutionTargetsFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'execution_id' => AssociationExecutionId,
  ?'filters' => AssociationExecutionTargetsFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->execution_id = $execution_id ?? "";
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAssociationExecutionTargetsResult {
  public AssociationExecutionTargetsList $association_execution_targets;
  public NextToken $next_token;

  public function __construct(shape(
  ?'association_execution_targets' => AssociationExecutionTargetsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->association_execution_targets = $association_execution_targets ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAssociationExecutionsRequest {
  public AssociationId $association_id;
  public AssociationExecutionFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'filters' => AssociationExecutionFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAssociationExecutionsResult {
  public AssociationExecutionsList $association_executions;
  public NextToken $next_token;

  public function __construct(shape(
  ?'association_executions' => AssociationExecutionsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->association_executions = $association_executions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAssociationRequest {
  public AssociationId $association_id;
  public AssociationVersion $association_version;
  public InstanceId $instance_id;
  public DocumentARN $name;

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_version' => AssociationVersion,
  ?'instance_id' => InstanceId,
  ?'name' => DocumentARN,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_version = $association_version ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->name = $name ?? "";
  }
}

class DescribeAssociationResult {
  public AssociationDescription $association_description;

  public function __construct(shape(
  ?'association_description' => AssociationDescription,
  ) $s = shape()) {
    $this->association_description = $association_description ?? null;
  }
}

class DescribeAutomationExecutionsRequest {
  public AutomationExecutionFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => AutomationExecutionFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAutomationExecutionsResult {
  public AutomationExecutionMetadataList $automation_execution_metadata_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'automation_execution_metadata_list' => AutomationExecutionMetadataList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->automation_execution_metadata_list = $automation_execution_metadata_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAutomationStepExecutionsRequest {
  public AutomationExecutionId $automation_execution_id;
  public StepExecutionFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public boolean $reverse_order;

  public function __construct(shape(
  ?'automation_execution_id' => AutomationExecutionId,
  ?'filters' => StepExecutionFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'reverse_order' => boolean,
  ) $s = shape()) {
    $this->automation_execution_id = $automation_execution_id ?? "";
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->reverse_order = $reverse_order ?? false;
  }
}

class DescribeAutomationStepExecutionsResult {
  public NextToken $next_token;
  public StepExecutionList $step_executions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'step_executions' => StepExecutionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->step_executions = $step_executions ?? [];
  }
}

class DescribeAvailablePatchesRequest {
  public PatchOrchestratorFilterList $filters;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => PatchOrchestratorFilterList,
  ?'max_results' => PatchBaselineMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAvailablePatchesResult {
  public NextToken $next_token;
  public PatchList $patches;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'patches' => PatchList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->patches = $patches ?? [];
  }
}

class DescribeDocumentPermissionRequest {
  public DocumentName $name;
  public DocumentPermissionType $permission_type;

  public function __construct(shape(
  ?'name' => DocumentName,
  ?'permission_type' => DocumentPermissionType,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->permission_type = $permission_type ?? "";
  }
}

class DescribeDocumentPermissionResponse {
  public AccountIdList $account_ids;
  public AccountSharingInfoList $account_sharing_info_list;

  public function __construct(shape(
  ?'account_ids' => AccountIdList,
  ?'account_sharing_info_list' => AccountSharingInfoList,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? [];
    $this->account_sharing_info_list = $account_sharing_info_list ?? [];
  }
}

class DescribeDocumentRequest {
  public DocumentVersion $document_version;
  public DocumentARN $name;
  public DocumentVersionName $version_name;

  public function __construct(shape(
  ?'document_version' => DocumentVersion,
  ?'name' => DocumentARN,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->document_version = $document_version ?? "";
    $this->name = $name ?? "";
    $this->version_name = $version_name ?? "";
  }
}

class DescribeDocumentResult {
  public DocumentDescription $document;

  public function __construct(shape(
  ?'document' => DocumentDescription,
  ) $s = shape()) {
    $this->document = $document ?? null;
  }
}

class DescribeEffectiveInstanceAssociationsRequest {
  public InstanceId $instance_id;
  public EffectiveInstanceAssociationMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_id' => InstanceId,
  ?'max_results' => EffectiveInstanceAssociationMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeEffectiveInstanceAssociationsResult {
  public InstanceAssociationList $associations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'associations' => InstanceAssociationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->associations = $associations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeEffectivePatchesForPatchBaselineRequest {
  public BaselineId $baseline_id;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'max_results' => PatchBaselineMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeEffectivePatchesForPatchBaselineResult {
  public EffectivePatchList $effective_patches;
  public NextToken $next_token;

  public function __construct(shape(
  ?'effective_patches' => EffectivePatchList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->effective_patches = $effective_patches ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstanceAssociationsStatusRequest {
  public InstanceId $instance_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_id' => InstanceId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstanceAssociationsStatusResult {
  public InstanceAssociationStatusInfos $instance_association_status_infos;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_association_status_infos' => InstanceAssociationStatusInfos,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_association_status_infos = $instance_association_status_infos ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstanceInformationRequest {
  public InstanceInformationStringFilterList $filters;
  public InstanceInformationFilterList $instance_information_filter_list;
  public MaxResultsEC2Compatible $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => InstanceInformationStringFilterList,
  ?'instance_information_filter_list' => InstanceInformationFilterList,
  ?'max_results' => MaxResultsEC2Compatible,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->instance_information_filter_list = $instance_information_filter_list ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstanceInformationResult {
  public InstanceInformationList $instance_information_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_information_list' => InstanceInformationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_information_list = $instance_information_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstancePatchStatesForPatchGroupRequest {
  public InstancePatchStateFilterList $filters;
  public PatchComplianceMaxResults $max_results;
  public NextToken $next_token;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'filters' => InstancePatchStateFilterList,
  ?'max_results' => PatchComplianceMaxResults,
  ?'next_token' => NextToken,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->patch_group = $patch_group ?? "";
  }
}

class DescribeInstancePatchStatesForPatchGroupResult {
  public InstancePatchStatesList $instance_patch_states;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_patch_states' => InstancePatchStatesList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_patch_states = $instance_patch_states ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstancePatchStatesRequest {
  public InstanceIdList $instance_ids;
  public PatchComplianceMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_ids' => InstanceIdList,
  ?'max_results' => PatchComplianceMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_ids = $instance_ids ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstancePatchStatesResult {
  public InstancePatchStateList $instance_patch_states;
  public NextToken $next_token;

  public function __construct(shape(
  ?'instance_patch_states' => InstancePatchStateList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->instance_patch_states = $instance_patch_states ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstancePatchesRequest {
  public PatchOrchestratorFilterList $filters;
  public InstanceId $instance_id;
  public PatchComplianceMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => PatchOrchestratorFilterList,
  ?'instance_id' => InstanceId,
  ?'max_results' => PatchComplianceMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->instance_id = $instance_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInstancePatchesResult {
  public NextToken $next_token;
  public PatchComplianceDataList $patches;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'patches' => PatchComplianceDataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->patches = $patches ?? [];
  }
}

class DescribeInventoryDeletionsRequest {
  public InventoryDeletionId $deletion_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'deletion_id' => InventoryDeletionId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->deletion_id = $deletion_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeInventoryDeletionsResult {
  public InventoryDeletionsList $inventory_deletions;
  public NextToken $next_token;

  public function __construct(shape(
  ?'inventory_deletions' => InventoryDeletionsList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->inventory_deletions = $inventory_deletions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeMaintenanceWindowExecutionTaskInvocationsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowExecutionTaskId $task_id;
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'filters' => MaintenanceWindowFilterList,
  ?'max_results' => MaintenanceWindowMaxResults,
  ?'next_token' => NextToken,
  ?'task_id' => MaintenanceWindowExecutionTaskId,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->task_id = $task_id ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

class DescribeMaintenanceWindowExecutionTaskInvocationsResult {
  public NextToken $next_token;
  public MaintenanceWindowExecutionTaskInvocationIdentityList $window_execution_task_invocation_identities;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'window_execution_task_invocation_identities' => MaintenanceWindowExecutionTaskInvocationIdentityList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->window_execution_task_invocation_identities = $window_execution_task_invocation_identities ?? [];
  }
}

class DescribeMaintenanceWindowExecutionTasksRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'filters' => MaintenanceWindowFilterList,
  ?'max_results' => MaintenanceWindowMaxResults,
  ?'next_token' => NextToken,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

class DescribeMaintenanceWindowExecutionTasksResult {
  public NextToken $next_token;
  public MaintenanceWindowExecutionTaskIdentityList $window_execution_task_identities;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'window_execution_task_identities' => MaintenanceWindowExecutionTaskIdentityList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->window_execution_task_identities = $window_execution_task_identities ?? [];
  }
}

class DescribeMaintenanceWindowExecutionsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'filters' => MaintenanceWindowFilterList,
  ?'max_results' => MaintenanceWindowMaxResults,
  ?'next_token' => NextToken,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->window_id = $window_id ?? "";
  }
}

class DescribeMaintenanceWindowExecutionsResult {
  public NextToken $next_token;
  public MaintenanceWindowExecutionList $window_executions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'window_executions' => MaintenanceWindowExecutionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->window_executions = $window_executions ?? [];
  }
}

class DescribeMaintenanceWindowScheduleRequest {
  public PatchOrchestratorFilterList $filters;
  public MaintenanceWindowSearchMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'filters' => PatchOrchestratorFilterList,
  ?'max_results' => MaintenanceWindowSearchMaxResults,
  ?'next_token' => NextToken,
  ?'resource_type' => MaintenanceWindowResourceType,
  ?'targets' => Targets,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->targets = $targets ?? [];
    $this->window_id = $window_id ?? "";
  }
}

class DescribeMaintenanceWindowScheduleResult {
  public NextToken $next_token;
  public ScheduledWindowExecutionList $scheduled_window_executions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'scheduled_window_executions' => ScheduledWindowExecutionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->scheduled_window_executions = $scheduled_window_executions ?? [];
  }
}

class DescribeMaintenanceWindowTargetsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'filters' => MaintenanceWindowFilterList,
  ?'max_results' => MaintenanceWindowMaxResults,
  ?'next_token' => NextToken,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->window_id = $window_id ?? "";
  }
}

class DescribeMaintenanceWindowTargetsResult {
  public NextToken $next_token;
  public MaintenanceWindowTargetList $targets;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'targets' => MaintenanceWindowTargetList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->targets = $targets ?? [];
  }
}

class DescribeMaintenanceWindowTasksRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'filters' => MaintenanceWindowFilterList,
  ?'max_results' => MaintenanceWindowMaxResults,
  ?'next_token' => NextToken,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->window_id = $window_id ?? "";
  }
}

class DescribeMaintenanceWindowTasksResult {
  public NextToken $next_token;
  public MaintenanceWindowTaskList $tasks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tasks' => MaintenanceWindowTaskList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tasks = $tasks ?? [];
  }
}

class DescribeMaintenanceWindowsForTargetRequest {
  public MaintenanceWindowSearchMaxResults $max_results;
  public NextToken $next_token;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;

  public function __construct(shape(
  ?'max_results' => MaintenanceWindowSearchMaxResults,
  ?'next_token' => NextToken,
  ?'resource_type' => MaintenanceWindowResourceType,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->targets = $targets ?? [];
  }
}

class DescribeMaintenanceWindowsForTargetResult {
  public NextToken $next_token;
  public MaintenanceWindowsForTargetList $window_identities;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'window_identities' => MaintenanceWindowsForTargetList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->window_identities = $window_identities ?? [];
  }
}

class DescribeMaintenanceWindowsRequest {
  public MaintenanceWindowFilterList $filters;
  public MaintenanceWindowMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => MaintenanceWindowFilterList,
  ?'max_results' => MaintenanceWindowMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeMaintenanceWindowsResult {
  public NextToken $next_token;
  public MaintenanceWindowIdentityList $window_identities;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'window_identities' => MaintenanceWindowIdentityList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->window_identities = $window_identities ?? [];
  }
}

class DescribeOpsItemsRequest {
  public OpsItemMaxResults $max_results;
  public string $next_token;
  public OpsItemFilters $ops_item_filters;

  public function __construct(shape(
  ?'max_results' => OpsItemMaxResults,
  ?'next_token' => string,
  ?'ops_item_filters' => OpsItemFilters,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->ops_item_filters = $ops_item_filters ?? [];
  }
}

class DescribeOpsItemsResponse {
  public string $next_token;
  public OpsItemSummaries $ops_item_summaries;

  public function __construct(shape(
  ?'next_token' => string,
  ?'ops_item_summaries' => OpsItemSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->ops_item_summaries = $ops_item_summaries ?? [];
  }
}

class DescribeParametersRequest {
  public ParametersFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ParameterStringFilterList $parameter_filters;

  public function __construct(shape(
  ?'filters' => ParametersFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'parameter_filters' => ParameterStringFilterList,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->parameter_filters = $parameter_filters ?? [];
  }
}

class DescribeParametersResult {
  public NextToken $next_token;
  public ParameterMetadataList $parameters;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'parameters' => ParameterMetadataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->parameters = $parameters ?? [];
  }
}

class DescribePatchBaselinesRequest {
  public PatchOrchestratorFilterList $filters;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => PatchOrchestratorFilterList,
  ?'max_results' => PatchBaselineMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribePatchBaselinesResult {
  public PatchBaselineIdentityList $baseline_identities;
  public NextToken $next_token;

  public function __construct(shape(
  ?'baseline_identities' => PatchBaselineIdentityList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->baseline_identities = $baseline_identities ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribePatchGroupStateRequest {
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->patch_group = $patch_group ?? "";
  }
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

  public function __construct(shape(
  ?'instances' => int,
  ?'instances_with_failed_patches' => int,
  ?'instances_with_installed_other_patches' => int,
  ?'instances_with_installed_patches' => int,
  ?'instances_with_installed_pending_reboot_patches' => InstancesCount,
  ?'instances_with_installed_rejected_patches' => InstancesCount,
  ?'instances_with_missing_patches' => int,
  ?'instances_with_not_applicable_patches' => int,
  ?'instances_with_unreported_not_applicable_patches' => int,
  ) $s = shape()) {
    $this->instances = $instances ?? 0;
    $this->instances_with_failed_patches = $instances_with_failed_patches ?? 0;
    $this->instances_with_installed_other_patches = $instances_with_installed_other_patches ?? 0;
    $this->instances_with_installed_patches = $instances_with_installed_patches ?? 0;
    $this->instances_with_installed_pending_reboot_patches = $instances_with_installed_pending_reboot_patches ?? 0;
    $this->instances_with_installed_rejected_patches = $instances_with_installed_rejected_patches ?? 0;
    $this->instances_with_missing_patches = $instances_with_missing_patches ?? 0;
    $this->instances_with_not_applicable_patches = $instances_with_not_applicable_patches ?? 0;
    $this->instances_with_unreported_not_applicable_patches = $instances_with_unreported_not_applicable_patches ?? 0;
  }
}

class DescribePatchGroupsRequest {
  public PatchOrchestratorFilterList $filters;
  public PatchBaselineMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => PatchOrchestratorFilterList,
  ?'max_results' => PatchBaselineMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribePatchGroupsResult {
  public PatchGroupPatchBaselineMappingList $mappings;
  public NextToken $next_token;

  public function __construct(shape(
  ?'mappings' => PatchGroupPatchBaselineMappingList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->mappings = $mappings ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribePatchPropertiesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OperatingSystem $operating_system;
  public PatchSet $patch_set;
  public PatchProperty $property;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'operating_system' => OperatingSystem,
  ?'patch_set' => PatchSet,
  ?'property' => PatchProperty,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->operating_system = $operating_system ?? "";
    $this->patch_set = $patch_set ?? "";
    $this->property = $property ?? "";
  }
}

class DescribePatchPropertiesResult {
  public NextToken $next_token;
  public PatchPropertiesList $properties;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'properties' => PatchPropertiesList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->properties = $properties ?? [];
  }
}

class DescribeSessionsRequest {
  public SessionFilterList $filters;
  public SessionMaxResults $max_results;
  public NextToken $next_token;
  public SessionState $state;

  public function __construct(shape(
  ?'filters' => SessionFilterList,
  ?'max_results' => SessionMaxResults,
  ?'next_token' => NextToken,
  ?'state' => SessionState,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->state = $state ?? "";
  }
}

class DescribeSessionsResponse {
  public NextToken $next_token;
  public SessionList $sessions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'sessions' => SessionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->sessions = $sessions ?? [];
  }
}

type DescriptionInDocument = string;

type DocumentARN = string;

class DocumentAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DocumentContent = string;

class DocumentDefaultVersionDescription {
  public DocumentVersion $default_version;
  public DocumentVersionName $default_version_name;
  public DocumentName $name;

  public function __construct(shape(
  ?'default_version' => DocumentVersion,
  ?'default_version_name' => DocumentVersionName,
  ?'name' => DocumentName,
  ) $s = shape()) {
    $this->default_version = $default_version ?? "";
    $this->default_version_name = $default_version_name ?? "";
    $this->name = $name ?? "";
  }
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

  public function __construct(shape(
  ?'attachments_information' => AttachmentInformationList,
  ?'created_date' => DateTime,
  ?'default_version' => DocumentVersion,
  ?'description' => DescriptionInDocument,
  ?'document_format' => DocumentFormat,
  ?'document_type' => DocumentType,
  ?'document_version' => DocumentVersion,
  ?'hash' => DocumentHash,
  ?'hash_type' => DocumentHashType,
  ?'latest_version' => DocumentVersion,
  ?'name' => DocumentARN,
  ?'owner' => DocumentOwner,
  ?'parameters' => DocumentParameterList,
  ?'platform_types' => PlatformTypeList,
  ?'requires' => DocumentRequiresList,
  ?'schema_version' => DocumentSchemaVersion,
  ?'sha_1' => DocumentSha1,
  ?'status' => DocumentStatus,
  ?'status_information' => DocumentStatusInformation,
  ?'tags' => TagList,
  ?'target_type' => TargetType,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->attachments_information = $attachments_information ?? [];
    $this->created_date = $created_date ?? 0;
    $this->default_version = $default_version ?? "";
    $this->description = $description ?? "";
    $this->document_format = $document_format ?? "";
    $this->document_type = $document_type ?? "";
    $this->document_version = $document_version ?? "";
    $this->hash = $hash ?? "";
    $this->hash_type = $hash_type ?? "";
    $this->latest_version = $latest_version ?? "";
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->parameters = $parameters ?? [];
    $this->platform_types = $platform_types ?? [];
    $this->requires = $requires ?? [];
    $this->schema_version = $schema_version ?? "";
    $this->sha_1 = $sha_1 ?? "";
    $this->status = $status ?? "";
    $this->status_information = $status_information ?? "";
    $this->tags = $tags ?? [];
    $this->target_type = $target_type ?? "";
    $this->version_name = $version_name ?? "";
  }
}

class DocumentFilter {
  public DocumentFilterKey $key;
  public DocumentFilterValue $value;

  public function __construct(shape(
  ?'key' => DocumentFilterKey,
  ?'value' => DocumentFilterValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type DocumentFilterKey = string;

type DocumentFilterList = vec<DocumentFilter>;

type DocumentFilterValue = string;

type DocumentFormat = string;

type DocumentHash = string;

type DocumentHashType = string;

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

  public function __construct(shape(
  ?'document_format' => DocumentFormat,
  ?'document_type' => DocumentType,
  ?'document_version' => DocumentVersion,
  ?'name' => DocumentARN,
  ?'owner' => DocumentOwner,
  ?'platform_types' => PlatformTypeList,
  ?'requires' => DocumentRequiresList,
  ?'schema_version' => DocumentSchemaVersion,
  ?'tags' => TagList,
  ?'target_type' => TargetType,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->document_format = $document_format ?? "";
    $this->document_type = $document_type ?? "";
    $this->document_version = $document_version ?? "";
    $this->name = $name ?? "";
    $this->owner = $owner ?? "";
    $this->platform_types = $platform_types ?? [];
    $this->requires = $requires ?? [];
    $this->schema_version = $schema_version ?? "";
    $this->tags = $tags ?? [];
    $this->target_type = $target_type ?? "";
    $this->version_name = $version_name ?? "";
  }
}

type DocumentIdentifierList = vec<DocumentIdentifier>;

class DocumentKeyValuesFilter {
  public DocumentKeyValuesFilterKey $key;
  public DocumentKeyValuesFilterValues $values;

  public function __construct(shape(
  ?'key' => DocumentKeyValuesFilterKey,
  ?'values' => DocumentKeyValuesFilterValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type DocumentKeyValuesFilterKey = string;

type DocumentKeyValuesFilterList = vec<DocumentKeyValuesFilter>;

type DocumentKeyValuesFilterValue = string;

type DocumentKeyValuesFilterValues = vec<DocumentKeyValuesFilterValue>;

class DocumentLimitExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DocumentName = string;

type DocumentOwner = string;

class DocumentParameter {
  public DocumentParameterDefaultValue $default_value;
  public DocumentParameterDescrption $description;
  public DocumentParameterName $name;
  public DocumentParameterType $type;

  public function __construct(shape(
  ?'default_value' => DocumentParameterDefaultValue,
  ?'description' => DocumentParameterDescrption,
  ?'name' => DocumentParameterName,
  ?'type' => DocumentParameterType,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->type = $type ?? "";
  }
}

type DocumentParameterDefaultValue = string;

type DocumentParameterDescrption = string;

type DocumentParameterList = vec<DocumentParameter>;

type DocumentParameterName = string;

type DocumentParameterType = string;

class DocumentPermissionLimit {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DocumentPermissionType = string;

class DocumentRequires {
  public DocumentARN $name;
  public DocumentVersion $version;

  public function __construct(shape(
  ?'name' => DocumentARN,
  ?'version' => DocumentVersion,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->version = $version ?? "";
  }
}

type DocumentRequiresList = vec<DocumentRequires>;

type DocumentSchemaVersion = string;

type DocumentSha1 = string;

type DocumentStatus = string;

type DocumentStatusInformation = string;

type DocumentType = string;

type DocumentVersion = string;

class DocumentVersionInfo {
  public DateTime $created_date;
  public DocumentFormat $document_format;
  public DocumentVersion $document_version;
  public boolean $is_default_version;
  public DocumentName $name;
  public DocumentStatus $status;
  public DocumentStatusInformation $status_information;
  public DocumentVersionName $version_name;

  public function __construct(shape(
  ?'created_date' => DateTime,
  ?'document_format' => DocumentFormat,
  ?'document_version' => DocumentVersion,
  ?'is_default_version' => boolean,
  ?'name' => DocumentName,
  ?'status' => DocumentStatus,
  ?'status_information' => DocumentStatusInformation,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->created_date = $created_date ?? 0;
    $this->document_format = $document_format ?? "";
    $this->document_version = $document_version ?? "";
    $this->is_default_version = $is_default_version ?? false;
    $this->name = $name ?? "";
    $this->status = $status ?? "";
    $this->status_information = $status_information ?? "";
    $this->version_name = $version_name ?? "";
  }
}

class DocumentVersionLimitExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DocumentVersionList = vec<DocumentVersionInfo>;

type DocumentVersionName = string;

type DocumentVersionNumber = string;

class DoesNotExistException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DryRun = bool;

class DuplicateDocumentContent {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DuplicateDocumentVersionName {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DuplicateInstanceId {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EffectiveInstanceAssociationMaxResults = int;

class EffectivePatch {
  public Patch $patch;
  public PatchStatus $patch_status;

  public function __construct(shape(
  ?'patch' => Patch,
  ?'patch_status' => PatchStatus,
  ) $s = shape()) {
    $this->patch = $patch ?? null;
    $this->patch_status = $patch_status ?? null;
  }
}

type EffectivePatchList = vec<EffectivePatch>;

type ErrorCount = int;

type ExecutionMode = string;

type ExecutionRoleName = string;

type ExpirationDate = int;

class FailedCreateAssociation {
  public CreateAssociationBatchRequestEntry $entry;
  public Fault $fault;
  public BatchErrorMessage $message;

  public function __construct(shape(
  ?'entry' => CreateAssociationBatchRequestEntry,
  ?'fault' => Fault,
  ?'message' => BatchErrorMessage,
  ) $s = shape()) {
    $this->entry = $entry ?? null;
    $this->fault = $fault ?? "";
    $this->message = $message ?? "";
  }
}

type FailedCreateAssociationList = vec<FailedCreateAssociation>;

class FailureDetails {
  public AutomationParameterMap $details;
  public string $failure_stage;
  public string $failure_type;

  public function __construct(shape(
  ?'details' => AutomationParameterMap,
  ?'failure_stage' => string,
  ?'failure_type' => string,
  ) $s = shape()) {
    $this->details = $details ?? [];
    $this->failure_stage = $failure_stage ?? "";
    $this->failure_type = $failure_type ?? "";
  }
}

type Fault = string;

class FeatureNotAvailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class GetAutomationExecutionRequest {
  public AutomationExecutionId $automation_execution_id;

  public function __construct(shape(
  ?'automation_execution_id' => AutomationExecutionId,
  ) $s = shape()) {
    $this->automation_execution_id = $automation_execution_id ?? "";
  }
}

class GetAutomationExecutionResult {
  public AutomationExecution $automation_execution;

  public function __construct(shape(
  ?'automation_execution' => AutomationExecution,
  ) $s = shape()) {
    $this->automation_execution = $automation_execution ?? null;
  }
}

class GetCalendarStateRequest {
  public ISO8601String $at_time;
  public CalendarNameOrARNList $calendar_names;

  public function __construct(shape(
  ?'at_time' => ISO8601String,
  ?'calendar_names' => CalendarNameOrARNList,
  ) $s = shape()) {
    $this->at_time = $at_time ?? "";
    $this->calendar_names = $calendar_names ?? [];
  }
}

class GetCalendarStateResponse {
  public ISO8601String $at_time;
  public ISO8601String $next_transition_time;
  public CalendarState $state;

  public function __construct(shape(
  ?'at_time' => ISO8601String,
  ?'next_transition_time' => ISO8601String,
  ?'state' => CalendarState,
  ) $s = shape()) {
    $this->at_time = $at_time ?? "";
    $this->next_transition_time = $next_transition_time ?? "";
    $this->state = $state ?? "";
  }
}

class GetCommandInvocationRequest {
  public CommandId $command_id;
  public InstanceId $instance_id;
  public CommandPluginName $plugin_name;

  public function __construct(shape(
  ?'command_id' => CommandId,
  ?'instance_id' => InstanceId,
  ?'plugin_name' => CommandPluginName,
  ) $s = shape()) {
    $this->command_id = $command_id ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->plugin_name = $plugin_name ?? "";
  }
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

  public function __construct(shape(
  ?'cloud_watch_output_config' => CloudWatchOutputConfig,
  ?'command_id' => CommandId,
  ?'comment' => Comment,
  ?'document_name' => DocumentName,
  ?'document_version' => DocumentVersion,
  ?'execution_elapsed_time' => StringDateTime,
  ?'execution_end_date_time' => StringDateTime,
  ?'execution_start_date_time' => StringDateTime,
  ?'instance_id' => InstanceId,
  ?'plugin_name' => CommandPluginName,
  ?'response_code' => ResponseCode,
  ?'standard_error_content' => StandardErrorContent,
  ?'standard_error_url' => Url,
  ?'standard_output_content' => StandardOutputContent,
  ?'standard_output_url' => Url,
  ?'status' => CommandInvocationStatus,
  ?'status_details' => StatusDetails,
  ) $s = shape()) {
    $this->cloud_watch_output_config = $cloud_watch_output_config ?? null;
    $this->command_id = $command_id ?? "";
    $this->comment = $comment ?? "";
    $this->document_name = $document_name ?? "";
    $this->document_version = $document_version ?? "";
    $this->execution_elapsed_time = $execution_elapsed_time ?? "";
    $this->execution_end_date_time = $execution_end_date_time ?? "";
    $this->execution_start_date_time = $execution_start_date_time ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->plugin_name = $plugin_name ?? "";
    $this->response_code = $response_code ?? 0;
    $this->standard_error_content = $standard_error_content ?? "";
    $this->standard_error_url = $standard_error_url ?? "";
    $this->standard_output_content = $standard_output_content ?? "";
    $this->standard_output_url = $standard_output_url ?? "";
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
  }
}

class GetConnectionStatusRequest {
  public SessionTarget $target;

  public function __construct(shape(
  ?'target' => SessionTarget,
  ) $s = shape()) {
    $this->target = $target ?? "";
  }
}

class GetConnectionStatusResponse {
  public ConnectionStatus $status;
  public SessionTarget $target;

  public function __construct(shape(
  ?'status' => ConnectionStatus,
  ?'target' => SessionTarget,
  ) $s = shape()) {
    $this->status = $status ?? "";
    $this->target = $target ?? "";
  }
}

class GetDefaultPatchBaselineRequest {
  public OperatingSystem $operating_system;

  public function __construct(shape(
  ?'operating_system' => OperatingSystem,
  ) $s = shape()) {
    $this->operating_system = $operating_system ?? "";
  }
}

class GetDefaultPatchBaselineResult {
  public BaselineId $baseline_id;
  public OperatingSystem $operating_system;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'operating_system' => OperatingSystem,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->operating_system = $operating_system ?? "";
  }
}

class GetDeployablePatchSnapshotForInstanceRequest {
  public InstanceId $instance_id;
  public SnapshotId $snapshot_id;

  public function __construct(shape(
  ?'instance_id' => InstanceId,
  ?'snapshot_id' => SnapshotId,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->snapshot_id = $snapshot_id ?? "";
  }
}

class GetDeployablePatchSnapshotForInstanceResult {
  public InstanceId $instance_id;
  public Product $product;
  public SnapshotDownloadUrl $snapshot_download_url;
  public SnapshotId $snapshot_id;

  public function __construct(shape(
  ?'instance_id' => InstanceId,
  ?'product' => Product,
  ?'snapshot_download_url' => SnapshotDownloadUrl,
  ?'snapshot_id' => SnapshotId,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->product = $product ?? "";
    $this->snapshot_download_url = $snapshot_download_url ?? "";
    $this->snapshot_id = $snapshot_id ?? "";
  }
}

class GetDocumentRequest {
  public DocumentFormat $document_format;
  public DocumentVersion $document_version;
  public DocumentARN $name;
  public DocumentVersionName $version_name;

  public function __construct(shape(
  ?'document_format' => DocumentFormat,
  ?'document_version' => DocumentVersion,
  ?'name' => DocumentARN,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->document_format = $document_format ?? "";
    $this->document_version = $document_version ?? "";
    $this->name = $name ?? "";
    $this->version_name = $version_name ?? "";
  }
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

  public function __construct(shape(
  ?'attachments_content' => AttachmentContentList,
  ?'content' => DocumentContent,
  ?'document_format' => DocumentFormat,
  ?'document_type' => DocumentType,
  ?'document_version' => DocumentVersion,
  ?'name' => DocumentARN,
  ?'requires' => DocumentRequiresList,
  ?'status' => DocumentStatus,
  ?'status_information' => DocumentStatusInformation,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->attachments_content = $attachments_content ?? [];
    $this->content = $content ?? "";
    $this->document_format = $document_format ?? "";
    $this->document_type = $document_type ?? "";
    $this->document_version = $document_version ?? "";
    $this->name = $name ?? "";
    $this->requires = $requires ?? [];
    $this->status = $status ?? "";
    $this->status_information = $status_information ?? "";
    $this->version_name = $version_name ?? "";
  }
}

class GetInventoryRequest {
  public InventoryAggregatorList $aggregators;
  public InventoryFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResultAttributeList $result_attributes;

  public function __construct(shape(
  ?'aggregators' => InventoryAggregatorList,
  ?'filters' => InventoryFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'result_attributes' => ResultAttributeList,
  ) $s = shape()) {
    $this->aggregators = $aggregators ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->result_attributes = $result_attributes ?? [];
  }
}

class GetInventoryResult {
  public InventoryResultEntityList $entities;
  public NextToken $next_token;

  public function __construct(shape(
  ?'entities' => InventoryResultEntityList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->entities = $entities ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type GetInventorySchemaMaxResults = int;

class GetInventorySchemaRequest {
  public AggregatorSchemaOnly $aggregator;
  public GetInventorySchemaMaxResults $max_results;
  public NextToken $next_token;
  public IsSubTypeSchema $sub_type;
  public InventoryItemTypeNameFilter $type_name;

  public function __construct(shape(
  ?'aggregator' => AggregatorSchemaOnly,
  ?'max_results' => GetInventorySchemaMaxResults,
  ?'next_token' => NextToken,
  ?'sub_type' => IsSubTypeSchema,
  ?'type_name' => InventoryItemTypeNameFilter,
  ) $s = shape()) {
    $this->aggregator = $aggregator ?? false;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sub_type = $sub_type ?? false;
    $this->type_name = $type_name ?? "";
  }
}

class GetInventorySchemaResult {
  public NextToken $next_token;
  public InventoryItemSchemaResultList $schemas;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'schemas' => InventoryItemSchemaResultList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->schemas = $schemas ?? [];
  }
}

class GetMaintenanceWindowExecutionRequest {
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

class GetMaintenanceWindowExecutionResult {
  public DateTime $end_time;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowExecutionTaskIdList $task_ids;
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'end_time' => DateTime,
  ?'start_time' => DateTime,
  ?'status' => MaintenanceWindowExecutionStatus,
  ?'status_details' => MaintenanceWindowExecutionStatusDetails,
  ?'task_ids' => MaintenanceWindowExecutionTaskIdList,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->task_ids = $task_ids ?? [];
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

class GetMaintenanceWindowExecutionTaskInvocationRequest {
  public MaintenanceWindowExecutionTaskInvocationId $invocation_id;
  public MaintenanceWindowExecutionTaskId $task_id;
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'invocation_id' => MaintenanceWindowExecutionTaskInvocationId,
  ?'task_id' => MaintenanceWindowExecutionTaskId,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->invocation_id = $invocation_id ?? "";
    $this->task_id = $task_id ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
  }
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

  public function __construct(shape(
  ?'end_time' => DateTime,
  ?'execution_id' => MaintenanceWindowExecutionTaskExecutionId,
  ?'invocation_id' => MaintenanceWindowExecutionTaskInvocationId,
  ?'owner_information' => OwnerInformation,
  ?'parameters' => MaintenanceWindowExecutionTaskInvocationParameters,
  ?'start_time' => DateTime,
  ?'status' => MaintenanceWindowExecutionStatus,
  ?'status_details' => MaintenanceWindowExecutionStatusDetails,
  ?'task_execution_id' => MaintenanceWindowExecutionTaskId,
  ?'task_type' => MaintenanceWindowTaskType,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ?'window_target_id' => MaintenanceWindowTaskTargetId,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->execution_id = $execution_id ?? "";
    $this->invocation_id = $invocation_id ?? "";
    $this->owner_information = $owner_information ?? "";
    $this->parameters = $parameters ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->task_execution_id = $task_execution_id ?? "";
    $this->task_type = $task_type ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
    $this->window_target_id = $window_target_id ?? "";
  }
}

class GetMaintenanceWindowExecutionTaskRequest {
  public MaintenanceWindowExecutionTaskId $task_id;
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'task_id' => MaintenanceWindowExecutionTaskId,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->task_id = $task_id ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
  }
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

  public function __construct(shape(
  ?'end_time' => DateTime,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'priority' => MaintenanceWindowTaskPriority,
  ?'service_role' => ServiceRole,
  ?'start_time' => DateTime,
  ?'status' => MaintenanceWindowExecutionStatus,
  ?'status_details' => MaintenanceWindowExecutionStatusDetails,
  ?'task_arn' => MaintenanceWindowTaskArn,
  ?'task_execution_id' => MaintenanceWindowExecutionTaskId,
  ?'task_parameters' => MaintenanceWindowTaskParametersList,
  ?'type' => MaintenanceWindowTaskType,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->priority = $priority ?? 0;
    $this->service_role = $service_role ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->task_arn = $task_arn ?? "";
    $this->task_execution_id = $task_execution_id ?? "";
    $this->task_parameters = $task_parameters ?? [];
    $this->type = $type ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

class GetMaintenanceWindowRequest {
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
  }
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

  public function __construct(shape(
  ?'allow_unassociated_targets' => MaintenanceWindowAllowUnassociatedTargets,
  ?'created_date' => DateTime,
  ?'cutoff' => MaintenanceWindowCutoff,
  ?'description' => MaintenanceWindowDescription,
  ?'duration' => MaintenanceWindowDurationHours,
  ?'enabled' => MaintenanceWindowEnabled,
  ?'end_date' => MaintenanceWindowStringDateTime,
  ?'modified_date' => DateTime,
  ?'name' => MaintenanceWindowName,
  ?'next_execution_time' => MaintenanceWindowStringDateTime,
  ?'schedule' => MaintenanceWindowSchedule,
  ?'schedule_timezone' => MaintenanceWindowTimezone,
  ?'start_date' => MaintenanceWindowStringDateTime,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->allow_unassociated_targets = $allow_unassociated_targets ?? false;
    $this->created_date = $created_date ?? 0;
    $this->cutoff = $cutoff ?? 0;
    $this->description = $description ?? "";
    $this->duration = $duration ?? 0;
    $this->enabled = $enabled ?? false;
    $this->end_date = $end_date ?? "";
    $this->modified_date = $modified_date ?? 0;
    $this->name = $name ?? "";
    $this->next_execution_time = $next_execution_time ?? "";
    $this->schedule = $schedule ?? "";
    $this->schedule_timezone = $schedule_timezone ?? "";
    $this->start_date = $start_date ?? "";
    $this->window_id = $window_id ?? "";
  }
}

class GetMaintenanceWindowTaskRequest {
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTaskId $window_task_id;

  public function __construct(shape(
  ?'window_id' => MaintenanceWindowId,
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->window_id = $window_id ?? "";
    $this->window_task_id = $window_task_id ?? "";
  }
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

  public function __construct(shape(
  ?'description' => MaintenanceWindowDescription,
  ?'logging_info' => LoggingInfo,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => MaintenanceWindowName,
  ?'priority' => MaintenanceWindowTaskPriority,
  ?'service_role_arn' => ServiceRole,
  ?'targets' => Targets,
  ?'task_arn' => MaintenanceWindowTaskArn,
  ?'task_invocation_parameters' => MaintenanceWindowTaskInvocationParameters,
  ?'task_parameters' => MaintenanceWindowTaskParameters,
  ?'task_type' => MaintenanceWindowTaskType,
  ?'window_id' => MaintenanceWindowId,
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->logging_info = $logging_info ?? null;
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->targets = $targets ?? [];
    $this->task_arn = $task_arn ?? "";
    $this->task_invocation_parameters = $task_invocation_parameters ?? null;
    $this->task_parameters = $task_parameters ?? [];
    $this->task_type = $task_type ?? "";
    $this->window_id = $window_id ?? "";
    $this->window_task_id = $window_task_id ?? "";
  }
}

class GetOpsItemRequest {
  public OpsItemId $ops_item_id;

  public function __construct(shape(
  ?'ops_item_id' => OpsItemId,
  ) $s = shape()) {
    $this->ops_item_id = $ops_item_id ?? "";
  }
}

class GetOpsItemResponse {
  public OpsItem $ops_item;

  public function __construct(shape(
  ?'ops_item' => OpsItem,
  ) $s = shape()) {
    $this->ops_item = $ops_item ?? null;
  }
}

class GetOpsSummaryRequest {
  public OpsAggregatorList $aggregators;
  public OpsFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OpsResultAttributeList $result_attributes;
  public ResourceDataSyncName $sync_name;

  public function __construct(shape(
  ?'aggregators' => OpsAggregatorList,
  ?'filters' => OpsFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'result_attributes' => OpsResultAttributeList,
  ?'sync_name' => ResourceDataSyncName,
  ) $s = shape()) {
    $this->aggregators = $aggregators ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->result_attributes = $result_attributes ?? [];
    $this->sync_name = $sync_name ?? "";
  }
}

class GetOpsSummaryResult {
  public OpsEntityList $entities;
  public NextToken $next_token;

  public function __construct(shape(
  ?'entities' => OpsEntityList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->entities = $entities ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class GetParameterHistoryRequest {
  public MaxResults $max_results;
  public PSParameterName $name;
  public NextToken $next_token;
  public boolean $with_decryption;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => PSParameterName,
  ?'next_token' => NextToken,
  ?'with_decryption' => boolean,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
    $this->with_decryption = $with_decryption ?? false;
  }
}

class GetParameterHistoryResult {
  public NextToken $next_token;
  public ParameterHistoryList $parameters;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'parameters' => ParameterHistoryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->parameters = $parameters ?? [];
  }
}

class GetParameterRequest {
  public PSParameterName $name;
  public boolean $with_decryption;

  public function __construct(shape(
  ?'name' => PSParameterName,
  ?'with_decryption' => boolean,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->with_decryption = $with_decryption ?? false;
  }
}

class GetParameterResult {
  public Parameter $parameter;

  public function __construct(shape(
  ?'parameter' => Parameter,
  ) $s = shape()) {
    $this->parameter = $parameter ?? null;
  }
}

type GetParametersByPathMaxResults = int;

class GetParametersByPathRequest {
  public GetParametersByPathMaxResults $max_results;
  public NextToken $next_token;
  public ParameterStringFilterList $parameter_filters;
  public PSParameterName $path;
  public boolean $recursive;
  public boolean $with_decryption;

  public function __construct(shape(
  ?'max_results' => GetParametersByPathMaxResults,
  ?'next_token' => NextToken,
  ?'parameter_filters' => ParameterStringFilterList,
  ?'path' => PSParameterName,
  ?'recursive' => boolean,
  ?'with_decryption' => boolean,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->parameter_filters = $parameter_filters ?? [];
    $this->path = $path ?? "";
    $this->recursive = $recursive ?? false;
    $this->with_decryption = $with_decryption ?? false;
  }
}

class GetParametersByPathResult {
  public NextToken $next_token;
  public ParameterList $parameters;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'parameters' => ParameterList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->parameters = $parameters ?? [];
  }
}

class GetParametersRequest {
  public ParameterNameList $names;
  public boolean $with_decryption;

  public function __construct(shape(
  ?'names' => ParameterNameList,
  ?'with_decryption' => boolean,
  ) $s = shape()) {
    $this->names = $names ?? [];
    $this->with_decryption = $with_decryption ?? false;
  }
}

class GetParametersResult {
  public ParameterNameList $invalid_parameters;
  public ParameterList $parameters;

  public function __construct(shape(
  ?'invalid_parameters' => ParameterNameList,
  ?'parameters' => ParameterList,
  ) $s = shape()) {
    $this->invalid_parameters = $invalid_parameters ?? [];
    $this->parameters = $parameters ?? [];
  }
}

class GetPatchBaselineForPatchGroupRequest {
  public OperatingSystem $operating_system;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'operating_system' => OperatingSystem,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->operating_system = $operating_system ?? "";
    $this->patch_group = $patch_group ?? "";
  }
}

class GetPatchBaselineForPatchGroupResult {
  public BaselineId $baseline_id;
  public OperatingSystem $operating_system;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'operating_system' => OperatingSystem,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->operating_system = $operating_system ?? "";
    $this->patch_group = $patch_group ?? "";
  }
}

class GetPatchBaselineRequest {
  public BaselineId $baseline_id;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
  }
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

  public function __construct(shape(
  ?'approval_rules' => PatchRuleGroup,
  ?'approved_patches' => PatchIdList,
  ?'approved_patches_compliance_level' => PatchComplianceLevel,
  ?'approved_patches_enable_non_security' => boolean,
  ?'baseline_id' => BaselineId,
  ?'created_date' => DateTime,
  ?'description' => BaselineDescription,
  ?'global_filters' => PatchFilterGroup,
  ?'modified_date' => DateTime,
  ?'name' => BaselineName,
  ?'operating_system' => OperatingSystem,
  ?'patch_groups' => PatchGroupList,
  ?'rejected_patches' => PatchIdList,
  ?'rejected_patches_action' => PatchAction,
  ?'sources' => PatchSourceList,
  ) $s = shape()) {
    $this->approval_rules = $approval_rules ?? null;
    $this->approved_patches = $approved_patches ?? [];
    $this->approved_patches_compliance_level = $approved_patches_compliance_level ?? "";
    $this->approved_patches_enable_non_security = $approved_patches_enable_non_security ?? false;
    $this->baseline_id = $baseline_id ?? "";
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->global_filters = $global_filters ?? null;
    $this->modified_date = $modified_date ?? 0;
    $this->name = $name ?? "";
    $this->operating_system = $operating_system ?? "";
    $this->patch_groups = $patch_groups ?? [];
    $this->rejected_patches = $rejected_patches ?? [];
    $this->rejected_patches_action = $rejected_patches_action ?? "";
    $this->sources = $sources ?? [];
  }
}

class GetServiceSettingRequest {
  public ServiceSettingId $setting_id;

  public function __construct(shape(
  ?'setting_id' => ServiceSettingId,
  ) $s = shape()) {
    $this->setting_id = $setting_id ?? "";
  }
}

class GetServiceSettingResult {
  public ServiceSetting $service_setting;

  public function __construct(shape(
  ?'service_setting' => ServiceSetting,
  ) $s = shape()) {
    $this->service_setting = $service_setting ?? null;
  }
}

class HierarchyLevelLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class HierarchyTypeMismatchException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type IPAddress = string;

type ISO8601String = string;

type IamRole = string;

type IdempotencyToken = string;

class IdempotentParameterMismatch {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class IncompatiblePolicyException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type InstallOverrideList = string;

class InstanceAggregatedAssociationOverview {
  public StatusName $detailed_status;
  public InstanceAssociationStatusAggregatedCount $instance_association_status_aggregated_count;

  public function __construct(shape(
  ?'detailed_status' => StatusName,
  ?'instance_association_status_aggregated_count' => InstanceAssociationStatusAggregatedCount,
  ) $s = shape()) {
    $this->detailed_status = $detailed_status ?? "";
    $this->instance_association_status_aggregated_count = $instance_association_status_aggregated_count ?? [];
  }
}

class InstanceAssociation {
  public AssociationId $association_id;
  public AssociationVersion $association_version;
  public DocumentContent $content;
  public InstanceId $instance_id;

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_version' => AssociationVersion,
  ?'content' => DocumentContent,
  ?'instance_id' => InstanceId,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_version = $association_version ?? "";
    $this->content = $content ?? "";
    $this->instance_id = $instance_id ?? "";
  }
}

type InstanceAssociationExecutionSummary = string;

type InstanceAssociationList = vec<InstanceAssociation>;

class InstanceAssociationOutputLocation {
  public S3OutputLocation $s_3_location;

  public function __construct(shape(
  ?'s_3_location' => S3OutputLocation,
  ) $s = shape()) {
    $this->s_3_location = $s_3_location ?? null;
  }
}

class InstanceAssociationOutputUrl {
  public S3OutputUrl $s_3_output_url;

  public function __construct(shape(
  ?'s_3_output_url' => S3OutputUrl,
  ) $s = shape()) {
    $this->s_3_output_url = $s_3_output_url ?? null;
  }
}

type InstanceAssociationStatusAggregatedCount = dict<StatusName, InstanceCount>;

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

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_name' => AssociationName,
  ?'association_version' => AssociationVersion,
  ?'detailed_status' => StatusName,
  ?'document_version' => DocumentVersion,
  ?'error_code' => AgentErrorCode,
  ?'execution_date' => DateTime,
  ?'execution_summary' => InstanceAssociationExecutionSummary,
  ?'instance_id' => InstanceId,
  ?'name' => DocumentARN,
  ?'output_url' => InstanceAssociationOutputUrl,
  ?'status' => StatusName,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_name = $association_name ?? "";
    $this->association_version = $association_version ?? "";
    $this->detailed_status = $detailed_status ?? "";
    $this->document_version = $document_version ?? "";
    $this->error_code = $error_code ?? "";
    $this->execution_date = $execution_date ?? 0;
    $this->execution_summary = $execution_summary ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->name = $name ?? "";
    $this->output_url = $output_url ?? null;
    $this->status = $status ?? "";
  }
}

type InstanceAssociationStatusInfos = vec<InstanceAssociationStatusInfo>;

type InstanceCount = int;

type InstanceId = string;

type InstanceIdList = vec<InstanceId>;

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

  public function __construct(shape(
  ?'activation_id' => ActivationId,
  ?'agent_version' => Version,
  ?'association_overview' => InstanceAggregatedAssociationOverview,
  ?'association_status' => StatusName,
  ?'computer_name' => ComputerName,
  ?'ip_address' => IPAddress,
  ?'iam_role' => IamRole,
  ?'instance_id' => InstanceId,
  ?'is_latest_version' => boolean,
  ?'last_association_execution_date' => DateTime,
  ?'last_ping_date_time' => DateTime,
  ?'last_successful_association_execution_date' => DateTime,
  ?'name' => string,
  ?'ping_status' => PingStatus,
  ?'platform_name' => string,
  ?'platform_type' => PlatformType,
  ?'platform_version' => string,
  ?'registration_date' => DateTime,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->activation_id = $activation_id ?? "";
    $this->agent_version = $agent_version ?? "";
    $this->association_overview = $association_overview ?? null;
    $this->association_status = $association_status ?? "";
    $this->computer_name = $computer_name ?? "";
    $this->ip_address = $ip_address ?? "";
    $this->iam_role = $iam_role ?? "";
    $this->instance_id = $instance_id ?? "";
    $this->is_latest_version = $is_latest_version ?? false;
    $this->last_association_execution_date = $last_association_execution_date ?? 0;
    $this->last_ping_date_time = $last_ping_date_time ?? 0;
    $this->last_successful_association_execution_date = $last_successful_association_execution_date ?? 0;
    $this->name = $name ?? "";
    $this->ping_status = $ping_status ?? "";
    $this->platform_name = $platform_name ?? "";
    $this->platform_type = $platform_type ?? "";
    $this->platform_version = $platform_version ?? "";
    $this->registration_date = $registration_date ?? 0;
    $this->resource_type = $resource_type ?? "";
  }
}

class InstanceInformationFilter {
  public InstanceInformationFilterKey $key;
  public InstanceInformationFilterValueSet $value_set;

  public function __construct(shape(
  ?'key' => InstanceInformationFilterKey,
  ?'value_set' => InstanceInformationFilterValueSet,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value_set = $value_set ?? [];
  }
}

type InstanceInformationFilterKey = string;

type InstanceInformationFilterList = vec<InstanceInformationFilter>;

type InstanceInformationFilterValue = string;

type InstanceInformationFilterValueSet = vec<InstanceInformationFilterValue>;

type InstanceInformationList = vec<InstanceInformation>;

class InstanceInformationStringFilter {
  public InstanceInformationStringFilterKey $key;
  public InstanceInformationFilterValueSet $values;

  public function __construct(shape(
  ?'key' => InstanceInformationStringFilterKey,
  ?'values' => InstanceInformationFilterValueSet,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type InstanceInformationStringFilterKey = string;

type InstanceInformationStringFilterList = vec<InstanceInformationStringFilter>;

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

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'failed_count' => PatchFailedCount,
  ?'install_override_list' => InstallOverrideList,
  ?'installed_count' => PatchInstalledCount,
  ?'installed_other_count' => PatchInstalledOtherCount,
  ?'installed_pending_reboot_count' => PatchInstalledPendingRebootCount,
  ?'installed_rejected_count' => PatchInstalledRejectedCount,
  ?'instance_id' => InstanceId,
  ?'last_no_reboot_install_operation_time' => DateTime,
  ?'missing_count' => PatchMissingCount,
  ?'not_applicable_count' => PatchNotApplicableCount,
  ?'operation' => PatchOperationType,
  ?'operation_end_time' => DateTime,
  ?'operation_start_time' => DateTime,
  ?'owner_information' => OwnerInformation,
  ?'patch_group' => PatchGroup,
  ?'reboot_option' => RebootOption,
  ?'snapshot_id' => SnapshotId,
  ?'unreported_not_applicable_count' => PatchUnreportedNotApplicableCount,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->failed_count = $failed_count ?? 0;
    $this->install_override_list = $install_override_list ?? "";
    $this->installed_count = $installed_count ?? 0;
    $this->installed_other_count = $installed_other_count ?? 0;
    $this->installed_pending_reboot_count = $installed_pending_reboot_count ?? 0;
    $this->installed_rejected_count = $installed_rejected_count ?? 0;
    $this->instance_id = $instance_id ?? "";
    $this->last_no_reboot_install_operation_time = $last_no_reboot_install_operation_time ?? 0;
    $this->missing_count = $missing_count ?? 0;
    $this->not_applicable_count = $not_applicable_count ?? 0;
    $this->operation = $operation ?? "";
    $this->operation_end_time = $operation_end_time ?? 0;
    $this->operation_start_time = $operation_start_time ?? 0;
    $this->owner_information = $owner_information ?? "";
    $this->patch_group = $patch_group ?? "";
    $this->reboot_option = $reboot_option ?? "";
    $this->snapshot_id = $snapshot_id ?? "";
    $this->unreported_not_applicable_count = $unreported_not_applicable_count ?? 0;
  }
}

class InstancePatchStateFilter {
  public InstancePatchStateFilterKey $key;
  public InstancePatchStateOperatorType $type;
  public InstancePatchStateFilterValues $values;

  public function __construct(shape(
  ?'key' => InstancePatchStateFilterKey,
  ?'type' => InstancePatchStateOperatorType,
  ?'values' => InstancePatchStateFilterValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? "";
    $this->values = $values ?? [];
  }
}

type InstancePatchStateFilterKey = string;

type InstancePatchStateFilterList = vec<InstancePatchStateFilter>;

type InstancePatchStateFilterValue = string;

type InstancePatchStateFilterValues = vec<InstancePatchStateFilterValue>;

type InstancePatchStateList = vec<InstancePatchState>;

type InstancePatchStateOperatorType = string;

type InstancePatchStatesList = vec<InstancePatchState>;

type InstanceTagName = string;

type InstancesCount = int;

type Integer = int;

class InternalServerError {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidActivation {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidActivationId {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAggregatorException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAllowedPatternException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAssociation {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAssociationVersion {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAutomationExecutionParametersException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAutomationSignalException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidAutomationStatusUpdateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidCommandId {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidDeleteInventoryParametersException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDeletionIdException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDocument {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDocumentContent {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDocumentOperation {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDocumentSchemaVersion {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDocumentType {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDocumentVersion {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidFilter {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidFilterKey {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidFilterOption {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidFilterValue {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInstanceId {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInstanceInformationFilterValue {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInventoryGroupException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInventoryItemContextException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInventoryRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidItemContentException {
  public string $message;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'message' => string,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class InvalidKeyId {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNextToken {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNotificationConfig {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidOptionException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidOutputFolder {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidOutputLocation {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidParameters {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPermissionType {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPluginName {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidPolicyAttributeException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPolicyTypeException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidResourceId {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidResourceType {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidResultAttributeException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidRole {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidSchedule {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidTarget {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidTypeNameException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidUpdate {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InventoryAggregator {
  public InventoryAggregatorList $aggregators;
  public InventoryAggregatorExpression $expression;
  public InventoryGroupList $groups;

  public function __construct(shape(
  ?'aggregators' => InventoryAggregatorList,
  ?'expression' => InventoryAggregatorExpression,
  ?'groups' => InventoryGroupList,
  ) $s = shape()) {
    $this->aggregators = $aggregators ?? [];
    $this->expression = $expression ?? "";
    $this->groups = $groups ?? [];
  }
}

type InventoryAggregatorExpression = string;

type InventoryAggregatorList = vec<InventoryAggregator>;

type InventoryAttributeDataType = string;

type InventoryDeletionId = string;

type InventoryDeletionLastStatusMessage = string;

type InventoryDeletionLastStatusUpdateTime = int;

type InventoryDeletionStartTime = int;

type InventoryDeletionStatus = string;

class InventoryDeletionStatusItem {
  public InventoryDeletionId $deletion_id;
  public InventoryDeletionStartTime $deletion_start_time;
  public InventoryDeletionSummary $deletion_summary;
  public InventoryDeletionStatus $last_status;
  public InventoryDeletionLastStatusMessage $last_status_message;
  public InventoryDeletionLastStatusUpdateTime $last_status_update_time;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'deletion_id' => InventoryDeletionId,
  ?'deletion_start_time' => InventoryDeletionStartTime,
  ?'deletion_summary' => InventoryDeletionSummary,
  ?'last_status' => InventoryDeletionStatus,
  ?'last_status_message' => InventoryDeletionLastStatusMessage,
  ?'last_status_update_time' => InventoryDeletionLastStatusUpdateTime,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->deletion_id = $deletion_id ?? "";
    $this->deletion_start_time = $deletion_start_time ?? 0;
    $this->deletion_summary = $deletion_summary ?? null;
    $this->last_status = $last_status ?? "";
    $this->last_status_message = $last_status_message ?? "";
    $this->last_status_update_time = $last_status_update_time ?? 0;
    $this->type_name = $type_name ?? "";
  }
}

class InventoryDeletionSummary {
  public RemainingCount $remaining_count;
  public InventoryDeletionSummaryItems $summary_items;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'remaining_count' => RemainingCount,
  ?'summary_items' => InventoryDeletionSummaryItems,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->remaining_count = $remaining_count ?? 0;
    $this->summary_items = $summary_items ?? [];
    $this->total_count = $total_count ?? 0;
  }
}

class InventoryDeletionSummaryItem {
  public ResourceCount $count;
  public RemainingCount $remaining_count;
  public InventoryItemSchemaVersion $version;

  public function __construct(shape(
  ?'count' => ResourceCount,
  ?'remaining_count' => RemainingCount,
  ?'version' => InventoryItemSchemaVersion,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->remaining_count = $remaining_count ?? 0;
    $this->version = $version ?? "";
  }
}

type InventoryDeletionSummaryItems = vec<InventoryDeletionSummaryItem>;

type InventoryDeletionsList = vec<InventoryDeletionStatusItem>;

class InventoryFilter {
  public InventoryFilterKey $key;
  public InventoryQueryOperatorType $type;
  public InventoryFilterValueList $values;

  public function __construct(shape(
  ?'key' => InventoryFilterKey,
  ?'type' => InventoryQueryOperatorType,
  ?'values' => InventoryFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? "";
    $this->values = $values ?? [];
  }
}

type InventoryFilterKey = string;

type InventoryFilterList = vec<InventoryFilter>;

type InventoryFilterValue = string;

type InventoryFilterValueList = vec<InventoryFilterValue>;

class InventoryGroup {
  public InventoryFilterList $filters;
  public InventoryGroupName $name;

  public function __construct(shape(
  ?'filters' => InventoryFilterList,
  ?'name' => InventoryGroupName,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->name = $name ?? "";
  }
}

type InventoryGroupList = vec<InventoryGroup>;

type InventoryGroupName = string;

class InventoryItem {
  public InventoryItemCaptureTime $capture_time;
  public InventoryItemEntryList $content;
  public InventoryItemContentHash $content_hash;
  public InventoryItemContentContext $context;
  public InventoryItemSchemaVersion $schema_version;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'capture_time' => InventoryItemCaptureTime,
  ?'content' => InventoryItemEntryList,
  ?'content_hash' => InventoryItemContentHash,
  ?'context' => InventoryItemContentContext,
  ?'schema_version' => InventoryItemSchemaVersion,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->capture_time = $capture_time ?? "";
    $this->content = $content ?? [];
    $this->content_hash = $content_hash ?? "";
    $this->context = $context ?? [];
    $this->schema_version = $schema_version ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class InventoryItemAttribute {
  public InventoryAttributeDataType $data_type;
  public InventoryItemAttributeName $name;

  public function __construct(shape(
  ?'data_type' => InventoryAttributeDataType,
  ?'name' => InventoryItemAttributeName,
  ) $s = shape()) {
    $this->data_type = $data_type ?? "";
    $this->name = $name ?? "";
  }
}

type InventoryItemAttributeList = vec<InventoryItemAttribute>;

type InventoryItemAttributeName = string;

type InventoryItemCaptureTime = string;

type InventoryItemContentContext = dict<AttributeName, AttributeValue>;

type InventoryItemContentHash = string;

type InventoryItemEntry = dict<AttributeName, AttributeValue>;

type InventoryItemEntryList = vec<InventoryItemEntry>;

type InventoryItemList = vec<InventoryItem>;

class InventoryItemSchema {
  public InventoryItemAttributeList $attributes;
  public InventoryTypeDisplayName $display_name;
  public InventoryItemTypeName $type_name;
  public InventoryItemSchemaVersion $version;

  public function __construct(shape(
  ?'attributes' => InventoryItemAttributeList,
  ?'display_name' => InventoryTypeDisplayName,
  ?'type_name' => InventoryItemTypeName,
  ?'version' => InventoryItemSchemaVersion,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->display_name = $display_name ?? "";
    $this->type_name = $type_name ?? "";
    $this->version = $version ?? "";
  }
}

type InventoryItemSchemaResultList = vec<InventoryItemSchema>;

type InventoryItemSchemaVersion = string;

type InventoryItemTypeName = string;

type InventoryItemTypeNameFilter = string;

type InventoryQueryOperatorType = string;

class InventoryResultEntity {
  public InventoryResultItemMap $data;
  public InventoryResultEntityId $id;

  public function __construct(shape(
  ?'data' => InventoryResultItemMap,
  ?'id' => InventoryResultEntityId,
  ) $s = shape()) {
    $this->data = $data ?? [];
    $this->id = $id ?? "";
  }
}

type InventoryResultEntityId = string;

type InventoryResultEntityList = vec<InventoryResultEntity>;

class InventoryResultItem {
  public InventoryItemCaptureTime $capture_time;
  public InventoryItemEntryList $content;
  public InventoryItemContentHash $content_hash;
  public InventoryItemSchemaVersion $schema_version;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'capture_time' => InventoryItemCaptureTime,
  ?'content' => InventoryItemEntryList,
  ?'content_hash' => InventoryItemContentHash,
  ?'schema_version' => InventoryItemSchemaVersion,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->capture_time = $capture_time ?? "";
    $this->content = $content ?? [];
    $this->content_hash = $content_hash ?? "";
    $this->schema_version = $schema_version ?? "";
    $this->type_name = $type_name ?? "";
  }
}

type InventoryResultItemKey = string;

type InventoryResultItemMap = dict<InventoryResultItemKey, InventoryResultItem>;

type InventorySchemaDeleteOption = string;

type InventoryTypeDisplayName = string;

class InvocationDoesNotExist {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InvocationTraceOutput = string;

type IsSubTypeSchema = bool;

class ItemContentMismatchException {
  public string $message;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'message' => string,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class ItemSizeLimitExceededException {
  public string $message;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'message' => string,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->type_name = $type_name ?? "";
  }
}

type KeyList = vec<TagKey>;

class LabelParameterVersionRequest {
  public ParameterLabelList $labels;
  public PSParameterName $name;
  public PSParameterVersion $parameter_version;

  public function __construct(shape(
  ?'labels' => ParameterLabelList,
  ?'name' => PSParameterName,
  ?'parameter_version' => PSParameterVersion,
  ) $s = shape()) {
    $this->labels = $labels ?? [];
    $this->name = $name ?? "";
    $this->parameter_version = $parameter_version ?? 0;
  }
}

class LabelParameterVersionResult {
  public ParameterLabelList $invalid_labels;
  public PSParameterVersion $parameter_version;

  public function __construct(shape(
  ?'invalid_labels' => ParameterLabelList,
  ?'parameter_version' => PSParameterVersion,
  ) $s = shape()) {
    $this->invalid_labels = $invalid_labels ?? [];
    $this->parameter_version = $parameter_version ?? 0;
  }
}

type LastResourceDataSyncMessage = string;

type LastResourceDataSyncStatus = string;

type LastResourceDataSyncTime = int;

type LastSuccessfulResourceDataSyncTime = int;

class ListAssociationVersionsRequest {
  public AssociationId $association_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssociationVersionsResult {
  public AssociationVersionList $association_versions;
  public NextToken $next_token;

  public function __construct(shape(
  ?'association_versions' => AssociationVersionList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->association_versions = $association_versions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListAssociationsRequest {
  public AssociationFilterList $association_filter_list;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'association_filter_list' => AssociationFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->association_filter_list = $association_filter_list ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssociationsResult {
  public AssociationList $associations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'associations' => AssociationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->associations = $associations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListCommandInvocationsRequest {
  public CommandId $command_id;
  public boolean $details;
  public CommandFilterList $filters;
  public InstanceId $instance_id;
  public CommandMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'command_id' => CommandId,
  ?'details' => boolean,
  ?'filters' => CommandFilterList,
  ?'instance_id' => InstanceId,
  ?'max_results' => CommandMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->command_id = $command_id ?? "";
    $this->details = $details ?? false;
    $this->filters = $filters ?? [];
    $this->instance_id = $instance_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListCommandInvocationsResult {
  public CommandInvocationList $command_invocations;
  public NextToken $next_token;

  public function __construct(shape(
  ?'command_invocations' => CommandInvocationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->command_invocations = $command_invocations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListCommandsRequest {
  public CommandId $command_id;
  public CommandFilterList $filters;
  public InstanceId $instance_id;
  public CommandMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'command_id' => CommandId,
  ?'filters' => CommandFilterList,
  ?'instance_id' => InstanceId,
  ?'max_results' => CommandMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->command_id = $command_id ?? "";
    $this->filters = $filters ?? [];
    $this->instance_id = $instance_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListCommandsResult {
  public CommandList $commands;
  public NextToken $next_token;

  public function __construct(shape(
  ?'commands' => CommandList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->commands = $commands ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListComplianceItemsRequest {
  public ComplianceStringFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ComplianceResourceIdList $resource_ids;
  public ComplianceResourceTypeList $resource_types;

  public function __construct(shape(
  ?'filters' => ComplianceStringFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_ids' => ComplianceResourceIdList,
  ?'resource_types' => ComplianceResourceTypeList,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_ids = $resource_ids ?? [];
    $this->resource_types = $resource_types ?? [];
  }
}

class ListComplianceItemsResult {
  public ComplianceItemList $compliance_items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'compliance_items' => ComplianceItemList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->compliance_items = $compliance_items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListComplianceSummariesRequest {
  public ComplianceStringFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => ComplianceStringFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListComplianceSummariesResult {
  public ComplianceSummaryItemList $compliance_summary_items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'compliance_summary_items' => ComplianceSummaryItemList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->compliance_summary_items = $compliance_summary_items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDocumentVersionsRequest {
  public MaxResults $max_results;
  public DocumentARN $name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => DocumentARN,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListDocumentVersionsResult {
  public DocumentVersionList $document_versions;
  public NextToken $next_token;

  public function __construct(shape(
  ?'document_versions' => DocumentVersionList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->document_versions = $document_versions ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListDocumentsRequest {
  public DocumentFilterList $document_filter_list;
  public DocumentKeyValuesFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'document_filter_list' => DocumentFilterList,
  ?'filters' => DocumentKeyValuesFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->document_filter_list = $document_filter_list ?? [];
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDocumentsResult {
  public DocumentIdentifierList $document_identifiers;
  public NextToken $next_token;

  public function __construct(shape(
  ?'document_identifiers' => DocumentIdentifierList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->document_identifiers = $document_identifiers ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListInventoryEntriesRequest {
  public InventoryFilterList $filters;
  public InstanceId $instance_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'filters' => InventoryFilterList,
  ?'instance_id' => InstanceId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->instance_id = $instance_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class ListInventoryEntriesResult {
  public InventoryItemCaptureTime $capture_time;
  public InventoryItemEntryList $entries;
  public InstanceId $instance_id;
  public NextToken $next_token;
  public InventoryItemSchemaVersion $schema_version;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'capture_time' => InventoryItemCaptureTime,
  ?'entries' => InventoryItemEntryList,
  ?'instance_id' => InstanceId,
  ?'next_token' => NextToken,
  ?'schema_version' => InventoryItemSchemaVersion,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->capture_time = $capture_time ?? "";
    $this->entries = $entries ?? [];
    $this->instance_id = $instance_id ?? "";
    $this->next_token = $next_token ?? "";
    $this->schema_version = $schema_version ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class ListResourceComplianceSummariesRequest {
  public ComplianceStringFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => ComplianceStringFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListResourceComplianceSummariesResult {
  public NextToken $next_token;
  public ResourceComplianceSummaryItemList $resource_compliance_summary_items;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_compliance_summary_items' => ResourceComplianceSummaryItemList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_compliance_summary_items = $resource_compliance_summary_items ?? [];
  }
}

class ListResourceDataSyncRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceDataSyncType $sync_type;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sync_type' => ResourceDataSyncType,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sync_type = $sync_type ?? "";
  }
}

class ListResourceDataSyncResult {
  public NextToken $next_token;
  public ResourceDataSyncItemList $resource_data_sync_items;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resource_data_sync_items' => ResourceDataSyncItemList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_data_sync_items = $resource_data_sync_items ?? [];
  }
}

class ListTagsForResourceRequest {
  public ResourceId $resource_id;
  public ResourceTypeForTagging $resource_type;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceTypeForTagging,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ListTagsForResourceResult {
  public TagList $tag_list;

  public function __construct(shape(
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->tag_list = $tag_list ?? [];
  }
}

class LoggingInfo {
  public S3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public S3Region $s_3_region;

  public function __construct(shape(
  ?'s_3_bucket_name' => S3BucketName,
  ?'s_3_key_prefix' => S3KeyPrefix,
  ?'s_3_region' => S3Region,
  ) $s = shape()) {
    $this->s_3_bucket_name = $s_3_bucket_name ?? "";
    $this->s_3_key_prefix = $s_3_key_prefix ?? "";
    $this->s_3_region = $s_3_region ?? "";
  }
}

type Long = int;

type MaintenanceWindowAllowUnassociatedTargets = bool;

class MaintenanceWindowAutomationParameters {
  public DocumentVersion $document_version;
  public AutomationParameterMap $parameters;

  public function __construct(shape(
  ?'document_version' => DocumentVersion,
  ?'parameters' => AutomationParameterMap,
  ) $s = shape()) {
    $this->document_version = $document_version ?? "";
    $this->parameters = $parameters ?? [];
  }
}

type MaintenanceWindowCutoff = int;

type MaintenanceWindowDescription = string;

type MaintenanceWindowDurationHours = int;

type MaintenanceWindowEnabled = bool;

class MaintenanceWindowExecution {
  public DateTime $end_time;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowExecutionId $window_execution_id;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'end_time' => DateTime,
  ?'start_time' => DateTime,
  ?'status' => MaintenanceWindowExecutionStatus,
  ?'status_details' => MaintenanceWindowExecutionStatusDetails,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
    $this->window_id = $window_id ?? "";
  }
}

type MaintenanceWindowExecutionId = string;

type MaintenanceWindowExecutionList = vec<MaintenanceWindowExecution>;

type MaintenanceWindowExecutionStatus = string;

type MaintenanceWindowExecutionStatusDetails = string;

type MaintenanceWindowExecutionTaskExecutionId = string;

type MaintenanceWindowExecutionTaskId = string;

type MaintenanceWindowExecutionTaskIdList = vec<MaintenanceWindowExecutionTaskId>;

class MaintenanceWindowExecutionTaskIdentity {
  public DateTime $end_time;
  public DateTime $start_time;
  public MaintenanceWindowExecutionStatus $status;
  public MaintenanceWindowExecutionStatusDetails $status_details;
  public MaintenanceWindowTaskArn $task_arn;
  public MaintenanceWindowExecutionTaskId $task_execution_id;
  public MaintenanceWindowTaskType $task_type;
  public MaintenanceWindowExecutionId $window_execution_id;

  public function __construct(shape(
  ?'end_time' => DateTime,
  ?'start_time' => DateTime,
  ?'status' => MaintenanceWindowExecutionStatus,
  ?'status_details' => MaintenanceWindowExecutionStatusDetails,
  ?'task_arn' => MaintenanceWindowTaskArn,
  ?'task_execution_id' => MaintenanceWindowExecutionTaskId,
  ?'task_type' => MaintenanceWindowTaskType,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->task_arn = $task_arn ?? "";
    $this->task_execution_id = $task_execution_id ?? "";
    $this->task_type = $task_type ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
  }
}

type MaintenanceWindowExecutionTaskIdentityList = vec<MaintenanceWindowExecutionTaskIdentity>;

type MaintenanceWindowExecutionTaskInvocationId = string;

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

  public function __construct(shape(
  ?'end_time' => DateTime,
  ?'execution_id' => MaintenanceWindowExecutionTaskExecutionId,
  ?'invocation_id' => MaintenanceWindowExecutionTaskInvocationId,
  ?'owner_information' => OwnerInformation,
  ?'parameters' => MaintenanceWindowExecutionTaskInvocationParameters,
  ?'start_time' => DateTime,
  ?'status' => MaintenanceWindowExecutionStatus,
  ?'status_details' => MaintenanceWindowExecutionStatusDetails,
  ?'task_execution_id' => MaintenanceWindowExecutionTaskId,
  ?'task_type' => MaintenanceWindowTaskType,
  ?'window_execution_id' => MaintenanceWindowExecutionId,
  ?'window_target_id' => MaintenanceWindowTaskTargetId,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->execution_id = $execution_id ?? "";
    $this->invocation_id = $invocation_id ?? "";
    $this->owner_information = $owner_information ?? "";
    $this->parameters = $parameters ?? "";
    $this->start_time = $start_time ?? 0;
    $this->status = $status ?? "";
    $this->status_details = $status_details ?? "";
    $this->task_execution_id = $task_execution_id ?? "";
    $this->task_type = $task_type ?? "";
    $this->window_execution_id = $window_execution_id ?? "";
    $this->window_target_id = $window_target_id ?? "";
  }
}

type MaintenanceWindowExecutionTaskInvocationIdentityList = vec<MaintenanceWindowExecutionTaskInvocationIdentity>;

type MaintenanceWindowExecutionTaskInvocationParameters = string;

class MaintenanceWindowFilter {
  public MaintenanceWindowFilterKey $key;
  public MaintenanceWindowFilterValues $values;

  public function __construct(shape(
  ?'key' => MaintenanceWindowFilterKey,
  ?'values' => MaintenanceWindowFilterValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type MaintenanceWindowFilterKey = string;

type MaintenanceWindowFilterList = vec<MaintenanceWindowFilter>;

type MaintenanceWindowFilterValue = string;

type MaintenanceWindowFilterValues = vec<MaintenanceWindowFilterValue>;

type MaintenanceWindowId = string;

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

  public function __construct(shape(
  ?'cutoff' => MaintenanceWindowCutoff,
  ?'description' => MaintenanceWindowDescription,
  ?'duration' => MaintenanceWindowDurationHours,
  ?'enabled' => MaintenanceWindowEnabled,
  ?'end_date' => MaintenanceWindowStringDateTime,
  ?'name' => MaintenanceWindowName,
  ?'next_execution_time' => MaintenanceWindowStringDateTime,
  ?'schedule' => MaintenanceWindowSchedule,
  ?'schedule_timezone' => MaintenanceWindowTimezone,
  ?'start_date' => MaintenanceWindowStringDateTime,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->cutoff = $cutoff ?? 0;
    $this->description = $description ?? "";
    $this->duration = $duration ?? 0;
    $this->enabled = $enabled ?? false;
    $this->end_date = $end_date ?? "";
    $this->name = $name ?? "";
    $this->next_execution_time = $next_execution_time ?? "";
    $this->schedule = $schedule ?? "";
    $this->schedule_timezone = $schedule_timezone ?? "";
    $this->start_date = $start_date ?? "";
    $this->window_id = $window_id ?? "";
  }
}

class MaintenanceWindowIdentityForTarget {
  public MaintenanceWindowName $name;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'name' => MaintenanceWindowName,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->window_id = $window_id ?? "";
  }
}

type MaintenanceWindowIdentityList = vec<MaintenanceWindowIdentity>;

type MaintenanceWindowLambdaClientContext = string;

class MaintenanceWindowLambdaParameters {
  public MaintenanceWindowLambdaClientContext $client_context;
  public MaintenanceWindowLambdaPayload $payload;
  public MaintenanceWindowLambdaQualifier $qualifier;

  public function __construct(shape(
  ?'client_context' => MaintenanceWindowLambdaClientContext,
  ?'payload' => MaintenanceWindowLambdaPayload,
  ?'qualifier' => MaintenanceWindowLambdaQualifier,
  ) $s = shape()) {
    $this->client_context = $client_context ?? "";
    $this->payload = $payload ?? "";
    $this->qualifier = $qualifier ?? "";
  }
}

type MaintenanceWindowLambdaPayload = string;

type MaintenanceWindowLambdaQualifier = string;

type MaintenanceWindowMaxResults = int;

type MaintenanceWindowName = string;

type MaintenanceWindowResourceType = string;

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

  public function __construct(shape(
  ?'cloud_watch_output_config' => CloudWatchOutputConfig,
  ?'comment' => Comment,
  ?'document_hash' => DocumentHash,
  ?'document_hash_type' => DocumentHashType,
  ?'document_version' => DocumentVersion,
  ?'notification_config' => NotificationConfig,
  ?'output_s_3_bucket_name' => S3BucketName,
  ?'output_s_3_key_prefix' => S3KeyPrefix,
  ?'parameters' => Parameters,
  ?'service_role_arn' => ServiceRole,
  ?'timeout_seconds' => TimeoutSeconds,
  ) $s = shape()) {
    $this->cloud_watch_output_config = $cloud_watch_output_config ?? null;
    $this->comment = $comment ?? "";
    $this->document_hash = $document_hash ?? "";
    $this->document_hash_type = $document_hash_type ?? "";
    $this->document_version = $document_version ?? "";
    $this->notification_config = $notification_config ?? null;
    $this->output_s_3_bucket_name = $output_s_3_bucket_name ?? "";
    $this->output_s_3_key_prefix = $output_s_3_key_prefix ?? "";
    $this->parameters = $parameters ?? [];
    $this->service_role_arn = $service_role_arn ?? "";
    $this->timeout_seconds = $timeout_seconds ?? 0;
  }
}

type MaintenanceWindowSchedule = string;

type MaintenanceWindowSearchMaxResults = int;

type MaintenanceWindowStepFunctionsInput = string;

type MaintenanceWindowStepFunctionsName = string;

class MaintenanceWindowStepFunctionsParameters {
  public MaintenanceWindowStepFunctionsInput $input;
  public MaintenanceWindowStepFunctionsName $name;

  public function __construct(shape(
  ?'input' => MaintenanceWindowStepFunctionsInput,
  ?'name' => MaintenanceWindowStepFunctionsName,
  ) $s = shape()) {
    $this->input = $input ?? "";
    $this->name = $name ?? "";
  }
}

type MaintenanceWindowStringDateTime = string;

class MaintenanceWindowTarget {
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;

  public function __construct(shape(
  ?'description' => MaintenanceWindowDescription,
  ?'name' => MaintenanceWindowName,
  ?'owner_information' => OwnerInformation,
  ?'resource_type' => MaintenanceWindowResourceType,
  ?'targets' => Targets,
  ?'window_id' => MaintenanceWindowId,
  ?'window_target_id' => MaintenanceWindowTargetId,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->owner_information = $owner_information ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->targets = $targets ?? [];
    $this->window_id = $window_id ?? "";
    $this->window_target_id = $window_target_id ?? "";
  }
}

type MaintenanceWindowTargetId = string;

type MaintenanceWindowTargetList = vec<MaintenanceWindowTarget>;

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

  public function __construct(shape(
  ?'description' => MaintenanceWindowDescription,
  ?'logging_info' => LoggingInfo,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => MaintenanceWindowName,
  ?'priority' => MaintenanceWindowTaskPriority,
  ?'service_role_arn' => ServiceRole,
  ?'targets' => Targets,
  ?'task_arn' => MaintenanceWindowTaskArn,
  ?'task_parameters' => MaintenanceWindowTaskParameters,
  ?'type' => MaintenanceWindowTaskType,
  ?'window_id' => MaintenanceWindowId,
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->logging_info = $logging_info ?? null;
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->targets = $targets ?? [];
    $this->task_arn = $task_arn ?? "";
    $this->task_parameters = $task_parameters ?? [];
    $this->type = $type ?? "";
    $this->window_id = $window_id ?? "";
    $this->window_task_id = $window_task_id ?? "";
  }
}

type MaintenanceWindowTaskArn = string;

type MaintenanceWindowTaskId = string;

class MaintenanceWindowTaskInvocationParameters {
  public MaintenanceWindowAutomationParameters $automation;
  public MaintenanceWindowLambdaParameters $lambda;
  public MaintenanceWindowRunCommandParameters $run_command;
  public MaintenanceWindowStepFunctionsParameters $step_functions;

  public function __construct(shape(
  ?'automation' => MaintenanceWindowAutomationParameters,
  ?'lambda' => MaintenanceWindowLambdaParameters,
  ?'run_command' => MaintenanceWindowRunCommandParameters,
  ?'step_functions' => MaintenanceWindowStepFunctionsParameters,
  ) $s = shape()) {
    $this->automation = $automation ?? null;
    $this->lambda = $lambda ?? null;
    $this->run_command = $run_command ?? null;
    $this->step_functions = $step_functions ?? null;
  }
}

type MaintenanceWindowTaskList = vec<MaintenanceWindowTask>;

type MaintenanceWindowTaskParameterName = string;

type MaintenanceWindowTaskParameterValue = string;

class MaintenanceWindowTaskParameterValueExpression {
  public MaintenanceWindowTaskParameterValueList $values;

  public function __construct(shape(
  ?'values' => MaintenanceWindowTaskParameterValueList,
  ) $s = shape()) {
    $this->values = $values ?? [];
  }
}

type MaintenanceWindowTaskParameterValueList = vec<MaintenanceWindowTaskParameterValue>;

type MaintenanceWindowTaskParameters = dict<MaintenanceWindowTaskParameterName, MaintenanceWindowTaskParameterValueExpression>;

type MaintenanceWindowTaskParametersList = vec<MaintenanceWindowTaskParameters>;

type MaintenanceWindowTaskPriority = int;

type MaintenanceWindowTaskTargetId = string;

type MaintenanceWindowTaskType = string;

type MaintenanceWindowTimezone = string;

type MaintenanceWindowsForTargetList = vec<MaintenanceWindowIdentityForTarget>;

type ManagedInstanceId = string;

type MaxConcurrency = string;

class MaxDocumentSizeExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type MaxErrors = string;

type MaxResults = int;

type MaxResultsEC2Compatible = int;

class ModifyDocumentPermissionRequest {
  public AccountIdList $account_ids_to_add;
  public AccountIdList $account_ids_to_remove;
  public DocumentName $name;
  public DocumentPermissionType $permission_type;
  public SharedDocumentVersion $shared_document_version;

  public function __construct(shape(
  ?'account_ids_to_add' => AccountIdList,
  ?'account_ids_to_remove' => AccountIdList,
  ?'name' => DocumentName,
  ?'permission_type' => DocumentPermissionType,
  ?'shared_document_version' => SharedDocumentVersion,
  ) $s = shape()) {
    $this->account_ids_to_add = $account_ids_to_add ?? [];
    $this->account_ids_to_remove = $account_ids_to_remove ?? [];
    $this->name = $name ?? "";
    $this->permission_type = $permission_type ?? "";
    $this->shared_document_version = $shared_document_version ?? "";
  }
}

class ModifyDocumentPermissionResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NextToken = string;

class NonCompliantSummary {
  public ComplianceSummaryCount $non_compliant_count;
  public SeveritySummary $severity_summary;

  public function __construct(shape(
  ?'non_compliant_count' => ComplianceSummaryCount,
  ?'severity_summary' => SeveritySummary,
  ) $s = shape()) {
    $this->non_compliant_count = $non_compliant_count ?? 0;
    $this->severity_summary = $severity_summary ?? null;
  }
}

type NormalStringMap = dict<String, String>;

type NotificationArn = string;

class NotificationConfig {
  public NotificationArn $notification_arn;
  public NotificationEventList $notification_events;
  public NotificationType $notification_type;

  public function __construct(shape(
  ?'notification_arn' => NotificationArn,
  ?'notification_events' => NotificationEventList,
  ?'notification_type' => NotificationType,
  ) $s = shape()) {
    $this->notification_arn = $notification_arn ?? "";
    $this->notification_events = $notification_events ?? [];
    $this->notification_type = $notification_type ?? "";
  }
}

type NotificationEvent = string;

type NotificationEventList = vec<NotificationEvent>;

type NotificationType = string;

type OperatingSystem = string;

class OpsAggregator {
  public OpsAggregatorType $aggregator_type;
  public OpsAggregatorList $aggregators;
  public OpsDataAttributeName $attribute_name;
  public OpsFilterList $filters;
  public OpsDataTypeName $type_name;
  public OpsAggregatorValueMap $values;

  public function __construct(shape(
  ?'aggregator_type' => OpsAggregatorType,
  ?'aggregators' => OpsAggregatorList,
  ?'attribute_name' => OpsDataAttributeName,
  ?'filters' => OpsFilterList,
  ?'type_name' => OpsDataTypeName,
  ?'values' => OpsAggregatorValueMap,
  ) $s = shape()) {
    $this->aggregator_type = $aggregator_type ?? "";
    $this->aggregators = $aggregators ?? [];
    $this->attribute_name = $attribute_name ?? "";
    $this->filters = $filters ?? [];
    $this->type_name = $type_name ?? "";
    $this->values = $values ?? [];
  }
}

type OpsAggregatorList = vec<OpsAggregator>;

type OpsAggregatorType = string;

type OpsAggregatorValue = string;

type OpsAggregatorValueKey = string;

type OpsAggregatorValueMap = dict<OpsAggregatorValueKey, OpsAggregatorValue>;

type OpsDataAttributeName = string;

type OpsDataTypeName = string;

class OpsEntity {
  public OpsEntityItemMap $data;
  public OpsEntityId $id;

  public function __construct(shape(
  ?'data' => OpsEntityItemMap,
  ?'id' => OpsEntityId,
  ) $s = shape()) {
    $this->data = $data ?? [];
    $this->id = $id ?? "";
  }
}

type OpsEntityId = string;

class OpsEntityItem {
  public OpsEntityItemCaptureTime $capture_time;
  public OpsEntityItemEntryList $content;

  public function __construct(shape(
  ?'capture_time' => OpsEntityItemCaptureTime,
  ?'content' => OpsEntityItemEntryList,
  ) $s = shape()) {
    $this->capture_time = $capture_time ?? "";
    $this->content = $content ?? [];
  }
}

type OpsEntityItemCaptureTime = string;

type OpsEntityItemEntry = dict<AttributeName, AttributeValue>;

type OpsEntityItemEntryList = vec<OpsEntityItemEntry>;

type OpsEntityItemKey = string;

type OpsEntityItemMap = dict<OpsEntityItemKey, OpsEntityItem>;

type OpsEntityList = vec<OpsEntity>;

class OpsFilter {
  public OpsFilterKey $key;
  public OpsFilterOperatorType $type;
  public OpsFilterValueList $values;

  public function __construct(shape(
  ?'key' => OpsFilterKey,
  ?'type' => OpsFilterOperatorType,
  ?'values' => OpsFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->type = $type ?? "";
    $this->values = $values ?? [];
  }
}

type OpsFilterKey = string;

type OpsFilterList = vec<OpsFilter>;

type OpsFilterOperatorType = string;

type OpsFilterValue = string;

type OpsFilterValueList = vec<OpsFilterValue>;

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

  public function __construct(shape(
  ?'category' => OpsItemCategory,
  ?'created_by' => string,
  ?'created_time' => DateTime,
  ?'description' => OpsItemDescription,
  ?'last_modified_by' => string,
  ?'last_modified_time' => DateTime,
  ?'notifications' => OpsItemNotifications,
  ?'operational_data' => OpsItemOperationalData,
  ?'ops_item_id' => OpsItemId,
  ?'priority' => OpsItemPriority,
  ?'related_ops_items' => RelatedOpsItems,
  ?'severity' => OpsItemSeverity,
  ?'source' => OpsItemSource,
  ?'status' => OpsItemStatus,
  ?'title' => OpsItemTitle,
  ?'version' => string,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->created_by = $created_by ?? "";
    $this->created_time = $created_time ?? 0;
    $this->description = $description ?? "";
    $this->last_modified_by = $last_modified_by ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->notifications = $notifications ?? [];
    $this->operational_data = $operational_data ?? [];
    $this->ops_item_id = $ops_item_id ?? "";
    $this->priority = $priority ?? 0;
    $this->related_ops_items = $related_ops_items ?? [];
    $this->severity = $severity ?? "";
    $this->source = $source ?? "";
    $this->status = $status ?? "";
    $this->title = $title ?? "";
    $this->version = $version ?? "";
  }
}

class OpsItemAlreadyExistsException {
  public string $message;
  public string $ops_item_id;

  public function __construct(shape(
  ?'message' => string,
  ?'ops_item_id' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->ops_item_id = $ops_item_id ?? "";
  }
}

type OpsItemCategory = string;

type OpsItemDataKey = string;

type OpsItemDataType = string;

class OpsItemDataValue {
  public OpsItemDataType $type;
  public OpsItemDataValueString $value;

  public function __construct(shape(
  ?'type' => OpsItemDataType,
  ?'value' => OpsItemDataValueString,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

type OpsItemDataValueString = string;

type OpsItemDescription = string;

class OpsItemFilter {
  public OpsItemFilterKey $key;
  public OpsItemFilterOperator $operator;
  public OpsItemFilterValues $values;

  public function __construct(shape(
  ?'key' => OpsItemFilterKey,
  ?'operator' => OpsItemFilterOperator,
  ?'values' => OpsItemFilterValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->operator = $operator ?? "";
    $this->values = $values ?? [];
  }
}

type OpsItemFilterKey = string;

type OpsItemFilterOperator = string;

type OpsItemFilterValue = string;

type OpsItemFilterValues = vec<OpsItemFilterValue>;

type OpsItemFilters = vec<OpsItemFilter>;

type OpsItemId = string;

class OpsItemInvalidParameterException {
  public string $message;
  public OpsItemParameterNamesList $parameter_names;

  public function __construct(shape(
  ?'message' => string,
  ?'parameter_names' => OpsItemParameterNamesList,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->parameter_names = $parameter_names ?? [];
  }
}

class OpsItemLimitExceededException {
  public int $limit;
  public string $limit_type;
  public string $message;
  public OpsItemParameterNamesList $resource_types;

  public function __construct(shape(
  ?'limit' => int,
  ?'limit_type' => string,
  ?'message' => string,
  ?'resource_types' => OpsItemParameterNamesList,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->limit_type = $limit_type ?? "";
    $this->message = $message ?? "";
    $this->resource_types = $resource_types ?? [];
  }
}

type OpsItemMaxResults = int;

class OpsItemNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class OpsItemNotification {
  public string $arn;

  public function __construct(shape(
  ?'arn' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

type OpsItemNotifications = vec<OpsItemNotification>;

type OpsItemOperationalData = dict<OpsItemDataKey, OpsItemDataValue>;

type OpsItemOpsDataKeysList = vec<String>;

type OpsItemParameterNamesList = vec<String>;

type OpsItemPriority = int;

type OpsItemSeverity = string;

type OpsItemSource = string;

type OpsItemStatus = string;

type OpsItemSummaries = vec<OpsItemSummary>;

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

  public function __construct(shape(
  ?'category' => OpsItemCategory,
  ?'created_by' => string,
  ?'created_time' => DateTime,
  ?'last_modified_by' => string,
  ?'last_modified_time' => DateTime,
  ?'operational_data' => OpsItemOperationalData,
  ?'ops_item_id' => OpsItemId,
  ?'priority' => OpsItemPriority,
  ?'severity' => OpsItemSeverity,
  ?'source' => OpsItemSource,
  ?'status' => OpsItemStatus,
  ?'title' => OpsItemTitle,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->created_by = $created_by ?? "";
    $this->created_time = $created_time ?? 0;
    $this->last_modified_by = $last_modified_by ?? "";
    $this->last_modified_time = $last_modified_time ?? 0;
    $this->operational_data = $operational_data ?? [];
    $this->ops_item_id = $ops_item_id ?? "";
    $this->priority = $priority ?? 0;
    $this->severity = $severity ?? "";
    $this->source = $source ?? "";
    $this->status = $status ?? "";
    $this->title = $title ?? "";
  }
}

type OpsItemTitle = string;

class OpsResultAttribute {
  public OpsDataTypeName $type_name;

  public function __construct(shape(
  ?'type_name' => OpsDataTypeName,
  ) $s = shape()) {
    $this->type_name = $type_name ?? "";
  }
}

type OpsResultAttributeList = vec<OpsResultAttribute>;

class OutputSource {
  public OutputSourceId $output_source_id;
  public OutputSourceType $output_source_type;

  public function __construct(shape(
  ?'output_source_id' => OutputSourceId,
  ?'output_source_type' => OutputSourceType,
  ) $s = shape()) {
    $this->output_source_id = $output_source_id ?? "";
    $this->output_source_type = $output_source_type ?? "";
  }
}

type OutputSourceId = string;

type OutputSourceType = string;

type OwnerInformation = string;

type PSParameterName = string;

type PSParameterSelector = string;

type PSParameterValue = string;

type PSParameterVersion = int;

class Parameter {
  public string $arn;
  public DateTime $last_modified_date;
  public PSParameterName $name;
  public PSParameterSelector $selector;
  public string $source_result;
  public ParameterType $type;
  public PSParameterValue $value;
  public PSParameterVersion $version;

  public function __construct(shape(
  ?'arn' => string,
  ?'last_modified_date' => DateTime,
  ?'name' => PSParameterName,
  ?'selector' => PSParameterSelector,
  ?'source_result' => string,
  ?'type' => ParameterType,
  ?'value' => PSParameterValue,
  ?'version' => PSParameterVersion,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->last_modified_date = $last_modified_date ?? 0;
    $this->name = $name ?? "";
    $this->selector = $selector ?? "";
    $this->source_result = $source_result ?? "";
    $this->type = $type ?? "";
    $this->value = $value ?? "";
    $this->version = $version ?? 0;
  }
}

class ParameterAlreadyExists {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ParameterDescription = string;

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

  public function __construct(shape(
  ?'allowed_pattern' => AllowedPattern,
  ?'description' => ParameterDescription,
  ?'key_id' => ParameterKeyId,
  ?'labels' => ParameterLabelList,
  ?'last_modified_date' => DateTime,
  ?'last_modified_user' => string,
  ?'name' => PSParameterName,
  ?'policies' => ParameterPolicyList,
  ?'tier' => ParameterTier,
  ?'type' => ParameterType,
  ?'value' => PSParameterValue,
  ?'version' => PSParameterVersion,
  ) $s = shape()) {
    $this->allowed_pattern = $allowed_pattern ?? "";
    $this->description = $description ?? "";
    $this->key_id = $key_id ?? "";
    $this->labels = $labels ?? [];
    $this->last_modified_date = $last_modified_date ?? 0;
    $this->last_modified_user = $last_modified_user ?? "";
    $this->name = $name ?? "";
    $this->policies = $policies ?? [];
    $this->tier = $tier ?? "";
    $this->type = $type ?? "";
    $this->value = $value ?? "";
    $this->version = $version ?? 0;
  }
}

type ParameterHistoryList = vec<ParameterHistory>;

class ParameterInlinePolicy {
  public string $policy_status;
  public string $policy_text;
  public string $policy_type;

  public function __construct(shape(
  ?'policy_status' => string,
  ?'policy_text' => string,
  ?'policy_type' => string,
  ) $s = shape()) {
    $this->policy_status = $policy_status ?? "";
    $this->policy_text = $policy_text ?? "";
    $this->policy_type = $policy_type ?? "";
  }
}

type ParameterKeyId = string;

type ParameterLabel = string;

type ParameterLabelList = vec<ParameterLabel>;

class ParameterLimitExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ParameterList = vec<Parameter>;

class ParameterMaxVersionLimitExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'allowed_pattern' => AllowedPattern,
  ?'description' => ParameterDescription,
  ?'key_id' => ParameterKeyId,
  ?'last_modified_date' => DateTime,
  ?'last_modified_user' => string,
  ?'name' => PSParameterName,
  ?'policies' => ParameterPolicyList,
  ?'tier' => ParameterTier,
  ?'type' => ParameterType,
  ?'version' => PSParameterVersion,
  ) $s = shape()) {
    $this->allowed_pattern = $allowed_pattern ?? "";
    $this->description = $description ?? "";
    $this->key_id = $key_id ?? "";
    $this->last_modified_date = $last_modified_date ?? 0;
    $this->last_modified_user = $last_modified_user ?? "";
    $this->name = $name ?? "";
    $this->policies = $policies ?? [];
    $this->tier = $tier ?? "";
    $this->type = $type ?? "";
    $this->version = $version ?? 0;
  }
}

type ParameterMetadataList = vec<ParameterMetadata>;

type ParameterName = string;

type ParameterNameList = vec<PSParameterName>;

class ParameterNotFound {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ParameterPatternMismatchException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ParameterPolicies = string;

type ParameterPolicyList = vec<ParameterInlinePolicy>;

class ParameterStringFilter {
  public ParameterStringFilterKey $key;
  public ParameterStringQueryOption $option;
  public ParameterStringFilterValueList $values;

  public function __construct(shape(
  ?'key' => ParameterStringFilterKey,
  ?'option' => ParameterStringQueryOption,
  ?'values' => ParameterStringFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->option = $option ?? "";
    $this->values = $values ?? [];
  }
}

type ParameterStringFilterKey = string;

type ParameterStringFilterList = vec<ParameterStringFilter>;

type ParameterStringFilterValue = string;

type ParameterStringFilterValueList = vec<ParameterStringFilterValue>;

type ParameterStringQueryOption = string;

type ParameterTier = string;

type ParameterType = string;

type ParameterValue = string;

type ParameterValueList = vec<ParameterValue>;

class ParameterVersionLabelLimitExceeded {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ParameterVersionNotFound {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Parameters = dict<ParameterName, ParameterValueList>;

class ParametersFilter {
  public ParametersFilterKey $key;
  public ParametersFilterValueList $values;

  public function __construct(shape(
  ?'key' => ParametersFilterKey,
  ?'values' => ParametersFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type ParametersFilterKey = string;

type ParametersFilterList = vec<ParametersFilter>;

type ParametersFilterValue = string;

type ParametersFilterValueList = vec<ParametersFilterValue>;

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

  public function __construct(shape(
  ?'classification' => PatchClassification,
  ?'content_url' => PatchContentUrl,
  ?'description' => PatchDescription,
  ?'id' => PatchId,
  ?'kb_number' => PatchKbNumber,
  ?'language' => PatchLanguage,
  ?'msrc_number' => PatchMsrcNumber,
  ?'msrc_severity' => PatchMsrcSeverity,
  ?'product' => PatchProduct,
  ?'product_family' => PatchProductFamily,
  ?'release_date' => DateTime,
  ?'title' => PatchTitle,
  ?'vendor' => PatchVendor,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->content_url = $content_url ?? "";
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->kb_number = $kb_number ?? "";
    $this->language = $language ?? "";
    $this->msrc_number = $msrc_number ?? "";
    $this->msrc_severity = $msrc_severity ?? "";
    $this->product = $product ?? "";
    $this->product_family = $product_family ?? "";
    $this->release_date = $release_date ?? 0;
    $this->title = $title ?? "";
    $this->vendor = $vendor ?? "";
  }
}

type PatchAction = string;

class PatchBaselineIdentity {
  public BaselineDescription $baseline_description;
  public BaselineId $baseline_id;
  public BaselineName $baseline_name;
  public DefaultBaseline $default_baseline;
  public OperatingSystem $operating_system;

  public function __construct(shape(
  ?'baseline_description' => BaselineDescription,
  ?'baseline_id' => BaselineId,
  ?'baseline_name' => BaselineName,
  ?'default_baseline' => DefaultBaseline,
  ?'operating_system' => OperatingSystem,
  ) $s = shape()) {
    $this->baseline_description = $baseline_description ?? "";
    $this->baseline_id = $baseline_id ?? "";
    $this->baseline_name = $baseline_name ?? "";
    $this->default_baseline = $default_baseline ?? false;
    $this->operating_system = $operating_system ?? "";
  }
}

type PatchBaselineIdentityList = vec<PatchBaselineIdentity>;

type PatchBaselineMaxResults = int;

type PatchClassification = string;

class PatchComplianceData {
  public PatchClassification $classification;
  public DateTime $installed_time;
  public PatchKbNumber $kb_id;
  public PatchSeverity $severity;
  public PatchComplianceDataState $state;
  public PatchTitle $title;

  public function __construct(shape(
  ?'classification' => PatchClassification,
  ?'installed_time' => DateTime,
  ?'kb_id' => PatchKbNumber,
  ?'severity' => PatchSeverity,
  ?'state' => PatchComplianceDataState,
  ?'title' => PatchTitle,
  ) $s = shape()) {
    $this->classification = $classification ?? "";
    $this->installed_time = $installed_time ?? 0;
    $this->kb_id = $kb_id ?? "";
    $this->severity = $severity ?? "";
    $this->state = $state ?? "";
    $this->title = $title ?? "";
  }
}

type PatchComplianceDataList = vec<PatchComplianceData>;

type PatchComplianceDataState = string;

type PatchComplianceLevel = string;

type PatchComplianceMaxResults = int;

type PatchContentUrl = string;

type PatchDeploymentStatus = string;

type PatchDescription = string;

type PatchFailedCount = int;

class PatchFilter {
  public PatchFilterKey $key;
  public PatchFilterValueList $values;

  public function __construct(shape(
  ?'key' => PatchFilterKey,
  ?'values' => PatchFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

class PatchFilterGroup {
  public PatchFilterList $patch_filters;

  public function __construct(shape(
  ?'patch_filters' => PatchFilterList,
  ) $s = shape()) {
    $this->patch_filters = $patch_filters ?? [];
  }
}

type PatchFilterKey = string;

type PatchFilterList = vec<PatchFilter>;

type PatchFilterValue = string;

type PatchFilterValueList = vec<PatchFilterValue>;

type PatchGroup = string;

type PatchGroupList = vec<PatchGroup>;

class PatchGroupPatchBaselineMapping {
  public PatchBaselineIdentity $baseline_identity;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'baseline_identity' => PatchBaselineIdentity,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->baseline_identity = $baseline_identity ?? null;
    $this->patch_group = $patch_group ?? "";
  }
}

type PatchGroupPatchBaselineMappingList = vec<PatchGroupPatchBaselineMapping>;

type PatchId = string;

type PatchIdList = vec<PatchId>;

type PatchInstalledCount = int;

type PatchInstalledOtherCount = int;

type PatchInstalledPendingRebootCount = int;

type PatchInstalledRejectedCount = int;

type PatchKbNumber = string;

type PatchLanguage = string;

type PatchList = vec<Patch>;

type PatchMissingCount = int;

type PatchMsrcNumber = string;

type PatchMsrcSeverity = string;

type PatchNotApplicableCount = int;

type PatchOperationType = string;

class PatchOrchestratorFilter {
  public PatchOrchestratorFilterKey $key;
  public PatchOrchestratorFilterValues $values;

  public function __construct(shape(
  ?'key' => PatchOrchestratorFilterKey,
  ?'values' => PatchOrchestratorFilterValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type PatchOrchestratorFilterKey = string;

type PatchOrchestratorFilterList = vec<PatchOrchestratorFilter>;

type PatchOrchestratorFilterValue = string;

type PatchOrchestratorFilterValues = vec<PatchOrchestratorFilterValue>;

type PatchProduct = string;

type PatchProductFamily = string;

type PatchPropertiesList = vec<PatchPropertyEntry>;

type PatchProperty = string;

type PatchPropertyEntry = dict<AttributeName, AttributeValue>;

class PatchRule {
  public ApproveAfterDays $approve_after_days;
  public PatchStringDateTime $approve_until_date;
  public PatchComplianceLevel $compliance_level;
  public boolean $enable_non_security;
  public PatchFilterGroup $patch_filter_group;

  public function __construct(shape(
  ?'approve_after_days' => ApproveAfterDays,
  ?'approve_until_date' => PatchStringDateTime,
  ?'compliance_level' => PatchComplianceLevel,
  ?'enable_non_security' => boolean,
  ?'patch_filter_group' => PatchFilterGroup,
  ) $s = shape()) {
    $this->approve_after_days = $approve_after_days ?? 0;
    $this->approve_until_date = $approve_until_date ?? "";
    $this->compliance_level = $compliance_level ?? "";
    $this->enable_non_security = $enable_non_security ?? false;
    $this->patch_filter_group = $patch_filter_group ?? null;
  }
}

class PatchRuleGroup {
  public PatchRuleList $patch_rules;

  public function __construct(shape(
  ?'patch_rules' => PatchRuleList,
  ) $s = shape()) {
    $this->patch_rules = $patch_rules ?? [];
  }
}

type PatchRuleList = vec<PatchRule>;

type PatchSet = string;

type PatchSeverity = string;

class PatchSource {
  public PatchSourceConfiguration $configuration;
  public PatchSourceName $name;
  public PatchSourceProductList $products;

  public function __construct(shape(
  ?'configuration' => PatchSourceConfiguration,
  ?'name' => PatchSourceName,
  ?'products' => PatchSourceProductList,
  ) $s = shape()) {
    $this->configuration = $configuration ?? "";
    $this->name = $name ?? "";
    $this->products = $products ?? [];
  }
}

type PatchSourceConfiguration = string;

type PatchSourceList = vec<PatchSource>;

type PatchSourceName = string;

type PatchSourceProduct = string;

type PatchSourceProductList = vec<PatchSourceProduct>;

class PatchStatus {
  public DateTime $approval_date;
  public PatchComplianceLevel $compliance_level;
  public PatchDeploymentStatus $deployment_status;

  public function __construct(shape(
  ?'approval_date' => DateTime,
  ?'compliance_level' => PatchComplianceLevel,
  ?'deployment_status' => PatchDeploymentStatus,
  ) $s = shape()) {
    $this->approval_date = $approval_date ?? 0;
    $this->compliance_level = $compliance_level ?? "";
    $this->deployment_status = $deployment_status ?? "";
  }
}

type PatchStringDateTime = string;

type PatchTitle = string;

type PatchUnreportedNotApplicableCount = int;

type PatchVendor = string;

type PingStatus = string;

type PlatformType = string;

type PlatformTypeList = vec<PlatformType>;

class PoliciesLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Product = string;

class ProgressCounters {
  public int $cancelled_steps;
  public int $failed_steps;
  public int $success_steps;
  public int $timed_out_steps;
  public int $total_steps;

  public function __construct(shape(
  ?'cancelled_steps' => int,
  ?'failed_steps' => int,
  ?'success_steps' => int,
  ?'timed_out_steps' => int,
  ?'total_steps' => int,
  ) $s = shape()) {
    $this->cancelled_steps = $cancelled_steps ?? 0;
    $this->failed_steps = $failed_steps ?? 0;
    $this->success_steps = $success_steps ?? 0;
    $this->timed_out_steps = $timed_out_steps ?? 0;
    $this->total_steps = $total_steps ?? 0;
  }
}

class PutComplianceItemsRequest {
  public ComplianceTypeName $compliance_type;
  public ComplianceExecutionSummary $execution_summary;
  public ComplianceItemContentHash $item_content_hash;
  public ComplianceItemEntryList $items;
  public ComplianceResourceId $resource_id;
  public ComplianceResourceType $resource_type;

  public function __construct(shape(
  ?'compliance_type' => ComplianceTypeName,
  ?'execution_summary' => ComplianceExecutionSummary,
  ?'item_content_hash' => ComplianceItemContentHash,
  ?'items' => ComplianceItemEntryList,
  ?'resource_id' => ComplianceResourceId,
  ?'resource_type' => ComplianceResourceType,
  ) $s = shape()) {
    $this->compliance_type = $compliance_type ?? "";
    $this->execution_summary = $execution_summary ?? null;
    $this->item_content_hash = $item_content_hash ?? "";
    $this->items = $items ?? [];
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class PutComplianceItemsResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PutInventoryMessage = string;

class PutInventoryRequest {
  public InstanceId $instance_id;
  public InventoryItemList $items;

  public function __construct(shape(
  ?'instance_id' => InstanceId,
  ?'items' => InventoryItemList,
  ) $s = shape()) {
    $this->instance_id = $instance_id ?? "";
    $this->items = $items ?? [];
  }
}

class PutInventoryResult {
  public PutInventoryMessage $message;

  public function __construct(shape(
  ?'message' => PutInventoryMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'allowed_pattern' => AllowedPattern,
  ?'description' => ParameterDescription,
  ?'key_id' => ParameterKeyId,
  ?'name' => PSParameterName,
  ?'overwrite' => boolean,
  ?'policies' => ParameterPolicies,
  ?'tags' => TagList,
  ?'tier' => ParameterTier,
  ?'type' => ParameterType,
  ?'value' => PSParameterValue,
  ) $s = shape()) {
    $this->allowed_pattern = $allowed_pattern ?? "";
    $this->description = $description ?? "";
    $this->key_id = $key_id ?? "";
    $this->name = $name ?? "";
    $this->overwrite = $overwrite ?? false;
    $this->policies = $policies ?? "";
    $this->tags = $tags ?? [];
    $this->tier = $tier ?? "";
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

class PutParameterResult {
  public ParameterTier $tier;
  public PSParameterVersion $version;

  public function __construct(shape(
  ?'tier' => ParameterTier,
  ?'version' => PSParameterVersion,
  ) $s = shape()) {
    $this->tier = $tier ?? "";
    $this->version = $version ?? 0;
  }
}

type RebootOption = string;

type Region = string;

type Regions = vec<Region>;

class RegisterDefaultPatchBaselineRequest {
  public BaselineId $baseline_id;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
  }
}

class RegisterDefaultPatchBaselineResult {
  public BaselineId $baseline_id;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
  }
}

class RegisterPatchBaselineForPatchGroupRequest {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->patch_group = $patch_group ?? "";
  }
}

class RegisterPatchBaselineForPatchGroupResult {
  public BaselineId $baseline_id;
  public PatchGroup $patch_group;

  public function __construct(shape(
  ?'baseline_id' => BaselineId,
  ?'patch_group' => PatchGroup,
  ) $s = shape()) {
    $this->baseline_id = $baseline_id ?? "";
    $this->patch_group = $patch_group ?? "";
  }
}

class RegisterTargetWithMaintenanceWindowRequest {
  public ClientToken $client_token;
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public MaintenanceWindowResourceType $resource_type;
  public Targets $targets;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => MaintenanceWindowDescription,
  ?'name' => MaintenanceWindowName,
  ?'owner_information' => OwnerInformation,
  ?'resource_type' => MaintenanceWindowResourceType,
  ?'targets' => Targets,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->owner_information = $owner_information ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->targets = $targets ?? [];
    $this->window_id = $window_id ?? "";
  }
}

class RegisterTargetWithMaintenanceWindowResult {
  public MaintenanceWindowTargetId $window_target_id;

  public function __construct(shape(
  ?'window_target_id' => MaintenanceWindowTargetId,
  ) $s = shape()) {
    $this->window_target_id = $window_target_id ?? "";
  }
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

  public function __construct(shape(
  ?'client_token' => ClientToken,
  ?'description' => MaintenanceWindowDescription,
  ?'logging_info' => LoggingInfo,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => MaintenanceWindowName,
  ?'priority' => MaintenanceWindowTaskPriority,
  ?'service_role_arn' => ServiceRole,
  ?'targets' => Targets,
  ?'task_arn' => MaintenanceWindowTaskArn,
  ?'task_invocation_parameters' => MaintenanceWindowTaskInvocationParameters,
  ?'task_parameters' => MaintenanceWindowTaskParameters,
  ?'task_type' => MaintenanceWindowTaskType,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->description = $description ?? "";
    $this->logging_info = $logging_info ?? null;
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->targets = $targets ?? [];
    $this->task_arn = $task_arn ?? "";
    $this->task_invocation_parameters = $task_invocation_parameters ?? null;
    $this->task_parameters = $task_parameters ?? [];
    $this->task_type = $task_type ?? "";
    $this->window_id = $window_id ?? "";
  }
}

class RegisterTaskWithMaintenanceWindowResult {
  public MaintenanceWindowTaskId $window_task_id;

  public function __construct(shape(
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->window_task_id = $window_task_id ?? "";
  }
}

type RegistrationLimit = int;

type RegistrationsCount = int;

class RelatedOpsItem {
  public string $ops_item_id;

  public function __construct(shape(
  ?'ops_item_id' => string,
  ) $s = shape()) {
    $this->ops_item_id = $ops_item_id ?? "";
  }
}

type RelatedOpsItems = vec<RelatedOpsItem>;

type RemainingCount = int;

class RemoveTagsFromResourceRequest {
  public ResourceId $resource_id;
  public ResourceTypeForTagging $resource_type;
  public KeyList $tag_keys;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ?'resource_type' => ResourceTypeForTagging,
  ?'tag_keys' => KeyList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class RemoveTagsFromResourceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ResetServiceSettingRequest {
  public ServiceSettingId $setting_id;

  public function __construct(shape(
  ?'setting_id' => ServiceSettingId,
  ) $s = shape()) {
    $this->setting_id = $setting_id ?? "";
  }
}

class ResetServiceSettingResult {
  public ServiceSetting $service_setting;

  public function __construct(shape(
  ?'service_setting' => ServiceSetting,
  ) $s = shape()) {
    $this->service_setting = $service_setting ?? null;
  }
}

class ResolvedTargets {
  public TargetParameterList $parameter_values;
  public boolean $truncated;

  public function __construct(shape(
  ?'parameter_values' => TargetParameterList,
  ?'truncated' => boolean,
  ) $s = shape()) {
    $this->parameter_values = $parameter_values ?? [];
    $this->truncated = $truncated ?? false;
  }
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

  public function __construct(shape(
  ?'compliance_type' => ComplianceTypeName,
  ?'compliant_summary' => CompliantSummary,
  ?'execution_summary' => ComplianceExecutionSummary,
  ?'non_compliant_summary' => NonCompliantSummary,
  ?'overall_severity' => ComplianceSeverity,
  ?'resource_id' => ComplianceResourceId,
  ?'resource_type' => ComplianceResourceType,
  ?'status' => ComplianceStatus,
  ) $s = shape()) {
    $this->compliance_type = $compliance_type ?? "";
    $this->compliant_summary = $compliant_summary ?? null;
    $this->execution_summary = $execution_summary ?? null;
    $this->non_compliant_summary = $non_compliant_summary ?? null;
    $this->overall_severity = $overall_severity ?? "";
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->status = $status ?? "";
  }
}

type ResourceComplianceSummaryItemList = vec<ResourceComplianceSummaryItem>;

type ResourceCount = int;

type ResourceCountByStatus = string;

type ResourceDataSyncAWSKMSKeyARN = string;

class ResourceDataSyncAlreadyExistsException {
  public ResourceDataSyncName $sync_name;

  public function __construct(shape(
  ?'sync_name' => ResourceDataSyncName,
  ) $s = shape()) {
    $this->sync_name = $sync_name ?? "";
  }
}

class ResourceDataSyncAwsOrganizationsSource {
  public ResourceDataSyncOrganizationSourceType $organization_source_type;
  public ResourceDataSyncOrganizationalUnitList $organizational_units;

  public function __construct(shape(
  ?'organization_source_type' => ResourceDataSyncOrganizationSourceType,
  ?'organizational_units' => ResourceDataSyncOrganizationalUnitList,
  ) $s = shape()) {
    $this->organization_source_type = $organization_source_type ?? "";
    $this->organizational_units = $organizational_units ?? [];
  }
}

class ResourceDataSyncConflictException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceDataSyncCountExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceDataSyncCreatedTime = int;

class ResourceDataSyncDestinationDataSharing {
  public ResourceDataSyncDestinationDataSharingType $destination_data_sharing_type;

  public function __construct(shape(
  ?'destination_data_sharing_type' => ResourceDataSyncDestinationDataSharingType,
  ) $s = shape()) {
    $this->destination_data_sharing_type = $destination_data_sharing_type ?? "";
  }
}

type ResourceDataSyncDestinationDataSharingType = string;

type ResourceDataSyncIncludeFutureRegions = bool;

class ResourceDataSyncInvalidConfigurationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'last_status' => LastResourceDataSyncStatus,
  ?'last_successful_sync_time' => LastSuccessfulResourceDataSyncTime,
  ?'last_sync_status_message' => LastResourceDataSyncMessage,
  ?'last_sync_time' => LastResourceDataSyncTime,
  ?'s_3_destination' => ResourceDataSyncS3Destination,
  ?'sync_created_time' => ResourceDataSyncCreatedTime,
  ?'sync_last_modified_time' => ResourceDataSyncLastModifiedTime,
  ?'sync_name' => ResourceDataSyncName,
  ?'sync_source' => ResourceDataSyncSourceWithState,
  ?'sync_type' => ResourceDataSyncType,
  ) $s = shape()) {
    $this->last_status = $last_status ?? "";
    $this->last_successful_sync_time = $last_successful_sync_time ?? 0;
    $this->last_sync_status_message = $last_sync_status_message ?? "";
    $this->last_sync_time = $last_sync_time ?? 0;
    $this->s_3_destination = $s_3_destination ?? null;
    $this->sync_created_time = $sync_created_time ?? 0;
    $this->sync_last_modified_time = $sync_last_modified_time ?? 0;
    $this->sync_name = $sync_name ?? "";
    $this->sync_source = $sync_source ?? null;
    $this->sync_type = $sync_type ?? "";
  }
}

type ResourceDataSyncItemList = vec<ResourceDataSyncItem>;

type ResourceDataSyncLastModifiedTime = int;

type ResourceDataSyncName = string;

class ResourceDataSyncNotFoundException {
  public string $message;
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncType $sync_type;

  public function __construct(shape(
  ?'message' => string,
  ?'sync_name' => ResourceDataSyncName,
  ?'sync_type' => ResourceDataSyncType,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->sync_name = $sync_name ?? "";
    $this->sync_type = $sync_type ?? "";
  }
}

type ResourceDataSyncOrganizationSourceType = string;

class ResourceDataSyncOrganizationalUnit {
  public ResourceDataSyncOrganizationalUnitId $organizational_unit_id;

  public function __construct(shape(
  ?'organizational_unit_id' => ResourceDataSyncOrganizationalUnitId,
  ) $s = shape()) {
    $this->organizational_unit_id = $organizational_unit_id ?? "";
  }
}

type ResourceDataSyncOrganizationalUnitId = string;

type ResourceDataSyncOrganizationalUnitList = vec<ResourceDataSyncOrganizationalUnit>;

type ResourceDataSyncS3BucketName = string;

class ResourceDataSyncS3Destination {
  public ResourceDataSyncAWSKMSKeyARN $awskms_key_arn;
  public ResourceDataSyncS3BucketName $bucket_name;
  public ResourceDataSyncDestinationDataSharing $destination_data_sharing;
  public ResourceDataSyncS3Prefix $prefix;
  public ResourceDataSyncS3Region $region;
  public ResourceDataSyncS3Format $sync_format;

  public function __construct(shape(
  ?'awskms_key_arn' => ResourceDataSyncAWSKMSKeyARN,
  ?'bucket_name' => ResourceDataSyncS3BucketName,
  ?'destination_data_sharing' => ResourceDataSyncDestinationDataSharing,
  ?'prefix' => ResourceDataSyncS3Prefix,
  ?'region' => ResourceDataSyncS3Region,
  ?'sync_format' => ResourceDataSyncS3Format,
  ) $s = shape()) {
    $this->awskms_key_arn = $awskms_key_arn ?? "";
    $this->bucket_name = $bucket_name ?? "";
    $this->destination_data_sharing = $destination_data_sharing ?? null;
    $this->prefix = $prefix ?? "";
    $this->region = $region ?? "";
    $this->sync_format = $sync_format ?? "";
  }
}

type ResourceDataSyncS3Format = string;

type ResourceDataSyncS3Prefix = string;

type ResourceDataSyncS3Region = string;

class ResourceDataSyncSource {
  public ResourceDataSyncAwsOrganizationsSource $aws_organizations_source;
  public ResourceDataSyncIncludeFutureRegions $include_future_regions;
  public ResourceDataSyncSourceRegionList $source_regions;
  public ResourceDataSyncSourceType $source_type;

  public function __construct(shape(
  ?'aws_organizations_source' => ResourceDataSyncAwsOrganizationsSource,
  ?'include_future_regions' => ResourceDataSyncIncludeFutureRegions,
  ?'source_regions' => ResourceDataSyncSourceRegionList,
  ?'source_type' => ResourceDataSyncSourceType,
  ) $s = shape()) {
    $this->aws_organizations_source = $aws_organizations_source ?? null;
    $this->include_future_regions = $include_future_regions ?? false;
    $this->source_regions = $source_regions ?? [];
    $this->source_type = $source_type ?? "";
  }
}

type ResourceDataSyncSourceRegion = string;

type ResourceDataSyncSourceRegionList = vec<ResourceDataSyncSourceRegion>;

type ResourceDataSyncSourceType = string;

class ResourceDataSyncSourceWithState {
  public ResourceDataSyncAwsOrganizationsSource $aws_organizations_source;
  public ResourceDataSyncIncludeFutureRegions $include_future_regions;
  public ResourceDataSyncSourceRegionList $source_regions;
  public ResourceDataSyncSourceType $source_type;
  public ResourceDataSyncState $state;

  public function __construct(shape(
  ?'aws_organizations_source' => ResourceDataSyncAwsOrganizationsSource,
  ?'include_future_regions' => ResourceDataSyncIncludeFutureRegions,
  ?'source_regions' => ResourceDataSyncSourceRegionList,
  ?'source_type' => ResourceDataSyncSourceType,
  ?'state' => ResourceDataSyncState,
  ) $s = shape()) {
    $this->aws_organizations_source = $aws_organizations_source ?? null;
    $this->include_future_regions = $include_future_regions ?? false;
    $this->source_regions = $source_regions ?? [];
    $this->source_type = $source_type ?? "";
    $this->state = $state ?? "";
  }
}

type ResourceDataSyncState = string;

type ResourceDataSyncType = string;

type ResourceId = string;

class ResourceInUseException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceType = string;

type ResourceTypeForTagging = string;

type ResponseCode = int;

class ResultAttribute {
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->type_name = $type_name ?? "";
  }
}

type ResultAttributeList = vec<ResultAttribute>;

class ResumeSessionRequest {
  public SessionId $session_id;

  public function __construct(shape(
  ?'session_id' => SessionId,
  ) $s = shape()) {
    $this->session_id = $session_id ?? "";
  }
}

class ResumeSessionResponse {
  public SessionId $session_id;
  public StreamUrl $stream_url;
  public TokenValue $token_value;

  public function __construct(shape(
  ?'session_id' => SessionId,
  ?'stream_url' => StreamUrl,
  ?'token_value' => TokenValue,
  ) $s = shape()) {
    $this->session_id = $session_id ?? "";
    $this->stream_url = $stream_url ?? "";
    $this->token_value = $token_value ?? "";
  }
}

type S3BucketName = string;

type S3KeyPrefix = string;

class S3OutputLocation {
  public S3BucketName $output_s_3_bucket_name;
  public S3KeyPrefix $output_s_3_key_prefix;
  public S3Region $output_s_3_region;

  public function __construct(shape(
  ?'output_s_3_bucket_name' => S3BucketName,
  ?'output_s_3_key_prefix' => S3KeyPrefix,
  ?'output_s_3_region' => S3Region,
  ) $s = shape()) {
    $this->output_s_3_bucket_name = $output_s_3_bucket_name ?? "";
    $this->output_s_3_key_prefix = $output_s_3_key_prefix ?? "";
    $this->output_s_3_region = $output_s_3_region ?? "";
  }
}

class S3OutputUrl {
  public Url $output_url;

  public function __construct(shape(
  ?'output_url' => Url,
  ) $s = shape()) {
    $this->output_url = $output_url ?? "";
  }
}

type S3Region = string;

type ScheduleExpression = string;

class ScheduledWindowExecution {
  public MaintenanceWindowStringDateTime $execution_time;
  public MaintenanceWindowName $name;
  public MaintenanceWindowId $window_id;

  public function __construct(shape(
  ?'execution_time' => MaintenanceWindowStringDateTime,
  ?'name' => MaintenanceWindowName,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->execution_time = $execution_time ?? "";
    $this->name = $name ?? "";
    $this->window_id = $window_id ?? "";
  }
}

type ScheduledWindowExecutionList = vec<ScheduledWindowExecution>;

class SendAutomationSignalRequest {
  public AutomationExecutionId $automation_execution_id;
  public AutomationParameterMap $payload;
  public SignalType $signal_type;

  public function __construct(shape(
  ?'automation_execution_id' => AutomationExecutionId,
  ?'payload' => AutomationParameterMap,
  ?'signal_type' => SignalType,
  ) $s = shape()) {
    $this->automation_execution_id = $automation_execution_id ?? "";
    $this->payload = $payload ?? [];
    $this->signal_type = $signal_type ?? "";
  }
}

class SendAutomationSignalResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'cloud_watch_output_config' => CloudWatchOutputConfig,
  ?'comment' => Comment,
  ?'document_hash' => DocumentHash,
  ?'document_hash_type' => DocumentHashType,
  ?'document_name' => DocumentARN,
  ?'document_version' => DocumentVersion,
  ?'instance_ids' => InstanceIdList,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'notification_config' => NotificationConfig,
  ?'output_s_3_bucket_name' => S3BucketName,
  ?'output_s_3_key_prefix' => S3KeyPrefix,
  ?'output_s_3_region' => S3Region,
  ?'parameters' => Parameters,
  ?'service_role_arn' => ServiceRole,
  ?'targets' => Targets,
  ?'timeout_seconds' => TimeoutSeconds,
  ) $s = shape()) {
    $this->cloud_watch_output_config = $cloud_watch_output_config ?? null;
    $this->comment = $comment ?? "";
    $this->document_hash = $document_hash ?? "";
    $this->document_hash_type = $document_hash_type ?? "";
    $this->document_name = $document_name ?? "";
    $this->document_version = $document_version ?? "";
    $this->instance_ids = $instance_ids ?? [];
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->notification_config = $notification_config ?? null;
    $this->output_s_3_bucket_name = $output_s_3_bucket_name ?? "";
    $this->output_s_3_key_prefix = $output_s_3_key_prefix ?? "";
    $this->output_s_3_region = $output_s_3_region ?? "";
    $this->parameters = $parameters ?? [];
    $this->service_role_arn = $service_role_arn ?? "";
    $this->targets = $targets ?? [];
    $this->timeout_seconds = $timeout_seconds ?? 0;
  }
}

class SendCommandResult {
  public Command $command;

  public function __construct(shape(
  ?'command' => Command,
  ) $s = shape()) {
    $this->command = $command ?? null;
  }
}

type ServiceRole = string;

class ServiceSetting {
  public string $arn;
  public DateTime $last_modified_date;
  public string $last_modified_user;
  public ServiceSettingId $setting_id;
  public ServiceSettingValue $setting_value;
  public string $status;

  public function __construct(shape(
  ?'arn' => string,
  ?'last_modified_date' => DateTime,
  ?'last_modified_user' => string,
  ?'setting_id' => ServiceSettingId,
  ?'setting_value' => ServiceSettingValue,
  ?'status' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->last_modified_date = $last_modified_date ?? 0;
    $this->last_modified_user = $last_modified_user ?? "";
    $this->setting_id = $setting_id ?? "";
    $this->setting_value = $setting_value ?? "";
    $this->status = $status ?? "";
  }
}

type ServiceSettingId = string;

class ServiceSettingNotFound {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ServiceSettingValue = string;

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

  public function __construct(shape(
  ?'details' => SessionDetails,
  ?'document_name' => DocumentName,
  ?'end_date' => DateTime,
  ?'output_url' => SessionManagerOutputUrl,
  ?'owner' => SessionOwner,
  ?'session_id' => SessionId,
  ?'start_date' => DateTime,
  ?'status' => SessionStatus,
  ?'target' => SessionTarget,
  ) $s = shape()) {
    $this->details = $details ?? "";
    $this->document_name = $document_name ?? "";
    $this->end_date = $end_date ?? 0;
    $this->output_url = $output_url ?? null;
    $this->owner = $owner ?? "";
    $this->session_id = $session_id ?? "";
    $this->start_date = $start_date ?? 0;
    $this->status = $status ?? "";
    $this->target = $target ?? "";
  }
}

type SessionDetails = string;

class SessionFilter {
  public SessionFilterKey $key;
  public SessionFilterValue $value;

  public function __construct(shape(
  ?'key' => SessionFilterKey,
  ?'value' => SessionFilterValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type SessionFilterKey = string;

type SessionFilterList = vec<SessionFilter>;

type SessionFilterValue = string;

type SessionId = string;

type SessionList = vec<Session>;

type SessionManagerCloudWatchOutputUrl = string;

class SessionManagerOutputUrl {
  public SessionManagerCloudWatchOutputUrl $cloud_watch_output_url;
  public SessionManagerS3OutputUrl $s_3_output_url;

  public function __construct(shape(
  ?'cloud_watch_output_url' => SessionManagerCloudWatchOutputUrl,
  ?'s_3_output_url' => SessionManagerS3OutputUrl,
  ) $s = shape()) {
    $this->cloud_watch_output_url = $cloud_watch_output_url ?? "";
    $this->s_3_output_url = $s_3_output_url ?? "";
  }
}

type SessionManagerParameterName = string;

type SessionManagerParameterValue = string;

type SessionManagerParameterValueList = vec<SessionManagerParameterValue>;

type SessionManagerParameters = dict<SessionManagerParameterName, SessionManagerParameterValueList>;

type SessionManagerS3OutputUrl = string;

type SessionMaxResults = int;

type SessionOwner = string;

type SessionState = string;

type SessionStatus = string;

type SessionTarget = string;

class SeveritySummary {
  public ComplianceSummaryCount $critical_count;
  public ComplianceSummaryCount $high_count;
  public ComplianceSummaryCount $informational_count;
  public ComplianceSummaryCount $low_count;
  public ComplianceSummaryCount $medium_count;
  public ComplianceSummaryCount $unspecified_count;

  public function __construct(shape(
  ?'critical_count' => ComplianceSummaryCount,
  ?'high_count' => ComplianceSummaryCount,
  ?'informational_count' => ComplianceSummaryCount,
  ?'low_count' => ComplianceSummaryCount,
  ?'medium_count' => ComplianceSummaryCount,
  ?'unspecified_count' => ComplianceSummaryCount,
  ) $s = shape()) {
    $this->critical_count = $critical_count ?? 0;
    $this->high_count = $high_count ?? 0;
    $this->informational_count = $informational_count ?? 0;
    $this->low_count = $low_count ?? 0;
    $this->medium_count = $medium_count ?? 0;
    $this->unspecified_count = $unspecified_count ?? 0;
  }
}

type SharedDocumentVersion = string;

type SignalType = string;

type SnapshotDownloadUrl = string;

type SnapshotId = string;

type StandardErrorContent = string;

type StandardOutputContent = string;

class StartAssociationsOnceRequest {
  public AssociationIdList $association_ids;

  public function __construct(shape(
  ?'association_ids' => AssociationIdList,
  ) $s = shape()) {
    $this->association_ids = $association_ids ?? [];
  }
}

class StartAssociationsOnceResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'client_token' => IdempotencyToken,
  ?'document_name' => DocumentARN,
  ?'document_version' => DocumentVersion,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'mode' => ExecutionMode,
  ?'parameters' => AutomationParameterMap,
  ?'tags' => TagList,
  ?'target_locations' => TargetLocations,
  ?'target_maps' => TargetMaps,
  ?'target_parameter_name' => AutomationParameterKey,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->document_name = $document_name ?? "";
    $this->document_version = $document_version ?? "";
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->mode = $mode ?? "";
    $this->parameters = $parameters ?? [];
    $this->tags = $tags ?? [];
    $this->target_locations = $target_locations ?? [];
    $this->target_maps = $target_maps ?? [];
    $this->target_parameter_name = $target_parameter_name ?? "";
    $this->targets = $targets ?? [];
  }
}

class StartAutomationExecutionResult {
  public AutomationExecutionId $automation_execution_id;

  public function __construct(shape(
  ?'automation_execution_id' => AutomationExecutionId,
  ) $s = shape()) {
    $this->automation_execution_id = $automation_execution_id ?? "";
  }
}

class StartSessionRequest {
  public DocumentARN $document_name;
  public SessionManagerParameters $parameters;
  public SessionTarget $target;

  public function __construct(shape(
  ?'document_name' => DocumentARN,
  ?'parameters' => SessionManagerParameters,
  ?'target' => SessionTarget,
  ) $s = shape()) {
    $this->document_name = $document_name ?? "";
    $this->parameters = $parameters ?? [];
    $this->target = $target ?? "";
  }
}

class StartSessionResponse {
  public SessionId $session_id;
  public StreamUrl $stream_url;
  public TokenValue $token_value;

  public function __construct(shape(
  ?'session_id' => SessionId,
  ?'stream_url' => StreamUrl,
  ?'token_value' => TokenValue,
  ) $s = shape()) {
    $this->session_id = $session_id ?? "";
    $this->stream_url = $stream_url ?? "";
    $this->token_value = $token_value ?? "";
  }
}

type StatusAdditionalInfo = string;

type StatusDetails = string;

type StatusMessage = string;

type StatusName = string;

class StatusUnchanged {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'action' => AutomationActionName,
  ?'execution_end_time' => DateTime,
  ?'execution_start_time' => DateTime,
  ?'failure_details' => FailureDetails,
  ?'failure_message' => string,
  ?'inputs' => NormalStringMap,
  ?'is_critical' => boolean,
  ?'is_end' => boolean,
  ?'max_attempts' => int,
  ?'next_step' => string,
  ?'on_failure' => string,
  ?'outputs' => AutomationParameterMap,
  ?'overridden_parameters' => AutomationParameterMap,
  ?'response' => string,
  ?'response_code' => string,
  ?'step_execution_id' => string,
  ?'step_name' => string,
  ?'step_status' => AutomationExecutionStatus,
  ?'target_location' => TargetLocation,
  ?'targets' => Targets,
  ?'timeout_seconds' => Long,
  ?'valid_next_steps' => ValidNextStepList,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->execution_end_time = $execution_end_time ?? 0;
    $this->execution_start_time = $execution_start_time ?? 0;
    $this->failure_details = $failure_details ?? null;
    $this->failure_message = $failure_message ?? "";
    $this->inputs = $inputs ?? [];
    $this->is_critical = $is_critical ?? false;
    $this->is_end = $is_end ?? false;
    $this->max_attempts = $max_attempts ?? 0;
    $this->next_step = $next_step ?? "";
    $this->on_failure = $on_failure ?? "";
    $this->outputs = $outputs ?? [];
    $this->overridden_parameters = $overridden_parameters ?? [];
    $this->response = $response ?? "";
    $this->response_code = $response_code ?? "";
    $this->step_execution_id = $step_execution_id ?? "";
    $this->step_name = $step_name ?? "";
    $this->step_status = $step_status ?? "";
    $this->target_location = $target_location ?? null;
    $this->targets = $targets ?? [];
    $this->timeout_seconds = $timeout_seconds ?? 0;
    $this->valid_next_steps = $valid_next_steps ?? [];
  }
}

class StepExecutionFilter {
  public StepExecutionFilterKey $key;
  public StepExecutionFilterValueList $values;

  public function __construct(shape(
  ?'key' => StepExecutionFilterKey,
  ?'values' => StepExecutionFilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type StepExecutionFilterKey = string;

type StepExecutionFilterList = vec<StepExecutionFilter>;

type StepExecutionFilterValue = string;

type StepExecutionFilterValueList = vec<StepExecutionFilterValue>;

type StepExecutionList = vec<StepExecution>;

class StopAutomationExecutionRequest {
  public AutomationExecutionId $automation_execution_id;
  public StopType $type;

  public function __construct(shape(
  ?'automation_execution_id' => AutomationExecutionId,
  ?'type' => StopType,
  ) $s = shape()) {
    $this->automation_execution_id = $automation_execution_id ?? "";
    $this->type = $type ?? "";
  }
}

class StopAutomationExecutionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type StopType = string;

type StreamUrl = string;

type String = string;

type StringDateTime = string;

type StringList = vec<String>;

class SubTypeCountLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
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

type TagList = vec<Tag>;

type TagValue = string;

class Target {
  public TargetKey $key;
  public TargetValues $values;

  public function __construct(shape(
  ?'key' => TargetKey,
  ?'values' => TargetValues,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type TargetCount = int;

class TargetInUseException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TargetKey = string;

class TargetLocation {
  public Accounts $accounts;
  public ExecutionRoleName $execution_role_name;
  public Regions $regions;
  public MaxConcurrency $target_location_max_concurrency;
  public MaxErrors $target_location_max_errors;

  public function __construct(shape(
  ?'accounts' => Accounts,
  ?'execution_role_name' => ExecutionRoleName,
  ?'regions' => Regions,
  ?'target_location_max_concurrency' => MaxConcurrency,
  ?'target_location_max_errors' => MaxErrors,
  ) $s = shape()) {
    $this->accounts = $accounts ?? [];
    $this->execution_role_name = $execution_role_name ?? "";
    $this->regions = $regions ?? [];
    $this->target_location_max_concurrency = $target_location_max_concurrency ?? "";
    $this->target_location_max_errors = $target_location_max_errors ?? "";
  }
}

type TargetLocations = vec<TargetLocation>;

type TargetMap = dict<TargetMapKey, TargetMapValueList>;

type TargetMapKey = string;

type TargetMapValue = string;

type TargetMapValueList = vec<TargetMapValue>;

type TargetMaps = vec<TargetMap>;

class TargetNotConnected {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TargetParameterList = vec<ParameterValue>;

type TargetType = string;

type TargetValue = string;

type TargetValues = vec<TargetValue>;

type Targets = vec<Target>;

class TerminateSessionRequest {
  public SessionId $session_id;

  public function __construct(shape(
  ?'session_id' => SessionId,
  ) $s = shape()) {
    $this->session_id = $session_id ?? "";
  }
}

class TerminateSessionResponse {
  public SessionId $session_id;

  public function __construct(shape(
  ?'session_id' => SessionId,
  ) $s = shape()) {
    $this->session_id = $session_id ?? "";
  }
}

type TimeoutSeconds = int;

type TokenValue = string;

class TooManyTagsError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyUpdates {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TotalCount = int;

class TotalSizeLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnsupportedCalendarException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnsupportedFeatureRequiredException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnsupportedInventoryItemContextException {
  public string $message;
  public InventoryItemTypeName $type_name;

  public function __construct(shape(
  ?'message' => string,
  ?'type_name' => InventoryItemTypeName,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class UnsupportedInventorySchemaVersionException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnsupportedOperatingSystem {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnsupportedParameterType {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnsupportedPlatformType {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'association_id' => AssociationId,
  ?'association_name' => AssociationName,
  ?'association_version' => AssociationVersion,
  ?'automation_target_parameter_name' => AutomationTargetParameterName,
  ?'compliance_severity' => AssociationComplianceSeverity,
  ?'document_version' => DocumentVersion,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => DocumentARN,
  ?'output_location' => InstanceAssociationOutputLocation,
  ?'parameters' => Parameters,
  ?'schedule_expression' => ScheduleExpression,
  ?'targets' => Targets,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->association_name = $association_name ?? "";
    $this->association_version = $association_version ?? "";
    $this->automation_target_parameter_name = $automation_target_parameter_name ?? "";
    $this->compliance_severity = $compliance_severity ?? "";
    $this->document_version = $document_version ?? "";
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->output_location = $output_location ?? null;
    $this->parameters = $parameters ?? [];
    $this->schedule_expression = $schedule_expression ?? "";
    $this->targets = $targets ?? [];
  }
}

class UpdateAssociationResult {
  public AssociationDescription $association_description;

  public function __construct(shape(
  ?'association_description' => AssociationDescription,
  ) $s = shape()) {
    $this->association_description = $association_description ?? null;
  }
}

class UpdateAssociationStatusRequest {
  public AssociationStatus $association_status;
  public InstanceId $instance_id;
  public DocumentARN $name;

  public function __construct(shape(
  ?'association_status' => AssociationStatus,
  ?'instance_id' => InstanceId,
  ?'name' => DocumentARN,
  ) $s = shape()) {
    $this->association_status = $association_status ?? null;
    $this->instance_id = $instance_id ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateAssociationStatusResult {
  public AssociationDescription $association_description;

  public function __construct(shape(
  ?'association_description' => AssociationDescription,
  ) $s = shape()) {
    $this->association_description = $association_description ?? null;
  }
}

class UpdateDocumentDefaultVersionRequest {
  public DocumentVersionNumber $document_version;
  public DocumentName $name;

  public function __construct(shape(
  ?'document_version' => DocumentVersionNumber,
  ?'name' => DocumentName,
  ) $s = shape()) {
    $this->document_version = $document_version ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateDocumentDefaultVersionResult {
  public DocumentDefaultVersionDescription $description;

  public function __construct(shape(
  ?'description' => DocumentDefaultVersionDescription,
  ) $s = shape()) {
    $this->description = $description ?? null;
  }
}

class UpdateDocumentRequest {
  public AttachmentsSourceList $attachments;
  public DocumentContent $content;
  public DocumentFormat $document_format;
  public DocumentVersion $document_version;
  public DocumentName $name;
  public TargetType $target_type;
  public DocumentVersionName $version_name;

  public function __construct(shape(
  ?'attachments' => AttachmentsSourceList,
  ?'content' => DocumentContent,
  ?'document_format' => DocumentFormat,
  ?'document_version' => DocumentVersion,
  ?'name' => DocumentName,
  ?'target_type' => TargetType,
  ?'version_name' => DocumentVersionName,
  ) $s = shape()) {
    $this->attachments = $attachments ?? [];
    $this->content = $content ?? "";
    $this->document_format = $document_format ?? "";
    $this->document_version = $document_version ?? "";
    $this->name = $name ?? "";
    $this->target_type = $target_type ?? "";
    $this->version_name = $version_name ?? "";
  }
}

class UpdateDocumentResult {
  public DocumentDescription $document_description;

  public function __construct(shape(
  ?'document_description' => DocumentDescription,
  ) $s = shape()) {
    $this->document_description = $document_description ?? null;
  }
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

  public function __construct(shape(
  ?'allow_unassociated_targets' => MaintenanceWindowAllowUnassociatedTargets,
  ?'cutoff' => MaintenanceWindowCutoff,
  ?'description' => MaintenanceWindowDescription,
  ?'duration' => MaintenanceWindowDurationHours,
  ?'enabled' => MaintenanceWindowEnabled,
  ?'end_date' => MaintenanceWindowStringDateTime,
  ?'name' => MaintenanceWindowName,
  ?'replace' => boolean,
  ?'schedule' => MaintenanceWindowSchedule,
  ?'schedule_timezone' => MaintenanceWindowTimezone,
  ?'start_date' => MaintenanceWindowStringDateTime,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->allow_unassociated_targets = $allow_unassociated_targets ?? false;
    $this->cutoff = $cutoff ?? 0;
    $this->description = $description ?? "";
    $this->duration = $duration ?? 0;
    $this->enabled = $enabled ?? false;
    $this->end_date = $end_date ?? "";
    $this->name = $name ?? "";
    $this->replace = $replace ?? false;
    $this->schedule = $schedule ?? "";
    $this->schedule_timezone = $schedule_timezone ?? "";
    $this->start_date = $start_date ?? "";
    $this->window_id = $window_id ?? "";
  }
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

  public function __construct(shape(
  ?'allow_unassociated_targets' => MaintenanceWindowAllowUnassociatedTargets,
  ?'cutoff' => MaintenanceWindowCutoff,
  ?'description' => MaintenanceWindowDescription,
  ?'duration' => MaintenanceWindowDurationHours,
  ?'enabled' => MaintenanceWindowEnabled,
  ?'end_date' => MaintenanceWindowStringDateTime,
  ?'name' => MaintenanceWindowName,
  ?'schedule' => MaintenanceWindowSchedule,
  ?'schedule_timezone' => MaintenanceWindowTimezone,
  ?'start_date' => MaintenanceWindowStringDateTime,
  ?'window_id' => MaintenanceWindowId,
  ) $s = shape()) {
    $this->allow_unassociated_targets = $allow_unassociated_targets ?? false;
    $this->cutoff = $cutoff ?? 0;
    $this->description = $description ?? "";
    $this->duration = $duration ?? 0;
    $this->enabled = $enabled ?? false;
    $this->end_date = $end_date ?? "";
    $this->name = $name ?? "";
    $this->schedule = $schedule ?? "";
    $this->schedule_timezone = $schedule_timezone ?? "";
    $this->start_date = $start_date ?? "";
    $this->window_id = $window_id ?? "";
  }
}

class UpdateMaintenanceWindowTargetRequest {
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public boolean $replace;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;

  public function __construct(shape(
  ?'description' => MaintenanceWindowDescription,
  ?'name' => MaintenanceWindowName,
  ?'owner_information' => OwnerInformation,
  ?'replace' => boolean,
  ?'targets' => Targets,
  ?'window_id' => MaintenanceWindowId,
  ?'window_target_id' => MaintenanceWindowTargetId,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->owner_information = $owner_information ?? "";
    $this->replace = $replace ?? false;
    $this->targets = $targets ?? [];
    $this->window_id = $window_id ?? "";
    $this->window_target_id = $window_target_id ?? "";
  }
}

class UpdateMaintenanceWindowTargetResult {
  public MaintenanceWindowDescription $description;
  public MaintenanceWindowName $name;
  public OwnerInformation $owner_information;
  public Targets $targets;
  public MaintenanceWindowId $window_id;
  public MaintenanceWindowTargetId $window_target_id;

  public function __construct(shape(
  ?'description' => MaintenanceWindowDescription,
  ?'name' => MaintenanceWindowName,
  ?'owner_information' => OwnerInformation,
  ?'targets' => Targets,
  ?'window_id' => MaintenanceWindowId,
  ?'window_target_id' => MaintenanceWindowTargetId,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->owner_information = $owner_information ?? "";
    $this->targets = $targets ?? [];
    $this->window_id = $window_id ?? "";
    $this->window_target_id = $window_target_id ?? "";
  }
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

  public function __construct(shape(
  ?'description' => MaintenanceWindowDescription,
  ?'logging_info' => LoggingInfo,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => MaintenanceWindowName,
  ?'priority' => MaintenanceWindowTaskPriority,
  ?'replace' => boolean,
  ?'service_role_arn' => ServiceRole,
  ?'targets' => Targets,
  ?'task_arn' => MaintenanceWindowTaskArn,
  ?'task_invocation_parameters' => MaintenanceWindowTaskInvocationParameters,
  ?'task_parameters' => MaintenanceWindowTaskParameters,
  ?'window_id' => MaintenanceWindowId,
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->logging_info = $logging_info ?? null;
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->replace = $replace ?? false;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->targets = $targets ?? [];
    $this->task_arn = $task_arn ?? "";
    $this->task_invocation_parameters = $task_invocation_parameters ?? null;
    $this->task_parameters = $task_parameters ?? [];
    $this->window_id = $window_id ?? "";
    $this->window_task_id = $window_task_id ?? "";
  }
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

  public function __construct(shape(
  ?'description' => MaintenanceWindowDescription,
  ?'logging_info' => LoggingInfo,
  ?'max_concurrency' => MaxConcurrency,
  ?'max_errors' => MaxErrors,
  ?'name' => MaintenanceWindowName,
  ?'priority' => MaintenanceWindowTaskPriority,
  ?'service_role_arn' => ServiceRole,
  ?'targets' => Targets,
  ?'task_arn' => MaintenanceWindowTaskArn,
  ?'task_invocation_parameters' => MaintenanceWindowTaskInvocationParameters,
  ?'task_parameters' => MaintenanceWindowTaskParameters,
  ?'window_id' => MaintenanceWindowId,
  ?'window_task_id' => MaintenanceWindowTaskId,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->logging_info = $logging_info ?? null;
    $this->max_concurrency = $max_concurrency ?? "";
    $this->max_errors = $max_errors ?? "";
    $this->name = $name ?? "";
    $this->priority = $priority ?? 0;
    $this->service_role_arn = $service_role_arn ?? "";
    $this->targets = $targets ?? [];
    $this->task_arn = $task_arn ?? "";
    $this->task_invocation_parameters = $task_invocation_parameters ?? null;
    $this->task_parameters = $task_parameters ?? [];
    $this->window_id = $window_id ?? "";
    $this->window_task_id = $window_task_id ?? "";
  }
}

class UpdateManagedInstanceRoleRequest {
  public IamRole $iam_role;
  public ManagedInstanceId $instance_id;

  public function __construct(shape(
  ?'iam_role' => IamRole,
  ?'instance_id' => ManagedInstanceId,
  ) $s = shape()) {
    $this->iam_role = $iam_role ?? "";
    $this->instance_id = $instance_id ?? "";
  }
}

class UpdateManagedInstanceRoleResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'category' => OpsItemCategory,
  ?'description' => OpsItemDescription,
  ?'notifications' => OpsItemNotifications,
  ?'operational_data' => OpsItemOperationalData,
  ?'operational_data_to_delete' => OpsItemOpsDataKeysList,
  ?'ops_item_id' => OpsItemId,
  ?'priority' => OpsItemPriority,
  ?'related_ops_items' => RelatedOpsItems,
  ?'severity' => OpsItemSeverity,
  ?'status' => OpsItemStatus,
  ?'title' => OpsItemTitle,
  ) $s = shape()) {
    $this->category = $category ?? "";
    $this->description = $description ?? "";
    $this->notifications = $notifications ?? [];
    $this->operational_data = $operational_data ?? [];
    $this->operational_data_to_delete = $operational_data_to_delete ?? [];
    $this->ops_item_id = $ops_item_id ?? "";
    $this->priority = $priority ?? 0;
    $this->related_ops_items = $related_ops_items ?? [];
    $this->severity = $severity ?? "";
    $this->status = $status ?? "";
    $this->title = $title ?? "";
  }
}

class UpdateOpsItemResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'approval_rules' => PatchRuleGroup,
  ?'approved_patches' => PatchIdList,
  ?'approved_patches_compliance_level' => PatchComplianceLevel,
  ?'approved_patches_enable_non_security' => boolean,
  ?'baseline_id' => BaselineId,
  ?'description' => BaselineDescription,
  ?'global_filters' => PatchFilterGroup,
  ?'name' => BaselineName,
  ?'rejected_patches' => PatchIdList,
  ?'rejected_patches_action' => PatchAction,
  ?'replace' => boolean,
  ?'sources' => PatchSourceList,
  ) $s = shape()) {
    $this->approval_rules = $approval_rules ?? null;
    $this->approved_patches = $approved_patches ?? [];
    $this->approved_patches_compliance_level = $approved_patches_compliance_level ?? "";
    $this->approved_patches_enable_non_security = $approved_patches_enable_non_security ?? false;
    $this->baseline_id = $baseline_id ?? "";
    $this->description = $description ?? "";
    $this->global_filters = $global_filters ?? null;
    $this->name = $name ?? "";
    $this->rejected_patches = $rejected_patches ?? [];
    $this->rejected_patches_action = $rejected_patches_action ?? "";
    $this->replace = $replace ?? false;
    $this->sources = $sources ?? [];
  }
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

  public function __construct(shape(
  ?'approval_rules' => PatchRuleGroup,
  ?'approved_patches' => PatchIdList,
  ?'approved_patches_compliance_level' => PatchComplianceLevel,
  ?'approved_patches_enable_non_security' => boolean,
  ?'baseline_id' => BaselineId,
  ?'created_date' => DateTime,
  ?'description' => BaselineDescription,
  ?'global_filters' => PatchFilterGroup,
  ?'modified_date' => DateTime,
  ?'name' => BaselineName,
  ?'operating_system' => OperatingSystem,
  ?'rejected_patches' => PatchIdList,
  ?'rejected_patches_action' => PatchAction,
  ?'sources' => PatchSourceList,
  ) $s = shape()) {
    $this->approval_rules = $approval_rules ?? null;
    $this->approved_patches = $approved_patches ?? [];
    $this->approved_patches_compliance_level = $approved_patches_compliance_level ?? "";
    $this->approved_patches_enable_non_security = $approved_patches_enable_non_security ?? false;
    $this->baseline_id = $baseline_id ?? "";
    $this->created_date = $created_date ?? 0;
    $this->description = $description ?? "";
    $this->global_filters = $global_filters ?? null;
    $this->modified_date = $modified_date ?? 0;
    $this->name = $name ?? "";
    $this->operating_system = $operating_system ?? "";
    $this->rejected_patches = $rejected_patches ?? [];
    $this->rejected_patches_action = $rejected_patches_action ?? "";
    $this->sources = $sources ?? [];
  }
}

class UpdateResourceDataSyncRequest {
  public ResourceDataSyncName $sync_name;
  public ResourceDataSyncSource $sync_source;
  public ResourceDataSyncType $sync_type;

  public function __construct(shape(
  ?'sync_name' => ResourceDataSyncName,
  ?'sync_source' => ResourceDataSyncSource,
  ?'sync_type' => ResourceDataSyncType,
  ) $s = shape()) {
    $this->sync_name = $sync_name ?? "";
    $this->sync_source = $sync_source ?? null;
    $this->sync_type = $sync_type ?? "";
  }
}

class UpdateResourceDataSyncResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateServiceSettingRequest {
  public ServiceSettingId $setting_id;
  public ServiceSettingValue $setting_value;

  public function __construct(shape(
  ?'setting_id' => ServiceSettingId,
  ?'setting_value' => ServiceSettingValue,
  ) $s = shape()) {
    $this->setting_id = $setting_id ?? "";
    $this->setting_value = $setting_value ?? "";
  }
}

class UpdateServiceSettingResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Url = string;

type ValidNextStep = string;

type ValidNextStepList = vec<ValidNextStep>;

type Version = string;

