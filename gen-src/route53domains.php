<?hh // strict
namespace slack\aws\route53domains;

interface Route 53 Domains {
  public function AcceptDomainTransferFromAnotherAwsAccount(AcceptDomainTransferFromAnotherAwsAccountRequest): Awaitable<Errors\Result<AcceptDomainTransferFromAnotherAwsAccountResponse>>;
  public function CancelDomainTransferToAnotherAwsAccount(CancelDomainTransferToAnotherAwsAccountRequest): Awaitable<Errors\Result<CancelDomainTransferToAnotherAwsAccountResponse>>;
  public function CheckDomainAvailability(CheckDomainAvailabilityRequest): Awaitable<Errors\Result<CheckDomainAvailabilityResponse>>;
  public function CheckDomainTransferability(CheckDomainTransferabilityRequest): Awaitable<Errors\Result<CheckDomainTransferabilityResponse>>;
  public function DeleteTagsForDomain(DeleteTagsForDomainRequest): Awaitable<Errors\Result<DeleteTagsForDomainResponse>>;
  public function DisableDomainAutoRenew(DisableDomainAutoRenewRequest): Awaitable<Errors\Result<DisableDomainAutoRenewResponse>>;
  public function DisableDomainTransferLock(DisableDomainTransferLockRequest): Awaitable<Errors\Result<DisableDomainTransferLockResponse>>;
  public function EnableDomainAutoRenew(EnableDomainAutoRenewRequest): Awaitable<Errors\Result<EnableDomainAutoRenewResponse>>;
  public function EnableDomainTransferLock(EnableDomainTransferLockRequest): Awaitable<Errors\Result<EnableDomainTransferLockResponse>>;
  public function GetContactReachabilityStatus(GetContactReachabilityStatusRequest): Awaitable<Errors\Result<GetContactReachabilityStatusResponse>>;
  public function GetDomainDetail(GetDomainDetailRequest): Awaitable<Errors\Result<GetDomainDetailResponse>>;
  public function GetDomainSuggestions(GetDomainSuggestionsRequest): Awaitable<Errors\Result<GetDomainSuggestionsResponse>>;
  public function GetOperationDetail(GetOperationDetailRequest): Awaitable<Errors\Result<GetOperationDetailResponse>>;
  public function ListDomains(ListDomainsRequest): Awaitable<Errors\Result<ListDomainsResponse>>;
  public function ListOperations(ListOperationsRequest): Awaitable<Errors\Result<ListOperationsResponse>>;
  public function ListTagsForDomain(ListTagsForDomainRequest): Awaitable<Errors\Result<ListTagsForDomainResponse>>;
  public function RegisterDomain(RegisterDomainRequest): Awaitable<Errors\Result<RegisterDomainResponse>>;
  public function RejectDomainTransferFromAnotherAwsAccount(RejectDomainTransferFromAnotherAwsAccountRequest): Awaitable<Errors\Result<RejectDomainTransferFromAnotherAwsAccountResponse>>;
  public function RenewDomain(RenewDomainRequest): Awaitable<Errors\Result<RenewDomainResponse>>;
  public function ResendContactReachabilityEmail(ResendContactReachabilityEmailRequest): Awaitable<Errors\Result<ResendContactReachabilityEmailResponse>>;
  public function RetrieveDomainAuthCode(RetrieveDomainAuthCodeRequest): Awaitable<Errors\Result<RetrieveDomainAuthCodeResponse>>;
  public function TransferDomain(TransferDomainRequest): Awaitable<Errors\Result<TransferDomainResponse>>;
  public function TransferDomainToAnotherAwsAccount(TransferDomainToAnotherAwsAccountRequest): Awaitable<Errors\Result<TransferDomainToAnotherAwsAccountResponse>>;
  public function UpdateDomainContact(UpdateDomainContactRequest): Awaitable<Errors\Result<UpdateDomainContactResponse>>;
  public function UpdateDomainContactPrivacy(UpdateDomainContactPrivacyRequest): Awaitable<Errors\Result<UpdateDomainContactPrivacyResponse>>;
  public function UpdateDomainNameservers(UpdateDomainNameserversRequest): Awaitable<Errors\Result<UpdateDomainNameserversResponse>>;
  public function UpdateTagsForDomain(UpdateTagsForDomainRequest): Awaitable<Errors\Result<UpdateTagsForDomainResponse>>;
  public function ViewBilling(ViewBillingRequest): Awaitable<Errors\Result<ViewBillingResponse>>;
}

class AcceptDomainTransferFromAnotherAwsAccountRequest {
  public DomainName $domain_name;
  public string $password;
}

class AcceptDomainTransferFromAnotherAwsAccountResponse {
  public OperationId $operation_id;
}

class AccountId {
}

class AddressLine {
}

class BillingRecord {
  public Timestamp $bill_date;
  public DomainName $domain_name;
  public InvoiceId $invoice_id;
  public OperationType $operation;
  public Price $price;
}

class BillingRecords {
}

class Boolean {
}

class CancelDomainTransferToAnotherAwsAccountRequest {
  public DomainName $domain_name;
}

class CancelDomainTransferToAnotherAwsAccountResponse {
  public OperationId $operation_id;
}

class CheckDomainAvailabilityRequest {
  public DomainName $domain_name;
  public LangCode $idn_lang_code;
}

class CheckDomainAvailabilityResponse {
  public DomainAvailability $availability;
}

class CheckDomainTransferabilityRequest {
  public DomainAuthCode $auth_code;
  public DomainName $domain_name;
}

class CheckDomainTransferabilityResponse {
  public DomainTransferability $transferability;
}

class City {
}

class ContactDetail {
  public AddressLine $address_line_1;
  public AddressLine $address_line_2;
  public City $city;
  public ContactType $contact_type;
  public CountryCode $country_code;
  public Email $email;
  public ExtraParamList $extra_params;
  public ContactNumber $fax;
  public ContactName $first_name;
  public ContactName $last_name;
  public ContactName $organization_name;
  public ContactNumber $phone_number;
  public State $state;
  public ZipCode $zip_code;
}

class ContactName {
}

class ContactNumber {
}

class ContactType {
}

class CountryCode {
}

class CurrentExpiryYear {
}

class DNSSec {
}

class DeleteTagsForDomainRequest {
  public DomainName $domain_name;
  public TagKeyList $tags_to_delete;
}

class DeleteTagsForDomainResponse {
}

class DisableDomainAutoRenewRequest {
  public DomainName $domain_name;
}

class DisableDomainAutoRenewResponse {
}

class DisableDomainTransferLockRequest {
  public DomainName $domain_name;
}

class DisableDomainTransferLockResponse {
  public OperationId $operation_id;
}

class DomainAuthCode {
}

class DomainAvailability {
}

class DomainLimitExceeded {
  public ErrorMessage $message;
}

class DomainName {
}

class DomainStatus {
}

class DomainStatusList {
}

class DomainSuggestion {
  public string $availability;
  public DomainName $domain_name;
}

class DomainSuggestionsList {
}

class DomainSummary {
  public boolean $auto_renew;
  public DomainName $domain_name;
  public Timestamp $expiry;
  public boolean $transfer_lock;
}

class DomainSummaryList {
}

class DomainTransferability {
  public Transferable $transferable;
}

class DuplicateRequest {
  public ErrorMessage $message;
}

class DurationInYears {
}

class Email {
}

class EnableDomainAutoRenewRequest {
  public DomainName $domain_name;
}

class EnableDomainAutoRenewResponse {
}

class EnableDomainTransferLockRequest {
  public DomainName $domain_name;
}

class EnableDomainTransferLockResponse {
  public OperationId $operation_id;
}

class ErrorMessage {
}

class ExtraParam {
  public ExtraParamName $name;
  public ExtraParamValue $value;
}

class ExtraParamList {
}

class ExtraParamName {
}

class ExtraParamValue {
}

class FIAuthKey {
}

class GetContactReachabilityStatusRequest {
  public DomainName $domain_name;
}

class GetContactReachabilityStatusResponse {
  public DomainName $domain_name;
  public ReachabilityStatus $status;
}

class GetDomainDetailRequest {
  public DomainName $domain_name;
}

class GetDomainDetailResponse {
  public Email $abuse_contact_email;
  public ContactNumber $abuse_contact_phone;
  public ContactDetail $admin_contact;
  public boolean $admin_privacy;
  public boolean $auto_renew;
  public Timestamp $creation_date;
  public DNSSec $dns_sec;
  public DomainName $domain_name;
  public Timestamp $expiration_date;
  public NameserverList $nameservers;
  public ContactDetail $registrant_contact;
  public boolean $registrant_privacy;
  public RegistrarName $registrar_name;
  public RegistrarUrl $registrar_url;
  public RegistryDomainId $registry_domain_id;
  public Reseller $reseller;
  public DomainStatusList $status_list;
  public ContactDetail $tech_contact;
  public boolean $tech_privacy;
  public Timestamp $updated_date;
  public RegistrarWhoIsServer $who_is_server;
}

class GetDomainSuggestionsRequest {
  public DomainName $domain_name;
  public boolean $only_available;
  public int $suggestion_count;
}

class GetDomainSuggestionsResponse {
  public DomainSuggestionsList $suggestions_list;
}

class GetOperationDetailRequest {
  public OperationId $operation_id;
}

class GetOperationDetailResponse {
  public DomainName $domain_name;
  public ErrorMessage $message;
  public OperationId $operation_id;
  public OperationStatus $status;
  public Timestamp $submitted_date;
  public OperationType $type;
}

class GlueIp {
}

class GlueIpList {
}

class HostName {
}

class Integer {
}

class InvalidInput {
  public ErrorMessage $message;
}

class InvoiceId {
}

class LangCode {
}

class ListDomainsRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;
}

class ListDomainsResponse {
  public DomainSummaryList $domains;
  public PageMarker $next_page_marker;
}

class ListOperationsRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public Timestamp $submitted_since;
}

class ListOperationsResponse {
  public PageMarker $next_page_marker;
  public OperationSummaryList $operations;
}

class ListTagsForDomainRequest {
  public DomainName $domain_name;
}

class ListTagsForDomainResponse {
  public TagList $tag_list;
}

class Nameserver {
  public GlueIpList $glue_ips;
  public HostName $name;
}

class NameserverList {
}

class OperationId {
}

class OperationLimitExceeded {
  public ErrorMessage $message;
}

class OperationStatus {
}

class OperationSummary {
  public OperationId $operation_id;
  public OperationStatus $status;
  public Timestamp $submitted_date;
  public OperationType $type;
}

class OperationSummaryList {
}

class OperationType {
}

class PageMarker {
}

class PageMaxItems {
}

class Price {
}

class ReachabilityStatus {
}

class RegisterDomainRequest {
  public ContactDetail $admin_contact;
  public boolean $auto_renew;
  public DomainName $domain_name;
  public DurationInYears $duration_in_years;
  public LangCode $idn_lang_code;
  public boolean $privacy_protect_admin_contact;
  public boolean $privacy_protect_registrant_contact;
  public boolean $privacy_protect_tech_contact;
  public ContactDetail $registrant_contact;
  public ContactDetail $tech_contact;
}

class RegisterDomainResponse {
  public OperationId $operation_id;
}

class RegistrarName {
}

class RegistrarUrl {
}

class RegistrarWhoIsServer {
}

class RegistryDomainId {
}

class RejectDomainTransferFromAnotherAwsAccountRequest {
  public DomainName $domain_name;
}

class RejectDomainTransferFromAnotherAwsAccountResponse {
  public OperationId $operation_id;
}

class RenewDomainRequest {
  public CurrentExpiryYear $current_expiry_year;
  public DomainName $domain_name;
  public DurationInYears $duration_in_years;
}

class RenewDomainResponse {
  public OperationId $operation_id;
}

class Reseller {
}

class ResendContactReachabilityEmailRequest {
  public DomainName $domain_name;
}

class ResendContactReachabilityEmailResponse {
  public DomainName $domain_name;
  public Email $email_address;
  public boolean $is_already_verified;
}

class RetrieveDomainAuthCodeRequest {
  public DomainName $domain_name;
}

class RetrieveDomainAuthCodeResponse {
  public DomainAuthCode $auth_code;
}

class State {
}

class String {
}

class TLDRulesViolation {
  public ErrorMessage $message;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeyList {
}

class TagList {
}

class TagValue {
}

class Timestamp {
}

class TransferDomainRequest {
  public ContactDetail $admin_contact;
  public DomainAuthCode $auth_code;
  public boolean $auto_renew;
  public DomainName $domain_name;
  public DurationInYears $duration_in_years;
  public LangCode $idn_lang_code;
  public NameserverList $nameservers;
  public boolean $privacy_protect_admin_contact;
  public boolean $privacy_protect_registrant_contact;
  public boolean $privacy_protect_tech_contact;
  public ContactDetail $registrant_contact;
  public ContactDetail $tech_contact;
}

class TransferDomainResponse {
  public OperationId $operation_id;
}

class TransferDomainToAnotherAwsAccountRequest {
  public AccountId $account_id;
  public DomainName $domain_name;
}

class TransferDomainToAnotherAwsAccountResponse {
  public OperationId $operation_id;
  public string $password;
}

class Transferable {
}

class UnsupportedTLD {
  public ErrorMessage $message;
}

class UpdateDomainContactPrivacyRequest {
  public boolean $admin_privacy;
  public DomainName $domain_name;
  public boolean $registrant_privacy;
  public boolean $tech_privacy;
}

class UpdateDomainContactPrivacyResponse {
  public OperationId $operation_id;
}

class UpdateDomainContactRequest {
  public ContactDetail $admin_contact;
  public DomainName $domain_name;
  public ContactDetail $registrant_contact;
  public ContactDetail $tech_contact;
}

class UpdateDomainContactResponse {
  public OperationId $operation_id;
}

class UpdateDomainNameserversRequest {
  public DomainName $domain_name;
  public FIAuthKey $fi_auth_key;
  public NameserverList $nameservers;
}

class UpdateDomainNameserversResponse {
  public OperationId $operation_id;
}

class UpdateTagsForDomainRequest {
  public DomainName $domain_name;
  public TagList $tags_to_update;
}

class UpdateTagsForDomainResponse {
}

class ViewBillingRequest {
  public Timestamp $end;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public Timestamp $start;
}

class ViewBillingResponse {
  public BillingRecords $billing_records;
  public PageMarker $next_page_marker;
}

class ZipCode {
}

