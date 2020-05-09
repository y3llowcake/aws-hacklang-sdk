<?hh // strict
namespace slack\aws\acm-pca;

interface ACM PCA {
  public function CreateCertificateAuthority(CreateCertificateAuthorityRequest) Awaitable<Errors\Result<CreateCertificateAuthorityResponse>>;
  public function CreateCertificateAuthorityAuditReport(CreateCertificateAuthorityAuditReportRequest) Awaitable<Errors\Result<CreateCertificateAuthorityAuditReportResponse>>;
  public function CreatePermission(CreatePermissionRequest) Awaitable<Errors\Error>;
  public function DeleteCertificateAuthority(DeleteCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function DeletePermission(DeletePermissionRequest) Awaitable<Errors\Error>;
  public function DescribeCertificateAuthority(DescribeCertificateAuthorityRequest) Awaitable<Errors\Result<DescribeCertificateAuthorityResponse>>;
  public function DescribeCertificateAuthorityAuditReport(DescribeCertificateAuthorityAuditReportRequest) Awaitable<Errors\Result<DescribeCertificateAuthorityAuditReportResponse>>;
  public function GetCertificate(GetCertificateRequest) Awaitable<Errors\Result<GetCertificateResponse>>;
  public function GetCertificateAuthorityCertificate(GetCertificateAuthorityCertificateRequest) Awaitable<Errors\Result<GetCertificateAuthorityCertificateResponse>>;
  public function GetCertificateAuthorityCsr(GetCertificateAuthorityCsrRequest) Awaitable<Errors\Result<GetCertificateAuthorityCsrResponse>>;
  public function ImportCertificateAuthorityCertificate(ImportCertificateAuthorityCertificateRequest) Awaitable<Errors\Error>;
  public function IssueCertificate(IssueCertificateRequest) Awaitable<Errors\Result<IssueCertificateResponse>>;
  public function ListCertificateAuthorities(ListCertificateAuthoritiesRequest) Awaitable<Errors\Result<ListCertificateAuthoritiesResponse>>;
  public function ListPermissions(ListPermissionsRequest) Awaitable<Errors\Result<ListPermissionsResponse>>;
  public function ListTags(ListTagsRequest) Awaitable<Errors\Result<ListTagsResponse>>;
  public function RestoreCertificateAuthority(RestoreCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function RevokeCertificate(RevokeCertificateRequest) Awaitable<Errors\Error>;
  public function TagCertificateAuthority(TagCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function UntagCertificateAuthority(UntagCertificateAuthorityRequest) Awaitable<Errors\Error>;
  public function UpdateCertificateAuthority(UpdateCertificateAuthorityRequest) Awaitable<Errors\Error>;
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
}

class AccountId {
}

class ActionList {
}

class ActionType {
}

class Arn {
}

class AuditReportId {
}

class AuditReportResponseFormat {
}

class AuditReportStatus {
}

class Boolean {
}

class CertificateAuthorities {
}

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
}

class CertificateAuthorityConfiguration {
  public KeyAlgorithm $key_algorithm;
  public SigningAlgorithm $signing_algorithm;
  public ASN1Subject $subject;
}

class CertificateAuthorityStatus {
}

class CertificateAuthorityType {
}

class CertificateBody {
}

class CertificateBodyBlob {
}

class CertificateChain {
}

class CertificateChainBlob {
}

class CertificateMismatchException {
  public string $message;
}

class ConcurrentModificationException {
  public string $message;
}

class CountryCodeString {
}

class CreateCertificateAuthorityAuditReportRequest {
  public AuditReportResponseFormat $audit_report_response_format;
  public Arn $certificate_authority_arn;
  public string $s_3_bucket_name;
}

class CreateCertificateAuthorityAuditReportResponse {
  public AuditReportId $audit_report_id;
  public string $s_3_key;
}

class CreateCertificateAuthorityRequest {
  public CertificateAuthorityConfiguration $certificate_authority_configuration;
  public CertificateAuthorityType $certificate_authority_type;
  public IdempotencyToken $idempotency_token;
  public RevocationConfiguration $revocation_configuration;
  public TagList $tags;
}

class CreateCertificateAuthorityResponse {
  public Arn $certificate_authority_arn;
}

class CreatePermissionRequest {
  public ActionList $actions;
  public Arn $certificate_authority_arn;
  public Principal $principal;
  public AccountId $source_account;
}

class CrlConfiguration {
  public String253 $custom_cname;
  public boolean $enabled;
  public Integer1To5000 $expiration_in_days;
  public String3To255 $s_3_bucket_name;
}

class CsrBlob {
}

class CsrBody {
}

class DeleteCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public PermanentDeletionTimeInDays $permanent_deletion_time_in_days;
}

class DeletePermissionRequest {
  public Arn $certificate_authority_arn;
  public Principal $principal;
  public AccountId $source_account;
}

class DescribeCertificateAuthorityAuditReportRequest {
  public AuditReportId $audit_report_id;
  public Arn $certificate_authority_arn;
}

class DescribeCertificateAuthorityAuditReportResponse {
  public AuditReportStatus $audit_report_status;
  public TStamp $created_at;
  public string $s_3_bucket_name;
  public string $s_3_key;
}

class DescribeCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
}

class DescribeCertificateAuthorityResponse {
  public CertificateAuthority $certificate_authority;
}

class DistinguishedNameQualifierString {
}

class FailureReason {
}

class GetCertificateAuthorityCertificateRequest {
  public Arn $certificate_authority_arn;
}

class GetCertificateAuthorityCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
}

class GetCertificateAuthorityCsrRequest {
  public Arn $certificate_authority_arn;
}

class GetCertificateAuthorityCsrResponse {
  public CsrBody $csr;
}

class GetCertificateRequest {
  public Arn $certificate_arn;
  public Arn $certificate_authority_arn;
}

class GetCertificateResponse {
  public CertificateBody $certificate;
  public CertificateChain $certificate_chain;
}

class IdempotencyToken {
}

class ImportCertificateAuthorityCertificateRequest {
  public CertificateBodyBlob $certificate;
  public Arn $certificate_authority_arn;
  public CertificateChainBlob $certificate_chain;
}

class Integer1To5000 {
}

class InvalidArgsException {
  public string $message;
}

class InvalidArnException {
  public string $message;
}

class InvalidNextTokenException {
  public string $message;
}

class InvalidPolicyException {
  public string $message;
}

class InvalidRequestException {
  public string $message;
}

class InvalidStateException {
  public string $message;
}

class InvalidTagException {
  public string $message;
}

class IssueCertificateRequest {
  public Arn $certificate_authority_arn;
  public CsrBlob $csr;
  public IdempotencyToken $idempotency_token;
  public SigningAlgorithm $signing_algorithm;
  public Arn $template_arn;
  public Validity $validity;
}

class IssueCertificateResponse {
  public Arn $certificate_arn;
}

class KeyAlgorithm {
}

class LimitExceededException {
  public string $message;
}

class ListCertificateAuthoritiesRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListCertificateAuthoritiesResponse {
  public CertificateAuthorities $certificate_authorities;
  public NextToken $next_token;
}

class ListPermissionsRequest {
  public Arn $certificate_authority_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListPermissionsResponse {
  public NextToken $next_token;
  public PermissionList $permissions;
}

class ListTagsRequest {
  public Arn $certificate_authority_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListTagsResponse {
  public NextToken $next_token;
  public TagList $tags;
}

class MalformedCSRException {
  public string $message;
}

class MalformedCertificateException {
  public string $message;
}

class MaxResults {
}

class NextToken {
}

class PermanentDeletionTimeInDays {
}

class Permission {
  public ActionList $actions;
  public Arn $certificate_authority_arn;
  public TStamp $created_at;
  public string $policy;
  public string $principal;
  public string $source_account;
}

class PermissionAlreadyExistsException {
  public string $message;
}

class PermissionList {
}

class PositiveLong {
}

class Principal {
}

class RequestAlreadyProcessedException {
  public string $message;
}

class RequestFailedException {
  public string $message;
}

class RequestInProgressException {
  public string $message;
}

class ResourceNotFoundException {
  public string $message;
}

class RestoreCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
}

class RevocationConfiguration {
  public CrlConfiguration $crl_configuration;
}

class RevocationReason {
}

class RevokeCertificateRequest {
  public Arn $certificate_authority_arn;
  public String128 $certificate_serial;
  public RevocationReason $revocation_reason;
}

class SigningAlgorithm {
}

class String {
}

class String128 {
}

class String16 {
}

class String253 {
}

class String3 {
}

class String3To255 {
}

class String40 {
}

class String5 {
}

class String64 {
}

class TStamp {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagCertificateAuthorityRequest {
  public Arn $certificate_authority_arn;
  public TagList $tags;
}

class TagKey {
}

class TagList {
}

class TagValue {
}

class TooManyTagsException {
  public string $message;
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
  public ValidityPeriodType $type;
  public PositiveLong $value;
}

class ValidityPeriodType {
}

