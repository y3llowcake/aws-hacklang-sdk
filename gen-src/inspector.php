<?hh // strict
namespace slack\aws\inspector;

interface Inspector {
  public function AddAttributesToFindings(AddAttributesToFindingsRequest): Awaitable<Errors\Result<AddAttributesToFindingsResponse>>;
  public function CreateAssessmentTarget(CreateAssessmentTargetRequest): Awaitable<Errors\Result<CreateAssessmentTargetResponse>>;
  public function CreateAssessmentTemplate(CreateAssessmentTemplateRequest): Awaitable<Errors\Result<CreateAssessmentTemplateResponse>>;
  public function CreateExclusionsPreview(CreateExclusionsPreviewRequest): Awaitable<Errors\Result<CreateExclusionsPreviewResponse>>;
  public function CreateResourceGroup(CreateResourceGroupRequest): Awaitable<Errors\Result<CreateResourceGroupResponse>>;
  public function DeleteAssessmentRun(DeleteAssessmentRunRequest): Awaitable<Errors\Error>;
  public function DeleteAssessmentTarget(DeleteAssessmentTargetRequest): Awaitable<Errors\Error>;
  public function DeleteAssessmentTemplate(DeleteAssessmentTemplateRequest): Awaitable<Errors\Error>;
  public function DescribeAssessmentRuns(DescribeAssessmentRunsRequest): Awaitable<Errors\Result<DescribeAssessmentRunsResponse>>;
  public function DescribeAssessmentTargets(DescribeAssessmentTargetsRequest): Awaitable<Errors\Result<DescribeAssessmentTargetsResponse>>;
  public function DescribeAssessmentTemplates(DescribeAssessmentTemplatesRequest): Awaitable<Errors\Result<DescribeAssessmentTemplatesResponse>>;
  public function DescribeCrossAccountAccessRole(): Awaitable<Errors\Result<DescribeCrossAccountAccessRoleResponse>>;
  public function DescribeExclusions(DescribeExclusionsRequest): Awaitable<Errors\Result<DescribeExclusionsResponse>>;
  public function DescribeFindings(DescribeFindingsRequest): Awaitable<Errors\Result<DescribeFindingsResponse>>;
  public function DescribeResourceGroups(DescribeResourceGroupsRequest): Awaitable<Errors\Result<DescribeResourceGroupsResponse>>;
  public function DescribeRulesPackages(DescribeRulesPackagesRequest): Awaitable<Errors\Result<DescribeRulesPackagesResponse>>;
  public function GetAssessmentReport(GetAssessmentReportRequest): Awaitable<Errors\Result<GetAssessmentReportResponse>>;
  public function GetExclusionsPreview(GetExclusionsPreviewRequest): Awaitable<Errors\Result<GetExclusionsPreviewResponse>>;
  public function GetTelemetryMetadata(GetTelemetryMetadataRequest): Awaitable<Errors\Result<GetTelemetryMetadataResponse>>;
  public function ListAssessmentRunAgents(ListAssessmentRunAgentsRequest): Awaitable<Errors\Result<ListAssessmentRunAgentsResponse>>;
  public function ListAssessmentRuns(ListAssessmentRunsRequest): Awaitable<Errors\Result<ListAssessmentRunsResponse>>;
  public function ListAssessmentTargets(ListAssessmentTargetsRequest): Awaitable<Errors\Result<ListAssessmentTargetsResponse>>;
  public function ListAssessmentTemplates(ListAssessmentTemplatesRequest): Awaitable<Errors\Result<ListAssessmentTemplatesResponse>>;
  public function ListEventSubscriptions(ListEventSubscriptionsRequest): Awaitable<Errors\Result<ListEventSubscriptionsResponse>>;
  public function ListExclusions(ListExclusionsRequest): Awaitable<Errors\Result<ListExclusionsResponse>>;
  public function ListFindings(ListFindingsRequest): Awaitable<Errors\Result<ListFindingsResponse>>;
  public function ListRulesPackages(ListRulesPackagesRequest): Awaitable<Errors\Result<ListRulesPackagesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PreviewAgents(PreviewAgentsRequest): Awaitable<Errors\Result<PreviewAgentsResponse>>;
  public function RegisterCrossAccountAccessRole(RegisterCrossAccountAccessRoleRequest): Awaitable<Errors\Error>;
  public function RemoveAttributesFromFindings(RemoveAttributesFromFindingsRequest): Awaitable<Errors\Result<RemoveAttributesFromFindingsResponse>>;
  public function SetTagsForResource(SetTagsForResourceRequest): Awaitable<Errors\Error>;
  public function StartAssessmentRun(StartAssessmentRunRequest): Awaitable<Errors\Result<StartAssessmentRunResponse>>;
  public function StopAssessmentRun(StopAssessmentRunRequest): Awaitable<Errors\Error>;
  public function SubscribeToEvent(SubscribeToEventRequest): Awaitable<Errors\Error>;
  public function UnsubscribeFromEvent(UnsubscribeFromEventRequest): Awaitable<Errors\Error>;
  public function UpdateAssessmentTarget(UpdateAssessmentTargetRequest): Awaitable<Errors\Error>;
}

type AccessDeniedErrorCode = string;

class AccessDeniedException {
  public Bool $can_retry;
  public AccessDeniedErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'error_code' => AccessDeniedErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class AddAttributesToFindingsRequest {
  public UserAttributeList $attributes;
  public AddRemoveAttributesFindingArnList $finding_arns;

  public function __construct(shape(
  ?'attributes' => UserAttributeList,
  ?'finding_arns' => AddRemoveAttributesFindingArnList,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->finding_arns = $finding_arns ?? [];
  }
}

class AddAttributesToFindingsResponse {
  public FailedItems $failed_items;

  public function __construct(shape(
  ?'failed_items' => FailedItems,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? [];
  }
}

type AddRemoveAttributesFindingArnList = vec<Arn>;

class AgentAlreadyRunningAssessment {
  public AgentId $agent_id;
  public Arn $assessment_run_arn;

  public function __construct(shape(
  ?'agent_id' => AgentId,
  ?'assessment_run_arn' => Arn,
  ) $s = shape()) {
    $this->agent_id = $agent_id ?? "";
    $this->assessment_run_arn = $assessment_run_arn ?? "";
  }
}

type AgentAlreadyRunningAssessmentList = vec<AgentAlreadyRunningAssessment>;

class AgentFilter {
  public AgentHealthCodeList $agent_health_codes;
  public AgentHealthList $agent_healths;

  public function __construct(shape(
  ?'agent_health_codes' => AgentHealthCodeList,
  ?'agent_healths' => AgentHealthList,
  ) $s = shape()) {
    $this->agent_health_codes = $agent_health_codes ?? [];
    $this->agent_healths = $agent_healths ?? [];
  }
}

type AgentHealth = string;

type AgentHealthCode = string;

type AgentHealthCodeList = vec<AgentHealthCode>;

type AgentHealthList = vec<AgentHealth>;

type AgentId = string;

type AgentIdList = vec<AgentId>;

class AgentPreview {
  public AgentHealth $agent_health;
  public AgentId $agent_id;
  public AgentVersion $agent_version;
  public AutoScalingGroup $auto_scaling_group;
  public Hostname $hostname;
  public Ipv4Address $ipv_4_address;
  public KernelVersion $kernel_version;
  public OperatingSystem $operating_system;

  public function __construct(shape(
  ?'agent_health' => AgentHealth,
  ?'agent_id' => AgentId,
  ?'agent_version' => AgentVersion,
  ?'auto_scaling_group' => AutoScalingGroup,
  ?'hostname' => Hostname,
  ?'ipv_4_address' => Ipv4Address,
  ?'kernel_version' => KernelVersion,
  ?'operating_system' => OperatingSystem,
  ) $s = shape()) {
    $this->agent_health = $agent_health ?? "";
    $this->agent_id = $agent_id ?? "";
    $this->agent_version = $agent_version ?? "";
    $this->auto_scaling_group = $auto_scaling_group ?? "";
    $this->hostname = $hostname ?? "";
    $this->ipv_4_address = $ipv_4_address ?? "";
    $this->kernel_version = $kernel_version ?? "";
    $this->operating_system = $operating_system ?? "";
  }
}

type AgentPreviewList = vec<AgentPreview>;

type AgentVersion = string;

class AgentsAlreadyRunningAssessmentException {
  public AgentAlreadyRunningAssessmentList $agents;
  public Bool $agents_truncated;
  public Bool $can_retry;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'agents' => AgentAlreadyRunningAssessmentList,
  ?'agents_truncated' => Bool,
  ?'can_retry' => Bool,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->agents = $agents ?? [];
    $this->agents_truncated = $agents_truncated ?? false;
    $this->can_retry = $can_retry ?? false;
    $this->message = $message ?? "";
  }
}

type AmiId = string;

type Arn = string;

type ArnCount = int;

type AssessmentRulesPackageArnList = vec<Arn>;

class AssessmentRun {
  public Arn $arn;
  public Arn $assessment_template_arn;
  public Timestamp $completed_at;
  public Timestamp $created_at;
  public Bool $data_collected;
  public AssessmentRunDuration $duration_in_seconds;
  public AssessmentRunFindingCounts $finding_counts;
  public AssessmentRunName $name;
  public AssessmentRunNotificationList $notifications;
  public AssessmentRulesPackageArnList $rules_package_arns;
  public Timestamp $started_at;
  public AssessmentRunState $state;
  public Timestamp $state_changed_at;
  public AssessmentRunStateChangeList $state_changes;
  public UserAttributeList $user_attributes_for_findings;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'assessment_template_arn' => Arn,
  ?'completed_at' => Timestamp,
  ?'created_at' => Timestamp,
  ?'data_collected' => Bool,
  ?'duration_in_seconds' => AssessmentRunDuration,
  ?'finding_counts' => AssessmentRunFindingCounts,
  ?'name' => AssessmentRunName,
  ?'notifications' => AssessmentRunNotificationList,
  ?'rules_package_arns' => AssessmentRulesPackageArnList,
  ?'started_at' => Timestamp,
  ?'state' => AssessmentRunState,
  ?'state_changed_at' => Timestamp,
  ?'state_changes' => AssessmentRunStateChangeList,
  ?'user_attributes_for_findings' => UserAttributeList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->assessment_template_arn = $assessment_template_arn ?? "";
    $this->completed_at = $completed_at ?? 0;
    $this->created_at = $created_at ?? 0;
    $this->data_collected = $data_collected ?? false;
    $this->duration_in_seconds = $duration_in_seconds ?? 0;
    $this->finding_counts = $finding_counts ?? [];
    $this->name = $name ?? "";
    $this->notifications = $notifications ?? [];
    $this->rules_package_arns = $rules_package_arns ?? [];
    $this->started_at = $started_at ?? 0;
    $this->state = $state ?? "";
    $this->state_changed_at = $state_changed_at ?? 0;
    $this->state_changes = $state_changes ?? [];
    $this->user_attributes_for_findings = $user_attributes_for_findings ?? [];
  }
}

class AssessmentRunAgent {
  public AgentHealth $agent_health;
  public AgentHealthCode $agent_health_code;
  public Message $agent_health_details;
  public AgentId $agent_id;
  public Arn $assessment_run_arn;
  public AutoScalingGroup $auto_scaling_group;
  public TelemetryMetadataList $telemetry_metadata;

  public function __construct(shape(
  ?'agent_health' => AgentHealth,
  ?'agent_health_code' => AgentHealthCode,
  ?'agent_health_details' => Message,
  ?'agent_id' => AgentId,
  ?'assessment_run_arn' => Arn,
  ?'auto_scaling_group' => AutoScalingGroup,
  ?'telemetry_metadata' => TelemetryMetadataList,
  ) $s = shape()) {
    $this->agent_health = $agent_health ?? "";
    $this->agent_health_code = $agent_health_code ?? "";
    $this->agent_health_details = $agent_health_details ?? "";
    $this->agent_id = $agent_id ?? "";
    $this->assessment_run_arn = $assessment_run_arn ?? "";
    $this->auto_scaling_group = $auto_scaling_group ?? "";
    $this->telemetry_metadata = $telemetry_metadata ?? [];
  }
}

type AssessmentRunAgentList = vec<AssessmentRunAgent>;

type AssessmentRunDuration = int;

class AssessmentRunFilter {
  public TimestampRange $completion_time_range;
  public DurationRange $duration_range;
  public NamePattern $name_pattern;
  public FilterRulesPackageArnList $rules_package_arns;
  public TimestampRange $start_time_range;
  public TimestampRange $state_change_time_range;
  public AssessmentRunStateList $states;

  public function __construct(shape(
  ?'completion_time_range' => TimestampRange,
  ?'duration_range' => DurationRange,
  ?'name_pattern' => NamePattern,
  ?'rules_package_arns' => FilterRulesPackageArnList,
  ?'start_time_range' => TimestampRange,
  ?'state_change_time_range' => TimestampRange,
  ?'states' => AssessmentRunStateList,
  ) $s = shape()) {
    $this->completion_time_range = $completion_time_range ?? null;
    $this->duration_range = $duration_range ?? null;
    $this->name_pattern = $name_pattern ?? "";
    $this->rules_package_arns = $rules_package_arns ?? [];
    $this->start_time_range = $start_time_range ?? null;
    $this->state_change_time_range = $state_change_time_range ?? null;
    $this->states = $states ?? [];
  }
}

type AssessmentRunFindingCounts = dict<Severity, FindingCount>;

type AssessmentRunInProgressArnList = vec<Arn>;

class AssessmentRunInProgressException {
  public AssessmentRunInProgressArnList $assessment_run_arns;
  public Bool $assessment_run_arns_truncated;
  public Bool $can_retry;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'assessment_run_arns' => AssessmentRunInProgressArnList,
  ?'assessment_run_arns_truncated' => Bool,
  ?'can_retry' => Bool,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->assessment_run_arns = $assessment_run_arns ?? [];
    $this->assessment_run_arns_truncated = $assessment_run_arns_truncated ?? false;
    $this->can_retry = $can_retry ?? false;
    $this->message = $message ?? "";
  }
}

type AssessmentRunList = vec<AssessmentRun>;

type AssessmentRunName = string;

class AssessmentRunNotification {
  public Timestamp $date;
  public Bool $error;
  public InspectorEvent $event;
  public Message $message;
  public AssessmentRunNotificationSnsStatusCode $sns_publish_status_code;
  public Arn $sns_topic_arn;

  public function __construct(shape(
  ?'date' => Timestamp,
  ?'error' => Bool,
  ?'event' => InspectorEvent,
  ?'message' => Message,
  ?'sns_publish_status_code' => AssessmentRunNotificationSnsStatusCode,
  ?'sns_topic_arn' => Arn,
  ) $s = shape()) {
    $this->date = $date ?? 0;
    $this->error = $error ?? false;
    $this->event = $event ?? "";
    $this->message = $message ?? "";
    $this->sns_publish_status_code = $sns_publish_status_code ?? "";
    $this->sns_topic_arn = $sns_topic_arn ?? "";
  }
}

type AssessmentRunNotificationList = vec<AssessmentRunNotification>;

type AssessmentRunNotificationSnsStatusCode = string;

type AssessmentRunState = string;

class AssessmentRunStateChange {
  public AssessmentRunState $state;
  public Timestamp $state_changed_at;

  public function __construct(shape(
  ?'state' => AssessmentRunState,
  ?'state_changed_at' => Timestamp,
  ) $s = shape()) {
    $this->state = $state ?? "";
    $this->state_changed_at = $state_changed_at ?? 0;
  }
}

type AssessmentRunStateChangeList = vec<AssessmentRunStateChange>;

type AssessmentRunStateList = vec<AssessmentRunState>;

class AssessmentTarget {
  public Arn $arn;
  public Timestamp $created_at;
  public AssessmentTargetName $name;
  public Arn $resource_group_arn;
  public Timestamp $updated_at;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_at' => Timestamp,
  ?'name' => AssessmentTargetName,
  ?'resource_group_arn' => Arn,
  ?'updated_at' => Timestamp,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_at = $created_at ?? 0;
    $this->name = $name ?? "";
    $this->resource_group_arn = $resource_group_arn ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

class AssessmentTargetFilter {
  public NamePattern $assessment_target_name_pattern;

  public function __construct(shape(
  ?'assessment_target_name_pattern' => NamePattern,
  ) $s = shape()) {
    $this->assessment_target_name_pattern = $assessment_target_name_pattern ?? "";
  }
}

type AssessmentTargetList = vec<AssessmentTarget>;

type AssessmentTargetName = string;

class AssessmentTemplate {
  public Arn $arn;
  public ArnCount $assessment_run_count;
  public Arn $assessment_target_arn;
  public Timestamp $created_at;
  public AssessmentRunDuration $duration_in_seconds;
  public Arn $last_assessment_run_arn;
  public AssessmentTemplateName $name;
  public AssessmentTemplateRulesPackageArnList $rules_package_arns;
  public UserAttributeList $user_attributes_for_findings;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'assessment_run_count' => ArnCount,
  ?'assessment_target_arn' => Arn,
  ?'created_at' => Timestamp,
  ?'duration_in_seconds' => AssessmentRunDuration,
  ?'last_assessment_run_arn' => Arn,
  ?'name' => AssessmentTemplateName,
  ?'rules_package_arns' => AssessmentTemplateRulesPackageArnList,
  ?'user_attributes_for_findings' => UserAttributeList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->assessment_run_count = $assessment_run_count ?? 0;
    $this->assessment_target_arn = $assessment_target_arn ?? "";
    $this->created_at = $created_at ?? 0;
    $this->duration_in_seconds = $duration_in_seconds ?? 0;
    $this->last_assessment_run_arn = $last_assessment_run_arn ?? "";
    $this->name = $name ?? "";
    $this->rules_package_arns = $rules_package_arns ?? [];
    $this->user_attributes_for_findings = $user_attributes_for_findings ?? [];
  }
}

class AssessmentTemplateFilter {
  public DurationRange $duration_range;
  public NamePattern $name_pattern;
  public FilterRulesPackageArnList $rules_package_arns;

  public function __construct(shape(
  ?'duration_range' => DurationRange,
  ?'name_pattern' => NamePattern,
  ?'rules_package_arns' => FilterRulesPackageArnList,
  ) $s = shape()) {
    $this->duration_range = $duration_range ?? null;
    $this->name_pattern = $name_pattern ?? "";
    $this->rules_package_arns = $rules_package_arns ?? [];
  }
}

type AssessmentTemplateList = vec<AssessmentTemplate>;

type AssessmentTemplateName = string;

type AssessmentTemplateRulesPackageArnList = vec<Arn>;

class AssetAttributes {
  public AgentId $agent_id;
  public AmiId $ami_id;
  public AutoScalingGroup $auto_scaling_group;
  public Hostname $hostname;
  public Ipv4AddressList $ipv_4_addresses;
  public NetworkInterfaces $network_interfaces;
  public NumericVersion $schema_version;
  public Tags $tags;

  public function __construct(shape(
  ?'agent_id' => AgentId,
  ?'ami_id' => AmiId,
  ?'auto_scaling_group' => AutoScalingGroup,
  ?'hostname' => Hostname,
  ?'ipv_4_addresses' => Ipv4AddressList,
  ?'network_interfaces' => NetworkInterfaces,
  ?'schema_version' => NumericVersion,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->agent_id = $agent_id ?? "";
    $this->ami_id = $ami_id ?? "";
    $this->auto_scaling_group = $auto_scaling_group ?? "";
    $this->hostname = $hostname ?? "";
    $this->ipv_4_addresses = $ipv_4_addresses ?? [];
    $this->network_interfaces = $network_interfaces ?? [];
    $this->schema_version = $schema_version ?? 0;
    $this->tags = $tags ?? [];
  }
}

type AssetType = string;

class Attribute {
  public AttributeKey $key;
  public AttributeValue $value;

  public function __construct(shape(
  ?'key' => AttributeKey,
  ?'value' => AttributeValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type AttributeKey = string;

type AttributeList = vec<Attribute>;

type AttributeValue = string;

type AutoScalingGroup = string;

type AutoScalingGroupList = vec<AutoScalingGroup>;

type BatchDescribeArnList = vec<Arn>;

type BatchDescribeExclusionsArnList = vec<Arn>;

type Bool = bool;

class CreateAssessmentTargetRequest {
  public AssessmentTargetName $assessment_target_name;
  public Arn $resource_group_arn;

  public function __construct(shape(
  ?'assessment_target_name' => AssessmentTargetName,
  ?'resource_group_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_target_name = $assessment_target_name ?? "";
    $this->resource_group_arn = $resource_group_arn ?? "";
  }
}

class CreateAssessmentTargetResponse {
  public Arn $assessment_target_arn;

  public function __construct(shape(
  ?'assessment_target_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_target_arn = $assessment_target_arn ?? "";
  }
}

class CreateAssessmentTemplateRequest {
  public Arn $assessment_target_arn;
  public AssessmentTemplateName $assessment_template_name;
  public AssessmentRunDuration $duration_in_seconds;
  public AssessmentTemplateRulesPackageArnList $rules_package_arns;
  public UserAttributeList $user_attributes_for_findings;

  public function __construct(shape(
  ?'assessment_target_arn' => Arn,
  ?'assessment_template_name' => AssessmentTemplateName,
  ?'duration_in_seconds' => AssessmentRunDuration,
  ?'rules_package_arns' => AssessmentTemplateRulesPackageArnList,
  ?'user_attributes_for_findings' => UserAttributeList,
  ) $s = shape()) {
    $this->assessment_target_arn = $assessment_target_arn ?? "";
    $this->assessment_template_name = $assessment_template_name ?? "";
    $this->duration_in_seconds = $duration_in_seconds ?? 0;
    $this->rules_package_arns = $rules_package_arns ?? [];
    $this->user_attributes_for_findings = $user_attributes_for_findings ?? [];
  }
}

class CreateAssessmentTemplateResponse {
  public Arn $assessment_template_arn;

  public function __construct(shape(
  ?'assessment_template_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_template_arn = $assessment_template_arn ?? "";
  }
}

class CreateExclusionsPreviewRequest {
  public Arn $assessment_template_arn;

  public function __construct(shape(
  ?'assessment_template_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_template_arn = $assessment_template_arn ?? "";
  }
}

class CreateExclusionsPreviewResponse {
  public UUID $preview_token;

  public function __construct(shape(
  ?'preview_token' => UUID,
  ) $s = shape()) {
    $this->preview_token = $preview_token ?? "";
  }
}

class CreateResourceGroupRequest {
  public ResourceGroupTags $resource_group_tags;

  public function __construct(shape(
  ?'resource_group_tags' => ResourceGroupTags,
  ) $s = shape()) {
    $this->resource_group_tags = $resource_group_tags ?? [];
  }
}

class CreateResourceGroupResponse {
  public Arn $resource_group_arn;

  public function __construct(shape(
  ?'resource_group_arn' => Arn,
  ) $s = shape()) {
    $this->resource_group_arn = $resource_group_arn ?? "";
  }
}

class DeleteAssessmentRunRequest {
  public Arn $assessment_run_arn;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
  }
}

class DeleteAssessmentTargetRequest {
  public Arn $assessment_target_arn;

  public function __construct(shape(
  ?'assessment_target_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_target_arn = $assessment_target_arn ?? "";
  }
}

class DeleteAssessmentTemplateRequest {
  public Arn $assessment_template_arn;

  public function __construct(shape(
  ?'assessment_template_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_template_arn = $assessment_template_arn ?? "";
  }
}

class DescribeAssessmentRunsRequest {
  public BatchDescribeArnList $assessment_run_arns;

  public function __construct(shape(
  ?'assessment_run_arns' => BatchDescribeArnList,
  ) $s = shape()) {
    $this->assessment_run_arns = $assessment_run_arns ?? [];
  }
}

class DescribeAssessmentRunsResponse {
  public AssessmentRunList $assessment_runs;
  public FailedItems $failed_items;

  public function __construct(shape(
  ?'assessment_runs' => AssessmentRunList,
  ?'failed_items' => FailedItems,
  ) $s = shape()) {
    $this->assessment_runs = $assessment_runs ?? [];
    $this->failed_items = $failed_items ?? [];
  }
}

class DescribeAssessmentTargetsRequest {
  public BatchDescribeArnList $assessment_target_arns;

  public function __construct(shape(
  ?'assessment_target_arns' => BatchDescribeArnList,
  ) $s = shape()) {
    $this->assessment_target_arns = $assessment_target_arns ?? [];
  }
}

class DescribeAssessmentTargetsResponse {
  public AssessmentTargetList $assessment_targets;
  public FailedItems $failed_items;

  public function __construct(shape(
  ?'assessment_targets' => AssessmentTargetList,
  ?'failed_items' => FailedItems,
  ) $s = shape()) {
    $this->assessment_targets = $assessment_targets ?? [];
    $this->failed_items = $failed_items ?? [];
  }
}

class DescribeAssessmentTemplatesRequest {
  public BatchDescribeArnList $assessment_template_arns;

  public function __construct(shape(
  ?'assessment_template_arns' => BatchDescribeArnList,
  ) $s = shape()) {
    $this->assessment_template_arns = $assessment_template_arns ?? [];
  }
}

class DescribeAssessmentTemplatesResponse {
  public AssessmentTemplateList $assessment_templates;
  public FailedItems $failed_items;

  public function __construct(shape(
  ?'assessment_templates' => AssessmentTemplateList,
  ?'failed_items' => FailedItems,
  ) $s = shape()) {
    $this->assessment_templates = $assessment_templates ?? [];
    $this->failed_items = $failed_items ?? [];
  }
}

class DescribeCrossAccountAccessRoleResponse {
  public Timestamp $registered_at;
  public Arn $role_arn;
  public Bool $valid;

  public function __construct(shape(
  ?'registered_at' => Timestamp,
  ?'role_arn' => Arn,
  ?'valid' => Bool,
  ) $s = shape()) {
    $this->registered_at = $registered_at ?? 0;
    $this->role_arn = $role_arn ?? "";
    $this->valid = $valid ?? false;
  }
}

class DescribeExclusionsRequest {
  public BatchDescribeExclusionsArnList $exclusion_arns;
  public Locale $locale;

  public function __construct(shape(
  ?'exclusion_arns' => BatchDescribeExclusionsArnList,
  ?'locale' => Locale,
  ) $s = shape()) {
    $this->exclusion_arns = $exclusion_arns ?? [];
    $this->locale = $locale ?? "";
  }
}

class DescribeExclusionsResponse {
  public ExclusionMap $exclusions;
  public FailedItems $failed_items;

  public function __construct(shape(
  ?'exclusions' => ExclusionMap,
  ?'failed_items' => FailedItems,
  ) $s = shape()) {
    $this->exclusions = $exclusions ?? [];
    $this->failed_items = $failed_items ?? [];
  }
}

class DescribeFindingsRequest {
  public BatchDescribeArnList $finding_arns;
  public Locale $locale;

  public function __construct(shape(
  ?'finding_arns' => BatchDescribeArnList,
  ?'locale' => Locale,
  ) $s = shape()) {
    $this->finding_arns = $finding_arns ?? [];
    $this->locale = $locale ?? "";
  }
}

class DescribeFindingsResponse {
  public FailedItems $failed_items;
  public FindingList $findings;

  public function __construct(shape(
  ?'failed_items' => FailedItems,
  ?'findings' => FindingList,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? [];
    $this->findings = $findings ?? [];
  }
}

class DescribeResourceGroupsRequest {
  public BatchDescribeArnList $resource_group_arns;

  public function __construct(shape(
  ?'resource_group_arns' => BatchDescribeArnList,
  ) $s = shape()) {
    $this->resource_group_arns = $resource_group_arns ?? [];
  }
}

class DescribeResourceGroupsResponse {
  public FailedItems $failed_items;
  public ResourceGroupList $resource_groups;

  public function __construct(shape(
  ?'failed_items' => FailedItems,
  ?'resource_groups' => ResourceGroupList,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? [];
    $this->resource_groups = $resource_groups ?? [];
  }
}

class DescribeRulesPackagesRequest {
  public Locale $locale;
  public BatchDescribeArnList $rules_package_arns;

  public function __construct(shape(
  ?'locale' => Locale,
  ?'rules_package_arns' => BatchDescribeArnList,
  ) $s = shape()) {
    $this->locale = $locale ?? "";
    $this->rules_package_arns = $rules_package_arns ?? [];
  }
}

class DescribeRulesPackagesResponse {
  public FailedItems $failed_items;
  public RulesPackageList $rules_packages;

  public function __construct(shape(
  ?'failed_items' => FailedItems,
  ?'rules_packages' => RulesPackageList,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? [];
    $this->rules_packages = $rules_packages ?? [];
  }
}

class DurationRange {
  public AssessmentRunDuration $max_seconds;
  public AssessmentRunDuration $min_seconds;

  public function __construct(shape(
  ?'max_seconds' => AssessmentRunDuration,
  ?'min_seconds' => AssessmentRunDuration,
  ) $s = shape()) {
    $this->max_seconds = $max_seconds ?? 0;
    $this->min_seconds = $min_seconds ?? 0;
  }
}

type ErrorMessage = string;

class EventSubscription {
  public InspectorEvent $event;
  public Timestamp $subscribed_at;

  public function __construct(shape(
  ?'event' => InspectorEvent,
  ?'subscribed_at' => Timestamp,
  ) $s = shape()) {
    $this->event = $event ?? "";
    $this->subscribed_at = $subscribed_at ?? 0;
  }
}

type EventSubscriptionList = vec<EventSubscription>;

class Exclusion {
  public Arn $arn;
  public AttributeList $attributes;
  public Text $description;
  public Text $recommendation;
  public ScopeList $scopes;
  public Text $title;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'attributes' => AttributeList,
  ?'description' => Text,
  ?'recommendation' => Text,
  ?'scopes' => ScopeList,
  ?'title' => Text,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->attributes = $attributes ?? [];
    $this->description = $description ?? "";
    $this->recommendation = $recommendation ?? "";
    $this->scopes = $scopes ?? [];
    $this->title = $title ?? "";
  }
}

type ExclusionMap = dict<Arn, Exclusion>;

class ExclusionPreview {
  public AttributeList $attributes;
  public Text $description;
  public Text $recommendation;
  public ScopeList $scopes;
  public Text $title;

  public function __construct(shape(
  ?'attributes' => AttributeList,
  ?'description' => Text,
  ?'recommendation' => Text,
  ?'scopes' => ScopeList,
  ?'title' => Text,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
    $this->description = $description ?? "";
    $this->recommendation = $recommendation ?? "";
    $this->scopes = $scopes ?? [];
    $this->title = $title ?? "";
  }
}

type ExclusionPreviewList = vec<ExclusionPreview>;

class FailedItemDetails {
  public FailedItemErrorCode $failure_code;
  public Bool $retryable;

  public function __construct(shape(
  ?'failure_code' => FailedItemErrorCode,
  ?'retryable' => Bool,
  ) $s = shape()) {
    $this->failure_code = $failure_code ?? "";
    $this->retryable = $retryable ?? false;
  }
}

type FailedItemErrorCode = string;

type FailedItems = dict<Arn, FailedItemDetails>;

type FilterRulesPackageArnList = vec<Arn>;

class Finding {
  public Arn $arn;
  public AssetAttributes $asset_attributes;
  public AssetType $asset_type;
  public AttributeList $attributes;
  public IocConfidence $confidence;
  public Timestamp $created_at;
  public Text $description;
  public FindingId $id;
  public Bool $indicator_of_compromise;
  public NumericSeverity $numeric_severity;
  public Text $recommendation;
  public NumericVersion $schema_version;
  public ServiceName $service;
  public InspectorServiceAttributes $service_attributes;
  public Severity $severity;
  public Text $title;
  public Timestamp $updated_at;
  public UserAttributeList $user_attributes;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'asset_attributes' => AssetAttributes,
  ?'asset_type' => AssetType,
  ?'attributes' => AttributeList,
  ?'confidence' => IocConfidence,
  ?'created_at' => Timestamp,
  ?'description' => Text,
  ?'id' => FindingId,
  ?'indicator_of_compromise' => Bool,
  ?'numeric_severity' => NumericSeverity,
  ?'recommendation' => Text,
  ?'schema_version' => NumericVersion,
  ?'service' => ServiceName,
  ?'service_attributes' => InspectorServiceAttributes,
  ?'severity' => Severity,
  ?'title' => Text,
  ?'updated_at' => Timestamp,
  ?'user_attributes' => UserAttributeList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->asset_attributes = $asset_attributes ?? null;
    $this->asset_type = $asset_type ?? "";
    $this->attributes = $attributes ?? [];
    $this->confidence = $confidence ?? 0;
    $this->created_at = $created_at ?? 0;
    $this->description = $description ?? "";
    $this->id = $id ?? "";
    $this->indicator_of_compromise = $indicator_of_compromise ?? false;
    $this->numeric_severity = $numeric_severity ?? 0.0;
    $this->recommendation = $recommendation ?? "";
    $this->schema_version = $schema_version ?? 0;
    $this->service = $service ?? "";
    $this->service_attributes = $service_attributes ?? null;
    $this->severity = $severity ?? "";
    $this->title = $title ?? "";
    $this->updated_at = $updated_at ?? 0;
    $this->user_attributes = $user_attributes ?? [];
  }
}

type FindingCount = int;

class FindingFilter {
  public AgentIdList $agent_ids;
  public AttributeList $attributes;
  public AutoScalingGroupList $auto_scaling_groups;
  public TimestampRange $creation_time_range;
  public RuleNameList $rule_names;
  public FilterRulesPackageArnList $rules_package_arns;
  public SeverityList $severities;
  public AttributeList $user_attributes;

  public function __construct(shape(
  ?'agent_ids' => AgentIdList,
  ?'attributes' => AttributeList,
  ?'auto_scaling_groups' => AutoScalingGroupList,
  ?'creation_time_range' => TimestampRange,
  ?'rule_names' => RuleNameList,
  ?'rules_package_arns' => FilterRulesPackageArnList,
  ?'severities' => SeverityList,
  ?'user_attributes' => AttributeList,
  ) $s = shape()) {
    $this->agent_ids = $agent_ids ?? [];
    $this->attributes = $attributes ?? [];
    $this->auto_scaling_groups = $auto_scaling_groups ?? [];
    $this->creation_time_range = $creation_time_range ?? null;
    $this->rule_names = $rule_names ?? [];
    $this->rules_package_arns = $rules_package_arns ?? [];
    $this->severities = $severities ?? [];
    $this->user_attributes = $user_attributes ?? [];
  }
}

type FindingId = string;

type FindingList = vec<Finding>;

class GetAssessmentReportRequest {
  public Arn $assessment_run_arn;
  public ReportFileFormat $report_file_format;
  public ReportType $report_type;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ?'report_file_format' => ReportFileFormat,
  ?'report_type' => ReportType,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
    $this->report_file_format = $report_file_format ?? "";
    $this->report_type = $report_type ?? "";
  }
}

class GetAssessmentReportResponse {
  public ReportStatus $status;
  public Url $url;

  public function __construct(shape(
  ?'status' => ReportStatus,
  ?'url' => Url,
  ) $s = shape()) {
    $this->status = $status ?? "";
    $this->url = $url ?? "";
  }
}

class GetExclusionsPreviewRequest {
  public Arn $assessment_template_arn;
  public Locale $locale;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
  public UUID $preview_token;

  public function __construct(shape(
  ?'assessment_template_arn' => Arn,
  ?'locale' => Locale,
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ?'preview_token' => UUID,
  ) $s = shape()) {
    $this->assessment_template_arn = $assessment_template_arn ?? "";
    $this->locale = $locale ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->preview_token = $preview_token ?? "";
  }
}

class GetExclusionsPreviewResponse {
  public ExclusionPreviewList $exclusion_previews;
  public PaginationToken $next_token;
  public PreviewStatus $preview_status;

  public function __construct(shape(
  ?'exclusion_previews' => ExclusionPreviewList,
  ?'next_token' => PaginationToken,
  ?'preview_status' => PreviewStatus,
  ) $s = shape()) {
    $this->exclusion_previews = $exclusion_previews ?? [];
    $this->next_token = $next_token ?? "";
    $this->preview_status = $preview_status ?? "";
  }
}

class GetTelemetryMetadataRequest {
  public Arn $assessment_run_arn;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
  }
}

class GetTelemetryMetadataResponse {
  public TelemetryMetadataList $telemetry_metadata;

  public function __construct(shape(
  ?'telemetry_metadata' => TelemetryMetadataList,
  ) $s = shape()) {
    $this->telemetry_metadata = $telemetry_metadata ?? [];
  }
}

type Hostname = string;

type InspectorEvent = string;

class InspectorServiceAttributes {
  public Arn $assessment_run_arn;
  public Arn $rules_package_arn;
  public NumericVersion $schema_version;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ?'rules_package_arn' => Arn,
  ?'schema_version' => NumericVersion,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
    $this->rules_package_arn = $rules_package_arn ?? "";
    $this->schema_version = $schema_version ?? 0;
  }
}

class InternalException {
  public Bool $can_retry;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->message = $message ?? "";
  }
}

type InvalidCrossAccountRoleErrorCode = string;

class InvalidCrossAccountRoleException {
  public Bool $can_retry;
  public InvalidCrossAccountRoleErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'error_code' => InvalidCrossAccountRoleErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

type InvalidInputErrorCode = string;

class InvalidInputException {
  public Bool $can_retry;
  public InvalidInputErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'error_code' => InvalidInputErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

type IocConfidence = int;

type Ipv4Address = string;

type Ipv4AddressList = vec<Ipv4Address>;

type Ipv6Addresses = vec<Text>;

type KernelVersion = string;

type LimitExceededErrorCode = string;

class LimitExceededException {
  public Bool $can_retry;
  public LimitExceededErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'error_code' => LimitExceededErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

class ListAssessmentRunAgentsRequest {
  public Arn $assessment_run_arn;
  public AgentFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ?'filter' => AgentFilter,
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssessmentRunAgentsResponse {
  public AssessmentRunAgentList $assessment_run_agents;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_run_agents' => AssessmentRunAgentList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_agents = $assessment_run_agents ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListAssessmentRunsRequest {
  public ListParentArnList $assessment_template_arns;
  public AssessmentRunFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_template_arns' => ListParentArnList,
  ?'filter' => AssessmentRunFilter,
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_template_arns = $assessment_template_arns ?? [];
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssessmentRunsResponse {
  public ListReturnedArnList $assessment_run_arns;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_run_arns' => ListReturnedArnList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arns = $assessment_run_arns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListAssessmentTargetsRequest {
  public AssessmentTargetFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'filter' => AssessmentTargetFilter,
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssessmentTargetsResponse {
  public ListReturnedArnList $assessment_target_arns;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_target_arns' => ListReturnedArnList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_target_arns = $assessment_target_arns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListAssessmentTemplatesRequest {
  public ListParentArnList $assessment_target_arns;
  public AssessmentTemplateFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_target_arns' => ListParentArnList,
  ?'filter' => AssessmentTemplateFilter,
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_target_arns = $assessment_target_arns ?? [];
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssessmentTemplatesResponse {
  public ListReturnedArnList $assessment_template_arns;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_template_arns' => ListReturnedArnList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_template_arns = $assessment_template_arns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ListEventSubscriptionsMaxResults = int;

class ListEventSubscriptionsRequest {
  public ListEventSubscriptionsMaxResults $max_results;
  public PaginationToken $next_token;
  public Arn $resource_arn;

  public function __construct(shape(
  ?'max_results' => ListEventSubscriptionsMaxResults,
  ?'next_token' => PaginationToken,
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListEventSubscriptionsResponse {
  public PaginationToken $next_token;
  public SubscriptionList $subscriptions;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'subscriptions' => SubscriptionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->subscriptions = $subscriptions ?? [];
  }
}

class ListExclusionsRequest {
  public Arn $assessment_run_arn;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListExclusionsResponse {
  public ListReturnedArnList $exclusion_arns;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'exclusion_arns' => ListReturnedArnList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->exclusion_arns = $exclusion_arns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListFindingsRequest {
  public ListParentArnList $assessment_run_arns;
  public FindingFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assessment_run_arns' => ListParentArnList,
  ?'filter' => FindingFilter,
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arns = $assessment_run_arns ?? [];
    $this->filter = $filter ?? null;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListFindingsResponse {
  public ListReturnedArnList $finding_arns;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'finding_arns' => ListReturnedArnList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->finding_arns = $finding_arns ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ListMaxResults = int;

type ListParentArnList = vec<Arn>;

type ListReturnedArnList = vec<Arn>;

class ListRulesPackagesRequest {
  public ListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => ListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListRulesPackagesResponse {
  public PaginationToken $next_token;
  public ListReturnedArnList $rules_package_arns;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'rules_package_arns' => ListReturnedArnList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->rules_package_arns = $rules_package_arns ?? [];
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type Locale = string;

type Long = int;

type Message = string;

type MessageType = string;

type NamePattern = string;

class NetworkInterface {
  public Ipv6Addresses $ipv_6_addresses;
  public Text $network_interface_id;
  public Text $private_dns_name;
  public Text $private_ip_address;
  public PrivateIpAddresses $private_ip_addresses;
  public Text $public_dns_name;
  public Text $public_ip;
  public SecurityGroups $security_groups;
  public Text $subnet_id;
  public Text $vpc_id;

  public function __construct(shape(
  ?'ipv_6_addresses' => Ipv6Addresses,
  ?'network_interface_id' => Text,
  ?'private_dns_name' => Text,
  ?'private_ip_address' => Text,
  ?'private_ip_addresses' => PrivateIpAddresses,
  ?'public_dns_name' => Text,
  ?'public_ip' => Text,
  ?'security_groups' => SecurityGroups,
  ?'subnet_id' => Text,
  ?'vpc_id' => Text,
  ) $s = shape()) {
    $this->ipv_6_addresses = $ipv_6_addresses ?? [];
    $this->network_interface_id = $network_interface_id ?? "";
    $this->private_dns_name = $private_dns_name ?? "";
    $this->private_ip_address = $private_ip_address ?? "";
    $this->private_ip_addresses = $private_ip_addresses ?? [];
    $this->public_dns_name = $public_dns_name ?? "";
    $this->public_ip = $public_ip ?? "";
    $this->security_groups = $security_groups ?? [];
    $this->subnet_id = $subnet_id ?? "";
    $this->vpc_id = $vpc_id ?? "";
  }
}

type NetworkInterfaces = vec<NetworkInterface>;

type NoSuchEntityErrorCode = string;

class NoSuchEntityException {
  public Bool $can_retry;
  public NoSuchEntityErrorCode $error_code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'error_code' => NoSuchEntityErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

type NumericSeverity = float;

type NumericVersion = int;

type OperatingSystem = string;

type PaginationToken = string;

type PreviewAgentsMaxResults = int;

class PreviewAgentsRequest {
  public PreviewAgentsMaxResults $max_results;
  public PaginationToken $next_token;
  public Arn $preview_agents_arn;

  public function __construct(shape(
  ?'max_results' => PreviewAgentsMaxResults,
  ?'next_token' => PaginationToken,
  ?'preview_agents_arn' => Arn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->preview_agents_arn = $preview_agents_arn ?? "";
  }
}

class PreviewAgentsResponse {
  public AgentPreviewList $agent_previews;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'agent_previews' => AgentPreviewList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->agent_previews = $agent_previews ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class PreviewGenerationInProgressException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PreviewStatus = string;

class PrivateIp {
  public Text $private_dns_name;
  public Text $private_ip_address;

  public function __construct(shape(
  ?'private_dns_name' => Text,
  ?'private_ip_address' => Text,
  ) $s = shape()) {
    $this->private_dns_name = $private_dns_name ?? "";
    $this->private_ip_address = $private_ip_address ?? "";
  }
}

type PrivateIpAddresses = vec<PrivateIp>;

type ProviderName = string;

class RegisterCrossAccountAccessRoleRequest {
  public Arn $role_arn;

  public function __construct(shape(
  ?'role_arn' => Arn,
  ) $s = shape()) {
    $this->role_arn = $role_arn ?? "";
  }
}

class RemoveAttributesFromFindingsRequest {
  public UserAttributeKeyList $attribute_keys;
  public AddRemoveAttributesFindingArnList $finding_arns;

  public function __construct(shape(
  ?'attribute_keys' => UserAttributeKeyList,
  ?'finding_arns' => AddRemoveAttributesFindingArnList,
  ) $s = shape()) {
    $this->attribute_keys = $attribute_keys ?? [];
    $this->finding_arns = $finding_arns ?? [];
  }
}

class RemoveAttributesFromFindingsResponse {
  public FailedItems $failed_items;

  public function __construct(shape(
  ?'failed_items' => FailedItems,
  ) $s = shape()) {
    $this->failed_items = $failed_items ?? [];
  }
}

type ReportFileFormat = string;

type ReportStatus = string;

type ReportType = string;

class ResourceGroup {
  public Arn $arn;
  public Timestamp $created_at;
  public ResourceGroupTags $tags;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'created_at' => Timestamp,
  ?'tags' => ResourceGroupTags,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->created_at = $created_at ?? 0;
    $this->tags = $tags ?? [];
  }
}

type ResourceGroupList = vec<ResourceGroup>;

class ResourceGroupTag {
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

type ResourceGroupTags = vec<ResourceGroupTag>;

type RuleName = string;

type RuleNameList = vec<RuleName>;

class RulesPackage {
  public Arn $arn;
  public Text $description;
  public RulesPackageName $name;
  public ProviderName $provider;
  public Version $version;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'description' => Text,
  ?'name' => RulesPackageName,
  ?'provider' => ProviderName,
  ?'version' => Version,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->provider = $provider ?? "";
    $this->version = $version ?? "";
  }
}

type RulesPackageList = vec<RulesPackage>;

type RulesPackageName = string;

class Scope {
  public ScopeType $key;
  public ScopeValue $value;

  public function __construct(shape(
  ?'key' => ScopeType,
  ?'value' => ScopeValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type ScopeList = vec<Scope>;

type ScopeType = string;

type ScopeValue = string;

class SecurityGroup {
  public Text $group_id;
  public Text $group_name;

  public function __construct(shape(
  ?'group_id' => Text,
  ?'group_name' => Text,
  ) $s = shape()) {
    $this->group_id = $group_id ?? "";
    $this->group_name = $group_name ?? "";
  }
}

type SecurityGroups = vec<SecurityGroup>;

type ServiceName = string;

class ServiceTemporarilyUnavailableException {
  public Bool $can_retry;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->message = $message ?? "";
  }
}

class SetTagsForResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type Severity = string;

type SeverityList = vec<Severity>;

class StartAssessmentRunRequest {
  public AssessmentRunName $assessment_run_name;
  public Arn $assessment_template_arn;

  public function __construct(shape(
  ?'assessment_run_name' => AssessmentRunName,
  ?'assessment_template_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_run_name = $assessment_run_name ?? "";
    $this->assessment_template_arn = $assessment_template_arn ?? "";
  }
}

class StartAssessmentRunResponse {
  public Arn $assessment_run_arn;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
  }
}

type StopAction = string;

class StopAssessmentRunRequest {
  public Arn $assessment_run_arn;
  public StopAction $stop_action;

  public function __construct(shape(
  ?'assessment_run_arn' => Arn,
  ?'stop_action' => StopAction,
  ) $s = shape()) {
    $this->assessment_run_arn = $assessment_run_arn ?? "";
    $this->stop_action = $stop_action ?? "";
  }
}

class SubscribeToEventRequest {
  public InspectorEvent $event;
  public Arn $resource_arn;
  public Arn $topic_arn;

  public function __construct(shape(
  ?'event' => InspectorEvent,
  ?'resource_arn' => Arn,
  ?'topic_arn' => Arn,
  ) $s = shape()) {
    $this->event = $event ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->topic_arn = $topic_arn ?? "";
  }
}

class Subscription {
  public EventSubscriptionList $event_subscriptions;
  public Arn $resource_arn;
  public Arn $topic_arn;

  public function __construct(shape(
  ?'event_subscriptions' => EventSubscriptionList,
  ?'resource_arn' => Arn,
  ?'topic_arn' => Arn,
  ) $s = shape()) {
    $this->event_subscriptions = $event_subscriptions ?? [];
    $this->resource_arn = $resource_arn ?? "";
    $this->topic_arn = $topic_arn ?? "";
  }
}

type SubscriptionList = vec<Subscription>;

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

type Tags = vec<Tag>;

class TelemetryMetadata {
  public Long $count;
  public Long $data_size;
  public MessageType $message_type;

  public function __construct(shape(
  ?'count' => Long,
  ?'data_size' => Long,
  ?'message_type' => MessageType,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->data_size = $data_size ?? 0;
    $this->message_type = $message_type ?? "";
  }
}

type TelemetryMetadataList = vec<TelemetryMetadata>;

type Text = string;

type Timestamp = int;

class TimestampRange {
  public Timestamp $begin_date;
  public Timestamp $end_date;

  public function __construct(shape(
  ?'begin_date' => Timestamp,
  ?'end_date' => Timestamp,
  ) $s = shape()) {
    $this->begin_date = $begin_date ?? 0;
    $this->end_date = $end_date ?? 0;
  }
}

type UUID = string;

class UnsubscribeFromEventRequest {
  public InspectorEvent $event;
  public Arn $resource_arn;
  public Arn $topic_arn;

  public function __construct(shape(
  ?'event' => InspectorEvent,
  ?'resource_arn' => Arn,
  ?'topic_arn' => Arn,
  ) $s = shape()) {
    $this->event = $event ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->topic_arn = $topic_arn ?? "";
  }
}

class UnsupportedFeatureException {
  public Bool $can_retry;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'can_retry' => Bool,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $can_retry ?? false;
    $this->message = $message ?? "";
  }
}

class UpdateAssessmentTargetRequest {
  public Arn $assessment_target_arn;
  public AssessmentTargetName $assessment_target_name;
  public Arn $resource_group_arn;

  public function __construct(shape(
  ?'assessment_target_arn' => Arn,
  ?'assessment_target_name' => AssessmentTargetName,
  ?'resource_group_arn' => Arn,
  ) $s = shape()) {
    $this->assessment_target_arn = $assessment_target_arn ?? "";
    $this->assessment_target_name = $assessment_target_name ?? "";
    $this->resource_group_arn = $resource_group_arn ?? "";
  }
}

type Url = string;

type UserAttributeKeyList = vec<AttributeKey>;

type UserAttributeList = vec<Attribute>;

type Version = string;

