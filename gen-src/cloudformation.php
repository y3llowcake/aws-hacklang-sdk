<?hh // strict
namespace slack\aws\cloudformation;

interface CloudFormation {
  public function DescribeStackSetOperation(DescribeStackSetOperationInput) Awaitable<Errors\Result<DescribeStackSetOperationOutput>>;
  public function GetTemplateSummary(GetTemplateSummaryInput) Awaitable<Errors\Result<GetTemplateSummaryOutput>>;
  public function ListImports(ListImportsInput) Awaitable<Errors\Result<ListImportsOutput>>;
  public function StopStackSetOperation(StopStackSetOperationInput) Awaitable<Errors\Result<StopStackSetOperationOutput>>;
  public function EstimateTemplateCost(EstimateTemplateCostInput) Awaitable<Errors\Result<EstimateTemplateCostOutput>>;
  public function DeleteStackInstances(DeleteStackInstancesInput) Awaitable<Errors\Result<DeleteStackInstancesOutput>>;
  public function DescribeChangeSet(DescribeChangeSetInput) Awaitable<Errors\Result<DescribeChangeSetOutput>>;
  public function DescribeStackResource(DescribeStackResourceInput) Awaitable<Errors\Result<DescribeStackResourceOutput>>;
  public function DescribeType(DescribeTypeInput) Awaitable<Errors\Result<DescribeTypeOutput>>;
  public function GetTemplate(GetTemplateInput) Awaitable<Errors\Result<GetTemplateOutput>>;
  public function ListStackSetOperations(ListStackSetOperationsInput) Awaitable<Errors\Result<ListStackSetOperationsOutput>>;
  public function CancelUpdateStack(CancelUpdateStackInput) Awaitable<Errors\Error>;
  public function SetStackPolicy(SetStackPolicyInput) Awaitable<Errors\Error>;
  public function ListChangeSets(ListChangeSetsInput) Awaitable<Errors\Result<ListChangeSetsOutput>>;
  public function ListTypeRegistrations(ListTypeRegistrationsInput) Awaitable<Errors\Result<ListTypeRegistrationsOutput>>;
  public function ListTypes(ListTypesInput) Awaitable<Errors\Result<ListTypesOutput>>;
  public function SignalResource(SignalResourceInput) Awaitable<Errors\Error>;
  public function DetectStackDrift(DetectStackDriftInput) Awaitable<Errors\Result<DetectStackDriftOutput>>;
  public function ListExports(ListExportsInput) Awaitable<Errors\Result<ListExportsOutput>>;
  public function ListStackResources(ListStackResourcesInput) Awaitable<Errors\Result<ListStackResourcesOutput>>;
  public function DescribeTypeRegistration(DescribeTypeRegistrationInput) Awaitable<Errors\Result<DescribeTypeRegistrationOutput>>;
  public function DeleteStack(DeleteStackInput) Awaitable<Errors\Error>;
  public function DeleteStackSet(DeleteStackSetInput) Awaitable<Errors\Result<DeleteStackSetOutput>>;
  public function DescribeStacks(DescribeStacksInput) Awaitable<Errors\Result<DescribeStacksOutput>>;
  public function RecordHandlerProgress(RecordHandlerProgressInput) Awaitable<Errors\Result<RecordHandlerProgressOutput>>;
  public function DescribeStackEvents(DescribeStackEventsInput) Awaitable<Errors\Result<DescribeStackEventsOutput>>;
  public function DescribeStackResources(DescribeStackResourcesInput) Awaitable<Errors\Result<DescribeStackResourcesOutput>>;
  public function DetectStackResourceDrift(DetectStackResourceDriftInput) Awaitable<Errors\Result<DetectStackResourceDriftOutput>>;
  public function UpdateTerminationProtection(UpdateTerminationProtectionInput) Awaitable<Errors\Result<UpdateTerminationProtectionOutput>>;
  public function DescribeAccountLimits(DescribeAccountLimitsInput) Awaitable<Errors\Result<DescribeAccountLimitsOutput>>;
  public function GetStackPolicy(GetStackPolicyInput) Awaitable<Errors\Result<GetStackPolicyOutput>>;
  public function DetectStackSetDrift(DetectStackSetDriftInput) Awaitable<Errors\Result<DetectStackSetDriftOutput>>;
  public function UpdateStack(UpdateStackInput) Awaitable<Errors\Result<UpdateStackOutput>>;
  public function ListStackSetOperationResults(ListStackSetOperationResultsInput) Awaitable<Errors\Result<ListStackSetOperationResultsOutput>>;
  public function CreateStackInstances(CreateStackInstancesInput) Awaitable<Errors\Result<CreateStackInstancesOutput>>;
  public function DescribeStackSet(DescribeStackSetInput) Awaitable<Errors\Result<DescribeStackSetOutput>>;
  public function RegisterType(RegisterTypeInput) Awaitable<Errors\Result<RegisterTypeOutput>>;
  public function UpdateStackInstances(UpdateStackInstancesInput) Awaitable<Errors\Result<UpdateStackInstancesOutput>>;
  public function ValidateTemplate(ValidateTemplateInput) Awaitable<Errors\Result<ValidateTemplateOutput>>;
  public function CreateStack(CreateStackInput) Awaitable<Errors\Result<CreateStackOutput>>;
  public function DescribeStackResourceDrifts(DescribeStackResourceDriftsInput) Awaitable<Errors\Result<DescribeStackResourceDriftsOutput>>;
  public function ExecuteChangeSet(ExecuteChangeSetInput) Awaitable<Errors\Result<ExecuteChangeSetOutput>>;
  public function ListStackInstances(ListStackInstancesInput) Awaitable<Errors\Result<ListStackInstancesOutput>>;
  public function ListStackSets(ListStackSetsInput) Awaitable<Errors\Result<ListStackSetsOutput>>;
  public function DescribeStackInstance(DescribeStackInstanceInput) Awaitable<Errors\Result<DescribeStackInstanceOutput>>;
  public function UpdateStackSet(UpdateStackSetInput) Awaitable<Errors\Result<UpdateStackSetOutput>>;
  public function DeleteChangeSet(DeleteChangeSetInput) Awaitable<Errors\Result<DeleteChangeSetOutput>>;
  public function CreateStackSet(CreateStackSetInput) Awaitable<Errors\Result<CreateStackSetOutput>>;
  public function DescribeStackDriftDetectionStatus(DescribeStackDriftDetectionStatusInput) Awaitable<Errors\Result<DescribeStackDriftDetectionStatusOutput>>;
  public function SetTypeDefaultVersion(SetTypeDefaultVersionInput) Awaitable<Errors\Result<SetTypeDefaultVersionOutput>>;
  public function CreateChangeSet(CreateChangeSetInput) Awaitable<Errors\Result<CreateChangeSetOutput>>;
  public function DeregisterType(DeregisterTypeInput) Awaitable<Errors\Result<DeregisterTypeOutput>>;
  public function ListStacks(ListStacksInput) Awaitable<Errors\Result<ListStacksOutput>>;
  public function ListTypeVersions(ListTypeVersionsInput) Awaitable<Errors\Result<ListTypeVersionsOutput>>;
  public function ContinueUpdateRollback(ContinueUpdateRollbackInput) Awaitable<Errors\Result<ContinueUpdateRollbackOutput>>;
}

class CreateStackSetInput {
  public StackSetName $stack_set_name;
  public Description $description;
  public Capabilities $capabilities;
  public Tags $tags;
  public RoleARN $administration_role_arn;
  public PermissionModels $permission_model;
  public ClientRequestToken $client_request_token;
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public Parameters $parameters;
  public ExecutionRoleName $execution_role_name;
  public AutoDeployment $auto_deployment;
}

class Export {
  public ExportValue $value;
  public StackId $exporting_stack_id;
  public ExportName $name;
}

class StackPolicyDuringUpdateBody {
}

class Tag {
  public TagValue $value;
  public TagKey $key;
}

class ChangeSetType {
}

class ListStackInstancesOutput {
  public StackInstanceSummaries $summaries;
  public NextToken $next_token;
}

class ResourceStatus {
}

class StackDriftInformation {
  public StackDriftStatus $stack_drift_status;
  public Timestamp $last_check_timestamp;
}

class EstimateTemplateCostInput {
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public Parameters $parameters;
}

class ExecuteChangeSetOutput {
}

class ExportName {
}

class ListChangeSetsOutput {
  public ChangeSetSummaries $summaries;
  public NextToken $next_token;
}

class DeprecatedStatus {
}

class DescribeStackEventsOutput {
  public StackEvents $stack_events;
  public NextToken $next_token;
}

class Imports {
}

class RecordHandlerProgressOutput {
}

class ChangeAction {
}

class ChangeSetNotFoundException {
}

class LogicalResourceId {
}

class OutputKey {
}

class RollbackConfiguration {
  public RollbackTriggers $rollback_triggers;
  public MonitoringTimeInMinutes $monitoring_time_in_minutes;
}

class StackResourceSummaries {
}

class StackSummaries {
}

class Description {
}

class ExecuteChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public StackNameOrId $stack_name;
  public ClientRequestToken $client_request_token;
}

class ExecutionStatus {
}

class InvalidStateTransitionException {
}

class ListStackSetOperationResultsOutput {
  public StackSetOperationResultSummaries $summaries;
  public NextToken $next_token;
}

class StatusMessage {
}

class StackNameOrId {
}

class StackPolicyDuringUpdateURL {
}

class StackSetOperationResultSummaries {
}

class CausingEntity {
}

class CreateStackInput {
  public RoleARN $role_arn;
  public ClientRequestToken $client_request_token;
  public EnableTerminationProtection $enable_termination_protection;
  public Parameters $parameters;
  public TimeoutMinutes $timeout_in_minutes;
  public Capabilities $capabilities;
  public TemplateBody $template_body;
  public ResourceTypes $resource_types;
  public StackPolicyURL $stack_policy_url;
  public StackPolicyBody $stack_policy_body;
  public DisableRollback $disable_rollback;
  public NotificationARNs $notification_ar_ns;
  public OnFailure $on_failure;
  public Tags $tags;
  public StackName $stack_name;
  public TemplateURL $template_url;
  public RollbackConfiguration $rollback_configuration;
}

class PropertyValue {
}

class Stack {
  public RoleARN $role_arn;
  public EnableTerminationProtection $enable_termination_protection;
  public DisableRollback $disable_rollback;
  public TimeoutMinutes $timeout_in_minutes;
  public Capabilities $capabilities;
  public DeletionTime $deletion_time;
  public LastUpdatedTime $last_updated_time;
  public StackStatus $stack_status;
  public StackStatusReason $stack_status_reason;
  public StackId $stack_id;
  public StackName $stack_name;
  public Description $description;
  public NotificationARNs $notification_ar_ns;
  public Outputs $outputs;
  public Tags $tags;
  public StackId $root_id;
  public ChangeSetId $change_set_id;
  public CreationTime $creation_time;
  public RollbackConfiguration $rollback_configuration;
  public Parameters $parameters;
  public StackId $parent_id;
  public StackDriftInformation $drift_information;
}

class StackDriftStatus {
}

class TagKey {
}

class UpdateStackInput {
  public StackPolicyURL $stack_policy_url;
  public Tags $tags;
  public StackName $stack_name;
  public TemplateURL $template_url;
  public StackPolicyDuringUpdateBody $stack_policy_during_update_body;
  public Parameters $parameters;
  public Capabilities $capabilities;
  public StackPolicyDuringUpdateURL $stack_policy_during_update_url;
  public RoleARN $role_arn;
  public RollbackConfiguration $rollback_configuration;
  public StackPolicyBody $stack_policy_body;
  public NotificationARNs $notification_ar_ns;
  public UsePreviousTemplate $use_previous_template;
  public ClientRequestToken $client_request_token;
  public TemplateBody $template_body;
  public ResourceTypes $resource_types;
}

class DifferenceType {
}

class StackResourceDriftStatusFilters {
}

class UpdateStackOutput {
  public StackId $stack_id;
}

class Scope {
}

class StackSetOperationSummaries {
}

class TokenAlreadyExistsException {
}

class ChangeSetStatus {
}

class ChangeSetSummaries {
}

class GetTemplateInput {
  public TemplateStage $template_stage;
  public StackName $stack_name;
  public ChangeSetNameOrId $change_set_name;
}

class ResourceAttribute {
}

class RoleArn {
}

class DescribeStackInstanceInput {
  public StackSetName $stack_set_name;
  public Account $stack_instance_account;
  public Region $stack_instance_region;
}

class DescribeStackSetOperationInput {
  public StackSetName $stack_set_name;
  public ClientRequestToken $operation_id;
}

class SetTypeDefaultVersionInput {
  public PrivateTypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;
}

class TemplateBody {
}

class Output {
  public OutputKey $output_key;
  public OutputValue $output_value;
  public Description $description;
  public ExportName $export_name;
}

class ParameterConstraints {
  public AllowedValues $allowed_values;
}

class ResourceIdentifierPropertyKey {
}

class ChangeSetNameOrId {
}

class ChangeSetSummary {
  public CreationTime $creation_time;
  public Description $description;
  public StackName $stack_name;
  public ChangeSetName $change_set_name;
  public ExecutionStatus $execution_status;
  public ChangeSetStatusReason $status_reason;
  public StackId $stack_id;
  public ChangeSetId $change_set_id;
  public ChangeSetStatus $status;
}

class DescribeStackResourceInput {
  public StackName $stack_name;
  public LogicalResourceId $logical_resource_id;
}

class FailedStackInstancesCount {
}

class OperationIdAlreadyExistsException {
}

class StackDriftInformationSummary {
  public StackDriftStatus $stack_drift_status;
  public Timestamp $last_check_timestamp;
}

class StackEvents {
}

class StackSetOperationAction {
}

class StackSetSummaries {
}

class StackStatus {
}

class InSyncStackInstancesCount {
}

class LogGroupName {
}

class OutputValue {
}

class StackPolicyBody {
}

class TypeNotFoundException {
}

class DeleteStackInstancesOutput {
  public ClientRequestToken $operation_id;
}

class DetectStackResourceDriftInput {
  public StackNameOrId $stack_name;
  public LogicalResourceId $logical_resource_id;
}

class MonitoringTimeInMinutes {
}

class S3Url {
}

class StackStatusFilter {
}

class ValidateTemplateInput {
  public TemplateBody $template_body;
  public TemplateURL $template_url;
}

class DeleteStackInstancesInput {
  public RegionList $regions;
  public StackSetOperationPreferences $operation_preferences;
  public RetainStacks $retain_stacks;
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
}

class ListStackResourcesOutput {
  public StackResourceSummaries $stack_resource_summaries;
  public NextToken $next_token;
}

class ListStackSetsInput {
  public MaxResults $max_results;
  public StackSetStatus $status;
  public NextToken $next_token;
}

class OperationStatusCheckFailedException {
}

class StackSetDriftStatus {
}

class EnableTerminationProtection {
}

class MaxConcurrentCount {
}

class ResourceType {
}

class Changes {
}

class DetectStackDriftOutput {
  public StackDriftDetectionId $stack_drift_detection_id;
}

class OperationStatus {
}

class StackResourceDriftInformationSummary {
  public StackResourceDriftStatus $stack_resource_drift_status;
  public Timestamp $last_check_timestamp;
}

class TagValue {
}

class ChangeSetId {
}

class DescribeAccountLimitsInput {
  public NextToken $next_token;
}

class DescribeStackInstanceOutput {
  public StackInstance $stack_instance;
}

class InvalidOperationException {
}

class StackResourceSummary {
  public ResourceType $resource_type;
  public Timestamp $last_updated_timestamp;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public StackResourceDriftInformationSummary $drift_information;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
}

class PropertyName {
}

class RecordHandlerProgressInput {
  public HandlerErrorCode $error_code;
  public ResourceModel $resource_model;
  public ClientRequestToken $client_request_token;
  public ClientToken $bearer_token;
  public OperationStatus $operation_status;
  public OperationStatus $current_operation_status;
  public StatusMessage $status_message;
}

class RetainStacksOnAccountRemovalNullable {
}

class Account {
}

class DeletionTime {
}

class ListStackInstancesInput {
  public Account $stack_instance_account;
  public Region $stack_instance_region;
  public StackSetName $stack_set_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class OptionalSecureUrl {
}

class PhysicalResourceIdContext {
}

class RoleARN {
}

class TypeArn {
}

class AccountGateStatusReason {
}

class LoggingConfig {
  public RoleArn $log_role_arn;
  public LogGroupName $log_group_name;
}

class PhysicalResourceId {
}

class ProvisioningType {
}

class StackSetNotFoundException {
}

class DeploymentTargets {
  public AccountList $accounts;
  public OrganizationalUnitIdList $organizational_unit_ids;
}

class StackSetOperationPreferences {
  public RegionList $region_order;
  public FailureToleranceCount $failure_tolerance_count;
  public FailureTolerancePercentage $failure_tolerance_percentage;
  public MaxConcurrentCount $max_concurrent_count;
  public MaxConcurrentPercentage $max_concurrent_percentage;
}

class StackSetOperationSummary {
  public Timestamp $creation_timestamp;
  public Timestamp $end_timestamp;
  public ClientRequestToken $operation_id;
  public StackSetOperationAction $action;
  public StackSetOperationStatus $status;
}

class StackSetStatus {
}

class TransformsList {
}

class Capabilities {
}

class DeleteStackSetInput {
  public StackSetName $stack_set_name;
}

class ListTypeRegistrationsOutput {
  public RegistrationTokenList $registration_token_list;
  public NextToken $next_token;
}

class RegistrationStatus {
}

class StackInstanceStatus {
}

class UsePreviousTemplate {
}

class ListStackSetsOutput {
  public NextToken $next_token;
  public StackSetSummaries $summaries;
}

class ListTypesOutput {
  public TypeSummaries $type_summaries;
  public NextToken $next_token;
}

class LogicalResourceIds {
}

class AccountLimit {
  public LimitName $name;
  public LimitValue $value;
}

class CapabilitiesReason {
}

class ChangeSource {
}

class DescribeStackSetInput {
  public StackSetName $stack_set_name;
}

class ListImportsInput {
  public ExportName $export_name;
  public NextToken $next_token;
}

class MaxConcurrentPercentage {
}

class StackInstanceSummaries {
}

class TransformName {
}

class TypeVersionSummary {
  public Description $description;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;
  public TypeArn $arn;
  public Timestamp $time_created;
}

class ChangeSetName {
}

class DescribeStackDriftDetectionStatusInput {
  public StackDriftDetectionId $stack_drift_detection_id;
}

class DescribeStackResourcesOutput {
  public StackResources $stack_resources;
}

class HandlerErrorCode {
}

class StackPolicyURL {
}

class OnFailure {
}

class PropertyDifferences {
}

class ResourceModel {
}

class StackResourceDriftInformation {
  public Timestamp $last_check_timestamp;
  public StackResourceDriftStatus $stack_resource_drift_status;
}

class AllowedValues {
}

class Change {
  public ResourceChange $resource_change;
  public ChangeType $type;
}

class ContinueUpdateRollbackInput {
  public StackNameOrId $stack_name;
  public RoleARN $role_arn;
  public ResourcesToSkip $resources_to_skip;
  public ClientRequestToken $client_request_token;
}

class DescribeChangeSetOutput {
  public ChangeSetName $change_set_name;
  public CreationTime $creation_time;
  public ExecutionStatus $execution_status;
  public ChangeSetStatus $status;
  public NotificationARNs $notification_ar_ns;
  public Changes $changes;
  public ChangeSetId $change_set_id;
  public Parameters $parameters;
  public ChangeSetStatusReason $status_reason;
  public NextToken $next_token;
  public StackName $stack_name;
  public Description $description;
  public Capabilities $capabilities;
  public Tags $tags;
  public StackId $stack_id;
  public RollbackConfiguration $rollback_configuration;
}

class ParameterValue {
}

class StackResourceDrifts {
}

class ClientToken {
}

class FailureToleranceCount {
}

class Metadata {
}

class Parameter {
  public ParameterValue $resolved_value;
  public ParameterKey $parameter_key;
  public ParameterValue $parameter_value;
  public UsePreviousValue $use_previous_value;
}

class StackDriftDetectionStatusReason {
}

class ExportValue {
}

class ResourceStatusReason {
}

class ResourcesToSkip {
}

class StackSet {
  public StackSetName $stack_set_name;
  public StackSetARN $stack_set_arn;
  public StackSetStatus $status;
  public TemplateBody $template_body;
  public Capabilities $capabilities;
  public ExecutionRoleName $execution_role_name;
  public PermissionModels $permission_model;
  public OrganizationalUnitIdList $organizational_unit_ids;
  public StackSetId $stack_set_id;
  public Description $description;
  public Tags $tags;
  public RoleARN $administration_role_arn;
  public AutoDeployment $auto_deployment;
  public Parameters $parameters;
  public StackSetDriftDetectionDetails $stack_set_drift_detection_details;
}

class StopStackSetOperationOutput {
}

class ListStackResourcesInput {
  public StackName $stack_name;
  public NextToken $next_token;
}

class ResourceToImport {
  public ResourceType $resource_type;
  public LogicalResourceId $logical_resource_id;
  public ResourceIdentifierProperties $resource_identifier;
}

class StackSetName {
}

class AccountGateStatus {
}

class CFNRegistryException {
  public ErrorMessage $message;
}

class CreateStackSetOutput {
  public StackSetId $stack_set_id;
}

class DetectStackDriftInput {
  public StackNameOrId $stack_name;
  public LogicalResourceIds $logical_resource_ids;
}

class NotificationARN {
}

class Arn {
}

class DescribeStacksOutput {
  public Stacks $stacks;
  public NextToken $next_token;
}

class DriftedStackInstancesCount {
}

class Outputs {
}

class ListStackSetOperationsInput {
  public StackSetName $stack_set_name;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class RequiresRecreation {
}

class StaleRequestException {
}

class AlreadyExistsException {
}

class CreateStackInstancesInput {
  public DeploymentTargets $deployment_targets;
  public RegionList $regions;
  public Parameters $parameter_overrides;
  public StackSetOperationPreferences $operation_preferences;
  public ClientRequestToken $operation_id;
  public StackSetName $stack_set_name;
  public AccountList $accounts;
}

class CreateStackOutput {
  public StackId $stack_id;
}

class GetTemplateSummaryOutput {
  public CapabilitiesReason $capabilities_reason;
  public Version $version;
  public Metadata $metadata;
  public ResourceIdentifierSummaries $resource_identifier_summaries;
  public ParameterDeclarations $parameters;
  public Description $description;
  public Capabilities $capabilities;
  public ResourceTypes $resource_types;
  public TransformsList $declared_transforms;
}

class ListChangeSetsInput {
  public StackNameOrId $stack_name;
  public NextToken $next_token;
}

class StackResourceDetail {
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public ResourceType $resource_type;
  public Timestamp $last_updated_timestamp;
  public ResourceStatusReason $resource_status_reason;
  public Metadata $metadata;
  public StackName $stack_name;
  public StackId $stack_id;
  public ResourceStatus $resource_status;
  public Description $description;
  public StackResourceDriftInformation $drift_information;
}

class TemplateURL {
}

class Version {
}

class BoxedMaxResults {
}

class DescribeStackSetOperationOutput {
  public StackSetOperation $stack_set_operation;
}

class Replacement {
}

class ResourcesToImport {
}

class StackName {
}

class UpdateStackInstancesInput {
  public StackSetOperationPreferences $operation_preferences;
  public ClientRequestToken $operation_id;
  public StackSetNameOrId $stack_set_name;
  public AccountList $accounts;
  public DeploymentTargets $deployment_targets;
  public RegionList $regions;
  public Parameters $parameter_overrides;
}

class AccountLimitList {
}

class DescribeAccountLimitsOutput {
  public AccountLimitList $account_limits;
  public NextToken $next_token;
}

class DescribeStackResourceOutput {
  public StackResourceDetail $stack_resource_detail;
}

class PermissionModels {
}

class TemplateParameter {
  public ParameterKey $parameter_key;
  public ParameterValue $default_value;
  public NoEcho $no_echo;
  public Description $description;
}

class Timestamp {
}

class Url {
}

class ListTypeRegistrationsInput {
  public TypeName $type_name;
  public TypeArn $type_arn;
  public RegistrationStatus $registration_status_filter;
  public MaxResults $max_results;
  public NextToken $next_token;
  public RegistryType $type;
}

class NoEcho {
}

class PropertyPath {
}

class ResourceIdentifierSummaries {
}

class StackInstance {
  public Region $region;
  public Parameters $parameter_overrides;
  public StackDriftStatus $drift_status;
  public OrganizationalUnitId $organizational_unit_id;
  public Timestamp $last_drift_check_timestamp;
  public StackSetId $stack_set_id;
  public Account $account;
  public StackId $stack_id;
  public StackInstanceStatus $status;
  public Reason $status_reason;
}

class ResourceToSkip {
}

class StackSetOperationResultStatus {
}

class StackSetSummary {
  public Timestamp $last_drift_check_timestamp;
  public StackSetName $stack_set_name;
  public StackSetId $stack_set_id;
  public Description $description;
  public StackSetStatus $status;
  public AutoDeployment $auto_deployment;
  public PermissionModels $permission_model;
  public StackDriftStatus $drift_status;
}

class AutoDeploymentNullable {
}

class DeregisterTypeInput {
  public PrivateTypeArn $arn;
  public RegistryType $type;
  public TypeName $type_name;
  public TypeVersionId $version_id;
}

class Exports {
}

class GetTemplateSummaryInput {
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public StackNameOrId $stack_name;
  public StackSetNameOrId $stack_set_name;
}

class ListTypeVersionsInput {
  public TypeName $type_name;
  public PrivateTypeArn $arn;
  public MaxResults $max_results;
  public NextToken $next_token;
  public DeprecatedStatus $deprecated_status;
  public RegistryType $type;
}

class TotalStackInstancesCount {
}

class UpdateStackSetInput {
  public Description $description;
  public UsePreviousTemplate $use_previous_template;
  public Capabilities $capabilities;
  public RegionList $regions;
  public StackSetName $stack_set_name;
  public TemplateURL $template_url;
  public RoleARN $administration_role_arn;
  public DeploymentTargets $deployment_targets;
  public PermissionModels $permission_model;
  public AutoDeployment $auto_deployment;
  public Parameters $parameters;
  public Tags $tags;
  public ExecutionRoleName $execution_role_name;
  public TemplateBody $template_body;
  public StackSetOperationPreferences $operation_preferences;
  public ClientRequestToken $operation_id;
  public AccountList $accounts;
}

class EvaluationType {
}

class GetStackPolicyOutput {
  public StackPolicyBody $stack_policy_body;
}

class ListStackSetOperationsOutput {
  public StackSetOperationSummaries $summaries;
  public NextToken $next_token;
}

class ParameterKey {
}

class StackSetOperationResultSummary {
  public Account $account;
  public Region $region;
  public StackSetOperationResultStatus $status;
  public Reason $status_reason;
  public AccountGateResult $account_gate_result;
  public OrganizationalUnitId $organizational_unit_id;
}

class ErrorMessage {
}

class EstimateTemplateCostOutput {
  public Url $url;
}

class StackSetId {
}

class TypeVersionSummaries {
}

class ListImportsOutput {
  public Imports $imports;
  public NextToken $next_token;
}

class ListStacksOutput {
  public StackSummaries $stack_summaries;
  public NextToken $next_token;
}

class ResourceIdentifierPropertyValue {
}

class StackInstanceNotFoundException {
}

class SetTypeDefaultVersionOutput {
}

class TypeSchema {
}

class CreationTime {
}

class DeleteStackInput {
  public RetainResources $retain_resources;
  public RoleARN $role_arn;
  public ClientRequestToken $client_request_token;
  public StackName $stack_name;
}

class DescribeChangeSetInput {
  public StackNameOrId $stack_name;
  public NextToken $next_token;
  public ChangeSetNameOrId $change_set_name;
}

class DescribeTypeRegistrationInput {
  public RegistrationToken $registration_token;
}

class InsufficientCapabilitiesException {
}

class RetainStacks {
}

class StackDriftDetectionId {
}

class ValidateTemplateOutput {
  public TemplateParameters $parameters;
  public Description $description;
  public Capabilities $capabilities;
  public CapabilitiesReason $capabilities_reason;
  public TransformsList $declared_transforms;
}

class DescribeStackEventsInput {
  public StackName $stack_name;
  public NextToken $next_token;
}

class FailureTolerancePercentage {
}

class PropertyDifference {
  public PropertyValue $expected_value;
  public PropertyValue $actual_value;
  public DifferenceType $difference_type;
  public PropertyPath $property_path;
}

class RegistrationTokenList {
}

class ResourceChange {
  public Scope $scope;
  public ResourceChangeDetails $details;
  public ChangeAction $action;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
  public ResourceType $resource_type;
  public Replacement $replacement;
}

class ParameterDeclarations {
}

class ParameterType {
}

class StackSetOperation {
  public ClientRequestToken $operation_id;
  public StackSetId $stack_set_id;
  public ExecutionRoleName $execution_role_name;
  public Timestamp $creation_timestamp;
  public Timestamp $end_timestamp;
  public StackSetDriftDetectionDetails $stack_set_drift_detection_details;
  public StackSetOperationAction $action;
  public StackSetOperationStatus $status;
  public StackSetOperationPreferences $operation_preferences;
  public RetainStacksNullable $retain_stacks;
  public RoleARN $administration_role_arn;
  public DeploymentTargets $deployment_targets;
}

class DescribeTypeRegistrationOutput {
  public RegistrationStatus $progress_status;
  public Description $description;
  public TypeArn $type_arn;
  public TypeArn $type_version_arn;
}

class EventId {
}

class GetTemplateOutput {
  public TemplateBody $template_body;
  public StageList $stages_available;
}

class TypeSummaries {
}

class AllowedValue {
}

class DeregisterTypeOutput {
}

class Key {
}

class LimitValue {
}

class RegionList {
}

class TimeoutMinutes {
}

class AccountList {
}

class ListExportsInput {
  public NextToken $next_token;
}

class ListTypesInput {
  public Visibility $visibility;
  public ProvisioningType $provisioning_type;
  public DeprecatedStatus $deprecated_status;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class StopStackSetOperationInput {
  public StackSetName $stack_set_name;
  public ClientRequestToken $operation_id;
}

class TemplateParameters {
}

class ResourceTypes {
}

class StackDriftDetectionStatus {
}

class StackEvent {
  public EventId $event_id;
  public StackName $stack_name;
  public PhysicalResourceId $physical_resource_id;
  public ResourceType $resource_type;
  public ClientRequestToken $client_request_token;
  public StackId $stack_id;
  public LogicalResourceId $logical_resource_id;
  public Timestamp $timestamp;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public ResourceProperties $resource_properties;
}

class AutoDeployment {
  public AutoDeploymentNullable $enabled;
  public RetainStacksOnAccountRemovalNullable $retain_stacks_on_account_removal;
}

class ChangeType {
}

class CreateChangeSetOutput {
  public ChangeSetId $id;
  public StackId $stack_id;
}

class LimitName {
}

class RegisterTypeOutput {
  public RegistrationToken $registration_token;
}

class TypeSummary {
  public TypeVersionId $default_version_id;
  public TypeArn $type_arn;
  public Timestamp $last_updated;
  public Description $description;
  public RegistryType $type;
  public TypeName $type_name;
}

class DescribeStackDriftDetectionStatusOutput {
  public StackDriftStatus $stack_drift_status;
  public StackDriftDetectionStatus $detection_status;
  public StackDriftDetectionStatusReason $detection_status_reason;
  public BoxedInteger $drifted_stack_resource_count;
  public Timestamp $timestamp;
  public StackId $stack_id;
  public StackDriftDetectionId $stack_drift_detection_id;
}

class DescribeStackResourceDriftsInput {
  public NextToken $next_token;
  public BoxedMaxResults $max_results;
  public StackNameOrId $stack_name;
  public StackResourceDriftStatusFilters $stack_resource_drift_status_filters;
}

class InvalidChangeSetStatusException {
}

class Tags {
}

class UsePreviousValue {
}

class StackSetDriftDetectionStatus {
}

class TypeName {
}

class AccountGateResult {
  public AccountGateStatus $status;
  public AccountGateStatusReason $status_reason;
}

class ClientRequestToken {
}

class OperationInProgressException {
}

class ResourceTargetDefinition {
  public RequiresRecreation $requires_recreation;
  public ResourceAttribute $attribute;
  public PropertyName $name;
}

class SetStackPolicyInput {
  public StackName $stack_name;
  public StackPolicyBody $stack_policy_body;
  public StackPolicyURL $stack_policy_url;
}

class Region {
}

class RollbackTriggers {
}

class UpdateTerminationProtectionOutput {
  public StackId $stack_id;
}

class BoxedInteger {
}

class CancelUpdateStackInput {
  public StackName $stack_name;
  public ClientRequestToken $client_request_token;
}

class DetectStackSetDriftInput {
  public StackSetNameOrId $stack_set_name;
  public StackSetOperationPreferences $operation_preferences;
  public ClientRequestToken $operation_id;
}

class ListStacksInput {
  public StackStatusFilter $stack_status_filter;
  public NextToken $next_token;
}

class OperationNotFoundException {
}

class ChangeSetStatusReason {
}

class GetStackPolicyInput {
  public StackName $stack_name;
}

class LimitExceededException {
}

class OrganizationalUnitIdList {
}

class RegistryType {
}

class DescribeStackResourceDriftsOutput {
  public StackResourceDrifts $stack_resource_drifts;
  public NextToken $next_token;
}

class ListTypeVersionsOutput {
  public TypeVersionSummaries $type_version_summaries;
  public NextToken $next_token;
}

class RollbackTrigger {
  public Arn $arn;
  public Type $type;
}

class ResourceIdentifiers {
}

class RetainStacksNullable {
}

class CreateChangeSetInput {
  public TemplateBody $template_body;
  public TemplateURL $template_url;
  public Parameters $parameters;
  public Capabilities $capabilities;
  public ResourceTypes $resource_types;
  public RollbackConfiguration $rollback_configuration;
  public ChangeSetType $change_set_type;
  public ResourcesToImport $resources_to_import;
  public UsePreviousTemplate $use_previous_template;
  public RoleARN $role_arn;
  public NotificationARNs $notification_ar_ns;
  public StackNameOrId $stack_name;
  public Tags $tags;
  public ClientToken $client_token;
  public Description $description;
  public ChangeSetName $change_set_name;
}

class DescribeStackResourcesInput {
  public StackName $stack_name;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceId $physical_resource_id;
}

class DescribeTypeInput {
  public RegistryType $type;
  public TypeName $type_name;
  public TypeArn $arn;
  public TypeVersionId $version_id;
}

class DescribeTypeOutput {
  public ProvisioningType $provisioning_type;
  public OptionalSecureUrl $documentation_url;
  public Timestamp $last_updated;
  public Timestamp $time_created;
  public TypeSchema $schema;
  public TypeVersionId $default_version_id;
  public LoggingConfig $logging_config;
  public Visibility $visibility;
  public OptionalSecureUrl $source_url;
  public TypeArn $arn;
  public TypeName $type_name;
  public Description $description;
  public DeprecatedStatus $deprecated_status;
  public RoleArn $execution_role_arn;
  public RegistryType $type;
}

class PrivateTypeArn {
}

class Capability {
}

class NameAlreadyExistsException {
}

class StackResourceDrift {
  public StackId $stack_id;
  public PhysicalResourceId $physical_resource_id;
  public ResourceType $resource_type;
  public Properties $actual_properties;
  public PropertyDifferences $property_differences;
  public Timestamp $timestamp;
  public LogicalResourceId $logical_resource_id;
  public PhysicalResourceIdContext $physical_resource_id_context;
  public Properties $expected_properties;
  public StackResourceDriftStatus $stack_resource_drift_status;
}

class UpdateStackInstancesOutput {
  public ClientRequestToken $operation_id;
}

class Visibility {
}

class ListExportsOutput {
  public Exports $exports;
  public NextToken $next_token;
}

class NotificationARNs {
}

class ParameterDeclaration {
  public ParameterValue $default_value;
  public ParameterType $parameter_type;
  public NoEcho $no_echo;
  public Description $description;
  public ParameterConstraints $parameter_constraints;
  public ParameterKey $parameter_key;
}

class StackInstanceSummary {
  public Timestamp $last_drift_check_timestamp;
  public StackSetId $stack_set_id;
  public Account $account;
  public StackId $stack_id;
  public StackInstanceStatus $status;
  public OrganizationalUnitId $organizational_unit_id;
  public StackDriftStatus $drift_status;
  public Region $region;
  public Reason $status_reason;
}

class TemplateDescription {
}

class ResourceChangeDetails {
}

class UpdateTerminationProtectionInput {
  public EnableTerminationProtection $enable_termination_protection;
  public StackNameOrId $stack_name;
}

class DeleteChangeSetInput {
  public ChangeSetNameOrId $change_set_name;
  public StackNameOrId $stack_name;
}

class DescribeStackSetOutput {
  public StackSet $stack_set;
}

class InProgressStackInstancesCount {
}

class ListStackSetOperationResultsInput {
  public StackSetName $stack_set_name;
  public ClientRequestToken $operation_id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class RequestToken {
}

class ExecutionRoleName {
}

class MaxResults {
}

class RegisterTypeInput {
  public RegistryType $type;
  public TypeName $type_name;
  public S3Url $schema_handler_package;
  public LoggingConfig $logging_config;
  public RoleArn $execution_role_arn;
  public RequestToken $client_request_token;
}

class StackStatusReason {
}

class Reason {
}

class ResourceIdentifierProperties {
}

class StackId {
}

class StackSetOperationStatus {
}

class TypeVersionId {
}

class StackResourceDriftStatus {
}

class StackResources {
}

class Stacks {
}

class CreatedButModifiedException {
}

class DeleteStackSetOutput {
}

class Parameters {
}

class Properties {
}

class ResourceChangeDetail {
  public ResourceTargetDefinition $target;
  public EvaluationType $evaluation;
  public ChangeSource $change_source;
  public CausingEntity $causing_entity;
}

class Type {
}

class Value {
}

class DetectStackResourceDriftOutput {
  public StackResourceDrift $stack_resource_drift;
}

class ResourceSignalUniqueId {
}

class StackSetDriftDetectionDetails {
  public Timestamp $last_drift_check_timestamp;
  public TotalStackInstancesCount $total_stack_instances_count;
  public DriftedStackInstancesCount $drifted_stack_instances_count;
  public InSyncStackInstancesCount $in_sync_stack_instances_count;
  public InProgressStackInstancesCount $in_progress_stack_instances_count;
  public FailedStackInstancesCount $failed_stack_instances_count;
  public StackSetDriftStatus $drift_status;
  public StackSetDriftDetectionStatus $drift_detection_status;
}

class UpdateStackSetOutput {
  public ClientRequestToken $operation_id;
}

class ContinueUpdateRollbackOutput {
}

class DisableRollback {
}

class PhysicalResourceIdContextKeyValuePair {
  public Key $key;
  public Value $value;
}

class StackResource {
  public StackId $stack_id;
  public LogicalResourceId $logical_resource_id;
  public ResourceStatus $resource_status;
  public ResourceStatusReason $resource_status_reason;
  public StackResourceDriftInformation $drift_information;
  public StackName $stack_name;
  public PhysicalResourceId $physical_resource_id;
  public ResourceType $resource_type;
  public Timestamp $timestamp;
  public Description $description;
}

class StackSetARN {
}

class DeleteChangeSetOutput {
}

class DescribeStacksInput {
  public StackName $stack_name;
  public NextToken $next_token;
}

class ResourceIdentifierSummary {
  public ResourceType $resource_type;
  public LogicalResourceIds $logical_resource_ids;
  public ResourceIdentifiers $resource_identifiers;
}

class RetainResources {
}

class SignalResourceInput {
  public StackNameOrId $stack_name;
  public LogicalResourceId $logical_resource_id;
  public ResourceSignalUniqueId $unique_id;
  public ResourceSignalStatus $status;
}

class StackSetNotEmptyException {
}

class StackSummary {
  public StackStatus $stack_status;
  public StackId $parent_id;
  public StackId $root_id;
  public StackDriftInformationSummary $drift_information;
  public StackName $stack_name;
  public TemplateDescription $template_description;
  public LastUpdatedTime $last_updated_time;
  public DeletionTime $deletion_time;
  public StackStatusReason $stack_status_reason;
  public StackId $stack_id;
  public CreationTime $creation_time;
}

class TemplateStage {
}

class DetectStackSetDriftOutput {
  public ClientRequestToken $operation_id;
}

class LastUpdatedTime {
}

class NextToken {
}

class RegistrationToken {
}

class ResourceProperties {
}

class CreateStackInstancesOutput {
  public ClientRequestToken $operation_id;
}

class OrganizationalUnitId {
}

class ResourceSignalStatus {
}

class StackSetNameOrId {
}

class StageList {
}

