<?hh // strict
namespace slack\aws\workmail;

interface WorkMail {
  public function AssociateDelegateToResource(AssociateDelegateToResourceRequest $in): Awaitable<\Errors\Result<AssociateDelegateToResourceResponse>>;
  public function AssociateMemberToGroup(AssociateMemberToGroupRequest $in): Awaitable<\Errors\Result<AssociateMemberToGroupResponse>>;
  public function CreateAlias(CreateAliasRequest $in): Awaitable<\Errors\Result<CreateAliasResponse>>;
  public function CreateGroup(CreateGroupRequest $in): Awaitable<\Errors\Result<CreateGroupResponse>>;
  public function CreateResource(CreateResourceRequest $in): Awaitable<\Errors\Result<CreateResourceResponse>>;
  public function CreateUser(CreateUserRequest $in): Awaitable<\Errors\Result<CreateUserResponse>>;
  public function DeleteAccessControlRule(DeleteAccessControlRuleRequest $in): Awaitable<\Errors\Result<DeleteAccessControlRuleResponse>>;
  public function DeleteAlias(DeleteAliasRequest $in): Awaitable<\Errors\Result<DeleteAliasResponse>>;
  public function DeleteGroup(DeleteGroupRequest $in): Awaitable<\Errors\Result<DeleteGroupResponse>>;
  public function DeleteMailboxPermissions(DeleteMailboxPermissionsRequest $in): Awaitable<\Errors\Result<DeleteMailboxPermissionsResponse>>;
  public function DeleteResource(DeleteResourceRequest $in): Awaitable<\Errors\Result<DeleteResourceResponse>>;
  public function DeleteUser(DeleteUserRequest $in): Awaitable<\Errors\Result<DeleteUserResponse>>;
  public function DeregisterFromWorkMail(DeregisterFromWorkMailRequest $in): Awaitable<\Errors\Result<DeregisterFromWorkMailResponse>>;
  public function DescribeGroup(DescribeGroupRequest $in): Awaitable<\Errors\Result<DescribeGroupResponse>>;
  public function DescribeOrganization(DescribeOrganizationRequest $in): Awaitable<\Errors\Result<DescribeOrganizationResponse>>;
  public function DescribeResource(DescribeResourceRequest $in): Awaitable<\Errors\Result<DescribeResourceResponse>>;
  public function DescribeUser(DescribeUserRequest $in): Awaitable<\Errors\Result<DescribeUserResponse>>;
  public function DisassociateDelegateFromResource(DisassociateDelegateFromResourceRequest $in): Awaitable<\Errors\Result<DisassociateDelegateFromResourceResponse>>;
  public function DisassociateMemberFromGroup(DisassociateMemberFromGroupRequest $in): Awaitable<\Errors\Result<DisassociateMemberFromGroupResponse>>;
  public function GetAccessControlEffect(GetAccessControlEffectRequest $in): Awaitable<\Errors\Result<GetAccessControlEffectResponse>>;
  public function GetMailboxDetails(GetMailboxDetailsRequest $in): Awaitable<\Errors\Result<GetMailboxDetailsResponse>>;
  public function ListAccessControlRules(ListAccessControlRulesRequest $in): Awaitable<\Errors\Result<ListAccessControlRulesResponse>>;
  public function ListAliases(ListAliasesRequest $in): Awaitable<\Errors\Result<ListAliasesResponse>>;
  public function ListGroupMembers(ListGroupMembersRequest $in): Awaitable<\Errors\Result<ListGroupMembersResponse>>;
  public function ListGroups(ListGroupsRequest $in): Awaitable<\Errors\Result<ListGroupsResponse>>;
  public function ListMailboxPermissions(ListMailboxPermissionsRequest $in): Awaitable<\Errors\Result<ListMailboxPermissionsResponse>>;
  public function ListOrganizations(ListOrganizationsRequest $in): Awaitable<\Errors\Result<ListOrganizationsResponse>>;
  public function ListResourceDelegates(ListResourceDelegatesRequest $in): Awaitable<\Errors\Result<ListResourceDelegatesResponse>>;
  public function ListResources(ListResourcesRequest $in): Awaitable<\Errors\Result<ListResourcesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function ListUsers(ListUsersRequest $in): Awaitable<\Errors\Result<ListUsersResponse>>;
  public function PutAccessControlRule(PutAccessControlRuleRequest $in): Awaitable<\Errors\Result<PutAccessControlRuleResponse>>;
  public function PutMailboxPermissions(PutMailboxPermissionsRequest $in): Awaitable<\Errors\Result<PutMailboxPermissionsResponse>>;
  public function RegisterToWorkMail(RegisterToWorkMailRequest $in): Awaitable<\Errors\Result<RegisterToWorkMailResponse>>;
  public function ResetPassword(ResetPasswordRequest $in): Awaitable<\Errors\Result<ResetPasswordResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateMailboxQuota(UpdateMailboxQuotaRequest $in): Awaitable<\Errors\Result<UpdateMailboxQuotaResponse>>;
  public function UpdatePrimaryEmailAddress(UpdatePrimaryEmailAddressRequest $in): Awaitable<\Errors\Result<UpdatePrimaryEmailAddressResponse>>;
  public function UpdateResource(UpdateResourceRequest $in): Awaitable<\Errors\Result<UpdateResourceResponse>>;
}

class AccessControlRule {
  public ?ActionsList $actions;
  public ?Timestamp $date_created;
  public ?Timestamp $date_modified;
  public ?AccessControlRuleDescription $description;
  public ?AccessControlRuleEffect $effect;
  public ?IpRangeList $ip_ranges;
  public ?AccessControlRuleName $name;
  public ?ActionsList $not_actions;
  public ?IpRangeList $not_ip_ranges;
  public ?UserIdList $not_user_ids;
  public ?UserIdList $user_ids;

  public function __construct(shape(
    ?'actions' => ?ActionsList,
    ?'date_created' => ?Timestamp,
    ?'date_modified' => ?Timestamp,
    ?'description' => ?AccessControlRuleDescription,
    ?'effect' => ?AccessControlRuleEffect,
    ?'ip_ranges' => ?IpRangeList,
    ?'name' => ?AccessControlRuleName,
    ?'not_actions' => ?ActionsList,
    ?'not_ip_ranges' => ?IpRangeList,
    ?'not_user_ids' => ?UserIdList,
    ?'user_ids' => ?UserIdList,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->date_created = $s['date_created'] ?? 0;
    $this->date_modified = $s['date_modified'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->effect = $s['effect'] ?? '';
    $this->ip_ranges = $s['ip_ranges'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->not_actions = $s['not_actions'] ?? vec[];
    $this->not_ip_ranges = $s['not_ip_ranges'] ?? vec[];
    $this->not_user_ids = $s['not_user_ids'] ?? vec[];
    $this->user_ids = $s['user_ids'] ?? vec[];
  }
}

type AccessControlRuleAction = string;

type AccessControlRuleDescription = string;

type AccessControlRuleEffect = string;

type AccessControlRuleName = string;

type AccessControlRuleNameList = vec<AccessControlRuleName>;

type AccessControlRulesList = vec<AccessControlRule>;

type ActionsList = vec<AccessControlRuleAction>;

type Aliases = vec<EmailAddress>;

type AmazonResourceName = string;

class AssociateDelegateToResourceRequest {
  public ?WorkMailIdentifier $entity_id;
  public ?OrganizationId $organization_id;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'entity_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class AssociateDelegateToResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateMemberToGroupRequest {
  public ?WorkMailIdentifier $group_id;
  public ?WorkMailIdentifier $member_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'group_id' => ?WorkMailIdentifier,
    ?'member_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->member_id = $s['member_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class AssociateMemberToGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BookingOptions {
  public bool $auto_accept_requests;
  public bool $auto_decline_conflicting_requests;
  public bool $auto_decline_recurring_requests;

  public function __construct(shape(
    ?'auto_accept_requests' => bool,
    ?'auto_decline_conflicting_requests' => bool,
    ?'auto_decline_recurring_requests' => bool,
  ) $s = shape()) {
    $this->auto_accept_requests = $s['auto_accept_requests'] ?? false;
    $this->auto_decline_conflicting_requests = $s['auto_decline_conflicting_requests'] ?? false;
    $this->auto_decline_recurring_requests = $s['auto_decline_recurring_requests'] ?? false;
  }
}

type Boolean = bool;

class CreateAliasRequest {
  public ?EmailAddress $alias;
  public ?WorkMailIdentifier $entity_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'alias' => ?EmailAddress,
    ?'entity_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? '';
    $this->entity_id = $s['entity_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class CreateAliasResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateGroupRequest {
  public ?GroupName $name;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'name' => ?GroupName,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class CreateGroupResponse {
  public ?WorkMailIdentifier $group_id;

  public function __construct(shape(
    ?'group_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class CreateResourceRequest {
  public ?ResourceName $name;
  public ?OrganizationId $organization_id;
  public ?ResourceType $type;

  public function __construct(shape(
    ?'name' => ?ResourceName,
    ?'organization_id' => ?OrganizationId,
    ?'type' => ?ResourceType,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreateResourceResponse {
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class CreateUserRequest {
  public string $display_name;
  public ?UserName $name;
  public ?OrganizationId $organization_id;
  public ?Password $password;

  public function __construct(shape(
    ?'display_name' => string,
    ?'name' => ?UserName,
    ?'organization_id' => ?OrganizationId,
    ?'password' => ?Password,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->password = $s['password'] ?? '';
  }
}

class CreateUserResponse {
  public ?WorkMailIdentifier $user_id;

  public function __construct(shape(
    ?'user_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->user_id = $s['user_id'] ?? '';
  }
}

class Delegate {
  public string $id;
  public ?MemberType $type;

  public function __construct(shape(
    ?'id' => string,
    ?'type' => ?MemberType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class DeleteAccessControlRuleRequest {
  public ?AccessControlRuleName $name;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'name' => ?AccessControlRuleName,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DeleteAccessControlRuleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAliasRequest {
  public ?EmailAddress $alias;
  public ?WorkMailIdentifier $entity_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'alias' => ?EmailAddress,
    ?'entity_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? '';
    $this->entity_id = $s['entity_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DeleteAliasResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteGroupRequest {
  public ?WorkMailIdentifier $group_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'group_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DeleteGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteMailboxPermissionsRequest {
  public ?WorkMailIdentifier $entity_id;
  public ?WorkMailIdentifier $grantee_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'entity_id' => ?WorkMailIdentifier,
    ?'grantee_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->grantee_id = $s['grantee_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DeleteMailboxPermissionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteResourceRequest {
  public ?OrganizationId $organization_id;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class DeleteResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUserRequest {
  public ?OrganizationId $organization_id;
  public ?WorkMailIdentifier $user_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
    ?'user_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class DeleteUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterFromWorkMailRequest {
  public ?WorkMailIdentifier $entity_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'entity_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DeregisterFromWorkMailResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeGroupRequest {
  public ?WorkMailIdentifier $group_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'group_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DescribeGroupResponse {
  public ?Timestamp $disabled_date;
  public ?EmailAddress $email;
  public ?Timestamp $enabled_date;
  public ?WorkMailIdentifier $group_id;
  public ?GroupName $name;
  public ?EntityState $state;

  public function __construct(shape(
    ?'disabled_date' => ?Timestamp,
    ?'email' => ?EmailAddress,
    ?'enabled_date' => ?Timestamp,
    ?'group_id' => ?WorkMailIdentifier,
    ?'name' => ?GroupName,
    ?'state' => ?EntityState,
  ) $s = shape()) {
    $this->disabled_date = $s['disabled_date'] ?? 0;
    $this->email = $s['email'] ?? '';
    $this->enabled_date = $s['enabled_date'] ?? 0;
    $this->group_id = $s['group_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class DescribeOrganizationRequest {
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DescribeOrganizationResponse {
  public ?AmazonResourceName $arn;
  public ?OrganizationName $alias;
  public ?Timestamp $completed_date;
  public string $default_mail_domain;
  public string $directory_id;
  public string $directory_type;
  public string $error_message;
  public ?OrganizationId $organization_id;
  public string $state;

  public function __construct(shape(
    ?'arn' => ?AmazonResourceName,
    ?'alias' => ?OrganizationName,
    ?'completed_date' => ?Timestamp,
    ?'default_mail_domain' => string,
    ?'directory_id' => string,
    ?'directory_type' => string,
    ?'error_message' => string,
    ?'organization_id' => ?OrganizationId,
    ?'state' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->alias = $s['alias'] ?? '';
    $this->completed_date = $s['completed_date'] ?? 0;
    $this->default_mail_domain = $s['default_mail_domain'] ?? '';
    $this->directory_id = $s['directory_id'] ?? '';
    $this->directory_type = $s['directory_type'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class DescribeResourceRequest {
  public ?OrganizationId $organization_id;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class DescribeResourceResponse {
  public ?BookingOptions $booking_options;
  public ?Timestamp $disabled_date;
  public ?EmailAddress $email;
  public ?Timestamp $enabled_date;
  public ?ResourceName $name;
  public ?ResourceId $resource_id;
  public ?EntityState $state;
  public ?ResourceType $type;

  public function __construct(shape(
    ?'booking_options' => ?BookingOptions,
    ?'disabled_date' => ?Timestamp,
    ?'email' => ?EmailAddress,
    ?'enabled_date' => ?Timestamp,
    ?'name' => ?ResourceName,
    ?'resource_id' => ?ResourceId,
    ?'state' => ?EntityState,
    ?'type' => ?ResourceType,
  ) $s = shape()) {
    $this->booking_options = $s['booking_options'] ?? null;
    $this->disabled_date = $s['disabled_date'] ?? 0;
    $this->email = $s['email'] ?? '';
    $this->enabled_date = $s['enabled_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class DescribeUserRequest {
  public ?OrganizationId $organization_id;
  public ?WorkMailIdentifier $user_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
    ?'user_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class DescribeUserResponse {
  public ?Timestamp $disabled_date;
  public string $display_name;
  public ?EmailAddress $email;
  public ?Timestamp $enabled_date;
  public ?UserName $name;
  public ?EntityState $state;
  public ?WorkMailIdentifier $user_id;
  public ?UserRole $user_role;

  public function __construct(shape(
    ?'disabled_date' => ?Timestamp,
    ?'display_name' => string,
    ?'email' => ?EmailAddress,
    ?'enabled_date' => ?Timestamp,
    ?'name' => ?UserName,
    ?'state' => ?EntityState,
    ?'user_id' => ?WorkMailIdentifier,
    ?'user_role' => ?UserRole,
  ) $s = shape()) {
    $this->disabled_date = $s['disabled_date'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->enabled_date = $s['enabled_date'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
    $this->user_role = $s['user_role'] ?? '';
  }
}

class DirectoryServiceAuthenticationFailedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DirectoryUnavailableException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DisassociateDelegateFromResourceRequest {
  public ?WorkMailIdentifier $entity_id;
  public ?OrganizationId $organization_id;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'entity_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class DisassociateDelegateFromResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateMemberFromGroupRequest {
  public ?WorkMailIdentifier $group_id;
  public ?WorkMailIdentifier $member_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'group_id' => ?WorkMailIdentifier,
    ?'member_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->member_id = $s['member_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class DisassociateMemberFromGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EmailAddress = string;

class EmailAddressInUseException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class EntityAlreadyRegisteredException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class EntityNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type EntityState = string;

class EntityStateException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class GetAccessControlEffectRequest {
  public ?AccessControlRuleAction $action;
  public ?IpAddress $ip_address;
  public ?OrganizationId $organization_id;
  public ?WorkMailIdentifier $user_id;

  public function __construct(shape(
    ?'action' => ?AccessControlRuleAction,
    ?'ip_address' => ?IpAddress,
    ?'organization_id' => ?OrganizationId,
    ?'user_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class GetAccessControlEffectResponse {
  public ?AccessControlRuleEffect $effect;
  public ?AccessControlRuleNameList $matched_rules;

  public function __construct(shape(
    ?'effect' => ?AccessControlRuleEffect,
    ?'matched_rules' => ?AccessControlRuleNameList,
  ) $s = shape()) {
    $this->effect = $s['effect'] ?? '';
    $this->matched_rules = $s['matched_rules'] ?? vec[];
  }
}

class GetMailboxDetailsRequest {
  public ?OrganizationId $organization_id;
  public ?WorkMailIdentifier $user_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
    ?'user_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class GetMailboxDetailsResponse {
  public ?MailboxQuota $mailbox_quota;
  public ?MailboxSize $mailbox_size;

  public function __construct(shape(
    ?'mailbox_quota' => ?MailboxQuota,
    ?'mailbox_size' => ?MailboxSize,
  ) $s = shape()) {
    $this->mailbox_quota = $s['mailbox_quota'] ?? 0;
    $this->mailbox_size = $s['mailbox_size'] ?? 0.0;
  }
}

class Group {
  public ?Timestamp $disabled_date;
  public ?EmailAddress $email;
  public ?Timestamp $enabled_date;
  public ?WorkMailIdentifier $id;
  public ?GroupName $name;
  public ?EntityState $state;

  public function __construct(shape(
    ?'disabled_date' => ?Timestamp,
    ?'email' => ?EmailAddress,
    ?'enabled_date' => ?Timestamp,
    ?'id' => ?WorkMailIdentifier,
    ?'name' => ?GroupName,
    ?'state' => ?EntityState,
  ) $s = shape()) {
    $this->disabled_date = $s['disabled_date'] ?? 0;
    $this->email = $s['email'] ?? '';
    $this->enabled_date = $s['enabled_date'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type GroupName = string;

type Groups = vec<Group>;

class InvalidConfigurationException {
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

class InvalidPasswordException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type IpAddress = string;

type IpRange = string;

type IpRangeList = vec<IpRange>;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListAccessControlRulesRequest {
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class ListAccessControlRulesResponse {
  public ?AccessControlRulesList $rules;

  public function __construct(shape(
    ?'rules' => ?AccessControlRulesList,
  ) $s = shape()) {
    $this->rules = $s['rules'] ?? vec[];
  }
}

class ListAliasesRequest {
  public ?WorkMailIdentifier $entity_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'entity_id' => ?WorkMailIdentifier,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class ListAliasesResponse {
  public ?Aliases $aliases;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'aliases' => ?Aliases,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->aliases = $s['aliases'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGroupMembersRequest {
  public ?WorkMailIdentifier $group_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'group_id' => ?WorkMailIdentifier,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class ListGroupMembersResponse {
  public ?Members $members;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'members' => ?Members,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->members = $s['members'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListGroupsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class ListGroupsResponse {
  public ?Groups $groups;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'groups' => ?Groups,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListMailboxPermissionsRequest {
  public ?WorkMailIdentifier $entity_id;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'entity_id' => ?WorkMailIdentifier,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class ListMailboxPermissionsResponse {
  public ?NextToken $next_token;
  public ?Permissions $permissions;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'permissions' => ?Permissions,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
  }
}

class ListOrganizationsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListOrganizationsResponse {
  public ?NextToken $next_token;
  public ?OrganizationSummaries $organization_summaries;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'organization_summaries' => ?OrganizationSummaries,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_summaries = $s['organization_summaries'] ?? vec[];
  }
}

class ListResourceDelegatesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?OrganizationId $organization_id;
  public ?WorkMailIdentifier $resource_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'organization_id' => ?OrganizationId,
    ?'resource_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class ListResourceDelegatesResponse {
  public ?ResourceDelegates $delegates;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'delegates' => ?ResourceDelegates,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->delegates = $s['delegates'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListResourcesRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class ListResourcesResponse {
  public ?NextToken $next_token;
  public ?Resources $resources;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'resources' => ?Resources,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
  }
}

class ListTagsForResourceRequest {
  public ?AmazonResourceName $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagList $tags;

  public function __construct(shape(
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListUsersRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class ListUsersResponse {
  public ?NextToken $next_token;
  public ?Users $users;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'users' => ?Users,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->users = $s['users'] ?? vec[];
  }
}

class MailDomainNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class MailDomainStateException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type MailboxQuota = int;

type MailboxSize = float;

type MaxResults = int;

class Member {
  public ?Timestamp $disabled_date;
  public ?Timestamp $enabled_date;
  public string $id;
  public string $name;
  public ?EntityState $state;
  public ?MemberType $type;

  public function __construct(shape(
    ?'disabled_date' => ?Timestamp,
    ?'enabled_date' => ?Timestamp,
    ?'id' => string,
    ?'name' => string,
    ?'state' => ?EntityState,
    ?'type' => ?MemberType,
  ) $s = shape()) {
    $this->disabled_date = $s['disabled_date'] ?? 0;
    $this->enabled_date = $s['enabled_date'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type MemberType = string;

type Members = vec<Member>;

class NameAvailabilityException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NextToken = string;

type OrganizationId = string;

type OrganizationName = string;

class OrganizationNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class OrganizationStateException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OrganizationSummaries = vec<OrganizationSummary>;

class OrganizationSummary {
  public ?OrganizationName $alias;
  public string $error_message;
  public ?OrganizationId $organization_id;
  public string $state;

  public function __construct(shape(
    ?'alias' => ?OrganizationName,
    ?'error_message' => string,
    ?'organization_id' => ?OrganizationId,
    ?'state' => string,
  ) $s = shape()) {
    $this->alias = $s['alias'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type Password = string;

class Permission {
  public ?WorkMailIdentifier $grantee_id;
  public ?MemberType $grantee_type;
  public ?PermissionValues $permission_values;

  public function __construct(shape(
    ?'grantee_id' => ?WorkMailIdentifier,
    ?'grantee_type' => ?MemberType,
    ?'permission_values' => ?PermissionValues,
  ) $s = shape()) {
    $this->grantee_id = $s['grantee_id'] ?? '';
    $this->grantee_type = $s['grantee_type'] ?? '';
    $this->permission_values = $s['permission_values'] ?? vec[];
  }
}

type PermissionType = string;

type PermissionValues = vec<PermissionType>;

type Permissions = vec<Permission>;

class PutAccessControlRuleRequest {
  public ?ActionsList $actions;
  public ?AccessControlRuleDescription $description;
  public ?AccessControlRuleEffect $effect;
  public ?IpRangeList $ip_ranges;
  public ?AccessControlRuleName $name;
  public ?ActionsList $not_actions;
  public ?IpRangeList $not_ip_ranges;
  public ?UserIdList $not_user_ids;
  public ?OrganizationId $organization_id;
  public ?UserIdList $user_ids;

  public function __construct(shape(
    ?'actions' => ?ActionsList,
    ?'description' => ?AccessControlRuleDescription,
    ?'effect' => ?AccessControlRuleEffect,
    ?'ip_ranges' => ?IpRangeList,
    ?'name' => ?AccessControlRuleName,
    ?'not_actions' => ?ActionsList,
    ?'not_ip_ranges' => ?IpRangeList,
    ?'not_user_ids' => ?UserIdList,
    ?'organization_id' => ?OrganizationId,
    ?'user_ids' => ?UserIdList,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->effect = $s['effect'] ?? '';
    $this->ip_ranges = $s['ip_ranges'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->not_actions = $s['not_actions'] ?? vec[];
    $this->not_ip_ranges = $s['not_ip_ranges'] ?? vec[];
    $this->not_user_ids = $s['not_user_ids'] ?? vec[];
    $this->organization_id = $s['organization_id'] ?? '';
    $this->user_ids = $s['user_ids'] ?? vec[];
  }
}

class PutAccessControlRuleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutMailboxPermissionsRequest {
  public ?WorkMailIdentifier $entity_id;
  public ?WorkMailIdentifier $grantee_id;
  public ?OrganizationId $organization_id;
  public ?PermissionValues $permission_values;

  public function __construct(shape(
    ?'entity_id' => ?WorkMailIdentifier,
    ?'grantee_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
    ?'permission_values' => ?PermissionValues,
  ) $s = shape()) {
    $this->entity_id = $s['entity_id'] ?? '';
    $this->grantee_id = $s['grantee_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->permission_values = $s['permission_values'] ?? vec[];
  }
}

class PutMailboxPermissionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RegisterToWorkMailRequest {
  public ?EmailAddress $email;
  public ?WorkMailIdentifier $entity_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'email' => ?EmailAddress,
    ?'entity_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->email = $s['email'] ?? '';
    $this->entity_id = $s['entity_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class RegisterToWorkMailResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ReservedNameException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResetPasswordRequest {
  public ?OrganizationId $organization_id;
  public ?Password $password;
  public ?WorkMailIdentifier $user_id;

  public function __construct(shape(
    ?'organization_id' => ?OrganizationId,
    ?'password' => ?Password,
    ?'user_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $s['organization_id'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class ResetPasswordResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Resource {
  public ?Timestamp $disabled_date;
  public ?EmailAddress $email;
  public ?Timestamp $enabled_date;
  public ?WorkMailIdentifier $id;
  public ?ResourceName $name;
  public ?EntityState $state;
  public ?ResourceType $type;

  public function __construct(shape(
    ?'disabled_date' => ?Timestamp,
    ?'email' => ?EmailAddress,
    ?'enabled_date' => ?Timestamp,
    ?'id' => ?WorkMailIdentifier,
    ?'name' => ?ResourceName,
    ?'state' => ?EntityState,
    ?'type' => ?ResourceType,
  ) $s = shape()) {
    $this->disabled_date = $s['disabled_date'] ?? 0;
    $this->email = $s['email'] ?? '';
    $this->enabled_date = $s['enabled_date'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ResourceDelegates = vec<Delegate>;

type ResourceId = string;

type ResourceName = string;

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ResourceType = string;

type Resources = vec<Resource>;

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

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

type Timestamp = int;

class TooManyTagsException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnsupportedOperationException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UntagResourceRequest {
  public ?AmazonResourceName $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?AmazonResourceName,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateMailboxQuotaRequest {
  public ?MailboxQuota $mailbox_quota;
  public ?OrganizationId $organization_id;
  public ?WorkMailIdentifier $user_id;

  public function __construct(shape(
    ?'mailbox_quota' => ?MailboxQuota,
    ?'organization_id' => ?OrganizationId,
    ?'user_id' => ?WorkMailIdentifier,
  ) $s = shape()) {
    $this->mailbox_quota = $s['mailbox_quota'] ?? 0;
    $this->organization_id = $s['organization_id'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class UpdateMailboxQuotaResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdatePrimaryEmailAddressRequest {
  public ?EmailAddress $email;
  public ?WorkMailIdentifier $entity_id;
  public ?OrganizationId $organization_id;

  public function __construct(shape(
    ?'email' => ?EmailAddress,
    ?'entity_id' => ?WorkMailIdentifier,
    ?'organization_id' => ?OrganizationId,
  ) $s = shape()) {
    $this->email = $s['email'] ?? '';
    $this->entity_id = $s['entity_id'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
  }
}

class UpdatePrimaryEmailAddressResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateResourceRequest {
  public ?BookingOptions $booking_options;
  public ?ResourceName $name;
  public ?OrganizationId $organization_id;
  public ?ResourceId $resource_id;

  public function __construct(shape(
    ?'booking_options' => ?BookingOptions,
    ?'name' => ?ResourceName,
    ?'organization_id' => ?OrganizationId,
    ?'resource_id' => ?ResourceId,
  ) $s = shape()) {
    $this->booking_options = $s['booking_options'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->organization_id = $s['organization_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class UpdateResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class User {
  public ?Timestamp $disabled_date;
  public string $display_name;
  public ?EmailAddress $email;
  public ?Timestamp $enabled_date;
  public ?WorkMailIdentifier $id;
  public ?UserName $name;
  public ?EntityState $state;
  public ?UserRole $user_role;

  public function __construct(shape(
    ?'disabled_date' => ?Timestamp,
    ?'display_name' => string,
    ?'email' => ?EmailAddress,
    ?'enabled_date' => ?Timestamp,
    ?'id' => ?WorkMailIdentifier,
    ?'name' => ?UserName,
    ?'state' => ?EntityState,
    ?'user_role' => ?UserRole,
  ) $s = shape()) {
    $this->disabled_date = $s['disabled_date'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->enabled_date = $s['enabled_date'] ?? 0;
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->user_role = $s['user_role'] ?? '';
  }
}

type UserIdList = vec<WorkMailIdentifier>;

type UserName = string;

type UserRole = string;

type Users = vec<User>;

type WorkMailIdentifier = string;

