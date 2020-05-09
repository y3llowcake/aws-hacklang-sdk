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
}

class AcceptResourceShareInvitationResponse {
  public string $client_token;
  public ResourceShareInvitation $resource_share_invitation;
}

class AssociateResourceSharePermissionRequest {
  public string $client_token;
  public string $permission_arn;
  public boolean $replace;
  public string $resource_share_arn;
}

class AssociateResourceSharePermissionResponse {
  public string $client_token;
  public boolean $return_value;
}

class AssociateResourceShareRequest {
  public string $client_token;
  public PrincipalArnOrIdList $principals;
  public ResourceArnList $resource_arns;
  public string $resource_share_arn;
}

class AssociateResourceShareResponse {
  public string $client_token;
  public ResourceShareAssociationList $resource_share_associations;
}

class Boolean {
}

class CreateResourceShareRequest {
  public boolean $allow_external_principals;
  public string $client_token;
  public string $name;
  public PermissionArnList $permission_arns;
  public PrincipalArnOrIdList $principals;
  public ResourceArnList $resource_arns;
  public TagList $tags;
}

class CreateResourceShareResponse {
  public string $client_token;
  public ResourceShare $resource_share;
}

class DateTime {
}

class DeleteResourceShareRequest {
  public string $client_token;
  public string $resource_share_arn;
}

class DeleteResourceShareResponse {
  public string $client_token;
  public boolean $return_value;
}

class DisassociateResourceSharePermissionRequest {
  public string $client_token;
  public string $permission_arn;
  public string $resource_share_arn;
}

class DisassociateResourceSharePermissionResponse {
  public string $client_token;
  public boolean $return_value;
}

class DisassociateResourceShareRequest {
  public string $client_token;
  public PrincipalArnOrIdList $principals;
  public ResourceArnList $resource_arns;
  public string $resource_share_arn;
}

class DisassociateResourceShareResponse {
  public string $client_token;
  public ResourceShareAssociationList $resource_share_associations;
}

class EnableSharingWithAwsOrganizationRequest {
}

class EnableSharingWithAwsOrganizationResponse {
  public boolean $return_value;
}

class GetPermissionRequest {
  public string $permission_arn;
  public int $permission_version;
}

class GetPermissionResponse {
  public ResourceSharePermissionDetail $permission;
}

class GetResourcePoliciesRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public ResourceArnList $resource_arns;
}

class GetResourcePoliciesResponse {
  public string $next_token;
  public PolicyList $policies;
}

class GetResourceShareAssociationsRequest {
  public ResourceShareAssociationStatus $association_status;
  public ResourceShareAssociationType $association_type;
  public MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public string $resource_arn;
  public ResourceShareArnList $resource_share_arns;
}

class GetResourceShareAssociationsResponse {
  public string $next_token;
  public ResourceShareAssociationList $resource_share_associations;
}

class GetResourceShareInvitationsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public ResourceShareArnList $resource_share_arns;
  public ResourceShareInvitationArnList $resource_share_invitation_arns;
}

class GetResourceShareInvitationsResponse {
  public string $next_token;
  public ResourceShareInvitationList $resource_share_invitations;
}

class GetResourceSharesRequest {
  public MaxResults $max_results;
  public string $name;
  public string $next_token;
  public ResourceOwner $resource_owner;
  public ResourceShareArnList $resource_share_arns;
  public ResourceShareStatus $resource_share_status;
  public TagFilters $tag_filters;
}

class GetResourceSharesResponse {
  public string $next_token;
  public ResourceShareList $resource_shares;
}

class IdempotentParameterMismatchException {
  public string $message;
}

class Integer {
}

class InvalidClientTokenException {
  public string $message;
}

class InvalidMaxResultsException {
  public string $message;
}

class InvalidNextTokenException {
  public string $message;
}

class InvalidParameterException {
  public string $message;
}

class InvalidResourceTypeException {
  public string $message;
}

class InvalidStateTransitionException {
  public string $message;
}

class ListPendingInvitationResourcesRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $resource_share_invitation_arn;
}

class ListPendingInvitationResourcesResponse {
  public string $next_token;
  public ResourceList $resources;
}

class ListPermissionsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $resource_type;
}

class ListPermissionsResponse {
  public string $next_token;
  public ResourceSharePermissionList $permissions;
}

class ListPrincipalsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public PrincipalArnOrIdList $principals;
  public string $resource_arn;
  public ResourceOwner $resource_owner;
  public ResourceShareArnList $resource_share_arns;
  public string $resource_type;
}

class ListPrincipalsResponse {
  public string $next_token;
  public PrincipalList $principals;
}

class ListResourceSharePermissionsRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $resource_share_arn;
}

class ListResourceSharePermissionsResponse {
  public string $next_token;
  public ResourceSharePermissionList $permissions;
}

class ListResourceTypesRequest {
  public MaxResults $max_results;
  public string $next_token;
}

class ListResourceTypesResponse {
  public string $next_token;
  public ServiceNameAndResourceTypeList $resource_types;
}

class ListResourcesRequest {
  public MaxResults $max_results;
  public string $next_token;
  public string $principal;
  public ResourceArnList $resource_arns;
  public ResourceOwner $resource_owner;
  public ResourceShareArnList $resource_share_arns;
  public string $resource_type;
}

class ListResourcesResponse {
  public string $next_token;
  public ResourceList $resources;
}

class MalformedArnException {
  public string $message;
}

class MaxResults {
}

class MissingRequiredParameterException {
  public string $message;
}

class OperationNotPermittedException {
  public string $message;
}

class PermissionArnList {
}

class Policy {
}

class PolicyList {
}

class Principal {
  public DateTime $creation_time;
  public boolean $external;
  public string $id;
  public DateTime $last_updated_time;
  public string $resource_share_arn;
}

class PrincipalArnOrIdList {
}

class PrincipalList {
}

class PromoteResourceShareCreatedFromPolicyRequest {
  public string $resource_share_arn;
}

class PromoteResourceShareCreatedFromPolicyResponse {
  public boolean $return_value;
}

class RejectResourceShareInvitationRequest {
  public string $client_token;
  public string $resource_share_invitation_arn;
}

class RejectResourceShareInvitationResponse {
  public string $client_token;
  public ResourceShareInvitation $resource_share_invitation;
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
}

class ResourceArnList {
}

class ResourceArnNotFoundException {
  public string $message;
}

class ResourceList {
}

class ResourceOwner {
}

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
}

class ResourceShareArnList {
}

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
}

class ResourceShareAssociationList {
}

class ResourceShareAssociationStatus {
}

class ResourceShareAssociationType {
}

class ResourceShareFeatureSet {
}

class ResourceShareInvitation {
  public DateTime $invitation_timestamp;
  public string $receiver_account_id;
  public string $resource_share_arn;
  public ResourceShareAssociationList $resource_share_associations;
  public string $resource_share_invitation_arn;
  public string $resource_share_name;
  public string $sender_account_id;
  public ResourceShareInvitationStatus $status;
}

class ResourceShareInvitationAlreadyAcceptedException {
  public string $message;
}

class ResourceShareInvitationAlreadyRejectedException {
  public string $message;
}

class ResourceShareInvitationArnList {
}

class ResourceShareInvitationArnNotFoundException {
  public string $message;
}

class ResourceShareInvitationExpiredException {
  public string $message;
}

class ResourceShareInvitationList {
}

class ResourceShareInvitationStatus {
}

class ResourceShareLimitExceededException {
  public string $message;
}

class ResourceShareList {
}

class ResourceSharePermissionDetail {
  public string $arn;
  public DateTime $creation_time;
  public boolean $default_version;
  public DateTime $last_updated_time;
  public string $name;
  public string $permission;
  public string $resource_type;
  public string $version;
}

class ResourceSharePermissionList {
}

class ResourceSharePermissionSummary {
  public string $arn;
  public DateTime $creation_time;
  public boolean $default_version;
  public DateTime $last_updated_time;
  public string $name;
  public string $resource_type;
  public string $status;
  public string $version;
}

class ResourceShareStatus {
}

class ResourceStatus {
}

class ServerInternalException {
  public string $message;
}

class ServiceNameAndResourceType {
  public string $resource_type;
  public string $service_name;
}

class ServiceNameAndResourceTypeList {
}

class ServiceUnavailableException {
  public string $message;
}

class String {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagFilter {
  public TagKey $tag_key;
  public TagValueList $tag_values;
}

class TagFilters {
}

class TagKey {
}

class TagKeyList {
}

class TagLimitExceededException {
  public string $message;
}

class TagList {
}

class TagPolicyViolationException {
  public string $message;
}

class TagResourceRequest {
  public string $resource_share_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TagValueList {
}

class UnknownResourceException {
  public string $message;
}

class UntagResourceRequest {
  public string $resource_share_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateResourceShareRequest {
  public boolean $allow_external_principals;
  public string $client_token;
  public string $name;
  public string $resource_share_arn;
}

class UpdateResourceShareResponse {
  public string $client_token;
  public ResourceShare $resource_share;
}

