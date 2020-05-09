<?hh // strict
namespace slack\aws\networkmanager;

interface NetworkManager {
  public function AssociateCustomerGateway(AssociateCustomerGatewayRequest): Awaitable<Errors\Result<AssociateCustomerGatewayResponse>>;
  public function AssociateLink(AssociateLinkRequest): Awaitable<Errors\Result<AssociateLinkResponse>>;
  public function CreateDevice(CreateDeviceRequest): Awaitable<Errors\Result<CreateDeviceResponse>>;
  public function CreateGlobalNetwork(CreateGlobalNetworkRequest): Awaitable<Errors\Result<CreateGlobalNetworkResponse>>;
  public function CreateLink(CreateLinkRequest): Awaitable<Errors\Result<CreateLinkResponse>>;
  public function CreateSite(CreateSiteRequest): Awaitable<Errors\Result<CreateSiteResponse>>;
  public function DeleteDevice(DeleteDeviceRequest): Awaitable<Errors\Result<DeleteDeviceResponse>>;
  public function DeleteGlobalNetwork(DeleteGlobalNetworkRequest): Awaitable<Errors\Result<DeleteGlobalNetworkResponse>>;
  public function DeleteLink(DeleteLinkRequest): Awaitable<Errors\Result<DeleteLinkResponse>>;
  public function DeleteSite(DeleteSiteRequest): Awaitable<Errors\Result<DeleteSiteResponse>>;
  public function DeregisterTransitGateway(DeregisterTransitGatewayRequest): Awaitable<Errors\Result<DeregisterTransitGatewayResponse>>;
  public function DescribeGlobalNetworks(DescribeGlobalNetworksRequest): Awaitable<Errors\Result<DescribeGlobalNetworksResponse>>;
  public function DisassociateCustomerGateway(DisassociateCustomerGatewayRequest): Awaitable<Errors\Result<DisassociateCustomerGatewayResponse>>;
  public function DisassociateLink(DisassociateLinkRequest): Awaitable<Errors\Result<DisassociateLinkResponse>>;
  public function GetCustomerGatewayAssociations(GetCustomerGatewayAssociationsRequest): Awaitable<Errors\Result<GetCustomerGatewayAssociationsResponse>>;
  public function GetDevices(GetDevicesRequest): Awaitable<Errors\Result<GetDevicesResponse>>;
  public function GetLinkAssociations(GetLinkAssociationsRequest): Awaitable<Errors\Result<GetLinkAssociationsResponse>>;
  public function GetLinks(GetLinksRequest): Awaitable<Errors\Result<GetLinksResponse>>;
  public function GetSites(GetSitesRequest): Awaitable<Errors\Result<GetSitesResponse>>;
  public function GetTransitGatewayRegistrations(GetTransitGatewayRegistrationsRequest): Awaitable<Errors\Result<GetTransitGatewayRegistrationsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function RegisterTransitGateway(RegisterTransitGatewayRequest): Awaitable<Errors\Result<RegisterTransitGatewayResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDevice(UpdateDeviceRequest): Awaitable<Errors\Result<UpdateDeviceResponse>>;
  public function UpdateGlobalNetwork(UpdateGlobalNetworkRequest): Awaitable<Errors\Result<UpdateGlobalNetworkResponse>>;
  public function UpdateLink(UpdateLinkRequest): Awaitable<Errors\Result<UpdateLinkResponse>>;
  public function UpdateSite(UpdateSiteRequest): Awaitable<Errors\Result<UpdateSiteResponse>>;
}

class AccessDeniedException {
  public string $message;
}

class AssociateCustomerGatewayRequest {
  public string $customer_gateway_arn;
  public string $device_id;
  public string $global_network_id;
  public string $link_id;
}

class AssociateCustomerGatewayResponse {
  public CustomerGatewayAssociation $customer_gateway_association;
}

class AssociateLinkRequest {
  public string $device_id;
  public string $global_network_id;
  public string $link_id;
}

class AssociateLinkResponse {
  public LinkAssociation $link_association;
}

class Bandwidth {
  public int $download_speed;
  public int $upload_speed;
}

class ConflictException {
  public string $message;
  public string $resource_id;
  public string $resource_type;
}

class CreateDeviceRequest {
  public string $description;
  public string $global_network_id;
  public Location $location;
  public string $model;
  public string $serial_number;
  public string $site_id;
  public TagList $tags;
  public string $type;
  public string $vendor;
}

class CreateDeviceResponse {
  public Device $device;
}

class CreateGlobalNetworkRequest {
  public string $description;
  public TagList $tags;
}

class CreateGlobalNetworkResponse {
  public GlobalNetwork $global_network;
}

class CreateLinkRequest {
  public Bandwidth $bandwidth;
  public string $description;
  public string $global_network_id;
  public string $provider;
  public string $site_id;
  public TagList $tags;
  public string $type;
}

class CreateLinkResponse {
  public Link $link;
}

class CreateSiteRequest {
  public string $description;
  public string $global_network_id;
  public Location $location;
  public TagList $tags;
}

class CreateSiteResponse {
  public Site $site;
}

class CustomerGatewayAssociation {
  public string $customer_gateway_arn;
  public string $device_id;
  public string $global_network_id;
  public string $link_id;
  public CustomerGatewayAssociationState $state;
}

class CustomerGatewayAssociationList {
}

class CustomerGatewayAssociationState {
}

class DateTime {
}

class DeleteDeviceRequest {
  public string $device_id;
  public string $global_network_id;
}

class DeleteDeviceResponse {
  public Device $device;
}

class DeleteGlobalNetworkRequest {
  public string $global_network_id;
}

class DeleteGlobalNetworkResponse {
  public GlobalNetwork $global_network;
}

class DeleteLinkRequest {
  public string $global_network_id;
  public string $link_id;
}

class DeleteLinkResponse {
  public Link $link;
}

class DeleteSiteRequest {
  public string $global_network_id;
  public string $site_id;
}

class DeleteSiteResponse {
  public Site $site;
}

class DeregisterTransitGatewayRequest {
  public string $global_network_id;
  public string $transit_gateway_arn;
}

class DeregisterTransitGatewayResponse {
  public TransitGatewayRegistration $transit_gateway_registration;
}

class DescribeGlobalNetworksRequest {
  public StringList $global_network_ids;
  public MaxResults $max_results;
  public string $next_token;
}

class DescribeGlobalNetworksResponse {
  public GlobalNetworkList $global_networks;
  public string $next_token;
}

class Device {
  public DateTime $created_at;
  public string $description;
  public string $device_arn;
  public string $device_id;
  public string $global_network_id;
  public Location $location;
  public string $model;
  public string $serial_number;
  public string $site_id;
  public DeviceState $state;
  public TagList $tags;
  public string $type;
  public string $vendor;
}

class DeviceList {
}

class DeviceState {
}

class DisassociateCustomerGatewayRequest {
  public string $customer_gateway_arn;
  public string $global_network_id;
}

class DisassociateCustomerGatewayResponse {
  public CustomerGatewayAssociation $customer_gateway_association;
}

class DisassociateLinkRequest {
  public string $device_id;
  public string $global_network_id;
  public string $link_id;
}

class DisassociateLinkResponse {
  public LinkAssociation $link_association;
}

class GetCustomerGatewayAssociationsRequest {
  public StringList $customer_gateway_arns;
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;
}

class GetCustomerGatewayAssociationsResponse {
  public CustomerGatewayAssociationList $customer_gateway_associations;
  public string $next_token;
}

class GetDevicesRequest {
  public StringList $device_ids;
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;
  public string $site_id;
}

class GetDevicesResponse {
  public DeviceList $devices;
  public string $next_token;
}

class GetLinkAssociationsRequest {
  public string $device_id;
  public string $global_network_id;
  public string $link_id;
  public MaxResults $max_results;
  public string $next_token;
}

class GetLinkAssociationsResponse {
  public LinkAssociationList $link_associations;
  public string $next_token;
}

class GetLinksRequest {
  public string $global_network_id;
  public StringList $link_ids;
  public MaxResults $max_results;
  public string $next_token;
  public string $provider;
  public string $site_id;
  public string $type;
}

class GetLinksResponse {
  public LinkList $links;
  public string $next_token;
}

class GetSitesRequest {
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;
  public StringList $site_ids;
}

class GetSitesResponse {
  public string $next_token;
  public SiteList $sites;
}

class GetTransitGatewayRegistrationsRequest {
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;
  public StringList $transit_gateway_arns;
}

class GetTransitGatewayRegistrationsResponse {
  public string $next_token;
  public TransitGatewayRegistrationList $transit_gateway_registrations;
}

class GlobalNetwork {
  public DateTime $created_at;
  public string $description;
  public string $global_network_arn;
  public string $global_network_id;
  public GlobalNetworkState $state;
  public TagList $tags;
}

class GlobalNetworkList {
}

class GlobalNetworkState {
}

class Integer {
}

class InternalServerException {
  public string $message;
  public RetryAfterSeconds $retry_after_seconds;
}

class Link {
  public Bandwidth $bandwidth;
  public DateTime $created_at;
  public string $description;
  public string $global_network_id;
  public string $link_arn;
  public string $link_id;
  public string $provider;
  public string $site_id;
  public LinkState $state;
  public TagList $tags;
  public string $type;
}

class LinkAssociation {
  public string $device_id;
  public string $global_network_id;
  public LinkAssociationState $link_association_state;
  public string $link_id;
}

class LinkAssociationList {
}

class LinkAssociationState {
}

class LinkList {
}

class LinkState {
}

class ListTagsForResourceRequest {
  public ResourceARN $resource_arn;
}

class ListTagsForResourceResponse {
  public TagList $tag_list;
}

class Location {
  public string $address;
  public string $latitude;
  public string $longitude;
}

class MaxResults {
}

class RegisterTransitGatewayRequest {
  public string $global_network_id;
  public string $transit_gateway_arn;
}

class RegisterTransitGatewayResponse {
  public TransitGatewayRegistration $transit_gateway_registration;
}

class ResourceARN {
}

class ResourceNotFoundException {
  public string $message;
  public string $resource_id;
  public string $resource_type;
}

class RetryAfterSeconds {
}

class ServiceQuotaExceededException {
  public string $limit_code;
  public string $message;
  public string $resource_id;
  public string $resource_type;
  public string $service_code;
}

class Site {
  public DateTime $created_at;
  public string $description;
  public string $global_network_id;
  public Location $location;
  public string $site_arn;
  public string $site_id;
  public SiteState $state;
  public TagList $tags;
}

class SiteList {
}

class SiteState {
}

class String {
}

class StringList {
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

class TagResourceRequest {
  public ResourceARN $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class ThrottlingException {
  public string $message;
  public RetryAfterSeconds $retry_after_seconds;
}

class TransitGatewayRegistration {
  public string $global_network_id;
  public TransitGatewayRegistrationStateReason $state;
  public string $transit_gateway_arn;
}

class TransitGatewayRegistrationList {
}

class TransitGatewayRegistrationState {
}

class TransitGatewayRegistrationStateReason {
  public TransitGatewayRegistrationState $code;
  public string $message;
}

class UntagResourceRequest {
  public ResourceARN $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateDeviceRequest {
  public string $description;
  public string $device_id;
  public string $global_network_id;
  public Location $location;
  public string $model;
  public string $serial_number;
  public string $site_id;
  public string $type;
  public string $vendor;
}

class UpdateDeviceResponse {
  public Device $device;
}

class UpdateGlobalNetworkRequest {
  public string $description;
  public string $global_network_id;
}

class UpdateGlobalNetworkResponse {
  public GlobalNetwork $global_network;
}

class UpdateLinkRequest {
  public Bandwidth $bandwidth;
  public string $description;
  public string $global_network_id;
  public string $link_id;
  public string $provider;
  public string $type;
}

class UpdateLinkResponse {
  public Link $link;
}

class UpdateSiteRequest {
  public string $description;
  public string $global_network_id;
  public Location $location;
  public string $site_id;
}

class UpdateSiteResponse {
  public Site $site;
}

class ValidationException {
  public ValidationExceptionFieldList $fields;
  public string $message;
  public ValidationExceptionReason $reason;
}

class ValidationExceptionField {
  public string $message;
  public string $name;
}

class ValidationExceptionFieldList {
}

class ValidationExceptionReason {
}

