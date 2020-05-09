<?hh // strict
namespace slack\aws\cloudformation;

interface CloudFormation {
  public function CancelUpdateStack(CancelUpdateStackInput) Awaitable<Errors\Error>;
  public function ContinueUpdateRollback(ContinueUpdateRollbackInput) Awaitable<Errors\Result<ContinueUpdateRollbackOutput>>;
  public function CreateChangeSet(CreateChangeSetInput) Awaitable<Errors\Result<CreateChangeSetOutput>>;
  public function CreateStack(CreateStackInput) Awaitable<Errors\Result<CreateStackOutput>>;
  public function CreateStackInstances(CreateStackInstancesInput) Awaitable<Errors\Result<CreateStackInstancesOutput>>;
  public function CreateStackSet(CreateStackSetInput) Awaitable<Errors\Result<CreateStackSetOutput>>;
  public function DeleteChangeSet(DeleteChangeSetInput) Awaitable<Errors\Result<DeleteChangeSetOutput>>;
  public function DeleteStack(DeleteStackInput) Awaitable<Errors\Error>;
  public function DeleteStackInstances(DeleteStackInstancesInput) Awaitable<Errors\Result<DeleteStackInstancesOutput>>;
  public function DeleteStackSet(DeleteStackSetInput) Awaitable<Errors\Result<DeleteStackSetOutput>>;
  public function DeregisterType(DeregisterTypeInput) Awaitable<Errors\Result<DeregisterTypeOutput>>;
  public function DescribeAccountLimits(DescribeAccountLimitsInput) Awaitable<Errors\Result<DescribeAccountLimitsOutput>>;
  public function DescribeChangeSet(DescribeChangeSetInput) Awaitable<Errors\Result<DescribeChangeSetOutput>>;
  public function DescribeStackDriftDetectionStatus(DescribeStackDriftDetectionStatusInput) Awaitable<Errors\Result<DescribeStackDriftDetectionStatusOutput>>;
  public function DescribeStackEvents(DescribeStackEventsInput) Awaitable<Errors\Result<DescribeStackEventsOutput>>;
  public function DescribeStackInstance(DescribeStackInstanceInput) Awaitable<Errors\Result<DescribeStackInstanceOutput>>;
  public function DescribeStackResource(DescribeStackResourceInput) Awaitable<Errors\Result<DescribeStackResourceOutput>>;
  public function DescribeStackResourceDrifts(DescribeStackResourceDriftsInput) Awaitable<Errors\Result<DescribeStackResourceDriftsOutput>>;
  public function DescribeStackResources(DescribeStackResourcesInput) Awaitable<Errors\Result<DescribeStackResourcesOutput>>;
  public function DescribeStackSet(DescribeStackSetInput) Awaitable<Errors\Result<DescribeStackSetOutput>>;
  public function DescribeStackSetOperation(DescribeStackSetOperationInput) Awaitable<Errors\Result<DescribeStackSetOperationOutput>>;
  public function DescribeStacks(DescribeStacksInput) Awaitable<Errors\Result<DescribeStacksOutput>>;
  public function DescribeType(DescribeTypeInput) Awaitable<Errors\Result<DescribeTypeOutput>>;
  public function DescribeTypeRegistration(DescribeTypeRegistrationInput) Awaitable<Errors\Result<DescribeTypeRegistrationOutput>>;
  public function DetectStackDrift(DetectStackDriftInput) Awaitable<Errors\Result<DetectStackDriftOutput>>;
  public function DetectStackResourceDrift(DetectStackResourceDriftInput) Awaitable<Errors\Result<DetectStackResourceDriftOutput>>;
  public function DetectStackSetDrift(DetectStackSetDriftInput) Awaitable<Errors\Result<DetectStackSetDriftOutput>>;
  public function EstimateTemplateCost(EstimateTemplateCostInput) Awaitable<Errors\Result<EstimateTemplateCostOutput>>;
  public function ExecuteChangeSet(ExecuteChangeSetInput) Awaitable<Errors\Result<ExecuteChangeSetOutput>>;
  public function GetStackPolicy(GetStackPolicyInput) Awaitable<Errors\Result<GetStackPolicyOutput>>;
  public function GetTemplate(GetTemplateInput) Awaitable<Errors\Result<GetTemplateOutput>>;
  public function GetTemplateSummary(GetTemplateSummaryInput) Awaitable<Errors\Result<GetTemplateSummaryOutput>>;
  public function ListChangeSets(ListChangeSetsInput) Awaitable<Errors\Result<ListChangeSetsOutput>>;
  public function ListExports(ListExportsInput) Awaitable<Errors\Result<ListExportsOutput>>;
  public function ListImports(ListImportsInput) Awaitable<Errors\Result<ListImportsOutput>>;
  public function ListStackInstances(ListStackInstancesInput) Awaitable<Errors\Result<ListStackInstancesOutput>>;
  public function ListStackResources(ListStackResourcesInput) Awaitable<Errors\Result<ListStackResourcesOutput>>;
  public function ListStackSetOperationResults(ListStackSetOperationResultsInput) Awaitable<Errors\Result<ListStackSetOperationResultsOutput>>;
  public function ListStackSetOperations(ListStackSetOperationsInput) Awaitable<Errors\Result<ListStackSetOperationsOutput>>;
  public function ListStackSets(ListStackSetsInput) Awaitable<Errors\Result<ListStackSetsOutput>>;
  public function ListStacks(ListStacksInput) Awaitable<Errors\Result<ListStacksOutput>>;
  public function ListTypeRegistrations(ListTypeRegistrationsInput) Awaitable<Errors\Result<ListTypeRegistrationsOutput>>;
  public function ListTypeVersions(ListTypeVersionsInput) Awaitable<Errors\Result<ListTypeVersionsOutput>>;
  public function ListTypes(ListTypesInput) Awaitable<Errors\Result<ListTypesOutput>>;
  public function RecordHandlerProgress(RecordHandlerProgressInput) Awaitable<Errors\Result<RecordHandlerProgressOutput>>;
  public function RegisterType(RegisterTypeInput) Awaitable<Errors\Result<RegisterTypeOutput>>;
  public function SetStackPolicy(SetStackPolicyInput) Awaitable<Errors\Error>;
  public function SetTypeDefaultVersion(SetTypeDefaultVersionInput) Awaitable<Errors\Result<SetTypeDefaultVersionOutput>>;
  public function SignalResource(SignalResourceInput) Awaitable<Errors\Error>;
  public function StopStackSetOperation(StopStackSetOperationInput) Awaitable<Errors\Result<StopStackSetOperationOutput>>;
  public function UpdateStack(UpdateStackInput) Awaitable<Errors\Result<UpdateStackOutput>>;
  public function UpdateStackInstances(UpdateStackInstancesInput) Awaitable<Errors\Result<UpdateStackInstancesOutput>>;
  public function UpdateStackSet(UpdateStackSetInput) Awaitable<Errors\Result<UpdateStackSetOutput>>;
  public function UpdateTerminationProtection(UpdateTerminationProtectionInput) Awaitable<Errors\Result<UpdateTerminationProtectionOutput>>;
  public function ValidateTemplate(ValidateTemplateInput) Awaitable<Errors\Result<ValidateTemplateOutput>>;
}

class Account {
}

class AccountGateResult {
  public AccountGateStatus $status;
  public AccountGateStatusReason $status_reason;
}

class AccountGateStatus {
}

class AccountGateStatusReason {
}

class AccountLimit {
  public LimitName $name;
  public LimitValue $value;
}

class AccountLimitList {
}

class AccountList {
}

class AllowedValue {
}

class AllowedValues {
}

class AlreadyExistsException {
}

class Arn {
}

class AutoDeployment {
  public AutoDeploymentNullable $enabled;
  public RetainStacksOnAccountRemovalNullable $retain_stacks_on_account_removal;
}

class AutoDeploymentNullable {
}

class BoxedInteger {
}

class BoxedMaxResults {
}

class CFNRegistryException {
  public ErrorMessage $message;
}

class CancelUpdateStackInput {
  public ClientRequestToken $client_request_token;
  public StackName $stack_name;
}

class Capabilities {
}

class CapabilitiesReason {
}

class Capability {
}

class CausingEntity {
}

class Change {
  public ResourceChange $resource_change;
  public ChangeType $type;
}

class ChangeAction {
}

class ChangeSetId {
}

class ChangeSetName {
}

class ChangeSetNameOrId {
}

class ChangeSetNotFoundException {
}

class ChangeSetStatus {
}

class ChangeSetStatusReason {
}

class ChangeSetSummaries {
}

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
}

class ChangeSetType {
}

class ChangeSource {
}

class ChangeType {
}

class Changes {
}

class ClientRequestToken {
}

class ClientToken {
}

class ContinueUpdateRollbackInput {
  public ClientRequestToken $client_request_token;
  public ResourcesToSkip $resources_to_skip;
  public RoleARN $role_arn;
  public StackNameOrId $stack_name;
}

class ContinueUpdateRollbackOutput {
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
}

class CreateChangeSetOutput {
  public ChangeSetId $id;
  public StackId $stack_id;
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
}

class CreateStackInstancesInput {
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public Parameters $parameter_overrides;
  public RegionList $regions;
  public StackSetName $stack_set_name;
}

class CreateStackInstancesOutput {
  public ClientRequestToken $operation_id;
}

class CreateStackOutput {
  public StackId $stack_id;
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
}

class CreateStackSetOutput {
  public StackSetId $stack_set_id;
}

class CreatedButModifiedException {
}

class CreationTime {
}

class DeleteChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public StackNameOrId $stack_name;
}

class DeleteChangeSetOutput {
}

class DeleteStackInput {
  public ClientRequestToken $client_request_token;
  public RetainResources $retain_resources;
  public RoleARN $role_arn;
  public StackName $stack_name;
}

class DeleteStackInstancesInput {
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public RegionList $regions;
  public RetainStacks $retain_stacks;
  public StackSetName $stack_set_name;
}

class DeleteStackInstancesOutput {
  public ClientRequestToken $operation_id;
}

class DeleteStackSetInput {
  public StackSetName $stack_set_name;
}

class DeleteStackSetOutput {
}

class DeletionTime {
}

class DeploymentTargets {
  public AccountList $accounts;
  public OrganizationalUnitIdList $organizational_unit_ids;
}

class DeprecatedStatus {
}

class DeregisterTypeInput {
  public PrivateTypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;
}

class DeregisterTypeOutput {
}

class DescribeAccountLimitsInput {
  public NextToken $next_token;
}

class DescribeAccountLimitsOutput {
  public AccountLimitList $account_limits;
  public NextToken $next_token;
}

class DescribeChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public NextToken $next_token;
  public StackNameOrId $stack_name;
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
}

class DescribeStackDriftDetectionStatusInput {
  public StackDriftDetectionId $stack_drift_detection_id;
}

class DescribeStackDriftDetectionStatusOutput {
  public StackDriftDetectionStatus $detection_status;
  public StackDriftDetectionStatusReason $detection_status_reason;
  public BoxedInteger $drifted_stack_resource_count;
  public StackDriftDetectionId $stack_drift_detection_id;
  public StackDriftStatus $stack_drift_status;
  public StackId $stack_id;
  public Timestamp $timestamp;
}

class DescribeStackEventsInput {
  public NextToken $next_token;
  public StackName $stack_name;
}

class DescribeStackEventsOutput {
  public NextToken $next_token;
  public StackEvents $stack_events;
}

class DescribeStackInstanceInput {
  public Account $stack_instance_account;
  public Region $stack_instance_region;
  public StackSetName $stack_set_name;
}

class DescribeStackInstanceOutput {
  public StackInstance $stack_instance;
}

class DescribeStackResourceDriftsInput {
  public BoxedMaxResults $max_results;
  public NextToken $next_token;
  public StackNameOrId $stack_name;
  public StackResourceDriftStatusFilters $stack_resource_drift_status_filters;
}

class DescribeStackResourceDriftsOutput {
  public NextToken $next_token;
  public StackResourceDrifts $stack_resource_drifts;
}

class DescribeStackResourceInput {
  public LogicalResourceId $logical_resource_id;
  public StackName $stack_name;
}

class DescribeStackResourceOutput {
  public StackResourceDetail $stack_resource_detail;
}

class DescribeStackResourcesInput {
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public StackName $stack_name;
}

class DescribeStackResourcesOutput {
  public StackResources $stack_resources;
}

class DescribeStackSetInput {
  public StackSetName $stack_set_name;
}

class DescribeStackSetOperationInput {
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;
}

class DescribeStackSetOperationOutput {
  public StackSetOperation $stack_set_operation;
}

class DescribeStackSetOutput {
  public StackSet $stack_set;
}

class DescribeStacksInput {
  public NextToken $next_token;
  public StackName $stack_name;
}

class DescribeStacksOutput {
  public NextToken $next_token;
  public Stacks $stacks;
}

class DescribeTypeInput {
  public TypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;
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
}

class DescribeTypeRegistrationInput {
  public RegistrationToken $registration_token;
}

class DescribeTypeRegistrationOutput {
  public Description $description;
  public RegistrationStatus $progress_status;
  public TypeArn $type_arn;
  public TypeArn $type_version_arn;
}

class Description {
}

class DetectStackDriftInput {
  public LogicalResourceIds $logical_resource_ids;
  public StackNameOrId $stack_name;
}

class DetectStackDriftOutput {
  public StackDriftDetectionId $stack_drift_detection_id;
}

class DetectStackResourceDriftInput {
  public LogicalResourceId $logical_resource_id;
  public StackNameOrId $stack_name;
}

class DetectStackResourceDriftOutput {
  public StackResourceDrift $stack_resource_drift;
}

class DetectStackSetDriftInput {
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public StackSetNameOrId $stack_set_name;
}

class DetectStackSetDriftOutput {
  public ClientRequestToken $operation_id;
}

class DifferenceType {
}

class DisableRollback {
}

class DriftedStackInstancesCount {
}

class EnableTerminationProtection {
}

class ErrorMessage {
}

class EstimateTemplateCostInput {
  public Parameters $parameters;
  public TemplateBody $template_body;
  public TemplateURL $template_url;
}

class EstimateTemplateCostOutput {
  public Url $url;
}

class EvaluationType {
}

class EventId {
}

class ExecuteChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public ClientRequestToken $client_request_token;
  public StackNameOrId $stack_name;
}

class ExecuteChangeSetOutput {
}

class ExecutionRoleName {
}

class ExecutionStatus {
}

class Export {
  public StackId $exporting_stack_id;
  public ExportName $name;
  public ExportValue $value;
}

class ExportName {
}

class ExportValue {
}

class Exports {
}

class FailedStackInstancesCount {
}

class FailureToleranceCount {
}

class FailureTolerancePercentage {
}

class GetStackPolicyInput {
  public StackName $stack_name;
}

class GetStackPolicyOutput {
  public StackPolicyBody $stack_policy_body;
}

class GetTemplateInput {
  public ChangeSetNameOrId $change_set_name;
  public StackName $stack_name;
  public TemplateStage $template_stage;
}

class GetTemplateOutput {
  public StageList $stages_available;
  public TemplateBody $template_body;
}

class GetTemplateSummaryInput {
  public StackNameOrId $stack_name;
  public StackSetNameOrId $stack_set_name;
  public TemplateBody $template_body;
  public TemplateURL $template_url;
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
}

class HandlerErrorCode {
}

class Imports {
}

class InProgressStackInstancesCount {
}

class InSyncStackInstancesCount {
}

class InsufficientCapabilitiesException {
}

class InvalidChangeSetStatusException {
}

class InvalidOperationException {
}

class InvalidStateTransitionException {
}

class Key {
}

class LastUpdatedTime {
}

class LimitExceededException {
}

class LimitName {
}

class LimitValue {
}

class ListChangeSetsInput {
  public NextToken $next_token;
  public StackNameOrId $stack_name;
}

class ListChangeSetsOutput {
  public NextToken $next_token;
  public ChangeSetSummaries $summaries;
}

class ListExportsInput {
  public NextToken $next_token;
}

class ListExportsOutput {
  public Exports $exports;
  public NextToken $next_token;
}

class ListImportsInput {
  public ExportName $export_name;
  public NextToken $next_token;
}

class ListImportsOutput {
  public Imports $imports;
  public NextToken $next_token;
}

class ListStackInstancesInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Account $stack_instance_account;
  public Region $stack_instance_region;
  public StackSetName $stack_set_name;
}

class ListStackInstancesOutput {
  public NextToken $next_token;
  public StackInstanceSummaries $summaries;
}

class ListStackResourcesInput {
  public NextToken $next_token;
  public StackName $stack_name;
}

class ListStackResourcesOutput {
  public NextToken $next_token;
  public StackResourceSummaries $stack_resource_summaries;
}

class ListStackSetOperationResultsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;
}

class ListStackSetOperationResultsOutput {
  public NextToken $next_token;
  public StackSetOperationResultSummaries $summaries;
}

class ListStackSetOperationsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public StackSetName $stack_set_name;
}

class ListStackSetOperationsOutput {
  public NextToken $next_token;
  public StackSetOperationSummaries $summaries;
}

class ListStackSetsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public StackSetStatus $status;
}

class ListStackSetsOutput {
  public NextToken $next_token;
  public StackSetSummaries $summaries;
}

class ListStacksInput {
  public NextToken $next_token;
  public StackStatusFilter $stack_status_filter;
}

class ListStacksOutput {
  public NextToken $next_token;
  public StackSummaries $stack_summaries;
}

class ListTypeRegistrationsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistrationStatus $registration_status_filter;
  public RegistryType $type;
  public TypeArn $type_arn;
  public TypeName $type_name;
}

class ListTypeRegistrationsOutput {
  public NextToken $next_token;
  public RegistrationTokenList $registration_token_list;
}

class ListTypeVersionsInput {
  public PrivateTypeArn $arn;
  public DeprecatedStatus $deprecated_status;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryType $type;
  public TypeName $type_name;
}

class ListTypeVersionsOutput {
  public NextToken $next_token;
  public TypeVersionSummaries $type_version_summaries;
}

class ListTypesInput {
  public DeprecatedStatus $deprecated_status;
  public MaxResults $max_results;
  public NextToken $next_token;
  public ProvisioningType $provisioning_type;
  public Visibility $visibility;
}

class ListTypesOutput {
  public NextToken $next_token;
  public TypeSummaries $type_summaries;
}

class LogGroupName {
}

class LoggingConfig {
  public LogGroupName $log_group_name;
  public RoleArn $log_role_arn;
}

class LogicalResourceId {
}

class LogicalResourceIds {
}

class MaxConcurrentCount {
}

class MaxConcurrentPercentage {
}

class MaxResults {
}

class Metadata {
}

class MonitoringTimeInMinutes {
}

class NameAlreadyExistsException {
}

class NextToken {
}

class NoEcho {
}

class NotificationARN {
}

class NotificationARNs {
}

class OnFailure {
}

class OperationIdAlreadyExistsException {
}

class OperationInProgressException {
}

class OperationNotFoundException {
}

class OperationStatus {
}

class OperationStatusCheckFailedException {
}

class OptionalSecureUrl {
}

class OrganizationalUnitId {
}

class OrganizationalUnitIdList {
}

class Output {
  public Description $description;
  public ExportName $export_name;
  public OutputKey $output_key;
  public OutputValue $output_value;
}

class OutputKey {
}

class OutputValue {
}

class Outputs {
}

class Parameter {
  public ParameterKey $parameter_key;
  public ParameterValue $parameter_value;
  public ParameterValue $resolved_value;
  public UsePreviousValue $use_previous_value;
}

class ParameterConstraints {
  public AllowedValues $allowed_values;
}

class ParameterDeclaration {
  public ParameterValue $default_value;
  public Description $description;
  public NoEcho $no_echo;
  public ParameterConstraints $parameter_constraints;
  public ParameterKey $parameter_key;
  public ParameterType $parameter_type;
}

class ParameterDeclarations {
}

class ParameterKey {
}

class ParameterType {
}

class ParameterValue {
}

class Parameters {
}

class PermissionModels {
}

class PhysicalResourceId {
}

class PhysicalResourceIdContext {
}

class PhysicalResourceIdContextKeyValuePair {
  public Key $key;
  public Value $value;
}

class PrivateTypeArn {
}

class Properties {
}

class PropertyDifference {
  public PropertyValue $actual_value;
  public DifferenceType $difference_type;
  public PropertyValue $expected_value;
  public PropertyPath $property_path;
}

class PropertyDifferences {
}

class PropertyName {
}

class PropertyPath {
}

class PropertyValue {
}

class ProvisioningType {
}

class Reason {
}

class RecordHandlerProgressInput {
  public ClientToken $bearer_token;
  public ClientRequestToken $client_request_token;
  public OperationStatus $current_operation_status;
  public HandlerErrorCode $error_code;
  public OperationStatus $operation_status;
  public ResourceModel $resource_model;
  public StatusMessage $status_message;
}

class RecordHandlerProgressOutput {
}

class Region {
}

class RegionList {
}

class RegisterTypeInput {
  public RequestToken $client_request_token;
  public RoleArn $execution_role_arn;
  public LoggingConfig $logging_config;
  public S3Url $schema_handler_package;
  public RegistryType $type;
  public TypeName $type_name;
}

class RegisterTypeOutput {
  public RegistrationToken $registration_token;
}

class RegistrationStatus {
}

class RegistrationToken {
}

class RegistrationTokenList {
}

class RegistryType {
}

class Replacement {
}

class RequestToken {
}

class RequiresRecreation {
}

class ResourceAttribute {
}

class ResourceChange {
  public ChangeAction $action;
  public ResourceChangeDetails $details;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public Replacement $replacement;
  public ResourceType $resource_type;
  public Scope $scope;
}

class ResourceChangeDetail {
  public CausingEntity $causing_entity;
  public ChangeSource $change_source;
  public EvaluationType $evaluation;
  public ResourceTargetDefinition $target;
}

class ResourceChangeDetails {
}

class ResourceIdentifierProperties {
}

class ResourceIdentifierPropertyKey {
}

class ResourceIdentifierPropertyValue {
}

class ResourceIdentifierSummaries {
}

class ResourceIdentifierSummary {
  public LogicalResourceIds $logical_resource_ids;
  public ResourceIdentifiers $resource_identifiers;
  public ResourceType $resource_type;
}

class ResourceIdentifiers {
}

class ResourceModel {
}

class ResourceProperties {
}

class ResourceSignalStatus {
}

class ResourceSignalUniqueId {
}

class ResourceStatus {
}

class ResourceStatusReason {
}

class ResourceTargetDefinition {
  public ResourceAttribute $attribute;
  public PropertyName $name;
  public RequiresRecreation $requires_recreation;
}

class ResourceToImport {
  public LogicalResourceId $logical_resource_id;
  public ResourceIdentifierProperties $resource_identifier;
  public ResourceType $resource_type;
}

class ResourceToSkip {
}

class ResourceType {
}

class ResourceTypes {
}

class ResourcesToImport {
}

class ResourcesToSkip {
}

class RetainResources {
}

class RetainStacks {
}

class RetainStacksNullable {
}

class RetainStacksOnAccountRemovalNullable {
}

class RoleARN {
}

class RoleArn {
}

class RollbackConfiguration {
  public MonitoringTimeInMinutes $monitoring_time_in_minutes;
  public RollbackTriggers $rollback_triggers;
}

class RollbackTrigger {
  public Arn $arn;
  public Type $type;
}

class RollbackTriggers {
}

class S3Url {
}

class Scope {
}

class SetStackPolicyInput {
  public StackName $stack_name;
  public StackPolicyBody $stack_policy_body;
  public StackPolicyURL $stack_policy_url;
}

class SetTypeDefaultVersionInput {
  public PrivateTypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;
}

class SetTypeDefaultVersionOutput {
}

class SignalResourceInput {
  public LogicalResourceId $logical_resource_id;
  public StackNameOrId $stack_name;
  public ResourceSignalStatus $status;
  public ResourceSignalUniqueId $unique_id;
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
}

class StackDriftDetectionId {
}

class StackDriftDetectionStatus {
}

class StackDriftDetectionStatusReason {
}

class StackDriftInformation {
  public Timestamp $last_check_timestamp;
  public StackDriftStatus $stack_drift_status;
}

class StackDriftInformationSummary {
  public Timestamp $last_check_timestamp;
  public StackDriftStatus $stack_drift_status;
}

class StackDriftStatus {
}

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
}

class StackEvents {
}

class StackId {
}

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
}

class StackInstanceNotFoundException {
}

class StackInstanceStatus {
}

class StackInstanceSummaries {
}

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
}

class StackName {
}

class StackNameOrId {
}

class StackPolicyBody {
}

class StackPolicyDuringUpdateBody {
}

class StackPolicyDuringUpdateURL {
}

class StackPolicyURL {
}

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
}

class StackResourceDriftInformation {
  public Timestamp $last_check_timestamp;
  public StackResourceDriftStatus $stack_resource_drift_status;
}

class StackResourceDriftInformationSummary {
  public Timestamp $last_check_timestamp;
  public StackResourceDriftStatus $stack_resource_drift_status;
}

class StackResourceDriftStatus {
}

class StackResourceDriftStatusFilters {
}

class StackResourceDrifts {
}

class StackResourceSummaries {
}

class StackResourceSummary {
  public StackResourceDriftInformationSummary $drift_information;
  public Timestamp $last_updated_timestamp;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public ResourceType $resource_type;
}

class StackResources {
}

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
}

class StackSetARN {
}

class StackSetDriftDetectionDetails {
  public StackSetDriftDetectionStatus $drift_detection_status;
  public StackSetDriftStatus $drift_status;
  public DriftedStackInstancesCount $drifted_stack_instances_count;
  public FailedStackInstancesCount $failed_stack_instances_count;
  public InProgressStackInstancesCount $in_progress_stack_instances_count;
  public InSyncStackInstancesCount $in_sync_stack_instances_count;
  public Timestamp $last_drift_check_timestamp;
  public TotalStackInstancesCount $total_stack_instances_count;
}

class StackSetDriftDetectionStatus {
}

class StackSetDriftStatus {
}

class StackSetId {
}

class StackSetName {
}

class StackSetNameOrId {
}

class StackSetNotEmptyException {
}

class StackSetNotFoundException {
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
}

class StackSetOperationAction {
}

class StackSetOperationPreferences {
  public FailureToleranceCount $failure_tolerance_count;
  public FailureTolerancePercentage $failure_tolerance_percentage;
  public MaxConcurrentCount $max_concurrent_count;
  public MaxConcurrentPercentage $max_concurrent_percentage;
  public RegionList $region_order;
}

class StackSetOperationResultStatus {
}

class StackSetOperationResultSummaries {
}

class StackSetOperationResultSummary {
  public Account $account;
  public AccountGateResult $account_gate_result;
  public OrganizationalUnitId $organizational_unit_id;
  public Region $region;
  public StackSetOperationResultStatus $status;
  public Reason $status_reason;
}

class StackSetOperationStatus {
}

class StackSetOperationSummaries {
}

class StackSetOperationSummary {
  public StackSetOperationAction $action;
  public Timestamp $creation_timestamp;
  public Timestamp $end_timestamp;
  public ClientRequestToken $operation_id;
  public StackSetOperationStatus $status;
}

class StackSetStatus {
}

class StackSetSummaries {
}

class StackSetSummary {
  public AutoDeployment $auto_deployment;
  public Description $description;
  public StackDriftStatus $drift_status;
  public Timestamp $last_drift_check_timestamp;
  public PermissionModels $permission_model;
  public StackSetId $stack_set_id;
  public StackSetName $stack_set_name;
  public StackSetStatus $status;
}

class StackStatus {
}

class StackStatusFilter {
}

class StackStatusReason {
}

class StackSummaries {
}

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
}

class Stacks {
}

class StageList {
}

class StaleRequestException {
}

class StatusMessage {
}

class StopStackSetOperationInput {
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;
}

class StopStackSetOperationOutput {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagValue {
}

class Tags {
}

class TemplateBody {
}

class TemplateDescription {
}

class TemplateParameter {
  public ParameterValue $default_value;
  public Description $description;
  public NoEcho $no_echo;
  public ParameterKey $parameter_key;
}

class TemplateParameters {
}

class TemplateStage {
}

class TemplateURL {
}

class TimeoutMinutes {
}

class Timestamp {
}

class TokenAlreadyExistsException {
}

class TotalStackInstancesCount {
}

class TransformName {
}

class TransformsList {
}

class Type {
}

class TypeArn {
}

class TypeName {
}

class TypeNotFoundException {
}

class TypeSchema {
}

class TypeSummaries {
}

class TypeSummary {
  public TypeVersionId $default_version_id;
  public Description $description;
  public Timestamp $last_updated;
  public RegistryType $type;
  public TypeArn $type_arn;
  public TypeName $type_name;
}

class TypeVersionId {
}

class TypeVersionSummaries {
}

class TypeVersionSummary {
  public TypeArn $arn;
  public Description $description;
  public Timestamp $time_created;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;
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
}

class UpdateStackInstancesInput {
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
  public ClientRequestToken $operation_id;
  public StackSetOperationPreferences $operation_preferences;
  public Parameters $parameter_overrides;
  public RegionList $regions;
  public StackSetNameOrId $stack_set_name;
}

class UpdateStackInstancesOutput {
  public ClientRequestToken $operation_id;
}

class UpdateStackOutput {
  public StackId $stack_id;
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
}

class UpdateStackSetOutput {
  public ClientRequestToken $operation_id;
}

class UpdateTerminationProtectionInput {
  public EnableTerminationProtection $enable_termination_protection;
  public StackNameOrId $stack_name;
}

class UpdateTerminationProtectionOutput {
  public StackId $stack_id;
}

class Url {
}

class UsePreviousTemplate {
}

class UsePreviousValue {
}

class ValidateTemplateInput {
  public TemplateBody $template_body;
  public TemplateURL $template_url;
}

class ValidateTemplateOutput {
  public Capabilities $capabilities;
  public CapabilitiesReason $capabilities_reason;
  public TransformsList $declared_transforms;
  public Description $description;
  public TemplateParameters $parameters;
}

class Value {
}

class Version {
}

class Visibility {
}

