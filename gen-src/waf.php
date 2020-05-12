<?hh // strict
namespace slack\aws\waf;

interface WAF {
  public function CreateByteMatchSet(CreateByteMatchSetRequest $in): Awaitable<\Errors\Result<CreateByteMatchSetResponse>>;
  public function CreateGeoMatchSet(CreateGeoMatchSetRequest $in): Awaitable<\Errors\Result<CreateGeoMatchSetResponse>>;
  public function CreateIPSet(CreateIPSetRequest $in): Awaitable<\Errors\Result<CreateIPSetResponse>>;
  public function CreateRateBasedRule(CreateRateBasedRuleRequest $in): Awaitable<\Errors\Result<CreateRateBasedRuleResponse>>;
  public function CreateRegexMatchSet(CreateRegexMatchSetRequest $in): Awaitable<\Errors\Result<CreateRegexMatchSetResponse>>;
  public function CreateRegexPatternSet(CreateRegexPatternSetRequest $in): Awaitable<\Errors\Result<CreateRegexPatternSetResponse>>;
  public function CreateRule(CreateRuleRequest $in): Awaitable<\Errors\Result<CreateRuleResponse>>;
  public function CreateRuleGroup(CreateRuleGroupRequest $in): Awaitable<\Errors\Result<CreateRuleGroupResponse>>;
  public function CreateSizeConstraintSet(CreateSizeConstraintSetRequest $in): Awaitable<\Errors\Result<CreateSizeConstraintSetResponse>>;
  public function CreateSqlInjectionMatchSet(CreateSqlInjectionMatchSetRequest $in): Awaitable<\Errors\Result<CreateSqlInjectionMatchSetResponse>>;
  public function CreateWebACL(CreateWebACLRequest $in): Awaitable<\Errors\Result<CreateWebACLResponse>>;
  public function CreateXssMatchSet(CreateXssMatchSetRequest $in): Awaitable<\Errors\Result<CreateXssMatchSetResponse>>;
  public function DeleteByteMatchSet(DeleteByteMatchSetRequest $in): Awaitable<\Errors\Result<DeleteByteMatchSetResponse>>;
  public function DeleteGeoMatchSet(DeleteGeoMatchSetRequest $in): Awaitable<\Errors\Result<DeleteGeoMatchSetResponse>>;
  public function DeleteIPSet(DeleteIPSetRequest $in): Awaitable<\Errors\Result<DeleteIPSetResponse>>;
  public function DeleteLoggingConfiguration(DeleteLoggingConfigurationRequest $in): Awaitable<\Errors\Result<DeleteLoggingConfigurationResponse>>;
  public function DeletePermissionPolicy(DeletePermissionPolicyRequest $in): Awaitable<\Errors\Result<DeletePermissionPolicyResponse>>;
  public function DeleteRateBasedRule(DeleteRateBasedRuleRequest $in): Awaitable<\Errors\Result<DeleteRateBasedRuleResponse>>;
  public function DeleteRegexMatchSet(DeleteRegexMatchSetRequest $in): Awaitable<\Errors\Result<DeleteRegexMatchSetResponse>>;
  public function DeleteRegexPatternSet(DeleteRegexPatternSetRequest $in): Awaitable<\Errors\Result<DeleteRegexPatternSetResponse>>;
  public function DeleteRule(DeleteRuleRequest $in): Awaitable<\Errors\Result<DeleteRuleResponse>>;
  public function DeleteRuleGroup(DeleteRuleGroupRequest $in): Awaitable<\Errors\Result<DeleteRuleGroupResponse>>;
  public function DeleteSizeConstraintSet(DeleteSizeConstraintSetRequest $in): Awaitable<\Errors\Result<DeleteSizeConstraintSetResponse>>;
  public function DeleteSqlInjectionMatchSet(DeleteSqlInjectionMatchSetRequest $in): Awaitable<\Errors\Result<DeleteSqlInjectionMatchSetResponse>>;
  public function DeleteWebACL(DeleteWebACLRequest $in): Awaitable<\Errors\Result<DeleteWebACLResponse>>;
  public function DeleteXssMatchSet(DeleteXssMatchSetRequest $in): Awaitable<\Errors\Result<DeleteXssMatchSetResponse>>;
  public function GetByteMatchSet(GetByteMatchSetRequest $in): Awaitable<\Errors\Result<GetByteMatchSetResponse>>;
  public function GetChangeToken(GetChangeTokenRequest $in): Awaitable<\Errors\Result<GetChangeTokenResponse>>;
  public function GetChangeTokenStatus(GetChangeTokenStatusRequest $in): Awaitable<\Errors\Result<GetChangeTokenStatusResponse>>;
  public function GetGeoMatchSet(GetGeoMatchSetRequest $in): Awaitable<\Errors\Result<GetGeoMatchSetResponse>>;
  public function GetIPSet(GetIPSetRequest $in): Awaitable<\Errors\Result<GetIPSetResponse>>;
  public function GetLoggingConfiguration(GetLoggingConfigurationRequest $in): Awaitable<\Errors\Result<GetLoggingConfigurationResponse>>;
  public function GetPermissionPolicy(GetPermissionPolicyRequest $in): Awaitable<\Errors\Result<GetPermissionPolicyResponse>>;
  public function GetRateBasedRule(GetRateBasedRuleRequest $in): Awaitable<\Errors\Result<GetRateBasedRuleResponse>>;
  public function GetRateBasedRuleManagedKeys(GetRateBasedRuleManagedKeysRequest $in): Awaitable<\Errors\Result<GetRateBasedRuleManagedKeysResponse>>;
  public function GetRegexMatchSet(GetRegexMatchSetRequest $in): Awaitable<\Errors\Result<GetRegexMatchSetResponse>>;
  public function GetRegexPatternSet(GetRegexPatternSetRequest $in): Awaitable<\Errors\Result<GetRegexPatternSetResponse>>;
  public function GetRule(GetRuleRequest $in): Awaitable<\Errors\Result<GetRuleResponse>>;
  public function GetRuleGroup(GetRuleGroupRequest $in): Awaitable<\Errors\Result<GetRuleGroupResponse>>;
  public function GetSampledRequests(GetSampledRequestsRequest $in): Awaitable<\Errors\Result<GetSampledRequestsResponse>>;
  public function GetSizeConstraintSet(GetSizeConstraintSetRequest $in): Awaitable<\Errors\Result<GetSizeConstraintSetResponse>>;
  public function GetSqlInjectionMatchSet(GetSqlInjectionMatchSetRequest $in): Awaitable<\Errors\Result<GetSqlInjectionMatchSetResponse>>;
  public function GetWebACL(GetWebACLRequest $in): Awaitable<\Errors\Result<GetWebACLResponse>>;
  public function GetXssMatchSet(GetXssMatchSetRequest $in): Awaitable<\Errors\Result<GetXssMatchSetResponse>>;
  public function ListActivatedRulesInRuleGroup(ListActivatedRulesInRuleGroupRequest $in): Awaitable<\Errors\Result<ListActivatedRulesInRuleGroupResponse>>;
  public function ListByteMatchSets(ListByteMatchSetsRequest $in): Awaitable<\Errors\Result<ListByteMatchSetsResponse>>;
  public function ListGeoMatchSets(ListGeoMatchSetsRequest $in): Awaitable<\Errors\Result<ListGeoMatchSetsResponse>>;
  public function ListIPSets(ListIPSetsRequest $in): Awaitable<\Errors\Result<ListIPSetsResponse>>;
  public function ListLoggingConfigurations(ListLoggingConfigurationsRequest $in): Awaitable<\Errors\Result<ListLoggingConfigurationsResponse>>;
  public function ListRateBasedRules(ListRateBasedRulesRequest $in): Awaitable<\Errors\Result<ListRateBasedRulesResponse>>;
  public function ListRegexMatchSets(ListRegexMatchSetsRequest $in): Awaitable<\Errors\Result<ListRegexMatchSetsResponse>>;
  public function ListRegexPatternSets(ListRegexPatternSetsRequest $in): Awaitable<\Errors\Result<ListRegexPatternSetsResponse>>;
  public function ListRuleGroups(ListRuleGroupsRequest $in): Awaitable<\Errors\Result<ListRuleGroupsResponse>>;
  public function ListRules(ListRulesRequest $in): Awaitable<\Errors\Result<ListRulesResponse>>;
  public function ListSizeConstraintSets(ListSizeConstraintSetsRequest $in): Awaitable<\Errors\Result<ListSizeConstraintSetsResponse>>;
  public function ListSqlInjectionMatchSets(ListSqlInjectionMatchSetsRequest $in): Awaitable<\Errors\Result<ListSqlInjectionMatchSetsResponse>>;
  public function ListSubscribedRuleGroups(ListSubscribedRuleGroupsRequest $in): Awaitable<\Errors\Result<ListSubscribedRuleGroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListWebACLs(ListWebACLsRequest $in): Awaitable<\Errors\Result<ListWebACLsResponse>>;
  public function ListXssMatchSets(ListXssMatchSetsRequest $in): Awaitable<\Errors\Result<ListXssMatchSetsResponse>>;
  public function PutLoggingConfiguration(PutLoggingConfigurationRequest $in): Awaitable<\Errors\Result<PutLoggingConfigurationResponse>>;
  public function PutPermissionPolicy(PutPermissionPolicyRequest $in): Awaitable<\Errors\Result<PutPermissionPolicyResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateByteMatchSet(UpdateByteMatchSetRequest $in): Awaitable<\Errors\Result<UpdateByteMatchSetResponse>>;
  public function UpdateGeoMatchSet(UpdateGeoMatchSetRequest $in): Awaitable<\Errors\Result<UpdateGeoMatchSetResponse>>;
  public function UpdateIPSet(UpdateIPSetRequest $in): Awaitable<\Errors\Result<UpdateIPSetResponse>>;
  public function UpdateRateBasedRule(UpdateRateBasedRuleRequest $in): Awaitable<\Errors\Result<UpdateRateBasedRuleResponse>>;
  public function UpdateRegexMatchSet(UpdateRegexMatchSetRequest $in): Awaitable<\Errors\Result<UpdateRegexMatchSetResponse>>;
  public function UpdateRegexPatternSet(UpdateRegexPatternSetRequest $in): Awaitable<\Errors\Result<UpdateRegexPatternSetResponse>>;
  public function UpdateRule(UpdateRuleRequest $in): Awaitable<\Errors\Result<UpdateRuleResponse>>;
  public function UpdateRuleGroup(UpdateRuleGroupRequest $in): Awaitable<\Errors\Result<UpdateRuleGroupResponse>>;
  public function UpdateSizeConstraintSet(UpdateSizeConstraintSetRequest $in): Awaitable<\Errors\Result<UpdateSizeConstraintSetResponse>>;
  public function UpdateSqlInjectionMatchSet(UpdateSqlInjectionMatchSetRequest $in): Awaitable<\Errors\Result<UpdateSqlInjectionMatchSetResponse>>;
  public function UpdateWebACL(UpdateWebACLRequest $in): Awaitable<\Errors\Result<UpdateWebACLResponse>>;
  public function UpdateXssMatchSet(UpdateXssMatchSetRequest $in): Awaitable<\Errors\Result<UpdateXssMatchSetResponse>>;
}

type Action = string;

class ActivatedRule {
  public ?WafAction $action;
  public ?ExcludedRules $excluded_rules;
  public ?WafOverrideAction $override_action;
  public ?RulePriority $priority;
  public ?ResourceId $rule_id;
  public ?WafRuleType $type;

  public function __construct(shape(
    ?'action' => ?WafAction,
    ?'excluded_rules' => ?ExcludedRules,
    ?'override_action' => ?WafOverrideAction,
    ?'priority' => ?RulePriority,
    ?'rule_id' => ?ResourceId,
    ?'type' => ?WafRuleType,
  ) $s = shape()) {
    $this->action = $s['action'] ?? null;
    $this->excluded_rules = $s['excluded_rules'] ?? vec[];
    $this->override_action = $s['override_action'] ?? null;
    $this->priority = $s['priority'] ?? 0;
    $this->rule_id = $s['rule_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ActivatedRules = vec<ActivatedRule>;

class ByteMatchSet {
  public ?ResourceId $byte_match_set_id;
  public ?ByteMatchTuples $byte_match_tuples;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'byte_match_set_id' => ?ResourceId,
    ?'byte_match_tuples' => ?ByteMatchTuples,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->byte_match_set_id = $s['byte_match_set_id'] ?? '';
    $this->byte_match_tuples = $s['byte_match_tuples'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

type ByteMatchSetSummaries = vec<ByteMatchSetSummary>;

class ByteMatchSetSummary {
  public ?ResourceId $byte_match_set_id;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'byte_match_set_id' => ?ResourceId,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->byte_match_set_id = $s['byte_match_set_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class ByteMatchSetUpdate {
  public ?ChangeAction $action;
  public ?ByteMatchTuple $byte_match_tuple;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'byte_match_tuple' => ?ByteMatchTuple,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->byte_match_tuple = $s['byte_match_tuple'] ?? null;
  }
}

type ByteMatchSetUpdates = vec<ByteMatchSetUpdate>;

type ByteMatchTargetString = string;

class ByteMatchTuple {
  public ?FieldToMatch $field_to_match;
  public ?PositionalConstraint $positional_constraint;
  public ?ByteMatchTargetString $target_string;
  public ?TextTransformation $text_transformation;

  public function __construct(shape(
    ?'field_to_match' => ?FieldToMatch,
    ?'positional_constraint' => ?PositionalConstraint,
    ?'target_string' => ?ByteMatchTargetString,
    ?'text_transformation' => ?TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $s['field_to_match'] ?? null;
    $this->positional_constraint = $s['positional_constraint'] ?? '';
    $this->target_string = $s['target_string'] ?? '';
    $this->text_transformation = $s['text_transformation'] ?? '';
  }
}

type ByteMatchTuples = vec<ByteMatchTuple>;

type ChangeAction = string;

type ChangeToken = string;

type ChangeTokenStatus = string;

type ComparisonOperator = string;

type Country = string;

class CreateByteMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateByteMatchSetResponse {
  public ?ByteMatchSet $byte_match_set;
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'byte_match_set' => ?ByteMatchSet,
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->byte_match_set = $s['byte_match_set'] ?? null;
    $this->change_token = $s['change_token'] ?? '';
  }
}

class CreateGeoMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateGeoMatchSetResponse {
  public ?ChangeToken $change_token;
  public ?GeoMatchSet $geo_match_set;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'geo_match_set' => ?GeoMatchSet,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->geo_match_set = $s['geo_match_set'] ?? null;
  }
}

class CreateIPSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateIPSetResponse {
  public ?ChangeToken $change_token;
  public ?IPSet $ip_set;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'ip_set' => ?IPSet,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->ip_set = $s['ip_set'] ?? null;
  }
}

class CreateRateBasedRuleRequest {
  public ?ChangeToken $change_token;
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?RateKey $rate_key;
  public ?RateLimit $rate_limit;
  public ?TagList $tags;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'rate_key' => ?RateKey,
    ?'rate_limit' => ?RateLimit,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rate_key = $s['rate_key'] ?? '';
    $this->rate_limit = $s['rate_limit'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRateBasedRuleResponse {
  public ?ChangeToken $change_token;
  public ?RateBasedRule $rule;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule' => ?RateBasedRule,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule = $s['rule'] ?? null;
  }
}

class CreateRegexMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateRegexMatchSetResponse {
  public ?ChangeToken $change_token;
  public ?RegexMatchSet $regex_match_set;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'regex_match_set' => ?RegexMatchSet,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->regex_match_set = $s['regex_match_set'] ?? null;
  }
}

class CreateRegexPatternSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateRegexPatternSetResponse {
  public ?ChangeToken $change_token;
  public ?RegexPatternSet $regex_pattern_set;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'regex_pattern_set' => ?RegexPatternSet,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->regex_pattern_set = $s['regex_pattern_set'] ?? null;
  }
}

class CreateRuleGroupRequest {
  public ?ChangeToken $change_token;
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRuleGroupResponse {
  public ?ChangeToken $change_token;
  public ?RuleGroup $rule_group;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule_group' => ?RuleGroup,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule_group = $s['rule_group'] ?? null;
  }
}

class CreateRuleRequest {
  public ?ChangeToken $change_token;
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRuleResponse {
  public ?ChangeToken $change_token;
  public ?Rule $rule;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule' => ?Rule,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule = $s['rule'] ?? null;
  }
}

class CreateSizeConstraintSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateSizeConstraintSetResponse {
  public ?ChangeToken $change_token;
  public ?SizeConstraintSet $size_constraint_set;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'size_constraint_set' => ?SizeConstraintSet,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->size_constraint_set = $s['size_constraint_set'] ?? null;
  }
}

class CreateSqlInjectionMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateSqlInjectionMatchSetResponse {
  public ?ChangeToken $change_token;
  public ?SqlInjectionMatchSet $sql_injection_match_set;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'sql_injection_match_set' => ?SqlInjectionMatchSet,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->sql_injection_match_set = $s['sql_injection_match_set'] ?? null;
  }
}

class CreateWebACLRequest {
  public ?ChangeToken $change_token;
  public ?WafAction $default_action;
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'default_action' => ?WafAction,
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->default_action = $s['default_action'] ?? null;
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateWebACLResponse {
  public ?ChangeToken $change_token;
  public ?WebACL $web_acl;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'web_acl' => ?WebACL,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->web_acl = $s['web_acl'] ?? null;
  }
}

class CreateXssMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateXssMatchSetResponse {
  public ?ChangeToken $change_token;
  public ?XssMatchSet $xss_match_set;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'xss_match_set' => ?XssMatchSet,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->xss_match_set = $s['xss_match_set'] ?? null;
  }
}

class DeleteByteMatchSetRequest {
  public ?ResourceId $byte_match_set_id;
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'byte_match_set_id' => ?ResourceId,
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->byte_match_set_id = $s['byte_match_set_id'] ?? '';
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteByteMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteGeoMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $geo_match_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'geo_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->geo_match_set_id = $s['geo_match_set_id'] ?? '';
  }
}

class DeleteGeoMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteIPSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $ip_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'ip_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->ip_set_id = $s['ip_set_id'] ?? '';
  }
}

class DeleteIPSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteLoggingConfigurationRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DeleteLoggingConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeletePermissionPolicyRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class DeletePermissionPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRateBasedRuleRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class DeleteRateBasedRuleResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteRegexMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $regex_match_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'regex_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->regex_match_set_id = $s['regex_match_set_id'] ?? '';
  }
}

class DeleteRegexMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteRegexPatternSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $regex_pattern_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'regex_pattern_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->regex_pattern_set_id = $s['regex_pattern_set_id'] ?? '';
  }
}

class DeleteRegexPatternSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteRuleGroupRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $rule_group_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule_group_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule_group_id = $s['rule_group_id'] ?? '';
  }
}

class DeleteRuleGroupResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteRuleRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class DeleteRuleResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteSizeConstraintSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $size_constraint_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'size_constraint_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->size_constraint_set_id = $s['size_constraint_set_id'] ?? '';
  }
}

class DeleteSizeConstraintSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteSqlInjectionMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $sql_injection_match_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'sql_injection_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->sql_injection_match_set_id = $s['sql_injection_match_set_id'] ?? '';
  }
}

class DeleteSqlInjectionMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteWebACLRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $web_acl_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'web_acl_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

class DeleteWebACLResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class DeleteXssMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $xss_match_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'xss_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->xss_match_set_id = $s['xss_match_set_id'] ?? '';
  }
}

class DeleteXssMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class ExcludedRule {
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

type ExcludedRules = vec<ExcludedRule>;

class FieldToMatch {
  public ?MatchFieldData $data;
  public ?MatchFieldType $type;

  public function __construct(shape(
    ?'data' => ?MatchFieldData,
    ?'type' => ?MatchFieldType,
  ) $s = shape()) {
    $this->data = $s['data'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class GeoMatchConstraint {
  public ?GeoMatchConstraintType $type;
  public ?GeoMatchConstraintValue $value;

  public function __construct(shape(
    ?'type' => ?GeoMatchConstraintType,
    ?'value' => ?GeoMatchConstraintValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type GeoMatchConstraintType = string;

type GeoMatchConstraintValue = string;

type GeoMatchConstraints = vec<GeoMatchConstraint>;

class GeoMatchSet {
  public ?GeoMatchConstraints $geo_match_constraints;
  public ?ResourceId $geo_match_set_id;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'geo_match_constraints' => ?GeoMatchConstraints,
    ?'geo_match_set_id' => ?ResourceId,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->geo_match_constraints = $s['geo_match_constraints'] ?? vec[];
    $this->geo_match_set_id = $s['geo_match_set_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type GeoMatchSetSummaries = vec<GeoMatchSetSummary>;

class GeoMatchSetSummary {
  public ?ResourceId $geo_match_set_id;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'geo_match_set_id' => ?ResourceId,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->geo_match_set_id = $s['geo_match_set_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class GeoMatchSetUpdate {
  public ?ChangeAction $action;
  public ?GeoMatchConstraint $geo_match_constraint;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'geo_match_constraint' => ?GeoMatchConstraint,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->geo_match_constraint = $s['geo_match_constraint'] ?? null;
  }
}

type GeoMatchSetUpdates = vec<GeoMatchSetUpdate>;

class GetByteMatchSetRequest {
  public ?ResourceId $byte_match_set_id;

  public function __construct(shape(
    ?'byte_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->byte_match_set_id = $s['byte_match_set_id'] ?? '';
  }
}

class GetByteMatchSetResponse {
  public ?ByteMatchSet $byte_match_set;

  public function __construct(shape(
    ?'byte_match_set' => ?ByteMatchSet,
  ) $s = shape()) {
    $this->byte_match_set = $s['byte_match_set'] ?? null;
  }
}

class GetChangeTokenRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetChangeTokenResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class GetChangeTokenStatusRequest {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class GetChangeTokenStatusResponse {
  public ?ChangeTokenStatus $change_token_status;

  public function __construct(shape(
    ?'change_token_status' => ?ChangeTokenStatus,
  ) $s = shape()) {
    $this->change_token_status = $s['change_token_status'] ?? '';
  }
}

class GetGeoMatchSetRequest {
  public ?ResourceId $geo_match_set_id;

  public function __construct(shape(
    ?'geo_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->geo_match_set_id = $s['geo_match_set_id'] ?? '';
  }
}

class GetGeoMatchSetResponse {
  public ?GeoMatchSet $geo_match_set;

  public function __construct(shape(
    ?'geo_match_set' => ?GeoMatchSet,
  ) $s = shape()) {
    $this->geo_match_set = $s['geo_match_set'] ?? null;
  }
}

class GetIPSetRequest {
  public ?ResourceId $ip_set_id;

  public function __construct(shape(
    ?'ip_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->ip_set_id = $s['ip_set_id'] ?? '';
  }
}

class GetIPSetResponse {
  public ?IPSet $ip_set;

  public function __construct(shape(
    ?'ip_set' => ?IPSet,
  ) $s = shape()) {
    $this->ip_set = $s['ip_set'] ?? null;
  }
}

class GetLoggingConfigurationRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class GetLoggingConfigurationResponse {
  public ?LoggingConfiguration $logging_configuration;

  public function __construct(shape(
    ?'logging_configuration' => ?LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $s['logging_configuration'] ?? null;
  }
}

class GetPermissionPolicyRequest {
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class GetPermissionPolicyResponse {
  public ?PolicyString $policy;

  public function __construct(shape(
    ?'policy' => ?PolicyString,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
  }
}

class GetRateBasedRuleManagedKeysRequest {
  public ?NextMarker $next_marker;
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class GetRateBasedRuleManagedKeysResponse {
  public ?ManagedKeys $managed_keys;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'managed_keys' => ?ManagedKeys,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->managed_keys = $s['managed_keys'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class GetRateBasedRuleRequest {
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class GetRateBasedRuleResponse {
  public ?RateBasedRule $rule;

  public function __construct(shape(
    ?'rule' => ?RateBasedRule,
  ) $s = shape()) {
    $this->rule = $s['rule'] ?? null;
  }
}

class GetRegexMatchSetRequest {
  public ?ResourceId $regex_match_set_id;

  public function __construct(shape(
    ?'regex_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->regex_match_set_id = $s['regex_match_set_id'] ?? '';
  }
}

class GetRegexMatchSetResponse {
  public ?RegexMatchSet $regex_match_set;

  public function __construct(shape(
    ?'regex_match_set' => ?RegexMatchSet,
  ) $s = shape()) {
    $this->regex_match_set = $s['regex_match_set'] ?? null;
  }
}

class GetRegexPatternSetRequest {
  public ?ResourceId $regex_pattern_set_id;

  public function __construct(shape(
    ?'regex_pattern_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->regex_pattern_set_id = $s['regex_pattern_set_id'] ?? '';
  }
}

class GetRegexPatternSetResponse {
  public ?RegexPatternSet $regex_pattern_set;

  public function __construct(shape(
    ?'regex_pattern_set' => ?RegexPatternSet,
  ) $s = shape()) {
    $this->regex_pattern_set = $s['regex_pattern_set'] ?? null;
  }
}

class GetRuleGroupRequest {
  public ?ResourceId $rule_group_id;

  public function __construct(shape(
    ?'rule_group_id' => ?ResourceId,
  ) $s = shape()) {
    $this->rule_group_id = $s['rule_group_id'] ?? '';
  }
}

class GetRuleGroupResponse {
  public ?RuleGroup $rule_group;

  public function __construct(shape(
    ?'rule_group' => ?RuleGroup,
  ) $s = shape()) {
    $this->rule_group = $s['rule_group'] ?? null;
  }
}

class GetRuleRequest {
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class GetRuleResponse {
  public ?Rule $rule;

  public function __construct(shape(
    ?'rule' => ?Rule,
  ) $s = shape()) {
    $this->rule = $s['rule'] ?? null;
  }
}

type GetSampledRequestsMaxItems = int;

class GetSampledRequestsRequest {
  public ?GetSampledRequestsMaxItems $max_items;
  public ?ResourceId $rule_id;
  public ?TimeWindow $time_window;
  public ?ResourceId $web_acl_id;

  public function __construct(shape(
    ?'max_items' => ?GetSampledRequestsMaxItems,
    ?'rule_id' => ?ResourceId,
    ?'time_window' => ?TimeWindow,
    ?'web_acl_id' => ?ResourceId,
  ) $s = shape()) {
    $this->max_items = $s['max_items'] ?? 0;
    $this->rule_id = $s['rule_id'] ?? '';
    $this->time_window = $s['time_window'] ?? null;
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

class GetSampledRequestsResponse {
  public ?PopulationSize $population_size;
  public ?SampledHTTPRequests $sampled_requests;
  public ?TimeWindow $time_window;

  public function __construct(shape(
    ?'population_size' => ?PopulationSize,
    ?'sampled_requests' => ?SampledHTTPRequests,
    ?'time_window' => ?TimeWindow,
  ) $s = shape()) {
    $this->population_size = $s['population_size'] ?? 0;
    $this->sampled_requests = $s['sampled_requests'] ?? vec[];
    $this->time_window = $s['time_window'] ?? null;
  }
}

class GetSizeConstraintSetRequest {
  public ?ResourceId $size_constraint_set_id;

  public function __construct(shape(
    ?'size_constraint_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->size_constraint_set_id = $s['size_constraint_set_id'] ?? '';
  }
}

class GetSizeConstraintSetResponse {
  public ?SizeConstraintSet $size_constraint_set;

  public function __construct(shape(
    ?'size_constraint_set' => ?SizeConstraintSet,
  ) $s = shape()) {
    $this->size_constraint_set = $s['size_constraint_set'] ?? null;
  }
}

class GetSqlInjectionMatchSetRequest {
  public ?ResourceId $sql_injection_match_set_id;

  public function __construct(shape(
    ?'sql_injection_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->sql_injection_match_set_id = $s['sql_injection_match_set_id'] ?? '';
  }
}

class GetSqlInjectionMatchSetResponse {
  public ?SqlInjectionMatchSet $sql_injection_match_set;

  public function __construct(shape(
    ?'sql_injection_match_set' => ?SqlInjectionMatchSet,
  ) $s = shape()) {
    $this->sql_injection_match_set = $s['sql_injection_match_set'] ?? null;
  }
}

class GetWebACLRequest {
  public ?ResourceId $web_acl_id;

  public function __construct(shape(
    ?'web_acl_id' => ?ResourceId,
  ) $s = shape()) {
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

class GetWebACLResponse {
  public ?WebACL $web_acl;

  public function __construct(shape(
    ?'web_acl' => ?WebACL,
  ) $s = shape()) {
    $this->web_acl = $s['web_acl'] ?? null;
  }
}

class GetXssMatchSetRequest {
  public ?ResourceId $xss_match_set_id;

  public function __construct(shape(
    ?'xss_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->xss_match_set_id = $s['xss_match_set_id'] ?? '';
  }
}

class GetXssMatchSetResponse {
  public ?XssMatchSet $xss_match_set;

  public function __construct(shape(
    ?'xss_match_set' => ?XssMatchSet,
  ) $s = shape()) {
    $this->xss_match_set = $s['xss_match_set'] ?? null;
  }
}

class HTTPHeader {
  public ?HeaderName $name;
  public ?HeaderValue $value;

  public function __construct(shape(
    ?'name' => ?HeaderName,
    ?'value' => ?HeaderValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type HTTPHeaders = vec<HTTPHeader>;

type HTTPMethod = string;

class HTTPRequest {
  public ?IPString $client_ip;
  public ?Country $country;
  public ?HTTPVersion $http_version;
  public ?HTTPHeaders $headers;
  public ?HTTPMethod $method;
  public ?URIString $uri;

  public function __construct(shape(
    ?'client_ip' => ?IPString,
    ?'country' => ?Country,
    ?'http_version' => ?HTTPVersion,
    ?'headers' => ?HTTPHeaders,
    ?'method' => ?HTTPMethod,
    ?'uri' => ?URIString,
  ) $s = shape()) {
    $this->client_ip = $s['client_ip'] ?? '';
    $this->country = $s['country'] ?? '';
    $this->http_version = $s['http_version'] ?? '';
    $this->headers = $s['headers'] ?? vec[];
    $this->method = $s['method'] ?? '';
    $this->uri = $s['uri'] ?? '';
  }
}

type HTTPVersion = string;

type HeaderName = string;

type HeaderValue = string;

class IPSet {
  public ?IPSetDescriptors $ip_set_descriptors;
  public ?ResourceId $ip_set_id;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'ip_set_descriptors' => ?IPSetDescriptors,
    ?'ip_set_id' => ?ResourceId,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->ip_set_descriptors = $s['ip_set_descriptors'] ?? vec[];
    $this->ip_set_id = $s['ip_set_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class IPSetDescriptor {
  public ?IPSetDescriptorType $type;
  public ?IPSetDescriptorValue $value;

  public function __construct(shape(
    ?'type' => ?IPSetDescriptorType,
    ?'value' => ?IPSetDescriptorValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type IPSetDescriptorType = string;

type IPSetDescriptorValue = string;

type IPSetDescriptors = vec<IPSetDescriptor>;

type IPSetSummaries = vec<IPSetSummary>;

class IPSetSummary {
  public ?ResourceId $ip_set_id;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'ip_set_id' => ?ResourceId,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->ip_set_id = $s['ip_set_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class IPSetUpdate {
  public ?ChangeAction $action;
  public ?IPSetDescriptor $ip_set_descriptor;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'ip_set_descriptor' => ?IPSetDescriptor,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->ip_set_descriptor = $s['ip_set_descriptor'] ?? null;
  }
}

type IPSetUpdates = vec<IPSetUpdate>;

type IPString = string;

class ListActivatedRulesInRuleGroupRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;
  public ?ResourceId $rule_group_id;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
    ?'rule_group_id' => ?ResourceId,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
    $this->rule_group_id = $s['rule_group_id'] ?? '';
  }
}

class ListActivatedRulesInRuleGroupResponse {
  public ?ActivatedRules $activated_rules;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'activated_rules' => ?ActivatedRules,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->activated_rules = $s['activated_rules'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListByteMatchSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListByteMatchSetsResponse {
  public ?ByteMatchSetSummaries $byte_match_sets;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'byte_match_sets' => ?ByteMatchSetSummaries,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->byte_match_sets = $s['byte_match_sets'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListGeoMatchSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListGeoMatchSetsResponse {
  public ?GeoMatchSetSummaries $geo_match_sets;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'geo_match_sets' => ?GeoMatchSetSummaries,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->geo_match_sets = $s['geo_match_sets'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListIPSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListIPSetsResponse {
  public ?IPSetSummaries $ip_sets;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'ip_sets' => ?IPSetSummaries,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->ip_sets = $s['ip_sets'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListLoggingConfigurationsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListLoggingConfigurationsResponse {
  public ?LoggingConfigurations $logging_configurations;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'logging_configurations' => ?LoggingConfigurations,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->logging_configurations = $s['logging_configurations'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListRateBasedRulesRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListRateBasedRulesResponse {
  public ?NextMarker $next_marker;
  public ?RuleSummaries $rules;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'rules' => ?RuleSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class ListRegexMatchSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListRegexMatchSetsResponse {
  public ?NextMarker $next_marker;
  public ?RegexMatchSetSummaries $regex_match_sets;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'regex_match_sets' => ?RegexMatchSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->regex_match_sets = $s['regex_match_sets'] ?? vec[];
  }
}

class ListRegexPatternSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListRegexPatternSetsResponse {
  public ?NextMarker $next_marker;
  public ?RegexPatternSetSummaries $regex_pattern_sets;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'regex_pattern_sets' => ?RegexPatternSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->regex_pattern_sets = $s['regex_pattern_sets'] ?? vec[];
  }
}

class ListRuleGroupsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListRuleGroupsResponse {
  public ?NextMarker $next_marker;
  public ?RuleGroupSummaries $rule_groups;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'rule_groups' => ?RuleGroupSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->rule_groups = $s['rule_groups'] ?? vec[];
  }
}

class ListRulesRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListRulesResponse {
  public ?NextMarker $next_marker;
  public ?RuleSummaries $rules;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'rules' => ?RuleSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class ListSizeConstraintSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListSizeConstraintSetsResponse {
  public ?NextMarker $next_marker;
  public ?SizeConstraintSetSummaries $size_constraint_sets;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'size_constraint_sets' => ?SizeConstraintSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->size_constraint_sets = $s['size_constraint_sets'] ?? vec[];
  }
}

class ListSqlInjectionMatchSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListSqlInjectionMatchSetsResponse {
  public ?NextMarker $next_marker;
  public ?SqlInjectionMatchSetSummaries $sql_injection_match_sets;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'sql_injection_match_sets' => ?SqlInjectionMatchSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->sql_injection_match_sets = $s['sql_injection_match_sets'] ?? vec[];
  }
}

class ListSubscribedRuleGroupsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListSubscribedRuleGroupsResponse {
  public ?NextMarker $next_marker;
  public ?SubscribedRuleGroupSummaries $rule_groups;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'rule_groups' => ?SubscribedRuleGroupSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->rule_groups = $s['rule_groups'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?NextMarker $next_marker;
  public ?TagInfoForResource $tag_info_for_resource;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'tag_info_for_resource' => ?TagInfoForResource,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->tag_info_for_resource = $s['tag_info_for_resource'] ?? null;
  }
}

class ListWebACLsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListWebACLsResponse {
  public ?NextMarker $next_marker;
  public ?WebACLSummaries $web_ac_ls;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'web_ac_ls' => ?WebACLSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->web_ac_ls = $s['web_ac_ls'] ?? vec[];
  }
}

class ListXssMatchSetsRequest {
  public ?PaginationLimit $limit;
  public ?NextMarker $next_marker;

  public function __construct(shape(
    ?'limit' => ?PaginationLimit,
    ?'next_marker' => ?NextMarker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListXssMatchSetsResponse {
  public ?NextMarker $next_marker;
  public ?XssMatchSetSummaries $xss_match_sets;

  public function __construct(shape(
    ?'next_marker' => ?NextMarker,
    ?'xss_match_sets' => ?XssMatchSetSummaries,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->xss_match_sets = $s['xss_match_sets'] ?? vec[];
  }
}

type LogDestinationConfigs = vec<ResourceArn>;

class LoggingConfiguration {
  public ?LogDestinationConfigs $log_destination_configs;
  public ?RedactedFields $redacted_fields;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'log_destination_configs' => ?LogDestinationConfigs,
    ?'redacted_fields' => ?RedactedFields,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->log_destination_configs = $s['log_destination_configs'] ?? vec[];
    $this->redacted_fields = $s['redacted_fields'] ?? vec[];
    $this->resource_arn = $s['resource_arn'] ?? '';
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
  public ?ResourceId $data_id;
  public ?Negated $negated;
  public ?PredicateType $type;

  public function __construct(shape(
    ?'data_id' => ?ResourceId,
    ?'negated' => ?Negated,
    ?'type' => ?PredicateType,
  ) $s = shape()) {
    $this->data_id = $s['data_id'] ?? '';
    $this->negated = $s['negated'] ?? false;
    $this->type = $s['type'] ?? '';
  }
}

type PredicateType = string;

type Predicates = vec<Predicate>;

class PutLoggingConfigurationRequest {
  public ?LoggingConfiguration $logging_configuration;

  public function __construct(shape(
    ?'logging_configuration' => ?LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $s['logging_configuration'] ?? null;
  }
}

class PutLoggingConfigurationResponse {
  public ?LoggingConfiguration $logging_configuration;

  public function __construct(shape(
    ?'logging_configuration' => ?LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $s['logging_configuration'] ?? null;
  }
}

class PutPermissionPolicyRequest {
  public ?PolicyString $policy;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'policy' => ?PolicyString,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class PutPermissionPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RateBasedRule {
  public ?Predicates $match_predicates;
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?RateKey $rate_key;
  public ?RateLimit $rate_limit;
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'match_predicates' => ?Predicates,
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'rate_key' => ?RateKey,
    ?'rate_limit' => ?RateLimit,
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->match_predicates = $s['match_predicates'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rate_key = $s['rate_key'] ?? '';
    $this->rate_limit = $s['rate_limit'] ?? 0;
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

type RateKey = string;

type RateLimit = int;

type RedactedFields = vec<FieldToMatch>;

class RegexMatchSet {
  public ?ResourceName $name;
  public ?ResourceId $regex_match_set_id;
  public ?RegexMatchTuples $regex_match_tuples;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'regex_match_set_id' => ?ResourceId,
    ?'regex_match_tuples' => ?RegexMatchTuples,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->regex_match_set_id = $s['regex_match_set_id'] ?? '';
    $this->regex_match_tuples = $s['regex_match_tuples'] ?? vec[];
  }
}

type RegexMatchSetSummaries = vec<RegexMatchSetSummary>;

class RegexMatchSetSummary {
  public ?ResourceName $name;
  public ?ResourceId $regex_match_set_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'regex_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->regex_match_set_id = $s['regex_match_set_id'] ?? '';
  }
}

class RegexMatchSetUpdate {
  public ?ChangeAction $action;
  public ?RegexMatchTuple $regex_match_tuple;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'regex_match_tuple' => ?RegexMatchTuple,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->regex_match_tuple = $s['regex_match_tuple'] ?? null;
  }
}

type RegexMatchSetUpdates = vec<RegexMatchSetUpdate>;

class RegexMatchTuple {
  public ?FieldToMatch $field_to_match;
  public ?ResourceId $regex_pattern_set_id;
  public ?TextTransformation $text_transformation;

  public function __construct(shape(
    ?'field_to_match' => ?FieldToMatch,
    ?'regex_pattern_set_id' => ?ResourceId,
    ?'text_transformation' => ?TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $s['field_to_match'] ?? null;
    $this->regex_pattern_set_id = $s['regex_pattern_set_id'] ?? '';
    $this->text_transformation = $s['text_transformation'] ?? '';
  }
}

type RegexMatchTuples = vec<RegexMatchTuple>;

class RegexPatternSet {
  public ?ResourceName $name;
  public ?ResourceId $regex_pattern_set_id;
  public ?RegexPatternStrings $regex_pattern_strings;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'regex_pattern_set_id' => ?ResourceId,
    ?'regex_pattern_strings' => ?RegexPatternStrings,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->regex_pattern_set_id = $s['regex_pattern_set_id'] ?? '';
    $this->regex_pattern_strings = $s['regex_pattern_strings'] ?? vec[];
  }
}

type RegexPatternSetSummaries = vec<RegexPatternSetSummary>;

class RegexPatternSetSummary {
  public ?ResourceName $name;
  public ?ResourceId $regex_pattern_set_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'regex_pattern_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->regex_pattern_set_id = $s['regex_pattern_set_id'] ?? '';
  }
}

class RegexPatternSetUpdate {
  public ?ChangeAction $action;
  public ?RegexPatternString $regex_pattern_string;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'regex_pattern_string' => ?RegexPatternString,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->regex_pattern_string = $s['regex_pattern_string'] ?? '';
  }
}

type RegexPatternSetUpdates = vec<RegexPatternSetUpdate>;

type RegexPatternString = string;

type RegexPatternStrings = vec<RegexPatternString>;

type ResourceArn = string;

type ResourceId = string;

type ResourceName = string;

class Rule {
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?Predicates $predicates;
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'predicates' => ?Predicates,
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->predicates = $s['predicates'] ?? vec[];
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class RuleGroup {
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?ResourceId $rule_group_id;

  public function __construct(shape(
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'rule_group_id' => ?ResourceId,
  ) $s = shape()) {
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rule_group_id = $s['rule_group_id'] ?? '';
  }
}

type RuleGroupSummaries = vec<RuleGroupSummary>;

class RuleGroupSummary {
  public ?ResourceName $name;
  public ?ResourceId $rule_group_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'rule_group_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->rule_group_id = $s['rule_group_id'] ?? '';
  }
}

class RuleGroupUpdate {
  public ?ChangeAction $action;
  public ?ActivatedRule $activated_rule;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'activated_rule' => ?ActivatedRule,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->activated_rule = $s['activated_rule'] ?? null;
  }
}

type RuleGroupUpdates = vec<RuleGroupUpdate>;

type RulePriority = int;

type RuleSummaries = vec<RuleSummary>;

class RuleSummary {
  public ?ResourceName $name;
  public ?ResourceId $rule_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
  }
}

class RuleUpdate {
  public ?ChangeAction $action;
  public ?Predicate $predicate;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'predicate' => ?Predicate,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->predicate = $s['predicate'] ?? null;
  }
}

type RuleUpdates = vec<RuleUpdate>;

type SampleWeight = int;

class SampledHTTPRequest {
  public ?Action $action;
  public ?HTTPRequest $request;
  public ?ResourceId $rule_within_rule_group;
  public ?Timestamp $timestamp;
  public ?SampleWeight $weight;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'request' => ?HTTPRequest,
    ?'rule_within_rule_group' => ?ResourceId,
    ?'timestamp' => ?Timestamp,
    ?'weight' => ?SampleWeight,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->request = $s['request'] ?? null;
    $this->rule_within_rule_group = $s['rule_within_rule_group'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->weight = $s['weight'] ?? 0;
  }
}

type SampledHTTPRequests = vec<SampledHTTPRequest>;

type Size = int;

class SizeConstraint {
  public ?ComparisonOperator $comparison_operator;
  public ?FieldToMatch $field_to_match;
  public ?Size $size;
  public ?TextTransformation $text_transformation;

  public function __construct(shape(
    ?'comparison_operator' => ?ComparisonOperator,
    ?'field_to_match' => ?FieldToMatch,
    ?'size' => ?Size,
    ?'text_transformation' => ?TextTransformation,
  ) $s = shape()) {
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->field_to_match = $s['field_to_match'] ?? null;
    $this->size = $s['size'] ?? 0;
    $this->text_transformation = $s['text_transformation'] ?? '';
  }
}

class SizeConstraintSet {
  public ?ResourceName $name;
  public ?ResourceId $size_constraint_set_id;
  public ?SizeConstraints $size_constraints;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'size_constraint_set_id' => ?ResourceId,
    ?'size_constraints' => ?SizeConstraints,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->size_constraint_set_id = $s['size_constraint_set_id'] ?? '';
    $this->size_constraints = $s['size_constraints'] ?? vec[];
  }
}

type SizeConstraintSetSummaries = vec<SizeConstraintSetSummary>;

class SizeConstraintSetSummary {
  public ?ResourceName $name;
  public ?ResourceId $size_constraint_set_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'size_constraint_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->size_constraint_set_id = $s['size_constraint_set_id'] ?? '';
  }
}

class SizeConstraintSetUpdate {
  public ?ChangeAction $action;
  public ?SizeConstraint $size_constraint;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'size_constraint' => ?SizeConstraint,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->size_constraint = $s['size_constraint'] ?? null;
  }
}

type SizeConstraintSetUpdates = vec<SizeConstraintSetUpdate>;

type SizeConstraints = vec<SizeConstraint>;

class SqlInjectionMatchSet {
  public ?ResourceName $name;
  public ?ResourceId $sql_injection_match_set_id;
  public ?SqlInjectionMatchTuples $sql_injection_match_tuples;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'sql_injection_match_set_id' => ?ResourceId,
    ?'sql_injection_match_tuples' => ?SqlInjectionMatchTuples,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->sql_injection_match_set_id = $s['sql_injection_match_set_id'] ?? '';
    $this->sql_injection_match_tuples = $s['sql_injection_match_tuples'] ?? vec[];
  }
}

type SqlInjectionMatchSetSummaries = vec<SqlInjectionMatchSetSummary>;

class SqlInjectionMatchSetSummary {
  public ?ResourceName $name;
  public ?ResourceId $sql_injection_match_set_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'sql_injection_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->sql_injection_match_set_id = $s['sql_injection_match_set_id'] ?? '';
  }
}

class SqlInjectionMatchSetUpdate {
  public ?ChangeAction $action;
  public ?SqlInjectionMatchTuple $sql_injection_match_tuple;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'sql_injection_match_tuple' => ?SqlInjectionMatchTuple,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->sql_injection_match_tuple = $s['sql_injection_match_tuple'] ?? null;
  }
}

type SqlInjectionMatchSetUpdates = vec<SqlInjectionMatchSetUpdate>;

class SqlInjectionMatchTuple {
  public ?FieldToMatch $field_to_match;
  public ?TextTransformation $text_transformation;

  public function __construct(shape(
    ?'field_to_match' => ?FieldToMatch,
    ?'text_transformation' => ?TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $s['field_to_match'] ?? null;
    $this->text_transformation = $s['text_transformation'] ?? '';
  }
}

type SqlInjectionMatchTuples = vec<SqlInjectionMatchTuple>;

type SubscribedRuleGroupSummaries = vec<SubscribedRuleGroupSummary>;

class SubscribedRuleGroupSummary {
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?ResourceId $rule_group_id;

  public function __construct(shape(
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'rule_group_id' => ?ResourceId,
  ) $s = shape()) {
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rule_group_id = $s['rule_group_id'] ?? '';
  }
}

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

class TagInfoForResource {
  public ?ResourceArn $resource_arn;
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
  public ?Timestamp $end_time;
  public ?Timestamp $start_time;

  public function __construct(shape(
    ?'end_time' => ?Timestamp,
    ?'start_time' => ?Timestamp,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
  }
}

type Timestamp = int;

type URIString = string;

class UntagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateByteMatchSetRequest {
  public ?ResourceId $byte_match_set_id;
  public ?ChangeToken $change_token;
  public ?ByteMatchSetUpdates $updates;

  public function __construct(shape(
    ?'byte_match_set_id' => ?ResourceId,
    ?'change_token' => ?ChangeToken,
    ?'updates' => ?ByteMatchSetUpdates,
  ) $s = shape()) {
    $this->byte_match_set_id = $s['byte_match_set_id'] ?? '';
    $this->change_token = $s['change_token'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateByteMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateGeoMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $geo_match_set_id;
  public ?GeoMatchSetUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'geo_match_set_id' => ?ResourceId,
    ?'updates' => ?GeoMatchSetUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->geo_match_set_id = $s['geo_match_set_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateGeoMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateIPSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $ip_set_id;
  public ?IPSetUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'ip_set_id' => ?ResourceId,
    ?'updates' => ?IPSetUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->ip_set_id = $s['ip_set_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateIPSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateRateBasedRuleRequest {
  public ?ChangeToken $change_token;
  public ?RateLimit $rate_limit;
  public ?ResourceId $rule_id;
  public ?RuleUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rate_limit' => ?RateLimit,
    ?'rule_id' => ?ResourceId,
    ?'updates' => ?RuleUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rate_limit = $s['rate_limit'] ?? 0;
    $this->rule_id = $s['rule_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateRateBasedRuleResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateRegexMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $regex_match_set_id;
  public ?RegexMatchSetUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'regex_match_set_id' => ?ResourceId,
    ?'updates' => ?RegexMatchSetUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->regex_match_set_id = $s['regex_match_set_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateRegexMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateRegexPatternSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $regex_pattern_set_id;
  public ?RegexPatternSetUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'regex_pattern_set_id' => ?ResourceId,
    ?'updates' => ?RegexPatternSetUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->regex_pattern_set_id = $s['regex_pattern_set_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateRegexPatternSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateRuleGroupRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $rule_group_id;
  public ?RuleGroupUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule_group_id' => ?ResourceId,
    ?'updates' => ?RuleGroupUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule_group_id = $s['rule_group_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateRuleGroupResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateRuleRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $rule_id;
  public ?RuleUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'rule_id' => ?ResourceId,
    ?'updates' => ?RuleUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->rule_id = $s['rule_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateRuleResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateSizeConstraintSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $size_constraint_set_id;
  public ?SizeConstraintSetUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'size_constraint_set_id' => ?ResourceId,
    ?'updates' => ?SizeConstraintSetUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->size_constraint_set_id = $s['size_constraint_set_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateSizeConstraintSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateSqlInjectionMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?ResourceId $sql_injection_match_set_id;
  public ?SqlInjectionMatchSetUpdates $updates;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'sql_injection_match_set_id' => ?ResourceId,
    ?'updates' => ?SqlInjectionMatchSetUpdates,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->sql_injection_match_set_id = $s['sql_injection_match_set_id'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
  }
}

class UpdateSqlInjectionMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateWebACLRequest {
  public ?ChangeToken $change_token;
  public ?WafAction $default_action;
  public ?WebACLUpdates $updates;
  public ?ResourceId $web_acl_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'default_action' => ?WafAction,
    ?'updates' => ?WebACLUpdates,
    ?'web_acl_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->default_action = $s['default_action'] ?? null;
    $this->updates = $s['updates'] ?? vec[];
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

class UpdateWebACLResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class UpdateXssMatchSetRequest {
  public ?ChangeToken $change_token;
  public ?XssMatchSetUpdates $updates;
  public ?ResourceId $xss_match_set_id;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
    ?'updates' => ?XssMatchSetUpdates,
    ?'xss_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
    $this->updates = $s['updates'] ?? vec[];
    $this->xss_match_set_id = $s['xss_match_set_id'] ?? '';
  }
}

class UpdateXssMatchSetResponse {
  public ?ChangeToken $change_token;

  public function __construct(shape(
    ?'change_token' => ?ChangeToken,
  ) $s = shape()) {
    $this->change_token = $s['change_token'] ?? '';
  }
}

class WAFBadRequestException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFDisallowedNameException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFInternalErrorException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFInvalidAccountException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class WAFInvalidOperationException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFInvalidParameterException {
  public ?ParameterExceptionField $field;
  public ?ParameterExceptionParameter $parameter;
  public ?ParameterExceptionReason $reason;

  public function __construct(shape(
    ?'field' => ?ParameterExceptionField,
    ?'parameter' => ?ParameterExceptionParameter,
    ?'reason' => ?ParameterExceptionReason,
  ) $s = shape()) {
    $this->field = $s['field'] ?? '';
    $this->parameter = $s['parameter'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

class WAFInvalidPermissionPolicyException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFInvalidRegexPatternException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFLimitsExceededException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFNonEmptyEntityException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFNonexistentContainerException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFNonexistentItemException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFReferencedItemException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFServiceLinkedRoleErrorException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFStaleDataException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFSubscriptionNotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFTagOperationException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WAFTagOperationInternalErrorException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class WafAction {
  public ?WafActionType $type;

  public function __construct(shape(
    ?'type' => ?WafActionType,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

type WafActionType = string;

class WafOverrideAction {
  public ?WafOverrideActionType $type;

  public function __construct(shape(
    ?'type' => ?WafOverrideActionType,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

type WafOverrideActionType = string;

type WafRuleType = string;

class WebACL {
  public ?WafAction $default_action;
  public ?MetricName $metric_name;
  public ?ResourceName $name;
  public ?ActivatedRules $rules;
  public ?ResourceArn $web_acl_arn;
  public ?ResourceId $web_acl_id;

  public function __construct(shape(
    ?'default_action' => ?WafAction,
    ?'metric_name' => ?MetricName,
    ?'name' => ?ResourceName,
    ?'rules' => ?ActivatedRules,
    ?'web_acl_arn' => ?ResourceArn,
    ?'web_acl_id' => ?ResourceId,
  ) $s = shape()) {
    $this->default_action = $s['default_action'] ?? null;
    $this->metric_name = $s['metric_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
    $this->web_acl_arn = $s['web_acl_arn'] ?? '';
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

type WebACLSummaries = vec<WebACLSummary>;

class WebACLSummary {
  public ?ResourceName $name;
  public ?ResourceId $web_acl_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'web_acl_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->web_acl_id = $s['web_acl_id'] ?? '';
  }
}

class WebACLUpdate {
  public ?ChangeAction $action;
  public ?ActivatedRule $activated_rule;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'activated_rule' => ?ActivatedRule,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->activated_rule = $s['activated_rule'] ?? null;
  }
}

type WebACLUpdates = vec<WebACLUpdate>;

class XssMatchSet {
  public ?ResourceName $name;
  public ?ResourceId $xss_match_set_id;
  public ?XssMatchTuples $xss_match_tuples;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'xss_match_set_id' => ?ResourceId,
    ?'xss_match_tuples' => ?XssMatchTuples,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->xss_match_set_id = $s['xss_match_set_id'] ?? '';
    $this->xss_match_tuples = $s['xss_match_tuples'] ?? vec[];
  }
}

type XssMatchSetSummaries = vec<XssMatchSetSummary>;

class XssMatchSetSummary {
  public ?ResourceName $name;
  public ?ResourceId $xss_match_set_id;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'xss_match_set_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->xss_match_set_id = $s['xss_match_set_id'] ?? '';
  }
}

class XssMatchSetUpdate {
  public ?ChangeAction $action;
  public ?XssMatchTuple $xss_match_tuple;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'xss_match_tuple' => ?XssMatchTuple,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->xss_match_tuple = $s['xss_match_tuple'] ?? null;
  }
}

type XssMatchSetUpdates = vec<XssMatchSetUpdate>;

class XssMatchTuple {
  public ?FieldToMatch $field_to_match;
  public ?TextTransformation $text_transformation;

  public function __construct(shape(
    ?'field_to_match' => ?FieldToMatch,
    ?'text_transformation' => ?TextTransformation,
  ) $s = shape()) {
    $this->field_to_match = $s['field_to_match'] ?? null;
    $this->text_transformation = $s['text_transformation'] ?? '';
  }
}

type XssMatchTuples = vec<XssMatchTuple>;

type errorMessage = string;

