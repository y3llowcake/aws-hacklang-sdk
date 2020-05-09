<?hh // strict
namespace slack\aws\directconnect;

interface Direct Connect {
  public function DescribeInterconnects(DescribeInterconnectsRequest) Awaitable<Errors\Result<Interconnects>>;
  public function AssociateVirtualInterface(AssociateVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function CreateLag(CreateLagRequest) Awaitable<Errors\Result<Lag>>;
  public function AssociateHostedConnection(AssociateHostedConnectionRequest) Awaitable<Errors\Result<Connection>>;
  public function CreateBGPPeer(CreateBGPPeerRequest) Awaitable<Errors\Result<CreateBGPPeerResponse>>;
  public function DeleteDirectConnectGatewayAssociation(DeleteDirectConnectGatewayAssociationRequest) Awaitable<Errors\Result<DeleteDirectConnectGatewayAssociationResult>>;
  public function DeleteVirtualInterface(DeleteVirtualInterfaceRequest) Awaitable<Errors\Result<DeleteVirtualInterfaceResponse>>;
  public function DescribeLags(DescribeLagsRequest) Awaitable<Errors\Result<Lags>>;
  public function DescribeInterconnectLoa(DescribeInterconnectLoaRequest) Awaitable<Errors\Result<DescribeInterconnectLoaResponse>>;
  public function DescribeVirtualInterfaces(DescribeVirtualInterfacesRequest) Awaitable<Errors\Result<VirtualInterfaces>>;
  public function AssociateConnectionWithLag(AssociateConnectionWithLagRequest) Awaitable<Errors\Result<Connection>>;
  public function CreateDirectConnectGatewayAssociationProposal(CreateDirectConnectGatewayAssociationProposalRequest) Awaitable<Errors\Result<CreateDirectConnectGatewayAssociationProposalResult>>;
  public function ConfirmPrivateVirtualInterface(ConfirmPrivateVirtualInterfaceRequest) Awaitable<Errors\Result<ConfirmPrivateVirtualInterfaceResponse>>;
  public function CreateDirectConnectGateway(CreateDirectConnectGatewayRequest) Awaitable<Errors\Result<CreateDirectConnectGatewayResult>>;
  public function DeleteDirectConnectGatewayAssociationProposal(DeleteDirectConnectGatewayAssociationProposalRequest) Awaitable<Errors\Result<DeleteDirectConnectGatewayAssociationProposalResult>>;
  public function DescribeHostedConnections(DescribeHostedConnectionsRequest) Awaitable<Errors\Result<Connections>>;
  public function AcceptDirectConnectGatewayAssociationProposal(AcceptDirectConnectGatewayAssociationProposalRequest) Awaitable<Errors\Result<AcceptDirectConnectGatewayAssociationProposalResult>>;
  public function ConfirmConnection(ConfirmConnectionRequest) Awaitable<Errors\Result<ConfirmConnectionResponse>>;
  public function DescribeLoa(DescribeLoaRequest) Awaitable<Errors\Result<Loa>>;
  public function CreatePrivateVirtualInterface(CreatePrivateVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UpdateLag(UpdateLagRequest) Awaitable<Errors\Result<Lag>>;
  public function CreateDirectConnectGatewayAssociation(CreateDirectConnectGatewayAssociationRequest) Awaitable<Errors\Result<CreateDirectConnectGatewayAssociationResult>>;
  public function DescribeConnectionsOnInterconnect(DescribeConnectionsOnInterconnectRequest) Awaitable<Errors\Result<Connections>>;
  public function AllocatePrivateVirtualInterface(AllocatePrivateVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function DeleteConnection(DeleteConnectionRequest) Awaitable<Errors\Result<Connection>>;
  public function DescribeDirectConnectGatewayAssociations(DescribeDirectConnectGatewayAssociationsRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewayAssociationsResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function CreateInterconnect(CreateInterconnectRequest) Awaitable<Errors\Result<Interconnect>>;
  public function DescribeConnectionLoa(DescribeConnectionLoaRequest) Awaitable<Errors\Result<DescribeConnectionLoaResponse>>;
  public function DeleteBGPPeer(DeleteBGPPeerRequest) Awaitable<Errors\Result<DeleteBGPPeerResponse>>;
  public function DescribeLocations() Awaitable<Errors\Result<Locations>>;
  public function ConfirmPublicVirtualInterface(ConfirmPublicVirtualInterfaceRequest) Awaitable<Errors\Result<ConfirmPublicVirtualInterfaceResponse>>;
  public function ConfirmTransitVirtualInterface(ConfirmTransitVirtualInterfaceRequest) Awaitable<Errors\Result<ConfirmTransitVirtualInterfaceResponse>>;
  public function AllocateHostedConnection(AllocateHostedConnectionRequest) Awaitable<Errors\Result<Connection>>;
  public function AllocateTransitVirtualInterface(AllocateTransitVirtualInterfaceRequest) Awaitable<Errors\Result<AllocateTransitVirtualInterfaceResult>>;
  public function DisassociateConnectionFromLag(DisassociateConnectionFromLagRequest) Awaitable<Errors\Result<Connection>>;
  public function UpdateDirectConnectGatewayAssociation(UpdateDirectConnectGatewayAssociationRequest) Awaitable<Errors\Result<UpdateDirectConnectGatewayAssociationResult>>;
  public function DeleteDirectConnectGateway(DeleteDirectConnectGatewayRequest) Awaitable<Errors\Result<DeleteDirectConnectGatewayResult>>;
  public function DeleteInterconnect(DeleteInterconnectRequest) Awaitable<Errors\Result<DeleteInterconnectResponse>>;
  public function DescribeDirectConnectGateways(DescribeDirectConnectGatewaysRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewaysResult>>;
  public function DeleteLag(DeleteLagRequest) Awaitable<Errors\Result<Lag>>;
  public function DescribeConnections(DescribeConnectionsRequest) Awaitable<Errors\Result<Connections>>;
  public function DescribeVirtualGateways() Awaitable<Errors\Result<VirtualGateways>>;
  public function CreatePublicVirtualInterface(CreatePublicVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function DescribeDirectConnectGatewayAttachments(DescribeDirectConnectGatewayAttachmentsRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewayAttachmentsResult>>;
  public function DescribeTags(DescribeTagsRequest) Awaitable<Errors\Result<DescribeTagsResponse>>;
  public function AllocateConnectionOnInterconnect(AllocateConnectionOnInterconnectRequest) Awaitable<Errors\Result<Connection>>;
  public function CreateTransitVirtualInterface(CreateTransitVirtualInterfaceRequest) Awaitable<Errors\Result<CreateTransitVirtualInterfaceResult>>;
  public function UpdateVirtualInterfaceAttributes(UpdateVirtualInterfaceAttributesRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function DescribeDirectConnectGatewayAssociationProposals(DescribeDirectConnectGatewayAssociationProposalsRequest) Awaitable<Errors\Result<DescribeDirectConnectGatewayAssociationProposalsResult>>;
  public function AllocatePublicVirtualInterface(AllocatePublicVirtualInterfaceRequest) Awaitable<Errors\Result<VirtualInterface>>;
  public function CreateConnection(CreateConnectionRequest) Awaitable<Errors\Result<Connection>>;
}

class AllocateConnectionOnInterconnectRequest {
  public Bandwidth $bandwidth;
  public ConnectionName $connection_name;
  public OwnerAccount $owner_account;
  public InterconnectId $interconnect_id;
  public VLAN $vlan;
}

class CIDR {
}

class DescribeDirectConnectGatewaysRequest {
  public PaginationToken $next_token;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
}

class DescribeTagsRequest {
  public ResourceArnList $resource_arns;
}

class DirectConnectGatewayAssociationList {
}

class TagValue {
}

class VirtualGatewayRegion {
}

class ConfirmPrivateVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;
  public VirtualGatewayId $virtual_gateway_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
}

class DescribeInterconnectsRequest {
  public InterconnectId $interconnect_id;
}

class DirectConnectClientException {
  public ErrorMessage $message;
}

class PartnerName {
}

class AllocatePublicVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public OwnerAccount $owner_account;
  public NewPublicVirtualInterfaceAllocation $new_public_virtual_interface_allocation;
}

class BGPPeerState {
}

class BooleanFlag {
}

class CreateDirectConnectGatewayAssociationRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public GatewayIdToAssociate $gateway_id;
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public VirtualGatewayId $virtual_gateway_id;
}

class CreateDirectConnectGatewayResult {
  public DirectConnectGateway $direct_connect_gateway;
}

class DescribeDirectConnectGatewayAssociationsResult {
  public DirectConnectGatewayAssociationList $direct_connect_gateway_associations;
  public PaginationToken $next_token;
}

class DescribeInterconnectLoaResponse {
  public Loa $loa;
}

class RouterConfig {
}

class ConnectionState {
}

class Connections {
  public ConnectionList $connections;
}

class VirtualInterfaces {
  public VirtualInterfaceList $virtual_interfaces;
}

class ConfirmConnectionRequest {
  public ConnectionId $connection_id;
}

class NewPrivateVirtualInterfaceAllocation {
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;
  public ASN $asn;
  public AddressFamily $address_family;
  public MTU $mtu;
  public BGPAuthKey $auth_key;
  public AmazonAddress $amazon_address;
  public CustomerAddress $customer_address;
}

class NewTransitVirtualInterface {
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;
  public MTU $mtu;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public AddressFamily $address_family;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public ASN $asn;
  public AmazonAddress $amazon_address;
  public TagList $tags;
}

class RouteFilterPrefix {
  public CIDR $cidr;
}

class TooManyTagsException {
}

class AssociateConnectionWithLagRequest {
  public ConnectionId $connection_id;
  public LagId $lag_id;
}

class BGPPeer {
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public BGPPeerId $bgp_peer_id;
  public AddressFamily $address_family;
  public AmazonAddress $amazon_address;
  public BGPPeerState $bgp_peer_state;
  public BGPStatus $bgp_status;
  public AwsDeviceV2 $aws_device_v_2;
}

class DeleteDirectConnectGatewayAssociationProposalRequest {
  public DirectConnectGatewayAssociationProposalId $proposal_id;
}

class DescribeDirectConnectGatewayAttachmentsResult {
  public DirectConnectGatewayAttachmentList $direct_connect_gateway_attachments;
  public PaginationToken $next_token;
}

class LagState {
}

class ResourceTag {
  public TagList $tags;
  public ResourceArn $resource_arn;
}

class CreateDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociationProposal $direct_connect_gateway_association_proposal;
}

class DescribeConnectionsRequest {
  public ConnectionId $connection_id;
}

class DescribeDirectConnectGatewayAssociationProposalsRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public DirectConnectGatewayAssociationProposalId $proposal_id;
  public AssociatedGatewayId $associated_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
}

class DirectConnectGateway {
  public OwnerAccount $owner_account;
  public DirectConnectGatewayState $direct_connect_gateway_state;
  public StateChangeError $state_change_error;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public DirectConnectGatewayName $direct_connect_gateway_name;
  public LongAsn $amazon_side_asn;
}

class DirectConnectGatewayName {
}

class JumboFrameCapable {
}

class ProviderList {
}

class VirtualInterfaceList {
}

class BGPPeerList {
}

class LagId {
}

class ResourceArn {
}

class UpdateDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class VirtualGatewayState {
}

class VirtualInterfaceId {
}

class AcceptDirectConnectGatewayAssociationProposalRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public DirectConnectGatewayAssociationProposalId $proposal_id;
  public OwnerAccount $associated_gateway_owner_account;
  public RouteFilterPrefixList $override_allowed_prefixes_to_direct_connect_gateway;
}

class AcceptDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class AllocateTransitVirtualInterfaceResult {
  public VirtualInterface $virtual_interface;
}

class AmazonAddress {
}

class AwsDevice {
}

class LocationName {
}

class TagKey {
}

class VLAN {
}

class VirtualInterface {
  public MTU $mtu;
  public JumboFrameCapable $jumbo_frame_capable;
  public TagList $tags;
  public AmazonAddress $amazon_address;
  public VirtualGatewayId $virtual_gateway_id;
  public RouteFilterPrefixList $route_filter_prefixes;
  public BGPPeerList $bgp_peers;
  public Region $region;
  public RouterConfig $customer_router_config;
  public AwsDeviceV2 $aws_device_v_2;
  public OwnerAccount $owner_account;
  public LocationCode $location;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;
  public CustomerAddress $customer_address;
  public AddressFamily $address_family;
  public VirtualInterfaceState $virtual_interface_state;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualInterfaceId $virtual_interface_id;
  public ConnectionId $connection_id;
  public VirtualInterfaceType $virtual_interface_type;
  public ASN $asn;
  public LongAsn $amazon_side_asn;
  public BGPAuthKey $auth_key;
}

class DeleteVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
}

class InterconnectList {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class AssociatedGatewayId {
}

class AvailablePortSpeeds {
}

class CreateBGPPeerResponse {
  public VirtualInterface $virtual_interface;
}

class DeleteInterconnectResponse {
  public InterconnectState $interconnect_state;
}

class DirectConnectGatewayId {
}

class NewPublicVirtualInterface {
  public CustomerAddress $customer_address;
  public RouteFilterPrefixList $route_filter_prefixes;
  public VLAN $vlan;
  public BGPAuthKey $auth_key;
  public AmazonAddress $amazon_address;
  public AddressFamily $address_family;
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public ASN $asn;
}

class NewTransitVirtualInterfaceAllocation {
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public CustomerAddress $customer_address;
  public AddressFamily $address_family;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;
  public MTU $mtu;
  public AmazonAddress $amazon_address;
  public TagList $tags;
}

class VirtualGateway {
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualGatewayState $virtual_gateway_state;
}

class Locations {
  public LocationList $locations;
}

class MTU {
}

class NewBGPPeer {
  public AmazonAddress $amazon_address;
  public CustomerAddress $customer_address;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public AddressFamily $address_family;
}

class TagKeyList {
}

class DescribeHostedConnectionsRequest {
  public ConnectionId $connection_id;
}

class DuplicateTagKeysException {
}

class Region {
}

class AwsDeviceV2 {
}

class ConfirmTransitVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
}

class ConnectionName {
}

class Count {
}

class CreateTransitVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewTransitVirtualInterface $new_transit_virtual_interface;
}

class DeleteDirectConnectGatewayRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
}

class DescribeDirectConnectGatewayAttachmentsRequest {
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public VirtualInterfaceId $virtual_interface_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
}

class DirectConnectGatewayAssociationId {
}

class GatewayIdentifier {
}

class OwnerAccount {
}

class TagResourceResponse {
}

class VirtualGatewayId {
}

class CreateBGPPeerRequest {
  public VirtualInterfaceId $virtual_interface_id;
  public NewBGPPeer $new_bgp_peer;
}

class DescribeVirtualInterfacesRequest {
  public ConnectionId $connection_id;
  public VirtualInterfaceId $virtual_interface_id;
}

class Interconnect {
  public LoaIssueTime $loa_issue_time;
  public LagId $lag_id;
  public HasLogicalRedundancy $has_logical_redundancy;
  public TagList $tags;
  public ProviderName $provider_name;
  public InterconnectId $interconnect_id;
  public Region $region;
  public LocationCode $location;
  public Bandwidth $bandwidth;
  public AwsDevice $aws_device;
  public JumboFrameCapable $jumbo_frame_capable;
  public InterconnectName $interconnect_name;
  public InterconnectState $interconnect_state;
  public AwsDeviceV2 $aws_device_v_2;
}

class Interconnects {
  public InterconnectList $interconnects;
}

class AddressFamily {
}

class CreateLagRequest {
  public TagList $child_connection_tags;
  public ProviderName $provider_name;
  public Count $number_of_connections;
  public LocationCode $location;
  public Bandwidth $connections_bandwidth;
  public LagName $lag_name;
  public ConnectionId $connection_id;
  public TagList $tags;
}

class DescribeDirectConnectGatewayAssociationProposalsResult {
  public PaginationToken $next_token;
  public DirectConnectGatewayAssociationProposalList $direct_connect_gateway_association_proposals;
}

class UpdateDirectConnectGatewayAssociationRequest {
  public DirectConnectGatewayAssociationId $association_id;
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
  public RouteFilterPrefixList $remove_allowed_prefixes_to_direct_connect_gateway;
}

class AssociateHostedConnectionRequest {
  public ConnectionId $connection_id;
  public ConnectionId $parent_connection_id;
}

class ConfirmPrivateVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
}

class ConfirmPublicVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;
}

class CreateDirectConnectGatewayAssociationProposalRequest {
  public RouteFilterPrefixList $remove_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public OwnerAccount $direct_connect_gateway_owner_account;
  public GatewayIdToAssociate $gateway_id;
  public RouteFilterPrefixList $add_allowed_prefixes_to_direct_connect_gateway;
}

class CreateTransitVirtualInterfaceResult {
  public VirtualInterface $virtual_interface;
}

class DeleteDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class DescribeLagsRequest {
  public LagId $lag_id;
}

class NewPublicVirtualInterfaceAllocation {
  public AmazonAddress $amazon_address;
  public CustomerAddress $customer_address;
  public TagList $tags;
  public ASN $asn;
  public BGPAuthKey $auth_key;
  public AddressFamily $address_family;
  public RouteFilterPrefixList $route_filter_prefixes;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;
}

class StateChangeError {
}

class VirtualInterfaceName {
}

class ASN {
}

class AllocatePrivateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public OwnerAccount $owner_account;
  public NewPrivateVirtualInterfaceAllocation $new_private_virtual_interface_allocation;
}

class CreateInterconnectRequest {
  public LagId $lag_id;
  public TagList $tags;
  public ProviderName $provider_name;
  public InterconnectName $interconnect_name;
  public Bandwidth $bandwidth;
  public LocationCode $location;
}

class DeleteBGPPeerResponse {
  public VirtualInterface $virtual_interface;
}

class DirectConnectGatewayAssociationProposalList {
}

class DirectConnectGatewayAttachmentType {
}

class Lag {
  public OwnerAccount $owner_account;
  public Region $region;
  public Count $minimum_links;
  public AwsDevice $aws_device;
  public TagList $tags;
  public AwsDeviceV2 $aws_device_v_2;
  public ConnectionList $connections;
  public BooleanFlag $allows_hosted_connections;
  public HasLogicalRedundancy $has_logical_redundancy;
  public ProviderName $provider_name;
  public Bandwidth $connections_bandwidth;
  public LagId $lag_id;
  public LagName $lag_name;
  public LagState $lag_state;
  public LocationCode $location;
  public JumboFrameCapable $jumbo_frame_capable;
  public Count $number_of_connections;
}

class UntagResourceResponse {
}

class CreateConnectionRequest {
  public ConnectionName $connection_name;
  public LagId $lag_id;
  public TagList $tags;
  public ProviderName $provider_name;
  public LocationCode $location;
  public Bandwidth $bandwidth;
}

class CreateDirectConnectGatewayRequest {
  public DirectConnectGatewayName $direct_connect_gateway_name;
  public LongAsn $amazon_side_asn;
}

class DeleteDirectConnectGatewayAssociationProposalResult {
  public DirectConnectGatewayAssociationProposal $direct_connect_gateway_association_proposal;
}

class DescribeConnectionsOnInterconnectRequest {
  public InterconnectId $interconnect_id;
}

class DirectConnectGatewayAttachment {
  public VirtualInterfaceId $virtual_interface_id;
  public VirtualInterfaceRegion $virtual_interface_region;
  public OwnerAccount $virtual_interface_owner_account;
  public DirectConnectGatewayAttachmentState $attachment_state;
  public DirectConnectGatewayAttachmentType $attachment_type;
  public StateChangeError $state_change_error;
  public DirectConnectGatewayId $direct_connect_gateway_id;
}

class DirectConnectGatewayState {
}

class LocationList {
}

class UpdateVirtualInterfaceAttributesRequest {
  public VirtualInterfaceId $virtual_interface_id;
  public MTU $mtu;
}

class BGPStatus {
}

class Bandwidth {
}

class CustomerAddress {
}

class DeleteBGPPeerRequest {
  public VirtualInterfaceId $virtual_interface_id;
  public ASN $asn;
  public CustomerAddress $customer_address;
  public BGPPeerId $bgp_peer_id;
}

class DirectConnectGatewayList {
}

class LagName {
}

class PaginationToken {
}

class CreateDirectConnectGatewayAssociationResult {
  public DirectConnectGatewayAssociation $direct_connect_gateway_association;
}

class DisassociateConnectionFromLagRequest {
  public ConnectionId $connection_id;
  public LagId $lag_id;
}

class LongAsn {
}

class ProviderName {
}

class Connection {
  public ConnectionName $connection_name;
  public Bandwidth $bandwidth;
  public HasLogicalRedundancy $has_logical_redundancy;
  public AwsDeviceV2 $aws_device_v_2;
  public TagList $tags;
  public OwnerAccount $owner_account;
  public ConnectionId $connection_id;
  public VLAN $vlan;
  public AwsDevice $aws_device;
  public ConnectionState $connection_state;
  public LocationCode $location;
  public JumboFrameCapable $jumbo_frame_capable;
  public ProviderName $provider_name;
  public Region $region;
  public PartnerName $partner_name;
  public LoaIssueTime $loa_issue_time;
  public LagId $lag_id;
}

class ConnectionId {
}

class DeleteLagRequest {
  public LagId $lag_id;
}

class DescribeLoaRequest {
  public ConnectionId $connection_id;
  public ProviderName $provider_name;
  public LoaContentType $loa_content_type;
}

class InterconnectId {
}

class InterconnectName {
}

class LoaContentType {
}

class MaxResultSetSize {
}

class TagList {
}

class DeleteConnectionRequest {
  public ConnectionId $connection_id;
}

class ErrorMessage {
}

class LoaIssueTime {
}

class AllocateHostedConnectionRequest {
  public ConnectionName $connection_name;
  public VLAN $vlan;
  public TagList $tags;
  public ConnectionId $connection_id;
  public OwnerAccount $owner_account;
  public Bandwidth $bandwidth;
}

class ConfirmPublicVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
}

class LocationCode {
}

class PortSpeed {
}

class AllocateTransitVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public OwnerAccount $owner_account;
  public NewTransitVirtualInterfaceAllocation $new_transit_virtual_interface_allocation;
}

class AssociateVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;
  public ConnectionId $connection_id;
}

class ConfirmTransitVirtualInterfaceResponse {
  public VirtualInterfaceState $virtual_interface_state;
}

class CreatePrivateVirtualInterfaceRequest {
  public ConnectionId $connection_id;
  public NewPrivateVirtualInterface $new_private_virtual_interface;
}

class DescribeDirectConnectGatewayAssociationsRequest {
  public DirectConnectGatewayAssociationId $association_id;
  public AssociatedGatewayId $associated_gateway_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public MaxResultSetSize $max_results;
  public PaginationToken $next_token;
  public VirtualGatewayId $virtual_gateway_id;
}

class DescribeDirectConnectGatewaysResult {
  public DirectConnectGatewayList $direct_connect_gateways;
  public PaginationToken $next_token;
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagList $tags;
}

class BGPPeerId {
}

class DeleteVirtualInterfaceRequest {
  public VirtualInterfaceId $virtual_interface_id;
}

class DirectConnectGatewayAssociationProposalId {
}

class DirectConnectGatewayAttachmentState {
}

class Loa {
  public LoaContentType $loa_content_type;
  public LoaContent $loa_content;
}

class AssociatedGateway {
  public GatewayIdentifier $id;
  public GatewayType $type;
  public OwnerAccount $owner_account;
  public Region $region;
}

class DeleteInterconnectRequest {
  public InterconnectId $interconnect_id;
}

class VirtualInterfaceRegion {
}

class VirtualInterfaceState {
}

class BGPAuthKey {
}

class CreatePublicVirtualInterfaceRequest {
  public NewPublicVirtualInterface $new_public_virtual_interface;
  public ConnectionId $connection_id;
}

class DescribeConnectionLoaRequest {
  public ConnectionId $connection_id;
  public ProviderName $provider_name;
  public LoaContentType $loa_content_type;
}

class GatewayIdToAssociate {
}

class GatewayType {
}

class InterconnectState {
}

class Lags {
  public LagList $lags;
}

class ResourceArnList {
}

class RouteFilterPrefixList {
}

class ConnectionList {
}

class DirectConnectGatewayAssociationProposalState {
}

class LagList {
}

class DeleteDirectConnectGatewayAssociationRequest {
  public VirtualGatewayId $virtual_gateway_id;
  public DirectConnectGatewayAssociationId $association_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
}

class DescribeConnectionLoaResponse {
  public Loa $loa;
}

class DirectConnectGatewayAssociation {
  public OwnerAccount $direct_connect_gateway_owner_account;
  public DirectConnectGatewayAssociationState $association_state;
  public DirectConnectGatewayAssociationId $association_id;
  public VirtualGatewayId $virtual_gateway_id;
  public VirtualGatewayRegion $virtual_gateway_region;
  public OwnerAccount $virtual_gateway_owner_account;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public AssociatedGateway $associated_gateway;
  public RouteFilterPrefixList $allowed_prefixes_to_direct_connect_gateway;
  public StateChangeError $state_change_error;
}

class DirectConnectGatewayAttachmentList {
}

class DirectConnectServerException {
  public ErrorMessage $message;
}

class ResourceTagList {
}

class VirtualGatewayList {
}

class ConfirmConnectionResponse {
  public ConnectionState $connection_state;
}

class DeleteDirectConnectGatewayResult {
  public DirectConnectGateway $direct_connect_gateway;
}

class DescribeInterconnectLoaRequest {
  public InterconnectId $interconnect_id;
  public ProviderName $provider_name;
  public LoaContentType $loa_content_type;
}

class DescribeTagsResponse {
  public ResourceTagList $resource_tags;
}

class HasLogicalRedundancy {
}

class LoaContent {
}

class NewPrivateVirtualInterface {
  public BGPAuthKey $auth_key;
  public DirectConnectGatewayId $direct_connect_gateway_id;
  public TagList $tags;
  public VirtualInterfaceName $virtual_interface_name;
  public VLAN $vlan;
  public AmazonAddress $amazon_address;
  public CustomerAddress $customer_address;
  public AddressFamily $address_family;
  public VirtualGatewayId $virtual_gateway_id;
  public ASN $asn;
  public MTU $mtu;
}

class UpdateLagRequest {
  public LagId $lag_id;
  public LagName $lag_name;
  public Count $minimum_links;
}

class VirtualInterfaceType {
}

class DirectConnectGatewayAssociationProposal {
  public OwnerAccount $direct_connect_gateway_owner_account;
  public DirectConnectGatewayAssociationProposalState $proposal_state;
  public AssociatedGateway $associated_gateway;
  public RouteFilterPrefixList $existing_allowed_prefixes_to_direct_connect_gateway;
  public RouteFilterPrefixList $requested_allowed_prefixes_to_direct_connect_gateway;
  public DirectConnectGatewayAssociationProposalId $proposal_id;
  public DirectConnectGatewayId $direct_connect_gateway_id;
}

class DirectConnectGatewayAssociationState {
}

class Location {
  public LocationCode $location_code;
  public LocationName $location_name;
  public Region $region;
  public AvailablePortSpeeds $available_port_speeds;
  public ProviderList $available_providers;
}

class VirtualGateways {
  public VirtualGatewayList $virtual_gateways;
}

