<?hh // strict
namespace slack\aws\elasticloadbalancing;

interface Elastic Load Balancing v2 {
  public function AddListenerCertificates(AddListenerCertificatesInput) Awaitable<Errors\Result<AddListenerCertificatesOutput>>;
  public function DescribeAccountLimits(DescribeAccountLimitsInput) Awaitable<Errors\Result<DescribeAccountLimitsOutput>>;
  public function ModifyLoadBalancerAttributes(ModifyLoadBalancerAttributesInput) Awaitable<Errors\Result<ModifyLoadBalancerAttributesOutput>>;
  public function RegisterTargets(RegisterTargetsInput) Awaitable<Errors\Result<RegisterTargetsOutput>>;
  public function RemoveTags(RemoveTagsInput) Awaitable<Errors\Result<RemoveTagsOutput>>;
  public function SetIpAddressType(SetIpAddressTypeInput) Awaitable<Errors\Result<SetIpAddressTypeOutput>>;
  public function SetSecurityGroups(SetSecurityGroupsInput) Awaitable<Errors\Result<SetSecurityGroupsOutput>>;
  public function DeleteRule(DeleteRuleInput) Awaitable<Errors\Result<DeleteRuleOutput>>;
  public function DescribeListeners(DescribeListenersInput) Awaitable<Errors\Result<DescribeListenersOutput>>;
  public function DescribeSSLPolicies(DescribeSSLPoliciesInput) Awaitable<Errors\Result<DescribeSSLPoliciesOutput>>;
  public function DescribeTargetGroupAttributes(DescribeTargetGroupAttributesInput) Awaitable<Errors\Result<DescribeTargetGroupAttributesOutput>>;
  public function DescribeRules(DescribeRulesInput) Awaitable<Errors\Result<DescribeRulesOutput>>;
  public function DescribeTags(DescribeTagsInput) Awaitable<Errors\Result<DescribeTagsOutput>>;
  public function SetSubnets(SetSubnetsInput) Awaitable<Errors\Result<SetSubnetsOutput>>;
  public function DeleteListener(DeleteListenerInput) Awaitable<Errors\Result<DeleteListenerOutput>>;
  public function DeleteLoadBalancer(DeleteLoadBalancerInput) Awaitable<Errors\Result<DeleteLoadBalancerOutput>>;
  public function DescribeTargetGroups(DescribeTargetGroupsInput) Awaitable<Errors\Result<DescribeTargetGroupsOutput>>;
  public function ModifyRule(ModifyRuleInput) Awaitable<Errors\Result<ModifyRuleOutput>>;
  public function ModifyTargetGroup(ModifyTargetGroupInput) Awaitable<Errors\Result<ModifyTargetGroupOutput>>;
  public function ModifyTargetGroupAttributes(ModifyTargetGroupAttributesInput) Awaitable<Errors\Result<ModifyTargetGroupAttributesOutput>>;
  public function AddTags(AddTagsInput) Awaitable<Errors\Result<AddTagsOutput>>;
  public function CreateRule(CreateRuleInput) Awaitable<Errors\Result<CreateRuleOutput>>;
  public function DescribeLoadBalancerAttributes(DescribeLoadBalancerAttributesInput) Awaitable<Errors\Result<DescribeLoadBalancerAttributesOutput>>;
  public function ModifyListener(ModifyListenerInput) Awaitable<Errors\Result<ModifyListenerOutput>>;
  public function DeregisterTargets(DeregisterTargetsInput) Awaitable<Errors\Result<DeregisterTargetsOutput>>;
  public function DescribeTargetHealth(DescribeTargetHealthInput) Awaitable<Errors\Result<DescribeTargetHealthOutput>>;
  public function CreateListener(CreateListenerInput) Awaitable<Errors\Result<CreateListenerOutput>>;
  public function DescribeListenerCertificates(DescribeListenerCertificatesInput) Awaitable<Errors\Result<DescribeListenerCertificatesOutput>>;
  public function DescribeLoadBalancers(DescribeLoadBalancersInput) Awaitable<Errors\Result<DescribeLoadBalancersOutput>>;
  public function SetRulePriorities(SetRulePrioritiesInput) Awaitable<Errors\Result<SetRulePrioritiesOutput>>;
  public function CreateLoadBalancer(CreateLoadBalancerInput) Awaitable<Errors\Result<CreateLoadBalancerOutput>>;
  public function CreateTargetGroup(CreateTargetGroupInput) Awaitable<Errors\Result<CreateTargetGroupOutput>>;
  public function DeleteTargetGroup(DeleteTargetGroupInput) Awaitable<Errors\Result<DeleteTargetGroupOutput>>;
  public function RemoveListenerCertificates(RemoveListenerCertificatesInput) Awaitable<Errors\Result<RemoveListenerCertificatesOutput>>;
}

class DeregisterTargetsInput {
  public TargetGroupArn $target_group_arn;
  public TargetDescriptions $targets;
}

class AddTagsInput {
  public ResourceArns $resource_arns;
  public TagList $tags;
}

class RedirectActionPath {
}

class CreateRuleInput {
  public Actions $actions;
  public ListenerArn $listener_arn;
  public RuleConditionList $conditions;
  public RulePriority $priority;
}

class DuplicateTargetGroupNameException {
}

class LoadBalancerAttributeValue {
}

class ModifyTargetGroupAttributesInput {
  public TargetGroupArn $target_group_arn;
  public TargetGroupAttributes $attributes;
}

class ResourceArns {
}

class RuleConditionList {
}

class TargetGroup {
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public HealthCheckThresholdCount $unhealthy_threshold_count;
  public Matcher $matcher;
  public LoadBalancerArns $load_balancer_arns;
  public ProtocolEnum $protocol;
  public Port $port;
  public ProtocolEnum $health_check_protocol;
  public HealthCheckThresholdCount $healthy_threshold_count;
  public TargetGroupArn $target_group_arn;
  public HealthCheckPort $health_check_port;
  public HealthCheckEnabled $health_check_enabled;
  public Path $health_check_path;
  public TargetTypeEnum $target_type;
  public TargetGroupName $target_group_name;
  public VpcId $vpc_id;
}

class AvailabilityZones {
}

class InvalidLoadBalancerActionException {
}

class LoadBalancerStateEnum {
}

class Marker {
}

class AuthenticateOidcActionConfig {
  public AuthenticateOidcActionScope $scope;
  public AuthenticateOidcActionUserInfoEndpoint $user_info_endpoint;
  public AuthenticateOidcActionClientId $client_id;
  public AuthenticateOidcActionClientSecret $client_secret;
  public AuthenticateOidcActionSessionCookieName $session_cookie_name;
  public AuthenticateOidcActionSessionTimeout $session_timeout;
  public AuthenticateOidcActionIssuer $issuer;
  public AuthenticateOidcActionAuthorizationEndpoint $authorization_endpoint;
  public AuthenticateOidcActionTokenEndpoint $token_endpoint;
  public AuthenticateOidcActionAuthenticationRequestExtraParams $authentication_request_extra_params;
  public AuthenticateOidcActionConditionalBehaviorEnum $on_unauthenticated_request;
  public AuthenticateOidcActionUseExistingClientSecret $use_existing_client_secret;
}

class IncompatibleProtocolsException {
}

class LoadBalancerNames {
}

class AuthenticateCognitoActionConfig {
  public AuthenticateCognitoActionUserPoolDomain $user_pool_domain;
  public AuthenticateCognitoActionSessionCookieName $session_cookie_name;
  public AuthenticateCognitoActionScope $scope;
  public AuthenticateCognitoActionSessionTimeout $session_timeout;
  public AuthenticateCognitoActionAuthenticationRequestExtraParams $authentication_request_extra_params;
  public AuthenticateCognitoActionConditionalBehaviorEnum $on_unauthenticated_request;
  public AuthenticateCognitoActionUserPoolArn $user_pool_arn;
  public AuthenticateCognitoActionUserPoolClientId $user_pool_client_id;
}

class DescribeTagsInput {
  public ResourceArns $resource_arns;
}

class DescribeTargetGroupsInput {
  public LoadBalancerArn $load_balancer_arn;
  public TargetGroupArns $target_group_arns;
  public TargetGroupNames $names;
  public Marker $marker;
  public PageSize $page_size;
}

class RegisterTargetsOutput {
}

class TargetGroupNames {
}

class TooManyRulesException {
}

class TooManyTagsException {
}

class DescribeLoadBalancerAttributesOutput {
  public LoadBalancerAttributes $attributes;
}

class AllocationIdNotFoundException {
}

class AvailabilityZone {
  public LoadBalancerAddresses $load_balancer_addresses;
  public ZoneName $zone_name;
  public SubnetId $subnet_id;
}

class ActionOrder {
}

class ModifyRuleInput {
  public RuleArn $rule_arn;
  public RuleConditionList $conditions;
  public Actions $actions;
}

class AvailabilityZoneNotSupportedException {
}

class CanonicalHostedZoneId {
}

class DescribeSSLPoliciesInput {
  public PageSize $page_size;
  public SslPolicyNames $names;
  public Marker $marker;
}

class FixedResponseActionContentType {
}

class LoadBalancerAttributes {
}

class LoadBalancerNotFoundException {
}

class ProtocolEnum {
}

class AuthenticateOidcActionAuthenticationRequestExtraParams {
}

class DeleteLoadBalancerOutput {
}

class TagValue {
}

class ActionTypeEnum {
}

class CertificateList {
}

class DeleteLoadBalancerInput {
  public LoadBalancerArn $load_balancer_arn;
}

class DescribeSSLPoliciesOutput {
  public SslPolicies $ssl_policies;
  public Marker $next_marker;
}

class DescribeTargetGroupAttributesOutput {
  public TargetGroupAttributes $attributes;
}

class ForwardActionConfig {
  public TargetGroupList $target_groups;
  public TargetGroupStickinessConfig $target_group_stickiness_config;
}

class Max {
}

class ModifyTargetGroupOutput {
  public TargetGroups $target_groups;
}

class TargetHealthReasonEnum {
}

class Default {
}

class Rule {
  public string $priority;
  public RuleConditionList $conditions;
  public Actions $actions;
  public IsDefault $is_default;
  public RuleArn $rule_arn;
}

class RulePriorityList {
}

class TooManyLoadBalancersException {
}

class AuthenticateOidcActionAuthorizationEndpoint {
}

class HealthCheckPort {
}

class DescribeLoadBalancersOutput {
  public LoadBalancers $load_balancers;
  public Marker $next_marker;
}

class TargetGroupNotFoundException {
}

class AllocationId {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class LoadBalancerArn {
}

class Ciphers {
}

class DescribeListenersOutput {
  public Listeners $listeners;
  public Marker $next_marker;
}

class LoadBalancerSchemeEnum {
}

class LoadBalancers {
}

class TargetGroupAttributeValue {
}

class Certificate {
  public CertificateArn $certificate_arn;
  public Default $is_default;
}

class IpAddress {
}

class InvalidTargetException {
}

class CertificateArn {
}

class ListOfString {
}

class SslPolicyName {
}

class AuthenticateOidcActionClientSecret {
}

class DNSName {
}

class SetSubnetsOutput {
  public AvailabilityZones $availability_zones;
}

class SubnetMappings {
}

class AuthenticateOidcActionScope {
}

class AuthenticateCognitoActionAuthenticationRequestParamName {
}

class DeleteListenerInput {
  public ListenerArn $listener_arn;
}

class DeregisterTargetsOutput {
}

class DescribeLoadBalancerAttributesInput {
  public LoadBalancerArn $load_balancer_arn;
}

class LoadBalancerAttribute {
  public LoadBalancerAttributeKey $key;
  public LoadBalancerAttributeValue $value;
}

class QueryStringKeyValuePairList {
}

class RuleCondition {
  public QueryStringConditionConfig $query_string_config;
  public HttpRequestMethodConditionConfig $http_request_method_config;
  public SourceIpConditionConfig $source_ip_config;
  public ConditionFieldName $field;
  public ListOfString $values;
  public HostHeaderConditionConfig $host_header_config;
  public PathPatternConditionConfig $path_pattern_config;
  public HttpHeaderConditionConfig $http_header_config;
}

class AddListenerCertificatesOutput {
  public CertificateList $certificates;
}

class RuleArns {
}

class Rules {
}

class SslProtocol {
}

class StringValue {
}

class TargetGroupArn {
}

class AuthenticateCognitoActionUserPoolArn {
}

class SubnetMapping {
  public SubnetId $subnet_id;
  public AllocationId $allocation_id;
  public PrivateIPv4Address $private_i_pv_4_address;
}

class TooManyCertificatesException {
}

class DeleteTargetGroupOutput {
}

class Description {
}

class ListenerNotFoundException {
}

class ModifyListenerOutput {
  public Listeners $listeners;
}

class DescribeRulesOutput {
  public Rules $rules;
  public Marker $next_marker;
}

class QueryStringKeyValuePair {
  public StringValue $key;
  public StringValue $value;
}

class TagDescription {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class ConditionFieldName {
}

class RedirectActionStatusCodeEnum {
}

class RulePriorityPair {
  public RuleArn $rule_arn;
  public RulePriority $priority;
}

class TagKey {
}

class TargetGroupStickinessEnabled {
}

class AuthenticateCognitoActionSessionTimeout {
}

class AuthenticateOidcActionUserInfoEndpoint {
}

class CipherName {
}

class HttpHeaderConditionConfig {
  public HttpHeaderConditionName $http_header_name;
  public ListOfString $values;
}

class LoadBalancerState {
  public LoadBalancerStateEnum $code;
  public StateReason $reason;
}

class ModifyLoadBalancerAttributesOutput {
  public LoadBalancerAttributes $attributes;
}

class SetIpAddressTypeOutput {
  public IpAddressType $ip_address_type;
}

class TargetHealthDescription {
  public TargetDescription $target;
  public HealthCheckPort $health_check_port;
  public TargetHealth $target_health;
}

class AuthenticateOidcActionAuthenticationRequestParamValue {
}

class DescribeAccountLimitsInput {
  public Marker $marker;
  public PageSize $page_size;
}

class Matcher {
  public HttpCode $http_code;
}

class SecurityGroups {
}

class TargetGroupAttributeKey {
}

class CreateListenerOutput {
  public Listeners $listeners;
}

class Listeners {
}

class TargetId {
}

class AddListenerCertificatesInput {
  public ListenerArn $listener_arn;
  public CertificateList $certificates;
}

class DescribeTagsOutput {
  public TagDescriptions $tag_descriptions;
}

class ModifyTargetGroupAttributesOutput {
  public TargetGroupAttributes $attributes;
}

class OperationNotPermittedException {
}

class Port {
}

class TagKeys {
}

class CreateTargetGroupOutput {
  public TargetGroups $target_groups;
}

class DescribeTargetGroupsOutput {
  public Marker $next_marker;
  public TargetGroups $target_groups;
}

class RedirectActionHost {
}

class TargetHealthStateEnum {
}

class Cipher {
  public CipherPriority $priority;
  public CipherName $name;
}

class DescribeListenersInput {
  public Marker $marker;
  public PageSize $page_size;
  public LoadBalancerArn $load_balancer_arn;
  public ListenerArns $listener_arns;
}

class SetIpAddressTypeInput {
  public LoadBalancerArn $load_balancer_arn;
  public IpAddressType $ip_address_type;
}

class TargetGroups {
}

class AuthenticateCognitoActionUserPoolDomain {
}

class Limits {
}

class CreateLoadBalancerInput {
  public TagList $tags;
  public LoadBalancerTypeEnum $type;
  public IpAddressType $ip_address_type;
  public LoadBalancerName $name;
  public Subnets $subnets;
  public SubnetMappings $subnet_mappings;
  public SecurityGroups $security_groups;
  public LoadBalancerSchemeEnum $scheme;
}

class DescribeLoadBalancersInput {
  public LoadBalancerArns $load_balancer_arns;
  public LoadBalancerNames $names;
  public Marker $marker;
  public PageSize $page_size;
}

class PathPatternConditionConfig {
  public ListOfString $values;
}

class SourceIpConditionConfig {
  public ListOfString $values;
}

class SubnetNotFoundException {
}

class TooManyTargetGroupsException {
}

class ZoneName {
}

class AuthenticateOidcActionClientId {
}

class LoadBalancerArns {
}

class RemoveTagsInput {
  public TagKeys $tag_keys;
  public ResourceArns $resource_arns;
}

class TargetHealthDescriptions {
}

class CertificateNotFoundException {
}

class DescribeTargetHealthOutput {
  public TargetHealthDescriptions $target_health_descriptions;
}

class LoadBalancerTypeEnum {
}

class SecurityGroupId {
}

class DescribeAccountLimitsOutput {
  public Limits $limits;
  public Marker $next_marker;
}

class LoadBalancerAddresses {
}

class TargetGroupAttribute {
  public TargetGroupAttributeKey $key;
  public TargetGroupAttributeValue $value;
}

class TooManyListenersException {
}

class VpcId {
}

class InvalidSubnetException {
}

class HostHeaderConditionConfig {
  public ListOfString $values;
}

class Limit {
  public Name $name;
  public Max $max;
}

class RedirectActionConfig {
  public RedirectActionPath $path;
  public RedirectActionQuery $query;
  public RedirectActionStatusCodeEnum $status_code;
  public RedirectActionProtocol $protocol;
  public RedirectActionPort $port;
  public RedirectActionHost $host;
}

class RedirectActionPort {
}

class SSLPolicyNotFoundException {
}

class FixedResponseActionStatusCode {
}

class SubnetId {
}

class TagList {
}

class TargetGroupWeight {
}

class HttpHeaderConditionName {
}

class ListenerArn {
}

class PrivateIPv4Address {
}

class RedirectActionQuery {
}

class TargetTypeEnum {
}

class AddTagsOutput {
}

class AuthenticateCognitoActionUserPoolClientId {
}

class AuthenticateOidcActionAuthenticationRequestParamName {
}

class CreateRuleOutput {
  public Rules $rules;
}

class FixedResponseActionConfig {
  public FixedResponseActionMessage $message_body;
  public FixedResponseActionStatusCode $status_code;
  public FixedResponseActionContentType $content_type;
}

class HealthCheckTimeoutSeconds {
}

class ModifyListenerInput {
  public Port $port;
  public ProtocolEnum $protocol;
  public SslPolicyName $ssl_policy;
  public CertificateList $certificates;
  public Actions $default_actions;
  public ListenerArn $listener_arn;
}

class ModifyLoadBalancerAttributesInput {
  public LoadBalancerAttributes $attributes;
  public LoadBalancerArn $load_balancer_arn;
}

class AuthenticateCognitoActionConditionalBehaviorEnum {
}

class TargetHealth {
  public TargetHealthStateEnum $state;
  public TargetHealthReasonEnum $reason;
  public Description $description;
}

class TargetDescription {
  public Port $port;
  public ZoneName $availability_zone;
  public TargetId $id;
}

class CreatedTime {
}

class DuplicateListenerException {
}

class ListenerArns {
}

class TargetGroupList {
}

class TooManyActionsException {
}

class AuthenticateCognitoActionScope {
}

class DeleteRuleInput {
  public RuleArn $rule_arn;
}

class DeleteRuleOutput {
}

class Path {
}

class TargetGroupTuple {
  public TargetGroupArn $target_group_arn;
  public TargetGroupWeight $weight;
}

class CipherPriority {
}

class ModifyTargetGroupInput {
  public HealthCheckThresholdCount $unhealthy_threshold_count;
  public TargetGroupArn $target_group_arn;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public Path $health_check_path;
  public HealthCheckEnabled $health_check_enabled;
  public HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public HealthCheckThresholdCount $healthy_threshold_count;
  public Matcher $matcher;
  public ProtocolEnum $health_check_protocol;
  public HealthCheckPort $health_check_port;
}

class RemoveListenerCertificatesOutput {
}

class SetSecurityGroupsInput {
  public LoadBalancerArn $load_balancer_arn;
  public SecurityGroups $security_groups;
}

class HealthCheckEnabled {
}

class ModifyRuleOutput {
  public Rules $rules;
}

class TargetDescriptions {
}

class TooManyTargetsException {
}

class IsDefault {
}

class TooManyUniqueTargetGroupsPerLoadBalancerException {
}

class Name {
}

class HttpCode {
}

class PriorityInUseException {
}

class SslPolicy {
  public SslProtocols $ssl_protocols;
  public Ciphers $ciphers;
  public SslPolicyName $name;
}

class String {
}

class AuthenticateCognitoActionAuthenticationRequestParamValue {
}

class DescribeListenerCertificatesInput {
  public ListenerArn $listener_arn;
  public Marker $marker;
  public PageSize $page_size;
}

class HealthUnavailableException {
}

class HttpRequestMethodConditionConfig {
  public ListOfString $values;
}

class RuleNotFoundException {
}

class SslProtocols {
}

class CreateTargetGroupInput {
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public ProtocolEnum $health_check_protocol;
  public HealthCheckEnabled $health_check_enabled;
  public Path $health_check_path;
  public HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public HealthCheckThresholdCount $healthy_threshold_count;
  public HealthCheckThresholdCount $unhealthy_threshold_count;
  public TargetTypeEnum $target_type;
  public VpcId $vpc_id;
  public HealthCheckPort $health_check_port;
  public Matcher $matcher;
  public TargetGroupName $name;
  public ProtocolEnum $protocol;
  public Port $port;
}

class LoadBalancerAttributeKey {
}

class ResourceInUseException {
}

class TargetGroupArns {
}

class Actions {
}

class FixedResponseActionMessage {
}

class SetSecurityGroupsOutput {
  public SecurityGroups $security_group_ids;
}

class TargetGroupAssociationLimitException {
}

class DuplicateLoadBalancerNameException {
}

class AuthenticateOidcActionIssuer {
}

class AuthenticateCognitoActionSessionCookieName {
}

class LoadBalancerAddress {
  public IpAddress $ip_address;
  public AllocationId $allocation_id;
  public PrivateIPv4Address $private_i_pv_4_address;
}

class AuthenticateOidcActionConditionalBehaviorEnum {
}

class StateReason {
}

class TargetGroupStickinessConfig {
  public TargetGroupStickinessEnabled $enabled;
  public TargetGroupStickinessDurationSeconds $duration_seconds;
}

class RedirectActionProtocol {
}

class AuthenticateOidcActionSessionTimeout {
}

class DescribeListenerCertificatesOutput {
  public CertificateList $certificates;
  public Marker $next_marker;
}

class HealthCheckIntervalSeconds {
}

class InvalidSchemeException {
}

class IpAddressType {
}

class RemoveListenerCertificatesInput {
  public ListenerArn $listener_arn;
  public CertificateList $certificates;
}

class SetRulePrioritiesOutput {
  public Rules $rules;
}

class AuthenticateCognitoActionAuthenticationRequestExtraParams {
}

class InvalidSecurityGroupException {
}

class RuleArn {
}

class SslPolicyNames {
}

class Subnets {
}

class AuthenticateOidcActionUseExistingClientSecret {
}

class HealthCheckThresholdCount {
}

class QueryStringConditionConfig {
  public QueryStringKeyValuePairList $values;
}

class RegisterTargetsInput {
  public TargetGroupArn $target_group_arn;
  public TargetDescriptions $targets;
}

class RemoveTagsOutput {
}

class SetSubnetsInput {
  public Subnets $subnets;
  public SubnetMappings $subnet_mappings;
  public LoadBalancerArn $load_balancer_arn;
}

class TargetGroupAttributes {
}

class UnsupportedProtocolException {
}

class AuthenticateOidcActionTokenEndpoint {
}

class Listener {
  public ListenerArn $listener_arn;
  public LoadBalancerArn $load_balancer_arn;
  public Port $port;
  public ProtocolEnum $protocol;
  public CertificateList $certificates;
  public SslPolicyName $ssl_policy;
  public Actions $default_actions;
}

class SetRulePrioritiesInput {
  public RulePriorityList $rule_priorities;
}

class Action {
  public TargetGroupArn $target_group_arn;
  public AuthenticateOidcActionConfig $authenticate_oidc_config;
  public AuthenticateCognitoActionConfig $authenticate_cognito_config;
  public ActionOrder $order;
  public RedirectActionConfig $redirect_config;
  public FixedResponseActionConfig $fixed_response_config;
  public ForwardActionConfig $forward_config;
  public ActionTypeEnum $type;
}

class CreateListenerInput {
  public ProtocolEnum $protocol;
  public Port $port;
  public SslPolicyName $ssl_policy;
  public CertificateList $certificates;
  public Actions $default_actions;
  public LoadBalancerArn $load_balancer_arn;
}

class DeleteTargetGroupInput {
  public TargetGroupArn $target_group_arn;
}

class LoadBalancerName {
}

class PageSize {
}

class AuthenticateOidcActionSessionCookieName {
}

class DescribeTargetHealthInput {
  public TargetDescriptions $targets;
  public TargetGroupArn $target_group_arn;
}

class InvalidConfigurationRequestException {
}

class TagDescriptions {
}

class TooManyRegistrationsForTargetIdException {
}

class CreateLoadBalancerOutput {
  public LoadBalancers $load_balancers;
}

class TargetGroupName {
}

class RulePriority {
}

class DuplicateTagKeysException {
}

class SslPolicies {
}

class TargetGroupStickinessDurationSeconds {
}

class DeleteListenerOutput {
}

class DescribeTargetGroupAttributesInput {
  public TargetGroupArn $target_group_arn;
}

class LoadBalancer {
  public LoadBalancerArn $load_balancer_arn;
  public DNSName $dns_name;
  public LoadBalancerState $state;
  public LoadBalancerTypeEnum $type;
  public AvailabilityZones $availability_zones;
  public IpAddressType $ip_address_type;
  public CanonicalHostedZoneId $canonical_hosted_zone_id;
  public CreatedTime $created_time;
  public LoadBalancerName $load_balancer_name;
  public LoadBalancerSchemeEnum $scheme;
  public VpcId $vpc_id;
  public SecurityGroups $security_groups;
}

class ResourceArn {
}

class DescribeRulesInput {
  public ListenerArn $listener_arn;
  public RuleArns $rule_arns;
  public Marker $marker;
  public PageSize $page_size;
}

