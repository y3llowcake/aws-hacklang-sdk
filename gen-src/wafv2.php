<?hh // strict
namespace slack\aws\wafv2;

interface WAFV2 {
  public function AssociateWebACL(AssociateWebACLRequest): Awaitable<Errors\Result<AssociateWebACLResponse>>;
  public function CheckCapacity(CheckCapacityRequest): Awaitable<Errors\Result<CheckCapacityResponse>>;
  public function CreateIPSet(CreateIPSetRequest): Awaitable<Errors\Result<CreateIPSetResponse>>;
  public function CreateRegexPatternSet(CreateRegexPatternSetRequest): Awaitable<Errors\Result<CreateRegexPatternSetResponse>>;
  public function CreateRuleGroup(CreateRuleGroupRequest): Awaitable<Errors\Result<CreateRuleGroupResponse>>;
  public function CreateWebACL(CreateWebACLRequest): Awaitable<Errors\Result<CreateWebACLResponse>>;
  public function DeleteFirewallManagerRuleGroups(DeleteFirewallManagerRuleGroupsRequest): Awaitable<Errors\Result<DeleteFirewallManagerRuleGroupsResponse>>;
  public function DeleteIPSet(DeleteIPSetRequest): Awaitable<Errors\Result<DeleteIPSetResponse>>;
  public function DeleteLoggingConfiguration(DeleteLoggingConfigurationRequest): Awaitable<Errors\Result<DeleteLoggingConfigurationResponse>>;
  public function DeletePermissionPolicy(DeletePermissionPolicyRequest): Awaitable<Errors\Result<DeletePermissionPolicyResponse>>;
  public function DeleteRegexPatternSet(DeleteRegexPatternSetRequest): Awaitable<Errors\Result<DeleteRegexPatternSetResponse>>;
  public function DeleteRuleGroup(DeleteRuleGroupRequest): Awaitable<Errors\Result<DeleteRuleGroupResponse>>;
  public function DeleteWebACL(DeleteWebACLRequest): Awaitable<Errors\Result<DeleteWebACLResponse>>;
  public function DescribeManagedRuleGroup(DescribeManagedRuleGroupRequest): Awaitable<Errors\Result<DescribeManagedRuleGroupResponse>>;
  public function DisassociateWebACL(DisassociateWebACLRequest): Awaitable<Errors\Result<DisassociateWebACLResponse>>;
  public function GetIPSet(GetIPSetRequest): Awaitable<Errors\Result<GetIPSetResponse>>;
  public function GetLoggingConfiguration(GetLoggingConfigurationRequest): Awaitable<Errors\Result<GetLoggingConfigurationResponse>>;
  public function GetPermissionPolicy(GetPermissionPolicyRequest): Awaitable<Errors\Result<GetPermissionPolicyResponse>>;
  public function GetRateBasedStatementManagedKeys(GetRateBasedStatementManagedKeysRequest): Awaitable<Errors\Result<GetRateBasedStatementManagedKeysResponse>>;
  public function GetRegexPatternSet(GetRegexPatternSetRequest): Awaitable<Errors\Result<GetRegexPatternSetResponse>>;
  public function GetRuleGroup(GetRuleGroupRequest): Awaitable<Errors\Result<GetRuleGroupResponse>>;
  public function GetSampledRequests(GetSampledRequestsRequest): Awaitable<Errors\Result<GetSampledRequestsResponse>>;
  public function GetWebACL(GetWebACLRequest): Awaitable<Errors\Result<GetWebACLResponse>>;
  public function GetWebACLForResource(GetWebACLForResourceRequest): Awaitable<Errors\Result<GetWebACLForResourceResponse>>;
  public function ListAvailableManagedRuleGroups(ListAvailableManagedRuleGroupsRequest): Awaitable<Errors\Result<ListAvailableManagedRuleGroupsResponse>>;
  public function ListIPSets(ListIPSetsRequest): Awaitable<Errors\Result<ListIPSetsResponse>>;
  public function ListLoggingConfigurations(ListLoggingConfigurationsRequest): Awaitable<Errors\Result<ListLoggingConfigurationsResponse>>;
  public function ListRegexPatternSets(ListRegexPatternSetsRequest): Awaitable<Errors\Result<ListRegexPatternSetsResponse>>;
  public function ListResourcesForWebACL(ListResourcesForWebACLRequest): Awaitable<Errors\Result<ListResourcesForWebACLResponse>>;
  public function ListRuleGroups(ListRuleGroupsRequest): Awaitable<Errors\Result<ListRuleGroupsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListWebACLs(ListWebACLsRequest): Awaitable<Errors\Result<ListWebACLsResponse>>;
  public function PutLoggingConfiguration(PutLoggingConfigurationRequest): Awaitable<Errors\Result<PutLoggingConfigurationResponse>>;
  public function PutPermissionPolicy(PutPermissionPolicyRequest): Awaitable<Errors\Result<PutPermissionPolicyResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateIPSet(UpdateIPSetRequest): Awaitable<Errors\Result<UpdateIPSetResponse>>;
  public function UpdateRegexPatternSet(UpdateRegexPatternSetRequest): Awaitable<Errors\Result<UpdateRegexPatternSetResponse>>;
  public function UpdateRuleGroup(UpdateRuleGroupRequest): Awaitable<Errors\Result<UpdateRuleGroupResponse>>;
  public function UpdateWebACL(UpdateWebACLRequest): Awaitable<Errors\Result<UpdateWebACLResponse>>;
}

type Action = string;

class AllQueryArguments {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AllowAction {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AndStatement {
  public Statements $statements;

  public function __construct(shape(
  ?'statements' => Statements,
  ) $s = shape()) {
    $this->statements = $statements ?? [];
  }
}

class AssociateWebACLRequest {
  public ResourceArn $resource_arn;
  public ResourceArn $web_acl_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'web_acl_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->web_acl_arn = $web_acl_arn ?? ;
  }
}

class AssociateWebACLResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BlockAction {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Body {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Boolean = bool;

class ByteMatchStatement {
  public FieldToMatch $field_to_match;
  public PositionalConstraint $positional_constraint;
  public SearchString $search_string;
  public TextTransformations $text_transformations;

  public function __construct(shape(
  ?'field_to_match' => FieldToMatch,
  ?'positional_constraint' => PositionalConstraint,
  ?'search_string' => SearchString,
  ?'text_transformations' => TextTransformations,
  ) $s = shape()) {
    $this->field_to_match = $field_to_match ?? null;
    $this->positional_constraint = $positional_constraint ?? "";
    $this->search_string = $search_string ?? "";
    $this->text_transformations = $text_transformations ?? [];
  }
}

type CapacityUnit = int;

class CheckCapacityRequest {
  public Rules $rules;
  public Scope $scope;

  public function __construct(shape(
  ?'rules' => Rules,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->rules = $rules ?? [];
    $this->scope = $scope ?? "";
  }
}

class CheckCapacityResponse {
  public ConsumedCapacity $capacity;

  public function __construct(shape(
  ?'capacity' => ConsumedCapacity,
  ) $s = shape()) {
    $this->capacity = $capacity ?? ;
  }
}

type ComparisonOperator = string;

type ConsumedCapacity = int;

class CountAction {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Country = string;

type CountryCode = string;

type CountryCodes = vec<CountryCode>;

class CreateIPSetRequest {
  public IPAddresses $addresses;
  public EntityDescription $description;
  public IPAddressVersion $ip_address_version;
  public EntityName $name;
  public Scope $scope;
  public TagList $tags;

  public function __construct(shape(
  ?'addresses' => IPAddresses,
  ?'description' => EntityDescription,
  ?'ip_address_version' => IPAddressVersion,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->addresses = $addresses ?? ;
    $this->description = $description ?? ;
    $this->ip_address_version = $ip_address_version ?? "";
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateIPSetResponse {
  public IPSetSummary $summary;

  public function __construct(shape(
  ?'summary' => IPSetSummary,
  ) $s = shape()) {
    $this->summary = $summary ?? ;
  }
}

class CreateRegexPatternSetRequest {
  public EntityDescription $description;
  public EntityName $name;
  public RegularExpressionList $regular_expression_list;
  public Scope $scope;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => EntityDescription,
  ?'name' => EntityName,
  ?'regular_expression_list' => RegularExpressionList,
  ?'scope' => Scope,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->regular_expression_list = $regular_expression_list ?? [];
    $this->scope = $scope ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateRegexPatternSetResponse {
  public RegexPatternSetSummary $summary;

  public function __construct(shape(
  ?'summary' => RegexPatternSetSummary,
  ) $s = shape()) {
    $this->summary = $summary ?? ;
  }
}

class CreateRuleGroupRequest {
  public CapacityUnit $capacity;
  public EntityDescription $description;
  public EntityName $name;
  public Rules $rules;
  public Scope $scope;
  public TagList $tags;
  public VisibilityConfig $visibility_config;

  public function __construct(shape(
  ?'capacity' => CapacityUnit,
  ?'description' => EntityDescription,
  ?'name' => EntityName,
  ?'rules' => Rules,
  ?'scope' => Scope,
  ?'tags' => TagList,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->capacity = $capacity ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->rules = $rules ?? [];
    $this->scope = $scope ?? "";
    $this->tags = $tags ?? ;
    $this->visibility_config = $visibility_config ?? null;
  }
}

class CreateRuleGroupResponse {
  public RuleGroupSummary $summary;

  public function __construct(shape(
  ?'summary' => RuleGroupSummary,
  ) $s = shape()) {
    $this->summary = $summary ?? ;
  }
}

class CreateWebACLRequest {
  public DefaultAction $default_action;
  public EntityDescription $description;
  public EntityName $name;
  public Rules $rules;
  public Scope $scope;
  public TagList $tags;
  public VisibilityConfig $visibility_config;

  public function __construct(shape(
  ?'default_action' => DefaultAction,
  ?'description' => EntityDescription,
  ?'name' => EntityName,
  ?'rules' => Rules,
  ?'scope' => Scope,
  ?'tags' => TagList,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->default_action = $default_action ?? null;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->rules = $rules ?? [];
    $this->scope = $scope ?? "";
    $this->tags = $tags ?? ;
    $this->visibility_config = $visibility_config ?? null;
  }
}

class CreateWebACLResponse {
  public WebACLSummary $summary;

  public function __construct(shape(
  ?'summary' => WebACLSummary,
  ) $s = shape()) {
    $this->summary = $summary ?? ;
  }
}

class DefaultAction {
  public AllowAction $allow;
  public BlockAction $block;

  public function __construct(shape(
  ?'allow' => AllowAction,
  ?'block' => BlockAction,
  ) $s = shape()) {
    $this->allow = $allow ?? ;
    $this->block = $block ?? ;
  }
}

class DeleteFirewallManagerRuleGroupsRequest {
  public ResourceArn $web_acl_arn;
  public LockToken $web_acl_lock_token;

  public function __construct(shape(
  ?'web_acl_arn' => ResourceArn,
  ?'web_acl_lock_token' => LockToken,
  ) $s = shape()) {
    $this->web_acl_arn = $web_acl_arn ?? ;
    $this->web_acl_lock_token = $web_acl_lock_token ?? ;
  }
}

class DeleteFirewallManagerRuleGroupsResponse {
  public LockToken $next_web_acl_lock_token;

  public function __construct(shape(
  ?'next_web_acl_lock_token' => LockToken,
  ) $s = shape()) {
    $this->next_web_acl_lock_token = $next_web_acl_lock_token ?? ;
  }
}

class DeleteIPSetRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class DeleteIPSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
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

class DeleteRegexPatternSetRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class DeleteRegexPatternSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRuleGroupRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class DeleteRuleGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteWebACLRequest {
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class DeleteWebACLResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeManagedRuleGroupRequest {
  public EntityName $name;
  public Scope $scope;
  public VendorName $vendor_name;

  public function __construct(shape(
  ?'name' => EntityName,
  ?'scope' => Scope,
  ?'vendor_name' => VendorName,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
    $this->vendor_name = $vendor_name ?? "";
  }
}

class DescribeManagedRuleGroupResponse {
  public CapacityUnit $capacity;
  public RuleSummaries $rules;

  public function __construct(shape(
  ?'capacity' => CapacityUnit,
  ?'rules' => RuleSummaries,
  ) $s = shape()) {
    $this->capacity = $capacity ?? ;
    $this->rules = $rules ?? [];
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

type EntityDescription = string;

type EntityId = string;

type EntityName = string;

type ErrorMessage = string;

type ErrorReason = string;

class ExcludedRule {
  public EntityName $name;

  public function __construct(shape(
  ?'name' => EntityName,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type ExcludedRules = vec<ExcludedRule>;

class FieldToMatch {
  public AllQueryArguments $all_query_arguments;
  public Body $body;
  public Method $method;
  public QueryString $query_string;
  public SingleHeader $single_header;
  public SingleQueryArgument $single_query_argument;
  public UriPath $uri_path;

  public function __construct(shape(
  ?'all_query_arguments' => AllQueryArguments,
  ?'body' => Body,
  ?'method' => Method,
  ?'query_string' => QueryString,
  ?'single_header' => SingleHeader,
  ?'single_query_argument' => SingleQueryArgument,
  ?'uri_path' => UriPath,
  ) $s = shape()) {
    $this->all_query_arguments = $all_query_arguments ?? null;
    $this->body = $body ?? null;
    $this->method = $method ?? null;
    $this->query_string = $query_string ?? null;
    $this->single_header = $single_header ?? null;
    $this->single_query_argument = $single_query_argument ?? null;
    $this->uri_path = $uri_path ?? null;
  }
}

type FieldToMatchData = string;

class FirewallManagerRuleGroup {
  public FirewallManagerStatement $firewall_manager_statement;
  public EntityName $name;
  public OverrideAction $override_action;
  public RulePriority $priority;
  public VisibilityConfig $visibility_config;

  public function __construct(shape(
  ?'firewall_manager_statement' => FirewallManagerStatement,
  ?'name' => EntityName,
  ?'override_action' => OverrideAction,
  ?'priority' => RulePriority,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->firewall_manager_statement = $firewall_manager_statement ?? null;
    $this->name = $name ?? ;
    $this->override_action = $override_action ?? null;
    $this->priority = $priority ?? ;
    $this->visibility_config = $visibility_config ?? null;
  }
}

type FirewallManagerRuleGroups = vec<FirewallManagerRuleGroup>;

class FirewallManagerStatement {
  public ManagedRuleGroupStatement $managed_rule_group_statement;
  public RuleGroupReferenceStatement $rule_group_reference_statement;

  public function __construct(shape(
  ?'managed_rule_group_statement' => ManagedRuleGroupStatement,
  ?'rule_group_reference_statement' => RuleGroupReferenceStatement,
  ) $s = shape()) {
    $this->managed_rule_group_statement = $managed_rule_group_statement ?? null;
    $this->rule_group_reference_statement = $rule_group_reference_statement ?? null;
  }
}

class GeoMatchStatement {
  public CountryCodes $country_codes;

  public function __construct(shape(
  ?'country_codes' => CountryCodes,
  ) $s = shape()) {
    $this->country_codes = $country_codes ?? [];
  }
}

class GetIPSetRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class GetIPSetResponse {
  public IPSet $ip_set;
  public LockToken $lock_token;

  public function __construct(shape(
  ?'ip_set' => IPSet,
  ?'lock_token' => LockToken,
  ) $s = shape()) {
    $this->ip_set = $ip_set ?? null;
    $this->lock_token = $lock_token ?? "";
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
    $this->policy = $policy ?? ;
  }
}

class GetRateBasedStatementManagedKeysRequest {
  public EntityName $rule_name;
  public Scope $scope;
  public EntityId $web_acl_id;
  public EntityName $web_acl_name;

  public function __construct(shape(
  ?'rule_name' => EntityName,
  ?'scope' => Scope,
  ?'web_acl_id' => EntityId,
  ?'web_acl_name' => EntityName,
  ) $s = shape()) {
    $this->rule_name = $rule_name ?? ;
    $this->scope = $scope ?? "";
    $this->web_acl_id = $web_acl_id ?? ;
    $this->web_acl_name = $web_acl_name ?? ;
  }
}

class GetRateBasedStatementManagedKeysResponse {
  public RateBasedStatementManagedKeysIPSet $managed_keys_ipv_4;
  public RateBasedStatementManagedKeysIPSet $managed_keys_ipv_6;

  public function __construct(shape(
  ?'managed_keys_ipv_4' => RateBasedStatementManagedKeysIPSet,
  ?'managed_keys_ipv_6' => RateBasedStatementManagedKeysIPSet,
  ) $s = shape()) {
    $this->managed_keys_ipv_4 = $managed_keys_ipv_4 ?? ;
    $this->managed_keys_ipv_6 = $managed_keys_ipv_6 ?? ;
  }
}

class GetRegexPatternSetRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class GetRegexPatternSetResponse {
  public LockToken $lock_token;
  public RegexPatternSet $regex_pattern_set;

  public function __construct(shape(
  ?'lock_token' => LockToken,
  ?'regex_pattern_set' => RegexPatternSet,
  ) $s = shape()) {
    $this->lock_token = $lock_token ?? "";
    $this->regex_pattern_set = $regex_pattern_set ?? null;
  }
}

class GetRuleGroupRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class GetRuleGroupResponse {
  public LockToken $lock_token;
  public RuleGroup $rule_group;

  public function __construct(shape(
  ?'lock_token' => LockToken,
  ?'rule_group' => RuleGroup,
  ) $s = shape()) {
    $this->lock_token = $lock_token ?? "";
    $this->rule_group = $rule_group ?? null;
  }
}

class GetSampledRequestsRequest {
  public ListMaxItems $max_items;
  public MetricName $rule_metric_name;
  public Scope $scope;
  public TimeWindow $time_window;
  public ResourceArn $web_acl_arn;

  public function __construct(shape(
  ?'max_items' => ListMaxItems,
  ?'rule_metric_name' => MetricName,
  ?'scope' => Scope,
  ?'time_window' => TimeWindow,
  ?'web_acl_arn' => ResourceArn,
  ) $s = shape()) {
    $this->max_items = $max_items ?? ;
    $this->rule_metric_name = $rule_metric_name ?? ;
    $this->scope = $scope ?? "";
    $this->time_window = $time_window ?? null;
    $this->web_acl_arn = $web_acl_arn ?? ;
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
    $this->sampled_requests = $sampled_requests ?? ;
    $this->time_window = $time_window ?? null;
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
  public WebACL $web_acl;

  public function __construct(shape(
  ?'web_acl' => WebACL,
  ) $s = shape()) {
    $this->web_acl = $web_acl ?? null;
  }
}

class GetWebACLRequest {
  public EntityId $id;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'id' => EntityId,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class GetWebACLResponse {
  public LockToken $lock_token;
  public WebACL $web_acl;

  public function __construct(shape(
  ?'lock_token' => LockToken,
  ?'web_acl' => WebACL,
  ) $s = shape()) {
    $this->lock_token = $lock_token ?? "";
    $this->web_acl = $web_acl ?? null;
  }
}

class HTTPHeader {
  public HeaderName $name;
  public HeaderValue $value;

  public function __construct(shape(
  ?'name' => HeaderName,
  ?'value' => HeaderValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
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
    $this->client_ip = $client_ip ?? ;
    $this->country = $country ?? "";
    $this->http_version = $http_version ?? "";
    $this->headers = $headers ?? ;
    $this->method = $method ?? null;
    $this->uri = $uri ?? ;
  }
}

type HTTPVersion = string;

type HeaderName = string;

type HeaderValue = string;

type IPAddress = string;

type IPAddressVersion = string;

type IPAddresses = vec<IPAddress>;

class IPSet {
  public ResourceArn $arn;
  public IPAddresses $addresses;
  public EntityDescription $description;
  public IPAddressVersion $ip_address_version;
  public EntityId $id;
  public EntityName $name;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'addresses' => IPAddresses,
  ?'description' => EntityDescription,
  ?'ip_address_version' => IPAddressVersion,
  ?'id' => EntityId,
  ?'name' => EntityName,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->addresses = $addresses ?? ;
    $this->description = $description ?? ;
    $this->ip_address_version = $ip_address_version ?? "";
    $this->id = $id ?? ;
    $this->name = $name ?? ;
  }
}

class IPSetReferenceStatement {
  public ResourceArn $arn;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

type IPSetSummaries = vec<IPSetSummary>;

class IPSetSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
  }
}

type IPString = string;

class ListAvailableManagedRuleGroupsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->next_marker = $next_marker ?? "";
    $this->scope = $scope ?? "";
  }
}

class ListAvailableManagedRuleGroupsResponse {
  public ManagedRuleGroupSummaries $managed_rule_groups;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'managed_rule_groups' => ManagedRuleGroupSummaries,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->managed_rule_groups = $managed_rule_groups ?? ;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListIPSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->next_marker = $next_marker ?? "";
    $this->scope = $scope ?? "";
  }
}

class ListIPSetsResponse {
  public IPSetSummaries $ip_sets;
  public NextMarker $next_marker;

  public function __construct(shape(
  ?'ip_sets' => IPSetSummaries,
  ?'next_marker' => NextMarker,
  ) $s = shape()) {
    $this->ip_sets = $ip_sets ?? ;
    $this->next_marker = $next_marker ?? "";
  }
}

class ListLoggingConfigurationsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->next_marker = $next_marker ?? "";
    $this->scope = $scope ?? "";
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

type ListMaxItems = int;

class ListRegexPatternSetsRequest {
  public PaginationLimit $limit;
  public NextMarker $next_marker;
  public Scope $scope;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->next_marker = $next_marker ?? "";
    $this->scope = $scope ?? "";
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
    $this->regex_pattern_sets = $regex_pattern_sets ?? ;
  }
}

class ListResourcesForWebACLRequest {
  public ResourceType $resource_type;
  public ResourceArn $web_acl_arn;

  public function __construct(shape(
  ?'resource_type' => ResourceType,
  ?'web_acl_arn' => ResourceArn,
  ) $s = shape()) {
    $this->resource_type = $resource_type ?? "";
    $this->web_acl_arn = $web_acl_arn ?? ;
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
  public Scope $scope;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->next_marker = $next_marker ?? "";
    $this->scope = $scope ?? "";
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
    $this->rule_groups = $rule_groups ?? ;
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
    $this->limit = $limit ?? ;
    $this->next_marker = $next_marker ?? "";
    $this->resource_arn = $resource_arn ?? ;
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
  public Scope $scope;

  public function __construct(shape(
  ?'limit' => PaginationLimit,
  ?'next_marker' => NextMarker,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->limit = $limit ?? ;
    $this->next_marker = $next_marker ?? "";
    $this->scope = $scope ?? "";
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
    $this->web_ac_ls = $web_ac_ls ?? ;
  }
}

type LockToken = string;

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

class ManagedRuleGroupStatement {
  public ExcludedRules $excluded_rules;
  public EntityName $name;
  public VendorName $vendor_name;

  public function __construct(shape(
  ?'excluded_rules' => ExcludedRules,
  ?'name' => EntityName,
  ?'vendor_name' => VendorName,
  ) $s = shape()) {
    $this->excluded_rules = $excluded_rules ?? [];
    $this->name = $name ?? ;
    $this->vendor_name = $vendor_name ?? "";
  }
}

type ManagedRuleGroupSummaries = vec<ManagedRuleGroupSummary>;

class ManagedRuleGroupSummary {
  public EntityDescription $description;
  public EntityName $name;
  public VendorName $vendor_name;

  public function __construct(shape(
  ?'description' => EntityDescription,
  ?'name' => EntityName,
  ?'vendor_name' => VendorName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->name = $name ?? ;
    $this->vendor_name = $vendor_name ?? "";
  }
}

class Method {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type MetricName = string;

type NextMarker = string;

class NoneAction {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class NotStatement {
  public Statement $statement;

  public function __construct(shape(
  ?'statement' => Statement,
  ) $s = shape()) {
    $this->statement = $statement ?? null;
  }
}

class OrStatement {
  public Statements $statements;

  public function __construct(shape(
  ?'statements' => Statements,
  ) $s = shape()) {
    $this->statements = $statements ?? [];
  }
}

class OverrideAction {
  public CountAction $count;
  public NoneAction $none;

  public function __construct(shape(
  ?'count' => CountAction,
  ?'none' => NoneAction,
  ) $s = shape()) {
    $this->count = $count ?? ;
    $this->none = $none ?? ;
  }
}

type PaginationLimit = int;

type ParameterExceptionField = string;

type ParameterExceptionParameter = string;

type PolicyString = string;

type PopulationSize = int;

type PositionalConstraint = string;

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
    $this->policy = $policy ?? ;
    $this->resource_arn = $resource_arn ?? "";
  }
}

class PutPermissionPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class QueryString {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RateBasedStatement {
  public RateBasedStatementAggregateKeyType $aggregate_key_type;
  public RateLimit $limit;
  public Statement $scope_down_statement;

  public function __construct(shape(
  ?'aggregate_key_type' => RateBasedStatementAggregateKeyType,
  ?'limit' => RateLimit,
  ?'scope_down_statement' => Statement,
  ) $s = shape()) {
    $this->aggregate_key_type = $aggregate_key_type ?? ;
    $this->limit = $limit ?? ;
    $this->scope_down_statement = $scope_down_statement ?? ;
  }
}

type RateBasedStatementAggregateKeyType = string;

class RateBasedStatementManagedKeysIPSet {
  public IPAddresses $addresses;
  public IPAddressVersion $ip_address_version;

  public function __construct(shape(
  ?'addresses' => IPAddresses,
  ?'ip_address_version' => IPAddressVersion,
  ) $s = shape()) {
    $this->addresses = $addresses ?? ;
    $this->ip_address_version = $ip_address_version ?? "";
  }
}

type RateLimit = int;

type RedactedFields = vec<FieldToMatch>;

class Regex {
  public RegexPatternString $regex_string;

  public function __construct(shape(
  ?'regex_string' => RegexPatternString,
  ) $s = shape()) {
    $this->regex_string = $regex_string ?? ;
  }
}

class RegexPatternSet {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public EntityName $name;
  public RegularExpressionList $regular_expression_list;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'name' => EntityName,
  ?'regular_expression_list' => RegularExpressionList,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->regular_expression_list = $regular_expression_list ?? [];
  }
}

class RegexPatternSetReferenceStatement {
  public ResourceArn $arn;
  public FieldToMatch $field_to_match;
  public TextTransformations $text_transformations;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'field_to_match' => FieldToMatch,
  ?'text_transformations' => TextTransformations,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->field_to_match = $field_to_match ?? null;
    $this->text_transformations = $text_transformations ?? [];
  }
}

type RegexPatternSetSummaries = vec<RegexPatternSetSummary>;

class RegexPatternSetSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
  }
}

type RegexPatternString = string;

type RegularExpressionList = vec<Regex>;

type ResourceArn = string;

type ResourceArns = vec<ResourceArn>;

type ResourceType = string;

class Rule {
  public RuleAction $action;
  public EntityName $name;
  public OverrideAction $override_action;
  public RulePriority $priority;
  public Statement $statement;
  public VisibilityConfig $visibility_config;

  public function __construct(shape(
  ?'action' => RuleAction,
  ?'name' => EntityName,
  ?'override_action' => OverrideAction,
  ?'priority' => RulePriority,
  ?'statement' => Statement,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->name = $name ?? ;
    $this->override_action = $override_action ?? null;
    $this->priority = $priority ?? ;
    $this->statement = $statement ?? null;
    $this->visibility_config = $visibility_config ?? null;
  }
}

class RuleAction {
  public AllowAction $allow;
  public BlockAction $block;
  public CountAction $count;

  public function __construct(shape(
  ?'allow' => AllowAction,
  ?'block' => BlockAction,
  ?'count' => CountAction,
  ) $s = shape()) {
    $this->allow = $allow ?? ;
    $this->block = $block ?? ;
    $this->count = $count ?? ;
  }
}

class RuleGroup {
  public ResourceArn $arn;
  public CapacityUnit $capacity;
  public EntityDescription $description;
  public EntityId $id;
  public EntityName $name;
  public Rules $rules;
  public VisibilityConfig $visibility_config;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'capacity' => CapacityUnit,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'name' => EntityName,
  ?'rules' => Rules,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->capacity = $capacity ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->rules = $rules ?? [];
    $this->visibility_config = $visibility_config ?? null;
  }
}

class RuleGroupReferenceStatement {
  public ResourceArn $arn;
  public ExcludedRules $excluded_rules;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'excluded_rules' => ExcludedRules,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->excluded_rules = $excluded_rules ?? [];
  }
}

type RuleGroupSummaries = vec<RuleGroupSummary>;

class RuleGroupSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
  }
}

type RulePriority = int;

type RuleSummaries = vec<RuleSummary>;

class RuleSummary {
  public RuleAction $action;
  public EntityName $name;

  public function __construct(shape(
  ?'action' => RuleAction,
  ?'name' => EntityName,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->name = $name ?? ;
  }
}

type Rules = vec<Rule>;

type SampleWeight = int;

class SampledHTTPRequest {
  public Action $action;
  public HTTPRequest $request;
  public EntityName $rule_name_within_rule_group;
  public Timestamp $timestamp;
  public SampleWeight $weight;

  public function __construct(shape(
  ?'action' => Action,
  ?'request' => HTTPRequest,
  ?'rule_name_within_rule_group' => EntityName,
  ?'timestamp' => Timestamp,
  ?'weight' => SampleWeight,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->request = $request ?? ;
    $this->rule_name_within_rule_group = $rule_name_within_rule_group ?? ;
    $this->timestamp = $timestamp ?? 0;
    $this->weight = $weight ?? ;
  }
}

type SampledHTTPRequests = vec<SampledHTTPRequest>;

type Scope = string;

type SearchString = string;

class SingleHeader {
  public FieldToMatchData $name;

  public function __construct(shape(
  ?'name' => FieldToMatchData,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

class SingleQueryArgument {
  public FieldToMatchData $name;

  public function __construct(shape(
  ?'name' => FieldToMatchData,
  ) $s = shape()) {
    $this->name = $name ?? ;
  }
}

type Size = int;

class SizeConstraintStatement {
  public ComparisonOperator $comparison_operator;
  public FieldToMatch $field_to_match;
  public Size $size;
  public TextTransformations $text_transformations;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'field_to_match' => FieldToMatch,
  ?'size' => Size,
  ?'text_transformations' => TextTransformations,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? "";
    $this->field_to_match = $field_to_match ?? null;
    $this->size = $size ?? 0;
    $this->text_transformations = $text_transformations ?? [];
  }
}

class SqliMatchStatement {
  public FieldToMatch $field_to_match;
  public TextTransformations $text_transformations;

  public function __construct(shape(
  ?'field_to_match' => FieldToMatch,
  ?'text_transformations' => TextTransformations,
  ) $s = shape()) {
    $this->field_to_match = $field_to_match ?? null;
    $this->text_transformations = $text_transformations ?? [];
  }
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

  public function __construct(shape(
  ?'and_statement' => AndStatement,
  ?'byte_match_statement' => ByteMatchStatement,
  ?'geo_match_statement' => GeoMatchStatement,
  ?'ip_set_reference_statement' => IPSetReferenceStatement,
  ?'managed_rule_group_statement' => ManagedRuleGroupStatement,
  ?'not_statement' => NotStatement,
  ?'or_statement' => OrStatement,
  ?'rate_based_statement' => RateBasedStatement,
  ?'regex_pattern_set_reference_statement' => RegexPatternSetReferenceStatement,
  ?'rule_group_reference_statement' => RuleGroupReferenceStatement,
  ?'size_constraint_statement' => SizeConstraintStatement,
  ?'sqli_match_statement' => SqliMatchStatement,
  ?'xss_match_statement' => XssMatchStatement,
  ) $s = shape()) {
    $this->and_statement = $and_statement ?? null;
    $this->byte_match_statement = $byte_match_statement ?? null;
    $this->geo_match_statement = $geo_match_statement ?? null;
    $this->ip_set_reference_statement = $ip_set_reference_statement ?? null;
    $this->managed_rule_group_statement = $managed_rule_group_statement ?? null;
    $this->not_statement = $not_statement ?? null;
    $this->or_statement = $or_statement ?? null;
    $this->rate_based_statement = $rate_based_statement ?? null;
    $this->regex_pattern_set_reference_statement = $regex_pattern_set_reference_statement ?? null;
    $this->rule_group_reference_statement = $rule_group_reference_statement ?? null;
    $this->size_constraint_statement = $size_constraint_statement ?? null;
    $this->sqli_match_statement = $sqli_match_statement ?? null;
    $this->xss_match_statement = $xss_match_statement ?? null;
  }
}

type Statements = vec<Statement>;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

class TagInfoForResource {
  public ResourceArn $resource_arn;
  public TagList $tag_list;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
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
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TextTransformation {
  public TextTransformationPriority $priority;
  public TextTransformationType $type;

  public function __construct(shape(
  ?'priority' => TextTransformationPriority,
  ?'type' => TextTransformationType,
  ) $s = shape()) {
    $this->priority = $priority ?? ;
    $this->type = $type ?? ;
  }
}

type TextTransformationPriority = int;

type TextTransformationType = string;

type TextTransformations = vec<TextTransformation>;

class TimeWindow {
  public Timestamp $end_time;
  public Timestamp $start_time;

  public function __construct(shape(
  ?'end_time' => Timestamp,
  ?'start_time' => Timestamp,
  ) $s = shape()) {
    $this->end_time = $end_time ?? ;
    $this->start_time = $start_time ?? ;
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
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateIPSetRequest {
  public IPAddresses $addresses;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Scope $scope;

  public function __construct(shape(
  ?'addresses' => IPAddresses,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->addresses = $addresses ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->scope = $scope ?? "";
  }
}

class UpdateIPSetResponse {
  public LockToken $next_lock_token;

  public function __construct(shape(
  ?'next_lock_token' => LockToken,
  ) $s = shape()) {
    $this->next_lock_token = $next_lock_token ?? ;
  }
}

class UpdateRegexPatternSetRequest {
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public RegularExpressionList $regular_expression_list;
  public Scope $scope;

  public function __construct(shape(
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'regular_expression_list' => RegularExpressionList,
  ?'scope' => Scope,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->regular_expression_list = $regular_expression_list ?? [];
    $this->scope = $scope ?? "";
  }
}

class UpdateRegexPatternSetResponse {
  public LockToken $next_lock_token;

  public function __construct(shape(
  ?'next_lock_token' => LockToken,
  ) $s = shape()) {
    $this->next_lock_token = $next_lock_token ?? ;
  }
}

class UpdateRuleGroupRequest {
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;
  public Rules $rules;
  public Scope $scope;
  public VisibilityConfig $visibility_config;

  public function __construct(shape(
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'rules' => Rules,
  ?'scope' => Scope,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->rules = $rules ?? [];
    $this->scope = $scope ?? "";
    $this->visibility_config = $visibility_config ?? null;
  }
}

class UpdateRuleGroupResponse {
  public LockToken $next_lock_token;

  public function __construct(shape(
  ?'next_lock_token' => LockToken,
  ) $s = shape()) {
    $this->next_lock_token = $next_lock_token ?? ;
  }
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

  public function __construct(shape(
  ?'default_action' => DefaultAction,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ?'rules' => Rules,
  ?'scope' => Scope,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->default_action = $default_action ?? null;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
    $this->rules = $rules ?? [];
    $this->scope = $scope ?? "";
    $this->visibility_config = $visibility_config ?? null;
  }
}

class UpdateWebACLResponse {
  public LockToken $next_lock_token;

  public function __construct(shape(
  ?'next_lock_token' => LockToken,
  ) $s = shape()) {
    $this->next_lock_token = $next_lock_token ?? ;
  }
}

class UriPath {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VendorName = string;

class VisibilityConfig {
  public boolean $cloud_watch_metrics_enabled;
  public MetricName $metric_name;
  public boolean $sampled_requests_enabled;

  public function __construct(shape(
  ?'cloud_watch_metrics_enabled' => boolean,
  ?'metric_name' => MetricName,
  ?'sampled_requests_enabled' => boolean,
  ) $s = shape()) {
    $this->cloud_watch_metrics_enabled = $cloud_watch_metrics_enabled ?? ;
    $this->metric_name = $metric_name ?? "";
    $this->sampled_requests_enabled = $sampled_requests_enabled ?? ;
  }
}

class WAFAssociatedItemException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFDuplicateItemException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFInternalErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFInvalidOperationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFInvalidParameterException {
  public ParameterExceptionField $field;
  public ParameterExceptionParameter $parameter;
  public ErrorReason $reason;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'field' => ParameterExceptionField,
  ?'parameter' => ParameterExceptionParameter,
  ?'reason' => ErrorReason,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->field = $field ?? ;
    $this->parameter = $parameter ?? ;
    $this->reason = $reason ?? ;
    $this->message = $message ?? ;
  }
}

class WAFInvalidPermissionPolicyException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFInvalidResourceException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFLimitsExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFNonexistentItemException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFOptimisticLockException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFServiceLinkedRoleErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFSubscriptionNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFTagOperationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFTagOperationInternalErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class WAFUnavailableEntityException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
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

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'capacity' => ConsumedCapacity,
  ?'default_action' => DefaultAction,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'managed_by_firewall_manager' => boolean,
  ?'name' => EntityName,
  ?'post_process_firewall_manager_rule_groups' => FirewallManagerRuleGroups,
  ?'pre_process_firewall_manager_rule_groups' => FirewallManagerRuleGroups,
  ?'rules' => Rules,
  ?'visibility_config' => VisibilityConfig,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->capacity = $capacity ?? ;
    $this->default_action = $default_action ?? null;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->managed_by_firewall_manager = $managed_by_firewall_manager ?? ;
    $this->name = $name ?? ;
    $this->post_process_firewall_manager_rule_groups = $post_process_firewall_manager_rule_groups ?? ;
    $this->pre_process_firewall_manager_rule_groups = $pre_process_firewall_manager_rule_groups ?? ;
    $this->rules = $rules ?? [];
    $this->visibility_config = $visibility_config ?? null;
  }
}

type WebACLSummaries = vec<WebACLSummary>;

class WebACLSummary {
  public ResourceArn $arn;
  public EntityDescription $description;
  public EntityId $id;
  public LockToken $lock_token;
  public EntityName $name;

  public function __construct(shape(
  ?'arn' => ResourceArn,
  ?'description' => EntityDescription,
  ?'id' => EntityId,
  ?'lock_token' => LockToken,
  ?'name' => EntityName,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->lock_token = $lock_token ?? "";
    $this->name = $name ?? ;
  }
}

class XssMatchStatement {
  public FieldToMatch $field_to_match;
  public TextTransformations $text_transformations;

  public function __construct(shape(
  ?'field_to_match' => FieldToMatch,
  ?'text_transformations' => TextTransformations,
  ) $s = shape()) {
    $this->field_to_match = $field_to_match ?? null;
    $this->text_transformations = $text_transformations ?? [];
  }
}

