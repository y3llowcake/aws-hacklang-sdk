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

  public function __construct(shape(
  ?'actions' => ActionsList,
  ?'date_created' => Timestamp,
  ?'date_modified' => Timestamp,
  ?'description' => AccessControlRuleDescription,
  ?'effect' => AccessControlRuleEffect,
  ?'ip_ranges' => IpRangeList,
  ?'name' => AccessControlRuleName,
  ?'not_actions' => ActionsList,
  ?'not_ip_ranges' => IpRangeList,
  ?'not_user_ids' => UserIdList,
  ?'user_ids' => UserIdList,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->date_created = $date_created ?? ;
    $this->date_modified = $date_modified ?? ;
    $this->description = $description ?? ;
    $this->effect = $effect ?? ;
    $this->ip_ranges = $ip_ranges ?? ;
    $this->name = $name ?? ;
    $this->not_actions = $not_actions ?? ;
    $this->not_ip_ranges = $not_ip_ranges ?? ;
    $this->not_user_ids = $not_user_ids ?? ;
    $this->user_ids = $user_ids ?? ;
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
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'entity_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->entity_id = $entity_id ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class AssociateDelegateToResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateMemberToGroupRequest {
  public WorkMailIdentifier $group_id;
  public WorkMailIdentifier $member_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'group_id' => WorkMailIdentifier,
  ?'member_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->member_id = $member_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class AssociateMemberToGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BookingOptions {
  public boolean $auto_accept_requests;
  public boolean $auto_decline_conflicting_requests;
  public boolean $auto_decline_recurring_requests;

  public function __construct(shape(
  ?'auto_accept_requests' => boolean,
  ?'auto_decline_conflicting_requests' => boolean,
  ?'auto_decline_recurring_requests' => boolean,
  ) $s = shape()) {
    $this->auto_accept_requests = $auto_accept_requests ?? ;
    $this->auto_decline_conflicting_requests = $auto_decline_conflicting_requests ?? ;
    $this->auto_decline_recurring_requests = $auto_decline_recurring_requests ?? ;
  }
}

type Boolean = bool;

class CreateAliasRequest {
  public EmailAddress $alias;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'alias' => EmailAddress,
  ?'entity_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->alias = $alias ?? ;
    $this->entity_id = $entity_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class CreateAliasResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateGroupRequest {
  public GroupName $name;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'name' => GroupName,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class CreateGroupResponse {
  public WorkMailIdentifier $group_id;

  public function __construct(shape(
  ?'group_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
  }
}

class CreateResourceRequest {
  public ResourceName $name;
  public OrganizationId $organization_id;
  public ResourceType $type;

  public function __construct(shape(
  ?'name' => ResourceName,
  ?'organization_id' => OrganizationId,
  ?'type' => ResourceType,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->type = $type ?? ;
  }
}

class CreateResourceResponse {
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->resource_id = $resource_id ?? "";
  }
}

class CreateUserRequest {
  public string $display_name;
  public UserName $name;
  public OrganizationId $organization_id;
  public Password $password;

  public function __construct(shape(
  ?'display_name' => string,
  ?'name' => UserName,
  ?'organization_id' => OrganizationId,
  ?'password' => Password,
  ) $s = shape()) {
    $this->display_name = $display_name ?? ;
    $this->name = $name ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->password = $password ?? "";
  }
}

class CreateUserResponse {
  public WorkMailIdentifier $user_id;

  public function __construct(shape(
  ?'user_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->user_id = $user_id ?? ;
  }
}

class Delegate {
  public string $id;
  public MemberType $type;

  public function __construct(shape(
  ?'id' => string,
  ?'type' => MemberType,
  ) $s = shape()) {
    $this->id = $id ?? ;
    $this->type = $type ?? ;
  }
}

class DeleteAccessControlRuleRequest {
  public AccessControlRuleName $name;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'name' => AccessControlRuleName,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class DeleteAccessControlRuleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteAliasRequest {
  public EmailAddress $alias;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'alias' => EmailAddress,
  ?'entity_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->alias = $alias ?? ;
    $this->entity_id = $entity_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class DeleteAliasResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteGroupRequest {
  public WorkMailIdentifier $group_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'group_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class DeleteGroupResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteMailboxPermissionsRequest {
  public WorkMailIdentifier $entity_id;
  public WorkMailIdentifier $grantee_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'entity_id' => WorkMailIdentifier,
  ?'grantee_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $entity_id ?? ;
    $this->grantee_id = $grantee_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class DeleteMailboxPermissionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteResourceRequest {
  public OrganizationId $organization_id;
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class DeleteResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteUserRequest {
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ?'user_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
    $this->user_id = $user_id ?? ;
  }
}

class DeleteUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeregisterFromWorkMailRequest {
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'entity_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $entity_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class DeregisterFromWorkMailResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeGroupRequest {
  public WorkMailIdentifier $group_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'group_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class DescribeGroupResponse {
  public Timestamp $disabled_date;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public WorkMailIdentifier $group_id;
  public GroupName $name;
  public EntityState $state;

  public function __construct(shape(
  ?'disabled_date' => Timestamp,
  ?'email' => EmailAddress,
  ?'enabled_date' => Timestamp,
  ?'group_id' => WorkMailIdentifier,
  ?'name' => GroupName,
  ?'state' => EntityState,
  ) $s = shape()) {
    $this->disabled_date = $disabled_date ?? ;
    $this->email = $email ?? ;
    $this->enabled_date = $enabled_date ?? ;
    $this->group_id = $group_id ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
  }
}

class DescribeOrganizationRequest {
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
  }
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

  public function __construct(shape(
  ?'arn' => AmazonResourceName,
  ?'alias' => OrganizationName,
  ?'completed_date' => Timestamp,
  ?'default_mail_domain' => string,
  ?'directory_id' => string,
  ?'directory_type' => string,
  ?'error_message' => string,
  ?'organization_id' => OrganizationId,
  ?'state' => string,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->alias = $alias ?? ;
    $this->completed_date = $completed_date ?? ;
    $this->default_mail_domain = $default_mail_domain ?? ;
    $this->directory_id = $directory_id ?? ;
    $this->directory_type = $directory_type ?? ;
    $this->error_message = $error_message ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->state = $state ?? ;
  }
}

class DescribeResourceRequest {
  public OrganizationId $organization_id;
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
    $this->resource_id = $resource_id ?? "";
  }
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

  public function __construct(shape(
  ?'booking_options' => BookingOptions,
  ?'disabled_date' => Timestamp,
  ?'email' => EmailAddress,
  ?'enabled_date' => Timestamp,
  ?'name' => ResourceName,
  ?'resource_id' => ResourceId,
  ?'state' => EntityState,
  ?'type' => ResourceType,
  ) $s = shape()) {
    $this->booking_options = $booking_options ?? null;
    $this->disabled_date = $disabled_date ?? ;
    $this->email = $email ?? ;
    $this->enabled_date = $enabled_date ?? ;
    $this->name = $name ?? ;
    $this->resource_id = $resource_id ?? "";
    $this->state = $state ?? ;
    $this->type = $type ?? ;
  }
}

class DescribeUserRequest {
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ?'user_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
    $this->user_id = $user_id ?? ;
  }
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

  public function __construct(shape(
  ?'disabled_date' => Timestamp,
  ?'display_name' => string,
  ?'email' => EmailAddress,
  ?'enabled_date' => Timestamp,
  ?'name' => UserName,
  ?'state' => EntityState,
  ?'user_id' => WorkMailIdentifier,
  ?'user_role' => UserRole,
  ) $s = shape()) {
    $this->disabled_date = $disabled_date ?? ;
    $this->display_name = $display_name ?? ;
    $this->email = $email ?? ;
    $this->enabled_date = $enabled_date ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
    $this->user_id = $user_id ?? ;
    $this->user_role = $user_role ?? "";
  }
}

class DirectoryServiceAuthenticationFailedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DirectoryUnavailableException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DisassociateDelegateFromResourceRequest {
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'entity_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->entity_id = $entity_id ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class DisassociateDelegateFromResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateMemberFromGroupRequest {
  public WorkMailIdentifier $group_id;
  public WorkMailIdentifier $member_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'group_id' => WorkMailIdentifier,
  ?'member_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->member_id = $member_id ?? ;
    $this->organization_id = $organization_id ?? "";
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
    $this->message = $message ?? ;
  }
}

class EntityAlreadyRegisteredException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class EntityNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type EntityState = string;

class EntityStateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class GetAccessControlEffectRequest {
  public AccessControlRuleAction $action;
  public IpAddress $ip_address;
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;

  public function __construct(shape(
  ?'action' => AccessControlRuleAction,
  ?'ip_address' => IpAddress,
  ?'organization_id' => OrganizationId,
  ?'user_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->action = $action ?? ;
    $this->ip_address = $ip_address ?? "";
    $this->organization_id = $organization_id ?? "";
    $this->user_id = $user_id ?? ;
  }
}

class GetAccessControlEffectResponse {
  public AccessControlRuleEffect $effect;
  public AccessControlRuleNameList $matched_rules;

  public function __construct(shape(
  ?'effect' => AccessControlRuleEffect,
  ?'matched_rules' => AccessControlRuleNameList,
  ) $s = shape()) {
    $this->effect = $effect ?? ;
    $this->matched_rules = $matched_rules ?? ;
  }
}

class GetMailboxDetailsRequest {
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ?'user_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
    $this->user_id = $user_id ?? ;
  }
}

class GetMailboxDetailsResponse {
  public MailboxQuota $mailbox_quota;
  public MailboxSize $mailbox_size;

  public function __construct(shape(
  ?'mailbox_quota' => MailboxQuota,
  ?'mailbox_size' => MailboxSize,
  ) $s = shape()) {
    $this->mailbox_quota = $mailbox_quota ?? 0;
    $this->mailbox_size = $mailbox_size ?? 0.0;
  }
}

class Group {
  public Timestamp $disabled_date;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public WorkMailIdentifier $id;
  public GroupName $name;
  public EntityState $state;

  public function __construct(shape(
  ?'disabled_date' => Timestamp,
  ?'email' => EmailAddress,
  ?'enabled_date' => Timestamp,
  ?'id' => WorkMailIdentifier,
  ?'name' => GroupName,
  ?'state' => EntityState,
  ) $s = shape()) {
    $this->disabled_date = $disabled_date ?? ;
    $this->email = $email ?? ;
    $this->enabled_date = $enabled_date ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
  }
}

type GroupName = string;

type Groups = vec<Group>;

class InvalidConfigurationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidPasswordException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
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
    $this->message = $message ?? ;
  }
}

class ListAccessControlRulesRequest {
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
  }
}

class ListAccessControlRulesResponse {
  public AccessControlRulesList $rules;

  public function __construct(shape(
  ?'rules' => AccessControlRulesList,
  ) $s = shape()) {
    $this->rules = $rules ?? ;
  }
}

class ListAliasesRequest {
  public WorkMailIdentifier $entity_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'entity_id' => WorkMailIdentifier,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $entity_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class ListAliasesResponse {
  public Aliases $aliases;
  public NextToken $next_token;

  public function __construct(shape(
  ?'aliases' => Aliases,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->aliases = $aliases ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListGroupMembersRequest {
  public WorkMailIdentifier $group_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'group_id' => WorkMailIdentifier,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->group_id = $group_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class ListGroupMembersResponse {
  public Members $members;
  public NextToken $next_token;

  public function __construct(shape(
  ?'members' => Members,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->members = $members ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListGroupsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class ListGroupsResponse {
  public Groups $groups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'groups' => Groups,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->groups = $groups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListMailboxPermissionsRequest {
  public WorkMailIdentifier $entity_id;
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'entity_id' => WorkMailIdentifier,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->entity_id = $entity_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class ListMailboxPermissionsResponse {
  public NextToken $next_token;
  public Permissions $permissions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'permissions' => Permissions,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->permissions = $permissions ?? [];
  }
}

class ListOrganizationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListOrganizationsResponse {
  public NextToken $next_token;
  public OrganizationSummaries $organization_summaries;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'organization_summaries' => OrganizationSummaries,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->organization_summaries = $organization_summaries ?? [];
  }
}

class ListResourceDelegatesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;
  public WorkMailIdentifier $resource_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'organization_id' => OrganizationId,
  ?'resource_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_id = $organization_id ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class ListResourceDelegatesResponse {
  public ResourceDelegates $delegates;
  public NextToken $next_token;

  public function __construct(shape(
  ?'delegates' => ResourceDelegates,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->delegates = $delegates ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListResourcesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class ListResourcesResponse {
  public NextToken $next_token;
  public Resources $resources;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'resources' => Resources,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->resources = $resources ?? [];
  }
}

class ListTagsForResourceRequest {
  public AmazonResourceName $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

class ListUsersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->organization_id = $organization_id ?? "";
  }
}

class ListUsersResponse {
  public NextToken $next_token;
  public Users $users;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'users' => Users,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->users = $users ?? [];
  }
}

class MailDomainNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class MailDomainStateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type MailboxQuota = int;

type MailboxSize = float;

type MaxResults = int;

class Member {
  public Timestamp $disabled_date;
  public Timestamp $enabled_date;
  public string $id;
  public string $name;
  public EntityState $state;
  public MemberType $type;

  public function __construct(shape(
  ?'disabled_date' => Timestamp,
  ?'enabled_date' => Timestamp,
  ?'id' => string,
  ?'name' => string,
  ?'state' => EntityState,
  ?'type' => MemberType,
  ) $s = shape()) {
    $this->disabled_date = $disabled_date ?? ;
    $this->enabled_date = $enabled_date ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
    $this->type = $type ?? ;
  }
}

type MemberType = string;

type Members = vec<Member>;

class NameAvailabilityException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
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
    $this->message = $message ?? ;
  }
}

class OrganizationStateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OrganizationSummaries = vec<OrganizationSummary>;

class OrganizationSummary {
  public OrganizationName $alias;
  public string $error_message;
  public OrganizationId $organization_id;
  public string $state;

  public function __construct(shape(
  ?'alias' => OrganizationName,
  ?'error_message' => string,
  ?'organization_id' => OrganizationId,
  ?'state' => string,
  ) $s = shape()) {
    $this->alias = $alias ?? ;
    $this->error_message = $error_message ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->state = $state ?? ;
  }
}

type Password = string;

class Permission {
  public WorkMailIdentifier $grantee_id;
  public MemberType $grantee_type;
  public PermissionValues $permission_values;

  public function __construct(shape(
  ?'grantee_id' => WorkMailIdentifier,
  ?'grantee_type' => MemberType,
  ?'permission_values' => PermissionValues,
  ) $s = shape()) {
    $this->grantee_id = $grantee_id ?? ;
    $this->grantee_type = $grantee_type ?? ;
    $this->permission_values = $permission_values ?? [];
  }
}

type PermissionType = string;

type PermissionValues = vec<PermissionType>;

type Permissions = vec<Permission>;

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

  public function __construct(shape(
  ?'actions' => ActionsList,
  ?'description' => AccessControlRuleDescription,
  ?'effect' => AccessControlRuleEffect,
  ?'ip_ranges' => IpRangeList,
  ?'name' => AccessControlRuleName,
  ?'not_actions' => ActionsList,
  ?'not_ip_ranges' => IpRangeList,
  ?'not_user_ids' => UserIdList,
  ?'organization_id' => OrganizationId,
  ?'user_ids' => UserIdList,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->description = $description ?? ;
    $this->effect = $effect ?? ;
    $this->ip_ranges = $ip_ranges ?? ;
    $this->name = $name ?? ;
    $this->not_actions = $not_actions ?? ;
    $this->not_ip_ranges = $not_ip_ranges ?? ;
    $this->not_user_ids = $not_user_ids ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->user_ids = $user_ids ?? ;
  }
}

class PutAccessControlRuleResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PutMailboxPermissionsRequest {
  public WorkMailIdentifier $entity_id;
  public WorkMailIdentifier $grantee_id;
  public OrganizationId $organization_id;
  public PermissionValues $permission_values;

  public function __construct(shape(
  ?'entity_id' => WorkMailIdentifier,
  ?'grantee_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ?'permission_values' => PermissionValues,
  ) $s = shape()) {
    $this->entity_id = $entity_id ?? ;
    $this->grantee_id = $grantee_id ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->permission_values = $permission_values ?? [];
  }
}

class PutMailboxPermissionsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RegisterToWorkMailRequest {
  public EmailAddress $email;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'email' => EmailAddress,
  ?'entity_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->email = $email ?? ;
    $this->entity_id = $entity_id ?? ;
    $this->organization_id = $organization_id ?? "";
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
    $this->message = $message ?? ;
  }
}

class ResetPasswordRequest {
  public OrganizationId $organization_id;
  public Password $password;
  public WorkMailIdentifier $user_id;

  public function __construct(shape(
  ?'organization_id' => OrganizationId,
  ?'password' => Password,
  ?'user_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->organization_id = $organization_id ?? "";
    $this->password = $password ?? "";
    $this->user_id = $user_id ?? ;
  }
}

class ResetPasswordResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Resource {
  public Timestamp $disabled_date;
  public EmailAddress $email;
  public Timestamp $enabled_date;
  public WorkMailIdentifier $id;
  public ResourceName $name;
  public EntityState $state;
  public ResourceType $type;

  public function __construct(shape(
  ?'disabled_date' => Timestamp,
  ?'email' => EmailAddress,
  ?'enabled_date' => Timestamp,
  ?'id' => WorkMailIdentifier,
  ?'name' => ResourceName,
  ?'state' => EntityState,
  ?'type' => ResourceType,
  ) $s = shape()) {
    $this->disabled_date = $disabled_date ?? ;
    $this->email = $email ?? ;
    $this->enabled_date = $enabled_date ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
    $this->type = $type ?? ;
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
    $this->message = $message ?? ;
  }
}

type ResourceType = string;

type Resources = vec<Resource>;

type String = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
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
    $this->message = $message ?? ;
  }
}

class UnsupportedOperationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public AmazonResourceName $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => AmazonResourceName,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateMailboxQuotaRequest {
  public MailboxQuota $mailbox_quota;
  public OrganizationId $organization_id;
  public WorkMailIdentifier $user_id;

  public function __construct(shape(
  ?'mailbox_quota' => MailboxQuota,
  ?'organization_id' => OrganizationId,
  ?'user_id' => WorkMailIdentifier,
  ) $s = shape()) {
    $this->mailbox_quota = $mailbox_quota ?? 0;
    $this->organization_id = $organization_id ?? "";
    $this->user_id = $user_id ?? ;
  }
}

class UpdateMailboxQuotaResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdatePrimaryEmailAddressRequest {
  public EmailAddress $email;
  public WorkMailIdentifier $entity_id;
  public OrganizationId $organization_id;

  public function __construct(shape(
  ?'email' => EmailAddress,
  ?'entity_id' => WorkMailIdentifier,
  ?'organization_id' => OrganizationId,
  ) $s = shape()) {
    $this->email = $email ?? ;
    $this->entity_id = $entity_id ?? ;
    $this->organization_id = $organization_id ?? "";
  }
}

class UpdatePrimaryEmailAddressResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateResourceRequest {
  public BookingOptions $booking_options;
  public ResourceName $name;
  public OrganizationId $organization_id;
  public ResourceId $resource_id;

  public function __construct(shape(
  ?'booking_options' => BookingOptions,
  ?'name' => ResourceName,
  ?'organization_id' => OrganizationId,
  ?'resource_id' => ResourceId,
  ) $s = shape()) {
    $this->booking_options = $booking_options ?? null;
    $this->name = $name ?? ;
    $this->organization_id = $organization_id ?? "";
    $this->resource_id = $resource_id ?? "";
  }
}

class UpdateResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'disabled_date' => Timestamp,
  ?'display_name' => string,
  ?'email' => EmailAddress,
  ?'enabled_date' => Timestamp,
  ?'id' => WorkMailIdentifier,
  ?'name' => UserName,
  ?'state' => EntityState,
  ?'user_role' => UserRole,
  ) $s = shape()) {
    $this->disabled_date = $disabled_date ?? ;
    $this->display_name = $display_name ?? ;
    $this->email = $email ?? ;
    $this->enabled_date = $enabled_date ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->state = $state ?? ;
    $this->user_role = $user_role ?? "";
  }
}

type UserIdList = vec<WorkMailIdentifier>;

type UserName = string;

type UserRole = string;

type Users = vec<User>;

type WorkMailIdentifier = string;

