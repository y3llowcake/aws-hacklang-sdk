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
}

class Arn {
}

class CertificateBody {
}

class CertificateBodyBlob {
}

class CertificateChain {
}

class CertificateChainBlob {
}

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
}

class CertificateOptions {
  public CertificateTransparencyLoggingPreference $certificate_transparency_logging_preference;
}

class CertificateStatus {
}

class CertificateStatuses {
}

class CertificateSummary {
  public Arn $certificate_arn;
  public DomainNameString $domain_name;
}

class CertificateSummaryList {
}

class CertificateTransparencyLoggingPreference {
}

class CertificateType {
}

class DeleteCertificateRequest {
  public Arn $certificate_arn;
}

class DescribeCertificateRequest {
  public Arn $certificate_arn;
}

class DescribeCertificateResponse {
  public CertificateDetail $certificate;
}

class DomainList {
}

class DomainNameString {
}

class DomainStatus {
}

class DomainValidation {
  public DomainNameString $domain_name;
  public ResourceRecord $resource_record;
  public DomainNameString $validation_domain;
  public ValidationEmailList $validation_emails;
  public ValidationMethod $validation_method;
  public DomainStatus $validation_status;
}

class DomainValidationList {
}

class DomainValidationOption {
  public DomainNameString $domain_name;
  public DomainNameString $validation_domain;
}

class DomainValidationOptionList {
}

class ExportCertificateRequest {
  public Arn $certificate_arn;
  public PassphraseBlob $passphrase;
}

class ExportCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
  public PrivateKey $private_key;
}

class ExtendedKeyUsage {
  public ExtendedKeyUsageName $name;
  public string $oid;
}

class ExtendedKeyUsageFilterList {
}

class ExtendedKeyUsageList {
}

class ExtendedKeyUsageName {
}

class FailureReason {
}

class Filters {
  public ExtendedKeyUsageFilterList $extended_key_usage;
  public KeyAlgorithmList $key_types;
  public KeyUsageFilterList $key_usage;
}

class GetCertificateRequest {
  public Arn $certificate_arn;
}

class GetCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
}

class IdempotencyToken {
}

class ImportCertificateRequest {
  public CertificateBodyBlob $certificate;
  public Arn $certificate_arn;
  public CertificateChainBlob $certificate_chain;
  public PrivateKeyBlob $private_key;
  public TagList $tags;
}

class ImportCertificateResponse {
  public Arn $certificate_arn;
}

class InUseList {
}

class InvalidArgsException {
  public string $message;
}

class InvalidArnException {
  public string $message;
}

class InvalidDomainValidationOptionsException {
  public string $message;
}

class InvalidParameterException {
  public string $message;
}

class InvalidStateException {
  public string $message;
}

class InvalidTagException {
  public string $message;
}

class KeyAlgorithm {
}

class KeyAlgorithmList {
}

class KeyUsage {
  public KeyUsageName $name;
}

class KeyUsageFilterList {
}

class KeyUsageList {
}

class KeyUsageName {
}

class LimitExceededException {
  public string $message;
}

class ListCertificatesRequest {
  public CertificateStatuses $certificate_statuses;
  public Filters $includes;
  public MaxItems $max_items;
  public NextToken $next_token;
}

class ListCertificatesResponse {
  public CertificateSummaryList $certificate_summary_list;
  public NextToken $next_token;
}

class ListTagsForCertificateRequest {
  public Arn $certificate_arn;
}

class ListTagsForCertificateResponse {
  public TagList $tags;
}

class MaxItems {
}

class NextToken {
}

class PassphraseBlob {
}

class PrivateKey {
}

class PrivateKeyBlob {
}

class RecordType {
}

class RemoveTagsFromCertificateRequest {
  public Arn $certificate_arn;
  public TagList $tags;
}

class RenewCertificateRequest {
  public Arn $certificate_arn;
}

class RenewalEligibility {
}

class RenewalStatus {
}

class RenewalSummary {
  public DomainValidationList $domain_validation_options;
  public RenewalStatus $renewal_status;
  public FailureReason $renewal_status_reason;
  public TStamp $updated_at;
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
}

class RequestCertificateResponse {
  public Arn $certificate_arn;
}

class RequestInProgressException {
  public string $message;
}

class ResendValidationEmailRequest {
  public Arn $certificate_arn;
  public DomainNameString $domain;
  public DomainNameString $validation_domain;
}

class ResourceInUseException {
  public string $message;
}

class ResourceNotFoundException {
  public string $message;
}

class ResourceRecord {
  public string $name;
  public RecordType $type;
  public string $value;
}

class RevocationReason {
}

class String {
}

class TStamp {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagList {
}

class TagPolicyException {
  public string $message;
}

class TagValue {
}

class TooManyTagsException {
  public string $message;
}

class UpdateCertificateOptionsRequest {
  public Arn $certificate_arn;
  public CertificateOptions $options;
}

class ValidationEmailList {
}

class ValidationMethod {
}

