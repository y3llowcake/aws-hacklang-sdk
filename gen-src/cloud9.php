<?hh // strict
namespace slack\aws\cloud9;

interface Cloud9 {
  public function ListEnvironments(ListEnvironmentsRequest) Awaitable<Errors\Result<ListEnvironmentsResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateEnvironment(UpdateEnvironmentRequest) Awaitable<Errors\Result<UpdateEnvironmentResult>>;
  public function UpdateEnvironmentMembership(UpdateEnvironmentMembershipRequest) Awaitable<Errors\Result<UpdateEnvironmentMembershipResult>>;
  public function CreateEnvironmentMembership(CreateEnvironmentMembershipRequest) Awaitable<Errors\Result<CreateEnvironmentMembershipResult>>;
  public function DeleteEnvironment(DeleteEnvironmentRequest) Awaitable<Errors\Result<DeleteEnvironmentResult>>;
  public function DeleteEnvironmentMembership(DeleteEnvironmentMembershipRequest) Awaitable<Errors\Result<DeleteEnvironmentMembershipResult>>;
  public function DescribeEnvironmentMemberships(DescribeEnvironmentMembershipsRequest) Awaitable<Errors\Result<DescribeEnvironmentMembershipsResult>>;
  public function DescribeEnvironmentStatus(DescribeEnvironmentStatusRequest) Awaitable<Errors\Result<DescribeEnvironmentStatusResult>>;
  public function DescribeEnvironments(DescribeEnvironmentsRequest) Awaitable<Errors\Result<DescribeEnvironmentsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function CreateEnvironmentEC2(CreateEnvironmentEC2Request) Awaitable<Errors\Result<CreateEnvironmentEC2Result>>;
}

class EnvironmentName {
}

class NotFoundException {
}

class String {
}

class TooManyRequestsException {
}

class UpdateEnvironmentRequest {
  public EnvironmentName $name;
  public EnvironmentDescription $description;
  public EnvironmentId $environment_id;
}

class EnvironmentType {
}

class Timestamp {
}

class CreateEnvironmentMembershipResult {
  public EnvironmentMember $membership;
}

class ListEnvironmentsResult {
  public string $next_token;
  public EnvironmentIdList $environment_ids;
}

class ListTagsForResourceRequest {
  public EnvironmentArn $resource_arn;
}

class DeleteEnvironmentMembershipRequest {
  public EnvironmentId $environment_id;
  public UserArn $user_arn;
}

class DeleteEnvironmentRequest {
  public EnvironmentId $environment_id;
}

class DescribeEnvironmentMembershipsResult {
  public EnvironmentMembersList $memberships;
  public string $next_token;
}

class EnvironmentLifecycle {
  public EnvironmentLifecycleStatus $status;
  public string $reason;
  public string $failure_resource;
}

class DescribeEnvironmentStatusRequest {
  public EnvironmentId $environment_id;
}

class DescribeEnvironmentsRequest {
  public BoundedEnvironmentIdList $environment_ids;
}

class EnvironmentArn {
}

class LimitExceededException {
}

class ListEnvironmentsRequest {
  public string $next_token;
  public MaxResults $max_results;
}

class EnvironmentIdList {
}

class UntagResourceResponse {
}

class UpdateEnvironmentMembershipRequest {
  public EnvironmentId $environment_id;
  public UserArn $user_arn;
  public MemberPermissions $permissions;
}

class AutomaticStopTimeMinutes {
}

class DeleteEnvironmentMembershipResult {
}

class TagList {
}

class CreateEnvironmentEC2Request {
  public AutomaticStopTimeMinutes $automatic_stop_time_minutes;
  public UserArn $owner_arn;
  public TagList $tags;
  public EnvironmentName $name;
  public EnvironmentDescription $description;
  public ClientRequestToken $client_request_token;
  public InstanceType $instance_type;
  public SubnetId $subnet_id;
}

class CreateEnvironmentEC2Result {
  public EnvironmentId $environment_id;
}

class EnvironmentList {
}

class ForbiddenException {
}

class SubnetId {
}

class TagValue {
}

class DescribeEnvironmentsResult {
  public EnvironmentList $environments;
}

class InternalServerErrorException {
}

class BadRequestException {
}

class EnvironmentMembersList {
}

class UntagResourceRequest {
  public EnvironmentArn $resource_arn;
  public TagKeyList $tag_keys;
}

class ConflictException {
}

class Environment {
  public EnvironmentId $id;
  public EnvironmentName $name;
  public EnvironmentDescription $description;
  public EnvironmentType $type;
  public string $arn;
  public string $owner_arn;
  public EnvironmentLifecycle $lifecycle;
}

class EnvironmentLifecycleStatus {
}

class MaxResults {
}

class MemberPermissions {
}

class TagResourceResponse {
}

class UserArn {
}

class ClientRequestToken {
}

class EnvironmentDescription {
}

class EnvironmentId {
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class Permissions {
}

class PermissionsList {
}

class DescribeEnvironmentStatusResult {
  public EnvironmentStatus $status;
  public string $message;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKeyList {
}

class EnvironmentStatus {
}

class InstanceType {
}

class TagResourceRequest {
  public EnvironmentArn $resource_arn;
  public TagList $tags;
}

class CreateEnvironmentMembershipRequest {
  public EnvironmentId $environment_id;
  public UserArn $user_arn;
  public MemberPermissions $permissions;
}

class DeleteEnvironmentResult {
}

class UpdateEnvironmentMembershipResult {
  public EnvironmentMember $membership;
}

class UpdateEnvironmentResult {
}

class BoundedEnvironmentIdList {
}

class DescribeEnvironmentMembershipsRequest {
  public PermissionsList $permissions;
  public string $next_token;
  public MaxResults $max_results;
  public UserArn $user_arn;
  public EnvironmentId $environment_id;
}

class EnvironmentMember {
  public EnvironmentId $environment_id;
  public Timestamp $last_access;
  public Permissions $permissions;
  public string $user_id;
  public UserArn $user_arn;
}

class TagKey {
}

