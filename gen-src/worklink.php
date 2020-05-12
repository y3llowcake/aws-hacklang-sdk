<?hh // strict
namespace slack\aws\worklink;

interface WorkLink {
  public function AssociateDomain(AssociateDomainRequest $in): Awaitable<\Errors\Result<AssociateDomainResponse>>;
  public function AssociateWebsiteAuthorizationProvider(AssociateWebsiteAuthorizationProviderRequest $in): Awaitable<\Errors\Result<AssociateWebsiteAuthorizationProviderResponse>>;
  public function AssociateWebsiteCertificateAuthority(AssociateWebsiteCertificateAuthorityRequest $in): Awaitable<\Errors\Result<AssociateWebsiteCertificateAuthorityResponse>>;
  public function CreateFleet(CreateFleetRequest $in): Awaitable<\Errors\Result<CreateFleetResponse>>;
  public function DeleteFleet(DeleteFleetRequest $in): Awaitable<\Errors\Result<DeleteFleetResponse>>;
  public function DescribeAuditStreamConfiguration(DescribeAuditStreamConfigurationRequest $in): Awaitable<\Errors\Result<DescribeAuditStreamConfigurationResponse>>;
  public function DescribeCompanyNetworkConfiguration(DescribeCompanyNetworkConfigurationRequest $in): Awaitable<\Errors\Result<DescribeCompanyNetworkConfigurationResponse>>;
  public function DescribeDevice(DescribeDeviceRequest $in): Awaitable<\Errors\Result<DescribeDeviceResponse>>;
  public function DescribeDevicePolicyConfiguration(DescribeDevicePolicyConfigurationRequest $in): Awaitable<\Errors\Result<DescribeDevicePolicyConfigurationResponse>>;
  public function DescribeDomain(DescribeDomainRequest $in): Awaitable<\Errors\Result<DescribeDomainResponse>>;
  public function DescribeFleetMetadata(DescribeFleetMetadataRequest $in): Awaitable<\Errors\Result<DescribeFleetMetadataResponse>>;
  public function DescribeIdentityProviderConfiguration(DescribeIdentityProviderConfigurationRequest $in): Awaitable<\Errors\Result<DescribeIdentityProviderConfigurationResponse>>;
  public function DescribeWebsiteCertificateAuthority(DescribeWebsiteCertificateAuthorityRequest $in): Awaitable<\Errors\Result<DescribeWebsiteCertificateAuthorityResponse>>;
  public function DisassociateDomain(DisassociateDomainRequest $in): Awaitable<\Errors\Result<DisassociateDomainResponse>>;
  public function DisassociateWebsiteAuthorizationProvider(DisassociateWebsiteAuthorizationProviderRequest $in): Awaitable<\Errors\Result<DisassociateWebsiteAuthorizationProviderResponse>>;
  public function DisassociateWebsiteCertificateAuthority(DisassociateWebsiteCertificateAuthorityRequest $in): Awaitable<\Errors\Result<DisassociateWebsiteCertificateAuthorityResponse>>;
  public function ListDevices(ListDevicesRequest $in): Awaitable<\Errors\Result<ListDevicesResponse>>;
  public function ListDomains(ListDomainsRequest $in): Awaitable<\Errors\Result<ListDomainsResponse>>;
  public function ListFleets(ListFleetsRequest $in): Awaitable<\Errors\Result<ListFleetsResponse>>;
  public function ListWebsiteAuthorizationProviders(ListWebsiteAuthorizationProvidersRequest $in): Awaitable<\Errors\Result<ListWebsiteAuthorizationProvidersResponse>>;
  public function ListWebsiteCertificateAuthorities(ListWebsiteCertificateAuthoritiesRequest $in): Awaitable<\Errors\Result<ListWebsiteCertificateAuthoritiesResponse>>;
  public function RestoreDomainAccess(RestoreDomainAccessRequest $in): Awaitable<\Errors\Result<RestoreDomainAccessResponse>>;
  public function RevokeDomainAccess(RevokeDomainAccessRequest $in): Awaitable<\Errors\Result<RevokeDomainAccessResponse>>;
  public function SignOutUser(SignOutUserRequest $in): Awaitable<\Errors\Result<SignOutUserResponse>>;
  public function UpdateAuditStreamConfiguration(UpdateAuditStreamConfigurationRequest $in): Awaitable<\Errors\Result<UpdateAuditStreamConfigurationResponse>>;
  public function UpdateCompanyNetworkConfiguration(UpdateCompanyNetworkConfigurationRequest $in): Awaitable<\Errors\Result<UpdateCompanyNetworkConfigurationResponse>>;
  public function UpdateDevicePolicyConfiguration(UpdateDevicePolicyConfigurationRequest $in): Awaitable<\Errors\Result<UpdateDevicePolicyConfigurationResponse>>;
  public function UpdateDomainMetadata(UpdateDomainMetadataRequest $in): Awaitable<\Errors\Result<UpdateDomainMetadataResponse>>;
  public function UpdateFleetMetadata(UpdateFleetMetadataRequest $in): Awaitable<\Errors\Result<UpdateFleetMetadataResponse>>;
  public function UpdateIdentityProviderConfiguration(UpdateIdentityProviderConfigurationRequest $in): Awaitable<\Errors\Result<UpdateIdentityProviderConfigurationResponse>>;
}

type AcmCertificateArn = string;

class AssociateDomainRequest {
  public ?AcmCertificateArn $acm_certificate_arn;
  public ?DisplayName $display_name;
  public ?DomainName $domain_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'acm_certificate_arn' => ?AcmCertificateArn,
    ?'display_name' => ?DisplayName,
    ?'domain_name' => ?DomainName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->acm_certificate_arn = $s['acm_certificate_arn'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class AssociateDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateWebsiteAuthorizationProviderRequest {
  public ?AuthorizationProviderType $authorization_provider_type;
  public ?DomainName $domain_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'authorization_provider_type' => ?AuthorizationProviderType,
    ?'domain_name' => ?DomainName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->authorization_provider_type = $s['authorization_provider_type'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class AssociateWebsiteAuthorizationProviderResponse {
  public ?Id $authorization_provider_id;

  public function __construct(shape(
    ?'authorization_provider_id' => ?Id,
  ) $s = shape()) {
    $this->authorization_provider_id = $s['authorization_provider_id'] ?? '';
  }
}

class AssociateWebsiteCertificateAuthorityRequest {
  public ?Certificate $certificate;
  public ?DisplayName $display_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
    ?'display_name' => ?DisplayName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class AssociateWebsiteCertificateAuthorityResponse {
  public ?Id $website_ca_id;

  public function __construct(shape(
    ?'website_ca_id' => ?Id,
  ) $s = shape()) {
    $this->website_ca_id = $s['website_ca_id'] ?? '';
  }
}

type AuditStreamArn = string;

type AuthorizationProviderType = string;

type Boolean = bool;

type Certificate = string;

type CertificateChain = string;

type CompanyCode = string;

class CreateFleetRequest {
  public ?DisplayName $display_name;
  public ?FleetName $fleet_name;
  public bool $optimize_for_end_user_location;

  public function __construct(shape(
    ?'display_name' => ?DisplayName,
    ?'fleet_name' => ?FleetName,
    ?'optimize_for_end_user_location' => bool,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
    $this->fleet_name = $s['fleet_name'] ?? '';
    $this->optimize_for_end_user_location = $s['optimize_for_end_user_location'] ?? false;
  }
}

class CreateFleetResponse {
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

type DateTime = int;

class DeleteFleetRequest {
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DeleteFleetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAuditStreamConfigurationRequest {
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DescribeAuditStreamConfigurationResponse {
  public ?AuditStreamArn $audit_stream_arn;

  public function __construct(shape(
    ?'audit_stream_arn' => ?AuditStreamArn,
  ) $s = shape()) {
    $this->audit_stream_arn = $s['audit_stream_arn'] ?? '';
  }
}

class DescribeCompanyNetworkConfigurationRequest {
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DescribeCompanyNetworkConfigurationResponse {
  public ?SecurityGroupIds $security_group_ids;
  public ?SubnetIds $subnet_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DescribeDevicePolicyConfigurationRequest {
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DescribeDevicePolicyConfigurationResponse {
  public ?Certificate $device_ca_certificate;

  public function __construct(shape(
    ?'device_ca_certificate' => ?Certificate,
  ) $s = shape()) {
    $this->device_ca_certificate = $s['device_ca_certificate'] ?? '';
  }
}

class DescribeDeviceRequest {
  public ?Id $device_id;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'device_id' => ?Id,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->device_id = $s['device_id'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DescribeDeviceResponse {
  public ?DateTime $first_accessed_time;
  public ?DateTime $last_accessed_time;
  public ?DeviceManufacturer $manufacturer;
  public ?DeviceModel $model;
  public ?DeviceOperatingSystemName $operating_system;
  public ?DeviceOperatingSystemVersion $operating_system_version;
  public ?DevicePatchLevel $patch_level;
  public ?DeviceStatus $status;
  public ?Username $username;

  public function __construct(shape(
    ?'first_accessed_time' => ?DateTime,
    ?'last_accessed_time' => ?DateTime,
    ?'manufacturer' => ?DeviceManufacturer,
    ?'model' => ?DeviceModel,
    ?'operating_system' => ?DeviceOperatingSystemName,
    ?'operating_system_version' => ?DeviceOperatingSystemVersion,
    ?'patch_level' => ?DevicePatchLevel,
    ?'status' => ?DeviceStatus,
    ?'username' => ?Username,
  ) $s = shape()) {
    $this->first_accessed_time = $s['first_accessed_time'] ?? 0;
    $this->last_accessed_time = $s['last_accessed_time'] ?? 0;
    $this->manufacturer = $s['manufacturer'] ?? '';
    $this->model = $s['model'] ?? '';
    $this->operating_system = $s['operating_system'] ?? '';
    $this->operating_system_version = $s['operating_system_version'] ?? '';
    $this->patch_level = $s['patch_level'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class DescribeDomainRequest {
  public ?DomainName $domain_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DescribeDomainResponse {
  public ?AcmCertificateArn $acm_certificate_arn;
  public ?DateTime $created_time;
  public ?DisplayName $display_name;
  public ?DomainName $domain_name;
  public ?DomainStatus $domain_status;

  public function __construct(shape(
    ?'acm_certificate_arn' => ?AcmCertificateArn,
    ?'created_time' => ?DateTime,
    ?'display_name' => ?DisplayName,
    ?'domain_name' => ?DomainName,
    ?'domain_status' => ?DomainStatus,
  ) $s = shape()) {
    $this->acm_certificate_arn = $s['acm_certificate_arn'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_status = $s['domain_status'] ?? '';
  }
}

class DescribeFleetMetadataRequest {
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DescribeFleetMetadataResponse {
  public ?CompanyCode $company_code;
  public ?DateTime $created_time;
  public ?DisplayName $display_name;
  public ?FleetName $fleet_name;
  public ?FleetStatus $fleet_status;
  public ?DateTime $last_updated_time;
  public bool $optimize_for_end_user_location;

  public function __construct(shape(
    ?'company_code' => ?CompanyCode,
    ?'created_time' => ?DateTime,
    ?'display_name' => ?DisplayName,
    ?'fleet_name' => ?FleetName,
    ?'fleet_status' => ?FleetStatus,
    ?'last_updated_time' => ?DateTime,
    ?'optimize_for_end_user_location' => bool,
  ) $s = shape()) {
    $this->company_code = $s['company_code'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
    $this->fleet_name = $s['fleet_name'] ?? '';
    $this->fleet_status = $s['fleet_status'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->optimize_for_end_user_location = $s['optimize_for_end_user_location'] ?? false;
  }
}

class DescribeIdentityProviderConfigurationRequest {
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DescribeIdentityProviderConfigurationResponse {
  public ?SamlMetadata $identity_provider_saml_metadata;
  public ?IdentityProviderType $identity_provider_type;
  public ?SamlMetadata $service_provider_saml_metadata;

  public function __construct(shape(
    ?'identity_provider_saml_metadata' => ?SamlMetadata,
    ?'identity_provider_type' => ?IdentityProviderType,
    ?'service_provider_saml_metadata' => ?SamlMetadata,
  ) $s = shape()) {
    $this->identity_provider_saml_metadata = $s['identity_provider_saml_metadata'] ?? '';
    $this->identity_provider_type = $s['identity_provider_type'] ?? '';
    $this->service_provider_saml_metadata = $s['service_provider_saml_metadata'] ?? '';
  }
}

class DescribeWebsiteCertificateAuthorityRequest {
  public ?FleetArn $fleet_arn;
  public ?Id $website_ca_id;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'website_ca_id' => ?Id,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->website_ca_id = $s['website_ca_id'] ?? '';
  }
}

class DescribeWebsiteCertificateAuthorityResponse {
  public ?Certificate $certificate;
  public ?DateTime $created_time;
  public ?DisplayName $display_name;

  public function __construct(shape(
    ?'certificate' => ?Certificate,
    ?'created_time' => ?DateTime,
    ?'display_name' => ?DisplayName,
  ) $s = shape()) {
    $this->certificate = $s['certificate'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
  }
}

type DeviceManufacturer = string;

type DeviceModel = string;

type DeviceOperatingSystemName = string;

type DeviceOperatingSystemVersion = string;

type DevicePatchLevel = string;

type DeviceStatus = string;

class DeviceSummary {
  public ?Id $device_id;
  public ?DeviceStatus $device_status;

  public function __construct(shape(
    ?'device_id' => ?Id,
    ?'device_status' => ?DeviceStatus,
  ) $s = shape()) {
    $this->device_id = $s['device_id'] ?? '';
    $this->device_status = $s['device_status'] ?? '';
  }
}

type DeviceSummaryList = vec<DeviceSummary>;

class DisassociateDomainRequest {
  public ?DomainName $domain_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DisassociateDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateWebsiteAuthorizationProviderRequest {
  public ?Id $authorization_provider_id;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'authorization_provider_id' => ?Id,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->authorization_provider_id = $s['authorization_provider_id'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class DisassociateWebsiteAuthorizationProviderResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateWebsiteCertificateAuthorityRequest {
  public ?FleetArn $fleet_arn;
  public ?Id $website_ca_id;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'website_ca_id' => ?Id,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->website_ca_id = $s['website_ca_id'] ?? '';
  }
}

class DisassociateWebsiteCertificateAuthorityResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DisplayName = string;

type DomainName = string;

type DomainStatus = string;

class DomainSummary {
  public ?DateTime $created_time;
  public ?DisplayName $display_name;
  public ?DomainName $domain_name;
  public ?DomainStatus $domain_status;

  public function __construct(shape(
    ?'created_time' => ?DateTime,
    ?'display_name' => ?DisplayName,
    ?'domain_name' => ?DomainName,
    ?'domain_status' => ?DomainStatus,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_status = $s['domain_status'] ?? '';
  }
}

type DomainSummaryList = vec<DomainSummary>;

type ExceptionMessage = string;

type FleetArn = string;

type FleetName = string;

type FleetStatus = string;

class FleetSummary {
  public ?CompanyCode $company_code;
  public ?DateTime $created_time;
  public ?DisplayName $display_name;
  public ?FleetArn $fleet_arn;
  public ?FleetName $fleet_name;
  public ?FleetStatus $fleet_status;
  public ?DateTime $last_updated_time;

  public function __construct(shape(
    ?'company_code' => ?CompanyCode,
    ?'created_time' => ?DateTime,
    ?'display_name' => ?DisplayName,
    ?'fleet_arn' => ?FleetArn,
    ?'fleet_name' => ?FleetName,
    ?'fleet_status' => ?FleetStatus,
    ?'last_updated_time' => ?DateTime,
  ) $s = shape()) {
    $this->company_code = $s['company_code'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->fleet_name = $s['fleet_name'] ?? '';
    $this->fleet_status = $s['fleet_status'] ?? '';
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
  }
}

type FleetSummaryList = vec<FleetSummary>;

type Id = string;

type IdentityProviderType = string;

class InternalServerErrorException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidRequestException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ListDevicesRequest {
  public ?FleetArn $fleet_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDevicesResponse {
  public ?DeviceSummaryList $devices;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'devices' => ?DeviceSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->devices = $s['devices'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDomainsRequest {
  public ?FleetArn $fleet_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDomainsResponse {
  public ?DomainSummaryList $domains;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'domains' => ?DomainSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->domains = $s['domains'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFleetsRequest {
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListFleetsResponse {
  public ?FleetSummaryList $fleet_summary_list;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'fleet_summary_list' => ?FleetSummaryList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->fleet_summary_list = $s['fleet_summary_list'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListWebsiteAuthorizationProvidersRequest {
  public ?FleetArn $fleet_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListWebsiteAuthorizationProvidersResponse {
  public ?NextToken $next_token;
  public ?WebsiteAuthorizationProvidersSummaryList $website_authorization_providers;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'website_authorization_providers' => ?WebsiteAuthorizationProvidersSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->website_authorization_providers = $s['website_authorization_providers'] ?? vec[];
  }
}

class ListWebsiteCertificateAuthoritiesRequest {
  public ?FleetArn $fleet_arn;
  public ?MaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListWebsiteCertificateAuthoritiesResponse {
  public ?NextToken $next_token;
  public ?WebsiteCaSummaryList $website_certificate_authorities;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'website_certificate_authorities' => ?WebsiteCaSummaryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->website_certificate_authorities = $s['website_certificate_authorities'] ?? vec[];
  }
}

type MaxResults = int;

type NextToken = string;

class ResourceAlreadyExistsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class RestoreDomainAccessRequest {
  public ?DomainName $domain_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class RestoreDomainAccessResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RevokeDomainAccessRequest {
  public ?DomainName $domain_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class RevokeDomainAccessResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SamlMetadata = string;

type SecurityGroupId = string;

type SecurityGroupIds = vec<SecurityGroupId>;

class SignOutUserRequest {
  public ?FleetArn $fleet_arn;
  public ?Username $username;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'username' => ?Username,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

class SignOutUserResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type SubnetId = string;

type SubnetIds = vec<SubnetId>;

class TooManyRequestsException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UnauthorizedException {
  public ?ExceptionMessage $message;

  public function __construct(shape(
    ?'message' => ?ExceptionMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class UpdateAuditStreamConfigurationRequest {
  public ?AuditStreamArn $audit_stream_arn;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'audit_stream_arn' => ?AuditStreamArn,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->audit_stream_arn = $s['audit_stream_arn'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class UpdateAuditStreamConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateCompanyNetworkConfigurationRequest {
  public ?FleetArn $fleet_arn;
  public ?SecurityGroupIds $security_group_ids;
  public ?SubnetIds $subnet_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'security_group_ids' => ?SecurityGroupIds,
    ?'subnet_ids' => ?SubnetIds,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class UpdateCompanyNetworkConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDevicePolicyConfigurationRequest {
  public ?CertificateChain $device_ca_certificate;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'device_ca_certificate' => ?CertificateChain,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->device_ca_certificate = $s['device_ca_certificate'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class UpdateDevicePolicyConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDomainMetadataRequest {
  public ?DisplayName $display_name;
  public ?DomainName $domain_name;
  public ?FleetArn $fleet_arn;

  public function __construct(shape(
    ?'display_name' => ?DisplayName,
    ?'domain_name' => ?DomainName,
    ?'fleet_arn' => ?FleetArn,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
  }
}

class UpdateDomainMetadataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateFleetMetadataRequest {
  public ?DisplayName $display_name;
  public ?FleetArn $fleet_arn;
  public bool $optimize_for_end_user_location;

  public function __construct(shape(
    ?'display_name' => ?DisplayName,
    ?'fleet_arn' => ?FleetArn,
    ?'optimize_for_end_user_location' => bool,
  ) $s = shape()) {
    $this->display_name = $s['display_name'] ?? '';
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->optimize_for_end_user_location = $s['optimize_for_end_user_location'] ?? false;
  }
}

class UpdateFleetMetadataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateIdentityProviderConfigurationRequest {
  public ?FleetArn $fleet_arn;
  public ?SamlMetadata $identity_provider_saml_metadata;
  public ?IdentityProviderType $identity_provider_type;

  public function __construct(shape(
    ?'fleet_arn' => ?FleetArn,
    ?'identity_provider_saml_metadata' => ?SamlMetadata,
    ?'identity_provider_type' => ?IdentityProviderType,
  ) $s = shape()) {
    $this->fleet_arn = $s['fleet_arn'] ?? '';
    $this->identity_provider_saml_metadata = $s['identity_provider_saml_metadata'] ?? '';
    $this->identity_provider_type = $s['identity_provider_type'] ?? '';
  }
}

class UpdateIdentityProviderConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Username = string;

type VpcId = string;

class WebsiteAuthorizationProviderSummary {
  public ?Id $authorization_provider_id;
  public ?AuthorizationProviderType $authorization_provider_type;
  public ?DateTime $created_time;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'authorization_provider_id' => ?Id,
    ?'authorization_provider_type' => ?AuthorizationProviderType,
    ?'created_time' => ?DateTime,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->authorization_provider_id = $s['authorization_provider_id'] ?? '';
    $this->authorization_provider_type = $s['authorization_provider_type'] ?? '';
    $this->created_time = $s['created_time'] ?? 0;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

type WebsiteAuthorizationProvidersSummaryList = vec<WebsiteAuthorizationProviderSummary>;

class WebsiteCaSummary {
  public ?DateTime $created_time;
  public ?DisplayName $display_name;
  public ?Id $website_ca_id;

  public function __construct(shape(
    ?'created_time' => ?DateTime,
    ?'display_name' => ?DisplayName,
    ?'website_ca_id' => ?Id,
  ) $s = shape()) {
    $this->created_time = $s['created_time'] ?? 0;
    $this->display_name = $s['display_name'] ?? '';
    $this->website_ca_id = $s['website_ca_id'] ?? '';
  }
}

type WebsiteCaSummaryList = vec<WebsiteCaSummary>;

