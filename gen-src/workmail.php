<?hh // strict
namespace slack\aws\workmail;

interface WorkMail {
  public function AssociateDelegateToResource(AssociateDelegateToResourceRequest): Awaitable<Errors\Result<AssociateDelegateToResourceResponse>>;
  public function AssociateMemberToGroup(AssociateMemberToGroupRequest): Awaitable<Errors\Result<AssociateMemberToGroupResponse>>;
  public function CreateAlias(CreateAliasRequest): Awaitable<Errors\Result<CreateAliasResponse>>;
  public function CreateGroup(CreateGroupRequest): Awaitable<Errors\Result<CreateGroupResponse>>;
  public function CreateResource(CreateResourceRequest): Awaitable<Errors\Result<CreateResourceResponse>>;
  public function CreateUser(CreateUserRequest): Awaitable<Errors\Result<CreateUserResponse>>;
  public function DeleteAccessControlRule(DeleteAccessControlRuleRequest): Awaitable<Errors\Result<DeleteAccessControlRuleResponse>>;
  public function DeleteAlias(DeleteAliasRequest): Awaitable<Errors\Result<DeleteAliasResponse>>;
  public function DeleteGroup(DeleteGroupRequest): Awaitable<Errors\Result<DeleteGroupResponse>>;
  public function DeleteMailboxPermissions(DeleteMailboxPermissionsRequest): Awaitable<Errors\Result<DeleteMailboxPermissionsResponse>>;
  public function DeleteResource(DeleteResourceRequest): Awaitable<Errors\Result<DeleteResourceResponse>>;
  public function DeleteUser(DeleteUserRequest): Awaitable<Errors\Result<DeleteUserResponse>>;
  public function DeregisterFromWorkMail(DeregisterFromWorkMailRequest): Awaitable<Errors\Result<DeregisterFromWorkMailResponse>>;
  public function DescribeGroup(DescribeGroupRequest): Awaitable<Errors\Result<DescribeGroupResponse>>;
  public function DescribeOrganization(DescribeOrganizationRequest): Awaitable<Errors\Result<DescribeOrganizationResponse>>;
  public function DescribeResource(DescribeResourceRequest): Awaitable<Errors\Result<DescribeResourceResponse>>;
  public function DescribeUser(DescribeUserRequest): Awaitable<Errors\Result<DescribeUserResponse>>;
  public function DisassociateDelegateFromResource(DisassociateDelegateFromResourceRequest): Awaitable<Errors\Result<DisassociateDelegateFromResourceResponse>>;
  public function DisassociateMemberFromGroup(DisassociateMemberFromGroupRequest): Awaitable<Errors\Result<DisassociateMemberFromGroupResponse>>;
  public function GetAccessControlEffect(GetAccessControlEffectRequest): Awaitable<Errors\Result<GetAccessControlEffectResponse>>;
  public function GetMailboxDetails(GetMailboxDetailsRequest): Awaitable<Errors\Result<GetMailboxDetailsResponse>>;
  public function ListAccessControlRules(ListAccessControlRulesRequest): Awaitable<Errors\Result<ListAccessControlRulesResponse>>;
  public function ListAliases(ListAliasesRequest): Awaitable<Errors\Result<ListAliasesResponse>>;
  public function ListGroupMembers(ListGroupMembersRequest): Awaitable<Errors\Result<ListGroupMembersResponse>>;
  public function ListGroups(ListGroupsRequest): Awaitable<Errors\Result<ListGroupsResponse>>;
  public function ListMailboxPermissions(ListMailboxPermissionsRequest): Awaitable<Errors\Result<ListMailboxPermissionsResponse>>;
  public function ListOrganizations(ListOrganizationsRequest): Awaitable<Errors\Result<ListOrganizationsResponse>>;
  public function ListResourceDelegates(ListResourceDelegatesRequest): Awaitable<Errors\Result<ListResourceDelegatesResponse>>;
  public function ListResources(ListResourcesRequest): Awaitable<Errors\Result<ListResourcesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function ListUsers(ListUsersRequest): Awaitable<Errors\Result<ListUsersResponse>>;
  public function PutAccessControlRule(PutAccessControlRuleRequest): Awaitable<Errors\Result<PutAccessControlRuleResponse>>;
  public function PutMailboxPermissions(PutMailboxPermissionsRequest): Awaitable<Errors\Result<PutMailboxPermissionsResponse>>;
  public function RegisterToWorkMail(RegisterToWorkMailRequest): Awaitable<Errors\Result<RegisterToWorkMailResponse>>;
  public function ResetPassword(ResetPasswordRequest): Awaitable<Errors\Result<ResetPasswordResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateMailboxQuota(UpdateMailboxQuotaRequest): Awaitable<Errors\Result<UpdateMailboxQuotaResponse>>;
  public function UpdatePrimaryEmailAddress(UpdatePrimaryEmailAddressRequest): Awaitable<Errors\Result<UpdatePrimaryEmailAddressResponse>>;
  public function UpdateResource(UpdateResourceRequest): Awaitable<Errors\Result<UpdateResourceResponse>>;
}

class AccessControlRule {
  public ActionsList $actions;
  public Timestamp $date_created;
  public Timestamp $date_modified;
  public AccessControlRuleDescription $description;
  public AccessControlRuleEffect $effect;
  public IpRangeList $ip_ranges;
  public AccessControlRuleName $name;
  public ActionsList $not_actions;
  public IpRangeList $not_ip_ranges;
  public UserIdList $not_user_ids;
  public UserIdList $user_ids;
}

class AccessControlRuleAction {
}

class AccessControlRuleDescription {
}

class AccessControlRuleEffect {
}

class AccessControlRuleName {
}

class AccessControlRuleNameList {
}

class AccessControlRulesList {
}

class ActionsList {
}

class Aliases {
}

class AmazonResourceName {
}

class AssociateDelegateToResourceRequest {
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
  public ResourceId $resource_id;
}

class AssociateDelegateToResourceResponse {
}

class AssociateMemberToGroupRequest {
  public WorkMailIdentifier $group_id;
  public WorkMailIdentifier $member_id;
  public OrganizationId $organization_id;
}

class AssociateMemberToGroupResponse {
}

class BookingOptions {
  public boolean $auto_accept_requests;
  public boolean $auto_decline_conflicting_requests;
  public boolean $auto_decline_recurring_requests;
}

class Boolean {
}

class CreateAliasRequest {
  public EmailAddress $alias;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
}

class CreateAliasResponse {
}

class CreateGroupRequest {
  public GroupName $name;
  public OrganizationId $organization_id;
}

class CreateGroupResponse {
  public WorkMailIdentifier $group_id;
}

class CreateResourceRequest {
  public ResourceName $name;
  public OrganizationId $organization_id;
  public ResourceType $type;
}

class CreateResourceResponse {
  public ResourceId $resource_id;
}

class CreateUserRequest {
  public string $display_name;
  public UserName $name;
  public OrganizationId $organization_id;
  public Password $password;
}

class CreateUserResponse {
  public WorkMailIdentifier $user_id;
}

class Delegate {
  public string $id;
  public MemberType $type;
}

class DeleteAccessControlRuleRequest {
  public AccessControlRuleName $name;
  public OrganizationId $organization_id;
}

class DeleteAccessControlRuleResponse {
}

class DeleteAliasRequest {
  public EmailAddress $alias;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
}

class DeleteAliasResponse {
}

class DeleteGroupRequest {
  public WorkMailIdentifier $group_id;
  public OrganizationId $organization_id;
}

class DeleteGroupResponse {
}

class DeleteMailboxPermissionsRequest {
  public WorkMailIdentifier $entity_id;
  public WorkMailIdentifier $grantee_id;
  public OrganizationId $organization_id;
}

class DeleteMailboxPermissionsResponse {
}

class DeleteResourceRequest {
  public OrganizationId $organization_id;
  public ResourceId $resource_id;
}

class DeleteResourceResponse {
}

class DeleteUserRequest {
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;
}

class DeleteUserResponse {
}

class DeregisterFromWorkMailRequest {
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
}

class DeregisterFromWorkMailResponse {
}

class DescribeGroupRequest {
  public WorkMailIdentifier $group_id;
  public OrganizationId $organization_id;
}

class DescribeGroupResponse {
  public Timestamp $disabled_date;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public WorkMailIdentifier $group_id;
  public GroupName $name;
  public EntityState $state;
}

class DescribeOrganizationRequest {
  public OrganizationId $organization_id;
}

class DescribeOrganizationResponse {
  public AmazonResourceName $arn;
  public OrganizationName $alias;
  public Timestamp $completed_date;
  public string $default_mail_domain;
  public string $directory_id;
  public string $directory_type;
  public string $error_message;
  public OrganizationId $organization_id;
  public string $state;
}

class DescribeResourceRequest {
  public OrganizationId $organization_id;
  public ResourceId $resource_id;
}

class DescribeResourceResponse {
  public BookingOptions $booking_options;
  public Timestamp $disabled_date;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public ResourceName $name;
  public ResourceId $resource_id;
  public EntityState $state;
  public ResourceType $type;
}

class DescribeUserRequest {
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;
}

class DescribeUserResponse {
  public Timestamp $disabled_date;
  public string $display_name;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public UserName $name;
  public EntityState $state;
  public WorkMailIdentifier $user_id;
  public UserRole $user_role;
}

class DirectoryServiceAuthenticationFailedException {
  public string $message;
}

class DirectoryUnavailableException {
  public string $message;
}

class DisassociateDelegateFromResourceRequest {
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
  public ResourceId $resource_id;
}

class DisassociateDelegateFromResourceResponse {
}

class DisassociateMemberFromGroupRequest {
  public WorkMailIdentifier $group_id;
  public WorkMailIdentifier $member_id;
  public OrganizationId $organization_id;
}

class DisassociateMemberFromGroupResponse {
}

class EmailAddress {
}

class EmailAddressInUseException {
  public string $message;
}

class EntityAlreadyRegisteredException {
  public string $message;
}

class EntityNotFoundException {
  public string $message;
}

class EntityState {
}

class EntityStateException {
  public string $message;
}

class GetAccessControlEffectRequest {
  public AccessControlRuleAction $action;
  public IpAddress $ip_address;
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;
}

class GetAccessControlEffectResponse {
  public AccessControlRuleEffect $effect;
  public AccessControlRuleNameList $matched_rules;
}

class GetMailboxDetailsRequest {
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;
}

class GetMailboxDetailsResponse {
  public MailboxQuota $mailbox_quota;
  public MailboxSize $mailbox_size;
}

class Group {
  public Timestamp $disabled_date;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public WorkMailIdentifier $id;
  public GroupName $name;
  public EntityState $state;
}

class GroupName {
}

class Groups {
}

class InvalidConfigurationException {
  public string $message;
}

class InvalidParameterException {
  public string $message;
}

class InvalidPasswordException {
  public string $message;
}

class IpAddress {
}

class IpRange {
}

class IpRangeList {
}

class LimitExceededException {
  public string $message;
}

class ListAccessControlRulesRequest {
  public OrganizationId $organization_id;
}

class ListAccessControlRulesResponse {
  public AccessControlRulesList $rules;
}

class ListAliasesRequest {
  public WorkMailIdentifier $entity_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
}

class ListAliasesResponse {
  public Aliases $aliases;
  public NextToken $next_token;
}

class ListGroupMembersRequest {
  public WorkMailIdentifier $group_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
}

class ListGroupMembersResponse {
  public Members $members;
  public NextToken $next_token;
}

class ListGroupsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
}

class ListGroupsResponse {
  public Groups $groups;
  public NextToken $next_token;
}

class ListMailboxPermissionsRequest {
  public WorkMailIdentifier $entity_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
}

class ListMailboxPermissionsResponse {
  public NextToken $next_token;
  public Permissions $permissions;
}

class ListOrganizationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListOrganizationsResponse {
  public NextToken $next_token;
  public OrganizationSummaries $organization_summaries;
}

class ListResourceDelegatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
  public WorkMailIdentifier $resource_id;
}

class ListResourceDelegatesResponse {
  public ResourceDelegates $delegates;
  public NextToken $next_token;
}

class ListResourcesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
}

class ListResourcesResponse {
  public NextToken $next_token;
  public Resources $resources;
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class ListUsersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
}

class ListUsersResponse {
  public NextToken $next_token;
  public Users $users;
}

class MailDomainNotFoundException {
  public string $message;
}

class MailDomainStateException {
  public string $message;
}

class MailboxQuota {
}

class MailboxSize {
}

class MaxResults {
}

class Member {
  public Timestamp $disabled_date;
  public Timestamp $enabled_date;
  public string $id;
  public string $name;
  public EntityState $state;
  public MemberType $type;
}

class MemberType {
}

class Members {
}

class NameAvailabilityException {
  public string $message;
}

class NextToken {
}

class OrganizationId {
}

class OrganizationName {
}

class OrganizationNotFoundException {
  public string $message;
}

class OrganizationStateException {
  public string $message;
}

class OrganizationSummaries {
}

class OrganizationSummary {
  public OrganizationName $alias;
  public string $error_message;
  public OrganizationId $organization_id;
  public string $state;
}

class Password {
}

class Permission {
  public WorkMailIdentifier $grantee_id;
  public MemberType $grantee_type;
  public PermissionValues $permission_values;
}

class PermissionType {
}

class PermissionValues {
}

class Permissions {
}

class PutAccessControlRuleRequest {
  public ActionsList $actions;
  public AccessControlRuleDescription $description;
  public AccessControlRuleEffect $effect;
  public IpRangeList $ip_ranges;
  public AccessControlRuleName $name;
  public ActionsList $not_actions;
  public IpRangeList $not_ip_ranges;
  public UserIdList $not_user_ids;
  public OrganizationId $organization_id;
  public UserIdList $user_ids;
}

class PutAccessControlRuleResponse {
}

class PutMailboxPermissionsRequest {
  public WorkMailIdentifier $entity_id;
  public WorkMailIdentifier $grantee_id;
  public OrganizationId $organization_id;
  public PermissionValues $permission_values;
}

class PutMailboxPermissionsResponse {
}

class RegisterToWorkMailRequest {
  public EmailAddress $email;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
}

class RegisterToWorkMailResponse {
}

class ReservedNameException {
  public string $message;
}

class ResetPasswordRequest {
  public OrganizationId $organization_id;
  public Password $password;
  public WorkMailIdentifier $user_id;
}

class ResetPasswordResponse {
}

class Resource {
  public Timestamp $disabled_date;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public WorkMailIdentifier $id;
  public ResourceName $name;
  public EntityState $state;
  public ResourceType $type;
}

class ResourceDelegates {
}

class ResourceId {
}

class ResourceName {
}

class ResourceNotFoundException {
  public string $message;
}

class ResourceType {
}

class Resources {
}

class String {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Timestamp {
}

class TooManyTagsException {
  public string $message;
}

class UnsupportedOperationException {
  public string $message;
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateMailboxQuotaRequest {
  public MailboxQuota $mailbox_quota;
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;
}

class UpdateMailboxQuotaResponse {
}

class UpdatePrimaryEmailAddressRequest {
  public EmailAddress $email;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
}

class UpdatePrimaryEmailAddressResponse {
}

class UpdateResourceRequest {
  public BookingOptions $booking_options;
  public ResourceName $name;
  public OrganizationId $organization_id;
  public ResourceId $resource_id;
}

class UpdateResourceResponse {
}

class User {
  public Timestamp $disabled_date;
  public string $display_name;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public WorkMailIdentifier $id;
  public UserName $name;
  public EntityState $state;
  public UserRole $user_role;
}

class UserIdList {
}

class UserName {
}

class UserRole {
}

class Users {
}

class WorkMailIdentifier {
}

