<?hh // strict
namespace slack\aws\execute-api;

interface ApiGatewayManagementApi {
  public function DeleteConnection(DeleteConnectionRequest $in): Awaitable<\Errors\Error>;
  public function GetConnection(GetConnectionRequest $in): Awaitable<\Errors\Result<GetConnectionResponse>>;
  public function PostToConnection(PostToConnectionRequest $in): Awaitable<\Errors\Error>;
}

type Data = string;

class DeleteConnectionRequest {
  public ?__string $connection_id;

  public function __construct(shape(
    ?'connection_id' => ?__string,
  ) $s = shape()) {
    $this->connection_id = $s['connection_id'] ?? '';
  }
}

class ForbiddenException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetConnectionRequest {
  public ?__string $connection_id;

  public function __construct(shape(
    ?'connection_id' => ?__string,
  ) $s = shape()) {
    $this->connection_id = $s['connection_id'] ?? '';
  }
}

class GetConnectionResponse {
  public ?__timestampIso8601 $connected_at;
  public ?Identity $identity;
  public ?__timestampIso8601 $last_active_at;

  public function __construct(shape(
    ?'connected_at' => ?__timestampIso8601,
    ?'identity' => ?Identity,
    ?'last_active_at' => ?__timestampIso8601,
  ) $s = shape()) {
    $this->connected_at = $s['connected_at'] ?? 0;
    $this->identity = $s['identity'] ?? null;
    $this->last_active_at = $s['last_active_at'] ?? 0;
  }
}

class GoneException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class Identity {
  public ?__string $source_ip;
  public ?__string $user_agent;

  public function __construct(shape(
    ?'source_ip' => ?__string,
    ?'user_agent' => ?__string,
  ) $s = shape()) {
    $this->source_ip = $s['source_ip'] ?? '';
    $this->user_agent = $s['user_agent'] ?? '';
  }
}

class LimitExceededException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PayloadTooLargeException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class PostToConnectionRequest {
  public ?__string $connection_id;
  public ?Data $data;

  public function __construct(shape(
    ?'connection_id' => ?__string,
    ?'data' => ?Data,
  ) $s = shape()) {
    $this->connection_id = $s['connection_id'] ?? '';
    $this->data = $s['data'] ?? '';
  }
}

type __string = string;

type __timestampIso8601 = int;

