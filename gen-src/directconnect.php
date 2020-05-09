<?hh // strict
namespace slack\aws\directconnect;

interface Direct Connect {
  public function AcceptDirectConnectGatewayAssociationProposal(AcceptDirectConnectGatewayAssociationProposalRequest) Awaitable<Errors\Result<AcceptDirectConnectGatewayAssociationProposalResult>>;
  public function AllocateConnectionOnInterconnect(AllocateConnectionOnInterconnectRequest) Awaitable<Errors\Result<Connection>>;
  public function AllocateHostedConnection(AllocateHostedConnectionRequest) Awaitable<Errors\Result<Connection>>;
  public function AllocatePrivateVirtualInterface(AllocatePrivateVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function AllocatePublicVirtualInterface(AllocatePublicVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function AllocateTransitVirtualInterface(AllocateTransitVirtualInterfaceRequest) Awaitable<Errors\Result<AllocateTransitVirtualInterfaceResult>>;
  public function AssociateConnectionWithLag(AssociateConnectionWithLagRequest) Awaitable<Errors\Result<Connection>>;
  public function AssociateHostedConnection(AssociateHostedConnectionRequest) Awaitable<Errors\Result<Connection>>;
  public function AssociateVirtualInterface(AssociateVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function ConfirmConnection(ConfirmConnectionRequest) Awaitable<Errors\Result<ConfirmConnectionResponse>>;
  public function ConfirmPrivateVirtualInterface(ConfirmPrivateVirtualInterfaceRequest) Awaitable<Errors\Result<ConfirmPrivateVirtualInterfaceResponse>>;
  public function ConfirmPublicVirtualInterface(ConfirmPublicVirtualInterfaceRequest) Awaitable<Errors\Result<ConfirmPublicVirtualInterfaceResponse>>;
  public function ConfirmTransitVirtualInterface(ConfirmTransitVirtualInterfaceRequest) Awaitable<Errors\Result<ConfirmTransitVirtualInterfaceResponse>>;
  public function CreateBGPPeer(CreateBGPPeerRequest) Awaitable<Errors\Result<CreateBGPPeerResponse>>;
  public function CreateConnection(CreateConnectionRequest) Awaitable<Errors\Result<Connection>>;
  public function CreateDirectConnectGateway(CreateDirectConnectGatewayRequest) Awaitable<Errors\Result<CreateDirectConnectGatewayResult>>;
  public function CreateDirectConnectGatewayAssociation(CreateDirectConnectGatewayAssociationRequest) Awaitable<Errors\Result<CreateDirectConnectGatewayAssociationResult>>;
  public function CreateDirectConnectGatewayAssociationProposal(CreateDirectConnectGatewayAssociationProposalRequest) Awaitable<Errors\Result<CreateDirectConnectGatewayAssociationProposalResult>>;
  public function CreateInterconnect(CreateInterconnectRequest) Awaitable<Errors\Result<Interconnect>>;
  public function CreateLag(CreateLagRequest) Awaitable<Errors\Result<Lag>>;
  public function CreatePrivateVirtualInterface(CreatePrivateVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function CreatePublicVirtualInterface(CreatePublicVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function CreateTransitVirtualInterface(CreateTransitVirtualInterfaceRequest) Awaitable<Errors\Result<CreateTransitVirtualInterfaceResult>>;
  public function DeleteBGPPeer(DeleteBGPPeerRequest) Awaitable<Errors\Result<DeleteBGPPeerResponse>>;
  public function DeleteConnection(DeleteConnectionRequest) Awaitable<Errors\Result<Connection>>;
  public function DeleteDirectConnectGateway(DeleteDirectConnectGatewayRequest) Awaitable<Errors\Result<DeleteDirectConnectGatewayResult>>;
  public function DeleteDirectConnectGatewayAssociation(DeleteDirectConnectGatewayAssociationRequest) Awaitable<Errors\Result<DeleteDirectConnectGatewayAssociationResult>>;
  public function DeleteDirectConnectGatewayAssociationProposal(DeleteDirectConnectGatewayAssociationProposalRequest) Awaitable<Errors\Result<DeleteDirectConnectGatewayAssociationProposalResult>>;
  public function DeleteInterconnect(DeleteInterconnectRequest) Awaitable<Errors\Result<DeleteInterconnectResponse>>;
  public function DeleteLag(DeleteLagRequest) Awaitable<Errors\Result<Lag>>;
  public function DeleteVirtualInterface(DeleteVirtualInterfaceRequest) Awaitable<Errors\Result<DeleteVirtualInterfaceResponse>>;
  public function DescribeConnectionLoa(DescribeConnectionLoaRequest) Awaitable<Errors\Result<DescribeConnectionLoaResponse>>;
  public function DescribeConnections(DescribeConnectionsRequest) Awaitable<Errors\Result<Connections>>;
  public function DescribeConnectionsOnInterconnect(DescribeConnectionsOnInterconnectRequest) Awaitable<Errors\Result<Connections>>;
  public function DescribeDirectConnectGatewayAssociationProposals(DescribeDirectConnectGatewayAssociationProposalsRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewayAssociationProposalsResult>>;
  public function DescribeDirectConnectGatewayAssociations(DescribeDirectConnectGatewayAssociationsRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewayAssociationsResult>>;
  public function DescribeDirectConnectGatewayAttachments(DescribeDirectConnectGatewayAttachmentsRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewayAttachmentsResult>>;
  public function DescribeDirectConnectGateways(DescribeDirectConnectGatewaysRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewaysResult>>;
  public function DescribeHostedConnections(DescribeHostedConnectionsRequest) Awaitable<Errors\Result<Connections>>;
  public function DescribeInterconnectLoa(DescribeInterconnectLoaRequest) Awaitable<Errors\Result<DescribeInterconnectLoaResponse>>;
  public function DescribeInterconnects(DescribeInterconnectsRequest) Awaitable<Errors\Result<Interconnects>>;
  public function DescribeLags(DescribeLagsRequest) Awaitable<Errors\Result<Lags>>;
  public function DescribeLoa(DescribeLoaRequest) Awaitable<Errors\Result<Loa>>;
  public function DescribeLocations() Awaitable<Errors\Result<Locations>>;
  public function DescribeTags(DescribeTagsRequest) Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function DescribeVirtualGateways() Awaitable<Errors\Result<VirtualGateways>>;
  public function DescribeVirtualInterfaces(DescribeVirtualInterfacesRequest) Awaitable<Errors\Result<VirtualInterfaces>>;
  public function DisassociateConnectionFromLag(DisassociateConnectionFromLagRequest) Awaitable<Errors\Result<Connection>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateDirectConnectGatewayAssociation(UpdateDirectConnectGatewayAssociationRequest) Awaitable<Errors\Result<UpdateDirectConnectGatewayAssociationResult>>;
  public function UpdateLag(UpdateLagRequest) Awaitable<Errors\Result<Lag>>;
  public function UpdateVirtualInterfaceAttributes(UpdateVirtualInterfaceAttributesRequest) Awaitable<Errors\Result<VirtualInterface>>;
}

class ASN {
}

class AcceptDirectConnectGatewayAssociationProposalRequest {
  public OwnerAccount $associated_gateway_owner_account;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public RouteFilterPrefixList $override_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayAssociationProposalId $proposal_id;
}

class AcceptDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class AddressFamily {
}

class AllocateConnectionOnInterconnectRequest {
  public Bandwidth $bandwidth;
  public ConnectionName $connection_name;
  public InterconnectId $interconnect_id;
  public OwnerAccount $owner_account;
  public VLAN $vlan;
}

class AllocateHostedConnectionRequest {
  public Bandwidth $bandwidth;
  public ConnectionId $connection_id;
  public ConnectionName $connection_name;
  public OwnerAccount $owner_account;
  public TagList $tags;
  public VLAN $vlan;
}

class AllocatePrivateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPrivateVirtualInterfaceAllocation $new_private_virtual_interface_allocation;
  public OwnerAccount $owner_account;
}

class AllocatePublicVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPublicVirtualInterfaceAllocation $new_public_virtual_interface_allocation;
  public OwnerAccount $owner_account;
}

class AllocateTransitVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewTransitVirtualInterfaceAllocation $new_transit_virtual_interface_allocation;
  public OwnerAccount $owner_account;
}

class AllocateTransitVirtualInterfaceResult {
  public VirtualInterface $virtual_interface;
}

class AmazonAddress {
}

class AssociateConnectionWithLagRequest {
  public ConnectionId $connection_id;
  public LagId $lag_id;
}

class AssociateHostedConnectionRequest {
  public ConnectionId $connection_id;
  public ConnectionId $parent_connection_id;
}

class AssociateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public VirtualInterfaceId $virtual_interface_id;
}

class AssociatedGateway {
  public GatewayIdentifier $id;
  public OwnerAccount $owner_account;
  public Region $region;
  public GatewayType $type;
}

class AssociatedGatewayId {
}

class AvailablePortSpeeds {
}

class AwsDevice {
}

class AwsDeviceV2 {
}

class BGPAuthKey {
}

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
}

class BGPPeerId {
}

class BGPPeerList {
}

class BGPPeerState {
}

class BGPStatus {
}

class Bandwidth {
}

class BooleanFlag {
}

class CIDR {
}

class ConfirmConnectionRequest {
  public ConnectionId $connection_id;
}

class ConfirmConnectionResponse {
  public ConnectionState $connection_state;
}

class ConfirmPrivateVirtualInterfaceRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualInterfaceId $virtual_interface_id;
}

class ConfirmPrivateVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
}

class ConfirmPublicVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;
}

class ConfirmPublicVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
}

class ConfirmTransitVirtualInterfaceRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualInterfaceId $virtual_interface_id;
}

class ConfirmTransitVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
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
}

class ConnectionId {
}

class ConnectionList {
}

class ConnectionName {
}

class ConnectionState {
}

class Connections {
  public ConnectionList $connections;
}

class Count {
}

class CreateBGPPeerRequest {
  public NewBGPPeer $new_bgp_peer;
  public VirtualInterfaceId $virtual_interface_id;
}

class CreateBGPPeerResponse {
  public VirtualInterface $virtual_interface;
}

class CreateConnectionRequest {
  public Bandwidth $bandwidth;
  public ConnectionName $connection_name;
  public LagId $lag_id;
  public LocationCode $location;
  public ProviderName $provider_name;
  public TagList $tags;
}

class CreateDirectConnectGatewayAssociationProposalRequest {
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public OwnerAccount $direct_connect_gateway_owner_account;
  public GatewayIdToAssociate $gateway_id;
  public RouteFilterPrefixList $remove_allowed_prefixes_to_direct_connect_gateway;
}

class CreateDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociationProposal $direct_connect_gateway_association_proposal;
}

class CreateDirectConnectGatewayAssociationRequest {
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public GatewayIdToAssociate $gateway_id;
  public VirtualGatewayId $virtual_gateway_id;
}

class CreateDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class CreateDirectConnectGatewayRequest {
  public LongAsn $amazon_side_asn;
  public DirectConnectGatewayName $direct_connect_gateway_name;
}

class CreateDirectConnectGatewayResult {
  public DirectConnectGateway $direct_connect_gateway;
}

class CreateInterconnectRequest {
  public Bandwidth $bandwidth;
  public InterconnectName $interconnect_name;
  public LagId $lag_id;
  public LocationCode $location;
  public ProviderName $provider_name;
  public TagList $tags;
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
}

class CreatePrivateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPrivateVirtualInterface $new_private_virtual_interface;
}

class CreatePublicVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPublicVirtualInterface $new_public_virtual_interface;
}

class CreateTransitVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewTransitVirtualInterface $new_transit_virtual_interface;
}

class CreateTransitVirtualInterfaceResult {
  public VirtualInterface $virtual_interface;
}

class CustomerAddress {
}

class DeleteBGPPeerRequest {
  public ASN $asn;
  public BGPPeerId $bgp_peer_id;
  public CustomerAddress $customer_address;
  public VirtualInterfaceId $virtual_interface_id;
}

class DeleteBGPPeerResponse {
  public VirtualInterface $virtual_interface;
}

class DeleteConnectionRequest {
  public ConnectionId $connection_id;
}

class DeleteDirectConnectGatewayAssociationProposalRequest {
  public DirectConnectGatewayAssociationProposalId $proposal_id;
}

class DeleteDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociationProposal $direct_connect_gateway_association_proposal;
}

class DeleteDirectConnectGatewayAssociationRequest {
  public DirectConnectGatewayAssociationId $association_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualGatewayId $virtual_gateway_id;
}

class DeleteDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class DeleteDirectConnectGatewayRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
}

class DeleteDirectConnectGatewayResult {
  public DirectConnectGateway $direct_connect_gateway;
}

class DeleteInterconnectRequest {
  public InterconnectId $interconnect_id;
}

class DeleteInterconnectResponse {
  public InterconnectState $interconnect_state;
}

class DeleteLagRequest {
  public LagId $lag_id;
}

class DeleteVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;
}

class DeleteVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
}

class DescribeConnectionLoaRequest {
  public ConnectionId $connection_id;
  public LoaContentType $loa_content_type;
  public ProviderName $provider_name;
}

class DescribeConnectionLoaResponse {
  public Loa $loa;
}

class DescribeConnectionsOnInterconnectRequest {
  public InterconnectId $interconnect_id;
}

class DescribeConnectionsRequest {
  public ConnectionId $connection_id;
}

class DescribeDirectConnectGatewayAssociationProposalsRequest {
  public AssociatedGatewayId $associated_gateway_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
  public DirectConnectGatewayAssociationProposalId $proposal_id;
}

class DescribeDirectConnectGatewayAssociationProposalsResult {
  public DirectConnectGatewayAssociationProposalList $direct_connect_gateway_association_proposals;
  public PaginationToken $next_token;
}

class DescribeDirectConnectGatewayAssociationsRequest {
  public AssociatedGatewayId $associated_gateway_id;
  public DirectConnectGatewayAssociationId $association_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
  public VirtualGatewayId $virtual_gateway_id;
}

class DescribeDirectConnectGatewayAssociationsResult {
  public DirectConnectGatewayAssociationList $direct_connect_gateway_associations;
  public PaginationToken $next_token;
}

class DescribeDirectConnectGatewayAttachmentsRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
  public VirtualInterfaceId $virtual_interface_id;
}

class DescribeDirectConnectGatewayAttachmentsResult {
  public DirectConnectGatewayAttachmentList $direct_connect_gateway_attachments;
  public PaginationToken $next_token;
}

class DescribeDirectConnectGatewaysRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
}

class DescribeDirectConnectGatewaysResult {
  public DirectConnectGatewayList $direct_connect_gateways;
  public PaginationToken $next_token;
}

class DescribeHostedConnectionsRequest {
  public ConnectionId $connection_id;
}

class DescribeInterconnectLoaRequest {
  public InterconnectId $interconnect_id;
  public LoaContentType $loa_content_type;
  public ProviderName $provider_name;
}

class DescribeInterconnectLoaResponse {
  public Loa $loa;
}

class DescribeInterconnectsRequest {
  public InterconnectId $interconnect_id;
}

class DescribeLagsRequest {
  public LagId $lag_id;
}

class DescribeLoaRequest {
  public ConnectionId $connection_id;
  public LoaContentType $loa_content_type;
  public ProviderName $provider_name;
}

class DescribeTagsRequest {
  public ResourceArnList $resource_arns;
}

class DescribeTagsResponse {
  public ResourceTagList $resource_tags;
}

class DescribeVirtualInterfacesRequest {
  public ConnectionId $connection_id;
  public VirtualInterfaceId $virtual_interface_id;
}

class DirectConnectClientException {
  public ErrorMessage $message;
}

class DirectConnectGateway {
  public LongAsn $amazon_side_asn;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public DirectConnectGatewayName $direct_connect_gateway_name;
  public DirectConnectGatewayState $direct_connect_gateway_state;
  public OwnerAccount $owner_account;
  public StateChangeError $state_change_error;
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
}

class DirectConnectGatewayAssociationId {
}

class DirectConnectGatewayAssociationList {
}

class DirectConnectGatewayAssociationProposal {
  public AssociatedGateway $associated_gateway;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public OwnerAccount $direct_connect_gateway_owner_account;
  public RouteFilterPrefixList $existing_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayAssociationProposalId $proposal_id;
  public DirectConnectGatewayAssociationProposalState $proposal_state;
  public RouteFilterPrefixList $requested_allowed_prefixes_to_direct_connect_gateway;
}

class DirectConnectGatewayAssociationProposalId {
}

class DirectConnectGatewayAssociationProposalList {
}

class DirectConnectGatewayAssociationProposalState {
}

class DirectConnectGatewayAssociationState {
}

class DirectConnectGatewayAttachment {
  public DirectConnectGatewayAttachmentState $attachment_state;
  public DirectConnectGatewayAttachmentType $attachment_type;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public StateChangeError $state_change_error;
  public VirtualInterfaceId $virtual_interface_id;
  public OwnerAccount $virtual_interface_owner_account;
  public VirtualInterfaceRegion $virtual_interface_region;
}

class DirectConnectGatewayAttachmentList {
}

class DirectConnectGatewayAttachmentState {
}

class DirectConnectGatewayAttachmentType {
}

class DirectConnectGatewayId {
}

class DirectConnectGatewayList {
}

class DirectConnectGatewayName {
}

class DirectConnectGatewayState {
}

class DirectConnectServerException {
  public ErrorMessage $message;
}

class DisassociateConnectionFromLagRequest {
  public ConnectionId $connection_id;
  public LagId $lag_id;
}

class DuplicateTagKeysException {
}

class ErrorMessage {
}

class GatewayIdToAssociate {
}

class GatewayIdentifier {
}

class GatewayType {
}

class HasLogicalRedundancy {
}

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
}

class InterconnectId {
}

class InterconnectList {
}

class InterconnectName {
}

class InterconnectState {
}

class Interconnects {
  public InterconnectList $interconnects;
}

class JumboFrameCapable {
}

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
}

class LagId {
}

class LagList {
}

class LagName {
}

class LagState {
}

class Lags {
  public LagList $lags;
}

class Loa {
  public LoaContent $loa_content;
  public LoaContentType $loa_content_type;
}

class LoaContent {
}

class LoaContentType {
}

class LoaIssueTime {
}

class Location {
  public AvailablePortSpeeds $available_port_speeds;
  public ProviderList $available_providers;
  public LocationCode $location_code;
  public LocationName $location_name;
  public Region $region;
}

class LocationCode {
}

class LocationList {
}

class LocationName {
}

class Locations {
  public LocationList $locations;
}

class LongAsn {
}

class MTU {
}

class MaxResultSetSize {
}

class NewBGPPeer {
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
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
}

class OwnerAccount {
}

class PaginationToken {
}

class PartnerName {
}

class PortSpeed {
}

class ProviderList {
}

class ProviderName {
}

class Region {
}

class ResourceArn {
}

class ResourceArnList {
}

class ResourceTag {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class ResourceTagList {
}

class RouteFilterPrefix {
  public CIDR $cidr;
}

class RouteFilterPrefixList {
}

class RouterConfig {
}

class StateChangeError {
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
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class TooManyTagsException {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateDirectConnectGatewayAssociationRequest {
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayAssociationId $association_id;
  public RouteFilterPrefixList $remove_allowed_prefixes_to_direct_connect_gateway;
}

class UpdateDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class UpdateLagRequest {
  public LagId $lag_id;
  public LagName $lag_name;
  public Count $minimum_links;
}

class UpdateVirtualInterfaceAttributesRequest {
  public MTU $mtu;
  public VirtualInterfaceId $virtual_interface_id;
}

class VLAN {
}

class VirtualGateway {
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualGatewayState $virtual_gateway_state;
}

class VirtualGatewayId {
}

class VirtualGatewayList {
}

class VirtualGatewayRegion {
}

class VirtualGatewayState {
}

class VirtualGateways {
  public VirtualGatewayList $virtual_gateways;
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
}

class VirtualInterfaceId {
}

class VirtualInterfaceList {
}

class VirtualInterfaceName {
}

class VirtualInterfaceRegion {
}

class VirtualInterfaceState {
}

class VirtualInterfaceType {
}

class VirtualInterfaces {
  public VirtualInterfaceList $virtual_interfaces;
}

