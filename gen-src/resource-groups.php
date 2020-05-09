<?hh // strict
namespace slack\aws\resource-groups;

interface Resource Groups {
  public function CreateGroup(CreateGroupInput) Awaitable<Errors\Result<CreateGroupOutput>>;
  public function DeleteGroup(DeleteGroupInput) Awaitable<Errors\Result<DeleteGroupOutput>>;
  public function GetGroup(GetGroupInput) Awaitable<Errors\Result<GetGroupOutput>>;
  public function GetGroupQuery(GetGroupQueryInput) Awaitable<Errors\Result<GetGroupQueryOutput>>;
  public function GetTags(GetTagsInput) Awaitable<Errors\Result<GetTagsOutput>>;
  public function ListGroupResources(ListGroupResourcesInput) Awaitable<Errors\Result<ListGroupResourcesOutput>>;
  public function ListGroups(ListGroupsInput) Awaitable<Errors\Result<ListGroupsOutput>>;
  public function SearchResources(SearchResourcesInput) Awaitable<Errors\Result<SearchResourcesOutput>>;
  public function Tag(TagInput) Awaitable<Errors\Result<TagOutput>>;
  public function Untag(UntagInput) Awaitable<Errors\Result<UntagOutput>>;
  public function UpdateGroup(UpdateGroupInput) Awaitable<Errors\Result<UpdateGroupOutput>>;
  public function UpdateGroupQuery(UpdateGroupQueryInput) Awaitable<Errors\Result<UpdateGroupQueryOutput>>;
}

class BadRequestException {
  public ErrorMessage $message;
}

class CreateGroupInput {
  public GroupDescription $description;
  public GroupName $name;
  public ResourceQuery $resource_query;
  public Tags $tags;
}

class CreateGroupOutput {
  public Group $group;
  public ResourceQuery $resource_query;
  public Tags $tags;
}

class DeleteGroupInput {
  public GroupName $group_name;
}

class DeleteGroupOutput {
  public Group $group;
}

class ErrorMessage {
}

class ForbiddenException {
  public ErrorMessage $message;
}

class GetGroupInput {
  public GroupName $group_name;
}

class GetGroupOutput {
  public Group $group;
}

class GetGroupQueryInput {
  public GroupName $group_name;
}

class GetGroupQueryOutput {
  public GroupQuery $group_query;
}

class GetTagsInput {
  public GroupArn $arn;
}

class GetTagsOutput {
  public GroupArn $arn;
  public Tags $tags;
}

class Group {
  public GroupDescription $description;
  public GroupArn $group_arn;
  public GroupName $name;
}

class GroupArn {
}

class GroupDescription {
}

class GroupFilter {
  public GroupFilterName $name;
  public GroupFilterValues $values;
}

class GroupFilterList {
}

class GroupFilterName {
}

class GroupFilterValue {
}

class GroupFilterValues {
}

class GroupIdentifier {
  public GroupArn $group_arn;
  public GroupName $group_name;
}

class GroupIdentifierList {
}

class GroupList {
}

class GroupName {
}

class GroupQuery {
  public GroupName $group_name;
  public ResourceQuery $resource_query;
}

class InternalServerErrorException {
  public ErrorMessage $message;
}

class ListGroupResourcesInput {
  public ResourceFilterList $filters;
  public GroupName $group_name;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListGroupResourcesOutput {
  public NextToken $next_token;
  public QueryErrorList $query_errors;
  public ResourceIdentifierList $resource_identifiers;
}

class ListGroupsInput {
  public GroupFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListGroupsOutput {
  public GroupIdentifierList $group_identifiers;
  public GroupList $groups;
  public NextToken $next_token;
}

class MaxResults {
}

class MethodNotAllowedException {
  public ErrorMessage $message;
}

class NextToken {
}

class NotFoundException {
  public ErrorMessage $message;
}

class Query {
}

class QueryError {
  public QueryErrorCode $error_code;
  public QueryErrorMessage $message;
}

class QueryErrorCode {
}

class QueryErrorList {
}

class QueryErrorMessage {
}

class QueryType {
}

class ResourceArn {
}

class ResourceFilter {
  public ResourceFilterName $name;
  public ResourceFilterValues $values;
}

class ResourceFilterList {
}

class ResourceFilterName {
}

class ResourceFilterValue {
}

class ResourceFilterValues {
}

class ResourceIdentifier {
  public ResourceArn $resource_arn;
  public ResourceType $resource_type;
}

class ResourceIdentifierList {
}

class ResourceQuery {
  public Query $query;
  public QueryType $type;
}

class ResourceType {
}

class SearchResourcesInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceQuery $resource_query;
}

class SearchResourcesOutput {
  public NextToken $next_token;
  public QueryErrorList $query_errors;
  public ResourceIdentifierList $resource_identifiers;
}

class TagInput {
  public GroupArn $arn;
  public Tags $tags;
}

class TagKey {
}

class TagKeyList {
}

class TagOutput {
  public GroupArn $arn;
  public Tags $tags;
}

class TagValue {
}

class Tags {
}

class TooManyRequestsException {
  public ErrorMessage $message;
}

class UnauthorizedException {
  public ErrorMessage $message;
}

class UntagInput {
  public GroupArn $arn;
  public TagKeyList $keys;
}

class UntagOutput {
  public GroupArn $arn;
  public TagKeyList $keys;
}

class UpdateGroupInput {
  public GroupDescription $description;
  public GroupName $group_name;
}

class UpdateGroupOutput {
  public Group $group;
}

class UpdateGroupQueryInput {
  public GroupName $group_name;
  public ResourceQuery $resource_query;
}

class UpdateGroupQueryOutput {
  public GroupQuery $group_query;
}

