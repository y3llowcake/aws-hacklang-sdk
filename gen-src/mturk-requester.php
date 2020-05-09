<?hh // strict
namespace slack\aws\mturk-requester;

interface MTurk {
  public function AcceptQualificationRequest(AcceptQualificationRequestRequest) Awaitable<Errors\Result<AcceptQualificationRequestResponse>>;
  public function ApproveAssignment(ApproveAssignmentRequest) Awaitable<Errors\Result<ApproveAssignmentResponse>>;
  public function AssociateQualificationWithWorker(AssociateQualificationWithWorkerRequest) Awaitable<Errors\Result<AssociateQualificationWithWorkerResponse>>;
  public function CreateAdditionalAssignmentsForHIT(CreateAdditionalAssignmentsForHITRequest) Awaitable<Errors\Result<CreateAdditionalAssignmentsForHITResponse>>;
  public function CreateHIT(CreateHITRequest) Awaitable<Errors\Result<CreateHITResponse>>;
  public function CreateHITType(CreateHITTypeRequest) Awaitable<Errors\Result<CreateHITTypeResponse>>;
  public function CreateHITWithHITType(CreateHITWithHITTypeRequest) Awaitable<Errors\Result<CreateHITWithHITTypeResponse>>;
  public function CreateQualificationType(CreateQualificationTypeRequest) Awaitable<Errors\Result<CreateQualificationTypeResponse>>;
  public function CreateWorkerBlock(CreateWorkerBlockRequest) Awaitable<Errors\Result<CreateWorkerBlockResponse>>;
  public function DeleteHIT(DeleteHITRequest) Awaitable<Errors\Result<DeleteHITResponse>>;
  public function DeleteQualificationType(DeleteQualificationTypeRequest) Awaitable<Errors\Result<DeleteQualificationTypeResponse>>;
  public function DeleteWorkerBlock(DeleteWorkerBlockRequest) Awaitable<Errors\Result<DeleteWorkerBlockResponse>>;
  public function DisassociateQualificationFromWorker(DisassociateQualificationFromWorkerRequest) Awaitable<Errors\Result<DisassociateQualificationFromWorkerResponse>>;
  public function GetAccountBalance(GetAccountBalanceRequest) Awaitable<Errors\Result<GetAccountBalanceResponse>>;
  public function GetAssignment(GetAssignmentRequest) Awaitable<Errors\Result<GetAssignmentResponse>>;
  public function GetFileUploadURL(GetFileUploadURLRequest) Awaitable<Errors\Result<GetFileUploadURLResponse>>;
  public function GetHIT(GetHITRequest) Awaitable<Errors\Result<GetHITResponse>>;
  public function GetQualificationScore(GetQualificationScoreRequest) Awaitable<Errors\Result<GetQualificationScoreResponse>>;
  public function GetQualificationType(GetQualificationTypeRequest) Awaitable<Errors\Result<GetQualificationTypeResponse>>;
  public function ListAssignmentsForHIT(ListAssignmentsForHITRequest) Awaitable<Errors\Result<ListAssignmentsForHITResponse>>;
  public function ListBonusPayments(ListBonusPaymentsRequest) Awaitable<Errors\Result<ListBonusPaymentsResponse>>;
  public function ListHITs(ListHITsRequest) Awaitable<Errors\Result<ListHITsResponse>>;
  public function ListHITsForQualificationType(ListHITsForQualificationTypeRequest) Awaitable<Errors\Result<ListHITsForQualificationTypeResponse>>;
  public function ListQualificationRequests(ListQualificationRequestsRequest) Awaitable<Errors\Result<ListQualificationRequestsResponse>>;
  public function ListQualificationTypes(ListQualificationTypesRequest) Awaitable<Errors\Result<ListQualificationTypesResponse>>;
  public function ListReviewPolicyResultsForHIT(ListReviewPolicyResultsForHITRequest) Awaitable<Errors\Result<ListReviewPolicyResultsForHITResponse>>;
  public function ListReviewableHITs(ListReviewableHITsRequest) Awaitable<Errors\Result<ListReviewableHITsResponse>>;
  public function ListWorkerBlocks(ListWorkerBlocksRequest) Awaitable<Errors\Result<ListWorkerBlocksResponse>>;
  public function ListWorkersWithQualificationType(ListWorkersWithQualificationTypeRequest) Awaitable<Errors\Result<ListWorkersWithQualificationTypeResponse>>;
  public function NotifyWorkers(NotifyWorkersRequest) Awaitable<Errors\Result<NotifyWorkersResponse>>;
  public function RejectAssignment(RejectAssignmentRequest) Awaitable<Errors\Result<RejectAssignmentResponse>>;
  public function RejectQualificationRequest(RejectQualificationRequestRequest) Awaitable<Errors\Result<RejectQualificationRequestResponse>>;
  public function SendBonus(SendBonusRequest) Awaitable<Errors\Result<SendBonusResponse>>;
  public function SendTestEventNotification(SendTestEventNotificationRequest) Awaitable<Errors\Result<SendTestEventNotificationResponse>>;
  public function UpdateExpirationForHIT(UpdateExpirationForHITRequest) Awaitable<Errors\Result<UpdateExpirationForHITResponse>>;
  public function UpdateHITReviewStatus(UpdateHITReviewStatusRequest) Awaitable<Errors\Result<UpdateHITReviewStatusResponse>>;
  public function UpdateHITTypeOfHIT(UpdateHITTypeOfHITRequest) Awaitable<Errors\Result<UpdateHITTypeOfHITResponse>>;
  public function UpdateNotificationSettings(UpdateNotificationSettingsRequest) Awaitable<Errors\Result<UpdateNotificationSettingsResponse>>;
  public function UpdateQualificationType(UpdateQualificationTypeRequest) Awaitable<Errors\Result<UpdateQualificationTypeResponse>>;
}

class AcceptQualificationRequestRequest {
  public int $integer_value;
  public string $qualification_request_id;
}

class AcceptQualificationRequestResponse {
}

class ApproveAssignmentRequest {
  public EntityId $assignment_id;
  public boolean $override_rejection;
  public string $requester_feedback;
}

class ApproveAssignmentResponse {
}

class Assignment {
  public Timestamp $accept_time;
  public string $answer;
  public Timestamp $approval_time;
  public EntityId $assignment_id;
  public AssignmentStatus $assignment_status;
  public Timestamp $auto_approval_time;
  public Timestamp $deadline;
  public EntityId $hit_id;
  public Timestamp $rejection_time;
  public string $requester_feedback;
  public Timestamp $submit_time;
  public CustomerId $worker_id;
}

class AssignmentList {
}

class AssignmentStatus {
}

class AssignmentStatusList {
}

class AssociateQualificationWithWorkerRequest {
  public int $integer_value;
  public EntityId $qualification_type_id;
  public boolean $send_notification;
  public CustomerId $worker_id;
}

class AssociateQualificationWithWorkerResponse {
}

class BonusPayment {
  public EntityId $assignment_id;
  public CurrencyAmount $bonus_amount;
  public Timestamp $grant_time;
  public string $reason;
  public CustomerId $worker_id;
}

class BonusPaymentList {
}

class Boolean {
}

class Comparator {
}

class CountryParameters {
}

class CreateAdditionalAssignmentsForHITRequest {
  public EntityId $hit_id;
  public int $number_of_additional_assignments;
  public IdempotencyToken $unique_request_token;
}

class CreateAdditionalAssignmentsForHITResponse {
}

class CreateHITRequest {
  public Long $assignment_duration_in_seconds;
  public ReviewPolicy $assignment_review_policy;
  public Long $auto_approval_delay_in_seconds;
  public string $description;
  public EntityId $hit_layout_id;
  public HITLayoutParameterList $hit_layout_parameters;
  public ReviewPolicy $hit_review_policy;
  public string $keywords;
  public Long $lifetime_in_seconds;
  public int $max_assignments;
  public QualificationRequirementList $qualification_requirements;
  public string $question;
  public string $requester_annotation;
  public CurrencyAmount $reward;
  public string $title;
  public IdempotencyToken $unique_request_token;
}

class CreateHITResponse {
  public HIT $hit;
}

class CreateHITTypeRequest {
  public Long $assignment_duration_in_seconds;
  public Long $auto_approval_delay_in_seconds;
  public string $description;
  public string $keywords;
  public QualificationRequirementList $qualification_requirements;
  public CurrencyAmount $reward;
  public string $title;
}

class CreateHITTypeResponse {
  public EntityId $hit_type_id;
}

class CreateHITWithHITTypeRequest {
  public ReviewPolicy $assignment_review_policy;
  public EntityId $hit_layout_id;
  public HITLayoutParameterList $hit_layout_parameters;
  public ReviewPolicy $hit_review_policy;
  public EntityId $hit_type_id;
  public Long $lifetime_in_seconds;
  public int $max_assignments;
  public string $question;
  public string $requester_annotation;
  public IdempotencyToken $unique_request_token;
}

class CreateHITWithHITTypeResponse {
  public HIT $hit;
}

class CreateQualificationTypeRequest {
  public string $answer_key;
  public boolean $auto_granted;
  public int $auto_granted_value;
  public string $description;
  public string $keywords;
  public string $name;
  public QualificationTypeStatus $qualification_type_status;
  public Long $retry_delay_in_seconds;
  public string $test;
  public Long $test_duration_in_seconds;
}

class CreateQualificationTypeResponse {
  public QualificationType $qualification_type;
}

class CreateWorkerBlockRequest {
  public string $reason;
  public CustomerId $worker_id;
}

class CreateWorkerBlockResponse {
}

class CurrencyAmount {
}

class CustomerId {
}

class CustomerIdList {
}

class DeleteHITRequest {
  public EntityId $hit_id;
}

class DeleteHITResponse {
}

class DeleteQualificationTypeRequest {
  public EntityId $qualification_type_id;
}

class DeleteQualificationTypeResponse {
}

class DeleteWorkerBlockRequest {
  public string $reason;
  public CustomerId $worker_id;
}

class DeleteWorkerBlockResponse {
}

class DisassociateQualificationFromWorkerRequest {
  public EntityId $qualification_type_id;
  public string $reason;
  public CustomerId $worker_id;
}

class DisassociateQualificationFromWorkerResponse {
}

class EntityId {
}

class EventType {
}

class EventTypeList {
}

class ExceptionMessage {
}

class GetAccountBalanceRequest {
}

class GetAccountBalanceResponse {
  public CurrencyAmount $available_balance;
  public CurrencyAmount $on_hold_balance;
}

class GetAssignmentRequest {
  public EntityId $assignment_id;
}

class GetAssignmentResponse {
  public Assignment $assignment;
  public HIT $hit;
}

class GetFileUploadURLRequest {
  public EntityId $assignment_id;
  public string $question_identifier;
}

class GetFileUploadURLResponse {
  public string $file_upload_url;
}

class GetHITRequest {
  public EntityId $hit_id;
}

class GetHITResponse {
  public HIT $hit;
}

class GetQualificationScoreRequest {
  public EntityId $qualification_type_id;
  public CustomerId $worker_id;
}

class GetQualificationScoreResponse {
  public Qualification $qualification;
}

class GetQualificationTypeRequest {
  public EntityId $qualification_type_id;
}

class GetQualificationTypeResponse {
  public QualificationType $qualification_type;
}

class HIT {
  public Long $assignment_duration_in_seconds;
  public Long $auto_approval_delay_in_seconds;
  public Timestamp $creation_time;
  public string $description;
  public Timestamp $expiration;
  public EntityId $hit_group_id;
  public EntityId $hit_id;
  public EntityId $hit_layout_id;
  public HITReviewStatus $hit_review_status;
  public HITStatus $hit_status;
  public EntityId $hit_type_id;
  public string $keywords;
  public int $max_assignments;
  public int $number_of_assignments_available;
  public int $number_of_assignments_completed;
  public int $number_of_assignments_pending;
  public QualificationRequirementList $qualification_requirements;
  public string $question;
  public string $requester_annotation;
  public CurrencyAmount $reward;
  public string $title;
}

class HITAccessActions {
}

class HITLayoutParameter {
  public string $name;
  public string $value;
}

class HITLayoutParameterList {
}

class HITList {
}

class HITReviewStatus {
}

class HITStatus {
}

class IdempotencyToken {
}

class Integer {
}

class IntegerList {
}

class ListAssignmentsForHITRequest {
  public AssignmentStatusList $assignment_statuses;
  public EntityId $hit_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;
}

class ListAssignmentsForHITResponse {
  public AssignmentList $assignments;
  public PaginationToken $next_token;
  public int $num_results;
}

class ListBonusPaymentsRequest {
  public EntityId $assignment_id;
  public EntityId $hit_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;
}

class ListBonusPaymentsResponse {
  public BonusPaymentList $bonus_payments;
  public PaginationToken $next_token;
  public int $num_results;
}

class ListHITsForQualificationTypeRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public EntityId $qualification_type_id;
}

class ListHITsForQualificationTypeResponse {
  public HITList $hi_ts;
  public PaginationToken $next_token;
  public int $num_results;
}

class ListHITsRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
}

class ListHITsResponse {
  public HITList $hi_ts;
  public PaginationToken $next_token;
  public int $num_results;
}

class ListQualificationRequestsRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public EntityId $qualification_type_id;
}

class ListQualificationRequestsResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public QualificationRequestList $qualification_requests;
}

class ListQualificationTypesRequest {
  public ResultSize $max_results;
  public boolean $must_be_owned_by_caller;
  public boolean $must_be_requestable;
  public PaginationToken $next_token;
  public string $query;
}

class ListQualificationTypesResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public QualificationTypeList $qualification_types;
}

class ListReviewPolicyResultsForHITRequest {
  public EntityId $hit_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public ReviewPolicyLevelList $policy_levels;
  public boolean $retrieve_actions;
  public boolean $retrieve_results;
}

class ListReviewPolicyResultsForHITResponse {
  public ReviewPolicy $assignment_review_policy;
  public ReviewReport $assignment_review_report;
  public EntityId $hit_id;
  public ReviewPolicy $hit_review_policy;
  public ReviewReport $hit_review_report;
  public PaginationToken $next_token;
}

class ListReviewableHITsRequest {
  public EntityId $hit_type_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public ReviewableHITStatus $status;
}

class ListReviewableHITsResponse {
  public HITList $hi_ts;
  public PaginationToken $next_token;
  public int $num_results;
}

class ListWorkerBlocksRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
}

class ListWorkerBlocksResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public WorkerBlockList $worker_blocks;
}

class ListWorkersWithQualificationTypeRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public EntityId $qualification_type_id;
  public QualificationStatus $status;
}

class ListWorkersWithQualificationTypeResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public QualificationList $qualifications;
}

class Locale {
  public CountryParameters $country;
  public CountryParameters $subdivision;
}

class LocaleList {
}

class Long {
}

class NotificationSpecification {
  public string $destination;
  public EventTypeList $event_types;
  public NotificationTransport $transport;
  public string $version;
}

class NotificationTransport {
}

class NotifyWorkersFailureCode {
}

class NotifyWorkersFailureStatus {
  public NotifyWorkersFailureCode $notify_workers_failure_code;
  public string $notify_workers_failure_message;
  public CustomerId $worker_id;
}

class NotifyWorkersFailureStatusList {
}

class NotifyWorkersRequest {
  public string $message_text;
  public string $subject;
  public CustomerIdList $worker_ids;
}

class NotifyWorkersResponse {
  public NotifyWorkersFailureStatusList $notify_workers_failure_statuses;
}

class PaginationToken {
}

class ParameterMapEntry {
  public string $key;
  public StringList $values;
}

class ParameterMapEntryList {
}

class PolicyParameter {
  public string $key;
  public ParameterMapEntryList $map_entries;
  public StringList $values;
}

class PolicyParameterList {
}

class Qualification {
  public Timestamp $grant_time;
  public int $integer_value;
  public Locale $locale_value;
  public EntityId $qualification_type_id;
  public QualificationStatus $status;
  public CustomerId $worker_id;
}

class QualificationList {
}

class QualificationRequest {
  public string $answer;
  public string $qualification_request_id;
  public EntityId $qualification_type_id;
  public Timestamp $submit_time;
  public string $test;
  public CustomerId $worker_id;
}

class QualificationRequestList {
}

class QualificationRequirement {
  public HITAccessActions $actions_guarded;
  public Comparator $comparator;
  public IntegerList $integer_values;
  public LocaleList $locale_values;
  public string $qualification_type_id;
  public boolean $required_to_preview;
}

class QualificationRequirementList {
}

class QualificationStatus {
}

class QualificationType {
  public string $answer_key;
  public boolean $auto_granted;
  public int $auto_granted_value;
  public Timestamp $creation_time;
  public string $description;
  public boolean $is_requestable;
  public string $keywords;
  public string $name;
  public EntityId $qualification_type_id;
  public QualificationTypeStatus $qualification_type_status;
  public Long $retry_delay_in_seconds;
  public string $test;
  public Long $test_duration_in_seconds;
}

class QualificationTypeList {
}

class QualificationTypeStatus {
}

class RejectAssignmentRequest {
  public EntityId $assignment_id;
  public string $requester_feedback;
}

class RejectAssignmentResponse {
}

class RejectQualificationRequestRequest {
  public string $qualification_request_id;
  public string $reason;
}

class RejectQualificationRequestResponse {
}

class RequestError {
  public ExceptionMessage $message;
  public TurkErrorCode $turk_error_code;
}

class ResultSize {
}

class ReviewActionDetail {
  public EntityId $action_id;
  public string $action_name;
  public Timestamp $complete_time;
  public string $error_code;
  public string $result;
  public ReviewActionStatus $status;
  public EntityId $target_id;
  public string $target_type;
}

class ReviewActionDetailList {
}

class ReviewActionStatus {
}

class ReviewPolicy {
  public PolicyParameterList $parameters;
  public string $policy_name;
}

class ReviewPolicyLevel {
}

class ReviewPolicyLevelList {
}

class ReviewReport {
  public ReviewActionDetailList $review_actions;
  public ReviewResultDetailList $review_results;
}

class ReviewResultDetail {
  public EntityId $action_id;
  public string $key;
  public EntityId $question_id;
  public EntityId $subject_id;
  public string $subject_type;
  public string $value;
}

class ReviewResultDetailList {
}

class ReviewableHITStatus {
}

class SendBonusRequest {
  public EntityId $assignment_id;
  public CurrencyAmount $bonus_amount;
  public string $reason;
  public IdempotencyToken $unique_request_token;
  public CustomerId $worker_id;
}

class SendBonusResponse {
}

class SendTestEventNotificationRequest {
  public NotificationSpecification $notification;
  public EventType $test_event_type;
}

class SendTestEventNotificationResponse {
}

class ServiceFault {
  public ExceptionMessage $message;
  public TurkErrorCode $turk_error_code;
}

class String {
}

class StringList {
}

class Timestamp {
}

class TurkErrorCode {
}

class UpdateExpirationForHITRequest {
  public Timestamp $expire_at;
  public EntityId $hit_id;
}

class UpdateExpirationForHITResponse {
}

class UpdateHITReviewStatusRequest {
  public EntityId $hit_id;
  public boolean $revert;
}

class UpdateHITReviewStatusResponse {
}

class UpdateHITTypeOfHITRequest {
  public EntityId $hit_id;
  public EntityId $hit_type_id;
}

class UpdateHITTypeOfHITResponse {
}

class UpdateNotificationSettingsRequest {
  public boolean $active;
  public EntityId $hit_type_id;
  public NotificationSpecification $notification;
}

class UpdateNotificationSettingsResponse {
}

class UpdateQualificationTypeRequest {
  public string $answer_key;
  public boolean $auto_granted;
  public int $auto_granted_value;
  public string $description;
  public EntityId $qualification_type_id;
  public QualificationTypeStatus $qualification_type_status;
  public Long $retry_delay_in_seconds;
  public string $test;
  public Long $test_duration_in_seconds;
}

class UpdateQualificationTypeResponse {
  public QualificationType $qualification_type;
}

class WorkerBlock {
  public string $reason;
  public CustomerId $worker_id;
}

class WorkerBlockList {
}

