<?hh // strict
namespace slack\aws\mturk-requester;

interface MTurk {
  public function AcceptQualificationRequest(AcceptQualificationRequestRequest): Awaitable<Errors\Result<AcceptQualificationRequestResponse>>;
  public function ApproveAssignment(ApproveAssignmentRequest): Awaitable<Errors\Result<ApproveAssignmentResponse>>;
  public function AssociateQualificationWithWorker(AssociateQualificationWithWorkerRequest): Awaitable<Errors\Result<AssociateQualificationWithWorkerResponse>>;
  public function CreateAdditionalAssignmentsForHIT(CreateAdditionalAssignmentsForHITRequest): Awaitable<Errors\Result<CreateAdditionalAssignmentsForHITResponse>>;
  public function CreateHIT(CreateHITRequest): Awaitable<Errors\Result<CreateHITResponse>>;
  public function CreateHITType(CreateHITTypeRequest): Awaitable<Errors\Result<CreateHITTypeResponse>>;
  public function CreateHITWithHITType(CreateHITWithHITTypeRequest): Awaitable<Errors\Result<CreateHITWithHITTypeResponse>>;
  public function CreateQualificationType(CreateQualificationTypeRequest): Awaitable<Errors\Result<CreateQualificationTypeResponse>>;
  public function CreateWorkerBlock(CreateWorkerBlockRequest): Awaitable<Errors\Result<CreateWorkerBlockResponse>>;
  public function DeleteHIT(DeleteHITRequest): Awaitable<Errors\Result<DeleteHITResponse>>;
  public function DeleteQualificationType(DeleteQualificationTypeRequest): Awaitable<Errors\Result<DeleteQualificationTypeResponse>>;
  public function DeleteWorkerBlock(DeleteWorkerBlockRequest): Awaitable<Errors\Result<DeleteWorkerBlockResponse>>;
  public function DisassociateQualificationFromWorker(DisassociateQualificationFromWorkerRequest): Awaitable<Errors\Result<DisassociateQualificationFromWorkerResponse>>;
  public function GetAccountBalance(GetAccountBalanceRequest): Awaitable<Errors\Result<GetAccountBalanceResponse>>;
  public function GetAssignment(GetAssignmentRequest): Awaitable<Errors\Result<GetAssignmentResponse>>;
  public function GetFileUploadURL(GetFileUploadURLRequest): Awaitable<Errors\Result<GetFileUploadURLResponse>>;
  public function GetHIT(GetHITRequest): Awaitable<Errors\Result<GetHITResponse>>;
  public function GetQualificationScore(GetQualificationScoreRequest): Awaitable<Errors\Result<GetQualificationScoreResponse>>;
  public function GetQualificationType(GetQualificationTypeRequest): Awaitable<Errors\Result<GetQualificationTypeResponse>>;
  public function ListAssignmentsForHIT(ListAssignmentsForHITRequest): Awaitable<Errors\Result<ListAssignmentsForHITResponse>>;
  public function ListBonusPayments(ListBonusPaymentsRequest): Awaitable<Errors\Result<ListBonusPaymentsResponse>>;
  public function ListHITs(ListHITsRequest): Awaitable<Errors\Result<ListHITsResponse>>;
  public function ListHITsForQualificationType(ListHITsForQualificationTypeRequest): Awaitable<Errors\Result<ListHITsForQualificationTypeResponse>>;
  public function ListQualificationRequests(ListQualificationRequestsRequest): Awaitable<Errors\Result<ListQualificationRequestsResponse>>;
  public function ListQualificationTypes(ListQualificationTypesRequest): Awaitable<Errors\Result<ListQualificationTypesResponse>>;
  public function ListReviewPolicyResultsForHIT(ListReviewPolicyResultsForHITRequest): Awaitable<Errors\Result<ListReviewPolicyResultsForHITResponse>>;
  public function ListReviewableHITs(ListReviewableHITsRequest): Awaitable<Errors\Result<ListReviewableHITsResponse>>;
  public function ListWorkerBlocks(ListWorkerBlocksRequest): Awaitable<Errors\Result<ListWorkerBlocksResponse>>;
  public function ListWorkersWithQualificationType(ListWorkersWithQualificationTypeRequest): Awaitable<Errors\Result<ListWorkersWithQualificationTypeResponse>>;
  public function NotifyWorkers(NotifyWorkersRequest): Awaitable<Errors\Result<NotifyWorkersResponse>>;
  public function RejectAssignment(RejectAssignmentRequest): Awaitable<Errors\Result<RejectAssignmentResponse>>;
  public function RejectQualificationRequest(RejectQualificationRequestRequest): Awaitable<Errors\Result<RejectQualificationRequestResponse>>;
  public function SendBonus(SendBonusRequest): Awaitable<Errors\Result<SendBonusResponse>>;
  public function SendTestEventNotification(SendTestEventNotificationRequest): Awaitable<Errors\Result<SendTestEventNotificationResponse>>;
  public function UpdateExpirationForHIT(UpdateExpirationForHITRequest): Awaitable<Errors\Result<UpdateExpirationForHITResponse>>;
  public function UpdateHITReviewStatus(UpdateHITReviewStatusRequest): Awaitable<Errors\Result<UpdateHITReviewStatusResponse>>;
  public function UpdateHITTypeOfHIT(UpdateHITTypeOfHITRequest): Awaitable<Errors\Result<UpdateHITTypeOfHITResponse>>;
  public function UpdateNotificationSettings(UpdateNotificationSettingsRequest): Awaitable<Errors\Result<UpdateNotificationSettingsResponse>>;
  public function UpdateQualificationType(UpdateQualificationTypeRequest): Awaitable<Errors\Result<UpdateQualificationTypeResponse>>;
}

class AcceptQualificationRequestRequest {
  public int $integer_value;
  public string $qualification_request_id;

  public function __construct(shape(
  ?'integer_value' => int,
  ?'qualification_request_id' => string,
  ) $s = shape()) {
    $this->integer_value = $integer_value ?? 0;
    $this->qualification_request_id = $qualification_request_id ?? "";
  }
}

class AcceptQualificationRequestResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApproveAssignmentRequest {
  public EntityId $assignment_id;
  public boolean $override_rejection;
  public string $requester_feedback;

  public function __construct(shape(
  ?'assignment_id' => EntityId,
  ?'override_rejection' => boolean,
  ?'requester_feedback' => string,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? "";
    $this->override_rejection = $override_rejection ?? false;
    $this->requester_feedback = $requester_feedback ?? "";
  }
}

class ApproveAssignmentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'accept_time' => Timestamp,
  ?'answer' => string,
  ?'approval_time' => Timestamp,
  ?'assignment_id' => EntityId,
  ?'assignment_status' => AssignmentStatus,
  ?'auto_approval_time' => Timestamp,
  ?'deadline' => Timestamp,
  ?'hit_id' => EntityId,
  ?'rejection_time' => Timestamp,
  ?'requester_feedback' => string,
  ?'submit_time' => Timestamp,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->accept_time = $accept_time ?? 0;
    $this->answer = $answer ?? "";
    $this->approval_time = $approval_time ?? 0;
    $this->assignment_id = $assignment_id ?? "";
    $this->assignment_status = $assignment_status ?? "";
    $this->auto_approval_time = $auto_approval_time ?? 0;
    $this->deadline = $deadline ?? 0;
    $this->hit_id = $hit_id ?? "";
    $this->rejection_time = $rejection_time ?? 0;
    $this->requester_feedback = $requester_feedback ?? "";
    $this->submit_time = $submit_time ?? 0;
    $this->worker_id = $worker_id ?? "";
  }
}

type AssignmentList = vec<Assignment>;

type AssignmentStatus = string;

type AssignmentStatusList = vec<AssignmentStatus>;

class AssociateQualificationWithWorkerRequest {
  public int $integer_value;
  public EntityId $qualification_type_id;
  public boolean $send_notification;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'integer_value' => int,
  ?'qualification_type_id' => EntityId,
  ?'send_notification' => boolean,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->integer_value = $integer_value ?? 0;
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->send_notification = $send_notification ?? false;
    $this->worker_id = $worker_id ?? "";
  }
}

class AssociateQualificationWithWorkerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BonusPayment {
  public EntityId $assignment_id;
  public CurrencyAmount $bonus_amount;
  public Timestamp $grant_time;
  public string $reason;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'assignment_id' => EntityId,
  ?'bonus_amount' => CurrencyAmount,
  ?'grant_time' => Timestamp,
  ?'reason' => string,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? "";
    $this->bonus_amount = $bonus_amount ?? "";
    $this->grant_time = $grant_time ?? 0;
    $this->reason = $reason ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

type BonusPaymentList = vec<BonusPayment>;

type Boolean = bool;

type Comparator = string;

type CountryParameters = string;

class CreateAdditionalAssignmentsForHITRequest {
  public EntityId $hit_id;
  public int $number_of_additional_assignments;
  public IdempotencyToken $unique_request_token;

  public function __construct(shape(
  ?'hit_id' => EntityId,
  ?'number_of_additional_assignments' => int,
  ?'unique_request_token' => IdempotencyToken,
  ) $s = shape()) {
    $this->hit_id = $hit_id ?? "";
    $this->number_of_additional_assignments = $number_of_additional_assignments ?? 0;
    $this->unique_request_token = $unique_request_token ?? "";
  }
}

class CreateAdditionalAssignmentsForHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'assignment_duration_in_seconds' => Long,
  ?'assignment_review_policy' => ReviewPolicy,
  ?'auto_approval_delay_in_seconds' => Long,
  ?'description' => string,
  ?'hit_layout_id' => EntityId,
  ?'hit_layout_parameters' => HITLayoutParameterList,
  ?'hit_review_policy' => ReviewPolicy,
  ?'keywords' => string,
  ?'lifetime_in_seconds' => Long,
  ?'max_assignments' => int,
  ?'qualification_requirements' => QualificationRequirementList,
  ?'question' => string,
  ?'requester_annotation' => string,
  ?'reward' => CurrencyAmount,
  ?'title' => string,
  ?'unique_request_token' => IdempotencyToken,
  ) $s = shape()) {
    $this->assignment_duration_in_seconds = $assignment_duration_in_seconds ?? 0;
    $this->assignment_review_policy = $assignment_review_policy ?? null;
    $this->auto_approval_delay_in_seconds = $auto_approval_delay_in_seconds ?? 0;
    $this->description = $description ?? "";
    $this->hit_layout_id = $hit_layout_id ?? "";
    $this->hit_layout_parameters = $hit_layout_parameters ?? [];
    $this->hit_review_policy = $hit_review_policy ?? null;
    $this->keywords = $keywords ?? "";
    $this->lifetime_in_seconds = $lifetime_in_seconds ?? 0;
    $this->max_assignments = $max_assignments ?? 0;
    $this->qualification_requirements = $qualification_requirements ?? [];
    $this->question = $question ?? "";
    $this->requester_annotation = $requester_annotation ?? "";
    $this->reward = $reward ?? "";
    $this->title = $title ?? "";
    $this->unique_request_token = $unique_request_token ?? "";
  }
}

class CreateHITResponse {
  public HIT $hit;

  public function __construct(shape(
  ?'hit' => HIT,
  ) $s = shape()) {
    $this->hit = $hit ?? null;
  }
}

class CreateHITTypeRequest {
  public Long $assignment_duration_in_seconds;
  public Long $auto_approval_delay_in_seconds;
  public string $description;
  public string $keywords;
  public QualificationRequirementList $qualification_requirements;
  public CurrencyAmount $reward;
  public string $title;

  public function __construct(shape(
  ?'assignment_duration_in_seconds' => Long,
  ?'auto_approval_delay_in_seconds' => Long,
  ?'description' => string,
  ?'keywords' => string,
  ?'qualification_requirements' => QualificationRequirementList,
  ?'reward' => CurrencyAmount,
  ?'title' => string,
  ) $s = shape()) {
    $this->assignment_duration_in_seconds = $assignment_duration_in_seconds ?? 0;
    $this->auto_approval_delay_in_seconds = $auto_approval_delay_in_seconds ?? 0;
    $this->description = $description ?? "";
    $this->keywords = $keywords ?? "";
    $this->qualification_requirements = $qualification_requirements ?? [];
    $this->reward = $reward ?? "";
    $this->title = $title ?? "";
  }
}

class CreateHITTypeResponse {
  public EntityId $hit_type_id;

  public function __construct(shape(
  ?'hit_type_id' => EntityId,
  ) $s = shape()) {
    $this->hit_type_id = $hit_type_id ?? "";
  }
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

  public function __construct(shape(
  ?'assignment_review_policy' => ReviewPolicy,
  ?'hit_layout_id' => EntityId,
  ?'hit_layout_parameters' => HITLayoutParameterList,
  ?'hit_review_policy' => ReviewPolicy,
  ?'hit_type_id' => EntityId,
  ?'lifetime_in_seconds' => Long,
  ?'max_assignments' => int,
  ?'question' => string,
  ?'requester_annotation' => string,
  ?'unique_request_token' => IdempotencyToken,
  ) $s = shape()) {
    $this->assignment_review_policy = $assignment_review_policy ?? null;
    $this->hit_layout_id = $hit_layout_id ?? "";
    $this->hit_layout_parameters = $hit_layout_parameters ?? [];
    $this->hit_review_policy = $hit_review_policy ?? null;
    $this->hit_type_id = $hit_type_id ?? "";
    $this->lifetime_in_seconds = $lifetime_in_seconds ?? 0;
    $this->max_assignments = $max_assignments ?? 0;
    $this->question = $question ?? "";
    $this->requester_annotation = $requester_annotation ?? "";
    $this->unique_request_token = $unique_request_token ?? "";
  }
}

class CreateHITWithHITTypeResponse {
  public HIT $hit;

  public function __construct(shape(
  ?'hit' => HIT,
  ) $s = shape()) {
    $this->hit = $hit ?? null;
  }
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

  public function __construct(shape(
  ?'answer_key' => string,
  ?'auto_granted' => boolean,
  ?'auto_granted_value' => int,
  ?'description' => string,
  ?'keywords' => string,
  ?'name' => string,
  ?'qualification_type_status' => QualificationTypeStatus,
  ?'retry_delay_in_seconds' => Long,
  ?'test' => string,
  ?'test_duration_in_seconds' => Long,
  ) $s = shape()) {
    $this->answer_key = $answer_key ?? "";
    $this->auto_granted = $auto_granted ?? false;
    $this->auto_granted_value = $auto_granted_value ?? 0;
    $this->description = $description ?? "";
    $this->keywords = $keywords ?? "";
    $this->name = $name ?? "";
    $this->qualification_type_status = $qualification_type_status ?? "";
    $this->retry_delay_in_seconds = $retry_delay_in_seconds ?? 0;
    $this->test = $test ?? "";
    $this->test_duration_in_seconds = $test_duration_in_seconds ?? 0;
  }
}

class CreateQualificationTypeResponse {
  public QualificationType $qualification_type;

  public function __construct(shape(
  ?'qualification_type' => QualificationType,
  ) $s = shape()) {
    $this->qualification_type = $qualification_type ?? null;
  }
}

class CreateWorkerBlockRequest {
  public string $reason;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'reason' => string,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->reason = $reason ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

class CreateWorkerBlockResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type CurrencyAmount = string;

type CustomerId = string;

type CustomerIdList = vec<CustomerId>;

class DeleteHITRequest {
  public EntityId $hit_id;

  public function __construct(shape(
  ?'hit_id' => EntityId,
  ) $s = shape()) {
    $this->hit_id = $hit_id ?? "";
  }
}

class DeleteHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteQualificationTypeRequest {
  public EntityId $qualification_type_id;

  public function __construct(shape(
  ?'qualification_type_id' => EntityId,
  ) $s = shape()) {
    $this->qualification_type_id = $qualification_type_id ?? "";
  }
}

class DeleteQualificationTypeResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteWorkerBlockRequest {
  public string $reason;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'reason' => string,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->reason = $reason ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

class DeleteWorkerBlockResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateQualificationFromWorkerRequest {
  public EntityId $qualification_type_id;
  public string $reason;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'qualification_type_id' => EntityId,
  ?'reason' => string,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->reason = $reason ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

class DisassociateQualificationFromWorkerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type EntityId = string;

type EventType = string;

type EventTypeList = vec<EventType>;

type ExceptionMessage = string;

class GetAccountBalanceRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetAccountBalanceResponse {
  public CurrencyAmount $available_balance;
  public CurrencyAmount $on_hold_balance;

  public function __construct(shape(
  ?'available_balance' => CurrencyAmount,
  ?'on_hold_balance' => CurrencyAmount,
  ) $s = shape()) {
    $this->available_balance = $available_balance ?? "";
    $this->on_hold_balance = $on_hold_balance ?? "";
  }
}

class GetAssignmentRequest {
  public EntityId $assignment_id;

  public function __construct(shape(
  ?'assignment_id' => EntityId,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? "";
  }
}

class GetAssignmentResponse {
  public Assignment $assignment;
  public HIT $hit;

  public function __construct(shape(
  ?'assignment' => Assignment,
  ?'hit' => HIT,
  ) $s = shape()) {
    $this->assignment = $assignment ?? null;
    $this->hit = $hit ?? null;
  }
}

class GetFileUploadURLRequest {
  public EntityId $assignment_id;
  public string $question_identifier;

  public function __construct(shape(
  ?'assignment_id' => EntityId,
  ?'question_identifier' => string,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? "";
    $this->question_identifier = $question_identifier ?? "";
  }
}

class GetFileUploadURLResponse {
  public string $file_upload_url;

  public function __construct(shape(
  ?'file_upload_url' => string,
  ) $s = shape()) {
    $this->file_upload_url = $file_upload_url ?? "";
  }
}

class GetHITRequest {
  public EntityId $hit_id;

  public function __construct(shape(
  ?'hit_id' => EntityId,
  ) $s = shape()) {
    $this->hit_id = $hit_id ?? "";
  }
}

class GetHITResponse {
  public HIT $hit;

  public function __construct(shape(
  ?'hit' => HIT,
  ) $s = shape()) {
    $this->hit = $hit ?? null;
  }
}

class GetQualificationScoreRequest {
  public EntityId $qualification_type_id;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'qualification_type_id' => EntityId,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

class GetQualificationScoreResponse {
  public Qualification $qualification;

  public function __construct(shape(
  ?'qualification' => Qualification,
  ) $s = shape()) {
    $this->qualification = $qualification ?? null;
  }
}

class GetQualificationTypeRequest {
  public EntityId $qualification_type_id;

  public function __construct(shape(
  ?'qualification_type_id' => EntityId,
  ) $s = shape()) {
    $this->qualification_type_id = $qualification_type_id ?? "";
  }
}

class GetQualificationTypeResponse {
  public QualificationType $qualification_type;

  public function __construct(shape(
  ?'qualification_type' => QualificationType,
  ) $s = shape()) {
    $this->qualification_type = $qualification_type ?? null;
  }
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

  public function __construct(shape(
  ?'assignment_duration_in_seconds' => Long,
  ?'auto_approval_delay_in_seconds' => Long,
  ?'creation_time' => Timestamp,
  ?'description' => string,
  ?'expiration' => Timestamp,
  ?'hit_group_id' => EntityId,
  ?'hit_id' => EntityId,
  ?'hit_layout_id' => EntityId,
  ?'hit_review_status' => HITReviewStatus,
  ?'hit_status' => HITStatus,
  ?'hit_type_id' => EntityId,
  ?'keywords' => string,
  ?'max_assignments' => int,
  ?'number_of_assignments_available' => int,
  ?'number_of_assignments_completed' => int,
  ?'number_of_assignments_pending' => int,
  ?'qualification_requirements' => QualificationRequirementList,
  ?'question' => string,
  ?'requester_annotation' => string,
  ?'reward' => CurrencyAmount,
  ?'title' => string,
  ) $s = shape()) {
    $this->assignment_duration_in_seconds = $assignment_duration_in_seconds ?? 0;
    $this->auto_approval_delay_in_seconds = $auto_approval_delay_in_seconds ?? 0;
    $this->creation_time = $creation_time ?? 0;
    $this->description = $description ?? "";
    $this->expiration = $expiration ?? 0;
    $this->hit_group_id = $hit_group_id ?? "";
    $this->hit_id = $hit_id ?? "";
    $this->hit_layout_id = $hit_layout_id ?? "";
    $this->hit_review_status = $hit_review_status ?? "";
    $this->hit_status = $hit_status ?? "";
    $this->hit_type_id = $hit_type_id ?? "";
    $this->keywords = $keywords ?? "";
    $this->max_assignments = $max_assignments ?? 0;
    $this->number_of_assignments_available = $number_of_assignments_available ?? 0;
    $this->number_of_assignments_completed = $number_of_assignments_completed ?? 0;
    $this->number_of_assignments_pending = $number_of_assignments_pending ?? 0;
    $this->qualification_requirements = $qualification_requirements ?? [];
    $this->question = $question ?? "";
    $this->requester_annotation = $requester_annotation ?? "";
    $this->reward = $reward ?? "";
    $this->title = $title ?? "";
  }
}

type HITAccessActions = string;

class HITLayoutParameter {
  public string $name;
  public string $value;

  public function __construct(shape(
  ?'name' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->value = $value ?? "";
  }
}

type HITLayoutParameterList = vec<HITLayoutParameter>;

type HITList = vec<HIT>;

type HITReviewStatus = string;

type HITStatus = string;

type IdempotencyToken = string;

type Integer = int;

type IntegerList = vec<Integer>;

class ListAssignmentsForHITRequest {
  public AssignmentStatusList $assignment_statuses;
  public EntityId $hit_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assignment_statuses' => AssignmentStatusList,
  ?'hit_id' => EntityId,
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assignment_statuses = $assignment_statuses ?? [];
    $this->hit_id = $hit_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAssignmentsForHITResponse {
  public AssignmentList $assignments;
  public PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
  ?'assignments' => AssignmentList,
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ) $s = shape()) {
    $this->assignments = $assignments ?? [];
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
  }
}

class ListBonusPaymentsRequest {
  public EntityId $assignment_id;
  public EntityId $hit_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assignment_id' => EntityId,
  ?'hit_id' => EntityId,
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? "";
    $this->hit_id = $hit_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListBonusPaymentsResponse {
  public BonusPaymentList $bonus_payments;
  public PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
  ?'bonus_payments' => BonusPaymentList,
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ) $s = shape()) {
    $this->bonus_payments = $bonus_payments ?? [];
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
  }
}

class ListHITsForQualificationTypeRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public EntityId $qualification_type_id;

  public function __construct(shape(
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ?'qualification_type_id' => EntityId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->qualification_type_id = $qualification_type_id ?? "";
  }
}

class ListHITsForQualificationTypeResponse {
  public HITList $hi_ts;
  public PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
  ?'hi_ts' => HITList,
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ) $s = shape()) {
    $this->hi_ts = $hi_ts ?? [];
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
  }
}

class ListHITsRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListHITsResponse {
  public HITList $hi_ts;
  public PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
  ?'hi_ts' => HITList,
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ) $s = shape()) {
    $this->hi_ts = $hi_ts ?? [];
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
  }
}

class ListQualificationRequestsRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public EntityId $qualification_type_id;

  public function __construct(shape(
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ?'qualification_type_id' => EntityId,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->qualification_type_id = $qualification_type_id ?? "";
  }
}

class ListQualificationRequestsResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public QualificationRequestList $qualification_requests;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ?'qualification_requests' => QualificationRequestList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
    $this->qualification_requests = $qualification_requests ?? [];
  }
}

class ListQualificationTypesRequest {
  public ResultSize $max_results;
  public boolean $must_be_owned_by_caller;
  public boolean $must_be_requestable;
  public PaginationToken $next_token;
  public string $query;

  public function __construct(shape(
  ?'max_results' => ResultSize,
  ?'must_be_owned_by_caller' => boolean,
  ?'must_be_requestable' => boolean,
  ?'next_token' => PaginationToken,
  ?'query' => string,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->must_be_owned_by_caller = $must_be_owned_by_caller ?? false;
    $this->must_be_requestable = $must_be_requestable ?? false;
    $this->next_token = $next_token ?? "";
    $this->query = $query ?? "";
  }
}

class ListQualificationTypesResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public QualificationTypeList $qualification_types;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ?'qualification_types' => QualificationTypeList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
    $this->qualification_types = $qualification_types ?? [];
  }
}

class ListReviewPolicyResultsForHITRequest {
  public EntityId $hit_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public ReviewPolicyLevelList $policy_levels;
  public boolean $retrieve_actions;
  public boolean $retrieve_results;

  public function __construct(shape(
  ?'hit_id' => EntityId,
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ?'policy_levels' => ReviewPolicyLevelList,
  ?'retrieve_actions' => boolean,
  ?'retrieve_results' => boolean,
  ) $s = shape()) {
    $this->hit_id = $hit_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->policy_levels = $policy_levels ?? [];
    $this->retrieve_actions = $retrieve_actions ?? false;
    $this->retrieve_results = $retrieve_results ?? false;
  }
}

class ListReviewPolicyResultsForHITResponse {
  public ReviewPolicy $assignment_review_policy;
  public ReviewReport $assignment_review_report;
  public EntityId $hit_id;
  public ReviewPolicy $hit_review_policy;
  public ReviewReport $hit_review_report;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'assignment_review_policy' => ReviewPolicy,
  ?'assignment_review_report' => ReviewReport,
  ?'hit_id' => EntityId,
  ?'hit_review_policy' => ReviewPolicy,
  ?'hit_review_report' => ReviewReport,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->assignment_review_policy = $assignment_review_policy ?? null;
    $this->assignment_review_report = $assignment_review_report ?? null;
    $this->hit_id = $hit_id ?? "";
    $this->hit_review_policy = $hit_review_policy ?? null;
    $this->hit_review_report = $hit_review_report ?? null;
    $this->next_token = $next_token ?? "";
  }
}

class ListReviewableHITsRequest {
  public EntityId $hit_type_id;
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public ReviewableHITStatus $status;

  public function __construct(shape(
  ?'hit_type_id' => EntityId,
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ?'status' => ReviewableHITStatus,
  ) $s = shape()) {
    $this->hit_type_id = $hit_type_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->status = $status ?? "";
  }
}

class ListReviewableHITsResponse {
  public HITList $hi_ts;
  public PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
  ?'hi_ts' => HITList,
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ) $s = shape()) {
    $this->hi_ts = $hi_ts ?? [];
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
  }
}

class ListWorkerBlocksRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListWorkerBlocksResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public WorkerBlockList $worker_blocks;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ?'worker_blocks' => WorkerBlockList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
    $this->worker_blocks = $worker_blocks ?? [];
  }
}

class ListWorkersWithQualificationTypeRequest {
  public ResultSize $max_results;
  public PaginationToken $next_token;
  public EntityId $qualification_type_id;
  public QualificationStatus $status;

  public function __construct(shape(
  ?'max_results' => ResultSize,
  ?'next_token' => PaginationToken,
  ?'qualification_type_id' => EntityId,
  ?'status' => QualificationStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->status = $status ?? "";
  }
}

class ListWorkersWithQualificationTypeResponse {
  public PaginationToken $next_token;
  public int $num_results;
  public QualificationList $qualifications;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'num_results' => int,
  ?'qualifications' => QualificationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->num_results = $num_results ?? 0;
    $this->qualifications = $qualifications ?? [];
  }
}

class Locale {
  public CountryParameters $country;
  public CountryParameters $subdivision;

  public function __construct(shape(
  ?'country' => CountryParameters,
  ?'subdivision' => CountryParameters,
  ) $s = shape()) {
    $this->country = $country ?? "";
    $this->subdivision = $subdivision ?? "";
  }
}

type LocaleList = vec<Locale>;

type Long = int;

class NotificationSpecification {
  public string $destination;
  public EventTypeList $event_types;
  public NotificationTransport $transport;
  public string $version;

  public function __construct(shape(
  ?'destination' => string,
  ?'event_types' => EventTypeList,
  ?'transport' => NotificationTransport,
  ?'version' => string,
  ) $s = shape()) {
    $this->destination = $destination ?? "";
    $this->event_types = $event_types ?? [];
    $this->transport = $transport ?? "";
    $this->version = $version ?? "";
  }
}

type NotificationTransport = string;

type NotifyWorkersFailureCode = string;

class NotifyWorkersFailureStatus {
  public NotifyWorkersFailureCode $notify_workers_failure_code;
  public string $notify_workers_failure_message;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'notify_workers_failure_code' => NotifyWorkersFailureCode,
  ?'notify_workers_failure_message' => string,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->notify_workers_failure_code = $notify_workers_failure_code ?? "";
    $this->notify_workers_failure_message = $notify_workers_failure_message ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

type NotifyWorkersFailureStatusList = vec<NotifyWorkersFailureStatus>;

class NotifyWorkersRequest {
  public string $message_text;
  public string $subject;
  public CustomerIdList $worker_ids;

  public function __construct(shape(
  ?'message_text' => string,
  ?'subject' => string,
  ?'worker_ids' => CustomerIdList,
  ) $s = shape()) {
    $this->message_text = $message_text ?? "";
    $this->subject = $subject ?? "";
    $this->worker_ids = $worker_ids ?? [];
  }
}

class NotifyWorkersResponse {
  public NotifyWorkersFailureStatusList $notify_workers_failure_statuses;

  public function __construct(shape(
  ?'notify_workers_failure_statuses' => NotifyWorkersFailureStatusList,
  ) $s = shape()) {
    $this->notify_workers_failure_statuses = $notify_workers_failure_statuses ?? [];
  }
}

type PaginationToken = string;

class ParameterMapEntry {
  public string $key;
  public StringList $values;

  public function __construct(shape(
  ?'key' => string,
  ?'values' => StringList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->values = $values ?? [];
  }
}

type ParameterMapEntryList = vec<ParameterMapEntry>;

class PolicyParameter {
  public string $key;
  public ParameterMapEntryList $map_entries;
  public StringList $values;

  public function __construct(shape(
  ?'key' => string,
  ?'map_entries' => ParameterMapEntryList,
  ?'values' => StringList,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->map_entries = $map_entries ?? [];
    $this->values = $values ?? [];
  }
}

type PolicyParameterList = vec<PolicyParameter>;

class Qualification {
  public Timestamp $grant_time;
  public int $integer_value;
  public Locale $locale_value;
  public EntityId $qualification_type_id;
  public QualificationStatus $status;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'grant_time' => Timestamp,
  ?'integer_value' => int,
  ?'locale_value' => Locale,
  ?'qualification_type_id' => EntityId,
  ?'status' => QualificationStatus,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->grant_time = $grant_time ?? 0;
    $this->integer_value = $integer_value ?? 0;
    $this->locale_value = $locale_value ?? null;
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->status = $status ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

type QualificationList = vec<Qualification>;

class QualificationRequest {
  public string $answer;
  public string $qualification_request_id;
  public EntityId $qualification_type_id;
  public Timestamp $submit_time;
  public string $test;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'answer' => string,
  ?'qualification_request_id' => string,
  ?'qualification_type_id' => EntityId,
  ?'submit_time' => Timestamp,
  ?'test' => string,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->answer = $answer ?? "";
    $this->qualification_request_id = $qualification_request_id ?? "";
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->submit_time = $submit_time ?? 0;
    $this->test = $test ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

type QualificationRequestList = vec<QualificationRequest>;

class QualificationRequirement {
  public HITAccessActions $actions_guarded;
  public Comparator $comparator;
  public IntegerList $integer_values;
  public LocaleList $locale_values;
  public string $qualification_type_id;
  public boolean $required_to_preview;

  public function __construct(shape(
  ?'actions_guarded' => HITAccessActions,
  ?'comparator' => Comparator,
  ?'integer_values' => IntegerList,
  ?'locale_values' => LocaleList,
  ?'qualification_type_id' => string,
  ?'required_to_preview' => boolean,
  ) $s = shape()) {
    $this->actions_guarded = $actions_guarded ?? "";
    $this->comparator = $comparator ?? "";
    $this->integer_values = $integer_values ?? [];
    $this->locale_values = $locale_values ?? [];
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->required_to_preview = $required_to_preview ?? false;
  }
}

type QualificationRequirementList = vec<QualificationRequirement>;

type QualificationStatus = string;

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

  public function __construct(shape(
  ?'answer_key' => string,
  ?'auto_granted' => boolean,
  ?'auto_granted_value' => int,
  ?'creation_time' => Timestamp,
  ?'description' => string,
  ?'is_requestable' => boolean,
  ?'keywords' => string,
  ?'name' => string,
  ?'qualification_type_id' => EntityId,
  ?'qualification_type_status' => QualificationTypeStatus,
  ?'retry_delay_in_seconds' => Long,
  ?'test' => string,
  ?'test_duration_in_seconds' => Long,
  ) $s = shape()) {
    $this->answer_key = $answer_key ?? "";
    $this->auto_granted = $auto_granted ?? false;
    $this->auto_granted_value = $auto_granted_value ?? 0;
    $this->creation_time = $creation_time ?? 0;
    $this->description = $description ?? "";
    $this->is_requestable = $is_requestable ?? false;
    $this->keywords = $keywords ?? "";
    $this->name = $name ?? "";
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->qualification_type_status = $qualification_type_status ?? "";
    $this->retry_delay_in_seconds = $retry_delay_in_seconds ?? 0;
    $this->test = $test ?? "";
    $this->test_duration_in_seconds = $test_duration_in_seconds ?? 0;
  }
}

type QualificationTypeList = vec<QualificationType>;

type QualificationTypeStatus = string;

class RejectAssignmentRequest {
  public EntityId $assignment_id;
  public string $requester_feedback;

  public function __construct(shape(
  ?'assignment_id' => EntityId,
  ?'requester_feedback' => string,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? "";
    $this->requester_feedback = $requester_feedback ?? "";
  }
}

class RejectAssignmentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RejectQualificationRequestRequest {
  public string $qualification_request_id;
  public string $reason;

  public function __construct(shape(
  ?'qualification_request_id' => string,
  ?'reason' => string,
  ) $s = shape()) {
    $this->qualification_request_id = $qualification_request_id ?? "";
    $this->reason = $reason ?? "";
  }
}

class RejectQualificationRequestResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RequestError {
  public ExceptionMessage $message;
  public TurkErrorCode $turk_error_code;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ?'turk_error_code' => TurkErrorCode,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->turk_error_code = $turk_error_code ?? "";
  }
}

type ResultSize = int;

class ReviewActionDetail {
  public EntityId $action_id;
  public string $action_name;
  public Timestamp $complete_time;
  public string $error_code;
  public string $result;
  public ReviewActionStatus $status;
  public EntityId $target_id;
  public string $target_type;

  public function __construct(shape(
  ?'action_id' => EntityId,
  ?'action_name' => string,
  ?'complete_time' => Timestamp,
  ?'error_code' => string,
  ?'result' => string,
  ?'status' => ReviewActionStatus,
  ?'target_id' => EntityId,
  ?'target_type' => string,
  ) $s = shape()) {
    $this->action_id = $action_id ?? "";
    $this->action_name = $action_name ?? "";
    $this->complete_time = $complete_time ?? 0;
    $this->error_code = $error_code ?? "";
    $this->result = $result ?? "";
    $this->status = $status ?? "";
    $this->target_id = $target_id ?? "";
    $this->target_type = $target_type ?? "";
  }
}

type ReviewActionDetailList = vec<ReviewActionDetail>;

type ReviewActionStatus = string;

class ReviewPolicy {
  public PolicyParameterList $parameters;
  public string $policy_name;

  public function __construct(shape(
  ?'parameters' => PolicyParameterList,
  ?'policy_name' => string,
  ) $s = shape()) {
    $this->parameters = $parameters ?? [];
    $this->policy_name = $policy_name ?? "";
  }
}

type ReviewPolicyLevel = string;

type ReviewPolicyLevelList = vec<ReviewPolicyLevel>;

class ReviewReport {
  public ReviewActionDetailList $review_actions;
  public ReviewResultDetailList $review_results;

  public function __construct(shape(
  ?'review_actions' => ReviewActionDetailList,
  ?'review_results' => ReviewResultDetailList,
  ) $s = shape()) {
    $this->review_actions = $review_actions ?? [];
    $this->review_results = $review_results ?? [];
  }
}

class ReviewResultDetail {
  public EntityId $action_id;
  public string $key;
  public EntityId $question_id;
  public EntityId $subject_id;
  public string $subject_type;
  public string $value;

  public function __construct(shape(
  ?'action_id' => EntityId,
  ?'key' => string,
  ?'question_id' => EntityId,
  ?'subject_id' => EntityId,
  ?'subject_type' => string,
  ?'value' => string,
  ) $s = shape()) {
    $this->action_id = $action_id ?? "";
    $this->key = $key ?? "";
    $this->question_id = $question_id ?? "";
    $this->subject_id = $subject_id ?? "";
    $this->subject_type = $subject_type ?? "";
    $this->value = $value ?? "";
  }
}

type ReviewResultDetailList = vec<ReviewResultDetail>;

type ReviewableHITStatus = string;

class SendBonusRequest {
  public EntityId $assignment_id;
  public CurrencyAmount $bonus_amount;
  public string $reason;
  public IdempotencyToken $unique_request_token;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'assignment_id' => EntityId,
  ?'bonus_amount' => CurrencyAmount,
  ?'reason' => string,
  ?'unique_request_token' => IdempotencyToken,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->assignment_id = $assignment_id ?? "";
    $this->bonus_amount = $bonus_amount ?? "";
    $this->reason = $reason ?? "";
    $this->unique_request_token = $unique_request_token ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

class SendBonusResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SendTestEventNotificationRequest {
  public NotificationSpecification $notification;
  public EventType $test_event_type;

  public function __construct(shape(
  ?'notification' => NotificationSpecification,
  ?'test_event_type' => EventType,
  ) $s = shape()) {
    $this->notification = $notification ?? null;
    $this->test_event_type = $test_event_type ?? "";
  }
}

class SendTestEventNotificationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceFault {
  public ExceptionMessage $message;
  public TurkErrorCode $turk_error_code;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ?'turk_error_code' => TurkErrorCode,
  ) $s = shape()) {
    $this->message = $message ?? "";
    $this->turk_error_code = $turk_error_code ?? "";
  }
}

type String = string;

type StringList = vec<String>;

type Timestamp = int;

type TurkErrorCode = string;

class UpdateExpirationForHITRequest {
  public Timestamp $expire_at;
  public EntityId $hit_id;

  public function __construct(shape(
  ?'expire_at' => Timestamp,
  ?'hit_id' => EntityId,
  ) $s = shape()) {
    $this->expire_at = $expire_at ?? 0;
    $this->hit_id = $hit_id ?? "";
  }
}

class UpdateExpirationForHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateHITReviewStatusRequest {
  public EntityId $hit_id;
  public boolean $revert;

  public function __construct(shape(
  ?'hit_id' => EntityId,
  ?'revert' => boolean,
  ) $s = shape()) {
    $this->hit_id = $hit_id ?? "";
    $this->revert = $revert ?? false;
  }
}

class UpdateHITReviewStatusResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateHITTypeOfHITRequest {
  public EntityId $hit_id;
  public EntityId $hit_type_id;

  public function __construct(shape(
  ?'hit_id' => EntityId,
  ?'hit_type_id' => EntityId,
  ) $s = shape()) {
    $this->hit_id = $hit_id ?? "";
    $this->hit_type_id = $hit_type_id ?? "";
  }
}

class UpdateHITTypeOfHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateNotificationSettingsRequest {
  public boolean $active;
  public EntityId $hit_type_id;
  public NotificationSpecification $notification;

  public function __construct(shape(
  ?'active' => boolean,
  ?'hit_type_id' => EntityId,
  ?'notification' => NotificationSpecification,
  ) $s = shape()) {
    $this->active = $active ?? false;
    $this->hit_type_id = $hit_type_id ?? "";
    $this->notification = $notification ?? null;
  }
}

class UpdateNotificationSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'answer_key' => string,
  ?'auto_granted' => boolean,
  ?'auto_granted_value' => int,
  ?'description' => string,
  ?'qualification_type_id' => EntityId,
  ?'qualification_type_status' => QualificationTypeStatus,
  ?'retry_delay_in_seconds' => Long,
  ?'test' => string,
  ?'test_duration_in_seconds' => Long,
  ) $s = shape()) {
    $this->answer_key = $answer_key ?? "";
    $this->auto_granted = $auto_granted ?? false;
    $this->auto_granted_value = $auto_granted_value ?? 0;
    $this->description = $description ?? "";
    $this->qualification_type_id = $qualification_type_id ?? "";
    $this->qualification_type_status = $qualification_type_status ?? "";
    $this->retry_delay_in_seconds = $retry_delay_in_seconds ?? 0;
    $this->test = $test ?? "";
    $this->test_duration_in_seconds = $test_duration_in_seconds ?? 0;
  }
}

class UpdateQualificationTypeResponse {
  public QualificationType $qualification_type;

  public function __construct(shape(
  ?'qualification_type' => QualificationType,
  ) $s = shape()) {
    $this->qualification_type = $qualification_type ?? null;
  }
}

class WorkerBlock {
  public string $reason;
  public CustomerId $worker_id;

  public function __construct(shape(
  ?'reason' => string,
  ?'worker_id' => CustomerId,
  ) $s = shape()) {
    $this->reason = $reason ?? "";
    $this->worker_id = $worker_id ?? "";
  }
}

type WorkerBlockList = vec<WorkerBlock>;

