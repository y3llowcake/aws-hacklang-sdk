<?hh // strict
namespace slack\aws\tagging;

interface Resource Groups Tagging API {
  public function DescribeReportCreation(DescribeReportCreationInput): Awaitable<Errors\Result<DescribeReportCreationOutput>>;
  public function GetComplianceSummary(GetComplianceSummaryInput): Awaitable<Errors\Result<GetComplianceSummaryOutput>>;
  public function GetResources(GetResourcesInput): Awaitable<Errors\Result<GetResourcesOutput>>;
  public function GetTagKeys(GetTagKeysInput): Awaitable<Errors\Result<GetTagKeysOutput>>;
  public function GetTagValues(GetTagValuesInput): Awaitable<Errors\Result<GetTagValuesOutput>>;
  public function StartReportCreation(StartReportCreationInput): Awaitable<Errors\Result<StartReportCreationOutput>>;
  public function TagResources(TagResourcesInput): Awaitable<Errors\Result<TagResourcesOutput>>;
  public function UntagResources(UntagResourcesInput): Awaitable<Errors\Result<UntagResourcesOutput>>;
}

type AmazonResourceType = string;

class ComplianceDetails {
  public ComplianceStatus $compliance_status;
  public TagKeyList $keys_with_noncompliant_values;
  public TagKeyList $noncompliant_keys;

  public function __construct(shape(
  ?'compliance_status' => ComplianceStatus,
  ?'keys_with_noncompliant_values' => TagKeyList,
  ?'noncompliant_keys' => TagKeyList,
  ) $s = shape()) {
    $this->compliance_status = $compliance_status ?? false;
    $this->keys_with_noncompliant_values = $keys_with_noncompliant_values ?? ;
    $this->noncompliant_keys = $noncompliant_keys ?? ;
  }
}

type ComplianceStatus = bool;

class ConcurrentModificationException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ConstraintViolationException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DescribeReportCreationInput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeReportCreationOutput {
  public ErrorMessage $error_message;
  public S3Location $s_3_location;
  public Status $status;

  public function __construct(shape(
  ?'error_message' => ErrorMessage,
  ?'s_3_location' => S3Location,
  ?'status' => Status,
  ) $s = shape()) {
    $this->error_message = $error_message ?? "";
    $this->s_3_location = $s_3_location ?? "";
    $this->status = $status ?? "";
  }
}

type ErrorCode = string;

type ErrorMessage = string;

type ExceptionMessage = string;

type ExcludeCompliantResources = bool;

type FailedResourcesMap = dict<ResourceARN, FailureInfo>;

class FailureInfo {
  public ErrorCode $error_code;
  public ErrorMessage $error_message;
  public StatusCode $status_code;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'error_message' => ErrorMessage,
  ?'status_code' => StatusCode,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->error_message = $error_message ?? "";
    $this->status_code = $status_code ?? 0;
  }
}

class GetComplianceSummaryInput {
  public GroupBy $group_by;
  public MaxResultsGetComplianceSummary $max_results;
  public PaginationToken $pagination_token;
  public RegionFilterList $region_filters;
  public ResourceTypeFilterList $resource_type_filters;
  public TagKeyFilterList $tag_key_filters;
  public TargetIdFilterList $target_id_filters;

  public function __construct(shape(
  ?'group_by' => GroupBy,
  ?'max_results' => MaxResultsGetComplianceSummary,
  ?'pagination_token' => PaginationToken,
  ?'region_filters' => RegionFilterList,
  ?'resource_type_filters' => ResourceTypeFilterList,
  ?'tag_key_filters' => TagKeyFilterList,
  ?'target_id_filters' => TargetIdFilterList,
  ) $s = shape()) {
    $this->group_by = $group_by ?? [];
    $this->max_results = $max_results ?? ;
    $this->pagination_token = $pagination_token ?? "";
    $this->region_filters = $region_filters ?? ;
    $this->resource_type_filters = $resource_type_filters ?? ;
    $this->tag_key_filters = $tag_key_filters ?? ;
    $this->target_id_filters = $target_id_filters ?? ;
  }
}

class GetComplianceSummaryOutput {
  public PaginationToken $pagination_token;
  public SummaryList $summary_list;

  public function __construct(shape(
  ?'pagination_token' => PaginationToken,
  ?'summary_list' => SummaryList,
  ) $s = shape()) {
    $this->pagination_token = $pagination_token ?? "";
    $this->summary_list = $summary_list ?? [];
  }
}

class GetResourcesInput {
  public ExcludeCompliantResources $exclude_compliant_resources;
  public IncludeComplianceDetails $include_compliance_details;
  public PaginationToken $pagination_token;
  public ResourceTypeFilterList $resource_type_filters;
  public ResourcesPerPage $resources_per_page;
  public TagFilterList $tag_filters;
  public TagsPerPage $tags_per_page;

  public function __construct(shape(
  ?'exclude_compliant_resources' => ExcludeCompliantResources,
  ?'include_compliance_details' => IncludeComplianceDetails,
  ?'pagination_token' => PaginationToken,
  ?'resource_type_filters' => ResourceTypeFilterList,
  ?'resources_per_page' => ResourcesPerPage,
  ?'tag_filters' => TagFilterList,
  ?'tags_per_page' => TagsPerPage,
  ) $s = shape()) {
    $this->exclude_compliant_resources = $exclude_compliant_resources ?? false;
    $this->include_compliance_details = $include_compliance_details ?? false;
    $this->pagination_token = $pagination_token ?? "";
    $this->resource_type_filters = $resource_type_filters ?? ;
    $this->resources_per_page = $resources_per_page ?? 0;
    $this->tag_filters = $tag_filters ?? ;
    $this->tags_per_page = $tags_per_page ?? 0;
  }
}

class GetResourcesOutput {
  public PaginationToken $pagination_token;
  public ResourceTagMappingList $resource_tag_mapping_list;

  public function __construct(shape(
  ?'pagination_token' => PaginationToken,
  ?'resource_tag_mapping_list' => ResourceTagMappingList,
  ) $s = shape()) {
    $this->pagination_token = $pagination_token ?? "";
    $this->resource_tag_mapping_list = $resource_tag_mapping_list ?? [];
  }
}

class GetTagKeysInput {
  public PaginationToken $pagination_token;

  public function __construct(shape(
  ?'pagination_token' => PaginationToken,
  ) $s = shape()) {
    $this->pagination_token = $pagination_token ?? "";
  }
}

class GetTagKeysOutput {
  public PaginationToken $pagination_token;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'pagination_token' => PaginationToken,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->pagination_token = $pagination_token ?? "";
    $this->tag_keys = $tag_keys ?? ;
  }
}

class GetTagValuesInput {
  public TagKey $key;
  public PaginationToken $pagination_token;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'pagination_token' => PaginationToken,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->pagination_token = $pagination_token ?? "";
  }
}

class GetTagValuesOutput {
  public PaginationToken $pagination_token;
  public TagValuesOutputList $tag_values;

  public function __construct(shape(
  ?'pagination_token' => PaginationToken,
  ?'tag_values' => TagValuesOutputList,
  ) $s = shape()) {
    $this->pagination_token = $pagination_token ?? "";
    $this->tag_values = $tag_values ?? ;
  }
}

type GroupBy = vec<GroupByAttribute>;

type GroupByAttribute = string;

type IncludeComplianceDetails = bool;

class InternalServiceException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type LastUpdated = string;

type MaxResultsGetComplianceSummary = int;

type NonCompliantResources = int;

type PaginationToken = string;

class PaginationTokenExpiredException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Region = string;

type RegionFilterList = vec<Region>;

type ResourceARN = string;

type ResourceARNList = vec<ResourceARN>;

class ResourceTagMapping {
  public ComplianceDetails $compliance_details;
  public ResourceARN $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'compliance_details' => ComplianceDetails,
  ?'resource_arn' => ResourceARN,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->compliance_details = $compliance_details ?? null;
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? ;
  }
}

type ResourceTagMappingList = vec<ResourceTagMapping>;

type ResourceTypeFilterList = vec<AmazonResourceType>;

type ResourcesPerPage = int;

type S3Bucket = string;

type S3Location = string;

class StartReportCreationInput {
  public S3Bucket $s_3_bucket;

  public function __construct(shape(
  ?'s_3_bucket' => S3Bucket,
  ) $s = shape()) {
    $this->s_3_bucket = $s_3_bucket ?? "";
  }
}

class StartReportCreationOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Status = string;

type StatusCode = int;

class Summary {
  public LastUpdated $last_updated;
  public NonCompliantResources $non_compliant_resources;
  public Region $region;
  public AmazonResourceType $resource_type;
  public TargetId $target_id;
  public TargetIdType $target_id_type;

  public function __construct(shape(
  ?'last_updated' => LastUpdated,
  ?'non_compliant_resources' => NonCompliantResources,
  ?'region' => Region,
  ?'resource_type' => AmazonResourceType,
  ?'target_id' => TargetId,
  ?'target_id_type' => TargetIdType,
  ) $s = shape()) {
    $this->last_updated = $last_updated ?? "";
    $this->non_compliant_resources = $non_compliant_resources ?? 0;
    $this->region = $region ?? "";
    $this->resource_type = $resource_type ?? ;
    $this->target_id = $target_id ?? "";
    $this->target_id_type = $target_id_type ?? "";
  }
}

type SummaryList = vec<Summary>;

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

class TagFilter {
  public TagKey $key;
  public TagValueList $values;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'values' => TagValueList,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->values = $values ?? ;
  }
}

type TagFilterList = vec<TagFilter>;

type TagKey = string;

type TagKeyFilterList = vec<TagKey>;

type TagKeyList = vec<TagKey>;

type TagKeyListForUntag = vec<TagKey>;

type TagList = vec<Tag>;

type TagMap = dict<TagKey, TagValue>;

class TagResourcesInput {
  public ResourceARNList $resource_arn_list;
  public TagMap $tags;

  public function __construct(shape(
  ?'resource_arn_list' => ResourceARNList,
  ?'tags' => TagMap,
  ) $s = shape()) {
    $this->resource_arn_list = $resource_arn_list ?? [];
    $this->tags = $tags ?? ;
  }
}

class TagResourcesOutput {
  public FailedResourcesMap $failed_resources_map;

  public function __construct(shape(
  ?'failed_resources_map' => FailedResourcesMap,
  ) $s = shape()) {
    $this->failed_resources_map = $failed_resources_map ?? [];
  }
}

type TagValue = string;

type TagValueList = vec<TagValue>;

type TagValuesOutputList = vec<TagValue>;

type TagsPerPage = int;

type TargetId = string;

type TargetIdFilterList = vec<TargetId>;

type TargetIdType = string;

class ThrottledException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UntagResourcesInput {
  public ResourceARNList $resource_arn_list;
  public TagKeyListForUntag $tag_keys;

  public function __construct(shape(
  ?'resource_arn_list' => ResourceARNList,
  ?'tag_keys' => TagKeyListForUntag,
  ) $s = shape()) {
    $this->resource_arn_list = $resource_arn_list ?? [];
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourcesOutput {
  public FailedResourcesMap $failed_resources_map;

  public function __construct(shape(
  ?'failed_resources_map' => FailedResourcesMap,
  ) $s = shape()) {
    $this->failed_resources_map = $failed_resources_map ?? [];
  }
}

