<?hh // strict
namespace slack\aws\portal.sso;

interface SSO {
  public function GetRoleCredentials(GetRoleCredentialsRequest) Awaitable<Errors\Result<GetRoleCredentialsResponse>>;
  public function ListAccountRoles(ListAccountRolesRequest) Awaitable<Errors\Result<ListAccountRolesResponse>>;
  public function ListAccounts(ListAccountsRequest) Awaitable<Errors\Result<ListAccountsResponse>>;
  public function Logout(LogoutRequest) Awaitable<Errors\Error>;
}

class AccessKeyType {
}

class AccessTokenType {
}

class AccountIdType {
}

class AccountInfo {
  public AccountIdType $account_id;
  public AccountNameType $account_name;
  public EmailAddressType $email_address;
}

class AccountListType {
}

class AccountNameType {
}

class EmailAddressType {
}

class ErrorDescription {
}

class ExpirationTimestampType {
}

class GetRoleCredentialsRequest {
  public AccessTokenType $access_token;
  public AccountIdType $account_id;
  public RoleNameType $role_name;
}

class GetRoleCredentialsResponse {
  public RoleCredentials $role_credentials;
}

class InvalidRequestException {
  public ErrorDescription $message;
}

class ListAccountRolesRequest {
  public AccessTokenType $access_token;
  public AccountIdType $account_id;
  public MaxResultType $max_results;
  public NextTokenType $next_token;
}

class ListAccountRolesResponse {
  public NextTokenType $next_token;
  public RoleListType $role_list;
}

class ListAccountsRequest {
  public AccessTokenType $access_token;
  public MaxResultType $max_results;
  public NextTokenType $next_token;
}

class ListAccountsResponse {
  public AccountListType $account_list;
  public NextTokenType $next_token;
}

class LogoutRequest {
  public AccessTokenType $access_token;
}

class MaxResultType {
}

class NextTokenType {
}

class ResourceNotFoundException {
  public ErrorDescription $message;
}

class RoleCredentials {
  public AccessKeyType $access_key_id;
  public ExpirationTimestampType $expiration;
  public SecretAccessKeyType $secret_access_key;
  public SessionTokenType $session_token;
}

class RoleInfo {
  public AccountIdType $account_id;
  public RoleNameType $role_name;
}

class RoleListType {
}

class RoleNameType {
}

class SecretAccessKeyType {
}

class SessionTokenType {
}

class TooManyRequestsException {
  public ErrorDescription $message;
}

class UnauthorizedException {
  public ErrorDescription $message;
}

