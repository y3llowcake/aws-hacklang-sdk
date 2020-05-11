<?hh // strict
namespace slack\aws\directconnect;

interface Direct Connect {
  public function AcceptDirectConnectGatewayAssociationProposal(AcceptDirectConnectGatewayAssociationProposalRequest): Awaitable<Errors\Result<AcceptDirectConnectGatewayAssociationProposalResult>>;
  public function AllocateConnectionOnInterconnect(AllocateConnectionOnInterconnectRequest): Awaitable<Errors\Result<Connection>>;
  public function AllocateHostedConnection(AllocateHostedConnectionRequest): Awaitable<Errors\Result<Connection>>;
  public function AllocatePrivateVirtualInterface(AllocatePrivateVirtualInterfaceRequest): Awaitable<Errors\Result<VirtualInterface>>;
  public function AllocatePublicVirtualInterface(AllocatePublicVirtualInterfaceRequest): Awaitable<Errors\Result<VirtualInterface>>;
  public function AllocateTransitVirtualInterface(AllocateTransitVirtualInterfaceRequest): Awaitable<Errors\Result<AllocateTransitVirtualInterfaceResult>>;
  public function AssociateConnectionWithLag(AssociateConnectionWithLagRequest): Awaitable<Errors\Result<Connection>>;
  public function AssociateHostedConnection(AssociateHostedConnectionRequest): Awaitable<Errors\Result<Connection>>;
  public function AssociateVirtualInterface(AssociateVirtualInterfaceRequest): Awaitable<Errors\Result<VirtualInterface>>;
  public function ConfirmConnection(ConfirmConnectionRequest): Awaitable<Errors\Result<ConfirmConnectionResponse>>;
  public function ConfirmPrivateVirtualInterface(ConfirmPrivateVirtualInterfaceRequest): Awaitable<Errors\Result<ConfirmPrivateVirtualInterfaceResponse>>;
  public function ConfirmPublicVirtualInterface(ConfirmPublicVirtualInterfaceRequest): Awaitable<Errors\Result<ConfirmPublicVirtualInterfaceResponse>>;
  public function ConfirmTransitVirtualInterface(ConfirmTransitVirtualInterfaceRequest): Awaitable<Errors\Result<ConfirmTransitVirtualInterfaceResponse>>;
  public function CreateBGPPeer(CreateBGPPeerRequest): Awaitable<Errors\Result<CreateBGPPeerResponse>>;
  public function CreateConnection(CreateConnectionRequest): Awaitable<Errors\Result<Connection>>;
  public function CreateDirectConnectGateway(CreateDirectConnectGatewayRequest): Awaitable<Errors\Result<CreateDirectConnectGatewayResult>>;
  public function CreateDirectConnectGatewayAssociation(CreateDirectConnectGatewayAssociationRequest): Awaitable<Errors\Result<CreateDirectConnectGatewayAssociationResult>>;
  public function CreateDirectConnectGatewayAssociationProposal(CreateDirectConnectGatewayAssociationProposalRequest): Awaitable<Errors\Result<CreateDirectConnectGatewayAssociationProposalResult>>;
  public function CreateInterconnect(CreateInterconnectRequest): Awaitable<Errors\Result<Interconnect>>;
  public function CreateLag(CreateLagRequest): Awaitable<Errors\Result<Lag>>;
  public function CreatePrivateVirtualInterface(CreatePrivateVirtualInterfaceRequest): Awaitable<Errors\Result<VirtualInterface>>;
  public function CreatePublicVirtualInterface(CreatePublicVirtualInterfaceRequest): Awaitable<Errors\Result<VirtualInterface>>;
  public function CreateTransitVirtualInterface(CreateTransitVirtualInterfaceRequest): Awaitable<Errors\Result<CreateTransitVirtualInterfaceResult>>;
  public function DeleteBGPPeer(DeleteBGPPeerRequest): Awaitable<Errors\Result<DeleteBGPPeerResponse>>;
  public function DeleteConnection(DeleteConnectionRequest): Awaitable<Errors\Result<Connection>>;
  public function DeleteDirectConnectGateway(DeleteDirectConnectGatewayRequest): Awaitable<Errors\Result<DeleteDirectConnectGatewayResult>>;
  public function DeleteDirectConnectGatewayAssociation(DeleteDirectConnectGatewayAssociationRequest): Awaitable<Errors\Result<DeleteDirectConnectGatewayAssociationResult>>;
  public function DeleteDirectConnectGatewayAssociationProposal(DeleteDirectConnectGatewayAssociationProposalRequest): Awaitable<Errors\Result<DeleteDirectConnectGatewayAssociationProposalResult>>;
  public function DeleteInterconnect(DeleteInterconnectRequest): Awaitable<Errors\Result<DeleteInterconnectResponse>>;
  public function DeleteLag(DeleteLagRequest): Awaitable<Errors\Result<Lag>>;
  public function DeleteVirtualInterface(DeleteVirtualInterfaceRequest): Awaitable<Errors\Result<DeleteVirtualInterfaceResponse>>;
  public function DescribeConnectionLoa(DescribeConnectionLoaRequest): Awaitable<Errors\Result<DescribeConnectionLoaResponse>>;
  public function DescribeConnections(DescribeConnectionsRequest): Awaitable<Errors\Result<Connections>>;
  public function DescribeConnectionsOnInterconnect(DescribeConnectionsOnInterconnectRequest): Awaitable<Errors\Result<Connections>>;
  public function DescribeDirectConnectGatewayAssociationProposals(DescribeDirectConnectGatewayAssociationProposalsRequest): Awaitable<Errors\Result<DescribeDirectConnectGatewayAssociationProposalsResult>>;
  public function DescribeDirectConnectGatewayAssociations(DescribeDirectConnectGatewayAssociationsRequest): Awaitable<Errors\Result<DescribeDirectConnectGatewayAssociationsResult>>;
  public function DescribeDirectConnectGatewayAttachments(DescribeDirectConnectGatewayAttachmentsRequest): Awaitable<Errors\Result<DescribeDirectConnectGatewayAttachmentsResult>>;
  public function DescribeDirectConnectGateways(DescribeDirectConnectGatewaysRequest): Awaitable<Errors\Result<DescribeDirectConnectGatewaysResult>>;
  public function DescribeHostedConnections(DescribeHostedConnectionsRequest): Awaitable<Errors\Result<Connections>>;
  public function DescribeInterconnectLoa(DescribeInterconnectLoaRequest): Awaitable<Errors\Result<DescribeInterconnectLoaResponse>>;
  public function DescribeInterconnects(DescribeInterconnectsRequest): Awaitable<Errors\Result<Interconnects>>;
  public function DescribeLags(DescribeLagsRequest): Awaitable<Errors\Result<Lags>>;
  public function DescribeLoa(DescribeLoaRequest): Awaitable<Errors\Result<Loa>>;
  public function DescribeLocations(): Awaitable<Errors\Result<Locations>>;
  public function DescribeTags(DescribeTagsRequest): Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function DescribeVirtualGateways(): Awaitable<Errors\Result<VirtualGateways>>;
  public function DescribeVirtualInterfaces(DescribeVirtualInterfacesRequest): Awaitable<Errors\Result<VirtualInterfaces>>;
  public function DisassociateConnectionFromLag(DisassociateConnectionFromLagRequest): Awaitable<Errors\Result<Connection>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDirectConnectGatewayAssociation(UpdateDirectConnectGatewayAssociationRequest): Awaitable<Errors\Result<UpdateDirectConnectGatewayAssociationResult>>;
  public function UpdateLag(UpdateLagRequest): Awaitable<Errors\Result<Lag>>;
  public function UpdateVirtualInterfaceAttributes(UpdateVirtualInterfaceAttributesRequest): Awaitable<Errors\Result<VirtualInterface>>;
}

type ASN = int;

class AcceptDirectConnectGatewayAssociationProposalRequest {
  public OwnerAccount $associated_gateway_owner_account;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public RouteFilterPrefixList $override_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayAssociationProposalId $proposal_id;

  public function __construct(shape(
  ?'associated_gateway_owner_account' => OwnerAccount,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'override_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ?'proposal_id' => DirectConnectGatewayAssociationProposalId,
  ) $s = shape()) {
    $this->associated_gateway_owner_account = $associated_gateway_owner_account ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->override_allowed_prefixes_to_direct_connect_gateway = $override_allowed_prefixes_to_direct_connect_gateway ?? [];
    $this->proposal_id = $proposal_id ?? "";
  }
}

class AcceptDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;

  public function __construct(shape(
  ?'direct_connect_gateway_association' => DirectConnectGatewayAssociation,
  ) $s = shape()) {
    $this->direct_connect_gateway_association = $direct_connect_gateway_association ?? null;
  }
}

type AddressFamily = string;

class AllocateConnectionOnInterconnectRequest {
  public Bandwidth $bandwidth;
  public ConnectionName $connection_name;
  public InterconnectId $interconnect_id;
  public OwnerAccount $owner_account;
  public VLAN $vlan;

  public function __construct(shape(
  ?'bandwidth' => Bandwidth,
  ?'connection_name' => ConnectionName,
  ?'interconnect_id' => InterconnectId,
  ?'owner_account' => OwnerAccount,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? "";
    $this->connection_name = $connection_name ?? "";
    $this->interconnect_id = $interconnect_id ?? "";
    $this->owner_account = $owner_account ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

class AllocateHostedConnectionRequest {
  public Bandwidth $bandwidth;
  public ConnectionId $connection_id;
  public ConnectionName $connection_name;
  public OwnerAccount $owner_account;
  public TagList $tags;
  public VLAN $vlan;

  public function __construct(shape(
  ?'bandwidth' => Bandwidth,
  ?'connection_id' => ConnectionId,
  ?'connection_name' => ConnectionName,
  ?'owner_account' => OwnerAccount,
  ?'tags' => TagList,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? "";
    $this->connection_id = $connection_id ?? "";
    $this->connection_name = $connection_name ?? "";
    $this->owner_account = $owner_account ?? "";
    $this->tags = $tags ?? [];
    $this->vlan = $vlan ?? 0;
  }
}

class AllocatePrivateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPrivateVirtualInterfaceAllocation $new_private_virtual_interface_allocation;
  public OwnerAccount $owner_account;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'new_private_virtual_interface_allocation' => NewPrivateVirtualInterfaceAllocation,
  ?'owner_account' => OwnerAccount,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->new_private_virtual_interface_allocation = $new_private_virtual_interface_allocation ?? null;
    $this->owner_account = $owner_account ?? "";
  }
}

class AllocatePublicVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPublicVirtualInterfaceAllocation $new_public_virtual_interface_allocation;
  public OwnerAccount $owner_account;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'new_public_virtual_interface_allocation' => NewPublicVirtualInterfaceAllocation,
  ?'owner_account' => OwnerAccount,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->new_public_virtual_interface_allocation = $new_public_virtual_interface_allocation ?? null;
    $this->owner_account = $owner_account ?? "";
  }
}

class AllocateTransitVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewTransitVirtualInterfaceAllocation $new_transit_virtual_interface_allocation;
  public OwnerAccount $owner_account;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'new_transit_virtual_interface_allocation' => NewTransitVirtualInterfaceAllocation,
  ?'owner_account' => OwnerAccount,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->new_transit_virtual_interface_allocation = $new_transit_virtual_interface_allocation ?? null;
    $this->owner_account = $owner_account ?? "";
  }
}

class AllocateTransitVirtualInterfaceResult {
  public VirtualInterface $virtual_interface;

  public function __construct(shape(
  ?'virtual_interface' => VirtualInterface,
  ) $s = shape()) {
    $this->virtual_interface = $virtual_interface ?? null;
  }
}

type AmazonAddress = string;

class AssociateConnectionWithLagRequest {
  public ConnectionId $connection_id;
  public LagId $lag_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'lag_id' => LagId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->lag_id = $lag_id ?? "";
  }
}

class AssociateHostedConnectionRequest {
  public ConnectionId $connection_id;
  public ConnectionId $parent_connection_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'parent_connection_id' => ConnectionId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->parent_connection_id = $parent_connection_id ?? "";
  }
}

class AssociateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class AssociatedGateway {
  public GatewayIdentifier $id;
  public OwnerAccount $owner_account;
  public Region $region;
  public GatewayType $type;

  public function __construct(shape(
  ?'id' => GatewayIdentifier,
  ?'owner_account' => OwnerAccount,
  ?'region' => Region,
  ?'type' => GatewayType,
  ) $s = shape()) {
    $this->id = $id ?? "";
    $this->owner_account = $owner_account ?? "";
    $this->region = $region ?? "";
    $this->type = $type ?? "";
  }
}

type AssociatedGatewayId = string;

type AvailablePortSpeeds = vec<PortSpeed>;

type AwsDevice = string;

type AwsDeviceV2 = string;

type BGPAuthKey = string;

class BGPPeer {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public AwsDeviceV2 $aws_device_v_2;
  public BGPPeerId $bgp_peer_id;
  public BGPPeerState $bgp_peer_state;
  public BGPStatus $bgp_status;
  public CustomerAddress $customer_address;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'aws_device_v_2' => AwsDeviceV2,
  ?'bgp_peer_id' => BGPPeerId,
  ?'bgp_peer_state' => BGPPeerState,
  ?'bgp_status' => BGPStatus,
  ?'customer_address' => CustomerAddress,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->aws_device_v_2 = $aws_device_v_2 ?? "";
    $this->bgp_peer_id = $bgp_peer_id ?? "";
    $this->bgp_peer_state = $bgp_peer_state ?? "";
    $this->bgp_status = $bgp_status ?? "";
    $this->customer_address = $customer_address ?? "";
  }
}

type BGPPeerId = string;

type BGPPeerList = vec<BGPPeer>;

type BGPPeerState = string;

type BGPStatus = string;

type Bandwidth = string;

type BooleanFlag = bool;

type CIDR = string;

class ConfirmConnectionRequest {
  public ConnectionId $connection_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
  }
}

class ConfirmConnectionResponse {
  public ConnectionState $connection_state;

  public function __construct(shape(
  ?'connection_state' => ConnectionState,
  ) $s = shape()) {
    $this->connection_state = $connection_state ?? "";
  }
}

class ConfirmPrivateVirtualInterfaceRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'virtual_gateway_id' => VirtualGatewayId,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class ConfirmPrivateVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;

  public function __construct(shape(
  ?'virtual_interface_state' => VirtualInterfaceState,
  ) $s = shape()) {
    $this->virtual_interface_state = $virtual_interface_state ?? "";
  }
}

class ConfirmPublicVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class ConfirmPublicVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;

  public function __construct(shape(
  ?'virtual_interface_state' => VirtualInterfaceState,
  ) $s = shape()) {
    $this->virtual_interface_state = $virtual_interface_state ?? "";
  }
}

class ConfirmTransitVirtualInterfaceRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class ConfirmTransitVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;

  public function __construct(shape(
  ?'virtual_interface_state' => VirtualInterfaceState,
  ) $s = shape()) {
    $this->virtual_interface_state = $virtual_interface_state ?? "";
  }
}

class Connection {
  public AwsDevice $aws_device;
  public AwsDeviceV2 $aws_device_v_2;
  public Bandwidth $bandwidth;
  public ConnectionId $connection_id;
  public ConnectionName $connection_name;
  public ConnectionState $connection_state;
  public HasLogicalRedundancy $has_logical_redundancy;
  public JumboFrameCapable $jumbo_frame_capable;
  public LagId $lag_id;
  public LoaIssueTime $loa_issue_time;
  public LocationCode $location;
  public OwnerAccount $owner_account;
  public PartnerName $partner_name;
  public ProviderName $provider_name;
  public Region $region;
  public TagList $tags;
  public VLAN $vlan;

  public function __construct(shape(
  ?'aws_device' => AwsDevice,
  ?'aws_device_v_2' => AwsDeviceV2,
  ?'bandwidth' => Bandwidth,
  ?'connection_id' => ConnectionId,
  ?'connection_name' => ConnectionName,
  ?'connection_state' => ConnectionState,
  ?'has_logical_redundancy' => HasLogicalRedundancy,
  ?'jumbo_frame_capable' => JumboFrameCapable,
  ?'lag_id' => LagId,
  ?'loa_issue_time' => LoaIssueTime,
  ?'location' => LocationCode,
  ?'owner_account' => OwnerAccount,
  ?'partner_name' => PartnerName,
  ?'provider_name' => ProviderName,
  ?'region' => Region,
  ?'tags' => TagList,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->aws_device = $aws_device ?? "";
    $this->aws_device_v_2 = $aws_device_v_2 ?? "";
    $this->bandwidth = $bandwidth ?? "";
    $this->connection_id = $connection_id ?? "";
    $this->connection_name = $connection_name ?? "";
    $this->connection_state = $connection_state ?? "";
    $this->has_logical_redundancy = $has_logical_redundancy ?? "";
    $this->jumbo_frame_capable = $jumbo_frame_capable ?? false;
    $this->lag_id = $lag_id ?? "";
    $this->loa_issue_time = $loa_issue_time ?? 0;
    $this->location = $location ?? "";
    $this->owner_account = $owner_account ?? "";
    $this->partner_name = $partner_name ?? "";
    $this->provider_name = $provider_name ?? "";
    $this->region = $region ?? "";
    $this->tags = $tags ?? [];
    $this->vlan = $vlan ?? 0;
  }
}

type ConnectionId = string;

type ConnectionList = vec<Connection>;

type ConnectionName = string;

type ConnectionState = string;

class Connections {
  public ConnectionList $connections;

  public function __construct(shape(
  ?'connections' => ConnectionList,
  ) $s = shape()) {
    $this->connections = $connections ?? [];
  }
}

type Count = int;

class CreateBGPPeerRequest {
  public NewBGPPeer $new_bgp_peer;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'new_bgp_peer' => NewBGPPeer,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->new_bgp_peer = $new_bgp_peer ?? null;
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class CreateBGPPeerResponse {
  public VirtualInterface $virtual_interface;

  public function __construct(shape(
  ?'virtual_interface' => VirtualInterface,
  ) $s = shape()) {
    $this->virtual_interface = $virtual_interface ?? null;
  }
}

class CreateConnectionRequest {
  public Bandwidth $bandwidth;
  public ConnectionName $connection_name;
  public LagId $lag_id;
  public LocationCode $location;
  public ProviderName $provider_name;
  public TagList $tags;

  public function __construct(shape(
  ?'bandwidth' => Bandwidth,
  ?'connection_name' => ConnectionName,
  ?'lag_id' => LagId,
  ?'location' => LocationCode,
  ?'provider_name' => ProviderName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? "";
    $this->connection_name = $connection_name ?? "";
    $this->lag_id = $lag_id ?? "";
    $this->location = $location ?? "";
    $this->provider_name = $provider_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateDirectConnectGatewayAssociationProposalRequest {
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public OwnerAccount $direct_connect_gateway_owner_account;
  public GatewayIdToAssociate $gateway_id;
  public RouteFilterPrefixList $remove_allowed_prefixes_to_direct_connect_gateway;

  public function __construct(shape(
  ?'add_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'direct_connect_gateway_owner_account' => OwnerAccount,
  ?'gateway_id' => GatewayIdToAssociate,
  ?'remove_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ) $s = shape()) {
    $this->add_allowed_prefixes_to_direct_connect_gateway = $add_allowed_prefixes_to_direct_connect_gateway ?? [];
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->direct_connect_gateway_owner_account = $direct_connect_gateway_owner_account ?? "";
    $this->gateway_id = $gateway_id ?? "";
    $this->remove_allowed_prefixes_to_direct_connect_gateway = $remove_allowed_prefixes_to_direct_connect_gateway ?? [];
  }
}

class CreateDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociationProposal $direct_connect_gateway_association_proposal;

  public function __construct(shape(
  ?'direct_connect_gateway_association_proposal' => DirectConnectGatewayAssociationProposal,
  ) $s = shape()) {
    $this->direct_connect_gateway_association_proposal = $direct_connect_gateway_association_proposal ?? null;
  }
}

class CreateDirectConnectGatewayAssociationRequest {
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public GatewayIdToAssociate $gateway_id;
  public VirtualGatewayId $virtual_gateway_id;

  public function __construct(shape(
  ?'add_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'gateway_id' => GatewayIdToAssociate,
  ?'virtual_gateway_id' => VirtualGatewayId,
  ) $s = shape()) {
    $this->add_allowed_prefixes_to_direct_connect_gateway = $add_allowed_prefixes_to_direct_connect_gateway ?? [];
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->gateway_id = $gateway_id ?? "";
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
  }
}

class CreateDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;

  public function __construct(shape(
  ?'direct_connect_gateway_association' => DirectConnectGatewayAssociation,
  ) $s = shape()) {
    $this->direct_connect_gateway_association = $direct_connect_gateway_association ?? null;
  }
}

class CreateDirectConnectGatewayRequest {
  public LongAsn $amazon_side_asn;
  public DirectConnectGatewayName $direct_connect_gateway_name;

  public function __construct(shape(
  ?'amazon_side_asn' => LongAsn,
  ?'direct_connect_gateway_name' => DirectConnectGatewayName,
  ) $s = shape()) {
    $this->amazon_side_asn = $amazon_side_asn ?? 0;
    $this->direct_connect_gateway_name = $direct_connect_gateway_name ?? "";
  }
}

class CreateDirectConnectGatewayResult {
  public DirectConnectGateway $direct_connect_gateway;

  public function __construct(shape(
  ?'direct_connect_gateway' => DirectConnectGateway,
  ) $s = shape()) {
    $this->direct_connect_gateway = $direct_connect_gateway ?? null;
  }
}

class CreateInterconnectRequest {
  public Bandwidth $bandwidth;
  public InterconnectName $interconnect_name;
  public LagId $lag_id;
  public LocationCode $location;
  public ProviderName $provider_name;
  public TagList $tags;

  public function __construct(shape(
  ?'bandwidth' => Bandwidth,
  ?'interconnect_name' => InterconnectName,
  ?'lag_id' => LagId,
  ?'location' => LocationCode,
  ?'provider_name' => ProviderName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->bandwidth = $bandwidth ?? "";
    $this->interconnect_name = $interconnect_name ?? "";
    $this->lag_id = $lag_id ?? "";
    $this->location = $location ?? "";
    $this->provider_name = $provider_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreateLagRequest {
  public TagList $child_connection_tags;
  public ConnectionId $connection_id;
  public Bandwidth $connections_bandwidth;
  public LagName $lag_name;
  public LocationCode $location;
  public Count $number_of_connections;
  public ProviderName $provider_name;
  public TagList $tags;

  public function __construct(shape(
  ?'child_connection_tags' => TagList,
  ?'connection_id' => ConnectionId,
  ?'connections_bandwidth' => Bandwidth,
  ?'lag_name' => LagName,
  ?'location' => LocationCode,
  ?'number_of_connections' => Count,
  ?'provider_name' => ProviderName,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->child_connection_tags = $child_connection_tags ?? [];
    $this->connection_id = $connection_id ?? "";
    $this->connections_bandwidth = $connections_bandwidth ?? "";
    $this->lag_name = $lag_name ?? "";
    $this->location = $location ?? "";
    $this->number_of_connections = $number_of_connections ?? 0;
    $this->provider_name = $provider_name ?? "";
    $this->tags = $tags ?? [];
  }
}

class CreatePrivateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPrivateVirtualInterface $new_private_virtual_interface;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'new_private_virtual_interface' => NewPrivateVirtualInterface,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->new_private_virtual_interface = $new_private_virtual_interface ?? null;
  }
}

class CreatePublicVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPublicVirtualInterface $new_public_virtual_interface;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'new_public_virtual_interface' => NewPublicVirtualInterface,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->new_public_virtual_interface = $new_public_virtual_interface ?? null;
  }
}

class CreateTransitVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewTransitVirtualInterface $new_transit_virtual_interface;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'new_transit_virtual_interface' => NewTransitVirtualInterface,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->new_transit_virtual_interface = $new_transit_virtual_interface ?? null;
  }
}

class CreateTransitVirtualInterfaceResult {
  public VirtualInterface $virtual_interface;

  public function __construct(shape(
  ?'virtual_interface' => VirtualInterface,
  ) $s = shape()) {
    $this->virtual_interface = $virtual_interface ?? null;
  }
}

type CustomerAddress = string;

class DeleteBGPPeerRequest {
  public ASN $asn;
  public BGPPeerId $bgp_peer_id;
  public CustomerAddress $customer_address;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'asn' => ASN,
  ?'bgp_peer_id' => BGPPeerId,
  ?'customer_address' => CustomerAddress,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->asn = $asn ?? 0;
    $this->bgp_peer_id = $bgp_peer_id ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class DeleteBGPPeerResponse {
  public VirtualInterface $virtual_interface;

  public function __construct(shape(
  ?'virtual_interface' => VirtualInterface,
  ) $s = shape()) {
    $this->virtual_interface = $virtual_interface ?? null;
  }
}

class DeleteConnectionRequest {
  public ConnectionId $connection_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
  }
}

class DeleteDirectConnectGatewayAssociationProposalRequest {
  public DirectConnectGatewayAssociationProposalId $proposal_id;

  public function __construct(shape(
  ?'proposal_id' => DirectConnectGatewayAssociationProposalId,
  ) $s = shape()) {
    $this->proposal_id = $proposal_id ?? "";
  }
}

class DeleteDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociationProposal $direct_connect_gateway_association_proposal;

  public function __construct(shape(
  ?'direct_connect_gateway_association_proposal' => DirectConnectGatewayAssociationProposal,
  ) $s = shape()) {
    $this->direct_connect_gateway_association_proposal = $direct_connect_gateway_association_proposal ?? null;
  }
}

class DeleteDirectConnectGatewayAssociationRequest {
  public DirectConnectGatewayAssociationId $association_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualGatewayId $virtual_gateway_id;

  public function __construct(shape(
  ?'association_id' => DirectConnectGatewayAssociationId,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'virtual_gateway_id' => VirtualGatewayId,
  ) $s = shape()) {
    $this->association_id = $association_id ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
  }
}

class DeleteDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;

  public function __construct(shape(
  ?'direct_connect_gateway_association' => DirectConnectGatewayAssociation,
  ) $s = shape()) {
    $this->direct_connect_gateway_association = $direct_connect_gateway_association ?? null;
  }
}

class DeleteDirectConnectGatewayRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;

  public function __construct(shape(
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ) $s = shape()) {
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
  }
}

class DeleteDirectConnectGatewayResult {
  public DirectConnectGateway $direct_connect_gateway;

  public function __construct(shape(
  ?'direct_connect_gateway' => DirectConnectGateway,
  ) $s = shape()) {
    $this->direct_connect_gateway = $direct_connect_gateway ?? null;
  }
}

class DeleteInterconnectRequest {
  public InterconnectId $interconnect_id;

  public function __construct(shape(
  ?'interconnect_id' => InterconnectId,
  ) $s = shape()) {
    $this->interconnect_id = $interconnect_id ?? "";
  }
}

class DeleteInterconnectResponse {
  public InterconnectState $interconnect_state;

  public function __construct(shape(
  ?'interconnect_state' => InterconnectState,
  ) $s = shape()) {
    $this->interconnect_state = $interconnect_state ?? "";
  }
}

class DeleteLagRequest {
  public LagId $lag_id;

  public function __construct(shape(
  ?'lag_id' => LagId,
  ) $s = shape()) {
    $this->lag_id = $lag_id ?? "";
  }
}

class DeleteVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class DeleteVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;

  public function __construct(shape(
  ?'virtual_interface_state' => VirtualInterfaceState,
  ) $s = shape()) {
    $this->virtual_interface_state = $virtual_interface_state ?? "";
  }
}

class DescribeConnectionLoaRequest {
  public ConnectionId $connection_id;
  public LoaContentType $loa_content_type;
  public ProviderName $provider_name;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'loa_content_type' => LoaContentType,
  ?'provider_name' => ProviderName,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->loa_content_type = $loa_content_type ?? "";
    $this->provider_name = $provider_name ?? "";
  }
}

class DescribeConnectionLoaResponse {
  public Loa $loa;

  public function __construct(shape(
  ?'loa' => Loa,
  ) $s = shape()) {
    $this->loa = $loa ?? null;
  }
}

class DescribeConnectionsOnInterconnectRequest {
  public InterconnectId $interconnect_id;

  public function __construct(shape(
  ?'interconnect_id' => InterconnectId,
  ) $s = shape()) {
    $this->interconnect_id = $interconnect_id ?? "";
  }
}

class DescribeConnectionsRequest {
  public ConnectionId $connection_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
  }
}

class DescribeDirectConnectGatewayAssociationProposalsRequest {
  public AssociatedGatewayId $associated_gateway_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
  public DirectConnectGatewayAssociationProposalId $proposal_id;

  public function __construct(shape(
  ?'associated_gateway_id' => AssociatedGatewayId,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'max_results' => MaxResultSetSize,
  ?'next_token' => PaginationToken,
  ?'proposal_id' => DirectConnectGatewayAssociationProposalId,
  ) $s = shape()) {
    $this->associated_gateway_id = $associated_gateway_id ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->proposal_id = $proposal_id ?? "";
  }
}

class DescribeDirectConnectGatewayAssociationProposalsResult {
  public DirectConnectGatewayAssociationProposalList $direct_connect_gateway_association_proposals;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'direct_connect_gateway_association_proposals' => DirectConnectGatewayAssociationProposalList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->direct_connect_gateway_association_proposals = $direct_connect_gateway_association_proposals ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDirectConnectGatewayAssociationsRequest {
  public AssociatedGatewayId $associated_gateway_id;
  public DirectConnectGatewayAssociationId $association_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
  public VirtualGatewayId $virtual_gateway_id;

  public function __construct(shape(
  ?'associated_gateway_id' => AssociatedGatewayId,
  ?'association_id' => DirectConnectGatewayAssociationId,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'max_results' => MaxResultSetSize,
  ?'next_token' => PaginationToken,
  ?'virtual_gateway_id' => VirtualGatewayId,
  ) $s = shape()) {
    $this->associated_gateway_id = $associated_gateway_id ?? "";
    $this->association_id = $association_id ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
  }
}

class DescribeDirectConnectGatewayAssociationsResult {
  public DirectConnectGatewayAssociationList $direct_connect_gateway_associations;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'direct_connect_gateway_associations' => DirectConnectGatewayAssociationList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->direct_connect_gateway_associations = $direct_connect_gateway_associations ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDirectConnectGatewayAttachmentsRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'max_results' => MaxResultSetSize,
  ?'next_token' => PaginationToken,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class DescribeDirectConnectGatewayAttachmentsResult {
  public DirectConnectGatewayAttachmentList $direct_connect_gateway_attachments;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'direct_connect_gateway_attachments' => DirectConnectGatewayAttachmentList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->direct_connect_gateway_attachments = $direct_connect_gateway_attachments ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDirectConnectGatewaysRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'max_results' => MaxResultSetSize,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
  }
}

class DescribeDirectConnectGatewaysResult {
  public DirectConnectGatewayList $direct_connect_gateways;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'direct_connect_gateways' => DirectConnectGatewayList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->direct_connect_gateways = $direct_connect_gateways ?? [];
    $this->next_token = $next_token ?? "";
  }
}

class DescribeHostedConnectionsRequest {
  public ConnectionId $connection_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
  }
}

class DescribeInterconnectLoaRequest {
  public InterconnectId $interconnect_id;
  public LoaContentType $loa_content_type;
  public ProviderName $provider_name;

  public function __construct(shape(
  ?'interconnect_id' => InterconnectId,
  ?'loa_content_type' => LoaContentType,
  ?'provider_name' => ProviderName,
  ) $s = shape()) {
    $this->interconnect_id = $interconnect_id ?? "";
    $this->loa_content_type = $loa_content_type ?? "";
    $this->provider_name = $provider_name ?? "";
  }
}

class DescribeInterconnectLoaResponse {
  public Loa $loa;

  public function __construct(shape(
  ?'loa' => Loa,
  ) $s = shape()) {
    $this->loa = $loa ?? null;
  }
}

class DescribeInterconnectsRequest {
  public InterconnectId $interconnect_id;

  public function __construct(shape(
  ?'interconnect_id' => InterconnectId,
  ) $s = shape()) {
    $this->interconnect_id = $interconnect_id ?? "";
  }
}

class DescribeLagsRequest {
  public LagId $lag_id;

  public function __construct(shape(
  ?'lag_id' => LagId,
  ) $s = shape()) {
    $this->lag_id = $lag_id ?? "";
  }
}

class DescribeLoaRequest {
  public ConnectionId $connection_id;
  public LoaContentType $loa_content_type;
  public ProviderName $provider_name;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'loa_content_type' => LoaContentType,
  ?'provider_name' => ProviderName,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->loa_content_type = $loa_content_type ?? "";
    $this->provider_name = $provider_name ?? "";
  }
}

class DescribeTagsRequest {
  public ResourceArnList $resource_arns;

  public function __construct(shape(
  ?'resource_arns' => ResourceArnList,
  ) $s = shape()) {
    $this->resource_arns = $resource_arns ?? [];
  }
}

class DescribeTagsResponse {
  public ResourceTagList $resource_tags;

  public function __construct(shape(
  ?'resource_tags' => ResourceTagList,
  ) $s = shape()) {
    $this->resource_tags = $resource_tags ?? [];
  }
}

class DescribeVirtualInterfacesRequest {
  public ConnectionId $connection_id;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

class DirectConnectClientException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DirectConnectGateway {
  public LongAsn $amazon_side_asn;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public DirectConnectGatewayName $direct_connect_gateway_name;
  public DirectConnectGatewayState $direct_connect_gateway_state;
  public OwnerAccount $owner_account;
  public StateChangeError $state_change_error;

  public function __construct(shape(
  ?'amazon_side_asn' => LongAsn,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'direct_connect_gateway_name' => DirectConnectGatewayName,
  ?'direct_connect_gateway_state' => DirectConnectGatewayState,
  ?'owner_account' => OwnerAccount,
  ?'state_change_error' => StateChangeError,
  ) $s = shape()) {
    $this->amazon_side_asn = $amazon_side_asn ?? 0;
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->direct_connect_gateway_name = $direct_connect_gateway_name ?? "";
    $this->direct_connect_gateway_state = $direct_connect_gateway_state ?? "";
    $this->owner_account = $owner_account ?? "";
    $this->state_change_error = $state_change_error ?? "";
  }
}

class DirectConnectGatewayAssociation {
  public RouteFilterPrefixList $allowed_prefixes_to_direct_connect_gateway;
  public AssociatedGateway $associated_gateway;
  public DirectConnectGatewayAssociationId $association_id;
  public DirectConnectGatewayAssociationState $association_state;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public OwnerAccount $direct_connect_gateway_owner_account;
  public StateChangeError $state_change_error;
  public VirtualGatewayId $virtual_gateway_id;
  public OwnerAccount $virtual_gateway_owner_account;
  public VirtualGatewayRegion $virtual_gateway_region;

  public function __construct(shape(
  ?'allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ?'associated_gateway' => AssociatedGateway,
  ?'association_id' => DirectConnectGatewayAssociationId,
  ?'association_state' => DirectConnectGatewayAssociationState,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'direct_connect_gateway_owner_account' => OwnerAccount,
  ?'state_change_error' => StateChangeError,
  ?'virtual_gateway_id' => VirtualGatewayId,
  ?'virtual_gateway_owner_account' => OwnerAccount,
  ?'virtual_gateway_region' => VirtualGatewayRegion,
  ) $s = shape()) {
    $this->allowed_prefixes_to_direct_connect_gateway = $allowed_prefixes_to_direct_connect_gateway ?? [];
    $this->associated_gateway = $associated_gateway ?? null;
    $this->association_id = $association_id ?? "";
    $this->association_state = $association_state ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->direct_connect_gateway_owner_account = $direct_connect_gateway_owner_account ?? "";
    $this->state_change_error = $state_change_error ?? "";
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
    $this->virtual_gateway_owner_account = $virtual_gateway_owner_account ?? "";
    $this->virtual_gateway_region = $virtual_gateway_region ?? "";
  }
}

type DirectConnectGatewayAssociationId = string;

type DirectConnectGatewayAssociationList = vec<DirectConnectGatewayAssociation>;

class DirectConnectGatewayAssociationProposal {
  public AssociatedGateway $associated_gateway;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public OwnerAccount $direct_connect_gateway_owner_account;
  public RouteFilterPrefixList $existing_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayAssociationProposalId $proposal_id;
  public DirectConnectGatewayAssociationProposalState $proposal_state;
  public RouteFilterPrefixList $requested_allowed_prefixes_to_direct_connect_gateway;

  public function __construct(shape(
  ?'associated_gateway' => AssociatedGateway,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'direct_connect_gateway_owner_account' => OwnerAccount,
  ?'existing_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ?'proposal_id' => DirectConnectGatewayAssociationProposalId,
  ?'proposal_state' => DirectConnectGatewayAssociationProposalState,
  ?'requested_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ) $s = shape()) {
    $this->associated_gateway = $associated_gateway ?? null;
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->direct_connect_gateway_owner_account = $direct_connect_gateway_owner_account ?? "";
    $this->existing_allowed_prefixes_to_direct_connect_gateway = $existing_allowed_prefixes_to_direct_connect_gateway ?? [];
    $this->proposal_id = $proposal_id ?? "";
    $this->proposal_state = $proposal_state ?? "";
    $this->requested_allowed_prefixes_to_direct_connect_gateway = $requested_allowed_prefixes_to_direct_connect_gateway ?? [];
  }
}

type DirectConnectGatewayAssociationProposalId = string;

type DirectConnectGatewayAssociationProposalList = vec<DirectConnectGatewayAssociationProposal>;

type DirectConnectGatewayAssociationProposalState = string;

type DirectConnectGatewayAssociationState = string;

class DirectConnectGatewayAttachment {
  public DirectConnectGatewayAttachmentState $attachment_state;
  public DirectConnectGatewayAttachmentType $attachment_type;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public StateChangeError $state_change_error;
  public VirtualInterfaceId $virtual_interface_id;
  public OwnerAccount $virtual_interface_owner_account;
  public VirtualInterfaceRegion $virtual_interface_region;

  public function __construct(shape(
  ?'attachment_state' => DirectConnectGatewayAttachmentState,
  ?'attachment_type' => DirectConnectGatewayAttachmentType,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'state_change_error' => StateChangeError,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ?'virtual_interface_owner_account' => OwnerAccount,
  ?'virtual_interface_region' => VirtualInterfaceRegion,
  ) $s = shape()) {
    $this->attachment_state = $attachment_state ?? "";
    $this->attachment_type = $attachment_type ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->state_change_error = $state_change_error ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
    $this->virtual_interface_owner_account = $virtual_interface_owner_account ?? "";
    $this->virtual_interface_region = $virtual_interface_region ?? "";
  }
}

type DirectConnectGatewayAttachmentList = vec<DirectConnectGatewayAttachment>;

type DirectConnectGatewayAttachmentState = string;

type DirectConnectGatewayAttachmentType = string;

type DirectConnectGatewayId = string;

type DirectConnectGatewayList = vec<DirectConnectGateway>;

type DirectConnectGatewayName = string;

type DirectConnectGatewayState = string;

class DirectConnectServerException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class DisassociateConnectionFromLagRequest {
  public ConnectionId $connection_id;
  public LagId $lag_id;

  public function __construct(shape(
  ?'connection_id' => ConnectionId,
  ?'lag_id' => LagId,
  ) $s = shape()) {
    $this->connection_id = $connection_id ?? "";
    $this->lag_id = $lag_id ?? "";
  }
}

class DuplicateTagKeysException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type ErrorMessage = string;

type GatewayIdToAssociate = string;

type GatewayIdentifier = string;

type GatewayType = string;

type HasLogicalRedundancy = string;

class Interconnect {
  public AwsDevice $aws_device;
  public AwsDeviceV2 $aws_device_v_2;
  public Bandwidth $bandwidth;
  public HasLogicalRedundancy $has_logical_redundancy;
  public InterconnectId $interconnect_id;
  public InterconnectName $interconnect_name;
  public InterconnectState $interconnect_state;
  public JumboFrameCapable $jumbo_frame_capable;
  public LagId $lag_id;
  public LoaIssueTime $loa_issue_time;
  public LocationCode $location;
  public ProviderName $provider_name;
  public Region $region;
  public TagList $tags;

  public function __construct(shape(
  ?'aws_device' => AwsDevice,
  ?'aws_device_v_2' => AwsDeviceV2,
  ?'bandwidth' => Bandwidth,
  ?'has_logical_redundancy' => HasLogicalRedundancy,
  ?'interconnect_id' => InterconnectId,
  ?'interconnect_name' => InterconnectName,
  ?'interconnect_state' => InterconnectState,
  ?'jumbo_frame_capable' => JumboFrameCapable,
  ?'lag_id' => LagId,
  ?'loa_issue_time' => LoaIssueTime,
  ?'location' => LocationCode,
  ?'provider_name' => ProviderName,
  ?'region' => Region,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->aws_device = $aws_device ?? "";
    $this->aws_device_v_2 = $aws_device_v_2 ?? "";
    $this->bandwidth = $bandwidth ?? "";
    $this->has_logical_redundancy = $has_logical_redundancy ?? "";
    $this->interconnect_id = $interconnect_id ?? "";
    $this->interconnect_name = $interconnect_name ?? "";
    $this->interconnect_state = $interconnect_state ?? "";
    $this->jumbo_frame_capable = $jumbo_frame_capable ?? false;
    $this->lag_id = $lag_id ?? "";
    $this->loa_issue_time = $loa_issue_time ?? 0;
    $this->location = $location ?? "";
    $this->provider_name = $provider_name ?? "";
    $this->region = $region ?? "";
    $this->tags = $tags ?? [];
  }
}

type InterconnectId = string;

type InterconnectList = vec<Interconnect>;

type InterconnectName = string;

type InterconnectState = string;

class Interconnects {
  public InterconnectList $interconnects;

  public function __construct(shape(
  ?'interconnects' => InterconnectList,
  ) $s = shape()) {
    $this->interconnects = $interconnects ?? [];
  }
}

type JumboFrameCapable = bool;

class Lag {
  public BooleanFlag $allows_hosted_connections;
  public AwsDevice $aws_device;
  public AwsDeviceV2 $aws_device_v_2;
  public ConnectionList $connections;
  public Bandwidth $connections_bandwidth;
  public HasLogicalRedundancy $has_logical_redundancy;
  public JumboFrameCapable $jumbo_frame_capable;
  public LagId $lag_id;
  public LagName $lag_name;
  public LagState $lag_state;
  public LocationCode $location;
  public Count $minimum_links;
  public Count $number_of_connections;
  public OwnerAccount $owner_account;
  public ProviderName $provider_name;
  public Region $region;
  public TagList $tags;

  public function __construct(shape(
  ?'allows_hosted_connections' => BooleanFlag,
  ?'aws_device' => AwsDevice,
  ?'aws_device_v_2' => AwsDeviceV2,
  ?'connections' => ConnectionList,
  ?'connections_bandwidth' => Bandwidth,
  ?'has_logical_redundancy' => HasLogicalRedundancy,
  ?'jumbo_frame_capable' => JumboFrameCapable,
  ?'lag_id' => LagId,
  ?'lag_name' => LagName,
  ?'lag_state' => LagState,
  ?'location' => LocationCode,
  ?'minimum_links' => Count,
  ?'number_of_connections' => Count,
  ?'owner_account' => OwnerAccount,
  ?'provider_name' => ProviderName,
  ?'region' => Region,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->allows_hosted_connections = $allows_hosted_connections ?? false;
    $this->aws_device = $aws_device ?? "";
    $this->aws_device_v_2 = $aws_device_v_2 ?? "";
    $this->connections = $connections ?? [];
    $this->connections_bandwidth = $connections_bandwidth ?? "";
    $this->has_logical_redundancy = $has_logical_redundancy ?? "";
    $this->jumbo_frame_capable = $jumbo_frame_capable ?? false;
    $this->lag_id = $lag_id ?? "";
    $this->lag_name = $lag_name ?? "";
    $this->lag_state = $lag_state ?? "";
    $this->location = $location ?? "";
    $this->minimum_links = $minimum_links ?? 0;
    $this->number_of_connections = $number_of_connections ?? 0;
    $this->owner_account = $owner_account ?? "";
    $this->provider_name = $provider_name ?? "";
    $this->region = $region ?? "";
    $this->tags = $tags ?? [];
  }
}

type LagId = string;

type LagList = vec<Lag>;

type LagName = string;

type LagState = string;

class Lags {
  public LagList $lags;

  public function __construct(shape(
  ?'lags' => LagList,
  ) $s = shape()) {
    $this->lags = $lags ?? [];
  }
}

class Loa {
  public LoaContent $loa_content;
  public LoaContentType $loa_content_type;

  public function __construct(shape(
  ?'loa_content' => LoaContent,
  ?'loa_content_type' => LoaContentType,
  ) $s = shape()) {
    $this->loa_content = $loa_content ?? "";
    $this->loa_content_type = $loa_content_type ?? "";
  }
}

type LoaContent = string;

type LoaContentType = string;

type LoaIssueTime = int;

class Location {
  public AvailablePortSpeeds $available_port_speeds;
  public ProviderList $available_providers;
  public LocationCode $location_code;
  public LocationName $location_name;
  public Region $region;

  public function __construct(shape(
  ?'available_port_speeds' => AvailablePortSpeeds,
  ?'available_providers' => ProviderList,
  ?'location_code' => LocationCode,
  ?'location_name' => LocationName,
  ?'region' => Region,
  ) $s = shape()) {
    $this->available_port_speeds = $available_port_speeds ?? [];
    $this->available_providers = $available_providers ?? [];
    $this->location_code = $location_code ?? "";
    $this->location_name = $location_name ?? "";
    $this->region = $region ?? "";
  }
}

type LocationCode = string;

type LocationList = vec<Location>;

type LocationName = string;

class Locations {
  public LocationList $locations;

  public function __construct(shape(
  ?'locations' => LocationList,
  ) $s = shape()) {
    $this->locations = $locations ?? [];
  }
}

type LongAsn = int;

type MTU = int;

type MaxResultSetSize = int;

class NewBGPPeer {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'customer_address' => CustomerAddress,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->customer_address = $customer_address ?? "";
  }
}

class NewPrivateVirtualInterface {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MTU $mtu;
  public TagList $tags;
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'customer_address' => CustomerAddress,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'mtu' => MTU,
  ?'tags' => TagList,
  ?'virtual_gateway_id' => VirtualGatewayId,
  ?'virtual_interface_name' => VirtualInterfaceName,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->mtu = $mtu ?? 0;
    $this->tags = $tags ?? [];
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
    $this->virtual_interface_name = $virtual_interface_name ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

class NewPrivateVirtualInterfaceAllocation {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public MTU $mtu;
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'customer_address' => CustomerAddress,
  ?'mtu' => MTU,
  ?'tags' => TagList,
  ?'virtual_interface_name' => VirtualInterfaceName,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->mtu = $mtu ?? 0;
    $this->tags = $tags ?? [];
    $this->virtual_interface_name = $virtual_interface_name ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

class NewPublicVirtualInterface {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public RouteFilterPrefixList $route_filter_prefixes;
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'customer_address' => CustomerAddress,
  ?'route_filter_prefixes' => RouteFilterPrefixList,
  ?'tags' => TagList,
  ?'virtual_interface_name' => VirtualInterfaceName,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->route_filter_prefixes = $route_filter_prefixes ?? [];
    $this->tags = $tags ?? [];
    $this->virtual_interface_name = $virtual_interface_name ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

class NewPublicVirtualInterfaceAllocation {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public RouteFilterPrefixList $route_filter_prefixes;
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'customer_address' => CustomerAddress,
  ?'route_filter_prefixes' => RouteFilterPrefixList,
  ?'tags' => TagList,
  ?'virtual_interface_name' => VirtualInterfaceName,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->route_filter_prefixes = $route_filter_prefixes ?? [];
    $this->tags = $tags ?? [];
    $this->virtual_interface_name = $virtual_interface_name ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

class NewTransitVirtualInterface {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MTU $mtu;
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'customer_address' => CustomerAddress,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'mtu' => MTU,
  ?'tags' => TagList,
  ?'virtual_interface_name' => VirtualInterfaceName,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->mtu = $mtu ?? 0;
    $this->tags = $tags ?? [];
    $this->virtual_interface_name = $virtual_interface_name ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

class NewTransitVirtualInterfaceAllocation {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public MTU $mtu;
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'customer_address' => CustomerAddress,
  ?'mtu' => MTU,
  ?'tags' => TagList,
  ?'virtual_interface_name' => VirtualInterfaceName,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->mtu = $mtu ?? 0;
    $this->tags = $tags ?? [];
    $this->virtual_interface_name = $virtual_interface_name ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

type OwnerAccount = string;

type PaginationToken = string;

type PartnerName = string;

type PortSpeed = string;

type ProviderList = vec<ProviderName>;

type ProviderName = string;

type Region = string;

type ResourceArn = string;

type ResourceArnList = vec<ResourceArn>;

class ResourceTag {
  public ResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

type ResourceTagList = vec<ResourceTag>;

class RouteFilterPrefix {
  public CIDR $cidr;

  public function __construct(shape(
  ?'cidr' => CIDR,
  ) $s = shape()) {
    $this->cidr = $cidr ?? "";
  }
}

type RouteFilterPrefixList = vec<RouteFilterPrefix>;

type RouterConfig = string;

type StateChangeError = string;

class Tag {
  public TagKey $key;
  public TagValue $value;

  public function __construct(shape(
  ?'key' => TagKey,
  ?'value' => TagValue,
  ) $s = shape()) {
    $this->key = $key ?? "";
    $this->value = $value ?? "";
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tags' => TagList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tags = $tags ?? [];
  }
}

class TagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type TagValue = string;

class TooManyTagsException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;

  public function __construct(shape(
  ?'resource_arn' => ResourceArn,
  ?'tag_keys' => TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->tag_keys = $tag_keys ?? [];
  }
}

class UntagResourceResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateDirectConnectGatewayAssociationRequest {
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayAssociationId $association_id;
  public RouteFilterPrefixList $remove_allowed_prefixes_to_direct_connect_gateway;

  public function __construct(shape(
  ?'add_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ?'association_id' => DirectConnectGatewayAssociationId,
  ?'remove_allowed_prefixes_to_direct_connect_gateway' => RouteFilterPrefixList,
  ) $s = shape()) {
    $this->add_allowed_prefixes_to_direct_connect_gateway = $add_allowed_prefixes_to_direct_connect_gateway ?? [];
    $this->association_id = $association_id ?? "";
    $this->remove_allowed_prefixes_to_direct_connect_gateway = $remove_allowed_prefixes_to_direct_connect_gateway ?? [];
  }
}

class UpdateDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;

  public function __construct(shape(
  ?'direct_connect_gateway_association' => DirectConnectGatewayAssociation,
  ) $s = shape()) {
    $this->direct_connect_gateway_association = $direct_connect_gateway_association ?? null;
  }
}

class UpdateLagRequest {
  public LagId $lag_id;
  public LagName $lag_name;
  public Count $minimum_links;

  public function __construct(shape(
  ?'lag_id' => LagId,
  ?'lag_name' => LagName,
  ?'minimum_links' => Count,
  ) $s = shape()) {
    $this->lag_id = $lag_id ?? "";
    $this->lag_name = $lag_name ?? "";
    $this->minimum_links = $minimum_links ?? 0;
  }
}

class UpdateVirtualInterfaceAttributesRequest {
  public MTU $mtu;
  public VirtualInterfaceId $virtual_interface_id;

  public function __construct(shape(
  ?'mtu' => MTU,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ) $s = shape()) {
    $this->mtu = $mtu ?? 0;
    $this->virtual_interface_id = $virtual_interface_id ?? "";
  }
}

type VLAN = int;

class VirtualGateway {
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualGatewayState $virtual_gateway_state;

  public function __construct(shape(
  ?'virtual_gateway_id' => VirtualGatewayId,
  ?'virtual_gateway_state' => VirtualGatewayState,
  ) $s = shape()) {
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
    $this->virtual_gateway_state = $virtual_gateway_state ?? "";
  }
}

type VirtualGatewayId = string;

type VirtualGatewayList = vec<VirtualGateway>;

type VirtualGatewayRegion = string;

type VirtualGatewayState = string;

class VirtualGateways {
  public VirtualGatewayList $virtual_gateways;

  public function __construct(shape(
  ?'virtual_gateways' => VirtualGatewayList,
  ) $s = shape()) {
    $this->virtual_gateways = $virtual_gateways ?? [];
  }
}

class VirtualInterface {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public LongAsn $amazon_side_asn;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public AwsDeviceV2 $aws_device_v_2;
  public BGPPeerList $bgp_peers;
  public ConnectionId $connection_id;
  public CustomerAddress $customer_address;
  public RouterConfig $customer_router_config;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public JumboFrameCapable $jumbo_frame_capable;
  public LocationCode $location;
  public MTU $mtu;
  public OwnerAccount $owner_account;
  public Region $region;
  public RouteFilterPrefixList $route_filter_prefixes;
  public TagList $tags;
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualInterfaceId $virtual_interface_id;
  public VirtualInterfaceName $virtual_interface_name;
  public VirtualInterfaceState $virtual_interface_state;
  public VirtualInterfaceType $virtual_interface_type;
  public VLAN $vlan;

  public function __construct(shape(
  ?'address_family' => AddressFamily,
  ?'amazon_address' => AmazonAddress,
  ?'amazon_side_asn' => LongAsn,
  ?'asn' => ASN,
  ?'auth_key' => BGPAuthKey,
  ?'aws_device_v_2' => AwsDeviceV2,
  ?'bgp_peers' => BGPPeerList,
  ?'connection_id' => ConnectionId,
  ?'customer_address' => CustomerAddress,
  ?'customer_router_config' => RouterConfig,
  ?'direct_connect_gateway_id' => DirectConnectGatewayId,
  ?'jumbo_frame_capable' => JumboFrameCapable,
  ?'location' => LocationCode,
  ?'mtu' => MTU,
  ?'owner_account' => OwnerAccount,
  ?'region' => Region,
  ?'route_filter_prefixes' => RouteFilterPrefixList,
  ?'tags' => TagList,
  ?'virtual_gateway_id' => VirtualGatewayId,
  ?'virtual_interface_id' => VirtualInterfaceId,
  ?'virtual_interface_name' => VirtualInterfaceName,
  ?'virtual_interface_state' => VirtualInterfaceState,
  ?'virtual_interface_type' => VirtualInterfaceType,
  ?'vlan' => VLAN,
  ) $s = shape()) {
    $this->address_family = $address_family ?? "";
    $this->amazon_address = $amazon_address ?? "";
    $this->amazon_side_asn = $amazon_side_asn ?? 0;
    $this->asn = $asn ?? 0;
    $this->auth_key = $auth_key ?? "";
    $this->aws_device_v_2 = $aws_device_v_2 ?? "";
    $this->bgp_peers = $bgp_peers ?? [];
    $this->connection_id = $connection_id ?? "";
    $this->customer_address = $customer_address ?? "";
    $this->customer_router_config = $customer_router_config ?? "";
    $this->direct_connect_gateway_id = $direct_connect_gateway_id ?? "";
    $this->jumbo_frame_capable = $jumbo_frame_capable ?? false;
    $this->location = $location ?? "";
    $this->mtu = $mtu ?? 0;
    $this->owner_account = $owner_account ?? "";
    $this->region = $region ?? "";
    $this->route_filter_prefixes = $route_filter_prefixes ?? [];
    $this->tags = $tags ?? [];
    $this->virtual_gateway_id = $virtual_gateway_id ?? "";
    $this->virtual_interface_id = $virtual_interface_id ?? "";
    $this->virtual_interface_name = $virtual_interface_name ?? "";
    $this->virtual_interface_state = $virtual_interface_state ?? "";
    $this->virtual_interface_type = $virtual_interface_type ?? "";
    $this->vlan = $vlan ?? 0;
  }
}

type VirtualInterfaceId = string;

type VirtualInterfaceList = vec<VirtualInterface>;

type VirtualInterfaceName = string;

type VirtualInterfaceRegion = string;

type VirtualInterfaceState = string;

type VirtualInterfaceType = string;

class VirtualInterfaces {
  public VirtualInterfaceList $virtual_interfaces;

  public function __construct(shape(
  ?'virtual_interfaces' => VirtualInterfaceList,
  ) $s = shape()) {
    $this->virtual_interfaces = $virtual_interfaces ?? [];
  }
}

