<?hh // strict
namespace slack\aws\cloud9;

interface Cloud9 {
  public function CreateEnvironmentEC2(CreateEnvironmentEC2Request) Awaitable<Errors\Result<CreateEnvironmentEC2Result>>;
  public function CreateEnvironmentMembership(CreateEnvironmentMembershipRequest) Awaitable<Errors\Result<CreateEnvironmentMembershipResult>>;
  public function DeleteEnvironment(DeleteEnvironmentRequest) Awaitable<Errors\Result<DeleteEnvironmentResult>>;
  public function DeleteEnvironmentMembership(DeleteEnvironmentMembershipRequest) Awaitable<Errors\Result<DeleteEnvironmentMembershipResult>>;
  public function DescribeEnvironmentMemberships(DescribeEnvironmentMembershipsRequest) Awaitable<Errors\Result<DescribeEnvironmentMembershipsResult>>;
  public function DescribeEnvironmentStatus(DescribeEnvironmentStatusRequest) Awaitable<Errors\Result<DescribeEnvironmentStatusResult>>;
  public function DescribeEnvironments(DescribeEnvironmentsRequest) Awaitable<Errors\Result<DescribeEnvironmentsResult>>;
  public function ListEnvironments(ListEnvironmentsRequest) Awaitable<Errors\Result<ListEnvironmentsResult>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateEnvironment(UpdateEnvironmentRequest) Awaitable<Errors\Result<UpdateEnvironmentResult>>;
  public function UpdateEnvironmentMembership(UpdateEnvironmentMembershipRequest) Awaitable<Errors\Result<UpdateEnvironmentMembershipResult>>;
}

class AutomaticStopTimeMinutes {
}

class BadRequestException {
}

class BoundedEnvironmentIdList {
}

class ClientRequestToken {
}

class ConflictException {
}

class CreateEnvironmentEC2Request {
  public AutomaticStopTimeMinutes $automatic_stop_time_minutes;
  public ClientRequestToken $client_request_token;
  public EnvironmentDescription $description;
  public InstanceType $instance_type;
  public EnvironmentName $name;
  public UserArn $owner_arn;
  public SubnetId $subnet_id;
  public TagList $tags;
}

class CreateEnvironmentEC2Result {
  public EnvironmentId $environment_id;
}

class CreateEnvironmentMembershipRequest {
  public EnvironmentId $environment_id;
  public MemberPermissions $permissions;
  public UserArn $user_arn;
}

class CreateEnvironmentMembershipResult {
  public EnvironmentMember $membership;
}

class DeleteEnvironmentMembershipRequest {
  public EnvironmentId $environment_id;
  public UserArn $user_arn;
}

class DeleteEnvironmentMembershipResult {
}

class DeleteEnvironmentRequest {
  public EnvironmentId $environment_id;
}

class DeleteEnvironmentResult {
}

class DescribeEnvironmentMembershipsRequest {
  public EnvironmentId $environment_id;
  public MaxResults $max_results;
  public string $next_token;
  public PermissionsList $permissions;
  public UserArn $user_arn;
}

class DescribeEnvironmentMembershipsResult {
  public EnvironmentMembersList $memberships;
  public string $next_token;
}

class DescribeEnvironmentStatusRequest {
  public EnvironmentId $environment_id;
}

class DescribeEnvironmentStatusResult {
  public string $message;
  public EnvironmentStatus $status;
}

class DescribeEnvironmentsRequest {
  public BoundedEnvironmentIdList $environment_ids;
}

class DescribeEnvironmentsResult {
  public EnvironmentList $environments;
}

class Environment {
  public string $arn;
  public EnvironmentDescription $description;
  public EnvironmentId $id;
  public EnvironmentLifecycle $lifecycle;
  public EnvironmentName $name;
  public string $owner_arn;
  public EnvironmentType $type;
}

class EnvironmentArn {
}

class EnvironmentDescription {
}

class EnvironmentId {
}

class EnvironmentIdList {
}

class EnvironmentLifecycle {
  public string $failure_resource;
  public string $reason;
  public EnvironmentLifecycleStatus $status;
}

class EnvironmentLifecycleStatus {
}

class EnvironmentList {
}

class EnvironmentMember {
  public EnvironmentId $environment_id;
  public Timestamp $last_access;
  public Permissions $permissions;
  public UserArn $user_arn;
  public string $user_id;
}

class EnvironmentMembersList {
}

class EnvironmentName {
}

class EnvironmentStatus {
}

class EnvironmentType {
}

class ForbiddenException {
}

class InstanceType {
}

class InternalServerErrorException {
}

class LimitExceededException {
}

class ListEnvironmentsRequest {
  public MaxResults $max_results;
  public string $next_token;
}

class ListEnvironmentsResult {
  public EnvironmentIdList $environment_ids;
  public string $next_token;
}

class ListTagsForResourceRequest {
  public EnvironmentArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class MaxResults {
}

class MemberPermissions {
}

class NotFoundException {
}

class Permissions {
}

class PermissionsList {
}

class String {
}

class SubnetId {
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
  public EnvironmentArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class Timestamp {
}

class TooManyRequestsException {
}

class UntagResourceRequest {
  public EnvironmentArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateEnvironmentMembershipRequest {
  public EnvironmentId $environment_id;
  public MemberPermissions $permissions;
  public UserArn $user_arn;
}

class UpdateEnvironmentMembershipResult {
  public EnvironmentMember $membership;
}

class UpdateEnvironmentRequest {
  public EnvironmentDescription $description;
  public EnvironmentId $environment_id;
  public EnvironmentName $name;
}

class UpdateEnvironmentResult {
}

class UserArn {
}

