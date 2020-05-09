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

class ARNString {
}

class AccessKeyString {
}

class AccountId {
}

class AmbiguousRoleResolutionType {
}

class ClaimName {
}

class ClaimValue {
}

class ClassicFlow {
}

class CognitoIdentityProvider {
  public CognitoIdentityProviderClientId $client_id;
  public CognitoIdentityProviderName $provider_name;
  public CognitoIdentityProviderTokenCheck $server_side_token_check;
}

class CognitoIdentityProviderClientId {
}

class CognitoIdentityProviderList {
}

class CognitoIdentityProviderName {
}

class CognitoIdentityProviderTokenCheck {
}

class ConcurrentModificationException {
  public string $message;
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
}

class Credentials {
  public AccessKeyString $access_key_id;
  public DateType $expiration;
  public SecretKeyString $secret_key;
  public SessionTokenString $session_token;
}

class DateType {
}

class DeleteIdentitiesInput {
  public IdentityIdList $identity_ids_to_delete;
}

class DeleteIdentitiesResponse {
  public UnprocessedIdentityIdList $unprocessed_identity_ids;
}

class DeleteIdentityPoolInput {
  public IdentityPoolId $identity_pool_id;
}

class DescribeIdentityInput {
  public IdentityId $identity_id;
}

class DescribeIdentityPoolInput {
  public IdentityPoolId $identity_pool_id;
}

class DeveloperProviderName {
}

class DeveloperUserAlreadyRegisteredException {
  public string $message;
}

class DeveloperUserIdentifier {
}

class DeveloperUserIdentifierList {
}

class ErrorCode {
}

class ExternalServiceException {
  public string $message;
}

class GetCredentialsForIdentityInput {
  public ARNString $custom_role_arn;
  public IdentityId $identity_id;
  public LoginsMap $logins;
}

class GetCredentialsForIdentityResponse {
  public Credentials $credentials;
  public IdentityId $identity_id;
}

class GetIdInput {
  public AccountId $account_id;
  public IdentityPoolId $identity_pool_id;
  public LoginsMap $logins;
}

class GetIdResponse {
  public IdentityId $identity_id;
}

class GetIdentityPoolRolesInput {
  public IdentityPoolId $identity_pool_id;
}

class GetIdentityPoolRolesResponse {
  public IdentityPoolId $identity_pool_id;
  public RoleMappingMap $role_mappings;
  public RolesMap $roles;
}

class GetOpenIdTokenForDeveloperIdentityInput {
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public LoginsMap $logins;
  public TokenDuration $token_duration;
}

class GetOpenIdTokenForDeveloperIdentityResponse {
  public IdentityId $identity_id;
  public OIDCToken $token;
}

class GetOpenIdTokenInput {
  public IdentityId $identity_id;
  public LoginsMap $logins;
}

class GetOpenIdTokenResponse {
  public IdentityId $identity_id;
  public OIDCToken $token;
}

class HideDisabled {
}

class IdentitiesList {
}

class IdentityDescription {
  public DateType $creation_date;
  public IdentityId $identity_id;
  public DateType $last_modified_date;
  public LoginsList $logins;
}

class IdentityId {
}

class IdentityIdList {
}

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
}

class IdentityPoolId {
}

class IdentityPoolName {
}

class IdentityPoolShortDescription {
  public IdentityPoolId $identity_pool_id;
  public IdentityPoolName $identity_pool_name;
}

class IdentityPoolTagsListType {
}

class IdentityPoolTagsType {
}

class IdentityPoolUnauthenticated {
}

class IdentityPoolsList {
}

class IdentityProviderId {
}

class IdentityProviderName {
}

class IdentityProviderToken {
}

class IdentityProviders {
}

class InternalErrorException {
  public string $message;
}

class InvalidIdentityPoolConfigurationException {
  public string $message;
}

class InvalidParameterException {
  public string $message;
}

class LimitExceededException {
  public string $message;
}

class ListIdentitiesInput {
  public HideDisabled $hide_disabled;
  public IdentityPoolId $identity_pool_id;
  public QueryLimit $max_results;
  public PaginationKey $next_token;
}

class ListIdentitiesResponse {
  public IdentitiesList $identities;
  public IdentityPoolId $identity_pool_id;
  public PaginationKey $next_token;
}

class ListIdentityPoolsInput {
  public QueryLimit $max_results;
  public PaginationKey $next_token;
}

class ListIdentityPoolsResponse {
  public IdentityPoolsList $identity_pools;
  public PaginationKey $next_token;
}

class ListTagsForResourceInput {
  public ARNString $resource_arn;
}

class ListTagsForResourceResponse {
  public IdentityPoolTagsType $tags;
}

class LoginsList {
}

class LoginsMap {
}

class LookupDeveloperIdentityInput {
  public DeveloperUserIdentifier $developer_user_identifier;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public QueryLimit $max_results;
  public PaginationKey $next_token;
}

class LookupDeveloperIdentityResponse {
  public DeveloperUserIdentifierList $developer_user_identifier_list;
  public IdentityId $identity_id;
  public PaginationKey $next_token;
}

class MappingRule {
  public ClaimName $claim;
  public MappingRuleMatchType $match_type;
  public ARNString $role_arn;
  public ClaimValue $value;
}

class MappingRuleMatchType {
}

class MappingRulesList {
}

class MergeDeveloperIdentitiesInput {
  public DeveloperUserIdentifier $destination_user_identifier;
  public DeveloperProviderName $developer_provider_name;
  public IdentityPoolId $identity_pool_id;
  public DeveloperUserIdentifier $source_user_identifier;
}

class MergeDeveloperIdentitiesResponse {
  public IdentityId $identity_id;
}

class NotAuthorizedException {
  public string $message;
}

class OIDCProviderList {
}

class OIDCToken {
}

class PaginationKey {
}

class QueryLimit {
}

class ResourceConflictException {
  public string $message;
}

class ResourceNotFoundException {
  public string $message;
}

class RoleMapping {
  public AmbiguousRoleResolutionType $ambiguous_role_resolution;
  public RulesConfigurationType $rules_configuration;
  public RoleMappingType $type;
}

class RoleMappingMap {
}

class RoleMappingType {
}

class RoleType {
}

class RolesMap {
}

class RulesConfigurationType {
  public MappingRulesList $rules;
}

class SAMLProviderList {
}

class SecretKeyString {
}

class SessionTokenString {
}

class SetIdentityPoolRolesInput {
  public IdentityPoolId $identity_pool_id;
  public RoleMappingMap $role_mappings;
  public RolesMap $roles;
}

class String {
}

class TagKeysType {
}

class TagResourceInput {
  public ARNString $resource_arn;
  public IdentityPoolTagsType $tags;
}

class TagResourceResponse {
}

class TagValueType {
}

class TokenDuration {
}

class TooManyRequestsException {
  public string $message;
}

class UnlinkDeveloperIdentityInput {
  public DeveloperProviderName $developer_provider_name;
  public DeveloperUserIdentifier $developer_user_identifier;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
}

class UnlinkIdentityInput {
  public IdentityId $identity_id;
  public LoginsMap $logins;
  public LoginsList $logins_to_remove;
}

class UnprocessedIdentityId {
  public ErrorCode $error_code;
  public IdentityId $identity_id;
}

class UnprocessedIdentityIdList {
}

class UntagResourceInput {
  public ARNString $resource_arn;
  public IdentityPoolTagsListType $tag_keys;
}

class UntagResourceResponse {
}

