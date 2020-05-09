<?hh // strict
namespace slack\aws\codestar-connections;

interface CodeStar connections {
  public function CreateConnection(CreateConnectionInput) Awaitable<Errors\Result<CreateConnectionOutput>>;
  public function DeleteConnection(DeleteConnectionInput) Awaitable<Errors\Result<DeleteConnectionOutput>>;
  public function GetConnection(GetConnectionInput) Awaitable<Errors\Result<GetConnectionOutput>>;
  public function ListConnections(ListConnectionsInput) Awaitable<Errors\Result<ListConnectionsOutput>>;
}

class GetConnectionInput {
  public ConnectionArn $connection_arn;
}

class MaxResults {
}

class ConnectionArn {
}

class DeleteConnectionInput {
  public ConnectionArn $connection_arn;
}

class DeleteConnectionOutput {
}

class CreateConnectionInput {
  public ProviderType $provider_type;
  public ConnectionName $connection_name;
}

class CreateConnectionOutput {
  public ConnectionArn $connection_arn;
}

class ErrorMessage {
}

class ListConnectionsInput {
  public ProviderType $provider_type_filter;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListConnectionsOutput {
  public ConnectionList $connections;
  public NextToken $next_token;
}

class Connection {
  public ConnectionName $connection_name;
  public ConnectionArn $connection_arn;
  public ProviderType $provider_type;
  public AccountId $owner_account_id;
  public ConnectionStatus $connection_status;
}

class ConnectionName {
}

class ConnectionStatus {
}

class ConnectionList {
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ProviderType {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

class AccountId {
}

class GetConnectionOutput {
  public Connection $connection;
}

class NextToken {
}

