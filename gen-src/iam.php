<?hh // strict
namespace slack\aws\iam;

interface IAM {
  public function AddClientIDToOpenIDConnectProvider(AddClientIDToOpenIDConnectProviderRequest $in): Awaitable<\Errors\Error>;
  public function AddRoleToInstanceProfile(AddRoleToInstanceProfileRequest $in): Awaitable<\Errors\Error>;
  public function AddUserToGroup(AddUserToGroupRequest $in): Awaitable<\Errors\Error>;
  public function AttachGroupPolicy(AttachGroupPolicyRequest $in): Awaitable<\Errors\Error>;
  public function AttachRolePolicy(AttachRolePolicyRequest $in): Awaitable<\Errors\Error>;
  public function AttachUserPolicy(AttachUserPolicyRequest $in): Awaitable<\Errors\Error>;
  public function ChangePassword(ChangePasswordRequest $in): Awaitable<\Errors\Error>;
  public function CreateAccessKey(CreateAccessKeyRequest $in): Awaitable<\Errors\Result<CreateAccessKeyResponse>>;
  public function CreateAccountAlias(CreateAccountAliasRequest $in): Awaitable<\Errors\Error>;
  public function CreateGroup(CreateGroupRequest $in): Awaitable<\Errors\Result<CreateGroupResponse>>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest $in): Awaitable<\Errors\Result<CreateInstanceProfileResponse>>;
  public function CreateLoginProfile(CreateLoginProfileRequest $in): Awaitable<\Errors\Result<CreateLoginProfileResponse>>;
  public function CreateOpenIDConnectProvider(CreateOpenIDConnectProviderRequest $in): Awaitable<\Errors\Result<CreateOpenIDConnectProviderResponse>>;
  public function CreatePolicy(CreatePolicyRequest $in): Awaitable<\Errors\Result<CreatePolicyResponse>>;
  public function CreatePolicyVersion(CreatePolicyVersionRequest $in): Awaitable<\Errors\Result<CreatePolicyVersionResponse>>;
  public function CreateRole(CreateRoleRequest $in): Awaitable<\Errors\Result<CreateRoleResponse>>;
  public function CreateSAMLProvider(CreateSAMLProviderRequest $in): Awaitable<\Errors\Result<CreateSAMLProviderResponse>>;
  public function CreateServiceLinkedRole(CreateServiceLinkedRoleRequest $in): Awaitable<\Errors\Result<CreateServiceLinkedRoleResponse>>;
  public function CreateServiceSpecificCredential(CreateServiceSpecificCredentialRequest $in): Awaitable<\Errors\Result<CreateServiceSpecificCredentialResponse>>;
  public function CreateUser(CreateUserRequest $in): Awaitable<\Errors\Result<CreateUserResponse>>;
  public function CreateVirtualMFADevice(CreateVirtualMFADeviceRequest $in): Awaitable<\Errors\Result<CreateVirtualMFADeviceResponse>>;
  public function DeactivateMFADevice(DeactivateMFADeviceRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAccessKey(DeleteAccessKeyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAccountAlias(DeleteAccountAliasRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAccountPasswordPolicy( $in): Awaitable<\Errors\Error>;
  public function DeleteGroup(DeleteGroupRequest $in): Awaitable<\Errors\Error>;
  public function DeleteGroupPolicy(DeleteGroupPolicyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest $in): Awaitable<\Errors\Error>;
  public function DeleteLoginProfile(DeleteLoginProfileRequest $in): Awaitable<\Errors\Error>;
  public function DeleteOpenIDConnectProvider(DeleteOpenIDConnectProviderRequest $in): Awaitable<\Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest $in): Awaitable<\Errors\Error>;
  public function DeletePolicyVersion(DeletePolicyVersionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRole(DeleteRoleRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRolePermissionsBoundary(DeleteRolePermissionsBoundaryRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRolePolicy(DeleteRolePolicyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSAMLProvider(DeleteSAMLProviderRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSSHPublicKey(DeleteSSHPublicKeyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteServerCertificate(DeleteServerCertificateRequest $in): Awaitable<\Errors\Error>;
  public function DeleteServiceLinkedRole(DeleteServiceLinkedRoleRequest $in): Awaitable<\Errors\Result<DeleteServiceLinkedRoleResponse>>;
  public function DeleteServiceSpecificCredential(DeleteServiceSpecificCredentialRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSigningCertificate(DeleteSigningCertificateRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUser(DeleteUserRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUserPermissionsBoundary(DeleteUserPermissionsBoundaryRequest $in): Awaitable<\Errors\Error>;
  public function DeleteUserPolicy(DeleteUserPolicyRequest $in): Awaitable<\Errors\Error>;
  public function DeleteVirtualMFADevice(DeleteVirtualMFADeviceRequest $in): Awaitable<\Errors\Error>;
  public function DetachGroupPolicy(DetachGroupPolicyRequest $in): Awaitable<\Errors\Error>;
  public function DetachRolePolicy(DetachRolePolicyRequest $in): Awaitable<\Errors\Error>;
  public function DetachUserPolicy(DetachUserPolicyRequest $in): Awaitable<\Errors\Error>;
  public function EnableMFADevice(EnableMFADeviceRequest $in): Awaitable<\Errors\Error>;
  public function GenerateCredentialReport( $in): Awaitable<\Errors\Result<GenerateCredentialReportResponse>>;
  public function GenerateOrganizationsAccessReport(GenerateOrganizationsAccessReportRequest $in): Awaitable<\Errors\Result<GenerateOrganizationsAccessReportResponse>>;
  public function GenerateServiceLastAccessedDetails(GenerateServiceLastAccessedDetailsRequest $in): Awaitable<\Errors\Result<GenerateServiceLastAccessedDetailsResponse>>;
  public function GetAccessKeyLastUsed(GetAccessKeyLastUsedRequest $in): Awaitable<\Errors\Result<GetAccessKeyLastUsedResponse>>;
  public function GetAccountAuthorizationDetails(GetAccountAuthorizationDetailsRequest $in): Awaitable<\Errors\Result<GetAccountAuthorizationDetailsResponse>>;
  public function GetAccountPasswordPolicy( $in): Awaitable<\Errors\Result<GetAccountPasswordPolicyResponse>>;
  public function GetAccountSummary( $in): Awaitable<\Errors\Result<GetAccountSummaryResponse>>;
  public function GetContextKeysForCustomPolicy(GetContextKeysForCustomPolicyRequest $in): Awaitable<\Errors\Result<GetContextKeysForPolicyResponse>>;
  public function GetContextKeysForPrincipalPolicy(GetContextKeysForPrincipalPolicyRequest $in): Awaitable<\Errors\Result<GetContextKeysForPolicyResponse>>;
  public function GetCredentialReport( $in): Awaitable<\Errors\Result<GetCredentialReportResponse>>;
  public function GetGroup(GetGroupRequest $in): Awaitable<\Errors\Result<GetGroupResponse>>;
  public function GetGroupPolicy(GetGroupPolicyRequest $in): Awaitable<\Errors\Result<GetGroupPolicyResponse>>;
  public function GetInstanceProfile(GetInstanceProfileRequest $in): Awaitable<\Errors\Result<GetInstanceProfileResponse>>;
  public function GetLoginProfile(GetLoginProfileRequest $in): Awaitable<\Errors\Result<GetLoginProfileResponse>>;
  public function GetOpenIDConnectProvider(GetOpenIDConnectProviderRequest $in): Awaitable<\Errors\Result<GetOpenIDConnectProviderResponse>>;
  public function GetOrganizationsAccessReport(GetOrganizationsAccessReportRequest $in): Awaitable<\Errors\Result<GetOrganizationsAccessReportResponse>>;
  public function GetPolicy(GetPolicyRequest $in): Awaitable<\Errors\Result<GetPolicyResponse>>;
  public function GetPolicyVersion(GetPolicyVersionRequest $in): Awaitable<\Errors\Result<GetPolicyVersionResponse>>;
  public function GetRole(GetRoleRequest $in): Awaitable<\Errors\Result<GetRoleResponse>>;
  public function GetRolePolicy(GetRolePolicyRequest $in): Awaitable<\Errors\Result<GetRolePolicyResponse>>;
  public function GetSAMLProvider(GetSAMLProviderRequest $in): Awaitable<\Errors\Result<GetSAMLProviderResponse>>;
  public function GetSSHPublicKey(GetSSHPublicKeyRequest $in): Awaitable<\Errors\Result<GetSSHPublicKeyResponse>>;
  public function GetServerCertificate(GetServerCertificateRequest $in): Awaitable<\Errors\Result<GetServerCertificateResponse>>;
  public function GetServiceLastAccessedDetails(GetServiceLastAccessedDetailsRequest $in): Awaitable<\Errors\Result<GetServiceLastAccessedDetailsResponse>>;
  public function GetServiceLastAccessedDetailsWithEntities(GetServiceLastAccessedDetailsWithEntitiesRequest $in): Awaitable<\Errors\Result<GetServiceLastAccessedDetailsWithEntitiesResponse>>;
  public function GetServiceLinkedRoleDeletionStatus(GetServiceLinkedRoleDeletionStatusRequest $in): Awaitable<\Errors\Result<GetServiceLinkedRoleDeletionStatusResponse>>;
  public function GetUser(GetUserRequest $in): Awaitable<\Errors\Result<GetUserResponse>>;
  public function GetUserPolicy(GetUserPolicyRequest $in): Awaitable<\Errors\Result<GetUserPolicyResponse>>;
  public function ListAccessKeys(ListAccessKeysRequest $in): Awaitable<\Errors\Result<ListAccessKeysResponse>>;
  public function ListAccountAliases(ListAccountAliasesRequest $in): Awaitable<\Errors\Result<ListAccountAliasesResponse>>;
  public function ListAttachedGroupPolicies(ListAttachedGroupPoliciesRequest $in): Awaitable<\Errors\Result<ListAttachedGroupPoliciesResponse>>;
  public function ListAttachedRolePolicies(ListAttachedRolePoliciesRequest $in): Awaitable<\Errors\Result<ListAttachedRolePoliciesResponse>>;
  public function ListAttachedUserPolicies(ListAttachedUserPoliciesRequest $in): Awaitable<\Errors\Result<ListAttachedUserPoliciesResponse>>;
  public function ListEntitiesForPolicy(ListEntitiesForPolicyRequest $in): Awaitable<\Errors\Result<ListEntitiesForPolicyResponse>>;
  public function ListGroupPolicies(ListGroupPoliciesRequest $in): Awaitable<\Errors\Result<ListGroupPoliciesResponse>>;
  public function ListGroups(ListGroupsRequest $in): Awaitable<\Errors\Result<ListGroupsResponse>>;
  public function ListGroupsForUser(ListGroupsForUserRequest $in): Awaitable<\Errors\Result<ListGroupsForUserResponse>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest $in): Awaitable<\Errors\Result<ListInstanceProfilesResponse>>;
  public function ListInstanceProfilesForRole(ListInstanceProfilesForRoleRequest $in): Awaitable<\Errors\Result<ListInstanceProfilesForRoleResponse>>;
  public function ListMFADevices(ListMFADevicesRequest $in): Awaitable<\Errors\Result<ListMFADevicesResponse>>;
  public function ListOpenIDConnectProviders(ListOpenIDConnectProvidersRequest $in): Awaitable<\Errors\Result<ListOpenIDConnectProvidersResponse>>;
  public function ListPolicies(ListPoliciesRequest $in): Awaitable<\Errors\Result<ListPoliciesResponse>>;
  public function ListPoliciesGrantingServiceAccess(ListPoliciesGrantingServiceAccessRequest $in): Awaitable<\Errors\Result<ListPoliciesGrantingServiceAccessResponse>>;
  public function ListPolicyVersions(ListPolicyVersionsRequest $in): Awaitable<\Errors\Result<ListPolicyVersionsResponse>>;
  public function ListRolePolicies(ListRolePoliciesRequest $in): Awaitable<\Errors\Result<ListRolePoliciesResponse>>;
  public function ListRoleTags(ListRoleTagsRequest $in): Awaitable<\Errors\Result<ListRoleTagsResponse>>;
  public function ListRoles(ListRolesRequest $in): Awaitable<\Errors\Result<ListRolesResponse>>;
  public function ListSAMLProviders(ListSAMLProvidersRequest $in): Awaitable<\Errors\Result<ListSAMLProvidersResponse>>;
  public function ListSSHPublicKeys(ListSSHPublicKeysRequest $in): Awaitable<\Errors\Result<ListSSHPublicKeysResponse>>;
  public function ListServerCertificates(ListServerCertificatesRequest $in): Awaitable<\Errors\Result<ListServerCertificatesResponse>>;
  public function ListServiceSpecificCredentials(ListServiceSpecificCredentialsRequest $in): Awaitable<\Errors\Result<ListServiceSpecificCredentialsResponse>>;
  public function ListSigningCertificates(ListSigningCertificatesRequest $in): Awaitable<\Errors\Result<ListSigningCertificatesResponse>>;
  public function ListUserPolicies(ListUserPoliciesRequest $in): Awaitable<\Errors\Result<ListUserPoliciesResponse>>;
  public function ListUserTags(ListUserTagsRequest $in): Awaitable<\Errors\Result<ListUserTagsResponse>>;
  public function ListUsers(ListUsersRequest $in): Awaitable<\Errors\Result<ListUsersResponse>>;
  public function ListVirtualMFADevices(ListVirtualMFADevicesRequest $in): Awaitable<\Errors\Result<ListVirtualMFADevicesResponse>>;
  public function PutGroupPolicy(PutGroupPolicyRequest $in): Awaitable<\Errors\Error>;
  public function PutRolePermissionsBoundary(PutRolePermissionsBoundaryRequest $in): Awaitable<\Errors\Error>;
  public function PutRolePolicy(PutRolePolicyRequest $in): Awaitable<\Errors\Error>;
  public function PutUserPermissionsBoundary(PutUserPermissionsBoundaryRequest $in): Awaitable<\Errors\Error>;
  public function PutUserPolicy(PutUserPolicyRequest $in): Awaitable<\Errors\Error>;
  public function RemoveClientIDFromOpenIDConnectProvider(RemoveClientIDFromOpenIDConnectProviderRequest $in): Awaitable<\Errors\Error>;
  public function RemoveRoleFromInstanceProfile(RemoveRoleFromInstanceProfileRequest $in): Awaitable<\Errors\Error>;
  public function RemoveUserFromGroup(RemoveUserFromGroupRequest $in): Awaitable<\Errors\Error>;
  public function ResetServiceSpecificCredential(ResetServiceSpecificCredentialRequest $in): Awaitable<\Errors\Result<ResetServiceSpecificCredentialResponse>>;
  public function ResyncMFADevice(ResyncMFADeviceRequest $in): Awaitable<\Errors\Error>;
  public function SetDefaultPolicyVersion(SetDefaultPolicyVersionRequest $in): Awaitable<\Errors\Error>;
  public function SetSecurityTokenServicePreferences(SetSecurityTokenServicePreferencesRequest $in): Awaitable<\Errors\Error>;
  public function SimulateCustomPolicy(SimulateCustomPolicyRequest $in): Awaitable<\Errors\Result<SimulatePolicyResponse>>;
  public function SimulatePrincipalPolicy(SimulatePrincipalPolicyRequest $in): Awaitable<\Errors\Result<SimulatePolicyResponse>>;
  public function TagRole(TagRoleRequest $in): Awaitable<\Errors\Error>;
  public function TagUser(TagUserRequest $in): Awaitable<\Errors\Error>;
  public function UntagRole(UntagRoleRequest $in): Awaitable<\Errors\Error>;
  public function UntagUser(UntagUserRequest $in): Awaitable<\Errors\Error>;
  public function UpdateAccessKey(UpdateAccessKeyRequest $in): Awaitable<\Errors\Error>;
  public function UpdateAccountPasswordPolicy(UpdateAccountPasswordPolicyRequest $in): Awaitable<\Errors\Error>;
  public function UpdateAssumeRolePolicy(UpdateAssumeRolePolicyRequest $in): Awaitable<\Errors\Error>;
  public function UpdateGroup(UpdateGroupRequest $in): Awaitable<\Errors\Error>;
  public function UpdateLoginProfile(UpdateLoginProfileRequest $in): Awaitable<\Errors\Error>;
  public function UpdateOpenIDConnectProviderThumbprint(UpdateOpenIDConnectProviderThumbprintRequest $in): Awaitable<\Errors\Error>;
  public function UpdateRole(UpdateRoleRequest $in): Awaitable<\Errors\Result<UpdateRoleResponse>>;
  public function UpdateRoleDescription(UpdateRoleDescriptionRequest $in): Awaitable<\Errors\Result<UpdateRoleDescriptionResponse>>;
  public function UpdateSAMLProvider(UpdateSAMLProviderRequest $in): Awaitable<\Errors\Result<UpdateSAMLProviderResponse>>;
  public function UpdateSSHPublicKey(UpdateSSHPublicKeyRequest $in): Awaitable<\Errors\Error>;
  public function UpdateServerCertificate(UpdateServerCertificateRequest $in): Awaitable<\Errors\Error>;
  public function UpdateServiceSpecificCredential(UpdateServiceSpecificCredentialRequest $in): Awaitable<\Errors\Error>;
  public function UpdateSigningCertificate(UpdateSigningCertificateRequest $in): Awaitable<\Errors\Error>;
  public function UpdateUser(UpdateUserRequest $in): Awaitable<\Errors\Error>;
  public function UploadSSHPublicKey(UploadSSHPublicKeyRequest $in): Awaitable<\Errors\Result<UploadSSHPublicKeyResponse>>;
  public function UploadServerCertificate(UploadServerCertificateRequest $in): Awaitable<\Errors\Result<UploadServerCertificateResponse>>;
  public function UploadSigningCertificate(UploadSigningCertificateRequest $in): Awaitable<\Errors\Result<UploadSigningCertificateResponse>>;
}

class AccessDetail {
  public ?organizationsEntityPathType $entity_path;
  public ?dateType $last_authenticated_time;
  public ?stringType $region;
  public ?serviceNameType $service_name;
  public ?serviceNamespaceType $service_namespace;
  public ?integerType $total_authenticated_entities;

  public function __construct(shape(
    ?'entity_path' => ?organizationsEntityPathType,
    ?'last_authenticated_time' => ?dateType,
    ?'region' => ?stringType,
    ?'service_name' => ?serviceNameType,
    ?'service_namespace' => ?serviceNamespaceType,
    ?'total_authenticated_entities' => ?integerType,
  ) $s = shape()) {
    $this->entity_path = $s['entity_path'] ?? '';
    $this->last_authenticated_time = $s['last_authenticated_time'] ?? 0;
    $this->region = $s['region'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_namespace = $s['service_namespace'] ?? '';
    $this->total_authenticated_entities = $s['total_authenticated_entities'] ?? 0;
  }
}

type AccessDetails = vec<AccessDetail>;

class AccessKey {
  public ?accessKeyIdType $access_key_id;
  public ?dateType $create_date;
  public ?accessKeySecretType $secret_access_key;
  public ?statusType $status;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'access_key_id' => ?accessKeyIdType,
    ?'create_date' => ?dateType,
    ?'secret_access_key' => ?accessKeySecretType,
    ?'status' => ?statusType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->secret_access_key = $s['secret_access_key'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class AccessKeyLastUsed {
  public ?dateType $last_used_date;
  public ?stringType $region;
  public ?stringType $service_name;

  public function __construct(shape(
    ?'last_used_date' => ?dateType,
    ?'region' => ?stringType,
    ?'service_name' => ?stringType,
  ) $s = shape()) {
    $this->last_used_date = $s['last_used_date'] ?? 0;
    $this->region = $s['region'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
  }
}

class AccessKeyMetadata {
  public ?accessKeyIdType $access_key_id;
  public ?dateType $create_date;
  public ?statusType $status;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'access_key_id' => ?accessKeyIdType,
    ?'create_date' => ?dateType,
    ?'status' => ?statusType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type ActionNameListType = vec<ActionNameType>;

type ActionNameType = string;

class AddClientIDToOpenIDConnectProviderRequest {
  public ?clientIDType $client_id;
  public ?arnType $open_id_connect_provider_arn;

  public function __construct(shape(
    ?'client_id' => ?clientIDType,
    ?'open_id_connect_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->open_id_connect_provider_arn = $s['open_id_connect_provider_arn'] ?? '';
  }
}

class AddRoleToInstanceProfileRequest {
  public ?instanceProfileNameType $instance_profile_name;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'instance_profile_name' => ?instanceProfileNameType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $s['instance_profile_name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class AddUserToGroupRequest {
  public ?groupNameType $group_name;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type ArnListType = vec<arnType>;

class AttachGroupPolicyRequest {
  public ?groupNameType $group_name;
  public ?arnType $policy_arn;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'policy_arn' => ?arnType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class AttachRolePolicyRequest {
  public ?arnType $policy_arn;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class AttachUserPolicyRequest {
  public ?arnType $policy_arn;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class AttachedPermissionsBoundary {
  public ?arnType $permissions_boundary_arn;
  public ?PermissionsBoundaryAttachmentType $permissions_boundary_type;

  public function __construct(shape(
    ?'permissions_boundary_arn' => ?arnType,
    ?'permissions_boundary_type' => ?PermissionsBoundaryAttachmentType,
  ) $s = shape()) {
    $this->permissions_boundary_arn = $s['permissions_boundary_arn'] ?? '';
    $this->permissions_boundary_type = $s['permissions_boundary_type'] ?? '';
  }
}

class AttachedPolicy {
  public ?arnType $policy_arn;
  public ?policyNameType $policy_name;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'policy_name' => ?policyNameType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

type BootstrapDatum = string;

class ChangePasswordRequest {
  public ?passwordType $new_password;
  public ?passwordType $old_password;

  public function __construct(shape(
    ?'new_password' => ?passwordType,
    ?'old_password' => ?passwordType,
  ) $s = shape()) {
    $this->new_password = $s['new_password'] ?? '';
    $this->old_password = $s['old_password'] ?? '';
  }
}

type ColumnNumber = int;

class ConcurrentModificationException {
  public ?ConcurrentModificationMessage $message;

  public function __construct(shape(
    ?'message' => ?ConcurrentModificationMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ConcurrentModificationMessage = string;

class ContextEntry {
  public ?ContextKeyNameType $context_key_name;
  public ?ContextKeyTypeEnum $context_key_type;
  public ?ContextKeyValueListType $context_key_values;

  public function __construct(shape(
    ?'context_key_name' => ?ContextKeyNameType,
    ?'context_key_type' => ?ContextKeyTypeEnum,
    ?'context_key_values' => ?ContextKeyValueListType,
  ) $s = shape()) {
    $this->context_key_name = $s['context_key_name'] ?? '';
    $this->context_key_type = $s['context_key_type'] ?? '';
    $this->context_key_values = $s['context_key_values'] ?? vec[];
  }
}

type ContextEntryListType = vec<ContextEntry>;

type ContextKeyNameType = string;

type ContextKeyNamesResultListType = vec<ContextKeyNameType>;

type ContextKeyTypeEnum = string;

type ContextKeyValueListType = vec<ContextKeyValueType>;

type ContextKeyValueType = string;

class CreateAccessKeyRequest {
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->user_name = $s['user_name'] ?? '';
  }
}

class CreateAccessKeyResponse {
  public ?AccessKey $access_key;

  public function __construct(shape(
    ?'access_key' => ?AccessKey,
  ) $s = shape()) {
    $this->access_key = $s['access_key'] ?? null;
  }
}

class CreateAccountAliasRequest {
  public ?accountAliasType $account_alias;

  public function __construct(shape(
    ?'account_alias' => ?accountAliasType,
  ) $s = shape()) {
    $this->account_alias = $s['account_alias'] ?? '';
  }
}

class CreateGroupRequest {
  public ?groupNameType $group_name;
  public ?pathType $path;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'path' => ?pathType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->path = $s['path'] ?? '';
  }
}

class CreateGroupResponse {
  public ?Group $group;

  public function __construct(shape(
    ?'group' => ?Group,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
  }
}

class CreateInstanceProfileRequest {
  public ?instanceProfileNameType $instance_profile_name;
  public ?pathType $path;

  public function __construct(shape(
    ?'instance_profile_name' => ?instanceProfileNameType,
    ?'path' => ?pathType,
  ) $s = shape()) {
    $this->instance_profile_name = $s['instance_profile_name'] ?? '';
    $this->path = $s['path'] ?? '';
  }
}

class CreateInstanceProfileResponse {
  public ?InstanceProfile $instance_profile;

  public function __construct(shape(
    ?'instance_profile' => ?InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $s['instance_profile'] ?? null;
  }
}

class CreateLoginProfileRequest {
  public ?passwordType $password;
  public ?booleanType $password_reset_required;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'password' => ?passwordType,
    ?'password_reset_required' => ?booleanType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->password = $s['password'] ?? '';
    $this->password_reset_required = $s['password_reset_required'] ?? false;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class CreateLoginProfileResponse {
  public ?LoginProfile $login_profile;

  public function __construct(shape(
    ?'login_profile' => ?LoginProfile,
  ) $s = shape()) {
    $this->login_profile = $s['login_profile'] ?? null;
  }
}

class CreateOpenIDConnectProviderRequest {
  public ?clientIDListType $client_id_list;
  public ?thumbprintListType $thumbprint_list;
  public ?OpenIDConnectProviderUrlType $url;

  public function __construct(shape(
    ?'client_id_list' => ?clientIDListType,
    ?'thumbprint_list' => ?thumbprintListType,
    ?'url' => ?OpenIDConnectProviderUrlType,
  ) $s = shape()) {
    $this->client_id_list = $s['client_id_list'] ?? vec[];
    $this->thumbprint_list = $s['thumbprint_list'] ?? vec[];
    $this->url = $s['url'] ?? '';
  }
}

class CreateOpenIDConnectProviderResponse {
  public ?arnType $open_id_connect_provider_arn;

  public function __construct(shape(
    ?'open_id_connect_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $s['open_id_connect_provider_arn'] ?? '';
  }
}

class CreatePolicyRequest {
  public ?policyDescriptionType $description;
  public ?policyPathType $path;
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;

  public function __construct(shape(
    ?'description' => ?policyDescriptionType,
    ?'path' => ?policyPathType,
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

class CreatePolicyResponse {
  public ?Policy $policy;

  public function __construct(shape(
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

class CreatePolicyVersionRequest {
  public ?arnType $policy_arn;
  public ?policyDocumentType $policy_document;
  public ?booleanType $set_as_default;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'policy_document' => ?policyDocumentType,
    ?'set_as_default' => ?booleanType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->policy_document = $s['policy_document'] ?? '';
    $this->set_as_default = $s['set_as_default'] ?? false;
  }
}

class CreatePolicyVersionResponse {
  public ?PolicyVersion $policy_version;

  public function __construct(shape(
    ?'policy_version' => ?PolicyVersion,
  ) $s = shape()) {
    $this->policy_version = $s['policy_version'] ?? null;
  }
}

class CreateRoleRequest {
  public ?policyDocumentType $assume_role_policy_document;
  public ?roleDescriptionType $description;
  public ?roleMaxSessionDurationType $max_session_duration;
  public ?pathType $path;
  public ?arnType $permissions_boundary;
  public ?roleNameType $role_name;
  public ?tagListType $tags;

  public function __construct(shape(
    ?'assume_role_policy_document' => ?policyDocumentType,
    ?'description' => ?roleDescriptionType,
    ?'max_session_duration' => ?roleMaxSessionDurationType,
    ?'path' => ?pathType,
    ?'permissions_boundary' => ?arnType,
    ?'role_name' => ?roleNameType,
    ?'tags' => ?tagListType,
  ) $s = shape()) {
    $this->assume_role_policy_document = $s['assume_role_policy_document'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->max_session_duration = $s['max_session_duration'] ?? 0;
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary = $s['permissions_boundary'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRoleResponse {
  public ?Role $role;

  public function __construct(shape(
    ?'role' => ?Role,
  ) $s = shape()) {
    $this->role = $s['role'] ?? null;
  }
}

class CreateSAMLProviderRequest {
  public ?SAMLProviderNameType $name;
  public ?SAMLMetadataDocumentType $saml_metadata_document;

  public function __construct(shape(
    ?'name' => ?SAMLProviderNameType,
    ?'saml_metadata_document' => ?SAMLMetadataDocumentType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->saml_metadata_document = $s['saml_metadata_document'] ?? '';
  }
}

class CreateSAMLProviderResponse {
  public ?arnType $saml_provider_arn;

  public function __construct(shape(
    ?'saml_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $s['saml_provider_arn'] ?? '';
  }
}

class CreateServiceLinkedRoleRequest {
  public ?groupNameType $aws_service_name;
  public ?customSuffixType $custom_suffix;
  public ?roleDescriptionType $description;

  public function __construct(shape(
    ?'aws_service_name' => ?groupNameType,
    ?'custom_suffix' => ?customSuffixType,
    ?'description' => ?roleDescriptionType,
  ) $s = shape()) {
    $this->aws_service_name = $s['aws_service_name'] ?? '';
    $this->custom_suffix = $s['custom_suffix'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

class CreateServiceLinkedRoleResponse {
  public ?Role $role;

  public function __construct(shape(
    ?'role' => ?Role,
  ) $s = shape()) {
    $this->role = $s['role'] ?? null;
  }
}

class CreateServiceSpecificCredentialRequest {
  public ?serviceName $service_name;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'service_name' => ?serviceName,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->service_name = $s['service_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class CreateServiceSpecificCredentialResponse {
  public ?ServiceSpecificCredential $service_specific_credential;

  public function __construct(shape(
    ?'service_specific_credential' => ?ServiceSpecificCredential,
  ) $s = shape()) {
    $this->service_specific_credential = $s['service_specific_credential'] ?? null;
  }
}

class CreateUserRequest {
  public ?pathType $path;
  public ?arnType $permissions_boundary;
  public ?tagListType $tags;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'path' => ?pathType,
    ?'permissions_boundary' => ?arnType,
    ?'tags' => ?tagListType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary = $s['permissions_boundary'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->user_name = $s['user_name'] ?? '';
  }
}

class CreateUserResponse {
  public ?User $user;

  public function __construct(shape(
    ?'user' => ?User,
  ) $s = shape()) {
    $this->user = $s['user'] ?? null;
  }
}

class CreateVirtualMFADeviceRequest {
  public ?pathType $path;
  public ?virtualMFADeviceName $virtual_mfa_device_name;

  public function __construct(shape(
    ?'path' => ?pathType,
    ?'virtual_mfa_device_name' => ?virtualMFADeviceName,
  ) $s = shape()) {
    $this->path = $s['path'] ?? '';
    $this->virtual_mfa_device_name = $s['virtual_mfa_device_name'] ?? '';
  }
}

class CreateVirtualMFADeviceResponse {
  public ?VirtualMFADevice $virtual_mfa_device;

  public function __construct(shape(
    ?'virtual_mfa_device' => ?VirtualMFADevice,
  ) $s = shape()) {
    $this->virtual_mfa_device = $s['virtual_mfa_device'] ?? null;
  }
}

class CredentialReportExpiredException {
  public ?credentialReportExpiredExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?credentialReportExpiredExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CredentialReportNotPresentException {
  public ?credentialReportNotPresentExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?credentialReportNotPresentExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class CredentialReportNotReadyException {
  public ?credentialReportNotReadyExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?credentialReportNotReadyExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DeactivateMFADeviceRequest {
  public ?serialNumberType $serial_number;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'serial_number' => ?serialNumberType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->serial_number = $s['serial_number'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteAccessKeyRequest {
  public ?accessKeyIdType $access_key_id;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'access_key_id' => ?accessKeyIdType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteAccountAliasRequest {
  public ?accountAliasType $account_alias;

  public function __construct(shape(
    ?'account_alias' => ?accountAliasType,
  ) $s = shape()) {
    $this->account_alias = $s['account_alias'] ?? '';
  }
}

class DeleteConflictException {
  public ?deleteConflictMessage $message;

  public function __construct(shape(
    ?'message' => ?deleteConflictMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DeleteGroupPolicyRequest {
  public ?groupNameType $group_name;
  public ?policyNameType $policy_name;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'policy_name' => ?policyNameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

class DeleteGroupRequest {
  public ?groupNameType $group_name;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
  }
}

class DeleteInstanceProfileRequest {
  public ?instanceProfileNameType $instance_profile_name;

  public function __construct(shape(
    ?'instance_profile_name' => ?instanceProfileNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $s['instance_profile_name'] ?? '';
  }
}

class DeleteLoginProfileRequest {
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteOpenIDConnectProviderRequest {
  public ?arnType $open_id_connect_provider_arn;

  public function __construct(shape(
    ?'open_id_connect_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $s['open_id_connect_provider_arn'] ?? '';
  }
}

class DeletePolicyRequest {
  public ?arnType $policy_arn;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class DeletePolicyVersionRequest {
  public ?arnType $policy_arn;
  public ?policyVersionIdType $version_id;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'version_id' => ?policyVersionIdType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

class DeleteRolePermissionsBoundaryRequest {
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->role_name = $s['role_name'] ?? '';
  }
}

class DeleteRolePolicyRequest {
  public ?policyNameType $policy_name;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'policy_name' => ?policyNameType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class DeleteRoleRequest {
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->role_name = $s['role_name'] ?? '';
  }
}

class DeleteSAMLProviderRequest {
  public ?arnType $saml_provider_arn;

  public function __construct(shape(
    ?'saml_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $s['saml_provider_arn'] ?? '';
  }
}

class DeleteSSHPublicKeyRequest {
  public ?publicKeyIdType $ssh_public_key_id;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'ssh_public_key_id' => ?publicKeyIdType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_id = $s['ssh_public_key_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteServerCertificateRequest {
  public ?serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
    ?'server_certificate_name' => ?serverCertificateNameType,
  ) $s = shape()) {
    $this->server_certificate_name = $s['server_certificate_name'] ?? '';
  }
}

class DeleteServiceLinkedRoleRequest {
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->role_name = $s['role_name'] ?? '';
  }
}

class DeleteServiceLinkedRoleResponse {
  public ?DeletionTaskIdType $deletion_task_id;

  public function __construct(shape(
    ?'deletion_task_id' => ?DeletionTaskIdType,
  ) $s = shape()) {
    $this->deletion_task_id = $s['deletion_task_id'] ?? '';
  }
}

class DeleteServiceSpecificCredentialRequest {
  public ?serviceSpecificCredentialId $service_specific_credential_id;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'service_specific_credential_id' => ?serviceSpecificCredentialId,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->service_specific_credential_id = $s['service_specific_credential_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteSigningCertificateRequest {
  public ?certificateIdType $certificate_id;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'certificate_id' => ?certificateIdType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->certificate_id = $s['certificate_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteUserPermissionsBoundaryRequest {
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteUserPolicyRequest {
  public ?policyNameType $policy_name;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'policy_name' => ?policyNameType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteUserRequest {
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DeleteVirtualMFADeviceRequest {
  public ?serialNumberType $serial_number;

  public function __construct(shape(
    ?'serial_number' => ?serialNumberType,
  ) $s = shape()) {
    $this->serial_number = $s['serial_number'] ?? '';
  }
}

class DeletionTaskFailureReasonType {
  public ?ReasonType $reason;
  public ?RoleUsageListType $role_usage_list;

  public function __construct(shape(
    ?'reason' => ?ReasonType,
    ?'role_usage_list' => ?RoleUsageListType,
  ) $s = shape()) {
    $this->reason = $s['reason'] ?? '';
    $this->role_usage_list = $s['role_usage_list'] ?? vec[];
  }
}

type DeletionTaskIdType = string;

type DeletionTaskStatusType = string;

class DetachGroupPolicyRequest {
  public ?groupNameType $group_name;
  public ?arnType $policy_arn;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'policy_arn' => ?arnType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class DetachRolePolicyRequest {
  public ?arnType $policy_arn;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class DetachUserPolicyRequest {
  public ?arnType $policy_arn;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class DuplicateCertificateException {
  public ?duplicateCertificateMessage $message;

  public function __construct(shape(
    ?'message' => ?duplicateCertificateMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DuplicateSSHPublicKeyException {
  public ?duplicateSSHPublicKeyMessage $message;

  public function __construct(shape(
    ?'message' => ?duplicateSSHPublicKeyMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class EnableMFADeviceRequest {
  public ?authenticationCodeType $authentication_code_1;
  public ?authenticationCodeType $authentication_code_2;
  public ?serialNumberType $serial_number;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'authentication_code_1' => ?authenticationCodeType,
    ?'authentication_code_2' => ?authenticationCodeType,
    ?'serial_number' => ?serialNumberType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->authentication_code_1 = $s['authentication_code_1'] ?? '';
    $this->authentication_code_2 = $s['authentication_code_2'] ?? '';
    $this->serial_number = $s['serial_number'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class EntityAlreadyExistsException {
  public ?entityAlreadyExistsMessage $message;

  public function __construct(shape(
    ?'message' => ?entityAlreadyExistsMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class EntityDetails {
  public ?EntityInfo $entity_info;
  public ?dateType $last_authenticated;

  public function __construct(shape(
    ?'entity_info' => ?EntityInfo,
    ?'last_authenticated' => ?dateType,
  ) $s = shape()) {
    $this->entity_info = $s['entity_info'] ?? null;
    $this->last_authenticated = $s['last_authenticated'] ?? 0;
  }
}

class EntityInfo {
  public ?arnType $arn;
  public ?idType $id;
  public ?userNameType $name;
  public ?pathType $path;
  public ?policyOwnerEntityType $type;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'id' => ?idType,
    ?'name' => ?userNameType,
    ?'path' => ?pathType,
    ?'type' => ?policyOwnerEntityType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class EntityTemporarilyUnmodifiableException {
  public ?entityTemporarilyUnmodifiableMessage $message;

  public function __construct(shape(
    ?'message' => ?entityTemporarilyUnmodifiableMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type EntityType = string;

class ErrorDetails {
  public ?stringType $code;
  public ?stringType $message;

  public function __construct(shape(
    ?'code' => ?stringType,
    ?'message' => ?stringType,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type EvalDecisionDetailsType = dict<EvalDecisionSourceType, PolicyEvaluationDecisionType>;

type EvalDecisionSourceType = string;

class EvaluationResult {
  public ?ActionNameType $eval_action_name;
  public ?PolicyEvaluationDecisionType $eval_decision;
  public ?EvalDecisionDetailsType $eval_decision_details;
  public ?ResourceNameType $eval_resource_name;
  public ?StatementListType $matched_statements;
  public ?ContextKeyNamesResultListType $missing_context_values;
  public ?OrganizationsDecisionDetail $organizations_decision_detail;
  public ?PermissionsBoundaryDecisionDetail $permissions_boundary_decision_detail;
  public ?ResourceSpecificResultListType $resource_specific_results;

  public function __construct(shape(
    ?'eval_action_name' => ?ActionNameType,
    ?'eval_decision' => ?PolicyEvaluationDecisionType,
    ?'eval_decision_details' => ?EvalDecisionDetailsType,
    ?'eval_resource_name' => ?ResourceNameType,
    ?'matched_statements' => ?StatementListType,
    ?'missing_context_values' => ?ContextKeyNamesResultListType,
    ?'organizations_decision_detail' => ?OrganizationsDecisionDetail,
    ?'permissions_boundary_decision_detail' => ?PermissionsBoundaryDecisionDetail,
    ?'resource_specific_results' => ?ResourceSpecificResultListType,
  ) $s = shape()) {
    $this->eval_action_name = $s['eval_action_name'] ?? '';
    $this->eval_decision = $s['eval_decision'] ?? '';
    $this->eval_decision_details = $s['eval_decision_details'] ?? dict[];
    $this->eval_resource_name = $s['eval_resource_name'] ?? '';
    $this->matched_statements = $s['matched_statements'] ?? vec[];
    $this->missing_context_values = $s['missing_context_values'] ?? vec[];
    $this->organizations_decision_detail = $s['organizations_decision_detail'] ?? null;
    $this->permissions_boundary_decision_detail = $s['permissions_boundary_decision_detail'] ?? null;
    $this->resource_specific_results = $s['resource_specific_results'] ?? vec[];
  }
}

type EvaluationResultsListType = vec<EvaluationResult>;

class GenerateCredentialReportResponse {
  public ?ReportStateDescriptionType $description;
  public ?ReportStateType $state;

  public function __construct(shape(
    ?'description' => ?ReportStateDescriptionType,
    ?'state' => ?ReportStateType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class GenerateOrganizationsAccessReportRequest {
  public ?organizationsEntityPathType $entity_path;
  public ?organizationsPolicyIdType $organizations_policy_id;

  public function __construct(shape(
    ?'entity_path' => ?organizationsEntityPathType,
    ?'organizations_policy_id' => ?organizationsPolicyIdType,
  ) $s = shape()) {
    $this->entity_path = $s['entity_path'] ?? '';
    $this->organizations_policy_id = $s['organizations_policy_id'] ?? '';
  }
}

class GenerateOrganizationsAccessReportResponse {
  public ?jobIDType $job_id;

  public function __construct(shape(
    ?'job_id' => ?jobIDType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GenerateServiceLastAccessedDetailsRequest {
  public ?arnType $arn;

  public function __construct(shape(
    ?'arn' => ?arnType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class GenerateServiceLastAccessedDetailsResponse {
  public ?jobIDType $job_id;

  public function __construct(shape(
    ?'job_id' => ?jobIDType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetAccessKeyLastUsedRequest {
  public ?accessKeyIdType $access_key_id;

  public function __construct(shape(
    ?'access_key_id' => ?accessKeyIdType,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
  }
}

class GetAccessKeyLastUsedResponse {
  public ?AccessKeyLastUsed $access_key_last_used;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'access_key_last_used' => ?AccessKeyLastUsed,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->access_key_last_used = $s['access_key_last_used'] ?? null;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class GetAccountAuthorizationDetailsRequest {
  public ?entityListType $filter;
  public ?markerType $marker;
  public ?maxItemsType $max_items;

  public function __construct(shape(
    ?'filter' => ?entityListType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class GetAccountAuthorizationDetailsResponse {
  public ?groupDetailListType $group_detail_list;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?ManagedPolicyDetailListType $policies;
  public ?roleDetailListType $role_detail_list;
  public ?userDetailListType $user_detail_list;

  public function __construct(shape(
    ?'group_detail_list' => ?groupDetailListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'policies' => ?ManagedPolicyDetailListType,
    ?'role_detail_list' => ?roleDetailListType,
    ?'user_detail_list' => ?userDetailListType,
  ) $s = shape()) {
    $this->group_detail_list = $s['group_detail_list'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->policies = $s['policies'] ?? vec[];
    $this->role_detail_list = $s['role_detail_list'] ?? vec[];
    $this->user_detail_list = $s['user_detail_list'] ?? vec[];
  }
}

class GetAccountPasswordPolicyResponse {
  public ?PasswordPolicy $password_policy;

  public function __construct(shape(
    ?'password_policy' => ?PasswordPolicy,
  ) $s = shape()) {
    $this->password_policy = $s['password_policy'] ?? null;
  }
}

class GetAccountSummaryResponse {
  public ?summaryMapType $summary_map;

  public function __construct(shape(
    ?'summary_map' => ?summaryMapType,
  ) $s = shape()) {
    $this->summary_map = $s['summary_map'] ?? dict[];
  }
}

class GetContextKeysForCustomPolicyRequest {
  public ?SimulationPolicyListType $policy_input_list;

  public function __construct(shape(
    ?'policy_input_list' => ?SimulationPolicyListType,
  ) $s = shape()) {
    $this->policy_input_list = $s['policy_input_list'] ?? vec[];
  }
}

class GetContextKeysForPolicyResponse {
  public ?ContextKeyNamesResultListType $context_key_names;

  public function __construct(shape(
    ?'context_key_names' => ?ContextKeyNamesResultListType,
  ) $s = shape()) {
    $this->context_key_names = $s['context_key_names'] ?? vec[];
  }
}

class GetContextKeysForPrincipalPolicyRequest {
  public ?SimulationPolicyListType $policy_input_list;
  public ?arnType $policy_source_arn;

  public function __construct(shape(
    ?'policy_input_list' => ?SimulationPolicyListType,
    ?'policy_source_arn' => ?arnType,
  ) $s = shape()) {
    $this->policy_input_list = $s['policy_input_list'] ?? vec[];
    $this->policy_source_arn = $s['policy_source_arn'] ?? '';
  }
}

class GetCredentialReportResponse {
  public ?ReportContentType $content;
  public ?dateType $generated_time;
  public ?ReportFormatType $report_format;

  public function __construct(shape(
    ?'content' => ?ReportContentType,
    ?'generated_time' => ?dateType,
    ?'report_format' => ?ReportFormatType,
  ) $s = shape()) {
    $this->content = $s['content'] ?? '';
    $this->generated_time = $s['generated_time'] ?? 0;
    $this->report_format = $s['report_format'] ?? '';
  }
}

class GetGroupPolicyRequest {
  public ?groupNameType $group_name;
  public ?policyNameType $policy_name;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'policy_name' => ?policyNameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

class GetGroupPolicyResponse {
  public ?groupNameType $group_name;
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

class GetGroupRequest {
  public ?groupNameType $group_name;
  public ?markerType $marker;
  public ?maxItemsType $max_items;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class GetGroupResponse {
  public ?Group $group;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?userListType $users;

  public function __construct(shape(
    ?'group' => ?Group,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'users' => ?userListType,
  ) $s = shape()) {
    $this->group = $s['group'] ?? null;
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->users = $s['users'] ?? vec[];
  }
}

class GetInstanceProfileRequest {
  public ?instanceProfileNameType $instance_profile_name;

  public function __construct(shape(
    ?'instance_profile_name' => ?instanceProfileNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $s['instance_profile_name'] ?? '';
  }
}

class GetInstanceProfileResponse {
  public ?InstanceProfile $instance_profile;

  public function __construct(shape(
    ?'instance_profile' => ?InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $s['instance_profile'] ?? null;
  }
}

class GetLoginProfileRequest {
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->user_name = $s['user_name'] ?? '';
  }
}

class GetLoginProfileResponse {
  public ?LoginProfile $login_profile;

  public function __construct(shape(
    ?'login_profile' => ?LoginProfile,
  ) $s = shape()) {
    $this->login_profile = $s['login_profile'] ?? null;
  }
}

class GetOpenIDConnectProviderRequest {
  public ?arnType $open_id_connect_provider_arn;

  public function __construct(shape(
    ?'open_id_connect_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $s['open_id_connect_provider_arn'] ?? '';
  }
}

class GetOpenIDConnectProviderResponse {
  public ?clientIDListType $client_id_list;
  public ?dateType $create_date;
  public ?thumbprintListType $thumbprint_list;
  public ?OpenIDConnectProviderUrlType $url;

  public function __construct(shape(
    ?'client_id_list' => ?clientIDListType,
    ?'create_date' => ?dateType,
    ?'thumbprint_list' => ?thumbprintListType,
    ?'url' => ?OpenIDConnectProviderUrlType,
  ) $s = shape()) {
    $this->client_id_list = $s['client_id_list'] ?? vec[];
    $this->create_date = $s['create_date'] ?? 0;
    $this->thumbprint_list = $s['thumbprint_list'] ?? vec[];
    $this->url = $s['url'] ?? '';
  }
}

class GetOrganizationsAccessReportRequest {
  public ?jobIDType $job_id;
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?sortKeyType $sort_key;

  public function __construct(shape(
    ?'job_id' => ?jobIDType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'sort_key' => ?sortKeyType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->sort_key = $s['sort_key'] ?? '';
  }
}

class GetOrganizationsAccessReportResponse {
  public ?AccessDetails $access_details;
  public ?ErrorDetails $error_details;
  public ?booleanType $is_truncated;
  public ?dateType $job_completion_date;
  public ?dateType $job_creation_date;
  public ?jobStatusType $job_status;
  public ?markerType $marker;
  public ?integerType $number_of_services_accessible;
  public ?integerType $number_of_services_not_accessed;

  public function __construct(shape(
    ?'access_details' => ?AccessDetails,
    ?'error_details' => ?ErrorDetails,
    ?'is_truncated' => ?booleanType,
    ?'job_completion_date' => ?dateType,
    ?'job_creation_date' => ?dateType,
    ?'job_status' => ?jobStatusType,
    ?'marker' => ?markerType,
    ?'number_of_services_accessible' => ?integerType,
    ?'number_of_services_not_accessed' => ?integerType,
  ) $s = shape()) {
    $this->access_details = $s['access_details'] ?? vec[];
    $this->error_details = $s['error_details'] ?? null;
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->job_completion_date = $s['job_completion_date'] ?? 0;
    $this->job_creation_date = $s['job_creation_date'] ?? 0;
    $this->job_status = $s['job_status'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->number_of_services_accessible = $s['number_of_services_accessible'] ?? 0;
    $this->number_of_services_not_accessed = $s['number_of_services_not_accessed'] ?? 0;
  }
}

class GetPolicyRequest {
  public ?arnType $policy_arn;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class GetPolicyResponse {
  public ?Policy $policy;

  public function __construct(shape(
    ?'policy' => ?Policy,
  ) $s = shape()) {
    $this->policy = $s['policy'] ?? null;
  }
}

class GetPolicyVersionRequest {
  public ?arnType $policy_arn;
  public ?policyVersionIdType $version_id;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'version_id' => ?policyVersionIdType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

class GetPolicyVersionResponse {
  public ?PolicyVersion $policy_version;

  public function __construct(shape(
    ?'policy_version' => ?PolicyVersion,
  ) $s = shape()) {
    $this->policy_version = $s['policy_version'] ?? null;
  }
}

class GetRolePolicyRequest {
  public ?policyNameType $policy_name;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'policy_name' => ?policyNameType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class GetRolePolicyResponse {
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class GetRoleRequest {
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->role_name = $s['role_name'] ?? '';
  }
}

class GetRoleResponse {
  public ?Role $role;

  public function __construct(shape(
    ?'role' => ?Role,
  ) $s = shape()) {
    $this->role = $s['role'] ?? null;
  }
}

class GetSAMLProviderRequest {
  public ?arnType $saml_provider_arn;

  public function __construct(shape(
    ?'saml_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $s['saml_provider_arn'] ?? '';
  }
}

class GetSAMLProviderResponse {
  public ?dateType $create_date;
  public ?SAMLMetadataDocumentType $saml_metadata_document;
  public ?dateType $valid_until;

  public function __construct(shape(
    ?'create_date' => ?dateType,
    ?'saml_metadata_document' => ?SAMLMetadataDocumentType,
    ?'valid_until' => ?dateType,
  ) $s = shape()) {
    $this->create_date = $s['create_date'] ?? 0;
    $this->saml_metadata_document = $s['saml_metadata_document'] ?? '';
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

class GetSSHPublicKeyRequest {
  public ?encodingType $encoding;
  public ?publicKeyIdType $ssh_public_key_id;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'encoding' => ?encodingType,
    ?'ssh_public_key_id' => ?publicKeyIdType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->encoding = $s['encoding'] ?? '';
    $this->ssh_public_key_id = $s['ssh_public_key_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class GetSSHPublicKeyResponse {
  public ?SSHPublicKey $ssh_public_key;

  public function __construct(shape(
    ?'ssh_public_key' => ?SSHPublicKey,
  ) $s = shape()) {
    $this->ssh_public_key = $s['ssh_public_key'] ?? null;
  }
}

class GetServerCertificateRequest {
  public ?serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
    ?'server_certificate_name' => ?serverCertificateNameType,
  ) $s = shape()) {
    $this->server_certificate_name = $s['server_certificate_name'] ?? '';
  }
}

class GetServerCertificateResponse {
  public ?ServerCertificate $server_certificate;

  public function __construct(shape(
    ?'server_certificate' => ?ServerCertificate,
  ) $s = shape()) {
    $this->server_certificate = $s['server_certificate'] ?? null;
  }
}

class GetServiceLastAccessedDetailsRequest {
  public ?jobIDType $job_id;
  public ?markerType $marker;
  public ?maxItemsType $max_items;

  public function __construct(shape(
    ?'job_id' => ?jobIDType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class GetServiceLastAccessedDetailsResponse {
  public ?ErrorDetails $error;
  public ?booleanType $is_truncated;
  public ?dateType $job_completion_date;
  public ?dateType $job_creation_date;
  public ?jobStatusType $job_status;
  public ?responseMarkerType $marker;
  public ?ServicesLastAccessed $services_last_accessed;

  public function __construct(shape(
    ?'error' => ?ErrorDetails,
    ?'is_truncated' => ?booleanType,
    ?'job_completion_date' => ?dateType,
    ?'job_creation_date' => ?dateType,
    ?'job_status' => ?jobStatusType,
    ?'marker' => ?responseMarkerType,
    ?'services_last_accessed' => ?ServicesLastAccessed,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->job_completion_date = $s['job_completion_date'] ?? 0;
    $this->job_creation_date = $s['job_creation_date'] ?? 0;
    $this->job_status = $s['job_status'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->services_last_accessed = $s['services_last_accessed'] ?? vec[];
  }
}

class GetServiceLastAccessedDetailsWithEntitiesRequest {
  public ?jobIDType $job_id;
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?serviceNamespaceType $service_namespace;

  public function __construct(shape(
    ?'job_id' => ?jobIDType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'service_namespace' => ?serviceNamespaceType,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->service_namespace = $s['service_namespace'] ?? '';
  }
}

class GetServiceLastAccessedDetailsWithEntitiesResponse {
  public ?entityDetailsListType $entity_details_list;
  public ?ErrorDetails $error;
  public ?booleanType $is_truncated;
  public ?dateType $job_completion_date;
  public ?dateType $job_creation_date;
  public ?jobStatusType $job_status;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'entity_details_list' => ?entityDetailsListType,
    ?'error' => ?ErrorDetails,
    ?'is_truncated' => ?booleanType,
    ?'job_completion_date' => ?dateType,
    ?'job_creation_date' => ?dateType,
    ?'job_status' => ?jobStatusType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->entity_details_list = $s['entity_details_list'] ?? vec[];
    $this->error = $s['error'] ?? null;
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->job_completion_date = $s['job_completion_date'] ?? 0;
    $this->job_creation_date = $s['job_creation_date'] ?? 0;
    $this->job_status = $s['job_status'] ?? '';
    $this->marker = $s['marker'] ?? '';
  }
}

class GetServiceLinkedRoleDeletionStatusRequest {
  public ?DeletionTaskIdType $deletion_task_id;

  public function __construct(shape(
    ?'deletion_task_id' => ?DeletionTaskIdType,
  ) $s = shape()) {
    $this->deletion_task_id = $s['deletion_task_id'] ?? '';
  }
}

class GetServiceLinkedRoleDeletionStatusResponse {
  public ?DeletionTaskFailureReasonType $reason;
  public ?DeletionTaskStatusType $status;

  public function __construct(shape(
    ?'reason' => ?DeletionTaskFailureReasonType,
    ?'status' => ?DeletionTaskStatusType,
  ) $s = shape()) {
    $this->reason = $s['reason'] ?? null;
    $this->status = $s['status'] ?? '';
  }
}

class GetUserPolicyRequest {
  public ?policyNameType $policy_name;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'policy_name' => ?policyNameType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->policy_name = $s['policy_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class GetUserPolicyResponse {
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class GetUserRequest {
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->user_name = $s['user_name'] ?? '';
  }
}

class GetUserResponse {
  public ?User $user;

  public function __construct(shape(
    ?'user' => ?User,
  ) $s = shape()) {
    $this->user = $s['user'] ?? null;
  }
}

class Group {
  public ?arnType $arn;
  public ?dateType $create_date;
  public ?idType $group_id;
  public ?groupNameType $group_name;
  public ?pathType $path;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'create_date' => ?dateType,
    ?'group_id' => ?idType,
    ?'group_name' => ?groupNameType,
    ?'path' => ?pathType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->path = $s['path'] ?? '';
  }
}

class GroupDetail {
  public ?arnType $arn;
  public ?attachedPoliciesListType $attached_managed_policies;
  public ?dateType $create_date;
  public ?idType $group_id;
  public ?groupNameType $group_name;
  public ?policyDetailListType $group_policy_list;
  public ?pathType $path;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'attached_managed_policies' => ?attachedPoliciesListType,
    ?'create_date' => ?dateType,
    ?'group_id' => ?idType,
    ?'group_name' => ?groupNameType,
    ?'group_policy_list' => ?policyDetailListType,
    ?'path' => ?pathType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attached_managed_policies = $s['attached_managed_policies'] ?? vec[];
    $this->create_date = $s['create_date'] ?? 0;
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->group_policy_list = $s['group_policy_list'] ?? vec[];
    $this->path = $s['path'] ?? '';
  }
}

class InstanceProfile {
  public ?arnType $arn;
  public ?dateType $create_date;
  public ?idType $instance_profile_id;
  public ?instanceProfileNameType $instance_profile_name;
  public ?pathType $path;
  public ?roleListType $roles;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'create_date' => ?dateType,
    ?'instance_profile_id' => ?idType,
    ?'instance_profile_name' => ?instanceProfileNameType,
    ?'path' => ?pathType,
    ?'roles' => ?roleListType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->instance_profile_id = $s['instance_profile_id'] ?? '';
    $this->instance_profile_name = $s['instance_profile_name'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->roles = $s['roles'] ?? vec[];
  }
}

class InvalidAuthenticationCodeException {
  public ?invalidAuthenticationCodeMessage $message;

  public function __construct(shape(
    ?'message' => ?invalidAuthenticationCodeMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidCertificateException {
  public ?invalidCertificateMessage $message;

  public function __construct(shape(
    ?'message' => ?invalidCertificateMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidInputException {
  public ?invalidInputMessage $message;

  public function __construct(shape(
    ?'message' => ?invalidInputMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidPublicKeyException {
  public ?invalidPublicKeyMessage $message;

  public function __construct(shape(
    ?'message' => ?invalidPublicKeyMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidUserTypeException {
  public ?invalidUserTypeMessage $message;

  public function __construct(shape(
    ?'message' => ?invalidUserTypeMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class KeyPairMismatchException {
  public ?keyPairMismatchMessage $message;

  public function __construct(shape(
    ?'message' => ?keyPairMismatchMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public ?limitExceededMessage $message;

  public function __construct(shape(
    ?'message' => ?limitExceededMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type LineNumber = int;

class ListAccessKeysRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListAccessKeysResponse {
  public ?accessKeyMetadataListType $access_key_metadata;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'access_key_metadata' => ?accessKeyMetadataListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->access_key_metadata = $s['access_key_metadata'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListAccountAliasesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListAccountAliasesResponse {
  public ?accountAliasListType $account_aliases;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'account_aliases' => ?accountAliasListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->account_aliases = $s['account_aliases'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListAttachedGroupPoliciesRequest {
  public ?groupNameType $group_name;
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?policyPathType $path_prefix;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?policyPathType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
  }
}

class ListAttachedGroupPoliciesResponse {
  public ?attachedPoliciesListType $attached_policies;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'attached_policies' => ?attachedPoliciesListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->attached_policies = $s['attached_policies'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListAttachedRolePoliciesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?policyPathType $path_prefix;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?policyPathType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class ListAttachedRolePoliciesResponse {
  public ?attachedPoliciesListType $attached_policies;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'attached_policies' => ?attachedPoliciesListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->attached_policies = $s['attached_policies'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListAttachedUserPoliciesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?policyPathType $path_prefix;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?policyPathType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListAttachedUserPoliciesResponse {
  public ?attachedPoliciesListType $attached_policies;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'attached_policies' => ?attachedPoliciesListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->attached_policies = $s['attached_policies'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListEntitiesForPolicyRequest {
  public ?EntityType $entity_filter;
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?pathType $path_prefix;
  public ?arnType $policy_arn;
  public ?PolicyUsageType $policy_usage_filter;

  public function __construct(shape(
    ?'entity_filter' => ?EntityType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?pathType,
    ?'policy_arn' => ?arnType,
    ?'policy_usage_filter' => ?PolicyUsageType,
  ) $s = shape()) {
    $this->entity_filter = $s['entity_filter'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->policy_usage_filter = $s['policy_usage_filter'] ?? '';
  }
}

class ListEntitiesForPolicyResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?PolicyGroupListType $policy_groups;
  public ?PolicyRoleListType $policy_roles;
  public ?PolicyUserListType $policy_users;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'policy_groups' => ?PolicyGroupListType,
    ?'policy_roles' => ?PolicyRoleListType,
    ?'policy_users' => ?PolicyUserListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->policy_groups = $s['policy_groups'] ?? vec[];
    $this->policy_roles = $s['policy_roles'] ?? vec[];
    $this->policy_users = $s['policy_users'] ?? vec[];
  }
}

class ListGroupPoliciesRequest {
  public ?groupNameType $group_name;
  public ?markerType $marker;
  public ?maxItemsType $max_items;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListGroupPoliciesResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?policyNameListType $policy_names;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'policy_names' => ?policyNameListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->policy_names = $s['policy_names'] ?? vec[];
  }
}

class ListGroupsForUserRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListGroupsForUserResponse {
  public ?groupListType $groups;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'groups' => ?groupListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListGroupsRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?pathPrefixType $path_prefix;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?pathPrefixType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
  }
}

class ListGroupsResponse {
  public ?groupListType $groups;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'groups' => ?groupListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListInstanceProfilesForRoleRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->role_name = $s['role_name'] ?? '';
  }
}

class ListInstanceProfilesForRoleResponse {
  public ?instanceProfileListType $instance_profiles;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'instance_profiles' => ?instanceProfileListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->instance_profiles = $s['instance_profiles'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListInstanceProfilesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?pathPrefixType $path_prefix;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?pathPrefixType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
  }
}

class ListInstanceProfilesResponse {
  public ?instanceProfileListType $instance_profiles;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'instance_profiles' => ?instanceProfileListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->instance_profiles = $s['instance_profiles'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListMFADevicesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListMFADevicesResponse {
  public ?booleanType $is_truncated;
  public ?mfaDeviceListType $mfa_devices;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'mfa_devices' => ?mfaDeviceListType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->mfa_devices = $s['mfa_devices'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class ListOpenIDConnectProvidersRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListOpenIDConnectProvidersResponse {
  public ?OpenIDConnectProviderListType $open_id_connect_provider_list;

  public function __construct(shape(
    ?'open_id_connect_provider_list' => ?OpenIDConnectProviderListType,
  ) $s = shape()) {
    $this->open_id_connect_provider_list = $s['open_id_connect_provider_list'] ?? vec[];
  }
}

class ListPoliciesGrantingServiceAccessEntry {
  public ?policyGrantingServiceAccessListType $policies;
  public ?serviceNamespaceType $service_namespace;

  public function __construct(shape(
    ?'policies' => ?policyGrantingServiceAccessListType,
    ?'service_namespace' => ?serviceNamespaceType,
  ) $s = shape()) {
    $this->policies = $s['policies'] ?? vec[];
    $this->service_namespace = $s['service_namespace'] ?? '';
  }
}

class ListPoliciesGrantingServiceAccessRequest {
  public ?arnType $arn;
  public ?markerType $marker;
  public ?serviceNamespaceListType $service_namespaces;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'marker' => ?markerType,
    ?'service_namespaces' => ?serviceNamespaceListType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->service_namespaces = $s['service_namespaces'] ?? vec[];
  }
}

class ListPoliciesGrantingServiceAccessResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?listPolicyGrantingServiceAccessResponseListType $policies_granting_service_access;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'policies_granting_service_access' => ?listPolicyGrantingServiceAccessResponseListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->policies_granting_service_access = $s['policies_granting_service_access'] ?? vec[];
  }
}

class ListPoliciesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?booleanType $only_attached;
  public ?policyPathType $path_prefix;
  public ?PolicyUsageType $policy_usage_filter;
  public ?policyScopeType $scope;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'only_attached' => ?booleanType,
    ?'path_prefix' => ?policyPathType,
    ?'policy_usage_filter' => ?PolicyUsageType,
    ?'scope' => ?policyScopeType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->only_attached = $s['only_attached'] ?? false;
    $this->path_prefix = $s['path_prefix'] ?? '';
    $this->policy_usage_filter = $s['policy_usage_filter'] ?? '';
    $this->scope = $s['scope'] ?? '';
  }
}

class ListPoliciesResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?policyListType $policies;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'policies' => ?policyListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->policies = $s['policies'] ?? vec[];
  }
}

class ListPolicyVersionsRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?arnType $policy_arn;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'policy_arn' => ?arnType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->policy_arn = $s['policy_arn'] ?? '';
  }
}

class ListPolicyVersionsResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?policyDocumentVersionListType $versions;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'versions' => ?policyDocumentVersionListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class ListRolePoliciesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->role_name = $s['role_name'] ?? '';
  }
}

class ListRolePoliciesResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?policyNameListType $policy_names;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'policy_names' => ?policyNameListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->policy_names = $s['policy_names'] ?? vec[];
  }
}

class ListRoleTagsRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->role_name = $s['role_name'] ?? '';
  }
}

class ListRoleTagsResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?tagListType $tags;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'tags' => ?tagListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListRolesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?pathPrefixType $path_prefix;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?pathPrefixType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
  }
}

class ListRolesResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?roleListType $roles;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'roles' => ?roleListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->roles = $s['roles'] ?? vec[];
  }
}

class ListSAMLProvidersRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListSAMLProvidersResponse {
  public ?SAMLProviderListType $saml_provider_list;

  public function __construct(shape(
    ?'saml_provider_list' => ?SAMLProviderListType,
  ) $s = shape()) {
    $this->saml_provider_list = $s['saml_provider_list'] ?? vec[];
  }
}

class ListSSHPublicKeysRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListSSHPublicKeysResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?SSHPublicKeyListType $ssh_public_keys;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'ssh_public_keys' => ?SSHPublicKeyListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->ssh_public_keys = $s['ssh_public_keys'] ?? vec[];
  }
}

class ListServerCertificatesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?pathPrefixType $path_prefix;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?pathPrefixType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
  }
}

class ListServerCertificatesResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?serverCertificateMetadataListType $server_certificate_metadata_list;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'server_certificate_metadata_list' => ?serverCertificateMetadataListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->server_certificate_metadata_list = $s['server_certificate_metadata_list'] ?? vec[];
  }
}

class ListServiceSpecificCredentialsRequest {
  public ?serviceName $service_name;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'service_name' => ?serviceName,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->service_name = $s['service_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListServiceSpecificCredentialsResponse {
  public ?ServiceSpecificCredentialsListType $service_specific_credentials;

  public function __construct(shape(
    ?'service_specific_credentials' => ?ServiceSpecificCredentialsListType,
  ) $s = shape()) {
    $this->service_specific_credentials = $s['service_specific_credentials'] ?? vec[];
  }
}

class ListSigningCertificatesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListSigningCertificatesResponse {
  public ?certificateListType $certificates;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'certificates' => ?certificateListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->certificates = $s['certificates'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListUserPoliciesRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListUserPoliciesResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?policyNameListType $policy_names;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'policy_names' => ?policyNameListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->policy_names = $s['policy_names'] ?? vec[];
  }
}

class ListUserTagsRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ListUserTagsResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?tagListType $tags;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'tags' => ?tagListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListUsersRequest {
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?pathPrefixType $path_prefix;

  public function __construct(shape(
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'path_prefix' => ?pathPrefixType,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->path_prefix = $s['path_prefix'] ?? '';
  }
}

class ListUsersResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?userListType $users;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'users' => ?userListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->users = $s['users'] ?? vec[];
  }
}

class ListVirtualMFADevicesRequest {
  public ?assignmentStatusType $assignment_status;
  public ?markerType $marker;
  public ?maxItemsType $max_items;

  public function __construct(shape(
    ?'assignment_status' => ?assignmentStatusType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
  ) $s = shape()) {
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListVirtualMFADevicesResponse {
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;
  public ?virtualMFADeviceListType $virtual_mfa_devices;

  public function __construct(shape(
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
    ?'virtual_mfa_devices' => ?virtualMFADeviceListType,
  ) $s = shape()) {
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
    $this->virtual_mfa_devices = $s['virtual_mfa_devices'] ?? vec[];
  }
}

class LoginProfile {
  public ?dateType $create_date;
  public ?booleanType $password_reset_required;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'create_date' => ?dateType,
    ?'password_reset_required' => ?booleanType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->create_date = $s['create_date'] ?? 0;
    $this->password_reset_required = $s['password_reset_required'] ?? false;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class MFADevice {
  public ?dateType $enable_date;
  public ?serialNumberType $serial_number;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'enable_date' => ?dateType,
    ?'serial_number' => ?serialNumberType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->enable_date = $s['enable_date'] ?? 0;
    $this->serial_number = $s['serial_number'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class MalformedCertificateException {
  public ?malformedCertificateMessage $message;

  public function __construct(shape(
    ?'message' => ?malformedCertificateMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MalformedPolicyDocumentException {
  public ?malformedPolicyDocumentMessage $message;

  public function __construct(shape(
    ?'message' => ?malformedPolicyDocumentMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ManagedPolicyDetail {
  public ?arnType $arn;
  public ?attachmentCountType $attachment_count;
  public ?dateType $create_date;
  public ?policyVersionIdType $default_version_id;
  public ?policyDescriptionType $description;
  public ?booleanType $is_attachable;
  public ?policyPathType $path;
  public ?attachmentCountType $permissions_boundary_usage_count;
  public ?idType $policy_id;
  public ?policyNameType $policy_name;
  public ?policyDocumentVersionListType $policy_version_list;
  public ?dateType $update_date;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'attachment_count' => ?attachmentCountType,
    ?'create_date' => ?dateType,
    ?'default_version_id' => ?policyVersionIdType,
    ?'description' => ?policyDescriptionType,
    ?'is_attachable' => ?booleanType,
    ?'path' => ?policyPathType,
    ?'permissions_boundary_usage_count' => ?attachmentCountType,
    ?'policy_id' => ?idType,
    ?'policy_name' => ?policyNameType,
    ?'policy_version_list' => ?policyDocumentVersionListType,
    ?'update_date' => ?dateType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attachment_count = $s['attachment_count'] ?? 0;
    $this->create_date = $s['create_date'] ?? 0;
    $this->default_version_id = $s['default_version_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_attachable = $s['is_attachable'] ?? false;
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary_usage_count = $s['permissions_boundary_usage_count'] ?? 0;
    $this->policy_id = $s['policy_id'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->policy_version_list = $s['policy_version_list'] ?? vec[];
    $this->update_date = $s['update_date'] ?? 0;
  }
}

type ManagedPolicyDetailListType = vec<ManagedPolicyDetail>;

class NoSuchEntityException {
  public ?noSuchEntityMessage $message;

  public function __construct(shape(
    ?'message' => ?noSuchEntityMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OpenIDConnectProviderListEntry {
  public ?arnType $arn;

  public function __construct(shape(
    ?'arn' => ?arnType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

type OpenIDConnectProviderListType = vec<OpenIDConnectProviderListEntry>;

type OpenIDConnectProviderUrlType = string;

class OrganizationsDecisionDetail {
  public ?booleanType $allowed_by_organizations;

  public function __construct(shape(
    ?'allowed_by_organizations' => ?booleanType,
  ) $s = shape()) {
    $this->allowed_by_organizations = $s['allowed_by_organizations'] ?? false;
  }
}

class PasswordPolicy {
  public ?booleanType $allow_users_to_change_password;
  public ?booleanType $expire_passwords;
  public ?booleanObjectType $hard_expiry;
  public ?maxPasswordAgeType $max_password_age;
  public ?minimumPasswordLengthType $minimum_password_length;
  public ?passwordReusePreventionType $password_reuse_prevention;
  public ?booleanType $require_lowercase_characters;
  public ?booleanType $require_numbers;
  public ?booleanType $require_symbols;
  public ?booleanType $require_uppercase_characters;

  public function __construct(shape(
    ?'allow_users_to_change_password' => ?booleanType,
    ?'expire_passwords' => ?booleanType,
    ?'hard_expiry' => ?booleanObjectType,
    ?'max_password_age' => ?maxPasswordAgeType,
    ?'minimum_password_length' => ?minimumPasswordLengthType,
    ?'password_reuse_prevention' => ?passwordReusePreventionType,
    ?'require_lowercase_characters' => ?booleanType,
    ?'require_numbers' => ?booleanType,
    ?'require_symbols' => ?booleanType,
    ?'require_uppercase_characters' => ?booleanType,
  ) $s = shape()) {
    $this->allow_users_to_change_password = $s['allow_users_to_change_password'] ?? false;
    $this->expire_passwords = $s['expire_passwords'] ?? false;
    $this->hard_expiry = $s['hard_expiry'] ?? false;
    $this->max_password_age = $s['max_password_age'] ?? 0;
    $this->minimum_password_length = $s['minimum_password_length'] ?? 0;
    $this->password_reuse_prevention = $s['password_reuse_prevention'] ?? 0;
    $this->require_lowercase_characters = $s['require_lowercase_characters'] ?? false;
    $this->require_numbers = $s['require_numbers'] ?? false;
    $this->require_symbols = $s['require_symbols'] ?? false;
    $this->require_uppercase_characters = $s['require_uppercase_characters'] ?? false;
  }
}

class PasswordPolicyViolationException {
  public ?passwordPolicyViolationMessage $message;

  public function __construct(shape(
    ?'message' => ?passwordPolicyViolationMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PermissionsBoundaryAttachmentType = string;

class PermissionsBoundaryDecisionDetail {
  public ?booleanType $allowed_by_permissions_boundary;

  public function __construct(shape(
    ?'allowed_by_permissions_boundary' => ?booleanType,
  ) $s = shape()) {
    $this->allowed_by_permissions_boundary = $s['allowed_by_permissions_boundary'] ?? false;
  }
}

class Policy {
  public ?arnType $arn;
  public ?attachmentCountType $attachment_count;
  public ?dateType $create_date;
  public ?policyVersionIdType $default_version_id;
  public ?policyDescriptionType $description;
  public ?booleanType $is_attachable;
  public ?policyPathType $path;
  public ?attachmentCountType $permissions_boundary_usage_count;
  public ?idType $policy_id;
  public ?policyNameType $policy_name;
  public ?dateType $update_date;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'attachment_count' => ?attachmentCountType,
    ?'create_date' => ?dateType,
    ?'default_version_id' => ?policyVersionIdType,
    ?'description' => ?policyDescriptionType,
    ?'is_attachable' => ?booleanType,
    ?'path' => ?policyPathType,
    ?'permissions_boundary_usage_count' => ?attachmentCountType,
    ?'policy_id' => ?idType,
    ?'policy_name' => ?policyNameType,
    ?'update_date' => ?dateType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attachment_count = $s['attachment_count'] ?? 0;
    $this->create_date = $s['create_date'] ?? 0;
    $this->default_version_id = $s['default_version_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_attachable = $s['is_attachable'] ?? false;
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary_usage_count = $s['permissions_boundary_usage_count'] ?? 0;
    $this->policy_id = $s['policy_id'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->update_date = $s['update_date'] ?? 0;
  }
}

class PolicyDetail {
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;

  public function __construct(shape(
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
  ) $s = shape()) {
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

type PolicyEvaluationDecisionType = string;

class PolicyEvaluationException {
  public ?policyEvaluationErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?policyEvaluationErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PolicyGrantingServiceAccess {
  public ?entityNameType $entity_name;
  public ?policyOwnerEntityType $entity_type;
  public ?arnType $policy_arn;
  public ?policyNameType $policy_name;
  public ?policyType $policy_type;

  public function __construct(shape(
    ?'entity_name' => ?entityNameType,
    ?'entity_type' => ?policyOwnerEntityType,
    ?'policy_arn' => ?arnType,
    ?'policy_name' => ?policyNameType,
    ?'policy_type' => ?policyType,
  ) $s = shape()) {
    $this->entity_name = $s['entity_name'] ?? '';
    $this->entity_type = $s['entity_type'] ?? '';
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->policy_type = $s['policy_type'] ?? '';
  }
}

class PolicyGroup {
  public ?idType $group_id;
  public ?groupNameType $group_name;

  public function __construct(shape(
    ?'group_id' => ?idType,
    ?'group_name' => ?groupNameType,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type PolicyGroupListType = vec<PolicyGroup>;

type PolicyIdentifierType = string;

class PolicyNotAttachableException {
  public ?policyNotAttachableMessage $message;

  public function __construct(shape(
    ?'message' => ?policyNotAttachableMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PolicyRole {
  public ?idType $role_id;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'role_id' => ?idType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->role_id = $s['role_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

type PolicyRoleListType = vec<PolicyRole>;

type PolicySourceType = string;

type PolicyUsageType = string;

class PolicyUser {
  public ?idType $user_id;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'user_id' => ?idType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->user_id = $s['user_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type PolicyUserListType = vec<PolicyUser>;

class PolicyVersion {
  public ?dateType $create_date;
  public ?policyDocumentType $document;
  public ?booleanType $is_default_version;
  public ?policyVersionIdType $version_id;

  public function __construct(shape(
    ?'create_date' => ?dateType,
    ?'document' => ?policyDocumentType,
    ?'is_default_version' => ?booleanType,
    ?'version_id' => ?policyVersionIdType,
  ) $s = shape()) {
    $this->create_date = $s['create_date'] ?? 0;
    $this->document = $s['document'] ?? '';
    $this->is_default_version = $s['is_default_version'] ?? false;
    $this->version_id = $s['version_id'] ?? '';
  }
}

class Position {
  public ?ColumnNumber $column;
  public ?LineNumber $line;

  public function __construct(shape(
    ?'column' => ?ColumnNumber,
    ?'line' => ?LineNumber,
  ) $s = shape()) {
    $this->column = $s['column'] ?? 0;
    $this->line = $s['line'] ?? 0;
  }
}

class PutGroupPolicyRequest {
  public ?groupNameType $group_name;
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

class PutRolePermissionsBoundaryRequest {
  public ?arnType $permissions_boundary;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'permissions_boundary' => ?arnType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->permissions_boundary = $s['permissions_boundary'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class PutRolePolicyRequest {
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class PutUserPermissionsBoundaryRequest {
  public ?arnType $permissions_boundary;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'permissions_boundary' => ?arnType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->permissions_boundary = $s['permissions_boundary'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class PutUserPolicyRequest {
  public ?policyDocumentType $policy_document;
  public ?policyNameType $policy_name;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'policy_document' => ?policyDocumentType,
    ?'policy_name' => ?policyNameType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->policy_document = $s['policy_document'] ?? '';
    $this->policy_name = $s['policy_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type ReasonType = string;

type RegionNameType = string;

class RemoveClientIDFromOpenIDConnectProviderRequest {
  public ?clientIDType $client_id;
  public ?arnType $open_id_connect_provider_arn;

  public function __construct(shape(
    ?'client_id' => ?clientIDType,
    ?'open_id_connect_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->open_id_connect_provider_arn = $s['open_id_connect_provider_arn'] ?? '';
  }
}

class RemoveRoleFromInstanceProfileRequest {
  public ?instanceProfileNameType $instance_profile_name;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'instance_profile_name' => ?instanceProfileNameType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $s['instance_profile_name'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class RemoveUserFromGroupRequest {
  public ?groupNameType $group_name;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type ReportContentType = string;

type ReportFormatType = string;

class ReportGenerationLimitExceededException {
  public ?reportGenerationLimitExceededMessage $message;

  public function __construct(shape(
    ?'message' => ?reportGenerationLimitExceededMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ReportStateDescriptionType = string;

type ReportStateType = string;

class ResetServiceSpecificCredentialRequest {
  public ?serviceSpecificCredentialId $service_specific_credential_id;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'service_specific_credential_id' => ?serviceSpecificCredentialId,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->service_specific_credential_id = $s['service_specific_credential_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ResetServiceSpecificCredentialResponse {
  public ?ServiceSpecificCredential $service_specific_credential;

  public function __construct(shape(
    ?'service_specific_credential' => ?ServiceSpecificCredential,
  ) $s = shape()) {
    $this->service_specific_credential = $s['service_specific_credential'] ?? null;
  }
}

type ResourceHandlingOptionType = string;

type ResourceNameListType = vec<ResourceNameType>;

type ResourceNameType = string;

class ResourceSpecificResult {
  public ?EvalDecisionDetailsType $eval_decision_details;
  public ?PolicyEvaluationDecisionType $eval_resource_decision;
  public ?ResourceNameType $eval_resource_name;
  public ?StatementListType $matched_statements;
  public ?ContextKeyNamesResultListType $missing_context_values;
  public ?PermissionsBoundaryDecisionDetail $permissions_boundary_decision_detail;

  public function __construct(shape(
    ?'eval_decision_details' => ?EvalDecisionDetailsType,
    ?'eval_resource_decision' => ?PolicyEvaluationDecisionType,
    ?'eval_resource_name' => ?ResourceNameType,
    ?'matched_statements' => ?StatementListType,
    ?'missing_context_values' => ?ContextKeyNamesResultListType,
    ?'permissions_boundary_decision_detail' => ?PermissionsBoundaryDecisionDetail,
  ) $s = shape()) {
    $this->eval_decision_details = $s['eval_decision_details'] ?? dict[];
    $this->eval_resource_decision = $s['eval_resource_decision'] ?? '';
    $this->eval_resource_name = $s['eval_resource_name'] ?? '';
    $this->matched_statements = $s['matched_statements'] ?? vec[];
    $this->missing_context_values = $s['missing_context_values'] ?? vec[];
    $this->permissions_boundary_decision_detail = $s['permissions_boundary_decision_detail'] ?? null;
  }
}

type ResourceSpecificResultListType = vec<ResourceSpecificResult>;

class ResyncMFADeviceRequest {
  public ?authenticationCodeType $authentication_code_1;
  public ?authenticationCodeType $authentication_code_2;
  public ?serialNumberType $serial_number;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'authentication_code_1' => ?authenticationCodeType,
    ?'authentication_code_2' => ?authenticationCodeType,
    ?'serial_number' => ?serialNumberType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->authentication_code_1 = $s['authentication_code_1'] ?? '';
    $this->authentication_code_2 = $s['authentication_code_2'] ?? '';
    $this->serial_number = $s['serial_number'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class Role {
  public ?arnType $arn;
  public ?policyDocumentType $assume_role_policy_document;
  public ?dateType $create_date;
  public ?roleDescriptionType $description;
  public ?roleMaxSessionDurationType $max_session_duration;
  public ?pathType $path;
  public ?AttachedPermissionsBoundary $permissions_boundary;
  public ?idType $role_id;
  public ?RoleLastUsed $role_last_used;
  public ?roleNameType $role_name;
  public ?tagListType $tags;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'assume_role_policy_document' => ?policyDocumentType,
    ?'create_date' => ?dateType,
    ?'description' => ?roleDescriptionType,
    ?'max_session_duration' => ?roleMaxSessionDurationType,
    ?'path' => ?pathType,
    ?'permissions_boundary' => ?AttachedPermissionsBoundary,
    ?'role_id' => ?idType,
    ?'role_last_used' => ?RoleLastUsed,
    ?'role_name' => ?roleNameType,
    ?'tags' => ?tagListType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->assume_role_policy_document = $s['assume_role_policy_document'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->max_session_duration = $s['max_session_duration'] ?? 0;
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary = $s['permissions_boundary'] ?? null;
    $this->role_id = $s['role_id'] ?? '';
    $this->role_last_used = $s['role_last_used'] ?? null;
    $this->role_name = $s['role_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class RoleDetail {
  public ?arnType $arn;
  public ?policyDocumentType $assume_role_policy_document;
  public ?attachedPoliciesListType $attached_managed_policies;
  public ?dateType $create_date;
  public ?instanceProfileListType $instance_profile_list;
  public ?pathType $path;
  public ?AttachedPermissionsBoundary $permissions_boundary;
  public ?idType $role_id;
  public ?RoleLastUsed $role_last_used;
  public ?roleNameType $role_name;
  public ?policyDetailListType $role_policy_list;
  public ?tagListType $tags;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'assume_role_policy_document' => ?policyDocumentType,
    ?'attached_managed_policies' => ?attachedPoliciesListType,
    ?'create_date' => ?dateType,
    ?'instance_profile_list' => ?instanceProfileListType,
    ?'path' => ?pathType,
    ?'permissions_boundary' => ?AttachedPermissionsBoundary,
    ?'role_id' => ?idType,
    ?'role_last_used' => ?RoleLastUsed,
    ?'role_name' => ?roleNameType,
    ?'role_policy_list' => ?policyDetailListType,
    ?'tags' => ?tagListType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->assume_role_policy_document = $s['assume_role_policy_document'] ?? '';
    $this->attached_managed_policies = $s['attached_managed_policies'] ?? vec[];
    $this->create_date = $s['create_date'] ?? 0;
    $this->instance_profile_list = $s['instance_profile_list'] ?? vec[];
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary = $s['permissions_boundary'] ?? null;
    $this->role_id = $s['role_id'] ?? '';
    $this->role_last_used = $s['role_last_used'] ?? null;
    $this->role_name = $s['role_name'] ?? '';
    $this->role_policy_list = $s['role_policy_list'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class RoleLastUsed {
  public ?dateType $last_used_date;
  public ?stringType $region;

  public function __construct(shape(
    ?'last_used_date' => ?dateType,
    ?'region' => ?stringType,
  ) $s = shape()) {
    $this->last_used_date = $s['last_used_date'] ?? 0;
    $this->region = $s['region'] ?? '';
  }
}

type RoleUsageListType = vec<RoleUsageType>;

class RoleUsageType {
  public ?RegionNameType $region;
  public ?ArnListType $resources;

  public function __construct(shape(
    ?'region' => ?RegionNameType,
    ?'resources' => ?ArnListType,
  ) $s = shape()) {
    $this->region = $s['region'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
  }
}

type SAMLMetadataDocumentType = string;

class SAMLProviderListEntry {
  public ?arnType $arn;
  public ?dateType $create_date;
  public ?dateType $valid_until;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'create_date' => ?dateType,
    ?'valid_until' => ?dateType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

type SAMLProviderListType = vec<SAMLProviderListEntry>;

type SAMLProviderNameType = string;

class SSHPublicKey {
  public ?publicKeyFingerprintType $fingerprint;
  public ?publicKeyMaterialType $ssh_public_key_body;
  public ?publicKeyIdType $ssh_public_key_id;
  public ?statusType $status;
  public ?dateType $upload_date;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'fingerprint' => ?publicKeyFingerprintType,
    ?'ssh_public_key_body' => ?publicKeyMaterialType,
    ?'ssh_public_key_id' => ?publicKeyIdType,
    ?'status' => ?statusType,
    ?'upload_date' => ?dateType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->fingerprint = $s['fingerprint'] ?? '';
    $this->ssh_public_key_body = $s['ssh_public_key_body'] ?? '';
    $this->ssh_public_key_id = $s['ssh_public_key_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->upload_date = $s['upload_date'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

type SSHPublicKeyListType = vec<SSHPublicKeyMetadata>;

class SSHPublicKeyMetadata {
  public ?publicKeyIdType $ssh_public_key_id;
  public ?statusType $status;
  public ?dateType $upload_date;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'ssh_public_key_id' => ?publicKeyIdType,
    ?'status' => ?statusType,
    ?'upload_date' => ?dateType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_id = $s['ssh_public_key_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->upload_date = $s['upload_date'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ServerCertificate {
  public ?certificateBodyType $certificate_body;
  public ?certificateChainType $certificate_chain;
  public ?ServerCertificateMetadata $server_certificate_metadata;

  public function __construct(shape(
    ?'certificate_body' => ?certificateBodyType,
    ?'certificate_chain' => ?certificateChainType,
    ?'server_certificate_metadata' => ?ServerCertificateMetadata,
  ) $s = shape()) {
    $this->certificate_body = $s['certificate_body'] ?? '';
    $this->certificate_chain = $s['certificate_chain'] ?? '';
    $this->server_certificate_metadata = $s['server_certificate_metadata'] ?? null;
  }
}

class ServerCertificateMetadata {
  public ?arnType $arn;
  public ?dateType $expiration;
  public ?pathType $path;
  public ?idType $server_certificate_id;
  public ?serverCertificateNameType $server_certificate_name;
  public ?dateType $upload_date;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'expiration' => ?dateType,
    ?'path' => ?pathType,
    ?'server_certificate_id' => ?idType,
    ?'server_certificate_name' => ?serverCertificateNameType,
    ?'upload_date' => ?dateType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->expiration = $s['expiration'] ?? 0;
    $this->path = $s['path'] ?? '';
    $this->server_certificate_id = $s['server_certificate_id'] ?? '';
    $this->server_certificate_name = $s['server_certificate_name'] ?? '';
    $this->upload_date = $s['upload_date'] ?? 0;
  }
}

class ServiceFailureException {
  public ?serviceFailureExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?serviceFailureExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceLastAccessed {
  public ?dateType $last_authenticated;
  public ?arnType $last_authenticated_entity;
  public ?serviceNameType $service_name;
  public ?serviceNamespaceType $service_namespace;
  public ?integerType $total_authenticated_entities;

  public function __construct(shape(
    ?'last_authenticated' => ?dateType,
    ?'last_authenticated_entity' => ?arnType,
    ?'service_name' => ?serviceNameType,
    ?'service_namespace' => ?serviceNamespaceType,
    ?'total_authenticated_entities' => ?integerType,
  ) $s = shape()) {
    $this->last_authenticated = $s['last_authenticated'] ?? 0;
    $this->last_authenticated_entity = $s['last_authenticated_entity'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_namespace = $s['service_namespace'] ?? '';
    $this->total_authenticated_entities = $s['total_authenticated_entities'] ?? 0;
  }
}

class ServiceNotSupportedException {
  public ?serviceNotSupportedMessage $message;

  public function __construct(shape(
    ?'message' => ?serviceNotSupportedMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceSpecificCredential {
  public ?dateType $create_date;
  public ?serviceName $service_name;
  public ?servicePassword $service_password;
  public ?serviceSpecificCredentialId $service_specific_credential_id;
  public ?serviceUserName $service_user_name;
  public ?statusType $status;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'create_date' => ?dateType,
    ?'service_name' => ?serviceName,
    ?'service_password' => ?servicePassword,
    ?'service_specific_credential_id' => ?serviceSpecificCredentialId,
    ?'service_user_name' => ?serviceUserName,
    ?'status' => ?statusType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->create_date = $s['create_date'] ?? 0;
    $this->service_name = $s['service_name'] ?? '';
    $this->service_password = $s['service_password'] ?? '';
    $this->service_specific_credential_id = $s['service_specific_credential_id'] ?? '';
    $this->service_user_name = $s['service_user_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class ServiceSpecificCredentialMetadata {
  public ?dateType $create_date;
  public ?serviceName $service_name;
  public ?serviceSpecificCredentialId $service_specific_credential_id;
  public ?serviceUserName $service_user_name;
  public ?statusType $status;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'create_date' => ?dateType,
    ?'service_name' => ?serviceName,
    ?'service_specific_credential_id' => ?serviceSpecificCredentialId,
    ?'service_user_name' => ?serviceUserName,
    ?'status' => ?statusType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->create_date = $s['create_date'] ?? 0;
    $this->service_name = $s['service_name'] ?? '';
    $this->service_specific_credential_id = $s['service_specific_credential_id'] ?? '';
    $this->service_user_name = $s['service_user_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

type ServiceSpecificCredentialsListType = vec<ServiceSpecificCredentialMetadata>;

type ServicesLastAccessed = vec<ServiceLastAccessed>;

class SetDefaultPolicyVersionRequest {
  public ?arnType $policy_arn;
  public ?policyVersionIdType $version_id;

  public function __construct(shape(
    ?'policy_arn' => ?arnType,
    ?'version_id' => ?policyVersionIdType,
  ) $s = shape()) {
    $this->policy_arn = $s['policy_arn'] ?? '';
    $this->version_id = $s['version_id'] ?? '';
  }
}

class SetSecurityTokenServicePreferencesRequest {
  public ?globalEndpointTokenVersion $global_endpoint_token_version;

  public function __construct(shape(
    ?'global_endpoint_token_version' => ?globalEndpointTokenVersion,
  ) $s = shape()) {
    $this->global_endpoint_token_version = $s['global_endpoint_token_version'] ?? '';
  }
}

class SigningCertificate {
  public ?certificateBodyType $certificate_body;
  public ?certificateIdType $certificate_id;
  public ?statusType $status;
  public ?dateType $upload_date;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'certificate_body' => ?certificateBodyType,
    ?'certificate_id' => ?certificateIdType,
    ?'status' => ?statusType,
    ?'upload_date' => ?dateType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->certificate_body = $s['certificate_body'] ?? '';
    $this->certificate_id = $s['certificate_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->upload_date = $s['upload_date'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class SimulateCustomPolicyRequest {
  public ?ActionNameListType $action_names;
  public ?ResourceNameType $caller_arn;
  public ?ContextEntryListType $context_entries;
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?SimulationPolicyListType $permissions_boundary_policy_input_list;
  public ?SimulationPolicyListType $policy_input_list;
  public ?ResourceNameListType $resource_arns;
  public ?ResourceHandlingOptionType $resource_handling_option;
  public ?ResourceNameType $resource_owner;
  public ?policyDocumentType $resource_policy;

  public function __construct(shape(
    ?'action_names' => ?ActionNameListType,
    ?'caller_arn' => ?ResourceNameType,
    ?'context_entries' => ?ContextEntryListType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'permissions_boundary_policy_input_list' => ?SimulationPolicyListType,
    ?'policy_input_list' => ?SimulationPolicyListType,
    ?'resource_arns' => ?ResourceNameListType,
    ?'resource_handling_option' => ?ResourceHandlingOptionType,
    ?'resource_owner' => ?ResourceNameType,
    ?'resource_policy' => ?policyDocumentType,
  ) $s = shape()) {
    $this->action_names = $s['action_names'] ?? vec[];
    $this->caller_arn = $s['caller_arn'] ?? '';
    $this->context_entries = $s['context_entries'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->permissions_boundary_policy_input_list = $s['permissions_boundary_policy_input_list'] ?? vec[];
    $this->policy_input_list = $s['policy_input_list'] ?? vec[];
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->resource_handling_option = $s['resource_handling_option'] ?? '';
    $this->resource_owner = $s['resource_owner'] ?? '';
    $this->resource_policy = $s['resource_policy'] ?? '';
  }
}

class SimulatePolicyResponse {
  public ?EvaluationResultsListType $evaluation_results;
  public ?booleanType $is_truncated;
  public ?responseMarkerType $marker;

  public function __construct(shape(
    ?'evaluation_results' => ?EvaluationResultsListType,
    ?'is_truncated' => ?booleanType,
    ?'marker' => ?responseMarkerType,
  ) $s = shape()) {
    $this->evaluation_results = $s['evaluation_results'] ?? vec[];
    $this->is_truncated = $s['is_truncated'] ?? false;
    $this->marker = $s['marker'] ?? '';
  }
}

class SimulatePrincipalPolicyRequest {
  public ?ActionNameListType $action_names;
  public ?ResourceNameType $caller_arn;
  public ?ContextEntryListType $context_entries;
  public ?markerType $marker;
  public ?maxItemsType $max_items;
  public ?SimulationPolicyListType $permissions_boundary_policy_input_list;
  public ?SimulationPolicyListType $policy_input_list;
  public ?arnType $policy_source_arn;
  public ?ResourceNameListType $resource_arns;
  public ?ResourceHandlingOptionType $resource_handling_option;
  public ?ResourceNameType $resource_owner;
  public ?policyDocumentType $resource_policy;

  public function __construct(shape(
    ?'action_names' => ?ActionNameListType,
    ?'caller_arn' => ?ResourceNameType,
    ?'context_entries' => ?ContextEntryListType,
    ?'marker' => ?markerType,
    ?'max_items' => ?maxItemsType,
    ?'permissions_boundary_policy_input_list' => ?SimulationPolicyListType,
    ?'policy_input_list' => ?SimulationPolicyListType,
    ?'policy_source_arn' => ?arnType,
    ?'resource_arns' => ?ResourceNameListType,
    ?'resource_handling_option' => ?ResourceHandlingOptionType,
    ?'resource_owner' => ?ResourceNameType,
    ?'resource_policy' => ?policyDocumentType,
  ) $s = shape()) {
    $this->action_names = $s['action_names'] ?? vec[];
    $this->caller_arn = $s['caller_arn'] ?? '';
    $this->context_entries = $s['context_entries'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->permissions_boundary_policy_input_list = $s['permissions_boundary_policy_input_list'] ?? vec[];
    $this->policy_input_list = $s['policy_input_list'] ?? vec[];
    $this->policy_source_arn = $s['policy_source_arn'] ?? '';
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->resource_handling_option = $s['resource_handling_option'] ?? '';
    $this->resource_owner = $s['resource_owner'] ?? '';
    $this->resource_policy = $s['resource_policy'] ?? '';
  }
}

type SimulationPolicyListType = vec<policyDocumentType>;

class Statement {
  public ?Position $end_position;
  public ?PolicyIdentifierType $source_policy_id;
  public ?PolicySourceType $source_policy_type;
  public ?Position $start_position;

  public function __construct(shape(
    ?'end_position' => ?Position,
    ?'source_policy_id' => ?PolicyIdentifierType,
    ?'source_policy_type' => ?PolicySourceType,
    ?'start_position' => ?Position,
  ) $s = shape()) {
    $this->end_position = $s['end_position'] ?? null;
    $this->source_policy_id = $s['source_policy_id'] ?? '';
    $this->source_policy_type = $s['source_policy_type'] ?? '';
    $this->start_position = $s['start_position'] ?? null;
  }
}

type StatementListType = vec<Statement>;

class Tag {
  public ?tagKeyType $key;
  public ?tagValueType $value;

  public function __construct(shape(
    ?'key' => ?tagKeyType,
    ?'value' => ?tagValueType,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class TagRoleRequest {
  public ?roleNameType $role_name;
  public ?tagListType $tags;

  public function __construct(shape(
    ?'role_name' => ?roleNameType,
    ?'tags' => ?tagListType,
  ) $s = shape()) {
    $this->role_name = $s['role_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagUserRequest {
  public ?tagListType $tags;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'tags' => ?tagListType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UnmodifiableEntityException {
  public ?unmodifiableEntityMessage $message;

  public function __construct(shape(
    ?'message' => ?unmodifiableEntityMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnrecognizedPublicKeyEncodingException {
  public ?unrecognizedPublicKeyEncodingMessage $message;

  public function __construct(shape(
    ?'message' => ?unrecognizedPublicKeyEncodingMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagRoleRequest {
  public ?roleNameType $role_name;
  public ?tagKeyListType $tag_keys;

  public function __construct(shape(
    ?'role_name' => ?roleNameType,
    ?'tag_keys' => ?tagKeyListType,
  ) $s = shape()) {
    $this->role_name = $s['role_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagUserRequest {
  public ?tagKeyListType $tag_keys;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'tag_keys' => ?tagKeyListType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->tag_keys = $s['tag_keys'] ?? vec[];
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UpdateAccessKeyRequest {
  public ?accessKeyIdType $access_key_id;
  public ?statusType $status;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'access_key_id' => ?accessKeyIdType,
    ?'status' => ?statusType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UpdateAccountPasswordPolicyRequest {
  public ?booleanType $allow_users_to_change_password;
  public ?booleanObjectType $hard_expiry;
  public ?maxPasswordAgeType $max_password_age;
  public ?minimumPasswordLengthType $minimum_password_length;
  public ?passwordReusePreventionType $password_reuse_prevention;
  public ?booleanType $require_lowercase_characters;
  public ?booleanType $require_numbers;
  public ?booleanType $require_symbols;
  public ?booleanType $require_uppercase_characters;

  public function __construct(shape(
    ?'allow_users_to_change_password' => ?booleanType,
    ?'hard_expiry' => ?booleanObjectType,
    ?'max_password_age' => ?maxPasswordAgeType,
    ?'minimum_password_length' => ?minimumPasswordLengthType,
    ?'password_reuse_prevention' => ?passwordReusePreventionType,
    ?'require_lowercase_characters' => ?booleanType,
    ?'require_numbers' => ?booleanType,
    ?'require_symbols' => ?booleanType,
    ?'require_uppercase_characters' => ?booleanType,
  ) $s = shape()) {
    $this->allow_users_to_change_password = $s['allow_users_to_change_password'] ?? false;
    $this->hard_expiry = $s['hard_expiry'] ?? false;
    $this->max_password_age = $s['max_password_age'] ?? 0;
    $this->minimum_password_length = $s['minimum_password_length'] ?? 0;
    $this->password_reuse_prevention = $s['password_reuse_prevention'] ?? 0;
    $this->require_lowercase_characters = $s['require_lowercase_characters'] ?? false;
    $this->require_numbers = $s['require_numbers'] ?? false;
    $this->require_symbols = $s['require_symbols'] ?? false;
    $this->require_uppercase_characters = $s['require_uppercase_characters'] ?? false;
  }
}

class UpdateAssumeRolePolicyRequest {
  public ?policyDocumentType $policy_document;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'policy_document' => ?policyDocumentType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->policy_document = $s['policy_document'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class UpdateGroupRequest {
  public ?groupNameType $group_name;
  public ?groupNameType $new_group_name;
  public ?pathType $new_path;

  public function __construct(shape(
    ?'group_name' => ?groupNameType,
    ?'new_group_name' => ?groupNameType,
    ?'new_path' => ?pathType,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->new_group_name = $s['new_group_name'] ?? '';
    $this->new_path = $s['new_path'] ?? '';
  }
}

class UpdateLoginProfileRequest {
  public ?passwordType $password;
  public ?booleanObjectType $password_reset_required;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'password' => ?passwordType,
    ?'password_reset_required' => ?booleanObjectType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->password = $s['password'] ?? '';
    $this->password_reset_required = $s['password_reset_required'] ?? false;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UpdateOpenIDConnectProviderThumbprintRequest {
  public ?arnType $open_id_connect_provider_arn;
  public ?thumbprintListType $thumbprint_list;

  public function __construct(shape(
    ?'open_id_connect_provider_arn' => ?arnType,
    ?'thumbprint_list' => ?thumbprintListType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $s['open_id_connect_provider_arn'] ?? '';
    $this->thumbprint_list = $s['thumbprint_list'] ?? vec[];
  }
}

class UpdateRoleDescriptionRequest {
  public ?roleDescriptionType $description;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'description' => ?roleDescriptionType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class UpdateRoleDescriptionResponse {
  public ?Role $role;

  public function __construct(shape(
    ?'role' => ?Role,
  ) $s = shape()) {
    $this->role = $s['role'] ?? null;
  }
}

class UpdateRoleRequest {
  public ?roleDescriptionType $description;
  public ?roleMaxSessionDurationType $max_session_duration;
  public ?roleNameType $role_name;

  public function __construct(shape(
    ?'description' => ?roleDescriptionType,
    ?'max_session_duration' => ?roleMaxSessionDurationType,
    ?'role_name' => ?roleNameType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->max_session_duration = $s['max_session_duration'] ?? 0;
    $this->role_name = $s['role_name'] ?? '';
  }
}

class UpdateRoleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSAMLProviderRequest {
  public ?SAMLMetadataDocumentType $saml_metadata_document;
  public ?arnType $saml_provider_arn;

  public function __construct(shape(
    ?'saml_metadata_document' => ?SAMLMetadataDocumentType,
    ?'saml_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->saml_metadata_document = $s['saml_metadata_document'] ?? '';
    $this->saml_provider_arn = $s['saml_provider_arn'] ?? '';
  }
}

class UpdateSAMLProviderResponse {
  public ?arnType $saml_provider_arn;

  public function __construct(shape(
    ?'saml_provider_arn' => ?arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $s['saml_provider_arn'] ?? '';
  }
}

class UpdateSSHPublicKeyRequest {
  public ?publicKeyIdType $ssh_public_key_id;
  public ?statusType $status;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'ssh_public_key_id' => ?publicKeyIdType,
    ?'status' => ?statusType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_id = $s['ssh_public_key_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UpdateServerCertificateRequest {
  public ?pathType $new_path;
  public ?serverCertificateNameType $new_server_certificate_name;
  public ?serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
    ?'new_path' => ?pathType,
    ?'new_server_certificate_name' => ?serverCertificateNameType,
    ?'server_certificate_name' => ?serverCertificateNameType,
  ) $s = shape()) {
    $this->new_path = $s['new_path'] ?? '';
    $this->new_server_certificate_name = $s['new_server_certificate_name'] ?? '';
    $this->server_certificate_name = $s['server_certificate_name'] ?? '';
  }
}

class UpdateServiceSpecificCredentialRequest {
  public ?serviceSpecificCredentialId $service_specific_credential_id;
  public ?statusType $status;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'service_specific_credential_id' => ?serviceSpecificCredentialId,
    ?'status' => ?statusType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->service_specific_credential_id = $s['service_specific_credential_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UpdateSigningCertificateRequest {
  public ?certificateIdType $certificate_id;
  public ?statusType $status;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'certificate_id' => ?certificateIdType,
    ?'status' => ?statusType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->certificate_id = $s['certificate_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UpdateUserRequest {
  public ?pathType $new_path;
  public ?userNameType $new_user_name;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'new_path' => ?pathType,
    ?'new_user_name' => ?userNameType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->new_path = $s['new_path'] ?? '';
    $this->new_user_name = $s['new_user_name'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UploadSSHPublicKeyRequest {
  public ?publicKeyMaterialType $ssh_public_key_body;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'ssh_public_key_body' => ?publicKeyMaterialType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_body = $s['ssh_public_key_body'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UploadSSHPublicKeyResponse {
  public ?SSHPublicKey $ssh_public_key;

  public function __construct(shape(
    ?'ssh_public_key' => ?SSHPublicKey,
  ) $s = shape()) {
    $this->ssh_public_key = $s['ssh_public_key'] ?? null;
  }
}

class UploadServerCertificateRequest {
  public ?certificateBodyType $certificate_body;
  public ?certificateChainType $certificate_chain;
  public ?pathType $path;
  public ?privateKeyType $private_key;
  public ?serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
    ?'certificate_body' => ?certificateBodyType,
    ?'certificate_chain' => ?certificateChainType,
    ?'path' => ?pathType,
    ?'private_key' => ?privateKeyType,
    ?'server_certificate_name' => ?serverCertificateNameType,
  ) $s = shape()) {
    $this->certificate_body = $s['certificate_body'] ?? '';
    $this->certificate_chain = $s['certificate_chain'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->private_key = $s['private_key'] ?? '';
    $this->server_certificate_name = $s['server_certificate_name'] ?? '';
  }
}

class UploadServerCertificateResponse {
  public ?ServerCertificateMetadata $server_certificate_metadata;

  public function __construct(shape(
    ?'server_certificate_metadata' => ?ServerCertificateMetadata,
  ) $s = shape()) {
    $this->server_certificate_metadata = $s['server_certificate_metadata'] ?? null;
  }
}

class UploadSigningCertificateRequest {
  public ?certificateBodyType $certificate_body;
  public ?existingUserNameType $user_name;

  public function __construct(shape(
    ?'certificate_body' => ?certificateBodyType,
    ?'user_name' => ?existingUserNameType,
  ) $s = shape()) {
    $this->certificate_body = $s['certificate_body'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UploadSigningCertificateResponse {
  public ?SigningCertificate $certificate;

  public function __construct(shape(
    ?'certificate' => ?SigningCertificate,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? null;
  }
}

class User {
  public ?arnType $arn;
  public ?dateType $create_date;
  public ?dateType $password_last_used;
  public ?pathType $path;
  public ?AttachedPermissionsBoundary $permissions_boundary;
  public ?tagListType $tags;
  public ?idType $user_id;
  public ?userNameType $user_name;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'create_date' => ?dateType,
    ?'password_last_used' => ?dateType,
    ?'path' => ?pathType,
    ?'permissions_boundary' => ?AttachedPermissionsBoundary,
    ?'tags' => ?tagListType,
    ?'user_id' => ?idType,
    ?'user_name' => ?userNameType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->password_last_used = $s['password_last_used'] ?? 0;
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary = $s['permissions_boundary'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->user_id = $s['user_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
  }
}

class UserDetail {
  public ?arnType $arn;
  public ?attachedPoliciesListType $attached_managed_policies;
  public ?dateType $create_date;
  public ?groupNameListType $group_list;
  public ?pathType $path;
  public ?AttachedPermissionsBoundary $permissions_boundary;
  public ?tagListType $tags;
  public ?idType $user_id;
  public ?userNameType $user_name;
  public ?policyDetailListType $user_policy_list;

  public function __construct(shape(
    ?'arn' => ?arnType,
    ?'attached_managed_policies' => ?attachedPoliciesListType,
    ?'create_date' => ?dateType,
    ?'group_list' => ?groupNameListType,
    ?'path' => ?pathType,
    ?'permissions_boundary' => ?AttachedPermissionsBoundary,
    ?'tags' => ?tagListType,
    ?'user_id' => ?idType,
    ?'user_name' => ?userNameType,
    ?'user_policy_list' => ?policyDetailListType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attached_managed_policies = $s['attached_managed_policies'] ?? vec[];
    $this->create_date = $s['create_date'] ?? 0;
    $this->group_list = $s['group_list'] ?? vec[];
    $this->path = $s['path'] ?? '';
    $this->permissions_boundary = $s['permissions_boundary'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->user_id = $s['user_id'] ?? '';
    $this->user_name = $s['user_name'] ?? '';
    $this->user_policy_list = $s['user_policy_list'] ?? vec[];
  }
}

class VirtualMFADevice {
  public ?BootstrapDatum $base_32_string_seed;
  public ?dateType $enable_date;
  public ?BootstrapDatum $qr_code_png;
  public ?serialNumberType $serial_number;
  public ?User $user;

  public function __construct(shape(
    ?'base_32_string_seed' => ?BootstrapDatum,
    ?'enable_date' => ?dateType,
    ?'qr_code_png' => ?BootstrapDatum,
    ?'serial_number' => ?serialNumberType,
    ?'user' => ?User,
  ) $s = shape()) {
    $this->base_32_string_seed = $s['base_32_string_seed'] ?? '';
    $this->enable_date = $s['enable_date'] ?? 0;
    $this->qr_code_png = $s['qr_code_png'] ?? '';
    $this->serial_number = $s['serial_number'] ?? '';
    $this->user = $s['user'] ?? null;
  }
}

type accessKeyIdType = string;

type accessKeyMetadataListType = vec<AccessKeyMetadata>;

type accessKeySecretType = string;

type accountAliasListType = vec<accountAliasType>;

type accountAliasType = string;

type arnType = string;

type assignmentStatusType = string;

type attachedPoliciesListType = vec<AttachedPolicy>;

type attachmentCountType = int;

type authenticationCodeType = string;

type booleanObjectType = bool;

type booleanType = bool;

type certificateBodyType = string;

type certificateChainType = string;

type certificateIdType = string;

type certificateListType = vec<SigningCertificate>;

type clientIDListType = vec<clientIDType>;

type clientIDType = string;

type credentialReportExpiredExceptionMessage = string;

type credentialReportNotPresentExceptionMessage = string;

type credentialReportNotReadyExceptionMessage = string;

type customSuffixType = string;

type dateType = int;

type deleteConflictMessage = string;

type duplicateCertificateMessage = string;

type duplicateSSHPublicKeyMessage = string;

type encodingType = string;

type entityAlreadyExistsMessage = string;

type entityDetailsListType = vec<EntityDetails>;

type entityListType = vec<EntityType>;

type entityNameType = string;

type entityTemporarilyUnmodifiableMessage = string;

type existingUserNameType = string;

type globalEndpointTokenVersion = string;

type groupDetailListType = vec<GroupDetail>;

type groupListType = vec<Group>;

type groupNameListType = vec<groupNameType>;

type groupNameType = string;

type idType = string;

type instanceProfileListType = vec<InstanceProfile>;

type instanceProfileNameType = string;

type integerType = int;

type invalidAuthenticationCodeMessage = string;

type invalidCertificateMessage = string;

type invalidInputMessage = string;

type invalidPublicKeyMessage = string;

type invalidUserTypeMessage = string;

type jobIDType = string;

type jobStatusType = string;

type keyPairMismatchMessage = string;

type limitExceededMessage = string;

type listPolicyGrantingServiceAccessResponseListType = vec<ListPoliciesGrantingServiceAccessEntry>;

type malformedCertificateMessage = string;

type malformedPolicyDocumentMessage = string;

type markerType = string;

type maxItemsType = int;

type maxPasswordAgeType = int;

type mfaDeviceListType = vec<MFADevice>;

type minimumPasswordLengthType = int;

type noSuchEntityMessage = string;

type organizationsEntityPathType = string;

type organizationsPolicyIdType = string;

type passwordPolicyViolationMessage = string;

type passwordReusePreventionType = int;

type passwordType = string;

type pathPrefixType = string;

type pathType = string;

type policyDescriptionType = string;

type policyDetailListType = vec<PolicyDetail>;

type policyDocumentType = string;

type policyDocumentVersionListType = vec<PolicyVersion>;

type policyEvaluationErrorMessage = string;

type policyGrantingServiceAccessListType = vec<PolicyGrantingServiceAccess>;

type policyListType = vec<Policy>;

type policyNameListType = vec<policyNameType>;

type policyNameType = string;

type policyNotAttachableMessage = string;

type policyOwnerEntityType = string;

type policyPathType = string;

type policyScopeType = string;

type policyType = string;

type policyVersionIdType = string;

type privateKeyType = string;

type publicKeyFingerprintType = string;

type publicKeyIdType = string;

type publicKeyMaterialType = string;

type reportGenerationLimitExceededMessage = string;

type responseMarkerType = string;

type roleDescriptionType = string;

type roleDetailListType = vec<RoleDetail>;

type roleListType = vec<Role>;

type roleMaxSessionDurationType = int;

type roleNameType = string;

type serialNumberType = string;

type serverCertificateMetadataListType = vec<ServerCertificateMetadata>;

type serverCertificateNameType = string;

type serviceFailureExceptionMessage = string;

type serviceName = string;

type serviceNameType = string;

type serviceNamespaceListType = vec<serviceNamespaceType>;

type serviceNamespaceType = string;

type serviceNotSupportedMessage = string;

type servicePassword = string;

type serviceSpecificCredentialId = string;

type serviceUserName = string;

type sortKeyType = string;

type statusType = string;

type stringType = string;

type summaryKeyType = string;

type summaryMapType = dict<summaryKeyType, summaryValueType>;

type summaryValueType = int;

type tagKeyListType = vec<tagKeyType>;

type tagKeyType = string;

type tagListType = vec<Tag>;

type tagValueType = string;

type thumbprintListType = vec<thumbprintType>;

type thumbprintType = string;

type unmodifiableEntityMessage = string;

type unrecognizedPublicKeyEncodingMessage = string;

type userDetailListType = vec<UserDetail>;

type userListType = vec<User>;

type userNameType = string;

type virtualMFADeviceListType = vec<VirtualMFADevice>;

type virtualMFADeviceName = string;

