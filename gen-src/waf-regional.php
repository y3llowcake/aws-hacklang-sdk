<?hh // strict
namespace slack\aws\waf-regional;

interface WAF Regional {
  public function AssociateWebACL(AssociateWebACLRequest): Awaitable<Errors\Result<AssociateWebACLResponse>>;
  public function CreateByteMatchSet(CreateByteMatchSetRequest): Awaitable<Errors\Result<CreateByteMatchSetResponse>>;
  public function CreateGeoMatchSet(CreateGeoMatchSetRequest): Awaitable<Errors\Result<CreateGeoMatchSetResponse>>;
  public function CreateIPSet(CreateIPSetRequest): Awaitable<Errors\Result<CreateIPSetResponse>>;
  public function CreateRateBasedRule(CreateRateBasedRuleRequest): Awaitable<Errors\Result<CreateRateBasedRuleResponse>>;
  public function CreateRegexMatchSet(CreateRegexMatchSetRequest): Awaitable<Errors\Result<CreateRegexMatchSetResponse>>;
  public function CreateRegexPatternSet(CreateRegexPatternSetRequest): Awaitable<Errors\Result<CreateRegexPatternSetResponse>>;
  public function CreateRule(CreateRuleRequest): Awaitable<Errors\Result<CreateRuleResponse>>;
  public function CreateRuleGroup(CreateRuleGroupRequest): Awaitable<Errors\Result<CreateRuleGroupResponse>>;
  public function CreateSizeConstraintSet(CreateSizeConstraintSetRequest): Awaitable<Errors\Result<CreateSizeConstraintSetResponse>>;
  public function CreateSqlInjectionMatchSet(CreateSqlInjectionMatchSetRequest): Awaitable<Errors\Result<CreateSqlInjectionMatchSetResponse>>;
  public function CreateWebACL(CreateWebACLRequest): Awaitable<Errors\Result<CreateWebACLResponse>>;
  public function CreateXssMatchSet(CreateXssMatchSetRequest): Awaitable<Errors\Result<CreateXssMatchSetResponse>>;
  public function DeleteByteMatchSet(DeleteByteMatchSetRequest): Awaitable<Errors\Result<DeleteByteMatchSetResponse>>;
  public function DeleteGeoMatchSet(DeleteGeoMatchSetRequest): Awaitable<Errors\Result<DeleteGeoMatchSetResponse>>;
  public function DeleteIPSet(DeleteIPSetRequest): Awaitable<Errors\Result<DeleteIPSetResponse>>;
  public function DeleteLoggingConfiguration(DeleteLoggingConfigurationRequest): Awaitable<Errors\Result<DeleteLoggingConfigurationResponse>>;
  public function DeletePermissionPolicy(DeletePermissionPolicyRequest): Awaitable<Errors\Result<DeletePermissionPolicyResponse>>;
  public function DeleteRateBasedRule(DeleteRateBasedRuleRequest): Awaitable<Errors\Result<DeleteRateBasedRuleResponse>>;
  public function DeleteRegexMatchSet(DeleteRegexMatchSetRequest): Awaitable<Errors\Result<DeleteRegexMatchSetResponse>>;
  public function DeleteRegexPatternSet(DeleteRegexPatternSetRequest): Awaitable<Errors\Result<DeleteRegexPatternSetResponse>>;
  public function DeleteRule(DeleteRuleRequest): Awaitable<Errors\Result<DeleteRuleResponse>>;
  public function DeleteRuleGroup(DeleteRuleGroupRequest): Awaitable<Errors\Result<DeleteRuleGroupResponse>>;
  public function DeleteSizeConstraintSet(DeleteSizeConstraintSetRequest): Awaitable<Errors\Result<DeleteSizeConstraintSetResponse>>;
  public function DeleteSqlInjectionMatchSet(DeleteSqlInjectionMatchSetRequest): Awaitable<Errors\Result<DeleteSqlInjectionMatchSetResponse>>;
  public function DeleteWebACL(DeleteWebACLRequest): Awaitable<Errors\Result<DeleteWebACLResponse>>;
  public function DeleteXssMatchSet(DeleteXssMatchSetRequest): Awaitable<Errors\Result<DeleteXssMatchSetResponse>>;
  public function DisassociateWebACL(DisassociateWebACLRequest): Awaitable<Errors\Result<DisassociateWebACLResponse>>;
  public function GetByteMatchSet(GetByteMatchSetRequest): Awaitable<Errors\Result<GetByteMatchSetResponse>>;
  public function GetChangeToken(GetChangeTokenRequest): Awaitable<Errors\Result<GetChangeTokenResponse>>;
  public function GetChangeTokenStatus(GetChangeTokenStatusRequest): Awaitable<Errors\Result<GetChangeTokenStatusResponse>>;
  public function GetGeoMatchSet(GetGeoMatchSetRequest): Awaitable<Errors\Result<GetGeoMatchSetResponse>>;
  public function GetIPSet(GetIPSetRequest): Awaitable<Errors\Result<GetIPSetResponse>>;
  public function GetLoggingConfiguration(GetLoggingConfigurationRequest): Awaitable<Errors\Result<GetLoggingConfigurationResponse>>;
  public function GetPermissionPolicy(GetPermissionPolicyRequest): Awaitable<Errors\Result<GetPermissionPolicyResponse>>;
  public function GetRateBasedRule(GetRateBasedRuleRequest): Awaitable<Errors\Result<GetRateBasedRuleResponse>>;
  public function GetRateBasedRuleManagedKeys(GetRateBasedRuleManagedKeysRequest): Awaitable<Errors\Result<GetRateBasedRuleManagedKeysResponse>>;
  public function GetRegexMatchSet(GetRegexMatchSetRequest): Awaitable<Errors\Result<GetRegexMatchSetResponse>>;
  public function GetRegexPatternSet(GetRegexPatternSetRequest): Awaitable<Errors\Result<GetRegexPatternSetResponse>>;
  public function GetRule(GetRuleRequest): Awaitable<Errors\Result<GetRuleResponse>>;
  public function GetRuleGroup(GetRuleGroupRequest): Awaitable<Errors\Result<GetRuleGroupResponse>>;
  public function GetSampledRequests(GetSampledRequestsRequest): Awaitable<Errors\Result<GetSampledRequestsResponse>>;
  public function GetSizeConstraintSet(GetSizeConstraintSetRequest): Awaitable<Errors\Result<GetSizeConstraintSetResponse>>;
  public function GetSqlInjectionMatchSet(GetSqlInjectionMatchSetRequest): Awaitable<Errors\Result<GetSqlInjectionMatchSetResponse>>;
  public function GetWebACL(GetWebACLRequest): Awaitable<Errors\Result<GetWebACLResponse>>;
  public function GetWebACLForResource(GetWebACLForResourceRequest): Awaitable<Errors\Result<GetWebACLForResourceResponse>>;
  public function GetXssMatchSet(GetXssMatchSetRequest): Awaitable<Errors\Result<GetXssMatchSetResponse>>;
  public function ListActivatedRulesInRuleGroup(ListActivatedRulesInRuleGroupRequest): Awaitable<Errors\Result<ListActivatedRulesInRuleGroupResponse>>;
  public function ListByteMatchSets(ListByteMatchSetsRequest): Awaitable<Errors\Result<ListByteMatchSetsResponse>>;
  public function ListGeoMatchSets(ListGeoMatchSetsRequest): Awaitable<Errors\Result<ListGeoMatchSetsResponse>>;
  public function ListIPSets(ListIPSetsRequest): Awaitable<Errors\Result<ListIPSetsResponse>>;
  public function ListLoggingConfigurations(ListLoggingConfigurationsRequest): Awaitable<Errors\Result<ListLoggingConfigurationsResponse>>;
  public function ListRateBasedRules(ListRateBasedRulesRequest): Awaitable<Errors\Result<ListRateBasedRulesResponse>>;
  public function ListRegexMatchSets(ListRegexMatchSetsRequest): Awaitable<Errors\Result<ListRegexMatchSetsResponse>>;
  public function ListRegexPatternSets(ListRegexPatternSetsRequest): Awaitable<Errors\Result<ListRegexPatternSetsResponse>>;
  public function ListResourcesForWebACL(ListResourcesForWebACLRequest): Awaitable<Errors\Result<ListResourcesForWebACLResponse>>;
  public function ListRuleGroups(ListRuleGroupsRequest): Awaitable<Errors\Result<ListRuleGroupsResponse>>;
  public function ListRules(ListRulesRequest): Awaitable<Errors\Result<ListRulesResponse>>;
  public function ListSizeConstraintSets(ListSizeConstraintSetsRequest): Awaitable<Errors\Result<ListSizeConstraintSetsResponse>>;
  public function ListSqlInjectionMatchSets(ListSqlInjectionMatchSetsRequest): Awaitable<Errors\Result<ListSqlInjectionMatchSetsResponse>>;
  public function ListSubscribedRuleGroups(ListSubscribedRuleGroupsRequest): Awaitable<Errors\Result<ListSubscribedRuleGroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListWebACLs(ListWebACLsRequest): Awaitable<Errors\Result<ListWebACLsResponse>>;
  public function ListXssMatchSets(ListXssMatchSetsRequest): Awaitable<Errors\Result<ListXssMatchSetsResponse>>;
  public function PutLoggingConfiguration(PutLoggingConfigurationRequest): Awaitable<Errors\Result<PutLoggingConfigurationResponse>>;
  public function PutPermissionPolicy(PutPermissionPolicyRequest): Awaitable<Errors\Result<PutPermissionPolicyResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateByteMatchSet(UpdateByteMatchSetRequest): Awaitable<Errors\Result<UpdateByteMatchSetResponse>>;
  public function UpdateGeoMatchSet(UpdateGeoMatchSetRequest): Awaitable<Errors\Result<UpdateGeoMatchSetResponse>>;
  public function UpdateIPSet(UpdateIPSetRequest): Awaitable<Errors\Result<UpdateIPSetResponse>>;
  public function UpdateRateBasedRule(UpdateRateBasedRuleRequest): Awaitable<Errors\Result<UpdateRateBasedRuleResponse>>;
  public function UpdateRegexMatchSet(UpdateRegexMatchSetRequest): Awaitable<Errors\Result<UpdateRegexMatchSetResponse>>;
  public function UpdateRegexPatternSet(UpdateRegexPatternSetRequest): Awaitable<Errors\Result<UpdateRegexPatternSetResponse>>;
  public function UpdateRule(UpdateRuleRequest): Awaitable<Errors\Result<UpdateRuleResponse>>;
  public function UpdateRuleGroup(UpdateRuleGroupRequest): Awaitable<Errors\Result<UpdateRuleGroupResponse>>;
  public function UpdateSizeConstraintSet(UpdateSizeConstraintSetRequest): Awaitable<Errors\Result<UpdateSizeConstraintSetResponse>>;
  public function UpdateSqlInjectionMatchSet(UpdateSqlInjectionMatchSetRequest): Awaitable<Errors\Result<UpdateSqlInjectionMatchSetResponse>>;
  public function UpdateWebACL(UpdateWebACLRequest): Awaitable<Errors\Result<UpdateWebACLResponse>>;
  public function UpdateXssMatchSet(UpdateXssMatchSetRequest): Awaitable<Errors\Result<UpdateXssMatchSetResponse>>;
}

class Action {
}

class ActivatedRule {
  public WafAction $action;
  public ExcludedRules $excluded_rules;
  public WafOverrideAction $override_action;
  public RulePriority $priority;
  public ResourceId $rule_id;
  public WafRuleType $type;
}

class ActivatedRules {
}

class AssociateWebACLRequest {
  public ResourceArn $resource_arn;
  public ResourceId $web_acl_id;
}

class AssociateWebACLResponse {
}

class ByteMatchSet {
  public ResourceId $byte_match_set_id;
  public ByteMatchTuples $byte_match_tuples;
  public ResourceName $name;
}

class ByteMatchSetSummaries {
}

class ByteMatchSetSummary {
  public ResourceId $byte_match_set_id;
  public ResourceName $name;
}

class ByteMatchSetUpdate {
  public ChangeAction $action;
  public ByteMatchTuple $byte_match_tuple;
}

class ByteMatchSetUpdates {
}

class ByteMatchTargetString {
}

class ByteMatchTuple {
  public FieldToMatch $field_to_match;
  public PositionalConstraint $positional_constraint;
  public ByteMatchTargetString $target_string;
  public TextTransformation $text_transformation;
}

class ByteMatchTuples {
}

class ChangeAction {
}

class ChangeToken {
}

class ChangeTokenStatus {
}

class ComparisonOperator {
}

class Country {
}

class CreateByteMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateByteMatchSetResponse {
  public ByteMatchSet $byte_match_set;
  public ChangeToken $change_token;
}

class CreateGeoMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateGeoMatchSetResponse {
  public ChangeToken $change_token;
  public GeoMatchSet $geo_match_set;
}

class CreateIPSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateIPSetResponse {
  public ChangeToken $change_token;
  public IPSet $ip_set;
}

class CreateRateBasedRuleRequest {
  public ChangeToken $change_token;
  public MetricName $metric_name;
  public ResourceName $name;
  public RateKey $rate_key;
  public RateLimit $rate_limit;
  public TagList $tags;
}

class CreateRateBasedRuleResponse {
  public ChangeToken $change_token;
  public RateBasedRule $rule;
}

class CreateRegexMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateRegexMatchSetResponse {
  public ChangeToken $change_token;
  public RegexMatchSet $regex_match_set;
}

class CreateRegexPatternSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateRegexPatternSetResponse {
  public ChangeToken $change_token;
  public RegexPatternSet $regex_pattern_set;
}

class CreateRuleGroupRequest {
  public ChangeToken $change_token;
  public MetricName $metric_name;
  public ResourceName $name;
  public TagList $tags;
}

class CreateRuleGroupResponse {
  public ChangeToken $change_token;
  public RuleGroup $rule_group;
}

class CreateRuleRequest {
  public ChangeToken $change_token;
  public MetricName $metric_name;
  public ResourceName $name;
  public TagList $tags;
}

class CreateRuleResponse {
  public ChangeToken $change_token;
  public Rule $rule;
}

class CreateSizeConstraintSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateSizeConstraintSetResponse {
  public ChangeToken $change_token;
  public SizeConstraintSet $size_constraint_set;
}

class CreateSqlInjectionMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateSqlInjectionMatchSetResponse {
  public ChangeToken $change_token;
  public SqlInjectionMatchSet $sql_injection_match_set;
}

class CreateWebACLRequest {
  public ChangeToken $change_token;
  public WafAction $default_action;
  public MetricName $metric_name;
  public ResourceName $name;
  public TagList $tags;
}

class CreateWebACLResponse {
  public ChangeToken $change_token;
  public WebACL $web_acl;
}

class CreateXssMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;
}

class CreateXssMatchSetResponse {
  public ChangeToken $change_token;
  public XssMatchSet $xss_match_set;
}

class DeleteByteMatchSetRequest {
  public ResourceId $byte_match_set_id;
  public ChangeToken $change_token;
}

class DeleteByteMatchSetResponse {
  public ChangeToken $change_token;
}

class DeleteGeoMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $geo_match_set_id;
}

class DeleteGeoMatchSetResponse {
  public ChangeToken $change_token;
}

class DeleteIPSetRequest {
  public ChangeToken $change_token;
  public ResourceId $ip_set_id;
}

class DeleteIPSetResponse {
  public ChangeToken $change_token;
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

class DeleteRateBasedRuleRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_id;
}

class DeleteRateBasedRuleResponse {
  public ChangeToken $change_token;
}

class DeleteRegexMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_match_set_id;
}

class DeleteRegexMatchSetResponse {
  public ChangeToken $change_token;
}

class DeleteRegexPatternSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_pattern_set_id;
}

class DeleteRegexPatternSetResponse {
  public ChangeToken $change_token;
}

class DeleteRuleGroupRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_group_id;
}

class DeleteRuleGroupResponse {
  public ChangeToken $change_token;
}

class DeleteRuleRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_id;
}

class DeleteRuleResponse {
  public ChangeToken $change_token;
}

class DeleteSizeConstraintSetRequest {
  public ChangeToken $change_token;
  public ResourceId $size_constraint_set_id;
}

class DeleteSizeConstraintSetResponse {
  public ChangeToken $change_token;
}

class DeleteSqlInjectionMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $sql_injection_match_set_id;
}

class DeleteSqlInjectionMatchSetResponse {
  public ChangeToken $change_token;
}

class DeleteWebACLRequest {
  public ChangeToken $change_token;
  public ResourceId $web_acl_id;
}

class DeleteWebACLResponse {
  public ChangeToken $change_token;
}

class DeleteXssMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $xss_match_set_id;
}

class DeleteXssMatchSetResponse {
  public ChangeToken $change_token;
}

class DisassociateWebACLRequest {
  public ResourceArn $resource_arn;
}

class DisassociateWebACLResponse {
}

class ExcludedRule {
  public ResourceId $rule_id;
}

class ExcludedRules {
}

class FieldToMatch {
  public MatchFieldData $data;
  public MatchFieldType $type;
}

class GeoMatchConstraint {
  public GeoMatchConstraintType $type;
  public GeoMatchConstraintValue $value;
}

class GeoMatchConstraintType {
}

class GeoMatchConstraintValue {
}

class GeoMatchConstraints {
}

class GeoMatchSet {
  public GeoMatchConstraints $geo_match_constraints;
  public ResourceId $geo_match_set_id;
  public ResourceName $name;
}

class GeoMatchSetSummaries {
}

class GeoMatchSetSummary {
  public ResourceId $geo_match_set_id;
  public ResourceName $name;
}

class GeoMatchSetUpdate {
  public ChangeAction $action;
  public GeoMatchConstraint $geo_match_constraint;
}

class GeoMatchSetUpdates {
}

class GetByteMatchSetRequest {
  public ResourceId $byte_match_set_id;
}

class GetByteMatchSetResponse {
  public ByteMatchSet $byte_match_set;
}

class GetChangeTokenRequest {
}

class GetChangeTokenResponse {
  public ChangeToken $change_token;
}

class GetChangeTokenStatusRequest {
  public ChangeToken $change_token;
}

class GetChangeTokenStatusResponse {
  public ChangeTokenStatus $change_token_status;
}

class GetGeoMatchSetRequest {
  public ResourceId $geo_match_set_id;
}

class GetGeoMatchSetResponse {
  public GeoMatchSet $geo_match_set;
}

class GetIPSetRequest {
  public ResourceId $ip_set_id;
}

class GetIPSetResponse {
  public IPSet $ip_set;
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

class GetRateBasedRuleManagedKeysRequest {
  public NextMarker $next_marker;
  public ResourceId $rule_id;
}

class GetRateBasedRuleManagedKeysResponse {
  public ManagedKeys $managed_keys;
  public NextMarker $next_marker;
}

class GetRateBasedRuleRequest {
  public ResourceId $rule_id;
}

class GetRateBasedRuleResponse {
  public RateBasedRule $rule;
}

class GetRegexMatchSetRequest {
  public ResourceId $regex_match_set_id;
}

class GetRegexMatchSetResponse {
  public RegexMatchSet $regex_match_set;
}

class GetRegexPatternSetRequest {
  public ResourceId $regex_pattern_set_id;
}

class GetRegexPatternSetResponse {
  public RegexPatternSet $regex_pattern_set;
}

class GetRuleGroupRequest {
  public ResourceId $rule_group_id;
}

class GetRuleGroupResponse {
  public RuleGroup $rule_group;
}

class GetRuleRequest {
  public ResourceId $rule_id;
}

class GetRuleResponse {
  public Rule $rule;
}

class GetSampledRequestsMaxItems {
}

class GetSampledRequestsRequest {
  public GetSampledRequestsMaxItems $max_items;
  public ResourceId $rule_id;
  public TimeWindow $time_window;
  public ResourceId $web_acl_id;
}

class GetSampledRequestsResponse {
  public PopulationSize $population_size;
  public SampledHTTPRequests $sampled_requests;
  public TimeWindow $time_window;
}

class GetSizeConstraintSetRequest {
  public ResourceId $size_constraint_set_id;
}

class GetSizeConstraintSetResponse {
  public SizeConstraintSet $size_constraint_set;
}

class GetSqlInjectionMatchSetRequest {
  public ResourceId $sql_injection_match_set_id;
}

class GetSqlInjectionMatchSetResponse {
  public SqlInjectionMatchSet $sql_injection_match_set;
}

class GetWebACLForResourceRequest {
  public ResourceArn $resource_arn;
}

class GetWebACLForResourceResponse {
  public WebACLSummary $web_acl_summary;
}

class GetWebACLRequest {
  public ResourceId $web_acl_id;
}

class GetWebACLResponse {
  public WebACL $web_acl;
}

class GetXssMatchSetRequest {
  public ResourceId $xss_match_set_id;
}

class GetXssMatchSetResponse {
  public XssMatchSet $xss_match_set;
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

class IPSet {
  public IPSetDescriptors $ip_set_descriptors;
  public ResourceId $ip_set_id;
  public ResourceName $name;
}

class IPSetDescriptor {
  public IPSetDescriptorType $type;
  public IPSetDescriptorValue $value;
}

class IPSetDescriptorType {
}

class IPSetDescriptorValue {
}

class IPSetDescriptors {
}

class IPSetSummaries {
}

class IPSetSummary {
  public ResourceId $ip_set_id;
  public ResourceName $name;
}

class IPSetUpdate {
  public ChangeAction $action;
  public IPSetDescriptor $ip_set_descriptor;
}

class IPSetUpdates {
}

class IPString {
}

class ListActivatedRulesInRuleGroupRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public ResourceId $rule_group_id;
}

class ListActivatedRulesInRuleGroupResponse {
  public ActivatedRules $activated_rules;
  public NextMarker $next_marker;
}

class ListByteMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListByteMatchSetsResponse {
  public ByteMatchSetSummaries $byte_match_sets;
  public NextMarker $next_marker;
}

class ListGeoMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListGeoMatchSetsResponse {
  public GeoMatchSetSummaries $geo_match_sets;
  public NextMarker $next_marker;
}

class ListIPSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListIPSetsResponse {
  public IPSetSummaries $ip_sets;
  public NextMarker $next_marker;
}

class ListLoggingConfigurationsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListLoggingConfigurationsResponse {
  public LoggingConfigurations $logging_configurations;
  public NextMarker $next_marker;
}

class ListRateBasedRulesRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListRateBasedRulesResponse {
  public NextMarker $next_marker;
  public RuleSummaries $rules;
}

class ListRegexMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListRegexMatchSetsResponse {
  public NextMarker $next_marker;
  public RegexMatchSetSummaries $regex_match_sets;
}

class ListRegexPatternSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListRegexPatternSetsResponse {
  public NextMarker $next_marker;
  public RegexPatternSetSummaries $regex_pattern_sets;
}

class ListResourcesForWebACLRequest {
  public ResourceType $resource_type;
  public ResourceId $web_acl_id;
}

class ListResourcesForWebACLResponse {
  public ResourceArns $resource_arns;
}

class ListRuleGroupsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListRuleGroupsResponse {
  public NextMarker $next_marker;
  public RuleGroupSummaries $rule_groups;
}

class ListRulesRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListRulesResponse {
  public NextMarker $next_marker;
  public RuleSummaries $rules;
}

class ListSizeConstraintSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListSizeConstraintSetsResponse {
  public NextMarker $next_marker;
  public SizeConstraintSetSummaries $size_constraint_sets;
}

class ListSqlInjectionMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListSqlInjectionMatchSetsResponse {
  public NextMarker $next_marker;
  public SqlInjectionMatchSetSummaries $sql_injection_match_sets;
}

class ListSubscribedRuleGroupsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListSubscribedRuleGroupsResponse {
  public NextMarker $next_marker;
  public SubscribedRuleGroupSummaries $rule_groups;
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
}

class ListWebACLsResponse {
  public NextMarker $next_marker;
  public WebACLSummaries $web_ac_ls;
}

class ListXssMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
}

class ListXssMatchSetsResponse {
  public NextMarker $next_marker;
  public XssMatchSetSummaries $xss_match_sets;
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

class ManagedKey {
}

class ManagedKeys {
}

class MatchFieldData {
}

class MatchFieldType {
}

class MetricName {
}

class Negated {
}

class NextMarker {
}

class PaginationLimit {
}

class ParameterExceptionField {
}

class ParameterExceptionParameter {
}

class ParameterExceptionReason {
}

class PolicyString {
}

class PopulationSize {
}

class PositionalConstraint {
}

class Predicate {
  public ResourceId $data_id;
  public Negated $negated;
  public PredicateType $type;
}

class PredicateType {
}

class Predicates {
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

class RateBasedRule {
  public Predicates $match_predicates;
  public MetricName $metric_name;
  public ResourceName $name;
  public RateKey $rate_key;
  public RateLimit $rate_limit;
  public ResourceId $rule_id;
}

class RateKey {
}

class RateLimit {
}

class RedactedFields {
}

class RegexMatchSet {
  public ResourceName $name;
  public ResourceId $regex_match_set_id;
  public RegexMatchTuples $regex_match_tuples;
}

class RegexMatchSetSummaries {
}

class RegexMatchSetSummary {
  public ResourceName $name;
  public ResourceId $regex_match_set_id;
}

class RegexMatchSetUpdate {
  public ChangeAction $action;
  public RegexMatchTuple $regex_match_tuple;
}

class RegexMatchSetUpdates {
}

class RegexMatchTuple {
  public FieldToMatch $field_to_match;
  public ResourceId $regex_pattern_set_id;
  public TextTransformation $text_transformation;
}

class RegexMatchTuples {
}

class RegexPatternSet {
  public ResourceName $name;
  public ResourceId $regex_pattern_set_id;
  public RegexPatternStrings $regex_pattern_strings;
}

class RegexPatternSetSummaries {
}

class RegexPatternSetSummary {
  public ResourceName $name;
  public ResourceId $regex_pattern_set_id;
}

class RegexPatternSetUpdate {
  public ChangeAction $action;
  public RegexPatternString $regex_pattern_string;
}

class RegexPatternSetUpdates {
}

class RegexPatternString {
}

class RegexPatternStrings {
}

class ResourceArn {
}

class ResourceArns {
}

class ResourceId {
}

class ResourceName {
}

class ResourceType {
}

class Rule {
  public MetricName $metric_name;
  public ResourceName $name;
  public Predicates $predicates;
  public ResourceId $rule_id;
}

class RuleGroup {
  public MetricName $metric_name;
  public ResourceName $name;
  public ResourceId $rule_group_id;
}

class RuleGroupSummaries {
}

class RuleGroupSummary {
  public ResourceName $name;
  public ResourceId $rule_group_id;
}

class RuleGroupUpdate {
  public ChangeAction $action;
  public ActivatedRule $activated_rule;
}

class RuleGroupUpdates {
}

class RulePriority {
}

class RuleSummaries {
}

class RuleSummary {
  public ResourceName $name;
  public ResourceId $rule_id;
}

class RuleUpdate {
  public ChangeAction $action;
  public Predicate $predicate;
}

class RuleUpdates {
}

class SampleWeight {
}

class SampledHTTPRequest {
  public Action $action;
  public HTTPRequest $request;
  public ResourceId $rule_within_rule_group;
  public Timestamp $timestamp;
  public SampleWeight $weight;
}

class SampledHTTPRequests {
}

class Size {
}

class SizeConstraint {
  public ComparisonOperator $comparison_operator;
  public FieldToMatch $field_to_match;
  public Size $size;
  public TextTransformation $text_transformation;
}

class SizeConstraintSet {
  public ResourceName $name;
  public ResourceId $size_constraint_set_id;
  public SizeConstraints $size_constraints;
}

class SizeConstraintSetSummaries {
}

class SizeConstraintSetSummary {
  public ResourceName $name;
  public ResourceId $size_constraint_set_id;
}

class SizeConstraintSetUpdate {
  public ChangeAction $action;
  public SizeConstraint $size_constraint;
}

class SizeConstraintSetUpdates {
}

class SizeConstraints {
}

class SqlInjectionMatchSet {
  public ResourceName $name;
  public ResourceId $sql_injection_match_set_id;
  public SqlInjectionMatchTuples $sql_injection_match_tuples;
}

class SqlInjectionMatchSetSummaries {
}

class SqlInjectionMatchSetSummary {
  public ResourceName $name;
  public ResourceId $sql_injection_match_set_id;
}

class SqlInjectionMatchSetUpdate {
  public ChangeAction $action;
  public SqlInjectionMatchTuple $sql_injection_match_tuple;
}

class SqlInjectionMatchSetUpdates {
}

class SqlInjectionMatchTuple {
  public FieldToMatch $field_to_match;
  public TextTransformation $text_transformation;
}

class SqlInjectionMatchTuples {
}

class SubscribedRuleGroupSummaries {
}

class SubscribedRuleGroupSummary {
  public MetricName $metric_name;
  public ResourceName $name;
  public ResourceId $rule_group_id;
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

class UpdateByteMatchSetRequest {
  public ResourceId $byte_match_set_id;
  public ChangeToken $change_token;
  public ByteMatchSetUpdates $updates;
}

class UpdateByteMatchSetResponse {
  public ChangeToken $change_token;
}

class UpdateGeoMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $geo_match_set_id;
  public GeoMatchSetUpdates $updates;
}

class UpdateGeoMatchSetResponse {
  public ChangeToken $change_token;
}

class UpdateIPSetRequest {
  public ChangeToken $change_token;
  public ResourceId $ip_set_id;
  public IPSetUpdates $updates;
}

class UpdateIPSetResponse {
  public ChangeToken $change_token;
}

class UpdateRateBasedRuleRequest {
  public ChangeToken $change_token;
  public RateLimit $rate_limit;
  public ResourceId $rule_id;
  public RuleUpdates $updates;
}

class UpdateRateBasedRuleResponse {
  public ChangeToken $change_token;
}

class UpdateRegexMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_match_set_id;
  public RegexMatchSetUpdates $updates;
}

class UpdateRegexMatchSetResponse {
  public ChangeToken $change_token;
}

class UpdateRegexPatternSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_pattern_set_id;
  public RegexPatternSetUpdates $updates;
}

class UpdateRegexPatternSetResponse {
  public ChangeToken $change_token;
}

class UpdateRuleGroupRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_group_id;
  public RuleGroupUpdates $updates;
}

class UpdateRuleGroupResponse {
  public ChangeToken $change_token;
}

class UpdateRuleRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_id;
  public RuleUpdates $updates;
}

class UpdateRuleResponse {
  public ChangeToken $change_token;
}

class UpdateSizeConstraintSetRequest {
  public ChangeToken $change_token;
  public ResourceId $size_constraint_set_id;
  public SizeConstraintSetUpdates $updates;
}

class UpdateSizeConstraintSetResponse {
  public ChangeToken $change_token;
}

class UpdateSqlInjectionMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $sql_injection_match_set_id;
  public SqlInjectionMatchSetUpdates $updates;
}

class UpdateSqlInjectionMatchSetResponse {
  public ChangeToken $change_token;
}

class UpdateWebACLRequest {
  public ChangeToken $change_token;
  public WafAction $default_action;
  public WebACLUpdates $updates;
  public ResourceId $web_acl_id;
}

class UpdateWebACLResponse {
  public ChangeToken $change_token;
}

class UpdateXssMatchSetRequest {
  public ChangeToken $change_token;
  public XssMatchSetUpdates $updates;
  public ResourceId $xss_match_set_id;
}

class UpdateXssMatchSetResponse {
  public ChangeToken $change_token;
}

class WAFBadRequestException {
  public errorMessage $message;
}

class WAFDisallowedNameException {
  public errorMessage $message;
}

class WAFInternalErrorException {
  public errorMessage $message;
}

class WAFInvalidAccountException {
}

class WAFInvalidOperationException {
  public errorMessage $message;
}

class WAFInvalidParameterException {
  public ParameterExceptionField $field;
  public ParameterExceptionParameter $parameter;
  public ParameterExceptionReason $reason;
}

class WAFInvalidPermissionPolicyException {
  public errorMessage $message;
}

class WAFInvalidRegexPatternException {
  public errorMessage $message;
}

class WAFLimitsExceededException {
  public errorMessage $message;
}

class WAFNonEmptyEntityException {
  public errorMessage $message;
}

class WAFNonexistentContainerException {
  public errorMessage $message;
}

class WAFNonexistentItemException {
  public errorMessage $message;
}

class WAFReferencedItemException {
  public errorMessage $message;
}

class WAFServiceLinkedRoleErrorException {
  public errorMessage $message;
}

class WAFStaleDataException {
  public errorMessage $message;
}

class WAFSubscriptionNotFoundException {
  public errorMessage $message;
}

class WAFTagOperationException {
  public errorMessage $message;
}

class WAFTagOperationInternalErrorException {
  public errorMessage $message;
}

class WAFUnavailableEntityException {
  public errorMessage $message;
}

class WafAction {
  public WafActionType $type;
}

class WafActionType {
}

class WafOverrideAction {
  public WafOverrideActionType $type;
}

class WafOverrideActionType {
}

class WafRuleType {
}

class WebACL {
  public WafAction $default_action;
  public MetricName $metric_name;
  public ResourceName $name;
  public ActivatedRules $rules;
  public ResourceArn $web_acl_arn;
  public ResourceId $web_acl_id;
}

class WebACLSummaries {
}

class WebACLSummary {
  public ResourceName $name;
  public ResourceId $web_acl_id;
}

class WebACLUpdate {
  public ChangeAction $action;
  public ActivatedRule $activated_rule;
}

class WebACLUpdates {
}

class XssMatchSet {
  public ResourceName $name;
  public ResourceId $xss_match_set_id;
  public XssMatchTuples $xss_match_tuples;
}

class XssMatchSetSummaries {
}

class XssMatchSetSummary {
  public ResourceName $name;
  public ResourceId $xss_match_set_id;
}

class XssMatchSetUpdate {
  public ChangeAction $action;
  public XssMatchTuple $xss_match_tuple;
}

class XssMatchSetUpdates {
}

class XssMatchTuple {
  public FieldToMatch $field_to_match;
  public TextTransformation $text_transformation;
}

class XssMatchTuples {
}

class errorMessage {
}

