<?hh // strict
namespace slack\aws\cloud9;

interface Cloud9 {
  public function CreateEnvironmentEC2(CreateEnvironmentEC2Request $in): Awaitable<\Errors\Result<CreateEnvironmentEC2Result>>;
  public function CreateEnvironmentMembership(CreateEnvironmentMembershipRequest $in): Awaitable<\Errors\Result<CreateEnvironmentMembershipResult>>;
  public function DeleteEnvironment(DeleteEnvironmentRequest $in): Awaitable<\Errors\Result<DeleteEnvironmentResult>>;
  public function DeleteEnvironmentMembership(DeleteEnvironmentMembershipRequest $in): Awaitable<\Errors\Result<DeleteEnvironmentMembershipResult>>;
  public function DescribeEnvironmentMemberships(DescribeEnvironmentMembershipsRequest $in): Awaitable<\Errors\Result<DescribeEnvironmentMembershipsResult>>;
  public function DescribeEnvironmentStatus(DescribeEnvironmentStatusRequest $in): Awaitable<\Errors\Result<DescribeEnvironmentStatusResult>>;
  public function DescribeEnvironments(DescribeEnvironmentsRequest $in): Awaitable<\Errors\Result<DescribeEnvironmentsResult>>;
  public function ListEnvironments(ListEnvironmentsRequest $in): Awaitable<\Errors\Result<ListEnvironmentsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateEnvironment(UpdateEnvironmentRequest $in): Awaitable<\Errors\Result<UpdateEnvironmentResult>>;
  public function UpdateEnvironmentMembership(UpdateEnvironmentMembershipRequest $in): Awaitable<\Errors\Result<UpdateEnvironmentMembershipResult>>;
}

type AutomaticStopTimeMinutes = int;

class BadRequestException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type BoundedEnvironmentIdList = vec<EnvironmentId>;

type ClientRequestToken = string;

class ConflictException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateEnvironmentEC2Request {
  public ?AutomaticStopTimeMinutes $automatic_stop_time_minutes;
  public ?ClientRequestToken $client_request_token;
  public ?EnvironmentDescription $description;
  public ?InstanceType $instance_type;
  public ?EnvironmentName $name;
  public ?UserArn $owner_arn;
  public ?SubnetId $subnet_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'automatic_stop_time_minutes' => ?AutomaticStopTimeMinutes,
    ?'client_request_token' => ?ClientRequestToken,
    ?'description' => ?EnvironmentDescription,
    ?'instance_type' => ?InstanceType,
    ?'name' => ?EnvironmentName,
    ?'owner_arn' => ?UserArn,
    ?'subnet_id' => ?SubnetId,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->automatic_stop_time_minutes = $s['automatic_stop_time_minutes'] ?? 0;
    $this->client_request_token = $s['client_request_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner_arn = $s['owner_arn'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateEnvironmentEC2Result {
  public ?EnvironmentId $environment_id;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
  }
}

class CreateEnvironmentMembershipRequest {
  public ?EnvironmentId $environment_id;
  public ?MemberPermissions $permissions;
  public ?UserArn $user_arn;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
    ?'permissions' => ?MemberPermissions,
    ?'user_arn' => ?UserArn,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
    $this->permissions = $s['permissions'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class CreateEnvironmentMembershipResult {
  public ?EnvironmentMember $membership;

  public function __construct(shape(
    ?'membership' => ?EnvironmentMember,
  ) $s = shape()) {
    $this->membership = $s['membership'] ?? null;
  }
}

class DeleteEnvironmentMembershipRequest {
  public ?EnvironmentId $environment_id;
  public ?UserArn $user_arn;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
    ?'user_arn' => ?UserArn,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class DeleteEnvironmentMembershipResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteEnvironmentRequest {
  public ?EnvironmentId $environment_id;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
  }
}

class DeleteEnvironmentResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeEnvironmentMembershipsRequest {
  public ?EnvironmentId $environment_id;
  public ?MaxResults $max_results;
  public string $next_token;
  public ?PermissionsList $permissions;
  public ?UserArn $user_arn;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
    ?'permissions' => ?PermissionsList,
    ?'user_arn' => ?UserArn,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->permissions = $s['permissions'] ?? vec[];
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class DescribeEnvironmentMembershipsResult {
  public ?EnvironmentMembersList $memberships;
  public string $next_token;

  public function __construct(shape(
    ?'memberships' => ?EnvironmentMembersList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->memberships = $s['memberships'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEnvironmentStatusRequest {
  public ?EnvironmentId $environment_id;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
  }
}

class DescribeEnvironmentStatusResult {
  public string $message;
  public ?EnvironmentStatus $status;

  public function __construct(shape(
    ?'message' => string,
    ?'status' => ?EnvironmentStatus,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class DescribeEnvironmentsRequest {
  public ?BoundedEnvironmentIdList $environment_ids;

  public function __construct(shape(
    ?'environment_ids' => ?BoundedEnvironmentIdList,
  ) $s = shape()) {
    $this->environment_ids = $s['environment_ids'] ?? vec[];
  }
}

class DescribeEnvironmentsResult {
  public ?EnvironmentList $environments;

  public function __construct(shape(
    ?'environments' => ?EnvironmentList,
  ) $s = shape()) {
    $this->environments = $s['environments'] ?? vec[];
  }
}

class Environment {
  public string $arn;
  public ?EnvironmentDescription $description;
  public ?EnvironmentId $id;
  public ?EnvironmentLifecycle $lifecycle;
  public ?EnvironmentName $name;
  public string $owner_arn;
  public ?EnvironmentType $type;

  public function __construct(shape(
    ?'arn' => string,
    ?'description' => ?EnvironmentDescription,
    ?'id' => ?EnvironmentId,
    ?'lifecycle' => ?EnvironmentLifecycle,
    ?'name' => ?EnvironmentName,
    ?'owner_arn' => string,
    ?'type' => ?EnvironmentType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->lifecycle = $s['lifecycle'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->owner_arn = $s['owner_arn'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type EnvironmentArn = string;

type EnvironmentDescription = string;

type EnvironmentId = string;

type EnvironmentIdList = vec<EnvironmentId>;

class EnvironmentLifecycle {
  public string $failure_resource;
  public string $reason;
  public ?EnvironmentLifecycleStatus $status;

  public function __construct(shape(
    ?'failure_resource' => string,
    ?'reason' => string,
    ?'status' => ?EnvironmentLifecycleStatus,
  ) $s = shape()) {
    $this->failure_resource = $s['failure_resource'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type EnvironmentLifecycleStatus = string;

type EnvironmentList = vec<Environment>;

class EnvironmentMember {
  public ?EnvironmentId $environment_id;
  public ?Timestamp $last_access;
  public ?Permissions $permissions;
  public ?UserArn $user_arn;
  public string $user_id;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
    ?'last_access' => ?Timestamp,
    ?'permissions' => ?Permissions,
    ?'user_arn' => ?UserArn,
    ?'user_id' => string,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
    $this->last_access = $s['last_access'] ?? 0;
    $this->permissions = $s['permissions'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

type EnvironmentMembersList = vec<EnvironmentMember>;

type EnvironmentName = string;

type EnvironmentStatus = string;

type EnvironmentType = string;

class ForbiddenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type InstanceType = string;

class InternalServerErrorException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ListEnvironmentsRequest {
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

class ListEnvironmentsResult {
  public ?EnvironmentIdList $environment_ids;
  public string $next_token;

  public function __construct(shape(
    ?'environment_ids' => ?EnvironmentIdList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->environment_ids = $s['environment_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?EnvironmentArn $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?EnvironmentArn,
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

type MaxResults = int;

type MemberPermissions = string;

class NotFoundException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Permissions = string;

type PermissionsList = vec<Permissions>;

type String = string;

type SubnetId = string;

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
  public ?EnvironmentArn $resource_arn;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?EnvironmentArn,
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

class TooManyRequestsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagResourceRequest {
  public ?EnvironmentArn $resource_arn;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?EnvironmentArn,
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

class UpdateEnvironmentMembershipRequest {
  public ?EnvironmentId $environment_id;
  public ?MemberPermissions $permissions;
  public ?UserArn $user_arn;

  public function __construct(shape(
    ?'environment_id' => ?EnvironmentId,
    ?'permissions' => ?MemberPermissions,
    ?'user_arn' => ?UserArn,
  ) $s = shape()) {
    $this->environment_id = $s['environment_id'] ?? '';
    $this->permissions = $s['permissions'] ?? '';
    $this->user_arn = $s['user_arn'] ?? '';
  }
}

class UpdateEnvironmentMembershipResult {
  public ?EnvironmentMember $membership;

  public function __construct(shape(
    ?'membership' => ?EnvironmentMember,
  ) $s = shape()) {
    $this->membership = $s['membership'] ?? null;
  }
}

class UpdateEnvironmentRequest {
  public ?EnvironmentDescription $description;
  public ?EnvironmentId $environment_id;
  public ?EnvironmentName $name;

  public function __construct(shape(
    ?'description' => ?EnvironmentDescription,
    ?'environment_id' => ?EnvironmentId,
    ?'name' => ?EnvironmentName,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->environment_id = $s['environment_id'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateEnvironmentResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UserArn = string;

