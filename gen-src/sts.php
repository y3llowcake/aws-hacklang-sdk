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

  public function __construct(shape(
  ?'duration_seconds' => roleDurationSecondsType,
  ?'external_id' => externalIdType,
  ?'policy' => sessionPolicyDocumentType,
  ?'policy_arns' => policyDescriptorListType,
  ?'role_arn' => arnType,
  ?'role_session_name' => roleSessionNameType,
  ?'serial_number' => serialNumberType,
  ?'tags' => tagListType,
  ?'token_code' => tokenCodeType,
  ?'transitive_tag_keys' => tagKeyListType,
  ) $s = shape()) {
    $this->duration_seconds = $duration_seconds ?? ;
    $this->external_id = $external_id ?? ;
    $this->policy = $policy ?? ;
    $this->policy_arns = $policy_arns ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->role_session_name = $role_session_name ?? ;
    $this->serial_number = $serial_number ?? ;
    $this->tags = $tags ?? ;
    $this->token_code = $token_code ?? ;
    $this->transitive_tag_keys = $transitive_tag_keys ?? ;
  }
}

class AssumeRoleResponse {
  public AssumedRoleUser $assumed_role_user;
  public Credentials $credentials;
  public nonNegativeIntegerType $packed_policy_size;

  public function __construct(shape(
  ?'assumed_role_user' => AssumedRoleUser,
  ?'credentials' => Credentials,
  ?'packed_policy_size' => nonNegativeIntegerType,
  ) $s = shape()) {
    $this->assumed_role_user = $assumed_role_user ?? null;
    $this->credentials = $credentials ?? null;
    $this->packed_policy_size = $packed_policy_size ?? ;
  }
}

class AssumeRoleWithSAMLRequest {
  public roleDurationSecondsType $duration_seconds;
  public sessionPolicyDocumentType $policy;
  public policyDescriptorListType $policy_arns;
  public arnType $principal_arn;
  public arnType $role_arn;
  public SAMLAssertionType $saml_assertion;

  public function __construct(shape(
  ?'duration_seconds' => roleDurationSecondsType,
  ?'policy' => sessionPolicyDocumentType,
  ?'policy_arns' => policyDescriptorListType,
  ?'principal_arn' => arnType,
  ?'role_arn' => arnType,
  ?'saml_assertion' => SAMLAssertionType,
  ) $s = shape()) {
    $this->duration_seconds = $duration_seconds ?? ;
    $this->policy = $policy ?? ;
    $this->policy_arns = $policy_arns ?? ;
    $this->principal_arn = $principal_arn ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->saml_assertion = $saml_assertion ?? ;
  }
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

  public function __construct(shape(
  ?'assumed_role_user' => AssumedRoleUser,
  ?'audience' => Audience,
  ?'credentials' => Credentials,
  ?'issuer' => Issuer,
  ?'name_qualifier' => NameQualifier,
  ?'packed_policy_size' => nonNegativeIntegerType,
  ?'subject' => Subject,
  ?'subject_type' => SubjectType,
  ) $s = shape()) {
    $this->assumed_role_user = $assumed_role_user ?? null;
    $this->audience = $audience ?? "";
    $this->credentials = $credentials ?? null;
    $this->issuer = $issuer ?? "";
    $this->name_qualifier = $name_qualifier ?? "";
    $this->packed_policy_size = $packed_policy_size ?? ;
    $this->subject = $subject ?? "";
    $this->subject_type = $subject_type ?? "";
  }
}

class AssumeRoleWithWebIdentityRequest {
  public roleDurationSecondsType $duration_seconds;
  public sessionPolicyDocumentType $policy;
  public policyDescriptorListType $policy_arns;
  public urlType $provider_id;
  public arnType $role_arn;
  public roleSessionNameType $role_session_name;
  public clientTokenType $web_identity_token;

  public function __construct(shape(
  ?'duration_seconds' => roleDurationSecondsType,
  ?'policy' => sessionPolicyDocumentType,
  ?'policy_arns' => policyDescriptorListType,
  ?'provider_id' => urlType,
  ?'role_arn' => arnType,
  ?'role_session_name' => roleSessionNameType,
  ?'web_identity_token' => clientTokenType,
  ) $s = shape()) {
    $this->duration_seconds = $duration_seconds ?? ;
    $this->policy = $policy ?? ;
    $this->policy_arns = $policy_arns ?? ;
    $this->provider_id = $provider_id ?? ;
    $this->role_arn = $role_arn ?? ;
    $this->role_session_name = $role_session_name ?? ;
    $this->web_identity_token = $web_identity_token ?? ;
  }
}

class AssumeRoleWithWebIdentityResponse {
  public AssumedRoleUser $assumed_role_user;
  public Audience $audience;
  public Credentials $credentials;
  public nonNegativeIntegerType $packed_policy_size;
  public Issuer $provider;
  public webIdentitySubjectType $subject_from_web_identity_token;

  public function __construct(shape(
  ?'assumed_role_user' => AssumedRoleUser,
  ?'audience' => Audience,
  ?'credentials' => Credentials,
  ?'packed_policy_size' => nonNegativeIntegerType,
  ?'provider' => Issuer,
  ?'subject_from_web_identity_token' => webIdentitySubjectType,
  ) $s = shape()) {
    $this->assumed_role_user = $assumed_role_user ?? null;
    $this->audience = $audience ?? "";
    $this->credentials = $credentials ?? null;
    $this->packed_policy_size = $packed_policy_size ?? ;
    $this->provider = $provider ?? ;
    $this->subject_from_web_identity_token = $subject_from_web_identity_token ?? ;
  }
}

class AssumedRoleUser {
  public arnType $arn;
  public assumedRoleIdType $assumed_role_id;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'assumed_role_id' => assumedRoleIdType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->assumed_role_id = $assumed_role_id ?? ;
  }
}

type Audience = string;

class Credentials {
  public accessKeyIdType $access_key_id;
  public dateType $expiration;
  public accessKeySecretType $secret_access_key;
  public tokenType $session_token;

  public function __construct(shape(
  ?'access_key_id' => accessKeyIdType,
  ?'expiration' => dateType,
  ?'secret_access_key' => accessKeySecretType,
  ?'session_token' => tokenType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? ;
    $this->expiration = $expiration ?? ;
    $this->secret_access_key = $secret_access_key ?? ;
    $this->session_token = $session_token ?? ;
  }
}

class DecodeAuthorizationMessageRequest {
  public encodedMessageType $encoded_message;

  public function __construct(shape(
  ?'encoded_message' => encodedMessageType,
  ) $s = shape()) {
    $this->encoded_message = $encoded_message ?? ;
  }
}

class DecodeAuthorizationMessageResponse {
  public decodedMessageType $decoded_message;

  public function __construct(shape(
  ?'decoded_message' => decodedMessageType,
  ) $s = shape()) {
    $this->decoded_message = $decoded_message ?? ;
  }
}

class ExpiredTokenException {
  public expiredIdentityTokenMessage $message;

  public function __construct(shape(
  ?'message' => expiredIdentityTokenMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class FederatedUser {
  public arnType $arn;
  public federatedIdType $federated_user_id;

  public function __construct(shape(
  ?'arn' => arnType,
  ?'federated_user_id' => federatedIdType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
    $this->federated_user_id = $federated_user_id ?? ;
  }
}

class GetAccessKeyInfoRequest {
  public accessKeyIdType $access_key_id;

  public function __construct(shape(
  ?'access_key_id' => accessKeyIdType,
  ) $s = shape()) {
    $this->access_key_id = $access_key_id ?? ;
  }
}

class GetAccessKeyInfoResponse {
  public accountType $account;

  public function __construct(shape(
  ?'account' => accountType,
  ) $s = shape()) {
    $this->account = $account ?? ;
  }
}

class GetCallerIdentityRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class GetCallerIdentityResponse {
  public accountType $account;
  public arnType $arn;
  public userIdType $user_id;

  public function __construct(shape(
  ?'account' => accountType,
  ?'arn' => arnType,
  ?'user_id' => userIdType,
  ) $s = shape()) {
    $this->account = $account ?? ;
    $this->arn = $arn ?? ;
    $this->user_id = $user_id ?? ;
  }
}

class GetFederationTokenRequest {
  public durationSecondsType $duration_seconds;
  public userNameType $name;
  public sessionPolicyDocumentType $policy;
  public policyDescriptorListType $policy_arns;
  public tagListType $tags;

  public function __construct(shape(
  ?'duration_seconds' => durationSecondsType,
  ?'name' => userNameType,
  ?'policy' => sessionPolicyDocumentType,
  ?'policy_arns' => policyDescriptorListType,
  ?'tags' => tagListType,
  ) $s = shape()) {
    $this->duration_seconds = $duration_seconds ?? ;
    $this->name = $name ?? ;
    $this->policy = $policy ?? ;
    $this->policy_arns = $policy_arns ?? ;
    $this->tags = $tags ?? ;
  }
}

class GetFederationTokenResponse {
  public Credentials $credentials;
  public FederatedUser $federated_user;
  public nonNegativeIntegerType $packed_policy_size;

  public function __construct(shape(
  ?'credentials' => Credentials,
  ?'federated_user' => FederatedUser,
  ?'packed_policy_size' => nonNegativeIntegerType,
  ) $s = shape()) {
    $this->credentials = $credentials ?? null;
    $this->federated_user = $federated_user ?? null;
    $this->packed_policy_size = $packed_policy_size ?? ;
  }
}

class GetSessionTokenRequest {
  public durationSecondsType $duration_seconds;
  public serialNumberType $serial_number;
  public tokenCodeType $token_code;

  public function __construct(shape(
  ?'duration_seconds' => durationSecondsType,
  ?'serial_number' => serialNumberType,
  ?'token_code' => tokenCodeType,
  ) $s = shape()) {
    $this->duration_seconds = $duration_seconds ?? ;
    $this->serial_number = $serial_number ?? ;
    $this->token_code = $token_code ?? ;
  }
}

class GetSessionTokenResponse {
  public Credentials $credentials;

  public function __construct(shape(
  ?'credentials' => Credentials,
  ) $s = shape()) {
    $this->credentials = $credentials ?? null;
  }
}

class IDPCommunicationErrorException {
  public idpCommunicationErrorMessage $message;

  public function __construct(shape(
  ?'message' => idpCommunicationErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class IDPRejectedClaimException {
  public idpRejectedClaimMessage $message;

  public function __construct(shape(
  ?'message' => idpRejectedClaimMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidAuthorizationMessageException {
  public invalidAuthorizationMessage $message;

  public function __construct(shape(
  ?'message' => invalidAuthorizationMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidIdentityTokenException {
  public invalidIdentityTokenMessage $message;

  public function __construct(shape(
  ?'message' => invalidIdentityTokenMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type Issuer = string;

class MalformedPolicyDocumentException {
  public malformedPolicyDocumentMessage $message;

  public function __construct(shape(
  ?'message' => malformedPolicyDocumentMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type NameQualifier = string;

class PackedPolicyTooLargeException {
  public packedPolicyTooLargeMessage $message;

  public function __construct(shape(
  ?'message' => packedPolicyTooLargeMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class PolicyDescriptorType {
  public arnType $arn;

  public function __construct(shape(
  ?'arn' => arnType,
  ) $s = shape()) {
    $this->arn = $arn ?? ;
  }
}

class RegionDisabledException {
  public regionDisabledMessage $message;

  public function __construct(shape(
  ?'message' => regionDisabledMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type SAMLAssertionType = string;

type Subject = string;

type SubjectType = string;

class Tag {
  public tagKeyType $key;
  public tagValueType $value;

  public function __construct(shape(
  ?'key' => tagKeyType,
  ?'value' => tagValueType,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

type accessKeyIdType = string;

type accessKeySecretType = string;

type accountType = string;

type arnType = string;

type assumedRoleIdType = string;

type clientTokenType = string;

type dateType = int;

type decodedMessageType = string;

type durationSecondsType = int;

type encodedMessageType = string;

type expiredIdentityTokenMessage = string;

type externalIdType = string;

type federatedIdType = string;

type idpCommunicationErrorMessage = string;

type idpRejectedClaimMessage = string;

type invalidAuthorizationMessage = string;

type invalidIdentityTokenMessage = string;

type malformedPolicyDocumentMessage = string;

type nonNegativeIntegerType = int;

type packedPolicyTooLargeMessage = string;

type policyDescriptorListType = vec<PolicyDescriptorType>;

type regionDisabledMessage = string;

type roleDurationSecondsType = int;

type roleSessionNameType = string;

type serialNumberType = string;

type sessionPolicyDocumentType = string;

type tagKeyListType = vec<tagKeyType>;

type tagKeyType = string;

type tagListType = vec<Tag>;

type tagValueType = string;

type tokenCodeType = string;

type tokenType = string;

type urlType = string;

type userIdType = string;

type userNameType = string;

type webIdentitySubjectType = string;

