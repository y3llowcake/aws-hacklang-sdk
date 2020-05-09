<?hh // strict
namespace slack\aws\a4b;

interface Alexa For Business {
  public function CreateGatewayGroup(CreateGatewayGroupRequest) Awaitable<Errors\Result<CreateGatewayGroupResponse>>;
  public function DeleteNetworkProfile(DeleteNetworkProfileRequest) Awaitable<Errors\Result<DeleteNetworkProfileResponse>>;
  public function ListGateways(ListGatewaysRequest) Awaitable<Errors\Result<ListGatewaysResponse>>;
  public function SearchContacts(SearchContactsRequest) Awaitable<Errors\Result<SearchContactsResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateAddressBook(UpdateAddressBookRequest) Awaitable<Errors\Result<UpdateAddressBookResponse>>;
  public function ApproveSkill(ApproveSkillRequest) Awaitable<Errors\Result<ApproveSkillResponse>>;
  public function CreateAddressBook(CreateAddressBookRequest) Awaitable<Errors\Result<CreateAddressBookResponse>>;
  public function GetAddressBook(GetAddressBookRequest) Awaitable<Errors\Result<GetAddressBookResponse>>;
  public function GetContact(GetContactRequest) Awaitable<Errors\Result<GetContactResponse>>;
  public function ListDeviceEvents(ListDeviceEventsRequest) Awaitable<Errors\Result<ListDeviceEventsResponse>>;
  public function GetInvitationConfiguration(GetInvitationConfigurationRequest) Awaitable<Errors\Result<GetInvitationConfigurationResponse>>;
  public function ResolveRoom(ResolveRoomRequest) Awaitable<Errors\Result<ResolveRoomResponse>>;
  public function UpdateContact(UpdateContactRequest) Awaitable<Errors\Result<UpdateContactResponse>>;
  public function CreateConferenceProvider(CreateConferenceProviderRequest) Awaitable<Errors\Result<CreateConferenceProviderResponse>>;
  public function DeleteConferenceProvider(DeleteConferenceProviderRequest) Awaitable<Errors\Result<DeleteConferenceProviderResponse>>;
  public function DeleteSkillAuthorization(DeleteSkillAuthorizationRequest) Awaitable<Errors\Result<DeleteSkillAuthorizationResponse>>;
  public function DisassociateDeviceFromRoom(DisassociateDeviceFromRoomRequest) Awaitable<Errors\Result<DisassociateDeviceFromRoomResponse>>;
  public function GetDevice(GetDeviceRequest) Awaitable<Errors\Result<GetDeviceResponse>>;
  public function UpdateProfile(UpdateProfileRequest) Awaitable<Errors\Result<UpdateProfileResponse>>;
  public function AssociateDeviceWithRoom(AssociateDeviceWithRoomRequest) Awaitable<Errors\Result<AssociateDeviceWithRoomResponse>>;
  public function DeleteAddressBook(DeleteAddressBookRequest) Awaitable<Errors\Result<DeleteAddressBookResponse>>;
  public function RevokeInvitation(RevokeInvitationRequest) Awaitable<Errors\Result<RevokeInvitationResponse>>;
  public function SearchProfiles(SearchProfilesRequest) Awaitable<Errors\Result<SearchProfilesResponse>>;
  public function UpdateGateway(UpdateGatewayRequest) Awaitable<Errors\Result<UpdateGatewayResponse>>;
  public function ListConferenceProviders(ListConferenceProvidersRequest) Awaitable<Errors\Result<ListConferenceProvidersResponse>>;
  public function ListGatewayGroups(ListGatewayGroupsRequest) Awaitable<Errors\Result<ListGatewayGroupsResponse>>;
  public function RegisterAVSDevice(RegisterAVSDeviceRequest) Awaitable<Errors\Result<RegisterAVSDeviceResponse>>;
  public function CreateContact(CreateContactRequest) Awaitable<Errors\Result<CreateContactResponse>>;
  public function CreateNetworkProfile(CreateNetworkProfileRequest) Awaitable<Errors\Result<CreateNetworkProfileResponse>>;
  public function DeleteGatewayGroup(DeleteGatewayGroupRequest) Awaitable<Errors\Result<DeleteGatewayGroupResponse>>;
  public function DeleteRoom(DeleteRoomRequest) Awaitable<Errors\Result<DeleteRoomResponse>>;
  public function GetRoomSkillParameter(GetRoomSkillParameterRequest) Awaitable<Errors\Result<GetRoomSkillParameterResponse>>;
  public function SearchSkillGroups(SearchSkillGroupsRequest) Awaitable<Errors\Result<SearchSkillGroupsResponse>>;
  public function SendAnnouncement(SendAnnouncementRequest) Awaitable<Errors\Result<SendAnnouncementResponse>>;
  public function AssociateSkillWithSkillGroup(AssociateSkillWithSkillGroupRequest) Awaitable<Errors\Result<AssociateSkillWithSkillGroupResponse>>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Result<DeleteUserResponse>>;
  public function UpdateSkillGroup(UpdateSkillGroupRequest) Awaitable<Errors\Result<UpdateSkillGroupResponse>>;
  public function UpdateConferenceProvider(UpdateConferenceProviderRequest) Awaitable<Errors\Result<UpdateConferenceProviderResponse>>;
  public function UpdateGatewayGroup(UpdateGatewayGroupRequest) Awaitable<Errors\Result<UpdateGatewayGroupResponse>>;
  public function AssociateContactWithAddressBook(AssociateContactWithAddressBookRequest) Awaitable<Errors\Result<AssociateContactWithAddressBookResponse>>;
  public function DeleteDevice(DeleteDeviceRequest) Awaitable<Errors\Result<DeleteDeviceResponse>>;
  public function GetGatewayGroup(GetGatewayGroupRequest) Awaitable<Errors\Result<GetGatewayGroupResponse>>;
  public function PutInvitationConfiguration(PutInvitationConfigurationRequest) Awaitable<Errors\Result<PutInvitationConfigurationResponse>>;
  public function PutRoomSkillParameter(PutRoomSkillParameterRequest) Awaitable<Errors\Result<PutRoomSkillParameterResponse>>;
  public function AssociateSkillWithUsers(AssociateSkillWithUsersRequest) Awaitable<Errors\Result<AssociateSkillWithUsersResponse>>;
  public function DisassociateSkillGroupFromRoom(DisassociateSkillGroupFromRoomRequest) Awaitable<Errors\Result<DisassociateSkillGroupFromRoomResponse>>;
  public function ForgetSmartHomeAppliances(ForgetSmartHomeAppliancesRequest) Awaitable<Errors\Result<ForgetSmartHomeAppliancesResponse>>;
  public function GetGateway(GetGatewayRequest) Awaitable<Errors\Result<GetGatewayResponse>>;
  public function SearchNetworkProfiles(SearchNetworkProfilesRequest) Awaitable<Errors\Result<SearchNetworkProfilesResponse>>;
  public function StartDeviceSync(StartDeviceSyncRequest) Awaitable<Errors\Result<StartDeviceSyncResponse>>;
  public function AssociateDeviceWithNetworkProfile(AssociateDeviceWithNetworkProfileRequest) Awaitable<Errors\Result<AssociateDeviceWithNetworkProfileResponse>>;
  public function AssociateSkillGroupWithRoom(AssociateSkillGroupWithRoomRequest) Awaitable<Errors\Result<AssociateSkillGroupWithRoomResponse>>;
  public function DeleteContact(DeleteContactRequest) Awaitable<Errors\Result<DeleteContactResponse>>;
  public function ListSkills(ListSkillsRequest) Awaitable<Errors\Result<ListSkillsResponse>>;
  public function ListSkillsStoreSkillsByCategory(ListSkillsStoreSkillsByCategoryRequest) Awaitable<Errors\Result<ListSkillsStoreSkillsByCategoryResponse>>;
  public function DeleteRoomSkillParameter(DeleteRoomSkillParameterRequest) Awaitable<Errors\Result<DeleteRoomSkillParameterResponse>>;
  public function GetConferencePreference(GetConferencePreferenceRequest) Awaitable<Errors\Result<GetConferencePreferenceResponse>>;
  public function RejectSkill(RejectSkillRequest) Awaitable<Errors\Result<RejectSkillResponse>>;
  public function StartSmartHomeApplianceDiscovery(StartSmartHomeApplianceDiscoveryRequest) Awaitable<Errors\Result<StartSmartHomeApplianceDiscoveryResponse>>;
  public function UpdateBusinessReportSchedule(UpdateBusinessReportScheduleRequest) Awaitable<Errors\Result<UpdateBusinessReportScheduleResponse>>;
  public function UpdateNetworkProfile(UpdateNetworkProfileRequest) Awaitable<Errors\Result<UpdateNetworkProfileResponse>>;
  public function CreateBusinessReportSchedule(CreateBusinessReportScheduleRequest) Awaitable<Errors\Result<CreateBusinessReportScheduleResponse>>;
  public function GetConferenceProvider(GetConferenceProviderRequest) Awaitable<Errors\Result<GetConferenceProviderResponse>>;
  public function ListBusinessReportSchedules(ListBusinessReportSchedulesRequest) Awaitable<Errors\Result<ListBusinessReportSchedulesResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function PutSkillAuthorization(PutSkillAuthorizationRequest) Awaitable<Errors\Result<PutSkillAuthorizationResponse>>;
  public function UpdateDevice(UpdateDeviceRequest) Awaitable<Errors\Result<UpdateDeviceResponse>>;
  public function CreateSkillGroup(CreateSkillGroupRequest) Awaitable<Errors\Result<CreateSkillGroupResponse>>;
  public function DeleteBusinessReportSchedule(DeleteBusinessReportScheduleRequest) Awaitable<Errors\Result<DeleteBusinessReportScheduleResponse>>;
  public function DeleteDeviceUsageData(DeleteDeviceUsageDataRequest) Awaitable<Errors\Result<DeleteDeviceUsageDataResponse>>;
  public function DisassociateContactFromAddressBook(DisassociateContactFromAddressBookRequest) Awaitable<Errors\Result<DisassociateContactFromAddressBookResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function SearchDevices(SearchDevicesRequest) Awaitable<Errors\Result<SearchDevicesResponse>>;
  public function CreateProfile(CreateProfileRequest) Awaitable<Errors\Result<CreateProfileResponse>>;
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeleteProfile(DeleteProfileRequest) Awaitable<Errors\Result<DeleteProfileResponse>>;
  public function DisassociateSkillFromUsers(DisassociateSkillFromUsersRequest) Awaitable<Errors\Result<DisassociateSkillFromUsersResponse>>;
  public function GetSkillGroup(GetSkillGroupRequest) Awaitable<Errors\Result<GetSkillGroupResponse>>;
  public function SearchAddressBooks(SearchAddressBooksRequest) Awaitable<Errors\Result<SearchAddressBooksResponse>>;
  public function SearchRooms(SearchRoomsRequest) Awaitable<Errors\Result<SearchRoomsResponse>>;
  public function SendInvitation(SendInvitationRequest) Awaitable<Errors\Result<SendInvitationResponse>>;
  public function CreateRoom(CreateRoomRequest) Awaitable<Errors\Result<CreateRoomResponse>>;
  public function DisassociateSkillFromSkillGroup(DisassociateSkillFromSkillGroupRequest) Awaitable<Errors\Result<DisassociateSkillFromSkillGroupResponse>>;
  public function GetNetworkProfile(GetNetworkProfileRequest) Awaitable<Errors\Result<GetNetworkProfileResponse>>;
  public function GetRoom(GetRoomRequest) Awaitable<Errors\Result<GetRoomResponse>>;
  public function ListSkillsStoreCategories(ListSkillsStoreCategoriesRequest) Awaitable<Errors\Result<ListSkillsStoreCategoriesResponse>>;
  public function UpdateRoom(UpdateRoomRequest) Awaitable<Errors\Result<UpdateRoomResponse>>;
  public function DeleteSkillGroup(DeleteSkillGroupRequest) Awaitable<Errors\Result<DeleteSkillGroupResponse>>;
  public function GetProfile(GetProfileRequest) Awaitable<Errors\Result<GetProfileResponse>>;
  public function ListSmartHomeAppliances(ListSmartHomeAppliancesRequest) Awaitable<Errors\Result<ListSmartHomeAppliancesResponse>>;
  public function PutConferencePreference(PutConferencePreferenceRequest) Awaitable<Errors\Result<PutConferencePreferenceResponse>>;
  public function SearchUsers(SearchUsersRequest) Awaitable<Errors\Result<SearchUsersResponse>>;
}

class BusinessReportS3Location {
  public BusinessReportS3Path $path;
  public CustomerS3BucketName $bucket_name;
}

class DeviceSerialNumber {
}

class NameInUseException {
  public ErrorMessage $message;
}

class BusinessReportDeliveryTime {
}

class ProductId {
}

class PutInvitationConfigurationRequest {
  public OrganizationName $organization_name;
  public Email $contact_email;
  public ShortSkillIdList $private_skill_ids;
}

class SkillName {
}

class CustomerS3BucketName {
}

class MeetingSetting {
  public RequirePin $require_pin;
}

class UpdateGatewayGroupRequest {
  public Arn $gateway_group_arn;
  public GatewayGroupName $name;
  public GatewayGroupDescription $description;
}

class CreateContactRequest {
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;
  public ClientRequestToken $client_request_token;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
}

class Gateway {
  public Arn $gateway_group_arn;
  public GatewayVersion $software_version;
  public Arn $arn;
  public GatewayName $name;
  public GatewayDescription $description;
}

class ListDeviceEventsResponse {
  public DeviceEventList $device_events;
  public NextToken $next_token;
}

class ReviewKey {
}

class Locale {
}

class ConferencePreference {
  public Arn $default_conference_provider_arn;
}

class SearchProfilesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public FilterList $filters;
  public SortList $sort_criteria;
}

class AssociateContactWithAddressBookResponse {
}

class Category {
  public CategoryId $category_id;
  public CategoryName $category_name;
}

class CreateNetworkProfileRequest {
  public TrustAnchorList $trust_anchors;
  public NetworkProfileName $network_profile_name;
  public NetworkProfileDescription $description;
  public NetworkSsid $ssid;
  public NetworkSecurityType $security_type;
  public NetworkEapMethod $eap_method;
  public NextWiFiPassword $next_password;
  public Arn $certificate_authority_arn;
  public CurrentWiFiPassword $current_password;
  public ClientRequestToken $client_request_token;
}

class PutSkillAuthorizationRequest {
  public AuthorizationResult $authorization_result;
  public SkillId $skill_id;
  public Arn $room_arn;
}

class AddressBookName {
}

class Arn {
}

class Feature {
}

class SkillTypeFilter {
}

class UpdateInstantBooking {
  public boolean $enabled;
  public Minutes $duration_in_minutes;
}

class CreateUserRequest {
  public user_LastName $last_name;
  public Email $email;
  public ClientRequestToken $client_request_token;
  public TagList $tags;
  public user_UserId $user_id;
  public user_FirstName $first_name;
}

class DeleteBusinessReportScheduleRequest {
  public Arn $schedule_arn;
}

class GenericKeywords {
}

class ListSkillsRequest {
  public NextToken $next_token;
  public SkillListMaxResults $max_results;
  public Arn $skill_group_arn;
  public EnablementTypeFilter $enablement_type;
  public SkillTypeFilter $skill_type;
}

class CreateGatewayGroupResponse {
  public Arn $gateway_group_arn;
}

class ListSmartHomeAppliancesResponse {
  public SmartHomeApplianceList $smart_home_appliances;
  public NextToken $next_token;
}

class NetworkProfileName {
}

class SipUri {
}

class UpdateGatewayGroupResponse {
}

class AddressBookDescription {
}

class ForgetSmartHomeAppliancesRequest {
  public Arn $room_arn;
}

class NetworkProfileDescription {
}

class DeleteGatewayGroupRequest {
  public Arn $gateway_group_arn;
}

class DisassociateDeviceFromRoomRequest {
  public Arn $device_arn;
}

class SearchUsersResponse {
  public UserDataList $users;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class WakeWord {
}

class DeleteConferenceProviderResponse {
}

class Reviews {
}

class CountryCode {
}

class CreateProfileResponse {
  public Arn $profile_arn;
}

class UserCode {
}

class GetGatewayGroupResponse {
  public GatewayGroup $gateway_group;
}

class NetworkProfile {
  public Arn $network_profile_arn;
  public NetworkSsid $ssid;
  public CurrentWiFiPassword $current_password;
  public NextWiFiPassword $next_password;
  public TrustAnchorList $trust_anchors;
  public NetworkProfileName $network_profile_name;
  public NetworkProfileDescription $description;
  public NetworkSecurityType $security_type;
  public NetworkEapMethod $eap_method;
  public Arn $certificate_authority_arn;
}

class BusinessReportFailureCode {
}

class DeleteRoomRequest {
  public Arn $room_arn;
}

class BusinessReportFormat {
}

class GetConferenceProviderRequest {
  public Arn $conference_provider_arn;
}

class GetContactRequest {
  public Arn $contact_arn;
}

class TotalCount {
}

class UpdateNetworkProfileResponse {
}

class DeviceEventList {
}

class DisassociateSkillGroupFromRoomRequest {
  public Arn $skill_group_arn;
  public Arn $room_arn;
}

class EnablementType {
}

class FilterKey {
}

class UnauthorizedException {
  public ErrorMessage $message;
}

class UntagResourceRequest {
  public Arn $arn;
  public TagKeyList $tag_keys;
}

class user_LastName {
}

class CreateProfileRequest {
  public ProfileName $profile_name;
  public DistanceUnit $distance_unit;
  public WakeWord $wake_word;
  public ClientRequestToken $client_request_token;
  public boolean $setup_mode_disabled;
  public boolean $pstn_enabled;
  public Timezone $timezone;
  public Address $address;
  public TemperatureUnit $temperature_unit;
  public DeviceLocale $locale;
  public MaxVolumeLimit $max_volume_limit;
  public CreateMeetingRoomConfiguration $meeting_room_configuration;
}

class GatewaySummary {
  public Arn $arn;
  public GatewayName $name;
  public GatewayDescription $description;
  public Arn $gateway_group_arn;
  public GatewayVersion $software_version;
}

class NetworkProfileData {
  public NetworkProfileDescription $description;
  public NetworkSsid $ssid;
  public NetworkSecurityType $security_type;
  public NetworkEapMethod $eap_method;
  public Arn $certificate_authority_arn;
  public Arn $network_profile_arn;
  public NetworkProfileName $network_profile_name;
}

class StartDeviceSyncRequest {
  public Arn $room_arn;
  public Arn $device_arn;
  public Features $features;
}

class UpdateRequireCheckIn {
  public Minutes $release_after_minutes;
  public boolean $enabled;
}

class ListConferenceProvidersResponse {
  public ConferenceProvidersList $conference_providers;
  public NextToken $next_token;
}

class ShortDescription {
}

class ApproveSkillResponse {
}

class AssociateDeviceWithNetworkProfileResponse {
}

class BusinessReportScheduleList {
}

class DeviceEventTime {
}

class Endpoint {
}

class Key {
}

class UpdateSkillGroupResponse {
}

class ConnectionStatusUpdatedTime {
}

class DeleteNetworkProfileRequest {
  public Arn $network_profile_arn;
}

class GetInvitationConfigurationRequest {
}

class S3KeyPrefix {
}

class SearchContactsResponse {
  public ContactDataList $contacts;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class ApplianceFriendlyName {
}

class MeetingRoomConfiguration {
  public boolean $room_utilization_metrics_enabled;
  public EndOfMeetingReminder $end_of_meeting_reminder;
  public InstantBooking $instant_booking;
  public RequireCheckIn $require_check_in;
}

class DeviceStatusDetails {
}

class ListSkillsStoreSkillsByCategoryResponse {
  public SkillsStoreSkillList $skills_store_skills;
  public NextToken $next_token;
}

class UpdateAddressBookResponse {
}

class AssociateSkillWithUsersResponse {
}

class CertificateTime {
}

class DeleteRoomResponse {
}

class RejectSkillResponse {
}

class UpdateDeviceRequest {
  public Arn $device_arn;
  public DeviceName $device_name;
}

class ConferenceProvidersList {
}

class DeleteProfileResponse {
}

class GetRoomSkillParameterRequest {
  public RoomSkillParameterKey $parameter_key;
  public Arn $room_arn;
  public SkillId $skill_id;
}

class GetSkillGroupRequest {
  public Arn $skill_group_arn;
}

class SearchRoomsResponse {
  public RoomDataList $rooms;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class DeleteGatewayGroupResponse {
}

class RegisterAVSDeviceResponse {
  public Arn $device_arn;
}

class AudioList {
}

class GatewayName {
}

class GetGatewayRequest {
  public Arn $gateway_arn;
}

class PutSkillAuthorizationResponse {
}

class SipAddress {
  public SipUri $uri;
  public SipType $type;
}

class StartSmartHomeApplianceDiscoveryRequest {
  public Arn $room_arn;
}

class RoomSkillParameterKey {
}

class AssociateContactWithAddressBookRequest {
  public Arn $contact_arn;
  public Arn $address_book_arn;
}

class AssociateDeviceWithRoomResponse {
}

class CategoryName {
}

class CreateRequireCheckIn {
  public Minutes $release_after_minutes;
  public boolean $enabled;
}

class DeviceType {
}

class DeviceUsageType {
}

class SkillGroupDataList {
}

class Features {
}

class SkillListMaxResults {
}

class StartDeviceSyncResponse {
}

class DeleteSkillGroupResponse {
}

class EnrollmentStatus {
}

class FilterValueList {
}

class ListGatewayGroupsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class NotFoundException {
  public ErrorMessage $message;
}

class OutboundPhoneNumber {
}

class SearchNetworkProfilesRequest {
  public SortList $sort_criteria;
  public NextToken $next_token;
  public MaxResults $max_results;
  public FilterList $filters;
}

class SortValue {
}

class CreateSkillGroupResponse {
  public Arn $skill_group_arn;
}

class DeviceSerialNumberForAVS {
}

class TagKeyList {
}

class TrustAnchorList {
}

class UpdateProfileRequest {
  public DeviceLocale $locale;
  public boolean $setup_mode_disabled;
  public MaxVolumeLimit $max_volume_limit;
  public boolean $pstn_enabled;
  public UpdateMeetingRoomConfiguration $meeting_room_configuration;
  public TemperatureUnit $temperature_unit;
  public WakeWord $wake_word;
  public Arn $profile_arn;
  public ProfileName $profile_name;
  public boolean $is_default;
  public Timezone $timezone;
  public Address $address;
  public DistanceUnit $distance_unit;
}

class boolean {
}

class TextList {
}

class BulletPoint {
}

class DeleteDeviceRequest {
  public Arn $device_arn;
}

class DeveloperName {
}

class DeviceStatusDetail {
  public Feature $feature;
  public DeviceStatusDetailCode $code;
}

class Email {
}

class UpdateConferenceProviderRequest {
  public ConferenceProviderType $conference_provider_type;
  public IPDialIn $ip_dial_in;
  public PSTNDialIn $pstn_dial_in;
  public MeetingSetting $meeting_setting;
  public Arn $conference_provider_arn;
}

class NetworkEapMethod {
}

class UpdateRoomResponse {
}

class CreateConferenceProviderRequest {
  public ConferenceProviderType $conference_provider_type;
  public IPDialIn $ip_dial_in;
  public PSTNDialIn $pstn_dial_in;
  public MeetingSetting $meeting_setting;
  public ClientRequestToken $client_request_token;
  public ConferenceProviderName $conference_provider_name;
}

class DisassociateContactFromAddressBookRequest {
  public Arn $contact_arn;
  public Arn $address_book_arn;
}

class RejectSkillRequest {
  public SkillId $skill_id;
}

class GetConferencePreferenceRequest {
}

class InvalidCertificateAuthorityException {
  public ErrorMessage $message;
}

class ListTagsResponse {
  public TagList $tags;
  public NextToken $next_token;
}

class SearchNetworkProfilesResponse {
  public NetworkProfileDataList $network_profiles;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class Ssml {
  public Locale $locale;
  public SsmlValue $value;
}

class UserData {
  public Arn $user_arn;
  public user_FirstName $first_name;
  public user_LastName $last_name;
  public Email $email;
  public EnrollmentStatus $enrollment_status;
  public EnrollmentId $enrollment_id;
}

class EndOfMeetingReminderType {
}

class IPDialIn {
  public Endpoint $endpoint;
  public CommsProtocol $comms_protocol;
}

class SearchAddressBooksResponse {
  public AddressBookDataList $address_books;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class GetConferenceProviderResponse {
  public ConferenceProvider $conference_provider;
}

class AssociateSkillWithSkillGroupResponse {
}

class BusinessReport {
  public BusinessReportDownloadUrl $download_url;
  public BusinessReportStatus $status;
  public BusinessReportFailureCode $failure_code;
  public BusinessReportS3Location $s_3_location;
  public BusinessReportDeliveryTime $delivery_time;
}

class Minutes {
}

class SmartHomeApplianceList {
}

class UpdateBusinessReportScheduleResponse {
}

class AddressBookDataList {
}

class CreateAddressBookRequest {
  public ClientRequestToken $client_request_token;
  public AddressBookName $name;
  public AddressBookDescription $description;
}

class Room {
  public ProviderCalendarId $provider_calendar_id;
  public Arn $profile_arn;
  public Arn $room_arn;
  public RoomName $room_name;
  public RoomDescription $description;
}

class CreateBusinessReportScheduleResponse {
  public Arn $schedule_arn;
}

class DeleteSkillAuthorizationRequest {
  public SkillId $skill_id;
  public Arn $room_arn;
}

class PutInvitationConfigurationResponse {
}

class SkillGroupDescription {
}

class DeviceNotRegisteredException {
  public ErrorMessage $message;
}

class DistanceUnit {
}

class EndOfMeetingReminder {
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;
  public boolean $enabled;
}

class ListGatewaysResponse {
  public NextToken $next_token;
  public GatewaySummaries $gateways;
}

class SearchProfilesResponse {
  public ProfileDataList $profiles;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class SkillsStoreSkill {
  public SkillId $skill_id;
  public SkillName $skill_name;
  public ShortDescription $short_description;
  public IconUrl $icon_url;
  public SampleUtterances $sample_utterances;
  public SkillDetails $skill_details;
  public boolean $supports_linking;
}

class ApplianceDescription {
}

class Date {
}

class DeleteContactRequest {
  public Arn $contact_arn;
}

class CommsProtocol {
}

class InvalidUserStatusException {
  public ErrorMessage $message;
}

class AssociateDeviceWithRoomRequest {
  public Arn $device_arn;
  public Arn $room_arn;
}

class CreateInstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;
}

class DeleteRoomSkillParameterResponse {
}

class DisassociateSkillGroupFromRoomResponse {
}

class GatewayGroupSummaries {
}

class TimeToLiveInSeconds {
}

class PutConferencePreferenceResponse {
}

class SkillGroupName {
}

class UserDataList {
}

class DeleteSkillAuthorizationResponse {
}

class DeviceEvent {
  public DeviceEventTime $timestamp;
  public DeviceEventType $type;
  public DeviceEventValue $value;
}

class EnrollmentId {
}

class CreateMeetingRoomConfiguration {
  public boolean $room_utilization_metrics_enabled;
  public CreateEndOfMeetingReminder $end_of_meeting_reminder;
  public CreateInstantBooking $instant_booking;
  public CreateRequireCheckIn $require_check_in;
}

class DisassociateDeviceFromRoomResponse {
}

class GetRoomSkillParameterResponse {
  public RoomSkillParameter $room_skill_parameter;
}

class ProductDescription {
}

class RegisterAVSDeviceRequest {
  public ClientId $client_id;
  public UserCode $user_code;
  public ProductId $product_id;
  public DeviceSerialNumberForAVS $device_serial_number;
  public AmazonId $amazon_id;
}

class SkillSummaryList {
}

class CreateEndOfMeetingReminder {
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;
  public boolean $enabled;
}

class GatewayGroupName {
}

class Boolean {
}

class DisassociateSkillFromSkillGroupResponse {
}

class SortKey {
}

class AudioLocation {
}

class CreateAddressBookResponse {
  public Arn $address_book_arn;
}

class DeleteDeviceUsageDataRequest {
  public Arn $device_arn;
  public DeviceUsageType $device_usage_type;
}

class DeviceDataCreatedTime {
}

class GetSkillGroupResponse {
  public SkillGroup $skill_group;
}

class PhoneNumber {
  public RawPhoneNumber $number;
  public PhoneNumberType $type;
}

class SendInvitationRequest {
  public Arn $user_arn;
}

class TagList {
}

class CreateRoomRequest {
  public ClientRequestToken $client_request_token;
  public TagList $tags;
  public RoomName $room_name;
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProviderCalendarId $provider_calendar_id;
}

class DeleteDeviceUsageDataResponse {
}

class DeviceDataList {
}

class DisassociateSkillFromUsersResponse {
}

class SkillsStoreSkillList {
}

class EnablementTypeFilter {
}

class DeleteRoomSkillParameterRequest {
  public Arn $room_arn;
  public SkillId $skill_id;
  public RoomSkillParameterKey $parameter_key;
}

class RevokeInvitationResponse {
}

class RoomSkillParameterValue {
}

class SkillGroupData {
  public SkillGroupName $skill_group_name;
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
}

class AmazonId {
}

class AssociateSkillGroupWithRoomRequest {
  public Arn $skill_group_arn;
  public Arn $room_arn;
}

class DeviceNetworkProfileInfo {
  public Arn $network_profile_arn;
  public Arn $certificate_arn;
  public CertificateTime $certificate_expiration_time;
}

class PrivacyPolicy {
}

class CreateBusinessReportScheduleRequest {
  public BusinessReportScheduleName $schedule_name;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public BusinessReportFormat $format;
  public BusinessReportContentRange $content_range;
  public BusinessReportRecurrence $recurrence;
  public ClientRequestToken $client_request_token;
}

class CreateGatewayGroupRequest {
  public GatewayGroupDescription $description;
  public ClientRequestToken $client_request_token;
  public GatewayGroupName $name;
}

class PhoneNumberType {
}

class SipType {
}

class AssociateDeviceWithNetworkProfileRequest {
  public Arn $device_arn;
  public Arn $network_profile_arn;
}

class ConferenceProviderType {
}

class RawPhoneNumber {
}

class TagKey {
}

class UpdateMeetingRoomConfiguration {
  public boolean $room_utilization_metrics_enabled;
  public UpdateEndOfMeetingReminder $end_of_meeting_reminder;
  public UpdateInstantBooking $instant_booking;
  public UpdateRequireCheckIn $require_check_in;
}

class AssociateSkillWithSkillGroupRequest {
  public Arn $skill_group_arn;
  public SkillId $skill_id;
}

class GetDeviceRequest {
  public Arn $device_arn;
}

class InvalidSecretsManagerResourceException {
  public ErrorMessage $message;
}

class BusinessReportStatus {
}

class SampleUtterances {
}

class SoftwareVersion {
}

class ContactData {
  public Arn $contact_arn;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;
}

class NetworkProfileDataList {
}

class SearchContactsRequest {
  public FilterList $filters;
  public SortList $sort_criteria;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class SearchSkillGroupsResponse {
  public NextToken $next_token;
  public TotalCount $total_count;
  public SkillGroupDataList $skill_groups;
}

class SkillType {
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class UpdateGatewayResponse {
}

class ListBusinessReportSchedulesResponse {
  public BusinessReportScheduleList $business_report_schedules;
  public NextToken $next_token;
}

class RequirePin {
}

class RoomName {
}

class UserId {
}

class DeleteAddressBookResponse {
}

class ListGatewayGroupsResponse {
  public GatewayGroupSummaries $gateway_groups;
  public NextToken $next_token;
}

class NextToken {
}

class UpdateDeviceResponse {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListDeviceEventsRequest {
  public Arn $device_arn;
  public DeviceEventType $event_type;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class PutRoomSkillParameterResponse {
}

class ReviewValue {
}

class CreateNetworkProfileResponse {
  public Arn $network_profile_arn;
}

class GatewayVersion {
}

class IconUrl {
}

class SearchDevicesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public FilterList $filters;
  public SortList $sort_criteria;
}

class UntagResourceResponse {
}

class InvocationPhrase {
}

class ListSkillsStoreCategoriesResponse {
  public CategoryList $category_list;
  public NextToken $next_token;
}

class RoomDataList {
}

class ContactName {
}

class MacAddress {
}

class RoomSkillParameter {
  public RoomSkillParameterKey $parameter_key;
  public RoomSkillParameterValue $parameter_value;
}

class Value {
}

class AssociateSkillGroupWithRoomResponse {
}

class ReleaseDate {
}

class ResourceAssociatedException {
  public ErrorMessage $message;
}

class ShortSkillIdList {
}

class Filter {
  public FilterKey $key;
  public FilterValueList $values;
}

class ForgetSmartHomeAppliancesResponse {
}

class GetRoomRequest {
  public Arn $room_arn;
}

class UpdateBusinessReportScheduleRequest {
  public Arn $schedule_arn;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public BusinessReportFormat $format;
  public BusinessReportScheduleName $schedule_name;
  public BusinessReportRecurrence $recurrence;
}

class ContactDataList {
}

class FilterList {
}

class FilterValue {
}

class Profile {
  public TemperatureUnit $temperature_unit;
  public boolean $setup_mode_disabled;
  public MaxVolumeLimit $max_volume_limit;
  public boolean $pstn_enabled;
  public Arn $address_book_arn;
  public DistanceUnit $distance_unit;
  public Address $address;
  public DeviceLocale $locale;
  public MeetingRoomConfiguration $meeting_room_configuration;
  public Arn $profile_arn;
  public boolean $is_default;
  public Timezone $timezone;
  public WakeWord $wake_word;
  public ProfileName $profile_name;
}

class UpdateSkillGroupRequest {
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;
}

class SmartHomeAppliance {
  public ApplianceManufacturerName $manufacturer_name;
  public ApplianceFriendlyName $friendly_name;
  public ApplianceDescription $description;
}

class SortList {
}

class BusinessReportDownloadUrl {
}

class DisassociateContactFromAddressBookResponse {
}

class ListTagsRequest {
  public Arn $arn;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class NextWiFiPassword {
}

class DeleteProfileRequest {
  public Arn $profile_arn;
}

class UpdateConferenceProviderResponse {
}

class BusinessReportRecurrence {
  public Date $start_date;
}

class RevokeInvitationRequest {
  public Arn $user_arn;
  public EnrollmentId $enrollment_id;
}

class RoomData {
  public ProfileName $profile_name;
  public Arn $room_arn;
  public RoomName $room_name;
  public RoomDescription $description;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $profile_arn;
}

class RoomDescription {
}

class RoomSkillParameters {
}

class TagResourceResponse {
}

class Text {
  public Locale $locale;
  public TextValue $value;
}

class GetProfileResponse {
  public Profile $profile;
}

class DeleteDeviceResponse {
}

class NetworkSsid {
}

class ResolveRoomRequest {
  public SkillId $skill_id;
  public UserId $user_id;
}

class SipAddressList {
}

class SkillDetails {
  public InvocationPhrase $invocation_phrase;
  public BulletPoints $bullet_points;
  public NewInThisVersionBulletPoints $new_in_this_version_bullet_points;
  public SkillTypes $skill_types;
  public Reviews $reviews;
  public ProductDescription $product_description;
  public EndUserLicenseAgreement $end_user_license_agreement;
  public GenericKeywords $generic_keywords;
  public DeveloperInfo $developer_info;
  public ReleaseDate $release_date;
}

class SendAnnouncementRequest {
  public FilterList $room_filters;
  public Content $content;
  public TimeToLiveInSeconds $time_to_live_in_seconds;
  public ClientRequestToken $client_request_token;
}

class SkillGroup {
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;
  public SkillGroupDescription $description;
}

class SkillTypes {
}

class TextValue {
}

class DeleteUserRequest {
  public Arn $user_arn;
  public EnrollmentId $enrollment_id;
}

class TemperatureUnit {
}

class DeleteAddressBookRequest {
  public Arn $address_book_arn;
}

class ErrorMessage {
}

class GetRoomResponse {
  public Room $room;
}

class user_FirstName {
}

class PutConferencePreferenceRequest {
  public ConferencePreference $conference_preference;
}

class DisassociateSkillFromUsersRequest {
  public SkillId $skill_id;
}

class OneClickPinDelay {
}

class SearchSkillGroupsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public FilterList $filters;
  public SortList $sort_criteria;
}

class UpdateAddressBookRequest {
  public Arn $address_book_arn;
  public AddressBookName $name;
  public AddressBookDescription $description;
}

class Utterance {
}

class DeleteContactResponse {
}

class ResourceInUseException {
  public ErrorMessage $message;
  public ClientRequestToken $client_request_token;
}

class TagValue {
}

class Address {
}

class ApplianceManufacturerName {
}

class BusinessReportS3Path {
}

class GetAddressBookResponse {
  public AddressBook $address_book;
}

class ProviderCalendarId {
}

class UpdateContactResponse {
}

class AlreadyExistsException {
  public ErrorMessage $message;
}

class ConferenceProvider {
  public ConferenceProviderName $name;
  public ConferenceProviderType $type;
  public IPDialIn $ip_dial_in;
  public PSTNDialIn $pstn_dial_in;
  public MeetingSetting $meeting_setting;
  public Arn $arn;
}

class DisassociateSkillFromSkillGroupRequest {
  public Arn $skill_group_arn;
  public SkillId $skill_id;
}

class GetConferencePreferenceResponse {
  public ConferencePreference $preference;
}

class Audio {
  public Locale $locale;
  public AudioLocation $location;
}

class SearchUsersRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public FilterList $filters;
  public SortList $sort_criteria;
}

class UpdateProfileResponse {
}

class GetContactResponse {
  public Contact $contact;
}

class ListSkillsStoreCategoriesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class SsmlValue {
}

class CreateContactResponse {
  public Arn $contact_arn;
}

class CreateSkillGroupRequest {
  public ClientRequestToken $client_request_token;
  public SkillGroupName $skill_group_name;
  public SkillGroupDescription $description;
}

class ListConferenceProvidersRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class PutRoomSkillParameterRequest {
  public Arn $room_arn;
  public SkillId $skill_id;
  public RoomSkillParameter $room_skill_parameter;
}

class Device {
  public DeviceStatusInfo $device_status_info;
  public DeviceNetworkProfileInfo $network_profile_info;
  public Arn $device_arn;
  public DeviceSerialNumber $device_serial_number;
  public SoftwareVersion $software_version;
  public Arn $room_arn;
  public DeviceStatus $device_status;
  public DeviceType $device_type;
  public DeviceName $device_name;
  public MacAddress $mac_address;
}

class RequireCheckIn {
  public Minutes $release_after_minutes;
  public boolean $enabled;
}

class BusinessReportSchedule {
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public BusinessReportFormat $format;
  public BusinessReportContentRange $content_range;
  public BusinessReportRecurrence $recurrence;
  public BusinessReport $last_business_report;
  public Arn $schedule_arn;
  public BusinessReportScheduleName $schedule_name;
}

class CategoryId {
}

class ClientId {
}

class DeviceData {
  public Arn $network_profile_arn;
  public Arn $room_arn;
  public DeviceStatusInfo $device_status_info;
  public DeviceSerialNumber $device_serial_number;
  public DeviceType $device_type;
  public DeviceName $device_name;
  public MacAddress $mac_address;
  public RoomName $room_name;
  public DeviceDataCreatedTime $created_time;
  public Arn $device_arn;
  public SoftwareVersion $software_version;
  public DeviceStatus $device_status;
  public NetworkProfileName $network_profile_name;
}

class ResolveRoomResponse {
  public RoomName $room_name;
  public RoomSkillParameters $room_skill_parameters;
  public Arn $room_arn;
}

class GenericKeyword {
}

class GetNetworkProfileResponse {
  public NetworkProfile $network_profile;
}

class DeleteSkillGroupRequest {
  public Arn $skill_group_arn;
}

class ListGatewaysRequest {
  public Arn $gateway_group_arn;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class NewInThisVersionBulletPoints {
}

class OneClickIdDelay {
}

class SendInvitationResponse {
}

class AuthorizationResult {
}

class ProfileData {
  public ProfileName $profile_name;
  public Address $address;
  public Timezone $timezone;
  public DistanceUnit $distance_unit;
  public Arn $profile_arn;
  public TemperatureUnit $temperature_unit;
  public WakeWord $wake_word;
  public DeviceLocale $locale;
  public boolean $is_default;
}

class DeleteConferenceProviderRequest {
  public Arn $conference_provider_arn;
}

class DeviceName {
}

class GetGatewayResponse {
  public Gateway $gateway;
}

class ProfileDataList {
}

class DeviceEventType {
}

class InvalidServiceLinkedRoleStateException {
  public ErrorMessage $message;
}

class NetworkSecurityType {
}

class SearchDevicesResponse {
  public DeviceDataList $devices;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class AddressBook {
  public AddressBookDescription $description;
  public Arn $address_book_arn;
  public AddressBookName $name;
}

class BusinessReportContentRange {
  public BusinessReportInterval $interval;
}

class DeleteUserResponse {
}

class MaxResults {
}

class UpdateGatewayRequest {
  public Arn $gateway_arn;
  public GatewayName $name;
  public GatewayDescription $description;
  public GatewayVersion $software_version;
}

class GetGatewayGroupRequest {
  public Arn $gateway_group_arn;
}

class PSTNDialIn {
  public CountryCode $country_code;
  public OutboundPhoneNumber $phone_number;
  public OneClickIdDelay $one_click_id_delay;
  public OneClickPinDelay $one_click_pin_delay;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class UpdateNetworkProfileRequest {
  public NetworkProfileName $network_profile_name;
  public NetworkProfileDescription $description;
  public CurrentWiFiPassword $current_password;
  public NextWiFiPassword $next_password;
  public Arn $certificate_authority_arn;
  public TrustAnchorList $trust_anchors;
  public Arn $network_profile_arn;
}

class UpdateRoomRequest {
  public RoomDescription $description;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $profile_arn;
  public Arn $room_arn;
  public RoomName $room_name;
}

class CreateRoomResponse {
  public Arn $room_arn;
}

class DeviceStatusDetailCode {
}

class GetNetworkProfileRequest {
  public Arn $network_profile_arn;
}

class SkillNotLinkedException {
  public ErrorMessage $message;
}

class user_UserId {
}

class SearchAddressBooksRequest {
  public FilterList $filters;
  public SortList $sort_criteria;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class BusinessReportInterval {
}

class DeleteBusinessReportScheduleResponse {
}

class GatewayGroupDescription {
}

class GatewaySummaries {
}

class SearchRoomsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public FilterList $filters;
  public SortList $sort_criteria;
}

class StartSmartHomeApplianceDiscoveryResponse {
}

class ClientRequestToken {
}

class Contact {
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;
  public Arn $contact_arn;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
}

class DeveloperInfo {
  public DeveloperName $developer_name;
  public PrivacyPolicy $privacy_policy;
  public Email $email;
  public Url $url;
}

class ListSmartHomeAppliancesRequest {
  public Arn $room_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DeviceStatusInfo {
  public DeviceStatusDetails $device_status_details;
  public ConnectionStatus $connection_status;
  public ConnectionStatusUpdatedTime $connection_status_updated_time;
}

class InvalidDeviceException {
  public ErrorMessage $message;
}

class GetInvitationConfigurationResponse {
  public OrganizationName $organization_name;
  public Email $contact_email;
  public ShortSkillIdList $private_skill_ids;
}

class MaxVolumeLimit {
}

class TagResourceRequest {
  public Arn $arn;
  public TagList $tags;
}

class BulletPoints {
}

class BusinessReportScheduleName {
}

class EndOfMeetingReminderMinutesList {
}

class OrganizationName {
}

class TrustAnchor {
}

class UpdateEndOfMeetingReminder {
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;
  public boolean $enabled;
}

class ApproveSkillRequest {
  public SkillId $skill_id;
}

class Content {
  public AudioList $audio_list;
  public TextList $text_list;
  public SsmlList $ssml_list;
}

class GatewayDescription {
}

class ProfileName {
}

class AssociateSkillWithUsersRequest {
  public SkillId $skill_id;
}

class InstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;
}

class CategoryList {
}

class CreateUserResponse {
  public Arn $user_arn;
}

class DeleteNetworkProfileResponse {
}

class GetProfileRequest {
  public Arn $profile_arn;
}

class CreateConferenceProviderResponse {
  public Arn $conference_provider_arn;
}

class GetDeviceResponse {
  public Device $device;
}

class SkillId {
}

class SkillStoreType {
}

class Url {
}

class AddressBookData {
  public Arn $address_book_arn;
  public AddressBookName $name;
  public AddressBookDescription $description;
}

class CurrentWiFiPassword {
}

class DeviceStatus {
}

class GetAddressBookRequest {
  public Arn $address_book_arn;
}

class ListSkillsResponse {
  public SkillSummaryList $skill_summaries;
  public NextToken $next_token;
}

class SendAnnouncementResponse {
  public Arn $announcement_arn;
}

class EndUserLicenseAgreement {
}

class PhoneNumberList {
}

class SkillSummary {
  public boolean $supports_linking;
  public EnablementType $enablement_type;
  public SkillType $skill_type;
  public SkillId $skill_id;
  public SkillName $skill_name;
}

class Sort {
  public SortKey $key;
  public SortValue $value;
}

class ConnectionStatus {
}

class DeviceEventValue {
}

class Timezone {
}

class DeviceLocale {
}

class GatewayGroupSummary {
  public Arn $arn;
  public GatewayGroupName $name;
  public GatewayGroupDescription $description;
}

class ListBusinessReportSchedulesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class ListSkillsStoreSkillsByCategoryRequest {
  public CategoryId $category_id;
  public NextToken $next_token;
  public SkillListMaxResults $max_results;
}

class UpdateContactRequest {
  public Arn $contact_arn;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;
}

class GatewayGroup {
  public Arn $arn;
  public GatewayGroupName $name;
  public GatewayGroupDescription $description;
}

class ConferenceProviderName {
}

class SsmlList {
}

