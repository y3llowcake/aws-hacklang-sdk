<?hh // strict
namespace slack\aws\iam;

interface IAM {
  public function ListGroupPolicies(ListGroupPoliciesRequest) Awaitable<Errors\Result<ListGroupPoliciesResponse>>;
  public function ListUserTags(ListUserTagsRequest) Awaitable<Errors\Result<ListUserTagsResponse>>;
  public function AttachGroupPolicy(AttachGroupPolicyRequest) Awaitable<Errors\Error>;
  public function GetOpenIDConnectProvider(GetOpenIDConnectProviderRequest) Awaitable<Errors\Result<GetOpenIDConnectProviderResponse>>;
  public function ListOpenIDConnectProviders(ListOpenIDConnectProvidersRequest) Awaitable<Errors\Result<ListOpenIDConnectProvidersResponse>>;
  public function ListRolePolicies(ListRolePoliciesRequest) Awaitable<Errors\Result<ListRolePoliciesResponse>>;
  public function CreateVirtualMFADevice(CreateVirtualMFADeviceRequest) Awaitable<Errors\Result<CreateVirtualMFADeviceResponse>>;
  public function DeleteSigningCertificate(DeleteSigningCertificateRequest) Awaitable<Errors\Error>;
  public function DetachGroupPolicy(DetachGroupPolicyRequest) Awaitable<Errors\Error>;
  public function ListEntitiesForPolicy(ListEntitiesForPolicyRequest) Awaitable<Errors\Result<ListEntitiesForPolicyResponse>>;
  public function ListInstanceProfilesForRole(ListInstanceProfilesForRoleRequest) Awaitable<Errors\Result<ListInstanceProfilesForRoleResponse>>;
  public function ListSSHPublicKeys(ListSSHPublicKeysRequest) Awaitable<Errors\Result<ListSSHPublicKeysResponse>>;
  public function AddRoleToInstanceProfile(AddRoleToInstanceProfileRequest) Awaitable<Errors\Error>;
  public function GetUserPolicy(GetUserPolicyRequest) Awaitable<Errors\Result<GetUserPolicyResponse>>;
  public function GetAccessKeyLastUsed(GetAccessKeyLastUsedRequest) Awaitable<Errors\Result<GetAccessKeyLastUsedResponse>>;
  public function ListSAMLProviders(ListSAMLProvidersRequest) Awaitable<Errors\Result<ListSAMLProvidersResponse>>;
  public function ResetServiceSpecificCredential(ResetServiceSpecificCredentialRequest) Awaitable<Errors\Result<ResetServiceSpecificCredentialResponse>>;
  public function CreateSAMLProvider(CreateSAMLProviderRequest) Awaitable<Errors\Result<CreateSAMLProviderResponse>>;
  public function DeleteAccountAlias(DeleteAccountAliasRequest) Awaitable<Errors\Error>;
  public function DeactivateMFADevice(DeactivateMFADeviceRequest) Awaitable<Errors\Error>;
  public function DeleteOpenIDConnectProvider(DeleteOpenIDConnectProviderRequest) Awaitable<Errors\Error>;
  public function DeleteRole(DeleteRoleRequest) Awaitable<Errors\Error>;
  public function GetServerCertificate(GetServerCertificateRequest) Awaitable<Errors\Result<GetServerCertificateResponse>>;
  public function GetServiceLastAccessedDetails(GetServiceLastAccessedDetailsRequest) Awaitable<Errors\Result<GetServiceLastAccessedDetailsResponse>>;
  public function ListMFADevices(ListMFADevicesRequest) Awaitable<Errors\Result<ListMFADevicesResponse>>;
  public function ChangePassword(ChangePasswordRequest) Awaitable<Errors\Error>;
  public function CreateAccountAlias(CreateAccountAliasRequest) Awaitable<Errors\Error>;
  public function UpdateAccessKey(UpdateAccessKeyRequest) Awaitable<Errors\Error>;
  public function GetLoginProfile(GetLoginProfileRequest) Awaitable<Errors\Result<GetLoginProfileResponse>>;
  public function GetRolePolicy(GetRolePolicyRequest) Awaitable<Errors\Result<GetRolePolicyResponse>>;
  public function GetOrganizationsAccessReport(GetOrganizationsAccessReportRequest) Awaitable<Errors\Result<GetOrganizationsAccessReportResponse>>;
  public function AttachRolePolicy(AttachRolePolicyRequest) Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest) Awaitable<Errors\Error>;
  public function GetAccountPasswordPolicy() Awaitable<Errors\Result<GetAccountPasswordPolicyResponse>>;
  public function ListSigningCertificates(ListSigningCertificatesRequest) Awaitable<Errors\Result<ListSigningCertificatesResponse>>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest) Awaitable<Errors\Error>;
  public function DeleteLoginProfile(DeleteLoginProfileRequest) Awaitable<Errors\Error>;
  public function ListUsers(ListUsersRequest) Awaitable<Errors\Result<ListUsersResponse>>;
  public function PutUserPermissionsBoundary(PutUserPermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function UpdateServiceSpecificCredential(UpdateServiceSpecificCredentialRequest) Awaitable<Errors\Error>;
  public function DeleteVirtualMFADevice(DeleteVirtualMFADeviceRequest) Awaitable<Errors\Error>;
  public function GetInstanceProfile(GetInstanceProfileRequest) Awaitable<Errors\Result<GetInstanceProfileResponse>>;
  public function GetContextKeysForCustomPolicy(GetContextKeysForCustomPolicyRequest) Awaitable<Errors\Result<GetContextKeysForPolicyResponse>>;
  public function GetUser(GetUserRequest) Awaitable<Errors\Result<GetUserResponse>>;
  public function RemoveUserFromGroup(RemoveUserFromGroupRequest) Awaitable<Errors\Error>;
  public function UpdateSigningCertificate(UpdateSigningCertificateRequest) Awaitable<Errors\Error>;
  public function UploadSSHPublicKey(UploadSSHPublicKeyRequest) Awaitable<Errors\Result<UploadSSHPublicKeyResponse>>;
  public function GetAccountAuthorizationDetails(GetAccountAuthorizationDetailsRequest) Awaitable<Errors\Result<GetAccountAuthorizationDetailsResponse>>;
  public function ListPoliciesGrantingServiceAccess(ListPoliciesGrantingServiceAccessRequest) Awaitable<Errors\Result<ListPoliciesGrantingServiceAccessResponse>>;
  public function GetRole(GetRoleRequest) Awaitable<Errors\Result<GetRoleResponse>>;
  public function ListAccessKeys(ListAccessKeysRequest) Awaitable<Errors\Result<ListAccessKeysResponse>>;
  public function PutRolePermissionsBoundary(PutRolePermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function UpdateRoleDescription(UpdateRoleDescriptionRequest) Awaitable<Errors\Result<UpdateRoleDescriptionResponse>>;
  public function UploadServerCertificate(UploadServerCertificateRequest) Awaitable<Errors\Result<UploadServerCertificateResponse>>;
  public function DeletePolicyVersion(DeletePolicyVersionRequest) Awaitable<Errors\Error>;
  public function DeleteSAMLProvider(DeleteSAMLProviderRequest) Awaitable<Errors\Error>;
  public function ListServiceSpecificCredentials(ListServiceSpecificCredentialsRequest) Awaitable<Errors\Result<ListServiceSpecificCredentialsResponse>>;
  public function RemoveClientIDFromOpenIDConnectProvider(RemoveClientIDFromOpenIDConnectProviderRequest) Awaitable<Errors\Error>;
  public function UpdateRole(UpdateRoleRequest) Awaitable<Errors\Result<UpdateRoleResponse>>;
  public function CreateLoginProfile(CreateLoginProfileRequest) Awaitable<Errors\Result<CreateLoginProfileResponse>>;
  public function ListPolicyVersions(ListPolicyVersionsRequest) Awaitable<Errors\Result<ListPolicyVersionsResponse>>;
  public function GetServiceLastAccessedDetailsWithEntities(GetServiceLastAccessedDetailsWithEntitiesRequest) Awaitable<Errors\Result<GetServiceLastAccessedDetailsWithEntitiesResponse>>;
  public function ListVirtualMFADevices(ListVirtualMFADevicesRequest) Awaitable<Errors\Result<ListVirtualMFADevicesResponse>>;
  public function PutUserPolicy(PutUserPolicyRequest) Awaitable<Errors\Error>;
  public function SetDefaultPolicyVersion(SetDefaultPolicyVersionRequest) Awaitable<Errors\Error>;
  public function DeleteGroupPolicy(DeleteGroupPolicyRequest) Awaitable<Errors\Error>;
  public function GetSAMLProvider(GetSAMLProviderRequest) Awaitable<Errors\Result<GetSAMLProviderResponse>>;
  public function GetGroup(GetGroupRequest) Awaitable<Errors\Result<GetGroupResponse>>;
  public function GetPolicy(GetPolicyRequest) Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetServiceLinkedRoleDeletionStatus(GetServiceLinkedRoleDeletionStatusRequest) Awaitable<Errors\Result<GetServiceLinkedRoleDeletionStatusResponse>>;
  public function RemoveRoleFromInstanceProfile(RemoveRoleFromInstanceProfileRequest) Awaitable<Errors\Error>;
  public function DeleteUserPolicy(DeleteUserPolicyRequest) Awaitable<Errors\Error>;
  public function GetContextKeysForPrincipalPolicy(GetContextKeysForPrincipalPolicyRequest) Awaitable<Errors\Result<GetContextKeysForPolicyResponse>>;
  public function ListAttachedRolePolicies(ListAttachedRolePoliciesRequest) Awaitable<Errors\Result<ListAttachedRolePoliciesResponse>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest) Awaitable<Errors\Result<ListInstanceProfilesResponse>>;
  public function TagRole(TagRoleRequest) Awaitable<Errors\Error>;
  public function UpdateSAMLProvider(UpdateSAMLProviderRequest) Awaitable<Errors\Result<UpdateSAMLProviderResponse>>;
  public function DeleteGroup(DeleteGroupRequest) Awaitable<Errors\Error>;
  public function ListAccountAliases(ListAccountAliasesRequest) Awaitable<Errors\Result<ListAccountAliasesResponse>>;
  public function ListAttachedUserPolicies(ListAttachedUserPoliciesRequest) Awaitable<Errors\Result<ListAttachedUserPoliciesResponse>>;
  public function TagUser(TagUserRequest) Awaitable<Errors\Error>;
  public function DetachUserPolicy(DetachUserPolicyRequest) Awaitable<Errors\Error>;
  public function GenerateCredentialReport() Awaitable<Errors\Result<GenerateCredentialReportResponse>>;
  public function EnableMFADevice(EnableMFADeviceRequest) Awaitable<Errors\Error>;
  public function UpdateAssumeRolePolicy(UpdateAssumeRolePolicyRequest) Awaitable<Errors\Error>;
  public function CreateAccessKey(CreateAccessKeyRequest) Awaitable<Errors\Result<CreateAccessKeyResponse>>;
  public function DeleteAccessKey(DeleteAccessKeyRequest) Awaitable<Errors\Error>;
  public function GetPolicyVersion(GetPolicyVersionRequest) Awaitable<Errors\Result<GetPolicyVersionResponse>>;
  public function ListGroups(ListGroupsRequest) Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ResyncMFADevice(ResyncMFADeviceRequest) Awaitable<Errors\Error>;
  public function DeleteServiceSpecificCredential(DeleteServiceSpecificCredentialRequest) Awaitable<Errors\Error>;
  public function DetachRolePolicy(DetachRolePolicyRequest) Awaitable<Errors\Error>;
  public function UploadSigningCertificate(UploadSigningCertificateRequest) Awaitable<Errors\Result<UploadSigningCertificateResponse>>;
  public function DeleteUserPermissionsBoundary(DeleteUserPermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function SimulateCustomPolicy(SimulateCustomPolicyRequest) Awaitable<Errors\Result<SimulatePolicyResponse>>;
  public function ListServerCertificates(ListServerCertificatesRequest) Awaitable<Errors\Result<ListServerCertificatesResponse>>;
  public function DeleteUser(DeleteUserRequest) Awaitable<Errors\Error>;
  public function GetCredentialReport() Awaitable<Errors\Result<GetCredentialReportResponse>>;
  public function SimulatePrincipalPolicy(SimulatePrincipalPolicyRequest) Awaitable<Errors\Result<SimulatePolicyResponse>>;
  public function UntagUser(UntagUserRequest) Awaitable<Errors\Error>;
  public function UpdateOpenIDConnectProviderThumbprint(UpdateOpenIDConnectProviderThumbprintRequest) Awaitable<Errors\Error>;
  public function CreatePolicyVersion(CreatePolicyVersionRequest) Awaitable<Errors\Result<CreatePolicyVersionResponse>>;
  public function ListRoles(ListRolesRequest) Awaitable<Errors\Result<ListRolesResponse>>;
  public function ListAttachedGroupPolicies(ListAttachedGroupPoliciesRequest) Awaitable<Errors\Result<ListAttachedGroupPoliciesResponse>>;
  public function ListPolicies(ListPoliciesRequest) Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function UpdateAccountPasswordPolicy(UpdateAccountPasswordPolicyRequest) Awaitable<Errors\Error>;
  public function CreatePolicy(CreatePolicyRequest) Awaitable<Errors\Result<CreatePolicyResponse>>;
  public function CreateUser(CreateUserRequest) Awaitable<Errors\Result<CreateUserResponse>>;
  public function UntagRole(UntagRoleRequest) Awaitable<Errors\Error>;
  public function AddUserToGroup(AddUserToGroupRequest) Awaitable<Errors\Error>;
  public function DeleteAccountPasswordPolicy() Awaitable<Errors\Error>;
  public function GetSSHPublicKey(GetSSHPublicKeyRequest) Awaitable<Errors\Result<GetSSHPublicKeyResponse>>;
  public function ListRoleTags(ListRoleTagsRequest) Awaitable<Errors\Result<ListRoleTagsResponse>>;
  public function UpdateSSHPublicKey(UpdateSSHPublicKeyRequest) Awaitable<Errors\Error>;
  public function DeleteServerCertificate(DeleteServerCertificateRequest) Awaitable<Errors\Error>;
  public function GenerateOrganizationsAccessReport(GenerateOrganizationsAccessReportRequest) Awaitable<Errors\Result<GenerateOrganizationsAccessReportResponse>>;
  public function UpdateLoginProfile(UpdateLoginProfileRequest) Awaitable<Errors\Error>;
  public function AttachUserPolicy(AttachUserPolicyRequest) Awaitable<Errors\Error>;
  public function PutGroupPolicy(PutGroupPolicyRequest) Awaitable<Errors\Error>;
  public function UpdateServerCertificate(UpdateServerCertificateRequest) Awaitable<Errors\Error>;
  public function DeleteSSHPublicKey(DeleteSSHPublicKeyRequest) Awaitable<Errors\Error>;
  public function ListUserPolicies(ListUserPoliciesRequest) Awaitable<Errors\Result<ListUserPoliciesResponse>>;
  public function GetAccountSummary() Awaitable<Errors\Result<GetAccountSummaryResponse>>;
  public function UpdateGroup(UpdateGroupRequest) Awaitable<Errors\Error>;
  public function CreateServiceLinkedRole(CreateServiceLinkedRoleRequest) Awaitable<Errors\Result<CreateServiceLinkedRoleResponse>>;
  public function CreateServiceSpecificCredential(CreateServiceSpecificCredentialRequest) Awaitable<Errors\Result<CreateServiceSpecificCredentialResponse>>;
  public function GenerateServiceLastAccessedDetails(GenerateServiceLastAccessedDetailsRequest) Awaitable<Errors\Result<GenerateServiceLastAccessedDetailsResponse>>;
  public function ListGroupsForUser(ListGroupsForUserRequest) Awaitable<Errors\Result<ListGroupsForUserResponse>>;
  public function SetSecurityTokenServicePreferences(SetSecurityTokenServicePreferencesRequest) Awaitable<Errors\Error>;
  public function UpdateUser(UpdateUserRequest) Awaitable<Errors\Error>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest) Awaitable<Errors\Result<CreateInstanceProfileResponse>>;
  public function CreateOpenIDConnectProvider(CreateOpenIDConnectProviderRequest) Awaitable<Errors\Result<CreateOpenIDConnectProviderResponse>>;
  public function CreateRole(CreateRoleRequest) Awaitable<Errors\Result<CreateRoleResponse>>;
  public function DeleteRolePermissionsBoundary(DeleteRolePermissionsBoundaryRequest) Awaitable<Errors\Error>;
  public function DeleteRolePolicy(DeleteRolePolicyRequest) Awaitable<Errors\Error>;
  public function DeleteServiceLinkedRole(DeleteServiceLinkedRoleRequest) Awaitable<Errors\Result<DeleteServiceLinkedRoleResponse>>;
  public function GetGroupPolicy(GetGroupPolicyRequest) Awaitable<Errors\Result<GetGroupPolicyResponse>>;
  public function PutRolePolicy(PutRolePolicyRequest) Awaitable<Errors\Error>;
  public function AddClientIDToOpenIDConnectProvider(AddClientIDToOpenIDConnectProviderRequest) Awaitable<Errors\Error>;
  public function CreateGroup(CreateGroupRequest) Awaitable<Errors\Result<CreateGroupResponse>>;
}

class GetInstanceProfileResponse {
  public InstanceProfile $instance_profile;
}

class thumbprintType {
}

class ColumnNumber {
}

class PolicyGroup {
  public groupNameType $group_name;
  public idType $group_id;
}

class userNameType {
}

class AccessDetails {
}

class GetAccountAuthorizationDetailsResponse {
  public roleDetailListType $role_detail_list;
  public ManagedPolicyDetailListType $policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public userDetailListType $user_detail_list;
  public groupDetailListType $group_detail_list;
}

class InvalidCertificateException {
  public invalidCertificateMessage $message;
}

class SSHPublicKeyMetadata {
  public dateType $upload_date;
  public userNameType $user_name;
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
}

class DeleteVirtualMFADeviceRequest {
  public serialNumberType $serial_number;
}

class ListSAMLProvidersRequest {
}

class ListUsersRequest {
  public pathPrefixType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class SAMLMetadataDocumentType {
}

class entityListType {
}

class ListAccessKeysRequest {
  public existingUserNameType $user_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class SSHPublicKeyListType {
}

class ServerCertificateMetadata {
  public dateType $expiration;
  public pathType $path;
  public serverCertificateNameType $server_certificate_name;
  public idType $server_certificate_id;
  public arnType $arn;
  public dateType $upload_date;
}

class UploadSigningCertificateResponse {
  public SigningCertificate $certificate;
}

class CreateUserResponse {
  public User $user;
}

class EvalDecisionDetailsType {
}

class Tag {
  public tagValueType $value;
  public tagKeyType $key;
}

class UpdateServiceSpecificCredentialRequest {
  public userNameType $user_name;
  public serviceSpecificCredentialId $service_specific_credential_id;
  public statusType $status;
}

class policyPathType {
}

class reportGenerationLimitExceededMessage {
}

class maxPasswordAgeType {
}

class mfaDeviceListType {
}

class GenerateOrganizationsAccessReportRequest {
  public organizationsEntityPathType $entity_path;
  public organizationsPolicyIdType $organizations_policy_id;
}

class GenerateServiceLastAccessedDetailsResponse {
  public jobIDType $job_id;
}

class ListVirtualMFADevicesRequest {
  public assignmentStatusType $assignment_status;
  public markerType $marker;
  public maxItemsType $max_items;
}

class RoleUsageListType {
}

class accessKeySecretType {
}

class certificateIdType {
}

class ListPoliciesGrantingServiceAccessEntry {
  public serviceNamespaceType $service_namespace;
  public policyGrantingServiceAccessListType $policies;
}

class ResourceNameListType {
}

class unrecognizedPublicKeyEncodingMessage {
}

class ContextEntry {
  public ContextKeyNameType $context_key_name;
  public ContextKeyValueListType $context_key_values;
  public ContextKeyTypeEnum $context_key_type;
}

class EntityTemporarilyUnmodifiableException {
  public entityTemporarilyUnmodifiableMessage $message;
}

class GetAccountSummaryResponse {
  public summaryMapType $summary_map;
}

class GetGroupPolicyRequest {
  public groupNameType $group_name;
  public policyNameType $policy_name;
}

class NoSuchEntityException {
  public noSuchEntityMessage $message;
}

class PolicyNotAttachableException {
  public policyNotAttachableMessage $message;
}

class policyListType {
}

class AccessKeyLastUsed {
  public stringType $service_name;
  public stringType $region;
  public dateType $last_used_date;
}

class UpdateUserRequest {
  public pathType $new_path;
  public userNameType $new_user_name;
  public existingUserNameType $user_name;
}

class GetOpenIDConnectProviderResponse {
  public OpenIDConnectProviderUrlType $url;
  public clientIDListType $client_id_list;
  public thumbprintListType $thumbprint_list;
  public dateType $create_date;
}

class ListSAMLProvidersResponse {
  public SAMLProviderListType $saml_provider_list;
}

class RemoveUserFromGroupRequest {
  public groupNameType $group_name;
  public existingUserNameType $user_name;
}

class policyDocumentVersionListType {
}

class PolicyRole {
  public roleNameType $role_name;
  public idType $role_id;
}

class malformedCertificateMessage {
}

class PutUserPermissionsBoundaryRequest {
  public userNameType $user_name;
  public arnType $permissions_boundary;
}

class SimulatePrincipalPolicyRequest {
  public SimulationPolicyListType $permissions_boundary_policy_input_list;
  public policyDocumentType $resource_policy;
  public maxItemsType $max_items;
  public markerType $marker;
  public ResourceHandlingOptionType $resource_handling_option;
  public arnType $policy_source_arn;
  public SimulationPolicyListType $policy_input_list;
  public ActionNameListType $action_names;
  public ResourceNameListType $resource_arns;
  public ResourceNameType $resource_owner;
  public ResourceNameType $caller_arn;
  public ContextEntryListType $context_entries;
}

class AttachedPolicy {
  public policyNameType $policy_name;
  public arnType $policy_arn;
}

class EnableMFADeviceRequest {
  public authenticationCodeType $authentication_code_2;
  public existingUserNameType $user_name;
  public serialNumberType $serial_number;
  public authenticationCodeType $authentication_code_1;
}

class GetPolicyRequest {
  public arnType $policy_arn;
}

class ListAttachedUserPoliciesRequest {
  public userNameType $user_name;
  public policyPathType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class Position {
  public ColumnNumber $column;
  public LineNumber $line;
}

class ResourceSpecificResult {
  public ResourceNameType $eval_resource_name;
  public PolicyEvaluationDecisionType $eval_resource_decision;
  public StatementListType $matched_statements;
  public ContextKeyNamesResultListType $missing_context_values;
  public EvalDecisionDetailsType $eval_decision_details;
  public PermissionsBoundaryDecisionDetail $permissions_boundary_decision_detail;
}

class DeleteServerCertificateRequest {
  public serverCertificateNameType $server_certificate_name;
}

class GetSSHPublicKeyResponse {
  public SSHPublicKey $ssh_public_key;
}

class ErrorDetails {
  public stringType $message;
  public stringType $code;
}

class UpdateGroupRequest {
  public groupNameType $group_name;
  public pathType $new_path;
  public groupNameType $new_group_name;
}

class EntityInfo {
  public arnType $arn;
  public userNameType $name;
  public policyOwnerEntityType $type;
  public idType $id;
  public pathType $path;
}

class UpdateAssumeRolePolicyRequest {
  public policyDocumentType $policy_document;
  public roleNameType $role_name;
}

class jobStatusType {
}

class DeleteAccessKeyRequest {
  public existingUserNameType $user_name;
  public accessKeyIdType $access_key_id;
}

class User {
  public idType $user_id;
  public arnType $arn;
  public dateType $create_date;
  public dateType $password_last_used;
  public AttachedPermissionsBoundary $permissions_boundary;
  public tagListType $tags;
  public pathType $path;
  public userNameType $user_name;
}

class GetRoleRequest {
  public roleNameType $role_name;
}

class certificateListType {
}

class globalEndpointTokenVersion {
}

class GetOpenIDConnectProviderRequest {
  public arnType $open_id_connect_provider_arn;
}

class ListAttachedUserPoliciesResponse {
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class policyNotAttachableMessage {
}

class tagKeyListType {
}

class AttachUserPolicyRequest {
  public arnType $policy_arn;
  public userNameType $user_name;
}

class ContextKeyTypeEnum {
}

class minimumPasswordLengthType {
}

class InvalidAuthenticationCodeException {
  public invalidAuthenticationCodeMessage $message;
}

class InvalidPublicKeyException {
  public invalidPublicKeyMessage $message;
}

class ListInstanceProfilesForRoleRequest {
  public roleNameType $role_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class UpdateSAMLProviderRequest {
  public SAMLMetadataDocumentType $saml_metadata_document;
  public arnType $saml_provider_arn;
}

class PolicyIdentifierType {
}

class ResetServiceSpecificCredentialRequest {
  public userNameType $user_name;
  public serviceSpecificCredentialId $service_specific_credential_id;
}

class dateType {
}

class servicePassword {
}

class CredentialReportNotPresentException {
  public credentialReportNotPresentExceptionMessage $message;
}

class ListGroupsForUserRequest {
  public existingUserNameType $user_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class booleanObjectType {
}

class CreateOpenIDConnectProviderResponse {
  public arnType $open_id_connect_provider_arn;
}

class GetLoginProfileResponse {
  public LoginProfile $login_profile;
}

class attachedPoliciesListType {
}

class serviceName {
}

class GenerateServiceLastAccessedDetailsRequest {
  public arnType $arn;
}

class ListPoliciesGrantingServiceAccessRequest {
  public markerType $marker;
  public arnType $arn;
  public serviceNamespaceListType $service_namespaces;
}

class UploadServerCertificateResponse {
  public ServerCertificateMetadata $server_certificate_metadata;
}

class listPolicyGrantingServiceAccessResponseListType {
}

class policyEvaluationErrorMessage {
}

class responseMarkerType {
}

class OpenIDConnectProviderUrlType {
}

class VirtualMFADevice {
  public dateType $enable_date;
  public serialNumberType $serial_number;
  public BootstrapDatum $base_32_string_seed;
  public BootstrapDatum $qr_code_png;
  public User $user;
}

class integerType {
}

class passwordType {
}

class pathPrefixType {
}

class UpdateRoleDescriptionRequest {
  public roleNameType $role_name;
  public roleDescriptionType $description;
}

class accountAliasType {
}

class policyGrantingServiceAccessListType {
}

class entityDetailsListType {
}

class roleNameType {
}

class DeleteServiceLinkedRoleRequest {
  public roleNameType $role_name;
}

class DeleteServiceLinkedRoleResponse {
  public DeletionTaskIdType $deletion_task_id;
}

class GetSAMLProviderResponse {
  public SAMLMetadataDocumentType $saml_metadata_document;
  public dateType $create_date;
  public dateType $valid_until;
}

class GetUserPolicyResponse {
  public existingUserNameType $user_name;
  public policyNameType $policy_name;
  public policyDocumentType $policy_document;
}

class SimulateCustomPolicyRequest {
  public ResourceHandlingOptionType $resource_handling_option;
  public maxItemsType $max_items;
  public SimulationPolicyListType $policy_input_list;
  public ActionNameListType $action_names;
  public ResourceNameType $resource_owner;
  public ResourceNameType $caller_arn;
  public ContextEntryListType $context_entries;
  public markerType $marker;
  public SimulationPolicyListType $permissions_boundary_policy_input_list;
  public ResourceNameListType $resource_arns;
  public policyDocumentType $resource_policy;
}

class UpdateSSHPublicKeyRequest {
  public userNameType $user_name;
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
}

class CreateOpenIDConnectProviderRequest {
  public OpenIDConnectProviderUrlType $url;
  public clientIDListType $client_id_list;
  public thumbprintListType $thumbprint_list;
}

class GenerateCredentialReportResponse {
  public ReportStateType $state;
  public ReportStateDescriptionType $description;
}

class ListUserTagsRequest {
  public existingUserNameType $user_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class CreatePolicyVersionResponse {
  public PolicyVersion $policy_version;
}

class CreateSAMLProviderRequest {
  public SAMLMetadataDocumentType $saml_metadata_document;
  public SAMLProviderNameType $name;
}

class PutUserPolicyRequest {
  public existingUserNameType $user_name;
  public policyNameType $policy_name;
  public policyDocumentType $policy_document;
}

class roleDescriptionType {
}

class GetRolePolicyRequest {
  public roleNameType $role_name;
  public policyNameType $policy_name;
}

class ServiceSpecificCredentialsListType {
}

class AddUserToGroupRequest {
  public groupNameType $group_name;
  public existingUserNameType $user_name;
}

class CreateInstanceProfileResponse {
  public InstanceProfile $instance_profile;
}

class CreateLoginProfileResponse {
  public LoginProfile $login_profile;
}

class CreateServiceLinkedRoleResponse {
  public Role $role;
}

class DetachRolePolicyRequest {
  public roleNameType $role_name;
  public arnType $policy_arn;
}

class GetAccountAuthorizationDetailsRequest {
  public markerType $marker;
  public entityListType $filter;
  public maxItemsType $max_items;
}

class UploadServerCertificateRequest {
  public pathType $path;
  public serverCertificateNameType $server_certificate_name;
  public certificateBodyType $certificate_body;
  public privateKeyType $private_key;
  public certificateChainType $certificate_chain;
}

class pathType {
}

class policyScopeType {
}

class roleListType {
}

class ListAccountAliasesResponse {
  public accountAliasListType $account_aliases;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListPoliciesResponse {
  public policyListType $policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class PasswordPolicy {
  public maxPasswordAgeType $max_password_age;
  public passwordReusePreventionType $password_reuse_prevention;
  public minimumPasswordLengthType $minimum_password_length;
  public booleanType $require_numbers;
  public booleanType $require_uppercase_characters;
  public booleanType $require_lowercase_characters;
  public booleanType $allow_users_to_change_password;
  public booleanType $require_symbols;
  public booleanType $expire_passwords;
  public booleanObjectType $hard_expiry;
}

class userListType {
}

class ListEntitiesForPolicyRequest {
  public maxItemsType $max_items;
  public arnType $policy_arn;
  public EntityType $entity_filter;
  public pathType $path_prefix;
  public PolicyUsageType $policy_usage_filter;
  public markerType $marker;
}

class invalidInputMessage {
}

class sortKeyType {
}

class ListAccountAliasesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
}

class policyOwnerEntityType {
}

class ListUserPoliciesRequest {
  public existingUserNameType $user_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class UpdateAccountPasswordPolicyRequest {
  public booleanType $require_symbols;
  public booleanType $require_uppercase_characters;
  public booleanType $allow_users_to_change_password;
  public minimumPasswordLengthType $minimum_password_length;
  public booleanType $require_lowercase_characters;
  public maxPasswordAgeType $max_password_age;
  public passwordReusePreventionType $password_reuse_prevention;
  public booleanObjectType $hard_expiry;
  public booleanType $require_numbers;
}

class entityAlreadyExistsMessage {
}

class DeleteServiceSpecificCredentialRequest {
  public userNameType $user_name;
  public serviceSpecificCredentialId $service_specific_credential_id;
}

class DeleteUserPermissionsBoundaryRequest {
  public userNameType $user_name;
}

class GetGroupRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class GetServiceLastAccessedDetailsWithEntitiesResponse {
  public dateType $job_creation_date;
  public dateType $job_completion_date;
  public entityDetailsListType $entity_details_list;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public ErrorDetails $error;
  public jobStatusType $job_status;
}

class MFADevice {
  public userNameType $user_name;
  public serialNumberType $serial_number;
  public dateType $enable_date;
}

class UpdateSigningCertificateRequest {
  public existingUserNameType $user_name;
  public certificateIdType $certificate_id;
  public statusType $status;
}

class GetServiceLastAccessedDetailsRequest {
  public jobIDType $job_id;
  public maxItemsType $max_items;
  public markerType $marker;
}

class MalformedCertificateException {
  public malformedCertificateMessage $message;
}

class PermissionsBoundaryDecisionDetail {
  public booleanType $allowed_by_permissions_boundary;
}

class PolicyEvaluationDecisionType {
}

class ContextKeyValueType {
}

class InstanceProfile {
  public pathType $path;
  public instanceProfileNameType $instance_profile_name;
  public idType $instance_profile_id;
  public arnType $arn;
  public dateType $create_date;
  public roleListType $roles;
}

class UpdateServerCertificateRequest {
  public pathType $new_path;
  public serverCertificateNameType $new_server_certificate_name;
  public serverCertificateNameType $server_certificate_name;
}

class policyVersionIdType {
}

class InvalidUserTypeException {
  public invalidUserTypeMessage $message;
}

class ListServiceSpecificCredentialsResponse {
  public ServiceSpecificCredentialsListType $service_specific_credentials;
}

class CreatePolicyResponse {
  public Policy $policy;
}

class DeletePolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;
}

class credentialReportNotReadyExceptionMessage {
}

class ContextKeyNameType {
}

class GetUserPolicyRequest {
  public policyNameType $policy_name;
  public existingUserNameType $user_name;
}

class ListRolePoliciesResponse {
  public policyNameListType $policy_names;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class serialNumberType {
}

class serviceUserName {
}

class CreatePolicyRequest {
  public policyDocumentType $policy_document;
  public policyDescriptionType $description;
  public policyNameType $policy_name;
  public policyPathType $path;
}

class GetRolePolicyResponse {
  public roleNameType $role_name;
  public policyNameType $policy_name;
  public policyDocumentType $policy_document;
}

class ListAttachedGroupPoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public attachedPoliciesListType $attached_policies;
}

class UnrecognizedPublicKeyEncodingException {
  public unrecognizedPublicKeyEncodingMessage $message;
}

class DeleteRoleRequest {
  public roleNameType $role_name;
}

class TagUserRequest {
  public existingUserNameType $user_name;
  public tagListType $tags;
}

class noSuchEntityMessage {
}

class groupListType {
}

class groupNameListType {
}

class virtualMFADeviceName {
}

class AddClientIDToOpenIDConnectProviderRequest {
  public clientIDType $client_id;
  public arnType $open_id_connect_provider_arn;
}

class DeleteLoginProfileRequest {
  public userNameType $user_name;
}

class PolicyUsageType {
}

class StatementListType {
}

class DeleteConflictException {
  public deleteConflictMessage $message;
}

class UnmodifiableEntityException {
  public unmodifiableEntityMessage $message;
}

class certificateChainType {
}

class deleteConflictMessage {
}

class userDetailListType {
}

class ListAttachedRolePoliciesRequest {
  public roleNameType $role_name;
  public policyPathType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class RemoveClientIDFromOpenIDConnectProviderRequest {
  public arnType $open_id_connect_provider_arn;
  public clientIDType $client_id;
}

class credentialReportNotPresentExceptionMessage {
}

class policyType {
}

class RoleLastUsed {
  public dateType $last_used_date;
  public stringType $region;
}

class GetPolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;
}

class Group {
  public groupNameType $group_name;
  public idType $group_id;
  public arnType $arn;
  public dateType $create_date;
  public pathType $path;
}

class credentialReportExpiredExceptionMessage {
}

class ArnListType {
}

class ListSigningCertificatesResponse {
  public certificateListType $certificates;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class existingUserNameType {
}

class policyDetailListType {
}

class ContextEntryListType {
}

class ListUsersResponse {
  public responseMarkerType $marker;
  public userListType $users;
  public booleanType $is_truncated;
}

class instanceProfileListType {
}

class maxItemsType {
}

class serviceSpecificCredentialId {
}

class DeleteRolePolicyRequest {
  public roleNameType $role_name;
  public policyNameType $policy_name;
}

class DeleteUserPolicyRequest {
  public existingUserNameType $user_name;
  public policyNameType $policy_name;
}

class PolicyEvaluationException {
  public policyEvaluationErrorMessage $message;
}

class serviceNamespaceType {
}

class stringType {
}

class GetServerCertificateRequest {
  public serverCertificateNameType $server_certificate_name;
}

class ListAttachedRolePoliciesResponse {
  public responseMarkerType $marker;
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
}

class PasswordPolicyViolationException {
  public passwordPolicyViolationMessage $message;
}

class SimulatePolicyResponse {
  public EvaluationResultsListType $evaluation_results;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class DeleteSigningCertificateRequest {
  public existingUserNameType $user_name;
  public certificateIdType $certificate_id;
}

class GetInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
}

class ListGroupPoliciesRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class groupNameType {
}

class serviceNamespaceListType {
}

class ConcurrentModificationMessage {
}

class EvaluationResultsListType {
}

class attachmentCountType {
}

class CreateServiceLinkedRoleRequest {
  public groupNameType $aws_service_name;
  public roleDescriptionType $description;
  public customSuffixType $custom_suffix;
}

class DeletionTaskIdType {
}

class ListUserPoliciesResponse {
  public policyNameListType $policy_names;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class PolicyRoleListType {
}

class publicKeyFingerprintType {
}

class EntityAlreadyExistsException {
  public entityAlreadyExistsMessage $message;
}

class ListPoliciesGrantingServiceAccessResponse {
  public listPolicyGrantingServiceAccessResponseListType $policies_granting_service_access;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class AttachedPermissionsBoundary {
  public PermissionsBoundaryAttachmentType $permissions_boundary_type;
  public arnType $permissions_boundary_arn;
}

class CreateVirtualMFADeviceRequest {
  public pathType $path;
  public virtualMFADeviceName $virtual_mfa_device_name;
}

class OpenIDConnectProviderListType {
}

class customSuffixType {
}

class CreateUserRequest {
  public pathType $path;
  public userNameType $user_name;
  public arnType $permissions_boundary;
  public tagListType $tags;
}

class DeleteOpenIDConnectProviderRequest {
  public arnType $open_id_connect_provider_arn;
}

class ListInstanceProfilesResponse {
  public instanceProfileListType $instance_profiles;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListVirtualMFADevicesResponse {
  public virtualMFADeviceListType $virtual_mfa_devices;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class policyNameListType {
}

class ListGroupsRequest {
  public pathPrefixType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class OrganizationsDecisionDetail {
  public booleanType $allowed_by_organizations;
}

class DuplicateSSHPublicKeyException {
  public duplicateSSHPublicKeyMessage $message;
}

class GetContextKeysForPrincipalPolicyRequest {
  public arnType $policy_source_arn;
  public SimulationPolicyListType $policy_input_list;
}

class LineNumber {
}

class ReasonType {
}

class ReportStateDescriptionType {
}

class roleDetailListType {
}

class AccessDetail {
  public stringType $region;
  public organizationsEntityPathType $entity_path;
  public dateType $last_authenticated_time;
  public integerType $total_authenticated_entities;
  public serviceNameType $service_name;
  public serviceNamespaceType $service_namespace;
}

class GetGroupResponse {
  public Group $group;
  public userListType $users;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class privateKeyType {
}

class serviceNotSupportedMessage {
}

class CreateRoleRequest {
  public pathType $path;
  public roleNameType $role_name;
  public policyDocumentType $assume_role_policy_document;
  public roleDescriptionType $description;
  public roleMaxSessionDurationType $max_session_duration;
  public arnType $permissions_boundary;
  public tagListType $tags;
}

class ListOpenIDConnectProvidersResponse {
  public OpenIDConnectProviderListType $open_id_connect_provider_list;
}

class authenticationCodeType {
}

class statusType {
}

class GetAccessKeyLastUsedResponse {
  public existingUserNameType $user_name;
  public AccessKeyLastUsed $access_key_last_used;
}

class ListInstanceProfilesRequest {
  public pathPrefixType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class SAMLProviderListEntry {
  public arnType $arn;
  public dateType $valid_until;
  public dateType $create_date;
}

class CreateGroupRequest {
  public pathType $path;
  public groupNameType $group_name;
}

class GetServiceLastAccessedDetailsWithEntitiesRequest {
  public maxItemsType $max_items;
  public markerType $marker;
  public jobIDType $job_id;
  public serviceNamespaceType $service_namespace;
}

class ListEntitiesForPolicyResponse {
  public responseMarkerType $marker;
  public PolicyGroupListType $policy_groups;
  public PolicyUserListType $policy_users;
  public PolicyRoleListType $policy_roles;
  public booleanType $is_truncated;
}

class ServiceSpecificCredential {
  public dateType $create_date;
  public serviceName $service_name;
  public serviceUserName $service_user_name;
  public servicePassword $service_password;
  public serviceSpecificCredentialId $service_specific_credential_id;
  public userNameType $user_name;
  public statusType $status;
}

class booleanType {
}

class ListAccessKeysResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public accessKeyMetadataListType $access_key_metadata;
}

class PolicyGrantingServiceAccess {
  public policyNameType $policy_name;
  public policyType $policy_type;
  public arnType $policy_arn;
  public policyOwnerEntityType $entity_type;
  public entityNameType $entity_name;
}

class PutGroupPolicyRequest {
  public groupNameType $group_name;
  public policyNameType $policy_name;
  public policyDocumentType $policy_document;
}

class UploadSSHPublicKeyResponse {
  public SSHPublicKey $ssh_public_key;
}

class policyDocumentType {
}

class AttachRolePolicyRequest {
  public roleNameType $role_name;
  public arnType $policy_arn;
}

class CredentialReportExpiredException {
  public credentialReportExpiredExceptionMessage $message;
}

class GetRoleResponse {
  public Role $role;
}

class PolicySourceType {
}

class ResourceNameType {
}

class instanceProfileNameType {
}

class CreateRoleResponse {
  public Role $role;
}

class ListRolesRequest {
  public pathPrefixType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class ServiceSpecificCredentialMetadata {
  public serviceName $service_name;
  public userNameType $user_name;
  public statusType $status;
  public serviceUserName $service_user_name;
  public dateType $create_date;
  public serviceSpecificCredentialId $service_specific_credential_id;
}

class invalidPublicKeyMessage {
}

class policyDescriptionType {
}

class serviceNameType {
}

class AccessKeyMetadata {
  public userNameType $user_name;
  public accessKeyIdType $access_key_id;
  public statusType $status;
  public dateType $create_date;
}

class ManagedPolicyDetailListType {
}

class PermissionsBoundaryAttachmentType {
}

class SAMLProviderNameType {
}

class duplicateCertificateMessage {
}

class passwordReusePreventionType {
}

class GetAccessKeyLastUsedRequest {
  public accessKeyIdType $access_key_id;
}

class PolicyGroupListType {
}

class invalidAuthenticationCodeMessage {
}

class GetCredentialReportResponse {
  public ReportContentType $content;
  public ReportFormatType $report_format;
  public dateType $generated_time;
}

class ListRolePoliciesRequest {
  public roleNameType $role_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class groupDetailListType {
}

class AccessKey {
  public statusType $status;
  public accessKeySecretType $secret_access_key;
  public dateType $create_date;
  public userNameType $user_name;
  public accessKeyIdType $access_key_id;
}

class PutRolePolicyRequest {
  public roleNameType $role_name;
  public policyNameType $policy_name;
  public policyDocumentType $policy_document;
}

class UpdateSAMLProviderResponse {
  public arnType $saml_provider_arn;
}

class clientIDType {
}

class duplicateSSHPublicKeyMessage {
}

class policyNameType {
}

class InvalidInputException {
  public invalidInputMessage $message;
}

class TagRoleRequest {
  public tagListType $tags;
  public roleNameType $role_name;
}

class UserDetail {
  public userNameType $user_name;
  public idType $user_id;
  public arnType $arn;
  public dateType $create_date;
  public groupNameListType $group_list;
  public attachedPoliciesListType $attached_managed_policies;
  public pathType $path;
  public policyDetailListType $user_policy_list;
  public AttachedPermissionsBoundary $permissions_boundary;
  public tagListType $tags;
}

class CreateInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public pathType $path;
}

class ResourceSpecificResultListType {
}

class serviceFailureExceptionMessage {
}

class ListServerCertificatesRequest {
  public pathPrefixType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class SSHPublicKey {
  public userNameType $user_name;
  public publicKeyIdType $ssh_public_key_id;
  public publicKeyFingerprintType $fingerprint;
  public publicKeyMaterialType $ssh_public_key_body;
  public statusType $status;
  public dateType $upload_date;
}

class ServiceLastAccessed {
  public serviceNameType $service_name;
  public dateType $last_authenticated;
  public serviceNamespaceType $service_namespace;
  public arnType $last_authenticated_entity;
  public integerType $total_authenticated_entities;
}

class UntagUserRequest {
  public existingUserNameType $user_name;
  public tagKeyListType $tag_keys;
}

class DeleteSAMLProviderRequest {
  public arnType $saml_provider_arn;
}

class GetPolicyVersionResponse {
  public PolicyVersion $policy_version;
}

class assignmentStatusType {
}

class DeleteRolePermissionsBoundaryRequest {
  public roleNameType $role_name;
}

class DeletionTaskStatusType {
}

class ListSSHPublicKeysResponse {
  public SSHPublicKeyListType $ssh_public_keys;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class summaryKeyType {
}

class ListGroupPoliciesResponse {
  public policyNameListType $policy_names;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class CreateServiceSpecificCredentialResponse {
  public ServiceSpecificCredential $service_specific_credential;
}

class ListMFADevicesResponse {
  public mfaDeviceListType $mfa_devices;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListServiceSpecificCredentialsRequest {
  public userNameType $user_name;
  public serviceName $service_name;
}

class LoginProfile {
  public userNameType $user_name;
  public dateType $create_date;
  public booleanType $password_reset_required;
}

class SimulationPolicyListType {
}

class serverCertificateMetadataListType {
}

class BootstrapDatum {
}

class UpdateLoginProfileRequest {
  public userNameType $user_name;
  public passwordType $password;
  public booleanObjectType $password_reset_required;
}

class UpdateRoleResponse {
}

class GetUserRequest {
  public existingUserNameType $user_name;
}

class RegionNameType {
}

class SAMLProviderListType {
}

class Statement {
  public Position $end_position;
  public PolicyIdentifierType $source_policy_id;
  public PolicySourceType $source_policy_type;
  public Position $start_position;
}

class accessKeyMetadataListType {
}

class virtualMFADeviceListType {
}

class ContextKeyValueListType {
}

class ListGroupsForUserResponse {
  public groupListType $groups;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListGroupsResponse {
  public groupListType $groups;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ReportGenerationLimitExceededException {
  public reportGenerationLimitExceededMessage $message;
}

class ServiceNotSupportedException {
  public serviceNotSupportedMessage $message;
}

class serverCertificateNameType {
}

class EntityType {
}

class UpdateOpenIDConnectProviderThumbprintRequest {
  public arnType $open_id_connect_provider_arn;
  public thumbprintListType $thumbprint_list;
}

class ListAttachedGroupPoliciesRequest {
  public groupNameType $group_name;
  public policyPathType $path_prefix;
  public markerType $marker;
  public maxItemsType $max_items;
}

class ManagedPolicyDetail {
  public policyDocumentVersionListType $policy_version_list;
  public policyNameType $policy_name;
  public policyPathType $path;
  public attachmentCountType $attachment_count;
  public policyDescriptionType $description;
  public dateType $create_date;
  public dateType $update_date;
  public idType $policy_id;
  public arnType $arn;
  public policyVersionIdType $default_version_id;
  public attachmentCountType $permissions_boundary_usage_count;
  public booleanType $is_attachable;
}

class markerType {
}

class GetContextKeysForCustomPolicyRequest {
  public SimulationPolicyListType $policy_input_list;
}

class ServiceFailureException {
  public serviceFailureExceptionMessage $message;
}

class clientIDListType {
}

class EvaluationResult {
  public ActionNameType $eval_action_name;
  public OrganizationsDecisionDetail $organizations_decision_detail;
  public EvalDecisionDetailsType $eval_decision_details;
  public ResourceSpecificResultListType $resource_specific_results;
  public ResourceNameType $eval_resource_name;
  public PolicyEvaluationDecisionType $eval_decision;
  public StatementListType $matched_statements;
  public ContextKeyNamesResultListType $missing_context_values;
  public PermissionsBoundaryDecisionDetail $permissions_boundary_decision_detail;
}

class GetServiceLinkedRoleDeletionStatusRequest {
  public DeletionTaskIdType $deletion_task_id;
}

class UpdateAccessKeyRequest {
  public existingUserNameType $user_name;
  public accessKeyIdType $access_key_id;
  public statusType $status;
}

class keyPairMismatchMessage {
}

class tagListType {
}

class DeleteAccountAliasRequest {
  public accountAliasType $account_alias;
}

class arnType {
}

class idType {
}

class PolicyVersion {
  public policyDocumentType $document;
  public policyVersionIdType $version_id;
  public booleanType $is_default_version;
  public dateType $create_date;
}

class EvalDecisionSourceType {
}

class GroupDetail {
  public attachedPoliciesListType $attached_managed_policies;
  public pathType $path;
  public groupNameType $group_name;
  public idType $group_id;
  public arnType $arn;
  public dateType $create_date;
  public policyDetailListType $group_policy_list;
}

class ReportContentType {
}

class encodingType {
}

class organizationsEntityPathType {
}

class MalformedPolicyDocumentException {
  public malformedPolicyDocumentMessage $message;
}

class limitExceededMessage {
}

class ActionNameType {
}

class DuplicateCertificateException {
  public duplicateCertificateMessage $message;
}

class tagValueType {
}

class CredentialReportNotReadyException {
  public credentialReportNotReadyExceptionMessage $message;
}

class GetLoginProfileRequest {
  public userNameType $user_name;
}

class ListRolesResponse {
  public roleListType $roles;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ListSigningCertificatesRequest {
  public maxItemsType $max_items;
  public existingUserNameType $user_name;
  public markerType $marker;
}

class CreateSAMLProviderResponse {
  public arnType $saml_provider_arn;
}

class EntityDetails {
  public EntityInfo $entity_info;
  public dateType $last_authenticated;
}

class GetUserResponse {
  public User $user;
}

class SigningCertificate {
  public userNameType $user_name;
  public certificateIdType $certificate_id;
  public certificateBodyType $certificate_body;
  public statusType $status;
  public dateType $upload_date;
}

class DeleteInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
}

class GetServerCertificateResponse {
  public ServerCertificate $server_certificate;
}

class GetServiceLinkedRoleDeletionStatusResponse {
  public DeletionTaskStatusType $status;
  public DeletionTaskFailureReasonType $reason;
}

class KeyPairMismatchException {
  public keyPairMismatchMessage $message;
}

class ListPolicyVersionsRequest {
  public arnType $policy_arn;
  public markerType $marker;
  public maxItemsType $max_items;
}

class malformedPolicyDocumentMessage {
}

class DetachGroupPolicyRequest {
  public groupNameType $group_name;
  public arnType $policy_arn;
}

class ListRoleTagsResponse {
  public tagListType $tags;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class publicKeyMaterialType {
}

class AttachGroupPolicyRequest {
  public arnType $policy_arn;
  public groupNameType $group_name;
}

class CreateVirtualMFADeviceResponse {
  public VirtualMFADevice $virtual_mfa_device;
}

class DetachUserPolicyRequest {
  public userNameType $user_name;
  public arnType $policy_arn;
}

class GetOrganizationsAccessReportResponse {
  public integerType $number_of_services_accessible;
  public AccessDetails $access_details;
  public ErrorDetails $error_details;
  public jobStatusType $job_status;
  public dateType $job_creation_date;
  public dateType $job_completion_date;
  public integerType $number_of_services_not_accessed;
  public booleanType $is_truncated;
  public markerType $marker;
}

class ServerCertificate {
  public ServerCertificateMetadata $server_certificate_metadata;
  public certificateBodyType $certificate_body;
  public certificateChainType $certificate_chain;
}

class UpdateRoleDescriptionResponse {
  public Role $role;
}

class ServicesLastAccessed {
}

class UntagRoleRequest {
  public roleNameType $role_name;
  public tagKeyListType $tag_keys;
}

class unmodifiableEntityMessage {
}

class GenerateOrganizationsAccessReportResponse {
  public jobIDType $job_id;
}

class GetSSHPublicKeyRequest {
  public userNameType $user_name;
  public publicKeyIdType $ssh_public_key_id;
  public encodingType $encoding;
}

class GetServiceLastAccessedDetailsResponse {
  public dateType $job_completion_date;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public ErrorDetails $error;
  public jobStatusType $job_status;
  public dateType $job_creation_date;
  public ServicesLastAccessed $services_last_accessed;
}

class ListUserTagsResponse {
  public responseMarkerType $marker;
  public tagListType $tags;
  public booleanType $is_truncated;
}

class OpenIDConnectProviderListEntry {
  public arnType $arn;
}

class SetDefaultPolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;
}

class ResyncMFADeviceRequest {
  public authenticationCodeType $authentication_code_2;
  public existingUserNameType $user_name;
  public serialNumberType $serial_number;
  public authenticationCodeType $authentication_code_1;
}

class SetSecurityTokenServicePreferencesRequest {
  public globalEndpointTokenVersion $global_endpoint_token_version;
}

class certificateBodyType {
}

class PutRolePermissionsBoundaryRequest {
  public roleNameType $role_name;
  public arnType $permissions_boundary;
}

class accessKeyIdType {
}

class GetSAMLProviderRequest {
  public arnType $saml_provider_arn;
}

class ListMFADevicesRequest {
  public existingUserNameType $user_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class accountAliasListType {
}

class jobIDType {
}

class DeleteGroupPolicyRequest {
  public groupNameType $group_name;
  public policyNameType $policy_name;
}

class thumbprintListType {
}

class AddRoleToInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public roleNameType $role_name;
}

class CreateAccountAliasRequest {
  public accountAliasType $account_alias;
}

class CreateLoginProfileRequest {
  public userNameType $user_name;
  public passwordType $password;
  public booleanType $password_reset_required;
}

class GetPolicyResponse {
  public Policy $policy;
}

class CreateAccessKeyResponse {
  public AccessKey $access_key;
}

class publicKeyIdType {
}

class tagKeyType {
}

class GetGroupPolicyResponse {
  public groupNameType $group_name;
  public policyNameType $policy_name;
  public policyDocumentType $policy_document;
}

class RoleUsageType {
  public RegionNameType $region;
  public ArnListType $resources;
}

class ChangePasswordRequest {
  public passwordType $old_password;
  public passwordType $new_password;
}

class ListServerCertificatesResponse {
  public serverCertificateMetadataListType $server_certificate_metadata_list;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ReportStateType {
}

class Role {
  public roleNameType $role_name;
  public arnType $arn;
  public dateType $create_date;
  public policyDocumentType $assume_role_policy_document;
  public roleMaxSessionDurationType $max_session_duration;
  public RoleLastUsed $role_last_used;
  public pathType $path;
  public idType $role_id;
  public roleDescriptionType $description;
  public AttachedPermissionsBoundary $permissions_boundary;
  public tagListType $tags;
}

class invalidCertificateMessage {
}

class invalidUserTypeMessage {
}

class ListSSHPublicKeysRequest {
  public userNameType $user_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class UpdateRoleRequest {
  public roleNameType $role_name;
  public roleDescriptionType $description;
  public roleMaxSessionDurationType $max_session_duration;
}

class DeleteSSHPublicKeyRequest {
  public userNameType $user_name;
  public publicKeyIdType $ssh_public_key_id;
}

class DeleteUserRequest {
  public existingUserNameType $user_name;
}

class PolicyDetail {
  public policyNameType $policy_name;
  public policyDocumentType $policy_document;
}

class PolicyUserListType {
}

class RemoveRoleFromInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public roleNameType $role_name;
}

class UploadSSHPublicKeyRequest {
  public userNameType $user_name;
  public publicKeyMaterialType $ssh_public_key_body;
}

class ActionNameListType {
}

class DeactivateMFADeviceRequest {
  public existingUserNameType $user_name;
  public serialNumberType $serial_number;
}

class DeleteGroupRequest {
  public groupNameType $group_name;
}

class ListPoliciesRequest {
  public PolicyUsageType $policy_usage_filter;
  public markerType $marker;
  public maxItemsType $max_items;
  public policyScopeType $scope;
  public booleanType $only_attached;
  public policyPathType $path_prefix;
}

class Policy {
  public idType $policy_id;
  public arnType $arn;
  public policyPathType $path;
  public policyVersionIdType $default_version_id;
  public attachmentCountType $attachment_count;
  public booleanType $is_attachable;
  public dateType $update_date;
  public policyNameType $policy_name;
  public attachmentCountType $permissions_boundary_usage_count;
  public policyDescriptionType $description;
  public dateType $create_date;
}

class RoleDetail {
  public instanceProfileListType $instance_profile_list;
  public RoleLastUsed $role_last_used;
  public pathType $path;
  public roleNameType $role_name;
  public idType $role_id;
  public dateType $create_date;
  public policyDocumentType $assume_role_policy_document;
  public arnType $arn;
  public policyDetailListType $role_policy_list;
  public attachedPoliciesListType $attached_managed_policies;
  public AttachedPermissionsBoundary $permissions_boundary;
  public tagListType $tags;
}

class CreateServiceSpecificCredentialRequest {
  public userNameType $user_name;
  public serviceName $service_name;
}

class LimitExceededException {
  public limitExceededMessage $message;
}

class ListOpenIDConnectProvidersRequest {
}

class ResourceHandlingOptionType {
}

class entityNameType {
}

class summaryMapType {
}

class ContextKeyNamesResultListType {
}

class DeletionTaskFailureReasonType {
  public ReasonType $reason;
  public RoleUsageListType $role_usage_list;
}

class GetOrganizationsAccessReportRequest {
  public jobIDType $job_id;
  public maxItemsType $max_items;
  public markerType $marker;
  public sortKeyType $sort_key;
}

class PolicyUser {
  public userNameType $user_name;
  public idType $user_id;
}

class passwordPolicyViolationMessage {
}

class roleMaxSessionDurationType {
}

class CreatePolicyVersionRequest {
  public policyDocumentType $policy_document;
  public booleanType $set_as_default;
  public arnType $policy_arn;
}

class GetAccountPasswordPolicyResponse {
  public PasswordPolicy $password_policy;
}

class ListPolicyVersionsResponse {
  public policyDocumentVersionListType $versions;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class UploadSigningCertificateRequest {
  public existingUserNameType $user_name;
  public certificateBodyType $certificate_body;
}

class CreateGroupResponse {
  public Group $group;
}

class DeletePolicyRequest {
  public arnType $policy_arn;
}

class GetContextKeysForPolicyResponse {
  public ContextKeyNamesResultListType $context_key_names;
}

class ListRoleTagsRequest {
  public roleNameType $role_name;
  public markerType $marker;
  public maxItemsType $max_items;
}

class ReportFormatType {
}

class summaryValueType {
}

class ConcurrentModificationException {
  public ConcurrentModificationMessage $message;
}

class CreateAccessKeyRequest {
  public existingUserNameType $user_name;
}

class ListInstanceProfilesForRoleResponse {
  public instanceProfileListType $instance_profiles;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
}

class ResetServiceSpecificCredentialResponse {
  public ServiceSpecificCredential $service_specific_credential;
}

class entityTemporarilyUnmodifiableMessage {
}

class organizationsPolicyIdType {
}

