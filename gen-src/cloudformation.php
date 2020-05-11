<?hh // strict
namespace slack\aws\cloudformation;

interface CloudFormation {
  public function CancelUpdateStack(CancelUpdateStackInput): Awaitable<Errors\Error>;
  public function ContinueUpdateRollback(ContinueUpdateRollbackInput): Awaitable<Errors\Result<ContinueUpdateRollbackOutput>>;
  public function CreateChangeSet(CreateChangeSetInput): Awaitable<Errors\Result<CreateChangeSetOutput>>;
  public function CreateStack(CreateStackInput): Awaitable<Errors\Result<CreateStackOutput>>;
  public function CreateStackInstances(CreateStackInstancesInput): Awaitable<Errors\Result<CreateStackInstancesOutput>>;
  public function CreateStackSet(CreateStackSetInput): Awaitable<Errors\Result<CreateStackSetOutput>>;
  public function DeleteChangeSet(DeleteChangeSetInput): Awaitable<Errors\Result<DeleteChangeSetOutput>>;
  public function DeleteStack(DeleteStackInput): Awaitable<Errors\Error>;
  public function DeleteStackInstances(DeleteStackInstancesInput): Awaitable<Errors\Result<DeleteStackInstancesOutput>>;
  public function DeleteStackSet(DeleteStackSetInput): Awaitable<Errors\Result<DeleteStackSetOutput>>;
  public function DeregisterType(DeregisterTypeInput): Awaitable<Errors\Result<DeregisterTypeOutput>>;
  public function DescribeAccountLimits(DescribeAccountLimitsInput): Awaitable<Errors\Result<DescribeAccountLimitsOutput>>;
  public function DescribeChangeSet(DescribeChangeSetInput): Awaitable<Errors\Result<DescribeChangeSetOutput>>;
  public function DescribeStackDriftDetectionStatus(DescribeStackDriftDetectionStatusInput): Awaitable<Errors\Result<DescribeStackDriftDetectionStatusOutput>>;
  public function DescribeStackEvents(DescribeStackEventsInput): Awaitable<Errors\Result<DescribeStackEventsOutput>>;
  public function DescribeStackInstance(DescribeStackInstanceInput): Awaitable<Errors\Result<DescribeStackInstanceOutput>>;
  public function DescribeStackResource(DescribeStackResourceInput): Awaitable<Errors\Result<DescribeStackResourceOutput>>;
  public function DescribeStackResourceDrifts(DescribeStackResourceDriftsInput): Awaitable<Errors\Result<DescribeStackResourceDriftsOutput>>;
  public function DescribeStackResources(DescribeStackResourcesInput): Awaitable<Errors\Result<DescribeStackResourcesOutput>>;
  public function DescribeStackSet(DescribeStackSetInput): Awaitable<Errors\Result<DescribeStackSetOutput>>;
  public function DescribeStackSetOperation(DescribeStackSetOperationInput): Awaitable<Errors\Result<DescribeStackSetOperationOutput>>;
  public function DescribeStacks(DescribeStacksInput): Awaitable<Errors\Result<DescribeStacksOutput>>;
  public function DescribeType(DescribeTypeInput): Awaitable<Errors\Result<DescribeTypeOutput>>;
  public function DescribeTypeRegistration(DescribeTypeRegistrationInput): Awaitable<Errors\Result<DescribeTypeRegistrationOutput>>;
  public function DetectStackDrift(DetectStackDriftInput): Awaitable<Errors\Result<DetectStackDriftOutput>>;
  public function DetectStackResourceDrift(DetectStackResourceDriftInput): Awaitable<Errors\Result<DetectStackResourceDriftOutput>>;
  public function DetectStackSetDrift(DetectStackSetDriftInput): Awaitable<Errors\Result<DetectStackSetDriftOutput>>;
  public function EstimateTemplateCost(EstimateTemplateCostInput): Awaitable<Errors\Result<EstimateTemplateCostOutput>>;
  public function ExecuteChangeSet(ExecuteChangeSetInput): Awaitable<Errors\Result<ExecuteChangeSetOutput>>;
  public function GetStackPolicy(GetStackPolicyInput): Awaitable<Errors\Result<GetStackPolicyOutput>>;
  public function GetTemplate(GetTemplateInput): Awaitable<Errors\Result<GetTemplateOutput>>;
  public function GetTemplateSummary(GetTemplateSummaryInput): Awaitable<Errors\Result<GetTemplateSummaryOutput>>;
  public function ListChangeSets(ListChangeSetsInput): Awaitable<Errors\Result<ListChangeSetsOutput>>;
  public function ListExports(ListExportsInput): Awaitable<Errors\Result<ListExportsOutput>>;
  public function ListImports(ListImportsInput): Awaitable<Errors\Result<ListImportsOutput>>;
  public function ListStackInstances(ListStackInstancesInput): Awaitable<Errors\Result<ListStackInstancesOutput>>;
  public function ListStackResources(ListStackResourcesInput): Awaitable<Errors\Result<ListStackResourcesOutput>>;
  public function ListStackSetOperationResults(ListStackSetOperationResultsInput): Awaitable<Errors\Result<ListStackSetOperationResultsOutput>>;
  public function ListStackSetOperations(ListStackSetOperationsInput): Awaitable<Errors\Result<ListStackSetOperationsOutput>>;
  public function ListStackSets(ListStackSetsInput): Awaitable<Errors\Result<ListStackSetsOutput>>;
  public function ListStacks(ListStacksInput): Awaitable<Errors\Result<ListStacksOutput>>;
  public function ListTypeRegistrations(ListTypeRegistrationsInput): Awaitable<Errors\Result<ListTypeRegistrationsOutput>>;
  public function ListTypeVersions(ListTypeVersionsInput): Awaitable<Errors\Result<ListTypeVersionsOutput>>;
  public function ListTypes(ListTypesInput): Awaitable<Errors\Result<ListTypesOutput>>;
  public function RecordHandlerProgress(RecordHandlerProgressInput): Awaitable<Errors\Result<RecordHandlerProgressOutput>>;
  public function RegisterType(RegisterTypeInput): Awaitable<Errors\Result<RegisterTypeOutput>>;
  public function SetStackPolicy(SetStackPolicyInput): Awaitable<Errors\Error>;
  public function SetTypeDefaultVersion(SetTypeDefaultVersionInput): Awaitable<Errors\Result<SetTypeDefaultVersionOutput>>;
  public function SignalResource(SignalResourceInput): Awaitable<Errors\Error>;
  public function StopStackSetOperation(StopStackSetOperationInput): Awaitable<Errors\Result<StopStackSetOperationOutput>>;
  public function UpdateStack(UpdateStackInput): Awaitable<Errors\Result<UpdateStackOutput>>;
  public function UpdateStackInstances(UpdateStackInstancesInput): Awaitable<Errors\Result<UpdateStackInstancesOutput>>;
  public function UpdateStackSet(UpdateStackSetInput): Awaitable<Errors\Result<UpdateStackSetOutput>>;
  public function UpdateTerminationProtection(UpdateTerminationProtectionInput): Awaitable<Errors\Result<UpdateTerminationProtectionOutput>>;
  public function ValidateTemplate(ValidateTemplateInput): Awaitable<Errors\Result<ValidateTemplateOutput>>;
}

type Account = string;

class AccountGateResult {
  public AccountGateStatus $status;
  public AccountGateStatusReason $status_reason;

  public function __construct(shape(
  ?'status' => AccountGateStatus,
  ?'status_reason' => AccountGateStatusReason,
  ) $s = shape()) {
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
  }
}

type AccountGateStatus = string;

type AccountGateStatusReason = string;

class AccountLimit {
  public LimitName $name;
  public LimitValue $value;

  public function __construct(shape(
  ?'name' => LimitName,
  ?'value' => LimitValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? 0;
  }
}

type AccountLimitList = vec<AccountLimit>;

type AccountList = vec<Account>;

type AllowedValue = string;

type AllowedValues = vec<AllowedValue>;

class AlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Arn = string;

class AutoDeployment {
  public AutoDeploymentNullable $enabled;
  public RetainStacksOnAccountRemovalNullable $retain_stacks_on_account_removal;

  public function __construct(shape(
  ?'enabled' => AutoDeploymentNullable,
  ?'retain_stacks_on_account_removal' => RetainStacksOnAccountRemovalNullable,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
    $this->retain_stacks_on_account_removal = $retain_stacks_on_account_removal ?? false;
  }
}

type AutoDeploymentNullable = bool;

type BoxedInteger = int;

type BoxedMaxResults = int;

class CFNRegistryException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CancelUpdateStackInput {
  public ClientRequestToken $client_request_token;
  public StackName $stack_name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

type Capabilities = vec<Capability>;

type CapabilitiesReason = string;

type Capability = string;

type CausingEntity = string;

class Change {
  public ResourceChange $resource_change;
  public ChangeType $type;

  public function __construct(shape(
  ?'resource_change' => ResourceChange,
  ?'type' => ChangeType,
  ) $s = shape()) {
    $this->resource_change = $resource_change ?? null;
    $this->type = $type ?? "";
  }
}

type ChangeAction = string;

type ChangeSetId = string;

type ChangeSetName = string;

type ChangeSetNameOrId = string;

class ChangeSetNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ChangeSetStatus = string;

type ChangeSetStatusReason = string;

type ChangeSetSummaries = vec<ChangeSetSummary>;

class ChangeSetSummary {
  public ChangeSetId $change_set_id;
  public ChangeSetName $change_set_name;
  public CreationTime $creation_time;
  public Description $description;
  public ExecutionStatus $execution_status;
  public StackId $stack_id;
  public StackName $stack_name;
  public ChangeSetStatus $status;
  public ChangeSetStatusReason $status_reason;

  public function __construct(shape(
  ?'change_set_id' => ChangeSetId,
  ?'change_set_name' => ChangeSetName,
  ?'creation_time' => CreationTime,
  ?'description' => Description,
  ?'execution_status' => ExecutionStatus,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ?'status' => ChangeSetStatus,
  ?'status_reason' => ChangeSetStatusReason,
  ) $s = shape()) {
    $this->change_set_id = $change_set_id ?? "";
    $this->change_set_name = $change_set_name ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->description = $description ?? "";
    $this->execution_status = $execution_status ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
  }
}

type ChangeSetType = string;

type ChangeSource = string;

type ChangeType = string;

type Changes = vec<Change>;

type ClientRequestToken = string;

type ClientToken = string;

class ContinueUpdateRollbackInput {
  public ClientRequestToken $client_request_token;
  public ResourcesToSkip $resources_to_skip;
  public RoleARN $role_arn;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'resources_to_skip' => ResourcesToSkip,
  ?'role_arn' => RoleARN,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->resources_to_skip = $resources_to_skip ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class ContinueUpdateRollbackOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateChangeSetInput {
  public Capabilities $capabilities;
  public ChangeSetName $change_set_name;
  public ChangeSetType $change_set_type;
  public ClientToken $client_token;
  public Description $description;
  public NotificationARNs $notification_ar_ns;
  public Parameters $parameters;
  public ResourceTypes $resource_types;
  public ResourcesToImport $resources_to_import;
  public RoleARN $role_arn;
  public RollbackConfiguration $rollback_configuration;
  public StackNameOrId $stack_name;
  public Tags $tags;
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public UsePreviousTemplate $use_previous_template;

  public function __construct(shape(
  ?'capabilities' => Capabilities,
  ?'change_set_name' => ChangeSetName,
  ?'change_set_type' => ChangeSetType,
  ?'client_token' => ClientToken,
  ?'description' => Description,
  ?'notification_ar_ns' => NotificationARNs,
  ?'parameters' => Parameters,
  ?'resource_types' => ResourceTypes,
  ?'resources_to_import' => ResourcesToImport,
  ?'role_arn' => RoleARN,
  ?'rollback_configuration' => RollbackConfiguration,
  ?'stack_name' => StackNameOrId,
  ?'tags' => Tags,
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ?'use_previous_template' => UsePreviousTemplate,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->change_set_name = $change_set_name ?? "";
    $this->change_set_type = $change_set_type ?? "";
    $this->client_token = $client_token ?? "";
    $this->description = $description ?? "";
    $this->notification_ar_ns = $notification_ar_ns ?? [];
    $this->parameters = $parameters ?? [];
    $this->resource_types = $resource_types ?? [];
    $this->resources_to_import = $resources_to_import ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->rollback_configuration = $rollback_configuration ?? null;
    $this->stack_name = $stack_name ?? "";
    $this->tags = $tags ?? [];
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
    $this->use_previous_template = $use_previous_template ?? false;
  }
}

class CreateChangeSetOutput {
  public ChangeSetId $id;
  public StackId $stack_id;

  public function __construct(shape(
  ?'id' => ChangeSetId,
  ?'stack_id' => StackId,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->stack_id = $stack_id ?? "";
  }
}

class CreateStackInput {
  public Capabilities $capabilities;
  public ClientRequestToken $client_request_token;
  public DisableRollback $disable_rollback;
  public EnableTerminationProtection $enable_termination_protection;
  public NotificationARNs $notification_ar_ns;
  public OnFailure $on_failure;
  public Parameters $parameters;
  public ResourceTypes $resource_types;
  public RoleARN $role_arn;
  public RollbackConfiguration $rollback_configuration;
  public StackName $stack_name;
  public StackPolicyBody $stack_policy_body;
  public StackPolicyURL $stack_policy_url;
  public Tags $tags;
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public TimeoutMinutes $timeout_in_minutes;

  public function __construct(shape(
  ?'capabilities' => Capabilities,
  ?'client_request_token' => ClientRequestToken,
  ?'disable_rollback' => DisableRollback,
  ?'enable_termination_protection' => EnableTerminationProtection,
  ?'notification_ar_ns' => NotificationARNs,
  ?'on_failure' => OnFailure,
  ?'parameters' => Parameters,
  ?'resource_types' => ResourceTypes,
  ?'role_arn' => RoleARN,
  ?'rollback_configuration' => RollbackConfiguration,
  ?'stack_name' => StackName,
  ?'stack_policy_body' => StackPolicyBody,
  ?'stack_policy_url' => StackPolicyURL,
  ?'tags' => Tags,
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ?'timeout_in_minutes' => TimeoutMinutes,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->client_request_token = $client_request_token ?? "";
    $this->disable_rollback = $disable_rollback ?? false;
    $this->enable_termination_protection = $enable_termination_protection ?? false;
    $this->notification_ar_ns = $notification_ar_ns ?? [];
    $this->on_failure = $on_failure ?? "";
    $this->parameters = $parameters ?? [];
    $this->resource_types = $resource_types ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->rollback_configuration = $rollback_configuration ?? null;
    $this->stack_name = $stack_name ?? "";
    $this->stack_policy_body = $stack_policy_body ?? "";
    $this->stack_policy_url = $stack_policy_url ?? "";
    $this->tags = $tags ?? [];
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
    $this->timeout_in_minutes = $timeout_in_minutes ?? 0;
  }
}

class CreateStackInstancesInput {
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public Parameters $parameter_overrides;
  public RegionList $regions;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'accounts' => AccountList,
  ?'deployment_targets' => DeploymentTargets,
  ?'operation_id' => ClientRequestToken,
  ?'operation_preferences' => StackSetOperationPreferences,
  ?'parameter_overrides' => Parameters,
  ?'regions' => RegionList,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->accounts = $accounts ?? [];
    $this->deployment_targets = $deployment_targets ?? null;
    $this->operation_id = $operation_id ?? "";
    $this->operation_preferences = $operation_preferences ?? null;
    $this->parameter_overrides = $parameter_overrides ?? [];
    $this->regions = $regions ?? [];
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class CreateStackInstancesOutput {
  public ClientRequestToken $operation_id;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class CreateStackOutput {
  public StackId $stack_id;

  public function __construct(shape(
  ?'stack_id' => StackId,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? "";
  }
}

class CreateStackSetInput {
  public RoleARN $administration_role_arn;
  public AutoDeployment $auto_deployment;
  public Capabilities $capabilities;
  public ClientRequestToken $client_request_token;
  public Description $description;
  public ExecutionRoleName $execution_role_name;
  public Parameters $parameters;
  public PermissionModels $permission_model;
  public StackSetName $stack_set_name;
  public Tags $tags;
  public TemplateBody $template_body;
  public TemplateURL $template_url;

  public function __construct(shape(
  ?'administration_role_arn' => RoleARN,
  ?'auto_deployment' => AutoDeployment,
  ?'capabilities' => Capabilities,
  ?'client_request_token' => ClientRequestToken,
  ?'description' => Description,
  ?'execution_role_name' => ExecutionRoleName,
  ?'parameters' => Parameters,
  ?'permission_model' => PermissionModels,
  ?'stack_set_name' => StackSetName,
  ?'tags' => Tags,
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ) $s = shape()) {
    $this->administration_role_arn = $administration_role_arn ?? "";
    $this->auto_deployment = $auto_deployment ?? null;
    $this->capabilities = $capabilities ?? [];
    $this->client_request_token = $client_request_token ?? "";
    $this->description = $description ?? "";
    $this->execution_role_name = $execution_role_name ?? "";
    $this->parameters = $parameters ?? [];
    $this->permission_model = $permission_model ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
    $this->tags = $tags ?? [];
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class CreateStackSetOutput {
  public StackSetId $stack_set_id;

  public function __construct(shape(
  ?'stack_set_id' => StackSetId,
  ) $s = shape()) {
    $this->stack_set_id = $stack_set_id ?? "";
  }
}

class CreatedButModifiedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CreationTime = int;

class DeleteChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'change_set_name' => ChangeSetNameOrId,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->change_set_name = $change_set_name ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DeleteChangeSetOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteStackInput {
  public ClientRequestToken $client_request_token;
  public RetainResources $retain_resources;
  public RoleARN $role_arn;
  public StackName $stack_name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'retain_resources' => RetainResources,
  ?'role_arn' => RoleARN,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->retain_resources = $retain_resources ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DeleteStackInstancesInput {
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public RegionList $regions;
  public RetainStacks $retain_stacks;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'accounts' => AccountList,
  ?'deployment_targets' => DeploymentTargets,
  ?'operation_id' => ClientRequestToken,
  ?'operation_preferences' => StackSetOperationPreferences,
  ?'regions' => RegionList,
  ?'retain_stacks' => RetainStacks,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->accounts = $accounts ?? [];
    $this->deployment_targets = $deployment_targets ?? null;
    $this->operation_id = $operation_id ?? "";
    $this->operation_preferences = $operation_preferences ?? null;
    $this->regions = $regions ?? [];
    $this->retain_stacks = $retain_stacks ?? false;
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class DeleteStackInstancesOutput {
  public ClientRequestToken $operation_id;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class DeleteStackSetInput {
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class DeleteStackSetOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DeletionTime = int;

class DeploymentTargets {
  public AccountList $accounts;
  public OrganizationalUnitIdList $organizational_unit_ids;

  public function __construct(shape(
  ?'accounts' => AccountList,
  ?'organizational_unit_ids' => OrganizationalUnitIdList,
  ) $s = shape()) {
    $this->accounts = $accounts ?? [];
    $this->organizational_unit_ids = $organizational_unit_ids ?? [];
  }
}

type DeprecatedStatus = string;

class DeregisterTypeInput {
  public PrivateTypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;

  public function __construct(shape(
  ?'arn' => PrivateTypeArn,
  ?'type' => RegistryType,
  ?'type_name' => TypeName,
  ?'version_id' => TypeVersionId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->type = $type ?? "";
    $this->type_name = $type_name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeregisterTypeOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountLimitsInput {
  public NextToken $next_token;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class DescribeAccountLimitsOutput {
  public AccountLimitList $account_limits;
  public NextToken $next_token;

  public function __construct(shape(
  ?'account_limits' => AccountLimitList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->account_limits = $account_limits ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public NextToken $next_token;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'change_set_name' => ChangeSetNameOrId,
  ?'next_token' => NextToken,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->change_set_name = $change_set_name ?? "";
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DescribeChangeSetOutput {
  public Capabilities $capabilities;
  public ChangeSetId $change_set_id;
  public ChangeSetName $change_set_name;
  public Changes $changes;
  public CreationTime $creation_time;
  public Description $description;
  public ExecutionStatus $execution_status;
  public NextToken $next_token;
  public NotificationARNs $notification_ar_ns;
  public Parameters $parameters;
  public RollbackConfiguration $rollback_configuration;
  public StackId $stack_id;
  public StackName $stack_name;
  public ChangeSetStatus $status;
  public ChangeSetStatusReason $status_reason;
  public Tags $tags;

  public function __construct(shape(
  ?'capabilities' => Capabilities,
  ?'change_set_id' => ChangeSetId,
  ?'change_set_name' => ChangeSetName,
  ?'changes' => Changes,
  ?'creation_time' => CreationTime,
  ?'description' => Description,
  ?'execution_status' => ExecutionStatus,
  ?'next_token' => NextToken,
  ?'notification_ar_ns' => NotificationARNs,
  ?'parameters' => Parameters,
  ?'rollback_configuration' => RollbackConfiguration,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ?'status' => ChangeSetStatus,
  ?'status_reason' => ChangeSetStatusReason,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->change_set_id = $change_set_id ?? "";
    $this->change_set_name = $change_set_name ?? "";
    $this->changes = $changes ?? [];
    $this->creation_time = $creation_time ?? 0;
    $this->description = $description ?? "";
    $this->execution_status = $execution_status ?? "";
    $this->next_token = $next_token ?? "";
    $this->notification_ar_ns = $notification_ar_ns ?? [];
    $this->parameters = $parameters ?? [];
    $this->rollback_configuration = $rollback_configuration ?? null;
    $this->stack_id = $stack_id ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
    $this->tags = $tags ?? [];
  }
}

class DescribeStackDriftDetectionStatusInput {
  public StackDriftDetectionId $stack_drift_detection_id;

  public function __construct(shape(
  ?'stack_drift_detection_id' => StackDriftDetectionId,
  ) $s = shape()) {
    $this->stack_drift_detection_id = $stack_drift_detection_id ?? "";
  }
}

class DescribeStackDriftDetectionStatusOutput {
  public StackDriftDetectionStatus $detection_status;
  public StackDriftDetectionStatusReason $detection_status_reason;
  public BoxedInteger $drifted_stack_resource_count;
  public StackDriftDetectionId $stack_drift_detection_id;
  public StackDriftStatus $stack_drift_status;
  public StackId $stack_id;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'detection_status' => StackDriftDetectionStatus,
  ?'detection_status_reason' => StackDriftDetectionStatusReason,
  ?'drifted_stack_resource_count' => BoxedInteger,
  ?'stack_drift_detection_id' => StackDriftDetectionId,
  ?'stack_drift_status' => StackDriftStatus,
  ?'stack_id' => StackId,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->detection_status = $detection_status ?? "";
    $this->detection_status_reason = $detection_status_reason ?? "";
    $this->drifted_stack_resource_count = $drifted_stack_resource_count ?? 0;
    $this->stack_drift_detection_id = $stack_drift_detection_id ?? "";
    $this->stack_drift_status = $stack_drift_status ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

class DescribeStackEventsInput {
  public NextToken $next_token;
  public StackName $stack_name;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DescribeStackEventsOutput {
  public NextToken $next_token;
  public StackEvents $stack_events;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_events' => StackEvents,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_events = $stack_events ?? [];
  }
}

class DescribeStackInstanceInput {
  public Account $stack_instance_account;
  public Region $stack_instance_region;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'stack_instance_account' => Account,
  ?'stack_instance_region' => Region,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->stack_instance_account = $stack_instance_account ?? "";
    $this->stack_instance_region = $stack_instance_region ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class DescribeStackInstanceOutput {
  public StackInstance $stack_instance;

  public function __construct(shape(
  ?'stack_instance' => StackInstance,
  ) $s = shape()) {
    $this->stack_instance = $stack_instance ?? null;
  }
}

class DescribeStackResourceDriftsInput {
  public BoxedMaxResults $max_results;
  public NextToken $next_token;
  public StackNameOrId $stack_name;
  public StackResourceDriftStatusFilters $stack_resource_drift_status_filters;

  public function __construct(shape(
  ?'max_results' => BoxedMaxResults,
  ?'next_token' => NextToken,
  ?'stack_name' => StackNameOrId,
  ?'stack_resource_drift_status_filters' => StackResourceDriftStatusFilters,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->stack_resource_drift_status_filters = $stack_resource_drift_status_filters ?? [];
  }
}

class DescribeStackResourceDriftsOutput {
  public NextToken $next_token;
  public StackResourceDrifts $stack_resource_drifts;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_resource_drifts' => StackResourceDrifts,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_resource_drifts = $stack_resource_drifts ?? [];
  }
}

class DescribeStackResourceInput {
  public LogicalResourceId $logical_resource_id;
  public StackName $stack_name;

  public function __construct(shape(
  ?'logical_resource_id' => LogicalResourceId,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DescribeStackResourceOutput {
  public StackResourceDetail $stack_resource_detail;

  public function __construct(shape(
  ?'stack_resource_detail' => StackResourceDetail,
  ) $s = shape()) {
    $this->stack_resource_detail = $stack_resource_detail ?? null;
  }
}

class DescribeStackResourcesInput {
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public StackName $stack_name;

  public function __construct(shape(
  ?'logical_resource_id' => LogicalResourceId,
  ?'physical_resource_id' => PhysicalResourceId,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->physical_resource_id = $physical_resource_id ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DescribeStackResourcesOutput {
  public StackResources $stack_resources;

  public function __construct(shape(
  ?'stack_resources' => StackResources,
  ) $s = shape()) {
    $this->stack_resources = $stack_resources ?? [];
  }
}

class DescribeStackSetInput {
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class DescribeStackSetOperationInput {
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class DescribeStackSetOperationOutput {
  public StackSetOperation $stack_set_operation;

  public function __construct(shape(
  ?'stack_set_operation' => StackSetOperation,
  ) $s = shape()) {
    $this->stack_set_operation = $stack_set_operation ?? null;
  }
}

class DescribeStackSetOutput {
  public StackSet $stack_set;

  public function __construct(shape(
  ?'stack_set' => StackSet,
  ) $s = shape()) {
    $this->stack_set = $stack_set ?? null;
  }
}

class DescribeStacksInput {
  public NextToken $next_token;
  public StackName $stack_name;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DescribeStacksOutput {
  public NextToken $next_token;
  public Stacks $stacks;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stacks' => Stacks,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stacks = $stacks ?? [];
  }
}

class DescribeTypeInput {
  public TypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;

  public function __construct(shape(
  ?'arn' => TypeArn,
  ?'type' => RegistryType,
  ?'type_name' => TypeName,
  ?'version_id' => TypeVersionId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->type = $type ?? "";
    $this->type_name = $type_name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DescribeTypeOutput {
  public TypeArn $arn;
  public TypeVersionId $default_version_id;
  public DeprecatedStatus $deprecated_status;
  public Description $description;
  public OptionalSecureUrl $documentation_url;
  public RoleArn $execution_role_arn;
  public Timestamp $last_updated;
  public LoggingConfig $logging_config;
  public ProvisioningType $provisioning_type;
  public TypeSchema $schema;
  public OptionalSecureUrl $source_url;
  public Timestamp $time_created;
  public RegistryType $type;
  public TypeName $type_name;
  public Visibility $visibility;

  public function __construct(shape(
  ?'arn' => TypeArn,
  ?'default_version_id' => TypeVersionId,
  ?'deprecated_status' => DeprecatedStatus,
  ?'description' => Description,
  ?'documentation_url' => OptionalSecureUrl,
  ?'execution_role_arn' => RoleArn,
  ?'last_updated' => Timestamp,
  ?'logging_config' => LoggingConfig,
  ?'provisioning_type' => ProvisioningType,
  ?'schema' => TypeSchema,
  ?'source_url' => OptionalSecureUrl,
  ?'time_created' => Timestamp,
  ?'type' => RegistryType,
  ?'type_name' => TypeName,
  ?'visibility' => Visibility,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->default_version_id = $default_version_id ?? "";
    $this->deprecated_status = $deprecated_status ?? "";
    $this->description = $description ?? "";
    $this->documentation_url = $documentation_url ?? "";
    $this->execution_role_arn = $execution_role_arn ?? "";
    $this->last_updated = $last_updated ?? 0;
    $this->logging_config = $logging_config ?? null;
    $this->provisioning_type = $provisioning_type ?? "";
    $this->schema = $schema ?? "";
    $this->source_url = $source_url ?? "";
    $this->time_created = $time_created ?? 0;
    $this->type = $type ?? "";
    $this->type_name = $type_name ?? "";
    $this->visibility = $visibility ?? "";
  }
}

class DescribeTypeRegistrationInput {
  public RegistrationToken $registration_token;

  public function __construct(shape(
  ?'registration_token' => RegistrationToken,
  ) $s = shape()) {
    $this->registration_token = $registration_token ?? "";
  }
}

class DescribeTypeRegistrationOutput {
  public Description $description;
  public RegistrationStatus $progress_status;
  public TypeArn $type_arn;
  public TypeArn $type_version_arn;

  public function __construct(shape(
  ?'description' => Description,
  ?'progress_status' => RegistrationStatus,
  ?'type_arn' => TypeArn,
  ?'type_version_arn' => TypeArn,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->progress_status = $progress_status ?? "";
    $this->type_arn = $type_arn ?? "";
    $this->type_version_arn = $type_version_arn ?? "";
  }
}

type Description = string;

class DetectStackDriftInput {
  public LogicalResourceIds $logical_resource_ids;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'logical_resource_ids' => LogicalResourceIds,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->logical_resource_ids = $logical_resource_ids ?? [];
    $this->stack_name = $stack_name ?? "";
  }
}

class DetectStackDriftOutput {
  public StackDriftDetectionId $stack_drift_detection_id;

  public function __construct(shape(
  ?'stack_drift_detection_id' => StackDriftDetectionId,
  ) $s = shape()) {
    $this->stack_drift_detection_id = $stack_drift_detection_id ?? "";
  }
}

class DetectStackResourceDriftInput {
  public LogicalResourceId $logical_resource_id;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'logical_resource_id' => LogicalResourceId,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class DetectStackResourceDriftOutput {
  public StackResourceDrift $stack_resource_drift;

  public function __construct(shape(
  ?'stack_resource_drift' => StackResourceDrift,
  ) $s = shape()) {
    $this->stack_resource_drift = $stack_resource_drift ?? null;
  }
}

class DetectStackSetDriftInput {
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public StackSetNameOrId $stack_set_name;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ?'operation_preferences' => StackSetOperationPreferences,
  ?'stack_set_name' => StackSetNameOrId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
    $this->operation_preferences = $operation_preferences ?? null;
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class DetectStackSetDriftOutput {
  public ClientRequestToken $operation_id;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

type DifferenceType = string;

type DisableRollback = bool;

type DriftedStackInstancesCount = int;

type EnableTerminationProtection = bool;

type ErrorMessage = string;

class EstimateTemplateCostInput {
  public Parameters $parameters;
  public TemplateBody $template_body;
  public TemplateURL $template_url;

  public function __construct(shape(
  ?'parameters' => Parameters,
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ) $s = shape()) {
    $this->parameters = $parameters ?? [];
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class EstimateTemplateCostOutput {
  public Url $url;

  public function __construct(shape(
  ?'url' => Url,
  ) $s = shape()) {
    $this->url = $url ?? "";
  }
}

type EvaluationType = string;

type EventId = string;

class ExecuteChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public ClientRequestToken $client_request_token;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'change_set_name' => ChangeSetNameOrId,
  ?'client_request_token' => ClientRequestToken,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->change_set_name = $change_set_name ?? "";
    $this->client_request_token = $client_request_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class ExecuteChangeSetOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ExecutionRoleName = string;

type ExecutionStatus = string;

class Export {
  public StackId $exporting_stack_id;
  public ExportName $name;
  public ExportValue $value;

  public function __construct(shape(
  ?'exporting_stack_id' => StackId,
  ?'name' => ExportName,
  ?'value' => ExportValue,
  ) $s = shape()) {
    $this->exporting_stack_id = $exporting_stack_id ?? "";
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type ExportName = string;

type ExportValue = string;

type Exports = vec<Export>;

type FailedStackInstancesCount = int;

type FailureToleranceCount = int;

type FailureTolerancePercentage = int;

class GetStackPolicyInput {
  public StackName $stack_name;

  public function __construct(shape(
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->stack_name = $stack_name ?? "";
  }
}

class GetStackPolicyOutput {
  public StackPolicyBody $stack_policy_body;

  public function __construct(shape(
  ?'stack_policy_body' => StackPolicyBody,
  ) $s = shape()) {
    $this->stack_policy_body = $stack_policy_body ?? "";
  }
}

class GetTemplateInput {
  public ChangeSetNameOrId $change_set_name;
  public StackName $stack_name;
  public TemplateStage $template_stage;

  public function __construct(shape(
  ?'change_set_name' => ChangeSetNameOrId,
  ?'stack_name' => StackName,
  ?'template_stage' => TemplateStage,
  ) $s = shape()) {
    $this->change_set_name = $change_set_name ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->template_stage = $template_stage ?? "";
  }
}

class GetTemplateOutput {
  public StageList $stages_available;
  public TemplateBody $template_body;

  public function __construct(shape(
  ?'stages_available' => StageList,
  ?'template_body' => TemplateBody,
  ) $s = shape()) {
    $this->stages_available = $stages_available ?? [];
    $this->template_body = $template_body ?? "";
  }
}

class GetTemplateSummaryInput {
  public StackNameOrId $stack_name;
  public StackSetNameOrId $stack_set_name;
  public TemplateBody $template_body;
  public TemplateURL $template_url;

  public function __construct(shape(
  ?'stack_name' => StackNameOrId,
  ?'stack_set_name' => StackSetNameOrId,
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ) $s = shape()) {
    $this->stack_name = $stack_name ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class GetTemplateSummaryOutput {
  public Capabilities $capabilities;
  public CapabilitiesReason $capabilities_reason;
  public TransformsList $declared_transforms;
  public Description $description;
  public Metadata $metadata;
  public ParameterDeclarations $parameters;
  public ResourceIdentifierSummaries $resource_identifier_summaries;
  public ResourceTypes $resource_types;
  public Version $version;

  public function __construct(shape(
  ?'capabilities' => Capabilities,
  ?'capabilities_reason' => CapabilitiesReason,
  ?'declared_transforms' => TransformsList,
  ?'description' => Description,
  ?'metadata' => Metadata,
  ?'parameters' => ParameterDeclarations,
  ?'resource_identifier_summaries' => ResourceIdentifierSummaries,
  ?'resource_types' => ResourceTypes,
  ?'version' => Version,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->capabilities_reason = $capabilities_reason ?? "";
    $this->declared_transforms = $declared_transforms ?? [];
    $this->description = $description ?? "";
    $this->metadata = $metadata ?? "";
    $this->parameters = $parameters ?? [];
    $this->resource_identifier_summaries = $resource_identifier_summaries ?? [];
    $this->resource_types = $resource_types ?? [];
    $this->version = $version ?? "";
  }
}

type HandlerErrorCode = string;

type Imports = vec<StackName>;

type InProgressStackInstancesCount = int;

type InSyncStackInstancesCount = int;

class InsufficientCapabilitiesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidChangeSetStatusException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidOperationException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidStateTransitionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Key = string;

type LastUpdatedTime = int;

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LimitName = string;

type LimitValue = int;

class ListChangeSetsInput {
  public NextToken $next_token;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class ListChangeSetsOutput {
  public NextToken $next_token;
  public ChangeSetSummaries $summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'summaries' => ChangeSetSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->summaries = $summaries ?? [];
  }
}

class ListExportsInput {
  public NextToken $next_token;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
  }
}

class ListExportsOutput {
  public Exports $exports;
  public NextToken $next_token;

  public function __construct(shape(
  ?'exports' => Exports,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->exports = $exports ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListImportsInput {
  public ExportName $export_name;
  public NextToken $next_token;

  public function __construct(shape(
  ?'export_name' => ExportName,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->export_name = $export_name ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListImportsOutput {
  public Imports $imports;
  public NextToken $next_token;

  public function __construct(shape(
  ?'imports' => Imports,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->imports = $imports ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListStackInstancesInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Account $stack_instance_account;
  public Region $stack_instance_region;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'stack_instance_account' => Account,
  ?'stack_instance_region' => Region,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->stack_instance_account = $stack_instance_account ?? "";
    $this->stack_instance_region = $stack_instance_region ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class ListStackInstancesOutput {
  public NextToken $next_token;
  public StackInstanceSummaries $summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'summaries' => StackInstanceSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->summaries = $summaries ?? [];
  }
}

class ListStackResourcesInput {
  public NextToken $next_token;
  public StackName $stack_name;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class ListStackResourcesOutput {
  public NextToken $next_token;
  public StackResourceSummaries $stack_resource_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_resource_summaries' => StackResourceSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_resource_summaries = $stack_resource_summaries ?? [];
  }
}

class ListStackSetOperationResultsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'operation_id' => ClientRequestToken,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->operation_id = $operation_id ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class ListStackSetOperationResultsOutput {
  public NextToken $next_token;
  public StackSetOperationResultSummaries $summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'summaries' => StackSetOperationResultSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->summaries = $summaries ?? [];
  }
}

class ListStackSetOperationsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class ListStackSetOperationsOutput {
  public NextToken $next_token;
  public StackSetOperationSummaries $summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'summaries' => StackSetOperationSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->summaries = $summaries ?? [];
  }
}

class ListStackSetsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public StackSetStatus $status;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'status' => StackSetStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? "";
  }
}

class ListStackSetsOutput {
  public NextToken $next_token;
  public StackSetSummaries $summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'summaries' => StackSetSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->summaries = $summaries ?? [];
  }
}

class ListStacksInput {
  public NextToken $next_token;
  public StackStatusFilter $stack_status_filter;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_status_filter' => StackStatusFilter,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_status_filter = $stack_status_filter ?? [];
  }
}

class ListStacksOutput {
  public NextToken $next_token;
  public StackSummaries $stack_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'stack_summaries' => StackSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->stack_summaries = $stack_summaries ?? [];
  }
}

class ListTypeRegistrationsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistrationStatus $registration_status_filter;
  public RegistryType $type;
  public TypeArn $type_arn;
  public TypeName $type_name;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'registration_status_filter' => RegistrationStatus,
  ?'type' => RegistryType,
  ?'type_arn' => TypeArn,
  ?'type_name' => TypeName,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->registration_status_filter = $registration_status_filter ?? "";
    $this->type = $type ?? "";
    $this->type_arn = $type_arn ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class ListTypeRegistrationsOutput {
  public NextToken $next_token;
  public RegistrationTokenList $registration_token_list;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'registration_token_list' => RegistrationTokenList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->registration_token_list = $registration_token_list ?? [];
  }
}

class ListTypeVersionsInput {
  public PrivateTypeArn $arn;
  public DeprecatedStatus $deprecated_status;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryType $type;
  public TypeName $type_name;

  public function __construct(shape(
  ?'arn' => PrivateTypeArn,
  ?'deprecated_status' => DeprecatedStatus,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'type' => RegistryType,
  ?'type_name' => TypeName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->deprecated_status = $deprecated_status ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->type = $type ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class ListTypeVersionsOutput {
  public NextToken $next_token;
  public TypeVersionSummaries $type_version_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'type_version_summaries' => TypeVersionSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->type_version_summaries = $type_version_summaries ?? [];
  }
}

class ListTypesInput {
  public DeprecatedStatus $deprecated_status;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ProvisioningType $provisioning_type;
  public Visibility $visibility;

  public function __construct(shape(
  ?'deprecated_status' => DeprecatedStatus,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'provisioning_type' => ProvisioningType,
  ?'visibility' => Visibility,
  ) $s = shape()) {
    $this->deprecated_status = $deprecated_status ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->provisioning_type = $provisioning_type ?? "";
    $this->visibility = $visibility ?? "";
  }
}

class ListTypesOutput {
  public NextToken $next_token;
  public TypeSummaries $type_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'type_summaries' => TypeSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->type_summaries = $type_summaries ?? [];
  }
}

type LogGroupName = string;

class LoggingConfig {
  public LogGroupName $log_group_name;
  public RoleArn $log_role_arn;

  public function __construct(shape(
  ?'log_group_name' => LogGroupName,
  ?'log_role_arn' => RoleArn,
  ) $s = shape()) {
    $this->log_group_name = $log_group_name ?? "";
    $this->log_role_arn = $log_role_arn ?? "";
  }
}

type LogicalResourceId = string;

type LogicalResourceIds = vec<LogicalResourceId>;

type MaxConcurrentCount = int;

type MaxConcurrentPercentage = int;

type MaxResults = int;

type Metadata = string;

type MonitoringTimeInMinutes = int;

class NameAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type NextToken = string;

type NoEcho = bool;

type NotificationARN = string;

type NotificationARNs = vec<NotificationARN>;

type OnFailure = string;

class OperationIdAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OperationInProgressException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class OperationNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OperationStatus = string;

class OperationStatusCheckFailedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type OptionalSecureUrl = string;

type OrganizationalUnitId = string;

type OrganizationalUnitIdList = vec<OrganizationalUnitId>;

class Output {
  public Description $description;
  public ExportName $export_name;
  public OutputKey $output_key;
  public OutputValue $output_value;

  public function __construct(shape(
  ?'description' => Description,
  ?'export_name' => ExportName,
  ?'output_key' => OutputKey,
  ?'output_value' => OutputValue,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->export_name = $export_name ?? "";
    $this->output_key = $output_key ?? "";
    $this->output_value = $output_value ?? "";
  }
}

type OutputKey = string;

type OutputValue = string;

type Outputs = vec<Output>;

class Parameter {
  public ParameterKey $parameter_key;
  public ParameterValue $parameter_value;
  public ParameterValue $resolved_value;
  public UsePreviousValue $use_previous_value;

  public function __construct(shape(
  ?'parameter_key' => ParameterKey,
  ?'parameter_value' => ParameterValue,
  ?'resolved_value' => ParameterValue,
  ?'use_previous_value' => UsePreviousValue,
  ) $s = shape()) {
    $this->parameter_key = $parameter_key ?? "";
    $this->parameter_value = $parameter_value ?? "";
    $this->resolved_value = $resolved_value ?? "";
    $this->use_previous_value = $use_previous_value ?? false;
  }
}

class ParameterConstraints {
  public AllowedValues $allowed_values;

  public function __construct(shape(
  ?'allowed_values' => AllowedValues,
  ) $s = shape()) {
    $this->allowed_values = $allowed_values ?? [];
  }
}

class ParameterDeclaration {
  public ParameterValue $default_value;
  public Description $description;
  public NoEcho $no_echo;
  public ParameterConstraints $parameter_constraints;
  public ParameterKey $parameter_key;
  public ParameterType $parameter_type;

  public function __construct(shape(
  ?'default_value' => ParameterValue,
  ?'description' => Description,
  ?'no_echo' => NoEcho,
  ?'parameter_constraints' => ParameterConstraints,
  ?'parameter_key' => ParameterKey,
  ?'parameter_type' => ParameterType,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->description = $description ?? "";
    $this->no_echo = $no_echo ?? false;
    $this->parameter_constraints = $parameter_constraints ?? null;
    $this->parameter_key = $parameter_key ?? "";
    $this->parameter_type = $parameter_type ?? "";
  }
}

type ParameterDeclarations = vec<ParameterDeclaration>;

type ParameterKey = string;

type ParameterType = string;

type ParameterValue = string;

type Parameters = vec<Parameter>;

type PermissionModels = string;

type PhysicalResourceId = string;

type PhysicalResourceIdContext = vec<PhysicalResourceIdContextKeyValuePair>;

class PhysicalResourceIdContextKeyValuePair {
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

type PrivateTypeArn = string;

type Properties = string;

class PropertyDifference {
  public PropertyValue $actual_value;
  public DifferenceType $difference_type;
  public PropertyValue $expected_value;
  public PropertyPath $property_path;

  public function __construct(shape(
  ?'actual_value' => PropertyValue,
  ?'difference_type' => DifferenceType,
  ?'expected_value' => PropertyValue,
  ?'property_path' => PropertyPath,
  ) $s = shape()) {
    $this->actual_value = $actual_value ?? "";
    $this->difference_type = $difference_type ?? "";
    $this->expected_value = $expected_value ?? "";
    $this->property_path = $property_path ?? "";
  }
}

type PropertyDifferences = vec<PropertyDifference>;

type PropertyName = string;

type PropertyPath = string;

type PropertyValue = string;

type ProvisioningType = string;

type Reason = string;

class RecordHandlerProgressInput {
  public ClientToken $bearer_token;
  public ClientRequestToken $client_request_token;
  public OperationStatus $current_operation_status;
  public HandlerErrorCode $error_code;
  public OperationStatus $operation_status;
  public ResourceModel $resource_model;
  public StatusMessage $status_message;

  public function __construct(shape(
  ?'bearer_token' => ClientToken,
  ?'client_request_token' => ClientRequestToken,
  ?'current_operation_status' => OperationStatus,
  ?'error_code' => HandlerErrorCode,
  ?'operation_status' => OperationStatus,
  ?'resource_model' => ResourceModel,
  ?'status_message' => StatusMessage,
  ) $s = shape()) {
    $this->bearer_token = $bearer_token ?? "";
    $this->client_request_token = $client_request_token ?? "";
    $this->current_operation_status = $current_operation_status ?? "";
    $this->error_code = $error_code ?? "";
    $this->operation_status = $operation_status ?? "";
    $this->resource_model = $resource_model ?? "";
    $this->status_message = $status_message ?? "";
  }
}

class RecordHandlerProgressOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Region = string;

type RegionList = vec<Region>;

class RegisterTypeInput {
  public RequestToken $client_request_token;
  public RoleArn $execution_role_arn;
  public LoggingConfig $logging_config;
  public S3Url $schema_handler_package;
  public RegistryType $type;
  public TypeName $type_name;

  public function __construct(shape(
  ?'client_request_token' => RequestToken,
  ?'execution_role_arn' => RoleArn,
  ?'logging_config' => LoggingConfig,
  ?'schema_handler_package' => S3Url,
  ?'type' => RegistryType,
  ?'type_name' => TypeName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->execution_role_arn = $execution_role_arn ?? "";
    $this->logging_config = $logging_config ?? null;
    $this->schema_handler_package = $schema_handler_package ?? "";
    $this->type = $type ?? "";
    $this->type_name = $type_name ?? "";
  }
}

class RegisterTypeOutput {
  public RegistrationToken $registration_token;

  public function __construct(shape(
  ?'registration_token' => RegistrationToken,
  ) $s = shape()) {
    $this->registration_token = $registration_token ?? "";
  }
}

type RegistrationStatus = string;

type RegistrationToken = string;

type RegistrationTokenList = vec<RegistrationToken>;

type RegistryType = string;

type Replacement = string;

type RequestToken = string;

type RequiresRecreation = string;

type ResourceAttribute = string;

class ResourceChange {
  public ChangeAction $action;
  public ResourceChangeDetails $details;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public Replacement $replacement;
  public ResourceType $resource_type;
  public Scope $scope;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'details' => ResourceChangeDetails,
  ?'logical_resource_id' => LogicalResourceId,
  ?'physical_resource_id' => PhysicalResourceId,
  ?'replacement' => Replacement,
  ?'resource_type' => ResourceType,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->details = $details ?? [];
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->physical_resource_id = $physical_resource_id ?? "";
    $this->replacement = $replacement ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->scope = $scope ?? [];
  }
}

class ResourceChangeDetail {
  public CausingEntity $causing_entity;
  public ChangeSource $change_source;
  public EvaluationType $evaluation;
  public ResourceTargetDefinition $target;

  public function __construct(shape(
  ?'causing_entity' => CausingEntity,
  ?'change_source' => ChangeSource,
  ?'evaluation' => EvaluationType,
  ?'target' => ResourceTargetDefinition,
  ) $s = shape()) {
    $this->causing_entity = $causing_entity ?? "";
    $this->change_source = $change_source ?? "";
    $this->evaluation = $evaluation ?? "";
    $this->target = $target ?? null;
  }
}

type ResourceChangeDetails = vec<ResourceChangeDetail>;

type ResourceIdentifierProperties = dict<ResourceIdentifierPropertyKey, ResourceIdentifierPropertyValue>;

type ResourceIdentifierPropertyKey = string;

type ResourceIdentifierPropertyValue = string;

type ResourceIdentifierSummaries = vec<ResourceIdentifierSummary>;

class ResourceIdentifierSummary {
  public LogicalResourceIds $logical_resource_ids;
  public ResourceIdentifiers $resource_identifiers;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'logical_resource_ids' => LogicalResourceIds,
  ?'resource_identifiers' => ResourceIdentifiers,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->logical_resource_ids = $logical_resource_ids ?? [];
    $this->resource_identifiers = $resource_identifiers ?? [];
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceIdentifiers = vec<ResourceIdentifierPropertyKey>;

type ResourceModel = string;

type ResourceProperties = string;

type ResourceSignalStatus = string;

type ResourceSignalUniqueId = string;

type ResourceStatus = string;

type ResourceStatusReason = string;

class ResourceTargetDefinition {
  public ResourceAttribute $attribute;
  public PropertyName $name;
  public RequiresRecreation $requires_recreation;

  public function __construct(shape(
  ?'attribute' => ResourceAttribute,
  ?'name' => PropertyName,
  ?'requires_recreation' => RequiresRecreation,
  ) $s = shape()) {
    $this->attribute = $attribute ?? "";
    $this->name = $name ?? "";
    $this->requires_recreation = $requires_recreation ?? "";
  }
}

class ResourceToImport {
  public LogicalResourceId $logical_resource_id;
  public ResourceIdentifierProperties $resource_identifier;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'logical_resource_id' => LogicalResourceId,
  ?'resource_identifier' => ResourceIdentifierProperties,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->resource_identifier = $resource_identifier ?? [];
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceToSkip = string;

type ResourceType = string;

type ResourceTypes = vec<ResourceType>;

type ResourcesToImport = vec<ResourceToImport>;

type ResourcesToSkip = vec<ResourceToSkip>;

type RetainResources = vec<LogicalResourceId>;

type RetainStacks = bool;

type RetainStacksNullable = bool;

type RetainStacksOnAccountRemovalNullable = bool;

type RoleARN = string;

type RoleArn = string;

class RollbackConfiguration {
  public MonitoringTimeInMinutes $monitoring_time_in_minutes;
  public RollbackTriggers $rollback_triggers;

  public function __construct(shape(
  ?'monitoring_time_in_minutes' => MonitoringTimeInMinutes,
  ?'rollback_triggers' => RollbackTriggers,
  ) $s = shape()) {
    $this->monitoring_time_in_minutes = $monitoring_time_in_minutes ?? 0;
    $this->rollback_triggers = $rollback_triggers ?? [];
  }
}

class RollbackTrigger {
  public Arn $arn;
  public Type $type;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'type' => Type,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->type = $type ?? "";
  }
}

type RollbackTriggers = vec<RollbackTrigger>;

type S3Url = string;

type Scope = vec<ResourceAttribute>;

class SetStackPolicyInput {
  public StackName $stack_name;
  public StackPolicyBody $stack_policy_body;
  public StackPolicyURL $stack_policy_url;

  public function __construct(shape(
  ?'stack_name' => StackName,
  ?'stack_policy_body' => StackPolicyBody,
  ?'stack_policy_url' => StackPolicyURL,
  ) $s = shape()) {
    $this->stack_name = $stack_name ?? "";
    $this->stack_policy_body = $stack_policy_body ?? "";
    $this->stack_policy_url = $stack_policy_url ?? "";
  }
}

class SetTypeDefaultVersionInput {
  public PrivateTypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;

  public function __construct(shape(
  ?'arn' => PrivateTypeArn,
  ?'type' => RegistryType,
  ?'type_name' => TypeName,
  ?'version_id' => TypeVersionId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->type = $type ?? "";
    $this->type_name = $type_name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class SetTypeDefaultVersionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SignalResourceInput {
  public LogicalResourceId $logical_resource_id;
  public StackNameOrId $stack_name;
  public ResourceSignalStatus $status;
  public ResourceSignalUniqueId $unique_id;

  public function __construct(shape(
  ?'logical_resource_id' => LogicalResourceId,
  ?'stack_name' => StackNameOrId,
  ?'status' => ResourceSignalStatus,
  ?'unique_id' => ResourceSignalUniqueId,
  ) $s = shape()) {
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->status = $status ?? "";
    $this->unique_id = $unique_id ?? "";
  }
}

class Stack {
  public Capabilities $capabilities;
  public ChangeSetId $change_set_id;
  public CreationTime $creation_time;
  public DeletionTime $deletion_time;
  public Description $description;
  public DisableRollback $disable_rollback;
  public StackDriftInformation $drift_information;
  public EnableTerminationProtection $enable_termination_protection;
  public LastUpdatedTime $last_updated_time;
  public NotificationARNs $notification_ar_ns;
  public Outputs $outputs;
  public Parameters $parameters;
  public StackId $parent_id;
  public RoleARN $role_arn;
  public RollbackConfiguration $rollback_configuration;
  public StackId $root_id;
  public StackId $stack_id;
  public StackName $stack_name;
  public StackStatus $stack_status;
  public StackStatusReason $stack_status_reason;
  public Tags $tags;
  public TimeoutMinutes $timeout_in_minutes;

  public function __construct(shape(
  ?'capabilities' => Capabilities,
  ?'change_set_id' => ChangeSetId,
  ?'creation_time' => CreationTime,
  ?'deletion_time' => DeletionTime,
  ?'description' => Description,
  ?'disable_rollback' => DisableRollback,
  ?'drift_information' => StackDriftInformation,
  ?'enable_termination_protection' => EnableTerminationProtection,
  ?'last_updated_time' => LastUpdatedTime,
  ?'notification_ar_ns' => NotificationARNs,
  ?'outputs' => Outputs,
  ?'parameters' => Parameters,
  ?'parent_id' => StackId,
  ?'role_arn' => RoleARN,
  ?'rollback_configuration' => RollbackConfiguration,
  ?'root_id' => StackId,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ?'stack_status' => StackStatus,
  ?'stack_status_reason' => StackStatusReason,
  ?'tags' => Tags,
  ?'timeout_in_minutes' => TimeoutMinutes,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->change_set_id = $change_set_id ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->deletion_time = $deletion_time ?? 0;
    $this->description = $description ?? "";
    $this->disable_rollback = $disable_rollback ?? false;
    $this->drift_information = $drift_information ?? null;
    $this->enable_termination_protection = $enable_termination_protection ?? false;
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->notification_ar_ns = $notification_ar_ns ?? [];
    $this->outputs = $outputs ?? [];
    $this->parameters = $parameters ?? [];
    $this->parent_id = $parent_id ?? "";
    $this->role_arn = $role_arn ?? "";
    $this->rollback_configuration = $rollback_configuration ?? null;
    $this->root_id = $root_id ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->stack_status = $stack_status ?? "";
    $this->stack_status_reason = $stack_status_reason ?? "";
    $this->tags = $tags ?? [];
    $this->timeout_in_minutes = $timeout_in_minutes ?? 0;
  }
}

type StackDriftDetectionId = string;

type StackDriftDetectionStatus = string;

type StackDriftDetectionStatusReason = string;

class StackDriftInformation {
  public Timestamp $last_check_timestamp;
  public StackDriftStatus $stack_drift_status;

  public function __construct(shape(
  ?'last_check_timestamp' => Timestamp,
  ?'stack_drift_status' => StackDriftStatus,
  ) $s = shape()) {
    $this->last_check_timestamp = $last_check_timestamp ?? 0;
    $this->stack_drift_status = $stack_drift_status ?? "";
  }
}

class StackDriftInformationSummary {
  public Timestamp $last_check_timestamp;
  public StackDriftStatus $stack_drift_status;

  public function __construct(shape(
  ?'last_check_timestamp' => Timestamp,
  ?'stack_drift_status' => StackDriftStatus,
  ) $s = shape()) {
    $this->last_check_timestamp = $last_check_timestamp ?? 0;
    $this->stack_drift_status = $stack_drift_status ?? "";
  }
}

type StackDriftStatus = string;

class StackEvent {
  public ClientRequestToken $client_request_token;
  public EventId $event_id;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public ResourceProperties $resource_properties;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public ResourceType $resource_type;
  public StackId $stack_id;
  public StackName $stack_name;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'event_id' => EventId,
  ?'logical_resource_id' => LogicalResourceId,
  ?'physical_resource_id' => PhysicalResourceId,
  ?'resource_properties' => ResourceProperties,
  ?'resource_status' => ResourceStatus,
  ?'resource_status_reason' => ResourceStatusReason,
  ?'resource_type' => ResourceType,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->event_id = $event_id ?? "";
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->physical_resource_id = $physical_resource_id ?? "";
    $this->resource_properties = $resource_properties ?? "";
    $this->resource_status = $resource_status ?? "";
    $this->resource_status_reason = $resource_status_reason ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

type StackEvents = vec<StackEvent>;

type StackId = string;

class StackInstance {
  public Account $account;
  public StackDriftStatus $drift_status;
  public Timestamp $last_drift_check_timestamp;
  public OrganizationalUnitId $organizational_unit_id;
  public Parameters $parameter_overrides;
  public Region $region;
  public StackId $stack_id;
  public StackSetId $stack_set_id;
  public StackInstanceStatus $status;
  public Reason $status_reason;

  public function __construct(shape(
  ?'account' => Account,
  ?'drift_status' => StackDriftStatus,
  ?'last_drift_check_timestamp' => Timestamp,
  ?'organizational_unit_id' => OrganizationalUnitId,
  ?'parameter_overrides' => Parameters,
  ?'region' => Region,
  ?'stack_id' => StackId,
  ?'stack_set_id' => StackSetId,
  ?'status' => StackInstanceStatus,
  ?'status_reason' => Reason,
  ) $s = shape()) {
    $this->account = $account ?? "";
    $this->drift_status = $drift_status ?? "";
    $this->last_drift_check_timestamp = $last_drift_check_timestamp ?? 0;
    $this->organizational_unit_id = $organizational_unit_id ?? "";
    $this->parameter_overrides = $parameter_overrides ?? [];
    $this->region = $region ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_set_id = $stack_set_id ?? "";
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
  }
}

class StackInstanceNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type StackInstanceStatus = string;

type StackInstanceSummaries = vec<StackInstanceSummary>;

class StackInstanceSummary {
  public Account $account;
  public StackDriftStatus $drift_status;
  public Timestamp $last_drift_check_timestamp;
  public OrganizationalUnitId $organizational_unit_id;
  public Region $region;
  public StackId $stack_id;
  public StackSetId $stack_set_id;
  public StackInstanceStatus $status;
  public Reason $status_reason;

  public function __construct(shape(
  ?'account' => Account,
  ?'drift_status' => StackDriftStatus,
  ?'last_drift_check_timestamp' => Timestamp,
  ?'organizational_unit_id' => OrganizationalUnitId,
  ?'region' => Region,
  ?'stack_id' => StackId,
  ?'stack_set_id' => StackSetId,
  ?'status' => StackInstanceStatus,
  ?'status_reason' => Reason,
  ) $s = shape()) {
    $this->account = $account ?? "";
    $this->drift_status = $drift_status ?? "";
    $this->last_drift_check_timestamp = $last_drift_check_timestamp ?? 0;
    $this->organizational_unit_id = $organizational_unit_id ?? "";
    $this->region = $region ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_set_id = $stack_set_id ?? "";
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
  }
}

type StackName = string;

type StackNameOrId = string;

type StackPolicyBody = string;

type StackPolicyDuringUpdateBody = string;

type StackPolicyDuringUpdateURL = string;

type StackPolicyURL = string;

class StackResource {
  public Description $description;
  public StackResourceDriftInformation $drift_information;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public ResourceType $resource_type;
  public StackId $stack_id;
  public StackName $stack_name;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'description' => Description,
  ?'drift_information' => StackResourceDriftInformation,
  ?'logical_resource_id' => LogicalResourceId,
  ?'physical_resource_id' => PhysicalResourceId,
  ?'resource_status' => ResourceStatus,
  ?'resource_status_reason' => ResourceStatusReason,
  ?'resource_type' => ResourceType,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->drift_information = $drift_information ?? null;
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->physical_resource_id = $physical_resource_id ?? "";
    $this->resource_status = $resource_status ?? "";
    $this->resource_status_reason = $resource_status_reason ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

class StackResourceDetail {
  public Description $description;
  public StackResourceDriftInformation $drift_information;
  public Timestamp $last_updated_timestamp;
  public LogicalResourceId $logical_resource_id;
  public Metadata $metadata;
  public PhysicalResourceId $physical_resource_id;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public ResourceType $resource_type;
  public StackId $stack_id;
  public StackName $stack_name;

  public function __construct(shape(
  ?'description' => Description,
  ?'drift_information' => StackResourceDriftInformation,
  ?'last_updated_timestamp' => Timestamp,
  ?'logical_resource_id' => LogicalResourceId,
  ?'metadata' => Metadata,
  ?'physical_resource_id' => PhysicalResourceId,
  ?'resource_status' => ResourceStatus,
  ?'resource_status_reason' => ResourceStatusReason,
  ?'resource_type' => ResourceType,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->drift_information = $drift_information ?? null;
    $this->last_updated_timestamp = $last_updated_timestamp ?? 0;
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->metadata = $metadata ?? "";
    $this->physical_resource_id = $physical_resource_id ?? "";
    $this->resource_status = $resource_status ?? "";
    $this->resource_status_reason = $resource_status_reason ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_name = $stack_name ?? "";
  }
}

class StackResourceDrift {
  public Properties $actual_properties;
  public Properties $expected_properties;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public PhysicalResourceIdContext $physical_resource_id_context;
  public PropertyDifferences $property_differences;
  public ResourceType $resource_type;
  public StackId $stack_id;
  public StackResourceDriftStatus $stack_resource_drift_status;
  public Timestamp $timestamp;

  public function __construct(shape(
  ?'actual_properties' => Properties,
  ?'expected_properties' => Properties,
  ?'logical_resource_id' => LogicalResourceId,
  ?'physical_resource_id' => PhysicalResourceId,
  ?'physical_resource_id_context' => PhysicalResourceIdContext,
  ?'property_differences' => PropertyDifferences,
  ?'resource_type' => ResourceType,
  ?'stack_id' => StackId,
  ?'stack_resource_drift_status' => StackResourceDriftStatus,
  ?'timestamp' => Timestamp,
  ) $s = shape()) {
    $this->actual_properties = $actual_properties ?? "";
    $this->expected_properties = $expected_properties ?? "";
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->physical_resource_id = $physical_resource_id ?? "";
    $this->physical_resource_id_context = $physical_resource_id_context ?? [];
    $this->property_differences = $property_differences ?? [];
    $this->resource_type = $resource_type ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_resource_drift_status = $stack_resource_drift_status ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

class StackResourceDriftInformation {
  public Timestamp $last_check_timestamp;
  public StackResourceDriftStatus $stack_resource_drift_status;

  public function __construct(shape(
  ?'last_check_timestamp' => Timestamp,
  ?'stack_resource_drift_status' => StackResourceDriftStatus,
  ) $s = shape()) {
    $this->last_check_timestamp = $last_check_timestamp ?? 0;
    $this->stack_resource_drift_status = $stack_resource_drift_status ?? "";
  }
}

class StackResourceDriftInformationSummary {
  public Timestamp $last_check_timestamp;
  public StackResourceDriftStatus $stack_resource_drift_status;

  public function __construct(shape(
  ?'last_check_timestamp' => Timestamp,
  ?'stack_resource_drift_status' => StackResourceDriftStatus,
  ) $s = shape()) {
    $this->last_check_timestamp = $last_check_timestamp ?? 0;
    $this->stack_resource_drift_status = $stack_resource_drift_status ?? "";
  }
}

type StackResourceDriftStatus = string;

type StackResourceDriftStatusFilters = vec<StackResourceDriftStatus>;

type StackResourceDrifts = vec<StackResourceDrift>;

type StackResourceSummaries = vec<StackResourceSummary>;

class StackResourceSummary {
  public StackResourceDriftInformationSummary $drift_information;
  public Timestamp $last_updated_timestamp;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'drift_information' => StackResourceDriftInformationSummary,
  ?'last_updated_timestamp' => Timestamp,
  ?'logical_resource_id' => LogicalResourceId,
  ?'physical_resource_id' => PhysicalResourceId,
  ?'resource_status' => ResourceStatus,
  ?'resource_status_reason' => ResourceStatusReason,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->drift_information = $drift_information ?? null;
    $this->last_updated_timestamp = $last_updated_timestamp ?? 0;
    $this->logical_resource_id = $logical_resource_id ?? "";
    $this->physical_resource_id = $physical_resource_id ?? "";
    $this->resource_status = $resource_status ?? "";
    $this->resource_status_reason = $resource_status_reason ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type StackResources = vec<StackResource>;

class StackSet {
  public RoleARN $administration_role_arn;
  public AutoDeployment $auto_deployment;
  public Capabilities $capabilities;
  public Description $description;
  public ExecutionRoleName $execution_role_name;
  public OrganizationalUnitIdList $organizational_unit_ids;
  public Parameters $parameters;
  public PermissionModels $permission_model;
  public StackSetARN $stack_set_arn;
  public StackSetDriftDetectionDetails $stack_set_drift_detection_details;
  public StackSetId $stack_set_id;
  public StackSetName $stack_set_name;
  public StackSetStatus $status;
  public Tags $tags;
  public TemplateBody $template_body;

  public function __construct(shape(
  ?'administration_role_arn' => RoleARN,
  ?'auto_deployment' => AutoDeployment,
  ?'capabilities' => Capabilities,
  ?'description' => Description,
  ?'execution_role_name' => ExecutionRoleName,
  ?'organizational_unit_ids' => OrganizationalUnitIdList,
  ?'parameters' => Parameters,
  ?'permission_model' => PermissionModels,
  ?'stack_set_arn' => StackSetARN,
  ?'stack_set_drift_detection_details' => StackSetDriftDetectionDetails,
  ?'stack_set_id' => StackSetId,
  ?'stack_set_name' => StackSetName,
  ?'status' => StackSetStatus,
  ?'tags' => Tags,
  ?'template_body' => TemplateBody,
  ) $s = shape()) {
    $this->administration_role_arn = $administration_role_arn ?? "";
    $this->auto_deployment = $auto_deployment ?? null;
    $this->capabilities = $capabilities ?? [];
    $this->description = $description ?? "";
    $this->execution_role_name = $execution_role_name ?? "";
    $this->organizational_unit_ids = $organizational_unit_ids ?? [];
    $this->parameters = $parameters ?? [];
    $this->permission_model = $permission_model ?? "";
    $this->stack_set_arn = $stack_set_arn ?? "";
    $this->stack_set_drift_detection_details = $stack_set_drift_detection_details ?? null;
    $this->stack_set_id = $stack_set_id ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
    $this->status = $status ?? "";
    $this->tags = $tags ?? [];
    $this->template_body = $template_body ?? "";
  }
}

type StackSetARN = string;

class StackSetDriftDetectionDetails {
  public StackSetDriftDetectionStatus $drift_detection_status;
  public StackSetDriftStatus $drift_status;
  public DriftedStackInstancesCount $drifted_stack_instances_count;
  public FailedStackInstancesCount $failed_stack_instances_count;
  public InProgressStackInstancesCount $in_progress_stack_instances_count;
  public InSyncStackInstancesCount $in_sync_stack_instances_count;
  public Timestamp $last_drift_check_timestamp;
  public TotalStackInstancesCount $total_stack_instances_count;

  public function __construct(shape(
  ?'drift_detection_status' => StackSetDriftDetectionStatus,
  ?'drift_status' => StackSetDriftStatus,
  ?'drifted_stack_instances_count' => DriftedStackInstancesCount,
  ?'failed_stack_instances_count' => FailedStackInstancesCount,
  ?'in_progress_stack_instances_count' => InProgressStackInstancesCount,
  ?'in_sync_stack_instances_count' => InSyncStackInstancesCount,
  ?'last_drift_check_timestamp' => Timestamp,
  ?'total_stack_instances_count' => TotalStackInstancesCount,
  ) $s = shape()) {
    $this->drift_detection_status = $drift_detection_status ?? "";
    $this->drift_status = $drift_status ?? "";
    $this->drifted_stack_instances_count = $drifted_stack_instances_count ?? 0;
    $this->failed_stack_instances_count = $failed_stack_instances_count ?? 0;
    $this->in_progress_stack_instances_count = $in_progress_stack_instances_count ?? 0;
    $this->in_sync_stack_instances_count = $in_sync_stack_instances_count ?? 0;
    $this->last_drift_check_timestamp = $last_drift_check_timestamp ?? 0;
    $this->total_stack_instances_count = $total_stack_instances_count ?? 0;
  }
}

type StackSetDriftDetectionStatus = string;

type StackSetDriftStatus = string;

type StackSetId = string;

type StackSetName = string;

type StackSetNameOrId = string;

class StackSetNotEmptyException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StackSetNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StackSetOperation {
  public StackSetOperationAction $action;
  public RoleARN $administration_role_arn;
  public Timestamp $creation_timestamp;
  public DeploymentTargets $deployment_targets;
  public Timestamp $end_timestamp;
  public ExecutionRoleName $execution_role_name;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public RetainStacksNullable $retain_stacks;
  public StackSetDriftDetectionDetails $stack_set_drift_detection_details;
  public StackSetId $stack_set_id;
  public StackSetOperationStatus $status;

  public function __construct(shape(
  ?'action' => StackSetOperationAction,
  ?'administration_role_arn' => RoleARN,
  ?'creation_timestamp' => Timestamp,
  ?'deployment_targets' => DeploymentTargets,
  ?'end_timestamp' => Timestamp,
  ?'execution_role_name' => ExecutionRoleName,
  ?'operation_id' => ClientRequestToken,
  ?'operation_preferences' => StackSetOperationPreferences,
  ?'retain_stacks' => RetainStacksNullable,
  ?'stack_set_drift_detection_details' => StackSetDriftDetectionDetails,
  ?'stack_set_id' => StackSetId,
  ?'status' => StackSetOperationStatus,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->administration_role_arn = $administration_role_arn ?? "";
    $this->creation_timestamp = $creation_timestamp ?? 0;
    $this->deployment_targets = $deployment_targets ?? null;
    $this->end_timestamp = $end_timestamp ?? 0;
    $this->execution_role_name = $execution_role_name ?? "";
    $this->operation_id = $operation_id ?? "";
    $this->operation_preferences = $operation_preferences ?? null;
    $this->retain_stacks = $retain_stacks ?? false;
    $this->stack_set_drift_detection_details = $stack_set_drift_detection_details ?? null;
    $this->stack_set_id = $stack_set_id ?? "";
    $this->status = $status ?? "";
  }
}

type StackSetOperationAction = string;

class StackSetOperationPreferences {
  public FailureToleranceCount $failure_tolerance_count;
  public FailureTolerancePercentage $failure_tolerance_percentage;
  public MaxConcurrentCount $max_concurrent_count;
  public MaxConcurrentPercentage $max_concurrent_percentage;
  public RegionList $region_order;

  public function __construct(shape(
  ?'failure_tolerance_count' => FailureToleranceCount,
  ?'failure_tolerance_percentage' => FailureTolerancePercentage,
  ?'max_concurrent_count' => MaxConcurrentCount,
  ?'max_concurrent_percentage' => MaxConcurrentPercentage,
  ?'region_order' => RegionList,
  ) $s = shape()) {
    $this->failure_tolerance_count = $failure_tolerance_count ?? 0;
    $this->failure_tolerance_percentage = $failure_tolerance_percentage ?? 0;
    $this->max_concurrent_count = $max_concurrent_count ?? 0;
    $this->max_concurrent_percentage = $max_concurrent_percentage ?? 0;
    $this->region_order = $region_order ?? [];
  }
}

type StackSetOperationResultStatus = string;

type StackSetOperationResultSummaries = vec<StackSetOperationResultSummary>;

class StackSetOperationResultSummary {
  public Account $account;
  public AccountGateResult $account_gate_result;
  public OrganizationalUnitId $organizational_unit_id;
  public Region $region;
  public StackSetOperationResultStatus $status;
  public Reason $status_reason;

  public function __construct(shape(
  ?'account' => Account,
  ?'account_gate_result' => AccountGateResult,
  ?'organizational_unit_id' => OrganizationalUnitId,
  ?'region' => Region,
  ?'status' => StackSetOperationResultStatus,
  ?'status_reason' => Reason,
  ) $s = shape()) {
    $this->account = $account ?? "";
    $this->account_gate_result = $account_gate_result ?? null;
    $this->organizational_unit_id = $organizational_unit_id ?? "";
    $this->region = $region ?? "";
    $this->status = $status ?? "";
    $this->status_reason = $status_reason ?? "";
  }
}

type StackSetOperationStatus = string;

type StackSetOperationSummaries = vec<StackSetOperationSummary>;

class StackSetOperationSummary {
  public StackSetOperationAction $action;
  public Timestamp $creation_timestamp;
  public Timestamp $end_timestamp;
  public ClientRequestToken $operation_id;
  public StackSetOperationStatus $status;

  public function __construct(shape(
  ?'action' => StackSetOperationAction,
  ?'creation_timestamp' => Timestamp,
  ?'end_timestamp' => Timestamp,
  ?'operation_id' => ClientRequestToken,
  ?'status' => StackSetOperationStatus,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->creation_timestamp = $creation_timestamp ?? 0;
    $this->end_timestamp = $end_timestamp ?? 0;
    $this->operation_id = $operation_id ?? "";
    $this->status = $status ?? "";
  }
}

type StackSetStatus = string;

type StackSetSummaries = vec<StackSetSummary>;

class StackSetSummary {
  public AutoDeployment $auto_deployment;
  public Description $description;
  public StackDriftStatus $drift_status;
  public Timestamp $last_drift_check_timestamp;
  public PermissionModels $permission_model;
  public StackSetId $stack_set_id;
  public StackSetName $stack_set_name;
  public StackSetStatus $status;

  public function __construct(shape(
  ?'auto_deployment' => AutoDeployment,
  ?'description' => Description,
  ?'drift_status' => StackDriftStatus,
  ?'last_drift_check_timestamp' => Timestamp,
  ?'permission_model' => PermissionModels,
  ?'stack_set_id' => StackSetId,
  ?'stack_set_name' => StackSetName,
  ?'status' => StackSetStatus,
  ) $s = shape()) {
    $this->auto_deployment = $auto_deployment ?? null;
    $this->description = $description ?? "";
    $this->drift_status = $drift_status ?? "";
    $this->last_drift_check_timestamp = $last_drift_check_timestamp ?? 0;
    $this->permission_model = $permission_model ?? "";
    $this->stack_set_id = $stack_set_id ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
    $this->status = $status ?? "";
  }
}

type StackStatus = string;

type StackStatusFilter = vec<StackStatus>;

type StackStatusReason = string;

type StackSummaries = vec<StackSummary>;

class StackSummary {
  public CreationTime $creation_time;
  public DeletionTime $deletion_time;
  public StackDriftInformationSummary $drift_information;
  public LastUpdatedTime $last_updated_time;
  public StackId $parent_id;
  public StackId $root_id;
  public StackId $stack_id;
  public StackName $stack_name;
  public StackStatus $stack_status;
  public StackStatusReason $stack_status_reason;
  public TemplateDescription $template_description;

  public function __construct(shape(
  ?'creation_time' => CreationTime,
  ?'deletion_time' => DeletionTime,
  ?'drift_information' => StackDriftInformationSummary,
  ?'last_updated_time' => LastUpdatedTime,
  ?'parent_id' => StackId,
  ?'root_id' => StackId,
  ?'stack_id' => StackId,
  ?'stack_name' => StackName,
  ?'stack_status' => StackStatus,
  ?'stack_status_reason' => StackStatusReason,
  ?'template_description' => TemplateDescription,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->deletion_time = $deletion_time ?? 0;
    $this->drift_information = $drift_information ?? null;
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->parent_id = $parent_id ?? "";
    $this->root_id = $root_id ?? "";
    $this->stack_id = $stack_id ?? "";
    $this->stack_name = $stack_name ?? "";
    $this->stack_status = $stack_status ?? "";
    $this->stack_status_reason = $stack_status_reason ?? "";
    $this->template_description = $template_description ?? "";
  }
}

type Stacks = vec<Stack>;

type StageList = vec<TemplateStage>;

class StaleRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type StatusMessage = string;

class StopStackSetOperationInput {
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ?'stack_set_name' => StackSetName,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class StopStackSetOperationOutput {

  public function __construct(shape(
  ) $s = shape()) {
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

type TagValue = string;

type Tags = vec<Tag>;

type TemplateBody = string;

type TemplateDescription = string;

class TemplateParameter {
  public ParameterValue $default_value;
  public Description $description;
  public NoEcho $no_echo;
  public ParameterKey $parameter_key;

  public function __construct(shape(
  ?'default_value' => ParameterValue,
  ?'description' => Description,
  ?'no_echo' => NoEcho,
  ?'parameter_key' => ParameterKey,
  ) $s = shape()) {
    $this->default_value = $default_value ?? "";
    $this->description = $description ?? "";
    $this->no_echo = $no_echo ?? false;
    $this->parameter_key = $parameter_key ?? "";
  }
}

type TemplateParameters = vec<TemplateParameter>;

type TemplateStage = string;

type TemplateURL = string;

type TimeoutMinutes = int;

type Timestamp = int;

class TokenAlreadyExistsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TotalStackInstancesCount = int;

type TransformName = string;

type TransformsList = vec<TransformName>;

type Type = string;

type TypeArn = string;

type TypeName = string;

class TypeNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TypeSchema = string;

type TypeSummaries = vec<TypeSummary>;

class TypeSummary {
  public TypeVersionId $default_version_id;
  public Description $description;
  public Timestamp $last_updated;
  public RegistryType $type;
  public TypeArn $type_arn;
  public TypeName $type_name;

  public function __construct(shape(
  ?'default_version_id' => TypeVersionId,
  ?'description' => Description,
  ?'last_updated' => Timestamp,
  ?'type' => RegistryType,
  ?'type_arn' => TypeArn,
  ?'type_name' => TypeName,
  ) $s = shape()) {
    $this->default_version_id = $default_version_id ?? "";
    $this->description = $description ?? "";
    $this->last_updated = $last_updated ?? 0;
    $this->type = $type ?? "";
    $this->type_arn = $type_arn ?? "";
    $this->type_name = $type_name ?? "";
  }
}

type TypeVersionId = string;

type TypeVersionSummaries = vec<TypeVersionSummary>;

class TypeVersionSummary {
  public TypeArn $arn;
  public Description $description;
  public Timestamp $time_created;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;

  public function __construct(shape(
  ?'arn' => TypeArn,
  ?'description' => Description,
  ?'time_created' => Timestamp,
  ?'type' => RegistryType,
  ?'type_name' => TypeName,
  ?'version_id' => TypeVersionId,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->time_created = $time_created ?? 0;
    $this->type = $type ?? "";
    $this->type_name = $type_name ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class UpdateStackInput {
  public Capabilities $capabilities;
  public ClientRequestToken $client_request_token;
  public NotificationARNs $notification_ar_ns;
  public Parameters $parameters;
  public ResourceTypes $resource_types;
  public RoleARN $role_arn;
  public RollbackConfiguration $rollback_configuration;
  public StackName $stack_name;
  public StackPolicyBody $stack_policy_body;
  public StackPolicyDuringUpdateBody $stack_policy_during_update_body;
  public StackPolicyDuringUpdateURL $stack_policy_during_update_url;
  public StackPolicyURL $stack_policy_url;
  public Tags $tags;
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public UsePreviousTemplate $use_previous_template;

  public function __construct(shape(
  ?'capabilities' => Capabilities,
  ?'client_request_token' => ClientRequestToken,
  ?'notification_ar_ns' => NotificationARNs,
  ?'parameters' => Parameters,
  ?'resource_types' => ResourceTypes,
  ?'role_arn' => RoleARN,
  ?'rollback_configuration' => RollbackConfiguration,
  ?'stack_name' => StackName,
  ?'stack_policy_body' => StackPolicyBody,
  ?'stack_policy_during_update_body' => StackPolicyDuringUpdateBody,
  ?'stack_policy_during_update_url' => StackPolicyDuringUpdateURL,
  ?'stack_policy_url' => StackPolicyURL,
  ?'tags' => Tags,
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ?'use_previous_template' => UsePreviousTemplate,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->client_request_token = $client_request_token ?? "";
    $this->notification_ar_ns = $notification_ar_ns ?? [];
    $this->parameters = $parameters ?? [];
    $this->resource_types = $resource_types ?? [];
    $this->role_arn = $role_arn ?? "";
    $this->rollback_configuration = $rollback_configuration ?? null;
    $this->stack_name = $stack_name ?? "";
    $this->stack_policy_body = $stack_policy_body ?? "";
    $this->stack_policy_during_update_body = $stack_policy_during_update_body ?? "";
    $this->stack_policy_during_update_url = $stack_policy_during_update_url ?? "";
    $this->stack_policy_url = $stack_policy_url ?? "";
    $this->tags = $tags ?? [];
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
    $this->use_previous_template = $use_previous_template ?? false;
  }
}

class UpdateStackInstancesInput {
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public Parameters $parameter_overrides;
  public RegionList $regions;
  public StackSetNameOrId $stack_set_name;

  public function __construct(shape(
  ?'accounts' => AccountList,
  ?'deployment_targets' => DeploymentTargets,
  ?'operation_id' => ClientRequestToken,
  ?'operation_preferences' => StackSetOperationPreferences,
  ?'parameter_overrides' => Parameters,
  ?'regions' => RegionList,
  ?'stack_set_name' => StackSetNameOrId,
  ) $s = shape()) {
    $this->accounts = $accounts ?? [];
    $this->deployment_targets = $deployment_targets ?? null;
    $this->operation_id = $operation_id ?? "";
    $this->operation_preferences = $operation_preferences ?? null;
    $this->parameter_overrides = $parameter_overrides ?? [];
    $this->regions = $regions ?? [];
    $this->stack_set_name = $stack_set_name ?? "";
  }
}

class UpdateStackInstancesOutput {
  public ClientRequestToken $operation_id;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class UpdateStackOutput {
  public StackId $stack_id;

  public function __construct(shape(
  ?'stack_id' => StackId,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? "";
  }
}

class UpdateStackSetInput {
  public AccountList $accounts;
  public RoleARN $administration_role_arn;
  public AutoDeployment $auto_deployment;
  public Capabilities $capabilities;
  public DeploymentTargets $deployment_targets;
  public Description $description;
  public ExecutionRoleName $execution_role_name;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public Parameters $parameters;
  public PermissionModels $permission_model;
  public RegionList $regions;
  public StackSetName $stack_set_name;
  public Tags $tags;
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public UsePreviousTemplate $use_previous_template;

  public function __construct(shape(
  ?'accounts' => AccountList,
  ?'administration_role_arn' => RoleARN,
  ?'auto_deployment' => AutoDeployment,
  ?'capabilities' => Capabilities,
  ?'deployment_targets' => DeploymentTargets,
  ?'description' => Description,
  ?'execution_role_name' => ExecutionRoleName,
  ?'operation_id' => ClientRequestToken,
  ?'operation_preferences' => StackSetOperationPreferences,
  ?'parameters' => Parameters,
  ?'permission_model' => PermissionModels,
  ?'regions' => RegionList,
  ?'stack_set_name' => StackSetName,
  ?'tags' => Tags,
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ?'use_previous_template' => UsePreviousTemplate,
  ) $s = shape()) {
    $this->accounts = $accounts ?? [];
    $this->administration_role_arn = $administration_role_arn ?? "";
    $this->auto_deployment = $auto_deployment ?? null;
    $this->capabilities = $capabilities ?? [];
    $this->deployment_targets = $deployment_targets ?? null;
    $this->description = $description ?? "";
    $this->execution_role_name = $execution_role_name ?? "";
    $this->operation_id = $operation_id ?? "";
    $this->operation_preferences = $operation_preferences ?? null;
    $this->parameters = $parameters ?? [];
    $this->permission_model = $permission_model ?? "";
    $this->regions = $regions ?? [];
    $this->stack_set_name = $stack_set_name ?? "";
    $this->tags = $tags ?? [];
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
    $this->use_previous_template = $use_previous_template ?? false;
  }
}

class UpdateStackSetOutput {
  public ClientRequestToken $operation_id;

  public function __construct(shape(
  ?'operation_id' => ClientRequestToken,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class UpdateTerminationProtectionInput {
  public EnableTerminationProtection $enable_termination_protection;
  public StackNameOrId $stack_name;

  public function __construct(shape(
  ?'enable_termination_protection' => EnableTerminationProtection,
  ?'stack_name' => StackNameOrId,
  ) $s = shape()) {
    $this->enable_termination_protection = $enable_termination_protection ?? false;
    $this->stack_name = $stack_name ?? "";
  }
}

class UpdateTerminationProtectionOutput {
  public StackId $stack_id;

  public function __construct(shape(
  ?'stack_id' => StackId,
  ) $s = shape()) {
    $this->stack_id = $stack_id ?? "";
  }
}

type Url = string;

type UsePreviousTemplate = bool;

type UsePreviousValue = bool;

class ValidateTemplateInput {
  public TemplateBody $template_body;
  public TemplateURL $template_url;

  public function __construct(shape(
  ?'template_body' => TemplateBody,
  ?'template_url' => TemplateURL,
  ) $s = shape()) {
    $this->template_body = $template_body ?? "";
    $this->template_url = $template_url ?? "";
  }
}

class ValidateTemplateOutput {
  public Capabilities $capabilities;
  public CapabilitiesReason $capabilities_reason;
  public TransformsList $declared_transforms;
  public Description $description;
  public TemplateParameters $parameters;

  public function __construct(shape(
  ?'capabilities' => Capabilities,
  ?'capabilities_reason' => CapabilitiesReason,
  ?'declared_transforms' => TransformsList,
  ?'description' => Description,
  ?'parameters' => TemplateParameters,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->capabilities_reason = $capabilities_reason ?? "";
    $this->declared_transforms = $declared_transforms ?? [];
    $this->description = $description ?? "";
    $this->parameters = $parameters ?? [];
  }
}

type Value = string;

type Version = string;

type Visibility = string;

