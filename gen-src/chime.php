<?hh // strict
namespace slack\aws\chime;

interface Chime {
  public function AssociatePhoneNumberWithUser(AssociatePhoneNumberWithUserRequest): Awaitable<Errors\Result<AssociatePhoneNumberWithUserResponse>>;
  public function AssociatePhoneNumbersWithVoiceConnector(AssociatePhoneNumbersWithVoiceConnectorRequest): Awaitable<Errors\Result<AssociatePhoneNumbersWithVoiceConnectorResponse>>;
  public function AssociatePhoneNumbersWithVoiceConnectorGroup(AssociatePhoneNumbersWithVoiceConnectorGroupRequest): Awaitable<Errors\Result<AssociatePhoneNumbersWithVoiceConnectorGroupResponse>>;
  public function AssociateSigninDelegateGroupsWithAccount(AssociateSigninDelegateGroupsWithAccountRequest): Awaitable<Errors\Result<AssociateSigninDelegateGroupsWithAccountResponse>>;
  public function BatchCreateAttendee(BatchCreateAttendeeRequest): Awaitable<Errors\Result<BatchCreateAttendeeResponse>>;
  public function BatchCreateRoomMembership(BatchCreateRoomMembershipRequest): Awaitable<Errors\Result<BatchCreateRoomMembershipResponse>>;
  public function BatchDeletePhoneNumber(BatchDeletePhoneNumberRequest): Awaitable<Errors\Result<BatchDeletePhoneNumberResponse>>;
  public function BatchSuspendUser(BatchSuspendUserRequest): Awaitable<Errors\Result<BatchSuspendUserResponse>>;
  public function BatchUnsuspendUser(BatchUnsuspendUserRequest): Awaitable<Errors\Result<BatchUnsuspendUserResponse>>;
  public function BatchUpdatePhoneNumber(BatchUpdatePhoneNumberRequest): Awaitable<Errors\Result<BatchUpdatePhoneNumberResponse>>;
  public function BatchUpdateUser(BatchUpdateUserRequest): Awaitable<Errors\Result<BatchUpdateUserResponse>>;
  public function CreateAccount(CreateAccountRequest): Awaitable<Errors\Result<CreateAccountResponse>>;
  public function CreateAttendee(CreateAttendeeRequest): Awaitable<Errors\Result<CreateAttendeeResponse>>;
  public function CreateBot(CreateBotRequest): Awaitable<Errors\Result<CreateBotResponse>>;
  public function CreateMeeting(CreateMeetingRequest): Awaitable<Errors\Result<CreateMeetingResponse>>;
  public function CreatePhoneNumberOrder(CreatePhoneNumberOrderRequest): Awaitable<Errors\Result<CreatePhoneNumberOrderResponse>>;
  public function CreateProxySession(CreateProxySessionRequest): Awaitable<Errors\Result<CreateProxySessionResponse>>;
  public function CreateRoom(CreateRoomRequest): Awaitable<Errors\Result<CreateRoomResponse>>;
  public function CreateRoomMembership(CreateRoomMembershipRequest): Awaitable<Errors\Result<CreateRoomMembershipResponse>>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResponse>>;
  public function CreateVoiceConnector(CreateVoiceConnectorRequest): Awaitable<Errors\Result<CreateVoiceConnectorResponse>>;
  public function CreateVoiceConnectorGroup(CreateVoiceConnectorGroupRequest): Awaitable<Errors\Result<CreateVoiceConnectorGroupResponse>>;
  public function DeleteAccount(DeleteAccountRequest): Awaitable<Errors\Result<DeleteAccountResponse>>;
  public function DeleteAttendee(DeleteAttendeeRequest): Awaitable<Errors\Error>;
  public function DeleteEventsConfiguration(DeleteEventsConfigurationRequest): Awaitable<Errors\Error>;
  public function DeleteMeeting(DeleteMeetingRequest): Awaitable<Errors\Error>;
  public function DeletePhoneNumber(DeletePhoneNumberRequest): Awaitable<Errors\Error>;
  public function DeleteProxySession(DeleteProxySessionRequest): Awaitable<Errors\Error>;
  public function DeleteRoom(DeleteRoomRequest): Awaitable<Errors\Error>;
  public function DeleteRoomMembership(DeleteRoomMembershipRequest): Awaitable<Errors\Error>;
  public function DeleteVoiceConnector(DeleteVoiceConnectorRequest): Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorGroup(DeleteVoiceConnectorGroupRequest): Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorOrigination(DeleteVoiceConnectorOriginationRequest): Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorProxy(DeleteVoiceConnectorProxyRequest): Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorStreamingConfiguration(DeleteVoiceConnectorStreamingConfigurationRequest): Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorTermination(DeleteVoiceConnectorTerminationRequest): Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorTerminationCredentials(DeleteVoiceConnectorTerminationCredentialsRequest): Awaitable<Errors\Error>;
  public function DisassociatePhoneNumberFromUser(DisassociatePhoneNumberFromUserRequest): Awaitable<Errors\Result<DisassociatePhoneNumberFromUserResponse>>;
  public function DisassociatePhoneNumbersFromVoiceConnector(DisassociatePhoneNumbersFromVoiceConnectorRequest): Awaitable<Errors\Result<DisassociatePhoneNumbersFromVoiceConnectorResponse>>;
  public function DisassociatePhoneNumbersFromVoiceConnectorGroup(DisassociatePhoneNumbersFromVoiceConnectorGroupRequest): Awaitable<Errors\Result<DisassociatePhoneNumbersFromVoiceConnectorGroupResponse>>;
  public function DisassociateSigninDelegateGroupsFromAccount(DisassociateSigninDelegateGroupsFromAccountRequest): Awaitable<Errors\Result<DisassociateSigninDelegateGroupsFromAccountResponse>>;
  public function GetAccount(GetAccountRequest): Awaitable<Errors\Result<GetAccountResponse>>;
  public function GetAccountSettings(GetAccountSettingsRequest): Awaitable<Errors\Result<GetAccountSettingsResponse>>;
  public function GetAttendee(GetAttendeeRequest): Awaitable<Errors\Result<GetAttendeeResponse>>;
  public function GetBot(GetBotRequest): Awaitable<Errors\Result<GetBotResponse>>;
  public function GetEventsConfiguration(GetEventsConfigurationRequest): Awaitable<Errors\Result<GetEventsConfigurationResponse>>;
  public function GetGlobalSettings(): Awaitable<Errors\Result<GetGlobalSettingsResponse>>;
  public function GetMeeting(GetMeetingRequest): Awaitable<Errors\Result<GetMeetingResponse>>;
  public function GetPhoneNumber(GetPhoneNumberRequest): Awaitable<Errors\Result<GetPhoneNumberResponse>>;
  public function GetPhoneNumberOrder(GetPhoneNumberOrderRequest): Awaitable<Errors\Result<GetPhoneNumberOrderResponse>>;
  public function GetPhoneNumberSettings(): Awaitable<Errors\Result<GetPhoneNumberSettingsResponse>>;
  public function GetProxySession(GetProxySessionRequest): Awaitable<Errors\Result<GetProxySessionResponse>>;
  public function GetRoom(GetRoomRequest): Awaitable<Errors\Result<GetRoomResponse>>;
  public function GetUser(GetUserRequest): Awaitable<Errors\Result<GetUserResponse>>;
  public function GetUserSettings(GetUserSettingsRequest): Awaitable<Errors\Result<GetUserSettingsResponse>>;
  public function GetVoiceConnector(GetVoiceConnectorRequest): Awaitable<Errors\Result<GetVoiceConnectorResponse>>;
  public function GetVoiceConnectorGroup(GetVoiceConnectorGroupRequest): Awaitable<Errors\Result<GetVoiceConnectorGroupResponse>>;
  public function GetVoiceConnectorLoggingConfiguration(GetVoiceConnectorLoggingConfigurationRequest): Awaitable<Errors\Result<GetVoiceConnectorLoggingConfigurationResponse>>;
  public function GetVoiceConnectorOrigination(GetVoiceConnectorOriginationRequest): Awaitable<Errors\Result<GetVoiceConnectorOriginationResponse>>;
  public function GetVoiceConnectorProxy(GetVoiceConnectorProxyRequest): Awaitable<Errors\Result<GetVoiceConnectorProxyResponse>>;
  public function GetVoiceConnectorStreamingConfiguration(GetVoiceConnectorStreamingConfigurationRequest): Awaitable<Errors\Result<GetVoiceConnectorStreamingConfigurationResponse>>;
  public function GetVoiceConnectorTermination(GetVoiceConnectorTerminationRequest): Awaitable<Errors\Result<GetVoiceConnectorTerminationResponse>>;
  public function GetVoiceConnectorTerminationHealth(GetVoiceConnectorTerminationHealthRequest): Awaitable<Errors\Result<GetVoiceConnectorTerminationHealthResponse>>;
  public function InviteUsers(InviteUsersRequest): Awaitable<Errors\Result<InviteUsersResponse>>;
  public function ListAccounts(ListAccountsRequest): Awaitable<Errors\Result<ListAccountsResponse>>;
  public function ListAttendeeTags(ListAttendeeTagsRequest): Awaitable<Errors\Result<ListAttendeeTagsResponse>>;
  public function ListAttendees(ListAttendeesRequest): Awaitable<Errors\Result<ListAttendeesResponse>>;
  public function ListBots(ListBotsRequest): Awaitable<Errors\Result<ListBotsResponse>>;
  public function ListMeetingTags(ListMeetingTagsRequest): Awaitable<Errors\Result<ListMeetingTagsResponse>>;
  public function ListMeetings(ListMeetingsRequest): Awaitable<Errors\Result<ListMeetingsResponse>>;
  public function ListPhoneNumberOrders(ListPhoneNumberOrdersRequest): Awaitable<Errors\Result<ListPhoneNumberOrdersResponse>>;
  public function ListPhoneNumbers(ListPhoneNumbersRequest): Awaitable<Errors\Result<ListPhoneNumbersResponse>>;
  public function ListProxySessions(ListProxySessionsRequest): Awaitable<Errors\Result<ListProxySessionsResponse>>;
  public function ListRoomMemberships(ListRoomMembershipsRequest): Awaitable<Errors\Result<ListRoomMembershipsResponse>>;
  public function ListRooms(ListRoomsRequest): Awaitable<Errors\Result<ListRoomsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUsers(ListUsersRequest): Awaitable<Errors\Result<ListUsersResponse>>;
  public function ListVoiceConnectorGroups(ListVoiceConnectorGroupsRequest): Awaitable<Errors\Result<ListVoiceConnectorGroupsResponse>>;
  public function ListVoiceConnectorTerminationCredentials(ListVoiceConnectorTerminationCredentialsRequest): Awaitable<Errors\Result<ListVoiceConnectorTerminationCredentialsResponse>>;
  public function ListVoiceConnectors(ListVoiceConnectorsRequest): Awaitable<Errors\Result<ListVoiceConnectorsResponse>>;
  public function LogoutUser(LogoutUserRequest): Awaitable<Errors\Result<LogoutUserResponse>>;
  public function PutEventsConfiguration(PutEventsConfigurationRequest): Awaitable<Errors\Result<PutEventsConfigurationResponse>>;
  public function PutVoiceConnectorLoggingConfiguration(PutVoiceConnectorLoggingConfigurationRequest): Awaitable<Errors\Result<PutVoiceConnectorLoggingConfigurationResponse>>;
  public function PutVoiceConnectorOrigination(PutVoiceConnectorOriginationRequest): Awaitable<Errors\Result<PutVoiceConnectorOriginationResponse>>;
  public function PutVoiceConnectorProxy(PutVoiceConnectorProxyRequest): Awaitable<Errors\Result<PutVoiceConnectorProxyResponse>>;
  public function PutVoiceConnectorStreamingConfiguration(PutVoiceConnectorStreamingConfigurationRequest): Awaitable<Errors\Result<PutVoiceConnectorStreamingConfigurationResponse>>;
  public function PutVoiceConnectorTermination(PutVoiceConnectorTerminationRequest): Awaitable<Errors\Result<PutVoiceConnectorTerminationResponse>>;
  public function PutVoiceConnectorTerminationCredentials(PutVoiceConnectorTerminationCredentialsRequest): Awaitable<Errors\Error>;
  public function RegenerateSecurityToken(RegenerateSecurityTokenRequest): Awaitable<Errors\Result<RegenerateSecurityTokenResponse>>;
  public function ResetPersonalPIN(ResetPersonalPINRequest): Awaitable<Errors\Result<ResetPersonalPINResponse>>;
  public function RestorePhoneNumber(RestorePhoneNumberRequest): Awaitable<Errors\Result<RestorePhoneNumberResponse>>;
  public function SearchAvailablePhoneNumbers(SearchAvailablePhoneNumbersRequest): Awaitable<Errors\Result<SearchAvailablePhoneNumbersResponse>>;
  public function TagAttendee(TagAttendeeRequest): Awaitable<Errors\Error>;
  public function TagMeeting(TagMeetingRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Error>;
  public function UntagAttendee(UntagAttendeeRequest): Awaitable<Errors\Error>;
  public function UntagMeeting(UntagMeetingRequest): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Error>;
  public function UpdateAccount(UpdateAccountRequest): Awaitable<Errors\Result<UpdateAccountResponse>>;
  public function UpdateAccountSettings(UpdateAccountSettingsRequest): Awaitable<Errors\Result<UpdateAccountSettingsResponse>>;
  public function UpdateBot(UpdateBotRequest): Awaitable<Errors\Result<UpdateBotResponse>>;
  public function UpdateGlobalSettings(UpdateGlobalSettingsRequest): Awaitable<Errors\Error>;
  public function UpdatePhoneNumber(UpdatePhoneNumberRequest): Awaitable<Errors\Result<UpdatePhoneNumberResponse>>;
  public function UpdatePhoneNumberSettings(UpdatePhoneNumberSettingsRequest): Awaitable<Errors\Error>;
  public function UpdateProxySession(UpdateProxySessionRequest): Awaitable<Errors\Result<UpdateProxySessionResponse>>;
  public function UpdateRoom(UpdateRoomRequest): Awaitable<Errors\Result<UpdateRoomResponse>>;
  public function UpdateRoomMembership(UpdateRoomMembershipRequest): Awaitable<Errors\Result<UpdateRoomMembershipResponse>>;
  public function UpdateUser(UpdateUserRequest): Awaitable<Errors\Result<UpdateUserResponse>>;
  public function UpdateUserSettings(UpdateUserSettingsRequest): Awaitable<Errors\Error>;
  public function UpdateVoiceConnector(UpdateVoiceConnectorRequest): Awaitable<Errors\Result<UpdateVoiceConnectorResponse>>;
  public function UpdateVoiceConnectorGroup(UpdateVoiceConnectorGroupRequest): Awaitable<Errors\Result<UpdateVoiceConnectorGroupResponse>>;
}

class AccessDeniedException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class Account {
  public string $account_id;
  public AccountType $account_type;
  public string $aws_account_id;
  public Iso8601Timestamp $created_timestamp;
  public License $default_license;
  public string $name;
  public SigninDelegateGroupList $signin_delegate_groups;
  public LicenseList $supported_licenses;

  public function __construct(shape(
  ?'account_id' => string,
  ?'account_type' => AccountType,
  ?'aws_account_id' => string,
  ?'created_timestamp' => Iso8601Timestamp,
  ?'default_license' => License,
  ?'name' => string,
  ?'signin_delegate_groups' => SigninDelegateGroupList,
  ?'supported_licenses' => LicenseList,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->account_type = $account_type ?? "";
    $this->aws_account_id = $aws_account_id ?? "";
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->default_license = $default_license ?? "";
    $this->name = $name ?? "";
    $this->signin_delegate_groups = $signin_delegate_groups ?? [];
    $this->supported_licenses = $supported_licenses ?? [];
  }
}

type AccountList = vec<Account>;

type AccountName = string;

class AccountSettings {
  public boolean $disable_remote_control;
  public boolean $enable_dial_out;

  public function __construct(shape(
  ?'disable_remote_control' => boolean,
  ?'enable_dial_out' => boolean,
  ) $s = shape()) {
    $this->disable_remote_control = $disable_remote_control ?? false;
    $this->enable_dial_out = $enable_dial_out ?? false;
  }
}

type AccountType = string;

class AlexaForBusinessMetadata {
  public SensitiveString $alexa_for_business_room_arn;
  public boolean $is_alexa_for_business_enabled;

  public function __construct(shape(
  ?'alexa_for_business_room_arn' => SensitiveString,
  ?'is_alexa_for_business_enabled' => boolean,
  ) $s = shape()) {
    $this->alexa_for_business_room_arn = $alexa_for_business_room_arn ?? "";
    $this->is_alexa_for_business_enabled = $is_alexa_for_business_enabled ?? false;
  }
}

type AreaCode = string;

type Arn = string;

class AssociatePhoneNumberWithUserRequest {
  public string $account_id;
  public E164PhoneNumber $e_164_phone_number;
  public string $user_id;

  public function __construct(shape(
  ?'account_id' => string,
  ?'e_164_phone_number' => E164PhoneNumber,
  ?'user_id' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->e_164_phone_number = $e_164_phone_number ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class AssociatePhoneNumberWithUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociatePhoneNumbersWithVoiceConnectorGroupRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NullableBoolean $force_associate;
  public NonEmptyString $voice_connector_group_id;

  public function __construct(shape(
  ?'e_164_phone_numbers' => E164PhoneNumberList,
  ?'force_associate' => NullableBoolean,
  ?'voice_connector_group_id' => NonEmptyString,
  ) $s = shape()) {
    $this->e_164_phone_numbers = $e_164_phone_numbers ?? [];
    $this->force_associate = $force_associate ?? false;
    $this->voice_connector_group_id = $voice_connector_group_id ?? "";
  }
}

class AssociatePhoneNumbersWithVoiceConnectorGroupResponse {
  public PhoneNumberErrorList $phone_number_errors;

  public function __construct(shape(
  ?'phone_number_errors' => PhoneNumberErrorList,
  ) $s = shape()) {
    $this->phone_number_errors = $phone_number_errors ?? [];
  }
}

class AssociatePhoneNumbersWithVoiceConnectorRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NullableBoolean $force_associate;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'e_164_phone_numbers' => E164PhoneNumberList,
  ?'force_associate' => NullableBoolean,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->e_164_phone_numbers = $e_164_phone_numbers ?? [];
    $this->force_associate = $force_associate ?? false;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class AssociatePhoneNumbersWithVoiceConnectorResponse {
  public PhoneNumberErrorList $phone_number_errors;

  public function __construct(shape(
  ?'phone_number_errors' => PhoneNumberErrorList,
  ) $s = shape()) {
    $this->phone_number_errors = $phone_number_errors ?? [];
  }
}

class AssociateSigninDelegateGroupsWithAccountRequest {
  public NonEmptyString $account_id;
  public SigninDelegateGroupList $signin_delegate_groups;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'signin_delegate_groups' => SigninDelegateGroupList,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->signin_delegate_groups = $signin_delegate_groups ?? [];
  }
}

class AssociateSigninDelegateGroupsWithAccountResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Attendee {
  public GuidString $attendee_id;
  public ExternalUserIdType $external_user_id;
  public JoinTokenString $join_token;

  public function __construct(shape(
  ?'attendee_id' => GuidString,
  ?'external_user_id' => ExternalUserIdType,
  ?'join_token' => JoinTokenString,
  ) $s = shape()) {
    $this->attendee_id = $attendee_id ?? "";
    $this->external_user_id = $external_user_id ?? "";
    $this->join_token = $join_token ?? "";
  }
}

type AttendeeList = vec<Attendee>;

type AttendeeTagKeyList = vec<TagKey>;

type AttendeeTagList = vec<Tag>;

class BadRequestException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type BatchCreateAttendeeErrorList = vec<CreateAttendeeError>;

class BatchCreateAttendeeRequest {
  public CreateAttendeeRequestItemList $attendees;
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'attendees' => CreateAttendeeRequestItemList,
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->attendees = $attendees ?? [];
    $this->meeting_id = $meeting_id ?? "";
  }
}

class BatchCreateAttendeeResponse {
  public AttendeeList $attendees;
  public BatchCreateAttendeeErrorList $errors;

  public function __construct(shape(
  ?'attendees' => AttendeeList,
  ?'errors' => BatchCreateAttendeeErrorList,
  ) $s = shape()) {
    $this->attendees = $attendees ?? [];
    $this->errors = $errors ?? [];
  }
}

class BatchCreateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public MembershipItemList $membership_item_list;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'membership_item_list' => MembershipItemList,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->membership_item_list = $membership_item_list ?? [];
    $this->room_id = $room_id ?? "";
  }
}

class BatchCreateRoomMembershipResponse {
  public MemberErrorList $errors;

  public function __construct(shape(
  ?'errors' => MemberErrorList,
  ) $s = shape()) {
    $this->errors = $errors ?? [];
  }
}

class BatchDeletePhoneNumberRequest {
  public NonEmptyStringList $phone_number_ids;

  public function __construct(shape(
  ?'phone_number_ids' => NonEmptyStringList,
  ) $s = shape()) {
    $this->phone_number_ids = $phone_number_ids ?? [];
  }
}

class BatchDeletePhoneNumberResponse {
  public PhoneNumberErrorList $phone_number_errors;

  public function __construct(shape(
  ?'phone_number_errors' => PhoneNumberErrorList,
  ) $s = shape()) {
    $this->phone_number_errors = $phone_number_errors ?? [];
  }
}

class BatchSuspendUserRequest {
  public NonEmptyString $account_id;
  public UserIdList $user_id_list;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'user_id_list' => UserIdList,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id_list = $user_id_list ?? [];
  }
}

class BatchSuspendUserResponse {
  public UserErrorList $user_errors;

  public function __construct(shape(
  ?'user_errors' => UserErrorList,
  ) $s = shape()) {
    $this->user_errors = $user_errors ?? [];
  }
}

class BatchUnsuspendUserRequest {
  public NonEmptyString $account_id;
  public UserIdList $user_id_list;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'user_id_list' => UserIdList,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id_list = $user_id_list ?? [];
  }
}

class BatchUnsuspendUserResponse {
  public UserErrorList $user_errors;

  public function __construct(shape(
  ?'user_errors' => UserErrorList,
  ) $s = shape()) {
    $this->user_errors = $user_errors ?? [];
  }
}

class BatchUpdatePhoneNumberRequest {
  public UpdatePhoneNumberRequestItemList $update_phone_number_request_items;

  public function __construct(shape(
  ?'update_phone_number_request_items' => UpdatePhoneNumberRequestItemList,
  ) $s = shape()) {
    $this->update_phone_number_request_items = $update_phone_number_request_items ?? [];
  }
}

class BatchUpdatePhoneNumberResponse {
  public PhoneNumberErrorList $phone_number_errors;

  public function __construct(shape(
  ?'phone_number_errors' => PhoneNumberErrorList,
  ) $s = shape()) {
    $this->phone_number_errors = $phone_number_errors ?? [];
  }
}

class BatchUpdateUserRequest {
  public NonEmptyString $account_id;
  public UpdateUserRequestItemList $update_user_request_items;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'update_user_request_items' => UpdateUserRequestItemList,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->update_user_request_items = $update_user_request_items ?? [];
  }
}

class BatchUpdateUserResponse {
  public UserErrorList $user_errors;

  public function __construct(shape(
  ?'user_errors' => UserErrorList,
  ) $s = shape()) {
    $this->user_errors = $user_errors ?? [];
  }
}

type Boolean = bool;

class Bot {
  public SensitiveString $bot_email;
  public string $bot_id;
  public BotType $bot_type;
  public Iso8601Timestamp $created_timestamp;
  public NullableBoolean $disabled;
  public SensitiveString $display_name;
  public SensitiveString $security_token;
  public Iso8601Timestamp $updated_timestamp;
  public string $user_id;

  public function __construct(shape(
  ?'bot_email' => SensitiveString,
  ?'bot_id' => string,
  ?'bot_type' => BotType,
  ?'created_timestamp' => Iso8601Timestamp,
  ?'disabled' => NullableBoolean,
  ?'display_name' => SensitiveString,
  ?'security_token' => SensitiveString,
  ?'updated_timestamp' => Iso8601Timestamp,
  ?'user_id' => string,
  ) $s = shape()) {
    $this->bot_email = $bot_email ?? "";
    $this->bot_id = $bot_id ?? "";
    $this->bot_type = $bot_type ?? "";
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->disabled = $disabled ?? false;
    $this->display_name = $display_name ?? "";
    $this->security_token = $security_token ?? "";
    $this->updated_timestamp = $updated_timestamp ?? 0;
    $this->user_id = $user_id ?? "";
  }
}

type BotList = vec<Bot>;

type BotType = string;

class BusinessCallingSettings {
  public string $cdr_bucket;

  public function __construct(shape(
  ?'cdr_bucket' => string,
  ) $s = shape()) {
    $this->cdr_bucket = $cdr_bucket ?? "";
  }
}

type CallingName = string;

type CallingNameStatus = string;

type CallingRegion = string;

type CallingRegionList = vec<CallingRegion>;

type Capability = string;

type CapabilityList = vec<Capability>;

type ClientRequestToken = string;

class ConflictException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type Country = string;

type CountryList = vec<Country>;

type CpsLimit = int;

class CreateAccountRequest {
  public AccountName $name;

  public function __construct(shape(
  ?'name' => AccountName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

class CreateAccountResponse {
  public Account $account;

  public function __construct(shape(
  ?'account' => Account,
  ) $s = shape()) {
    $this->account = $account ?? null;
  }
}

class CreateAttendeeError {
  public string $error_code;
  public string $error_message;
  public ExternalUserIdType $external_user_id;

  public function __construct(shape(
  ?'error_code' => string,
  ?'error_message' => string,
  ?'external_user_id' => ExternalUserIdType,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->external_user_id = $external_user_id ?? "";
  }
}

class CreateAttendeeRequest {
  public ExternalUserIdType $external_user_id;
  public GuidString $meeting_id;
  public AttendeeTagList $tags;

  public function __construct(shape(
  ?'external_user_id' => ExternalUserIdType,
  ?'meeting_id' => GuidString,
  ?'tags' => AttendeeTagList,
  ) $s = shape()) {
    $this->external_user_id = $external_user_id ?? "";
    $this->meeting_id = $meeting_id ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateAttendeeRequestItem {
  public ExternalUserIdType $external_user_id;
  public AttendeeTagList $tags;

  public function __construct(shape(
  ?'external_user_id' => ExternalUserIdType,
  ?'tags' => AttendeeTagList,
  ) $s = shape()) {
    $this->external_user_id = $external_user_id ?? "";
    $this->tags = $tags ?? [];
  }
}

type CreateAttendeeRequestItemList = vec<CreateAttendeeRequestItem>;

class CreateAttendeeResponse {
  public Attendee $attendee;

  public function __construct(shape(
  ?'attendee' => Attendee,
  ) $s = shape()) {
    $this->attendee = $attendee ?? null;
  }
}

class CreateBotRequest {
  public NonEmptyString $account_id;
  public SensitiveString $display_name;
  public NonEmptyString $domain;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'display_name' => SensitiveString,
  ?'domain' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->display_name = $display_name ?? "";
    $this->domain = $domain ?? "";
  }
}

class CreateBotResponse {
  public Bot $bot;

  public function __construct(shape(
  ?'bot' => Bot,
  ) $s = shape()) {
    $this->bot = $bot ?? null;
  }
}

class CreateMeetingRequest {
  public ClientRequestToken $client_request_token;
  public ExternalMeetingIdType $external_meeting_id;
  public string $media_region;
  public ExternalUserIdType $meeting_host_id;
  public MeetingNotificationConfiguration $notifications_configuration;
  public MeetingTagList $tags;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestToken,
  ?'external_meeting_id' => ExternalMeetingIdType,
  ?'media_region' => string,
  ?'meeting_host_id' => ExternalUserIdType,
  ?'notifications_configuration' => MeetingNotificationConfiguration,
  ?'tags' => MeetingTagList,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? "";
    $this->external_meeting_id = $external_meeting_id ?? "";
    $this->media_region = $media_region ?? "";
    $this->meeting_host_id = $meeting_host_id ?? "";
    $this->notifications_configuration = $notifications_configuration ?? null;
    $this->tags = $tags ?? [];
  }
}

class CreateMeetingResponse {
  public Meeting $meeting;

  public function __construct(shape(
  ?'meeting' => Meeting,
  ) $s = shape()) {
    $this->meeting = $meeting ?? null;
  }
}

class CreatePhoneNumberOrderRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public PhoneNumberProductType $product_type;

  public function __construct(shape(
  ?'e_164_phone_numbers' => E164PhoneNumberList,
  ?'product_type' => PhoneNumberProductType,
  ) $s = shape()) {
    $this->e_164_phone_numbers = $e_164_phone_numbers ?? [];
    $this->product_type = $product_type ?? "";
  }
}

class CreatePhoneNumberOrderResponse {
  public PhoneNumberOrder $phone_number_order;

  public function __construct(shape(
  ?'phone_number_order' => PhoneNumberOrder,
  ) $s = shape()) {
    $this->phone_number_order = $phone_number_order ?? null;
  }
}

class CreateProxySessionRequest {
  public CapabilityList $capabilities;
  public PositiveInteger $expiry_minutes;
  public GeoMatchLevel $geo_match_level;
  public GeoMatchParams $geo_match_params;
  public ProxySessionNameString $name;
  public NumberSelectionBehavior $number_selection_behavior;
  public ParticipantPhoneNumberList $participant_phone_numbers;
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'capabilities' => CapabilityList,
  ?'expiry_minutes' => PositiveInteger,
  ?'geo_match_level' => GeoMatchLevel,
  ?'geo_match_params' => GeoMatchParams,
  ?'name' => ProxySessionNameString,
  ?'number_selection_behavior' => NumberSelectionBehavior,
  ?'participant_phone_numbers' => ParticipantPhoneNumberList,
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->expiry_minutes = $expiry_minutes ?? 0;
    $this->geo_match_level = $geo_match_level ?? "";
    $this->geo_match_params = $geo_match_params ?? null;
    $this->name = $name ?? "";
    $this->number_selection_behavior = $number_selection_behavior ?? "";
    $this->participant_phone_numbers = $participant_phone_numbers ?? [];
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class CreateProxySessionResponse {
  public ProxySession $proxy_session;

  public function __construct(shape(
  ?'proxy_session' => ProxySession,
  ) $s = shape()) {
    $this->proxy_session = $proxy_session ?? null;
  }
}

class CreateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'member_id' => NonEmptyString,
  ?'role' => RoomMembershipRole,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->member_id = $member_id ?? "";
    $this->role = $role ?? "";
    $this->room_id = $room_id ?? "";
  }
}

class CreateRoomMembershipResponse {
  public RoomMembership $room_membership;

  public function __construct(shape(
  ?'room_membership' => RoomMembership,
  ) $s = shape()) {
    $this->room_membership = $room_membership ?? null;
  }
}

class CreateRoomRequest {
  public NonEmptyString $account_id;
  public ClientRequestToken $client_request_token;
  public SensitiveString $name;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'client_request_token' => ClientRequestToken,
  ?'name' => SensitiveString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->client_request_token = $client_request_token ?? "";
    $this->name = $name ?? "";
  }
}

class CreateRoomResponse {
  public Room $room;

  public function __construct(shape(
  ?'room' => Room,
  ) $s = shape()) {
    $this->room = $room ?? null;
  }
}

class CreateUserRequest {
  public NonEmptyString $account_id;
  public EmailAddress $email;
  public UserType $user_type;
  public string $username;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'email' => EmailAddress,
  ?'user_type' => UserType,
  ?'username' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->email = $email ?? "";
    $this->user_type = $user_type ?? "";
    $this->username = $username ?? "";
  }
}

class CreateUserResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
}

class CreateVoiceConnectorGroupRequest {
  public VoiceConnectorGroupName $name;
  public VoiceConnectorItemList $voice_connector_items;

  public function __construct(shape(
  ?'name' => VoiceConnectorGroupName,
  ?'voice_connector_items' => VoiceConnectorItemList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->voice_connector_items = $voice_connector_items ?? [];
  }
}

class CreateVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;

  public function __construct(shape(
  ?'voice_connector_group' => VoiceConnectorGroup,
  ) $s = shape()) {
    $this->voice_connector_group = $voice_connector_group ?? null;
  }
}

class CreateVoiceConnectorRequest {
  public VoiceConnectorAwsRegion $aws_region;
  public VoiceConnectorName $name;
  public boolean $require_encryption;

  public function __construct(shape(
  ?'aws_region' => VoiceConnectorAwsRegion,
  ?'name' => VoiceConnectorName,
  ?'require_encryption' => boolean,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->name = $name ?? "";
    $this->require_encryption = $require_encryption ?? false;
  }
}

class CreateVoiceConnectorResponse {
  public VoiceConnector $voice_connector;

  public function __construct(shape(
  ?'voice_connector' => VoiceConnector,
  ) $s = shape()) {
    $this->voice_connector = $voice_connector ?? null;
  }
}

class Credential {
  public SensitiveString $password;
  public SensitiveString $username;

  public function __construct(shape(
  ?'password' => SensitiveString,
  ?'username' => SensitiveString,
  ) $s = shape()) {
    $this->password = $password ?? "";
    $this->username = $username ?? "";
  }
}

type CredentialList = vec<Credential>;

type DataRetentionInHours = int;

class DeleteAccountRequest {
  public NonEmptyString $account_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
  }
}

class DeleteAccountResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'attendee_id' => GuidString,
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->attendee_id = $attendee_id ?? "";
    $this->meeting_id = $meeting_id ?? "";
  }
}

class DeleteEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'bot_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bot_id = $bot_id ?? "";
  }
}

class DeleteMeetingRequest {
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->meeting_id = $meeting_id ?? "";
  }
}

class DeletePhoneNumberRequest {
  public string $phone_number_id;

  public function __construct(shape(
  ?'phone_number_id' => string,
  ) $s = shape()) {
    $this->phone_number_id = $phone_number_id ?? "";
  }
}

class DeleteProxySessionRequest {
  public NonEmptyString128 $proxy_session_id;
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'proxy_session_id' => NonEmptyString128,
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->proxy_session_id = $proxy_session_id ?? "";
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DeleteRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $member_id;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'member_id' => NonEmptyString,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->member_id = $member_id ?? "";
    $this->room_id = $room_id ?? "";
  }
}

class DeleteRoomRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->room_id = $room_id ?? "";
  }
}

class DeleteVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;

  public function __construct(shape(
  ?'voice_connector_group_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_group_id = $voice_connector_group_id ?? "";
  }
}

class DeleteVoiceConnectorOriginationRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DeleteVoiceConnectorProxyRequest {
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DeleteVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DeleteVoiceConnectorStreamingConfigurationRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DeleteVoiceConnectorTerminationCredentialsRequest {
  public SensitiveStringList $usernames;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'usernames' => SensitiveStringList,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->usernames = $usernames ?? [];
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DeleteVoiceConnectorTerminationRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DisassociatePhoneNumberFromUserRequest {
  public string $account_id;
  public string $user_id;

  public function __construct(shape(
  ?'account_id' => string,
  ?'user_id' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class DisassociatePhoneNumberFromUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociatePhoneNumbersFromVoiceConnectorGroupRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NonEmptyString $voice_connector_group_id;

  public function __construct(shape(
  ?'e_164_phone_numbers' => E164PhoneNumberList,
  ?'voice_connector_group_id' => NonEmptyString,
  ) $s = shape()) {
    $this->e_164_phone_numbers = $e_164_phone_numbers ?? [];
    $this->voice_connector_group_id = $voice_connector_group_id ?? "";
  }
}

class DisassociatePhoneNumbersFromVoiceConnectorGroupResponse {
  public PhoneNumberErrorList $phone_number_errors;

  public function __construct(shape(
  ?'phone_number_errors' => PhoneNumberErrorList,
  ) $s = shape()) {
    $this->phone_number_errors = $phone_number_errors ?? [];
  }
}

class DisassociatePhoneNumbersFromVoiceConnectorRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'e_164_phone_numbers' => E164PhoneNumberList,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->e_164_phone_numbers = $e_164_phone_numbers ?? [];
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class DisassociatePhoneNumbersFromVoiceConnectorResponse {
  public PhoneNumberErrorList $phone_number_errors;

  public function __construct(shape(
  ?'phone_number_errors' => PhoneNumberErrorList,
  ) $s = shape()) {
    $this->phone_number_errors = $phone_number_errors ?? [];
  }
}

class DisassociateSigninDelegateGroupsFromAccountRequest {
  public NonEmptyString $account_id;
  public NonEmptyStringList $group_names;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'group_names' => NonEmptyStringList,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->group_names = $group_names ?? [];
  }
}

class DisassociateSigninDelegateGroupsFromAccountResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type E164PhoneNumber = string;

type E164PhoneNumberList = vec<E164PhoneNumber>;

type EmailAddress = string;

type EmailStatus = string;

type ErrorCode = string;

class EventsConfiguration {
  public string $bot_id;
  public SensitiveString $lambda_function_arn;
  public SensitiveString $outbound_events_https_endpoint;

  public function __construct(shape(
  ?'bot_id' => string,
  ?'lambda_function_arn' => SensitiveString,
  ?'outbound_events_https_endpoint' => SensitiveString,
  ) $s = shape()) {
    $this->bot_id = $bot_id ?? "";
    $this->lambda_function_arn = $lambda_function_arn ?? "";
    $this->outbound_events_https_endpoint = $outbound_events_https_endpoint ?? "";
  }
}

type ExternalMeetingIdType = string;

type ExternalUserIdType = string;

class ForbiddenException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type GeoMatchLevel = string;

class GeoMatchParams {
  public AreaCode $area_code;
  public Country $country;

  public function __construct(shape(
  ?'area_code' => AreaCode,
  ?'country' => Country,
  ) $s = shape()) {
    $this->area_code = $area_code ?? "";
    $this->country = $country ?? "";
  }
}

class GetAccountRequest {
  public NonEmptyString $account_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
  }
}

class GetAccountResponse {
  public Account $account;

  public function __construct(shape(
  ?'account' => Account,
  ) $s = shape()) {
    $this->account = $account ?? null;
  }
}

class GetAccountSettingsRequest {
  public NonEmptyString $account_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
  }
}

class GetAccountSettingsResponse {
  public AccountSettings $account_settings;

  public function __construct(shape(
  ?'account_settings' => AccountSettings,
  ) $s = shape()) {
    $this->account_settings = $account_settings ?? null;
  }
}

class GetAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'attendee_id' => GuidString,
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->attendee_id = $attendee_id ?? "";
    $this->meeting_id = $meeting_id ?? "";
  }
}

class GetAttendeeResponse {
  public Attendee $attendee;

  public function __construct(shape(
  ?'attendee' => Attendee,
  ) $s = shape()) {
    $this->attendee = $attendee ?? null;
  }
}

class GetBotRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'bot_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bot_id = $bot_id ?? "";
  }
}

class GetBotResponse {
  public Bot $bot;

  public function __construct(shape(
  ?'bot' => Bot,
  ) $s = shape()) {
    $this->bot = $bot ?? null;
  }
}

class GetEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'bot_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bot_id = $bot_id ?? "";
  }
}

class GetEventsConfigurationResponse {
  public EventsConfiguration $events_configuration;

  public function __construct(shape(
  ?'events_configuration' => EventsConfiguration,
  ) $s = shape()) {
    $this->events_configuration = $events_configuration ?? null;
  }
}

class GetGlobalSettingsResponse {
  public BusinessCallingSettings $business_calling;
  public VoiceConnectorSettings $voice_connector;

  public function __construct(shape(
  ?'business_calling' => BusinessCallingSettings,
  ?'voice_connector' => VoiceConnectorSettings,
  ) $s = shape()) {
    $this->business_calling = $business_calling ?? null;
    $this->voice_connector = $voice_connector ?? null;
  }
}

class GetMeetingRequest {
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->meeting_id = $meeting_id ?? "";
  }
}

class GetMeetingResponse {
  public Meeting $meeting;

  public function __construct(shape(
  ?'meeting' => Meeting,
  ) $s = shape()) {
    $this->meeting = $meeting ?? null;
  }
}

class GetPhoneNumberOrderRequest {
  public GuidString $phone_number_order_id;

  public function __construct(shape(
  ?'phone_number_order_id' => GuidString,
  ) $s = shape()) {
    $this->phone_number_order_id = $phone_number_order_id ?? "";
  }
}

class GetPhoneNumberOrderResponse {
  public PhoneNumberOrder $phone_number_order;

  public function __construct(shape(
  ?'phone_number_order' => PhoneNumberOrder,
  ) $s = shape()) {
    $this->phone_number_order = $phone_number_order ?? null;
  }
}

class GetPhoneNumberRequest {
  public string $phone_number_id;

  public function __construct(shape(
  ?'phone_number_id' => string,
  ) $s = shape()) {
    $this->phone_number_id = $phone_number_id ?? "";
  }
}

class GetPhoneNumberResponse {
  public PhoneNumber $phone_number;

  public function __construct(shape(
  ?'phone_number' => PhoneNumber,
  ) $s = shape()) {
    $this->phone_number = $phone_number ?? null;
  }
}

class GetPhoneNumberSettingsResponse {
  public CallingName $calling_name;
  public Iso8601Timestamp $calling_name_updated_timestamp;

  public function __construct(shape(
  ?'calling_name' => CallingName,
  ?'calling_name_updated_timestamp' => Iso8601Timestamp,
  ) $s = shape()) {
    $this->calling_name = $calling_name ?? "";
    $this->calling_name_updated_timestamp = $calling_name_updated_timestamp ?? 0;
  }
}

class GetProxySessionRequest {
  public NonEmptyString128 $proxy_session_id;
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'proxy_session_id' => NonEmptyString128,
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->proxy_session_id = $proxy_session_id ?? "";
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetProxySessionResponse {
  public ProxySession $proxy_session;

  public function __construct(shape(
  ?'proxy_session' => ProxySession,
  ) $s = shape()) {
    $this->proxy_session = $proxy_session ?? null;
  }
}

class GetRoomRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->room_id = $room_id ?? "";
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

class GetUserRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'user_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class GetUserResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
}

class GetUserSettingsRequest {
  public string $account_id;
  public string $user_id;

  public function __construct(shape(
  ?'account_id' => string,
  ?'user_id' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class GetUserSettingsResponse {
  public UserSettings $user_settings;

  public function __construct(shape(
  ?'user_settings' => UserSettings,
  ) $s = shape()) {
    $this->user_settings = $user_settings ?? null;
  }
}

class GetVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;

  public function __construct(shape(
  ?'voice_connector_group_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_group_id = $voice_connector_group_id ?? "";
  }
}

class GetVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;

  public function __construct(shape(
  ?'voice_connector_group' => VoiceConnectorGroup,
  ) $s = shape()) {
    $this->voice_connector_group = $voice_connector_group ?? null;
  }
}

class GetVoiceConnectorLoggingConfigurationRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetVoiceConnectorLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;

  public function __construct(shape(
  ?'logging_configuration' => LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $logging_configuration ?? null;
  }
}

class GetVoiceConnectorOriginationRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetVoiceConnectorOriginationResponse {
  public Origination $origination;

  public function __construct(shape(
  ?'origination' => Origination,
  ) $s = shape()) {
    $this->origination = $origination ?? null;
  }
}

class GetVoiceConnectorProxyRequest {
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetVoiceConnectorProxyResponse {
  public Proxy $proxy;

  public function __construct(shape(
  ?'proxy' => Proxy,
  ) $s = shape()) {
    $this->proxy = $proxy ?? null;
  }
}

class GetVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetVoiceConnectorResponse {
  public VoiceConnector $voice_connector;

  public function __construct(shape(
  ?'voice_connector' => VoiceConnector,
  ) $s = shape()) {
    $this->voice_connector = $voice_connector ?? null;
  }
}

class GetVoiceConnectorStreamingConfigurationRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetVoiceConnectorStreamingConfigurationResponse {
  public StreamingConfiguration $streaming_configuration;

  public function __construct(shape(
  ?'streaming_configuration' => StreamingConfiguration,
  ) $s = shape()) {
    $this->streaming_configuration = $streaming_configuration ?? null;
  }
}

class GetVoiceConnectorTerminationHealthRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetVoiceConnectorTerminationHealthResponse {
  public TerminationHealth $termination_health;

  public function __construct(shape(
  ?'termination_health' => TerminationHealth,
  ) $s = shape()) {
    $this->termination_health = $termination_health ?? null;
  }
}

class GetVoiceConnectorTerminationRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class GetVoiceConnectorTerminationResponse {
  public Termination $termination;

  public function __construct(shape(
  ?'termination' => Termination,
  ) $s = shape()) {
    $this->termination = $termination ?? null;
  }
}

type GuidString = string;

type Integer = int;

class Invite {
  public EmailAddress $email_address;
  public EmailStatus $email_status;
  public string $invite_id;
  public InviteStatus $status;

  public function __construct(shape(
  ?'email_address' => EmailAddress,
  ?'email_status' => EmailStatus,
  ?'invite_id' => string,
  ?'status' => InviteStatus,
  ) $s = shape()) {
    $this->email_address = $email_address ?? "";
    $this->email_status = $email_status ?? "";
    $this->invite_id = $invite_id ?? "";
    $this->status = $status ?? "";
  }
}

type InviteList = vec<Invite>;

type InviteStatus = string;

class InviteUsersRequest {
  public NonEmptyString $account_id;
  public UserEmailList $user_email_list;
  public UserType $user_type;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'user_email_list' => UserEmailList,
  ?'user_type' => UserType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_email_list = $user_email_list ?? [];
    $this->user_type = $user_type ?? "";
  }
}

class InviteUsersResponse {
  public InviteList $invites;

  public function __construct(shape(
  ?'invites' => InviteList,
  ) $s = shape()) {
    $this->invites = $invites ?? [];
  }
}

type Iso8601Timestamp = int;

type JoinTokenString = string;

type License = string;

type LicenseList = vec<License>;

class ListAccountsRequest {
  public ProfileServiceMaxResults $max_results;
  public AccountName $name;
  public string $next_token;
  public EmailAddress $user_email;

  public function __construct(shape(
  ?'max_results' => ProfileServiceMaxResults,
  ?'name' => AccountName,
  ?'next_token' => string,
  ?'user_email' => EmailAddress,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
    $this->user_email = $user_email ?? "";
  }
}

class ListAccountsResponse {
  public AccountList $accounts;
  public string $next_token;

  public function __construct(shape(
  ?'accounts' => AccountList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->accounts = $accounts ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListAttendeeTagsRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'attendee_id' => GuidString,
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->attendee_id = $attendee_id ?? "";
    $this->meeting_id = $meeting_id ?? "";
  }
}

class ListAttendeeTagsResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListAttendeesRequest {
  public ResultMax $max_results;
  public GuidString $meeting_id;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => ResultMax,
  ?'meeting_id' => GuidString,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->meeting_id = $meeting_id ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListAttendeesResponse {
  public AttendeeList $attendees;
  public string $next_token;

  public function __construct(shape(
  ?'attendees' => AttendeeList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->attendees = $attendees ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListBotsRequest {
  public NonEmptyString $account_id;
  public ResultMax $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'max_results' => ResultMax,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListBotsResponse {
  public BotList $bots;
  public string $next_token;

  public function __construct(shape(
  ?'bots' => BotList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->bots = $bots ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListMeetingTagsRequest {
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->meeting_id = $meeting_id ?? "";
  }
}

class ListMeetingTagsResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListMeetingsRequest {
  public ResultMax $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => ResultMax,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListMeetingsResponse {
  public MeetingList $meetings;
  public string $next_token;

  public function __construct(shape(
  ?'meetings' => MeetingList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->meetings = $meetings ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListPhoneNumberOrdersRequest {
  public ResultMax $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => ResultMax,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListPhoneNumberOrdersResponse {
  public string $next_token;
  public PhoneNumberOrderList $phone_number_orders;

  public function __construct(shape(
  ?'next_token' => string,
  ?'phone_number_orders' => PhoneNumberOrderList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->phone_number_orders = $phone_number_orders ?? [];
  }
}

class ListPhoneNumbersRequest {
  public PhoneNumberAssociationName $filter_name;
  public string $filter_value;
  public ResultMax $max_results;
  public string $next_token;
  public PhoneNumberProductType $product_type;
  public PhoneNumberStatus $status;

  public function __construct(shape(
  ?'filter_name' => PhoneNumberAssociationName,
  ?'filter_value' => string,
  ?'max_results' => ResultMax,
  ?'next_token' => string,
  ?'product_type' => PhoneNumberProductType,
  ?'status' => PhoneNumberStatus,
  ) $s = shape()) {
    $this->filter_name = $filter_name ?? "";
    $this->filter_value = $filter_value ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->product_type = $product_type ?? "";
    $this->status = $status ?? "";
  }
}

class ListPhoneNumbersResponse {
  public string $next_token;
  public PhoneNumberList $phone_numbers;

  public function __construct(shape(
  ?'next_token' => string,
  ?'phone_numbers' => PhoneNumberList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->phone_numbers = $phone_numbers ?? [];
  }
}

class ListProxySessionsRequest {
  public ResultMax $max_results;
  public NextTokenString $next_token;
  public ProxySessionStatus $status;
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'max_results' => ResultMax,
  ?'next_token' => NextTokenString,
  ?'status' => ProxySessionStatus,
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? "";
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class ListProxySessionsResponse {
  public NextTokenString $next_token;
  public ProxySessions $proxy_sessions;

  public function __construct(shape(
  ?'next_token' => NextTokenString,
  ?'proxy_sessions' => ProxySessions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->proxy_sessions = $proxy_sessions ?? [];
  }
}

class ListRoomMembershipsRequest {
  public NonEmptyString $account_id;
  public ResultMax $max_results;
  public string $next_token;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'max_results' => ResultMax,
  ?'next_token' => string,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->room_id = $room_id ?? "";
  }
}

class ListRoomMembershipsResponse {
  public string $next_token;
  public RoomMembershipList $room_memberships;

  public function __construct(shape(
  ?'next_token' => string,
  ?'room_memberships' => RoomMembershipList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->room_memberships = $room_memberships ?? [];
  }
}

class ListRoomsRequest {
  public NonEmptyString $account_id;
  public ResultMax $max_results;
  public string $member_id;
  public string $next_token;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'max_results' => ResultMax,
  ?'member_id' => string,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->member_id = $member_id ?? "";
    $this->next_token = $next_token ?? "";
  }
}

class ListRoomsResponse {
  public string $next_token;
  public RoomList $rooms;

  public function __construct(shape(
  ?'next_token' => string,
  ?'rooms' => RoomList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->rooms = $rooms ?? [];
  }
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

class ListUsersRequest {
  public NonEmptyString $account_id;
  public ProfileServiceMaxResults $max_results;
  public string $next_token;
  public EmailAddress $user_email;
  public UserType $user_type;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'max_results' => ProfileServiceMaxResults,
  ?'next_token' => string,
  ?'user_email' => EmailAddress,
  ?'user_type' => UserType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->user_email = $user_email ?? "";
    $this->user_type = $user_type ?? "";
  }
}

class ListUsersResponse {
  public string $next_token;
  public UserList $users;

  public function __construct(shape(
  ?'next_token' => string,
  ?'users' => UserList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->users = $users ?? [];
  }
}

class ListVoiceConnectorGroupsRequest {
  public ResultMax $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => ResultMax,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListVoiceConnectorGroupsResponse {
  public string $next_token;
  public VoiceConnectorGroupList $voice_connector_groups;

  public function __construct(shape(
  ?'next_token' => string,
  ?'voice_connector_groups' => VoiceConnectorGroupList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->voice_connector_groups = $voice_connector_groups ?? [];
  }
}

class ListVoiceConnectorTerminationCredentialsRequest {
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class ListVoiceConnectorTerminationCredentialsResponse {
  public SensitiveStringList $usernames;

  public function __construct(shape(
  ?'usernames' => SensitiveStringList,
  ) $s = shape()) {
    $this->usernames = $usernames ?? [];
  }
}

class ListVoiceConnectorsRequest {
  public ResultMax $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => ResultMax,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListVoiceConnectorsResponse {
  public string $next_token;
  public VoiceConnectorList $voice_connectors;

  public function __construct(shape(
  ?'next_token' => string,
  ?'voice_connectors' => VoiceConnectorList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->voice_connectors = $voice_connectors ?? [];
  }
}

class LoggingConfiguration {
  public boolean $enable_sip_logs;

  public function __construct(shape(
  ?'enable_sip_logs' => boolean,
  ) $s = shape()) {
    $this->enable_sip_logs = $enable_sip_logs ?? false;
  }
}

class LogoutUserRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'user_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class LogoutUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class MediaPlacement {
  public UriType $audio_fallback_url;
  public UriType $audio_host_url;
  public UriType $screen_data_url;
  public UriType $screen_sharing_url;
  public UriType $screen_viewing_url;
  public UriType $signaling_url;
  public UriType $turn_control_url;

  public function __construct(shape(
  ?'audio_fallback_url' => UriType,
  ?'audio_host_url' => UriType,
  ?'screen_data_url' => UriType,
  ?'screen_sharing_url' => UriType,
  ?'screen_viewing_url' => UriType,
  ?'signaling_url' => UriType,
  ?'turn_control_url' => UriType,
  ) $s = shape()) {
    $this->audio_fallback_url = $audio_fallback_url ?? "";
    $this->audio_host_url = $audio_host_url ?? "";
    $this->screen_data_url = $screen_data_url ?? "";
    $this->screen_sharing_url = $screen_sharing_url ?? "";
    $this->screen_viewing_url = $screen_viewing_url ?? "";
    $this->signaling_url = $signaling_url ?? "";
    $this->turn_control_url = $turn_control_url ?? "";
  }
}

class Meeting {
  public ExternalMeetingIdType $external_meeting_id;
  public MediaPlacement $media_placement;
  public string $media_region;
  public GuidString $meeting_id;

  public function __construct(shape(
  ?'external_meeting_id' => ExternalMeetingIdType,
  ?'media_placement' => MediaPlacement,
  ?'media_region' => string,
  ?'meeting_id' => GuidString,
  ) $s = shape()) {
    $this->external_meeting_id = $external_meeting_id ?? "";
    $this->media_placement = $media_placement ?? null;
    $this->media_region = $media_region ?? "";
    $this->meeting_id = $meeting_id ?? "";
  }
}

type MeetingList = vec<Meeting>;

class MeetingNotificationConfiguration {
  public Arn $sns_topic_arn;
  public Arn $sqs_queue_arn;

  public function __construct(shape(
  ?'sns_topic_arn' => Arn,
  ?'sqs_queue_arn' => Arn,
  ) $s = shape()) {
    $this->sns_topic_arn = $sns_topic_arn ?? "";
    $this->sqs_queue_arn = $sqs_queue_arn ?? "";
  }
}

type MeetingTagKeyList = vec<TagKey>;

type MeetingTagList = vec<Tag>;

class Member {
  public NonEmptyString $account_id;
  public SensitiveString $email;
  public SensitiveString $full_name;
  public NonEmptyString $member_id;
  public MemberType $member_type;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'email' => SensitiveString,
  ?'full_name' => SensitiveString,
  ?'member_id' => NonEmptyString,
  ?'member_type' => MemberType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->email = $email ?? "";
    $this->full_name = $full_name ?? "";
    $this->member_id = $member_id ?? "";
    $this->member_type = $member_type ?? "";
  }
}

class MemberError {
  public ErrorCode $error_code;
  public string $error_message;
  public NonEmptyString $member_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => string,
  ?'member_id' => NonEmptyString,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->member_id = $member_id ?? "";
  }
}

type MemberErrorList = vec<MemberError>;

type MemberType = string;

class MembershipItem {
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;

  public function __construct(shape(
  ?'member_id' => NonEmptyString,
  ?'role' => RoomMembershipRole,
  ) $s = shape()) {
    $this->member_id = $member_id ?? "";
    $this->role = $role ?? "";
  }
}

type MembershipItemList = vec<MembershipItem>;

type NextTokenString = string;

type NonEmptyString = string;

type NonEmptyString128 = string;

type NonEmptyStringList = vec<String>;

class NotFoundException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type NullableBoolean = bool;

type NumberSelectionBehavior = string;

class OrderedPhoneNumber {
  public E164PhoneNumber $e_164_phone_number;
  public OrderedPhoneNumberStatus $status;

  public function __construct(shape(
  ?'e_164_phone_number' => E164PhoneNumber,
  ?'status' => OrderedPhoneNumberStatus,
  ) $s = shape()) {
    $this->e_164_phone_number = $e_164_phone_number ?? "";
    $this->status = $status ?? "";
  }
}

type OrderedPhoneNumberList = vec<OrderedPhoneNumber>;

type OrderedPhoneNumberStatus = string;

class Origination {
  public boolean $disabled;
  public OriginationRouteList $routes;

  public function __construct(shape(
  ?'disabled' => boolean,
  ?'routes' => OriginationRouteList,
  ) $s = shape()) {
    $this->disabled = $disabled ?? false;
    $this->routes = $routes ?? [];
  }
}

class OriginationRoute {
  public string $host;
  public Port $port;
  public OriginationRoutePriority $priority;
  public OriginationRouteProtocol $protocol;
  public OriginationRouteWeight $weight;

  public function __construct(shape(
  ?'host' => string,
  ?'port' => Port,
  ?'priority' => OriginationRoutePriority,
  ?'protocol' => OriginationRouteProtocol,
  ?'weight' => OriginationRouteWeight,
  ) $s = shape()) {
    $this->host = $host ?? "";
    $this->port = $port ?? 0;
    $this->priority = $priority ?? 0;
    $this->protocol = $protocol ?? "";
    $this->weight = $weight ?? 0;
  }
}

type OriginationRouteList = vec<OriginationRoute>;

type OriginationRoutePriority = int;

type OriginationRouteProtocol = string;

type OriginationRouteWeight = int;

class Participant {
  public E164PhoneNumber $phone_number;
  public E164PhoneNumber $proxy_phone_number;

  public function __construct(shape(
  ?'phone_number' => E164PhoneNumber,
  ?'proxy_phone_number' => E164PhoneNumber,
  ) $s = shape()) {
    $this->phone_number = $phone_number ?? "";
    $this->proxy_phone_number = $proxy_phone_number ?? "";
  }
}

type ParticipantPhoneNumberList = vec<E164PhoneNumber>;

type Participants = vec<Participant>;

class PhoneNumber {
  public PhoneNumberAssociationList $associations;
  public CallingName $calling_name;
  public CallingNameStatus $calling_name_status;
  public PhoneNumberCapabilities $capabilities;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $deletion_timestamp;
  public E164PhoneNumber $e_164_phone_number;
  public string $phone_number_id;
  public PhoneNumberProductType $product_type;
  public PhoneNumberStatus $status;
  public PhoneNumberType $type;
  public Iso8601Timestamp $updated_timestamp;

  public function __construct(shape(
  ?'associations' => PhoneNumberAssociationList,
  ?'calling_name' => CallingName,
  ?'calling_name_status' => CallingNameStatus,
  ?'capabilities' => PhoneNumberCapabilities,
  ?'created_timestamp' => Iso8601Timestamp,
  ?'deletion_timestamp' => Iso8601Timestamp,
  ?'e_164_phone_number' => E164PhoneNumber,
  ?'phone_number_id' => string,
  ?'product_type' => PhoneNumberProductType,
  ?'status' => PhoneNumberStatus,
  ?'type' => PhoneNumberType,
  ?'updated_timestamp' => Iso8601Timestamp,
  ) $s = shape()) {
    $this->associations = $associations ?? [];
    $this->calling_name = $calling_name ?? "";
    $this->calling_name_status = $calling_name_status ?? "";
    $this->capabilities = $capabilities ?? null;
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->deletion_timestamp = $deletion_timestamp ?? 0;
    $this->e_164_phone_number = $e_164_phone_number ?? "";
    $this->phone_number_id = $phone_number_id ?? "";
    $this->product_type = $product_type ?? "";
    $this->status = $status ?? "";
    $this->type = $type ?? "";
    $this->updated_timestamp = $updated_timestamp ?? 0;
  }
}

class PhoneNumberAssociation {
  public Iso8601Timestamp $associated_timestamp;
  public PhoneNumberAssociationName $name;
  public string $value;

  public function __construct(shape(
  ?'associated_timestamp' => Iso8601Timestamp,
  ?'name' => PhoneNumberAssociationName,
  ?'value' => string,
  ) $s = shape()) {
    $this->associated_timestamp = $associated_timestamp ?? 0;
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type PhoneNumberAssociationList = vec<PhoneNumberAssociation>;

type PhoneNumberAssociationName = string;

class PhoneNumberCapabilities {
  public NullableBoolean $inbound_call;
  public NullableBoolean $inbound_mms;
  public NullableBoolean $inbound_sms;
  public NullableBoolean $outbound_call;
  public NullableBoolean $outbound_mms;
  public NullableBoolean $outbound_sms;

  public function __construct(shape(
  ?'inbound_call' => NullableBoolean,
  ?'inbound_mms' => NullableBoolean,
  ?'inbound_sms' => NullableBoolean,
  ?'outbound_call' => NullableBoolean,
  ?'outbound_mms' => NullableBoolean,
  ?'outbound_sms' => NullableBoolean,
  ) $s = shape()) {
    $this->inbound_call = $inbound_call ?? false;
    $this->inbound_mms = $inbound_mms ?? false;
    $this->inbound_sms = $inbound_sms ?? false;
    $this->outbound_call = $outbound_call ?? false;
    $this->outbound_mms = $outbound_mms ?? false;
    $this->outbound_sms = $outbound_sms ?? false;
  }
}

class PhoneNumberError {
  public ErrorCode $error_code;
  public string $error_message;
  public NonEmptyString $phone_number_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => string,
  ?'phone_number_id' => NonEmptyString,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->phone_number_id = $phone_number_id ?? "";
  }
}

type PhoneNumberErrorList = vec<PhoneNumberError>;

type PhoneNumberList = vec<PhoneNumber>;

type PhoneNumberMaxResults = int;

class PhoneNumberOrder {
  public Iso8601Timestamp $created_timestamp;
  public OrderedPhoneNumberList $ordered_phone_numbers;
  public GuidString $phone_number_order_id;
  public PhoneNumberProductType $product_type;
  public PhoneNumberOrderStatus $status;
  public Iso8601Timestamp $updated_timestamp;

  public function __construct(shape(
  ?'created_timestamp' => Iso8601Timestamp,
  ?'ordered_phone_numbers' => OrderedPhoneNumberList,
  ?'phone_number_order_id' => GuidString,
  ?'product_type' => PhoneNumberProductType,
  ?'status' => PhoneNumberOrderStatus,
  ?'updated_timestamp' => Iso8601Timestamp,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->ordered_phone_numbers = $ordered_phone_numbers ?? [];
    $this->phone_number_order_id = $phone_number_order_id ?? "";
    $this->product_type = $product_type ?? "";
    $this->status = $status ?? "";
    $this->updated_timestamp = $updated_timestamp ?? 0;
  }
}

type PhoneNumberOrderList = vec<PhoneNumberOrder>;

type PhoneNumberOrderStatus = string;

type PhoneNumberProductType = string;

type PhoneNumberStatus = string;

type PhoneNumberType = string;

type Port = int;

type PositiveInteger = int;

type ProfileServiceMaxResults = int;

class Proxy {
  public int $default_session_expiry_minutes;
  public boolean $disabled;
  public E164PhoneNumber $fall_back_phone_number;
  public StringList $phone_number_countries;

  public function __construct(shape(
  ?'default_session_expiry_minutes' => int,
  ?'disabled' => boolean,
  ?'fall_back_phone_number' => E164PhoneNumber,
  ?'phone_number_countries' => StringList,
  ) $s = shape()) {
    $this->default_session_expiry_minutes = $default_session_expiry_minutes ?? 0;
    $this->disabled = $disabled ?? false;
    $this->fall_back_phone_number = $fall_back_phone_number ?? "";
    $this->phone_number_countries = $phone_number_countries ?? [];
  }
}

class ProxySession {
  public CapabilityList $capabilities;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $ended_timestamp;
  public PositiveInteger $expiry_minutes;
  public GeoMatchLevel $geo_match_level;
  public GeoMatchParams $geo_match_params;
  public String128 $name;
  public NumberSelectionBehavior $number_selection_behavior;
  public Participants $participants;
  public NonEmptyString128 $proxy_session_id;
  public ProxySessionStatus $status;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'capabilities' => CapabilityList,
  ?'created_timestamp' => Iso8601Timestamp,
  ?'ended_timestamp' => Iso8601Timestamp,
  ?'expiry_minutes' => PositiveInteger,
  ?'geo_match_level' => GeoMatchLevel,
  ?'geo_match_params' => GeoMatchParams,
  ?'name' => String128,
  ?'number_selection_behavior' => NumberSelectionBehavior,
  ?'participants' => Participants,
  ?'proxy_session_id' => NonEmptyString128,
  ?'status' => ProxySessionStatus,
  ?'updated_timestamp' => Iso8601Timestamp,
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->ended_timestamp = $ended_timestamp ?? 0;
    $this->expiry_minutes = $expiry_minutes ?? 0;
    $this->geo_match_level = $geo_match_level ?? "";
    $this->geo_match_params = $geo_match_params ?? null;
    $this->name = $name ?? "";
    $this->number_selection_behavior = $number_selection_behavior ?? "";
    $this->participants = $participants ?? [];
    $this->proxy_session_id = $proxy_session_id ?? "";
    $this->status = $status ?? "";
    $this->updated_timestamp = $updated_timestamp ?? 0;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

type ProxySessionNameString = string;

type ProxySessionStatus = string;

type ProxySessions = vec<ProxySession>;

class PutEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
  public SensitiveString $lambda_function_arn;
  public SensitiveString $outbound_events_https_endpoint;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'bot_id' => NonEmptyString,
  ?'lambda_function_arn' => SensitiveString,
  ?'outbound_events_https_endpoint' => SensitiveString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bot_id = $bot_id ?? "";
    $this->lambda_function_arn = $lambda_function_arn ?? "";
    $this->outbound_events_https_endpoint = $outbound_events_https_endpoint ?? "";
  }
}

class PutEventsConfigurationResponse {
  public EventsConfiguration $events_configuration;

  public function __construct(shape(
  ?'events_configuration' => EventsConfiguration,
  ) $s = shape()) {
    $this->events_configuration = $events_configuration ?? null;
  }
}

class PutVoiceConnectorLoggingConfigurationRequest {
  public LoggingConfiguration $logging_configuration;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'logging_configuration' => LoggingConfiguration,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->logging_configuration = $logging_configuration ?? null;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class PutVoiceConnectorLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;

  public function __construct(shape(
  ?'logging_configuration' => LoggingConfiguration,
  ) $s = shape()) {
    $this->logging_configuration = $logging_configuration ?? null;
  }
}

class PutVoiceConnectorOriginationRequest {
  public Origination $origination;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'origination' => Origination,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->origination = $origination ?? null;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class PutVoiceConnectorOriginationResponse {
  public Origination $origination;

  public function __construct(shape(
  ?'origination' => Origination,
  ) $s = shape()) {
    $this->origination = $origination ?? null;
  }
}

class PutVoiceConnectorProxyRequest {
  public int $default_session_expiry_minutes;
  public boolean $disabled;
  public E164PhoneNumber $fall_back_phone_number;
  public CountryList $phone_number_pool_countries;
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'default_session_expiry_minutes' => int,
  ?'disabled' => boolean,
  ?'fall_back_phone_number' => E164PhoneNumber,
  ?'phone_number_pool_countries' => CountryList,
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->default_session_expiry_minutes = $default_session_expiry_minutes ?? 0;
    $this->disabled = $disabled ?? false;
    $this->fall_back_phone_number = $fall_back_phone_number ?? "";
    $this->phone_number_pool_countries = $phone_number_pool_countries ?? [];
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class PutVoiceConnectorProxyResponse {
  public Proxy $proxy;

  public function __construct(shape(
  ?'proxy' => Proxy,
  ) $s = shape()) {
    $this->proxy = $proxy ?? null;
  }
}

class PutVoiceConnectorStreamingConfigurationRequest {
  public StreamingConfiguration $streaming_configuration;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'streaming_configuration' => StreamingConfiguration,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->streaming_configuration = $streaming_configuration ?? null;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class PutVoiceConnectorStreamingConfigurationResponse {
  public StreamingConfiguration $streaming_configuration;

  public function __construct(shape(
  ?'streaming_configuration' => StreamingConfiguration,
  ) $s = shape()) {
    $this->streaming_configuration = $streaming_configuration ?? null;
  }
}

class PutVoiceConnectorTerminationCredentialsRequest {
  public CredentialList $credentials;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'credentials' => CredentialList,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->credentials = $credentials ?? [];
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class PutVoiceConnectorTerminationRequest {
  public Termination $termination;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'termination' => Termination,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->termination = $termination ?? null;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class PutVoiceConnectorTerminationResponse {
  public Termination $termination;

  public function __construct(shape(
  ?'termination' => Termination,
  ) $s = shape()) {
    $this->termination = $termination ?? null;
  }
}

class RegenerateSecurityTokenRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'bot_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bot_id = $bot_id ?? "";
  }
}

class RegenerateSecurityTokenResponse {
  public Bot $bot;

  public function __construct(shape(
  ?'bot' => Bot,
  ) $s = shape()) {
    $this->bot = $bot ?? null;
  }
}

type RegistrationStatus = string;

class ResetPersonalPINRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'user_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id = $user_id ?? "";
  }
}

class ResetPersonalPINResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
}

class ResourceLimitExceededException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class RestorePhoneNumberRequest {
  public NonEmptyString $phone_number_id;

  public function __construct(shape(
  ?'phone_number_id' => NonEmptyString,
  ) $s = shape()) {
    $this->phone_number_id = $phone_number_id ?? "";
  }
}

class RestorePhoneNumberResponse {
  public PhoneNumber $phone_number;

  public function __construct(shape(
  ?'phone_number' => PhoneNumber,
  ) $s = shape()) {
    $this->phone_number = $phone_number ?? null;
  }
}

type ResultMax = int;

class Room {
  public NonEmptyString $account_id;
  public NonEmptyString $created_by;
  public Iso8601Timestamp $created_timestamp;
  public SensitiveString $name;
  public NonEmptyString $room_id;
  public Iso8601Timestamp $updated_timestamp;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'created_by' => NonEmptyString,
  ?'created_timestamp' => Iso8601Timestamp,
  ?'name' => SensitiveString,
  ?'room_id' => NonEmptyString,
  ?'updated_timestamp' => Iso8601Timestamp,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->created_by = $created_by ?? "";
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->name = $name ?? "";
    $this->room_id = $room_id ?? "";
    $this->updated_timestamp = $updated_timestamp ?? 0;
  }
}

type RoomList = vec<Room>;

class RoomMembership {
  public NonEmptyString $invited_by;
  public Member $member;
  public RoomMembershipRole $role;
  public NonEmptyString $room_id;
  public Iso8601Timestamp $updated_timestamp;

  public function __construct(shape(
  ?'invited_by' => NonEmptyString,
  ?'member' => Member,
  ?'role' => RoomMembershipRole,
  ?'room_id' => NonEmptyString,
  ?'updated_timestamp' => Iso8601Timestamp,
  ) $s = shape()) {
    $this->invited_by = $invited_by ?? "";
    $this->member = $member ?? null;
    $this->role = $role ?? "";
    $this->room_id = $room_id ?? "";
    $this->updated_timestamp = $updated_timestamp ?? 0;
  }
}

type RoomMembershipList = vec<RoomMembership>;

type RoomMembershipRole = string;

class SearchAvailablePhoneNumbersRequest {
  public string $area_code;
  public string $city;
  public string $country;
  public PhoneNumberMaxResults $max_results;
  public string $next_token;
  public string $state;
  public TollFreePrefix $toll_free_prefix;

  public function __construct(shape(
  ?'area_code' => string,
  ?'city' => string,
  ?'country' => string,
  ?'max_results' => PhoneNumberMaxResults,
  ?'next_token' => string,
  ?'state' => string,
  ?'toll_free_prefix' => TollFreePrefix,
  ) $s = shape()) {
    $this->area_code = $area_code ?? "";
    $this->city = $city ?? "";
    $this->country = $country ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->state = $state ?? "";
    $this->toll_free_prefix = $toll_free_prefix ?? "";
  }
}

class SearchAvailablePhoneNumbersResponse {
  public E164PhoneNumberList $e_164_phone_numbers;

  public function __construct(shape(
  ?'e_164_phone_numbers' => E164PhoneNumberList,
  ) $s = shape()) {
    $this->e_164_phone_numbers = $e_164_phone_numbers ?? [];
  }
}

type SensitiveString = string;

type SensitiveStringList = vec<SensitiveString>;

class ServiceFailureException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class ServiceUnavailableException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class SigninDelegateGroup {
  public NonEmptyString $group_name;

  public function __construct(shape(
  ?'group_name' => NonEmptyString,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
  }
}

type SigninDelegateGroupList = vec<SigninDelegateGroup>;

class StreamingConfiguration {
  public DataRetentionInHours $data_retention_in_hours;
  public boolean $disabled;

  public function __construct(shape(
  ?'data_retention_in_hours' => DataRetentionInHours,
  ?'disabled' => boolean,
  ) $s = shape()) {
    $this->data_retention_in_hours = $data_retention_in_hours ?? 0;
    $this->disabled = $disabled ?? false;
  }
}

type String = string;

type String128 = string;

type StringList = vec<String>;

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

class TagAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
  public AttendeeTagList $tags;

  public function __construct(shape(
  ?'attendee_id' => GuidString,
  ?'meeting_id' => GuidString,
  ?'tags' => AttendeeTagList,
  ) $s = shape()) {
    $this->attendee_id = $attendee_id ?? "";
    $this->meeting_id = $meeting_id ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagMeetingRequest {
  public GuidString $meeting_id;
  public MeetingTagList $tags;

  public function __construct(shape(
  ?'meeting_id' => GuidString,
  ?'tags' => MeetingTagList,
  ) $s = shape()) {
    $this->meeting_id = $meeting_id ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

class TelephonySettings {
  public boolean $inbound_calling;
  public boolean $outbound_calling;
  public boolean $sms;

  public function __construct(shape(
  ?'inbound_calling' => boolean,
  ?'outbound_calling' => boolean,
  ?'sms' => boolean,
  ) $s = shape()) {
    $this->inbound_calling = $inbound_calling ?? false;
    $this->outbound_calling = $outbound_calling ?? false;
    $this->sms = $sms ?? false;
  }
}

class Termination {
  public CallingRegionList $calling_regions;
  public StringList $cidr_allowed_list;
  public CpsLimit $cps_limit;
  public E164PhoneNumber $default_phone_number;
  public boolean $disabled;

  public function __construct(shape(
  ?'calling_regions' => CallingRegionList,
  ?'cidr_allowed_list' => StringList,
  ?'cps_limit' => CpsLimit,
  ?'default_phone_number' => E164PhoneNumber,
  ?'disabled' => boolean,
  ) $s = shape()) {
    $this->calling_regions = $calling_regions ?? [];
    $this->cidr_allowed_list = $cidr_allowed_list ?? [];
    $this->cps_limit = $cps_limit ?? 0;
    $this->default_phone_number = $default_phone_number ?? "";
    $this->disabled = $disabled ?? false;
  }
}

class TerminationHealth {
  public string $source;
  public Iso8601Timestamp $timestamp;

  public function __construct(shape(
  ?'source' => string,
  ?'timestamp' => Iso8601Timestamp,
  ) $s = shape()) {
    $this->source = $source ?? "";
    $this->timestamp = $timestamp ?? 0;
  }
}

class ThrottledClientException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type TollFreePrefix = string;

class UnauthorizedClientException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class UnprocessableEntityException {
  public ErrorCode $code;
  public string $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

class UntagAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
  public AttendeeTagKeyList $tag_keys;

  public function __construct(shape(
  ?'attendee_id' => GuidString,
  ?'meeting_id' => GuidString,
  ?'tag_keys' => AttendeeTagKeyList,
  ) $s = shape()) {
    $this->attendee_id = $attendee_id ?? "";
    $this->meeting_id = $meeting_id ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagMeetingRequest {
  public GuidString $meeting_id;
  public MeetingTagKeyList $tag_keys;

  public function __construct(shape(
  ?'meeting_id' => GuidString,
  ?'tag_keys' => MeetingTagKeyList,
  ) $s = shape()) {
    $this->meeting_id = $meeting_id ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UpdateAccountRequest {
  public NonEmptyString $account_id;
  public AccountName $name;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'name' => AccountName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? "";
  }
}

class UpdateAccountResponse {
  public Account $account;

  public function __construct(shape(
  ?'account' => Account,
  ) $s = shape()) {
    $this->account = $account ?? null;
  }
}

class UpdateAccountSettingsRequest {
  public NonEmptyString $account_id;
  public AccountSettings $account_settings;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'account_settings' => AccountSettings,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->account_settings = $account_settings ?? null;
  }
}

class UpdateAccountSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateBotRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
  public NullableBoolean $disabled;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'bot_id' => NonEmptyString,
  ?'disabled' => NullableBoolean,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->bot_id = $bot_id ?? "";
    $this->disabled = $disabled ?? false;
  }
}

class UpdateBotResponse {
  public Bot $bot;

  public function __construct(shape(
  ?'bot' => Bot,
  ) $s = shape()) {
    $this->bot = $bot ?? null;
  }
}

class UpdateGlobalSettingsRequest {
  public BusinessCallingSettings $business_calling;
  public VoiceConnectorSettings $voice_connector;

  public function __construct(shape(
  ?'business_calling' => BusinessCallingSettings,
  ?'voice_connector' => VoiceConnectorSettings,
  ) $s = shape()) {
    $this->business_calling = $business_calling ?? null;
    $this->voice_connector = $voice_connector ?? null;
  }
}

class UpdatePhoneNumberRequest {
  public CallingName $calling_name;
  public string $phone_number_id;
  public PhoneNumberProductType $product_type;

  public function __construct(shape(
  ?'calling_name' => CallingName,
  ?'phone_number_id' => string,
  ?'product_type' => PhoneNumberProductType,
  ) $s = shape()) {
    $this->calling_name = $calling_name ?? "";
    $this->phone_number_id = $phone_number_id ?? "";
    $this->product_type = $product_type ?? "";
  }
}

class UpdatePhoneNumberRequestItem {
  public CallingName $calling_name;
  public NonEmptyString $phone_number_id;
  public PhoneNumberProductType $product_type;

  public function __construct(shape(
  ?'calling_name' => CallingName,
  ?'phone_number_id' => NonEmptyString,
  ?'product_type' => PhoneNumberProductType,
  ) $s = shape()) {
    $this->calling_name = $calling_name ?? "";
    $this->phone_number_id = $phone_number_id ?? "";
    $this->product_type = $product_type ?? "";
  }
}

type UpdatePhoneNumberRequestItemList = vec<UpdatePhoneNumberRequestItem>;

class UpdatePhoneNumberResponse {
  public PhoneNumber $phone_number;

  public function __construct(shape(
  ?'phone_number' => PhoneNumber,
  ) $s = shape()) {
    $this->phone_number = $phone_number ?? null;
  }
}

class UpdatePhoneNumberSettingsRequest {
  public CallingName $calling_name;

  public function __construct(shape(
  ?'calling_name' => CallingName,
  ) $s = shape()) {
    $this->calling_name = $calling_name ?? "";
  }
}

class UpdateProxySessionRequest {
  public CapabilityList $capabilities;
  public PositiveInteger $expiry_minutes;
  public NonEmptyString128 $proxy_session_id;
  public NonEmptyString128 $voice_connector_id;

  public function __construct(shape(
  ?'capabilities' => CapabilityList,
  ?'expiry_minutes' => PositiveInteger,
  ?'proxy_session_id' => NonEmptyString128,
  ?'voice_connector_id' => NonEmptyString128,
  ) $s = shape()) {
    $this->capabilities = $capabilities ?? [];
    $this->expiry_minutes = $expiry_minutes ?? 0;
    $this->proxy_session_id = $proxy_session_id ?? "";
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class UpdateProxySessionResponse {
  public ProxySession $proxy_session;

  public function __construct(shape(
  ?'proxy_session' => ProxySession,
  ) $s = shape()) {
    $this->proxy_session = $proxy_session ?? null;
  }
}

class UpdateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'member_id' => NonEmptyString,
  ?'role' => RoomMembershipRole,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->member_id = $member_id ?? "";
    $this->role = $role ?? "";
    $this->room_id = $room_id ?? "";
  }
}

class UpdateRoomMembershipResponse {
  public RoomMembership $room_membership;

  public function __construct(shape(
  ?'room_membership' => RoomMembership,
  ) $s = shape()) {
    $this->room_membership = $room_membership ?? null;
  }
}

class UpdateRoomRequest {
  public NonEmptyString $account_id;
  public SensitiveString $name;
  public NonEmptyString $room_id;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'name' => SensitiveString,
  ?'room_id' => NonEmptyString,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->name = $name ?? "";
    $this->room_id = $room_id ?? "";
  }
}

class UpdateRoomResponse {
  public Room $room;

  public function __construct(shape(
  ?'room' => Room,
  ) $s = shape()) {
    $this->room = $room ?? null;
  }
}

class UpdateUserRequest {
  public NonEmptyString $account_id;
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
  public License $license_type;
  public NonEmptyString $user_id;
  public UserType $user_type;

  public function __construct(shape(
  ?'account_id' => NonEmptyString,
  ?'alexa_for_business_metadata' => AlexaForBusinessMetadata,
  ?'license_type' => License,
  ?'user_id' => NonEmptyString,
  ?'user_type' => UserType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->alexa_for_business_metadata = $alexa_for_business_metadata ?? null;
    $this->license_type = $license_type ?? "";
    $this->user_id = $user_id ?? "";
    $this->user_type = $user_type ?? "";
  }
}

class UpdateUserRequestItem {
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
  public License $license_type;
  public NonEmptyString $user_id;
  public UserType $user_type;

  public function __construct(shape(
  ?'alexa_for_business_metadata' => AlexaForBusinessMetadata,
  ?'license_type' => License,
  ?'user_id' => NonEmptyString,
  ?'user_type' => UserType,
  ) $s = shape()) {
    $this->alexa_for_business_metadata = $alexa_for_business_metadata ?? null;
    $this->license_type = $license_type ?? "";
    $this->user_id = $user_id ?? "";
    $this->user_type = $user_type ?? "";
  }
}

type UpdateUserRequestItemList = vec<UpdateUserRequestItem>;

class UpdateUserResponse {
  public User $user;

  public function __construct(shape(
  ?'user' => User,
  ) $s = shape()) {
    $this->user = $user ?? null;
  }
}

class UpdateUserSettingsRequest {
  public string $account_id;
  public string $user_id;
  public UserSettings $user_settings;

  public function __construct(shape(
  ?'account_id' => string,
  ?'user_id' => string,
  ?'user_settings' => UserSettings,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->user_id = $user_id ?? "";
    $this->user_settings = $user_settings ?? null;
  }
}

class UpdateVoiceConnectorGroupRequest {
  public VoiceConnectorGroupName $name;
  public NonEmptyString $voice_connector_group_id;
  public VoiceConnectorItemList $voice_connector_items;

  public function __construct(shape(
  ?'name' => VoiceConnectorGroupName,
  ?'voice_connector_group_id' => NonEmptyString,
  ?'voice_connector_items' => VoiceConnectorItemList,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->voice_connector_group_id = $voice_connector_group_id ?? "";
    $this->voice_connector_items = $voice_connector_items ?? [];
  }
}

class UpdateVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;

  public function __construct(shape(
  ?'voice_connector_group' => VoiceConnectorGroup,
  ) $s = shape()) {
    $this->voice_connector_group = $voice_connector_group ?? null;
  }
}

class UpdateVoiceConnectorRequest {
  public VoiceConnectorName $name;
  public boolean $require_encryption;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'name' => VoiceConnectorName,
  ?'require_encryption' => boolean,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->require_encryption = $require_encryption ?? false;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

class UpdateVoiceConnectorResponse {
  public VoiceConnector $voice_connector;

  public function __construct(shape(
  ?'voice_connector' => VoiceConnector,
  ) $s = shape()) {
    $this->voice_connector = $voice_connector ?? null;
  }
}

type UriType = string;

class User {
  public string $account_id;
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
  public SensitiveString $display_name;
  public Iso8601Timestamp $invited_on;
  public License $license_type;
  public string $personal_pin;
  public EmailAddress $primary_email;
  public SensitiveString $primary_provisioned_number;
  public Iso8601Timestamp $registered_on;
  public string $user_id;
  public InviteStatus $user_invitation_status;
  public RegistrationStatus $user_registration_status;
  public UserType $user_type;

  public function __construct(shape(
  ?'account_id' => string,
  ?'alexa_for_business_metadata' => AlexaForBusinessMetadata,
  ?'display_name' => SensitiveString,
  ?'invited_on' => Iso8601Timestamp,
  ?'license_type' => License,
  ?'personal_pin' => string,
  ?'primary_email' => EmailAddress,
  ?'primary_provisioned_number' => SensitiveString,
  ?'registered_on' => Iso8601Timestamp,
  ?'user_id' => string,
  ?'user_invitation_status' => InviteStatus,
  ?'user_registration_status' => RegistrationStatus,
  ?'user_type' => UserType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->alexa_for_business_metadata = $alexa_for_business_metadata ?? null;
    $this->display_name = $display_name ?? "";
    $this->invited_on = $invited_on ?? 0;
    $this->license_type = $license_type ?? "";
    $this->personal_pin = $personal_pin ?? "";
    $this->primary_email = $primary_email ?? "";
    $this->primary_provisioned_number = $primary_provisioned_number ?? "";
    $this->registered_on = $registered_on ?? 0;
    $this->user_id = $user_id ?? "";
    $this->user_invitation_status = $user_invitation_status ?? "";
    $this->user_registration_status = $user_registration_status ?? "";
    $this->user_type = $user_type ?? "";
  }
}

type UserEmailList = vec<EmailAddress>;

class UserError {
  public ErrorCode $error_code;
  public string $error_message;
  public NonEmptyString $user_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => string,
  ?'user_id' => NonEmptyString,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->user_id = $user_id ?? "";
  }
}

type UserErrorList = vec<UserError>;

type UserIdList = vec<NonEmptyString>;

type UserList = vec<User>;

class UserSettings {
  public TelephonySettings $telephony;

  public function __construct(shape(
  ?'telephony' => TelephonySettings,
  ) $s = shape()) {
    $this->telephony = $telephony ?? null;
  }
}

type UserType = string;

class VoiceConnector {
  public VoiceConnectorAwsRegion $aws_region;
  public Iso8601Timestamp $created_timestamp;
  public VoiceConnectorName $name;
  public string $outbound_host_name;
  public boolean $require_encryption;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'aws_region' => VoiceConnectorAwsRegion,
  ?'created_timestamp' => Iso8601Timestamp,
  ?'name' => VoiceConnectorName,
  ?'outbound_host_name' => string,
  ?'require_encryption' => boolean,
  ?'updated_timestamp' => Iso8601Timestamp,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->aws_region = $aws_region ?? "";
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->name = $name ?? "";
    $this->outbound_host_name = $outbound_host_name ?? "";
    $this->require_encryption = $require_encryption ?? false;
    $this->updated_timestamp = $updated_timestamp ?? 0;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

type VoiceConnectorAwsRegion = string;

class VoiceConnectorGroup {
  public Iso8601Timestamp $created_timestamp;
  public VoiceConnectorGroupName $name;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString $voice_connector_group_id;
  public VoiceConnectorItemList $voice_connector_items;

  public function __construct(shape(
  ?'created_timestamp' => Iso8601Timestamp,
  ?'name' => VoiceConnectorGroupName,
  ?'updated_timestamp' => Iso8601Timestamp,
  ?'voice_connector_group_id' => NonEmptyString,
  ?'voice_connector_items' => VoiceConnectorItemList,
  ) $s = shape()) {
    $this->created_timestamp = $created_timestamp ?? 0;
    $this->name = $name ?? "";
    $this->updated_timestamp = $updated_timestamp ?? 0;
    $this->voice_connector_group_id = $voice_connector_group_id ?? "";
    $this->voice_connector_items = $voice_connector_items ?? [];
  }
}

type VoiceConnectorGroupList = vec<VoiceConnectorGroup>;

type VoiceConnectorGroupName = string;

class VoiceConnectorItem {
  public VoiceConnectorItemPriority $priority;
  public NonEmptyString $voice_connector_id;

  public function __construct(shape(
  ?'priority' => VoiceConnectorItemPriority,
  ?'voice_connector_id' => NonEmptyString,
  ) $s = shape()) {
    $this->priority = $priority ?? 0;
    $this->voice_connector_id = $voice_connector_id ?? "";
  }
}

type VoiceConnectorItemList = vec<VoiceConnectorItem>;

type VoiceConnectorItemPriority = int;

type VoiceConnectorList = vec<VoiceConnector>;

type VoiceConnectorName = string;

class VoiceConnectorSettings {
  public string $cdr_bucket;

  public function __construct(shape(
  ?'cdr_bucket' => string,
  ) $s = shape()) {
    $this->cdr_bucket = $cdr_bucket ?? "";
  }
}

