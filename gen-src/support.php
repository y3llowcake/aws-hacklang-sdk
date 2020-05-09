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
}

class AddAttachmentsToSetResponse {
  public AttachmentSetId $attachment_set_id;
  public ExpiryTime $expiry_time;
}

class AddCommunicationToCaseRequest {
  public AttachmentSetId $attachment_set_id;
  public CaseId $case_id;
  public CcEmailAddressList $cc_email_addresses;
  public CommunicationBody $communication_body;
}

class AddCommunicationToCaseResponse {
  public Result $result;
}

class AfterTime {
}

class Attachment {
  public Data $data;
  public FileName $file_name;
}

class AttachmentDetails {
  public AttachmentId $attachment_id;
  public FileName $file_name;
}

class AttachmentId {
}

class AttachmentIdNotFound {
  public ErrorMessage $message;
}

class AttachmentLimitExceeded {
  public ErrorMessage $message;
}

class AttachmentSet {
}

class AttachmentSetExpired {
  public ErrorMessage $message;
}

class AttachmentSetId {
}

class AttachmentSetIdNotFound {
  public ErrorMessage $message;
}

class AttachmentSetSizeLimitExceeded {
  public ErrorMessage $message;
}

class Attachments {
}

class BeforeTime {
}

class Boolean {
}

class CaseCreationLimitExceeded {
  public ErrorMessage $message;
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
}

class CaseId {
}

class CaseIdList {
}

class CaseIdNotFound {
  public ErrorMessage $message;
}

class CaseList {
}

class CaseStatus {
}

class Category {
  public CategoryCode $code;
  public CategoryName $name;
}

class CategoryCode {
}

class CategoryList {
}

class CategoryName {
}

class CcEmailAddress {
}

class CcEmailAddressList {
}

class Communication {
  public AttachmentSet $attachment_set;
  public CommunicationBody $body;
  public CaseId $case_id;
  public SubmittedBy $submitted_by;
  public TimeCreated $time_created;
}

class CommunicationBody {
}

class CommunicationList {
}

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
}

class CreateCaseResponse {
  public CaseId $case_id;
}

class Data {
}

class DescribeAttachmentLimitExceeded {
  public ErrorMessage $message;
}

class DescribeAttachmentRequest {
  public AttachmentId $attachment_id;
}

class DescribeAttachmentResponse {
  public Attachment $attachment;
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
}

class DescribeCasesResponse {
  public CaseList $cases;
  public NextToken $next_token;
}

class DescribeCommunicationsRequest {
  public AfterTime $after_time;
  public BeforeTime $before_time;
  public CaseId $case_id;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeCommunicationsResponse {
  public CommunicationList $communications;
  public NextToken $next_token;
}

class DescribeServicesRequest {
  public Language $language;
  public ServiceCodeList $service_code_list;
}

class DescribeServicesResponse {
  public ServiceList $services;
}

class DescribeSeverityLevelsRequest {
  public Language $language;
}

class DescribeSeverityLevelsResponse {
  public SeverityLevelsList $severity_levels;
}

class DescribeTrustedAdvisorCheckRefreshStatusesRequest {
  public StringList $check_ids;
}

class DescribeTrustedAdvisorCheckRefreshStatusesResponse {
  public TrustedAdvisorCheckRefreshStatusList $statuses;
}

class DescribeTrustedAdvisorCheckResultRequest {
  public string $check_id;
  public string $language;
}

class DescribeTrustedAdvisorCheckResultResponse {
  public TrustedAdvisorCheckResult $result;
}

class DescribeTrustedAdvisorCheckSummariesRequest {
  public StringList $check_ids;
}

class DescribeTrustedAdvisorCheckSummariesResponse {
  public TrustedAdvisorCheckSummaryList $summaries;
}

class DescribeTrustedAdvisorChecksRequest {
  public string $language;
}

class DescribeTrustedAdvisorChecksResponse {
  public TrustedAdvisorCheckList $checks;
}

class DisplayId {
}

class Double {
}

class ErrorMessage {
}

class ExpiryTime {
}

class FileName {
}

class IncludeCommunications {
}

class IncludeResolvedCases {
}

class InternalServerError {
  public ErrorMessage $message;
}

class IssueType {
}

class Language {
}

class Long {
}

class MaxResults {
}

class NextToken {
}

class RecentCaseCommunications {
  public CommunicationList $communications;
  public NextToken $next_token;
}

class RefreshTrustedAdvisorCheckRequest {
  public string $check_id;
}

class RefreshTrustedAdvisorCheckResponse {
  public TrustedAdvisorCheckRefreshStatus $status;
}

class ResolveCaseRequest {
  public CaseId $case_id;
}

class ResolveCaseResponse {
  public CaseStatus $final_case_status;
  public CaseStatus $initial_case_status;
}

class Result {
}

class Service {
  public CategoryList $categories;
  public ServiceCode $code;
  public ServiceName $name;
}

class ServiceCode {
}

class ServiceCodeList {
}

class ServiceList {
}

class ServiceName {
}

class SeverityCode {
}

class SeverityLevel {
  public SeverityLevelCode $code;
  public SeverityLevelName $name;
}

class SeverityLevelCode {
}

class SeverityLevelName {
}

class SeverityLevelsList {
}

class Status {
}

class String {
}

class StringList {
}

class Subject {
}

class SubmittedBy {
}

class TimeCreated {
}

class TrustedAdvisorCategorySpecificSummary {
  public TrustedAdvisorCostOptimizingSummary $cost_optimizing;
}

class TrustedAdvisorCheckDescription {
  public string $category;
  public string $description;
  public string $id;
  public StringList $metadata;
  public string $name;
}

class TrustedAdvisorCheckList {
}

class TrustedAdvisorCheckRefreshStatus {
  public string $check_id;
  public Long $millis_until_next_refreshable;
  public string $status;
}

class TrustedAdvisorCheckRefreshStatusList {
}

class TrustedAdvisorCheckResult {
  public TrustedAdvisorCategorySpecificSummary $category_specific_summary;
  public string $check_id;
  public TrustedAdvisorResourceDetailList $flagged_resources;
  public TrustedAdvisorResourcesSummary $resources_summary;
  public string $status;
  public string $timestamp;
}

class TrustedAdvisorCheckSummary {
  public TrustedAdvisorCategorySpecificSummary $category_specific_summary;
  public string $check_id;
  public boolean $has_flagged_resources;
  public TrustedAdvisorResourcesSummary $resources_summary;
  public string $status;
  public string $timestamp;
}

class TrustedAdvisorCheckSummaryList {
}

class TrustedAdvisorCostOptimizingSummary {
  public Double $estimated_monthly_savings;
  public Double $estimated_percent_monthly_savings;
}

class TrustedAdvisorResourceDetail {
  public boolean $is_suppressed;
  public StringList $metadata;
  public string $region;
  public string $resource_id;
  public string $status;
}

class TrustedAdvisorResourceDetailList {
}

class TrustedAdvisorResourcesSummary {
  public Long $resources_flagged;
  public Long $resources_ignored;
  public Long $resources_processed;
  public Long $resources_suppressed;
}

