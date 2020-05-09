<?hh // strict
namespace slack\aws\elasticloadbalancing;

interface Elastic Load Balancing v2 {
  public function AddListenerCertificates(AddListenerCertificatesInput): Awaitable<Errors\Result<AddListenerCertificatesOutput>>;
  public function AddTags(AddTagsInput): Awaitable<Errors\Result<AddTagsOutput>>;
  public function CreateListener(CreateListenerInput): Awaitable<Errors\Result<CreateListenerOutput>>;
  public function CreateLoadBalancer(CreateLoadBalancerInput): Awaitable<Errors\Result<CreateLoadBalancerOutput>>;
  public function CreateRule(CreateRuleInput): Awaitable<Errors\Result<CreateRuleOutput>>;
  public function CreateTargetGroup(CreateTargetGroupInput): Awaitable<Errors\Result<CreateTargetGroupOutput>>;
  public function DeleteListener(DeleteListenerInput): Awaitable<Errors\Result<DeleteListenerOutput>>;
  public function DeleteLoadBalancer(DeleteLoadBalancerInput): Awaitable<Errors\Result<DeleteLoadBalancerOutput>>;
  public function DeleteRule(DeleteRuleInput): Awaitable<Errors\Result<DeleteRuleOutput>>;
  public function DeleteTargetGroup(DeleteTargetGroupInput): Awaitable<Errors\Result<DeleteTargetGroupOutput>>;
  public function DeregisterTargets(DeregisterTargetsInput): Awaitable<Errors\Result<DeregisterTargetsOutput>>;
  public function DescribeAccountLimits(DescribeAccountLimitsInput): Awaitable<Errors\Result<DescribeAccountLimitsOutput>>;
  public function DescribeListenerCertificates(DescribeListenerCertificatesInput): Awaitable<Errors\Result<DescribeListenerCertificatesOutput>>;
  public function DescribeListeners(DescribeListenersInput): Awaitable<Errors\Result<DescribeListenersOutput>>;
  public function DescribeLoadBalancerAttributes(DescribeLoadBalancerAttributesInput): Awaitable<Errors\Result<DescribeLoadBalancerAttributesOutput>>;
  public function DescribeLoadBalancers(DescribeLoadBalancersInput): Awaitable<Errors\Result<DescribeLoadBalancersOutput>>;
  public function DescribeRules(DescribeRulesInput): Awaitable<Errors\Result<DescribeRulesOutput>>;
  public function DescribeSSLPolicies(DescribeSSLPoliciesInput): Awaitable<Errors\Result<DescribeSSLPoliciesOutput>>;
  public function DescribeTags(DescribeTagsInput): Awaitable<Errors\Result<DescribeTagsOutput>>;
  public function DescribeTargetGroupAttributes(DescribeTargetGroupAttributesInput): Awaitable<Errors\Result<DescribeTargetGroupAttributesOutput>>;
  public function DescribeTargetGroups(DescribeTargetGroupsInput): Awaitable<Errors\Result<DescribeTargetGroupsOutput>>;
  public function DescribeTargetHealth(DescribeTargetHealthInput): Awaitable<Errors\Result<DescribeTargetHealthOutput>>;
  public function ModifyListener(ModifyListenerInput): Awaitable<Errors\Result<ModifyListenerOutput>>;
  public function ModifyLoadBalancerAttributes(ModifyLoadBalancerAttributesInput): Awaitable<Errors\Result<ModifyLoadBalancerAttributesOutput>>;
  public function ModifyRule(ModifyRuleInput): Awaitable<Errors\Result<ModifyRuleOutput>>;
  public function ModifyTargetGroup(ModifyTargetGroupInput): Awaitable<Errors\Result<ModifyTargetGroupOutput>>;
  public function ModifyTargetGroupAttributes(ModifyTargetGroupAttributesInput): Awaitable<Errors\Result<ModifyTargetGroupAttributesOutput>>;
  public function RegisterTargets(RegisterTargetsInput): Awaitable<Errors\Result<RegisterTargetsOutput>>;
  public function RemoveListenerCertificates(RemoveListenerCertificatesInput): Awaitable<Errors\Result<RemoveListenerCertificatesOutput>>;
  public function RemoveTags(RemoveTagsInput): Awaitable<Errors\Result<RemoveTagsOutput>>;
  public function SetIpAddressType(SetIpAddressTypeInput): Awaitable<Errors\Result<SetIpAddressTypeOutput>>;
  public function SetRulePriorities(SetRulePrioritiesInput): Awaitable<Errors\Result<SetRulePrioritiesOutput>>;
  public function SetSecurityGroups(SetSecurityGroupsInput): Awaitable<Errors\Result<SetSecurityGroupsOutput>>;
  public function SetSubnets(SetSubnetsInput): Awaitable<Errors\Result<SetSubnetsOutput>>;
}

class Action {
  public AuthenticateCognitoActionConfig $authenticate_cognito_config;
  public AuthenticateOidcActionConfig $authenticate_oidc_config;
  public FixedResponseActionConfig $fixed_response_config;
  public ForwardActionConfig $forward_config;
  public ActionOrder $order;
  public RedirectActionConfig $redirect_config;
  public TargetGroupArn $target_group_arn;
  public ActionTypeEnum $type;
}

class ActionOrder {
}

class ActionTypeEnum {
}

class Actions {
}

class AddListenerCertificatesInput {
  public CertificateList $certificates;
  public ListenerArn $listener_arn;
}

class AddListenerCertificatesOutput {
  public CertificateList $certificates;
}

class AddTagsInput {
  public ResourceArns $resource_arns;
  public TagList $tags;
}

class AddTagsOutput {
}

class AllocationId {
}

class AllocationIdNotFoundException {
}

class AuthenticateCognitoActionAuthenticationRequestExtraParams {
}

class AuthenticateCognitoActionAuthenticationRequestParamName {
}

class AuthenticateCognitoActionAuthenticationRequestParamValue {
}

class AuthenticateCognitoActionConditionalBehaviorEnum {
}

class AuthenticateCognitoActionConfig {
  public AuthenticateCognitoActionAuthenticationRequestExtraParams $authentication_request_extra_params;
  public AuthenticateCognitoActionConditionalBehaviorEnum $on_unauthenticated_request;
  public AuthenticateCognitoActionScope $scope;
  public AuthenticateCognitoActionSessionCookieName $session_cookie_name;
  public AuthenticateCognitoActionSessionTimeout $session_timeout;
  public AuthenticateCognitoActionUserPoolArn $user_pool_arn;
  public AuthenticateCognitoActionUserPoolClientId $user_pool_client_id;
  public AuthenticateCognitoActionUserPoolDomain $user_pool_domain;
}

class AuthenticateCognitoActionScope {
}

class AuthenticateCognitoActionSessionCookieName {
}

class AuthenticateCognitoActionSessionTimeout {
}

class AuthenticateCognitoActionUserPoolArn {
}

class AuthenticateCognitoActionUserPoolClientId {
}

class AuthenticateCognitoActionUserPoolDomain {
}

class AuthenticateOidcActionAuthenticationRequestExtraParams {
}

class AuthenticateOidcActionAuthenticationRequestParamName {
}

class AuthenticateOidcActionAuthenticationRequestParamValue {
}

class AuthenticateOidcActionAuthorizationEndpoint {
}

class AuthenticateOidcActionClientId {
}

class AuthenticateOidcActionClientSecret {
}

class AuthenticateOidcActionConditionalBehaviorEnum {
}

class AuthenticateOidcActionConfig {
  public AuthenticateOidcActionAuthenticationRequestExtraParams $authentication_request_extra_params;
  public AuthenticateOidcActionAuthorizationEndpoint $authorization_endpoint;
  public AuthenticateOidcActionClientId $client_id;
  public AuthenticateOidcActionClientSecret $client_secret;
  public AuthenticateOidcActionIssuer $issuer;
  public AuthenticateOidcActionConditionalBehaviorEnum $on_unauthenticated_request;
  public AuthenticateOidcActionScope $scope;
  public AuthenticateOidcActionSessionCookieName $session_cookie_name;
  public AuthenticateOidcActionSessionTimeout $session_timeout;
  public AuthenticateOidcActionTokenEndpoint $token_endpoint;
  public AuthenticateOidcActionUseExistingClientSecret $use_existing_client_secret;
  public AuthenticateOidcActionUserInfoEndpoint $user_info_endpoint;
}

class AuthenticateOidcActionIssuer {
}

class AuthenticateOidcActionScope {
}

class AuthenticateOidcActionSessionCookieName {
}

class AuthenticateOidcActionSessionTimeout {
}

class AuthenticateOidcActionTokenEndpoint {
}

class AuthenticateOidcActionUseExistingClientSecret {
}

class AuthenticateOidcActionUserInfoEndpoint {
}

class AvailabilityZone {
  public LoadBalancerAddresses $load_balancer_addresses;
  public SubnetId $subnet_id;
  public ZoneName $zone_name;
}

class AvailabilityZoneNotSupportedException {
}

class AvailabilityZones {
}

class CanonicalHostedZoneId {
}

class Certificate {
  public CertificateArn $certificate_arn;
  public Default $is_default;
}

class CertificateArn {
}

class CertificateList {
}

class CertificateNotFoundException {
}

class Cipher {
  public CipherName $name;
  public CipherPriority $priority;
}

class CipherName {
}

class CipherPriority {
}

class Ciphers {
}

class ConditionFieldName {
}

class CreateListenerInput {
  public CertificateList $certificates;
  public Actions $default_actions;
  public LoadBalancerArn $load_balancer_arn;
  public Port $port;
  public ProtocolEnum $protocol;
  public SslPolicyName $ssl_policy;
}

class CreateListenerOutput {
  public Listeners $listeners;
}

class CreateLoadBalancerInput {
  public IpAddressType $ip_address_type;
  public LoadBalancerName $name;
  public LoadBalancerSchemeEnum $scheme;
  public SecurityGroups $security_groups;
  public SubnetMappings $subnet_mappings;
  public Subnets $subnets;
  public TagList $tags;
  public LoadBalancerTypeEnum $type;
}

class CreateLoadBalancerOutput {
  public LoadBalancers $load_balancers;
}

class CreateRuleInput {
  public Actions $actions;
  public RuleConditionList $conditions;
  public ListenerArn $listener_arn;
  public RulePriority $priority;
}

class CreateRuleOutput {
  public Rules $rules;
}

class CreateTargetGroupInput {
  public HealthCheckEnabled $health_check_enabled;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public Path $health_check_path;
  public HealthCheckPort $health_check_port;
  public ProtocolEnum $health_check_protocol;
  public HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public HealthCheckThresholdCount $healthy_threshold_count;
  public Matcher $matcher;
  public TargetGroupName $name;
  public Port $port;
  public ProtocolEnum $protocol;
  public TargetTypeEnum $target_type;
  public HealthCheckThresholdCount $unhealthy_threshold_count;
  public VpcId $vpc_id;
}

class CreateTargetGroupOutput {
  public TargetGroups $target_groups;
}

class CreatedTime {
}

class DNSName {
}

class Default {
}

class DeleteListenerInput {
  public ListenerArn $listener_arn;
}

class DeleteListenerOutput {
}

class DeleteLoadBalancerInput {
  public LoadBalancerArn $load_balancer_arn;
}

class DeleteLoadBalancerOutput {
}

class DeleteRuleInput {
  public RuleArn $rule_arn;
}

class DeleteRuleOutput {
}

class DeleteTargetGroupInput {
  public TargetGroupArn $target_group_arn;
}

class DeleteTargetGroupOutput {
}

class DeregisterTargetsInput {
  public TargetGroupArn $target_group_arn;
  public TargetDescriptions $targets;
}

class DeregisterTargetsOutput {
}

class DescribeAccountLimitsInput {
  public Marker $marker;
  public PageSize $page_size;
}

class DescribeAccountLimitsOutput {
  public Limits $limits;
  public Marker $next_marker;
}

class DescribeListenerCertificatesInput {
  public ListenerArn $listener_arn;
  public Marker $marker;
  public PageSize $page_size;
}

class DescribeListenerCertificatesOutput {
  public CertificateList $certificates;
  public Marker $next_marker;
}

class DescribeListenersInput {
  public ListenerArns $listener_arns;
  public LoadBalancerArn $load_balancer_arn;
  public Marker $marker;
  public PageSize $page_size;
}

class DescribeListenersOutput {
  public Listeners $listeners;
  public Marker $next_marker;
}

class DescribeLoadBalancerAttributesInput {
  public LoadBalancerArn $load_balancer_arn;
}

class DescribeLoadBalancerAttributesOutput {
  public LoadBalancerAttributes $attributes;
}

class DescribeLoadBalancersInput {
  public LoadBalancerArns $load_balancer_arns;
  public Marker $marker;
  public LoadBalancerNames $names;
  public PageSize $page_size;
}

class DescribeLoadBalancersOutput {
  public LoadBalancers $load_balancers;
  public Marker $next_marker;
}

class DescribeRulesInput {
  public ListenerArn $listener_arn;
  public Marker $marker;
  public PageSize $page_size;
  public RuleArns $rule_arns;
}

class DescribeRulesOutput {
  public Marker $next_marker;
  public Rules $rules;
}

class DescribeSSLPoliciesInput {
  public Marker $marker;
  public SslPolicyNames $names;
  public PageSize $page_size;
}

class DescribeSSLPoliciesOutput {
  public Marker $next_marker;
  public SslPolicies $ssl_policies;
}

class DescribeTagsInput {
  public ResourceArns $resource_arns;
}

class DescribeTagsOutput {
  public TagDescriptions $tag_descriptions;
}

class DescribeTargetGroupAttributesInput {
  public TargetGroupArn $target_group_arn;
}

class DescribeTargetGroupAttributesOutput {
  public TargetGroupAttributes $attributes;
}

class DescribeTargetGroupsInput {
  public LoadBalancerArn $load_balancer_arn;
  public Marker $marker;
  public TargetGroupNames $names;
  public PageSize $page_size;
  public TargetGroupArns $target_group_arns;
}

class DescribeTargetGroupsOutput {
  public Marker $next_marker;
  public TargetGroups $target_groups;
}

class DescribeTargetHealthInput {
  public TargetGroupArn $target_group_arn;
  public TargetDescriptions $targets;
}

class DescribeTargetHealthOutput {
  public TargetHealthDescriptions $target_health_descriptions;
}

class Description {
}

class DuplicateListenerException {
}

class DuplicateLoadBalancerNameException {
}

class DuplicateTagKeysException {
}

class DuplicateTargetGroupNameException {
}

class FixedResponseActionConfig {
  public FixedResponseActionContentType $content_type;
  public FixedResponseActionMessage $message_body;
  public FixedResponseActionStatusCode $status_code;
}

class FixedResponseActionContentType {
}

class FixedResponseActionMessage {
}

class FixedResponseActionStatusCode {
}

class ForwardActionConfig {
  public TargetGroupStickinessConfig $target_group_stickiness_config;
  public TargetGroupList $target_groups;
}

class HealthCheckEnabled {
}

class HealthCheckIntervalSeconds {
}

class HealthCheckPort {
}

class HealthCheckThresholdCount {
}

class HealthCheckTimeoutSeconds {
}

class HealthUnavailableException {
}

class HostHeaderConditionConfig {
  public ListOfString $values;
}

class HttpCode {
}

class HttpHeaderConditionConfig {
  public HttpHeaderConditionName $http_header_name;
  public ListOfString $values;
}

class HttpHeaderConditionName {
}

class HttpRequestMethodConditionConfig {
  public ListOfString $values;
}

class IncompatibleProtocolsException {
}

class InvalidConfigurationRequestException {
}

class InvalidLoadBalancerActionException {
}

class InvalidSchemeException {
}

class InvalidSecurityGroupException {
}

class InvalidSubnetException {
}

class InvalidTargetException {
}

class IpAddress {
}

class IpAddressType {
}

class IsDefault {
}

class Limit {
  public Max $max;
  public Name $name;
}

class Limits {
}

class ListOfString {
}

class Listener {
  public CertificateList $certificates;
  public Actions $default_actions;
  public ListenerArn $listener_arn;
  public LoadBalancerArn $load_balancer_arn;
  public Port $port;
  public ProtocolEnum $protocol;
  public SslPolicyName $ssl_policy;
}

class ListenerArn {
}

class ListenerArns {
}

class ListenerNotFoundException {
}

class Listeners {
}

class LoadBalancer {
  public AvailabilityZones $availability_zones;
  public CanonicalHostedZoneId $canonical_hosted_zone_id;
  public CreatedTime $created_time;
  public DNSName $dns_name;
  public IpAddressType $ip_address_type;
  public LoadBalancerArn $load_balancer_arn;
  public LoadBalancerName $load_balancer_name;
  public LoadBalancerSchemeEnum $scheme;
  public SecurityGroups $security_groups;
  public LoadBalancerState $state;
  public LoadBalancerTypeEnum $type;
  public VpcId $vpc_id;
}

class LoadBalancerAddress {
  public AllocationId $allocation_id;
  public IpAddress $ip_address;
  public PrivateIPv4Address $private_i_pv_4_address;
}

class LoadBalancerAddresses {
}

class LoadBalancerArn {
}

class LoadBalancerArns {
}

class LoadBalancerAttribute {
  public LoadBalancerAttributeKey $key;
  public LoadBalancerAttributeValue $value;
}

class LoadBalancerAttributeKey {
}

class LoadBalancerAttributeValue {
}

class LoadBalancerAttributes {
}

class LoadBalancerName {
}

class LoadBalancerNames {
}

class LoadBalancerNotFoundException {
}

class LoadBalancerSchemeEnum {
}

class LoadBalancerState {
  public LoadBalancerStateEnum $code;
  public StateReason $reason;
}

class LoadBalancerStateEnum {
}

class LoadBalancerTypeEnum {
}

class LoadBalancers {
}

class Marker {
}

class Matcher {
  public HttpCode $http_code;
}

class Max {
}

class ModifyListenerInput {
  public CertificateList $certificates;
  public Actions $default_actions;
  public ListenerArn $listener_arn;
  public Port $port;
  public ProtocolEnum $protocol;
  public SslPolicyName $ssl_policy;
}

class ModifyListenerOutput {
  public Listeners $listeners;
}

class ModifyLoadBalancerAttributesInput {
  public LoadBalancerAttributes $attributes;
  public LoadBalancerArn $load_balancer_arn;
}

class ModifyLoadBalancerAttributesOutput {
  public LoadBalancerAttributes $attributes;
}

class ModifyRuleInput {
  public Actions $actions;
  public RuleConditionList $conditions;
  public RuleArn $rule_arn;
}

class ModifyRuleOutput {
  public Rules $rules;
}

class ModifyTargetGroupAttributesInput {
  public TargetGroupAttributes $attributes;
  public TargetGroupArn $target_group_arn;
}

class ModifyTargetGroupAttributesOutput {
  public TargetGroupAttributes $attributes;
}

class ModifyTargetGroupInput {
  public HealthCheckEnabled $health_check_enabled;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public Path $health_check_path;
  public HealthCheckPort $health_check_port;
  public ProtocolEnum $health_check_protocol;
  public HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public HealthCheckThresholdCount $healthy_threshold_count;
  public Matcher $matcher;
  public TargetGroupArn $target_group_arn;
  public HealthCheckThresholdCount $unhealthy_threshold_count;
}

class ModifyTargetGroupOutput {
  public TargetGroups $target_groups;
}

class Name {
}

class OperationNotPermittedException {
}

class PageSize {
}

class Path {
}

class PathPatternConditionConfig {
  public ListOfString $values;
}

class Port {
}

class PriorityInUseException {
}

class PrivateIPv4Address {
}

class ProtocolEnum {
}

class QueryStringConditionConfig {
  public QueryStringKeyValuePairList $values;
}

class QueryStringKeyValuePair {
  public StringValue $key;
  public StringValue $value;
}

class QueryStringKeyValuePairList {
}

class RedirectActionConfig {
  public RedirectActionHost $host;
  public RedirectActionPath $path;
  public RedirectActionPort $port;
  public RedirectActionProtocol $protocol;
  public RedirectActionQuery $query;
  public RedirectActionStatusCodeEnum $status_code;
}

class RedirectActionHost {
}

class RedirectActionPath {
}

class RedirectActionPort {
}

class RedirectActionProtocol {
}

class RedirectActionQuery {
}

class RedirectActionStatusCodeEnum {
}

class RegisterTargetsInput {
  public TargetGroupArn $target_group_arn;
  public TargetDescriptions $targets;
}

class RegisterTargetsOutput {
}

class RemoveListenerCertificatesInput {
  public CertificateList $certificates;
  public ListenerArn $listener_arn;
}

class RemoveListenerCertificatesOutput {
}

class RemoveTagsInput {
  public ResourceArns $resource_arns;
  public TagKeys $tag_keys;
}

class RemoveTagsOutput {
}

class ResourceArn {
}

class ResourceArns {
}

class ResourceInUseException {
}

class Rule {
  public Actions $actions;
  public RuleConditionList $conditions;
  public IsDefault $is_default;
  public string $priority;
  public RuleArn $rule_arn;
}

class RuleArn {
}

class RuleArns {
}

class RuleCondition {
  public ConditionFieldName $field;
  public HostHeaderConditionConfig $host_header_config;
  public HttpHeaderConditionConfig $http_header_config;
  public HttpRequestMethodConditionConfig $http_request_method_config;
  public PathPatternConditionConfig $path_pattern_config;
  public QueryStringConditionConfig $query_string_config;
  public SourceIpConditionConfig $source_ip_config;
  public ListOfString $values;
}

class RuleConditionList {
}

class RuleNotFoundException {
}

class RulePriority {
}

class RulePriorityList {
}

class RulePriorityPair {
  public RulePriority $priority;
  public RuleArn $rule_arn;
}

class Rules {
}

class SSLPolicyNotFoundException {
}

class SecurityGroupId {
}

class SecurityGroups {
}

class SetIpAddressTypeInput {
  public IpAddressType $ip_address_type;
  public LoadBalancerArn $load_balancer_arn;
}

class SetIpAddressTypeOutput {
  public IpAddressType $ip_address_type;
}

class SetRulePrioritiesInput {
  public RulePriorityList $rule_priorities;
}

class SetRulePrioritiesOutput {
  public Rules $rules;
}

class SetSecurityGroupsInput {
  public LoadBalancerArn $load_balancer_arn;
  public SecurityGroups $security_groups;
}

class SetSecurityGroupsOutput {
  public SecurityGroups $security_group_ids;
}

class SetSubnetsInput {
  public LoadBalancerArn $load_balancer_arn;
  public SubnetMappings $subnet_mappings;
  public Subnets $subnets;
}

class SetSubnetsOutput {
  public AvailabilityZones $availability_zones;
}

class SourceIpConditionConfig {
  public ListOfString $values;
}

class SslPolicies {
}

class SslPolicy {
  public Ciphers $ciphers;
  public SslPolicyName $name;
  public SslProtocols $ssl_protocols;
}

class SslPolicyName {
}

class SslPolicyNames {
}

class SslProtocol {
}

class SslProtocols {
}

class StateReason {
}

class String {
}

class StringValue {
}

class SubnetId {
}

class SubnetMapping {
  public AllocationId $allocation_id;
  public PrivateIPv4Address $private_i_pv_4_address;
  public SubnetId $subnet_id;
}

class SubnetMappings {
}

class SubnetNotFoundException {
}

class Subnets {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagDescription {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TagDescriptions {
}

class TagKey {
}

class TagKeys {
}

class TagList {
}

class TagValue {
}

class TargetDescription {
  public ZoneName $availability_zone;
  public TargetId $id;
  public Port $port;
}

class TargetDescriptions {
}

class TargetGroup {
  public HealthCheckEnabled $health_check_enabled;
  public HealthCheckIntervalSeconds $health_check_interval_seconds;
  public Path $health_check_path;
  public HealthCheckPort $health_check_port;
  public ProtocolEnum $health_check_protocol;
  public HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public HealthCheckThresholdCount $healthy_threshold_count;
  public LoadBalancerArns $load_balancer_arns;
  public Matcher $matcher;
  public Port $port;
  public ProtocolEnum $protocol;
  public TargetGroupArn $target_group_arn;
  public TargetGroupName $target_group_name;
  public TargetTypeEnum $target_type;
  public HealthCheckThresholdCount $unhealthy_threshold_count;
  public VpcId $vpc_id;
}

class TargetGroupArn {
}

class TargetGroupArns {
}

class TargetGroupAssociationLimitException {
}

class TargetGroupAttribute {
  public TargetGroupAttributeKey $key;
  public TargetGroupAttributeValue $value;
}

class TargetGroupAttributeKey {
}

class TargetGroupAttributeValue {
}

class TargetGroupAttributes {
}

class TargetGroupList {
}

class TargetGroupName {
}

class TargetGroupNames {
}

class TargetGroupNotFoundException {
}

class TargetGroupStickinessConfig {
  public TargetGroupStickinessDurationSeconds $duration_seconds;
  public TargetGroupStickinessEnabled $enabled;
}

class TargetGroupStickinessDurationSeconds {
}

class TargetGroupStickinessEnabled {
}

class TargetGroupTuple {
  public TargetGroupArn $target_group_arn;
  public TargetGroupWeight $weight;
}

class TargetGroupWeight {
}

class TargetGroups {
}

class TargetHealth {
  public Description $description;
  public TargetHealthReasonEnum $reason;
  public TargetHealthStateEnum $state;
}

class TargetHealthDescription {
  public HealthCheckPort $health_check_port;
  public TargetDescription $target;
  public TargetHealth $target_health;
}

class TargetHealthDescriptions {
}

class TargetHealthReasonEnum {
}

class TargetHealthStateEnum {
}

class TargetId {
}

class TargetTypeEnum {
}

class TooManyActionsException {
}

class TooManyCertificatesException {
}

class TooManyListenersException {
}

class TooManyLoadBalancersException {
}

class TooManyRegistrationsForTargetIdException {
}

class TooManyRulesException {
}

class TooManyTagsException {
}

class TooManyTargetGroupsException {
}

class TooManyTargetsException {
}

class TooManyUniqueTargetGroupsPerLoadBalancerException {
}

class UnsupportedProtocolException {
}

class VpcId {
}

class ZoneName {
}

