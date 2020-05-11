<?hh // strict
namespace slack\aws\ram;

interface RAM {
  public function AcceptResourceShareInvitation(AcceptResourceShareInvitationRequest): Awaitable<Errors\Result<AcceptResourceShareInvitationResponse>>;
  public function AssociateResourceShare(AssociateResourceShareRequest): Awaitable<Errors\Result<AssociateResourceShareResponse>>;
  public function AssociateResourceSharePermission(AssociateResourceSharePermissionRequest): Awaitable<Errors\Result<AssociateResourceSharePermissionResponse>>;
  public function CreateResourceShare(CreateResourceShareRequest): Awaitable<Errors\Result<CreateResourceShareResponse>>;
  public function DeleteResourceShare(DeleteResourceShareRequest): Awaitable<Errors\Result<DeleteResourceShareResponse>>;
  public function DisassociateResourceShare(DisassociateResourceShareRequest): Awaitable<Errors\Result<DisassociateResourceShareResponse>>;
  public function DisassociateResourceSharePermission(DisassociateResourceSharePermissionRequest): Awaitable<Errors\Result<DisassociateResourceSharePermissionResponse>>;
  public function EnableSharingWithAwsOrganization(EnableSharingWithAwsOrganizationRequest): Awaitable<Errors\Result<EnableSharingWithAwsOrganizationResponse>>;
  public function GetPermission(GetPermissionRequest): Awaitable<Errors\Result<GetPermissionResponse>>;
  public function GetResourcePolicies(GetResourcePoliciesRequest): Awaitable<Errors\Result<GetResourcePoliciesResponse>>;
  public function GetResourceShareAssociations(GetResourceShareAssociationsRequest): Awaitable<Errors\Result<GetResourceShareAssociationsResponse>>;
  public function GetResourceShareInvitations(GetResourceShareInvitationsRequest): Awaitable<Errors\Result<GetResourceShareInvitationsResponse>>;
  public function GetResourceShares(GetResourceSharesRequest): Awaitable<Errors\Result<GetResourceSharesResponse>>;
  public function ListPendingInvitationResources(ListPendingInvitationResourcesRequest): Awaitable<Errors\Result<ListPendingInvitationResourcesResponse>>;
  public function ListPermissions(ListPermissionsRequest): Awaitable<Errors\Result<ListPermissionsResponse>>;
  public function ListPrincipals(ListPrincipalsRequest): Awaitable<Errors\Result<ListPrincipalsResponse>>;
  public function ListResourceSharePermissions(ListResourceSharePermissionsRequest): Awaitable<Errors\Result<ListResourceSharePermissionsResponse>>;
  public function ListResourceTypes(ListResourceTypesRequest): Awaitable<Errors\Result<ListResourceTypesResponse>>;
  public function ListResources(ListResourcesRequest): Awaitable<Errors\Result<ListResourcesResponse>>;
  public function PromoteResourceShareCreatedFromPolicy(PromoteResourceShareCreatedFromPolicyRequest): Awaitable<Errors\Result<PromoteResourceShareCreatedFromPolicyResponse>>;
  public function RejectResourceShareInvitation(RejectResourceShareInvitationRequest): Awaitable<Errors\Result<RejectResourceShareInvitationResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateResourceShare(UpdateResourceShareRequest): Awaitable<Errors\Result<UpdateResourceShareResponse>>;
}

class AcceptResourceShareInvitationRequest {
  public string $client_token;
  public string $resource_share_invitation_arn;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share_invitation_arn' => string,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share_invitation_arn = $resource_share_invitation_arn ?? "";
  }
}

class AcceptResourceShareInvitationResponse {
  public string $client_token;
  public ResourceShareInvitation $resource_share_invitation;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share_invitation' => ResourceShareInvitation,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share_invitation = $resource_share_invitation ?? null;
  }
}

class AssociateResourceSharePermissionRequest {
  public string $client_token;
  public string $permission_arn;
  public boolean $replace;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'client_token' => string,
  ?'permission_arn' => string,
  ?'replace' => boolean,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->permission_arn = $permission_arn ?? "";
    $this->replace = $replace ?? false;
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class AssociateResourceSharePermissionResponse {
  public string $client_token;
  public boolean $return_value;

  public function __construct(shape(
  ?'client_token' => string,
  ?'return_value' => boolean,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->return_value = $return_value ?? false;
  }
}

class AssociateResourceShareRequest {
  public string $client_token;
  public PrincipalArnOrIdList $principals;
  public ResourceArnList $resource_arns;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'client_token' => string,
  ?'principals' => PrincipalArnOrIdList,
  ?'resource_arns' => ResourceArnList,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->principals = $principals ?? [];
    $this->resource_arns = $resource_arns ?? [];
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class AssociateResourceShareResponse {
  public string $client_token;
  public ResourceShareAssociationList $resource_share_associations;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share_associations' => ResourceShareAssociationList,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share_associations = $resource_share_associations ?? [];
  }
}

type Boolean = bool;

class CreateResourceShareRequest {
  public boolean $allow_external_principals;
  public string $client_token;
  public string $name;
  public PermissionArnList $permission_arns;
  public PrincipalArnOrIdList $principals;
  public ResourceArnList $resource_arns;
  public TagList $tags;

  public function __construct(shape(
  ?'allow_external_principals' => boolean,
  ?'client_token' => string,
  ?'name' => string,
  ?'permission_arns' => PermissionArnList,
  ?'principals' => PrincipalArnOrIdList,
  ?'resource_arns' => ResourceArnList,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->allow_external_principals = $allow_external_principals ?? false;
    $this->client_token = $client_token ?? "";
    $this->name = $name ?? "";
    $this->permission_arns = $permission_arns ?? [];
    $this->principals = $principals ?? [];
    $this->resource_arns = $resource_arns ?? [];
    $this->tags = $tags ?? [];
  }
}

class CreateResourceShareResponse {
  public string $client_token;
  public ResourceShare $resource_share;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share' => ResourceShare,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share = $resource_share ?? null;
  }
}

type DateTime = int;

class DeleteResourceShareRequest {
  public string $client_token;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class DeleteResourceShareResponse {
  public string $client_token;
  public boolean $return_value;

  public function __construct(shape(
  ?'client_token' => string,
  ?'return_value' => boolean,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->return_value = $return_value ?? false;
  }
}

class DisassociateResourceSharePermissionRequest {
  public string $client_token;
  public string $permission_arn;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'client_token' => string,
  ?'permission_arn' => string,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->permission_arn = $permission_arn ?? "";
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class DisassociateResourceSharePermissionResponse {
  public string $client_token;
  public boolean $return_value;

  public function __construct(shape(
  ?'client_token' => string,
  ?'return_value' => boolean,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->return_value = $return_value ?? false;
  }
}

class DisassociateResourceShareRequest {
  public string $client_token;
  public PrincipalArnOrIdList $principals;
  public ResourceArnList $resource_arns;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'client_token' => string,
  ?'principals' => PrincipalArnOrIdList,
  ?'resource_arns' => ResourceArnList,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->principals = $principals ?? [];
    $this->resource_arns = $resource_arns ?? [];
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class DisassociateResourceShareResponse {
  public string $client_token;
  public ResourceShareAssociationList $resource_share_associations;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share_associations' => ResourceShareAssociationList,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share_associations = $resource_share_associations ?? [];
  }
}

class EnableSharingWithAwsOrganizationRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableSharingWithAwsOrganizationResponse {
  public boolean $return_value;

  public function __construct(shape(
  ?'return_value' => boolean,
  ) $s = shape()) {
    $this->return_value = $return_value ?? false;
  }
}

class GetPermissionRequest {
  public string $permission_arn;
  public int $permission_version;

  public function __construct(shape(
  ?'permission_arn' => string,
  ?'permission_version' => int,
  ) $s = shape()) {
    $this->permission_arn = $permission_arn ?? "";
    $this->permission_version = $permission_version ?? 0;
  }
}

class GetPermissionResponse {
  public ResourceSharePermissionDetail $permission;

  public function __construct(shape(
  ?'permission' => ResourceSharePermissionDetail,
  ) $s = shape()) {
    $this->permission = $permission ?? null;
  }
}

class GetResourcePoliciesRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public ResourceArnList $resource_arns;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'principal' => string,
  ?'resource_arns' => ResourceArnList,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->principal = $principal ?? "";
    $this->resource_arns = $resource_arns ?? [];
  }
}

class GetResourcePoliciesResponse {
  public string $next_token;
  public PolicyList $policies;

  public function __construct(shape(
  ?'next_token' => string,
  ?'policies' => PolicyList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->policies = $policies ?? [];
  }
}

class GetResourceShareAssociationsRequest {
  public ResourceShareAssociationStatus $association_status;
  public ResourceShareAssociationType $association_type;
  public MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public string $resource_arn;
  public ResourceShareArnList $resource_share_arns;

  public function __construct(shape(
  ?'association_status' => ResourceShareAssociationStatus,
  ?'association_type' => ResourceShareAssociationType,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'principal' => string,
  ?'resource_arn' => string,
  ?'resource_share_arns' => ResourceShareArnList,
  ) $s = shape()) {
    $this->association_status = $association_status ?? "";
    $this->association_type = $association_type ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->principal = $principal ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_share_arns = $resource_share_arns ?? [];
  }
}

class GetResourceShareAssociationsResponse {
  public string $next_token;
  public ResourceShareAssociationList $resource_share_associations;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resource_share_associations' => ResourceShareAssociationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_share_associations = $resource_share_associations ?? [];
  }
}

class GetResourceShareInvitationsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public ResourceShareArnList $resource_share_arns;
  public ResourceShareInvitationArnList $resource_share_invitation_arns;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'resource_share_arns' => ResourceShareArnList,
  ?'resource_share_invitation_arns' => ResourceShareInvitationArnList,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_share_arns = $resource_share_arns ?? [];
    $this->resource_share_invitation_arns = $resource_share_invitation_arns ?? [];
  }
}

class GetResourceShareInvitationsResponse {
  public string $next_token;
  public ResourceShareInvitationList $resource_share_invitations;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resource_share_invitations' => ResourceShareInvitationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_share_invitations = $resource_share_invitations ?? [];
  }
}

class GetResourceSharesRequest {
  public MaxResults $max_results;
  public string $name;
  public string $next_token;
  public ResourceOwner $resource_owner;
  public ResourceShareArnList $resource_share_arns;
  public ResourceShareStatus $resource_share_status;
  public TagFilters $tag_filters;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'name' => string,
  ?'next_token' => string,
  ?'resource_owner' => ResourceOwner,
  ?'resource_share_arns' => ResourceShareArnList,
  ?'resource_share_status' => ResourceShareStatus,
  ?'tag_filters' => TagFilters,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->name = $name ?? "";
    $this->next_token = $next_token ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->resource_share_arns = $resource_share_arns ?? [];
    $this->resource_share_status = $resource_share_status ?? "";
    $this->tag_filters = $tag_filters ?? [];
  }
}

class GetResourceSharesResponse {
  public string $next_token;
  public ResourceShareList $resource_shares;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resource_shares' => ResourceShareList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_shares = $resource_shares ?? [];
  }
}

class IdempotentParameterMismatchException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Integer = int;

class InvalidClientTokenException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidMaxResultsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNextTokenException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidResourceTypeException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidStateTransitionException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListPendingInvitationResourcesRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $resource_share_invitation_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'resource_share_invitation_arn' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_share_invitation_arn = $resource_share_invitation_arn ?? "";
  }
}

class ListPendingInvitationResourcesResponse {
  public string $next_token;
  public ResourceList $resources;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resources' => ResourceList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resources = $resources ?? [];
  }
}

class ListPermissionsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $resource_type;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

class ListPermissionsResponse {
  public string $next_token;
  public ResourceSharePermissionList $permissions;

  public function __construct(shape(
  ?'next_token' => string,
  ?'permissions' => ResourceSharePermissionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->permissions = $permissions ?? [];
  }
}

class ListPrincipalsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public PrincipalArnOrIdList $principals;
  public string $resource_arn;
  public ResourceOwner $resource_owner;
  public ResourceShareArnList $resource_share_arns;
  public string $resource_type;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'principals' => PrincipalArnOrIdList,
  ?'resource_arn' => string,
  ?'resource_owner' => ResourceOwner,
  ?'resource_share_arns' => ResourceShareArnList,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->principals = $principals ?? [];
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_owner = $resource_owner ?? "";
    $this->resource_share_arns = $resource_share_arns ?? [];
    $this->resource_type = $resource_type ?? "";
  }
}

class ListPrincipalsResponse {
  public string $next_token;
  public PrincipalList $principals;

  public function __construct(shape(
  ?'next_token' => string,
  ?'principals' => PrincipalList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->principals = $principals ?? [];
  }
}

class ListResourceSharePermissionsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class ListResourceSharePermissionsResponse {
  public string $next_token;
  public ResourceSharePermissionList $permissions;

  public function __construct(shape(
  ?'next_token' => string,
  ?'permissions' => ResourceSharePermissionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->permissions = $permissions ?? [];
  }
}

class ListResourceTypesRequest {
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListResourceTypesResponse {
  public string $next_token;
  public ServiceNameAndResourceTypeList $resource_types;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resource_types' => ServiceNameAndResourceTypeList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resource_types = $resource_types ?? [];
  }
}

class ListResourcesRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public ResourceArnList $resource_arns;
  public ResourceOwner $resource_owner;
  public ResourceShareArnList $resource_share_arns;
  public string $resource_type;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'principal' => string,
  ?'resource_arns' => ResourceArnList,
  ?'resource_owner' => ResourceOwner,
  ?'resource_share_arns' => ResourceShareArnList,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->principal = $principal ?? "";
    $this->resource_arns = $resource_arns ?? [];
    $this->resource_owner = $resource_owner ?? "";
    $this->resource_share_arns = $resource_share_arns ?? [];
    $this->resource_type = $resource_type ?? "";
  }
}

class ListResourcesResponse {
  public string $next_token;
  public ResourceList $resources;

  public function __construct(shape(
  ?'next_token' => string,
  ?'resources' => ResourceList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resources = $resources ?? [];
  }
}

class MalformedArnException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type MaxResults = int;

class MissingRequiredParameterException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class OperationNotPermittedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PermissionArnList = vec<String>;

type Policy = string;

type PolicyList = vec<Policy>;

class Principal {
  public DateTime $creation_time;
  public boolean $external;
  public string $id;
  public DateTime $last_updated_time;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'creation_time' => DateTime,
  ?'external' => boolean,
  ?'id' => string,
  ?'last_updated_time' => DateTime,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->creation_time = $creation_time ?? 0;
    $this->external = $external ?? false;
    $this->id = $id ?? "";
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

type PrincipalArnOrIdList = vec<String>;

type PrincipalList = vec<Principal>;

class PromoteResourceShareCreatedFromPolicyRequest {
  public string $resource_share_arn;

  public function __construct(shape(
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class PromoteResourceShareCreatedFromPolicyResponse {
  public boolean $return_value;

  public function __construct(shape(
  ?'return_value' => boolean,
  ) $s = shape()) {
    $this->return_value = $return_value ?? false;
  }
}

class RejectResourceShareInvitationRequest {
  public string $client_token;
  public string $resource_share_invitation_arn;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share_invitation_arn' => string,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share_invitation_arn = $resource_share_invitation_arn ?? "";
  }
}

class RejectResourceShareInvitationResponse {
  public string $client_token;
  public ResourceShareInvitation $resource_share_invitation;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share_invitation' => ResourceShareInvitation,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share_invitation = $resource_share_invitation ?? null;
  }
}

class Resource {
  public string $arn;
  public DateTime $creation_time;
  public DateTime $last_updated_time;
  public string $resource_group_arn;
  public string $resource_share_arn;
  public ResourceStatus $status;
  public string $status_message;
  public string $type;

  public function __construct(shape(
  ?'arn' => string,
  ?'creation_time' => DateTime,
  ?'last_updated_time' => DateTime,
  ?'resource_group_arn' => string,
  ?'resource_share_arn' => string,
  ?'status' => ResourceStatus,
  ?'status_message' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->resource_group_arn = $resource_group_arn ?? "";
    $this->resource_share_arn = $resource_share_arn ?? "";
    $this->status = $status ?? "";
    $this->status_message = $status_message ?? "";
    $this->type = $type ?? "";
  }
}

type ResourceArnList = vec<String>;

class ResourceArnNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceList = vec<Resource>;

type ResourceOwner = string;

class ResourceShare {
  public boolean $allow_external_principals;
  public DateTime $creation_time;
  public ResourceShareFeatureSet $feature_set;
  public DateTime $last_updated_time;
  public string $name;
  public string $owning_account_id;
  public string $resource_share_arn;
  public ResourceShareStatus $status;
  public string $status_message;
  public TagList $tags;

  public function __construct(shape(
  ?'allow_external_principals' => boolean,
  ?'creation_time' => DateTime,
  ?'feature_set' => ResourceShareFeatureSet,
  ?'last_updated_time' => DateTime,
  ?'name' => string,
  ?'owning_account_id' => string,
  ?'resource_share_arn' => string,
  ?'status' => ResourceShareStatus,
  ?'status_message' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->allow_external_principals = $allow_external_principals ?? false;
    $this->creation_time = $creation_time ?? 0;
    $this->feature_set = $feature_set ?? "";
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->name = $name ?? "";
    $this->owning_account_id = $owning_account_id ?? "";
    $this->resource_share_arn = $resource_share_arn ?? "";
    $this->status = $status ?? "";
    $this->status_message = $status_message ?? "";
    $this->tags = $tags ?? [];
  }
}

type ResourceShareArnList = vec<String>;

class ResourceShareAssociation {
  public string $associated_entity;
  public ResourceShareAssociationType $association_type;
  public DateTime $creation_time;
  public boolean $external;
  public DateTime $last_updated_time;
  public string $resource_share_arn;
  public string $resource_share_name;
  public ResourceShareAssociationStatus $status;
  public string $status_message;

  public function __construct(shape(
  ?'associated_entity' => string,
  ?'association_type' => ResourceShareAssociationType,
  ?'creation_time' => DateTime,
  ?'external' => boolean,
  ?'last_updated_time' => DateTime,
  ?'resource_share_arn' => string,
  ?'resource_share_name' => string,
  ?'status' => ResourceShareAssociationStatus,
  ?'status_message' => string,
  ) $s = shape()) {
    $this->associated_entity = $associated_entity ?? "";
    $this->association_type = $association_type ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->external = $external ?? false;
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->resource_share_arn = $resource_share_arn ?? "";
    $this->resource_share_name = $resource_share_name ?? "";
    $this->status = $status ?? "";
    $this->status_message = $status_message ?? "";
  }
}

type ResourceShareAssociationList = vec<ResourceShareAssociation>;

type ResourceShareAssociationStatus = string;

type ResourceShareAssociationType = string;

type ResourceShareFeatureSet = string;

class ResourceShareInvitation {
  public DateTime $invitation_timestamp;
  public string $receiver_account_id;
  public string $resource_share_arn;
  public ResourceShareAssociationList $resource_share_associations;
  public string $resource_share_invitation_arn;
  public string $resource_share_name;
  public string $sender_account_id;
  public ResourceShareInvitationStatus $status;

  public function __construct(shape(
  ?'invitation_timestamp' => DateTime,
  ?'receiver_account_id' => string,
  ?'resource_share_arn' => string,
  ?'resource_share_associations' => ResourceShareAssociationList,
  ?'resource_share_invitation_arn' => string,
  ?'resource_share_name' => string,
  ?'sender_account_id' => string,
  ?'status' => ResourceShareInvitationStatus,
  ) $s = shape()) {
    $this->invitation_timestamp = $invitation_timestamp ?? 0;
    $this->receiver_account_id = $receiver_account_id ?? "";
    $this->resource_share_arn = $resource_share_arn ?? "";
    $this->resource_share_associations = $resource_share_associations ?? [];
    $this->resource_share_invitation_arn = $resource_share_invitation_arn ?? "";
    $this->resource_share_name = $resource_share_name ?? "";
    $this->sender_account_id = $sender_account_id ?? "";
    $this->status = $status ?? "";
  }
}

class ResourceShareInvitationAlreadyAcceptedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceShareInvitationAlreadyRejectedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceShareInvitationArnList = vec<String>;

class ResourceShareInvitationArnNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceShareInvitationExpiredException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceShareInvitationList = vec<ResourceShareInvitation>;

type ResourceShareInvitationStatus = string;

class ResourceShareLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ResourceShareList = vec<ResourceShare>;

class ResourceSharePermissionDetail {
  public string $arn;
  public DateTime $creation_time;
  public boolean $default_version;
  public DateTime $last_updated_time;
  public string $name;
  public string $permission;
  public string $resource_type;
  public string $version;

  public function __construct(shape(
  ?'arn' => string,
  ?'creation_time' => DateTime,
  ?'default_version' => boolean,
  ?'last_updated_time' => DateTime,
  ?'name' => string,
  ?'permission' => string,
  ?'resource_type' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->default_version = $default_version ?? false;
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->name = $name ?? "";
    $this->permission = $permission ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->version = $version ?? "";
  }
}

type ResourceSharePermissionList = vec<ResourceSharePermissionSummary>;

class ResourceSharePermissionSummary {
  public string $arn;
  public DateTime $creation_time;
  public boolean $default_version;
  public DateTime $last_updated_time;
  public string $name;
  public string $resource_type;
  public string $status;
  public string $version;

  public function __construct(shape(
  ?'arn' => string,
  ?'creation_time' => DateTime,
  ?'default_version' => boolean,
  ?'last_updated_time' => DateTime,
  ?'name' => string,
  ?'resource_type' => string,
  ?'status' => string,
  ?'version' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->creation_time = $creation_time ?? 0;
    $this->default_version = $default_version ?? false;
    $this->last_updated_time = $last_updated_time ?? 0;
    $this->name = $name ?? "";
    $this->resource_type = $resource_type ?? "";
    $this->status = $status ?? "";
    $this->version = $version ?? "";
  }
}

type ResourceShareStatus = string;

type ResourceStatus = string;

class ServerInternalException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ServiceNameAndResourceType {
  public string $resource_type;
  public string $service_name;

  public function __construct(shape(
  ?'resource_type' => string,
  ?'service_name' => string,
  ) $s = shape()) {
    $this->resource_type = $resource_type ?? "";
    $this->service_name = $service_name ?? "";
  }
}

type ServiceNameAndResourceTypeList = vec<ServiceNameAndResourceType>;

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type String = string;

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

class TagFilter {
  public TagKey $tag_key;
  public TagValueList $tag_values;

  public function __construct(shape(
  ?'tag_key' => TagKey,
  ?'tag_values' => TagValueList,
  ) $s = shape()) {
    $this->tag_key = $tag_key ?? "";
    $this->tag_values = $tag_values ?? [];
  }
}

type TagFilters = vec<TagFilter>;

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TagList = vec<Tag>;

class TagPolicyViolationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class TagResourceRequest {
  public string $resource_share_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_share_arn' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_share_arn = $resource_share_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type TagValueList = vec<TagValue>;

class UnknownResourceException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagResourceRequest {
  public string $resource_share_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_share_arn' => string,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_share_arn = $resource_share_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateResourceShareRequest {
  public boolean $allow_external_principals;
  public string $client_token;
  public string $name;
  public string $resource_share_arn;

  public function __construct(shape(
  ?'allow_external_principals' => boolean,
  ?'client_token' => string,
  ?'name' => string,
  ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->allow_external_principals = $allow_external_principals ?? false;
    $this->client_token = $client_token ?? "";
    $this->name = $name ?? "";
    $this->resource_share_arn = $resource_share_arn ?? "";
  }
}

class UpdateResourceShareResponse {
  public string $client_token;
  public ResourceShare $resource_share;

  public function __construct(shape(
  ?'client_token' => string,
  ?'resource_share' => ResourceShare,
  ) $s = shape()) {
    $this->client_token = $client_token ?? "";
    $this->resource_share = $resource_share ?? null;
  }
}

