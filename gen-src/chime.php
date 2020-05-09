<?hh // strict
namespace slack\aws\chime;

interface Chime {
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function GetUser(GetUserRequest) Awaitable<Errors\Result<GetUserResponse>>;
  public function PutVoiceConnectorOrigination(PutVoiceConnectorOriginationRequest) Awaitable<Errors\Result<PutVoiceConnectorOriginationResponse>>;
  public function BatchUpdateUser(BatchUpdateUserRequest) Awaitable<Errors\Result<BatchUpdateUserResponse>>;
  public function TagAttendee(TagAttendeeRequest) Awaitable<Errors\Error>;
  public function GetAccount(GetAccountRequest) Awaitable<Errors\Result<GetAccountResponse>>;
  public function RestorePhoneNumber(RestorePhoneNumberRequest) Awaitable<Errors\Result<RestorePhoneNumberResponse>>;
  public function CreateVoiceConnector(CreateVoiceConnectorRequest) Awaitable<Errors\Result<CreateVoiceConnectorResponse>>;
  public function DisassociateSigninDelegateGroupsFromAccount(DisassociateSigninDelegateGroupsFromAccountRequest) Awaitable<Errors\Result<DisassociateSigninDelegateGroupsFromAccountResponse>>;
  public function CreateVoiceConnectorGroup(CreateVoiceConnectorGroupRequest) Awaitable<Errors\Result<CreateVoiceConnectorGroupResponse>>;
  public function GetVoiceConnectorProxy(GetVoiceConnectorProxyRequest) Awaitable<Errors\Result<GetVoiceConnectorProxyResponse>>;
  public function ListMeetingTags(ListMeetingTagsRequest) Awaitable<Errors\Result<ListMeetingTagsResponse>>;
  public function UpdateRoomMembership(UpdateRoomMembershipRequest) Awaitable<Errors\Result<UpdateRoomMembershipResponse>>;
  public function BatchSuspendUser(BatchSuspendUserRequest) Awaitable<Errors\Result<BatchSuspendUserResponse>>;
  public function DeleteAttendee(DeleteAttendeeRequest) Awaitable<Errors\Error>;
  public function ListProxySessions(ListProxySessionsRequest) Awaitable<Errors\Result<ListProxySessionsResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function DeleteVoiceConnectorTerminationCredentials(DeleteVoiceConnectorTerminationCredentialsRequest) Awaitable<Errors\Error>;
  public function GetVoiceConnectorTermination(GetVoiceConnectorTerminationRequest) Awaitable<Errors\Result<GetVoiceConnectorTerminationResponse>>;
  public function UpdateVoiceConnector(UpdateVoiceConnectorRequest) Awaitable<Errors\Result<UpdateVoiceConnectorResponse>>;
  public function GetAccountSettings(GetAccountSettingsRequest) Awaitable<Errors\Result<GetAccountSettingsResponse>>;
  public function ListAttendeeTags(ListAttendeeTagsRequest) Awaitable<Errors\Result<ListAttendeeTagsResponse>>;
  public function DeleteEventsConfiguration(DeleteEventsConfigurationRequest) Awaitable<Errors\Error>;
  public function DeleteProxySession(DeleteProxySessionRequest) Awaitable<Errors\Error>;
  public function PutVoiceConnectorLoggingConfiguration(PutVoiceConnectorLoggingConfigurationRequest) Awaitable<Errors\Result<PutVoiceConnectorLoggingConfigurationResponse>>;
  public function BatchCreateAttendee(BatchCreateAttendeeRequest) Awaitable<Errors\Result<BatchCreateAttendeeResponse>>;
  public function BatchCreateRoomMembership(BatchCreateRoomMembershipRequest) Awaitable<Errors\Result<BatchCreateRoomMembershipResponse>>;
  public function ListRooms(ListRoomsRequest) Awaitable<Errors\Result<ListRoomsResponse>>;
  public function UntagMeeting(UntagMeetingRequest) Awaitable<Errors\Error>;
  public function GetVoiceConnectorStreamingConfiguration(GetVoiceConnectorStreamingConfigurationRequest) Awaitable<Errors\Result<GetVoiceConnectorStreamingConfigurationResponse>>;
  public function InviteUsers(InviteUsersRequest) Awaitable<Errors\Result<InviteUsersResponse>>;
  public function ListAccounts(ListAccountsRequest) Awaitable<Errors\Result<ListAccountsResponse>>;
  public function PutVoiceConnectorProxy(PutVoiceConnectorProxyRequest) Awaitable<Errors\Result<PutVoiceConnectorProxyResponse>>;
  public function UpdateUser(UpdateUserRequest) Awaitable<Errors\Result<UpdateUserResponse>>;
  public function DeleteVoiceConnectorGroup(DeleteVoiceConnectorGroupRequest) Awaitable<Errors\Error>;
  public function GetAttendee(GetAttendeeRequest) Awaitable<Errors\Result<GetAttendeeResponse>>;
  public function CreateAttendee(CreateAttendeeRequest) Awaitable<Errors\Result<CreateAttendeeResponse>>;
  public function UpdateVoiceConnectorGroup(UpdateVoiceConnectorGroupRequest) Awaitable<Errors\Result<UpdateVoiceConnectorGroupResponse>>;
  public function DeleteVoiceConnector(DeleteVoiceConnectorRequest) Awaitable<Errors\Error>;
  public function DisassociatePhoneNumbersFromVoiceConnectorGroup(DisassociatePhoneNumbersFromVoiceConnectorGroupRequest) Awaitable<Errors\Result<DisassociatePhoneNumbersFromVoiceConnectorGroupResponse>>;
  public function UpdatePhoneNumberSettings(UpdatePhoneNumberSettingsRequest) Awaitable<Errors\Error>;
  public function BatchDeletePhoneNumber(BatchDeletePhoneNumberRequest) Awaitable<Errors\Result<BatchDeletePhoneNumberResponse>>;
  public function BatchUnsuspendUser(BatchUnsuspendUserRequest) Awaitable<Errors\Result<BatchUnsuspendUserResponse>>;
  public function GetPhoneNumberSettings() Awaitable<Errors\Result<GetPhoneNumberSettingsResponse>>;
  public function GetVoiceConnectorGroup(GetVoiceConnectorGroupRequest) Awaitable<Errors\Result<GetVoiceConnectorGroupResponse>>;
  public function ListAttendees(ListAttendeesRequest) Awaitable<Errors\Result<ListAttendeesResponse>>;
  public function CreateProxySession(CreateProxySessionRequest) Awaitable<Errors\Result<CreateProxySessionResponse>>;
  public function UntagAttendee(UntagAttendeeRequest) Awaitable<Errors\Error>;
  public function UpdateBot(UpdateBotRequest) Awaitable<Errors\Result<UpdateBotResponse>>;
  public function ListRoomMemberships(ListRoomMembershipsRequest) Awaitable<Errors\Result<ListRoomMembershipsResponse>>;
  public function UpdateProxySession(UpdateProxySessionRequest) Awaitable<Errors\Result<UpdateProxySessionResponse>>;
  public function PutVoiceConnectorTermination(PutVoiceConnectorTerminationRequest) Awaitable<Errors\Result<PutVoiceConnectorTerminationResponse>>;
  public function DeleteRoom(DeleteRoomRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorProxy(DeleteVoiceConnectorProxyRequest) Awaitable<Errors\Error>;
  public function DisassociatePhoneNumbersFromVoiceConnector(DisassociatePhoneNumbersFromVoiceConnectorRequest) Awaitable<Errors\Result<DisassociatePhoneNumbersFromVoiceConnectorResponse>>;
  public function ListVoiceConnectorGroups(ListVoiceConnectorGroupsRequest) Awaitable<Errors\Result<ListVoiceConnectorGroupsResponse>>;
  public function CreateBot(CreateBotRequest) Awaitable<Errors\Result<CreateBotResponse>>;
  public function DeleteAccount(DeleteAccountRequest) Awaitable<Errors\Result<DeleteAccountResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateAccountSettings(UpdateAccountSettingsRequest) Awaitable<Errors\Result<UpdateAccountSettingsResponse>>;
  public function UpdateUserSettings(UpdateUserSettingsRequest) Awaitable<Errors\Error>;
  public function AssociatePhoneNumbersWithVoiceConnectorGroup(AssociatePhoneNumbersWithVoiceConnectorGroupRequest) Awaitable<Errors\Result<AssociatePhoneNumbersWithVoiceConnectorGroupResponse>>;
  public function BatchUpdatePhoneNumber(BatchUpdatePhoneNumberRequest) Awaitable<Errors\Result<BatchUpdatePhoneNumberResponse>>;
  public function GetUserSettings(GetUserSettingsRequest) Awaitable<Errors\Result<GetUserSettingsResponse>>;
  public function DeleteVoiceConnectorOrigination(DeleteVoiceConnectorOriginationRequest) Awaitable<Errors\Error>;
  public function CreateMeeting(CreateMeetingRequest) Awaitable<Errors\Result<CreateMeetingResponse>>;
  public function ListMeetings(ListMeetingsRequest) Awaitable<Errors\Result<ListMeetingsResponse>>;
  public function UpdateGlobalSettings(UpdateGlobalSettingsRequest) Awaitable<Errors\Error>;
  public function UpdateRoom(UpdateRoomRequest) Awaitable<Errors\Result<UpdateRoomResponse>>;
  public function GetVoiceConnector(GetVoiceConnectorRequest) Awaitable<Errors\Result<GetVoiceConnectorResponse>>;
  public function GetVoiceConnectorLoggingConfiguration(GetVoiceConnectorLoggingConfigurationRequest) Awaitable<Errors\Result<GetVoiceConnectorLoggingConfigurationResponse>>;
  public function GetMeeting(GetMeetingRequest) Awaitable<Errors\Result<GetMeetingResponse>>;
  public function LogoutUser(LogoutUserRequest) Awaitable<Errors\Result<LogoutUserResponse>>;
  public function UpdatePhoneNumber(UpdatePhoneNumberRequest) Awaitable<Errors\Result<UpdatePhoneNumberResponse>>;
  public function AssociateSigninDelegateGroupsWithAccount(AssociateSigninDelegateGroupsWithAccountRequest) Awaitable<Errors\Result<AssociateSigninDelegateGroupsWithAccountResponse>>;
  public function DeleteRoomMembership(DeleteRoomMembershipRequest) Awaitable<Errors\Error>;
  public function PutVoiceConnectorStreamingConfiguration(PutVoiceConnectorStreamingConfigurationRequest) Awaitable<Errors\Result<PutVoiceConnectorStreamingConfigurationResponse>>;
  public function PutVoiceConnectorTerminationCredentials(PutVoiceConnectorTerminationCredentialsRequest) Awaitable<Errors\Error>;
  public function AssociatePhoneNumberWithUser(AssociatePhoneNumberWithUserRequest) Awaitable<Errors\Result<AssociatePhoneNumberWithUserResponse>>;
  public function AssociatePhoneNumbersWithVoiceConnector(AssociatePhoneNumbersWithVoiceConnectorRequest) Awaitable<Errors\Result<AssociatePhoneNumbersWithVoiceConnectorResponse>>;
  public function ListVoiceConnectorTerminationCredentials(ListVoiceConnectorTerminationCredentialsRequest) Awaitable<Errors\Result<ListVoiceConnectorTerminationCredentialsResponse>>;
  public function ListVoiceConnectors(ListVoiceConnectorsRequest) Awaitable<Errors\Result<ListVoiceConnectorsResponse>>;
  public function GetBot(GetBotRequest) Awaitable<Errors\Result<GetBotResponse>>;
  public function GetVoiceConnectorTerminationHealth(GetVoiceConnectorTerminationHealthRequest) Awaitable<Errors\Result<GetVoiceConnectorTerminationHealthResponse>>;
  public function GetPhoneNumber(GetPhoneNumberRequest) Awaitable<Errors\Result<GetPhoneNumberResponse>>;
  public function GetPhoneNumberOrder(GetPhoneNumberOrderRequest) Awaitable<Errors\Result<GetPhoneNumberOrderResponse>>;
  public function GetGlobalSettings() Awaitable<Errors\Result<GetGlobalSettingsResponse>>;
  public function ResetPersonalPIN(ResetPersonalPINRequest) Awaitable<Errors\Result<ResetPersonalPINResponse>>;
  public function CreateAccount(CreateAccountRequest) Awaitable<Errors\Result<CreateAccountResponse>>;
  public function DisassociatePhoneNumberFromUser(DisassociatePhoneNumberFromUserRequest) Awaitable<Errors\Result<DisassociatePhoneNumberFromUserResponse>>;
  public function ListPhoneNumbers(ListPhoneNumbersRequest) Awaitable<Errors\Result<ListPhoneNumbersResponse>>;
  public function UpdateAccount(UpdateAccountRequest) Awaitable<Errors\Result<UpdateAccountResponse>>;
  public function DeletePhoneNumber(DeletePhoneNumberRequest) Awaitable<Errors\Error>;
  public function ListPhoneNumberOrders(ListPhoneNumberOrdersRequest) Awaitable<Errors\Result<ListPhoneNumberOrdersResponse>>;
  public function GetProxySession(GetProxySessionRequest) Awaitable<Errors\Result<GetProxySessionResponse>>;
  public function GetVoiceConnectorOrigination(GetVoiceConnectorOriginationRequest) Awaitable<Errors\Result<GetVoiceConnectorOriginationResponse>>;
  public function TagMeeting(TagMeetingRequest) Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function CreateRoomMembership(CreateRoomMembershipRequest) Awaitable<Errors\Result<CreateRoomMembershipResponse>>;
  public function DeleteMeeting(DeleteMeetingRequest) Awaitable<Errors\Error>;
  public function DeleteVoiceConnectorStreamingConfiguration(DeleteVoiceConnectorStreamingConfigurationRequest) Awaitable<Errors\Error>;
  public function ListBots(ListBotsRequest) Awaitable<Errors\Result<ListBotsResponse>>;
  public function SearchAvailablePhoneNumbers(SearchAvailablePhoneNumbersRequest) Awaitable<Errors\Result<SearchAvailablePhoneNumbersResponse>>;
  public function CreatePhoneNumberOrder(CreatePhoneNumberOrderRequest) Awaitable<Errors\Result<CreatePhoneNumberOrderResponse>>;
  public function DeleteVoiceConnectorTermination(DeleteVoiceConnectorTerminationRequest) Awaitable<Errors\Error>;
  public function GetRoom(GetRoomRequest) Awaitable<Errors\Result<GetRoomResponse>>;
  public function PutEventsConfiguration(PutEventsConfigurationRequest) Awaitable<Errors\Result<PutEventsConfigurationResponse>>;
  public function GetEventsConfiguration(GetEventsConfigurationRequest) Awaitable<Errors\Result<GetEventsConfigurationResponse>>;
  public function RegenerateSecurityToken(RegenerateSecurityTokenRequest) Awaitable<Errors\Result<RegenerateSecurityTokenResponse>>;
  public function CreateRoom(CreateRoomRequest) Awaitable<Errors\Result<CreateRoomResponse>>;
}

class DeleteRoomRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
}

class ListAttendeeTagsRequest {
  public GuidString $attendee_id;
  public GuidString $meeting_id;
}

class PhoneNumberProductType {
}

class TollFreePrefix {
}

class VoiceConnectorSettings {
  public string $cdr_bucket;
}

class AssociatePhoneNumbersWithVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;
  public E164PhoneNumberList $e_164_phone_numbers;
  public NullableBoolean $force_associate;
}

class CreateAccountResponse {
  public Account $account;
}

class RoomMembershipRole {
}

class UriType {
}

class DeleteVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;
}

class Port {
}

class GetEventsConfigurationResponse {
  public EventsConfiguration $events_configuration;
}

class GetVoiceConnectorOriginationRequest {
  public NonEmptyString $voice_connector_id;
}

class LoggingConfiguration {
  public boolean $enable_sip_logs;
}

class UpdateRoomRequest {
  public SensitiveString $name;
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
}

class DeleteVoiceConnectorTerminationCredentialsRequest {
  public NonEmptyString $voice_connector_id;
  public SensitiveStringList $usernames;
}

class GetBotRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class OrderedPhoneNumber {
  public OrderedPhoneNumberStatus $status;
  public E164PhoneNumber $e_164_phone_number;
}

class PutVoiceConnectorStreamingConfigurationResponse {
  public StreamingConfiguration $streaming_configuration;
}

class UpdateProxySessionResponse {
  public ProxySession $proxy_session;
}

class GetUserResponse {
  public User $user;
}

class License {
}

class GetAccountRequest {
  public NonEmptyString $account_id;
}

class InviteUsersResponse {
  public InviteList $invites;
}

class MediaPlacement {
  public UriType $signaling_url;
  public UriType $turn_control_url;
  public UriType $audio_host_url;
  public UriType $audio_fallback_url;
  public UriType $screen_data_url;
  public UriType $screen_sharing_url;
  public UriType $screen_viewing_url;
}

class ProxySessionNameString {
}

class DataRetentionInHours {
}

class DeleteAttendeeRequest {
  public GuidString $meeting_id;
  public GuidString $attendee_id;
}

class ListMeetingsResponse {
  public MeetingList $meetings;
  public string $next_token;
}

class NonEmptyString128 {
}

class PutEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
  public SensitiveString $outbound_events_https_endpoint;
  public SensitiveString $lambda_function_arn;
}

class ResetPersonalPINResponse {
  public User $user;
}

class CountryList {
}

class DeleteAccountResponse {
}

class OrderedPhoneNumberStatus {
}

class UpdateVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;
  public VoiceConnectorName $name;
  public boolean $require_encryption;
}

class Iso8601Timestamp {
}

class NextTokenString {
}

class Participants {
}

class ProfileServiceMaxResults {
}

class GetVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;
}

class MeetingList {
}

class CreateRoomResponse {
  public Room $room;
}

class GetAttendeeResponse {
  public Attendee $attendee;
}

class GetBotResponse {
  public Bot $bot;
}

class PhoneNumberOrderList {
}

class String {
}

class UpdateBotRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
  public NullableBoolean $disabled;
}

class AccessDeniedException {
  public ErrorCode $code;
  public string $message;
}

class CallingNameStatus {
}

class ResultMax {
}

class UpdateAccountResponse {
  public Account $account;
}

class VoiceConnectorGroupList {
}

class Arn {
}

class ClientRequestToken {
}

class ListBotsRequest {
  public NonEmptyString $account_id;
  public ResultMax $max_results;
  public string $next_token;
}

class ParticipantPhoneNumberList {
}

class PhoneNumberList {
}

class SearchAvailablePhoneNumbersRequest {
  public TollFreePrefix $toll_free_prefix;
  public PhoneNumberMaxResults $max_results;
  public string $next_token;
  public string $area_code;
  public string $city;
  public string $country;
  public string $state;
}

class SensitiveStringList {
}

class AssociateSigninDelegateGroupsWithAccountRequest {
  public NonEmptyString $account_id;
  public SigninDelegateGroupList $signin_delegate_groups;
}

class BadRequestException {
  public string $message;
  public ErrorCode $code;
}

class DeleteVoiceConnectorStreamingConfigurationRequest {
  public NonEmptyString $voice_connector_id;
}

class PhoneNumberOrder {
  public OrderedPhoneNumberList $ordered_phone_numbers;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $updated_timestamp;
  public GuidString $phone_number_order_id;
  public PhoneNumberProductType $product_type;
  public PhoneNumberOrderStatus $status;
}

class TagAttendeeRequest {
  public GuidString $meeting_id;
  public GuidString $attendee_id;
  public AttendeeTagList $tags;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class CreatePhoneNumberOrderRequest {
  public PhoneNumberProductType $product_type;
  public E164PhoneNumberList $e_164_phone_numbers;
}

class DeleteVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;
}

class DisassociatePhoneNumbersFromVoiceConnectorRequest {
  public E164PhoneNumberList $e_164_phone_numbers;
  public NonEmptyString $voice_connector_id;
}

class ListVoiceConnectorGroupsRequest {
  public string $next_token;
  public ResultMax $max_results;
}

class ResetPersonalPINRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;
}

class Bot {
  public string $user_id;
  public NullableBoolean $disabled;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $updated_timestamp;
  public string $bot_id;
  public SensitiveString $display_name;
  public BotType $bot_type;
  public SensitiveString $bot_email;
  public SensitiveString $security_token;
}

class DeleteProxySessionRequest {
  public NonEmptyString128 $voice_connector_id;
  public NonEmptyString128 $proxy_session_id;
}

class Member {
  public SensitiveString $email;
  public SensitiveString $full_name;
  public NonEmptyString $account_id;
  public NonEmptyString $member_id;
  public MemberType $member_type;
}

class GetVoiceConnectorStreamingConfigurationRequest {
  public NonEmptyString $voice_connector_id;
}

class ListProxySessionsResponse {
  public ProxySessions $proxy_sessions;
  public NextTokenString $next_token;
}

class ListBotsResponse {
  public BotList $bots;
  public string $next_token;
}

class ListVoiceConnectorTerminationCredentialsRequest {
  public NonEmptyString $voice_connector_id;
}

class UpdateUserResponse {
  public User $user;
}

class BusinessCallingSettings {
  public string $cdr_bucket;
}

class CreateRoomMembershipResponse {
  public RoomMembership $room_membership;
}

class MembershipItemList {
}

class UpdateRoomMembershipResponse {
  public RoomMembership $room_membership;
}

class AttendeeTagKeyList {
}

class ListVoiceConnectorGroupsResponse {
  public VoiceConnectorGroupList $voice_connector_groups;
  public string $next_token;
}

class ListRoomsRequest {
  public ResultMax $max_results;
  public string $next_token;
  public NonEmptyString $account_id;
  public string $member_id;
}

class OriginationRoutePriority {
}

class VoiceConnectorList {
}

class BatchUpdateUserRequest {
  public NonEmptyString $account_id;
  public UpdateUserRequestItemList $update_user_request_items;
}

class BotType {
}

class DeleteAccountRequest {
  public NonEmptyString $account_id;
}

class InviteUsersRequest {
  public NonEmptyString $account_id;
  public UserEmailList $user_email_list;
  public UserType $user_type;
}

class PutVoiceConnectorLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;
}

class UpdatePhoneNumberRequestItemList {
}

class VoiceConnectorItem {
  public NonEmptyString $voice_connector_id;
  public VoiceConnectorItemPriority $priority;
}

class BatchSuspendUserRequest {
  public NonEmptyString $account_id;
  public UserIdList $user_id_list;
}

class CreateAttendeeRequestItemList {
}

class MeetingNotificationConfiguration {
  public Arn $sns_topic_arn;
  public Arn $sqs_queue_arn;
}

class UpdateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
}

class UpdateVoiceConnectorResponse {
  public VoiceConnector $voice_connector;
}

class BatchUpdateUserResponse {
  public UserErrorList $user_errors;
}

class DeleteMeetingRequest {
  public GuidString $meeting_id;
}

class E164PhoneNumber {
}

class GetVoiceConnectorStreamingConfigurationResponse {
  public StreamingConfiguration $streaming_configuration;
}

class GetVoiceConnectorTerminationResponse {
  public Termination $termination;
}

class PhoneNumberAssociationName {
}

class PutVoiceConnectorLoggingConfigurationRequest {
  public NonEmptyString $voice_connector_id;
  public LoggingConfiguration $logging_configuration;
}

class PutVoiceConnectorTerminationResponse {
  public Termination $termination;
}

class CallingRegion {
}

class CreateAccountRequest {
  public AccountName $name;
}

class UpdateVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class ThrottledClientException {
  public ErrorCode $code;
  public string $message;
}

class CreateBotRequest {
  public NonEmptyString $account_id;
  public SensitiveString $display_name;
  public NonEmptyString $domain;
}

class CreatePhoneNumberOrderResponse {
  public PhoneNumberOrder $phone_number_order;
}

class TelephonySettings {
  public boolean $inbound_calling;
  public boolean $outbound_calling;
  public boolean $sms;
}

class UpdatePhoneNumberRequestItem {
  public NonEmptyString $phone_number_id;
  public PhoneNumberProductType $product_type;
  public CallingName $calling_name;
}

class Attendee {
  public ExternalUserIdType $external_user_id;
  public GuidString $attendee_id;
  public JoinTokenString $join_token;
}

class BotList {
}

class SensitiveString {
}

class TagKeyList {
}

class UnprocessableEntityException {
  public ErrorCode $code;
  public string $message;
}

class PutVoiceConnectorProxyRequest {
  public int $default_session_expiry_minutes;
  public CountryList $phone_number_pool_countries;
  public E164PhoneNumber $fall_back_phone_number;
  public boolean $disabled;
  public NonEmptyString128 $voice_connector_id;
}

class PutVoiceConnectorTerminationRequest {
  public NonEmptyString $voice_connector_id;
  public Termination $termination;
}

class CreateVoiceConnectorRequest {
  public VoiceConnectorName $name;
  public VoiceConnectorAwsRegion $aws_region;
  public boolean $require_encryption;
}

class CreateVoiceConnectorResponse {
  public VoiceConnector $voice_connector;
}

class PhoneNumberErrorList {
}

class PhoneNumberStatus {
}

class AccountSettings {
  public boolean $enable_dial_out;
  public boolean $disable_remote_control;
}

class BatchCreateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
  public MembershipItemList $membership_item_list;
}

class GetPhoneNumberOrderResponse {
  public PhoneNumberOrder $phone_number_order;
}

class GetPhoneNumberRequest {
  public string $phone_number_id;
}

class PhoneNumberAssociationList {
}

class SearchAvailablePhoneNumbersResponse {
  public E164PhoneNumberList $e_164_phone_numbers;
}

class TerminationHealth {
  public Iso8601Timestamp $timestamp;
  public string $source;
}

class UpdateAccountRequest {
  public NonEmptyString $account_id;
  public AccountName $name;
}

class CreateMeetingRequest {
  public ExternalUserIdType $meeting_host_id;
  public string $media_region;
  public MeetingTagList $tags;
  public MeetingNotificationConfiguration $notifications_configuration;
  public ClientRequestToken $client_request_token;
  public ExternalMeetingIdType $external_meeting_id;
}

class DisassociatePhoneNumbersFromVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;
  public E164PhoneNumberList $e_164_phone_numbers;
}

class UserIdList {
}

class CpsLimit {
}

class DeleteEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class DisassociateSigninDelegateGroupsFromAccountResponse {
}

class GetPhoneNumberResponse {
  public PhoneNumber $phone_number;
}

class GetVoiceConnectorProxyResponse {
  public Proxy $proxy;
}

class ListAccountsRequest {
  public ProfileServiceMaxResults $max_results;
  public AccountName $name;
  public EmailAddress $user_email;
  public string $next_token;
}

class AssociatePhoneNumbersWithVoiceConnectorGroupResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class AttendeeTagList {
}

class VoiceConnector {
  public VoiceConnectorAwsRegion $aws_region;
  public VoiceConnectorName $name;
  public string $outbound_host_name;
  public boolean $require_encryption;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString $voice_connector_id;
}

class MemberType {
}

class PutVoiceConnectorProxyResponse {
  public Proxy $proxy;
}

class SigninDelegateGroup {
  public NonEmptyString $group_name;
}

class StringList {
}

class AssociatePhoneNumberWithUserResponse {
}

class DeleteVoiceConnectorOriginationRequest {
  public NonEmptyString $voice_connector_id;
}

class ErrorCode {
}

class GetUserSettingsResponse {
  public UserSettings $user_settings;
}

class InviteList {
}

class ListAttendeeTagsResponse {
  public TagList $tags;
}

class Origination {
  public boolean $disabled;
  public OriginationRouteList $routes;
}

class VoiceConnectorItemPriority {
}

class CreateRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
}

class CreateUserResponse {
  public User $user;
}

class ListPhoneNumbersResponse {
  public PhoneNumberList $phone_numbers;
  public string $next_token;
}

class UpdateUserRequestItemList {
}

class UpdateVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;
  public VoiceConnectorGroupName $name;
  public VoiceConnectorItemList $voice_connector_items;
}

class CreateAttendeeRequestItem {
  public ExternalUserIdType $external_user_id;
  public AttendeeTagList $tags;
}

class DeleteVoiceConnectorProxyRequest {
  public NonEmptyString128 $voice_connector_id;
}

class NonEmptyStringList {
}

class OrderedPhoneNumberList {
}

class RegenerateSecurityTokenRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class Room {
  public NonEmptyString $created_by;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString $room_id;
  public SensitiveString $name;
  public NonEmptyString $account_id;
}

class UpdateBotResponse {
  public Bot $bot;
}

class VoiceConnectorGroupName {
}

class CreateProxySessionRequest {
  public ProxySessionNameString $name;
  public PositiveInteger $expiry_minutes;
  public CapabilityList $capabilities;
  public NumberSelectionBehavior $number_selection_behavior;
  public GeoMatchLevel $geo_match_level;
  public GeoMatchParams $geo_match_params;
  public NonEmptyString128 $voice_connector_id;
  public ParticipantPhoneNumberList $participant_phone_numbers;
}

class ListVoiceConnectorsResponse {
  public VoiceConnectorList $voice_connectors;
  public string $next_token;
}

class RegistrationStatus {
}

class UpdateAccountSettingsResponse {
}

class VoiceConnectorName {
}

class CapabilityList {
}

class Participant {
  public E164PhoneNumber $phone_number;
  public E164PhoneNumber $proxy_phone_number;
}

class GuidString {
}

class ListUsersRequest {
  public ProfileServiceMaxResults $max_results;
  public string $next_token;
  public NonEmptyString $account_id;
  public EmailAddress $user_email;
  public UserType $user_type;
}

class ListVoiceConnectorTerminationCredentialsResponse {
  public SensitiveStringList $usernames;
}

class MeetingTagList {
}

class OriginationRouteWeight {
}

class ProxySessions {
}

class CallingRegionList {
}

class GetRoomResponse {
  public Room $room;
}

class VoiceConnectorGroup {
  public VoiceConnectorItemList $voice_connector_items;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $updated_timestamp;
  public NonEmptyString $voice_connector_group_id;
  public VoiceConnectorGroupName $name;
}

class RoomMembershipList {
}

class TagMeetingRequest {
  public GuidString $meeting_id;
  public MeetingTagList $tags;
}

class GetPhoneNumberOrderRequest {
  public GuidString $phone_number_order_id;
}

class Meeting {
  public GuidString $meeting_id;
  public ExternalMeetingIdType $external_meeting_id;
  public MediaPlacement $media_placement;
  public string $media_region;
}

class PhoneNumberAssociation {
  public Iso8601Timestamp $associated_timestamp;
  public string $value;
  public PhoneNumberAssociationName $name;
}

class RestorePhoneNumberRequest {
  public NonEmptyString $phone_number_id;
}

class UpdateUserRequestItem {
  public NonEmptyString $user_id;
  public License $license_type;
  public UserType $user_type;
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
}

class EmailStatus {
}

class GeoMatchParams {
  public Country $country;
  public AreaCode $area_code;
}

class CreateRoomRequest {
  public SensitiveString $name;
  public ClientRequestToken $client_request_token;
  public NonEmptyString $account_id;
}

class LogoutUserRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;
}

class PhoneNumber {
  public string $phone_number_id;
  public E164PhoneNumber $e_164_phone_number;
  public PhoneNumberType $type;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $updated_timestamp;
  public PhoneNumberProductType $product_type;
  public PhoneNumberStatus $status;
  public PhoneNumberCapabilities $capabilities;
  public PhoneNumberAssociationList $associations;
  public CallingName $calling_name;
  public CallingNameStatus $calling_name_status;
  public Iso8601Timestamp $deletion_timestamp;
}

class PhoneNumberCapabilities {
  public NullableBoolean $outbound_call;
  public NullableBoolean $inbound_sms;
  public NullableBoolean $outbound_sms;
  public NullableBoolean $inbound_mms;
  public NullableBoolean $outbound_mms;
  public NullableBoolean $inbound_call;
}

class PhoneNumberMaxResults {
}

class PhoneNumberOrderStatus {
}

class AssociateSigninDelegateGroupsWithAccountResponse {
}

class CreateProxySessionResponse {
  public ProxySession $proxy_session;
}

class GetVoiceConnectorTerminationRequest {
  public NonEmptyString $voice_connector_id;
}

class DisassociatePhoneNumberFromUserResponse {
}

class GetVoiceConnectorTerminationHealthRequest {
  public NonEmptyString $voice_connector_id;
}

class GetVoiceConnectorOriginationResponse {
  public Origination $origination;
}

class PutVoiceConnectorOriginationResponse {
  public Origination $origination;
}

class TagKey {
}

class TagList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class UserError {
  public string $error_message;
  public NonEmptyString $user_id;
  public ErrorCode $error_code;
}

class CallingName {
}

class GetUserRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;
}

class ListMeetingsRequest {
  public ResultMax $max_results;
  public string $next_token;
}

class MemberError {
  public NonEmptyString $member_id;
  public ErrorCode $error_code;
  public string $error_message;
}

class StreamingConfiguration {
  public DataRetentionInHours $data_retention_in_hours;
  public boolean $disabled;
}

class String128 {
}

class AssociatePhoneNumbersWithVoiceConnectorResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class GetVoiceConnectorResponse {
  public VoiceConnector $voice_connector;
}

class GeoMatchLevel {
}

class ListAccountsResponse {
  public AccountList $accounts;
  public string $next_token;
}

class PutVoiceConnectorStreamingConfigurationRequest {
  public StreamingConfiguration $streaming_configuration;
  public NonEmptyString $voice_connector_id;
}

class UpdateGlobalSettingsRequest {
  public BusinessCallingSettings $business_calling;
  public VoiceConnectorSettings $voice_connector;
}

class UpdateProxySessionRequest {
  public NonEmptyString128 $voice_connector_id;
  public NonEmptyString128 $proxy_session_id;
  public CapabilityList $capabilities;
  public PositiveInteger $expiry_minutes;
}

class CreateVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;
}

class ForbiddenException {
  public string $message;
  public ErrorCode $code;
}

class VoiceConnectorItemList {
}

class RegenerateSecurityTokenResponse {
  public Bot $bot;
}

class ServiceFailureException {
  public ErrorCode $code;
  public string $message;
}

class GetUserSettingsRequest {
  public string $user_id;
  public string $account_id;
}

class GetVoiceConnectorTerminationHealthResponse {
  public TerminationHealth $termination_health;
}

class JoinTokenString {
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ProxySession {
  public NonEmptyString128 $proxy_session_id;
  public String128 $name;
  public ProxySessionStatus $status;
  public Participants $participants;
  public NumberSelectionBehavior $number_selection_behavior;
  public GeoMatchLevel $geo_match_level;
  public NonEmptyString128 $voice_connector_id;
  public CapabilityList $capabilities;
  public Iso8601Timestamp $created_timestamp;
  public Iso8601Timestamp $updated_timestamp;
  public Iso8601Timestamp $ended_timestamp;
  public GeoMatchParams $geo_match_params;
  public PositiveInteger $expiry_minutes;
}

class UntagMeetingRequest {
  public GuidString $meeting_id;
  public MeetingTagKeyList $tag_keys;
}

class BatchUnsuspendUserRequest {
  public NonEmptyString $account_id;
  public UserIdList $user_id_list;
}

class GetProxySessionRequest {
  public NonEmptyString128 $voice_connector_id;
  public NonEmptyString128 $proxy_session_id;
}

class GetRoomRequest {
  public NonEmptyString $room_id;
  public NonEmptyString $account_id;
}

class GetVoiceConnectorProxyRequest {
  public NonEmptyString128 $voice_connector_id;
}

class ListVoiceConnectorsRequest {
  public string $next_token;
  public ResultMax $max_results;
}

class RestorePhoneNumberResponse {
  public PhoneNumber $phone_number;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class UpdateUserRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $user_id;
  public License $license_type;
  public UserType $user_type;
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
}

class AccountType {
}

class Country {
}

class GetMeetingRequest {
  public GuidString $meeting_id;
}

class ListAttendeesResponse {
  public string $next_token;
  public AttendeeList $attendees;
}

class ListPhoneNumberOrdersResponse {
  public PhoneNumberOrderList $phone_number_orders;
  public string $next_token;
}

class BatchDeletePhoneNumberResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class CreateAttendeeError {
  public string $error_message;
  public ExternalUserIdType $external_user_id;
  public string $error_code;
}

class BatchCreateAttendeeErrorList {
}

class ListProxySessionsRequest {
  public NonEmptyString128 $voice_connector_id;
  public ProxySessionStatus $status;
  public NextTokenString $next_token;
  public ResultMax $max_results;
}

class PositiveInteger {
}

class ServiceUnavailableException {
  public ErrorCode $code;
  public string $message;
}

class AccountList {
}

class AreaCode {
}

class GetMeetingResponse {
  public Meeting $meeting;
}

class Invite {
  public string $invite_id;
  public InviteStatus $status;
  public EmailAddress $email_address;
  public EmailStatus $email_status;
}

class RoomMembership {
  public NonEmptyString $room_id;
  public Member $member;
  public RoomMembershipRole $role;
  public NonEmptyString $invited_by;
  public Iso8601Timestamp $updated_timestamp;
}

class UserErrorList {
}

class AssociatePhoneNumbersWithVoiceConnectorGroupRequest {
  public NonEmptyString $voice_connector_group_id;
  public E164PhoneNumberList $e_164_phone_numbers;
  public NullableBoolean $force_associate;
}

class CreateAttendeeResponse {
  public Attendee $attendee;
}

class GetEventsConfigurationRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $bot_id;
}

class ListMeetingTagsResponse {
  public TagList $tags;
}

class UpdateUserSettingsRequest {
  public UserSettings $user_settings;
  public string $account_id;
  public string $user_id;
}

class AccountName {
}

class CreateVoiceConnectorGroupRequest {
  public VoiceConnectorGroupName $name;
  public VoiceConnectorItemList $voice_connector_items;
}

class GetVoiceConnectorRequest {
  public NonEmptyString $voice_connector_id;
}

class LicenseList {
}

class ListRoomsResponse {
  public string $next_token;
  public RoomList $rooms;
}

class PhoneNumberError {
  public string $error_message;
  public NonEmptyString $phone_number_id;
  public ErrorCode $error_code;
}

class CreateMeetingResponse {
  public Meeting $meeting;
}

class GetAccountSettingsRequest {
  public NonEmptyString $account_id;
}

class GetAttendeeRequest {
  public GuidString $meeting_id;
  public GuidString $attendee_id;
}

class UpdatePhoneNumberSettingsRequest {
  public CallingName $calling_name;
}

class CreateAttendeeRequest {
  public GuidString $meeting_id;
  public ExternalUserIdType $external_user_id;
  public AttendeeTagList $tags;
}

class CreateUserRequest {
  public EmailAddress $email;
  public UserType $user_type;
  public NonEmptyString $account_id;
  public string $username;
}

class GetAccountResponse {
  public Account $account;
}

class LogoutUserResponse {
}

class MemberErrorList {
}

class UserEmailList {
}

class Account {
  public string $account_id;
  public string $name;
  public AccountType $account_type;
  public Iso8601Timestamp $created_timestamp;
  public License $default_license;
  public LicenseList $supported_licenses;
  public SigninDelegateGroupList $signin_delegate_groups;
  public string $aws_account_id;
}

class AttendeeList {
}

class GetAccountSettingsResponse {
  public AccountSettings $account_settings;
}

class UpdateRoomResponse {
  public Room $room;
}

class UserType {
}

class BatchCreateRoomMembershipResponse {
  public MemberErrorList $errors;
}

class ExternalMeetingIdType {
}

class Integer {
}

class ListUsersResponse {
  public UserList $users;
  public string $next_token;
}

class NonEmptyString {
}

class Termination {
  public CpsLimit $cps_limit;
  public E164PhoneNumber $default_phone_number;
  public CallingRegionList $calling_regions;
  public StringList $cidr_allowed_list;
  public boolean $disabled;
}

class UntagAttendeeRequest {
  public GuidString $meeting_id;
  public GuidString $attendee_id;
  public AttendeeTagKeyList $tag_keys;
}

class DeletePhoneNumberRequest {
  public string $phone_number_id;
}

class DisassociatePhoneNumbersFromVoiceConnectorGroupResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class DeleteVoiceConnectorTerminationRequest {
  public NonEmptyString $voice_connector_id;
}

class DisassociatePhoneNumberFromUserRequest {
  public string $account_id;
  public string $user_id;
}

class GetVoiceConnectorLoggingConfigurationResponse {
  public LoggingConfiguration $logging_configuration;
}

class ListMeetingTagsRequest {
  public GuidString $meeting_id;
}

class ListPhoneNumberOrdersRequest {
  public string $next_token;
  public ResultMax $max_results;
}

class ListRoomMembershipsRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
  public ResultMax $max_results;
  public string $next_token;
}

class BatchCreateAttendeeRequest {
  public CreateAttendeeRequestItemList $attendees;
  public GuidString $meeting_id;
}

class CreateBotResponse {
  public Bot $bot;
}

class UserList {
}

class MeetingTagKeyList {
}

class PhoneNumberType {
}

class BatchCreateAttendeeResponse {
  public AttendeeList $attendees;
  public BatchCreateAttendeeErrorList $errors;
}

class ListPhoneNumbersRequest {
  public PhoneNumberStatus $status;
  public PhoneNumberProductType $product_type;
  public PhoneNumberAssociationName $filter_name;
  public string $filter_value;
  public ResultMax $max_results;
  public string $next_token;
}

class UnauthorizedClientException {
  public ErrorCode $code;
  public string $message;
}

class EmailAddress {
}

class NotFoundException {
  public string $message;
  public ErrorCode $code;
}

class OriginationRoute {
  public OriginationRouteProtocol $protocol;
  public OriginationRoutePriority $priority;
  public OriginationRouteWeight $weight;
  public string $host;
  public Port $port;
}

class PutVoiceConnectorOriginationRequest {
  public NonEmptyString $voice_connector_id;
  public Origination $origination;
}

class Capability {
}

class CredentialList {
}

class ProxySessionStatus {
}

class BatchUpdatePhoneNumberRequest {
  public UpdatePhoneNumberRequestItemList $update_phone_number_request_items;
}

class GetVoiceConnectorLoggingConfigurationRequest {
  public NonEmptyString $voice_connector_id;
}

class AssociatePhoneNumberWithUserRequest {
  public string $account_id;
  public string $user_id;
  public E164PhoneNumber $e_164_phone_number;
}

class UpdatePhoneNumberResponse {
  public PhoneNumber $phone_number;
}

class ResourceLimitExceededException {
  public ErrorCode $code;
  public string $message;
}

class Boolean {
}

class Proxy {
  public int $default_session_expiry_minutes;
  public boolean $disabled;
  public E164PhoneNumber $fall_back_phone_number;
  public StringList $phone_number_countries;
}

class GetGlobalSettingsResponse {
  public BusinessCallingSettings $business_calling;
  public VoiceConnectorSettings $voice_connector;
}

class GetVoiceConnectorGroupResponse {
  public VoiceConnectorGroup $voice_connector_group;
}

class InviteStatus {
}

class PutVoiceConnectorTerminationCredentialsRequest {
  public NonEmptyString $voice_connector_id;
  public CredentialList $credentials;
}

class TagValue {
}

class UserSettings {
  public TelephonySettings $telephony;
}

class BatchUpdatePhoneNumberResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class EventsConfiguration {
  public string $bot_id;
  public SensitiveString $outbound_events_https_endpoint;
  public SensitiveString $lambda_function_arn;
}

class GetPhoneNumberSettingsResponse {
  public Iso8601Timestamp $calling_name_updated_timestamp;
  public CallingName $calling_name;
}

class NullableBoolean {
}

class NumberSelectionBehavior {
}

class User {
  public InviteStatus $user_invitation_status;
  public Iso8601Timestamp $registered_on;
  public Iso8601Timestamp $invited_on;
  public string $user_id;
  public string $account_id;
  public EmailAddress $primary_email;
  public SensitiveString $display_name;
  public License $license_type;
  public AlexaForBusinessMetadata $alexa_for_business_metadata;
  public SensitiveString $primary_provisioned_number;
  public UserType $user_type;
  public RegistrationStatus $user_registration_status;
  public string $personal_pin;
}

class ConflictException {
  public string $message;
  public ErrorCode $code;
}

class ExternalUserIdType {
}

class OriginationRouteProtocol {
}

class UpdatePhoneNumberRequest {
  public PhoneNumberProductType $product_type;
  public CallingName $calling_name;
  public string $phone_number_id;
}

class VoiceConnectorAwsRegion {
}

class BatchSuspendUserResponse {
  public UserErrorList $user_errors;
}

class Credential {
  public SensitiveString $username;
  public SensitiveString $password;
}

class DisassociatePhoneNumbersFromVoiceConnectorResponse {
  public PhoneNumberErrorList $phone_number_errors;
}

class E164PhoneNumberList {
}

class ListRoomMembershipsResponse {
  public RoomMembershipList $room_memberships;
  public string $next_token;
}

class MembershipItem {
  public NonEmptyString $member_id;
  public RoomMembershipRole $role;
}

class UpdateAccountSettingsRequest {
  public NonEmptyString $account_id;
  public AccountSettings $account_settings;
}

class BatchDeletePhoneNumberRequest {
  public NonEmptyStringList $phone_number_ids;
}

class DeleteRoomMembershipRequest {
  public NonEmptyString $account_id;
  public NonEmptyString $room_id;
  public NonEmptyString $member_id;
}

class OriginationRouteList {
}

class RoomList {
}

class SigninDelegateGroupList {
}

class DisassociateSigninDelegateGroupsFromAccountRequest {
  public NonEmptyString $account_id;
  public NonEmptyStringList $group_names;
}

class GetProxySessionResponse {
  public ProxySession $proxy_session;
}

class ListAttendeesRequest {
  public GuidString $meeting_id;
  public string $next_token;
  public ResultMax $max_results;
}

class PutEventsConfigurationResponse {
  public EventsConfiguration $events_configuration;
}

class AlexaForBusinessMetadata {
  public boolean $is_alexa_for_business_enabled;
  public SensitiveString $alexa_for_business_room_arn;
}

class BatchUnsuspendUserResponse {
  public UserErrorList $user_errors;
}

