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

type Address = string;

class AddressBook {
  public Arn $address_book_arn;
  public AddressBookDescription $description;
  public AddressBookName $name;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ?'description' => AddressBookDescription,
  ?'name' => AddressBookName,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
  }
}

class AddressBookData {
  public Arn $address_book_arn;
  public AddressBookDescription $description;
  public AddressBookName $name;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ?'description' => AddressBookDescription,
  ?'name' => AddressBookName,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
  }
}

type AddressBookDataList = vec<AddressBookData>;

type AddressBookDescription = string;

type AddressBookName = string;

class AlreadyExistsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type AmazonId = string;

type ApplianceDescription = string;

type ApplianceFriendlyName = string;

type ApplianceManufacturerName = string;

class ApproveSkillRequest {
  public SkillId $skill_id;

  public function __construct(shape(
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->skill_id = $skill_id ?? "";
  }
}

class ApproveSkillResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Arn = string;

class AssociateContactWithAddressBookRequest {
  public Arn $address_book_arn;
  public Arn $contact_arn;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ?'contact_arn' => Arn,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
    $this->contact_arn = $contact_arn ?? ;
  }
}

class AssociateContactWithAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDeviceWithNetworkProfileRequest {
  public Arn $device_arn;
  public Arn $network_profile_arn;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ?'network_profile_arn' => Arn,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
    $this->network_profile_arn = $network_profile_arn ?? ;
  }
}

class AssociateDeviceWithNetworkProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateDeviceWithRoomRequest {
  public Arn $device_arn;
  public Arn $room_arn;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
    $this->room_arn = $room_arn ?? ;
  }
}

class AssociateDeviceWithRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateSkillGroupWithRoomRequest {
  public Arn $room_arn;
  public Arn $skill_group_arn;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ?'skill_group_arn' => Arn,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
    $this->skill_group_arn = $skill_group_arn ?? ;
  }
}

class AssociateSkillGroupWithRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateSkillWithSkillGroupRequest {
  public Arn $skill_group_arn;
  public SkillId $skill_id;

  public function __construct(shape(
  ?'skill_group_arn' => Arn,
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->skill_group_arn = $skill_group_arn ?? ;
    $this->skill_id = $skill_id ?? "";
  }
}

class AssociateSkillWithSkillGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateSkillWithUsersRequest {
  public SkillId $skill_id;

  public function __construct(shape(
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->skill_id = $skill_id ?? "";
  }
}

class AssociateSkillWithUsersResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Audio {
  public Locale $locale;
  public AudioLocation $location;

  public function __construct(shape(
  ?'locale' => Locale,
  ?'location' => AudioLocation,
  ) $s = shape()) {
    $this->locale = $locale ?? "";
    $this->location = $location ?? ;
  }
}

type AudioList = vec<Audio>;

type AudioLocation = string;

type AuthorizationResult = dict<Key, Value>;

type Boolean = bool;

type BulletPoint = string;

type BulletPoints = vec<BulletPoint>;

class BusinessReport {
  public BusinessReportDeliveryTime $delivery_time;
  public BusinessReportDownloadUrl $download_url;
  public BusinessReportFailureCode $failure_code;
  public BusinessReportS3Location $s_3_location;
  public BusinessReportStatus $status;

  public function __construct(shape(
  ?'delivery_time' => BusinessReportDeliveryTime,
  ?'download_url' => BusinessReportDownloadUrl,
  ?'failure_code' => BusinessReportFailureCode,
  ?'s_3_location' => BusinessReportS3Location,
  ?'status' => BusinessReportStatus,
  ) $s = shape()) {
    $this->delivery_time = $delivery_time ?? ;
    $this->download_url = $download_url ?? ;
    $this->failure_code = $failure_code ?? ;
    $this->s_3_location = $s_3_location ?? ;
    $this->status = $status ?? ;
  }
}

class BusinessReportContentRange {
  public BusinessReportInterval $interval;

  public function __construct(shape(
  ?'interval' => BusinessReportInterval,
  ) $s = shape()) {
    $this->interval = $interval ?? ;
  }
}

type BusinessReportDeliveryTime = int;

type BusinessReportDownloadUrl = string;

type BusinessReportFailureCode = string;

type BusinessReportFormat = string;

type BusinessReportInterval = string;

class BusinessReportRecurrence {
  public Date $start_date;

  public function __construct(shape(
  ?'start_date' => Date,
  ) $s = shape()) {
    $this->start_date = $start_date ?? ;
  }
}

class BusinessReportS3Location {
  public CustomerS3BucketName $bucket_name;
  public BusinessReportS3Path $path;

  public function __construct(shape(
  ?'bucket_name' => CustomerS3BucketName,
  ?'path' => BusinessReportS3Path,
  ) $s = shape()) {
    $this->bucket_name = $bucket_name ?? ;
    $this->path = $path ?? ;
  }
}

type BusinessReportS3Path = string;

class BusinessReportSchedule {
  public BusinessReportContentRange $content_range;
  public BusinessReportFormat $format;
  public BusinessReport $last_business_report;
  public BusinessReportRecurrence $recurrence;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public Arn $schedule_arn;
  public BusinessReportScheduleName $schedule_name;

  public function __construct(shape(
  ?'content_range' => BusinessReportContentRange,
  ?'format' => BusinessReportFormat,
  ?'last_business_report' => BusinessReport,
  ?'recurrence' => BusinessReportRecurrence,
  ?'s_3_bucket_name' => CustomerS3BucketName,
  ?'s_3_key_prefix' => S3KeyPrefix,
  ?'schedule_arn' => Arn,
  ?'schedule_name' => BusinessReportScheduleName,
  ) $s = shape()) {
    $this->content_range = $content_range ?? ;
    $this->format = $format ?? ;
    $this->last_business_report = $last_business_report ?? ;
    $this->recurrence = $recurrence ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? "";
    $this->schedule_arn = $schedule_arn ?? ;
    $this->schedule_name = $schedule_name ?? ;
  }
}

type BusinessReportScheduleList = vec<BusinessReportSchedule>;

type BusinessReportScheduleName = string;

type BusinessReportStatus = string;

class Category {
  public CategoryId $category_id;
  public CategoryName $category_name;

  public function __construct(shape(
  ?'category_id' => CategoryId,
  ?'category_name' => CategoryName,
  ) $s = shape()) {
    $this->category_id = $category_id ?? 0;
    $this->category_name = $category_name ?? "";
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ConferencePreference {
  public Arn $default_conference_provider_arn;

  public function __construct(shape(
  ?'default_conference_provider_arn' => Arn,
  ) $s = shape()) {
    $this->default_conference_provider_arn = $default_conference_provider_arn ?? ;
  }
}

class ConferenceProvider {
  public Arn $arn;
  public IPDialIn $ip_dial_in;
  public MeetingSetting $meeting_setting;
  public ConferenceProviderName $name;
  public PSTNDialIn $pstn_dial_in;
  public ConferenceProviderType $type;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'ip_dial_in' => IPDialIn,
  ?'meeting_setting' => MeetingSetting,
  ?'name' => ConferenceProviderName,
  ?'pstn_dial_in' => PSTNDialIn,
  ?'type' => ConferenceProviderType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->ip_dial_in = $ip_dial_in ?? null;
    $this->meeting_setting = $meeting_setting ?? null;
    $this->name = $name ?? ;
    $this->pstn_dial_in = $pstn_dial_in ?? null;
    $this->type = $type ?? ;
  }
}

type ConferenceProviderName = string;

type ConferenceProviderType = string;

type ConferenceProvidersList = vec<ConferenceProvider>;

type ConnectionStatus = string;

type ConnectionStatusUpdatedTime = int;

class Contact {
  public Arn $contact_arn;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;

  public function __construct(shape(
  ?'contact_arn' => Arn,
  ?'display_name' => ContactName,
  ?'first_name' => ContactName,
  ?'last_name' => ContactName,
  ?'phone_number' => RawPhoneNumber,
  ?'phone_numbers' => PhoneNumberList,
  ?'sip_addresses' => SipAddressList,
  ) $s = shape()) {
    $this->contact_arn = $contact_arn ?? ;
    $this->display_name = $display_name ?? ;
    $this->first_name = $first_name ?? ;
    $this->last_name = $last_name ?? ;
    $this->phone_number = $phone_number ?? null;
    $this->phone_numbers = $phone_numbers ?? ;
    $this->sip_addresses = $sip_addresses ?? ;
  }
}

class ContactData {
  public Arn $contact_arn;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;

  public function __construct(shape(
  ?'contact_arn' => Arn,
  ?'display_name' => ContactName,
  ?'first_name' => ContactName,
  ?'last_name' => ContactName,
  ?'phone_number' => RawPhoneNumber,
  ?'phone_numbers' => PhoneNumberList,
  ?'sip_addresses' => SipAddressList,
  ) $s = shape()) {
    $this->contact_arn = $contact_arn ?? ;
    $this->display_name = $display_name ?? ;
    $this->first_name = $first_name ?? ;
    $this->last_name = $last_name ?? ;
    $this->phone_number = $phone_number ?? null;
    $this->phone_numbers = $phone_numbers ?? ;
    $this->sip_addresses = $sip_addresses ?? ;
  }
}

type ContactDataList = vec<ContactData>;

type ContactName = string;

class Content {
  public AudioList $audio_list;
  public SsmlList $ssml_list;
  public TextList $text_list;

  public function __construct(shape(
  ?'audio_list' => AudioList,
  ?'ssml_list' => SsmlList,
  ?'text_list' => TextList,
  ) $s = shape()) {
    $this->audio_list = $audio_list ?? [];
    $this->ssml_list = $ssml_list ?? [];
    $this->text_list = $text_list ?? [];
  }
}

type CountryCode = string;

class CreateAddressBookRequest {
  public ClientRequestToken $client_request_token;
  public AddressBookDescription $description;
  public AddressBookName $name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'description' => AddressBookDescription,
  ?'name' => AddressBookName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->description = $description ?? ;
    $this->name = $name ?? ;
  }
}

class CreateAddressBookResponse {
  public Arn $address_book_arn;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
  }
}

class CreateBusinessReportScheduleRequest {
  public ClientRequestToken $client_request_token;
  public BusinessReportContentRange $content_range;
  public BusinessReportFormat $format;
  public BusinessReportRecurrence $recurrence;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public BusinessReportScheduleName $schedule_name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'content_range' => BusinessReportContentRange,
  ?'format' => BusinessReportFormat,
  ?'recurrence' => BusinessReportRecurrence,
  ?'s_3_bucket_name' => CustomerS3BucketName,
  ?'s_3_key_prefix' => S3KeyPrefix,
  ?'schedule_name' => BusinessReportScheduleName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->content_range = $content_range ?? ;
    $this->format = $format ?? ;
    $this->recurrence = $recurrence ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? "";
    $this->schedule_name = $schedule_name ?? ;
  }
}

class CreateBusinessReportScheduleResponse {
  public Arn $schedule_arn;

  public function __construct(shape(
  ?'schedule_arn' => Arn,
  ) $s = shape()) {
    $this->schedule_arn = $schedule_arn ?? ;
  }
}

class CreateConferenceProviderRequest {
  public ClientRequestToken $client_request_token;
  public ConferenceProviderName $conference_provider_name;
  public ConferenceProviderType $conference_provider_type;
  public IPDialIn $ip_dial_in;
  public MeetingSetting $meeting_setting;
  public PSTNDialIn $pstn_dial_in;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'conference_provider_name' => ConferenceProviderName,
  ?'conference_provider_type' => ConferenceProviderType,
  ?'ip_dial_in' => IPDialIn,
  ?'meeting_setting' => MeetingSetting,
  ?'pstn_dial_in' => PSTNDialIn,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->conference_provider_name = $conference_provider_name ?? "";
    $this->conference_provider_type = $conference_provider_type ?? "";
    $this->ip_dial_in = $ip_dial_in ?? null;
    $this->meeting_setting = $meeting_setting ?? null;
    $this->pstn_dial_in = $pstn_dial_in ?? null;
  }
}

class CreateConferenceProviderResponse {
  public Arn $conference_provider_arn;

  public function __construct(shape(
  ?'conference_provider_arn' => Arn,
  ) $s = shape()) {
    $this->conference_provider_arn = $conference_provider_arn ?? ;
  }
}

class CreateContactRequest {
  public ClientRequestToken $client_request_token;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'display_name' => ContactName,
  ?'first_name' => ContactName,
  ?'last_name' => ContactName,
  ?'phone_number' => RawPhoneNumber,
  ?'phone_numbers' => PhoneNumberList,
  ?'sip_addresses' => SipAddressList,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->display_name = $display_name ?? ;
    $this->first_name = $first_name ?? ;
    $this->last_name = $last_name ?? ;
    $this->phone_number = $phone_number ?? null;
    $this->phone_numbers = $phone_numbers ?? ;
    $this->sip_addresses = $sip_addresses ?? ;
  }
}

class CreateContactResponse {
  public Arn $contact_arn;

  public function __construct(shape(
  ?'contact_arn' => Arn,
  ) $s = shape()) {
    $this->contact_arn = $contact_arn ?? ;
  }
}

class CreateEndOfMeetingReminder {
  public boolean $enabled;
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'reminder_at_minutes' => EndOfMeetingReminderMinutesList,
  ?'reminder_type' => EndOfMeetingReminderType,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->reminder_at_minutes = $reminder_at_minutes ?? ;
    $this->reminder_type = $reminder_type ?? ;
  }
}

class CreateGatewayGroupRequest {
  public ClientRequestToken $client_request_token;
  public GatewayGroupDescription $description;
  public GatewayGroupName $name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'description' => GatewayGroupDescription,
  ?'name' => GatewayGroupName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->description = $description ?? ;
    $this->name = $name ?? ;
  }
}

class CreateGatewayGroupResponse {
  public Arn $gateway_group_arn;

  public function __construct(shape(
  ?'gateway_group_arn' => Arn,
  ) $s = shape()) {
    $this->gateway_group_arn = $gateway_group_arn ?? ;
  }
}

class CreateInstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;

  public function __construct(shape(
  ?'duration_in_minutes' => Minutes,
  ?'enabled' => boolean,
  ) $s = shape()) {
    $this->duration_in_minutes = $duration_in_minutes ?? ;
    $this->enabled = $enabled ?? ;
  }
}

class CreateMeetingRoomConfiguration {
  public CreateEndOfMeetingReminder $end_of_meeting_reminder;
  public CreateInstantBooking $instant_booking;
  public CreateRequireCheckIn $require_check_in;
  public boolean $room_utilization_metrics_enabled;

  public function __construct(shape(
  ?'end_of_meeting_reminder' => CreateEndOfMeetingReminder,
  ?'instant_booking' => CreateInstantBooking,
  ?'require_check_in' => CreateRequireCheckIn,
  ?'room_utilization_metrics_enabled' => boolean,
  ) $s = shape()) {
    $this->end_of_meeting_reminder = $end_of_meeting_reminder ?? null;
    $this->instant_booking = $instant_booking ?? null;
    $this->require_check_in = $require_check_in ?? null;
    $this->room_utilization_metrics_enabled = $room_utilization_metrics_enabled ?? ;
  }
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

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'client_request_token' => ClientRequestToken,
  ?'current_password' => CurrentWiFiPassword,
  ?'description' => NetworkProfileDescription,
  ?'eap_method' => NetworkEapMethod,
  ?'network_profile_name' => NetworkProfileName,
  ?'next_password' => NextWiFiPassword,
  ?'security_type' => NetworkSecurityType,
  ?'ssid' => NetworkSsid,
  ?'trust_anchors' => TrustAnchorList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->client_request_token = $client_request_token ?? "";
    $this->current_password = $current_password ?? ;
    $this->description = $description ?? ;
    $this->eap_method = $eap_method ?? ;
    $this->network_profile_name = $network_profile_name ?? "";
    $this->next_password = $next_password ?? ;
    $this->security_type = $security_type ?? ;
    $this->ssid = $ssid ?? ;
    $this->trust_anchors = $trust_anchors ?? ;
  }
}

class CreateNetworkProfileResponse {
  public Arn $network_profile_arn;

  public function __construct(shape(
  ?'network_profile_arn' => Arn,
  ) $s = shape()) {
    $this->network_profile_arn = $network_profile_arn ?? ;
  }
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

  public function __construct(shape(
  ?'address' => Address,
  ?'client_request_token' => ClientRequestToken,
  ?'distance_unit' => DistanceUnit,
  ?'locale' => DeviceLocale,
  ?'max_volume_limit' => MaxVolumeLimit,
  ?'meeting_room_configuration' => CreateMeetingRoomConfiguration,
  ?'pstn_enabled' => boolean,
  ?'profile_name' => ProfileName,
  ?'setup_mode_disabled' => boolean,
  ?'temperature_unit' => TemperatureUnit,
  ?'timezone' => Timezone,
  ?'wake_word' => WakeWord,
  ) $s = shape()) {
    $this->address = $address ?? "";
    $this->client_request_token = $client_request_token ?? "";
    $this->distance_unit = $distance_unit ?? "";
    $this->locale = $locale ?? "";
    $this->max_volume_limit = $max_volume_limit ?? 0;
    $this->meeting_room_configuration = $meeting_room_configuration ?? null;
    $this->pstn_enabled = $pstn_enabled ?? ;
    $this->profile_name = $profile_name ?? "";
    $this->setup_mode_disabled = $setup_mode_disabled ?? ;
    $this->temperature_unit = $temperature_unit ?? "";
    $this->timezone = $timezone ?? "";
    $this->wake_word = $wake_word ?? "";
  }
}

class CreateProfileResponse {
  public Arn $profile_arn;

  public function __construct(shape(
  ?'profile_arn' => Arn,
  ) $s = shape()) {
    $this->profile_arn = $profile_arn ?? ;
  }
}

class CreateRequireCheckIn {
  public boolean $enabled;
  public Minutes $release_after_minutes;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'release_after_minutes' => Minutes,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->release_after_minutes = $release_after_minutes ?? ;
  }
}

class CreateRoomRequest {
  public ClientRequestToken $client_request_token;
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProviderCalendarId $provider_calendar_id;
  public RoomName $room_name;
  public TagList $tags;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'description' => RoomDescription,
  ?'profile_arn' => Arn,
  ?'provider_calendar_id' => ProviderCalendarId,
  ?'room_name' => RoomName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->description = $description ?? ;
    $this->profile_arn = $profile_arn ?? ;
    $this->provider_calendar_id = $provider_calendar_id ?? "";
    $this->room_name = $room_name ?? "";
    $this->tags = $tags ?? ;
  }
}

class CreateRoomResponse {
  public Arn $room_arn;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
  }
}

class CreateSkillGroupRequest {
  public ClientRequestToken $client_request_token;
  public SkillGroupDescription $description;
  public SkillGroupName $skill_group_name;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'description' => SkillGroupDescription,
  ?'skill_group_name' => SkillGroupName,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->description = $description ?? ;
    $this->skill_group_name = $skill_group_name ?? "";
  }
}

class CreateSkillGroupResponse {
  public Arn $skill_group_arn;

  public function __construct(shape(
  ?'skill_group_arn' => Arn,
  ) $s = shape()) {
    $this->skill_group_arn = $skill_group_arn ?? ;
  }
}

class CreateUserRequest {
  public ClientRequestToken $client_request_token;
  public Email $email;
  public user_FirstName $first_name;
  public user_LastName $last_name;
  public TagList $tags;
  public user_UserId $user_id;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'email' => Email,
  ?'first_name' => user_FirstName,
  ?'last_name' => user_LastName,
  ?'tags' => TagList,
  ?'user_id' => user_UserId,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->email = $email ?? "";
    $this->first_name = $first_name ?? ;
    $this->last_name = $last_name ?? ;
    $this->tags = $tags ?? ;
    $this->user_id = $user_id ?? "";
  }
}

class CreateUserResponse {
  public Arn $user_arn;

  public function __construct(shape(
  ?'user_arn' => Arn,
  ) $s = shape()) {
    $this->user_arn = $user_arn ?? ;
  }
}

type CurrentWiFiPassword = string;

type CustomerS3BucketName = string;

type Date = string;

class DeleteAddressBookRequest {
  public Arn $address_book_arn;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
  }
}

class DeleteAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteBusinessReportScheduleRequest {
  public Arn $schedule_arn;

  public function __construct(shape(
  ?'schedule_arn' => Arn,
  ) $s = shape()) {
    $this->schedule_arn = $schedule_arn ?? ;
  }
}

class DeleteBusinessReportScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteConferenceProviderRequest {
  public Arn $conference_provider_arn;

  public function __construct(shape(
  ?'conference_provider_arn' => Arn,
  ) $s = shape()) {
    $this->conference_provider_arn = $conference_provider_arn ?? ;
  }
}

class DeleteConferenceProviderResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteContactRequest {
  public Arn $contact_arn;

  public function __construct(shape(
  ?'contact_arn' => Arn,
  ) $s = shape()) {
    $this->contact_arn = $contact_arn ?? ;
  }
}

class DeleteContactResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDeviceRequest {
  public Arn $device_arn;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
  }
}

class DeleteDeviceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteDeviceUsageDataRequest {
  public Arn $device_arn;
  public DeviceUsageType $device_usage_type;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ?'device_usage_type' => DeviceUsageType,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
    $this->device_usage_type = $device_usage_type ?? "";
  }
}

class DeleteDeviceUsageDataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteGatewayGroupRequest {
  public Arn $gateway_group_arn;

  public function __construct(shape(
  ?'gateway_group_arn' => Arn,
  ) $s = shape()) {
    $this->gateway_group_arn = $gateway_group_arn ?? ;
  }
}

class DeleteGatewayGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNetworkProfileRequest {
  public Arn $network_profile_arn;

  public function __construct(shape(
  ?'network_profile_arn' => Arn,
  ) $s = shape()) {
    $this->network_profile_arn = $network_profile_arn ?? ;
  }
}

class DeleteNetworkProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteProfileRequest {
  public Arn $profile_arn;

  public function __construct(shape(
  ?'profile_arn' => Arn,
  ) $s = shape()) {
    $this->profile_arn = $profile_arn ?? ;
  }
}

class DeleteProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRoomRequest {
  public Arn $room_arn;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
  }
}

class DeleteRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteRoomSkillParameterRequest {
  public RoomSkillParameterKey $parameter_key;
  public Arn $room_arn;
  public SkillId $skill_id;

  public function __construct(shape(
  ?'parameter_key' => RoomSkillParameterKey,
  ?'room_arn' => Arn,
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->parameter_key = $parameter_key ?? ;
    $this->room_arn = $room_arn ?? ;
    $this->skill_id = $skill_id ?? "";
  }
}

class DeleteRoomSkillParameterResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSkillAuthorizationRequest {
  public Arn $room_arn;
  public SkillId $skill_id;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
    $this->skill_id = $skill_id ?? "";
  }
}

class DeleteSkillAuthorizationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSkillGroupRequest {
  public Arn $skill_group_arn;

  public function __construct(shape(
  ?'skill_group_arn' => Arn,
  ) $s = shape()) {
    $this->skill_group_arn = $skill_group_arn ?? ;
  }
}

class DeleteSkillGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUserRequest {
  public EnrollmentId $enrollment_id;
  public Arn $user_arn;

  public function __construct(shape(
  ?'enrollment_id' => EnrollmentId,
  ?'user_arn' => Arn,
  ) $s = shape()) {
    $this->enrollment_id = $enrollment_id ?? "";
    $this->user_arn = $user_arn ?? ;
  }
}

class DeleteUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeveloperInfo {
  public DeveloperName $developer_name;
  public Email $email;
  public PrivacyPolicy $privacy_policy;
  public Url $url;

  public function __construct(shape(
  ?'developer_name' => DeveloperName,
  ?'email' => Email,
  ?'privacy_policy' => PrivacyPolicy,
  ?'url' => Url,
  ) $s = shape()) {
    $this->developer_name = $developer_name ?? "";
    $this->email = $email ?? "";
    $this->privacy_policy = $privacy_policy ?? "";
    $this->url = $url ?? "";
  }
}

type DeveloperName = string;

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

  public function __construct(shape(
  ?'device_arn' => Arn,
  ?'device_name' => DeviceName,
  ?'device_serial_number' => DeviceSerialNumber,
  ?'device_status' => DeviceStatus,
  ?'device_status_info' => DeviceStatusInfo,
  ?'device_type' => DeviceType,
  ?'mac_address' => MacAddress,
  ?'network_profile_info' => DeviceNetworkProfileInfo,
  ?'room_arn' => Arn,
  ?'software_version' => SoftwareVersion,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
    $this->device_name = $device_name ?? "";
    $this->device_serial_number = $device_serial_number ?? "";
    $this->device_status = $device_status ?? "";
    $this->device_status_info = $device_status_info ?? null;
    $this->device_type = $device_type ?? "";
    $this->mac_address = $mac_address ?? "";
    $this->network_profile_info = $network_profile_info ?? ;
    $this->room_arn = $room_arn ?? ;
    $this->software_version = $software_version ?? "";
  }
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

  public function __construct(shape(
  ?'created_time' => DeviceDataCreatedTime,
  ?'device_arn' => Arn,
  ?'device_name' => DeviceName,
  ?'device_serial_number' => DeviceSerialNumber,
  ?'device_status' => DeviceStatus,
  ?'device_status_info' => DeviceStatusInfo,
  ?'device_type' => DeviceType,
  ?'mac_address' => MacAddress,
  ?'network_profile_arn' => Arn,
  ?'network_profile_name' => NetworkProfileName,
  ?'room_arn' => Arn,
  ?'room_name' => RoomName,
  ?'software_version' => SoftwareVersion,
  ) $s = shape()) {
    $this->created_time = $created_time ?? ;
    $this->device_arn = $device_arn ?? ;
    $this->device_name = $device_name ?? "";
    $this->device_serial_number = $device_serial_number ?? "";
    $this->device_status = $device_status ?? "";
    $this->device_status_info = $device_status_info ?? null;
    $this->device_type = $device_type ?? "";
    $this->mac_address = $mac_address ?? "";
    $this->network_profile_arn = $network_profile_arn ?? ;
    $this->network_profile_name = $network_profile_name ?? "";
    $this->room_arn = $room_arn ?? ;
    $this->room_name = $room_name ?? "";
    $this->software_version = $software_version ?? "";
  }
}

type DeviceDataCreatedTime = int;

type DeviceDataList = vec<DeviceData>;

class DeviceEvent {
  public DeviceEventTime $timestamp;
  public DeviceEventType $type;
  public DeviceEventValue $value;

  public function __construct(shape(
  ?'timestamp' => DeviceEventTime,
  ?'type' => DeviceEventType,
  ?'value' => DeviceEventValue,
  ) $s = shape()) {
    $this->timestamp = $timestamp ?? ;
    $this->type = $type ?? ;
    $this->value = $value ?? "";
  }
}

type DeviceEventList = vec<DeviceEvent>;

type DeviceEventTime = int;

type DeviceEventType = string;

type DeviceEventValue = string;

type DeviceLocale = string;

type DeviceName = string;

class DeviceNetworkProfileInfo {
  public Arn $certificate_arn;
  public CertificateTime $certificate_expiration_time;
  public Arn $network_profile_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'certificate_expiration_time' => CertificateTime,
  ?'network_profile_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_expiration_time = $certificate_expiration_time ?? ;
    $this->network_profile_arn = $network_profile_arn ?? ;
  }
}

class DeviceNotRegisteredException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type DeviceSerialNumber = string;

type DeviceSerialNumberForAVS = string;

type DeviceStatus = string;

class DeviceStatusDetail {
  public DeviceStatusDetailCode $code;
  public Feature $feature;

  public function __construct(shape(
  ?'code' => DeviceStatusDetailCode,
  ?'feature' => Feature,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->feature = $feature ?? "";
  }
}

type DeviceStatusDetailCode = string;

type DeviceStatusDetails = vec<DeviceStatusDetail>;

class DeviceStatusInfo {
  public ConnectionStatus $connection_status;
  public ConnectionStatusUpdatedTime $connection_status_updated_time;
  public DeviceStatusDetails $device_status_details;

  public function __construct(shape(
  ?'connection_status' => ConnectionStatus,
  ?'connection_status_updated_time' => ConnectionStatusUpdatedTime,
  ?'device_status_details' => DeviceStatusDetails,
  ) $s = shape()) {
    $this->connection_status = $connection_status ?? "";
    $this->connection_status_updated_time = $connection_status_updated_time ?? 0;
    $this->device_status_details = $device_status_details ?? [];
  }
}

type DeviceType = string;

type DeviceUsageType = string;

class DisassociateContactFromAddressBookRequest {
  public Arn $address_book_arn;
  public Arn $contact_arn;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ?'contact_arn' => Arn,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
    $this->contact_arn = $contact_arn ?? ;
  }
}

class DisassociateContactFromAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateDeviceFromRoomRequest {
  public Arn $device_arn;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
  }
}

class DisassociateDeviceFromRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateSkillFromSkillGroupRequest {
  public Arn $skill_group_arn;
  public SkillId $skill_id;

  public function __construct(shape(
  ?'skill_group_arn' => Arn,
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->skill_group_arn = $skill_group_arn ?? ;
    $this->skill_id = $skill_id ?? "";
  }
}

class DisassociateSkillFromSkillGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateSkillFromUsersRequest {
  public SkillId $skill_id;

  public function __construct(shape(
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->skill_id = $skill_id ?? "";
  }
}

class DisassociateSkillFromUsersResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateSkillGroupFromRoomRequest {
  public Arn $room_arn;
  public Arn $skill_group_arn;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ?'skill_group_arn' => Arn,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
    $this->skill_group_arn = $skill_group_arn ?? ;
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
  public boolean $enabled;
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'reminder_at_minutes' => EndOfMeetingReminderMinutesList,
  ?'reminder_type' => EndOfMeetingReminderType,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->reminder_at_minutes = $reminder_at_minutes ?? ;
    $this->reminder_type = $reminder_type ?? ;
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
  public FilterKey $key;
  public FilterValueList $values;

  public function __construct(shape(
  ?'key' => FilterKey,
  ?'values' => FilterValueList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? ;
  }
}

type FilterKey = string;

type FilterList = vec<Filter>;

type FilterValue = string;

type FilterValueList = vec<FilterValue>;

class ForgetSmartHomeAppliancesRequest {
  public Arn $room_arn;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
  }
}

class ForgetSmartHomeAppliancesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Gateway {
  public Arn $arn;
  public GatewayDescription $description;
  public Arn $gateway_group_arn;
  public GatewayName $name;
  public GatewayVersion $software_version;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'description' => GatewayDescription,
  ?'gateway_group_arn' => Arn,
  ?'name' => GatewayName,
  ?'software_version' => GatewayVersion,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? ;
    $this->gateway_group_arn = $gateway_group_arn ?? ;
    $this->name = $name ?? ;
    $this->software_version = $software_version ?? "";
  }
}

type GatewayDescription = string;

class GatewayGroup {
  public Arn $arn;
  public GatewayGroupDescription $description;
  public GatewayGroupName $name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'description' => GatewayGroupDescription,
  ?'name' => GatewayGroupName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? ;
    $this->name = $name ?? ;
  }
}

type GatewayGroupDescription = string;

type GatewayGroupName = string;

type GatewayGroupSummaries = vec<GatewayGroupSummary>;

class GatewayGroupSummary {
  public Arn $arn;
  public GatewayGroupDescription $description;
  public GatewayGroupName $name;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'description' => GatewayGroupDescription,
  ?'name' => GatewayGroupName,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? ;
    $this->name = $name ?? ;
  }
}

type GatewayName = string;

type GatewaySummaries = vec<GatewaySummary>;

class GatewaySummary {
  public Arn $arn;
  public GatewayDescription $description;
  public Arn $gateway_group_arn;
  public GatewayName $name;
  public GatewayVersion $software_version;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'description' => GatewayDescription,
  ?'gateway_group_arn' => Arn,
  ?'name' => GatewayName,
  ?'software_version' => GatewayVersion,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->description = $description ?? ;
    $this->gateway_group_arn = $gateway_group_arn ?? ;
    $this->name = $name ?? ;
    $this->software_version = $software_version ?? "";
  }
}

type GatewayVersion = string;

type GenericKeyword = string;

type GenericKeywords = vec<GenericKeyword>;

class GetAddressBookRequest {
  public Arn $address_book_arn;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
  }
}

class GetAddressBookResponse {
  public AddressBook $address_book;

  public function __construct(shape(
  ?'address_book' => AddressBook,
  ) $s = shape()) {
    $this->address_book = $address_book ?? null;
  }
}

class GetConferencePreferenceRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetConferencePreferenceResponse {
  public ConferencePreference $preference;

  public function __construct(shape(
  ?'preference' => ConferencePreference,
  ) $s = shape()) {
    $this->preference = $preference ?? ;
  }
}

class GetConferenceProviderRequest {
  public Arn $conference_provider_arn;

  public function __construct(shape(
  ?'conference_provider_arn' => Arn,
  ) $s = shape()) {
    $this->conference_provider_arn = $conference_provider_arn ?? ;
  }
}

class GetConferenceProviderResponse {
  public ConferenceProvider $conference_provider;

  public function __construct(shape(
  ?'conference_provider' => ConferenceProvider,
  ) $s = shape()) {
    $this->conference_provider = $conference_provider ?? null;
  }
}

class GetContactRequest {
  public Arn $contact_arn;

  public function __construct(shape(
  ?'contact_arn' => Arn,
  ) $s = shape()) {
    $this->contact_arn = $contact_arn ?? ;
  }
}

class GetContactResponse {
  public Contact $contact;

  public function __construct(shape(
  ?'contact' => Contact,
  ) $s = shape()) {
    $this->contact = $contact ?? null;
  }
}

class GetDeviceRequest {
  public Arn $device_arn;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
  }
}

class GetDeviceResponse {
  public Device $device;

  public function __construct(shape(
  ?'device' => Device,
  ) $s = shape()) {
    $this->device = $device ?? null;
  }
}

class GetGatewayGroupRequest {
  public Arn $gateway_group_arn;

  public function __construct(shape(
  ?'gateway_group_arn' => Arn,
  ) $s = shape()) {
    $this->gateway_group_arn = $gateway_group_arn ?? ;
  }
}

class GetGatewayGroupResponse {
  public GatewayGroup $gateway_group;

  public function __construct(shape(
  ?'gateway_group' => GatewayGroup,
  ) $s = shape()) {
    $this->gateway_group = $gateway_group ?? null;
  }
}

class GetGatewayRequest {
  public Arn $gateway_arn;

  public function __construct(shape(
  ?'gateway_arn' => Arn,
  ) $s = shape()) {
    $this->gateway_arn = $gateway_arn ?? ;
  }
}

class GetGatewayResponse {
  public Gateway $gateway;

  public function __construct(shape(
  ?'gateway' => Gateway,
  ) $s = shape()) {
    $this->gateway = $gateway ?? null;
  }
}

class GetInvitationConfigurationRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetInvitationConfigurationResponse {
  public Email $contact_email;
  public OrganizationName $organization_name;
  public ShortSkillIdList $private_skill_ids;

  public function __construct(shape(
  ?'contact_email' => Email,
  ?'organization_name' => OrganizationName,
  ?'private_skill_ids' => ShortSkillIdList,
  ) $s = shape()) {
    $this->contact_email = $contact_email ?? ;
    $this->organization_name = $organization_name ?? "";
    $this->private_skill_ids = $private_skill_ids ?? ;
  }
}

class GetNetworkProfileRequest {
  public Arn $network_profile_arn;

  public function __construct(shape(
  ?'network_profile_arn' => Arn,
  ) $s = shape()) {
    $this->network_profile_arn = $network_profile_arn ?? ;
  }
}

class GetNetworkProfileResponse {
  public NetworkProfile $network_profile;

  public function __construct(shape(
  ?'network_profile' => NetworkProfile,
  ) $s = shape()) {
    $this->network_profile = $network_profile ?? null;
  }
}

class GetProfileRequest {
  public Arn $profile_arn;

  public function __construct(shape(
  ?'profile_arn' => Arn,
  ) $s = shape()) {
    $this->profile_arn = $profile_arn ?? ;
  }
}

class GetProfileResponse {
  public Profile $profile;

  public function __construct(shape(
  ?'profile' => Profile,
  ) $s = shape()) {
    $this->profile = $profile ?? null;
  }
}

class GetRoomRequest {
  public Arn $room_arn;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
  }
}

class GetRoomResponse {
  public Room $room;

  public function __construct(shape(
  ?'room' => Room,
  ) $s = shape()) {
    $this->room = $room ?? null;
  }
}

class GetRoomSkillParameterRequest {
  public RoomSkillParameterKey $parameter_key;
  public Arn $room_arn;
  public SkillId $skill_id;

  public function __construct(shape(
  ?'parameter_key' => RoomSkillParameterKey,
  ?'room_arn' => Arn,
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->parameter_key = $parameter_key ?? ;
    $this->room_arn = $room_arn ?? ;
    $this->skill_id = $skill_id ?? "";
  }
}

class GetRoomSkillParameterResponse {
  public RoomSkillParameter $room_skill_parameter;

  public function __construct(shape(
  ?'room_skill_parameter' => RoomSkillParameter,
  ) $s = shape()) {
    $this->room_skill_parameter = $room_skill_parameter ?? null;
  }
}

class GetSkillGroupRequest {
  public Arn $skill_group_arn;

  public function __construct(shape(
  ?'skill_group_arn' => Arn,
  ) $s = shape()) {
    $this->skill_group_arn = $skill_group_arn ?? ;
  }
}

class GetSkillGroupResponse {
  public SkillGroup $skill_group;

  public function __construct(shape(
  ?'skill_group' => SkillGroup,
  ) $s = shape()) {
    $this->skill_group = $skill_group ?? null;
  }
}

class IPDialIn {
  public CommsProtocol $comms_protocol;
  public Endpoint $endpoint;

  public function __construct(shape(
  ?'comms_protocol' => CommsProtocol,
  ?'endpoint' => Endpoint,
  ) $s = shape()) {
    $this->comms_protocol = $comms_protocol ?? "";
    $this->endpoint = $endpoint ?? "";
  }
}

type IconUrl = string;

class InstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;

  public function __construct(shape(
  ?'duration_in_minutes' => Minutes,
  ?'enabled' => boolean,
  ) $s = shape()) {
    $this->duration_in_minutes = $duration_in_minutes ?? ;
    $this->enabled = $enabled ?? ;
  }
}

class InvalidCertificateAuthorityException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidDeviceException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidSecretsManagerResourceException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidServiceLinkedRoleStateException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidUserStatusException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type InvocationPhrase = string;

type Key = string;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListBusinessReportSchedulesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListBusinessReportSchedulesResponse {
  public BusinessReportScheduleList $business_report_schedules;
  public NextToken $next_token;

  public function __construct(shape(
  ?'business_report_schedules' => BusinessReportScheduleList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->business_report_schedules = $business_report_schedules ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListConferenceProvidersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListConferenceProvidersResponse {
  public ConferenceProvidersList $conference_providers;
  public NextToken $next_token;

  public function __construct(shape(
  ?'conference_providers' => ConferenceProvidersList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->conference_providers = $conference_providers ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListDeviceEventsRequest {
  public Arn $device_arn;
  public DeviceEventType $event_type;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ?'event_type' => DeviceEventType,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
    $this->event_type = $event_type ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDeviceEventsResponse {
  public DeviceEventList $device_events;
  public NextToken $next_token;

  public function __construct(shape(
  ?'device_events' => DeviceEventList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->device_events = $device_events ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListGatewayGroupsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListGatewayGroupsResponse {
  public GatewayGroupSummaries $gateway_groups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'gateway_groups' => GatewayGroupSummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->gateway_groups = $gateway_groups ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListGatewaysRequest {
  public Arn $gateway_group_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'gateway_group_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->gateway_group_arn = $gateway_group_arn ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListGatewaysResponse {
  public GatewaySummaries $gateways;
  public NextToken $next_token;

  public function __construct(shape(
  ?'gateways' => GatewaySummaries,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->gateways = $gateways ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListSkillsRequest {
  public EnablementTypeFilter $enablement_type;
  public SkillListMaxResults $max_results;
  public NextToken $next_token;
  public Arn $skill_group_arn;
  public SkillTypeFilter $skill_type;

  public function __construct(shape(
  ?'enablement_type' => EnablementTypeFilter,
  ?'max_results' => SkillListMaxResults,
  ?'next_token' => NextToken,
  ?'skill_group_arn' => Arn,
  ?'skill_type' => SkillTypeFilter,
  ) $s = shape()) {
    $this->enablement_type = $enablement_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->skill_group_arn = $skill_group_arn ?? ;
    $this->skill_type = $skill_type ?? "";
  }
}

class ListSkillsResponse {
  public NextToken $next_token;
  public SkillSummaryList $skill_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'skill_summaries' => SkillSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->skill_summaries = $skill_summaries ?? ;
  }
}

class ListSkillsStoreCategoriesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListSkillsStoreCategoriesResponse {
  public CategoryList $category_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'category_list' => CategoryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->category_list = $category_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListSkillsStoreSkillsByCategoryRequest {
  public CategoryId $category_id;
  public SkillListMaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'category_id' => CategoryId,
  ?'max_results' => SkillListMaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->category_id = $category_id ?? 0;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListSkillsStoreSkillsByCategoryResponse {
  public NextToken $next_token;
  public SkillsStoreSkillList $skills_store_skills;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'skills_store_skills' => SkillsStoreSkillList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->skills_store_skills = $skills_store_skills ?? ;
  }
}

class ListSmartHomeAppliancesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public Arn $room_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->room_arn = $room_arn ?? ;
  }
}

class ListSmartHomeAppliancesResponse {
  public NextToken $next_token;
  public SmartHomeApplianceList $smart_home_appliances;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'smart_home_appliances' => SmartHomeApplianceList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->smart_home_appliances = $smart_home_appliances ?? ;
  }
}

class ListTagsRequest {
  public Arn $arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsResponse {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? ;
  }
}

type Locale = string;

type MacAddress = string;

type MaxResults = int;

type MaxVolumeLimit = int;

class MeetingRoomConfiguration {
  public EndOfMeetingReminder $end_of_meeting_reminder;
  public InstantBooking $instant_booking;
  public RequireCheckIn $require_check_in;
  public boolean $room_utilization_metrics_enabled;

  public function __construct(shape(
  ?'end_of_meeting_reminder' => EndOfMeetingReminder,
  ?'instant_booking' => InstantBooking,
  ?'require_check_in' => RequireCheckIn,
  ?'room_utilization_metrics_enabled' => boolean,
  ) $s = shape()) {
    $this->end_of_meeting_reminder = $end_of_meeting_reminder ?? null;
    $this->instant_booking = $instant_booking ?? null;
    $this->require_check_in = $require_check_in ?? null;
    $this->room_utilization_metrics_enabled = $room_utilization_metrics_enabled ?? ;
  }
}

class MeetingSetting {
  public RequirePin $require_pin;

  public function __construct(shape(
  ?'require_pin' => RequirePin,
  ) $s = shape()) {
    $this->require_pin = $require_pin ?? "";
  }
}

type Minutes = int;

class NameInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NetworkEapMethod = string;

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

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'current_password' => CurrentWiFiPassword,
  ?'description' => NetworkProfileDescription,
  ?'eap_method' => NetworkEapMethod,
  ?'network_profile_arn' => Arn,
  ?'network_profile_name' => NetworkProfileName,
  ?'next_password' => NextWiFiPassword,
  ?'security_type' => NetworkSecurityType,
  ?'ssid' => NetworkSsid,
  ?'trust_anchors' => TrustAnchorList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->current_password = $current_password ?? ;
    $this->description = $description ?? ;
    $this->eap_method = $eap_method ?? ;
    $this->network_profile_arn = $network_profile_arn ?? ;
    $this->network_profile_name = $network_profile_name ?? "";
    $this->next_password = $next_password ?? ;
    $this->security_type = $security_type ?? ;
    $this->ssid = $ssid ?? ;
    $this->trust_anchors = $trust_anchors ?? ;
  }
}

class NetworkProfileData {
  public Arn $certificate_authority_arn;
  public NetworkProfileDescription $description;
  public NetworkEapMethod $eap_method;
  public Arn $network_profile_arn;
  public NetworkProfileName $network_profile_name;
  public NetworkSecurityType $security_type;
  public NetworkSsid $ssid;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'description' => NetworkProfileDescription,
  ?'eap_method' => NetworkEapMethod,
  ?'network_profile_arn' => Arn,
  ?'network_profile_name' => NetworkProfileName,
  ?'security_type' => NetworkSecurityType,
  ?'ssid' => NetworkSsid,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->description = $description ?? ;
    $this->eap_method = $eap_method ?? ;
    $this->network_profile_arn = $network_profile_arn ?? ;
    $this->network_profile_name = $network_profile_name ?? "";
    $this->security_type = $security_type ?? ;
    $this->ssid = $ssid ?? ;
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OneClickIdDelay = string;

type OneClickPinDelay = string;

type OrganizationName = string;

type OutboundPhoneNumber = string;

class PSTNDialIn {
  public CountryCode $country_code;
  public OneClickIdDelay $one_click_id_delay;
  public OneClickPinDelay $one_click_pin_delay;
  public OutboundPhoneNumber $phone_number;

  public function __construct(shape(
  ?'country_code' => CountryCode,
  ?'one_click_id_delay' => OneClickIdDelay,
  ?'one_click_pin_delay' => OneClickPinDelay,
  ?'phone_number' => OutboundPhoneNumber,
  ) $s = shape()) {
    $this->country_code = $country_code ?? "";
    $this->one_click_id_delay = $one_click_id_delay ?? "";
    $this->one_click_pin_delay = $one_click_pin_delay ?? "";
    $this->phone_number = $phone_number ?? null;
  }
}

class PhoneNumber {
  public RawPhoneNumber $number;
  public PhoneNumberType $type;

  public function __construct(shape(
  ?'number' => RawPhoneNumber,
  ?'type' => PhoneNumberType,
  ) $s = shape()) {
    $this->number = $number ?? ;
    $this->type = $type ?? ;
  }
}

type PhoneNumberList = vec<PhoneNumber>;

type PhoneNumberType = string;

type PrivacyPolicy = string;

type ProductDescription = string;

type ProductId = string;

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

  public function __construct(shape(
  ?'address' => Address,
  ?'address_book_arn' => Arn,
  ?'distance_unit' => DistanceUnit,
  ?'is_default' => boolean,
  ?'locale' => DeviceLocale,
  ?'max_volume_limit' => MaxVolumeLimit,
  ?'meeting_room_configuration' => MeetingRoomConfiguration,
  ?'pstn_enabled' => boolean,
  ?'profile_arn' => Arn,
  ?'profile_name' => ProfileName,
  ?'setup_mode_disabled' => boolean,
  ?'temperature_unit' => TemperatureUnit,
  ?'timezone' => Timezone,
  ?'wake_word' => WakeWord,
  ) $s = shape()) {
    $this->address = $address ?? "";
    $this->address_book_arn = $address_book_arn ?? ;
    $this->distance_unit = $distance_unit ?? "";
    $this->is_default = $is_default ?? ;
    $this->locale = $locale ?? "";
    $this->max_volume_limit = $max_volume_limit ?? 0;
    $this->meeting_room_configuration = $meeting_room_configuration ?? null;
    $this->pstn_enabled = $pstn_enabled ?? ;
    $this->profile_arn = $profile_arn ?? ;
    $this->profile_name = $profile_name ?? "";
    $this->setup_mode_disabled = $setup_mode_disabled ?? ;
    $this->temperature_unit = $temperature_unit ?? "";
    $this->timezone = $timezone ?? "";
    $this->wake_word = $wake_word ?? "";
  }
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

  public function __construct(shape(
  ?'address' => Address,
  ?'distance_unit' => DistanceUnit,
  ?'is_default' => boolean,
  ?'locale' => DeviceLocale,
  ?'profile_arn' => Arn,
  ?'profile_name' => ProfileName,
  ?'temperature_unit' => TemperatureUnit,
  ?'timezone' => Timezone,
  ?'wake_word' => WakeWord,
  ) $s = shape()) {
    $this->address = $address ?? "";
    $this->distance_unit = $distance_unit ?? "";
    $this->is_default = $is_default ?? ;
    $this->locale = $locale ?? "";
    $this->profile_arn = $profile_arn ?? ;
    $this->profile_name = $profile_name ?? "";
    $this->temperature_unit = $temperature_unit ?? "";
    $this->timezone = $timezone ?? "";
    $this->wake_word = $wake_word ?? "";
  }
}

type ProfileDataList = vec<ProfileData>;

type ProfileName = string;

type ProviderCalendarId = string;

class PutConferencePreferenceRequest {
  public ConferencePreference $conference_preference;

  public function __construct(shape(
  ?'conference_preference' => ConferencePreference,
  ) $s = shape()) {
    $this->conference_preference = $conference_preference ?? null;
  }
}

class PutConferencePreferenceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutInvitationConfigurationRequest {
  public Email $contact_email;
  public OrganizationName $organization_name;
  public ShortSkillIdList $private_skill_ids;

  public function __construct(shape(
  ?'contact_email' => Email,
  ?'organization_name' => OrganizationName,
  ?'private_skill_ids' => ShortSkillIdList,
  ) $s = shape()) {
    $this->contact_email = $contact_email ?? ;
    $this->organization_name = $organization_name ?? "";
    $this->private_skill_ids = $private_skill_ids ?? ;
  }
}

class PutInvitationConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutRoomSkillParameterRequest {
  public Arn $room_arn;
  public RoomSkillParameter $room_skill_parameter;
  public SkillId $skill_id;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ?'room_skill_parameter' => RoomSkillParameter,
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
    $this->room_skill_parameter = $room_skill_parameter ?? null;
    $this->skill_id = $skill_id ?? "";
  }
}

class PutRoomSkillParameterResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutSkillAuthorizationRequest {
  public AuthorizationResult $authorization_result;
  public Arn $room_arn;
  public SkillId $skill_id;

  public function __construct(shape(
  ?'authorization_result' => AuthorizationResult,
  ?'room_arn' => Arn,
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->authorization_result = $authorization_result ?? [];
    $this->room_arn = $room_arn ?? ;
    $this->skill_id = $skill_id ?? "";
  }
}

class PutSkillAuthorizationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type RawPhoneNumber = string;

class RegisterAVSDeviceRequest {
  public AmazonId $amazon_id;
  public ClientId $client_id;
  public DeviceSerialNumberForAVS $device_serial_number;
  public ProductId $product_id;
  public UserCode $user_code;

  public function __construct(shape(
  ?'amazon_id' => AmazonId,
  ?'client_id' => ClientId,
  ?'device_serial_number' => DeviceSerialNumberForAVS,
  ?'product_id' => ProductId,
  ?'user_code' => UserCode,
  ) $s = shape()) {
    $this->amazon_id = $amazon_id ?? "";
    $this->client_id = $client_id ?? "";
    $this->device_serial_number = $device_serial_number ?? "";
    $this->product_id = $product_id ?? "";
    $this->user_code = $user_code ?? "";
  }
}

class RegisterAVSDeviceResponse {
  public Arn $device_arn;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
  }
}

class RejectSkillRequest {
  public SkillId $skill_id;

  public function __construct(shape(
  ?'skill_id' => SkillId,
  ) $s = shape()) {
    $this->skill_id = $skill_id ?? "";
  }
}

class RejectSkillResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ReleaseDate = string;

class RequireCheckIn {
  public boolean $enabled;
  public Minutes $release_after_minutes;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'release_after_minutes' => Minutes,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->release_after_minutes = $release_after_minutes ?? ;
  }
}

type RequirePin = string;

class ResolveRoomRequest {
  public SkillId $skill_id;
  public UserId $user_id;

  public function __construct(shape(
  ?'skill_id' => SkillId,
  ?'user_id' => UserId,
  ) $s = shape()) {
    $this->skill_id = $skill_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class ResolveRoomResponse {
  public Arn $room_arn;
  public RoomName $room_name;
  public RoomSkillParameters $room_skill_parameters;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ?'room_name' => RoomName,
  ?'room_skill_parameters' => RoomSkillParameters,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
    $this->room_name = $room_name ?? "";
    $this->room_skill_parameters = $room_skill_parameters ?? [];
  }
}

class ResourceAssociatedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceInUseException {
  public ClientRequestToken $client_request_token;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->message = $message ?? ;
  }
}

type ReviewKey = string;

type ReviewValue = string;

type Reviews = dict<ReviewKey, ReviewValue>;

class RevokeInvitationRequest {
  public EnrollmentId $enrollment_id;
  public Arn $user_arn;

  public function __construct(shape(
  ?'enrollment_id' => EnrollmentId,
  ?'user_arn' => Arn,
  ) $s = shape()) {
    $this->enrollment_id = $enrollment_id ?? "";
    $this->user_arn = $user_arn ?? ;
  }
}

class RevokeInvitationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Room {
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $room_arn;
  public RoomName $room_name;

  public function __construct(shape(
  ?'description' => RoomDescription,
  ?'profile_arn' => Arn,
  ?'provider_calendar_id' => ProviderCalendarId,
  ?'room_arn' => Arn,
  ?'room_name' => RoomName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->profile_arn = $profile_arn ?? ;
    $this->provider_calendar_id = $provider_calendar_id ?? "";
    $this->room_arn = $room_arn ?? ;
    $this->room_name = $room_name ?? "";
  }
}

class RoomData {
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProfileName $profile_name;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $room_arn;
  public RoomName $room_name;

  public function __construct(shape(
  ?'description' => RoomDescription,
  ?'profile_arn' => Arn,
  ?'profile_name' => ProfileName,
  ?'provider_calendar_id' => ProviderCalendarId,
  ?'room_arn' => Arn,
  ?'room_name' => RoomName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->profile_arn = $profile_arn ?? ;
    $this->profile_name = $profile_name ?? "";
    $this->provider_calendar_id = $provider_calendar_id ?? "";
    $this->room_arn = $room_arn ?? ;
    $this->room_name = $room_name ?? "";
  }
}

type RoomDataList = vec<RoomData>;

type RoomDescription = string;

type RoomName = string;

class RoomSkillParameter {
  public RoomSkillParameterKey $parameter_key;
  public RoomSkillParameterValue $parameter_value;

  public function __construct(shape(
  ?'parameter_key' => RoomSkillParameterKey,
  ?'parameter_value' => RoomSkillParameterValue,
  ) $s = shape()) {
    $this->parameter_key = $parameter_key ?? ;
    $this->parameter_value = $parameter_value ?? ;
  }
}

type RoomSkillParameterKey = string;

type RoomSkillParameterValue = string;

type RoomSkillParameters = vec<RoomSkillParameter>;

type S3KeyPrefix = string;

type SampleUtterances = vec<Utterance>;

class SearchAddressBooksRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchAddressBooksResponse {
  public AddressBookDataList $address_books;
  public NextToken $next_token;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'address_books' => AddressBookDataList,
  ?'next_token' => NextToken,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->address_books = $address_books ?? ;
    $this->next_token = $next_token ?? "";
    $this->total_count = $total_count ?? 0;
  }
}

class SearchContactsRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchContactsResponse {
  public ContactDataList $contacts;
  public NextToken $next_token;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'contacts' => ContactDataList,
  ?'next_token' => NextToken,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->contacts = $contacts ?? ;
    $this->next_token = $next_token ?? "";
    $this->total_count = $total_count ?? 0;
  }
}

class SearchDevicesRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchDevicesResponse {
  public DeviceDataList $devices;
  public NextToken $next_token;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'devices' => DeviceDataList,
  ?'next_token' => NextToken,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->devices = $devices ?? ;
    $this->next_token = $next_token ?? "";
    $this->total_count = $total_count ?? 0;
  }
}

class SearchNetworkProfilesRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchNetworkProfilesResponse {
  public NetworkProfileDataList $network_profiles;
  public NextToken $next_token;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'network_profiles' => NetworkProfileDataList,
  ?'next_token' => NextToken,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->network_profiles = $network_profiles ?? ;
    $this->next_token = $next_token ?? "";
    $this->total_count = $total_count ?? 0;
  }
}

class SearchProfilesRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchProfilesResponse {
  public NextToken $next_token;
  public ProfileDataList $profiles;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'profiles' => ProfileDataList,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->profiles = $profiles ?? ;
    $this->total_count = $total_count ?? 0;
  }
}

class SearchRoomsRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchRoomsResponse {
  public NextToken $next_token;
  public RoomDataList $rooms;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'rooms' => RoomDataList,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->rooms = $rooms ?? ;
    $this->total_count = $total_count ?? 0;
  }
}

class SearchSkillGroupsRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchSkillGroupsResponse {
  public NextToken $next_token;
  public SkillGroupDataList $skill_groups;
  public TotalCount $total_count;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'skill_groups' => SkillGroupDataList,
  ?'total_count' => TotalCount,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->skill_groups = $skill_groups ?? ;
    $this->total_count = $total_count ?? 0;
  }
}

class SearchUsersRequest {
  public FilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortList $sort_criteria;

  public function __construct(shape(
  ?'filters' => FilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'sort_criteria' => SortList,
  ) $s = shape()) {
    $this->filters = $filters ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->sort_criteria = $sort_criteria ?? ;
  }
}

class SearchUsersResponse {
  public NextToken $next_token;
  public TotalCount $total_count;
  public UserDataList $users;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'total_count' => TotalCount,
  ?'users' => UserDataList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->total_count = $total_count ?? 0;
    $this->users = $users ?? ;
  }
}

class SendAnnouncementRequest {
  public ClientRequestToken $client_request_token;
  public Content $content;
  public FilterList $room_filters;
  public TimeToLiveInSeconds $time_to_live_in_seconds;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'content' => Content,
  ?'room_filters' => FilterList,
  ?'time_to_live_in_seconds' => TimeToLiveInSeconds,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->content = $content ?? null;
    $this->room_filters = $room_filters ?? ;
    $this->time_to_live_in_seconds = $time_to_live_in_seconds ?? 0;
  }
}

class SendAnnouncementResponse {
  public Arn $announcement_arn;

  public function __construct(shape(
  ?'announcement_arn' => Arn,
  ) $s = shape()) {
    $this->announcement_arn = $announcement_arn ?? ;
  }
}

class SendInvitationRequest {
  public Arn $user_arn;

  public function __construct(shape(
  ?'user_arn' => Arn,
  ) $s = shape()) {
    $this->user_arn = $user_arn ?? ;
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
  public SipType $type;
  public SipUri $uri;

  public function __construct(shape(
  ?'type' => SipType,
  ?'uri' => SipUri,
  ) $s = shape()) {
    $this->type = $type ?? ;
    $this->uri = $uri ?? ;
  }
}

type SipAddressList = vec<SipAddress>;

type SipType = string;

type SipUri = string;

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

  public function __construct(shape(
  ?'bullet_points' => BulletPoints,
  ?'developer_info' => DeveloperInfo,
  ?'end_user_license_agreement' => EndUserLicenseAgreement,
  ?'generic_keywords' => GenericKeywords,
  ?'invocation_phrase' => InvocationPhrase,
  ?'new_in_this_version_bullet_points' => NewInThisVersionBulletPoints,
  ?'product_description' => ProductDescription,
  ?'release_date' => ReleaseDate,
  ?'reviews' => Reviews,
  ?'skill_types' => SkillTypes,
  ) $s = shape()) {
    $this->bullet_points = $bullet_points ?? [];
    $this->developer_info = $developer_info ?? null;
    $this->end_user_license_agreement = $end_user_license_agreement ?? "";
    $this->generic_keywords = $generic_keywords ?? [];
    $this->invocation_phrase = $invocation_phrase ?? "";
    $this->new_in_this_version_bullet_points = $new_in_this_version_bullet_points ?? [];
    $this->product_description = $product_description ?? "";
    $this->release_date = $release_date ?? "";
    $this->reviews = $reviews ?? [];
    $this->skill_types = $skill_types ?? [];
  }
}

class SkillGroup {
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;

  public function __construct(shape(
  ?'description' => SkillGroupDescription,
  ?'skill_group_arn' => Arn,
  ?'skill_group_name' => SkillGroupName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->skill_group_arn = $skill_group_arn ?? ;
    $this->skill_group_name = $skill_group_name ?? "";
  }
}

class SkillGroupData {
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;

  public function __construct(shape(
  ?'description' => SkillGroupDescription,
  ?'skill_group_arn' => Arn,
  ?'skill_group_name' => SkillGroupName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->skill_group_arn = $skill_group_arn ?? ;
    $this->skill_group_name = $skill_group_name ?? "";
  }
}

type SkillGroupDataList = vec<SkillGroupData>;

type SkillGroupDescription = string;

type SkillGroupName = string;

type SkillId = string;

type SkillListMaxResults = int;

type SkillName = string;

class SkillNotLinkedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type SkillStoreType = string;

class SkillSummary {
  public EnablementType $enablement_type;
  public SkillId $skill_id;
  public SkillName $skill_name;
  public SkillType $skill_type;
  public boolean $supports_linking;

  public function __construct(shape(
  ?'enablement_type' => EnablementType,
  ?'skill_id' => SkillId,
  ?'skill_name' => SkillName,
  ?'skill_type' => SkillType,
  ?'supports_linking' => boolean,
  ) $s = shape()) {
    $this->enablement_type = $enablement_type ?? "";
    $this->skill_id = $skill_id ?? "";
    $this->skill_name = $skill_name ?? "";
    $this->skill_type = $skill_type ?? "";
    $this->supports_linking = $supports_linking ?? ;
  }
}

type SkillSummaryList = vec<SkillSummary>;

type SkillType = string;

type SkillTypeFilter = string;

type SkillTypes = vec<SkillStoreType>;

class SkillsStoreSkill {
  public IconUrl $icon_url;
  public SampleUtterances $sample_utterances;
  public ShortDescription $short_description;
  public SkillDetails $skill_details;
  public SkillId $skill_id;
  public SkillName $skill_name;
  public boolean $supports_linking;

  public function __construct(shape(
  ?'icon_url' => IconUrl,
  ?'sample_utterances' => SampleUtterances,
  ?'short_description' => ShortDescription,
  ?'skill_details' => SkillDetails,
  ?'skill_id' => SkillId,
  ?'skill_name' => SkillName,
  ?'supports_linking' => boolean,
  ) $s = shape()) {
    $this->icon_url = $icon_url ?? "";
    $this->sample_utterances = $sample_utterances ?? [];
    $this->short_description = $short_description ?? "";
    $this->skill_details = $skill_details ?? null;
    $this->skill_id = $skill_id ?? "";
    $this->skill_name = $skill_name ?? "";
    $this->supports_linking = $supports_linking ?? ;
  }
}

type SkillsStoreSkillList = vec<SkillsStoreSkill>;

class SmartHomeAppliance {
  public ApplianceDescription $description;
  public ApplianceFriendlyName $friendly_name;
  public ApplianceManufacturerName $manufacturer_name;

  public function __construct(shape(
  ?'description' => ApplianceDescription,
  ?'friendly_name' => ApplianceFriendlyName,
  ?'manufacturer_name' => ApplianceManufacturerName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->friendly_name = $friendly_name ?? ;
    $this->manufacturer_name = $manufacturer_name ?? ;
  }
}

type SmartHomeApplianceList = vec<SmartHomeAppliance>;

type SoftwareVersion = string;

class Sort {
  public SortKey $key;
  public SortValue $value;

  public function __construct(shape(
  ?'key' => SortKey,
  ?'value' => SortValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type SortKey = string;

type SortList = vec<Sort>;

type SortValue = string;

class Ssml {
  public Locale $locale;
  public SsmlValue $value;

  public function __construct(shape(
  ?'locale' => Locale,
  ?'value' => SsmlValue,
  ) $s = shape()) {
    $this->locale = $locale ?? "";
    $this->value = $value ?? "";
  }
}

type SsmlList = vec<Ssml>;

type SsmlValue = string;

class StartDeviceSyncRequest {
  public Arn $device_arn;
  public Features $features;
  public Arn $room_arn;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ?'features' => Features,
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
    $this->features = $features ?? [];
    $this->room_arn = $room_arn ?? ;
  }
}

class StartDeviceSyncResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartSmartHomeApplianceDiscoveryRequest {
  public Arn $room_arn;

  public function __construct(shape(
  ?'room_arn' => Arn,
  ) $s = shape()) {
    $this->room_arn = $room_arn ?? ;
  }
}

class StartSmartHomeApplianceDiscoveryResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

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

class TagResourceRequest {
  public Arn $arn;
  public TagList $tags;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tags = $tags ?? ;
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
  public Locale $locale;
  public TextValue $value;

  public function __construct(shape(
  ?'locale' => Locale,
  ?'value' => TextValue,
  ) $s = shape()) {
    $this->locale = $locale ?? "";
    $this->value = $value ?? "";
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public Arn $arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateAddressBookRequest {
  public Arn $address_book_arn;
  public AddressBookDescription $description;
  public AddressBookName $name;

  public function __construct(shape(
  ?'address_book_arn' => Arn,
  ?'description' => AddressBookDescription,
  ?'name' => AddressBookName,
  ) $s = shape()) {
    $this->address_book_arn = $address_book_arn ?? ;
    $this->description = $description ?? ;
    $this->name = $name ?? ;
  }
}

class UpdateAddressBookResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateBusinessReportScheduleRequest {
  public BusinessReportFormat $format;
  public BusinessReportRecurrence $recurrence;
  public CustomerS3BucketName $s_3_bucket_name;
  public S3KeyPrefix $s_3_key_prefix;
  public Arn $schedule_arn;
  public BusinessReportScheduleName $schedule_name;

  public function __construct(shape(
  ?'format' => BusinessReportFormat,
  ?'recurrence' => BusinessReportRecurrence,
  ?'s_3_bucket_name' => CustomerS3BucketName,
  ?'s_3_key_prefix' => S3KeyPrefix,
  ?'schedule_arn' => Arn,
  ?'schedule_name' => BusinessReportScheduleName,
  ) $s = shape()) {
    $this->format = $format ?? ;
    $this->recurrence = $recurrence ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key_prefix = $s_3_key_prefix ?? "";
    $this->schedule_arn = $schedule_arn ?? ;
    $this->schedule_name = $schedule_name ?? ;
  }
}

class UpdateBusinessReportScheduleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateConferenceProviderRequest {
  public Arn $conference_provider_arn;
  public ConferenceProviderType $conference_provider_type;
  public IPDialIn $ip_dial_in;
  public MeetingSetting $meeting_setting;
  public PSTNDialIn $pstn_dial_in;

  public function __construct(shape(
  ?'conference_provider_arn' => Arn,
  ?'conference_provider_type' => ConferenceProviderType,
  ?'ip_dial_in' => IPDialIn,
  ?'meeting_setting' => MeetingSetting,
  ?'pstn_dial_in' => PSTNDialIn,
  ) $s = shape()) {
    $this->conference_provider_arn = $conference_provider_arn ?? ;
    $this->conference_provider_type = $conference_provider_type ?? "";
    $this->ip_dial_in = $ip_dial_in ?? null;
    $this->meeting_setting = $meeting_setting ?? null;
    $this->pstn_dial_in = $pstn_dial_in ?? null;
  }
}

class UpdateConferenceProviderResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateContactRequest {
  public Arn $contact_arn;
  public ContactName $display_name;
  public ContactName $first_name;
  public ContactName $last_name;
  public RawPhoneNumber $phone_number;
  public PhoneNumberList $phone_numbers;
  public SipAddressList $sip_addresses;

  public function __construct(shape(
  ?'contact_arn' => Arn,
  ?'display_name' => ContactName,
  ?'first_name' => ContactName,
  ?'last_name' => ContactName,
  ?'phone_number' => RawPhoneNumber,
  ?'phone_numbers' => PhoneNumberList,
  ?'sip_addresses' => SipAddressList,
  ) $s = shape()) {
    $this->contact_arn = $contact_arn ?? ;
    $this->display_name = $display_name ?? ;
    $this->first_name = $first_name ?? ;
    $this->last_name = $last_name ?? ;
    $this->phone_number = $phone_number ?? null;
    $this->phone_numbers = $phone_numbers ?? ;
    $this->sip_addresses = $sip_addresses ?? ;
  }
}

class UpdateContactResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDeviceRequest {
  public Arn $device_arn;
  public DeviceName $device_name;

  public function __construct(shape(
  ?'device_arn' => Arn,
  ?'device_name' => DeviceName,
  ) $s = shape()) {
    $this->device_arn = $device_arn ?? ;
    $this->device_name = $device_name ?? "";
  }
}

class UpdateDeviceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateEndOfMeetingReminder {
  public boolean $enabled;
  public EndOfMeetingReminderMinutesList $reminder_at_minutes;
  public EndOfMeetingReminderType $reminder_type;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'reminder_at_minutes' => EndOfMeetingReminderMinutesList,
  ?'reminder_type' => EndOfMeetingReminderType,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->reminder_at_minutes = $reminder_at_minutes ?? ;
    $this->reminder_type = $reminder_type ?? ;
  }
}

class UpdateGatewayGroupRequest {
  public GatewayGroupDescription $description;
  public Arn $gateway_group_arn;
  public GatewayGroupName $name;

  public function __construct(shape(
  ?'description' => GatewayGroupDescription,
  ?'gateway_group_arn' => Arn,
  ?'name' => GatewayGroupName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->gateway_group_arn = $gateway_group_arn ?? ;
    $this->name = $name ?? ;
  }
}

class UpdateGatewayGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateGatewayRequest {
  public GatewayDescription $description;
  public Arn $gateway_arn;
  public GatewayName $name;
  public GatewayVersion $software_version;

  public function __construct(shape(
  ?'description' => GatewayDescription,
  ?'gateway_arn' => Arn,
  ?'name' => GatewayName,
  ?'software_version' => GatewayVersion,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->gateway_arn = $gateway_arn ?? ;
    $this->name = $name ?? ;
    $this->software_version = $software_version ?? "";
  }
}

class UpdateGatewayResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateInstantBooking {
  public Minutes $duration_in_minutes;
  public boolean $enabled;

  public function __construct(shape(
  ?'duration_in_minutes' => Minutes,
  ?'enabled' => boolean,
  ) $s = shape()) {
    $this->duration_in_minutes = $duration_in_minutes ?? ;
    $this->enabled = $enabled ?? ;
  }
}

class UpdateMeetingRoomConfiguration {
  public UpdateEndOfMeetingReminder $end_of_meeting_reminder;
  public UpdateInstantBooking $instant_booking;
  public UpdateRequireCheckIn $require_check_in;
  public boolean $room_utilization_metrics_enabled;

  public function __construct(shape(
  ?'end_of_meeting_reminder' => UpdateEndOfMeetingReminder,
  ?'instant_booking' => UpdateInstantBooking,
  ?'require_check_in' => UpdateRequireCheckIn,
  ?'room_utilization_metrics_enabled' => boolean,
  ) $s = shape()) {
    $this->end_of_meeting_reminder = $end_of_meeting_reminder ?? null;
    $this->instant_booking = $instant_booking ?? null;
    $this->require_check_in = $require_check_in ?? null;
    $this->room_utilization_metrics_enabled = $room_utilization_metrics_enabled ?? ;
  }
}

class UpdateNetworkProfileRequest {
  public Arn $certificate_authority_arn;
  public CurrentWiFiPassword $current_password;
  public NetworkProfileDescription $description;
  public Arn $network_profile_arn;
  public NetworkProfileName $network_profile_name;
  public NextWiFiPassword $next_password;
  public TrustAnchorList $trust_anchors;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'current_password' => CurrentWiFiPassword,
  ?'description' => NetworkProfileDescription,
  ?'network_profile_arn' => Arn,
  ?'network_profile_name' => NetworkProfileName,
  ?'next_password' => NextWiFiPassword,
  ?'trust_anchors' => TrustAnchorList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->current_password = $current_password ?? ;
    $this->description = $description ?? ;
    $this->network_profile_arn = $network_profile_arn ?? ;
    $this->network_profile_name = $network_profile_name ?? "";
    $this->next_password = $next_password ?? ;
    $this->trust_anchors = $trust_anchors ?? ;
  }
}

class UpdateNetworkProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'address' => Address,
  ?'distance_unit' => DistanceUnit,
  ?'is_default' => boolean,
  ?'locale' => DeviceLocale,
  ?'max_volume_limit' => MaxVolumeLimit,
  ?'meeting_room_configuration' => UpdateMeetingRoomConfiguration,
  ?'pstn_enabled' => boolean,
  ?'profile_arn' => Arn,
  ?'profile_name' => ProfileName,
  ?'setup_mode_disabled' => boolean,
  ?'temperature_unit' => TemperatureUnit,
  ?'timezone' => Timezone,
  ?'wake_word' => WakeWord,
  ) $s = shape()) {
    $this->address = $address ?? "";
    $this->distance_unit = $distance_unit ?? "";
    $this->is_default = $is_default ?? ;
    $this->locale = $locale ?? "";
    $this->max_volume_limit = $max_volume_limit ?? 0;
    $this->meeting_room_configuration = $meeting_room_configuration ?? null;
    $this->pstn_enabled = $pstn_enabled ?? ;
    $this->profile_arn = $profile_arn ?? ;
    $this->profile_name = $profile_name ?? "";
    $this->setup_mode_disabled = $setup_mode_disabled ?? ;
    $this->temperature_unit = $temperature_unit ?? "";
    $this->timezone = $timezone ?? "";
    $this->wake_word = $wake_word ?? "";
  }
}

class UpdateProfileResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateRequireCheckIn {
  public boolean $enabled;
  public Minutes $release_after_minutes;

  public function __construct(shape(
  ?'enabled' => boolean,
  ?'release_after_minutes' => Minutes,
  ) $s = shape()) {
    $this->enabled = $enabled ?? ;
    $this->release_after_minutes = $release_after_minutes ?? ;
  }
}

class UpdateRoomRequest {
  public RoomDescription $description;
  public Arn $profile_arn;
  public ProviderCalendarId $provider_calendar_id;
  public Arn $room_arn;
  public RoomName $room_name;

  public function __construct(shape(
  ?'description' => RoomDescription,
  ?'profile_arn' => Arn,
  ?'provider_calendar_id' => ProviderCalendarId,
  ?'room_arn' => Arn,
  ?'room_name' => RoomName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->profile_arn = $profile_arn ?? ;
    $this->provider_calendar_id = $provider_calendar_id ?? "";
    $this->room_arn = $room_arn ?? ;
    $this->room_name = $room_name ?? "";
  }
}

class UpdateRoomResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSkillGroupRequest {
  public SkillGroupDescription $description;
  public Arn $skill_group_arn;
  public SkillGroupName $skill_group_name;

  public function __construct(shape(
  ?'description' => SkillGroupDescription,
  ?'skill_group_arn' => Arn,
  ?'skill_group_name' => SkillGroupName,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->skill_group_arn = $skill_group_arn ?? ;
    $this->skill_group_name = $skill_group_name ?? "";
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
  public Email $email;
  public EnrollmentId $enrollment_id;
  public EnrollmentStatus $enrollment_status;
  public user_FirstName $first_name;
  public user_LastName $last_name;
  public Arn $user_arn;

  public function __construct(shape(
  ?'email' => Email,
  ?'enrollment_id' => EnrollmentId,
  ?'enrollment_status' => EnrollmentStatus,
  ?'first_name' => user_FirstName,
  ?'last_name' => user_LastName,
  ?'user_arn' => Arn,
  ) $s = shape()) {
    $this->email = $email ?? "";
    $this->enrollment_id = $enrollment_id ?? "";
    $this->enrollment_status = $enrollment_status ?? "";
    $this->first_name = $first_name ?? ;
    $this->last_name = $last_name ?? ;
    $this->user_arn = $user_arn ?? ;
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

