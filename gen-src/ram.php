<?hh // strict
namespace slack\aws\ram;

interface RAM {
  public function AcceptResourceShareInvitation(AcceptResourceShareInvitationRequest $in): Awaitable<\Errors\Result<AcceptResourceShareInvitationResponse>>;
  public function AssociateResourceShare(AssociateResourceShareRequest $in): Awaitable<\Errors\Result<AssociateResourceShareResponse>>;
  public function AssociateResourceSharePermission(AssociateResourceSharePermissionRequest $in): Awaitable<\Errors\Result<AssociateResourceSharePermissionResponse>>;
  public function CreateResourceShare(CreateResourceShareRequest $in): Awaitable<\Errors\Result<CreateResourceShareResponse>>;
  public function DeleteResourceShare(DeleteResourceShareRequest $in): Awaitable<\Errors\Result<DeleteResourceShareResponse>>;
  public function DisassociateResourceShare(DisassociateResourceShareRequest $in): Awaitable<\Errors\Result<DisassociateResourceShareResponse>>;
  public function DisassociateResourceSharePermission(DisassociateResourceSharePermissionRequest $in): Awaitable<\Errors\Result<DisassociateResourceSharePermissionResponse>>;
  public function EnableSharingWithAwsOrganization(EnableSharingWithAwsOrganizationRequest $in): Awaitable<\Errors\Result<EnableSharingWithAwsOrganizationResponse>>;
  public function GetPermission(GetPermissionRequest $in): Awaitable<\Errors\Result<GetPermissionResponse>>;
  public function GetResourcePolicies(GetResourcePoliciesRequest $in): Awaitable<\Errors\Result<GetResourcePoliciesResponse>>;
  public function GetResourceShareAssociations(GetResourceShareAssociationsRequest $in): Awaitable<\Errors\Result<GetResourceShareAssociationsResponse>>;
  public function GetResourceShareInvitations(GetResourceShareInvitationsRequest $in): Awaitable<\Errors\Result<GetResourceShareInvitationsResponse>>;
  public function GetResourceShares(GetResourceSharesRequest $in): Awaitable<\Errors\Result<GetResourceSharesResponse>>;
  public function ListPendingInvitationResources(ListPendingInvitationResourcesRequest $in): Awaitable<\Errors\Result<ListPendingInvitationResourcesResponse>>;
  public function ListPermissions(ListPermissionsRequest $in): Awaitable<\Errors\Result<ListPermissionsResponse>>;
  public function ListPrincipals(ListPrincipalsRequest $in): Awaitable<\Errors\Result<ListPrincipalsResponse>>;
  public function ListResourceSharePermissions(ListResourceSharePermissionsRequest $in): Awaitable<\Errors\Result<ListResourceSharePermissionsResponse>>;
  public function ListResourceTypes(ListResourceTypesRequest $in): Awaitable<\Errors\Result<ListResourceTypesResponse>>;
  public function ListResources(ListResourcesRequest $in): Awaitable<\Errors\Result<ListResourcesResponse>>;
  public function PromoteResourceShareCreatedFromPolicy(PromoteResourceShareCreatedFromPolicyRequest $in): Awaitable<\Errors\Result<PromoteResourceShareCreatedFromPolicyResponse>>;
  public function RejectResourceShareInvitation(RejectResourceShareInvitationRequest $in): Awaitable<\Errors\Result<RejectResourceShareInvitationResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateResourceShare(UpdateResourceShareRequest $in): Awaitable<\Errors\Result<UpdateResourceShareResponse>>;
}

class AcceptResourceShareInvitationRequest {
  public string $client_token;
  public string $resource_share_invitation_arn;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share_invitation_arn' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share_invitation_arn = $s['resource_share_invitation_arn'] ?? '';
  }
}

class AcceptResourceShareInvitationResponse {
  public string $client_token;
  public ?ResourceShareInvitation $resource_share_invitation;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share_invitation' => ?ResourceShareInvitation,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share_invitation = $s['resource_share_invitation'] ?? null;
  }
}

class AssociateResourceSharePermissionRequest {
  public string $client_token;
  public string $permission_arn;
  public bool $replace;
  public string $resource_share_arn;

  public function __construct(shape(
    ?'client_token' => string,
    ?'permission_arn' => string,
    ?'replace' => bool,
    ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->permission_arn = $s['permission_arn'] ?? '';
    $this->replace = $s['replace'] ?? false;
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class AssociateResourceSharePermissionResponse {
  public string $client_token;
  public bool $return_value;

  public function __construct(shape(
    ?'client_token' => string,
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->return_value = $s['return_value'] ?? false;
  }
}

class AssociateResourceShareRequest {
  public string $client_token;
  public ?PrincipalArnOrIdList $principals;
  public ?ResourceArnList $resource_arns;
  public string $resource_share_arn;

  public function __construct(shape(
    ?'client_token' => string,
    ?'principals' => ?PrincipalArnOrIdList,
    ?'resource_arns' => ?ResourceArnList,
    ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->principals = $s['principals'] ?? vec[];
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class AssociateResourceShareResponse {
  public string $client_token;
  public ?ResourceShareAssociationList $resource_share_associations;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share_associations' => ?ResourceShareAssociationList,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share_associations = $s['resource_share_associations'] ?? vec[];
  }
}

type Boolean = bool;

class CreateResourceShareRequest {
  public bool $allow_external_principals;
  public string $client_token;
  public string $name;
  public ?PermissionArnList $permission_arns;
  public ?PrincipalArnOrIdList $principals;
  public ?ResourceArnList $resource_arns;
  public ?TagList $tags;

  public function __construct(shape(
    ?'allow_external_principals' => bool,
    ?'client_token' => string,
    ?'name' => string,
    ?'permission_arns' => ?PermissionArnList,
    ?'principals' => ?PrincipalArnOrIdList,
    ?'resource_arns' => ?ResourceArnList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->allow_external_principals = $s['allow_external_principals'] ?? false;
    $this->client_token = $s['client_token'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->permission_arns = $s['permission_arns'] ?? vec[];
    $this->principals = $s['principals'] ?? vec[];
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateResourceShareResponse {
  public string $client_token;
  public ?ResourceShare $resource_share;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share' => ?ResourceShare,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share = $s['resource_share'] ?? null;
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
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class DeleteResourceShareResponse {
  public string $client_token;
  public bool $return_value;

  public function __construct(shape(
    ?'client_token' => string,
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->return_value = $s['return_value'] ?? false;
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
    $this->client_token = $s['client_token'] ?? '';
    $this->permission_arn = $s['permission_arn'] ?? '';
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class DisassociateResourceSharePermissionResponse {
  public string $client_token;
  public bool $return_value;

  public function __construct(shape(
    ?'client_token' => string,
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->return_value = $s['return_value'] ?? false;
  }
}

class DisassociateResourceShareRequest {
  public string $client_token;
  public ?PrincipalArnOrIdList $principals;
  public ?ResourceArnList $resource_arns;
  public string $resource_share_arn;

  public function __construct(shape(
    ?'client_token' => string,
    ?'principals' => ?PrincipalArnOrIdList,
    ?'resource_arns' => ?ResourceArnList,
    ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->principals = $s['principals'] ?? vec[];
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class DisassociateResourceShareResponse {
  public string $client_token;
  public ?ResourceShareAssociationList $resource_share_associations;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share_associations' => ?ResourceShareAssociationList,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share_associations = $s['resource_share_associations'] ?? vec[];
  }
}

class EnableSharingWithAwsOrganizationRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableSharingWithAwsOrganizationResponse {
  public bool $return_value;

  public function __construct(shape(
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->return_value = $s['return_value'] ?? false;
  }
}

class GetPermissionRequest {
  public string $permission_arn;
  public int $permission_version;

  public function __construct(shape(
    ?'permission_arn' => string,
    ?'permission_version' => int,
  ) $s = shape()) {
    $this->permission_arn = $s['permission_arn'] ?? '';
    $this->permission_version = $s['permission_version'] ?? 0;
  }
}

class GetPermissionResponse {
  public ?ResourceSharePermissionDetail $permission;

  public function __construct(shape(
    ?'permission' => ?ResourceSharePermissionDetail,
  ) $s = shape()) {
    $this->permission = $s['permission'] ?? null;
  }
}

class GetResourcePoliciesRequest {
  public ?MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public ?ResourceArnList $resource_arns;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'principal' => string,
    ?'resource_arns' => ?ResourceArnList,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->principal = $s['principal'] ?? '';
    $this->resource_arns = $s['resource_arns'] ?? vec[];
  }
}

class GetResourcePoliciesResponse {
  public string $next_token;
  public ?PolicyList $policies;

  public function __construct(shape(
    ?'next_token' => string,
    ?'policies' => ?PolicyList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->policies = $s['policies'] ?? vec[];
  }
}

class GetResourceShareAssociationsRequest {
  public ?ResourceShareAssociationStatus $association_status;
  public ?ResourceShareAssociationType $association_type;
  public ?MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public string $resource_arn;
  public ?ResourceShareArnList $resource_share_arns;

  public function __construct(shape(
    ?'association_status' => ?ResourceShareAssociationStatus,
    ?'association_type' => ?ResourceShareAssociationType,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'principal' => string,
    ?'resource_arn' => string,
    ?'resource_share_arns' => ?ResourceShareArnList,
  ) $s = shape()) {
    $this->association_status = $s['association_status'] ?? '';
    $this->association_type = $s['association_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->principal = $s['principal'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_share_arns = $s['resource_share_arns'] ?? vec[];
  }
}

class GetResourceShareAssociationsResponse {
  public string $next_token;
  public ?ResourceShareAssociationList $resource_share_associations;

  public function __construct(shape(
    ?'next_token' => string,
    ?'resource_share_associations' => ?ResourceShareAssociationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_share_associations = $s['resource_share_associations'] ?? vec[];
  }
}

class GetResourceShareInvitationsRequest {
  public ?MaxResults $max_results;
  public string $next_token;
  public ?ResourceShareArnList $resource_share_arns;
  public ?ResourceShareInvitationArnList $resource_share_invitation_arns;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'resource_share_arns' => ?ResourceShareArnList,
    ?'resource_share_invitation_arns' => ?ResourceShareInvitationArnList,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_share_arns = $s['resource_share_arns'] ?? vec[];
    $this->resource_share_invitation_arns = $s['resource_share_invitation_arns'] ?? vec[];
  }
}

class GetResourceShareInvitationsResponse {
  public string $next_token;
  public ?ResourceShareInvitationList $resource_share_invitations;

  public function __construct(shape(
    ?'next_token' => string,
    ?'resource_share_invitations' => ?ResourceShareInvitationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_share_invitations = $s['resource_share_invitations'] ?? vec[];
  }
}

class GetResourceSharesRequest {
  public ?MaxResults $max_results;
  public string $name;
  public string $next_token;
  public ?ResourceOwner $resource_owner;
  public ?ResourceShareArnList $resource_share_arns;
  public ?ResourceShareStatus $resource_share_status;
  public ?TagFilters $tag_filters;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'name' => string,
    ?'next_token' => string,
    ?'resource_owner' => ?ResourceOwner,
    ?'resource_share_arns' => ?ResourceShareArnList,
    ?'resource_share_status' => ?ResourceShareStatus,
    ?'tag_filters' => ?TagFilters,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_owner = $s['resource_owner'] ?? '';
    $this->resource_share_arns = $s['resource_share_arns'] ?? vec[];
    $this->resource_share_status = $s['resource_share_status'] ?? '';
    $this->tag_filters = $s['tag_filters'] ?? vec[];
  }
}

class GetResourceSharesResponse {
  public string $next_token;
  public ?ResourceShareList $resource_shares;

  public function __construct(shape(
    ?'next_token' => string,
    ?'resource_shares' => ?ResourceShareList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_shares = $s['resource_shares'] ?? vec[];
  }
}

class IdempotentParameterMismatchException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Integer = int;

class InvalidClientTokenException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidMaxResultsException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidResourceTypeException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidStateTransitionException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListPendingInvitationResourcesRequest {
  public ?MaxResults $max_results;
  public string $next_token;
  public string $resource_share_invitation_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'resource_share_invitation_arn' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_share_invitation_arn = $s['resource_share_invitation_arn'] ?? '';
  }
}

class ListPendingInvitationResourcesResponse {
  public string $next_token;
  public ?ResourceList $resources;

  public function __construct(shape(
    ?'next_token' => string,
    ?'resources' => ?ResourceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
  }
}

class ListPermissionsRequest {
  public ?MaxResults $max_results;
  public string $next_token;
  public string $resource_type;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListPermissionsResponse {
  public string $next_token;
  public ?ResourceSharePermissionList $permissions;

  public function __construct(shape(
    ?'next_token' => string,
    ?'permissions' => ?ResourceSharePermissionList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
  }
}

class ListPrincipalsRequest {
  public ?MaxResults $max_results;
  public string $next_token;
  public ?PrincipalArnOrIdList $principals;
  public string $resource_arn;
  public ?ResourceOwner $resource_owner;
  public ?ResourceShareArnList $resource_share_arns;
  public string $resource_type;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'principals' => ?PrincipalArnOrIdList,
    ?'resource_arn' => string,
    ?'resource_owner' => ?ResourceOwner,
    ?'resource_share_arns' => ?ResourceShareArnList,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->principals = $s['principals'] ?? vec[];
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_owner = $s['resource_owner'] ?? '';
    $this->resource_share_arns = $s['resource_share_arns'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListPrincipalsResponse {
  public string $next_token;
  public ?PrincipalList $principals;

  public function __construct(shape(
    ?'next_token' => string,
    ?'principals' => ?PrincipalList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->principals = $s['principals'] ?? vec[];
  }
}

class ListResourceSharePermissionsRequest {
  public ?MaxResults $max_results;
  public string $next_token;
  public string $resource_share_arn;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class ListResourceSharePermissionsResponse {
  public string $next_token;
  public ?ResourceSharePermissionList $permissions;

  public function __construct(shape(
    ?'next_token' => string,
    ?'permissions' => ?ResourceSharePermissionList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
  }
}

class ListResourceTypesRequest {
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResourceTypesResponse {
  public string $next_token;
  public ?ServiceNameAndResourceTypeList $resource_types;

  public function __construct(shape(
    ?'next_token' => string,
    ?'resource_types' => ?ServiceNameAndResourceTypeList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_types = $s['resource_types'] ?? vec[];
  }
}

class ListResourcesRequest {
  public ?MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public ?ResourceArnList $resource_arns;
  public ?ResourceOwner $resource_owner;
  public ?ResourceShareArnList $resource_share_arns;
  public string $resource_type;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'principal' => string,
    ?'resource_arns' => ?ResourceArnList,
    ?'resource_owner' => ?ResourceOwner,
    ?'resource_share_arns' => ?ResourceShareArnList,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->principal = $s['principal'] ?? '';
    $this->resource_arns = $s['resource_arns'] ?? vec[];
    $this->resource_owner = $s['resource_owner'] ?? '';
    $this->resource_share_arns = $s['resource_share_arns'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListResourcesResponse {
  public string $next_token;
  public ?ResourceList $resources;

  public function __construct(shape(
    ?'next_token' => string,
    ?'resources' => ?ResourceList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
  }
}

class MalformedArnException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type MaxResults = int;

class MissingRequiredParameterException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OperationNotPermittedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PermissionArnList = vec<String>;

type Policy = string;

type PolicyList = vec<Policy>;

class Principal {
  public ?DateTime $creation_time;
  public bool $external;
  public string $id;
  public ?DateTime $last_updated_time;
  public string $resource_share_arn;

  public function __construct(shape(
    ?'creation_time' => ?DateTime,
    ?'external' => bool,
    ?'id' => string,
    ?'last_updated_time' => ?DateTime,
    ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->external = $s['external'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

type PrincipalArnOrIdList = vec<String>;

type PrincipalList = vec<Principal>;

class PromoteResourceShareCreatedFromPolicyRequest {
  public string $resource_share_arn;

  public function __construct(shape(
    ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class PromoteResourceShareCreatedFromPolicyResponse {
  public bool $return_value;

  public function __construct(shape(
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->return_value = $s['return_value'] ?? false;
  }
}

class RejectResourceShareInvitationRequest {
  public string $client_token;
  public string $resource_share_invitation_arn;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share_invitation_arn' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share_invitation_arn = $s['resource_share_invitation_arn'] ?? '';
  }
}

class RejectResourceShareInvitationResponse {
  public string $client_token;
  public ?ResourceShareInvitation $resource_share_invitation;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share_invitation' => ?ResourceShareInvitation,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share_invitation = $s['resource_share_invitation'] ?? null;
  }
}

class Resource {
  public string $arn;
  public ?DateTime $creation_time;
  public ?DateTime $last_updated_time;
  public string $resource_group_arn;
  public string $resource_share_arn;
  public ?ResourceStatus $status;
  public string $status_message;
  public string $type;

  public function __construct(shape(
    ?'arn' => string,
    ?'creation_time' => ?DateTime,
    ?'last_updated_time' => ?DateTime,
    ?'resource_group_arn' => string,
    ?'resource_share_arn' => string,
    ?'status' => ?ResourceStatus,
    ?'status_message' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->resource_group_arn = $s['resource_group_arn'] ?? '';
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ResourceArnList = vec<String>;

class ResourceArnNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceList = vec<Resource>;

type ResourceOwner = string;

class ResourceShare {
  public bool $allow_external_principals;
  public ?DateTime $creation_time;
  public ?ResourceShareFeatureSet $feature_set;
  public ?DateTime $last_updated_time;
  public string $name;
  public string $owning_account_id;
  public string $resource_share_arn;
  public ?ResourceShareStatus $status;
  public string $status_message;
  public ?TagList $tags;

  public function __construct(shape(
    ?'allow_external_principals' => bool,
    ?'creation_time' => ?DateTime,
    ?'feature_set' => ?ResourceShareFeatureSet,
    ?'last_updated_time' => ?DateTime,
    ?'name' => string,
    ?'owning_account_id' => string,
    ?'resource_share_arn' => string,
    ?'status' => ?ResourceShareStatus,
    ?'status_message' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->allow_external_principals = $s['allow_external_principals'] ?? false;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->feature_set = $s['feature_set'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->owning_account_id = $s['owning_account_id'] ?? '';
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ResourceShareArnList = vec<String>;

class ResourceShareAssociation {
  public string $associated_entity;
  public ?ResourceShareAssociationType $association_type;
  public ?DateTime $creation_time;
  public bool $external;
  public ?DateTime $last_updated_time;
  public string $resource_share_arn;
  public string $resource_share_name;
  public ?ResourceShareAssociationStatus $status;
  public string $status_message;

  public function __construct(shape(
    ?'associated_entity' => string,
    ?'association_type' => ?ResourceShareAssociationType,
    ?'creation_time' => ?DateTime,
    ?'external' => bool,
    ?'last_updated_time' => ?DateTime,
    ?'resource_share_arn' => string,
    ?'resource_share_name' => string,
    ?'status' => ?ResourceShareAssociationStatus,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->associated_entity = $s['associated_entity'] ?? '';
    $this->association_type = $s['association_type'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->external = $s['external'] ?? false;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
    $this->resource_share_name = $s['resource_share_name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type ResourceShareAssociationList = vec<ResourceShareAssociation>;

type ResourceShareAssociationStatus = string;

type ResourceShareAssociationType = string;

type ResourceShareFeatureSet = string;

class ResourceShareInvitation {
  public ?DateTime $invitation_timestamp;
  public string $receiver_account_id;
  public string $resource_share_arn;
  public ?ResourceShareAssociationList $resource_share_associations;
  public string $resource_share_invitation_arn;
  public string $resource_share_name;
  public string $sender_account_id;
  public ?ResourceShareInvitationStatus $status;

  public function __construct(shape(
    ?'invitation_timestamp' => ?DateTime,
    ?'receiver_account_id' => string,
    ?'resource_share_arn' => string,
    ?'resource_share_associations' => ?ResourceShareAssociationList,
    ?'resource_share_invitation_arn' => string,
    ?'resource_share_name' => string,
    ?'sender_account_id' => string,
    ?'status' => ?ResourceShareInvitationStatus,
  ) $s = shape()) {
    $this->invitation_timestamp = $s['invitation_timestamp'] ?? 0;
    $this->receiver_account_id = $s['receiver_account_id'] ?? '';
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
    $this->resource_share_associations = $s['resource_share_associations'] ?? vec[];
    $this->resource_share_invitation_arn = $s['resource_share_invitation_arn'] ?? '';
    $this->resource_share_name = $s['resource_share_name'] ?? '';
    $this->sender_account_id = $s['sender_account_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ResourceShareInvitationAlreadyAcceptedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceShareInvitationAlreadyRejectedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceShareInvitationArnList = vec<String>;

class ResourceShareInvitationArnNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceShareInvitationExpiredException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceShareInvitationList = vec<ResourceShareInvitation>;

type ResourceShareInvitationStatus = string;

class ResourceShareLimitExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceShareList = vec<ResourceShare>;

class ResourceSharePermissionDetail {
  public string $arn;
  public ?DateTime $creation_time;
  public bool $default_version;
  public ?DateTime $last_updated_time;
  public string $name;
  public string $permission;
  public string $resource_type;
  public string $version;

  public function __construct(shape(
    ?'arn' => string,
    ?'creation_time' => ?DateTime,
    ?'default_version' => bool,
    ?'last_updated_time' => ?DateTime,
    ?'name' => string,
    ?'permission' => string,
    ?'resource_type' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->default_version = $s['default_version'] ?? false;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->permission = $s['permission'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type ResourceSharePermissionList = vec<ResourceSharePermissionSummary>;

class ResourceSharePermissionSummary {
  public string $arn;
  public ?DateTime $creation_time;
  public bool $default_version;
  public ?DateTime $last_updated_time;
  public string $name;
  public string $resource_type;
  public string $status;
  public string $version;

  public function __construct(shape(
    ?'arn' => string,
    ?'creation_time' => ?DateTime,
    ?'default_version' => bool,
    ?'last_updated_time' => ?DateTime,
    ?'name' => string,
    ?'resource_type' => string,
    ?'status' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->default_version = $s['default_version'] ?? false;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type ResourceShareStatus = string;

type ResourceStatus = string;

class ServerInternalException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ServiceNameAndResourceType {
  public string $resource_type;
  public string $service_name;

  public function __construct(shape(
    ?'resource_type' => string,
    ?'service_name' => string,
  ) $s = shape()) {
    $this->resource_type = $s['resource_type'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
  }
}

type ServiceNameAndResourceTypeList = vec<ServiceNameAndResourceType>;

class ServiceUnavailableException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type String = string;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class TagFilter {
  public ?TagKey $tag_key;
  public ?TagValueList $tag_values;

  public function __construct(shape(
    ?'tag_key' => ?TagKey,
    ?'tag_values' => ?TagValueList,
  ) $s = shape()) {
    $this->tag_key = $s['tag_key'] ?? '';
    $this->tag_values = $s['tag_values'] ?? vec[];
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
    $this->message = $s['message'] ?? '';
  }
}

type TagList = vec<Tag>;

class TagPolicyViolationException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class TagResourceRequest {
  public string $resource_share_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_share_arn' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
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
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public string $resource_share_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_share_arn' => string,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateResourceShareRequest {
  public bool $allow_external_principals;
  public string $client_token;
  public string $name;
  public string $resource_share_arn;

  public function __construct(shape(
    ?'allow_external_principals' => bool,
    ?'client_token' => string,
    ?'name' => string,
    ?'resource_share_arn' => string,
  ) $s = shape()) {
    $this->allow_external_principals = $s['allow_external_principals'] ?? false;
    $this->client_token = $s['client_token'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_share_arn = $s['resource_share_arn'] ?? '';
  }
}

class UpdateResourceShareResponse {
  public string $client_token;
  public ?ResourceShare $resource_share;

  public function __construct(shape(
    ?'client_token' => string,
    ?'resource_share' => ?ResourceShare,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->resource_share = $s['resource_share'] ?? null;
  }
}

