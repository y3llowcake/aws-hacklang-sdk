<?hh // strict
namespace slack\aws\cognito-idp;

interface Cognito Identity Provider {
  public function DeleteUserPoolDomain(DeleteUserPoolDomainRequest) Awaitable<Errors\Result<DeleteUserPoolDomainResponse>>;
  public function UpdateUserPoolClient(UpdateUserPoolClientRequest) Awaitable<Errors\Result<UpdateUserPoolClientResponse>>;
  public function RespondToAuthChallenge(RespondToAuthChallengeRequest) Awaitable<Errors\Result<RespondToAuthChallengeResponse>>;
  public function SignUp(SignUpRequest) Awaitable<Errors\Result<SignUpResponse>>;
  public function AdminAddUserToGroup(AdminAddUserToGroupRequest) Awaitable<Errors\Error>;
  public function AdminRemoveUserFromGroup(AdminRemoveUserFromGroupRequest) Awaitable<Errors\Error>;
  public function AdminRespondToAuthChallenge(AdminRespondToAuthChallengeRequest) Awaitable<Errors\Result<AdminRespondToAuthChallengeResponse>>;
  public function AdminUpdateAuthEventFeedback(AdminUpdateAuthEventFeedbackRequest) Awaitable<Errors\Result<AdminUpdateAuthEventFeedbackResponse>>;
  public function CreateResourceServer(CreateResourceServerRequest) Awaitable<Errors\Result<CreateResourceServerResponse>>;
  public function UpdateUserAttributes(UpdateUserAttributesRequest) Awaitable<Errors\Result<UpdateUserAttributesResponse>>;
  public function CreateUserPool(CreateUserPoolRequest) Awaitable<Errors\Result<CreateUserPoolResponse>>;
  public function CreateUserPoolDomain(CreateUserPoolDomainRequest) Awaitable<Errors\Result<CreateUserPoolDomainResponse>>;
  public function DescribeIdentityProvider(DescribeIdentityProviderRequest) Awaitable<Errors\Result<DescribeIdentityProviderResponse>>;
  public function GetUICustomization(GetUICustomizationRequest) Awaitable<Errors\Result<GetUICustomizationResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function CreateGroup(CreateGroupRequest) Awaitable<Errors\Result<CreateGroupResponse>>;
  public function DeleteGroup(DeleteGroupRequest) Awaitable<Errors\Error>;
  public function DescribeUserPool(DescribeUserPoolRequest) Awaitable<Errors\Result<DescribeUserPoolResponse>>;
  public function AdminDeleteUserAttributes(AdminDeleteUserAttributesRequest) Awaitable<Errors\Result<AdminDeleteUserAttributesResponse>>;
  public function AdminGetDevice(AdminGetDeviceRequest) Awaitable<Errors\Result<AdminGetDeviceResponse>>;
  public function AdminInitiateAuth(AdminInitiateAuthRequest) Awaitable<Errors\Result<AdminInitiateAuthResponse>>;
  public function AdminSetUserPassword(AdminSetUserPasswordRequest) Awaitable<Errors\Result<AdminSetUserPasswordResponse>>;
  public function ConfirmForgotPassword(ConfirmForgotPasswordRequest) Awaitable<Errors\Result<ConfirmForgotPasswordResponse>>;
  public function UpdateDeviceStatus(UpdateDeviceStatusRequest) Awaitable<Errors\Result<UpdateDeviceStatusResponse>>;
  public function GlobalSignOut(GlobalSignOutRequest) Awaitable<Errors\Result<GlobalSignOutResponse>>;
  public function InitiateAuth(InitiateAuthRequest) Awaitable<Errors\Result<InitiateAuthResponse>>;
  public function ListGroups(ListGroupsRequest) Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ListResourceServers(ListResourceServersRequest) Awaitable<Errors\Result<ListResourceServersResponse>>;
  public function StopUserImportJob(StopUserImportJobRequest) Awaitable<Errors\Result<StopUserImportJobResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function SetRiskConfiguration(SetRiskConfigurationRequest) Awaitable<Errors\Result<SetRiskConfigurationResponse>>;
  public function StartUserImportJob(StartUserImportJobRequest) Awaitable<Errors\Result<StartUserImportJobResponse>>;
  public function AdminCreateUser(AdminCreateUserRequest) Awaitable<Errors\Result<AdminCreateUserResponse>>;
  public function AdminListGroupsForUser(AdminListGroupsForUserRequest) Awaitable<Errors\Result<AdminListGroupsForUserResponse>>;
  public function CreateUserImportJob(CreateUserImportJobRequest) Awaitable<Errors\Result<CreateUserImportJobResponse>>;
  public function DescribeRiskConfiguration(DescribeRiskConfigurationRequest) Awaitable<Errors\Result<DescribeRiskConfigurationResponse>>;
  public function GetDevice(GetDeviceRequest) Awaitable<Errors\Result<GetDeviceResponse>>;
  public function UpdateIdentityProvider(UpdateIdentityProviderRequest) Awaitable<Errors\Result<UpdateIdentityProviderResponse>>;
  public function UpdateUserPool(UpdateUserPoolRequest) Awaitable<Errors\Result<UpdateUserPoolResponse>>;
  public function AdminResetUserPassword(AdminResetUserPasswordRequest) Awaitable<Errors\Result<AdminResetUserPasswordResponse>>;
  public function DeleteUserPoolClient(DeleteUserPoolClientRequest) Awaitable<Errors\Error>;
  public function DescribeUserPoolDomain(DescribeUserPoolDomainRequest) Awaitable<Errors\Result<DescribeUserPoolDomainResponse>>;
  public function GetCSVHeader(GetCSVHeaderRequest) Awaitable<Errors\Result<GetCSVHeaderResponse>>;
  public function SetUserMFAPreference(SetUserMFAPreferenceRequest) Awaitable<Errors\Result<SetUserMFAPreferenceResponse>>;
  public function UpdateResourceServer(UpdateResourceServerRequest) Awaitable<Errors\Result<UpdateResourceServerResponse>>;
  public function VerifySoftwareToken(VerifySoftwareTokenRequest) Awaitable<Errors\Result<VerifySoftwareTokenResponse>>;
  public function AdminEnableUser(AdminEnableUserRequest) Awaitable<Errors\Result<AdminEnableUserResponse>>;
  public function AdminSetUserMFAPreference(AdminSetUserMFAPreferenceRequest) Awaitable<Errors\Result<AdminSetUserMFAPreferenceResponse>>;
  public function AdminUpdateUserAttributes(AdminUpdateUserAttributesRequest) Awaitable<Errors\Result<AdminUpdateUserAttributesResponse>>;
  public function GetIdentityProviderByIdentifier(GetIdentityProviderByIdentifierRequest) Awaitable<Errors\Result<GetIdentityProviderByIdentifierResponse>>;
  public function UpdateAuthEventFeedback(UpdateAuthEventFeedbackRequest) Awaitable<Errors\Result<UpdateAuthEventFeedbackResponse>>;
  public function AdminDisableProviderForUser(AdminDisableProviderForUserRequest) Awaitable<Errors\Result<AdminDisableProviderForUserResponse>>;
  public function CreateIdentityProvider(CreateIdentityProviderRequest) Awaitable<Errors\Result<CreateIdentityProviderResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function VerifyUserAttribute(VerifyUserAttributeRequest) Awaitable<Errors\Result<VerifyUserAttributeResponse>>;
  public function AdminDeleteUser(AdminDeleteUserRequest) Awaitable<Errors\Error>;
  public function AssociateSoftwareToken(AssociateSoftwareTokenRequest) Awaitable<Errors\Result<AssociateSoftwareTokenResponse>>;
  public function ConfirmSignUp(ConfirmSignUpRequest) Awaitable<Errors\Result<ConfirmSignUpResponse>>;
  public function GetUserAttributeVerificationCode(GetUserAttributeVerificationCodeRequest) Awaitable<Errors\Result<GetUserAttributeVerificationCodeResponse>>;
  public function ListUserPoolClients(ListUserPoolClientsRequest) Awaitable<Errors\Result<ListUserPoolClientsResponse>>;
  public function AdminLinkProviderForUser(AdminLinkProviderForUserRequest) Awaitable<Errors\Result<AdminLinkProviderForUserResponse>>;
  public function GetSigningCertificate(GetSigningCertificateRequest) Awaitable<Errors\Result<GetSigningCertificateResponse>>;
  public function UpdateUserPoolDomain(UpdateUserPoolDomainRequest) Awaitable<Errors\Result<UpdateUserPoolDomainResponse>>;
  public function ListUsersInGroup(ListUsersInGroupRequest) Awaitable<Errors\Result<ListUsersInGroupResponse>>;
  public function UpdateGroup(UpdateGroupRequest) Awaitable<Errors\Result<UpdateGroupResponse>>;
  public function AdminListDevices(AdminListDevicesRequest) Awaitable<Errors\Result<AdminListDevicesResponse>>;
  public function AdminListUserAuthEvents(AdminListUserAuthEventsRequest) Awaitable<Errors\Result<AdminListUserAuthEventsResponse>>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Error>;
  public function DescribeResourceServer(DescribeResourceServerRequest) Awaitable<Errors\Result<DescribeResourceServerResponse>>;
  public function ListIdentityProviders(ListIdentityProvidersRequest) Awaitable<Errors\Result<ListIdentityProvidersResponse>>;
  public function DescribeUserPoolClient(DescribeUserPoolClientRequest) Awaitable<Errors\Result<DescribeUserPoolClientResponse>>;
  public function ListDevices(ListDevicesRequest) Awaitable<Errors\Result<ListDevicesResponse>>;
  public function SetUICustomization(SetUICustomizationRequest) Awaitable<Errors\Result<SetUICustomizationResponse>>;
  public function AdminConfirmSignUp(AdminConfirmSignUpRequest) Awaitable<Errors\Result<AdminConfirmSignUpResponse>>;
  public function AdminDisableUser(AdminDisableUserRequest) Awaitable<Errors\Result<AdminDisableUserResponse>>;
  public function AdminSetUserSettings(AdminSetUserSettingsRequest) Awaitable<Errors\Result<AdminSetUserSettingsResponse>>;
  public function AdminUpdateDeviceStatus(AdminUpdateDeviceStatusRequest) Awaitable<Errors\Result<AdminUpdateDeviceStatusResponse>>;
  public function ChangePassword(ChangePasswordRequest) Awaitable<Errors\Result<ChangePasswordResponse>>;
  public function SetUserPoolMfaConfig(SetUserPoolMfaConfigRequest) Awaitable<Errors\Result<SetUserPoolMfaConfigResponse>>;
  public function ResendConfirmationCode(ResendConfirmationCodeRequest) Awaitable<Errors\Result<ResendConfirmationCodeResponse>>;
  public function AdminForgetDevice(AdminForgetDeviceRequest) Awaitable<Errors\Error>;
  public function AdminUserGlobalSignOut(AdminUserGlobalSignOutRequest) Awaitable<Errors\Result<AdminUserGlobalSignOutResponse>>;
  public function DeleteUserAttributes(DeleteUserAttributesRequest) Awaitable<Errors\Result<DeleteUserAttributesResponse>>;
  public function GetUser(GetUserRequest) Awaitable<Errors\Result<GetUserResponse>>;
  public function GetUserPoolMfaConfig(GetUserPoolMfaConfigRequest) Awaitable<Errors\Result<GetUserPoolMfaConfigResponse>>;
  public function ListUserImportJobs(ListUserImportJobsRequest) Awaitable<Errors\Result<ListUserImportJobsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function AddCustomAttributes(AddCustomAttributesRequest) Awaitable<Errors\Result<AddCustomAttributesResponse>>;
  public function AdminGetUser(AdminGetUserRequest) Awaitable<Errors\Result<AdminGetUserResponse>>;
  public function DeleteIdentityProvider(DeleteIdentityProviderRequest) Awaitable<Errors\Error>;
  public function DeleteUserPool(DeleteUserPoolRequest) Awaitable<Errors\Error>;
  public function DescribeUserImportJob(DescribeUserImportJobRequest) Awaitable<Errors\Result<DescribeUserImportJobResponse>>;
  public function SetUserSettings(SetUserSettingsRequest) Awaitable<Errors\Result<SetUserSettingsResponse>>;
  public function DeleteResourceServer(DeleteResourceServerRequest) Awaitable<Errors\Error>;
  public function ForgetDevice(ForgetDeviceRequest) Awaitable<Errors\Error>;
  public function ForgotPassword(ForgotPasswordRequest) Awaitable<Errors\Result<ForgotPasswordResponse>>;
  public function GetGroup(GetGroupRequest) Awaitable<Errors\Result<GetGroupResponse>>;
  public function ListUserPools(ListUserPoolsRequest) Awaitable<Errors\Result<ListUserPoolsResponse>>;
  public function ConfirmDevice(ConfirmDeviceRequest) Awaitable<Errors\Result<ConfirmDeviceResponse>>;
  public function CreateUserPoolClient(CreateUserPoolClientRequest) Awaitable<Errors\Result<CreateUserPoolClientResponse>>;
}

class PrecedenceType {
}

class SignUpResponse {
  public BooleanType $user_confirmed;
  public CodeDeliveryDetailsType $code_delivery_details;
  public StringType $user_sub;
}

class UpdateDeviceStatusResponse {
}

class VerifySoftwareTokenRequest {
  public TokenModelType $access_token;
  public SessionType $session;
  public SoftwareTokenMFAUserCodeType $user_code;
  public StringType $friendly_device_name;
}

class AdminGetUserRequest {
  public UsernameType $username;
  public UserPoolIdType $user_pool_id;
}

class AliasAttributesListType {
}

class DeliveryMediumListType {
}

class InvalidPasswordException {
  public MessageType $message;
}

class AdminRespondToAuthChallengeResponse {
  public ChallengeNameType $challenge_name;
  public SessionType $session;
  public ChallengeParametersType $challenge_parameters;
  public AuthenticationResultType $authentication_result;
}

class AuthParametersType {
}

class ChallengeResponseType {
  public ChallengeName $challenge_name;
  public ChallengeResponse $challenge_response;
}

class ResourceServerIdentifierType {
}

class EmailAddressType {
}

class UserImportJobStatusType {
}

class UserPoolAddOnsType {
  public AdvancedSecurityModeType $advanced_security_mode;
}

class UpdateUserPoolClientRequest {
  public RedirectUrlType $default_redirect_uri;
  public AnalyticsConfigurationType $analytics_configuration;
  public BooleanType $allowed_o_auth_flows_user_pool_client;
  public ClientNameType $client_name;
  public RefreshTokenValidityType $refresh_token_validity;
  public OAuthFlowsType $allowed_o_auth_flows;
  public ScopeListType $allowed_o_auth_scopes;
  public LogoutURLsListType $logout_ur_ls;
  public ClientPermissionListType $read_attributes;
  public ClientPermissionListType $write_attributes;
  public SupportedIdentityProvidersListType $supported_identity_providers;
  public CallbackURLsListType $callback_ur_ls;
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
  public ExplicitAuthFlowsListType $explicit_auth_flows;
  public PreventUserExistenceErrorTypes $prevent_user_existence_errors;
}

class UserPoolTagsListType {
}

class ExpiredCodeException {
  public MessageType $message;
}

class RecoveryOptionType {
  public PriorityType $priority;
  public RecoveryOptionNameType $name;
}

class TemporaryPasswordValidityDaysType {
}

class StartUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class UserPoolClientDescription {
  public ClientNameType $client_name;
  public ClientIdType $client_id;
  public UserPoolIdType $user_pool_id;
}

class AdminDeleteUserAttributesRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public AttributeNameListType $user_attribute_names;
}

class DeviceListType {
}

class ProvidersListType {
}

class ScopeListType {
}

class SoftwareTokenMfaConfigType {
  public BooleanType $enabled;
}

class BlockedIPRangeListType {
}

class DescriptionType {
}

class SoftwareTokenMFAUserCodeType {
}

class UserPoolNameType {
}

class InvalidSmsRoleTrustRelationshipException {
  public MessageType $message;
}

class QueryLimit {
}

class AliasExistsException {
  public MessageType $message;
}

class RecoveryMechanismsType {
}

class AdminUpdateDeviceStatusResponse {
}

class RiskDecisionType {
}

class SchemaAttributeType {
  public CustomAttributeNameType $name;
  public AttributeDataType $attribute_data_type;
  public BooleanType $developer_only_attribute;
  public BooleanType $mutable;
  public BooleanType $required;
  public NumberAttributeConstraintsType $number_attribute_constraints;
  public StringAttributeConstraintsType $string_attribute_constraints;
}

class LongType {
}

class CustomAttributesListType {
}

class GetGroupRequest {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
}

class UpdateUserPoolClientResponse {
  public UserPoolClientType $user_pool_client;
}

class AdminInitiateAuthRequest {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
  public AuthFlowType $auth_flow;
  public AuthParametersType $auth_parameters;
  public ClientMetadataType $client_metadata;
  public AnalyticsMetadataType $analytics_metadata;
  public ContextDataType $context_data;
}

class AdminSetUserMFAPreferenceRequest {
  public SMSMfaSettingsType $sms_mfa_settings;
  public SoftwareTokenMfaSettingsType $software_token_mfa_settings;
  public UsernameType $username;
  public UserPoolIdType $user_pool_id;
}

class CompletionMessageType {
}

class UserPoolType {
  public AliasAttributesListType $alias_attributes;
  public EmailVerificationSubjectType $email_verification_subject;
  public UserPoolMfaType $mfa_configuration;
  public UserPoolTagsType $user_pool_tags;
  public DateType $last_modified_date;
  public VerifiedAttributesListType $auto_verified_attributes;
  public VerificationMessageTemplateType $verification_message_template;
  public StringType $sms_configuration_failure;
  public ArnType $arn;
  public UserPoolPolicyType $policies;
  public StatusType $status;
  public UsernameAttributesListType $username_attributes;
  public DateType $creation_date;
  public SmsVerificationMessageType $sms_authentication_message;
  public UsernameConfigurationType $username_configuration;
  public UserPoolIdType $id;
  public UserPoolNameType $name;
  public EmailVerificationMessageType $email_verification_message;
  public AdminCreateUserConfigType $admin_create_user_config;
  public SchemaAttributesListType $schema_attributes;
  public IntegerType $estimated_number_of_users;
  public StringType $email_configuration_failure;
  public DomainType $domain;
  public DomainType $custom_domain;
  public UserPoolAddOnsType $user_pool_add_ons;
  public AccountRecoverySettingType $account_recovery_setting;
  public LambdaConfigType $lambda_config;
  public DeviceConfigurationType $device_configuration;
  public SmsConfigurationType $sms_configuration;
  public SmsVerificationMessageType $sms_verification_message;
  public EmailConfigurationType $email_configuration;
}

class DescribeResourceServerResponse {
  public ResourceServerType $resource_server;
}

class EnableSoftwareTokenMFAException {
  public MessageType $message;
}

class InternalErrorException {
  public MessageType $message;
}

class AdminConfirmSignUpResponse {
}

class EmailSendingAccountType {
}

class ImageFileType {
}

class SetRiskConfigurationRequest {
  public AccountTakeoverRiskConfigurationType $account_takeover_risk_configuration;
  public RiskExceptionConfigurationType $risk_exception_configuration;
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
  public CompromisedCredentialsRiskConfigurationType $compromised_credentials_risk_configuration;
}

class UpdateResourceServerResponse {
  public ResourceServerType $resource_server;
}

class UpdateUserAttributesResponse {
  public CodeDeliveryDetailsListType $code_delivery_details_list;
}

class GroupListType {
}

class HexStringType {
}

class ListUserImportJobsRequest {
  public UserPoolIdType $user_pool_id;
  public PoolQueryLimitType $max_results;
  public PaginationKeyType $pagination_token;
}

class MFAMethodNotFoundException {
  public MessageType $message;
}

class UserImportJobNameType {
}

class AttributeValueType {
}

class DescribeIdentityProviderRequest {
  public UserPoolIdType $user_pool_id;
  public ProviderNameType $provider_name;
}

class ListTagsForResourceRequest {
  public ArnType $resource_arn;
}

class HttpHeaderList {
}

class RiskConfigurationType {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
  public CompromisedCredentialsRiskConfigurationType $compromised_credentials_risk_configuration;
  public AccountTakeoverRiskConfigurationType $account_takeover_risk_configuration;
  public RiskExceptionConfigurationType $risk_exception_configuration;
  public DateType $last_modified_date;
}

class RiskLevelType {
}

class CreateUserPoolDomainResponse {
  public DomainType $cloud_front_domain;
}

class NotifyEmailType {
  public EmailNotificationBodyType $html_body;
  public EmailNotificationBodyType $text_body;
  public EmailNotificationSubjectType $subject;
}

class RefreshTokenValidityType {
}

class SkippedIPRangeListType {
}

class UICustomizationType {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
  public ImageUrlType $image_url;
  public CSSType $css;
  public CSSVersionType $css_version;
  public DateType $last_modified_date;
  public DateType $creation_date;
}

class UpdateUserPoolRequest {
  public AdminCreateUserConfigType $admin_create_user_config;
  public VerifiedAttributesListType $auto_verified_attributes;
  public EmailVerificationMessageType $email_verification_message;
  public DeviceConfigurationType $device_configuration;
  public EmailConfigurationType $email_configuration;
  public UserPoolTagsType $user_pool_tags;
  public UserPoolPolicyType $policies;
  public SmsVerificationMessageType $sms_verification_message;
  public SmsConfigurationType $sms_configuration;
  public LambdaConfigType $lambda_config;
  public VerificationMessageTemplateType $verification_message_template;
  public UserPoolAddOnsType $user_pool_add_ons;
  public AccountRecoverySettingType $account_recovery_setting;
  public UserPoolIdType $user_pool_id;
  public EmailVerificationSubjectType $email_verification_subject;
  public SmsVerificationMessageType $sms_authentication_message;
  public UserPoolMfaType $mfa_configuration;
}

class AdminAddUserToGroupRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public GroupNameType $group_name;
}

class ClientNameType {
}

class DeleteResourceServerRequest {
  public UserPoolIdType $user_pool_id;
  public ResourceServerIdentifierType $identifier;
}

class ResourceNotFoundException {
  public MessageType $message;
}

class UpdateUserPoolResponse {
}

class UserMFASettingListType {
}

class AttributeNameListType {
}

class ChallengeParametersType {
}

class DescribeRiskConfigurationRequest {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
}

class EventFiltersType {
}

class ChangePasswordRequest {
  public PasswordType $previous_password;
  public PasswordType $proposed_password;
  public TokenModelType $access_token;
}

class NotAuthorizedException {
  public MessageType $message;
}

class AdminListDevicesRequest {
  public QueryLimitType $limit;
  public SearchPaginationTokenType $pagination_token;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class ClientPermissionType {
}

class ListDevicesResponse {
  public DeviceListType $devices;
  public SearchPaginationTokenType $pagination_token;
}

class UsernameConfigurationType {
  public WrappedBooleanType $case_sensitive;
}

class DeleteUserAttributesRequest {
  public TokenModelType $access_token;
  public AttributeNameListType $user_attribute_names;
}

class InvalidLambdaResponseException {
  public MessageType $message;
}

class InvalidOAuthFlowException {
  public MessageType $message;
}

class GetIdentityProviderByIdentifierResponse {
  public IdentityProviderType $identity_provider;
}

class IntegerType {
}

class DescribeRiskConfigurationResponse {
  public RiskConfigurationType $risk_configuration;
}

class EventFilterType {
}

class IdentityProviderType {
  public UserPoolIdType $user_pool_id;
  public ProviderNameType $provider_name;
  public IdentityProviderTypeType $provider_type;
  public ProviderDetailsType $provider_details;
  public AttributeMappingType $attribute_mapping;
  public IdpIdentifiersListType $idp_identifiers;
  public DateType $last_modified_date;
  public DateType $creation_date;
}

class ConfirmDeviceRequest {
  public DeviceKeyType $device_key;
  public DeviceSecretVerifierConfigType $device_secret_verifier_config;
  public DeviceNameType $device_name;
  public TokenModelType $access_token;
}

class CustomDomainConfigType {
  public ArnType $certificate_arn;
}

class VerificationMessageTemplateType {
  public EmailVerificationMessageType $email_message;
  public EmailVerificationSubjectType $email_subject;
  public EmailVerificationMessageByLinkType $email_message_by_link;
  public EmailVerificationSubjectByLinkType $email_subject_by_link;
  public DefaultEmailOptionType $default_email_option;
  public SmsVerificationMessageType $sms_message;
}

class AdminDisableUserResponse {
}

class UpdateGroupRequest {
  public ArnType $role_arn;
  public PrecedenceType $precedence;
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
  public DescriptionType $description;
}

class DescribeUserImportJobRequest {
  public UserPoolIdType $user_pool_id;
  public UserImportJobIdType $job_id;
}

class NotifyConfigurationType {
  public NotifyEmailType $block_email;
  public NotifyEmailType $no_action_email;
  public NotifyEmailType $mfa_email;
  public StringType $from;
  public StringType $reply_to;
  public ArnType $source_arn;
}

class RedirectUrlType {
}

class AdminUpdateAuthEventFeedbackResponse {
}

class CSSVersionType {
}

class EmailVerificationMessageType {
}

class ResendConfirmationCodeRequest {
  public ClientIdType $client_id;
  public SecretHashType $secret_hash;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
  public AnalyticsMetadataType $analytics_metadata;
  public ClientMetadataType $client_metadata;
}

class SoftwareTokenMfaSettingsType {
  public BooleanType $enabled;
  public BooleanType $preferred_mfa;
}

class VerifySoftwareTokenResponseType {
}

class AdminDeleteUserAttributesResponse {
}

class CreateUserPoolRequest {
  public LambdaConfigType $lambda_config;
  public EmailVerificationMessageType $email_verification_message;
  public VerificationMessageTemplateType $verification_message_template;
  public EmailConfigurationType $email_configuration;
  public SmsConfigurationType $sms_configuration;
  public UsernameConfigurationType $username_configuration;
  public UserPoolPolicyType $policies;
  public AliasAttributesListType $alias_attributes;
  public UsernameAttributesListType $username_attributes;
  public SmsVerificationMessageType $sms_verification_message;
  public EmailVerificationSubjectType $email_verification_subject;
  public UserPoolNameType $pool_name;
  public UserPoolMfaType $mfa_configuration;
  public AdminCreateUserConfigType $admin_create_user_config;
  public UserPoolAddOnsType $user_pool_add_ons;
  public SmsVerificationMessageType $sms_authentication_message;
  public DeviceConfigurationType $device_configuration;
  public UserPoolTagsType $user_pool_tags;
  public SchemaAttributesListType $schema;
  public AccountRecoverySettingType $account_recovery_setting;
  public VerifiedAttributesListType $auto_verified_attributes;
}

class GetGroupResponse {
  public GroupType $group;
}

class RespondToAuthChallengeRequest {
  public AnalyticsMetadataType $analytics_metadata;
  public UserContextDataType $user_context_data;
  public ClientMetadataType $client_metadata;
  public ClientIdType $client_id;
  public ChallengeNameType $challenge_name;
  public SessionType $session;
  public ChallengeResponsesType $challenge_responses;
}

class SchemaAttributesListType {
}

class AdminListDevicesResponse {
  public DeviceListType $devices;
  public SearchPaginationTokenType $pagination_token;
}

class AdminSetUserMFAPreferenceResponse {
}

class GetCSVHeaderRequest {
  public UserPoolIdType $user_pool_id;
}

class GroupType {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
  public DescriptionType $description;
  public ArnType $role_arn;
  public PrecedenceType $precedence;
  public DateType $last_modified_date;
  public DateType $creation_date;
}

class AdminResetUserPasswordRequest {
  public ClientMetadataType $client_metadata;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class CompromisedCredentialsRiskConfigurationType {
  public EventFiltersType $event_filter;
  public CompromisedCredentialsActionsType $actions;
}

class ForgotPasswordRequest {
  public ClientIdType $client_id;
  public SecretHashType $secret_hash;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
  public AnalyticsMetadataType $analytics_metadata;
  public ClientMetadataType $client_metadata;
}

class SetRiskConfigurationResponse {
  public RiskConfigurationType $risk_configuration;
}

class StringType {
}

class AdminUpdateDeviceStatusRequest {
  public DeviceRememberedStatusType $device_remembered_status;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public DeviceKeyType $device_key;
}

class AuthFlowType {
}

class ResourceServersListType {
}

class DeviceSecretVerifierConfigType {
  public StringType $password_verifier;
  public StringType $salt;
}

class IdpIdentifiersListType {
}

class DeleteIdentityProviderRequest {
  public UserPoolIdType $user_pool_id;
  public ProviderNameType $provider_name;
}

class UserPoolTagsType {
}

class AdminSetUserSettingsResponse {
}

class CodeDeliveryDetailsListType {
}

class ConfirmSignUpResponse {
}

class AdminDeleteUserRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class DuplicateProviderException {
  public MessageType $message;
}

class UserImportJobsListType {
}

class InitiateAuthRequest {
  public ClientMetadataType $client_metadata;
  public ClientIdType $client_id;
  public AnalyticsMetadataType $analytics_metadata;
  public UserContextDataType $user_context_data;
  public AuthFlowType $auth_flow;
  public AuthParametersType $auth_parameters;
}

class SupportedIdentityProvidersListType {
}

class ChallengeName {
}

class DeviceConfigurationType {
  public BooleanType $challenge_required_on_new_device;
  public BooleanType $device_only_remembered_on_user_prompt;
}

class GetUserRequest {
  public TokenModelType $access_token;
}

class PasswordResetRequiredException {
  public MessageType $message;
}

class BooleanType {
}

class CreateUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class DeleteUserRequest {
  public TokenModelType $access_token;
}

class ForceAliasCreation {
}

class AddCustomAttributesRequest {
  public UserPoolIdType $user_pool_id;
  public CustomAttributesListType $custom_attributes;
}

class AuthParametersValueType {
}

class ListUserPoolClientsRequest {
  public UserPoolIdType $user_pool_id;
  public QueryLimit $max_results;
  public PaginationKey $next_token;
}

class PasswordType {
}

class UserPoolPolicyType {
  public PasswordPolicyType $password_policy;
}

class AdminSetUserPasswordRequest {
  public UsernameType $username;
  public PasswordType $password;
  public BooleanType $permanent;
  public UserPoolIdType $user_pool_id;
}

class AdminSetUserPasswordResponse {
}

class ArnType {
}

class GetCSVHeaderResponse {
  public UserPoolIdType $user_pool_id;
  public ListOfStringTypes $csv_header;
}

class GetUserResponse {
  public UsernameType $username;
  public AttributeListType $user_attributes;
  public MFAOptionListType $mfa_options;
  public StringType $preferred_mfa_setting;
  public UserMFASettingListType $user_mfa_setting_list;
}

class TagValueType {
}

class AssociateSoftwareTokenRequest {
  public TokenModelType $access_token;
  public SessionType $session;
}

class ExplicitAuthFlowsType {
}

class UserFilterType {
}

class UserNotConfirmedException {
  public MessageType $message;
}

class LambdaConfigType {
  public ArnType $pre_sign_up;
  public ArnType $custom_message;
  public ArnType $post_confirmation;
  public ArnType $verify_auth_challenge_response;
  public ArnType $pre_authentication;
  public ArnType $post_authentication;
  public ArnType $define_auth_challenge;
  public ArnType $create_auth_challenge;
  public ArnType $pre_token_generation;
  public ArnType $user_migration;
}

class PriorityType {
}

class RespondToAuthChallengeResponse {
  public SessionType $session;
  public ChallengeParametersType $challenge_parameters;
  public AuthenticationResultType $authentication_result;
  public ChallengeNameType $challenge_name;
}

class CreateUserPoolClientRequest {
  public CallbackURLsListType $callback_ur_ls;
  public LogoutURLsListType $logout_ur_ls;
  public UserPoolIdType $user_pool_id;
  public ClientNameType $client_name;
  public ClientPermissionListType $read_attributes;
  public RedirectUrlType $default_redirect_uri;
  public BooleanType $allowed_o_auth_flows_user_pool_client;
  public AnalyticsConfigurationType $analytics_configuration;
  public PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public GenerateSecret $generate_secret;
  public RefreshTokenValidityType $refresh_token_validity;
  public ClientPermissionListType $write_attributes;
  public OAuthFlowsType $allowed_o_auth_flows;
  public ScopeListType $allowed_o_auth_scopes;
  public ExplicitAuthFlowsListType $explicit_auth_flows;
  public SupportedIdentityProvidersListType $supported_identity_providers;
}

class HttpHeader {
  public StringType $header_name;
  public StringType $header_value;
}

class UserNotFoundException {
  public MessageType $message;
}

class AttributeType {
  public AttributeNameType $name;
  public AttributeValueType $value;
}

class ChallengeResponseListType {
}

class DescribeResourceServerRequest {
  public UserPoolIdType $user_pool_id;
  public ResourceServerIdentifierType $identifier;
}

class ListUsersInGroupResponse {
  public UsersListType $users;
  public PaginationKey $next_token;
}

class AdminListGroupsForUserResponse {
  public GroupListType $groups;
  public PaginationKey $next_token;
}

class AdminUpdateAuthEventFeedbackRequest {
  public EventIdType $event_id;
  public FeedbackValueType $feedback_value;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class CustomAttributeNameType {
}

class DescribeUserPoolResponse {
  public UserPoolType $user_pool;
}

class ImageUrlType {
}

class ListResourceServersLimitType {
}

class SMSMfaSettingsType {
  public BooleanType $enabled;
  public BooleanType $preferred_mfa;
}

class AuthEventType {
  public EventFeedbackType $event_feedback;
  public StringType $event_id;
  public EventType $event_type;
  public DateType $creation_date;
  public EventResponseType $event_response;
  public EventRiskType $event_risk;
  public ChallengeResponseListType $challenge_responses;
  public EventContextDataType $event_context_data;
}

class ContextDataType {
  public StringType $ip_address;
  public StringType $server_name;
  public StringType $server_path;
  public HttpHeaderList $http_headers;
  public StringType $encoded_data;
}

class MFAOptionType {
  public DeliveryMediumType $delivery_medium;
  public AttributeNameType $attribute_name;
}

class UserPoolMfaType {
}

class AttributeMappingType {
}

class AdminCreateUserConfigType {
  public BooleanType $allow_admin_create_user_only;
  public AdminCreateUserUnusedAccountValidityDaysType $unused_account_validity_days;
  public MessageTemplateType $invite_message_template;
}

class DeleteUserPoolDomainRequest {
  public DomainType $domain;
  public UserPoolIdType $user_pool_id;
}

class NumberAttributeConstraintsType {
  public StringType $min_value;
  public StringType $max_value;
}

class TooManyRequestsException {
  public MessageType $message;
}

class UserPoolAddOnNotEnabledException {
  public MessageType $message;
}

class CreateIdentityProviderResponse {
  public IdentityProviderType $identity_provider;
}

class DescribeUserPoolDomainRequest {
  public DomainType $domain;
}

class GetDeviceRequest {
  public DeviceKeyType $device_key;
  public TokenModelType $access_token;
}

class GetUserAttributeVerificationCodeRequest {
  public TokenModelType $access_token;
  public AttributeNameType $attribute_name;
  public ClientMetadataType $client_metadata;
}

class PasswordPolicyMinLengthType {
}

class TooManyFailedAttemptsException {
  public MessageType $message;
}

class ClientMetadataType {
}

class DescribeUserPoolRequest {
  public UserPoolIdType $user_pool_id;
}

class ResourceServerScopeListType {
}

class StopUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class ClientPermissionListType {
}

class InitiateAuthResponse {
  public ChallengeNameType $challenge_name;
  public SessionType $session;
  public ChallengeParametersType $challenge_parameters;
  public AuthenticationResultType $authentication_result;
}

class InvalidUserPoolConfigurationException {
  public MessageType $message;
}

class ListGroupsResponse {
  public GroupListType $groups;
  public PaginationKey $next_token;
}

class EventResponseType {
}

class LogoutURLsListType {
}

class AdminUserGlobalSignOutResponse {
}

class AliasAttributeType {
}

class SetUserSettingsRequest {
  public TokenModelType $access_token;
  public MFAOptionListType $mfa_options;
}

class TagResourceResponse {
}

class UserImportInProgressException {
  public MessageType $message;
}

class AdminGetDeviceResponse {
  public DeviceType $device;
}

class MFAOptionListType {
}

class SetUserPoolMfaConfigRequest {
  public UserPoolIdType $user_pool_id;
  public SmsMfaConfigType $sms_mfa_configuration;
  public SoftwareTokenMfaConfigType $software_token_mfa_configuration;
  public UserPoolMfaType $mfa_configuration;
}

class WrappedBooleanType {
}

class SetUICustomizationResponse {
  public UICustomizationType $ui_customization;
}

class StatusType {
}

class UserImportJobIdType {
}

class CreateIdentityProviderRequest {
  public UserPoolIdType $user_pool_id;
  public ProviderNameTypeV1 $provider_name;
  public IdentityProviderTypeType $provider_type;
  public ProviderDetailsType $provider_details;
  public AttributeMappingType $attribute_mapping;
  public IdpIdentifiersListType $idp_identifiers;
}

class CreateUserPoolResponse {
  public UserPoolType $user_pool;
}

class ListUserPoolsResponse {
  public UserPoolListType $user_pools;
  public PaginationKeyType $next_token;
}

class ProviderDescription {
  public ProviderNameType $provider_name;
  public IdentityProviderTypeType $provider_type;
  public DateType $last_modified_date;
  public DateType $creation_date;
}

class ScopeDoesNotExistException {
  public MessageType $message;
}

class ListUserImportJobsResponse {
  public PaginationKeyType $pagination_token;
  public UserImportJobsListType $user_import_jobs;
}

class ListUsersRequest {
  public SearchedAttributeNamesListType $attributes_to_get;
  public QueryLimitType $limit;
  public SearchPaginationTokenType $pagination_token;
  public UserFilterType $filter;
  public UserPoolIdType $user_pool_id;
}

class ListUsersResponse {
  public UsersListType $users;
  public SearchPaginationTokenType $pagination_token;
}

class UsernameAttributeType {
}

class VerifiedAttributesListType {
}

class AdminListUserAuthEventsResponse {
  public AuthEventsType $auth_events;
  public PaginationKey $next_token;
}

class AnalyticsConfigurationType {
  public HexStringType $application_id;
  public ArnType $role_arn;
  public StringType $external_id;
  public BooleanType $user_data_shared;
}

class GetDeviceResponse {
  public DeviceType $device;
}

class UnexpectedLambdaException {
  public MessageType $message;
}

class UpdateGroupResponse {
  public GroupType $group;
}

class UserStatusType {
}

class AdminLinkProviderForUserResponse {
}

class ListIdentityProvidersRequest {
  public UserPoolIdType $user_pool_id;
  public ListProvidersLimitType $max_results;
  public PaginationKeyType $next_token;
}

class PaginationKey {
}

class QueryLimitType {
}

class AdminEnableUserRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class GlobalSignOutResponse {
}

class CompromisedCredentialsActionsType {
  public CompromisedCredentialsEventActionType $event_action;
}

class AccountTakeoverActionType {
  public AccountTakeoverActionNotifyType $notify;
  public AccountTakeoverEventActionType $event_action;
}

class AdminCreateUserUnusedAccountValidityDaysType {
}

class AnalyticsMetadataType {
  public StringType $analytics_endpoint_id;
}

class PreventUserExistenceErrorTypes {
}

class UserPoolClientListType {
}

class DomainDescriptionType {
  public DomainStatusType $status;
  public CustomDomainConfigType $custom_domain_config;
  public UserPoolIdType $user_pool_id;
  public AWSAccountIdType $aws_account_id;
  public DomainType $domain;
  public S3BucketType $s_3_bucket;
  public StringType $cloud_front_distribution;
  public DomainVersionType $version;
}

class GetSigningCertificateRequest {
  public UserPoolIdType $user_pool_id;
}

class UserImportJobType {
  public UserImportJobIdType $job_id;
  public UserPoolIdType $user_pool_id;
  public ArnType $cloud_watch_logs_role_arn;
  public LongType $imported_users;
  public LongType $skipped_users;
  public CompletionMessageType $completion_message;
  public UserImportJobNameType $job_name;
  public DateType $creation_date;
  public DateType $start_date;
  public DateType $completion_date;
  public UserImportJobStatusType $status;
  public LongType $failed_users;
  public PreSignedUrlType $pre_signed_url;
}

class AttributeDataType {
}

class UpdateAuthEventFeedbackResponse {
}

class ConcurrentModificationException {
  public MessageType $message;
}

class CreateResourceServerResponse {
  public ResourceServerType $resource_server;
}

class PoolQueryLimitType {
}

class ProviderUserIdentifierType {
  public ProviderNameType $provider_name;
  public StringType $provider_attribute_name;
  public StringType $provider_attribute_value;
}

class AdminInitiateAuthResponse {
  public ChallengeNameType $challenge_name;
  public SessionType $session;
  public ChallengeParametersType $challenge_parameters;
  public AuthenticationResultType $authentication_result;
}

class ClientIdType {
}

class PreSignedUrlType {
}

class AdminListGroupsForUserRequest {
  public UsernameType $username;
  public UserPoolIdType $user_pool_id;
  public QueryLimitType $limit;
  public PaginationKey $next_token;
}

class CreateUserImportJobRequest {
  public UserPoolIdType $user_pool_id;
  public ArnType $cloud_watch_logs_role_arn;
  public UserImportJobNameType $job_name;
}

class DescribeIdentityProviderResponse {
  public IdentityProviderType $identity_provider;
}

class DeviceKeyType {
}

class DomainVersionType {
}

class DescribeUserPoolClientRequest {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
}

class ProviderNameTypeV1 {
}

class SmsMfaConfigType {
  public SmsVerificationMessageType $sms_authentication_message;
  public SmsConfigurationType $sms_configuration;
}

class ChallengeResponsesType {
}

class CodeMismatchException {
  public MessageType $message;
}

class CreateUserPoolDomainRequest {
  public DomainType $domain;
  public UserPoolIdType $user_pool_id;
  public CustomDomainConfigType $custom_domain_config;
}

class ClientSecretType {
}

class GetUserAttributeVerificationCodeResponse {
  public CodeDeliveryDetailsType $code_delivery_details;
}

class MessageType {
}

class TokenModelType {
}

class AdminDisableProviderForUserRequest {
  public StringType $user_pool_id;
  public ProviderUserIdentifierType $user;
}

class ChallengeNameType {
}

class ChangePasswordResponse {
}

class LimitExceededException {
  public MessageType $message;
}

class SetUserPoolMfaConfigResponse {
  public SmsMfaConfigType $sms_mfa_configuration;
  public SoftwareTokenMfaConfigType $software_token_mfa_configuration;
  public UserPoolMfaType $mfa_configuration;
}

class UserPoolDescriptionType {
  public LambdaConfigType $lambda_config;
  public StatusType $status;
  public DateType $last_modified_date;
  public DateType $creation_date;
  public UserPoolIdType $id;
  public UserPoolNameType $name;
}

class AdminDisableUserRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminEnableUserResponse {
}

class CompromisedCredentialsEventActionType {
}

class ListGroupsRequest {
  public UserPoolIdType $user_pool_id;
  public QueryLimitType $limit;
  public PaginationKey $next_token;
}

class UpdateIdentityProviderRequest {
  public UserPoolIdType $user_pool_id;
  public ProviderNameType $provider_name;
  public ProviderDetailsType $provider_details;
  public AttributeMappingType $attribute_mapping;
  public IdpIdentifiersListType $idp_identifiers;
}

class AdminGetUserResponse {
  public AttributeListType $user_attributes;
  public StringType $preferred_mfa_setting;
  public UserMFASettingListType $user_mfa_setting_list;
  public UsernameType $username;
  public DateType $user_create_date;
  public DateType $user_last_modified_date;
  public BooleanType $enabled;
  public UserStatusType $user_status;
  public MFAOptionListType $mfa_options;
}

class AdminListUserAuthEventsRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public QueryLimitType $max_results;
  public PaginationKey $next_token;
}

class CodeDeliveryDetailsType {
  public StringType $destination;
  public DeliveryMediumType $delivery_medium;
  public AttributeNameType $attribute_name;
}

class EventContextDataType {
  public StringType $ip_address;
  public StringType $device_name;
  public StringType $timezone;
  public StringType $city;
  public StringType $country;
}

class SetUICustomizationRequest {
  public ImageFileType $image_file;
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
  public CSSType $css;
}

class AdminDisableProviderForUserResponse {
}

class CSSType {
}

class DateType {
}

class ForgotPasswordResponse {
  public CodeDeliveryDetailsType $code_delivery_details;
}

class ListUserPoolClientsResponse {
  public UserPoolClientListType $user_pool_clients;
  public PaginationKey $next_token;
}

class ProviderNameType {
}

class AdminCreateUserRequest {
  public DeliveryMediumListType $desired_delivery_mediums;
  public ClientMetadataType $client_metadata;
  public AttributeListType $user_attributes;
  public PasswordType $temporary_password;
  public ForceAliasCreation $force_alias_creation;
  public MessageActionType $message_action;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public AttributeListType $validation_data;
}

class ListTagsForResourceResponse {
  public UserPoolTagsType $tags;
}

class PaginationKeyType {
}

class AdminSetUserSettingsRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public MFAOptionListType $mfa_options;
}

class DeviceRememberedStatusType {
}

class EventIdType {
}

class AdminConfirmSignUpRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public ClientMetadataType $client_metadata;
}

class ScopeType {
}

class TagResourceRequest {
  public ArnType $resource_arn;
  public UserPoolTagsType $tags;
}

class VerifiedAttributeType {
}

class ForgetDeviceRequest {
  public TokenModelType $access_token;
  public DeviceKeyType $device_key;
}

class SetUserSettingsResponse {
}

class UserContextDataType {
  public StringType $encoded_data;
}

class EmailConfigurationType {
  public ArnType $source_arn;
  public EmailAddressType $reply_to_email_address;
  public EmailSendingAccountType $email_sending_account;
  public StringType $from;
  public SESConfigurationSet $configuration_set;
}

class InvalidParameterException {
  public MessageType $message;
}

class AdminLinkProviderForUserRequest {
  public ProviderUserIdentifierType $source_user;
  public StringType $user_pool_id;
  public ProviderUserIdentifierType $destination_user;
}

class ConfirmDeviceResponse {
  public BooleanType $user_confirmation_necessary;
}

class DeviceType {
  public AttributeListType $device_attributes;
  public DateType $device_create_date;
  public DateType $device_last_modified_date;
  public DateType $device_last_authenticated_date;
  public DeviceKeyType $device_key;
}

class UntagResourceRequest {
  public UserPoolTagsListType $tag_keys;
  public ArnType $resource_arn;
}

class UpdateUserPoolDomainResponse {
  public DomainType $cloud_front_domain;
}

class ChallengeResponse {
}

class DeviceNameType {
}

class SecretHashType {
}

class DescribeUserPoolDomainResponse {
  public DomainDescriptionType $domain_description;
}

class OAuthFlowType {
}

class VerifyUserAttributeRequest {
  public TokenModelType $access_token;
  public AttributeNameType $attribute_name;
  public ConfirmationCodeType $code;
}

class GlobalSignOutRequest {
  public TokenModelType $access_token;
}

class ConfirmSignUpRequest {
  public ForceAliasCreation $force_alias_creation;
  public AnalyticsMetadataType $analytics_metadata;
  public UserContextDataType $user_context_data;
  public ClientMetadataType $client_metadata;
  public ClientIdType $client_id;
  public SecretHashType $secret_hash;
  public UsernameType $username;
  public ConfirmationCodeType $confirmation_code;
}

class DeleteUserPoolClientRequest {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
}

class EmailVerificationMessageByLinkType {
}

class SoftwareTokenMFANotFoundException {
  public MessageType $message;
}

class ConfirmationCodeType {
}

class ListProvidersLimitType {
}

class ListResourceServersRequest {
  public UserPoolIdType $user_pool_id;
  public ListResourceServersLimitType $max_results;
  public PaginationKeyType $next_token;
}

class ResourceServerType {
  public UserPoolIdType $user_pool_id;
  public ResourceServerIdentifierType $identifier;
  public ResourceServerNameType $name;
  public ResourceServerScopeListType $scopes;
}

class UserLambdaValidationException {
  public MessageType $message;
}

class RiskExceptionConfigurationType {
  public BlockedIPRangeListType $blocked_ip_range_list;
  public SkippedIPRangeListType $skipped_ip_range_list;
}

class SearchPaginationTokenType {
}

class SetUserMFAPreferenceResponse {
}

class AddCustomAttributesResponse {
}

class DeleteUserPoolDomainResponse {
}

class PasswordPolicyType {
  public BooleanType $require_symbols;
  public TemporaryPasswordValidityDaysType $temporary_password_validity_days;
  public PasswordPolicyMinLengthType $minimum_length;
  public BooleanType $require_uppercase;
  public BooleanType $require_lowercase;
  public BooleanType $require_numbers;
}

class ResendConfirmationCodeResponse {
  public CodeDeliveryDetailsType $code_delivery_details;
}

class ResourceServerNameType {
}

class UpdateUserAttributesRequest {
  public AttributeListType $user_attributes;
  public TokenModelType $access_token;
  public ClientMetadataType $client_metadata;
}

class AdminGetDeviceRequest {
  public UsernameType $username;
  public DeviceKeyType $device_key;
  public UserPoolIdType $user_pool_id;
}

class AttributeListType {
}

class FeedbackValueType {
}

class CreateGroupRequest {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
  public DescriptionType $description;
  public ArnType $role_arn;
  public PrecedenceType $precedence;
}

class DeleteGroupRequest {
  public UserPoolIdType $user_pool_id;
  public GroupNameType $group_name;
}

class ProviderDetailsType {
}

class AccountTakeoverRiskConfigurationType {
  public NotifyConfigurationType $notify_configuration;
  public AccountTakeoverActionsType $actions;
}

class CreateUserPoolClientResponse {
  public UserPoolClientType $user_pool_client;
}

class UsersListType {
}

class UsernameType {
}

class GetUICustomizationResponse {
  public UICustomizationType $ui_customization;
}

class ListIdentityProvidersResponse {
  public ProvidersListType $providers;
  public PaginationKeyType $next_token;
}

class PreconditionNotMetException {
  public MessageType $message;
}

class AttributeMappingKeyType {
}

class CreateGroupResponse {
  public GroupType $group;
}

class IdpIdentifierType {
}

class EmailVerificationSubjectType {
}

class AccountTakeoverActionsType {
  public AccountTakeoverActionType $high_action;
  public AccountTakeoverActionType $low_action;
  public AccountTakeoverActionType $medium_action;
}

class AssociateSoftwareTokenResponse {
  public SecretCodeType $secret_code;
  public SessionType $session;
}

class DomainStatusType {
}

class OAuthFlowsType {
}

class UpdateUserPoolDomainRequest {
  public DomainType $domain;
  public UserPoolIdType $user_pool_id;
  public CustomDomainConfigType $custom_domain_config;
}

class DeleteUserAttributesResponse {
}

class DomainType {
}

class ListUsersInGroupRequest {
  public PaginationKey $next_token;
  public UserPoolIdType $user_pool_id;
  public GroupNameType $group_name;
  public QueryLimitType $limit;
}

class UserPoolClientType {
  public UserPoolIdType $user_pool_id;
  public DateType $creation_date;
  public CallbackURLsListType $callback_ur_ls;
  public RedirectUrlType $default_redirect_uri;
  public ScopeListType $allowed_o_auth_scopes;
  public BooleanType $allowed_o_auth_flows_user_pool_client;
  public ClientNameType $client_name;
  public ExplicitAuthFlowsListType $explicit_auth_flows;
  public AnalyticsConfigurationType $analytics_configuration;
  public PreventUserExistenceErrorTypes $prevent_user_existence_errors;
  public ClientIdType $client_id;
  public RefreshTokenValidityType $refresh_token_validity;
  public ClientPermissionListType $write_attributes;
  public SupportedIdentityProvidersListType $supported_identity_providers;
  public LogoutURLsListType $logout_ur_ls;
  public OAuthFlowsType $allowed_o_auth_flows;
  public ClientSecretType $client_secret;
  public DateType $last_modified_date;
  public ClientPermissionListType $read_attributes;
}

class UsernameExistsException {
  public MessageType $message;
}

class EmailVerificationSubjectByLinkType {
}

class MessageActionType {
}

class StartUserImportJobRequest {
  public UserPoolIdType $user_pool_id;
  public UserImportJobIdType $job_id;
}

class ListUserPoolsRequest {
  public PaginationKeyType $next_token;
  public PoolQueryLimitType $max_results;
}

class ResourceServerScopeDescriptionType {
}

class EmailNotificationBodyType {
}

class EventFeedbackType {
  public FeedbackValueType $feedback_value;
  public StringType $provider;
  public DateType $feedback_date;
}

class AuthenticationResultType {
  public StringType $token_type;
  public TokenModelType $refresh_token;
  public TokenModelType $id_token;
  public NewDeviceMetadataType $new_device_metadata;
  public TokenModelType $access_token;
  public IntegerType $expires_in;
}

class SecretCodeType {
}

class SetUserMFAPreferenceRequest {
  public SMSMfaSettingsType $sms_mfa_settings;
  public SoftwareTokenMfaSettingsType $software_token_mfa_settings;
  public TokenModelType $access_token;
}

class UnsupportedIdentityProviderException {
  public MessageType $message;
}

class UnsupportedUserStateException {
  public MessageType $message;
}

class AdminCreateUserResponse {
  public UserType $user;
}

class IdentityProviderTypeType {
}

class AdminResetUserPasswordResponse {
}

class UsernameAttributesListType {
}

class GetUICustomizationRequest {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
}

class GetUserPoolMfaConfigRequest {
  public UserPoolIdType $user_pool_id;
}

class DeliveryMediumType {
}

class ListDevicesRequest {
  public TokenModelType $access_token;
  public QueryLimitType $limit;
  public SearchPaginationTokenType $pagination_token;
}

class RecoveryOptionNameType {
}

class AttributeNameType {
}

class GroupNameType {
}

class SessionType {
}

class EmailNotificationSubjectType {
}

class UpdateIdentityProviderResponse {
  public IdentityProviderType $identity_provider;
}

class UserPoolListType {
}

class VerifyUserAttributeResponse {
}

class ExplicitAuthFlowsListType {
}

class GetSigningCertificateResponse {
  public StringType $certificate;
}

class MessageTemplateType {
  public SmsVerificationMessageType $sms_message;
  public EmailVerificationMessageType $email_message;
  public EmailVerificationSubjectType $email_subject;
}

class DescribeUserPoolClientResponse {
  public UserPoolClientType $user_pool_client;
}

class UpdateResourceServerRequest {
  public UserPoolIdType $user_pool_id;
  public ResourceServerIdentifierType $identifier;
  public ResourceServerNameType $name;
  public ResourceServerScopeListType $scopes;
}

class AdminForgetDeviceRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public DeviceKeyType $device_key;
}

class AuthEventsType {
}

class CodeDeliveryFailureException {
  public MessageType $message;
}

class AdminRespondToAuthChallengeRequest {
  public UserPoolIdType $user_pool_id;
  public ClientIdType $client_id;
  public ChallengeNameType $challenge_name;
  public ChallengeResponsesType $challenge_responses;
  public SessionType $session;
  public AnalyticsMetadataType $analytics_metadata;
  public ContextDataType $context_data;
  public ClientMetadataType $client_metadata;
}

class AdminUpdateUserAttributesRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public AttributeListType $user_attributes;
  public ClientMetadataType $client_metadata;
}

class AWSAccountIdType {
}

class AccountRecoverySettingType {
  public RecoveryMechanismsType $recovery_mechanisms;
}

class AccountTakeoverActionNotifyType {
}

class AdvancedSecurityModeType {
}

class UntagResourceResponse {
}

class ConfirmForgotPasswordResponse {
}

class ListResourceServersResponse {
  public ResourceServersListType $resource_servers;
  public PaginationKeyType $next_token;
}

class UserPoolTaggingException {
  public MessageType $message;
}

class InvalidSmsRoleAccessPolicyException {
  public MessageType $message;
}

class ResourceServerScopeNameType {
}

class DescribeUserImportJobResponse {
  public UserImportJobType $user_import_job;
}

class GetUserPoolMfaConfigResponse {
  public SoftwareTokenMfaConfigType $software_token_mfa_configuration;
  public UserPoolMfaType $mfa_configuration;
  public SmsMfaConfigType $sms_mfa_configuration;
}

class GroupExistsException {
  public MessageType $message;
}

class TagKeysType {
}

class EventType {
}

class GenerateSecret {
}

class SignUpRequest {
  public SecretHashType $secret_hash;
  public AttributeListType $user_attributes;
  public AttributeListType $validation_data;
  public AnalyticsMetadataType $analytics_metadata;
  public ClientMetadataType $client_metadata;
  public ClientIdType $client_id;
  public PasswordType $password;
  public UserContextDataType $user_context_data;
  public UsernameType $username;
}

class UpdateAuthEventFeedbackRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
  public EventIdType $event_id;
  public TokenModelType $feedback_token;
  public FeedbackValueType $feedback_value;
}

class InvalidEmailRoleAccessPolicyException {
  public MessageType $message;
}

class AccountTakeoverEventActionType {
}

class EventRiskType {
  public RiskLevelType $risk_level;
  public WrappedBooleanType $compromised_credentials_detected;
  public RiskDecisionType $risk_decision;
}

class SmsVerificationMessageType {
}

class ResourceServerScopeType {
  public ResourceServerScopeNameType $scope_name;
  public ResourceServerScopeDescriptionType $scope_description;
}

class StringAttributeConstraintsType {
  public StringType $min_length;
  public StringType $max_length;
}

class AdminRemoveUserFromGroupRequest {
  public GroupNameType $group_name;
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminUserGlobalSignOutRequest {
  public UserPoolIdType $user_pool_id;
  public UsernameType $username;
}

class AdminUpdateUserAttributesResponse {
}

class DeleteUserPoolRequest {
  public UserPoolIdType $user_pool_id;
}

class UserPoolIdType {
}

class UserType {
  public MFAOptionListType $mfa_options;
  public UsernameType $username;
  public AttributeListType $attributes;
  public DateType $user_create_date;
  public DateType $user_last_modified_date;
  public BooleanType $enabled;
  public UserStatusType $user_status;
}

class CreateResourceServerRequest {
  public UserPoolIdType $user_pool_id;
  public ResourceServerIdentifierType $identifier;
  public ResourceServerNameType $name;
  public ResourceServerScopeListType $scopes;
}

class GetIdentityProviderByIdentifierRequest {
  public UserPoolIdType $user_pool_id;
  public IdpIdentifierType $idp_identifier;
}

class S3BucketType {
}

class ListOfStringTypes {
}

class NewDeviceMetadataType {
  public DeviceKeyType $device_key;
  public StringType $device_group_key;
}

class SearchedAttributeNamesListType {
}

class DefaultEmailOptionType {
}

class SmsConfigurationType {
  public ArnType $sns_caller_arn;
  public StringType $external_id;
}

class StopUserImportJobRequest {
  public UserPoolIdType $user_pool_id;
  public UserImportJobIdType $job_id;
}

class UpdateDeviceStatusRequest {
  public TokenModelType $access_token;
  public DeviceKeyType $device_key;
  public DeviceRememberedStatusType $device_remembered_status;
}

class VerifySoftwareTokenResponse {
  public VerifySoftwareTokenResponseType $status;
  public SessionType $session;
}

class CallbackURLsListType {
}

class ConfirmForgotPasswordRequest {
  public SecretHashType $secret_hash;
  public UsernameType $username;
  public ConfirmationCodeType $confirmation_code;
  public PasswordType $password;
  public AnalyticsMetadataType $analytics_metadata;
  public UserContextDataType $user_context_data;
  public ClientMetadataType $client_metadata;
  public ClientIdType $client_id;
}

class SESConfigurationSet {
}

