<?hh // strict
namespace slack\aws\codestar-connections;

interface CodeStar connections {
  public function CreateConnection(CreateConnectionInput) Awaitable<Errors\Result<CreateConnectionOutput>>;
  public function DeleteConnection(DeleteConnectionInput) Awaitable<Errors\Result<DeleteConnectionOutput>>;
  public function GetConnection(GetConnectionInput) Awaitable<Errors\Result<GetConnectionOutput>>;
  public function ListConnections(ListConnectionsInput) Awaitable<Errors\Result<ListConnectionsOutput>>;
}

class AccountId {
}

class Connection {
  public ConnectionArn $connection_arn;
  public ConnectionName $connection_name;
  public ConnectionStatus $connection_status;
  public AccountId $owner_account_id;
  public ProviderType $provider_type;
}

class ConnectionArn {
}

class ConnectionList {
}

class ConnectionName {
}

class ConnectionStatus {
}

class CreateConnectionInput {
  public ConnectionName $connection_name;
  public ProviderType $provider_type;
}

class CreateConnectionOutput {
  public ConnectionArn $connection_arn;
}

class DeleteConnectionInput {
  public ConnectionArn $connection_arn;
}

class DeleteConnectionOutput {
}

class ErrorMessage {
}

class GetConnectionInput {
  public ConnectionArn $connection_arn;
}

class GetConnectionOutput {
  public Connection $connection;
}

class LimitExceededException {
  public ErrorMessage $message;
}

class ListConnectionsInput {
  public MaxResults $max_results;
  public NextToken $next_token;
  public ProviderType $provider_type_filter;
}

class ListConnectionsOutput {
  public ConnectionList $connections;
  public NextToken $next_token;
}

class MaxResults {
}

class NextToken {
}

class ProviderType {
}

class ResourceNotFoundException {
  public ErrorMessage $message;
}

