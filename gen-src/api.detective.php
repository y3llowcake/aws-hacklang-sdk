<?hh // strict
namespace slack\aws\api.detective;

interface Detective {
  public function StartMonitoringMember(StartMonitoringMemberRequest) Awaitable<Errors\Error>;
  public function AcceptInvitation(AcceptInvitationRequest) Awaitable<Errors\Error>;
  public function CreateGraph() Awaitable<Errors\Result<CreateGraphResponse>>;
  public function DeleteGraph(DeleteGraphRequest) Awaitable<Errors\Error>;
  public function DisassociateMembership(DisassociateMembershipRequest) Awaitable<Errors\Error>;
  public function GetMembers(GetMembersRequest) Awaitable<Errors\Result<GetMembersResponse>>;
  public function ListGraphs(ListGraphsRequest) Awaitable<Errors\Result<ListGraphsResponse>>;
  public function RejectInvitation(RejectInvitationRequest) Awaitable<Errors\Error>;
  public function CreateMembers(CreateMembersRequest) Awaitable<Errors\Result<CreateMembersResponse>>;
  public function DeleteMembers(DeleteMembersRequest) Awaitable<Errors\Result<DeleteMembersResponse>>;
  public function ListInvitations(ListInvitationsRequest) Awaitable<Errors\Result<ListInvitationsResponse>>;
  public function ListMembers(ListMembersRequest) Awaitable<Errors\Result<ListMembersResponse>>;
}

class ListInvitationsRequest {
  public PaginationToken $next_token;
  public MemberResultsLimit $max_results;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class AccountId {
}

class CreateMembersRequest {
  public GraphArn $graph_arn;
  public EmailMessage $message;
  public AccountList $accounts;
}

class GetMembersRequest {
  public GraphArn $graph_arn;
  public AccountIdList $account_ids;
}

class InternalServerException {
  public ErrorMessage $message;
}

class ListGraphsResponse {
  public GraphList $graph_list;
  public PaginationToken $next_token;
}

class RejectInvitationRequest {
  public GraphArn $graph_arn;
}

class CreateGraphResponse {
  public GraphArn $graph_arn;
}

class EmailAddress {
}

class GraphArn {
}

class ListMembersResponse {
  public MemberDetailList $member_details;
  public PaginationToken $next_token;
}

class MemberDetailList {
}

class AccountList {
}

class GetMembersResponse {
  public MemberDetailList $member_details;
  public UnprocessedAccountList $unprocessed_accounts;
}

class MemberDisabledReason {
}

class MemberStatus {
}

class Percentage {
}

class ConflictException {
  public ErrorMessage $message;
}

class DeleteMembersResponse {
  public AccountIdList $account_ids;
  public UnprocessedAccountList $unprocessed_accounts;
}

class EmailMessage {
}

class Graph {
  public GraphArn $arn;
  public Timestamp $created_time;
}

class ListInvitationsResponse {
  public MemberDetailList $invitations;
  public PaginationToken $next_token;
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;
}

class StartMonitoringMemberRequest {
  public GraphArn $graph_arn;
  public AccountId $account_id;
}

class ValidationException {
  public ErrorMessage $message;
}

class Account {
  public AccountId $account_id;
  public EmailAddress $email_address;
}

class AccountIdList {
}

class ListGraphsRequest {
  public PaginationToken $next_token;
  public MemberResultsLimit $max_results;
}

class ListMembersRequest {
  public GraphArn $graph_arn;
  public PaginationToken $next_token;
  public MemberResultsLimit $max_results;
}

class PaginationToken {
}

class CreateMembersResponse {
  public MemberDetailList $members;
  public UnprocessedAccountList $unprocessed_accounts;
}

class MemberResultsLimit {
}

class Timestamp {
}

class DeleteGraphRequest {
  public GraphArn $graph_arn;
}

class ErrorMessage {
}

class MemberDetail {
  public Percentage $percent_of_graph_utilization;
  public Timestamp $percent_of_graph_utilization_updated_time;
  public AccountId $master_id;
  public MemberStatus $status;
  public MemberDisabledReason $disabled_reason;
  public Timestamp $invited_time;
  public Timestamp $updated_time;
  public AccountId $account_id;
  public EmailAddress $email_address;
  public GraphArn $graph_arn;
}

class UnprocessedAccount {
  public AccountId $account_id;
  public UnprocessedReason $reason;
}

class UnprocessedReason {
}

class AcceptInvitationRequest {
  public GraphArn $graph_arn;
}

class DeleteMembersRequest {
  public GraphArn $graph_arn;
  public AccountIdList $account_ids;
}

class DisassociateMembershipRequest {
  public GraphArn $graph_arn;
}

class GraphList {
}

class UnprocessedAccountList {
}

