<?hh // strict
namespace slack\aws\route53resolver;

interface Route53Resolver {
  public function AssociateResolverEndpointIpAddress(AssociateResolverEndpointIpAddressRequest $in): Awaitable<\Errors\Result<AssociateResolverEndpointIpAddressResponse>>;
  public function AssociateResolverRule(AssociateResolverRuleRequest $in): Awaitable<\Errors\Result<AssociateResolverRuleResponse>>;
  public function CreateResolverEndpoint(CreateResolverEndpointRequest $in): Awaitable<\Errors\Result<CreateResolverEndpointResponse>>;
  public function CreateResolverRule(CreateResolverRuleRequest $in): Awaitable<\Errors\Result<CreateResolverRuleResponse>>;
  public function DeleteResolverEndpoint(DeleteResolverEndpointRequest $in): Awaitable<\Errors\Result<DeleteResolverEndpointResponse>>;
  public function DeleteResolverRule(DeleteResolverRuleRequest $in): Awaitable<\Errors\Result<DeleteResolverRuleResponse>>;
  public function DisassociateResolverEndpointIpAddress(DisassociateResolverEndpointIpAddressRequest $in): Awaitable<\Errors\Result<DisassociateResolverEndpointIpAddressResponse>>;
  public function DisassociateResolverRule(DisassociateResolverRuleRequest $in): Awaitable<\Errors\Result<DisassociateResolverRuleResponse>>;
  public function GetResolverEndpoint(GetResolverEndpointRequest $in): Awaitable<\Errors\Result<GetResolverEndpointResponse>>;
  public function GetResolverRule(GetResolverRuleRequest $in): Awaitable<\Errors\Result<GetResolverRuleResponse>>;
  public function GetResolverRuleAssociation(GetResolverRuleAssociationRequest $in): Awaitable<\Errors\Result<GetResolverRuleAssociationResponse>>;
  public function GetResolverRulePolicy(GetResolverRulePolicyRequest $in): Awaitable<\Errors\Result<GetResolverRulePolicyResponse>>;
  public function ListResolverEndpointIpAddresses(ListResolverEndpointIpAddressesRequest $in): Awaitable<\Errors\Result<ListResolverEndpointIpAddressesResponse>>;
  public function ListResolverEndpoints(ListResolverEndpointsRequest $in): Awaitable<\Errors\Result<ListResolverEndpointsResponse>>;
  public function ListResolverRuleAssociations(ListResolverRuleAssociationsRequest $in): Awaitable<\Errors\Result<ListResolverRuleAssociationsResponse>>;
  public function ListResolverRules(ListResolverRulesRequest $in): Awaitable<\Errors\Result<ListResolverRulesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function PutResolverRulePolicy(PutResolverRulePolicyRequest $in): Awaitable<\Errors\Result<PutResolverRulePolicyResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateResolverEndpoint(UpdateResolverEndpointRequest $in): Awaitable<\Errors\Result<UpdateResolverEndpointResponse>>;
  public function UpdateResolverRule(UpdateResolverRuleRequest $in): Awaitable<\Errors\Result<UpdateResolverRuleResponse>>;
}

type AccountId = string;

type Arn = string;

class AssociateResolverEndpointIpAddressRequest {
  public ?IpAddressUpdate $ip_address;
  public ?ResourceId $resolver_endpoint_id;

  public function __construct(shape(
    ?'ip_address' => ?IpAddressUpdate,
    ?'resolver_endpoint_id' => ?ResourceId,
  ) $s = shape()) {
    $this->ip_address = $s['ip_address'] ?? null;
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
  }
}

class AssociateResolverEndpointIpAddressResponse {
  public ?ResolverEndpoint $resolver_endpoint;

  public function __construct(shape(
    ?'resolver_endpoint' => ?ResolverEndpoint,
  ) $s = shape()) {
    $this->resolver_endpoint = $s['resolver_endpoint'] ?? null;
  }
}

class AssociateResolverRuleRequest {
  public ?Name $name;
  public ?ResourceId $resolver_rule_id;
  public ?ResourceId $vpc_id;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'resolver_rule_id' => ?ResourceId,
    ?'vpc_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->resolver_rule_id = $s['resolver_rule_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AssociateResolverRuleResponse {
  public ?ResolverRuleAssociation $resolver_rule_association;

  public function __construct(shape(
    ?'resolver_rule_association' => ?ResolverRuleAssociation,
  ) $s = shape()) {
    $this->resolver_rule_association = $s['resolver_rule_association'] ?? null;
  }
}

type Boolean = bool;

class CreateResolverEndpointRequest {
  public ?CreatorRequestId $creator_request_id;
  public ?ResolverEndpointDirection $direction;
  public ?IpAddressesRequest $ip_addresses;
  public ?Name $name;
  public ?SecurityGroupIds $security_group_ids;
  public ?TagList $tags;

  public function __construct(shape(
    ?'creator_request_id' => ?CreatorRequestId,
    ?'direction' => ?ResolverEndpointDirection,
    ?'ip_addresses' => ?IpAddressesRequest,
    ?'name' => ?Name,
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->direction = $s['direction'] ?? '';
    $this->ip_addresses = $s['ip_addresses'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateResolverEndpointResponse {
  public ?ResolverEndpoint $resolver_endpoint;

  public function __construct(shape(
    ?'resolver_endpoint' => ?ResolverEndpoint,
  ) $s = shape()) {
    $this->resolver_endpoint = $s['resolver_endpoint'] ?? null;
  }
}

class CreateResolverRuleRequest {
  public ?CreatorRequestId $creator_request_id;
  public ?DomainName $domain_name;
  public ?Name $name;
  public ?ResourceId $resolver_endpoint_id;
  public ?RuleTypeOption $rule_type;
  public ?TagList $tags;
  public ?TargetList $target_ips;

  public function __construct(shape(
    ?'creator_request_id' => ?CreatorRequestId,
    ?'domain_name' => ?DomainName,
    ?'name' => ?Name,
    ?'resolver_endpoint_id' => ?ResourceId,
    ?'rule_type' => ?RuleTypeOption,
    ?'tags' => ?TagList,
    ?'target_ips' => ?TargetList,
  ) $s = shape()) {
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
    $this->rule_type = $s['rule_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_ips = $s['target_ips'] ?? vec[];
  }
}

class CreateResolverRuleResponse {
  public ?ResolverRule $resolver_rule;

  public function __construct(shape(
    ?'resolver_rule' => ?ResolverRule,
  ) $s = shape()) {
    $this->resolver_rule = $s['resolver_rule'] ?? null;
  }
}

type CreatorRequestId = string;

class DeleteResolverEndpointRequest {
  public ?ResourceId $resolver_endpoint_id;

  public function __construct(shape(
    ?'resolver_endpoint_id' => ?ResourceId,
  ) $s = shape()) {
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
  }
}

class DeleteResolverEndpointResponse {
  public ?ResolverEndpoint $resolver_endpoint;

  public function __construct(shape(
    ?'resolver_endpoint' => ?ResolverEndpoint,
  ) $s = shape()) {
    $this->resolver_endpoint = $s['resolver_endpoint'] ?? null;
  }
}

class DeleteResolverRuleRequest {
  public ?ResourceId $resolver_rule_id;

  public function __construct(shape(
    ?'resolver_rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->resolver_rule_id = $s['resolver_rule_id'] ?? '';
  }
}

class DeleteResolverRuleResponse {
  public ?ResolverRule $resolver_rule;

  public function __construct(shape(
    ?'resolver_rule' => ?ResolverRule,
  ) $s = shape()) {
    $this->resolver_rule = $s['resolver_rule'] ?? null;
  }
}

class DisassociateResolverEndpointIpAddressRequest {
  public ?IpAddressUpdate $ip_address;
  public ?ResourceId $resolver_endpoint_id;

  public function __construct(shape(
    ?'ip_address' => ?IpAddressUpdate,
    ?'resolver_endpoint_id' => ?ResourceId,
  ) $s = shape()) {
    $this->ip_address = $s['ip_address'] ?? null;
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
  }
}

class DisassociateResolverEndpointIpAddressResponse {
  public ?ResolverEndpoint $resolver_endpoint;

  public function __construct(shape(
    ?'resolver_endpoint' => ?ResolverEndpoint,
  ) $s = shape()) {
    $this->resolver_endpoint = $s['resolver_endpoint'] ?? null;
  }
}

class DisassociateResolverRuleRequest {
  public ?ResourceId $resolver_rule_id;
  public ?ResourceId $vpc_id;

  public function __construct(shape(
    ?'resolver_rule_id' => ?ResourceId,
    ?'vpc_id' => ?ResourceId,
  ) $s = shape()) {
    $this->resolver_rule_id = $s['resolver_rule_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DisassociateResolverRuleResponse {
  public ?ResolverRuleAssociation $resolver_rule_association;

  public function __construct(shape(
    ?'resolver_rule_association' => ?ResolverRuleAssociation,
  ) $s = shape()) {
    $this->resolver_rule_association = $s['resolver_rule_association'] ?? null;
  }
}

type DomainName = string;

type ExceptionMessage = string;

class Filter {
  public ?FilterName $name;
  public ?FilterValues $values;

  public function __construct(shape(
    ?'name' => ?FilterName,
    ?'values' => ?FilterValues,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type FilterName = string;

type FilterValue = string;

type FilterValues = vec<FilterValue>;

type Filters = vec<Filter>;

class GetResolverEndpointRequest {
  public ?ResourceId $resolver_endpoint_id;

  public function __construct(shape(
    ?'resolver_endpoint_id' => ?ResourceId,
  ) $s = shape()) {
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
  }
}

class GetResolverEndpointResponse {
  public ?ResolverEndpoint $resolver_endpoint;

  public function __construct(shape(
    ?'resolver_endpoint' => ?ResolverEndpoint,
  ) $s = shape()) {
    $this->resolver_endpoint = $s['resolver_endpoint'] ?? null;
  }
}

class GetResolverRuleAssociationRequest {
  public ?ResourceId $resolver_rule_association_id;

  public function __construct(shape(
    ?'resolver_rule_association_id' => ?ResourceId,
  ) $s = shape()) {
    $this->resolver_rule_association_id = $s['resolver_rule_association_id'] ?? '';
  }
}

class GetResolverRuleAssociationResponse {
  public ?ResolverRuleAssociation $resolver_rule_association;

  public function __construct(shape(
    ?'resolver_rule_association' => ?ResolverRuleAssociation,
  ) $s = shape()) {
    $this->resolver_rule_association = $s['resolver_rule_association'] ?? null;
  }
}

class GetResolverRulePolicyRequest {
  public ?Arn $arn;

  public function __construct(shape(
    ?'arn' => ?Arn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GetResolverRulePolicyResponse {
  public ?ResolverRulePolicy $resolver_rule_policy;

  public function __construct(shape(
    ?'resolver_rule_policy' => ?ResolverRulePolicy,
  ) $s = shape()) {
    $this->resolver_rule_policy = $s['resolver_rule_policy'] ?? '';
  }
}

class GetResolverRuleRequest {
  public ?ResourceId $resolver_rule_id;

  public function __construct(shape(
    ?'resolver_rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->resolver_rule_id = $s['resolver_rule_id'] ?? '';
  }
}

class GetResolverRuleResponse {
  public ?ResolverRule $resolver_rule;

  public function __construct(shape(
    ?'resolver_rule' => ?ResolverRule,
  ) $s = shape()) {
    $this->resolver_rule = $s['resolver_rule'] ?? null;
  }
}

class InternalServiceErrorException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public string $field_name;
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'field_name' => string,
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->field_name = $s['field_name'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPolicyDocument {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTagException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Ip = string;

type IpAddressCount = int;

class IpAddressRequest {
  public ?Ip $ip;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'ip' => ?Ip,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->ip = $s['ip'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class IpAddressResponse {
  public ?Rfc3339TimeString $creation_time;
  public ?Ip $ip;
  public ?ResourceId $ip_id;
  public ?Rfc3339TimeString $modification_time;
  public ?IpAddressStatus $status;
  public ?StatusMessage $status_message;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'creation_time' => ?Rfc3339TimeString,
    ?'ip' => ?Ip,
    ?'ip_id' => ?ResourceId,
    ?'modification_time' => ?Rfc3339TimeString,
    ?'status' => ?IpAddressStatus,
    ?'status_message' => ?StatusMessage,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? '';
    $this->ip = $s['ip'] ?? '';
    $this->ip_id = $s['ip_id'] ?? '';
    $this->modification_time = $s['modification_time'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type IpAddressStatus = string;

class IpAddressUpdate {
  public ?Ip $ip;
  public ?ResourceId $ip_id;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'ip' => ?Ip,
    ?'ip_id' => ?ResourceId,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->ip = $s['ip'] ?? '';
    $this->ip_id = $s['ip_id'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type IpAddressesRequest = vec<IpAddressRequest>;

type IpAddressesResponse = vec<IpAddressResponse>;

class LimitExceededException {
  public string $message;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListResolverEndpointIpAddressesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResourceId $resolver_endpoint_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resolver_endpoint_id' => ?ResourceId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
  }
}

class ListResolverEndpointIpAddressesResponse {
  public ?IpAddressesResponse $ip_addresses;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'ip_addresses' => ?IpAddressesResponse,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->ip_addresses = $s['ip_addresses'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResolverEndpointsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResolverEndpointsResponse {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResolverEndpoints $resolver_endpoints;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resolver_endpoints' => ?ResolverEndpoints,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resolver_endpoints = $s['resolver_endpoints'] ?? vec[];
  }
}

class ListResolverRuleAssociationsRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResolverRuleAssociationsResponse {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResolverRuleAssociations $resolver_rule_associations;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resolver_rule_associations' => ?ResolverRuleAssociations,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resolver_rule_associations = $s['resolver_rule_associations'] ?? vec[];
  }
}

class ListResolverRulesRequest {
  public ?Filters $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResolverRulesResponse {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?ResolverRules $resolver_rules;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resolver_rules' => ?ResolverRules,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resolver_rules = $s['resolver_rules'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $resource_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'resource_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?NextToken $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type MaxResults = int;

type Name = string;

type NextToken = string;

type Port = int;

class PutResolverRulePolicyRequest {
  public ?Arn $arn;
  public ?ResolverRulePolicy $resolver_rule_policy;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'resolver_rule_policy' => ?ResolverRulePolicy,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->resolver_rule_policy = $s['resolver_rule_policy'] ?? '';
  }
}

class PutResolverRulePolicyResponse {
  public bool $return_value;

  public function __construct(shape(
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->return_value = $s['return_value'] ?? false;
  }
}

class ResolverEndpoint {
  public ?Arn $arn;
  public ?Rfc3339TimeString $creation_time;
  public ?CreatorRequestId $creator_request_id;
  public ?ResolverEndpointDirection $direction;
  public ?ResourceId $host_vpc_id;
  public ?ResourceId $id;
  public ?IpAddressCount $ip_address_count;
  public ?Rfc3339TimeString $modification_time;
  public ?Name $name;
  public ?SecurityGroupIds $security_group_ids;
  public ?ResolverEndpointStatus $status;
  public ?StatusMessage $status_message;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'creation_time' => ?Rfc3339TimeString,
    ?'creator_request_id' => ?CreatorRequestId,
    ?'direction' => ?ResolverEndpointDirection,
    ?'host_vpc_id' => ?ResourceId,
    ?'id' => ?ResourceId,
    ?'ip_address_count' => ?IpAddressCount,
    ?'modification_time' => ?Rfc3339TimeString,
    ?'name' => ?Name,
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'status' => ?ResolverEndpointStatus,
    ?'status_message' => ?StatusMessage,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? '';
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->direction = $s['direction'] ?? '';
    $this->host_vpc_id = $s['host_vpc_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->ip_address_count = $s['ip_address_count'] ?? 0;
    $this->modification_time = $s['modification_time'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type ResolverEndpointDirection = string;

type ResolverEndpointStatus = string;

type ResolverEndpoints = vec<ResolverEndpoint>;

class ResolverRule {
  public ?Arn $arn;
  public ?CreatorRequestId $creator_request_id;
  public ?DomainName $domain_name;
  public ?ResourceId $id;
  public ?Name $name;
  public ?AccountId $owner_id;
  public ?ResourceId $resolver_endpoint_id;
  public ?RuleTypeOption $rule_type;
  public ?ShareStatus $share_status;
  public ?ResolverRuleStatus $status;
  public ?StatusMessage $status_message;
  public ?TargetList $target_ips;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'creator_request_id' => ?CreatorRequestId,
    ?'domain_name' => ?DomainName,
    ?'id' => ?ResourceId,
    ?'name' => ?Name,
    ?'owner_id' => ?AccountId,
    ?'resolver_endpoint_id' => ?ResourceId,
    ?'rule_type' => ?RuleTypeOption,
    ?'share_status' => ?ShareStatus,
    ?'status' => ?ResolverRuleStatus,
    ?'status_message' => ?StatusMessage,
    ?'target_ips' => ?TargetList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creator_request_id = $s['creator_request_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
    $this->rule_type = $s['rule_type'] ?? '';
    $this->share_status = $s['share_status'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->target_ips = $s['target_ips'] ?? vec[];
  }
}

class ResolverRuleAssociation {
  public ?ResourceId $id;
  public ?Name $name;
  public ?ResourceId $resolver_rule_id;
  public ?ResolverRuleAssociationStatus $status;
  public ?StatusMessage $status_message;
  public ?ResourceId $vpc_id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
    ?'name' => ?Name,
    ?'resolver_rule_id' => ?ResourceId,
    ?'status' => ?ResolverRuleAssociationStatus,
    ?'status_message' => ?StatusMessage,
    ?'vpc_id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resolver_rule_id = $s['resolver_rule_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type ResolverRuleAssociationStatus = string;

type ResolverRuleAssociations = vec<ResolverRuleAssociation>;

class ResolverRuleConfig {
  public ?Name $name;
  public ?ResourceId $resolver_endpoint_id;
  public ?TargetList $target_ips;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'resolver_endpoint_id' => ?ResourceId,
    ?'target_ips' => ?TargetList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
    $this->target_ips = $s['target_ips'] ?? vec[];
  }
}

type ResolverRulePolicy = string;

type ResolverRuleStatus = string;

type ResolverRules = vec<ResolverRule>;

class ResourceExistsException {
  public string $message;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ResourceId = string;

class ResourceInUseException {
  public string $message;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ResourceNotFoundException {
  public string $message;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ResourceUnavailableException {
  public string $message;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type Rfc3339TimeString = string;

type RuleTypeOption = string;

type SecurityGroupIds = vec<ResourceId>;

type ShareStatus = string;

type StatusMessage = string;

type String = string;

type SubnetId = string;

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

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
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

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TargetAddress {
  public ?Ip $ip;
  public ?Port $port;

  public function __construct(shape(
    ?'ip' => ?Ip,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->ip = $s['ip'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type TargetList = vec<TargetAddress>;

class ThrottlingException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnknownResourceException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?Arn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
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

class UpdateResolverEndpointRequest {
  public ?Name $name;
  public ?ResourceId $resolver_endpoint_id;

  public function __construct(shape(
    ?'name' => ?Name,
    ?'resolver_endpoint_id' => ?ResourceId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->resolver_endpoint_id = $s['resolver_endpoint_id'] ?? '';
  }
}

class UpdateResolverEndpointResponse {
  public ?ResolverEndpoint $resolver_endpoint;

  public function __construct(shape(
    ?'resolver_endpoint' => ?ResolverEndpoint,
  ) $s = shape()) {
    $this->resolver_endpoint = $s['resolver_endpoint'] ?? null;
  }
}

class UpdateResolverRuleRequest {
  public ?ResolverRuleConfig $config;
  public ?ResourceId $resolver_rule_id;

  public function __construct(shape(
    ?'config' => ?ResolverRuleConfig,
    ?'resolver_rule_id' => ?ResourceId,
  ) $s = shape()) {
    $this->config = $s['config'] ?? null;
    $this->resolver_rule_id = $s['resolver_rule_id'] ?? '';
  }
}

class UpdateResolverRuleResponse {
  public ?ResolverRule $resolver_rule;

  public function __construct(shape(
    ?'resolver_rule' => ?ResolverRule,
  ) $s = shape()) {
    $this->resolver_rule = $s['resolver_rule'] ?? null;
  }
}

