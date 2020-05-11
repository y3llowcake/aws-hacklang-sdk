<?hh // strict
namespace slack\aws\api.detective;

interface Detective {
  public function AcceptInvitation(AcceptInvitationRequest): Awaitable<Errors\Error>;
  public function CreateGraph(): Awaitable<Errors\Result<CreateGraphResponse>>;
  public function CreateMembers(CreateMembersRequest): Awaitable<Errors\Result<CreateMembersResponse>>;
  public function DeleteGraph(DeleteGraphRequest): Awaitable<Errors\Error>;
  public function DeleteMembers(DeleteMembersRequest): Awaitable<Errors\Result<DeleteMembersResponse>>;
  public function DisassociateMembership(DisassociateMembershipRequest): Awaitable<Errors\Error>;
  public function GetMembers(GetMembersRequest): Awaitable<Errors\Result<GetMembersResponse>>;
  public function ListGraphs(ListGraphsRequest): Awaitable<Errors\Result<ListGraphsResponse>>;
  public function ListInvitations(ListInvitationsRequest): Awaitable<Errors\Result<ListInvitationsResponse>>;
  public function ListMembers(ListMembersRequest): Awaitable<Errors\Result<ListMembersResponse>>;
  public function RejectInvitation(RejectInvitationRequest): Awaitable<Errors\Error>;
  public function StartMonitoringMember(StartMonitoringMemberRequest): Awaitable<Errors\Error>;
}

class AcceptInvitationRequest {
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->graph_arn = $graph_arn ?? "";
  }
}

class Account {
  public AccountId $account_id;
  public EmailAddress $email_address;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'email_address' => EmailAddress,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->email_address = $email_address ?? "";
  }
}

type AccountId = string;

type AccountIdList = vec<AccountId>;

type AccountList = vec<Account>;

class ConflictException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CreateGraphResponse {
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->graph_arn = $graph_arn ?? "";
  }
}

class CreateMembersRequest {
  public AccountList $accounts;
  public GraphArn $graph_arn;
  public EmailMessage $message;

  public function __construct(shape(
  ?'accounts' => AccountList,
  ?'graph_arn' => GraphArn,
  ?'message' => EmailMessage,
  ) $s = shape()) {
    $this->accounts = $accounts ?? ;
    $this->graph_arn = $graph_arn ?? "";
    $this->message = $message ?? ;
  }
}

class CreateMembersResponse {
  public MemberDetailList $members;
  public UnprocessedAccountList $unprocessed_accounts;

  public function __construct(shape(
  ?'members' => MemberDetailList,
  ?'unprocessed_accounts' => UnprocessedAccountList,
  ) $s = shape()) {
    $this->members = $members ?? ;
    $this->unprocessed_accounts = $unprocessed_accounts ?? ;
  }
}

class DeleteGraphRequest {
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->graph_arn = $graph_arn ?? "";
  }
}

class DeleteMembersRequest {
  public AccountIdList $account_ids;
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'account_ids' => AccountIdList,
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? ;
    $this->graph_arn = $graph_arn ?? "";
  }
}

class DeleteMembersResponse {
  public AccountIdList $account_ids;
  public UnprocessedAccountList $unprocessed_accounts;

  public function __construct(shape(
  ?'account_ids' => AccountIdList,
  ?'unprocessed_accounts' => UnprocessedAccountList,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? ;
    $this->unprocessed_accounts = $unprocessed_accounts ?? ;
  }
}

class DisassociateMembershipRequest {
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->graph_arn = $graph_arn ?? "";
  }
}

type EmailAddress = string;

type EmailMessage = string;

type ErrorMessage = string;

class GetMembersRequest {
  public AccountIdList $account_ids;
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'account_ids' => AccountIdList,
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->account_ids = $account_ids ?? ;
    $this->graph_arn = $graph_arn ?? "";
  }
}

class GetMembersResponse {
  public MemberDetailList $member_details;
  public UnprocessedAccountList $unprocessed_accounts;

  public function __construct(shape(
  ?'member_details' => MemberDetailList,
  ?'unprocessed_accounts' => UnprocessedAccountList,
  ) $s = shape()) {
    $this->member_details = $member_details ?? ;
    $this->unprocessed_accounts = $unprocessed_accounts ?? ;
  }
}

class Graph {
  public GraphArn $arn;
  public Timestamp $created_time;

  public function __construct(shape(
  ?'arn' => GraphArn,
  ?'created_time' => Timestamp,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->created_time = $created_time ?? ;
  }
}

type GraphArn = string;

type GraphList = vec<Graph>;

class InternalServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListGraphsRequest {
  public MemberResultsLimit $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => MemberResultsLimit,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListGraphsResponse {
  public GraphList $graph_list;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'graph_list' => GraphList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->graph_list = $graph_list ?? [];
    $this->next_token = $next_token ?? ;
  }
}

class ListInvitationsRequest {
  public MemberResultsLimit $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => MemberResultsLimit,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInvitationsResponse {
  public MemberDetailList $invitations;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'invitations' => MemberDetailList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->invitations = $invitations ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMembersRequest {
  public GraphArn $graph_arn;
  public MemberResultsLimit $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'graph_arn' => GraphArn,
  ?'max_results' => MemberResultsLimit,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->graph_arn = $graph_arn ?? "";
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMembersResponse {
  public MemberDetailList $member_details;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'member_details' => MemberDetailList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->member_details = $member_details ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class MemberDetail {
  public AccountId $account_id;
  public MemberDisabledReason $disabled_reason;
  public EmailAddress $email_address;
  public GraphArn $graph_arn;
  public Timestamp $invited_time;
  public AccountId $master_id;
  public Percentage $percent_of_graph_utilization;
  public Timestamp $percent_of_graph_utilization_updated_time;
  public MemberStatus $status;
  public Timestamp $updated_time;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'disabled_reason' => MemberDisabledReason,
  ?'email_address' => EmailAddress,
  ?'graph_arn' => GraphArn,
  ?'invited_time' => Timestamp,
  ?'master_id' => AccountId,
  ?'percent_of_graph_utilization' => Percentage,
  ?'percent_of_graph_utilization_updated_time' => Timestamp,
  ?'status' => MemberStatus,
  ?'updated_time' => Timestamp,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->disabled_reason = $disabled_reason ?? ;
    $this->email_address = $email_address ?? "";
    $this->graph_arn = $graph_arn ?? "";
    $this->invited_time = $invited_time ?? ;
    $this->master_id = $master_id ?? ;
    $this->percent_of_graph_utilization = $percent_of_graph_utilization ?? ;
    $this->percent_of_graph_utilization_updated_time = $percent_of_graph_utilization_updated_time ?? ;
    $this->status = $status ?? ;
    $this->updated_time = $updated_time ?? ;
  }
}

type MemberDetailList = vec<MemberDetail>;

type MemberDisabledReason = string;

type MemberResultsLimit = int;

type MemberStatus = string;

type PaginationToken = string;

type Percentage = float;

class RejectInvitationRequest {
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->graph_arn = $graph_arn ?? "";
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class StartMonitoringMemberRequest {
  public AccountId $account_id;
  public GraphArn $graph_arn;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'graph_arn' => GraphArn,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->graph_arn = $graph_arn ?? "";
  }
}

type Timestamp = int;

class UnprocessedAccount {
  public AccountId $account_id;
  public UnprocessedReason $reason;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'reason' => UnprocessedReason,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->reason = $reason ?? ;
  }
}

type UnprocessedAccountList = vec<UnprocessedAccount>;

type UnprocessedReason = string;

class ValidationException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

