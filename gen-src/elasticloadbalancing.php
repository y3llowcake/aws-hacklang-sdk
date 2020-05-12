<?hh // strict
namespace slack\aws\elasticloadbalancing;

interface ElasticLoadBalancingv2 {
  public function AddListenerCertificates(AddListenerCertificatesInput $in): Awaitable<\Errors\Result<AddListenerCertificatesOutput>>;
  public function AddTags(AddTagsInput $in): Awaitable<\Errors\Result<AddTagsOutput>>;
  public function CreateListener(CreateListenerInput $in): Awaitable<\Errors\Result<CreateListenerOutput>>;
  public function CreateLoadBalancer(CreateLoadBalancerInput $in): Awaitable<\Errors\Result<CreateLoadBalancerOutput>>;
  public function CreateRule(CreateRuleInput $in): Awaitable<\Errors\Result<CreateRuleOutput>>;
  public function CreateTargetGroup(CreateTargetGroupInput $in): Awaitable<\Errors\Result<CreateTargetGroupOutput>>;
  public function DeleteListener(DeleteListenerInput $in): Awaitable<\Errors\Result<DeleteListenerOutput>>;
  public function DeleteLoadBalancer(DeleteLoadBalancerInput $in): Awaitable<\Errors\Result<DeleteLoadBalancerOutput>>;
  public function DeleteRule(DeleteRuleInput $in): Awaitable<\Errors\Result<DeleteRuleOutput>>;
  public function DeleteTargetGroup(DeleteTargetGroupInput $in): Awaitable<\Errors\Result<DeleteTargetGroupOutput>>;
  public function DeregisterTargets(DeregisterTargetsInput $in): Awaitable<\Errors\Result<DeregisterTargetsOutput>>;
  public function DescribeAccountLimits(DescribeAccountLimitsInput $in): Awaitable<\Errors\Result<DescribeAccountLimitsOutput>>;
  public function DescribeListenerCertificates(DescribeListenerCertificatesInput $in): Awaitable<\Errors\Result<DescribeListenerCertificatesOutput>>;
  public function DescribeListeners(DescribeListenersInput $in): Awaitable<\Errors\Result<DescribeListenersOutput>>;
  public function DescribeLoadBalancerAttributes(DescribeLoadBalancerAttributesInput $in): Awaitable<\Errors\Result<DescribeLoadBalancerAttributesOutput>>;
  public function DescribeLoadBalancers(DescribeLoadBalancersInput $in): Awaitable<\Errors\Result<DescribeLoadBalancersOutput>>;
  public function DescribeRules(DescribeRulesInput $in): Awaitable<\Errors\Result<DescribeRulesOutput>>;
  public function DescribeSSLPolicies(DescribeSSLPoliciesInput $in): Awaitable<\Errors\Result<DescribeSSLPoliciesOutput>>;
  public function DescribeTags(DescribeTagsInput $in): Awaitable<\Errors\Result<DescribeTagsOutput>>;
  public function DescribeTargetGroupAttributes(DescribeTargetGroupAttributesInput $in): Awaitable<\Errors\Result<DescribeTargetGroupAttributesOutput>>;
  public function DescribeTargetGroups(DescribeTargetGroupsInput $in): Awaitable<\Errors\Result<DescribeTargetGroupsOutput>>;
  public function DescribeTargetHealth(DescribeTargetHealthInput $in): Awaitable<\Errors\Result<DescribeTargetHealthOutput>>;
  public function ModifyListener(ModifyListenerInput $in): Awaitable<\Errors\Result<ModifyListenerOutput>>;
  public function ModifyLoadBalancerAttributes(ModifyLoadBalancerAttributesInput $in): Awaitable<\Errors\Result<ModifyLoadBalancerAttributesOutput>>;
  public function ModifyRule(ModifyRuleInput $in): Awaitable<\Errors\Result<ModifyRuleOutput>>;
  public function ModifyTargetGroup(ModifyTargetGroupInput $in): Awaitable<\Errors\Result<ModifyTargetGroupOutput>>;
  public function ModifyTargetGroupAttributes(ModifyTargetGroupAttributesInput $in): Awaitable<\Errors\Result<ModifyTargetGroupAttributesOutput>>;
  public function RegisterTargets(RegisterTargetsInput $in): Awaitable<\Errors\Result<RegisterTargetsOutput>>;
  public function RemoveListenerCertificates(RemoveListenerCertificatesInput $in): Awaitable<\Errors\Result<RemoveListenerCertificatesOutput>>;
  public function RemoveTags(RemoveTagsInput $in): Awaitable<\Errors\Result<RemoveTagsOutput>>;
  public function SetIpAddressType(SetIpAddressTypeInput $in): Awaitable<\Errors\Result<SetIpAddressTypeOutput>>;
  public function SetRulePriorities(SetRulePrioritiesInput $in): Awaitable<\Errors\Result<SetRulePrioritiesOutput>>;
  public function SetSecurityGroups(SetSecurityGroupsInput $in): Awaitable<\Errors\Result<SetSecurityGroupsOutput>>;
  public function SetSubnets(SetSubnetsInput $in): Awaitable<\Errors\Result<SetSubnetsOutput>>;
}

class Action {
  public ?AuthenticateCognitoActionConfig $authenticate_cognito_config;
  public ?AuthenticateOidcActionConfig $authenticate_oidc_config;
  public ?FixedResponseActionConfig $fixed_response_config;
  public ?ForwardActionConfig $forward_config;
  public ?ActionOrder $order;
  public ?RedirectActionConfig $redirect_config;
  public ?TargetGroupArn $target_group_arn;
  public ?ActionTypeEnum $type;

  public function __construct(shape(
    ?'authenticate_cognito_config' => ?AuthenticateCognitoActionConfig,
    ?'authenticate_oidc_config' => ?AuthenticateOidcActionConfig,
    ?'fixed_response_config' => ?FixedResponseActionConfig,
    ?'forward_config' => ?ForwardActionConfig,
    ?'order' => ?ActionOrder,
    ?'redirect_config' => ?RedirectActionConfig,
    ?'target_group_arn' => ?TargetGroupArn,
    ?'type' => ?ActionTypeEnum,
  ) $s = shape()) {
    $this->authenticate_cognito_config = $s['authenticate_cognito_config'] ?? null;
    $this->authenticate_oidc_config = $s['authenticate_oidc_config'] ?? null;
    $this->fixed_response_config = $s['fixed_response_config'] ?? null;
    $this->forward_config = $s['forward_config'] ?? null;
    $this->order = $s['order'] ?? 0;
    $this->redirect_config = $s['redirect_config'] ?? null;
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ActionOrder = int;

type ActionTypeEnum = string;

type Actions = vec<Action>;

class AddListenerCertificatesInput {
  public ?CertificateList $certificates;
  public ?ListenerArn $listener_arn;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
    ?'listener_arn' => ?ListenerArn,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->listener_arn = $s['listener_arn'] ?? '';
  }
}

class AddListenerCertificatesOutput {
  public ?CertificateList $certificates;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
  }
}

class AddTagsInput {
  public ?ResourceArns $resource_arns;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arns' => ?ResourceArns,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class AddTagsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AllocationId = string;

class AllocationIdNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AuthenticateCognitoActionAuthenticationRequestExtraParams = dict<AuthenticateCognitoActionAuthenticationRequestParamName, AuthenticateCognitoActionAuthenticationRequestParamValue>;

type AuthenticateCognitoActionAuthenticationRequestParamName = string;

type AuthenticateCognitoActionAuthenticationRequestParamValue = string;

type AuthenticateCognitoActionConditionalBehaviorEnum = string;

class AuthenticateCognitoActionConfig {
  public ?AuthenticateCognitoActionAuthenticationRequestExtraParams $authentication_request_extra_params;
  public ?AuthenticateCognitoActionConditionalBehaviorEnum $on_unauthenticated_request;
  public ?AuthenticateCognitoActionScope $scope;
  public ?AuthenticateCognitoActionSessionCookieName $session_cookie_name;
  public ?AuthenticateCognitoActionSessionTimeout $session_timeout;
  public ?AuthenticateCognitoActionUserPoolArn $user_pool_arn;
  public ?AuthenticateCognitoActionUserPoolClientId $user_pool_client_id;
  public ?AuthenticateCognitoActionUserPoolDomain $user_pool_domain;

  public function __construct(shape(
    ?'authentication_request_extra_params' => ?AuthenticateCognitoActionAuthenticationRequestExtraParams,
    ?'on_unauthenticated_request' => ?AuthenticateCognitoActionConditionalBehaviorEnum,
    ?'scope' => ?AuthenticateCognitoActionScope,
    ?'session_cookie_name' => ?AuthenticateCognitoActionSessionCookieName,
    ?'session_timeout' => ?AuthenticateCognitoActionSessionTimeout,
    ?'user_pool_arn' => ?AuthenticateCognitoActionUserPoolArn,
    ?'user_pool_client_id' => ?AuthenticateCognitoActionUserPoolClientId,
    ?'user_pool_domain' => ?AuthenticateCognitoActionUserPoolDomain,
  ) $s = shape()) {
    $this->authentication_request_extra_params = $s['authentication_request_extra_params'] ?? dict[];
    $this->on_unauthenticated_request = $s['on_unauthenticated_request'] ?? '';
    $this->scope = $s['scope'] ?? '';
    $this->session_cookie_name = $s['session_cookie_name'] ?? '';
    $this->session_timeout = $s['session_timeout'] ?? 0;
    $this->user_pool_arn = $s['user_pool_arn'] ?? '';
    $this->user_pool_client_id = $s['user_pool_client_id'] ?? '';
    $this->user_pool_domain = $s['user_pool_domain'] ?? '';
  }
}

type AuthenticateCognitoActionScope = string;

type AuthenticateCognitoActionSessionCookieName = string;

type AuthenticateCognitoActionSessionTimeout = int;

type AuthenticateCognitoActionUserPoolArn = string;

type AuthenticateCognitoActionUserPoolClientId = string;

type AuthenticateCognitoActionUserPoolDomain = string;

type AuthenticateOidcActionAuthenticationRequestExtraParams = dict<AuthenticateOidcActionAuthenticationRequestParamName, AuthenticateOidcActionAuthenticationRequestParamValue>;

type AuthenticateOidcActionAuthenticationRequestParamName = string;

type AuthenticateOidcActionAuthenticationRequestParamValue = string;

type AuthenticateOidcActionAuthorizationEndpoint = string;

type AuthenticateOidcActionClientId = string;

type AuthenticateOidcActionClientSecret = string;

type AuthenticateOidcActionConditionalBehaviorEnum = string;

class AuthenticateOidcActionConfig {
  public ?AuthenticateOidcActionAuthenticationRequestExtraParams $authentication_request_extra_params;
  public ?AuthenticateOidcActionAuthorizationEndpoint $authorization_endpoint;
  public ?AuthenticateOidcActionClientId $client_id;
  public ?AuthenticateOidcActionClientSecret $client_secret;
  public ?AuthenticateOidcActionIssuer $issuer;
  public ?AuthenticateOidcActionConditionalBehaviorEnum $on_unauthenticated_request;
  public ?AuthenticateOidcActionScope $scope;
  public ?AuthenticateOidcActionSessionCookieName $session_cookie_name;
  public ?AuthenticateOidcActionSessionTimeout $session_timeout;
  public ?AuthenticateOidcActionTokenEndpoint $token_endpoint;
  public ?AuthenticateOidcActionUseExistingClientSecret $use_existing_client_secret;
  public ?AuthenticateOidcActionUserInfoEndpoint $user_info_endpoint;

  public function __construct(shape(
    ?'authentication_request_extra_params' => ?AuthenticateOidcActionAuthenticationRequestExtraParams,
    ?'authorization_endpoint' => ?AuthenticateOidcActionAuthorizationEndpoint,
    ?'client_id' => ?AuthenticateOidcActionClientId,
    ?'client_secret' => ?AuthenticateOidcActionClientSecret,
    ?'issuer' => ?AuthenticateOidcActionIssuer,
    ?'on_unauthenticated_request' => ?AuthenticateOidcActionConditionalBehaviorEnum,
    ?'scope' => ?AuthenticateOidcActionScope,
    ?'session_cookie_name' => ?AuthenticateOidcActionSessionCookieName,
    ?'session_timeout' => ?AuthenticateOidcActionSessionTimeout,
    ?'token_endpoint' => ?AuthenticateOidcActionTokenEndpoint,
    ?'use_existing_client_secret' => ?AuthenticateOidcActionUseExistingClientSecret,
    ?'user_info_endpoint' => ?AuthenticateOidcActionUserInfoEndpoint,
  ) $s = shape()) {
    $this->authentication_request_extra_params = $s['authentication_request_extra_params'] ?? dict[];
    $this->authorization_endpoint = $s['authorization_endpoint'] ?? '';
    $this->client_id = $s['client_id'] ?? '';
    $this->client_secret = $s['client_secret'] ?? '';
    $this->issuer = $s['issuer'] ?? '';
    $this->on_unauthenticated_request = $s['on_unauthenticated_request'] ?? '';
    $this->scope = $s['scope'] ?? '';
    $this->session_cookie_name = $s['session_cookie_name'] ?? '';
    $this->session_timeout = $s['session_timeout'] ?? 0;
    $this->token_endpoint = $s['token_endpoint'] ?? '';
    $this->use_existing_client_secret = $s['use_existing_client_secret'] ?? false;
    $this->user_info_endpoint = $s['user_info_endpoint'] ?? '';
  }
}

type AuthenticateOidcActionIssuer = string;

type AuthenticateOidcActionScope = string;

type AuthenticateOidcActionSessionCookieName = string;

type AuthenticateOidcActionSessionTimeout = int;

type AuthenticateOidcActionTokenEndpoint = string;

type AuthenticateOidcActionUseExistingClientSecret = bool;

type AuthenticateOidcActionUserInfoEndpoint = string;

class AvailabilityZone {
  public ?LoadBalancerAddresses $load_balancer_addresses;
  public ?SubnetId $subnet_id;
  public ?ZoneName $zone_name;

  public function __construct(shape(
    ?'load_balancer_addresses' => ?LoadBalancerAddresses,
    ?'subnet_id' => ?SubnetId,
    ?'zone_name' => ?ZoneName,
  ) $s = shape()) {
    $this->load_balancer_addresses = $s['load_balancer_addresses'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->zone_name = $s['zone_name'] ?? '';
  }
}

class AvailabilityZoneNotSupportedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AvailabilityZones = vec<AvailabilityZone>;

type CanonicalHostedZoneId = string;

class Certificate {
  public ?CertificateArn $certificate_arn;
  public ?Default $is_default;

  public function __construct(shape(
    ?'certificate_arn' => ?CertificateArn,
    ?'is_default' => ?Default,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->is_default = $s['is_default'] ?? false;
  }
}

type CertificateArn = string;

type CertificateList = vec<Certificate>;

class CertificateNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Cipher {
  public ?CipherName $name;
  public ?CipherPriority $priority;

  public function __construct(shape(
    ?'name' => ?CipherName,
    ?'priority' => ?CipherPriority,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->priority = $s['priority'] ?? 0;
  }
}

type CipherName = string;

type CipherPriority = int;

type Ciphers = vec<Cipher>;

type ConditionFieldName = string;

class CreateListenerInput {
  public ?CertificateList $certificates;
  public ?Actions $default_actions;
  public ?LoadBalancerArn $load_balancer_arn;
  public ?Port $port;
  public ?ProtocolEnum $protocol;
  public ?SslPolicyName $ssl_policy;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
    ?'default_actions' => ?Actions,
    ?'load_balancer_arn' => ?LoadBalancerArn,
    ?'port' => ?Port,
    ?'protocol' => ?ProtocolEnum,
    ?'ssl_policy' => ?SslPolicyName,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->default_actions = $s['default_actions'] ?? vec[];
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->ssl_policy = $s['ssl_policy'] ?? '';
  }
}

class CreateListenerOutput {
  public ?Listeners $listeners;

  public function __construct(shape(
    ?'listeners' => ?Listeners,
  ) $s = shape()) {
    $this->listeners = $s['listeners'] ?? vec[];
  }
}

class CreateLoadBalancerInput {
  public ?IpAddressType $ip_address_type;
  public ?LoadBalancerName $name;
  public ?LoadBalancerSchemeEnum $scheme;
  public ?SecurityGroups $security_groups;
  public ?SubnetMappings $subnet_mappings;
  public ?Subnets $subnets;
  public ?TagList $tags;
  public ?LoadBalancerTypeEnum $type;

  public function __construct(shape(
    ?'ip_address_type' => ?IpAddressType,
    ?'name' => ?LoadBalancerName,
    ?'scheme' => ?LoadBalancerSchemeEnum,
    ?'security_groups' => ?SecurityGroups,
    ?'subnet_mappings' => ?SubnetMappings,
    ?'subnets' => ?Subnets,
    ?'tags' => ?TagList,
    ?'type' => ?LoadBalancerTypeEnum,
  ) $s = shape()) {
    $this->ip_address_type = $s['ip_address_type'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->scheme = $s['scheme'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnet_mappings = $s['subnet_mappings'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

class CreateLoadBalancerOutput {
  public ?LoadBalancers $load_balancers;

  public function __construct(shape(
    ?'load_balancers' => ?LoadBalancers,
  ) $s = shape()) {
    $this->load_balancers = $s['load_balancers'] ?? vec[];
  }
}

class CreateRuleInput {
  public ?Actions $actions;
  public ?RuleConditionList $conditions;
  public ?ListenerArn $listener_arn;
  public ?RulePriority $priority;

  public function __construct(shape(
    ?'actions' => ?Actions,
    ?'conditions' => ?RuleConditionList,
    ?'listener_arn' => ?ListenerArn,
    ?'priority' => ?RulePriority,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->conditions = $s['conditions'] ?? vec[];
    $this->listener_arn = $s['listener_arn'] ?? '';
    $this->priority = $s['priority'] ?? 0;
  }
}

class CreateRuleOutput {
  public ?Rules $rules;

  public function __construct(shape(
    ?'rules' => ?Rules,
  ) $s = shape()) {
    $this->rules = $s['rules'] ?? vec[];
  }
}

class CreateTargetGroupInput {
  public ?HealthCheckEnabled $health_check_enabled;
  public ?HealthCheckIntervalSeconds $health_check_interval_seconds;
  public ?Path $health_check_path;
  public ?HealthCheckPort $health_check_port;
  public ?ProtocolEnum $health_check_protocol;
  public ?HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public ?HealthCheckThresholdCount $healthy_threshold_count;
  public ?Matcher $matcher;
  public ?TargetGroupName $name;
  public ?Port $port;
  public ?ProtocolEnum $protocol;
  public ?TargetTypeEnum $target_type;
  public ?HealthCheckThresholdCount $unhealthy_threshold_count;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'health_check_enabled' => ?HealthCheckEnabled,
    ?'health_check_interval_seconds' => ?HealthCheckIntervalSeconds,
    ?'health_check_path' => ?Path,
    ?'health_check_port' => ?HealthCheckPort,
    ?'health_check_protocol' => ?ProtocolEnum,
    ?'health_check_timeout_seconds' => ?HealthCheckTimeoutSeconds,
    ?'healthy_threshold_count' => ?HealthCheckThresholdCount,
    ?'matcher' => ?Matcher,
    ?'name' => ?TargetGroupName,
    ?'port' => ?Port,
    ?'protocol' => ?ProtocolEnum,
    ?'target_type' => ?TargetTypeEnum,
    ?'unhealthy_threshold_count' => ?HealthCheckThresholdCount,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->health_check_enabled = $s['health_check_enabled'] ?? false;
    $this->health_check_interval_seconds = $s['health_check_interval_seconds'] ?? 0;
    $this->health_check_path = $s['health_check_path'] ?? '';
    $this->health_check_port = $s['health_check_port'] ?? '';
    $this->health_check_protocol = $s['health_check_protocol'] ?? '';
    $this->health_check_timeout_seconds = $s['health_check_timeout_seconds'] ?? 0;
    $this->healthy_threshold_count = $s['healthy_threshold_count'] ?? 0;
    $this->matcher = $s['matcher'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->target_type = $s['target_type'] ?? '';
    $this->unhealthy_threshold_count = $s['unhealthy_threshold_count'] ?? 0;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateTargetGroupOutput {
  public ?TargetGroups $target_groups;

  public function __construct(shape(
    ?'target_groups' => ?TargetGroups,
  ) $s = shape()) {
    $this->target_groups = $s['target_groups'] ?? vec[];
  }
}

type CreatedTime = int;

type DNSName = string;

type Default = bool;

class DeleteListenerInput {
  public ?ListenerArn $listener_arn;

  public function __construct(shape(
    ?'listener_arn' => ?ListenerArn,
  ) $s = shape()) {
    $this->listener_arn = $s['listener_arn'] ?? '';
  }
}

class DeleteListenerOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteLoadBalancerInput {
  public ?LoadBalancerArn $load_balancer_arn;

  public function __construct(shape(
    ?'load_balancer_arn' => ?LoadBalancerArn,
  ) $s = shape()) {
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
  }
}

class DeleteLoadBalancerOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRuleInput {
  public ?RuleArn $rule_arn;

  public function __construct(shape(
    ?'rule_arn' => ?RuleArn,
  ) $s = shape()) {
    $this->rule_arn = $s['rule_arn'] ?? '';
  }
}

class DeleteRuleOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTargetGroupInput {
  public ?TargetGroupArn $target_group_arn;

  public function __construct(shape(
    ?'target_group_arn' => ?TargetGroupArn,
  ) $s = shape()) {
    $this->target_group_arn = $s['target_group_arn'] ?? '';
  }
}

class DeleteTargetGroupOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterTargetsInput {
  public ?TargetGroupArn $target_group_arn;
  public ?TargetDescriptions $targets;

  public function __construct(shape(
    ?'target_group_arn' => ?TargetGroupArn,
    ?'targets' => ?TargetDescriptions,
  ) $s = shape()) {
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
  }
}

class DeregisterTargetsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAccountLimitsInput {
  public ?Marker $marker;
  public ?PageSize $page_size;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'page_size' => ?PageSize,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
  }
}

class DescribeAccountLimitsOutput {
  public ?Limits $limits;
  public ?Marker $next_marker;

  public function __construct(shape(
    ?'limits' => ?Limits,
    ?'next_marker' => ?Marker,
  ) $s = shape()) {
    $this->limits = $s['limits'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class DescribeListenerCertificatesInput {
  public ?ListenerArn $listener_arn;
  public ?Marker $marker;
  public ?PageSize $page_size;

  public function __construct(shape(
    ?'listener_arn' => ?ListenerArn,
    ?'marker' => ?Marker,
    ?'page_size' => ?PageSize,
  ) $s = shape()) {
    $this->listener_arn = $s['listener_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
  }
}

class DescribeListenerCertificatesOutput {
  public ?CertificateList $certificates;
  public ?Marker $next_marker;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
    ?'next_marker' => ?Marker,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class DescribeListenersInput {
  public ?ListenerArns $listener_arns;
  public ?LoadBalancerArn $load_balancer_arn;
  public ?Marker $marker;
  public ?PageSize $page_size;

  public function __construct(shape(
    ?'listener_arns' => ?ListenerArns,
    ?'load_balancer_arn' => ?LoadBalancerArn,
    ?'marker' => ?Marker,
    ?'page_size' => ?PageSize,
  ) $s = shape()) {
    $this->listener_arns = $s['listener_arns'] ?? vec[];
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
  }
}

class DescribeListenersOutput {
  public ?Listeners $listeners;
  public ?Marker $next_marker;

  public function __construct(shape(
    ?'listeners' => ?Listeners,
    ?'next_marker' => ?Marker,
  ) $s = shape()) {
    $this->listeners = $s['listeners'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class DescribeLoadBalancerAttributesInput {
  public ?LoadBalancerArn $load_balancer_arn;

  public function __construct(shape(
    ?'load_balancer_arn' => ?LoadBalancerArn,
  ) $s = shape()) {
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
  }
}

class DescribeLoadBalancerAttributesOutput {
  public ?LoadBalancerAttributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?LoadBalancerAttributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class DescribeLoadBalancersInput {
  public ?LoadBalancerArns $load_balancer_arns;
  public ?Marker $marker;
  public ?LoadBalancerNames $names;
  public ?PageSize $page_size;

  public function __construct(shape(
    ?'load_balancer_arns' => ?LoadBalancerArns,
    ?'marker' => ?Marker,
    ?'names' => ?LoadBalancerNames,
    ?'page_size' => ?PageSize,
  ) $s = shape()) {
    $this->load_balancer_arns = $s['load_balancer_arns'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->page_size = $s['page_size'] ?? 0;
  }
}

class DescribeLoadBalancersOutput {
  public ?LoadBalancers $load_balancers;
  public ?Marker $next_marker;

  public function __construct(shape(
    ?'load_balancers' => ?LoadBalancers,
    ?'next_marker' => ?Marker,
  ) $s = shape()) {
    $this->load_balancers = $s['load_balancers'] ?? vec[];
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class DescribeRulesInput {
  public ?ListenerArn $listener_arn;
  public ?Marker $marker;
  public ?PageSize $page_size;
  public ?RuleArns $rule_arns;

  public function __construct(shape(
    ?'listener_arn' => ?ListenerArn,
    ?'marker' => ?Marker,
    ?'page_size' => ?PageSize,
    ?'rule_arns' => ?RuleArns,
  ) $s = shape()) {
    $this->listener_arn = $s['listener_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->page_size = $s['page_size'] ?? 0;
    $this->rule_arns = $s['rule_arns'] ?? vec[];
  }
}

class DescribeRulesOutput {
  public ?Marker $next_marker;
  public ?Rules $rules;

  public function __construct(shape(
    ?'next_marker' => ?Marker,
    ?'rules' => ?Rules,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->rules = $s['rules'] ?? vec[];
  }
}

class DescribeSSLPoliciesInput {
  public ?Marker $marker;
  public ?SslPolicyNames $names;
  public ?PageSize $page_size;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'names' => ?SslPolicyNames,
    ?'page_size' => ?PageSize,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->page_size = $s['page_size'] ?? 0;
  }
}

class DescribeSSLPoliciesOutput {
  public ?Marker $next_marker;
  public ?SslPolicies $ssl_policies;

  public function __construct(shape(
    ?'next_marker' => ?Marker,
    ?'ssl_policies' => ?SslPolicies,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->ssl_policies = $s['ssl_policies'] ?? vec[];
  }
}

class DescribeTagsInput {
  public ?ResourceArns $resource_arns;

  public function __construct(shape(
    ?'resource_arns' => ?ResourceArns,
  ) $s = shape()) {
    $this->resource_arns = $s['resource_arns'] ?? vec[];
  }
}

class DescribeTagsOutput {
  public ?TagDescriptions $tag_descriptions;

  public function __construct(shape(
    ?'tag_descriptions' => ?TagDescriptions,
  ) $s = shape()) {
    $this->tag_descriptions = $s['tag_descriptions'] ?? vec[];
  }
}

class DescribeTargetGroupAttributesInput {
  public ?TargetGroupArn $target_group_arn;

  public function __construct(shape(
    ?'target_group_arn' => ?TargetGroupArn,
  ) $s = shape()) {
    $this->target_group_arn = $s['target_group_arn'] ?? '';
  }
}

class DescribeTargetGroupAttributesOutput {
  public ?TargetGroupAttributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?TargetGroupAttributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class DescribeTargetGroupsInput {
  public ?LoadBalancerArn $load_balancer_arn;
  public ?Marker $marker;
  public ?TargetGroupNames $names;
  public ?PageSize $page_size;
  public ?TargetGroupArns $target_group_arns;

  public function __construct(shape(
    ?'load_balancer_arn' => ?LoadBalancerArn,
    ?'marker' => ?Marker,
    ?'names' => ?TargetGroupNames,
    ?'page_size' => ?PageSize,
    ?'target_group_arns' => ?TargetGroupArns,
  ) $s = shape()) {
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->names = $s['names'] ?? vec[];
    $this->page_size = $s['page_size'] ?? 0;
    $this->target_group_arns = $s['target_group_arns'] ?? vec[];
  }
}

class DescribeTargetGroupsOutput {
  public ?Marker $next_marker;
  public ?TargetGroups $target_groups;

  public function __construct(shape(
    ?'next_marker' => ?Marker,
    ?'target_groups' => ?TargetGroups,
  ) $s = shape()) {
    $this->next_marker = $s['next_marker'] ?? '';
    $this->target_groups = $s['target_groups'] ?? vec[];
  }
}

class DescribeTargetHealthInput {
  public ?TargetGroupArn $target_group_arn;
  public ?TargetDescriptions $targets;

  public function __construct(shape(
    ?'target_group_arn' => ?TargetGroupArn,
    ?'targets' => ?TargetDescriptions,
  ) $s = shape()) {
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
  }
}

class DescribeTargetHealthOutput {
  public ?TargetHealthDescriptions $target_health_descriptions;

  public function __construct(shape(
    ?'target_health_descriptions' => ?TargetHealthDescriptions,
  ) $s = shape()) {
    $this->target_health_descriptions = $s['target_health_descriptions'] ?? vec[];
  }
}

type Description = string;

class DuplicateListenerException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DuplicateLoadBalancerNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DuplicateTagKeysException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DuplicateTargetGroupNameException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class FixedResponseActionConfig {
  public ?FixedResponseActionContentType $content_type;
  public ?FixedResponseActionMessage $message_body;
  public ?FixedResponseActionStatusCode $status_code;

  public function __construct(shape(
    ?'content_type' => ?FixedResponseActionContentType,
    ?'message_body' => ?FixedResponseActionMessage,
    ?'status_code' => ?FixedResponseActionStatusCode,
  ) $s = shape()) {
    $this->content_type = $s['content_type'] ?? '';
    $this->message_body = $s['message_body'] ?? '';
    $this->status_code = $s['status_code'] ?? '';
  }
}

type FixedResponseActionContentType = string;

type FixedResponseActionMessage = string;

type FixedResponseActionStatusCode = string;

class ForwardActionConfig {
  public ?TargetGroupStickinessConfig $target_group_stickiness_config;
  public ?TargetGroupList $target_groups;

  public function __construct(shape(
    ?'target_group_stickiness_config' => ?TargetGroupStickinessConfig,
    ?'target_groups' => ?TargetGroupList,
  ) $s = shape()) {
    $this->target_group_stickiness_config = $s['target_group_stickiness_config'] ?? null;
    $this->target_groups = $s['target_groups'] ?? vec[];
  }
}

type HealthCheckEnabled = bool;

type HealthCheckIntervalSeconds = int;

type HealthCheckPort = string;

type HealthCheckThresholdCount = int;

type HealthCheckTimeoutSeconds = int;

class HealthUnavailableException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class HostHeaderConditionConfig {
  public ?ListOfString $values;

  public function __construct(shape(
    ?'values' => ?ListOfString,
  ) $s = shape()) {
    $this->values = $s['values'] ?? vec[];
  }
}

type HttpCode = string;

class HttpHeaderConditionConfig {
  public ?HttpHeaderConditionName $http_header_name;
  public ?ListOfString $values;

  public function __construct(shape(
    ?'http_header_name' => ?HttpHeaderConditionName,
    ?'values' => ?ListOfString,
  ) $s = shape()) {
    $this->http_header_name = $s['http_header_name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type HttpHeaderConditionName = string;

class HttpRequestMethodConditionConfig {
  public ?ListOfString $values;

  public function __construct(shape(
    ?'values' => ?ListOfString,
  ) $s = shape()) {
    $this->values = $s['values'] ?? vec[];
  }
}

class IncompatibleProtocolsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidConfigurationRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidLoadBalancerActionException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSchemeException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSecurityGroupException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidSubnetException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidTargetException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type IpAddress = string;

type IpAddressType = string;

type IsDefault = bool;

class Limit {
  public ?Max $max;
  public ?Name $name;

  public function __construct(shape(
    ?'max' => ?Max,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->max = $s['max'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type Limits = vec<Limit>;

type ListOfString = vec<StringValue>;

class Listener {
  public ?CertificateList $certificates;
  public ?Actions $default_actions;
  public ?ListenerArn $listener_arn;
  public ?LoadBalancerArn $load_balancer_arn;
  public ?Port $port;
  public ?ProtocolEnum $protocol;
  public ?SslPolicyName $ssl_policy;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
    ?'default_actions' => ?Actions,
    ?'listener_arn' => ?ListenerArn,
    ?'load_balancer_arn' => ?LoadBalancerArn,
    ?'port' => ?Port,
    ?'protocol' => ?ProtocolEnum,
    ?'ssl_policy' => ?SslPolicyName,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->default_actions = $s['default_actions'] ?? vec[];
    $this->listener_arn = $s['listener_arn'] ?? '';
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->ssl_policy = $s['ssl_policy'] ?? '';
  }
}

type ListenerArn = string;

type ListenerArns = vec<ListenerArn>;

class ListenerNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Listeners = vec<Listener>;

class LoadBalancer {
  public ?AvailabilityZones $availability_zones;
  public ?CanonicalHostedZoneId $canonical_hosted_zone_id;
  public ?CreatedTime $created_time;
  public ?DNSName $dns_name;
  public ?IpAddressType $ip_address_type;
  public ?LoadBalancerArn $load_balancer_arn;
  public ?LoadBalancerName $load_balancer_name;
  public ?LoadBalancerSchemeEnum $scheme;
  public ?SecurityGroups $security_groups;
  public ?LoadBalancerState $state;
  public ?LoadBalancerTypeEnum $type;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
    ?'canonical_hosted_zone_id' => ?CanonicalHostedZoneId,
    ?'created_time' => ?CreatedTime,
    ?'dns_name' => ?DNSName,
    ?'ip_address_type' => ?IpAddressType,
    ?'load_balancer_arn' => ?LoadBalancerArn,
    ?'load_balancer_name' => ?LoadBalancerName,
    ?'scheme' => ?LoadBalancerSchemeEnum,
    ?'security_groups' => ?SecurityGroups,
    ?'state' => ?LoadBalancerState,
    ?'type' => ?LoadBalancerTypeEnum,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->canonical_hosted_zone_id = $s['canonical_hosted_zone_id'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->dns_name = $s['dns_name'] ?? '';
    $this->ip_address_type = $s['ip_address_type'] ?? '';
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
    $this->scheme = $s['scheme'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->state = $s['state'] ?? null;
    $this->type = $s['type'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class LoadBalancerAddress {
  public ?AllocationId $allocation_id;
  public ?IpAddress $ip_address;
  public ?PrivateIPv4Address $private_i_pv_4_address;

  public function __construct(shape(
    ?'allocation_id' => ?AllocationId,
    ?'ip_address' => ?IpAddress,
    ?'private_i_pv_4_address' => ?PrivateIPv4Address,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->private_i_pv_4_address = $s['private_i_pv_4_address'] ?? '';
  }
}

type LoadBalancerAddresses = vec<LoadBalancerAddress>;

type LoadBalancerArn = string;

type LoadBalancerArns = vec<LoadBalancerArn>;

class LoadBalancerAttribute {
  public ?LoadBalancerAttributeKey $key;
  public ?LoadBalancerAttributeValue $value;

  public function __construct(shape(
    ?'key' => ?LoadBalancerAttributeKey,
    ?'value' => ?LoadBalancerAttributeValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type LoadBalancerAttributeKey = string;

type LoadBalancerAttributeValue = string;

type LoadBalancerAttributes = vec<LoadBalancerAttribute>;

type LoadBalancerName = string;

type LoadBalancerNames = vec<LoadBalancerName>;

class LoadBalancerNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type LoadBalancerSchemeEnum = string;

class LoadBalancerState {
  public ?LoadBalancerStateEnum $code;
  public ?StateReason $reason;

  public function __construct(shape(
    ?'code' => ?LoadBalancerStateEnum,
    ?'reason' => ?StateReason,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

type LoadBalancerStateEnum = string;

type LoadBalancerTypeEnum = string;

type LoadBalancers = vec<LoadBalancer>;

type Marker = string;

class Matcher {
  public ?HttpCode $http_code;

  public function __construct(shape(
    ?'http_code' => ?HttpCode,
  ) $s = shape()) {
    $this->http_code = $s['http_code'] ?? '';
  }
}

type Max = string;

class ModifyListenerInput {
  public ?CertificateList $certificates;
  public ?Actions $default_actions;
  public ?ListenerArn $listener_arn;
  public ?Port $port;
  public ?ProtocolEnum $protocol;
  public ?SslPolicyName $ssl_policy;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
    ?'default_actions' => ?Actions,
    ?'listener_arn' => ?ListenerArn,
    ?'port' => ?Port,
    ?'protocol' => ?ProtocolEnum,
    ?'ssl_policy' => ?SslPolicyName,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->default_actions = $s['default_actions'] ?? vec[];
    $this->listener_arn = $s['listener_arn'] ?? '';
    $this->port = $s['port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->ssl_policy = $s['ssl_policy'] ?? '';
  }
}

class ModifyListenerOutput {
  public ?Listeners $listeners;

  public function __construct(shape(
    ?'listeners' => ?Listeners,
  ) $s = shape()) {
    $this->listeners = $s['listeners'] ?? vec[];
  }
}

class ModifyLoadBalancerAttributesInput {
  public ?LoadBalancerAttributes $attributes;
  public ?LoadBalancerArn $load_balancer_arn;

  public function __construct(shape(
    ?'attributes' => ?LoadBalancerAttributes,
    ?'load_balancer_arn' => ?LoadBalancerArn,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
  }
}

class ModifyLoadBalancerAttributesOutput {
  public ?LoadBalancerAttributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?LoadBalancerAttributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class ModifyRuleInput {
  public ?Actions $actions;
  public ?RuleConditionList $conditions;
  public ?RuleArn $rule_arn;

  public function __construct(shape(
    ?'actions' => ?Actions,
    ?'conditions' => ?RuleConditionList,
    ?'rule_arn' => ?RuleArn,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->conditions = $s['conditions'] ?? vec[];
    $this->rule_arn = $s['rule_arn'] ?? '';
  }
}

class ModifyRuleOutput {
  public ?Rules $rules;

  public function __construct(shape(
    ?'rules' => ?Rules,
  ) $s = shape()) {
    $this->rules = $s['rules'] ?? vec[];
  }
}

class ModifyTargetGroupAttributesInput {
  public ?TargetGroupAttributes $attributes;
  public ?TargetGroupArn $target_group_arn;

  public function __construct(shape(
    ?'attributes' => ?TargetGroupAttributes,
    ?'target_group_arn' => ?TargetGroupArn,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->target_group_arn = $s['target_group_arn'] ?? '';
  }
}

class ModifyTargetGroupAttributesOutput {
  public ?TargetGroupAttributes $attributes;

  public function __construct(shape(
    ?'attributes' => ?TargetGroupAttributes,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

class ModifyTargetGroupInput {
  public ?HealthCheckEnabled $health_check_enabled;
  public ?HealthCheckIntervalSeconds $health_check_interval_seconds;
  public ?Path $health_check_path;
  public ?HealthCheckPort $health_check_port;
  public ?ProtocolEnum $health_check_protocol;
  public ?HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public ?HealthCheckThresholdCount $healthy_threshold_count;
  public ?Matcher $matcher;
  public ?TargetGroupArn $target_group_arn;
  public ?HealthCheckThresholdCount $unhealthy_threshold_count;

  public function __construct(shape(
    ?'health_check_enabled' => ?HealthCheckEnabled,
    ?'health_check_interval_seconds' => ?HealthCheckIntervalSeconds,
    ?'health_check_path' => ?Path,
    ?'health_check_port' => ?HealthCheckPort,
    ?'health_check_protocol' => ?ProtocolEnum,
    ?'health_check_timeout_seconds' => ?HealthCheckTimeoutSeconds,
    ?'healthy_threshold_count' => ?HealthCheckThresholdCount,
    ?'matcher' => ?Matcher,
    ?'target_group_arn' => ?TargetGroupArn,
    ?'unhealthy_threshold_count' => ?HealthCheckThresholdCount,
  ) $s = shape()) {
    $this->health_check_enabled = $s['health_check_enabled'] ?? false;
    $this->health_check_interval_seconds = $s['health_check_interval_seconds'] ?? 0;
    $this->health_check_path = $s['health_check_path'] ?? '';
    $this->health_check_port = $s['health_check_port'] ?? '';
    $this->health_check_protocol = $s['health_check_protocol'] ?? '';
    $this->health_check_timeout_seconds = $s['health_check_timeout_seconds'] ?? 0;
    $this->healthy_threshold_count = $s['healthy_threshold_count'] ?? 0;
    $this->matcher = $s['matcher'] ?? null;
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->unhealthy_threshold_count = $s['unhealthy_threshold_count'] ?? 0;
  }
}

class ModifyTargetGroupOutput {
  public ?TargetGroups $target_groups;

  public function __construct(shape(
    ?'target_groups' => ?TargetGroups,
  ) $s = shape()) {
    $this->target_groups = $s['target_groups'] ?? vec[];
  }
}

type Name = string;

class OperationNotPermittedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PageSize = int;

type Path = string;

class PathPatternConditionConfig {
  public ?ListOfString $values;

  public function __construct(shape(
    ?'values' => ?ListOfString,
  ) $s = shape()) {
    $this->values = $s['values'] ?? vec[];
  }
}

type Port = int;

class PriorityInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type PrivateIPv4Address = string;

type ProtocolEnum = string;

class QueryStringConditionConfig {
  public ?QueryStringKeyValuePairList $values;

  public function __construct(shape(
    ?'values' => ?QueryStringKeyValuePairList,
  ) $s = shape()) {
    $this->values = $s['values'] ?? vec[];
  }
}

class QueryStringKeyValuePair {
  public ?StringValue $key;
  public ?StringValue $value;

  public function __construct(shape(
    ?'key' => ?StringValue,
    ?'value' => ?StringValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type QueryStringKeyValuePairList = vec<QueryStringKeyValuePair>;

class RedirectActionConfig {
  public ?RedirectActionHost $host;
  public ?RedirectActionPath $path;
  public ?RedirectActionPort $port;
  public ?RedirectActionProtocol $protocol;
  public ?RedirectActionQuery $query;
  public ?RedirectActionStatusCodeEnum $status_code;

  public function __construct(shape(
    ?'host' => ?RedirectActionHost,
    ?'path' => ?RedirectActionPath,
    ?'port' => ?RedirectActionPort,
    ?'protocol' => ?RedirectActionProtocol,
    ?'query' => ?RedirectActionQuery,
    ?'status_code' => ?RedirectActionStatusCodeEnum,
  ) $s = shape()) {
    $this->host = $s['host'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->port = $s['port'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->query = $s['query'] ?? '';
    $this->status_code = $s['status_code'] ?? '';
  }
}

type RedirectActionHost = string;

type RedirectActionPath = string;

type RedirectActionPort = string;

type RedirectActionProtocol = string;

type RedirectActionQuery = string;

type RedirectActionStatusCodeEnum = string;

class RegisterTargetsInput {
  public ?TargetGroupArn $target_group_arn;
  public ?TargetDescriptions $targets;

  public function __construct(shape(
    ?'target_group_arn' => ?TargetGroupArn,
    ?'targets' => ?TargetDescriptions,
  ) $s = shape()) {
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->targets = $s['targets'] ?? vec[];
  }
}

class RegisterTargetsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveListenerCertificatesInput {
  public ?CertificateList $certificates;
  public ?ListenerArn $listener_arn;

  public function __construct(shape(
    ?'certificates' => ?CertificateList,
    ?'listener_arn' => ?ListenerArn,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->listener_arn = $s['listener_arn'] ?? '';
  }
}

class RemoveListenerCertificatesOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveTagsInput {
  public ?ResourceArns $resource_arns;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_arns' => ?ResourceArns,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class RemoveTagsOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ResourceArn = string;

type ResourceArns = vec<ResourceArn>;

class ResourceInUseException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Rule {
  public ?Actions $actions;
  public ?RuleConditionList $conditions;
  public ?IsDefault $is_default;
  public string $priority;
  public ?RuleArn $rule_arn;

  public function __construct(shape(
    ?'actions' => ?Actions,
    ?'conditions' => ?RuleConditionList,
    ?'is_default' => ?IsDefault,
    ?'priority' => string,
    ?'rule_arn' => ?RuleArn,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->conditions = $s['conditions'] ?? vec[];
    $this->is_default = $s['is_default'] ?? false;
    $this->priority = $s['priority'] ?? '';
    $this->rule_arn = $s['rule_arn'] ?? '';
  }
}

type RuleArn = string;

type RuleArns = vec<RuleArn>;

class RuleCondition {
  public ?ConditionFieldName $field;
  public ?HostHeaderConditionConfig $host_header_config;
  public ?HttpHeaderConditionConfig $http_header_config;
  public ?HttpRequestMethodConditionConfig $http_request_method_config;
  public ?PathPatternConditionConfig $path_pattern_config;
  public ?QueryStringConditionConfig $query_string_config;
  public ?SourceIpConditionConfig $source_ip_config;
  public ?ListOfString $values;

  public function __construct(shape(
    ?'field' => ?ConditionFieldName,
    ?'host_header_config' => ?HostHeaderConditionConfig,
    ?'http_header_config' => ?HttpHeaderConditionConfig,
    ?'http_request_method_config' => ?HttpRequestMethodConditionConfig,
    ?'path_pattern_config' => ?PathPatternConditionConfig,
    ?'query_string_config' => ?QueryStringConditionConfig,
    ?'source_ip_config' => ?SourceIpConditionConfig,
    ?'values' => ?ListOfString,
  ) $s = shape()) {
    $this->field = $s['field'] ?? '';
    $this->host_header_config = $s['host_header_config'] ?? null;
    $this->http_header_config = $s['http_header_config'] ?? null;
    $this->http_request_method_config = $s['http_request_method_config'] ?? null;
    $this->path_pattern_config = $s['path_pattern_config'] ?? null;
    $this->query_string_config = $s['query_string_config'] ?? null;
    $this->source_ip_config = $s['source_ip_config'] ?? null;
    $this->values = $s['values'] ?? vec[];
  }
}

type RuleConditionList = vec<RuleCondition>;

class RuleNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RulePriority = int;

type RulePriorityList = vec<RulePriorityPair>;

class RulePriorityPair {
  public ?RulePriority $priority;
  public ?RuleArn $rule_arn;

  public function __construct(shape(
    ?'priority' => ?RulePriority,
    ?'rule_arn' => ?RuleArn,
  ) $s = shape()) {
    $this->priority = $s['priority'] ?? 0;
    $this->rule_arn = $s['rule_arn'] ?? '';
  }
}

type Rules = vec<Rule>;

class SSLPolicyNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SecurityGroupId = string;

type SecurityGroups = vec<SecurityGroupId>;

class SetIpAddressTypeInput {
  public ?IpAddressType $ip_address_type;
  public ?LoadBalancerArn $load_balancer_arn;

  public function __construct(shape(
    ?'ip_address_type' => ?IpAddressType,
    ?'load_balancer_arn' => ?LoadBalancerArn,
  ) $s = shape()) {
    $this->ip_address_type = $s['ip_address_type'] ?? '';
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
  }
}

class SetIpAddressTypeOutput {
  public ?IpAddressType $ip_address_type;

  public function __construct(shape(
    ?'ip_address_type' => ?IpAddressType,
  ) $s = shape()) {
    $this->ip_address_type = $s['ip_address_type'] ?? '';
  }
}

class SetRulePrioritiesInput {
  public ?RulePriorityList $rule_priorities;

  public function __construct(shape(
    ?'rule_priorities' => ?RulePriorityList,
  ) $s = shape()) {
    $this->rule_priorities = $s['rule_priorities'] ?? vec[];
  }
}

class SetRulePrioritiesOutput {
  public ?Rules $rules;

  public function __construct(shape(
    ?'rules' => ?Rules,
  ) $s = shape()) {
    $this->rules = $s['rules'] ?? vec[];
  }
}

class SetSecurityGroupsInput {
  public ?LoadBalancerArn $load_balancer_arn;
  public ?SecurityGroups $security_groups;

  public function __construct(shape(
    ?'load_balancer_arn' => ?LoadBalancerArn,
    ?'security_groups' => ?SecurityGroups,
  ) $s = shape()) {
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class SetSecurityGroupsOutput {
  public ?SecurityGroups $security_group_ids;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroups,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
  }
}

class SetSubnetsInput {
  public ?LoadBalancerArn $load_balancer_arn;
  public ?SubnetMappings $subnet_mappings;
  public ?Subnets $subnets;

  public function __construct(shape(
    ?'load_balancer_arn' => ?LoadBalancerArn,
    ?'subnet_mappings' => ?SubnetMappings,
    ?'subnets' => ?Subnets,
  ) $s = shape()) {
    $this->load_balancer_arn = $s['load_balancer_arn'] ?? '';
    $this->subnet_mappings = $s['subnet_mappings'] ?? vec[];
    $this->subnets = $s['subnets'] ?? vec[];
  }
}

class SetSubnetsOutput {
  public ?AvailabilityZones $availability_zones;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZones,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
  }
}

class SourceIpConditionConfig {
  public ?ListOfString $values;

  public function __construct(shape(
    ?'values' => ?ListOfString,
  ) $s = shape()) {
    $this->values = $s['values'] ?? vec[];
  }
}

type SslPolicies = vec<SslPolicy>;

class SslPolicy {
  public ?Ciphers $ciphers;
  public ?SslPolicyName $name;
  public ?SslProtocols $ssl_protocols;

  public function __construct(shape(
    ?'ciphers' => ?Ciphers,
    ?'name' => ?SslPolicyName,
    ?'ssl_protocols' => ?SslProtocols,
  ) $s = shape()) {
    $this->ciphers = $s['ciphers'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->ssl_protocols = $s['ssl_protocols'] ?? vec[];
  }
}

type SslPolicyName = string;

type SslPolicyNames = vec<SslPolicyName>;

type SslProtocol = string;

type SslProtocols = vec<SslProtocol>;

type StateReason = string;

type String = string;

type StringValue = string;

type SubnetId = string;

class SubnetMapping {
  public ?AllocationId $allocation_id;
  public ?PrivateIPv4Address $private_i_pv_4_address;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'allocation_id' => ?AllocationId,
    ?'private_i_pv_4_address' => ?PrivateIPv4Address,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->private_i_pv_4_address = $s['private_i_pv_4_address'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type SubnetMappings = vec<SubnetMapping>;

class SubnetNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Subnets = vec<SubnetId>;

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

class TagDescription {
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

type TagDescriptions = vec<TagDescription>;

type TagKey = string;

type TagKeys = vec<TagKey>;

type TagList = vec<Tag>;

type TagValue = string;

class TargetDescription {
  public ?ZoneName $availability_zone;
  public ?TargetId $id;
  public ?Port $port;

  public function __construct(shape(
    ?'availability_zone' => ?ZoneName,
    ?'id' => ?TargetId,
    ?'port' => ?Port,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type TargetDescriptions = vec<TargetDescription>;

class TargetGroup {
  public ?HealthCheckEnabled $health_check_enabled;
  public ?HealthCheckIntervalSeconds $health_check_interval_seconds;
  public ?Path $health_check_path;
  public ?HealthCheckPort $health_check_port;
  public ?ProtocolEnum $health_check_protocol;
  public ?HealthCheckTimeoutSeconds $health_check_timeout_seconds;
  public ?HealthCheckThresholdCount $healthy_threshold_count;
  public ?LoadBalancerArns $load_balancer_arns;
  public ?Matcher $matcher;
  public ?Port $port;
  public ?ProtocolEnum $protocol;
  public ?TargetGroupArn $target_group_arn;
  public ?TargetGroupName $target_group_name;
  public ?TargetTypeEnum $target_type;
  public ?HealthCheckThresholdCount $unhealthy_threshold_count;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'health_check_enabled' => ?HealthCheckEnabled,
    ?'health_check_interval_seconds' => ?HealthCheckIntervalSeconds,
    ?'health_check_path' => ?Path,
    ?'health_check_port' => ?HealthCheckPort,
    ?'health_check_protocol' => ?ProtocolEnum,
    ?'health_check_timeout_seconds' => ?HealthCheckTimeoutSeconds,
    ?'healthy_threshold_count' => ?HealthCheckThresholdCount,
    ?'load_balancer_arns' => ?LoadBalancerArns,
    ?'matcher' => ?Matcher,
    ?'port' => ?Port,
    ?'protocol' => ?ProtocolEnum,
    ?'target_group_arn' => ?TargetGroupArn,
    ?'target_group_name' => ?TargetGroupName,
    ?'target_type' => ?TargetTypeEnum,
    ?'unhealthy_threshold_count' => ?HealthCheckThresholdCount,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->health_check_enabled = $s['health_check_enabled'] ?? false;
    $this->health_check_interval_seconds = $s['health_check_interval_seconds'] ?? 0;
    $this->health_check_path = $s['health_check_path'] ?? '';
    $this->health_check_port = $s['health_check_port'] ?? '';
    $this->health_check_protocol = $s['health_check_protocol'] ?? '';
    $this->health_check_timeout_seconds = $s['health_check_timeout_seconds'] ?? 0;
    $this->healthy_threshold_count = $s['healthy_threshold_count'] ?? 0;
    $this->load_balancer_arns = $s['load_balancer_arns'] ?? vec[];
    $this->matcher = $s['matcher'] ?? null;
    $this->port = $s['port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->target_group_name = $s['target_group_name'] ?? '';
    $this->target_type = $s['target_type'] ?? '';
    $this->unhealthy_threshold_count = $s['unhealthy_threshold_count'] ?? 0;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type TargetGroupArn = string;

type TargetGroupArns = vec<TargetGroupArn>;

class TargetGroupAssociationLimitException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TargetGroupAttribute {
  public ?TargetGroupAttributeKey $key;
  public ?TargetGroupAttributeValue $value;

  public function __construct(shape(
    ?'key' => ?TargetGroupAttributeKey,
    ?'value' => ?TargetGroupAttributeValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TargetGroupAttributeKey = string;

type TargetGroupAttributeValue = string;

type TargetGroupAttributes = vec<TargetGroupAttribute>;

type TargetGroupList = vec<TargetGroupTuple>;

type TargetGroupName = string;

type TargetGroupNames = vec<TargetGroupName>;

class TargetGroupNotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TargetGroupStickinessConfig {
  public ?TargetGroupStickinessDurationSeconds $duration_seconds;
  public ?TargetGroupStickinessEnabled $enabled;

  public function __construct(shape(
    ?'duration_seconds' => ?TargetGroupStickinessDurationSeconds,
    ?'enabled' => ?TargetGroupStickinessEnabled,
  ) $s = shape()) {
    $this->duration_seconds = $s['duration_seconds'] ?? 0;
    $this->enabled = $s['enabled'] ?? false;
  }
}

type TargetGroupStickinessDurationSeconds = int;

type TargetGroupStickinessEnabled = bool;

class TargetGroupTuple {
  public ?TargetGroupArn $target_group_arn;
  public ?TargetGroupWeight $weight;

  public function __construct(shape(
    ?'target_group_arn' => ?TargetGroupArn,
    ?'weight' => ?TargetGroupWeight,
  ) $s = shape()) {
    $this->target_group_arn = $s['target_group_arn'] ?? '';
    $this->weight = $s['weight'] ?? 0;
  }
}

type TargetGroupWeight = int;

type TargetGroups = vec<TargetGroup>;

class TargetHealth {
  public ?Description $description;
  public ?TargetHealthReasonEnum $reason;
  public ?TargetHealthStateEnum $state;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'reason' => ?TargetHealthReasonEnum,
    ?'state' => ?TargetHealthStateEnum,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class TargetHealthDescription {
  public ?HealthCheckPort $health_check_port;
  public ?TargetDescription $target;
  public ?TargetHealth $target_health;

  public function __construct(shape(
    ?'health_check_port' => ?HealthCheckPort,
    ?'target' => ?TargetDescription,
    ?'target_health' => ?TargetHealth,
  ) $s = shape()) {
    $this->health_check_port = $s['health_check_port'] ?? '';
    $this->target = $s['target'] ?? null;
    $this->target_health = $s['target_health'] ?? null;
  }
}

type TargetHealthDescriptions = vec<TargetHealthDescription>;

type TargetHealthReasonEnum = string;

type TargetHealthStateEnum = string;

type TargetId = string;

type TargetTypeEnum = string;

class TooManyActionsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyCertificatesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyListenersException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyLoadBalancersException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyRegistrationsForTargetIdException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyRulesException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyTagsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyTargetGroupsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyTargetsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class TooManyUniqueTargetGroupsPerLoadBalancerException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnsupportedProtocolException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type VpcId = string;

type ZoneName = string;

