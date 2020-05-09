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

class AccessDeniedErrorCode {
}

class AccessDeniedException {
  public Bool $can_retry;
  public AccessDeniedErrorCode $error_code;
  public ErrorMessage $message;
}

class AddAttributesToFindingsRequest {
  public UserAttributeList $attributes;
  public AddRemoveAttributesFindingArnList $finding_arns;
}

class AddAttributesToFindingsResponse {
  public FailedItems $failed_items;
}

class AddRemoveAttributesFindingArnList {
}

class AgentAlreadyRunningAssessment {
  public AgentId $agent_id;
  public Arn $assessment_run_arn;
}

class AgentAlreadyRunningAssessmentList {
}

class AgentFilter {
  public AgentHealthCodeList $agent_health_codes;
  public AgentHealthList $agent_healths;
}

class AgentHealth {
}

class AgentHealthCode {
}

class AgentHealthCodeList {
}

class AgentHealthList {
}

class AgentId {
}

class AgentIdList {
}

class AgentPreview {
  public AgentHealth $agent_health;
  public AgentId $agent_id;
  public AgentVersion $agent_version;
  public AutoScalingGroup $auto_scaling_group;
  public Hostname $hostname;
  public Ipv4Address $ipv_4_address;
  public KernelVersion $kernel_version;
  public OperatingSystem $operating_system;
}

class AgentPreviewList {
}

class AgentVersion {
}

class AgentsAlreadyRunningAssessmentException {
  public AgentAlreadyRunningAssessmentList $agents;
  public Bool $agents_truncated;
  public Bool $can_retry;
  public ErrorMessage $message;
}

class AmiId {
}

class Arn {
}

class ArnCount {
}

class AssessmentRulesPackageArnList {
}

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
}

class AssessmentRunAgent {
  public AgentHealth $agent_health;
  public AgentHealthCode $agent_health_code;
  public Message $agent_health_details;
  public AgentId $agent_id;
  public Arn $assessment_run_arn;
  public AutoScalingGroup $auto_scaling_group;
  public TelemetryMetadataList $telemetry_metadata;
}

class AssessmentRunAgentList {
}

class AssessmentRunDuration {
}

class AssessmentRunFilter {
  public TimestampRange $completion_time_range;
  public DurationRange $duration_range;
  public NamePattern $name_pattern;
  public FilterRulesPackageArnList $rules_package_arns;
  public TimestampRange $start_time_range;
  public TimestampRange $state_change_time_range;
  public AssessmentRunStateList $states;
}

class AssessmentRunFindingCounts {
}

class AssessmentRunInProgressArnList {
}

class AssessmentRunInProgressException {
  public AssessmentRunInProgressArnList $assessment_run_arns;
  public Bool $assessment_run_arns_truncated;
  public Bool $can_retry;
  public ErrorMessage $message;
}

class AssessmentRunList {
}

class AssessmentRunName {
}

class AssessmentRunNotification {
  public Timestamp $date;
  public Bool $error;
  public InspectorEvent $event;
  public Message $message;
  public AssessmentRunNotificationSnsStatusCode $sns_publish_status_code;
  public Arn $sns_topic_arn;
}

class AssessmentRunNotificationList {
}

class AssessmentRunNotificationSnsStatusCode {
}

class AssessmentRunState {
}

class AssessmentRunStateChange {
  public AssessmentRunState $state;
  public Timestamp $state_changed_at;
}

class AssessmentRunStateChangeList {
}

class AssessmentRunStateList {
}

class AssessmentTarget {
  public Arn $arn;
  public Timestamp $created_at;
  public AssessmentTargetName $name;
  public Arn $resource_group_arn;
  public Timestamp $updated_at;
}

class AssessmentTargetFilter {
  public NamePattern $assessment_target_name_pattern;
}

class AssessmentTargetList {
}

class AssessmentTargetName {
}

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
}

class AssessmentTemplateFilter {
  public DurationRange $duration_range;
  public NamePattern $name_pattern;
  public FilterRulesPackageArnList $rules_package_arns;
}

class AssessmentTemplateList {
}

class AssessmentTemplateName {
}

class AssessmentTemplateRulesPackageArnList {
}

class AssetAttributes {
  public AgentId $agent_id;
  public AmiId $ami_id;
  public AutoScalingGroup $auto_scaling_group;
  public Hostname $hostname;
  public Ipv4AddressList $ipv_4_addresses;
  public NetworkInterfaces $network_interfaces;
  public NumericVersion $schema_version;
  public Tags $tags;
}

class AssetType {
}

class Attribute {
  public AttributeKey $key;
  public AttributeValue $value;
}

class AttributeKey {
}

class AttributeList {
}

class AttributeValue {
}

class AutoScalingGroup {
}

class AutoScalingGroupList {
}

class BatchDescribeArnList {
}

class BatchDescribeExclusionsArnList {
}

class Bool {
}

class CreateAssessmentTargetRequest {
  public AssessmentTargetName $assessment_target_name;
  public Arn $resource_group_arn;
}

class CreateAssessmentTargetResponse {
  public Arn $assessment_target_arn;
}

class CreateAssessmentTemplateRequest {
  public Arn $assessment_target_arn;
  public AssessmentTemplateName $assessment_template_name;
  public AssessmentRunDuration $duration_in_seconds;
  public AssessmentTemplateRulesPackageArnList $rules_package_arns;
  public UserAttributeList $user_attributes_for_findings;
}

class CreateAssessmentTemplateResponse {
  public Arn $assessment_template_arn;
}

class CreateExclusionsPreviewRequest {
  public Arn $assessment_template_arn;
}

class CreateExclusionsPreviewResponse {
  public UUID $preview_token;
}

class CreateResourceGroupRequest {
  public ResourceGroupTags $resource_group_tags;
}

class CreateResourceGroupResponse {
  public Arn $resource_group_arn;
}

class DeleteAssessmentRunRequest {
  public Arn $assessment_run_arn;
}

class DeleteAssessmentTargetRequest {
  public Arn $assessment_target_arn;
}

class DeleteAssessmentTemplateRequest {
  public Arn $assessment_template_arn;
}

class DescribeAssessmentRunsRequest {
  public BatchDescribeArnList $assessment_run_arns;
}

class DescribeAssessmentRunsResponse {
  public AssessmentRunList $assessment_runs;
  public FailedItems $failed_items;
}

class DescribeAssessmentTargetsRequest {
  public BatchDescribeArnList $assessment_target_arns;
}

class DescribeAssessmentTargetsResponse {
  public AssessmentTargetList $assessment_targets;
  public FailedItems $failed_items;
}

class DescribeAssessmentTemplatesRequest {
  public BatchDescribeArnList $assessment_template_arns;
}

class DescribeAssessmentTemplatesResponse {
  public AssessmentTemplateList $assessment_templates;
  public FailedItems $failed_items;
}

class DescribeCrossAccountAccessRoleResponse {
  public Timestamp $registered_at;
  public Arn $role_arn;
  public Bool $valid;
}

class DescribeExclusionsRequest {
  public BatchDescribeExclusionsArnList $exclusion_arns;
  public Locale $locale;
}

class DescribeExclusionsResponse {
  public ExclusionMap $exclusions;
  public FailedItems $failed_items;
}

class DescribeFindingsRequest {
  public BatchDescribeArnList $finding_arns;
  public Locale $locale;
}

class DescribeFindingsResponse {
  public FailedItems $failed_items;
  public FindingList $findings;
}

class DescribeResourceGroupsRequest {
  public BatchDescribeArnList $resource_group_arns;
}

class DescribeResourceGroupsResponse {
  public FailedItems $failed_items;
  public ResourceGroupList $resource_groups;
}

class DescribeRulesPackagesRequest {
  public Locale $locale;
  public BatchDescribeArnList $rules_package_arns;
}

class DescribeRulesPackagesResponse {
  public FailedItems $failed_items;
  public RulesPackageList $rules_packages;
}

class DurationRange {
  public AssessmentRunDuration $max_seconds;
  public AssessmentRunDuration $min_seconds;
}

class ErrorMessage {
}

class EventSubscription {
  public InspectorEvent $event;
  public Timestamp $subscribed_at;
}

class EventSubscriptionList {
}

class Exclusion {
  public Arn $arn;
  public AttributeList $attributes;
  public Text $description;
  public Text $recommendation;
  public ScopeList $scopes;
  public Text $title;
}

class ExclusionMap {
}

class ExclusionPreview {
  public AttributeList $attributes;
  public Text $description;
  public Text $recommendation;
  public ScopeList $scopes;
  public Text $title;
}

class ExclusionPreviewList {
}

class FailedItemDetails {
  public FailedItemErrorCode $failure_code;
  public Bool $retryable;
}

class FailedItemErrorCode {
}

class FailedItems {
}

class FilterRulesPackageArnList {
}

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
}

class FindingCount {
}

class FindingFilter {
  public AgentIdList $agent_ids;
  public AttributeList $attributes;
  public AutoScalingGroupList $auto_scaling_groups;
  public TimestampRange $creation_time_range;
  public RuleNameList $rule_names;
  public FilterRulesPackageArnList $rules_package_arns;
  public SeverityList $severities;
  public AttributeList $user_attributes;
}

class FindingId {
}

class FindingList {
}

class GetAssessmentReportRequest {
  public Arn $assessment_run_arn;
  public ReportFileFormat $report_file_format;
  public ReportType $report_type;
}

class GetAssessmentReportResponse {
  public ReportStatus $status;
  public Url $url;
}

class GetExclusionsPreviewRequest {
  public Arn $assessment_template_arn;
  public Locale $locale;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
  public UUID $preview_token;
}

class GetExclusionsPreviewResponse {
  public ExclusionPreviewList $exclusion_previews;
  public PaginationToken $next_token;
  public PreviewStatus $preview_status;
}

class GetTelemetryMetadataRequest {
  public Arn $assessment_run_arn;
}

class GetTelemetryMetadataResponse {
  public TelemetryMetadataList $telemetry_metadata;
}

class Hostname {
}

class InspectorEvent {
}

class InspectorServiceAttributes {
  public Arn $assessment_run_arn;
  public Arn $rules_package_arn;
  public NumericVersion $schema_version;
}

class InternalException {
  public Bool $can_retry;
  public ErrorMessage $message;
}

class InvalidCrossAccountRoleErrorCode {
}

class InvalidCrossAccountRoleException {
  public Bool $can_retry;
  public InvalidCrossAccountRoleErrorCode $error_code;
  public ErrorMessage $message;
}

class InvalidInputErrorCode {
}

class InvalidInputException {
  public Bool $can_retry;
  public InvalidInputErrorCode $error_code;
  public ErrorMessage $message;
}

class IocConfidence {
}

class Ipv4Address {
}

class Ipv4AddressList {
}

class Ipv6Addresses {
}

class KernelVersion {
}

class LimitExceededErrorCode {
}

class LimitExceededException {
  public Bool $can_retry;
  public LimitExceededErrorCode $error_code;
  public ErrorMessage $message;
}

class ListAssessmentRunAgentsRequest {
  public Arn $assessment_run_arn;
  public AgentFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListAssessmentRunAgentsResponse {
  public AssessmentRunAgentList $assessment_run_agents;
  public PaginationToken $next_token;
}

class ListAssessmentRunsRequest {
  public ListParentArnList $assessment_template_arns;
  public AssessmentRunFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListAssessmentRunsResponse {
  public ListReturnedArnList $assessment_run_arns;
  public PaginationToken $next_token;
}

class ListAssessmentTargetsRequest {
  public AssessmentTargetFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListAssessmentTargetsResponse {
  public ListReturnedArnList $assessment_target_arns;
  public PaginationToken $next_token;
}

class ListAssessmentTemplatesRequest {
  public ListParentArnList $assessment_target_arns;
  public AssessmentTemplateFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListAssessmentTemplatesResponse {
  public ListReturnedArnList $assessment_template_arns;
  public PaginationToken $next_token;
}

class ListEventSubscriptionsMaxResults {
}

class ListEventSubscriptionsRequest {
  public ListEventSubscriptionsMaxResults $max_results;
  public PaginationToken $next_token;
  public Arn $resource_arn;
}

class ListEventSubscriptionsResponse {
  public PaginationToken $next_token;
  public SubscriptionList $subscriptions;
}

class ListExclusionsRequest {
  public Arn $assessment_run_arn;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListExclusionsResponse {
  public ListReturnedArnList $exclusion_arns;
  public PaginationToken $next_token;
}

class ListFindingsRequest {
  public ListParentArnList $assessment_run_arns;
  public FindingFilter $filter;
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListFindingsResponse {
  public ListReturnedArnList $finding_arns;
  public PaginationToken $next_token;
}

class ListMaxResults {
}

class ListParentArnList {
}

class ListReturnedArnList {
}

class ListRulesPackagesRequest {
  public ListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListRulesPackagesResponse {
  public PaginationToken $next_token;
  public ListReturnedArnList $rules_package_arns;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class Locale {
}

class Long {
}

class Message {
}

class MessageType {
}

class NamePattern {
}

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
}

class NetworkInterfaces {
}

class NoSuchEntityErrorCode {
}

class NoSuchEntityException {
  public Bool $can_retry;
  public NoSuchEntityErrorCode $error_code;
  public ErrorMessage $message;
}

class NumericSeverity {
}

class NumericVersion {
}

class OperatingSystem {
}

class PaginationToken {
}

class PreviewAgentsMaxResults {
}

class PreviewAgentsRequest {
  public PreviewAgentsMaxResults $max_results;
  public PaginationToken $next_token;
  public Arn $preview_agents_arn;
}

class PreviewAgentsResponse {
  public AgentPreviewList $agent_previews;
  public PaginationToken $next_token;
}

class PreviewGenerationInProgressException {
  public ErrorMessage $message;
}

class PreviewStatus {
}

class PrivateIp {
  public Text $private_dns_name;
  public Text $private_ip_address;
}

class PrivateIpAddresses {
}

class ProviderName {
}

class RegisterCrossAccountAccessRoleRequest {
  public Arn $role_arn;
}

class RemoveAttributesFromFindingsRequest {
  public UserAttributeKeyList $attribute_keys;
  public AddRemoveAttributesFindingArnList $finding_arns;
}

class RemoveAttributesFromFindingsResponse {
  public FailedItems $failed_items;
}

class ReportFileFormat {
}

class ReportStatus {
}

class ReportType {
}

class ResourceGroup {
  public Arn $arn;
  public Timestamp $created_at;
  public ResourceGroupTags $tags;
}

class ResourceGroupList {
}

class ResourceGroupTag {
  public TagKey $key;
  public TagValue $value;
}

class ResourceGroupTags {
}

class RuleName {
}

class RuleNameList {
}

class RulesPackage {
  public Arn $arn;
  public Text $description;
  public RulesPackageName $name;
  public ProviderName $provider;
  public Version $version;
}

class RulesPackageList {
}

class RulesPackageName {
}

class Scope {
  public ScopeType $key;
  public ScopeValue $value;
}

class ScopeList {
}

class ScopeType {
}

class ScopeValue {
}

class SecurityGroup {
  public Text $group_id;
  public Text $group_name;
}

class SecurityGroups {
}

class ServiceName {
}

class ServiceTemporarilyUnavailableException {
  public Bool $can_retry;
  public ErrorMessage $message;
}

class SetTagsForResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class Severity {
}

class SeverityList {
}

class StartAssessmentRunRequest {
  public AssessmentRunName $assessment_run_name;
  public Arn $assessment_template_arn;
}

class StartAssessmentRunResponse {
  public Arn $assessment_run_arn;
}

class StopAction {
}

class StopAssessmentRunRequest {
  public Arn $assessment_run_arn;
  public StopAction $stop_action;
}

class SubscribeToEventRequest {
  public InspectorEvent $event;
  public Arn $resource_arn;
  public Arn $topic_arn;
}

class Subscription {
  public EventSubscriptionList $event_subscriptions;
  public Arn $resource_arn;
  public Arn $topic_arn;
}

class SubscriptionList {
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

class Tags {
}

class TelemetryMetadata {
  public Long $count;
  public Long $data_size;
  public MessageType $message_type;
}

class TelemetryMetadataList {
}

class Text {
}

class Timestamp {
}

class TimestampRange {
  public Timestamp $begin_date;
  public Timestamp $end_date;
}

class UUID {
}

class UnsubscribeFromEventRequest {
  public InspectorEvent $event;
  public Arn $resource_arn;
  public Arn $topic_arn;
}

class UnsupportedFeatureException {
  public Bool $can_retry;
  public ErrorMessage $message;
}

class UpdateAssessmentTargetRequest {
  public Arn $assessment_target_arn;
  public AssessmentTargetName $assessment_target_name;
  public Arn $resource_group_arn;
}

class Url {
}

class UserAttributeKeyList {
}

class UserAttributeList {
}

class Version {
}

