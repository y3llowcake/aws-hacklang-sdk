<?hh // strict
namespace slack\aws\a4b;

interface AlexaForBusiness {
  public function ApproveSkill(ApproveSkillRequest $in): Awaitable<\Errors\Result<ApproveSkillResponse>>;
  public function AssociateContactWithAddressBook(AssociateContactWithAddressBookRequest $in): Awaitable<\Errors\Result<AssociateContactWithAddressBookResponse>>;
  public function AssociateDeviceWithNetworkProfile(AssociateDeviceWithNetworkProfileRequest $in): Awaitable<\Errors\Result<AssociateDeviceWithNetworkProfileResponse>>;
  public function AssociateDeviceWithRoom(AssociateDeviceWithRoomRequest $in): Awaitable<\Errors\Result<AssociateDeviceWithRoomResponse>>;
  public function AssociateSkillGroupWithRoom(AssociateSkillGroupWithRoomRequest $in): Awaitable<\Errors\Result<AssociateSkillGroupWithRoomResponse>>;
  public function AssociateSkillWithSkillGroup(AssociateSkillWithSkillGroupRequest $in): Awaitable<\Errors\Result<AssociateSkillWithSkillGroupResponse>>;
  public function AssociateSkillWithUsers(AssociateSkillWithUsersRequest $in): Awaitable<\Errors\Result<AssociateSkillWithUsersResponse>>;
  public function CreateAddressBook(CreateAddressBookRequest $in): Awaitable<\Errors\Result<CreateAddressBookResponse>>;
  public function CreateBusinessReportSchedule(CreateBusinessReportScheduleRequest $in): Awaitable<\Errors\Result<CreateBusinessReportScheduleResponse>>;
  public function CreateConferenceProvider(CreateConferenceProviderRequest $in): Awaitable<\Errors\Result<CreateConferenceProviderResponse>>;
  public function CreateContact(CreateContactRequest $in): Awaitable<\Errors\Result<CreateContactResponse>>;
  public function CreateGatewayGroup(CreateGatewayGroupRequest $in): Awaitable<\Errors\Result<CreateGatewayGroupResponse>>;
  public function CreateNetworkProfile(CreateNetworkProfileRequest $in): Awaitable<\Errors\Result<CreateNetworkProfileResponse>>;
  public function CreateProfile(CreateProfileRequest $in): Awaitable<\Errors\Result<CreateProfileResponse>>;
  public function CreateRoom(CreateRoomRequest $in): Awaitable<\Errors\Result<CreateRoomResponse>>;
  public function CreateSkillGroup(CreateSkillGroupRequest $in): Awaitable<\Errors\Result<CreateSkillGroupResponse>>;
  public function CreateUser(CreateUserRequest $in): Awaitable<\Errors\Result<CreateUserResponse>>;
  public function DeleteAddressBook(DeleteAddressBookRequest $in): Awaitable<\Errors\Result<DeleteAddressBookResponse>>;
  public function DeleteBusinessReportSchedule(DeleteBusinessReportScheduleRequest $in): Awaitable<\Errors\Result<DeleteBusinessReportScheduleResponse>>;
  public function DeleteConferenceProvider(DeleteConferenceProviderRequest $in): Awaitable<\Errors\Result<DeleteConferenceProviderResponse>>;
  public function DeleteContact(DeleteContactRequest $in): Awaitable<\Errors\Result<DeleteContactResponse>>;
  public function DeleteDevice(DeleteDeviceRequest $in): Awaitable<\Errors\Result<DeleteDeviceResponse>>;
  public function DeleteDeviceUsageData(DeleteDeviceUsageDataRequest $in): Awaitable<\Errors\Result<DeleteDeviceUsageDataResponse>>;
  public function DeleteGatewayGroup(DeleteGatewayGroupRequest $in): Awaitable<\Errors\Result<DeleteGatewayGroupResponse>>;
  public function DeleteNetworkProfile(DeleteNetworkProfileRequest $in): Awaitable<\Errors\Result<DeleteNetworkProfileResponse>>;
  public function DeleteProfile(DeleteProfileRequest $in): Awaitable<\Errors\Result<DeleteProfileResponse>>;
  public function DeleteRoom(DeleteRoomRequest $in): Awaitable<\Errors\Result<DeleteRoomResponse>>;
  public function DeleteRoomSkillParameter(DeleteRoomSkillParameterRequest $in): Awaitable<\Errors\Result<DeleteRoomSkillParameterResponse>>;
  public function DeleteSkillAuthorization(DeleteSkillAuthorizationRequest $in): Awaitable<\Errors\Result<DeleteSkillAuthorizationResponse>>;
  public function DeleteSkillGroup(DeleteSkillGroupRequest $in): Awaitable<\Errors\Result<DeleteSkillGroupResponse>>;
  public function DeleteUser(DeleteUserRequest $in): Awaitable<\Errors\Result<DeleteUserResponse>>;
  public function DisassociateContactFromAddressBook(DisassociateContactFromAddressBookRequest $in): Awaitable<\Errors\Result<DisassociateContactFromAddressBookResponse>>;
  public function DisassociateDeviceFromRoom(DisassociateDeviceFromRoomRequest $in): Awaitable<\Errors\Result<DisassociateDeviceFromRoomResponse>>;
  public function DisassociateSkillFromSkillGroup(DisassociateSkillFromSkillGroupRequest $in): Awaitable<\Errors\Result<DisassociateSkillFromSkillGroupResponse>>;
  public function DisassociateSkillFromUsers(DisassociateSkillFromUsersRequest $in): Awaitable<\Errors\Result<DisassociateSkillFromUsersResponse>>;
  public function DisassociateSkillGroupFromRoom(DisassociateSkillGroupFromRoomRequest $in): Awaitable<\Errors\Result<DisassociateSkillGroupFromRoomResponse>>;
  public function ForgetSmartHomeAppliances(ForgetSmartHomeAppliancesRequest $in): Awaitable<\Errors\Result<ForgetSmartHomeAppliancesResponse>>;
  public function GetAddressBook(GetAddressBookRequest $in): Awaitable<\Errors\Result<GetAddressBookResponse>>;
  public function GetConferencePreference(GetConferencePreferenceRequest $in): Awaitable<\Errors\Result<GetConferencePreferenceResponse>>;
  public function GetConferenceProvider(GetConferenceProviderRequest $in): Awaitable<\Errors\Result<GetConferenceProviderResponse>>;
  public function GetContact(GetContactRequest $in): Awaitable<\Errors\Result<GetContactResponse>>;
  public function GetDevice(GetDeviceRequest $in): Awaitable<\Errors\Result<GetDeviceResponse>>;
  public function GetGateway(GetGatewayRequest $in): Awaitable<\Errors\Result<GetGatewayResponse>>;
  public function GetGatewayGroup(GetGatewayGroupRequest $in): Awaitable<\Errors\Result<GetGatewayGroupResponse>>;
  public function GetInvitationConfiguration(GetInvitationConfigurationRequest $in): Awaitable<\Errors\Result<GetInvitationConfigurationResponse>>;
  public function GetNetworkProfile(GetNetworkProfileRequest $in): Awaitable<\Errors\Result<GetNetworkProfileResponse>>;
  public function GetProfile(GetProfileRequest $in): Awaitable<\Errors\Result<GetProfileResponse>>;
  public function GetRoom(GetRoomRequest $in): Awaitable<\Errors\Result<GetRoomResponse>>;
  public function GetRoomSkillParameter(GetRoomSkillParameterRequest $in): Awaitable<\Errors\Result<GetRoomSkillParameterResponse>>;
  public function GetSkillGroup(GetSkillGroupRequest $in): Awaitable<\Errors\Result<GetSkillGroupResponse>>;
  public function ListBusinessReportSchedules(ListBusinessReportSchedulesRequest $in): Awaitable<\Errors\Result<ListBusinessReportSchedulesResponse>>;
  public function ListConferenceProviders(ListConferenceProvidersRequest $in): Awaitable<\Errors\Result<ListConferenceProvidersResponse>>;
  public function ListDeviceEvents(ListDeviceEventsRequest $in): Awaitable<\Errors\Result<ListDeviceEventsResponse>>;
  public function ListGatewayGroups(ListGatewayGroupsRequest $in): Awaitable<\Errors\Result<ListGatewayGroupsResponse>>;
  public function ListGateways(ListGatewaysRequest $in): Awaitable<\Errors\Result<ListGatewaysResponse>>;
  public function ListSkills(ListSkillsRequest $in): Awaitable<\Errors\Result<ListSkillsResponse>>;
  public function ListSkillsStoreCategories(ListSkillsStoreCategoriesRequest $in): Awaitable<\Errors\Result<ListSkillsStoreCategoriesResponse>>;
  public function ListSkillsStoreSkillsByCategory(ListSkillsStoreSkillsByCategoryRequest $in): Awaitable<\Errors\Result<ListSkillsStoreSkillsByCategoryResponse>>;
  public function ListSmartHomeAppliances(ListSmartHomeAppliancesRequest $in): Awaitable<\Errors\Result<ListSmartHomeAppliancesResponse>>;
  public function ListTags(ListTagsRequest $in): Awaitable<\Errors\Result<ListTagsResponse>>;
  public function PutConferencePreference(PutConferencePreferenceRequest $in): Awaitable<\Errors\Result<PutConferencePreferenceResponse>>;
  public function PutInvitationConfiguration(PutInvitationConfigurationRequest $in): Awaitable<\Errors\Result<PutInvitationConfigurationResponse>>;
  public function PutRoomSkillParameter(PutRoomSkillParameterRequest $in): Awaitable<\Errors\Result<PutRoomSkillParameterResponse>>;
  public function PutSkillAuthorization(PutSkillAuthorizationRequest $in): Awaitable<\Errors\Result<PutSkillAuthorizationResponse>>;
  public function RegisterAVSDevice(RegisterAVSDeviceRequest $in): Awaitable<\Errors\Result<RegisterAVSDeviceResponse>>;
  public function RejectSkill(RejectSkillRequest $in): Awaitable<\Errors\Result<RejectSkillResponse>>;
  public function ResolveRoom(ResolveRoomRequest $in): Awaitable<\Errors\Result<ResolveRoomResponse>>;
  public function RevokeInvitation(RevokeInvitationRequest $in): Awaitable<\Errors\Result<RevokeInvitationResponse>>;
  public function SearchAddressBooks(SearchAddressBooksRequest $in): Awaitable<\Errors\Result<SearchAddressBooksResponse>>;
  public function SearchContacts(SearchContactsRequest $in): Awaitable<\Errors\Result<SearchContactsResponse>>;
  public function SearchDevices(SearchDevicesRequest $in): Awaitable<\Errors\Result<SearchDevicesResponse>>;
  public function SearchNetworkProfiles(SearchNetworkProfilesRequest $in): Awaitable<\Errors\Result<SearchNetworkProfilesResponse>>;
  public function SearchProfiles(SearchProfilesRequest $in): Awaitable<\Errors\Result<SearchProfilesResponse>>;
  public function SearchRooms(SearchRoomsRequest $in): Awaitable<\Errors\Result<SearchRoomsResponse>>;
  public function SearchSkillGroups(SearchSkillGroupsRequest $in): Awaitable<\Errors\Result<SearchSkillGroupsResponse>>;
  public function SearchUsers(SearchUsersRequest $in): Awaitable<\Errors\Result<SearchUsersResponse>>;
  public function SendAnnouncement(SendAnnouncementRequest $in): Awaitable<\Errors\Result<SendAnnouncementResponse>>;
  public function SendInvitation(SendInvitationRequest $in): Awaitable<\Errors\Result<SendInvitationResponse>>;
  public function StartDeviceSync(StartDeviceSyncRequest $in): Awaitable<\Errors\Result<StartDeviceSyncResponse>>;
  public function StartSmartHomeApplianceDiscovery(StartSmartHomeApplianceDiscoveryRequest $in): Awaitable<\Errors\Result<StartSmartHomeApplianceDiscoveryResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateAddressBook(UpdateAddressBookRequest $in): Awaitable<\Errors\Result<UpdateAddressBookResponse>>;
  public function UpdateBusinessReportSchedule(UpdateBusinessReportScheduleRequest $in): Awaitable<\Errors\Result<UpdateBusinessReportScheduleResponse>>;
  public function UpdateConferenceProvider(UpdateConferenceProviderRequest $in): Awaitable<\Errors\Result<UpdateConferenceProviderResponse>>;
  public function UpdateContact(UpdateContactRequest $in): Awaitable<\Errors\Result<UpdateContactResponse>>;
  public function UpdateDevice(UpdateDeviceRequest $in): Awaitable<\Errors\Result<UpdateDeviceResponse>>;
  public function UpdateGateway(UpdateGatewayRequest $in): Awaitable<\Errors\Result<UpdateGatewayResponse>>;
  public function UpdateGatewayGroup(UpdateGatewayGroupRequest $in): Awaitable<\Errors\Result<UpdateGatewayGroupResponse>>;
  public function UpdateNetworkProfile(UpdateNetworkProfileRequest $in): Awaitable<\Errors\Result<UpdateNetworkProfileResponse>>;
  public function UpdateProfile(UpdateProfileRequest $in): Awaitable<\Errors\Result<UpdateProfileResponse>>;
  public function UpdateRoom(UpdateRoomRequest $in): Awaitable<\Errors\Result<UpdateRoomResponse>>;
  public function UpdateSkillGroup(UpdateSkillGroupRequest $in): Awaitable<\Errors\Result<UpdateSkillGroupResponse>>;
}

type Address = string;

class AddressBook {
  public ?Arn $address_book_arn;
  public ?AddressBookDescription $description;
  public ?AddressBookName $name;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
    ?'description' => ?AddressBookDescription,
    ?'name' => ?AddressBookName,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class AddressBookData {
  public ?Arn $address_book_arn;
  public ?AddressBookDescription $description;
  public ?AddressBookName $name;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
    ?'description' => ?AddressBookDescription,
    ?'name' => ?AddressBookName,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type AddressBookDataList = vec<AddressBookData>;

type AddressBookDescription = string;

type AddressBookName = string;

class AlreadyExistsException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AmazonId = string;

type ApplianceDescription = string;

type ApplianceFriendlyName = string;

type ApplianceManufacturerName = string;

class ApproveSkillRequest {
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class ApproveSkillResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Arn = string;

class AssociateContactWithAddressBookRequest {
  public ?Arn $address_book_arn;
  public ?Arn $contact_arn;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
    ?'contact_arn' => ?Arn,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
    $this->contact_arn = $s['contact_arn'] ?? '';
  }
}

class AssociateContactWithAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDeviceWithNetworkProfileRequest {
  public ?Arn $device_arn;
  public ?Arn $network_profile_arn;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
    ?'network_profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
  }
}

class AssociateDeviceWithNetworkProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDeviceWithRoomRequest {
  public ?Arn $device_arn;
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class AssociateDeviceWithRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateSkillGroupWithRoomRequest {
  public ?Arn $room_arn;
  public ?Arn $skill_group_arn;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
    ?'skill_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
  }
}

class AssociateSkillGroupWithRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateSkillWithSkillGroupRequest {
  public ?Arn $skill_group_arn;
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'skill_group_arn' => ?Arn,
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class AssociateSkillWithSkillGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateSkillWithUsersRequest {
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class AssociateSkillWithUsersResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Audio {
  public ?Locale $locale;
  public ?AudioLocation $location;

  public function __construct(shape(
    ?'locale' => ?Locale,
    ?'location' => ?AudioLocation,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->location = $s['location'] ?? '';
  }
}

type AudioList = vec<Audio>;

type AudioLocation = string;

type AuthorizationResult = dict<Key, Value>;

type Boolean = bool;

type BulletPoint = string;

type BulletPoints = vec<BulletPoint>;

class BusinessReport {
  public ?BusinessReportDeliveryTime $delivery_time;
  public ?BusinessReportDownloadUrl $download_url;
  public ?BusinessReportFailureCode $failure_code;
  public ?BusinessReportS3Location $s_3_location;
  public ?BusinessReportStatus $status;

  public function __construct(shape(
    ?'delivery_time' => ?BusinessReportDeliveryTime,
    ?'download_url' => ?BusinessReportDownloadUrl,
    ?'failure_code' => ?BusinessReportFailureCode,
    ?'s_3_location' => ?BusinessReportS3Location,
    ?'status' => ?BusinessReportStatus,
  ) $s = shape()) {
    $this->delivery_time = $s['delivery_time'] ?? 0;
    $this->download_url = $s['download_url'] ?? '';
    $this->failure_code = $s['failure_code'] ?? '';
    $this->s_3_location = $s['s_3_location'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class BusinessReportContentRange {
  public ?BusinessReportInterval $interval;

  public function __construct(shape(
    ?'interval' => ?BusinessReportInterval,
  ) $s = shape()) {
    $this->interval = $s['interval'] ?? '';
  }
}

type BusinessReportDeliveryTime = int;

type BusinessReportDownloadUrl = string;

type BusinessReportFailureCode = string;

type BusinessReportFormat = string;

type BusinessReportInterval = string;

class BusinessReportRecurrence {
  public ?Date $start_date;

  public function __construct(shape(
    ?'start_date' => ?Date,
  ) $s = shape()) {
    $this->start_date = $s['start_date'] ?? '';
  }
}

class BusinessReportS3Location {
  public ?CustomerS3BucketName $bucket_name;
  public ?BusinessReportS3Path $path;

  public function __construct(shape(
    ?'bucket_name' => ?CustomerS3BucketName,
    ?'path' => ?BusinessReportS3Path,
  ) $s = shape()) {
    $this->bucket_name = $s['bucket_name'] ?? '';
    $this->path = $s['path'] ?? '';
  }
}

type BusinessReportS3Path = string;

class BusinessReportSchedule {
  public ?BusinessReportContentRange $content_range;
  public ?BusinessReportFormat $format;
  public ?BusinessReport $last_business_report;
  public ?BusinessReportRecurrence $recurrence;
  public ?CustomerS3BucketName $s_3_bucket_name;
  public ?S3KeyPrefix $s_3_key_prefix;
  public ?Arn $schedule_arn;
  public ?BusinessReportScheduleName $schedule_name;

  public function __construct(shape(
    ?'content_range' => ?BusinessReportContentRange,
    ?'format' => ?BusinessReportFormat,
    ?'last_business_report' => ?BusinessReport,
    ?'recurrence' => ?BusinessReportRecurrence,
    ?'s_3_bucket_name' => ?CustomerS3BucketName,
    ?'s_3_key_prefix' => ?S3KeyPrefix,
    ?'schedule_arn' => ?Arn,
    ?'schedule_name' => ?BusinessReportScheduleName,
  ) $s = shape()) {
    $this->content_range = $s['content_range'] ?? null;
    $this->format = $s['format'] ?? '';
    $this->last_business_report = $s['last_business_report'] ?? null;
    $this->recurrence = $s['recurrence'] ?? null;
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->s_3_key_prefix = $s['s_3_key_prefix'] ?? '';
    $this->schedule_arn = $s['schedule_arn'] ?? '';
    $this->schedule_name = $s['schedule_name'] ?? '';
  }
}

type BusinessReportScheduleList = vec<BusinessReportSchedule>;

type BusinessReportScheduleName = string;

type BusinessReportStatus = string;

class Category {
  public ?CategoryId $category_id;
  public ?CategoryName $category_name;

  public function __construct(shape(
    ?'category_id' => ?CategoryId,
    ?'category_name' => ?CategoryName,
  ) $s = shape()) {
    $this->category_id = $s['category_id'] ?? 0;
    $this->category_name = $s['category_name'] ?? '';
  }
}

type CategoryId = int;

type CategoryList = vec<Category>;

type CategoryName = string;

type CertificateTime = int;

type ClientId = string;

type ClientRequestToken = string;

type CommsProtocol = string;

class ConcurrentModificationException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConferencePreference {
  public ?Arn $default_conference_provider_arn;

  public function __construct(shape(
    ?'default_conference_provider_arn' => ?Arn,
  ) $s = shape()) {
    $this->default_conference_provider_arn = $s['default_conference_provider_arn'] ?? '';
  }
}

class ConferenceProvider {
  public ?Arn $arn;
  public ?IPDialIn $ip_dial_in;
  public ?MeetingSetting $meeting_setting;
  public ?ConferenceProviderName $name;
  public ?PSTNDialIn $pstn_dial_in;
  public ?ConferenceProviderType $type;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'ip_dial_in' => ?IPDialIn,
    ?'meeting_setting' => ?MeetingSetting,
    ?'name' => ?ConferenceProviderName,
    ?'pstn_dial_in' => ?PSTNDialIn,
    ?'type' => ?ConferenceProviderType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->ip_dial_in = $s['ip_dial_in'] ?? null;
    $this->meeting_setting = $s['meeting_setting'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->pstn_dial_in = $s['pstn_dial_in'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

type ConferenceProviderName = string;

type ConferenceProviderType = string;

type ConferenceProvidersList = vec<ConferenceProvider>;

type ConnectionStatus = string;

type ConnectionStatusUpdatedTime = int;

class Contact {
  public ?Arn $contact_arn;
  public ?ContactName $display_name;
  public ?ContactName $first_name;
  public ?ContactName $last_name;
  public ?RawPhoneNumber $phone_number;
  public ?PhoneNumberList $phone_numbers;
  public ?SipAddressList $sip_addresses;

  public function __construct(shape(
    ?'contact_arn' => ?Arn,
    ?'display_name' => ?ContactName,
    ?'first_name' => ?ContactName,
    ?'last_name' => ?ContactName,
    ?'phone_number' => ?RawPhoneNumber,
    ?'phone_numbers' => ?PhoneNumberList,
    ?'sip_addresses' => ?SipAddressList,
  ) $s = shape()) {
    $this->contact_arn = $s['contact_arn'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->phone_numbers = $s['phone_numbers'] ?? vec[];
    $this->sip_addresses = $s['sip_addresses'] ?? vec[];
  }
}

class ContactData {
  public ?Arn $contact_arn;
  public ?ContactName $display_name;
  public ?ContactName $first_name;
  public ?ContactName $last_name;
  public ?RawPhoneNumber $phone_number;
  public ?PhoneNumberList $phone_numbers;
  public ?SipAddressList $sip_addresses;

  public function __construct(shape(
    ?'contact_arn' => ?Arn,
    ?'display_name' => ?ContactName,
    ?'first_name' => ?ContactName,
    ?'last_name' => ?ContactName,
    ?'phone_number' => ?RawPhoneNumber,
    ?'phone_numbers' => ?PhoneNumberList,
    ?'sip_addresses' => ?SipAddressList,
  ) $s = shape()) {
    $this->contact_arn = $s['contact_arn'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->phone_numbers = $s['phone_numbers'] ?? vec[];
    $this->sip_addresses = $s['sip_addresses'] ?? vec[];
  }
}

type ContactDataList = vec<ContactData>;

type ContactName = string;

class Content {
  public ?AudioList $audio_list;
  public ?SsmlList $ssml_list;
  public ?TextList $text_list;

  public function __construct(shape(
    ?'audio_list' => ?AudioList,
    ?'ssml_list' => ?SsmlList,
    ?'text_list' => ?TextList,
  ) $s = shape()) {
    $this->audio_list = $s['audio_list'] ?? vec[];
    $this->ssml_list = $s['ssml_list'] ?? vec[];
    $this->text_list = $s['text_list'] ?? vec[];
  }
}

type CountryCode = string;

class CreateAddressBookRequest {
  public ?ClientRequestToken $client_request_token;
  public ?AddressBookDescription $description;
  public ?AddressBookName $name;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'description' => ?AddressBookDescription,
    ?'name' => ?AddressBookName,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateAddressBookResponse {
  public ?Arn $address_book_arn;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
  }
}

class CreateBusinessReportScheduleRequest {
  public ?ClientRequestToken $client_request_token;
  public ?BusinessReportContentRange $content_range;
  public ?BusinessReportFormat $format;
  public ?BusinessReportRecurrence $recurrence;
  public ?CustomerS3BucketName $s_3_bucket_name;
  public ?S3KeyPrefix $s_3_key_prefix;
  public ?BusinessReportScheduleName $schedule_name;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'content_range' => ?BusinessReportContentRange,
    ?'format' => ?BusinessReportFormat,
    ?'recurrence' => ?BusinessReportRecurrence,
    ?'s_3_bucket_name' => ?CustomerS3BucketName,
    ?'s_3_key_prefix' => ?S3KeyPrefix,
    ?'schedule_name' => ?BusinessReportScheduleName,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->content_range = $s['content_range'] ?? null;
    $this->format = $s['format'] ?? '';
    $this->recurrence = $s['recurrence'] ?? null;
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->s_3_key_prefix = $s['s_3_key_prefix'] ?? '';
    $this->schedule_name = $s['schedule_name'] ?? '';
  }
}

class CreateBusinessReportScheduleResponse {
  public ?Arn $schedule_arn;

  public function __construct(shape(
    ?'schedule_arn' => ?Arn,
  ) $s = shape()) {
    $this->schedule_arn = $s['schedule_arn'] ?? '';
  }
}

class CreateConferenceProviderRequest {
  public ?ClientRequestToken $client_request_token;
  public ?ConferenceProviderName $conference_provider_name;
  public ?ConferenceProviderType $conference_provider_type;
  public ?IPDialIn $ip_dial_in;
  public ?MeetingSetting $meeting_setting;
  public ?PSTNDialIn $pstn_dial_in;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'conference_provider_name' => ?ConferenceProviderName,
    ?'conference_provider_type' => ?ConferenceProviderType,
    ?'ip_dial_in' => ?IPDialIn,
    ?'meeting_setting' => ?MeetingSetting,
    ?'pstn_dial_in' => ?PSTNDialIn,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->conference_provider_name = $s['conference_provider_name'] ?? '';
    $this->conference_provider_type = $s['conference_provider_type'] ?? '';
    $this->ip_dial_in = $s['ip_dial_in'] ?? null;
    $this->meeting_setting = $s['meeting_setting'] ?? null;
    $this->pstn_dial_in = $s['pstn_dial_in'] ?? null;
  }
}

class CreateConferenceProviderResponse {
  public ?Arn $conference_provider_arn;

  public function __construct(shape(
    ?'conference_provider_arn' => ?Arn,
  ) $s = shape()) {
    $this->conference_provider_arn = $s['conference_provider_arn'] ?? '';
  }
}

class CreateContactRequest {
  public ?ClientRequestToken $client_request_token;
  public ?ContactName $display_name;
  public ?ContactName $first_name;
  public ?ContactName $last_name;
  public ?RawPhoneNumber $phone_number;
  public ?PhoneNumberList $phone_numbers;
  public ?SipAddressList $sip_addresses;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'display_name' => ?ContactName,
    ?'first_name' => ?ContactName,
    ?'last_name' => ?ContactName,
    ?'phone_number' => ?RawPhoneNumber,
    ?'phone_numbers' => ?PhoneNumberList,
    ?'sip_addresses' => ?SipAddressList,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->phone_numbers = $s['phone_numbers'] ?? vec[];
    $this->sip_addresses = $s['sip_addresses'] ?? vec[];
  }
}

class CreateContactResponse {
  public ?Arn $contact_arn;

  public function __construct(shape(
    ?'contact_arn' => ?Arn,
  ) $s = shape()) {
    $this->contact_arn = $s['contact_arn'] ?? '';
  }
}

class CreateEndOfMeetingReminder {
  public bool $enabled;
  public ?EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public ?EndOfMeetingReminderType $reminder_type;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'reminder_at_minutes' => ?EndOfMeetingReminderMinutesList,
    ?'reminder_type' => ?EndOfMeetingReminderType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->reminder_at_minutes = $s['reminder_at_minutes'] ?? vec[];
    $this->reminder_type = $s['reminder_type'] ?? '';
  }
}

class CreateGatewayGroupRequest {
  public ?ClientRequestToken $client_request_token;
  public ?GatewayGroupDescription $description;
  public ?GatewayGroupName $name;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'description' => ?GatewayGroupDescription,
    ?'name' => ?GatewayGroupName,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class CreateGatewayGroupResponse {
  public ?Arn $gateway_group_arn;

  public function __construct(shape(
    ?'gateway_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->gateway_group_arn = $s['gateway_group_arn'] ?? '';
  }
}

class CreateInstantBooking {
  public ?Minutes $duration_in_minutes;
  public bool $enabled;

  public function __construct(shape(
    ?'duration_in_minutes' => ?Minutes,
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->duration_in_minutes = $s['duration_in_minutes'] ?? 0;
    $this->enabled = $s['enabled'] ?? false;
  }
}

class CreateMeetingRoomConfiguration {
  public ?CreateEndOfMeetingReminder $end_of_meeting_reminder;
  public ?CreateInstantBooking $instant_booking;
  public ?CreateRequireCheckIn $require_check_in;
  public bool $room_utilization_metrics_enabled;

  public function __construct(shape(
    ?'end_of_meeting_reminder' => ?CreateEndOfMeetingReminder,
    ?'instant_booking' => ?CreateInstantBooking,
    ?'require_check_in' => ?CreateRequireCheckIn,
    ?'room_utilization_metrics_enabled' => bool,
  ) $s = shape()) {
    $this->end_of_meeting_reminder = $s['end_of_meeting_reminder'] ?? null;
    $this->instant_booking = $s['instant_booking'] ?? null;
    $this->require_check_in = $s['require_check_in'] ?? null;
    $this->room_utilization_metrics_enabled = $s['room_utilization_metrics_enabled'] ?? false;
  }
}

class CreateNetworkProfileRequest {
  public ?Arn $certificate_authority_arn;
  public ?ClientRequestToken $client_request_token;
  public ?CurrentWiFiPassword $current_password;
  public ?NetworkProfileDescription $description;
  public ?NetworkEapMethod $eap_method;
  public ?NetworkProfileName $network_profile_name;
  public ?NextWiFiPassword $next_password;
  public ?NetworkSecurityType $security_type;
  public ?NetworkSsid $ssid;
  public ?TrustAnchorList $trust_anchors;

  public function __construct(shape(
    ?'certificate_authority_arn' => ?Arn,
    ?'client_request_token' => ?ClientRequestToken,
    ?'current_password' => ?CurrentWiFiPassword,
    ?'description' => ?NetworkProfileDescription,
    ?'eap_method' => ?NetworkEapMethod,
    ?'network_profile_name' => ?NetworkProfileName,
    ?'next_password' => ?NextWiFiPassword,
    ?'security_type' => ?NetworkSecurityType,
    ?'ssid' => ?NetworkSsid,
    ?'trust_anchors' => ?TrustAnchorList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $s['certificate_authority_arn'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->current_password = $s['current_password'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->eap_method = $s['eap_method'] ?? '';
    $this->network_profile_name = $s['network_profile_name'] ?? '';
    $this->next_password = $s['next_password'] ?? '';
    $this->security_type = $s['security_type'] ?? '';
    $this->ssid = $s['ssid'] ?? '';
    $this->trust_anchors = $s['trust_anchors'] ?? vec[];
  }
}

class CreateNetworkProfileResponse {
  public ?Arn $network_profile_arn;

  public function __construct(shape(
    ?'network_profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
  }
}

class CreateProfileRequest {
  public ?Address $address;
  public ?ClientRequestToken $client_request_token;
  public ?DistanceUnit $distance_unit;
  public ?DeviceLocale $locale;
  public ?MaxVolumeLimit $max_volume_limit;
  public ?CreateMeetingRoomConfiguration $meeting_room_configuration;
  public bool $pstn_enabled;
  public ?ProfileName $profile_name;
  public bool $setup_mode_disabled;
  public ?TemperatureUnit $temperature_unit;
  public ?Timezone $timezone;
  public ?WakeWord $wake_word;

  public function __construct(shape(
    ?'address' => ?Address,
    ?'client_request_token' => ?ClientRequestToken,
    ?'distance_unit' => ?DistanceUnit,
    ?'locale' => ?DeviceLocale,
    ?'max_volume_limit' => ?MaxVolumeLimit,
    ?'meeting_room_configuration' => ?CreateMeetingRoomConfiguration,
    ?'pstn_enabled' => bool,
    ?'profile_name' => ?ProfileName,
    ?'setup_mode_disabled' => bool,
    ?'temperature_unit' => ?TemperatureUnit,
    ?'timezone' => ?Timezone,
    ?'wake_word' => ?WakeWord,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->distance_unit = $s['distance_unit'] ?? '';
    $this->locale = $s['locale'] ?? '';
    $this->max_volume_limit = $s['max_volume_limit'] ?? 0;
    $this->meeting_room_configuration = $s['meeting_room_configuration'] ?? null;
    $this->pstn_enabled = $s['pstn_enabled'] ?? false;
    $this->profile_name = $s['profile_name'] ?? '';
    $this->setup_mode_disabled = $s['setup_mode_disabled'] ?? false;
    $this->temperature_unit = $s['temperature_unit'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->wake_word = $s['wake_word'] ?? '';
  }
}

class CreateProfileResponse {
  public ?Arn $profile_arn;

  public function __construct(shape(
    ?'profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->profile_arn = $s['profile_arn'] ?? '';
  }
}

class CreateRequireCheckIn {
  public bool $enabled;
  public ?Minutes $release_after_minutes;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'release_after_minutes' => ?Minutes,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->release_after_minutes = $s['release_after_minutes'] ?? 0;
  }
}

class CreateRoomRequest {
  public ?ClientRequestToken $client_request_token;
  public ?RoomDescription $description;
  public ?Arn $profile_arn;
  public ?ProviderCalendarId $provider_calendar_id;
  public ?RoomName $room_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'description' => ?RoomDescription,
    ?'profile_arn' => ?Arn,
    ?'provider_calendar_id' => ?ProviderCalendarId,
    ?'room_name' => ?RoomName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->profile_arn = $s['profile_arn'] ?? '';
    $this->provider_calendar_id = $s['provider_calendar_id'] ?? '';
    $this->room_name = $s['room_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRoomResponse {
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class CreateSkillGroupRequest {
  public ?ClientRequestToken $client_request_token;
  public ?SkillGroupDescription $description;
  public ?SkillGroupName $skill_group_name;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'description' => ?SkillGroupDescription,
    ?'skill_group_name' => ?SkillGroupName,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->skill_group_name = $s['skill_group_name'] ?? '';
  }
}

class CreateSkillGroupResponse {
  public ?Arn $skill_group_arn;

  public function __construct(shape(
    ?'skill_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
  }
}

class CreateUserRequest {
  public ?ClientRequestToken $client_request_token;
  public ?Email $email;
  public ?user_FirstName $first_name;
  public ?user_LastName $last_name;
  public ?TagList $tags;
  public ?user_UserId $user_id;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'email' => ?Email,
    ?'first_name' => ?user_FirstName,
    ?'last_name' => ?user_LastName,
    ?'tags' => ?TagList,
    ?'user_id' => ?user_UserId,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->user_id = $s['user_id'] ?? '';
  }
}

class CreateUserResponse {
  public ?Arn $user_arn;

  public function __construct(shape(
    ?'user_arn' => ?Arn,
  ) $s = shape()) {
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

type CurrentWiFiPassword = string;

type CustomerS3BucketName = string;

type Date = string;

class DeleteAddressBookRequest {
  public ?Arn $address_book_arn;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
  }
}

class DeleteAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteBusinessReportScheduleRequest {
  public ?Arn $schedule_arn;

  public function __construct(shape(
    ?'schedule_arn' => ?Arn,
  ) $s = shape()) {
    $this->schedule_arn = $s['schedule_arn'] ?? '';
  }
}

class DeleteBusinessReportScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteConferenceProviderRequest {
  public ?Arn $conference_provider_arn;

  public function __construct(shape(
    ?'conference_provider_arn' => ?Arn,
  ) $s = shape()) {
    $this->conference_provider_arn = $s['conference_provider_arn'] ?? '';
  }
}

class DeleteConferenceProviderResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteContactRequest {
  public ?Arn $contact_arn;

  public function __construct(shape(
    ?'contact_arn' => ?Arn,
  ) $s = shape()) {
    $this->contact_arn = $s['contact_arn'] ?? '';
  }
}

class DeleteContactResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDeviceRequest {
  public ?Arn $device_arn;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
  }
}

class DeleteDeviceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDeviceUsageDataRequest {
  public ?Arn $device_arn;
  public ?DeviceUsageType $device_usage_type;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
    ?'device_usage_type' => ?DeviceUsageType,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
    $this->device_usage_type = $s['device_usage_type'] ?? '';
  }
}

class DeleteDeviceUsageDataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteGatewayGroupRequest {
  public ?Arn $gateway_group_arn;

  public function __construct(shape(
    ?'gateway_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->gateway_group_arn = $s['gateway_group_arn'] ?? '';
  }
}

class DeleteGatewayGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNetworkProfileRequest {
  public ?Arn $network_profile_arn;

  public function __construct(shape(
    ?'network_profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
  }
}

class DeleteNetworkProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProfileRequest {
  public ?Arn $profile_arn;

  public function __construct(shape(
    ?'profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->profile_arn = $s['profile_arn'] ?? '';
  }
}

class DeleteProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRoomRequest {
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class DeleteRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRoomSkillParameterRequest {
  public ?RoomSkillParameterKey $parameter_key;
  public ?Arn $room_arn;
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'parameter_key' => ?RoomSkillParameterKey,
    ?'room_arn' => ?Arn,
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->parameter_key = $s['parameter_key'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class DeleteRoomSkillParameterResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSkillAuthorizationRequest {
  public ?Arn $room_arn;
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class DeleteSkillAuthorizationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSkillGroupRequest {
  public ?Arn $skill_group_arn;

  public function __construct(shape(
    ?'skill_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
  }
}

class DeleteSkillGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUserRequest {
  public ?EnrollmentId $enrollment_id;
  public ?Arn $user_arn;

  public function __construct(shape(
    ?'enrollment_id' => ?EnrollmentId,
    ?'user_arn' => ?Arn,
  ) $s = shape()) {
    $this->enrollment_id = $s['enrollment_id'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class DeleteUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeveloperInfo {
  public ?DeveloperName $developer_name;
  public ?Email $email;
  public ?PrivacyPolicy $privacy_policy;
  public ?Url $url;

  public function __construct(shape(
    ?'developer_name' => ?DeveloperName,
    ?'email' => ?Email,
    ?'privacy_policy' => ?PrivacyPolicy,
    ?'url' => ?Url,
  ) $s = shape()) {
    $this->developer_name = $s['developer_name'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->privacy_policy = $s['privacy_policy'] ?? '';
    $this->url = $s['url'] ?? '';
  }
}

type DeveloperName = string;

class Device {
  public ?Arn $device_arn;
  public ?DeviceName $device_name;
  public ?DeviceSerialNumber $device_serial_number;
  public ?DeviceStatus $device_status;
  public ?DeviceStatusInfo $device_status_info;
  public ?DeviceType $device_type;
  public ?MacAddress $mac_address;
  public ?DeviceNetworkProfileInfo $network_profile_info;
  public ?Arn $room_arn;
  public ?SoftwareVersion $software_version;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
    ?'device_name' => ?DeviceName,
    ?'device_serial_number' => ?DeviceSerialNumber,
    ?'device_status' => ?DeviceStatus,
    ?'device_status_info' => ?DeviceStatusInfo,
    ?'device_type' => ?DeviceType,
    ?'mac_address' => ?MacAddress,
    ?'network_profile_info' => ?DeviceNetworkProfileInfo,
    ?'room_arn' => ?Arn,
    ?'software_version' => ?SoftwareVersion,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->device_serial_number = $s['device_serial_number'] ?? '';
    $this->device_status = $s['device_status'] ?? '';
    $this->device_status_info = $s['device_status_info'] ?? null;
    $this->device_type = $s['device_type'] ?? '';
    $this->mac_address = $s['mac_address'] ?? '';
    $this->network_profile_info = $s['network_profile_info'] ?? null;
    $this->room_arn = $s['room_arn'] ?? '';
    $this->software_version = $s['software_version'] ?? '';
  }
}

class DeviceData {
  public ?DeviceDataCreatedTime $created_time;
  public ?Arn $device_arn;
  public ?DeviceName $device_name;
  public ?DeviceSerialNumber $device_serial_number;
  public ?DeviceStatus $device_status;
  public ?DeviceStatusInfo $device_status_info;
  public ?DeviceType $device_type;
  public ?MacAddress $mac_address;
  public ?Arn $network_profile_arn;
  public ?NetworkProfileName $network_profile_name;
  public ?Arn $room_arn;
  public ?RoomName $room_name;
  public ?SoftwareVersion $software_version;

  public function __construct(shape(
    ?'created_time' => ?DeviceDataCreatedTime,
    ?'device_arn' => ?Arn,
    ?'device_name' => ?DeviceName,
    ?'device_serial_number' => ?DeviceSerialNumber,
    ?'device_status' => ?DeviceStatus,
    ?'device_status_info' => ?DeviceStatusInfo,
    ?'device_type' => ?DeviceType,
    ?'mac_address' => ?MacAddress,
    ?'network_profile_arn' => ?Arn,
    ?'network_profile_name' => ?NetworkProfileName,
    ?'room_arn' => ?Arn,
    ?'room_name' => ?RoomName,
    ?'software_version' => ?SoftwareVersion,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->device_arn = $s['device_arn'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->device_serial_number = $s['device_serial_number'] ?? '';
    $this->device_status = $s['device_status'] ?? '';
    $this->device_status_info = $s['device_status_info'] ?? null;
    $this->device_type = $s['device_type'] ?? '';
    $this->mac_address = $s['mac_address'] ?? '';
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
    $this->network_profile_name = $s['network_profile_name'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
    $this->room_name = $s['room_name'] ?? '';
    $this->software_version = $s['software_version'] ?? '';
  }
}

type DeviceDataCreatedTime = int;

type DeviceDataList = vec<DeviceData>;

class DeviceEvent {
  public ?DeviceEventTime $timestamp;
  public ?DeviceEventType $type;
  public ?DeviceEventValue $value;

  public function __construct(shape(
    ?'timestamp' => ?DeviceEventTime,
    ?'type' => ?DeviceEventType,
    ?'value' => ?DeviceEventValue,
  ) $s = shape()) {
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type DeviceEventList = vec<DeviceEvent>;

type DeviceEventTime = int;

type DeviceEventType = string;

type DeviceEventValue = string;

type DeviceLocale = string;

type DeviceName = string;

class DeviceNetworkProfileInfo {
  public ?Arn $certificate_arn;
  public ?CertificateTime $certificate_expiration_time;
  public ?Arn $network_profile_arn;

  public function __construct(shape(
    ?'certificate_arn' => ?Arn,
    ?'certificate_expiration_time' => ?CertificateTime,
    ?'network_profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->certificate_expiration_time = $s['certificate_expiration_time'] ?? 0;
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
  }
}

class DeviceNotRegisteredException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DeviceSerialNumber = string;

type DeviceSerialNumberForAVS = string;

type DeviceStatus = string;

class DeviceStatusDetail {
  public ?DeviceStatusDetailCode $code;
  public ?Feature $feature;

  public function __construct(shape(
    ?'code' => ?DeviceStatusDetailCode,
    ?'feature' => ?Feature,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->feature = $s['feature'] ?? '';
  }
}

type DeviceStatusDetailCode = string;

type DeviceStatusDetails = vec<DeviceStatusDetail>;

class DeviceStatusInfo {
  public ?ConnectionStatus $connection_status;
  public ?ConnectionStatusUpdatedTime $connection_status_updated_time;
  public ?DeviceStatusDetails $device_status_details;

  public function __construct(shape(
    ?'connection_status' => ?ConnectionStatus,
    ?'connection_status_updated_time' => ?ConnectionStatusUpdatedTime,
    ?'device_status_details' => ?DeviceStatusDetails,
  ) $s = shape()) {
    $this->connection_status = $s['connection_status'] ?? '';
    $this->connection_status_updated_time = $s['connection_status_updated_time'] ?? 0;
    $this->device_status_details = $s['device_status_details'] ?? vec[];
  }
}

type DeviceType = string;

type DeviceUsageType = string;

class DisassociateContactFromAddressBookRequest {
  public ?Arn $address_book_arn;
  public ?Arn $contact_arn;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
    ?'contact_arn' => ?Arn,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
    $this->contact_arn = $s['contact_arn'] ?? '';
  }
}

class DisassociateContactFromAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateDeviceFromRoomRequest {
  public ?Arn $device_arn;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
  }
}

class DisassociateDeviceFromRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateSkillFromSkillGroupRequest {
  public ?Arn $skill_group_arn;
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'skill_group_arn' => ?Arn,
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class DisassociateSkillFromSkillGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateSkillFromUsersRequest {
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class DisassociateSkillFromUsersResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateSkillGroupFromRoomRequest {
  public ?Arn $room_arn;
  public ?Arn $skill_group_arn;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
    ?'skill_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
  }
}

class DisassociateSkillGroupFromRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DistanceUnit = string;

type Email = string;

type EnablementType = string;

type EnablementTypeFilter = string;

class EndOfMeetingReminder {
  public bool $enabled;
  public ?EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public ?EndOfMeetingReminderType $reminder_type;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'reminder_at_minutes' => ?EndOfMeetingReminderMinutesList,
    ?'reminder_type' => ?EndOfMeetingReminderType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->reminder_at_minutes = $s['reminder_at_minutes'] ?? vec[];
    $this->reminder_type = $s['reminder_type'] ?? '';
  }
}

type EndOfMeetingReminderMinutesList = vec<Minutes>;

type EndOfMeetingReminderType = string;

type EndUserLicenseAgreement = string;

type Endpoint = string;

type EnrollmentId = string;

type EnrollmentStatus = string;

type ErrorMessage = string;

type Feature = string;

type Features = vec<Feature>;

class Filter {
  public ?FilterKey $key;
  public ?FilterValueList $values;

  public function __construct(shape(
    ?'key' => ?FilterKey,
    ?'values' => ?FilterValueList,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type FilterKey = string;

type FilterList = vec<Filter>;

type FilterValue = string;

type FilterValueList = vec<FilterValue>;

class ForgetSmartHomeAppliancesRequest {
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class ForgetSmartHomeAppliancesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Gateway {
  public ?Arn $arn;
  public ?GatewayDescription $description;
  public ?Arn $gateway_group_arn;
  public ?GatewayName $name;
  public ?GatewayVersion $software_version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'description' => ?GatewayDescription,
    ?'gateway_group_arn' => ?Arn,
    ?'name' => ?GatewayName,
    ?'software_version' => ?GatewayVersion,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->gateway_group_arn = $s['gateway_group_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->software_version = $s['software_version'] ?? '';
  }
}

type GatewayDescription = string;

class GatewayGroup {
  public ?Arn $arn;
  public ?GatewayGroupDescription $description;
  public ?GatewayGroupName $name;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'description' => ?GatewayGroupDescription,
    ?'name' => ?GatewayGroupName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type GatewayGroupDescription = string;

type GatewayGroupName = string;

type GatewayGroupSummaries = vec<GatewayGroupSummary>;

class GatewayGroupSummary {
  public ?Arn $arn;
  public ?GatewayGroupDescription $description;
  public ?GatewayGroupName $name;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'description' => ?GatewayGroupDescription,
    ?'name' => ?GatewayGroupName,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type GatewayName = string;

type GatewaySummaries = vec<GatewaySummary>;

class GatewaySummary {
  public ?Arn $arn;
  public ?GatewayDescription $description;
  public ?Arn $gateway_group_arn;
  public ?GatewayName $name;
  public ?GatewayVersion $software_version;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'description' => ?GatewayDescription,
    ?'gateway_group_arn' => ?Arn,
    ?'name' => ?GatewayName,
    ?'software_version' => ?GatewayVersion,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->gateway_group_arn = $s['gateway_group_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->software_version = $s['software_version'] ?? '';
  }
}

type GatewayVersion = string;

type GenericKeyword = string;

type GenericKeywords = vec<GenericKeyword>;

class GetAddressBookRequest {
  public ?Arn $address_book_arn;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
  }
}

class GetAddressBookResponse {
  public ?AddressBook $address_book;

  public function __construct(shape(
    ?'address_book' => ?AddressBook,
  ) $s = shape()) {
    $this->address_book = $s['address_book'] ?? null;
  }
}

class GetConferencePreferenceRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetConferencePreferenceResponse {
  public ?ConferencePreference $preference;

  public function __construct(shape(
    ?'preference' => ?ConferencePreference,
  ) $s = shape()) {
    $this->preference = $s['preference'] ?? null;
  }
}

class GetConferenceProviderRequest {
  public ?Arn $conference_provider_arn;

  public function __construct(shape(
    ?'conference_provider_arn' => ?Arn,
  ) $s = shape()) {
    $this->conference_provider_arn = $s['conference_provider_arn'] ?? '';
  }
}

class GetConferenceProviderResponse {
  public ?ConferenceProvider $conference_provider;

  public function __construct(shape(
    ?'conference_provider' => ?ConferenceProvider,
  ) $s = shape()) {
    $this->conference_provider = $s['conference_provider'] ?? null;
  }
}

class GetContactRequest {
  public ?Arn $contact_arn;

  public function __construct(shape(
    ?'contact_arn' => ?Arn,
  ) $s = shape()) {
    $this->contact_arn = $s['contact_arn'] ?? '';
  }
}

class GetContactResponse {
  public ?Contact $contact;

  public function __construct(shape(
    ?'contact' => ?Contact,
  ) $s = shape()) {
    $this->contact = $s['contact'] ?? null;
  }
}

class GetDeviceRequest {
  public ?Arn $device_arn;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
  }
}

class GetDeviceResponse {
  public ?Device $device;

  public function __construct(shape(
    ?'device' => ?Device,
  ) $s = shape()) {
    $this->device = $s['device'] ?? null;
  }
}

class GetGatewayGroupRequest {
  public ?Arn $gateway_group_arn;

  public function __construct(shape(
    ?'gateway_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->gateway_group_arn = $s['gateway_group_arn'] ?? '';
  }
}

class GetGatewayGroupResponse {
  public ?GatewayGroup $gateway_group;

  public function __construct(shape(
    ?'gateway_group' => ?GatewayGroup,
  ) $s = shape()) {
    $this->gateway_group = $s['gateway_group'] ?? null;
  }
}

class GetGatewayRequest {
  public ?Arn $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?Arn,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class GetGatewayResponse {
  public ?Gateway $gateway;

  public function __construct(shape(
    ?'gateway' => ?Gateway,
  ) $s = shape()) {
    $this->gateway = $s['gateway'] ?? null;
  }
}

class GetInvitationConfigurationRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetInvitationConfigurationResponse {
  public ?Email $contact_email;
  public ?OrganizationName $organization_name;
  public ?ShortSkillIdList $private_skill_ids;

  public function __construct(shape(
    ?'contact_email' => ?Email,
    ?'organization_name' => ?OrganizationName,
    ?'private_skill_ids' => ?ShortSkillIdList,
  ) $s = shape()) {
    $this->contact_email = $s['contact_email'] ?? '';
    $this->organization_name = $s['organization_name'] ?? '';
    $this->private_skill_ids = $s['private_skill_ids'] ?? vec[];
  }
}

class GetNetworkProfileRequest {
  public ?Arn $network_profile_arn;

  public function __construct(shape(
    ?'network_profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
  }
}

class GetNetworkProfileResponse {
  public ?NetworkProfile $network_profile;

  public function __construct(shape(
    ?'network_profile' => ?NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $s['network_profile'] ?? null;
  }
}

class GetProfileRequest {
  public ?Arn $profile_arn;

  public function __construct(shape(
    ?'profile_arn' => ?Arn,
  ) $s = shape()) {
    $this->profile_arn = $s['profile_arn'] ?? '';
  }
}

class GetProfileResponse {
  public ?Profile $profile;

  public function __construct(shape(
    ?'profile' => ?Profile,
  ) $s = shape()) {
    $this->profile = $s['profile'] ?? null;
  }
}

class GetRoomRequest {
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class GetRoomResponse {
  public ?Room $room;

  public function __construct(shape(
    ?'room' => ?Room,
  ) $s = shape()) {
    $this->room = $s['room'] ?? null;
  }
}

class GetRoomSkillParameterRequest {
  public ?RoomSkillParameterKey $parameter_key;
  public ?Arn $room_arn;
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'parameter_key' => ?RoomSkillParameterKey,
    ?'room_arn' => ?Arn,
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->parameter_key = $s['parameter_key'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class GetRoomSkillParameterResponse {
  public ?RoomSkillParameter $room_skill_parameter;

  public function __construct(shape(
    ?'room_skill_parameter' => ?RoomSkillParameter,
  ) $s = shape()) {
    $this->room_skill_parameter = $s['room_skill_parameter'] ?? null;
  }
}

class GetSkillGroupRequest {
  public ?Arn $skill_group_arn;

  public function __construct(shape(
    ?'skill_group_arn' => ?Arn,
  ) $s = shape()) {
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
  }
}

class GetSkillGroupResponse {
  public ?SkillGroup $skill_group;

  public function __construct(shape(
    ?'skill_group' => ?SkillGroup,
  ) $s = shape()) {
    $this->skill_group = $s['skill_group'] ?? null;
  }
}

class IPDialIn {
  public ?CommsProtocol $comms_protocol;
  public ?Endpoint $endpoint;

  public function __construct(shape(
    ?'comms_protocol' => ?CommsProtocol,
    ?'endpoint' => ?Endpoint,
  ) $s = shape()) {
    $this->comms_protocol = $s['comms_protocol'] ?? '';
    $this->endpoint = $s['endpoint'] ?? '';
  }
}

type IconUrl = string;

class InstantBooking {
  public ?Minutes $duration_in_minutes;
  public bool $enabled;

  public function __construct(shape(
    ?'duration_in_minutes' => ?Minutes,
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->duration_in_minutes = $s['duration_in_minutes'] ?? 0;
    $this->enabled = $s['enabled'] ?? false;
  }
}

class InvalidCertificateAuthorityException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidDeviceException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSecretsManagerResourceException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidServiceLinkedRoleStateException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidUserStatusException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type InvocationPhrase = string;

type Key = string;

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListBusinessReportSchedulesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBusinessReportSchedulesResponse {
  public ?BusinessReportScheduleList $business_report_schedules;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'business_report_schedules' => ?BusinessReportScheduleList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->business_report_schedules = $s['business_report_schedules'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConferenceProvidersRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListConferenceProvidersResponse {
  public ?ConferenceProvidersList $conference_providers;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'conference_providers' => ?ConferenceProvidersList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->conference_providers = $s['conference_providers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeviceEventsRequest {
  public ?Arn $device_arn;
  public ?DeviceEventType $event_type;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
    ?'event_type' => ?DeviceEventType,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDeviceEventsResponse {
  public ?DeviceEventList $device_events;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'device_events' => ?DeviceEventList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->device_events = $s['device_events'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGatewayGroupsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGatewayGroupsResponse {
  public ?GatewayGroupSummaries $gateway_groups;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'gateway_groups' => ?GatewayGroupSummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->gateway_groups = $s['gateway_groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGatewaysRequest {
  public ?Arn $gateway_group_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'gateway_group_arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->gateway_group_arn = $s['gateway_group_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGatewaysResponse {
  public ?GatewaySummaries $gateways;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'gateways' => ?GatewaySummaries,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->gateways = $s['gateways'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSkillsRequest {
  public ?EnablementTypeFilter $enablement_type;
  public ?SkillListMaxResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $skill_group_arn;
  public ?SkillTypeFilter $skill_type;

  public function __construct(shape(
    ?'enablement_type' => ?EnablementTypeFilter,
    ?'max_results' => ?SkillListMaxResults,
    ?'next_token' => ?NextToken,
    ?'skill_group_arn' => ?Arn,
    ?'skill_type' => ?SkillTypeFilter,
  ) $s = shape()) {
    $this->enablement_type = $s['enablement_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
    $this->skill_type = $s['skill_type'] ?? '';
  }
}

class ListSkillsResponse {
  public ?NextToken $next_token;
  public ?SkillSummaryList $skill_summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'skill_summaries' => ?SkillSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->skill_summaries = $s['skill_summaries'] ?? vec[];
  }
}

class ListSkillsStoreCategoriesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSkillsStoreCategoriesResponse {
  public ?CategoryList $category_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'category_list' => ?CategoryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->category_list = $s['category_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSkillsStoreSkillsByCategoryRequest {
  public ?CategoryId $category_id;
  public ?SkillListMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'category_id' => ?CategoryId,
    ?'max_results' => ?SkillListMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->category_id = $s['category_id'] ?? 0;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListSkillsStoreSkillsByCategoryResponse {
  public ?NextToken $next_token;
  public ?SkillsStoreSkillList $skills_store_skills;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'skills_store_skills' => ?SkillsStoreSkillList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->skills_store_skills = $s['skills_store_skills'] ?? vec[];
  }
}

class ListSmartHomeAppliancesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class ListSmartHomeAppliancesResponse {
  public ?NextToken $next_token;
  public ?SmartHomeApplianceList $smart_home_appliances;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'smart_home_appliances' => ?SmartHomeApplianceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->smart_home_appliances = $s['smart_home_appliances'] ?? vec[];
  }
}

class ListTagsRequest {
  public ?Arn $arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsResponse {
  public ?NextToken $next_token;
  public ?TagList $tags;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type Locale = string;

type MacAddress = string;

type MaxResults = int;

type MaxVolumeLimit = int;

class MeetingRoomConfiguration {
  public ?EndOfMeetingReminder $end_of_meeting_reminder;
  public ?InstantBooking $instant_booking;
  public ?RequireCheckIn $require_check_in;
  public bool $room_utilization_metrics_enabled;

  public function __construct(shape(
    ?'end_of_meeting_reminder' => ?EndOfMeetingReminder,
    ?'instant_booking' => ?InstantBooking,
    ?'require_check_in' => ?RequireCheckIn,
    ?'room_utilization_metrics_enabled' => bool,
  ) $s = shape()) {
    $this->end_of_meeting_reminder = $s['end_of_meeting_reminder'] ?? null;
    $this->instant_booking = $s['instant_booking'] ?? null;
    $this->require_check_in = $s['require_check_in'] ?? null;
    $this->room_utilization_metrics_enabled = $s['room_utilization_metrics_enabled'] ?? false;
  }
}

class MeetingSetting {
  public ?RequirePin $require_pin;

  public function __construct(shape(
    ?'require_pin' => ?RequirePin,
  ) $s = shape()) {
    $this->require_pin = $s['require_pin'] ?? '';
  }
}

type Minutes = int;

class NameInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NetworkEapMethod = string;

class NetworkProfile {
  public ?Arn $certificate_authority_arn;
  public ?CurrentWiFiPassword $current_password;
  public ?NetworkProfileDescription $description;
  public ?NetworkEapMethod $eap_method;
  public ?Arn $network_profile_arn;
  public ?NetworkProfileName $network_profile_name;
  public ?NextWiFiPassword $next_password;
  public ?NetworkSecurityType $security_type;
  public ?NetworkSsid $ssid;
  public ?TrustAnchorList $trust_anchors;

  public function __construct(shape(
    ?'certificate_authority_arn' => ?Arn,
    ?'current_password' => ?CurrentWiFiPassword,
    ?'description' => ?NetworkProfileDescription,
    ?'eap_method' => ?NetworkEapMethod,
    ?'network_profile_arn' => ?Arn,
    ?'network_profile_name' => ?NetworkProfileName,
    ?'next_password' => ?NextWiFiPassword,
    ?'security_type' => ?NetworkSecurityType,
    ?'ssid' => ?NetworkSsid,
    ?'trust_anchors' => ?TrustAnchorList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $s['certificate_authority_arn'] ?? '';
    $this->current_password = $s['current_password'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->eap_method = $s['eap_method'] ?? '';
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
    $this->network_profile_name = $s['network_profile_name'] ?? '';
    $this->next_password = $s['next_password'] ?? '';
    $this->security_type = $s['security_type'] ?? '';
    $this->ssid = $s['ssid'] ?? '';
    $this->trust_anchors = $s['trust_anchors'] ?? vec[];
  }
}

class NetworkProfileData {
  public ?Arn $certificate_authority_arn;
  public ?NetworkProfileDescription $description;
  public ?NetworkEapMethod $eap_method;
  public ?Arn $network_profile_arn;
  public ?NetworkProfileName $network_profile_name;
  public ?NetworkSecurityType $security_type;
  public ?NetworkSsid $ssid;

  public function __construct(shape(
    ?'certificate_authority_arn' => ?Arn,
    ?'description' => ?NetworkProfileDescription,
    ?'eap_method' => ?NetworkEapMethod,
    ?'network_profile_arn' => ?Arn,
    ?'network_profile_name' => ?NetworkProfileName,
    ?'security_type' => ?NetworkSecurityType,
    ?'ssid' => ?NetworkSsid,
  ) $s = shape()) {
    $this->certificate_authority_arn = $s['certificate_authority_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->eap_method = $s['eap_method'] ?? '';
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
    $this->network_profile_name = $s['network_profile_name'] ?? '';
    $this->security_type = $s['security_type'] ?? '';
    $this->ssid = $s['ssid'] ?? '';
  }
}

type NetworkProfileDataList = vec<NetworkProfileData>;

type NetworkProfileDescription = string;

type NetworkProfileName = string;

type NetworkSecurityType = string;

type NetworkSsid = string;

type NewInThisVersionBulletPoints = vec<BulletPoint>;

type NextToken = string;

type NextWiFiPassword = string;

class NotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OneClickIdDelay = string;

type OneClickPinDelay = string;

type OrganizationName = string;

type OutboundPhoneNumber = string;

class PSTNDialIn {
  public ?CountryCode $country_code;
  public ?OneClickIdDelay $one_click_id_delay;
  public ?OneClickPinDelay $one_click_pin_delay;
  public ?OutboundPhoneNumber $phone_number;

  public function __construct(shape(
    ?'country_code' => ?CountryCode,
    ?'one_click_id_delay' => ?OneClickIdDelay,
    ?'one_click_pin_delay' => ?OneClickPinDelay,
    ?'phone_number' => ?OutboundPhoneNumber,
  ) $s = shape()) {
    $this->country_code = $s['country_code'] ?? '';
    $this->one_click_id_delay = $s['one_click_id_delay'] ?? '';
    $this->one_click_pin_delay = $s['one_click_pin_delay'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
  }
}

class PhoneNumber {
  public ?RawPhoneNumber $number;
  public ?PhoneNumberType $type;

  public function __construct(shape(
    ?'number' => ?RawPhoneNumber,
    ?'type' => ?PhoneNumberType,
  ) $s = shape()) {
    $this->number = $s['number'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type PhoneNumberList = vec<PhoneNumber>;

type PhoneNumberType = string;

type PrivacyPolicy = string;

type ProductDescription = string;

type ProductId = string;

class Profile {
  public ?Address $address;
  public ?Arn $address_book_arn;
  public ?DistanceUnit $distance_unit;
  public bool $is_default;
  public ?DeviceLocale $locale;
  public ?MaxVolumeLimit $max_volume_limit;
  public ?MeetingRoomConfiguration $meeting_room_configuration;
  public bool $pstn_enabled;
  public ?Arn $profile_arn;
  public ?ProfileName $profile_name;
  public bool $setup_mode_disabled;
  public ?TemperatureUnit $temperature_unit;
  public ?Timezone $timezone;
  public ?WakeWord $wake_word;

  public function __construct(shape(
    ?'address' => ?Address,
    ?'address_book_arn' => ?Arn,
    ?'distance_unit' => ?DistanceUnit,
    ?'is_default' => bool,
    ?'locale' => ?DeviceLocale,
    ?'max_volume_limit' => ?MaxVolumeLimit,
    ?'meeting_room_configuration' => ?MeetingRoomConfiguration,
    ?'pstn_enabled' => bool,
    ?'profile_arn' => ?Arn,
    ?'profile_name' => ?ProfileName,
    ?'setup_mode_disabled' => bool,
    ?'temperature_unit' => ?TemperatureUnit,
    ?'timezone' => ?Timezone,
    ?'wake_word' => ?WakeWord,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->address_book_arn = $s['address_book_arn'] ?? '';
    $this->distance_unit = $s['distance_unit'] ?? '';
    $this->is_default = $s['is_default'] ?? false;
    $this->locale = $s['locale'] ?? '';
    $this->max_volume_limit = $s['max_volume_limit'] ?? 0;
    $this->meeting_room_configuration = $s['meeting_room_configuration'] ?? null;
    $this->pstn_enabled = $s['pstn_enabled'] ?? false;
    $this->profile_arn = $s['profile_arn'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->setup_mode_disabled = $s['setup_mode_disabled'] ?? false;
    $this->temperature_unit = $s['temperature_unit'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->wake_word = $s['wake_word'] ?? '';
  }
}

class ProfileData {
  public ?Address $address;
  public ?DistanceUnit $distance_unit;
  public bool $is_default;
  public ?DeviceLocale $locale;
  public ?Arn $profile_arn;
  public ?ProfileName $profile_name;
  public ?TemperatureUnit $temperature_unit;
  public ?Timezone $timezone;
  public ?WakeWord $wake_word;

  public function __construct(shape(
    ?'address' => ?Address,
    ?'distance_unit' => ?DistanceUnit,
    ?'is_default' => bool,
    ?'locale' => ?DeviceLocale,
    ?'profile_arn' => ?Arn,
    ?'profile_name' => ?ProfileName,
    ?'temperature_unit' => ?TemperatureUnit,
    ?'timezone' => ?Timezone,
    ?'wake_word' => ?WakeWord,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->distance_unit = $s['distance_unit'] ?? '';
    $this->is_default = $s['is_default'] ?? false;
    $this->locale = $s['locale'] ?? '';
    $this->profile_arn = $s['profile_arn'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->temperature_unit = $s['temperature_unit'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->wake_word = $s['wake_word'] ?? '';
  }
}

type ProfileDataList = vec<ProfileData>;

type ProfileName = string;

type ProviderCalendarId = string;

class PutConferencePreferenceRequest {
  public ?ConferencePreference $conference_preference;

  public function __construct(shape(
    ?'conference_preference' => ?ConferencePreference,
  ) $s = shape()) {
    $this->conference_preference = $s['conference_preference'] ?? null;
  }
}

class PutConferencePreferenceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutInvitationConfigurationRequest {
  public ?Email $contact_email;
  public ?OrganizationName $organization_name;
  public ?ShortSkillIdList $private_skill_ids;

  public function __construct(shape(
    ?'contact_email' => ?Email,
    ?'organization_name' => ?OrganizationName,
    ?'private_skill_ids' => ?ShortSkillIdList,
  ) $s = shape()) {
    $this->contact_email = $s['contact_email'] ?? '';
    $this->organization_name = $s['organization_name'] ?? '';
    $this->private_skill_ids = $s['private_skill_ids'] ?? vec[];
  }
}

class PutInvitationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutRoomSkillParameterRequest {
  public ?Arn $room_arn;
  public ?RoomSkillParameter $room_skill_parameter;
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
    ?'room_skill_parameter' => ?RoomSkillParameter,
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
    $this->room_skill_parameter = $s['room_skill_parameter'] ?? null;
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class PutRoomSkillParameterResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutSkillAuthorizationRequest {
  public ?AuthorizationResult $authorization_result;
  public ?Arn $room_arn;
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'authorization_result' => ?AuthorizationResult,
    ?'room_arn' => ?Arn,
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->authorization_result = $s['authorization_result'] ?? dict[];
    $this->room_arn = $s['room_arn'] ?? '';
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class PutSkillAuthorizationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RawPhoneNumber = string;

class RegisterAVSDeviceRequest {
  public ?AmazonId $amazon_id;
  public ?ClientId $client_id;
  public ?DeviceSerialNumberForAVS $device_serial_number;
  public ?ProductId $product_id;
  public ?UserCode $user_code;

  public function __construct(shape(
    ?'amazon_id' => ?AmazonId,
    ?'client_id' => ?ClientId,
    ?'device_serial_number' => ?DeviceSerialNumberForAVS,
    ?'product_id' => ?ProductId,
    ?'user_code' => ?UserCode,
  ) $s = shape()) {
    $this->amazon_id = $s['amazon_id'] ?? '';
    $this->client_id = $s['client_id'] ?? '';
    $this->device_serial_number = $s['device_serial_number'] ?? '';
    $this->product_id = $s['product_id'] ?? '';
    $this->user_code = $s['user_code'] ?? '';
  }
}

class RegisterAVSDeviceResponse {
  public ?Arn $device_arn;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
  }
}

class RejectSkillRequest {
  public ?SkillId $skill_id;

  public function __construct(shape(
    ?'skill_id' => ?SkillId,
  ) $s = shape()) {
    $this->skill_id = $s['skill_id'] ?? '';
  }
}

class RejectSkillResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReleaseDate = string;

class RequireCheckIn {
  public bool $enabled;
  public ?Minutes $release_after_minutes;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'release_after_minutes' => ?Minutes,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->release_after_minutes = $s['release_after_minutes'] ?? 0;
  }
}

type RequirePin = string;

class ResolveRoomRequest {
  public ?SkillId $skill_id;
  public ?UserId $user_id;

  public function __construct(shape(
    ?'skill_id' => ?SkillId,
    ?'user_id' => ?UserId,
  ) $s = shape()) {
    $this->skill_id = $s['skill_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class ResolveRoomResponse {
  public ?Arn $room_arn;
  public ?RoomName $room_name;
  public ?RoomSkillParameters $room_skill_parameters;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
    ?'room_name' => ?RoomName,
    ?'room_skill_parameters' => ?RoomSkillParameters,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
    $this->room_name = $s['room_name'] ?? '';
    $this->room_skill_parameters = $s['room_skill_parameters'] ?? vec[];
  }
}

class ResourceAssociatedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceInUseException {
  public ?ClientRequestToken $client_request_token;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ReviewKey = string;

type ReviewValue = string;

type Reviews = dict<ReviewKey, ReviewValue>;

class RevokeInvitationRequest {
  public ?EnrollmentId $enrollment_id;
  public ?Arn $user_arn;

  public function __construct(shape(
    ?'enrollment_id' => ?EnrollmentId,
    ?'user_arn' => ?Arn,
  ) $s = shape()) {
    $this->enrollment_id = $s['enrollment_id'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class RevokeInvitationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Room {
  public ?RoomDescription $description;
  public ?Arn $profile_arn;
  public ?ProviderCalendarId $provider_calendar_id;
  public ?Arn $room_arn;
  public ?RoomName $room_name;

  public function __construct(shape(
    ?'description' => ?RoomDescription,
    ?'profile_arn' => ?Arn,
    ?'provider_calendar_id' => ?ProviderCalendarId,
    ?'room_arn' => ?Arn,
    ?'room_name' => ?RoomName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->profile_arn = $s['profile_arn'] ?? '';
    $this->provider_calendar_id = $s['provider_calendar_id'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
    $this->room_name = $s['room_name'] ?? '';
  }
}

class RoomData {
  public ?RoomDescription $description;
  public ?Arn $profile_arn;
  public ?ProfileName $profile_name;
  public ?ProviderCalendarId $provider_calendar_id;
  public ?Arn $room_arn;
  public ?RoomName $room_name;

  public function __construct(shape(
    ?'description' => ?RoomDescription,
    ?'profile_arn' => ?Arn,
    ?'profile_name' => ?ProfileName,
    ?'provider_calendar_id' => ?ProviderCalendarId,
    ?'room_arn' => ?Arn,
    ?'room_name' => ?RoomName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->profile_arn = $s['profile_arn'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->provider_calendar_id = $s['provider_calendar_id'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
    $this->room_name = $s['room_name'] ?? '';
  }
}

type RoomDataList = vec<RoomData>;

type RoomDescription = string;

type RoomName = string;

class RoomSkillParameter {
  public ?RoomSkillParameterKey $parameter_key;
  public ?RoomSkillParameterValue $parameter_value;

  public function __construct(shape(
    ?'parameter_key' => ?RoomSkillParameterKey,
    ?'parameter_value' => ?RoomSkillParameterValue,
  ) $s = shape()) {
    $this->parameter_key = $s['parameter_key'] ?? '';
    $this->parameter_value = $s['parameter_value'] ?? '';
  }
}

type RoomSkillParameterKey = string;

type RoomSkillParameterValue = string;

type RoomSkillParameters = vec<RoomSkillParameter>;

type S3KeyPrefix = string;

type SampleUtterances = vec<Utterance>;

class SearchAddressBooksRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchAddressBooksResponse {
  public ?AddressBookDataList $address_books;
  public ?NextToken $next_token;
  public ?TotalCount $total_count;

  public function __construct(shape(
    ?'address_books' => ?AddressBookDataList,
    ?'next_token' => ?NextToken,
    ?'total_count' => ?TotalCount,
  ) $s = shape()) {
    $this->address_books = $s['address_books'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class SearchContactsRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchContactsResponse {
  public ?ContactDataList $contacts;
  public ?NextToken $next_token;
  public ?TotalCount $total_count;

  public function __construct(shape(
    ?'contacts' => ?ContactDataList,
    ?'next_token' => ?NextToken,
    ?'total_count' => ?TotalCount,
  ) $s = shape()) {
    $this->contacts = $s['contacts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class SearchDevicesRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchDevicesResponse {
  public ?DeviceDataList $devices;
  public ?NextToken $next_token;
  public ?TotalCount $total_count;

  public function __construct(shape(
    ?'devices' => ?DeviceDataList,
    ?'next_token' => ?NextToken,
    ?'total_count' => ?TotalCount,
  ) $s = shape()) {
    $this->devices = $s['devices'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class SearchNetworkProfilesRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchNetworkProfilesResponse {
  public ?NetworkProfileDataList $network_profiles;
  public ?NextToken $next_token;
  public ?TotalCount $total_count;

  public function __construct(shape(
    ?'network_profiles' => ?NetworkProfileDataList,
    ?'next_token' => ?NextToken,
    ?'total_count' => ?TotalCount,
  ) $s = shape()) {
    $this->network_profiles = $s['network_profiles'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class SearchProfilesRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchProfilesResponse {
  public ?NextToken $next_token;
  public ?ProfileDataList $profiles;
  public ?TotalCount $total_count;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'profiles' => ?ProfileDataList,
    ?'total_count' => ?TotalCount,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->profiles = $s['profiles'] ?? vec[];
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class SearchRoomsRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchRoomsResponse {
  public ?NextToken $next_token;
  public ?RoomDataList $rooms;
  public ?TotalCount $total_count;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'rooms' => ?RoomDataList,
    ?'total_count' => ?TotalCount,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->rooms = $s['rooms'] ?? vec[];
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class SearchSkillGroupsRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchSkillGroupsResponse {
  public ?NextToken $next_token;
  public ?SkillGroupDataList $skill_groups;
  public ?TotalCount $total_count;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'skill_groups' => ?SkillGroupDataList,
    ?'total_count' => ?TotalCount,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->skill_groups = $s['skill_groups'] ?? vec[];
    $this->total_count = $s['total_count'] ?? 0;
  }
}

class SearchUsersRequest {
  public ?FilterList $filters;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?SortList $sort_criteria;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'sort_criteria' => ?SortList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort_criteria = $s['sort_criteria'] ?? vec[];
  }
}

class SearchUsersResponse {
  public ?NextToken $next_token;
  public ?TotalCount $total_count;
  public ?UserDataList $users;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'total_count' => ?TotalCount,
    ?'users' => ?UserDataList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->total_count = $s['total_count'] ?? 0;
    $this->users = $s['users'] ?? vec[];
  }
}

class SendAnnouncementRequest {
  public ?ClientRequestToken $client_request_token;
  public ?Content $content;
  public ?FilterList $room_filters;
  public ?TimeToLiveInSeconds $time_to_live_in_seconds;

  public function __construct(shape(
    ?'client_request_token' => ?ClientRequestToken,
    ?'content' => ?Content,
    ?'room_filters' => ?FilterList,
    ?'time_to_live_in_seconds' => ?TimeToLiveInSeconds,
  ) $s = shape()) {
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->content = $s['content'] ?? null;
    $this->room_filters = $s['room_filters'] ?? vec[];
    $this->time_to_live_in_seconds = $s['time_to_live_in_seconds'] ?? 0;
  }
}

class SendAnnouncementResponse {
  public ?Arn $announcement_arn;

  public function __construct(shape(
    ?'announcement_arn' => ?Arn,
  ) $s = shape()) {
    $this->announcement_arn = $s['announcement_arn'] ?? '';
  }
}

class SendInvitationRequest {
  public ?Arn $user_arn;

  public function __construct(shape(
    ?'user_arn' => ?Arn,
  ) $s = shape()) {
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class SendInvitationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ShortDescription = string;

type ShortSkillIdList = vec<SkillId>;

class SipAddress {
  public ?SipType $type;
  public ?SipUri $uri;

  public function __construct(shape(
    ?'type' => ?SipType,
    ?'uri' => ?SipUri,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
    $this->uri = $s['uri'] ?? '';
  }
}

type SipAddressList = vec<SipAddress>;

type SipType = string;

type SipUri = string;

class SkillDetails {
  public ?BulletPoints $bullet_points;
  public ?DeveloperInfo $developer_info;
  public ?EndUserLicenseAgreement $end_user_license_agreement;
  public ?GenericKeywords $generic_keywords;
  public ?InvocationPhrase $invocation_phrase;
  public ?NewInThisVersionBulletPoints $new_in_this_version_bullet_points;
  public ?ProductDescription $product_description;
  public ?ReleaseDate $release_date;
  public ?Reviews $reviews;
  public ?SkillTypes $skill_types;

  public function __construct(shape(
    ?'bullet_points' => ?BulletPoints,
    ?'developer_info' => ?DeveloperInfo,
    ?'end_user_license_agreement' => ?EndUserLicenseAgreement,
    ?'generic_keywords' => ?GenericKeywords,
    ?'invocation_phrase' => ?InvocationPhrase,
    ?'new_in_this_version_bullet_points' => ?NewInThisVersionBulletPoints,
    ?'product_description' => ?ProductDescription,
    ?'release_date' => ?ReleaseDate,
    ?'reviews' => ?Reviews,
    ?'skill_types' => ?SkillTypes,
  ) $s = shape()) {
    $this->bullet_points = $s['bullet_points'] ?? vec[];
    $this->developer_info = $s['developer_info'] ?? null;
    $this->end_user_license_agreement = $s['end_user_license_agreement'] ?? '';
    $this->generic_keywords = $s['generic_keywords'] ?? vec[];
    $this->invocation_phrase = $s['invocation_phrase'] ?? '';
    $this->new_in_this_version_bullet_points = $s['new_in_this_version_bullet_points'] ?? vec[];
    $this->product_description = $s['product_description'] ?? '';
    $this->release_date = $s['release_date'] ?? '';
    $this->reviews = $s['reviews'] ?? dict[];
    $this->skill_types = $s['skill_types'] ?? vec[];
  }
}

class SkillGroup {
  public ?SkillGroupDescription $description;
  public ?Arn $skill_group_arn;
  public ?SkillGroupName $skill_group_name;

  public function __construct(shape(
    ?'description' => ?SkillGroupDescription,
    ?'skill_group_arn' => ?Arn,
    ?'skill_group_name' => ?SkillGroupName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
    $this->skill_group_name = $s['skill_group_name'] ?? '';
  }
}

class SkillGroupData {
  public ?SkillGroupDescription $description;
  public ?Arn $skill_group_arn;
  public ?SkillGroupName $skill_group_name;

  public function __construct(shape(
    ?'description' => ?SkillGroupDescription,
    ?'skill_group_arn' => ?Arn,
    ?'skill_group_name' => ?SkillGroupName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
    $this->skill_group_name = $s['skill_group_name'] ?? '';
  }
}

type SkillGroupDataList = vec<SkillGroupData>;

type SkillGroupDescription = string;

type SkillGroupName = string;

type SkillId = string;

type SkillListMaxResults = int;

type SkillName = string;

class SkillNotLinkedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SkillStoreType = string;

class SkillSummary {
  public ?EnablementType $enablement_type;
  public ?SkillId $skill_id;
  public ?SkillName $skill_name;
  public ?SkillType $skill_type;
  public ?boolean $supports_linking;

  public function __construct(shape(
    ?'enablement_type' => ?EnablementType,
    ?'skill_id' => ?SkillId,
    ?'skill_name' => ?SkillName,
    ?'skill_type' => ?SkillType,
    ?'supports_linking' => ?boolean,
  ) $s = shape()) {
    $this->enablement_type = $s['enablement_type'] ?? '';
    $this->skill_id = $s['skill_id'] ?? '';
    $this->skill_name = $s['skill_name'] ?? '';
    $this->skill_type = $s['skill_type'] ?? '';
    $this->supports_linking = $s['supports_linking'] ?? false;
  }
}

type SkillSummaryList = vec<SkillSummary>;

type SkillType = string;

type SkillTypeFilter = string;

type SkillTypes = vec<SkillStoreType>;

class SkillsStoreSkill {
  public ?IconUrl $icon_url;
  public ?SampleUtterances $sample_utterances;
  public ?ShortDescription $short_description;
  public ?SkillDetails $skill_details;
  public ?SkillId $skill_id;
  public ?SkillName $skill_name;
  public ?boolean $supports_linking;

  public function __construct(shape(
    ?'icon_url' => ?IconUrl,
    ?'sample_utterances' => ?SampleUtterances,
    ?'short_description' => ?ShortDescription,
    ?'skill_details' => ?SkillDetails,
    ?'skill_id' => ?SkillId,
    ?'skill_name' => ?SkillName,
    ?'supports_linking' => ?boolean,
  ) $s = shape()) {
    $this->icon_url = $s['icon_url'] ?? '';
    $this->sample_utterances = $s['sample_utterances'] ?? vec[];
    $this->short_description = $s['short_description'] ?? '';
    $this->skill_details = $s['skill_details'] ?? null;
    $this->skill_id = $s['skill_id'] ?? '';
    $this->skill_name = $s['skill_name'] ?? '';
    $this->supports_linking = $s['supports_linking'] ?? false;
  }
}

type SkillsStoreSkillList = vec<SkillsStoreSkill>;

class SmartHomeAppliance {
  public ?ApplianceDescription $description;
  public ?ApplianceFriendlyName $friendly_name;
  public ?ApplianceManufacturerName $manufacturer_name;

  public function __construct(shape(
    ?'description' => ?ApplianceDescription,
    ?'friendly_name' => ?ApplianceFriendlyName,
    ?'manufacturer_name' => ?ApplianceManufacturerName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->friendly_name = $s['friendly_name'] ?? '';
    $this->manufacturer_name = $s['manufacturer_name'] ?? '';
  }
}

type SmartHomeApplianceList = vec<SmartHomeAppliance>;

type SoftwareVersion = string;

class Sort {
  public ?SortKey $key;
  public ?SortValue $value;

  public function __construct(shape(
    ?'key' => ?SortKey,
    ?'value' => ?SortValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type SortKey = string;

type SortList = vec<Sort>;

type SortValue = string;

class Ssml {
  public ?Locale $locale;
  public ?SsmlValue $value;

  public function __construct(shape(
    ?'locale' => ?Locale,
    ?'value' => ?SsmlValue,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type SsmlList = vec<Ssml>;

type SsmlValue = string;

class StartDeviceSyncRequest {
  public ?Arn $device_arn;
  public ?Features $features;
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
    ?'features' => ?Features,
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
    $this->features = $s['features'] ?? vec[];
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class StartDeviceSyncResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartSmartHomeApplianceDiscoveryRequest {
  public ?Arn $room_arn;

  public function __construct(shape(
    ?'room_arn' => ?Arn,
  ) $s = shape()) {
    $this->room_arn = $s['room_arn'] ?? '';
  }
}

class StartSmartHomeApplianceDiscoveryResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

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

class TagResourceRequest {
  public ?Arn $arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TemperatureUnit = string;

class Text {
  public ?Locale $locale;
  public ?TextValue $value;

  public function __construct(shape(
    ?'locale' => ?Locale,
    ?'value' => ?TextValue,
  ) $s = shape()) {
    $this->locale = $s['locale'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TextList = vec<Text>;

type TextValue = string;

type TimeToLiveInSeconds = int;

type Timezone = string;

type TotalCount = int;

type TrustAnchor = string;

type TrustAnchorList = vec<TrustAnchor>;

class UnauthorizedException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?Arn $arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAddressBookRequest {
  public ?Arn $address_book_arn;
  public ?AddressBookDescription $description;
  public ?AddressBookName $name;

  public function __construct(shape(
    ?'address_book_arn' => ?Arn,
    ?'description' => ?AddressBookDescription,
    ?'name' => ?AddressBookName,
  ) $s = shape()) {
    $this->address_book_arn = $s['address_book_arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateBusinessReportScheduleRequest {
  public ?BusinessReportFormat $format;
  public ?BusinessReportRecurrence $recurrence;
  public ?CustomerS3BucketName $s_3_bucket_name;
  public ?S3KeyPrefix $s_3_key_prefix;
  public ?Arn $schedule_arn;
  public ?BusinessReportScheduleName $schedule_name;

  public function __construct(shape(
    ?'format' => ?BusinessReportFormat,
    ?'recurrence' => ?BusinessReportRecurrence,
    ?'s_3_bucket_name' => ?CustomerS3BucketName,
    ?'s_3_key_prefix' => ?S3KeyPrefix,
    ?'schedule_arn' => ?Arn,
    ?'schedule_name' => ?BusinessReportScheduleName,
  ) $s = shape()) {
    $this->format = $s['format'] ?? '';
    $this->recurrence = $s['recurrence'] ?? null;
    $this->s_3_bucket_name = $s['s_3_bucket_name'] ?? '';
    $this->s_3_key_prefix = $s['s_3_key_prefix'] ?? '';
    $this->schedule_arn = $s['schedule_arn'] ?? '';
    $this->schedule_name = $s['schedule_name'] ?? '';
  }
}

class UpdateBusinessReportScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateConferenceProviderRequest {
  public ?Arn $conference_provider_arn;
  public ?ConferenceProviderType $conference_provider_type;
  public ?IPDialIn $ip_dial_in;
  public ?MeetingSetting $meeting_setting;
  public ?PSTNDialIn $pstn_dial_in;

  public function __construct(shape(
    ?'conference_provider_arn' => ?Arn,
    ?'conference_provider_type' => ?ConferenceProviderType,
    ?'ip_dial_in' => ?IPDialIn,
    ?'meeting_setting' => ?MeetingSetting,
    ?'pstn_dial_in' => ?PSTNDialIn,
  ) $s = shape()) {
    $this->conference_provider_arn = $s['conference_provider_arn'] ?? '';
    $this->conference_provider_type = $s['conference_provider_type'] ?? '';
    $this->ip_dial_in = $s['ip_dial_in'] ?? null;
    $this->meeting_setting = $s['meeting_setting'] ?? null;
    $this->pstn_dial_in = $s['pstn_dial_in'] ?? null;
  }
}

class UpdateConferenceProviderResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateContactRequest {
  public ?Arn $contact_arn;
  public ?ContactName $display_name;
  public ?ContactName $first_name;
  public ?ContactName $last_name;
  public ?RawPhoneNumber $phone_number;
  public ?PhoneNumberList $phone_numbers;
  public ?SipAddressList $sip_addresses;

  public function __construct(shape(
    ?'contact_arn' => ?Arn,
    ?'display_name' => ?ContactName,
    ?'first_name' => ?ContactName,
    ?'last_name' => ?ContactName,
    ?'phone_number' => ?RawPhoneNumber,
    ?'phone_numbers' => ?PhoneNumberList,
    ?'sip_addresses' => ?SipAddressList,
  ) $s = shape()) {
    $this->contact_arn = $s['contact_arn'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->phone_numbers = $s['phone_numbers'] ?? vec[];
    $this->sip_addresses = $s['sip_addresses'] ?? vec[];
  }
}

class UpdateContactResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDeviceRequest {
  public ?Arn $device_arn;
  public ?DeviceName $device_name;

  public function __construct(shape(
    ?'device_arn' => ?Arn,
    ?'device_name' => ?DeviceName,
  ) $s = shape()) {
    $this->device_arn = $s['device_arn'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
  }
}

class UpdateDeviceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateEndOfMeetingReminder {
  public bool $enabled;
  public ?EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public ?EndOfMeetingReminderType $reminder_type;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'reminder_at_minutes' => ?EndOfMeetingReminderMinutesList,
    ?'reminder_type' => ?EndOfMeetingReminderType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->reminder_at_minutes = $s['reminder_at_minutes'] ?? vec[];
    $this->reminder_type = $s['reminder_type'] ?? '';
  }
}

class UpdateGatewayGroupRequest {
  public ?GatewayGroupDescription $description;
  public ?Arn $gateway_group_arn;
  public ?GatewayGroupName $name;

  public function __construct(shape(
    ?'description' => ?GatewayGroupDescription,
    ?'gateway_group_arn' => ?Arn,
    ?'name' => ?GatewayGroupName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->gateway_group_arn = $s['gateway_group_arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateGatewayGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateGatewayRequest {
  public ?GatewayDescription $description;
  public ?Arn $gateway_arn;
  public ?GatewayName $name;
  public ?GatewayVersion $software_version;

  public function __construct(shape(
    ?'description' => ?GatewayDescription,
    ?'gateway_arn' => ?Arn,
    ?'name' => ?GatewayName,
    ?'software_version' => ?GatewayVersion,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->software_version = $s['software_version'] ?? '';
  }
}

class UpdateGatewayResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateInstantBooking {
  public ?Minutes $duration_in_minutes;
  public bool $enabled;

  public function __construct(shape(
    ?'duration_in_minutes' => ?Minutes,
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->duration_in_minutes = $s['duration_in_minutes'] ?? 0;
    $this->enabled = $s['enabled'] ?? false;
  }
}

class UpdateMeetingRoomConfiguration {
  public ?UpdateEndOfMeetingReminder $end_of_meeting_reminder;
  public ?UpdateInstantBooking $instant_booking;
  public ?UpdateRequireCheckIn $require_check_in;
  public bool $room_utilization_metrics_enabled;

  public function __construct(shape(
    ?'end_of_meeting_reminder' => ?UpdateEndOfMeetingReminder,
    ?'instant_booking' => ?UpdateInstantBooking,
    ?'require_check_in' => ?UpdateRequireCheckIn,
    ?'room_utilization_metrics_enabled' => bool,
  ) $s = shape()) {
    $this->end_of_meeting_reminder = $s['end_of_meeting_reminder'] ?? null;
    $this->instant_booking = $s['instant_booking'] ?? null;
    $this->require_check_in = $s['require_check_in'] ?? null;
    $this->room_utilization_metrics_enabled = $s['room_utilization_metrics_enabled'] ?? false;
  }
}

class UpdateNetworkProfileRequest {
  public ?Arn $certificate_authority_arn;
  public ?CurrentWiFiPassword $current_password;
  public ?NetworkProfileDescription $description;
  public ?Arn $network_profile_arn;
  public ?NetworkProfileName $network_profile_name;
  public ?NextWiFiPassword $next_password;
  public ?TrustAnchorList $trust_anchors;

  public function __construct(shape(
    ?'certificate_authority_arn' => ?Arn,
    ?'current_password' => ?CurrentWiFiPassword,
    ?'description' => ?NetworkProfileDescription,
    ?'network_profile_arn' => ?Arn,
    ?'network_profile_name' => ?NetworkProfileName,
    ?'next_password' => ?NextWiFiPassword,
    ?'trust_anchors' => ?TrustAnchorList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $s['certificate_authority_arn'] ?? '';
    $this->current_password = $s['current_password'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->network_profile_arn = $s['network_profile_arn'] ?? '';
    $this->network_profile_name = $s['network_profile_name'] ?? '';
    $this->next_password = $s['next_password'] ?? '';
    $this->trust_anchors = $s['trust_anchors'] ?? vec[];
  }
}

class UpdateNetworkProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateProfileRequest {
  public ?Address $address;
  public ?DistanceUnit $distance_unit;
  public bool $is_default;
  public ?DeviceLocale $locale;
  public ?MaxVolumeLimit $max_volume_limit;
  public ?UpdateMeetingRoomConfiguration $meeting_room_configuration;
  public bool $pstn_enabled;
  public ?Arn $profile_arn;
  public ?ProfileName $profile_name;
  public bool $setup_mode_disabled;
  public ?TemperatureUnit $temperature_unit;
  public ?Timezone $timezone;
  public ?WakeWord $wake_word;

  public function __construct(shape(
    ?'address' => ?Address,
    ?'distance_unit' => ?DistanceUnit,
    ?'is_default' => bool,
    ?'locale' => ?DeviceLocale,
    ?'max_volume_limit' => ?MaxVolumeLimit,
    ?'meeting_room_configuration' => ?UpdateMeetingRoomConfiguration,
    ?'pstn_enabled' => bool,
    ?'profile_arn' => ?Arn,
    ?'profile_name' => ?ProfileName,
    ?'setup_mode_disabled' => bool,
    ?'temperature_unit' => ?TemperatureUnit,
    ?'timezone' => ?Timezone,
    ?'wake_word' => ?WakeWord,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->distance_unit = $s['distance_unit'] ?? '';
    $this->is_default = $s['is_default'] ?? false;
    $this->locale = $s['locale'] ?? '';
    $this->max_volume_limit = $s['max_volume_limit'] ?? 0;
    $this->meeting_room_configuration = $s['meeting_room_configuration'] ?? null;
    $this->pstn_enabled = $s['pstn_enabled'] ?? false;
    $this->profile_arn = $s['profile_arn'] ?? '';
    $this->profile_name = $s['profile_name'] ?? '';
    $this->setup_mode_disabled = $s['setup_mode_disabled'] ?? false;
    $this->temperature_unit = $s['temperature_unit'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
    $this->wake_word = $s['wake_word'] ?? '';
  }
}

class UpdateProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateRequireCheckIn {
  public bool $enabled;
  public ?Minutes $release_after_minutes;

  public function __construct(shape(
    ?'enabled' => bool,
    ?'release_after_minutes' => ?Minutes,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->release_after_minutes = $s['release_after_minutes'] ?? 0;
  }
}

class UpdateRoomRequest {
  public ?RoomDescription $description;
  public ?Arn $profile_arn;
  public ?ProviderCalendarId $provider_calendar_id;
  public ?Arn $room_arn;
  public ?RoomName $room_name;

  public function __construct(shape(
    ?'description' => ?RoomDescription,
    ?'profile_arn' => ?Arn,
    ?'provider_calendar_id' => ?ProviderCalendarId,
    ?'room_arn' => ?Arn,
    ?'room_name' => ?RoomName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->profile_arn = $s['profile_arn'] ?? '';
    $this->provider_calendar_id = $s['provider_calendar_id'] ?? '';
    $this->room_arn = $s['room_arn'] ?? '';
    $this->room_name = $s['room_name'] ?? '';
  }
}

class UpdateRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSkillGroupRequest {
  public ?SkillGroupDescription $description;
  public ?Arn $skill_group_arn;
  public ?SkillGroupName $skill_group_name;

  public function __construct(shape(
    ?'description' => ?SkillGroupDescription,
    ?'skill_group_arn' => ?Arn,
    ?'skill_group_name' => ?SkillGroupName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->skill_group_arn = $s['skill_group_arn'] ?? '';
    $this->skill_group_name = $s['skill_group_name'] ?? '';
  }
}

class UpdateSkillGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Url = string;

type UserCode = string;

class UserData {
  public ?Email $email;
  public ?EnrollmentId $enrollment_id;
  public ?EnrollmentStatus $enrollment_status;
  public ?user_FirstName $first_name;
  public ?user_LastName $last_name;
  public ?Arn $user_arn;

  public function __construct(shape(
    ?'email' => ?Email,
    ?'enrollment_id' => ?EnrollmentId,
    ?'enrollment_status' => ?EnrollmentStatus,
    ?'first_name' => ?user_FirstName,
    ?'last_name' => ?user_LastName,
    ?'user_arn' => ?Arn,
  ) $s = shape()) {
    $this->email = $s['email'] ?? '';
    $this->enrollment_id = $s['enrollment_id'] ?? '';
    $this->enrollment_status = $s['enrollment_status'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

type UserDataList = vec<UserData>;

type UserId = string;

type Utterance = string;

type Value = string;

type WakeWord = string;

type boolean = bool;

type user_FirstName = string;

type user_LastName = string;

type user_UserId = string;

