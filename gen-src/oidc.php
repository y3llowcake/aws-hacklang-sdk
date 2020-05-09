<?hh // strict
namespace slack\aws\oidc;

interface SSO OIDC {
  public function CreateToken(CreateTokenRequest): Awaitable<Errors\Result<CreateTokenResponse>>;
  public function RegisterClient(RegisterClientRequest): Awaitable<Errors\Result<RegisterClientResponse>>;
  public function StartDeviceAuthorization(StartDeviceAuthorizationRequest): Awaitable<Errors\Result<StartDeviceAuthorizationResponse>>;
}

class AccessDeniedException {
  public Error $error;
  public ErrorDescription $error_description;
}

class AccessToken {
}

class AuthCode {
}

class AuthorizationPendingException {
  public Error $error;
  public ErrorDescription $error_description;
}

class ClientId {
}

class ClientName {
}

class ClientSecret {
}

class ClientType {
}

class CreateTokenRequest {
  public ClientId $client_id;
  public ClientSecret $client_secret;
  public AuthCode $code;
  public DeviceCode $device_code;
  public GrantType $grant_type;
  public URI $redirect_uri;
  public RefreshToken $refresh_token;
  public Scopes $scope;
}

class CreateTokenResponse {
  public AccessToken $access_token;
  public ExpirationInSeconds $expires_in;
  public IdToken $id_token;
  public RefreshToken $refresh_token;
  public TokenType $token_type;
}

class DeviceCode {
}

class Error {
}

class ErrorDescription {
}

class ExpirationInSeconds {
}

class ExpiredTokenException {
  public Error $error;
  public ErrorDescription $error_description;
}

class GrantType {
}

class IdToken {
}

class InternalServerException {
  public Error $error;
  public ErrorDescription $error_description;
}

class IntervalInSeconds {
}

class InvalidClientException {
  public Error $error;
  public ErrorDescription $error_description;
}

class InvalidClientMetadataException {
  public Error $error;
  public ErrorDescription $error_description;
}

class InvalidGrantException {
  public Error $error;
  public ErrorDescription $error_description;
}

class InvalidRequestException {
  public Error $error;
  public ErrorDescription $error_description;
}

class InvalidScopeException {
  public Error $error;
  public ErrorDescription $error_description;
}

class LongTimeStampType {
}

class RefreshToken {
}

class RegisterClientRequest {
  public ClientName $client_name;
  public ClientType $client_type;
  public Scopes $scopes;
}

class RegisterClientResponse {
  public URI $authorization_endpoint;
  public ClientId $client_id;
  public LongTimeStampType $client_id_issued_at;
  public ClientSecret $client_secret;
  public LongTimeStampType $client_secret_expires_at;
  public URI $token_endpoint;
}

class Scope {
}

class Scopes {
}

class SlowDownException {
  public Error $error;
  public ErrorDescription $error_description;
}

class StartDeviceAuthorizationRequest {
  public ClientId $client_id;
  public ClientSecret $client_secret;
  public URI $start_url;
}

class StartDeviceAuthorizationResponse {
  public DeviceCode $device_code;
  public ExpirationInSeconds $expires_in;
  public IntervalInSeconds $interval;
  public UserCode $user_code;
  public URI $verification_uri;
  public URI $verification_uri_complete;
}

class TokenType {
}

class URI {
}

class UnauthorizedClientException {
  public Error $error;
  public ErrorDescription $error_description;
}

class UnsupportedGrantTypeException {
  public Error $error;
  public ErrorDescription $error_description;
}

class UserCode {
}

