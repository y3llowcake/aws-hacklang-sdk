<?hh // strict
namespace slack\aws\access-analyzer;

interface AccessAnalyzer {
  public function CreateAnalyzer(CreateAnalyzerRequest $in): Awaitable<\Errors\Result<CreateAnalyzerResponse>>;
  public function CreateArchiveRule(CreateArchiveRuleRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAnalyzer(DeleteAnalyzerRequest $in): Awaitable<\Errors\Error>;
  public function DeleteArchiveRule(DeleteArchiveRuleRequest $in): Awaitable<\Errors\Error>;
  public function GetAnalyzedResource(GetAnalyzedResourceRequest $in): Awaitable<\Errors\Result<GetAnalyzedResourceResponse>>;
  public function GetAnalyzer(GetAnalyzerRequest $in): Awaitable<\Errors\Result<GetAnalyzerResponse>>;
  public function GetArchiveRule(GetArchiveRuleRequest $in): Awaitable<\Errors\Result<GetArchiveRuleResponse>>;
  public function GetFinding(GetFindingRequest $in): Awaitable<\Errors\Result<GetFindingResponse>>;
  public function ListAnalyzedResources(ListAnalyzedResourcesRequest $in): Awaitable<\Errors\Result<ListAnalyzedResourcesResponse>>;
  public function ListAnalyzers(ListAnalyzersRequest $in): Awaitable<\Errors\Result<ListAnalyzersResponse>>;
  public function ListArchiveRules(ListArchiveRulesRequest $in): Awaitable<\Errors\Result<ListArchiveRulesResponse>>;
  public function ListFindings(ListFindingsRequest $in): Awaitable<\Errors\Result<ListFindingsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function StartResourceScan(StartResourceScanRequest $in): Awaitable<\Errors\Error>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResponse>>;
  public function UpdateArchiveRule(UpdateArchiveRuleRequest $in): Awaitable<\Errors\Error>;
  public function UpdateFindings(UpdateFindingsRequest $in): Awaitable<\Errors\Error>;
}

class AccessDeniedException {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ActionList = vec<String>;

class AnalyzedResource {
  public ?ActionList $actions;
  public ?Timestamp $analyzed_at;
  public ?Timestamp $created_at;
  public string $error;
  public bool $is_public;
  public ?ResourceArn $resource_arn;
  public string $resource_owner_account;
  public ?ResourceType $resource_type;
  public ?SharedViaList $shared_via;
  public ?FindingStatus $status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'actions' => ?ActionList,
    ?'analyzed_at' => ?Timestamp,
    ?'created_at' => ?Timestamp,
    ?'error' => string,
    ?'is_public' => bool,
    ?'resource_arn' => ?ResourceArn,
    ?'resource_owner_account' => string,
    ?'resource_type' => ?ResourceType,
    ?'shared_via' => ?SharedViaList,
    ?'status' => ?FindingStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->analyzed_at = $s['analyzed_at'] ?? 0;
    $this->created_at = $s['created_at'] ?? 0;
    $this->error = $s['error'] ?? '';
    $this->is_public = $s['is_public'] ?? false;
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_owner_account = $s['resource_owner_account'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->shared_via = $s['shared_via'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class AnalyzedResourceSummary {
  public ?ResourceArn $resource_arn;
  public string $resource_owner_account;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'resource_owner_account' => string,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_owner_account = $s['resource_owner_account'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type AnalyzedResourcesList = vec<AnalyzedResourceSummary>;

type AnalyzerArn = string;

type AnalyzerStatus = string;

class AnalyzerSummary {
  public ?AnalyzerArn $arn;
  public ?Timestamp $created_at;
  public string $last_resource_analyzed;
  public ?Timestamp $last_resource_analyzed_at;
  public ?Name $name;
  public ?AnalyzerStatus $status;
  public ?StatusReason $status_reason;
  public ?TagsMap $tags;
  public ?Type $type;

  public function __construct(shape(
    ?'arn' => ?AnalyzerArn,
    ?'created_at' => ?Timestamp,
    ?'last_resource_analyzed' => string,
    ?'last_resource_analyzed_at' => ?Timestamp,
    ?'name' => ?Name,
    ?'status' => ?AnalyzerStatus,
    ?'status_reason' => ?StatusReason,
    ?'tags' => ?TagsMap,
    ?'type' => ?Type,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->last_resource_analyzed = $s['last_resource_analyzed'] ?? '';
    $this->last_resource_analyzed_at = $s['last_resource_analyzed_at'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_reason = $s['status_reason'] ?? null;
    $this->tags = $s['tags'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

type AnalyzersList = vec<AnalyzerSummary>;

class ArchiveRuleSummary {
  public ?Timestamp $created_at;
  public ?FilterCriteriaMap $filter;
  public ?Name $rule_name;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'created_at' => ?Timestamp,
    ?'filter' => ?FilterCriteriaMap,
    ?'rule_name' => ?Name,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->filter = $s['filter'] ?? dict[];
    $this->rule_name = $s['rule_name'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type ArchiveRulesList = vec<ArchiveRuleSummary>;

type Boolean = bool;

type ConditionKeyMap = dict<String, String>;

class ConflictException {
  public string $message;
  public string $resource_id;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_id' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class CreateAnalyzerRequest {
  public ?Name $analyzer_name;
  public ?InlineArchiveRulesList $archive_rules;
  public string $client_token;
  public ?TagsMap $tags;
  public ?Type $type;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
    ?'archive_rules' => ?InlineArchiveRulesList,
    ?'client_token' => string,
    ?'tags' => ?TagsMap,
    ?'type' => ?Type,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
    $this->archive_rules = $s['archive_rules'] ?? vec[];
    $this->client_token = $s['client_token'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->type = $s['type'] ?? '';
  }
}

class CreateAnalyzerResponse {
  public ?AnalyzerArn $arn;

  public function __construct(shape(
    ?'arn' => ?AnalyzerArn,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

class CreateArchiveRuleRequest {
  public ?Name $analyzer_name;
  public string $client_token;
  public ?FilterCriteriaMap $filter;
  public ?Name $rule_name;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
    ?'client_token' => string,
    ?'filter' => ?FilterCriteriaMap,
    ?'rule_name' => ?Name,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->filter = $s['filter'] ?? dict[];
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

class Criterion {
  public ?ValueList $contains;
  public ?ValueList $eq;
  public bool $exists;
  public ?ValueList $neq;

  public function __construct(shape(
    ?'contains' => ?ValueList,
    ?'eq' => ?ValueList,
    ?'exists' => bool,
    ?'neq' => ?ValueList,
  ) $s = shape()) {
    $this->contains = $s['contains'] ?? vec[];
    $this->eq = $s['eq'] ?? vec[];
    $this->exists = $s['exists'] ?? false;
    $this->neq = $s['neq'] ?? vec[];
  }
}

class DeleteAnalyzerRequest {
  public ?Name $analyzer_name;
  public string $client_token;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
    ?'client_token' => string,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
  }
}

class DeleteArchiveRuleRequest {
  public ?Name $analyzer_name;
  public string $client_token;
  public ?Name $rule_name;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
    ?'client_token' => string,
    ?'rule_name' => ?Name,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

type FilterCriteriaMap = dict<String, Criterion>;

class Finding {
  public ?ActionList $action;
  public ?Timestamp $analyzed_at;
  public ?ConditionKeyMap $condition;
  public ?Timestamp $created_at;
  public string $error;
  public ?FindingId $id;
  public bool $is_public;
  public ?PrincipalMap $principal;
  public string $resource;
  public string $resource_owner_account;
  public ?ResourceType $resource_type;
  public ?FindingSourceList $sources;
  public ?FindingStatus $status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'action' => ?ActionList,
    ?'analyzed_at' => ?Timestamp,
    ?'condition' => ?ConditionKeyMap,
    ?'created_at' => ?Timestamp,
    ?'error' => string,
    ?'id' => ?FindingId,
    ?'is_public' => bool,
    ?'principal' => ?PrincipalMap,
    ?'resource' => string,
    ?'resource_owner_account' => string,
    ?'resource_type' => ?ResourceType,
    ?'sources' => ?FindingSourceList,
    ?'status' => ?FindingStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->action = $s['action'] ?? vec[];
    $this->analyzed_at = $s['analyzed_at'] ?? 0;
    $this->condition = $s['condition'] ?? dict[];
    $this->created_at = $s['created_at'] ?? 0;
    $this->error = $s['error'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->is_public = $s['is_public'] ?? false;
    $this->principal = $s['principal'] ?? dict[];
    $this->resource = $s['resource'] ?? '';
    $this->resource_owner_account = $s['resource_owner_account'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->sources = $s['sources'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type FindingId = string;

type FindingIdList = vec<FindingId>;

class FindingSource {
  public ?FindingSourceDetail $detail;
  public ?FindingSourceType $type;

  public function __construct(shape(
    ?'detail' => ?FindingSourceDetail,
    ?'type' => ?FindingSourceType,
  ) $s = shape()) {
    $this->detail = $s['detail'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

class FindingSourceDetail {
  public string $access_point_arn;

  public function __construct(shape(
    ?'access_point_arn' => string,
  ) $s = shape()) {
    $this->access_point_arn = $s['access_point_arn'] ?? '';
  }
}

type FindingSourceList = vec<FindingSource>;

type FindingSourceType = string;

type FindingStatus = string;

type FindingStatusUpdate = string;

class FindingSummary {
  public ?ActionList $action;
  public ?Timestamp $analyzed_at;
  public ?ConditionKeyMap $condition;
  public ?Timestamp $created_at;
  public string $error;
  public ?FindingId $id;
  public bool $is_public;
  public ?PrincipalMap $principal;
  public string $resource;
  public string $resource_owner_account;
  public ?ResourceType $resource_type;
  public ?FindingSourceList $sources;
  public ?FindingStatus $status;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'action' => ?ActionList,
    ?'analyzed_at' => ?Timestamp,
    ?'condition' => ?ConditionKeyMap,
    ?'created_at' => ?Timestamp,
    ?'error' => string,
    ?'id' => ?FindingId,
    ?'is_public' => bool,
    ?'principal' => ?PrincipalMap,
    ?'resource' => string,
    ?'resource_owner_account' => string,
    ?'resource_type' => ?ResourceType,
    ?'sources' => ?FindingSourceList,
    ?'status' => ?FindingStatus,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->action = $s['action'] ?? vec[];
    $this->analyzed_at = $s['analyzed_at'] ?? 0;
    $this->condition = $s['condition'] ?? dict[];
    $this->created_at = $s['created_at'] ?? 0;
    $this->error = $s['error'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->is_public = $s['is_public'] ?? false;
    $this->principal = $s['principal'] ?? dict[];
    $this->resource = $s['resource'] ?? '';
    $this->resource_owner_account = $s['resource_owner_account'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->sources = $s['sources'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type FindingsList = vec<FindingSummary>;

class GetAnalyzedResourceRequest {
  public ?AnalyzerArn $analyzer_arn;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'analyzer_arn' => ?AnalyzerArn,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->analyzer_arn = $s['analyzer_arn'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class GetAnalyzedResourceResponse {
  public ?AnalyzedResource $resource;

  public function __construct(shape(
    ?'resource' => ?AnalyzedResource,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? null;
  }
}

class GetAnalyzerRequest {
  public ?Name $analyzer_name;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
  }
}

class GetAnalyzerResponse {
  public ?AnalyzerSummary $analyzer;

  public function __construct(shape(
    ?'analyzer' => ?AnalyzerSummary,
  ) $s = shape()) {
    $this->analyzer = $s['analyzer'] ?? null;
  }
}

class GetArchiveRuleRequest {
  public ?Name $analyzer_name;
  public ?Name $rule_name;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
    ?'rule_name' => ?Name,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

class GetArchiveRuleResponse {
  public ?ArchiveRuleSummary $archive_rule;

  public function __construct(shape(
    ?'archive_rule' => ?ArchiveRuleSummary,
  ) $s = shape()) {
    $this->archive_rule = $s['archive_rule'] ?? null;
  }
}

class GetFindingRequest {
  public ?AnalyzerArn $analyzer_arn;
  public ?FindingId $id;

  public function __construct(shape(
    ?'analyzer_arn' => ?AnalyzerArn,
    ?'id' => ?FindingId,
  ) $s = shape()) {
    $this->analyzer_arn = $s['analyzer_arn'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class GetFindingResponse {
  public ?Finding $finding;

  public function __construct(shape(
    ?'finding' => ?Finding,
  ) $s = shape()) {
    $this->finding = $s['finding'] ?? null;
  }
}

class InlineArchiveRule {
  public ?FilterCriteriaMap $filter;
  public ?Name $rule_name;

  public function __construct(shape(
    ?'filter' => ?FilterCriteriaMap,
    ?'rule_name' => ?Name,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? dict[];
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

type InlineArchiveRulesList = vec<InlineArchiveRule>;

type Integer = int;

class InternalServerException {
  public string $message;
  public int $retry_after_seconds;

  public function __construct(shape(
    ?'message' => string,
    ?'retry_after_seconds' => int,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? 0;
  }
}

class ListAnalyzedResourcesRequest {
  public ?AnalyzerArn $analyzer_arn;
  public int $max_results;
  public ?Token $next_token;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'analyzer_arn' => ?AnalyzerArn,
    ?'max_results' => int,
    ?'next_token' => ?Token,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->analyzer_arn = $s['analyzer_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class ListAnalyzedResourcesResponse {
  public ?AnalyzedResourcesList $analyzed_resources;
  public ?Token $next_token;

  public function __construct(shape(
    ?'analyzed_resources' => ?AnalyzedResourcesList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->analyzed_resources = $s['analyzed_resources'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAnalyzersRequest {
  public int $max_results;
  public ?Token $next_token;
  public ?Type $type;

  public function __construct(shape(
    ?'max_results' => int,
    ?'next_token' => ?Token,
    ?'type' => ?Type,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class ListAnalyzersResponse {
  public ?AnalyzersList $analyzers;
  public ?Token $next_token;

  public function __construct(shape(
    ?'analyzers' => ?AnalyzersList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->analyzers = $s['analyzers'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListArchiveRulesRequest {
  public ?Name $analyzer_name;
  public int $max_results;
  public ?Token $next_token;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
    ?'max_results' => int,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListArchiveRulesResponse {
  public ?ArchiveRulesList $archive_rules;
  public ?Token $next_token;

  public function __construct(shape(
    ?'archive_rules' => ?ArchiveRulesList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->archive_rules = $s['archive_rules'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFindingsRequest {
  public ?AnalyzerArn $analyzer_arn;
  public ?FilterCriteriaMap $filter;
  public int $max_results;
  public ?Token $next_token;
  public ?SortCriteria $sort;

  public function __construct(shape(
    ?'analyzer_arn' => ?AnalyzerArn,
    ?'filter' => ?FilterCriteriaMap,
    ?'max_results' => int,
    ?'next_token' => ?Token,
    ?'sort' => ?SortCriteria,
  ) $s = shape()) {
    $this->analyzer_arn = $s['analyzer_arn'] ?? '';
    $this->filter = $s['filter'] ?? dict[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->sort = $s['sort'] ?? null;
  }
}

class ListFindingsResponse {
  public ?FindingsList $findings;
  public ?Token $next_token;

  public function __construct(shape(
    ?'findings' => ?FindingsList,
    ?'next_token' => ?Token,
  ) $s = shape()) {
    $this->findings = $s['findings'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?TagsMap $tags;

  public function __construct(shape(
    ?'tags' => ?TagsMap,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

type Name = string;

type OrderBy = string;

type PrincipalMap = dict<String, String>;

type ReasonCode = string;

type ResourceArn = string;

class ResourceNotFoundException {
  public string $message;
  public string $resource_id;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_id' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ResourceType = string;

class ServiceQuotaExceededException {
  public string $message;
  public string $resource_id;
  public string $resource_type;

  public function __construct(shape(
    ?'message' => string,
    ?'resource_id' => string,
    ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type SharedViaList = vec<String>;

class SortCriteria {
  public string $attribute_name;
  public ?OrderBy $order_by;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'order_by' => ?OrderBy,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->order_by = $s['order_by'] ?? '';
  }
}

class StartResourceScanRequest {
  public ?AnalyzerArn $analyzer_arn;
  public ?ResourceArn $resource_arn;

  public function __construct(shape(
    ?'analyzer_arn' => ?AnalyzerArn,
    ?'resource_arn' => ?ResourceArn,
  ) $s = shape()) {
    $this->analyzer_arn = $s['analyzer_arn'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class StatusReason {
  public ?ReasonCode $code;

  public function __construct(shape(
    ?'code' => ?ReasonCode,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
  }
}

type String = string;

type TagKeys = vec<String>;

class TagResourceRequest {
  public string $resource_arn;
  public ?TagsMap $tags;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tags' => ?TagsMap,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagsMap = dict<String, String>;

class ThrottlingException {
  public string $message;
  public int $retry_after_seconds;

  public function __construct(shape(
    ?'message' => string,
    ?'retry_after_seconds' => int,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->retry_after_seconds = $s['retry_after_seconds'] ?? 0;
  }
}

type Timestamp = int;

type Token = string;

type Type = string;

class UntagResourceRequest {
  public string $resource_arn;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => string,
    ?'tag_keys' => ?TagKeys,
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

class UpdateArchiveRuleRequest {
  public ?Name $analyzer_name;
  public string $client_token;
  public ?FilterCriteriaMap $filter;
  public ?Name $rule_name;

  public function __construct(shape(
    ?'analyzer_name' => ?Name,
    ?'client_token' => string,
    ?'filter' => ?FilterCriteriaMap,
    ?'rule_name' => ?Name,
  ) $s = shape()) {
    $this->analyzer_name = $s['analyzer_name'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->filter = $s['filter'] ?? dict[];
    $this->rule_name = $s['rule_name'] ?? '';
  }
}

class UpdateFindingsRequest {
  public ?AnalyzerArn $analyzer_arn;
  public string $client_token;
  public ?FindingIdList $ids;
  public ?ResourceArn $resource_arn;
  public ?FindingStatusUpdate $status;

  public function __construct(shape(
    ?'analyzer_arn' => ?AnalyzerArn,
    ?'client_token' => string,
    ?'ids' => ?FindingIdList,
    ?'resource_arn' => ?ResourceArn,
    ?'status' => ?FindingStatusUpdate,
  ) $s = shape()) {
    $this->analyzer_arn = $s['analyzer_arn'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->ids = $s['ids'] ?? vec[];
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ValidationException {
  public ?ValidationExceptionFieldList $field_list;
  public string $message;
  public ?ValidationExceptionReason $reason;

  public function __construct(shape(
    ?'field_list' => ?ValidationExceptionFieldList,
    ?'message' => string,
    ?'reason' => ?ValidationExceptionReason,
  ) $s = shape()) {
    $this->field_list = $s['field_list'] ?? vec[];
    $this->message = $s['message'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

class ValidationExceptionField {
  public string $message;
  public string $name;

  public function __construct(shape(
    ?'message' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type ValidationExceptionFieldList = vec<ValidationExceptionField>;

type ValidationExceptionReason = string;

type ValueList = vec<String>;

