<?hh // strict
namespace slack\aws\cognito-idp;

interface CognitoIdentityProvider {
  public function AddCustomAttributes(AddCustomAttributesRequest $in): Awaitable<\Errors\Result<AddCustomAttributesResponse>>;
  public function AdminAddUserToGroup(AdminAddUserToGroupRequest $in): Awaitable<\Errors\Error>;
  public function AdminConfirmSignUp(AdminConfirmSignUpRequest $in): Awaitable<\Errors\Result<AdminConfirmSignUpResponse>>;
  public function AdminCreateUser(AdminCreateUserRequest $in): Awaitable<\Errors\Result<AdminCreateUserResponse>>;
  public function AdminDeleteUser(AdminDeleteUserRequest $in): Awaitable<\Errors\Error>;
  public function AdminDeleteUserAttributes(AdminDeleteUserAttributesRequest $in): Awaitable<\Errors\Result<AdminDeleteUserAttributesResponse>>;
  public function AdminDisableProviderForUser(AdminDisableProviderForUserRequest $in): Awaitable<\Errors\Result<AdminDisableProviderForUserResponse>>;
  public function AdminDisableUser(AdminDisableUserRequest $in): Awaitable<\Errors\Result<AdminDisableUserResponse>>;
  public function AdminEnableUser(AdminEnableUserRequest $in): Awaitable<\Errors\Result<AdminEnableUserResponse>>;
  public function AdminForgetDevice(AdminForgetDeviceRequest $in): Awaitable<\Errors\Error>;
  public function AdminGetDevice(AdminGetDeviceRequest $in): Awaitable<\Errors\Result<AdminGetDeviceResponse>>;
  public function AdminGetUser(AdminGetUserRequest $in): Awaitable<\Errors\Result<AdminGetUserResponse>>;
  public function AdminInitiateAuth(AdminInitiateAuthRequest $in): Awaitable<\Errors\Result<AdminInitiateAuthResponse>>;
  public function AdminLinkProviderForUser(AdminLinkProviderForUserRequest $in): Awaitable<\Errors\Result<AdminLinkProviderForUserResponse>>;
  public function AdminListDevices(AdminListDevicesRequest $in): Awaitable<\Errors\Result<AdminListDevicesResponse>>;
  public function AdminListGroupsForUser(AdminListGroupsForUserRequest $in): Awaitable<\Errors\Result<AdminListGroupsForUserResponse>>;
  public function AdminListUserAuthEvents(AdminListUserAuthEventsRequest $in): Awaitable<\Errors\Result<AdminListUserAuthEventsResponse>>;
  public function AdminRemoveUserFromGroup(AdminRemoveUserFromGroupRequest $in): Awaitable<\Errors\Error>;
  public function AdminResetUserPassword(AdminResetUserPasswordRequest $in): Awaitable<\Errors\Result<AdminResetUserPasswordResponse>>;
  public function AdminRespondToAuthChallenge(AdminRespondToAuthChallengeRequest $in): Awaitable<\Errors\Result<AdminRespondToAuthChallengeResponse>>;
  public function AdminSetUserMFAPreference(AdminSetUserMFAPreferenceRequest $in): Awaitable<\Errors\Result<AdminSetUserMFAPreferenceResponse>>;
  public function AdminSetUserPassword(AdminSetUserPasswordRequest $in): Awaitable<\Errors\Result<AdminSetUserPasswordResponse>>;
  public function AdminSetUserSettings(AdminSetUserSettingsRequest $in): Awaitable<\Errors\Result<AdminSetUserSettingsResponse>>;
  public function AdminUpdateAuthEventFeedback(AdminUpdateAuthEventFeedbackRequest $in): Awaitable<\Errors\Result<AdminUpdateAuthEventFeedbackResponse>>;
  public function AdminUpdateDeviceStatus(AdminUpdateDeviceStatusRequest $in): Awaitable<\Errors\Result<AdminUpdateDeviceStatusResponse>>;
  public function AdminUpdateUserAttributes(AdminUpdateUserAttributesRequest $in): Awaitable<\Errors\Result<AdminUpdateUserAttributesResponse>>;
  public function AdminUserGlobalSignOut(AdminUserGlobalSignOutRequest $in): Awaitable<\Errors\Result<AdminUserGlobalSignOutResponse>>;
  public function AssociateSoftwareToken(AssociateSoftwareTokenRequest $in): Awaitable<\Errors\Result<AssociateSoftwareTokenResponse>>;
  public function ChangePassword(ChangePasswordRequest $in): Awaitable<\Errors\Result<ChangePasswordResponse>>;
  public function ConfirmDevice(ConfirmDeviceRequest $in): Awaitable<\Errors\Result<ConfirmDeviceResponse>>;
  public function ConfirmForgotPassword(ConfirmForgotPasswordRequest $in): Awaitable<\Errors\Result<ConfirmForgotPasswordResponse>>;
  public function ConfirmSignUp(ConfirmSignUpRequest $in): Awaitable<\Errors\Result<ConfirmSignUpResponse>>;
  public function CreateGroup(CreateGroupRequest $in): Awaitable<\Errors\Result<CreateGroupResponse>>;
  public function CreateIdentityProvider(CreateIdentityProviderRequest $in): Awaitable<\Errors\Result<CreateIdentityProviderResponse>>;
  public function CreateResourceServer(CreateResourceServerRequest $in): Awaitable<\Errors\Result<CreateResourceServerResponse>>;
  public function CreateUserImportJob(CreateUserImportJobRequest $in): Awaitable<\Errors\Result<CreateUserImportJobResponse>>;
  public function CreateUserPool(CreateUserPoolRequest $in): Awaitable<\Errors\Result<CreateUserPoolResponse>>;
  public function CreateUserPoolClient(CreateUserPoolClientRequest $in): Awaitable<\Errors\Result<CreateUserPoolClientResponse>>;
  public function CreateUserPoolDomain(CreateUserPoolDomainRequest $in): Awaitable<\Errors\Result<CreateUserPoolDomainResponse>>;
  public function DeleteGroup(DeleteGroupRequest $in): Awaitable<\Errors\Error>;
  public function DeleteIdentityProvider(DeleteIdentityProviderRequest $in): Awaitable<\Errors\Error>;
  public function DeleteResourceServer(DeleteResourceServerRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUser(DeleteUserRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUserAttributes(DeleteUserAttributesRequest $in): Awaitable<\Errors\Result<DeleteUserAttributesResponse>>;
  public function DeleteUserPool(DeleteUserPoolRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUserPoolClient(DeleteUserPoolClientRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUserPoolDomain(DeleteUserPoolDomainRequest $in): Awaitable<\Errors\Result<DeleteUserPoolDomainResponse>>;
  public function DescribeIdentityProvider(DescribeIdentityProviderRequest $in): Awaitable<\Errors\Result<DescribeIdentityProviderResponse>>;
  public function DescribeResourceServer(DescribeResourceServerRequest $in): Awaitable<\Errors\Result<DescribeResourceServerResponse>>;
  public function DescribeRiskConfiguration(DescribeRiskConfigurationRequest $in): Awaitable<\Errors\Result<DescribeRiskConfigurationResponse>>;
  public function DescribeUserImportJob(DescribeUserImportJobRequest $in): Awaitable<\Errors\Result<DescribeUserImportJobResponse>>;
  public function DescribeUserPool(DescribeUserPoolRequest $in): Awaitable<\Errors\Result<DescribeUserPoolResponse>>;
  public function DescribeUserPoolClient(DescribeUserPoolClientRequest $in): Awaitable<\Errors\Result<DescribeUserPoolClientResponse>>;
  public function DescribeUserPoolDomain(DescribeUserPoolDomainRequest $in): Awaitable<\Errors\Result<DescribeUserPoolDomainResponse>>;
  public function ForgetDevice(ForgetDeviceRequest $in): Awaitable<\Errors\Error>;
  public function ForgotPassword(ForgotPasswordRequest $in): Awaitable<\Errors\Result<ForgotPasswordResponse>>;
  public function GetCSVHeader(GetCSVHeaderRequest $in): Awaitable<\Errors\Result<GetCSVHeaderResponse>>;
  public function GetDevice(GetDeviceRequest $in): Awaitable<\Errors\Result<GetDeviceResponse>>;
  public function GetGroup(GetGroupRequest $in): Awaitable<\Errors\Result<GetGroupResponse>>;
  public function GetIdentityProviderByIdentifier(GetIdentityProviderByIdentifierRequest $in): Awaitable<\Errors\Result<GetIdentityProviderByIdentifierResponse>>;
  public function GetSigningCertificate(GetSigningCertificateRequest $in): Awaitable<\Errors\Result<GetSigningCertificateResponse>>;
  public function GetUICustomization(GetUICustomizationRequest $in): Awaitable<\Errors\Result<GetUICustomizationResponse>>;
  public function GetUser(GetUserRequest $in): Awaitable<\Errors\Result<GetUserResponse>>;
  public function GetUserAttributeVerificationCode(GetUserAttributeVerificationCodeRequest $in): Awaitable<\Errors\Result<GetUserAttributeVerificationCodeResponse>>;
  public function GetUserPoolMfaConfig(GetUserPoolMfaConfigRequest $in): Awaitable<\Errors\Result<GetUserPoolMfaConfigResponse>>;
  public function GlobalSignOut(GlobalSignOutRequest $in): Awaitable<\Errors\Result<GlobalSignOutResponse>>;
  public function InitiateAuth(InitiateAuthRequest $in): Awaitable<\Errors\Result<InitiateAuthResponse>>;
  public function ListDevices(ListDevicesRequest $in): Awaitable<\Errors\Result<ListDevicesResponse>>;
  public function ListGroups(ListGroupsRequest $in): Awaitable<\Errors\Result<ListGroupsResponse>>;
  public function ListIdentityProviders(ListIdentityProvidersRequest $in): Awaitable<\Errors\Result<ListIdentityProvidersResponse>>;
  public function ListResourceServers(ListResourceServersRequest $in): Awaitable<\Errors\Result<ListResourceServersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListUserImportJobs(ListUserImportJobsRequest $in): Awaitable<\Errors\Result<ListUserImportJobsResponse>>;
  public function ListUserPoolClients(ListUserPoolClientsRequest $in): Awaitable<\Errors\Result<ListUserPoolClientsResponse>>;
  public function ListUserPools(ListUserPoolsRequest $in): Awaitable<\Errors\Result<ListUserPoolsResponse>>;
  public function ListUsers(ListUsersRequest $in): Awaitable<\Errors\Result<ListUsersResponse>>;
  public function ListUsersInGroup(ListUsersInGroupRequest $in): Awaitable<\Errors\Result<ListUsersInGroupResponse>>;
  public function ResendConfirmationCode(ResendConfirmationCodeRequest $in): Awaitable<\Errors\Result<ResendConfirmationCodeResponse>>;
  public function RespondToAuthChallenge(RespondToAuthChallengeRequest $in): Awaitable<\Errors\Result<RespondToAuthChallengeResponse>>;
  public function SetRiskConfiguration(SetRiskConfigurationRequest $in): Awaitable<\Errors\Result<SetRiskConfigurationResponse>>;
  public function SetUICustomization(SetUICustomizationRequest $in): Awaitable<\Errors\Result<SetUICustomizationResponse>>;
  public function SetUserMFAPreference(SetUserMFAPreferenceRequest $in): Awaitable<\Errors\Result<SetUserMFAPreferenceResponse>>;
  public function SetUserPoolMfaConfig(SetUserPoolMfaConfigRequest $in): Awaitable<\Errors\Result<SetUserPoolMfaConfigResponse>>;
  public function SetUserSettings(SetUserSettingsRequest $in): Awaitable<\Errors\Result<SetUserSettingsResponse>>;
  public function SignUp(SignUpRequest $in): Awaitable<\Errors\Result<SignUpResponse>>;
  public function StartUserImportJob(StartUserImportJobRequest $in): Awaitable<\Errors\Result<StartUserImportJobResponse>>;
  public function StopUserImportJob(StopUserImportJobRequest $in): Awaitable<\Errors\Result<StopUserImportJobResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateAuthEventFeedback(UpdateAuthEventFeedbackRequest $in): Awaitable<\Errors\Result<UpdateAuthEventFeedbackResponse>>;
  public function UpdateDeviceStatus(UpdateDeviceStatusRequest $in): Awaitable<\Errors\Result<UpdateDeviceStatusResponse>>;
  public function UpdateGroup(UpdateGroupRequest $in): Awaitable<\Errors\Result<UpdateGroupResponse>>;
  public function UpdateIdentityProvider(UpdateIdentityProviderRequest $in): Awaitable<\Errors\Result<UpdateIdentityProviderResponse>>;
  public function UpdateResourceServer(UpdateResourceServerRequest $in): Awaitable<\Errors\Result<UpdateResourceServerResponse>>;
  public function UpdateUserAttributes(UpdateUserAttributesRequest $in): Awaitable<\Errors\Result<UpdateUserAttributesResponse>>;
  public function UpdateUserPool(UpdateUserPoolRequest $in): Awaitable<\Errors\Result<UpdateUserPoolResponse>>;
  public function UpdateUserPoolClient(UpdateUserPoolClientRequest $in): Awaitable<\Errors\Result<UpdateUserPoolClientResponse>>;
  public function UpdateUserPoolDomain(UpdateUserPoolDomainRequest $in): Awaitable<\Errors\Result<UpdateUserPoolDomainResponse>>;
  public function VerifySoftwareToken(VerifySoftwareTokenRequest $in): Awaitable<\Errors\Result<VerifySoftwareTokenResponse>>;
  public function VerifyUserAttribute(VerifyUserAttributeRequest $in): Awaitable<\Errors\Result<VerifyUserAttributeResponse>>;
}

type AWSAccountIdType = string;

class AccountRecoverySettingType {
  public ?RecoveryMechanismsType $recovery_mechanisms;

  public function __construct(shape(
    ?'recovery_mechanisms' => ?RecoveryMechanismsType,
  ) $s = shape()) {
    $this->recovery_mechanisms = $s['recovery_mechanisms'] ?? vec[];
  }
}

type AccountTakeoverActionNotifyType = bool;

class AccountTakeoverActionType {
  public ?AccountTakeoverEventActionType $event_action;
  public ?AccountTakeoverActionNotifyType $notify;

  public function __construct(shape(
    ?'event_action' => ?AccountTakeoverEventActionType,
    ?'notify' => ?AccountTakeoverActionNotifyType,
  ) $s = shape()) {
    $this->event_action = $s['event_action'] ?? '';
    $this->notify = $s['notify'] ?? false;
  }
}

class AccountTakeoverActionsType {
  public ?AccountTakeoverActionType $high_action;
  public ?AccountTakeoverActionType $low_action;
  public ?AccountTakeoverActionType $medium_action;

  public function __construct(shape(
    ?'high_action' => ?AccountTakeoverActionType,
    ?'low_action' => ?AccountTakeoverActionType,
    ?'medium_action' => ?AccountTakeoverActionType,
  ) $s = shape()) {
    $this->high_action = $s['high_action'] ?? null;
    $this->low_action = $s['low_action'] ?? null;
    $this->medium_action = $s['medium_action'] ?? null;
  }
}

type AccountTakeoverEventActionType = string;

class AccountTakeoverRiskConfigurationType {
  public ?AccountTakeoverActionsType $actions;
  public ?NotifyConfigurationType $notify_configuration;

  public function __construct(shape(
    ?'actions' => ?AccountTakeoverActionsType,
    ?'notify_configuration' => ?NotifyConfigurationType,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? null;
    $this->notify_configuration = $s['notify_configuration'] ?? null;
  }
}

class AddCustomAttributesRequest {
  public ?CustomAttributesListType $custom_attributes;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'custom_attributes' => ?CustomAttributesListType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->custom_attributes = $s['custom_attributes'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class AddCustomAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminAddUserToGroupRequest {
  public ?GroupNameType $group_name;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'group_name' => ?GroupNameType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminConfirmSignUpRequest {
  public ?ClientMetadataType $client_metadata;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'client_metadata' => ?ClientMetadataType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminConfirmSignUpResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminCreateUserConfigType {
  public ?BooleanType $allow_admin_create_user_only;
  public ?MessageTemplateType $invite_message_template;
  public ?AdminCreateUserUnusedAccountValidityDaysType $unused_account_validity_days;

  public function __construct(shape(
    ?'allow_admin_create_user_only' => ?BooleanType,
    ?'invite_message_template' => ?MessageTemplateType,
    ?'unused_account_validity_days' => ?AdminCreateUserUnusedAccountValidityDaysType,
  ) $s = shape()) {
    $this->allow_admin_create_user_only = $s['allow_admin_create_user_only'] ?? false;
    $this->invite_message_template = $s['invite_message_template'] ?? null;
    $this->unused_account_validity_days = $s['unused_account_validity_days'] ?? 0;
  }
}

class AdminCreateUserRequest {
  public ?ClientMetadataType $client_metadata;
  public ?DeliveryMediumListType $desired_delivery_mediums;
  public ?ForceAliasCreation $force_alias_creation;
  public ?MessageActionType $message_action;
  public ?PasswordType $temporary_password;
  public ?AttributeListType $user_attributes;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;
  public ?AttributeListType $validation_data;

  public function __construct(shape(
    ?'client_metadata' => ?ClientMetadataType,
    ?'desired_delivery_mediums' => ?DeliveryMediumListType,
    ?'force_alias_creation' => ?ForceAliasCreation,
    ?'message_action' => ?MessageActionType,
    ?'temporary_password' => ?PasswordType,
    ?'user_attributes' => ?AttributeListType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
    ?'validation_data' => ?AttributeListType,
  ) $s = shape()) {
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->desired_delivery_mediums = $s['desired_delivery_mediums'] ?? vec[];
    $this->force_alias_creation = $s['force_alias_creation'] ?? false;
    $this->message_action = $s['message_action'] ?? '';
    $this->temporary_password = $s['temporary_password'] ?? '';
    $this->user_attributes = $s['user_attributes'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
    $this->validation_data = $s['validation_data'] ?? vec[];
  }
}

class AdminCreateUserResponse {
  public ?UserType $user;

  public function __construct(shape(
    ?'user' => ?UserType,
  ) $s = shape()) {
    $this->user = $s['user'] ?? null;
  }
}

type AdminCreateUserUnusedAccountValidityDaysType = int;

class AdminDeleteUserAttributesRequest {
  public ?AttributeNameListType $user_attribute_names;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'user_attribute_names' => ?AttributeNameListType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->user_attribute_names = $s['user_attribute_names'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminDeleteUserAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminDeleteUserRequest {
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminDisableProviderForUserRequest {
  public ?ProviderUserIdentifierType $user;
  public ?StringType $user_pool_id;

  public function __construct(shape(
    ?'user' => ?ProviderUserIdentifierType,
    ?'user_pool_id' => ?StringType,
  ) $s = shape()) {
    $this->user = $s['user'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class AdminDisableProviderForUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminDisableUserRequest {
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminDisableUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminEnableUserRequest {
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminEnableUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminForgetDeviceRequest {
  public ?DeviceKeyType $device_key;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'device_key' => ?DeviceKeyType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->device_key = $s['device_key'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminGetDeviceRequest {
  public ?DeviceKeyType $device_key;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'device_key' => ?DeviceKeyType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->device_key = $s['device_key'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminGetDeviceResponse {
  public ?DeviceType $device;

  public function __construct(shape(
    ?'device' => ?DeviceType,
  ) $s = shape()) {
    $this->device = $s['device'] ?? null;
  }
}

class AdminGetUserRequest {
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminGetUserResponse {
  public ?BooleanType $enabled;
  public ?MFAOptionListType $mfa_options;
  public ?StringType $preferred_mfa_setting;
  public ?AttributeListType $user_attributes;
  public ?DateType $user_create_date;
  public ?DateType $user_last_modified_date;
  public ?UserMFASettingListType $user_mfa_setting_list;
  public ?UserStatusType $user_status;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'enabled' => ?BooleanType,
    ?'mfa_options' => ?MFAOptionListType,
    ?'preferred_mfa_setting' => ?StringType,
    ?'user_attributes' => ?AttributeListType,
    ?'user_create_date' => ?DateType,
    ?'user_last_modified_date' => ?DateType,
    ?'user_mfa_setting_list' => ?UserMFASettingListType,
    ?'user_status' => ?UserStatusType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->mfa_options = $s['mfa_options'] ?? vec[];
    $this->preferred_mfa_setting = $s['preferred_mfa_setting'] ?? '';
    $this->user_attributes = $s['user_attributes'] ?? vec[];
    $this->user_create_date = $s['user_create_date'] ?? 0;
    $this->user_last_modified_date = $s['user_last_modified_date'] ?? 0;
    $this->user_mfa_setting_list = $s['user_mfa_setting_list'] ?? vec[];
    $this->user_status = $s['user_status'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminInitiateAuthRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?AuthFlowType $auth_flow;
  public ?AuthParametersType $auth_parameters;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?ContextDataType $context_data;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'auth_flow' => ?AuthFlowType,
    ?'auth_parameters' => ?AuthParametersType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'context_data' => ?ContextDataType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->auth_flow = $s['auth_flow'] ?? '';
    $this->auth_parameters = $s['auth_parameters'] ?? dict[];
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->context_data = $s['context_data'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class AdminInitiateAuthResponse {
  public ?AuthenticationResultType $authentication_result;
  public ?ChallengeNameType $challenge_name;
  public ?ChallengeParametersType $challenge_parameters;
  public ?SessionType $session;

  public function __construct(shape(
    ?'authentication_result' => ?AuthenticationResultType,
    ?'challenge_name' => ?ChallengeNameType,
    ?'challenge_parameters' => ?ChallengeParametersType,
    ?'session' => ?SessionType,
  ) $s = shape()) {
    $this->authentication_result = $s['authentication_result'] ?? null;
    $this->challenge_name = $s['challenge_name'] ?? '';
    $this->challenge_parameters = $s['challenge_parameters'] ?? dict[];
    $this->session = $s['session'] ?? '';
  }
}

class AdminLinkProviderForUserRequest {
  public ?ProviderUserIdentifierType $destination_user;
  public ?ProviderUserIdentifierType $source_user;
  public ?StringType $user_pool_id;

  public function __construct(shape(
    ?'destination_user' => ?ProviderUserIdentifierType,
    ?'source_user' => ?ProviderUserIdentifierType,
    ?'user_pool_id' => ?StringType,
  ) $s = shape()) {
    $this->destination_user = $s['destination_user'] ?? null;
    $this->source_user = $s['source_user'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class AdminLinkProviderForUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminListDevicesRequest {
  public ?QueryLimitType $limit;
  public ?SearchPaginationTokenType $pagination_token;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'limit' => ?QueryLimitType,
    ?'pagination_token' => ?SearchPaginationTokenType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->pagination_token = $s['pagination_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminListDevicesResponse {
  public ?DeviceListType $devices;
  public ?SearchPaginationTokenType $pagination_token;

  public function __construct(shape(
    ?'devices' => ?DeviceListType,
    ?'pagination_token' => ?SearchPaginationTokenType,
  ) $s = shape()) {
    $this->devices = $s['devices'] ?? vec[];
    $this->pagination_token = $s['pagination_token'] ?? '';
  }
}

class AdminListGroupsForUserRequest {
  public ?QueryLimitType $limit;
  public ?PaginationKey $next_token;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'limit' => ?QueryLimitType,
    ?'next_token' => ?PaginationKey,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminListGroupsForUserResponse {
  public ?GroupListType $groups;
  public ?PaginationKey $next_token;

  public function __construct(shape(
    ?'groups' => ?GroupListType,
    ?'next_token' => ?PaginationKey,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class AdminListUserAuthEventsRequest {
  public ?QueryLimitType $max_results;
  public ?PaginationKey $next_token;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'max_results' => ?QueryLimitType,
    ?'next_token' => ?PaginationKey,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminListUserAuthEventsResponse {
  public ?AuthEventsType $auth_events;
  public ?PaginationKey $next_token;

  public function __construct(shape(
    ?'auth_events' => ?AuthEventsType,
    ?'next_token' => ?PaginationKey,
  ) $s = shape()) {
    $this->auth_events = $s['auth_events'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class AdminRemoveUserFromGroupRequest {
  public ?GroupNameType $group_name;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'group_name' => ?GroupNameType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminResetUserPasswordRequest {
  public ?ClientMetadataType $client_metadata;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'client_metadata' => ?ClientMetadataType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminResetUserPasswordResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminRespondToAuthChallengeRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?ChallengeNameType $challenge_name;
  public ?ChallengeResponsesType $challenge_responses;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?ContextDataType $context_data;
  public ?SessionType $session;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'challenge_name' => ?ChallengeNameType,
    ?'challenge_responses' => ?ChallengeResponsesType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'context_data' => ?ContextDataType,
    ?'session' => ?SessionType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->challenge_name = $s['challenge_name'] ?? '';
    $this->challenge_responses = $s['challenge_responses'] ?? dict[];
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->context_data = $s['context_data'] ?? null;
    $this->session = $s['session'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class AdminRespondToAuthChallengeResponse {
  public ?AuthenticationResultType $authentication_result;
  public ?ChallengeNameType $challenge_name;
  public ?ChallengeParametersType $challenge_parameters;
  public ?SessionType $session;

  public function __construct(shape(
    ?'authentication_result' => ?AuthenticationResultType,
    ?'challenge_name' => ?ChallengeNameType,
    ?'challenge_parameters' => ?ChallengeParametersType,
    ?'session' => ?SessionType,
  ) $s = shape()) {
    $this->authentication_result = $s['authentication_result'] ?? null;
    $this->challenge_name = $s['challenge_name'] ?? '';
    $this->challenge_parameters = $s['challenge_parameters'] ?? dict[];
    $this->session = $s['session'] ?? '';
  }
}

class AdminSetUserMFAPreferenceRequest {
  public ?SMSMfaSettingsType $sms_mfa_settings;
  public ?SoftwareTokenMfaSettingsType $software_token_mfa_settings;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'sms_mfa_settings' => ?SMSMfaSettingsType,
    ?'software_token_mfa_settings' => ?SoftwareTokenMfaSettingsType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->sms_mfa_settings = $s['sms_mfa_settings'] ?? null;
    $this->software_token_mfa_settings = $s['software_token_mfa_settings'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminSetUserMFAPreferenceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminSetUserPasswordRequest {
  public ?PasswordType $password;
  public ?BooleanType $permanent;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'password' => ?PasswordType,
    ?'permanent' => ?BooleanType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->password = $s['password'] ?? '';
    $this->permanent = $s['permanent'] ?? false;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminSetUserPasswordResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminSetUserSettingsRequest {
  public ?MFAOptionListType $mfa_options;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'mfa_options' => ?MFAOptionListType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->mfa_options = $s['mfa_options'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminSetUserSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminUpdateAuthEventFeedbackRequest {
  public ?EventIdType $event_id;
  public ?FeedbackValueType $feedback_value;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'event_id' => ?EventIdType,
    ?'feedback_value' => ?FeedbackValueType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->event_id = $s['event_id'] ?? '';
    $this->feedback_value = $s['feedback_value'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminUpdateAuthEventFeedbackResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminUpdateDeviceStatusRequest {
  public ?DeviceKeyType $device_key;
  public ?DeviceRememberedStatusType $device_remembered_status;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'device_key' => ?DeviceKeyType,
    ?'device_remembered_status' => ?DeviceRememberedStatusType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->device_key = $s['device_key'] ?? '';
    $this->device_remembered_status = $s['device_remembered_status'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminUpdateDeviceStatusResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminUpdateUserAttributesRequest {
  public ?ClientMetadataType $client_metadata;
  public ?AttributeListType $user_attributes;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'client_metadata' => ?ClientMetadataType,
    ?'user_attributes' => ?AttributeListType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->user_attributes = $s['user_attributes'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminUpdateUserAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AdminUserGlobalSignOutRequest {
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class AdminUserGlobalSignOutResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type AdvancedSecurityModeType = string;

type AliasAttributeType = string;

type AliasAttributesListType = vec<AliasAttributeType>;

class AliasExistsException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class AnalyticsConfigurationType {
  public ?HexStringType $application_id;
  public ?StringType $external_id;
  public ?ArnType $role_arn;
  public ?BooleanType $user_data_shared;

  public function __construct(shape(
    ?'application_id' => ?HexStringType,
    ?'external_id' => ?StringType,
    ?'role_arn' => ?ArnType,
    ?'user_data_shared' => ?BooleanType,
  ) $s = shape()) {
    $this->application_id = $s['application_id'] ?? '';
    $this->external_id = $s['external_id'] ?? '';
    $this->role_arn = $s['role_arn'] ?? '';
    $this->user_data_shared = $s['user_data_shared'] ?? false;
  }
}

class AnalyticsMetadataType {
  public ?StringType $analytics_endpoint_id;

  public function __construct(shape(
    ?'analytics_endpoint_id' => ?StringType,
  ) $s = shape()) {
    $this->analytics_endpoint_id = $s['analytics_endpoint_id'] ?? '';
  }
}

type ArnType = string;

class AssociateSoftwareTokenRequest {
  public ?TokenModelType $access_token;
  public ?SessionType $session;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'session' => ?SessionType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->session = $s['session'] ?? '';
  }
}

class AssociateSoftwareTokenResponse {
  public ?SecretCodeType $secret_code;
  public ?SessionType $session;

  public function __construct(shape(
    ?'secret_code' => ?SecretCodeType,
    ?'session' => ?SessionType,
  ) $s = shape()) {
    $this->secret_code = $s['secret_code'] ?? '';
    $this->session = $s['session'] ?? '';
  }
}

type AttributeDataType = string;

type AttributeListType = vec<AttributeType>;

type AttributeMappingKeyType = string;

type AttributeMappingType = dict<AttributeMappingKeyType, StringType>;

type AttributeNameListType = vec<AttributeNameType>;

type AttributeNameType = string;

class AttributeType {
  public ?AttributeNameType $name;
  public ?AttributeValueType $value;

  public function __construct(shape(
    ?'name' => ?AttributeNameType,
    ?'value' => ?AttributeValueType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type AttributeValueType = string;

class AuthEventType {
  public ?ChallengeResponseListType $challenge_responses;
  public ?DateType $creation_date;
  public ?EventContextDataType $event_context_data;
  public ?EventFeedbackType $event_feedback;
  public ?StringType $event_id;
  public ?EventResponseType $event_response;
  public ?EventRiskType $event_risk;
  public ?EventType $event_type;

  public function __construct(shape(
    ?'challenge_responses' => ?ChallengeResponseListType,
    ?'creation_date' => ?DateType,
    ?'event_context_data' => ?EventContextDataType,
    ?'event_feedback' => ?EventFeedbackType,
    ?'event_id' => ?StringType,
    ?'event_response' => ?EventResponseType,
    ?'event_risk' => ?EventRiskType,
    ?'event_type' => ?EventType,
  ) $s = shape()) {
    $this->challenge_responses = $s['challenge_responses'] ?? vec[];
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->event_context_data = $s['event_context_data'] ?? null;
    $this->event_feedback = $s['event_feedback'] ?? null;
    $this->event_id = $s['event_id'] ?? '';
    $this->event_response = $s['event_response'] ?? '';
    $this->event_risk = $s['event_risk'] ?? null;
    $this->event_type = $s['event_type'] ?? '';
  }
}

type AuthEventsType = vec<AuthEventType>;

type AuthFlowType = string;

type AuthParametersType = dict<StringType, AuthParametersValueType>;

type AuthParametersValueType = string;

class AuthenticationResultType {
  public ?TokenModelType $access_token;
  public ?IntegerType $expires_in;
  public ?TokenModelType $id_token;
  public ?NewDeviceMetadataType $new_device_metadata;
  public ?TokenModelType $refresh_token;
  public ?StringType $token_type;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'expires_in' => ?IntegerType,
    ?'id_token' => ?TokenModelType,
    ?'new_device_metadata' => ?NewDeviceMetadataType,
    ?'refresh_token' => ?TokenModelType,
    ?'token_type' => ?StringType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->expires_in = $s['expires_in'] ?? 0;
    $this->id_token = $s['id_token'] ?? '';
    $this->new_device_metadata = $s['new_device_metadata'] ?? null;
    $this->refresh_token = $s['refresh_token'] ?? '';
    $this->token_type = $s['token_type'] ?? '';
  }
}

type BlockedIPRangeListType = vec<StringType>;

type BooleanType = bool;

type CSSType = string;

type CSSVersionType = string;

type CallbackURLsListType = vec<RedirectUrlType>;

type ChallengeName = string;

type ChallengeNameType = string;

type ChallengeParametersType = dict<StringType, StringType>;

type ChallengeResponse = string;

type ChallengeResponseListType = vec<ChallengeResponseType>;

class ChallengeResponseType {
  public ?ChallengeName $challenge_name;
  public ?ChallengeResponse $challenge_response;

  public function __construct(shape(
    ?'challenge_name' => ?ChallengeName,
    ?'challenge_response' => ?ChallengeResponse,
  ) $s = shape()) {
    $this->challenge_name = $s['challenge_name'] ?? '';
    $this->challenge_response = $s['challenge_response'] ?? '';
  }
}

type ChallengeResponsesType = dict<StringType, StringType>;

class ChangePasswordRequest {
  public ?TokenModelType $access_token;
  public ?PasswordType $previous_password;
  public ?PasswordType $proposed_password;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'previous_password' => ?PasswordType,
    ?'proposed_password' => ?PasswordType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->previous_password = $s['previous_password'] ?? '';
    $this->proposed_password = $s['proposed_password'] ?? '';
  }
}

class ChangePasswordResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ClientIdType = string;

type ClientMetadataType = dict<StringType, StringType>;

type ClientNameType = string;

type ClientPermissionListType = vec<ClientPermissionType>;

type ClientPermissionType = string;

type ClientSecretType = string;

type CodeDeliveryDetailsListType = vec<CodeDeliveryDetailsType>;

class CodeDeliveryDetailsType {
  public ?AttributeNameType $attribute_name;
  public ?DeliveryMediumType $delivery_medium;
  public ?StringType $destination;

  public function __construct(shape(
    ?'attribute_name' => ?AttributeNameType,
    ?'delivery_medium' => ?DeliveryMediumType,
    ?'destination' => ?StringType,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->delivery_medium = $s['delivery_medium'] ?? '';
    $this->destination = $s['destination'] ?? '';
  }
}

class CodeDeliveryFailureException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CodeMismatchException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type CompletionMessageType = string;

class CompromisedCredentialsActionsType {
  public ?CompromisedCredentialsEventActionType $event_action;

  public function __construct(shape(
    ?'event_action' => ?CompromisedCredentialsEventActionType,
  ) $s = shape()) {
    $this->event_action = $s['event_action'] ?? '';
  }
}

type CompromisedCredentialsEventActionType = string;

class CompromisedCredentialsRiskConfigurationType {
  public ?CompromisedCredentialsActionsType $actions;
  public ?EventFiltersType $event_filter;

  public function __construct(shape(
    ?'actions' => ?CompromisedCredentialsActionsType,
    ?'event_filter' => ?EventFiltersType,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? null;
    $this->event_filter = $s['event_filter'] ?? vec[];
  }
}

class ConcurrentModificationException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ConfirmDeviceRequest {
  public ?TokenModelType $access_token;
  public ?DeviceKeyType $device_key;
  public ?DeviceNameType $device_name;
  public ?DeviceSecretVerifierConfigType $device_secret_verifier_config;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'device_key' => ?DeviceKeyType,
    ?'device_name' => ?DeviceNameType,
    ?'device_secret_verifier_config' => ?DeviceSecretVerifierConfigType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->device_key = $s['device_key'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->device_secret_verifier_config = $s['device_secret_verifier_config'] ?? null;
  }
}

class ConfirmDeviceResponse {
  public ?BooleanType $user_confirmation_necessary;

  public function __construct(shape(
    ?'user_confirmation_necessary' => ?BooleanType,
  ) $s = shape()) {
    $this->user_confirmation_necessary = $s['user_confirmation_necessary'] ?? false;
  }
}

class ConfirmForgotPasswordRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?ConfirmationCodeType $confirmation_code;
  public ?PasswordType $password;
  public ?SecretHashType $secret_hash;
  public ?UserContextDataType $user_context_data;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'confirmation_code' => ?ConfirmationCodeType,
    ?'password' => ?PasswordType,
    ?'secret_hash' => ?SecretHashType,
    ?'user_context_data' => ?UserContextDataType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->confirmation_code = $s['confirmation_code'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->secret_hash = $s['secret_hash'] ?? '';
    $this->user_context_data = $s['user_context_data'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class ConfirmForgotPasswordResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ConfirmSignUpRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?ConfirmationCodeType $confirmation_code;
  public ?ForceAliasCreation $force_alias_creation;
  public ?SecretHashType $secret_hash;
  public ?UserContextDataType $user_context_data;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'confirmation_code' => ?ConfirmationCodeType,
    ?'force_alias_creation' => ?ForceAliasCreation,
    ?'secret_hash' => ?SecretHashType,
    ?'user_context_data' => ?UserContextDataType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->confirmation_code = $s['confirmation_code'] ?? '';
    $this->force_alias_creation = $s['force_alias_creation'] ?? false;
    $this->secret_hash = $s['secret_hash'] ?? '';
    $this->user_context_data = $s['user_context_data'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class ConfirmSignUpResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ConfirmationCodeType = string;

class ContextDataType {
  public ?StringType $encoded_data;
  public ?HttpHeaderList $http_headers;
  public ?StringType $ip_address;
  public ?StringType $server_name;
  public ?StringType $server_path;

  public function __construct(shape(
    ?'encoded_data' => ?StringType,
    ?'http_headers' => ?HttpHeaderList,
    ?'ip_address' => ?StringType,
    ?'server_name' => ?StringType,
    ?'server_path' => ?StringType,
  ) $s = shape()) {
    $this->encoded_data = $s['encoded_data'] ?? '';
    $this->http_headers = $s['http_headers'] ?? vec[];
    $this->ip_address = $s['ip_address'] ?? '';
    $this->server_name = $s['server_name'] ?? '';
    $this->server_path = $s['server_path'] ?? '';
  }
}

class CreateGroupRequest {
  public ?DescriptionType $description;
  public ?GroupNameType $group_name;
  public ?PrecedenceType $precedence;
  public ?ArnType $role_arn;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'description' => ?DescriptionType,
    ?'group_name' => ?GroupNameType,
    ?'precedence' => ?PrecedenceType,
    ?'role_arn' => ?ArnType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->precedence = $s['precedence'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class CreateGroupResponse {
  public ?GroupType $group;

  public function __construct(shape(
    ?'group' => ?GroupType,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
  }
}

class CreateIdentityProviderRequest {
  public ?AttributeMappingType $attribute_mapping;
  public ?IdpIdentifiersListType $idp_identifiers;
  public ?ProviderDetailsType $provider_details;
  public ?ProviderNameTypeV1 $provider_name;
  public ?IdentityProviderTypeType $provider_type;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'attribute_mapping' => ?AttributeMappingType,
    ?'idp_identifiers' => ?IdpIdentifiersListType,
    ?'provider_details' => ?ProviderDetailsType,
    ?'provider_name' => ?ProviderNameTypeV1,
    ?'provider_type' => ?IdentityProviderTypeType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->attribute_mapping = $s['attribute_mapping'] ?? dict[];
    $this->idp_identifiers = $s['idp_identifiers'] ?? vec[];
    $this->provider_details = $s['provider_details'] ?? dict[];
    $this->provider_name = $s['provider_name'] ?? '';
    $this->provider_type = $s['provider_type'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class CreateIdentityProviderResponse {
  public ?IdentityProviderType $identity_provider;

  public function __construct(shape(
    ?'identity_provider' => ?IdentityProviderType,
  ) $s = shape()) {
    $this->identity_provider = $s['identity_provider'] ?? null;
  }
}

class CreateResourceServerRequest {
  public ?ResourceServerIdentifierType $identifier;
  public ?ResourceServerNameType $name;
  public ?ResourceServerScopeListType $scopes;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'identifier' => ?ResourceServerIdentifierType,
    ?'name' => ?ResourceServerNameType,
    ?'scopes' => ?ResourceServerScopeListType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->identifier = $s['identifier'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->scopes = $s['scopes'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class CreateResourceServerResponse {
  public ?ResourceServerType $resource_server;

  public function __construct(shape(
    ?'resource_server' => ?ResourceServerType,
  ) $s = shape()) {
    $this->resource_server = $s['resource_server'] ?? null;
  }
}

class CreateUserImportJobRequest {
  public ?ArnType $cloud_watch_logs_role_arn;
  public ?UserImportJobNameType $job_name;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'cloud_watch_logs_role_arn' => ?ArnType,
    ?'job_name' => ?UserImportJobNameType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->cloud_watch_logs_role_arn = $s['cloud_watch_logs_role_arn'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class CreateUserImportJobResponse {
  public ?UserImportJobType $user_import_job;

  public function __construct(shape(
    ?'user_import_job' => ?UserImportJobType,
  ) $s = shape()) {
    $this->user_import_job = $s['user_import_job'] ?? null;
  }
}

class CreateUserPoolClientRequest {
  public ?OAuthFlowsType $allowed_o_auth_flows;
  public ?BooleanType $allowed_o_auth_flows_user_pool_client;
  public ?ScopeListType $allowed_o_auth_scopes;
  public ?AnalyticsConfigurationType $analytics_configuration;
  public ?CallbackURLsListType $callback_ur_ls;
  public ?ClientNameType $client_name;
  public ?RedirectUrlType $default_redirect_uri;
  public ?ExplicitAuthFlowsListType $explicit_auth_flows;
  public ?GenerateSecret $generate_secret;
  public ?LogoutURLsListType $logout_ur_ls;
  public ?PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public ?ClientPermissionListType $read_attributes;
  public ?RefreshTokenValidityType $refresh_token_validity;
  public ?SupportedIdentityProvidersListType $supported_identity_providers;
  public ?UserPoolIdType $user_pool_id;
  public ?ClientPermissionListType $write_attributes;

  public function __construct(shape(
    ?'allowed_o_auth_flows' => ?OAuthFlowsType,
    ?'allowed_o_auth_flows_user_pool_client' => ?BooleanType,
    ?'allowed_o_auth_scopes' => ?ScopeListType,
    ?'analytics_configuration' => ?AnalyticsConfigurationType,
    ?'callback_ur_ls' => ?CallbackURLsListType,
    ?'client_name' => ?ClientNameType,
    ?'default_redirect_uri' => ?RedirectUrlType,
    ?'explicit_auth_flows' => ?ExplicitAuthFlowsListType,
    ?'generate_secret' => ?GenerateSecret,
    ?'logout_ur_ls' => ?LogoutURLsListType,
    ?'prevent_user_existence_errors' => ?PreventUserExistenceErrorTypes,
    ?'read_attributes' => ?ClientPermissionListType,
    ?'refresh_token_validity' => ?RefreshTokenValidityType,
    ?'supported_identity_providers' => ?SupportedIdentityProvidersListType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'write_attributes' => ?ClientPermissionListType,
  ) $s = shape()) {
    $this->allowed_o_auth_flows = $s['allowed_o_auth_flows'] ?? vec[];
    $this->allowed_o_auth_flows_user_pool_client = $s['allowed_o_auth_flows_user_pool_client'] ?? false;
    $this->allowed_o_auth_scopes = $s['allowed_o_auth_scopes'] ?? vec[];
    $this->analytics_configuration = $s['analytics_configuration'] ?? null;
    $this->callback_ur_ls = $s['callback_ur_ls'] ?? vec[];
    $this->client_name = $s['client_name'] ?? '';
    $this->default_redirect_uri = $s['default_redirect_uri'] ?? '';
    $this->explicit_auth_flows = $s['explicit_auth_flows'] ?? vec[];
    $this->generate_secret = $s['generate_secret'] ?? false;
    $this->logout_ur_ls = $s['logout_ur_ls'] ?? vec[];
    $this->prevent_user_existence_errors = $s['prevent_user_existence_errors'] ?? '';
    $this->read_attributes = $s['read_attributes'] ?? vec[];
    $this->refresh_token_validity = $s['refresh_token_validity'] ?? 0;
    $this->supported_identity_providers = $s['supported_identity_providers'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->write_attributes = $s['write_attributes'] ?? vec[];
  }
}

class CreateUserPoolClientResponse {
  public ?UserPoolClientType $user_pool_client;

  public function __construct(shape(
    ?'user_pool_client' => ?UserPoolClientType,
  ) $s = shape()) {
    $this->user_pool_client = $s['user_pool_client'] ?? null;
  }
}

class CreateUserPoolDomainRequest {
  public ?CustomDomainConfigType $custom_domain_config;
  public ?DomainType $domain;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'custom_domain_config' => ?CustomDomainConfigType,
    ?'domain' => ?DomainType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->custom_domain_config = $s['custom_domain_config'] ?? null;
    $this->domain = $s['domain'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class CreateUserPoolDomainResponse {
  public ?DomainType $cloud_front_domain;

  public function __construct(shape(
    ?'cloud_front_domain' => ?DomainType,
  ) $s = shape()) {
    $this->cloud_front_domain = $s['cloud_front_domain'] ?? '';
  }
}

class CreateUserPoolRequest {
  public ?AccountRecoverySettingType $account_recovery_setting;
  public ?AdminCreateUserConfigType $admin_create_user_config;
  public ?AliasAttributesListType $alias_attributes;
  public ?VerifiedAttributesListType $auto_verified_attributes;
  public ?DeviceConfigurationType $device_configuration;
  public ?EmailConfigurationType $email_configuration;
  public ?EmailVerificationMessageType $email_verification_message;
  public ?EmailVerificationSubjectType $email_verification_subject;
  public ?LambdaConfigType $lambda_config;
  public ?UserPoolMfaType $mfa_configuration;
  public ?UserPoolPolicyType $policies;
  public ?UserPoolNameType $pool_name;
  public ?SchemaAttributesListType $schema;
  public ?SmsVerificationMessageType $sms_authentication_message;
  public ?SmsConfigurationType $sms_configuration;
  public ?SmsVerificationMessageType $sms_verification_message;
  public ?UserPoolAddOnsType $user_pool_add_ons;
  public ?UserPoolTagsType $user_pool_tags;
  public ?UsernameAttributesListType $username_attributes;
  public ?UsernameConfigurationType $username_configuration;
  public ?VerificationMessageTemplateType $verification_message_template;

  public function __construct(shape(
    ?'account_recovery_setting' => ?AccountRecoverySettingType,
    ?'admin_create_user_config' => ?AdminCreateUserConfigType,
    ?'alias_attributes' => ?AliasAttributesListType,
    ?'auto_verified_attributes' => ?VerifiedAttributesListType,
    ?'device_configuration' => ?DeviceConfigurationType,
    ?'email_configuration' => ?EmailConfigurationType,
    ?'email_verification_message' => ?EmailVerificationMessageType,
    ?'email_verification_subject' => ?EmailVerificationSubjectType,
    ?'lambda_config' => ?LambdaConfigType,
    ?'mfa_configuration' => ?UserPoolMfaType,
    ?'policies' => ?UserPoolPolicyType,
    ?'pool_name' => ?UserPoolNameType,
    ?'schema' => ?SchemaAttributesListType,
    ?'sms_authentication_message' => ?SmsVerificationMessageType,
    ?'sms_configuration' => ?SmsConfigurationType,
    ?'sms_verification_message' => ?SmsVerificationMessageType,
    ?'user_pool_add_ons' => ?UserPoolAddOnsType,
    ?'user_pool_tags' => ?UserPoolTagsType,
    ?'username_attributes' => ?UsernameAttributesListType,
    ?'username_configuration' => ?UsernameConfigurationType,
    ?'verification_message_template' => ?VerificationMessageTemplateType,
  ) $s = shape()) {
    $this->account_recovery_setting = $s['account_recovery_setting'] ?? null;
    $this->admin_create_user_config = $s['admin_create_user_config'] ?? null;
    $this->alias_attributes = $s['alias_attributes'] ?? vec[];
    $this->auto_verified_attributes = $s['auto_verified_attributes'] ?? vec[];
    $this->device_configuration = $s['device_configuration'] ?? null;
    $this->email_configuration = $s['email_configuration'] ?? null;
    $this->email_verification_message = $s['email_verification_message'] ?? '';
    $this->email_verification_subject = $s['email_verification_subject'] ?? '';
    $this->lambda_config = $s['lambda_config'] ?? null;
    $this->mfa_configuration = $s['mfa_configuration'] ?? '';
    $this->policies = $s['policies'] ?? null;
    $this->pool_name = $s['pool_name'] ?? '';
    $this->schema = $s['schema'] ?? vec[];
    $this->sms_authentication_message = $s['sms_authentication_message'] ?? '';
    $this->sms_configuration = $s['sms_configuration'] ?? null;
    $this->sms_verification_message = $s['sms_verification_message'] ?? '';
    $this->user_pool_add_ons = $s['user_pool_add_ons'] ?? null;
    $this->user_pool_tags = $s['user_pool_tags'] ?? dict[];
    $this->username_attributes = $s['username_attributes'] ?? vec[];
    $this->username_configuration = $s['username_configuration'] ?? null;
    $this->verification_message_template = $s['verification_message_template'] ?? null;
  }
}

class CreateUserPoolResponse {
  public ?UserPoolType $user_pool;

  public function __construct(shape(
    ?'user_pool' => ?UserPoolType,
  ) $s = shape()) {
    $this->user_pool = $s['user_pool'] ?? null;
  }
}

type CustomAttributeNameType = string;

type CustomAttributesListType = vec<SchemaAttributeType>;

class CustomDomainConfigType {
  public ?ArnType $certificate_arn;

  public function __construct(shape(
    ?'certificate_arn' => ?ArnType,
  ) $s = shape()) {
    $this->certificate_arn = $s['certificate_arn'] ?? '';
  }
}

type DateType = int;

type DefaultEmailOptionType = string;

class DeleteGroupRequest {
  public ?GroupNameType $group_name;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'group_name' => ?GroupNameType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DeleteIdentityProviderRequest {
  public ?ProviderNameType $provider_name;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'provider_name' => ?ProviderNameType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->provider_name = $s['provider_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DeleteResourceServerRequest {
  public ?ResourceServerIdentifierType $identifier;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'identifier' => ?ResourceServerIdentifierType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->identifier = $s['identifier'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DeleteUserAttributesRequest {
  public ?TokenModelType $access_token;
  public ?AttributeNameListType $user_attribute_names;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'user_attribute_names' => ?AttributeNameListType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->user_attribute_names = $s['user_attribute_names'] ?? vec[];
  }
}

class DeleteUserAttributesResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUserPoolClientRequest {
  public ?ClientIdType $client_id;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'client_id' => ?ClientIdType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DeleteUserPoolDomainRequest {
  public ?DomainType $domain;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'domain' => ?DomainType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DeleteUserPoolDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUserPoolRequest {
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DeleteUserRequest {
  public ?TokenModelType $access_token;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
  }
}

type DeliveryMediumListType = vec<DeliveryMediumType>;

type DeliveryMediumType = string;

class DescribeIdentityProviderRequest {
  public ?ProviderNameType $provider_name;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'provider_name' => ?ProviderNameType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->provider_name = $s['provider_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DescribeIdentityProviderResponse {
  public ?IdentityProviderType $identity_provider;

  public function __construct(shape(
    ?'identity_provider' => ?IdentityProviderType,
  ) $s = shape()) {
    $this->identity_provider = $s['identity_provider'] ?? null;
  }
}

class DescribeResourceServerRequest {
  public ?ResourceServerIdentifierType $identifier;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'identifier' => ?ResourceServerIdentifierType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->identifier = $s['identifier'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DescribeResourceServerResponse {
  public ?ResourceServerType $resource_server;

  public function __construct(shape(
    ?'resource_server' => ?ResourceServerType,
  ) $s = shape()) {
    $this->resource_server = $s['resource_server'] ?? null;
  }
}

class DescribeRiskConfigurationRequest {
  public ?ClientIdType $client_id;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'client_id' => ?ClientIdType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DescribeRiskConfigurationResponse {
  public ?RiskConfigurationType $risk_configuration;

  public function __construct(shape(
    ?'risk_configuration' => ?RiskConfigurationType,
  ) $s = shape()) {
    $this->risk_configuration = $s['risk_configuration'] ?? null;
  }
}

class DescribeUserImportJobRequest {
  public ?UserImportJobIdType $job_id;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'job_id' => ?UserImportJobIdType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DescribeUserImportJobResponse {
  public ?UserImportJobType $user_import_job;

  public function __construct(shape(
    ?'user_import_job' => ?UserImportJobType,
  ) $s = shape()) {
    $this->user_import_job = $s['user_import_job'] ?? null;
  }
}

class DescribeUserPoolClientRequest {
  public ?ClientIdType $client_id;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'client_id' => ?ClientIdType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DescribeUserPoolClientResponse {
  public ?UserPoolClientType $user_pool_client;

  public function __construct(shape(
    ?'user_pool_client' => ?UserPoolClientType,
  ) $s = shape()) {
    $this->user_pool_client = $s['user_pool_client'] ?? null;
  }
}

class DescribeUserPoolDomainRequest {
  public ?DomainType $domain;

  public function __construct(shape(
    ?'domain' => ?DomainType,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? '';
  }
}

class DescribeUserPoolDomainResponse {
  public ?DomainDescriptionType $domain_description;

  public function __construct(shape(
    ?'domain_description' => ?DomainDescriptionType,
  ) $s = shape()) {
    $this->domain_description = $s['domain_description'] ?? null;
  }
}

class DescribeUserPoolRequest {
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class DescribeUserPoolResponse {
  public ?UserPoolType $user_pool;

  public function __construct(shape(
    ?'user_pool' => ?UserPoolType,
  ) $s = shape()) {
    $this->user_pool = $s['user_pool'] ?? null;
  }
}

type DescriptionType = string;

class DeviceConfigurationType {
  public ?BooleanType $challenge_required_on_new_device;
  public ?BooleanType $device_only_remembered_on_user_prompt;

  public function __construct(shape(
    ?'challenge_required_on_new_device' => ?BooleanType,
    ?'device_only_remembered_on_user_prompt' => ?BooleanType,
  ) $s = shape()) {
    $this->challenge_required_on_new_device = $s['challenge_required_on_new_device'] ?? false;
    $this->device_only_remembered_on_user_prompt = $s['device_only_remembered_on_user_prompt'] ?? false;
  }
}

type DeviceKeyType = string;

type DeviceListType = vec<DeviceType>;

type DeviceNameType = string;

type DeviceRememberedStatusType = string;

class DeviceSecretVerifierConfigType {
  public ?StringType $password_verifier;
  public ?StringType $salt;

  public function __construct(shape(
    ?'password_verifier' => ?StringType,
    ?'salt' => ?StringType,
  ) $s = shape()) {
    $this->password_verifier = $s['password_verifier'] ?? '';
    $this->salt = $s['salt'] ?? '';
  }
}

class DeviceType {
  public ?AttributeListType $device_attributes;
  public ?DateType $device_create_date;
  public ?DeviceKeyType $device_key;
  public ?DateType $device_last_authenticated_date;
  public ?DateType $device_last_modified_date;

  public function __construct(shape(
    ?'device_attributes' => ?AttributeListType,
    ?'device_create_date' => ?DateType,
    ?'device_key' => ?DeviceKeyType,
    ?'device_last_authenticated_date' => ?DateType,
    ?'device_last_modified_date' => ?DateType,
  ) $s = shape()) {
    $this->device_attributes = $s['device_attributes'] ?? vec[];
    $this->device_create_date = $s['device_create_date'] ?? 0;
    $this->device_key = $s['device_key'] ?? '';
    $this->device_last_authenticated_date = $s['device_last_authenticated_date'] ?? 0;
    $this->device_last_modified_date = $s['device_last_modified_date'] ?? 0;
  }
}

class DomainDescriptionType {
  public ?AWSAccountIdType $aws_account_id;
  public ?StringType $cloud_front_distribution;
  public ?CustomDomainConfigType $custom_domain_config;
  public ?DomainType $domain;
  public ?S3BucketType $s_3_bucket;
  public ?DomainStatusType $status;
  public ?UserPoolIdType $user_pool_id;
  public ?DomainVersionType $version;

  public function __construct(shape(
    ?'aws_account_id' => ?AWSAccountIdType,
    ?'cloud_front_distribution' => ?StringType,
    ?'custom_domain_config' => ?CustomDomainConfigType,
    ?'domain' => ?DomainType,
    ?'s_3_bucket' => ?S3BucketType,
    ?'status' => ?DomainStatusType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'version' => ?DomainVersionType,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->cloud_front_distribution = $s['cloud_front_distribution'] ?? '';
    $this->custom_domain_config = $s['custom_domain_config'] ?? null;
    $this->domain = $s['domain'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type DomainStatusType = string;

type DomainType = string;

type DomainVersionType = string;

class DuplicateProviderException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type EmailAddressType = string;

class EmailConfigurationType {
  public ?SESConfigurationSet $configuration_set;
  public ?EmailSendingAccountType $email_sending_account;
  public ?StringType $from;
  public ?EmailAddressType $reply_to_email_address;
  public ?ArnType $source_arn;

  public function __construct(shape(
    ?'configuration_set' => ?SESConfigurationSet,
    ?'email_sending_account' => ?EmailSendingAccountType,
    ?'from' => ?StringType,
    ?'reply_to_email_address' => ?EmailAddressType,
    ?'source_arn' => ?ArnType,
  ) $s = shape()) {
    $this->configuration_set = $s['configuration_set'] ?? '';
    $this->email_sending_account = $s['email_sending_account'] ?? '';
    $this->from = $s['from'] ?? '';
    $this->reply_to_email_address = $s['reply_to_email_address'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
  }
}

type EmailNotificationBodyType = string;

type EmailNotificationSubjectType = string;

type EmailSendingAccountType = string;

type EmailVerificationMessageByLinkType = string;

type EmailVerificationMessageType = string;

type EmailVerificationSubjectByLinkType = string;

type EmailVerificationSubjectType = string;

class EnableSoftwareTokenMFAException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class EventContextDataType {
  public ?StringType $city;
  public ?StringType $country;
  public ?StringType $device_name;
  public ?StringType $ip_address;
  public ?StringType $timezone;

  public function __construct(shape(
    ?'city' => ?StringType,
    ?'country' => ?StringType,
    ?'device_name' => ?StringType,
    ?'ip_address' => ?StringType,
    ?'timezone' => ?StringType,
  ) $s = shape()) {
    $this->city = $s['city'] ?? '';
    $this->country = $s['country'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->timezone = $s['timezone'] ?? '';
  }
}

class EventFeedbackType {
  public ?DateType $feedback_date;
  public ?FeedbackValueType $feedback_value;
  public ?StringType $provider;

  public function __construct(shape(
    ?'feedback_date' => ?DateType,
    ?'feedback_value' => ?FeedbackValueType,
    ?'provider' => ?StringType,
  ) $s = shape()) {
    $this->feedback_date = $s['feedback_date'] ?? 0;
    $this->feedback_value = $s['feedback_value'] ?? '';
    $this->provider = $s['provider'] ?? '';
  }
}

type EventFilterType = string;

type EventFiltersType = vec<EventFilterType>;

type EventIdType = string;

type EventResponseType = string;

class EventRiskType {
  public ?WrappedBooleanType $compromised_credentials_detected;
  public ?RiskDecisionType $risk_decision;
  public ?RiskLevelType $risk_level;

  public function __construct(shape(
    ?'compromised_credentials_detected' => ?WrappedBooleanType,
    ?'risk_decision' => ?RiskDecisionType,
    ?'risk_level' => ?RiskLevelType,
  ) $s = shape()) {
    $this->compromised_credentials_detected = $s['compromised_credentials_detected'] ?? false;
    $this->risk_decision = $s['risk_decision'] ?? '';
    $this->risk_level = $s['risk_level'] ?? '';
  }
}

type EventType = string;

class ExpiredCodeException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ExplicitAuthFlowsListType = vec<ExplicitAuthFlowsType>;

type ExplicitAuthFlowsType = string;

type FeedbackValueType = string;

type ForceAliasCreation = bool;

class ForgetDeviceRequest {
  public ?TokenModelType $access_token;
  public ?DeviceKeyType $device_key;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'device_key' => ?DeviceKeyType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->device_key = $s['device_key'] ?? '';
  }
}

class ForgotPasswordRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?SecretHashType $secret_hash;
  public ?UserContextDataType $user_context_data;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'secret_hash' => ?SecretHashType,
    ?'user_context_data' => ?UserContextDataType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->secret_hash = $s['secret_hash'] ?? '';
    $this->user_context_data = $s['user_context_data'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class ForgotPasswordResponse {
  public ?CodeDeliveryDetailsType $code_delivery_details;

  public function __construct(shape(
    ?'code_delivery_details' => ?CodeDeliveryDetailsType,
  ) $s = shape()) {
    $this->code_delivery_details = $s['code_delivery_details'] ?? null;
  }
}

type GenerateSecret = bool;

class GetCSVHeaderRequest {
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class GetCSVHeaderResponse {
  public ?ListOfStringTypes $csv_header;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'csv_header' => ?ListOfStringTypes,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->csv_header = $s['csv_header'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class GetDeviceRequest {
  public ?TokenModelType $access_token;
  public ?DeviceKeyType $device_key;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'device_key' => ?DeviceKeyType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->device_key = $s['device_key'] ?? '';
  }
}

class GetDeviceResponse {
  public ?DeviceType $device;

  public function __construct(shape(
    ?'device' => ?DeviceType,
  ) $s = shape()) {
    $this->device = $s['device'] ?? null;
  }
}

class GetGroupRequest {
  public ?GroupNameType $group_name;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'group_name' => ?GroupNameType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class GetGroupResponse {
  public ?GroupType $group;

  public function __construct(shape(
    ?'group' => ?GroupType,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
  }
}

class GetIdentityProviderByIdentifierRequest {
  public ?IdpIdentifierType $idp_identifier;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'idp_identifier' => ?IdpIdentifierType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->idp_identifier = $s['idp_identifier'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class GetIdentityProviderByIdentifierResponse {
  public ?IdentityProviderType $identity_provider;

  public function __construct(shape(
    ?'identity_provider' => ?IdentityProviderType,
  ) $s = shape()) {
    $this->identity_provider = $s['identity_provider'] ?? null;
  }
}

class GetSigningCertificateRequest {
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class GetSigningCertificateResponse {
  public ?StringType $certificate;

  public function __construct(shape(
    ?'certificate' => ?StringType,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
  }
}

class GetUICustomizationRequest {
  public ?ClientIdType $client_id;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'client_id' => ?ClientIdType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class GetUICustomizationResponse {
  public ?UICustomizationType $ui_customization;

  public function __construct(shape(
    ?'ui_customization' => ?UICustomizationType,
  ) $s = shape()) {
    $this->ui_customization = $s['ui_customization'] ?? null;
  }
}

class GetUserAttributeVerificationCodeRequest {
  public ?TokenModelType $access_token;
  public ?AttributeNameType $attribute_name;
  public ?ClientMetadataType $client_metadata;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'attribute_name' => ?AttributeNameType,
    ?'client_metadata' => ?ClientMetadataType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
  }
}

class GetUserAttributeVerificationCodeResponse {
  public ?CodeDeliveryDetailsType $code_delivery_details;

  public function __construct(shape(
    ?'code_delivery_details' => ?CodeDeliveryDetailsType,
  ) $s = shape()) {
    $this->code_delivery_details = $s['code_delivery_details'] ?? null;
  }
}

class GetUserPoolMfaConfigRequest {
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class GetUserPoolMfaConfigResponse {
  public ?UserPoolMfaType $mfa_configuration;
  public ?SmsMfaConfigType $sms_mfa_configuration;
  public ?SoftwareTokenMfaConfigType $software_token_mfa_configuration;

  public function __construct(shape(
    ?'mfa_configuration' => ?UserPoolMfaType,
    ?'sms_mfa_configuration' => ?SmsMfaConfigType,
    ?'software_token_mfa_configuration' => ?SoftwareTokenMfaConfigType,
  ) $s = shape()) {
    $this->mfa_configuration = $s['mfa_configuration'] ?? '';
    $this->sms_mfa_configuration = $s['sms_mfa_configuration'] ?? null;
    $this->software_token_mfa_configuration = $s['software_token_mfa_configuration'] ?? null;
  }
}

class GetUserRequest {
  public ?TokenModelType $access_token;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
  }
}

class GetUserResponse {
  public ?MFAOptionListType $mfa_options;
  public ?StringType $preferred_mfa_setting;
  public ?AttributeListType $user_attributes;
  public ?UserMFASettingListType $user_mfa_setting_list;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'mfa_options' => ?MFAOptionListType,
    ?'preferred_mfa_setting' => ?StringType,
    ?'user_attributes' => ?AttributeListType,
    ?'user_mfa_setting_list' => ?UserMFASettingListType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->mfa_options = $s['mfa_options'] ?? vec[];
    $this->preferred_mfa_setting = $s['preferred_mfa_setting'] ?? '';
    $this->user_attributes = $s['user_attributes'] ?? vec[];
    $this->user_mfa_setting_list = $s['user_mfa_setting_list'] ?? vec[];
    $this->username = $s['username'] ?? '';
  }
}

class GlobalSignOutRequest {
  public ?TokenModelType $access_token;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
  }
}

class GlobalSignOutResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GroupExistsException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type GroupListType = vec<GroupType>;

type GroupNameType = string;

class GroupType {
  public ?DateType $creation_date;
  public ?DescriptionType $description;
  public ?GroupNameType $group_name;
  public ?DateType $last_modified_date;
  public ?PrecedenceType $precedence;
  public ?ArnType $role_arn;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'creation_date' => ?DateType,
    ?'description' => ?DescriptionType,
    ?'group_name' => ?GroupNameType,
    ?'last_modified_date' => ?DateType,
    ?'precedence' => ?PrecedenceType,
    ?'role_arn' => ?ArnType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->precedence = $s['precedence'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

type HexStringType = string;

class HttpHeader {
  public ?StringType $header_name;
  public ?StringType $header_value;

  public function __construct(shape(
    ?'header_name' => ?StringType,
    ?'header_value' => ?StringType,
  ) $s = shape()) {
    $this->header_name = $s['header_name'] ?? '';
    $this->header_value = $s['header_value'] ?? '';
  }
}

type HttpHeaderList = vec<HttpHeader>;

class IdentityProviderType {
  public ?AttributeMappingType $attribute_mapping;
  public ?DateType $creation_date;
  public ?IdpIdentifiersListType $idp_identifiers;
  public ?DateType $last_modified_date;
  public ?ProviderDetailsType $provider_details;
  public ?ProviderNameType $provider_name;
  public ?IdentityProviderTypeType $provider_type;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'attribute_mapping' => ?AttributeMappingType,
    ?'creation_date' => ?DateType,
    ?'idp_identifiers' => ?IdpIdentifiersListType,
    ?'last_modified_date' => ?DateType,
    ?'provider_details' => ?ProviderDetailsType,
    ?'provider_name' => ?ProviderNameType,
    ?'provider_type' => ?IdentityProviderTypeType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->attribute_mapping = $s['attribute_mapping'] ?? dict[];
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->idp_identifiers = $s['idp_identifiers'] ?? vec[];
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->provider_details = $s['provider_details'] ?? dict[];
    $this->provider_name = $s['provider_name'] ?? '';
    $this->provider_type = $s['provider_type'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

type IdentityProviderTypeType = string;

type IdpIdentifierType = string;

type IdpIdentifiersListType = vec<IdpIdentifierType>;

type ImageFileType = string;

type ImageUrlType = string;

class InitiateAuthRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?AuthFlowType $auth_flow;
  public ?AuthParametersType $auth_parameters;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?UserContextDataType $user_context_data;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'auth_flow' => ?AuthFlowType,
    ?'auth_parameters' => ?AuthParametersType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'user_context_data' => ?UserContextDataType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->auth_flow = $s['auth_flow'] ?? '';
    $this->auth_parameters = $s['auth_parameters'] ?? dict[];
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->user_context_data = $s['user_context_data'] ?? null;
  }
}

class InitiateAuthResponse {
  public ?AuthenticationResultType $authentication_result;
  public ?ChallengeNameType $challenge_name;
  public ?ChallengeParametersType $challenge_parameters;
  public ?SessionType $session;

  public function __construct(shape(
    ?'authentication_result' => ?AuthenticationResultType,
    ?'challenge_name' => ?ChallengeNameType,
    ?'challenge_parameters' => ?ChallengeParametersType,
    ?'session' => ?SessionType,
  ) $s = shape()) {
    $this->authentication_result = $s['authentication_result'] ?? null;
    $this->challenge_name = $s['challenge_name'] ?? '';
    $this->challenge_parameters = $s['challenge_parameters'] ?? dict[];
    $this->session = $s['session'] ?? '';
  }
}

type IntegerType = int;

class InternalErrorException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidEmailRoleAccessPolicyException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidLambdaResponseException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidOAuthFlowException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPasswordException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSmsRoleAccessPolicyException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidSmsRoleTrustRelationshipException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidUserPoolConfigurationException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LambdaConfigType {
  public ?ArnType $create_auth_challenge;
  public ?ArnType $custom_message;
  public ?ArnType $define_auth_challenge;
  public ?ArnType $post_authentication;
  public ?ArnType $post_confirmation;
  public ?ArnType $pre_authentication;
  public ?ArnType $pre_sign_up;
  public ?ArnType $pre_token_generation;
  public ?ArnType $user_migration;
  public ?ArnType $verify_auth_challenge_response;

  public function __construct(shape(
    ?'create_auth_challenge' => ?ArnType,
    ?'custom_message' => ?ArnType,
    ?'define_auth_challenge' => ?ArnType,
    ?'post_authentication' => ?ArnType,
    ?'post_confirmation' => ?ArnType,
    ?'pre_authentication' => ?ArnType,
    ?'pre_sign_up' => ?ArnType,
    ?'pre_token_generation' => ?ArnType,
    ?'user_migration' => ?ArnType,
    ?'verify_auth_challenge_response' => ?ArnType,
  ) $s = shape()) {
    $this->create_auth_challenge = $s['create_auth_challenge'] ?? '';
    $this->custom_message = $s['custom_message'] ?? '';
    $this->define_auth_challenge = $s['define_auth_challenge'] ?? '';
    $this->post_authentication = $s['post_authentication'] ?? '';
    $this->post_confirmation = $s['post_confirmation'] ?? '';
    $this->pre_authentication = $s['pre_authentication'] ?? '';
    $this->pre_sign_up = $s['pre_sign_up'] ?? '';
    $this->pre_token_generation = $s['pre_token_generation'] ?? '';
    $this->user_migration = $s['user_migration'] ?? '';
    $this->verify_auth_challenge_response = $s['verify_auth_challenge_response'] ?? '';
  }
}

class LimitExceededException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListDevicesRequest {
  public ?TokenModelType $access_token;
  public ?QueryLimitType $limit;
  public ?SearchPaginationTokenType $pagination_token;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'limit' => ?QueryLimitType,
    ?'pagination_token' => ?SearchPaginationTokenType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->pagination_token = $s['pagination_token'] ?? '';
  }
}

class ListDevicesResponse {
  public ?DeviceListType $devices;
  public ?SearchPaginationTokenType $pagination_token;

  public function __construct(shape(
    ?'devices' => ?DeviceListType,
    ?'pagination_token' => ?SearchPaginationTokenType,
  ) $s = shape()) {
    $this->devices = $s['devices'] ?? vec[];
    $this->pagination_token = $s['pagination_token'] ?? '';
  }
}

class ListGroupsRequest {
  public ?QueryLimitType $limit;
  public ?PaginationKey $next_token;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'limit' => ?QueryLimitType,
    ?'next_token' => ?PaginationKey,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class ListGroupsResponse {
  public ?GroupListType $groups;
  public ?PaginationKey $next_token;

  public function __construct(shape(
    ?'groups' => ?GroupListType,
    ?'next_token' => ?PaginationKey,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListIdentityProvidersRequest {
  public ?ListProvidersLimitType $max_results;
  public ?PaginationKeyType $next_token;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'max_results' => ?ListProvidersLimitType,
    ?'next_token' => ?PaginationKeyType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class ListIdentityProvidersResponse {
  public ?PaginationKeyType $next_token;
  public ?ProvidersListType $providers;

  public function __construct(shape(
    ?'next_token' => ?PaginationKeyType,
    ?'providers' => ?ProvidersListType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->providers = $s['providers'] ?? vec[];
  }
}

type ListOfStringTypes = vec<StringType>;

type ListProvidersLimitType = int;

type ListResourceServersLimitType = int;

class ListResourceServersRequest {
  public ?ListResourceServersLimitType $max_results;
  public ?PaginationKeyType $next_token;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'max_results' => ?ListResourceServersLimitType,
    ?'next_token' => ?PaginationKeyType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class ListResourceServersResponse {
  public ?PaginationKeyType $next_token;
  public ?ResourceServersListType $resource_servers;

  public function __construct(shape(
    ?'next_token' => ?PaginationKeyType,
    ?'resource_servers' => ?ResourceServersListType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_servers = $s['resource_servers'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?ArnType $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ArnType,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?UserPoolTagsType $tags;

  public function __construct(shape(
    ?'tags' => ?UserPoolTagsType,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ListUserImportJobsRequest {
  public ?PoolQueryLimitType $max_results;
  public ?PaginationKeyType $pagination_token;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'max_results' => ?PoolQueryLimitType,
    ?'pagination_token' => ?PaginationKeyType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->pagination_token = $s['pagination_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class ListUserImportJobsResponse {
  public ?PaginationKeyType $pagination_token;
  public ?UserImportJobsListType $user_import_jobs;

  public function __construct(shape(
    ?'pagination_token' => ?PaginationKeyType,
    ?'user_import_jobs' => ?UserImportJobsListType,
  ) $s = shape()) {
    $this->pagination_token = $s['pagination_token'] ?? '';
    $this->user_import_jobs = $s['user_import_jobs'] ?? vec[];
  }
}

class ListUserPoolClientsRequest {
  public ?QueryLimit $max_results;
  public ?PaginationKey $next_token;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'max_results' => ?QueryLimit,
    ?'next_token' => ?PaginationKey,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class ListUserPoolClientsResponse {
  public ?PaginationKey $next_token;
  public ?UserPoolClientListType $user_pool_clients;

  public function __construct(shape(
    ?'next_token' => ?PaginationKey,
    ?'user_pool_clients' => ?UserPoolClientListType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_clients = $s['user_pool_clients'] ?? vec[];
  }
}

class ListUserPoolsRequest {
  public ?PoolQueryLimitType $max_results;
  public ?PaginationKeyType $next_token;

  public function __construct(shape(
    ?'max_results' => ?PoolQueryLimitType,
    ?'next_token' => ?PaginationKeyType,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListUserPoolsResponse {
  public ?PaginationKeyType $next_token;
  public ?UserPoolListType $user_pools;

  public function __construct(shape(
    ?'next_token' => ?PaginationKeyType,
    ?'user_pools' => ?UserPoolListType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pools = $s['user_pools'] ?? vec[];
  }
}

class ListUsersInGroupRequest {
  public ?GroupNameType $group_name;
  public ?QueryLimitType $limit;
  public ?PaginationKey $next_token;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'group_name' => ?GroupNameType,
    ?'limit' => ?QueryLimitType,
    ?'next_token' => ?PaginationKey,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class ListUsersInGroupResponse {
  public ?PaginationKey $next_token;
  public ?UsersListType $users;

  public function __construct(shape(
    ?'next_token' => ?PaginationKey,
    ?'users' => ?UsersListType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->users = $s['users'] ?? vec[];
  }
}

class ListUsersRequest {
  public ?SearchedAttributeNamesListType $attributes_to_get;
  public ?UserFilterType $filter;
  public ?QueryLimitType $limit;
  public ?SearchPaginationTokenType $pagination_token;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'attributes_to_get' => ?SearchedAttributeNamesListType,
    ?'filter' => ?UserFilterType,
    ?'limit' => ?QueryLimitType,
    ?'pagination_token' => ?SearchPaginationTokenType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->attributes_to_get = $s['attributes_to_get'] ?? vec[];
    $this->filter = $s['filter'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->pagination_token = $s['pagination_token'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class ListUsersResponse {
  public ?SearchPaginationTokenType $pagination_token;
  public ?UsersListType $users;

  public function __construct(shape(
    ?'pagination_token' => ?SearchPaginationTokenType,
    ?'users' => ?UsersListType,
  ) $s = shape()) {
    $this->pagination_token = $s['pagination_token'] ?? '';
    $this->users = $s['users'] ?? vec[];
  }
}

type LogoutURLsListType = vec<RedirectUrlType>;

type LongType = int;

class MFAMethodNotFoundException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type MFAOptionListType = vec<MFAOptionType>;

class MFAOptionType {
  public ?AttributeNameType $attribute_name;
  public ?DeliveryMediumType $delivery_medium;

  public function __construct(shape(
    ?'attribute_name' => ?AttributeNameType,
    ?'delivery_medium' => ?DeliveryMediumType,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->delivery_medium = $s['delivery_medium'] ?? '';
  }
}

type MessageActionType = string;

class MessageTemplateType {
  public ?EmailVerificationMessageType $email_message;
  public ?EmailVerificationSubjectType $email_subject;
  public ?SmsVerificationMessageType $sms_message;

  public function __construct(shape(
    ?'email_message' => ?EmailVerificationMessageType,
    ?'email_subject' => ?EmailVerificationSubjectType,
    ?'sms_message' => ?SmsVerificationMessageType,
  ) $s = shape()) {
    $this->email_message = $s['email_message'] ?? '';
    $this->email_subject = $s['email_subject'] ?? '';
    $this->sms_message = $s['sms_message'] ?? '';
  }
}

type MessageType = string;

class NewDeviceMetadataType {
  public ?StringType $device_group_key;
  public ?DeviceKeyType $device_key;

  public function __construct(shape(
    ?'device_group_key' => ?StringType,
    ?'device_key' => ?DeviceKeyType,
  ) $s = shape()) {
    $this->device_group_key = $s['device_group_key'] ?? '';
    $this->device_key = $s['device_key'] ?? '';
  }
}

class NotAuthorizedException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NotifyConfigurationType {
  public ?NotifyEmailType $block_email;
  public ?StringType $from;
  public ?NotifyEmailType $mfa_email;
  public ?NotifyEmailType $no_action_email;
  public ?StringType $reply_to;
  public ?ArnType $source_arn;

  public function __construct(shape(
    ?'block_email' => ?NotifyEmailType,
    ?'from' => ?StringType,
    ?'mfa_email' => ?NotifyEmailType,
    ?'no_action_email' => ?NotifyEmailType,
    ?'reply_to' => ?StringType,
    ?'source_arn' => ?ArnType,
  ) $s = shape()) {
    $this->block_email = $s['block_email'] ?? null;
    $this->from = $s['from'] ?? '';
    $this->mfa_email = $s['mfa_email'] ?? null;
    $this->no_action_email = $s['no_action_email'] ?? null;
    $this->reply_to = $s['reply_to'] ?? '';
    $this->source_arn = $s['source_arn'] ?? '';
  }
}

class NotifyEmailType {
  public ?EmailNotificationBodyType $html_body;
  public ?EmailNotificationSubjectType $subject;
  public ?EmailNotificationBodyType $text_body;

  public function __construct(shape(
    ?'html_body' => ?EmailNotificationBodyType,
    ?'subject' => ?EmailNotificationSubjectType,
    ?'text_body' => ?EmailNotificationBodyType,
  ) $s = shape()) {
    $this->html_body = $s['html_body'] ?? '';
    $this->subject = $s['subject'] ?? '';
    $this->text_body = $s['text_body'] ?? '';
  }
}

class NumberAttributeConstraintsType {
  public ?StringType $max_value;
  public ?StringType $min_value;

  public function __construct(shape(
    ?'max_value' => ?StringType,
    ?'min_value' => ?StringType,
  ) $s = shape()) {
    $this->max_value = $s['max_value'] ?? '';
    $this->min_value = $s['min_value'] ?? '';
  }
}

type OAuthFlowType = string;

type OAuthFlowsType = vec<OAuthFlowType>;

type PaginationKey = string;

type PaginationKeyType = string;

type PasswordPolicyMinLengthType = int;

class PasswordPolicyType {
  public ?PasswordPolicyMinLengthType $minimum_length;
  public ?BooleanType $require_lowercase;
  public ?BooleanType $require_numbers;
  public ?BooleanType $require_symbols;
  public ?BooleanType $require_uppercase;
  public ?TemporaryPasswordValidityDaysType $temporary_password_validity_days;

  public function __construct(shape(
    ?'minimum_length' => ?PasswordPolicyMinLengthType,
    ?'require_lowercase' => ?BooleanType,
    ?'require_numbers' => ?BooleanType,
    ?'require_symbols' => ?BooleanType,
    ?'require_uppercase' => ?BooleanType,
    ?'temporary_password_validity_days' => ?TemporaryPasswordValidityDaysType,
  ) $s = shape()) {
    $this->minimum_length = $s['minimum_length'] ?? 0;
    $this->require_lowercase = $s['require_lowercase'] ?? false;
    $this->require_numbers = $s['require_numbers'] ?? false;
    $this->require_symbols = $s['require_symbols'] ?? false;
    $this->require_uppercase = $s['require_uppercase'] ?? false;
    $this->temporary_password_validity_days = $s['temporary_password_validity_days'] ?? 0;
  }
}

class PasswordResetRequiredException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PasswordType = string;

type PoolQueryLimitType = int;

type PreSignedUrlType = string;

type PrecedenceType = int;

class PreconditionNotMetException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PreventUserExistenceErrorTypes = string;

type PriorityType = int;

class ProviderDescription {
  public ?DateType $creation_date;
  public ?DateType $last_modified_date;
  public ?ProviderNameType $provider_name;
  public ?IdentityProviderTypeType $provider_type;

  public function __construct(shape(
    ?'creation_date' => ?DateType,
    ?'last_modified_date' => ?DateType,
    ?'provider_name' => ?ProviderNameType,
    ?'provider_type' => ?IdentityProviderTypeType,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->provider_name = $s['provider_name'] ?? '';
    $this->provider_type = $s['provider_type'] ?? '';
  }
}

type ProviderDetailsType = dict<StringType, StringType>;

type ProviderNameType = string;

type ProviderNameTypeV1 = string;

class ProviderUserIdentifierType {
  public ?StringType $provider_attribute_name;
  public ?StringType $provider_attribute_value;
  public ?ProviderNameType $provider_name;

  public function __construct(shape(
    ?'provider_attribute_name' => ?StringType,
    ?'provider_attribute_value' => ?StringType,
    ?'provider_name' => ?ProviderNameType,
  ) $s = shape()) {
    $this->provider_attribute_name = $s['provider_attribute_name'] ?? '';
    $this->provider_attribute_value = $s['provider_attribute_value'] ?? '';
    $this->provider_name = $s['provider_name'] ?? '';
  }
}

type ProvidersListType = vec<ProviderDescription>;

type QueryLimit = int;

type QueryLimitType = int;

type RecoveryMechanismsType = vec<RecoveryOptionType>;

type RecoveryOptionNameType = string;

class RecoveryOptionType {
  public ?RecoveryOptionNameType $name;
  public ?PriorityType $priority;

  public function __construct(shape(
    ?'name' => ?RecoveryOptionNameType,
    ?'priority' => ?PriorityType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->priority = $s['priority'] ?? 0;
  }
}

type RedirectUrlType = string;

type RefreshTokenValidityType = int;

class ResendConfirmationCodeRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?SecretHashType $secret_hash;
  public ?UserContextDataType $user_context_data;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'secret_hash' => ?SecretHashType,
    ?'user_context_data' => ?UserContextDataType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->secret_hash = $s['secret_hash'] ?? '';
    $this->user_context_data = $s['user_context_data'] ?? null;
    $this->username = $s['username'] ?? '';
  }
}

class ResendConfirmationCodeResponse {
  public ?CodeDeliveryDetailsType $code_delivery_details;

  public function __construct(shape(
    ?'code_delivery_details' => ?CodeDeliveryDetailsType,
  ) $s = shape()) {
    $this->code_delivery_details = $s['code_delivery_details'] ?? null;
  }
}

class ResourceNotFoundException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceServerIdentifierType = string;

type ResourceServerNameType = string;

type ResourceServerScopeDescriptionType = string;

type ResourceServerScopeListType = vec<ResourceServerScopeType>;

type ResourceServerScopeNameType = string;

class ResourceServerScopeType {
  public ?ResourceServerScopeDescriptionType $scope_description;
  public ?ResourceServerScopeNameType $scope_name;

  public function __construct(shape(
    ?'scope_description' => ?ResourceServerScopeDescriptionType,
    ?'scope_name' => ?ResourceServerScopeNameType,
  ) $s = shape()) {
    $this->scope_description = $s['scope_description'] ?? '';
    $this->scope_name = $s['scope_name'] ?? '';
  }
}

class ResourceServerType {
  public ?ResourceServerIdentifierType $identifier;
  public ?ResourceServerNameType $name;
  public ?ResourceServerScopeListType $scopes;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'identifier' => ?ResourceServerIdentifierType,
    ?'name' => ?ResourceServerNameType,
    ?'scopes' => ?ResourceServerScopeListType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->identifier = $s['identifier'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->scopes = $s['scopes'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

type ResourceServersListType = vec<ResourceServerType>;

class RespondToAuthChallengeRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?ChallengeNameType $challenge_name;
  public ?ChallengeResponsesType $challenge_responses;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?SessionType $session;
  public ?UserContextDataType $user_context_data;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'challenge_name' => ?ChallengeNameType,
    ?'challenge_responses' => ?ChallengeResponsesType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'session' => ?SessionType,
    ?'user_context_data' => ?UserContextDataType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->challenge_name = $s['challenge_name'] ?? '';
    $this->challenge_responses = $s['challenge_responses'] ?? dict[];
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->session = $s['session'] ?? '';
    $this->user_context_data = $s['user_context_data'] ?? null;
  }
}

class RespondToAuthChallengeResponse {
  public ?AuthenticationResultType $authentication_result;
  public ?ChallengeNameType $challenge_name;
  public ?ChallengeParametersType $challenge_parameters;
  public ?SessionType $session;

  public function __construct(shape(
    ?'authentication_result' => ?AuthenticationResultType,
    ?'challenge_name' => ?ChallengeNameType,
    ?'challenge_parameters' => ?ChallengeParametersType,
    ?'session' => ?SessionType,
  ) $s = shape()) {
    $this->authentication_result = $s['authentication_result'] ?? null;
    $this->challenge_name = $s['challenge_name'] ?? '';
    $this->challenge_parameters = $s['challenge_parameters'] ?? dict[];
    $this->session = $s['session'] ?? '';
  }
}

class RiskConfigurationType {
  public ?AccountTakeoverRiskConfigurationType $account_takeover_risk_configuration;
  public ?ClientIdType $client_id;
  public ?CompromisedCredentialsRiskConfigurationType $compromised_credentials_risk_configuration;
  public ?DateType $last_modified_date;
  public ?RiskExceptionConfigurationType $risk_exception_configuration;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'account_takeover_risk_configuration' => ?AccountTakeoverRiskConfigurationType,
    ?'client_id' => ?ClientIdType,
    ?'compromised_credentials_risk_configuration' => ?CompromisedCredentialsRiskConfigurationType,
    ?'last_modified_date' => ?DateType,
    ?'risk_exception_configuration' => ?RiskExceptionConfigurationType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->account_takeover_risk_configuration = $s['account_takeover_risk_configuration'] ?? null;
    $this->client_id = $s['client_id'] ?? '';
    $this->compromised_credentials_risk_configuration = $s['compromised_credentials_risk_configuration'] ?? null;
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->risk_exception_configuration = $s['risk_exception_configuration'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

type RiskDecisionType = string;

class RiskExceptionConfigurationType {
  public ?BlockedIPRangeListType $blocked_ip_range_list;
  public ?SkippedIPRangeListType $skipped_ip_range_list;

  public function __construct(shape(
    ?'blocked_ip_range_list' => ?BlockedIPRangeListType,
    ?'skipped_ip_range_list' => ?SkippedIPRangeListType,
  ) $s = shape()) {
    $this->blocked_ip_range_list = $s['blocked_ip_range_list'] ?? vec[];
    $this->skipped_ip_range_list = $s['skipped_ip_range_list'] ?? vec[];
  }
}

type RiskLevelType = string;

type S3BucketType = string;

type SESConfigurationSet = string;

class SMSMfaSettingsType {
  public ?BooleanType $enabled;
  public ?BooleanType $preferred_mfa;

  public function __construct(shape(
    ?'enabled' => ?BooleanType,
    ?'preferred_mfa' => ?BooleanType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->preferred_mfa = $s['preferred_mfa'] ?? false;
  }
}

class SchemaAttributeType {
  public ?AttributeDataType $attribute_data_type;
  public ?BooleanType $developer_only_attribute;
  public ?BooleanType $mutable;
  public ?CustomAttributeNameType $name;
  public ?NumberAttributeConstraintsType $number_attribute_constraints;
  public ?BooleanType $required;
  public ?StringAttributeConstraintsType $string_attribute_constraints;

  public function __construct(shape(
    ?'attribute_data_type' => ?AttributeDataType,
    ?'developer_only_attribute' => ?BooleanType,
    ?'mutable' => ?BooleanType,
    ?'name' => ?CustomAttributeNameType,
    ?'number_attribute_constraints' => ?NumberAttributeConstraintsType,
    ?'required' => ?BooleanType,
    ?'string_attribute_constraints' => ?StringAttributeConstraintsType,
  ) $s = shape()) {
    $this->attribute_data_type = $s['attribute_data_type'] ?? '';
    $this->developer_only_attribute = $s['developer_only_attribute'] ?? false;
    $this->mutable = $s['mutable'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->number_attribute_constraints = $s['number_attribute_constraints'] ?? null;
    $this->required = $s['required'] ?? false;
    $this->string_attribute_constraints = $s['string_attribute_constraints'] ?? null;
  }
}

type SchemaAttributesListType = vec<SchemaAttributeType>;

class ScopeDoesNotExistException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ScopeListType = vec<ScopeType>;

type ScopeType = string;

type SearchPaginationTokenType = string;

type SearchedAttributeNamesListType = vec<AttributeNameType>;

type SecretCodeType = string;

type SecretHashType = string;

type SessionType = string;

class SetRiskConfigurationRequest {
  public ?AccountTakeoverRiskConfigurationType $account_takeover_risk_configuration;
  public ?ClientIdType $client_id;
  public ?CompromisedCredentialsRiskConfigurationType $compromised_credentials_risk_configuration;
  public ?RiskExceptionConfigurationType $risk_exception_configuration;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'account_takeover_risk_configuration' => ?AccountTakeoverRiskConfigurationType,
    ?'client_id' => ?ClientIdType,
    ?'compromised_credentials_risk_configuration' => ?CompromisedCredentialsRiskConfigurationType,
    ?'risk_exception_configuration' => ?RiskExceptionConfigurationType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->account_takeover_risk_configuration = $s['account_takeover_risk_configuration'] ?? null;
    $this->client_id = $s['client_id'] ?? '';
    $this->compromised_credentials_risk_configuration = $s['compromised_credentials_risk_configuration'] ?? null;
    $this->risk_exception_configuration = $s['risk_exception_configuration'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class SetRiskConfigurationResponse {
  public ?RiskConfigurationType $risk_configuration;

  public function __construct(shape(
    ?'risk_configuration' => ?RiskConfigurationType,
  ) $s = shape()) {
    $this->risk_configuration = $s['risk_configuration'] ?? null;
  }
}

class SetUICustomizationRequest {
  public ?CSSType $css;
  public ?ClientIdType $client_id;
  public ?ImageFileType $image_file;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'css' => ?CSSType,
    ?'client_id' => ?ClientIdType,
    ?'image_file' => ?ImageFileType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->css = $s['css'] ?? '';
    $this->client_id = $s['client_id'] ?? '';
    $this->image_file = $s['image_file'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class SetUICustomizationResponse {
  public ?UICustomizationType $ui_customization;

  public function __construct(shape(
    ?'ui_customization' => ?UICustomizationType,
  ) $s = shape()) {
    $this->ui_customization = $s['ui_customization'] ?? null;
  }
}

class SetUserMFAPreferenceRequest {
  public ?TokenModelType $access_token;
  public ?SMSMfaSettingsType $sms_mfa_settings;
  public ?SoftwareTokenMfaSettingsType $software_token_mfa_settings;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'sms_mfa_settings' => ?SMSMfaSettingsType,
    ?'software_token_mfa_settings' => ?SoftwareTokenMfaSettingsType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->sms_mfa_settings = $s['sms_mfa_settings'] ?? null;
    $this->software_token_mfa_settings = $s['software_token_mfa_settings'] ?? null;
  }
}

class SetUserMFAPreferenceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SetUserPoolMfaConfigRequest {
  public ?UserPoolMfaType $mfa_configuration;
  public ?SmsMfaConfigType $sms_mfa_configuration;
  public ?SoftwareTokenMfaConfigType $software_token_mfa_configuration;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'mfa_configuration' => ?UserPoolMfaType,
    ?'sms_mfa_configuration' => ?SmsMfaConfigType,
    ?'software_token_mfa_configuration' => ?SoftwareTokenMfaConfigType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->mfa_configuration = $s['mfa_configuration'] ?? '';
    $this->sms_mfa_configuration = $s['sms_mfa_configuration'] ?? null;
    $this->software_token_mfa_configuration = $s['software_token_mfa_configuration'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class SetUserPoolMfaConfigResponse {
  public ?UserPoolMfaType $mfa_configuration;
  public ?SmsMfaConfigType $sms_mfa_configuration;
  public ?SoftwareTokenMfaConfigType $software_token_mfa_configuration;

  public function __construct(shape(
    ?'mfa_configuration' => ?UserPoolMfaType,
    ?'sms_mfa_configuration' => ?SmsMfaConfigType,
    ?'software_token_mfa_configuration' => ?SoftwareTokenMfaConfigType,
  ) $s = shape()) {
    $this->mfa_configuration = $s['mfa_configuration'] ?? '';
    $this->sms_mfa_configuration = $s['sms_mfa_configuration'] ?? null;
    $this->software_token_mfa_configuration = $s['software_token_mfa_configuration'] ?? null;
  }
}

class SetUserSettingsRequest {
  public ?TokenModelType $access_token;
  public ?MFAOptionListType $mfa_options;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'mfa_options' => ?MFAOptionListType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->mfa_options = $s['mfa_options'] ?? vec[];
  }
}

class SetUserSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SignUpRequest {
  public ?AnalyticsMetadataType $analytics_metadata;
  public ?ClientIdType $client_id;
  public ?ClientMetadataType $client_metadata;
  public ?PasswordType $password;
  public ?SecretHashType $secret_hash;
  public ?AttributeListType $user_attributes;
  public ?UserContextDataType $user_context_data;
  public ?UsernameType $username;
  public ?AttributeListType $validation_data;

  public function __construct(shape(
    ?'analytics_metadata' => ?AnalyticsMetadataType,
    ?'client_id' => ?ClientIdType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'password' => ?PasswordType,
    ?'secret_hash' => ?SecretHashType,
    ?'user_attributes' => ?AttributeListType,
    ?'user_context_data' => ?UserContextDataType,
    ?'username' => ?UsernameType,
    ?'validation_data' => ?AttributeListType,
  ) $s = shape()) {
    $this->analytics_metadata = $s['analytics_metadata'] ?? null;
    $this->client_id = $s['client_id'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->password = $s['password'] ?? '';
    $this->secret_hash = $s['secret_hash'] ?? '';
    $this->user_attributes = $s['user_attributes'] ?? vec[];
    $this->user_context_data = $s['user_context_data'] ?? null;
    $this->username = $s['username'] ?? '';
    $this->validation_data = $s['validation_data'] ?? vec[];
  }
}

class SignUpResponse {
  public ?CodeDeliveryDetailsType $code_delivery_details;
  public ?BooleanType $user_confirmed;
  public ?StringType $user_sub;

  public function __construct(shape(
    ?'code_delivery_details' => ?CodeDeliveryDetailsType,
    ?'user_confirmed' => ?BooleanType,
    ?'user_sub' => ?StringType,
  ) $s = shape()) {
    $this->code_delivery_details = $s['code_delivery_details'] ?? null;
    $this->user_confirmed = $s['user_confirmed'] ?? false;
    $this->user_sub = $s['user_sub'] ?? '';
  }
}

type SkippedIPRangeListType = vec<StringType>;

class SmsConfigurationType {
  public ?StringType $external_id;
  public ?ArnType $sns_caller_arn;

  public function __construct(shape(
    ?'external_id' => ?StringType,
    ?'sns_caller_arn' => ?ArnType,
  ) $s = shape()) {
    $this->external_id = $s['external_id'] ?? '';
    $this->sns_caller_arn = $s['sns_caller_arn'] ?? '';
  }
}

class SmsMfaConfigType {
  public ?SmsVerificationMessageType $sms_authentication_message;
  public ?SmsConfigurationType $sms_configuration;

  public function __construct(shape(
    ?'sms_authentication_message' => ?SmsVerificationMessageType,
    ?'sms_configuration' => ?SmsConfigurationType,
  ) $s = shape()) {
    $this->sms_authentication_message = $s['sms_authentication_message'] ?? '';
    $this->sms_configuration = $s['sms_configuration'] ?? null;
  }
}

type SmsVerificationMessageType = string;

class SoftwareTokenMFANotFoundException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type SoftwareTokenMFAUserCodeType = string;

class SoftwareTokenMfaConfigType {
  public ?BooleanType $enabled;

  public function __construct(shape(
    ?'enabled' => ?BooleanType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class SoftwareTokenMfaSettingsType {
  public ?BooleanType $enabled;
  public ?BooleanType $preferred_mfa;

  public function __construct(shape(
    ?'enabled' => ?BooleanType,
    ?'preferred_mfa' => ?BooleanType,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
    $this->preferred_mfa = $s['preferred_mfa'] ?? false;
  }
}

class StartUserImportJobRequest {
  public ?UserImportJobIdType $job_id;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'job_id' => ?UserImportJobIdType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class StartUserImportJobResponse {
  public ?UserImportJobType $user_import_job;

  public function __construct(shape(
    ?'user_import_job' => ?UserImportJobType,
  ) $s = shape()) {
    $this->user_import_job = $s['user_import_job'] ?? null;
  }
}

type StatusType = string;

class StopUserImportJobRequest {
  public ?UserImportJobIdType $job_id;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'job_id' => ?UserImportJobIdType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class StopUserImportJobResponse {
  public ?UserImportJobType $user_import_job;

  public function __construct(shape(
    ?'user_import_job' => ?UserImportJobType,
  ) $s = shape()) {
    $this->user_import_job = $s['user_import_job'] ?? null;
  }
}

class StringAttributeConstraintsType {
  public ?StringType $max_length;
  public ?StringType $min_length;

  public function __construct(shape(
    ?'max_length' => ?StringType,
    ?'min_length' => ?StringType,
  ) $s = shape()) {
    $this->max_length = $s['max_length'] ?? '';
    $this->min_length = $s['min_length'] ?? '';
  }
}

type StringType = string;

type SupportedIdentityProvidersListType = vec<ProviderNameType>;

type TagKeysType = string;

class TagResourceRequest {
  public ?ArnType $resource_arn;
  public ?UserPoolTagsType $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ArnType,
    ?'tags' => ?UserPoolTagsType,
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

type TagValueType = string;

type TemporaryPasswordValidityDaysType = int;

type TokenModelType = string;

class TooManyFailedAttemptsException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TooManyRequestsException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UICustomizationType {
  public ?CSSType $css;
  public ?CSSVersionType $css_version;
  public ?ClientIdType $client_id;
  public ?DateType $creation_date;
  public ?ImageUrlType $image_url;
  public ?DateType $last_modified_date;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'css' => ?CSSType,
    ?'css_version' => ?CSSVersionType,
    ?'client_id' => ?ClientIdType,
    ?'creation_date' => ?DateType,
    ?'image_url' => ?ImageUrlType,
    ?'last_modified_date' => ?DateType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->css = $s['css'] ?? '';
    $this->css_version = $s['css_version'] ?? '';
    $this->client_id = $s['client_id'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->image_url = $s['image_url'] ?? '';
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class UnexpectedLambdaException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnsupportedIdentityProviderException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnsupportedUserStateException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?ArnType $resource_arn;
  public ?UserPoolTagsListType $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ArnType,
    ?'tag_keys' => ?UserPoolTagsListType,
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

class UpdateAuthEventFeedbackRequest {
  public ?EventIdType $event_id;
  public ?TokenModelType $feedback_token;
  public ?FeedbackValueType $feedback_value;
  public ?UserPoolIdType $user_pool_id;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'event_id' => ?EventIdType,
    ?'feedback_token' => ?TokenModelType,
    ?'feedback_value' => ?FeedbackValueType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->event_id = $s['event_id'] ?? '';
    $this->feedback_token = $s['feedback_token'] ?? '';
    $this->feedback_value = $s['feedback_value'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class UpdateAuthEventFeedbackResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDeviceStatusRequest {
  public ?TokenModelType $access_token;
  public ?DeviceKeyType $device_key;
  public ?DeviceRememberedStatusType $device_remembered_status;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'device_key' => ?DeviceKeyType,
    ?'device_remembered_status' => ?DeviceRememberedStatusType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->device_key = $s['device_key'] ?? '';
    $this->device_remembered_status = $s['device_remembered_status'] ?? '';
  }
}

class UpdateDeviceStatusResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateGroupRequest {
  public ?DescriptionType $description;
  public ?GroupNameType $group_name;
  public ?PrecedenceType $precedence;
  public ?ArnType $role_arn;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'description' => ?DescriptionType,
    ?'group_name' => ?GroupNameType,
    ?'precedence' => ?PrecedenceType,
    ?'role_arn' => ?ArnType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->precedence = $s['precedence'] ?? 0;
    $this->role_arn = $s['role_arn'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class UpdateGroupResponse {
  public ?GroupType $group;

  public function __construct(shape(
    ?'group' => ?GroupType,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
  }
}

class UpdateIdentityProviderRequest {
  public ?AttributeMappingType $attribute_mapping;
  public ?IdpIdentifiersListType $idp_identifiers;
  public ?ProviderDetailsType $provider_details;
  public ?ProviderNameType $provider_name;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'attribute_mapping' => ?AttributeMappingType,
    ?'idp_identifiers' => ?IdpIdentifiersListType,
    ?'provider_details' => ?ProviderDetailsType,
    ?'provider_name' => ?ProviderNameType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->attribute_mapping = $s['attribute_mapping'] ?? dict[];
    $this->idp_identifiers = $s['idp_identifiers'] ?? vec[];
    $this->provider_details = $s['provider_details'] ?? dict[];
    $this->provider_name = $s['provider_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class UpdateIdentityProviderResponse {
  public ?IdentityProviderType $identity_provider;

  public function __construct(shape(
    ?'identity_provider' => ?IdentityProviderType,
  ) $s = shape()) {
    $this->identity_provider = $s['identity_provider'] ?? null;
  }
}

class UpdateResourceServerRequest {
  public ?ResourceServerIdentifierType $identifier;
  public ?ResourceServerNameType $name;
  public ?ResourceServerScopeListType $scopes;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'identifier' => ?ResourceServerIdentifierType,
    ?'name' => ?ResourceServerNameType,
    ?'scopes' => ?ResourceServerScopeListType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->identifier = $s['identifier'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->scopes = $s['scopes'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class UpdateResourceServerResponse {
  public ?ResourceServerType $resource_server;

  public function __construct(shape(
    ?'resource_server' => ?ResourceServerType,
  ) $s = shape()) {
    $this->resource_server = $s['resource_server'] ?? null;
  }
}

class UpdateUserAttributesRequest {
  public ?TokenModelType $access_token;
  public ?ClientMetadataType $client_metadata;
  public ?AttributeListType $user_attributes;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'client_metadata' => ?ClientMetadataType,
    ?'user_attributes' => ?AttributeListType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->client_metadata = $s['client_metadata'] ?? dict[];
    $this->user_attributes = $s['user_attributes'] ?? vec[];
  }
}

class UpdateUserAttributesResponse {
  public ?CodeDeliveryDetailsListType $code_delivery_details_list;

  public function __construct(shape(
    ?'code_delivery_details_list' => ?CodeDeliveryDetailsListType,
  ) $s = shape()) {
    $this->code_delivery_details_list = $s['code_delivery_details_list'] ?? vec[];
  }
}

class UpdateUserPoolClientRequest {
  public ?OAuthFlowsType $allowed_o_auth_flows;
  public ?BooleanType $allowed_o_auth_flows_user_pool_client;
  public ?ScopeListType $allowed_o_auth_scopes;
  public ?AnalyticsConfigurationType $analytics_configuration;
  public ?CallbackURLsListType $callback_ur_ls;
  public ?ClientIdType $client_id;
  public ?ClientNameType $client_name;
  public ?RedirectUrlType $default_redirect_uri;
  public ?ExplicitAuthFlowsListType $explicit_auth_flows;
  public ?LogoutURLsListType $logout_ur_ls;
  public ?PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public ?ClientPermissionListType $read_attributes;
  public ?RefreshTokenValidityType $refresh_token_validity;
  public ?SupportedIdentityProvidersListType $supported_identity_providers;
  public ?UserPoolIdType $user_pool_id;
  public ?ClientPermissionListType $write_attributes;

  public function __construct(shape(
    ?'allowed_o_auth_flows' => ?OAuthFlowsType,
    ?'allowed_o_auth_flows_user_pool_client' => ?BooleanType,
    ?'allowed_o_auth_scopes' => ?ScopeListType,
    ?'analytics_configuration' => ?AnalyticsConfigurationType,
    ?'callback_ur_ls' => ?CallbackURLsListType,
    ?'client_id' => ?ClientIdType,
    ?'client_name' => ?ClientNameType,
    ?'default_redirect_uri' => ?RedirectUrlType,
    ?'explicit_auth_flows' => ?ExplicitAuthFlowsListType,
    ?'logout_ur_ls' => ?LogoutURLsListType,
    ?'prevent_user_existence_errors' => ?PreventUserExistenceErrorTypes,
    ?'read_attributes' => ?ClientPermissionListType,
    ?'refresh_token_validity' => ?RefreshTokenValidityType,
    ?'supported_identity_providers' => ?SupportedIdentityProvidersListType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'write_attributes' => ?ClientPermissionListType,
  ) $s = shape()) {
    $this->allowed_o_auth_flows = $s['allowed_o_auth_flows'] ?? vec[];
    $this->allowed_o_auth_flows_user_pool_client = $s['allowed_o_auth_flows_user_pool_client'] ?? false;
    $this->allowed_o_auth_scopes = $s['allowed_o_auth_scopes'] ?? vec[];
    $this->analytics_configuration = $s['analytics_configuration'] ?? null;
    $this->callback_ur_ls = $s['callback_ur_ls'] ?? vec[];
    $this->client_id = $s['client_id'] ?? '';
    $this->client_name = $s['client_name'] ?? '';
    $this->default_redirect_uri = $s['default_redirect_uri'] ?? '';
    $this->explicit_auth_flows = $s['explicit_auth_flows'] ?? vec[];
    $this->logout_ur_ls = $s['logout_ur_ls'] ?? vec[];
    $this->prevent_user_existence_errors = $s['prevent_user_existence_errors'] ?? '';
    $this->read_attributes = $s['read_attributes'] ?? vec[];
    $this->refresh_token_validity = $s['refresh_token_validity'] ?? 0;
    $this->supported_identity_providers = $s['supported_identity_providers'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->write_attributes = $s['write_attributes'] ?? vec[];
  }
}

class UpdateUserPoolClientResponse {
  public ?UserPoolClientType $user_pool_client;

  public function __construct(shape(
    ?'user_pool_client' => ?UserPoolClientType,
  ) $s = shape()) {
    $this->user_pool_client = $s['user_pool_client'] ?? null;
  }
}

class UpdateUserPoolDomainRequest {
  public ?CustomDomainConfigType $custom_domain_config;
  public ?DomainType $domain;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'custom_domain_config' => ?CustomDomainConfigType,
    ?'domain' => ?DomainType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->custom_domain_config = $s['custom_domain_config'] ?? null;
    $this->domain = $s['domain'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

class UpdateUserPoolDomainResponse {
  public ?DomainType $cloud_front_domain;

  public function __construct(shape(
    ?'cloud_front_domain' => ?DomainType,
  ) $s = shape()) {
    $this->cloud_front_domain = $s['cloud_front_domain'] ?? '';
  }
}

class UpdateUserPoolRequest {
  public ?AccountRecoverySettingType $account_recovery_setting;
  public ?AdminCreateUserConfigType $admin_create_user_config;
  public ?VerifiedAttributesListType $auto_verified_attributes;
  public ?DeviceConfigurationType $device_configuration;
  public ?EmailConfigurationType $email_configuration;
  public ?EmailVerificationMessageType $email_verification_message;
  public ?EmailVerificationSubjectType $email_verification_subject;
  public ?LambdaConfigType $lambda_config;
  public ?UserPoolMfaType $mfa_configuration;
  public ?UserPoolPolicyType $policies;
  public ?SmsVerificationMessageType $sms_authentication_message;
  public ?SmsConfigurationType $sms_configuration;
  public ?SmsVerificationMessageType $sms_verification_message;
  public ?UserPoolAddOnsType $user_pool_add_ons;
  public ?UserPoolIdType $user_pool_id;
  public ?UserPoolTagsType $user_pool_tags;
  public ?VerificationMessageTemplateType $verification_message_template;

  public function __construct(shape(
    ?'account_recovery_setting' => ?AccountRecoverySettingType,
    ?'admin_create_user_config' => ?AdminCreateUserConfigType,
    ?'auto_verified_attributes' => ?VerifiedAttributesListType,
    ?'device_configuration' => ?DeviceConfigurationType,
    ?'email_configuration' => ?EmailConfigurationType,
    ?'email_verification_message' => ?EmailVerificationMessageType,
    ?'email_verification_subject' => ?EmailVerificationSubjectType,
    ?'lambda_config' => ?LambdaConfigType,
    ?'mfa_configuration' => ?UserPoolMfaType,
    ?'policies' => ?UserPoolPolicyType,
    ?'sms_authentication_message' => ?SmsVerificationMessageType,
    ?'sms_configuration' => ?SmsConfigurationType,
    ?'sms_verification_message' => ?SmsVerificationMessageType,
    ?'user_pool_add_ons' => ?UserPoolAddOnsType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'user_pool_tags' => ?UserPoolTagsType,
    ?'verification_message_template' => ?VerificationMessageTemplateType,
  ) $s = shape()) {
    $this->account_recovery_setting = $s['account_recovery_setting'] ?? null;
    $this->admin_create_user_config = $s['admin_create_user_config'] ?? null;
    $this->auto_verified_attributes = $s['auto_verified_attributes'] ?? vec[];
    $this->device_configuration = $s['device_configuration'] ?? null;
    $this->email_configuration = $s['email_configuration'] ?? null;
    $this->email_verification_message = $s['email_verification_message'] ?? '';
    $this->email_verification_subject = $s['email_verification_subject'] ?? '';
    $this->lambda_config = $s['lambda_config'] ?? null;
    $this->mfa_configuration = $s['mfa_configuration'] ?? '';
    $this->policies = $s['policies'] ?? null;
    $this->sms_authentication_message = $s['sms_authentication_message'] ?? '';
    $this->sms_configuration = $s['sms_configuration'] ?? null;
    $this->sms_verification_message = $s['sms_verification_message'] ?? '';
    $this->user_pool_add_ons = $s['user_pool_add_ons'] ?? null;
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->user_pool_tags = $s['user_pool_tags'] ?? dict[];
    $this->verification_message_template = $s['verification_message_template'] ?? null;
  }
}

class UpdateUserPoolResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UserContextDataType {
  public ?StringType $encoded_data;

  public function __construct(shape(
    ?'encoded_data' => ?StringType,
  ) $s = shape()) {
    $this->encoded_data = $s['encoded_data'] ?? '';
  }
}

type UserFilterType = string;

class UserImportInProgressException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UserImportJobIdType = string;

type UserImportJobNameType = string;

type UserImportJobStatusType = string;

class UserImportJobType {
  public ?ArnType $cloud_watch_logs_role_arn;
  public ?DateType $completion_date;
  public ?CompletionMessageType $completion_message;
  public ?DateType $creation_date;
  public ?LongType $failed_users;
  public ?LongType $imported_users;
  public ?UserImportJobIdType $job_id;
  public ?UserImportJobNameType $job_name;
  public ?PreSignedUrlType $pre_signed_url;
  public ?LongType $skipped_users;
  public ?DateType $start_date;
  public ?UserImportJobStatusType $status;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'cloud_watch_logs_role_arn' => ?ArnType,
    ?'completion_date' => ?DateType,
    ?'completion_message' => ?CompletionMessageType,
    ?'creation_date' => ?DateType,
    ?'failed_users' => ?LongType,
    ?'imported_users' => ?LongType,
    ?'job_id' => ?UserImportJobIdType,
    ?'job_name' => ?UserImportJobNameType,
    ?'pre_signed_url' => ?PreSignedUrlType,
    ?'skipped_users' => ?LongType,
    ?'start_date' => ?DateType,
    ?'status' => ?UserImportJobStatusType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->cloud_watch_logs_role_arn = $s['cloud_watch_logs_role_arn'] ?? '';
    $this->completion_date = $s['completion_date'] ?? 0;
    $this->completion_message = $s['completion_message'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->failed_users = $s['failed_users'] ?? 0;
    $this->imported_users = $s['imported_users'] ?? 0;
    $this->job_id = $s['job_id'] ?? '';
    $this->job_name = $s['job_name'] ?? '';
    $this->pre_signed_url = $s['pre_signed_url'] ?? '';
    $this->skipped_users = $s['skipped_users'] ?? 0;
    $this->start_date = $s['start_date'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

type UserImportJobsListType = vec<UserImportJobType>;

class UserLambdaValidationException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UserMFASettingListType = vec<StringType>;

class UserNotConfirmedException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UserNotFoundException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UserPoolAddOnNotEnabledException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UserPoolAddOnsType {
  public ?AdvancedSecurityModeType $advanced_security_mode;

  public function __construct(shape(
    ?'advanced_security_mode' => ?AdvancedSecurityModeType,
  ) $s = shape()) {
    $this->advanced_security_mode = $s['advanced_security_mode'] ?? '';
  }
}

class UserPoolClientDescription {
  public ?ClientIdType $client_id;
  public ?ClientNameType $client_name;
  public ?UserPoolIdType $user_pool_id;

  public function __construct(shape(
    ?'client_id' => ?ClientIdType,
    ?'client_name' => ?ClientNameType,
    ?'user_pool_id' => ?UserPoolIdType,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->client_name = $s['client_name'] ?? '';
    $this->user_pool_id = $s['user_pool_id'] ?? '';
  }
}

type UserPoolClientListType = vec<UserPoolClientDescription>;

class UserPoolClientType {
  public ?OAuthFlowsType $allowed_o_auth_flows;
  public ?BooleanType $allowed_o_auth_flows_user_pool_client;
  public ?ScopeListType $allowed_o_auth_scopes;
  public ?AnalyticsConfigurationType $analytics_configuration;
  public ?CallbackURLsListType $callback_ur_ls;
  public ?ClientIdType $client_id;
  public ?ClientNameType $client_name;
  public ?ClientSecretType $client_secret;
  public ?DateType $creation_date;
  public ?RedirectUrlType $default_redirect_uri;
  public ?ExplicitAuthFlowsListType $explicit_auth_flows;
  public ?DateType $last_modified_date;
  public ?LogoutURLsListType $logout_ur_ls;
  public ?PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public ?ClientPermissionListType $read_attributes;
  public ?RefreshTokenValidityType $refresh_token_validity;
  public ?SupportedIdentityProvidersListType $supported_identity_providers;
  public ?UserPoolIdType $user_pool_id;
  public ?ClientPermissionListType $write_attributes;

  public function __construct(shape(
    ?'allowed_o_auth_flows' => ?OAuthFlowsType,
    ?'allowed_o_auth_flows_user_pool_client' => ?BooleanType,
    ?'allowed_o_auth_scopes' => ?ScopeListType,
    ?'analytics_configuration' => ?AnalyticsConfigurationType,
    ?'callback_ur_ls' => ?CallbackURLsListType,
    ?'client_id' => ?ClientIdType,
    ?'client_name' => ?ClientNameType,
    ?'client_secret' => ?ClientSecretType,
    ?'creation_date' => ?DateType,
    ?'default_redirect_uri' => ?RedirectUrlType,
    ?'explicit_auth_flows' => ?ExplicitAuthFlowsListType,
    ?'last_modified_date' => ?DateType,
    ?'logout_ur_ls' => ?LogoutURLsListType,
    ?'prevent_user_existence_errors' => ?PreventUserExistenceErrorTypes,
    ?'read_attributes' => ?ClientPermissionListType,
    ?'refresh_token_validity' => ?RefreshTokenValidityType,
    ?'supported_identity_providers' => ?SupportedIdentityProvidersListType,
    ?'user_pool_id' => ?UserPoolIdType,
    ?'write_attributes' => ?ClientPermissionListType,
  ) $s = shape()) {
    $this->allowed_o_auth_flows = $s['allowed_o_auth_flows'] ?? vec[];
    $this->allowed_o_auth_flows_user_pool_client = $s['allowed_o_auth_flows_user_pool_client'] ?? false;
    $this->allowed_o_auth_scopes = $s['allowed_o_auth_scopes'] ?? vec[];
    $this->analytics_configuration = $s['analytics_configuration'] ?? null;
    $this->callback_ur_ls = $s['callback_ur_ls'] ?? vec[];
    $this->client_id = $s['client_id'] ?? '';
    $this->client_name = $s['client_name'] ?? '';
    $this->client_secret = $s['client_secret'] ?? '';
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->default_redirect_uri = $s['default_redirect_uri'] ?? '';
    $this->explicit_auth_flows = $s['explicit_auth_flows'] ?? vec[];
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->logout_ur_ls = $s['logout_ur_ls'] ?? vec[];
    $this->prevent_user_existence_errors = $s['prevent_user_existence_errors'] ?? '';
    $this->read_attributes = $s['read_attributes'] ?? vec[];
    $this->refresh_token_validity = $s['refresh_token_validity'] ?? 0;
    $this->supported_identity_providers = $s['supported_identity_providers'] ?? vec[];
    $this->user_pool_id = $s['user_pool_id'] ?? '';
    $this->write_attributes = $s['write_attributes'] ?? vec[];
  }
}

class UserPoolDescriptionType {
  public ?DateType $creation_date;
  public ?UserPoolIdType $id;
  public ?LambdaConfigType $lambda_config;
  public ?DateType $last_modified_date;
  public ?UserPoolNameType $name;
  public ?StatusType $status;

  public function __construct(shape(
    ?'creation_date' => ?DateType,
    ?'id' => ?UserPoolIdType,
    ?'lambda_config' => ?LambdaConfigType,
    ?'last_modified_date' => ?DateType,
    ?'name' => ?UserPoolNameType,
    ?'status' => ?StatusType,
  ) $s = shape()) {
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->lambda_config = $s['lambda_config'] ?? null;
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type UserPoolIdType = string;

type UserPoolListType = vec<UserPoolDescriptionType>;

type UserPoolMfaType = string;

type UserPoolNameType = string;

class UserPoolPolicyType {
  public ?PasswordPolicyType $password_policy;

  public function __construct(shape(
    ?'password_policy' => ?PasswordPolicyType,
  ) $s = shape()) {
    $this->password_policy = $s['password_policy'] ?? null;
  }
}

class UserPoolTaggingException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UserPoolTagsListType = vec<TagKeysType>;

type UserPoolTagsType = dict<TagKeysType, TagValueType>;

class UserPoolType {
  public ?AccountRecoverySettingType $account_recovery_setting;
  public ?AdminCreateUserConfigType $admin_create_user_config;
  public ?AliasAttributesListType $alias_attributes;
  public ?ArnType $arn;
  public ?VerifiedAttributesListType $auto_verified_attributes;
  public ?DateType $creation_date;
  public ?DomainType $custom_domain;
  public ?DeviceConfigurationType $device_configuration;
  public ?DomainType $domain;
  public ?EmailConfigurationType $email_configuration;
  public ?StringType $email_configuration_failure;
  public ?EmailVerificationMessageType $email_verification_message;
  public ?EmailVerificationSubjectType $email_verification_subject;
  public ?IntegerType $estimated_number_of_users;
  public ?UserPoolIdType $id;
  public ?LambdaConfigType $lambda_config;
  public ?DateType $last_modified_date;
  public ?UserPoolMfaType $mfa_configuration;
  public ?UserPoolNameType $name;
  public ?UserPoolPolicyType $policies;
  public ?SchemaAttributesListType $schema_attributes;
  public ?SmsVerificationMessageType $sms_authentication_message;
  public ?SmsConfigurationType $sms_configuration;
  public ?StringType $sms_configuration_failure;
  public ?SmsVerificationMessageType $sms_verification_message;
  public ?StatusType $status;
  public ?UserPoolAddOnsType $user_pool_add_ons;
  public ?UserPoolTagsType $user_pool_tags;
  public ?UsernameAttributesListType $username_attributes;
  public ?UsernameConfigurationType $username_configuration;
  public ?VerificationMessageTemplateType $verification_message_template;

  public function __construct(shape(
    ?'account_recovery_setting' => ?AccountRecoverySettingType,
    ?'admin_create_user_config' => ?AdminCreateUserConfigType,
    ?'alias_attributes' => ?AliasAttributesListType,
    ?'arn' => ?ArnType,
    ?'auto_verified_attributes' => ?VerifiedAttributesListType,
    ?'creation_date' => ?DateType,
    ?'custom_domain' => ?DomainType,
    ?'device_configuration' => ?DeviceConfigurationType,
    ?'domain' => ?DomainType,
    ?'email_configuration' => ?EmailConfigurationType,
    ?'email_configuration_failure' => ?StringType,
    ?'email_verification_message' => ?EmailVerificationMessageType,
    ?'email_verification_subject' => ?EmailVerificationSubjectType,
    ?'estimated_number_of_users' => ?IntegerType,
    ?'id' => ?UserPoolIdType,
    ?'lambda_config' => ?LambdaConfigType,
    ?'last_modified_date' => ?DateType,
    ?'mfa_configuration' => ?UserPoolMfaType,
    ?'name' => ?UserPoolNameType,
    ?'policies' => ?UserPoolPolicyType,
    ?'schema_attributes' => ?SchemaAttributesListType,
    ?'sms_authentication_message' => ?SmsVerificationMessageType,
    ?'sms_configuration' => ?SmsConfigurationType,
    ?'sms_configuration_failure' => ?StringType,
    ?'sms_verification_message' => ?SmsVerificationMessageType,
    ?'status' => ?StatusType,
    ?'user_pool_add_ons' => ?UserPoolAddOnsType,
    ?'user_pool_tags' => ?UserPoolTagsType,
    ?'username_attributes' => ?UsernameAttributesListType,
    ?'username_configuration' => ?UsernameConfigurationType,
    ?'verification_message_template' => ?VerificationMessageTemplateType,
  ) $s = shape()) {
    $this->account_recovery_setting = $s['account_recovery_setting'] ?? null;
    $this->admin_create_user_config = $s['admin_create_user_config'] ?? null;
    $this->alias_attributes = $s['alias_attributes'] ?? vec[];
    $this->arn = $s['arn'] ?? '';
    $this->auto_verified_attributes = $s['auto_verified_attributes'] ?? vec[];
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->custom_domain = $s['custom_domain'] ?? '';
    $this->device_configuration = $s['device_configuration'] ?? null;
    $this->domain = $s['domain'] ?? '';
    $this->email_configuration = $s['email_configuration'] ?? null;
    $this->email_configuration_failure = $s['email_configuration_failure'] ?? '';
    $this->email_verification_message = $s['email_verification_message'] ?? '';
    $this->email_verification_subject = $s['email_verification_subject'] ?? '';
    $this->estimated_number_of_users = $s['estimated_number_of_users'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->lambda_config = $s['lambda_config'] ?? null;
    $this->last_modified_date = $s['last_modified_date'] ?? 0;
    $this->mfa_configuration = $s['mfa_configuration'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->policies = $s['policies'] ?? null;
    $this->schema_attributes = $s['schema_attributes'] ?? vec[];
    $this->sms_authentication_message = $s['sms_authentication_message'] ?? '';
    $this->sms_configuration = $s['sms_configuration'] ?? null;
    $this->sms_configuration_failure = $s['sms_configuration_failure'] ?? '';
    $this->sms_verification_message = $s['sms_verification_message'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_pool_add_ons = $s['user_pool_add_ons'] ?? null;
    $this->user_pool_tags = $s['user_pool_tags'] ?? dict[];
    $this->username_attributes = $s['username_attributes'] ?? vec[];
    $this->username_configuration = $s['username_configuration'] ?? null;
    $this->verification_message_template = $s['verification_message_template'] ?? null;
  }
}

type UserStatusType = string;

class UserType {
  public ?AttributeListType $attributes;
  public ?BooleanType $enabled;
  public ?MFAOptionListType $mfa_options;
  public ?DateType $user_create_date;
  public ?DateType $user_last_modified_date;
  public ?UserStatusType $user_status;
  public ?UsernameType $username;

  public function __construct(shape(
    ?'attributes' => ?AttributeListType,
    ?'enabled' => ?BooleanType,
    ?'mfa_options' => ?MFAOptionListType,
    ?'user_create_date' => ?DateType,
    ?'user_last_modified_date' => ?DateType,
    ?'user_status' => ?UserStatusType,
    ?'username' => ?UsernameType,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->enabled = $s['enabled'] ?? false;
    $this->mfa_options = $s['mfa_options'] ?? vec[];
    $this->user_create_date = $s['user_create_date'] ?? 0;
    $this->user_last_modified_date = $s['user_last_modified_date'] ?? 0;
    $this->user_status = $s['user_status'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type UsernameAttributeType = string;

type UsernameAttributesListType = vec<UsernameAttributeType>;

class UsernameConfigurationType {
  public ?WrappedBooleanType $case_sensitive;

  public function __construct(shape(
    ?'case_sensitive' => ?WrappedBooleanType,
  ) $s = shape()) {
    $this->case_sensitive = $s['case_sensitive'] ?? false;
  }
}

class UsernameExistsException {
  public ?MessageType $message;

  public function __construct(shape(
    ?'message' => ?MessageType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type UsernameType = string;

type UsersListType = vec<UserType>;

class VerificationMessageTemplateType {
  public ?DefaultEmailOptionType $default_email_option;
  public ?EmailVerificationMessageType $email_message;
  public ?EmailVerificationMessageByLinkType $email_message_by_link;
  public ?EmailVerificationSubjectType $email_subject;
  public ?EmailVerificationSubjectByLinkType $email_subject_by_link;
  public ?SmsVerificationMessageType $sms_message;

  public function __construct(shape(
    ?'default_email_option' => ?DefaultEmailOptionType,
    ?'email_message' => ?EmailVerificationMessageType,
    ?'email_message_by_link' => ?EmailVerificationMessageByLinkType,
    ?'email_subject' => ?EmailVerificationSubjectType,
    ?'email_subject_by_link' => ?EmailVerificationSubjectByLinkType,
    ?'sms_message' => ?SmsVerificationMessageType,
  ) $s = shape()) {
    $this->default_email_option = $s['default_email_option'] ?? '';
    $this->email_message = $s['email_message'] ?? '';
    $this->email_message_by_link = $s['email_message_by_link'] ?? '';
    $this->email_subject = $s['email_subject'] ?? '';
    $this->email_subject_by_link = $s['email_subject_by_link'] ?? '';
    $this->sms_message = $s['sms_message'] ?? '';
  }
}

type VerifiedAttributeType = string;

type VerifiedAttributesListType = vec<VerifiedAttributeType>;

class VerifySoftwareTokenRequest {
  public ?TokenModelType $access_token;
  public ?StringType $friendly_device_name;
  public ?SessionType $session;
  public ?SoftwareTokenMFAUserCodeType $user_code;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'friendly_device_name' => ?StringType,
    ?'session' => ?SessionType,
    ?'user_code' => ?SoftwareTokenMFAUserCodeType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->friendly_device_name = $s['friendly_device_name'] ?? '';
    $this->session = $s['session'] ?? '';
    $this->user_code = $s['user_code'] ?? '';
  }
}

class VerifySoftwareTokenResponse {
  public ?SessionType $session;
  public ?VerifySoftwareTokenResponseType $status;

  public function __construct(shape(
    ?'session' => ?SessionType,
    ?'status' => ?VerifySoftwareTokenResponseType,
  ) $s = shape()) {
    $this->session = $s['session'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type VerifySoftwareTokenResponseType = string;

class VerifyUserAttributeRequest {
  public ?TokenModelType $access_token;
  public ?AttributeNameType $attribute_name;
  public ?ConfirmationCodeType $code;

  public function __construct(shape(
    ?'access_token' => ?TokenModelType,
    ?'attribute_name' => ?AttributeNameType,
    ?'code' => ?ConfirmationCodeType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->code = $s['code'] ?? '';
  }
}

class VerifyUserAttributeResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type WrappedBooleanType = bool;

