<?hh // strict
namespace slack\aws\route53;

interface Route53 {
  public function AssociateVPCWithHostedZone(AssociateVPCWithHostedZoneRequest $in): Awaitable<\Errors\Result<AssociateVPCWithHostedZoneResponse>>;
  public function ChangeResourceRecordSets(ChangeResourceRecordSetsRequest $in): Awaitable<\Errors\Result<ChangeResourceRecordSetsResponse>>;
  public function ChangeTagsForResource(ChangeTagsForResourceRequest $in): Awaitable<\Errors\Result<ChangeTagsForResourceResponse>>;
  public function CreateHealthCheck(CreateHealthCheckRequest $in): Awaitable<\Errors\Result<CreateHealthCheckResponse>>;
  public function CreateHostedZone(CreateHostedZoneRequest $in): Awaitable<\Errors\Result<CreateHostedZoneResponse>>;
  public function CreateQueryLoggingConfig(CreateQueryLoggingConfigRequest $in): Awaitable<\Errors\Result<CreateQueryLoggingConfigResponse>>;
  public function CreateReusableDelegationSet(CreateReusableDelegationSetRequest $in): Awaitable<\Errors\Result<CreateReusableDelegationSetResponse>>;
  public function CreateTrafficPolicy(CreateTrafficPolicyRequest $in): Awaitable<\Errors\Result<CreateTrafficPolicyResponse>>;
  public function CreateTrafficPolicyInstance(CreateTrafficPolicyInstanceRequest $in): Awaitable<\Errors\Result<CreateTrafficPolicyInstanceResponse>>;
  public function CreateTrafficPolicyVersion(CreateTrafficPolicyVersionRequest $in): Awaitable<\Errors\Result<CreateTrafficPolicyVersionResponse>>;
  public function CreateVPCAssociationAuthorization(CreateVPCAssociationAuthorizationRequest $in): Awaitable<\Errors\Result<CreateVPCAssociationAuthorizationResponse>>;
  public function DeleteHealthCheck(DeleteHealthCheckRequest $in): Awaitable<\Errors\Result<DeleteHealthCheckResponse>>;
  public function DeleteHostedZone(DeleteHostedZoneRequest $in): Awaitable<\Errors\Result<DeleteHostedZoneResponse>>;
  public function DeleteQueryLoggingConfig(DeleteQueryLoggingConfigRequest $in): Awaitable<\Errors\Result<DeleteQueryLoggingConfigResponse>>;
  public function DeleteReusableDelegationSet(DeleteReusableDelegationSetRequest $in): Awaitable<\Errors\Result<DeleteReusableDelegationSetResponse>>;
  public function DeleteTrafficPolicy(DeleteTrafficPolicyRequest $in): Awaitable<\Errors\Result<DeleteTrafficPolicyResponse>>;
  public function DeleteTrafficPolicyInstance(DeleteTrafficPolicyInstanceRequest $in): Awaitable<\Errors\Result<DeleteTrafficPolicyInstanceResponse>>;
  public function DeleteVPCAssociationAuthorization(DeleteVPCAssociationAuthorizationRequest $in): Awaitable<\Errors\Result<DeleteVPCAssociationAuthorizationResponse>>;
  public function DisassociateVPCFromHostedZone(DisassociateVPCFromHostedZoneRequest $in): Awaitable<\Errors\Result<DisassociateVPCFromHostedZoneResponse>>;
  public function GetAccountLimit(GetAccountLimitRequest $in): Awaitable<\Errors\Result<GetAccountLimitResponse>>;
  public function GetChange(GetChangeRequest $in): Awaitable<\Errors\Result<GetChangeResponse>>;
  public function GetCheckerIpRanges(GetCheckerIpRangesRequest $in): Awaitable<\Errors\Result<GetCheckerIpRangesResponse>>;
  public function GetGeoLocation(GetGeoLocationRequest $in): Awaitable<\Errors\Result<GetGeoLocationResponse>>;
  public function GetHealthCheck(GetHealthCheckRequest $in): Awaitable<\Errors\Result<GetHealthCheckResponse>>;
  public function GetHealthCheckCount(GetHealthCheckCountRequest $in): Awaitable<\Errors\Result<GetHealthCheckCountResponse>>;
  public function GetHealthCheckLastFailureReason(GetHealthCheckLastFailureReasonRequest $in): Awaitable<\Errors\Result<GetHealthCheckLastFailureReasonResponse>>;
  public function GetHealthCheckStatus(GetHealthCheckStatusRequest $in): Awaitable<\Errors\Result<GetHealthCheckStatusResponse>>;
  public function GetHostedZone(GetHostedZoneRequest $in): Awaitable<\Errors\Result<GetHostedZoneResponse>>;
  public function GetHostedZoneCount(GetHostedZoneCountRequest $in): Awaitable<\Errors\Result<GetHostedZoneCountResponse>>;
  public function GetHostedZoneLimit(GetHostedZoneLimitRequest $in): Awaitable<\Errors\Result<GetHostedZoneLimitResponse>>;
  public function GetQueryLoggingConfig(GetQueryLoggingConfigRequest $in): Awaitable<\Errors\Result<GetQueryLoggingConfigResponse>>;
  public function GetReusableDelegationSet(GetReusableDelegationSetRequest $in): Awaitable<\Errors\Result<GetReusableDelegationSetResponse>>;
  public function GetReusableDelegationSetLimit(GetReusableDelegationSetLimitRequest $in): Awaitable<\Errors\Result<GetReusableDelegationSetLimitResponse>>;
  public function GetTrafficPolicy(GetTrafficPolicyRequest $in): Awaitable<\Errors\Result<GetTrafficPolicyResponse>>;
  public function GetTrafficPolicyInstance(GetTrafficPolicyInstanceRequest $in): Awaitable<\Errors\Result<GetTrafficPolicyInstanceResponse>>;
  public function GetTrafficPolicyInstanceCount(GetTrafficPolicyInstanceCountRequest $in): Awaitable<\Errors\Result<GetTrafficPolicyInstanceCountResponse>>;
  public function ListGeoLocations(ListGeoLocationsRequest $in): Awaitable<\Errors\Result<ListGeoLocationsResponse>>;
  public function ListHealthChecks(ListHealthChecksRequest $in): Awaitable<\Errors\Result<ListHealthChecksResponse>>;
  public function ListHostedZones(ListHostedZonesRequest $in): Awaitable<\Errors\Result<ListHostedZonesResponse>>;
  public function ListHostedZonesByName(ListHostedZonesByNameRequest $in): Awaitable<\Errors\Result<ListHostedZonesByNameResponse>>;
  public function ListQueryLoggingConfigs(ListQueryLoggingConfigsRequest $in): Awaitable<\Errors\Result<ListQueryLoggingConfigsResponse>>;
  public function ListResourceRecordSets(ListResourceRecordSetsRequest $in): Awaitable<\Errors\Result<ListResourceRecordSetsResponse>>;
  public function ListReusableDelegationSets(ListReusableDelegationSetsRequest $in): Awaitable<\Errors\Result<ListReusableDelegationSetsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListTagsForResources(ListTagsForResourcesRequest $in): Awaitable<\Errors\Result<ListTagsForResourcesResponse>>;
  public function ListTrafficPolicies(ListTrafficPoliciesRequest $in): Awaitable<\Errors\Result<ListTrafficPoliciesResponse>>;
  public function ListTrafficPolicyInstances(ListTrafficPolicyInstancesRequest $in): Awaitable<\Errors\Result<ListTrafficPolicyInstancesResponse>>;
  public function ListTrafficPolicyInstancesByHostedZone(ListTrafficPolicyInstancesByHostedZoneRequest $in): Awaitable<\Errors\Result<ListTrafficPolicyInstancesByHostedZoneResponse>>;
  public function ListTrafficPolicyInstancesByPolicy(ListTrafficPolicyInstancesByPolicyRequest $in): Awaitable<\Errors\Result<ListTrafficPolicyInstancesByPolicyResponse>>;
  public function ListTrafficPolicyVersions(ListTrafficPolicyVersionsRequest $in): Awaitable<\Errors\Result<ListTrafficPolicyVersionsResponse>>;
  public function ListVPCAssociationAuthorizations(ListVPCAssociationAuthorizationsRequest $in): Awaitable<\Errors\Result<ListVPCAssociationAuthorizationsResponse>>;
  public function TestDNSAnswer(TestDNSAnswerRequest $in): Awaitable<\Errors\Result<TestDNSAnswerResponse>>;
  public function UpdateHealthCheck(UpdateHealthCheckRequest $in): Awaitable<\Errors\Result<UpdateHealthCheckResponse>>;
  public function UpdateHostedZoneComment(UpdateHostedZoneCommentRequest $in): Awaitable<\Errors\Result<UpdateHostedZoneCommentResponse>>;
  public function UpdateTrafficPolicyComment(UpdateTrafficPolicyCommentRequest $in): Awaitable<\Errors\Result<UpdateTrafficPolicyCommentResponse>>;
  public function UpdateTrafficPolicyInstance(UpdateTrafficPolicyInstanceRequest $in): Awaitable<\Errors\Result<UpdateTrafficPolicyInstanceResponse>>;
}

class AccountLimit {
  public ?AccountLimitType $type;
  public ?LimitValue $value;

  public function __construct(shape(
    ?'type' => ?AccountLimitType,
    ?'value' => ?LimitValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? 0;
  }
}

type AccountLimitType = string;

class AlarmIdentifier {
  public ?AlarmName $name;
  public ?CloudWatchRegion $region;

  public function __construct(shape(
    ?'name' => ?AlarmName,
    ?'region' => ?CloudWatchRegion,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->region = $s['region'] ?? '';
  }
}

type AlarmName = string;

type AliasHealthEnabled = bool;

class AliasTarget {
  public ?DNSName $dns_name;
  public ?AliasHealthEnabled $evaluate_target_health;
  public ?ResourceId $hosted_zone_id;

  public function __construct(shape(
    ?'dns_name' => ?DNSName,
    ?'evaluate_target_health' => ?AliasHealthEnabled,
    ?'hosted_zone_id' => ?ResourceId,
  ) $s = shape()) {
    $this->dns_name = $s['dns_name'] ?? '';
    $this->evaluate_target_health = $s['evaluate_target_health'] ?? false;
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
  }
}

type AssociateVPCComment = string;

class AssociateVPCWithHostedZoneRequest {
  public ?AssociateVPCComment $comment;
  public ?ResourceId $hosted_zone_id;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'comment' => ?AssociateVPCComment,
    ?'hosted_zone_id' => ?ResourceId,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->vpc = $s['vpc'] ?? null;
  }
}

class AssociateVPCWithHostedZoneResponse {
  public ?ChangeInfo $change_info;

  public function __construct(shape(
    ?'change_info' => ?ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $s['change_info'] ?? null;
  }
}

class Change {
  public ?ChangeAction $action;
  public ?ResourceRecordSet $resource_record_set;

  public function __construct(shape(
    ?'action' => ?ChangeAction,
    ?'resource_record_set' => ?ResourceRecordSet,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->resource_record_set = $s['resource_record_set'] ?? null;
  }
}

type ChangeAction = string;

class ChangeBatch {
  public ?Changes $changes;
  public ?ResourceDescription $comment;

  public function __construct(shape(
    ?'changes' => ?Changes,
    ?'comment' => ?ResourceDescription,
  ) $s = shape()) {
    $this->changes = $s['changes'] ?? vec[];
    $this->comment = $s['comment'] ?? '';
  }
}

class ChangeInfo {
  public ?ResourceDescription $comment;
  public ?ResourceId $id;
  public ?ChangeStatus $status;
  public ?TimeStamp $submitted_at;

  public function __construct(shape(
    ?'comment' => ?ResourceDescription,
    ?'id' => ?ResourceId,
    ?'status' => ?ChangeStatus,
    ?'submitted_at' => ?TimeStamp,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->submitted_at = $s['submitted_at'] ?? 0;
  }
}

class ChangeResourceRecordSetsRequest {
  public ?ChangeBatch $change_batch;
  public ?ResourceId $hosted_zone_id;

  public function __construct(shape(
    ?'change_batch' => ?ChangeBatch,
    ?'hosted_zone_id' => ?ResourceId,
  ) $s = shape()) {
    $this->change_batch = $s['change_batch'] ?? null;
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
  }
}

class ChangeResourceRecordSetsResponse {
  public ?ChangeInfo $change_info;

  public function __construct(shape(
    ?'change_info' => ?ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $s['change_info'] ?? null;
  }
}

type ChangeStatus = string;

class ChangeTagsForResourceRequest {
  public ?TagList $add_tags;
  public ?TagKeyList $remove_tag_keys;
  public ?TagResourceId $resource_id;
  public ?TagResourceType $resource_type;

  public function __construct(shape(
    ?'add_tags' => ?TagList,
    ?'remove_tag_keys' => ?TagKeyList,
    ?'resource_id' => ?TagResourceId,
    ?'resource_type' => ?TagResourceType,
  ) $s = shape()) {
    $this->add_tags = $s['add_tags'] ?? vec[];
    $this->remove_tag_keys = $s['remove_tag_keys'] ?? vec[];
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ChangeTagsForResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Changes = vec<Change>;

type CheckerIpRanges = vec<IPAddressCidr>;

type ChildHealthCheckList = vec<HealthCheckId>;

class CloudWatchAlarmConfiguration {
  public ?ComparisonOperator $comparison_operator;
  public ?DimensionList $dimensions;
  public ?EvaluationPeriods $evaluation_periods;
  public ?MetricName $metric_name;
  public ?Namespace $namespace;
  public ?Period $period;
  public ?Statistic $statistic;
  public ?Threshold $threshold;

  public function __construct(shape(
    ?'comparison_operator' => ?ComparisonOperator,
    ?'dimensions' => ?DimensionList,
    ?'evaluation_periods' => ?EvaluationPeriods,
    ?'metric_name' => ?MetricName,
    ?'namespace' => ?Namespace,
    ?'period' => ?Period,
    ?'statistic' => ?Statistic,
    ?'threshold' => ?Threshold,
  ) $s = shape()) {
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->dimensions = $s['dimensions'] ?? vec[];
    $this->evaluation_periods = $s['evaluation_periods'] ?? 0;
    $this->metric_name = $s['metric_name'] ?? '';
    $this->namespace = $s['namespace'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->statistic = $s['statistic'] ?? '';
    $this->threshold = $s['threshold'] ?? 0.0;
  }
}

type CloudWatchLogsLogGroupArn = string;

type CloudWatchRegion = string;

type ComparisonOperator = string;

class ConcurrentModification {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConflictingDomainExists {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConflictingTypes {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CreateHealthCheckRequest {
  public ?HealthCheckNonce $caller_reference;
  public ?HealthCheckConfig $health_check_config;

  public function __construct(shape(
    ?'caller_reference' => ?HealthCheckNonce,
    ?'health_check_config' => ?HealthCheckConfig,
  ) $s = shape()) {
    $this->caller_reference = $s['caller_reference'] ?? '';
    $this->health_check_config = $s['health_check_config'] ?? null;
  }
}

class CreateHealthCheckResponse {
  public ?HealthCheck $health_check;
  public ?ResourceURI $location;

  public function __construct(shape(
    ?'health_check' => ?HealthCheck,
    ?'location' => ?ResourceURI,
  ) $s = shape()) {
    $this->health_check = $s['health_check'] ?? null;
    $this->location = $s['location'] ?? '';
  }
}

class CreateHostedZoneRequest {
  public ?Nonce $caller_reference;
  public ?ResourceId $delegation_set_id;
  public ?HostedZoneConfig $hosted_zone_config;
  public ?DNSName $name;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'caller_reference' => ?Nonce,
    ?'delegation_set_id' => ?ResourceId,
    ?'hosted_zone_config' => ?HostedZoneConfig,
    ?'name' => ?DNSName,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->caller_reference = $s['caller_reference'] ?? '';
    $this->delegation_set_id = $s['delegation_set_id'] ?? '';
    $this->hosted_zone_config = $s['hosted_zone_config'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->vpc = $s['vpc'] ?? null;
  }
}

class CreateHostedZoneResponse {
  public ?ChangeInfo $change_info;
  public ?DelegationSet $delegation_set;
  public ?HostedZone $hosted_zone;
  public ?ResourceURI $location;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'change_info' => ?ChangeInfo,
    ?'delegation_set' => ?DelegationSet,
    ?'hosted_zone' => ?HostedZone,
    ?'location' => ?ResourceURI,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->change_info = $s['change_info'] ?? null;
    $this->delegation_set = $s['delegation_set'] ?? null;
    $this->hosted_zone = $s['hosted_zone'] ?? null;
    $this->location = $s['location'] ?? '';
    $this->vpc = $s['vpc'] ?? null;
  }
}

class CreateQueryLoggingConfigRequest {
  public ?CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public ?ResourceId $hosted_zone_id;

  public function __construct(shape(
    ?'cloud_watch_logs_log_group_arn' => ?CloudWatchLogsLogGroupArn,
    ?'hosted_zone_id' => ?ResourceId,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $s['cloud_watch_logs_log_group_arn'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
  }
}

class CreateQueryLoggingConfigResponse {
  public ?ResourceURI $location;
  public ?QueryLoggingConfig $query_logging_config;

  public function __construct(shape(
    ?'location' => ?ResourceURI,
    ?'query_logging_config' => ?QueryLoggingConfig,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->query_logging_config = $s['query_logging_config'] ?? null;
  }
}

class CreateReusableDelegationSetRequest {
  public ?Nonce $caller_reference;
  public ?ResourceId $hosted_zone_id;

  public function __construct(shape(
    ?'caller_reference' => ?Nonce,
    ?'hosted_zone_id' => ?ResourceId,
  ) $s = shape()) {
    $this->caller_reference = $s['caller_reference'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
  }
}

class CreateReusableDelegationSetResponse {
  public ?DelegationSet $delegation_set;
  public ?ResourceURI $location;

  public function __construct(shape(
    ?'delegation_set' => ?DelegationSet,
    ?'location' => ?ResourceURI,
  ) $s = shape()) {
    $this->delegation_set = $s['delegation_set'] ?? null;
    $this->location = $s['location'] ?? '';
  }
}

class CreateTrafficPolicyInstanceRequest {
  public ?ResourceId $hosted_zone_id;
  public ?DNSName $name;
  public ?TTL $ttl;
  public ?TrafficPolicyId $traffic_policy_id;
  public ?TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'name' => ?DNSName,
    ?'ttl' => ?TTL,
    ?'traffic_policy_id' => ?TrafficPolicyId,
    ?'traffic_policy_version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->ttl = $s['ttl'] ?? 0;
    $this->traffic_policy_id = $s['traffic_policy_id'] ?? '';
    $this->traffic_policy_version = $s['traffic_policy_version'] ?? 0;
  }
}

class CreateTrafficPolicyInstanceResponse {
  public ?ResourceURI $location;
  public ?TrafficPolicyInstance $traffic_policy_instance;

  public function __construct(shape(
    ?'location' => ?ResourceURI,
    ?'traffic_policy_instance' => ?TrafficPolicyInstance,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->traffic_policy_instance = $s['traffic_policy_instance'] ?? null;
  }
}

class CreateTrafficPolicyRequest {
  public ?TrafficPolicyComment $comment;
  public ?TrafficPolicyDocument $document;
  public ?TrafficPolicyName $name;

  public function __construct(shape(
    ?'comment' => ?TrafficPolicyComment,
    ?'document' => ?TrafficPolicyDocument,
    ?'name' => ?TrafficPolicyName,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->document = $s['document'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateTrafficPolicyResponse {
  public ?ResourceURI $location;
  public ?TrafficPolicy $traffic_policy;

  public function __construct(shape(
    ?'location' => ?ResourceURI,
    ?'traffic_policy' => ?TrafficPolicy,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->traffic_policy = $s['traffic_policy'] ?? null;
  }
}

class CreateTrafficPolicyVersionRequest {
  public ?TrafficPolicyComment $comment;
  public ?TrafficPolicyDocument $document;
  public ?TrafficPolicyId $id;

  public function __construct(shape(
    ?'comment' => ?TrafficPolicyComment,
    ?'document' => ?TrafficPolicyDocument,
    ?'id' => ?TrafficPolicyId,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->document = $s['document'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class CreateTrafficPolicyVersionResponse {
  public ?ResourceURI $location;
  public ?TrafficPolicy $traffic_policy;

  public function __construct(shape(
    ?'location' => ?ResourceURI,
    ?'traffic_policy' => ?TrafficPolicy,
  ) $s = shape()) {
    $this->location = $s['location'] ?? '';
    $this->traffic_policy = $s['traffic_policy'] ?? null;
  }
}

class CreateVPCAssociationAuthorizationRequest {
  public ?ResourceId $hosted_zone_id;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->vpc = $s['vpc'] ?? null;
  }
}

class CreateVPCAssociationAuthorizationResponse {
  public ?ResourceId $hosted_zone_id;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->vpc = $s['vpc'] ?? null;
  }
}

type DNSName = string;

type DNSRCode = string;

class DelegationSet {
  public ?Nonce $caller_reference;
  public ?ResourceId $id;
  public ?DelegationSetNameServers $name_servers;

  public function __construct(shape(
    ?'caller_reference' => ?Nonce,
    ?'id' => ?ResourceId,
    ?'name_servers' => ?DelegationSetNameServers,
  ) $s = shape()) {
    $this->caller_reference = $s['caller_reference'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name_servers = $s['name_servers'] ?? vec[];
  }
}

class DelegationSetAlreadyCreated {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DelegationSetAlreadyReusable {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DelegationSetInUse {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DelegationSetNameServers = vec<DNSName>;

class DelegationSetNotAvailable {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DelegationSetNotReusable {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DelegationSets = vec<DelegationSet>;

class DeleteHealthCheckRequest {
  public ?HealthCheckId $health_check_id;

  public function __construct(shape(
    ?'health_check_id' => ?HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $s['health_check_id'] ?? '';
  }
}

class DeleteHealthCheckResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteHostedZoneRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteHostedZoneResponse {
  public ?ChangeInfo $change_info;

  public function __construct(shape(
    ?'change_info' => ?ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $s['change_info'] ?? null;
  }
}

class DeleteQueryLoggingConfigRequest {
  public ?QueryLoggingConfigId $id;

  public function __construct(shape(
    ?'id' => ?QueryLoggingConfigId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteQueryLoggingConfigResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteReusableDelegationSetRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteReusableDelegationSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTrafficPolicyInstanceRequest {
  public ?TrafficPolicyInstanceId $id;

  public function __construct(shape(
    ?'id' => ?TrafficPolicyInstanceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class DeleteTrafficPolicyInstanceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTrafficPolicyRequest {
  public ?TrafficPolicyId $id;
  public ?TrafficPolicyVersion $version;

  public function __construct(shape(
    ?'id' => ?TrafficPolicyId,
    ?'version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class DeleteTrafficPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteVPCAssociationAuthorizationRequest {
  public ?ResourceId $hosted_zone_id;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->vpc = $s['vpc'] ?? null;
  }
}

class DeleteVPCAssociationAuthorizationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Dimension {
  public ?DimensionField $name;
  public ?DimensionField $value;

  public function __construct(shape(
    ?'name' => ?DimensionField,
    ?'value' => ?DimensionField,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type DimensionField = string;

type DimensionList = vec<Dimension>;

type Disabled = bool;

type DisassociateVPCComment = string;

class DisassociateVPCFromHostedZoneRequest {
  public ?DisassociateVPCComment $comment;
  public ?ResourceId $hosted_zone_id;
  public ?VPC $vpc;

  public function __construct(shape(
    ?'comment' => ?DisassociateVPCComment,
    ?'hosted_zone_id' => ?ResourceId,
    ?'vpc' => ?VPC,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->vpc = $s['vpc'] ?? null;
  }
}

class DisassociateVPCFromHostedZoneResponse {
  public ?ChangeInfo $change_info;

  public function __construct(shape(
    ?'change_info' => ?ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $s['change_info'] ?? null;
  }
}

type EnableSNI = bool;

type ErrorMessage = string;

type ErrorMessages = vec<ErrorMessage>;

type EvaluationPeriods = int;

type FailureThreshold = int;

type FullyQualifiedDomainName = string;

class GeoLocation {
  public ?GeoLocationContinentCode $continent_code;
  public ?GeoLocationCountryCode $country_code;
  public ?GeoLocationSubdivisionCode $subdivision_code;

  public function __construct(shape(
    ?'continent_code' => ?GeoLocationContinentCode,
    ?'country_code' => ?GeoLocationCountryCode,
    ?'subdivision_code' => ?GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->continent_code = $s['continent_code'] ?? '';
    $this->country_code = $s['country_code'] ?? '';
    $this->subdivision_code = $s['subdivision_code'] ?? '';
  }
}

type GeoLocationContinentCode = string;

type GeoLocationContinentName = string;

type GeoLocationCountryCode = string;

type GeoLocationCountryName = string;

class GeoLocationDetails {
  public ?GeoLocationContinentCode $continent_code;
  public ?GeoLocationContinentName $continent_name;
  public ?GeoLocationCountryCode $country_code;
  public ?GeoLocationCountryName $country_name;
  public ?GeoLocationSubdivisionCode $subdivision_code;
  public ?GeoLocationSubdivisionName $subdivision_name;

  public function __construct(shape(
    ?'continent_code' => ?GeoLocationContinentCode,
    ?'continent_name' => ?GeoLocationContinentName,
    ?'country_code' => ?GeoLocationCountryCode,
    ?'country_name' => ?GeoLocationCountryName,
    ?'subdivision_code' => ?GeoLocationSubdivisionCode,
    ?'subdivision_name' => ?GeoLocationSubdivisionName,
  ) $s = shape()) {
    $this->continent_code = $s['continent_code'] ?? '';
    $this->continent_name = $s['continent_name'] ?? '';
    $this->country_code = $s['country_code'] ?? '';
    $this->country_name = $s['country_name'] ?? '';
    $this->subdivision_code = $s['subdivision_code'] ?? '';
    $this->subdivision_name = $s['subdivision_name'] ?? '';
  }
}

type GeoLocationDetailsList = vec<GeoLocationDetails>;

type GeoLocationSubdivisionCode = string;

type GeoLocationSubdivisionName = string;

class GetAccountLimitRequest {
  public ?AccountLimitType $type;

  public function __construct(shape(
    ?'type' => ?AccountLimitType,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

class GetAccountLimitResponse {
  public ?UsageCount $count;
  public ?AccountLimit $limit;

  public function __construct(shape(
    ?'count' => ?UsageCount,
    ?'limit' => ?AccountLimit,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->limit = $s['limit'] ?? null;
  }
}

class GetChangeRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetChangeResponse {
  public ?ChangeInfo $change_info;

  public function __construct(shape(
    ?'change_info' => ?ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $s['change_info'] ?? null;
  }
}

class GetCheckerIpRangesRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetCheckerIpRangesResponse {
  public ?CheckerIpRanges $checker_ip_ranges;

  public function __construct(shape(
    ?'checker_ip_ranges' => ?CheckerIpRanges,
  ) $s = shape()) {
    $this->checker_ip_ranges = $s['checker_ip_ranges'] ?? vec[];
  }
}

class GetGeoLocationRequest {
  public ?GeoLocationContinentCode $continent_code;
  public ?GeoLocationCountryCode $country_code;
  public ?GeoLocationSubdivisionCode $subdivision_code;

  public function __construct(shape(
    ?'continent_code' => ?GeoLocationContinentCode,
    ?'country_code' => ?GeoLocationCountryCode,
    ?'subdivision_code' => ?GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->continent_code = $s['continent_code'] ?? '';
    $this->country_code = $s['country_code'] ?? '';
    $this->subdivision_code = $s['subdivision_code'] ?? '';
  }
}

class GetGeoLocationResponse {
  public ?GeoLocationDetails $geo_location_details;

  public function __construct(shape(
    ?'geo_location_details' => ?GeoLocationDetails,
  ) $s = shape()) {
    $this->geo_location_details = $s['geo_location_details'] ?? null;
  }
}

class GetHealthCheckCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetHealthCheckCountResponse {
  public ?HealthCheckCount $health_check_count;

  public function __construct(shape(
    ?'health_check_count' => ?HealthCheckCount,
  ) $s = shape()) {
    $this->health_check_count = $s['health_check_count'] ?? 0;
  }
}

class GetHealthCheckLastFailureReasonRequest {
  public ?HealthCheckId $health_check_id;

  public function __construct(shape(
    ?'health_check_id' => ?HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $s['health_check_id'] ?? '';
  }
}

class GetHealthCheckLastFailureReasonResponse {
  public ?HealthCheckObservations $health_check_observations;

  public function __construct(shape(
    ?'health_check_observations' => ?HealthCheckObservations,
  ) $s = shape()) {
    $this->health_check_observations = $s['health_check_observations'] ?? vec[];
  }
}

class GetHealthCheckRequest {
  public ?HealthCheckId $health_check_id;

  public function __construct(shape(
    ?'health_check_id' => ?HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $s['health_check_id'] ?? '';
  }
}

class GetHealthCheckResponse {
  public ?HealthCheck $health_check;

  public function __construct(shape(
    ?'health_check' => ?HealthCheck,
  ) $s = shape()) {
    $this->health_check = $s['health_check'] ?? null;
  }
}

class GetHealthCheckStatusRequest {
  public ?HealthCheckId $health_check_id;

  public function __construct(shape(
    ?'health_check_id' => ?HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $s['health_check_id'] ?? '';
  }
}

class GetHealthCheckStatusResponse {
  public ?HealthCheckObservations $health_check_observations;

  public function __construct(shape(
    ?'health_check_observations' => ?HealthCheckObservations,
  ) $s = shape()) {
    $this->health_check_observations = $s['health_check_observations'] ?? vec[];
  }
}

class GetHostedZoneCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetHostedZoneCountResponse {
  public ?HostedZoneCount $hosted_zone_count;

  public function __construct(shape(
    ?'hosted_zone_count' => ?HostedZoneCount,
  ) $s = shape()) {
    $this->hosted_zone_count = $s['hosted_zone_count'] ?? 0;
  }
}

class GetHostedZoneLimitRequest {
  public ?ResourceId $hosted_zone_id;
  public ?HostedZoneLimitType $type;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'type' => ?HostedZoneLimitType,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class GetHostedZoneLimitResponse {
  public ?UsageCount $count;
  public ?HostedZoneLimit $limit;

  public function __construct(shape(
    ?'count' => ?UsageCount,
    ?'limit' => ?HostedZoneLimit,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->limit = $s['limit'] ?? null;
  }
}

class GetHostedZoneRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetHostedZoneResponse {
  public ?DelegationSet $delegation_set;
  public ?HostedZone $hosted_zone;
  public ?VPCs $vp_cs;

  public function __construct(shape(
    ?'delegation_set' => ?DelegationSet,
    ?'hosted_zone' => ?HostedZone,
    ?'vp_cs' => ?VPCs,
  ) $s = shape()) {
    $this->delegation_set = $s['delegation_set'] ?? null;
    $this->hosted_zone = $s['hosted_zone'] ?? null;
    $this->vp_cs = $s['vp_cs'] ?? vec[];
  }
}

class GetQueryLoggingConfigRequest {
  public ?QueryLoggingConfigId $id;

  public function __construct(shape(
    ?'id' => ?QueryLoggingConfigId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetQueryLoggingConfigResponse {
  public ?QueryLoggingConfig $query_logging_config;

  public function __construct(shape(
    ?'query_logging_config' => ?QueryLoggingConfig,
  ) $s = shape()) {
    $this->query_logging_config = $s['query_logging_config'] ?? null;
  }
}

class GetReusableDelegationSetLimitRequest {
  public ?ResourceId $delegation_set_id;
  public ?ReusableDelegationSetLimitType $type;

  public function __construct(shape(
    ?'delegation_set_id' => ?ResourceId,
    ?'type' => ?ReusableDelegationSetLimitType,
  ) $s = shape()) {
    $this->delegation_set_id = $s['delegation_set_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class GetReusableDelegationSetLimitResponse {
  public ?UsageCount $count;
  public ?ReusableDelegationSetLimit $limit;

  public function __construct(shape(
    ?'count' => ?UsageCount,
    ?'limit' => ?ReusableDelegationSetLimit,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->limit = $s['limit'] ?? null;
  }
}

class GetReusableDelegationSetRequest {
  public ?ResourceId $id;

  public function __construct(shape(
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetReusableDelegationSetResponse {
  public ?DelegationSet $delegation_set;

  public function __construct(shape(
    ?'delegation_set' => ?DelegationSet,
  ) $s = shape()) {
    $this->delegation_set = $s['delegation_set'] ?? null;
  }
}

class GetTrafficPolicyInstanceCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetTrafficPolicyInstanceCountResponse {
  public ?TrafficPolicyInstanceCount $traffic_policy_instance_count;

  public function __construct(shape(
    ?'traffic_policy_instance_count' => ?TrafficPolicyInstanceCount,
  ) $s = shape()) {
    $this->traffic_policy_instance_count = $s['traffic_policy_instance_count'] ?? 0;
  }
}

class GetTrafficPolicyInstanceRequest {
  public ?TrafficPolicyInstanceId $id;

  public function __construct(shape(
    ?'id' => ?TrafficPolicyInstanceId,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
  }
}

class GetTrafficPolicyInstanceResponse {
  public ?TrafficPolicyInstance $traffic_policy_instance;

  public function __construct(shape(
    ?'traffic_policy_instance' => ?TrafficPolicyInstance,
  ) $s = shape()) {
    $this->traffic_policy_instance = $s['traffic_policy_instance'] ?? null;
  }
}

class GetTrafficPolicyRequest {
  public ?TrafficPolicyId $id;
  public ?TrafficPolicyVersion $version;

  public function __construct(shape(
    ?'id' => ?TrafficPolicyId,
    ?'version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class GetTrafficPolicyResponse {
  public ?TrafficPolicy $traffic_policy;

  public function __construct(shape(
    ?'traffic_policy' => ?TrafficPolicy,
  ) $s = shape()) {
    $this->traffic_policy = $s['traffic_policy'] ?? null;
  }
}

class HealthCheck {
  public ?HealthCheckNonce $caller_reference;
  public ?CloudWatchAlarmConfiguration $cloud_watch_alarm_configuration;
  public ?HealthCheckConfig $health_check_config;
  public ?HealthCheckVersion $health_check_version;
  public ?HealthCheckId $id;
  public ?LinkedService $linked_service;

  public function __construct(shape(
    ?'caller_reference' => ?HealthCheckNonce,
    ?'cloud_watch_alarm_configuration' => ?CloudWatchAlarmConfiguration,
    ?'health_check_config' => ?HealthCheckConfig,
    ?'health_check_version' => ?HealthCheckVersion,
    ?'id' => ?HealthCheckId,
    ?'linked_service' => ?LinkedService,
  ) $s = shape()) {
    $this->caller_reference = $s['caller_reference'] ?? '';
    $this->cloud_watch_alarm_configuration = $s['cloud_watch_alarm_configuration'] ?? null;
    $this->health_check_config = $s['health_check_config'] ?? null;
    $this->health_check_version = $s['health_check_version'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->linked_service = $s['linked_service'] ?? null;
  }
}

class HealthCheckAlreadyExists {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class HealthCheckConfig {
  public ?AlarmIdentifier $alarm_identifier;
  public ?ChildHealthCheckList $child_health_checks;
  public ?Disabled $disabled;
  public ?EnableSNI $enable_sni;
  public ?FailureThreshold $failure_threshold;
  public ?FullyQualifiedDomainName $fully_qualified_domain_name;
  public ?HealthThreshold $health_threshold;
  public ?IPAddress $ip_address;
  public ?InsufficientDataHealthStatus $insufficient_data_health_status;
  public ?Inverted $inverted;
  public ?MeasureLatency $measure_latency;
  public ?Port $port;
  public ?HealthCheckRegionList $regions;
  public ?RequestInterval $request_interval;
  public ?ResourcePath $resource_path;
  public ?SearchString $search_string;
  public ?HealthCheckType $type;

  public function __construct(shape(
    ?'alarm_identifier' => ?AlarmIdentifier,
    ?'child_health_checks' => ?ChildHealthCheckList,
    ?'disabled' => ?Disabled,
    ?'enable_sni' => ?EnableSNI,
    ?'failure_threshold' => ?FailureThreshold,
    ?'fully_qualified_domain_name' => ?FullyQualifiedDomainName,
    ?'health_threshold' => ?HealthThreshold,
    ?'ip_address' => ?IPAddress,
    ?'insufficient_data_health_status' => ?InsufficientDataHealthStatus,
    ?'inverted' => ?Inverted,
    ?'measure_latency' => ?MeasureLatency,
    ?'port' => ?Port,
    ?'regions' => ?HealthCheckRegionList,
    ?'request_interval' => ?RequestInterval,
    ?'resource_path' => ?ResourcePath,
    ?'search_string' => ?SearchString,
    ?'type' => ?HealthCheckType,
  ) $s = shape()) {
    $this->alarm_identifier = $s['alarm_identifier'] ?? null;
    $this->child_health_checks = $s['child_health_checks'] ?? vec[];
    $this->disabled = $s['disabled'] ?? false;
    $this->enable_sni = $s['enable_sni'] ?? false;
    $this->failure_threshold = $s['failure_threshold'] ?? 0;
    $this->fully_qualified_domain_name = $s['fully_qualified_domain_name'] ?? '';
    $this->health_threshold = $s['health_threshold'] ?? 0;
    $this->ip_address = $s['ip_address'] ?? '';
    $this->insufficient_data_health_status = $s['insufficient_data_health_status'] ?? '';
    $this->inverted = $s['inverted'] ?? false;
    $this->measure_latency = $s['measure_latency'] ?? false;
    $this->port = $s['port'] ?? 0;
    $this->regions = $s['regions'] ?? vec[];
    $this->request_interval = $s['request_interval'] ?? 0;
    $this->resource_path = $s['resource_path'] ?? '';
    $this->search_string = $s['search_string'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type HealthCheckCount = int;

type HealthCheckId = string;

class HealthCheckInUse {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type HealthCheckNonce = string;

class HealthCheckObservation {
  public ?IPAddress $ip_address;
  public ?HealthCheckRegion $region;
  public ?StatusReport $status_report;

  public function __construct(shape(
    ?'ip_address' => ?IPAddress,
    ?'region' => ?HealthCheckRegion,
    ?'status_report' => ?StatusReport,
  ) $s = shape()) {
    $this->ip_address = $s['ip_address'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->status_report = $s['status_report'] ?? null;
  }
}

type HealthCheckObservations = vec<HealthCheckObservation>;

type HealthCheckRegion = string;

type HealthCheckRegionList = vec<HealthCheckRegion>;

type HealthCheckType = string;

type HealthCheckVersion = int;

class HealthCheckVersionMismatch {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type HealthChecks = vec<HealthCheck>;

type HealthThreshold = int;

class HostedZone {
  public ?Nonce $caller_reference;
  public ?HostedZoneConfig $config;
  public ?ResourceId $id;
  public ?LinkedService $linked_service;
  public ?DNSName $name;
  public ?HostedZoneRRSetCount $resource_record_set_count;

  public function __construct(shape(
    ?'caller_reference' => ?Nonce,
    ?'config' => ?HostedZoneConfig,
    ?'id' => ?ResourceId,
    ?'linked_service' => ?LinkedService,
    ?'name' => ?DNSName,
    ?'resource_record_set_count' => ?HostedZoneRRSetCount,
  ) $s = shape()) {
    $this->caller_reference = $s['caller_reference'] ?? '';
    $this->config = $s['config'] ?? null;
    $this->id = $s['id'] ?? '';
    $this->linked_service = $s['linked_service'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_record_set_count = $s['resource_record_set_count'] ?? 0;
  }
}

class HostedZoneAlreadyExists {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class HostedZoneConfig {
  public ?ResourceDescription $comment;
  public ?IsPrivateZone $private_zone;

  public function __construct(shape(
    ?'comment' => ?ResourceDescription,
    ?'private_zone' => ?IsPrivateZone,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->private_zone = $s['private_zone'] ?? false;
  }
}

type HostedZoneCount = int;

class HostedZoneLimit {
  public ?HostedZoneLimitType $type;
  public ?LimitValue $value;

  public function __construct(shape(
    ?'type' => ?HostedZoneLimitType,
    ?'value' => ?LimitValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? 0;
  }
}

type HostedZoneLimitType = string;

class HostedZoneNotEmpty {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class HostedZoneNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class HostedZoneNotPrivate {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type HostedZoneRRSetCount = int;

type HostedZones = vec<HostedZone>;

type IPAddress = string;

type IPAddressCidr = string;

class IncompatibleVersion {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InsufficientCloudWatchLogsResourcePolicy {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type InsufficientDataHealthStatus = string;

class InvalidArgument {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidChangeBatch {
  public ?ErrorMessage $message;
  public ?ErrorMessages $messages;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
    ?'messages' => ?ErrorMessages,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->messages = $s['messages'] ?? vec[];
  }
}

class InvalidDomainName {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInput {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPaginationToken {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidTrafficPolicyDocument {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidVPCId {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Inverted = bool;

type IsPrivateZone = bool;

class LastVPCAssociation {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LimitValue = int;

class LimitsExceeded {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LinkedService {
  public ?ResourceDescription $description;
  public ?ServicePrincipal $service_principal;

  public function __construct(shape(
    ?'description' => ?ResourceDescription,
    ?'service_principal' => ?ServicePrincipal,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->service_principal = $s['service_principal'] ?? '';
  }
}

class ListGeoLocationsRequest {
  public ?PageMaxItems $max_items;
  public ?GeoLocationContinentCode $start_continent_code;
  public ?GeoLocationCountryCode $start_country_code;
  public ?GeoLocationSubdivisionCode $start_subdivision_code;

  public function __construct(shape(
    ?'max_items' => ?PageMaxItems,
    ?'start_continent_code' => ?GeoLocationContinentCode,
    ?'start_country_code' => ?GeoLocationCountryCode,
    ?'start_subdivision_code' => ?GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->max_items = $s['max_items'] ?? '';
    $this->start_continent_code = $s['start_continent_code'] ?? '';
    $this->start_country_code = $s['start_country_code'] ?? '';
    $this->start_subdivision_code = $s['start_subdivision_code'] ?? '';
  }
}

class ListGeoLocationsResponse {
  public ?GeoLocationDetailsList $geo_location_details_list;
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?GeoLocationContinentCode $next_continent_code;
  public ?GeoLocationCountryCode $next_country_code;
  public ?GeoLocationSubdivisionCode $next_subdivision_code;

  public function __construct(shape(
    ?'geo_location_details_list' => ?GeoLocationDetailsList,
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'next_continent_code' => ?GeoLocationContinentCode,
    ?'next_country_code' => ?GeoLocationCountryCode,
    ?'next_subdivision_code' => ?GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->geo_location_details_list = $s['geo_location_details_list'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->next_continent_code = $s['next_continent_code'] ?? '';
    $this->next_country_code = $s['next_country_code'] ?? '';
    $this->next_subdivision_code = $s['next_subdivision_code'] ?? '';
  }
}

class ListHealthChecksRequest {
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;

  public function __construct(shape(
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
  }
}

class ListHealthChecksResponse {
  public ?HealthChecks $health_checks;
  public ?PageTruncated $is_truncated;
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;
  public ?PageMarker $next_marker;

  public function __construct(shape(
    ?'health_checks' => ?HealthChecks,
    ?'is_truncated' => ?PageTruncated,
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
    ?'next_marker' => ?PageMarker,
  ) $s = shape()) {
    $this->health_checks = $s['health_checks'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListHostedZonesByNameRequest {
  public ?DNSName $dns_name;
  public ?ResourceId $hosted_zone_id;
  public ?PageMaxItems $max_items;

  public function __construct(shape(
    ?'dns_name' => ?DNSName,
    ?'hosted_zone_id' => ?ResourceId,
    ?'max_items' => ?PageMaxItems,
  ) $s = shape()) {
    $this->dns_name = $s['dns_name'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
  }
}

class ListHostedZonesByNameResponse {
  public ?DNSName $dns_name;
  public ?ResourceId $hosted_zone_id;
  public ?HostedZones $hosted_zones;
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?DNSName $next_dns_name;
  public ?ResourceId $next_hosted_zone_id;

  public function __construct(shape(
    ?'dns_name' => ?DNSName,
    ?'hosted_zone_id' => ?ResourceId,
    ?'hosted_zones' => ?HostedZones,
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'next_dns_name' => ?DNSName,
    ?'next_hosted_zone_id' => ?ResourceId,
  ) $s = shape()) {
    $this->dns_name = $s['dns_name'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->hosted_zones = $s['hosted_zones'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->next_dns_name = $s['next_dns_name'] ?? '';
    $this->next_hosted_zone_id = $s['next_hosted_zone_id'] ?? '';
  }
}

class ListHostedZonesRequest {
  public ?ResourceId $delegation_set_id;
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;

  public function __construct(shape(
    ?'delegation_set_id' => ?ResourceId,
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
  ) $s = shape()) {
    $this->delegation_set_id = $s['delegation_set_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
  }
}

class ListHostedZonesResponse {
  public ?HostedZones $hosted_zones;
  public ?PageTruncated $is_truncated;
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;
  public ?PageMarker $next_marker;

  public function __construct(shape(
    ?'hosted_zones' => ?HostedZones,
    ?'is_truncated' => ?PageTruncated,
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
    ?'next_marker' => ?PageMarker,
  ) $s = shape()) {
    $this->hosted_zones = $s['hosted_zones'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListQueryLoggingConfigsRequest {
  public ?ResourceId $hosted_zone_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListQueryLoggingConfigsResponse {
  public ?PaginationToken $next_token;
  public ?QueryLoggingConfigs $query_logging_configs;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'query_logging_configs' => ?QueryLoggingConfigs,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->query_logging_configs = $s['query_logging_configs'] ?? vec[];
  }
}

class ListResourceRecordSetsRequest {
  public ?ResourceId $hosted_zone_id;
  public ?PageMaxItems $max_items;
  public ?ResourceRecordSetIdentifier $start_record_identifier;
  public ?DNSName $start_record_name;
  public ?RRType $start_record_type;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'max_items' => ?PageMaxItems,
    ?'start_record_identifier' => ?ResourceRecordSetIdentifier,
    ?'start_record_name' => ?DNSName,
    ?'start_record_type' => ?RRType,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->start_record_identifier = $s['start_record_identifier'] ?? '';
    $this->start_record_name = $s['start_record_name'] ?? '';
    $this->start_record_type = $s['start_record_type'] ?? '';
  }
}

class ListResourceRecordSetsResponse {
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?ResourceRecordSetIdentifier $next_record_identifier;
  public ?DNSName $next_record_name;
  public ?RRType $next_record_type;
  public ?ResourceRecordSets $resource_record_sets;

  public function __construct(shape(
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'next_record_identifier' => ?ResourceRecordSetIdentifier,
    ?'next_record_name' => ?DNSName,
    ?'next_record_type' => ?RRType,
    ?'resource_record_sets' => ?ResourceRecordSets,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->next_record_identifier = $s['next_record_identifier'] ?? '';
    $this->next_record_name = $s['next_record_name'] ?? '';
    $this->next_record_type = $s['next_record_type'] ?? '';
    $this->resource_record_sets = $s['resource_record_sets'] ?? vec[];
  }
}

class ListReusableDelegationSetsRequest {
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;

  public function __construct(shape(
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
  }
}

class ListReusableDelegationSetsResponse {
  public ?DelegationSets $delegation_sets;
  public ?PageTruncated $is_truncated;
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;
  public ?PageMarker $next_marker;

  public function __construct(shape(
    ?'delegation_sets' => ?DelegationSets,
    ?'is_truncated' => ?PageTruncated,
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
    ?'next_marker' => ?PageMarker,
  ) $s = shape()) {
    $this->delegation_sets = $s['delegation_sets'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?TagResourceId $resource_id;
  public ?TagResourceType $resource_type;

  public function __construct(shape(
    ?'resource_id' => ?TagResourceId,
    ?'resource_type' => ?TagResourceType,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?ResourceTagSet $resource_tag_set;

  public function __construct(shape(
    ?'resource_tag_set' => ?ResourceTagSet,
  ) $s = shape()) {
    $this->resource_tag_set = $s['resource_tag_set'] ?? null;
  }
}

class ListTagsForResourcesRequest {
  public ?TagResourceIdList $resource_ids;
  public ?TagResourceType $resource_type;

  public function __construct(shape(
    ?'resource_ids' => ?TagResourceIdList,
    ?'resource_type' => ?TagResourceType,
  ) $s = shape()) {
    $this->resource_ids = $s['resource_ids'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListTagsForResourcesResponse {
  public ?ResourceTagSetList $resource_tag_sets;

  public function __construct(shape(
    ?'resource_tag_sets' => ?ResourceTagSetList,
  ) $s = shape()) {
    $this->resource_tag_sets = $s['resource_tag_sets'] ?? vec[];
  }
}

class ListTrafficPoliciesRequest {
  public ?PageMaxItems $max_items;
  public ?TrafficPolicyId $traffic_policy_id_marker;

  public function __construct(shape(
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_id_marker' => ?TrafficPolicyId,
  ) $s = shape()) {
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_id_marker = $s['traffic_policy_id_marker'] ?? '';
  }
}

class ListTrafficPoliciesResponse {
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?TrafficPolicyId $traffic_policy_id_marker;
  public ?TrafficPolicySummaries $traffic_policy_summaries;

  public function __construct(shape(
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_id_marker' => ?TrafficPolicyId,
    ?'traffic_policy_summaries' => ?TrafficPolicySummaries,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_id_marker = $s['traffic_policy_id_marker'] ?? '';
    $this->traffic_policy_summaries = $s['traffic_policy_summaries'] ?? vec[];
  }
}

class ListTrafficPolicyInstancesByHostedZoneRequest {
  public ?ResourceId $hosted_zone_id;
  public ?PageMaxItems $max_items;
  public ?DNSName $traffic_policy_instance_name_marker;
  public ?RRType $traffic_policy_instance_type_marker;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_instance_name_marker' => ?DNSName,
    ?'traffic_policy_instance_type_marker' => ?RRType,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_instance_name_marker = $s['traffic_policy_instance_name_marker'] ?? '';
    $this->traffic_policy_instance_type_marker = $s['traffic_policy_instance_type_marker'] ?? '';
  }
}

class ListTrafficPolicyInstancesByHostedZoneResponse {
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?DNSName $traffic_policy_instance_name_marker;
  public ?RRType $traffic_policy_instance_type_marker;
  public ?TrafficPolicyInstances $traffic_policy_instances;

  public function __construct(shape(
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_instance_name_marker' => ?DNSName,
    ?'traffic_policy_instance_type_marker' => ?RRType,
    ?'traffic_policy_instances' => ?TrafficPolicyInstances,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_instance_name_marker = $s['traffic_policy_instance_name_marker'] ?? '';
    $this->traffic_policy_instance_type_marker = $s['traffic_policy_instance_type_marker'] ?? '';
    $this->traffic_policy_instances = $s['traffic_policy_instances'] ?? vec[];
  }
}

class ListTrafficPolicyInstancesByPolicyRequest {
  public ?ResourceId $hosted_zone_id_marker;
  public ?PageMaxItems $max_items;
  public ?TrafficPolicyId $traffic_policy_id;
  public ?DNSName $traffic_policy_instance_name_marker;
  public ?RRType $traffic_policy_instance_type_marker;
  public ?TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
    ?'hosted_zone_id_marker' => ?ResourceId,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_id' => ?TrafficPolicyId,
    ?'traffic_policy_instance_name_marker' => ?DNSName,
    ?'traffic_policy_instance_type_marker' => ?RRType,
    ?'traffic_policy_version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $s['hosted_zone_id_marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_id = $s['traffic_policy_id'] ?? '';
    $this->traffic_policy_instance_name_marker = $s['traffic_policy_instance_name_marker'] ?? '';
    $this->traffic_policy_instance_type_marker = $s['traffic_policy_instance_type_marker'] ?? '';
    $this->traffic_policy_version = $s['traffic_policy_version'] ?? 0;
  }
}

class ListTrafficPolicyInstancesByPolicyResponse {
  public ?ResourceId $hosted_zone_id_marker;
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?DNSName $traffic_policy_instance_name_marker;
  public ?RRType $traffic_policy_instance_type_marker;
  public ?TrafficPolicyInstances $traffic_policy_instances;

  public function __construct(shape(
    ?'hosted_zone_id_marker' => ?ResourceId,
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_instance_name_marker' => ?DNSName,
    ?'traffic_policy_instance_type_marker' => ?RRType,
    ?'traffic_policy_instances' => ?TrafficPolicyInstances,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $s['hosted_zone_id_marker'] ?? '';
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_instance_name_marker = $s['traffic_policy_instance_name_marker'] ?? '';
    $this->traffic_policy_instance_type_marker = $s['traffic_policy_instance_type_marker'] ?? '';
    $this->traffic_policy_instances = $s['traffic_policy_instances'] ?? vec[];
  }
}

class ListTrafficPolicyInstancesRequest {
  public ?ResourceId $hosted_zone_id_marker;
  public ?PageMaxItems $max_items;
  public ?DNSName $traffic_policy_instance_name_marker;
  public ?RRType $traffic_policy_instance_type_marker;

  public function __construct(shape(
    ?'hosted_zone_id_marker' => ?ResourceId,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_instance_name_marker' => ?DNSName,
    ?'traffic_policy_instance_type_marker' => ?RRType,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $s['hosted_zone_id_marker'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_instance_name_marker = $s['traffic_policy_instance_name_marker'] ?? '';
    $this->traffic_policy_instance_type_marker = $s['traffic_policy_instance_type_marker'] ?? '';
  }
}

class ListTrafficPolicyInstancesResponse {
  public ?ResourceId $hosted_zone_id_marker;
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?DNSName $traffic_policy_instance_name_marker;
  public ?RRType $traffic_policy_instance_type_marker;
  public ?TrafficPolicyInstances $traffic_policy_instances;

  public function __construct(shape(
    ?'hosted_zone_id_marker' => ?ResourceId,
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_instance_name_marker' => ?DNSName,
    ?'traffic_policy_instance_type_marker' => ?RRType,
    ?'traffic_policy_instances' => ?TrafficPolicyInstances,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $s['hosted_zone_id_marker'] ?? '';
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_instance_name_marker = $s['traffic_policy_instance_name_marker'] ?? '';
    $this->traffic_policy_instance_type_marker = $s['traffic_policy_instance_type_marker'] ?? '';
    $this->traffic_policy_instances = $s['traffic_policy_instances'] ?? vec[];
  }
}

class ListTrafficPolicyVersionsRequest {
  public ?TrafficPolicyId $id;
  public ?PageMaxItems $max_items;
  public ?TrafficPolicyVersionMarker $traffic_policy_version_marker;

  public function __construct(shape(
    ?'id' => ?TrafficPolicyId,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policy_version_marker' => ?TrafficPolicyVersionMarker,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policy_version_marker = $s['traffic_policy_version_marker'] ?? '';
  }
}

class ListTrafficPolicyVersionsResponse {
  public ?PageTruncated $is_truncated;
  public ?PageMaxItems $max_items;
  public ?TrafficPolicies $traffic_policies;
  public ?TrafficPolicyVersionMarker $traffic_policy_version_marker;

  public function __construct(shape(
    ?'is_truncated' => ?PageTruncated,
    ?'max_items' => ?PageMaxItems,
    ?'traffic_policies' => ?TrafficPolicies,
    ?'traffic_policy_version_marker' => ?TrafficPolicyVersionMarker,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->max_items = $s['max_items'] ?? '';
    $this->traffic_policies = $s['traffic_policies'] ?? vec[];
    $this->traffic_policy_version_marker = $s['traffic_policy_version_marker'] ?? '';
  }
}

class ListVPCAssociationAuthorizationsRequest {
  public ?ResourceId $hosted_zone_id;
  public ?MaxResults $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->max_results = $s['max_results'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListVPCAssociationAuthorizationsResponse {
  public ?ResourceId $hosted_zone_id;
  public ?PaginationToken $next_token;
  public ?VPCs $vp_cs;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'next_token' => ?PaginationToken,
    ?'vp_cs' => ?VPCs,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->vp_cs = $s['vp_cs'] ?? vec[];
  }
}

type MaxResults = string;

type MeasureLatency = bool;

type Message = string;

type MetricName = string;

type Nameserver = string;

type Namespace = string;

class NoSuchChange {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchCloudWatchLogsLogGroup {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchDelegationSet {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchGeoLocation {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchHealthCheck {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchHostedZone {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchQueryLoggingConfig {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchTrafficPolicy {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NoSuchTrafficPolicyInstance {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Nonce = string;

class NotAuthorizedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PageMarker = string;

type PageMaxItems = string;

type PageTruncated = bool;

type PaginationToken = string;

type Period = int;

type Port = int;

class PriorRequestNotComplete {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PublicZoneVPCAssociation {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class QueryLoggingConfig {
  public ?CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public ?ResourceId $hosted_zone_id;
  public ?QueryLoggingConfigId $id;

  public function __construct(shape(
    ?'cloud_watch_logs_log_group_arn' => ?CloudWatchLogsLogGroupArn,
    ?'hosted_zone_id' => ?ResourceId,
    ?'id' => ?QueryLoggingConfigId,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $s['cloud_watch_logs_log_group_arn'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class QueryLoggingConfigAlreadyExists {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type QueryLoggingConfigId = string;

type QueryLoggingConfigs = vec<QueryLoggingConfig>;

type RData = string;

type RRType = string;

type RecordData = vec<RecordDataEntry>;

type RecordDataEntry = string;

type RequestInterval = int;

type ResettableElementName = string;

type ResettableElementNameList = vec<ResettableElementName>;

type ResourceDescription = string;

type ResourceId = string;

type ResourcePath = string;

class ResourceRecord {
  public ?RData $value;

  public function __construct(shape(
    ?'value' => ?RData,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

class ResourceRecordSet {
  public ?AliasTarget $alias_target;
  public ?ResourceRecordSetFailover $failover;
  public ?GeoLocation $geo_location;
  public ?HealthCheckId $health_check_id;
  public ?ResourceRecordSetMultiValueAnswer $multi_value_answer;
  public ?DNSName $name;
  public ?ResourceRecordSetRegion $region;
  public ?ResourceRecords $resource_records;
  public ?ResourceRecordSetIdentifier $set_identifier;
  public ?TTL $ttl;
  public ?TrafficPolicyInstanceId $traffic_policy_instance_id;
  public ?RRType $type;
  public ?ResourceRecordSetWeight $weight;

  public function __construct(shape(
    ?'alias_target' => ?AliasTarget,
    ?'failover' => ?ResourceRecordSetFailover,
    ?'geo_location' => ?GeoLocation,
    ?'health_check_id' => ?HealthCheckId,
    ?'multi_value_answer' => ?ResourceRecordSetMultiValueAnswer,
    ?'name' => ?DNSName,
    ?'region' => ?ResourceRecordSetRegion,
    ?'resource_records' => ?ResourceRecords,
    ?'set_identifier' => ?ResourceRecordSetIdentifier,
    ?'ttl' => ?TTL,
    ?'traffic_policy_instance_id' => ?TrafficPolicyInstanceId,
    ?'type' => ?RRType,
    ?'weight' => ?ResourceRecordSetWeight,
  ) $s = shape()) {
    $this->alias_target = $s['alias_target'] ?? null;
    $this->failover = $s['failover'] ?? '';
    $this->geo_location = $s['geo_location'] ?? null;
    $this->health_check_id = $s['health_check_id'] ?? '';
    $this->multi_value_answer = $s['multi_value_answer'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->resource_records = $s['resource_records'] ?? vec[];
    $this->set_identifier = $s['set_identifier'] ?? '';
    $this->ttl = $s['ttl'] ?? 0;
    $this->traffic_policy_instance_id = $s['traffic_policy_instance_id'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->weight = $s['weight'] ?? 0;
  }
}

type ResourceRecordSetFailover = string;

type ResourceRecordSetIdentifier = string;

type ResourceRecordSetMultiValueAnswer = bool;

type ResourceRecordSetRegion = string;

type ResourceRecordSetWeight = int;

type ResourceRecordSets = vec<ResourceRecordSet>;

type ResourceRecords = vec<ResourceRecord>;

class ResourceTagSet {
  public ?TagResourceId $resource_id;
  public ?TagResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_id' => ?TagResourceId,
    ?'resource_type' => ?TagResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ResourceTagSetList = vec<ResourceTagSet>;

type ResourceURI = string;

class ReusableDelegationSetLimit {
  public ?ReusableDelegationSetLimitType $type;
  public ?LimitValue $value;

  public function __construct(shape(
    ?'type' => ?ReusableDelegationSetLimitType,
    ?'value' => ?LimitValue,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? 0;
  }
}

type ReusableDelegationSetLimitType = string;

type SearchString = string;

type ServicePrincipal = string;

type Statistic = string;

type Status = string;

class StatusReport {
  public ?TimeStamp $checked_time;
  public ?Status $status;

  public function __construct(shape(
    ?'checked_time' => ?TimeStamp,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->checked_time = $s['checked_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type SubnetMask = string;

type TTL = int;

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

type TagResourceId = string;

type TagResourceIdList = vec<TagResourceId>;

type TagResourceType = string;

type TagValue = string;

class TestDNSAnswerRequest {
  public ?IPAddress $edns_0_client_subnet_ip;
  public ?SubnetMask $edns_0_client_subnet_mask;
  public ?ResourceId $hosted_zone_id;
  public ?DNSName $record_name;
  public ?RRType $record_type;
  public ?IPAddress $resolver_ip;

  public function __construct(shape(
    ?'edns_0_client_subnet_ip' => ?IPAddress,
    ?'edns_0_client_subnet_mask' => ?SubnetMask,
    ?'hosted_zone_id' => ?ResourceId,
    ?'record_name' => ?DNSName,
    ?'record_type' => ?RRType,
    ?'resolver_ip' => ?IPAddress,
  ) $s = shape()) {
    $this->edns_0_client_subnet_ip = $s['edns_0_client_subnet_ip'] ?? '';
    $this->edns_0_client_subnet_mask = $s['edns_0_client_subnet_mask'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->record_name = $s['record_name'] ?? '';
    $this->record_type = $s['record_type'] ?? '';
    $this->resolver_ip = $s['resolver_ip'] ?? '';
  }
}

class TestDNSAnswerResponse {
  public ?Nameserver $nameserver;
  public ?TransportProtocol $protocol;
  public ?RecordData $record_data;
  public ?DNSName $record_name;
  public ?RRType $record_type;
  public ?DNSRCode $response_code;

  public function __construct(shape(
    ?'nameserver' => ?Nameserver,
    ?'protocol' => ?TransportProtocol,
    ?'record_data' => ?RecordData,
    ?'record_name' => ?DNSName,
    ?'record_type' => ?RRType,
    ?'response_code' => ?DNSRCode,
  ) $s = shape()) {
    $this->nameserver = $s['nameserver'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->record_data = $s['record_data'] ?? vec[];
    $this->record_name = $s['record_name'] ?? '';
    $this->record_type = $s['record_type'] ?? '';
    $this->response_code = $s['response_code'] ?? '';
  }
}

type Threshold = float;

class ThrottlingException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TimeStamp = int;

class TooManyHealthChecks {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyHostedZones {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyTrafficPolicies {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyTrafficPolicyInstances {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyTrafficPolicyVersionsForCurrentPolicy {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyVPCAssociationAuthorizations {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TrafficPolicies = vec<TrafficPolicy>;

class TrafficPolicy {
  public ?TrafficPolicyComment $comment;
  public ?TrafficPolicyDocument $document;
  public ?TrafficPolicyId $id;
  public ?TrafficPolicyName $name;
  public ?RRType $type;
  public ?TrafficPolicyVersion $version;

  public function __construct(shape(
    ?'comment' => ?TrafficPolicyComment,
    ?'document' => ?TrafficPolicyDocument,
    ?'id' => ?TrafficPolicyId,
    ?'name' => ?TrafficPolicyName,
    ?'type' => ?RRType,
    ?'version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->document = $s['document'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class TrafficPolicyAlreadyExists {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TrafficPolicyComment = string;

type TrafficPolicyDocument = string;

type TrafficPolicyId = string;

class TrafficPolicyInUse {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TrafficPolicyInstance {
  public ?ResourceId $hosted_zone_id;
  public ?TrafficPolicyInstanceId $id;
  public ?Message $message;
  public ?DNSName $name;
  public ?TrafficPolicyInstanceState $state;
  public ?TTL $ttl;
  public ?TrafficPolicyId $traffic_policy_id;
  public ?RRType $traffic_policy_type;
  public ?TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
    ?'hosted_zone_id' => ?ResourceId,
    ?'id' => ?TrafficPolicyInstanceId,
    ?'message' => ?Message,
    ?'name' => ?DNSName,
    ?'state' => ?TrafficPolicyInstanceState,
    ?'ttl' => ?TTL,
    ?'traffic_policy_id' => ?TrafficPolicyId,
    ?'traffic_policy_type' => ?RRType,
    ?'traffic_policy_version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->ttl = $s['ttl'] ?? 0;
    $this->traffic_policy_id = $s['traffic_policy_id'] ?? '';
    $this->traffic_policy_type = $s['traffic_policy_type'] ?? '';
    $this->traffic_policy_version = $s['traffic_policy_version'] ?? 0;
  }
}

class TrafficPolicyInstanceAlreadyExists {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type TrafficPolicyInstanceCount = int;

type TrafficPolicyInstanceId = string;

type TrafficPolicyInstanceState = string;

type TrafficPolicyInstances = vec<TrafficPolicyInstance>;

type TrafficPolicyName = string;

type TrafficPolicySummaries = vec<TrafficPolicySummary>;

class TrafficPolicySummary {
  public ?TrafficPolicyId $id;
  public ?TrafficPolicyVersion $latest_version;
  public ?TrafficPolicyName $name;
  public ?TrafficPolicyVersion $traffic_policy_count;
  public ?RRType $type;

  public function __construct(shape(
    ?'id' => ?TrafficPolicyId,
    ?'latest_version' => ?TrafficPolicyVersion,
    ?'name' => ?TrafficPolicyName,
    ?'traffic_policy_count' => ?TrafficPolicyVersion,
    ?'type' => ?RRType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->latest_version = $s['latest_version'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->traffic_policy_count = $s['traffic_policy_count'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type TrafficPolicyVersion = int;

type TrafficPolicyVersionMarker = string;

type TransportProtocol = string;

class UpdateHealthCheckRequest {
  public ?AlarmIdentifier $alarm_identifier;
  public ?ChildHealthCheckList $child_health_checks;
  public ?Disabled $disabled;
  public ?EnableSNI $enable_sni;
  public ?FailureThreshold $failure_threshold;
  public ?FullyQualifiedDomainName $fully_qualified_domain_name;
  public ?HealthCheckId $health_check_id;
  public ?HealthCheckVersion $health_check_version;
  public ?HealthThreshold $health_threshold;
  public ?IPAddress $ip_address;
  public ?InsufficientDataHealthStatus $insufficient_data_health_status;
  public ?Inverted $inverted;
  public ?Port $port;
  public ?HealthCheckRegionList $regions;
  public ?ResettableElementNameList $reset_elements;
  public ?ResourcePath $resource_path;
  public ?SearchString $search_string;

  public function __construct(shape(
    ?'alarm_identifier' => ?AlarmIdentifier,
    ?'child_health_checks' => ?ChildHealthCheckList,
    ?'disabled' => ?Disabled,
    ?'enable_sni' => ?EnableSNI,
    ?'failure_threshold' => ?FailureThreshold,
    ?'fully_qualified_domain_name' => ?FullyQualifiedDomainName,
    ?'health_check_id' => ?HealthCheckId,
    ?'health_check_version' => ?HealthCheckVersion,
    ?'health_threshold' => ?HealthThreshold,
    ?'ip_address' => ?IPAddress,
    ?'insufficient_data_health_status' => ?InsufficientDataHealthStatus,
    ?'inverted' => ?Inverted,
    ?'port' => ?Port,
    ?'regions' => ?HealthCheckRegionList,
    ?'reset_elements' => ?ResettableElementNameList,
    ?'resource_path' => ?ResourcePath,
    ?'search_string' => ?SearchString,
  ) $s = shape()) {
    $this->alarm_identifier = $s['alarm_identifier'] ?? null;
    $this->child_health_checks = $s['child_health_checks'] ?? vec[];
    $this->disabled = $s['disabled'] ?? false;
    $this->enable_sni = $s['enable_sni'] ?? false;
    $this->failure_threshold = $s['failure_threshold'] ?? 0;
    $this->fully_qualified_domain_name = $s['fully_qualified_domain_name'] ?? '';
    $this->health_check_id = $s['health_check_id'] ?? '';
    $this->health_check_version = $s['health_check_version'] ?? 0;
    $this->health_threshold = $s['health_threshold'] ?? 0;
    $this->ip_address = $s['ip_address'] ?? '';
    $this->insufficient_data_health_status = $s['insufficient_data_health_status'] ?? '';
    $this->inverted = $s['inverted'] ?? false;
    $this->port = $s['port'] ?? 0;
    $this->regions = $s['regions'] ?? vec[];
    $this->reset_elements = $s['reset_elements'] ?? vec[];
    $this->resource_path = $s['resource_path'] ?? '';
    $this->search_string = $s['search_string'] ?? '';
  }
}

class UpdateHealthCheckResponse {
  public ?HealthCheck $health_check;

  public function __construct(shape(
    ?'health_check' => ?HealthCheck,
  ) $s = shape()) {
    $this->health_check = $s['health_check'] ?? null;
  }
}

class UpdateHostedZoneCommentRequest {
  public ?ResourceDescription $comment;
  public ?ResourceId $id;

  public function __construct(shape(
    ?'comment' => ?ResourceDescription,
    ?'id' => ?ResourceId,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class UpdateHostedZoneCommentResponse {
  public ?HostedZone $hosted_zone;

  public function __construct(shape(
    ?'hosted_zone' => ?HostedZone,
  ) $s = shape()) {
    $this->hosted_zone = $s['hosted_zone'] ?? null;
  }
}

class UpdateTrafficPolicyCommentRequest {
  public ?TrafficPolicyComment $comment;
  public ?TrafficPolicyId $id;
  public ?TrafficPolicyVersion $version;

  public function __construct(shape(
    ?'comment' => ?TrafficPolicyComment,
    ?'id' => ?TrafficPolicyId,
    ?'version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->version = $s['version'] ?? 0;
  }
}

class UpdateTrafficPolicyCommentResponse {
  public ?TrafficPolicy $traffic_policy;

  public function __construct(shape(
    ?'traffic_policy' => ?TrafficPolicy,
  ) $s = shape()) {
    $this->traffic_policy = $s['traffic_policy'] ?? null;
  }
}

class UpdateTrafficPolicyInstanceRequest {
  public ?TrafficPolicyInstanceId $id;
  public ?TTL $ttl;
  public ?TrafficPolicyId $traffic_policy_id;
  public ?TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
    ?'id' => ?TrafficPolicyInstanceId,
    ?'ttl' => ?TTL,
    ?'traffic_policy_id' => ?TrafficPolicyId,
    ?'traffic_policy_version' => ?TrafficPolicyVersion,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->ttl = $s['ttl'] ?? 0;
    $this->traffic_policy_id = $s['traffic_policy_id'] ?? '';
    $this->traffic_policy_version = $s['traffic_policy_version'] ?? 0;
  }
}

class UpdateTrafficPolicyInstanceResponse {
  public ?TrafficPolicyInstance $traffic_policy_instance;

  public function __construct(shape(
    ?'traffic_policy_instance' => ?TrafficPolicyInstance,
  ) $s = shape()) {
    $this->traffic_policy_instance = $s['traffic_policy_instance'] ?? null;
  }
}

type UsageCount = int;

class VPC {
  public ?VPCId $vpc_id;
  public ?VPCRegion $vpc_region;

  public function __construct(shape(
    ?'vpc_id' => ?VPCId,
    ?'vpc_region' => ?VPCRegion,
  ) $s = shape()) {
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpc_region = $s['vpc_region'] ?? '';
  }
}

class VPCAssociationAuthorizationNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class VPCAssociationNotFound {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type VPCId = string;

type VPCRegion = string;

type VPCs = vec<VPC>;

