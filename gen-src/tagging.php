<?hh // strict
namespace slack\aws\tagging;

interface Resource Groups Tagging API {
  public function DescribeReportCreation(DescribeReportCreationInput) Awaitable<Errors\Result<DescribeReportCreationOutput>>;
  public function GetComplianceSummary(GetComplianceSummaryInput) Awaitable<Errors\Result<GetComplianceSummaryOutput>>;
  public function GetResources(GetResourcesInput) Awaitable<Errors\Result<GetResourcesOutput>>;
  public function GetTagKeys(GetTagKeysInput) Awaitable<Errors\Result<GetTagKeysOutput>>;
  public function GetTagValues(GetTagValuesInput) Awaitable<Errors\Result<GetTagValuesOutput>>;
  public function StartReportCreation(StartReportCreationInput) Awaitable<Errors\Result<StartReportCreationOutput>>;
  public function TagResources(TagResourcesInput) Awaitable<Errors\Result<TagResourcesOutput>>;
  public function UntagResources(UntagResourcesInput) Awaitable<Errors\Result<UntagResourcesOutput>>;
}

class AmazonResourceType {
}

class ComplianceDetails {
  public ComplianceStatus $compliance_status;
  public TagKeyList $keys_with_noncompliant_values;
  public TagKeyList $noncompliant_keys;
}

class ComplianceStatus {
}

class ConcurrentModificationException {
  public ExceptionMessage $message;
}

class ConstraintViolationException {
  public ExceptionMessage $message;
}

class DescribeReportCreationInput {
}

class DescribeReportCreationOutput {
  public ErrorMessage $error_message;
  public S3Location $s_3_location;
  public Status $status;
}

class ErrorCode {
}

class ErrorMessage {
}

class ExceptionMessage {
}

class ExcludeCompliantResources {
}

class FailedResourcesMap {
}

class FailureInfo {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public StatusCode $status_code;
}

class GetComplianceSummaryInput {
  public GroupBy $group_by;
  public MaxResultsGetComplianceSummary $max_results;
  public PaginationToken $pagination_token;
  public RegionFilterList $region_filters;
  public ResourceTypeFilterList $resource_type_filters;
  public TagKeyFilterList $tag_key_filters;
  public TargetIdFilterList $target_id_filters;
}

class GetComplianceSummaryOutput {
  public PaginationToken $pagination_token;
  public SummaryList $summary_list;
}

class GetResourcesInput {
  public ExcludeCompliantResources $exclude_compliant_resources;
  public IncludeComplianceDetails $include_compliance_details;
  public PaginationToken $pagination_token;
  public ResourceTypeFilterList $resource_type_filters;
  public ResourcesPerPage $resources_per_page;
  public TagFilterList $tag_filters;
  public TagsPerPage $tags_per_page;
}

class GetResourcesOutput {
  public PaginationToken $pagination_token;
  public ResourceTagMappingList $resource_tag_mapping_list;
}

class GetTagKeysInput {
  public PaginationToken $pagination_token;
}

class GetTagKeysOutput {
  public PaginationToken $pagination_token;
  public TagKeyList $tag_keys;
}

class GetTagValuesInput {
  public TagKey $key;
  public PaginationToken $pagination_token;
}

class GetTagValuesOutput {
  public PaginationToken $pagination_token;
  public TagValuesOutputList $tag_values;
}

class GroupBy {
}

class GroupByAttribute {
}

class IncludeComplianceDetails {
}

class InternalServiceException {
  public ExceptionMessage $message;
}

class InvalidParameterException {
  public ExceptionMessage $message;
}

class LastUpdated {
}

class MaxResultsGetComplianceSummary {
}

class NonCompliantResources {
}

class PaginationToken {
}

class PaginationTokenExpiredException {
  public ExceptionMessage $message;
}

class Region {
}

class RegionFilterList {
}

class ResourceARN {
}

class ResourceARNList {
}

class ResourceTagMapping {
  public ComplianceDetails $compliance_details;
  public ResourceARN $resource_arn;
  public TagList $tags;
}

class ResourceTagMappingList {
}

class ResourceTypeFilterList {
}

class ResourcesPerPage {
}

class S3Bucket {
}

class S3Location {
}

class StartReportCreationInput {
  public S3Bucket $s_3_bucket;
}

class StartReportCreationOutput {
}

class Status {
}

class StatusCode {
}

class Summary {
  public LastUpdated $last_updated;
  public NonCompliantResources $non_compliant_resources;
  public Region $region;
  public AmazonResourceType $resource_type;
  public TargetId $target_id;
  public TargetIdType $target_id_type;
}

class SummaryList {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagFilter {
  public TagKey $key;
  public TagValueList $values;
}

class TagFilterList {
}

class TagKey {
}

class TagKeyFilterList {
}

class TagKeyList {
}

class TagKeyListForUntag {
}

class TagList {
}

class TagMap {
}

class TagResourcesInput {
  public ResourceARNList $resource_arn_list;
  public TagMap $tags;
}

class TagResourcesOutput {
  public FailedResourcesMap $failed_resources_map;
}

class TagValue {
}

class TagValueList {
}

class TagValuesOutputList {
}

class TagsPerPage {
}

class TargetId {
}

class TargetIdFilterList {
}

class TargetIdType {
}

class ThrottledException {
  public ExceptionMessage $message;
}

class UntagResourcesInput {
  public ResourceARNList $resource_arn_list;
  public TagKeyListForUntag $tag_keys;
}

class UntagResourcesOutput {
  public FailedResourcesMap $failed_resources_map;
}

