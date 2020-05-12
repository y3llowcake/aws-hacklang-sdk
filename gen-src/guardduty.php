<?hh // strict
namespace slack\aws\guardduty;

interface GuardDuty {
  public function AcceptInvitation(AcceptInvitationRequest $in): Awaitable<\Errors\Result<AcceptInvitationResponse>>;
  public function ArchiveFindings(ArchiveFindingsRequest $in): Awaitable<\Errors\Result<ArchiveFindingsResponse>>;
  public function CreateDetector(CreateDetectorRequest $in): Awaitable<\Errors\Result<CreateDetectorResponse>>;
  public function CreateFilter(CreateFilterRequest $in): Awaitable<\Errors\Result<CreateFilterResponse>>;
  public function CreateIPSet(CreateIPSetRequest $in): Awaitable<\Errors\Result<CreateIPSetResponse>>;
  public function CreateMembers(CreateMembersRequest $in): Awaitable<\Errors\Result<CreateMembersResponse>>;
  public function CreatePublishingDestination(CreatePublishingDestinationRequest $in): Awaitable<\Errors\Result<CreatePublishingDestinationResponse>>;
  public function CreateSampleFindings(CreateSampleFindingsRequest $in): Awaitable<\Errors\Result<CreateSampleFindingsResponse>>;
  public function CreateThreatIntelSet(CreateThreatIntelSetRequest $in): Awaitable<\Errors\Result<CreateThreatIntelSetResponse>>;
  public function DeclineInvitations(DeclineInvitationsRequest $in): Awaitable<\Errors\Result<DeclineInvitationsResponse>>;
  public function DeleteDetector(DeleteDetectorRequest $in): Awaitable<\Errors\Result<DeleteDetectorResponse>>;
  public function DeleteFilter(DeleteFilterRequest $in): Awaitable<\Errors\Result<DeleteFilterResponse>>;
  public function DeleteIPSet(DeleteIPSetRequest $in): Awaitable<\Errors\Result<DeleteIPSetResponse>>;
  public function DeleteInvitations(DeleteInvitationsRequest $in): Awaitable<\Errors\Result<DeleteInvitationsResponse>>;
  public function DeleteMembers(DeleteMembersRequest $in): Awaitable<\Errors\Result<DeleteMembersResponse>>;
  public function DeletePublishingDestination(DeletePublishingDestinationRequest $in): Awaitable<\Errors\Result<DeletePublishingDestinationResponse>>;
  public function DeleteThreatIntelSet(DeleteThreatIntelSetRequest $in): Awaitable<\Errors\Result<DeleteThreatIntelSetResponse>>;
  public function DescribeOrganizationConfiguration(DescribeOrganizationConfigurationRequest $in): Awaitable<\Errors\Result<DescribeOrganizationConfigurationResponse>>;
  public function DescribePublishingDestination(DescribePublishingDestinationRequest $in): Awaitable<\Errors\Result<DescribePublishingDestinationResponse>>;
  public function DisableOrganizationAdminAccount(DisableOrganizationAdminAccountRequest $in): Awaitable<\Errors\Result<DisableOrganizationAdminAccountResponse>>;
  public function DisassociateFromMasterAccount(DisassociateFromMasterAccountRequest $in): Awaitable<\Errors\Result<DisassociateFromMasterAccountResponse>>;
  public function DisassociateMembers(DisassociateMembersRequest $in): Awaitable<\Errors\Result<DisassociateMembersResponse>>;
  public function EnableOrganizationAdminAccount(EnableOrganizationAdminAccountRequest $in): Awaitable<\Errors\Result<EnableOrganizationAdminAccountResponse>>;
  public function GetDetector(GetDetectorRequest $in): Awaitable<\Errors\Result<GetDetectorResponse>>;
  public function GetFilter(GetFilterRequest $in): Awaitable<\Errors\Result<GetFilterResponse>>;
  public function GetFindings(GetFindingsRequest $in): Awaitable<\Errors\Result<GetFindingsResponse>>;
  public function GetFindingsStatistics(GetFindingsStatisticsRequest $in): Awaitable<\Errors\Result<GetFindingsStatisticsResponse>>;
  public function GetIPSet(GetIPSetRequest $in): Awaitable<\Errors\Result<GetIPSetResponse>>;
  public function GetInvitationsCount(GetInvitationsCountRequest $in): Awaitable<\Errors\Result<GetInvitationsCountResponse>>;
  public function GetMasterAccount(GetMasterAccountRequest $in): Awaitable<\Errors\Result<GetMasterAccountResponse>>;
  public function GetMembers(GetMembersRequest $in): Awaitable<\Errors\Result<GetMembersResponse>>;
  public function GetThreatIntelSet(GetThreatIntelSetRequest $in): Awaitable<\Errors\Result<GetThreatIntelSetResponse>>;
  public function InviteMembers(InviteMembersRequest $in): Awaitable<\Errors\Result<InviteMembersResponse>>;
  public function ListDetectors(ListDetectorsRequest $in): Awaitable<\Errors\Result<ListDetectorsResponse>>;
  public function ListFilters(ListFiltersRequest $in): Awaitable<\Errors\Result<ListFiltersResponse>>;
  public function ListFindings(ListFindingsRequest $in): Awaitable<\Errors\Result<ListFindingsResponse>>;
  public function ListIPSets(ListIPSetsRequest $in): Awaitable<\Errors\Result<ListIPSetsResponse>>;
  public function ListInvitations(ListInvitationsRequest $in): Awaitable<\Errors\Result<ListInvitationsResponse>>;
  public function ListMembers(ListMembersRequest $in): Awaitable<\Errors\Result<ListMembersResponse>>;
  public function ListOrganizationAdminAccounts(ListOrganizationAdminAccountsRequest $in): Awaitable<\Errors\Result<ListOrganizationAdminAccountsResponse>>;
  public function ListPublishingDestinations(ListPublishingDestinationsRequest $in): Awaitable<\Errors\Result<ListPublishingDestinationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListThreatIntelSets(ListThreatIntelSetsRequest $in): Awaitable<\Errors\Result<ListThreatIntelSetsResponse>>;
  public function StartMonitoringMembers(StartMonitoringMembersRequest $in): Awaitable<\Errors\Result<StartMonitoringMembersResponse>>;
  public function StopMonitoringMembers(StopMonitoringMembersRequest $in): Awaitable<\Errors\Result<StopMonitoringMembersResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UnarchiveFindings(UnarchiveFindingsRequest $in): Awaitable<\Errors\Result<UnarchiveFindingsResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateDetector(UpdateDetectorRequest $in): Awaitable<\Errors\Result<UpdateDetectorResponse>>;
  public function UpdateFilter(UpdateFilterRequest $in): Awaitable<\Errors\Result<UpdateFilterResponse>>;
  public function UpdateFindingsFeedback(UpdateFindingsFeedbackRequest $in): Awaitable<\Errors\Result<UpdateFindingsFeedbackResponse>>;
  public function UpdateIPSet(UpdateIPSetRequest $in): Awaitable<\Errors\Result<UpdateIPSetResponse>>;
  public function UpdateOrganizationConfiguration(UpdateOrganizationConfigurationRequest $in): Awaitable<\Errors\Result<UpdateOrganizationConfigurationResponse>>;
  public function UpdatePublishingDestination(UpdatePublishingDestinationRequest $in): Awaitable<\Errors\Result<UpdatePublishingDestinationResponse>>;
  public function UpdateThreatIntelSet(UpdateThreatIntelSetRequest $in): Awaitable<\Errors\Result<UpdateThreatIntelSetResponse>>;
}

class AcceptInvitationRequest {
  public ?DetectorId $detector_id;
  public string $invitation_id;
  public string $master_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'invitation_id' => string,
    ?'master_id' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->invitation_id = $s['invitation_id'] ?? '';
    $this->master_id = $s['master_id'] ?? '';
  }
}

class AcceptInvitationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AccessKeyDetails {
  public string $access_key_id;
  public string $principal_id;
  public string $user_name;
  public string $user_type;

  public function __construct(shape(
    ?'access_key_id' => string,
    ?'principal_id' => string,
    ?'user_name' => string,
    ?'user_type' => string,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
    $this->principal_id = $s['principal_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
    $this->user_type = $s['user_type'] ?? '';
  }
}

class AccountDetail {
  public ?AccountId $account_id;
  public ?Email $email;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'email' => ?Email,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->email = $s['email'] ?? '';
  }
}

type AccountDetails = vec<AccountDetail>;

type AccountId = string;

type AccountIds = vec<AccountId>;

class Action {
  public string $action_type;
  public ?AwsApiCallAction $aws_api_call_action;
  public ?DnsRequestAction $dns_request_action;
  public ?NetworkConnectionAction $network_connection_action;
  public ?PortProbeAction $port_probe_action;

  public function __construct(shape(
    ?'action_type' => string,
    ?'aws_api_call_action' => ?AwsApiCallAction,
    ?'dns_request_action' => ?DnsRequestAction,
    ?'network_connection_action' => ?NetworkConnectionAction,
    ?'port_probe_action' => ?PortProbeAction,
  ) $s = shape()) {
    $this->action_type = $s['action_type'] ?? '';
    $this->aws_api_call_action = $s['aws_api_call_action'] ?? null;
    $this->dns_request_action = $s['dns_request_action'] ?? null;
    $this->network_connection_action = $s['network_connection_action'] ?? null;
    $this->port_probe_action = $s['port_probe_action'] ?? null;
  }
}

class AdminAccount {
  public string $admin_account_id;
  public ?AdminStatus $admin_status;

  public function __construct(shape(
    ?'admin_account_id' => string,
    ?'admin_status' => ?AdminStatus,
  ) $s = shape()) {
    $this->admin_account_id = $s['admin_account_id'] ?? '';
    $this->admin_status = $s['admin_status'] ?? '';
  }
}

type AdminAccounts = vec<AdminAccount>;

type AdminStatus = string;

class ArchiveFindingsRequest {
  public ?DetectorId $detector_id;
  public ?FindingIds $finding_ids;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'finding_ids' => ?FindingIds,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->finding_ids = $s['finding_ids'] ?? vec[];
  }
}

class ArchiveFindingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AwsApiCallAction {
  public string $api;
  public string $caller_type;
  public ?DomainDetails $domain_details;
  public ?RemoteIpDetails $remote_ip_details;
  public string $service_name;

  public function __construct(shape(
    ?'api' => string,
    ?'caller_type' => string,
    ?'domain_details' => ?DomainDetails,
    ?'remote_ip_details' => ?RemoteIpDetails,
    ?'service_name' => string,
  ) $s = shape()) {
    $this->api = $s['api'] ?? '';
    $this->caller_type = $s['caller_type'] ?? '';
    $this->domain_details = $s['domain_details'] ?? null;
    $this->remote_ip_details = $s['remote_ip_details'] ?? null;
    $this->service_name = $s['service_name'] ?? '';
  }
}

class BadRequestException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type Boolean = bool;

class City {
  public string $city_name;

  public function __construct(shape(
    ?'city_name' => string,
  ) $s = shape()) {
    $this->city_name = $s['city_name'] ?? '';
  }
}

type ClientToken = string;

class Condition {
  public ?Eq $eq;
  public ?Equals $equals;
  public ?Long $greater_than;
  public ?Long $greater_than_or_equal;
  public int $gt;
  public int $gte;
  public ?Long $less_than;
  public ?Long $less_than_or_equal;
  public int $lt;
  public int $lte;
  public ?Neq $neq;
  public ?NotEquals $not_equals;

  public function __construct(shape(
    ?'eq' => ?Eq,
    ?'equals' => ?Equals,
    ?'greater_than' => ?Long,
    ?'greater_than_or_equal' => ?Long,
    ?'gt' => int,
    ?'gte' => int,
    ?'less_than' => ?Long,
    ?'less_than_or_equal' => ?Long,
    ?'lt' => int,
    ?'lte' => int,
    ?'neq' => ?Neq,
    ?'not_equals' => ?NotEquals,
  ) $s = shape()) {
    $this->eq = $s['eq'] ?? vec[];
    $this->equals = $s['equals'] ?? vec[];
    $this->greater_than = $s['greater_than'] ?? 0;
    $this->greater_than_or_equal = $s['greater_than_or_equal'] ?? 0;
    $this->gt = $s['gt'] ?? 0;
    $this->gte = $s['gte'] ?? 0;
    $this->less_than = $s['less_than'] ?? 0;
    $this->less_than_or_equal = $s['less_than_or_equal'] ?? 0;
    $this->lt = $s['lt'] ?? 0;
    $this->lte = $s['lte'] ?? 0;
    $this->neq = $s['neq'] ?? vec[];
    $this->not_equals = $s['not_equals'] ?? vec[];
  }
}

type CountBySeverity = dict<String, Integer>;

class Country {
  public string $country_code;
  public string $country_name;

  public function __construct(shape(
    ?'country_code' => string,
    ?'country_name' => string,
  ) $s = shape()) {
    $this->country_code = $s['country_code'] ?? '';
    $this->country_name = $s['country_name'] ?? '';
  }
}

class CreateDetectorRequest {
  public ?ClientToken $client_token;
  public bool $enable;
  public ?FindingPublishingFrequency $finding_publishing_frequency;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'enable' => bool,
    ?'finding_publishing_frequency' => ?FindingPublishingFrequency,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->enable = $s['enable'] ?? false;
    $this->finding_publishing_frequency = $s['finding_publishing_frequency'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateDetectorResponse {
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class CreateFilterRequest {
  public ?FilterAction $action;
  public ?ClientToken $client_token;
  public ?FilterDescription $description;
  public ?DetectorId $detector_id;
  public ?FindingCriteria $finding_criteria;
  public ?FilterName $name;
  public ?FilterRank $rank;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'action' => ?FilterAction,
    ?'client_token' => ?ClientToken,
    ?'description' => ?FilterDescription,
    ?'detector_id' => ?DetectorId,
    ?'finding_criteria' => ?FindingCriteria,
    ?'name' => ?FilterName,
    ?'rank' => ?FilterRank,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->finding_criteria = $s['finding_criteria'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->rank = $s['rank'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateFilterResponse {
  public ?FilterName $name;

  public function __construct(shape(
    ?'name' => ?FilterName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class CreateIPSetRequest {
  public bool $activate;
  public ?ClientToken $client_token;
  public ?DetectorId $detector_id;
  public ?IpSetFormat $format;
  public ?Location $location;
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'activate' => bool,
    ?'client_token' => ?ClientToken,
    ?'detector_id' => ?DetectorId,
    ?'format' => ?IpSetFormat,
    ?'location' => ?Location,
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->activate = $s['activate'] ?? false;
    $this->client_token = $s['client_token'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateIPSetResponse {
  public string $ip_set_id;

  public function __construct(shape(
    ?'ip_set_id' => string,
  ) $s = shape()) {
    $this->ip_set_id = $s['ip_set_id'] ?? '';
  }
}

class CreateMembersRequest {
  public ?AccountDetails $account_details;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'account_details' => ?AccountDetails,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->account_details = $s['account_details'] ?? vec[];
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class CreateMembersResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class CreatePublishingDestinationRequest {
  public ?ClientToken $client_token;
  public ?DestinationProperties $destination_properties;
  public ?DestinationType $destination_type;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'destination_properties' => ?DestinationProperties,
    ?'destination_type' => ?DestinationType,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->destination_properties = $s['destination_properties'] ?? null;
    $this->destination_type = $s['destination_type'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class CreatePublishingDestinationResponse {
  public string $destination_id;

  public function __construct(shape(
    ?'destination_id' => string,
  ) $s = shape()) {
    $this->destination_id = $s['destination_id'] ?? '';
  }
}

class CreateSampleFindingsRequest {
  public ?DetectorId $detector_id;
  public ?FindingTypes $finding_types;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'finding_types' => ?FindingTypes,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->finding_types = $s['finding_types'] ?? vec[];
  }
}

class CreateSampleFindingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateThreatIntelSetRequest {
  public bool $activate;
  public ?ClientToken $client_token;
  public ?DetectorId $detector_id;
  public ?ThreatIntelSetFormat $format;
  public ?Location $location;
  public ?Name $name;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'activate' => bool,
    ?'client_token' => ?ClientToken,
    ?'detector_id' => ?DetectorId,
    ?'format' => ?ThreatIntelSetFormat,
    ?'location' => ?Location,
    ?'name' => ?Name,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->activate = $s['activate'] ?? false;
    $this->client_token = $s['client_token'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateThreatIntelSetResponse {
  public string $threat_intel_set_id;

  public function __construct(shape(
    ?'threat_intel_set_id' => string,
  ) $s = shape()) {
    $this->threat_intel_set_id = $s['threat_intel_set_id'] ?? '';
  }
}

type Criterion = dict<String, Condition>;

class DeclineInvitationsRequest {
  public ?AccountIds $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class DeclineInvitationsResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DeleteDetectorRequest {
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DeleteDetectorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteFilterRequest {
  public ?DetectorId $detector_id;
  public string $filter_name;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'filter_name' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->filter_name = $s['filter_name'] ?? '';
  }
}

class DeleteFilterResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteIPSetRequest {
  public ?DetectorId $detector_id;
  public string $ip_set_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'ip_set_id' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->ip_set_id = $s['ip_set_id'] ?? '';
  }
}

class DeleteIPSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteInvitationsRequest {
  public ?AccountIds $account_ids;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
  }
}

class DeleteInvitationsResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DeleteMembersRequest {
  public ?AccountIds $account_ids;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DeleteMembersResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DeletePublishingDestinationRequest {
  public string $destination_id;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'destination_id' => string,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->destination_id = $s['destination_id'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DeletePublishingDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteThreatIntelSetRequest {
  public ?DetectorId $detector_id;
  public string $threat_intel_set_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'threat_intel_set_id' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->threat_intel_set_id = $s['threat_intel_set_id'] ?? '';
  }
}

class DeleteThreatIntelSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeOrganizationConfigurationRequest {
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DescribeOrganizationConfigurationResponse {
  public bool $auto_enable;
  public bool $member_account_limit_reached;

  public function __construct(shape(
    ?'auto_enable' => bool,
    ?'member_account_limit_reached' => bool,
  ) $s = shape()) {
    $this->auto_enable = $s['auto_enable'] ?? false;
    $this->member_account_limit_reached = $s['member_account_limit_reached'] ?? false;
  }
}

class DescribePublishingDestinationRequest {
  public string $destination_id;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'destination_id' => string,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->destination_id = $s['destination_id'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DescribePublishingDestinationResponse {
  public string $destination_id;
  public ?DestinationProperties $destination_properties;
  public ?DestinationType $destination_type;
  public ?Long $publishing_failure_start_timestamp;
  public ?PublishingStatus $status;

  public function __construct(shape(
    ?'destination_id' => string,
    ?'destination_properties' => ?DestinationProperties,
    ?'destination_type' => ?DestinationType,
    ?'publishing_failure_start_timestamp' => ?Long,
    ?'status' => ?PublishingStatus,
  ) $s = shape()) {
    $this->destination_id = $s['destination_id'] ?? '';
    $this->destination_properties = $s['destination_properties'] ?? null;
    $this->destination_type = $s['destination_type'] ?? '';
    $this->publishing_failure_start_timestamp = $s['publishing_failure_start_timestamp'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class Destination {
  public string $destination_id;
  public ?DestinationType $destination_type;
  public ?PublishingStatus $status;

  public function __construct(shape(
    ?'destination_id' => string,
    ?'destination_type' => ?DestinationType,
    ?'status' => ?PublishingStatus,
  ) $s = shape()) {
    $this->destination_id = $s['destination_id'] ?? '';
    $this->destination_type = $s['destination_type'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DestinationProperties {
  public string $destination_arn;
  public string $kms_key_arn;

  public function __construct(shape(
    ?'destination_arn' => string,
    ?'kms_key_arn' => string,
  ) $s = shape()) {
    $this->destination_arn = $s['destination_arn'] ?? '';
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
  }
}

type DestinationType = string;

type Destinations = vec<Destination>;

type DetectorId = string;

type DetectorIds = vec<DetectorId>;

type DetectorStatus = string;

class DisableOrganizationAdminAccountRequest {
  public string $admin_account_id;

  public function __construct(shape(
    ?'admin_account_id' => string,
  ) $s = shape()) {
    $this->admin_account_id = $s['admin_account_id'] ?? '';
  }
}

class DisableOrganizationAdminAccountResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateFromMasterAccountRequest {
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DisassociateFromMasterAccountResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateMembersRequest {
  public ?AccountIds $account_ids;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class DisassociateMembersResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class DnsRequestAction {
  public string $domain;

  public function __construct(shape(
    ?'domain' => string,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
  }
}

class DomainDetails {
  public string $domain;

  public function __construct(shape(
    ?'domain' => string,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
  }
}

type Double = float;

type Email = string;

class EnableOrganizationAdminAccountRequest {
  public string $admin_account_id;

  public function __construct(shape(
    ?'admin_account_id' => string,
  ) $s = shape()) {
    $this->admin_account_id = $s['admin_account_id'] ?? '';
  }
}

class EnableOrganizationAdminAccountResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Eq = vec<String>;

type Equals = vec<String>;

class Evidence {
  public ?ThreatIntelligenceDetails $threat_intelligence_details;

  public function __construct(shape(
    ?'threat_intelligence_details' => ?ThreatIntelligenceDetails,
  ) $s = shape()) {
    $this->threat_intelligence_details = $s['threat_intelligence_details'] ?? vec[];
  }
}

type Feedback = string;

type FilterAction = string;

type FilterDescription = string;

type FilterName = string;

type FilterNames = vec<FilterName>;

type FilterRank = int;

class Finding {
  public string $account_id;
  public string $arn;
  public ?Double $confidence;
  public string $created_at;
  public string $description;
  public string $id;
  public string $partition;
  public string $region;
  public ?Resource $resource;
  public string $schema_version;
  public ?Service $service;
  public ?Double $severity;
  public string $title;
  public ?FindingType $type;
  public string $updated_at;

  public function __construct(shape(
    ?'account_id' => string,
    ?'arn' => string,
    ?'confidence' => ?Double,
    ?'created_at' => string,
    ?'description' => string,
    ?'id' => string,
    ?'partition' => string,
    ?'region' => string,
    ?'resource' => ?Resource,
    ?'schema_version' => string,
    ?'service' => ?Service,
    ?'severity' => ?Double,
    ?'title' => string,
    ?'type' => ?FindingType,
    ?'updated_at' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->arn = $s['arn'] ?? '';
    $this->confidence = $s['confidence'] ?? 0.0;
    $this->created_at = $s['created_at'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->partition = $s['partition'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->resource = $s['resource'] ?? null;
    $this->schema_version = $s['schema_version'] ?? '';
    $this->service = $s['service'] ?? null;
    $this->severity = $s['severity'] ?? 0.0;
    $this->title = $s['title'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->updated_at = $s['updated_at'] ?? '';
  }
}

class FindingCriteria {
  public ?Criterion $criterion;

  public function __construct(shape(
    ?'criterion' => ?Criterion,
  ) $s = shape()) {
    $this->criterion = $s['criterion'] ?? dict[];
  }
}

type FindingId = string;

type FindingIds = vec<FindingId>;

type FindingPublishingFrequency = string;

type FindingStatisticType = string;

type FindingStatisticTypes = vec<FindingStatisticType>;

class FindingStatistics {
  public ?CountBySeverity $count_by_severity;

  public function __construct(shape(
    ?'count_by_severity' => ?CountBySeverity,
  ) $s = shape()) {
    $this->count_by_severity = $s['count_by_severity'] ?? dict[];
  }
}

type FindingType = string;

type FindingTypes = vec<FindingType>;

type Findings = vec<Finding>;

class GeoLocation {
  public ?Double $lat;
  public ?Double $lon;

  public function __construct(shape(
    ?'lat' => ?Double,
    ?'lon' => ?Double,
  ) $s = shape()) {
    $this->lat = $s['lat'] ?? 0.0;
    $this->lon = $s['lon'] ?? 0.0;
  }
}

class GetDetectorRequest {
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class GetDetectorResponse {
  public string $created_at;
  public ?FindingPublishingFrequency $finding_publishing_frequency;
  public string $service_role;
  public ?DetectorStatus $status;
  public ?TagMap $tags;
  public string $updated_at;

  public function __construct(shape(
    ?'created_at' => string,
    ?'finding_publishing_frequency' => ?FindingPublishingFrequency,
    ?'service_role' => string,
    ?'status' => ?DetectorStatus,
    ?'tags' => ?TagMap,
    ?'updated_at' => string,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? '';
    $this->finding_publishing_frequency = $s['finding_publishing_frequency'] ?? '';
    $this->service_role = $s['service_role'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->updated_at = $s['updated_at'] ?? '';
  }
}

class GetFilterRequest {
  public ?DetectorId $detector_id;
  public string $filter_name;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'filter_name' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->filter_name = $s['filter_name'] ?? '';
  }
}

class GetFilterResponse {
  public ?FilterAction $action;
  public ?FilterDescription $description;
  public ?FindingCriteria $finding_criteria;
  public ?FilterName $name;
  public ?FilterRank $rank;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'action' => ?FilterAction,
    ?'description' => ?FilterDescription,
    ?'finding_criteria' => ?FindingCriteria,
    ?'name' => ?FilterName,
    ?'rank' => ?FilterRank,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->finding_criteria = $s['finding_criteria'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->rank = $s['rank'] ?? 0;
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetFindingsRequest {
  public ?DetectorId $detector_id;
  public ?FindingIds $finding_ids;
  public ?SortCriteria $sort_criteria;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'finding_ids' => ?FindingIds,
    ?'sort_criteria' => ?SortCriteria,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->finding_ids = $s['finding_ids'] ?? vec[];
    $this->sort_criteria = $s['sort_criteria'] ?? null;
  }
}

class GetFindingsResponse {
  public ?Findings $findings;

  public function __construct(shape(
    ?'findings' => ?Findings,
  ) $s = shape()) {
    $this->findings = $s['findings'] ?? vec[];
  }
}

class GetFindingsStatisticsRequest {
  public ?DetectorId $detector_id;
  public ?FindingCriteria $finding_criteria;
  public ?FindingStatisticTypes $finding_statistic_types;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'finding_criteria' => ?FindingCriteria,
    ?'finding_statistic_types' => ?FindingStatisticTypes,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->finding_criteria = $s['finding_criteria'] ?? null;
    $this->finding_statistic_types = $s['finding_statistic_types'] ?? vec[];
  }
}

class GetFindingsStatisticsResponse {
  public ?FindingStatistics $finding_statistics;

  public function __construct(shape(
    ?'finding_statistics' => ?FindingStatistics,
  ) $s = shape()) {
    $this->finding_statistics = $s['finding_statistics'] ?? null;
  }
}

class GetIPSetRequest {
  public ?DetectorId $detector_id;
  public string $ip_set_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'ip_set_id' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->ip_set_id = $s['ip_set_id'] ?? '';
  }
}

class GetIPSetResponse {
  public ?IpSetFormat $format;
  public ?Location $location;
  public ?Name $name;
  public ?IpSetStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'format' => ?IpSetFormat,
    ?'location' => ?Location,
    ?'name' => ?Name,
    ?'status' => ?IpSetStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->format = $s['format'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class GetInvitationsCountRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetInvitationsCountResponse {
  public int $invitations_count;

  public function __construct(shape(
    ?'invitations_count' => int,
  ) $s = shape()) {
    $this->invitations_count = $s['invitations_count'] ?? 0;
  }
}

class GetMasterAccountRequest {
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class GetMasterAccountResponse {
  public ?Master $master;

  public function __construct(shape(
    ?'master' => ?Master,
  ) $s = shape()) {
    $this->master = $s['master'] ?? null;
  }
}

class GetMembersRequest {
  public ?AccountIds $account_ids;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class GetMembersResponse {
  public ?Members $members;
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'members' => ?Members,
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->members = $s['members'] ?? vec[];
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class GetThreatIntelSetRequest {
  public ?DetectorId $detector_id;
  public string $threat_intel_set_id;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'threat_intel_set_id' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->threat_intel_set_id = $s['threat_intel_set_id'] ?? '';
  }
}

class GetThreatIntelSetResponse {
  public ?ThreatIntelSetFormat $format;
  public ?Location $location;
  public ?Name $name;
  public ?ThreatIntelSetStatus $status;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'format' => ?ThreatIntelSetFormat,
    ?'location' => ?Location,
    ?'name' => ?Name,
    ?'status' => ?ThreatIntelSetStatus,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->format = $s['format'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

type GuardDutyArn = string;

class IamInstanceProfile {
  public string $arn;
  public string $id;

  public function __construct(shape(
    ?'arn' => string,
    ?'id' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class InstanceDetails {
  public string $availability_zone;
  public ?IamInstanceProfile $iam_instance_profile;
  public string $image_description;
  public string $image_id;
  public string $instance_id;
  public string $instance_state;
  public string $instance_type;
  public string $launch_time;
  public ?NetworkInterfaces $network_interfaces;
  public string $outpost_arn;
  public string $platform;
  public ?ProductCodes $product_codes;
  public ?Tags $tags;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'iam_instance_profile' => ?IamInstanceProfile,
    ?'image_description' => string,
    ?'image_id' => string,
    ?'instance_id' => string,
    ?'instance_state' => string,
    ?'instance_type' => string,
    ?'launch_time' => string,
    ?'network_interfaces' => ?NetworkInterfaces,
    ?'outpost_arn' => string,
    ?'platform' => string,
    ?'product_codes' => ?ProductCodes,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_description = $s['image_description'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_state = $s['instance_state'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->launch_time = $s['launch_time'] ?? '';
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

type Integer = int;

class InternalServerErrorException {
  public string $message;
  public string $type;

  public function __construct(shape(
    ?'message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class Invitation {
  public ?AccountId $account_id;
  public string $invitation_id;
  public string $invited_at;
  public string $relationship_status;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'invitation_id' => string,
    ?'invited_at' => string,
    ?'relationship_status' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->invitation_id = $s['invitation_id'] ?? '';
    $this->invited_at = $s['invited_at'] ?? '';
    $this->relationship_status = $s['relationship_status'] ?? '';
  }
}

type Invitations = vec<Invitation>;

class InviteMembersRequest {
  public ?AccountIds $account_ids;
  public ?DetectorId $detector_id;
  public bool $disable_email_notification;
  public string $message;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'detector_id' => ?DetectorId,
    ?'disable_email_notification' => bool,
    ?'message' => string,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->detector_id = $s['detector_id'] ?? '';
    $this->disable_email_notification = $s['disable_email_notification'] ?? false;
    $this->message = $s['message'] ?? '';
  }
}

class InviteMembersResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

type IpSetFormat = string;

type IpSetIds = vec<String>;

type IpSetStatus = string;

type Ipv6Addresses = vec<String>;

class ListDetectorsRequest {
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDetectorsResponse {
  public ?DetectorIds $detector_ids;
  public string $next_token;

  public function __construct(shape(
    ?'detector_ids' => ?DetectorIds,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->detector_ids = $s['detector_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFiltersRequest {
  public ?DetectorId $detector_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFiltersResponse {
  public ?FilterNames $filter_names;
  public string $next_token;

  public function __construct(shape(
    ?'filter_names' => ?FilterNames,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->filter_names = $s['filter_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFindingsRequest {
  public ?DetectorId $detector_id;
  public ?FindingCriteria $finding_criteria;
  public ?MaxResults $max_results;
  public string $next_token;
  public ?SortCriteria $sort_criteria;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'finding_criteria' => ?FindingCriteria,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'sort_criteria' => ?SortCriteria,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->finding_criteria = $s['finding_criteria'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? null;
  }
}

class ListFindingsResponse {
  public ?FindingIds $finding_ids;
  public string $next_token;

  public function __construct(shape(
    ?'finding_ids' => ?FindingIds,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->finding_ids = $s['finding_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIPSetsRequest {
  public ?DetectorId $detector_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIPSetsResponse {
  public ?IpSetIds $ip_set_ids;
  public string $next_token;

  public function __construct(shape(
    ?'ip_set_ids' => ?IpSetIds,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->ip_set_ids = $s['ip_set_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListInvitationsRequest {
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListInvitationsResponse {
  public ?Invitations $invitations;
  public string $next_token;

  public function __construct(shape(
    ?'invitations' => ?Invitations,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->invitations = $s['invitations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListMembersRequest {
  public ?DetectorId $detector_id;
  public ?MaxResults $max_results;
  public string $next_token;
  public string $only_associated;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'only_associated' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->only_associated = $s['only_associated'] ?? '';
  }
}

class ListMembersResponse {
  public ?Members $members;
  public string $next_token;

  public function __construct(shape(
    ?'members' => ?Members,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->members = $s['members'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOrganizationAdminAccountsRequest {
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOrganizationAdminAccountsResponse {
  public ?AdminAccounts $admin_accounts;
  public string $next_token;

  public function __construct(shape(
    ?'admin_accounts' => ?AdminAccounts,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->admin_accounts = $s['admin_accounts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPublishingDestinationsRequest {
  public ?DetectorId $detector_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListPublishingDestinationsResponse {
  public ?Destinations $destinations;
  public string $next_token;

  public function __construct(shape(
    ?'destinations' => ?Destinations,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->destinations = $s['destinations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?GuardDutyArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?GuardDutyArn,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListThreatIntelSetsRequest {
  public ?DetectorId $detector_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListThreatIntelSetsResponse {
  public string $next_token;
  public ?ThreatIntelSetIds $threat_intel_set_ids;

  public function __construct(shape(
    ?'next_token' => string,
    ?'threat_intel_set_ids' => ?ThreatIntelSetIds,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->threat_intel_set_ids = $s['threat_intel_set_ids'] ?? vec[];
  }
}

class LocalIpDetails {
  public string $ip_address_v_4;

  public function __construct(shape(
    ?'ip_address_v_4' => string,
  ) $s = shape()) {
    $this->ip_address_v_4 = $s['ip_address_v_4'] ?? '';
  }
}

class LocalPortDetails {
  public int $port;
  public string $port_name;

  public function __construct(shape(
    ?'port' => int,
    ?'port_name' => string,
  ) $s = shape()) {
    $this->port = $s['port'] ?? 0;
    $this->port_name = $s['port_name'] ?? '';
  }
}

type Location = string;

type Long = int;

class Master {
  public ?AccountId $account_id;
  public string $invitation_id;
  public string $invited_at;
  public string $relationship_status;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'invitation_id' => string,
    ?'invited_at' => string,
    ?'relationship_status' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->invitation_id = $s['invitation_id'] ?? '';
    $this->invited_at = $s['invited_at'] ?? '';
    $this->relationship_status = $s['relationship_status'] ?? '';
  }
}

type MaxResults = int;

class Member {
  public ?AccountId $account_id;
  public ?DetectorId $detector_id;
  public ?Email $email;
  public string $invited_at;
  public string $master_id;
  public string $relationship_status;
  public string $updated_at;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'detector_id' => ?DetectorId,
    ?'email' => ?Email,
    ?'invited_at' => string,
    ?'master_id' => string,
    ?'relationship_status' => string,
    ?'updated_at' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->invited_at = $s['invited_at'] ?? '';
    $this->master_id = $s['master_id'] ?? '';
    $this->relationship_status = $s['relationship_status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? '';
  }
}

type Members = vec<Member>;

type Name = string;

type Neq = vec<String>;

class NetworkConnectionAction {
  public bool $blocked;
  public string $connection_direction;
  public ?LocalIpDetails $local_ip_details;
  public ?LocalPortDetails $local_port_details;
  public string $protocol;
  public ?RemoteIpDetails $remote_ip_details;
  public ?RemotePortDetails $remote_port_details;

  public function __construct(shape(
    ?'blocked' => bool,
    ?'connection_direction' => string,
    ?'local_ip_details' => ?LocalIpDetails,
    ?'local_port_details' => ?LocalPortDetails,
    ?'protocol' => string,
    ?'remote_ip_details' => ?RemoteIpDetails,
    ?'remote_port_details' => ?RemotePortDetails,
  ) $s = shape()) {
    $this->blocked = $s['blocked'] ?? false;
    $this->connection_direction = $s['connection_direction'] ?? '';
    $this->local_ip_details = $s['local_ip_details'] ?? null;
    $this->local_port_details = $s['local_port_details'] ?? null;
    $this->protocol = $s['protocol'] ?? '';
    $this->remote_ip_details = $s['remote_ip_details'] ?? null;
    $this->remote_port_details = $s['remote_port_details'] ?? null;
  }
}

class NetworkInterface {
  public ?Ipv6Addresses $ipv_6_addresses;
  public string $network_interface_id;
  public string $private_dns_name;
  public string $private_ip_address;
  public ?PrivateIpAddresses $private_ip_addresses;
  public string $public_dns_name;
  public string $public_ip;
  public ?SecurityGroups $security_groups;
  public string $subnet_id;
  public string $vpc_id;

  public function __construct(shape(
    ?'ipv_6_addresses' => ?Ipv6Addresses,
    ?'network_interface_id' => string,
    ?'private_dns_name' => string,
    ?'private_ip_address' => string,
    ?'private_ip_addresses' => ?PrivateIpAddresses,
    ?'public_dns_name' => string,
    ?'public_ip' => string,
    ?'security_groups' => ?SecurityGroups,
    ?'subnet_id' => string,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->public_dns_name = $s['public_dns_name'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type NetworkInterfaces = vec<NetworkInterface>;

type NotEquals = vec<String>;

type OrderBy = string;

class Organization {
  public string $asn;
  public string $asn_org;
  public string $isp;
  public string $org;

  public function __construct(shape(
    ?'asn' => string,
    ?'asn_org' => string,
    ?'isp' => string,
    ?'org' => string,
  ) $s = shape()) {
    $this->asn = $s['asn'] ?? '';
    $this->asn_org = $s['asn_org'] ?? '';
    $this->isp = $s['isp'] ?? '';
    $this->org = $s['org'] ?? '';
  }
}

class PortProbeAction {
  public bool $blocked;
  public ?PortProbeDetails $port_probe_details;

  public function __construct(shape(
    ?'blocked' => bool,
    ?'port_probe_details' => ?PortProbeDetails,
  ) $s = shape()) {
    $this->blocked = $s['blocked'] ?? false;
    $this->port_probe_details = $s['port_probe_details'] ?? vec[];
  }
}

class PortProbeDetail {
  public ?LocalIpDetails $local_ip_details;
  public ?LocalPortDetails $local_port_details;
  public ?RemoteIpDetails $remote_ip_details;

  public function __construct(shape(
    ?'local_ip_details' => ?LocalIpDetails,
    ?'local_port_details' => ?LocalPortDetails,
    ?'remote_ip_details' => ?RemoteIpDetails,
  ) $s = shape()) {
    $this->local_ip_details = $s['local_ip_details'] ?? null;
    $this->local_port_details = $s['local_port_details'] ?? null;
    $this->remote_ip_details = $s['remote_ip_details'] ?? null;
  }
}

type PortProbeDetails = vec<PortProbeDetail>;

class PrivateIpAddressDetails {
  public string $private_dns_name;
  public string $private_ip_address;

  public function __construct(shape(
    ?'private_dns_name' => string,
    ?'private_ip_address' => string,
  ) $s = shape()) {
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
  }
}

type PrivateIpAddresses = vec<PrivateIpAddressDetails>;

class ProductCode {
  public string $code;
  public string $product_type;

  public function __construct(shape(
    ?'code' => string,
    ?'product_type' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->product_type = $s['product_type'] ?? '';
  }
}

type ProductCodes = vec<ProductCode>;

type PublishingStatus = string;

class RemoteIpDetails {
  public ?City $city;
  public ?Country $country;
  public ?GeoLocation $geo_location;
  public string $ip_address_v_4;
  public ?Organization $organization;

  public function __construct(shape(
    ?'city' => ?City,
    ?'country' => ?Country,
    ?'geo_location' => ?GeoLocation,
    ?'ip_address_v_4' => string,
    ?'organization' => ?Organization,
  ) $s = shape()) {
    $this->city = $s['city'] ?? null;
    $this->country = $s['country'] ?? null;
    $this->geo_location = $s['geo_location'] ?? null;
    $this->ip_address_v_4 = $s['ip_address_v_4'] ?? '';
    $this->organization = $s['organization'] ?? null;
  }
}

class RemotePortDetails {
  public int $port;
  public string $port_name;

  public function __construct(shape(
    ?'port' => int,
    ?'port_name' => string,
  ) $s = shape()) {
    $this->port = $s['port'] ?? 0;
    $this->port_name = $s['port_name'] ?? '';
  }
}

class Resource {
  public ?AccessKeyDetails $access_key_details;
  public ?InstanceDetails $instance_details;
  public string $resource_type;

  public function __construct(shape(
    ?'access_key_details' => ?AccessKeyDetails,
    ?'instance_details' => ?InstanceDetails,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->access_key_details = $s['access_key_details'] ?? null;
    $this->instance_details = $s['instance_details'] ?? null;
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class SecurityGroup {
  public string $group_id;
  public string $group_name;

  public function __construct(shape(
    ?'group_id' => string,
    ?'group_name' => string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type SecurityGroups = vec<SecurityGroup>;

class Service {
  public ?Action $action;
  public bool $archived;
  public int $count;
  public ?DetectorId $detector_id;
  public string $event_first_seen;
  public string $event_last_seen;
  public ?Evidence $evidence;
  public string $resource_role;
  public string $service_name;
  public string $user_feedback;

  public function __construct(shape(
    ?'action' => ?Action,
    ?'archived' => bool,
    ?'count' => int,
    ?'detector_id' => ?DetectorId,
    ?'event_first_seen' => string,
    ?'event_last_seen' => string,
    ?'evidence' => ?Evidence,
    ?'resource_role' => string,
    ?'service_name' => string,
    ?'user_feedback' => string,
  ) $s = shape()) {
    $this->action = $s['action'] ?? null;
    $this->archived = $s['archived'] ?? false;
    $this->count = $s['count'] ?? 0;
    $this->detector_id = $s['detector_id'] ?? '';
    $this->event_first_seen = $s['event_first_seen'] ?? '';
    $this->event_last_seen = $s['event_last_seen'] ?? '';
    $this->evidence = $s['evidence'] ?? null;
    $this->resource_role = $s['resource_role'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->user_feedback = $s['user_feedback'] ?? '';
  }
}

class SortCriteria {
  public string $attribute_name;
  public ?OrderBy $order_by;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'order_by' => ?OrderBy,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->order_by = $s['order_by'] ?? '';
  }
}

class StartMonitoringMembersRequest {
  public ?AccountIds $account_ids;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class StartMonitoringMembersResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

class StopMonitoringMembersRequest {
  public ?AccountIds $account_ids;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'account_ids' => ?AccountIds,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->account_ids = $s['account_ids'] ?? vec[];
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class StopMonitoringMembersResponse {
  public ?UnprocessedAccounts $unprocessed_accounts;

  public function __construct(shape(
    ?'unprocessed_accounts' => ?UnprocessedAccounts,
  ) $s = shape()) {
    $this->unprocessed_accounts = $s['unprocessed_accounts'] ?? vec[];
  }
}

type String = string;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
    ?'key' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagMap = dict<TagKey, TagValue>;

class TagResourceRequest {
  public ?GuardDutyArn $resource_arn;
  public ?TagMap $tags;

  public function __construct(shape(
    ?'resource_arn' => ?GuardDutyArn,
    ?'tags' => ?TagMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Tags = vec<Tag>;

type ThreatIntelSetFormat = string;

type ThreatIntelSetIds = vec<String>;

type ThreatIntelSetStatus = string;

class ThreatIntelligenceDetail {
  public string $threat_list_name;
  public ?ThreatNames $threat_names;

  public function __construct(shape(
    ?'threat_list_name' => string,
    ?'threat_names' => ?ThreatNames,
  ) $s = shape()) {
    $this->threat_list_name = $s['threat_list_name'] ?? '';
    $this->threat_names = $s['threat_names'] ?? vec[];
  }
}

type ThreatIntelligenceDetails = vec<ThreatIntelligenceDetail>;

type ThreatNames = vec<String>;

class UnarchiveFindingsRequest {
  public ?DetectorId $detector_id;
  public ?FindingIds $finding_ids;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'finding_ids' => ?FindingIds,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->finding_ids = $s['finding_ids'] ?? vec[];
  }
}

class UnarchiveFindingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnprocessedAccount {
  public ?AccountId $account_id;
  public string $result;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'result' => string,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->result = $s['result'] ?? '';
  }
}

type UnprocessedAccounts = vec<UnprocessedAccount>;

class UntagResourceRequest {
  public ?GuardDutyArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?GuardDutyArn,
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

class UpdateDetectorRequest {
  public ?DetectorId $detector_id;
  public bool $enable;
  public ?FindingPublishingFrequency $finding_publishing_frequency;

  public function __construct(shape(
    ?'detector_id' => ?DetectorId,
    ?'enable' => bool,
    ?'finding_publishing_frequency' => ?FindingPublishingFrequency,
  ) $s = shape()) {
    $this->detector_id = $s['detector_id'] ?? '';
    $this->enable = $s['enable'] ?? false;
    $this->finding_publishing_frequency = $s['finding_publishing_frequency'] ?? '';
  }
}

class UpdateDetectorResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateFilterRequest {
  public ?FilterAction $action;
  public ?FilterDescription $description;
  public ?DetectorId $detector_id;
  public string $filter_name;
  public ?FindingCriteria $finding_criteria;
  public ?FilterRank $rank;

  public function __construct(shape(
    ?'action' => ?FilterAction,
    ?'description' => ?FilterDescription,
    ?'detector_id' => ?DetectorId,
    ?'filter_name' => string,
    ?'finding_criteria' => ?FindingCriteria,
    ?'rank' => ?FilterRank,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->filter_name = $s['filter_name'] ?? '';
    $this->finding_criteria = $s['finding_criteria'] ?? null;
    $this->rank = $s['rank'] ?? 0;
  }
}

class UpdateFilterResponse {
  public ?FilterName $name;

  public function __construct(shape(
    ?'name' => ?FilterName,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

class UpdateFindingsFeedbackRequest {
  public string $comments;
  public ?DetectorId $detector_id;
  public ?Feedback $feedback;
  public ?FindingIds $finding_ids;

  public function __construct(shape(
    ?'comments' => string,
    ?'detector_id' => ?DetectorId,
    ?'feedback' => ?Feedback,
    ?'finding_ids' => ?FindingIds,
  ) $s = shape()) {
    $this->comments = $s['comments'] ?? '';
    $this->detector_id = $s['detector_id'] ?? '';
    $this->feedback = $s['feedback'] ?? '';
    $this->finding_ids = $s['finding_ids'] ?? vec[];
  }
}

class UpdateFindingsFeedbackResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateIPSetRequest {
  public bool $activate;
  public ?DetectorId $detector_id;
  public string $ip_set_id;
  public ?Location $location;
  public ?Name $name;

  public function __construct(shape(
    ?'activate' => bool,
    ?'detector_id' => ?DetectorId,
    ?'ip_set_id' => string,
    ?'location' => ?Location,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->activate = $s['activate'] ?? false;
    $this->detector_id = $s['detector_id'] ?? '';
    $this->ip_set_id = $s['ip_set_id'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateIPSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateOrganizationConfigurationRequest {
  public bool $auto_enable;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'auto_enable' => bool,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->auto_enable = $s['auto_enable'] ?? false;
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class UpdateOrganizationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdatePublishingDestinationRequest {
  public string $destination_id;
  public ?DestinationProperties $destination_properties;
  public ?DetectorId $detector_id;

  public function __construct(shape(
    ?'destination_id' => string,
    ?'destination_properties' => ?DestinationProperties,
    ?'detector_id' => ?DetectorId,
  ) $s = shape()) {
    $this->destination_id = $s['destination_id'] ?? '';
    $this->destination_properties = $s['destination_properties'] ?? null;
    $this->detector_id = $s['detector_id'] ?? '';
  }
}

class UpdatePublishingDestinationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateThreatIntelSetRequest {
  public bool $activate;
  public ?DetectorId $detector_id;
  public ?Location $location;
  public ?Name $name;
  public string $threat_intel_set_id;

  public function __construct(shape(
    ?'activate' => bool,
    ?'detector_id' => ?DetectorId,
    ?'location' => ?Location,
    ?'name' => ?Name,
    ?'threat_intel_set_id' => string,
  ) $s = shape()) {
    $this->activate = $s['activate'] ?? false;
    $this->detector_id = $s['detector_id'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->threat_intel_set_id = $s['threat_intel_set_id'] ?? '';
  }
}

class UpdateThreatIntelSetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

