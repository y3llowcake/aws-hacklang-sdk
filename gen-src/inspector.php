<?hh // strict
namespace slack\aws\inspector;

interface Inspector {
  public function AddAttributesToFindings(AddAttributesToFindingsRequest $in): Awaitable<\Errors\Result<AddAttributesToFindingsResponse>>;
  public function CreateAssessmentTarget(CreateAssessmentTargetRequest $in): Awaitable<\Errors\Result<CreateAssessmentTargetResponse>>;
  public function CreateAssessmentTemplate(CreateAssessmentTemplateRequest $in): Awaitable<\Errors\Result<CreateAssessmentTemplateResponse>>;
  public function CreateExclusionsPreview(CreateExclusionsPreviewRequest $in): Awaitable<\Errors\Result<CreateExclusionsPreviewResponse>>;
  public function CreateResourceGroup(CreateResourceGroupRequest $in): Awaitable<\Errors\Result<CreateResourceGroupResponse>>;
  public function DeleteAssessmentRun(DeleteAssessmentRunRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAssessmentTarget(DeleteAssessmentTargetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAssessmentTemplate(DeleteAssessmentTemplateRequest $in): Awaitable<\Errors\Error>;
  public function DescribeAssessmentRuns(DescribeAssessmentRunsRequest $in): Awaitable<\Errors\Result<DescribeAssessmentRunsResponse>>;
  public function DescribeAssessmentTargets(DescribeAssessmentTargetsRequest $in): Awaitable<\Errors\Result<DescribeAssessmentTargetsResponse>>;
  public function DescribeAssessmentTemplates(DescribeAssessmentTemplatesRequest $in): Awaitable<\Errors\Result<DescribeAssessmentTemplatesResponse>>;
  public function DescribeCrossAccountAccessRole( $in): Awaitable<\Errors\Result<DescribeCrossAccountAccessRoleResponse>>;
  public function DescribeExclusions(DescribeExclusionsRequest $in): Awaitable<\Errors\Result<DescribeExclusionsResponse>>;
  public function DescribeFindings(DescribeFindingsRequest $in): Awaitable<\Errors\Result<DescribeFindingsResponse>>;
  public function DescribeResourceGroups(DescribeResourceGroupsRequest $in): Awaitable<\Errors\Result<DescribeResourceGroupsResponse>>;
  public function DescribeRulesPackages(DescribeRulesPackagesRequest $in): Awaitable<\Errors\Result<DescribeRulesPackagesResponse>>;
  public function GetAssessmentReport(GetAssessmentReportRequest $in): Awaitable<\Errors\Result<GetAssessmentReportResponse>>;
  public function GetExclusionsPreview(GetExclusionsPreviewRequest $in): Awaitable<\Errors\Result<GetExclusionsPreviewResponse>>;
  public function GetTelemetryMetadata(GetTelemetryMetadataRequest $in): Awaitable<\Errors\Result<GetTelemetryMetadataResponse>>;
  public function ListAssessmentRunAgents(ListAssessmentRunAgentsRequest $in): Awaitable<\Errors\Result<ListAssessmentRunAgentsResponse>>;
  public function ListAssessmentRuns(ListAssessmentRunsRequest $in): Awaitable<\Errors\Result<ListAssessmentRunsResponse>>;
  public function ListAssessmentTargets(ListAssessmentTargetsRequest $in): Awaitable<\Errors\Result<ListAssessmentTargetsResponse>>;
  public function ListAssessmentTemplates(ListAssessmentTemplatesRequest $in): Awaitable<\Errors\Result<ListAssessmentTemplatesResponse>>;
  public function ListEventSubscriptions(ListEventSubscriptionsRequest $in): Awaitable<\Errors\Result<ListEventSubscriptionsResponse>>;
  public function ListExclusions(ListExclusionsRequest $in): Awaitable<\Errors\Result<ListExclusionsResponse>>;
  public function ListFindings(ListFindingsRequest $in): Awaitable<\Errors\Result<ListFindingsResponse>>;
  public function ListRulesPackages(ListRulesPackagesRequest $in): Awaitable<\Errors\Result<ListRulesPackagesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PreviewAgents(PreviewAgentsRequest $in): Awaitable<\Errors\Result<PreviewAgentsResponse>>;
  public function RegisterCrossAccountAccessRole(RegisterCrossAccountAccessRoleRequest $in): Awaitable<\Errors\Error>;
  public function RemoveAttributesFromFindings(RemoveAttributesFromFindingsRequest $in): Awaitable<\Errors\Result<RemoveAttributesFromFindingsResponse>>;
  public function SetTagsForResource(SetTagsForResourceRequest $in): Awaitable<\Errors\Error>;
  public function StartAssessmentRun(StartAssessmentRunRequest $in): Awaitable<\Errors\Result<StartAssessmentRunResponse>>;
  public function StopAssessmentRun(StopAssessmentRunRequest $in): Awaitable<\Errors\Error>;
  public function SubscribeToEvent(SubscribeToEventRequest $in): Awaitable<\Errors\Error>;
  public function UnsubscribeFromEvent(UnsubscribeFromEventRequest $in): Awaitable<\Errors\Error>;
  public function UpdateAssessmentTarget(UpdateAssessmentTargetRequest $in): Awaitable<\Errors\Error>;
}

type AccessDeniedErrorCode = string;

class AccessDeniedException {
  public ?Bool $can_retry;
  public ?AccessDeniedErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'error_code' => ?AccessDeniedErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class AddAttributesToFindingsRequest {
  public ?UserAttributeList $attributes;
  public ?AddRemoveAttributesFindingArnList $finding_arns;

  public function __construct(shape(
    ?'attributes' => ?UserAttributeList,
    ?'finding_arns' => ?AddRemoveAttributesFindingArnList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->finding_arns = $s['finding_arns'] ?? vec[];
  }
}

class AddAttributesToFindingsResponse {
  public ?FailedItems $failed_items;

  public function __construct(shape(
    ?'failed_items' => ?FailedItems,
  ) $s = shape()) {
    $this->failed_items = $s['failed_items'] ?? dict[];
  }
}

type AddRemoveAttributesFindingArnList = vec<Arn>;

class AgentAlreadyRunningAssessment {
  public ?AgentId $agent_id;
  public ?Arn $assessment_run_arn;

  public function __construct(shape(
    ?'agent_id' => ?AgentId,
    ?'assessment_run_arn' => ?Arn,
  ) $s = shape()) {
    $this->agent_id = $s['agent_id'] ?? '';
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
  }
}

type AgentAlreadyRunningAssessmentList = vec<AgentAlreadyRunningAssessment>;

class AgentFilter {
  public ?AgentHealthCodeList $agent_health_codes;
  public ?AgentHealthList $agent_healths;

  public function __construct(shape(
    ?'agent_health_codes' => ?AgentHealthCodeList,
    ?'agent_healths' => ?AgentHealthList,
  ) $s = shape()) {
    $this->agent_health_codes = $s['agent_health_codes'] ?? vec[];
    $this->agent_healths = $s['agent_healths'] ?? vec[];
  }
}

type AgentHealth = string;

type AgentHealthCode = string;

type AgentHealthCodeList = vec<AgentHealthCode>;

type AgentHealthList = vec<AgentHealth>;

type AgentId = string;

type AgentIdList = vec<AgentId>;

class AgentPreview {
  public ?AgentHealth $agent_health;
  public ?AgentId $agent_id;
  public ?AgentVersion $agent_version;
  public ?AutoScalingGroup $auto_scaling_group;
  public ?Hostname $hostname;
  public ?Ipv4Address $ipv_4_address;
  public ?KernelVersion $kernel_version;
  public ?OperatingSystem $operating_system;

  public function __construct(shape(
    ?'agent_health' => ?AgentHealth,
    ?'agent_id' => ?AgentId,
    ?'agent_version' => ?AgentVersion,
    ?'auto_scaling_group' => ?AutoScalingGroup,
    ?'hostname' => ?Hostname,
    ?'ipv_4_address' => ?Ipv4Address,
    ?'kernel_version' => ?KernelVersion,
    ?'operating_system' => ?OperatingSystem,
  ) $s = shape()) {
    $this->agent_health = $s['agent_health'] ?? '';
    $this->agent_id = $s['agent_id'] ?? '';
    $this->agent_version = $s['agent_version'] ?? '';
    $this->auto_scaling_group = $s['auto_scaling_group'] ?? '';
    $this->hostname = $s['hostname'] ?? '';
    $this->ipv_4_address = $s['ipv_4_address'] ?? '';
    $this->kernel_version = $s['kernel_version'] ?? '';
    $this->operating_system = $s['operating_system'] ?? '';
  }
}

type AgentPreviewList = vec<AgentPreview>;

type AgentVersion = string;

class AgentsAlreadyRunningAssessmentException {
  public ?AgentAlreadyRunningAssessmentList $agents;
  public ?Bool $agents_truncated;
  public ?Bool $can_retry;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'agents' => ?AgentAlreadyRunningAssessmentList,
    ?'agents_truncated' => ?Bool,
    ?'can_retry' => ?Bool,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->agents = $s['agents'] ?? vec[];
    $this->agents_truncated = $s['agents_truncated'] ?? false;
    $this->can_retry = $s['can_retry'] ?? false;
    $this->message = $s['message'] ?? '';
  }
}

type AmiId = string;

type Arn = string;

type ArnCount = int;

type AssessmentRulesPackageArnList = vec<Arn>;

class AssessmentRun {
  public ?Arn $arn;
  public ?Arn $assessment_template_arn;
  public ?Timestamp $completed_at;
  public ?Timestamp $created_at;
  public ?Bool $data_collected;
  public ?AssessmentRunDuration $duration_in_seconds;
  public ?AssessmentRunFindingCounts $finding_counts;
  public ?AssessmentRunName $name;
  public ?AssessmentRunNotificationList $notifications;
  public ?AssessmentRulesPackageArnList $rules_package_arns;
  public ?Timestamp $started_at;
  public ?AssessmentRunState $state;
  public ?Timestamp $state_changed_at;
  public ?AssessmentRunStateChangeList $state_changes;
  public ?UserAttributeList $user_attributes_for_findings;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'assessment_template_arn' => ?Arn,
    ?'completed_at' => ?Timestamp,
    ?'created_at' => ?Timestamp,
    ?'data_collected' => ?Bool,
    ?'duration_in_seconds' => ?AssessmentRunDuration,
    ?'finding_counts' => ?AssessmentRunFindingCounts,
    ?'name' => ?AssessmentRunName,
    ?'notifications' => ?AssessmentRunNotificationList,
    ?'rules_package_arns' => ?AssessmentRulesPackageArnList,
    ?'started_at' => ?Timestamp,
    ?'state' => ?AssessmentRunState,
    ?'state_changed_at' => ?Timestamp,
    ?'state_changes' => ?AssessmentRunStateChangeList,
    ?'user_attributes_for_findings' => ?UserAttributeList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->assessment_template_arn = $s['assessment_template_arn'] ?? '';
    $this->completed_at = $s['completed_at'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_collected = $s['data_collected'] ?? false;
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
    $this->finding_counts = $s['finding_counts'] ?? dict[];
    $this->name = $s['name'] ?? '';
    $this->notifications = $s['notifications'] ?? vec[];
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
    $this->started_at = $s['started_at'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->state_changed_at = $s['state_changed_at'] ?? 0;
    $this->state_changes = $s['state_changes'] ?? vec[];
    $this->user_attributes_for_findings = $s['user_attributes_for_findings'] ?? vec[];
  }
}

class AssessmentRunAgent {
  public ?AgentHealth $agent_health;
  public ?AgentHealthCode $agent_health_code;
  public ?Message $agent_health_details;
  public ?AgentId $agent_id;
  public ?Arn $assessment_run_arn;
  public ?AutoScalingGroup $auto_scaling_group;
  public ?TelemetryMetadataList $telemetry_metadata;

  public function __construct(shape(
    ?'agent_health' => ?AgentHealth,
    ?'agent_health_code' => ?AgentHealthCode,
    ?'agent_health_details' => ?Message,
    ?'agent_id' => ?AgentId,
    ?'assessment_run_arn' => ?Arn,
    ?'auto_scaling_group' => ?AutoScalingGroup,
    ?'telemetry_metadata' => ?TelemetryMetadataList,
  ) $s = shape()) {
    $this->agent_health = $s['agent_health'] ?? '';
    $this->agent_health_code = $s['agent_health_code'] ?? '';
    $this->agent_health_details = $s['agent_health_details'] ?? '';
    $this->agent_id = $s['agent_id'] ?? '';
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
    $this->auto_scaling_group = $s['auto_scaling_group'] ?? '';
    $this->telemetry_metadata = $s['telemetry_metadata'] ?? vec[];
  }
}

type AssessmentRunAgentList = vec<AssessmentRunAgent>;

type AssessmentRunDuration = int;

class AssessmentRunFilter {
  public ?TimestampRange $completion_time_range;
  public ?DurationRange $duration_range;
  public ?NamePattern $name_pattern;
  public ?FilterRulesPackageArnList $rules_package_arns;
  public ?TimestampRange $start_time_range;
  public ?TimestampRange $state_change_time_range;
  public ?AssessmentRunStateList $states;

  public function __construct(shape(
    ?'completion_time_range' => ?TimestampRange,
    ?'duration_range' => ?DurationRange,
    ?'name_pattern' => ?NamePattern,
    ?'rules_package_arns' => ?FilterRulesPackageArnList,
    ?'start_time_range' => ?TimestampRange,
    ?'state_change_time_range' => ?TimestampRange,
    ?'states' => ?AssessmentRunStateList,
  ) $s = shape()) {
    $this->completion_time_range = $s['completion_time_range'] ?? null;
    $this->duration_range = $s['duration_range'] ?? null;
    $this->name_pattern = $s['name_pattern'] ?? '';
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
    $this->start_time_range = $s['start_time_range'] ?? null;
    $this->state_change_time_range = $s['state_change_time_range'] ?? null;
    $this->states = $s['states'] ?? vec[];
  }
}

type AssessmentRunFindingCounts = dict<Severity, FindingCount>;

type AssessmentRunInProgressArnList = vec<Arn>;

class AssessmentRunInProgressException {
  public ?AssessmentRunInProgressArnList $assessment_run_arns;
  public ?Bool $assessment_run_arns_truncated;
  public ?Bool $can_retry;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'assessment_run_arns' => ?AssessmentRunInProgressArnList,
    ?'assessment_run_arns_truncated' => ?Bool,
    ?'can_retry' => ?Bool,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->assessment_run_arns = $s['assessment_run_arns'] ?? vec[];
    $this->assessment_run_arns_truncated = $s['assessment_run_arns_truncated'] ?? false;
    $this->can_retry = $s['can_retry'] ?? false;
    $this->message = $s['message'] ?? '';
  }
}

type AssessmentRunList = vec<AssessmentRun>;

type AssessmentRunName = string;

class AssessmentRunNotification {
  public ?Timestamp $date;
  public ?Bool $error;
  public ?InspectorEvent $event;
  public ?Message $message;
  public ?AssessmentRunNotificationSnsStatusCode $sns_publish_status_code;
  public ?Arn $sns_topic_arn;

  public function __construct(shape(
    ?'date' => ?Timestamp,
    ?'error' => ?Bool,
    ?'event' => ?InspectorEvent,
    ?'message' => ?Message,
    ?'sns_publish_status_code' => ?AssessmentRunNotificationSnsStatusCode,
    ?'sns_topic_arn' => ?Arn,
  ) $s = shape()) {
    $this->date = $s['date'] ?? 0;
    $this->error = $s['error'] ?? false;
    $this->event = $s['event'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->sns_publish_status_code = $s['sns_publish_status_code'] ?? '';
    $this->sns_topic_arn = $s['sns_topic_arn'] ?? '';
  }
}

type AssessmentRunNotificationList = vec<AssessmentRunNotification>;

type AssessmentRunNotificationSnsStatusCode = string;

type AssessmentRunState = string;

class AssessmentRunStateChange {
  public ?AssessmentRunState $state;
  public ?Timestamp $state_changed_at;

  public function __construct(shape(
    ?'state' => ?AssessmentRunState,
    ?'state_changed_at' => ?Timestamp,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->state_changed_at = $s['state_changed_at'] ?? 0;
  }
}

type AssessmentRunStateChangeList = vec<AssessmentRunStateChange>;

type AssessmentRunStateList = vec<AssessmentRunState>;

class AssessmentTarget {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?AssessmentTargetName $name;
  public ?Arn $resource_group_arn;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'name' => ?AssessmentTargetName,
    ?'resource_group_arn' => ?Arn,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->resource_group_arn = $s['resource_group_arn'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class AssessmentTargetFilter {
  public ?NamePattern $assessment_target_name_pattern;

  public function __construct(shape(
    ?'assessment_target_name_pattern' => ?NamePattern,
  ) $s = shape()) {
    $this->assessment_target_name_pattern = $s['assessment_target_name_pattern'] ?? '';
  }
}

type AssessmentTargetList = vec<AssessmentTarget>;

type AssessmentTargetName = string;

class AssessmentTemplate {
  public ?Arn $arn;
  public ?ArnCount $assessment_run_count;
  public ?Arn $assessment_target_arn;
  public ?Timestamp $created_at;
  public ?AssessmentRunDuration $duration_in_seconds;
  public ?Arn $last_assessment_run_arn;
  public ?AssessmentTemplateName $name;
  public ?AssessmentTemplateRulesPackageArnList $rules_package_arns;
  public ?UserAttributeList $user_attributes_for_findings;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'assessment_run_count' => ?ArnCount,
    ?'assessment_target_arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'duration_in_seconds' => ?AssessmentRunDuration,
    ?'last_assessment_run_arn' => ?Arn,
    ?'name' => ?AssessmentTemplateName,
    ?'rules_package_arns' => ?AssessmentTemplateRulesPackageArnList,
    ?'user_attributes_for_findings' => ?UserAttributeList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->assessment_run_count = $s['assessment_run_count'] ?? 0;
    $this->assessment_target_arn = $s['assessment_target_arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
    $this->last_assessment_run_arn = $s['last_assessment_run_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
    $this->user_attributes_for_findings = $s['user_attributes_for_findings'] ?? vec[];
  }
}

class AssessmentTemplateFilter {
  public ?DurationRange $duration_range;
  public ?NamePattern $name_pattern;
  public ?FilterRulesPackageArnList $rules_package_arns;

  public function __construct(shape(
    ?'duration_range' => ?DurationRange,
    ?'name_pattern' => ?NamePattern,
    ?'rules_package_arns' => ?FilterRulesPackageArnList,
  ) $s = shape()) {
    $this->duration_range = $s['duration_range'] ?? null;
    $this->name_pattern = $s['name_pattern'] ?? '';
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
  }
}

type AssessmentTemplateList = vec<AssessmentTemplate>;

type AssessmentTemplateName = string;

type AssessmentTemplateRulesPackageArnList = vec<Arn>;

class AssetAttributes {
  public ?AgentId $agent_id;
  public ?AmiId $ami_id;
  public ?AutoScalingGroup $auto_scaling_group;
  public ?Hostname $hostname;
  public ?Ipv4AddressList $ipv_4_addresses;
  public ?NetworkInterfaces $network_interfaces;
  public ?NumericVersion $schema_version;
  public ?Tags $tags;

  public function __construct(shape(
    ?'agent_id' => ?AgentId,
    ?'ami_id' => ?AmiId,
    ?'auto_scaling_group' => ?AutoScalingGroup,
    ?'hostname' => ?Hostname,
    ?'ipv_4_addresses' => ?Ipv4AddressList,
    ?'network_interfaces' => ?NetworkInterfaces,
    ?'schema_version' => ?NumericVersion,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->agent_id = $s['agent_id'] ?? '';
    $this->ami_id = $s['ami_id'] ?? '';
    $this->auto_scaling_group = $s['auto_scaling_group'] ?? '';
    $this->hostname = $s['hostname'] ?? '';
    $this->ipv_4_addresses = $s['ipv_4_addresses'] ?? vec[];
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->schema_version = $s['schema_version'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
  }
}

type AssetType = string;

class Attribute {
  public ?AttributeKey $key;
  public ?AttributeValue $value;

  public function __construct(shape(
    ?'key' => ?AttributeKey,
    ?'value' => ?AttributeValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
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
  public ?AssessmentTargetName $assessment_target_name;
  public ?Arn $resource_group_arn;

  public function __construct(shape(
    ?'assessment_target_name' => ?AssessmentTargetName,
    ?'resource_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_target_name = $s['assessment_target_name'] ?? '';
    $this->resource_group_arn = $s['resource_group_arn'] ?? '';
  }
}

class CreateAssessmentTargetResponse {
  public ?Arn $assessment_target_arn;

  public function __construct(shape(
    ?'assessment_target_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_target_arn = $s['assessment_target_arn'] ?? '';
  }
}

class CreateAssessmentTemplateRequest {
  public ?Arn $assessment_target_arn;
  public ?AssessmentTemplateName $assessment_template_name;
  public ?AssessmentRunDuration $duration_in_seconds;
  public ?AssessmentTemplateRulesPackageArnList $rules_package_arns;
  public ?UserAttributeList $user_attributes_for_findings;

  public function __construct(shape(
    ?'assessment_target_arn' => ?Arn,
    ?'assessment_template_name' => ?AssessmentTemplateName,
    ?'duration_in_seconds' => ?AssessmentRunDuration,
    ?'rules_package_arns' => ?AssessmentTemplateRulesPackageArnList,
    ?'user_attributes_for_findings' => ?UserAttributeList,
  ) $s = shape()) {
    $this->assessment_target_arn = $s['assessment_target_arn'] ?? '';
    $this->assessment_template_name = $s['assessment_template_name'] ?? '';
    $this->duration_in_seconds = $s['duration_in_seconds'] ?? 0;
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
    $this->user_attributes_for_findings = $s['user_attributes_for_findings'] ?? vec[];
  }
}

class CreateAssessmentTemplateResponse {
  public ?Arn $assessment_template_arn;

  public function __construct(shape(
    ?'assessment_template_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_template_arn = $s['assessment_template_arn'] ?? '';
  }
}

class CreateExclusionsPreviewRequest {
  public ?Arn $assessment_template_arn;

  public function __construct(shape(
    ?'assessment_template_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_template_arn = $s['assessment_template_arn'] ?? '';
  }
}

class CreateExclusionsPreviewResponse {
  public ?UUID $preview_token;

  public function __construct(shape(
    ?'preview_token' => ?UUID,
  ) $s = shape()) {
    $this->preview_token = $s['preview_token'] ?? '';
  }
}

class CreateResourceGroupRequest {
  public ?ResourceGroupTags $resource_group_tags;

  public function __construct(shape(
    ?'resource_group_tags' => ?ResourceGroupTags,
  ) $s = shape()) {
    $this->resource_group_tags = $s['resource_group_tags'] ?? vec[];
  }
}

class CreateResourceGroupResponse {
  public ?Arn $resource_group_arn;

  public function __construct(shape(
    ?'resource_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->resource_group_arn = $s['resource_group_arn'] ?? '';
  }
}

class DeleteAssessmentRunRequest {
  public ?Arn $assessment_run_arn;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
  }
}

class DeleteAssessmentTargetRequest {
  public ?Arn $assessment_target_arn;

  public function __construct(shape(
    ?'assessment_target_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_target_arn = $s['assessment_target_arn'] ?? '';
  }
}

class DeleteAssessmentTemplateRequest {
  public ?Arn $assessment_template_arn;

  public function __construct(shape(
    ?'assessment_template_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_template_arn = $s['assessment_template_arn'] ?? '';
  }
}

class DescribeAssessmentRunsRequest {
  public ?BatchDescribeArnList $assessment_run_arns;

  public function __construct(shape(
    ?'assessment_run_arns' => ?BatchDescribeArnList,
  ) $s = shape()) {
    $this->assessment_run_arns = $s['assessment_run_arns'] ?? vec[];
  }
}

class DescribeAssessmentRunsResponse {
  public ?AssessmentRunList $assessment_runs;
  public ?FailedItems $failed_items;

  public function __construct(shape(
    ?'assessment_runs' => ?AssessmentRunList,
    ?'failed_items' => ?FailedItems,
  ) $s = shape()) {
    $this->assessment_runs = $s['assessment_runs'] ?? vec[];
    $this->failed_items = $s['failed_items'] ?? dict[];
  }
}

class DescribeAssessmentTargetsRequest {
  public ?BatchDescribeArnList $assessment_target_arns;

  public function __construct(shape(
    ?'assessment_target_arns' => ?BatchDescribeArnList,
  ) $s = shape()) {
    $this->assessment_target_arns = $s['assessment_target_arns'] ?? vec[];
  }
}

class DescribeAssessmentTargetsResponse {
  public ?AssessmentTargetList $assessment_targets;
  public ?FailedItems $failed_items;

  public function __construct(shape(
    ?'assessment_targets' => ?AssessmentTargetList,
    ?'failed_items' => ?FailedItems,
  ) $s = shape()) {
    $this->assessment_targets = $s['assessment_targets'] ?? vec[];
    $this->failed_items = $s['failed_items'] ?? dict[];
  }
}

class DescribeAssessmentTemplatesRequest {
  public ?BatchDescribeArnList $assessment_template_arns;

  public function __construct(shape(
    ?'assessment_template_arns' => ?BatchDescribeArnList,
  ) $s = shape()) {
    $this->assessment_template_arns = $s['assessment_template_arns'] ?? vec[];
  }
}

class DescribeAssessmentTemplatesResponse {
  public ?AssessmentTemplateList $assessment_templates;
  public ?FailedItems $failed_items;

  public function __construct(shape(
    ?'assessment_templates' => ?AssessmentTemplateList,
    ?'failed_items' => ?FailedItems,
  ) $s = shape()) {
    $this->assessment_templates = $s['assessment_templates'] ?? vec[];
    $this->failed_items = $s['failed_items'] ?? dict[];
  }
}

class DescribeCrossAccountAccessRoleResponse {
  public ?Timestamp $registered_at;
  public ?Arn $role_arn;
  public ?Bool $valid;

  public function __construct(shape(
    ?'registered_at' => ?Timestamp,
    ?'role_arn' => ?Arn,
    ?'valid' => ?Bool,
  ) $s = shape()) {
    $this->registered_at = $s['registered_at'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->valid = $s['valid'] ?? false;
  }
}

class DescribeExclusionsRequest {
  public ?BatchDescribeExclusionsArnList $exclusion_arns;
  public ?Locale $locale;

  public function __construct(shape(
    ?'exclusion_arns' => ?BatchDescribeExclusionsArnList,
    ?'locale' => ?Locale,
  ) $s = shape()) {
    $this->exclusion_arns = $s['exclusion_arns'] ?? vec[];
    $this->locale = $s['locale'] ?? '';
  }
}

class DescribeExclusionsResponse {
  public ?ExclusionMap $exclusions;
  public ?FailedItems $failed_items;

  public function __construct(shape(
    ?'exclusions' => ?ExclusionMap,
    ?'failed_items' => ?FailedItems,
  ) $s = shape()) {
    $this->exclusions = $s['exclusions'] ?? dict[];
    $this->failed_items = $s['failed_items'] ?? dict[];
  }
}

class DescribeFindingsRequest {
  public ?BatchDescribeArnList $finding_arns;
  public ?Locale $locale;

  public function __construct(shape(
    ?'finding_arns' => ?BatchDescribeArnList,
    ?'locale' => ?Locale,
  ) $s = shape()) {
    $this->finding_arns = $s['finding_arns'] ?? vec[];
    $this->locale = $s['locale'] ?? '';
  }
}

class DescribeFindingsResponse {
  public ?FailedItems $failed_items;
  public ?FindingList $findings;

  public function __construct(shape(
    ?'failed_items' => ?FailedItems,
    ?'findings' => ?FindingList,
  ) $s = shape()) {
    $this->failed_items = $s['failed_items'] ?? dict[];
    $this->findings = $s['findings'] ?? vec[];
  }
}

class DescribeResourceGroupsRequest {
  public ?BatchDescribeArnList $resource_group_arns;

  public function __construct(shape(
    ?'resource_group_arns' => ?BatchDescribeArnList,
  ) $s = shape()) {
    $this->resource_group_arns = $s['resource_group_arns'] ?? vec[];
  }
}

class DescribeResourceGroupsResponse {
  public ?FailedItems $failed_items;
  public ?ResourceGroupList $resource_groups;

  public function __construct(shape(
    ?'failed_items' => ?FailedItems,
    ?'resource_groups' => ?ResourceGroupList,
  ) $s = shape()) {
    $this->failed_items = $s['failed_items'] ?? dict[];
    $this->resource_groups = $s['resource_groups'] ?? vec[];
  }
}

class DescribeRulesPackagesRequest {
  public ?Locale $locale;
  public ?BatchDescribeArnList $rules_package_arns;

  public function __construct(shape(
    ?'locale' => ?Locale,
    ?'rules_package_arns' => ?BatchDescribeArnList,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
  }
}

class DescribeRulesPackagesResponse {
  public ?FailedItems $failed_items;
  public ?RulesPackageList $rules_packages;

  public function __construct(shape(
    ?'failed_items' => ?FailedItems,
    ?'rules_packages' => ?RulesPackageList,
  ) $s = shape()) {
    $this->failed_items = $s['failed_items'] ?? dict[];
    $this->rules_packages = $s['rules_packages'] ?? vec[];
  }
}

class DurationRange {
  public ?AssessmentRunDuration $max_seconds;
  public ?AssessmentRunDuration $min_seconds;

  public function __construct(shape(
    ?'max_seconds' => ?AssessmentRunDuration,
    ?'min_seconds' => ?AssessmentRunDuration,
  ) $s = shape()) {
    $this->max_seconds = $s['max_seconds'] ?? 0;
    $this->min_seconds = $s['min_seconds'] ?? 0;
  }
}

type ErrorMessage = string;

class EventSubscription {
  public ?InspectorEvent $event;
  public ?Timestamp $subscribed_at;

  public function __construct(shape(
    ?'event' => ?InspectorEvent,
    ?'subscribed_at' => ?Timestamp,
  ) $s = shape()) {
    $this->event = $s['event'] ?? '';
    $this->subscribed_at = $s['subscribed_at'] ?? 0;
  }
}

type EventSubscriptionList = vec<EventSubscription>;

class Exclusion {
  public ?Arn $arn;
  public ?AttributeList $attributes;
  public ?Text $description;
  public ?Text $recommendation;
  public ?ScopeList $scopes;
  public ?Text $title;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'attributes' => ?AttributeList,
    ?'description' => ?Text,
    ?'recommendation' => ?Text,
    ?'scopes' => ?ScopeList,
    ?'title' => ?Text,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attributes = $s['attributes'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->recommendation = $s['recommendation'] ?? '';
    $this->scopes = $s['scopes'] ?? vec[];
    $this->title = $s['title'] ?? '';
  }
}

type ExclusionMap = dict<Arn, Exclusion>;

class ExclusionPreview {
  public ?AttributeList $attributes;
  public ?Text $description;
  public ?Text $recommendation;
  public ?ScopeList $scopes;
  public ?Text $title;

  public function __construct(shape(
    ?'attributes' => ?AttributeList,
    ?'description' => ?Text,
    ?'recommendation' => ?Text,
    ?'scopes' => ?ScopeList,
    ?'title' => ?Text,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->recommendation = $s['recommendation'] ?? '';
    $this->scopes = $s['scopes'] ?? vec[];
    $this->title = $s['title'] ?? '';
  }
}

type ExclusionPreviewList = vec<ExclusionPreview>;

class FailedItemDetails {
  public ?FailedItemErrorCode $failure_code;
  public ?Bool $retryable;

  public function __construct(shape(
    ?'failure_code' => ?FailedItemErrorCode,
    ?'retryable' => ?Bool,
  ) $s = shape()) {
    $this->failure_code = $s['failure_code'] ?? '';
    $this->retryable = $s['retryable'] ?? false;
  }
}

type FailedItemErrorCode = string;

type FailedItems = dict<Arn, FailedItemDetails>;

type FilterRulesPackageArnList = vec<Arn>;

class Finding {
  public ?Arn $arn;
  public ?AssetAttributes $asset_attributes;
  public ?AssetType $asset_type;
  public ?AttributeList $attributes;
  public ?IocConfidence $confidence;
  public ?Timestamp $created_at;
  public ?Text $description;
  public ?FindingId $id;
  public ?Bool $indicator_of_compromise;
  public ?NumericSeverity $numeric_severity;
  public ?Text $recommendation;
  public ?NumericVersion $schema_version;
  public ?ServiceName $service;
  public ?InspectorServiceAttributes $service_attributes;
  public ?Severity $severity;
  public ?Text $title;
  public ?Timestamp $updated_at;
  public ?UserAttributeList $user_attributes;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_attributes' => ?AssetAttributes,
    ?'asset_type' => ?AssetType,
    ?'attributes' => ?AttributeList,
    ?'confidence' => ?IocConfidence,
    ?'created_at' => ?Timestamp,
    ?'description' => ?Text,
    ?'id' => ?FindingId,
    ?'indicator_of_compromise' => ?Bool,
    ?'numeric_severity' => ?NumericSeverity,
    ?'recommendation' => ?Text,
    ?'schema_version' => ?NumericVersion,
    ?'service' => ?ServiceName,
    ?'service_attributes' => ?InspectorServiceAttributes,
    ?'severity' => ?Severity,
    ?'title' => ?Text,
    ?'updated_at' => ?Timestamp,
    ?'user_attributes' => ?UserAttributeList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_attributes = $s['asset_attributes'] ?? null;
    $this->asset_type = $s['asset_type'] ?? '';
    $this->attributes = $s['attributes'] ?? vec[];
    $this->confidence = $s['confidence'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->indicator_of_compromise = $s['indicator_of_compromise'] ?? false;
    $this->numeric_severity = $s['numeric_severity'] ?? 0.0;
    $this->recommendation = $s['recommendation'] ?? '';
    $this->schema_version = $s['schema_version'] ?? 0;
    $this->service = $s['service'] ?? '';
    $this->service_attributes = $s['service_attributes'] ?? null;
    $this->severity = $s['severity'] ?? '';
    $this->title = $s['title'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
    $this->user_attributes = $s['user_attributes'] ?? vec[];
  }
}

type FindingCount = int;

class FindingFilter {
  public ?AgentIdList $agent_ids;
  public ?AttributeList $attributes;
  public ?AutoScalingGroupList $auto_scaling_groups;
  public ?TimestampRange $creation_time_range;
  public ?RuleNameList $rule_names;
  public ?FilterRulesPackageArnList $rules_package_arns;
  public ?SeverityList $severities;
  public ?AttributeList $user_attributes;

  public function __construct(shape(
    ?'agent_ids' => ?AgentIdList,
    ?'attributes' => ?AttributeList,
    ?'auto_scaling_groups' => ?AutoScalingGroupList,
    ?'creation_time_range' => ?TimestampRange,
    ?'rule_names' => ?RuleNameList,
    ?'rules_package_arns' => ?FilterRulesPackageArnList,
    ?'severities' => ?SeverityList,
    ?'user_attributes' => ?AttributeList,
  ) $s = shape()) {
    $this->agent_ids = $s['agent_ids'] ?? vec[];
    $this->attributes = $s['attributes'] ?? vec[];
    $this->auto_scaling_groups = $s['auto_scaling_groups'] ?? vec[];
    $this->creation_time_range = $s['creation_time_range'] ?? null;
    $this->rule_names = $s['rule_names'] ?? vec[];
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
    $this->severities = $s['severities'] ?? vec[];
    $this->user_attributes = $s['user_attributes'] ?? vec[];
  }
}

type FindingId = string;

type FindingList = vec<Finding>;

class GetAssessmentReportRequest {
  public ?Arn $assessment_run_arn;
  public ?ReportFileFormat $report_file_format;
  public ?ReportType $report_type;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
    ?'report_file_format' => ?ReportFileFormat,
    ?'report_type' => ?ReportType,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
    $this->report_file_format = $s['report_file_format'] ?? '';
    $this->report_type = $s['report_type'] ?? '';
  }
}

class GetAssessmentReportResponse {
  public ?ReportStatus $status;
  public ?Url $url;

  public function __construct(shape(
    ?'status' => ?ReportStatus,
    ?'url' => ?Url,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

class GetExclusionsPreviewRequest {
  public ?Arn $assessment_template_arn;
  public ?Locale $locale;
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?UUID $preview_token;

  public function __construct(shape(
    ?'assessment_template_arn' => ?Arn,
    ?'locale' => ?Locale,
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
    ?'preview_token' => ?UUID,
  ) $s = shape()) {
    $this->assessment_template_arn = $s['assessment_template_arn'] ?? '';
    $this->locale = $s['locale'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->preview_token = $s['preview_token'] ?? '';
  }
}

class GetExclusionsPreviewResponse {
  public ?ExclusionPreviewList $exclusion_previews;
  public ?PaginationToken $next_token;
  public ?PreviewStatus $preview_status;

  public function __construct(shape(
    ?'exclusion_previews' => ?ExclusionPreviewList,
    ?'next_token' => ?PaginationToken,
    ?'preview_status' => ?PreviewStatus,
  ) $s = shape()) {
    $this->exclusion_previews = $s['exclusion_previews'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->preview_status = $s['preview_status'] ?? '';
  }
}

class GetTelemetryMetadataRequest {
  public ?Arn $assessment_run_arn;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
  }
}

class GetTelemetryMetadataResponse {
  public ?TelemetryMetadataList $telemetry_metadata;

  public function __construct(shape(
    ?'telemetry_metadata' => ?TelemetryMetadataList,
  ) $s = shape()) {
    $this->telemetry_metadata = $s['telemetry_metadata'] ?? vec[];
  }
}

type Hostname = string;

type InspectorEvent = string;

class InspectorServiceAttributes {
  public ?Arn $assessment_run_arn;
  public ?Arn $rules_package_arn;
  public ?NumericVersion $schema_version;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
    ?'rules_package_arn' => ?Arn,
    ?'schema_version' => ?NumericVersion,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
    $this->rules_package_arn = $s['rules_package_arn'] ?? '';
    $this->schema_version = $s['schema_version'] ?? 0;
  }
}

class InternalException {
  public ?Bool $can_retry;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->message = $s['message'] ?? '';
  }
}

type InvalidCrossAccountRoleErrorCode = string;

class InvalidCrossAccountRoleException {
  public ?Bool $can_retry;
  public ?InvalidCrossAccountRoleErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'error_code' => ?InvalidCrossAccountRoleErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type InvalidInputErrorCode = string;

class InvalidInputException {
  public ?Bool $can_retry;
  public ?InvalidInputErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'error_code' => ?InvalidInputErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type IocConfidence = int;

type Ipv4Address = string;

type Ipv4AddressList = vec<Ipv4Address>;

type Ipv6Addresses = vec<Text>;

type KernelVersion = string;

type LimitExceededErrorCode = string;

class LimitExceededException {
  public ?Bool $can_retry;
  public ?LimitExceededErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'error_code' => ?LimitExceededErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class ListAssessmentRunAgentsRequest {
  public ?Arn $assessment_run_arn;
  public ?AgentFilter $filter;
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
    ?'filter' => ?AgentFilter,
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssessmentRunAgentsResponse {
  public ?AssessmentRunAgentList $assessment_run_agents;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_run_agents' => ?AssessmentRunAgentList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_agents = $s['assessment_run_agents'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssessmentRunsRequest {
  public ?ListParentArnList $assessment_template_arns;
  public ?AssessmentRunFilter $filter;
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_template_arns' => ?ListParentArnList,
    ?'filter' => ?AssessmentRunFilter,
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_template_arns = $s['assessment_template_arns'] ?? vec[];
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssessmentRunsResponse {
  public ?ListReturnedArnList $assessment_run_arns;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_run_arns' => ?ListReturnedArnList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arns = $s['assessment_run_arns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssessmentTargetsRequest {
  public ?AssessmentTargetFilter $filter;
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'filter' => ?AssessmentTargetFilter,
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssessmentTargetsResponse {
  public ?ListReturnedArnList $assessment_target_arns;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_target_arns' => ?ListReturnedArnList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_target_arns = $s['assessment_target_arns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssessmentTemplatesRequest {
  public ?ListParentArnList $assessment_target_arns;
  public ?AssessmentTemplateFilter $filter;
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_target_arns' => ?ListParentArnList,
    ?'filter' => ?AssessmentTemplateFilter,
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_target_arns = $s['assessment_target_arns'] ?? vec[];
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssessmentTemplatesResponse {
  public ?ListReturnedArnList $assessment_template_arns;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_template_arns' => ?ListReturnedArnList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_template_arns = $s['assessment_template_arns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListEventSubscriptionsMaxResults = int;

class ListEventSubscriptionsRequest {
  public ?ListEventSubscriptionsMaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?ListEventSubscriptionsMaxResults,
    ?'next_token' => ?PaginationToken,
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListEventSubscriptionsResponse {
  public ?PaginationToken $next_token;
  public ?SubscriptionList $subscriptions;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'subscriptions' => ?SubscriptionList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->subscriptions = $s['subscriptions'] ?? vec[];
  }
}

class ListExclusionsRequest {
  public ?Arn $assessment_run_arn;
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListExclusionsResponse {
  public ?ListReturnedArnList $exclusion_arns;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'exclusion_arns' => ?ListReturnedArnList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->exclusion_arns = $s['exclusion_arns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFindingsRequest {
  public ?ListParentArnList $assessment_run_arns;
  public ?FindingFilter $filter;
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assessment_run_arns' => ?ListParentArnList,
    ?'filter' => ?FindingFilter,
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assessment_run_arns = $s['assessment_run_arns'] ?? vec[];
    $this->filter = $s['filter'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFindingsResponse {
  public ?ListReturnedArnList $finding_arns;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'finding_arns' => ?ListReturnedArnList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->finding_arns = $s['finding_arns'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListMaxResults = int;

type ListParentArnList = vec<Arn>;

type ListReturnedArnList = vec<Arn>;

class ListRulesPackagesRequest {
  public ?ListMaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?ListMaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListRulesPackagesResponse {
  public ?PaginationToken $next_token;
  public ?ListReturnedArnList $rules_package_arns;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'rules_package_arns' => ?ListReturnedArnList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->rules_package_arns = $s['rules_package_arns'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

type Locale = string;

type Long = int;

type Message = string;

type MessageType = string;

type NamePattern = string;

class NetworkInterface {
  public ?Ipv6Addresses $ipv_6_addresses;
  public ?Text $network_interface_id;
  public ?Text $private_dns_name;
  public ?Text $private_ip_address;
  public ?PrivateIpAddresses $private_ip_addresses;
  public ?Text $public_dns_name;
  public ?Text $public_ip;
  public ?SecurityGroups $security_groups;
  public ?Text $subnet_id;
  public ?Text $vpc_id;

  public function __construct(shape(
    ?'ipv_6_addresses' => ?Ipv6Addresses,
    ?'network_interface_id' => ?Text,
    ?'private_dns_name' => ?Text,
    ?'private_ip_address' => ?Text,
    ?'private_ip_addresses' => ?PrivateIpAddresses,
    ?'public_dns_name' => ?Text,
    ?'public_ip' => ?Text,
    ?'security_groups' => ?SecurityGroups,
    ?'subnet_id' => ?Text,
    ?'vpc_id' => ?Text,
  ) $s = shape()) {
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->public_dns_name = $s['public_dns_name'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type NetworkInterfaces = vec<NetworkInterface>;

type NoSuchEntityErrorCode = string;

class NoSuchEntityException {
  public ?Bool $can_retry;
  public ?NoSuchEntityErrorCode $error_code;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'error_code' => ?NoSuchEntityErrorCode,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->error_code = $s['error_code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type NumericSeverity = float;

type NumericVersion = int;

type OperatingSystem = string;

type PaginationToken = string;

type PreviewAgentsMaxResults = int;

class PreviewAgentsRequest {
  public ?PreviewAgentsMaxResults $max_results;
  public ?PaginationToken $next_token;
  public ?Arn $preview_agents_arn;

  public function __construct(shape(
    ?'max_results' => ?PreviewAgentsMaxResults,
    ?'next_token' => ?PaginationToken,
    ?'preview_agents_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->preview_agents_arn = $s['preview_agents_arn'] ?? '';
  }
}

class PreviewAgentsResponse {
  public ?AgentPreviewList $agent_previews;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'agent_previews' => ?AgentPreviewList,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->agent_previews = $s['agent_previews'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class PreviewGenerationInProgressException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PreviewStatus = string;

class PrivateIp {
  public ?Text $private_dns_name;
  public ?Text $private_ip_address;

  public function __construct(shape(
    ?'private_dns_name' => ?Text,
    ?'private_ip_address' => ?Text,
  ) $s = shape()) {
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
  }
}

type PrivateIpAddresses = vec<PrivateIp>;

type ProviderName = string;

class RegisterCrossAccountAccessRoleRequest {
  public ?Arn $role_arn;

  public function __construct(shape(
    ?'role_arn' => ?Arn,
  ) $s = shape()) {
    $this->role_arn = $s['role_arn'] ?? '';
  }
}

class RemoveAttributesFromFindingsRequest {
  public ?UserAttributeKeyList $attribute_keys;
  public ?AddRemoveAttributesFindingArnList $finding_arns;

  public function __construct(shape(
    ?'attribute_keys' => ?UserAttributeKeyList,
    ?'finding_arns' => ?AddRemoveAttributesFindingArnList,
  ) $s = shape()) {
    $this->attribute_keys = $s['attribute_keys'] ?? vec[];
    $this->finding_arns = $s['finding_arns'] ?? vec[];
  }
}

class RemoveAttributesFromFindingsResponse {
  public ?FailedItems $failed_items;

  public function __construct(shape(
    ?'failed_items' => ?FailedItems,
  ) $s = shape()) {
    $this->failed_items = $s['failed_items'] ?? dict[];
  }
}

type ReportFileFormat = string;

type ReportStatus = string;

type ReportType = string;

class ResourceGroup {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?ResourceGroupTags $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'tags' => ?ResourceGroupTags,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ResourceGroupList = vec<ResourceGroup>;

class ResourceGroupTag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ResourceGroupTags = vec<ResourceGroupTag>;

type RuleName = string;

type RuleNameList = vec<RuleName>;

class RulesPackage {
  public ?Arn $arn;
  public ?Text $description;
  public ?RulesPackageName $name;
  public ?ProviderName $provider;
  public ?Version $version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'description' => ?Text,
    ?'name' => ?RulesPackageName,
    ?'provider' => ?ProviderName,
    ?'version' => ?Version,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->provider = $s['provider'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type RulesPackageList = vec<RulesPackage>;

type RulesPackageName = string;

class Scope {
  public ?ScopeType $key;
  public ?ScopeValue $value;

  public function __construct(shape(
    ?'key' => ?ScopeType,
    ?'value' => ?ScopeValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ScopeList = vec<Scope>;

type ScopeType = string;

type ScopeValue = string;

class SecurityGroup {
  public ?Text $group_id;
  public ?Text $group_name;

  public function __construct(shape(
    ?'group_id' => ?Text,
    ?'group_name' => ?Text,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type SecurityGroups = vec<SecurityGroup>;

type ServiceName = string;

class ServiceTemporarilyUnavailableException {
  public ?Bool $can_retry;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->message = $s['message'] ?? '';
  }
}

class SetTagsForResourceRequest {
  public ?Arn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type Severity = string;

type SeverityList = vec<Severity>;

class StartAssessmentRunRequest {
  public ?AssessmentRunName $assessment_run_name;
  public ?Arn $assessment_template_arn;

  public function __construct(shape(
    ?'assessment_run_name' => ?AssessmentRunName,
    ?'assessment_template_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_run_name = $s['assessment_run_name'] ?? '';
    $this->assessment_template_arn = $s['assessment_template_arn'] ?? '';
  }
}

class StartAssessmentRunResponse {
  public ?Arn $assessment_run_arn;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
  }
}

type StopAction = string;

class StopAssessmentRunRequest {
  public ?Arn $assessment_run_arn;
  public ?StopAction $stop_action;

  public function __construct(shape(
    ?'assessment_run_arn' => ?Arn,
    ?'stop_action' => ?StopAction,
  ) $s = shape()) {
    $this->assessment_run_arn = $s['assessment_run_arn'] ?? '';
    $this->stop_action = $s['stop_action'] ?? '';
  }
}

class SubscribeToEventRequest {
  public ?InspectorEvent $event;
  public ?Arn $resource_arn;
  public ?Arn $topic_arn;

  public function __construct(shape(
    ?'event' => ?InspectorEvent,
    ?'resource_arn' => ?Arn,
    ?'topic_arn' => ?Arn,
  ) $s = shape()) {
    $this->event = $s['event'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class Subscription {
  public ?EventSubscriptionList $event_subscriptions;
  public ?Arn $resource_arn;
  public ?Arn $topic_arn;

  public function __construct(shape(
    ?'event_subscriptions' => ?EventSubscriptionList,
    ?'resource_arn' => ?Arn,
    ?'topic_arn' => ?Arn,
  ) $s = shape()) {
    $this->event_subscriptions = $s['event_subscriptions'] ?? vec[];
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

type SubscriptionList = vec<Subscription>;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagList = vec<Tag>;

type TagValue = string;

type Tags = vec<Tag>;

class TelemetryMetadata {
  public ?Long $count;
  public ?Long $data_size;
  public ?MessageType $message_type;

  public function __construct(shape(
    ?'count' => ?Long,
    ?'data_size' => ?Long,
    ?'message_type' => ?MessageType,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->data_size = $s['data_size'] ?? 0;
    $this->message_type = $s['message_type'] ?? '';
  }
}

type TelemetryMetadataList = vec<TelemetryMetadata>;

type Text = string;

type Timestamp = int;

class TimestampRange {
  public ?Timestamp $begin_date;
  public ?Timestamp $end_date;

  public function __construct(shape(
    ?'begin_date' => ?Timestamp,
    ?'end_date' => ?Timestamp,
  ) $s = shape()) {
    $this->begin_date = $s['begin_date'] ?? 0;
    $this->end_date = $s['end_date'] ?? 0;
  }
}

type UUID = string;

class UnsubscribeFromEventRequest {
  public ?InspectorEvent $event;
  public ?Arn $resource_arn;
  public ?Arn $topic_arn;

  public function __construct(shape(
    ?'event' => ?InspectorEvent,
    ?'resource_arn' => ?Arn,
    ?'topic_arn' => ?Arn,
  ) $s = shape()) {
    $this->event = $s['event'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->topic_arn = $s['topic_arn'] ?? '';
  }
}

class UnsupportedFeatureException {
  public ?Bool $can_retry;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'can_retry' => ?Bool,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->can_retry = $s['can_retry'] ?? false;
    $this->message = $s['message'] ?? '';
  }
}

class UpdateAssessmentTargetRequest {
  public ?Arn $assessment_target_arn;
  public ?AssessmentTargetName $assessment_target_name;
  public ?Arn $resource_group_arn;

  public function __construct(shape(
    ?'assessment_target_arn' => ?Arn,
    ?'assessment_target_name' => ?AssessmentTargetName,
    ?'resource_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->assessment_target_arn = $s['assessment_target_arn'] ?? '';
    $this->assessment_target_name = $s['assessment_target_name'] ?? '';
    $this->resource_group_arn = $s['resource_group_arn'] ?? '';
  }
}

type Url = string;

type UserAttributeKeyList = vec<AttributeKey>;

type UserAttributeList = vec<Attribute>;

type Version = string;

