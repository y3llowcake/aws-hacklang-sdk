<?hh // strict
namespace slack\aws\portal.sso;

interface SSO {
  public function GetRoleCredentials(GetRoleCredentialsRequest $in): Awaitable<\Errors\Result<GetRoleCredentialsResponse>>;
  public function ListAccountRoles(ListAccountRolesRequest $in): Awaitable<\Errors\Result<ListAccountRolesResponse>>;
  public function ListAccounts(ListAccountsRequest $in): Awaitable<\Errors\Result<ListAccountsResponse>>;
  public function Logout(LogoutRequest $in): Awaitable<\Errors\Error>;
}

type AccessKeyType = string;

type AccessTokenType = string;

type AccountIdType = string;

class AccountInfo {
  public ?AccountIdType $account_id;
  public ?AccountNameType $account_name;
  public ?EmailAddressType $email_address;

  public function __construct(shape(
    ?'account_id' => ?AccountIdType,
    ?'account_name' => ?AccountNameType,
    ?'email_address' => ?EmailAddressType,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->account_name = $s['account_name'] ?? '';
    $this->email_address = $s['email_address'] ?? '';
  }
}

type AccountListType = vec<AccountInfo>;

type AccountNameType = string;

type EmailAddressType = string;

type ErrorDescription = string;

type ExpirationTimestampType = int;

class GetRoleCredentialsRequest {
  public ?AccessTokenType $access_token;
  public ?AccountIdType $account_id;
  public ?RoleNameType $role_name;

  public function __construct(shape(
    ?'access_token' => ?AccessTokenType,
    ?'account_id' => ?AccountIdType,
    ?'role_name' => ?RoleNameType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->account_id = $s['account_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class GetRoleCredentialsResponse {
  public ?RoleCredentials $role_credentials;

  public function __construct(shape(
    ?'role_credentials' => ?RoleCredentials,
  ) $s = shape()) {
    $this->role_credentials = $s['role_credentials'] ?? null;
  }
}

class InvalidRequestException {
  public ?ErrorDescription $message;

  public function __construct(shape(
    ?'message' => ?ErrorDescription,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListAccountRolesRequest {
  public ?AccessTokenType $access_token;
  public ?AccountIdType $account_id;
  public ?MaxResultType $max_results;
  public ?NextTokenType $next_token;

  public function __construct(shape(
    ?'access_token' => ?AccessTokenType,
    ?'account_id' => ?AccountIdType,
    ?'max_results' => ?MaxResultType,
    ?'next_token' => ?NextTokenType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->account_id = $s['account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAccountRolesResponse {
  public ?NextTokenType $next_token;
  public ?RoleListType $role_list;

  public function __construct(shape(
    ?'next_token' => ?NextTokenType,
    ?'role_list' => ?RoleListType,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->role_list = $s['role_list'] ?? vec[];
  }
}

class ListAccountsRequest {
  public ?AccessTokenType $access_token;
  public ?MaxResultType $max_results;
  public ?NextTokenType $next_token;

  public function __construct(shape(
    ?'access_token' => ?AccessTokenType,
    ?'max_results' => ?MaxResultType,
    ?'next_token' => ?NextTokenType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListAccountsResponse {
  public ?AccountListType $account_list;
  public ?NextTokenType $next_token;

  public function __construct(shape(
    ?'account_list' => ?AccountListType,
    ?'next_token' => ?NextTokenType,
  ) $s = shape()) {
    $this->account_list = $s['account_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class LogoutRequest {
  public ?AccessTokenType $access_token;

  public function __construct(shape(
    ?'access_token' => ?AccessTokenType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
  }
}

type MaxResultType = int;

type NextTokenType = string;

class ResourceNotFoundException {
  public ?ErrorDescription $message;

  public function __construct(shape(
    ?'message' => ?ErrorDescription,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RoleCredentials {
  public ?AccessKeyType $access_key_id;
  public ?ExpirationTimestampType $expiration;
  public ?SecretAccessKeyType $secret_access_key;
  public ?SessionTokenType $session_token;

  public function __construct(shape(
    ?'access_key_id' => ?AccessKeyType,
    ?'expiration' => ?ExpirationTimestampType,
    ?'secret_access_key' => ?SecretAccessKeyType,
    ?'session_token' => ?SessionTokenType,
  ) $s = shape()) {
    $this->access_key_id = $s['access_key_id'] ?? '';
    $this->expiration = $s['expiration'] ?? 0;
    $this->secret_access_key = $s['secret_access_key'] ?? '';
    $this->session_token = $s['session_token'] ?? '';
  }
}

class RoleInfo {
  public ?AccountIdType $account_id;
  public ?RoleNameType $role_name;

  public function __construct(shape(
    ?'account_id' => ?AccountIdType,
    ?'role_name' => ?RoleNameType,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

type RoleListType = vec<RoleInfo>;

type RoleNameType = string;

type SecretAccessKeyType = string;

type SessionTokenType = string;

class TooManyRequestsException {
  public ?ErrorDescription $message;

  public function __construct(shape(
    ?'message' => ?ErrorDescription,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnauthorizedException {
  public ?ErrorDescription $message;

  public function __construct(shape(
    ?'message' => ?ErrorDescription,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

