<?hh // strict
namespace slack\aws\session.qldb;

interface QLDB Session {
  public function SendCommand(SendCommandRequest): Awaitable<Errors\Result<SendCommandResult>>;
}

class AbortTransactionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AbortTransactionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class BadRequestException {
  public ErrorCode $code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type CommitDigest = string;

class CommitTransactionRequest {
  public CommitDigest $commit_digest;
  public TransactionId $transaction_id;

  public function __construct(shape(
  ?'commit_digest' => CommitDigest,
  ?'transaction_id' => TransactionId,
  ) $s = shape()) {
    $this->commit_digest = $commit_digest ?? "";
    $this->transaction_id = $transaction_id ?? "";
  }
}

class CommitTransactionResult {
  public CommitDigest $commit_digest;
  public TransactionId $transaction_id;

  public function __construct(shape(
  ?'commit_digest' => CommitDigest,
  ?'transaction_id' => TransactionId,
  ) $s = shape()) {
    $this->commit_digest = $commit_digest ?? "";
    $this->transaction_id = $transaction_id ?? "";
  }
}

class EndSessionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EndSessionResult {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorCode = string;

type ErrorMessage = string;

class ExecuteStatementRequest {
  public StatementParameters $parameters;
  public Statement $statement;
  public TransactionId $transaction_id;

  public function __construct(shape(
  ?'parameters' => StatementParameters,
  ?'statement' => Statement,
  ?'transaction_id' => TransactionId,
  ) $s = shape()) {
    $this->parameters = $parameters ?? ;
    $this->statement = $statement ?? "";
    $this->transaction_id = $transaction_id ?? "";
  }
}

class ExecuteStatementResult {
  public Page $first_page;

  public function __construct(shape(
  ?'first_page' => Page,
  ) $s = shape()) {
    $this->first_page = $first_page ?? ;
  }
}

class FetchPageRequest {
  public PageToken $next_page_token;
  public TransactionId $transaction_id;

  public function __construct(shape(
  ?'next_page_token' => PageToken,
  ?'transaction_id' => TransactionId,
  ) $s = shape()) {
    $this->next_page_token = $next_page_token ?? ;
    $this->transaction_id = $transaction_id ?? "";
  }
}

class FetchPageResult {
  public Page $page;

  public function __construct(shape(
  ?'page' => Page,
  ) $s = shape()) {
    $this->page = $page ?? null;
  }
}

class InvalidSessionException {
  public ErrorCode $code;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'code' => ErrorCode,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

type IonBinary = string;

type IonText = string;

type LedgerName = string;

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class OccConflictException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Page {
  public PageToken $next_page_token;
  public ValueHolders $values;

  public function __construct(shape(
  ?'next_page_token' => PageToken,
  ?'values' => ValueHolders,
  ) $s = shape()) {
    $this->next_page_token = $next_page_token ?? ;
    $this->values = $values ?? ;
  }
}

type PageToken = string;

class RateExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
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

  public function __construct(shape(
  ?'abort_transaction' => AbortTransactionRequest,
  ?'commit_transaction' => CommitTransactionRequest,
  ?'end_session' => EndSessionRequest,
  ?'execute_statement' => ExecuteStatementRequest,
  ?'fetch_page' => FetchPageRequest,
  ?'session_token' => SessionToken,
  ?'start_session' => StartSessionRequest,
  ?'start_transaction' => StartTransactionRequest,
  ) $s = shape()) {
    $this->abort_transaction = $abort_transaction ?? ;
    $this->commit_transaction = $commit_transaction ?? ;
    $this->end_session = $end_session ?? ;
    $this->execute_statement = $execute_statement ?? ;
    $this->fetch_page = $fetch_page ?? ;
    $this->session_token = $session_token ?? "";
    $this->start_session = $start_session ?? ;
    $this->start_transaction = $start_transaction ?? ;
  }
}

class SendCommandResult {
  public AbortTransactionResult $abort_transaction;
  public CommitTransactionResult $commit_transaction;
  public EndSessionResult $end_session;
  public ExecuteStatementResult $execute_statement;
  public FetchPageResult $fetch_page;
  public StartSessionResult $start_session;
  public StartTransactionResult $start_transaction;

  public function __construct(shape(
  ?'abort_transaction' => AbortTransactionResult,
  ?'commit_transaction' => CommitTransactionResult,
  ?'end_session' => EndSessionResult,
  ?'execute_statement' => ExecuteStatementResult,
  ?'fetch_page' => FetchPageResult,
  ?'start_session' => StartSessionResult,
  ?'start_transaction' => StartTransactionResult,
  ) $s = shape()) {
    $this->abort_transaction = $abort_transaction ?? ;
    $this->commit_transaction = $commit_transaction ?? ;
    $this->end_session = $end_session ?? ;
    $this->execute_statement = $execute_statement ?? ;
    $this->fetch_page = $fetch_page ?? ;
    $this->start_session = $start_session ?? ;
    $this->start_transaction = $start_transaction ?? ;
  }
}

type SessionToken = string;

class StartSessionRequest {
  public LedgerName $ledger_name;

  public function __construct(shape(
  ?'ledger_name' => LedgerName,
  ) $s = shape()) {
    $this->ledger_name = $ledger_name ?? "";
  }
}

class StartSessionResult {
  public SessionToken $session_token;

  public function __construct(shape(
  ?'session_token' => SessionToken,
  ) $s = shape()) {
    $this->session_token = $session_token ?? "";
  }
}

class StartTransactionRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class StartTransactionResult {
  public TransactionId $transaction_id;

  public function __construct(shape(
  ?'transaction_id' => TransactionId,
  ) $s = shape()) {
    $this->transaction_id = $transaction_id ?? "";
  }
}

type Statement = string;

type StatementParameters = vec<ValueHolder>;

type TransactionId = string;

class ValueHolder {
  public IonBinary $ion_binary;
  public IonText $ion_text;

  public function __construct(shape(
  ?'ion_binary' => IonBinary,
  ?'ion_text' => IonText,
  ) $s = shape()) {
    $this->ion_binary = $ion_binary ?? "";
    $this->ion_text = $ion_text ?? "";
  }
}

type ValueHolders = vec<ValueHolder>;

