<?hh // strict
namespace slack\aws\mturk-requester;

interface MTurk {
  public function AcceptQualificationRequest(AcceptQualificationRequestRequest $in): Awaitable<\Errors\Result<AcceptQualificationRequestResponse>>;
  public function ApproveAssignment(ApproveAssignmentRequest $in): Awaitable<\Errors\Result<ApproveAssignmentResponse>>;
  public function AssociateQualificationWithWorker(AssociateQualificationWithWorkerRequest $in): Awaitable<\Errors\Result<AssociateQualificationWithWorkerResponse>>;
  public function CreateAdditionalAssignmentsForHIT(CreateAdditionalAssignmentsForHITRequest $in): Awaitable<\Errors\Result<CreateAdditionalAssignmentsForHITResponse>>;
  public function CreateHIT(CreateHITRequest $in): Awaitable<\Errors\Result<CreateHITResponse>>;
  public function CreateHITType(CreateHITTypeRequest $in): Awaitable<\Errors\Result<CreateHITTypeResponse>>;
  public function CreateHITWithHITType(CreateHITWithHITTypeRequest $in): Awaitable<\Errors\Result<CreateHITWithHITTypeResponse>>;
  public function CreateQualificationType(CreateQualificationTypeRequest $in): Awaitable<\Errors\Result<CreateQualificationTypeResponse>>;
  public function CreateWorkerBlock(CreateWorkerBlockRequest $in): Awaitable<\Errors\Result<CreateWorkerBlockResponse>>;
  public function DeleteHIT(DeleteHITRequest $in): Awaitable<\Errors\Result<DeleteHITResponse>>;
  public function DeleteQualificationType(DeleteQualificationTypeRequest $in): Awaitable<\Errors\Result<DeleteQualificationTypeResponse>>;
  public function DeleteWorkerBlock(DeleteWorkerBlockRequest $in): Awaitable<\Errors\Result<DeleteWorkerBlockResponse>>;
  public function DisassociateQualificationFromWorker(DisassociateQualificationFromWorkerRequest $in): Awaitable<\Errors\Result<DisassociateQualificationFromWorkerResponse>>;
  public function GetAccountBalance(GetAccountBalanceRequest $in): Awaitable<\Errors\Result<GetAccountBalanceResponse>>;
  public function GetAssignment(GetAssignmentRequest $in): Awaitable<\Errors\Result<GetAssignmentResponse>>;
  public function GetFileUploadURL(GetFileUploadURLRequest $in): Awaitable<\Errors\Result<GetFileUploadURLResponse>>;
  public function GetHIT(GetHITRequest $in): Awaitable<\Errors\Result<GetHITResponse>>;
  public function GetQualificationScore(GetQualificationScoreRequest $in): Awaitable<\Errors\Result<GetQualificationScoreResponse>>;
  public function GetQualificationType(GetQualificationTypeRequest $in): Awaitable<\Errors\Result<GetQualificationTypeResponse>>;
  public function ListAssignmentsForHIT(ListAssignmentsForHITRequest $in): Awaitable<\Errors\Result<ListAssignmentsForHITResponse>>;
  public function ListBonusPayments(ListBonusPaymentsRequest $in): Awaitable<\Errors\Result<ListBonusPaymentsResponse>>;
  public function ListHITs(ListHITsRequest $in): Awaitable<\Errors\Result<ListHITsResponse>>;
  public function ListHITsForQualificationType(ListHITsForQualificationTypeRequest $in): Awaitable<\Errors\Result<ListHITsForQualificationTypeResponse>>;
  public function ListQualificationRequests(ListQualificationRequestsRequest $in): Awaitable<\Errors\Result<ListQualificationRequestsResponse>>;
  public function ListQualificationTypes(ListQualificationTypesRequest $in): Awaitable<\Errors\Result<ListQualificationTypesResponse>>;
  public function ListReviewPolicyResultsForHIT(ListReviewPolicyResultsForHITRequest $in): Awaitable<\Errors\Result<ListReviewPolicyResultsForHITResponse>>;
  public function ListReviewableHITs(ListReviewableHITsRequest $in): Awaitable<\Errors\Result<ListReviewableHITsResponse>>;
  public function ListWorkerBlocks(ListWorkerBlocksRequest $in): Awaitable<\Errors\Result<ListWorkerBlocksResponse>>;
  public function ListWorkersWithQualificationType(ListWorkersWithQualificationTypeRequest $in): Awaitable<\Errors\Result<ListWorkersWithQualificationTypeResponse>>;
  public function NotifyWorkers(NotifyWorkersRequest $in): Awaitable<\Errors\Result<NotifyWorkersResponse>>;
  public function RejectAssignment(RejectAssignmentRequest $in): Awaitable<\Errors\Result<RejectAssignmentResponse>>;
  public function RejectQualificationRequest(RejectQualificationRequestRequest $in): Awaitable<\Errors\Result<RejectQualificationRequestResponse>>;
  public function SendBonus(SendBonusRequest $in): Awaitable<\Errors\Result<SendBonusResponse>>;
  public function SendTestEventNotification(SendTestEventNotificationRequest $in): Awaitable<\Errors\Result<SendTestEventNotificationResponse>>;
  public function UpdateExpirationForHIT(UpdateExpirationForHITRequest $in): Awaitable<\Errors\Result<UpdateExpirationForHITResponse>>;
  public function UpdateHITReviewStatus(UpdateHITReviewStatusRequest $in): Awaitable<\Errors\Result<UpdateHITReviewStatusResponse>>;
  public function UpdateHITTypeOfHIT(UpdateHITTypeOfHITRequest $in): Awaitable<\Errors\Result<UpdateHITTypeOfHITResponse>>;
  public function UpdateNotificationSettings(UpdateNotificationSettingsRequest $in): Awaitable<\Errors\Result<UpdateNotificationSettingsResponse>>;
  public function UpdateQualificationType(UpdateQualificationTypeRequest $in): Awaitable<\Errors\Result<UpdateQualificationTypeResponse>>;
}

class AcceptQualificationRequestRequest {
  public int $integer_value;
  public string $qualification_request_id;

  public function __construct(shape(
    ?'integer_value' => int,
    ?'qualification_request_id' => string,
  ) $s = shape()) {
    $this->integer_value = $s['integer_value'] ?? 0;
    $this->qualification_request_id = $s['qualification_request_id'] ?? '';
  }
}

class AcceptQualificationRequestResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApproveAssignmentRequest {
  public ?EntityId $assignment_id;
  public bool $override_rejection;
  public string $requester_feedback;

  public function __construct(shape(
    ?'assignment_id' => ?EntityId,
    ?'override_rejection' => bool,
    ?'requester_feedback' => string,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->override_rejection = $s['override_rejection'] ?? false;
    $this->requester_feedback = $s['requester_feedback'] ?? '';
  }
}

class ApproveAssignmentResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Assignment {
  public ?Timestamp $accept_time;
  public string $answer;
  public ?Timestamp $approval_time;
  public ?EntityId $assignment_id;
  public ?AssignmentStatus $assignment_status;
  public ?Timestamp $auto_approval_time;
  public ?Timestamp $deadline;
  public ?EntityId $hit_id;
  public ?Timestamp $rejection_time;
  public string $requester_feedback;
  public ?Timestamp $submit_time;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'accept_time' => ?Timestamp,
    ?'answer' => string,
    ?'approval_time' => ?Timestamp,
    ?'assignment_id' => ?EntityId,
    ?'assignment_status' => ?AssignmentStatus,
    ?'auto_approval_time' => ?Timestamp,
    ?'deadline' => ?Timestamp,
    ?'hit_id' => ?EntityId,
    ?'rejection_time' => ?Timestamp,
    ?'requester_feedback' => string,
    ?'submit_time' => ?Timestamp,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->accept_time = $s['accept_time'] ?? 0;
    $this->answer = $s['answer'] ?? '';
    $this->approval_time = $s['approval_time'] ?? 0;
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->assignment_status = $s['assignment_status'] ?? '';
    $this->auto_approval_time = $s['auto_approval_time'] ?? 0;
    $this->deadline = $s['deadline'] ?? 0;
    $this->hit_id = $s['hit_id'] ?? '';
    $this->rejection_time = $s['rejection_time'] ?? 0;
    $this->requester_feedback = $s['requester_feedback'] ?? '';
    $this->submit_time = $s['submit_time'] ?? 0;
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

type AssignmentList = vec<Assignment>;

type AssignmentStatus = string;

type AssignmentStatusList = vec<AssignmentStatus>;

class AssociateQualificationWithWorkerRequest {
  public int $integer_value;
  public ?EntityId $qualification_type_id;
  public bool $send_notification;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'integer_value' => int,
    ?'qualification_type_id' => ?EntityId,
    ?'send_notification' => bool,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->integer_value = $s['integer_value'] ?? 0;
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->send_notification = $s['send_notification'] ?? false;
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

class AssociateQualificationWithWorkerResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BonusPayment {
  public ?EntityId $assignment_id;
  public ?CurrencyAmount $bonus_amount;
  public ?Timestamp $grant_time;
  public string $reason;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'assignment_id' => ?EntityId,
    ?'bonus_amount' => ?CurrencyAmount,
    ?'grant_time' => ?Timestamp,
    ?'reason' => string,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->bonus_amount = $s['bonus_amount'] ?? '';
    $this->grant_time = $s['grant_time'] ?? 0;
    $this->reason = $s['reason'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

type BonusPaymentList = vec<BonusPayment>;

type Boolean = bool;

type Comparator = string;

type CountryParameters = string;

class CreateAdditionalAssignmentsForHITRequest {
  public ?EntityId $hit_id;
  public int $number_of_additional_assignments;
  public ?IdempotencyToken $unique_request_token;

  public function __construct(shape(
    ?'hit_id' => ?EntityId,
    ?'number_of_additional_assignments' => int,
    ?'unique_request_token' => ?IdempotencyToken,
  ) $s = shape()) {
    $this->hit_id = $s['hit_id'] ?? '';
    $this->number_of_additional_assignments = $s['number_of_additional_assignments'] ?? 0;
    $this->unique_request_token = $s['unique_request_token'] ?? '';
  }
}

class CreateAdditionalAssignmentsForHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateHITRequest {
  public ?Long $assignment_duration_in_seconds;
  public ?ReviewPolicy $assignment_review_policy;
  public ?Long $auto_approval_delay_in_seconds;
  public string $description;
  public ?EntityId $hit_layout_id;
  public ?HITLayoutParameterList $hit_layout_parameters;
  public ?ReviewPolicy $hit_review_policy;
  public string $keywords;
  public ?Long $lifetime_in_seconds;
  public int $max_assignments;
  public ?QualificationRequirementList $qualification_requirements;
  public string $question;
  public string $requester_annotation;
  public ?CurrencyAmount $reward;
  public string $title;
  public ?IdempotencyToken $unique_request_token;

  public function __construct(shape(
    ?'assignment_duration_in_seconds' => ?Long,
    ?'assignment_review_policy' => ?ReviewPolicy,
    ?'auto_approval_delay_in_seconds' => ?Long,
    ?'description' => string,
    ?'hit_layout_id' => ?EntityId,
    ?'hit_layout_parameters' => ?HITLayoutParameterList,
    ?'hit_review_policy' => ?ReviewPolicy,
    ?'keywords' => string,
    ?'lifetime_in_seconds' => ?Long,
    ?'max_assignments' => int,
    ?'qualification_requirements' => ?QualificationRequirementList,
    ?'question' => string,
    ?'requester_annotation' => string,
    ?'reward' => ?CurrencyAmount,
    ?'title' => string,
    ?'unique_request_token' => ?IdempotencyToken,
  ) $s = shape()) {
    $this->assignment_duration_in_seconds = $s['assignment_duration_in_seconds'] ?? 0;
    $this->assignment_review_policy = $s['assignment_review_policy'] ?? null;
    $this->auto_approval_delay_in_seconds = $s['auto_approval_delay_in_seconds'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->hit_layout_id = $s['hit_layout_id'] ?? '';
    $this->hit_layout_parameters = $s['hit_layout_parameters'] ?? vec[];
    $this->hit_review_policy = $s['hit_review_policy'] ?? null;
    $this->keywords = $s['keywords'] ?? '';
    $this->lifetime_in_seconds = $s['lifetime_in_seconds'] ?? 0;
    $this->max_assignments = $s['max_assignments'] ?? 0;
    $this->qualification_requirements = $s['qualification_requirements'] ?? vec[];
    $this->question = $s['question'] ?? '';
    $this->requester_annotation = $s['requester_annotation'] ?? '';
    $this->reward = $s['reward'] ?? '';
    $this->title = $s['title'] ?? '';
    $this->unique_request_token = $s['unique_request_token'] ?? '';
  }
}

class CreateHITResponse {
  public ?HIT $hit;

  public function __construct(shape(
    ?'hit' => ?HIT,
  ) $s = shape()) {
    $this->hit = $s['hit'] ?? null;
  }
}

class CreateHITTypeRequest {
  public ?Long $assignment_duration_in_seconds;
  public ?Long $auto_approval_delay_in_seconds;
  public string $description;
  public string $keywords;
  public ?QualificationRequirementList $qualification_requirements;
  public ?CurrencyAmount $reward;
  public string $title;

  public function __construct(shape(
    ?'assignment_duration_in_seconds' => ?Long,
    ?'auto_approval_delay_in_seconds' => ?Long,
    ?'description' => string,
    ?'keywords' => string,
    ?'qualification_requirements' => ?QualificationRequirementList,
    ?'reward' => ?CurrencyAmount,
    ?'title' => string,
  ) $s = shape()) {
    $this->assignment_duration_in_seconds = $s['assignment_duration_in_seconds'] ?? 0;
    $this->auto_approval_delay_in_seconds = $s['auto_approval_delay_in_seconds'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->keywords = $s['keywords'] ?? '';
    $this->qualification_requirements = $s['qualification_requirements'] ?? vec[];
    $this->reward = $s['reward'] ?? '';
    $this->title = $s['title'] ?? '';
  }
}

class CreateHITTypeResponse {
  public ?EntityId $hit_type_id;

  public function __construct(shape(
    ?'hit_type_id' => ?EntityId,
  ) $s = shape()) {
    $this->hit_type_id = $s['hit_type_id'] ?? '';
  }
}

class CreateHITWithHITTypeRequest {
  public ?ReviewPolicy $assignment_review_policy;
  public ?EntityId $hit_layout_id;
  public ?HITLayoutParameterList $hit_layout_parameters;
  public ?ReviewPolicy $hit_review_policy;
  public ?EntityId $hit_type_id;
  public ?Long $lifetime_in_seconds;
  public int $max_assignments;
  public string $question;
  public string $requester_annotation;
  public ?IdempotencyToken $unique_request_token;

  public function __construct(shape(
    ?'assignment_review_policy' => ?ReviewPolicy,
    ?'hit_layout_id' => ?EntityId,
    ?'hit_layout_parameters' => ?HITLayoutParameterList,
    ?'hit_review_policy' => ?ReviewPolicy,
    ?'hit_type_id' => ?EntityId,
    ?'lifetime_in_seconds' => ?Long,
    ?'max_assignments' => int,
    ?'question' => string,
    ?'requester_annotation' => string,
    ?'unique_request_token' => ?IdempotencyToken,
  ) $s = shape()) {
    $this->assignment_review_policy = $s['assignment_review_policy'] ?? null;
    $this->hit_layout_id = $s['hit_layout_id'] ?? '';
    $this->hit_layout_parameters = $s['hit_layout_parameters'] ?? vec[];
    $this->hit_review_policy = $s['hit_review_policy'] ?? null;
    $this->hit_type_id = $s['hit_type_id'] ?? '';
    $this->lifetime_in_seconds = $s['lifetime_in_seconds'] ?? 0;
    $this->max_assignments = $s['max_assignments'] ?? 0;
    $this->question = $s['question'] ?? '';
    $this->requester_annotation = $s['requester_annotation'] ?? '';
    $this->unique_request_token = $s['unique_request_token'] ?? '';
  }
}

class CreateHITWithHITTypeResponse {
  public ?HIT $hit;

  public function __construct(shape(
    ?'hit' => ?HIT,
  ) $s = shape()) {
    $this->hit = $s['hit'] ?? null;
  }
}

class CreateQualificationTypeRequest {
  public string $answer_key;
  public bool $auto_granted;
  public int $auto_granted_value;
  public string $description;
  public string $keywords;
  public string $name;
  public ?QualificationTypeStatus $qualification_type_status;
  public ?Long $retry_delay_in_seconds;
  public string $test;
  public ?Long $test_duration_in_seconds;

  public function __construct(shape(
    ?'answer_key' => string,
    ?'auto_granted' => bool,
    ?'auto_granted_value' => int,
    ?'description' => string,
    ?'keywords' => string,
    ?'name' => string,
    ?'qualification_type_status' => ?QualificationTypeStatus,
    ?'retry_delay_in_seconds' => ?Long,
    ?'test' => string,
    ?'test_duration_in_seconds' => ?Long,
  ) $s = shape()) {
    $this->answer_key = $s['answer_key'] ?? '';
    $this->auto_granted = $s['auto_granted'] ?? false;
    $this->auto_granted_value = $s['auto_granted_value'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->keywords = $s['keywords'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->qualification_type_status = $s['qualification_type_status'] ?? '';
    $this->retry_delay_in_seconds = $s['retry_delay_in_seconds'] ?? 0;
    $this->test = $s['test'] ?? '';
    $this->test_duration_in_seconds = $s['test_duration_in_seconds'] ?? 0;
  }
}

class CreateQualificationTypeResponse {
  public ?QualificationType $qualification_type;

  public function __construct(shape(
    ?'qualification_type' => ?QualificationType,
  ) $s = shape()) {
    $this->qualification_type = $s['qualification_type'] ?? null;
  }
}

class CreateWorkerBlockRequest {
  public string $reason;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'reason' => string,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->reason = $s['reason'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
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
  public ?EntityId $hit_id;

  public function __construct(shape(
    ?'hit_id' => ?EntityId,
  ) $s = shape()) {
    $this->hit_id = $s['hit_id'] ?? '';
  }
}

class DeleteHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteQualificationTypeRequest {
  public ?EntityId $qualification_type_id;

  public function __construct(shape(
    ?'qualification_type_id' => ?EntityId,
  ) $s = shape()) {
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
  }
}

class DeleteQualificationTypeResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteWorkerBlockRequest {
  public string $reason;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'reason' => string,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->reason = $s['reason'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

class DeleteWorkerBlockResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateQualificationFromWorkerRequest {
  public ?EntityId $qualification_type_id;
  public string $reason;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'qualification_type_id' => ?EntityId,
    ?'reason' => string,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
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
  public ?CurrencyAmount $available_balance;
  public ?CurrencyAmount $on_hold_balance;

  public function __construct(shape(
    ?'available_balance' => ?CurrencyAmount,
    ?'on_hold_balance' => ?CurrencyAmount,
  ) $s = shape()) {
    $this->available_balance = $s['available_balance'] ?? '';
    $this->on_hold_balance = $s['on_hold_balance'] ?? '';
  }
}

class GetAssignmentRequest {
  public ?EntityId $assignment_id;

  public function __construct(shape(
    ?'assignment_id' => ?EntityId,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
  }
}

class GetAssignmentResponse {
  public ?Assignment $assignment;
  public ?HIT $hit;

  public function __construct(shape(
    ?'assignment' => ?Assignment,
    ?'hit' => ?HIT,
  ) $s = shape()) {
    $this->assignment = $s['assignment'] ?? null;
    $this->hit = $s['hit'] ?? null;
  }
}

class GetFileUploadURLRequest {
  public ?EntityId $assignment_id;
  public string $question_identifier;

  public function __construct(shape(
    ?'assignment_id' => ?EntityId,
    ?'question_identifier' => string,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->question_identifier = $s['question_identifier'] ?? '';
  }
}

class GetFileUploadURLResponse {
  public string $file_upload_url;

  public function __construct(shape(
    ?'file_upload_url' => string,
  ) $s = shape()) {
    $this->file_upload_url = $s['file_upload_url'] ?? '';
  }
}

class GetHITRequest {
  public ?EntityId $hit_id;

  public function __construct(shape(
    ?'hit_id' => ?EntityId,
  ) $s = shape()) {
    $this->hit_id = $s['hit_id'] ?? '';
  }
}

class GetHITResponse {
  public ?HIT $hit;

  public function __construct(shape(
    ?'hit' => ?HIT,
  ) $s = shape()) {
    $this->hit = $s['hit'] ?? null;
  }
}

class GetQualificationScoreRequest {
  public ?EntityId $qualification_type_id;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'qualification_type_id' => ?EntityId,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

class GetQualificationScoreResponse {
  public ?Qualification $qualification;

  public function __construct(shape(
    ?'qualification' => ?Qualification,
  ) $s = shape()) {
    $this->qualification = $s['qualification'] ?? null;
  }
}

class GetQualificationTypeRequest {
  public ?EntityId $qualification_type_id;

  public function __construct(shape(
    ?'qualification_type_id' => ?EntityId,
  ) $s = shape()) {
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
  }
}

class GetQualificationTypeResponse {
  public ?QualificationType $qualification_type;

  public function __construct(shape(
    ?'qualification_type' => ?QualificationType,
  ) $s = shape()) {
    $this->qualification_type = $s['qualification_type'] ?? null;
  }
}

class HIT {
  public ?Long $assignment_duration_in_seconds;
  public ?Long $auto_approval_delay_in_seconds;
  public ?Timestamp $creation_time;
  public string $description;
  public ?Timestamp $expiration;
  public ?EntityId $hit_group_id;
  public ?EntityId $hit_id;
  public ?EntityId $hit_layout_id;
  public ?HITReviewStatus $hit_review_status;
  public ?HITStatus $hit_status;
  public ?EntityId $hit_type_id;
  public string $keywords;
  public int $max_assignments;
  public int $number_of_assignments_available;
  public int $number_of_assignments_completed;
  public int $number_of_assignments_pending;
  public ?QualificationRequirementList $qualification_requirements;
  public string $question;
  public string $requester_annotation;
  public ?CurrencyAmount $reward;
  public string $title;

  public function __construct(shape(
    ?'assignment_duration_in_seconds' => ?Long,
    ?'auto_approval_delay_in_seconds' => ?Long,
    ?'creation_time' => ?Timestamp,
    ?'description' => string,
    ?'expiration' => ?Timestamp,
    ?'hit_group_id' => ?EntityId,
    ?'hit_id' => ?EntityId,
    ?'hit_layout_id' => ?EntityId,
    ?'hit_review_status' => ?HITReviewStatus,
    ?'hit_status' => ?HITStatus,
    ?'hit_type_id' => ?EntityId,
    ?'keywords' => string,
    ?'max_assignments' => int,
    ?'number_of_assignments_available' => int,
    ?'number_of_assignments_completed' => int,
    ?'number_of_assignments_pending' => int,
    ?'qualification_requirements' => ?QualificationRequirementList,
    ?'question' => string,
    ?'requester_annotation' => string,
    ?'reward' => ?CurrencyAmount,
    ?'title' => string,
  ) $s = shape()) {
    $this->assignment_duration_in_seconds = $s['assignment_duration_in_seconds'] ?? 0;
    $this->auto_approval_delay_in_seconds = $s['auto_approval_delay_in_seconds'] ?? 0;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->expiration = $s['expiration'] ?? 0;
    $this->hit_group_id = $s['hit_group_id'] ?? '';
    $this->hit_id = $s['hit_id'] ?? '';
    $this->hit_layout_id = $s['hit_layout_id'] ?? '';
    $this->hit_review_status = $s['hit_review_status'] ?? '';
    $this->hit_status = $s['hit_status'] ?? '';
    $this->hit_type_id = $s['hit_type_id'] ?? '';
    $this->keywords = $s['keywords'] ?? '';
    $this->max_assignments = $s['max_assignments'] ?? 0;
    $this->number_of_assignments_available = $s['number_of_assignments_available'] ?? 0;
    $this->number_of_assignments_completed = $s['number_of_assignments_completed'] ?? 0;
    $this->number_of_assignments_pending = $s['number_of_assignments_pending'] ?? 0;
    $this->qualification_requirements = $s['qualification_requirements'] ?? vec[];
    $this->question = $s['question'] ?? '';
    $this->requester_annotation = $s['requester_annotation'] ?? '';
    $this->reward = $s['reward'] ?? '';
    $this->title = $s['title'] ?? '';
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
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
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
  public ?AssignmentStatusList $assignment_statuses;
  public ?EntityId $hit_id;
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assignment_statuses' => ?AssignmentStatusList,
    ?'hit_id' => ?EntityId,
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assignment_statuses = $s['assignment_statuses'] ?? vec[];
    $this->hit_id = $s['hit_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAssignmentsForHITResponse {
  public ?AssignmentList $assignments;
  public ?PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
    ?'assignments' => ?AssignmentList,
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
  ) $s = shape()) {
    $this->assignments = $s['assignments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
  }
}

class ListBonusPaymentsRequest {
  public ?EntityId $assignment_id;
  public ?EntityId $hit_id;
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assignment_id' => ?EntityId,
    ?'hit_id' => ?EntityId,
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->hit_id = $s['hit_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListBonusPaymentsResponse {
  public ?BonusPaymentList $bonus_payments;
  public ?PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
    ?'bonus_payments' => ?BonusPaymentList,
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
  ) $s = shape()) {
    $this->bonus_payments = $s['bonus_payments'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
  }
}

class ListHITsForQualificationTypeRequest {
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;
  public ?EntityId $qualification_type_id;

  public function __construct(shape(
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
    ?'qualification_type_id' => ?EntityId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
  }
}

class ListHITsForQualificationTypeResponse {
  public ?HITList $hi_ts;
  public ?PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
    ?'hi_ts' => ?HITList,
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
  ) $s = shape()) {
    $this->hi_ts = $s['hi_ts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
  }
}

class ListHITsRequest {
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListHITsResponse {
  public ?HITList $hi_ts;
  public ?PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
    ?'hi_ts' => ?HITList,
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
  ) $s = shape()) {
    $this->hi_ts = $s['hi_ts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
  }
}

class ListQualificationRequestsRequest {
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;
  public ?EntityId $qualification_type_id;

  public function __construct(shape(
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
    ?'qualification_type_id' => ?EntityId,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
  }
}

class ListQualificationRequestsResponse {
  public ?PaginationToken $next_token;
  public int $num_results;
  public ?QualificationRequestList $qualification_requests;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
    ?'qualification_requests' => ?QualificationRequestList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
    $this->qualification_requests = $s['qualification_requests'] ?? vec[];
  }
}

class ListQualificationTypesRequest {
  public ?ResultSize $max_results;
  public bool $must_be_owned_by_caller;
  public bool $must_be_requestable;
  public ?PaginationToken $next_token;
  public string $query;

  public function __construct(shape(
    ?'max_results' => ?ResultSize,
    ?'must_be_owned_by_caller' => bool,
    ?'must_be_requestable' => bool,
    ?'next_token' => ?PaginationToken,
    ?'query' => string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->must_be_owned_by_caller = $s['must_be_owned_by_caller'] ?? false;
    $this->must_be_requestable = $s['must_be_requestable'] ?? false;
    $this->next_token = $s['next_token'] ?? '';
    $this->query = $s['query'] ?? '';
  }
}

class ListQualificationTypesResponse {
  public ?PaginationToken $next_token;
  public int $num_results;
  public ?QualificationTypeList $qualification_types;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
    ?'qualification_types' => ?QualificationTypeList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
    $this->qualification_types = $s['qualification_types'] ?? vec[];
  }
}

class ListReviewPolicyResultsForHITRequest {
  public ?EntityId $hit_id;
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;
  public ?ReviewPolicyLevelList $policy_levels;
  public bool $retrieve_actions;
  public bool $retrieve_results;

  public function __construct(shape(
    ?'hit_id' => ?EntityId,
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
    ?'policy_levels' => ?ReviewPolicyLevelList,
    ?'retrieve_actions' => bool,
    ?'retrieve_results' => bool,
  ) $s = shape()) {
    $this->hit_id = $s['hit_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->policy_levels = $s['policy_levels'] ?? vec[];
    $this->retrieve_actions = $s['retrieve_actions'] ?? false;
    $this->retrieve_results = $s['retrieve_results'] ?? false;
  }
}

class ListReviewPolicyResultsForHITResponse {
  public ?ReviewPolicy $assignment_review_policy;
  public ?ReviewReport $assignment_review_report;
  public ?EntityId $hit_id;
  public ?ReviewPolicy $hit_review_policy;
  public ?ReviewReport $hit_review_report;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'assignment_review_policy' => ?ReviewPolicy,
    ?'assignment_review_report' => ?ReviewReport,
    ?'hit_id' => ?EntityId,
    ?'hit_review_policy' => ?ReviewPolicy,
    ?'hit_review_report' => ?ReviewReport,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->assignment_review_policy = $s['assignment_review_policy'] ?? null;
    $this->assignment_review_report = $s['assignment_review_report'] ?? null;
    $this->hit_id = $s['hit_id'] ?? '';
    $this->hit_review_policy = $s['hit_review_policy'] ?? null;
    $this->hit_review_report = $s['hit_review_report'] ?? null;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListReviewableHITsRequest {
  public ?EntityId $hit_type_id;
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;
  public ?ReviewableHITStatus $status;

  public function __construct(shape(
    ?'hit_type_id' => ?EntityId,
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
    ?'status' => ?ReviewableHITStatus,
  ) $s = shape()) {
    $this->hit_type_id = $s['hit_type_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListReviewableHITsResponse {
  public ?HITList $hi_ts;
  public ?PaginationToken $next_token;
  public int $num_results;

  public function __construct(shape(
    ?'hi_ts' => ?HITList,
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
  ) $s = shape()) {
    $this->hi_ts = $s['hi_ts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
  }
}

class ListWorkerBlocksRequest {
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListWorkerBlocksResponse {
  public ?PaginationToken $next_token;
  public int $num_results;
  public ?WorkerBlockList $worker_blocks;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
    ?'worker_blocks' => ?WorkerBlockList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
    $this->worker_blocks = $s['worker_blocks'] ?? vec[];
  }
}

class ListWorkersWithQualificationTypeRequest {
  public ?ResultSize $max_results;
  public ?PaginationToken $next_token;
  public ?EntityId $qualification_type_id;
  public ?QualificationStatus $status;

  public function __construct(shape(
    ?'max_results' => ?ResultSize,
    ?'next_token' => ?PaginationToken,
    ?'qualification_type_id' => ?EntityId,
    ?'status' => ?QualificationStatus,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class ListWorkersWithQualificationTypeResponse {
  public ?PaginationToken $next_token;
  public int $num_results;
  public ?QualificationList $qualifications;

  public function __construct(shape(
    ?'next_token' => ?PaginationToken,
    ?'num_results' => int,
    ?'qualifications' => ?QualificationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->num_results = $s['num_results'] ?? 0;
    $this->qualifications = $s['qualifications'] ?? vec[];
  }
}

class Locale {
  public ?CountryParameters $country;
  public ?CountryParameters $subdivision;

  public function __construct(shape(
    ?'country' => ?CountryParameters,
    ?'subdivision' => ?CountryParameters,
  ) $s = shape()) {
    $this->country = $s['country'] ?? '';
    $this->subdivision = $s['subdivision'] ?? '';
  }
}

type LocaleList = vec<Locale>;

type Long = int;

class NotificationSpecification {
  public string $destination;
  public ?EventTypeList $event_types;
  public ?NotificationTransport $transport;
  public string $version;

  public function __construct(shape(
    ?'destination' => string,
    ?'event_types' => ?EventTypeList,
    ?'transport' => ?NotificationTransport,
    ?'version' => string,
  ) $s = shape()) {
    $this->destination = $s['destination'] ?? '';
    $this->event_types = $s['event_types'] ?? vec[];
    $this->transport = $s['transport'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type NotificationTransport = string;

type NotifyWorkersFailureCode = string;

class NotifyWorkersFailureStatus {
  public ?NotifyWorkersFailureCode $notify_workers_failure_code;
  public string $notify_workers_failure_message;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'notify_workers_failure_code' => ?NotifyWorkersFailureCode,
    ?'notify_workers_failure_message' => string,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->notify_workers_failure_code = $s['notify_workers_failure_code'] ?? '';
    $this->notify_workers_failure_message = $s['notify_workers_failure_message'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

type NotifyWorkersFailureStatusList = vec<NotifyWorkersFailureStatus>;

class NotifyWorkersRequest {
  public string $message_text;
  public string $subject;
  public ?CustomerIdList $worker_ids;

  public function __construct(shape(
    ?'message_text' => string,
    ?'subject' => string,
    ?'worker_ids' => ?CustomerIdList,
  ) $s = shape()) {
    $this->message_text = $s['message_text'] ?? '';
    $this->subject = $s['subject'] ?? '';
    $this->worker_ids = $s['worker_ids'] ?? vec[];
  }
}

class NotifyWorkersResponse {
  public ?NotifyWorkersFailureStatusList $notify_workers_failure_statuses;

  public function __construct(shape(
    ?'notify_workers_failure_statuses' => ?NotifyWorkersFailureStatusList,
  ) $s = shape()) {
    $this->notify_workers_failure_statuses = $s['notify_workers_failure_statuses'] ?? vec[];
  }
}

type PaginationToken = string;

class ParameterMapEntry {
  public string $key;
  public ?StringList $values;

  public function __construct(shape(
    ?'key' => string,
    ?'values' => ?StringList,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type ParameterMapEntryList = vec<ParameterMapEntry>;

class PolicyParameter {
  public string $key;
  public ?ParameterMapEntryList $map_entries;
  public ?StringList $values;

  public function __construct(shape(
    ?'key' => string,
    ?'map_entries' => ?ParameterMapEntryList,
    ?'values' => ?StringList,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->map_entries = $s['map_entries'] ?? vec[];
    $this->values = $s['values'] ?? vec[];
  }
}

type PolicyParameterList = vec<PolicyParameter>;

class Qualification {
  public ?Timestamp $grant_time;
  public int $integer_value;
  public ?Locale $locale_value;
  public ?EntityId $qualification_type_id;
  public ?QualificationStatus $status;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'grant_time' => ?Timestamp,
    ?'integer_value' => int,
    ?'locale_value' => ?Locale,
    ?'qualification_type_id' => ?EntityId,
    ?'status' => ?QualificationStatus,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->grant_time = $s['grant_time'] ?? 0;
    $this->integer_value = $s['integer_value'] ?? 0;
    $this->locale_value = $s['locale_value'] ?? null;
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

type QualificationList = vec<Qualification>;

class QualificationRequest {
  public string $answer;
  public string $qualification_request_id;
  public ?EntityId $qualification_type_id;
  public ?Timestamp $submit_time;
  public string $test;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'answer' => string,
    ?'qualification_request_id' => string,
    ?'qualification_type_id' => ?EntityId,
    ?'submit_time' => ?Timestamp,
    ?'test' => string,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->answer = $s['answer'] ?? '';
    $this->qualification_request_id = $s['qualification_request_id'] ?? '';
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->submit_time = $s['submit_time'] ?? 0;
    $this->test = $s['test'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

type QualificationRequestList = vec<QualificationRequest>;

class QualificationRequirement {
  public ?HITAccessActions $actions_guarded;
  public ?Comparator $comparator;
  public ?IntegerList $integer_values;
  public ?LocaleList $locale_values;
  public string $qualification_type_id;
  public bool $required_to_preview;

  public function __construct(shape(
    ?'actions_guarded' => ?HITAccessActions,
    ?'comparator' => ?Comparator,
    ?'integer_values' => ?IntegerList,
    ?'locale_values' => ?LocaleList,
    ?'qualification_type_id' => string,
    ?'required_to_preview' => bool,
  ) $s = shape()) {
    $this->actions_guarded = $s['actions_guarded'] ?? '';
    $this->comparator = $s['comparator'] ?? '';
    $this->integer_values = $s['integer_values'] ?? vec[];
    $this->locale_values = $s['locale_values'] ?? vec[];
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->required_to_preview = $s['required_to_preview'] ?? false;
  }
}

type QualificationRequirementList = vec<QualificationRequirement>;

type QualificationStatus = string;

class QualificationType {
  public string $answer_key;
  public bool $auto_granted;
  public int $auto_granted_value;
  public ?Timestamp $creation_time;
  public string $description;
  public bool $is_requestable;
  public string $keywords;
  public string $name;
  public ?EntityId $qualification_type_id;
  public ?QualificationTypeStatus $qualification_type_status;
  public ?Long $retry_delay_in_seconds;
  public string $test;
  public ?Long $test_duration_in_seconds;

  public function __construct(shape(
    ?'answer_key' => string,
    ?'auto_granted' => bool,
    ?'auto_granted_value' => int,
    ?'creation_time' => ?Timestamp,
    ?'description' => string,
    ?'is_requestable' => bool,
    ?'keywords' => string,
    ?'name' => string,
    ?'qualification_type_id' => ?EntityId,
    ?'qualification_type_status' => ?QualificationTypeStatus,
    ?'retry_delay_in_seconds' => ?Long,
    ?'test' => string,
    ?'test_duration_in_seconds' => ?Long,
  ) $s = shape()) {
    $this->answer_key = $s['answer_key'] ?? '';
    $this->auto_granted = $s['auto_granted'] ?? false;
    $this->auto_granted_value = $s['auto_granted_value'] ?? 0;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->is_requestable = $s['is_requestable'] ?? false;
    $this->keywords = $s['keywords'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->qualification_type_status = $s['qualification_type_status'] ?? '';
    $this->retry_delay_in_seconds = $s['retry_delay_in_seconds'] ?? 0;
    $this->test = $s['test'] ?? '';
    $this->test_duration_in_seconds = $s['test_duration_in_seconds'] ?? 0;
  }
}

type QualificationTypeList = vec<QualificationType>;

type QualificationTypeStatus = string;

class RejectAssignmentRequest {
  public ?EntityId $assignment_id;
  public string $requester_feedback;

  public function __construct(shape(
    ?'assignment_id' => ?EntityId,
    ?'requester_feedback' => string,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->requester_feedback = $s['requester_feedback'] ?? '';
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
    $this->qualification_request_id = $s['qualification_request_id'] ?? '';
    $this->reason = $s['reason'] ?? '';
  }
}

class RejectQualificationRequestResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RequestError {
  public ?ExceptionMessage $message;
  public ?TurkErrorCode $turk_error_code;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'turk_error_code' => ?TurkErrorCode,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->turk_error_code = $s['turk_error_code'] ?? '';
  }
}

type ResultSize = int;

class ReviewActionDetail {
  public ?EntityId $action_id;
  public string $action_name;
  public ?Timestamp $complete_time;
  public string $error_code;
  public string $result;
  public ?ReviewActionStatus $status;
  public ?EntityId $target_id;
  public string $target_type;

  public function __construct(shape(
    ?'action_id' => ?EntityId,
    ?'action_name' => string,
    ?'complete_time' => ?Timestamp,
    ?'error_code' => string,
    ?'result' => string,
    ?'status' => ?ReviewActionStatus,
    ?'target_id' => ?EntityId,
    ?'target_type' => string,
  ) $s = shape()) {
    $this->action_id = $s['action_id'] ?? '';
    $this->action_name = $s['action_name'] ?? '';
    $this->complete_time = $s['complete_time'] ?? 0;
    $this->error_code = $s['error_code'] ?? '';
    $this->result = $s['result'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->target_id = $s['target_id'] ?? '';
    $this->target_type = $s['target_type'] ?? '';
  }
}

type ReviewActionDetailList = vec<ReviewActionDetail>;

type ReviewActionStatus = string;

class ReviewPolicy {
  public ?PolicyParameterList $parameters;
  public string $policy_name;

  public function __construct(shape(
    ?'parameters' => ?PolicyParameterList,
    ?'policy_name' => string,
  ) $s = shape()) {
    $this->parameters = $s['parameters'] ?? vec[];
    $this->policy_name = $s['policy_name'] ?? '';
  }
}

type ReviewPolicyLevel = string;

type ReviewPolicyLevelList = vec<ReviewPolicyLevel>;

class ReviewReport {
  public ?ReviewActionDetailList $review_actions;
  public ?ReviewResultDetailList $review_results;

  public function __construct(shape(
    ?'review_actions' => ?ReviewActionDetailList,
    ?'review_results' => ?ReviewResultDetailList,
  ) $s = shape()) {
    $this->review_actions = $s['review_actions'] ?? vec[];
    $this->review_results = $s['review_results'] ?? vec[];
  }
}

class ReviewResultDetail {
  public ?EntityId $action_id;
  public string $key;
  public ?EntityId $question_id;
  public ?EntityId $subject_id;
  public string $subject_type;
  public string $value;

  public function __construct(shape(
    ?'action_id' => ?EntityId,
    ?'key' => string,
    ?'question_id' => ?EntityId,
    ?'subject_id' => ?EntityId,
    ?'subject_type' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->action_id = $s['action_id'] ?? '';
    $this->key = $s['key'] ?? '';
    $this->question_id = $s['question_id'] ?? '';
    $this->subject_id = $s['subject_id'] ?? '';
    $this->subject_type = $s['subject_type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ReviewResultDetailList = vec<ReviewResultDetail>;

type ReviewableHITStatus = string;

class SendBonusRequest {
  public ?EntityId $assignment_id;
  public ?CurrencyAmount $bonus_amount;
  public string $reason;
  public ?IdempotencyToken $unique_request_token;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'assignment_id' => ?EntityId,
    ?'bonus_amount' => ?CurrencyAmount,
    ?'reason' => string,
    ?'unique_request_token' => ?IdempotencyToken,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->assignment_id = $s['assignment_id'] ?? '';
    $this->bonus_amount = $s['bonus_amount'] ?? '';
    $this->reason = $s['reason'] ?? '';
    $this->unique_request_token = $s['unique_request_token'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

class SendBonusResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SendTestEventNotificationRequest {
  public ?NotificationSpecification $notification;
  public ?EventType $test_event_type;

  public function __construct(shape(
    ?'notification' => ?NotificationSpecification,
    ?'test_event_type' => ?EventType,
  ) $s = shape()) {
    $this->notification = $s['notification'] ?? null;
    $this->test_event_type = $s['test_event_type'] ?? '';
  }
}

class SendTestEventNotificationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ServiceFault {
  public ?ExceptionMessage $message;
  public ?TurkErrorCode $turk_error_code;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
    ?'turk_error_code' => ?TurkErrorCode,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->turk_error_code = $s['turk_error_code'] ?? '';
  }
}

type String = string;

type StringList = vec<String>;

type Timestamp = int;

type TurkErrorCode = string;

class UpdateExpirationForHITRequest {
  public ?Timestamp $expire_at;
  public ?EntityId $hit_id;

  public function __construct(shape(
    ?'expire_at' => ?Timestamp,
    ?'hit_id' => ?EntityId,
  ) $s = shape()) {
    $this->expire_at = $s['expire_at'] ?? 0;
    $this->hit_id = $s['hit_id'] ?? '';
  }
}

class UpdateExpirationForHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateHITReviewStatusRequest {
  public ?EntityId $hit_id;
  public bool $revert;

  public function __construct(shape(
    ?'hit_id' => ?EntityId,
    ?'revert' => bool,
  ) $s = shape()) {
    $this->hit_id = $s['hit_id'] ?? '';
    $this->revert = $s['revert'] ?? false;
  }
}

class UpdateHITReviewStatusResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateHITTypeOfHITRequest {
  public ?EntityId $hit_id;
  public ?EntityId $hit_type_id;

  public function __construct(shape(
    ?'hit_id' => ?EntityId,
    ?'hit_type_id' => ?EntityId,
  ) $s = shape()) {
    $this->hit_id = $s['hit_id'] ?? '';
    $this->hit_type_id = $s['hit_type_id'] ?? '';
  }
}

class UpdateHITTypeOfHITResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateNotificationSettingsRequest {
  public bool $active;
  public ?EntityId $hit_type_id;
  public ?NotificationSpecification $notification;

  public function __construct(shape(
    ?'active' => bool,
    ?'hit_type_id' => ?EntityId,
    ?'notification' => ?NotificationSpecification,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->hit_type_id = $s['hit_type_id'] ?? '';
    $this->notification = $s['notification'] ?? null;
  }
}

class UpdateNotificationSettingsResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateQualificationTypeRequest {
  public string $answer_key;
  public bool $auto_granted;
  public int $auto_granted_value;
  public string $description;
  public ?EntityId $qualification_type_id;
  public ?QualificationTypeStatus $qualification_type_status;
  public ?Long $retry_delay_in_seconds;
  public string $test;
  public ?Long $test_duration_in_seconds;

  public function __construct(shape(
    ?'answer_key' => string,
    ?'auto_granted' => bool,
    ?'auto_granted_value' => int,
    ?'description' => string,
    ?'qualification_type_id' => ?EntityId,
    ?'qualification_type_status' => ?QualificationTypeStatus,
    ?'retry_delay_in_seconds' => ?Long,
    ?'test' => string,
    ?'test_duration_in_seconds' => ?Long,
  ) $s = shape()) {
    $this->answer_key = $s['answer_key'] ?? '';
    $this->auto_granted = $s['auto_granted'] ?? false;
    $this->auto_granted_value = $s['auto_granted_value'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->qualification_type_id = $s['qualification_type_id'] ?? '';
    $this->qualification_type_status = $s['qualification_type_status'] ?? '';
    $this->retry_delay_in_seconds = $s['retry_delay_in_seconds'] ?? 0;
    $this->test = $s['test'] ?? '';
    $this->test_duration_in_seconds = $s['test_duration_in_seconds'] ?? 0;
  }
}

class UpdateQualificationTypeResponse {
  public ?QualificationType $qualification_type;

  public function __construct(shape(
    ?'qualification_type' => ?QualificationType,
  ) $s = shape()) {
    $this->qualification_type = $s['qualification_type'] ?? null;
  }
}

class WorkerBlock {
  public string $reason;
  public ?CustomerId $worker_id;

  public function __construct(shape(
    ?'reason' => string,
    ?'worker_id' => ?CustomerId,
  ) $s = shape()) {
    $this->reason = $s['reason'] ?? '';
    $this->worker_id = $s['worker_id'] ?? '';
  }
}

type WorkerBlockList = vec<WorkerBlock>;

