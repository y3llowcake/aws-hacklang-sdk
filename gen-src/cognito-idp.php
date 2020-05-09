<?hh // strict
namespace slack\aws\cognito-idp;

interface Cognito Identity Provider {
  public function AddCustomAttributes(AddCustomAttributesRequest) Awaitable<Errors\Result<AddCustomAttributesResponse>>;
  public function AdminAddUserToGroup(AdminAddUserToGroupRequest) Awaitable<Errors\Error>;
  public function AdminConfirmSignUp(AdminConfirmSignUpRequest) Awaitable<Errors\Result<AdminConfirmSignUpResponse>>;
  public function AdminCreateUser(AdminCreateUserRequest) Awaitable<Errors\Result<AdminCreateUserResponse>>;
  public function AdminDeleteUser(AdminDeleteUserRequest) Awaitable<Errors\Error>;
  public function AdminDeleteUserAttributes(AdminDeleteUserAttributesRequest) Awaitable<Errors\Result<AdminDeleteUserAttributesResponse>>;
  public function AdminDisableProviderForUser(AdminDisableProviderForUserRequest) Awaitable<Errors\Result<AdminDisableProviderForUserResponse>>;
  public function AdminDisableUser(AdminDisableUserRequest) Awaitable<Errors\Result<AdminDisableUserResponse>>;
  public function AdminEnableUser(AdminEnableUserRequest) Awaitable<Errors\Result<AdminEnableUserResponse>>;
  public function AdminForgetDevice(AdminForgetDeviceRequest) Awaitable<Errors\Error>;
  public function AdminGetDevice(AdminGetDeviceRequest) Awaitable<Errors\Result<AdminGetDeviceResponse>>;
  public function AdminGetUser(AdminGetUserRequest) Awaitable<Errors\Result<AdminGetUserResponse>>;
  public function AdminInitiateAuth(AdminInitiateAuthRequest) Awaitable<Errors\Result<AdminInitiateAuthResponse>>;
  public function AdminLinkProviderForUser(AdminLinkProviderForUserRequest) Awaitable<Errors\Result<AdminLinkProviderForUserResponse>>;
  public function AdminListDevices(AdminListDevicesRequest) Awaitable<Errors\Result<AdminListDevicesResponse>>;
  public function AdminListGroupsForUser(AdminListGroupsForUserRequest) Awaitable<Errors\Result<AdminListGroupsForUserResponse>>;
  public function AdminListUserAuthEvents(AdminListUserAuthEventsRequest) Awaitable<Errors\Result<AdminListUserAuthEventsResponse>>;
  public function AdminRemoveUserFromGroup(AdminRemoveUserFromGroupRequest) Awaitable<Errors\Error>;
  public function AdminResetUserPassword(AdminResetUserPasswordRequest) Awaitable<Errors\Result<AdminResetUserPasswordResponse>>;
  public function AdminRespondToAuthChallenge(AdminRespondToAuthChallengeRequest) Awaitable<Errors\Result<AdminRespondToAuthChallengeResponse>>;
  public function AdminSetUserMFAPreference(AdminSetUserMFAPreferenceRequest) Awaitable<Errors\Result<AdminSetUserMFAPreferenceResponse>>;
  public function AdminSetUserPassword(AdminSetUserPasswordRequest) Awaitable<Errors\Result<AdminSetUserPasswordResponse>>;
  public function AdminSetUserSettings(AdminSetUserSettingsRequest) Awaitable<Errors\Result<AdminSetUserSettingsResponse>>;
  public function AdminUpdateAuthEventFeedback(AdminUpdateAuthEventFeedbackRequest) Awaitable<Errors\Result<AdminUpdateAuthEventFeedbackResponse>>;
  public function AdminUpdateDeviceStatus(AdminUpdateDeviceStatusRequest) Awaitable<Errors\Result<AdminUpdateDeviceStatusResponse>>;
  public function AdminUpdateUserAttributes(AdminUpdateUserAttributesRequest) Awaitable<Errors\Result<AdminUpdateUserAttributesResponse>>;
  public function AdminUserGlobalSignOut(AdminUserGlobalSignOutRequest) Awaitable<Errors\Result<AdminUserGlobalSignOutResponse>>;
  public function AssociateSoftwareToken(AssociateSoftwareTokenRequest) Awaitable<Errors\Result<AssociateSoftwareTokenResponse>>;
  public function ChangePassword(ChangePasswordRequest) Awaitable<Errors\Result<ChangePasswordResponse>>;
  public function ConfirmDevice(ConfirmDeviceRequest) Awaitable<Errors\Result<ConfirmDeviceResponse>>;
  public function ConfirmForgotPassword(ConfirmForgotPasswordRequest) Awaitable<Errors\Result<ConfirmForgotPasswordResponse>>;
  public function ConfirmSignUp(ConfirmSignUpRequest) Awaitable<Errors\Result<ConfirmSignUpResponse>>;
  public function CreateGroup(CreateGroupRequest) Awaitable<Errors\Result<CreateGroupResponse>>;
  public function CreateIdentityProvider(CreateIdentityProviderRequest) Awaitable<Errors\Result<CreateIdentityProviderResponse>>;
  public function CreateResourceServer(CreateResourceServerRequest) Awaitable<Errors\Result<CreateResourceServerResponse>>;
  public function CreateUserImportJob(CreateUserImportJobRequest) Awaitable<Errors\Result<CreateUserImportJobResponse>>;
  public function CreateUserPool(CreateUserPoolRequest) Awaitable<Errors\Result<CreateUserPoolResponse>>;
  public function CreateUserPoolClient(CreateUserPoolClientRequest) Awaitable<Errors\Result<CreateUserPoolClientResponse>>;
  public function CreateUserPoolDomain(CreateUserPoolDomainRequest) Awaitable<Errors\Result<CreateUserPoolDomainResponse>>;
  public function DeleteGroup(DeleteGroupRequest) Awaitable<Errors\Error>;
  public function DeleteIdentityProvider(DeleteIdentityProviderRequest) Awaitable<Errors\Error>;
  public function DeleteResourceServer(DeleteResourceServerRequest) Awaitable<Errors\Error>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Error>;
  public function DeleteUserAttributes(DeleteUserAttributesRequest) Awaitable<Errors\Result<DeleteUserAttributesResponse>>;
  public function DeleteUserPool(DeleteUserPoolRequest) Awaitable<Errors\Error>;
  public function DeleteUserPoolClient(DeleteUserPoolClientRequest) Awaitable<Errors\Error>;
  public function DeleteUserPoolDomain(DeleteUserPoolDomainRequest) Awaitable<Errors\Result<DeleteUserPoolDomainResponse>>;
  public function DescribeIdentityProvider(DescribeIdentityProviderRequest) Awaitable<Errors\Result<DescribeIdentityProviderResponse>>;
  public function DescribeResourceServer(DescribeResourceServerRequest) Awaitable<Errors\Result<DescribeResourceServerResponse>>;
  public function DescribeRiskConfiguration(DescribeRiskConfigurationRequest) Awaitable<Errors\Result<DescribeRiskConfigurationResponse>>;
  public function DescribeUserImportJob(DescribeUserImportJobRequest) Awaitable<Errors\Result<DescribeUserImportJobResponse>>;
  public function DescribeUserPool(DescribeUserPoolRequest) Awaitable<Errors\Result<DescribeUserPoolResponse>>;
  public function DescribeUserPoolClient(DescribeUserPoolClientRequest) Awaitable<Errors\Result<DescribeUserPoolClientResponse>>;
  public function DescribeUserPoolDomain(DescribeUserPoolDomainRequest) Awaitable<Errors\Result<DescribeUserPoolDomainResponse>>;
  public function ForgetDevice(ForgetDeviceRequest) Awaitable<Errors\Error>;
  public function ForgotPassword(ForgotPasswordRequest) Awaitable<Errors\Result<ForgotPasswordResponse>>;
  public function GetCSVHeader(GetCSVHeaderRequest) Awaitable<Errors\Result<GetCSVHeaderResponse>>;
  public function GetDevice(GetDeviceRequest) Awaitable<Errors\Result<GetDeviceResponse>>;
  public function GetGroup(GetGroupRequest) Awaitable<Errors\Result<GetGroupResponse>>;
  public function GetIdentityProviderByIdentifier(GetIdentityProviderByIdentifierRequest) Awaitable<Errors\Result<GetIdentityProviderByIdentifierResponse>>;
  public function GetSigningCertificate(GetSigningCertificateRequest) Awaitable<Errors\Result<GetSigningCertificateResponse>>;
  public function GetUICustomization(GetUICustomizationRequest) Awaitable<Errors\Result<GetUICustomizationResponse>>;
  public function GetUser(GetUserRequest) Awaitable<Errors\Result<GetUserResponse>>;
  public function GetUserAttributeVerificationCode(GetUserAttributeVerificationCodeRequest) Awaitable<Errors\Result<GetUserAttributeVerificationCodeResponse>>;
  public function GetUserPoolMfaConfig(GetUserPoolMfaConfigRequest) Awaitable<Errors\Result<GetUserPoolMfaConfigResponse>>;
  public function GlobalSignOut(GlobalSignOutRequest) Awaitable<Errors\Result<GlobalSignOutResponse>>;
  public function InitiateAuth(InitiateAuthRequest) Awaitable<Errors\Result<InitiateAuthResponse>>;
  public function ListDevices(ListDevicesRequest) Awaitable<Errors\Result<ListDevicesResponse>>;
  public function ListGroups(ListGroupsRequest) Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ListIdentityProviders(ListIdentityProvidersRequest) Awaitable<Errors\Result<ListIdentityProvidersResponse>>;
  public function ListResourceServers(ListResourceServersRequest) Awaitable<Errors\Result<ListResourceServersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUserImportJobs(ListUserImportJobsRequest) Awaitable<Errors\Result<ListUserImportJobsResponse>>;
  public function ListUserPoolClients(ListUserPoolClientsRequest) Awaitable<Errors\Result<ListUserPoolClientsResponse>>;
  public function ListUserPools(ListUserPoolsRequest) Awaitable<Errors\Result<ListUserPoolsResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function ListUsersInGroup(ListUsersInGroupRequest) Awaitable<Errors\Result<ListUsersInGroupResponse>>;
  public function ResendConfirmationCode(ResendConfirmationCodeRequest) Awaitable<Errors\Result<ResendConfirmationCodeResponse>>;
  public function RespondToAuthChallenge(RespondToAuthChallengeRequest) Awaitable<Errors\Result<RespondToAuthChallengeResponse>>;
  public function SetRiskConfiguration(SetRiskConfigurationRequest) Awaitable<Errors\Result<SetRiskConfigurationResponse>>;
  public function SetUICustomization(SetUICustomizationRequest) Awaitable<Errors\Result<SetUICustomizationResponse>>;
  public function SetUserMFAPreference(SetUserMFAPreferenceRequest) Awaitable<Errors\Result<SetUserMFAPreferenceResponse>>;
  public function SetUserPoolMfaConfig(SetUserPoolMfaConfigRequest) Awaitable<Errors\Result<SetUserPoolMfaConfigResponse>>;
  public function SetUserSettings(SetUserSettingsRequest) Awaitable<Errors\Result<SetUserSettingsResponse>>;
  public function SignUp(SignUpRequest) Awaitable<Errors\Result<SignUpResponse>>;
  public function StartUserImportJob(StartUserImportJobRequest) Awaitable<Errors\Result<StartUserImportJobResponse>>;
  public function StopUserImportJob(StopUserImportJobRequest) Awaitable<Errors\Result<StopUserImportJobResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateAuthEventFeedback(UpdateAuthEventFeedbackRequest) Awaitable<Errors\Result<UpdateAuthEventFeedbackResponse>>;
  public function UpdateDeviceStatus(UpdateDeviceStatusRequest) Awaitable<Errors\Result<UpdateDeviceStatusResponse>>;
  public function UpdateGroup(UpdateGroupRequest) Awaitable<Errors\Result<UpdateGroupResponse>>;
  public function UpdateIdentityProvider(UpdateIdentityProviderRequest) Awaitable<Errors\Result<UpdateIdentityProviderResponse>>;
  public function UpdateResourceServer(UpdateResourceServerRequest) Awaitable<Errors\Result<UpdateResourceServerResponse>>;
  public function UpdateUserAttributes(UpdateUserAttributesRequest) Awaitable<Errors\Result<UpdateUserAttributesResponse>>;
  public function UpdateUserPool(UpdateUserPoolRequest) Awaitable<Errors\Result<UpdateUserPoolResponse>>;
  public function UpdateUserPoolClient(UpdateUserPoolClientRequest) Awaitable<Errors\Result<UpdateUserPoolClientResponse>>;
  public function UpdateUserPoolDomain(UpdateUserPoolDomainRequest) Awaitable<Errors\Result<UpdateUserPoolDomainResponse>>;
  public function VerifySoftwareToken(VerifySoftwareTokenRequest) Awaitable<Errors\Result<VerifySoftwareTokenResponse>>;
  public function VerifyUserAttribute(VerifyUserAttributeRequest) Awaitable<Errors\Result<VerifyUserAttributeResponse>>;
}

class AWSAccountIdType {
}

class AccountRecoverySettingType {
  public RecoveryMechanismsType $recovery_mechanisms;
}

class AccountTakeoverActionNotifyType {
}

class AccountTakeoverActionType {
  public AccountTakeoverEventActionType $event_action;
  public AccountTakeoverActionNotifyType $notify;
}

class AccountTakeoverActionsType {
  public AccountTakeoverActionType $high_action;
  public AccountTakeoverActionType $low_action;
  public AccountTakeoverActionType $medium_action;
}

class AccountTakeoverEventActionType {
}

class AccountTakeoverRiskConfigurationType {
  public AccountTakeoverActionsType $actions;
  public NotifyConfigurationType $notify_configuration;
}

class AddCustomAttributesRequest {
  public CustomAttributesListType $custom_attributes;
  public UserPoolIdType $user_pool_id;
}

class AddCustomAttributesResponse {
}

class AdminAddUserToGroupRequest {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminConfirmSignUpRequest {
  public ClientMetadataType $client_metadata;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminConfirmSignUpResponse {
}

class AdminCreateUserConfigType {
  public BooleanType $allow_admin_create_user_only;
  public MessageTemplateType $invite_message_template;
  public AdminCreateUserUnusedAccountValidityDaysType $unused_account_validity_days;
}

class AdminCreateUserRequest {
  public ClientMetadataType $client_metadata;
  public DeliveryMediumListType $desired_delivery_mediums;
  public ForceAliasCreation $force_alias_creation;
  public MessageActionType $message_action;
  public PasswordType $temporary_password;
  public AttributeListType $user_attributes;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public AttributeListType $validation_data;
}

class AdminCreateUserResponse {
  public UserType $user;
}

class AdminCreateUserUnusedAccountValidityDaysType {
}

class AdminDeleteUserAttributesRequest {
  public AttributeNameListType $user_attribute_names;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminDeleteUserAttributesResponse {
}

class AdminDeleteUserRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminDisableProviderForUserRequest {
  public ProviderUserIdentifierType $user;
  public StringType $user_pool_id;
}

class AdminDisableProviderForUserResponse {
}

class AdminDisableUserRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminDisableUserResponse {
}

class AdminEnableUserRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminEnableUserResponse {
}

class AdminForgetDeviceRequest {
  public DeviceKeyType $device_key;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminGetDeviceRequest {
  public DeviceKeyType $device_key;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminGetDeviceResponse {
  public DeviceType $device;
}

class AdminGetUserRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminGetUserResponse {
  public BooleanType $enabled;
  public MFAOptionListType $mfa_options;
  public StringType $preferred_mfa_setting;
  public AttributeListType $user_attributes;
  public DateType $user_create_date;
  public DateType $user_last_modified_date;
  public UserMFASettingListType $user_mfa_setting_list;
  public UserStatusType $user_status;
  public UsernameType $username;
}

class AdminInitiateAuthRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public AuthFlowType $auth_flow;
  public AuthParametersType $auth_parameters;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public ContextDataType $context_data;
  public UserPoolIdType $user_pool_id;
}

class AdminInitiateAuthResponse {
  public AuthenticationResultType $authentication_result;
  public ChallengeNameType $challenge_name;
  public ChallengeParametersType $challenge_parameters;
  public SessionType $session;
}

class AdminLinkProviderForUserRequest {
  public ProviderUserIdentifierType $destination_user;
  public ProviderUserIdentifierType $source_user;
  public StringType $user_pool_id;
}

class AdminLinkProviderForUserResponse {
}

class AdminListDevicesRequest {
  public QueryLimitType $limit;
  public SearchPaginationTokenType $pagination_token;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminListDevicesResponse {
  public DeviceListType $devices;
  public SearchPaginationTokenType $pagination_token;
}

class AdminListGroupsForUserRequest {
  public QueryLimitType $limit;
  public PaginationKey $next_token;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminListGroupsForUserResponse {
  public GroupListType $groups;
  public PaginationKey $next_token;
}

class AdminListUserAuthEventsRequest {
  public QueryLimitType $max_results;
  public PaginationKey $next_token;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminListUserAuthEventsResponse {
  public AuthEventsType $auth_events;
  public PaginationKey $next_token;
}

class AdminRemoveUserFromGroupRequest {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminResetUserPasswordRequest {
  public ClientMetadataType $client_metadata;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminResetUserPasswordResponse {
}

class AdminRespondToAuthChallengeRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public ChallengeNameType $challenge_name;
  public ChallengeResponsesType $challenge_responses;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public ContextDataType $context_data;
  public SessionType $session;
  public UserPoolIdType $user_pool_id;
}

class AdminRespondToAuthChallengeResponse {
  public AuthenticationResultType $authentication_result;
  public ChallengeNameType $challenge_name;
  public ChallengeParametersType $challenge_parameters;
  public SessionType $session;
}

class AdminSetUserMFAPreferenceRequest {
  public SMSMfaSettingsType $sms_mfa_settings;
  public SoftwareTokenMfaSettingsType $software_token_mfa_settings;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminSetUserMFAPreferenceResponse {
}

class AdminSetUserPasswordRequest {
  public PasswordType $password;
  public BooleanType $permanent;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminSetUserPasswordResponse {
}

class AdminSetUserSettingsRequest {
  public MFAOptionListType $mfa_options;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminSetUserSettingsResponse {
}

class AdminUpdateAuthEventFeedbackRequest {
  public EventIdType $event_id;
  public FeedbackValueType $feedback_value;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminUpdateAuthEventFeedbackResponse {
}

class AdminUpdateDeviceStatusRequest {
  public DeviceKeyType $device_key;
  public DeviceRememberedStatusType $device_remembered_status;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminUpdateDeviceStatusResponse {
}

class AdminUpdateUserAttributesRequest {
  public ClientMetadataType $client_metadata;
  public AttributeListType $user_attributes;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminUpdateUserAttributesResponse {
}

class AdminUserGlobalSignOutRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminUserGlobalSignOutResponse {
}

class AdvancedSecurityModeType {
}

class AliasAttributeType {
}

class AliasAttributesListType {
}

class AliasExistsException {
  public MessageType $message;
}

class AnalyticsConfigurationType {
  public HexStringType $application_id;
  public StringType $external_id;
  public ArnType $role_arn;
  public BooleanType $user_data_shared;
}

class AnalyticsMetadataType {
  public StringType $analytics_endpoint_id;
}

class ArnType {
}

class AssociateSoftwareTokenRequest {
  public TokenModelType $access_token;
  public SessionType $session;
}

class AssociateSoftwareTokenResponse {
  public SecretCodeType $secret_code;
  public SessionType $session;
}

class AttributeDataType {
}

class AttributeListType {
}

class AttributeMappingKeyType {
}

class AttributeMappingType {
}

class AttributeNameListType {
}

class AttributeNameType {
}

class AttributeType {
  public AttributeNameType $name;
  public AttributeValueType $value;
}

class AttributeValueType {
}

class AuthEventType {
  public ChallengeResponseListType $challenge_responses;
  public DateType $creation_date;
  public EventContextDataType $event_context_data;
  public EventFeedbackType $event_feedback;
  public StringType $event_id;
  public EventResponseType $event_response;
  public EventRiskType $event_risk;
  public EventType $event_type;
}

class AuthEventsType {
}

class AuthFlowType {
}

class AuthParametersType {
}

class AuthParametersValueType {
}

class AuthenticationResultType {
  public TokenModelType $access_token;
  public IntegerType $expires_in;
  public TokenModelType $id_token;
  public NewDeviceMetadataType $new_device_metadata;
  public TokenModelType $refresh_token;
  public StringType $token_type;
}

class BlockedIPRangeListType {
}

class BooleanType {
}

class CSSType {
}

class CSSVersionType {
}

class CallbackURLsListType {
}

class ChallengeName {
}

class ChallengeNameType {
}

class ChallengeParametersType {
}

class ChallengeResponse {
}

class ChallengeResponseListType {
}

class ChallengeResponseType {
  public ChallengeName $challenge_name;
  public ChallengeResponse $challenge_response;
}

class ChallengeResponsesType {
}

class ChangePasswordRequest {
  public TokenModelType $access_token;
  public PasswordType $previous_password;
  public PasswordType $proposed_password;
}

class ChangePasswordResponse {
}

class ClientIdType {
}

class ClientMetadataType {
}

class ClientNameType {
}

class ClientPermissionListType {
}

class ClientPermissionType {
}

class ClientSecretType {
}

class CodeDeliveryDetailsListType {
}

class CodeDeliveryDetailsType {
  public AttributeNameType $attribute_name;
  public DeliveryMediumType $delivery_medium;
  public StringType $destination;
}

class CodeDeliveryFailureException {
  public MessageType $message;
}

class CodeMismatchException {
  public MessageType $message;
}

class CompletionMessageType {
}

class CompromisedCredentialsActionsType {
  public CompromisedCredentialsEventActionType $event_action;
}

class CompromisedCredentialsEventActionType {
}

class CompromisedCredentialsRiskConfigurationType {
  public CompromisedCredentialsActionsType $actions;
  public EventFiltersType $event_filter;
}

class ConcurrentModificationException {
  public MessageType $message;
}

class ConfirmDeviceRequest {
  public TokenModelType $access_token;
  public DeviceKeyType $device_key;
  public DeviceNameType $device_name;
  public DeviceSecretVerifierConfigType $device_secret_verifier_config;
}

class ConfirmDeviceResponse {
  public BooleanType $user_confirmation_necessary;
}

class ConfirmForgotPasswordRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public ConfirmationCodeType $confirmation_code;
  public PasswordType $password;
  public SecretHashType $secret_hash;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
}

class ConfirmForgotPasswordResponse {
}

class ConfirmSignUpRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public ConfirmationCodeType $confirmation_code;
  public ForceAliasCreation $force_alias_creation;
  public SecretHashType $secret_hash;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
}

class ConfirmSignUpResponse {
}

class ConfirmationCodeType {
}

class ContextDataType {
  public StringType $encoded_data;
  public HttpHeaderList $http_headers;
  public StringType $ip_address;
  public StringType $server_name;
  public StringType $server_path;
}

class CreateGroupRequest {
  public DescriptionType $description;
  public GroupNameType $group_name;
  public PrecedenceType $precedence;
  public ArnType $role_arn;
  public UserPoolIdType $user_pool_id;
}

class CreateGroupResponse {
  public GroupType $group;
}

class CreateIdentityProviderRequest {
  public AttributeMappingType $attribute_mapping;
  public IdpIdentifiersListType $idp_identifiers;
  public ProviderDetailsType $provider_details;
  public ProviderNameTypeV1 $provider_name;
  public IdentityProviderTypeType $provider_type;
  public UserPoolIdType $user_pool_id;
}

class CreateIdentityProviderResponse {
  public IdentityProviderType $identity_provider;
}

class CreateResourceServerRequest {
  public ResourceServerIdentifierType $identifier;
  public ResourceServerNameType $name;
  public ResourceServerScopeListType $scopes;
  public UserPoolIdType $user_pool_id;
}

class CreateResourceServerResponse {
  public ResourceServerType $resource_server;
}

class CreateUserImportJobRequest {
  public ArnType $cloud_watch_logs_role_arn;
  public UserImportJobNameType $job_name;
  public UserPoolIdType $user_pool_id;
}

class CreateUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class CreateUserPoolClientRequest {
  public OAuthFlowsType $allowed_o_auth_flows;
  public BooleanType $allowed_o_auth_flows_user_pool_client;
  public ScopeListType $allowed_o_auth_scopes;
  public AnalyticsConfigurationType $analytics_configuration;
  public CallbackURLsListType $callback_ur_ls;
  public ClientNameType $client_name;
  public RedirectUrlType $default_redirect_uri;
  public ExplicitAuthFlowsListType $explicit_auth_flows;
  public GenerateSecret $generate_secret;
  public LogoutURLsListType $logout_ur_ls;
  public PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public ClientPermissionListType $read_attributes;
  public RefreshTokenValidityType $refresh_token_validity;
  public SupportedIdentityProvidersListType $supported_identity_providers;
  public UserPoolIdType $user_pool_id;
  public ClientPermissionListType $write_attributes;
}

class CreateUserPoolClientResponse {
  public UserPoolClientType $user_pool_client;
}

class CreateUserPoolDomainRequest {
  public CustomDomainConfigType $custom_domain_config;
  public DomainType $domain;
  public UserPoolIdType $user_pool_id;
}

class CreateUserPoolDomainResponse {
  public DomainType $cloud_front_domain;
}

class CreateUserPoolRequest {
  public AccountRecoverySettingType $account_recovery_setting;
  public AdminCreateUserConfigType $admin_create_user_config;
  public AliasAttributesListType $alias_attributes;
  public VerifiedAttributesListType $auto_verified_attributes;
  public DeviceConfigurationType $device_configuration;
  public EmailConfigurationType $email_configuration;
  public EmailVerificationMessageType $email_verification_message;
  public EmailVerificationSubjectType $email_verification_subject;
  public LambdaConfigType $lambda_config;
  public UserPoolMfaType $mfa_configuration;
  public UserPoolPolicyType $policies;
  public UserPoolNameType $pool_name;
  public SchemaAttributesListType $schema;
  public SmsVerificationMessageType $sms_authentication_message;
  public SmsConfigurationType $sms_configuration;
  public SmsVerificationMessageType $sms_verification_message;
  public UserPoolAddOnsType $user_pool_add_ons;
  public UserPoolTagsType $user_pool_tags;
  public UsernameAttributesListType $username_attributes;
  public UsernameConfigurationType $username_configuration;
  public VerificationMessageTemplateType $verification_message_template;
}

class CreateUserPoolResponse {
  public UserPoolType $user_pool;
}

class CustomAttributeNameType {
}

class CustomAttributesListType {
}

class CustomDomainConfigType {
  public ArnType $certificate_arn;
}

class DateType {
}

class DefaultEmailOptionType {
}

class DeleteGroupRequest {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
}

class DeleteIdentityProviderRequest {
  public ProviderNameType $provider_name;
  public UserPoolIdType $user_pool_id;
}

class DeleteResourceServerRequest {
  public ResourceServerIdentifierType $identifier;
  public UserPoolIdType $user_pool_id;
}

class DeleteUserAttributesRequest {
  public TokenModelType $access_token;
  public AttributeNameListType $user_attribute_names;
}

class DeleteUserAttributesResponse {
}

class DeleteUserPoolClientRequest {
  public ClientIdType $client_id;
  public UserPoolIdType $user_pool_id;
}

class DeleteUserPoolDomainRequest {
  public DomainType $domain;
  public UserPoolIdType $user_pool_id;
}

class DeleteUserPoolDomainResponse {
}

class DeleteUserPoolRequest {
  public UserPoolIdType $user_pool_id;
}

class DeleteUserRequest {
  public TokenModelType $access_token;
}

class DeliveryMediumListType {
}

class DeliveryMediumType {
}

class DescribeIdentityProviderRequest {
  public ProviderNameType $provider_name;
  public UserPoolIdType $user_pool_id;
}

class DescribeIdentityProviderResponse {
  public IdentityProviderType $identity_provider;
}

class DescribeResourceServerRequest {
  public ResourceServerIdentifierType $identifier;
  public UserPoolIdType $user_pool_id;
}

class DescribeResourceServerResponse {
  public ResourceServerType $resource_server;
}

class DescribeRiskConfigurationRequest {
  public ClientIdType $client_id;
  public UserPoolIdType $user_pool_id;
}

class DescribeRiskConfigurationResponse {
  public RiskConfigurationType $risk_configuration;
}

class DescribeUserImportJobRequest {
  public UserImportJobIdType $job_id;
  public UserPoolIdType $user_pool_id;
}

class DescribeUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class DescribeUserPoolClientRequest {
  public ClientIdType $client_id;
  public UserPoolIdType $user_pool_id;
}

class DescribeUserPoolClientResponse {
  public UserPoolClientType $user_pool_client;
}

class DescribeUserPoolDomainRequest {
  public DomainType $domain;
}

class DescribeUserPoolDomainResponse {
  public DomainDescriptionType $domain_description;
}

class DescribeUserPoolRequest {
  public UserPoolIdType $user_pool_id;
}

class DescribeUserPoolResponse {
  public UserPoolType $user_pool;
}

class DescriptionType {
}

class DeviceConfigurationType {
  public BooleanType $challenge_required_on_new_device;
  public BooleanType $device_only_remembered_on_user_prompt;
}

class DeviceKeyType {
}

class DeviceListType {
}

class DeviceNameType {
}

class DeviceRememberedStatusType {
}

class DeviceSecretVerifierConfigType {
  public StringType $password_verifier;
  public StringType $salt;
}

class DeviceType {
  public AttributeListType $device_attributes;
  public DateType $device_create_date;
  public DeviceKeyType $device_key;
  public DateType $device_last_authenticated_date;
  public DateType $device_last_modified_date;
}

class DomainDescriptionType {
  public AWSAccountIdType $aws_account_id;
  public StringType $cloud_front_distribution;
  public CustomDomainConfigType $custom_domain_config;
  public DomainType $domain;
  public S3BucketType $s_3_bucket;
  public DomainStatusType $status;
  public UserPoolIdType $user_pool_id;
  public DomainVersionType $version;
}

class DomainStatusType {
}

class DomainType {
}

class DomainVersionType {
}

class DuplicateProviderException {
  public MessageType $message;
}

class EmailAddressType {
}

class EmailConfigurationType {
  public SESConfigurationSet $configuration_set;
  public EmailSendingAccountType $email_sending_account;
  public StringType $from;
  public EmailAddressType $reply_to_email_address;
  public ArnType $source_arn;
}

class EmailNotificationBodyType {
}

class EmailNotificationSubjectType {
}

class EmailSendingAccountType {
}

class EmailVerificationMessageByLinkType {
}

class EmailVerificationMessageType {
}

class EmailVerificationSubjectByLinkType {
}

class EmailVerificationSubjectType {
}

class EnableSoftwareTokenMFAException {
  public MessageType $message;
}

class EventContextDataType {
  public StringType $city;
  public StringType $country;
  public StringType $device_name;
  public StringType $ip_address;
  public StringType $timezone;
}

class EventFeedbackType {
  public DateType $feedback_date;
  public FeedbackValueType $feedback_value;
  public StringType $provider;
}

class EventFilterType {
}

class EventFiltersType {
}

class EventIdType {
}

class EventResponseType {
}

class EventRiskType {
  public WrappedBooleanType $compromised_credentials_detected;
  public RiskDecisionType $risk_decision;
  public RiskLevelType $risk_level;
}

class EventType {
}

class ExpiredCodeException {
  public MessageType $message;
}

class ExplicitAuthFlowsListType {
}

class ExplicitAuthFlowsType {
}

class FeedbackValueType {
}

class ForceAliasCreation {
}

class ForgetDeviceRequest {
  public TokenModelType $access_token;
  public DeviceKeyType $device_key;
}

class ForgotPasswordRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public SecretHashType $secret_hash;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
}

class ForgotPasswordResponse {
  public CodeDeliveryDetailsType $code_delivery_details;
}

class GenerateSecret {
}

class GetCSVHeaderRequest {
  public UserPoolIdType $user_pool_id;
}

class GetCSVHeaderResponse {
  public ListOfStringTypes $csv_header;
  public UserPoolIdType $user_pool_id;
}

class GetDeviceRequest {
  public TokenModelType $access_token;
  public DeviceKeyType $device_key;
}

class GetDeviceResponse {
  public DeviceType $device;
}

class GetGroupRequest {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
}

class GetGroupResponse {
  public GroupType $group;
}

class GetIdentityProviderByIdentifierRequest {
  public IdpIdentifierType $idp_identifier;
  public UserPoolIdType $user_pool_id;
}

class GetIdentityProviderByIdentifierResponse {
  public IdentityProviderType $identity_provider;
}

class GetSigningCertificateRequest {
  public UserPoolIdType $user_pool_id;
}

class GetSigningCertificateResponse {
  public StringType $certificate;
}

class GetUICustomizationRequest {
  public ClientIdType $client_id;
  public UserPoolIdType $user_pool_id;
}

class GetUICustomizationResponse {
  public UICustomizationType $ui_customization;
}

class GetUserAttributeVerificationCodeRequest {
  public TokenModelType $access_token;
  public AttributeNameType $attribute_name;
  public ClientMetadataType $client_metadata;
}

class GetUserAttributeVerificationCodeResponse {
  public CodeDeliveryDetailsType $code_delivery_details;
}

class GetUserPoolMfaConfigRequest {
  public UserPoolIdType $user_pool_id;
}

class GetUserPoolMfaConfigResponse {
  public UserPoolMfaType $mfa_configuration;
  public SmsMfaConfigType $sms_mfa_configuration;
  public SoftwareTokenMfaConfigType $software_token_mfa_configuration;
}

class GetUserRequest {
  public TokenModelType $access_token;
}

class GetUserResponse {
  public MFAOptionListType $mfa_options;
  public StringType $preferred_mfa_setting;
  public AttributeListType $user_attributes;
  public UserMFASettingListType $user_mfa_setting_list;
  public UsernameType $username;
}

class GlobalSignOutRequest {
  public TokenModelType $access_token;
}

class GlobalSignOutResponse {
}

class GroupExistsException {
  public MessageType $message;
}

class GroupListType {
}

class GroupNameType {
}

class GroupType {
  public DateType $creation_date;
  public DescriptionType $description;
  public GroupNameType $group_name;
  public DateType $last_modified_date;
  public PrecedenceType $precedence;
  public ArnType $role_arn;
  public UserPoolIdType $user_pool_id;
}

class HexStringType {
}

class HttpHeader {
  public StringType $header_name;
  public StringType $header_value;
}

class HttpHeaderList {
}

class IdentityProviderType {
  public AttributeMappingType $attribute_mapping;
  public DateType $creation_date;
  public IdpIdentifiersListType $idp_identifiers;
  public DateType $last_modified_date;
  public ProviderDetailsType $provider_details;
  public ProviderNameType $provider_name;
  public IdentityProviderTypeType $provider_type;
  public UserPoolIdType $user_pool_id;
}

class IdentityProviderTypeType {
}

class IdpIdentifierType {
}

class IdpIdentifiersListType {
}

class ImageFileType {
}

class ImageUrlType {
}

class InitiateAuthRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public AuthFlowType $auth_flow;
  public AuthParametersType $auth_parameters;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public UserContextDataType $user_context_data;
}

class InitiateAuthResponse {
  public AuthenticationResultType $authentication_result;
  public ChallengeNameType $challenge_name;
  public ChallengeParametersType $challenge_parameters;
  public SessionType $session;
}

class IntegerType {
}

class InternalErrorException {
  public MessageType $message;
}

class InvalidEmailRoleAccessPolicyException {
  public MessageType $message;
}

class InvalidLambdaResponseException {
  public MessageType $message;
}

class InvalidOAuthFlowException {
  public MessageType $message;
}

class InvalidParameterException {
  public MessageType $message;
}

class InvalidPasswordException {
  public MessageType $message;
}

class InvalidSmsRoleAccessPolicyException {
  public MessageType $message;
}

class InvalidSmsRoleTrustRelationshipException {
  public MessageType $message;
}

class InvalidUserPoolConfigurationException {
  public MessageType $message;
}

class LambdaConfigType {
  public ArnType $create_auth_challenge;
  public ArnType $custom_message;
  public ArnType $define_auth_challenge;
  public ArnType $post_authentication;
  public ArnType $post_confirmation;
  public ArnType $pre_authentication;
  public ArnType $pre_sign_up;
  public ArnType $pre_token_generation;
  public ArnType $user_migration;
  public ArnType $verify_auth_challenge_response;
}

class LimitExceededException {
  public MessageType $message;
}

class ListDevicesRequest {
  public TokenModelType $access_token;
  public QueryLimitType $limit;
  public SearchPaginationTokenType $pagination_token;
}

class ListDevicesResponse {
  public DeviceListType $devices;
  public SearchPaginationTokenType $pagination_token;
}

class ListGroupsRequest {
  public QueryLimitType $limit;
  public PaginationKey $next_token;
  public UserPoolIdType $user_pool_id;
}

class ListGroupsResponse {
  public GroupListType $groups;
  public PaginationKey $next_token;
}

class ListIdentityProvidersRequest {
  public ListProvidersLimitType $max_results;
  public PaginationKeyType $next_token;
  public UserPoolIdType $user_pool_id;
}

class ListIdentityProvidersResponse {
  public PaginationKeyType $next_token;
  public ProvidersListType $providers;
}

class ListOfStringTypes {
}

class ListProvidersLimitType {
}

class ListResourceServersLimitType {
}

class ListResourceServersRequest {
  public ListResourceServersLimitType $max_results;
  public PaginationKeyType $next_token;
  public UserPoolIdType $user_pool_id;
}

class ListResourceServersResponse {
  public PaginationKeyType $next_token;
  public ResourceServersListType $resource_servers;
}

class ListTagsForResourceRequest {
  public ArnType $resource_arn;
}

class ListTagsForResourceResponse {
  public UserPoolTagsType $tags;
}

class ListUserImportJobsRequest {
  public PoolQueryLimitType $max_results;
  public PaginationKeyType $pagination_token;
  public UserPoolIdType $user_pool_id;
}

class ListUserImportJobsResponse {
  public PaginationKeyType $pagination_token;
  public UserImportJobsListType $user_import_jobs;
}

class ListUserPoolClientsRequest {
  public QueryLimit $max_results;
  public PaginationKey $next_token;
  public UserPoolIdType $user_pool_id;
}

class ListUserPoolClientsResponse {
  public PaginationKey $next_token;
  public UserPoolClientListType $user_pool_clients;
}

class ListUserPoolsRequest {
  public PoolQueryLimitType $max_results;
  public PaginationKeyType $next_token;
}

class ListUserPoolsResponse {
  public PaginationKeyType $next_token;
  public UserPoolListType $user_pools;
}

class ListUsersInGroupRequest {
  public GroupNameType $group_name;
  public QueryLimitType $limit;
  public PaginationKey $next_token;
  public UserPoolIdType $user_pool_id;
}

class ListUsersInGroupResponse {
  public PaginationKey $next_token;
  public UsersListType $users;
}

class ListUsersRequest {
  public SearchedAttributeNamesListType $attributes_to_get;
  public UserFilterType $filter;
  public QueryLimitType $limit;
  public SearchPaginationTokenType $pagination_token;
  public UserPoolIdType $user_pool_id;
}

class ListUsersResponse {
  public SearchPaginationTokenType $pagination_token;
  public UsersListType $users;
}

class LogoutURLsListType {
}

class LongType {
}

class MFAMethodNotFoundException {
  public MessageType $message;
}

class MFAOptionListType {
}

class MFAOptionType {
  public AttributeNameType $attribute_name;
  public DeliveryMediumType $delivery_medium;
}

class MessageActionType {
}

class MessageTemplateType {
  public EmailVerificationMessageType $email_message;
  public EmailVerificationSubjectType $email_subject;
  public SmsVerificationMessageType $sms_message;
}

class MessageType {
}

class NewDeviceMetadataType {
  public StringType $device_group_key;
  public DeviceKeyType $device_key;
}

class NotAuthorizedException {
  public MessageType $message;
}

class NotifyConfigurationType {
  public NotifyEmailType $block_email;
  public StringType $from;
  public NotifyEmailType $mfa_email;
  public NotifyEmailType $no_action_email;
  public StringType $reply_to;
  public ArnType $source_arn;
}

class NotifyEmailType {
  public EmailNotificationBodyType $html_body;
  public EmailNotificationSubjectType $subject;
  public EmailNotificationBodyType $text_body;
}

class NumberAttributeConstraintsType {
  public StringType $max_value;
  public StringType $min_value;
}

class OAuthFlowType {
}

class OAuthFlowsType {
}

class PaginationKey {
}

class PaginationKeyType {
}

class PasswordPolicyMinLengthType {
}

class PasswordPolicyType {
  public PasswordPolicyMinLengthType $minimum_length;
  public BooleanType $require_lowercase;
  public BooleanType $require_numbers;
  public BooleanType $require_symbols;
  public BooleanType $require_uppercase;
  public TemporaryPasswordValidityDaysType $temporary_password_validity_days;
}

class PasswordResetRequiredException {
  public MessageType $message;
}

class PasswordType {
}

class PoolQueryLimitType {
}

class PreSignedUrlType {
}

class PrecedenceType {
}

class PreconditionNotMetException {
  public MessageType $message;
}

class PreventUserExistenceErrorTypes {
}

class PriorityType {
}

class ProviderDescription {
  public DateType $creation_date;
  public DateType $last_modified_date;
  public ProviderNameType $provider_name;
  public IdentityProviderTypeType $provider_type;
}

class ProviderDetailsType {
}

class ProviderNameType {
}

class ProviderNameTypeV1 {
}

class ProviderUserIdentifierType {
  public StringType $provider_attribute_name;
  public StringType $provider_attribute_value;
  public ProviderNameType $provider_name;
}

class ProvidersListType {
}

class QueryLimit {
}

class QueryLimitType {
}

class RecoveryMechanismsType {
}

class RecoveryOptionNameType {
}

class RecoveryOptionType {
  public RecoveryOptionNameType $name;
  public PriorityType $priority;
}

class RedirectUrlType {
}

class RefreshTokenValidityType {
}

class ResendConfirmationCodeRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public SecretHashType $secret_hash;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
}

class ResendConfirmationCodeResponse {
  public CodeDeliveryDetailsType $code_delivery_details;
}

class ResourceNotFoundException {
  public MessageType $message;
}

class ResourceServerIdentifierType {
}

class ResourceServerNameType {
}

class ResourceServerScopeDescriptionType {
}

class ResourceServerScopeListType {
}

class ResourceServerScopeNameType {
}

class ResourceServerScopeType {
  public ResourceServerScopeDescriptionType $scope_description;
  public ResourceServerScopeNameType $scope_name;
}

class ResourceServerType {
  public ResourceServerIdentifierType $identifier;
  public ResourceServerNameType $name;
  public ResourceServerScopeListType $scopes;
  public UserPoolIdType $user_pool_id;
}

class ResourceServersListType {
}

class RespondToAuthChallengeRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public ChallengeNameType $challenge_name;
  public ChallengeResponsesType $challenge_responses;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public SessionType $session;
  public UserContextDataType $user_context_data;
}

class RespondToAuthChallengeResponse {
  public AuthenticationResultType $authentication_result;
  public ChallengeNameType $challenge_name;
  public ChallengeParametersType $challenge_parameters;
  public SessionType $session;
}

class RiskConfigurationType {
  public AccountTakeoverRiskConfigurationType $account_takeover_risk_configuration;
  public ClientIdType $client_id;
  public CompromisedCredentialsRiskConfigurationType $compromised_credentials_risk_configuration;
  public DateType $last_modified_date;
  public RiskExceptionConfigurationType $risk_exception_configuration;
  public UserPoolIdType $user_pool_id;
}

class RiskDecisionType {
}

class RiskExceptionConfigurationType {
  public BlockedIPRangeListType $blocked_ip_range_list;
  public SkippedIPRangeListType $skipped_ip_range_list;
}

class RiskLevelType {
}

class S3BucketType {
}

class SESConfigurationSet {
}

class SMSMfaSettingsType {
  public BooleanType $enabled;
  public BooleanType $preferred_mfa;
}

class SchemaAttributeType {
  public AttributeDataType $attribute_data_type;
  public BooleanType $developer_only_attribute;
  public BooleanType $mutable;
  public CustomAttributeNameType $name;
  public NumberAttributeConstraintsType $number_attribute_constraints;
  public BooleanType $required;
  public StringAttributeConstraintsType $string_attribute_constraints;
}

class SchemaAttributesListType {
}

class ScopeDoesNotExistException {
  public MessageType $message;
}

class ScopeListType {
}

class ScopeType {
}

class SearchPaginationTokenType {
}

class SearchedAttributeNamesListType {
}

class SecretCodeType {
}

class SecretHashType {
}

class SessionType {
}

class SetRiskConfigurationRequest {
  public AccountTakeoverRiskConfigurationType $account_takeover_risk_configuration;
  public ClientIdType $client_id;
  public CompromisedCredentialsRiskConfigurationType $compromised_credentials_risk_configuration;
  public RiskExceptionConfigurationType $risk_exception_configuration;
  public UserPoolIdType $user_pool_id;
}

class SetRiskConfigurationResponse {
  public RiskConfigurationType $risk_configuration;
}

class SetUICustomizationRequest {
  public CSSType $css;
  public ClientIdType $client_id;
  public ImageFileType $image_file;
  public UserPoolIdType $user_pool_id;
}

class SetUICustomizationResponse {
  public UICustomizationType $ui_customization;
}

class SetUserMFAPreferenceRequest {
  public TokenModelType $access_token;
  public SMSMfaSettingsType $sms_mfa_settings;
  public SoftwareTokenMfaSettingsType $software_token_mfa_settings;
}

class SetUserMFAPreferenceResponse {
}

class SetUserPoolMfaConfigRequest {
  public UserPoolMfaType $mfa_configuration;
  public SmsMfaConfigType $sms_mfa_configuration;
  public SoftwareTokenMfaConfigType $software_token_mfa_configuration;
  public UserPoolIdType $user_pool_id;
}

class SetUserPoolMfaConfigResponse {
  public UserPoolMfaType $mfa_configuration;
  public SmsMfaConfigType $sms_mfa_configuration;
  public SoftwareTokenMfaConfigType $software_token_mfa_configuration;
}

class SetUserSettingsRequest {
  public TokenModelType $access_token;
  public MFAOptionListType $mfa_options;
}

class SetUserSettingsResponse {
}

class SignUpRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public ClientIdType $client_id;
  public ClientMetadataType $client_metadata;
  public PasswordType $password;
  public SecretHashType $secret_hash;
  public AttributeListType $user_attributes;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
  public AttributeListType $validation_data;
}

class SignUpResponse {
  public CodeDeliveryDetailsType $code_delivery_details;
  public BooleanType $user_confirmed;
  public StringType $user_sub;
}

class SkippedIPRangeListType {
}

class SmsConfigurationType {
  public StringType $external_id;
  public ArnType $sns_caller_arn;
}

class SmsMfaConfigType {
  public SmsVerificationMessageType $sms_authentication_message;
  public SmsConfigurationType $sms_configuration;
}

class SmsVerificationMessageType {
}

class SoftwareTokenMFANotFoundException {
  public MessageType $message;
}

class SoftwareTokenMFAUserCodeType {
}

class SoftwareTokenMfaConfigType {
  public BooleanType $enabled;
}

class SoftwareTokenMfaSettingsType {
  public BooleanType $enabled;
  public BooleanType $preferred_mfa;
}

class StartUserImportJobRequest {
  public UserImportJobIdType $job_id;
  public UserPoolIdType $user_pool_id;
}

class StartUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class StatusType {
}

class StopUserImportJobRequest {
  public UserImportJobIdType $job_id;
  public UserPoolIdType $user_pool_id;
}

class StopUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class StringAttributeConstraintsType {
  public StringType $max_length;
  public StringType $min_length;
}

class StringType {
}

class SupportedIdentityProvidersListType {
}

class TagKeysType {
}

class TagResourceRequest {
  public ArnType $resource_arn;
  public UserPoolTagsType $tags;
}

class TagResourceResponse {
}

class TagValueType {
}

class TemporaryPasswordValidityDaysType {
}

class TokenModelType {
}

class TooManyFailedAttemptsException {
  public MessageType $message;
}

class TooManyRequestsException {
  public MessageType $message;
}

class UICustomizationType {
  public CSSType $css;
  public CSSVersionType $css_version;
  public ClientIdType $client_id;
  public DateType $creation_date;
  public ImageUrlType $image_url;
  public DateType $last_modified_date;
  public UserPoolIdType $user_pool_id;
}

class UnexpectedLambdaException {
  public MessageType $message;
}

class UnsupportedIdentityProviderException {
  public MessageType $message;
}

class UnsupportedUserStateException {
  public MessageType $message;
}

class UntagResourceRequest {
  public ArnType $resource_arn;
  public UserPoolTagsListType $tag_keys;
}

class UntagResourceResponse {
}

class UpdateAuthEventFeedbackRequest {
  public EventIdType $event_id;
  public TokenModelType $feedback_token;
  public FeedbackValueType $feedback_value;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class UpdateAuthEventFeedbackResponse {
}

class UpdateDeviceStatusRequest {
  public TokenModelType $access_token;
  public DeviceKeyType $device_key;
  public DeviceRememberedStatusType $device_remembered_status;
}

class UpdateDeviceStatusResponse {
}

class UpdateGroupRequest {
  public DescriptionType $description;
  public GroupNameType $group_name;
  public PrecedenceType $precedence;
  public ArnType $role_arn;
  public UserPoolIdType $user_pool_id;
}

class UpdateGroupResponse {
  public GroupType $group;
}

class UpdateIdentityProviderRequest {
  public AttributeMappingType $attribute_mapping;
  public IdpIdentifiersListType $idp_identifiers;
  public ProviderDetailsType $provider_details;
  public ProviderNameType $provider_name;
  public UserPoolIdType $user_pool_id;
}

class UpdateIdentityProviderResponse {
  public IdentityProviderType $identity_provider;
}

class UpdateResourceServerRequest {
  public ResourceServerIdentifierType $identifier;
  public ResourceServerNameType $name;
  public ResourceServerScopeListType $scopes;
  public UserPoolIdType $user_pool_id;
}

class UpdateResourceServerResponse {
  public ResourceServerType $resource_server;
}

class UpdateUserAttributesRequest {
  public TokenModelType $access_token;
  public ClientMetadataType $client_metadata;
  public AttributeListType $user_attributes;
}

class UpdateUserAttributesResponse {
  public CodeDeliveryDetailsListType $code_delivery_details_list;
}

class UpdateUserPoolClientRequest {
  public OAuthFlowsType $allowed_o_auth_flows;
  public BooleanType $allowed_o_auth_flows_user_pool_client;
  public ScopeListType $allowed_o_auth_scopes;
  public AnalyticsConfigurationType $analytics_configuration;
  public CallbackURLsListType $callback_ur_ls;
  public ClientIdType $client_id;
  public ClientNameType $client_name;
  public RedirectUrlType $default_redirect_uri;
  public ExplicitAuthFlowsListType $explicit_auth_flows;
  public LogoutURLsListType $logout_ur_ls;
  public PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public ClientPermissionListType $read_attributes;
  public RefreshTokenValidityType $refresh_token_validity;
  public SupportedIdentityProvidersListType $supported_identity_providers;
  public UserPoolIdType $user_pool_id;
  public ClientPermissionListType $write_attributes;
}

class UpdateUserPoolClientResponse {
  public UserPoolClientType $user_pool_client;
}

class UpdateUserPoolDomainRequest {
  public CustomDomainConfigType $custom_domain_config;
  public DomainType $domain;
  public UserPoolIdType $user_pool_id;
}

class UpdateUserPoolDomainResponse {
  public DomainType $cloud_front_domain;
}

class UpdateUserPoolRequest {
  public AccountRecoverySettingType $account_recovery_setting;
  public AdminCreateUserConfigType $admin_create_user_config;
  public VerifiedAttributesListType $auto_verified_attributes;
  public DeviceConfigurationType $device_configuration;
  public EmailConfigurationType $email_configuration;
  public EmailVerificationMessageType $email_verification_message;
  public EmailVerificationSubjectType $email_verification_subject;
  public LambdaConfigType $lambda_config;
  public UserPoolMfaType $mfa_configuration;
  public UserPoolPolicyType $policies;
  public SmsVerificationMessageType $sms_authentication_message;
  public SmsConfigurationType $sms_configuration;
  public SmsVerificationMessageType $sms_verification_message;
  public UserPoolAddOnsType $user_pool_add_ons;
  public UserPoolIdType $user_pool_id;
  public UserPoolTagsType $user_pool_tags;
  public VerificationMessageTemplateType $verification_message_template;
}

class UpdateUserPoolResponse {
}

class UserContextDataType {
  public StringType $encoded_data;
}

class UserFilterType {
}

class UserImportInProgressException {
  public MessageType $message;
}

class UserImportJobIdType {
}

class UserImportJobNameType {
}

class UserImportJobStatusType {
}

class UserImportJobType {
  public ArnType $cloud_watch_logs_role_arn;
  public DateType $completion_date;
  public CompletionMessageType $completion_message;
  public DateType $creation_date;
  public LongType $failed_users;
  public LongType $imported_users;
  public UserImportJobIdType $job_id;
  public UserImportJobNameType $job_name;
  public PreSignedUrlType $pre_signed_url;
  public LongType $skipped_users;
  public DateType $start_date;
  public UserImportJobStatusType $status;
  public UserPoolIdType $user_pool_id;
}

class UserImportJobsListType {
}

class UserLambdaValidationException {
  public MessageType $message;
}

class UserMFASettingListType {
}

class UserNotConfirmedException {
  public MessageType $message;
}

class UserNotFoundException {
  public MessageType $message;
}

class UserPoolAddOnNotEnabledException {
  public MessageType $message;
}

class UserPoolAddOnsType {
  public AdvancedSecurityModeType $advanced_security_mode;
}

class UserPoolClientDescription {
  public ClientIdType $client_id;
  public ClientNameType $client_name;
  public UserPoolIdType $user_pool_id;
}

class UserPoolClientListType {
}

class UserPoolClientType {
  public OAuthFlowsType $allowed_o_auth_flows;
  public BooleanType $allowed_o_auth_flows_user_pool_client;
  public ScopeListType $allowed_o_auth_scopes;
  public AnalyticsConfigurationType $analytics_configuration;
  public CallbackURLsListType $callback_ur_ls;
  public ClientIdType $client_id;
  public ClientNameType $client_name;
  public ClientSecretType $client_secret;
  public DateType $creation_date;
  public RedirectUrlType $default_redirect_uri;
  public ExplicitAuthFlowsListType $explicit_auth_flows;
  public DateType $last_modified_date;
  public LogoutURLsListType $logout_ur_ls;
  public PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public ClientPermissionListType $read_attributes;
  public RefreshTokenValidityType $refresh_token_validity;
  public SupportedIdentityProvidersListType $supported_identity_providers;
  public UserPoolIdType $user_pool_id;
  public ClientPermissionListType $write_attributes;
}

class UserPoolDescriptionType {
  public DateType $creation_date;
  public UserPoolIdType $id;
  public LambdaConfigType $lambda_config;
  public DateType $last_modified_date;
  public UserPoolNameType $name;
  public StatusType $status;
}

class UserPoolIdType {
}

class UserPoolListType {
}

class UserPoolMfaType {
}

class UserPoolNameType {
}

class UserPoolPolicyType {
  public PasswordPolicyType $password_policy;
}

class UserPoolTaggingException {
  public MessageType $message;
}

class UserPoolTagsListType {
}

class UserPoolTagsType {
}

class UserPoolType {
  public AccountRecoverySettingType $account_recovery_setting;
  public AdminCreateUserConfigType $admin_create_user_config;
  public AliasAttributesListType $alias_attributes;
  public ArnType $arn;
  public VerifiedAttributesListType $auto_verified_attributes;
  public DateType $creation_date;
  public DomainType $custom_domain;
  public DeviceConfigurationType $device_configuration;
  public DomainType $domain;
  public EmailConfigurationType $email_configuration;
  public StringType $email_configuration_failure;
  public EmailVerificationMessageType $email_verification_message;
  public EmailVerificationSubjectType $email_verification_subject;
  public IntegerType $estimated_number_of_users;
  public UserPoolIdType $id;
  public LambdaConfigType $lambda_config;
  public DateType $last_modified_date;
  public UserPoolMfaType $mfa_configuration;
  public UserPoolNameType $name;
  public UserPoolPolicyType $policies;
  public SchemaAttributesListType $schema_attributes;
  public SmsVerificationMessageType $sms_authentication_message;
  public SmsConfigurationType $sms_configuration;
  public StringType $sms_configuration_failure;
  public SmsVerificationMessageType $sms_verification_message;
  public StatusType $status;
  public UserPoolAddOnsType $user_pool_add_ons;
  public UserPoolTagsType $user_pool_tags;
  public UsernameAttributesListType $username_attributes;
  public UsernameConfigurationType $username_configuration;
  public VerificationMessageTemplateType $verification_message_template;
}

class UserStatusType {
}

class UserType {
  public AttributeListType $attributes;
  public BooleanType $enabled;
  public MFAOptionListType $mfa_options;
  public DateType $user_create_date;
  public DateType $user_last_modified_date;
  public UserStatusType $user_status;
  public UsernameType $username;
}

class UsernameAttributeType {
}

class UsernameAttributesListType {
}

class UsernameConfigurationType {
  public WrappedBooleanType $case_sensitive;
}

class UsernameExistsException {
  public MessageType $message;
}

class UsernameType {
}

class UsersListType {
}

class VerificationMessageTemplateType {
  public DefaultEmailOptionType $default_email_option;
  public EmailVerificationMessageType $email_message;
  public EmailVerificationMessageByLinkType $email_message_by_link;
  public EmailVerificationSubjectType $email_subject;
  public EmailVerificationSubjectByLinkType $email_subject_by_link;
  public SmsVerificationMessageType $sms_message;
}

class VerifiedAttributeType {
}

class VerifiedAttributesListType {
}

class VerifySoftwareTokenRequest {
  public TokenModelType $access_token;
  public StringType $friendly_device_name;
  public SessionType $session;
  public SoftwareTokenMFAUserCodeType $user_code;
}

class VerifySoftwareTokenResponse {
  public SessionType $session;
  public VerifySoftwareTokenResponseType $status;
}

class VerifySoftwareTokenResponseType {
}

class VerifyUserAttributeRequest {
  public TokenModelType $access_token;
  public AttributeNameType $attribute_name;
  public ConfirmationCodeType $code;
}

class VerifyUserAttributeResponse {
}

class WrappedBooleanType {
}

