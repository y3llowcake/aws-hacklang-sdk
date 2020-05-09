<?hh // strict
namespace slack\aws\guardduty;

interface GuardDuty {
  public function GetThreatIntelSet(GetThreatIntelSetRequest) Awaitable<Errors\Result<GetThreatIntelSetResponse>>;
  public function GetFindingsStatistics(GetFindingsStatisticsRequest) Awaitable<Errors\Result<GetFindingsStatisticsResponse>>;
  public function StopMonitoringMembers(StopMonitoringMembersRequest) Awaitable<Errors\Result<StopMonitoringMembersResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateOrganizationConfiguration(UpdateOrganizationConfigurationRequest) Awaitable<Errors\Result<UpdateOrganizationConfigurationResponse>>;
  public function CreateMembers(CreateMembersRequest) Awaitable<Errors\Result<CreateMembersResponse>>;
  public function DisassociateMembers(DisassociateMembersRequest) Awaitable<Errors\Result<DisassociateMembersResponse>>;
  public function ListMembers(ListMembersRequest) Awaitable<Errors\Result<ListMembersResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function StartMonitoringMembers(StartMonitoringMembersRequest) Awaitable<Errors\Result<StartMonitoringMembersResponse>>;
  public function UpdateFilter(UpdateFilterRequest) Awaitable<Errors\Result<UpdateFilterResponse>>;
  public function DeleteDetector(DeleteDetectorRequest) Awaitable<Errors\Result<DeleteDetectorResponse>>;
  public function DescribePublishingDestination(DescribePublishingDestinationRequest) Awaitable<Errors\Result<DescribePublishingDestinationResponse>>;
  public function GetFilter(GetFilterRequest) Awaitable<Errors\Result<GetFilterResponse>>;
  public function UnarchiveFindings(UnarchiveFindingsRequest) Awaitable<Errors\Result<UnarchiveFindingsResponse>>;
  public function UpdateFindingsFeedback(UpdateFindingsFeedbackRequest) Awaitable<Errors\Result<UpdateFindingsFeedbackResponse>>;
  public function ListThreatIntelSets(ListThreatIntelSetsRequest) Awaitable<Errors\Result<ListThreatIntelSetsResponse>>;
  public function UpdatePublishingDestination(UpdatePublishingDestinationRequest) Awaitable<Errors\Result<UpdatePublishingDestinationResponse>>;
  public function DeleteIPSet(DeleteIPSetRequest) Awaitable<Errors\Result<DeleteIPSetResponse>>;
  public function DeleteInvitations(DeleteInvitationsRequest) Awaitable<Errors\Result<DeleteInvitationsResponse>>;
  public function DescribeOrganizationConfiguration(DescribeOrganizationConfigurationRequest) Awaitable<Errors\Result<DescribeOrganizationConfigurationResponse>>;
  public function EnableOrganizationAdminAccount(EnableOrganizationAdminAccountRequest) Awaitable<Errors\Result<EnableOrganizationAdminAccountResponse>>;
  public function ListIPSets(ListIPSetsRequest) Awaitable<Errors\Result<ListIPSetsResponse>>;
  public function ListPublishingDestinations(ListPublishingDestinationsRequest) Awaitable<Errors\Result<ListPublishingDestinationsResponse>>;
  public function ListDetectors(ListDetectorsRequest) Awaitable<Errors\Result<ListDetectorsResponse>>;
  public function DeleteFilter(DeleteFilterRequest) Awaitable<Errors\Result<DeleteFilterResponse>>;
  public function DeleteThreatIntelSet(DeleteThreatIntelSetRequest) Awaitable<Errors\Result<DeleteThreatIntelSetResponse>>;
  public function UpdateIPSet(UpdateIPSetRequest) Awaitable<Errors\Result<UpdateIPSetResponse>>;
  public function ArchiveFindings(ArchiveFindingsRequest) Awaitable<Errors\Result<ArchiveFindingsResponse>>;
  public function GetMembers(GetMembersRequest) Awaitable<Errors\Result<GetMembersResponse>>;
  public function CreateDetector(CreateDetectorRequest) Awaitable<Errors\Result<CreateDetectorResponse>>;
  public function DeclineInvitations(DeclineInvitationsRequest) Awaitable<Errors\Result<DeclineInvitationsResponse>>;
  public function CreateThreatIntelSet(CreateThreatIntelSetRequest) Awaitable<Errors\Result<CreateThreatIntelSetResponse>>;
  public function DeleteMembers(DeleteMembersRequest) Awaitable<Errors\Result<DeleteMembersResponse>>;
  public function DeletePublishingDestination(DeletePublishingDestinationRequest) Awaitable<Errors\Result<DeletePublishingDestinationResponse>>;
  public function GetIPSet(GetIPSetRequest) Awaitable<Errors\Result<GetIPSetResponse>>;
  public function GetMasterAccount(GetMasterAccountRequest) Awaitable<Errors\Result<GetMasterAccountResponse>>;
  public function UpdateThreatIntelSet(UpdateThreatIntelSetRequest) Awaitable<Errors\Result<UpdateThreatIntelSetResponse>>;
  public function InviteMembers(InviteMembersRequest) Awaitable<Errors\Result<InviteMembersResponse>>;
  public function ListFilters(ListFiltersRequest) Awaitable<Errors\Result<ListFiltersResponse>>;
  public function ListInvitations(ListInvitationsRequest) Awaitable<Errors\Result<ListInvitationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function DisassociateFromMasterAccount(DisassociateFromMasterAccountRequest) Awaitable<Errors\Result<DisassociateFromMasterAccountResponse>>;
  public function GetDetector(GetDetectorRequest) Awaitable<Errors\Result<GetDetectorResponse>>;
  public function GetFindings(GetFindingsRequest) Awaitable<Errors\Result<GetFindingsResponse>>;
  public function UpdateDetector(UpdateDetectorRequest) Awaitable<Errors\Result<UpdateDetectorResponse>>;
  public function AcceptInvitation(AcceptInvitationRequest) Awaitable<Errors\Result<AcceptInvitationResponse>>;
  public function CreateIPSet(CreateIPSetRequest) Awaitable<Errors\Result<CreateIPSetResponse>>;
  public function CreateSampleFindings(CreateSampleFindingsRequest) Awaitable<Errors\Result<CreateSampleFindingsResponse>>;
  public function DisableOrganizationAdminAccount(DisableOrganizationAdminAccountRequest) Awaitable<Errors\Result<DisableOrganizationAdminAccountResponse>>;
  public function ListFindings(ListFindingsRequest) Awaitable<Errors\Result<ListFindingsResponse>>;
  public function ListOrganizationAdminAccounts(ListOrganizationAdminAccountsRequest) Awaitable<Errors\Result<ListOrganizationAdminAccountsResponse>>;
  public function CreateFilter(CreateFilterRequest) Awaitable<Errors\Result<CreateFilterResponse>>;
  public function CreatePublishingDestination(CreatePublishingDestinationRequest) Awaitable<Errors\Result<CreatePublishingDestinationResponse>>;
  public function GetInvitationsCount(GetInvitationsCountRequest) Awaitable<Errors\Result<GetInvitationsCountResponse>>;
}

class DestinationProperties {
  public string $destination_arn;
  public string $kms_key_arn;
}

class Equals {
}

class InviteMembersRequest {
  public AccountIds $account_ids;
  public boolean $disable_email_notification;
  public string $message;
  public DetectorId $detector_id;
}

class ListFindingsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public DetectorId $detector_id;
  public FindingCriteria $finding_criteria;
  public SortCriteria $sort_criteria;
}

class UpdateIPSetRequest {
  public boolean $activate;
  public DetectorId $detector_id;
  public string $ip_set_id;
  public Name $name;
  public Location $location;
}

class DetectorIds {
}

class ListThreatIntelSetsRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
}

class PortProbeDetail {
  public LocalIpDetails $local_ip_details;
  public RemoteIpDetails $remote_ip_details;
  public LocalPortDetails $local_port_details;
}

class ThreatIntelligenceDetails {
}

class UpdatePublishingDestinationRequest {
  public DetectorId $detector_id;
  public string $destination_id;
  public DestinationProperties $destination_properties;
}

class ThreatNames {
}

class ArchiveFindingsRequest {
  public DetectorId $detector_id;
  public FindingIds $finding_ids;
}

class CountBySeverity {
}

class ListIPSetsRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class DisassociateMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class PortProbeAction {
  public boolean $blocked;
  public PortProbeDetails $port_probe_details;
}

class DeleteMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class TagResourceResponse {
}

class GetThreatIntelSetRequest {
  public DetectorId $detector_id;
  public string $threat_intel_set_id;
}

class ListInvitationsResponse {
  public Invitations $invitations;
  public string $next_token;
}

class OrderBy {
}

class CreateSampleFindingsRequest {
  public DetectorId $detector_id;
  public FindingTypes $finding_types;
}

class DetectorId {
}

class DisassociateMembersRequest {
  public DetectorId $detector_id;
  public AccountIds $account_ids;
}

class SecurityGroup {
  public string $group_id;
  public string $group_name;
}

class UpdateOrganizationConfigurationRequest {
  public DetectorId $detector_id;
  public boolean $auto_enable;
}

class ListMembersResponse {
  public Members $members;
  public string $next_token;
}

class UpdateFilterResponse {
  public FilterName $name;
}

class UpdateThreatIntelSetRequest {
  public DetectorId $detector_id;
  public string $threat_intel_set_id;
  public Name $name;
  public Location $location;
  public boolean $activate;
}

class DeclineInvitationsResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class FilterNames {
}

class GetMembersRequest {
  public DetectorId $detector_id;
  public AccountIds $account_ids;
}

class GetFilterResponse {
  public FilterName $name;
  public FilterDescription $description;
  public FilterAction $action;
  public FilterRank $rank;
  public FindingCriteria $finding_criteria;
  public TagMap $tags;
}

class DomainDetails {
  public string $domain;
}

class GetMasterAccountResponse {
  public Master $master;
}

class AccountId {
}

class FilterRank {
}

class GetThreatIntelSetResponse {
  public ThreatIntelSetFormat $format;
  public Location $location;
  public ThreatIntelSetStatus $status;
  public TagMap $tags;
  public Name $name;
}

class Master {
  public AccountId $account_id;
  public string $invitation_id;
  public string $relationship_status;
  public string $invited_at;
}

class SortCriteria {
  public OrderBy $order_by;
  public string $attribute_name;
}

class Tag {
  public string $key;
  public string $value;
}

class Criterion {
}

class GetFilterRequest {
  public DetectorId $detector_id;
  public string $filter_name;
}

class String {
}

class UpdateFindingsFeedbackResponse {
}

class CreateMembersRequest {
  public AccountDetails $account_details;
  public DetectorId $detector_id;
}

class GetFindingsStatisticsResponse {
  public FindingStatistics $finding_statistics;
}

class RemoteIpDetails {
  public GeoLocation $geo_location;
  public string $ip_address_v_4;
  public Organization $organization;
  public City $city;
  public Country $country;
}

class AccessKeyDetails {
  public string $access_key_id;
  public string $principal_id;
  public string $user_name;
  public string $user_type;
}

class Finding {
  public string $description;
  public string $partition;
  public Resource $resource;
  public string $updated_at;
  public string $region;
  public Double $severity;
  public string $title;
  public FindingType $type;
  public string $account_id;
  public Double $confidence;
  public string $id;
  public string $schema_version;
  public string $arn;
  public string $created_at;
  public Service $service;
}

class FindingStatisticTypes {
}

class DisassociateFromMasterAccountResponse {
}

class Email {
}

class EnableOrganizationAdminAccountResponse {
}

class IpSetFormat {
}

class InternalServerErrorException {
  public string $message;
  public string $type;
}

class ListDetectorsResponse {
  public DetectorIds $detector_ids;
  public string $next_token;
}

class ListFiltersRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListFindingsResponse {
  public string $next_token;
  public FindingIds $finding_ids;
}

class DestinationType {
}

class ListPublishingDestinationsRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
}

class MaxResults {
}

class UpdateFindingsFeedbackRequest {
  public DetectorId $detector_id;
  public FindingIds $finding_ids;
  public Feedback $feedback;
  public string $comments;
}

class Destinations {
}

class DnsRequestAction {
  public string $domain;
}

class CreateDetectorRequest {
  public boolean $enable;
  public ClientToken $client_token;
  public FindingPublishingFrequency $finding_publishing_frequency;
  public TagMap $tags;
}

class AcceptInvitationRequest {
  public string $invitation_id;
  public DetectorId $detector_id;
  public string $master_id;
}

class DescribeOrganizationConfigurationRequest {
  public DetectorId $detector_id;
}

class DescribePublishingDestinationResponse {
  public Long $publishing_failure_start_timestamp;
  public DestinationProperties $destination_properties;
  public string $destination_id;
  public DestinationType $destination_type;
  public PublishingStatus $status;
}

class FilterAction {
}

class GetMasterAccountRequest {
  public DetectorId $detector_id;
}

class ThreatIntelSetFormat {
}

class CreateFilterRequest {
  public DetectorId $detector_id;
  public FilterName $name;
  public FilterDescription $description;
  public FilterAction $action;
  public FilterRank $rank;
  public FindingCriteria $finding_criteria;
  public ClientToken $client_token;
  public TagMap $tags;
}

class DeleteMembersRequest {
  public DetectorId $detector_id;
  public AccountIds $account_ids;
}

class Evidence {
  public ThreatIntelligenceDetails $threat_intelligence_details;
}

class Members {
}

class GetFindingsStatisticsRequest {
  public FindingStatisticTypes $finding_statistic_types;
  public FindingCriteria $finding_criteria;
  public DetectorId $detector_id;
}

class InstanceDetails {
  public string $availability_zone;
  public string $image_description;
  public string $image_id;
  public string $instance_state;
  public string $outpost_arn;
  public string $launch_time;
  public NetworkInterfaces $network_interfaces;
  public ProductCodes $product_codes;
  public IamInstanceProfile $iam_instance_profile;
  public string $instance_id;
  public string $instance_type;
  public string $platform;
  public Tags $tags;
}

class AccountDetail {
  public AccountId $account_id;
  public Email $email;
}

class DeleteIPSetRequest {
  public DetectorId $detector_id;
  public string $ip_set_id;
}

class DeleteThreatIntelSetRequest {
  public DetectorId $detector_id;
  public string $threat_intel_set_id;
}

class ListOrganizationAdminAccountsRequest {
  public string $next_token;
  public MaxResults $max_results;
}

class ProductCodes {
}

class StartMonitoringMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class DeletePublishingDestinationResponse {
}

class TagResourceRequest {
  public GuardDutyArn $resource_arn;
  public TagMap $tags;
}

class UnprocessedAccount {
  public AccountId $account_id;
  public string $result;
}

class UpdateFilterRequest {
  public DetectorId $detector_id;
  public string $filter_name;
  public FilterDescription $description;
  public FilterAction $action;
  public FilterRank $rank;
  public FindingCriteria $finding_criteria;
}

class PrivateIpAddresses {
}

class TagKey {
}

class FindingType {
}

class FindingTypes {
}

class GetDetectorRequest {
  public DetectorId $detector_id;
}

class ListPublishingDestinationsResponse {
  public Destinations $destinations;
  public string $next_token;
}

class ListTagsForResourceRequest {
  public GuardDutyArn $resource_arn;
}

class TagMap {
}

class CreateIPSetResponse {
  public string $ip_set_id;
}

class CreateThreatIntelSetResponse {
  public string $threat_intel_set_id;
}

class Eq {
}

class NetworkConnectionAction {
  public LocalPortDetails $local_port_details;
  public string $protocol;
  public LocalIpDetails $local_ip_details;
  public RemoteIpDetails $remote_ip_details;
  public RemotePortDetails $remote_port_details;
  public boolean $blocked;
  public string $connection_direction;
}

class Resource {
  public AccessKeyDetails $access_key_details;
  public InstanceDetails $instance_details;
  public string $resource_type;
}

class ThreatIntelSetStatus {
}

class DeleteDetectorRequest {
  public DetectorId $detector_id;
}

class FindingStatistics {
  public CountBySeverity $count_by_severity;
}

class Ipv6Addresses {
}

class GetFindingsResponse {
  public Findings $findings;
}

class NetworkInterface {
  public Ipv6Addresses $ipv_6_addresses;
  public string $network_interface_id;
  public string $private_dns_name;
  public SecurityGroups $security_groups;
  public string $vpc_id;
  public string $private_ip_address;
  public PrivateIpAddresses $private_ip_addresses;
  public string $public_dns_name;
  public string $public_ip;
  public string $subnet_id;
}

class UpdateDetectorRequest {
  public DetectorId $detector_id;
  public boolean $enable;
  public FindingPublishingFrequency $finding_publishing_frequency;
}

class Invitation {
  public AccountId $account_id;
  public string $invitation_id;
  public string $relationship_status;
  public string $invited_at;
}

class ListDetectorsRequest {
  public MaxResults $max_results;
  public string $next_token;
}

class CreatePublishingDestinationRequest {
  public DetectorId $detector_id;
  public DestinationType $destination_type;
  public DestinationProperties $destination_properties;
  public ClientToken $client_token;
}

class DeleteIPSetResponse {
}

class FilterName {
}

class GetInvitationsCountResponse {
  public int $invitations_count;
}

class Organization {
  public string $asn;
  public string $asn_org;
  public string $isp;
  public string $org;
}

class PublishingStatus {
}

class FindingPublishingFrequency {
}

class Findings {
}

class NotEquals {
}

class AdminAccounts {
}

class FilterDescription {
}

class UnprocessedAccounts {
}

class UpdateThreatIntelSetResponse {
}

class Member {
  public Email $email;
  public string $relationship_status;
  public string $invited_at;
  public string $updated_at;
  public AccountId $account_id;
  public DetectorId $detector_id;
  public string $master_id;
}

class FindingIds {
}

class GuardDutyArn {
}

class IpSetStatus {
}

class UntagResourceRequest {
  public GuardDutyArn $resource_arn;
  public TagKeyList $tag_keys;
}

class City {
  public string $city_name;
}

class Country {
  public string $country_code;
  public string $country_name;
}

class DeleteDetectorResponse {
}

class DeleteInvitationsResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class DeleteThreatIntelSetResponse {
}

class GetIPSetRequest {
  public string $ip_set_id;
  public DetectorId $detector_id;
}

class UntagResourceResponse {
}

class AcceptInvitationResponse {
}

class ArchiveFindingsResponse {
}

class IamInstanceProfile {
  public string $arn;
  public string $id;
}

class AccountDetails {
}

class CreatePublishingDestinationResponse {
  public string $destination_id;
}

class GetFindingsRequest {
  public DetectorId $detector_id;
  public FindingIds $finding_ids;
  public SortCriteria $sort_criteria;
}

class RemotePortDetails {
  public int $port;
  public string $port_name;
}

class ThreatIntelSetIds {
}

class Destination {
  public string $destination_id;
  public DestinationType $destination_type;
  public PublishingStatus $status;
}

class DetectorStatus {
}

class Name {
}

class BadRequestException {
  public string $message;
  public string $type;
}

class NetworkInterfaces {
}

class GetIPSetResponse {
  public Name $name;
  public IpSetFormat $format;
  public Location $location;
  public IpSetStatus $status;
  public TagMap $tags;
}

class PortProbeDetails {
}

class ClientToken {
}

class GetInvitationsCountRequest {
}

class Neq {
}

class TagKeyList {
}

class ListMembersRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
  public string $only_associated;
}

class Location {
}

class ProductCode {
  public string $code;
  public string $product_type;
}

class UpdateDetectorResponse {
}

class Service {
  public DetectorId $detector_id;
  public string $event_first_seen;
  public string $event_last_seen;
  public string $service_name;
  public string $user_feedback;
  public boolean $archived;
  public int $count;
  public string $resource_role;
  public Action $action;
  public Evidence $evidence;
}

class AwsApiCallAction {
  public string $api;
  public string $caller_type;
  public DomainDetails $domain_details;
  public RemoteIpDetails $remote_ip_details;
  public string $service_name;
}

class Condition {
  public Long $greater_than_or_equal;
  public Long $less_than;
  public int $lt;
  public int $lte;
  public Equals $equals;
  public int $gte;
  public NotEquals $not_equals;
  public Long $greater_than;
  public Long $less_than_or_equal;
  public Eq $eq;
  public Neq $neq;
  public int $gt;
}

class CreateSampleFindingsResponse {
}

class Double {
}

class DeleteFilterResponse {
}

class ListInvitationsRequest {
  public MaxResults $max_results;
  public string $next_token;
}

class UpdateOrganizationConfigurationResponse {
}

class AdminAccount {
  public string $admin_account_id;
  public AdminStatus $admin_status;
}

class GeoLocation {
  public Double $lat;
  public Double $lon;
}

class Integer {
}

class AdminStatus {
}

class DeletePublishingDestinationRequest {
  public DetectorId $detector_id;
  public string $destination_id;
}

class ListIPSetsResponse {
  public IpSetIds $ip_set_ids;
  public string $next_token;
}

class LocalPortDetails {
  public int $port;
  public string $port_name;
}

class DeclineInvitationsRequest {
  public AccountIds $account_ids;
}

class DisassociateFromMasterAccountRequest {
  public DetectorId $detector_id;
}

class Invitations {
}

class ThreatIntelligenceDetail {
  public string $threat_list_name;
  public ThreatNames $threat_names;
}

class ListFiltersResponse {
  public FilterNames $filter_names;
  public string $next_token;
}

class UnarchiveFindingsResponse {
}

class Boolean {
}

class DeleteInvitationsRequest {
  public AccountIds $account_ids;
}

class CreateMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class DisableOrganizationAdminAccountResponse {
}

class Action {
  public AwsApiCallAction $aws_api_call_action;
  public DnsRequestAction $dns_request_action;
  public NetworkConnectionAction $network_connection_action;
  public PortProbeAction $port_probe_action;
  public string $action_type;
}

class DescribePublishingDestinationRequest {
  public DetectorId $detector_id;
  public string $destination_id;
}

class StopMonitoringMembersRequest {
  public DetectorId $detector_id;
  public AccountIds $account_ids;
}

class Tags {
}

class UpdatePublishingDestinationResponse {
}

class StartMonitoringMembersRequest {
  public DetectorId $detector_id;
  public AccountIds $account_ids;
}

class EnableOrganizationAdminAccountRequest {
  public string $admin_account_id;
}

class FindingStatisticType {
}

class LocalIpDetails {
  public string $ip_address_v_4;
}

class PrivateIpAddressDetails {
  public string $private_dns_name;
  public string $private_ip_address;
}

class TagValue {
}

class UnarchiveFindingsRequest {
  public FindingIds $finding_ids;
  public DetectorId $detector_id;
}

class FindingCriteria {
  public Criterion $criterion;
}

class DisableOrganizationAdminAccountRequest {
  public string $admin_account_id;
}

class Feedback {
}

class GetDetectorResponse {
  public string $updated_at;
  public TagMap $tags;
  public string $created_at;
  public FindingPublishingFrequency $finding_publishing_frequency;
  public string $service_role;
  public DetectorStatus $status;
}

class ListThreatIntelSetsResponse {
  public ThreatIntelSetIds $threat_intel_set_ids;
  public string $next_token;
}

class AccountIds {
}

class CreateIPSetRequest {
  public DetectorId $detector_id;
  public Name $name;
  public IpSetFormat $format;
  public Location $location;
  public boolean $activate;
  public ClientToken $client_token;
  public TagMap $tags;
}

class IpSetIds {
}

class UpdateIPSetResponse {
}

class CreateThreatIntelSetRequest {
  public ClientToken $client_token;
  public TagMap $tags;
  public DetectorId $detector_id;
  public Name $name;
  public ThreatIntelSetFormat $format;
  public Location $location;
  public boolean $activate;
}

class InviteMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class StopMonitoringMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class CreateDetectorResponse {
  public DetectorId $detector_id;
}

class CreateFilterResponse {
  public FilterName $name;
}

class Long {
}

class DescribeOrganizationConfigurationResponse {
  public boolean $auto_enable;
  public boolean $member_account_limit_reached;
}

class GetMembersResponse {
  public Members $members;
  public UnprocessedAccounts $unprocessed_accounts;
}

class DeleteFilterRequest {
  public DetectorId $detector_id;
  public string $filter_name;
}

class FindingId {
}

class ListOrganizationAdminAccountsResponse {
  public AdminAccounts $admin_accounts;
  public string $next_token;
}

class SecurityGroups {
}

