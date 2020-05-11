<?hh // strict
namespace slack\aws\cognito-identity;

interface Cognito Identity {
  public function CreateIdentityPool(CreateIdentityPoolInput): Awaitable<Errors\Result<IdentityPool>>;
  public function DeleteIdentities(DeleteIdentitiesInput): Awaitable<Errors\Result<DeleteIdentitiesResponse>>;
  public function DeleteIdentityPool(DeleteIdentityPoolInput): Awaitable<Errors\Error>;
  public function DescribeIdentity(DescribeIdentityInput): Awaitable<Errors\Result<IdentityDescription>>;
  public function DescribeIdentityPool(DescribeIdentityPoolInput): Awaitable<Errors\Result<IdentityPool>>;
  public function GetCredentialsForIdentity(GetCredentialsForIdentityInput): Awaitable<Errors\Result<GetCredentialsForIdentityResponse>>;
  public function GetId(GetIdInput): Awaitable<Errors\Result<GetIdResponse>>;
  public function GetIdentityPoolRoles(GetIdentityPoolRolesInput): Awaitable<Errors\Result<GetIdentityPoolRolesResponse>>;
  public function GetOpenIdToken(GetOpenIdTokenInput): Awaitable<Errors\Result<GetOpenIdTokenResponse>>;
  public function GetOpenIdTokenForDeveloperIdentity(GetOpenIdTokenForDeveloperIdentityInput): Awaitable<Errors\Result<GetOpenIdTokenForDeveloperIdentityResponse>>;
  public function ListIdentities(ListIdentitiesInput): Awaitable<Errors\Result<ListIdentitiesResponse>>;
  public function ListIdentityPools(ListIdentityPoolsInput): Awaitable<Errors\Result<ListIdentityPoolsResponse>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function LookupDeveloperIdentity(LookupDeveloperIdentityInput): Awaitable<Errors\Result<LookupDeveloperIdentityResponse>>;
  public function MergeDeveloperIdentities(MergeDeveloperIdentitiesInput): Awaitable<Errors\Result<MergeDeveloperIdentitiesResponse>>;
  public function SetIdentityPoolRoles(SetIdentityPoolRolesInput): Awaitable<Errors\Error>;
  public function TagResource(TagResourceInput): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UnlinkDeveloperIdentity(UnlinkDeveloperIdentityInput): Awaitable<Errors\Error>;
  public function UnlinkIdentity(UnlinkIdentityInput): Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceInput): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateIdentityPool(IdentityPool): Awaitable<Errors\Result<IdentityPool>>;
}

type ARNString = string;

type AccessKeyString = string;

type AccountId = string;

type AmbiguousRoleResolutionType = string;

type ClaimName = string;

type ClaimValue = string;

type ClassicFlow = bool;

class CognitoIdentityProvider {
  public CognitoIdentityProviderClientId $client_id;
  public CognitoIdentityProviderName $provider_name;
  public CognitoIdentityProviderTokenCheck $server_side_token_check;

  public function __construct(shape(
  ?'client_id' => CognitoIdentityProviderClientId,
  ?'provider_name' => CognitoIdentityProviderName,
  ?'server_side_token_check' => CognitoIdentityProviderTokenCheck,
  ) $s = shape()) {
    $this->client_id = $client_id ?? ;
    $this->provider_name = $provider_name ?? ;
    $this->server_side_token_check = $server_side_token_check ?? ;
  }
}

type CognitoIdentityProviderClientId = string;

type CognitoIdentityProviderList = vec<CognitoIdentityProvider>;

type CognitoIdentityProviderName = string;

type CognitoIdentityProviderTokenCheck = bool;

class ConcurrentModificationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class CreateIdentityPoolInput {
  public ClassicFlow $allow_classic_flow;
  public IdentityPoolUnauthenticated $allow_unauthenticated_identities;
  public CognitoIdentityProviderList $cognito_identity_providers;
  public DeveloperProviderName $developer_provider_name;
  public IdentityPoolName $identity_pool_name;
  public IdentityPoolTagsType $identity_pool_tags;
  public OIDCProviderList $open_id_connect_provider_ar_ns;
  public SAMLProviderList $saml_provider_ar_ns;
  public IdentityProviders $supported_login_providers;

  public function __construct(shape(
  ?'allow_classic_flow' => ClassicFlow,
  ?'allow_unauthenticated_identities' => IdentityPoolUnauthenticated,
  ?'cognito_identity_providers' => CognitoIdentityProviderList,
  ?'developer_provider_name' => DeveloperProviderName,
  ?'identity_pool_name' => IdentityPoolName,
  ?'identity_pool_tags' => IdentityPoolTagsType,
  ?'open_id_connect_provider_ar_ns' => OIDCProviderList,
  ?'saml_provider_ar_ns' => SAMLProviderList,
  ?'supported_login_providers' => IdentityProviders,
  ) $s = shape()) {
    $this->allow_classic_flow = $allow_classic_flow ?? ;
    $this->allow_unauthenticated_identities = $allow_unauthenticated_identities ?? ;
    $this->cognito_identity_providers = $cognito_identity_providers ?? ;
    $this->developer_provider_name = $developer_provider_name ?? "";
    $this->identity_pool_name = $identity_pool_name ?? "";
    $this->identity_pool_tags = $identity_pool_tags ?? ;
    $this->open_id_connect_provider_ar_ns = $open_id_connect_provider_ar_ns ?? ;
    $this->saml_provider_ar_ns = $saml_provider_ar_ns ?? ;
    $this->supported_login_providers = $supported_login_providers ?? ;
  }
}

class Credentials {
  public AccessKeyString $access_key_id;
  public DateType $expiration;
  public SecretKeyString $secret_key;
  public SessionTokenString $session_token;

  public function __construct(shape(
  ?'access_key_id' => AccessKeyString,
  ?'expiration' => DateType,
  ?'secret_key' => SecretKeyString,
  ?'session_token' => SessionTokenString,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? ;
    $this->expiration = $expiration ?? ;
    $this->secret_key = $secret_key ?? ;
    $this->session_token = $session_token ?? ;
  }
}

type DateType = int;

class DeleteIdentitiesInput {
  public IdentityIdList $identity_ids_to_delete;

  public function __construct(shape(
  ?'identity_ids_to_delete' => IdentityIdList,
  ) $s = shape()) {
    $this->identity_ids_to_delete = $identity_ids_to_delete ?? ;
  }
}

class DeleteIdentitiesResponse {
  public UnprocessedIdentityIdList $unprocessed_identity_ids;

  public function __construct(shape(
  ?'unprocessed_identity_ids' => UnprocessedIdentityIdList,
  ) $s = shape()) {
    $this->unprocessed_identity_ids = $unprocessed_identity_ids ?? ;
  }
}

class DeleteIdentityPoolInput {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class DescribeIdentityInput {
  public IdentityId $identity_id;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
  }
}

class DescribeIdentityPoolInput {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

type DeveloperProviderName = string;

class DeveloperUserAlreadyRegisteredException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type DeveloperUserIdentifier = string;

type DeveloperUserIdentifierList = vec<DeveloperUserIdentifier>;

type ErrorCode = string;

class ExternalServiceException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class GetCredentialsForIdentityInput {
  public ARNString $custom_role_arn;
  public IdentityId $identity_id;
  public LoginsMap $logins;

  public function __construct(shape(
  ?'custom_role_arn' => ARNString,
  ?'identity_id' => IdentityId,
  ?'logins' => LoginsMap,
  ) $s = shape()) {
    $this->custom_role_arn = $custom_role_arn ?? ;
    $this->identity_id = $identity_id ?? "";
    $this->logins = $logins ?? ;
  }
}

class GetCredentialsForIdentityResponse {
  public Credentials $credentials;
  public IdentityId $identity_id;

  public function __construct(shape(
  ?'credentials' => Credentials,
  ?'identity_id' => IdentityId,
  ) $s = shape()) {
    $this->credentials = $credentials ?? null;
    $this->identity_id = $identity_id ?? "";
  }
}

class GetIdInput {
  public AccountId $account_id;
  public IdentityPoolId $identity_pool_id;
  public LoginsMap $logins;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'logins' => LoginsMap,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->logins = $logins ?? ;
  }
}

class GetIdResponse {
  public IdentityId $identity_id;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
  }
}

class GetIdentityPoolRolesInput {
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class GetIdentityPoolRolesResponse {
  public IdentityPoolId $identity_pool_id;
  public RoleMappingMap $role_mappings;
  public RolesMap $roles;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ?'role_mappings' => RoleMappingMap,
  ?'roles' => RolesMap,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->role_mappings = $role_mappings ?? ;
    $this->roles = $roles ?? ;
  }
}

class GetOpenIdTokenForDeveloperIdentityInput {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public LoginsMap $logins;
  public TokenDuration $token_duration;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'logins' => LoginsMap,
  ?'token_duration' => TokenDuration,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->logins = $logins ?? ;
    $this->token_duration = $token_duration ?? 0;
  }
}

class GetOpenIdTokenForDeveloperIdentityResponse {
  public IdentityId $identity_id;
  public OIDCToken $token;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'token' => OIDCToken,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->token = $token ?? ;
  }
}

class GetOpenIdTokenInput {
  public IdentityId $identity_id;
  public LoginsMap $logins;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'logins' => LoginsMap,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->logins = $logins ?? ;
  }
}

class GetOpenIdTokenResponse {
  public IdentityId $identity_id;
  public OIDCToken $token;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'token' => OIDCToken,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->token = $token ?? ;
  }
}

type HideDisabled = bool;

type IdentitiesList = vec<IdentityDescription>;

class IdentityDescription {
  public DateType $creation_date;
  public IdentityId $identity_id;
  public DateType $last_modified_date;
  public LoginsList $logins;

  public function __construct(shape(
  ?'creation_date' => DateType,
  ?'identity_id' => IdentityId,
  ?'last_modified_date' => DateType,
  ?'logins' => LoginsList,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->identity_id = $identity_id ?? "";
    $this->last_modified_date = $last_modified_date ?? ;
    $this->logins = $logins ?? ;
  }
}

type IdentityId = string;

type IdentityIdList = vec<IdentityId>;

class IdentityPool {
  public ClassicFlow $allow_classic_flow;
  public IdentityPoolUnauthenticated $allow_unauthenticated_identities;
  public CognitoIdentityProviderList $cognito_identity_providers;
  public DeveloperProviderName $developer_provider_name;
  public IdentityPoolId $identity_pool_id;
  public IdentityPoolName $identity_pool_name;
  public IdentityPoolTagsType $identity_pool_tags;
  public OIDCProviderList $open_id_connect_provider_ar_ns;
  public SAMLProviderList $saml_provider_ar_ns;
  public IdentityProviders $supported_login_providers;

  public function __construct(shape(
  ?'allow_classic_flow' => ClassicFlow,
  ?'allow_unauthenticated_identities' => IdentityPoolUnauthenticated,
  ?'cognito_identity_providers' => CognitoIdentityProviderList,
  ?'developer_provider_name' => DeveloperProviderName,
  ?'identity_pool_id' => IdentityPoolId,
  ?'identity_pool_name' => IdentityPoolName,
  ?'identity_pool_tags' => IdentityPoolTagsType,
  ?'open_id_connect_provider_ar_ns' => OIDCProviderList,
  ?'saml_provider_ar_ns' => SAMLProviderList,
  ?'supported_login_providers' => IdentityProviders,
  ) $s = shape()) {
    $this->allow_classic_flow = $allow_classic_flow ?? ;
    $this->allow_unauthenticated_identities = $allow_unauthenticated_identities ?? ;
    $this->cognito_identity_providers = $cognito_identity_providers ?? ;
    $this->developer_provider_name = $developer_provider_name ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->identity_pool_name = $identity_pool_name ?? "";
    $this->identity_pool_tags = $identity_pool_tags ?? ;
    $this->open_id_connect_provider_ar_ns = $open_id_connect_provider_ar_ns ?? ;
    $this->saml_provider_ar_ns = $saml_provider_ar_ns ?? ;
    $this->supported_login_providers = $supported_login_providers ?? ;
  }
}

type IdentityPoolId = string;

type IdentityPoolName = string;

class IdentityPoolShortDescription {
  public IdentityPoolId $identity_pool_id;
  public IdentityPoolName $identity_pool_name;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ?'identity_pool_name' => IdentityPoolName,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->identity_pool_name = $identity_pool_name ?? "";
  }
}

type IdentityPoolTagsListType = vec<TagKeysType>;

type IdentityPoolTagsType = dict<TagKeysType, TagValueType>;

type IdentityPoolUnauthenticated = bool;

type IdentityPoolsList = vec<IdentityPoolShortDescription>;

type IdentityProviderId = string;

type IdentityProviderName = string;

type IdentityProviderToken = string;

type IdentityProviders = dict<IdentityProviderName, IdentityProviderId>;

class InternalErrorException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidIdentityPoolConfigurationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListIdentitiesInput {
  public HideDisabled $hide_disabled;
  public IdentityPoolId $identity_pool_id;
  public QueryLimit $max_results;
  public PaginationKey $next_token;

  public function __construct(shape(
  ?'hide_disabled' => HideDisabled,
  ?'identity_pool_id' => IdentityPoolId,
  ?'max_results' => QueryLimit,
  ?'next_token' => PaginationKey,
  ) $s = shape()) {
    $this->hide_disabled = $hide_disabled ?? false;
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListIdentitiesResponse {
  public IdentitiesList $identities;
  public IdentityPoolId $identity_pool_id;
  public PaginationKey $next_token;

  public function __construct(shape(
  ?'identities' => IdentitiesList,
  ?'identity_pool_id' => IdentityPoolId,
  ?'next_token' => PaginationKey,
  ) $s = shape()) {
    $this->identities = $identities ?? ;
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->next_token = $next_token ?? ;
  }
}

class ListIdentityPoolsInput {
  public QueryLimit $max_results;
  public PaginationKey $next_token;

  public function __construct(shape(
  ?'max_results' => QueryLimit,
  ?'next_token' => PaginationKey,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListIdentityPoolsResponse {
  public IdentityPoolsList $identity_pools;
  public PaginationKey $next_token;

  public function __construct(shape(
  ?'identity_pools' => IdentityPoolsList,
  ?'next_token' => PaginationKey,
  ) $s = shape()) {
    $this->identity_pools = $identity_pools ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListTagsForResourceInput {
  public ARNString $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ARNString,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public IdentityPoolTagsType $tags;

  public function __construct(shape(
  ?'tags' => IdentityPoolTagsType,
  ) $s = shape()) {
    $this->tags = $tags ?? ;
  }
}

type LoginsList = vec<IdentityProviderName>;

type LoginsMap = dict<IdentityProviderName, IdentityProviderToken>;

class LookupDeveloperIdentityInput {
  public DeveloperUserIdentifier $developer_user_identifier;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public QueryLimit $max_results;
  public PaginationKey $next_token;

  public function __construct(shape(
  ?'developer_user_identifier' => DeveloperUserIdentifier,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ?'max_results' => QueryLimit,
  ?'next_token' => PaginationKey,
  ) $s = shape()) {
    $this->developer_user_identifier = $developer_user_identifier ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class LookupDeveloperIdentityResponse {
  public DeveloperUserIdentifierList $developer_user_identifier_list;
  public IdentityId $identity_id;
  public PaginationKey $next_token;

  public function __construct(shape(
  ?'developer_user_identifier_list' => DeveloperUserIdentifierList,
  ?'identity_id' => IdentityId,
  ?'next_token' => PaginationKey,
  ) $s = shape()) {
    $this->developer_user_identifier_list = $developer_user_identifier_list ?? [];
    $this->identity_id = $identity_id ?? "";
    $this->next_token = $next_token ?? ;
  }
}

class MappingRule {
  public ClaimName $claim;
  public MappingRuleMatchType $match_type;
  public ARNString $role_arn;
  public ClaimValue $value;

  public function __construct(shape(
  ?'claim' => ClaimName,
  ?'match_type' => MappingRuleMatchType,
  ?'role_arn' => ARNString,
  ?'value' => ClaimValue,
  ) $s = shape()) {
    $this->claim = $claim ?? ;
    $this->match_type = $match_type ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->value = $value ?? ;
  }
}

type MappingRuleMatchType = string;

type MappingRulesList = vec<MappingRule>;

class MergeDeveloperIdentitiesInput {
  public DeveloperUserIdentifier $destination_user_identifier;
  public DeveloperProviderName $developer_provider_name;
  public IdentityPoolId $identity_pool_id;
  public DeveloperUserIdentifier $source_user_identifier;

  public function __construct(shape(
  ?'destination_user_identifier' => DeveloperUserIdentifier,
  ?'developer_provider_name' => DeveloperProviderName,
  ?'identity_pool_id' => IdentityPoolId,
  ?'source_user_identifier' => DeveloperUserIdentifier,
  ) $s = shape()) {
    $this->destination_user_identifier = $destination_user_identifier ?? ;
    $this->developer_provider_name = $developer_provider_name ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->source_user_identifier = $source_user_identifier ?? ;
  }
}

class MergeDeveloperIdentitiesResponse {
  public IdentityId $identity_id;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
  }
}

class NotAuthorizedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OIDCProviderList = vec<ARNString>;

type OIDCToken = string;

type PaginationKey = string;

type QueryLimit = int;

class ResourceConflictException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RoleMapping {
  public AmbiguousRoleResolutionType $ambiguous_role_resolution;
  public RulesConfigurationType $rules_configuration;
  public RoleMappingType $type;

  public function __construct(shape(
  ?'ambiguous_role_resolution' => AmbiguousRoleResolutionType,
  ?'rules_configuration' => RulesConfigurationType,
  ?'type' => RoleMappingType,
  ) $s = shape()) {
    $this->ambiguous_role_resolution = $ambiguous_role_resolution ?? ;
    $this->rules_configuration = $rules_configuration ?? ;
    $this->type = $type ?? ;
  }
}

type RoleMappingMap = dict<IdentityProviderName, RoleMapping>;

type RoleMappingType = string;

type RoleType = string;

type RolesMap = dict<RoleType, ARNString>;

class RulesConfigurationType {
  public MappingRulesList $rules;

  public function __construct(shape(
  ?'rules' => MappingRulesList,
  ) $s = shape()) {
    $this->rules = $rules ?? ;
  }
}

type SAMLProviderList = vec<ARNString>;

type SecretKeyString = string;

type SessionTokenString = string;

class SetIdentityPoolRolesInput {
  public IdentityPoolId $identity_pool_id;
  public RoleMappingMap $role_mappings;
  public RolesMap $roles;

  public function __construct(shape(
  ?'identity_pool_id' => IdentityPoolId,
  ?'role_mappings' => RoleMappingMap,
  ?'roles' => RolesMap,
  ) $s = shape()) {
    $this->identity_pool_id = $identity_pool_id ?? "";
    $this->role_mappings = $role_mappings ?? ;
    $this->roles = $roles ?? ;
  }
}

type String = string;

type TagKeysType = string;

class TagResourceInput {
  public ARNString $resource_arn;
  public IdentityPoolTagsType $tags;

  public function __construct(shape(
  ?'resource_arn' => ARNString,
  ?'tags' => IdentityPoolTagsType,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValueType = string;

type TokenDuration = int;

class TooManyRequestsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UnlinkDeveloperIdentityInput {
  public DeveloperProviderName $developer_provider_name;
  public DeveloperUserIdentifier $developer_user_identifier;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;

  public function __construct(shape(
  ?'developer_provider_name' => DeveloperProviderName,
  ?'developer_user_identifier' => DeveloperUserIdentifier,
  ?'identity_id' => IdentityId,
  ?'identity_pool_id' => IdentityPoolId,
  ) $s = shape()) {
    $this->developer_provider_name = $developer_provider_name ?? "";
    $this->developer_user_identifier = $developer_user_identifier ?? "";
    $this->identity_id = $identity_id ?? "";
    $this->identity_pool_id = $identity_pool_id ?? "";
  }
}

class UnlinkIdentityInput {
  public IdentityId $identity_id;
  public LoginsMap $logins;
  public LoginsList $logins_to_remove;

  public function __construct(shape(
  ?'identity_id' => IdentityId,
  ?'logins' => LoginsMap,
  ?'logins_to_remove' => LoginsList,
  ) $s = shape()) {
    $this->identity_id = $identity_id ?? "";
    $this->logins = $logins ?? ;
    $this->logins_to_remove = $logins_to_remove ?? ;
  }
}

class UnprocessedIdentityId {
  public ErrorCode $error_code;
  public IdentityId $identity_id;

  public function __construct(shape(
  ?'error_code' => ErrorCode,
  ?'identity_id' => IdentityId,
  ) $s = shape()) {
    $this->error_code = $error_code ?? "";
    $this->identity_id = $identity_id ?? "";
  }
}

type UnprocessedIdentityIdList = vec<UnprocessedIdentityId>;

class UntagResourceInput {
  public ARNString $resource_arn;
  public IdentityPoolTagsListType $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ARNString,
  ?'tag_keys' => IdentityPoolTagsListType,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

