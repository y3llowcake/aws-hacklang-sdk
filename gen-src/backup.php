<?hh // strict
namespace slack\aws\backup;

interface Backup {
  public function CreateBackupPlan(CreateBackupPlanInput $in): Awaitable<\Errors\Result<CreateBackupPlanOutput>>;
  public function CreateBackupSelection(CreateBackupSelectionInput $in): Awaitable<\Errors\Result<CreateBackupSelectionOutput>>;
  public function CreateBackupVault(CreateBackupVaultInput $in): Awaitable<\Errors\Result<CreateBackupVaultOutput>>;
  public function DeleteBackupPlan(DeleteBackupPlanInput $in): Awaitable<\Errors\Result<DeleteBackupPlanOutput>>;
  public function DeleteBackupSelection(DeleteBackupSelectionInput $in): Awaitable<\Errors\Error>;
  public function DeleteBackupVault(DeleteBackupVaultInput $in): Awaitable<\Errors\Error>;
  public function DeleteBackupVaultAccessPolicy(DeleteBackupVaultAccessPolicyInput $in): Awaitable<\Errors\Error>;
  public function DeleteBackupVaultNotifications(DeleteBackupVaultNotificationsInput $in): Awaitable<\Errors\Error>;
  public function DeleteRecoveryPoint(DeleteRecoveryPointInput $in): Awaitable<\Errors\Error>;
  public function DescribeBackupJob(DescribeBackupJobInput $in): Awaitable<\Errors\Result<DescribeBackupJobOutput>>;
  public function DescribeBackupVault(DescribeBackupVaultInput $in): Awaitable<\Errors\Result<DescribeBackupVaultOutput>>;
  public function DescribeCopyJob(DescribeCopyJobInput $in): Awaitable<\Errors\Result<DescribeCopyJobOutput>>;
  public function DescribeProtectedResource(DescribeProtectedResourceInput $in): Awaitable<\Errors\Result<DescribeProtectedResourceOutput>>;
  public function DescribeRecoveryPoint(DescribeRecoveryPointInput $in): Awaitable<\Errors\Result<DescribeRecoveryPointOutput>>;
  public function DescribeRestoreJob(DescribeRestoreJobInput $in): Awaitable<\Errors\Result<DescribeRestoreJobOutput>>;
  public function ExportBackupPlanTemplate(ExportBackupPlanTemplateInput $in): Awaitable<\Errors\Result<ExportBackupPlanTemplateOutput>>;
  public function GetBackupPlan(GetBackupPlanInput $in): Awaitable<\Errors\Result<GetBackupPlanOutput>>;
  public function GetBackupPlanFromJSON(GetBackupPlanFromJSONInput $in): Awaitable<\Errors\Result<GetBackupPlanFromJSONOutput>>;
  public function GetBackupPlanFromTemplate(GetBackupPlanFromTemplateInput $in): Awaitable<\Errors\Result<GetBackupPlanFromTemplateOutput>>;
  public function GetBackupSelection(GetBackupSelectionInput $in): Awaitable<\Errors\Result<GetBackupSelectionOutput>>;
  public function GetBackupVaultAccessPolicy(GetBackupVaultAccessPolicyInput $in): Awaitable<\Errors\Result<GetBackupVaultAccessPolicyOutput>>;
  public function GetBackupVaultNotifications(GetBackupVaultNotificationsInput $in): Awaitable<\Errors\Result<GetBackupVaultNotificationsOutput>>;
  public function GetRecoveryPointRestoreMetadata(GetRecoveryPointRestoreMetadataInput $in): Awaitable<\Errors\Result<GetRecoveryPointRestoreMetadataOutput>>;
  public function GetSupportedResourceTypes( $in): Awaitable<\Errors\Result<GetSupportedResourceTypesOutput>>;
  public function ListBackupJobs(ListBackupJobsInput $in): Awaitable<\Errors\Result<ListBackupJobsOutput>>;
  public function ListBackupPlanTemplates(ListBackupPlanTemplatesInput $in): Awaitable<\Errors\Result<ListBackupPlanTemplatesOutput>>;
  public function ListBackupPlanVersions(ListBackupPlanVersionsInput $in): Awaitable<\Errors\Result<ListBackupPlanVersionsOutput>>;
  public function ListBackupPlans(ListBackupPlansInput $in): Awaitable<\Errors\Result<ListBackupPlansOutput>>;
  public function ListBackupSelections(ListBackupSelectionsInput $in): Awaitable<\Errors\Result<ListBackupSelectionsOutput>>;
  public function ListBackupVaults(ListBackupVaultsInput $in): Awaitable<\Errors\Result<ListBackupVaultsOutput>>;
  public function ListCopyJobs(ListCopyJobsInput $in): Awaitable<\Errors\Result<ListCopyJobsOutput>>;
  public function ListProtectedResources(ListProtectedResourcesInput $in): Awaitable<\Errors\Result<ListProtectedResourcesOutput>>;
  public function ListRecoveryPointsByBackupVault(ListRecoveryPointsByBackupVaultInput $in): Awaitable<\Errors\Result<ListRecoveryPointsByBackupVaultOutput>>;
  public function ListRecoveryPointsByResource(ListRecoveryPointsByResourceInput $in): Awaitable<\Errors\Result<ListRecoveryPointsByResourceOutput>>;
  public function ListRestoreJobs(ListRestoreJobsInput $in): Awaitable<\Errors\Result<ListRestoreJobsOutput>>;
  public function ListTags(ListTagsInput $in): Awaitable<\Errors\Result<ListTagsOutput>>;
  public function PutBackupVaultAccessPolicy(PutBackupVaultAccessPolicyInput $in): Awaitable<\Errors\Error>;
  public function PutBackupVaultNotifications(PutBackupVaultNotificationsInput $in): Awaitable<\Errors\Error>;
  public function StartBackupJob(StartBackupJobInput $in): Awaitable<\Errors\Result<StartBackupJobOutput>>;
  public function StartCopyJob(StartCopyJobInput $in): Awaitable<\Errors\Result<StartCopyJobOutput>>;
  public function StartRestoreJob(StartRestoreJobInput $in): Awaitable<\Errors\Result<StartRestoreJobOutput>>;
  public function StopBackupJob(StopBackupJobInput $in): Awaitable<\Errors\Error>;
  public function TagResource(TagResourceInput $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceInput $in): Awaitable<\Errors\Error>;
  public function UpdateBackupPlan(UpdateBackupPlanInput $in): Awaitable<\Errors\Result<UpdateBackupPlanOutput>>;
  public function UpdateRecoveryPointLifecycle(UpdateRecoveryPointLifecycleInput $in): Awaitable<\Errors\Result<UpdateRecoveryPointLifecycleOutput>>;
}

type ARN = string;

class AlreadyExistsException {
  public ?string $arn;
  public ?string $code;
  public ?string $context;
  public ?string $creator_request_id;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'arn' => ?string,
    ?'code' => ?string,
    ?'context' => ?string,
    ?'creator_request_id' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class BackupJob {
  public ?string $backup_job_id;
  public ?Long $backup_size_in_bytes;
  public ?ARN $backup_vault_arn;
  public ?BackupVaultName $backup_vault_name;
  public ?Long $bytes_transferred;
  public ?timestamp $completion_date;
  public ?RecoveryPointCreator $created_by;
  public ?timestamp $creation_date;
  public ?timestamp $expected_completion_date;
  public ?IAMRoleArn $iam_role_arn;
  public ?string $percent_done;
  public ?ARN $recovery_point_arn;
  public ?ARN $resource_arn;
  public ?ResourceType $resource_type;
  public ?timestamp $start_by;
  public ?BackupJobState $state;
  public ?string $status_message;

  public function __construct(shape(
    ?'backup_job_id' => ?string,
    ?'backup_size_in_bytes' => ?Long,
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'bytes_transferred' => ?Long,
    ?'completion_date' => ?timestamp,
    ?'created_by' => ?RecoveryPointCreator,
    ?'creation_date' => ?timestamp,
    ?'expected_completion_date' => ?timestamp,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'percent_done' => ?string,
    ?'recovery_point_arn' => ?ARN,
    ?'resource_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
    ?'start_by' => ?timestamp,
    ?'state' => ?BackupJobState,
    ?'status_message' => ?string,
  ) $s = shape()) {
    $this->backup_job_id = $s['backup_job_id'] ?? '';
    $this->backup_size_in_bytes = $s['backup_size_in_bytes'] ?? 0;
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->bytes_transferred = $s['bytes_transferred'] ?? 0;
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->created_by = $s['created_by'] ?? null;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->expected_completion_date = $s['expected_completion_date'] ?? 0;
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->percent_done = $s['percent_done'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->start_by = $s['start_by'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type BackupJobState = string;

type BackupJobsList = vec<BackupJob>;

class BackupPlan {
  public ?BackupPlanName $backup_plan_name;
  public ?BackupRules $rules;

  public function __construct(shape(
    ?'backup_plan_name' => ?BackupPlanName,
    ?'rules' => ?BackupRules,
  ) $s = shape()) {
    $this->backup_plan_name = $s['backup_plan_name'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class BackupPlanInput {
  public ?BackupPlanName $backup_plan_name;
  public ?BackupRulesInput $rules;

  public function __construct(shape(
    ?'backup_plan_name' => ?BackupPlanName,
    ?'rules' => ?BackupRulesInput,
  ) $s = shape()) {
    $this->backup_plan_name = $s['backup_plan_name'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

type BackupPlanName = string;

type BackupPlanTemplatesList = vec<BackupPlanTemplatesListMember>;

class BackupPlanTemplatesListMember {
  public ?string $backup_plan_template_id;
  public ?string $backup_plan_template_name;

  public function __construct(shape(
    ?'backup_plan_template_id' => ?string,
    ?'backup_plan_template_name' => ?string,
  ) $s = shape()) {
    $this->backup_plan_template_id = $s['backup_plan_template_id'] ?? '';
    $this->backup_plan_template_name = $s['backup_plan_template_name'] ?? '';
  }
}

type BackupPlanVersionsList = vec<BackupPlansListMember>;

type BackupPlansList = vec<BackupPlansListMember>;

class BackupPlansListMember {
  public ?ARN $backup_plan_arn;
  public ?string $backup_plan_id;
  public ?BackupPlanName $backup_plan_name;
  public ?timestamp $creation_date;
  public ?string $creator_request_id;
  public ?timestamp $deletion_date;
  public ?timestamp $last_execution_date;
  public ?string $version_id;

  public function __construct(shape(
    ?'backup_plan_arn' => ?ARN,
    ?'backup_plan_id' => ?string,
    ?'backup_plan_name' => ?BackupPlanName,
    ?'creation_date' => ?timestamp,
    ?'creator_request_id' => ?string,
    ?'deletion_date' => ?timestamp,
    ?'last_execution_date' => ?timestamp,
    ?'version_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_arn = $s['backup_plan_arn'] ?? '';
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->backup_plan_name = $s['backup_plan_name'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->deletion_date = $s['deletion_date'] ?? 0;
    $this->last_execution_date = $s['last_execution_date'] ?? 0;
    $this->version_id = $s['version_id'] ?? '';
  }
}

class BackupRule {
  public ?WindowMinutes $completion_window_minutes;
  public ?CopyActions $copy_actions;
  public ?Lifecycle $lifecycle;
  public ?Tags $recovery_point_tags;
  public ?string $rule_id;
  public ?BackupRuleName $rule_name;
  public ?CronExpression $schedule_expression;
  public ?WindowMinutes $start_window_minutes;
  public ?BackupVaultName $target_backup_vault_name;

  public function __construct(shape(
    ?'completion_window_minutes' => ?WindowMinutes,
    ?'copy_actions' => ?CopyActions,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_tags' => ?Tags,
    ?'rule_id' => ?string,
    ?'rule_name' => ?BackupRuleName,
    ?'schedule_expression' => ?CronExpression,
    ?'start_window_minutes' => ?WindowMinutes,
    ?'target_backup_vault_name' => ?BackupVaultName,
  ) $s = shape()) {
    $this->completion_window_minutes = $s['completion_window_minutes'] ?? 0;
    $this->copy_actions = $s['copy_actions'] ?? vec[];
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_tags = $s['recovery_point_tags'] ?? dict[];
    $this->rule_id = $s['rule_id'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
    $this->schedule_expression = $s['schedule_expression'] ?? '';
    $this->start_window_minutes = $s['start_window_minutes'] ?? 0;
    $this->target_backup_vault_name = $s['target_backup_vault_name'] ?? '';
  }
}

class BackupRuleInput {
  public ?WindowMinutes $completion_window_minutes;
  public ?CopyActions $copy_actions;
  public ?Lifecycle $lifecycle;
  public ?Tags $recovery_point_tags;
  public ?BackupRuleName $rule_name;
  public ?CronExpression $schedule_expression;
  public ?WindowMinutes $start_window_minutes;
  public ?BackupVaultName $target_backup_vault_name;

  public function __construct(shape(
    ?'completion_window_minutes' => ?WindowMinutes,
    ?'copy_actions' => ?CopyActions,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_tags' => ?Tags,
    ?'rule_name' => ?BackupRuleName,
    ?'schedule_expression' => ?CronExpression,
    ?'start_window_minutes' => ?WindowMinutes,
    ?'target_backup_vault_name' => ?BackupVaultName,
  ) $s = shape()) {
    $this->completion_window_minutes = $s['completion_window_minutes'] ?? 0;
    $this->copy_actions = $s['copy_actions'] ?? vec[];
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_tags = $s['recovery_point_tags'] ?? dict[];
    $this->rule_name = $s['rule_name'] ?? '';
    $this->schedule_expression = $s['schedule_expression'] ?? '';
    $this->start_window_minutes = $s['start_window_minutes'] ?? 0;
    $this->target_backup_vault_name = $s['target_backup_vault_name'] ?? '';
  }
}

type BackupRuleName = string;

type BackupRules = vec<BackupRule>;

type BackupRulesInput = vec<BackupRuleInput>;

class BackupSelection {
  public ?IAMRoleArn $iam_role_arn;
  public ?ListOfTags $list_of_tags;
  public ?ResourceArns $resources;
  public ?BackupSelectionName $selection_name;

  public function __construct(shape(
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'list_of_tags' => ?ListOfTags,
    ?'resources' => ?ResourceArns,
    ?'selection_name' => ?BackupSelectionName,
  ) $s = shape()) {
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->list_of_tags = $s['list_of_tags'] ?? vec[];
    $this->resources = $s['resources'] ?? vec[];
    $this->selection_name = $s['selection_name'] ?? '';
  }
}

type BackupSelectionName = string;

type BackupSelectionsList = vec<BackupSelectionsListMember>;

class BackupSelectionsListMember {
  public ?string $backup_plan_id;
  public ?timestamp $creation_date;
  public ?string $creator_request_id;
  public ?IAMRoleArn $iam_role_arn;
  public ?string $selection_id;
  public ?BackupSelectionName $selection_name;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'creation_date' => ?timestamp,
    ?'creator_request_id' => ?string,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'selection_id' => ?string,
    ?'selection_name' => ?BackupSelectionName,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->selection_id = $s['selection_id'] ?? '';
    $this->selection_name = $s['selection_name'] ?? '';
  }
}

type BackupVaultEvent = string;

type BackupVaultEvents = vec<BackupVaultEvent>;

type BackupVaultList = vec<BackupVaultListMember>;

class BackupVaultListMember {
  public ?ARN $backup_vault_arn;
  public ?BackupVaultName $backup_vault_name;
  public ?timestamp $creation_date;
  public ?string $creator_request_id;
  public ?ARN $encryption_key_arn;
  public ?long $number_of_recovery_points;

  public function __construct(shape(
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'creation_date' => ?timestamp,
    ?'creator_request_id' => ?string,
    ?'encryption_key_arn' => ?ARN,
    ?'number_of_recovery_points' => ?long,
  ) $s = shape()) {
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->encryption_key_arn = $s['encryption_key_arn'] ?? '';
    $this->number_of_recovery_points = $s['number_of_recovery_points'] ?? 0;
  }
}

type BackupVaultName = string;

type Boolean = bool;

class CalculatedLifecycle {
  public ?timestamp $delete_at;
  public ?timestamp $move_to_cold_storage_at;

  public function __construct(shape(
    ?'delete_at' => ?timestamp,
    ?'move_to_cold_storage_at' => ?timestamp,
  ) $s = shape()) {
    $this->delete_at = $s['delete_at'] ?? 0;
    $this->move_to_cold_storage_at = $s['move_to_cold_storage_at'] ?? 0;
  }
}

class Condition {
  public ?ConditionKey $condition_key;
  public ?ConditionType $condition_type;
  public ?ConditionValue $condition_value;

  public function __construct(shape(
    ?'condition_key' => ?ConditionKey,
    ?'condition_type' => ?ConditionType,
    ?'condition_value' => ?ConditionValue,
  ) $s = shape()) {
    $this->condition_key = $s['condition_key'] ?? '';
    $this->condition_type = $s['condition_type'] ?? '';
    $this->condition_value = $s['condition_value'] ?? '';
  }
}

type ConditionKey = string;

type ConditionType = string;

type ConditionValue = string;

class CopyAction {
  public ?ARN $destination_backup_vault_arn;
  public ?Lifecycle $lifecycle;

  public function __construct(shape(
    ?'destination_backup_vault_arn' => ?ARN,
    ?'lifecycle' => ?Lifecycle,
  ) $s = shape()) {
    $this->destination_backup_vault_arn = $s['destination_backup_vault_arn'] ?? '';
    $this->lifecycle = $s['lifecycle'] ?? null;
  }
}

type CopyActions = vec<CopyAction>;

class CopyJob {
  public ?Long $backup_size_in_bytes;
  public ?timestamp $completion_date;
  public ?string $copy_job_id;
  public ?RecoveryPointCreator $created_by;
  public ?timestamp $creation_date;
  public ?ARN $destination_backup_vault_arn;
  public ?ARN $destination_recovery_point_arn;
  public ?IAMRoleArn $iam_role_arn;
  public ?ARN $resource_arn;
  public ?ResourceType $resource_type;
  public ?ARN $source_backup_vault_arn;
  public ?ARN $source_recovery_point_arn;
  public ?CopyJobState $state;
  public ?string $status_message;

  public function __construct(shape(
    ?'backup_size_in_bytes' => ?Long,
    ?'completion_date' => ?timestamp,
    ?'copy_job_id' => ?string,
    ?'created_by' => ?RecoveryPointCreator,
    ?'creation_date' => ?timestamp,
    ?'destination_backup_vault_arn' => ?ARN,
    ?'destination_recovery_point_arn' => ?ARN,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'resource_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
    ?'source_backup_vault_arn' => ?ARN,
    ?'source_recovery_point_arn' => ?ARN,
    ?'state' => ?CopyJobState,
    ?'status_message' => ?string,
  ) $s = shape()) {
    $this->backup_size_in_bytes = $s['backup_size_in_bytes'] ?? 0;
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->copy_job_id = $s['copy_job_id'] ?? '';
    $this->created_by = $s['created_by'] ?? null;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->destination_backup_vault_arn = $s['destination_backup_vault_arn'] ?? '';
    $this->destination_recovery_point_arn = $s['destination_recovery_point_arn'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->source_backup_vault_arn = $s['source_backup_vault_arn'] ?? '';
    $this->source_recovery_point_arn = $s['source_recovery_point_arn'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type CopyJobState = string;

type CopyJobsList = vec<CopyJob>;

class CreateBackupPlanInput {
  public ?BackupPlanInput $backup_plan;
  public ?Tags $backup_plan_tags;
  public ?string $creator_request_id;

  public function __construct(shape(
    ?'backup_plan' => ?BackupPlanInput,
    ?'backup_plan_tags' => ?Tags,
    ?'creator_request_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan = $s['backup_plan'] ?? null;
    $this->backup_plan_tags = $s['backup_plan_tags'] ?? dict[];
    $this->creator_request_id = $s['creator_request_id'] ?? '';
  }
}

class CreateBackupPlanOutput {
  public ?ARN $backup_plan_arn;
  public ?string $backup_plan_id;
  public ?timestamp $creation_date;
  public ?string $version_id;

  public function __construct(shape(
    ?'backup_plan_arn' => ?ARN,
    ?'backup_plan_id' => ?string,
    ?'creation_date' => ?timestamp,
    ?'version_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_arn = $s['backup_plan_arn'] ?? '';
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->version_id = $s['version_id'] ?? '';
  }
}

class CreateBackupSelectionInput {
  public ?string $backup_plan_id;
  public ?BackupSelection $backup_selection;
  public ?string $creator_request_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'backup_selection' => ?BackupSelection,
    ?'creator_request_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->backup_selection = $s['backup_selection'] ?? null;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
  }
}

class CreateBackupSelectionOutput {
  public ?string $backup_plan_id;
  public ?timestamp $creation_date;
  public ?string $selection_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'creation_date' => ?timestamp,
    ?'selection_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->selection_id = $s['selection_id'] ?? '';
  }
}

class CreateBackupVaultInput {
  public ?BackupVaultName $backup_vault_name;
  public ?Tags $backup_vault_tags;
  public ?string $creator_request_id;
  public ?ARN $encryption_key_arn;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'backup_vault_tags' => ?Tags,
    ?'creator_request_id' => ?string,
    ?'encryption_key_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->backup_vault_tags = $s['backup_vault_tags'] ?? dict[];
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->encryption_key_arn = $s['encryption_key_arn'] ?? '';
  }
}

class CreateBackupVaultOutput {
  public ?ARN $backup_vault_arn;
  public ?BackupVaultName $backup_vault_name;
  public ?timestamp $creation_date;

  public function __construct(shape(
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'creation_date' => ?timestamp,
  ) $s = shape()) {
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
  }
}

type CronExpression = string;

class DeleteBackupPlanInput {
  public ?string $backup_plan_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
  }
}

class DeleteBackupPlanOutput {
  public ?ARN $backup_plan_arn;
  public ?string $backup_plan_id;
  public ?timestamp $deletion_date;
  public ?string $version_id;

  public function __construct(shape(
    ?'backup_plan_arn' => ?ARN,
    ?'backup_plan_id' => ?string,
    ?'deletion_date' => ?timestamp,
    ?'version_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_arn = $s['backup_plan_arn'] ?? '';
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->deletion_date = $s['deletion_date'] ?? 0;
    $this->version_id = $s['version_id'] ?? '';
  }
}

class DeleteBackupSelectionInput {
  public ?string $backup_plan_id;
  public ?string $selection_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'selection_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->selection_id = $s['selection_id'] ?? '';
  }
}

class DeleteBackupVaultAccessPolicyInput {
  public ?BackupVaultName $backup_vault_name;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
  }
}

class DeleteBackupVaultInput {
  public ?string $backup_vault_name;

  public function __construct(shape(
    ?'backup_vault_name' => ?string,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
  }
}

class DeleteBackupVaultNotificationsInput {
  public ?BackupVaultName $backup_vault_name;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
  }
}

class DeleteRecoveryPointInput {
  public ?BackupVaultName $backup_vault_name;
  public ?ARN $recovery_point_arn;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'recovery_point_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
  }
}

class DependencyFailureException {
  public ?string $code;
  public ?string $context;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'context' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class DescribeBackupJobInput {
  public ?string $backup_job_id;

  public function __construct(shape(
    ?'backup_job_id' => ?string,
  ) $s = shape()) {
    $this->backup_job_id = $s['backup_job_id'] ?? '';
  }
}

class DescribeBackupJobOutput {
  public ?string $backup_job_id;
  public ?Long $backup_size_in_bytes;
  public ?ARN $backup_vault_arn;
  public ?BackupVaultName $backup_vault_name;
  public ?Long $bytes_transferred;
  public ?timestamp $completion_date;
  public ?RecoveryPointCreator $created_by;
  public ?timestamp $creation_date;
  public ?timestamp $expected_completion_date;
  public ?IAMRoleArn $iam_role_arn;
  public ?string $percent_done;
  public ?ARN $recovery_point_arn;
  public ?ARN $resource_arn;
  public ?ResourceType $resource_type;
  public ?timestamp $start_by;
  public ?BackupJobState $state;
  public ?string $status_message;

  public function __construct(shape(
    ?'backup_job_id' => ?string,
    ?'backup_size_in_bytes' => ?Long,
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'bytes_transferred' => ?Long,
    ?'completion_date' => ?timestamp,
    ?'created_by' => ?RecoveryPointCreator,
    ?'creation_date' => ?timestamp,
    ?'expected_completion_date' => ?timestamp,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'percent_done' => ?string,
    ?'recovery_point_arn' => ?ARN,
    ?'resource_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
    ?'start_by' => ?timestamp,
    ?'state' => ?BackupJobState,
    ?'status_message' => ?string,
  ) $s = shape()) {
    $this->backup_job_id = $s['backup_job_id'] ?? '';
    $this->backup_size_in_bytes = $s['backup_size_in_bytes'] ?? 0;
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->bytes_transferred = $s['bytes_transferred'] ?? 0;
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->created_by = $s['created_by'] ?? null;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->expected_completion_date = $s['expected_completion_date'] ?? 0;
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->percent_done = $s['percent_done'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->start_by = $s['start_by'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

class DescribeBackupVaultInput {
  public ?string $backup_vault_name;

  public function __construct(shape(
    ?'backup_vault_name' => ?string,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
  }
}

class DescribeBackupVaultOutput {
  public ?ARN $backup_vault_arn;
  public ?string $backup_vault_name;
  public ?timestamp $creation_date;
  public ?string $creator_request_id;
  public ?ARN $encryption_key_arn;
  public ?long $number_of_recovery_points;

  public function __construct(shape(
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?string,
    ?'creation_date' => ?timestamp,
    ?'creator_request_id' => ?string,
    ?'encryption_key_arn' => ?ARN,
    ?'number_of_recovery_points' => ?long,
  ) $s = shape()) {
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->encryption_key_arn = $s['encryption_key_arn'] ?? '';
    $this->number_of_recovery_points = $s['number_of_recovery_points'] ?? 0;
  }
}

class DescribeCopyJobInput {
  public ?string $copy_job_id;

  public function __construct(shape(
    ?'copy_job_id' => ?string,
  ) $s = shape()) {
    $this->copy_job_id = $s['copy_job_id'] ?? '';
  }
}

class DescribeCopyJobOutput {
  public ?CopyJob $copy_job;

  public function __construct(shape(
    ?'copy_job' => ?CopyJob,
  ) $s = shape()) {
    $this->copy_job = $s['copy_job'] ?? null;
  }
}

class DescribeProtectedResourceInput {
  public ?ARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DescribeProtectedResourceOutput {
  public ?timestamp $last_backup_time;
  public ?ARN $resource_arn;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'last_backup_time' => ?timestamp,
    ?'resource_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->last_backup_time = $s['last_backup_time'] ?? 0;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class DescribeRecoveryPointInput {
  public ?BackupVaultName $backup_vault_name;
  public ?ARN $recovery_point_arn;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'recovery_point_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
  }
}

class DescribeRecoveryPointOutput {
  public ?Long $backup_size_in_bytes;
  public ?ARN $backup_vault_arn;
  public ?BackupVaultName $backup_vault_name;
  public ?CalculatedLifecycle $calculated_lifecycle;
  public ?timestamp $completion_date;
  public ?RecoveryPointCreator $created_by;
  public ?timestamp $creation_date;
  public ?ARN $encryption_key_arn;
  public ?IAMRoleArn $iam_role_arn;
  public ?boolean $is_encrypted;
  public ?timestamp $last_restore_time;
  public ?Lifecycle $lifecycle;
  public ?ARN $recovery_point_arn;
  public ?ARN $resource_arn;
  public ?ResourceType $resource_type;
  public ?RecoveryPointStatus $status;
  public ?StorageClass $storage_class;

  public function __construct(shape(
    ?'backup_size_in_bytes' => ?Long,
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'calculated_lifecycle' => ?CalculatedLifecycle,
    ?'completion_date' => ?timestamp,
    ?'created_by' => ?RecoveryPointCreator,
    ?'creation_date' => ?timestamp,
    ?'encryption_key_arn' => ?ARN,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'is_encrypted' => ?boolean,
    ?'last_restore_time' => ?timestamp,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_arn' => ?ARN,
    ?'resource_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
    ?'status' => ?RecoveryPointStatus,
    ?'storage_class' => ?StorageClass,
  ) $s = shape()) {
    $this->backup_size_in_bytes = $s['backup_size_in_bytes'] ?? 0;
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->calculated_lifecycle = $s['calculated_lifecycle'] ?? null;
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->created_by = $s['created_by'] ?? null;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->encryption_key_arn = $s['encryption_key_arn'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->is_encrypted = $s['is_encrypted'] ?? false;
    $this->last_restore_time = $s['last_restore_time'] ?? 0;
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->storage_class = $s['storage_class'] ?? '';
  }
}

class DescribeRestoreJobInput {
  public ?RestoreJobId $restore_job_id;

  public function __construct(shape(
    ?'restore_job_id' => ?RestoreJobId,
  ) $s = shape()) {
    $this->restore_job_id = $s['restore_job_id'] ?? '';
  }
}

class DescribeRestoreJobOutput {
  public ?Long $backup_size_in_bytes;
  public ?timestamp $completion_date;
  public ?ARN $created_resource_arn;
  public ?timestamp $creation_date;
  public ?Long $expected_completion_time_minutes;
  public ?IAMRoleArn $iam_role_arn;
  public ?string $percent_done;
  public ?ARN $recovery_point_arn;
  public ?string $restore_job_id;
  public ?RestoreJobStatus $status;
  public ?string $status_message;

  public function __construct(shape(
    ?'backup_size_in_bytes' => ?Long,
    ?'completion_date' => ?timestamp,
    ?'created_resource_arn' => ?ARN,
    ?'creation_date' => ?timestamp,
    ?'expected_completion_time_minutes' => ?Long,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'percent_done' => ?string,
    ?'recovery_point_arn' => ?ARN,
    ?'restore_job_id' => ?string,
    ?'status' => ?RestoreJobStatus,
    ?'status_message' => ?string,
  ) $s = shape()) {
    $this->backup_size_in_bytes = $s['backup_size_in_bytes'] ?? 0;
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->created_resource_arn = $s['created_resource_arn'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->expected_completion_time_minutes = $s['expected_completion_time_minutes'] ?? 0;
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->percent_done = $s['percent_done'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->restore_job_id = $s['restore_job_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

class ExportBackupPlanTemplateInput {
  public ?string $backup_plan_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
  }
}

class ExportBackupPlanTemplateOutput {
  public ?string $backup_plan_template_json;

  public function __construct(shape(
    ?'backup_plan_template_json' => ?string,
  ) $s = shape()) {
    $this->backup_plan_template_json = $s['backup_plan_template_json'] ?? '';
  }
}

class GetBackupPlanFromJSONInput {
  public ?string $backup_plan_template_json;

  public function __construct(shape(
    ?'backup_plan_template_json' => ?string,
  ) $s = shape()) {
    $this->backup_plan_template_json = $s['backup_plan_template_json'] ?? '';
  }
}

class GetBackupPlanFromJSONOutput {
  public ?BackupPlan $backup_plan;

  public function __construct(shape(
    ?'backup_plan' => ?BackupPlan,
  ) $s = shape()) {
    $this->backup_plan = $s['backup_plan'] ?? null;
  }
}

class GetBackupPlanFromTemplateInput {
  public ?string $backup_plan_template_id;

  public function __construct(shape(
    ?'backup_plan_template_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_template_id = $s['backup_plan_template_id'] ?? '';
  }
}

class GetBackupPlanFromTemplateOutput {
  public ?BackupPlan $backup_plan_document;

  public function __construct(shape(
    ?'backup_plan_document' => ?BackupPlan,
  ) $s = shape()) {
    $this->backup_plan_document = $s['backup_plan_document'] ?? null;
  }
}

class GetBackupPlanInput {
  public ?string $backup_plan_id;
  public ?string $version_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'version_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

class GetBackupPlanOutput {
  public ?BackupPlan $backup_plan;
  public ?ARN $backup_plan_arn;
  public ?string $backup_plan_id;
  public ?timestamp $creation_date;
  public ?string $creator_request_id;
  public ?timestamp $deletion_date;
  public ?timestamp $last_execution_date;
  public ?string $version_id;

  public function __construct(shape(
    ?'backup_plan' => ?BackupPlan,
    ?'backup_plan_arn' => ?ARN,
    ?'backup_plan_id' => ?string,
    ?'creation_date' => ?timestamp,
    ?'creator_request_id' => ?string,
    ?'deletion_date' => ?timestamp,
    ?'last_execution_date' => ?timestamp,
    ?'version_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan = $s['backup_plan'] ?? null;
    $this->backup_plan_arn = $s['backup_plan_arn'] ?? '';
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->deletion_date = $s['deletion_date'] ?? 0;
    $this->last_execution_date = $s['last_execution_date'] ?? 0;
    $this->version_id = $s['version_id'] ?? '';
  }
}

class GetBackupSelectionInput {
  public ?string $backup_plan_id;
  public ?string $selection_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'selection_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->selection_id = $s['selection_id'] ?? '';
  }
}

class GetBackupSelectionOutput {
  public ?string $backup_plan_id;
  public ?BackupSelection $backup_selection;
  public ?timestamp $creation_date;
  public ?string $creator_request_id;
  public ?string $selection_id;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'backup_selection' => ?BackupSelection,
    ?'creation_date' => ?timestamp,
    ?'creator_request_id' => ?string,
    ?'selection_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->backup_selection = $s['backup_selection'] ?? null;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->selection_id = $s['selection_id'] ?? '';
  }
}

class GetBackupVaultAccessPolicyInput {
  public ?BackupVaultName $backup_vault_name;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
  }
}

class GetBackupVaultAccessPolicyOutput {
  public ?ARN $backup_vault_arn;
  public ?BackupVaultName $backup_vault_name;
  public ?IAMPolicy $policy;

  public function __construct(shape(
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'policy' => ?IAMPolicy,
  ) $s = shape()) {
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->policy = $s['policy'] ?? '';
  }
}

class GetBackupVaultNotificationsInput {
  public ?BackupVaultName $backup_vault_name;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
  }
}

class GetBackupVaultNotificationsOutput {
  public ?ARN $backup_vault_arn;
  public ?BackupVaultEvents $backup_vault_events;
  public ?BackupVaultName $backup_vault_name;
  public ?ARN $sns_topic_arn;

  public function __construct(shape(
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_events' => ?BackupVaultEvents,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'sns_topic_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_events = $s['backup_vault_events'] ?? vec[];
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

class GetRecoveryPointRestoreMetadataInput {
  public ?BackupVaultName $backup_vault_name;
  public ?ARN $recovery_point_arn;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'recovery_point_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
  }
}

class GetRecoveryPointRestoreMetadataOutput {
  public ?ARN $backup_vault_arn;
  public ?ARN $recovery_point_arn;
  public ?Metadata $restore_metadata;

  public function __construct(shape(
    ?'backup_vault_arn' => ?ARN,
    ?'recovery_point_arn' => ?ARN,
    ?'restore_metadata' => ?Metadata,
  ) $s = shape()) {
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->restore_metadata = $s['restore_metadata'] ?? dict[];
  }
}

class GetSupportedResourceTypesOutput {
  public ?ResourceTypes $resource_types;

  public function __construct(shape(
    ?'resource_types' => ?ResourceTypes,
  ) $s = shape()) {
    $this->resource_types = $s['resource_types'] ?? vec[];
  }
}

type IAMPolicy = string;

type IAMRoleArn = string;

class InvalidParameterValueException {
  public ?string $code;
  public ?string $context;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'context' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class InvalidRequestException {
  public ?string $code;
  public ?string $context;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'context' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class Lifecycle {
  public ?Long $delete_after_days;
  public ?Long $move_to_cold_storage_after_days;

  public function __construct(shape(
    ?'delete_after_days' => ?Long,
    ?'move_to_cold_storage_after_days' => ?Long,
  ) $s = shape()) {
    $this->delete_after_days = $s['delete_after_days'] ?? 0;
    $this->move_to_cold_storage_after_days = $s['move_to_cold_storage_after_days'] ?? 0;
  }
}

class LimitExceededException {
  public ?string $code;
  public ?string $context;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'context' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListBackupJobsInput {
  public ?BackupVaultName $by_backup_vault_name;
  public ?timestamp $by_created_after;
  public ?timestamp $by_created_before;
  public ?ARN $by_resource_arn;
  public ?ResourceType $by_resource_type;
  public ?BackupJobState $by_state;
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'by_backup_vault_name' => ?BackupVaultName,
    ?'by_created_after' => ?timestamp,
    ?'by_created_before' => ?timestamp,
    ?'by_resource_arn' => ?ARN,
    ?'by_resource_type' => ?ResourceType,
    ?'by_state' => ?BackupJobState,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->by_backup_vault_name = $s['by_backup_vault_name'] ?? '';
    $this->by_created_after = $s['by_created_after'] ?? 0;
    $this->by_created_before = $s['by_created_before'] ?? 0;
    $this->by_resource_arn = $s['by_resource_arn'] ?? '';
    $this->by_resource_type = $s['by_resource_type'] ?? '';
    $this->by_state = $s['by_state'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupJobsOutput {
  public ?BackupJobsList $backup_jobs;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_jobs' => ?BackupJobsList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_jobs = $s['backup_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupPlanTemplatesInput {
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupPlanTemplatesOutput {
  public ?BackupPlanTemplatesList $backup_plan_templates_list;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_plan_templates_list' => ?BackupPlanTemplatesList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_plan_templates_list = $s['backup_plan_templates_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupPlanVersionsInput {
  public ?string $backup_plan_id;
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupPlanVersionsOutput {
  public ?BackupPlanVersionsList $backup_plan_versions_list;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_plan_versions_list' => ?BackupPlanVersionsList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_plan_versions_list = $s['backup_plan_versions_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupPlansInput {
  public bool $include_deleted;
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'include_deleted' => bool,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->include_deleted = $s['include_deleted'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupPlansOutput {
  public ?BackupPlansList $backup_plans_list;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_plans_list' => ?BackupPlansList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_plans_list = $s['backup_plans_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupSelectionsInput {
  public ?string $backup_plan_id;
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_plan_id' => ?string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupSelectionsOutput {
  public ?BackupSelectionsList $backup_selections_list;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_selections_list' => ?BackupSelectionsList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_selections_list = $s['backup_selections_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupVaultsInput {
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBackupVaultsOutput {
  public ?BackupVaultList $backup_vault_list;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_vault_list' => ?BackupVaultList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_vault_list = $s['backup_vault_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCopyJobsInput {
  public ?timestamp $by_created_after;
  public ?timestamp $by_created_before;
  public ?string $by_destination_vault_arn;
  public ?ARN $by_resource_arn;
  public ?ResourceType $by_resource_type;
  public ?CopyJobState $by_state;
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'by_created_after' => ?timestamp,
    ?'by_created_before' => ?timestamp,
    ?'by_destination_vault_arn' => ?string,
    ?'by_resource_arn' => ?ARN,
    ?'by_resource_type' => ?ResourceType,
    ?'by_state' => ?CopyJobState,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->by_created_after = $s['by_created_after'] ?? 0;
    $this->by_created_before = $s['by_created_before'] ?? 0;
    $this->by_destination_vault_arn = $s['by_destination_vault_arn'] ?? '';
    $this->by_resource_arn = $s['by_resource_arn'] ?? '';
    $this->by_resource_type = $s['by_resource_type'] ?? '';
    $this->by_state = $s['by_state'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListCopyJobsOutput {
  public ?CopyJobsList $copy_jobs;
  public ?string $next_token;

  public function __construct(shape(
    ?'copy_jobs' => ?CopyJobsList,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->copy_jobs = $s['copy_jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListOfTags = vec<Condition>;

class ListProtectedResourcesInput {
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListProtectedResourcesOutput {
  public ?string $next_token;
  public ?ProtectedResourcesList $results;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'results' => ?ProtectedResourcesList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->results = $s['results'] ?? vec[];
  }
}

class ListRecoveryPointsByBackupVaultInput {
  public ?BackupVaultName $backup_vault_name;
  public ?string $by_backup_plan_id;
  public ?timestamp $by_created_after;
  public ?timestamp $by_created_before;
  public ?ARN $by_resource_arn;
  public ?ResourceType $by_resource_type;
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'by_backup_plan_id' => ?string,
    ?'by_created_after' => ?timestamp,
    ?'by_created_before' => ?timestamp,
    ?'by_resource_arn' => ?ARN,
    ?'by_resource_type' => ?ResourceType,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->by_backup_plan_id = $s['by_backup_plan_id'] ?? '';
    $this->by_created_after = $s['by_created_after'] ?? 0;
    $this->by_created_before = $s['by_created_before'] ?? 0;
    $this->by_resource_arn = $s['by_resource_arn'] ?? '';
    $this->by_resource_type = $s['by_resource_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRecoveryPointsByBackupVaultOutput {
  public ?string $next_token;
  public ?RecoveryPointByBackupVaultList $recovery_points;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'recovery_points' => ?RecoveryPointByBackupVaultList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->recovery_points = $s['recovery_points'] ?? vec[];
  }
}

class ListRecoveryPointsByResourceInput {
  public ?MaxResults $max_results;
  public ?string $next_token;
  public ?ARN $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
    ?'resource_arn' => ?ARN,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListRecoveryPointsByResourceOutput {
  public ?string $next_token;
  public ?RecoveryPointByResourceList $recovery_points;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'recovery_points' => ?RecoveryPointByResourceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->recovery_points = $s['recovery_points'] ?? vec[];
  }
}

class ListRestoreJobsInput {
  public ?MaxResults $max_results;
  public ?string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRestoreJobsOutput {
  public ?string $next_token;
  public ?RestoreJobsList $restore_jobs;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'restore_jobs' => ?RestoreJobsList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->restore_jobs = $s['restore_jobs'] ?? vec[];
  }
}

class ListTagsInput {
  public ?MaxResults $max_results;
  public ?string $next_token;
  public ?ARN $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?string,
    ?'resource_arn' => ?ARN,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsOutput {
  public ?string $next_token;
  public ?Tags $tags;

  public function __construct(shape(
    ?'next_token' => ?string,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type Long = int;

type MaxResults = int;

type Metadata = dict<MetadataKey, MetadataValue>;

type MetadataKey = string;

type MetadataValue = string;

class MissingParameterValueException {
  public ?string $code;
  public ?string $context;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'context' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ProtectedResource {
  public ?timestamp $last_backup_time;
  public ?ARN $resource_arn;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'last_backup_time' => ?timestamp,
    ?'resource_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->last_backup_time = $s['last_backup_time'] ?? 0;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ProtectedResourcesList = vec<ProtectedResource>;

class PutBackupVaultAccessPolicyInput {
  public ?BackupVaultName $backup_vault_name;
  public ?IAMPolicy $policy;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'policy' => ?IAMPolicy,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->policy = $s['policy'] ?? '';
  }
}

class PutBackupVaultNotificationsInput {
  public ?BackupVaultEvents $backup_vault_events;
  public ?BackupVaultName $backup_vault_name;
  public ?ARN $sns_topic_arn;

  public function __construct(shape(
    ?'backup_vault_events' => ?BackupVaultEvents,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'sns_topic_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_events = $s['backup_vault_events'] ?? vec[];
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

class RecoveryPointByBackupVault {
  public ?Long $backup_size_in_bytes;
  public ?ARN $backup_vault_arn;
  public ?BackupVaultName $backup_vault_name;
  public ?CalculatedLifecycle $calculated_lifecycle;
  public ?timestamp $completion_date;
  public ?RecoveryPointCreator $created_by;
  public ?timestamp $creation_date;
  public ?ARN $encryption_key_arn;
  public ?IAMRoleArn $iam_role_arn;
  public ?boolean $is_encrypted;
  public ?timestamp $last_restore_time;
  public ?Lifecycle $lifecycle;
  public ?ARN $recovery_point_arn;
  public ?ARN $resource_arn;
  public ?ResourceType $resource_type;
  public ?RecoveryPointStatus $status;

  public function __construct(shape(
    ?'backup_size_in_bytes' => ?Long,
    ?'backup_vault_arn' => ?ARN,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'calculated_lifecycle' => ?CalculatedLifecycle,
    ?'completion_date' => ?timestamp,
    ?'created_by' => ?RecoveryPointCreator,
    ?'creation_date' => ?timestamp,
    ?'encryption_key_arn' => ?ARN,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'is_encrypted' => ?boolean,
    ?'last_restore_time' => ?timestamp,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_arn' => ?ARN,
    ?'resource_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
    ?'status' => ?RecoveryPointStatus,
  ) $s = shape()) {
    $this->backup_size_in_bytes = $s['backup_size_in_bytes'] ?? 0;
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->calculated_lifecycle = $s['calculated_lifecycle'] ?? null;
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->created_by = $s['created_by'] ?? null;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->encryption_key_arn = $s['encryption_key_arn'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->is_encrypted = $s['is_encrypted'] ?? false;
    $this->last_restore_time = $s['last_restore_time'] ?? 0;
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type RecoveryPointByBackupVaultList = vec<RecoveryPointByBackupVault>;

class RecoveryPointByResource {
  public ?Long $backup_size_bytes;
  public ?BackupVaultName $backup_vault_name;
  public ?timestamp $creation_date;
  public ?ARN $encryption_key_arn;
  public ?ARN $recovery_point_arn;
  public ?RecoveryPointStatus $status;

  public function __construct(shape(
    ?'backup_size_bytes' => ?Long,
    ?'backup_vault_name' => ?BackupVaultName,
    ?'creation_date' => ?timestamp,
    ?'encryption_key_arn' => ?ARN,
    ?'recovery_point_arn' => ?ARN,
    ?'status' => ?RecoveryPointStatus,
  ) $s = shape()) {
    $this->backup_size_bytes = $s['backup_size_bytes'] ?? 0;
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->encryption_key_arn = $s['encryption_key_arn'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type RecoveryPointByResourceList = vec<RecoveryPointByResource>;

class RecoveryPointCreator {
  public ?ARN $backup_plan_arn;
  public ?string $backup_plan_id;
  public ?string $backup_plan_version;
  public ?string $backup_rule_id;

  public function __construct(shape(
    ?'backup_plan_arn' => ?ARN,
    ?'backup_plan_id' => ?string,
    ?'backup_plan_version' => ?string,
    ?'backup_rule_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_arn = $s['backup_plan_arn'] ?? '';
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->backup_plan_version = $s['backup_plan_version'] ?? '';
    $this->backup_rule_id = $s['backup_rule_id'] ?? '';
  }
}

type RecoveryPointStatus = string;

type ResourceArns = vec<ARN>;

class ResourceNotFoundException {
  public ?string $code;
  public ?string $context;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'context' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ResourceType = string;

type ResourceTypes = vec<ResourceType>;

type RestoreJobId = string;

type RestoreJobStatus = string;

type RestoreJobsList = vec<RestoreJobsListMember>;

class RestoreJobsListMember {
  public ?Long $backup_size_in_bytes;
  public ?timestamp $completion_date;
  public ?ARN $created_resource_arn;
  public ?timestamp $creation_date;
  public ?Long $expected_completion_time_minutes;
  public ?IAMRoleArn $iam_role_arn;
  public ?string $percent_done;
  public ?ARN $recovery_point_arn;
  public ?string $restore_job_id;
  public ?RestoreJobStatus $status;
  public ?string $status_message;

  public function __construct(shape(
    ?'backup_size_in_bytes' => ?Long,
    ?'completion_date' => ?timestamp,
    ?'created_resource_arn' => ?ARN,
    ?'creation_date' => ?timestamp,
    ?'expected_completion_time_minutes' => ?Long,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'percent_done' => ?string,
    ?'recovery_point_arn' => ?ARN,
    ?'restore_job_id' => ?string,
    ?'status' => ?RestoreJobStatus,
    ?'status_message' => ?string,
  ) $s = shape()) {
    $this->backup_size_in_bytes = $s['backup_size_in_bytes'] ?? 0;
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->created_resource_arn = $s['created_resource_arn'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->expected_completion_time_minutes = $s['expected_completion_time_minutes'] ?? 0;
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->percent_done = $s['percent_done'] ?? '';
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->restore_job_id = $s['restore_job_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

class ServiceUnavailableException {
  public ?string $code;
  public ?string $context;
  public ?string $message;
  public ?string $type;

  public function __construct(shape(
    ?'code' => ?string,
    ?'context' => ?string,
    ?'message' => ?string,
    ?'type' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->context = $s['context'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class StartBackupJobInput {
  public ?BackupVaultName $backup_vault_name;
  public ?WindowMinutes $complete_window_minutes;
  public ?IAMRoleArn $iam_role_arn;
  public ?string $idempotency_token;
  public ?Lifecycle $lifecycle;
  public ?Tags $recovery_point_tags;
  public ?ARN $resource_arn;
  public ?WindowMinutes $start_window_minutes;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'complete_window_minutes' => ?WindowMinutes,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'idempotency_token' => ?string,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_tags' => ?Tags,
    ?'resource_arn' => ?ARN,
    ?'start_window_minutes' => ?WindowMinutes,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->complete_window_minutes = $s['complete_window_minutes'] ?? 0;
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_tags = $s['recovery_point_tags'] ?? dict[];
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->start_window_minutes = $s['start_window_minutes'] ?? 0;
  }
}

class StartBackupJobOutput {
  public ?string $backup_job_id;
  public ?timestamp $creation_date;
  public ?ARN $recovery_point_arn;

  public function __construct(shape(
    ?'backup_job_id' => ?string,
    ?'creation_date' => ?timestamp,
    ?'recovery_point_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_job_id = $s['backup_job_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
  }
}

class StartCopyJobInput {
  public ?ARN $destination_backup_vault_arn;
  public ?IAMRoleArn $iam_role_arn;
  public ?string $idempotency_token;
  public ?Lifecycle $lifecycle;
  public ?ARN $recovery_point_arn;
  public ?BackupVaultName $source_backup_vault_name;

  public function __construct(shape(
    ?'destination_backup_vault_arn' => ?ARN,
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'idempotency_token' => ?string,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_arn' => ?ARN,
    ?'source_backup_vault_name' => ?BackupVaultName,
  ) $s = shape()) {
    $this->destination_backup_vault_arn = $s['destination_backup_vault_arn'] ?? '';
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->source_backup_vault_name = $s['source_backup_vault_name'] ?? '';
  }
}

class StartCopyJobOutput {
  public ?string $copy_job_id;
  public ?timestamp $creation_date;

  public function __construct(shape(
    ?'copy_job_id' => ?string,
    ?'creation_date' => ?timestamp,
  ) $s = shape()) {
    $this->copy_job_id = $s['copy_job_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
  }
}

class StartRestoreJobInput {
  public ?IAMRoleArn $iam_role_arn;
  public ?string $idempotency_token;
  public ?Metadata $metadata;
  public ?ARN $recovery_point_arn;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'iam_role_arn' => ?IAMRoleArn,
    ?'idempotency_token' => ?string,
    ?'metadata' => ?Metadata,
    ?'recovery_point_arn' => ?ARN,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->iam_role_arn = $s['iam_role_arn'] ?? '';
    $this->idempotency_token = $s['idempotency_token'] ?? '';
    $this->metadata = $s['metadata'] ?? dict[];
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class StartRestoreJobOutput {
  public ?RestoreJobId $restore_job_id;

  public function __construct(shape(
    ?'restore_job_id' => ?RestoreJobId,
  ) $s = shape()) {
    $this->restore_job_id = $s['restore_job_id'] ?? '';
  }
}

class StopBackupJobInput {
  public ?string $backup_job_id;

  public function __construct(shape(
    ?'backup_job_id' => ?string,
  ) $s = shape()) {
    $this->backup_job_id = $s['backup_job_id'] ?? '';
  }
}

type StorageClass = string;

type TagKey = string;

type TagKeyList = vec<string>;

class TagResourceInput {
  public ?ARN $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ARN,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

class UntagResourceInput {
  public ?ARN $resource_arn;
  public ?TagKeyList $tag_key_list;

  public function __construct(shape(
    ?'resource_arn' => ?ARN,
    ?'tag_key_list' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_key_list = $s['tag_key_list'] ?? vec[];
  }
}

class UpdateBackupPlanInput {
  public ?BackupPlanInput $backup_plan;
  public ?string $backup_plan_id;

  public function __construct(shape(
    ?'backup_plan' => ?BackupPlanInput,
    ?'backup_plan_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan = $s['backup_plan'] ?? null;
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
  }
}

class UpdateBackupPlanOutput {
  public ?ARN $backup_plan_arn;
  public ?string $backup_plan_id;
  public ?timestamp $creation_date;
  public ?string $version_id;

  public function __construct(shape(
    ?'backup_plan_arn' => ?ARN,
    ?'backup_plan_id' => ?string,
    ?'creation_date' => ?timestamp,
    ?'version_id' => ?string,
  ) $s = shape()) {
    $this->backup_plan_arn = $s['backup_plan_arn'] ?? '';
    $this->backup_plan_id = $s['backup_plan_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->version_id = $s['version_id'] ?? '';
  }
}

class UpdateRecoveryPointLifecycleInput {
  public ?BackupVaultName $backup_vault_name;
  public ?Lifecycle $lifecycle;
  public ?ARN $recovery_point_arn;

  public function __construct(shape(
    ?'backup_vault_name' => ?BackupVaultName,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_name = $s['backup_vault_name'] ?? '';
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
  }
}

class UpdateRecoveryPointLifecycleOutput {
  public ?ARN $backup_vault_arn;
  public ?CalculatedLifecycle $calculated_lifecycle;
  public ?Lifecycle $lifecycle;
  public ?ARN $recovery_point_arn;

  public function __construct(shape(
    ?'backup_vault_arn' => ?ARN,
    ?'calculated_lifecycle' => ?CalculatedLifecycle,
    ?'lifecycle' => ?Lifecycle,
    ?'recovery_point_arn' => ?ARN,
  ) $s = shape()) {
    $this->backup_vault_arn = $s['backup_vault_arn'] ?? '';
    $this->calculated_lifecycle = $s['calculated_lifecycle'] ?? null;
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->recovery_point_arn = $s['recovery_point_arn'] ?? '';
  }
}

type WindowMinutes = int;

type boolean = bool;

type long = int;

type string = string;

type timestamp = int;

