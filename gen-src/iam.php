<?hh // strict
namespace slack\aws\iam;

interface IAM {
  public function AddClientIDToOpenIDConnectProvider(AddClientIDToOpenIDConnectProviderRequest): Awaitable<Errors\Error>;
  public function AddRoleToInstanceProfile(AddRoleToInstanceProfileRequest): Awaitable<Errors\Error>;
  public function AddUserToGroup(AddUserToGroupRequest): Awaitable<Errors\Error>;
  public function AttachGroupPolicy(AttachGroupPolicyRequest): Awaitable<Errors\Error>;
  public function AttachRolePolicy(AttachRolePolicyRequest): Awaitable<Errors\Error>;
  public function AttachUserPolicy(AttachUserPolicyRequest): Awaitable<Errors\Error>;
  public function ChangePassword(ChangePasswordRequest): Awaitable<Errors\Error>;
  public function CreateAccessKey(CreateAccessKeyRequest): Awaitable<Errors\Result<CreateAccessKeyResponse>>;
  public function CreateAccountAlias(CreateAccountAliasRequest): Awaitable<Errors\Error>;
  public function CreateGroup(CreateGroupRequest): Awaitable<Errors\Result<CreateGroupResponse>>;
  public function CreateInstanceProfile(CreateInstanceProfileRequest): Awaitable<Errors\Result<CreateInstanceProfileResponse>>;
  public function CreateLoginProfile(CreateLoginProfileRequest): Awaitable<Errors\Result<CreateLoginProfileResponse>>;
  public function CreateOpenIDConnectProvider(CreateOpenIDConnectProviderRequest): Awaitable<Errors\Result<CreateOpenIDConnectProviderResponse>>;
  public function CreatePolicy(CreatePolicyRequest): Awaitable<Errors\Result<CreatePolicyResponse>>;
  public function CreatePolicyVersion(CreatePolicyVersionRequest): Awaitable<Errors\Result<CreatePolicyVersionResponse>>;
  public function CreateRole(CreateRoleRequest): Awaitable<Errors\Result<CreateRoleResponse>>;
  public function CreateSAMLProvider(CreateSAMLProviderRequest): Awaitable<Errors\Result<CreateSAMLProviderResponse>>;
  public function CreateServiceLinkedRole(CreateServiceLinkedRoleRequest): Awaitable<Errors\Result<CreateServiceLinkedRoleResponse>>;
  public function CreateServiceSpecificCredential(CreateServiceSpecificCredentialRequest): Awaitable<Errors\Result<CreateServiceSpecificCredentialResponse>>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResponse>>;
  public function CreateVirtualMFADevice(CreateVirtualMFADeviceRequest): Awaitable<Errors\Result<CreateVirtualMFADeviceResponse>>;
  public function DeactivateMFADevice(DeactivateMFADeviceRequest): Awaitable<Errors\Error>;
  public function DeleteAccessKey(DeleteAccessKeyRequest): Awaitable<Errors\Error>;
  public function DeleteAccountAlias(DeleteAccountAliasRequest): Awaitable<Errors\Error>;
  public function DeleteAccountPasswordPolicy(): Awaitable<Errors\Error>;
  public function DeleteGroup(DeleteGroupRequest): Awaitable<Errors\Error>;
  public function DeleteGroupPolicy(DeleteGroupPolicyRequest): Awaitable<Errors\Error>;
  public function DeleteInstanceProfile(DeleteInstanceProfileRequest): Awaitable<Errors\Error>;
  public function DeleteLoginProfile(DeleteLoginProfileRequest): Awaitable<Errors\Error>;
  public function DeleteOpenIDConnectProvider(DeleteOpenIDConnectProviderRequest): Awaitable<Errors\Error>;
  public function DeletePolicy(DeletePolicyRequest): Awaitable<Errors\Error>;
  public function DeletePolicyVersion(DeletePolicyVersionRequest): Awaitable<Errors\Error>;
  public function DeleteRole(DeleteRoleRequest): Awaitable<Errors\Error>;
  public function DeleteRolePermissionsBoundary(DeleteRolePermissionsBoundaryRequest): Awaitable<Errors\Error>;
  public function DeleteRolePolicy(DeleteRolePolicyRequest): Awaitable<Errors\Error>;
  public function DeleteSAMLProvider(DeleteSAMLProviderRequest): Awaitable<Errors\Error>;
  public function DeleteSSHPublicKey(DeleteSSHPublicKeyRequest): Awaitable<Errors\Error>;
  public function DeleteServerCertificate(DeleteServerCertificateRequest): Awaitable<Errors\Error>;
  public function DeleteServiceLinkedRole(DeleteServiceLinkedRoleRequest): Awaitable<Errors\Result<DeleteServiceLinkedRoleResponse>>;
  public function DeleteServiceSpecificCredential(DeleteServiceSpecificCredentialRequest): Awaitable<Errors\Error>;
  public function DeleteSigningCertificate(DeleteSigningCertificateRequest): Awaitable<Errors\Error>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Error>;
  public function DeleteUserPermissionsBoundary(DeleteUserPermissionsBoundaryRequest): Awaitable<Errors\Error>;
  public function DeleteUserPolicy(DeleteUserPolicyRequest): Awaitable<Errors\Error>;
  public function DeleteVirtualMFADevice(DeleteVirtualMFADeviceRequest): Awaitable<Errors\Error>;
  public function DetachGroupPolicy(DetachGroupPolicyRequest): Awaitable<Errors\Error>;
  public function DetachRolePolicy(DetachRolePolicyRequest): Awaitable<Errors\Error>;
  public function DetachUserPolicy(DetachUserPolicyRequest): Awaitable<Errors\Error>;
  public function EnableMFADevice(EnableMFADeviceRequest): Awaitable<Errors\Error>;
  public function GenerateCredentialReport(): Awaitable<Errors\Result<GenerateCredentialReportResponse>>;
  public function GenerateOrganizationsAccessReport(GenerateOrganizationsAccessReportRequest): Awaitable<Errors\Result<GenerateOrganizationsAccessReportResponse>>;
  public function GenerateServiceLastAccessedDetails(GenerateServiceLastAccessedDetailsRequest): Awaitable<Errors\Result<GenerateServiceLastAccessedDetailsResponse>>;
  public function GetAccessKeyLastUsed(GetAccessKeyLastUsedRequest): Awaitable<Errors\Result<GetAccessKeyLastUsedResponse>>;
  public function GetAccountAuthorizationDetails(GetAccountAuthorizationDetailsRequest): Awaitable<Errors\Result<GetAccountAuthorizationDetailsResponse>>;
  public function GetAccountPasswordPolicy(): Awaitable<Errors\Result<GetAccountPasswordPolicyResponse>>;
  public function GetAccountSummary(): Awaitable<Errors\Result<GetAccountSummaryResponse>>;
  public function GetContextKeysForCustomPolicy(GetContextKeysForCustomPolicyRequest): Awaitable<Errors\Result<GetContextKeysForPolicyResponse>>;
  public function GetContextKeysForPrincipalPolicy(GetContextKeysForPrincipalPolicyRequest): Awaitable<Errors\Result<GetContextKeysForPolicyResponse>>;
  public function GetCredentialReport(): Awaitable<Errors\Result<GetCredentialReportResponse>>;
  public function GetGroup(GetGroupRequest): Awaitable<Errors\Result<GetGroupResponse>>;
  public function GetGroupPolicy(GetGroupPolicyRequest): Awaitable<Errors\Result<GetGroupPolicyResponse>>;
  public function GetInstanceProfile(GetInstanceProfileRequest): Awaitable<Errors\Result<GetInstanceProfileResponse>>;
  public function GetLoginProfile(GetLoginProfileRequest): Awaitable<Errors\Result<GetLoginProfileResponse>>;
  public function GetOpenIDConnectProvider(GetOpenIDConnectProviderRequest): Awaitable<Errors\Result<GetOpenIDConnectProviderResponse>>;
  public function GetOrganizationsAccessReport(GetOrganizationsAccessReportRequest): Awaitable<Errors\Result<GetOrganizationsAccessReportResponse>>;
  public function GetPolicy(GetPolicyRequest): Awaitable<Errors\Result<GetPolicyResponse>>;
  public function GetPolicyVersion(GetPolicyVersionRequest): Awaitable<Errors\Result<GetPolicyVersionResponse>>;
  public function GetRole(GetRoleRequest): Awaitable<Errors\Result<GetRoleResponse>>;
  public function GetRolePolicy(GetRolePolicyRequest): Awaitable<Errors\Result<GetRolePolicyResponse>>;
  public function GetSAMLProvider(GetSAMLProviderRequest): Awaitable<Errors\Result<GetSAMLProviderResponse>>;
  public function GetSSHPublicKey(GetSSHPublicKeyRequest): Awaitable<Errors\Result<GetSSHPublicKeyResponse>>;
  public function GetServerCertificate(GetServerCertificateRequest): Awaitable<Errors\Result<GetServerCertificateResponse>>;
  public function GetServiceLastAccessedDetails(GetServiceLastAccessedDetailsRequest): Awaitable<Errors\Result<GetServiceLastAccessedDetailsResponse>>;
  public function GetServiceLastAccessedDetailsWithEntities(GetServiceLastAccessedDetailsWithEntitiesRequest): Awaitable<Errors\Result<GetServiceLastAccessedDetailsWithEntitiesResponse>>;
  public function GetServiceLinkedRoleDeletionStatus(GetServiceLinkedRoleDeletionStatusRequest): Awaitable<Errors\Result<GetServiceLinkedRoleDeletionStatusResponse>>;
  public function GetUser(GetUserRequest): Awaitable<Errors\Result<GetUserResponse>>;
  public function GetUserPolicy(GetUserPolicyRequest): Awaitable<Errors\Result<GetUserPolicyResponse>>;
  public function ListAccessKeys(ListAccessKeysRequest): Awaitable<Errors\Result<ListAccessKeysResponse>>;
  public function ListAccountAliases(ListAccountAliasesRequest): Awaitable<Errors\Result<ListAccountAliasesResponse>>;
  public function ListAttachedGroupPolicies(ListAttachedGroupPoliciesRequest): Awaitable<Errors\Result<ListAttachedGroupPoliciesResponse>>;
  public function ListAttachedRolePolicies(ListAttachedRolePoliciesRequest): Awaitable<Errors\Result<ListAttachedRolePoliciesResponse>>;
  public function ListAttachedUserPolicies(ListAttachedUserPoliciesRequest): Awaitable<Errors\Result<ListAttachedUserPoliciesResponse>>;
  public function ListEntitiesForPolicy(ListEntitiesForPolicyRequest): Awaitable<Errors\Result<ListEntitiesForPolicyResponse>>;
  public function ListGroupPolicies(ListGroupPoliciesRequest): Awaitable<Errors\Result<ListGroupPoliciesResponse>>;
  public function ListGroups(ListGroupsRequest): Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ListGroupsForUser(ListGroupsForUserRequest): Awaitable<Errors\Result<ListGroupsForUserResponse>>;
  public function ListInstanceProfiles(ListInstanceProfilesRequest): Awaitable<Errors\Result<ListInstanceProfilesResponse>>;
  public function ListInstanceProfilesForRole(ListInstanceProfilesForRoleRequest): Awaitable<Errors\Result<ListInstanceProfilesForRoleResponse>>;
  public function ListMFADevices(ListMFADevicesRequest): Awaitable<Errors\Result<ListMFADevicesResponse>>;
  public function ListOpenIDConnectProviders(ListOpenIDConnectProvidersRequest): Awaitable<Errors\Result<ListOpenIDConnectProvidersResponse>>;
  public function ListPolicies(ListPoliciesRequest): Awaitable<Errors\Result<ListPoliciesResponse>>;
  public function ListPoliciesGrantingServiceAccess(ListPoliciesGrantingServiceAccessRequest): Awaitable<Errors\Result<ListPoliciesGrantingServiceAccessResponse>>;
  public function ListPolicyVersions(ListPolicyVersionsRequest): Awaitable<Errors\Result<ListPolicyVersionsResponse>>;
  public function ListRolePolicies(ListRolePoliciesRequest): Awaitable<Errors\Result<ListRolePoliciesResponse>>;
  public function ListRoleTags(ListRoleTagsRequest): Awaitable<Errors\Result<ListRoleTagsResponse>>;
  public function ListRoles(ListRolesRequest): Awaitable<Errors\Result<ListRolesResponse>>;
  public function ListSAMLProviders(ListSAMLProvidersRequest): Awaitable<Errors\Result<ListSAMLProvidersResponse>>;
  public function ListSSHPublicKeys(ListSSHPublicKeysRequest): Awaitable<Errors\Result<ListSSHPublicKeysResponse>>;
  public function ListServerCertificates(ListServerCertificatesRequest): Awaitable<Errors\Result<ListServerCertificatesResponse>>;
  public function ListServiceSpecificCredentials(ListServiceSpecificCredentialsRequest): Awaitable<Errors\Result<ListServiceSpecificCredentialsResponse>>;
  public function ListSigningCertificates(ListSigningCertificatesRequest): Awaitable<Errors\Result<ListSigningCertificatesResponse>>;
  public function ListUserPolicies(ListUserPoliciesRequest): Awaitable<Errors\Result<ListUserPoliciesResponse>>;
  public function ListUserTags(ListUserTagsRequest): Awaitable<Errors\Result<ListUserTagsResponse>>;
  public function ListUsers(ListUsersRequest): Awaitable<Errors\Result<ListUsersResponse>>;
  public function ListVirtualMFADevices(ListVirtualMFADevicesRequest): Awaitable<Errors\Result<ListVirtualMFADevicesResponse>>;
  public function PutGroupPolicy(PutGroupPolicyRequest): Awaitable<Errors\Error>;
  public function PutRolePermissionsBoundary(PutRolePermissionsBoundaryRequest): Awaitable<Errors\Error>;
  public function PutRolePolicy(PutRolePolicyRequest): Awaitable<Errors\Error>;
  public function PutUserPermissionsBoundary(PutUserPermissionsBoundaryRequest): Awaitable<Errors\Error>;
  public function PutUserPolicy(PutUserPolicyRequest): Awaitable<Errors\Error>;
  public function RemoveClientIDFromOpenIDConnectProvider(RemoveClientIDFromOpenIDConnectProviderRequest): Awaitable<Errors\Error>;
  public function RemoveRoleFromInstanceProfile(RemoveRoleFromInstanceProfileRequest): Awaitable<Errors\Error>;
  public function RemoveUserFromGroup(RemoveUserFromGroupRequest): Awaitable<Errors\Error>;
  public function ResetServiceSpecificCredential(ResetServiceSpecificCredentialRequest): Awaitable<Errors\Result<ResetServiceSpecificCredentialResponse>>;
  public function ResyncMFADevice(ResyncMFADeviceRequest): Awaitable<Errors\Error>;
  public function SetDefaultPolicyVersion(SetDefaultPolicyVersionRequest): Awaitable<Errors\Error>;
  public function SetSecurityTokenServicePreferences(SetSecurityTokenServicePreferencesRequest): Awaitable<Errors\Error>;
  public function SimulateCustomPolicy(SimulateCustomPolicyRequest): Awaitable<Errors\Result<SimulatePolicyResponse>>;
  public function SimulatePrincipalPolicy(SimulatePrincipalPolicyRequest): Awaitable<Errors\Result<SimulatePolicyResponse>>;
  public function TagRole(TagRoleRequest): Awaitable<Errors\Error>;
  public function TagUser(TagUserRequest): Awaitable<Errors\Error>;
  public function UntagRole(UntagRoleRequest): Awaitable<Errors\Error>;
  public function UntagUser(UntagUserRequest): Awaitable<Errors\Error>;
  public function UpdateAccessKey(UpdateAccessKeyRequest): Awaitable<Errors\Error>;
  public function UpdateAccountPasswordPolicy(UpdateAccountPasswordPolicyRequest): Awaitable<Errors\Error>;
  public function UpdateAssumeRolePolicy(UpdateAssumeRolePolicyRequest): Awaitable<Errors\Error>;
  public function UpdateGroup(UpdateGroupRequest): Awaitable<Errors\Error>;
  public function UpdateLoginProfile(UpdateLoginProfileRequest): Awaitable<Errors\Error>;
  public function UpdateOpenIDConnectProviderThumbprint(UpdateOpenIDConnectProviderThumbprintRequest): Awaitable<Errors\Error>;
  public function UpdateRole(UpdateRoleRequest): Awaitable<Errors\Result<UpdateRoleResponse>>;
  public function UpdateRoleDescription(UpdateRoleDescriptionRequest): Awaitable<Errors\Result<UpdateRoleDescriptionResponse>>;
  public function UpdateSAMLProvider(UpdateSAMLProviderRequest): Awaitable<Errors\Result<UpdateSAMLProviderResponse>>;
  public function UpdateSSHPublicKey(UpdateSSHPublicKeyRequest): Awaitable<Errors\Error>;
  public function UpdateServerCertificate(UpdateServerCertificateRequest): Awaitable<Errors\Error>;
  public function UpdateServiceSpecificCredential(UpdateServiceSpecificCredentialRequest): Awaitable<Errors\Error>;
  public function UpdateSigningCertificate(UpdateSigningCertificateRequest): Awaitable<Errors\Error>;
  public function UpdateUser(UpdateUserRequest): Awaitable<Errors\Error>;
  public function UploadSSHPublicKey(UploadSSHPublicKeyRequest): Awaitable<Errors\Result<UploadSSHPublicKeyResponse>>;
  public function UploadServerCertificate(UploadServerCertificateRequest): Awaitable<Errors\Result<UploadServerCertificateResponse>>;
  public function UploadSigningCertificate(UploadSigningCertificateRequest): Awaitable<Errors\Result<UploadSigningCertificateResponse>>;
}

class AccessDetail {
  public organizationsEntityPathType $entity_path;
  public dateType $last_authenticated_time;
  public stringType $region;
  public serviceNameType $service_name;
  public serviceNamespaceType $service_namespace;
  public integerType $total_authenticated_entities;

  public function __construct(shape(
  ?'entity_path' => organizationsEntityPathType,
  ?'last_authenticated_time' => dateType,
  ?'region' => stringType,
  ?'service_name' => serviceNameType,
  ?'service_namespace' => serviceNamespaceType,
  ?'total_authenticated_entities' => integerType,
  ) $s = shape()) {
    $this->entity_path = $entity_path ?? "";
    $this->last_authenticated_time = $last_authenticated_time ?? 0;
    $this->region = $region ?? "";
    $this->service_name = $service_name ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->total_authenticated_entities = $total_authenticated_entities ?? 0;
  }
}

type AccessDetails = vec<AccessDetail>;

class AccessKey {
  public accessKeyIdType $access_key_id;
  public dateType $create_date;
  public accessKeySecretType $secret_access_key;
  public statusType $status;
  public userNameType $user_name;

  public function __construct(shape(
  ?'access_key_id' => accessKeyIdType,
  ?'create_date' => dateType,
  ?'secret_access_key' => accessKeySecretType,
  ?'status' => statusType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? "";
    $this->create_date = $create_date ?? 0;
    $this->secret_access_key = $secret_access_key ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class AccessKeyLastUsed {
  public dateType $last_used_date;
  public stringType $region;
  public stringType $service_name;

  public function __construct(shape(
  ?'last_used_date' => dateType,
  ?'region' => stringType,
  ?'service_name' => stringType,
  ) $s = shape()) {
    $this->last_used_date = $last_used_date ?? 0;
    $this->region = $region ?? "";
    $this->service_name = $service_name ?? "";
  }
}

class AccessKeyMetadata {
  public accessKeyIdType $access_key_id;
  public dateType $create_date;
  public statusType $status;
  public userNameType $user_name;

  public function __construct(shape(
  ?'access_key_id' => accessKeyIdType,
  ?'create_date' => dateType,
  ?'status' => statusType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? "";
    $this->create_date = $create_date ?? 0;
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type ActionNameListType = vec<ActionNameType>;

type ActionNameType = string;

class AddClientIDToOpenIDConnectProviderRequest {
  public clientIDType $client_id;
  public arnType $open_id_connect_provider_arn;

  public function __construct(shape(
  ?'client_id' => clientIDType,
  ?'open_id_connect_provider_arn' => arnType,
  ) $s = shape()) {
    $this->client_id = $client_id ?? "";
    $this->open_id_connect_provider_arn = $open_id_connect_provider_arn ?? "";
  }
}

class AddRoleToInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'instance_profile_name' => instanceProfileNameType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $instance_profile_name ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class AddUserToGroupRequest {
  public groupNameType $group_name;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type ArnListType = vec<arnType>;

class AttachGroupPolicyRequest {
  public groupNameType $group_name;
  public arnType $policy_arn;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'policy_arn' => arnType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->policy_arn = $policy_arn ?? "";
  }
}

class AttachRolePolicyRequest {
  public arnType $policy_arn;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class AttachUserPolicyRequest {
  public arnType $policy_arn;
  public userNameType $user_name;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class AttachedPermissionsBoundary {
  public arnType $permissions_boundary_arn;
  public PermissionsBoundaryAttachmentType $permissions_boundary_type;

  public function __construct(shape(
  ?'permissions_boundary_arn' => arnType,
  ?'permissions_boundary_type' => PermissionsBoundaryAttachmentType,
  ) $s = shape()) {
    $this->permissions_boundary_arn = $permissions_boundary_arn ?? "";
    $this->permissions_boundary_type = $permissions_boundary_type ?? "";
  }
}

class AttachedPolicy {
  public arnType $policy_arn;
  public policyNameType $policy_name;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'policy_name' => policyNameType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

type BootstrapDatum = string;

class ChangePasswordRequest {
  public passwordType $new_password;
  public passwordType $old_password;

  public function __construct(shape(
  ?'new_password' => passwordType,
  ?'old_password' => passwordType,
  ) $s = shape()) {
    $this->new_password = $new_password ?? "";
    $this->old_password = $old_password ?? "";
  }
}

type ColumnNumber = int;

class ConcurrentModificationException {
  public ConcurrentModificationMessage $message;

  public function __construct(shape(
  ?'message' => ConcurrentModificationMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ConcurrentModificationMessage = string;

class ContextEntry {
  public ContextKeyNameType $context_key_name;
  public ContextKeyTypeEnum $context_key_type;
  public ContextKeyValueListType $context_key_values;

  public function __construct(shape(
  ?'context_key_name' => ContextKeyNameType,
  ?'context_key_type' => ContextKeyTypeEnum,
  ?'context_key_values' => ContextKeyValueListType,
  ) $s = shape()) {
    $this->context_key_name = $context_key_name ?? "";
    $this->context_key_type = $context_key_type ?? "";
    $this->context_key_values = $context_key_values ?? [];
  }
}

type ContextEntryListType = vec<ContextEntry>;

type ContextKeyNameType = string;

type ContextKeyNamesResultListType = vec<ContextKeyNameType>;

type ContextKeyTypeEnum = string;

type ContextKeyValueListType = vec<ContextKeyValueType>;

type ContextKeyValueType = string;

class CreateAccessKeyRequest {
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->user_name = $user_name ?? "";
  }
}

class CreateAccessKeyResponse {
  public AccessKey $access_key;

  public function __construct(shape(
  ?'access_key' => AccessKey,
  ) $s = shape()) {
    $this->access_key = $access_key ?? null;
  }
}

class CreateAccountAliasRequest {
  public accountAliasType $account_alias;

  public function __construct(shape(
  ?'account_alias' => accountAliasType,
  ) $s = shape()) {
    $this->account_alias = $account_alias ?? "";
  }
}

class CreateGroupRequest {
  public groupNameType $group_name;
  public pathType $path;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'path' => pathType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->path = $path ?? "";
  }
}

class CreateGroupResponse {
  public Group $group;

  public function __construct(shape(
  ?'group' => Group,
  ) $s = shape()) {
    $this->group = $group ?? null;
  }
}

class CreateInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public pathType $path;

  public function __construct(shape(
  ?'instance_profile_name' => instanceProfileNameType,
  ?'path' => pathType,
  ) $s = shape()) {
    $this->instance_profile_name = $instance_profile_name ?? "";
    $this->path = $path ?? "";
  }
}

class CreateInstanceProfileResponse {
  public InstanceProfile $instance_profile;

  public function __construct(shape(
  ?'instance_profile' => InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $instance_profile ?? null;
  }
}

class CreateLoginProfileRequest {
  public passwordType $password;
  public booleanType $password_reset_required;
  public userNameType $user_name;

  public function __construct(shape(
  ?'password' => passwordType,
  ?'password_reset_required' => booleanType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->password = $password ?? "";
    $this->password_reset_required = $password_reset_required ?? false;
    $this->user_name = $user_name ?? "";
  }
}

class CreateLoginProfileResponse {
  public LoginProfile $login_profile;

  public function __construct(shape(
  ?'login_profile' => LoginProfile,
  ) $s = shape()) {
    $this->login_profile = $login_profile ?? null;
  }
}

class CreateOpenIDConnectProviderRequest {
  public clientIDListType $client_id_list;
  public thumbprintListType $thumbprint_list;
  public OpenIDConnectProviderUrlType $url;

  public function __construct(shape(
  ?'client_id_list' => clientIDListType,
  ?'thumbprint_list' => thumbprintListType,
  ?'url' => OpenIDConnectProviderUrlType,
  ) $s = shape()) {
    $this->client_id_list = $client_id_list ?? [];
    $this->thumbprint_list = $thumbprint_list ?? [];
    $this->url = $url ?? "";
  }
}

class CreateOpenIDConnectProviderResponse {
  public arnType $open_id_connect_provider_arn;

  public function __construct(shape(
  ?'open_id_connect_provider_arn' => arnType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $open_id_connect_provider_arn ?? "";
  }
}

class CreatePolicyRequest {
  public policyDescriptionType $description;
  public policyPathType $path;
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;

  public function __construct(shape(
  ?'description' => policyDescriptionType,
  ?'path' => policyPathType,
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->path = $path ?? "";
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class CreatePolicyResponse {
  public Policy $policy;

  public function __construct(shape(
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->policy = $policy ?? null;
  }
}

class CreatePolicyVersionRequest {
  public arnType $policy_arn;
  public policyDocumentType $policy_document;
  public booleanType $set_as_default;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'policy_document' => policyDocumentType,
  ?'set_as_default' => booleanType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->policy_document = $policy_document ?? "";
    $this->set_as_default = $set_as_default ?? false;
  }
}

class CreatePolicyVersionResponse {
  public PolicyVersion $policy_version;

  public function __construct(shape(
  ?'policy_version' => PolicyVersion,
  ) $s = shape()) {
    $this->policy_version = $policy_version ?? null;
  }
}

class CreateRoleRequest {
  public policyDocumentType $assume_role_policy_document;
  public roleDescriptionType $description;
  public roleMaxSessionDurationType $max_session_duration;
  public pathType $path;
  public arnType $permissions_boundary;
  public roleNameType $role_name;
  public tagListType $tags;

  public function __construct(shape(
  ?'assume_role_policy_document' => policyDocumentType,
  ?'description' => roleDescriptionType,
  ?'max_session_duration' => roleMaxSessionDurationType,
  ?'path' => pathType,
  ?'permissions_boundary' => arnType,
  ?'role_name' => roleNameType,
  ?'tags' => tagListType,
  ) $s = shape()) {
    $this->assume_role_policy_document = $assume_role_policy_document ?? "";
    $this->description = $description ?? "";
    $this->max_session_duration = $max_session_duration ?? 0;
    $this->path = $path ?? "";
    $this->permissions_boundary = $permissions_boundary ?? "";
    $this->role_name = $role_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateRoleResponse {
  public Role $role;

  public function __construct(shape(
  ?'role' => Role,
  ) $s = shape()) {
    $this->role = $role ?? null;
  }
}

class CreateSAMLProviderRequest {
  public SAMLProviderNameType $name;
  public SAMLMetadataDocumentType $saml_metadata_document;

  public function __construct(shape(
  ?'name' => SAMLProviderNameType,
  ?'saml_metadata_document' => SAMLMetadataDocumentType,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->saml_metadata_document = $saml_metadata_document ?? "";
  }
}

class CreateSAMLProviderResponse {
  public arnType $saml_provider_arn;

  public function __construct(shape(
  ?'saml_provider_arn' => arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $saml_provider_arn ?? "";
  }
}

class CreateServiceLinkedRoleRequest {
  public groupNameType $aws_service_name;
  public customSuffixType $custom_suffix;
  public roleDescriptionType $description;

  public function __construct(shape(
  ?'aws_service_name' => groupNameType,
  ?'custom_suffix' => customSuffixType,
  ?'description' => roleDescriptionType,
  ) $s = shape()) {
    $this->aws_service_name = $aws_service_name ?? "";
    $this->custom_suffix = $custom_suffix ?? "";
    $this->description = $description ?? "";
  }
}

class CreateServiceLinkedRoleResponse {
  public Role $role;

  public function __construct(shape(
  ?'role' => Role,
  ) $s = shape()) {
    $this->role = $role ?? null;
  }
}

class CreateServiceSpecificCredentialRequest {
  public serviceName $service_name;
  public userNameType $user_name;

  public function __construct(shape(
  ?'service_name' => serviceName,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->service_name = $service_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class CreateServiceSpecificCredentialResponse {
  public ServiceSpecificCredential $service_specific_credential;

  public function __construct(shape(
  ?'service_specific_credential' => ServiceSpecificCredential,
  ) $s = shape()) {
    $this->service_specific_credential = $service_specific_credential ?? null;
  }
}

class CreateUserRequest {
  public pathType $path;
  public arnType $permissions_boundary;
  public tagListType $tags;
  public userNameType $user_name;

  public function __construct(shape(
  ?'path' => pathType,
  ?'permissions_boundary' => arnType,
  ?'tags' => tagListType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->path = $path ?? "";
    $this->permissions_boundary = $permissions_boundary ?? "";
    $this->tags = $tags ?? [];
    $this->user_name = $user_name ?? "";
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

class CreateVirtualMFADeviceRequest {
  public pathType $path;
  public virtualMFADeviceName $virtual_mfa_device_name;

  public function __construct(shape(
  ?'path' => pathType,
  ?'virtual_mfa_device_name' => virtualMFADeviceName,
  ) $s = shape()) {
    $this->path = $path ?? "";
    $this->virtual_mfa_device_name = $virtual_mfa_device_name ?? "";
  }
}

class CreateVirtualMFADeviceResponse {
  public VirtualMFADevice $virtual_mfa_device;

  public function __construct(shape(
  ?'virtual_mfa_device' => VirtualMFADevice,
  ) $s = shape()) {
    $this->virtual_mfa_device = $virtual_mfa_device ?? null;
  }
}

class CredentialReportExpiredException {
  public credentialReportExpiredExceptionMessage $message;

  public function __construct(shape(
  ?'message' => credentialReportExpiredExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CredentialReportNotPresentException {
  public credentialReportNotPresentExceptionMessage $message;

  public function __construct(shape(
  ?'message' => credentialReportNotPresentExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CredentialReportNotReadyException {
  public credentialReportNotReadyExceptionMessage $message;

  public function __construct(shape(
  ?'message' => credentialReportNotReadyExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DeactivateMFADeviceRequest {
  public serialNumberType $serial_number;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'serial_number' => serialNumberType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->serial_number = $serial_number ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteAccessKeyRequest {
  public accessKeyIdType $access_key_id;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'access_key_id' => accessKeyIdType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteAccountAliasRequest {
  public accountAliasType $account_alias;

  public function __construct(shape(
  ?'account_alias' => accountAliasType,
  ) $s = shape()) {
    $this->account_alias = $account_alias ?? "";
  }
}

class DeleteConflictException {
  public deleteConflictMessage $message;

  public function __construct(shape(
  ?'message' => deleteConflictMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DeleteGroupPolicyRequest {
  public groupNameType $group_name;
  public policyNameType $policy_name;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'policy_name' => policyNameType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class DeleteGroupRequest {
  public groupNameType $group_name;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
  }
}

class DeleteInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;

  public function __construct(shape(
  ?'instance_profile_name' => instanceProfileNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $instance_profile_name ?? "";
  }
}

class DeleteLoginProfileRequest {
  public userNameType $user_name;

  public function __construct(shape(
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->user_name = $user_name ?? "";
  }
}

class DeleteOpenIDConnectProviderRequest {
  public arnType $open_id_connect_provider_arn;

  public function __construct(shape(
  ?'open_id_connect_provider_arn' => arnType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $open_id_connect_provider_arn ?? "";
  }
}

class DeletePolicyRequest {
  public arnType $policy_arn;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
  }
}

class DeletePolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'version_id' => policyVersionIdType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class DeleteRolePermissionsBoundaryRequest {
  public roleNameType $role_name;

  public function __construct(shape(
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->role_name = $role_name ?? "";
  }
}

class DeleteRolePolicyRequest {
  public policyNameType $policy_name;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'policy_name' => policyNameType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class DeleteRoleRequest {
  public roleNameType $role_name;

  public function __construct(shape(
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->role_name = $role_name ?? "";
  }
}

class DeleteSAMLProviderRequest {
  public arnType $saml_provider_arn;

  public function __construct(shape(
  ?'saml_provider_arn' => arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $saml_provider_arn ?? "";
  }
}

class DeleteSSHPublicKeyRequest {
  public publicKeyIdType $ssh_public_key_id;
  public userNameType $user_name;

  public function __construct(shape(
  ?'ssh_public_key_id' => publicKeyIdType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteServerCertificateRequest {
  public serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
  ?'server_certificate_name' => serverCertificateNameType,
  ) $s = shape()) {
    $this->server_certificate_name = $server_certificate_name ?? "";
  }
}

class DeleteServiceLinkedRoleRequest {
  public roleNameType $role_name;

  public function __construct(shape(
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->role_name = $role_name ?? "";
  }
}

class DeleteServiceLinkedRoleResponse {
  public DeletionTaskIdType $deletion_task_id;

  public function __construct(shape(
  ?'deletion_task_id' => DeletionTaskIdType,
  ) $s = shape()) {
    $this->deletion_task_id = $deletion_task_id ?? "";
  }
}

class DeleteServiceSpecificCredentialRequest {
  public serviceSpecificCredentialId $service_specific_credential_id;
  public userNameType $user_name;

  public function __construct(shape(
  ?'service_specific_credential_id' => serviceSpecificCredentialId,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->service_specific_credential_id = $service_specific_credential_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteSigningCertificateRequest {
  public certificateIdType $certificate_id;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'certificate_id' => certificateIdType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteUserPermissionsBoundaryRequest {
  public userNameType $user_name;

  public function __construct(shape(
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->user_name = $user_name ?? "";
  }
}

class DeleteUserPolicyRequest {
  public policyNameType $policy_name;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'policy_name' => policyNameType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DeleteUserRequest {
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->user_name = $user_name ?? "";
  }
}

class DeleteVirtualMFADeviceRequest {
  public serialNumberType $serial_number;

  public function __construct(shape(
  ?'serial_number' => serialNumberType,
  ) $s = shape()) {
    $this->serial_number = $serial_number ?? "";
  }
}

class DeletionTaskFailureReasonType {
  public ReasonType $reason;
  public RoleUsageListType $role_usage_list;

  public function __construct(shape(
  ?'reason' => ReasonType,
  ?'role_usage_list' => RoleUsageListType,
  ) $s = shape()) {
    $this->reason = $reason ?? "";
    $this->role_usage_list = $role_usage_list ?? [];
  }
}

type DeletionTaskIdType = string;

type DeletionTaskStatusType = string;

class DetachGroupPolicyRequest {
  public groupNameType $group_name;
  public arnType $policy_arn;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'policy_arn' => arnType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->policy_arn = $policy_arn ?? "";
  }
}

class DetachRolePolicyRequest {
  public arnType $policy_arn;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class DetachUserPolicyRequest {
  public arnType $policy_arn;
  public userNameType $user_name;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class DuplicateCertificateException {
  public duplicateCertificateMessage $message;

  public function __construct(shape(
  ?'message' => duplicateCertificateMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DuplicateSSHPublicKeyException {
  public duplicateSSHPublicKeyMessage $message;

  public function __construct(shape(
  ?'message' => duplicateSSHPublicKeyMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class EnableMFADeviceRequest {
  public authenticationCodeType $authentication_code_1;
  public authenticationCodeType $authentication_code_2;
  public serialNumberType $serial_number;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'authentication_code_1' => authenticationCodeType,
  ?'authentication_code_2' => authenticationCodeType,
  ?'serial_number' => serialNumberType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->authentication_code_1 = $authentication_code_1 ?? "";
    $this->authentication_code_2 = $authentication_code_2 ?? "";
    $this->serial_number = $serial_number ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class EntityAlreadyExistsException {
  public entityAlreadyExistsMessage $message;

  public function __construct(shape(
  ?'message' => entityAlreadyExistsMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class EntityDetails {
  public EntityInfo $entity_info;
  public dateType $last_authenticated;

  public function __construct(shape(
  ?'entity_info' => EntityInfo,
  ?'last_authenticated' => dateType,
  ) $s = shape()) {
    $this->entity_info = $entity_info ?? null;
    $this->last_authenticated = $last_authenticated ?? 0;
  }
}

class EntityInfo {
  public arnType $arn;
  public idType $id;
  public userNameType $name;
  public pathType $path;
  public policyOwnerEntityType $type;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'id' => idType,
  ?'name' => userNameType,
  ?'path' => pathType,
  ?'type' => policyOwnerEntityType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->id = $id ?? "";
    $this->name = $name ?? "";
    $this->path = $path ?? "";
    $this->type = $type ?? "";
  }
}

class EntityTemporarilyUnmodifiableException {
  public entityTemporarilyUnmodifiableMessage $message;

  public function __construct(shape(
  ?'message' => entityTemporarilyUnmodifiableMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type EntityType = string;

class ErrorDetails {
  public stringType $code;
  public stringType $message;

  public function __construct(shape(
  ?'code' => stringType,
  ?'message' => stringType,
  ) $s = shape()) {
    $this->code = $code ?? "";
    $this->message = $message ?? "";
  }
}

type EvalDecisionDetailsType = dict<EvalDecisionSourceType, PolicyEvaluationDecisionType>;

type EvalDecisionSourceType = string;

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

  public function __construct(shape(
  ?'eval_action_name' => ActionNameType,
  ?'eval_decision' => PolicyEvaluationDecisionType,
  ?'eval_decision_details' => EvalDecisionDetailsType,
  ?'eval_resource_name' => ResourceNameType,
  ?'matched_statements' => StatementListType,
  ?'missing_context_values' => ContextKeyNamesResultListType,
  ?'organizations_decision_detail' => OrganizationsDecisionDetail,
  ?'permissions_boundary_decision_detail' => PermissionsBoundaryDecisionDetail,
  ?'resource_specific_results' => ResourceSpecificResultListType,
  ) $s = shape()) {
    $this->eval_action_name = $eval_action_name ?? "";
    $this->eval_decision = $eval_decision ?? "";
    $this->eval_decision_details = $eval_decision_details ?? [];
    $this->eval_resource_name = $eval_resource_name ?? "";
    $this->matched_statements = $matched_statements ?? [];
    $this->missing_context_values = $missing_context_values ?? [];
    $this->organizations_decision_detail = $organizations_decision_detail ?? null;
    $this->permissions_boundary_decision_detail = $permissions_boundary_decision_detail ?? null;
    $this->resource_specific_results = $resource_specific_results ?? [];
  }
}

type EvaluationResultsListType = vec<EvaluationResult>;

class GenerateCredentialReportResponse {
  public ReportStateDescriptionType $description;
  public ReportStateType $state;

  public function __construct(shape(
  ?'description' => ReportStateDescriptionType,
  ?'state' => ReportStateType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->state = $state ?? "";
  }
}

class GenerateOrganizationsAccessReportRequest {
  public organizationsEntityPathType $entity_path;
  public organizationsPolicyIdType $organizations_policy_id;

  public function __construct(shape(
  ?'entity_path' => organizationsEntityPathType,
  ?'organizations_policy_id' => organizationsPolicyIdType,
  ) $s = shape()) {
    $this->entity_path = $entity_path ?? "";
    $this->organizations_policy_id = $organizations_policy_id ?? "";
  }
}

class GenerateOrganizationsAccessReportResponse {
  public jobIDType $job_id;

  public function __construct(shape(
  ?'job_id' => jobIDType,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class GenerateServiceLastAccessedDetailsRequest {
  public arnType $arn;

  public function __construct(shape(
  ?'arn' => arnType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GenerateServiceLastAccessedDetailsResponse {
  public jobIDType $job_id;

  public function __construct(shape(
  ?'job_id' => jobIDType,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
  }
}

class GetAccessKeyLastUsedRequest {
  public accessKeyIdType $access_key_id;

  public function __construct(shape(
  ?'access_key_id' => accessKeyIdType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? "";
  }
}

class GetAccessKeyLastUsedResponse {
  public AccessKeyLastUsed $access_key_last_used;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'access_key_last_used' => AccessKeyLastUsed,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->access_key_last_used = $access_key_last_used ?? null;
    $this->user_name = $user_name ?? "";
  }
}

class GetAccountAuthorizationDetailsRequest {
  public entityListType $filter;
  public markerType $marker;
  public maxItemsType $max_items;

  public function __construct(shape(
  ?'filter' => entityListType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ) $s = shape()) {
    $this->filter = $filter ?? [];
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class GetAccountAuthorizationDetailsResponse {
  public groupDetailListType $group_detail_list;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public ManagedPolicyDetailListType $policies;
  public roleDetailListType $role_detail_list;
  public userDetailListType $user_detail_list;

  public function __construct(shape(
  ?'group_detail_list' => groupDetailListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'policies' => ManagedPolicyDetailListType,
  ?'role_detail_list' => roleDetailListType,
  ?'user_detail_list' => userDetailListType,
  ) $s = shape()) {
    $this->group_detail_list = $group_detail_list ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->policies = $policies ?? [];
    $this->role_detail_list = $role_detail_list ?? [];
    $this->user_detail_list = $user_detail_list ?? [];
  }
}

class GetAccountPasswordPolicyResponse {
  public PasswordPolicy $password_policy;

  public function __construct(shape(
  ?'password_policy' => PasswordPolicy,
  ) $s = shape()) {
    $this->password_policy = $password_policy ?? null;
  }
}

class GetAccountSummaryResponse {
  public summaryMapType $summary_map;

  public function __construct(shape(
  ?'summary_map' => summaryMapType,
  ) $s = shape()) {
    $this->summary_map = $summary_map ?? [];
  }
}

class GetContextKeysForCustomPolicyRequest {
  public SimulationPolicyListType $policy_input_list;

  public function __construct(shape(
  ?'policy_input_list' => SimulationPolicyListType,
  ) $s = shape()) {
    $this->policy_input_list = $policy_input_list ?? [];
  }
}

class GetContextKeysForPolicyResponse {
  public ContextKeyNamesResultListType $context_key_names;

  public function __construct(shape(
  ?'context_key_names' => ContextKeyNamesResultListType,
  ) $s = shape()) {
    $this->context_key_names = $context_key_names ?? [];
  }
}

class GetContextKeysForPrincipalPolicyRequest {
  public SimulationPolicyListType $policy_input_list;
  public arnType $policy_source_arn;

  public function __construct(shape(
  ?'policy_input_list' => SimulationPolicyListType,
  ?'policy_source_arn' => arnType,
  ) $s = shape()) {
    $this->policy_input_list = $policy_input_list ?? [];
    $this->policy_source_arn = $policy_source_arn ?? "";
  }
}

class GetCredentialReportResponse {
  public ReportContentType $content;
  public dateType $generated_time;
  public ReportFormatType $report_format;

  public function __construct(shape(
  ?'content' => ReportContentType,
  ?'generated_time' => dateType,
  ?'report_format' => ReportFormatType,
  ) $s = shape()) {
    $this->content = $content ?? "";
    $this->generated_time = $generated_time ?? 0;
    $this->report_format = $report_format ?? "";
  }
}

class GetGroupPolicyRequest {
  public groupNameType $group_name;
  public policyNameType $policy_name;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'policy_name' => policyNameType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class GetGroupPolicyResponse {
  public groupNameType $group_name;
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class GetGroupRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class GetGroupResponse {
  public Group $group;
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public userListType $users;

  public function __construct(shape(
  ?'group' => Group,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'users' => userListType,
  ) $s = shape()) {
    $this->group = $group ?? null;
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->users = $users ?? [];
  }
}

class GetInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;

  public function __construct(shape(
  ?'instance_profile_name' => instanceProfileNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $instance_profile_name ?? "";
  }
}

class GetInstanceProfileResponse {
  public InstanceProfile $instance_profile;

  public function __construct(shape(
  ?'instance_profile' => InstanceProfile,
  ) $s = shape()) {
    $this->instance_profile = $instance_profile ?? null;
  }
}

class GetLoginProfileRequest {
  public userNameType $user_name;

  public function __construct(shape(
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->user_name = $user_name ?? "";
  }
}

class GetLoginProfileResponse {
  public LoginProfile $login_profile;

  public function __construct(shape(
  ?'login_profile' => LoginProfile,
  ) $s = shape()) {
    $this->login_profile = $login_profile ?? null;
  }
}

class GetOpenIDConnectProviderRequest {
  public arnType $open_id_connect_provider_arn;

  public function __construct(shape(
  ?'open_id_connect_provider_arn' => arnType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $open_id_connect_provider_arn ?? "";
  }
}

class GetOpenIDConnectProviderResponse {
  public clientIDListType $client_id_list;
  public dateType $create_date;
  public thumbprintListType $thumbprint_list;
  public OpenIDConnectProviderUrlType $url;

  public function __construct(shape(
  ?'client_id_list' => clientIDListType,
  ?'create_date' => dateType,
  ?'thumbprint_list' => thumbprintListType,
  ?'url' => OpenIDConnectProviderUrlType,
  ) $s = shape()) {
    $this->client_id_list = $client_id_list ?? [];
    $this->create_date = $create_date ?? 0;
    $this->thumbprint_list = $thumbprint_list ?? [];
    $this->url = $url ?? "";
  }
}

class GetOrganizationsAccessReportRequest {
  public jobIDType $job_id;
  public markerType $marker;
  public maxItemsType $max_items;
  public sortKeyType $sort_key;

  public function __construct(shape(
  ?'job_id' => jobIDType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'sort_key' => sortKeyType,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->sort_key = $sort_key ?? "";
  }
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

  public function __construct(shape(
  ?'access_details' => AccessDetails,
  ?'error_details' => ErrorDetails,
  ?'is_truncated' => booleanType,
  ?'job_completion_date' => dateType,
  ?'job_creation_date' => dateType,
  ?'job_status' => jobStatusType,
  ?'marker' => markerType,
  ?'number_of_services_accessible' => integerType,
  ?'number_of_services_not_accessed' => integerType,
  ) $s = shape()) {
    $this->access_details = $access_details ?? [];
    $this->error_details = $error_details ?? null;
    $this->is_truncated = $is_truncated ?? false;
    $this->job_completion_date = $job_completion_date ?? 0;
    $this->job_creation_date = $job_creation_date ?? 0;
    $this->job_status = $job_status ?? "";
    $this->marker = $marker ?? "";
    $this->number_of_services_accessible = $number_of_services_accessible ?? 0;
    $this->number_of_services_not_accessed = $number_of_services_not_accessed ?? 0;
  }
}

class GetPolicyRequest {
  public arnType $policy_arn;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
  }
}

class GetPolicyResponse {
  public Policy $policy;

  public function __construct(shape(
  ?'policy' => Policy,
  ) $s = shape()) {
    $this->policy = $policy ?? null;
  }
}

class GetPolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'version_id' => policyVersionIdType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class GetPolicyVersionResponse {
  public PolicyVersion $policy_version;

  public function __construct(shape(
  ?'policy_version' => PolicyVersion,
  ) $s = shape()) {
    $this->policy_version = $policy_version ?? null;
  }
}

class GetRolePolicyRequest {
  public policyNameType $policy_name;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'policy_name' => policyNameType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class GetRolePolicyResponse {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class GetRoleRequest {
  public roleNameType $role_name;

  public function __construct(shape(
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->role_name = $role_name ?? "";
  }
}

class GetRoleResponse {
  public Role $role;

  public function __construct(shape(
  ?'role' => Role,
  ) $s = shape()) {
    $this->role = $role ?? null;
  }
}

class GetSAMLProviderRequest {
  public arnType $saml_provider_arn;

  public function __construct(shape(
  ?'saml_provider_arn' => arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $saml_provider_arn ?? "";
  }
}

class GetSAMLProviderResponse {
  public dateType $create_date;
  public SAMLMetadataDocumentType $saml_metadata_document;
  public dateType $valid_until;

  public function __construct(shape(
  ?'create_date' => dateType,
  ?'saml_metadata_document' => SAMLMetadataDocumentType,
  ?'valid_until' => dateType,
  ) $s = shape()) {
    $this->create_date = $create_date ?? 0;
    $this->saml_metadata_document = $saml_metadata_document ?? "";
    $this->valid_until = $valid_until ?? 0;
  }
}

class GetSSHPublicKeyRequest {
  public encodingType $encoding;
  public publicKeyIdType $ssh_public_key_id;
  public userNameType $user_name;

  public function __construct(shape(
  ?'encoding' => encodingType,
  ?'ssh_public_key_id' => publicKeyIdType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->encoding = $encoding ?? "";
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class GetSSHPublicKeyResponse {
  public SSHPublicKey $ssh_public_key;

  public function __construct(shape(
  ?'ssh_public_key' => SSHPublicKey,
  ) $s = shape()) {
    $this->ssh_public_key = $ssh_public_key ?? null;
  }
}

class GetServerCertificateRequest {
  public serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
  ?'server_certificate_name' => serverCertificateNameType,
  ) $s = shape()) {
    $this->server_certificate_name = $server_certificate_name ?? "";
  }
}

class GetServerCertificateResponse {
  public ServerCertificate $server_certificate;

  public function __construct(shape(
  ?'server_certificate' => ServerCertificate,
  ) $s = shape()) {
    $this->server_certificate = $server_certificate ?? null;
  }
}

class GetServiceLastAccessedDetailsRequest {
  public jobIDType $job_id;
  public markerType $marker;
  public maxItemsType $max_items;

  public function __construct(shape(
  ?'job_id' => jobIDType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class GetServiceLastAccessedDetailsResponse {
  public ErrorDetails $error;
  public booleanType $is_truncated;
  public dateType $job_completion_date;
  public dateType $job_creation_date;
  public jobStatusType $job_status;
  public responseMarkerType $marker;
  public ServicesLastAccessed $services_last_accessed;

  public function __construct(shape(
  ?'error' => ErrorDetails,
  ?'is_truncated' => booleanType,
  ?'job_completion_date' => dateType,
  ?'job_creation_date' => dateType,
  ?'job_status' => jobStatusType,
  ?'marker' => responseMarkerType,
  ?'services_last_accessed' => ServicesLastAccessed,
  ) $s = shape()) {
    $this->error = $error ?? null;
    $this->is_truncated = $is_truncated ?? false;
    $this->job_completion_date = $job_completion_date ?? 0;
    $this->job_creation_date = $job_creation_date ?? 0;
    $this->job_status = $job_status ?? "";
    $this->marker = $marker ?? "";
    $this->services_last_accessed = $services_last_accessed ?? [];
  }
}

class GetServiceLastAccessedDetailsWithEntitiesRequest {
  public jobIDType $job_id;
  public markerType $marker;
  public maxItemsType $max_items;
  public serviceNamespaceType $service_namespace;

  public function __construct(shape(
  ?'job_id' => jobIDType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'service_namespace' => serviceNamespaceType,
  ) $s = shape()) {
    $this->job_id = $job_id ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->service_namespace = $service_namespace ?? "";
  }
}

class GetServiceLastAccessedDetailsWithEntitiesResponse {
  public entityDetailsListType $entity_details_list;
  public ErrorDetails $error;
  public booleanType $is_truncated;
  public dateType $job_completion_date;
  public dateType $job_creation_date;
  public jobStatusType $job_status;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'entity_details_list' => entityDetailsListType,
  ?'error' => ErrorDetails,
  ?'is_truncated' => booleanType,
  ?'job_completion_date' => dateType,
  ?'job_creation_date' => dateType,
  ?'job_status' => jobStatusType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->entity_details_list = $entity_details_list ?? [];
    $this->error = $error ?? null;
    $this->is_truncated = $is_truncated ?? false;
    $this->job_completion_date = $job_completion_date ?? 0;
    $this->job_creation_date = $job_creation_date ?? 0;
    $this->job_status = $job_status ?? "";
    $this->marker = $marker ?? "";
  }
}

class GetServiceLinkedRoleDeletionStatusRequest {
  public DeletionTaskIdType $deletion_task_id;

  public function __construct(shape(
  ?'deletion_task_id' => DeletionTaskIdType,
  ) $s = shape()) {
    $this->deletion_task_id = $deletion_task_id ?? "";
  }
}

class GetServiceLinkedRoleDeletionStatusResponse {
  public DeletionTaskFailureReasonType $reason;
  public DeletionTaskStatusType $status;

  public function __construct(shape(
  ?'reason' => DeletionTaskFailureReasonType,
  ?'status' => DeletionTaskStatusType,
  ) $s = shape()) {
    $this->reason = $reason ?? null;
    $this->status = $status ?? "";
  }
}

class GetUserPolicyRequest {
  public policyNameType $policy_name;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'policy_name' => policyNameType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->policy_name = $policy_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class GetUserPolicyResponse {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class GetUserRequest {
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->user_name = $user_name ?? "";
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

class Group {
  public arnType $arn;
  public dateType $create_date;
  public idType $group_id;
  public groupNameType $group_name;
  public pathType $path;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'create_date' => dateType,
  ?'group_id' => idType,
  ?'group_name' => groupNameType,
  ?'path' => pathType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->group_id = $group_id ?? "";
    $this->group_name = $group_name ?? "";
    $this->path = $path ?? "";
  }
}

class GroupDetail {
  public arnType $arn;
  public attachedPoliciesListType $attached_managed_policies;
  public dateType $create_date;
  public idType $group_id;
  public groupNameType $group_name;
  public policyDetailListType $group_policy_list;
  public pathType $path;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'attached_managed_policies' => attachedPoliciesListType,
  ?'create_date' => dateType,
  ?'group_id' => idType,
  ?'group_name' => groupNameType,
  ?'group_policy_list' => policyDetailListType,
  ?'path' => pathType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->attached_managed_policies = $attached_managed_policies ?? [];
    $this->create_date = $create_date ?? 0;
    $this->group_id = $group_id ?? "";
    $this->group_name = $group_name ?? "";
    $this->group_policy_list = $group_policy_list ?? [];
    $this->path = $path ?? "";
  }
}

class InstanceProfile {
  public arnType $arn;
  public dateType $create_date;
  public idType $instance_profile_id;
  public instanceProfileNameType $instance_profile_name;
  public pathType $path;
  public roleListType $roles;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'create_date' => dateType,
  ?'instance_profile_id' => idType,
  ?'instance_profile_name' => instanceProfileNameType,
  ?'path' => pathType,
  ?'roles' => roleListType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->instance_profile_id = $instance_profile_id ?? "";
    $this->instance_profile_name = $instance_profile_name ?? "";
    $this->path = $path ?? "";
    $this->roles = $roles ?? [];
  }
}

class InvalidAuthenticationCodeException {
  public invalidAuthenticationCodeMessage $message;

  public function __construct(shape(
  ?'message' => invalidAuthenticationCodeMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidCertificateException {
  public invalidCertificateMessage $message;

  public function __construct(shape(
  ?'message' => invalidCertificateMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidInputException {
  public invalidInputMessage $message;

  public function __construct(shape(
  ?'message' => invalidInputMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidPublicKeyException {
  public invalidPublicKeyMessage $message;

  public function __construct(shape(
  ?'message' => invalidPublicKeyMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidUserTypeException {
  public invalidUserTypeMessage $message;

  public function __construct(shape(
  ?'message' => invalidUserTypeMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class KeyPairMismatchException {
  public keyPairMismatchMessage $message;

  public function __construct(shape(
  ?'message' => keyPairMismatchMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LimitExceededException {
  public limitExceededMessage $message;

  public function __construct(shape(
  ?'message' => limitExceededMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type LineNumber = int;

class ListAccessKeysRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ListAccessKeysResponse {
  public accessKeyMetadataListType $access_key_metadata;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'access_key_metadata' => accessKeyMetadataListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->access_key_metadata = $access_key_metadata ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListAccountAliasesRequest {
  public markerType $marker;
  public maxItemsType $max_items;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class ListAccountAliasesResponse {
  public accountAliasListType $account_aliases;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'account_aliases' => accountAliasListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->account_aliases = $account_aliases ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListAttachedGroupPoliciesRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;
  public policyPathType $path_prefix;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => policyPathType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
  }
}

class ListAttachedGroupPoliciesResponse {
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'attached_policies' => attachedPoliciesListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->attached_policies = $attached_policies ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListAttachedRolePoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public policyPathType $path_prefix;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => policyPathType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class ListAttachedRolePoliciesResponse {
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'attached_policies' => attachedPoliciesListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->attached_policies = $attached_policies ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListAttachedUserPoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public policyPathType $path_prefix;
  public userNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => policyPathType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class ListAttachedUserPoliciesResponse {
  public attachedPoliciesListType $attached_policies;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'attached_policies' => attachedPoliciesListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->attached_policies = $attached_policies ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListEntitiesForPolicyRequest {
  public EntityType $entity_filter;
  public markerType $marker;
  public maxItemsType $max_items;
  public pathType $path_prefix;
  public arnType $policy_arn;
  public PolicyUsageType $policy_usage_filter;

  public function __construct(shape(
  ?'entity_filter' => EntityType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => pathType,
  ?'policy_arn' => arnType,
  ?'policy_usage_filter' => PolicyUsageType,
  ) $s = shape()) {
    $this->entity_filter = $entity_filter ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
    $this->policy_arn = $policy_arn ?? "";
    $this->policy_usage_filter = $policy_usage_filter ?? "";
  }
}

class ListEntitiesForPolicyResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public PolicyGroupListType $policy_groups;
  public PolicyRoleListType $policy_roles;
  public PolicyUserListType $policy_users;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'policy_groups' => PolicyGroupListType,
  ?'policy_roles' => PolicyRoleListType,
  ?'policy_users' => PolicyUserListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->policy_groups = $policy_groups ?? [];
    $this->policy_roles = $policy_roles ?? [];
    $this->policy_users = $policy_users ?? [];
  }
}

class ListGroupPoliciesRequest {
  public groupNameType $group_name;
  public markerType $marker;
  public maxItemsType $max_items;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class ListGroupPoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyNameListType $policy_names;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'policy_names' => policyNameListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->policy_names = $policy_names ?? [];
  }
}

class ListGroupsForUserRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ListGroupsForUserResponse {
  public groupListType $groups;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'groups' => groupListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->groups = $groups ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListGroupsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => pathPrefixType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
  }
}

class ListGroupsResponse {
  public groupListType $groups;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'groups' => groupListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->groups = $groups ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListInstanceProfilesForRoleRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->role_name = $role_name ?? "";
  }
}

class ListInstanceProfilesForRoleResponse {
  public instanceProfileListType $instance_profiles;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'instance_profiles' => instanceProfileListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->instance_profiles = $instance_profiles ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListInstanceProfilesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => pathPrefixType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
  }
}

class ListInstanceProfilesResponse {
  public instanceProfileListType $instance_profiles;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'instance_profiles' => instanceProfileListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->instance_profiles = $instance_profiles ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListMFADevicesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ListMFADevicesResponse {
  public booleanType $is_truncated;
  public mfaDeviceListType $mfa_devices;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'mfa_devices' => mfaDeviceListType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->mfa_devices = $mfa_devices ?? [];
    $this->marker = $marker ?? "";
  }
}

class ListOpenIDConnectProvidersRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListOpenIDConnectProvidersResponse {
  public OpenIDConnectProviderListType $open_id_connect_provider_list;

  public function __construct(shape(
  ?'open_id_connect_provider_list' => OpenIDConnectProviderListType,
  ) $s = shape()) {
    $this->open_id_connect_provider_list = $open_id_connect_provider_list ?? [];
  }
}

class ListPoliciesGrantingServiceAccessEntry {
  public policyGrantingServiceAccessListType $policies;
  public serviceNamespaceType $service_namespace;

  public function __construct(shape(
  ?'policies' => policyGrantingServiceAccessListType,
  ?'service_namespace' => serviceNamespaceType,
  ) $s = shape()) {
    $this->policies = $policies ?? [];
    $this->service_namespace = $service_namespace ?? "";
  }
}

class ListPoliciesGrantingServiceAccessRequest {
  public arnType $arn;
  public markerType $marker;
  public serviceNamespaceListType $service_namespaces;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'marker' => markerType,
  ?'service_namespaces' => serviceNamespaceListType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->marker = $marker ?? "";
    $this->service_namespaces = $service_namespaces ?? [];
  }
}

class ListPoliciesGrantingServiceAccessResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public listPolicyGrantingServiceAccessResponseListType $policies_granting_service_access;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'policies_granting_service_access' => listPolicyGrantingServiceAccessResponseListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->policies_granting_service_access = $policies_granting_service_access ?? [];
  }
}

class ListPoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public booleanType $only_attached;
  public policyPathType $path_prefix;
  public PolicyUsageType $policy_usage_filter;
  public policyScopeType $scope;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'only_attached' => booleanType,
  ?'path_prefix' => policyPathType,
  ?'policy_usage_filter' => PolicyUsageType,
  ?'scope' => policyScopeType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->only_attached = $only_attached ?? false;
    $this->path_prefix = $path_prefix ?? "";
    $this->policy_usage_filter = $policy_usage_filter ?? "";
    $this->scope = $scope ?? "";
  }
}

class ListPoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyListType $policies;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'policies' => policyListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->policies = $policies ?? [];
  }
}

class ListPolicyVersionsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public arnType $policy_arn;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'policy_arn' => arnType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->policy_arn = $policy_arn ?? "";
  }
}

class ListPolicyVersionsResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyDocumentVersionListType $versions;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'versions' => policyDocumentVersionListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->versions = $versions ?? [];
  }
}

class ListRolePoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->role_name = $role_name ?? "";
  }
}

class ListRolePoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyNameListType $policy_names;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'policy_names' => policyNameListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->policy_names = $policy_names ?? [];
  }
}

class ListRoleTagsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->role_name = $role_name ?? "";
  }
}

class ListRoleTagsResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public tagListType $tags;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'tags' => tagListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListRolesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => pathPrefixType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
  }
}

class ListRolesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public roleListType $roles;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'roles' => roleListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->roles = $roles ?? [];
  }
}

class ListSAMLProvidersRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListSAMLProvidersResponse {
  public SAMLProviderListType $saml_provider_list;

  public function __construct(shape(
  ?'saml_provider_list' => SAMLProviderListType,
  ) $s = shape()) {
    $this->saml_provider_list = $saml_provider_list ?? [];
  }
}

class ListSSHPublicKeysRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public userNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ListSSHPublicKeysResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public SSHPublicKeyListType $ssh_public_keys;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'ssh_public_keys' => SSHPublicKeyListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->ssh_public_keys = $ssh_public_keys ?? [];
  }
}

class ListServerCertificatesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => pathPrefixType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
  }
}

class ListServerCertificatesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public serverCertificateMetadataListType $server_certificate_metadata_list;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'server_certificate_metadata_list' => serverCertificateMetadataListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->server_certificate_metadata_list = $server_certificate_metadata_list ?? [];
  }
}

class ListServiceSpecificCredentialsRequest {
  public serviceName $service_name;
  public userNameType $user_name;

  public function __construct(shape(
  ?'service_name' => serviceName,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->service_name = $service_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class ListServiceSpecificCredentialsResponse {
  public ServiceSpecificCredentialsListType $service_specific_credentials;

  public function __construct(shape(
  ?'service_specific_credentials' => ServiceSpecificCredentialsListType,
  ) $s = shape()) {
    $this->service_specific_credentials = $service_specific_credentials ?? [];
  }
}

class ListSigningCertificatesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ListSigningCertificatesResponse {
  public certificateListType $certificates;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'certificates' => certificateListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->certificates = $certificates ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
}

class ListUserPoliciesRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ListUserPoliciesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public policyNameListType $policy_names;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'policy_names' => policyNameListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->policy_names = $policy_names ?? [];
  }
}

class ListUserTagsRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ListUserTagsResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public tagListType $tags;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'tags' => tagListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->tags = $tags ?? [];
  }
}

class ListUsersRequest {
  public markerType $marker;
  public maxItemsType $max_items;
  public pathPrefixType $path_prefix;

  public function __construct(shape(
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'path_prefix' => pathPrefixType,
  ) $s = shape()) {
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->path_prefix = $path_prefix ?? "";
  }
}

class ListUsersResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public userListType $users;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'users' => userListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->users = $users ?? [];
  }
}

class ListVirtualMFADevicesRequest {
  public assignmentStatusType $assignment_status;
  public markerType $marker;
  public maxItemsType $max_items;

  public function __construct(shape(
  ?'assignment_status' => assignmentStatusType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ) $s = shape()) {
    $this->assignment_status = $assignment_status ?? "";
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
  }
}

class ListVirtualMFADevicesResponse {
  public booleanType $is_truncated;
  public responseMarkerType $marker;
  public virtualMFADeviceListType $virtual_mfa_devices;

  public function __construct(shape(
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ?'virtual_mfa_devices' => virtualMFADeviceListType,
  ) $s = shape()) {
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
    $this->virtual_mfa_devices = $virtual_mfa_devices ?? [];
  }
}

class LoginProfile {
  public dateType $create_date;
  public booleanType $password_reset_required;
  public userNameType $user_name;

  public function __construct(shape(
  ?'create_date' => dateType,
  ?'password_reset_required' => booleanType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->create_date = $create_date ?? 0;
    $this->password_reset_required = $password_reset_required ?? false;
    $this->user_name = $user_name ?? "";
  }
}

class MFADevice {
  public dateType $enable_date;
  public serialNumberType $serial_number;
  public userNameType $user_name;

  public function __construct(shape(
  ?'enable_date' => dateType,
  ?'serial_number' => serialNumberType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->enable_date = $enable_date ?? 0;
    $this->serial_number = $serial_number ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class MalformedCertificateException {
  public malformedCertificateMessage $message;

  public function __construct(shape(
  ?'message' => malformedCertificateMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class MalformedPolicyDocumentException {
  public malformedPolicyDocumentMessage $message;

  public function __construct(shape(
  ?'message' => malformedPolicyDocumentMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
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

  public function __construct(shape(
  ?'arn' => arnType,
  ?'attachment_count' => attachmentCountType,
  ?'create_date' => dateType,
  ?'default_version_id' => policyVersionIdType,
  ?'description' => policyDescriptionType,
  ?'is_attachable' => booleanType,
  ?'path' => policyPathType,
  ?'permissions_boundary_usage_count' => attachmentCountType,
  ?'policy_id' => idType,
  ?'policy_name' => policyNameType,
  ?'policy_version_list' => policyDocumentVersionListType,
  ?'update_date' => dateType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->attachment_count = $attachment_count ?? 0;
    $this->create_date = $create_date ?? 0;
    $this->default_version_id = $default_version_id ?? "";
    $this->description = $description ?? "";
    $this->is_attachable = $is_attachable ?? false;
    $this->path = $path ?? "";
    $this->permissions_boundary_usage_count = $permissions_boundary_usage_count ?? 0;
    $this->policy_id = $policy_id ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->policy_version_list = $policy_version_list ?? [];
    $this->update_date = $update_date ?? 0;
  }
}

type ManagedPolicyDetailListType = vec<ManagedPolicyDetail>;

class NoSuchEntityException {
  public noSuchEntityMessage $message;

  public function __construct(shape(
  ?'message' => noSuchEntityMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class OpenIDConnectProviderListEntry {
  public arnType $arn;

  public function __construct(shape(
  ?'arn' => arnType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

type OpenIDConnectProviderListType = vec<OpenIDConnectProviderListEntry>;

type OpenIDConnectProviderUrlType = string;

class OrganizationsDecisionDetail {
  public booleanType $allowed_by_organizations;

  public function __construct(shape(
  ?'allowed_by_organizations' => booleanType,
  ) $s = shape()) {
    $this->allowed_by_organizations = $allowed_by_organizations ?? false;
  }
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

  public function __construct(shape(
  ?'allow_users_to_change_password' => booleanType,
  ?'expire_passwords' => booleanType,
  ?'hard_expiry' => booleanObjectType,
  ?'max_password_age' => maxPasswordAgeType,
  ?'minimum_password_length' => minimumPasswordLengthType,
  ?'password_reuse_prevention' => passwordReusePreventionType,
  ?'require_lowercase_characters' => booleanType,
  ?'require_numbers' => booleanType,
  ?'require_symbols' => booleanType,
  ?'require_uppercase_characters' => booleanType,
  ) $s = shape()) {
    $this->allow_users_to_change_password = $allow_users_to_change_password ?? false;
    $this->expire_passwords = $expire_passwords ?? false;
    $this->hard_expiry = $hard_expiry ?? false;
    $this->max_password_age = $max_password_age ?? 0;
    $this->minimum_password_length = $minimum_password_length ?? 0;
    $this->password_reuse_prevention = $password_reuse_prevention ?? 0;
    $this->require_lowercase_characters = $require_lowercase_characters ?? false;
    $this->require_numbers = $require_numbers ?? false;
    $this->require_symbols = $require_symbols ?? false;
    $this->require_uppercase_characters = $require_uppercase_characters ?? false;
  }
}

class PasswordPolicyViolationException {
  public passwordPolicyViolationMessage $message;

  public function __construct(shape(
  ?'message' => passwordPolicyViolationMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PermissionsBoundaryAttachmentType = string;

class PermissionsBoundaryDecisionDetail {
  public booleanType $allowed_by_permissions_boundary;

  public function __construct(shape(
  ?'allowed_by_permissions_boundary' => booleanType,
  ) $s = shape()) {
    $this->allowed_by_permissions_boundary = $allowed_by_permissions_boundary ?? false;
  }
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

  public function __construct(shape(
  ?'arn' => arnType,
  ?'attachment_count' => attachmentCountType,
  ?'create_date' => dateType,
  ?'default_version_id' => policyVersionIdType,
  ?'description' => policyDescriptionType,
  ?'is_attachable' => booleanType,
  ?'path' => policyPathType,
  ?'permissions_boundary_usage_count' => attachmentCountType,
  ?'policy_id' => idType,
  ?'policy_name' => policyNameType,
  ?'update_date' => dateType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->attachment_count = $attachment_count ?? 0;
    $this->create_date = $create_date ?? 0;
    $this->default_version_id = $default_version_id ?? "";
    $this->description = $description ?? "";
    $this->is_attachable = $is_attachable ?? false;
    $this->path = $path ?? "";
    $this->permissions_boundary_usage_count = $permissions_boundary_usage_count ?? 0;
    $this->policy_id = $policy_id ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->update_date = $update_date ?? 0;
  }
}

class PolicyDetail {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;

  public function __construct(shape(
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

type PolicyEvaluationDecisionType = string;

class PolicyEvaluationException {
  public policyEvaluationErrorMessage $message;

  public function __construct(shape(
  ?'message' => policyEvaluationErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class PolicyGrantingServiceAccess {
  public entityNameType $entity_name;
  public policyOwnerEntityType $entity_type;
  public arnType $policy_arn;
  public policyNameType $policy_name;
  public policyType $policy_type;

  public function __construct(shape(
  ?'entity_name' => entityNameType,
  ?'entity_type' => policyOwnerEntityType,
  ?'policy_arn' => arnType,
  ?'policy_name' => policyNameType,
  ?'policy_type' => policyType,
  ) $s = shape()) {
    $this->entity_name = $entity_name ?? "";
    $this->entity_type = $entity_type ?? "";
    $this->policy_arn = $policy_arn ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->policy_type = $policy_type ?? "";
  }
}

class PolicyGroup {
  public idType $group_id;
  public groupNameType $group_name;

  public function __construct(shape(
  ?'group_id' => idType,
  ?'group_name' => groupNameType,
  ) $s = shape()) {
    $this->group_id = $group_id ?? "";
    $this->group_name = $group_name ?? "";
  }
}

type PolicyGroupListType = vec<PolicyGroup>;

type PolicyIdentifierType = string;

class PolicyNotAttachableException {
  public policyNotAttachableMessage $message;

  public function __construct(shape(
  ?'message' => policyNotAttachableMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class PolicyRole {
  public idType $role_id;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'role_id' => idType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->role_id = $role_id ?? "";
    $this->role_name = $role_name ?? "";
  }
}

type PolicyRoleListType = vec<PolicyRole>;

type PolicySourceType = string;

type PolicyUsageType = string;

class PolicyUser {
  public idType $user_id;
  public userNameType $user_name;

  public function __construct(shape(
  ?'user_id' => idType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->user_id = $user_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type PolicyUserListType = vec<PolicyUser>;

class PolicyVersion {
  public dateType $create_date;
  public policyDocumentType $document;
  public booleanType $is_default_version;
  public policyVersionIdType $version_id;

  public function __construct(shape(
  ?'create_date' => dateType,
  ?'document' => policyDocumentType,
  ?'is_default_version' => booleanType,
  ?'version_id' => policyVersionIdType,
  ) $s = shape()) {
    $this->create_date = $create_date ?? 0;
    $this->document = $document ?? "";
    $this->is_default_version = $is_default_version ?? false;
    $this->version_id = $version_id ?? "";
  }
}

class Position {
  public ColumnNumber $column;
  public LineNumber $line;

  public function __construct(shape(
  ?'column' => ColumnNumber,
  ?'line' => LineNumber,
  ) $s = shape()) {
    $this->column = $column ?? 0;
    $this->line = $line ?? 0;
  }
}

class PutGroupPolicyRequest {
  public groupNameType $group_name;
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
  }
}

class PutRolePermissionsBoundaryRequest {
  public arnType $permissions_boundary;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'permissions_boundary' => arnType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->permissions_boundary = $permissions_boundary ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class PutRolePolicyRequest {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class PutUserPermissionsBoundaryRequest {
  public arnType $permissions_boundary;
  public userNameType $user_name;

  public function __construct(shape(
  ?'permissions_boundary' => arnType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->permissions_boundary = $permissions_boundary ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class PutUserPolicyRequest {
  public policyDocumentType $policy_document;
  public policyNameType $policy_name;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'policy_document' => policyDocumentType,
  ?'policy_name' => policyNameType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? "";
    $this->policy_name = $policy_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type ReasonType = string;

type RegionNameType = string;

class RemoveClientIDFromOpenIDConnectProviderRequest {
  public clientIDType $client_id;
  public arnType $open_id_connect_provider_arn;

  public function __construct(shape(
  ?'client_id' => clientIDType,
  ?'open_id_connect_provider_arn' => arnType,
  ) $s = shape()) {
    $this->client_id = $client_id ?? "";
    $this->open_id_connect_provider_arn = $open_id_connect_provider_arn ?? "";
  }
}

class RemoveRoleFromInstanceProfileRequest {
  public instanceProfileNameType $instance_profile_name;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'instance_profile_name' => instanceProfileNameType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->instance_profile_name = $instance_profile_name ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class RemoveUserFromGroupRequest {
  public groupNameType $group_name;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type ReportContentType = string;

type ReportFormatType = string;

class ReportGenerationLimitExceededException {
  public reportGenerationLimitExceededMessage $message;

  public function __construct(shape(
  ?'message' => reportGenerationLimitExceededMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ReportStateDescriptionType = string;

type ReportStateType = string;

class ResetServiceSpecificCredentialRequest {
  public serviceSpecificCredentialId $service_specific_credential_id;
  public userNameType $user_name;

  public function __construct(shape(
  ?'service_specific_credential_id' => serviceSpecificCredentialId,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->service_specific_credential_id = $service_specific_credential_id ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class ResetServiceSpecificCredentialResponse {
  public ServiceSpecificCredential $service_specific_credential;

  public function __construct(shape(
  ?'service_specific_credential' => ServiceSpecificCredential,
  ) $s = shape()) {
    $this->service_specific_credential = $service_specific_credential ?? null;
  }
}

type ResourceHandlingOptionType = string;

type ResourceNameListType = vec<ResourceNameType>;

type ResourceNameType = string;

class ResourceSpecificResult {
  public EvalDecisionDetailsType $eval_decision_details;
  public PolicyEvaluationDecisionType $eval_resource_decision;
  public ResourceNameType $eval_resource_name;
  public StatementListType $matched_statements;
  public ContextKeyNamesResultListType $missing_context_values;
  public PermissionsBoundaryDecisionDetail $permissions_boundary_decision_detail;

  public function __construct(shape(
  ?'eval_decision_details' => EvalDecisionDetailsType,
  ?'eval_resource_decision' => PolicyEvaluationDecisionType,
  ?'eval_resource_name' => ResourceNameType,
  ?'matched_statements' => StatementListType,
  ?'missing_context_values' => ContextKeyNamesResultListType,
  ?'permissions_boundary_decision_detail' => PermissionsBoundaryDecisionDetail,
  ) $s = shape()) {
    $this->eval_decision_details = $eval_decision_details ?? [];
    $this->eval_resource_decision = $eval_resource_decision ?? "";
    $this->eval_resource_name = $eval_resource_name ?? "";
    $this->matched_statements = $matched_statements ?? [];
    $this->missing_context_values = $missing_context_values ?? [];
    $this->permissions_boundary_decision_detail = $permissions_boundary_decision_detail ?? null;
  }
}

type ResourceSpecificResultListType = vec<ResourceSpecificResult>;

class ResyncMFADeviceRequest {
  public authenticationCodeType $authentication_code_1;
  public authenticationCodeType $authentication_code_2;
  public serialNumberType $serial_number;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'authentication_code_1' => authenticationCodeType,
  ?'authentication_code_2' => authenticationCodeType,
  ?'serial_number' => serialNumberType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->authentication_code_1 = $authentication_code_1 ?? "";
    $this->authentication_code_2 = $authentication_code_2 ?? "";
    $this->serial_number = $serial_number ?? "";
    $this->user_name = $user_name ?? "";
  }
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

  public function __construct(shape(
  ?'arn' => arnType,
  ?'assume_role_policy_document' => policyDocumentType,
  ?'create_date' => dateType,
  ?'description' => roleDescriptionType,
  ?'max_session_duration' => roleMaxSessionDurationType,
  ?'path' => pathType,
  ?'permissions_boundary' => AttachedPermissionsBoundary,
  ?'role_id' => idType,
  ?'role_last_used' => RoleLastUsed,
  ?'role_name' => roleNameType,
  ?'tags' => tagListType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->assume_role_policy_document = $assume_role_policy_document ?? "";
    $this->create_date = $create_date ?? 0;
    $this->description = $description ?? "";
    $this->max_session_duration = $max_session_duration ?? 0;
    $this->path = $path ?? "";
    $this->permissions_boundary = $permissions_boundary ?? null;
    $this->role_id = $role_id ?? "";
    $this->role_last_used = $role_last_used ?? null;
    $this->role_name = $role_name ?? "";
    $this->tags = $tags ?? [];
  }
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

  public function __construct(shape(
  ?'arn' => arnType,
  ?'assume_role_policy_document' => policyDocumentType,
  ?'attached_managed_policies' => attachedPoliciesListType,
  ?'create_date' => dateType,
  ?'instance_profile_list' => instanceProfileListType,
  ?'path' => pathType,
  ?'permissions_boundary' => AttachedPermissionsBoundary,
  ?'role_id' => idType,
  ?'role_last_used' => RoleLastUsed,
  ?'role_name' => roleNameType,
  ?'role_policy_list' => policyDetailListType,
  ?'tags' => tagListType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->assume_role_policy_document = $assume_role_policy_document ?? "";
    $this->attached_managed_policies = $attached_managed_policies ?? [];
    $this->create_date = $create_date ?? 0;
    $this->instance_profile_list = $instance_profile_list ?? [];
    $this->path = $path ?? "";
    $this->permissions_boundary = $permissions_boundary ?? null;
    $this->role_id = $role_id ?? "";
    $this->role_last_used = $role_last_used ?? null;
    $this->role_name = $role_name ?? "";
    $this->role_policy_list = $role_policy_list ?? [];
    $this->tags = $tags ?? [];
  }
}

class RoleLastUsed {
  public dateType $last_used_date;
  public stringType $region;

  public function __construct(shape(
  ?'last_used_date' => dateType,
  ?'region' => stringType,
  ) $s = shape()) {
    $this->last_used_date = $last_used_date ?? 0;
    $this->region = $region ?? "";
  }
}

type RoleUsageListType = vec<RoleUsageType>;

class RoleUsageType {
  public RegionNameType $region;
  public ArnListType $resources;

  public function __construct(shape(
  ?'region' => RegionNameType,
  ?'resources' => ArnListType,
  ) $s = shape()) {
    $this->region = $region ?? "";
    $this->resources = $resources ?? [];
  }
}

type SAMLMetadataDocumentType = string;

class SAMLProviderListEntry {
  public arnType $arn;
  public dateType $create_date;
  public dateType $valid_until;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'create_date' => dateType,
  ?'valid_until' => dateType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->valid_until = $valid_until ?? 0;
  }
}

type SAMLProviderListType = vec<SAMLProviderListEntry>;

type SAMLProviderNameType = string;

class SSHPublicKey {
  public publicKeyFingerprintType $fingerprint;
  public publicKeyMaterialType $ssh_public_key_body;
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
  public dateType $upload_date;
  public userNameType $user_name;

  public function __construct(shape(
  ?'fingerprint' => publicKeyFingerprintType,
  ?'ssh_public_key_body' => publicKeyMaterialType,
  ?'ssh_public_key_id' => publicKeyIdType,
  ?'status' => statusType,
  ?'upload_date' => dateType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->fingerprint = $fingerprint ?? "";
    $this->ssh_public_key_body = $ssh_public_key_body ?? "";
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
    $this->status = $status ?? "";
    $this->upload_date = $upload_date ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

type SSHPublicKeyListType = vec<SSHPublicKeyMetadata>;

class SSHPublicKeyMetadata {
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
  public dateType $upload_date;
  public userNameType $user_name;

  public function __construct(shape(
  ?'ssh_public_key_id' => publicKeyIdType,
  ?'status' => statusType,
  ?'upload_date' => dateType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
    $this->status = $status ?? "";
    $this->upload_date = $upload_date ?? 0;
    $this->user_name = $user_name ?? "";
  }
}

class ServerCertificate {
  public certificateBodyType $certificate_body;
  public certificateChainType $certificate_chain;
  public ServerCertificateMetadata $server_certificate_metadata;

  public function __construct(shape(
  ?'certificate_body' => certificateBodyType,
  ?'certificate_chain' => certificateChainType,
  ?'server_certificate_metadata' => ServerCertificateMetadata,
  ) $s = shape()) {
    $this->certificate_body = $certificate_body ?? "";
    $this->certificate_chain = $certificate_chain ?? "";
    $this->server_certificate_metadata = $server_certificate_metadata ?? null;
  }
}

class ServerCertificateMetadata {
  public arnType $arn;
  public dateType $expiration;
  public pathType $path;
  public idType $server_certificate_id;
  public serverCertificateNameType $server_certificate_name;
  public dateType $upload_date;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'expiration' => dateType,
  ?'path' => pathType,
  ?'server_certificate_id' => idType,
  ?'server_certificate_name' => serverCertificateNameType,
  ?'upload_date' => dateType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->expiration = $expiration ?? 0;
    $this->path = $path ?? "";
    $this->server_certificate_id = $server_certificate_id ?? "";
    $this->server_certificate_name = $server_certificate_name ?? "";
    $this->upload_date = $upload_date ?? 0;
  }
}

class ServiceFailureException {
  public serviceFailureExceptionMessage $message;

  public function __construct(shape(
  ?'message' => serviceFailureExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ServiceLastAccessed {
  public dateType $last_authenticated;
  public arnType $last_authenticated_entity;
  public serviceNameType $service_name;
  public serviceNamespaceType $service_namespace;
  public integerType $total_authenticated_entities;

  public function __construct(shape(
  ?'last_authenticated' => dateType,
  ?'last_authenticated_entity' => arnType,
  ?'service_name' => serviceNameType,
  ?'service_namespace' => serviceNamespaceType,
  ?'total_authenticated_entities' => integerType,
  ) $s = shape()) {
    $this->last_authenticated = $last_authenticated ?? 0;
    $this->last_authenticated_entity = $last_authenticated_entity ?? "";
    $this->service_name = $service_name ?? "";
    $this->service_namespace = $service_namespace ?? "";
    $this->total_authenticated_entities = $total_authenticated_entities ?? 0;
  }
}

class ServiceNotSupportedException {
  public serviceNotSupportedMessage $message;

  public function __construct(shape(
  ?'message' => serviceNotSupportedMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ServiceSpecificCredential {
  public dateType $create_date;
  public serviceName $service_name;
  public servicePassword $service_password;
  public serviceSpecificCredentialId $service_specific_credential_id;
  public serviceUserName $service_user_name;
  public statusType $status;
  public userNameType $user_name;

  public function __construct(shape(
  ?'create_date' => dateType,
  ?'service_name' => serviceName,
  ?'service_password' => servicePassword,
  ?'service_specific_credential_id' => serviceSpecificCredentialId,
  ?'service_user_name' => serviceUserName,
  ?'status' => statusType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->create_date = $create_date ?? 0;
    $this->service_name = $service_name ?? "";
    $this->service_password = $service_password ?? "";
    $this->service_specific_credential_id = $service_specific_credential_id ?? "";
    $this->service_user_name = $service_user_name ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class ServiceSpecificCredentialMetadata {
  public dateType $create_date;
  public serviceName $service_name;
  public serviceSpecificCredentialId $service_specific_credential_id;
  public serviceUserName $service_user_name;
  public statusType $status;
  public userNameType $user_name;

  public function __construct(shape(
  ?'create_date' => dateType,
  ?'service_name' => serviceName,
  ?'service_specific_credential_id' => serviceSpecificCredentialId,
  ?'service_user_name' => serviceUserName,
  ?'status' => statusType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->create_date = $create_date ?? 0;
    $this->service_name = $service_name ?? "";
    $this->service_specific_credential_id = $service_specific_credential_id ?? "";
    $this->service_user_name = $service_user_name ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

type ServiceSpecificCredentialsListType = vec<ServiceSpecificCredentialMetadata>;

type ServicesLastAccessed = vec<ServiceLastAccessed>;

class SetDefaultPolicyVersionRequest {
  public arnType $policy_arn;
  public policyVersionIdType $version_id;

  public function __construct(shape(
  ?'policy_arn' => arnType,
  ?'version_id' => policyVersionIdType,
  ) $s = shape()) {
    $this->policy_arn = $policy_arn ?? "";
    $this->version_id = $version_id ?? "";
  }
}

class SetSecurityTokenServicePreferencesRequest {
  public globalEndpointTokenVersion $global_endpoint_token_version;

  public function __construct(shape(
  ?'global_endpoint_token_version' => globalEndpointTokenVersion,
  ) $s = shape()) {
    $this->global_endpoint_token_version = $global_endpoint_token_version ?? "";
  }
}

class SigningCertificate {
  public certificateBodyType $certificate_body;
  public certificateIdType $certificate_id;
  public statusType $status;
  public dateType $upload_date;
  public userNameType $user_name;

  public function __construct(shape(
  ?'certificate_body' => certificateBodyType,
  ?'certificate_id' => certificateIdType,
  ?'status' => statusType,
  ?'upload_date' => dateType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->certificate_body = $certificate_body ?? "";
    $this->certificate_id = $certificate_id ?? "";
    $this->status = $status ?? "";
    $this->upload_date = $upload_date ?? 0;
    $this->user_name = $user_name ?? "";
  }
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

  public function __construct(shape(
  ?'action_names' => ActionNameListType,
  ?'caller_arn' => ResourceNameType,
  ?'context_entries' => ContextEntryListType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'permissions_boundary_policy_input_list' => SimulationPolicyListType,
  ?'policy_input_list' => SimulationPolicyListType,
  ?'resource_arns' => ResourceNameListType,
  ?'resource_handling_option' => ResourceHandlingOptionType,
  ?'resource_owner' => ResourceNameType,
  ?'resource_policy' => policyDocumentType,
  ) $s = shape()) {
    $this->action_names = $action_names ?? [];
    $this->caller_arn = $caller_arn ?? "";
    $this->context_entries = $context_entries ?? [];
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->permissions_boundary_policy_input_list = $permissions_boundary_policy_input_list ?? [];
    $this->policy_input_list = $policy_input_list ?? [];
    $this->resource_arns = $resource_arns ?? [];
    $this->resource_handling_option = $resource_handling_option ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->resource_policy = $resource_policy ?? "";
  }
}

class SimulatePolicyResponse {
  public EvaluationResultsListType $evaluation_results;
  public booleanType $is_truncated;
  public responseMarkerType $marker;

  public function __construct(shape(
  ?'evaluation_results' => EvaluationResultsListType,
  ?'is_truncated' => booleanType,
  ?'marker' => responseMarkerType,
  ) $s = shape()) {
    $this->evaluation_results = $evaluation_results ?? [];
    $this->is_truncated = $is_truncated ?? false;
    $this->marker = $marker ?? "";
  }
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

  public function __construct(shape(
  ?'action_names' => ActionNameListType,
  ?'caller_arn' => ResourceNameType,
  ?'context_entries' => ContextEntryListType,
  ?'marker' => markerType,
  ?'max_items' => maxItemsType,
  ?'permissions_boundary_policy_input_list' => SimulationPolicyListType,
  ?'policy_input_list' => SimulationPolicyListType,
  ?'policy_source_arn' => arnType,
  ?'resource_arns' => ResourceNameListType,
  ?'resource_handling_option' => ResourceHandlingOptionType,
  ?'resource_owner' => ResourceNameType,
  ?'resource_policy' => policyDocumentType,
  ) $s = shape()) {
    $this->action_names = $action_names ?? [];
    $this->caller_arn = $caller_arn ?? "";
    $this->context_entries = $context_entries ?? [];
    $this->marker = $marker ?? "";
    $this->max_items = $max_items ?? 0;
    $this->permissions_boundary_policy_input_list = $permissions_boundary_policy_input_list ?? [];
    $this->policy_input_list = $policy_input_list ?? [];
    $this->policy_source_arn = $policy_source_arn ?? "";
    $this->resource_arns = $resource_arns ?? [];
    $this->resource_handling_option = $resource_handling_option ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->resource_policy = $resource_policy ?? "";
  }
}

type SimulationPolicyListType = vec<policyDocumentType>;

class Statement {
  public Position $end_position;
  public PolicyIdentifierType $source_policy_id;
  public PolicySourceType $source_policy_type;
  public Position $start_position;

  public function __construct(shape(
  ?'end_position' => Position,
  ?'source_policy_id' => PolicyIdentifierType,
  ?'source_policy_type' => PolicySourceType,
  ?'start_position' => Position,
  ) $s = shape()) {
    $this->end_position = $end_position ?? null;
    $this->source_policy_id = $source_policy_id ?? "";
    $this->source_policy_type = $source_policy_type ?? "";
    $this->start_position = $start_position ?? null;
  }
}

type StatementListType = vec<Statement>;

class Tag {
  public tagKeyType $key;
  public tagValueType $value;

  public function __construct(shape(
  ?'key' => tagKeyType,
  ?'value' => tagValueType,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

class TagRoleRequest {
  public roleNameType $role_name;
  public tagListType $tags;

  public function __construct(shape(
  ?'role_name' => roleNameType,
  ?'tags' => tagListType,
  ) $s = shape()) {
    $this->role_name = $role_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagUserRequest {
  public tagListType $tags;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'tags' => tagListType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
    $this->user_name = $user_name ?? "";
  }
}

class UnmodifiableEntityException {
  public unmodifiableEntityMessage $message;

  public function __construct(shape(
  ?'message' => unmodifiableEntityMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnrecognizedPublicKeyEncodingException {
  public unrecognizedPublicKeyEncodingMessage $message;

  public function __construct(shape(
  ?'message' => unrecognizedPublicKeyEncodingMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagRoleRequest {
  public roleNameType $role_name;
  public tagKeyListType $tag_keys;

  public function __construct(shape(
  ?'role_name' => roleNameType,
  ?'tag_keys' => tagKeyListType,
  ) $s = shape()) {
    $this->role_name = $role_name ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagUserRequest {
  public tagKeyListType $tag_keys;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'tag_keys' => tagKeyListType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->tag_keys = $tag_keys ?? [];
    $this->user_name = $user_name ?? "";
  }
}

class UpdateAccessKeyRequest {
  public accessKeyIdType $access_key_id;
  public statusType $status;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'access_key_id' => accessKeyIdType,
  ?'status' => statusType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
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

  public function __construct(shape(
  ?'allow_users_to_change_password' => booleanType,
  ?'hard_expiry' => booleanObjectType,
  ?'max_password_age' => maxPasswordAgeType,
  ?'minimum_password_length' => minimumPasswordLengthType,
  ?'password_reuse_prevention' => passwordReusePreventionType,
  ?'require_lowercase_characters' => booleanType,
  ?'require_numbers' => booleanType,
  ?'require_symbols' => booleanType,
  ?'require_uppercase_characters' => booleanType,
  ) $s = shape()) {
    $this->allow_users_to_change_password = $allow_users_to_change_password ?? false;
    $this->hard_expiry = $hard_expiry ?? false;
    $this->max_password_age = $max_password_age ?? 0;
    $this->minimum_password_length = $minimum_password_length ?? 0;
    $this->password_reuse_prevention = $password_reuse_prevention ?? 0;
    $this->require_lowercase_characters = $require_lowercase_characters ?? false;
    $this->require_numbers = $require_numbers ?? false;
    $this->require_symbols = $require_symbols ?? false;
    $this->require_uppercase_characters = $require_uppercase_characters ?? false;
  }
}

class UpdateAssumeRolePolicyRequest {
  public policyDocumentType $policy_document;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'policy_document' => policyDocumentType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->policy_document = $policy_document ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class UpdateGroupRequest {
  public groupNameType $group_name;
  public groupNameType $new_group_name;
  public pathType $new_path;

  public function __construct(shape(
  ?'group_name' => groupNameType,
  ?'new_group_name' => groupNameType,
  ?'new_path' => pathType,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->new_group_name = $new_group_name ?? "";
    $this->new_path = $new_path ?? "";
  }
}

class UpdateLoginProfileRequest {
  public passwordType $password;
  public booleanObjectType $password_reset_required;
  public userNameType $user_name;

  public function __construct(shape(
  ?'password' => passwordType,
  ?'password_reset_required' => booleanObjectType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->password = $password ?? "";
    $this->password_reset_required = $password_reset_required ?? false;
    $this->user_name = $user_name ?? "";
  }
}

class UpdateOpenIDConnectProviderThumbprintRequest {
  public arnType $open_id_connect_provider_arn;
  public thumbprintListType $thumbprint_list;

  public function __construct(shape(
  ?'open_id_connect_provider_arn' => arnType,
  ?'thumbprint_list' => thumbprintListType,
  ) $s = shape()) {
    $this->open_id_connect_provider_arn = $open_id_connect_provider_arn ?? "";
    $this->thumbprint_list = $thumbprint_list ?? [];
  }
}

class UpdateRoleDescriptionRequest {
  public roleDescriptionType $description;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'description' => roleDescriptionType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class UpdateRoleDescriptionResponse {
  public Role $role;

  public function __construct(shape(
  ?'role' => Role,
  ) $s = shape()) {
    $this->role = $role ?? null;
  }
}

class UpdateRoleRequest {
  public roleDescriptionType $description;
  public roleMaxSessionDurationType $max_session_duration;
  public roleNameType $role_name;

  public function __construct(shape(
  ?'description' => roleDescriptionType,
  ?'max_session_duration' => roleMaxSessionDurationType,
  ?'role_name' => roleNameType,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->max_session_duration = $max_session_duration ?? 0;
    $this->role_name = $role_name ?? "";
  }
}

class UpdateRoleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSAMLProviderRequest {
  public SAMLMetadataDocumentType $saml_metadata_document;
  public arnType $saml_provider_arn;

  public function __construct(shape(
  ?'saml_metadata_document' => SAMLMetadataDocumentType,
  ?'saml_provider_arn' => arnType,
  ) $s = shape()) {
    $this->saml_metadata_document = $saml_metadata_document ?? "";
    $this->saml_provider_arn = $saml_provider_arn ?? "";
  }
}

class UpdateSAMLProviderResponse {
  public arnType $saml_provider_arn;

  public function __construct(shape(
  ?'saml_provider_arn' => arnType,
  ) $s = shape()) {
    $this->saml_provider_arn = $saml_provider_arn ?? "";
  }
}

class UpdateSSHPublicKeyRequest {
  public publicKeyIdType $ssh_public_key_id;
  public statusType $status;
  public userNameType $user_name;

  public function __construct(shape(
  ?'ssh_public_key_id' => publicKeyIdType,
  ?'status' => statusType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_id = $ssh_public_key_id ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UpdateServerCertificateRequest {
  public pathType $new_path;
  public serverCertificateNameType $new_server_certificate_name;
  public serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
  ?'new_path' => pathType,
  ?'new_server_certificate_name' => serverCertificateNameType,
  ?'server_certificate_name' => serverCertificateNameType,
  ) $s = shape()) {
    $this->new_path = $new_path ?? "";
    $this->new_server_certificate_name = $new_server_certificate_name ?? "";
    $this->server_certificate_name = $server_certificate_name ?? "";
  }
}

class UpdateServiceSpecificCredentialRequest {
  public serviceSpecificCredentialId $service_specific_credential_id;
  public statusType $status;
  public userNameType $user_name;

  public function __construct(shape(
  ?'service_specific_credential_id' => serviceSpecificCredentialId,
  ?'status' => statusType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->service_specific_credential_id = $service_specific_credential_id ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UpdateSigningCertificateRequest {
  public certificateIdType $certificate_id;
  public statusType $status;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'certificate_id' => certificateIdType,
  ?'status' => statusType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->certificate_id = $certificate_id ?? "";
    $this->status = $status ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UpdateUserRequest {
  public pathType $new_path;
  public userNameType $new_user_name;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'new_path' => pathType,
  ?'new_user_name' => userNameType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->new_path = $new_path ?? "";
    $this->new_user_name = $new_user_name ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UploadSSHPublicKeyRequest {
  public publicKeyMaterialType $ssh_public_key_body;
  public userNameType $user_name;

  public function __construct(shape(
  ?'ssh_public_key_body' => publicKeyMaterialType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->ssh_public_key_body = $ssh_public_key_body ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UploadSSHPublicKeyResponse {
  public SSHPublicKey $ssh_public_key;

  public function __construct(shape(
  ?'ssh_public_key' => SSHPublicKey,
  ) $s = shape()) {
    $this->ssh_public_key = $ssh_public_key ?? null;
  }
}

class UploadServerCertificateRequest {
  public certificateBodyType $certificate_body;
  public certificateChainType $certificate_chain;
  public pathType $path;
  public privateKeyType $private_key;
  public serverCertificateNameType $server_certificate_name;

  public function __construct(shape(
  ?'certificate_body' => certificateBodyType,
  ?'certificate_chain' => certificateChainType,
  ?'path' => pathType,
  ?'private_key' => privateKeyType,
  ?'server_certificate_name' => serverCertificateNameType,
  ) $s = shape()) {
    $this->certificate_body = $certificate_body ?? "";
    $this->certificate_chain = $certificate_chain ?? "";
    $this->path = $path ?? "";
    $this->private_key = $private_key ?? "";
    $this->server_certificate_name = $server_certificate_name ?? "";
  }
}

class UploadServerCertificateResponse {
  public ServerCertificateMetadata $server_certificate_metadata;

  public function __construct(shape(
  ?'server_certificate_metadata' => ServerCertificateMetadata,
  ) $s = shape()) {
    $this->server_certificate_metadata = $server_certificate_metadata ?? null;
  }
}

class UploadSigningCertificateRequest {
  public certificateBodyType $certificate_body;
  public existingUserNameType $user_name;

  public function __construct(shape(
  ?'certificate_body' => certificateBodyType,
  ?'user_name' => existingUserNameType,
  ) $s = shape()) {
    $this->certificate_body = $certificate_body ?? "";
    $this->user_name = $user_name ?? "";
  }
}

class UploadSigningCertificateResponse {
  public SigningCertificate $certificate;

  public function __construct(shape(
  ?'certificate' => SigningCertificate,
  ) $s = shape()) {
    $this->certificate = $certificate ?? null;
  }
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

  public function __construct(shape(
  ?'arn' => arnType,
  ?'create_date' => dateType,
  ?'password_last_used' => dateType,
  ?'path' => pathType,
  ?'permissions_boundary' => AttachedPermissionsBoundary,
  ?'tags' => tagListType,
  ?'user_id' => idType,
  ?'user_name' => userNameType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->create_date = $create_date ?? 0;
    $this->password_last_used = $password_last_used ?? 0;
    $this->path = $path ?? "";
    $this->permissions_boundary = $permissions_boundary ?? null;
    $this->tags = $tags ?? [];
    $this->user_id = $user_id ?? "";
    $this->user_name = $user_name ?? "";
  }
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

  public function __construct(shape(
  ?'arn' => arnType,
  ?'attached_managed_policies' => attachedPoliciesListType,
  ?'create_date' => dateType,
  ?'group_list' => groupNameListType,
  ?'path' => pathType,
  ?'permissions_boundary' => AttachedPermissionsBoundary,
  ?'tags' => tagListType,
  ?'user_id' => idType,
  ?'user_name' => userNameType,
  ?'user_policy_list' => policyDetailListType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->attached_managed_policies = $attached_managed_policies ?? [];
    $this->create_date = $create_date ?? 0;
    $this->group_list = $group_list ?? [];
    $this->path = $path ?? "";
    $this->permissions_boundary = $permissions_boundary ?? null;
    $this->tags = $tags ?? [];
    $this->user_id = $user_id ?? "";
    $this->user_name = $user_name ?? "";
    $this->user_policy_list = $user_policy_list ?? [];
  }
}

class VirtualMFADevice {
  public BootstrapDatum $base_32_string_seed;
  public dateType $enable_date;
  public BootstrapDatum $qr_code_png;
  public serialNumberType $serial_number;
  public User $user;

  public function __construct(shape(
  ?'base_32_string_seed' => BootstrapDatum,
  ?'enable_date' => dateType,
  ?'qr_code_png' => BootstrapDatum,
  ?'serial_number' => serialNumberType,
  ?'user' => User,
  ) $s = shape()) {
    $this->base_32_string_seed = $base_32_string_seed ?? "";
    $this->enable_date = $enable_date ?? 0;
    $this->qr_code_png = $qr_code_png ?? "";
    $this->serial_number = $serial_number ?? "";
    $this->user = $user ?? null;
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

