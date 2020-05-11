<?hh // strict
namespace slack\aws\codestar-connections;

interface CodeStar connections {
  public function CreateConnection(CreateConnectionInput): Awaitable<Errors\Result<CreateConnectionOutput>>;
  public function DeleteConnection(DeleteConnectionInput): Awaitable<Errors\Result<DeleteConnectionOutput>>;
  public function GetConnection(GetConnectionInput): Awaitable<Errors\Result<GetConnectionOutput>>;
  public function ListConnections(ListConnectionsInput): Awaitable<Errors\Result<ListConnectionsOutput>>;
}

type AccountId = string;

class Connection {
  public ConnectionArn $connection_arn;
  public ConnectionName $connection_name;
  public ConnectionStatus $connection_status;
  public AccountId $owner_account_id;
  public ProviderType $provider_type;

  public function __construct(shape(
  ?'connection_arn' => ConnectionArn,
  ?'connection_name' => ConnectionName,
  ?'connection_status' => ConnectionStatus,
  ?'owner_account_id' => AccountId,
  ?'provider_type' => ProviderType,
  ) $s = shape()) {
    $this->connection_arn = $connection_arn ?? "";
    $this->connection_name = $connection_name ?? "";
    $this->connection_status = $connection_status ?? "";
    $this->owner_account_id = $owner_account_id ?? "";
    $this->provider_type = $provider_type ?? "";
  }
}

type ConnectionArn = string;

type ConnectionList = vec<Connection>;

type ConnectionName = string;

type ConnectionStatus = string;

class CreateConnectionInput {
  public ConnectionName $connection_name;
  public ProviderType $provider_type;

  public function __construct(shape(
  ?'connection_name' => ConnectionName,
  ?'provider_type' => ProviderType,
  ) $s = shape()) {
    $this->connection_name = $connection_name ?? "";
    $this->provider_type = $provider_type ?? "";
  }
}

class CreateConnectionOutput {
  public ConnectionArn $connection_arn;

  public function __construct(shape(
  ?'connection_arn' => ConnectionArn,
  ) $s = shape()) {
    $this->connection_arn = $connection_arn ?? "";
  }
}

class DeleteConnectionInput {
  public ConnectionArn $connection_arn;

  public function __construct(shape(
  ?'connection_arn' => ConnectionArn,
  ) $s = shape()) {
    $this->connection_arn = $connection_arn ?? "";
  }
}

class DeleteConnectionOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorMessage = string;

class GetConnectionInput {
  public ConnectionArn $connection_arn;

  public function __construct(shape(
  ?'connection_arn' => ConnectionArn,
  ) $s = shape()) {
    $this->connection_arn = $connection_arn ?? "";
  }
}

class GetConnectionOutput {
  public Connection $connection;

  public function __construct(shape(
  ?'connection' => Connection,
  ) $s = shape()) {
    $this->connection = $connection ?? null;
  }
}

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListConnectionsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ProviderType $provider_type_filter;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ?'provider_type_filter' => ProviderType,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->provider_type_filter = $provider_type_filter ?? "";
  }
}

class ListConnectionsOutput {
  public ConnectionList $connections;
  public NextToken $next_token;

  public function __construct(shape(
  ?'connections' => ConnectionList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->connections = $connections ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type MaxResults = int;

type NextToken = string;

type ProviderType = string;

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

