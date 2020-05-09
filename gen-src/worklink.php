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

class AcmCertificateArn {
}

class AssociateDomainRequest {
  public AcmCertificateArn $acm_certificate_arn;
  public DisplayName $display_name;
  public DomainName $domain_name;
  public FleetArn $fleet_arn;
}

class AssociateDomainResponse {
}

class AssociateWebsiteAuthorizationProviderRequest {
  public AuthorizationProviderType $authorization_provider_type;
  public DomainName $domain_name;
  public FleetArn $fleet_arn;
}

class AssociateWebsiteAuthorizationProviderResponse {
  public Id $authorization_provider_id;
}

class AssociateWebsiteCertificateAuthorityRequest {
  public Certificate $certificate;
  public DisplayName $display_name;
  public FleetArn $fleet_arn;
}

class AssociateWebsiteCertificateAuthorityResponse {
  public Id $website_ca_id;
}

class AuditStreamArn {
}

class AuthorizationProviderType {
}

class Boolean {
}

class Certificate {
}

class CertificateChain {
}

class CompanyCode {
}

class CreateFleetRequest {
  public DisplayName $display_name;
  public FleetName $fleet_name;
  public boolean $optimize_for_end_user_location;
}

class CreateFleetResponse {
  public FleetArn $fleet_arn;
}

class DateTime {
}

class DeleteFleetRequest {
  public FleetArn $fleet_arn;
}

class DeleteFleetResponse {
}

class DescribeAuditStreamConfigurationRequest {
  public FleetArn $fleet_arn;
}

class DescribeAuditStreamConfigurationResponse {
  public AuditStreamArn $audit_stream_arn;
}

class DescribeCompanyNetworkConfigurationRequest {
  public FleetArn $fleet_arn;
}

class DescribeCompanyNetworkConfigurationResponse {
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class DescribeDevicePolicyConfigurationRequest {
  public FleetArn $fleet_arn;
}

class DescribeDevicePolicyConfigurationResponse {
  public Certificate $device_ca_certificate;
}

class DescribeDeviceRequest {
  public Id $device_id;
  public FleetArn $fleet_arn;
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
}

class DescribeDomainRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;
}

class DescribeDomainResponse {
  public AcmCertificateArn $acm_certificate_arn;
  public DateTime $created_time;
  public DisplayName $display_name;
  public DomainName $domain_name;
  public DomainStatus $domain_status;
}

class DescribeFleetMetadataRequest {
  public FleetArn $fleet_arn;
}

class DescribeFleetMetadataResponse {
  public CompanyCode $company_code;
  public DateTime $created_time;
  public DisplayName $display_name;
  public FleetName $fleet_name;
  public FleetStatus $fleet_status;
  public DateTime $last_updated_time;
  public boolean $optimize_for_end_user_location;
}

class DescribeIdentityProviderConfigurationRequest {
  public FleetArn $fleet_arn;
}

class DescribeIdentityProviderConfigurationResponse {
  public SamlMetadata $identity_provider_saml_metadata;
  public IdentityProviderType $identity_provider_type;
  public SamlMetadata $service_provider_saml_metadata;
}

class DescribeWebsiteCertificateAuthorityRequest {
  public FleetArn $fleet_arn;
  public Id $website_ca_id;
}

class DescribeWebsiteCertificateAuthorityResponse {
  public Certificate $certificate;
  public DateTime $created_time;
  public DisplayName $display_name;
}

class DeviceManufacturer {
}

class DeviceModel {
}

class DeviceOperatingSystemName {
}

class DeviceOperatingSystemVersion {
}

class DevicePatchLevel {
}

class DeviceStatus {
}

class DeviceSummary {
  public Id $device_id;
  public DeviceStatus $device_status;
}

class DeviceSummaryList {
}

class DisassociateDomainRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;
}

class DisassociateDomainResponse {
}

class DisassociateWebsiteAuthorizationProviderRequest {
  public Id $authorization_provider_id;
  public FleetArn $fleet_arn;
}

class DisassociateWebsiteAuthorizationProviderResponse {
}

class DisassociateWebsiteCertificateAuthorityRequest {
  public FleetArn $fleet_arn;
  public Id $website_ca_id;
}

class DisassociateWebsiteCertificateAuthorityResponse {
}

class DisplayName {
}

class DomainName {
}

class DomainStatus {
}

class DomainSummary {
  public DateTime $created_time;
  public DisplayName $display_name;
  public DomainName $domain_name;
  public DomainStatus $domain_status;
}

class DomainSummaryList {
}

class ExceptionMessage {
}

class FleetArn {
}

class FleetName {
}

class FleetStatus {
}

class FleetSummary {
  public CompanyCode $company_code;
  public DateTime $created_time;
  public DisplayName $display_name;
  public FleetArn $fleet_arn;
  public FleetName $fleet_name;
  public FleetStatus $fleet_status;
  public DateTime $last_updated_time;
}

class FleetSummaryList {
}

class Id {
}

class IdentityProviderType {
}

class InternalServerErrorException {
  public ExceptionMessage $message;
}

class InvalidRequestException {
  public ExceptionMessage $message;
}

class ListDevicesRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDevicesResponse {
  public DeviceSummaryList $devices;
  public NextToken $next_token;
}

class ListDomainsRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListDomainsResponse {
  public DomainSummaryList $domains;
  public NextToken $next_token;
}

class ListFleetsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListFleetsResponse {
  public FleetSummaryList $fleet_summary_list;
  public NextToken $next_token;
}

class ListWebsiteAuthorizationProvidersRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListWebsiteAuthorizationProvidersResponse {
  public NextToken $next_token;
  public WebsiteAuthorizationProvidersSummaryList $website_authorization_providers;
}

class ListWebsiteCertificateAuthoritiesRequest {
  public FleetArn $fleet_arn;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListWebsiteCertificateAuthoritiesResponse {
  public NextToken $next_token;
  public WebsiteCaSummaryList $website_certificate_authorities;
}

class MaxResults {
}

class NextToken {
}

class ResourceAlreadyExistsException {
  public ExceptionMessage $message;
}

class ResourceNotFoundException {
  public ExceptionMessage $message;
}

class RestoreDomainAccessRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;
}

class RestoreDomainAccessResponse {
}

class RevokeDomainAccessRequest {
  public DomainName $domain_name;
  public FleetArn $fleet_arn;
}

class RevokeDomainAccessResponse {
}

class SamlMetadata {
}

class SecurityGroupId {
}

class SecurityGroupIds {
}

class SignOutUserRequest {
  public FleetArn $fleet_arn;
  public Username $username;
}

class SignOutUserResponse {
}

class SubnetId {
}

class SubnetIds {
}

class TooManyRequestsException {
  public ExceptionMessage $message;
}

class UnauthorizedException {
  public ExceptionMessage $message;
}

class UpdateAuditStreamConfigurationRequest {
  public AuditStreamArn $audit_stream_arn;
  public FleetArn $fleet_arn;
}

class UpdateAuditStreamConfigurationResponse {
}

class UpdateCompanyNetworkConfigurationRequest {
  public FleetArn $fleet_arn;
  public SecurityGroupIds $security_group_ids;
  public SubnetIds $subnet_ids;
  public VpcId $vpc_id;
}

class UpdateCompanyNetworkConfigurationResponse {
}

class UpdateDevicePolicyConfigurationRequest {
  public CertificateChain $device_ca_certificate;
  public FleetArn $fleet_arn;
}

class UpdateDevicePolicyConfigurationResponse {
}

class UpdateDomainMetadataRequest {
  public DisplayName $display_name;
  public DomainName $domain_name;
  public FleetArn $fleet_arn;
}

class UpdateDomainMetadataResponse {
}

class UpdateFleetMetadataRequest {
  public DisplayName $display_name;
  public FleetArn $fleet_arn;
  public boolean $optimize_for_end_user_location;
}

class UpdateFleetMetadataResponse {
}

class UpdateIdentityProviderConfigurationRequest {
  public FleetArn $fleet_arn;
  public SamlMetadata $identity_provider_saml_metadata;
  public IdentityProviderType $identity_provider_type;
}

class UpdateIdentityProviderConfigurationResponse {
}

class Username {
}

class VpcId {
}

class WebsiteAuthorizationProviderSummary {
  public Id $authorization_provider_id;
  public AuthorizationProviderType $authorization_provider_type;
  public DateTime $created_time;
  public DomainName $domain_name;
}

class WebsiteAuthorizationProvidersSummaryList {
}

class WebsiteCaSummary {
  public DateTime $created_time;
  public DisplayName $display_name;
  public Id $website_ca_id;
}

class WebsiteCaSummaryList {
}

