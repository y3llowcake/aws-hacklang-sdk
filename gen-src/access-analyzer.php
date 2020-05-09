<?hh // strict
namespace slack\aws\access-analyzer;

interface AccessAnalyzer {
  public function CreateAnalyzer(CreateAnalyzerRequest) Awaitable<Errors\Result<CreateAnalyzerResponse>>;
  public function ListAnalyzers(ListAnalyzersRequest) Awaitable<Errors\Result<ListAnalyzersResponse>>;
  public function ListAnalyzedResources(ListAnalyzedResourcesRequest) Awaitable<Errors\Result<ListAnalyzedResourcesResponse>>;
  public function ListArchiveRules(ListArchiveRulesRequest) Awaitable<Errors\Result<ListArchiveRulesResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function StartResourceScan(StartResourceScanRequest) Awaitable<Errors\Error>;
  public function UpdateArchiveRule(UpdateArchiveRuleRequest) Awaitable<Errors\Error>;
  public function UpdateFindings(UpdateFindingsRequest) Awaitable<Errors\Error>;
  public function DeleteArchiveRule(DeleteArchiveRuleRequest) Awaitable<Errors\Error>;
  public function GetAnalyzer(GetAnalyzerRequest) Awaitable<Errors\Result<GetAnalyzerResponse>>;
  public function GetArchiveRule(GetArchiveRuleRequest) Awaitable<Errors\Result<GetArchiveRuleResponse>>;
  public function GetFinding(GetFindingRequest) Awaitable<Errors\Result<GetFindingResponse>>;
  public function ListFindings(ListFindingsRequest) Awaitable<Errors\Result<ListFindingsResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CreateArchiveRule(CreateArchiveRuleRequest) Awaitable<Errors\Error>;
  public function DeleteAnalyzer(DeleteAnalyzerRequest) Awaitable<Errors\Error>;
  public function GetAnalyzedResource(GetAnalyzedResourceRequest) Awaitable<Errors\Result<GetAnalyzedResourceResponse>>;
}

class FindingsList {
}

class UpdateArchiveRuleRequest {
  public FilterCriteriaMap $filter;
  public Name $rule_name;
  public Name $analyzer_name;
  public string $client_token;
}

class DeleteAnalyzerRequest {
  public Name $analyzer_name;
  public string $client_token;
}

class FindingIdList {
}

class FindingSourceList {
}

class FindingSourceType {
}

class Integer {
}

class ListAnalyzersRequest {
  public int $max_results;
  public Token $next_token;
  public Type $type;
}

class ListAnalyzersResponse {
  public AnalyzersList $analyzers;
  public Token $next_token;
}

class ArchiveRulesList {
}

class GetAnalyzedResourceResponse {
  public AnalyzedResource $resource;
}

class GetAnalyzerRequest {
  public Name $analyzer_name;
}

class ListAnalyzedResourcesResponse {
  public AnalyzedResourcesList $analyzed_resources;
  public Token $next_token;
}

class Name {
}

class ServiceQuotaExceededException {
  public string $message;
  public string $resource_id;
  public string $resource_type;
}

class StartResourceScanRequest {
  public AnalyzerArn $analyzer_arn;
  public ResourceArn $resource_arn;
}

class UntagResourceRequest {
  public TagKeys $tag_keys;
  public string $resource_arn;
}

class FindingStatusUpdate {
}

class UntagResourceResponse {
}

class DeleteArchiveRuleRequest {
  public Name $analyzer_name;
  public string $client_token;
  public Name $rule_name;
}

class ListAnalyzedResourcesRequest {
  public AnalyzerArn $analyzer_arn;
  public int $max_results;
  public Token $next_token;
  public ResourceType $resource_type;
}

class ResourceNotFoundException {
  public string $message;
  public string $resource_id;
  public string $resource_type;
}

class TagResourceRequest {
  public string $resource_arn;
  public TagsMap $tags;
}

class AnalyzersList {
}

class GetAnalyzedResourceRequest {
  public AnalyzerArn $analyzer_arn;
  public ResourceArn $resource_arn;
}

class OrderBy {
}

class Type {
}

class AnalyzedResourcesList {
}

class CreateAnalyzerResponse {
  public AnalyzerArn $arn;
}

class CreateArchiveRuleRequest {
  public Name $rule_name;
  public Name $analyzer_name;
  public string $client_token;
  public FilterCriteriaMap $filter;
}

class AccessDeniedException {
  public string $message;
}

class PrincipalMap {
}

class ResourceType {
}

class SortCriteria {
  public string $attribute_name;
  public OrderBy $order_by;
}

class ConflictException {
  public string $resource_type;
  public string $message;
  public string $resource_id;
}

class Boolean {
}

class Finding {
  public ActionList $action;
  public ConditionKeyMap $condition;
  public FindingId $id;
  public PrincipalMap $principal;
  public string $resource_owner_account;
  public Timestamp $created_at;
  public string $error;
  public string $resource;
  public Timestamp $updated_at;
  public boolean $is_public;
  public FindingStatus $status;
  public Timestamp $analyzed_at;
  public ResourceType $resource_type;
  public FindingSourceList $sources;
}

class FindingId {
}

class TagsMap {
}

class ValueList {
}

class ArchiveRuleSummary {
  public Timestamp $updated_at;
  public Timestamp $created_at;
  public FilterCriteriaMap $filter;
  public Name $rule_name;
}

class Criterion {
  public ValueList $contains;
  public ValueList $eq;
  public boolean $exists;
  public ValueList $neq;
}

class FindingSource {
  public FindingSourceType $type;
  public FindingSourceDetail $detail;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ValidationException {
  public ValidationExceptionReason $reason;
  public ValidationExceptionFieldList $field_list;
  public string $message;
}

class CreateAnalyzerRequest {
  public Name $analyzer_name;
  public InlineArchiveRulesList $archive_rules;
  public string $client_token;
  public TagsMap $tags;
  public Type $type;
}

class ListArchiveRulesRequest {
  public int $max_results;
  public Token $next_token;
  public Name $analyzer_name;
}

class ValidationExceptionField {
  public string $message;
  public string $name;
}

class ValidationExceptionReason {
}

class ActionList {
}

class GetFindingRequest {
  public AnalyzerArn $analyzer_arn;
  public FindingId $id;
}

class InlineArchiveRule {
  public FilterCriteriaMap $filter;
  public Name $rule_name;
}

class InternalServerException {
  public string $message;
  public int $retry_after_seconds;
}

class TagKeys {
}

class TagResourceResponse {
}

class ThrottlingException {
  public string $message;
  public int $retry_after_seconds;
}

class Timestamp {
}

class AnalyzerArn {
}

class UpdateFindingsRequest {
  public string $client_token;
  public FindingIdList $ids;
  public ResourceArn $resource_arn;
  public FindingStatusUpdate $status;
  public AnalyzerArn $analyzer_arn;
}

class FindingStatus {
}

class GetArchiveRuleResponse {
  public ArchiveRuleSummary $archive_rule;
}

class ListArchiveRulesResponse {
  public ArchiveRulesList $archive_rules;
  public Token $next_token;
}

class SharedViaList {
}

class StatusReason {
  public ReasonCode $code;
}

class Token {
}

class ValidationExceptionFieldList {
}

class FindingSourceDetail {
  public string $access_point_arn;
}

class ConditionKeyMap {
}

class GetAnalyzerResponse {
  public AnalyzerSummary $analyzer;
}

class ResourceArn {
}

class AnalyzedResource {
  public ActionList $actions;
  public FindingStatus $status;
  public Timestamp $updated_at;
  public boolean $is_public;
  public ResourceArn $resource_arn;
  public string $resource_owner_account;
  public ResourceType $resource_type;
  public SharedViaList $shared_via;
  public Timestamp $analyzed_at;
  public Timestamp $created_at;
  public string $error;
}

class FindingSummary {
  public boolean $is_public;
  public string $resource_owner_account;
  public FindingSourceList $sources;
  public ConditionKeyMap $condition;
  public FindingStatus $status;
  public Timestamp $analyzed_at;
  public PrincipalMap $principal;
  public Timestamp $updated_at;
  public ActionList $action;
  public Timestamp $created_at;
  public string $error;
  public FindingId $id;
  public string $resource;
  public ResourceType $resource_type;
}

class GetArchiveRuleRequest {
  public Name $analyzer_name;
  public Name $rule_name;
}

class ReasonCode {
}

class AnalyzerStatus {
}

class FilterCriteriaMap {
}

class GetFindingResponse {
  public Finding $finding;
}

class ListFindingsRequest {
  public SortCriteria $sort;
  public AnalyzerArn $analyzer_arn;
  public FilterCriteriaMap $filter;
  public int $max_results;
  public Token $next_token;
}

class AnalyzerSummary {
  public AnalyzerArn $arn;
  public Timestamp $created_at;
  public string $last_resource_analyzed;
  public AnalyzerStatus $status;
  public StatusReason $status_reason;
  public TagsMap $tags;
  public Timestamp $last_resource_analyzed_at;
  public Name $name;
  public Type $type;
}

class InlineArchiveRulesList {
}

class ListFindingsResponse {
  public FindingsList $findings;
  public Token $next_token;
}

class ListTagsForResourceResponse {
  public TagsMap $tags;
}

class String {
}

class AnalyzedResourceSummary {
  public ResourceArn $resource_arn;
  public string $resource_owner_account;
  public ResourceType $resource_type;
}

