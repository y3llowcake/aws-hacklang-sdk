<?hh // strict
namespace slack\aws\route53domains;

interface Route53Domains {
  public function AcceptDomainTransferFromAnotherAwsAccount(AcceptDomainTransferFromAnotherAwsAccountRequest $in): Awaitable<\Errors\Result<AcceptDomainTransferFromAnotherAwsAccountResponse>>;
  public function CancelDomainTransferToAnotherAwsAccount(CancelDomainTransferToAnotherAwsAccountRequest $in): Awaitable<\Errors\Result<CancelDomainTransferToAnotherAwsAccountResponse>>;
  public function CheckDomainAvailability(CheckDomainAvailabilityRequest $in): Awaitable<\Errors\Result<CheckDomainAvailabilityResponse>>;
  public function CheckDomainTransferability(CheckDomainTransferabilityRequest $in): Awaitable<\Errors\Result<CheckDomainTransferabilityResponse>>;
  public function DeleteTagsForDomain(DeleteTagsForDomainRequest $in): Awaitable<\Errors\Result<DeleteTagsForDomainResponse>>;
  public function DisableDomainAutoRenew(DisableDomainAutoRenewRequest $in): Awaitable<\Errors\Result<DisableDomainAutoRenewResponse>>;
  public function DisableDomainTransferLock(DisableDomainTransferLockRequest $in): Awaitable<\Errors\Result<DisableDomainTransferLockResponse>>;
  public function EnableDomainAutoRenew(EnableDomainAutoRenewRequest $in): Awaitable<\Errors\Result<EnableDomainAutoRenewResponse>>;
  public function EnableDomainTransferLock(EnableDomainTransferLockRequest $in): Awaitable<\Errors\Result<EnableDomainTransferLockResponse>>;
  public function GetContactReachabilityStatus(GetContactReachabilityStatusRequest $in): Awaitable<\Errors\Result<GetContactReachabilityStatusResponse>>;
  public function GetDomainDetail(GetDomainDetailRequest $in): Awaitable<\Errors\Result<GetDomainDetailResponse>>;
  public function GetDomainSuggestions(GetDomainSuggestionsRequest $in): Awaitable<\Errors\Result<GetDomainSuggestionsResponse>>;
  public function GetOperationDetail(GetOperationDetailRequest $in): Awaitable<\Errors\Result<GetOperationDetailResponse>>;
  public function ListDomains(ListDomainsRequest $in): Awaitable<\Errors\Result<ListDomainsResponse>>;
  public function ListOperations(ListOperationsRequest $in): Awaitable<\Errors\Result<ListOperationsResponse>>;
  public function ListTagsForDomain(ListTagsForDomainRequest $in): Awaitable<\Errors\Result<ListTagsForDomainResponse>>;
  public function RegisterDomain(RegisterDomainRequest $in): Awaitable<\Errors\Result<RegisterDomainResponse>>;
  public function RejectDomainTransferFromAnotherAwsAccount(RejectDomainTransferFromAnotherAwsAccountRequest $in): Awaitable<\Errors\Result<RejectDomainTransferFromAnotherAwsAccountResponse>>;
  public function RenewDomain(RenewDomainRequest $in): Awaitable<\Errors\Result<RenewDomainResponse>>;
  public function ResendContactReachabilityEmail(ResendContactReachabilityEmailRequest $in): Awaitable<\Errors\Result<ResendContactReachabilityEmailResponse>>;
  public function RetrieveDomainAuthCode(RetrieveDomainAuthCodeRequest $in): Awaitable<\Errors\Result<RetrieveDomainAuthCodeResponse>>;
  public function TransferDomain(TransferDomainRequest $in): Awaitable<\Errors\Result<TransferDomainResponse>>;
  public function TransferDomainToAnotherAwsAccount(TransferDomainToAnotherAwsAccountRequest $in): Awaitable<\Errors\Result<TransferDomainToAnotherAwsAccountResponse>>;
  public function UpdateDomainContact(UpdateDomainContactRequest $in): Awaitable<\Errors\Result<UpdateDomainContactResponse>>;
  public function UpdateDomainContactPrivacy(UpdateDomainContactPrivacyRequest $in): Awaitable<\Errors\Result<UpdateDomainContactPrivacyResponse>>;
  public function UpdateDomainNameservers(UpdateDomainNameserversRequest $in): Awaitable<\Errors\Result<UpdateDomainNameserversResponse>>;
  public function UpdateTagsForDomain(UpdateTagsForDomainRequest $in): Awaitable<\Errors\Result<UpdateTagsForDomainResponse>>;
  public function ViewBilling(ViewBillingRequest $in): Awaitable<\Errors\Result<ViewBillingResponse>>;
}

class AcceptDomainTransferFromAnotherAwsAccountRequest {
  public ?DomainName $domain_name;
  public string $password;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'password' => string,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->password = $s['password'] ?? '';
  }
}

class AcceptDomainTransferFromAnotherAwsAccountResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

type AccountId = string;

type AddressLine = string;

class BillingRecord {
  public ?Timestamp $bill_date;
  public ?DomainName $domain_name;
  public ?InvoiceId $invoice_id;
  public ?OperationType $operation;
  public ?Price $price;

  public function __construct(shape(
    ?'bill_date' => ?Timestamp,
    ?'domain_name' => ?DomainName,
    ?'invoice_id' => ?InvoiceId,
    ?'operation' => ?OperationType,
    ?'price' => ?Price,
  ) $s = shape()) {
    $this->bill_date = $s['bill_date'] ?? 0;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->invoice_id = $s['invoice_id'] ?? '';
    $this->operation = $s['operation'] ?? '';
    $this->price = $s['price'] ?? 0.0;
  }
}

type BillingRecords = vec<BillingRecord>;

type Boolean = bool;

class CancelDomainTransferToAnotherAwsAccountRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class CancelDomainTransferToAnotherAwsAccountResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class CheckDomainAvailabilityRequest {
  public ?DomainName $domain_name;
  public ?LangCode $idn_lang_code;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'idn_lang_code' => ?LangCode,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->idn_lang_code = $s['idn_lang_code'] ?? '';
  }
}

class CheckDomainAvailabilityResponse {
  public ?DomainAvailability $availability;

  public function __construct(shape(
    ?'availability' => ?DomainAvailability,
  ) $s = shape()) {
    $this->availability = $s['availability'] ?? '';
  }
}

class CheckDomainTransferabilityRequest {
  public ?DomainAuthCode $auth_code;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'auth_code' => ?DomainAuthCode,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->auth_code = $s['auth_code'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class CheckDomainTransferabilityResponse {
  public ?DomainTransferability $transferability;

  public function __construct(shape(
    ?'transferability' => ?DomainTransferability,
  ) $s = shape()) {
    $this->transferability = $s['transferability'] ?? null;
  }
}

type City = string;

class ContactDetail {
  public ?AddressLine $address_line_1;
  public ?AddressLine $address_line_2;
  public ?City $city;
  public ?ContactType $contact_type;
  public ?CountryCode $country_code;
  public ?Email $email;
  public ?ExtraParamList $extra_params;
  public ?ContactNumber $fax;
  public ?ContactName $first_name;
  public ?ContactName $last_name;
  public ?ContactName $organization_name;
  public ?ContactNumber $phone_number;
  public ?State $state;
  public ?ZipCode $zip_code;

  public function __construct(shape(
    ?'address_line_1' => ?AddressLine,
    ?'address_line_2' => ?AddressLine,
    ?'city' => ?City,
    ?'contact_type' => ?ContactType,
    ?'country_code' => ?CountryCode,
    ?'email' => ?Email,
    ?'extra_params' => ?ExtraParamList,
    ?'fax' => ?ContactNumber,
    ?'first_name' => ?ContactName,
    ?'last_name' => ?ContactName,
    ?'organization_name' => ?ContactName,
    ?'phone_number' => ?ContactNumber,
    ?'state' => ?State,
    ?'zip_code' => ?ZipCode,
  ) $s = shape()) {
    $this->address_line_1 = $s['address_line_1'] ?? '';
    $this->address_line_2 = $s['address_line_2'] ?? '';
    $this->city = $s['city'] ?? '';
    $this->contact_type = $s['contact_type'] ?? '';
    $this->country_code = $s['country_code'] ?? '';
    $this->email = $s['email'] ?? '';
    $this->extra_params = $s['extra_params'] ?? vec[];
    $this->fax = $s['fax'] ?? '';
    $this->first_name = $s['first_name'] ?? '';
    $this->last_name = $s['last_name'] ?? '';
    $this->organization_name = $s['organization_name'] ?? '';
    $this->phone_number = $s['phone_number'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->zip_code = $s['zip_code'] ?? '';
  }
}

type ContactName = string;

type ContactNumber = string;

type ContactType = string;

type CountryCode = string;

type CurrentExpiryYear = int;

type DNSSec = string;

class DeleteTagsForDomainRequest {
  public ?DomainName $domain_name;
  public ?TagKeyList $tags_to_delete;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'tags_to_delete' => ?TagKeyList,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->tags_to_delete = $s['tags_to_delete'] ?? vec[];
  }
}

class DeleteTagsForDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableDomainAutoRenewRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DisableDomainAutoRenewResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisableDomainTransferLockRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DisableDomainTransferLockResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

type DomainAuthCode = string;

type DomainAvailability = string;

class DomainLimitExceeded {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DomainName = string;

type DomainStatus = string;

type DomainStatusList = vec<DomainStatus>;

class DomainSuggestion {
  public string $availability;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'availability' => string,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->availability = $s['availability'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

type DomainSuggestionsList = vec<DomainSuggestion>;

class DomainSummary {
  public bool $auto_renew;
  public ?DomainName $domain_name;
  public ?Timestamp $expiry;
  public bool $transfer_lock;

  public function __construct(shape(
    ?'auto_renew' => bool,
    ?'domain_name' => ?DomainName,
    ?'expiry' => ?Timestamp,
    ?'transfer_lock' => bool,
  ) $s = shape()) {
    $this->auto_renew = $s['auto_renew'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->expiry = $s['expiry'] ?? 0;
    $this->transfer_lock = $s['transfer_lock'] ?? false;
  }
}

type DomainSummaryList = vec<DomainSummary>;

class DomainTransferability {
  public ?Transferable $transferable;

  public function __construct(shape(
    ?'transferable' => ?Transferable,
  ) $s = shape()) {
    $this->transferable = $s['transferable'] ?? '';
  }
}

class DuplicateRequest {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type DurationInYears = int;

type Email = string;

class EnableDomainAutoRenewRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class EnableDomainAutoRenewResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class EnableDomainTransferLockRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class EnableDomainTransferLockResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

type ErrorMessage = string;

class ExtraParam {
  public ?ExtraParamName $name;
  public ?ExtraParamValue $value;

  public function __construct(shape(
    ?'name' => ?ExtraParamName,
    ?'value' => ?ExtraParamValue,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type ExtraParamList = vec<ExtraParam>;

type ExtraParamName = string;

type ExtraParamValue = string;

type FIAuthKey = string;

class GetContactReachabilityStatusRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetContactReachabilityStatusResponse {
  public ?DomainName $domain_name;
  public ?ReachabilityStatus $status;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'status' => ?ReachabilityStatus,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class GetDomainDetailRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetDomainDetailResponse {
  public ?Email $abuse_contact_email;
  public ?ContactNumber $abuse_contact_phone;
  public ?ContactDetail $admin_contact;
  public bool $admin_privacy;
  public bool $auto_renew;
  public ?Timestamp $creation_date;
  public ?DNSSec $dns_sec;
  public ?DomainName $domain_name;
  public ?Timestamp $expiration_date;
  public ?NameserverList $nameservers;
  public ?ContactDetail $registrant_contact;
  public bool $registrant_privacy;
  public ?RegistrarName $registrar_name;
  public ?RegistrarUrl $registrar_url;
  public ?RegistryDomainId $registry_domain_id;
  public ?Reseller $reseller;
  public ?DomainStatusList $status_list;
  public ?ContactDetail $tech_contact;
  public bool $tech_privacy;
  public ?Timestamp $updated_date;
  public ?RegistrarWhoIsServer $who_is_server;

  public function __construct(shape(
    ?'abuse_contact_email' => ?Email,
    ?'abuse_contact_phone' => ?ContactNumber,
    ?'admin_contact' => ?ContactDetail,
    ?'admin_privacy' => bool,
    ?'auto_renew' => bool,
    ?'creation_date' => ?Timestamp,
    ?'dns_sec' => ?DNSSec,
    ?'domain_name' => ?DomainName,
    ?'expiration_date' => ?Timestamp,
    ?'nameservers' => ?NameserverList,
    ?'registrant_contact' => ?ContactDetail,
    ?'registrant_privacy' => bool,
    ?'registrar_name' => ?RegistrarName,
    ?'registrar_url' => ?RegistrarUrl,
    ?'registry_domain_id' => ?RegistryDomainId,
    ?'reseller' => ?Reseller,
    ?'status_list' => ?DomainStatusList,
    ?'tech_contact' => ?ContactDetail,
    ?'tech_privacy' => bool,
    ?'updated_date' => ?Timestamp,
    ?'who_is_server' => ?RegistrarWhoIsServer,
  ) $s = shape()) {
    $this->abuse_contact_email = $s['abuse_contact_email'] ?? '';
    $this->abuse_contact_phone = $s['abuse_contact_phone'] ?? '';
    $this->admin_contact = $s['admin_contact'] ?? null;
    $this->admin_privacy = $s['admin_privacy'] ?? false;
    $this->auto_renew = $s['auto_renew'] ?? false;
    $this->creation_date = $s['creation_date'] ?? 0;
    $this->dns_sec = $s['dns_sec'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->expiration_date = $s['expiration_date'] ?? 0;
    $this->nameservers = $s['nameservers'] ?? vec[];
    $this->registrant_contact = $s['registrant_contact'] ?? null;
    $this->registrant_privacy = $s['registrant_privacy'] ?? false;
    $this->registrar_name = $s['registrar_name'] ?? '';
    $this->registrar_url = $s['registrar_url'] ?? '';
    $this->registry_domain_id = $s['registry_domain_id'] ?? '';
    $this->reseller = $s['reseller'] ?? '';
    $this->status_list = $s['status_list'] ?? vec[];
    $this->tech_contact = $s['tech_contact'] ?? null;
    $this->tech_privacy = $s['tech_privacy'] ?? false;
    $this->updated_date = $s['updated_date'] ?? 0;
    $this->who_is_server = $s['who_is_server'] ?? '';
  }
}

class GetDomainSuggestionsRequest {
  public ?DomainName $domain_name;
  public bool $only_available;
  public int $suggestion_count;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'only_available' => bool,
    ?'suggestion_count' => int,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->only_available = $s['only_available'] ?? false;
    $this->suggestion_count = $s['suggestion_count'] ?? 0;
  }
}

class GetDomainSuggestionsResponse {
  public ?DomainSuggestionsList $suggestions_list;

  public function __construct(shape(
    ?'suggestions_list' => ?DomainSuggestionsList,
  ) $s = shape()) {
    $this->suggestions_list = $s['suggestions_list'] ?? vec[];
  }
}

class GetOperationDetailRequest {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class GetOperationDetailResponse {
  public ?DomainName $domain_name;
  public ?ErrorMessage $message;
  public ?OperationId $operation_id;
  public ?OperationStatus $status;
  public ?Timestamp $submitted_date;
  public ?OperationType $type;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'message' => ?ErrorMessage,
    ?'operation_id' => ?OperationId,
    ?'status' => ?OperationStatus,
    ?'submitted_date' => ?Timestamp,
    ?'type' => ?OperationType,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->operation_id = $s['operation_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->submitted_date = $s['submitted_date'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type GlueIp = string;

type GlueIpList = vec<GlueIp>;

type HostName = string;

type Integer = int;

class InvalidInput {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type InvoiceId = string;

type LangCode = string;

class ListDomainsRequest {
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;

  public function __construct(shape(
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
  }
}

class ListDomainsResponse {
  public ?DomainSummaryList $domains;
  public ?PageMarker $next_page_marker;

  public function __construct(shape(
    ?'domains' => ?DomainSummaryList,
    ?'next_page_marker' => ?PageMarker,
  ) $s = shape()) {
    $this->domains = $s['domains'] ?? vec[];
    $this->next_page_marker = $s['next_page_marker'] ?? '';
  }
}

class ListOperationsRequest {
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;
  public ?Timestamp $submitted_since;

  public function __construct(shape(
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
    ?'submitted_since' => ?Timestamp,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->submitted_since = $s['submitted_since'] ?? 0;
  }
}

class ListOperationsResponse {
  public ?PageMarker $next_page_marker;
  public ?OperationSummaryList $operations;

  public function __construct(shape(
    ?'next_page_marker' => ?PageMarker,
    ?'operations' => ?OperationSummaryList,
  ) $s = shape()) {
    $this->next_page_marker = $s['next_page_marker'] ?? '';
    $this->operations = $s['operations'] ?? vec[];
  }
}

class ListTagsForDomainRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class ListTagsForDomainResponse {
  public ?TagList $tag_list;

  public function __construct(shape(
    ?'tag_list' => ?TagList,
  ) $s = shape()) {
    $this->tag_list = $s['tag_list'] ?? vec[];
  }
}

class Nameserver {
  public ?GlueIpList $glue_ips;
  public ?HostName $name;

  public function __construct(shape(
    ?'glue_ips' => ?GlueIpList,
    ?'name' => ?HostName,
  ) $s = shape()) {
    $this->glue_ips = $s['glue_ips'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

type NameserverList = vec<Nameserver>;

type OperationId = string;

class OperationLimitExceeded {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type OperationStatus = string;

class OperationSummary {
  public ?OperationId $operation_id;
  public ?OperationStatus $status;
  public ?Timestamp $submitted_date;
  public ?OperationType $type;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
    ?'status' => ?OperationStatus,
    ?'submitted_date' => ?Timestamp,
    ?'type' => ?OperationType,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->submitted_date = $s['submitted_date'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type OperationSummaryList = vec<OperationSummary>;

type OperationType = string;

type PageMarker = string;

type PageMaxItems = int;

type Price = float;

type ReachabilityStatus = string;

class RegisterDomainRequest {
  public ?ContactDetail $admin_contact;
  public bool $auto_renew;
  public ?DomainName $domain_name;
  public ?DurationInYears $duration_in_years;
  public ?LangCode $idn_lang_code;
  public bool $privacy_protect_admin_contact;
  public bool $privacy_protect_registrant_contact;
  public bool $privacy_protect_tech_contact;
  public ?ContactDetail $registrant_contact;
  public ?ContactDetail $tech_contact;

  public function __construct(shape(
    ?'admin_contact' => ?ContactDetail,
    ?'auto_renew' => bool,
    ?'domain_name' => ?DomainName,
    ?'duration_in_years' => ?DurationInYears,
    ?'idn_lang_code' => ?LangCode,
    ?'privacy_protect_admin_contact' => bool,
    ?'privacy_protect_registrant_contact' => bool,
    ?'privacy_protect_tech_contact' => bool,
    ?'registrant_contact' => ?ContactDetail,
    ?'tech_contact' => ?ContactDetail,
  ) $s = shape()) {
    $this->admin_contact = $s['admin_contact'] ?? null;
    $this->auto_renew = $s['auto_renew'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->duration_in_years = $s['duration_in_years'] ?? 0;
    $this->idn_lang_code = $s['idn_lang_code'] ?? '';
    $this->privacy_protect_admin_contact = $s['privacy_protect_admin_contact'] ?? false;
    $this->privacy_protect_registrant_contact = $s['privacy_protect_registrant_contact'] ?? false;
    $this->privacy_protect_tech_contact = $s['privacy_protect_tech_contact'] ?? false;
    $this->registrant_contact = $s['registrant_contact'] ?? null;
    $this->tech_contact = $s['tech_contact'] ?? null;
  }
}

class RegisterDomainResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

type RegistrarName = string;

type RegistrarUrl = string;

type RegistrarWhoIsServer = string;

type RegistryDomainId = string;

class RejectDomainTransferFromAnotherAwsAccountRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class RejectDomainTransferFromAnotherAwsAccountResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class RenewDomainRequest {
  public ?CurrentExpiryYear $current_expiry_year;
  public ?DomainName $domain_name;
  public ?DurationInYears $duration_in_years;

  public function __construct(shape(
    ?'current_expiry_year' => ?CurrentExpiryYear,
    ?'domain_name' => ?DomainName,
    ?'duration_in_years' => ?DurationInYears,
  ) $s = shape()) {
    $this->current_expiry_year = $s['current_expiry_year'] ?? 0;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->duration_in_years = $s['duration_in_years'] ?? 0;
  }
}

class RenewDomainResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

type Reseller = string;

class ResendContactReachabilityEmailRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class ResendContactReachabilityEmailResponse {
  public ?DomainName $domain_name;
  public ?Email $email_address;
  public bool $is_already_verified;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'email_address' => ?Email,
    ?'is_already_verified' => bool,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->email_address = $s['email_address'] ?? '';
    $this->is_already_verified = $s['is_already_verified'] ?? false;
  }
}

class RetrieveDomainAuthCodeRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class RetrieveDomainAuthCodeResponse {
  public ?DomainAuthCode $auth_code;

  public function __construct(shape(
    ?'auth_code' => ?DomainAuthCode,
  ) $s = shape()) {
    $this->auth_code = $s['auth_code'] ?? '';
  }
}

type State = string;

type String = string;

class TLDRulesViolation {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

type TagValue = string;

type Timestamp = int;

class TransferDomainRequest {
  public ?ContactDetail $admin_contact;
  public ?DomainAuthCode $auth_code;
  public bool $auto_renew;
  public ?DomainName $domain_name;
  public ?DurationInYears $duration_in_years;
  public ?LangCode $idn_lang_code;
  public ?NameserverList $nameservers;
  public bool $privacy_protect_admin_contact;
  public bool $privacy_protect_registrant_contact;
  public bool $privacy_protect_tech_contact;
  public ?ContactDetail $registrant_contact;
  public ?ContactDetail $tech_contact;

  public function __construct(shape(
    ?'admin_contact' => ?ContactDetail,
    ?'auth_code' => ?DomainAuthCode,
    ?'auto_renew' => bool,
    ?'domain_name' => ?DomainName,
    ?'duration_in_years' => ?DurationInYears,
    ?'idn_lang_code' => ?LangCode,
    ?'nameservers' => ?NameserverList,
    ?'privacy_protect_admin_contact' => bool,
    ?'privacy_protect_registrant_contact' => bool,
    ?'privacy_protect_tech_contact' => bool,
    ?'registrant_contact' => ?ContactDetail,
    ?'tech_contact' => ?ContactDetail,
  ) $s = shape()) {
    $this->admin_contact = $s['admin_contact'] ?? null;
    $this->auth_code = $s['auth_code'] ?? '';
    $this->auto_renew = $s['auto_renew'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->duration_in_years = $s['duration_in_years'] ?? 0;
    $this->idn_lang_code = $s['idn_lang_code'] ?? '';
    $this->nameservers = $s['nameservers'] ?? vec[];
    $this->privacy_protect_admin_contact = $s['privacy_protect_admin_contact'] ?? false;
    $this->privacy_protect_registrant_contact = $s['privacy_protect_registrant_contact'] ?? false;
    $this->privacy_protect_tech_contact = $s['privacy_protect_tech_contact'] ?? false;
    $this->registrant_contact = $s['registrant_contact'] ?? null;
    $this->tech_contact = $s['tech_contact'] ?? null;
  }
}

class TransferDomainResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class TransferDomainToAnotherAwsAccountRequest {
  public ?AccountId $account_id;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class TransferDomainToAnotherAwsAccountResponse {
  public ?OperationId $operation_id;
  public string $password;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
    ?'password' => string,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
    $this->password = $s['password'] ?? '';
  }
}

type Transferable = string;

class UnsupportedTLD {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateDomainContactPrivacyRequest {
  public bool $admin_privacy;
  public ?DomainName $domain_name;
  public bool $registrant_privacy;
  public bool $tech_privacy;

  public function __construct(shape(
    ?'admin_privacy' => bool,
    ?'domain_name' => ?DomainName,
    ?'registrant_privacy' => bool,
    ?'tech_privacy' => bool,
  ) $s = shape()) {
    $this->admin_privacy = $s['admin_privacy'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->registrant_privacy = $s['registrant_privacy'] ?? false;
    $this->tech_privacy = $s['tech_privacy'] ?? false;
  }
}

class UpdateDomainContactPrivacyResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class UpdateDomainContactRequest {
  public ?ContactDetail $admin_contact;
  public ?DomainName $domain_name;
  public ?ContactDetail $registrant_contact;
  public ?ContactDetail $tech_contact;

  public function __construct(shape(
    ?'admin_contact' => ?ContactDetail,
    ?'domain_name' => ?DomainName,
    ?'registrant_contact' => ?ContactDetail,
    ?'tech_contact' => ?ContactDetail,
  ) $s = shape()) {
    $this->admin_contact = $s['admin_contact'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->registrant_contact = $s['registrant_contact'] ?? null;
    $this->tech_contact = $s['tech_contact'] ?? null;
  }
}

class UpdateDomainContactResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class UpdateDomainNameserversRequest {
  public ?DomainName $domain_name;
  public ?FIAuthKey $fi_auth_key;
  public ?NameserverList $nameservers;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'fi_auth_key' => ?FIAuthKey,
    ?'nameservers' => ?NameserverList,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fi_auth_key = $s['fi_auth_key'] ?? '';
    $this->nameservers = $s['nameservers'] ?? vec[];
  }
}

class UpdateDomainNameserversResponse {
  public ?OperationId $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?OperationId,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class UpdateTagsForDomainRequest {
  public ?DomainName $domain_name;
  public ?TagList $tags_to_update;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'tags_to_update' => ?TagList,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->tags_to_update = $s['tags_to_update'] ?? vec[];
  }
}

class UpdateTagsForDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ViewBillingRequest {
  public ?Timestamp $end;
  public ?PageMarker $marker;
  public ?PageMaxItems $max_items;
  public ?Timestamp $start;

  public function __construct(shape(
    ?'end' => ?Timestamp,
    ?'marker' => ?PageMarker,
    ?'max_items' => ?PageMaxItems,
    ?'start' => ?Timestamp,
  ) $s = shape()) {
    $this->end = $s['end'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->max_items = $s['max_items'] ?? 0;
    $this->start = $s['start'] ?? 0;
  }
}

class ViewBillingResponse {
  public ?BillingRecords $billing_records;
  public ?PageMarker $next_page_marker;

  public function __construct(shape(
    ?'billing_records' => ?BillingRecords,
    ?'next_page_marker' => ?PageMarker,
  ) $s = shape()) {
    $this->billing_records = $s['billing_records'] ?? vec[];
    $this->next_page_marker = $s['next_page_marker'] ?? '';
  }
}

type ZipCode = string;

