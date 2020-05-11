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

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'password' => string,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->password = $password ?? ;
  }
}

class AcceptDomainTransferFromAnotherAwsAccountResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

type AccountId = string;

type AddressLine = string;

class BillingRecord {
  public Timestamp $bill_date;
  public DomainName $domain_name;
  public InvoiceId $invoice_id;
  public OperationType $operation;
  public Price $price;

  public function __construct(shape(
  ?'bill_date' => Timestamp,
  ?'domain_name' => DomainName,
  ?'invoice_id' => InvoiceId,
  ?'operation' => OperationType,
  ?'price' => Price,
  ) $s = shape()) {
    $this->bill_date = $bill_date ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->invoice_id = $invoice_id ?? "";
    $this->operation = $operation ?? ;
    $this->price = $price ?? 0.0;
  }
}

type BillingRecords = vec<BillingRecord>;

type Boolean = bool;

class CancelDomainTransferToAnotherAwsAccountRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class CancelDomainTransferToAnotherAwsAccountResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class CheckDomainAvailabilityRequest {
  public DomainName $domain_name;
  public LangCode $idn_lang_code;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'idn_lang_code' => LangCode,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->idn_lang_code = $idn_lang_code ?? ;
  }
}

class CheckDomainAvailabilityResponse {
  public DomainAvailability $availability;

  public function __construct(shape(
  ?'availability' => DomainAvailability,
  ) $s = shape()) {
    $this->availability = $availability ?? ;
  }
}

class CheckDomainTransferabilityRequest {
  public DomainAuthCode $auth_code;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'auth_code' => DomainAuthCode,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->auth_code = $auth_code ?? ;
    $this->domain_name = $domain_name ?? "";
  }
}

class CheckDomainTransferabilityResponse {
  public DomainTransferability $transferability;

  public function __construct(shape(
  ?'transferability' => DomainTransferability,
  ) $s = shape()) {
    $this->transferability = $transferability ?? ;
  }
}

type City = string;

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

  public function __construct(shape(
  ?'address_line_1' => AddressLine,
  ?'address_line_2' => AddressLine,
  ?'city' => City,
  ?'contact_type' => ContactType,
  ?'country_code' => CountryCode,
  ?'email' => Email,
  ?'extra_params' => ExtraParamList,
  ?'fax' => ContactNumber,
  ?'first_name' => ContactName,
  ?'last_name' => ContactName,
  ?'organization_name' => ContactName,
  ?'phone_number' => ContactNumber,
  ?'state' => State,
  ?'zip_code' => ZipCode,
  ) $s = shape()) {
    $this->address_line_1 = $address_line_1 ?? ;
    $this->address_line_2 = $address_line_2 ?? ;
    $this->city = $city ?? "";
    $this->contact_type = $contact_type ?? "";
    $this->country_code = $country_code ?? "";
    $this->email = $email ?? "";
    $this->extra_params = $extra_params ?? ;
    $this->fax = $fax ?? ;
    $this->first_name = $first_name ?? ;
    $this->last_name = $last_name ?? ;
    $this->organization_name = $organization_name ?? ;
    $this->phone_number = $phone_number ?? ;
    $this->state = $state ?? "";
    $this->zip_code = $zip_code ?? "";
  }
}

type ContactName = string;

type ContactNumber = string;

type ContactType = string;

type CountryCode = string;

type CurrentExpiryYear = int;

type DNSSec = string;

class DeleteTagsForDomainRequest {
  public DomainName $domain_name;
  public TagKeyList $tags_to_delete;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'tags_to_delete' => TagKeyList,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->tags_to_delete = $tags_to_delete ?? ;
  }
}

class DeleteTagsForDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableDomainAutoRenewRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class DisableDomainAutoRenewResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableDomainTransferLockRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class DisableDomainTransferLockResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

type DomainAuthCode = string;

type DomainAvailability = string;

class DomainLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type DomainName = string;

type DomainStatus = string;

type DomainStatusList = vec<DomainStatus>;

class DomainSuggestion {
  public string $availability;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'availability' => string,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->availability = $availability ?? ;
    $this->domain_name = $domain_name ?? "";
  }
}

type DomainSuggestionsList = vec<DomainSuggestion>;

class DomainSummary {
  public boolean $auto_renew;
  public DomainName $domain_name;
  public Timestamp $expiry;
  public boolean $transfer_lock;

  public function __construct(shape(
  ?'auto_renew' => boolean,
  ?'domain_name' => DomainName,
  ?'expiry' => Timestamp,
  ?'transfer_lock' => boolean,
  ) $s = shape()) {
    $this->auto_renew = $auto_renew ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->expiry = $expiry ?? ;
    $this->transfer_lock = $transfer_lock ?? ;
  }
}

type DomainSummaryList = vec<DomainSummary>;

class DomainTransferability {
  public Transferable $transferable;

  public function __construct(shape(
  ?'transferable' => Transferable,
  ) $s = shape()) {
    $this->transferable = $transferable ?? "";
  }
}

class DuplicateRequest {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type DurationInYears = int;

type Email = string;

class EnableDomainAutoRenewRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class EnableDomainAutoRenewResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableDomainTransferLockRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class EnableDomainTransferLockResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

type ErrorMessage = string;

class ExtraParam {
  public ExtraParamName $name;
  public ExtraParamValue $value;

  public function __construct(shape(
  ?'name' => ExtraParamName,
  ?'value' => ExtraParamValue,
  ) $s = shape()) {
    $this->name = $name ?? ;
    $this->value = $value ?? ;
  }
}

type ExtraParamList = vec<ExtraParam>;

type ExtraParamName = string;

type ExtraParamValue = string;

type FIAuthKey = string;

class GetContactReachabilityStatusRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? ;
  }
}

class GetContactReachabilityStatusResponse {
  public DomainName $domain_name;
  public ReachabilityStatus $status;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'status' => ReachabilityStatus,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? ;
    $this->status = $status ?? ;
  }
}

class GetDomainDetailRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
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

  public function __construct(shape(
  ?'abuse_contact_email' => Email,
  ?'abuse_contact_phone' => ContactNumber,
  ?'admin_contact' => ContactDetail,
  ?'admin_privacy' => boolean,
  ?'auto_renew' => boolean,
  ?'creation_date' => Timestamp,
  ?'dns_sec' => DNSSec,
  ?'domain_name' => DomainName,
  ?'expiration_date' => Timestamp,
  ?'nameservers' => NameserverList,
  ?'registrant_contact' => ContactDetail,
  ?'registrant_privacy' => boolean,
  ?'registrar_name' => RegistrarName,
  ?'registrar_url' => RegistrarUrl,
  ?'registry_domain_id' => RegistryDomainId,
  ?'reseller' => Reseller,
  ?'status_list' => DomainStatusList,
  ?'tech_contact' => ContactDetail,
  ?'tech_privacy' => boolean,
  ?'updated_date' => Timestamp,
  ?'who_is_server' => RegistrarWhoIsServer,
  ) $s = shape()) {
    $this->abuse_contact_email = $abuse_contact_email ?? ;
    $this->abuse_contact_phone = $abuse_contact_phone ?? ;
    $this->admin_contact = $admin_contact ?? ;
    $this->admin_privacy = $admin_privacy ?? ;
    $this->auto_renew = $auto_renew ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->dns_sec = $dns_sec ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->expiration_date = $expiration_date ?? ;
    $this->nameservers = $nameservers ?? ;
    $this->registrant_contact = $registrant_contact ?? ;
    $this->registrant_privacy = $registrant_privacy ?? ;
    $this->registrar_name = $registrar_name ?? "";
    $this->registrar_url = $registrar_url ?? "";
    $this->registry_domain_id = $registry_domain_id ?? "";
    $this->reseller = $reseller ?? "";
    $this->status_list = $status_list ?? ;
    $this->tech_contact = $tech_contact ?? ;
    $this->tech_privacy = $tech_privacy ?? ;
    $this->updated_date = $updated_date ?? ;
    $this->who_is_server = $who_is_server ?? ;
  }
}

class GetDomainSuggestionsRequest {
  public DomainName $domain_name;
  public boolean $only_available;
  public int $suggestion_count;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'only_available' => boolean,
  ?'suggestion_count' => int,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->only_available = $only_available ?? ;
    $this->suggestion_count = $suggestion_count ?? ;
  }
}

class GetDomainSuggestionsResponse {
  public DomainSuggestionsList $suggestions_list;

  public function __construct(shape(
  ?'suggestions_list' => DomainSuggestionsList,
  ) $s = shape()) {
    $this->suggestions_list = $suggestions_list ?? ;
  }
}

class GetOperationDetailRequest {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class GetOperationDetailResponse {
  public DomainName $domain_name;
  public ErrorMessage $message;
  public OperationId $operation_id;
  public OperationStatus $status;
  public Timestamp $submitted_date;
  public OperationType $type;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'message' => ErrorMessage,
  ?'operation_id' => OperationId,
  ?'status' => OperationStatus,
  ?'submitted_date' => Timestamp,
  ?'type' => OperationType,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->message = $message ?? ;
    $this->operation_id = $operation_id ?? "";
    $this->status = $status ?? ;
    $this->submitted_date = $submitted_date ?? ;
    $this->type = $type ?? ;
  }
}

type GlueIp = string;

type GlueIpList = vec<GlueIp>;

type HostName = string;

type Integer = int;

class InvalidInput {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type InvoiceId = string;

type LangCode = string;

class ListDomainsRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;

  public function __construct(shape(
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
  }
}

class ListDomainsResponse {
  public DomainSummaryList $domains;
  public PageMarker $next_page_marker;

  public function __construct(shape(
  ?'domains' => DomainSummaryList,
  ?'next_page_marker' => PageMarker,
  ) $s = shape()) {
    $this->domains = $domains ?? ;
    $this->next_page_marker = $next_page_marker ?? ;
  }
}

class ListOperationsRequest {
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public Timestamp $submitted_since;

  public function __construct(shape(
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ?'submitted_since' => Timestamp,
  ) $s = shape()) {
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
    $this->submitted_since = $submitted_since ?? ;
  }
}

class ListOperationsResponse {
  public PageMarker $next_page_marker;
  public OperationSummaryList $operations;

  public function __construct(shape(
  ?'next_page_marker' => PageMarker,
  ?'operations' => OperationSummaryList,
  ) $s = shape()) {
    $this->next_page_marker = $next_page_marker ?? ;
    $this->operations = $operations ?? ;
  }
}

class ListTagsForDomainRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class ListTagsForDomainResponse {
  public TagList $tag_list;

  public function __construct(shape(
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->tag_list = $tag_list ?? [];
  }
}

class Nameserver {
  public GlueIpList $glue_ips;
  public HostName $name;

  public function __construct(shape(
  ?'glue_ips' => GlueIpList,
  ?'name' => HostName,
  ) $s = shape()) {
    $this->glue_ips = $glue_ips ?? ;
    $this->name = $name ?? ;
  }
}

type NameserverList = vec<Nameserver>;

type OperationId = string;

class OperationLimitExceeded {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type OperationStatus = string;

class OperationSummary {
  public OperationId $operation_id;
  public OperationStatus $status;
  public Timestamp $submitted_date;
  public OperationType $type;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ?'status' => OperationStatus,
  ?'submitted_date' => Timestamp,
  ?'type' => OperationType,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
    $this->status = $status ?? ;
    $this->submitted_date = $submitted_date ?? ;
    $this->type = $type ?? ;
  }
}

type OperationSummaryList = vec<OperationSummary>;

type OperationType = string;

type PageMarker = string;

type PageMaxItems = int;

type Price = float;

type ReachabilityStatus = string;

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

  public function __construct(shape(
  ?'admin_contact' => ContactDetail,
  ?'auto_renew' => boolean,
  ?'domain_name' => DomainName,
  ?'duration_in_years' => DurationInYears,
  ?'idn_lang_code' => LangCode,
  ?'privacy_protect_admin_contact' => boolean,
  ?'privacy_protect_registrant_contact' => boolean,
  ?'privacy_protect_tech_contact' => boolean,
  ?'registrant_contact' => ContactDetail,
  ?'tech_contact' => ContactDetail,
  ) $s = shape()) {
    $this->admin_contact = $admin_contact ?? ;
    $this->auto_renew = $auto_renew ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->duration_in_years = $duration_in_years ?? 0;
    $this->idn_lang_code = $idn_lang_code ?? ;
    $this->privacy_protect_admin_contact = $privacy_protect_admin_contact ?? ;
    $this->privacy_protect_registrant_contact = $privacy_protect_registrant_contact ?? ;
    $this->privacy_protect_tech_contact = $privacy_protect_tech_contact ?? ;
    $this->registrant_contact = $registrant_contact ?? ;
    $this->tech_contact = $tech_contact ?? ;
  }
}

class RegisterDomainResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

type RegistrarName = string;

type RegistrarUrl = string;

type RegistrarWhoIsServer = string;

type RegistryDomainId = string;

class RejectDomainTransferFromAnotherAwsAccountRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class RejectDomainTransferFromAnotherAwsAccountResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class RenewDomainRequest {
  public CurrentExpiryYear $current_expiry_year;
  public DomainName $domain_name;
  public DurationInYears $duration_in_years;

  public function __construct(shape(
  ?'current_expiry_year' => CurrentExpiryYear,
  ?'domain_name' => DomainName,
  ?'duration_in_years' => DurationInYears,
  ) $s = shape()) {
    $this->current_expiry_year = $current_expiry_year ?? 0;
    $this->domain_name = $domain_name ?? "";
    $this->duration_in_years = $duration_in_years ?? 0;
  }
}

class RenewDomainResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

type Reseller = string;

class ResendContactReachabilityEmailRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? ;
  }
}

class ResendContactReachabilityEmailResponse {
  public DomainName $domain_name;
  public Email $email_address;
  public boolean $is_already_verified;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'email_address' => Email,
  ?'is_already_verified' => boolean,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? ;
    $this->email_address = $email_address ?? ;
    $this->is_already_verified = $is_already_verified ?? ;
  }
}

class RetrieveDomainAuthCodeRequest {
  public DomainName $domain_name;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
  }
}

class RetrieveDomainAuthCodeResponse {
  public DomainAuthCode $auth_code;

  public function __construct(shape(
  ?'auth_code' => DomainAuthCode,
  ) $s = shape()) {
    $this->auth_code = $auth_code ?? ;
  }
}

type State = string;

type String = string;

class TLDRulesViolation {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

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

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagValue = string;

type Timestamp = int;

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

  public function __construct(shape(
  ?'admin_contact' => ContactDetail,
  ?'auth_code' => DomainAuthCode,
  ?'auto_renew' => boolean,
  ?'domain_name' => DomainName,
  ?'duration_in_years' => DurationInYears,
  ?'idn_lang_code' => LangCode,
  ?'nameservers' => NameserverList,
  ?'privacy_protect_admin_contact' => boolean,
  ?'privacy_protect_registrant_contact' => boolean,
  ?'privacy_protect_tech_contact' => boolean,
  ?'registrant_contact' => ContactDetail,
  ?'tech_contact' => ContactDetail,
  ) $s = shape()) {
    $this->admin_contact = $admin_contact ?? ;
    $this->auth_code = $auth_code ?? ;
    $this->auto_renew = $auto_renew ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->duration_in_years = $duration_in_years ?? 0;
    $this->idn_lang_code = $idn_lang_code ?? ;
    $this->nameservers = $nameservers ?? ;
    $this->privacy_protect_admin_contact = $privacy_protect_admin_contact ?? ;
    $this->privacy_protect_registrant_contact = $privacy_protect_registrant_contact ?? ;
    $this->privacy_protect_tech_contact = $privacy_protect_tech_contact ?? ;
    $this->registrant_contact = $registrant_contact ?? ;
    $this->tech_contact = $tech_contact ?? ;
  }
}

class TransferDomainResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class TransferDomainToAnotherAwsAccountRequest {
  public AccountId $account_id;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'account_id' => AccountId,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->account_id = $account_id ?? "";
    $this->domain_name = $domain_name ?? "";
  }
}

class TransferDomainToAnotherAwsAccountResponse {
  public OperationId $operation_id;
  public string $password;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ?'password' => string,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
    $this->password = $password ?? ;
  }
}

type Transferable = string;

class UnsupportedTLD {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UpdateDomainContactPrivacyRequest {
  public boolean $admin_privacy;
  public DomainName $domain_name;
  public boolean $registrant_privacy;
  public boolean $tech_privacy;

  public function __construct(shape(
  ?'admin_privacy' => boolean,
  ?'domain_name' => DomainName,
  ?'registrant_privacy' => boolean,
  ?'tech_privacy' => boolean,
  ) $s = shape()) {
    $this->admin_privacy = $admin_privacy ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->registrant_privacy = $registrant_privacy ?? ;
    $this->tech_privacy = $tech_privacy ?? ;
  }
}

class UpdateDomainContactPrivacyResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class UpdateDomainContactRequest {
  public ContactDetail $admin_contact;
  public DomainName $domain_name;
  public ContactDetail $registrant_contact;
  public ContactDetail $tech_contact;

  public function __construct(shape(
  ?'admin_contact' => ContactDetail,
  ?'domain_name' => DomainName,
  ?'registrant_contact' => ContactDetail,
  ?'tech_contact' => ContactDetail,
  ) $s = shape()) {
    $this->admin_contact = $admin_contact ?? ;
    $this->domain_name = $domain_name ?? "";
    $this->registrant_contact = $registrant_contact ?? ;
    $this->tech_contact = $tech_contact ?? ;
  }
}

class UpdateDomainContactResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class UpdateDomainNameserversRequest {
  public DomainName $domain_name;
  public FIAuthKey $fi_auth_key;
  public NameserverList $nameservers;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'fi_auth_key' => FIAuthKey,
  ?'nameservers' => NameserverList,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->fi_auth_key = $fi_auth_key ?? "";
    $this->nameservers = $nameservers ?? ;
  }
}

class UpdateDomainNameserversResponse {
  public OperationId $operation_id;

  public function __construct(shape(
  ?'operation_id' => OperationId,
  ) $s = shape()) {
    $this->operation_id = $operation_id ?? "";
  }
}

class UpdateTagsForDomainRequest {
  public DomainName $domain_name;
  public TagList $tags_to_update;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'tags_to_update' => TagList,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->tags_to_update = $tags_to_update ?? ;
  }
}

class UpdateTagsForDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ViewBillingRequest {
  public Timestamp $end;
  public PageMarker $marker;
  public PageMaxItems $max_items;
  public Timestamp $start;

  public function __construct(shape(
  ?'end' => Timestamp,
  ?'marker' => PageMarker,
  ?'max_items' => PageMaxItems,
  ?'start' => Timestamp,
  ) $s = shape()) {
    $this->end = $end ?? ;
    $this->marker = $marker ?? ;
    $this->max_items = $max_items ?? ;
    $this->start = $start ?? ;
  }
}

class ViewBillingResponse {
  public BillingRecords $billing_records;
  public PageMarker $next_page_marker;

  public function __construct(shape(
  ?'billing_records' => BillingRecords,
  ?'next_page_marker' => PageMarker,
  ) $s = shape()) {
    $this->billing_records = $billing_records ?? [];
    $this->next_page_marker = $next_page_marker ?? ;
  }
}

type ZipCode = string;

