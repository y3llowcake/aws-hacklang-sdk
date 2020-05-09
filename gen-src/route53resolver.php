<?hh // strict
namespace slack\aws\route53resolver;

interface Route53Resolver {
  public function AssociateResolverEndpointIpAddress(AssociateResolverEndpointIpAddressRequest) Awaitable<Errors\Result<AssociateResolverEndpointIpAddressResponse>>;
  public function AssociateResolverRule(AssociateResolverRuleRequest) Awaitable<Errors\Result<AssociateResolverRuleResponse>>;
  public function CreateResolverEndpoint(CreateResolverEndpointRequest) Awaitable<Errors\Result<CreateResolverEndpointResponse>>;
  public function CreateResolverRule(CreateResolverRuleRequest) Awaitable<Errors\Result<CreateResolverRuleResponse>>;
  public function DeleteResolverEndpoint(DeleteResolverEndpointRequest) Awaitable<Errors\Result<DeleteResolverEndpointResponse>>;
  public function DeleteResolverRule(DeleteResolverRuleRequest) Awaitable<Errors\Result<DeleteResolverRuleResponse>>;
  public function DisassociateResolverEndpointIpAddress(DisassociateResolverEndpointIpAddressRequest) Awaitable<Errors\Result<DisassociateResolverEndpointIpAddressResponse>>;
  public function DisassociateResolverRule(DisassociateResolverRuleRequest) Awaitable<Errors\Result<DisassociateResolverRuleResponse>>;
  public function GetResolverEndpoint(GetResolverEndpointRequest) Awaitable<Errors\Result<GetResolverEndpointResponse>>;
  public function GetResolverRule(GetResolverRuleRequest) Awaitable<Errors\Result<GetResolverRuleResponse>>;
  public function GetResolverRuleAssociation(GetResolverRuleAssociationRequest) Awaitable<Errors\Result<GetResolverRuleAssociationResponse>>;
  public function GetResolverRulePolicy(GetResolverRulePolicyRequest) Awaitable<Errors\Result<GetResolverRulePolicyResponse>>;
  public function ListResolverEndpointIpAddresses(ListResolverEndpointIpAddressesRequest) Awaitable<Errors\Result<ListResolverEndpointIpAddressesResponse>>;
  public function ListResolverEndpoints(ListResolverEndpointsRequest) Awaitable<Errors\Result<ListResolverEndpointsResponse>>;
  public function ListResolverRuleAssociations(ListResolverRuleAssociationsRequest) Awaitable<Errors\Result<ListResolverRuleAssociationsResponse>>;
  public function ListResolverRules(ListResolverRulesRequest) Awaitable<Errors\Result<ListResolverRulesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function PutResolverRulePolicy(PutResolverRulePolicyRequest) Awaitable<Errors\Result<PutResolverRulePolicyResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateResolverEndpoint(UpdateResolverEndpointRequest) Awaitable<Errors\Result<UpdateResolverEndpointResponse>>;
  public function UpdateResolverRule(UpdateResolverRuleRequest) Awaitable<Errors\Result<UpdateResolverRuleResponse>>;
}

class AccountId {
}

class Arn {
}

class AssociateResolverEndpointIpAddressRequest {
  public IpAddressUpdate $ip_address;
  public ResourceId $resolver_endpoint_id;
}

class AssociateResolverEndpointIpAddressResponse {
  public ResolverEndpoint $resolver_endpoint;
}

class AssociateResolverRuleRequest {
  public Name $name;
  public ResourceId $resolver_rule_id;
  public ResourceId $vpc_id;
}

class AssociateResolverRuleResponse {
  public ResolverRuleAssociation $resolver_rule_association;
}

class Boolean {
}

class CreateResolverEndpointRequest {
  public CreatorRequestId $creator_request_id;
  public ResolverEndpointDirection $direction;
  public IpAddressesRequest $ip_addresses;
  public Name $name;
  public SecurityGroupIds $security_group_ids;
  public TagList $tags;
}

class CreateResolverEndpointResponse {
  public ResolverEndpoint $resolver_endpoint;
}

class CreateResolverRuleRequest {
  public CreatorRequestId $creator_request_id;
  public DomainName $domain_name;
  public Name $name;
  public ResourceId $resolver_endpoint_id;
  public RuleTypeOption $rule_type;
  public TagList $tags;
  public TargetList $target_ips;
}

class CreateResolverRuleResponse {
  public ResolverRule $resolver_rule;
}

class CreatorRequestId {
}

class DeleteResolverEndpointRequest {
  public ResourceId $resolver_endpoint_id;
}

class DeleteResolverEndpointResponse {
  public ResolverEndpoint $resolver_endpoint;
}

class DeleteResolverRuleRequest {
  public ResourceId $resolver_rule_id;
}

class DeleteResolverRuleResponse {
  public ResolverRule $resolver_rule;
}

class DisassociateResolverEndpointIpAddressRequest {
  public IpAddressUpdate $ip_address;
  public ResourceId $resolver_endpoint_id;
}

class DisassociateResolverEndpointIpAddressResponse {
  public ResolverEndpoint $resolver_endpoint;
}

class DisassociateResolverRuleRequest {
  public ResourceId $resolver_rule_id;
  public ResourceId $vpc_id;
}

class DisassociateResolverRuleResponse {
  public ResolverRuleAssociation $resolver_rule_association;
}

class DomainName {
}

class ExceptionMessage {
}

class Filter {
  public FilterName $name;
  public FilterValues $values;
}

class FilterName {
}

class FilterValue {
}

class FilterValues {
}

class Filters {
}

class GetResolverEndpointRequest {
  public ResourceId $resolver_endpoint_id;
}

class GetResolverEndpointResponse {
  public ResolverEndpoint $resolver_endpoint;
}

class GetResolverRuleAssociationRequest {
  public ResourceId $resolver_rule_association_id;
}

class GetResolverRuleAssociationResponse {
  public ResolverRuleAssociation $resolver_rule_association;
}

class GetResolverRulePolicyRequest {
  public Arn $arn;
}

class GetResolverRulePolicyResponse {
  public ResolverRulePolicy $resolver_rule_policy;
}

class GetResolverRuleRequest {
  public ResourceId $resolver_rule_id;
}

class GetResolverRuleResponse {
  public ResolverRule $resolver_rule;
}

class InternalServiceErrorException {
  public ExceptionMessage $message;
}

class InvalidNextTokenException {
  public string $message;
}

class InvalidParameterException {
  public string $field_name;
  public ExceptionMessage $message;
}

class InvalidPolicyDocument {
  public ExceptionMessage $message;
}

class InvalidRequestException {
  public ExceptionMessage $message;
}

class InvalidTagException {
  public ExceptionMessage $message;
}

class Ip {
}

class IpAddressCount {
}

class IpAddressRequest {
  public Ip $ip;
  public SubnetId $subnet_id;
}

class IpAddressResponse {
  public Rfc3339TimeString $creation_time;
  public Ip $ip;
  public ResourceId $ip_id;
  public Rfc3339TimeString $modification_time;
  public IpAddressStatus $status;
  public StatusMessage $status_message;
  public SubnetId $subnet_id;
}

class IpAddressStatus {
}

class IpAddressUpdate {
  public Ip $ip;
  public ResourceId $ip_id;
  public SubnetId $subnet_id;
}

class IpAddressesRequest {
}

class IpAddressesResponse {
}

class LimitExceededException {
  public string $message;
  public string $resource_type;
}

class ListResolverEndpointIpAddressesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceId $resolver_endpoint_id;
}

class ListResolverEndpointIpAddressesResponse {
  public IpAddressesResponse $ip_addresses;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListResolverEndpointsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListResolverEndpointsResponse {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResolverEndpoints $resolver_endpoints;
}

class ListResolverRuleAssociationsRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListResolverRuleAssociationsResponse {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResolverRuleAssociations $resolver_rule_associations;
}

class ListResolverRulesRequest {
  public Filters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListResolverRulesResponse {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResolverRules $resolver_rules;
}

class ListTagsForResourceRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class MaxResults {
}

class Name {
}

class NextToken {
}

class Port {
}

class PutResolverRulePolicyRequest {
  public Arn $arn;
  public ResolverRulePolicy $resolver_rule_policy;
}

class PutResolverRulePolicyResponse {
  public boolean $return_value;
}

class ResolverEndpoint {
  public Arn $arn;
  public Rfc3339TimeString $creation_time;
  public CreatorRequestId $creator_request_id;
  public ResolverEndpointDirection $direction;
  public ResourceId $host_vpc_id;
  public ResourceId $id;
  public IpAddressCount $ip_address_count;
  public Rfc3339TimeString $modification_time;
  public Name $name;
  public SecurityGroupIds $security_group_ids;
  public ResolverEndpointStatus $status;
  public StatusMessage $status_message;
}

class ResolverEndpointDirection {
}

class ResolverEndpointStatus {
}

class ResolverEndpoints {
}

class ResolverRule {
  public Arn $arn;
  public CreatorRequestId $creator_request_id;
  public DomainName $domain_name;
  public ResourceId $id;
  public Name $name;
  public AccountId $owner_id;
  public ResourceId $resolver_endpoint_id;
  public RuleTypeOption $rule_type;
  public ShareStatus $share_status;
  public ResolverRuleStatus $status;
  public StatusMessage $status_message;
  public TargetList $target_ips;
}

class ResolverRuleAssociation {
  public ResourceId $id;
  public Name $name;
  public ResourceId $resolver_rule_id;
  public ResolverRuleAssociationStatus $status;
  public StatusMessage $status_message;
  public ResourceId $vpc_id;
}

class ResolverRuleAssociationStatus {
}

class ResolverRuleAssociations {
}

class ResolverRuleConfig {
  public Name $name;
  public ResourceId $resolver_endpoint_id;
  public TargetList $target_ips;
}

class ResolverRulePolicy {
}

class ResolverRuleStatus {
}

class ResolverRules {
}

class ResourceExistsException {
  public string $message;
  public string $resource_type;
}

class ResourceId {
}

class ResourceInUseException {
  public string $message;
  public string $resource_type;
}

class ResourceNotFoundException {
  public string $message;
  public string $resource_type;
}

class ResourceUnavailableException {
  public string $message;
  public string $resource_type;
}

class Rfc3339TimeString {
}

class RuleTypeOption {
}

class SecurityGroupIds {
}

class ShareStatus {
}

class StatusMessage {
}

class String {
}

class SubnetId {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TargetAddress {
  public Ip $ip;
  public Port $port;
}

class TargetList {
}

class ThrottlingException {
  public ExceptionMessage $message;
}

class UnknownResourceException {
  public ExceptionMessage $message;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateResolverEndpointRequest {
  public Name $name;
  public ResourceId $resolver_endpoint_id;
}

class UpdateResolverEndpointResponse {
  public ResolverEndpoint $resolver_endpoint;
}

class UpdateResolverRuleRequest {
  public ResolverRuleConfig $config;
  public ResourceId $resolver_rule_id;
}

class UpdateResolverRuleResponse {
  public ResolverRule $resolver_rule;
}

