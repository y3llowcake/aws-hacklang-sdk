<?hh // strict
namespace slack\aws\backup;

interface Backup {
  public function GetBackupVaultNotifications(GetBackupVaultNotificationsInput) Awaitable<Errors\Result<GetBackupVaultNotificationsOutput>>;
  public function ListBackupPlans(ListBackupPlansInput) Awaitable<Errors\Result<ListBackupPlansOutput>>;
  public function ListBackupVaults(ListBackupVaultsInput) Awaitable<Errors\Result<ListBackupVaultsOutput>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Error>;
  public function UpdateBackupPlan(UpdateBackupPlanInput) Awaitable<Errors\Result<UpdateBackupPlanOutput>>;
  public function DeleteBackupVault(DeleteBackupVaultInput) Awaitable<Errors\Error>;
  public function DescribeRestoreJob(DescribeRestoreJobInput) Awaitable<Errors\Result<DescribeRestoreJobOutput>>;
  public function ListTags(ListTagsInput) Awaitable<Errors\Result<ListTagsOutput>>;
  public function PutBackupVaultAccessPolicy(PutBackupVaultAccessPolicyInput) Awaitable<Errors\Error>;
  public function StartBackupJob(StartBackupJobInput) Awaitable<Errors\Result<StartBackupJobOutput>>;
  public function DescribeBackupJob(DescribeBackupJobInput) Awaitable<Errors\Result<DescribeBackupJobOutput>>;
  public function DescribeRecoveryPoint(DescribeRecoveryPointInput) Awaitable<Errors\Result<DescribeRecoveryPointOutput>>;
  public function DescribeCopyJob(DescribeCopyJobInput) Awaitable<Errors\Result<DescribeCopyJobOutput>>;
  public function StartRestoreJob(StartRestoreJobInput) Awaitable<Errors\Result<StartRestoreJobOutput>>;
  public function CreateBackupSelection(CreateBackupSelectionInput) Awaitable<Errors\Result<CreateBackupSelectionOutput>>;
  public function CreateBackupVault(CreateBackupVaultInput) Awaitable<Errors\Result<CreateBackupVaultOutput>>;
  public function GetRecoveryPointRestoreMetadata(GetRecoveryPointRestoreMetadataInput) Awaitable<Errors\Result<GetRecoveryPointRestoreMetadataOutput>>;
  public function ListRecoveryPointsByBackupVault(ListRecoveryPointsByBackupVaultInput) Awaitable<Errors\Result<ListRecoveryPointsByBackupVaultOutput>>;
  public function UpdateRecoveryPointLifecycle(UpdateRecoveryPointLifecycleInput) Awaitable<Errors\Result<UpdateRecoveryPointLifecycleOutput>>;
  public function GetBackupPlan(GetBackupPlanInput) Awaitable<Errors\Result<GetBackupPlanOutput>>;
  public function GetBackupPlanFromJSON(GetBackupPlanFromJSONInput) Awaitable<Errors\Result<GetBackupPlanFromJSONOutput>>;
  public function GetBackupPlanFromTemplate(GetBackupPlanFromTemplateInput) Awaitable<Errors\Result<GetBackupPlanFromTemplateOutput>>;
  public function ListCopyJobs(ListCopyJobsInput) Awaitable<Errors\Result<ListCopyJobsOutput>>;
  public function CreateBackupPlan(CreateBackupPlanInput) Awaitable<Errors\Result<CreateBackupPlanOutput>>;
  public function DescribeBackupVault(DescribeBackupVaultInput) Awaitable<Errors\Result<DescribeBackupVaultOutput>>;
  public function ListBackupPlanVersions(ListBackupPlanVersionsInput) Awaitable<Errors\Result<ListBackupPlanVersionsOutput>>;
  public function ListRestoreJobs(ListRestoreJobsInput) Awaitable<Errors\Result<ListRestoreJobsOutput>>;
  public function StopBackupJob(StopBackupJobInput) Awaitable<Errors\Error>;
  public function DeleteBackupSelection(DeleteBackupSelectionInput) Awaitable<Errors\Error>;
  public function GetBackupSelection(GetBackupSelectionInput) Awaitable<Errors\Result<GetBackupSelectionOutput>>;
  public function GetBackupVaultAccessPolicy(GetBackupVaultAccessPolicyInput) Awaitable<Errors\Result<GetBackupVaultAccessPolicyOutput>>;
  public function GetSupportedResourceTypes() Awaitable<Errors\Result<GetSupportedResourceTypesOutput>>;
  public function ListBackupPlanTemplates(ListBackupPlanTemplatesInput) Awaitable<Errors\Result<ListBackupPlanTemplatesOutput>>;
  public function DeleteBackupVaultNotifications(DeleteBackupVaultNotificationsInput) Awaitable<Errors\Error>;
  public function ExportBackupPlanTemplate(ExportBackupPlanTemplateInput) Awaitable<Errors\Result<ExportBackupPlanTemplateOutput>>;
  public function DeleteRecoveryPoint(DeleteRecoveryPointInput) Awaitable<Errors\Error>;
  public function DescribeProtectedResource(DescribeProtectedResourceInput) Awaitable<Errors\Result<DescribeProtectedResourceOutput>>;
  public function ListBackupJobs(ListBackupJobsInput) Awaitable<Errors\Result<ListBackupJobsOutput>>;
  public function ListBackupSelections(ListBackupSelectionsInput) Awaitable<Errors\Result<ListBackupSelectionsOutput>>;
  public function ListProtectedResources(ListProtectedResourcesInput) Awaitable<Errors\Result<ListProtectedResourcesOutput>>;
  public function ListRecoveryPointsByResource(ListRecoveryPointsByResourceInput) Awaitable<Errors\Result<ListRecoveryPointsByResourceOutput>>;
  public function DeleteBackupPlan(DeleteBackupPlanInput) Awaitable<Errors\Result<DeleteBackupPlanOutput>>;
  public function DeleteBackupVaultAccessPolicy(DeleteBackupVaultAccessPolicyInput) Awaitable<Errors\Error>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Error>;
  public function PutBackupVaultNotifications(PutBackupVaultNotificationsInput) Awaitable<Errors\Error>;
  public function StartCopyJob(StartCopyJobInput) Awaitable<Errors\Result<StartCopyJobOutput>>;
}

class AlreadyExistsException {
  public string $code;
  public string $message;
  public string $creator_request_id;
  public string $arn;
  public string $type;
  public string $context;
}

class DeleteBackupPlanOutput {
  public string $backup_plan_id;
  public ARN $backup_plan_arn;
  public timestamp $deletion_date;
  public string $version_id;
}

class ListCopyJobsOutput {
  public CopyJobsList $copy_jobs;
  public string $next_token;
}

class ResourceArns {
}

class StartBackupJobInput {
  public WindowMinutes $complete_window_minutes;
  public Lifecycle $lifecycle;
  public Tags $recovery_point_tags;
  public BackupVaultName $backup_vault_name;
  public ARN $resource_arn;
  public IAMRoleArn $iam_role_arn;
  public string $idempotency_token;
  public WindowMinutes $start_window_minutes;
}

class DescribeRestoreJobOutput {
  public string $status_message;
  public string $percent_done;
  public IAMRoleArn $iam_role_arn;
  public string $restore_job_id;
  public ARN $recovery_point_arn;
  public timestamp $completion_date;
  public Long $expected_completion_time_minutes;
  public ARN $created_resource_arn;
  public timestamp $creation_date;
  public RestoreJobStatus $status;
  public Long $backup_size_in_bytes;
}

class ListOfTags {
}

class ListTagsOutput {
  public string $next_token;
  public Tags $tags;
}

class ARN {
}

class BackupJobState {
}

class BackupRulesInput {
}

class ConditionKey {
}

class CopyJobsList {
}

class MaxResults {
}

class UpdateRecoveryPointLifecycleOutput {
  public ARN $backup_vault_arn;
  public ARN $recovery_point_arn;
  public Lifecycle $lifecycle;
  public CalculatedLifecycle $calculated_lifecycle;
}

class DescribeBackupJobOutput {
  public string $backup_job_id;
  public ARN $recovery_point_arn;
  public timestamp $completion_date;
  public string $status_message;
  public Long $bytes_transferred;
  public BackupVaultName $backup_vault_name;
  public ARN $resource_arn;
  public BackupJobState $state;
  public string $percent_done;
  public Long $backup_size_in_bytes;
  public ResourceType $resource_type;
  public timestamp $start_by;
  public ARN $backup_vault_arn;
  public timestamp $creation_date;
  public IAMRoleArn $iam_role_arn;
  public RecoveryPointCreator $created_by;
  public timestamp $expected_completion_date;
}

class GetBackupVaultNotificationsOutput {
  public BackupVaultName $backup_vault_name;
  public ARN $backup_vault_arn;
  public ARN $sns_topic_arn;
  public BackupVaultEvents $backup_vault_events;
}

class ListRecoveryPointsByResourceInput {
  public ARN $resource_arn;
  public string $next_token;
  public MaxResults $max_results;
}

class BackupPlanVersionsList {
}

class BackupRuleInput {
  public BackupRuleName $rule_name;
  public BackupVaultName $target_backup_vault_name;
  public CronExpression $schedule_expression;
  public WindowMinutes $start_window_minutes;
  public WindowMinutes $completion_window_minutes;
  public Lifecycle $lifecycle;
  public Tags $recovery_point_tags;
  public CopyActions $copy_actions;
}

class GetBackupPlanOutput {
  public timestamp $creation_date;
  public timestamp $deletion_date;
  public timestamp $last_execution_date;
  public BackupPlan $backup_plan;
  public string $backup_plan_id;
  public ARN $backup_plan_arn;
  public string $version_id;
  public string $creator_request_id;
}

class Metadata {
}

class DeleteBackupVaultInput {
  public string $backup_vault_name;
}

class DeleteBackupVaultNotificationsInput {
  public BackupVaultName $backup_vault_name;
}

class ListTagsInput {
  public ARN $resource_arn;
  public string $next_token;
  public MaxResults $max_results;
}

class PutBackupVaultAccessPolicyInput {
  public BackupVaultName $backup_vault_name;
  public IAMPolicy $policy;
}

class Tags {
}

class GetSupportedResourceTypesOutput {
  public ResourceTypes $resource_types;
}

class RecoveryPointByBackupVaultList {
}

class BackupJobsList {
}

class DeleteRecoveryPointInput {
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
}

class DependencyFailureException {
  public string $code;
  public string $message;
  public string $type;
  public string $context;
}

class DescribeBackupJobInput {
  public string $backup_job_id;
}

class GetBackupSelectionOutput {
  public BackupSelection $backup_selection;
  public string $selection_id;
  public string $backup_plan_id;
  public timestamp $creation_date;
  public string $creator_request_id;
}

class RestoreJobsListMember {
  public RestoreJobStatus $status;
  public string $percent_done;
  public IAMRoleArn $iam_role_arn;
  public ARN $created_resource_arn;
  public string $restore_job_id;
  public ARN $recovery_point_arn;
  public timestamp $creation_date;
  public timestamp $completion_date;
  public string $status_message;
  public Long $backup_size_in_bytes;
  public Long $expected_completion_time_minutes;
}

class StorageClass {
}

class UpdateBackupPlanOutput {
  public string $backup_plan_id;
  public ARN $backup_plan_arn;
  public timestamp $creation_date;
  public string $version_id;
}

class BackupJob {
  public IAMRoleArn $iam_role_arn;
  public timestamp $expected_completion_date;
  public timestamp $start_by;
  public string $backup_job_id;
  public timestamp $creation_date;
  public timestamp $completion_date;
  public BackupJobState $state;
  public Long $backup_size_in_bytes;
  public BackupVaultName $backup_vault_name;
  public string $status_message;
  public ARN $backup_vault_arn;
  public ARN $resource_arn;
  public string $percent_done;
  public RecoveryPointCreator $created_by;
  public Long $bytes_transferred;
  public ARN $recovery_point_arn;
  public ResourceType $resource_type;
}

class GetBackupVaultAccessPolicyInput {
  public BackupVaultName $backup_vault_name;
}

class ListBackupJobsInput {
  public ARN $by_resource_arn;
  public BackupJobState $by_state;
  public BackupVaultName $by_backup_vault_name;
  public timestamp $by_created_before;
  public timestamp $by_created_after;
  public ResourceType $by_resource_type;
  public string $next_token;
  public MaxResults $max_results;
}

class ListRecoveryPointsByBackupVaultInput {
  public timestamp $by_created_after;
  public BackupVaultName $backup_vault_name;
  public string $next_token;
  public MaxResults $max_results;
  public ARN $by_resource_arn;
  public ResourceType $by_resource_type;
  public string $by_backup_plan_id;
  public timestamp $by_created_before;
}

class RestoreJobId {
}

class string {
}

class DescribeCopyJobInput {
  public string $copy_job_id;
}

class GetBackupVaultAccessPolicyOutput {
  public IAMPolicy $policy;
  public BackupVaultName $backup_vault_name;
  public ARN $backup_vault_arn;
}

class ListBackupVaultsOutput {
  public BackupVaultList $backup_vault_list;
  public string $next_token;
}

class DescribeCopyJobOutput {
  public CopyJob $copy_job;
}

class MissingParameterValueException {
  public string $context;
  public string $code;
  public string $message;
  public string $type;
}

class RecoveryPointByBackupVault {
  public ARN $recovery_point_arn;
  public BackupVaultName $backup_vault_name;
  public timestamp $creation_date;
  public CalculatedLifecycle $calculated_lifecycle;
  public ARN $resource_arn;
  public ARN $encryption_key_arn;
  public boolean $is_encrypted;
  public RecoveryPointCreator $created_by;
  public IAMRoleArn $iam_role_arn;
  public RecoveryPointStatus $status;
  public Long $backup_size_in_bytes;
  public timestamp $last_restore_time;
  public ARN $backup_vault_arn;
  public ResourceType $resource_type;
  public timestamp $completion_date;
  public Lifecycle $lifecycle;
}

class long {
}

class CreateBackupVaultOutput {
  public ARN $backup_vault_arn;
  public timestamp $creation_date;
  public BackupVaultName $backup_vault_name;
}

class ProtectedResource {
  public ARN $resource_arn;
  public ResourceType $resource_type;
  public timestamp $last_backup_time;
}

class boolean {
}

class RestoreJobsList {
}

class BackupPlan {
  public BackupPlanName $backup_plan_name;
  public BackupRules $rules;
}

class ConditionType {
}

class CopyAction {
  public Lifecycle $lifecycle;
  public ARN $destination_backup_vault_arn;
}

class GetBackupPlanFromTemplateInput {
  public string $backup_plan_template_id;
}

class ResourceType {
}

class ListBackupVaultsInput {
  public string $next_token;
  public MaxResults $max_results;
}

class StartRestoreJobInput {
  public ARN $recovery_point_arn;
  public Metadata $metadata;
  public IAMRoleArn $iam_role_arn;
  public string $idempotency_token;
  public ResourceType $resource_type;
}

class BackupRules {
}

class CopyJob {
  public RecoveryPointCreator $created_by;
  public ResourceType $resource_type;
  public Long $backup_size_in_bytes;
  public ARN $resource_arn;
  public timestamp $creation_date;
  public CopyJobState $state;
  public ARN $destination_backup_vault_arn;
  public ARN $destination_recovery_point_arn;
  public timestamp $completion_date;
  public string $status_message;
  public IAMRoleArn $iam_role_arn;
  public ARN $source_recovery_point_arn;
  public ARN $source_backup_vault_arn;
  public string $copy_job_id;
}

class CreateBackupSelectionInput {
  public string $creator_request_id;
  public string $backup_plan_id;
  public BackupSelection $backup_selection;
}

class CreateBackupSelectionOutput {
  public string $selection_id;
  public string $backup_plan_id;
  public timestamp $creation_date;
}

class UntagResourceInput {
  public ARN $resource_arn;
  public TagKeyList $tag_key_list;
}

class ResourceNotFoundException {
  public string $code;
  public string $message;
  public string $type;
  public string $context;
}

class WindowMinutes {
}

class BackupRuleName {
}

class CreateBackupPlanOutput {
  public ARN $backup_plan_arn;
  public timestamp $creation_date;
  public string $version_id;
  public string $backup_plan_id;
}

class ExportBackupPlanTemplateInput {
  public string $backup_plan_id;
}

class GetBackupPlanFromJSONOutput {
  public BackupPlan $backup_plan;
}

class ListBackupPlansOutput {
  public string $next_token;
  public BackupPlansList $backup_plans_list;
}

class StopBackupJobInput {
  public string $backup_job_id;
}

class BackupSelectionsListMember {
  public IAMRoleArn $iam_role_arn;
  public string $selection_id;
  public BackupSelectionName $selection_name;
  public string $backup_plan_id;
  public timestamp $creation_date;
  public string $creator_request_id;
}

class CopyJobState {
}

class DeleteBackupPlanInput {
  public string $backup_plan_id;
}

class GetBackupPlanFromTemplateOutput {
  public BackupPlan $backup_plan_document;
}

class ListBackupJobsOutput {
  public BackupJobsList $backup_jobs;
  public string $next_token;
}

class BackupVaultEvents {
}

class DeleteBackupVaultAccessPolicyInput {
  public BackupVaultName $backup_vault_name;
}

class DescribeProtectedResourceOutput {
  public ARN $resource_arn;
  public ResourceType $resource_type;
  public timestamp $last_backup_time;
}

class MetadataValue {
}

class GetBackupPlanFromJSONInput {
  public string $backup_plan_template_json;
}

class GetRecoveryPointRestoreMetadataOutput {
  public ARN $backup_vault_arn;
  public ARN $recovery_point_arn;
  public Metadata $restore_metadata;
}

class InvalidParameterValueException {
  public string $code;
  public string $message;
  public string $type;
  public string $context;
}

class RestoreJobStatus {
}

class DescribeBackupVaultInput {
  public string $backup_vault_name;
}

class DescribeRecoveryPointInput {
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
}

class GetBackupSelectionInput {
  public string $selection_id;
  public string $backup_plan_id;
}

class UpdateBackupPlanInput {
  public string $backup_plan_id;
  public BackupPlanInput $backup_plan;
}

class ListProtectedResourcesInput {
  public MaxResults $max_results;
  public string $next_token;
}

class ListRecoveryPointsByResourceOutput {
  public string $next_token;
  public RecoveryPointByResourceList $recovery_points;
}

class TagValue {
}

class TagKey {
}

class IAMRoleArn {
}

class ListBackupSelectionsInput {
  public string $backup_plan_id;
  public string $next_token;
  public MaxResults $max_results;
}

class ListCopyJobsInput {
  public string $next_token;
  public MaxResults $max_results;
  public ARN $by_resource_arn;
  public CopyJobState $by_state;
  public timestamp $by_created_before;
  public timestamp $by_created_after;
  public ResourceType $by_resource_type;
  public string $by_destination_vault_arn;
}

class ListRestoreJobsOutput {
  public RestoreJobsList $restore_jobs;
  public string $next_token;
}

class StartCopyJobOutput {
  public string $copy_job_id;
  public timestamp $creation_date;
}

class StartBackupJobOutput {
  public string $backup_job_id;
  public ARN $recovery_point_arn;
  public timestamp $creation_date;
}

class BackupPlanInput {
  public BackupPlanName $backup_plan_name;
  public BackupRulesInput $rules;
}

class BackupVaultList {
}

class DescribeRecoveryPointOutput {
  public ARN $recovery_point_arn;
  public ARN $backup_vault_arn;
  public RecoveryPointCreator $created_by;
  public ARN $encryption_key_arn;
  public timestamp $last_restore_time;
  public ResourceType $resource_type;
  public timestamp $creation_date;
  public CalculatedLifecycle $calculated_lifecycle;
  public boolean $is_encrypted;
  public Lifecycle $lifecycle;
  public StorageClass $storage_class;
  public BackupVaultName $backup_vault_name;
  public ARN $resource_arn;
  public IAMRoleArn $iam_role_arn;
  public RecoveryPointStatus $status;
  public timestamp $completion_date;
  public Long $backup_size_in_bytes;
}

class IAMPolicy {
}

class RecoveryPointStatus {
}

class BackupVaultListMember {
  public BackupVaultName $backup_vault_name;
  public ARN $backup_vault_arn;
  public timestamp $creation_date;
  public ARN $encryption_key_arn;
  public string $creator_request_id;
  public long $number_of_recovery_points;
}

class ConditionValue {
}

class GetRecoveryPointRestoreMetadataInput {
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
}

class ListBackupSelectionsOutput {
  public string $next_token;
  public BackupSelectionsList $backup_selections_list;
}

class StartCopyJobInput {
  public ARN $recovery_point_arn;
  public BackupVaultName $source_backup_vault_name;
  public ARN $destination_backup_vault_arn;
  public IAMRoleArn $iam_role_arn;
  public string $idempotency_token;
  public Lifecycle $lifecycle;
}

class BackupPlanName {
}

class Condition {
  public ConditionType $condition_type;
  public ConditionKey $condition_key;
  public ConditionValue $condition_value;
}

class ExportBackupPlanTemplateOutput {
  public string $backup_plan_template_json;
}

class UpdateRecoveryPointLifecycleInput {
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
  public Lifecycle $lifecycle;
}

class BackupPlanTemplatesListMember {
  public string $backup_plan_template_name;
  public string $backup_plan_template_id;
}

class BackupPlansListMember {
  public BackupPlanName $backup_plan_name;
  public string $creator_request_id;
  public timestamp $last_execution_date;
  public ARN $backup_plan_arn;
  public string $backup_plan_id;
  public timestamp $creation_date;
  public timestamp $deletion_date;
  public string $version_id;
}

class ListBackupPlansInput {
  public string $next_token;
  public MaxResults $max_results;
  public boolean $include_deleted;
}

class RecoveryPointByResource {
  public ARN $encryption_key_arn;
  public Long $backup_size_bytes;
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
  public timestamp $creation_date;
  public RecoveryPointStatus $status;
}

class MetadataKey {
}

class TagResourceInput {
  public ARN $resource_arn;
  public Tags $tags;
}

class timestamp {
}

class CalculatedLifecycle {
  public timestamp $move_to_cold_storage_at;
  public timestamp $delete_at;
}

class CreateBackupVaultInput {
  public BackupVaultName $backup_vault_name;
  public Tags $backup_vault_tags;
  public ARN $encryption_key_arn;
  public string $creator_request_id;
}

class DeleteBackupSelectionInput {
  public string $backup_plan_id;
  public string $selection_id;
}

class ListBackupPlanVersionsOutput {
  public string $next_token;
  public BackupPlanVersionsList $backup_plan_versions_list;
}

class ListProtectedResourcesOutput {
  public ProtectedResourcesList $results;
  public string $next_token;
}

class ProtectedResourcesList {
}

class RecoveryPointCreator {
  public string $backup_plan_id;
  public ARN $backup_plan_arn;
  public string $backup_plan_version;
  public string $backup_rule_id;
}

class TagKeyList {
}

class BackupRule {
  public BackupRuleName $rule_name;
  public Lifecycle $lifecycle;
  public BackupVaultName $target_backup_vault_name;
  public CronExpression $schedule_expression;
  public WindowMinutes $start_window_minutes;
  public WindowMinutes $completion_window_minutes;
  public Tags $recovery_point_tags;
  public string $rule_id;
  public CopyActions $copy_actions;
}

class CreateBackupPlanInput {
  public BackupPlanInput $backup_plan;
  public Tags $backup_plan_tags;
  public string $creator_request_id;
}

class LimitExceededException {
  public string $context;
  public string $code;
  public string $message;
  public string $type;
}

class ListBackupPlanTemplatesInput {
  public string $next_token;
  public MaxResults $max_results;
}

class ListRestoreJobsInput {
  public MaxResults $max_results;
  public string $next_token;
}

class BackupVaultEvent {
}

class GetBackupVaultNotificationsInput {
  public BackupVaultName $backup_vault_name;
}

class ServiceUnavailableException {
  public string $context;
  public string $code;
  public string $message;
  public string $type;
}

class ResourceTypes {
}

class BackupSelectionName {
}

class BackupVaultName {
}

class DescribeBackupVaultOutput {
  public long $number_of_recovery_points;
  public string $backup_vault_name;
  public ARN $backup_vault_arn;
  public ARN $encryption_key_arn;
  public timestamp $creation_date;
  public string $creator_request_id;
}

class Lifecycle {
  public Long $move_to_cold_storage_after_days;
  public Long $delete_after_days;
}

class ListBackupPlanVersionsInput {
  public string $backup_plan_id;
  public string $next_token;
  public MaxResults $max_results;
}

class BackupSelection {
  public ListOfTags $list_of_tags;
  public BackupSelectionName $selection_name;
  public IAMRoleArn $iam_role_arn;
  public ResourceArns $resources;
}

class Boolean {
}

class DescribeProtectedResourceInput {
  public ARN $resource_arn;
}

class GetBackupPlanInput {
  public string $backup_plan_id;
  public string $version_id;
}

class StartRestoreJobOutput {
  public RestoreJobId $restore_job_id;
}

class ListBackupPlanTemplatesOutput {
  public string $next_token;
  public BackupPlanTemplatesList $backup_plan_templates_list;
}

class PutBackupVaultNotificationsInput {
  public BackupVaultEvents $backup_vault_events;
  public BackupVaultName $backup_vault_name;
  public ARN $sns_topic_arn;
}

class BackupPlanTemplatesList {
}

class BackupPlansList {
}

class BackupSelectionsList {
}

class CopyActions {
}

class InvalidRequestException {
  public string $code;
  public string $message;
  public string $type;
  public string $context;
}

class CronExpression {
}

class DescribeRestoreJobInput {
  public RestoreJobId $restore_job_id;
}

class ListRecoveryPointsByBackupVaultOutput {
  public string $next_token;
  public RecoveryPointByBackupVaultList $recovery_points;
}

class Long {
}

class RecoveryPointByResourceList {
}

