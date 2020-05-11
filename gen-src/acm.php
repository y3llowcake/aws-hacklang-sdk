<?hh // strict
namespace slack\aws\acm;

interface ACM {
  public function AddTagsToCertificate(AddTagsToCertificateRequest): Awaitable<Errors\Error>;
  public function DeleteCertificate(DeleteCertificateRequest): Awaitable<Errors\Error>;
  public function DescribeCertificate(DescribeCertificateRequest): Awaitable<Errors\Result<DescribeCertificateResponse>>;
  public function ExportCertificate(ExportCertificateRequest): Awaitable<Errors\Result<ExportCertificateResponse>>;
  public function GetCertificate(GetCertificateRequest): Awaitable<Errors\Result<GetCertificateResponse>>;
  public function ImportCertificate(ImportCertificateRequest): Awaitable<Errors\Result<ImportCertificateResponse>>;
  public function ListCertificates(ListCertificatesRequest): Awaitable<Errors\Result<ListCertificatesResponse>>;
  public function ListTagsForCertificate(ListTagsForCertificateRequest): Awaitable<Errors\Result<ListTagsForCertificateResponse>>;
  public function RemoveTagsFromCertificate(RemoveTagsFromCertificateRequest): Awaitable<Errors\Error>;
  public function RenewCertificate(RenewCertificateRequest): Awaitable<Errors\Error>;
  public function RequestCertificate(RequestCertificateRequest): Awaitable<Errors\Result<RequestCertificateResponse>>;
  public function ResendValidationEmail(ResendValidationEmailRequest): Awaitable<Errors\Error>;
  public function UpdateCertificateOptions(UpdateCertificateOptionsRequest): Awaitable<Errors\Error>;
}

class AddTagsToCertificateRequest {
  public Arn $certificate_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type Arn = string;

type CertificateBody = string;

type CertificateBodyBlob = string;

type CertificateChain = string;

type CertificateChainBlob = string;

class CertificateDetail {
  public Arn $certificate_arn;
  public Arn $certificate_authority_arn;
  public TStamp $created_at;
  public DomainNameString $domain_name;
  public DomainValidationList $domain_validation_options;
  public ExtendedKeyUsageList $extended_key_usages;
  public FailureReason $failure_reason;
  public TStamp $imported_at;
  public InUseList $in_use_by;
  public TStamp $issued_at;
  public string $issuer;
  public KeyAlgorithm $key_algorithm;
  public KeyUsageList $key_usages;
  public TStamp $not_after;
  public TStamp $not_before;
  public CertificateOptions $options;
  public RenewalEligibility $renewal_eligibility;
  public RenewalSummary $renewal_summary;
  public RevocationReason $revocation_reason;
  public TStamp $revoked_at;
  public string $serial;
  public string $signature_algorithm;
  public CertificateStatus $status;
  public string $subject;
  public DomainList $subject_alternative_names;
  public CertificateType $type;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'certificate_authority_arn' => Arn,
  ?'created_at' => TStamp,
  ?'domain_name' => DomainNameString,
  ?'domain_validation_options' => DomainValidationList,
  ?'extended_key_usages' => ExtendedKeyUsageList,
  ?'failure_reason' => FailureReason,
  ?'imported_at' => TStamp,
  ?'in_use_by' => InUseList,
  ?'issued_at' => TStamp,
  ?'issuer' => string,
  ?'key_algorithm' => KeyAlgorithm,
  ?'key_usages' => KeyUsageList,
  ?'not_after' => TStamp,
  ?'not_before' => TStamp,
  ?'options' => CertificateOptions,
  ?'renewal_eligibility' => RenewalEligibility,
  ?'renewal_summary' => RenewalSummary,
  ?'revocation_reason' => RevocationReason,
  ?'revoked_at' => TStamp,
  ?'serial' => string,
  ?'signature_algorithm' => string,
  ?'status' => CertificateStatus,
  ?'subject' => string,
  ?'subject_alternative_names' => DomainList,
  ?'type' => CertificateType,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->certificate_authority_arn = $certificate_authority_arn ?? "";
    $this->created_at = $created_at ?? 0;
    $this->domain_name = $domain_name ?? "";
    $this->domain_validation_options = $domain_validation_options ?? [];
    $this->extended_key_usages = $extended_key_usages ?? [];
    $this->failure_reason = $failure_reason ?? "";
    $this->imported_at = $imported_at ?? 0;
    $this->in_use_by = $in_use_by ?? [];
    $this->issued_at = $issued_at ?? 0;
    $this->issuer = $issuer ?? "";
    $this->key_algorithm = $key_algorithm ?? "";
    $this->key_usages = $key_usages ?? [];
    $this->not_after = $not_after ?? 0;
    $this->not_before = $not_before ?? 0;
    $this->options = $options ?? null;
    $this->renewal_eligibility = $renewal_eligibility ?? "";
    $this->renewal_summary = $renewal_summary ?? null;
    $this->revocation_reason = $revocation_reason ?? "";
    $this->revoked_at = $revoked_at ?? 0;
    $this->serial = $serial ?? "";
    $this->signature_algorithm = $signature_algorithm ?? "";
    $this->status = $status ?? "";
    $this->subject = $subject ?? "";
    $this->subject_alternative_names = $subject_alternative_names ?? [];
    $this->type = $type ?? "";
  }
}

class CertificateOptions {
  public CertificateTransparencyLoggingPreference $certificate_transparency_logging_preference;

  public function __construct(shape(
  ?'certificate_transparency_logging_preference' => CertificateTransparencyLoggingPreference,
  ) $s = shape()) {
    $this->certificate_transparency_logging_preference = $certificate_transparency_logging_preference ?? "";
  }
}

type CertificateStatus = string;

type CertificateStatuses = vec<CertificateStatus>;

class CertificateSummary {
  public Arn $certificate_arn;
  public DomainNameString $domain_name;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'domain_name' => DomainNameString,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->domain_name = $domain_name ?? "";
  }
}

type CertificateSummaryList = vec<CertificateSummary>;

type CertificateTransparencyLoggingPreference = string;

type CertificateType = string;

class DeleteCertificateRequest {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

class DescribeCertificateRequest {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

class DescribeCertificateResponse {
  public CertificateDetail $certificate;

  public function __construct(shape(
  ?'certificate' => CertificateDetail,
  ) $s = shape()) {
    $this->certificate = $certificate ?? null;
  }
}

type DomainList = vec<DomainNameString>;

type DomainNameString = string;

type DomainStatus = string;

class DomainValidation {
  public DomainNameString $domain_name;
  public ResourceRecord $resource_record;
  public DomainNameString $validation_domain;
  public ValidationEmailList $validation_emails;
  public ValidationMethod $validation_method;
  public DomainStatus $validation_status;

  public function __construct(shape(
  ?'domain_name' => DomainNameString,
  ?'resource_record' => ResourceRecord,
  ?'validation_domain' => DomainNameString,
  ?'validation_emails' => ValidationEmailList,
  ?'validation_method' => ValidationMethod,
  ?'validation_status' => DomainStatus,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->resource_record = $resource_record ?? null;
    $this->validation_domain = $validation_domain ?? "";
    $this->validation_emails = $validation_emails ?? [];
    $this->validation_method = $validation_method ?? "";
    $this->validation_status = $validation_status ?? "";
  }
}

type DomainValidationList = vec<DomainValidation>;

class DomainValidationOption {
  public DomainNameString $domain_name;
  public DomainNameString $validation_domain;

  public function __construct(shape(
  ?'domain_name' => DomainNameString,
  ?'validation_domain' => DomainNameString,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->validation_domain = $validation_domain ?? "";
  }
}

type DomainValidationOptionList = vec<DomainValidationOption>;

class ExportCertificateRequest {
  public Arn $certificate_arn;
  public PassphraseBlob $passphrase;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'passphrase' => PassphraseBlob,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->passphrase = $passphrase ?? "";
  }
}

class ExportCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
  public PrivateKey $private_key;

  public function __construct(shape(
  ?'certificate' => CertificateBody,
  ?'certificate_chain' => CertificateChain,
  ?'private_key' => PrivateKey,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->certificate_chain = $certificate_chain ?? "";
    $this->private_key = $private_key ?? "";
  }
}

class ExtendedKeyUsage {
  public ExtendedKeyUsageName $name;
  public string $oid;

  public function __construct(shape(
  ?'name' => ExtendedKeyUsageName,
  ?'oid' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->oid = $oid ?? "";
  }
}

type ExtendedKeyUsageFilterList = vec<ExtendedKeyUsageName>;

type ExtendedKeyUsageList = vec<ExtendedKeyUsage>;

type ExtendedKeyUsageName = string;

type FailureReason = string;

class Filters {
  public ExtendedKeyUsageFilterList $extended_key_usage;
  public KeyAlgorithmList $key_types;
  public KeyUsageFilterList $key_usage;

  public function __construct(shape(
  ?'extended_key_usage' => ExtendedKeyUsageFilterList,
  ?'key_types' => KeyAlgorithmList,
  ?'key_usage' => KeyUsageFilterList,
  ) $s = shape()) {
    $this->extended_key_usage = $extended_key_usage ?? [];
    $this->key_types = $key_types ?? [];
    $this->key_usage = $key_usage ?? [];
  }
}

class GetCertificateRequest {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

class GetCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;

  public function __construct(shape(
  ?'certificate' => CertificateBody,
  ?'certificate_chain' => CertificateChain,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->certificate_chain = $certificate_chain ?? "";
  }
}

type IdempotencyToken = string;

class ImportCertificateRequest {
  public CertificateBodyBlob $certificate;
  public Arn $certificate_arn;
  public CertificateChainBlob $certificate_chain;
  public PrivateKeyBlob $private_key;
  public TagList $tags;

  public function __construct(shape(
  ?'certificate' => CertificateBodyBlob,
  ?'certificate_arn' => Arn,
  ?'certificate_chain' => CertificateChainBlob,
  ?'private_key' => PrivateKeyBlob,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->certificate_arn = $certificate_arn ?? "";
    $this->certificate_chain = $certificate_chain ?? "";
    $this->private_key = $private_key ?? "";
    $this->tags = $tags ?? [];
  }
}

class ImportCertificateResponse {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

type InUseList = vec<String>;

class InvalidArgsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidArnException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidDomainValidationOptionsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidStateException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidTagException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type KeyAlgorithm = string;

type KeyAlgorithmList = vec<KeyAlgorithm>;

class KeyUsage {
  public KeyUsageName $name;

  public function __construct(shape(
  ?'name' => KeyUsageName,
  ) $s = shape()) {
    $this->name = $name ?? "";
  }
}

type KeyUsageFilterList = vec<KeyUsageName>;

type KeyUsageList = vec<KeyUsage>;

type KeyUsageName = string;

class LimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ListCertificatesRequest {
  public CertificateStatuses $certificate_statuses;
  public Filters $includes;
  public MaxItems $max_items;
  public NextToken $next_token;

  public function __construct(shape(
  ?'certificate_statuses' => CertificateStatuses,
  ?'includes' => Filters,
  ?'max_items' => MaxItems,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->certificate_statuses = $certificate_statuses ?? [];
    $this->includes = $includes ?? null;
    $this->max_items = $max_items ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListCertificatesResponse {
  public CertificateSummaryList $certificate_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'certificate_summary_list' => CertificateSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->certificate_summary_list = $certificate_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListTagsForCertificateRequest {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

class ListTagsForCertificateResponse {
  public TagList $tags;

  public function __construct(shape(
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->tags = $tags ?? [];
  }
}

type MaxItems = int;

type NextToken = string;

type PassphraseBlob = string;

type PrivateKey = string;

type PrivateKeyBlob = string;

type RecordType = string;

class RemoveTagsFromCertificateRequest {
  public Arn $certificate_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class RenewCertificateRequest {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

type RenewalEligibility = string;

type RenewalStatus = string;

class RenewalSummary {
  public DomainValidationList $domain_validation_options;
  public RenewalStatus $renewal_status;
  public FailureReason $renewal_status_reason;
  public TStamp $updated_at;

  public function __construct(shape(
  ?'domain_validation_options' => DomainValidationList,
  ?'renewal_status' => RenewalStatus,
  ?'renewal_status_reason' => FailureReason,
  ?'updated_at' => TStamp,
  ) $s = shape()) {
    $this->domain_validation_options = $domain_validation_options ?? [];
    $this->renewal_status = $renewal_status ?? "";
    $this->renewal_status_reason = $renewal_status_reason ?? "";
    $this->updated_at = $updated_at ?? 0;
  }
}

class RequestCertificateRequest {
  public Arn $certificate_authority_arn;
  public DomainNameString $domain_name;
  public DomainValidationOptionList $domain_validation_options;
  public IdempotencyToken $idempotency_token;
  public CertificateOptions $options;
  public DomainList $subject_alternative_names;
  public TagList $tags;
  public ValidationMethod $validation_method;

  public function __construct(shape(
  ?'certificate_authority_arn' => Arn,
  ?'domain_name' => DomainNameString,
  ?'domain_validation_options' => DomainValidationOptionList,
  ?'idempotency_token' => IdempotencyToken,
  ?'options' => CertificateOptions,
  ?'subject_alternative_names' => DomainList,
  ?'tags' => TagList,
  ?'validation_method' => ValidationMethod,
  ) $s = shape()) {
    $this->certificate_authority_arn = $certificate_authority_arn ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->domain_validation_options = $domain_validation_options ?? [];
    $this->idempotency_token = $idempotency_token ?? "";
    $this->options = $options ?? null;
    $this->subject_alternative_names = $subject_alternative_names ?? [];
    $this->tags = $tags ?? [];
    $this->validation_method = $validation_method ?? "";
  }
}

class RequestCertificateResponse {
  public Arn $certificate_arn;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
  }
}

class RequestInProgressException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResendValidationEmailRequest {
  public Arn $certificate_arn;
  public DomainNameString $domain;
  public DomainNameString $validation_domain;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'domain' => DomainNameString,
  ?'validation_domain' => DomainNameString,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->domain = $domain ?? "";
    $this->validation_domain = $validation_domain ?? "";
  }
}

class ResourceInUseException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceRecord {
  public string $name;
  public RecordType $type;
  public string $value;

  public function __construct(shape(
  ?'name' => string,
  ?'type' => RecordType,
  ?'value' => string,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->type = $type ?? "";
    $this->value = $value ?? "";
  }
}

type RevocationReason = string;

type String = string;

type TStamp = int;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagList = vec<Tag>;

class TagPolicyException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type TagValue = string;

class TooManyTagsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class UpdateCertificateOptionsRequest {
  public Arn $certificate_arn;
  public CertificateOptions $options;

  public function __construct(shape(
  ?'certificate_arn' => Arn,
  ?'options' => CertificateOptions,
  ) $s = shape()) {
    $this->certificate_arn = $certificate_arn ?? "";
    $this->options = $options ?? null;
  }
}

type ValidationEmailList = vec<String>;

type ValidationMethod = string;

