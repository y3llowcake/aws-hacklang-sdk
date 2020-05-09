<?hh // strict
namespace slack\aws\chime;

interface Chime {
  public function AssociatePhoneNumberWithUser(AssociatePhoneNumberWithUserRequest) Awaitable<Errors\Result<AssociatePhoneNumberWithUserResponse>>;
  public function AssociatePhoneNumbersWithVoiceConnector(AssociatePhoneNumbersWithVoiceConnectorRequest) Awaitable<Errors\Result<AssociatePhoneNumbersWithVoiceConnectorResponse>>;
  public function AssociatePhoneNumbersWithVoiceConnectorGroup(AssociatePhoneNumbersWithVoiceConnectorGroupRequest) Awaitable<Errors\Result<AssociatePhoneNumbersWithVoiceConnectorGroupResponse>>;
  public function AssociateSigninDelegateGroupsWithAccount(AssociateSigninDelegateGroupsWithAccountRequest) Awaitable<Errors\Result<AssociateSigninDelegateGroupsWithAccountResponse>>;
  public function BatchCreateAttendee(BatchCreateAttendeeRequest) Awaitable<Errors\Result<BatchCreateAttendeeResponse>>;
  public function BatchCreateRoomMembership(BatchCreateRoomMembershipRequest) Awaitable<Errors\Result<BatchCreateRoomMembershipResponse>>;
  public function BatchDeletePhoneNumber(BatchDeletePhoneNumberRequest) Awaitable<Errors\Result<BatchDeletePhoneNumberResponse>>;
  public function BatchSuspendUser(BatchSuspendUserRequest) Awaitable<Errors\Result<BatchSuspendUserResponse>>;
  public function BatchUnsuspendUser(BatchUnsuspendUserRequest) Awaitable<Errors\Result<BatchUnsuspendUserResponse>>;
  public function BatchUpdatePhoneNumber(BatchUpdatePhoneNumberRequest) Awaitable<Errors\Result<BatchUpdatePhoneNumberResponse>>;
  public function BatchUpdateUser(BatchUpdateUserRequest) Awaitable<Errors\Result<BatchUpdateUserResponse>>;
  public function CreateAccount(CreateAccountRequest) Awaitable<Errors\Result<CreateAccountResponse>>;
  public function CreateAttendee(CreateAttendeeRequest) Awaitable<Errors\Result<CreateAttendeeResponse>>;
  public function CreateBot(CreateBotRequest) Awaitable<Errors\Result<CreateBotResponse>>;
  public function CreateMeeting(CreateMeetingRequest) Awaitable<Errors\Result<CreateMeetingResponse>>;
  public function CreatePhoneNumberOrder(CreatePhoneNumberOrderRequest) Awaitable<Errors\Result<CreatePhoneNumberOrderResponse>>;
  public function CreateProxySession(CreateProxySessionRequest) Awaitable<Errors\Result<CreateProxySessionResponse>>;
  public function CreateRoom(CreateRoomRequest) Awaitable<Errors\Result<CreateRoomResponse>>;
  public function CreateRoomMembership(CreateRoomMembershipRequest) Awaitable<Errors\Result<CreateRoomMembershipResponse>>;
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function CreateVoiceConnector(CreateVoiceConnectorRequest) Awaitable<Errors\Result<CreateVoiceConnectorResponse>>;
  public function CreateVoiceConnectorGroup(CreateVoiceConnectorGroupRequest) Awaitable<Errors\Result<CreateVoiceConnectorGroupResponse>>;
  public function DeleteAccount(DeleteAccountRequest) Awaitable<Errors\Result<DeleteAccountResponse>>;
  public function DeleteAttendee(DeleteAttendeeRequest) Awaitable<Errors\Error>;
  public function DeleteEventsConfiguration(DeleteEventsConfigurationRequest) Awaitable<Errors\Error>;
  public function DeleteMeeting(DeleteMeetingRequest) Awaitable<Errors\Error>;
  public function DeletePhoneNumber(DeletePhoneNumberRequest) Awaitable<Errors\Error>;
  public function DeleteProxySession(DeleteProxySessionRequest) Awaitable<Errors\Error>;
  public function DeleteRoom(DeleteRoomRequest) Awaitable<Errors\Error>;
  public function DeleteRoomMembership(DeleteRoomMembershipRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnector(DeleteVoiceConnectorRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorGroup(DeleteVoiceConnectorGroupRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorOrigination(DeleteVoiceConnectorOriginationRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorProxy(DeleteVoiceConnectorProxyRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorStreamingConfiguration(DeleteVoiceConnectorStreamingConfigurationRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorTermination(DeleteVoiceConnectorTerminationRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorTerminationCredentials(DeleteVoiceConnectorTerminationCredentialsRequest) Awaitable<Errors\Error>;
  public function DisassociatePhoneNumberFromUser(DisassociatePhoneNumberFromUserRequest) Awaitable<Errors\Result<DisassociatePhoneNumberFromUserResponse>>;
  public function DisassociatePhoneNumbersFromVoiceConnector(DisassociatePhoneNumbersFromVoiceConnectorRequest) Awaitable<Errors\Result<DisassociatePhoneNumbersFromVoiceConnectorResponse>>;
  public function DisassociatePhoneNumbersFromVoiceConnectorGroup(DisassociatePhoneNumbersFromVoiceConnectorGroupRequest) Awaitable<Errors\Result<DisassociatePhoneNumbersFromVoiceConnectorGroupResponse>>;
  public function DisassociateSigninDelegateGroupsFromAccount(DisassociateSigninDelegateGroupsFromAccountRequest) Awaitable<Errors\Result<DisassociateSigninDelegateGroupsFromAccountResponse>>;
  public function GetAccount(GetAccountRequest) Awaitable<Errors\Result<GetAccountResponse>>;
  public function GetAccountSettings(GetAccountSettingsRequest) Awaitable<Errors\Result<GetAccountSettingsResponse>>;
  public function GetAttendee(GetAttendeeRequest) Awaitable<Errors\Result<GetAttendeeResponse>>;
  public function GetBot(GetBotRequest) Awaitable<Errors\Result<GetBotResponse>>;
  public function GetEventsConfiguration(GetEventsConfigurationRequest) Awaitable<Errors\Result<GetEventsConfigurationResponse>>;
  public function GetGlobalSettings() Awaitable<Errors\Result<GetGlobalSettingsResponse>>;
  public function GetMeeting(GetMeetingRequest) Awaitable<Errors\Result<GetMeetingResponse>>;
  public function GetPhoneNumber(GetPhoneNumberRequest) Awaitable<Errors\Result<GetPhoneNumberResponse>>;
  public function GetPhoneNumberOrder(GetPhoneNumberOrderRequest) Awaitable<Errors\Result<GetPhoneNumberOrderResponse>>;
  public function GetPhoneNumberSettings() Awaitable<Errors\Result<GetPhoneNumberSettingsResponse>>;
  public function GetProxySession(GetProxySessionRequest) Awaitable<Errors\Result<GetProxySessionResponse>>;
  public function GetRoom(GetRoomRequest) Awaitable<Errors\Result<GetRoomResponse>>;
  public function GetUser(GetUserRequest) Awaitable<Errors\Result<GetUserResponse>>;
  public function GetUserSettings(GetUserSettingsRequest) Awaitable<Errors\Result<GetUserSettingsResponse>>;
  public function GetVoiceConnector(GetVoiceConnectorRequest) Awaitable<Errors\Result<GetVoiceConnectorResponse>>;
  public function GetVoiceConnectorGroup(GetVoiceConnectorGroupRequest) Awaitable<Errors\Result<GetVoiceConnectorGroupResponse>>;
  public function GetVoiceConnectorLoggingConfiguration(GetVoiceConnectorLoggingConfigurationRequest) Awaitable<Errors\Result<GetVoiceConnectorLoggingConfigurationResponse>>;
  public function GetVoiceConnectorOrigination(GetVoiceConnectorOriginationRequest) Awaitable<Errors\Result<GetVoiceConnectorOriginationResponse>>;
  public function GetVoiceConnectorProxy(GetVoiceConnectorProxyRequest) Awaitable<Errors\Result<GetVoiceConnectorProxyResponse>>;
  public function GetVoiceConnectorStreamingConfiguration(GetVoiceConnectorStreamingConfigurationRequest) Awaitable<Errors\Result<GetVoiceConnectorStreamingConfigurationResponse>>;
  public function GetVoiceConnectorTermination(GetVoiceConnectorTerminationRequest) Awaitable<Errors\Result<GetVoiceConnectorTerminationResponse>>;
  public function GetVoiceConnectorTerminationHealth(GetVoiceConnectorTerminationHealthRequest) Awaitable<Errors\Result<GetVoiceConnectorTerminationHealthResponse>>;
  public function InviteUsers(InviteUsersRequest) Awaitable<Errors\Result<InviteUsersResponse>>;
  public function ListAccounts(ListAccountsRequest) Awaitable<Errors\Result<ListAccountsResponse>>;
  public function ListAttendeeTags(ListAttendeeTagsRequest) Awaitable<Errors\Result<ListAttendeeTagsResponse>>;
  public function ListAttendees(ListAttendeesRequest) Awaitable<Errors\Result<ListAttendeesResponse>>;
  public function ListBots(ListBotsRequest) Awaitable<Errors\Result<ListBotsResponse>>;
  public function ListMeetingTags(ListMeetingTagsRequest) Awaitable<Errors\Result<ListMeetingTagsResponse>>;
  public function ListMeetings(ListMeetingsRequest) Awaitable<Errors\Result<ListMeetingsResponse>>;
  public function ListPhoneNumberOrders(ListPhoneNumberOrdersRequest) Awaitable<Errors\Result<ListPhoneNumberOrdersResponse>>;
  public function ListPhoneNumbers(ListPhoneNumbersRequest) Awaitable<Errors\Result<ListPhoneNumbersResponse>>;
  public function ListProxySessions(ListProxySessionsRequest) Awaitable<Errors\Result<ListProxySessionsResponse>>;
  public function ListRoomMemberships(ListRoomMembershipsRequest) Awaitable<Errors\Result<ListRoomMembershipsResponse>>;
  public function ListRooms(ListRoomsRequest) Awaitable<Errors\Result<ListRoomsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function ListVoiceConnectorGroups(ListVoiceConnectorGroupsRequest) Awaitable<Errors\Result<ListVoiceConnectorGroupsResponse>>;
  public function ListVoiceConnectorTerminationCredentials(ListVoiceConnectorTerminationCredentialsRequest) Awaitable<Errors\Result<ListVoiceConnectorTerminationCredentialsResponse>>;
  public function ListVoiceConnectors(ListVoiceConnectorsRequest) Awaitable<Errors\Result<ListVoiceConnectorsResponse>>;
  public function LogoutUser(LogoutUserRequest) Awaitable<Errors\Result<LogoutUserResponse>>;
  public function PutEventsConfiguration(PutEventsConfigurationRequest) Awaitable<Errors\Result<PutEventsConfigurationResponse>>;
  public function PutVoiceConnectorLoggingConfiguration(PutVoiceConnectorLoggingConfigurationRequest) Awaitable<Errors\Result<PutVoiceConnectorLoggingConfigurationResponse>>;
  public function PutVoiceConnectorOrigination(PutVoiceConnectorOriginationRequest) Awaitable<Errors\Result<PutVoiceConnectorOriginationResponse>>;
  public function PutVoiceConnectorProxy(PutVoiceConnectorProxyRequest) Awaitable<Errors\Result<PutVoiceConnectorProxyResponse>>;
  public function PutVoiceConnectorStreamingConfiguration(PutVoiceConnectorStreamingConfigurationRequest) Awaitable<Errors\Result<PutVoiceConnectorStreamingConfigurationResponse>>;
  public function PutVoiceConnectorTermination(PutVoiceConnectorTerminationRequest) Awaitable<Errors\Result<PutVoiceConnectorTerminationResponse>>;
  public function PutVoiceConnectorTerminationCredentials(PutVoiceConnectorTerminationCredentialsRequest) Awaitable<Errors\Error>;
  public function RegenerateSecurityToken(RegenerateSecurityTokenRequest) Awaitable<Errors\Result<RegenerateSecurityTokenResponse>>;
  public function ResetPersonalPIN(ResetPersonalPINRequest) Awaitable<Errors\Result<ResetPersonalPINResponse>>;
  public function RestorePhoneNumber(RestorePhoneNumberRequest) Awaitable<Errors\Result<RestorePhoneNumberResponse>>;
  public function SearchAvailablePhoneNumbers(SearchAvailablePhoneNumbersRequest) Awaitable<Errors\Result<SearchAvailablePhoneNumbersResponse>>;
  public function TagAttendee(TagAttendeeRequest) Awaitable<Errors\Error>;
  public function TagMeeting(TagMeetingRequest) Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagAttendee(UntagAttendeeRequest) Awaitable<Errors\Error>;
  public function UntagMeeting(UntagMeetingRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateAccount(UpdateAccountRequest) Awaitable<Errors\Result<UpdateAccountResponse>>;
  public function UpdateAccountSettings(UpdateAccountSettingsRequest) Awaitable<Errors\Result<UpdateAccountSettingsResponse>>;
  public function UpdateBot(UpdateBotRequest) Awaitable<Errors\Result<UpdateBotResponse>>;
  public function UpdateGlobalSettings(UpdateGlobalSettingsRequest) Awaitable<Errors\Error>;
  public function UpdatePhoneNumber(UpdatePhoneNumberRequest) Awaitable<Errors\Result<UpdatePhoneNumberResponse>>;
  public function UpdatePhoneNumberSettings(UpdatePhoneNumberSettingsRequest) Awaitable<Errors\Error>;
  public function UpdateProxySession(UpdateProxySessionRequest) Awaitable<Errors\Result<UpdateProxySessionResponse>>;
  public function UpdateRoom(UpdateRoomRequest) Awaitable<Errors\Result<UpdateRoomResponse>>;
  public function UpdateRoomMembership(UpdateRoomMembershipRequest) Awaitable<Errors\Result<UpdateRoomMembershipResponse>>;
  public function UpdateUser(UpdateUserRequest) Awaitable<Errors\Result<UpdateUserResponse>>;
  public function UpdateUserSettings(UpdateUserSettingsRequest) Awaitable<Errors\Error>;
  public function UpdateVoiceConnector(UpdateVoiceConnectorRequest) Awaitable<Errors\Result<UpdateVoiceConnectorResponse>>;
  public function UpdateVoiceConnectorGroup(UpdateVoiceConnectorGroupRequest) Awaitable<Errors\Result<UpdateVoiceConnectorGroupResponse>>;
}

class AccessDeniedException {
  public ErrorCode $code;
  public string $message;
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
}

class AccountList {
}

class AccountName {
}

class AccountSettings {
  public boolean $disable_remote_control;
  public boolean $enable_dial_out;
}

class AccountType {
}

class AlexaForBusinessMetadata {
  public SensitiveString $alexa_for_business_room_arn;
  public boolean $is_alexa_for_business_enabled;
}

class AreaCode {
}

class Arn {
}

class AssociatePhoneNumberWithUserRequest {
  public string $account_id;
  public E164PhoneNumber $e_164_phone_number;
  public string $user_id;
}

class AssociatePhoneNumberWithUserResponse {
}

class AssociatePhoneNumbersWithVoiceConnectorGroupRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NullableBoolean $force_associate;
  public NonEmptyString $voice_connector_group_id;
}

class AssociatePhoneNumbersWithVoiceConnectorGroupResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class AssociatePhoneNumbersWithVoiceConnectorRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NullableBoolean $force_associate;
  public NonEmptyString $voice_connector_id;
}

class AssociatePhoneNumbersWithVoiceConnectorResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class AssociateSigninDelegateGroupsWithAccountRequest {
  public NonEmptyString $account_id;
  public SigninDelegateGroupList $signin_delegate_groups;
}

class AssociateSigninDelegateGroupsWithAccountResponse {
}

class Attendee {
  public GuidString $attendee_id;
  public ExternalUserIdType $external_user_id;
  public JoinTokenString $join_token;
}

class AttendeeList {
}

class AttendeeTagKeyList {
}

class AttendeeTagList {
}

class BadRequestException {
  public ErrorCode $code;
  public string $message;
}

class BatchCreateAttendeeErrorList {
}

class BatchCreateAttendeeRequest {
  public CreateAttendeeRequestItemList $attendees;
  public GuidString $meeting_id;
}

class BatchCreateAttendeeResponse {
  public AttendeeList $attendees;
  public BatchCreateAttendeeErrorList $errors;
}

class BatchCreateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public MembershipItemList $membership_item_list;
  public NonEmptyString $room_id;
}

class BatchCreateRoomMembershipResponse {
  public MemberErrorList $errors;
}

class BatchDeletePhoneNumberRequest {
  public NonEmptyStringList $phone_number_ids;
}

class BatchDeletePhoneNumberResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class BatchSuspendUserRequest {
  public NonEmptyString $account_id;
  public UserIdList $user_id_list;
}

class BatchSuspendUserResponse {
  public UserErrorList $user_errors;
}

class BatchUnsuspendUserRequest {
  public NonEmptyString $account_id;
  public UserIdList $user_id_list;
}

class BatchUnsuspendUserResponse {
  public UserErrorList $user_errors;
}

class BatchUpdatePhoneNumberRequest {
  public UpdatePhoneNumberRequestItemList $update_phone_number_request_items;
}

class BatchUpdatePhoneNumberResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class BatchUpdateUserRequest {
  public NonEmptyString $account_id;
  public UpdateUserRequestItemList $update_user_request_items;
}

class BatchUpdateUserResponse {
  public UserErrorList $user_errors;
}

class Boolean {
}

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
}

class BotList {
}

class BotType {
}

class BusinessCallingSettings {
  public string $cdr_bucket;
}

class CallingName {
}

class CallingNameStatus {
}

class CallingRegion {
}

class CallingRegionList {
}

class Capability {
}

class CapabilityList {
}

class ClientRequestToken {
}

class ConflictException {
  public ErrorCode $code;
  public string $message;
}

class Country {
}

class CountryList {
}

class CpsLimit {
}

class CreateAccountRequest {
  public AccountName $name;
}

class CreateAccountResponse {
  public Account $account;
}

class CreateAttendeeError {
  public string $error_code;
  public string $error_message;
  public ExternalUserIdType $external_user_id;
}

class CreateAttendeeRequest {
  public ExternalUserIdType $external_user_id;
  public GuidString $meeting_id;
  public AttendeeTagList $tags;
}

class CreateAttendeeRequestItem {
  public ExternalUserIdType $external_user_id;
  public AttendeeTagList $tags;
}

class CreateAttendeeRequestItemList {
}

class CreateAttendeeResponse {
  public Attendee $attendee;
}

class CreateBotRequest {
  public NonEmptyString $account_id;
  public SensitiveString $display_name;
  public NonEmptyString $domain;
}

class CreateBotResponse {
  public Bot $bot;
}

class CreateMeetingRequest {
  public ClientRequestToken $client_request_token;
  public ExternalMeetingIdType $external_meeting_id;
  public string $media_region;
  public ExternalUserIdType $meeting_host_id;
  public MeetingNotificationConfiguration $notifications_configuration;
  public MeetingTagList $tags;
}

class CreateMeetingResponse {
  public Meeting $meeting;
}

class CreatePhoneNumberOrderRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public PhoneNumberProductType $product_type;
}

class CreatePhoneNumberOrderResponse {
  public PhoneNumberOrder $phone_number_order;
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
}

class CreateProxySessionResponse {
  public ProxySession $proxy_session;
}

class CreateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
  public NonEmptyString $room_id;
}

class CreateRoomMembershipResponse {
  public RoomMembership $room_membership;
}

class CreateRoomRequest {
  public NonEmptyString $account_id;
  public ClientRequestToken $client_request_token;
  public SensitiveString $name;
}

class CreateRoomResponse {
  public Room $room;
}

class CreateUserRequest {
  public NonEmptyString $account_id;
  public EmailAddress $email;
  public UserType $user_type;
  public string $username;
}

class CreateUserResponse {
  public User $user;
}

class CreateVoiceConnectorGroupRequest {
  public VoiceConnectorGroupName $name;
  public VoiceConnectorItemList $voice_connector_items;
}

class CreateVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;
}

class CreateVoiceConnectorRequest {
  public VoiceConnectorAwsRegion $aws_region;
  public VoiceConnectorName $name;
  public boolean $require_encryption;
}

class CreateVoiceConnectorResponse {
  public VoiceConnector $voice_connector;
}

class Credential {
  public SensitiveString $password;
  public SensitiveString $username;
}

class CredentialList {
}

class DataRetentionInHours {
}

class DeleteAccountRequest {
  public NonEmptyString $account_id;
}

class DeleteAccountResponse {
}

class DeleteAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
}

class DeleteEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class DeleteMeetingRequest {
  public GuidString $meeting_id;
}

class DeletePhoneNumberRequest {
  public string $phone_number_id;
}

class DeleteProxySessionRequest {
  public NonEmptyString128 $proxy_session_id;
  public NonEmptyString128 $voice_connector_id;
}

class DeleteRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $member_id;
  public NonEmptyString $room_id;
}

class DeleteRoomRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
}

class DeleteVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;
}

class DeleteVoiceConnectorOriginationRequest {
  public NonEmptyString $voice_connector_id;
}

class DeleteVoiceConnectorProxyRequest {
  public NonEmptyString128 $voice_connector_id;
}

class DeleteVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;
}

class DeleteVoiceConnectorStreamingConfigurationRequest {
  public NonEmptyString $voice_connector_id;
}

class DeleteVoiceConnectorTerminationCredentialsRequest {
  public SensitiveStringList $usernames;
  public NonEmptyString $voice_connector_id;
}

class DeleteVoiceConnectorTerminationRequest {
  public NonEmptyString $voice_connector_id;
}

class DisassociatePhoneNumberFromUserRequest {
  public string $account_id;
  public string $user_id;
}

class DisassociatePhoneNumberFromUserResponse {
}

class DisassociatePhoneNumbersFromVoiceConnectorGroupRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NonEmptyString $voice_connector_group_id;
}

class DisassociatePhoneNumbersFromVoiceConnectorGroupResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class DisassociatePhoneNumbersFromVoiceConnectorRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NonEmptyString $voice_connector_id;
}

class DisassociatePhoneNumbersFromVoiceConnectorResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class DisassociateSigninDelegateGroupsFromAccountRequest {
  public NonEmptyString $account_id;
  public NonEmptyStringList $group_names;
}

class DisassociateSigninDelegateGroupsFromAccountResponse {
}

class E164PhoneNumber {
}

class E164PhoneNumberList {
}

class EmailAddress {
}

class EmailStatus {
}

class ErrorCode {
}

class EventsConfiguration {
  public string $bot_id;
  public SensitiveString $lambda_function_arn;
  public SensitiveString $outbound_events_https_endpoint;
}

class ExternalMeetingIdType {
}

class ExternalUserIdType {
}

class ForbiddenException {
  public ErrorCode $code;
  public string $message;
}

class GeoMatchLevel {
}

class GeoMatchParams {
  public AreaCode $area_code;
  public Country $country;
}

class GetAccountRequest {
  public NonEmptyString $account_id;
}

class GetAccountResponse {
  public Account $account;
}

class GetAccountSettingsRequest {
  public NonEmptyString $account_id;
}

class GetAccountSettingsResponse {
  public AccountSettings $account_settings;
}

class GetAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
}

class GetAttendeeResponse {
  public Attendee $attendee;
}

class GetBotRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class GetBotResponse {
  public Bot $bot;
}

class GetEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class GetEventsConfigurationResponse {
  public EventsConfiguration $events_configuration;
}

class GetGlobalSettingsResponse {
  public BusinessCallingSettings $business_calling;
  public VoiceConnectorSettings $voice_connector;
}

class GetMeetingRequest {
  public GuidString $meeting_id;
}

class GetMeetingResponse {
  public Meeting $meeting;
}

class GetPhoneNumberOrderRequest {
  public GuidString $phone_number_order_id;
}

class GetPhoneNumberOrderResponse {
  public PhoneNumberOrder $phone_number_order;
}

class GetPhoneNumberRequest {
  public string $phone_number_id;
}

class GetPhoneNumberResponse {
  public PhoneNumber $phone_number;
}

class GetPhoneNumberSettingsResponse {
  public CallingName $calling_name;
  public Iso8601Timestamp $calling_name_updated_timestamp;
}

class GetProxySessionRequest {
  public NonEmptyString128 $proxy_session_id;
  public NonEmptyString128 $voice_connector_id;
}

class GetProxySessionResponse {
  public ProxySession $proxy_session;
}

class GetRoomRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
}

class GetRoomResponse {
  public Room $room;
}

class GetUserRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;
}

class GetUserResponse {
  public User $user;
}

class GetUserSettingsRequest {
  public string $account_id;
  public string $user_id;
}

class GetUserSettingsResponse {
  public UserSettings $user_settings;
}

class GetVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;
}

class GetVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;
}

class GetVoiceConnectorLoggingConfigurationRequest {
  public NonEmptyString $voice_connector_id;
}

class GetVoiceConnectorLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;
}

class GetVoiceConnectorOriginationRequest {
  public NonEmptyString $voice_connector_id;
}

class GetVoiceConnectorOriginationResponse {
  public Origination $origination;
}

class GetVoiceConnectorProxyRequest {
  public NonEmptyString128 $voice_connector_id;
}

class GetVoiceConnectorProxyResponse {
  public Proxy $proxy;
}

class GetVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;
}

class GetVoiceConnectorResponse {
  public VoiceConnector $voice_connector;
}

class GetVoiceConnectorStreamingConfigurationRequest {
  public NonEmptyString $voice_connector_id;
}

class GetVoiceConnectorStreamingConfigurationResponse {
  public StreamingConfiguration $streaming_configuration;
}

class GetVoiceConnectorTerminationHealthRequest {
  public NonEmptyString $voice_connector_id;
}

class GetVoiceConnectorTerminationHealthResponse {
  public TerminationHealth $termination_health;
}

class GetVoiceConnectorTerminationRequest {
  public NonEmptyString $voice_connector_id;
}

class GetVoiceConnectorTerminationResponse {
  public Termination $termination;
}

class GuidString {
}

class Integer {
}

class Invite {
  public EmailAddress $email_address;
  public EmailStatus $email_status;
  public string $invite_id;
  public InviteStatus $status;
}

class InviteList {
}

class InviteStatus {
}

class InviteUsersRequest {
  public NonEmptyString $account_id;
  public UserEmailList $user_email_list;
  public UserType $user_type;
}

class InviteUsersResponse {
  public InviteList $invites;
}

class Iso8601Timestamp {
}

class JoinTokenString {
}

class License {
}

class LicenseList {
}

class ListAccountsRequest {
  public ProfileServiceMaxResults $max_results;
  public AccountName $name;
  public string $next_token;
  public EmailAddress $user_email;
}

class ListAccountsResponse {
  public AccountList $accounts;
  public string $next_token;
}

class ListAttendeeTagsRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
}

class ListAttendeeTagsResponse {
  public TagList $tags;
}

class ListAttendeesRequest {
  public ResultMax $max_results;
  public GuidString $meeting_id;
  public string $next_token;
}

class ListAttendeesResponse {
  public AttendeeList $attendees;
  public string $next_token;
}

class ListBotsRequest {
  public NonEmptyString $account_id;
  public ResultMax $max_results;
  public string $next_token;
}

class ListBotsResponse {
  public BotList $bots;
  public string $next_token;
}

class ListMeetingTagsRequest {
  public GuidString $meeting_id;
}

class ListMeetingTagsResponse {
  public TagList $tags;
}

class ListMeetingsRequest {
  public ResultMax $max_results;
  public string $next_token;
}

class ListMeetingsResponse {
  public MeetingList $meetings;
  public string $next_token;
}

class ListPhoneNumberOrdersRequest {
  public ResultMax $max_results;
  public string $next_token;
}

class ListPhoneNumberOrdersResponse {
  public string $next_token;
  public PhoneNumberOrderList $phone_number_orders;
}

class ListPhoneNumbersRequest {
  public PhoneNumberAssociationName $filter_name;
  public string $filter_value;
  public ResultMax $max_results;
  public string $next_token;
  public PhoneNumberProductType $product_type;
  public PhoneNumberStatus $status;
}

class ListPhoneNumbersResponse {
  public string $next_token;
  public PhoneNumberList $phone_numbers;
}

class ListProxySessionsRequest {
  public ResultMax $max_results;
  public NextTokenString $next_token;
  public ProxySessionStatus $status;
  public NonEmptyString128 $voice_connector_id;
}

class ListProxySessionsResponse {
  public NextTokenString $next_token;
  public ProxySessions $proxy_sessions;
}

class ListRoomMembershipsRequest {
  public NonEmptyString $account_id;
  public ResultMax $max_results;
  public string $next_token;
  public NonEmptyString $room_id;
}

class ListRoomMembershipsResponse {
  public string $next_token;
  public RoomMembershipList $room_memberships;
}

class ListRoomsRequest {
  public NonEmptyString $account_id;
  public ResultMax $max_results;
  public string $member_id;
  public string $next_token;
}

class ListRoomsResponse {
  public string $next_token;
  public RoomList $rooms;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListUsersRequest {
  public NonEmptyString $account_id;
  public ProfileServiceMaxResults $max_results;
  public string $next_token;
  public EmailAddress $user_email;
  public UserType $user_type;
}

class ListUsersResponse {
  public string $next_token;
  public UserList $users;
}

class ListVoiceConnectorGroupsRequest {
  public ResultMax $max_results;
  public string $next_token;
}

class ListVoiceConnectorGroupsResponse {
  public string $next_token;
  public VoiceConnectorGroupList $voice_connector_groups;
}

class ListVoiceConnectorTerminationCredentialsRequest {
  public NonEmptyString $voice_connector_id;
}

class ListVoiceConnectorTerminationCredentialsResponse {
  public SensitiveStringList $usernames;
}

class ListVoiceConnectorsRequest {
  public ResultMax $max_results;
  public string $next_token;
}

class ListVoiceConnectorsResponse {
  public string $next_token;
  public VoiceConnectorList $voice_connectors;
}

class LoggingConfiguration {
  public boolean $enable_sip_logs;
}

class LogoutUserRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;
}

class LogoutUserResponse {
}

class MediaPlacement {
  public UriType $audio_fallback_url;
  public UriType $audio_host_url;
  public UriType $screen_data_url;
  public UriType $screen_sharing_url;
  public UriType $screen_viewing_url;
  public UriType $signaling_url;
  public UriType $turn_control_url;
}

class Meeting {
  public ExternalMeetingIdType $external_meeting_id;
  public MediaPlacement $media_placement;
  public string $media_region;
  public GuidString $meeting_id;
}

class MeetingList {
}

class MeetingNotificationConfiguration {
  public Arn $sns_topic_arn;
  public Arn $sqs_queue_arn;
}

class MeetingTagKeyList {
}

class MeetingTagList {
}

class Member {
  public NonEmptyString $account_id;
  public SensitiveString $email;
  public SensitiveString $full_name;
  public NonEmptyString $member_id;
  public MemberType $member_type;
}

class MemberError {
  public ErrorCode $error_code;
  public string $error_message;
  public NonEmptyString $member_id;
}

class MemberErrorList {
}

class MemberType {
}

class MembershipItem {
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
}

class MembershipItemList {
}

class NextTokenString {
}

class NonEmptyString {
}

class NonEmptyString128 {
}

class NonEmptyStringList {
}

class NotFoundException {
  public ErrorCode $code;
  public string $message;
}

class NullableBoolean {
}

class NumberSelectionBehavior {
}

class OrderedPhoneNumber {
  public E164PhoneNumber $e_164_phone_number;
  public OrderedPhoneNumberStatus $status;
}

class OrderedPhoneNumberList {
}

class OrderedPhoneNumberStatus {
}

class Origination {
  public boolean $disabled;
  public OriginationRouteList $routes;
}

class OriginationRoute {
  public string $host;
  public Port $port;
  public OriginationRoutePriority $priority;
  public OriginationRouteProtocol $protocol;
  public OriginationRouteWeight $weight;
}

class OriginationRouteList {
}

class OriginationRoutePriority {
}

class OriginationRouteProtocol {
}

class OriginationRouteWeight {
}

class Participant {
  public E164PhoneNumber $phone_number;
  public E164PhoneNumber $proxy_phone_number;
}

class ParticipantPhoneNumberList {
}

class Participants {
}

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
}

class PhoneNumberAssociation {
  public Iso8601Timestamp $associated_timestamp;
  public PhoneNumberAssociationName $name;
  public string $value;
}

class PhoneNumberAssociationList {
}

class PhoneNumberAssociationName {
}

class PhoneNumberCapabilities {
  public NullableBoolean $inbound_call;
  public NullableBoolean $inbound_mms;
  public NullableBoolean $inbound_sms;
  public NullableBoolean $outbound_call;
  public NullableBoolean $outbound_mms;
  public NullableBoolean $outbound_sms;
}

class PhoneNumberError {
  public ErrorCode $error_code;
  public string $error_message;
  public NonEmptyString $phone_number_id;
}

class PhoneNumberErrorList {
}

class PhoneNumberList {
}

class PhoneNumberMaxResults {
}

class PhoneNumberOrder {
  public Iso8601Timestamp $created_timestamp;
  public OrderedPhoneNumberList $ordered_phone_numbers;
  public GuidString $phone_number_order_id;
  public PhoneNumberProductType $product_type;
  public PhoneNumberOrderStatus $status;
  public Iso8601Timestamp $updated_timestamp;
}

class PhoneNumberOrderList {
}

class PhoneNumberOrderStatus {
}

class PhoneNumberProductType {
}

class PhoneNumberStatus {
}

class PhoneNumberType {
}

class Port {
}

class PositiveInteger {
}

class ProfileServiceMaxResults {
}

class Proxy {
  public int $default_session_expiry_minutes;
  public boolean $disabled;
  public E164PhoneNumber $fall_back_phone_number;
  public StringList $phone_number_countries;
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
}

class ProxySessionNameString {
}

class ProxySessionStatus {
}

class ProxySessions {
}

class PutEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
  public SensitiveString $lambda_function_arn;
  public SensitiveString $outbound_events_https_endpoint;
}

class PutEventsConfigurationResponse {
  public EventsConfiguration $events_configuration;
}

class PutVoiceConnectorLoggingConfigurationRequest {
  public LoggingConfiguration $logging_configuration;
  public NonEmptyString $voice_connector_id;
}

class PutVoiceConnectorLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;
}

class PutVoiceConnectorOriginationRequest {
  public Origination $origination;
  public NonEmptyString $voice_connector_id;
}

class PutVoiceConnectorOriginationResponse {
  public Origination $origination;
}

class PutVoiceConnectorProxyRequest {
  public int $default_session_expiry_minutes;
  public boolean $disabled;
  public E164PhoneNumber $fall_back_phone_number;
  public CountryList $phone_number_pool_countries;
  public NonEmptyString128 $voice_connector_id;
}

class PutVoiceConnectorProxyResponse {
  public Proxy $proxy;
}

class PutVoiceConnectorStreamingConfigurationRequest {
  public StreamingConfiguration $streaming_configuration;
  public NonEmptyString $voice_connector_id;
}

class PutVoiceConnectorStreamingConfigurationResponse {
  public StreamingConfiguration $streaming_configuration;
}

class PutVoiceConnectorTerminationCredentialsRequest {
  public CredentialList $credentials;
  public NonEmptyString $voice_connector_id;
}

class PutVoiceConnectorTerminationRequest {
  public Termination $termination;
  public NonEmptyString $voice_connector_id;
}

class PutVoiceConnectorTerminationResponse {
  public Termination $termination;
}

class RegenerateSecurityTokenRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class RegenerateSecurityTokenResponse {
  public Bot $bot;
}

class RegistrationStatus {
}

class ResetPersonalPINRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;
}

class ResetPersonalPINResponse {
  public User $user;
}

class ResourceLimitExceededException {
  public ErrorCode $code;
  public string $message;
}

class RestorePhoneNumberRequest {
  public NonEmptyString $phone_number_id;
}

class RestorePhoneNumberResponse {
  public PhoneNumber $phone_number;
}

class ResultMax {
}

class Room {
  public NonEmptyString $account_id;
  public NonEmptyString $created_by;
  public Iso8601Timestamp $created_timestamp;
  public SensitiveString $name;
  public NonEmptyString $room_id;
  public Iso8601Timestamp $updated_timestamp;
}

class RoomList {
}

class RoomMembership {
  public NonEmptyString $invited_by;
  public Member $member;
  public RoomMembershipRole $role;
  public NonEmptyString $room_id;
  public Iso8601Timestamp $updated_timestamp;
}

class RoomMembershipList {
}

class RoomMembershipRole {
}

class SearchAvailablePhoneNumbersRequest {
  public string $area_code;
  public string $city;
  public string $country;
  public PhoneNumberMaxResults $max_results;
  public string $next_token;
  public string $state;
  public TollFreePrefix $toll_free_prefix;
}

class SearchAvailablePhoneNumbersResponse {
  public E164PhoneNumberList $e_164_phone_numbers;
}

class SensitiveString {
}

class SensitiveStringList {
}

class ServiceFailureException {
  public ErrorCode $code;
  public string $message;
}

class ServiceUnavailableException {
  public ErrorCode $code;
  public string $message;
}

class SigninDelegateGroup {
  public NonEmptyString $group_name;
}

class SigninDelegateGroupList {
}

class StreamingConfiguration {
  public DataRetentionInHours $data_retention_in_hours;
  public boolean $disabled;
}

class String {
}

class String128 {
}

class StringList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
  public AttendeeTagList $tags;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagMeetingRequest {
  public GuidString $meeting_id;
  public MeetingTagList $tags;
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class TagValue {
}

class TelephonySettings {
  public boolean $inbound_calling;
  public boolean $outbound_calling;
  public boolean $sms;
}

class Termination {
  public CallingRegionList $calling_regions;
  public StringList $cidr_allowed_list;
  public CpsLimit $cps_limit;
  public E164PhoneNumber $default_phone_number;
  public boolean $disabled;
}

class TerminationHealth {
  public string $source;
  public Iso8601Timestamp $timestamp;
}

class ThrottledClientException {
  public ErrorCode $code;
  public string $message;
}

class TollFreePrefix {
}

class UnauthorizedClientException {
  public ErrorCode $code;
  public string $message;
}

class UnprocessableEntityException {
  public ErrorCode $code;
  public string $message;
}

class UntagAttendeeRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
  public AttendeeTagKeyList $tag_keys;
}

class UntagMeetingRequest {
  public GuidString $meeting_id;
  public MeetingTagKeyList $tag_keys;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class UpdateAccountRequest {
  public NonEmptyString $account_id;
  public AccountName $name;
}

class UpdateAccountResponse {
  public Account $account;
}

class UpdateAccountSettingsRequest {
  public NonEmptyString $account_id;
  public AccountSettings $account_settings;
}

class UpdateAccountSettingsResponse {
}

class UpdateBotRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
  public NullableBoolean $disabled;
}

class UpdateBotResponse {
  public Bot $bot;
}

class UpdateGlobalSettingsRequest {
  public BusinessCallingSettings $business_calling;
  public VoiceConnectorSettings $voice_connector;
}

class UpdatePhoneNumberRequest {
  public CallingName $calling_name;
  public string $phone_number_id;
  public PhoneNumberProductType $product_type;
}

class UpdatePhoneNumberRequestItem {
  public CallingName $calling_name;
  public NonEmptyString $phone_number_id;
  public PhoneNumberProductType $product_type;
}

class UpdatePhoneNumberRequestItemList {
}

class UpdatePhoneNumberResponse {
  public PhoneNumber $phone_number;
}

class UpdatePhoneNumberSettingsRequest {
  public CallingName $calling_name;
}

class UpdateProxySessionRequest {
  public CapabilityList $capabilities;
  public PositiveInteger $expiry_minutes;
  public NonEmptyString128 $proxy_session_id;
  public NonEmptyString128 $voice_connector_id;
}

class UpdateProxySessionResponse {
  public ProxySession $proxy_session;
}

class UpdateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
  public NonEmptyString $room_id;
}

class UpdateRoomMembershipResponse {
  public RoomMembership $room_membership;
}

class UpdateRoomRequest {
  public NonEmptyString $account_id;
  public SensitiveString $name;
  public NonEmptyString $room_id;
}

class UpdateRoomResponse {
  public Room $room;
}

class UpdateUserRequest {
  public NonEmptyString $account_id;
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
  public License $license_type;
  public NonEmptyString $user_id;
  public UserType $user_type;
}

class UpdateUserRequestItem {
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
  public License $license_type;
  public NonEmptyString $user_id;
  public UserType $user_type;
}

class UpdateUserRequestItemList {
}

class UpdateUserResponse {
  public User $user;
}

class UpdateUserSettingsRequest {
  public string $account_id;
  public string $user_id;
  public UserSettings $user_settings;
}

class UpdateVoiceConnectorGroupRequest {
  public VoiceConnectorGroupName $name;
  public NonEmptyString $voice_connector_group_id;
  public VoiceConnectorItemList $voice_connector_items;
}

class UpdateVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;
}

class UpdateVoiceConnectorRequest {
  public VoiceConnectorName $name;
  public boolean $require_encryption;
  public NonEmptyString $voice_connector_id;
}

class UpdateVoiceConnectorResponse {
  public VoiceConnector $voice_connector;
}

class UriType {
}

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
}

class UserEmailList {
}

class UserError {
  public ErrorCode $error_code;
  public string $error_message;
  public NonEmptyString $user_id;
}

class UserErrorList {
}

class UserIdList {
}

class UserList {
}

class UserSettings {
  public TelephonySettings $telephony;
}

class UserType {
}

class VoiceConnector {
  public VoiceConnectorAwsRegion $aws_region;
  public Iso8601Timestamp $created_timestamp;
  public VoiceConnectorName $name;
  public string $outbound_host_name;
  public boolean $require_encryption;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString $voice_connector_id;
}

class VoiceConnectorAwsRegion {
}

class VoiceConnectorGroup {
  public Iso8601Timestamp $created_timestamp;
  public VoiceConnectorGroupName $name;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString $voice_connector_group_id;
  public VoiceConnectorItemList $voice_connector_items;
}

class VoiceConnectorGroupList {
}

class VoiceConnectorGroupName {
}

class VoiceConnectorItem {
  public VoiceConnectorItemPriority $priority;
  public NonEmptyString $voice_connector_id;
}

class VoiceConnectorItemList {
}

class VoiceConnectorItemPriority {
}

class VoiceConnectorList {
}

class VoiceConnectorName {
}

class VoiceConnectorSettings {
  public string $cdr_bucket;
}

