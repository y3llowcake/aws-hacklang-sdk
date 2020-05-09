<?hh // strict
namespace slack\aws\cognito-identity;

interface Cognito Identity {
  public function CreateIdentityPool(CreateIdentityPoolInput) Awaitable<Errors\Result<IdentityPool>>;
  public function DescribeIdentityPool(DescribeIdentityPoolInput) Awaitable<Errors\Result<IdentityPool>>;
  public function GetOpenIdToken(GetOpenIdTokenInput) Awaitable<Errors\Result<GetOpenIdTokenResponse>>;
  public function ListTagsForResource(ListTagsForResourceInput) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function SetIdentityPoolRoles(SetIdentityPoolRolesInput) Awaitable<Errors\Error>;
  public function UnlinkDeveloperIdentity(UnlinkDeveloperIdentityInput) Awaitable<Errors\Error>;
  public function UnlinkIdentity(UnlinkIdentityInput) Awaitable<Errors\Error>;
  public function GetCredentialsForIdentity(GetCredentialsForIdentityInput) Awaitable<Errors\Result<GetCredentialsForIdentityResponse>>;
  public function ListIdentityPools(ListIdentityPoolsInput) Awaitable<Errors\Result<ListIdentityPoolsResponse>>;
  public function MergeDeveloperIdentities(MergeDeveloperIdentitiesInput) Awaitable<Errors\Result<MergeDeveloperIdentitiesResponse>>;
  public function DeleteIdentityPool(DeleteIdentityPoolInput) Awaitable<Errors\Error>;
  public function GetId(GetIdInput) Awaitable<Errors\Result<GetIdResponse>>;
  public function ListIdentities(ListIdentitiesInput) Awaitable<Errors\Result<ListIdentitiesResponse>>;
  public function LookupDeveloperIdentity(LookupDeveloperIdentityInput) Awaitable<Errors\Result<LookupDeveloperIdentityResponse>>;
  public function DeleteIdentities(DeleteIdentitiesInput) Awaitable<Errors\Result<DeleteIdentitiesResponse>>;
  public function DescribeIdentity(DescribeIdentityInput) Awaitable<Errors\Result<IdentityDescription>>;
  public function GetIdentityPoolRoles(GetIdentityPoolRolesInput) Awaitable<Errors\Result<GetIdentityPoolRolesResponse>>;
  public function GetOpenIdTokenForDeveloperIdentity(GetOpenIdTokenForDeveloperIdentityInput) Awaitable<Errors\Result<GetOpenIdTokenForDeveloperIdentityResponse>>;
  public function TagResource(TagResourceInput) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceInput) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateIdentityPool(IdentityPool) Awaitable<Errors\Result<IdentityPool>>;
}

class GetCredentialsForIdentityResponse {
  public IdentityId $identity_id;
  public Credentials $credentials;
}

class GetIdInput {
  public LoginsMap $logins;
  public AccountId $account_id;
  public IdentityPoolId $identity_pool_id;
}

class LoginsList {
}

class LoginsMap {
}

class MappingRulesList {
}

class ResourceNotFoundException {
  public string $message;
}

class SAMLProviderList {
}

class DescribeIdentityPoolInput {
  public IdentityPoolId $identity_pool_id;
}

class ExternalServiceException {
  public string $message;
}

class GetOpenIdTokenForDeveloperIdentityInput {
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
  public LoginsMap $logins;
  public TokenDuration $token_duration;
}

class GetOpenIdTokenForDeveloperIdentityResponse {
  public IdentityId $identity_id;
  public OIDCToken $token;
}

class TagResourceResponse {
}

class ResourceConflictException {
  public string $message;
}

class UnlinkIdentityInput {
  public IdentityId $identity_id;
  public LoginsMap $logins;
  public LoginsList $logins_to_remove;
}

class DeleteIdentitiesInput {
  public IdentityIdList $identity_ids_to_delete;
}

class DeveloperUserIdentifierList {
}

class GetOpenIdTokenResponse {
  public IdentityId $identity_id;
  public OIDCToken $token;
}

class ListTagsForResourceInput {
  public ARNString $resource_arn;
}

class ListTagsForResourceResponse {
  public IdentityPoolTagsType $tags;
}

class NotAuthorizedException {
  public string $message;
}

class OIDCToken {
}

class RoleMapping {
  public RoleMappingType $type;
  public AmbiguousRoleResolutionType $ambiguous_role_resolution;
  public RulesConfigurationType $rules_configuration;
}

class Credentials {
  public SecretKeyString $secret_key;
  public SessionTokenString $session_token;
  public DateType $expiration;
  public AccessKeyString $access_key_id;
}

class DateType {
}

class IdentityPoolUnauthenticated {
}

class IdentityProviderToken {
}

class ListIdentityPoolsResponse {
  public PaginationKey $next_token;
  public IdentityPoolsList $identity_pools;
}

class MergeDeveloperIdentitiesInput {
  public DeveloperUserIdentifier $source_user_identifier;
  public DeveloperUserIdentifier $destination_user_identifier;
  public DeveloperProviderName $developer_provider_name;
  public IdentityPoolId $identity_pool_id;
}

class TokenDuration {
}

class ClassicFlow {
}

class CognitoIdentityProvider {
  public CognitoIdentityProviderName $provider_name;
  public CognitoIdentityProviderClientId $client_id;
  public CognitoIdentityProviderTokenCheck $server_side_token_check;
}

class CognitoIdentityProviderClientId {
}

class MappingRuleMatchType {
}

class String {
}

class TooManyRequestsException {
  public string $message;
}

class CognitoIdentityProviderList {
}

class IdentityId {
}

class IdentityProviders {
}

class LookupDeveloperIdentityInput {
  public QueryLimit $max_results;
  public PaginationKey $next_token;
  public IdentityPoolId $identity_pool_id;
  public IdentityId $identity_id;
  public DeveloperUserIdentifier $developer_user_identifier;
}

class TagResourceInput {
  public ARNString $resource_arn;
  public IdentityPoolTagsType $tags;
}

class UnlinkDeveloperIdentityInput {
  public DeveloperUserIdentifier $developer_user_identifier;
  public IdentityId $identity_id;
  public IdentityPoolId $identity_pool_id;
  public DeveloperProviderName $developer_provider_name;
}

class RoleType {
}

class SecretKeyString {
}

class CognitoIdentityProviderName {
}

class DeveloperUserAlreadyRegisteredException {
  public string $message;
}

class IdentityPoolId {
}

class MergeDeveloperIdentitiesResponse {
  public IdentityId $identity_id;
}

class PaginationKey {
}

class RoleMappingMap {
}

class UnprocessedIdentityId {
  public IdentityId $identity_id;
  public ErrorCode $error_code;
}

class UnprocessedIdentityIdList {
}

class DescribeIdentityInput {
  public IdentityId $identity_id;
}

class ErrorCode {
}

class IdentityDescription {
  public DateType $last_modified_date;
  public IdentityId $identity_id;
  public LoginsList $logins;
  public DateType $creation_date;
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

class IdentityPoolTagsType {
}

class ListIdentitiesInput {
  public PaginationKey $next_token;
  public HideDisabled $hide_disabled;
  public IdentityPoolId $identity_pool_id;
  public QueryLimit $max_results;
}

class AccountId {
}

class ClaimName {
}

class GetIdResponse {
  public IdentityId $identity_id;
}

class GetOpenIdTokenInput {
  public IdentityId $identity_id;
  public LoginsMap $logins;
}

class HideDisabled {
}

class IdentityPoolName {
}

class LookupDeveloperIdentityResponse {
  public IdentityId $identity_id;
  public DeveloperUserIdentifierList $developer_user_identifier_list;
  public PaginationKey $next_token;
}

class RoleMappingType {
}

class UntagResourceResponse {
}

class ARNString {
}

class DeveloperProviderName {
}

class IdentitiesList {
}

class IdentityPool {
  public IdentityPoolId $identity_pool_id;
  public ClassicFlow $allow_classic_flow;
  public IdentityProviders $supported_login_providers;
  public DeveloperProviderName $developer_provider_name;
  public OIDCProviderList $open_id_connect_provider_ar_ns;
  public IdentityPoolName $identity_pool_name;
  public IdentityPoolUnauthenticated $allow_unauthenticated_identities;
  public CognitoIdentityProviderList $cognito_identity_providers;
  public SAMLProviderList $saml_provider_ar_ns;
  public IdentityPoolTagsType $identity_pool_tags;
}

class IdentityPoolTagsListType {
}

class ListIdentitiesResponse {
  public IdentityPoolId $identity_pool_id;
  public IdentitiesList $identities;
  public PaginationKey $next_token;
}

class RulesConfigurationType {
  public MappingRulesList $rules;
}

class UntagResourceInput {
  public ARNString $resource_arn;
  public IdentityPoolTagsListType $tag_keys;
}

class ClaimValue {
}

class IdentityPoolShortDescription {
  public IdentityPoolId $identity_pool_id;
  public IdentityPoolName $identity_pool_name;
}

class IdentityProviderId {
}

class IdentityProviderName {
}

class MappingRule {
  public ClaimName $claim;
  public MappingRuleMatchType $match_type;
  public ClaimValue $value;
  public ARNString $role_arn;
}

class QueryLimit {
}

class DeleteIdentitiesResponse {
  public UnprocessedIdentityIdList $unprocessed_identity_ids;
}

class GetIdentityPoolRolesResponse {
  public IdentityPoolId $identity_pool_id;
  public RolesMap $roles;
  public RoleMappingMap $role_mappings;
}

class DeleteIdentityPoolInput {
  public IdentityPoolId $identity_pool_id;
}

class IdentityPoolsList {
}

class RolesMap {
}

class TagValueType {
}

class AccessKeyString {
}

class AmbiguousRoleResolutionType {
}

class GetIdentityPoolRolesInput {
  public IdentityPoolId $identity_pool_id;
}

class InternalErrorException {
  public string $message;
}

class ListIdentityPoolsInput {
  public QueryLimit $max_results;
  public PaginationKey $next_token;
}

class SessionTokenString {
}

class OIDCProviderList {
}

class SetIdentityPoolRolesInput {
  public RolesMap $roles;
  public RoleMappingMap $role_mappings;
  public IdentityPoolId $identity_pool_id;
}

class CognitoIdentityProviderTokenCheck {
}

class ConcurrentModificationException {
  public string $message;
}

class CreateIdentityPoolInput {
  public OIDCProviderList $open_id_connect_provider_ar_ns;
  public SAMLProviderList $saml_provider_ar_ns;
  public IdentityPoolName $identity_pool_name;
  public IdentityPoolUnauthenticated $allow_unauthenticated_identities;
  public IdentityProviders $supported_login_providers;
  public DeveloperProviderName $developer_provider_name;
  public ClassicFlow $allow_classic_flow;
  public CognitoIdentityProviderList $cognito_identity_providers;
  public IdentityPoolTagsType $identity_pool_tags;
}

class DeveloperUserIdentifier {
}

class GetCredentialsForIdentityInput {
  public ARNString $custom_role_arn;
  public IdentityId $identity_id;
  public LoginsMap $logins;
}

class IdentityIdList {
}

class TagKeysType {
}

