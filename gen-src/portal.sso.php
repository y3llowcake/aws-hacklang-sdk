<?hh // strict
namespace slack\aws\portal.sso;

interface SSO {
  public function GetRoleCredentials(GetRoleCredentialsRequest): Awaitable<Errors\Result<GetRoleCredentialsResponse>>;
  public function ListAccountRoles(ListAccountRolesRequest): Awaitable<Errors\Result<ListAccountRolesResponse>>;
  public function ListAccounts(ListAccountsRequest): Awaitable<Errors\Result<ListAccountsResponse>>;
  public function Logout(LogoutRequest): Awaitable<Errors\Error>;
}

type AccessKeyType = string;

type AccessTokenType = string;

type AccountIdType = string;

class AccountInfo {
  public AccountIdType $account_id;
  public AccountNameType $account_name;
  public EmailAddressType $email_address;

  public function __construct(shape(
  ?'account_id' => AccountIdType,
  ?'account_name' => AccountNameType,
  ?'email_address' => EmailAddressType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->account_name = $account_name ?? "";
    $this->email_address = $email_address ?? "";
  }
}

type AccountListType = vec<AccountInfo>;

type AccountNameType = string;

type EmailAddressType = string;

type ErrorDescription = string;

type ExpirationTimestampType = int;

class GetRoleCredentialsRequest {
  public AccessTokenType $access_token;
  public AccountIdType $account_id;
  public RoleNameType $role_name;

  public function __construct(shape(
  ?'access_token' => AccessTokenType,
  ?'account_id' => AccountIdType,
  ?'role_name' => RoleNameType,
  ) $s = shape()) {
    $this->access_token = $access_token ?? "";
    $this->account_id = $account_id ?? "";
    $this->role_name = $role_name ?? "";
  }
}

class GetRoleCredentialsResponse {
  public RoleCredentials $role_credentials;

  public function __construct(shape(
  ?'role_credentials' => RoleCredentials,
  ) $s = shape()) {
    $this->role_credentials = $role_credentials ?? null;
  }
}

class InvalidRequestException {
  public ErrorDescription $message;

  public function __construct(shape(
  ?'message' => ErrorDescription,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListAccountRolesRequest {
  public AccessTokenType $access_token;
  public AccountIdType $account_id;
  public MaxResultType $max_results;
  public NextTokenType $next_token;

  public function __construct(shape(
  ?'access_token' => AccessTokenType,
  ?'account_id' => AccountIdType,
  ?'max_results' => MaxResultType,
  ?'next_token' => NextTokenType,
  ) $s = shape()) {
    $this->access_token = $access_token ?? "";
    $this->account_id = $account_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAccountRolesResponse {
  public NextTokenType $next_token;
  public RoleListType $role_list;

  public function __construct(shape(
  ?'next_token' => NextTokenType,
  ?'role_list' => RoleListType,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->role_list = $role_list ?? [];
  }
}

class ListAccountsRequest {
  public AccessTokenType $access_token;
  public MaxResultType $max_results;
  public NextTokenType $next_token;

  public function __construct(shape(
  ?'access_token' => AccessTokenType,
  ?'max_results' => MaxResultType,
  ?'next_token' => NextTokenType,
  ) $s = shape()) {
    $this->access_token = $access_token ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListAccountsResponse {
  public AccountListType $account_list;
  public NextTokenType $next_token;

  public function __construct(shape(
  ?'account_list' => AccountListType,
  ?'next_token' => NextTokenType,
  ) $s = shape()) {
    $this->account_list = $account_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class LogoutRequest {
  public AccessTokenType $access_token;

  public function __construct(shape(
  ?'access_token' => AccessTokenType,
  ) $s = shape()) {
    $this->access_token = $access_token ?? "";
  }
}

type MaxResultType = int;

type NextTokenType = string;

class ResourceNotFoundException {
  public ErrorDescription $message;

  public function __construct(shape(
  ?'message' => ErrorDescription,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class RoleCredentials {
  public AccessKeyType $access_key_id;
  public ExpirationTimestampType $expiration;
  public SecretAccessKeyType $secret_access_key;
  public SessionTokenType $session_token;

  public function __construct(shape(
  ?'access_key_id' => AccessKeyType,
  ?'expiration' => ExpirationTimestampType,
  ?'secret_access_key' => SecretAccessKeyType,
  ?'session_token' => SessionTokenType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? "";
    $this->expiration = $expiration ?? 0;
    $this->secret_access_key = $secret_access_key ?? "";
    $this->session_token = $session_token ?? "";
  }
}

class RoleInfo {
  public AccountIdType $account_id;
  public RoleNameType $role_name;

  public function __construct(shape(
  ?'account_id' => AccountIdType,
  ?'role_name' => RoleNameType,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->role_name = $role_name ?? "";
  }
}

type RoleListType = vec<RoleInfo>;

type RoleNameType = string;

type SecretAccessKeyType = string;

type SessionTokenType = string;

class TooManyRequestsException {
  public ErrorDescription $message;

  public function __construct(shape(
  ?'message' => ErrorDescription,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UnauthorizedException {
  public ErrorDescription $message;

  public function __construct(shape(
  ?'message' => ErrorDescription,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

