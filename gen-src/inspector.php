<?hh // strict
namespace slack\aws\inspector;

interface Inspector {
  public function DeleteAssessmentTarget(DeleteAssessmentTargetRequest) Awaitable<Errors\Error>;
  public function DescribeRulesPackages(DescribeRulesPackagesRequest) Awaitable<Errors\Result<DescribeRulesPackagesResponse>>;
  public function CreateAssessmentTemplate(CreateAssessmentTemplateRequest) Awaitable<Errors\Result<CreateAssessmentTemplateResponse>>;
  public function CreateResourceGroup(CreateResourceGroupRequest) Awaitable<Errors\Result<CreateResourceGroupResponse>>;
  public function ListAssessmentRunAgents(ListAssessmentRunAgentsRequest) Awaitable<Errors\Result<ListAssessmentRunAgentsResponse>>;
  public function PreviewAgents(PreviewAgentsRequest) Awaitable<Errors\Result<PreviewAgentsResponse>>;
  public function StartAssessmentRun(StartAssessmentRunRequest) Awaitable<Errors\Result<StartAssessmentRunResponse>>;
  public function UpdateAssessmentTarget(UpdateAssessmentTargetRequest) Awaitable<Errors\Error>;
  public function DeleteAssessmentRun(DeleteAssessmentRunRequest) Awaitable<Errors\Error>;
  public function DescribeAssessmentTemplates(DescribeAssessmentTemplatesRequest) Awaitable<Errors\Result<DescribeAssessmentTemplatesResponse>>;
  public function ListRulesPackages(ListRulesPackagesRequest) Awaitable<Errors\Result<ListRulesPackagesResponse>>;
  public function CreateExclusionsPreview(CreateExclusionsPreviewRequest) Awaitable<Errors\Result<CreateExclusionsPreviewResponse>>;
  public function DescribeCrossAccountAccessRole() Awaitable<Errors\Result<DescribeCrossAccountAccessRoleResponse>>;
  public function ListFindings(ListFindingsRequest) Awaitable<Errors\Result<ListFindingsResponse>>;
  public function SetTagsForResource(SetTagsForResourceRequest) Awaitable<Errors\Error>;
  public function StopAssessmentRun(StopAssessmentRunRequest) Awaitable<Errors\Error>;
  public function GetAssessmentReport(GetAssessmentReportRequest) Awaitable<Errors\Result<GetAssessmentReportResponse>>;
  public function ListAssessmentTargets(ListAssessmentTargetsRequest) Awaitable<Errors\Result<ListAssessmentTargetsResponse>>;
  public function DescribeAssessmentTargets(DescribeAssessmentTargetsRequest) Awaitable<Errors\Result<DescribeAssessmentTargetsResponse>>;
  public function DescribeResourceGroups(DescribeResourceGroupsRequest) Awaitable<Errors\Result<DescribeResourceGroupsResponse>>;
  public function GetExclusionsPreview(GetExclusionsPreviewRequest) Awaitable<Errors\Result<GetExclusionsPreviewResponse>>;
  public function GetTelemetryMetadata(GetTelemetryMetadataRequest) Awaitable<Errors\Result<GetTelemetryMetadataResponse>>;
  public function ListAssessmentTemplates(ListAssessmentTemplatesRequest) Awaitable<Errors\Result<ListAssessmentTemplatesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function AddAttributesToFindings(AddAttributesToFindingsRequest) Awaitable<Errors\Result<AddAttributesToFindingsResponse>>;
  public function DescribeAssessmentRuns(DescribeAssessmentRunsRequest) Awaitable<Errors\Result<DescribeAssessmentRunsResponse>>;
  public function CreateAssessmentTarget(CreateAssessmentTargetRequest) Awaitable<Errors\Result<CreateAssessmentTargetResponse>>;
  public function DescribeExclusions(DescribeExclusionsRequest) Awaitable<Errors\Result<DescribeExclusionsResponse>>;
  public function ListAssessmentRuns(ListAssessmentRunsRequest) Awaitable<Errors\Result<ListAssessmentRunsResponse>>;
  public function ListEventSubscriptions(ListEventSubscriptionsRequest) Awaitable<Errors\Result<ListEventSubscriptionsResponse>>;
  public function ListExclusions(ListExclusionsRequest) Awaitable<Errors\Result<ListExclusionsResponse>>;
  public function RemoveAttributesFromFindings(RemoveAttributesFromFindingsRequest) Awaitable<Errors\Result<RemoveAttributesFromFindingsResponse>>;
  public function DeleteAssessmentTemplate(DeleteAssessmentTemplateRequest) Awaitable<Errors\Error>;
  public function DescribeFindings(DescribeFindingsRequest) Awaitable<Errors\Result<DescribeFindingsResponse>>;
  public function UnsubscribeFromEvent(UnsubscribeFromEventRequest) Awaitable<Errors\Error>;
  public function RegisterCrossAccountAccessRole(RegisterCrossAccountAccessRoleRequest) Awaitable<Errors\Error>;
  public function SubscribeToEvent(SubscribeToEventRequest) Awaitable<Errors\Error>;
}

class Finding {
  public AttributeList $attributes;
  public Timestamp $created_at;
  public Arn $arn;
  public Text $recommendation;
  public Severity $severity;
  public NumericSeverity $numeric_severity;
  public Bool $indicator_of_compromise;
  public ServiceName $service;
  public Text $title;
  public IocConfidence $confidence;
  public Timestamp $updated_at;
  public AssetType $asset_type;
  public AssetAttributes $asset_attributes;
  public NumericVersion $schema_version;
  public InspectorServiceAttributes $service_attributes;
  public FindingId $id;
  public Text $description;
  public UserAttributeList $user_attributes;
}

class FindingFilter {
  public AgentIdList $agent_ids;
  public AutoScalingGroupList $auto_scaling_groups;
  public RuleNameList $rule_names;
  public SeverityList $severities;
  public FilterRulesPackageArnList $rules_package_arns;
  public AttributeList $attributes;
  public AttributeList $user_attributes;
  public TimestampRange $creation_time_range;
}

class ReportStatus {
}

class AssessmentRunNotification {
  public Bool $error;
  public Arn $sns_topic_arn;
  public AssessmentRunNotificationSnsStatusCode $sns_publish_status_code;
  public Timestamp $date;
  public InspectorEvent $event;
  public Message $message;
}

class Version {
}

class AssessmentRunStateList {
}

class LimitExceededErrorCode {
}

class ListAssessmentRunsRequest {
  public ListParentArnList $assessment_template_arns;
  public AssessmentRunFilter $filter;
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
}

class AgentHealthCode {
}

class AutoScalingGroup {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class UUID {
}

class Arn {
}

class ErrorMessage {
}

class ResourceGroupTag {
  public TagKey $key;
  public TagValue $value;
}

class Scope {
  public ScopeValue $value;
  public ScopeType $key;
}

class ServiceTemporarilyUnavailableException {
  public ErrorMessage $message;
  public Bool $can_retry;
}

class DescribeFindingsRequest {
  public BatchDescribeArnList $finding_arns;
  public Locale $locale;
}

class DurationRange {
  public AssessmentRunDuration $min_seconds;
  public AssessmentRunDuration $max_seconds;
}

class SeverityList {
}

class OperatingSystem {
}

class PreviewAgentsResponse {
  public AgentPreviewList $agent_previews;
  public PaginationToken $next_token;
}

class AccessDeniedException {
  public ErrorMessage $message;
  public AccessDeniedErrorCode $error_code;
  public Bool $can_retry;
}

class AssessmentTargetList {
}

class DescribeAssessmentTargetsRequest {
  public BatchDescribeArnList $assessment_target_arns;
}

class ExclusionPreviewList {
}

class FindingCount {
}

class InternalException {
  public Bool $can_retry;
  public ErrorMessage $message;
}

class ResourceGroupTags {
}

class ExclusionMap {
}

class GetAssessmentReportRequest {
  public Arn $assessment_run_arn;
  public ReportFileFormat $report_file_format;
  public ReportType $report_type;
}

class ListAssessmentTemplatesResponse {
  public ListReturnedArnList $assessment_template_arns;
  public PaginationToken $next_token;
}

class Message {
}

class ProviderName {
}

class TelemetryMetadata {
  public Long $data_size;
  public MessageType $message_type;
  public Long $count;
}

class InvalidCrossAccountRoleException {
  public ErrorMessage $message;
  public InvalidCrossAccountRoleErrorCode $error_code;
  public Bool $can_retry;
}

class ListFindingsResponse {
  public ListReturnedArnList $finding_arns;
  public PaginationToken $next_token;
}

class AssessmentRunInProgressException {
  public Bool $can_retry;
  public ErrorMessage $message;
  public AssessmentRunInProgressArnList $assessment_run_arns;
  public Bool $assessment_run_arns_truncated;
}

class InvalidInputErrorCode {
}

class ListEventSubscriptionsRequest {
  public ListEventSubscriptionsMaxResults $max_results;
  public Arn $resource_arn;
  public PaginationToken $next_token;
}

class SubscribeToEventRequest {
  public Arn $resource_arn;
  public InspectorEvent $event;
  public Arn $topic_arn;
}

class UnsupportedFeatureException {
  public ErrorMessage $message;
  public Bool $can_retry;
}

class AmiId {
}

class Locale {
}

class AssessmentRunAgent {
  public AutoScalingGroup $auto_scaling_group;
  public TelemetryMetadataList $telemetry_metadata;
  public AgentId $agent_id;
  public Arn $assessment_run_arn;
  public AgentHealth $agent_health;
  public AgentHealthCode $agent_health_code;
  public Message $agent_health_details;
}

class NumericSeverity {
}

class ScopeType {
}

class ScopeValue {
}

class StopAssessmentRunRequest {
  public Arn $assessment_run_arn;
  public StopAction $stop_action;
}

class AgentIdList {
}

class AssessmentRunStateChange {
  public Timestamp $state_changed_at;
  public AssessmentRunState $state;
}

class AssessmentTemplateName {
}

class Ipv4Address {
}

class ListReturnedArnList {
}

class PreviewStatus {
}

class DescribeRulesPackagesResponse {
  public RulesPackageList $rules_packages;
  public FailedItems $failed_items;
}

class PreviewAgentsMaxResults {
}

class ReportFileFormat {
}

class ResourceGroupList {
}

class Text {
}

class InspectorServiceAttributes {
  public Arn $rules_package_arn;
  public NumericVersion $schema_version;
  public Arn $assessment_run_arn;
}

class MessageType {
}

class CreateAssessmentTargetResponse {
  public Arn $assessment_target_arn;
}

class FailedItemDetails {
  public FailedItemErrorCode $failure_code;
  public Bool $retryable;
}

class ListMaxResults {
}

class ServiceName {
}

class AgentVersion {
}

class AssessmentRunInProgressArnList {
}

class ResourceGroup {
  public Arn $arn;
  public ResourceGroupTags $tags;
  public Timestamp $created_at;
}

class Subscription {
  public EventSubscriptionList $event_subscriptions;
  public Arn $resource_arn;
  public Arn $topic_arn;
}

class SubscriptionList {
}

class GetExclusionsPreviewResponse {
  public ExclusionPreviewList $exclusion_previews;
  public PaginationToken $next_token;
  public PreviewStatus $preview_status;
}

class ListAssessmentRunsResponse {
  public ListReturnedArnList $assessment_run_arns;
  public PaginationToken $next_token;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class AgentFilter {
  public AgentHealthList $agent_healths;
  public AgentHealthCodeList $agent_health_codes;
}

class AssessmentTargetName {
}

class BatchDescribeArnList {
}

class KernelVersion {
}

class RegisterCrossAccountAccessRoleRequest {
  public Arn $role_arn;
}

class AssessmentRunStateChangeList {
}

class CreateResourceGroupRequest {
  public ResourceGroupTags $resource_group_tags;
}

class NamePattern {
}

class AddAttributesToFindingsRequest {
  public UserAttributeList $attributes;
  public AddRemoveAttributesFindingArnList $finding_arns;
}

class AssessmentTemplate {
  public Arn $arn;
  public AssessmentTemplateName $name;
  public AssessmentRunDuration $duration_in_seconds;
  public UserAttributeList $user_attributes_for_findings;
  public Timestamp $created_at;
  public Arn $assessment_target_arn;
  public AssessmentTemplateRulesPackageArnList $rules_package_arns;
  public Arn $last_assessment_run_arn;
  public ArnCount $assessment_run_count;
}

class DescribeResourceGroupsResponse {
  public ResourceGroupList $resource_groups;
  public FailedItems $failed_items;
}

class Ipv6Addresses {
}

class AssessmentRunAgentList {
}

class AssetAttributes {
  public AutoScalingGroup $auto_scaling_group;
  public AmiId $ami_id;
  public Hostname $hostname;
  public Ipv4AddressList $ipv_4_addresses;
  public Tags $tags;
  public NetworkInterfaces $network_interfaces;
  public NumericVersion $schema_version;
  public AgentId $agent_id;
}

class UserAttributeKeyList {
}

class AssessmentRulesPackageArnList {
}

class AssessmentRunList {
}

class Tags {
}

class RemoveAttributesFromFindingsRequest {
  public UserAttributeKeyList $attribute_keys;
  public AddRemoveAttributesFindingArnList $finding_arns;
}

class AgentAlreadyRunningAssessment {
  public AgentId $agent_id;
  public Arn $assessment_run_arn;
}

class AgentsAlreadyRunningAssessmentException {
  public ErrorMessage $message;
  public AgentAlreadyRunningAssessmentList $agents;
  public Bool $agents_truncated;
  public Bool $can_retry;
}

class ArnCount {
}

class DescribeExclusionsRequest {
  public BatchDescribeExclusionsArnList $exclusion_arns;
  public Locale $locale;
}

class ListAssessmentTargetsResponse {
  public ListReturnedArnList $assessment_target_arns;
  public PaginationToken $next_token;
}

class AgentAlreadyRunningAssessmentList {
}

class AssessmentRunNotificationSnsStatusCode {
}

class DescribeFindingsResponse {
  public FindingList $findings;
  public FailedItems $failed_items;
}

class UserAttributeList {
}

class AssessmentRunName {
}

class AttributeValue {
}

class DescribeResourceGroupsRequest {
  public BatchDescribeArnList $resource_group_arns;
}

class FailedItems {
}

class RulesPackageName {
}

class StopAction {
}

class AssessmentRunDuration {
}

class ListExclusionsRequest {
  public Arn $assessment_run_arn;
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
}

class CreateAssessmentTargetRequest {
  public AssessmentTargetName $assessment_target_name;
  public Arn $resource_group_arn;
}

class ListAssessmentRunAgentsRequest {
  public Arn $assessment_run_arn;
  public AgentFilter $filter;
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
}

class ListExclusionsResponse {
  public PaginationToken $next_token;
  public ListReturnedArnList $exclusion_arns;
}

class CreateAssessmentTemplateResponse {
  public Arn $assessment_template_arn;
}

class CreateExclusionsPreviewResponse {
  public UUID $preview_token;
}

class EventSubscription {
  public InspectorEvent $event;
  public Timestamp $subscribed_at;
}

class AgentHealthList {
}

class PreviewAgentsRequest {
  public Arn $preview_agents_arn;
  public PaginationToken $next_token;
  public PreviewAgentsMaxResults $max_results;
}

class RulesPackageList {
}

class Timestamp {
}

class BatchDescribeExclusionsArnList {
}

class AutoScalingGroupList {
}

class PrivateIpAddresses {
}

class RuleName {
}

class NetworkInterfaces {
}

class TagValue {
}

class AssessmentTemplateFilter {
  public NamePattern $name_pattern;
  public DurationRange $duration_range;
  public FilterRulesPackageArnList $rules_package_arns;
}

class DescribeAssessmentRunsResponse {
  public AssessmentRunList $assessment_runs;
  public FailedItems $failed_items;
}

class FindingId {
}

class PrivateIp {
  public Text $private_dns_name;
  public Text $private_ip_address;
}

class StartAssessmentRunResponse {
  public Arn $assessment_run_arn;
}

class NoSuchEntityErrorCode {
}

class NumericVersion {
}

class TelemetryMetadataList {
}

class ListRulesPackagesResponse {
  public ListReturnedArnList $rules_package_arns;
  public PaginationToken $next_token;
}

class NoSuchEntityException {
  public ErrorMessage $message;
  public NoSuchEntityErrorCode $error_code;
  public Bool $can_retry;
}

class AgentId {
}

class RulesPackage {
  public ProviderName $provider;
  public Text $description;
  public Arn $arn;
  public RulesPackageName $name;
  public Version $version;
}

class TagList {
}

class TimestampRange {
  public Timestamp $begin_date;
  public Timestamp $end_date;
}

class Bool {
}

class DescribeAssessmentTemplatesResponse {
  public AssessmentTemplateList $assessment_templates;
  public FailedItems $failed_items;
}

class DescribeCrossAccountAccessRoleResponse {
  public Arn $role_arn;
  public Bool $valid;
  public Timestamp $registered_at;
}

class FilterRulesPackageArnList {
}

class ListRulesPackagesRequest {
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
}

class Long {
}

class AccessDeniedErrorCode {
}

class AssessmentRunFilter {
  public FilterRulesPackageArnList $rules_package_arns;
  public TimestampRange $start_time_range;
  public TimestampRange $completion_time_range;
  public TimestampRange $state_change_time_range;
  public NamePattern $name_pattern;
  public AssessmentRunStateList $states;
  public DurationRange $duration_range;
}

class AttributeList {
}

class GetTelemetryMetadataResponse {
  public TelemetryMetadataList $telemetry_metadata;
}

class InvalidInputException {
  public Bool $can_retry;
  public ErrorMessage $message;
  public InvalidInputErrorCode $error_code;
}

class AssessmentTarget {
  public Timestamp $updated_at;
  public Arn $arn;
  public AssessmentTargetName $name;
  public Arn $resource_group_arn;
  public Timestamp $created_at;
}

class AssessmentTargetFilter {
  public NamePattern $assessment_target_name_pattern;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class AgentPreviewList {
}

class DeleteAssessmentRunRequest {
  public Arn $assessment_run_arn;
}

class DescribeAssessmentRunsRequest {
  public BatchDescribeArnList $assessment_run_arns;
}

class AddRemoveAttributesFindingArnList {
}

class AgentHealthCodeList {
}

class CreateResourceGroupResponse {
  public Arn $resource_group_arn;
}

class ListEventSubscriptionsMaxResults {
}

class ListEventSubscriptionsResponse {
  public SubscriptionList $subscriptions;
  public PaginationToken $next_token;
}

class ScopeList {
}

class AddAttributesToFindingsResponse {
  public FailedItems $failed_items;
}

class DeleteAssessmentTemplateRequest {
  public Arn $assessment_template_arn;
}

class LimitExceededException {
  public ErrorMessage $message;
  public LimitExceededErrorCode $error_code;
  public Bool $can_retry;
}

class RemoveAttributesFromFindingsResponse {
  public FailedItems $failed_items;
}

class UpdateAssessmentTargetRequest {
  public Arn $resource_group_arn;
  public Arn $assessment_target_arn;
  public AssessmentTargetName $assessment_target_name;
}

class AgentHealth {
}

class AssetType {
}

class UnsubscribeFromEventRequest {
  public Arn $resource_arn;
  public InspectorEvent $event;
  public Arn $topic_arn;
}

class AssessmentRunFindingCounts {
}

class AssessmentTemplateList {
}

class ListAssessmentRunAgentsResponse {
  public AssessmentRunAgentList $assessment_run_agents;
  public PaginationToken $next_token;
}

class PreviewGenerationInProgressException {
  public ErrorMessage $message;
}

class CreateExclusionsPreviewRequest {
  public Arn $assessment_template_arn;
}

class FindingList {
}

class SecurityGroups {
}

class AssessmentRun {
  public AssessmentRulesPackageArnList $rules_package_arns;
  public Timestamp $created_at;
  public AssessmentRunState $state;
  public Timestamp $started_at;
  public Timestamp $state_changed_at;
  public AssessmentRunFindingCounts $finding_counts;
  public Arn $arn;
  public AssessmentRunName $name;
  public UserAttributeList $user_attributes_for_findings;
  public AssessmentRunStateChangeList $state_changes;
  public AssessmentRunNotificationList $notifications;
  public Arn $assessment_template_arn;
  public AssessmentRunDuration $duration_in_seconds;
  public Timestamp $completed_at;
  public Bool $data_collected;
}

class DescribeExclusionsResponse {
  public ExclusionMap $exclusions;
  public FailedItems $failed_items;
}

class SecurityGroup {
  public Text $group_name;
  public Text $group_id;
}

class StartAssessmentRunRequest {
  public Arn $assessment_template_arn;
  public AssessmentRunName $assessment_run_name;
}

class AgentPreview {
  public AutoScalingGroup $auto_scaling_group;
  public AgentHealth $agent_health;
  public AgentVersion $agent_version;
  public OperatingSystem $operating_system;
  public KernelVersion $kernel_version;
  public Ipv4Address $ipv_4_address;
  public Hostname $hostname;
  public AgentId $agent_id;
}

class EventSubscriptionList {
}

class IocConfidence {
}

class Exclusion {
  public Arn $arn;
  public Text $title;
  public Text $description;
  public Text $recommendation;
  public ScopeList $scopes;
  public AttributeList $attributes;
}

class ListParentArnList {
}

class Url {
}

class AssessmentRunNotificationList {
}

class DescribeAssessmentTemplatesRequest {
  public BatchDescribeArnList $assessment_template_arns;
}

class ListAssessmentTemplatesRequest {
  public ListParentArnList $assessment_target_arns;
  public AssessmentTemplateFilter $filter;
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
}

class ListFindingsRequest {
  public ListParentArnList $assessment_run_arns;
  public FindingFilter $filter;
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
}

class NetworkInterface {
  public Text $vpc_id;
  public Text $private_dns_name;
  public PrivateIpAddresses $private_ip_addresses;
  public Ipv6Addresses $ipv_6_addresses;
  public SecurityGroups $security_groups;
  public Text $network_interface_id;
  public Text $subnet_id;
  public Text $private_ip_address;
  public Text $public_dns_name;
  public Text $public_ip;
}

class ReportType {
}

class DescribeAssessmentTargetsResponse {
  public FailedItems $failed_items;
  public AssessmentTargetList $assessment_targets;
}

class GetAssessmentReportResponse {
  public Url $url;
  public ReportStatus $status;
}

class ListAssessmentTargetsRequest {
  public AssessmentTargetFilter $filter;
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
}

class AssessmentRunState {
}

class AssessmentTemplateRulesPackageArnList {
}

class ExclusionPreview {
  public Text $title;
  public Text $description;
  public Text $recommendation;
  public ScopeList $scopes;
  public AttributeList $attributes;
}

class GetExclusionsPreviewRequest {
  public Arn $assessment_template_arn;
  public UUID $preview_token;
  public PaginationToken $next_token;
  public ListMaxResults $max_results;
  public Locale $locale;
}

class Severity {
}

class DeleteAssessmentTargetRequest {
  public Arn $assessment_target_arn;
}

class SetTagsForResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class Attribute {
  public AttributeValue $value;
  public AttributeKey $key;
}

class GetTelemetryMetadataRequest {
  public Arn $assessment_run_arn;
}

class InspectorEvent {
}

class InvalidCrossAccountRoleErrorCode {
}

class AttributeKey {
}

class CreateAssessmentTemplateRequest {
  public AssessmentTemplateRulesPackageArnList $rules_package_arns;
  public UserAttributeList $user_attributes_for_findings;
  public Arn $assessment_target_arn;
  public AssessmentTemplateName $assessment_template_name;
  public AssessmentRunDuration $duration_in_seconds;
}

class DescribeRulesPackagesRequest {
  public BatchDescribeArnList $rules_package_arns;
  public Locale $locale;
}

class FailedItemErrorCode {
}

class Hostname {
}

class Ipv4AddressList {
}

class PaginationToken {
}

class RuleNameList {
}

