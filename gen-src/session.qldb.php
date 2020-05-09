<?hh // strict
namespace slack\aws\session.qldb;

interface QLDB Session {
  public function SendCommand(SendCommandRequest): Awaitable<Errors\Result<SendCommandResult>>;
}

class AbortTransactionRequest {
}

class AbortTransactionResult {
}

class BadRequestException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class CommitDigest {
}

class CommitTransactionRequest {
  public CommitDigest $commit_digest;
  public TransactionId $transaction_id;
}

class CommitTransactionResult {
  public CommitDigest $commit_digest;
  public TransactionId $transaction_id;
}

class EndSessionRequest {
}

class EndSessionResult {
}

class ErrorCode {
}

class ErrorMessage {
}

class ExecuteStatementRequest {
  public StatementParameters $parameters;
  public Statement $statement;
  public TransactionId $transaction_id;
}

class ExecuteStatementResult {
  public Page $first_page;
}

class FetchPageRequest {
  public PageToken $next_page_token;
  public TransactionId $transaction_id;
}

class FetchPageResult {
  public Page $page;
}

class InvalidSessionException {
  public ErrorCode $code;
  public ErrorMessage $message;
}

class IonBinary {
}

class IonText {
}

class LedgerName {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class OccConflictException {
  public ErrorMessage $message;
}

class Page {
  public PageToken $next_page_token;
  public ValueHolders $values;
}

class PageToken {
}

class RateExceededException {
  public ErrorMessage $message;
}

class SendCommandRequest {
  public AbortTransactionRequest $abort_transaction;
  public CommitTransactionRequest $commit_transaction;
  public EndSessionRequest $end_session;
  public ExecuteStatementRequest $execute_statement;
  public FetchPageRequest $fetch_page;
  public SessionToken $session_token;
  public StartSessionRequest $start_session;
  public StartTransactionRequest $start_transaction;
}

class SendCommandResult {
  public AbortTransactionResult $abort_transaction;
  public CommitTransactionResult $commit_transaction;
  public EndSessionResult $end_session;
  public ExecuteStatementResult $execute_statement;
  public FetchPageResult $fetch_page;
  public StartSessionResult $start_session;
  public StartTransactionResult $start_transaction;
}

class SessionToken {
}

class StartSessionRequest {
  public LedgerName $ledger_name;
}

class StartSessionResult {
  public SessionToken $session_token;
}

class StartTransactionRequest {
}

class StartTransactionResult {
  public TransactionId $transaction_id;
}

class Statement {
}

class StatementParameters {
}

class TransactionId {
}

class ValueHolder {
  public IonBinary $ion_binary;
  public IonText $ion_text;
}

class ValueHolders {
}

