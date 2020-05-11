<?hh // strict
namespace slack\aws\worklink;

interface WorkLink {
  public function AssociateDomain(AssociateDomainRequest): Awaitable<Errors\Result<AssociateDomainResponse>>;
  public function AssociateWebsiteAuthorizationProvider(AssociateWebsiteAuthorizationProviderRequest): Awaitable<Errors\Result<AssociateWebsiteAuthorizationProviderResponse>>;
  public function AssociateWebsiteCertificateAuthority(AssociateWebsiteCertificateAuthorityRequest): Awaitable<Errors\Result<AssociateWebsiteCertificateAuthorityResponse>>;
  public function CreateFleet(CreateFleetRequest): Awaitable<Errors\Result<CreateFleetResponse>>;
  public function DeleteFleet(DeleteFleetRequest): Awaitable<Errors\Result<DeleteFleetResponse>>;
  public function DescribeAuditStreamConfiguration(DescribeAuditStreamConfigurationRequest): Awaitable<Errors\Result<DescribeAuditStreamConfigurationResponse>>;
  public function DescribeCompanyNetworkConfiguration(DescribeCompanyNetworkConfigurationRequest): Awaitable<Errors\Result<DescribeCompanyNetworkConfigurationResponse>>;
  public function DescribeDevice(DescribeDeviceRequest): Awaitable<Errors\Result<DescribeDeviceResponse>>;
  public function DescribeDevicePolicyConfiguration(DescribeDevicePolicyConfigurationRequest): Awaitable<Errors\Result<DescribeDevicePolicyConfigurationResponse>>;
  public function DescribeDomain(DescribeDomainRequest): Awaitable<Errors\Result<DescribeDomainResponse>>;
  public function DescribeFleetMetadata(DescribeFleetMetadataRequest): Awaitable<Errors\Result<DescribeFleetMetadataResponse>>;
  public function DescribeIdentityProviderConfiguration(DescribeIdentityProviderConfigurationRequest): Awaitable<Errors\Result<DescribeIdentityProviderConfigurationResponse>>;
  public function DescribeWebsiteCertificateAuthority(DescribeWebsiteCertificateAuthorityRequest): Awaitable<Errors\Result<DescribeWebsiteCertificateAuthorityResponse>>;
  public function DisassociateDomain(DisassociateDomainRequest): Awaitable<Errors\Result<DisassociateDomainResponse>>;
  public function DisassociateWebsiteAuthorizationProvider(DisassociateWebsiteAuthorizationProviderRequest): Awaitable<Errors\Result<DisassociateWebsiteAuthorizationProviderResponse>>;
  public function DisassociateWebsiteCertificateAuthority(DisassociateWebsiteCertificateAuthorityRequest): Awaitable<Errors\Result<DisassociateWebsiteCertificateAuthorityResponse>>;
  public function ListDevices(ListDevicesRequest): Awaitable<Errors\Result<ListDevicesResponse>>;
  public function ListDomains(ListDomainsRequest): Awaitable<Errors\Result<ListDomainsResponse>>;
  public function ListFleets(ListFleetsRequest): Awaitable<Errors\Result<ListFleetsResponse>>;
  public function ListWebsiteAuthorizationProviders(ListWebsiteAuthorizationProvidersRequest): Awaitable<Errors\Result<ListWebsiteAuthorizationProvidersResponse>>;
  public function ListWebsiteCertificateAuthorities(ListWebsiteCertificateAuthoritiesRequest): Awaitable<Errors\Result<ListWebsiteCertificateAuthoritiesResponse>>;
  public function RestoreDomainAccess(RestoreDomainAccessRequest): Awaitable<Errors\Result<RestoreDomainAccessResponse>>;
  public function RevokeDomainAccess(RevokeDomainAccessRequest): Awaitable<Errors\Result<RevokeDomainAccessResponse>>;
  public function SignOutUser(SignOutUserRequest): Awaitable<Errors\Result<SignOutUserResponse>>;
  public function UpdateAuditStreamConfiguration(UpdateAuditStreamConfigurationRequest): Awaitable<Errors\Result<UpdateAuditStreamConfigurationResponse>>;
  public function UpdateCompanyNetworkConfiguration(UpdateCompanyNetworkConfigurationRequest): Awaitable<Errors\Result<UpdateCompanyNetworkConfigurationResponse>>;
  public function UpdateDevicePolicyConfiguration(UpdateDevicePolicyConfigurationRequest): Awaitable<Errors\Result<UpdateDevicePolicyConfigurationResponse>>;
  public function UpdateDomainMetadata(UpdateDomainMetadataRequest): Awaitable<Errors\Result<UpdateDomainMetadataResponse>>;
  public function UpdateFleetMetadata(UpdateFleetMetadataRequest): Awaitable<Errors\Result<UpdateFleetMetadataResponse>>;
  public function UpdateIdentityProviderConfiguration(UpdateIdentityProviderConfigurationRequest): Awaitable<Errors\Result<UpdateIdentityProviderConfigurationResponse>>;
}

type AcmCertificateArn = string;

class AssociateDomainRequest {
  public AcmCertificateArn $acm_certificate_arn;
  public DisplayName $display_name;
  public DomainName $domain_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'acm_certificate_arn' => AcmCertificateArn,
  ?'display_name' => DisplayName,
  ?'domain_name' => DomainName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->acm_certificate_arn = $acm_certificate_arn ?? "";
    $this->display_name = $display_name ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class AssociateDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class AssociateWebsiteAuthorizationProviderRequest {
  public AuthorizationProviderType $authorization_provider_type;
  public DomainName $domain_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'authorization_provider_type' => AuthorizationProviderType,
  ?'domain_name' => DomainName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->authorization_provider_type = $authorization_provider_type ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class AssociateWebsiteAuthorizationProviderResponse {
  public Id $authorization_provider_id;

  public function __construct(shape(
  ?'authorization_provider_id' => Id,
  ) $s = shape()) {
    $this->authorization_provider_id = $authorization_provider_id ?? ;
  }
}

class AssociateWebsiteCertificateAuthorityRequest {
  public Certificate $certificate;
  public DisplayName $display_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'certificate' => Certificate,
  ?'display_name' => DisplayName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->display_name = $display_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class AssociateWebsiteCertificateAuthorityResponse {
  public Id $website_ca_id;

  public function __construct(shape(
  ?'website_ca_id' => Id,
  ) $s = shape()) {
    $this->website_ca_id = $website_ca_id ?? ;
  }
}

type AuditStreamArn = string;

type AuthorizationProviderType = string;

type Boolean = bool;

type Certificate = string;

type CertificateChain = string;

type CompanyCode = string;

class CreateFleetRequest {
  public DisplayName $display_name;
  public FleetName $fleet_name;
  public boolean $optimize_for_end_user_location;

  public function __construct(shape(
  ?'display_name' => DisplayName,
  ?'fleet_name' => FleetName,
  ?'optimize_for_end_user_location' => boolean,
  ) $s = shape()) {
    $this->display_name = $display_name ?? "";
    $this->fleet_name = $fleet_name ?? "";
    $this->optimize_for_end_user_location = $optimize_for_end_user_location ?? ;
  }
}

class CreateFleetResponse {
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

type DateTime = int;

class DeleteFleetRequest {
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DeleteFleetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeAuditStreamConfigurationRequest {
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DescribeAuditStreamConfigurationResponse {
  public AuditStreamArn $audit_stream_arn;

  public function __construct(shape(
  ?'audit_stream_arn' => AuditStreamArn,
  ) $s = shape()) {
    $this->audit_stream_arn = $audit_stream_arn ?? "";
  }
}

class DescribeCompanyNetworkConfigurationRequest {
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DescribeCompanyNetworkConfigurationResponse {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;

  public function __construct(shape(
  ?'security_group_ids' => SecurityGroupIds,
  ?'subnet_ids' => SubnetIds,
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_ids = $subnet_ids ?? [];
    $this->vpc_id = $vpc_id ?? "";
  }
}

class DescribeDevicePolicyConfigurationRequest {
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DescribeDevicePolicyConfigurationResponse {
  public Certificate $device_ca_certificate;

  public function __construct(shape(
  ?'device_ca_certificate' => Certificate,
  ) $s = shape()) {
    $this->device_ca_certificate = $device_ca_certificate ?? ;
  }
}

class DescribeDeviceRequest {
  public Id $device_id;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'device_id' => Id,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DescribeDeviceResponse {
  public DateTime $first_accessed_time;
  public DateTime $last_accessed_time;
  public DeviceManufacturer $manufacturer;
  public DeviceModel $model;
  public DeviceOperatingSystemName $operating_system;
  public DeviceOperatingSystemVersion $operating_system_version;
  public DevicePatchLevel $patch_level;
  public DeviceStatus $status;
  public Username $username;

  public function __construct(shape(
  ?'first_accessed_time' => DateTime,
  ?'last_accessed_time' => DateTime,
  ?'manufacturer' => DeviceManufacturer,
  ?'model' => DeviceModel,
  ?'operating_system' => DeviceOperatingSystemName,
  ?'operating_system_version' => DeviceOperatingSystemVersion,
  ?'patch_level' => DevicePatchLevel,
  ?'status' => DeviceStatus,
  ?'username' => Username,
  ) $s = shape()) {
    $this->first_accessed_time = $first_accessed_time ?? ;
    $this->last_accessed_time = $last_accessed_time ?? ;
    $this->manufacturer = $manufacturer ?? ;
    $this->model = $model ?? ;
    $this->operating_system = $operating_system ?? ;
    $this->operating_system_version = $operating_system_version ?? ;
    $this->patch_level = $patch_level ?? ;
    $this->status = $status ?? ;
    $this->username = $username ?? "";
  }
}

class DescribeDomainRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DescribeDomainResponse {
  public AcmCertificateArn $acm_certificate_arn;
  public DateTime $created_time;
  public DisplayName $display_name;
  public DomainName $domain_name;
  public DomainStatus $domain_status;

  public function __construct(shape(
  ?'acm_certificate_arn' => AcmCertificateArn,
  ?'created_time' => DateTime,
  ?'display_name' => DisplayName,
  ?'domain_name' => DomainName,
  ?'domain_status' => DomainStatus,
  ) $s = shape()) {
    $this->acm_certificate_arn = $acm_certificate_arn ?? "";
    $this->created_time = $created_time ?? ;
    $this->display_name = $display_name ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->domain_status = $domain_status ?? "";
  }
}

class DescribeFleetMetadataRequest {
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DescribeFleetMetadataResponse {
  public CompanyCode $company_code;
  public DateTime $created_time;
  public DisplayName $display_name;
  public FleetName $fleet_name;
  public FleetStatus $fleet_status;
  public DateTime $last_updated_time;
  public boolean $optimize_for_end_user_location;

  public function __construct(shape(
  ?'company_code' => CompanyCode,
  ?'created_time' => DateTime,
  ?'display_name' => DisplayName,
  ?'fleet_name' => FleetName,
  ?'fleet_status' => FleetStatus,
  ?'last_updated_time' => DateTime,
  ?'optimize_for_end_user_location' => boolean,
  ) $s = shape()) {
    $this->company_code = $company_code ?? "";
    $this->created_time = $created_time ?? ;
    $this->display_name = $display_name ?? "";
    $this->fleet_name = $fleet_name ?? "";
    $this->fleet_status = $fleet_status ?? "";
    $this->last_updated_time = $last_updated_time ?? ;
    $this->optimize_for_end_user_location = $optimize_for_end_user_location ?? ;
  }
}

class DescribeIdentityProviderConfigurationRequest {
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DescribeIdentityProviderConfigurationResponse {
  public SamlMetadata $identity_provider_saml_metadata;
  public IdentityProviderType $identity_provider_type;
  public SamlMetadata $service_provider_saml_metadata;

  public function __construct(shape(
  ?'identity_provider_saml_metadata' => SamlMetadata,
  ?'identity_provider_type' => IdentityProviderType,
  ?'service_provider_saml_metadata' => SamlMetadata,
  ) $s = shape()) {
    $this->identity_provider_saml_metadata = $identity_provider_saml_metadata ?? ;
    $this->identity_provider_type = $identity_provider_type ?? "";
    $this->service_provider_saml_metadata = $service_provider_saml_metadata ?? ;
  }
}

class DescribeWebsiteCertificateAuthorityRequest {
  public FleetArn $fleet_arn;
  public Id $website_ca_id;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'website_ca_id' => Id,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->website_ca_id = $website_ca_id ?? ;
  }
}

class DescribeWebsiteCertificateAuthorityResponse {
  public Certificate $certificate;
  public DateTime $created_time;
  public DisplayName $display_name;

  public function __construct(shape(
  ?'certificate' => Certificate,
  ?'created_time' => DateTime,
  ?'display_name' => DisplayName,
  ) $s = shape()) {
    $this->certificate = $certificate ?? "";
    $this->created_time = $created_time ?? ;
    $this->display_name = $display_name ?? "";
  }
}

type DeviceManufacturer = string;

type DeviceModel = string;

type DeviceOperatingSystemName = string;

type DeviceOperatingSystemVersion = string;

type DevicePatchLevel = string;

type DeviceStatus = string;

class DeviceSummary {
  public Id $device_id;
  public DeviceStatus $device_status;

  public function __construct(shape(
  ?'device_id' => Id,
  ?'device_status' => DeviceStatus,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->device_status = $device_status ?? "";
  }
}

type DeviceSummaryList = vec<DeviceSummary>;

class DisassociateDomainRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DisassociateDomainResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateWebsiteAuthorizationProviderRequest {
  public Id $authorization_provider_id;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'authorization_provider_id' => Id,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->authorization_provider_id = $authorization_provider_id ?? ;
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class DisassociateWebsiteAuthorizationProviderResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DisassociateWebsiteCertificateAuthorityRequest {
  public FleetArn $fleet_arn;
  public Id $website_ca_id;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'website_ca_id' => Id,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->website_ca_id = $website_ca_id ?? ;
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
  public DateTime $created_time;
  public DisplayName $display_name;
  public DomainName $domain_name;
  public DomainStatus $domain_status;

  public function __construct(shape(
  ?'created_time' => DateTime,
  ?'display_name' => DisplayName,
  ?'domain_name' => DomainName,
  ?'domain_status' => DomainStatus,
  ) $s = shape()) {
    $this->created_time = $created_time ?? ;
    $this->display_name = $display_name ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->domain_status = $domain_status ?? "";
  }
}

type DomainSummaryList = vec<DomainSummary>;

type ExceptionMessage = string;

type FleetArn = string;

type FleetName = string;

type FleetStatus = string;

class FleetSummary {
  public CompanyCode $company_code;
  public DateTime $created_time;
  public DisplayName $display_name;
  public FleetArn $fleet_arn;
  public FleetName $fleet_name;
  public FleetStatus $fleet_status;
  public DateTime $last_updated_time;

  public function __construct(shape(
  ?'company_code' => CompanyCode,
  ?'created_time' => DateTime,
  ?'display_name' => DisplayName,
  ?'fleet_arn' => FleetArn,
  ?'fleet_name' => FleetName,
  ?'fleet_status' => FleetStatus,
  ?'last_updated_time' => DateTime,
  ) $s = shape()) {
    $this->company_code = $company_code ?? "";
    $this->created_time = $created_time ?? ;
    $this->display_name = $display_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
    $this->fleet_name = $fleet_name ?? "";
    $this->fleet_status = $fleet_status ?? "";
    $this->last_updated_time = $last_updated_time ?? ;
  }
}

type FleetSummaryList = vec<FleetSummary>;

type Id = string;

type IdentityProviderType = string;

class InternalServerErrorException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidRequestException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ListDevicesRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDevicesResponse {
  public DeviceSummaryList $devices;
  public NextToken $next_token;

  public function __construct(shape(
  ?'devices' => DeviceSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->devices = $devices ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListDomainsRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListDomainsResponse {
  public DomainSummaryList $domains;
  public NextToken $next_token;

  public function __construct(shape(
  ?'domains' => DomainSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->domains = $domains ?? ;
    $this->next_token = $next_token ?? "";
  }
}

class ListFleetsRequest {
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

class ListFleetsResponse {
  public FleetSummaryList $fleet_summary_list;
  public NextToken $next_token;

  public function __construct(shape(
  ?'fleet_summary_list' => FleetSummaryList,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->fleet_summary_list = $fleet_summary_list ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class ListWebsiteAuthorizationProvidersRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListWebsiteAuthorizationProvidersResponse {
  public NextToken $next_token;
  public WebsiteAuthorizationProvidersSummaryList $website_authorization_providers;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'website_authorization_providers' => WebsiteAuthorizationProvidersSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->website_authorization_providers = $website_authorization_providers ?? ;
  }
}

class ListWebsiteCertificateAuthoritiesRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'max_results' => MaxResults,
  ?'next_token' => NextToken,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class ListWebsiteCertificateAuthoritiesResponse {
  public NextToken $next_token;
  public WebsiteCaSummaryList $website_certificate_authorities;

  public function __construct(shape(
  ?'next_token' => NextToken,
  ?'website_certificate_authorities' => WebsiteCaSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? "";
    $this->website_certificate_authorities = $website_certificate_authorities ?? ;
  }
}

type MaxResults = int;

type NextToken = string;

class ResourceAlreadyExistsException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class RestoreDomainAccessRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class RestoreDomainAccessResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RevokeDomainAccessRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'domain_name' => DomainName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->domain_name = $domain_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
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
  public FleetArn $fleet_arn;
  public Username $username;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'username' => Username,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->username = $username ?? "";
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
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UnauthorizedException {
  public ExceptionMessage $message;

  public function __construct(shape(
  ?'message' => ExceptionMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class UpdateAuditStreamConfigurationRequest {
  public AuditStreamArn $audit_stream_arn;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'audit_stream_arn' => AuditStreamArn,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->audit_stream_arn = $audit_stream_arn ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class UpdateAuditStreamConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateCompanyNetworkConfigurationRequest {
  public FleetArn $fleet_arn;
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'security_group_ids' => SecurityGroupIds,
  ?'subnet_ids' => SubnetIds,
  ?'vpc_id' => VpcId,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->security_group_ids = $security_group_ids ?? [];
    $this->subnet_ids = $subnet_ids ?? [];
    $this->vpc_id = $vpc_id ?? "";
  }
}

class UpdateCompanyNetworkConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDevicePolicyConfigurationRequest {
  public CertificateChain $device_ca_certificate;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'device_ca_certificate' => CertificateChain,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->device_ca_certificate = $device_ca_certificate ?? ;
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class UpdateDevicePolicyConfigurationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDomainMetadataRequest {
  public DisplayName $display_name;
  public DomainName $domain_name;
  public FleetArn $fleet_arn;

  public function __construct(shape(
  ?'display_name' => DisplayName,
  ?'domain_name' => DomainName,
  ?'fleet_arn' => FleetArn,
  ) $s = shape()) {
    $this->display_name = $display_name ?? "";
    $this->domain_name = $domain_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
  }
}

class UpdateDomainMetadataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateFleetMetadataRequest {
  public DisplayName $display_name;
  public FleetArn $fleet_arn;
  public boolean $optimize_for_end_user_location;

  public function __construct(shape(
  ?'display_name' => DisplayName,
  ?'fleet_arn' => FleetArn,
  ?'optimize_for_end_user_location' => boolean,
  ) $s = shape()) {
    $this->display_name = $display_name ?? "";
    $this->fleet_arn = $fleet_arn ?? "";
    $this->optimize_for_end_user_location = $optimize_for_end_user_location ?? ;
  }
}

class UpdateFleetMetadataResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateIdentityProviderConfigurationRequest {
  public FleetArn $fleet_arn;
  public SamlMetadata $identity_provider_saml_metadata;
  public IdentityProviderType $identity_provider_type;

  public function __construct(shape(
  ?'fleet_arn' => FleetArn,
  ?'identity_provider_saml_metadata' => SamlMetadata,
  ?'identity_provider_type' => IdentityProviderType,
  ) $s = shape()) {
    $this->fleet_arn = $fleet_arn ?? "";
    $this->identity_provider_saml_metadata = $identity_provider_saml_metadata ?? ;
    $this->identity_provider_type = $identity_provider_type ?? "";
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
  public Id $authorization_provider_id;
  public AuthorizationProviderType $authorization_provider_type;
  public DateTime $created_time;
  public DomainName $domain_name;

  public function __construct(shape(
  ?'authorization_provider_id' => Id,
  ?'authorization_provider_type' => AuthorizationProviderType,
  ?'created_time' => DateTime,
  ?'domain_name' => DomainName,
  ) $s = shape()) {
    $this->authorization_provider_id = $authorization_provider_id ?? ;
    $this->authorization_provider_type = $authorization_provider_type ?? "";
    $this->created_time = $created_time ?? ;
    $this->domain_name = $domain_name ?? "";
  }
}

type WebsiteAuthorizationProvidersSummaryList = vec<WebsiteAuthorizationProviderSummary>;

class WebsiteCaSummary {
  public DateTime $created_time;
  public DisplayName $display_name;
  public Id $website_ca_id;

  public function __construct(shape(
  ?'created_time' => DateTime,
  ?'display_name' => DisplayName,
  ?'website_ca_id' => Id,
  ) $s = shape()) {
    $this->created_time = $created_time ?? ;
    $this->display_name = $display_name ?? "";
    $this->website_ca_id = $website_ca_id ?? ;
  }
}

type WebsiteCaSummaryList = vec<WebsiteCaSummary>;

