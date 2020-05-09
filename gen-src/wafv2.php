<?hh // strict
namespace slack\aws\wafv2;

interface WAFV2 {
  public function AssociateWebACL(AssociateWebACLRequest) Awaitable<Errors\Result<AssociateWebACLResponse>>;
  public function CheckCapacity(CheckCapacityRequest) Awaitable<Errors\Result<CheckCapacityResponse>>;
  public function CreateIPSet(CreateIPSetRequest) Awaitable<Errors\Result<CreateIPSetResponse>>;
  public function CreateRegexPatternSet(CreateRegexPatternSetRequest) Awaitable<Errors\Result<CreateRegexPatternSetResponse>>;
  public function CreateRuleGroup(CreateRuleGroupRequest) Awaitable<Errors\Result<CreateRuleGroupResponse>>;
  public function CreateWebACL(CreateWebACLRequest) Awaitable<Errors\Result<CreateWebACLResponse>>;
  public function DeleteFirewallManagerRuleGroups(DeleteFirewallManagerRuleGroupsRequest) Awaitable<Errors\Result<DeleteFirewallManagerRuleGroupsResponse>>;
  public function DeleteIPSet(DeleteIPSetRequest) Awaitable<Errors\Result<DeleteIPSetResponse>>;
  public function DeleteLoggingConfiguration(DeleteLoggingConfigurationRequest) Awaitable<Errors\Result<DeleteLoggingConfigurationResponse>>;
  public function DeletePermissionPolicy(DeletePermissionPolicyRequest) Awaitable<Errors\Result<DeletePermissionPolicyResponse>>;
  public function DeleteRegexPatternSet(DeleteRegexPatternSetRequest) Awaitable<Errors\Result<DeleteRegexPatternSetResponse>>;
  public function DeleteRuleGroup(DeleteRuleGroupRequest) Awaitable<Errors\Result<DeleteRuleGroupResponse>>;
  public function DeleteWebACL(DeleteWebACLRequest) Awaitable<Errors\Result<DeleteWebACLResponse>>;
  public function DescribeManagedRuleGroup(DescribeManagedRuleGroupRequest) Awaitable<Errors\Result<DescribeManagedRuleGroupResponse>>;
  public function DisassociateWebACL(DisassociateWebACLRequest) Awaitable<Errors\Result<DisassociateWebACLResponse>>;
  public function GetIPSet(GetIPSetRequest) Awaitable<Errors\Result<GetIPSetResponse>>;
  public function GetLoggingConfiguration(GetLoggingConfigurationRequest) Awaitable<Errors\Result<GetLoggingConfigurationResponse>>;
  public function GetPermissionPolicy(GetPermissionPolicyRequest) Awaitable<Errors\Result<GetPermissionPolicyResponse>>;
  public function GetRateBasedStatementManagedKeys(GetRateBasedStatementManagedKeysRequest) Awaitable<Errors\Result<GetRateBasedStatementManagedKeysResponse>>;
  public function GetRegexPatternSet(GetRegexPatternSetRequest) Awaitable<Errors\Result<GetRegexPatternSetResponse>>;
  public function GetRuleGroup(GetRuleGroupRequest) Awaitable<Errors\Result<GetRuleGroupResponse>>;
  public function GetSampledRequests(GetSampledRequestsRequest) Awaitable<Errors\Result<GetSampledRequestsResponse>>;
  public function GetWebACL(GetWebACLRequest) Awaitable<Errors\Result<GetWebACLResponse>>;
  public function GetWebACLForResource(GetWebACLForResourceRequest) Awaitable<Errors\Result<GetWebACLForResourceResponse>>;
  public function ListAvailableManagedRuleGroups(ListAvailableManagedRuleGroupsRequest) Awaitable<Errors\Result<ListAvailableManagedRuleGroupsResponse>>;
  public function ListIPSets(ListIPSetsRequest) Awaitable<Errors\Result<ListIPSetsResponse>>;
  public function ListLoggingConfigurations(ListLoggingConfigurationsRequest) Awaitable<Errors\Result<ListLoggingConfigurationsResponse>>;
  public function ListRegexPatternSets(ListRegexPatternSetsRequest) Awaitable<Errors\Result<ListRegexPatternSetsResponse>>;
  public function ListResourcesForWebACL(ListResourcesForWebACLRequest) Awaitable<Errors\Result<ListResourcesForWebACLResponse>>;
  public function ListRuleGroups(ListRuleGroupsRequest) Awaitable<Errors\Result<ListRuleGroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListWebACLs(ListWebACLsRequest) Awaitable<Errors\Result<ListWebACLsResponse>>;
  public function PutLoggingConfiguration(PutLoggingConfigurationRequest) Awaitable<Errors\Result<PutLoggingConfigurationResponse>>;
  public function PutPermissionPolicy(PutPermissionPolicyRequest) Awaitable<Errors\Result<PutPermissionPolicyResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateIPSet(UpdateIPSetRequest) Awaitable<Errors\Result<UpdateIPSetResponse>>;
  public function UpdateRegexPatternSet(UpdateRegexPatternSetRequest) Awaitable<Errors\Result<UpdateRegexPatternSetResponse>>;
  public function UpdateRuleGroup(UpdateRuleGroupRequest) Awaitable<Errors\Result<UpdateRuleGroupResponse>>;
  public function UpdateWebACL(UpdateWebACLRequest) Awaitable<Errors\Result<UpdateWebACLResponse>>;
}

class Action {
}

class AllQueryArguments {
}

class AllowAction {
}

class AndStatement {
  public Statements $statements;
}

class AssociateWebACLRequest {
  public ResourceArn $resource_arn;
  public ResourceArn $web_acl_arn;
}

class AssociateWebACLResponse {
}

class BlockAction {
}

class Body {
}

class Boolean {
}

class ByteMatchStatement {
  public FieldToMatch $field_to_match;
  public PositionalConstraint $positional_constraint;
  public SearchString $search_string;
  public TextTransformations $text_transformations;
}

class CapacityUnit {
}

class CheckCapacityRequest {
  public Rules $rules;
  public Scope $scope;
}

class CheckCapacityResponse {
  public ConsumedCapacity $capacity;
}

class ComparisonOperator {
}

class ConsumedCapacity {
}

class CountAction {
}

class Country {
}

class CountryCode {
}

class CountryCodes {
}

class CreateIPSetRequest {
  public IPAddresses $addresses;
  public EntityDescription $description;
  public IPAddressVersion $ip_address_version;
  public EntityName $name;
  public Scope $scope;
  public TagList $tags;
}

class CreateIPSetResponse {
  public IPSetSummary $summary;
}

class CreateRegexPatternSetRequest {
  public EntityDescription $description;
  public EntityName $name;
  public RegularExpressionList $regular_expression_list;
  public Scope $scope;
  public TagList $tags;
}

class CreateRegexPatternSetResponse {
  public RegexPatternSetSummary $summary;
}

class CreateRuleGroupRequest {
  public CapacityUnit $capacity;
  public EntityDescription $description;
  public EntityName $name;
  public Rules $rules;
  public Scope $scope;
  public TagList $tags;
  public VisibilityConfig $visibility_config;
}

class CreateRuleGroupResponse {
  public RuleGroupSummary $summary;
}

class CreateWebACLRequest {
  public DefaultAction $default_action;
  public EntityDescription $description;
  public EntityName $name;
  public Rules $rules;
  public Scope $scope;
  public TagList $tags;
  public VisibilityConfig $visibility_config;
}

class CreateWebACLResponse {
  public WebACLSummary $summary;
}

class DefaultAction {
  public AllowAction $allow;
  public BlockAction $block;
}

class DeleteFirewallManagerRuleGroupsRequest {
  public ResourceArn $web_acl_arn;
  public LockToken $web_acl_lock_token;
}

class DeleteFirewallManagerRuleGroupsResponse {
  public LockToken $next_web_acl_lock_token;
}

class DeleteIPSetRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;
}

class DeleteIPSetResponse {
}

class DeleteLoggingConfigurationRequest {
  public ResourceArn $resource_arn;
}

class DeleteLoggingConfigurationResponse {
}

class DeletePermissionPolicyRequest {
  public ResourceArn $resource_arn;
}

class DeletePermissionPolicyResponse {
}

class DeleteRegexPatternSetRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;
}

class DeleteRegexPatternSetResponse {
}

class DeleteRuleGroupRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;
}

class DeleteRuleGroupResponse {
}

class DeleteWebACLRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;
}

class DeleteWebACLResponse {
}

class DescribeManagedRuleGroupRequest {
  public EntityName $name;
  public Scope $scope;
  public VendorName $vendor_name;
}

class DescribeManagedRuleGroupResponse {
  public CapacityUnit $capacity;
  public RuleSummaries $rules;
}

class DisassociateWebACLRequest {
  public ResourceArn $resource_arn;
}

class DisassociateWebACLResponse {
}

class EntityDescription {
}

class EntityId {
}

class EntityName {
}

class ErrorMessage {
}

class ErrorReason {
}

class ExcludedRule {
  public EntityName $name;
}

class ExcludedRules {
}

class FieldToMatch {
  public AllQueryArguments $all_query_arguments;
  public Body $body;
  public Method $method;
  public QueryString $query_string;
  public SingleHeader $single_header;
  public SingleQueryArgument $single_query_argument;
  public UriPath $uri_path;
}

class FieldToMatchData {
}

class FirewallManagerRuleGroup {
  public FirewallManagerStatement $firewall_manager_statement;
  public EntityName $name;
  public OverrideAction $override_action;
  public RulePriority $priority;
  public VisibilityConfig $visibility_config;
}

class FirewallManagerRuleGroups {
}

class FirewallManagerStatement {
  public ManagedRuleGroupStatement $managed_rule_group_statement;
  public RuleGroupReferenceStatement $rule_group_reference_statement;
}

class GeoMatchStatement {
  public CountryCodes $country_codes;
}

class GetIPSetRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;
}

class GetIPSetResponse {
  public IPSet $ip_set;
  public LockToken $lock_token;
}

class GetLoggingConfigurationRequest {
  public ResourceArn $resource_arn;
}

class GetLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;
}

class GetPermissionPolicyRequest {
  public ResourceArn $resource_arn;
}

class GetPermissionPolicyResponse {
  public PolicyString $policy;
}

class GetRateBasedStatementManagedKeysRequest {
  public EntityName $rule_name;
  public Scope $scope;
  public EntityId $web_acl_id;
  public EntityName $web_acl_name;
}

class GetRateBasedStatementManagedKeysResponse {
  public RateBasedStatementManagedKeysIPSet $managed_keys_ipv_4;
  public RateBasedStatementManagedKeysIPSet $managed_keys_ipv_6;
}

class GetRegexPatternSetRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;
}

class GetRegexPatternSetResponse {
  public LockToken $lock_token;
  public RegexPatternSet $regex_pattern_set;
}

class GetRuleGroupRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;
}

class GetRuleGroupResponse {
  public LockToken $lock_token;
  public RuleGroup $rule_group;
}

class GetSampledRequestsRequest {
  public ListMaxItems $max_items;
  public MetricName $rule_metric_name;
  public Scope $scope;
  public TimeWindow $time_window;
  public ResourceArn $web_acl_arn;
}

class GetSampledRequestsResponse {
  public PopulationSize $population_size;
  public SampledHTTPRequests $sampled_requests;
  public TimeWindow $time_window;
}

class GetWebACLForResourceRequest {
  public ResourceArn $resource_arn;
}

class GetWebACLForResourceResponse {
  public WebACL $web_acl;
}

class GetWebACLRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;
}

class GetWebACLResponse {
  public LockToken $lock_token;
  public WebACL $web_acl;
}

class HTTPHeader {
  public HeaderName $name;
  public HeaderValue $value;
}

class HTTPHeaders {
}

class HTTPMethod {
}

class HTTPRequest {
  public IPString $client_ip;
  public Country $country;
  public HTTPVersion $http_version;
  public HTTPHeaders $headers;
  public HTTPMethod $method;
  public URIString $uri;
}

class HTTPVersion {
}

class HeaderName {
}

class HeaderValue {
}

class IPAddress {
}

class IPAddressVersion {
}

class IPAddresses {
}

class IPSet {
  public ResourceArn $arn;
  public IPAddresses $addresses;
  public EntityDescription $description;
  public IPAddressVersion $ip_address_version;
  public EntityId $id;
  public EntityName $name;
}

class IPSetReferenceStatement {
  public ResourceArn $arn;
}

class IPSetSummaries {
}

class IPSetSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
}

class IPString {
}

class ListAvailableManagedRuleGroupsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;
}

class ListAvailableManagedRuleGroupsResponse {
  public ManagedRuleGroupSummaries $managed_rule_groups;
  public NextMarker $next_marker;
}

class ListIPSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;
}

class ListIPSetsResponse {
  public IPSetSummaries $ip_sets;
  public NextMarker $next_marker;
}

class ListLoggingConfigurationsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;
}

class ListLoggingConfigurationsResponse {
  public LoggingConfigurations $logging_configurations;
  public NextMarker $next_marker;
}

class ListMaxItems {
}

class ListRegexPatternSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;
}

class ListRegexPatternSetsResponse {
  public NextMarker $next_marker;
  public RegexPatternSetSummaries $regex_pattern_sets;
}

class ListResourcesForWebACLRequest {
  public ResourceType $resource_type;
  public ResourceArn $web_acl_arn;
}

class ListResourcesForWebACLResponse {
  public ResourceArns $resource_arns;
}

class ListRuleGroupsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;
}

class ListRuleGroupsResponse {
  public NextMarker $next_marker;
  public RuleGroupSummaries $rule_groups;
}

class ListTagsForResourceRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public NextMarker $next_marker;
  public TagInfoForResource $tag_info_for_resource;
}

class ListWebACLsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;
}

class ListWebACLsResponse {
  public NextMarker $next_marker;
  public WebACLSummaries $web_ac_ls;
}

class LockToken {
}

class LogDestinationConfigs {
}

class LoggingConfiguration {
  public LogDestinationConfigs $log_destination_configs;
  public RedactedFields $redacted_fields;
  public ResourceArn $resource_arn;
}

class LoggingConfigurations {
}

class ManagedRuleGroupStatement {
  public ExcludedRules $excluded_rules;
  public EntityName $name;
  public VendorName $vendor_name;
}

class ManagedRuleGroupSummaries {
}

class ManagedRuleGroupSummary {
  public EntityDescription $description;
  public EntityName $name;
  public VendorName $vendor_name;
}

class Method {
}

class MetricName {
}

class NextMarker {
}

class NoneAction {
}

class NotStatement {
  public Statement $statement;
}

class OrStatement {
  public Statements $statements;
}

class OverrideAction {
  public CountAction $count;
  public NoneAction $none;
}

class PaginationLimit {
}

class ParameterExceptionField {
}

class ParameterExceptionParameter {
}

class PolicyString {
}

class PopulationSize {
}

class PositionalConstraint {
}

class PutLoggingConfigurationRequest {
  public LoggingConfiguration $logging_configuration;
}

class PutLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;
}

class PutPermissionPolicyRequest {
  public PolicyString $policy;
  public ResourceArn $resource_arn;
}

class PutPermissionPolicyResponse {
}

class QueryString {
}

class RateBasedStatement {
  public RateBasedStatementAggregateKeyType $aggregate_key_type;
  public RateLimit $limit;
  public Statement $scope_down_statement;
}

class RateBasedStatementAggregateKeyType {
}

class RateBasedStatementManagedKeysIPSet {
  public IPAddresses $addresses;
  public IPAddressVersion $ip_address_version;
}

class RateLimit {
}

class RedactedFields {
}

class Regex {
  public RegexPatternString $regex_string;
}

class RegexPatternSet {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public EntityName $name;
  public RegularExpressionList $regular_expression_list;
}

class RegexPatternSetReferenceStatement {
  public ResourceArn $arn;
  public FieldToMatch $field_to_match;
  public TextTransformations $text_transformations;
}

class RegexPatternSetSummaries {
}

class RegexPatternSetSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
}

class RegexPatternString {
}

class RegularExpressionList {
}

class ResourceArn {
}

class ResourceArns {
}

class ResourceType {
}

class Rule {
  public RuleAction $action;
  public EntityName $name;
  public OverrideAction $override_action;
  public RulePriority $priority;
  public Statement $statement;
  public VisibilityConfig $visibility_config;
}

class RuleAction {
  public AllowAction $allow;
  public BlockAction $block;
  public CountAction $count;
}

class RuleGroup {
  public ResourceArn $arn;
  public CapacityUnit $capacity;
  public EntityDescription $description;
  public EntityId $id;
  public EntityName $name;
  public Rules $rules;
  public VisibilityConfig $visibility_config;
}

class RuleGroupReferenceStatement {
  public ResourceArn $arn;
  public ExcludedRules $excluded_rules;
}

class RuleGroupSummaries {
}

class RuleGroupSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
}

class RulePriority {
}

class RuleSummaries {
}

class RuleSummary {
  public RuleAction $action;
  public EntityName $name;
}

class Rules {
}

class SampleWeight {
}

class SampledHTTPRequest {
  public Action $action;
  public HTTPRequest $request;
  public EntityName $rule_name_within_rule_group;
  public Timestamp $timestamp;
  public SampleWeight $weight;
}

class SampledHTTPRequests {
}

class Scope {
}

class SearchString {
}

class SingleHeader {
  public FieldToMatchData $name;
}

class SingleQueryArgument {
  public FieldToMatchData $name;
}

class Size {
}

class SizeConstraintStatement {
  public ComparisonOperator $comparison_operator;
  public FieldToMatch $field_to_match;
  public Size $size;
  public TextTransformations $text_transformations;
}

class SqliMatchStatement {
  public FieldToMatch $field_to_match;
  public TextTransformations $text_transformations;
}

class Statement {
  public AndStatement $and_statement;
  public ByteMatchStatement $byte_match_statement;
  public GeoMatchStatement $geo_match_statement;
  public IPSetReferenceStatement $ip_set_reference_statement;
  public ManagedRuleGroupStatement $managed_rule_group_statement;
  public NotStatement $not_statement;
  public OrStatement $or_statement;
  public RateBasedStatement $rate_based_statement;
  public RegexPatternSetReferenceStatement $regex_pattern_set_reference_statement;
  public RuleGroupReferenceStatement $rule_group_reference_statement;
  public SizeConstraintStatement $size_constraint_statement;
  public SqliMatchStatement $sqli_match_statement;
  public XssMatchStatement $xss_match_statement;
}

class Statements {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagInfoForResource {
  public ResourceArn $resource_arn;
  public TagList $tag_list;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TextTransformation {
  public TextTransformationPriority $priority;
  public TextTransformationType $type;
}

class TextTransformationPriority {
}

class TextTransformationType {
}

class TextTransformations {
}

class TimeWindow {
  public Timestamp $end_time;
  public Timestamp $start_time;
}

class Timestamp {
}

class URIString {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateIPSetRequest {
  public IPAddresses $addresses;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;
}

class UpdateIPSetResponse {
  public LockToken $next_lock_token;
}

class UpdateRegexPatternSetRequest {
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public RegularExpressionList $regular_expression_list;
  public Scope $scope;
}

class UpdateRegexPatternSetResponse {
  public LockToken $next_lock_token;
}

class UpdateRuleGroupRequest {
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Rules $rules;
  public Scope $scope;
  public VisibilityConfig $visibility_config;
}

class UpdateRuleGroupResponse {
  public LockToken $next_lock_token;
}

class UpdateWebACLRequest {
  public DefaultAction $default_action;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Rules $rules;
  public Scope $scope;
  public VisibilityConfig $visibility_config;
}

class UpdateWebACLResponse {
  public LockToken $next_lock_token;
}

class UriPath {
}

class VendorName {
}

class VisibilityConfig {
  public boolean $cloud_watch_metrics_enabled;
  public MetricName $metric_name;
  public boolean $sampled_requests_enabled;
}

class WAFAssociatedItemException {
  public ErrorMessage $message;
}

class WAFDuplicateItemException {
  public ErrorMessage $message;
}

class WAFInternalErrorException {
  public ErrorMessage $message;
}

class WAFInvalidOperationException {
  public ErrorMessage $message;
}

class WAFInvalidParameterException {
  public ParameterExceptionField $field;
  public ParameterExceptionParameter $parameter;
  public ErrorReason $reason;
  public ErrorMessage $message;
}

class WAFInvalidPermissionPolicyException {
  public ErrorMessage $message;
}

class WAFInvalidResourceException {
  public ErrorMessage $message;
}

class WAFLimitsExceededException {
  public ErrorMessage $message;
}

class WAFNonexistentItemException {
  public ErrorMessage $message;
}

class WAFOptimisticLockException {
  public ErrorMessage $message;
}

class WAFServiceLinkedRoleErrorException {
  public ErrorMessage $message;
}

class WAFSubscriptionNotFoundException {
  public ErrorMessage $message;
}

class WAFTagOperationException {
  public ErrorMessage $message;
}

class WAFTagOperationInternalErrorException {
  public ErrorMessage $message;
}

class WAFUnavailableEntityException {
  public ErrorMessage $message;
}

class WebACL {
  public ResourceArn $arn;
  public ConsumedCapacity $capacity;
  public DefaultAction $default_action;
  public EntityDescription $description;
  public EntityId $id;
  public boolean $managed_by_firewall_manager;
  public EntityName $name;
  public FirewallManagerRuleGroups $post_process_firewall_manager_rule_groups;
  public FirewallManagerRuleGroups $pre_process_firewall_manager_rule_groups;
  public Rules $rules;
  public VisibilityConfig $visibility_config;
}

class WebACLSummaries {
}

class WebACLSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
}

class XssMatchStatement {
  public FieldToMatch $field_to_match;
  public TextTransformations $text_transformations;
}

