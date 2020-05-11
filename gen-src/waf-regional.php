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

type Action = string;

class ActivatedRule {
  public WafAction $action;
  public ExcludedRules $excluded_rules;
  public WafOverrideAction $override_action;
  public RulePriority $priority;
  public ResourceId $rule_id;
  public WafRuleType $type;

  public function __construct(shape(
  ?'action' => WafAction,
  ?'excluded_rules' => ExcludedRules,
  ?'override_action' => WafOverrideAction,
  ?'priority' => RulePriority,
  ?'rule_id' => ResourceId,
  ?'type' => WafRuleType,
  ) $s = shape()) {
    $this->action = $action ?? null;
    $this->excluded_rules = $excluded_rules ?? [];
    $this->override_action = $override_action ?? null;
    $this->priority = $priority ?? 0;
    $this->rule_id = $rule_id ?? "";
    $this->type = $type ?? "";
  }
}

type ActivatedRules = vec<ActivatedRule>;

class AssociateWebACLRequest {
  public ResourceArn $resource_arn;
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

class AssociateWebACLResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ByteMatchSet {
  public ResourceId $byte_match_set_id;
  public ByteMatchTuples $byte_match_tuples;
  public ResourceName $name;

  public function __construct(shape(
  ?'byte_match_set_id' => ResourceId,
  ?'byte_match_tuples' => ByteMatchTuples,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->byte_match_set_id = $byte_match_set_id ?? "";
    $this->byte_match_tuples = $byte_match_tuples ?? [];
    $this->name = $name ?? "";
  }
}

type ByteMatchSetSummaries = vec<ByteMatchSetSummary>;

class ByteMatchSetSummary {
  public ResourceId $byte_match_set_id;
  public ResourceName $name;

  public function __construct(shape(
  ?'byte_match_set_id' => ResourceId,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->byte_match_set_id = $byte_match_set_id ?? "";
    $this->name = $name ?? "";
  }
}

class ByteMatchSetUpdate {
  public ChangeAction $action;
  public ByteMatchTuple $byte_match_tuple;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'byte_match_tuple' => ByteMatchTuple,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->byte_match_tuple = $byte_match_tuple ?? null;
  }
}

type ByteMatchSetUpdates = vec<ByteMatchSetUpdate>;

type ByteMatchTargetString = string;

class ByteMatchTuple {
  public FieldToMatch $field_to_match;
  public PositionalConstraint $positional_constraint;
  public ByteMatchTargetString $target_string;
  public TextTransformation $text_transformation;

  public function __construct(shape(
  ?'field_to_match' => FieldToMatch,
  ?'positional_constraint' => PositionalConstraint,
  ?'target_string' => ByteMatchTargetString,
  ?'text_transformation' => TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $field_to_match ?? null;
    $this->positional_constraint = $positional_constraint ?? "";
    $this->target_string = $target_string ?? "";
    $this->text_transformation = $text_transformation ?? "";
  }
}

type ByteMatchTuples = vec<ByteMatchTuple>;

type ChangeAction = string;

type ChangeToken = string;

type ChangeTokenStatus = string;

type ComparisonOperator = string;

type Country = string;

class CreateByteMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateByteMatchSetResponse {
  public ByteMatchSet $byte_match_set;
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'byte_match_set' => ByteMatchSet,
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->byte_match_set = $byte_match_set ?? null;
    $this->change_token = $change_token ?? "";
  }
}

class CreateGeoMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateGeoMatchSetResponse {
  public ChangeToken $change_token;
  public GeoMatchSet $geo_match_set;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'geo_match_set' => GeoMatchSet,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->geo_match_set = $geo_match_set ?? null;
  }
}

class CreateIPSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateIPSetResponse {
  public ChangeToken $change_token;
  public IPSet $ip_set;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'ip_set' => IPSet,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->ip_set = $ip_set ?? null;
  }
}

class CreateRateBasedRuleRequest {
  public ChangeToken $change_token;
  public MetricName $metric_name;
  public ResourceName $name;
  public RateKey $rate_key;
  public RateLimit $rate_limit;
  public TagList $tags;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'rate_key' => RateKey,
  ?'rate_limit' => RateLimit,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->rate_key = $rate_key ?? "";
    $this->rate_limit = $rate_limit ?? 0;
    $this->tags = $tags ?? [];
  }
}

class CreateRateBasedRuleResponse {
  public ChangeToken $change_token;
  public RateBasedRule $rule;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule' => RateBasedRule,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule = $rule ?? null;
  }
}

class CreateRegexMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateRegexMatchSetResponse {
  public ChangeToken $change_token;
  public RegexMatchSet $regex_match_set;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'regex_match_set' => RegexMatchSet,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->regex_match_set = $regex_match_set ?? null;
  }
}

class CreateRegexPatternSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateRegexPatternSetResponse {
  public ChangeToken $change_token;
  public RegexPatternSet $regex_pattern_set;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'regex_pattern_set' => RegexPatternSet,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->regex_pattern_set = $regex_pattern_set ?? null;
  }
}

class CreateRuleGroupRequest {
  public ChangeToken $change_token;
  public MetricName $metric_name;
  public ResourceName $name;
  public TagList $tags;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateRuleGroupResponse {
  public ChangeToken $change_token;
  public RuleGroup $rule_group;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule_group' => RuleGroup,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule_group = $rule_group ?? null;
  }
}

class CreateRuleRequest {
  public ChangeToken $change_token;
  public MetricName $metric_name;
  public ResourceName $name;
  public TagList $tags;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateRuleResponse {
  public ChangeToken $change_token;
  public Rule $rule;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule' => Rule,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule = $rule ?? null;
  }
}

class CreateSizeConstraintSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateSizeConstraintSetResponse {
  public ChangeToken $change_token;
  public SizeConstraintSet $size_constraint_set;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'size_constraint_set' => SizeConstraintSet,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->size_constraint_set = $size_constraint_set ?? null;
  }
}

class CreateSqlInjectionMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateSqlInjectionMatchSetResponse {
  public ChangeToken $change_token;
  public SqlInjectionMatchSet $sql_injection_match_set;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'sql_injection_match_set' => SqlInjectionMatchSet,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->sql_injection_match_set = $sql_injection_match_set ?? null;
  }
}

class CreateWebACLRequest {
  public ChangeToken $change_token;
  public WafAction $default_action;
  public MetricName $metric_name;
  public ResourceName $name;
  public TagList $tags;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'default_action' => WafAction,
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->default_action = $default_action ?? null;
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateWebACLResponse {
  public ChangeToken $change_token;
  public WebACL $web_acl;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'web_acl' => WebACL,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->web_acl = $web_acl ?? null;
  }
}

class CreateXssMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceName $name;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateXssMatchSetResponse {
  public ChangeToken $change_token;
  public XssMatchSet $xss_match_set;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'xss_match_set' => XssMatchSet,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->xss_match_set = $xss_match_set ?? null;
  }
}

class DeleteByteMatchSetRequest {
  public ResourceId $byte_match_set_id;
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'byte_match_set_id' => ResourceId,
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->byte_match_set_id = $byte_match_set_id ?? "";
    $this->change_token = $change_token ?? "";
  }
}

class DeleteByteMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteGeoMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $geo_match_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'geo_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->geo_match_set_id = $geo_match_set_id ?? "";
  }
}

class DeleteGeoMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteIPSetRequest {
  public ChangeToken $change_token;
  public ResourceId $ip_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'ip_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->ip_set_id = $ip_set_id ?? "";
  }
}

class DeleteIPSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteLoggingConfigurationRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class DeleteLoggingConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePermissionPolicyRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class DeletePermissionPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRateBasedRuleRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule_id = $rule_id ?? "";
  }
}

class DeleteRateBasedRuleResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteRegexMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_match_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'regex_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->regex_match_set_id = $regex_match_set_id ?? "";
  }
}

class DeleteRegexMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteRegexPatternSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_pattern_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'regex_pattern_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->regex_pattern_set_id = $regex_pattern_set_id ?? "";
  }
}

class DeleteRegexPatternSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteRuleGroupRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_group_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule_group_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule_group_id = $rule_group_id ?? "";
  }
}

class DeleteRuleGroupResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteRuleRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule_id = $rule_id ?? "";
  }
}

class DeleteRuleResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteSizeConstraintSetRequest {
  public ChangeToken $change_token;
  public ResourceId $size_constraint_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'size_constraint_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->size_constraint_set_id = $size_constraint_set_id ?? "";
  }
}

class DeleteSizeConstraintSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteSqlInjectionMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $sql_injection_match_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'sql_injection_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->sql_injection_match_set_id = $sql_injection_match_set_id ?? "";
  }
}

class DeleteSqlInjectionMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteWebACLRequest {
  public ChangeToken $change_token;
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

class DeleteWebACLResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DeleteXssMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $xss_match_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'xss_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->xss_match_set_id = $xss_match_set_id ?? "";
  }
}

class DeleteXssMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class DisassociateWebACLRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class DisassociateWebACLResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ExcludedRule {
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->rule_id = $rule_id ?? "";
  }
}

type ExcludedRules = vec<ExcludedRule>;

class FieldToMatch {
  public MatchFieldData $data;
  public MatchFieldType $type;

  public function __construct(shape(
  ?'data' => MatchFieldData,
  ?'type' => MatchFieldType,
  ) $s = shape()) {
    $this->data = $data ?? "";
    $this->type = $type ?? "";
  }
}

class GeoMatchConstraint {
  public GeoMatchConstraintType $type;
  public GeoMatchConstraintValue $value;

  public function __construct(shape(
  ?'type' => GeoMatchConstraintType,
  ?'value' => GeoMatchConstraintValue,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

type GeoMatchConstraintType = string;

type GeoMatchConstraintValue = string;

type GeoMatchConstraints = vec<GeoMatchConstraint>;

class GeoMatchSet {
  public GeoMatchConstraints $geo_match_constraints;
  public ResourceId $geo_match_set_id;
  public ResourceName $name;

  public function __construct(shape(
  ?'geo_match_constraints' => GeoMatchConstraints,
  ?'geo_match_set_id' => ResourceId,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->geo_match_constraints = $geo_match_constraints ?? [];
    $this->geo_match_set_id = $geo_match_set_id ?? "";
    $this->name = $name ?? "";
  }
}

type GeoMatchSetSummaries = vec<GeoMatchSetSummary>;

class GeoMatchSetSummary {
  public ResourceId $geo_match_set_id;
  public ResourceName $name;

  public function __construct(shape(
  ?'geo_match_set_id' => ResourceId,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->geo_match_set_id = $geo_match_set_id ?? "";
    $this->name = $name ?? "";
  }
}

class GeoMatchSetUpdate {
  public ChangeAction $action;
  public GeoMatchConstraint $geo_match_constraint;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'geo_match_constraint' => GeoMatchConstraint,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->geo_match_constraint = $geo_match_constraint ?? null;
  }
}

type GeoMatchSetUpdates = vec<GeoMatchSetUpdate>;

class GetByteMatchSetRequest {
  public ResourceId $byte_match_set_id;

  public function __construct(shape(
  ?'byte_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->byte_match_set_id = $byte_match_set_id ?? "";
  }
}

class GetByteMatchSetResponse {
  public ByteMatchSet $byte_match_set;

  public function __construct(shape(
  ?'byte_match_set' => ByteMatchSet,
  ) $s = shape()) {
    $this->byte_match_set = $byte_match_set ?? null;
  }
}

class GetChangeTokenRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetChangeTokenResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class GetChangeTokenStatusRequest {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class GetChangeTokenStatusResponse {
  public ChangeTokenStatus $change_token_status;

  public function __construct(shape(
  ?'change_token_status' => ChangeTokenStatus,
  ) $s = shape()) {
    $this->change_token_status = $change_token_status ?? "";
  }
}

class GetGeoMatchSetRequest {
  public ResourceId $geo_match_set_id;

  public function __construct(shape(
  ?'geo_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->geo_match_set_id = $geo_match_set_id ?? "";
  }
}

class GetGeoMatchSetResponse {
  public GeoMatchSet $geo_match_set;

  public function __construct(shape(
  ?'geo_match_set' => GeoMatchSet,
  ) $s = shape()) {
    $this->geo_match_set = $geo_match_set ?? null;
  }
}

class GetIPSetRequest {
  public ResourceId $ip_set_id;

  public function __construct(shape(
  ?'ip_set_id' => ResourceId,
  ) $s = shape()) {
    $this->ip_set_id = $ip_set_id ?? "";
  }
}

class GetIPSetResponse {
  public IPSet $ip_set;

  public function __construct(shape(
  ?'ip_set' => IPSet,
  ) $s = shape()) {
    $this->ip_set = $ip_set ?? null;
  }
}

class GetLoggingConfigurationRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class GetLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;

  public function __construct(shape(
  ?'logging_configuration' => LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $logging_configuration ?? null;
  }
}

class GetPermissionPolicyRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class GetPermissionPolicyResponse {
  public PolicyString $policy;

  public function __construct(shape(
  ?'policy' => PolicyString,
  ) $s = shape()) {
    $this->policy = $policy ?? "";
  }
}

class GetRateBasedRuleManagedKeysRequest {
  public NextMarker $next_marker;
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->rule_id = $rule_id ?? "";
  }
}

class GetRateBasedRuleManagedKeysResponse {
  public ManagedKeys $managed_keys;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'managed_keys' => ManagedKeys,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->managed_keys = $managed_keys ?? [];
    $this->next_marker = $next_marker ?? "";
  }
}

class GetRateBasedRuleRequest {
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->rule_id = $rule_id ?? "";
  }
}

class GetRateBasedRuleResponse {
  public RateBasedRule $rule;

  public function __construct(shape(
  ?'rule' => RateBasedRule,
  ) $s = shape()) {
    $this->rule = $rule ?? null;
  }
}

class GetRegexMatchSetRequest {
  public ResourceId $regex_match_set_id;

  public function __construct(shape(
  ?'regex_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->regex_match_set_id = $regex_match_set_id ?? "";
  }
}

class GetRegexMatchSetResponse {
  public RegexMatchSet $regex_match_set;

  public function __construct(shape(
  ?'regex_match_set' => RegexMatchSet,
  ) $s = shape()) {
    $this->regex_match_set = $regex_match_set ?? null;
  }
}

class GetRegexPatternSetRequest {
  public ResourceId $regex_pattern_set_id;

  public function __construct(shape(
  ?'regex_pattern_set_id' => ResourceId,
  ) $s = shape()) {
    $this->regex_pattern_set_id = $regex_pattern_set_id ?? "";
  }
}

class GetRegexPatternSetResponse {
  public RegexPatternSet $regex_pattern_set;

  public function __construct(shape(
  ?'regex_pattern_set' => RegexPatternSet,
  ) $s = shape()) {
    $this->regex_pattern_set = $regex_pattern_set ?? null;
  }
}

class GetRuleGroupRequest {
  public ResourceId $rule_group_id;

  public function __construct(shape(
  ?'rule_group_id' => ResourceId,
  ) $s = shape()) {
    $this->rule_group_id = $rule_group_id ?? "";
  }
}

class GetRuleGroupResponse {
  public RuleGroup $rule_group;

  public function __construct(shape(
  ?'rule_group' => RuleGroup,
  ) $s = shape()) {
    $this->rule_group = $rule_group ?? null;
  }
}

class GetRuleRequest {
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->rule_id = $rule_id ?? "";
  }
}

class GetRuleResponse {
  public Rule $rule;

  public function __construct(shape(
  ?'rule' => Rule,
  ) $s = shape()) {
    $this->rule = $rule ?? null;
  }
}

type GetSampledRequestsMaxItems = int;

class GetSampledRequestsRequest {
  public GetSampledRequestsMaxItems $max_items;
  public ResourceId $rule_id;
  public TimeWindow $time_window;
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'max_items' => GetSampledRequestsMaxItems,
  ?'rule_id' => ResourceId,
  ?'time_window' => TimeWindow,
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->max_items = $max_items ?? 0;
    $this->rule_id = $rule_id ?? "";
    $this->time_window = $time_window ?? null;
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

class GetSampledRequestsResponse {
  public PopulationSize $population_size;
  public SampledHTTPRequests $sampled_requests;
  public TimeWindow $time_window;

  public function __construct(shape(
  ?'population_size' => PopulationSize,
  ?'sampled_requests' => SampledHTTPRequests,
  ?'time_window' => TimeWindow,
  ) $s = shape()) {
    $this->population_size = $population_size ?? 0;
    $this->sampled_requests = $sampled_requests ?? [];
    $this->time_window = $time_window ?? null;
  }
}

class GetSizeConstraintSetRequest {
  public ResourceId $size_constraint_set_id;

  public function __construct(shape(
  ?'size_constraint_set_id' => ResourceId,
  ) $s = shape()) {
    $this->size_constraint_set_id = $size_constraint_set_id ?? "";
  }
}

class GetSizeConstraintSetResponse {
  public SizeConstraintSet $size_constraint_set;

  public function __construct(shape(
  ?'size_constraint_set' => SizeConstraintSet,
  ) $s = shape()) {
    $this->size_constraint_set = $size_constraint_set ?? null;
  }
}

class GetSqlInjectionMatchSetRequest {
  public ResourceId $sql_injection_match_set_id;

  public function __construct(shape(
  ?'sql_injection_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->sql_injection_match_set_id = $sql_injection_match_set_id ?? "";
  }
}

class GetSqlInjectionMatchSetResponse {
  public SqlInjectionMatchSet $sql_injection_match_set;

  public function __construct(shape(
  ?'sql_injection_match_set' => SqlInjectionMatchSet,
  ) $s = shape()) {
    $this->sql_injection_match_set = $sql_injection_match_set ?? null;
  }
}

class GetWebACLForResourceRequest {
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class GetWebACLForResourceResponse {
  public WebACLSummary $web_acl_summary;

  public function __construct(shape(
  ?'web_acl_summary' => WebACLSummary,
  ) $s = shape()) {
    $this->web_acl_summary = $web_acl_summary ?? null;
  }
}

class GetWebACLRequest {
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

class GetWebACLResponse {
  public WebACL $web_acl;

  public function __construct(shape(
  ?'web_acl' => WebACL,
  ) $s = shape()) {
    $this->web_acl = $web_acl ?? null;
  }
}

class GetXssMatchSetRequest {
  public ResourceId $xss_match_set_id;

  public function __construct(shape(
  ?'xss_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->xss_match_set_id = $xss_match_set_id ?? "";
  }
}

class GetXssMatchSetResponse {
  public XssMatchSet $xss_match_set;

  public function __construct(shape(
  ?'xss_match_set' => XssMatchSet,
  ) $s = shape()) {
    $this->xss_match_set = $xss_match_set ?? null;
  }
}

class HTTPHeader {
  public HeaderName $name;
  public HeaderValue $value;

  public function __construct(shape(
  ?'name' => HeaderName,
  ?'value' => HeaderValue,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type HTTPHeaders = vec<HTTPHeader>;

type HTTPMethod = string;

class HTTPRequest {
  public IPString $client_ip;
  public Country $country;
  public HTTPVersion $http_version;
  public HTTPHeaders $headers;
  public HTTPMethod $method;
  public URIString $uri;

  public function __construct(shape(
  ?'client_ip' => IPString,
  ?'country' => Country,
  ?'http_version' => HTTPVersion,
  ?'headers' => HTTPHeaders,
  ?'method' => HTTPMethod,
  ?'uri' => URIString,
  ) $s = shape()) {
    $this->client_ip = $client_ip ?? "";
    $this->country = $country ?? "";
    $this->http_version = $http_version ?? "";
    $this->headers = $headers ?? [];
    $this->method = $method ?? "";
    $this->uri = $uri ?? "";
  }
}

type HTTPVersion = string;

type HeaderName = string;

type HeaderValue = string;

class IPSet {
  public IPSetDescriptors $ip_set_descriptors;
  public ResourceId $ip_set_id;
  public ResourceName $name;

  public function __construct(shape(
  ?'ip_set_descriptors' => IPSetDescriptors,
  ?'ip_set_id' => ResourceId,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->ip_set_descriptors = $ip_set_descriptors ?? [];
    $this->ip_set_id = $ip_set_id ?? "";
    $this->name = $name ?? "";
  }
}

class IPSetDescriptor {
  public IPSetDescriptorType $type;
  public IPSetDescriptorValue $value;

  public function __construct(shape(
  ?'type' => IPSetDescriptorType,
  ?'value' => IPSetDescriptorValue,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

type IPSetDescriptorType = string;

type IPSetDescriptorValue = string;

type IPSetDescriptors = vec<IPSetDescriptor>;

type IPSetSummaries = vec<IPSetSummary>;

class IPSetSummary {
  public ResourceId $ip_set_id;
  public ResourceName $name;

  public function __construct(shape(
  ?'ip_set_id' => ResourceId,
  ?'name' => ResourceName,
  ) $s = shape()) {
    $this->ip_set_id = $ip_set_id ?? "";
    $this->name = $name ?? "";
  }
}

class IPSetUpdate {
  public ChangeAction $action;
  public IPSetDescriptor $ip_set_descriptor;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'ip_set_descriptor' => IPSetDescriptor,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->ip_set_descriptor = $ip_set_descriptor ?? null;
  }
}

type IPSetUpdates = vec<IPSetUpdate>;

type IPString = string;

class ListActivatedRulesInRuleGroupRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public ResourceId $rule_group_id;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'rule_group_id' => ResourceId,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
    $this->rule_group_id = $rule_group_id ?? "";
  }
}

class ListActivatedRulesInRuleGroupResponse {
  public ActivatedRules $activated_rules;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'activated_rules' => ActivatedRules,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->activated_rules = $activated_rules ?? [];
    $this->next_marker = $next_marker ?? "";
  }
}

class ListByteMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListByteMatchSetsResponse {
  public ByteMatchSetSummaries $byte_match_sets;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'byte_match_sets' => ByteMatchSetSummaries,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->byte_match_sets = $byte_match_sets ?? [];
    $this->next_marker = $next_marker ?? "";
  }
}

class ListGeoMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListGeoMatchSetsResponse {
  public GeoMatchSetSummaries $geo_match_sets;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'geo_match_sets' => GeoMatchSetSummaries,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->geo_match_sets = $geo_match_sets ?? [];
    $this->next_marker = $next_marker ?? "";
  }
}

class ListIPSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListIPSetsResponse {
  public IPSetSummaries $ip_sets;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'ip_sets' => IPSetSummaries,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->ip_sets = $ip_sets ?? [];
    $this->next_marker = $next_marker ?? "";
  }
}

class ListLoggingConfigurationsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListLoggingConfigurationsResponse {
  public LoggingConfigurations $logging_configurations;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'logging_configurations' => LoggingConfigurations,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->logging_configurations = $logging_configurations ?? [];
    $this->next_marker = $next_marker ?? "";
  }
}

class ListRateBasedRulesRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListRateBasedRulesResponse {
  public NextMarker $next_marker;
  public RuleSummaries $rules;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'rules' => RuleSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->rules = $rules ?? [];
  }
}

class ListRegexMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListRegexMatchSetsResponse {
  public NextMarker $next_marker;
  public RegexMatchSetSummaries $regex_match_sets;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'regex_match_sets' => RegexMatchSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->regex_match_sets = $regex_match_sets ?? [];
  }
}

class ListRegexPatternSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListRegexPatternSetsResponse {
  public NextMarker $next_marker;
  public RegexPatternSetSummaries $regex_pattern_sets;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'regex_pattern_sets' => RegexPatternSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->regex_pattern_sets = $regex_pattern_sets ?? [];
  }
}

class ListResourcesForWebACLRequest {
  public ResourceType $resource_type;
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'resource_type' => ResourceType,
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->resource_type = $resource_type ?? "";
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

class ListResourcesForWebACLResponse {
  public ResourceArns $resource_arns;

  public function __construct(shape(
  ?'resource_arns' => ResourceArns,
  ) $s = shape()) {
    $this->resource_arns = $resource_arns ?? [];
  }
}

class ListRuleGroupsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListRuleGroupsResponse {
  public NextMarker $next_marker;
  public RuleGroupSummaries $rule_groups;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'rule_groups' => RuleGroupSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->rule_groups = $rule_groups ?? [];
  }
}

class ListRulesRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListRulesResponse {
  public NextMarker $next_marker;
  public RuleSummaries $rules;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'rules' => RuleSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->rules = $rules ?? [];
  }
}

class ListSizeConstraintSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListSizeConstraintSetsResponse {
  public NextMarker $next_marker;
  public SizeConstraintSetSummaries $size_constraint_sets;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'size_constraint_sets' => SizeConstraintSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->size_constraint_sets = $size_constraint_sets ?? [];
  }
}

class ListSqlInjectionMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListSqlInjectionMatchSetsResponse {
  public NextMarker $next_marker;
  public SqlInjectionMatchSetSummaries $sql_injection_match_sets;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'sql_injection_match_sets' => SqlInjectionMatchSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->sql_injection_match_sets = $sql_injection_match_sets ?? [];
  }
}

class ListSubscribedRuleGroupsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListSubscribedRuleGroupsResponse {
  public NextMarker $next_marker;
  public SubscribedRuleGroupSummaries $rule_groups;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'rule_groups' => SubscribedRuleGroupSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->rule_groups = $rule_groups ?? [];
  }
}

class ListTagsForResourceRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public NextMarker $next_marker;
  public TagInfoForResource $tag_info_for_resource;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'tag_info_for_resource' => TagInfoForResource,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->tag_info_for_resource = $tag_info_for_resource ?? null;
  }
}

class ListWebACLsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListWebACLsResponse {
  public NextMarker $next_marker;
  public WebACLSummaries $web_ac_ls;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'web_ac_ls' => WebACLSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->web_ac_ls = $web_ac_ls ?? [];
  }
}

class ListXssMatchSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->limit = $limit ?? 0;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListXssMatchSetsResponse {
  public NextMarker $next_marker;
  public XssMatchSetSummaries $xss_match_sets;

  public function __construct(shape(
  ?'next_marker' => NextMarker,
  ?'xss_match_sets' => XssMatchSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $next_marker ?? "";
    $this->xss_match_sets = $xss_match_sets ?? [];
  }
}

type LogDestinationConfigs = vec<ResourceArn>;

class LoggingConfiguration {
  public LogDestinationConfigs $log_destination_configs;
  public RedactedFields $redacted_fields;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'log_destination_configs' => LogDestinationConfigs,
  ?'redacted_fields' => RedactedFields,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->log_destination_configs = $log_destination_configs ?? [];
    $this->redacted_fields = $redacted_fields ?? [];
    $this->resource_arn = $resource_arn ?? "";
  }
}

type LoggingConfigurations = vec<LoggingConfiguration>;

type ManagedKey = string;

type ManagedKeys = vec<ManagedKey>;

type MatchFieldData = string;

type MatchFieldType = string;

type MetricName = string;

type Negated = bool;

type NextMarker = string;

type PaginationLimit = int;

type ParameterExceptionField = string;

type ParameterExceptionParameter = string;

type ParameterExceptionReason = string;

type PolicyString = string;

type PopulationSize = int;

type PositionalConstraint = string;

class Predicate {
  public ResourceId $data_id;
  public Negated $negated;
  public PredicateType $type;

  public function __construct(shape(
  ?'data_id' => ResourceId,
  ?'negated' => Negated,
  ?'type' => PredicateType,
  ) $s = shape()) {
    $this->data_id = $data_id ?? "";
    $this->negated = $negated ?? false;
    $this->type = $type ?? "";
  }
}

type PredicateType = string;

type Predicates = vec<Predicate>;

class PutLoggingConfigurationRequest {
  public LoggingConfiguration $logging_configuration;

  public function __construct(shape(
  ?'logging_configuration' => LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $logging_configuration ?? null;
  }
}

class PutLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;

  public function __construct(shape(
  ?'logging_configuration' => LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $logging_configuration ?? null;
  }
}

class PutPermissionPolicyRequest {
  public PolicyString $policy;
  public ResourceArn $resource_arn;

  public function __construct(shape(
  ?'policy' => PolicyString,
  ?'resource_arn' => ResourceArn,
  ) $s = shape()) {
    $this->policy = $policy ?? "";
    $this->resource_arn = $resource_arn ?? "";
  }
}

class PutPermissionPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RateBasedRule {
  public Predicates $match_predicates;
  public MetricName $metric_name;
  public ResourceName $name;
  public RateKey $rate_key;
  public RateLimit $rate_limit;
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'match_predicates' => Predicates,
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'rate_key' => RateKey,
  ?'rate_limit' => RateLimit,
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->match_predicates = $match_predicates ?? [];
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->rate_key = $rate_key ?? "";
    $this->rate_limit = $rate_limit ?? 0;
    $this->rule_id = $rule_id ?? "";
  }
}

type RateKey = string;

type RateLimit = int;

type RedactedFields = vec<FieldToMatch>;

class RegexMatchSet {
  public ResourceName $name;
  public ResourceId $regex_match_set_id;
  public RegexMatchTuples $regex_match_tuples;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'regex_match_set_id' => ResourceId,
  ?'regex_match_tuples' => RegexMatchTuples,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->regex_match_set_id = $regex_match_set_id ?? "";
    $this->regex_match_tuples = $regex_match_tuples ?? [];
  }
}

type RegexMatchSetSummaries = vec<RegexMatchSetSummary>;

class RegexMatchSetSummary {
  public ResourceName $name;
  public ResourceId $regex_match_set_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'regex_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->regex_match_set_id = $regex_match_set_id ?? "";
  }
}

class RegexMatchSetUpdate {
  public ChangeAction $action;
  public RegexMatchTuple $regex_match_tuple;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'regex_match_tuple' => RegexMatchTuple,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->regex_match_tuple = $regex_match_tuple ?? null;
  }
}

type RegexMatchSetUpdates = vec<RegexMatchSetUpdate>;

class RegexMatchTuple {
  public FieldToMatch $field_to_match;
  public ResourceId $regex_pattern_set_id;
  public TextTransformation $text_transformation;

  public function __construct(shape(
  ?'field_to_match' => FieldToMatch,
  ?'regex_pattern_set_id' => ResourceId,
  ?'text_transformation' => TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $field_to_match ?? null;
    $this->regex_pattern_set_id = $regex_pattern_set_id ?? "";
    $this->text_transformation = $text_transformation ?? "";
  }
}

type RegexMatchTuples = vec<RegexMatchTuple>;

class RegexPatternSet {
  public ResourceName $name;
  public ResourceId $regex_pattern_set_id;
  public RegexPatternStrings $regex_pattern_strings;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'regex_pattern_set_id' => ResourceId,
  ?'regex_pattern_strings' => RegexPatternStrings,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->regex_pattern_set_id = $regex_pattern_set_id ?? "";
    $this->regex_pattern_strings = $regex_pattern_strings ?? [];
  }
}

type RegexPatternSetSummaries = vec<RegexPatternSetSummary>;

class RegexPatternSetSummary {
  public ResourceName $name;
  public ResourceId $regex_pattern_set_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'regex_pattern_set_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->regex_pattern_set_id = $regex_pattern_set_id ?? "";
  }
}

class RegexPatternSetUpdate {
  public ChangeAction $action;
  public RegexPatternString $regex_pattern_string;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'regex_pattern_string' => RegexPatternString,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->regex_pattern_string = $regex_pattern_string ?? "";
  }
}

type RegexPatternSetUpdates = vec<RegexPatternSetUpdate>;

type RegexPatternString = string;

type RegexPatternStrings = vec<RegexPatternString>;

type ResourceArn = string;

type ResourceArns = vec<ResourceArn>;

type ResourceId = string;

type ResourceName = string;

type ResourceType = string;

class Rule {
  public MetricName $metric_name;
  public ResourceName $name;
  public Predicates $predicates;
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'predicates' => Predicates,
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->predicates = $predicates ?? [];
    $this->rule_id = $rule_id ?? "";
  }
}

class RuleGroup {
  public MetricName $metric_name;
  public ResourceName $name;
  public ResourceId $rule_group_id;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'rule_group_id' => ResourceId,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->rule_group_id = $rule_group_id ?? "";
  }
}

type RuleGroupSummaries = vec<RuleGroupSummary>;

class RuleGroupSummary {
  public ResourceName $name;
  public ResourceId $rule_group_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'rule_group_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->rule_group_id = $rule_group_id ?? "";
  }
}

class RuleGroupUpdate {
  public ChangeAction $action;
  public ActivatedRule $activated_rule;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'activated_rule' => ActivatedRule,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->activated_rule = $activated_rule ?? null;
  }
}

type RuleGroupUpdates = vec<RuleGroupUpdate>;

type RulePriority = int;

type RuleSummaries = vec<RuleSummary>;

class RuleSummary {
  public ResourceName $name;
  public ResourceId $rule_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'rule_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->rule_id = $rule_id ?? "";
  }
}

class RuleUpdate {
  public ChangeAction $action;
  public Predicate $predicate;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'predicate' => Predicate,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->predicate = $predicate ?? null;
  }
}

type RuleUpdates = vec<RuleUpdate>;

type SampleWeight = int;

class SampledHTTPRequest {
  public Action $action;
  public HTTPRequest $request;
  public ResourceId $rule_within_rule_group;
  public Timestamp $timestamp;
  public SampleWeight $weight;

  public function __construct(shape(
  ?'action' => Action,
  ?'request' => HTTPRequest,
  ?'rule_within_rule_group' => ResourceId,
  ?'timestamp' => Timestamp,
  ?'weight' => SampleWeight,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->request = $request ?? null;
    $this->rule_within_rule_group = $rule_within_rule_group ?? "";
    $this->timestamp = $timestamp ?? 0;
    $this->weight = $weight ?? 0;
  }
}

type SampledHTTPRequests = vec<SampledHTTPRequest>;

type Size = int;

class SizeConstraint {
  public ComparisonOperator $comparison_operator;
  public FieldToMatch $field_to_match;
  public Size $size;
  public TextTransformation $text_transformation;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'field_to_match' => FieldToMatch,
  ?'size' => Size,
  ?'text_transformation' => TextTransformation,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? "";
    $this->field_to_match = $field_to_match ?? null;
    $this->size = $size ?? 0;
    $this->text_transformation = $text_transformation ?? "";
  }
}

class SizeConstraintSet {
  public ResourceName $name;
  public ResourceId $size_constraint_set_id;
  public SizeConstraints $size_constraints;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'size_constraint_set_id' => ResourceId,
  ?'size_constraints' => SizeConstraints,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->size_constraint_set_id = $size_constraint_set_id ?? "";
    $this->size_constraints = $size_constraints ?? [];
  }
}

type SizeConstraintSetSummaries = vec<SizeConstraintSetSummary>;

class SizeConstraintSetSummary {
  public ResourceName $name;
  public ResourceId $size_constraint_set_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'size_constraint_set_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->size_constraint_set_id = $size_constraint_set_id ?? "";
  }
}

class SizeConstraintSetUpdate {
  public ChangeAction $action;
  public SizeConstraint $size_constraint;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'size_constraint' => SizeConstraint,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->size_constraint = $size_constraint ?? null;
  }
}

type SizeConstraintSetUpdates = vec<SizeConstraintSetUpdate>;

type SizeConstraints = vec<SizeConstraint>;

class SqlInjectionMatchSet {
  public ResourceName $name;
  public ResourceId $sql_injection_match_set_id;
  public SqlInjectionMatchTuples $sql_injection_match_tuples;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'sql_injection_match_set_id' => ResourceId,
  ?'sql_injection_match_tuples' => SqlInjectionMatchTuples,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->sql_injection_match_set_id = $sql_injection_match_set_id ?? "";
    $this->sql_injection_match_tuples = $sql_injection_match_tuples ?? [];
  }
}

type SqlInjectionMatchSetSummaries = vec<SqlInjectionMatchSetSummary>;

class SqlInjectionMatchSetSummary {
  public ResourceName $name;
  public ResourceId $sql_injection_match_set_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'sql_injection_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->sql_injection_match_set_id = $sql_injection_match_set_id ?? "";
  }
}

class SqlInjectionMatchSetUpdate {
  public ChangeAction $action;
  public SqlInjectionMatchTuple $sql_injection_match_tuple;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'sql_injection_match_tuple' => SqlInjectionMatchTuple,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->sql_injection_match_tuple = $sql_injection_match_tuple ?? null;
  }
}

type SqlInjectionMatchSetUpdates = vec<SqlInjectionMatchSetUpdate>;

class SqlInjectionMatchTuple {
  public FieldToMatch $field_to_match;
  public TextTransformation $text_transformation;

  public function __construct(shape(
  ?'field_to_match' => FieldToMatch,
  ?'text_transformation' => TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $field_to_match ?? null;
    $this->text_transformation = $text_transformation ?? "";
  }
}

type SqlInjectionMatchTuples = vec<SqlInjectionMatchTuple>;

type SubscribedRuleGroupSummaries = vec<SubscribedRuleGroupSummary>;

class SubscribedRuleGroupSummary {
  public MetricName $metric_name;
  public ResourceName $name;
  public ResourceId $rule_group_id;

  public function __construct(shape(
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'rule_group_id' => ResourceId,
  ) $s = shape()) {
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->rule_group_id = $rule_group_id ?? "";
  }
}

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

class TagInfoForResource {
  public ResourceArn $resource_arn;
  public TagList $tag_list;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_list = $tag_list ?? [];
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TextTransformation = string;

class TimeWindow {
  public Timestamp $end_time;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? 0;
    $this->start_time = $start_time ?? 0;
  }
}

type Timestamp = int;

type URIString = string;

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateByteMatchSetRequest {
  public ResourceId $byte_match_set_id;
  public ChangeToken $change_token;
  public ByteMatchSetUpdates $updates;

  public function __construct(shape(
  ?'byte_match_set_id' => ResourceId,
  ?'change_token' => ChangeToken,
  ?'updates' => ByteMatchSetUpdates,
  ) $s = shape()) {
    $this->byte_match_set_id = $byte_match_set_id ?? "";
    $this->change_token = $change_token ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateByteMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateGeoMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $geo_match_set_id;
  public GeoMatchSetUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'geo_match_set_id' => ResourceId,
  ?'updates' => GeoMatchSetUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->geo_match_set_id = $geo_match_set_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateGeoMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateIPSetRequest {
  public ChangeToken $change_token;
  public ResourceId $ip_set_id;
  public IPSetUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'ip_set_id' => ResourceId,
  ?'updates' => IPSetUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->ip_set_id = $ip_set_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateIPSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateRateBasedRuleRequest {
  public ChangeToken $change_token;
  public RateLimit $rate_limit;
  public ResourceId $rule_id;
  public RuleUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rate_limit' => RateLimit,
  ?'rule_id' => ResourceId,
  ?'updates' => RuleUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rate_limit = $rate_limit ?? 0;
    $this->rule_id = $rule_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateRateBasedRuleResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateRegexMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_match_set_id;
  public RegexMatchSetUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'regex_match_set_id' => ResourceId,
  ?'updates' => RegexMatchSetUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->regex_match_set_id = $regex_match_set_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateRegexMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateRegexPatternSetRequest {
  public ChangeToken $change_token;
  public ResourceId $regex_pattern_set_id;
  public RegexPatternSetUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'regex_pattern_set_id' => ResourceId,
  ?'updates' => RegexPatternSetUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->regex_pattern_set_id = $regex_pattern_set_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateRegexPatternSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateRuleGroupRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_group_id;
  public RuleGroupUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule_group_id' => ResourceId,
  ?'updates' => RuleGroupUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule_group_id = $rule_group_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateRuleGroupResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateRuleRequest {
  public ChangeToken $change_token;
  public ResourceId $rule_id;
  public RuleUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'rule_id' => ResourceId,
  ?'updates' => RuleUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->rule_id = $rule_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateRuleResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateSizeConstraintSetRequest {
  public ChangeToken $change_token;
  public ResourceId $size_constraint_set_id;
  public SizeConstraintSetUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'size_constraint_set_id' => ResourceId,
  ?'updates' => SizeConstraintSetUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->size_constraint_set_id = $size_constraint_set_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateSizeConstraintSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateSqlInjectionMatchSetRequest {
  public ChangeToken $change_token;
  public ResourceId $sql_injection_match_set_id;
  public SqlInjectionMatchSetUpdates $updates;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'sql_injection_match_set_id' => ResourceId,
  ?'updates' => SqlInjectionMatchSetUpdates,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->sql_injection_match_set_id = $sql_injection_match_set_id ?? "";
    $this->updates = $updates ?? [];
  }
}

class UpdateSqlInjectionMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateWebACLRequest {
  public ChangeToken $change_token;
  public WafAction $default_action;
  public WebACLUpdates $updates;
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'default_action' => WafAction,
  ?'updates' => WebACLUpdates,
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->default_action = $default_action ?? null;
    $this->updates = $updates ?? [];
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

class UpdateWebACLResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class UpdateXssMatchSetRequest {
  public ChangeToken $change_token;
  public XssMatchSetUpdates $updates;
  public ResourceId $xss_match_set_id;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ?'updates' => XssMatchSetUpdates,
  ?'xss_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
    $this->updates = $updates ?? [];
    $this->xss_match_set_id = $xss_match_set_id ?? "";
  }
}

class UpdateXssMatchSetResponse {
  public ChangeToken $change_token;

  public function __construct(shape(
  ?'change_token' => ChangeToken,
  ) $s = shape()) {
    $this->change_token = $change_token ?? "";
  }
}

class WAFBadRequestException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFDisallowedNameException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFInternalErrorException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFInvalidAccountException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class WAFInvalidOperationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFInvalidParameterException {
  public ParameterExceptionField $field;
  public ParameterExceptionParameter $parameter;
  public ParameterExceptionReason $reason;

  public function __construct(shape(
  ?'field' => ParameterExceptionField,
  ?'parameter' => ParameterExceptionParameter,
  ?'reason' => ParameterExceptionReason,
  ) $s = shape()) {
    $this->field = $field ?? "";
    $this->parameter = $parameter ?? "";
    $this->reason = $reason ?? "";
  }
}

class WAFInvalidPermissionPolicyException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFInvalidRegexPatternException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFLimitsExceededException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFNonEmptyEntityException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFNonexistentContainerException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFNonexistentItemException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFReferencedItemException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFServiceLinkedRoleErrorException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFStaleDataException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFSubscriptionNotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFTagOperationException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFTagOperationInternalErrorException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WAFUnavailableEntityException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class WafAction {
  public WafActionType $type;

  public function __construct(shape(
  ?'type' => WafActionType,
  ) $s = shape()) {
    $this->type = $type ?? "";
  }
}

type WafActionType = string;

class WafOverrideAction {
  public WafOverrideActionType $type;

  public function __construct(shape(
  ?'type' => WafOverrideActionType,
  ) $s = shape()) {
    $this->type = $type ?? "";
  }
}

type WafOverrideActionType = string;

type WafRuleType = string;

class WebACL {
  public WafAction $default_action;
  public MetricName $metric_name;
  public ResourceName $name;
  public ActivatedRules $rules;
  public ResourceArn $web_acl_arn;
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'default_action' => WafAction,
  ?'metric_name' => MetricName,
  ?'name' => ResourceName,
  ?'rules' => ActivatedRules,
  ?'web_acl_arn' => ResourceArn,
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->default_action = $default_action ?? null;
    $this->metric_name = $metric_name ?? "";
    $this->name = $name ?? "";
    $this->rules = $rules ?? [];
    $this->web_acl_arn = $web_acl_arn ?? "";
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

type WebACLSummaries = vec<WebACLSummary>;

class WebACLSummary {
  public ResourceName $name;
  public ResourceId $web_acl_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'web_acl_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->web_acl_id = $web_acl_id ?? "";
  }
}

class WebACLUpdate {
  public ChangeAction $action;
  public ActivatedRule $activated_rule;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'activated_rule' => ActivatedRule,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->activated_rule = $activated_rule ?? null;
  }
}

type WebACLUpdates = vec<WebACLUpdate>;

class XssMatchSet {
  public ResourceName $name;
  public ResourceId $xss_match_set_id;
  public XssMatchTuples $xss_match_tuples;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'xss_match_set_id' => ResourceId,
  ?'xss_match_tuples' => XssMatchTuples,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->xss_match_set_id = $xss_match_set_id ?? "";
    $this->xss_match_tuples = $xss_match_tuples ?? [];
  }
}

type XssMatchSetSummaries = vec<XssMatchSetSummary>;

class XssMatchSetSummary {
  public ResourceName $name;
  public ResourceId $xss_match_set_id;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'xss_match_set_id' => ResourceId,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->xss_match_set_id = $xss_match_set_id ?? "";
  }
}

class XssMatchSetUpdate {
  public ChangeAction $action;
  public XssMatchTuple $xss_match_tuple;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'xss_match_tuple' => XssMatchTuple,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->xss_match_tuple = $xss_match_tuple ?? null;
  }
}

type XssMatchSetUpdates = vec<XssMatchSetUpdate>;

class XssMatchTuple {
  public FieldToMatch $field_to_match;
  public TextTransformation $text_transformation;

  public function __construct(shape(
  ?'field_to_match' => FieldToMatch,
  ?'text_transformation' => TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $field_to_match ?? null;
    $this->text_transformation = $text_transformation ?? "";
  }
}

type XssMatchTuples = vec<XssMatchTuple>;

type errorMessage = string;

