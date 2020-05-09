<?hh // strict
namespace slack\aws\acm-pca;

interface ACM PCA {
  public function ImportCertificateAuthorityCertificate(ImportCertificateAuthorityCertificateRequest) Awaitable<Errors\Error>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function RestoreCertificateAuthority(RestoreCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function RevokeCertificate(RevokeCertificateRequest) Awaitable<Errors\Error>;
  public function TagCertificateAuthority(TagCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function DeleteCertificateAuthority(DeleteCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function GetCertificate(GetCertificateRequest) Awaitable<Errors\Result<GetCertificateResponse>>;
  public function UntagCertificateAuthority(UntagCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function CreateCertificateAuthority(CreateCertificateAuthorityRequest) Awaitable<Errors\Result<CreateCertificateAuthorityResponse>>;
  public function CreateCertificateAuthorityAuditReport(CreateCertificateAuthorityAuditReportRequest) Awaitable<Errors\Result<CreateCertificateAuthorityAuditReportResponse>>;
  public function DescribeCertificateAuthority(DescribeCertificateAuthorityRequest) Awaitable<Errors\Result<DescribeCertificateAuthorityResponse>>;
  public function GetCertificateAuthorityCertificate(GetCertificateAuthorityCertificateRequest) Awaitable<Errors\Result<GetCertificateAuthorityCertificateResponse>>;
  public function IssueCertificate(IssueCertificateRequest) Awaitable<Errors\Result<IssueCertificateResponse>>;
  public function UpdateCertificateAuthority(UpdateCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function CreatePermission(CreatePermissionRequest) Awaitable<Errors\Error>;
  public function DeletePermission(DeletePermissionRequest) Awaitable<Errors\Error>;
  public function ListCertificateAuthorities(ListCertificateAuthoritiesRequest) Awaitable<Errors\Result<ListCertificateAuthoritiesResponse>>;
  public function ListPermissions(ListPermissionsRequest) Awaitable<Errors\Result<ListPermissionsResponse>>;
  public function DescribeCertificateAuthorityAuditReport(DescribeCertificateAuthorityAuditReportRequest) Awaitable<Errors\Result<DescribeCertificateAuthorityAuditReportResponse>>;
  public function GetCertificateAuthorityCsr(GetCertificateAuthorityCsrRequest) Awaitable<Errors\Result<GetCertificateAuthorityCsrResponse>>;
}

class CrlConfiguration {
  public boolean $enabled;
  public Integer1To5000 $expiration_in_days;
  public String253 $custom_cname;
  public String3To255 $s_3_bucket_name;
}

class DeleteCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public PermanentDeletionTimeInDays $permanent_deletion_time_in_days;
}

class GetCertificateRequest {
  public Arn $certificate_authority_arn;
  public Arn $certificate_arn;
}

class InvalidPolicyException {
  public string $message;
}

class KeyAlgorithm {
}

class String128 {
}

class CertificateAuthority {
  public CertificateAuthorityType $type;
  public CertificateAuthorityStatus $status;
  public TStamp $not_before;
  public FailureReason $failure_reason;
  public RevocationConfiguration $revocation_configuration;
  public TStamp $created_at;
  public TStamp $last_state_change_at;
  public TStamp $not_after;
  public CertificateAuthorityConfiguration $certificate_authority_configuration;
  public TStamp $restorable_until;
  public Arn $arn;
  public string $serial;
}

class DescribeCertificateAuthorityResponse {
  public CertificateAuthority $certificate_authority;
}

class GetCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
}

class IssueCertificateResponse {
  public Arn $certificate_arn;
}

class Permission {
  public ActionList $actions;
  public string $policy;
  public Arn $certificate_authority_arn;
  public TStamp $created_at;
  public string $principal;
  public string $source_account;
}

class ResourceNotFoundException {
  public string $message;
}

class RevokeCertificateRequest {
  public Arn $certificate_authority_arn;
  public String128 $certificate_serial;
  public RevocationReason $revocation_reason;
}

class TagList {
}

class ActionList {
}

class CertificateAuthorityConfiguration {
  public ASN1Subject $subject;
  public KeyAlgorithm $key_algorithm;
  public SigningAlgorithm $signing_algorithm;
}

class CertificateAuthorityType {
}

class CertificateBodyBlob {
}

class InvalidNextTokenException {
  public string $message;
}

class InvalidStateException {
  public string $message;
}

class TagValue {
}

class String3To255 {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class CountryCodeString {
}

class DeletePermissionRequest {
  public Arn $certificate_authority_arn;
  public Principal $principal;
  public AccountId $source_account;
}

class DistinguishedNameQualifierString {
}

class Integer1To5000 {
}

class RevocationConfiguration {
  public CrlConfiguration $crl_configuration;
}

class RevocationReason {
}

class ASN1Subject {
  public String40 $surname;
  public String5 $initials;
  public String3 $generation_qualifier;
  public CountryCodeString $country;
  public String64 $organizational_unit;
  public String128 $state;
  public String64 $common_name;
  public String128 $pseudonym;
  public DistinguishedNameQualifierString $distinguished_name_qualifier;
  public String64 $serial_number;
  public String64 $title;
  public String16 $given_name;
  public String64 $organization;
  public String128 $locality;
}

class CreateCertificateAuthorityAuditReportResponse {
  public AuditReportId $audit_report_id;
  public string $s_3_key;
}

class IssueCertificateRequest {
  public Arn $certificate_authority_arn;
  public CsrBlob $csr;
  public SigningAlgorithm $signing_algorithm;
  public Arn $template_arn;
  public Validity $validity;
  public IdempotencyToken $idempotency_token;
}

class NextToken {
}

class PermanentDeletionTimeInDays {
}

class TagKey {
}

class TagCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public TagList $tags;
}

class AuditReportId {
}

class CsrBlob {
}

class ImportCertificateAuthorityCertificateRequest {
  public Arn $certificate_authority_arn;
  public CertificateBodyBlob $certificate;
  public CertificateChainBlob $certificate_chain;
}

class LimitExceededException {
  public string $message;
}

class ListCertificateAuthoritiesResponse {
  public CertificateAuthorities $certificate_authorities;
  public NextToken $next_token;
}

class RequestFailedException {
  public string $message;
}

class AuditReportResponseFormat {
}

class CertificateChain {
}

class CreateCertificateAuthorityAuditReportRequest {
  public Arn $certificate_authority_arn;
  public string $s_3_bucket_name;
  public AuditReportResponseFormat $audit_report_response_format;
}

class DescribeCertificateAuthorityAuditReportRequest {
  public Arn $certificate_authority_arn;
  public AuditReportId $audit_report_id;
}

class CertificateAuthorities {
}

class GetCertificateAuthorityCsrRequest {
  public Arn $certificate_authority_arn;
}

class InvalidArnException {
  public string $message;
}

class ListCertificateAuthoritiesRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
}

class Boolean {
}

class GetCertificateAuthorityCertificateRequest {
  public Arn $certificate_authority_arn;
}

class InvalidRequestException {
  public string $message;
}

class PermissionList {
}

class String {
}

class String3 {
}

class AuditReportStatus {
}

class CertificateChainBlob {
}

class CreatePermissionRequest {
  public Arn $certificate_authority_arn;
  public Principal $principal;
  public AccountId $source_account;
  public ActionList $actions;
}

class ListTagsResponse {
  public TagList $tags;
  public NextToken $next_token;
}

class PermissionAlreadyExistsException {
  public string $message;
}

class SigningAlgorithm {
}

class CsrBody {
}

class String253 {
}

class ValidityPeriodType {
}

class Principal {
}

class RequestAlreadyProcessedException {
  public string $message;
}

class RestoreCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
}

class GetCertificateAuthorityCsrResponse {
  public CsrBody $csr;
}

class IdempotencyToken {
}

class ActionType {
}

class CertificateAuthorityStatus {
}

class ConcurrentModificationException {
  public string $message;
}

class DescribeCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
}

class FailureReason {
}

class GetCertificateAuthorityCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
}

class ListPermissionsResponse {
  public PermissionList $permissions;
  public NextToken $next_token;
}

class MalformedCSRException {
  public string $message;
}

class MaxResults {
}

class PositiveLong {
}

class RequestInProgressException {
  public string $message;
}

class TStamp {
}

class AccountId {
}

class Arn {
}

class ListTagsRequest {
  public NextToken $next_token;
  public MaxResults $max_results;
  public Arn $certificate_authority_arn;
}

class MalformedCertificateException {
  public string $message;
}

class String5 {
}

class String64 {
}

class DescribeCertificateAuthorityAuditReportResponse {
  public AuditReportStatus $audit_report_status;
  public string $s_3_bucket_name;
  public string $s_3_key;
  public TStamp $created_at;
}

class ListPermissionsRequest {
  public Arn $certificate_authority_arn;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class String40 {
}

class UntagCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public TagList $tags;
}

class UpdateCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public RevocationConfiguration $revocation_configuration;
  public CertificateAuthorityStatus $status;
}

class Validity {
  public PositiveLong $value;
  public ValidityPeriodType $type;
}

class String16 {
}

class TooManyTagsException {
  public string $message;
}

class CertificateBody {
}

class CertificateMismatchException {
  public string $message;
}

class CreateCertificateAuthorityRequest {
  public RevocationConfiguration $revocation_configuration;
  public CertificateAuthorityType $certificate_authority_type;
  public IdempotencyToken $idempotency_token;
  public TagList $tags;
  public CertificateAuthorityConfiguration $certificate_authority_configuration;
}

class CreateCertificateAuthorityResponse {
  public Arn $certificate_authority_arn;
}

class InvalidArgsException {
  public string $message;
}

class InvalidTagException {
  public string $message;
}

