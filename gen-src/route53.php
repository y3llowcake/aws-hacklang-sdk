<?hh // strict
namespace slack\aws\route53;

interface Route 53 {
  public function AssociateVPCWithHostedZone(AssociateVPCWithHostedZoneRequest): Awaitable<Errors\Result<AssociateVPCWithHostedZoneResponse>>;
  public function ChangeResourceRecordSets(ChangeResourceRecordSetsRequest): Awaitable<Errors\Result<ChangeResourceRecordSetsResponse>>;
  public function ChangeTagsForResource(ChangeTagsForResourceRequest): Awaitable<Errors\Result<ChangeTagsForResourceResponse>>;
  public function CreateHealthCheck(CreateHealthCheckRequest): Awaitable<Errors\Result<CreateHealthCheckResponse>>;
  public function CreateHostedZone(CreateHostedZoneRequest): Awaitable<Errors\Result<CreateHostedZoneResponse>>;
  public function CreateQueryLoggingConfig(CreateQueryLoggingConfigRequest): Awaitable<Errors\Result<CreateQueryLoggingConfigResponse>>;
  public function CreateReusableDelegationSet(CreateReusableDelegationSetRequest): Awaitable<Errors\Result<CreateReusableDelegationSetResponse>>;
  public function CreateTrafficPolicy(CreateTrafficPolicyRequest): Awaitable<Errors\Result<CreateTrafficPolicyResponse>>;
  public function CreateTrafficPolicyInstance(CreateTrafficPolicyInstanceRequest): Awaitable<Errors\Result<CreateTrafficPolicyInstanceResponse>>;
  public function CreateTrafficPolicyVersion(CreateTrafficPolicyVersionRequest): Awaitable<Errors\Result<CreateTrafficPolicyVersionResponse>>;
  public function CreateVPCAssociationAuthorization(CreateVPCAssociationAuthorizationRequest): Awaitable<Errors\Result<CreateVPCAssociationAuthorizationResponse>>;
  public function DeleteHealthCheck(DeleteHealthCheckRequest): Awaitable<Errors\Result<DeleteHealthCheckResponse>>;
  public function DeleteHostedZone(DeleteHostedZoneRequest): Awaitable<Errors\Result<DeleteHostedZoneResponse>>;
  public function DeleteQueryLoggingConfig(DeleteQueryLoggingConfigRequest): Awaitable<Errors\Result<DeleteQueryLoggingConfigResponse>>;
  public function DeleteReusableDelegationSet(DeleteReusableDelegationSetRequest): Awaitable<Errors\Result<DeleteReusableDelegationSetResponse>>;
  public function DeleteTrafficPolicy(DeleteTrafficPolicyRequest): Awaitable<Errors\Result<DeleteTrafficPolicyResponse>>;
  public function DeleteTrafficPolicyInstance(DeleteTrafficPolicyInstanceRequest): Awaitable<Errors\Result<DeleteTrafficPolicyInstanceResponse>>;
  public function DeleteVPCAssociationAuthorization(DeleteVPCAssociationAuthorizationRequest): Awaitable<Errors\Result<DeleteVPCAssociationAuthorizationResponse>>;
  public function DisassociateVPCFromHostedZone(DisassociateVPCFromHostedZoneRequest): Awaitable<Errors\Result<DisassociateVPCFromHostedZoneResponse>>;
  public function GetAccountLimit(GetAccountLimitRequest): Awaitable<Errors\Result<GetAccountLimitResponse>>;
  public function GetChange(GetChangeRequest): Awaitable<Errors\Result<GetChangeResponse>>;
  public function GetCheckerIpRanges(GetCheckerIpRangesRequest): Awaitable<Errors\Result<GetCheckerIpRangesResponse>>;
  public function GetGeoLocation(GetGeoLocationRequest): Awaitable<Errors\Result<GetGeoLocationResponse>>;
  public function GetHealthCheck(GetHealthCheckRequest): Awaitable<Errors\Result<GetHealthCheckResponse>>;
  public function GetHealthCheckCount(GetHealthCheckCountRequest): Awaitable<Errors\Result<GetHealthCheckCountResponse>>;
  public function GetHealthCheckLastFailureReason(GetHealthCheckLastFailureReasonRequest): Awaitable<Errors\Result<GetHealthCheckLastFailureReasonResponse>>;
  public function GetHealthCheckStatus(GetHealthCheckStatusRequest): Awaitable<Errors\Result<GetHealthCheckStatusResponse>>;
  public function GetHostedZone(GetHostedZoneRequest): Awaitable<Errors\Result<GetHostedZoneResponse>>;
  public function GetHostedZoneCount(GetHostedZoneCountRequest): Awaitable<Errors\Result<GetHostedZoneCountResponse>>;
  public function GetHostedZoneLimit(GetHostedZoneLimitRequest): Awaitable<Errors\Result<GetHostedZoneLimitResponse>>;
  public function GetQueryLoggingConfig(GetQueryLoggingConfigRequest): Awaitable<Errors\Result<GetQueryLoggingConfigResponse>>;
  public function GetReusableDelegationSet(GetReusableDelegationSetRequest): Awaitable<Errors\Result<GetReusableDelegationSetResponse>>;
  public function GetReusableDelegationSetLimit(GetReusableDelegationSetLimitRequest): Awaitable<Errors\Result<GetReusableDelegationSetLimitResponse>>;
  public function GetTrafficPolicy(GetTrafficPolicyRequest): Awaitable<Errors\Result<GetTrafficPolicyResponse>>;
  public function GetTrafficPolicyInstance(GetTrafficPolicyInstanceRequest): Awaitable<Errors\Result<GetTrafficPolicyInstanceResponse>>;
  public function GetTrafficPolicyInstanceCount(GetTrafficPolicyInstanceCountRequest): Awaitable<Errors\Result<GetTrafficPolicyInstanceCountResponse>>;
  public function ListGeoLocations(ListGeoLocationsRequest): Awaitable<Errors\Result<ListGeoLocationsResponse>>;
  public function ListHealthChecks(ListHealthChecksRequest): Awaitable<Errors\Result<ListHealthChecksResponse>>;
  public function ListHostedZones(ListHostedZonesRequest): Awaitable<Errors\Result<ListHostedZonesResponse>>;
  public function ListHostedZonesByName(ListHostedZonesByNameRequest): Awaitable<Errors\Result<ListHostedZonesByNameResponse>>;
  public function ListQueryLoggingConfigs(ListQueryLoggingConfigsRequest): Awaitable<Errors\Result<ListQueryLoggingConfigsResponse>>;
  public function ListResourceRecordSets(ListResourceRecordSetsRequest): Awaitable<Errors\Result<ListResourceRecordSetsResponse>>;
  public function ListReusableDelegationSets(ListReusableDelegationSetsRequest): Awaitable<Errors\Result<ListReusableDelegationSetsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListTagsForResources(ListTagsForResourcesRequest): Awaitable<Errors\Result<ListTagsForResourcesResponse>>;
  public function ListTrafficPolicies(ListTrafficPoliciesRequest): Awaitable<Errors\Result<ListTrafficPoliciesResponse>>;
  public function ListTrafficPolicyInstances(ListTrafficPolicyInstancesRequest): Awaitable<Errors\Result<ListTrafficPolicyInstancesResponse>>;
  public function ListTrafficPolicyInstancesByHostedZone(ListTrafficPolicyInstancesByHostedZoneRequest): Awaitable<Errors\Result<ListTrafficPolicyInstancesByHostedZoneResponse>>;
  public function ListTrafficPolicyInstancesByPolicy(ListTrafficPolicyInstancesByPolicyRequest): Awaitable<Errors\Result<ListTrafficPolicyInstancesByPolicyResponse>>;
  public function ListTrafficPolicyVersions(ListTrafficPolicyVersionsRequest): Awaitable<Errors\Result<ListTrafficPolicyVersionsResponse>>;
  public function ListVPCAssociationAuthorizations(ListVPCAssociationAuthorizationsRequest): Awaitable<Errors\Result<ListVPCAssociationAuthorizationsResponse>>;
  public function TestDNSAnswer(TestDNSAnswerRequest): Awaitable<Errors\Result<TestDNSAnswerResponse>>;
  public function UpdateHealthCheck(UpdateHealthCheckRequest): Awaitable<Errors\Result<UpdateHealthCheckResponse>>;
  public function UpdateHostedZoneComment(UpdateHostedZoneCommentRequest): Awaitable<Errors\Result<UpdateHostedZoneCommentResponse>>;
  public function UpdateTrafficPolicyComment(UpdateTrafficPolicyCommentRequest): Awaitable<Errors\Result<UpdateTrafficPolicyCommentResponse>>;
  public function UpdateTrafficPolicyInstance(UpdateTrafficPolicyInstanceRequest): Awaitable<Errors\Result<UpdateTrafficPolicyInstanceResponse>>;
}

class AccountLimit {
  public AccountLimitType $type;
  public LimitValue $value;

  public function __construct(shape(
  ?'type' => AccountLimitType,
  ?'value' => LimitValue,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? 0;
  }
}

type AccountLimitType = string;

class AlarmIdentifier {
  public AlarmName $name;
  public CloudWatchRegion $region;

  public function __construct(shape(
  ?'name' => AlarmName,
  ?'region' => CloudWatchRegion,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->region = $region ?? "";
  }
}

type AlarmName = string;

type AliasHealthEnabled = bool;

class AliasTarget {
  public DNSName $dns_name;
  public AliasHealthEnabled $evaluate_target_health;
  public ResourceId $hosted_zone_id;

  public function __construct(shape(
  ?'dns_name' => DNSName,
  ?'evaluate_target_health' => AliasHealthEnabled,
  ?'hosted_zone_id' => ResourceId,
  ) $s = shape()) {
    $this->dns_name = $dns_name ?? "";
    $this->evaluate_target_health = $evaluate_target_health ?? false;
    $this->hosted_zone_id = $hosted_zone_id ?? "";
  }
}

type AssociateVPCComment = string;

class AssociateVPCWithHostedZoneRequest {
  public AssociateVPCComment $comment;
  public ResourceId $hosted_zone_id;
  public VPC $vpc;

  public function __construct(shape(
  ?'comment' => AssociateVPCComment,
  ?'hosted_zone_id' => ResourceId,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->vpc = $vpc ?? null;
  }
}

class AssociateVPCWithHostedZoneResponse {
  public ChangeInfo $change_info;

  public function __construct(shape(
  ?'change_info' => ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $change_info ?? null;
  }
}

class Change {
  public ChangeAction $action;
  public ResourceRecordSet $resource_record_set;

  public function __construct(shape(
  ?'action' => ChangeAction,
  ?'resource_record_set' => ResourceRecordSet,
  ) $s = shape()) {
    $this->action = $action ?? "";
    $this->resource_record_set = $resource_record_set ?? null;
  }
}

type ChangeAction = string;

class ChangeBatch {
  public Changes $changes;
  public ResourceDescription $comment;

  public function __construct(shape(
  ?'changes' => Changes,
  ?'comment' => ResourceDescription,
  ) $s = shape()) {
    $this->changes = $changes ?? [];
    $this->comment = $comment ?? "";
  }
}

class ChangeInfo {
  public ResourceDescription $comment;
  public ResourceId $id;
  public ChangeStatus $status;
  public TimeStamp $submitted_at;

  public function __construct(shape(
  ?'comment' => ResourceDescription,
  ?'id' => ResourceId,
  ?'status' => ChangeStatus,
  ?'submitted_at' => TimeStamp,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->id = $id ?? "";
    $this->status = $status ?? "";
    $this->submitted_at = $submitted_at ?? 0;
  }
}

class ChangeResourceRecordSetsRequest {
  public ChangeBatch $change_batch;
  public ResourceId $hosted_zone_id;

  public function __construct(shape(
  ?'change_batch' => ChangeBatch,
  ?'hosted_zone_id' => ResourceId,
  ) $s = shape()) {
    $this->change_batch = $change_batch ?? null;
    $this->hosted_zone_id = $hosted_zone_id ?? "";
  }
}

class ChangeResourceRecordSetsResponse {
  public ChangeInfo $change_info;

  public function __construct(shape(
  ?'change_info' => ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $change_info ?? null;
  }
}

type ChangeStatus = string;

class ChangeTagsForResourceRequest {
  public TagList $add_tags;
  public TagKeyList $remove_tag_keys;
  public TagResourceId $resource_id;
  public TagResourceType $resource_type;

  public function __construct(shape(
  ?'add_tags' => TagList,
  ?'remove_tag_keys' => TagKeyList,
  ?'resource_id' => TagResourceId,
  ?'resource_type' => TagResourceType,
  ) $s = shape()) {
    $this->add_tags = $add_tags ?? [];
    $this->remove_tag_keys = $remove_tag_keys ?? [];
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
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
  public ComparisonOperator $comparison_operator;
  public DimensionList $dimensions;
  public EvaluationPeriods $evaluation_periods;
  public MetricName $metric_name;
  public Namespace $namespace;
  public Period $period;
  public Statistic $statistic;
  public Threshold $threshold;

  public function __construct(shape(
  ?'comparison_operator' => ComparisonOperator,
  ?'dimensions' => DimensionList,
  ?'evaluation_periods' => EvaluationPeriods,
  ?'metric_name' => MetricName,
  ?'namespace' => Namespace,
  ?'period' => Period,
  ?'statistic' => Statistic,
  ?'threshold' => Threshold,
  ) $s = shape()) {
    $this->comparison_operator = $comparison_operator ?? "";
    $this->dimensions = $dimensions ?? [];
    $this->evaluation_periods = $evaluation_periods ?? 0;
    $this->metric_name = $metric_name ?? "";
    $this->namespace = $namespace ?? "";
    $this->period = $period ?? 0;
    $this->statistic = $statistic ?? "";
    $this->threshold = $threshold ?? 0.0;
  }
}

type CloudWatchLogsLogGroupArn = string;

type CloudWatchRegion = string;

type ComparisonOperator = string;

class ConcurrentModification {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ConflictingDomainExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ConflictingTypes {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CreateHealthCheckRequest {
  public HealthCheckNonce $caller_reference;
  public HealthCheckConfig $health_check_config;

  public function __construct(shape(
  ?'caller_reference' => HealthCheckNonce,
  ?'health_check_config' => HealthCheckConfig,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? "";
    $this->health_check_config = $health_check_config ?? null;
  }
}

class CreateHealthCheckResponse {
  public HealthCheck $health_check;
  public ResourceURI $location;

  public function __construct(shape(
  ?'health_check' => HealthCheck,
  ?'location' => ResourceURI,
  ) $s = shape()) {
    $this->health_check = $health_check ?? null;
    $this->location = $location ?? "";
  }
}

class CreateHostedZoneRequest {
  public Nonce $caller_reference;
  public ResourceId $delegation_set_id;
  public HostedZoneConfig $hosted_zone_config;
  public DNSName $name;
  public VPC $vpc;

  public function __construct(shape(
  ?'caller_reference' => Nonce,
  ?'delegation_set_id' => ResourceId,
  ?'hosted_zone_config' => HostedZoneConfig,
  ?'name' => DNSName,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? "";
    $this->delegation_set_id = $delegation_set_id ?? "";
    $this->hosted_zone_config = $hosted_zone_config ?? null;
    $this->name = $name ?? "";
    $this->vpc = $vpc ?? null;
  }
}

class CreateHostedZoneResponse {
  public ChangeInfo $change_info;
  public DelegationSet $delegation_set;
  public HostedZone $hosted_zone;
  public ResourceURI $location;
  public VPC $vpc;

  public function __construct(shape(
  ?'change_info' => ChangeInfo,
  ?'delegation_set' => DelegationSet,
  ?'hosted_zone' => HostedZone,
  ?'location' => ResourceURI,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->change_info = $change_info ?? null;
    $this->delegation_set = $delegation_set ?? null;
    $this->hosted_zone = $hosted_zone ?? null;
    $this->location = $location ?? "";
    $this->vpc = $vpc ?? null;
  }
}

class CreateQueryLoggingConfigRequest {
  public CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public ResourceId $hosted_zone_id;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group_arn' => CloudWatchLogsLogGroupArn,
  ?'hosted_zone_id' => ResourceId,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $cloud_watch_logs_log_group_arn ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
  }
}

class CreateQueryLoggingConfigResponse {
  public ResourceURI $location;
  public QueryLoggingConfig $query_logging_config;

  public function __construct(shape(
  ?'location' => ResourceURI,
  ?'query_logging_config' => QueryLoggingConfig,
  ) $s = shape()) {
    $this->location = $location ?? "";
    $this->query_logging_config = $query_logging_config ?? null;
  }
}

class CreateReusableDelegationSetRequest {
  public Nonce $caller_reference;
  public ResourceId $hosted_zone_id;

  public function __construct(shape(
  ?'caller_reference' => Nonce,
  ?'hosted_zone_id' => ResourceId,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
  }
}

class CreateReusableDelegationSetResponse {
  public DelegationSet $delegation_set;
  public ResourceURI $location;

  public function __construct(shape(
  ?'delegation_set' => DelegationSet,
  ?'location' => ResourceURI,
  ) $s = shape()) {
    $this->delegation_set = $delegation_set ?? null;
    $this->location = $location ?? "";
  }
}

class CreateTrafficPolicyInstanceRequest {
  public ResourceId $hosted_zone_id;
  public DNSName $name;
  public TTL $ttl;
  public TrafficPolicyId $traffic_policy_id;
  public TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'name' => DNSName,
  ?'ttl' => TTL,
  ?'traffic_policy_id' => TrafficPolicyId,
  ?'traffic_policy_version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->name = $name ?? "";
    $this->ttl = $ttl ?? 0;
    $this->traffic_policy_id = $traffic_policy_id ?? "";
    $this->traffic_policy_version = $traffic_policy_version ?? 0;
  }
}

class CreateTrafficPolicyInstanceResponse {
  public ResourceURI $location;
  public TrafficPolicyInstance $traffic_policy_instance;

  public function __construct(shape(
  ?'location' => ResourceURI,
  ?'traffic_policy_instance' => TrafficPolicyInstance,
  ) $s = shape()) {
    $this->location = $location ?? "";
    $this->traffic_policy_instance = $traffic_policy_instance ?? null;
  }
}

class CreateTrafficPolicyRequest {
  public TrafficPolicyComment $comment;
  public TrafficPolicyDocument $document;
  public TrafficPolicyName $name;

  public function __construct(shape(
  ?'comment' => TrafficPolicyComment,
  ?'document' => TrafficPolicyDocument,
  ?'name' => TrafficPolicyName,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->document = $document ?? "";
    $this->name = $name ?? "";
  }
}

class CreateTrafficPolicyResponse {
  public ResourceURI $location;
  public TrafficPolicy $traffic_policy;

  public function __construct(shape(
  ?'location' => ResourceURI,
  ?'traffic_policy' => TrafficPolicy,
  ) $s = shape()) {
    $this->location = $location ?? "";
    $this->traffic_policy = $traffic_policy ?? null;
  }
}

class CreateTrafficPolicyVersionRequest {
  public TrafficPolicyComment $comment;
  public TrafficPolicyDocument $document;
  public TrafficPolicyId $id;

  public function __construct(shape(
  ?'comment' => TrafficPolicyComment,
  ?'document' => TrafficPolicyDocument,
  ?'id' => TrafficPolicyId,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->document = $document ?? "";
    $this->id = $id ?? "";
  }
}

class CreateTrafficPolicyVersionResponse {
  public ResourceURI $location;
  public TrafficPolicy $traffic_policy;

  public function __construct(shape(
  ?'location' => ResourceURI,
  ?'traffic_policy' => TrafficPolicy,
  ) $s = shape()) {
    $this->location = $location ?? "";
    $this->traffic_policy = $traffic_policy ?? null;
  }
}

class CreateVPCAssociationAuthorizationRequest {
  public ResourceId $hosted_zone_id;
  public VPC $vpc;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->vpc = $vpc ?? null;
  }
}

class CreateVPCAssociationAuthorizationResponse {
  public ResourceId $hosted_zone_id;
  public VPC $vpc;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->vpc = $vpc ?? null;
  }
}

type DNSName = string;

type DNSRCode = string;

class DelegationSet {
  public Nonce $caller_reference;
  public ResourceId $id;
  public DelegationSetNameServers $name_servers;

  public function __construct(shape(
  ?'caller_reference' => Nonce,
  ?'id' => ResourceId,
  ?'name_servers' => DelegationSetNameServers,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? "";
    $this->id = $id ?? "";
    $this->name_servers = $name_servers ?? [];
  }
}

class DelegationSetAlreadyCreated {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DelegationSetAlreadyReusable {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DelegationSetInUse {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DelegationSetNameServers = vec<DNSName>;

class DelegationSetNotAvailable {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DelegationSetNotReusable {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type DelegationSets = vec<DelegationSet>;

class DeleteHealthCheckRequest {
  public HealthCheckId $health_check_id;

  public function __construct(shape(
  ?'health_check_id' => HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $health_check_id ?? "";
  }
}

class DeleteHealthCheckResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteHostedZoneRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeleteHostedZoneResponse {
  public ChangeInfo $change_info;

  public function __construct(shape(
  ?'change_info' => ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $change_info ?? null;
  }
}

class DeleteQueryLoggingConfigRequest {
  public QueryLoggingConfigId $id;

  public function __construct(shape(
  ?'id' => QueryLoggingConfigId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeleteQueryLoggingConfigResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteReusableDelegationSetRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeleteReusableDelegationSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTrafficPolicyInstanceRequest {
  public TrafficPolicyInstanceId $id;

  public function __construct(shape(
  ?'id' => TrafficPolicyInstanceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class DeleteTrafficPolicyInstanceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteTrafficPolicyRequest {
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $version;

  public function __construct(shape(
  ?'id' => TrafficPolicyId,
  ?'version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->version = $version ?? 0;
  }
}

class DeleteTrafficPolicyResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteVPCAssociationAuthorizationRequest {
  public ResourceId $hosted_zone_id;
  public VPC $vpc;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->vpc = $vpc ?? null;
  }
}

class DeleteVPCAssociationAuthorizationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Dimension {
  public DimensionField $name;
  public DimensionField $value;

  public function __construct(shape(
  ?'name' => DimensionField,
  ?'value' => DimensionField,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type DimensionField = string;

type DimensionList = vec<Dimension>;

type Disabled = bool;

type DisassociateVPCComment = string;

class DisassociateVPCFromHostedZoneRequest {
  public DisassociateVPCComment $comment;
  public ResourceId $hosted_zone_id;
  public VPC $vpc;

  public function __construct(shape(
  ?'comment' => DisassociateVPCComment,
  ?'hosted_zone_id' => ResourceId,
  ?'vpc' => VPC,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->vpc = $vpc ?? null;
  }
}

class DisassociateVPCFromHostedZoneResponse {
  public ChangeInfo $change_info;

  public function __construct(shape(
  ?'change_info' => ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $change_info ?? null;
  }
}

type EnableSNI = bool;

type ErrorMessage = string;

type ErrorMessages = vec<ErrorMessage>;

type EvaluationPeriods = int;

type FailureThreshold = int;

type FullyQualifiedDomainName = string;

class GeoLocation {
  public GeoLocationContinentCode $continent_code;
  public GeoLocationCountryCode $country_code;
  public GeoLocationSubdivisionCode $subdivision_code;

  public function __construct(shape(
  ?'continent_code' => GeoLocationContinentCode,
  ?'country_code' => GeoLocationCountryCode,
  ?'subdivision_code' => GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->continent_code = $continent_code ?? "";
    $this->country_code = $country_code ?? "";
    $this->subdivision_code = $subdivision_code ?? "";
  }
}

type GeoLocationContinentCode = string;

type GeoLocationContinentName = string;

type GeoLocationCountryCode = string;

type GeoLocationCountryName = string;

class GeoLocationDetails {
  public GeoLocationContinentCode $continent_code;
  public GeoLocationContinentName $continent_name;
  public GeoLocationCountryCode $country_code;
  public GeoLocationCountryName $country_name;
  public GeoLocationSubdivisionCode $subdivision_code;
  public GeoLocationSubdivisionName $subdivision_name;

  public function __construct(shape(
  ?'continent_code' => GeoLocationContinentCode,
  ?'continent_name' => GeoLocationContinentName,
  ?'country_code' => GeoLocationCountryCode,
  ?'country_name' => GeoLocationCountryName,
  ?'subdivision_code' => GeoLocationSubdivisionCode,
  ?'subdivision_name' => GeoLocationSubdivisionName,
  ) $s = shape()) {
    $this->continent_code = $continent_code ?? "";
    $this->continent_name = $continent_name ?? "";
    $this->country_code = $country_code ?? "";
    $this->country_name = $country_name ?? "";
    $this->subdivision_code = $subdivision_code ?? "";
    $this->subdivision_name = $subdivision_name ?? "";
  }
}

type GeoLocationDetailsList = vec<GeoLocationDetails>;

type GeoLocationSubdivisionCode = string;

type GeoLocationSubdivisionName = string;

class GetAccountLimitRequest {
  public AccountLimitType $type;

  public function __construct(shape(
  ?'type' => AccountLimitType,
  ) $s = shape()) {
    $this->type = $type ?? "";
  }
}

class GetAccountLimitResponse {
  public UsageCount $count;
  public AccountLimit $limit;

  public function __construct(shape(
  ?'count' => UsageCount,
  ?'limit' => AccountLimit,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->limit = $limit ?? null;
  }
}

class GetChangeRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetChangeResponse {
  public ChangeInfo $change_info;

  public function __construct(shape(
  ?'change_info' => ChangeInfo,
  ) $s = shape()) {
    $this->change_info = $change_info ?? null;
  }
}

class GetCheckerIpRangesRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetCheckerIpRangesResponse {
  public CheckerIpRanges $checker_ip_ranges;

  public function __construct(shape(
  ?'checker_ip_ranges' => CheckerIpRanges,
  ) $s = shape()) {
    $this->checker_ip_ranges = $checker_ip_ranges ?? [];
  }
}

class GetGeoLocationRequest {
  public GeoLocationContinentCode $continent_code;
  public GeoLocationCountryCode $country_code;
  public GeoLocationSubdivisionCode $subdivision_code;

  public function __construct(shape(
  ?'continent_code' => GeoLocationContinentCode,
  ?'country_code' => GeoLocationCountryCode,
  ?'subdivision_code' => GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->continent_code = $continent_code ?? "";
    $this->country_code = $country_code ?? "";
    $this->subdivision_code = $subdivision_code ?? "";
  }
}

class GetGeoLocationResponse {
  public GeoLocationDetails $geo_location_details;

  public function __construct(shape(
  ?'geo_location_details' => GeoLocationDetails,
  ) $s = shape()) {
    $this->geo_location_details = $geo_location_details ?? null;
  }
}

class GetHealthCheckCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetHealthCheckCountResponse {
  public HealthCheckCount $health_check_count;

  public function __construct(shape(
  ?'health_check_count' => HealthCheckCount,
  ) $s = shape()) {
    $this->health_check_count = $health_check_count ?? 0;
  }
}

class GetHealthCheckLastFailureReasonRequest {
  public HealthCheckId $health_check_id;

  public function __construct(shape(
  ?'health_check_id' => HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $health_check_id ?? "";
  }
}

class GetHealthCheckLastFailureReasonResponse {
  public HealthCheckObservations $health_check_observations;

  public function __construct(shape(
  ?'health_check_observations' => HealthCheckObservations,
  ) $s = shape()) {
    $this->health_check_observations = $health_check_observations ?? [];
  }
}

class GetHealthCheckRequest {
  public HealthCheckId $health_check_id;

  public function __construct(shape(
  ?'health_check_id' => HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $health_check_id ?? "";
  }
}

class GetHealthCheckResponse {
  public HealthCheck $health_check;

  public function __construct(shape(
  ?'health_check' => HealthCheck,
  ) $s = shape()) {
    $this->health_check = $health_check ?? null;
  }
}

class GetHealthCheckStatusRequest {
  public HealthCheckId $health_check_id;

  public function __construct(shape(
  ?'health_check_id' => HealthCheckId,
  ) $s = shape()) {
    $this->health_check_id = $health_check_id ?? "";
  }
}

class GetHealthCheckStatusResponse {
  public HealthCheckObservations $health_check_observations;

  public function __construct(shape(
  ?'health_check_observations' => HealthCheckObservations,
  ) $s = shape()) {
    $this->health_check_observations = $health_check_observations ?? [];
  }
}

class GetHostedZoneCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetHostedZoneCountResponse {
  public HostedZoneCount $hosted_zone_count;

  public function __construct(shape(
  ?'hosted_zone_count' => HostedZoneCount,
  ) $s = shape()) {
    $this->hosted_zone_count = $hosted_zone_count ?? 0;
  }
}

class GetHostedZoneLimitRequest {
  public ResourceId $hosted_zone_id;
  public HostedZoneLimitType $type;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'type' => HostedZoneLimitType,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->type = $type ?? "";
  }
}

class GetHostedZoneLimitResponse {
  public UsageCount $count;
  public HostedZoneLimit $limit;

  public function __construct(shape(
  ?'count' => UsageCount,
  ?'limit' => HostedZoneLimit,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->limit = $limit ?? null;
  }
}

class GetHostedZoneRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetHostedZoneResponse {
  public DelegationSet $delegation_set;
  public HostedZone $hosted_zone;
  public VPCs $vp_cs;

  public function __construct(shape(
  ?'delegation_set' => DelegationSet,
  ?'hosted_zone' => HostedZone,
  ?'vp_cs' => VPCs,
  ) $s = shape()) {
    $this->delegation_set = $delegation_set ?? null;
    $this->hosted_zone = $hosted_zone ?? null;
    $this->vp_cs = $vp_cs ?? [];
  }
}

class GetQueryLoggingConfigRequest {
  public QueryLoggingConfigId $id;

  public function __construct(shape(
  ?'id' => QueryLoggingConfigId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetQueryLoggingConfigResponse {
  public QueryLoggingConfig $query_logging_config;

  public function __construct(shape(
  ?'query_logging_config' => QueryLoggingConfig,
  ) $s = shape()) {
    $this->query_logging_config = $query_logging_config ?? null;
  }
}

class GetReusableDelegationSetLimitRequest {
  public ResourceId $delegation_set_id;
  public ReusableDelegationSetLimitType $type;

  public function __construct(shape(
  ?'delegation_set_id' => ResourceId,
  ?'type' => ReusableDelegationSetLimitType,
  ) $s = shape()) {
    $this->delegation_set_id = $delegation_set_id ?? "";
    $this->type = $type ?? "";
  }
}

class GetReusableDelegationSetLimitResponse {
  public UsageCount $count;
  public ReusableDelegationSetLimit $limit;

  public function __construct(shape(
  ?'count' => UsageCount,
  ?'limit' => ReusableDelegationSetLimit,
  ) $s = shape()) {
    $this->count = $count ?? 0;
    $this->limit = $limit ?? null;
  }
}

class GetReusableDelegationSetRequest {
  public ResourceId $id;

  public function __construct(shape(
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetReusableDelegationSetResponse {
  public DelegationSet $delegation_set;

  public function __construct(shape(
  ?'delegation_set' => DelegationSet,
  ) $s = shape()) {
    $this->delegation_set = $delegation_set ?? null;
  }
}

class GetTrafficPolicyInstanceCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetTrafficPolicyInstanceCountResponse {
  public TrafficPolicyInstanceCount $traffic_policy_instance_count;

  public function __construct(shape(
  ?'traffic_policy_instance_count' => TrafficPolicyInstanceCount,
  ) $s = shape()) {
    $this->traffic_policy_instance_count = $traffic_policy_instance_count ?? 0;
  }
}

class GetTrafficPolicyInstanceRequest {
  public TrafficPolicyInstanceId $id;

  public function __construct(shape(
  ?'id' => TrafficPolicyInstanceId,
  ) $s = shape()) {
    $this->id = $id ?? "";
  }
}

class GetTrafficPolicyInstanceResponse {
  public TrafficPolicyInstance $traffic_policy_instance;

  public function __construct(shape(
  ?'traffic_policy_instance' => TrafficPolicyInstance,
  ) $s = shape()) {
    $this->traffic_policy_instance = $traffic_policy_instance ?? null;
  }
}

class GetTrafficPolicyRequest {
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $version;

  public function __construct(shape(
  ?'id' => TrafficPolicyId,
  ?'version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->version = $version ?? 0;
  }
}

class GetTrafficPolicyResponse {
  public TrafficPolicy $traffic_policy;

  public function __construct(shape(
  ?'traffic_policy' => TrafficPolicy,
  ) $s = shape()) {
    $this->traffic_policy = $traffic_policy ?? null;
  }
}

class HealthCheck {
  public HealthCheckNonce $caller_reference;
  public CloudWatchAlarmConfiguration $cloud_watch_alarm_configuration;
  public HealthCheckConfig $health_check_config;
  public HealthCheckVersion $health_check_version;
  public HealthCheckId $id;
  public LinkedService $linked_service;

  public function __construct(shape(
  ?'caller_reference' => HealthCheckNonce,
  ?'cloud_watch_alarm_configuration' => CloudWatchAlarmConfiguration,
  ?'health_check_config' => HealthCheckConfig,
  ?'health_check_version' => HealthCheckVersion,
  ?'id' => HealthCheckId,
  ?'linked_service' => LinkedService,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? "";
    $this->cloud_watch_alarm_configuration = $cloud_watch_alarm_configuration ?? null;
    $this->health_check_config = $health_check_config ?? null;
    $this->health_check_version = $health_check_version ?? 0;
    $this->id = $id ?? "";
    $this->linked_service = $linked_service ?? null;
  }
}

class HealthCheckAlreadyExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class HealthCheckConfig {
  public AlarmIdentifier $alarm_identifier;
  public ChildHealthCheckList $child_health_checks;
  public Disabled $disabled;
  public EnableSNI $enable_sni;
  public FailureThreshold $failure_threshold;
  public FullyQualifiedDomainName $fully_qualified_domain_name;
  public HealthThreshold $health_threshold;
  public IPAddress $ip_address;
  public InsufficientDataHealthStatus $insufficient_data_health_status;
  public Inverted $inverted;
  public MeasureLatency $measure_latency;
  public Port $port;
  public HealthCheckRegionList $regions;
  public RequestInterval $request_interval;
  public ResourcePath $resource_path;
  public SearchString $search_string;
  public HealthCheckType $type;

  public function __construct(shape(
  ?'alarm_identifier' => AlarmIdentifier,
  ?'child_health_checks' => ChildHealthCheckList,
  ?'disabled' => Disabled,
  ?'enable_sni' => EnableSNI,
  ?'failure_threshold' => FailureThreshold,
  ?'fully_qualified_domain_name' => FullyQualifiedDomainName,
  ?'health_threshold' => HealthThreshold,
  ?'ip_address' => IPAddress,
  ?'insufficient_data_health_status' => InsufficientDataHealthStatus,
  ?'inverted' => Inverted,
  ?'measure_latency' => MeasureLatency,
  ?'port' => Port,
  ?'regions' => HealthCheckRegionList,
  ?'request_interval' => RequestInterval,
  ?'resource_path' => ResourcePath,
  ?'search_string' => SearchString,
  ?'type' => HealthCheckType,
  ) $s = shape()) {
    $this->alarm_identifier = $alarm_identifier ?? null;
    $this->child_health_checks = $child_health_checks ?? [];
    $this->disabled = $disabled ?? false;
    $this->enable_sni = $enable_sni ?? false;
    $this->failure_threshold = $failure_threshold ?? 0;
    $this->fully_qualified_domain_name = $fully_qualified_domain_name ?? "";
    $this->health_threshold = $health_threshold ?? 0;
    $this->ip_address = $ip_address ?? "";
    $this->insufficient_data_health_status = $insufficient_data_health_status ?? "";
    $this->inverted = $inverted ?? false;
    $this->measure_latency = $measure_latency ?? false;
    $this->port = $port ?? 0;
    $this->regions = $regions ?? [];
    $this->request_interval = $request_interval ?? 0;
    $this->resource_path = $resource_path ?? "";
    $this->search_string = $search_string ?? "";
    $this->type = $type ?? "";
  }
}

type HealthCheckCount = int;

type HealthCheckId = string;

class HealthCheckInUse {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type HealthCheckNonce = string;

class HealthCheckObservation {
  public IPAddress $ip_address;
  public HealthCheckRegion $region;
  public StatusReport $status_report;

  public function __construct(shape(
  ?'ip_address' => IPAddress,
  ?'region' => HealthCheckRegion,
  ?'status_report' => StatusReport,
  ) $s = shape()) {
    $this->ip_address = $ip_address ?? "";
    $this->region = $region ?? "";
    $this->status_report = $status_report ?? null;
  }
}

type HealthCheckObservations = vec<HealthCheckObservation>;

type HealthCheckRegion = string;

type HealthCheckRegionList = vec<HealthCheckRegion>;

type HealthCheckType = string;

type HealthCheckVersion = int;

class HealthCheckVersionMismatch {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type HealthChecks = vec<HealthCheck>;

type HealthThreshold = int;

class HostedZone {
  public Nonce $caller_reference;
  public HostedZoneConfig $config;
  public ResourceId $id;
  public LinkedService $linked_service;
  public DNSName $name;
  public HostedZoneRRSetCount $resource_record_set_count;

  public function __construct(shape(
  ?'caller_reference' => Nonce,
  ?'config' => HostedZoneConfig,
  ?'id' => ResourceId,
  ?'linked_service' => LinkedService,
  ?'name' => DNSName,
  ?'resource_record_set_count' => HostedZoneRRSetCount,
  ) $s = shape()) {
    $this->caller_reference = $caller_reference ?? "";
    $this->config = $config ?? null;
    $this->id = $id ?? "";
    $this->linked_service = $linked_service ?? null;
    $this->name = $name ?? "";
    $this->resource_record_set_count = $resource_record_set_count ?? 0;
  }
}

class HostedZoneAlreadyExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class HostedZoneConfig {
  public ResourceDescription $comment;
  public IsPrivateZone $private_zone;

  public function __construct(shape(
  ?'comment' => ResourceDescription,
  ?'private_zone' => IsPrivateZone,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->private_zone = $private_zone ?? false;
  }
}

type HostedZoneCount = int;

class HostedZoneLimit {
  public HostedZoneLimitType $type;
  public LimitValue $value;

  public function __construct(shape(
  ?'type' => HostedZoneLimitType,
  ?'value' => LimitValue,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? 0;
  }
}

type HostedZoneLimitType = string;

class HostedZoneNotEmpty {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class HostedZoneNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class HostedZoneNotPrivate {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type HostedZoneRRSetCount = int;

type HostedZones = vec<HostedZone>;

type IPAddress = string;

type IPAddressCidr = string;

class IncompatibleVersion {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InsufficientCloudWatchLogsResourcePolicy {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type InsufficientDataHealthStatus = string;

class InvalidArgument {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidChangeBatch {
  public ErrorMessage $message;
  public ErrorMessages $messages;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ?'messages' => ErrorMessages,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->messages = $messages ?? [];
  }
}

class InvalidDomainName {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInput {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPaginationToken {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidTrafficPolicyDocument {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidVPCId {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Inverted = bool;

type IsPrivateZone = bool;

class LastVPCAssociation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LimitValue = int;

class LimitsExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LinkedService {
  public ResourceDescription $description;
  public ServicePrincipal $service_principal;

  public function __construct(shape(
  ?'description' => ResourceDescription,
  ?'service_principal' => ServicePrincipal,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->service_principal = $service_principal ?? "";
  }
}

class ListGeoLocationsRequest {
  public PageMaxItems $max_items;
  public GeoLocationContinentCode $start_continent_code;
  public GeoLocationCountryCode $start_country_code;
  public GeoLocationSubdivisionCode $start_subdivision_code;

  public function __construct(shape(
  ?'max_items' => PageMaxItems,
  ?'start_continent_code' => GeoLocationContinentCode,
  ?'start_country_code' => GeoLocationCountryCode,
  ?'start_subdivision_code' => GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->max_items = $max_items ?? "";
    $this->start_continent_code = $start_continent_code ?? "";
    $this->start_country_code = $start_country_code ?? "";
    $this->start_subdivision_code = $start_subdivision_code ?? "";
  }
}

class ListGeoLocationsResponse {
  public GeoLocationDetailsList $geo_location_details_list;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public GeoLocationContinentCode $next_continent_code;
  public GeoLocationCountryCode $next_country_code;
  public GeoLocationSubdivisionCode $next_subdivision_code;

  public function __construct(shape(
  ?'geo_location_details_list' => GeoLocationDetailsList,
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'next_continent_code' => GeoLocationContinentCode,
  ?'next_country_code' => GeoLocationCountryCode,
  ?'next_subdivision_code' => GeoLocationSubdivisionCode,
  ) $s = shape()) {
    $this->geo_location_details_list = $geo_location_details_list ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->next_continent_code = $next_continent_code ?? "";
    $this->next_country_code = $next_country_code ?? "";
    $this->next_subdivision_code = $next_subdivision_code ?? "";
  }
}

class ListHealthChecksRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;

  public function __construct(shape(
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? "";
  }
}

class ListHealthChecksResponse {
  public HealthChecks $health_checks;
  public PageTruncated $is_truncated;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public PageMarker $next_marker;

  public function __construct(shape(
  ?'health_checks' => HealthChecks,
  ?'is_truncated' => PageTruncated,
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ?'next_marker' => PageMarker,
  ) $s = shape()) {
    $this->health_checks = $health_checks ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? "";
    $this->next_marker = $next_marker ?? "";
  }
}

class ListHostedZonesByNameRequest {
  public DNSName $dns_name;
  public ResourceId $hosted_zone_id;
  public PageMaxItems $max_items;

  public function __construct(shape(
  ?'dns_name' => DNSName,
  ?'hosted_zone_id' => ResourceId,
  ?'max_items' => PageMaxItems,
  ) $s = shape()) {
    $this->dns_name = $dns_name ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->max_items = $max_items ?? "";
  }
}

class ListHostedZonesByNameResponse {
  public DNSName $dns_name;
  public ResourceId $hosted_zone_id;
  public HostedZones $hosted_zones;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $next_dns_name;
  public ResourceId $next_hosted_zone_id;

  public function __construct(shape(
  ?'dns_name' => DNSName,
  ?'hosted_zone_id' => ResourceId,
  ?'hosted_zones' => HostedZones,
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'next_dns_name' => DNSName,
  ?'next_hosted_zone_id' => ResourceId,
  ) $s = shape()) {
    $this->dns_name = $dns_name ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->hosted_zones = $hosted_zones ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->next_dns_name = $next_dns_name ?? "";
    $this->next_hosted_zone_id = $next_hosted_zone_id ?? "";
  }
}

class ListHostedZonesRequest {
  public ResourceId $delegation_set_id;
  public PageMarker $marker;
  public PageMaxItems $max_items;

  public function __construct(shape(
  ?'delegation_set_id' => ResourceId,
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ) $s = shape()) {
    $this->delegation_set_id = $delegation_set_id ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? "";
  }
}

class ListHostedZonesResponse {
  public HostedZones $hosted_zones;
  public PageTruncated $is_truncated;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public PageMarker $next_marker;

  public function __construct(shape(
  ?'hosted_zones' => HostedZones,
  ?'is_truncated' => PageTruncated,
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ?'next_marker' => PageMarker,
  ) $s = shape()) {
    $this->hosted_zones = $hosted_zones ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? "";
    $this->next_marker = $next_marker ?? "";
  }
}

class ListQueryLoggingConfigsRequest {
  public ResourceId $hosted_zone_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->max_results = $max_results ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListQueryLoggingConfigsResponse {
  public PaginationToken $next_token;
  public QueryLoggingConfigs $query_logging_configs;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'query_logging_configs' => QueryLoggingConfigs,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->query_logging_configs = $query_logging_configs ?? [];
  }
}

class ListResourceRecordSetsRequest {
  public ResourceId $hosted_zone_id;
  public PageMaxItems $max_items;
  public ResourceRecordSetIdentifier $start_record_identifier;
  public DNSName $start_record_name;
  public RRType $start_record_type;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'max_items' => PageMaxItems,
  ?'start_record_identifier' => ResourceRecordSetIdentifier,
  ?'start_record_name' => DNSName,
  ?'start_record_type' => RRType,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->max_items = $max_items ?? "";
    $this->start_record_identifier = $start_record_identifier ?? "";
    $this->start_record_name = $start_record_name ?? "";
    $this->start_record_type = $start_record_type ?? "";
  }
}

class ListResourceRecordSetsResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public ResourceRecordSetIdentifier $next_record_identifier;
  public DNSName $next_record_name;
  public RRType $next_record_type;
  public ResourceRecordSets $resource_record_sets;

  public function __construct(shape(
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'next_record_identifier' => ResourceRecordSetIdentifier,
  ?'next_record_name' => DNSName,
  ?'next_record_type' => RRType,
  ?'resource_record_sets' => ResourceRecordSets,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->next_record_identifier = $next_record_identifier ?? "";
    $this->next_record_name = $next_record_name ?? "";
    $this->next_record_type = $next_record_type ?? "";
    $this->resource_record_sets = $resource_record_sets ?? [];
  }
}

class ListReusableDelegationSetsRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;

  public function __construct(shape(
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? "";
  }
}

class ListReusableDelegationSetsResponse {
  public DelegationSets $delegation_sets;
  public PageTruncated $is_truncated;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public PageMarker $next_marker;

  public function __construct(shape(
  ?'delegation_sets' => DelegationSets,
  ?'is_truncated' => PageTruncated,
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ?'next_marker' => PageMarker,
  ) $s = shape()) {
    $this->delegation_sets = $delegation_sets ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? "";
    $this->next_marker = $next_marker ?? "";
  }
}

class ListTagsForResourceRequest {
  public TagResourceId $resource_id;
  public TagResourceType $resource_type;

  public function __construct(shape(
  ?'resource_id' => TagResourceId,
  ?'resource_type' => TagResourceType,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ListTagsForResourceResponse {
  public ResourceTagSet $resource_tag_set;

  public function __construct(shape(
  ?'resource_tag_set' => ResourceTagSet,
  ) $s = shape()) {
    $this->resource_tag_set = $resource_tag_set ?? null;
  }
}

class ListTagsForResourcesRequest {
  public TagResourceIdList $resource_ids;
  public TagResourceType $resource_type;

  public function __construct(shape(
  ?'resource_ids' => TagResourceIdList,
  ?'resource_type' => TagResourceType,
  ) $s = shape()) {
    $this->resource_ids = $resource_ids ?? [];
    $this->resource_type = $resource_type ?? "";
  }
}

class ListTagsForResourcesResponse {
  public ResourceTagSetList $resource_tag_sets;

  public function __construct(shape(
  ?'resource_tag_sets' => ResourceTagSetList,
  ) $s = shape()) {
    $this->resource_tag_sets = $resource_tag_sets ?? [];
  }
}

class ListTrafficPoliciesRequest {
  public PageMaxItems $max_items;
  public TrafficPolicyId $traffic_policy_id_marker;

  public function __construct(shape(
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_id_marker' => TrafficPolicyId,
  ) $s = shape()) {
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_id_marker = $traffic_policy_id_marker ?? "";
  }
}

class ListTrafficPoliciesResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public TrafficPolicyId $traffic_policy_id_marker;
  public TrafficPolicySummaries $traffic_policy_summaries;

  public function __construct(shape(
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_id_marker' => TrafficPolicyId,
  ?'traffic_policy_summaries' => TrafficPolicySummaries,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_id_marker = $traffic_policy_id_marker ?? "";
    $this->traffic_policy_summaries = $traffic_policy_summaries ?? [];
  }
}

class ListTrafficPolicyInstancesByHostedZoneRequest {
  public ResourceId $hosted_zone_id;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_instance_name_marker' => DNSName,
  ?'traffic_policy_instance_type_marker' => RRType,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_instance_name_marker = $traffic_policy_instance_name_marker ?? "";
    $this->traffic_policy_instance_type_marker = $traffic_policy_instance_type_marker ?? "";
  }
}

class ListTrafficPolicyInstancesByHostedZoneResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyInstances $traffic_policy_instances;

  public function __construct(shape(
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_instance_name_marker' => DNSName,
  ?'traffic_policy_instance_type_marker' => RRType,
  ?'traffic_policy_instances' => TrafficPolicyInstances,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_instance_name_marker = $traffic_policy_instance_name_marker ?? "";
    $this->traffic_policy_instance_type_marker = $traffic_policy_instance_type_marker ?? "";
    $this->traffic_policy_instances = $traffic_policy_instances ?? [];
  }
}

class ListTrafficPolicyInstancesByPolicyRequest {
  public ResourceId $hosted_zone_id_marker;
  public PageMaxItems $max_items;
  public TrafficPolicyId $traffic_policy_id;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
  ?'hosted_zone_id_marker' => ResourceId,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_id' => TrafficPolicyId,
  ?'traffic_policy_instance_name_marker' => DNSName,
  ?'traffic_policy_instance_type_marker' => RRType,
  ?'traffic_policy_version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $hosted_zone_id_marker ?? "";
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_id = $traffic_policy_id ?? "";
    $this->traffic_policy_instance_name_marker = $traffic_policy_instance_name_marker ?? "";
    $this->traffic_policy_instance_type_marker = $traffic_policy_instance_type_marker ?? "";
    $this->traffic_policy_version = $traffic_policy_version ?? 0;
  }
}

class ListTrafficPolicyInstancesByPolicyResponse {
  public ResourceId $hosted_zone_id_marker;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyInstances $traffic_policy_instances;

  public function __construct(shape(
  ?'hosted_zone_id_marker' => ResourceId,
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_instance_name_marker' => DNSName,
  ?'traffic_policy_instance_type_marker' => RRType,
  ?'traffic_policy_instances' => TrafficPolicyInstances,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $hosted_zone_id_marker ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_instance_name_marker = $traffic_policy_instance_name_marker ?? "";
    $this->traffic_policy_instance_type_marker = $traffic_policy_instance_type_marker ?? "";
    $this->traffic_policy_instances = $traffic_policy_instances ?? [];
  }
}

class ListTrafficPolicyInstancesRequest {
  public ResourceId $hosted_zone_id_marker;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;

  public function __construct(shape(
  ?'hosted_zone_id_marker' => ResourceId,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_instance_name_marker' => DNSName,
  ?'traffic_policy_instance_type_marker' => RRType,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $hosted_zone_id_marker ?? "";
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_instance_name_marker = $traffic_policy_instance_name_marker ?? "";
    $this->traffic_policy_instance_type_marker = $traffic_policy_instance_type_marker ?? "";
  }
}

class ListTrafficPolicyInstancesResponse {
  public ResourceId $hosted_zone_id_marker;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyInstances $traffic_policy_instances;

  public function __construct(shape(
  ?'hosted_zone_id_marker' => ResourceId,
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_instance_name_marker' => DNSName,
  ?'traffic_policy_instance_type_marker' => RRType,
  ?'traffic_policy_instances' => TrafficPolicyInstances,
  ) $s = shape()) {
    $this->hosted_zone_id_marker = $hosted_zone_id_marker ?? "";
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_instance_name_marker = $traffic_policy_instance_name_marker ?? "";
    $this->traffic_policy_instance_type_marker = $traffic_policy_instance_type_marker ?? "";
    $this->traffic_policy_instances = $traffic_policy_instances ?? [];
  }
}

class ListTrafficPolicyVersionsRequest {
  public TrafficPolicyId $id;
  public PageMaxItems $max_items;
  public TrafficPolicyVersionMarker $traffic_policy_version_marker;

  public function __construct(shape(
  ?'id' => TrafficPolicyId,
  ?'max_items' => PageMaxItems,
  ?'traffic_policy_version_marker' => TrafficPolicyVersionMarker,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->max_items = $max_items ?? "";
    $this->traffic_policy_version_marker = $traffic_policy_version_marker ?? "";
  }
}

class ListTrafficPolicyVersionsResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public TrafficPolicies $traffic_policies;
  public TrafficPolicyVersionMarker $traffic_policy_version_marker;

  public function __construct(shape(
  ?'is_truncated' => PageTruncated,
  ?'max_items' => PageMaxItems,
  ?'traffic_policies' => TrafficPolicies,
  ?'traffic_policy_version_marker' => TrafficPolicyVersionMarker,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->max_items = $max_items ?? "";
    $this->traffic_policies = $traffic_policies ?? [];
    $this->traffic_policy_version_marker = $traffic_policy_version_marker ?? "";
  }
}

class ListVPCAssociationAuthorizationsRequest {
  public ResourceId $hosted_zone_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'max_results' => MaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->max_results = $max_results ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListVPCAssociationAuthorizationsResponse {
  public ResourceId $hosted_zone_id;
  public PaginationToken $next_token;
  public VPCs $vp_cs;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'next_token' => PaginationToken,
  ?'vp_cs' => VPCs,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->next_token = $next_token ?? "";
    $this->vp_cs = $vp_cs ?? [];
  }
}

type MaxResults = string;

type MeasureLatency = bool;

type Message = string;

type MetricName = string;

type Nameserver = string;

type Namespace = string;

class NoSuchChange {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchCloudWatchLogsLogGroup {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchDelegationSet {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchGeoLocation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchHealthCheck {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchHostedZone {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchQueryLoggingConfig {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchTrafficPolicy {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class NoSuchTrafficPolicyInstance {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Nonce = string;

class NotAuthorizedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PageMarker = string;

type PageMaxItems = string;

type PageTruncated = bool;

type PaginationToken = string;

type Period = int;

type Port = int;

class PriorRequestNotComplete {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class PublicZoneVPCAssociation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class QueryLoggingConfig {
  public CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public ResourceId $hosted_zone_id;
  public QueryLoggingConfigId $id;

  public function __construct(shape(
  ?'cloud_watch_logs_log_group_arn' => CloudWatchLogsLogGroupArn,
  ?'hosted_zone_id' => ResourceId,
  ?'id' => QueryLoggingConfigId,
  ) $s = shape()) {
    $this->cloud_watch_logs_log_group_arn = $cloud_watch_logs_log_group_arn ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->id = $id ?? "";
  }
}

class QueryLoggingConfigAlreadyExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
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
  public RData $value;

  public function __construct(shape(
  ?'value' => RData,
  ) $s = shape()) {
    $this->value = $value ?? "";
  }
}

class ResourceRecordSet {
  public AliasTarget $alias_target;
  public ResourceRecordSetFailover $failover;
  public GeoLocation $geo_location;
  public HealthCheckId $health_check_id;
  public ResourceRecordSetMultiValueAnswer $multi_value_answer;
  public DNSName $name;
  public ResourceRecordSetRegion $region;
  public ResourceRecords $resource_records;
  public ResourceRecordSetIdentifier $set_identifier;
  public TTL $ttl;
  public TrafficPolicyInstanceId $traffic_policy_instance_id;
  public RRType $type;
  public ResourceRecordSetWeight $weight;

  public function __construct(shape(
  ?'alias_target' => AliasTarget,
  ?'failover' => ResourceRecordSetFailover,
  ?'geo_location' => GeoLocation,
  ?'health_check_id' => HealthCheckId,
  ?'multi_value_answer' => ResourceRecordSetMultiValueAnswer,
  ?'name' => DNSName,
  ?'region' => ResourceRecordSetRegion,
  ?'resource_records' => ResourceRecords,
  ?'set_identifier' => ResourceRecordSetIdentifier,
  ?'ttl' => TTL,
  ?'traffic_policy_instance_id' => TrafficPolicyInstanceId,
  ?'type' => RRType,
  ?'weight' => ResourceRecordSetWeight,
  ) $s = shape()) {
    $this->alias_target = $alias_target ?? null;
    $this->failover = $failover ?? "";
    $this->geo_location = $geo_location ?? null;
    $this->health_check_id = $health_check_id ?? "";
    $this->multi_value_answer = $multi_value_answer ?? false;
    $this->name = $name ?? "";
    $this->region = $region ?? "";
    $this->resource_records = $resource_records ?? [];
    $this->set_identifier = $set_identifier ?? "";
    $this->ttl = $ttl ?? 0;
    $this->traffic_policy_instance_id = $traffic_policy_instance_id ?? "";
    $this->type = $type ?? "";
    $this->weight = $weight ?? 0;
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
  public TagResourceId $resource_id;
  public TagResourceType $resource_type;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_id' => TagResourceId,
  ?'resource_type' => TagResourceType,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->tags = $tags ?? [];
  }
}

type ResourceTagSetList = vec<ResourceTagSet>;

type ResourceURI = string;

class ReusableDelegationSetLimit {
  public ReusableDelegationSetLimitType $type;
  public LimitValue $value;

  public function __construct(shape(
  ?'type' => ReusableDelegationSetLimitType,
  ?'value' => LimitValue,
  ) $s = shape()) {
    $this->type = $type ?? "";
    $this->value = $value ?? 0;
  }
}

type ReusableDelegationSetLimitType = string;

type SearchString = string;

type ServicePrincipal = string;

type Statistic = string;

type Status = string;

class StatusReport {
  public TimeStamp $checked_time;
  public Status $status;

  public function __construct(shape(
  ?'checked_time' => TimeStamp,
  ?'status' => Status,
  ) $s = shape()) {
    $this->checked_time = $checked_time ?? 0;
    $this->status = $status ?? "";
  }
}

type SubnetMask = string;

type TTL = int;

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

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagResourceId = string;

type TagResourceIdList = vec<TagResourceId>;

type TagResourceType = string;

type TagValue = string;

class TestDNSAnswerRequest {
  public IPAddress $edns_0_client_subnet_ip;
  public SubnetMask $edns_0_client_subnet_mask;
  public ResourceId $hosted_zone_id;
  public DNSName $record_name;
  public RRType $record_type;
  public IPAddress $resolver_ip;

  public function __construct(shape(
  ?'edns_0_client_subnet_ip' => IPAddress,
  ?'edns_0_client_subnet_mask' => SubnetMask,
  ?'hosted_zone_id' => ResourceId,
  ?'record_name' => DNSName,
  ?'record_type' => RRType,
  ?'resolver_ip' => IPAddress,
  ) $s = shape()) {
    $this->edns_0_client_subnet_ip = $edns_0_client_subnet_ip ?? "";
    $this->edns_0_client_subnet_mask = $edns_0_client_subnet_mask ?? "";
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->record_name = $record_name ?? "";
    $this->record_type = $record_type ?? "";
    $this->resolver_ip = $resolver_ip ?? "";
  }
}

class TestDNSAnswerResponse {
  public Nameserver $nameserver;
  public TransportProtocol $protocol;
  public RecordData $record_data;
  public DNSName $record_name;
  public RRType $record_type;
  public DNSRCode $response_code;

  public function __construct(shape(
  ?'nameserver' => Nameserver,
  ?'protocol' => TransportProtocol,
  ?'record_data' => RecordData,
  ?'record_name' => DNSName,
  ?'record_type' => RRType,
  ?'response_code' => DNSRCode,
  ) $s = shape()) {
    $this->nameserver = $nameserver ?? "";
    $this->protocol = $protocol ?? "";
    $this->record_data = $record_data ?? [];
    $this->record_name = $record_name ?? "";
    $this->record_type = $record_type ?? "";
    $this->response_code = $response_code ?? "";
  }
}

type Threshold = float;

class ThrottlingException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TimeStamp = int;

class TooManyHealthChecks {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManyHostedZones {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManyTrafficPolicies {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManyTrafficPolicyInstances {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManyTrafficPolicyVersionsForCurrentPolicy {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TooManyVPCAssociationAuthorizations {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TrafficPolicies = vec<TrafficPolicy>;

class TrafficPolicy {
  public TrafficPolicyComment $comment;
  public TrafficPolicyDocument $document;
  public TrafficPolicyId $id;
  public TrafficPolicyName $name;
  public RRType $type;
  public TrafficPolicyVersion $version;

  public function __construct(shape(
  ?'comment' => TrafficPolicyComment,
  ?'document' => TrafficPolicyDocument,
  ?'id' => TrafficPolicyId,
  ?'name' => TrafficPolicyName,
  ?'type' => RRType,
  ?'version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->document = $document ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->type = $type ?? "";
    $this->version = $version ?? 0;
  }
}

class TrafficPolicyAlreadyExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TrafficPolicyComment = string;

type TrafficPolicyDocument = string;

type TrafficPolicyId = string;

class TrafficPolicyInUse {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TrafficPolicyInstance {
  public ResourceId $hosted_zone_id;
  public TrafficPolicyInstanceId $id;
  public Message $message;
  public DNSName $name;
  public TrafficPolicyInstanceState $state;
  public TTL $ttl;
  public TrafficPolicyId $traffic_policy_id;
  public RRType $traffic_policy_type;
  public TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
  ?'hosted_zone_id' => ResourceId,
  ?'id' => TrafficPolicyInstanceId,
  ?'message' => Message,
  ?'name' => DNSName,
  ?'state' => TrafficPolicyInstanceState,
  ?'ttl' => TTL,
  ?'traffic_policy_id' => TrafficPolicyId,
  ?'traffic_policy_type' => RRType,
  ?'traffic_policy_version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->hosted_zone_id = $hosted_zone_id ?? "";
    $this->id = $id ?? "";
    $this->message = $message ?? "";
    $this->name = $name ?? "";
    $this->state = $state ?? "";
    $this->ttl = $ttl ?? 0;
    $this->traffic_policy_id = $traffic_policy_id ?? "";
    $this->traffic_policy_type = $traffic_policy_type ?? "";
    $this->traffic_policy_version = $traffic_policy_version ?? 0;
  }
}

class TrafficPolicyInstanceAlreadyExists {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TrafficPolicyInstanceCount = int;

type TrafficPolicyInstanceId = string;

type TrafficPolicyInstanceState = string;

type TrafficPolicyInstances = vec<TrafficPolicyInstance>;

type TrafficPolicyName = string;

type TrafficPolicySummaries = vec<TrafficPolicySummary>;

class TrafficPolicySummary {
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $latest_version;
  public TrafficPolicyName $name;
  public TrafficPolicyVersion $traffic_policy_count;
  public RRType $type;

  public function __construct(shape(
  ?'id' => TrafficPolicyId,
  ?'latest_version' => TrafficPolicyVersion,
  ?'name' => TrafficPolicyName,
  ?'traffic_policy_count' => TrafficPolicyVersion,
  ?'type' => RRType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->latest_version = $latest_version ?? 0;
    $this->name = $name ?? "";
    $this->traffic_policy_count = $traffic_policy_count ?? 0;
    $this->type = $type ?? "";
  }
}

type TrafficPolicyVersion = int;

type TrafficPolicyVersionMarker = string;

type TransportProtocol = string;

class UpdateHealthCheckRequest {
  public AlarmIdentifier $alarm_identifier;
  public ChildHealthCheckList $child_health_checks;
  public Disabled $disabled;
  public EnableSNI $enable_sni;
  public FailureThreshold $failure_threshold;
  public FullyQualifiedDomainName $fully_qualified_domain_name;
  public HealthCheckId $health_check_id;
  public HealthCheckVersion $health_check_version;
  public HealthThreshold $health_threshold;
  public IPAddress $ip_address;
  public InsufficientDataHealthStatus $insufficient_data_health_status;
  public Inverted $inverted;
  public Port $port;
  public HealthCheckRegionList $regions;
  public ResettableElementNameList $reset_elements;
  public ResourcePath $resource_path;
  public SearchString $search_string;

  public function __construct(shape(
  ?'alarm_identifier' => AlarmIdentifier,
  ?'child_health_checks' => ChildHealthCheckList,
  ?'disabled' => Disabled,
  ?'enable_sni' => EnableSNI,
  ?'failure_threshold' => FailureThreshold,
  ?'fully_qualified_domain_name' => FullyQualifiedDomainName,
  ?'health_check_id' => HealthCheckId,
  ?'health_check_version' => HealthCheckVersion,
  ?'health_threshold' => HealthThreshold,
  ?'ip_address' => IPAddress,
  ?'insufficient_data_health_status' => InsufficientDataHealthStatus,
  ?'inverted' => Inverted,
  ?'port' => Port,
  ?'regions' => HealthCheckRegionList,
  ?'reset_elements' => ResettableElementNameList,
  ?'resource_path' => ResourcePath,
  ?'search_string' => SearchString,
  ) $s = shape()) {
    $this->alarm_identifier = $alarm_identifier ?? null;
    $this->child_health_checks = $child_health_checks ?? [];
    $this->disabled = $disabled ?? false;
    $this->enable_sni = $enable_sni ?? false;
    $this->failure_threshold = $failure_threshold ?? 0;
    $this->fully_qualified_domain_name = $fully_qualified_domain_name ?? "";
    $this->health_check_id = $health_check_id ?? "";
    $this->health_check_version = $health_check_version ?? 0;
    $this->health_threshold = $health_threshold ?? 0;
    $this->ip_address = $ip_address ?? "";
    $this->insufficient_data_health_status = $insufficient_data_health_status ?? "";
    $this->inverted = $inverted ?? false;
    $this->port = $port ?? 0;
    $this->regions = $regions ?? [];
    $this->reset_elements = $reset_elements ?? [];
    $this->resource_path = $resource_path ?? "";
    $this->search_string = $search_string ?? "";
  }
}

class UpdateHealthCheckResponse {
  public HealthCheck $health_check;

  public function __construct(shape(
  ?'health_check' => HealthCheck,
  ) $s = shape()) {
    $this->health_check = $health_check ?? null;
  }
}

class UpdateHostedZoneCommentRequest {
  public ResourceDescription $comment;
  public ResourceId $id;

  public function __construct(shape(
  ?'comment' => ResourceDescription,
  ?'id' => ResourceId,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->id = $id ?? "";
  }
}

class UpdateHostedZoneCommentResponse {
  public HostedZone $hosted_zone;

  public function __construct(shape(
  ?'hosted_zone' => HostedZone,
  ) $s = shape()) {
    $this->hosted_zone = $hosted_zone ?? null;
  }
}

class UpdateTrafficPolicyCommentRequest {
  public TrafficPolicyComment $comment;
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $version;

  public function __construct(shape(
  ?'comment' => TrafficPolicyComment,
  ?'id' => TrafficPolicyId,
  ?'version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->comment = $comment ?? "";
    $this->id = $id ?? "";
    $this->version = $version ?? 0;
  }
}

class UpdateTrafficPolicyCommentResponse {
  public TrafficPolicy $traffic_policy;

  public function __construct(shape(
  ?'traffic_policy' => TrafficPolicy,
  ) $s = shape()) {
    $this->traffic_policy = $traffic_policy ?? null;
  }
}

class UpdateTrafficPolicyInstanceRequest {
  public TrafficPolicyInstanceId $id;
  public TTL $ttl;
  public TrafficPolicyId $traffic_policy_id;
  public TrafficPolicyVersion $traffic_policy_version;

  public function __construct(shape(
  ?'id' => TrafficPolicyInstanceId,
  ?'ttl' => TTL,
  ?'traffic_policy_id' => TrafficPolicyId,
  ?'traffic_policy_version' => TrafficPolicyVersion,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->ttl = $ttl ?? 0;
    $this->traffic_policy_id = $traffic_policy_id ?? "";
    $this->traffic_policy_version = $traffic_policy_version ?? 0;
  }
}

class UpdateTrafficPolicyInstanceResponse {
  public TrafficPolicyInstance $traffic_policy_instance;

  public function __construct(shape(
  ?'traffic_policy_instance' => TrafficPolicyInstance,
  ) $s = shape()) {
    $this->traffic_policy_instance = $traffic_policy_instance ?? null;
  }
}

type UsageCount = int;

class VPC {
  public VPCId $vpc_id;
  public VPCRegion $vpc_region;

  public function __construct(shape(
  ?'vpc_id' => VPCId,
  ?'vpc_region' => VPCRegion,
  ) $s = shape()) {
    $this->vpc_id = $vpc_id ?? "";
    $this->vpc_region = $vpc_region ?? "";
  }
}

class VPCAssociationAuthorizationNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class VPCAssociationNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type VPCId = string;

type VPCRegion = string;

type VPCs = vec<VPC>;

