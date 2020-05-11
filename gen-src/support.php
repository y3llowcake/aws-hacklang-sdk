<?hh // strict
namespace slack\aws\support;

interface Support {
  public function AddAttachmentsToSet(AddAttachmentsToSetRequest): Awaitable<Errors\Result<AddAttachmentsToSetResponse>>;
  public function AddCommunicationToCase(AddCommunicationToCaseRequest): Awaitable<Errors\Result<AddCommunicationToCaseResponse>>;
  public function CreateCase(CreateCaseRequest): Awaitable<Errors\Result<CreateCaseResponse>>;
  public function DescribeAttachment(DescribeAttachmentRequest): Awaitable<Errors\Result<DescribeAttachmentResponse>>;
  public function DescribeCases(DescribeCasesRequest): Awaitable<Errors\Result<DescribeCasesResponse>>;
  public function DescribeCommunications(DescribeCommunicationsRequest): Awaitable<Errors\Result<DescribeCommunicationsResponse>>;
  public function DescribeServices(DescribeServicesRequest): Awaitable<Errors\Result<DescribeServicesResponse>>;
  public function DescribeSeverityLevels(DescribeSeverityLevelsRequest): Awaitable<Errors\Result<DescribeSeverityLevelsResponse>>;
  public function DescribeTrustedAdvisorCheckRefreshStatuses(DescribeTrustedAdvisorCheckRefreshStatusesRequest): Awaitable<Errors\Result<DescribeTrustedAdvisorCheckRefreshStatusesResponse>>;
  public function DescribeTrustedAdvisorCheckResult(DescribeTrustedAdvisorCheckResultRequest): Awaitable<Errors\Result<DescribeTrustedAdvisorCheckResultResponse>>;
  public function DescribeTrustedAdvisorCheckSummaries(DescribeTrustedAdvisorCheckSummariesRequest): Awaitable<Errors\Result<DescribeTrustedAdvisorCheckSummariesResponse>>;
  public function DescribeTrustedAdvisorChecks(DescribeTrustedAdvisorChecksRequest): Awaitable<Errors\Result<DescribeTrustedAdvisorChecksResponse>>;
  public function RefreshTrustedAdvisorCheck(RefreshTrustedAdvisorCheckRequest): Awaitable<Errors\Result<RefreshTrustedAdvisorCheckResponse>>;
  public function ResolveCase(ResolveCaseRequest): Awaitable<Errors\Result<ResolveCaseResponse>>;
}

class AddAttachmentsToSetRequest {
  public AttachmentSetId $attachment_set_id;
  public Attachments $attachments;

  public function __construct(shape(
  ?'attachment_set_id' => AttachmentSetId,
  ?'attachments' => Attachments,
  ) $s = shape()) {
    $this->attachment_set_id = $attachment_set_id ?? ;
    $this->attachments = $attachments ?? ;
  }
}

class AddAttachmentsToSetResponse {
  public AttachmentSetId $attachment_set_id;
  public ExpiryTime $expiry_time;

  public function __construct(shape(
  ?'attachment_set_id' => AttachmentSetId,
  ?'expiry_time' => ExpiryTime,
  ) $s = shape()) {
    $this->attachment_set_id = $attachment_set_id ?? ;
    $this->expiry_time = $expiry_time ?? ;
  }
}

class AddCommunicationToCaseRequest {
  public AttachmentSetId $attachment_set_id;
  public CaseId $case_id;
  public CcEmailAddressList $cc_email_addresses;
  public CommunicationBody $communication_body;

  public function __construct(shape(
  ?'attachment_set_id' => AttachmentSetId,
  ?'case_id' => CaseId,
  ?'cc_email_addresses' => CcEmailAddressList,
  ?'communication_body' => CommunicationBody,
  ) $s = shape()) {
    $this->attachment_set_id = $attachment_set_id ?? ;
    $this->case_id = $case_id ?? ;
    $this->cc_email_addresses = $cc_email_addresses ?? ;
    $this->communication_body = $communication_body ?? ;
  }
}

class AddCommunicationToCaseResponse {
  public Result $result;

  public function __construct(shape(
  ?'result' => Result,
  ) $s = shape()) {
    $this->result = $result ?? ;
  }
}

type AfterTime = string;

class Attachment {
  public Data $data;
  public FileName $file_name;

  public function __construct(shape(
  ?'data' => Data,
  ?'file_name' => FileName,
  ) $s = shape()) {
    $this->data = $data ?? ;
    $this->file_name = $file_name ?? ;
  }
}

class AttachmentDetails {
  public AttachmentId $attachment_id;
  public FileName $file_name;

  public function __construct(shape(
  ?'attachment_id' => AttachmentId,
  ?'file_name' => FileName,
  ) $s = shape()) {
    $this->attachment_id = $attachment_id ?? ;
    $this->file_name = $file_name ?? ;
  }
}

type AttachmentId = string;

class AttachmentIdNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class AttachmentLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type AttachmentSet = vec<AttachmentDetails>;

class AttachmentSetExpired {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type AttachmentSetId = string;

class AttachmentSetIdNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class AttachmentSetSizeLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Attachments = vec<Attachment>;

type BeforeTime = string;

type Boolean = bool;

class CaseCreationLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CaseDetails {
  public CaseId $case_id;
  public CategoryCode $category_code;
  public CcEmailAddressList $cc_email_addresses;
  public DisplayId $display_id;
  public Language $language;
  public RecentCaseCommunications $recent_communications;
  public ServiceCode $service_code;
  public SeverityCode $severity_code;
  public Status $status;
  public Subject $subject;
  public SubmittedBy $submitted_by;
  public TimeCreated $time_created;

  public function __construct(shape(
  ?'case_id' => CaseId,
  ?'category_code' => CategoryCode,
  ?'cc_email_addresses' => CcEmailAddressList,
  ?'display_id' => DisplayId,
  ?'language' => Language,
  ?'recent_communications' => RecentCaseCommunications,
  ?'service_code' => ServiceCode,
  ?'severity_code' => SeverityCode,
  ?'status' => Status,
  ?'subject' => Subject,
  ?'submitted_by' => SubmittedBy,
  ?'time_created' => TimeCreated,
  ) $s = shape()) {
    $this->case_id = $case_id ?? ;
    $this->category_code = $category_code ?? ;
    $this->cc_email_addresses = $cc_email_addresses ?? ;
    $this->display_id = $display_id ?? ;
    $this->language = $language ?? ;
    $this->recent_communications = $recent_communications ?? ;
    $this->service_code = $service_code ?? ;
    $this->severity_code = $severity_code ?? ;
    $this->status = $status ?? ;
    $this->subject = $subject ?? ;
    $this->submitted_by = $submitted_by ?? ;
    $this->time_created = $time_created ?? ;
  }
}

type CaseId = string;

type CaseIdList = vec<CaseId>;

class CaseIdNotFound {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type CaseList = vec<CaseDetails>;

type CaseStatus = string;

class Category {
  public CategoryCode $code;
  public CategoryName $name;

  public function __construct(shape(
  ?'code' => CategoryCode,
  ?'name' => CategoryName,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->name = $name ?? ;
  }
}

type CategoryCode = string;

type CategoryList = vec<Category>;

type CategoryName = string;

type CcEmailAddress = string;

type CcEmailAddressList = vec<CcEmailAddress>;

class Communication {
  public AttachmentSet $attachment_set;
  public CommunicationBody $body;
  public CaseId $case_id;
  public SubmittedBy $submitted_by;
  public TimeCreated $time_created;

  public function __construct(shape(
  ?'attachment_set' => AttachmentSet,
  ?'body' => CommunicationBody,
  ?'case_id' => CaseId,
  ?'submitted_by' => SubmittedBy,
  ?'time_created' => TimeCreated,
  ) $s = shape()) {
    $this->attachment_set = $attachment_set ?? ;
    $this->body = $body ?? ;
    $this->case_id = $case_id ?? ;
    $this->submitted_by = $submitted_by ?? ;
    $this->time_created = $time_created ?? ;
  }
}

type CommunicationBody = string;

type CommunicationList = vec<Communication>;

class CreateCaseRequest {
  public AttachmentSetId $attachment_set_id;
  public CategoryCode $category_code;
  public CcEmailAddressList $cc_email_addresses;
  public CommunicationBody $communication_body;
  public IssueType $issue_type;
  public Language $language;
  public ServiceCode $service_code;
  public SeverityCode $severity_code;
  public Subject $subject;

  public function __construct(shape(
  ?'attachment_set_id' => AttachmentSetId,
  ?'category_code' => CategoryCode,
  ?'cc_email_addresses' => CcEmailAddressList,
  ?'communication_body' => CommunicationBody,
  ?'issue_type' => IssueType,
  ?'language' => Language,
  ?'service_code' => ServiceCode,
  ?'severity_code' => SeverityCode,
  ?'subject' => Subject,
  ) $s = shape()) {
    $this->attachment_set_id = $attachment_set_id ?? ;
    $this->category_code = $category_code ?? ;
    $this->cc_email_addresses = $cc_email_addresses ?? ;
    $this->communication_body = $communication_body ?? ;
    $this->issue_type = $issue_type ?? ;
    $this->language = $language ?? ;
    $this->service_code = $service_code ?? ;
    $this->severity_code = $severity_code ?? ;
    $this->subject = $subject ?? ;
  }
}

class CreateCaseResponse {
  public CaseId $case_id;

  public function __construct(shape(
  ?'case_id' => CaseId,
  ) $s = shape()) {
    $this->case_id = $case_id ?? ;
  }
}

type Data = string;

class DescribeAttachmentLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class DescribeAttachmentRequest {
  public AttachmentId $attachment_id;

  public function __construct(shape(
  ?'attachment_id' => AttachmentId,
  ) $s = shape()) {
    $this->attachment_id = $attachment_id ?? ;
  }
}

class DescribeAttachmentResponse {
  public Attachment $attachment;

  public function __construct(shape(
  ?'attachment' => Attachment,
  ) $s = shape()) {
    $this->attachment = $attachment ?? ;
  }
}

class DescribeCasesRequest {
  public AfterTime $after_time;
  public BeforeTime $before_time;
  public CaseIdList $case_id_list;
  public DisplayId $display_id;
  public IncludeCommunications $include_communications;
  public IncludeResolvedCases $include_resolved_cases;
  public Language $language;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'after_time' => AfterTime,
  ?'before_time' => BeforeTime,
  ?'case_id_list' => CaseIdList,
  ?'display_id' => DisplayId,
  ?'include_communications' => IncludeCommunications,
  ?'include_resolved_cases' => IncludeResolvedCases,
  ?'language' => Language,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->after_time = $after_time ?? ;
    $this->before_time = $before_time ?? ;
    $this->case_id_list = $case_id_list ?? ;
    $this->display_id = $display_id ?? ;
    $this->include_communications = $include_communications ?? ;
    $this->include_resolved_cases = $include_resolved_cases ?? ;
    $this->language = $language ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeCasesResponse {
  public CaseList $cases;
  public NextToken $next_token;

  public function __construct(shape(
  ?'cases' => CaseList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->cases = $cases ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeCommunicationsRequest {
  public AfterTime $after_time;
  public BeforeTime $before_time;
  public CaseId $case_id;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'after_time' => AfterTime,
  ?'before_time' => BeforeTime,
  ?'case_id' => CaseId,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->after_time = $after_time ?? ;
    $this->before_time = $before_time ?? ;
    $this->case_id = $case_id ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeCommunicationsResponse {
  public CommunicationList $communications;
  public NextToken $next_token;

  public function __construct(shape(
  ?'communications' => CommunicationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->communications = $communications ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeServicesRequest {
  public Language $language;
  public ServiceCodeList $service_code_list;

  public function __construct(shape(
  ?'language' => Language,
  ?'service_code_list' => ServiceCodeList,
  ) $s = shape()) {
    $this->language = $language ?? ;
    $this->service_code_list = $service_code_list ?? ;
  }
}

class DescribeServicesResponse {
  public ServiceList $services;

  public function __construct(shape(
  ?'services' => ServiceList,
  ) $s = shape()) {
    $this->services = $services ?? ;
  }
}

class DescribeSeverityLevelsRequest {
  public Language $language;

  public function __construct(shape(
  ?'language' => Language,
  ) $s = shape()) {
    $this->language = $language ?? ;
  }
}

class DescribeSeverityLevelsResponse {
  public SeverityLevelsList $severity_levels;

  public function __construct(shape(
  ?'severity_levels' => SeverityLevelsList,
  ) $s = shape()) {
    $this->severity_levels = $severity_levels ?? ;
  }
}

class DescribeTrustedAdvisorCheckRefreshStatusesRequest {
  public StringList $check_ids;

  public function __construct(shape(
  ?'check_ids' => StringList,
  ) $s = shape()) {
    $this->check_ids = $check_ids ?? ;
  }
}

class DescribeTrustedAdvisorCheckRefreshStatusesResponse {
  public TrustedAdvisorCheckRefreshStatusList $statuses;

  public function __construct(shape(
  ?'statuses' => TrustedAdvisorCheckRefreshStatusList,
  ) $s = shape()) {
    $this->statuses = $statuses ?? ;
  }
}

class DescribeTrustedAdvisorCheckResultRequest {
  public string $check_id;
  public string $language;

  public function __construct(shape(
  ?'check_id' => string,
  ?'language' => string,
  ) $s = shape()) {
    $this->check_id = $check_id ?? ;
    $this->language = $language ?? ;
  }
}

class DescribeTrustedAdvisorCheckResultResponse {
  public TrustedAdvisorCheckResult $result;

  public function __construct(shape(
  ?'result' => TrustedAdvisorCheckResult,
  ) $s = shape()) {
    $this->result = $result ?? ;
  }
}

class DescribeTrustedAdvisorCheckSummariesRequest {
  public StringList $check_ids;

  public function __construct(shape(
  ?'check_ids' => StringList,
  ) $s = shape()) {
    $this->check_ids = $check_ids ?? ;
  }
}

class DescribeTrustedAdvisorCheckSummariesResponse {
  public TrustedAdvisorCheckSummaryList $summaries;

  public function __construct(shape(
  ?'summaries' => TrustedAdvisorCheckSummaryList,
  ) $s = shape()) {
    $this->summaries = $summaries ?? ;
  }
}

class DescribeTrustedAdvisorChecksRequest {
  public string $language;

  public function __construct(shape(
  ?'language' => string,
  ) $s = shape()) {
    $this->language = $language ?? ;
  }
}

class DescribeTrustedAdvisorChecksResponse {
  public TrustedAdvisorCheckList $checks;

  public function __construct(shape(
  ?'checks' => TrustedAdvisorCheckList,
  ) $s = shape()) {
    $this->checks = $checks ?? ;
  }
}

type DisplayId = string;

type Double = float;

type ErrorMessage = string;

type ExpiryTime = string;

type FileName = string;

type IncludeCommunications = bool;

type IncludeResolvedCases = bool;

class InternalServerError {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type IssueType = string;

type Language = string;

type Long = int;

type MaxResults = int;

type NextToken = string;

class RecentCaseCommunications {
  public CommunicationList $communications;
  public NextToken $next_token;

  public function __construct(shape(
  ?'communications' => CommunicationList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->communications = $communications ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class RefreshTrustedAdvisorCheckRequest {
  public string $check_id;

  public function __construct(shape(
  ?'check_id' => string,
  ) $s = shape()) {
    $this->check_id = $check_id ?? ;
  }
}

class RefreshTrustedAdvisorCheckResponse {
  public TrustedAdvisorCheckRefreshStatus $status;

  public function __construct(shape(
  ?'status' => TrustedAdvisorCheckRefreshStatus,
  ) $s = shape()) {
    $this->status = $status ?? ;
  }
}

class ResolveCaseRequest {
  public CaseId $case_id;

  public function __construct(shape(
  ?'case_id' => CaseId,
  ) $s = shape()) {
    $this->case_id = $case_id ?? ;
  }
}

class ResolveCaseResponse {
  public CaseStatus $final_case_status;
  public CaseStatus $initial_case_status;

  public function __construct(shape(
  ?'final_case_status' => CaseStatus,
  ?'initial_case_status' => CaseStatus,
  ) $s = shape()) {
    $this->final_case_status = $final_case_status ?? ;
    $this->initial_case_status = $initial_case_status ?? ;
  }
}

type Result = bool;

class Service {
  public CategoryList $categories;
  public ServiceCode $code;
  public ServiceName $name;

  public function __construct(shape(
  ?'categories' => CategoryList,
  ?'code' => ServiceCode,
  ?'name' => ServiceName,
  ) $s = shape()) {
    $this->categories = $categories ?? ;
    $this->code = $code ?? ;
    $this->name = $name ?? ;
  }
}

type ServiceCode = string;

type ServiceCodeList = vec<ServiceCode>;

type ServiceList = vec<Service>;

type ServiceName = string;

type SeverityCode = string;

class SeverityLevel {
  public SeverityLevelCode $code;
  public SeverityLevelName $name;

  public function __construct(shape(
  ?'code' => SeverityLevelCode,
  ?'name' => SeverityLevelName,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->name = $name ?? ;
  }
}

type SeverityLevelCode = string;

type SeverityLevelName = string;

type SeverityLevelsList = vec<SeverityLevel>;

type Status = string;

type String = string;

type StringList = vec<String>;

type Subject = string;

type SubmittedBy = string;

type TimeCreated = string;

class TrustedAdvisorCategorySpecificSummary {
  public TrustedAdvisorCostOptimizingSummary $cost_optimizing;

  public function __construct(shape(
  ?'cost_optimizing' => TrustedAdvisorCostOptimizingSummary,
  ) $s = shape()) {
    $this->cost_optimizing = $cost_optimizing ?? ;
  }
}

class TrustedAdvisorCheckDescription {
  public string $category;
  public string $description;
  public string $id;
  public StringList $metadata;
  public string $name;

  public function __construct(shape(
  ?'category' => string,
  ?'description' => string,
  ?'id' => string,
  ?'metadata' => StringList,
  ?'name' => string,
  ) $s = shape()) {
    $this->category = $category ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->metadata = $metadata ?? ;
    $this->name = $name ?? ;
  }
}

type TrustedAdvisorCheckList = vec<TrustedAdvisorCheckDescription>;

class TrustedAdvisorCheckRefreshStatus {
  public string $check_id;
  public Long $millis_until_next_refreshable;
  public string $status;

  public function __construct(shape(
  ?'check_id' => string,
  ?'millis_until_next_refreshable' => Long,
  ?'status' => string,
  ) $s = shape()) {
    $this->check_id = $check_id ?? ;
    $this->millis_until_next_refreshable = $millis_until_next_refreshable ?? ;
    $this->status = $status ?? ;
  }
}

type TrustedAdvisorCheckRefreshStatusList = vec<TrustedAdvisorCheckRefreshStatus>;

class TrustedAdvisorCheckResult {
  public TrustedAdvisorCategorySpecificSummary $category_specific_summary;
  public string $check_id;
  public TrustedAdvisorResourceDetailList $flagged_resources;
  public TrustedAdvisorResourcesSummary $resources_summary;
  public string $status;
  public string $timestamp;

  public function __construct(shape(
  ?'category_specific_summary' => TrustedAdvisorCategorySpecificSummary,
  ?'check_id' => string,
  ?'flagged_resources' => TrustedAdvisorResourceDetailList,
  ?'resources_summary' => TrustedAdvisorResourcesSummary,
  ?'status' => string,
  ?'timestamp' => string,
  ) $s = shape()) {
    $this->category_specific_summary = $category_specific_summary ?? ;
    $this->check_id = $check_id ?? ;
    $this->flagged_resources = $flagged_resources ?? ;
    $this->resources_summary = $resources_summary ?? ;
    $this->status = $status ?? ;
    $this->timestamp = $timestamp ?? ;
  }
}

class TrustedAdvisorCheckSummary {
  public TrustedAdvisorCategorySpecificSummary $category_specific_summary;
  public string $check_id;
  public boolean $has_flagged_resources;
  public TrustedAdvisorResourcesSummary $resources_summary;
  public string $status;
  public string $timestamp;

  public function __construct(shape(
  ?'category_specific_summary' => TrustedAdvisorCategorySpecificSummary,
  ?'check_id' => string,
  ?'has_flagged_resources' => boolean,
  ?'resources_summary' => TrustedAdvisorResourcesSummary,
  ?'status' => string,
  ?'timestamp' => string,
  ) $s = shape()) {
    $this->category_specific_summary = $category_specific_summary ?? ;
    $this->check_id = $check_id ?? ;
    $this->has_flagged_resources = $has_flagged_resources ?? ;
    $this->resources_summary = $resources_summary ?? ;
    $this->status = $status ?? ;
    $this->timestamp = $timestamp ?? ;
  }
}

type TrustedAdvisorCheckSummaryList = vec<TrustedAdvisorCheckSummary>;

class TrustedAdvisorCostOptimizingSummary {
  public Double $estimated_monthly_savings;
  public Double $estimated_percent_monthly_savings;

  public function __construct(shape(
  ?'estimated_monthly_savings' => Double,
  ?'estimated_percent_monthly_savings' => Double,
  ) $s = shape()) {
    $this->estimated_monthly_savings = $estimated_monthly_savings ?? ;
    $this->estimated_percent_monthly_savings = $estimated_percent_monthly_savings ?? ;
  }
}

class TrustedAdvisorResourceDetail {
  public boolean $is_suppressed;
  public StringList $metadata;
  public string $region;
  public string $resource_id;
  public string $status;

  public function __construct(shape(
  ?'is_suppressed' => boolean,
  ?'metadata' => StringList,
  ?'region' => string,
  ?'resource_id' => string,
  ?'status' => string,
  ) $s = shape()) {
    $this->is_suppressed = $is_suppressed ?? ;
    $this->metadata = $metadata ?? ;
    $this->region = $region ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->status = $status ?? ;
  }
}

type TrustedAdvisorResourceDetailList = vec<TrustedAdvisorResourceDetail>;

class TrustedAdvisorResourcesSummary {
  public Long $resources_flagged;
  public Long $resources_ignored;
  public Long $resources_processed;
  public Long $resources_suppressed;

  public function __construct(shape(
  ?'resources_flagged' => Long,
  ?'resources_ignored' => Long,
  ?'resources_processed' => Long,
  ?'resources_suppressed' => Long,
  ) $s = shape()) {
    $this->resources_flagged = $resources_flagged ?? ;
    $this->resources_ignored = $resources_ignored ?? ;
    $this->resources_processed = $resources_processed ?? ;
    $this->resources_suppressed = $resources_suppressed ?? ;
  }
}

