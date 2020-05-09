<?hh // strict
namespace slack\aws\backup;

interface Backup {
  public function CreateBackupPlan(CreateBackupPlanInput) Awaitable<Errors\Result<CreateBackupPlanOutput>>;
  public function CreateBackupSelection(CreateBackupSelectionInput) Awaitable<Errors\Result<CreateBackupSelectionOutput>>;
  public function CreateBackupVault(CreateBackupVaultInput) Awaitable<Errors\Result<CreateBackupVaultOutput>>;
  public function DeleteBackupPlan(DeleteBackupPlanInput) Awaitable<Errors\Result<DeleteBackupPlanOutput>>;
  public function DeleteBackupSelection(DeleteBackupSelectionInput) Awaitable<Errors\Error>;
  public function DeleteBackupVault(DeleteBackupVaultInput) Awaitable<Errors\Error>;
  public function DeleteBackupVaultAccessPolicy(DeleteBackupVaultAccessPolicyInput) Awaitable<Errors\Error>;
  public function DeleteBackupVaultNotifications(DeleteBackupVaultNotificationsInput) Awaitable<Errors\Error>;
  public function DeleteRecoveryPoint(DeleteRecoveryPointInput) Awaitable<Errors\Error>;
  public function DescribeBackupJob(DescribeBackupJobInput) Awaitable<Errors\Result<DescribeBackupJobOutput>>;
  public function DescribeBackupVault(DescribeBackupVaultInput) Awaitable<Errors\Result<DescribeBackupVaultOutput>>;
  public function DescribeCopyJob(DescribeCopyJobInput) Awaitable<Errors\Result<DescribeCopyJobOutput>>;
  public function DescribeProtectedResource(DescribeProtectedResourceInput) Awaitable<Errors\Result<DescribeProtectedResourceOutput>>;
  public function DescribeRecoveryPoint(DescribeRecoveryPointInput) Awaitable<Errors\Result<DescribeRecoveryPointOutput>>;
  public function DescribeRestoreJob(DescribeRestoreJobInput) Awaitable<Errors\Result<DescribeRestoreJobOutput>>;
  public function ExportBackupPlanTemplate(ExportBackupPlanTemplateInput) Awaitable<Errors\Result<ExportBackupPlanTemplateOutput>>;
  public function GetBackupPlan(GetBackupPlanInput) Awaitable<Errors\Result<GetBackupPlanOutput>>;
  public function GetBackupPlanFromJSON(GetBackupPlanFromJSONInput) Awaitable<Errors\Result<GetBackupPlanFromJSONOutput>>;
  public function GetBackupPlanFromTemplate(GetBackupPlanFromTemplateInput) Awaitable<Errors\Result<GetBackupPlanFromTemplateOutput>>;
  public function GetBackupSelection(GetBackupSelectionInput) Awaitable<Errors\Result<GetBackupSelectionOutput>>;
  public function GetBackupVaultAccessPolicy(GetBackupVaultAccessPolicyInput) Awaitable<Errors\Result<GetBackupVaultAccessPolicyOutput>>;
  public function GetBackupVaultNotifications(GetBackupVaultNotificationsInput) Awaitable<Errors\Result<GetBackupVaultNotificationsOutput>>;
  public function GetRecoveryPointRestoreMetadata(GetRecoveryPointRestoreMetadataInput) Awaitable<Errors\Result<GetRecoveryPointRestoreMetadataOutput>>;
  public function GetSupportedResourceTypes() Awaitable<Errors\Result<GetSupportedResourceTypesOutput>>;
  public function ListBackupJobs(ListBackupJobsInput) Awaitable<Errors\Result<ListBackupJobsOutput>>;
  public function ListBackupPlanTemplates(ListBackupPlanTemplatesInput) Awaitable<Errors\Result<ListBackupPlanTemplatesOutput>>;
  public function ListBackupPlanVersions(ListBackupPlanVersionsInput) Awaitable<Errors\Result<ListBackupPlanVersionsOutput>>;
  public function ListBackupPlans(ListBackupPlansInput) Awaitable<Errors\Result<ListBackupPlansOutput>>;
  public function ListBackupSelections(ListBackupSelectionsInput) Awaitable<Errors\Result<ListBackupSelectionsOutput>>;
  public function ListBackupVaults(ListBackupVaultsInput) Awaitable<Errors\Result<ListBackupVaultsOutput>>;
  public function ListCopyJobs(ListCopyJobsInput) Awaitable<Errors\Result<ListCopyJobsOutput>>;
  public function ListProtectedResources(ListProtectedResourcesInput) Awaitable<Errors\Result<ListProtectedResourcesOutput>>;
  public function ListRecoveryPointsByBackupVault(ListRecoveryPointsByBackupVaultInput) Awaitable<Errors\Result<ListRecoveryPointsByBackupVaultOutput>>;
  public function ListRecoveryPointsByResource(ListRecoveryPointsByResourceInput) Awaitable<Errors\Result<ListRecoveryPointsByResourceOutput>>;
  public function ListRestoreJobs(ListRestoreJobsInput) Awaitable<Errors\Result<ListRestoreJobsOutput>>;
  public function ListTags(ListTagsInput) Awaitable<Errors\Result<ListTagsOutput>>;
  public function PutBackupVaultAccessPolicy(PutBackupVaultAccessPolicyInput) Awaitable<Errors\Error>;
  public function PutBackupVaultNotifications(PutBackupVaultNotificationsInput) Awaitable<Errors\Error>;
  public function StartBackupJob(StartBackupJobInput) Awaitable<Errors\Result<StartBackupJobOutput>>;
  public function StartCopyJob(StartCopyJobInput) Awaitable<Errors\Result<StartCopyJobOutput>>;
  public function StartRestoreJob(StartRestoreJobInput) Awaitable<Errors\Result<StartRestoreJobOutput>>;
  public function StopBackupJob(StopBackupJobInput) Awaitable<Errors\Error>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Error>;
  public function UpdateBackupPlan(UpdateBackupPlanInput) Awaitable<Errors\Result<UpdateBackupPlanOutput>>;
  public function UpdateRecoveryPointLifecycle(UpdateRecoveryPointLifecycleInput) Awaitable<Errors\Result<UpdateRecoveryPointLifecycleOutput>>;
}

class ARN {
}

class AlreadyExistsException {
  public string $arn;
  public string $code;
  public string $context;
  public string $creator_request_id;
  public string $message;
  public string $type;
}

class BackupJob {
  public string $backup_job_id;
  public Long $backup_size_in_bytes;
  public ARN $backup_vault_arn;
  public BackupVaultName $backup_vault_name;
  public Long $bytes_transferred;
  public timestamp $completion_date;
  public RecoveryPointCreator $created_by;
  public timestamp $creation_date;
  public timestamp $expected_completion_date;
  public IAMRoleArn $iam_role_arn;
  public string $percent_done;
  public ARN $recovery_point_arn;
  public ARN $resource_arn;
  public ResourceType $resource_type;
  public timestamp $start_by;
  public BackupJobState $state;
  public string $status_message;
}

class BackupJobState {
}

class BackupJobsList {
}

class BackupPlan {
  public BackupPlanName $backup_plan_name;
  public BackupRules $rules;
}

class BackupPlanInput {
  public BackupPlanName $backup_plan_name;
  public BackupRulesInput $rules;
}

class BackupPlanName {
}

class BackupPlanTemplatesList {
}

class BackupPlanTemplatesListMember {
  public string $backup_plan_template_id;
  public string $backup_plan_template_name;
}

class BackupPlanVersionsList {
}

class BackupPlansList {
}

class BackupPlansListMember {
  public ARN $backup_plan_arn;
  public string $backup_plan_id;
  public BackupPlanName $backup_plan_name;
  public timestamp $creation_date;
  public string $creator_request_id;
  public timestamp $deletion_date;
  public timestamp $last_execution_date;
  public string $version_id;
}

class BackupRule {
  public WindowMinutes $completion_window_minutes;
  public CopyActions $copy_actions;
  public Lifecycle $lifecycle;
  public Tags $recovery_point_tags;
  public string $rule_id;
  public BackupRuleName $rule_name;
  public CronExpression $schedule_expression;
  public WindowMinutes $start_window_minutes;
  public BackupVaultName $target_backup_vault_name;
}

class BackupRuleInput {
  public WindowMinutes $completion_window_minutes;
  public CopyActions $copy_actions;
  public Lifecycle $lifecycle;
  public Tags $recovery_point_tags;
  public BackupRuleName $rule_name;
  public CronExpression $schedule_expression;
  public WindowMinutes $start_window_minutes;
  public BackupVaultName $target_backup_vault_name;
}

class BackupRuleName {
}

class BackupRules {
}

class BackupRulesInput {
}

class BackupSelection {
  public IAMRoleArn $iam_role_arn;
  public ListOfTags $list_of_tags;
  public ResourceArns $resources;
  public BackupSelectionName $selection_name;
}

class BackupSelectionName {
}

class BackupSelectionsList {
}

class BackupSelectionsListMember {
  public string $backup_plan_id;
  public timestamp $creation_date;
  public string $creator_request_id;
  public IAMRoleArn $iam_role_arn;
  public string $selection_id;
  public BackupSelectionName $selection_name;
}

class BackupVaultEvent {
}

class BackupVaultEvents {
}

class BackupVaultList {
}

class BackupVaultListMember {
  public ARN $backup_vault_arn;
  public BackupVaultName $backup_vault_name;
  public timestamp $creation_date;
  public string $creator_request_id;
  public ARN $encryption_key_arn;
  public long $number_of_recovery_points;
}

class BackupVaultName {
}

class Boolean {
}

class CalculatedLifecycle {
  public timestamp $delete_at;
  public timestamp $move_to_cold_storage_at;
}

class Condition {
  public ConditionKey $condition_key;
  public ConditionType $condition_type;
  public ConditionValue $condition_value;
}

class ConditionKey {
}

class ConditionType {
}

class ConditionValue {
}

class CopyAction {
  public ARN $destination_backup_vault_arn;
  public Lifecycle $lifecycle;
}

class CopyActions {
}

class CopyJob {
  public Long $backup_size_in_bytes;
  public timestamp $completion_date;
  public string $copy_job_id;
  public RecoveryPointCreator $created_by;
  public timestamp $creation_date;
  public ARN $destination_backup_vault_arn;
  public ARN $destination_recovery_point_arn;
  public IAMRoleArn $iam_role_arn;
  public ARN $resource_arn;
  public ResourceType $resource_type;
  public ARN $source_backup_vault_arn;
  public ARN $source_recovery_point_arn;
  public CopyJobState $state;
  public string $status_message;
}

class CopyJobState {
}

class CopyJobsList {
}

class CreateBackupPlanInput {
  public BackupPlanInput $backup_plan;
  public Tags $backup_plan_tags;
  public string $creator_request_id;
}

class CreateBackupPlanOutput {
  public ARN $backup_plan_arn;
  public string $backup_plan_id;
  public timestamp $creation_date;
  public string $version_id;
}

class CreateBackupSelectionInput {
  public string $backup_plan_id;
  public BackupSelection $backup_selection;
  public string $creator_request_id;
}

class CreateBackupSelectionOutput {
  public string $backup_plan_id;
  public timestamp $creation_date;
  public string $selection_id;
}

class CreateBackupVaultInput {
  public BackupVaultName $backup_vault_name;
  public Tags $backup_vault_tags;
  public string $creator_request_id;
  public ARN $encryption_key_arn;
}

class CreateBackupVaultOutput {
  public ARN $backup_vault_arn;
  public BackupVaultName $backup_vault_name;
  public timestamp $creation_date;
}

class CronExpression {
}

class DeleteBackupPlanInput {
  public string $backup_plan_id;
}

class DeleteBackupPlanOutput {
  public ARN $backup_plan_arn;
  public string $backup_plan_id;
  public timestamp $deletion_date;
  public string $version_id;
}

class DeleteBackupSelectionInput {
  public string $backup_plan_id;
  public string $selection_id;
}

class DeleteBackupVaultAccessPolicyInput {
  public BackupVaultName $backup_vault_name;
}

class DeleteBackupVaultInput {
  public string $backup_vault_name;
}

class DeleteBackupVaultNotificationsInput {
  public BackupVaultName $backup_vault_name;
}

class DeleteRecoveryPointInput {
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
}

class DependencyFailureException {
  public string $code;
  public string $context;
  public string $message;
  public string $type;
}

class DescribeBackupJobInput {
  public string $backup_job_id;
}

class DescribeBackupJobOutput {
  public string $backup_job_id;
  public Long $backup_size_in_bytes;
  public ARN $backup_vault_arn;
  public BackupVaultName $backup_vault_name;
  public Long $bytes_transferred;
  public timestamp $completion_date;
  public RecoveryPointCreator $created_by;
  public timestamp $creation_date;
  public timestamp $expected_completion_date;
  public IAMRoleArn $iam_role_arn;
  public string $percent_done;
  public ARN $recovery_point_arn;
  public ARN $resource_arn;
  public ResourceType $resource_type;
  public timestamp $start_by;
  public BackupJobState $state;
  public string $status_message;
}

class DescribeBackupVaultInput {
  public string $backup_vault_name;
}

class DescribeBackupVaultOutput {
  public ARN $backup_vault_arn;
  public string $backup_vault_name;
  public timestamp $creation_date;
  public string $creator_request_id;
  public ARN $encryption_key_arn;
  public long $number_of_recovery_points;
}

class DescribeCopyJobInput {
  public string $copy_job_id;
}

class DescribeCopyJobOutput {
  public CopyJob $copy_job;
}

class DescribeProtectedResourceInput {
  public ARN $resource_arn;
}

class DescribeProtectedResourceOutput {
  public timestamp $last_backup_time;
  public ARN $resource_arn;
  public ResourceType $resource_type;
}

class DescribeRecoveryPointInput {
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
}

class DescribeRecoveryPointOutput {
  public Long $backup_size_in_bytes;
  public ARN $backup_vault_arn;
  public BackupVaultName $backup_vault_name;
  public CalculatedLifecycle $calculated_lifecycle;
  public timestamp $completion_date;
  public RecoveryPointCreator $created_by;
  public timestamp $creation_date;
  public ARN $encryption_key_arn;
  public IAMRoleArn $iam_role_arn;
  public boolean $is_encrypted;
  public timestamp $last_restore_time;
  public Lifecycle $lifecycle;
  public ARN $recovery_point_arn;
  public ARN $resource_arn;
  public ResourceType $resource_type;
  public RecoveryPointStatus $status;
  public StorageClass $storage_class;
}

class DescribeRestoreJobInput {
  public RestoreJobId $restore_job_id;
}

class DescribeRestoreJobOutput {
  public Long $backup_size_in_bytes;
  public timestamp $completion_date;
  public ARN $created_resource_arn;
  public timestamp $creation_date;
  public Long $expected_completion_time_minutes;
  public IAMRoleArn $iam_role_arn;
  public string $percent_done;
  public ARN $recovery_point_arn;
  public string $restore_job_id;
  public RestoreJobStatus $status;
  public string $status_message;
}

class ExportBackupPlanTemplateInput {
  public string $backup_plan_id;
}

class ExportBackupPlanTemplateOutput {
  public string $backup_plan_template_json;
}

class GetBackupPlanFromJSONInput {
  public string $backup_plan_template_json;
}

class GetBackupPlanFromJSONOutput {
  public BackupPlan $backup_plan;
}

class GetBackupPlanFromTemplateInput {
  public string $backup_plan_template_id;
}

class GetBackupPlanFromTemplateOutput {
  public BackupPlan $backup_plan_document;
}

class GetBackupPlanInput {
  public string $backup_plan_id;
  public string $version_id;
}

class GetBackupPlanOutput {
  public BackupPlan $backup_plan;
  public ARN $backup_plan_arn;
  public string $backup_plan_id;
  public timestamp $creation_date;
  public string $creator_request_id;
  public timestamp $deletion_date;
  public timestamp $last_execution_date;
  public string $version_id;
}

class GetBackupSelectionInput {
  public string $backup_plan_id;
  public string $selection_id;
}

class GetBackupSelectionOutput {
  public string $backup_plan_id;
  public BackupSelection $backup_selection;
  public timestamp $creation_date;
  public string $creator_request_id;
  public string $selection_id;
}

class GetBackupVaultAccessPolicyInput {
  public BackupVaultName $backup_vault_name;
}

class GetBackupVaultAccessPolicyOutput {
  public ARN $backup_vault_arn;
  public BackupVaultName $backup_vault_name;
  public IAMPolicy $policy;
}

class GetBackupVaultNotificationsInput {
  public BackupVaultName $backup_vault_name;
}

class GetBackupVaultNotificationsOutput {
  public ARN $backup_vault_arn;
  public BackupVaultEvents $backup_vault_events;
  public BackupVaultName $backup_vault_name;
  public ARN $sns_topic_arn;
}

class GetRecoveryPointRestoreMetadataInput {
  public BackupVaultName $backup_vault_name;
  public ARN $recovery_point_arn;
}

class GetRecoveryPointRestoreMetadataOutput {
  public ARN $backup_vault_arn;
  public ARN $recovery_point_arn;
  public Metadata $restore_metadata;
}

class GetSupportedResourceTypesOutput {
  public ResourceTypes $resource_types;
}

class IAMPolicy {
}

class IAMRoleArn {
}

class InvalidParameterValueException {
  public string $code;
  public string $context;
  public string $message;
  public string $type;
}

class InvalidRequestException {
  public string $code;
  public string $context;
  public string $message;
  public string $type;
}

class Lifecycle {
  public Long $delete_after_days;
  public Long $move_to_cold_storage_after_days;
}

class LimitExceededException {
  public string $code;
  public string $context;
  public string $message;
  public string $type;
}

class ListBackupJobsInput {
  public BackupVaultName $by_backup_vault_name;
  public timestamp $by_created_after;
  public timestamp $by_created_before;
  public ARN $by_resource_arn;
  public ResourceType $by_resource_type;
  public BackupJobState $by_state;
  public MaxResults $max_results;
  public string $next_token;
}

class ListBackupJobsOutput {
  public BackupJobsList $backup_jobs;
  public string $next_token;
}

class ListBackupPlanTemplatesInput {
  public MaxResults $max_results;
  public string $next_token;
}

class ListBackupPlanTemplatesOutput {
  public BackupPlanTemplatesList $backup_plan_templates_list;
  public string $next_token;
}

class ListBackupPlanVersionsInput {
  public string $backup_plan_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListBackupPlanVersionsOutput {
  public BackupPlanVersionsList $backup_plan_versions_list;
  public string $next_token;
}

class ListBackupPlansInput {
  public boolean $include_deleted;
  public MaxResults $max_results;
  public string $next_token;
}

class ListBackupPlansOutput {
  public BackupPlansList $backup_plans_list;
  public string $next_token;
}

class ListBackupSelectionsInput {
  public string $backup_plan_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListBackupSelectionsOutput {
  public BackupSelectionsList $backup_selections_list;
  public string $next_token;
}

class ListBackupVaultsInput {
  public MaxResults $max_results;
  public string $next_token;
}

class ListBackupVaultsOutput {
  public BackupVaultList $backup_vault_list;
  public string $next_token;
}

class ListCopyJobsInput {
  public timestamp $by_created_after;
  public timestamp $by_created_before;
  public string $by_destination_vault_arn;
  public ARN $by_resource_arn;
  public ResourceType $by_resource_type;
  public CopyJobState $by_state;
  public MaxResults $max_results;
  public string $next_token;
}

class ListCopyJobsOutput {
  public CopyJobsList $copy_jobs;
  public string $next_token;
}

class ListOfTags {
}

class ListProtectedResourcesInput {
  public MaxResults $max_results;
  public string $next_token;
}

class ListProtectedResourcesOutput {
  public string $next_token;
  public ProtectedResourcesList $results;
}

class ListRecoveryPointsByBackupVaultInput {
  public BackupVaultName $backup_vault_name;
  public string $by_backup_plan_id;
  public timestamp $by_created_after;
  public timestamp $by_created_before;
  public ARN $by_resource_arn;
  public ResourceType $by_resource_type;
  public MaxResults $max_results;
  public string $next_token;
}

class ListRecoveryPointsByBackupVaultOutput {
  public string $next_token;
  public RecoveryPointByBackupVaultList $recovery_points;
}

class ListRecoveryPointsByResourceInput {
  public MaxResults $max_results;
  public string $next_token;
  public ARN $resource_arn;
}

class ListRecoveryPointsByResourceOutput {
  public string $next_token;
  public RecoveryPointByResourceList $recovery_points;
}

class ListRestoreJobsInput {
  public MaxResults $max_results;
  public string $next_token;
}

class ListRestoreJobsOutput {
  public string $next_token;
  public RestoreJobsList $restore_jobs;
}

class ListTagsInput {
  public MaxResults $max_results;
  public string $next_token;
  public ARN $resource_arn;
}

class ListTagsOutput {
  public string $next_token;
  public Tags $tags;
}

class Long {
}

class MaxResults {
}

class Metadata {
}

class MetadataKey {
}

class MetadataValue {
}

class MissingParameterValueException {
  public string $code;
  public string $context;
  public string $message;
  public string $type;
}

class ProtectedResource {
  public timestamp $last_backup_time;
  public ARN $resource_arn;
  public ResourceType $resource_type;
}

class ProtectedResourcesList {
}

class PutBackupVaultAccessPolicyInput {
  public BackupVaultName $backup_vault_name;
  public IAMPolicy $policy;
}

class PutBackupVaultNotificationsInput {
  public BackupVaultEvents $backup_vault_events;
  public BackupVaultName $backup_vault_name;
  public ARN $sns_topic_arn;
}

class RecoveryPointByBackupVault {
  public Long $backup_size_in_bytes;
  public ARN $backup_vault_arn;
  public BackupVaultName $backup_vault_name;
  public CalculatedLifecycle $calculated_lifecycle;
  public timestamp $completion_date;
  public RecoveryPointCreator $created_by;
  public timestamp $creation_date;
  public ARN $encryption_key_arn;
  public IAMRoleArn $iam_role_arn;
  public boolean $is_encrypted;
  public timestamp $last_restore_time;
  public Lifecycle $lifecycle;
  public ARN $recovery_point_arn;
  public ARN $resource_arn;
  public ResourceType $resource_type;
  public RecoveryPointStatus $status;
}

class RecoveryPointByBackupVaultList {
}

class RecoveryPointByResource {
  public Long $backup_size_bytes;
  public BackupVaultName $backup_vault_name;
  public timestamp $creation_date;
  public ARN $encryption_key_arn;
  public ARN $recovery_point_arn;
  public RecoveryPointStatus $status;
}

class RecoveryPointByResourceList {
}

class RecoveryPointCreator {
  public ARN $backup_plan_arn;
  public string $backup_plan_id;
  public string $backup_plan_version;
  public string $backup_rule_id;
}

class RecoveryPointStatus {
}

class ResourceArns {
}

class ResourceNotFoundException {
  public string $code;
  public string $context;
  public string $message;
  public string $type;
}

class ResourceType {
}

class ResourceTypes {
}

class RestoreJobId {
}

class RestoreJobStatus {
}

class RestoreJobsList {
}

class RestoreJobsListMember {
  public Long $backup_size_in_bytes;
  public timestamp $completion_date;
  public ARN $created_resource_arn;
  public timestamp $creation_date;
  public Long $expected_completion_time_minutes;
  public IAMRoleArn $iam_role_arn;
  public string $percent_done;
  public ARN $recovery_point_arn;
  public string $restore_job_id;
  public RestoreJobStatus $status;
  public string $status_message;
}

class ServiceUnavailableException {
  public string $code;
  public string $context;
  public string $message;
  public string $type;
}

class StartBackupJobInput {
  public BackupVaultName $backup_vault_name;
  public WindowMinutes $complete_window_minutes;
  public IAMRoleArn $iam_role_arn;
  public string $idempotency_token;
  public Lifecycle $lifecycle;
  public Tags $recovery_point_tags;
  public ARN $resource_arn;
  public WindowMinutes $start_window_minutes;
}

class StartBackupJobOutput {
  public string $backup_job_id;
  public timestamp $creation_date;
  public ARN $recovery_point_arn;
}

class StartCopyJobInput {
  public ARN $destination_backup_vault_arn;
  public IAMRoleArn $iam_role_arn;
  public string $idempotency_token;
  public Lifecycle $lifecycle;
  public ARN $recovery_point_arn;
  public BackupVaultName $source_backup_vault_name;
}

class StartCopyJobOutput {
  public string $copy_job_id;
  public timestamp $creation_date;
}

class StartRestoreJobInput {
  public IAMRoleArn $iam_role_arn;
  public string $idempotency_token;
  public Metadata $metadata;
  public ARN $recovery_point_arn;
  public ResourceType $resource_type;
}

class StartRestoreJobOutput {
  public RestoreJobId $restore_job_id;
}

class StopBackupJobInput {
  public string $backup_job_id;
}

class StorageClass {
}

class TagKey {
}

class TagKeyList {
}

class TagResourceInput {
  public ARN $resource_arn;
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class UntagResourceInput {
  public ARN $resource_arn;
  public TagKeyList $tag_key_list;
}

class UpdateBackupPlanInput {
  public BackupPlanInput $backup_plan;
  public string $backup_plan_id;
}

class UpdateBackupPlanOutput {
  public ARN $backup_plan_arn;
  public string $backup_plan_id;
  public timestamp $creation_date;
  public string $version_id;
}

class UpdateRecoveryPointLifecycleInput {
  public BackupVaultName $backup_vault_name;
  public Lifecycle $lifecycle;
  public ARN $recovery_point_arn;
}

class UpdateRecoveryPointLifecycleOutput {
  public ARN $backup_vault_arn;
  public CalculatedLifecycle $calculated_lifecycle;
  public Lifecycle $lifecycle;
  public ARN $recovery_point_arn;
}

class WindowMinutes {
}

class boolean {
}

class long {
}

class string {
}

class timestamp {
}

