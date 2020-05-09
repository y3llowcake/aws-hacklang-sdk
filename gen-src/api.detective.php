<?hh // strict
namespace slack\aws\api.detective;

interface Detective {
  public function AcceptInvitation(AcceptInvitationRequest) Awaitable<Errors\Error>;
  public function CreateGraph() Awaitable<Errors\Result<CreateGraphResponse>>;
  public function CreateMembers(CreateMembersRequest) Awaitable<Errors\Result<CreateMembersResponse>>;
  public function DeleteGraph(DeleteGraphRequest) Awaitable<Errors\Error>;
  public function DeleteMembers(DeleteMembersRequest) Awaitable<Errors\Result<DeleteMembersResponse>>;
  public function DisassociateMembership(DisassociateMembershipRequest) Awaitable<Errors\Error>;
  public function GetMembers(GetMembersRequest) Awaitable<Errors\Result<GetMembersResponse>>;
  public function ListGraphs(ListGraphsRequest) Awaitable<Errors\Result<ListGraphsResponse>>;
  public function ListInvitations(ListInvitationsRequest) Awaitable<Errors\Result<ListInvitationsResponse>>;
  public function ListMembers(ListMembersRequest) Awaitable<Errors\Result<ListMembersResponse>>;
  public function RejectInvitation(RejectInvitationRequest) Awaitable<Errors\Error>;
  public function StartMonitoringMember(StartMonitoringMemberRequest) Awaitable<Errors\Error>;
}

class AcceptInvitationRequest {
  public GraphArn $graph_arn;
}

class Account {
  public AccountId $account_id;
  public EmailAddress $email_address;
}

class AccountId {
}

class AccountIdList {
}

class AccountList {
}

class ConflictException {
  public ErrorMessage $message;
}

class CreateGraphResponse {
  public GraphArn $graph_arn;
}

class CreateMembersRequest {
  public AccountList $accounts;
  public GraphArn $graph_arn;
  public EmailMessage $message;
}

class CreateMembersResponse {
  public MemberDetailList $members;
  public UnprocessedAccountList $unprocessed_accounts;
}

class DeleteGraphRequest {
  public GraphArn $graph_arn;
}

class DeleteMembersRequest {
  public AccountIdList $account_ids;
  public GraphArn $graph_arn;
}

class DeleteMembersResponse {
  public AccountIdList $account_ids;
  public UnprocessedAccountList $unprocessed_accounts;
}

class DisassociateMembershipRequest {
  public GraphArn $graph_arn;
}

class EmailAddress {
}

class EmailMessage {
}

class ErrorMessage {
}

class GetMembersRequest {
  public AccountIdList $account_ids;
  public GraphArn $graph_arn;
}

class GetMembersResponse {
  public MemberDetailList $member_details;
  public UnprocessedAccountList $unprocessed_accounts;
}

class Graph {
  public GraphArn $arn;
  public Timestamp $created_time;
}

class GraphArn {
}

class GraphList {
}

class InternalServerException {
  public ErrorMessage $message;
}

class ListGraphsRequest {
  public MemberResultsLimit $max_results;
  public PaginationToken $next_token;
}

class ListGraphsResponse {
  public GraphList $graph_list;
  public PaginationToken $next_token;
}

class ListInvitationsRequest {
  public MemberResultsLimit $max_results;
  public PaginationToken $next_token;
}

class ListInvitationsResponse {
  public MemberDetailList $invitations;
  public PaginationToken $next_token;
}

class ListMembersRequest {
  public GraphArn $graph_arn;
  public MemberResultsLimit $max_results;
  public PaginationToken $next_token;
}

class ListMembersResponse {
  public MemberDetailList $member_details;
  public PaginationToken $next_token;
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
}

class MemberDetailList {
}

class MemberDisabledReason {
}

class MemberResultsLimit {
}

class MemberStatus {
}

class PaginationToken {
}

class Percentage {
}

class RejectInvitationRequest {
  public GraphArn $graph_arn;
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class ServiceQuotaExceededException {
  public ErrorMessage $message;
}

class StartMonitoringMemberRequest {
  public AccountId $account_id;
  public GraphArn $graph_arn;
}

class Timestamp {
}

class UnprocessedAccount {
  public AccountId $account_id;
  public UnprocessedReason $reason;
}

class UnprocessedAccountList {
}

class UnprocessedReason {
}

class ValidationException {
  public ErrorMessage $message;
}

