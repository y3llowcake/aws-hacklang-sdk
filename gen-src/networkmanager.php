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

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class AssociateCustomerGatewayRequest {
  public string $customer_gateway_arn;
  public string $device_id;
  public string $global_network_id;
  public string $link_id;

  public function __construct(shape(
  ?'customer_gateway_arn' => string,
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'link_id' => string,
  ) $s = shape()) {
    $this->customer_gateway_arn = $customer_gateway_arn ?? ;
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_id = $link_id ?? ;
  }
}

class AssociateCustomerGatewayResponse {
  public CustomerGatewayAssociation $customer_gateway_association;

  public function __construct(shape(
  ?'customer_gateway_association' => CustomerGatewayAssociation,
  ) $s = shape()) {
    $this->customer_gateway_association = $customer_gateway_association ?? null;
  }
}

class AssociateLinkRequest {
  public string $device_id;
  public string $global_network_id;
  public string $link_id;

  public function __construct(shape(
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'link_id' => string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_id = $link_id ?? ;
  }
}

class AssociateLinkResponse {
  public LinkAssociation $link_association;

  public function __construct(shape(
  ?'link_association' => LinkAssociation,
  ) $s = shape()) {
    $this->link_association = $link_association ?? null;
  }
}

class Bandwidth {
  public int $download_speed;
  public int $upload_speed;

  public function __construct(shape(
  ?'download_speed' => int,
  ?'upload_speed' => int,
  ) $s = shape()) {
    $this->download_speed = $download_speed ?? ;
    $this->upload_speed = $upload_speed ?? ;
  }
}

class ConflictException {
  public string $message;
  public string $resource_id;
  public string $resource_type;

  public function __construct(shape(
  ?'message' => string,
  ?'resource_id' => string,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
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

  public function __construct(shape(
  ?'description' => string,
  ?'global_network_id' => string,
  ?'location' => Location,
  ?'model' => string,
  ?'serial_number' => string,
  ?'site_id' => string,
  ?'tags' => TagList,
  ?'type' => string,
  ?'vendor' => string,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->location = $location ?? null;
    $this->model = $model ?? ;
    $this->serial_number = $serial_number ?? ;
    $this->site_id = $site_id ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
    $this->vendor = $vendor ?? ;
  }
}

class CreateDeviceResponse {
  public Device $device;

  public function __construct(shape(
  ?'device' => Device,
  ) $s = shape()) {
    $this->device = $device ?? null;
  }
}

class CreateGlobalNetworkRequest {
  public string $description;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->tags = $tags ?? ;
  }
}

class CreateGlobalNetworkResponse {
  public GlobalNetwork $global_network;

  public function __construct(shape(
  ?'global_network' => GlobalNetwork,
  ) $s = shape()) {
    $this->global_network = $global_network ?? null;
  }
}

class CreateLinkRequest {
  public Bandwidth $bandwidth;
  public string $description;
  public string $global_network_id;
  public string $provider;
  public string $site_id;
  public TagList $tags;
  public string $type;

  public function __construct(shape(
  ?'bandwidth' => Bandwidth,
  ?'description' => string,
  ?'global_network_id' => string,
  ?'provider' => string,
  ?'site_id' => string,
  ?'tags' => TagList,
  ?'type' => string,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? null;
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->provider = $provider ?? ;
    $this->site_id = $site_id ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
  }
}

class CreateLinkResponse {
  public Link $link;

  public function __construct(shape(
  ?'link' => Link,
  ) $s = shape()) {
    $this->link = $link ?? null;
  }
}

class CreateSiteRequest {
  public string $description;
  public string $global_network_id;
  public Location $location;
  public TagList $tags;

  public function __construct(shape(
  ?'description' => string,
  ?'global_network_id' => string,
  ?'location' => Location,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->location = $location ?? null;
    $this->tags = $tags ?? ;
  }
}

class CreateSiteResponse {
  public Site $site;

  public function __construct(shape(
  ?'site' => Site,
  ) $s = shape()) {
    $this->site = $site ?? null;
  }
}

class CustomerGatewayAssociation {
  public string $customer_gateway_arn;
  public string $device_id;
  public string $global_network_id;
  public string $link_id;
  public CustomerGatewayAssociationState $state;

  public function __construct(shape(
  ?'customer_gateway_arn' => string,
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'link_id' => string,
  ?'state' => CustomerGatewayAssociationState,
  ) $s = shape()) {
    $this->customer_gateway_arn = $customer_gateway_arn ?? ;
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_id = $link_id ?? ;
    $this->state = $state ?? ;
  }
}

type CustomerGatewayAssociationList = vec<CustomerGatewayAssociation>;

type CustomerGatewayAssociationState = string;

type DateTime = int;

class DeleteDeviceRequest {
  public string $device_id;
  public string $global_network_id;

  public function __construct(shape(
  ?'device_id' => string,
  ?'global_network_id' => string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
  }
}

class DeleteDeviceResponse {
  public Device $device;

  public function __construct(shape(
  ?'device' => Device,
  ) $s = shape()) {
    $this->device = $device ?? null;
  }
}

class DeleteGlobalNetworkRequest {
  public string $global_network_id;

  public function __construct(shape(
  ?'global_network_id' => string,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
  }
}

class DeleteGlobalNetworkResponse {
  public GlobalNetwork $global_network;

  public function __construct(shape(
  ?'global_network' => GlobalNetwork,
  ) $s = shape()) {
    $this->global_network = $global_network ?? null;
  }
}

class DeleteLinkRequest {
  public string $global_network_id;
  public string $link_id;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'link_id' => string,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->link_id = $link_id ?? ;
  }
}

class DeleteLinkResponse {
  public Link $link;

  public function __construct(shape(
  ?'link' => Link,
  ) $s = shape()) {
    $this->link = $link ?? null;
  }
}

class DeleteSiteRequest {
  public string $global_network_id;
  public string $site_id;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'site_id' => string,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->site_id = $site_id ?? ;
  }
}

class DeleteSiteResponse {
  public Site $site;

  public function __construct(shape(
  ?'site' => Site,
  ) $s = shape()) {
    $this->site = $site ?? null;
  }
}

class DeregisterTransitGatewayRequest {
  public string $global_network_id;
  public string $transit_gateway_arn;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'transit_gateway_arn' => string,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->transit_gateway_arn = $transit_gateway_arn ?? ;
  }
}

class DeregisterTransitGatewayResponse {
  public TransitGatewayRegistration $transit_gateway_registration;

  public function __construct(shape(
  ?'transit_gateway_registration' => TransitGatewayRegistration,
  ) $s = shape()) {
    $this->transit_gateway_registration = $transit_gateway_registration ?? null;
  }
}

class DescribeGlobalNetworksRequest {
  public StringList $global_network_ids;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'global_network_ids' => StringList,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->global_network_ids = $global_network_ids ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class DescribeGlobalNetworksResponse {
  public GlobalNetworkList $global_networks;
  public string $next_token;

  public function __construct(shape(
  ?'global_networks' => GlobalNetworkList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->global_networks = $global_networks ?? ;
    $this->next_token = $next_token ?? ;
  }
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

  public function __construct(shape(
  ?'created_at' => DateTime,
  ?'description' => string,
  ?'device_arn' => string,
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'location' => Location,
  ?'model' => string,
  ?'serial_number' => string,
  ?'site_id' => string,
  ?'state' => DeviceState,
  ?'tags' => TagList,
  ?'type' => string,
  ?'vendor' => string,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->device_arn = $device_arn ?? ;
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->location = $location ?? null;
    $this->model = $model ?? ;
    $this->serial_number = $serial_number ?? ;
    $this->site_id = $site_id ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
    $this->vendor = $vendor ?? ;
  }
}

type DeviceList = vec<Device>;

type DeviceState = string;

class DisassociateCustomerGatewayRequest {
  public string $customer_gateway_arn;
  public string $global_network_id;

  public function __construct(shape(
  ?'customer_gateway_arn' => string,
  ?'global_network_id' => string,
  ) $s = shape()) {
    $this->customer_gateway_arn = $customer_gateway_arn ?? ;
    $this->global_network_id = $global_network_id ?? ;
  }
}

class DisassociateCustomerGatewayResponse {
  public CustomerGatewayAssociation $customer_gateway_association;

  public function __construct(shape(
  ?'customer_gateway_association' => CustomerGatewayAssociation,
  ) $s = shape()) {
    $this->customer_gateway_association = $customer_gateway_association ?? null;
  }
}

class DisassociateLinkRequest {
  public string $device_id;
  public string $global_network_id;
  public string $link_id;

  public function __construct(shape(
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'link_id' => string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_id = $link_id ?? ;
  }
}

class DisassociateLinkResponse {
  public LinkAssociation $link_association;

  public function __construct(shape(
  ?'link_association' => LinkAssociation,
  ) $s = shape()) {
    $this->link_association = $link_association ?? null;
  }
}

class GetCustomerGatewayAssociationsRequest {
  public StringList $customer_gateway_arns;
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'customer_gateway_arns' => StringList,
  ?'global_network_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->customer_gateway_arns = $customer_gateway_arns ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class GetCustomerGatewayAssociationsResponse {
  public CustomerGatewayAssociationList $customer_gateway_associations;
  public string $next_token;

  public function __construct(shape(
  ?'customer_gateway_associations' => CustomerGatewayAssociationList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->customer_gateway_associations = $customer_gateway_associations ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetDevicesRequest {
  public StringList $device_ids;
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;
  public string $site_id;

  public function __construct(shape(
  ?'device_ids' => StringList,
  ?'global_network_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'site_id' => string,
  ) $s = shape()) {
    $this->device_ids = $device_ids ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->site_id = $site_id ?? ;
  }
}

class GetDevicesResponse {
  public DeviceList $devices;
  public string $next_token;

  public function __construct(shape(
  ?'devices' => DeviceList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->devices = $devices ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetLinkAssociationsRequest {
  public string $device_id;
  public string $global_network_id;
  public string $link_id;
  public MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'link_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_id = $link_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
  }
}

class GetLinkAssociationsResponse {
  public LinkAssociationList $link_associations;
  public string $next_token;

  public function __construct(shape(
  ?'link_associations' => LinkAssociationList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->link_associations = $link_associations ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetLinksRequest {
  public string $global_network_id;
  public StringList $link_ids;
  public MaxResults $max_results;
  public string $next_token;
  public string $provider;
  public string $site_id;
  public string $type;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'link_ids' => StringList,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'provider' => string,
  ?'site_id' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->link_ids = $link_ids ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->provider = $provider ?? ;
    $this->site_id = $site_id ?? ;
    $this->type = $type ?? ;
  }
}

class GetLinksResponse {
  public LinkList $links;
  public string $next_token;

  public function __construct(shape(
  ?'links' => LinkList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->links = $links ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetSitesRequest {
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;
  public StringList $site_ids;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'site_ids' => StringList,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->site_ids = $site_ids ?? ;
  }
}

class GetSitesResponse {
  public string $next_token;
  public SiteList $sites;

  public function __construct(shape(
  ?'next_token' => string,
  ?'sites' => SiteList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->sites = $sites ?? ;
  }
}

class GetTransitGatewayRegistrationsRequest {
  public string $global_network_id;
  public MaxResults $max_results;
  public string $next_token;
  public StringList $transit_gateway_arns;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'max_results' => MaxResults,
  ?'next_token' => string,
  ?'transit_gateway_arns' => StringList,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? ;
    $this->transit_gateway_arns = $transit_gateway_arns ?? ;
  }
}

class GetTransitGatewayRegistrationsResponse {
  public string $next_token;
  public TransitGatewayRegistrationList $transit_gateway_registrations;

  public function __construct(shape(
  ?'next_token' => string,
  ?'transit_gateway_registrations' => TransitGatewayRegistrationList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->transit_gateway_registrations = $transit_gateway_registrations ?? ;
  }
}

class GlobalNetwork {
  public DateTime $created_at;
  public string $description;
  public string $global_network_arn;
  public string $global_network_id;
  public GlobalNetworkState $state;
  public TagList $tags;

  public function __construct(shape(
  ?'created_at' => DateTime,
  ?'description' => string,
  ?'global_network_arn' => string,
  ?'global_network_id' => string,
  ?'state' => GlobalNetworkState,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->global_network_arn = $global_network_arn ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? ;
  }
}

type GlobalNetworkList = vec<GlobalNetwork>;

type GlobalNetworkState = string;

type Integer = int;

class InternalServerException {
  public string $message;
  public RetryAfterSeconds $retry_after_seconds;

  public function __construct(shape(
  ?'message' => string,
  ?'retry_after_seconds' => RetryAfterSeconds,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->retry_after_seconds = $retry_after_seconds ?? 0;
  }
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

  public function __construct(shape(
  ?'bandwidth' => Bandwidth,
  ?'created_at' => DateTime,
  ?'description' => string,
  ?'global_network_id' => string,
  ?'link_arn' => string,
  ?'link_id' => string,
  ?'provider' => string,
  ?'site_id' => string,
  ?'state' => LinkState,
  ?'tags' => TagList,
  ?'type' => string,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? null;
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_arn = $link_arn ?? ;
    $this->link_id = $link_id ?? ;
    $this->provider = $provider ?? ;
    $this->site_id = $site_id ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? ;
    $this->type = $type ?? ;
  }
}

class LinkAssociation {
  public string $device_id;
  public string $global_network_id;
  public LinkAssociationState $link_association_state;
  public string $link_id;

  public function __construct(shape(
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'link_association_state' => LinkAssociationState,
  ?'link_id' => string,
  ) $s = shape()) {
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_association_state = $link_association_state ?? "";
    $this->link_id = $link_id ?? ;
  }
}

type LinkAssociationList = vec<LinkAssociation>;

type LinkAssociationState = string;

type LinkList = vec<Link>;

type LinkState = string;

class ListTagsForResourceRequest {
  public ResourceARN $resource_arn;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
  }
}

class ListTagsForResourceResponse {
  public TagList $tag_list;

  public function __construct(shape(
  ?'tag_list' => TagList,
  ) $s = shape()) {
    $this->tag_list = $tag_list ?? [];
  }
}

class Location {
  public string $address;
  public string $latitude;
  public string $longitude;

  public function __construct(shape(
  ?'address' => string,
  ?'latitude' => string,
  ?'longitude' => string,
  ) $s = shape()) {
    $this->address = $address ?? ;
    $this->latitude = $latitude ?? ;
    $this->longitude = $longitude ?? ;
  }
}

type MaxResults = int;

class RegisterTransitGatewayRequest {
  public string $global_network_id;
  public string $transit_gateway_arn;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'transit_gateway_arn' => string,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->transit_gateway_arn = $transit_gateway_arn ?? ;
  }
}

class RegisterTransitGatewayResponse {
  public TransitGatewayRegistration $transit_gateway_registration;

  public function __construct(shape(
  ?'transit_gateway_registration' => TransitGatewayRegistration,
  ) $s = shape()) {
    $this->transit_gateway_registration = $transit_gateway_registration ?? null;
  }
}

type ResourceARN = string;

class ResourceNotFoundException {
  public string $message;
  public string $resource_id;
  public string $resource_type;

  public function __construct(shape(
  ?'message' => string,
  ?'resource_id' => string,
  ?'resource_type' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_type = $resource_type ?? ;
  }
}

type RetryAfterSeconds = int;

class ServiceQuotaExceededException {
  public string $limit_code;
  public string $message;
  public string $resource_id;
  public string $resource_type;
  public string $service_code;

  public function __construct(shape(
  ?'limit_code' => string,
  ?'message' => string,
  ?'resource_id' => string,
  ?'resource_type' => string,
  ?'service_code' => string,
  ) $s = shape()) {
    $this->limit_code = $limit_code ?? ;
    $this->message = $message ?? ;
    $this->resource_id = $resource_id ?? ;
    $this->resource_type = $resource_type ?? ;
    $this->service_code = $service_code ?? ;
  }
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

  public function __construct(shape(
  ?'created_at' => DateTime,
  ?'description' => string,
  ?'global_network_id' => string,
  ?'location' => Location,
  ?'site_arn' => string,
  ?'site_id' => string,
  ?'state' => SiteState,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->created_at = $created_at ?? ;
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->location = $location ?? null;
    $this->site_arn = $site_arn ?? ;
    $this->site_id = $site_id ?? ;
    $this->state = $state ?? ;
    $this->tags = $tags ?? ;
  }
}

type SiteList = vec<Site>;

type SiteState = string;

type String = string;

type StringList = vec<String>;

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

class TagResourceRequest {
  public ResourceARN $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tags = $tags ?? ;
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class ThrottlingException {
  public string $message;
  public RetryAfterSeconds $retry_after_seconds;

  public function __construct(shape(
  ?'message' => string,
  ?'retry_after_seconds' => RetryAfterSeconds,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->retry_after_seconds = $retry_after_seconds ?? 0;
  }
}

class TransitGatewayRegistration {
  public string $global_network_id;
  public TransitGatewayRegistrationStateReason $state;
  public string $transit_gateway_arn;

  public function __construct(shape(
  ?'global_network_id' => string,
  ?'state' => TransitGatewayRegistrationStateReason,
  ?'transit_gateway_arn' => string,
  ) $s = shape()) {
    $this->global_network_id = $global_network_id ?? ;
    $this->state = $state ?? ;
    $this->transit_gateway_arn = $transit_gateway_arn ?? ;
  }
}

type TransitGatewayRegistrationList = vec<TransitGatewayRegistration>;

type TransitGatewayRegistrationState = string;

class TransitGatewayRegistrationStateReason {
  public TransitGatewayRegistrationState $code;
  public string $message;

  public function __construct(shape(
  ?'code' => TransitGatewayRegistrationState,
  ?'message' => string,
  ) $s = shape()) {
    $this->code = $code ?? ;
    $this->message = $message ?? ;
  }
}

class UntagResourceRequest {
  public ResourceARN $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceARN,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? ;
    $this->tag_keys = $tag_keys ?? ;
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
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

  public function __construct(shape(
  ?'description' => string,
  ?'device_id' => string,
  ?'global_network_id' => string,
  ?'location' => Location,
  ?'model' => string,
  ?'serial_number' => string,
  ?'site_id' => string,
  ?'type' => string,
  ?'vendor' => string,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->device_id = $device_id ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->location = $location ?? null;
    $this->model = $model ?? ;
    $this->serial_number = $serial_number ?? ;
    $this->site_id = $site_id ?? ;
    $this->type = $type ?? ;
    $this->vendor = $vendor ?? ;
  }
}

class UpdateDeviceResponse {
  public Device $device;

  public function __construct(shape(
  ?'device' => Device,
  ) $s = shape()) {
    $this->device = $device ?? null;
  }
}

class UpdateGlobalNetworkRequest {
  public string $description;
  public string $global_network_id;

  public function __construct(shape(
  ?'description' => string,
  ?'global_network_id' => string,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
  }
}

class UpdateGlobalNetworkResponse {
  public GlobalNetwork $global_network;

  public function __construct(shape(
  ?'global_network' => GlobalNetwork,
  ) $s = shape()) {
    $this->global_network = $global_network ?? null;
  }
}

class UpdateLinkRequest {
  public Bandwidth $bandwidth;
  public string $description;
  public string $global_network_id;
  public string $link_id;
  public string $provider;
  public string $type;

  public function __construct(shape(
  ?'bandwidth' => Bandwidth,
  ?'description' => string,
  ?'global_network_id' => string,
  ?'link_id' => string,
  ?'provider' => string,
  ?'type' => string,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? null;
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->link_id = $link_id ?? ;
    $this->provider = $provider ?? ;
    $this->type = $type ?? ;
  }
}

class UpdateLinkResponse {
  public Link $link;

  public function __construct(shape(
  ?'link' => Link,
  ) $s = shape()) {
    $this->link = $link ?? null;
  }
}

class UpdateSiteRequest {
  public string $description;
  public string $global_network_id;
  public Location $location;
  public string $site_id;

  public function __construct(shape(
  ?'description' => string,
  ?'global_network_id' => string,
  ?'location' => Location,
  ?'site_id' => string,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->global_network_id = $global_network_id ?? ;
    $this->location = $location ?? null;
    $this->site_id = $site_id ?? ;
  }
}

class UpdateSiteResponse {
  public Site $site;

  public function __construct(shape(
  ?'site' => Site,
  ) $s = shape()) {
    $this->site = $site ?? null;
  }
}

class ValidationException {
  public ValidationExceptionFieldList $fields;
  public string $message;
  public ValidationExceptionReason $reason;

  public function __construct(shape(
  ?'fields' => ValidationExceptionFieldList,
  ?'message' => string,
  ?'reason' => ValidationExceptionReason,
  ) $s = shape()) {
    $this->fields = $fields ?? ;
    $this->message = $message ?? ;
    $this->reason = $reason ?? ;
  }
}

class ValidationExceptionField {
  public string $message;
  public string $name;

  public function __construct(shape(
  ?'message' => string,
  ?'name' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
    $this->name = $name ?? ;
  }
}

type ValidationExceptionFieldList = vec<ValidationExceptionField>;

type ValidationExceptionReason = string;

