<?hh // strict
namespace slack\aws\oidc;

interface SSOOIDC {
  public function CreateToken(CreateTokenRequest $in): Awaitable<\Errors\Result<CreateTokenResponse>>;
  public function RegisterClient(RegisterClientRequest $in): Awaitable<\Errors\Result<RegisterClientResponse>>;
  public function StartDeviceAuthorization(StartDeviceAuthorizationRequest $in): Awaitable<\Errors\Result<StartDeviceAuthorizationResponse>>;
}

class AccessDeniedException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

type AccessToken = string;

type AuthCode = string;

class AuthorizationPendingException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

type ClientId = string;

type ClientName = string;

type ClientSecret = string;

type ClientType = string;

class CreateTokenRequest {
  public ?ClientId $client_id;
  public ?ClientSecret $client_secret;
  public ?AuthCode $code;
  public ?DeviceCode $device_code;
  public ?GrantType $grant_type;
  public ?URI $redirect_uri;
  public ?RefreshToken $refresh_token;
  public ?Scopes $scope;

  public function __construct(shape(
    ?'client_id' => ?ClientId,
    ?'client_secret' => ?ClientSecret,
    ?'code' => ?AuthCode,
    ?'device_code' => ?DeviceCode,
    ?'grant_type' => ?GrantType,
    ?'redirect_uri' => ?URI,
    ?'refresh_token' => ?RefreshToken,
    ?'scope' => ?Scopes,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->client_secret = $s['client_secret'] ?? '';
    $this->code = $s['code'] ?? '';
    $this->device_code = $s['device_code'] ?? '';
    $this->grant_type = $s['grant_type'] ?? '';
    $this->redirect_uri = $s['redirect_uri'] ?? '';
    $this->refresh_token = $s['refresh_token'] ?? '';
    $this->scope = $s['scope'] ?? vec[];
  }
}

class CreateTokenResponse {
  public ?AccessToken $access_token;
  public ?ExpirationInSeconds $expires_in;
  public ?IdToken $id_token;
  public ?RefreshToken $refresh_token;
  public ?TokenType $token_type;

  public function __construct(shape(
    ?'access_token' => ?AccessToken,
    ?'expires_in' => ?ExpirationInSeconds,
    ?'id_token' => ?IdToken,
    ?'refresh_token' => ?RefreshToken,
    ?'token_type' => ?TokenType,
  ) $s = shape()) {
    $this->access_token = $s['access_token'] ?? '';
    $this->expires_in = $s['expires_in'] ?? 0;
    $this->id_token = $s['id_token'] ?? '';
    $this->refresh_token = $s['refresh_token'] ?? '';
    $this->token_type = $s['token_type'] ?? '';
  }
}

type DeviceCode = string;

type Error = string;

type ErrorDescription = string;

type ExpirationInSeconds = int;

class ExpiredTokenException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

type GrantType = string;

type IdToken = string;

class InternalServerException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

type IntervalInSeconds = int;

class InvalidClientException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

class InvalidClientMetadataException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

class InvalidGrantException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

class InvalidRequestException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

class InvalidScopeException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

type LongTimeStampType = int;

type RefreshToken = string;

class RegisterClientRequest {
  public ?ClientName $client_name;
  public ?ClientType $client_type;
  public ?Scopes $scopes;

  public function __construct(shape(
    ?'client_name' => ?ClientName,
    ?'client_type' => ?ClientType,
    ?'scopes' => ?Scopes,
  ) $s = shape()) {
    $this->client_name = $s['client_name'] ?? '';
    $this->client_type = $s['client_type'] ?? '';
    $this->scopes = $s['scopes'] ?? vec[];
  }
}

class RegisterClientResponse {
  public ?URI $authorization_endpoint;
  public ?ClientId $client_id;
  public ?LongTimeStampType $client_id_issued_at;
  public ?ClientSecret $client_secret;
  public ?LongTimeStampType $client_secret_expires_at;
  public ?URI $token_endpoint;

  public function __construct(shape(
    ?'authorization_endpoint' => ?URI,
    ?'client_id' => ?ClientId,
    ?'client_id_issued_at' => ?LongTimeStampType,
    ?'client_secret' => ?ClientSecret,
    ?'client_secret_expires_at' => ?LongTimeStampType,
    ?'token_endpoint' => ?URI,
  ) $s = shape()) {
    $this->authorization_endpoint = $s['authorization_endpoint'] ?? '';
    $this->client_id = $s['client_id'] ?? '';
    $this->client_id_issued_at = $s['client_id_issued_at'] ?? 0;
    $this->client_secret = $s['client_secret'] ?? '';
    $this->client_secret_expires_at = $s['client_secret_expires_at'] ?? 0;
    $this->token_endpoint = $s['token_endpoint'] ?? '';
  }
}

type Scope = string;

type Scopes = vec<Scope>;

class SlowDownException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

class StartDeviceAuthorizationRequest {
  public ?ClientId $client_id;
  public ?ClientSecret $client_secret;
  public ?URI $start_url;

  public function __construct(shape(
    ?'client_id' => ?ClientId,
    ?'client_secret' => ?ClientSecret,
    ?'start_url' => ?URI,
  ) $s = shape()) {
    $this->client_id = $s['client_id'] ?? '';
    $this->client_secret = $s['client_secret'] ?? '';
    $this->start_url = $s['start_url'] ?? '';
  }
}

class StartDeviceAuthorizationResponse {
  public ?DeviceCode $device_code;
  public ?ExpirationInSeconds $expires_in;
  public ?IntervalInSeconds $interval;
  public ?UserCode $user_code;
  public ?URI $verification_uri;
  public ?URI $verification_uri_complete;

  public function __construct(shape(
    ?'device_code' => ?DeviceCode,
    ?'expires_in' => ?ExpirationInSeconds,
    ?'interval' => ?IntervalInSeconds,
    ?'user_code' => ?UserCode,
    ?'verification_uri' => ?URI,
    ?'verification_uri_complete' => ?URI,
  ) $s = shape()) {
    $this->device_code = $s['device_code'] ?? '';
    $this->expires_in = $s['expires_in'] ?? 0;
    $this->interval = $s['interval'] ?? 0;
    $this->user_code = $s['user_code'] ?? '';
    $this->verification_uri = $s['verification_uri'] ?? '';
    $this->verification_uri_complete = $s['verification_uri_complete'] ?? '';
  }
}

type TokenType = string;

type URI = string;

class UnauthorizedClientException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

class UnsupportedGrantTypeException {
  public ?Error $error;
  public ?ErrorDescription $error_description;

  public function __construct(shape(
    ?'error' => ?Error,
    ?'error_description' => ?ErrorDescription,
  ) $s = shape()) {
    $this->error = $s['error'] ?? '';
    $this->error_description = $s['error_description'] ?? '';
  }
}

type UserCode = string;

