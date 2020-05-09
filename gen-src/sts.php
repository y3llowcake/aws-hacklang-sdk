<?hh // strict
namespace slack\aws\sts;

interface STS {
  public function AssumeRole(AssumeRoleRequest): Awaitable<Errors\Result<AssumeRoleResponse>>;
  public function AssumeRoleWithSAML(AssumeRoleWithSAMLRequest): Awaitable<Errors\Result<AssumeRoleWithSAMLResponse>>;
  public function AssumeRoleWithWebIdentity(AssumeRoleWithWebIdentityRequest): Awaitable<Errors\Result<AssumeRoleWithWebIdentityResponse>>;
  public function DecodeAuthorizationMessage(DecodeAuthorizationMessageRequest): Awaitable<Errors\Result<DecodeAuthorizationMessageResponse>>;
  public function GetAccessKeyInfo(GetAccessKeyInfoRequest): Awaitable<Errors\Result<GetAccessKeyInfoResponse>>;
  public function GetCallerIdentity(GetCallerIdentityRequest): Awaitable<Errors\Result<GetCallerIdentityResponse>>;
  public function GetFederationToken(GetFederationTokenRequest): Awaitable<Errors\Result<GetFederationTokenResponse>>;
  public function GetSessionToken(GetSessionTokenRequest): Awaitable<Errors\Result<GetSessionTokenResponse>>;
}

class AssumeRoleRequest {
  public roleDurationSecondsType $duration_seconds;
  public externalIdType $external_id;
  public sessionPolicyDocumentType $policy;
  public policyDescriptorListType $policy_arns;
  public arnType $role_arn;
  public roleSessionNameType $role_session_name;
  public serialNumberType $serial_number;
  public tagListType $tags;
  public tokenCodeType $token_code;
  public tagKeyListType $transitive_tag_keys;
}

class AssumeRoleResponse {
  public AssumedRoleUser $assumed_role_user;
  public Credentials $credentials;
  public nonNegativeIntegerType $packed_policy_size;
}

class AssumeRoleWithSAMLRequest {
  public roleDurationSecondsType $duration_seconds;
  public sessionPolicyDocumentType $policy;
  public policyDescriptorListType $policy_arns;
  public arnType $principal_arn;
  public arnType $role_arn;
  public SAMLAssertionType $saml_assertion;
}

class AssumeRoleWithSAMLResponse {
  public AssumedRoleUser $assumed_role_user;
  public Audience $audience;
  public Credentials $credentials;
  public Issuer $issuer;
  public NameQualifier $name_qualifier;
  public nonNegativeIntegerType $packed_policy_size;
  public Subject $subject;
  public SubjectType $subject_type;
}

class AssumeRoleWithWebIdentityRequest {
  public roleDurationSecondsType $duration_seconds;
  public sessionPolicyDocumentType $policy;
  public policyDescriptorListType $policy_arns;
  public urlType $provider_id;
  public arnType $role_arn;
  public roleSessionNameType $role_session_name;
  public clientTokenType $web_identity_token;
}

class AssumeRoleWithWebIdentityResponse {
  public AssumedRoleUser $assumed_role_user;
  public Audience $audience;
  public Credentials $credentials;
  public nonNegativeIntegerType $packed_policy_size;
  public Issuer $provider;
  public webIdentitySubjectType $subject_from_web_identity_token;
}

class AssumedRoleUser {
  public arnType $arn;
  public assumedRoleIdType $assumed_role_id;
}

class Audience {
}

class Credentials {
  public accessKeyIdType $access_key_id;
  public dateType $expiration;
  public accessKeySecretType $secret_access_key;
  public tokenType $session_token;
}

class DecodeAuthorizationMessageRequest {
  public encodedMessageType $encoded_message;
}

class DecodeAuthorizationMessageResponse {
  public decodedMessageType $decoded_message;
}

class ExpiredTokenException {
  public expiredIdentityTokenMessage $message;
}

class FederatedUser {
  public arnType $arn;
  public federatedIdType $federated_user_id;
}

class GetAccessKeyInfoRequest {
  public accessKeyIdType $access_key_id;
}

class GetAccessKeyInfoResponse {
  public accountType $account;
}

class GetCallerIdentityRequest {
}

class GetCallerIdentityResponse {
  public accountType $account;
  public arnType $arn;
  public userIdType $user_id;
}

class GetFederationTokenRequest {
  public durationSecondsType $duration_seconds;
  public userNameType $name;
  public sessionPolicyDocumentType $policy;
  public policyDescriptorListType $policy_arns;
  public tagListType $tags;
}

class GetFederationTokenResponse {
  public Credentials $credentials;
  public FederatedUser $federated_user;
  public nonNegativeIntegerType $packed_policy_size;
}

class GetSessionTokenRequest {
  public durationSecondsType $duration_seconds;
  public serialNumberType $serial_number;
  public tokenCodeType $token_code;
}

class GetSessionTokenResponse {
  public Credentials $credentials;
}

class IDPCommunicationErrorException {
  public idpCommunicationErrorMessage $message;
}

class IDPRejectedClaimException {
  public idpRejectedClaimMessage $message;
}

class InvalidAuthorizationMessageException {
  public invalidAuthorizationMessage $message;
}

class InvalidIdentityTokenException {
  public invalidIdentityTokenMessage $message;
}

class Issuer {
}

class MalformedPolicyDocumentException {
  public malformedPolicyDocumentMessage $message;
}

class NameQualifier {
}

class PackedPolicyTooLargeException {
  public packedPolicyTooLargeMessage $message;
}

class PolicyDescriptorType {
  public arnType $arn;
}

class RegionDisabledException {
  public regionDisabledMessage $message;
}

class SAMLAssertionType {
}

class Subject {
}

class SubjectType {
}

class Tag {
  public tagKeyType $key;
  public tagValueType $value;
}

class accessKeyIdType {
}

class accessKeySecretType {
}

class accountType {
}

class arnType {
}

class assumedRoleIdType {
}

class clientTokenType {
}

class dateType {
}

class decodedMessageType {
}

class durationSecondsType {
}

class encodedMessageType {
}

class expiredIdentityTokenMessage {
}

class externalIdType {
}

class federatedIdType {
}

class idpCommunicationErrorMessage {
}

class idpRejectedClaimMessage {
}

class invalidAuthorizationMessage {
}

class invalidIdentityTokenMessage {
}

class malformedPolicyDocumentMessage {
}

class nonNegativeIntegerType {
}

class packedPolicyTooLargeMessage {
}

class policyDescriptorListType {
}

class regionDisabledMessage {
}

class roleDurationSecondsType {
}

class roleSessionNameType {
}

class serialNumberType {
}

class sessionPolicyDocumentType {
}

class tagKeyListType {
}

class tagKeyType {
}

class tagListType {
}

class tagValueType {
}

class tokenCodeType {
}

class tokenType {
}

class urlType {
}

class userIdType {
}

class userNameType {
}

class webIdentitySubjectType {
}

