<?hh // strict
namespace slack\aws\execute-api;

interface ApiGatewayManagementApi {
  public function DeleteConnection(DeleteConnectionRequest) Awaitable<Errors\Error>;
  public function GetConnection(GetConnectionRequest) Awaitable<Errors\Result<GetConnectionResponse>>;
  public function PostToConnection(PostToConnectionRequest) Awaitable<Errors\Error>;
}

class Data {
}

class GetConnectionRequest {
  public __string $connection_id;
}

class Identity {
  public __string $source_ip;
  public __string $user_agent;
}

class PostToConnectionRequest {
  public Data $data;
  public __string $connection_id;
}

class LimitExceededException {
}

class __string {
}

class DeleteConnectionRequest {
  public __string $connection_id;
}

class ForbiddenException {
}

class GetConnectionResponse {
  public __timestampIso8601 $connected_at;
  public Identity $identity;
  public __timestampIso8601 $last_active_at;
}

class GoneException {
}

class PayloadTooLargeException {
  public __string $message;
}

class __timestampIso8601 {
}

