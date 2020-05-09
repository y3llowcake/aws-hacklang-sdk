<?hh // strict
namespace slack\aws\guardduty;

interface GuardDuty {
  public function AcceptInvitation(AcceptInvitationRequest): Awaitable<Errors\Result<AcceptInvitationResponse>>;
  public function ArchiveFindings(ArchiveFindingsRequest): Awaitable<Errors\Result<ArchiveFindingsResponse>>;
  public function CreateDetector(CreateDetectorRequest): Awaitable<Errors\Result<CreateDetectorResponse>>;
  public function CreateFilter(CreateFilterRequest): Awaitable<Errors\Result<CreateFilterResponse>>;
  public function CreateIPSet(CreateIPSetRequest): Awaitable<Errors\Result<CreateIPSetResponse>>;
  public function CreateMembers(CreateMembersRequest): Awaitable<Errors\Result<CreateMembersResponse>>;
  public function CreatePublishingDestination(CreatePublishingDestinationRequest): Awaitable<Errors\Result<CreatePublishingDestinationResponse>>;
  public function CreateSampleFindings(CreateSampleFindingsRequest): Awaitable<Errors\Result<CreateSampleFindingsResponse>>;
  public function CreateThreatIntelSet(CreateThreatIntelSetRequest): Awaitable<Errors\Result<CreateThreatIntelSetResponse>>;
  public function DeclineInvitations(DeclineInvitationsRequest): Awaitable<Errors\Result<DeclineInvitationsResponse>>;
  public function DeleteDetector(DeleteDetectorRequest): Awaitable<Errors\Result<DeleteDetectorResponse>>;
  public function DeleteFilter(DeleteFilterRequest): Awaitable<Errors\Result<DeleteFilterResponse>>;
  public function DeleteIPSet(DeleteIPSetRequest): Awaitable<Errors\Result<DeleteIPSetResponse>>;
  public function DeleteInvitations(DeleteInvitationsRequest): Awaitable<Errors\Result<DeleteInvitationsResponse>>;
  public function DeleteMembers(DeleteMembersRequest): Awaitable<Errors\Result<DeleteMembersResponse>>;
  public function DeletePublishingDestination(DeletePublishingDestinationRequest): Awaitable<Errors\Result<DeletePublishingDestinationResponse>>;
  public function DeleteThreatIntelSet(DeleteThreatIntelSetRequest): Awaitable<Errors\Result<DeleteThreatIntelSetResponse>>;
  public function DescribeOrganizationConfiguration(DescribeOrganizationConfigurationRequest): Awaitable<Errors\Result<DescribeOrganizationConfigurationResponse>>;
  public function DescribePublishingDestination(DescribePublishingDestinationRequest): Awaitable<Errors\Result<DescribePublishingDestinationResponse>>;
  public function DisableOrganizationAdminAccount(DisableOrganizationAdminAccountRequest): Awaitable<Errors\Result<DisableOrganizationAdminAccountResponse>>;
  public function DisassociateFromMasterAccount(DisassociateFromMasterAccountRequest): Awaitable<Errors\Result<DisassociateFromMasterAccountResponse>>;
  public function DisassociateMembers(DisassociateMembersRequest): Awaitable<Errors\Result<DisassociateMembersResponse>>;
  public function EnableOrganizationAdminAccount(EnableOrganizationAdminAccountRequest): Awaitable<Errors\Result<EnableOrganizationAdminAccountResponse>>;
  public function GetDetector(GetDetectorRequest): Awaitable<Errors\Result<GetDetectorResponse>>;
  public function GetFilter(GetFilterRequest): Awaitable<Errors\Result<GetFilterResponse>>;
  public function GetFindings(GetFindingsRequest): Awaitable<Errors\Result<GetFindingsResponse>>;
  public function GetFindingsStatistics(GetFindingsStatisticsRequest): Awaitable<Errors\Result<GetFindingsStatisticsResponse>>;
  public function GetIPSet(GetIPSetRequest): Awaitable<Errors\Result<GetIPSetResponse>>;
  public function GetInvitationsCount(GetInvitationsCountRequest): Awaitable<Errors\Result<GetInvitationsCountResponse>>;
  public function GetMasterAccount(GetMasterAccountRequest): Awaitable<Errors\Result<GetMasterAccountResponse>>;
  public function GetMembers(GetMembersRequest): Awaitable<Errors\Result<GetMembersResponse>>;
  public function GetThreatIntelSet(GetThreatIntelSetRequest): Awaitable<Errors\Result<GetThreatIntelSetResponse>>;
  public function InviteMembers(InviteMembersRequest): Awaitable<Errors\Result<InviteMembersResponse>>;
  public function ListDetectors(ListDetectorsRequest): Awaitable<Errors\Result<ListDetectorsResponse>>;
  public function ListFilters(ListFiltersRequest): Awaitable<Errors\Result<ListFiltersResponse>>;
  public function ListFindings(ListFindingsRequest): Awaitable<Errors\Result<ListFindingsResponse>>;
  public function ListIPSets(ListIPSetsRequest): Awaitable<Errors\Result<ListIPSetsResponse>>;
  public function ListInvitations(ListInvitationsRequest): Awaitable<Errors\Result<ListInvitationsResponse>>;
  public function ListMembers(ListMembersRequest): Awaitable<Errors\Result<ListMembersResponse>>;
  public function ListOrganizationAdminAccounts(ListOrganizationAdminAccountsRequest): Awaitable<Errors\Result<ListOrganizationAdminAccountsResponse>>;
  public function ListPublishingDestinations(ListPublishingDestinationsRequest): Awaitable<Errors\Result<ListPublishingDestinationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListThreatIntelSets(ListThreatIntelSetsRequest): Awaitable<Errors\Result<ListThreatIntelSetsResponse>>;
  public function StartMonitoringMembers(StartMonitoringMembersRequest): Awaitable<Errors\Result<StartMonitoringMembersResponse>>;
  public function StopMonitoringMembers(StopMonitoringMembersRequest): Awaitable<Errors\Result<StopMonitoringMembersResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UnarchiveFindings(UnarchiveFindingsRequest): Awaitable<Errors\Result<UnarchiveFindingsResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDetector(UpdateDetectorRequest): Awaitable<Errors\Result<UpdateDetectorResponse>>;
  public function UpdateFilter(UpdateFilterRequest): Awaitable<Errors\Result<UpdateFilterResponse>>;
  public function UpdateFindingsFeedback(UpdateFindingsFeedbackRequest): Awaitable<Errors\Result<UpdateFindingsFeedbackResponse>>;
  public function UpdateIPSet(UpdateIPSetRequest): Awaitable<Errors\Result<UpdateIPSetResponse>>;
  public function UpdateOrganizationConfiguration(UpdateOrganizationConfigurationRequest): Awaitable<Errors\Result<UpdateOrganizationConfigurationResponse>>;
  public function UpdatePublishingDestination(UpdatePublishingDestinationRequest): Awaitable<Errors\Result<UpdatePublishingDestinationResponse>>;
  public function UpdateThreatIntelSet(UpdateThreatIntelSetRequest): Awaitable<Errors\Result<UpdateThreatIntelSetResponse>>;
}

class AcceptInvitationRequest {
  public DetectorId $detector_id;
  public string $invitation_id;
  public string $master_id;
}

class AcceptInvitationResponse {
}

class AccessKeyDetails {
  public string $access_key_id;
  public string $principal_id;
  public string $user_name;
  public string $user_type;
}

class AccountDetail {
  public AccountId $account_id;
  public Email $email;
}

class AccountDetails {
}

class AccountId {
}

class AccountIds {
}

class Action {
  public string $action_type;
  public AwsApiCallAction $aws_api_call_action;
  public DnsRequestAction $dns_request_action;
  public NetworkConnectionAction $network_connection_action;
  public PortProbeAction $port_probe_action;
}

class AdminAccount {
  public string $admin_account_id;
  public AdminStatus $admin_status;
}

class AdminAccounts {
}

class AdminStatus {
}

class ArchiveFindingsRequest {
  public DetectorId $detector_id;
  public FindingIds $finding_ids;
}

class ArchiveFindingsResponse {
}

class AwsApiCallAction {
  public string $api;
  public string $caller_type;
  public DomainDetails $domain_details;
  public RemoteIpDetails $remote_ip_details;
  public string $service_name;
}

class BadRequestException {
  public string $message;
  public string $type;
}

class Boolean {
}

class City {
  public string $city_name;
}

class ClientToken {
}

class Condition {
  public Eq $eq;
  public Equals $equals;
  public Long $greater_than;
  public Long $greater_than_or_equal;
  public int $gt;
  public int $gte;
  public Long $less_than;
  public Long $less_than_or_equal;
  public int $lt;
  public int $lte;
  public Neq $neq;
  public NotEquals $not_equals;
}

class CountBySeverity {
}

class Country {
  public string $country_code;
  public string $country_name;
}

class CreateDetectorRequest {
  public ClientToken $client_token;
  public boolean $enable;
  public FindingPublishingFrequency $finding_publishing_frequency;
  public TagMap $tags;
}

class CreateDetectorResponse {
  public DetectorId $detector_id;
}

class CreateFilterRequest {
  public FilterAction $action;
  public ClientToken $client_token;
  public FilterDescription $description;
  public DetectorId $detector_id;
  public FindingCriteria $finding_criteria;
  public FilterName $name;
  public FilterRank $rank;
  public TagMap $tags;
}

class CreateFilterResponse {
  public FilterName $name;
}

class CreateIPSetRequest {
  public boolean $activate;
  public ClientToken $client_token;
  public DetectorId $detector_id;
  public IpSetFormat $format;
  public Location $location;
  public Name $name;
  public TagMap $tags;
}

class CreateIPSetResponse {
  public string $ip_set_id;
}

class CreateMembersRequest {
  public AccountDetails $account_details;
  public DetectorId $detector_id;
}

class CreateMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class CreatePublishingDestinationRequest {
  public ClientToken $client_token;
  public DestinationProperties $destination_properties;
  public DestinationType $destination_type;
  public DetectorId $detector_id;
}

class CreatePublishingDestinationResponse {
  public string $destination_id;
}

class CreateSampleFindingsRequest {
  public DetectorId $detector_id;
  public FindingTypes $finding_types;
}

class CreateSampleFindingsResponse {
}

class CreateThreatIntelSetRequest {
  public boolean $activate;
  public ClientToken $client_token;
  public DetectorId $detector_id;
  public ThreatIntelSetFormat $format;
  public Location $location;
  public Name $name;
  public TagMap $tags;
}

class CreateThreatIntelSetResponse {
  public string $threat_intel_set_id;
}

class Criterion {
}

class DeclineInvitationsRequest {
  public AccountIds $account_ids;
}

class DeclineInvitationsResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class DeleteDetectorRequest {
  public DetectorId $detector_id;
}

class DeleteDetectorResponse {
}

class DeleteFilterRequest {
  public DetectorId $detector_id;
  public string $filter_name;
}

class DeleteFilterResponse {
}

class DeleteIPSetRequest {
  public DetectorId $detector_id;
  public string $ip_set_id;
}

class DeleteIPSetResponse {
}

class DeleteInvitationsRequest {
  public AccountIds $account_ids;
}

class DeleteInvitationsResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class DeleteMembersRequest {
  public AccountIds $account_ids;
  public DetectorId $detector_id;
}

class DeleteMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class DeletePublishingDestinationRequest {
  public string $destination_id;
  public DetectorId $detector_id;
}

class DeletePublishingDestinationResponse {
}

class DeleteThreatIntelSetRequest {
  public DetectorId $detector_id;
  public string $threat_intel_set_id;
}

class DeleteThreatIntelSetResponse {
}

class DescribeOrganizationConfigurationRequest {
  public DetectorId $detector_id;
}

class DescribeOrganizationConfigurationResponse {
  public boolean $auto_enable;
  public boolean $member_account_limit_reached;
}

class DescribePublishingDestinationRequest {
  public string $destination_id;
  public DetectorId $detector_id;
}

class DescribePublishingDestinationResponse {
  public string $destination_id;
  public DestinationProperties $destination_properties;
  public DestinationType $destination_type;
  public Long $publishing_failure_start_timestamp;
  public PublishingStatus $status;
}

class Destination {
  public string $destination_id;
  public DestinationType $destination_type;
  public PublishingStatus $status;
}

class DestinationProperties {
  public string $destination_arn;
  public string $kms_key_arn;
}

class DestinationType {
}

class Destinations {
}

class DetectorId {
}

class DetectorIds {
}

class DetectorStatus {
}

class DisableOrganizationAdminAccountRequest {
  public string $admin_account_id;
}

class DisableOrganizationAdminAccountResponse {
}

class DisassociateFromMasterAccountRequest {
  public DetectorId $detector_id;
}

class DisassociateFromMasterAccountResponse {
}

class DisassociateMembersRequest {
  public AccountIds $account_ids;
  public DetectorId $detector_id;
}

class DisassociateMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class DnsRequestAction {
  public string $domain;
}

class DomainDetails {
  public string $domain;
}

class Double {
}

class Email {
}

class EnableOrganizationAdminAccountRequest {
  public string $admin_account_id;
}

class EnableOrganizationAdminAccountResponse {
}

class Eq {
}

class Equals {
}

class Evidence {
  public ThreatIntelligenceDetails $threat_intelligence_details;
}

class Feedback {
}

class FilterAction {
}

class FilterDescription {
}

class FilterName {
}

class FilterNames {
}

class FilterRank {
}

class Finding {
  public string $account_id;
  public string $arn;
  public Double $confidence;
  public string $created_at;
  public string $description;
  public string $id;
  public string $partition;
  public string $region;
  public Resource $resource;
  public string $schema_version;
  public Service $service;
  public Double $severity;
  public string $title;
  public FindingType $type;
  public string $updated_at;
}

class FindingCriteria {
  public Criterion $criterion;
}

class FindingId {
}

class FindingIds {
}

class FindingPublishingFrequency {
}

class FindingStatisticType {
}

class FindingStatisticTypes {
}

class FindingStatistics {
  public CountBySeverity $count_by_severity;
}

class FindingType {
}

class FindingTypes {
}

class Findings {
}

class GeoLocation {
  public Double $lat;
  public Double $lon;
}

class GetDetectorRequest {
  public DetectorId $detector_id;
}

class GetDetectorResponse {
  public string $created_at;
  public FindingPublishingFrequency $finding_publishing_frequency;
  public string $service_role;
  public DetectorStatus $status;
  public TagMap $tags;
  public string $updated_at;
}

class GetFilterRequest {
  public DetectorId $detector_id;
  public string $filter_name;
}

class GetFilterResponse {
  public FilterAction $action;
  public FilterDescription $description;
  public FindingCriteria $finding_criteria;
  public FilterName $name;
  public FilterRank $rank;
  public TagMap $tags;
}

class GetFindingsRequest {
  public DetectorId $detector_id;
  public FindingIds $finding_ids;
  public SortCriteria $sort_criteria;
}

class GetFindingsResponse {
  public Findings $findings;
}

class GetFindingsStatisticsRequest {
  public DetectorId $detector_id;
  public FindingCriteria $finding_criteria;
  public FindingStatisticTypes $finding_statistic_types;
}

class GetFindingsStatisticsResponse {
  public FindingStatistics $finding_statistics;
}

class GetIPSetRequest {
  public DetectorId $detector_id;
  public string $ip_set_id;
}

class GetIPSetResponse {
  public IpSetFormat $format;
  public Location $location;
  public Name $name;
  public IpSetStatus $status;
  public TagMap $tags;
}

class GetInvitationsCountRequest {
}

class GetInvitationsCountResponse {
  public int $invitations_count;
}

class GetMasterAccountRequest {
  public DetectorId $detector_id;
}

class GetMasterAccountResponse {
  public Master $master;
}

class GetMembersRequest {
  public AccountIds $account_ids;
  public DetectorId $detector_id;
}

class GetMembersResponse {
  public Members $members;
  public UnprocessedAccounts $unprocessed_accounts;
}

class GetThreatIntelSetRequest {
  public DetectorId $detector_id;
  public string $threat_intel_set_id;
}

class GetThreatIntelSetResponse {
  public ThreatIntelSetFormat $format;
  public Location $location;
  public Name $name;
  public ThreatIntelSetStatus $status;
  public TagMap $tags;
}

class GuardDutyArn {
}

class IamInstanceProfile {
  public string $arn;
  public string $id;
}

class InstanceDetails {
  public string $availability_zone;
  public IamInstanceProfile $iam_instance_profile;
  public string $image_description;
  public string $image_id;
  public string $instance_id;
  public string $instance_state;
  public string $instance_type;
  public string $launch_time;
  public NetworkInterfaces $network_interfaces;
  public string $outpost_arn;
  public string $platform;
  public ProductCodes $product_codes;
  public Tags $tags;
}

class Integer {
}

class InternalServerErrorException {
  public string $message;
  public string $type;
}

class Invitation {
  public AccountId $account_id;
  public string $invitation_id;
  public string $invited_at;
  public string $relationship_status;
}

class Invitations {
}

class InviteMembersRequest {
  public AccountIds $account_ids;
  public DetectorId $detector_id;
  public boolean $disable_email_notification;
  public string $message;
}

class InviteMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class IpSetFormat {
}

class IpSetIds {
}

class IpSetStatus {
}

class Ipv6Addresses {
}

class ListDetectorsRequest {
  public MaxResults $max_results;
  public string $next_token;
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

class ListFiltersResponse {
  public FilterNames $filter_names;
  public string $next_token;
}

class ListFindingsRequest {
  public DetectorId $detector_id;
  public FindingCriteria $finding_criteria;
  public MaxResults $max_results;
  public string $next_token;
  public SortCriteria $sort_criteria;
}

class ListFindingsResponse {
  public FindingIds $finding_ids;
  public string $next_token;
}

class ListIPSetsRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListIPSetsResponse {
  public IpSetIds $ip_set_ids;
  public string $next_token;
}

class ListInvitationsRequest {
  public MaxResults $max_results;
  public string $next_token;
}

class ListInvitationsResponse {
  public Invitations $invitations;
  public string $next_token;
}

class ListMembersRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
  public string $only_associated;
}

class ListMembersResponse {
  public Members $members;
  public string $next_token;
}

class ListOrganizationAdminAccountsRequest {
  public MaxResults $max_results;
  public string $next_token;
}

class ListOrganizationAdminAccountsResponse {
  public AdminAccounts $admin_accounts;
  public string $next_token;
}

class ListPublishingDestinationsRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListPublishingDestinationsResponse {
  public Destinations $destinations;
  public string $next_token;
}

class ListTagsForResourceRequest {
  public GuardDutyArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class ListThreatIntelSetsRequest {
  public DetectorId $detector_id;
  public MaxResults $max_results;
  public string $next_token;
}

class ListThreatIntelSetsResponse {
  public string $next_token;
  public ThreatIntelSetIds $threat_intel_set_ids;
}

class LocalIpDetails {
  public string $ip_address_v_4;
}

class LocalPortDetails {
  public int $port;
  public string $port_name;
}

class Location {
}

class Long {
}

class Master {
  public AccountId $account_id;
  public string $invitation_id;
  public string $invited_at;
  public string $relationship_status;
}

class MaxResults {
}

class Member {
  public AccountId $account_id;
  public DetectorId $detector_id;
  public Email $email;
  public string $invited_at;
  public string $master_id;
  public string $relationship_status;
  public string $updated_at;
}

class Members {
}

class Name {
}

class Neq {
}

class NetworkConnectionAction {
  public boolean $blocked;
  public string $connection_direction;
  public LocalIpDetails $local_ip_details;
  public LocalPortDetails $local_port_details;
  public string $protocol;
  public RemoteIpDetails $remote_ip_details;
  public RemotePortDetails $remote_port_details;
}

class NetworkInterface {
  public Ipv6Addresses $ipv_6_addresses;
  public string $network_interface_id;
  public string $private_dns_name;
  public string $private_ip_address;
  public PrivateIpAddresses $private_ip_addresses;
  public string $public_dns_name;
  public string $public_ip;
  public SecurityGroups $security_groups;
  public string $subnet_id;
  public string $vpc_id;
}

class NetworkInterfaces {
}

class NotEquals {
}

class OrderBy {
}

class Organization {
  public string $asn;
  public string $asn_org;
  public string $isp;
  public string $org;
}

class PortProbeAction {
  public boolean $blocked;
  public PortProbeDetails $port_probe_details;
}

class PortProbeDetail {
  public LocalIpDetails $local_ip_details;
  public LocalPortDetails $local_port_details;
  public RemoteIpDetails $remote_ip_details;
}

class PortProbeDetails {
}

class PrivateIpAddressDetails {
  public string $private_dns_name;
  public string $private_ip_address;
}

class PrivateIpAddresses {
}

class ProductCode {
  public string $code;
  public string $product_type;
}

class ProductCodes {
}

class PublishingStatus {
}

class RemoteIpDetails {
  public City $city;
  public Country $country;
  public GeoLocation $geo_location;
  public string $ip_address_v_4;
  public Organization $organization;
}

class RemotePortDetails {
  public int $port;
  public string $port_name;
}

class Resource {
  public AccessKeyDetails $access_key_details;
  public InstanceDetails $instance_details;
  public string $resource_type;
}

class SecurityGroup {
  public string $group_id;
  public string $group_name;
}

class SecurityGroups {
}

class Service {
  public Action $action;
  public boolean $archived;
  public int $count;
  public DetectorId $detector_id;
  public string $event_first_seen;
  public string $event_last_seen;
  public Evidence $evidence;
  public string $resource_role;
  public string $service_name;
  public string $user_feedback;
}

class SortCriteria {
  public string $attribute_name;
  public OrderBy $order_by;
}

class StartMonitoringMembersRequest {
  public AccountIds $account_ids;
  public DetectorId $detector_id;
}

class StartMonitoringMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class StopMonitoringMembersRequest {
  public AccountIds $account_ids;
  public DetectorId $detector_id;
}

class StopMonitoringMembersResponse {
  public UnprocessedAccounts $unprocessed_accounts;
}

class String {
}

class Tag {
  public string $key;
  public string $value;
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public GuardDutyArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Tags {
}

class ThreatIntelSetFormat {
}

class ThreatIntelSetIds {
}

class ThreatIntelSetStatus {
}

class ThreatIntelligenceDetail {
  public string $threat_list_name;
  public ThreatNames $threat_names;
}

class ThreatIntelligenceDetails {
}

class ThreatNames {
}

class UnarchiveFindingsRequest {
  public DetectorId $detector_id;
  public FindingIds $finding_ids;
}

class UnarchiveFindingsResponse {
}

class UnprocessedAccount {
  public AccountId $account_id;
  public string $result;
}

class UnprocessedAccounts {
}

class UntagResourceRequest {
  public GuardDutyArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateDetectorRequest {
  public DetectorId $detector_id;
  public boolean $enable;
  public FindingPublishingFrequency $finding_publishing_frequency;
}

class UpdateDetectorResponse {
}

class UpdateFilterRequest {
  public FilterAction $action;
  public FilterDescription $description;
  public DetectorId $detector_id;
  public string $filter_name;
  public FindingCriteria $finding_criteria;
  public FilterRank $rank;
}

class UpdateFilterResponse {
  public FilterName $name;
}

class UpdateFindingsFeedbackRequest {
  public string $comments;
  public DetectorId $detector_id;
  public Feedback $feedback;
  public FindingIds $finding_ids;
}

class UpdateFindingsFeedbackResponse {
}

class UpdateIPSetRequest {
  public boolean $activate;
  public DetectorId $detector_id;
  public string $ip_set_id;
  public Location $location;
  public Name $name;
}

class UpdateIPSetResponse {
}

class UpdateOrganizationConfigurationRequest {
  public boolean $auto_enable;
  public DetectorId $detector_id;
}

class UpdateOrganizationConfigurationResponse {
}

class UpdatePublishingDestinationRequest {
  public string $destination_id;
  public DestinationProperties $destination_properties;
  public DetectorId $detector_id;
}

class UpdatePublishingDestinationResponse {
}

class UpdateThreatIntelSetRequest {
  public boolean $activate;
  public DetectorId $detector_id;
  public Location $location;
  public Name $name;
  public string $threat_intel_set_id;
}

class UpdateThreatIntelSetResponse {
}

