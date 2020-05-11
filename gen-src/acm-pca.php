<?hh // strict
namespace slack\aws\acm-pca;

interface ACM PCA {
  public function CreateCertificateAuthority(CreateCertificateAuthorityRequest): Awaitable<Errors\Result<CreateCertificateAuthorityResponse>>;
  public function CreateCertificateAuthorityAuditReport(CreateCertificateAuthorityAuditReportRequest): Awaitable<Errors\Result<CreateCertificateAuthorityAuditReportResponse>>;
  public function CreatePermission(CreatePermissionRequest): Awaitable<Errors\Error>;
  public function DeleteCertificateAuthority(DeleteCertificateAuthorityRequest): Awaitable<Errors\Error>;
  public function DeletePermission(DeletePermissionRequest): Awaitable<Errors\Error>;
  public function DescribeCertificateAuthority(DescribeCertificateAuthorityRequest): Awaitable<Errors\Result<DescribeCertificateAuthorityResponse>>;
  public function DescribeCertificateAuthorityAuditReport(DescribeCertificateAuthorityAuditReportRequest): Awaitable<Errors\Result<DescribeCertificateAuthorityAuditReportResponse>>;
  public function GetCertificate(GetCertificateRequest): Awaitable<Errors\Result<GetCertificateResponse>>;
  public function GetCertificateAuthorityCertificate(GetCertificateAuthorityCertificateRequest): Awaitable<Errors\Result<GetCertificateAuthorityCertificateResponse>>;
  public function GetCertificateAuthorityCsr(GetCertificateAuthorityCsrRequest): Awaitable<Errors\Result<GetCertificateAuthorityCsrResponse>>;
  public function ImportCertificateAuthorityCertificate(ImportCertificateAuthorityCertificateRequest): Awaitable<Errors\Error>;
  public function IssueCertificate(IssueCertificateRequest): Awaitable<Errors\Result<IssueCertificateResponse>>;
  public function ListCertificateAuthorities(ListCertificateAuthoritiesRequest): Awaitable<Errors\Result<ListCertificateAuthoritiesResponse>>;
  public function ListPermissions(ListPermissionsRequest): Awaitable<Errors\Result<ListPermissionsResponse>>;
  public function ListTags(ListTagsRequest): Awaitable<Errors\Result<ListTagsResponse>>;
  public function RestoreCertificateAuthority(RestoreCertificateAuthorityRequest): Awaitable<Errors\Error>;
  public function RevokeCertificate(RevokeCertificateRequest): Awaitable<Errors\Error>;
  public function TagCertificateAuthority(TagCertificateAuthorityRequest): Awaitable<Errors\Error>;
  public function UntagCertificateAuthority(UntagCertificateAuthorityRequest): Awaitable<Errors\Error>;
  public function UpdateCertificateAuthority(UpdateCertificateAuthorityRequest): Awaitable<Errors\Error>;
}

class ASN1Subject {
  public String64 $common_name;
  public CountryCodeString $country;
  public DistinguishedNameQualifierString $distinguished_name_qualifier;
  public String3 $generation_qualifier;
  public String16 $given_name;
  public String5 $initials;
  public String128 $locality;
  public String64 $organization;
  public String64 $organizational_unit;
  public String128 $pseudonym;
  public String64 $serial_number;
  public String128 $state;
  public String40 $surname;
  public String64 $title;

  public function __construct(shape(
  ?'common_name' => String64,
  ?'country' => CountryCodeString,
  ?'distinguished_name_qualifier' => DistinguishedNameQualifierString,
  ?'generation_qualifier' => String3,
  ?'given_name' => String16,
  ?'initials' => String5,
  ?'locality' => String128,
  ?'organization' => String64,
  ?'organizational_unit' => String64,
  ?'pseudonym' => String128,
  ?'serial_number' => String64,
  ?'state' => String128,
  ?'surname' => String40,
  ?'title' => String64,
  ) $s = shape()) {
    $this->common_name = $common_name ?? ;
    $this->country = $country ?? ;
    $this->distinguished_name_qualifier = $distinguished_name_qualifier ?? ;
    $this->generation_qualifier = $generation_qualifier ?? ;
    $this->given_name = $given_name ?? ;
    $this->initials = $initials ?? ;
    $this->locality = $locality ?? ;
    $this->organization = $organization ?? ;
    $this->organizational_unit = $organizational_unit ?? ;
    $this->pseudonym = $pseudonym ?? ;
    $this->serial_number = $serial_number ?? ;
    $this->state = $state ?? ;
    $this->surname = $surname ?? ;
    $this->title = $title ?? ;
  }
}

type AccountId = string;

type ActionList = vec<ActionType>;

type ActionType = string;

type Arn = string;

type AuditReportId = string;

type AuditReportResponseFormat = string;

type AuditReportStatus = string;

type Boolean = bool;

type CertificateAuthorities = vec<CertificateAuthority>;

class CertificateAuthority {
  public Arn $arn;
  public CertificateAuthorityConfiguration $certificate_authority_configuration;
  public TStamp $created_at;
  public FailureReason $failure_reason;
  public TStamp $last_state_change_at;
  public TStamp $not_after;
  public TStamp $not_before;
  public TStamp $restorable_until;
  public RevocationConfiguration $revocation_configuration;
  public string $serial;
  public CertificateAuthorityStatus $status;
  public CertificateAuthorityType $type;

  public function __construct(shape(
  ?'arn' => Arn,
  ?'certificate_authority_configuration' => CertificateAuthorityConfiguration,
  ?'created_at' => TStamp,
  ?'failure_reason' => FailureReason,
  ?'last_state_change_at' => TStamp,
  ?'not_after' => TStamp,
  ?'not_before' => TStamp,
  ?'restorable_until' => TStamp,
  ?'revocation_configuration' => RevocationConfiguration,
  ?'serial' => string,
  ?'status' => CertificateAuthorityStatus,
  ?'type' => CertificateAuthorityType,
  ) $s = shape()) {
    $this->arn = $arn ?? "";
    $this->certificate_authority_configuration = $certificate_authority_configuration ?? null;
    $this->created_at = $created_at ?? ;
    $this->failure_reason = $failure_reason ?? "";
    $this->last_state_change_at = $last_state_change_at ?? ;
    $this->not_after = $not_after ?? ;
    $this->not_before = $not_before ?? ;
    $this->restorable_until = $restorable_until ?? ;
    $this->revocation_configuration = $revocation_configuration ?? null;
    $this->serial = $serial ?? ;
    $this->status = $status ?? ;
    $this->type = $type ?? ;
  }
}

class CertificateAuthorityConfiguration {
  public KeyAlgorithm $key_algorithm;
  public SigningAlgorithm $signing_algorithm;
  public ASN1Subject $subject;

  public function __construct(shape(
  ?'key_algorithm' => KeyAlgorithm,
  ?'signing_algorithm' => SigningAlgorithm,
  ?'subject' => ASN1Subject,
  ) $s = shape()) {
    $this->key_algorithm = $key_algorithm ?? "";
    $this->signing_algorithm = $signing_algorithm ?? "";
    $this->subject = $subject ?? ;
  }
}

type CertificateAuthorityStatus = string;

type CertificateAuthorityType = string;

type CertificateBody = string;

type CertificateBodyBlob = string;

type CertificateChain = string;

type CertificateChainBlob = string;

class CertificateMismatchException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ConcurrentModificationException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type CountryCodeString = string;

class CreateCertificateAuthorityAuditReportRequest {
  public AuditReportResponseFormat $audit_report_response_format;
  public Arn $certificate_authority_arn;
  public string $s_3_bucket_name;

  public function __construct(shape(
  ?'audit_report_response_format' => AuditReportResponseFormat,
  ?'certificate_authority_arn' => Arn,
  ?'s_3_bucket_name' => string,
  ) $s = shape()) {
    $this->audit_report_response_format = $audit_report_response_format ?? "";
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
  }
}

class CreateCertificateAuthorityAuditReportResponse {
  public AuditReportId $audit_report_id;
  public string $s_3_key;

  public function __construct(shape(
  ?'audit_report_id' => AuditReportId,
  ?'s_3_key' => string,
  ) $s = shape()) {
    $this->audit_report_id = $audit_report_id ?? "";
    $this->s_3_key = $s_3_key ?? ;
  }
}

class CreateCertificateAuthorityRequest {
  public CertificateAuthorityConfiguration $certificate_authority_configuration;
  public CertificateAuthorityType $certificate_authority_type;
  public IdempotencyToken $idempotency_token;
  public RevocationConfiguration $revocation_configuration;
  public TagList $tags;

  public function __construct(shape(
  ?'certificate_authority_configuration' => CertificateAuthorityConfiguration,
  ?'certificate_authority_type' => CertificateAuthorityType,
  ?'idempotency_token' => IdempotencyToken,
  ?'revocation_configuration' => RevocationConfiguration,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->certificate_authority_configuration = $certificate_authority_configuration ?? null;
    $this->certificate_authority_type = $certificate_authority_type ?? "";
    $this->idempotency_token = $idempotency_token ?? "";
    $this->revocation_configuration = $revocation_configuration ?? null;
    $this->tags = $tags ?? ;
  }
}

class CreateCertificateAuthorityResponse {
  public Arn $certificate_authority_arn;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
  }
}

class CreatePermissionRequest {
  public ActionList $actions;
  public Arn $certificate_authority_arn;
  public Principal $principal;
  public AccountId $source_account;

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'certificate_authority_arn' => Arn,
  ?'principal' => Principal,
  ?'source_account' => AccountId,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->principal = $principal ?? "";
    $this->source_account = $source_account ?? ;
  }
}

class CrlConfiguration {
  public String253 $custom_cname;
  public boolean $enabled;
  public Integer1To5000 $expiration_in_days;
  public String3To255 $s_3_bucket_name;

  public function __construct(shape(
  ?'custom_cname' => String253,
  ?'enabled' => boolean,
  ?'expiration_in_days' => Integer1To5000,
  ?'s_3_bucket_name' => String3To255,
  ) $s = shape()) {
    $this->custom_cname = $custom_cname ?? ;
    $this->enabled = $enabled ?? ;
    $this->expiration_in_days = $expiration_in_days ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
  }
}

type CsrBlob = string;

type CsrBody = string;

class DeleteCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public PermanentDeletionTimeInDays $permanent_deletion_time_in_days;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'permanent_deletion_time_in_days' => PermanentDeletionTimeInDays,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->permanent_deletion_time_in_days = $permanent_deletion_time_in_days ?? 0;
  }
}

class DeletePermissionRequest {
  public Arn $certificate_authority_arn;
  public Principal $principal;
  public AccountId $source_account;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'principal' => Principal,
  ?'source_account' => AccountId,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->principal = $principal ?? "";
    $this->source_account = $source_account ?? ;
  }
}

class DescribeCertificateAuthorityAuditReportRequest {
  public AuditReportId $audit_report_id;
  public Arn $certificate_authority_arn;

  public function __construct(shape(
  ?'audit_report_id' => AuditReportId,
  ?'certificate_authority_arn' => Arn,
  ) $s = shape()) {
    $this->audit_report_id = $audit_report_id ?? "";
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
  }
}

class DescribeCertificateAuthorityAuditReportResponse {
  public AuditReportStatus $audit_report_status;
  public TStamp $created_at;
  public string $s_3_bucket_name;
  public string $s_3_key;

  public function __construct(shape(
  ?'audit_report_status' => AuditReportStatus,
  ?'created_at' => TStamp,
  ?'s_3_bucket_name' => string,
  ?'s_3_key' => string,
  ) $s = shape()) {
    $this->audit_report_status = $audit_report_status ?? "";
    $this->created_at = $created_at ?? ;
    $this->s_3_bucket_name = $s_3_bucket_name ?? ;
    $this->s_3_key = $s_3_key ?? ;
  }
}

class DescribeCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
  }
}

class DescribeCertificateAuthorityResponse {
  public CertificateAuthority $certificate_authority;

  public function __construct(shape(
  ?'certificate_authority' => CertificateAuthority,
  ) $s = shape()) {
    $this->certificate_authority = $certificate_authority ?? null;
  }
}

type DistinguishedNameQualifierString = string;

type FailureReason = string;

class GetCertificateAuthorityCertificateRequest {
  public Arn $certificate_authority_arn;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
  }
}

class GetCertificateAuthorityCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;

  public function __construct(shape(
  ?'certificate' => CertificateBody,
  ?'certificate_chain' => CertificateChain,
  ) $s = shape()) {
    $this->certificate = $certificate ?? ;
    $this->certificate_chain = $certificate_chain ?? "";
  }
}

class GetCertificateAuthorityCsrRequest {
  public Arn $certificate_authority_arn;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
  }
}

class GetCertificateAuthorityCsrResponse {
  public CsrBody $csr;

  public function __construct(shape(
  ?'csr' => CsrBody,
  ) $s = shape()) {
    $this->csr = $csr ?? ;
  }
}

class GetCertificateRequest {
  public Arn $certificate_arn;
  public Arn $certificate_authority_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'certificate_authority_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
  }
}

class GetCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;

  public function __construct(shape(
  ?'certificate' => CertificateBody,
  ?'certificate_chain' => CertificateChain,
  ) $s = shape()) {
    $this->certificate = $certificate ?? ;
    $this->certificate_chain = $certificate_chain ?? "";
  }
}

type IdempotencyToken = string;

class ImportCertificateAuthorityCertificateRequest {
  public CertificateBodyBlob $certificate;
  public Arn $certificate_authority_arn;
  public CertificateChainBlob $certificate_chain;

  public function __construct(shape(
  ?'certificate' => CertificateBodyBlob,
  ?'certificate_authority_arn' => Arn,
  ?'certificate_chain' => CertificateChainBlob,
  ) $s = shape()) {
    $this->certificate = $certificate ?? ;
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->certificate_chain = $certificate_chain ?? "";
  }
}

type Integer1To5000 = int;

class InvalidArgsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidArnException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidNextTokenException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidPolicyException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidStateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidTagException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class IssueCertificateRequest {
  public Arn $certificate_authority_arn;
  public CsrBlob $csr;
  public IdempotencyToken $idempotency_token;
  public SigningAlgorithm $signing_algorithm;
  public Arn $template_arn;
  public Validity $validity;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'csr' => CsrBlob,
  ?'idempotency_token' => IdempotencyToken,
  ?'signing_algorithm' => SigningAlgorithm,
  ?'template_arn' => Arn,
  ?'validity' => Validity,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->csr = $csr ?? ;
    $this->idempotency_token = $idempotency_token ?? "";
    $this->signing_algorithm = $signing_algorithm ?? "";
    $this->template_arn = $template_arn ?? ;
    $this->validity = $validity ?? null;
  }
}

class IssueCertificateResponse {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? ;
  }
}

type KeyAlgorithm = string;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListCertificateAuthoritiesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListCertificateAuthoritiesResponse {
  public CertificateAuthorities $certificate_authorities;
  public NextToken $next_token;

  public function __construct(shape(
  ?'certificate_authorities' => CertificateAuthorities,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->certificate_authorities = $certificate_authorities ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListPermissionsRequest {
  public Arn $certificate_authority_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListPermissionsResponse {
  public NextToken $next_token;
  public PermissionList $permissions;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'permissions' => PermissionList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->permissions = $permissions ?? ;
  }
}

class ListTagsRequest {
  public Arn $certificate_authority_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsResponse {
  public NextToken $next_token;
  public TagList $tags;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->tags = $tags ?? ;
  }
}

class MalformedCSRException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class MalformedCertificateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type MaxResults = int;

type NextToken = string;

type PermanentDeletionTimeInDays = int;

class Permission {
  public ActionList $actions;
  public Arn $certificate_authority_arn;
  public TStamp $created_at;
  public string $policy;
  public string $principal;
  public string $source_account;

  public function __construct(shape(
  ?'actions' => ActionList,
  ?'certificate_authority_arn' => Arn,
  ?'created_at' => TStamp,
  ?'policy' => string,
  ?'principal' => string,
  ?'source_account' => string,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->created_at = $created_at ?? ;
    $this->policy = $policy ?? ;
    $this->principal = $principal ?? "";
    $this->source_account = $source_account ?? ;
  }
}

class PermissionAlreadyExistsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PermissionList = vec<Permission>;

type PositiveLong = int;

type Principal = string;

class RequestAlreadyProcessedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RequestFailedException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RequestInProgressException {
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

class RestoreCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
  }
}

class RevocationConfiguration {
  public CrlConfiguration $crl_configuration;

  public function __construct(shape(
  ?'crl_configuration' => CrlConfiguration,
  ) $s = shape()) {
    $this->crl_configuration = $crl_configuration ?? null;
  }
}

type RevocationReason = string;

class RevokeCertificateRequest {
  public Arn $certificate_authority_arn;
  public String128 $certificate_serial;
  public RevocationReason $revocation_reason;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'certificate_serial' => String128,
  ?'revocation_reason' => RevocationReason,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->certificate_serial = $certificate_serial ?? ;
    $this->revocation_reason = $revocation_reason ?? "";
  }
}

type SigningAlgorithm = string;

type String = string;

type String128 = string;

type String16 = string;

type String253 = string;

type String3 = string;

type String3To255 = string;

type String40 = string;

type String5 = string;

type String64 = string;

type TStamp = int;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? ;
    $this->value = $value ?? ;
  }
}

class TagCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

type TagKey = string;

type TagList = vec<Tag>;

type TagValue = string;

class TooManyTagsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UntagCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class UpdateCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public RevocationConfiguration $revocation_configuration;
  public CertificateAuthorityStatus $status;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'revocation_configuration' => RevocationConfiguration,
  ?'status' => CertificateAuthorityStatus,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? ;
    $this->revocation_configuration = $revocation_configuration ?? null;
    $this->status = $status ?? ;
  }
}

class Validity {
  public ValidityPeriodType $type;
  public PositiveLong $value;

  public function __construct(shape(
  ?'type' => ValidityPeriodType,
  ?'value' => PositiveLong,
  ) $s = shape()) {
    $this->type = $type ?? ;
    $this->value = $value ?? ;
  }
}

type ValidityPeriodType = string;

