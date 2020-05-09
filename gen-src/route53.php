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
}

class AccountLimitType {
}

class AlarmIdentifier {
  public AlarmName $name;
  public CloudWatchRegion $region;
}

class AlarmName {
}

class AliasHealthEnabled {
}

class AliasTarget {
  public DNSName $dns_name;
  public AliasHealthEnabled $evaluate_target_health;
  public ResourceId $hosted_zone_id;
}

class AssociateVPCComment {
}

class AssociateVPCWithHostedZoneRequest {
  public AssociateVPCComment $comment;
  public ResourceId $hosted_zone_id;
  public VPC $vpc;
}

class AssociateVPCWithHostedZoneResponse {
  public ChangeInfo $change_info;
}

class Change {
  public ChangeAction $action;
  public ResourceRecordSet $resource_record_set;
}

class ChangeAction {
}

class ChangeBatch {
  public Changes $changes;
  public ResourceDescription $comment;
}

class ChangeInfo {
  public ResourceDescription $comment;
  public ResourceId $id;
  public ChangeStatus $status;
  public TimeStamp $submitted_at;
}

class ChangeResourceRecordSetsRequest {
  public ChangeBatch $change_batch;
  public ResourceId $hosted_zone_id;
}

class ChangeResourceRecordSetsResponse {
  public ChangeInfo $change_info;
}

class ChangeStatus {
}

class ChangeTagsForResourceRequest {
  public TagList $add_tags;
  public TagKeyList $remove_tag_keys;
  public TagResourceId $resource_id;
  public TagResourceType $resource_type;
}

class ChangeTagsForResourceResponse {
}

class Changes {
}

class CheckerIpRanges {
}

class ChildHealthCheckList {
}

class CloudWatchAlarmConfiguration {
  public ComparisonOperator $comparison_operator;
  public DimensionList $dimensions;
  public EvaluationPeriods $evaluation_periods;
  public MetricName $metric_name;
  public Namespace $namespace;
  public Period $period;
  public Statistic $statistic;
  public Threshold $threshold;
}

class CloudWatchLogsLogGroupArn {
}

class CloudWatchRegion {
}

class ComparisonOperator {
}

class ConcurrentModification {
  public ErrorMessage $message;
}

class ConflictingDomainExists {
  public ErrorMessage $message;
}

class ConflictingTypes {
  public ErrorMessage $message;
}

class CreateHealthCheckRequest {
  public HealthCheckNonce $caller_reference;
  public HealthCheckConfig $health_check_config;
}

class CreateHealthCheckResponse {
  public HealthCheck $health_check;
  public ResourceURI $location;
}

class CreateHostedZoneRequest {
  public Nonce $caller_reference;
  public ResourceId $delegation_set_id;
  public HostedZoneConfig $hosted_zone_config;
  public DNSName $name;
  public VPC $vpc;
}

class CreateHostedZoneResponse {
  public ChangeInfo $change_info;
  public DelegationSet $delegation_set;
  public HostedZone $hosted_zone;
  public ResourceURI $location;
  public VPC $vpc;
}

class CreateQueryLoggingConfigRequest {
  public CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public ResourceId $hosted_zone_id;
}

class CreateQueryLoggingConfigResponse {
  public ResourceURI $location;
  public QueryLoggingConfig $query_logging_config;
}

class CreateReusableDelegationSetRequest {
  public Nonce $caller_reference;
  public ResourceId $hosted_zone_id;
}

class CreateReusableDelegationSetResponse {
  public DelegationSet $delegation_set;
  public ResourceURI $location;
}

class CreateTrafficPolicyInstanceRequest {
  public ResourceId $hosted_zone_id;
  public DNSName $name;
  public TTL $ttl;
  public TrafficPolicyId $traffic_policy_id;
  public TrafficPolicyVersion $traffic_policy_version;
}

class CreateTrafficPolicyInstanceResponse {
  public ResourceURI $location;
  public TrafficPolicyInstance $traffic_policy_instance;
}

class CreateTrafficPolicyRequest {
  public TrafficPolicyComment $comment;
  public TrafficPolicyDocument $document;
  public TrafficPolicyName $name;
}

class CreateTrafficPolicyResponse {
  public ResourceURI $location;
  public TrafficPolicy $traffic_policy;
}

class CreateTrafficPolicyVersionRequest {
  public TrafficPolicyComment $comment;
  public TrafficPolicyDocument $document;
  public TrafficPolicyId $id;
}

class CreateTrafficPolicyVersionResponse {
  public ResourceURI $location;
  public TrafficPolicy $traffic_policy;
}

class CreateVPCAssociationAuthorizationRequest {
  public ResourceId $hosted_zone_id;
  public VPC $vpc;
}

class CreateVPCAssociationAuthorizationResponse {
  public ResourceId $hosted_zone_id;
  public VPC $vpc;
}

class DNSName {
}

class DNSRCode {
}

class DelegationSet {
  public Nonce $caller_reference;
  public ResourceId $id;
  public DelegationSetNameServers $name_servers;
}

class DelegationSetAlreadyCreated {
  public ErrorMessage $message;
}

class DelegationSetAlreadyReusable {
  public ErrorMessage $message;
}

class DelegationSetInUse {
  public ErrorMessage $message;
}

class DelegationSetNameServers {
}

class DelegationSetNotAvailable {
  public ErrorMessage $message;
}

class DelegationSetNotReusable {
  public ErrorMessage $message;
}

class DelegationSets {
}

class DeleteHealthCheckRequest {
  public HealthCheckId $health_check_id;
}

class DeleteHealthCheckResponse {
}

class DeleteHostedZoneRequest {
  public ResourceId $id;
}

class DeleteHostedZoneResponse {
  public ChangeInfo $change_info;
}

class DeleteQueryLoggingConfigRequest {
  public QueryLoggingConfigId $id;
}

class DeleteQueryLoggingConfigResponse {
}

class DeleteReusableDelegationSetRequest {
  public ResourceId $id;
}

class DeleteReusableDelegationSetResponse {
}

class DeleteTrafficPolicyInstanceRequest {
  public TrafficPolicyInstanceId $id;
}

class DeleteTrafficPolicyInstanceResponse {
}

class DeleteTrafficPolicyRequest {
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $version;
}

class DeleteTrafficPolicyResponse {
}

class DeleteVPCAssociationAuthorizationRequest {
  public ResourceId $hosted_zone_id;
  public VPC $vpc;
}

class DeleteVPCAssociationAuthorizationResponse {
}

class Dimension {
  public DimensionField $name;
  public DimensionField $value;
}

class DimensionField {
}

class DimensionList {
}

class Disabled {
}

class DisassociateVPCComment {
}

class DisassociateVPCFromHostedZoneRequest {
  public DisassociateVPCComment $comment;
  public ResourceId $hosted_zone_id;
  public VPC $vpc;
}

class DisassociateVPCFromHostedZoneResponse {
  public ChangeInfo $change_info;
}

class EnableSNI {
}

class ErrorMessage {
}

class ErrorMessages {
}

class EvaluationPeriods {
}

class FailureThreshold {
}

class FullyQualifiedDomainName {
}

class GeoLocation {
  public GeoLocationContinentCode $continent_code;
  public GeoLocationCountryCode $country_code;
  public GeoLocationSubdivisionCode $subdivision_code;
}

class GeoLocationContinentCode {
}

class GeoLocationContinentName {
}

class GeoLocationCountryCode {
}

class GeoLocationCountryName {
}

class GeoLocationDetails {
  public GeoLocationContinentCode $continent_code;
  public GeoLocationContinentName $continent_name;
  public GeoLocationCountryCode $country_code;
  public GeoLocationCountryName $country_name;
  public GeoLocationSubdivisionCode $subdivision_code;
  public GeoLocationSubdivisionName $subdivision_name;
}

class GeoLocationDetailsList {
}

class GeoLocationSubdivisionCode {
}

class GeoLocationSubdivisionName {
}

class GetAccountLimitRequest {
  public AccountLimitType $type;
}

class GetAccountLimitResponse {
  public UsageCount $count;
  public AccountLimit $limit;
}

class GetChangeRequest {
  public ResourceId $id;
}

class GetChangeResponse {
  public ChangeInfo $change_info;
}

class GetCheckerIpRangesRequest {
}

class GetCheckerIpRangesResponse {
  public CheckerIpRanges $checker_ip_ranges;
}

class GetGeoLocationRequest {
  public GeoLocationContinentCode $continent_code;
  public GeoLocationCountryCode $country_code;
  public GeoLocationSubdivisionCode $subdivision_code;
}

class GetGeoLocationResponse {
  public GeoLocationDetails $geo_location_details;
}

class GetHealthCheckCountRequest {
}

class GetHealthCheckCountResponse {
  public HealthCheckCount $health_check_count;
}

class GetHealthCheckLastFailureReasonRequest {
  public HealthCheckId $health_check_id;
}

class GetHealthCheckLastFailureReasonResponse {
  public HealthCheckObservations $health_check_observations;
}

class GetHealthCheckRequest {
  public HealthCheckId $health_check_id;
}

class GetHealthCheckResponse {
  public HealthCheck $health_check;
}

class GetHealthCheckStatusRequest {
  public HealthCheckId $health_check_id;
}

class GetHealthCheckStatusResponse {
  public HealthCheckObservations $health_check_observations;
}

class GetHostedZoneCountRequest {
}

class GetHostedZoneCountResponse {
  public HostedZoneCount $hosted_zone_count;
}

class GetHostedZoneLimitRequest {
  public ResourceId $hosted_zone_id;
  public HostedZoneLimitType $type;
}

class GetHostedZoneLimitResponse {
  public UsageCount $count;
  public HostedZoneLimit $limit;
}

class GetHostedZoneRequest {
  public ResourceId $id;
}

class GetHostedZoneResponse {
  public DelegationSet $delegation_set;
  public HostedZone $hosted_zone;
  public VPCs $vp_cs;
}

class GetQueryLoggingConfigRequest {
  public QueryLoggingConfigId $id;
}

class GetQueryLoggingConfigResponse {
  public QueryLoggingConfig $query_logging_config;
}

class GetReusableDelegationSetLimitRequest {
  public ResourceId $delegation_set_id;
  public ReusableDelegationSetLimitType $type;
}

class GetReusableDelegationSetLimitResponse {
  public UsageCount $count;
  public ReusableDelegationSetLimit $limit;
}

class GetReusableDelegationSetRequest {
  public ResourceId $id;
}

class GetReusableDelegationSetResponse {
  public DelegationSet $delegation_set;
}

class GetTrafficPolicyInstanceCountRequest {
}

class GetTrafficPolicyInstanceCountResponse {
  public TrafficPolicyInstanceCount $traffic_policy_instance_count;
}

class GetTrafficPolicyInstanceRequest {
  public TrafficPolicyInstanceId $id;
}

class GetTrafficPolicyInstanceResponse {
  public TrafficPolicyInstance $traffic_policy_instance;
}

class GetTrafficPolicyRequest {
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $version;
}

class GetTrafficPolicyResponse {
  public TrafficPolicy $traffic_policy;
}

class HealthCheck {
  public HealthCheckNonce $caller_reference;
  public CloudWatchAlarmConfiguration $cloud_watch_alarm_configuration;
  public HealthCheckConfig $health_check_config;
  public HealthCheckVersion $health_check_version;
  public HealthCheckId $id;
  public LinkedService $linked_service;
}

class HealthCheckAlreadyExists {
  public ErrorMessage $message;
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
}

class HealthCheckCount {
}

class HealthCheckId {
}

class HealthCheckInUse {
  public ErrorMessage $message;
}

class HealthCheckNonce {
}

class HealthCheckObservation {
  public IPAddress $ip_address;
  public HealthCheckRegion $region;
  public StatusReport $status_report;
}

class HealthCheckObservations {
}

class HealthCheckRegion {
}

class HealthCheckRegionList {
}

class HealthCheckType {
}

class HealthCheckVersion {
}

class HealthCheckVersionMismatch {
  public ErrorMessage $message;
}

class HealthChecks {
}

class HealthThreshold {
}

class HostedZone {
  public Nonce $caller_reference;
  public HostedZoneConfig $config;
  public ResourceId $id;
  public LinkedService $linked_service;
  public DNSName $name;
  public HostedZoneRRSetCount $resource_record_set_count;
}

class HostedZoneAlreadyExists {
  public ErrorMessage $message;
}

class HostedZoneConfig {
  public ResourceDescription $comment;
  public IsPrivateZone $private_zone;
}

class HostedZoneCount {
}

class HostedZoneLimit {
  public HostedZoneLimitType $type;
  public LimitValue $value;
}

class HostedZoneLimitType {
}

class HostedZoneNotEmpty {
  public ErrorMessage $message;
}

class HostedZoneNotFound {
  public ErrorMessage $message;
}

class HostedZoneNotPrivate {
  public ErrorMessage $message;
}

class HostedZoneRRSetCount {
}

class HostedZones {
}

class IPAddress {
}

class IPAddressCidr {
}

class IncompatibleVersion {
  public ErrorMessage $message;
}

class InsufficientCloudWatchLogsResourcePolicy {
  public ErrorMessage $message;
}

class InsufficientDataHealthStatus {
}

class InvalidArgument {
  public ErrorMessage $message;
}

class InvalidChangeBatch {
  public ErrorMessage $message;
  public ErrorMessages $messages;
}

class InvalidDomainName {
  public ErrorMessage $message;
}

class InvalidInput {
  public ErrorMessage $message;
}

class InvalidPaginationToken {
  public ErrorMessage $message;
}

class InvalidTrafficPolicyDocument {
  public ErrorMessage $message;
}

class InvalidVPCId {
  public ErrorMessage $message;
}

class Inverted {
}

class IsPrivateZone {
}

class LastVPCAssociation {
  public ErrorMessage $message;
}

class LimitValue {
}

class LimitsExceeded {
  public ErrorMessage $message;
}

class LinkedService {
  public ResourceDescription $description;
  public ServicePrincipal $service_principal;
}

class ListGeoLocationsRequest {
  public PageMaxItems $max_items;
  public GeoLocationContinentCode $start_continent_code;
  public GeoLocationCountryCode $start_country_code;
  public GeoLocationSubdivisionCode $start_subdivision_code;
}

class ListGeoLocationsResponse {
  public GeoLocationDetailsList $geo_location_details_list;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public GeoLocationContinentCode $next_continent_code;
  public GeoLocationCountryCode $next_country_code;
  public GeoLocationSubdivisionCode $next_subdivision_code;
}

class ListHealthChecksRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;
}

class ListHealthChecksResponse {
  public HealthChecks $health_checks;
  public PageTruncated $is_truncated;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public PageMarker $next_marker;
}

class ListHostedZonesByNameRequest {
  public DNSName $dns_name;
  public ResourceId $hosted_zone_id;
  public PageMaxItems $max_items;
}

class ListHostedZonesByNameResponse {
  public DNSName $dns_name;
  public ResourceId $hosted_zone_id;
  public HostedZones $hosted_zones;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $next_dns_name;
  public ResourceId $next_hosted_zone_id;
}

class ListHostedZonesRequest {
  public ResourceId $delegation_set_id;
  public PageMarker $marker;
  public PageMaxItems $max_items;
}

class ListHostedZonesResponse {
  public HostedZones $hosted_zones;
  public PageTruncated $is_truncated;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public PageMarker $next_marker;
}

class ListQueryLoggingConfigsRequest {
  public ResourceId $hosted_zone_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListQueryLoggingConfigsResponse {
  public PaginationToken $next_token;
  public QueryLoggingConfigs $query_logging_configs;
}

class ListResourceRecordSetsRequest {
  public ResourceId $hosted_zone_id;
  public PageMaxItems $max_items;
  public ResourceRecordSetIdentifier $start_record_identifier;
  public DNSName $start_record_name;
  public RRType $start_record_type;
}

class ListResourceRecordSetsResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public ResourceRecordSetIdentifier $next_record_identifier;
  public DNSName $next_record_name;
  public RRType $next_record_type;
  public ResourceRecordSets $resource_record_sets;
}

class ListReusableDelegationSetsRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;
}

class ListReusableDelegationSetsResponse {
  public DelegationSets $delegation_sets;
  public PageTruncated $is_truncated;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public PageMarker $next_marker;
}

class ListTagsForResourceRequest {
  public TagResourceId $resource_id;
  public TagResourceType $resource_type;
}

class ListTagsForResourceResponse {
  public ResourceTagSet $resource_tag_set;
}

class ListTagsForResourcesRequest {
  public TagResourceIdList $resource_ids;
  public TagResourceType $resource_type;
}

class ListTagsForResourcesResponse {
  public ResourceTagSetList $resource_tag_sets;
}

class ListTrafficPoliciesRequest {
  public PageMaxItems $max_items;
  public TrafficPolicyId $traffic_policy_id_marker;
}

class ListTrafficPoliciesResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public TrafficPolicyId $traffic_policy_id_marker;
  public TrafficPolicySummaries $traffic_policy_summaries;
}

class ListTrafficPolicyInstancesByHostedZoneRequest {
  public ResourceId $hosted_zone_id;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
}

class ListTrafficPolicyInstancesByHostedZoneResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyInstances $traffic_policy_instances;
}

class ListTrafficPolicyInstancesByPolicyRequest {
  public ResourceId $hosted_zone_id_marker;
  public PageMaxItems $max_items;
  public TrafficPolicyId $traffic_policy_id;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyVersion $traffic_policy_version;
}

class ListTrafficPolicyInstancesByPolicyResponse {
  public ResourceId $hosted_zone_id_marker;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyInstances $traffic_policy_instances;
}

class ListTrafficPolicyInstancesRequest {
  public ResourceId $hosted_zone_id_marker;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
}

class ListTrafficPolicyInstancesResponse {
  public ResourceId $hosted_zone_id_marker;
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public DNSName $traffic_policy_instance_name_marker;
  public RRType $traffic_policy_instance_type_marker;
  public TrafficPolicyInstances $traffic_policy_instances;
}

class ListTrafficPolicyVersionsRequest {
  public TrafficPolicyId $id;
  public PageMaxItems $max_items;
  public TrafficPolicyVersionMarker $traffic_policy_version_marker;
}

class ListTrafficPolicyVersionsResponse {
  public PageTruncated $is_truncated;
  public PageMaxItems $max_items;
  public TrafficPolicies $traffic_policies;
  public TrafficPolicyVersionMarker $traffic_policy_version_marker;
}

class ListVPCAssociationAuthorizationsRequest {
  public ResourceId $hosted_zone_id;
  public MaxResults $max_results;
  public PaginationToken $next_token;
}

class ListVPCAssociationAuthorizationsResponse {
  public ResourceId $hosted_zone_id;
  public PaginationToken $next_token;
  public VPCs $vp_cs;
}

class MaxResults {
}

class MeasureLatency {
}

class Message {
}

class MetricName {
}

class Nameserver {
}

class Namespace {
}

class NoSuchChange {
  public ErrorMessage $message;
}

class NoSuchCloudWatchLogsLogGroup {
  public ErrorMessage $message;
}

class NoSuchDelegationSet {
  public ErrorMessage $message;
}

class NoSuchGeoLocation {
  public ErrorMessage $message;
}

class NoSuchHealthCheck {
  public ErrorMessage $message;
}

class NoSuchHostedZone {
  public ErrorMessage $message;
}

class NoSuchQueryLoggingConfig {
  public ErrorMessage $message;
}

class NoSuchTrafficPolicy {
  public ErrorMessage $message;
}

class NoSuchTrafficPolicyInstance {
  public ErrorMessage $message;
}

class Nonce {
}

class NotAuthorizedException {
  public ErrorMessage $message;
}

class PageMarker {
}

class PageMaxItems {
}

class PageTruncated {
}

class PaginationToken {
}

class Period {
}

class Port {
}

class PriorRequestNotComplete {
  public ErrorMessage $message;
}

class PublicZoneVPCAssociation {
  public ErrorMessage $message;
}

class QueryLoggingConfig {
  public CloudWatchLogsLogGroupArn $cloud_watch_logs_log_group_arn;
  public ResourceId $hosted_zone_id;
  public QueryLoggingConfigId $id;
}

class QueryLoggingConfigAlreadyExists {
  public ErrorMessage $message;
}

class QueryLoggingConfigId {
}

class QueryLoggingConfigs {
}

class RData {
}

class RRType {
}

class RecordData {
}

class RecordDataEntry {
}

class RequestInterval {
}

class ResettableElementName {
}

class ResettableElementNameList {
}

class ResourceDescription {
}

class ResourceId {
}

class ResourcePath {
}

class ResourceRecord {
  public RData $value;
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
}

class ResourceRecordSetFailover {
}

class ResourceRecordSetIdentifier {
}

class ResourceRecordSetMultiValueAnswer {
}

class ResourceRecordSetRegion {
}

class ResourceRecordSetWeight {
}

class ResourceRecordSets {
}

class ResourceRecords {
}

class ResourceTagSet {
  public TagResourceId $resource_id;
  public TagResourceType $resource_type;
  public TagList $tags;
}

class ResourceTagSetList {
}

class ResourceURI {
}

class ReusableDelegationSetLimit {
  public ReusableDelegationSetLimitType $type;
  public LimitValue $value;
}

class ReusableDelegationSetLimitType {
}

class SearchString {
}

class ServicePrincipal {
}

class Statistic {
}

class Status {
}

class StatusReport {
  public TimeStamp $checked_time;
  public Status $status;
}

class SubnetMask {
}

class TTL {
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

class TagResourceId {
}

class TagResourceIdList {
}

class TagResourceType {
}

class TagValue {
}

class TestDNSAnswerRequest {
  public IPAddress $edns_0_client_subnet_ip;
  public SubnetMask $edns_0_client_subnet_mask;
  public ResourceId $hosted_zone_id;
  public DNSName $record_name;
  public RRType $record_type;
  public IPAddress $resolver_ip;
}

class TestDNSAnswerResponse {
  public Nameserver $nameserver;
  public TransportProtocol $protocol;
  public RecordData $record_data;
  public DNSName $record_name;
  public RRType $record_type;
  public DNSRCode $response_code;
}

class Threshold {
}

class ThrottlingException {
  public ErrorMessage $message;
}

class TimeStamp {
}

class TooManyHealthChecks {
  public ErrorMessage $message;
}

class TooManyHostedZones {
  public ErrorMessage $message;
}

class TooManyTrafficPolicies {
  public ErrorMessage $message;
}

class TooManyTrafficPolicyInstances {
  public ErrorMessage $message;
}

class TooManyTrafficPolicyVersionsForCurrentPolicy {
  public ErrorMessage $message;
}

class TooManyVPCAssociationAuthorizations {
  public ErrorMessage $message;
}

class TrafficPolicies {
}

class TrafficPolicy {
  public TrafficPolicyComment $comment;
  public TrafficPolicyDocument $document;
  public TrafficPolicyId $id;
  public TrafficPolicyName $name;
  public RRType $type;
  public TrafficPolicyVersion $version;
}

class TrafficPolicyAlreadyExists {
  public ErrorMessage $message;
}

class TrafficPolicyComment {
}

class TrafficPolicyDocument {
}

class TrafficPolicyId {
}

class TrafficPolicyInUse {
  public ErrorMessage $message;
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
}

class TrafficPolicyInstanceAlreadyExists {
  public ErrorMessage $message;
}

class TrafficPolicyInstanceCount {
}

class TrafficPolicyInstanceId {
}

class TrafficPolicyInstanceState {
}

class TrafficPolicyInstances {
}

class TrafficPolicyName {
}

class TrafficPolicySummaries {
}

class TrafficPolicySummary {
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $latest_version;
  public TrafficPolicyName $name;
  public TrafficPolicyVersion $traffic_policy_count;
  public RRType $type;
}

class TrafficPolicyVersion {
}

class TrafficPolicyVersionMarker {
}

class TransportProtocol {
}

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
}

class UpdateHealthCheckResponse {
  public HealthCheck $health_check;
}

class UpdateHostedZoneCommentRequest {
  public ResourceDescription $comment;
  public ResourceId $id;
}

class UpdateHostedZoneCommentResponse {
  public HostedZone $hosted_zone;
}

class UpdateTrafficPolicyCommentRequest {
  public TrafficPolicyComment $comment;
  public TrafficPolicyId $id;
  public TrafficPolicyVersion $version;
}

class UpdateTrafficPolicyCommentResponse {
  public TrafficPolicy $traffic_policy;
}

class UpdateTrafficPolicyInstanceRequest {
  public TrafficPolicyInstanceId $id;
  public TTL $ttl;
  public TrafficPolicyId $traffic_policy_id;
  public TrafficPolicyVersion $traffic_policy_version;
}

class UpdateTrafficPolicyInstanceResponse {
  public TrafficPolicyInstance $traffic_policy_instance;
}

class UsageCount {
}

class VPC {
  public VPCId $vpc_id;
  public VPCRegion $vpc_region;
}

class VPCAssociationAuthorizationNotFound {
  public ErrorMessage $message;
}

class VPCAssociationNotFound {
  public ErrorMessage $message;
}

class VPCId {
}

class VPCRegion {
}

class VPCs {
}

