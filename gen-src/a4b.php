<?hh // strict
namespace slack\aws\a4b;

interface Alexa For Business {
  public function ApproveSkill(ApproveSkillRequest): Awaitable<Errors\Result<ApproveSkillResponse>>;
  public function AssociateContactWithAddressBook(AssociateContactWithAddressBookRequest): Awaitable<Errors\Result<AssociateContactWithAddressBookResponse>>;
  public function AssociateDeviceWithNetworkProfile(AssociateDeviceWithNetworkProfileRequest): Awaitable<Errors\Result<AssociateDeviceWithNetworkProfileResponse>>;
  public function AssociateDeviceWithRoom(AssociateDeviceWithRoomRequest): Awaitable<Errors\Result<AssociateDeviceWithRoomResponse>>;
  public function AssociateSkillGroupWithRoom(AssociateSkillGroupWithRoomRequest): Awaitable<Errors\Result<AssociateSkillGroupWithRoomResponse>>;
  public function AssociateSkillWithSkillGroup(AssociateSkillWithSkillGroupRequest): Awaitable<Errors\Result<AssociateSkillWithSkillGroupResponse>>;
  public function AssociateSkillWithUsers(AssociateSkillWithUsersRequest): Awaitable<Errors\Result<AssociateSkillWithUsersResponse>>;
  public function CreateAddressBook(CreateAddressBookRequest): Awaitable<Errors\Result<CreateAddressBookResponse>>;
  public function CreateBusinessReportSchedule(CreateBusinessReportScheduleRequest): Awaitable<Errors\Result<CreateBusinessReportScheduleResponse>>;
  public function CreateConferenceProvider(CreateConferenceProviderRequest): Awaitable<Errors\Result<CreateConferenceProviderResponse>>;
  public function CreateContact(CreateContactRequest): Awaitable<Errors\Result<CreateContactResponse>>;
  public function CreateGatewayGroup(CreateGatewayGroupRequest): Awaitable<Errors\Result<CreateGatewayGroupResponse>>;
  public function CreateNetworkProfile(CreateNetworkProfileRequest): Awaitable<Errors\Result<CreateNetworkProfileResponse>>;
  public function CreateProfile(CreateProfileRequest): Awaitable<Errors\Result<CreateProfileResponse>>;
  public function CreateRoom(CreateRoomRequest): Awaitable<Errors\Result<CreateRoomResponse>>;
  public function CreateSkillGroup(CreateSkillGroupRequest): Awaitable<Errors\Result<CreateSkillGroupResponse>>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeleteAddressBook(DeleteAddressBookRequest): Awaitable<Errors\Result<DeleteAddressBookResponse>>;
  public function DeleteBusinessReportSchedule(DeleteBusinessReportScheduleRequest): Awaitable<Errors\Result<DeleteBusinessReportScheduleResponse>>;
  public function DeleteConferenceProvider(DeleteConferenceProviderRequest): Awaitable<Errors\Result<DeleteConferenceProviderResponse>>;
  public function DeleteContact(DeleteContactRequest): Awaitable<Errors\Result<DeleteContactResponse>>;
  public function DeleteDevice(DeleteDeviceRequest): Awaitable<Errors\Result<DeleteDeviceResponse>>;
  public function DeleteDeviceUsageData(DeleteDeviceUsageDataRequest): Awaitable<Errors\Result<DeleteDeviceUsageDataResponse>>;
  public function DeleteGatewayGroup(DeleteGatewayGroupRequest): Awaitable<Errors\Result<DeleteGatewayGroupResponse>>;
  public function DeleteNetworkProfile(DeleteNetworkProfileRequest): Awaitable<Errors\Result<DeleteNetworkProfileResponse>>;
  public function DeleteProfile(DeleteProfileRequest): Awaitable<Errors\Result<DeleteProfileResponse>>;
  public function DeleteRoom(DeleteRoomRequest): Awaitable<Errors\Result<DeleteRoomResponse>>;
  public function DeleteRoomSkillParameter(DeleteRoomSkillParameterRequest): Awaitable<Errors\Result<DeleteRoomSkillParameterResponse>>;
  public function DeleteSkillAuthorization(DeleteSkillAuthorizationRequest): Awaitable<Errors\Result<DeleteSkillAuthorizationResponse>>;
  public function DeleteSkillGroup(DeleteSkillGroupRequest): Awaitable<Errors\Result<DeleteSkillGroupResponse>>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Result<DeleteUserResponse>>;
  public function DisassociateContactFromAddressBook(DisassociateContactFromAddressBookRequest): Awaitable<Errors\Result<DisassociateContactFromAddressBookResponse>>;
  public function DisassociateDeviceFromRoom(DisassociateDeviceFromRoomRequest): Awaitable<Errors\Result<DisassociateDeviceFromRoomResponse>>;
  public function DisassociateSkillFromSkillGroup(DisassociateSkillFromSkillGroupRequest): Awaitable<Errors\Result<DisassociateSkillFromSkillGroupResponse>>;
  public function DisassociateSkillFromUsers(DisassociateSkillFromUsersRequest): Awaitable<Errors\Result<DisassociateSkillFromUsersResponse>>;
  public function DisassociateSkillGroupFromRoom(DisassociateSkillGroupFromRoomRequest): Awaitable<Errors\Result<DisassociateSkillGroupFromRoomResponse>>;
  public function ForgetSmartHomeAppliances(ForgetSmartHomeAppliancesRequest): Awaitable<Errors\Result<ForgetSmartHomeAppliancesResponse>>;
  public function GetAddressBook(GetAddressBookRequest): Awaitable<Errors\Result<GetAddressBookResponse>>;
  public function GetConferencePreference(GetConferencePreferenceRequest): Awaitable<Errors\Result<GetConferencePreferenceResponse>>;
  public function GetConferenceProvider(GetConferenceProviderRequest): Awaitable<Errors\Result<GetConferenceProviderResponse>>;
  public function GetContact(GetContactRequest): Awaitable<Errors\Result<GetContactResponse>>;
  public function GetDevice(GetDeviceRequest): Awaitable<Errors\Result<GetDeviceResponse>>;
  public function GetGateway(GetGatewayRequest): Awaitable<Errors\Result<GetGatewayResponse>>;
  public function GetGatewayGroup(GetGatewayGroupRequest): Awaitable<Errors\Result<GetGatewayGroupResponse>>;
  public function GetInvitationConfiguration(GetInvitationConfigurationRequest): Awaitable<Errors\Result<GetInvitationConfigurationResponse>>;
  public function GetNetworkProfile(GetNetworkProfileRequest): Awaitable<Errors\Result<GetNetworkProfileResponse>>;
  public function GetProfile(GetProfileRequest): Awaitable<Errors\Result<GetProfileResponse>>;
  public function GetRoom(GetRoomRequest): Awaitable<Errors\Result<GetRoomResponse>>;
  public function GetRoomSkillParameter(GetRoomSkillParameterRequest): Awaitable<Errors\Result<GetRoomSkillParameterResponse>>;
  public function GetSkillGroup(GetSkillGroupRequest): Awaitable<Errors\Result<GetSkillGroupResponse>>;
  public function ListBusinessReportSchedules(ListBusinessReportSchedulesRequest): Awaitable<Errors\Result<ListBusinessReportSchedulesResponse>>;
  public function ListConferenceProviders(ListConferenceProvidersRequest): Awaitable<Errors\Result<ListConferenceProvidersResponse>>;
  public function ListDeviceEvents(ListDeviceEventsRequest): Awaitable<Errors\Result<ListDeviceEventsResponse>>;
  public function ListGatewayGroups(ListGatewayGroupsRequest): Awaitable<Errors\Result<ListGatewayGroupsResponse>>;
  public function ListGateways(ListGatewaysRequest): Awaitable<Errors\Result<ListGatewaysResponse>>;
  public function ListSkills(ListSkillsRequest): Awaitable<Errors\Result<ListSkillsResponse>>;
  public function ListSkillsStoreCategories(ListSkillsStoreCategoriesRequest): Awaitable<Errors\Result<ListSkillsStoreCategoriesResponse>>;
  public function ListSkillsStoreSkillsByCategory(ListSkillsStoreSkillsByCategoryRequest): Awaitable<Errors\Result<ListSkillsStoreSkillsByCategoryResponse>>;
  public function ListSmartHomeAppliances(ListSmartHomeAppliancesRequest): Awaitable<Errors\Result<ListSmartHomeAppliancesResponse>>;
  public function ListTags(ListTagsRequest): Awaitable<Errors\Result<ListTagsResponse>>;
  public function PutConferencePreference(PutConferencePreferenceRequest): Awaitable<Errors\Result<PutConferencePreferenceResponse>>;
  public function PutInvitationConfiguration(PutInvitationConfigurationRequest): Awaitable<Errors\Result<PutInvitationConfigurationResponse>>;
  public function PutRoomSkillParameter(PutRoomSkillParameterRequest): Awaitable<Errors\Result<PutRoomSkillParameterResponse>>;
  public function PutSkillAuthorization(PutSkillAuthorizationRequest): Awaitable<Errors\Result<PutSkillAuthorizationResponse>>;
  public function RegisterAVSDevice(RegisterAVSDeviceRequest): Awaitable<Errors\Result<RegisterAVSDeviceResponse>>;
  public function RejectSkill(RejectSkillRequest): Awaitable<Errors\Result<RejectSkillResponse>>;
  public function ResolveRoom(ResolveRoomRequest): Awaitable<Errors\Result<ResolveRoomResponse>>;
  public function RevokeInvitation(RevokeInvitationRequest): Awaitable<Errors\Result<RevokeInvitationResponse>>;
  public function SearchAddressBooks(SearchAddressBooksRequest): Awaitable<Errors\Result<SearchAddressBooksResponse>>;
  public function SearchContacts(SearchContactsRequest): Awaitable<Errors\Result<SearchContactsResponse>>;
  public function SearchDevices(SearchDevicesRequest): Awaitable<Errors\Result<SearchDevicesResponse>>;
  public function SearchNetworkProfiles(SearchNetworkProfilesRequest): Awaitable<Errors\Result<SearchNetworkProfilesResponse>>;
  public function SearchProfiles(SearchProfilesRequest): Awaitable<Errors\Result<SearchProfilesResponse>>;
  public function SearchRooms(SearchRoomsRequest): Awaitable<Errors\Result<SearchRoomsResponse>>;
  public function SearchSkillGroups(SearchSkillGroupsRequest): Awaitable<Errors\Result<SearchSkillGroupsResponse>>;
  public function SearchUsers(SearchUsersRequest): Awaitable<Errors\Result<SearchUsersResponse>>;
  public function SendAnnouncement(SendAnnouncementRequest): Awaitable<Errors\Result<SendAnnouncementResponse>>;
  public function SendInvitation(SendInvitationRequest): Awaitable<Errors\Result<SendInvitationResponse>>;
  public function StartDeviceSync(StartDeviceSyncRequest): Awaitable<Errors\Result<StartDeviceSyncResponse>>;
  public function StartSmartHomeApplianceDiscovery(StartSmartHomeApplianceDiscoveryRequest): Awaitable<Errors\Result<StartSmartHomeApplianceDiscoveryResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAddressBook(UpdateAddressBookRequest): Awaitable<Errors\Result<UpdateAddressBookResponse>>;
  public function UpdateBusinessReportSchedule(UpdateBusinessReportScheduleRequest): Awaitable<Errors\Result<UpdateBusinessReportScheduleResponse>>;
  public function UpdateConferenceProvider(UpdateConferenceProviderRequest): Awaitable<Errors\Result<UpdateConferenceProviderResponse>>;
  public function UpdateContact(UpdateContactRequest): Awaitable<Errors\Result<UpdateContactResponse>>;
  public function UpdateDevice(UpdateDeviceRequest): Awaitable<Errors\Result<UpdateDeviceResponse>>;
  public function UpdateGateway(UpdateGatewayRequest): Awaitable<Errors\Result<UpdateGatewayResponse>>;
  public function UpdateGatewayGroup(UpdateGatewayGroupRequest): Awaitable<Errors\Result<UpdateGatewayGroupResponse>>;
  public function UpdateNetworkProfile(UpdateNetworkProfileRequest): Awaitable<Errors\Result<UpdateNetworkProfileResponse>>;
  public function UpdateProfile(UpdateProfileRequest): Awaitable<Errors\Result<UpdateProfileResponse>>;
  public function UpdateRoom(UpdateRoomRequest): Awaitable<Errors\Result<UpdateRoomResponse>>;
  public function UpdateSkillGroup(UpdateSkillGroupRequest): Awaitable<Errors\Result<UpdateSkillGroupResponse>>;
}

class Address {
}

class AddressBook {
  public Arn $address_book_arn;
  public AddressBookDescription $description;
  public AddressBookName $name;
}

class AddressBookData {
  public Arn $address_book_arn;
  public AddressBookDescription $description;
  public AddressBookName $name;
}

class AddressBookDataList {
}

class AddressBookDescription {
}

class AddressBookName {
}

class AlreadyExistsException {
  public ErrorMessage $message;
}

class AmazonId {
}

class ApplianceDescription {
}

class ApplianceFriendlyName {
}

class ApplianceManufacturerName {
}

class ApproveSkillRequest {
  public SkillId $skill_id;
}

class ApproveSkillResponse {
}

class Arn {
}

class AssociateContactWithAddressBookRequest {
  public Arn $address_book_arn;
  public Arn $contact_arn;
}

class AssociateContactWithAddressBookResponse {
}

class AssociateDeviceWithNetworkProfileRequest {
  public Arn $device_arn;
  public Arn $network_profile_arn;
}

class AssociateDeviceWithNetworkProfileResponse {
}

class AssociateDeviceWithRoomRequest {
  public Arn $device_arn;
  public Arn $room_arn;
}

class AssociateDeviceWithRoomResponse {
}

class AssociateSkillGroupWithRoomRequest {
  public Arn $room_arn;
  public Arn $skill_group_arn;
}

class AssociateSkillGroupWithRoomResponse {
}

class AssociateSkillWithSkillGroupRequest {
  public Arn $skill_group_arn;
  public SkillId $skill_id;
}

class AssociateSkillWithSkillGroupResponse {
}

class AssociateSkillWithUsersRequest {
  public SkillId $skill_id;
}

class AssociateSkillWithUsersResponse {
}

class Audio {
  public Locale $locale;
  public AudioLocation $location;
}

class AudioList {
}

class AudioLocation {
}

class AuthorizationResult {
}

class Boolean {
}

class BulletPoint {
}

class BulletPoints {
}

class BusinessReport {
  public BusinessReportDeliveryTime $delivery_time;
  public BusinessReportDownloadUrl $download_url;
  public BusinessReportFailureCode $failure_code;
  public BusinessReportS3Location $s_3_location;
  public BusinessReportStatus $status;
}

class BusinessReportContentRange {
  public BusinessReportInterval $interval;
}

class BusinessReportDeliveryTime {
}

class BusinessReportDownloadUrl {
}

class BusinessReportFailureCode {
}

class BusinessReportFormat {
}

class BusinessReportInterval {
}

class BusinessReportRecurrence {
  public Date $start_date;
}

class BusinessReportS3Location {
  public CustomerS3BucketName $bucket_name;
  public BusinessReportS3Path $path;
}

class BusinessReportS3Path {
}

class BusinessReportSchedule {
  public BusinessReportContentRange $content_range;
  public BusinessReportFormat $format;
  public BusinessReport $last_business_report;
  public BusinessReportRecurrence $recurrence;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public Arn $schedule_arn;
  public BusinessReportScheduleName $schedule_name;
}

class BusinessReportScheduleList {
}

class BusinessReportScheduleName {
}

class BusinessReportStatus {
}

class Category {
  public CategoryId $category_id;
  public CategoryName $category_name;
}

class CategoryId {
}

class CategoryList {
}

class CategoryName {
}

class CertificateTime {
}

class ClientId {
}

class ClientRequestToken {
}

class CommsProtocol {
}

class ConcurrentModificationException {
  public ErrorMessage $message;
}

class ConferencePreference {
  public Arn $default_conference_provider_arn;
}

class ConferenceProvider {
  public Arn $arn;
  public IPDialIn $ip_dial_in;
  public MeetingSetting $meeting_setting;
  public ConferenceProviderName $name;
  public PSTNDialIn $pstn_dial_in;
  public ConferenceProviderType $type;
}

class ConferenceProviderName {
}

class ConferenceProviderType {
}

class ConferenceProvidersList {
}

class ConnectionStatus {
}

class ConnectionStatusUpdatedTime {
}

class Contact {
  public Arn $contact_arn;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;
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

class ContactDataList {
}

class ContactName {
}

class Content {
  public AudioList $audio_list;
  public SsmlList $ssml_list;
  public TextList $text_list;
}

class CountryCode {
}

class CreateAddressBookRequest {
  public ClientRequestToken $client_request_token;
  public AddressBookDescription $description;
  public AddressBookName $name;
}

class CreateAddressBookResponse {
  public Arn $address_book_arn;
}

class CreateBusinessReportScheduleRequest {
  public ClientRequestToken $client_request_token;
  public BusinessReportContentRange $content_range;
  public BusinessReportFormat $format;
  public BusinessReportRecurrence $recurrence;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public BusinessReportScheduleName $schedule_name;
}

class CreateBusinessReportScheduleResponse {
  public Arn $schedule_arn;
}

class CreateConferenceProviderRequest {
  public ClientRequestToken $client_request_token;
  public ConferenceProviderName $conference_provider_name;
  public ConferenceProviderType $conference_provider_type;
  public IPDialIn $ip_dial_in;
  public MeetingSetting $meeting_setting;
  public PSTNDialIn $pstn_dial_in;
}

class CreateConferenceProviderResponse {
  public Arn $conference_provider_arn;
}

class CreateContactRequest {
  public ClientRequestToken $client_request_token;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;
}

class CreateContactResponse {
  public Arn $contact_arn;
}

class CreateEndOfMeetingReminder {
  public boolean $enabled;
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;
}

class CreateGatewayGroupRequest {
  public ClientRequestToken $client_request_token;
  public GatewayGroupDescription $description;
  public GatewayGroupName $name;
}

class CreateGatewayGroupResponse {
  public Arn $gateway_group_arn;
}

class CreateInstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;
}

class CreateMeetingRoomConfiguration {
  public CreateEndOfMeetingReminder $end_of_meeting_reminder;
  public CreateInstantBooking $instant_booking;
  public CreateRequireCheckIn $require_check_in;
  public boolean $room_utilization_metrics_enabled;
}

class CreateNetworkProfileRequest {
  public Arn $certificate_authority_arn;
  public ClientRequestToken $client_request_token;
  public CurrentWiFiPassword $current_password;
  public NetworkProfileDescription $description;
  public NetworkEapMethod $eap_method;
  public NetworkProfileName $network_profile_name;
  public NextWiFiPassword $next_password;
  public NetworkSecurityType $security_type;
  public NetworkSsid $ssid;
  public TrustAnchorList $trust_anchors;
}

class CreateNetworkProfileResponse {
  public Arn $network_profile_arn;
}

class CreateProfileRequest {
  public Address $address;
  public ClientRequestToken $client_request_token;
  public DistanceUnit $distance_unit;
  public DeviceLocale $locale;
  public MaxVolumeLimit $max_volume_limit;
  public CreateMeetingRoomConfiguration $meeting_room_configuration;
  public boolean $pstn_enabled;
  public ProfileName $profile_name;
  public boolean $setup_mode_disabled;
  public TemperatureUnit $temperature_unit;
  public Timezone $timezone;
  public WakeWord $wake_word;
}

class CreateProfileResponse {
  public Arn $profile_arn;
}

class CreateRequireCheckIn {
  public boolean $enabled;
  public Minutes $release_after_minutes;
}

class CreateRoomRequest {
  public ClientRequestToken $client_request_token;
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProviderCalendarId $provider_calendar_id;
  public RoomName $room_name;
  public TagList $tags;
}

class CreateRoomResponse {
  public Arn $room_arn;
}

class CreateSkillGroupRequest {
  public ClientRequestToken $client_request_token;
  public SkillGroupDescription $description;
  public SkillGroupName $skill_group_name;
}

class CreateSkillGroupResponse {
  public Arn $skill_group_arn;
}

class CreateUserRequest {
  public ClientRequestToken $client_request_token;
  public Email $email;
  public user_FirstName $first_name;
  public user_LastName $last_name;
  public TagList $tags;
  public user_UserId $user_id;
}

class CreateUserResponse {
  public Arn $user_arn;
}

class CurrentWiFiPassword {
}

class CustomerS3BucketName {
}

class Date {
}

class DeleteAddressBookRequest {
  public Arn $address_book_arn;
}

class DeleteAddressBookResponse {
}

class DeleteBusinessReportScheduleRequest {
  public Arn $schedule_arn;
}

class DeleteBusinessReportScheduleResponse {
}

class DeleteConferenceProviderRequest {
  public Arn $conference_provider_arn;
}

class DeleteConferenceProviderResponse {
}

class DeleteContactRequest {
  public Arn $contact_arn;
}

class DeleteContactResponse {
}

class DeleteDeviceRequest {
  public Arn $device_arn;
}

class DeleteDeviceResponse {
}

class DeleteDeviceUsageDataRequest {
  public Arn $device_arn;
  public DeviceUsageType $device_usage_type;
}

class DeleteDeviceUsageDataResponse {
}

class DeleteGatewayGroupRequest {
  public Arn $gateway_group_arn;
}

class DeleteGatewayGroupResponse {
}

class DeleteNetworkProfileRequest {
  public Arn $network_profile_arn;
}

class DeleteNetworkProfileResponse {
}

class DeleteProfileRequest {
  public Arn $profile_arn;
}

class DeleteProfileResponse {
}

class DeleteRoomRequest {
  public Arn $room_arn;
}

class DeleteRoomResponse {
}

class DeleteRoomSkillParameterRequest {
  public RoomSkillParameterKey $parameter_key;
  public Arn $room_arn;
  public SkillId $skill_id;
}

class DeleteRoomSkillParameterResponse {
}

class DeleteSkillAuthorizationRequest {
  public Arn $room_arn;
  public SkillId $skill_id;
}

class DeleteSkillAuthorizationResponse {
}

class DeleteSkillGroupRequest {
  public Arn $skill_group_arn;
}

class DeleteSkillGroupResponse {
}

class DeleteUserRequest {
  public EnrollmentId $enrollment_id;
  public Arn $user_arn;
}

class DeleteUserResponse {
}

class DeveloperInfo {
  public DeveloperName $developer_name;
  public Email $email;
  public PrivacyPolicy $privacy_policy;
  public Url $url;
}

class DeveloperName {
}

class Device {
  public Arn $device_arn;
  public DeviceName $device_name;
  public DeviceSerialNumber $device_serial_number;
  public DeviceStatus $device_status;
  public DeviceStatusInfo $device_status_info;
  public DeviceType $device_type;
  public MacAddress $mac_address;
  public DeviceNetworkProfileInfo $network_profile_info;
  public Arn $room_arn;
  public SoftwareVersion $software_version;
}

class DeviceData {
  public DeviceDataCreatedTime $created_time;
  public Arn $device_arn;
  public DeviceName $device_name;
  public DeviceSerialNumber $device_serial_number;
  public DeviceStatus $device_status;
  public DeviceStatusInfo $device_status_info;
  public DeviceType $device_type;
  public MacAddress $mac_address;
  public Arn $network_profile_arn;
  public NetworkProfileName $network_profile_name;
  public Arn $room_arn;
  public RoomName $room_name;
  public SoftwareVersion $software_version;
}

class DeviceDataCreatedTime {
}

class DeviceDataList {
}

class DeviceEvent {
  public DeviceEventTime $timestamp;
  public DeviceEventType $type;
  public DeviceEventValue $value;
}

class DeviceEventList {
}

class DeviceEventTime {
}

class DeviceEventType {
}

class DeviceEventValue {
}

class DeviceLocale {
}

class DeviceName {
}

class DeviceNetworkProfileInfo {
  public Arn $certificate_arn;
  public CertificateTime $certificate_expiration_time;
  public Arn $network_profile_arn;
}

class DeviceNotRegisteredException {
  public ErrorMessage $message;
}

class DeviceSerialNumber {
}

class DeviceSerialNumberForAVS {
}

class DeviceStatus {
}

class DeviceStatusDetail {
  public DeviceStatusDetailCode $code;
  public Feature $feature;
}

class DeviceStatusDetailCode {
}

class DeviceStatusDetails {
}

class DeviceStatusInfo {
  public ConnectionStatus $connection_status;
  public ConnectionStatusUpdatedTime $connection_status_updated_time;
  public DeviceStatusDetails $device_status_details;
}

class DeviceType {
}

class DeviceUsageType {
}

class DisassociateContactFromAddressBookRequest {
  public Arn $address_book_arn;
  public Arn $contact_arn;
}

class DisassociateContactFromAddressBookResponse {
}

class DisassociateDeviceFromRoomRequest {
  public Arn $device_arn;
}

class DisassociateDeviceFromRoomResponse {
}

class DisassociateSkillFromSkillGroupRequest {
  public Arn $skill_group_arn;
  public SkillId $skill_id;
}

class DisassociateSkillFromSkillGroupResponse {
}

class DisassociateSkillFromUsersRequest {
  public SkillId $skill_id;
}

class DisassociateSkillFromUsersResponse {
}

class DisassociateSkillGroupFromRoomRequest {
  public Arn $room_arn;
  public Arn $skill_group_arn;
}

class DisassociateSkillGroupFromRoomResponse {
}

class DistanceUnit {
}

class Email {
}

class EnablementType {
}

class EnablementTypeFilter {
}

class EndOfMeetingReminder {
  public boolean $enabled;
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;
}

class EndOfMeetingReminderMinutesList {
}

class EndOfMeetingReminderType {
}

class EndUserLicenseAgreement {
}

class Endpoint {
}

class EnrollmentId {
}

class EnrollmentStatus {
}

class ErrorMessage {
}

class Feature {
}

class Features {
}

class Filter {
  public FilterKey $key;
  public FilterValueList $values;
}

class FilterKey {
}

class FilterList {
}

class FilterValue {
}

class FilterValueList {
}

class ForgetSmartHomeAppliancesRequest {
  public Arn $room_arn;
}

class ForgetSmartHomeAppliancesResponse {
}

class Gateway {
  public Arn $arn;
  public GatewayDescription $description;
  public Arn $gateway_group_arn;
  public GatewayName $name;
  public GatewayVersion $software_version;
}

class GatewayDescription {
}

class GatewayGroup {
  public Arn $arn;
  public GatewayGroupDescription $description;
  public GatewayGroupName $name;
}

class GatewayGroupDescription {
}

class GatewayGroupName {
}

class GatewayGroupSummaries {
}

class GatewayGroupSummary {
  public Arn $arn;
  public GatewayGroupDescription $description;
  public GatewayGroupName $name;
}

class GatewayName {
}

class GatewaySummaries {
}

class GatewaySummary {
  public Arn $arn;
  public GatewayDescription $description;
  public Arn $gateway_group_arn;
  public GatewayName $name;
  public GatewayVersion $software_version;
}

class GatewayVersion {
}

class GenericKeyword {
}

class GenericKeywords {
}

class GetAddressBookRequest {
  public Arn $address_book_arn;
}

class GetAddressBookResponse {
  public AddressBook $address_book;
}

class GetConferencePreferenceRequest {
}

class GetConferencePreferenceResponse {
  public ConferencePreference $preference;
}

class GetConferenceProviderRequest {
  public Arn $conference_provider_arn;
}

class GetConferenceProviderResponse {
  public ConferenceProvider $conference_provider;
}

class GetContactRequest {
  public Arn $contact_arn;
}

class GetContactResponse {
  public Contact $contact;
}

class GetDeviceRequest {
  public Arn $device_arn;
}

class GetDeviceResponse {
  public Device $device;
}

class GetGatewayGroupRequest {
  public Arn $gateway_group_arn;
}

class GetGatewayGroupResponse {
  public GatewayGroup $gateway_group;
}

class GetGatewayRequest {
  public Arn $gateway_arn;
}

class GetGatewayResponse {
  public Gateway $gateway;
}

class GetInvitationConfigurationRequest {
}

class GetInvitationConfigurationResponse {
  public Email $contact_email;
  public OrganizationName $organization_name;
  public ShortSkillIdList $private_skill_ids;
}

class GetNetworkProfileRequest {
  public Arn $network_profile_arn;
}

class GetNetworkProfileResponse {
  public NetworkProfile $network_profile;
}

class GetProfileRequest {
  public Arn $profile_arn;
}

class GetProfileResponse {
  public Profile $profile;
}

class GetRoomRequest {
  public Arn $room_arn;
}

class GetRoomResponse {
  public Room $room;
}

class GetRoomSkillParameterRequest {
  public RoomSkillParameterKey $parameter_key;
  public Arn $room_arn;
  public SkillId $skill_id;
}

class GetRoomSkillParameterResponse {
  public RoomSkillParameter $room_skill_parameter;
}

class GetSkillGroupRequest {
  public Arn $skill_group_arn;
}

class GetSkillGroupResponse {
  public SkillGroup $skill_group;
}

class IPDialIn {
  public CommsProtocol $comms_protocol;
  public Endpoint $endpoint;
}

class IconUrl {
}

class InstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;
}

class InvalidCertificateAuthorityException {
  public ErrorMessage $message;
}

class InvalidDeviceException {
  public ErrorMessage $message;
}

class InvalidSecretsManagerResourceException {
  public ErrorMessage $message;
}

class InvalidServiceLinkedRoleStateException {
  public ErrorMessage $message;
}

class InvalidUserStatusException {
  public ErrorMessage $message;
}

class InvocationPhrase {
}

class Key {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListBusinessReportSchedulesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListBusinessReportSchedulesResponse {
  public BusinessReportScheduleList $business_report_schedules;
  public NextToken $next_token;
}

class ListConferenceProvidersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListConferenceProvidersResponse {
  public ConferenceProvidersList $conference_providers;
  public NextToken $next_token;
}

class ListDeviceEventsRequest {
  public Arn $device_arn;
  public DeviceEventType $event_type;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDeviceEventsResponse {
  public DeviceEventList $device_events;
  public NextToken $next_token;
}

class ListGatewayGroupsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListGatewayGroupsResponse {
  public GatewayGroupSummaries $gateway_groups;
  public NextToken $next_token;
}

class ListGatewaysRequest {
  public Arn $gateway_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListGatewaysResponse {
  public GatewaySummaries $gateways;
  public NextToken $next_token;
}

class ListSkillsRequest {
  public EnablementTypeFilter $enablement_type;
  public SkillListMaxResults $max_results;
  public NextToken $next_token;
  public Arn $skill_group_arn;
  public SkillTypeFilter $skill_type;
}

class ListSkillsResponse {
  public NextToken $next_token;
  public SkillSummaryList $skill_summaries;
}

class ListSkillsStoreCategoriesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListSkillsStoreCategoriesResponse {
  public CategoryList $category_list;
  public NextToken $next_token;
}

class ListSkillsStoreSkillsByCategoryRequest {
  public CategoryId $category_id;
  public SkillListMaxResults $max_results;
  public NextToken $next_token;
}

class ListSkillsStoreSkillsByCategoryResponse {
  public NextToken $next_token;
  public SkillsStoreSkillList $skills_store_skills;
}

class ListSmartHomeAppliancesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $room_arn;
}

class ListSmartHomeAppliancesResponse {
  public NextToken $next_token;
  public SmartHomeApplianceList $smart_home_appliances;
}

class ListTagsRequest {
  public Arn $arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListTagsResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class Locale {
}

class MacAddress {
}

class MaxResults {
}

class MaxVolumeLimit {
}

class MeetingRoomConfiguration {
  public EndOfMeetingReminder $end_of_meeting_reminder;
  public InstantBooking $instant_booking;
  public RequireCheckIn $require_check_in;
  public boolean $room_utilization_metrics_enabled;
}

class MeetingSetting {
  public RequirePin $require_pin;
}

class Minutes {
}

class NameInUseException {
  public ErrorMessage $message;
}

class NetworkEapMethod {
}

class NetworkProfile {
  public Arn $certificate_authority_arn;
  public CurrentWiFiPassword $current_password;
  public NetworkProfileDescription $description;
  public NetworkEapMethod $eap_method;
  public Arn $network_profile_arn;
  public NetworkProfileName $network_profile_name;
  public NextWiFiPassword $next_password;
  public NetworkSecurityType $security_type;
  public NetworkSsid $ssid;
  public TrustAnchorList $trust_anchors;
}

class NetworkProfileData {
  public Arn $certificate_authority_arn;
  public NetworkProfileDescription $description;
  public NetworkEapMethod $eap_method;
  public Arn $network_profile_arn;
  public NetworkProfileName $network_profile_name;
  public NetworkSecurityType $security_type;
  public NetworkSsid $ssid;
}

class NetworkProfileDataList {
}

class NetworkProfileDescription {
}

class NetworkProfileName {
}

class NetworkSecurityType {
}

class NetworkSsid {
}

class NewInThisVersionBulletPoints {
}

class NextToken {
}

class NextWiFiPassword {
}

class NotFoundException {
  public ErrorMessage $message;
}

class OneClickIdDelay {
}

class OneClickPinDelay {
}

class OrganizationName {
}

class OutboundPhoneNumber {
}

class PSTNDialIn {
  public CountryCode $country_code;
  public OneClickIdDelay $one_click_id_delay;
  public OneClickPinDelay $one_click_pin_delay;
  public OutboundPhoneNumber $phone_number;
}

class PhoneNumber {
  public RawPhoneNumber $number;
  public PhoneNumberType $type;
}

class PhoneNumberList {
}

class PhoneNumberType {
}

class PrivacyPolicy {
}

class ProductDescription {
}

class ProductId {
}

class Profile {
  public Address $address;
  public Arn $address_book_arn;
  public DistanceUnit $distance_unit;
  public boolean $is_default;
  public DeviceLocale $locale;
  public MaxVolumeLimit $max_volume_limit;
  public MeetingRoomConfiguration $meeting_room_configuration;
  public boolean $pstn_enabled;
  public Arn $profile_arn;
  public ProfileName $profile_name;
  public boolean $setup_mode_disabled;
  public TemperatureUnit $temperature_unit;
  public Timezone $timezone;
  public WakeWord $wake_word;
}

class ProfileData {
  public Address $address;
  public DistanceUnit $distance_unit;
  public boolean $is_default;
  public DeviceLocale $locale;
  public Arn $profile_arn;
  public ProfileName $profile_name;
  public TemperatureUnit $temperature_unit;
  public Timezone $timezone;
  public WakeWord $wake_word;
}

class ProfileDataList {
}

class ProfileName {
}

class ProviderCalendarId {
}

class PutConferencePreferenceRequest {
  public ConferencePreference $conference_preference;
}

class PutConferencePreferenceResponse {
}

class PutInvitationConfigurationRequest {
  public Email $contact_email;
  public OrganizationName $organization_name;
  public ShortSkillIdList $private_skill_ids;
}

class PutInvitationConfigurationResponse {
}

class PutRoomSkillParameterRequest {
  public Arn $room_arn;
  public RoomSkillParameter $room_skill_parameter;
  public SkillId $skill_id;
}

class PutRoomSkillParameterResponse {
}

class PutSkillAuthorizationRequest {
  public AuthorizationResult $authorization_result;
  public Arn $room_arn;
  public SkillId $skill_id;
}

class PutSkillAuthorizationResponse {
}

class RawPhoneNumber {
}

class RegisterAVSDeviceRequest {
  public AmazonId $amazon_id;
  public ClientId $client_id;
  public DeviceSerialNumberForAVS $device_serial_number;
  public ProductId $product_id;
  public UserCode $user_code;
}

class RegisterAVSDeviceResponse {
  public Arn $device_arn;
}

class RejectSkillRequest {
  public SkillId $skill_id;
}

class RejectSkillResponse {
}

class ReleaseDate {
}

class RequireCheckIn {
  public boolean $enabled;
  public Minutes $release_after_minutes;
}

class RequirePin {
}

class ResolveRoomRequest {
  public SkillId $skill_id;
  public UserId $user_id;
}

class ResolveRoomResponse {
  public Arn $room_arn;
  public RoomName $room_name;
  public RoomSkillParameters $room_skill_parameters;
}

class ResourceAssociatedException {
  public ErrorMessage $message;
}

class ResourceInUseException {
  public ClientRequestToken $client_request_token;
  public ErrorMessage $message;
}

class ReviewKey {
}

class ReviewValue {
}

class Reviews {
}

class RevokeInvitationRequest {
  public EnrollmentId $enrollment_id;
  public Arn $user_arn;
}

class RevokeInvitationResponse {
}

class Room {
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $room_arn;
  public RoomName $room_name;
}

class RoomData {
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProfileName $profile_name;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $room_arn;
  public RoomName $room_name;
}

class RoomDataList {
}

class RoomDescription {
}

class RoomName {
}

class RoomSkillParameter {
  public RoomSkillParameterKey $parameter_key;
  public RoomSkillParameterValue $parameter_value;
}

class RoomSkillParameterKey {
}

class RoomSkillParameterValue {
}

class RoomSkillParameters {
}

class S3KeyPrefix {
}

class SampleUtterances {
}

class SearchAddressBooksRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchAddressBooksResponse {
  public AddressBookDataList $address_books;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class SearchContactsRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchContactsResponse {
  public ContactDataList $contacts;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class SearchDevicesRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchDevicesResponse {
  public DeviceDataList $devices;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class SearchNetworkProfilesRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchNetworkProfilesResponse {
  public NetworkProfileDataList $network_profiles;
  public NextToken $next_token;
  public TotalCount $total_count;
}

class SearchProfilesRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchProfilesResponse {
  public NextToken $next_token;
  public ProfileDataList $profiles;
  public TotalCount $total_count;
}

class SearchRoomsRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchRoomsResponse {
  public NextToken $next_token;
  public RoomDataList $rooms;
  public TotalCount $total_count;
}

class SearchSkillGroupsRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchSkillGroupsResponse {
  public NextToken $next_token;
  public SkillGroupDataList $skill_groups;
  public TotalCount $total_count;
}

class SearchUsersRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;
}

class SearchUsersResponse {
  public NextToken $next_token;
  public TotalCount $total_count;
  public UserDataList $users;
}

class SendAnnouncementRequest {
  public ClientRequestToken $client_request_token;
  public Content $content;
  public FilterList $room_filters;
  public TimeToLiveInSeconds $time_to_live_in_seconds;
}

class SendAnnouncementResponse {
  public Arn $announcement_arn;
}

class SendInvitationRequest {
  public Arn $user_arn;
}

class SendInvitationResponse {
}

class ShortDescription {
}

class ShortSkillIdList {
}

class SipAddress {
  public SipType $type;
  public SipUri $uri;
}

class SipAddressList {
}

class SipType {
}

class SipUri {
}

class SkillDetails {
  public BulletPoints $bullet_points;
  public DeveloperInfo $developer_info;
  public EndUserLicenseAgreement $end_user_license_agreement;
  public GenericKeywords $generic_keywords;
  public InvocationPhrase $invocation_phrase;
  public NewInThisVersionBulletPoints $new_in_this_version_bullet_points;
  public ProductDescription $product_description;
  public ReleaseDate $release_date;
  public Reviews $reviews;
  public SkillTypes $skill_types;
}

class SkillGroup {
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;
}

class SkillGroupData {
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;
}

class SkillGroupDataList {
}

class SkillGroupDescription {
}

class SkillGroupName {
}

class SkillId {
}

class SkillListMaxResults {
}

class SkillName {
}

class SkillNotLinkedException {
  public ErrorMessage $message;
}

class SkillStoreType {
}

class SkillSummary {
  public EnablementType $enablement_type;
  public SkillId $skill_id;
  public SkillName $skill_name;
  public SkillType $skill_type;
  public boolean $supports_linking;
}

class SkillSummaryList {
}

class SkillType {
}

class SkillTypeFilter {
}

class SkillTypes {
}

class SkillsStoreSkill {
  public IconUrl $icon_url;
  public SampleUtterances $sample_utterances;
  public ShortDescription $short_description;
  public SkillDetails $skill_details;
  public SkillId $skill_id;
  public SkillName $skill_name;
  public boolean $supports_linking;
}

class SkillsStoreSkillList {
}

class SmartHomeAppliance {
  public ApplianceDescription $description;
  public ApplianceFriendlyName $friendly_name;
  public ApplianceManufacturerName $manufacturer_name;
}

class SmartHomeApplianceList {
}

class SoftwareVersion {
}

class Sort {
  public SortKey $key;
  public SortValue $value;
}

class SortKey {
}

class SortList {
}

class SortValue {
}

class Ssml {
  public Locale $locale;
  public SsmlValue $value;
}

class SsmlList {
}

class SsmlValue {
}

class StartDeviceSyncRequest {
  public Arn $device_arn;
  public Features $features;
  public Arn $room_arn;
}

class StartDeviceSyncResponse {
}

class StartSmartHomeApplianceDiscoveryRequest {
  public Arn $room_arn;
}

class StartSmartHomeApplianceDiscoveryResponse {
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

class TagResourceRequest {
  public Arn $arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TemperatureUnit {
}

class Text {
  public Locale $locale;
  public TextValue $value;
}

class TextList {
}

class TextValue {
}

class TimeToLiveInSeconds {
}

class Timezone {
}

class TotalCount {
}

class TrustAnchor {
}

class TrustAnchorList {
}

class UnauthorizedException {
  public ErrorMessage $message;
}

class UntagResourceRequest {
  public Arn $arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateAddressBookRequest {
  public Arn $address_book_arn;
  public AddressBookDescription $description;
  public AddressBookName $name;
}

class UpdateAddressBookResponse {
}

class UpdateBusinessReportScheduleRequest {
  public BusinessReportFormat $format;
  public BusinessReportRecurrence $recurrence;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public Arn $schedule_arn;
  public BusinessReportScheduleName $schedule_name;
}

class UpdateBusinessReportScheduleResponse {
}

class UpdateConferenceProviderRequest {
  public Arn $conference_provider_arn;
  public ConferenceProviderType $conference_provider_type;
  public IPDialIn $ip_dial_in;
  public MeetingSetting $meeting_setting;
  public PSTNDialIn $pstn_dial_in;
}

class UpdateConferenceProviderResponse {
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

class UpdateContactResponse {
}

class UpdateDeviceRequest {
  public Arn $device_arn;
  public DeviceName $device_name;
}

class UpdateDeviceResponse {
}

class UpdateEndOfMeetingReminder {
  public boolean $enabled;
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;
}

class UpdateGatewayGroupRequest {
  public GatewayGroupDescription $description;
  public Arn $gateway_group_arn;
  public GatewayGroupName $name;
}

class UpdateGatewayGroupResponse {
}

class UpdateGatewayRequest {
  public GatewayDescription $description;
  public Arn $gateway_arn;
  public GatewayName $name;
  public GatewayVersion $software_version;
}

class UpdateGatewayResponse {
}

class UpdateInstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;
}

class UpdateMeetingRoomConfiguration {
  public UpdateEndOfMeetingReminder $end_of_meeting_reminder;
  public UpdateInstantBooking $instant_booking;
  public UpdateRequireCheckIn $require_check_in;
  public boolean $room_utilization_metrics_enabled;
}

class UpdateNetworkProfileRequest {
  public Arn $certificate_authority_arn;
  public CurrentWiFiPassword $current_password;
  public NetworkProfileDescription $description;
  public Arn $network_profile_arn;
  public NetworkProfileName $network_profile_name;
  public NextWiFiPassword $next_password;
  public TrustAnchorList $trust_anchors;
}

class UpdateNetworkProfileResponse {
}

class UpdateProfileRequest {
  public Address $address;
  public DistanceUnit $distance_unit;
  public boolean $is_default;
  public DeviceLocale $locale;
  public MaxVolumeLimit $max_volume_limit;
  public UpdateMeetingRoomConfiguration $meeting_room_configuration;
  public boolean $pstn_enabled;
  public Arn $profile_arn;
  public ProfileName $profile_name;
  public boolean $setup_mode_disabled;
  public TemperatureUnit $temperature_unit;
  public Timezone $timezone;
  public WakeWord $wake_word;
}

class UpdateProfileResponse {
}

class UpdateRequireCheckIn {
  public boolean $enabled;
  public Minutes $release_after_minutes;
}

class UpdateRoomRequest {
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $room_arn;
  public RoomName $room_name;
}

class UpdateRoomResponse {
}

class UpdateSkillGroupRequest {
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;
}

class UpdateSkillGroupResponse {
}

class Url {
}

class UserCode {
}

class UserData {
  public Email $email;
  public EnrollmentId $enrollment_id;
  public EnrollmentStatus $enrollment_status;
  public user_FirstName $first_name;
  public user_LastName $last_name;
  public Arn $user_arn;
}

class UserDataList {
}

class UserId {
}

class Utterance {
}

class Value {
}

class WakeWord {
}

class boolean {
}

class user_FirstName {
}

class user_LastName {
}

class user_UserId {
}

