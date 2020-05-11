<?hh // strict
namespace slack\aws\resource-groups;

interface Resource Groups {
  public function CreateGroup(CreateGroupInput): Awaitable<Errors\Result<CreateGroupOutput>>;
  public function DeleteGroup(DeleteGroupInput): Awaitable<Errors\Result<DeleteGroupOutput>>;
  public function GetGroup(GetGroupInput): Awaitable<Errors\Result<GetGroupOutput>>;
  public function GetGroupQuery(GetGroupQueryInput): Awaitable<Errors\Result<GetGroupQueryOutput>>;
  public function GetTags(GetTagsInput): Awaitable<Errors\Result<GetTagsOutput>>;
  public function ListGroupResources(ListGroupResourcesInput): Awaitable<Errors\Result<ListGroupResourcesOutput>>;
  public function ListGroups(ListGroupsInput): Awaitable<Errors\Result<ListGroupsOutput>>;
  public function SearchResources(SearchResourcesInput): Awaitable<Errors\Result<SearchResourcesOutput>>;
  public function Tag(TagInput): Awaitable<Errors\Result<TagOutput>>;
  public function Untag(UntagInput): Awaitable<Errors\Result<UntagOutput>>;
  public function UpdateGroup(UpdateGroupInput): Awaitable<Errors\Result<UpdateGroupOutput>>;
  public function UpdateGroupQuery(UpdateGroupQueryInput): Awaitable<Errors\Result<UpdateGroupQueryOutput>>;
}

class BadRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class CreateGroupInput {
  public GroupDescription $description;
  public GroupName $name;
  public ResourceQuery $resource_query;
  public Tags $tags;

  public function __construct(shape(
  ?'description' => GroupDescription,
  ?'name' => GroupName,
  ?'resource_query' => ResourceQuery,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->name = $name ?? "";
    $this->resource_query = $resource_query ?? null;
    $this->tags = $tags ?? [];
  }
}

class CreateGroupOutput {
  public Group $group;
  public ResourceQuery $resource_query;
  public Tags $tags;

  public function __construct(shape(
  ?'group' => Group,
  ?'resource_query' => ResourceQuery,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->group = $group ?? null;
    $this->resource_query = $resource_query ?? null;
    $this->tags = $tags ?? [];
  }
}

class DeleteGroupInput {
  public GroupName $group_name;

  public function __construct(shape(
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
  }
}

class DeleteGroupOutput {
  public Group $group;

  public function __construct(shape(
  ?'group' => Group,
  ) $s = shape()) {
    $this->group = $group ?? null;
  }
}

type ErrorMessage = string;

class ForbiddenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class GetGroupInput {
  public GroupName $group_name;

  public function __construct(shape(
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
  }
}

class GetGroupOutput {
  public Group $group;

  public function __construct(shape(
  ?'group' => Group,
  ) $s = shape()) {
    $this->group = $group ?? null;
  }
}

class GetGroupQueryInput {
  public GroupName $group_name;

  public function __construct(shape(
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
  }
}

class GetGroupQueryOutput {
  public GroupQuery $group_query;

  public function __construct(shape(
  ?'group_query' => GroupQuery,
  ) $s = shape()) {
    $this->group_query = $group_query ?? null;
  }
}

class GetTagsInput {
  public GroupArn $arn;

  public function __construct(shape(
  ?'arn' => GroupArn,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
  }
}

class GetTagsOutput {
  public GroupArn $arn;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => GroupArn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class Group {
  public GroupDescription $description;
  public GroupArn $group_arn;
  public GroupName $name;

  public function __construct(shape(
  ?'description' => GroupDescription,
  ?'group_arn' => GroupArn,
  ?'name' => GroupName,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->group_arn = $group_arn ?? "";
    $this->name = $name ?? "";
  }
}

type GroupArn = string;

type GroupDescription = string;

class GroupFilter {
  public GroupFilterName $name;
  public GroupFilterValues $values;

  public function __construct(shape(
  ?'name' => GroupFilterName,
  ?'values' => GroupFilterValues,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type GroupFilterList = vec<GroupFilter>;

type GroupFilterName = string;

type GroupFilterValue = string;

type GroupFilterValues = vec<GroupFilterValue>;

class GroupIdentifier {
  public GroupArn $group_arn;
  public GroupName $group_name;

  public function __construct(shape(
  ?'group_arn' => GroupArn,
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->group_arn = $group_arn ?? "";
    $this->group_name = $group_name ?? "";
  }
}

type GroupIdentifierList = vec<GroupIdentifier>;

type GroupList = vec<Group>;

type GroupName = string;

class GroupQuery {
  public GroupName $group_name;
  public ResourceQuery $resource_query;

  public function __construct(shape(
  ?'group_name' => GroupName,
  ?'resource_query' => ResourceQuery,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->resource_query = $resource_query ?? null;
  }
}

class InternalServerErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListGroupResourcesInput {
  public ResourceFilterList $filters;
  public GroupName $group_name;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => ResourceFilterList,
  ?'group_name' => GroupName,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->group_name = $group_name ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListGroupResourcesOutput {
  public NextToken $next_token;
  public QueryErrorList $query_errors;
  public ResourceIdentifierList $resource_identifiers;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'query_errors' => QueryErrorList,
  ?'resource_identifiers' => ResourceIdentifierList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->query_errors = $query_errors ?? [];
    $this->resource_identifiers = $resource_identifiers ?? [];
  }
}

class ListGroupsInput {
  public GroupFilterList $filters;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'filters' => GroupFilterList,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListGroupsOutput {
  public GroupIdentifierList $group_identifiers;
  public GroupList $groups;
  public NextToken $next_token;

  public function __construct(shape(
  ?'group_identifiers' => GroupIdentifierList,
  ?'groups' => GroupList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->group_identifiers = $group_identifiers ?? [];
    $this->groups = $groups ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type MaxResults = int;

class MethodNotAllowedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type NextToken = string;

class NotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Query = string;

class QueryError {
  public QueryErrorCode $error_code;
  public QueryErrorMessage $message;

  public function __construct(shape(
  ?'error_code' => QueryErrorCode,
  ?'message' => QueryErrorMessage,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->message = $message ?? "";
  }
}

type QueryErrorCode = string;

type QueryErrorList = vec<QueryError>;

type QueryErrorMessage = string;

type QueryType = string;

type ResourceArn = string;

class ResourceFilter {
  public ResourceFilterName $name;
  public ResourceFilterValues $values;

  public function __construct(shape(
  ?'name' => ResourceFilterName,
  ?'values' => ResourceFilterValues,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->values = $values ?? [];
  }
}

type ResourceFilterList = vec<ResourceFilter>;

type ResourceFilterName = string;

type ResourceFilterValue = string;

type ResourceFilterValues = vec<ResourceFilterValue>;

class ResourceIdentifier {
  public ResourceArn $resource_arn;
  public ResourceType $resource_type;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'resource_type' => ResourceType,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->resource_type = $resource_type ?? "";
  }
}

type ResourceIdentifierList = vec<ResourceIdentifier>;

class ResourceQuery {
  public Query $query;
  public QueryType $type;

  public function __construct(shape(
  ?'query' => Query,
  ?'type' => QueryType,
  ) $s = shape()) {
    $this->query = $query ?? "";
    $this->type = $type ?? "";
  }
}

type ResourceType = string;

class SearchResourcesInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ResourceQuery $resource_query;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'resource_query' => ResourceQuery,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->resource_query = $resource_query ?? null;
  }
}

class SearchResourcesOutput {
  public NextToken $next_token;
  public QueryErrorList $query_errors;
  public ResourceIdentifierList $resource_identifiers;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'query_errors' => QueryErrorList,
  ?'resource_identifiers' => ResourceIdentifierList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->query_errors = $query_errors ?? [];
    $this->resource_identifiers = $resource_identifiers ?? [];
  }
}

class TagInput {
  public GroupArn $arn;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => GroupArn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

class TagOutput {
  public GroupArn $arn;
  public Tags $tags;

  public function __construct(shape(
  ?'arn' => GroupArn,
  ?'tags' => Tags,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type TagValue = string;

type Tags = dict<TagKey, TagValue>;

class TooManyRequestsException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnauthorizedException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UntagInput {
  public GroupArn $arn;
  public TagKeyList $keys;

  public function __construct(shape(
  ?'arn' => GroupArn,
  ?'keys' => TagKeyList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->keys = $keys ?? [];
  }
}

class UntagOutput {
  public GroupArn $arn;
  public TagKeyList $keys;

  public function __construct(shape(
  ?'arn' => GroupArn,
  ?'keys' => TagKeyList,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->keys = $keys ?? [];
  }
}

class UpdateGroupInput {
  public GroupDescription $description;
  public GroupName $group_name;

  public function __construct(shape(
  ?'description' => GroupDescription,
  ?'group_name' => GroupName,
  ) $s = shape()) {
    $this->description = $description ?? "";
    $this->group_name = $group_name ?? "";
  }
}

class UpdateGroupOutput {
  public Group $group;

  public function __construct(shape(
  ?'group' => Group,
  ) $s = shape()) {
    $this->group = $group ?? null;
  }
}

class UpdateGroupQueryInput {
  public GroupName $group_name;
  public ResourceQuery $resource_query;

  public function __construct(shape(
  ?'group_name' => GroupName,
  ?'resource_query' => ResourceQuery,
  ) $s = shape()) {
    $this->group_name = $group_name ?? "";
    $this->resource_query = $resource_query ?? null;
  }
}

class UpdateGroupQueryOutput {
  public GroupQuery $group_query;

  public function __construct(shape(
  ?'group_query' => GroupQuery,
  ) $s = shape()) {
    $this->group_query = $group_query ?? null;
  }
}

