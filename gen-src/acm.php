<?hh // strict
namespace slack\aws\acm;

interface ACM {
  public function RequestCertificate(RequestCertificateRequest) Awaitable<Errors\Result<RequestCertificateResponse>>;
  public function UpdateCertificateOptions(UpdateCertificateOptionsRequest) Awaitable<Errors\Error>;
  public function AddTagsToCertificate(AddTagsToCertificateRequest) Awaitable<Errors\Error>;
  public function DeleteCertificate(DeleteCertificateRequest) Awaitable<Errors\Error>;
  public function ExportCertificate(ExportCertificateRequest) Awaitable<Errors\Result<ExportCertificateResponse>>;
  public function GetCertificate(GetCertificateRequest) Awaitable<Errors\Result<GetCertificateResponse>>;
  public function ListCertificates(ListCertificatesRequest) Awaitable<Errors\Result<ListCertificatesResponse>>;
  public function ResendValidationEmail(ResendValidationEmailRequest) Awaitable<Errors\Error>;
  public function DescribeCertificate(DescribeCertificateRequest) Awaitable<Errors\Result<DescribeCertificateResponse>>;
  public function ImportCertificate(ImportCertificateRequest) Awaitable<Errors\Result<ImportCertificateResponse>>;
  public function ListTagsForCertificate(ListTagsForCertificateRequest) Awaitable<Errors\Result<ListTagsForCertificateResponse>>;
  public function RemoveTagsFromCertificate(RemoveTagsFromCertificateRequest) Awaitable<Errors\Error>;
  public function RenewCertificate(RenewCertificateRequest) Awaitable<Errors\Error>;
}

class DeleteCertificateRequest {
  public Arn $certificate_arn;
}

class ImportCertificateRequest {
  public Arn $certificate_arn;
  public CertificateBodyBlob $certificate;
  public PrivateKeyBlob $private_key;
  public CertificateChainBlob $certificate_chain;
  public TagList $tags;
}

class String {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TStamp {
}

class Arn {
}

class FailureReason {
}

class InvalidDomainValidationOptionsException {
  public string $message;
}

class RenewalEligibility {
}

class ResourceNotFoundException {
  public string $message;
}

class CertificateType {
}

class InvalidArnException {
  public string $message;
}

class ListTagsForCertificateResponse {
  public TagList $tags;
}

class PassphraseBlob {
}

class LimitExceededException {
  public string $message;
}

class RenewCertificateRequest {
  public Arn $certificate_arn;
}

class DomainValidationOptionList {
}

class ExtendedKeyUsageList {
}

class InUseList {
}

class InvalidTagException {
  public string $message;
}

class KeyUsageName {
}

class AddTagsToCertificateRequest {
  public TagList $tags;
  public Arn $certificate_arn;
}

class CertificateChainBlob {
}

class CertificateOptions {
  public CertificateTransparencyLoggingPreference $certificate_transparency_logging_preference;
}

class IdempotencyToken {
}

class RequestCertificateResponse {
  public Arn $certificate_arn;
}

class CertificateChain {
}

class CertificateSummaryList {
}

class ExportCertificateResponse {
  public PrivateKey $private_key;
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
}

class TagList {
}

class UpdateCertificateOptionsRequest {
  public Arn $certificate_arn;
  public CertificateOptions $options;
}

class ListTagsForCertificateRequest {
  public Arn $certificate_arn;
}

class TagPolicyException {
  public string $message;
}

class DomainNameString {
}

class ExportCertificateRequest {
  public Arn $certificate_arn;
  public PassphraseBlob $passphrase;
}

class KeyAlgorithm {
}

class KeyAlgorithmList {
}

class ListCertificatesRequest {
  public CertificateStatuses $certificate_statuses;
  public Filters $includes;
  public NextToken $next_token;
  public MaxItems $max_items;
}

class ResourceRecord {
  public string $name;
  public RecordType $type;
  public string $value;
}

class ImportCertificateResponse {
  public Arn $certificate_arn;
}

class KeyUsageList {
}

class MaxItems {
}

class NextToken {
}

class PrivateKeyBlob {
}

class GetCertificateRequest {
  public Arn $certificate_arn;
}

class GetCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
}

class RemoveTagsFromCertificateRequest {
  public Arn $certificate_arn;
  public TagList $tags;
}

class RequestInProgressException {
  public string $message;
}

class CertificateStatus {
}

class DomainValidationOption {
  public DomainNameString $domain_name;
  public DomainNameString $validation_domain;
}

class InvalidArgsException {
  public string $message;
}

class RenewalSummary {
  public FailureReason $renewal_status_reason;
  public TStamp $updated_at;
  public RenewalStatus $renewal_status;
  public DomainValidationList $domain_validation_options;
}

class ResendValidationEmailRequest {
  public Arn $certificate_arn;
  public DomainNameString $domain;
  public DomainNameString $validation_domain;
}

class CertificateDetail {
  public FailureReason $failure_reason;
  public InUseList $in_use_by;
  public DomainValidationList $domain_validation_options;
  public string $serial;
  public TStamp $created_at;
  public TStamp $imported_at;
  public RevocationReason $revocation_reason;
  public TStamp $not_after;
  public string $signature_algorithm;
  public DomainList $subject_alternative_names;
  public CertificateStatus $status;
  public TStamp $revoked_at;
  public KeyAlgorithm $key_algorithm;
  public CertificateType $type;
  public KeyUsageList $key_usages;
  public Arn $certificate_authority_arn;
  public string $subject;
  public DomainNameString $domain_name;
  public string $issuer;
  public TStamp $issued_at;
  public TStamp $not_before;
  public RenewalSummary $renewal_summary;
  public ExtendedKeyUsageList $extended_key_usages;
  public RenewalEligibility $renewal_eligibility;
  public Arn $certificate_arn;
  public CertificateOptions $options;
}

class CertificateSummary {
  public Arn $certificate_arn;
  public DomainNameString $domain_name;
}

class DomainStatus {
}

class InvalidStateException {
  public string $message;
}

class ListCertificatesResponse {
  public NextToken $next_token;
  public CertificateSummaryList $certificate_summary_list;
}

class PrivateKey {
}

class RequestCertificateRequest {
  public TagList $tags;
  public DomainNameString $domain_name;
  public ValidationMethod $validation_method;
  public DomainList $subject_alternative_names;
  public IdempotencyToken $idempotency_token;
  public DomainValidationOptionList $domain_validation_options;
  public CertificateOptions $options;
  public Arn $certificate_authority_arn;
}

class ResourceInUseException {
  public string $message;
}

class CertificateBodyBlob {
}

class CertificateTransparencyLoggingPreference {
}

class DescribeCertificateResponse {
  public CertificateDetail $certificate;
}

class DomainValidation {
  public DomainStatus $validation_status;
  public ResourceRecord $resource_record;
  public ValidationMethod $validation_method;
  public DomainNameString $domain_name;
  public ValidationEmailList $validation_emails;
  public DomainNameString $validation_domain;
}

class DomainValidationList {
}

class ValidationMethod {
}

class TagKey {
}

class ValidationEmailList {
}

class ExtendedKeyUsage {
  public ExtendedKeyUsageName $name;
  public string $oid;
}

class ExtendedKeyUsageFilterList {
}

class ExtendedKeyUsageName {
}

class KeyUsage {
  public KeyUsageName $name;
}

class RecordType {
}

class RevocationReason {
}

class CertificateBody {
}

class CertificateStatuses {
}

class DescribeCertificateRequest {
  public Arn $certificate_arn;
}

class DomainList {
}

class RenewalStatus {
}

class KeyUsageFilterList {
}

class TagValue {
}

class TooManyTagsException {
  public string $message;
}

class Filters {
  public ExtendedKeyUsageFilterList $extended_key_usage;
  public KeyUsageFilterList $key_usage;
  public KeyAlgorithmList $key_types;
}

class InvalidParameterException {
  public string $message;
}

