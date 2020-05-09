<?hh // strict
namespace slack\aws\iam;

interface IAM {
  public function AddClientIDToOpenIDConnectProvider(AddClientIDToOpenIDConnectProviderRequest) Awaitable<Errors\Error>;
  public function AddRoleToInstanceProfile(AddRoleToInstanceProfileRequest) Awaitable<Errors\Error>;
  public function AddUserToGroup(AddUserToGroupRequest) Awaitable<Errors\Error>;
  public function AttachGroupPolicy(AttachGroupPolicyRequest) Awaitable<Errors\Error>;
  public function AttachRolePolicy(AttachRolePolicyRequest) Awaitable<Errors\Error>;
  public function AttachUserPolicy(AttachUserPolicyRequest) Awaitable<Errors\Error>;
  public function ChangePassword(ChangePasswordRequest) Awaitable<Errors\Error>;
  public function CreateAccessKey(CreateAccessKeyRequest) Awaitable<Errors\Result<CreateAccessKeyResponse>>;
  public function CreateAccountAlias(CreateAccountAliasRequest) Awaitable<Errors\Error>;
  public function CreateGroup(CreateGroupRequest) Awaitable<Errors\Result<CreateGroupResponse>>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest) Awaitable<Errors\Result<CreateInstanceProfileResponse>>;
  public function CreateLoginProfile(CreateLoginProfileRequest) Awaitable<Errors\Result<CreateLoginProfileResponse>>;
  public function CreateOpenIDConnectProvider(CreateOpenIDConnectProviderRequest) Awaitable<Errors\Result<CreateOpenIDConnectProviderResponse>>;
  public function CreatePolicy(CreatePolicyRequest) Awaitable<Errors\Result<CreatePolicyResponse>>;
  public function CreatePolicyVersion(CreatePolicyVersionRequest) Awaitable<Errors\Result<CreatePolicyVersionResponse>>;
  public function CreateRole(CreateRoleRequest) Awaitable<Errors\Result<CreateRoleResponse>>;
  public function CreateSAMLProvider(CreateSAMLProviderRequest) Awaitable<Errors\Result<CreateSAMLProviderResponse>>;
  public function CreateServiceLinkedRole(CreateServiceLinkedRoleRequest) Awaitable<Errors\Result<CreateServiceLinkedRoleResponse>>;
  public function CreateServiceSpecificCredential(CreateServiceSpecificCredentialRequest) Awaitable<Errors\Result<CreateServiceSpecificCredentialResponse>>;
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function CreateVirtualMFADevice(CreateVirtualMFADeviceRequest) Awaitable<Errors\Result<CreateVirtualMFADeviceResponse>>;
  public function DeactivateMFADevice(DeactivateMFADeviceRequest) Awaitable<Errors\Error>;
  public function DeleteAccessKey(DeleteAccessKeyRequest) Awaitable<Errors\Error>;
  public function DeleteAccountAlias(DeleteAccountAliasRequest) Awaitable<Errors\Error>;
  public function DeleteAccountPasswordPolicy() Awaitable<Errors\Error>;
  public function DeleteGroup(DeleteGroupRequest) Awaitable<Errors\Error>;
  public function DeleteGroupPolicy(DeleteGroupPolicyRequest) Awaitable<Errors\Error>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest) Awaitable<Errors\Error>;
  public function DeleteLoginProfile(DeleteLoginProfileRequest) Awaitable<Errors\Error>;
  public function DeleteOpenIDConnectProvider(DeleteOpenIDConnectProviderRequest) Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest) Awaitable<Errors\Error>;
  public function DeletePolicyVersion(DeletePolicyVersionRequest) Awaitable<Errors\Error>;
  public function DeleteRole(DeleteRoleRequest) Awaitable<Errors\Error>;
  public function DeleteRolePermissionsBoundary(DeleteRolePermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function DeleteRolePolicy(DeleteRolePolicyRequest) Awaitable<Errors\Error>;
  public function DeleteSAMLProvider(DeleteSAMLProviderRequest) Awaitable<Errors\Error>;
  public function DeleteSSHPublicKey(DeleteSSHPublicKeyRequest) Awaitable<Errors\Error>;
  public function DeleteServerCertificate(DeleteServerCertificateRequest) Awaitable<Errors\Error>;
  public function DeleteServiceLinkedRole(DeleteServiceLinkedRoleRequest) Awaitable<Errors\Result<DeleteServiceLinkedRoleResponse>>;
  public function DeleteServiceSpecificCredential(DeleteServiceSpecificCredentialRequest) Awaitable<Errors\Error>;
  public function DeleteSigningCertificate(DeleteSigningCertificateRequest) Awaitable<Errors\Error>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Error>;
  public function DeleteUserPermissionsBoundary(DeleteUserPermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function DeleteUserPolicy(DeleteUserPolicyRequest) Awaitable<Errors\Error>;
  public function DeleteVirtualMFADevice(DeleteVirtualMFADeviceRequest) Awaitable<Errors\Error>;
  public function DetachGroupPolicy(DetachGroupPolicyRequest) Awaitable<Errors\Error>;
  public function DetachRolePolicy(DetachRolePolicyRequest) Awaitable<Errors\Error>;
  public function DetachUserPolicy(DetachUserPolicyRequest) Awaitable<Errors\Error>;
  public function EnableMFADevice(EnableMFADeviceRequest) Awaitable<Errors\Error>;
  public function GenerateCredentialReport() Awaitable<Errors\Result<GenerateCredentialReportResponse>>;
  public function GenerateOrganizationsAccessReport(GenerateOrganizationsAccessReportRequest) Awaitable<Errors\Result<GenerateOrganizationsAccessReportResponse>>;
  public function GenerateServiceLastAccessedDetails(GenerateServiceLastAccessedDetailsRequest) Awaitable<Errors\Result<GenerateServiceLastAccessedDetailsResponse>>;
  public function GetAccessKeyLastUsed(GetAccessKeyLastUsedRequest) Awaitable<Errors\Result<GetAccessKeyLastUsedResponse>>;
  public function GetAccountAuthorizationDetails(GetAccountAuthorizationDetailsRequest) Awaitable<Errors\Result<GetAccountAuthorizationDetailsResponse>>;
  public function GetAccountPasswordPolicy() Awaitable<Errors\Result<GetAccountPasswordPolicyResponse>>;
  public function GetAccountSummary() Awaitable<Errors\Result<GetAccountSummaryResponse>>;
  public function GetContextKeysForCustomPolicy(GetContextKeysForCustomPolicyRequest) Awaitable<Errors\Result<GetContextKeysForPolicyResponse>>;
  public function GetContextKeysForPrincipalPolicy(GetContextKeysForPrincipalPolicyRequest) Awaitable<Errors\Result<GetContextKeysForPolicyResponse>>;
  public function GetCredentialReport() Awaitable<Errors\Result<GetCredentialReportResponse>>;
  public function GetGroup(GetGroupRequest) Awaitable<Errors\Result<GetGroupResponse>>;
  public function GetGroupPolicy(GetGroupPolicyRequest) Awaitable<Errors\Result<GetGroupPolicyResponse>>;
  public function GetInstanceProfile(GetInstanceProfileRequest) Awaitable<Errors\Result<GetInstanceProfileResponse>>;
  public function GetLoginProfile(GetLoginProfileRequest) Awaitable<Errors\Result<GetLoginProfileResponse>>;
  public function GetOpenIDConnectProvider(GetOpenIDConnectProviderRequest) Awaitable<Errors\Result<GetOpenIDConnectProviderResponse>>;
  public function GetOrganizationsAccessReport(GetOrganizationsAccessReportRequest) Awaitable<Errors\Result<GetOrganizationsAccessReportResponse>>;
  public function GetPolicy(GetPolicyRequest) Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetPolicyVersion(GetPolicyVersionRequest) Awaitable<Errors\Result<GetPolicyVersionResponse>>;
  public function GetRole(GetRoleRequest) Awaitable<Errors\Result<GetRoleResponse>>;
  public function GetRolePolicy(GetRolePolicyRequest) Awaitable<Errors\Result<GetRolePolicyResponse>>;
  public function GetSAMLProvider(GetSAMLProviderRequest) Awaitable<Errors\Result<GetSAMLProviderResponse>>;
  public function GetSSHPublicKey(GetSSHPublicKeyRequest) Awaitable<Errors\Result<GetSSHPublicKeyResponse>>;
  public function GetServerCertificate(GetServerCertificateRequest) Awaitable<Errors\Result<GetServerCertificateResponse>>;
  public function GetServiceLastAccessedDetails(GetServiceLastAccessedDetailsRequest) Awaitable<Errors\Result<GetServiceLastAccessedDetailsResponse>>;
  public function GetServiceLastAccessedDetailsWithEntities(GetServiceLastAccessedDetailsWithEntitiesRequest) Awaitable<Errors\Result<GetServiceLastAccessedDetailsWithEntitiesResponse>>;
  public function GetServiceLinkedRoleDeletionStatus(GetServiceLinkedRoleDeletionStatusRequest) Awaitable<Errors\Result<GetServiceLinkedRoleDeletionStatusResponse>>;
  public function GetUser(GetUserRequest) Awaitable<Errors\Result<GetUserResponse>>;
  public function GetUserPolicy(GetUserPolicyRequest) Awaitable<Errors\Result<GetUserPolicyResponse>>;
  public function ListAccessKeys(ListAccessKeysRequest) Awaitable<Errors\Result<ListAccessKeysResponse>>;
  public function ListAccountAliases(ListAccountAliasesRequest) Awaitable<Errors\Result<ListAccountAliasesResponse>>;
  public function ListAttachedGroupPolicies(ListAttachedGroupPoliciesRequest) Awaitable<Errors\Result<ListAttachedGroupPoliciesResponse>>;
  public function ListAttachedRolePolicies(ListAttachedRolePoliciesRequest) Awaitable<Errors\Result<ListAttachedRolePoliciesResponse>>;
  public function ListAttachedUserPolicies(ListAttachedUserPoliciesRequest) Awaitable<Errors\Result<ListAttachedUserPoliciesResponse>>;
  public function ListEntitiesForPolicy(ListEntitiesForPolicyRequest) Awaitable<Errors\Result<ListEntitiesForPolicyResponse>>;
  public function ListGroupPolicies(ListGroupPoliciesRequest) Awaitable<Errors\Result<ListGroupPoliciesResponse>>;
  public function ListGroups(ListGroupsRequest) Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ListGroupsForUser(ListGroupsForUserRequest) Awaitable<Errors\Result<ListGroupsForUserResponse>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest) Awaitable<Errors\Result<ListInstanceProfilesResponse>>;
  public function ListInstanceProfilesForRole(ListInstanceProfilesForRoleRequest) Awaitable<Errors\Result<ListInstanceProfilesForRoleResponse>>;
  public function ListMFADevices(ListMFADevicesRequest) Awaitable<Errors\Result<ListMFADevicesResponse>>;
  public function ListOpenIDConnectProviders(ListOpenIDConnectProvidersRequest) Awaitable<Errors\Result<ListOpenIDConnectProvidersResponse>>;
  public function ListPolicies(ListPoliciesRequest) Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function ListPoliciesGrantingServiceAccess(ListPoliciesGrantingServiceAccessRequest) Awaitable<Errors\Result<ListPoliciesGrantingServiceAccessResponse>>;
  public function ListPolicyVersions(ListPolicyVersionsRequest) Awaitable<Errors\Result<ListPolicyVersionsResponse>>;
  public function ListRolePolicies(ListRolePoliciesRequest) Awaitable<Errors\Result<ListRolePoliciesResponse>>;
  public function ListRoleTags(ListRoleTagsRequest) Awaitable<Errors\Result<ListRoleTagsResponse>>;
  public function ListRoles(ListRolesRequest) Awaitable<Errors\Result<ListRolesResponse>>;
  public function ListSAMLProviders(ListSAMLProvidersRequest) Awaitable<Errors\Result<ListSAMLProvidersResponse>>;
  public function ListSSHPublicKeys(ListSSHPublicKeysRequest) Awaitable<Errors\Result<ListSSHPublicKeysResponse>>;
  public function ListServerCertificates(ListServerCertificatesRequest) Awaitable<Errors\Result<ListServerCertificatesResponse>>;
  public function ListServiceSpecificCredentials(ListServiceSpecificCredentialsRequest) Awaitable<Errors\Result<ListServiceSpecificCredentialsResponse>>;
  public function ListSigningCertificates(ListSigningCertificatesRequest) Awaitable<Errors\Result<ListSigningCertificatesResponse>>;
  public function ListUserPolicies(ListUserPoliciesRequest) Awaitable<Errors\Result<ListUserPoliciesResponse>>;
  public function ListUserTags(ListUserTagsRequest) Awaitable<Errors\Result<ListUserTagsResponse>>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function ListVirtualMFADevices(ListVirtualMFADevicesRequest) Awaitable<Errors\Result<ListVirtualMFADevicesResponse>>;
  public function PutGroupPolicy(PutGroupPolicyRequest) Awaitable<Errors\Error>;
  public function PutRolePermissionsBoundary(PutRolePermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function PutRolePolicy(PutRolePolicyRequest) Awaitable<Errors\Error>;
  public function PutUserPermissionsBoundary(PutUserPermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function PutUserPolicy(PutUserPolicyRequest) Awaitable<Errors\Error>;
  public function RemoveClientIDFromOpenIDConnectProvider(RemoveClientIDFromOpenIDConnectProviderRequest) Awaitable<Errors\Error>;
  public function RemoveRoleFromInstanceProfile(RemoveRoleFromInstanceProfileRequest) Awaitable<Errors\Error>;
  public function RemoveUserFromGroup(RemoveUserFromGroupRequest) Awaitable<Errors\Error>;
  public function ResetServiceSpecificCredential(ResetServiceSpecificCredentialRequest) Awaitable<Errors\Result<ResetServiceSpecificCredentialResponse>>;
  public function ResyncMFADevice(ResyncMFADeviceRequest) Awaitable<Errors\Error>;
  public function SetDefaultPolicyVersion(SetDefaultPolicyVersionRequest) Awaitable<Errors\Error>;
  public function SetSecurityTokenServicePreferences(SetSecurityTokenServicePreferencesRequest) Awaitable<Errors\Error>;
  public function SimulateCustomPolicy(SimulateCustomPolicyRequest) Awaitable<Errors\Result<SimulatePolicyResponse>>;
  public function SimulatePrincipalPolicy(SimulatePrincipalPolicyRequest) Awaitable<Errors\Result<SimulatePolicyResponse>>;
  public function TagRole(TagRoleRequest) Awaitable<Errors\Error>;
  public function TagUser(TagUserRequest) Awaitable<Errors\Error>;
  public function UntagRole(UntagRoleRequest) Awaitable<Errors\Error>;
  public function UntagUser(UntagUserRequest) Awaitable<Errors\Error>;
  public function UpdateAccessKey(UpdateAccessKeyRequest) Awaitable<Errors\Error>;
  public function UpdateAccountPasswordPolicy(UpdateAccountPasswordPolicyRequest) Awaitable<Errors\Error>;
  public function UpdateAssumeRolePolicy(UpdateAssumeRolePolicyRequest) Awaitable<Errors\Error>;
  public function UpdateGroup(UpdateGroupRequest) Awaitable<Errors\Error>;
  public function UpdateLoginProfile(UpdateLoginProfileRequest) Awaitable<Errors\Error>;
  public function UpdateOpenIDConnectProviderThumbprint(UpdateOpenIDConnectProviderThumbprintRequest) Awaitable<Errors\Error>;
  public function UpdateRole(UpdateRoleRequest) Awaitable<Errors\Result<UpdateRoleResponse>>;
  public function UpdateRoleDescription(UpdateRoleDescriptionRequest) Awaitable<Errors\Result<UpdateRoleDescriptionResponse>>;
  public function UpdateSAMLProvider(UpdateSAMLProviderRequest) Awaitable<Errors\Result<UpdateSAMLProviderResponse>>;
  public function UpdateSSHPublicKey(UpdateSSHPublicKeyRequest) Awaitable<Errors\Error>;
  public function UpdateServerCertificate(UpdateServerCertificateRequest) Awaitable<Errors\Error>;
  public function UpdateServiceSpecificCredential(UpdateServiceSpecificCredentialRequest) Awaitable<Errors\Error>;
  public function UpdateSigningCertificate(UpdateSigningCertificateRequest) Awaitable<Errors\Error>;
  public function UpdateUser(UpdateUserRequest) Awaitable<Errors\Error>;
  public function UploadSSHPublicKey(UploadSSHPublicKeyRequest) Awaitable<Errors\Result<UploadSSHPublicKeyResponse>>;
  public function UploadServerCertificate(UploadServerCertificateRequest) Awaitable<Errors\Result<UploadServerCertificateResponse>>;
  public function UploadSigningCertificate(UploadSigningCertificateRequest) Awaitable<Errors\Result<UploadSigningCertificateResponse>>;
}

class AccessDetail {
  public organizationsEntityPathType $entity_path;
  public dateType $last_authenticated_time;
  public stringType $region;
  public serviceNameType $service_name;
  public serviceNamespaceType $service_namespace;
  public integerType $total_authenticated_entities;
}

class AccessDetails {
}

class AccessKey {
  public accessKeyIdType $access_key_id;
  public dateType $create_date;
  public accessKeySecretType $secret_access_key;
  public statusType $status;
  public userNameType $user_name;
}

class AccessKeyLastUsed {
  public dateType $last_used_date;
  public stringType $region;
  public stringType $service_name;
}

class AccessKeyMetadata {
  public accessKeyIdType $access_key_id;
  public dateType $create_date;
  public statusType $status;
  public userNameType $user_name;
}

class ActionNameListType {
}

class ActionNameType {
}

class AddClientIDToOpenIDConnectProviderRequest {
  public clientIDType $client_id;
  public arnType $open_id_connect_provider_arn;
}

class AddRoleToInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public roleNameType $role_name;
}

class AddUserToGroupRequest {
  public groupNameType $group_name;
  public existingUserNameType $user_name;
}

class ArnListType {
}

class AttachGroupPolicyRequest {
  public groupNameType $group_name;
  public arnType $policy_arn;
}

class AttachRolePolicyRequest {
  public arnType $policy_arn;
  public roleNameType $role_name;
}

class AttachUserPolicyRequest {
  public arnType $policy_arn;
  public userNameType $user_name;
}

class AttachedPermissionsBoundary {
  public arnType $permissions_boundary_arn;
  public PermissionsBoundaryAttachmentType $permissions_boundary_type;
}

class AttachedPolicy {
  public arnType $policy_arn;
  public policyNameType $policy_name;
}

class BootstrapDatum {
}

class ChangePasswordRequest {
  public passwordType $new_password;
  public passwordType $old_password;
}

class ColumnNumber {
}

class ConcurrentModificationException {
  public ConcurrentModificationMessage $message;
}

class ConcurrentModificationMessage {
}

class ContextEntry {
  public ContextKeyNameType $context_key_name;
  public ContextKeyTypeEnum $context_key_type;
  public ContextKeyValueListType $context_key_values;
}

class ContextEntryListType {
}

class ContextKeyNameType {
}

class ContextKeyNamesResultListType {
}

class ContextKeyTypeEnum {
}

class ContextKeyValueListType {
}

class ContextKeyValueType {
}

class CreateAccessKeyRequest {
  public existingUserNameType $user_name;
}

class CreateAccessKeyResponse {
  public AccessKey $access_key;
}

class CreateAccountAliasRequest {
  public accountAliasType $account_alias;
}

class CreateGroupRequest {
  public groupNameType $group_name;
  public pathType $path;
}

class CreateGroupResponse {
  public Group $group;
}

class CreateInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public pathType $path;
}

class CreateInstanceProfileResponse {
  public InstanceProfile $instance_profile;
}

class CreateLoginProfileRequest {
  public passwordType $password;
  public booleanType $password_reset_required;
  public userNameType $user_name;
}

class CreateLoginProfileResponse {
  public LoginProfile $login_profile;
}

class CreateOpenIDConnectProviderRequest {
  public clientIDListType $client_id_list;
  public thumbprintListType $thumbprint_list;
  public OpenIDConnectProviderUrlType $url;
}

class CreateOpenIDConnectProviderResponse {
  public arnType $open_id_connect_provider_arn;
}

class CreatePolicyRequest {
  public policyDescriptionType $description;
  public policyPathType $path;
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
}

class CreatePolicyResponse {
  public Policy $policy;
}

class CreatePolicyVersionRequest {
  public arnType $policy_arn;
  public policyDocumentType $policy_document;
  public booleanType $set_as_default;
}

class CreatePolicyVersionResponse {
  public PolicyVersion $policy_version;
}

class CreateRoleRequest {
  public policyDocumentType $assume_role_policy_document;
  public roleDescriptionType $description;
  public roleMaxSessionDurationType $max_session_duration;
  public pathType $path;
  public arnType $permissions_boundary;
  public roleNameType $role_name;
  public tagListType $tags;
}

class CreateRoleResponse {
  public Role $role;
}

class CreateSAMLProviderRequest {
  public SAMLProviderNameType $name;
  public SAMLMetadataDocumentType $saml_metadata_document;
}

class CreateSAMLProviderResponse {
  public arnType $saml_provider_arn;
}

class CreateServiceLinkedRoleRequest {
  public groupNameType $aws_service_name;
  public customSuffixType $custom_suffix;
  public roleDescriptionType $description;
}

class CreateServiceLinkedRoleResponse {
  public Role $role;
}

class CreateServiceSpecificCredentialRequest {
  public serviceName $service_name;
  public userNameType $user_name;
}

class CreateServiceSpecificCredentialResponse {
  public ServiceSpecificCredential $service_specific_credential;
}

class CreateUserRequest {
  public pathType $path;
  public arnType $permissions_boundary;
  public tagListType $tags;
  public userNameType $user_name;
}

class CreateUserResponse {
  public User $user;
}

class CreateVirtualMFADeviceRequest {
  public pathType $path;
  public virtualMFADeviceName $virtual_mfa_device_name;
}

class CreateVirtualMFADeviceResponse {
  public VirtualMFADevice $virtual_mfa_device;
}

class CredentialReportExpiredException {
  public credentialReportExpiredExceptionMessage $message;
}

class CredentialReportNotPresentException {
  public credentialReportNotPresentExceptionMessage $message;
}

class CredentialReportNotReadyException {
  public credentialReportNotReadyExceptionMessage $message;
}

class DeactivateMFADeviceRequest {
  public serialNumberType $serial_number;
  public existingUserNameType $user_name;
}

class DeleteAccessKeyRequest {
  public accessKeyIdType $access_key_id;
  public existingUserNameType $user_name;
}

class DeleteAccountAliasRequest {
  public accountAliasType $account_alias;
}

class DeleteConflictException {
  public deleteConflictMessage $message;
}

class DeleteGroupPolicyRequest {
  public groupNameType $group_name;
  public policyNameType $policy_name;
}

class DeleteGroupRequest {
  public groupNameType $group_name;
}

class DeleteInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
}

class DeleteLoginProfileRequest {
  public userNameType $user_name;
}

class DeleteOpenIDConnectProviderRequest {
  public arnType $open_id_connect_provider_arn;
}

class DeletePolicyRequest {
  public arnType $policy_arn;
}

class DeletePolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;
}

class DeleteRolePermissionsBoundaryRequest {
  public roleNameType $role_name;
}

class DeleteRolePolicyRequest {
  public policyNameType $policy_name;
  public roleNameType $role_name;
}

class DeleteRoleRequest {
  public roleNameType $role_name;
}

class DeleteSAMLProviderRequest {
  public arnType $saml_provider_arn;
}

class DeleteSSHPublicKeyRequest {
  public publicKeyIdType $ssh_public_key_id;
  public userNameType $user_name;
}

class DeleteServerCertificateRequest {
  public serverCertificateNameType $server_certificate_name;
}

class DeleteServiceLinkedRoleRequest {
  public roleNameType $role_name;
}

class DeleteServiceLinkedRoleResponse {
  public DeletionTaskIdType $deletion_task_id;
}

class DeleteServiceSpecificCredentialRequest {
  public serviceSpecificCredentialId $service_specific_credential_id;
  public userNameType $user_name;
}

class DeleteSigningCertificateRequest {
  public certificateIdType $certificate_id;
  public existingUserNameType $user_name;
}

class DeleteUserPermissionsBoundaryRequest {
  public userNameType $user_name;
}

class DeleteUserPolicyRequest {
  public policyNameType $policy_name;
  public existingUserNameType $user_name;
}

class DeleteUserRequest {
  public existingUserNameType $user_name;
}

class DeleteVirtualMFADeviceRequest {
  public serialNumberType $serial_number;
}

class DeletionTaskFailureReasonType {
  public ReasonType $reason;
  public RoleUsageListType $role_usage_list;
}

class DeletionTaskIdType {
}

class DeletionTaskStatusType {
}

class DetachGroupPolicyRequest {
  public groupNameType $group_name;
  public arnType $policy_arn;
}

class DetachRolePolicyRequest {
  public arnType $policy_arn;
  public roleNameType $role_name;
}

class DetachUserPolicyRequest {
  public arnType $policy_arn;
  public userNameType $user_name;
}

class DuplicateCertificateException {
  public duplicateCertificateMessage $message;
}

class DuplicateSSHPublicKeyException {
  public duplicateSSHPublicKeyMessage $message;
}

class EnableMFADeviceRequest {
  public authenticationCodeType $authentication_code_1;
  public authenticationCodeType $authentication_code_2;
  public serialNumberType $serial_number;
  public existingUserNameType $user_name;
}

class EntityAlreadyExistsException {
  public entityAlreadyExistsMessage $message;
}

class EntityDetails {
  public EntityInfo $entity_info;
  public dateType $last_authenticated;
}

class EntityInfo {
  public arnType $arn;
  public idType $id;
  public userNameType $name;
  public pathType $path;
  public policyOwnerEntityType $type;
}

class EntityTemporarilyUnmodifiableException {
  public entityTemporarilyUnmodifiableMessage $message;
}

class EntityType {
}

class ErrorDetails {
  public stringType $code;
  public stringType $message;
}

class EvalDecisionDetailsType {
}

class EvalDecisionSourceType {
}

class EvaluationResult {
  public ActionNameType $eval_action_name;
  public PolicyEvaluationDecisionType $eval_decision;
  public EvalDecisionDetailsType $eval_decision_details;
  public ResourceNameType $eval_resource_name;
  public StatementListType $matched_statements;
  public ContextKeyNamesResultListType $missing_context_values;
  public OrganizationsDecisionDetail $organizations_decision_detail;
  public PermissionsBoundaryDecisionDetail $permissions_boundary_decision_detail;
  public ResourceSpecificResultListType $resource_specific_results;
}

class EvaluationResultsListType {
}

class GenerateCredentialReportResponse {
  public ReportStateDescriptionType $description;
  public ReportStateType $state;
}

class GenerateOrganizationsAccessReportRequest {
  public organizationsEntityPathType $entity_path;
  public organizationsPolicyIdType $organizations_policy_id;
}

class GenerateOrganizationsAccessReportResponse {
  public jobIDType $job_id;
}

class GenerateServiceLastAccessedDetailsRequest {
  public arnType $arn;
}

class GenerateServiceLastAccessedDetailsResponse {
  public jobIDType $job_id;
}

class GetAccessKeyLastUsedRequest {
  public accessKeyIdType $access_key_id;
}

class GetAccessKeyLastUsedResponse {
  public AccessKeyLastUsed $access_key_last_used;
  public existingUserNameType $user_name;
}

class GetAccountAuthorizationDetailsRequest {
  public entityListType $filter;
  public markerType $marker;
  public maxItemsType $max_items;
}

class GetAccountAuthorizationDetailsResponse {
  public groupDetailListType $group_detail_list;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public ManagedPolicyDetailListType $policies;
  public roleDetailListType $role_detail_list;
  public userDetailListType $user_detail_list;
}

class GetAccountPasswordPolicyResponse {
  public PasswordPolicy $password_policy;
}

class GetAccountSummaryResponse {
  public summaryMapType $summary_map;
}

class GetContextKeysForCustomPolicyRequest {
  public SimulationPolicyListType $policy_input_list;
}

class GetContextKeysForPolicyResponse {
  public ContextKeyNamesResultListType $context_key_names;
}

class GetContextKeysForPrincipalPolicyRequest {
  public SimulationPolicyListType $policy_input_list;
  public arnType $policy_source_arn;
}

class GetCredentialReportResponse {
  public ReportContentType $content;
  public dateType $generated_time;
  public ReportFormatType $report_format;
}

class GetGroupPolicyRequest {
  public groupNameType $group_name;
  public policyNameType $policy_name;
}

class GetGroupPolicyResponse {
  public groupNameType $group_name;
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
}

class GetGroupRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class GetGroupResponse {
  public Group $group;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public userListType $users;
}

class GetInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
}

class GetInstanceProfileResponse {
  public InstanceProfile $instance_profile;
}

class GetLoginProfileRequest {
  public userNameType $user_name;
}

class GetLoginProfileResponse {
  public LoginProfile $login_profile;
}

class GetOpenIDConnectProviderRequest {
  public arnType $open_id_connect_provider_arn;
}

class GetOpenIDConnectProviderResponse {
  public clientIDListType $client_id_list;
  public dateType $create_date;
  public thumbprintListType $thumbprint_list;
  public OpenIDConnectProviderUrlType $url;
}

class GetOrganizationsAccessReportRequest {
  public jobIDType $job_id;
  public markerType $marker;
  public maxItemsType $max_items;
  public sortKeyType $sort_key;
}

class GetOrganizationsAccessReportResponse {
  public AccessDetails $access_details;
  public ErrorDetails $error_details;
  public booleanType $is_truncated;
  public dateType $job_completion_date;
  public dateType $job_creation_date;
  public jobStatusType $job_status;
  public markerType $marker;
  public integerType $number_of_services_accessible;
  public integerType $number_of_services_not_accessed;
}

class GetPolicyRequest {
  public arnType $policy_arn;
}

class GetPolicyResponse {
  public Policy $policy;
}

class GetPolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;
}

class GetPolicyVersionResponse {
  public PolicyVersion $policy_version;
}

class GetRolePolicyRequest {
  public policyNameType $policy_name;
  public roleNameType $role_name;
}

class GetRolePolicyResponse {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public roleNameType $role_name;
}

class GetRoleRequest {
  public roleNameType $role_name;
}

class GetRoleResponse {
  public Role $role;
}

class GetSAMLProviderRequest {
  public arnType $saml_provider_arn;
}

class GetSAMLProviderResponse {
  public dateType $create_date;
  public SAMLMetadataDocumentType $saml_metadata_document;
  public dateType $valid_until;
}

class GetSSHPublicKeyRequest {
  public encodingType $encoding;
  public publicKeyIdType $ssh_public_key_id;
  public userNameType $user_name;
}

class GetSSHPublicKeyResponse {
  public SSHPublicKey $ssh_public_key;
}

class GetServerCertificateRequest {
  public serverCertificateNameType $server_certificate_name;
}

class GetServerCertificateResponse {
  public ServerCertificate $server_certificate;
}

class GetServiceLastAccessedDetailsRequest {
  public jobIDType $job_id;
  public markerType $marker;
  public maxItemsType $max_items;
}

class GetServiceLastAccessedDetailsResponse {
  public ErrorDetails $error;
  public booleanType $is_truncated;
  public dateType $job_completion_date;
  public dateType $job_creation_date;
  public jobStatusType $job_status;
  public responseMarkerType $marker;
  public ServicesLastAccessed $services_last_accessed;
}

class GetServiceLastAccessedDetailsWithEntitiesRequest {
  public jobIDType $job_id;
  public markerType $marker;
  public maxItemsType $max_items;
  public serviceNamespaceType $service_namespace;
}

class GetServiceLastAccessedDetailsWithEntitiesResponse {
  public entityDetailsListType $entity_details_list;
  public ErrorDetails $error;
  public booleanType $is_truncated;
  public dateType $job_completion_date;
  public dateType $job_creation_date;
  public jobStatusType $job_status;
  public responseMarkerType $marker;
}

class GetServiceLinkedRoleDeletionStatusRequest {
  public DeletionTaskIdType $deletion_task_id;
}

class GetServiceLinkedRoleDeletionStatusResponse {
  public DeletionTaskFailureReasonType $reason;
  public DeletionTaskStatusType $status;
}

class GetUserPolicyRequest {
  public policyNameType $policy_name;
  public existingUserNameType $user_name;
}

class GetUserPolicyResponse {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public existingUserNameType $user_name;
}

class GetUserRequest {
  public existingUserNameType $user_name;
}

class GetUserResponse {
  public User $user;
}

class Group {
  public arnType $arn;
  public dateType $create_date;
  public idType $group_id;
  public groupNameType $group_name;
  public pathType $path;
}

class GroupDetail {
  public arnType $arn;
  public attachedPoliciesListType $attached_managed_policies;
  public dateType $create_date;
  public idType $group_id;
  public groupNameType $group_name;
  public policyDetailListType $group_policy_list;
  public pathType $path;
}

class InstanceProfile {
  public arnType $arn;
  public dateType $create_date;
  public idType $instance_profile_id;
  public instanceProfileNameType $instance_profile_name;
  public pathType $path;
  public roleListType $roles;
}

class InvalidAuthenticationCodeException {
  public invalidAuthenticationCodeMessage $message;
}

class InvalidCertificateException {
  public invalidCertificateMessage $message;
}

class InvalidInputException {
  public invalidInputMessage $message;
}

class InvalidPublicKeyException {
  public invalidPublicKeyMessage $message;
}

class InvalidUserTypeException {
  public invalidUserTypeMessage $message;
}

class KeyPairMismatchException {
  public keyPairMismatchMessage $message;
}

class LimitExceededException {
  public limitExceededMessage $message;
}

class LineNumber {
}

class ListAccessKeysRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;
}

class ListAccessKeysResponse {
  public accessKeyMetadataListType $access_key_metadata;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListAccountAliasesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
}

class ListAccountAliasesResponse {
  public accountAliasListType $account_aliases;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListAttachedGroupPoliciesRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;
  public policyPathType $path_prefix;
}

class ListAttachedGroupPoliciesResponse {
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListAttachedRolePoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public policyPathType $path_prefix;
  public roleNameType $role_name;
}

class ListAttachedRolePoliciesResponse {
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListAttachedUserPoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public policyPathType $path_prefix;
  public userNameType $user_name;
}

class ListAttachedUserPoliciesResponse {
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListEntitiesForPolicyRequest {
  public EntityType $entity_filter;
  public markerType $marker;
  public maxItemsType $max_items;
  public pathType $path_prefix;
  public arnType $policy_arn;
  public PolicyUsageType $policy_usage_filter;
}

class ListEntitiesForPolicyResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public PolicyGroupListType $policy_groups;
  public PolicyRoleListType $policy_roles;
  public PolicyUserListType $policy_users;
}

class ListGroupPoliciesRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class ListGroupPoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyNameListType $policy_names;
}

class ListGroupsForUserRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;
}

class ListGroupsForUserResponse {
  public groupListType $groups;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListGroupsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;
}

class ListGroupsResponse {
  public groupListType $groups;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListInstanceProfilesForRoleRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public roleNameType $role_name;
}

class ListInstanceProfilesForRoleResponse {
  public instanceProfileListType $instance_profiles;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListInstanceProfilesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;
}

class ListInstanceProfilesResponse {
  public instanceProfileListType $instance_profiles;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListMFADevicesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;
}

class ListMFADevicesResponse {
  public booleanType $is_truncated;
  public mfaDeviceListType $mfa_devices;
  public responseMarkerType $marker;
}

class ListOpenIDConnectProvidersRequest {
}

class ListOpenIDConnectProvidersResponse {
  public OpenIDConnectProviderListType $open_id_connect_provider_list;
}

class ListPoliciesGrantingServiceAccessEntry {
  public policyGrantingServiceAccessListType $policies;
  public serviceNamespaceType $service_namespace;
}

class ListPoliciesGrantingServiceAccessRequest {
  public arnType $arn;
  public markerType $marker;
  public serviceNamespaceListType $service_namespaces;
}

class ListPoliciesGrantingServiceAccessResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public listPolicyGrantingServiceAccessResponseListType $policies_granting_service_access;
}

class ListPoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public booleanType $only_attached;
  public policyPathType $path_prefix;
  public PolicyUsageType $policy_usage_filter;
  public policyScopeType $scope;
}

class ListPoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyListType $policies;
}

class ListPolicyVersionsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public arnType $policy_arn;
}

class ListPolicyVersionsResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyDocumentVersionListType $versions;
}

class ListRolePoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public roleNameType $role_name;
}

class ListRolePoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyNameListType $policy_names;
}

class ListRoleTagsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public roleNameType $role_name;
}

class ListRoleTagsResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public tagListType $tags;
}

class ListRolesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;
}

class ListRolesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public roleListType $roles;
}

class ListSAMLProvidersRequest {
}

class ListSAMLProvidersResponse {
  public SAMLProviderListType $saml_provider_list;
}

class ListSSHPublicKeysRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public userNameType $user_name;
}

class ListSSHPublicKeysResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public SSHPublicKeyListType $ssh_public_keys;
}

class ListServerCertificatesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;
}

class ListServerCertificatesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public serverCertificateMetadataListType $server_certificate_metadata_list;
}

class ListServiceSpecificCredentialsRequest {
  public serviceName $service_name;
  public userNameType $user_name;
}

class ListServiceSpecificCredentialsResponse {
  public ServiceSpecificCredentialsListType $service_specific_credentials;
}

class ListSigningCertificatesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;
}

class ListSigningCertificatesResponse {
  public certificateListType $certificates;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListUserPoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;
}

class ListUserPoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyNameListType $policy_names;
}

class ListUserTagsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;
}

class ListUserTagsResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public tagListType $tags;
}

class ListUsersRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;
}

class ListUsersResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public userListType $users;
}

class ListVirtualMFADevicesRequest {
  public assignmentStatusType $assignment_status;
  public markerType $marker;
  public maxItemsType $max_items;
}

class ListVirtualMFADevicesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public virtualMFADeviceListType $virtual_mfa_devices;
}

class LoginProfile {
  public dateType $create_date;
  public booleanType $password_reset_required;
  public userNameType $user_name;
}

class MFADevice {
  public dateType $enable_date;
  public serialNumberType $serial_number;
  public userNameType $user_name;
}

class MalformedCertificateException {
  public malformedCertificateMessage $message;
}

class MalformedPolicyDocumentException {
  public malformedPolicyDocumentMessage $message;
}

class ManagedPolicyDetail {
  public arnType $arn;
  public attachmentCountType $attachment_count;
  public dateType $create_date;
  public policyVersionIdType $default_version_id;
  public policyDescriptionType $description;
  public booleanType $is_attachable;
  public policyPathType $path;
  public attachmentCountType $permissions_boundary_usage_count;
  public idType $policy_id;
  public policyNameType $policy_name;
  public policyDocumentVersionListType $policy_version_list;
  public dateType $update_date;
}

class ManagedPolicyDetailListType {
}

class NoSuchEntityException {
  public noSuchEntityMessage $message;
}

class OpenIDConnectProviderListEntry {
  public arnType $arn;
}

class OpenIDConnectProviderListType {
}

class OpenIDConnectProviderUrlType {
}

class OrganizationsDecisionDetail {
  public booleanType $allowed_by_organizations;
}

class PasswordPolicy {
  public booleanType $allow_users_to_change_password;
  public booleanType $expire_passwords;
  public booleanObjectType $hard_expiry;
  public maxPasswordAgeType $max_password_age;
  public minimumPasswordLengthType $minimum_password_length;
  public passwordReusePreventionType $password_reuse_prevention;
  public booleanType $require_lowercase_characters;
  public booleanType $require_numbers;
  public booleanType $require_symbols;
  public booleanType $require_uppercase_characters;
}

class PasswordPolicyViolationException {
  public passwordPolicyViolationMessage $message;
}

class PermissionsBoundaryAttachmentType {
}

class PermissionsBoundaryDecisionDetail {
  public booleanType $allowed_by_permissions_boundary;
}

class Policy {
  public arnType $arn;
  public attachmentCountType $attachment_count;
  public dateType $create_date;
  public policyVersionIdType $default_version_id;
  public policyDescriptionType $description;
  public booleanType $is_attachable;
  public policyPathType $path;
  public attachmentCountType $permissions_boundary_usage_count;
  public idType $policy_id;
  public policyNameType $policy_name;
  public dateType $update_date;
}

class PolicyDetail {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
}

class PolicyEvaluationDecisionType {
}

class PolicyEvaluationException {
  public policyEvaluationErrorMessage $message;
}

class PolicyGrantingServiceAccess {
  public entityNameType $entity_name;
  public policyOwnerEntityType $entity_type;
  public arnType $policy_arn;
  public policyNameType $policy_name;
  public policyType $policy_type;
}

class PolicyGroup {
  public idType $group_id;
  public groupNameType $group_name;
}

class PolicyGroupListType {
}

class PolicyIdentifierType {
}

class PolicyNotAttachableException {
  public policyNotAttachableMessage $message;
}

class PolicyRole {
  public idType $role_id;
  public roleNameType $role_name;
}

class PolicyRoleListType {
}

class PolicySourceType {
}

class PolicyUsageType {
}

class PolicyUser {
  public idType $user_id;
  public userNameType $user_name;
}

class PolicyUserListType {
}

class PolicyVersion {
  public dateType $create_date;
  public policyDocumentType $document;
  public booleanType $is_default_version;
  public policyVersionIdType $version_id;
}

class Position {
  public ColumnNumber $column;
  public LineNumber $line;
}

class PutGroupPolicyRequest {
  public groupNameType $group_name;
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
}

class PutRolePermissionsBoundaryRequest {
  public arnType $permissions_boundary;
  public roleNameType $role_name;
}

class PutRolePolicyRequest {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public roleNameType $role_name;
}

class PutUserPermissionsBoundaryRequest {
  public arnType $permissions_boundary;
  public userNameType $user_name;
}

class PutUserPolicyRequest {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public existingUserNameType $user_name;
}

class ReasonType {
}

class RegionNameType {
}

class RemoveClientIDFromOpenIDConnectProviderRequest {
  public clientIDType $client_id;
  public arnType $open_id_connect_provider_arn;
}

class RemoveRoleFromInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public roleNameType $role_name;
}

class RemoveUserFromGroupRequest {
  public groupNameType $group_name;
  public existingUserNameType $user_name;
}

class ReportContentType {
}

class ReportFormatType {
}

class ReportGenerationLimitExceededException {
  public reportGenerationLimitExceededMessage $message;
}

class ReportStateDescriptionType {
}

class ReportStateType {
}

class ResetServiceSpecificCredentialRequest {
  public serviceSpecificCredentialId $service_specific_credential_id;
  public userNameType $user_name;
}

class ResetServiceSpecificCredentialResponse {
  public ServiceSpecificCredential $service_specific_credential;
}

class ResourceHandlingOptionType {
}

class ResourceNameListType {
}

class ResourceNameType {
}

class ResourceSpecificResult {
  public EvalDecisionDetailsType $eval_decision_details;
  public PolicyEvaluationDecisionType $eval_resource_decision;
  public ResourceNameType $eval_resource_name;
  public StatementListType $matched_statements;
  public ContextKeyNamesResultListType $missing_context_values;
  public PermissionsBoundaryDecisionDetail $permissions_boundary_decision_detail;
}

class ResourceSpecificResultListType {
}

class ResyncMFADeviceRequest {
  public authenticationCodeType $authentication_code_1;
  public authenticationCodeType $authentication_code_2;
  public serialNumberType $serial_number;
  public existingUserNameType $user_name;
}

class Role {
  public arnType $arn;
  public policyDocumentType $assume_role_policy_document;
  public dateType $create_date;
  public roleDescriptionType $description;
  public roleMaxSessionDurationType $max_session_duration;
  public pathType $path;
  public AttachedPermissionsBoundary $permissions_boundary;
  public idType $role_id;
  public RoleLastUsed $role_last_used;
  public roleNameType $role_name;
  public tagListType $tags;
}

class RoleDetail {
  public arnType $arn;
  public policyDocumentType $assume_role_policy_document;
  public attachedPoliciesListType $attached_managed_policies;
  public dateType $create_date;
  public instanceProfileListType $instance_profile_list;
  public pathType $path;
  public AttachedPermissionsBoundary $permissions_boundary;
  public idType $role_id;
  public RoleLastUsed $role_last_used;
  public roleNameType $role_name;
  public policyDetailListType $role_policy_list;
  public tagListType $tags;
}

class RoleLastUsed {
  public dateType $last_used_date;
  public stringType $region;
}

class RoleUsageListType {
}

class RoleUsageType {
  public RegionNameType $region;
  public ArnListType $resources;
}

class SAMLMetadataDocumentType {
}

class SAMLProviderListEntry {
  public arnType $arn;
  public dateType $create_date;
  public dateType $valid_until;
}

class SAMLProviderListType {
}

class SAMLProviderNameType {
}

class SSHPublicKey {
  public publicKeyFingerprintType $fingerprint;
  public publicKeyMaterialType $ssh_public_key_body;
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
  public dateType $upload_date;
  public userNameType $user_name;
}

class SSHPublicKeyListType {
}

class SSHPublicKeyMetadata {
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
  public dateType $upload_date;
  public userNameType $user_name;
}

class ServerCertificate {
  public certificateBodyType $certificate_body;
  public certificateChainType $certificate_chain;
  public ServerCertificateMetadata $server_certificate_metadata;
}

class ServerCertificateMetadata {
  public arnType $arn;
  public dateType $expiration;
  public pathType $path;
  public idType $server_certificate_id;
  public serverCertificateNameType $server_certificate_name;
  public dateType $upload_date;
}

class ServiceFailureException {
  public serviceFailureExceptionMessage $message;
}

class ServiceLastAccessed {
  public dateType $last_authenticated;
  public arnType $last_authenticated_entity;
  public serviceNameType $service_name;
  public serviceNamespaceType $service_namespace;
  public integerType $total_authenticated_entities;
}

class ServiceNotSupportedException {
  public serviceNotSupportedMessage $message;
}

class ServiceSpecificCredential {
  public dateType $create_date;
  public serviceName $service_name;
  public servicePassword $service_password;
  public serviceSpecificCredentialId $service_specific_credential_id;
  public serviceUserName $service_user_name;
  public statusType $status;
  public userNameType $user_name;
}

class ServiceSpecificCredentialMetadata {
  public dateType $create_date;
  public serviceName $service_name;
  public serviceSpecificCredentialId $service_specific_credential_id;
  public serviceUserName $service_user_name;
  public statusType $status;
  public userNameType $user_name;
}

class ServiceSpecificCredentialsListType {
}

class ServicesLastAccessed {
}

class SetDefaultPolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;
}

class SetSecurityTokenServicePreferencesRequest {
  public globalEndpointTokenVersion $global_endpoint_token_version;
}

class SigningCertificate {
  public certificateBodyType $certificate_body;
  public certificateIdType $certificate_id;
  public statusType $status;
  public dateType $upload_date;
  public userNameType $user_name;
}

class SimulateCustomPolicyRequest {
  public ActionNameListType $action_names;
  public ResourceNameType $caller_arn;
  public ContextEntryListType $context_entries;
  public markerType $marker;
  public maxItemsType $max_items;
  public SimulationPolicyListType $permissions_boundary_policy_input_list;
  public SimulationPolicyListType $policy_input_list;
  public ResourceNameListType $resource_arns;
  public ResourceHandlingOptionType $resource_handling_option;
  public ResourceNameType $resource_owner;
  public policyDocumentType $resource_policy;
}

class SimulatePolicyResponse {
  public EvaluationResultsListType $evaluation_results;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class SimulatePrincipalPolicyRequest {
  public ActionNameListType $action_names;
  public ResourceNameType $caller_arn;
  public ContextEntryListType $context_entries;
  public markerType $marker;
  public maxItemsType $max_items;
  public SimulationPolicyListType $permissions_boundary_policy_input_list;
  public SimulationPolicyListType $policy_input_list;
  public arnType $policy_source_arn;
  public ResourceNameListType $resource_arns;
  public ResourceHandlingOptionType $resource_handling_option;
  public ResourceNameType $resource_owner;
  public policyDocumentType $resource_policy;
}

class SimulationPolicyListType {
}

class Statement {
  public Position $end_position;
  public PolicyIdentifierType $source_policy_id;
  public PolicySourceType $source_policy_type;
  public Position $start_position;
}

class StatementListType {
}

class Tag {
  public tagKeyType $key;
  public tagValueType $value;
}

class TagRoleRequest {
  public roleNameType $role_name;
  public tagListType $tags;
}

class TagUserRequest {
  public tagListType $tags;
  public existingUserNameType $user_name;
}

class UnmodifiableEntityException {
  public unmodifiableEntityMessage $message;
}

class UnrecognizedPublicKeyEncodingException {
  public unrecognizedPublicKeyEncodingMessage $message;
}

class UntagRoleRequest {
  public roleNameType $role_name;
  public tagKeyListType $tag_keys;
}

class UntagUserRequest {
  public tagKeyListType $tag_keys;
  public existingUserNameType $user_name;
}

class UpdateAccessKeyRequest {
  public accessKeyIdType $access_key_id;
  public statusType $status;
  public existingUserNameType $user_name;
}

class UpdateAccountPasswordPolicyRequest {
  public booleanType $allow_users_to_change_password;
  public booleanObjectType $hard_expiry;
  public maxPasswordAgeType $max_password_age;
  public minimumPasswordLengthType $minimum_password_length;
  public passwordReusePreventionType $password_reuse_prevention;
  public booleanType $require_lowercase_characters;
  public booleanType $require_numbers;
  public booleanType $require_symbols;
  public booleanType $require_uppercase_characters;
}

class UpdateAssumeRolePolicyRequest {
  public policyDocumentType $policy_document;
  public roleNameType $role_name;
}

class UpdateGroupRequest {
  public groupNameType $group_name;
  public groupNameType $new_group_name;
  public pathType $new_path;
}

class UpdateLoginProfileRequest {
  public passwordType $password;
  public booleanObjectType $password_reset_required;
  public userNameType $user_name;
}

class UpdateOpenIDConnectProviderThumbprintRequest {
  public arnType $open_id_connect_provider_arn;
  public thumbprintListType $thumbprint_list;
}

class UpdateRoleDescriptionRequest {
  public roleDescriptionType $description;
  public roleNameType $role_name;
}

class UpdateRoleDescriptionResponse {
  public Role $role;
}

class UpdateRoleRequest {
  public roleDescriptionType $description;
  public roleMaxSessionDurationType $max_session_duration;
  public roleNameType $role_name;
}

class UpdateRoleResponse {
}

class UpdateSAMLProviderRequest {
  public SAMLMetadataDocumentType $saml_metadata_document;
  public arnType $saml_provider_arn;
}

class UpdateSAMLProviderResponse {
  public arnType $saml_provider_arn;
}

class UpdateSSHPublicKeyRequest {
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
  public userNameType $user_name;
}

class UpdateServerCertificateRequest {
  public pathType $new_path;
  public serverCertificateNameType $new_server_certificate_name;
  public serverCertificateNameType $server_certificate_name;
}

class UpdateServiceSpecificCredentialRequest {
  public serviceSpecificCredentialId $service_specific_credential_id;
  public statusType $status;
  public userNameType $user_name;
}

class UpdateSigningCertificateRequest {
  public certificateIdType $certificate_id;
  public statusType $status;
  public existingUserNameType $user_name;
}

class UpdateUserRequest {
  public pathType $new_path;
  public userNameType $new_user_name;
  public existingUserNameType $user_name;
}

class UploadSSHPublicKeyRequest {
  public publicKeyMaterialType $ssh_public_key_body;
  public userNameType $user_name;
}

class UploadSSHPublicKeyResponse {
  public SSHPublicKey $ssh_public_key;
}

class UploadServerCertificateRequest {
  public certificateBodyType $certificate_body;
  public certificateChainType $certificate_chain;
  public pathType $path;
  public privateKeyType $private_key;
  public serverCertificateNameType $server_certificate_name;
}

class UploadServerCertificateResponse {
  public ServerCertificateMetadata $server_certificate_metadata;
}

class UploadSigningCertificateRequest {
  public certificateBodyType $certificate_body;
  public existingUserNameType $user_name;
}

class UploadSigningCertificateResponse {
  public SigningCertificate $certificate;
}

class User {
  public arnType $arn;
  public dateType $create_date;
  public dateType $password_last_used;
  public pathType $path;
  public AttachedPermissionsBoundary $permissions_boundary;
  public tagListType $tags;
  public idType $user_id;
  public userNameType $user_name;
}

class UserDetail {
  public arnType $arn;
  public attachedPoliciesListType $attached_managed_policies;
  public dateType $create_date;
  public groupNameListType $group_list;
  public pathType $path;
  public AttachedPermissionsBoundary $permissions_boundary;
  public tagListType $tags;
  public idType $user_id;
  public userNameType $user_name;
  public policyDetailListType $user_policy_list;
}

class VirtualMFADevice {
  public BootstrapDatum $base_32_string_seed;
  public dateType $enable_date;
  public BootstrapDatum $qr_code_png;
  public serialNumberType $serial_number;
  public User $user;
}

class accessKeyIdType {
}

class accessKeyMetadataListType {
}

class accessKeySecretType {
}

class accountAliasListType {
}

class accountAliasType {
}

class arnType {
}

class assignmentStatusType {
}

class attachedPoliciesListType {
}

class attachmentCountType {
}

class authenticationCodeType {
}

class booleanObjectType {
}

class booleanType {
}

class certificateBodyType {
}

class certificateChainType {
}

class certificateIdType {
}

class certificateListType {
}

class clientIDListType {
}

class clientIDType {
}

class credentialReportExpiredExceptionMessage {
}

class credentialReportNotPresentExceptionMessage {
}

class credentialReportNotReadyExceptionMessage {
}

class customSuffixType {
}

class dateType {
}

class deleteConflictMessage {
}

class duplicateCertificateMessage {
}

class duplicateSSHPublicKeyMessage {
}

class encodingType {
}

class entityAlreadyExistsMessage {
}

class entityDetailsListType {
}

class entityListType {
}

class entityNameType {
}

class entityTemporarilyUnmodifiableMessage {
}

class existingUserNameType {
}

class globalEndpointTokenVersion {
}

class groupDetailListType {
}

class groupListType {
}

class groupNameListType {
}

class groupNameType {
}

class idType {
}

class instanceProfileListType {
}

class instanceProfileNameType {
}

class integerType {
}

class invalidAuthenticationCodeMessage {
}

class invalidCertificateMessage {
}

class invalidInputMessage {
}

class invalidPublicKeyMessage {
}

class invalidUserTypeMessage {
}

class jobIDType {
}

class jobStatusType {
}

class keyPairMismatchMessage {
}

class limitExceededMessage {
}

class listPolicyGrantingServiceAccessResponseListType {
}

class malformedCertificateMessage {
}

class malformedPolicyDocumentMessage {
}

class markerType {
}

class maxItemsType {
}

class maxPasswordAgeType {
}

class mfaDeviceListType {
}

class minimumPasswordLengthType {
}

class noSuchEntityMessage {
}

class organizationsEntityPathType {
}

class organizationsPolicyIdType {
}

class passwordPolicyViolationMessage {
}

class passwordReusePreventionType {
}

class passwordType {
}

class pathPrefixType {
}

class pathType {
}

class policyDescriptionType {
}

class policyDetailListType {
}

class policyDocumentType {
}

class policyDocumentVersionListType {
}

class policyEvaluationErrorMessage {
}

class policyGrantingServiceAccessListType {
}

class policyListType {
}

class policyNameListType {
}

class policyNameType {
}

class policyNotAttachableMessage {
}

class policyOwnerEntityType {
}

class policyPathType {
}

class policyScopeType {
}

class policyType {
}

class policyVersionIdType {
}

class privateKeyType {
}

class publicKeyFingerprintType {
}

class publicKeyIdType {
}

class publicKeyMaterialType {
}

class reportGenerationLimitExceededMessage {
}

class responseMarkerType {
}

class roleDescriptionType {
}

class roleDetailListType {
}

class roleListType {
}

class roleMaxSessionDurationType {
}

class roleNameType {
}

class serialNumberType {
}

class serverCertificateMetadataListType {
}

class serverCertificateNameType {
}

class serviceFailureExceptionMessage {
}

class serviceName {
}

class serviceNameType {
}

class serviceNamespaceListType {
}

class serviceNamespaceType {
}

class serviceNotSupportedMessage {
}

class servicePassword {
}

class serviceSpecificCredentialId {
}

class serviceUserName {
}

class sortKeyType {
}

class statusType {
}

class stringType {
}

class summaryKeyType {
}

class summaryMapType {
}

class summaryValueType {
}

class tagKeyListType {
}

class tagKeyType {
}

class tagListType {
}

class tagValueType {
}

class thumbprintListType {
}

class thumbprintType {
}

class unmodifiableEntityMessage {
}

class unrecognizedPublicKeyEncodingMessage {
}

class userDetailListType {
}

class userListType {
}

class userNameType {
}

class virtualMFADeviceListType {
}

class virtualMFADeviceName {
}

