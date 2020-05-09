<?hh // strict
namespace slack\aws\access-analyzer;

interface AccessAnalyzer {
  public function CreateAnalyzer(CreateAnalyzerRequest): Awaitable<Errors\Result<CreateAnalyzerResponse>>;
  public function CreateArchiveRule(CreateArchiveRuleRequest): Awaitable<Errors\Error>;
  public function DeleteAnalyzer(DeleteAnalyzerRequest): Awaitable<Errors\Error>;
  public function DeleteArchiveRule(DeleteArchiveRuleRequest): Awaitable<Errors\Error>;
  public function GetAnalyzedResource(GetAnalyzedResourceRequest): Awaitable<Errors\Result<GetAnalyzedResourceResponse>>;
  public function GetAnalyzer(GetAnalyzerRequest): Awaitable<Errors\Result<GetAnalyzerResponse>>;
  public function GetArchiveRule(GetArchiveRuleRequest): Awaitable<Errors\Result<GetArchiveRuleResponse>>;
  public function GetFinding(GetFindingRequest): Awaitable<Errors\Result<GetFindingResponse>>;
  public function ListAnalyzedResources(ListAnalyzedResourcesRequest): Awaitable<Errors\Result<ListAnalyzedResourcesResponse>>;
  public function ListAnalyzers(ListAnalyzersRequest): Awaitable<Errors\Result<ListAnalyzersResponse>>;
  public function ListArchiveRules(ListArchiveRulesRequest): Awaitable<Errors\Result<ListArchiveRulesResponse>>;
  public function ListFindings(ListFindingsRequest): Awaitable<Errors\Result<ListFindingsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function StartResourceScan(StartResourceScanRequest): Awaitable<Errors\Error>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateArchiveRule(UpdateArchiveRuleRequest): Awaitable<Errors\Error>;
  public function UpdateFindings(UpdateFindingsRequest): Awaitable<Errors\Error>;
}

class AccessDeniedException {
  public string $message;
}

class ActionList {
}

class AnalyzedResource {
  public ActionList $actions;
  public Timestamp $analyzed_at;
  public Timestamp $created_at;
  public string $error;
  public boolean $is_public;
  public ResourceArn $resource_arn;
  public string $resource_owner_account;
  public ResourceType $resource_type;
  public SharedViaList $shared_via;
  public FindingStatus $status;
  public Timestamp $updated_at;
}

class AnalyzedResourceSummary {
  public ResourceArn $resource_arn;
  public string $resource_owner_account;
  public ResourceType $resource_type;
}

class AnalyzedResourcesList {
}

class AnalyzerArn {
}

class AnalyzerStatus {
}

class AnalyzerSummary {
  public AnalyzerArn $arn;
  public Timestamp $created_at;
  public string $last_resource_analyzed;
  public Timestamp $last_resource_analyzed_at;
  public Name $name;
  public AnalyzerStatus $status;
  public StatusReason $status_reason;
  public TagsMap $tags;
  public Type $type;
}

class AnalyzersList {
}

class ArchiveRuleSummary {
  public Timestamp $created_at;
  public FilterCriteriaMap $filter;
  public Name $rule_name;
  public Timestamp $updated_at;
}

class ArchiveRulesList {
}

class Boolean {
}

class ConditionKeyMap {
}

class ConflictException {
  public string $message;
  public string $resource_id;
  public string $resource_type;
}

class CreateAnalyzerRequest {
  public Name $analyzer_name;
  public InlineArchiveRulesList $archive_rules;
  public string $client_token;
  public TagsMap $tags;
  public Type $type;
}

class CreateAnalyzerResponse {
  public AnalyzerArn $arn;
}

class CreateArchiveRuleRequest {
  public Name $analyzer_name;
  public string $client_token;
  public FilterCriteriaMap $filter;
  public Name $rule_name;
}

class Criterion {
  public ValueList $contains;
  public ValueList $eq;
  public boolean $exists;
  public ValueList $neq;
}

class DeleteAnalyzerRequest {
  public Name $analyzer_name;
  public string $client_token;
}

class DeleteArchiveRuleRequest {
  public Name $analyzer_name;
  public string $client_token;
  public Name $rule_name;
}

class FilterCriteriaMap {
}

class Finding {
  public ActionList $action;
  public Timestamp $analyzed_at;
  public ConditionKeyMap $condition;
  public Timestamp $created_at;
  public string $error;
  public FindingId $id;
  public boolean $is_public;
  public PrincipalMap $principal;
  public string $resource;
  public string $resource_owner_account;
  public ResourceType $resource_type;
  public FindingSourceList $sources;
  public FindingStatus $status;
  public Timestamp $updated_at;
}

class FindingId {
}

class FindingIdList {
}

class FindingSource {
  public FindingSourceDetail $detail;
  public FindingSourceType $type;
}

class FindingSourceDetail {
  public string $access_point_arn;
}

class FindingSourceList {
}

class FindingSourceType {
}

class FindingStatus {
}

class FindingStatusUpdate {
}

class FindingSummary {
  public ActionList $action;
  public Timestamp $analyzed_at;
  public ConditionKeyMap $condition;
  public Timestamp $created_at;
  public string $error;
  public FindingId $id;
  public boolean $is_public;
  public PrincipalMap $principal;
  public string $resource;
  public string $resource_owner_account;
  public ResourceType $resource_type;
  public FindingSourceList $sources;
  public FindingStatus $status;
  public Timestamp $updated_at;
}

class FindingsList {
}

class GetAnalyzedResourceRequest {
  public AnalyzerArn $analyzer_arn;
  public ResourceArn $resource_arn;
}

class GetAnalyzedResourceResponse {
  public AnalyzedResource $resource;
}

class GetAnalyzerRequest {
  public Name $analyzer_name;
}

class GetAnalyzerResponse {
  public AnalyzerSummary $analyzer;
}

class GetArchiveRuleRequest {
  public Name $analyzer_name;
  public Name $rule_name;
}

class GetArchiveRuleResponse {
  public ArchiveRuleSummary $archive_rule;
}

class GetFindingRequest {
  public AnalyzerArn $analyzer_arn;
  public FindingId $id;
}

class GetFindingResponse {
  public Finding $finding;
}

class InlineArchiveRule {
  public FilterCriteriaMap $filter;
  public Name $rule_name;
}

class InlineArchiveRulesList {
}

class Integer {
}

class InternalServerException {
  public string $message;
  public int $retry_after_seconds;
}

class ListAnalyzedResourcesRequest {
  public AnalyzerArn $analyzer_arn;
  public int $max_results;
  public Token $next_token;
  public ResourceType $resource_type;
}

class ListAnalyzedResourcesResponse {
  public AnalyzedResourcesList $analyzed_resources;
  public Token $next_token;
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

class ListArchiveRulesRequest {
  public Name $analyzer_name;
  public int $max_results;
  public Token $next_token;
}

class ListArchiveRulesResponse {
  public ArchiveRulesList $archive_rules;
  public Token $next_token;
}

class ListFindingsRequest {
  public AnalyzerArn $analyzer_arn;
  public FilterCriteriaMap $filter;
  public int $max_results;
  public Token $next_token;
  public SortCriteria $sort;
}

class ListFindingsResponse {
  public FindingsList $findings;
  public Token $next_token;
}

class ListTagsForResourceRequest {
  public string $resource_arn;
}

class ListTagsForResourceResponse {
  public TagsMap $tags;
}

class Name {
}

class OrderBy {
}

class PrincipalMap {
}

class ReasonCode {
}

class ResourceArn {
}

class ResourceNotFoundException {
  public string $message;
  public string $resource_id;
  public string $resource_type;
}

class ResourceType {
}

class ServiceQuotaExceededException {
  public string $message;
  public string $resource_id;
  public string $resource_type;
}

class SharedViaList {
}

class SortCriteria {
  public string $attribute_name;
  public OrderBy $order_by;
}

class StartResourceScanRequest {
  public AnalyzerArn $analyzer_arn;
  public ResourceArn $resource_arn;
}

class StatusReason {
  public ReasonCode $code;
}

class String {
}

class TagKeys {
}

class TagResourceRequest {
  public string $resource_arn;
  public TagsMap $tags;
}

class TagResourceResponse {
}

class TagsMap {
}

class ThrottlingException {
  public string $message;
  public int $retry_after_seconds;
}

class Timestamp {
}

class Token {
}

class Type {
}

class UntagResourceRequest {
  public string $resource_arn;
  public TagKeys $tag_keys;
}

class UntagResourceResponse {
}

class UpdateArchiveRuleRequest {
  public Name $analyzer_name;
  public string $client_token;
  public FilterCriteriaMap $filter;
  public Name $rule_name;
}

class UpdateFindingsRequest {
  public AnalyzerArn $analyzer_arn;
  public string $client_token;
  public FindingIdList $ids;
  public ResourceArn $resource_arn;
  public FindingStatusUpdate $status;
}

class ValidationException {
  public ValidationExceptionFieldList $field_list;
  public string $message;
  public ValidationExceptionReason $reason;
}

class ValidationExceptionField {
  public string $message;
  public string $name;
}

class ValidationExceptionFieldList {
}

class ValidationExceptionReason {
}

class ValueList {
}

