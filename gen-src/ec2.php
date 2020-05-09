<?hh // strict
namespace slack\aws\ec2;

interface EC2 {
  public function AcceptReservedInstancesExchangeQuote(AcceptReservedInstancesExchangeQuoteRequest): Awaitable<Errors\Result<AcceptReservedInstancesExchangeQuoteResult>>;
  public function AcceptTransitGatewayPeeringAttachment(AcceptTransitGatewayPeeringAttachmentRequest): Awaitable<Errors\Result<AcceptTransitGatewayPeeringAttachmentResult>>;
  public function AcceptTransitGatewayVpcAttachment(AcceptTransitGatewayVpcAttachmentRequest): Awaitable<Errors\Result<AcceptTransitGatewayVpcAttachmentResult>>;
  public function AcceptVpcEndpointConnections(AcceptVpcEndpointConnectionsRequest): Awaitable<Errors\Result<AcceptVpcEndpointConnectionsResult>>;
  public function AcceptVpcPeeringConnection(AcceptVpcPeeringConnectionRequest): Awaitable<Errors\Result<AcceptVpcPeeringConnectionResult>>;
  public function AdvertiseByoipCidr(AdvertiseByoipCidrRequest): Awaitable<Errors\Result<AdvertiseByoipCidrResult>>;
  public function AllocateAddress(AllocateAddressRequest): Awaitable<Errors\Result<AllocateAddressResult>>;
  public function AllocateHosts(AllocateHostsRequest): Awaitable<Errors\Result<AllocateHostsResult>>;
  public function ApplySecurityGroupsToClientVpnTargetNetwork(ApplySecurityGroupsToClientVpnTargetNetworkRequest): Awaitable<Errors\Result<ApplySecurityGroupsToClientVpnTargetNetworkResult>>;
  public function AssignIpv6Addresses(AssignIpv6AddressesRequest): Awaitable<Errors\Result<AssignIpv6AddressesResult>>;
  public function AssignPrivateIpAddresses(AssignPrivateIpAddressesRequest): Awaitable<Errors\Result<AssignPrivateIpAddressesResult>>;
  public function AssociateAddress(AssociateAddressRequest): Awaitable<Errors\Result<AssociateAddressResult>>;
  public function AssociateClientVpnTargetNetwork(AssociateClientVpnTargetNetworkRequest): Awaitable<Errors\Result<AssociateClientVpnTargetNetworkResult>>;
  public function AssociateDhcpOptions(AssociateDhcpOptionsRequest): Awaitable<Errors\Error>;
  public function AssociateIamInstanceProfile(AssociateIamInstanceProfileRequest): Awaitable<Errors\Result<AssociateIamInstanceProfileResult>>;
  public function AssociateRouteTable(AssociateRouteTableRequest): Awaitable<Errors\Result<AssociateRouteTableResult>>;
  public function AssociateSubnetCidrBlock(AssociateSubnetCidrBlockRequest): Awaitable<Errors\Result<AssociateSubnetCidrBlockResult>>;
  public function AssociateTransitGatewayMulticastDomain(AssociateTransitGatewayMulticastDomainRequest): Awaitable<Errors\Result<AssociateTransitGatewayMulticastDomainResult>>;
  public function AssociateTransitGatewayRouteTable(AssociateTransitGatewayRouteTableRequest): Awaitable<Errors\Result<AssociateTransitGatewayRouteTableResult>>;
  public function AssociateVpcCidrBlock(AssociateVpcCidrBlockRequest): Awaitable<Errors\Result<AssociateVpcCidrBlockResult>>;
  public function AttachClassicLinkVpc(AttachClassicLinkVpcRequest): Awaitable<Errors\Result<AttachClassicLinkVpcResult>>;
  public function AttachInternetGateway(AttachInternetGatewayRequest): Awaitable<Errors\Error>;
  public function AttachNetworkInterface(AttachNetworkInterfaceRequest): Awaitable<Errors\Result<AttachNetworkInterfaceResult>>;
  public function AttachVolume(AttachVolumeRequest): Awaitable<Errors\Result<VolumeAttachment>>;
  public function AttachVpnGateway(AttachVpnGatewayRequest): Awaitable<Errors\Result<AttachVpnGatewayResult>>;
  public function AuthorizeClientVpnIngress(AuthorizeClientVpnIngressRequest): Awaitable<Errors\Result<AuthorizeClientVpnIngressResult>>;
  public function AuthorizeSecurityGroupEgress(AuthorizeSecurityGroupEgressRequest): Awaitable<Errors\Error>;
  public function AuthorizeSecurityGroupIngress(AuthorizeSecurityGroupIngressRequest): Awaitable<Errors\Error>;
  public function BundleInstance(BundleInstanceRequest): Awaitable<Errors\Result<BundleInstanceResult>>;
  public function CancelBundleTask(CancelBundleTaskRequest): Awaitable<Errors\Result<CancelBundleTaskResult>>;
  public function CancelCapacityReservation(CancelCapacityReservationRequest): Awaitable<Errors\Result<CancelCapacityReservationResult>>;
  public function CancelConversionTask(CancelConversionRequest): Awaitable<Errors\Error>;
  public function CancelExportTask(CancelExportTaskRequest): Awaitable<Errors\Error>;
  public function CancelImportTask(CancelImportTaskRequest): Awaitable<Errors\Result<CancelImportTaskResult>>;
  public function CancelReservedInstancesListing(CancelReservedInstancesListingRequest): Awaitable<Errors\Result<CancelReservedInstancesListingResult>>;
  public function CancelSpotFleetRequests(CancelSpotFleetRequestsRequest): Awaitable<Errors\Result<CancelSpotFleetRequestsResponse>>;
  public function CancelSpotInstanceRequests(CancelSpotInstanceRequestsRequest): Awaitable<Errors\Result<CancelSpotInstanceRequestsResult>>;
  public function ConfirmProductInstance(ConfirmProductInstanceRequest): Awaitable<Errors\Result<ConfirmProductInstanceResult>>;
  public function CopyFpgaImage(CopyFpgaImageRequest): Awaitable<Errors\Result<CopyFpgaImageResult>>;
  public function CopyImage(CopyImageRequest): Awaitable<Errors\Result<CopyImageResult>>;
  public function CopySnapshot(CopySnapshotRequest): Awaitable<Errors\Result<CopySnapshotResult>>;
  public function CreateCapacityReservation(CreateCapacityReservationRequest): Awaitable<Errors\Result<CreateCapacityReservationResult>>;
  public function CreateClientVpnEndpoint(CreateClientVpnEndpointRequest): Awaitable<Errors\Result<CreateClientVpnEndpointResult>>;
  public function CreateClientVpnRoute(CreateClientVpnRouteRequest): Awaitable<Errors\Result<CreateClientVpnRouteResult>>;
  public function CreateCustomerGateway(CreateCustomerGatewayRequest): Awaitable<Errors\Result<CreateCustomerGatewayResult>>;
  public function CreateDefaultSubnet(CreateDefaultSubnetRequest): Awaitable<Errors\Result<CreateDefaultSubnetResult>>;
  public function CreateDefaultVpc(CreateDefaultVpcRequest): Awaitable<Errors\Result<CreateDefaultVpcResult>>;
  public function CreateDhcpOptions(CreateDhcpOptionsRequest): Awaitable<Errors\Result<CreateDhcpOptionsResult>>;
  public function CreateEgressOnlyInternetGateway(CreateEgressOnlyInternetGatewayRequest): Awaitable<Errors\Result<CreateEgressOnlyInternetGatewayResult>>;
  public function CreateFleet(CreateFleetRequest): Awaitable<Errors\Result<CreateFleetResult>>;
  public function CreateFlowLogs(CreateFlowLogsRequest): Awaitable<Errors\Result<CreateFlowLogsResult>>;
  public function CreateFpgaImage(CreateFpgaImageRequest): Awaitable<Errors\Result<CreateFpgaImageResult>>;
  public function CreateImage(CreateImageRequest): Awaitable<Errors\Result<CreateImageResult>>;
  public function CreateInstanceExportTask(CreateInstanceExportTaskRequest): Awaitable<Errors\Result<CreateInstanceExportTaskResult>>;
  public function CreateInternetGateway(CreateInternetGatewayRequest): Awaitable<Errors\Result<CreateInternetGatewayResult>>;
  public function CreateKeyPair(CreateKeyPairRequest): Awaitable<Errors\Result<KeyPair>>;
  public function CreateLaunchTemplate(CreateLaunchTemplateRequest): Awaitable<Errors\Result<CreateLaunchTemplateResult>>;
  public function CreateLaunchTemplateVersion(CreateLaunchTemplateVersionRequest): Awaitable<Errors\Result<CreateLaunchTemplateVersionResult>>;
  public function CreateLocalGatewayRoute(CreateLocalGatewayRouteRequest): Awaitable<Errors\Result<CreateLocalGatewayRouteResult>>;
  public function CreateLocalGatewayRouteTableVpcAssociation(CreateLocalGatewayRouteTableVpcAssociationRequest): Awaitable<Errors\Result<CreateLocalGatewayRouteTableVpcAssociationResult>>;
  public function CreateNatGateway(CreateNatGatewayRequest): Awaitable<Errors\Result<CreateNatGatewayResult>>;
  public function CreateNetworkAcl(CreateNetworkAclRequest): Awaitable<Errors\Result<CreateNetworkAclResult>>;
  public function CreateNetworkAclEntry(CreateNetworkAclEntryRequest): Awaitable<Errors\Error>;
  public function CreateNetworkInterface(CreateNetworkInterfaceRequest): Awaitable<Errors\Result<CreateNetworkInterfaceResult>>;
  public function CreateNetworkInterfacePermission(CreateNetworkInterfacePermissionRequest): Awaitable<Errors\Result<CreateNetworkInterfacePermissionResult>>;
  public function CreatePlacementGroup(CreatePlacementGroupRequest): Awaitable<Errors\Result<CreatePlacementGroupResult>>;
  public function CreateReservedInstancesListing(CreateReservedInstancesListingRequest): Awaitable<Errors\Result<CreateReservedInstancesListingResult>>;
  public function CreateRoute(CreateRouteRequest): Awaitable<Errors\Result<CreateRouteResult>>;
  public function CreateRouteTable(CreateRouteTableRequest): Awaitable<Errors\Result<CreateRouteTableResult>>;
  public function CreateSecurityGroup(CreateSecurityGroupRequest): Awaitable<Errors\Result<CreateSecurityGroupResult>>;
  public function CreateSnapshot(CreateSnapshotRequest): Awaitable<Errors\Result<Snapshot>>;
  public function CreateSnapshots(CreateSnapshotsRequest): Awaitable<Errors\Result<CreateSnapshotsResult>>;
  public function CreateSpotDatafeedSubscription(CreateSpotDatafeedSubscriptionRequest): Awaitable<Errors\Result<CreateSpotDatafeedSubscriptionResult>>;
  public function CreateSubnet(CreateSubnetRequest): Awaitable<Errors\Result<CreateSubnetResult>>;
  public function CreateTags(CreateTagsRequest): Awaitable<Errors\Error>;
  public function CreateTrafficMirrorFilter(CreateTrafficMirrorFilterRequest): Awaitable<Errors\Result<CreateTrafficMirrorFilterResult>>;
  public function CreateTrafficMirrorFilterRule(CreateTrafficMirrorFilterRuleRequest): Awaitable<Errors\Result<CreateTrafficMirrorFilterRuleResult>>;
  public function CreateTrafficMirrorSession(CreateTrafficMirrorSessionRequest): Awaitable<Errors\Result<CreateTrafficMirrorSessionResult>>;
  public function CreateTrafficMirrorTarget(CreateTrafficMirrorTargetRequest): Awaitable<Errors\Result<CreateTrafficMirrorTargetResult>>;
  public function CreateTransitGateway(CreateTransitGatewayRequest): Awaitable<Errors\Result<CreateTransitGatewayResult>>;
  public function CreateTransitGatewayMulticastDomain(CreateTransitGatewayMulticastDomainRequest): Awaitable<Errors\Result<CreateTransitGatewayMulticastDomainResult>>;
  public function CreateTransitGatewayPeeringAttachment(CreateTransitGatewayPeeringAttachmentRequest): Awaitable<Errors\Result<CreateTransitGatewayPeeringAttachmentResult>>;
  public function CreateTransitGatewayRoute(CreateTransitGatewayRouteRequest): Awaitable<Errors\Result<CreateTransitGatewayRouteResult>>;
  public function CreateTransitGatewayRouteTable(CreateTransitGatewayRouteTableRequest): Awaitable<Errors\Result<CreateTransitGatewayRouteTableResult>>;
  public function CreateTransitGatewayVpcAttachment(CreateTransitGatewayVpcAttachmentRequest): Awaitable<Errors\Result<CreateTransitGatewayVpcAttachmentResult>>;
  public function CreateVolume(CreateVolumeRequest): Awaitable<Errors\Result<Volume>>;
  public function CreateVpc(CreateVpcRequest): Awaitable<Errors\Result<CreateVpcResult>>;
  public function CreateVpcEndpoint(CreateVpcEndpointRequest): Awaitable<Errors\Result<CreateVpcEndpointResult>>;
  public function CreateVpcEndpointConnectionNotification(CreateVpcEndpointConnectionNotificationRequest): Awaitable<Errors\Result<CreateVpcEndpointConnectionNotificationResult>>;
  public function CreateVpcEndpointServiceConfiguration(CreateVpcEndpointServiceConfigurationRequest): Awaitable<Errors\Result<CreateVpcEndpointServiceConfigurationResult>>;
  public function CreateVpcPeeringConnection(CreateVpcPeeringConnectionRequest): Awaitable<Errors\Result<CreateVpcPeeringConnectionResult>>;
  public function CreateVpnConnection(CreateVpnConnectionRequest): Awaitable<Errors\Result<CreateVpnConnectionResult>>;
  public function CreateVpnConnectionRoute(CreateVpnConnectionRouteRequest): Awaitable<Errors\Error>;
  public function CreateVpnGateway(CreateVpnGatewayRequest): Awaitable<Errors\Result<CreateVpnGatewayResult>>;
  public function DeleteClientVpnEndpoint(DeleteClientVpnEndpointRequest): Awaitable<Errors\Result<DeleteClientVpnEndpointResult>>;
  public function DeleteClientVpnRoute(DeleteClientVpnRouteRequest): Awaitable<Errors\Result<DeleteClientVpnRouteResult>>;
  public function DeleteCustomerGateway(DeleteCustomerGatewayRequest): Awaitable<Errors\Error>;
  public function DeleteDhcpOptions(DeleteDhcpOptionsRequest): Awaitable<Errors\Error>;
  public function DeleteEgressOnlyInternetGateway(DeleteEgressOnlyInternetGatewayRequest): Awaitable<Errors\Result<DeleteEgressOnlyInternetGatewayResult>>;
  public function DeleteFleets(DeleteFleetsRequest): Awaitable<Errors\Result<DeleteFleetsResult>>;
  public function DeleteFlowLogs(DeleteFlowLogsRequest): Awaitable<Errors\Result<DeleteFlowLogsResult>>;
  public function DeleteFpgaImage(DeleteFpgaImageRequest): Awaitable<Errors\Result<DeleteFpgaImageResult>>;
  public function DeleteInternetGateway(DeleteInternetGatewayRequest): Awaitable<Errors\Error>;
  public function DeleteKeyPair(DeleteKeyPairRequest): Awaitable<Errors\Error>;
  public function DeleteLaunchTemplate(DeleteLaunchTemplateRequest): Awaitable<Errors\Result<DeleteLaunchTemplateResult>>;
  public function DeleteLaunchTemplateVersions(DeleteLaunchTemplateVersionsRequest): Awaitable<Errors\Result<DeleteLaunchTemplateVersionsResult>>;
  public function DeleteLocalGatewayRoute(DeleteLocalGatewayRouteRequest): Awaitable<Errors\Result<DeleteLocalGatewayRouteResult>>;
  public function DeleteLocalGatewayRouteTableVpcAssociation(DeleteLocalGatewayRouteTableVpcAssociationRequest): Awaitable<Errors\Result<DeleteLocalGatewayRouteTableVpcAssociationResult>>;
  public function DeleteNatGateway(DeleteNatGatewayRequest): Awaitable<Errors\Result<DeleteNatGatewayResult>>;
  public function DeleteNetworkAcl(DeleteNetworkAclRequest): Awaitable<Errors\Error>;
  public function DeleteNetworkAclEntry(DeleteNetworkAclEntryRequest): Awaitable<Errors\Error>;
  public function DeleteNetworkInterface(DeleteNetworkInterfaceRequest): Awaitable<Errors\Error>;
  public function DeleteNetworkInterfacePermission(DeleteNetworkInterfacePermissionRequest): Awaitable<Errors\Result<DeleteNetworkInterfacePermissionResult>>;
  public function DeletePlacementGroup(DeletePlacementGroupRequest): Awaitable<Errors\Error>;
  public function DeleteQueuedReservedInstances(DeleteQueuedReservedInstancesRequest): Awaitable<Errors\Result<DeleteQueuedReservedInstancesResult>>;
  public function DeleteRoute(DeleteRouteRequest): Awaitable<Errors\Error>;
  public function DeleteRouteTable(DeleteRouteTableRequest): Awaitable<Errors\Error>;
  public function DeleteSecurityGroup(DeleteSecurityGroupRequest): Awaitable<Errors\Error>;
  public function DeleteSnapshot(DeleteSnapshotRequest): Awaitable<Errors\Error>;
  public function DeleteSpotDatafeedSubscription(DeleteSpotDatafeedSubscriptionRequest): Awaitable<Errors\Error>;
  public function DeleteSubnet(DeleteSubnetRequest): Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsRequest): Awaitable<Errors\Error>;
  public function DeleteTrafficMirrorFilter(DeleteTrafficMirrorFilterRequest): Awaitable<Errors\Result<DeleteTrafficMirrorFilterResult>>;
  public function DeleteTrafficMirrorFilterRule(DeleteTrafficMirrorFilterRuleRequest): Awaitable<Errors\Result<DeleteTrafficMirrorFilterRuleResult>>;
  public function DeleteTrafficMirrorSession(DeleteTrafficMirrorSessionRequest): Awaitable<Errors\Result<DeleteTrafficMirrorSessionResult>>;
  public function DeleteTrafficMirrorTarget(DeleteTrafficMirrorTargetRequest): Awaitable<Errors\Result<DeleteTrafficMirrorTargetResult>>;
  public function DeleteTransitGateway(DeleteTransitGatewayRequest): Awaitable<Errors\Result<DeleteTransitGatewayResult>>;
  public function DeleteTransitGatewayMulticastDomain(DeleteTransitGatewayMulticastDomainRequest): Awaitable<Errors\Result<DeleteTransitGatewayMulticastDomainResult>>;
  public function DeleteTransitGatewayPeeringAttachment(DeleteTransitGatewayPeeringAttachmentRequest): Awaitable<Errors\Result<DeleteTransitGatewayPeeringAttachmentResult>>;
  public function DeleteTransitGatewayRoute(DeleteTransitGatewayRouteRequest): Awaitable<Errors\Result<DeleteTransitGatewayRouteResult>>;
  public function DeleteTransitGatewayRouteTable(DeleteTransitGatewayRouteTableRequest): Awaitable<Errors\Result<DeleteTransitGatewayRouteTableResult>>;
  public function DeleteTransitGatewayVpcAttachment(DeleteTransitGatewayVpcAttachmentRequest): Awaitable<Errors\Result<DeleteTransitGatewayVpcAttachmentResult>>;
  public function DeleteVolume(DeleteVolumeRequest): Awaitable<Errors\Error>;
  public function DeleteVpc(DeleteVpcRequest): Awaitable<Errors\Error>;
  public function DeleteVpcEndpointConnectionNotifications(DeleteVpcEndpointConnectionNotificationsRequest): Awaitable<Errors\Result<DeleteVpcEndpointConnectionNotificationsResult>>;
  public function DeleteVpcEndpointServiceConfigurations(DeleteVpcEndpointServiceConfigurationsRequest): Awaitable<Errors\Result<DeleteVpcEndpointServiceConfigurationsResult>>;
  public function DeleteVpcEndpoints(DeleteVpcEndpointsRequest): Awaitable<Errors\Result<DeleteVpcEndpointsResult>>;
  public function DeleteVpcPeeringConnection(DeleteVpcPeeringConnectionRequest): Awaitable<Errors\Result<DeleteVpcPeeringConnectionResult>>;
  public function DeleteVpnConnection(DeleteVpnConnectionRequest): Awaitable<Errors\Error>;
  public function DeleteVpnConnectionRoute(DeleteVpnConnectionRouteRequest): Awaitable<Errors\Error>;
  public function DeleteVpnGateway(DeleteVpnGatewayRequest): Awaitable<Errors\Error>;
  public function DeprovisionByoipCidr(DeprovisionByoipCidrRequest): Awaitable<Errors\Result<DeprovisionByoipCidrResult>>;
  public function DeregisterImage(DeregisterImageRequest): Awaitable<Errors\Error>;
  public function DeregisterInstanceEventNotificationAttributes(DeregisterInstanceEventNotificationAttributesRequest): Awaitable<Errors\Result<DeregisterInstanceEventNotificationAttributesResult>>;
  public function DeregisterTransitGatewayMulticastGroupMembers(DeregisterTransitGatewayMulticastGroupMembersRequest): Awaitable<Errors\Result<DeregisterTransitGatewayMulticastGroupMembersResult>>;
  public function DeregisterTransitGatewayMulticastGroupSources(DeregisterTransitGatewayMulticastGroupSourcesRequest): Awaitable<Errors\Result<DeregisterTransitGatewayMulticastGroupSourcesResult>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesRequest): Awaitable<Errors\Result<DescribeAccountAttributesResult>>;
  public function DescribeAddresses(DescribeAddressesRequest): Awaitable<Errors\Result<DescribeAddressesResult>>;
  public function DescribeAggregateIdFormat(DescribeAggregateIdFormatRequest): Awaitable<Errors\Result<DescribeAggregateIdFormatResult>>;
  public function DescribeAvailabilityZones(DescribeAvailabilityZonesRequest): Awaitable<Errors\Result<DescribeAvailabilityZonesResult>>;
  public function DescribeBundleTasks(DescribeBundleTasksRequest): Awaitable<Errors\Result<DescribeBundleTasksResult>>;
  public function DescribeByoipCidrs(DescribeByoipCidrsRequest): Awaitable<Errors\Result<DescribeByoipCidrsResult>>;
  public function DescribeCapacityReservations(DescribeCapacityReservationsRequest): Awaitable<Errors\Result<DescribeCapacityReservationsResult>>;
  public function DescribeClassicLinkInstances(DescribeClassicLinkInstancesRequest): Awaitable<Errors\Result<DescribeClassicLinkInstancesResult>>;
  public function DescribeClientVpnAuthorizationRules(DescribeClientVpnAuthorizationRulesRequest): Awaitable<Errors\Result<DescribeClientVpnAuthorizationRulesResult>>;
  public function DescribeClientVpnConnections(DescribeClientVpnConnectionsRequest): Awaitable<Errors\Result<DescribeClientVpnConnectionsResult>>;
  public function DescribeClientVpnEndpoints(DescribeClientVpnEndpointsRequest): Awaitable<Errors\Result<DescribeClientVpnEndpointsResult>>;
  public function DescribeClientVpnRoutes(DescribeClientVpnRoutesRequest): Awaitable<Errors\Result<DescribeClientVpnRoutesResult>>;
  public function DescribeClientVpnTargetNetworks(DescribeClientVpnTargetNetworksRequest): Awaitable<Errors\Result<DescribeClientVpnTargetNetworksResult>>;
  public function DescribeCoipPools(DescribeCoipPoolsRequest): Awaitable<Errors\Result<DescribeCoipPoolsResult>>;
  public function DescribeConversionTasks(DescribeConversionTasksRequest): Awaitable<Errors\Result<DescribeConversionTasksResult>>;
  public function DescribeCustomerGateways(DescribeCustomerGatewaysRequest): Awaitable<Errors\Result<DescribeCustomerGatewaysResult>>;
  public function DescribeDhcpOptions(DescribeDhcpOptionsRequest): Awaitable<Errors\Result<DescribeDhcpOptionsResult>>;
  public function DescribeEgressOnlyInternetGateways(DescribeEgressOnlyInternetGatewaysRequest): Awaitable<Errors\Result<DescribeEgressOnlyInternetGatewaysResult>>;
  public function DescribeElasticGpus(DescribeElasticGpusRequest): Awaitable<Errors\Result<DescribeElasticGpusResult>>;
  public function DescribeExportImageTasks(DescribeExportImageTasksRequest): Awaitable<Errors\Result<DescribeExportImageTasksResult>>;
  public function DescribeExportTasks(DescribeExportTasksRequest): Awaitable<Errors\Result<DescribeExportTasksResult>>;
  public function DescribeFastSnapshotRestores(DescribeFastSnapshotRestoresRequest): Awaitable<Errors\Result<DescribeFastSnapshotRestoresResult>>;
  public function DescribeFleetHistory(DescribeFleetHistoryRequest): Awaitable<Errors\Result<DescribeFleetHistoryResult>>;
  public function DescribeFleetInstances(DescribeFleetInstancesRequest): Awaitable<Errors\Result<DescribeFleetInstancesResult>>;
  public function DescribeFleets(DescribeFleetsRequest): Awaitable<Errors\Result<DescribeFleetsResult>>;
  public function DescribeFlowLogs(DescribeFlowLogsRequest): Awaitable<Errors\Result<DescribeFlowLogsResult>>;
  public function DescribeFpgaImageAttribute(DescribeFpgaImageAttributeRequest): Awaitable<Errors\Result<DescribeFpgaImageAttributeResult>>;
  public function DescribeFpgaImages(DescribeFpgaImagesRequest): Awaitable<Errors\Result<DescribeFpgaImagesResult>>;
  public function DescribeHostReservationOfferings(DescribeHostReservationOfferingsRequest): Awaitable<Errors\Result<DescribeHostReservationOfferingsResult>>;
  public function DescribeHostReservations(DescribeHostReservationsRequest): Awaitable<Errors\Result<DescribeHostReservationsResult>>;
  public function DescribeHosts(DescribeHostsRequest): Awaitable<Errors\Result<DescribeHostsResult>>;
  public function DescribeIamInstanceProfileAssociations(DescribeIamInstanceProfileAssociationsRequest): Awaitable<Errors\Result<DescribeIamInstanceProfileAssociationsResult>>;
  public function DescribeIdFormat(DescribeIdFormatRequest): Awaitable<Errors\Result<DescribeIdFormatResult>>;
  public function DescribeIdentityIdFormat(DescribeIdentityIdFormatRequest): Awaitable<Errors\Result<DescribeIdentityIdFormatResult>>;
  public function DescribeImageAttribute(DescribeImageAttributeRequest): Awaitable<Errors\Result<ImageAttribute>>;
  public function DescribeImages(DescribeImagesRequest): Awaitable<Errors\Result<DescribeImagesResult>>;
  public function DescribeImportImageTasks(DescribeImportImageTasksRequest): Awaitable<Errors\Result<DescribeImportImageTasksResult>>;
  public function DescribeImportSnapshotTasks(DescribeImportSnapshotTasksRequest): Awaitable<Errors\Result<DescribeImportSnapshotTasksResult>>;
  public function DescribeInstanceAttribute(DescribeInstanceAttributeRequest): Awaitable<Errors\Result<InstanceAttribute>>;
  public function DescribeInstanceCreditSpecifications(DescribeInstanceCreditSpecificationsRequest): Awaitable<Errors\Result<DescribeInstanceCreditSpecificationsResult>>;
  public function DescribeInstanceEventNotificationAttributes(DescribeInstanceEventNotificationAttributesRequest): Awaitable<Errors\Result<DescribeInstanceEventNotificationAttributesResult>>;
  public function DescribeInstanceStatus(DescribeInstanceStatusRequest): Awaitable<Errors\Result<DescribeInstanceStatusResult>>;
  public function DescribeInstanceTypeOfferings(DescribeInstanceTypeOfferingsRequest): Awaitable<Errors\Result<DescribeInstanceTypeOfferingsResult>>;
  public function DescribeInstanceTypes(DescribeInstanceTypesRequest): Awaitable<Errors\Result<DescribeInstanceTypesResult>>;
  public function DescribeInstances(DescribeInstancesRequest): Awaitable<Errors\Result<DescribeInstancesResult>>;
  public function DescribeInternetGateways(DescribeInternetGatewaysRequest): Awaitable<Errors\Result<DescribeInternetGatewaysResult>>;
  public function DescribeIpv6Pools(DescribeIpv6PoolsRequest): Awaitable<Errors\Result<DescribeIpv6PoolsResult>>;
  public function DescribeKeyPairs(DescribeKeyPairsRequest): Awaitable<Errors\Result<DescribeKeyPairsResult>>;
  public function DescribeLaunchTemplateVersions(DescribeLaunchTemplateVersionsRequest): Awaitable<Errors\Result<DescribeLaunchTemplateVersionsResult>>;
  public function DescribeLaunchTemplates(DescribeLaunchTemplatesRequest): Awaitable<Errors\Result<DescribeLaunchTemplatesResult>>;
  public function DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociations(DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest): Awaitable<Errors\Result<DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResult>>;
  public function DescribeLocalGatewayRouteTableVpcAssociations(DescribeLocalGatewayRouteTableVpcAssociationsRequest): Awaitable<Errors\Result<DescribeLocalGatewayRouteTableVpcAssociationsResult>>;
  public function DescribeLocalGatewayRouteTables(DescribeLocalGatewayRouteTablesRequest): Awaitable<Errors\Result<DescribeLocalGatewayRouteTablesResult>>;
  public function DescribeLocalGatewayVirtualInterfaceGroups(DescribeLocalGatewayVirtualInterfaceGroupsRequest): Awaitable<Errors\Result<DescribeLocalGatewayVirtualInterfaceGroupsResult>>;
  public function DescribeLocalGatewayVirtualInterfaces(DescribeLocalGatewayVirtualInterfacesRequest): Awaitable<Errors\Result<DescribeLocalGatewayVirtualInterfacesResult>>;
  public function DescribeLocalGateways(DescribeLocalGatewaysRequest): Awaitable<Errors\Result<DescribeLocalGatewaysResult>>;
  public function DescribeMovingAddresses(DescribeMovingAddressesRequest): Awaitable<Errors\Result<DescribeMovingAddressesResult>>;
  public function DescribeNatGateways(DescribeNatGatewaysRequest): Awaitable<Errors\Result<DescribeNatGatewaysResult>>;
  public function DescribeNetworkAcls(DescribeNetworkAclsRequest): Awaitable<Errors\Result<DescribeNetworkAclsResult>>;
  public function DescribeNetworkInterfaceAttribute(DescribeNetworkInterfaceAttributeRequest): Awaitable<Errors\Result<DescribeNetworkInterfaceAttributeResult>>;
  public function DescribeNetworkInterfacePermissions(DescribeNetworkInterfacePermissionsRequest): Awaitable<Errors\Result<DescribeNetworkInterfacePermissionsResult>>;
  public function DescribeNetworkInterfaces(DescribeNetworkInterfacesRequest): Awaitable<Errors\Result<DescribeNetworkInterfacesResult>>;
  public function DescribePlacementGroups(DescribePlacementGroupsRequest): Awaitable<Errors\Result<DescribePlacementGroupsResult>>;
  public function DescribePrefixLists(DescribePrefixListsRequest): Awaitable<Errors\Result<DescribePrefixListsResult>>;
  public function DescribePrincipalIdFormat(DescribePrincipalIdFormatRequest): Awaitable<Errors\Result<DescribePrincipalIdFormatResult>>;
  public function DescribePublicIpv4Pools(DescribePublicIpv4PoolsRequest): Awaitable<Errors\Result<DescribePublicIpv4PoolsResult>>;
  public function DescribeRegions(DescribeRegionsRequest): Awaitable<Errors\Result<DescribeRegionsResult>>;
  public function DescribeReservedInstances(DescribeReservedInstancesRequest): Awaitable<Errors\Result<DescribeReservedInstancesResult>>;
  public function DescribeReservedInstancesListings(DescribeReservedInstancesListingsRequest): Awaitable<Errors\Result<DescribeReservedInstancesListingsResult>>;
  public function DescribeReservedInstancesModifications(DescribeReservedInstancesModificationsRequest): Awaitable<Errors\Result<DescribeReservedInstancesModificationsResult>>;
  public function DescribeReservedInstancesOfferings(DescribeReservedInstancesOfferingsRequest): Awaitable<Errors\Result<DescribeReservedInstancesOfferingsResult>>;
  public function DescribeRouteTables(DescribeRouteTablesRequest): Awaitable<Errors\Result<DescribeRouteTablesResult>>;
  public function DescribeScheduledInstanceAvailability(DescribeScheduledInstanceAvailabilityRequest): Awaitable<Errors\Result<DescribeScheduledInstanceAvailabilityResult>>;
  public function DescribeScheduledInstances(DescribeScheduledInstancesRequest): Awaitable<Errors\Result<DescribeScheduledInstancesResult>>;
  public function DescribeSecurityGroupReferences(DescribeSecurityGroupReferencesRequest): Awaitable<Errors\Result<DescribeSecurityGroupReferencesResult>>;
  public function DescribeSecurityGroups(DescribeSecurityGroupsRequest): Awaitable<Errors\Result<DescribeSecurityGroupsResult>>;
  public function DescribeSnapshotAttribute(DescribeSnapshotAttributeRequest): Awaitable<Errors\Result<DescribeSnapshotAttributeResult>>;
  public function DescribeSnapshots(DescribeSnapshotsRequest): Awaitable<Errors\Result<DescribeSnapshotsResult>>;
  public function DescribeSpotDatafeedSubscription(DescribeSpotDatafeedSubscriptionRequest): Awaitable<Errors\Result<DescribeSpotDatafeedSubscriptionResult>>;
  public function DescribeSpotFleetInstances(DescribeSpotFleetInstancesRequest): Awaitable<Errors\Result<DescribeSpotFleetInstancesResponse>>;
  public function DescribeSpotFleetRequestHistory(DescribeSpotFleetRequestHistoryRequest): Awaitable<Errors\Result<DescribeSpotFleetRequestHistoryResponse>>;
  public function DescribeSpotFleetRequests(DescribeSpotFleetRequestsRequest): Awaitable<Errors\Result<DescribeSpotFleetRequestsResponse>>;
  public function DescribeSpotInstanceRequests(DescribeSpotInstanceRequestsRequest): Awaitable<Errors\Result<DescribeSpotInstanceRequestsResult>>;
  public function DescribeSpotPriceHistory(DescribeSpotPriceHistoryRequest): Awaitable<Errors\Result<DescribeSpotPriceHistoryResult>>;
  public function DescribeStaleSecurityGroups(DescribeStaleSecurityGroupsRequest): Awaitable<Errors\Result<DescribeStaleSecurityGroupsResult>>;
  public function DescribeSubnets(DescribeSubnetsRequest): Awaitable<Errors\Result<DescribeSubnetsResult>>;
  public function DescribeTags(DescribeTagsRequest): Awaitable<Errors\Result<DescribeTagsResult>>;
  public function DescribeTrafficMirrorFilters(DescribeTrafficMirrorFiltersRequest): Awaitable<Errors\Result<DescribeTrafficMirrorFiltersResult>>;
  public function DescribeTrafficMirrorSessions(DescribeTrafficMirrorSessionsRequest): Awaitable<Errors\Result<DescribeTrafficMirrorSessionsResult>>;
  public function DescribeTrafficMirrorTargets(DescribeTrafficMirrorTargetsRequest): Awaitable<Errors\Result<DescribeTrafficMirrorTargetsResult>>;
  public function DescribeTransitGatewayAttachments(DescribeTransitGatewayAttachmentsRequest): Awaitable<Errors\Result<DescribeTransitGatewayAttachmentsResult>>;
  public function DescribeTransitGatewayMulticastDomains(DescribeTransitGatewayMulticastDomainsRequest): Awaitable<Errors\Result<DescribeTransitGatewayMulticastDomainsResult>>;
  public function DescribeTransitGatewayPeeringAttachments(DescribeTransitGatewayPeeringAttachmentsRequest): Awaitable<Errors\Result<DescribeTransitGatewayPeeringAttachmentsResult>>;
  public function DescribeTransitGatewayRouteTables(DescribeTransitGatewayRouteTablesRequest): Awaitable<Errors\Result<DescribeTransitGatewayRouteTablesResult>>;
  public function DescribeTransitGatewayVpcAttachments(DescribeTransitGatewayVpcAttachmentsRequest): Awaitable<Errors\Result<DescribeTransitGatewayVpcAttachmentsResult>>;
  public function DescribeTransitGateways(DescribeTransitGatewaysRequest): Awaitable<Errors\Result<DescribeTransitGatewaysResult>>;
  public function DescribeVolumeAttribute(DescribeVolumeAttributeRequest): Awaitable<Errors\Result<DescribeVolumeAttributeResult>>;
  public function DescribeVolumeStatus(DescribeVolumeStatusRequest): Awaitable<Errors\Result<DescribeVolumeStatusResult>>;
  public function DescribeVolumes(DescribeVolumesRequest): Awaitable<Errors\Result<DescribeVolumesResult>>;
  public function DescribeVolumesModifications(DescribeVolumesModificationsRequest): Awaitable<Errors\Result<DescribeVolumesModificationsResult>>;
  public function DescribeVpcAttribute(DescribeVpcAttributeRequest): Awaitable<Errors\Result<DescribeVpcAttributeResult>>;
  public function DescribeVpcClassicLink(DescribeVpcClassicLinkRequest): Awaitable<Errors\Result<DescribeVpcClassicLinkResult>>;
  public function DescribeVpcClassicLinkDnsSupport(DescribeVpcClassicLinkDnsSupportRequest): Awaitable<Errors\Result<DescribeVpcClassicLinkDnsSupportResult>>;
  public function DescribeVpcEndpointConnectionNotifications(DescribeVpcEndpointConnectionNotificationsRequest): Awaitable<Errors\Result<DescribeVpcEndpointConnectionNotificationsResult>>;
  public function DescribeVpcEndpointConnections(DescribeVpcEndpointConnectionsRequest): Awaitable<Errors\Result<DescribeVpcEndpointConnectionsResult>>;
  public function DescribeVpcEndpointServiceConfigurations(DescribeVpcEndpointServiceConfigurationsRequest): Awaitable<Errors\Result<DescribeVpcEndpointServiceConfigurationsResult>>;
  public function DescribeVpcEndpointServicePermissions(DescribeVpcEndpointServicePermissionsRequest): Awaitable<Errors\Result<DescribeVpcEndpointServicePermissionsResult>>;
  public function DescribeVpcEndpointServices(DescribeVpcEndpointServicesRequest): Awaitable<Errors\Result<DescribeVpcEndpointServicesResult>>;
  public function DescribeVpcEndpoints(DescribeVpcEndpointsRequest): Awaitable<Errors\Result<DescribeVpcEndpointsResult>>;
  public function DescribeVpcPeeringConnections(DescribeVpcPeeringConnectionsRequest): Awaitable<Errors\Result<DescribeVpcPeeringConnectionsResult>>;
  public function DescribeVpcs(DescribeVpcsRequest): Awaitable<Errors\Result<DescribeVpcsResult>>;
  public function DescribeVpnConnections(DescribeVpnConnectionsRequest): Awaitable<Errors\Result<DescribeVpnConnectionsResult>>;
  public function DescribeVpnGateways(DescribeVpnGatewaysRequest): Awaitable<Errors\Result<DescribeVpnGatewaysResult>>;
  public function DetachClassicLinkVpc(DetachClassicLinkVpcRequest): Awaitable<Errors\Result<DetachClassicLinkVpcResult>>;
  public function DetachInternetGateway(DetachInternetGatewayRequest): Awaitable<Errors\Error>;
  public function DetachNetworkInterface(DetachNetworkInterfaceRequest): Awaitable<Errors\Error>;
  public function DetachVolume(DetachVolumeRequest): Awaitable<Errors\Result<VolumeAttachment>>;
  public function DetachVpnGateway(DetachVpnGatewayRequest): Awaitable<Errors\Error>;
  public function DisableEbsEncryptionByDefault(DisableEbsEncryptionByDefaultRequest): Awaitable<Errors\Result<DisableEbsEncryptionByDefaultResult>>;
  public function DisableFastSnapshotRestores(DisableFastSnapshotRestoresRequest): Awaitable<Errors\Result<DisableFastSnapshotRestoresResult>>;
  public function DisableTransitGatewayRouteTablePropagation(DisableTransitGatewayRouteTablePropagationRequest): Awaitable<Errors\Result<DisableTransitGatewayRouteTablePropagationResult>>;
  public function DisableVgwRoutePropagation(DisableVgwRoutePropagationRequest): Awaitable<Errors\Error>;
  public function DisableVpcClassicLink(DisableVpcClassicLinkRequest): Awaitable<Errors\Result<DisableVpcClassicLinkResult>>;
  public function DisableVpcClassicLinkDnsSupport(DisableVpcClassicLinkDnsSupportRequest): Awaitable<Errors\Result<DisableVpcClassicLinkDnsSupportResult>>;
  public function DisassociateAddress(DisassociateAddressRequest): Awaitable<Errors\Error>;
  public function DisassociateClientVpnTargetNetwork(DisassociateClientVpnTargetNetworkRequest): Awaitable<Errors\Result<DisassociateClientVpnTargetNetworkResult>>;
  public function DisassociateIamInstanceProfile(DisassociateIamInstanceProfileRequest): Awaitable<Errors\Result<DisassociateIamInstanceProfileResult>>;
  public function DisassociateRouteTable(DisassociateRouteTableRequest): Awaitable<Errors\Error>;
  public function DisassociateSubnetCidrBlock(DisassociateSubnetCidrBlockRequest): Awaitable<Errors\Result<DisassociateSubnetCidrBlockResult>>;
  public function DisassociateTransitGatewayMulticastDomain(DisassociateTransitGatewayMulticastDomainRequest): Awaitable<Errors\Result<DisassociateTransitGatewayMulticastDomainResult>>;
  public function DisassociateTransitGatewayRouteTable(DisassociateTransitGatewayRouteTableRequest): Awaitable<Errors\Result<DisassociateTransitGatewayRouteTableResult>>;
  public function DisassociateVpcCidrBlock(DisassociateVpcCidrBlockRequest): Awaitable<Errors\Result<DisassociateVpcCidrBlockResult>>;
  public function EnableEbsEncryptionByDefault(EnableEbsEncryptionByDefaultRequest): Awaitable<Errors\Result<EnableEbsEncryptionByDefaultResult>>;
  public function EnableFastSnapshotRestores(EnableFastSnapshotRestoresRequest): Awaitable<Errors\Result<EnableFastSnapshotRestoresResult>>;
  public function EnableTransitGatewayRouteTablePropagation(EnableTransitGatewayRouteTablePropagationRequest): Awaitable<Errors\Result<EnableTransitGatewayRouteTablePropagationResult>>;
  public function EnableVgwRoutePropagation(EnableVgwRoutePropagationRequest): Awaitable<Errors\Error>;
  public function EnableVolumeIO(EnableVolumeIORequest): Awaitable<Errors\Error>;
  public function EnableVpcClassicLink(EnableVpcClassicLinkRequest): Awaitable<Errors\Result<EnableVpcClassicLinkResult>>;
  public function EnableVpcClassicLinkDnsSupport(EnableVpcClassicLinkDnsSupportRequest): Awaitable<Errors\Result<EnableVpcClassicLinkDnsSupportResult>>;
  public function ExportClientVpnClientCertificateRevocationList(ExportClientVpnClientCertificateRevocationListRequest): Awaitable<Errors\Result<ExportClientVpnClientCertificateRevocationListResult>>;
  public function ExportClientVpnClientConfiguration(ExportClientVpnClientConfigurationRequest): Awaitable<Errors\Result<ExportClientVpnClientConfigurationResult>>;
  public function ExportImage(ExportImageRequest): Awaitable<Errors\Result<ExportImageResult>>;
  public function ExportTransitGatewayRoutes(ExportTransitGatewayRoutesRequest): Awaitable<Errors\Result<ExportTransitGatewayRoutesResult>>;
  public function GetAssociatedIpv6PoolCidrs(GetAssociatedIpv6PoolCidrsRequest): Awaitable<Errors\Result<GetAssociatedIpv6PoolCidrsResult>>;
  public function GetCapacityReservationUsage(GetCapacityReservationUsageRequest): Awaitable<Errors\Result<GetCapacityReservationUsageResult>>;
  public function GetCoipPoolUsage(GetCoipPoolUsageRequest): Awaitable<Errors\Result<GetCoipPoolUsageResult>>;
  public function GetConsoleOutput(GetConsoleOutputRequest): Awaitable<Errors\Result<GetConsoleOutputResult>>;
  public function GetConsoleScreenshot(GetConsoleScreenshotRequest): Awaitable<Errors\Result<GetConsoleScreenshotResult>>;
  public function GetDefaultCreditSpecification(GetDefaultCreditSpecificationRequest): Awaitable<Errors\Result<GetDefaultCreditSpecificationResult>>;
  public function GetEbsDefaultKmsKeyId(GetEbsDefaultKmsKeyIdRequest): Awaitable<Errors\Result<GetEbsDefaultKmsKeyIdResult>>;
  public function GetEbsEncryptionByDefault(GetEbsEncryptionByDefaultRequest): Awaitable<Errors\Result<GetEbsEncryptionByDefaultResult>>;
  public function GetHostReservationPurchasePreview(GetHostReservationPurchasePreviewRequest): Awaitable<Errors\Result<GetHostReservationPurchasePreviewResult>>;
  public function GetLaunchTemplateData(GetLaunchTemplateDataRequest): Awaitable<Errors\Result<GetLaunchTemplateDataResult>>;
  public function GetPasswordData(GetPasswordDataRequest): Awaitable<Errors\Result<GetPasswordDataResult>>;
  public function GetReservedInstancesExchangeQuote(GetReservedInstancesExchangeQuoteRequest): Awaitable<Errors\Result<GetReservedInstancesExchangeQuoteResult>>;
  public function GetTransitGatewayAttachmentPropagations(GetTransitGatewayAttachmentPropagationsRequest): Awaitable<Errors\Result<GetTransitGatewayAttachmentPropagationsResult>>;
  public function GetTransitGatewayMulticastDomainAssociations(GetTransitGatewayMulticastDomainAssociationsRequest): Awaitable<Errors\Result<GetTransitGatewayMulticastDomainAssociationsResult>>;
  public function GetTransitGatewayRouteTableAssociations(GetTransitGatewayRouteTableAssociationsRequest): Awaitable<Errors\Result<GetTransitGatewayRouteTableAssociationsResult>>;
  public function GetTransitGatewayRouteTablePropagations(GetTransitGatewayRouteTablePropagationsRequest): Awaitable<Errors\Result<GetTransitGatewayRouteTablePropagationsResult>>;
  public function ImportClientVpnClientCertificateRevocationList(ImportClientVpnClientCertificateRevocationListRequest): Awaitable<Errors\Result<ImportClientVpnClientCertificateRevocationListResult>>;
  public function ImportImage(ImportImageRequest): Awaitable<Errors\Result<ImportImageResult>>;
  public function ImportInstance(ImportInstanceRequest): Awaitable<Errors\Result<ImportInstanceResult>>;
  public function ImportKeyPair(ImportKeyPairRequest): Awaitable<Errors\Result<ImportKeyPairResult>>;
  public function ImportSnapshot(ImportSnapshotRequest): Awaitable<Errors\Result<ImportSnapshotResult>>;
  public function ImportVolume(ImportVolumeRequest): Awaitable<Errors\Result<ImportVolumeResult>>;
  public function ModifyAvailabilityZoneGroup(ModifyAvailabilityZoneGroupRequest): Awaitable<Errors\Result<ModifyAvailabilityZoneGroupResult>>;
  public function ModifyCapacityReservation(ModifyCapacityReservationRequest): Awaitable<Errors\Result<ModifyCapacityReservationResult>>;
  public function ModifyClientVpnEndpoint(ModifyClientVpnEndpointRequest): Awaitable<Errors\Result<ModifyClientVpnEndpointResult>>;
  public function ModifyDefaultCreditSpecification(ModifyDefaultCreditSpecificationRequest): Awaitable<Errors\Result<ModifyDefaultCreditSpecificationResult>>;
  public function ModifyEbsDefaultKmsKeyId(ModifyEbsDefaultKmsKeyIdRequest): Awaitable<Errors\Result<ModifyEbsDefaultKmsKeyIdResult>>;
  public function ModifyFleet(ModifyFleetRequest): Awaitable<Errors\Result<ModifyFleetResult>>;
  public function ModifyFpgaImageAttribute(ModifyFpgaImageAttributeRequest): Awaitable<Errors\Result<ModifyFpgaImageAttributeResult>>;
  public function ModifyHosts(ModifyHostsRequest): Awaitable<Errors\Result<ModifyHostsResult>>;
  public function ModifyIdFormat(ModifyIdFormatRequest): Awaitable<Errors\Error>;
  public function ModifyIdentityIdFormat(ModifyIdentityIdFormatRequest): Awaitable<Errors\Error>;
  public function ModifyImageAttribute(ModifyImageAttributeRequest): Awaitable<Errors\Error>;
  public function ModifyInstanceAttribute(ModifyInstanceAttributeRequest): Awaitable<Errors\Error>;
  public function ModifyInstanceCapacityReservationAttributes(ModifyInstanceCapacityReservationAttributesRequest): Awaitable<Errors\Result<ModifyInstanceCapacityReservationAttributesResult>>;
  public function ModifyInstanceCreditSpecification(ModifyInstanceCreditSpecificationRequest): Awaitable<Errors\Result<ModifyInstanceCreditSpecificationResult>>;
  public function ModifyInstanceEventStartTime(ModifyInstanceEventStartTimeRequest): Awaitable<Errors\Result<ModifyInstanceEventStartTimeResult>>;
  public function ModifyInstanceMetadataOptions(ModifyInstanceMetadataOptionsRequest): Awaitable<Errors\Result<ModifyInstanceMetadataOptionsResult>>;
  public function ModifyInstancePlacement(ModifyInstancePlacementRequest): Awaitable<Errors\Result<ModifyInstancePlacementResult>>;
  public function ModifyLaunchTemplate(ModifyLaunchTemplateRequest): Awaitable<Errors\Result<ModifyLaunchTemplateResult>>;
  public function ModifyNetworkInterfaceAttribute(ModifyNetworkInterfaceAttributeRequest): Awaitable<Errors\Error>;
  public function ModifyReservedInstances(ModifyReservedInstancesRequest): Awaitable<Errors\Result<ModifyReservedInstancesResult>>;
  public function ModifySnapshotAttribute(ModifySnapshotAttributeRequest): Awaitable<Errors\Error>;
  public function ModifySpotFleetRequest(ModifySpotFleetRequestRequest): Awaitable<Errors\Result<ModifySpotFleetRequestResponse>>;
  public function ModifySubnetAttribute(ModifySubnetAttributeRequest): Awaitable<Errors\Error>;
  public function ModifyTrafficMirrorFilterNetworkServices(ModifyTrafficMirrorFilterNetworkServicesRequest): Awaitable<Errors\Result<ModifyTrafficMirrorFilterNetworkServicesResult>>;
  public function ModifyTrafficMirrorFilterRule(ModifyTrafficMirrorFilterRuleRequest): Awaitable<Errors\Result<ModifyTrafficMirrorFilterRuleResult>>;
  public function ModifyTrafficMirrorSession(ModifyTrafficMirrorSessionRequest): Awaitable<Errors\Result<ModifyTrafficMirrorSessionResult>>;
  public function ModifyTransitGatewayVpcAttachment(ModifyTransitGatewayVpcAttachmentRequest): Awaitable<Errors\Result<ModifyTransitGatewayVpcAttachmentResult>>;
  public function ModifyVolume(ModifyVolumeRequest): Awaitable<Errors\Result<ModifyVolumeResult>>;
  public function ModifyVolumeAttribute(ModifyVolumeAttributeRequest): Awaitable<Errors\Error>;
  public function ModifyVpcAttribute(ModifyVpcAttributeRequest): Awaitable<Errors\Error>;
  public function ModifyVpcEndpoint(ModifyVpcEndpointRequest): Awaitable<Errors\Result<ModifyVpcEndpointResult>>;
  public function ModifyVpcEndpointConnectionNotification(ModifyVpcEndpointConnectionNotificationRequest): Awaitable<Errors\Result<ModifyVpcEndpointConnectionNotificationResult>>;
  public function ModifyVpcEndpointServiceConfiguration(ModifyVpcEndpointServiceConfigurationRequest): Awaitable<Errors\Result<ModifyVpcEndpointServiceConfigurationResult>>;
  public function ModifyVpcEndpointServicePermissions(ModifyVpcEndpointServicePermissionsRequest): Awaitable<Errors\Result<ModifyVpcEndpointServicePermissionsResult>>;
  public function ModifyVpcPeeringConnectionOptions(ModifyVpcPeeringConnectionOptionsRequest): Awaitable<Errors\Result<ModifyVpcPeeringConnectionOptionsResult>>;
  public function ModifyVpcTenancy(ModifyVpcTenancyRequest): Awaitable<Errors\Result<ModifyVpcTenancyResult>>;
  public function ModifyVpnConnection(ModifyVpnConnectionRequest): Awaitable<Errors\Result<ModifyVpnConnectionResult>>;
  public function ModifyVpnTunnelCertificate(ModifyVpnTunnelCertificateRequest): Awaitable<Errors\Result<ModifyVpnTunnelCertificateResult>>;
  public function ModifyVpnTunnelOptions(ModifyVpnTunnelOptionsRequest): Awaitable<Errors\Result<ModifyVpnTunnelOptionsResult>>;
  public function MonitorInstances(MonitorInstancesRequest): Awaitable<Errors\Result<MonitorInstancesResult>>;
  public function MoveAddressToVpc(MoveAddressToVpcRequest): Awaitable<Errors\Result<MoveAddressToVpcResult>>;
  public function ProvisionByoipCidr(ProvisionByoipCidrRequest): Awaitable<Errors\Result<ProvisionByoipCidrResult>>;
  public function PurchaseHostReservation(PurchaseHostReservationRequest): Awaitable<Errors\Result<PurchaseHostReservationResult>>;
  public function PurchaseReservedInstancesOffering(PurchaseReservedInstancesOfferingRequest): Awaitable<Errors\Result<PurchaseReservedInstancesOfferingResult>>;
  public function PurchaseScheduledInstances(PurchaseScheduledInstancesRequest): Awaitable<Errors\Result<PurchaseScheduledInstancesResult>>;
  public function RebootInstances(RebootInstancesRequest): Awaitable<Errors\Error>;
  public function RegisterImage(RegisterImageRequest): Awaitable<Errors\Result<RegisterImageResult>>;
  public function RegisterInstanceEventNotificationAttributes(RegisterInstanceEventNotificationAttributesRequest): Awaitable<Errors\Result<RegisterInstanceEventNotificationAttributesResult>>;
  public function RegisterTransitGatewayMulticastGroupMembers(RegisterTransitGatewayMulticastGroupMembersRequest): Awaitable<Errors\Result<RegisterTransitGatewayMulticastGroupMembersResult>>;
  public function RegisterTransitGatewayMulticastGroupSources(RegisterTransitGatewayMulticastGroupSourcesRequest): Awaitable<Errors\Result<RegisterTransitGatewayMulticastGroupSourcesResult>>;
  public function RejectTransitGatewayPeeringAttachment(RejectTransitGatewayPeeringAttachmentRequest): Awaitable<Errors\Result<RejectTransitGatewayPeeringAttachmentResult>>;
  public function RejectTransitGatewayVpcAttachment(RejectTransitGatewayVpcAttachmentRequest): Awaitable<Errors\Result<RejectTransitGatewayVpcAttachmentResult>>;
  public function RejectVpcEndpointConnections(RejectVpcEndpointConnectionsRequest): Awaitable<Errors\Result<RejectVpcEndpointConnectionsResult>>;
  public function RejectVpcPeeringConnection(RejectVpcPeeringConnectionRequest): Awaitable<Errors\Result<RejectVpcPeeringConnectionResult>>;
  public function ReleaseAddress(ReleaseAddressRequest): Awaitable<Errors\Error>;
  public function ReleaseHosts(ReleaseHostsRequest): Awaitable<Errors\Result<ReleaseHostsResult>>;
  public function ReplaceIamInstanceProfileAssociation(ReplaceIamInstanceProfileAssociationRequest): Awaitable<Errors\Result<ReplaceIamInstanceProfileAssociationResult>>;
  public function ReplaceNetworkAclAssociation(ReplaceNetworkAclAssociationRequest): Awaitable<Errors\Result<ReplaceNetworkAclAssociationResult>>;
  public function ReplaceNetworkAclEntry(ReplaceNetworkAclEntryRequest): Awaitable<Errors\Error>;
  public function ReplaceRoute(ReplaceRouteRequest): Awaitable<Errors\Error>;
  public function ReplaceRouteTableAssociation(ReplaceRouteTableAssociationRequest): Awaitable<Errors\Result<ReplaceRouteTableAssociationResult>>;
  public function ReplaceTransitGatewayRoute(ReplaceTransitGatewayRouteRequest): Awaitable<Errors\Result<ReplaceTransitGatewayRouteResult>>;
  public function ReportInstanceStatus(ReportInstanceStatusRequest): Awaitable<Errors\Error>;
  public function RequestSpotFleet(RequestSpotFleetRequest): Awaitable<Errors\Result<RequestSpotFleetResponse>>;
  public function RequestSpotInstances(RequestSpotInstancesRequest): Awaitable<Errors\Result<RequestSpotInstancesResult>>;
  public function ResetEbsDefaultKmsKeyId(ResetEbsDefaultKmsKeyIdRequest): Awaitable<Errors\Result<ResetEbsDefaultKmsKeyIdResult>>;
  public function ResetFpgaImageAttribute(ResetFpgaImageAttributeRequest): Awaitable<Errors\Result<ResetFpgaImageAttributeResult>>;
  public function ResetImageAttribute(ResetImageAttributeRequest): Awaitable<Errors\Error>;
  public function ResetInstanceAttribute(ResetInstanceAttributeRequest): Awaitable<Errors\Error>;
  public function ResetNetworkInterfaceAttribute(ResetNetworkInterfaceAttributeRequest): Awaitable<Errors\Error>;
  public function ResetSnapshotAttribute(ResetSnapshotAttributeRequest): Awaitable<Errors\Error>;
  public function RestoreAddressToClassic(RestoreAddressToClassicRequest): Awaitable<Errors\Result<RestoreAddressToClassicResult>>;
  public function RevokeClientVpnIngress(RevokeClientVpnIngressRequest): Awaitable<Errors\Result<RevokeClientVpnIngressResult>>;
  public function RevokeSecurityGroupEgress(RevokeSecurityGroupEgressRequest): Awaitable<Errors\Error>;
  public function RevokeSecurityGroupIngress(RevokeSecurityGroupIngressRequest): Awaitable<Errors\Error>;
  public function RunInstances(RunInstancesRequest): Awaitable<Errors\Result<Reservation>>;
  public function RunScheduledInstances(RunScheduledInstancesRequest): Awaitable<Errors\Result<RunScheduledInstancesResult>>;
  public function SearchLocalGatewayRoutes(SearchLocalGatewayRoutesRequest): Awaitable<Errors\Result<SearchLocalGatewayRoutesResult>>;
  public function SearchTransitGatewayMulticastGroups(SearchTransitGatewayMulticastGroupsRequest): Awaitable<Errors\Result<SearchTransitGatewayMulticastGroupsResult>>;
  public function SearchTransitGatewayRoutes(SearchTransitGatewayRoutesRequest): Awaitable<Errors\Result<SearchTransitGatewayRoutesResult>>;
  public function SendDiagnosticInterrupt(SendDiagnosticInterruptRequest): Awaitable<Errors\Error>;
  public function StartInstances(StartInstancesRequest): Awaitable<Errors\Result<StartInstancesResult>>;
  public function StartVpcEndpointServicePrivateDnsVerification(StartVpcEndpointServicePrivateDnsVerificationRequest): Awaitable<Errors\Result<StartVpcEndpointServicePrivateDnsVerificationResult>>;
  public function StopInstances(StopInstancesRequest): Awaitable<Errors\Result<StopInstancesResult>>;
  public function TerminateClientVpnConnections(TerminateClientVpnConnectionsRequest): Awaitable<Errors\Result<TerminateClientVpnConnectionsResult>>;
  public function TerminateInstances(TerminateInstancesRequest): Awaitable<Errors\Result<TerminateInstancesResult>>;
  public function UnassignIpv6Addresses(UnassignIpv6AddressesRequest): Awaitable<Errors\Result<UnassignIpv6AddressesResult>>;
  public function UnassignPrivateIpAddresses(UnassignPrivateIpAddressesRequest): Awaitable<Errors\Error>;
  public function UnmonitorInstances(UnmonitorInstancesRequest): Awaitable<Errors\Result<UnmonitorInstancesResult>>;
  public function UpdateSecurityGroupRuleDescriptionsEgress(UpdateSecurityGroupRuleDescriptionsEgressRequest): Awaitable<Errors\Result<UpdateSecurityGroupRuleDescriptionsEgressResult>>;
  public function UpdateSecurityGroupRuleDescriptionsIngress(UpdateSecurityGroupRuleDescriptionsIngressRequest): Awaitable<Errors\Result<UpdateSecurityGroupRuleDescriptionsIngressResult>>;
  public function WithdrawByoipCidr(WithdrawByoipCidrRequest): Awaitable<Errors\Result<WithdrawByoipCidrResult>>;
}

class AcceptReservedInstancesExchangeQuoteRequest {
  public boolean $dry_run;
  public ReservedInstanceIdSet $reserved_instance_ids;
  public TargetConfigurationRequestSet $target_configurations;
}

class AcceptReservedInstancesExchangeQuoteResult {
  public string $exchange_id;
}

class AcceptTransitGatewayPeeringAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class AcceptTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class AcceptTransitGatewayVpcAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class AcceptTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class AcceptVpcEndpointConnectionsRequest {
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class AcceptVpcEndpointConnectionsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class AcceptVpcPeeringConnectionRequest {
  public boolean $dry_run;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class AcceptVpcPeeringConnectionResult {
  public VpcPeeringConnection $vpc_peering_connection;
}

class AccountAttribute {
  public string $attribute_name;
  public AccountAttributeValueList $attribute_values;
}

class AccountAttributeList {
}

class AccountAttributeName {
}

class AccountAttributeNameStringList {
}

class AccountAttributeValue {
  public string $attribute_value;
}

class AccountAttributeValueList {
}

class ActiveInstance {
  public InstanceHealthStatus $instance_health;
  public string $instance_id;
  public string $instance_type;
  public string $spot_instance_request_id;
}

class ActiveInstanceSet {
}

class ActivityStatus {
}

class Address {
  public string $allocation_id;
  public string $association_id;
  public string $customer_owned_ip;
  public string $customer_owned_ipv_4_pool;
  public DomainType $domain;
  public string $instance_id;
  public string $network_border_group;
  public string $network_interface_id;
  public string $network_interface_owner_id;
  public string $private_ip_address;
  public string $public_ip;
  public string $public_ipv_4_pool;
  public TagList $tags;
}

class AddressList {
}

class AdvertiseByoipCidrRequest {
  public string $cidr;
  public boolean $dry_run;
}

class AdvertiseByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class Affinity {
}

class AllocateAddressRequest {
  public string $address;
  public string $customer_owned_ipv_4_pool;
  public DomainType $domain;
  public boolean $dry_run;
  public string $network_border_group;
  public string $public_ipv_4_pool;
}

class AllocateAddressResult {
  public string $allocation_id;
  public string $customer_owned_ip;
  public string $customer_owned_ipv_4_pool;
  public DomainType $domain;
  public string $network_border_group;
  public string $public_ip;
  public string $public_ipv_4_pool;
}

class AllocateHostsRequest {
  public AutoPlacement $auto_placement;
  public string $availability_zone;
  public string $client_token;
  public HostRecovery $host_recovery;
  public string $instance_family;
  public string $instance_type;
  public int $quantity;
  public TagSpecificationList $tag_specifications;
}

class AllocateHostsResult {
  public ResponseHostIdList $host_ids;
}

class AllocationId {
}

class AllocationIdList {
}

class AllocationState {
}

class AllocationStrategy {
}

class AllowedPrincipal {
  public string $principal;
  public PrincipalType $principal_type;
}

class AllowedPrincipalSet {
}

class AllowsMultipleInstanceTypes {
}

class ApplySecurityGroupsToClientVpnTargetNetworkRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public VpcId $vpc_id;
}

class ApplySecurityGroupsToClientVpnTargetNetworkResult {
  public ClientVpnSecurityGroupIdSet $security_group_ids;
}

class ArchitectureType {
}

class ArchitectureTypeList {
}

class ArchitectureValues {
}

class AssignIpv6AddressesRequest {
  public int $ipv_6_address_count;
  public Ipv6AddressList $ipv_6_addresses;
  public NetworkInterfaceId $network_interface_id;
}

class AssignIpv6AddressesResult {
  public Ipv6AddressList $assigned_ipv_6_addresses;
  public string $network_interface_id;
}

class AssignPrivateIpAddressesRequest {
  public boolean $allow_reassignment;
  public NetworkInterfaceId $network_interface_id;
  public PrivateIpAddressStringList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
}

class AssignPrivateIpAddressesResult {
  public AssignedPrivateIpAddressList $assigned_private_ip_addresses;
  public string $network_interface_id;
}

class AssignedPrivateIpAddress {
  public string $private_ip_address;
}

class AssignedPrivateIpAddressList {
}

class AssociateAddressRequest {
  public AllocationId $allocation_id;
  public boolean $allow_reassociation;
  public boolean $dry_run;
  public InstanceId $instance_id;
  public NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public string $public_ip;
}

class AssociateAddressResult {
  public string $association_id;
}

class AssociateClientVpnTargetNetworkRequest {
  public string $client_token;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public SubnetId $subnet_id;
}

class AssociateClientVpnTargetNetworkResult {
  public string $association_id;
  public AssociationStatus $status;
}

class AssociateDhcpOptionsRequest {
  public DefaultingDhcpOptionsId $dhcp_options_id;
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class AssociateIamInstanceProfileRequest {
  public IamInstanceProfileSpecification $iam_instance_profile;
  public InstanceId $instance_id;
}

class AssociateIamInstanceProfileResult {
  public IamInstanceProfileAssociation $iam_instance_profile_association;
}

class AssociateRouteTableRequest {
  public boolean $dry_run;
  public RouteGatewayId $gateway_id;
  public RouteTableId $route_table_id;
  public SubnetId $subnet_id;
}

class AssociateRouteTableResult {
  public string $association_id;
  public RouteTableAssociationState $association_state;
}

class AssociateSubnetCidrBlockRequest {
  public string $ipv_6_cidr_block;
  public SubnetId $subnet_id;
}

class AssociateSubnetCidrBlockResult {
  public SubnetIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $subnet_id;
}

class AssociateTransitGatewayMulticastDomainRequest {
  public boolean $dry_run;
  public ValueStringList $subnet_ids;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class AssociateTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomainAssociations $associations;
}

class AssociateTransitGatewayRouteTableRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class AssociateTransitGatewayRouteTableResult {
  public TransitGatewayAssociation $association;
}

class AssociateVpcCidrBlockRequest {
  public boolean $amazon_provided_ipv_6_cidr_block;
  public string $cidr_block;
  public string $ipv_6_cidr_block;
  public string $ipv_6_cidr_block_network_border_group;
  public Ipv6PoolEc2Id $ipv_6_pool;
  public VpcId $vpc_id;
}

class AssociateVpcCidrBlockResult {
  public VpcCidrBlockAssociation $cidr_block_association;
  public VpcIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $vpc_id;
}

class AssociatedNetworkType {
}

class AssociatedTargetNetwork {
  public string $network_id;
  public AssociatedNetworkType $network_type;
}

class AssociatedTargetNetworkSet {
}

class AssociationIdList {
}

class AssociationStatus {
  public AssociationStatusCode $code;
  public string $message;
}

class AssociationStatusCode {
}

class AttachClassicLinkVpcRequest {
  public boolean $dry_run;
  public GroupIdStringList $groups;
  public InstanceId $instance_id;
  public VpcId $vpc_id;
}

class AttachClassicLinkVpcResult {
  public boolean $return;
}

class AttachInternetGatewayRequest {
  public boolean $dry_run;
  public InternetGatewayId $internet_gateway_id;
  public VpcId $vpc_id;
}

class AttachNetworkInterfaceRequest {
  public int $device_index;
  public boolean $dry_run;
  public InstanceId $instance_id;
  public NetworkInterfaceId $network_interface_id;
}

class AttachNetworkInterfaceResult {
  public string $attachment_id;
}

class AttachVolumeRequest {
  public string $device;
  public boolean $dry_run;
  public InstanceId $instance_id;
  public VolumeId $volume_id;
}

class AttachVpnGatewayRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
  public VpnGatewayId $vpn_gateway_id;
}

class AttachVpnGatewayResult {
  public VpcAttachment $vpc_attachment;
}

class AttachmentStatus {
}

class AttributeBooleanValue {
  public boolean $value;
}

class AttributeValue {
  public string $value;
}

class AuthorizationRule {
  public boolean $access_all;
  public string $client_vpn_endpoint_id;
  public string $description;
  public string $destination_cidr;
  public string $group_id;
  public ClientVpnAuthorizationRuleStatus $status;
}

class AuthorizationRuleSet {
}

class AuthorizeClientVpnIngressRequest {
  public string $access_group_id;
  public boolean $authorize_all_groups;
  public string $client_token;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $description;
  public boolean $dry_run;
  public string $target_network_cidr;
}

class AuthorizeClientVpnIngressResult {
  public ClientVpnAuthorizationRuleStatus $status;
}

class AuthorizeSecurityGroupEgressRequest {
  public string $cidr_ip;
  public boolean $dry_run;
  public int $from_port;
  public SecurityGroupId $group_id;
  public IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;
}

class AuthorizeSecurityGroupIngressRequest {
  public string $cidr_ip;
  public boolean $dry_run;
  public int $from_port;
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;
}

class AutoAcceptSharedAttachmentsValue {
}

class AutoPlacement {
}

class AutoRecoveryFlag {
}

class AvailabilityZone {
  public string $group_name;
  public AvailabilityZoneMessageList $messages;
  public string $network_border_group;
  public AvailabilityZoneOptInStatus $opt_in_status;
  public string $region_name;
  public AvailabilityZoneState $state;
  public string $zone_id;
  public string $zone_name;
}

class AvailabilityZoneList {
}

class AvailabilityZoneMessage {
  public string $message;
}

class AvailabilityZoneMessageList {
}

class AvailabilityZoneOptInStatus {
}

class AvailabilityZoneState {
}

class AvailabilityZoneStringList {
}

class AvailableCapacity {
  public AvailableInstanceCapacityList $available_instance_capacity;
  public int $available_v_cpus;
}

class AvailableInstanceCapacityList {
}

class BareMetalFlag {
}

class BatchState {
}

class BillingProductList {
}

class Blob {
}

class BlobAttributeValue {
  public Blob $value;
}

class BlockDeviceMapping {
  public string $device_name;
  public EbsBlockDevice $ebs;
  public string $no_device;
  public string $virtual_name;
}

class BlockDeviceMappingList {
}

class BlockDeviceMappingRequestList {
}

class Boolean {
}

class BundleId {
}

class BundleIdStringList {
}

class BundleInstanceRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
  public Storage $storage;
}

class BundleInstanceResult {
  public BundleTask $bundle_task;
}

class BundleTask {
  public string $bundle_id;
  public BundleTaskError $bundle_task_error;
  public string $instance_id;
  public string $progress;
  public DateTime $start_time;
  public BundleTaskState $state;
  public Storage $storage;
  public DateTime $update_time;
}

class BundleTaskError {
  public string $code;
  public string $message;
}

class BundleTaskList {
}

class BundleTaskState {
}

class BurstablePerformanceFlag {
}

class ByoipCidr {
  public string $cidr;
  public string $description;
  public ByoipCidrState $state;
  public string $status_message;
}

class ByoipCidrSet {
}

class ByoipCidrState {
}

class CancelBatchErrorCode {
}

class CancelBundleTaskRequest {
  public BundleId $bundle_id;
  public boolean $dry_run;
}

class CancelBundleTaskResult {
  public BundleTask $bundle_task;
}

class CancelCapacityReservationRequest {
  public CapacityReservationId $capacity_reservation_id;
  public boolean $dry_run;
}

class CancelCapacityReservationResult {
  public boolean $return;
}

class CancelConversionRequest {
  public ConversionTaskId $conversion_task_id;
  public boolean $dry_run;
  public string $reason_message;
}

class CancelExportTaskRequest {
  public ExportVmTaskId $export_task_id;
}

class CancelImportTaskRequest {
  public string $cancel_reason;
  public boolean $dry_run;
  public ImportTaskId $import_task_id;
}

class CancelImportTaskResult {
  public string $import_task_id;
  public string $previous_state;
  public string $state;
}

class CancelReservedInstancesListingRequest {
  public ReservedInstancesListingId $reserved_instances_listing_id;
}

class CancelReservedInstancesListingResult {
  public ReservedInstancesListingList $reserved_instances_listings;
}

class CancelSpotFleetRequestsError {
  public CancelBatchErrorCode $code;
  public string $message;
}

class CancelSpotFleetRequestsErrorItem {
  public CancelSpotFleetRequestsError $error;
  public string $spot_fleet_request_id;
}

class CancelSpotFleetRequestsErrorSet {
}

class CancelSpotFleetRequestsRequest {
  public boolean $dry_run;
  public SpotFleetRequestIdList $spot_fleet_request_ids;
  public boolean $terminate_instances;
}

class CancelSpotFleetRequestsResponse {
  public CancelSpotFleetRequestsSuccessSet $successful_fleet_requests;
  public CancelSpotFleetRequestsErrorSet $unsuccessful_fleet_requests;
}

class CancelSpotFleetRequestsSuccessItem {
  public BatchState $current_spot_fleet_request_state;
  public BatchState $previous_spot_fleet_request_state;
  public string $spot_fleet_request_id;
}

class CancelSpotFleetRequestsSuccessSet {
}

class CancelSpotInstanceRequestState {
}

class CancelSpotInstanceRequestsRequest {
  public boolean $dry_run;
  public SpotInstanceRequestIdList $spot_instance_request_ids;
}

class CancelSpotInstanceRequestsResult {
  public CancelledSpotInstanceRequestList $cancelled_spot_instance_requests;
}

class CancelledSpotInstanceRequest {
  public string $spot_instance_request_id;
  public CancelSpotInstanceRequestState $state;
}

class CancelledSpotInstanceRequestList {
}

class CapacityReservation {
  public string $availability_zone;
  public string $availability_zone_id;
  public int $available_instance_count;
  public string $capacity_reservation_arn;
  public string $capacity_reservation_id;
  public DateTime $create_date;
  public boolean $ebs_optimized;
  public DateTime $end_date;
  public EndDateType $end_date_type;
  public boolean $ephemeral_storage;
  public InstanceMatchCriteria $instance_match_criteria;
  public CapacityReservationInstancePlatform $instance_platform;
  public string $instance_type;
  public string $owner_id;
  public CapacityReservationState $state;
  public TagList $tags;
  public CapacityReservationTenancy $tenancy;
  public int $total_instance_count;
}

class CapacityReservationId {
}

class CapacityReservationIdSet {
}

class CapacityReservationInstancePlatform {
}

class CapacityReservationOptions {
  public FleetCapacityReservationUsageStrategy $usage_strategy;
}

class CapacityReservationOptionsRequest {
  public FleetCapacityReservationUsageStrategy $usage_strategy;
}

class CapacityReservationPreference {
}

class CapacityReservationSet {
}

class CapacityReservationSpecification {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTarget $capacity_reservation_target;
}

class CapacityReservationSpecificationResponse {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTargetResponse $capacity_reservation_target;
}

class CapacityReservationState {
}

class CapacityReservationTarget {
  public CapacityReservationId $capacity_reservation_id;
}

class CapacityReservationTargetResponse {
  public string $capacity_reservation_id;
}

class CapacityReservationTenancy {
}

class CertificateAuthentication {
  public string $client_root_certificate_chain;
}

class CertificateAuthenticationRequest {
  public string $client_root_certificate_chain_arn;
}

class CidrAuthorizationContext {
  public string $message;
  public string $signature;
}

class CidrBlock {
  public string $cidr_block;
}

class CidrBlockSet {
}

class ClassicLinkDnsSupport {
  public boolean $classic_link_dns_supported;
  public string $vpc_id;
}

class ClassicLinkDnsSupportList {
}

class ClassicLinkInstance {
  public GroupIdentifierList $groups;
  public string $instance_id;
  public TagList $tags;
  public string $vpc_id;
}

class ClassicLinkInstanceList {
}

class ClassicLoadBalancer {
  public string $name;
}

class ClassicLoadBalancers {
}

class ClassicLoadBalancersConfig {
  public ClassicLoadBalancers $classic_load_balancers;
}

class ClientCertificateRevocationListStatus {
  public ClientCertificateRevocationListStatusCode $code;
  public string $message;
}

class ClientCertificateRevocationListStatusCode {
}

class ClientData {
  public string $comment;
  public DateTime $upload_end;
  public Double $upload_size;
  public DateTime $upload_start;
}

class ClientVpnAssociationId {
}

class ClientVpnAuthentication {
  public DirectoryServiceAuthentication $active_directory;
  public CertificateAuthentication $mutual_authentication;
  public ClientVpnAuthenticationType $type;
}

class ClientVpnAuthenticationList {
}

class ClientVpnAuthenticationRequest {
  public DirectoryServiceAuthenticationRequest $active_directory;
  public CertificateAuthenticationRequest $mutual_authentication;
  public ClientVpnAuthenticationType $type;
}

class ClientVpnAuthenticationRequestList {
}

class ClientVpnAuthenticationType {
}

class ClientVpnAuthorizationRuleStatus {
  public ClientVpnAuthorizationRuleStatusCode $code;
  public string $message;
}

class ClientVpnAuthorizationRuleStatusCode {
}

class ClientVpnConnection {
  public string $client_ip;
  public string $client_vpn_endpoint_id;
  public string $common_name;
  public string $connection_end_time;
  public string $connection_established_time;
  public string $connection_id;
  public string $egress_bytes;
  public string $egress_packets;
  public string $ingress_bytes;
  public string $ingress_packets;
  public ClientVpnConnectionStatus $status;
  public string $timestamp;
  public string $username;
}

class ClientVpnConnectionSet {
}

class ClientVpnConnectionStatus {
  public ClientVpnConnectionStatusCode $code;
  public string $message;
}

class ClientVpnConnectionStatusCode {
}

class ClientVpnEndpoint {
  public AssociatedTargetNetworkSet $associated_target_networks;
  public ClientVpnAuthenticationList $authentication_options;
  public string $client_cidr_block;
  public string $client_vpn_endpoint_id;
  public ConnectionLogResponseOptions $connection_log_options;
  public string $creation_time;
  public string $deletion_time;
  public string $description;
  public string $dns_name;
  public ValueStringList $dns_servers;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public string $server_certificate_arn;
  public boolean $split_tunnel;
  public ClientVpnEndpointStatus $status;
  public TagList $tags;
  public TransportProtocol $transport_protocol;
  public VpcId $vpc_id;
  public int $vpn_port;
  public VpnProtocol $vpn_protocol;
}

class ClientVpnEndpointId {
}

class ClientVpnEndpointIdList {
}

class ClientVpnEndpointStatus {
  public ClientVpnEndpointStatusCode $code;
  public string $message;
}

class ClientVpnEndpointStatusCode {
}

class ClientVpnRoute {
  public string $client_vpn_endpoint_id;
  public string $description;
  public string $destination_cidr;
  public string $origin;
  public ClientVpnRouteStatus $status;
  public string $target_subnet;
  public string $type;
}

class ClientVpnRouteSet {
}

class ClientVpnRouteStatus {
  public ClientVpnRouteStatusCode $code;
  public string $message;
}

class ClientVpnRouteStatusCode {
}

class ClientVpnSecurityGroupIdSet {
}

class CoipAddressUsage {
  public string $allocation_id;
  public string $aws_account_id;
  public string $aws_service;
  public string $co_ip;
}

class CoipAddressUsageSet {
}

class CoipPool {
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public ValueStringList $pool_cidrs;
  public CoipPoolId $pool_id;
  public TagList $tags;
}

class CoipPoolId {
}

class CoipPoolIdSet {
}

class CoipPoolMaxResults {
}

class CoipPoolSet {
}

class ConfirmProductInstanceRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
  public string $product_code;
}

class ConfirmProductInstanceResult {
  public string $owner_id;
  public boolean $return;
}

class ConnectionLogOptions {
  public string $cloudwatch_log_group;
  public string $cloudwatch_log_stream;
  public boolean $enabled;
}

class ConnectionLogResponseOptions {
  public string $cloudwatch_log_group;
  public string $cloudwatch_log_stream;
  public boolean $enabled;
}

class ConnectionNotification {
  public ValueStringList $connection_events;
  public string $connection_notification_arn;
  public string $connection_notification_id;
  public ConnectionNotificationState $connection_notification_state;
  public ConnectionNotificationType $connection_notification_type;
  public string $service_id;
  public string $vpc_endpoint_id;
}

class ConnectionNotificationId {
}

class ConnectionNotificationSet {
}

class ConnectionNotificationState {
}

class ConnectionNotificationType {
}

class ContainerFormat {
}

class ConversionIdStringList {
}

class ConversionTask {
  public string $conversion_task_id;
  public string $expiration_time;
  public ImportInstanceTaskDetails $import_instance;
  public ImportVolumeTaskDetails $import_volume;
  public ConversionTaskState $state;
  public string $status_message;
  public TagList $tags;
}

class ConversionTaskId {
}

class ConversionTaskState {
}

class CopyFpgaImageRequest {
  public string $client_token;
  public string $description;
  public boolean $dry_run;
  public string $name;
  public FpgaImageId $source_fpga_image_id;
  public string $source_region;
}

class CopyFpgaImageResult {
  public string $fpga_image_id;
}

class CopyImageRequest {
  public string $client_token;
  public string $description;
  public boolean $dry_run;
  public boolean $encrypted;
  public KmsKeyId $kms_key_id;
  public string $name;
  public string $source_image_id;
  public string $source_region;
}

class CopyImageResult {
  public string $image_id;
}

class CopySnapshotRequest {
  public string $description;
  public string $destination_region;
  public boolean $dry_run;
  public boolean $encrypted;
  public KmsKeyId $kms_key_id;
  public string $presigned_url;
  public string $source_region;
  public string $source_snapshot_id;
  public TagSpecificationList $tag_specifications;
}

class CopySnapshotResult {
  public string $snapshot_id;
  public TagList $tags;
}

class CopyTagsFromSource {
}

class CoreCount {
}

class CoreCountList {
}

class CpuOptions {
  public int $core_count;
  public int $threads_per_core;
}

class CpuOptionsRequest {
  public int $core_count;
  public int $threads_per_core;
}

class CreateCapacityReservationRequest {
  public string $availability_zone;
  public string $availability_zone_id;
  public string $client_token;
  public boolean $dry_run;
  public boolean $ebs_optimized;
  public DateTime $end_date;
  public EndDateType $end_date_type;
  public boolean $ephemeral_storage;
  public int $instance_count;
  public InstanceMatchCriteria $instance_match_criteria;
  public CapacityReservationInstancePlatform $instance_platform;
  public string $instance_type;
  public TagSpecificationList $tag_specifications;
  public CapacityReservationTenancy $tenancy;
}

class CreateCapacityReservationResult {
  public CapacityReservation $capacity_reservation;
}

class CreateClientVpnEndpointRequest {
  public ClientVpnAuthenticationRequestList $authentication_options;
  public string $client_cidr_block;
  public string $client_token;
  public ConnectionLogOptions $connection_log_options;
  public string $description;
  public ValueStringList $dns_servers;
  public boolean $dry_run;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public string $server_certificate_arn;
  public boolean $split_tunnel;
  public TagSpecificationList $tag_specifications;
  public TransportProtocol $transport_protocol;
  public VpcId $vpc_id;
  public int $vpn_port;
}

class CreateClientVpnEndpointResult {
  public string $client_vpn_endpoint_id;
  public string $dns_name;
  public ClientVpnEndpointStatus $status;
}

class CreateClientVpnRouteRequest {
  public string $client_token;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $description;
  public string $destination_cidr_block;
  public boolean $dry_run;
  public SubnetId $target_vpc_subnet_id;
}

class CreateClientVpnRouteResult {
  public ClientVpnRouteStatus $status;
}

class CreateCustomerGatewayRequest {
  public int $bgp_asn;
  public string $certificate_arn;
  public string $device_name;
  public boolean $dry_run;
  public string $public_ip;
  public GatewayType $type;
}

class CreateCustomerGatewayResult {
  public CustomerGateway $customer_gateway;
}

class CreateDefaultSubnetRequest {
  public string $availability_zone;
  public boolean $dry_run;
}

class CreateDefaultSubnetResult {
  public Subnet $subnet;
}

class CreateDefaultVpcRequest {
  public boolean $dry_run;
}

class CreateDefaultVpcResult {
  public Vpc $vpc;
}

class CreateDhcpOptionsRequest {
  public NewDhcpConfigurationList $dhcp_configurations;
  public boolean $dry_run;
}

class CreateDhcpOptionsResult {
  public DhcpOptions $dhcp_options;
}

class CreateEgressOnlyInternetGatewayRequest {
  public string $client_token;
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class CreateEgressOnlyInternetGatewayResult {
  public string $client_token;
  public EgressOnlyInternetGateway $egress_only_internet_gateway;
}

class CreateFleetError {
  public string $error_code;
  public string $error_message;
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
}

class CreateFleetErrorsSet {
}

class CreateFleetInstance {
  public InstanceIdsSet $instance_ids;
  public InstanceType $instance_type;
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
  public PlatformValues $platform;
}

class CreateFleetInstancesSet {
}

class CreateFleetRequest {
  public string $client_token;
  public boolean $dry_run;
  public FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public FleetLaunchTemplateConfigListRequest $launch_template_configs;
  public OnDemandOptionsRequest $on_demand_options;
  public boolean $replace_unhealthy_instances;
  public SpotOptionsRequest $spot_options;
  public TagSpecificationList $tag_specifications;
  public TargetCapacitySpecificationRequest $target_capacity_specification;
  public boolean $terminate_instances_with_expiration;
  public FleetType $type;
  public DateTime $valid_from;
  public DateTime $valid_until;
}

class CreateFleetResult {
  public CreateFleetErrorsSet $errors;
  public FleetId $fleet_id;
  public CreateFleetInstancesSet $instances;
}

class CreateFlowLogsRequest {
  public string $client_token;
  public string $deliver_logs_permission_arn;
  public boolean $dry_run;
  public string $log_destination;
  public LogDestinationType $log_destination_type;
  public string $log_format;
  public string $log_group_name;
  public int $max_aggregation_interval;
  public FlowLogResourceIds $resource_ids;
  public FlowLogsResourceType $resource_type;
  public TagSpecificationList $tag_specifications;
  public TrafficType $traffic_type;
}

class CreateFlowLogsResult {
  public string $client_token;
  public ValueStringList $flow_log_ids;
  public UnsuccessfulItemSet $unsuccessful;
}

class CreateFpgaImageRequest {
  public string $client_token;
  public string $description;
  public boolean $dry_run;
  public StorageLocation $input_storage_location;
  public StorageLocation $logs_storage_location;
  public string $name;
  public TagSpecificationList $tag_specifications;
}

class CreateFpgaImageResult {
  public string $fpga_image_global_id;
  public string $fpga_image_id;
}

class CreateImageRequest {
  public BlockDeviceMappingRequestList $block_device_mappings;
  public string $description;
  public boolean $dry_run;
  public InstanceId $instance_id;
  public string $name;
  public boolean $no_reboot;
}

class CreateImageResult {
  public string $image_id;
}

class CreateInstanceExportTaskRequest {
  public string $description;
  public ExportToS3TaskSpecification $export_to_s_3_task;
  public InstanceId $instance_id;
  public ExportEnvironment $target_environment;
}

class CreateInstanceExportTaskResult {
  public ExportTask $export_task;
}

class CreateInternetGatewayRequest {
  public boolean $dry_run;
}

class CreateInternetGatewayResult {
  public InternetGateway $internet_gateway;
}

class CreateKeyPairRequest {
  public boolean $dry_run;
  public string $key_name;
  public TagSpecificationList $tag_specifications;
}

class CreateLaunchTemplateRequest {
  public string $client_token;
  public boolean $dry_run;
  public RequestLaunchTemplateData $launch_template_data;
  public LaunchTemplateName $launch_template_name;
  public TagSpecificationList $tag_specifications;
  public VersionDescription $version_description;
}

class CreateLaunchTemplateResult {
  public LaunchTemplate $launch_template;
}

class CreateLaunchTemplateVersionRequest {
  public string $client_token;
  public boolean $dry_run;
  public RequestLaunchTemplateData $launch_template_data;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public string $source_version;
  public VersionDescription $version_description;
}

class CreateLaunchTemplateVersionResult {
  public LaunchTemplateVersion $launch_template_version;
}

class CreateLocalGatewayRouteRequest {
  public string $destination_cidr_block;
  public boolean $dry_run;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
}

class CreateLocalGatewayRouteResult {
  public LocalGatewayRoute $route;
}

class CreateLocalGatewayRouteTableVpcAssociationRequest {
  public boolean $dry_run;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public VpcId $vpc_id;
}

class CreateLocalGatewayRouteTableVpcAssociationResult {
  public LocalGatewayRouteTableVpcAssociation $local_gateway_route_table_vpc_association;
}

class CreateNatGatewayRequest {
  public AllocationId $allocation_id;
  public string $client_token;
  public boolean $dry_run;
  public SubnetId $subnet_id;
  public TagSpecificationList $tag_specifications;
}

class CreateNatGatewayResult {
  public string $client_token;
  public NatGateway $nat_gateway;
}

class CreateNetworkAclEntryRequest {
  public string $cidr_block;
  public boolean $dry_run;
  public boolean $egress;
  public IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
  public NetworkAclId $network_acl_id;
  public PortRange $port_range;
  public string $protocol;
  public RuleAction $rule_action;
  public int $rule_number;
}

class CreateNetworkAclRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class CreateNetworkAclResult {
  public NetworkAcl $network_acl;
}

class CreateNetworkInterfacePermissionRequest {
  public string $aws_account_id;
  public string $aws_service;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
  public InterfacePermissionType $permission;
}

class CreateNetworkInterfacePermissionResult {
  public NetworkInterfacePermission $interface_permission;
}

class CreateNetworkInterfaceRequest {
  public string $description;
  public boolean $dry_run;
  public SecurityGroupIdStringList $groups;
  public NetworkInterfaceCreationType $interface_type;
  public int $ipv_6_address_count;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public string $private_ip_address;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public SubnetId $subnet_id;
}

class CreateNetworkInterfaceResult {
  public NetworkInterface $network_interface;
}

class CreatePlacementGroupRequest {
  public boolean $dry_run;
  public string $group_name;
  public int $partition_count;
  public PlacementStrategy $strategy;
  public TagSpecificationList $tag_specifications;
}

class CreatePlacementGroupResult {
  public PlacementGroup $placement_group;
}

class CreateReservedInstancesListingRequest {
  public string $client_token;
  public int $instance_count;
  public PriceScheduleSpecificationList $price_schedules;
  public ReservationId $reserved_instances_id;
}

class CreateReservedInstancesListingResult {
  public ReservedInstancesListingList $reserved_instances_listings;
}

class CreateRouteRequest {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public boolean $dry_run;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public RouteGatewayId $gateway_id;
  public InstanceId $instance_id;
  public LocalGatewayId $local_gateway_id;
  public NatGatewayId $nat_gateway_id;
  public NetworkInterfaceId $network_interface_id;
  public RouteTableId $route_table_id;
  public TransitGatewayId $transit_gateway_id;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class CreateRouteResult {
  public boolean $return;
}

class CreateRouteTableRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class CreateRouteTableResult {
  public RouteTable $route_table;
}

class CreateSecurityGroupRequest {
  public string $description;
  public boolean $dry_run;
  public string $group_name;
  public VpcId $vpc_id;
}

class CreateSecurityGroupResult {
  public string $group_id;
}

class CreateSnapshotRequest {
  public string $description;
  public boolean $dry_run;
  public TagSpecificationList $tag_specifications;
  public VolumeId $volume_id;
}

class CreateSnapshotsRequest {
  public CopyTagsFromSource $copy_tags_from_source;
  public string $description;
  public boolean $dry_run;
  public InstanceSpecification $instance_specification;
  public TagSpecificationList $tag_specifications;
}

class CreateSnapshotsResult {
  public SnapshotSet $snapshots;
}

class CreateSpotDatafeedSubscriptionRequest {
  public string $bucket;
  public boolean $dry_run;
  public string $prefix;
}

class CreateSpotDatafeedSubscriptionResult {
  public SpotDatafeedSubscription $spot_datafeed_subscription;
}

class CreateSubnetRequest {
  public string $availability_zone;
  public string $availability_zone_id;
  public string $cidr_block;
  public boolean $dry_run;
  public string $ipv_6_cidr_block;
  public string $outpost_arn;
  public VpcId $vpc_id;
}

class CreateSubnetResult {
  public Subnet $subnet;
}

class CreateTagsRequest {
  public boolean $dry_run;
  public ResourceIdList $resources;
  public TagList $tags;
}

class CreateTrafficMirrorFilterRequest {
  public string $client_token;
  public string $description;
  public boolean $dry_run;
  public TagSpecificationList $tag_specifications;
}

class CreateTrafficMirrorFilterResult {
  public string $client_token;
  public TrafficMirrorFilter $traffic_mirror_filter;
}

class CreateTrafficMirrorFilterRuleRequest {
  public string $client_token;
  public string $description;
  public string $destination_cidr_block;
  public TrafficMirrorPortRangeRequest $destination_port_range;
  public boolean $dry_run;
  public int $protocol;
  public TrafficMirrorRuleAction $rule_action;
  public int $rule_number;
  public string $source_cidr_block;
  public TrafficMirrorPortRangeRequest $source_port_range;
  public TrafficDirection $traffic_direction;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
}

class CreateTrafficMirrorFilterRuleResult {
  public string $client_token;
  public TrafficMirrorFilterRule $traffic_mirror_filter_rule;
}

class CreateTrafficMirrorSessionRequest {
  public string $client_token;
  public string $description;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
  public int $packet_length;
  public int $session_number;
  public TagSpecificationList $tag_specifications;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
  public TrafficMirrorTargetId $traffic_mirror_target_id;
  public int $virtual_network_id;
}

class CreateTrafficMirrorSessionResult {
  public string $client_token;
  public TrafficMirrorSession $traffic_mirror_session;
}

class CreateTrafficMirrorTargetRequest {
  public string $client_token;
  public string $description;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
  public string $network_load_balancer_arn;
  public TagSpecificationList $tag_specifications;
}

class CreateTrafficMirrorTargetResult {
  public string $client_token;
  public TrafficMirrorTarget $traffic_mirror_target;
}

class CreateTransitGatewayMulticastDomainRequest {
  public boolean $dry_run;
  public TagSpecificationList $tag_specifications;
  public TransitGatewayId $transit_gateway_id;
}

class CreateTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomain $transit_gateway_multicast_domain;
}

class CreateTransitGatewayPeeringAttachmentRequest {
  public boolean $dry_run;
  public string $peer_account_id;
  public string $peer_region;
  public TransitAssociationGatewayId $peer_transit_gateway_id;
  public TagSpecificationList $tag_specifications;
  public TransitGatewayId $transit_gateway_id;
}

class CreateTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class CreateTransitGatewayRequest {
  public string $description;
  public boolean $dry_run;
  public TransitGatewayRequestOptions $options;
  public TagSpecificationList $tag_specifications;
}

class CreateTransitGatewayResult {
  public TransitGateway $transit_gateway;
}

class CreateTransitGatewayRouteRequest {
  public boolean $blackhole;
  public string $destination_cidr_block;
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class CreateTransitGatewayRouteResult {
  public TransitGatewayRoute $route;
}

class CreateTransitGatewayRouteTableRequest {
  public boolean $dry_run;
  public TagSpecificationList $tag_specifications;
  public TransitGatewayId $transit_gateway_id;
}

class CreateTransitGatewayRouteTableResult {
  public TransitGatewayRouteTable $transit_gateway_route_table;
}

class CreateTransitGatewayVpcAttachmentRequest {
  public boolean $dry_run;
  public CreateTransitGatewayVpcAttachmentRequestOptions $options;
  public TransitGatewaySubnetIdList $subnet_ids;
  public TagSpecificationList $tag_specifications;
  public TransitGatewayId $transit_gateway_id;
  public VpcId $vpc_id;
}

class CreateTransitGatewayVpcAttachmentRequestOptions {
  public DnsSupportValue $dns_support;
  public Ipv6SupportValue $ipv_6_support;
}

class CreateTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class CreateVolumePermission {
  public PermissionGroup $group;
  public string $user_id;
}

class CreateVolumePermissionList {
}

class CreateVolumePermissionModifications {
  public CreateVolumePermissionList $add;
  public CreateVolumePermissionList $remove;
}

class CreateVolumeRequest {
  public string $availability_zone;
  public boolean $dry_run;
  public boolean $encrypted;
  public int $iops;
  public KmsKeyId $kms_key_id;
  public boolean $multi_attach_enabled;
  public string $outpost_arn;
  public int $size;
  public SnapshotId $snapshot_id;
  public TagSpecificationList $tag_specifications;
  public VolumeType $volume_type;
}

class CreateVpcEndpointConnectionNotificationRequest {
  public string $client_token;
  public ValueStringList $connection_events;
  public string $connection_notification_arn;
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public VpcEndpointId $vpc_endpoint_id;
}

class CreateVpcEndpointConnectionNotificationResult {
  public string $client_token;
  public ConnectionNotification $connection_notification;
}

class CreateVpcEndpointRequest {
  public string $client_token;
  public boolean $dry_run;
  public string $policy_document;
  public boolean $private_dns_enabled;
  public VpcEndpointRouteTableIdList $route_table_ids;
  public VpcEndpointSecurityGroupIdList $security_group_ids;
  public string $service_name;
  public VpcEndpointSubnetIdList $subnet_ids;
  public TagSpecificationList $tag_specifications;
  public VpcEndpointType $vpc_endpoint_type;
  public VpcId $vpc_id;
}

class CreateVpcEndpointResult {
  public string $client_token;
  public VpcEndpoint $vpc_endpoint;
}

class CreateVpcEndpointServiceConfigurationRequest {
  public boolean $acceptance_required;
  public string $client_token;
  public boolean $dry_run;
  public ValueStringList $network_load_balancer_arns;
  public string $private_dns_name;
  public TagSpecificationList $tag_specifications;
}

class CreateVpcEndpointServiceConfigurationResult {
  public string $client_token;
  public ServiceConfiguration $service_configuration;
}

class CreateVpcPeeringConnectionRequest {
  public boolean $dry_run;
  public string $peer_owner_id;
  public string $peer_region;
  public string $peer_vpc_id;
  public VpcId $vpc_id;
}

class CreateVpcPeeringConnectionResult {
  public VpcPeeringConnection $vpc_peering_connection;
}

class CreateVpcRequest {
  public boolean $amazon_provided_ipv_6_cidr_block;
  public string $cidr_block;
  public boolean $dry_run;
  public Tenancy $instance_tenancy;
  public string $ipv_6_cidr_block;
  public string $ipv_6_cidr_block_network_border_group;
  public Ipv6PoolEc2Id $ipv_6_pool;
}

class CreateVpcResult {
  public Vpc $vpc;
}

class CreateVpnConnectionRequest {
  public CustomerGatewayId $customer_gateway_id;
  public boolean $dry_run;
  public VpnConnectionOptionsSpecification $options;
  public TransitGatewayId $transit_gateway_id;
  public string $type;
  public VpnGatewayId $vpn_gateway_id;
}

class CreateVpnConnectionResult {
  public VpnConnection $vpn_connection;
}

class CreateVpnConnectionRouteRequest {
  public string $destination_cidr_block;
  public VpnConnectionId $vpn_connection_id;
}

class CreateVpnGatewayRequest {
  public Long $amazon_side_asn;
  public string $availability_zone;
  public boolean $dry_run;
  public GatewayType $type;
}

class CreateVpnGatewayResult {
  public VpnGateway $vpn_gateway;
}

class CreditSpecification {
  public string $cpu_credits;
}

class CreditSpecificationRequest {
  public string $cpu_credits;
}

class CurrencyCodeValues {
}

class CurrentGenerationFlag {
}

class CustomerGateway {
  public string $bgp_asn;
  public string $certificate_arn;
  public string $customer_gateway_id;
  public string $device_name;
  public string $ip_address;
  public string $state;
  public TagList $tags;
  public string $type;
}

class CustomerGatewayId {
}

class CustomerGatewayIdStringList {
}

class CustomerGatewayList {
}

class DITMaxResults {
}

class DITOMaxResults {
}

class DatafeedSubscriptionState {
}

class DateTime {
}

class DedicatedHostFlag {
}

class DedicatedHostId {
}

class DefaultRouteTableAssociationValue {
}

class DefaultRouteTablePropagationValue {
}

class DefaultTargetCapacityType {
}

class DefaultingDhcpOptionsId {
}

class DeleteClientVpnEndpointRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
}

class DeleteClientVpnEndpointResult {
  public ClientVpnEndpointStatus $status;
}

class DeleteClientVpnRouteRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $destination_cidr_block;
  public boolean $dry_run;
  public SubnetId $target_vpc_subnet_id;
}

class DeleteClientVpnRouteResult {
  public ClientVpnRouteStatus $status;
}

class DeleteCustomerGatewayRequest {
  public CustomerGatewayId $customer_gateway_id;
  public boolean $dry_run;
}

class DeleteDhcpOptionsRequest {
  public DhcpOptionsId $dhcp_options_id;
  public boolean $dry_run;
}

class DeleteEgressOnlyInternetGatewayRequest {
  public boolean $dry_run;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
}

class DeleteEgressOnlyInternetGatewayResult {
  public boolean $return_code;
}

class DeleteFleetError {
  public DeleteFleetErrorCode $code;
  public string $message;
}

class DeleteFleetErrorCode {
}

class DeleteFleetErrorItem {
  public DeleteFleetError $error;
  public FleetId $fleet_id;
}

class DeleteFleetErrorSet {
}

class DeleteFleetSuccessItem {
  public FleetStateCode $current_fleet_state;
  public FleetId $fleet_id;
  public FleetStateCode $previous_fleet_state;
}

class DeleteFleetSuccessSet {
}

class DeleteFleetsRequest {
  public boolean $dry_run;
  public FleetIdSet $fleet_ids;
  public boolean $terminate_instances;
}

class DeleteFleetsResult {
  public DeleteFleetSuccessSet $successful_fleet_deletions;
  public DeleteFleetErrorSet $unsuccessful_fleet_deletions;
}

class DeleteFlowLogsRequest {
  public boolean $dry_run;
  public FlowLogIdList $flow_log_ids;
}

class DeleteFlowLogsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class DeleteFpgaImageRequest {
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
}

class DeleteFpgaImageResult {
  public boolean $return;
}

class DeleteInternetGatewayRequest {
  public boolean $dry_run;
  public InternetGatewayId $internet_gateway_id;
}

class DeleteKeyPairRequest {
  public boolean $dry_run;
  public KeyPairName $key_name;
  public KeyPairId $key_pair_id;
}

class DeleteLaunchTemplateRequest {
  public boolean $dry_run;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
}

class DeleteLaunchTemplateResult {
  public LaunchTemplate $launch_template;
}

class DeleteLaunchTemplateVersionsRequest {
  public boolean $dry_run;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public VersionStringList $versions;
}

class DeleteLaunchTemplateVersionsResponseErrorItem {
  public string $launch_template_id;
  public string $launch_template_name;
  public ResponseError $response_error;
  public Long $version_number;
}

class DeleteLaunchTemplateVersionsResponseErrorSet {
}

class DeleteLaunchTemplateVersionsResponseSuccessItem {
  public string $launch_template_id;
  public string $launch_template_name;
  public Long $version_number;
}

class DeleteLaunchTemplateVersionsResponseSuccessSet {
}

class DeleteLaunchTemplateVersionsResult {
  public DeleteLaunchTemplateVersionsResponseSuccessSet $successfully_deleted_launch_template_versions;
  public DeleteLaunchTemplateVersionsResponseErrorSet $unsuccessfully_deleted_launch_template_versions;
}

class DeleteLocalGatewayRouteRequest {
  public string $destination_cidr_block;
  public boolean $dry_run;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
}

class DeleteLocalGatewayRouteResult {
  public LocalGatewayRoute $route;
}

class DeleteLocalGatewayRouteTableVpcAssociationRequest {
  public boolean $dry_run;
  public LocalGatewayRouteTableVpcAssociationId $local_gateway_route_table_vpc_association_id;
}

class DeleteLocalGatewayRouteTableVpcAssociationResult {
  public LocalGatewayRouteTableVpcAssociation $local_gateway_route_table_vpc_association;
}

class DeleteNatGatewayRequest {
  public boolean $dry_run;
  public NatGatewayId $nat_gateway_id;
}

class DeleteNatGatewayResult {
  public string $nat_gateway_id;
}

class DeleteNetworkAclEntryRequest {
  public boolean $dry_run;
  public boolean $egress;
  public NetworkAclId $network_acl_id;
  public int $rule_number;
}

class DeleteNetworkAclRequest {
  public boolean $dry_run;
  public NetworkAclId $network_acl_id;
}

class DeleteNetworkInterfacePermissionRequest {
  public boolean $dry_run;
  public boolean $force;
  public NetworkInterfacePermissionId $network_interface_permission_id;
}

class DeleteNetworkInterfacePermissionResult {
  public boolean $return;
}

class DeleteNetworkInterfaceRequest {
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
}

class DeletePlacementGroupRequest {
  public boolean $dry_run;
  public PlacementGroupName $group_name;
}

class DeleteQueuedReservedInstancesError {
  public DeleteQueuedReservedInstancesErrorCode $code;
  public string $message;
}

class DeleteQueuedReservedInstancesErrorCode {
}

class DeleteQueuedReservedInstancesIdList {
}

class DeleteQueuedReservedInstancesRequest {
  public boolean $dry_run;
  public DeleteQueuedReservedInstancesIdList $reserved_instances_ids;
}

class DeleteQueuedReservedInstancesResult {
  public FailedQueuedPurchaseDeletionSet $failed_queued_purchase_deletions;
  public SuccessfulQueuedPurchaseDeletionSet $successful_queued_purchase_deletions;
}

class DeleteRouteRequest {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public boolean $dry_run;
  public RouteTableId $route_table_id;
}

class DeleteRouteTableRequest {
  public boolean $dry_run;
  public RouteTableId $route_table_id;
}

class DeleteSecurityGroupRequest {
  public boolean $dry_run;
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
}

class DeleteSnapshotRequest {
  public boolean $dry_run;
  public SnapshotId $snapshot_id;
}

class DeleteSpotDatafeedSubscriptionRequest {
  public boolean $dry_run;
}

class DeleteSubnetRequest {
  public boolean $dry_run;
  public SubnetId $subnet_id;
}

class DeleteTagsRequest {
  public boolean $dry_run;
  public ResourceIdList $resources;
  public TagList $tags;
}

class DeleteTrafficMirrorFilterRequest {
  public boolean $dry_run;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
}

class DeleteTrafficMirrorFilterResult {
  public string $traffic_mirror_filter_id;
}

class DeleteTrafficMirrorFilterRuleRequest {
  public boolean $dry_run;
  public TrafficMirrorFilterRuleId $traffic_mirror_filter_rule_id;
}

class DeleteTrafficMirrorFilterRuleResult {
  public string $traffic_mirror_filter_rule_id;
}

class DeleteTrafficMirrorSessionRequest {
  public boolean $dry_run;
  public TrafficMirrorSessionId $traffic_mirror_session_id;
}

class DeleteTrafficMirrorSessionResult {
  public string $traffic_mirror_session_id;
}

class DeleteTrafficMirrorTargetRequest {
  public boolean $dry_run;
  public TrafficMirrorTargetId $traffic_mirror_target_id;
}

class DeleteTrafficMirrorTargetResult {
  public string $traffic_mirror_target_id;
}

class DeleteTransitGatewayMulticastDomainRequest {
  public boolean $dry_run;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class DeleteTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomain $transit_gateway_multicast_domain;
}

class DeleteTransitGatewayPeeringAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class DeleteTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class DeleteTransitGatewayRequest {
  public boolean $dry_run;
  public TransitGatewayId $transit_gateway_id;
}

class DeleteTransitGatewayResult {
  public TransitGateway $transit_gateway;
}

class DeleteTransitGatewayRouteRequest {
  public string $destination_cidr_block;
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class DeleteTransitGatewayRouteResult {
  public TransitGatewayRoute $route;
}

class DeleteTransitGatewayRouteTableRequest {
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class DeleteTransitGatewayRouteTableResult {
  public TransitGatewayRouteTable $transit_gateway_route_table;
}

class DeleteTransitGatewayVpcAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class DeleteTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class DeleteVolumeRequest {
  public boolean $dry_run;
  public VolumeId $volume_id;
}

class DeleteVpcEndpointConnectionNotificationsRequest {
  public ValueStringList $connection_notification_ids;
  public boolean $dry_run;
}

class DeleteVpcEndpointConnectionNotificationsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class DeleteVpcEndpointServiceConfigurationsRequest {
  public boolean $dry_run;
  public VpcEndpointServiceIdList $service_ids;
}

class DeleteVpcEndpointServiceConfigurationsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class DeleteVpcEndpointsRequest {
  public boolean $dry_run;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class DeleteVpcEndpointsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class DeleteVpcPeeringConnectionRequest {
  public boolean $dry_run;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class DeleteVpcPeeringConnectionResult {
  public boolean $return;
}

class DeleteVpcRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class DeleteVpnConnectionRequest {
  public boolean $dry_run;
  public VpnConnectionId $vpn_connection_id;
}

class DeleteVpnConnectionRouteRequest {
  public string $destination_cidr_block;
  public VpnConnectionId $vpn_connection_id;
}

class DeleteVpnGatewayRequest {
  public boolean $dry_run;
  public VpnGatewayId $vpn_gateway_id;
}

class DeprovisionByoipCidrRequest {
  public string $cidr;
  public boolean $dry_run;
}

class DeprovisionByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class DeregisterImageRequest {
  public boolean $dry_run;
  public ImageId $image_id;
}

class DeregisterInstanceEventNotificationAttributesRequest {
  public boolean $dry_run;
  public DeregisterInstanceTagAttributeRequest $instance_tag_attribute;
}

class DeregisterInstanceEventNotificationAttributesResult {
  public InstanceTagNotificationAttribute $instance_tag_attribute;
}

class DeregisterInstanceTagAttributeRequest {
  public boolean $include_all_tags_of_instance;
  public InstanceTagKeySet $instance_tag_keys;
}

class DeregisterTransitGatewayMulticastGroupMembersRequest {
  public boolean $dry_run;
  public string $group_ip_address;
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class DeregisterTransitGatewayMulticastGroupMembersResult {
  public TransitGatewayMulticastDeregisteredGroupMembers $deregistered_multicast_group_members;
}

class DeregisterTransitGatewayMulticastGroupSourcesRequest {
  public boolean $dry_run;
  public string $group_ip_address;
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class DeregisterTransitGatewayMulticastGroupSourcesResult {
  public TransitGatewayMulticastDeregisteredGroupSources $deregistered_multicast_group_sources;
}

class DescribeAccountAttributesRequest {
  public AccountAttributeNameStringList $attribute_names;
  public boolean $dry_run;
}

class DescribeAccountAttributesResult {
  public AccountAttributeList $account_attributes;
}

class DescribeAddressesRequest {
  public AllocationIdList $allocation_ids;
  public boolean $dry_run;
  public FilterList $filters;
  public PublicIpStringList $public_ips;
}

class DescribeAddressesResult {
  public AddressList $addresses;
}

class DescribeAggregateIdFormatRequest {
  public boolean $dry_run;
}

class DescribeAggregateIdFormatResult {
  public IdFormatList $statuses;
  public boolean $use_long_ids_aggregated;
}

class DescribeAvailabilityZonesRequest {
  public boolean $all_availability_zones;
  public boolean $dry_run;
  public FilterList $filters;
  public ZoneIdStringList $zone_ids;
  public ZoneNameStringList $zone_names;
}

class DescribeAvailabilityZonesResult {
  public AvailabilityZoneList $availability_zones;
}

class DescribeBundleTasksRequest {
  public BundleIdStringList $bundle_ids;
  public boolean $dry_run;
  public FilterList $filters;
}

class DescribeBundleTasksResult {
  public BundleTaskList $bundle_tasks;
}

class DescribeByoipCidrsMaxResults {
}

class DescribeByoipCidrsRequest {
  public boolean $dry_run;
  public DescribeByoipCidrsMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeByoipCidrsResult {
  public ByoipCidrSet $byoip_cidrs;
  public string $next_token;
}

class DescribeCapacityReservationsMaxResults {
}

class DescribeCapacityReservationsRequest {
  public CapacityReservationIdSet $capacity_reservation_ids;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeCapacityReservationsMaxResults $max_results;
  public string $next_token;
}

class DescribeCapacityReservationsResult {
  public CapacityReservationSet $capacity_reservations;
  public string $next_token;
}

class DescribeClassicLinkInstancesMaxResults {
}

class DescribeClassicLinkInstancesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public InstanceIdStringList $instance_ids;
  public DescribeClassicLinkInstancesMaxResults $max_results;
  public string $next_token;
}

class DescribeClassicLinkInstancesResult {
  public ClassicLinkInstanceList $instances;
  public string $next_token;
}

class DescribeClientVpnAuthorizationRulesMaxResults {
}

class DescribeClientVpnAuthorizationRulesRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeClientVpnAuthorizationRulesMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeClientVpnAuthorizationRulesResult {
  public AuthorizationRuleSet $authorization_rules;
  public NextToken $next_token;
}

class DescribeClientVpnConnectionsMaxResults {
}

class DescribeClientVpnConnectionsRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeClientVpnConnectionsMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeClientVpnConnectionsResult {
  public ClientVpnConnectionSet $connections;
  public NextToken $next_token;
}

class DescribeClientVpnEndpointMaxResults {
}

class DescribeClientVpnEndpointsRequest {
  public ClientVpnEndpointIdList $client_vpn_endpoint_ids;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeClientVpnEndpointMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeClientVpnEndpointsResult {
  public EndpointSet $client_vpn_endpoints;
  public NextToken $next_token;
}

class DescribeClientVpnRoutesMaxResults {
}

class DescribeClientVpnRoutesRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeClientVpnRoutesMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeClientVpnRoutesResult {
  public NextToken $next_token;
  public ClientVpnRouteSet $routes;
}

class DescribeClientVpnTargetNetworksMaxResults {
}

class DescribeClientVpnTargetNetworksRequest {
  public ValueStringList $association_ids;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeClientVpnTargetNetworksMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeClientVpnTargetNetworksResult {
  public TargetNetworkSet $client_vpn_target_networks;
  public NextToken $next_token;
}

class DescribeCoipPoolsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public CoipPoolMaxResults $max_results;
  public string $next_token;
  public CoipPoolIdSet $pool_ids;
}

class DescribeCoipPoolsResult {
  public CoipPoolSet $coip_pools;
  public string $next_token;
}

class DescribeConversionTaskList {
}

class DescribeConversionTasksRequest {
  public ConversionIdStringList $conversion_task_ids;
  public boolean $dry_run;
}

class DescribeConversionTasksResult {
  public DescribeConversionTaskList $conversion_tasks;
}

class DescribeCustomerGatewaysRequest {
  public CustomerGatewayIdStringList $customer_gateway_ids;
  public boolean $dry_run;
  public FilterList $filters;
}

class DescribeCustomerGatewaysResult {
  public CustomerGatewayList $customer_gateways;
}

class DescribeDhcpOptionsMaxResults {
}

class DescribeDhcpOptionsRequest {
  public DhcpOptionsIdStringList $dhcp_options_ids;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeDhcpOptionsMaxResults $max_results;
  public string $next_token;
}

class DescribeDhcpOptionsResult {
  public DhcpOptionsList $dhcp_options;
  public string $next_token;
}

class DescribeEgressOnlyInternetGatewaysMaxResults {
}

class DescribeEgressOnlyInternetGatewaysRequest {
  public boolean $dry_run;
  public EgressOnlyInternetGatewayIdList $egress_only_internet_gateway_ids;
  public FilterList $filters;
  public DescribeEgressOnlyInternetGatewaysMaxResults $max_results;
  public string $next_token;
}

class DescribeEgressOnlyInternetGatewaysResult {
  public EgressOnlyInternetGatewayList $egress_only_internet_gateways;
  public string $next_token;
}

class DescribeElasticGpusMaxResults {
}

class DescribeElasticGpusRequest {
  public boolean $dry_run;
  public ElasticGpuIdSet $elastic_gpu_ids;
  public FilterList $filters;
  public DescribeElasticGpusMaxResults $max_results;
  public string $next_token;
}

class DescribeElasticGpusResult {
  public ElasticGpuSet $elastic_gpu_set;
  public int $max_results;
  public string $next_token;
}

class DescribeExportImageTasksMaxResults {
}

class DescribeExportImageTasksRequest {
  public boolean $dry_run;
  public ExportImageTaskIdList $export_image_task_ids;
  public FilterList $filters;
  public DescribeExportImageTasksMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeExportImageTasksResult {
  public ExportImageTaskList $export_image_tasks;
  public NextToken $next_token;
}

class DescribeExportTasksRequest {
  public ExportTaskIdStringList $export_task_ids;
  public FilterList $filters;
}

class DescribeExportTasksResult {
  public ExportTaskList $export_tasks;
}

class DescribeFastSnapshotRestoreSuccessItem {
  public string $availability_zone;
  public MillisecondDateTime $disabled_time;
  public MillisecondDateTime $disabling_time;
  public MillisecondDateTime $enabled_time;
  public MillisecondDateTime $enabling_time;
  public MillisecondDateTime $optimizing_time;
  public string $owner_alias;
  public string $owner_id;
  public string $snapshot_id;
  public FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;
}

class DescribeFastSnapshotRestoreSuccessSet {
}

class DescribeFastSnapshotRestoresMaxResults {
}

class DescribeFastSnapshotRestoresRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeFastSnapshotRestoresMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeFastSnapshotRestoresResult {
  public DescribeFastSnapshotRestoreSuccessSet $fast_snapshot_restores;
  public NextToken $next_token;
}

class DescribeFleetError {
  public string $error_code;
  public string $error_message;
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
}

class DescribeFleetHistoryRequest {
  public boolean $dry_run;
  public FleetEventType $event_type;
  public FleetId $fleet_id;
  public int $max_results;
  public string $next_token;
  public DateTime $start_time;
}

class DescribeFleetHistoryResult {
  public FleetId $fleet_id;
  public HistoryRecordSet $history_records;
  public DateTime $last_evaluated_time;
  public string $next_token;
  public DateTime $start_time;
}

class DescribeFleetInstancesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public FleetId $fleet_id;
  public int $max_results;
  public string $next_token;
}

class DescribeFleetInstancesResult {
  public ActiveInstanceSet $active_instances;
  public FleetId $fleet_id;
  public string $next_token;
}

class DescribeFleetsErrorSet {
}

class DescribeFleetsInstances {
  public InstanceIdsSet $instance_ids;
  public InstanceType $instance_type;
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
  public PlatformValues $platform;
}

class DescribeFleetsInstancesSet {
}

class DescribeFleetsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public FleetIdSet $fleet_ids;
  public int $max_results;
  public string $next_token;
}

class DescribeFleetsResult {
  public FleetSet $fleets;
  public string $next_token;
}

class DescribeFlowLogsRequest {
  public boolean $dry_run;
  public FilterList $filter;
  public FlowLogIdList $flow_log_ids;
  public int $max_results;
  public string $next_token;
}

class DescribeFlowLogsResult {
  public FlowLogSet $flow_logs;
  public string $next_token;
}

class DescribeFpgaImageAttributeRequest {
  public FpgaImageAttributeName $attribute;
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
}

class DescribeFpgaImageAttributeResult {
  public FpgaImageAttribute $fpga_image_attribute;
}

class DescribeFpgaImagesMaxResults {
}

class DescribeFpgaImagesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public FpgaImageIdList $fpga_image_ids;
  public DescribeFpgaImagesMaxResults $max_results;
  public NextToken $next_token;
  public OwnerStringList $owners;
}

class DescribeFpgaImagesResult {
  public FpgaImageList $fpga_images;
  public NextToken $next_token;
}

class DescribeHostReservationOfferingsRequest {
  public FilterList $filter;
  public int $max_duration;
  public DescribeHostReservationsMaxResults $max_results;
  public int $min_duration;
  public string $next_token;
  public OfferingId $offering_id;
}

class DescribeHostReservationOfferingsResult {
  public string $next_token;
  public HostOfferingSet $offering_set;
}

class DescribeHostReservationsMaxResults {
}

class DescribeHostReservationsRequest {
  public FilterList $filter;
  public HostReservationIdSet $host_reservation_id_set;
  public int $max_results;
  public string $next_token;
}

class DescribeHostReservationsResult {
  public HostReservationSet $host_reservation_set;
  public string $next_token;
}

class DescribeHostsRequest {
  public FilterList $filter;
  public RequestHostIdList $host_ids;
  public int $max_results;
  public string $next_token;
}

class DescribeHostsResult {
  public HostList $hosts;
  public string $next_token;
}

class DescribeIamInstanceProfileAssociationsMaxResults {
}

class DescribeIamInstanceProfileAssociationsRequest {
  public AssociationIdList $association_ids;
  public FilterList $filters;
  public DescribeIamInstanceProfileAssociationsMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeIamInstanceProfileAssociationsResult {
  public IamInstanceProfileAssociationSet $iam_instance_profile_associations;
  public NextToken $next_token;
}

class DescribeIdFormatRequest {
  public string $resource;
}

class DescribeIdFormatResult {
  public IdFormatList $statuses;
}

class DescribeIdentityIdFormatRequest {
  public string $principal_arn;
  public string $resource;
}

class DescribeIdentityIdFormatResult {
  public IdFormatList $statuses;
}

class DescribeImageAttributeRequest {
  public ImageAttributeName $attribute;
  public boolean $dry_run;
  public ImageId $image_id;
}

class DescribeImagesRequest {
  public boolean $dry_run;
  public ExecutableByStringList $executable_users;
  public FilterList $filters;
  public ImageIdStringList $image_ids;
  public OwnerStringList $owners;
}

class DescribeImagesResult {
  public ImageList $images;
}

class DescribeImportImageTasksRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public ImportTaskIdList $import_task_ids;
  public int $max_results;
  public string $next_token;
}

class DescribeImportImageTasksResult {
  public ImportImageTaskList $import_image_tasks;
  public string $next_token;
}

class DescribeImportSnapshotTasksRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public ImportSnapshotTaskIdList $import_task_ids;
  public int $max_results;
  public string $next_token;
}

class DescribeImportSnapshotTasksResult {
  public ImportSnapshotTaskList $import_snapshot_tasks;
  public string $next_token;
}

class DescribeInstanceAttributeRequest {
  public InstanceAttributeName $attribute;
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class DescribeInstanceCreditSpecificationsMaxResults {
}

class DescribeInstanceCreditSpecificationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public InstanceIdStringList $instance_ids;
  public DescribeInstanceCreditSpecificationsMaxResults $max_results;
  public string $next_token;
}

class DescribeInstanceCreditSpecificationsResult {
  public InstanceCreditSpecificationList $instance_credit_specifications;
  public string $next_token;
}

class DescribeInstanceEventNotificationAttributesRequest {
  public boolean $dry_run;
}

class DescribeInstanceEventNotificationAttributesResult {
  public InstanceTagNotificationAttribute $instance_tag_attribute;
}

class DescribeInstanceStatusRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public boolean $include_all_instances;
  public InstanceIdStringList $instance_ids;
  public int $max_results;
  public string $next_token;
}

class DescribeInstanceStatusResult {
  public InstanceStatusList $instance_statuses;
  public string $next_token;
}

class DescribeInstanceTypeOfferingsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocationType $location_type;
  public DITOMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeInstanceTypeOfferingsResult {
  public InstanceTypeOfferingsList $instance_type_offerings;
  public NextToken $next_token;
}

class DescribeInstanceTypesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public RequestInstanceTypeList $instance_types;
  public DITMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeInstanceTypesResult {
  public InstanceTypeInfoList $instance_types;
  public NextToken $next_token;
}

class DescribeInstancesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public InstanceIdStringList $instance_ids;
  public int $max_results;
  public string $next_token;
}

class DescribeInstancesResult {
  public string $next_token;
  public ReservationList $reservations;
}

class DescribeInternetGatewaysMaxResults {
}

class DescribeInternetGatewaysRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public InternetGatewayIdList $internet_gateway_ids;
  public DescribeInternetGatewaysMaxResults $max_results;
  public string $next_token;
}

class DescribeInternetGatewaysResult {
  public InternetGatewayList $internet_gateways;
  public string $next_token;
}

class DescribeIpv6PoolsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public Ipv6PoolMaxResults $max_results;
  public NextToken $next_token;
  public Ipv6PoolIdList $pool_ids;
}

class DescribeIpv6PoolsResult {
  public Ipv6PoolSet $ipv_6_pools;
  public NextToken $next_token;
}

class DescribeKeyPairsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public KeyNameStringList $key_names;
  public KeyPairIdStringList $key_pair_ids;
}

class DescribeKeyPairsResult {
  public KeyPairList $key_pairs;
}

class DescribeLaunchTemplateVersionsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public int $max_results;
  public string $max_version;
  public string $min_version;
  public string $next_token;
  public VersionStringList $versions;
}

class DescribeLaunchTemplateVersionsResult {
  public LaunchTemplateVersionSet $launch_template_versions;
  public string $next_token;
}

class DescribeLaunchTemplatesMaxResults {
}

class DescribeLaunchTemplatesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LaunchTemplateIdStringList $launch_template_ids;
  public LaunchTemplateNameStringList $launch_template_names;
  public DescribeLaunchTemplatesMaxResults $max_results;
  public string $next_token;
}

class DescribeLaunchTemplatesResult {
  public LaunchTemplateSet $launch_templates;
  public string $next_token;
}

class DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocalGatewayRouteTableVirtualInterfaceGroupAssociationIdSet $local_gateway_route_table_virtual_interface_group_association_ids;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
}

class DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResult {
  public LocalGatewayRouteTableVirtualInterfaceGroupAssociationSet $local_gateway_route_table_virtual_interface_group_associations;
  public string $next_token;
}

class DescribeLocalGatewayRouteTableVpcAssociationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocalGatewayRouteTableVpcAssociationIdSet $local_gateway_route_table_vpc_association_ids;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
}

class DescribeLocalGatewayRouteTableVpcAssociationsResult {
  public LocalGatewayRouteTableVpcAssociationSet $local_gateway_route_table_vpc_associations;
  public string $next_token;
}

class DescribeLocalGatewayRouteTablesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocalGatewayRouteTableIdSet $local_gateway_route_table_ids;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
}

class DescribeLocalGatewayRouteTablesResult {
  public LocalGatewayRouteTableSet $local_gateway_route_tables;
  public string $next_token;
}

class DescribeLocalGatewayVirtualInterfaceGroupsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocalGatewayVirtualInterfaceGroupIdSet $local_gateway_virtual_interface_group_ids;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
}

class DescribeLocalGatewayVirtualInterfaceGroupsResult {
  public LocalGatewayVirtualInterfaceGroupSet $local_gateway_virtual_interface_groups;
  public string $next_token;
}

class DescribeLocalGatewayVirtualInterfacesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocalGatewayVirtualInterfaceIdSet $local_gateway_virtual_interface_ids;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
}

class DescribeLocalGatewayVirtualInterfacesResult {
  public LocalGatewayVirtualInterfaceSet $local_gateway_virtual_interfaces;
  public string $next_token;
}

class DescribeLocalGatewaysRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocalGatewayIdSet $local_gateway_ids;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
}

class DescribeLocalGatewaysResult {
  public LocalGatewaySet $local_gateways;
  public string $next_token;
}

class DescribeMovingAddressesMaxResults {
}

class DescribeMovingAddressesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeMovingAddressesMaxResults $max_results;
  public string $next_token;
  public ValueStringList $public_ips;
}

class DescribeMovingAddressesResult {
  public MovingAddressStatusSet $moving_address_statuses;
  public string $next_token;
}

class DescribeNatGatewaysMaxResults {
}

class DescribeNatGatewaysRequest {
  public boolean $dry_run;
  public FilterList $filter;
  public DescribeNatGatewaysMaxResults $max_results;
  public NatGatewayIdStringList $nat_gateway_ids;
  public string $next_token;
}

class DescribeNatGatewaysResult {
  public NatGatewayList $nat_gateways;
  public string $next_token;
}

class DescribeNetworkAclsMaxResults {
}

class DescribeNetworkAclsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeNetworkAclsMaxResults $max_results;
  public NetworkAclIdStringList $network_acl_ids;
  public string $next_token;
}

class DescribeNetworkAclsResult {
  public NetworkAclList $network_acls;
  public string $next_token;
}

class DescribeNetworkInterfaceAttributeRequest {
  public NetworkInterfaceAttribute $attribute;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
}

class DescribeNetworkInterfaceAttributeResult {
  public NetworkInterfaceAttachment $attachment;
  public AttributeValue $description;
  public GroupIdentifierList $groups;
  public string $network_interface_id;
  public AttributeBooleanValue $source_dest_check;
}

class DescribeNetworkInterfacePermissionsMaxResults {
}

class DescribeNetworkInterfacePermissionsRequest {
  public FilterList $filters;
  public DescribeNetworkInterfacePermissionsMaxResults $max_results;
  public NetworkInterfacePermissionIdList $network_interface_permission_ids;
  public string $next_token;
}

class DescribeNetworkInterfacePermissionsResult {
  public NetworkInterfacePermissionList $network_interface_permissions;
  public string $next_token;
}

class DescribeNetworkInterfacesMaxResults {
}

class DescribeNetworkInterfacesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeNetworkInterfacesMaxResults $max_results;
  public NetworkInterfaceIdList $network_interface_ids;
  public string $next_token;
}

class DescribeNetworkInterfacesResult {
  public NetworkInterfaceList $network_interfaces;
  public string $next_token;
}

class DescribePlacementGroupsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public PlacementGroupIdStringList $group_ids;
  public PlacementGroupStringList $group_names;
}

class DescribePlacementGroupsResult {
  public PlacementGroupList $placement_groups;
}

class DescribePrefixListsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public PrefixListResourceIdStringList $prefix_list_ids;
}

class DescribePrefixListsResult {
  public string $next_token;
  public PrefixListSet $prefix_lists;
}

class DescribePrincipalIdFormatMaxResults {
}

class DescribePrincipalIdFormatRequest {
  public boolean $dry_run;
  public DescribePrincipalIdFormatMaxResults $max_results;
  public string $next_token;
  public ResourceList $resources;
}

class DescribePrincipalIdFormatResult {
  public string $next_token;
  public PrincipalIdFormatList $principals;
}

class DescribePublicIpv4PoolsRequest {
  public FilterList $filters;
  public PoolMaxResults $max_results;
  public NextToken $next_token;
  public PublicIpv4PoolIdStringList $pool_ids;
}

class DescribePublicIpv4PoolsResult {
  public string $next_token;
  public PublicIpv4PoolSet $public_ipv_4_pools;
}

class DescribeRegionsRequest {
  public boolean $all_regions;
  public boolean $dry_run;
  public FilterList $filters;
  public RegionNameStringList $region_names;
}

class DescribeRegionsResult {
  public RegionList $regions;
}

class DescribeReservedInstancesListingsRequest {
  public FilterList $filters;
  public ReservationId $reserved_instances_id;
  public ReservedInstancesListingId $reserved_instances_listing_id;
}

class DescribeReservedInstancesListingsResult {
  public ReservedInstancesListingList $reserved_instances_listings;
}

class DescribeReservedInstancesModificationsRequest {
  public FilterList $filters;
  public string $next_token;
  public ReservedInstancesModificationIdStringList $reserved_instances_modification_ids;
}

class DescribeReservedInstancesModificationsResult {
  public string $next_token;
  public ReservedInstancesModificationList $reserved_instances_modifications;
}

class DescribeReservedInstancesOfferingsRequest {
  public string $availability_zone;
  public boolean $dry_run;
  public FilterList $filters;
  public boolean $include_marketplace;
  public Tenancy $instance_tenancy;
  public InstanceType $instance_type;
  public Long $max_duration;
  public int $max_instance_count;
  public int $max_results;
  public Long $min_duration;
  public string $next_token;
  public OfferingClassType $offering_class;
  public OfferingTypeValues $offering_type;
  public RIProductDescription $product_description;
  public ReservedInstancesOfferingIdStringList $reserved_instances_offering_ids;
}

class DescribeReservedInstancesOfferingsResult {
  public string $next_token;
  public ReservedInstancesOfferingList $reserved_instances_offerings;
}

class DescribeReservedInstancesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public OfferingClassType $offering_class;
  public OfferingTypeValues $offering_type;
  public ReservedInstancesIdStringList $reserved_instances_ids;
}

class DescribeReservedInstancesResult {
  public ReservedInstancesList $reserved_instances;
}

class DescribeRouteTablesMaxResults {
}

class DescribeRouteTablesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeRouteTablesMaxResults $max_results;
  public string $next_token;
  public RouteTableIdStringList $route_table_ids;
}

class DescribeRouteTablesResult {
  public string $next_token;
  public RouteTableList $route_tables;
}

class DescribeScheduledInstanceAvailabilityMaxResults {
}

class DescribeScheduledInstanceAvailabilityRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public SlotDateTimeRangeRequest $first_slot_start_time_range;
  public DescribeScheduledInstanceAvailabilityMaxResults $max_results;
  public int $max_slot_duration_in_hours;
  public int $min_slot_duration_in_hours;
  public string $next_token;
  public ScheduledInstanceRecurrenceRequest $recurrence;
}

class DescribeScheduledInstanceAvailabilityResult {
  public string $next_token;
  public ScheduledInstanceAvailabilitySet $scheduled_instance_availability_set;
}

class DescribeScheduledInstancesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ScheduledInstanceIdRequestSet $scheduled_instance_ids;
  public SlotStartTimeRangeRequest $slot_start_time_range;
}

class DescribeScheduledInstancesResult {
  public string $next_token;
  public ScheduledInstanceSet $scheduled_instance_set;
}

class DescribeSecurityGroupReferencesRequest {
  public boolean $dry_run;
  public GroupIds $group_id;
}

class DescribeSecurityGroupReferencesResult {
  public SecurityGroupReferences $security_group_reference_set;
}

class DescribeSecurityGroupsMaxResults {
}

class DescribeSecurityGroupsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public GroupIdStringList $group_ids;
  public GroupNameStringList $group_names;
  public DescribeSecurityGroupsMaxResults $max_results;
  public string $next_token;
}

class DescribeSecurityGroupsResult {
  public string $next_token;
  public SecurityGroupList $security_groups;
}

class DescribeSnapshotAttributeRequest {
  public SnapshotAttributeName $attribute;
  public boolean $dry_run;
  public SnapshotId $snapshot_id;
}

class DescribeSnapshotAttributeResult {
  public CreateVolumePermissionList $create_volume_permissions;
  public ProductCodeList $product_codes;
  public string $snapshot_id;
}

class DescribeSnapshotsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public OwnerStringList $owner_ids;
  public RestorableByStringList $restorable_by_user_ids;
  public SnapshotIdStringList $snapshot_ids;
}

class DescribeSnapshotsResult {
  public string $next_token;
  public SnapshotList $snapshots;
}

class DescribeSpotDatafeedSubscriptionRequest {
  public boolean $dry_run;
}

class DescribeSpotDatafeedSubscriptionResult {
  public SpotDatafeedSubscription $spot_datafeed_subscription;
}

class DescribeSpotFleetInstancesMaxResults {
}

class DescribeSpotFleetInstancesRequest {
  public boolean $dry_run;
  public DescribeSpotFleetInstancesMaxResults $max_results;
  public string $next_token;
  public SpotFleetRequestId $spot_fleet_request_id;
}

class DescribeSpotFleetInstancesResponse {
  public ActiveInstanceSet $active_instances;
  public string $next_token;
  public string $spot_fleet_request_id;
}

class DescribeSpotFleetRequestHistoryMaxResults {
}

class DescribeSpotFleetRequestHistoryRequest {
  public boolean $dry_run;
  public EventType $event_type;
  public DescribeSpotFleetRequestHistoryMaxResults $max_results;
  public string $next_token;
  public SpotFleetRequestId $spot_fleet_request_id;
  public DateTime $start_time;
}

class DescribeSpotFleetRequestHistoryResponse {
  public HistoryRecords $history_records;
  public DateTime $last_evaluated_time;
  public string $next_token;
  public string $spot_fleet_request_id;
  public DateTime $start_time;
}

class DescribeSpotFleetRequestsRequest {
  public boolean $dry_run;
  public int $max_results;
  public string $next_token;
  public SpotFleetRequestIdList $spot_fleet_request_ids;
}

class DescribeSpotFleetRequestsResponse {
  public string $next_token;
  public SpotFleetRequestConfigSet $spot_fleet_request_configs;
}

class DescribeSpotInstanceRequestsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public SpotInstanceRequestIdList $spot_instance_request_ids;
}

class DescribeSpotInstanceRequestsResult {
  public string $next_token;
  public SpotInstanceRequestList $spot_instance_requests;
}

class DescribeSpotPriceHistoryRequest {
  public string $availability_zone;
  public boolean $dry_run;
  public DateTime $end_time;
  public FilterList $filters;
  public InstanceTypeList $instance_types;
  public int $max_results;
  public string $next_token;
  public ProductDescriptionList $product_descriptions;
  public DateTime $start_time;
}

class DescribeSpotPriceHistoryResult {
  public string $next_token;
  public SpotPriceHistoryList $spot_price_history;
}

class DescribeStaleSecurityGroupsMaxResults {
}

class DescribeStaleSecurityGroupsNextToken {
}

class DescribeStaleSecurityGroupsRequest {
  public boolean $dry_run;
  public DescribeStaleSecurityGroupsMaxResults $max_results;
  public DescribeStaleSecurityGroupsNextToken $next_token;
  public VpcId $vpc_id;
}

class DescribeStaleSecurityGroupsResult {
  public string $next_token;
  public StaleSecurityGroupSet $stale_security_group_set;
}

class DescribeSubnetsMaxResults {
}

class DescribeSubnetsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeSubnetsMaxResults $max_results;
  public string $next_token;
  public SubnetIdStringList $subnet_ids;
}

class DescribeSubnetsResult {
  public string $next_token;
  public SubnetList $subnets;
}

class DescribeTagsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
}

class DescribeTagsResult {
  public string $next_token;
  public TagDescriptionList $tags;
}

class DescribeTrafficMirrorFiltersRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TrafficMirroringMaxResults $max_results;
  public NextToken $next_token;
  public TrafficMirrorFilterIdList $traffic_mirror_filter_ids;
}

class DescribeTrafficMirrorFiltersResult {
  public string $next_token;
  public TrafficMirrorFilterSet $traffic_mirror_filters;
}

class DescribeTrafficMirrorSessionsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TrafficMirroringMaxResults $max_results;
  public NextToken $next_token;
  public TrafficMirrorSessionIdList $traffic_mirror_session_ids;
}

class DescribeTrafficMirrorSessionsResult {
  public string $next_token;
  public TrafficMirrorSessionSet $traffic_mirror_sessions;
}

class DescribeTrafficMirrorTargetsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TrafficMirroringMaxResults $max_results;
  public NextToken $next_token;
  public TrafficMirrorTargetIdList $traffic_mirror_target_ids;
}

class DescribeTrafficMirrorTargetsResult {
  public string $next_token;
  public TrafficMirrorTargetSet $traffic_mirror_targets;
}

class DescribeTransitGatewayAttachmentsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;
}

class DescribeTransitGatewayAttachmentsResult {
  public string $next_token;
  public TransitGatewayAttachmentList $transit_gateway_attachments;
}

class DescribeTransitGatewayMulticastDomainsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayMulticastDomainIdStringList $transit_gateway_multicast_domain_ids;
}

class DescribeTransitGatewayMulticastDomainsResult {
  public string $next_token;
  public TransitGatewayMulticastDomainList $transit_gateway_multicast_domains;
}

class DescribeTransitGatewayPeeringAttachmentsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;
}

class DescribeTransitGatewayPeeringAttachmentsResult {
  public string $next_token;
  public TransitGatewayPeeringAttachmentList $transit_gateway_peering_attachments;
}

class DescribeTransitGatewayRouteTablesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayRouteTableIdStringList $transit_gateway_route_table_ids;
}

class DescribeTransitGatewayRouteTablesResult {
  public string $next_token;
  public TransitGatewayRouteTableList $transit_gateway_route_tables;
}

class DescribeTransitGatewayVpcAttachmentsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;
}

class DescribeTransitGatewayVpcAttachmentsResult {
  public string $next_token;
  public TransitGatewayVpcAttachmentList $transit_gateway_vpc_attachments;
}

class DescribeTransitGatewaysRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayIdStringList $transit_gateway_ids;
}

class DescribeTransitGatewaysResult {
  public string $next_token;
  public TransitGatewayList $transit_gateways;
}

class DescribeVolumeAttributeRequest {
  public VolumeAttributeName $attribute;
  public boolean $dry_run;
  public VolumeId $volume_id;
}

class DescribeVolumeAttributeResult {
  public AttributeBooleanValue $auto_enable_io;
  public ProductCodeList $product_codes;
  public string $volume_id;
}

class DescribeVolumeStatusRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public VolumeIdStringList $volume_ids;
}

class DescribeVolumeStatusResult {
  public string $next_token;
  public VolumeStatusList $volume_statuses;
}

class DescribeVolumesModificationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public VolumeIdStringList $volume_ids;
}

class DescribeVolumesModificationsResult {
  public string $next_token;
  public VolumeModificationList $volumes_modifications;
}

class DescribeVolumesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public VolumeIdStringList $volume_ids;
}

class DescribeVolumesResult {
  public string $next_token;
  public VolumeList $volumes;
}

class DescribeVpcAttributeRequest {
  public VpcAttributeName $attribute;
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class DescribeVpcAttributeResult {
  public AttributeBooleanValue $enable_dns_hostnames;
  public AttributeBooleanValue $enable_dns_support;
  public string $vpc_id;
}

class DescribeVpcClassicLinkDnsSupportMaxResults {
}

class DescribeVpcClassicLinkDnsSupportNextToken {
}

class DescribeVpcClassicLinkDnsSupportRequest {
  public DescribeVpcClassicLinkDnsSupportMaxResults $max_results;
  public DescribeVpcClassicLinkDnsSupportNextToken $next_token;
  public VpcClassicLinkIdList $vpc_ids;
}

class DescribeVpcClassicLinkDnsSupportResult {
  public DescribeVpcClassicLinkDnsSupportNextToken $next_token;
  public ClassicLinkDnsSupportList $vpcs;
}

class DescribeVpcClassicLinkRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public VpcClassicLinkIdList $vpc_ids;
}

class DescribeVpcClassicLinkResult {
  public VpcClassicLinkList $vpcs;
}

class DescribeVpcEndpointConnectionNotificationsRequest {
  public ConnectionNotificationId $connection_notification_id;
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
}

class DescribeVpcEndpointConnectionNotificationsResult {
  public ConnectionNotificationSet $connection_notification_set;
  public string $next_token;
}

class DescribeVpcEndpointConnectionsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
}

class DescribeVpcEndpointConnectionsResult {
  public string $next_token;
  public VpcEndpointConnectionSet $vpc_endpoint_connections;
}

class DescribeVpcEndpointServiceConfigurationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public VpcEndpointServiceIdList $service_ids;
}

class DescribeVpcEndpointServiceConfigurationsResult {
  public string $next_token;
  public ServiceConfigurationSet $service_configurations;
}

class DescribeVpcEndpointServicePermissionsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public VpcEndpointServiceId $service_id;
}

class DescribeVpcEndpointServicePermissionsResult {
  public AllowedPrincipalSet $allowed_principals;
  public string $next_token;
}

class DescribeVpcEndpointServicesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ValueStringList $service_names;
}

class DescribeVpcEndpointServicesResult {
  public string $next_token;
  public ServiceDetailSet $service_details;
  public ValueStringList $service_names;
}

class DescribeVpcEndpointsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class DescribeVpcEndpointsResult {
  public string $next_token;
  public VpcEndpointSet $vpc_endpoints;
}

class DescribeVpcPeeringConnectionsMaxResults {
}

class DescribeVpcPeeringConnectionsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeVpcPeeringConnectionsMaxResults $max_results;
  public string $next_token;
  public VpcPeeringConnectionIdList $vpc_peering_connection_ids;
}

class DescribeVpcPeeringConnectionsResult {
  public string $next_token;
  public VpcPeeringConnectionList $vpc_peering_connections;
}

class DescribeVpcsMaxResults {
}

class DescribeVpcsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeVpcsMaxResults $max_results;
  public string $next_token;
  public VpcIdStringList $vpc_ids;
}

class DescribeVpcsResult {
  public string $next_token;
  public VpcList $vpcs;
}

class DescribeVpnConnectionsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public VpnConnectionIdStringList $vpn_connection_ids;
}

class DescribeVpnConnectionsResult {
  public VpnConnectionList $vpn_connections;
}

class DescribeVpnGatewaysRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public VpnGatewayIdStringList $vpn_gateway_ids;
}

class DescribeVpnGatewaysResult {
  public VpnGatewayList $vpn_gateways;
}

class DetachClassicLinkVpcRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
  public VpcId $vpc_id;
}

class DetachClassicLinkVpcResult {
  public boolean $return;
}

class DetachInternetGatewayRequest {
  public boolean $dry_run;
  public InternetGatewayId $internet_gateway_id;
  public VpcId $vpc_id;
}

class DetachNetworkInterfaceRequest {
  public NetworkInterfaceAttachmentId $attachment_id;
  public boolean $dry_run;
  public boolean $force;
}

class DetachVolumeRequest {
  public string $device;
  public boolean $dry_run;
  public boolean $force;
  public InstanceId $instance_id;
  public VolumeId $volume_id;
}

class DetachVpnGatewayRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
  public VpnGatewayId $vpn_gateway_id;
}

class DeviceType {
}

class DhcpConfiguration {
  public string $key;
  public DhcpConfigurationValueList $values;
}

class DhcpConfigurationList {
}

class DhcpConfigurationValueList {
}

class DhcpOptions {
  public DhcpConfigurationList $dhcp_configurations;
  public string $dhcp_options_id;
  public string $owner_id;
  public TagList $tags;
}

class DhcpOptionsId {
}

class DhcpOptionsIdStringList {
}

class DhcpOptionsList {
}

class DirectoryServiceAuthentication {
  public string $directory_id;
}

class DirectoryServiceAuthenticationRequest {
  public string $directory_id;
}

class DisableEbsEncryptionByDefaultRequest {
  public boolean $dry_run;
}

class DisableEbsEncryptionByDefaultResult {
  public boolean $ebs_encryption_by_default;
}

class DisableFastSnapshotRestoreErrorItem {
  public DisableFastSnapshotRestoreStateErrorSet $fast_snapshot_restore_state_errors;
  public string $snapshot_id;
}

class DisableFastSnapshotRestoreErrorSet {
}

class DisableFastSnapshotRestoreStateError {
  public string $code;
  public string $message;
}

class DisableFastSnapshotRestoreStateErrorItem {
  public string $availability_zone;
  public DisableFastSnapshotRestoreStateError $error;
}

class DisableFastSnapshotRestoreStateErrorSet {
}

class DisableFastSnapshotRestoreSuccessItem {
  public string $availability_zone;
  public MillisecondDateTime $disabled_time;
  public MillisecondDateTime $disabling_time;
  public MillisecondDateTime $enabled_time;
  public MillisecondDateTime $enabling_time;
  public MillisecondDateTime $optimizing_time;
  public string $owner_alias;
  public string $owner_id;
  public string $snapshot_id;
  public FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;
}

class DisableFastSnapshotRestoreSuccessSet {
}

class DisableFastSnapshotRestoresRequest {
  public AvailabilityZoneStringList $availability_zones;
  public boolean $dry_run;
  public SnapshotIdStringList $source_snapshot_ids;
}

class DisableFastSnapshotRestoresResult {
  public DisableFastSnapshotRestoreSuccessSet $successful;
  public DisableFastSnapshotRestoreErrorSet $unsuccessful;
}

class DisableTransitGatewayRouteTablePropagationRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class DisableTransitGatewayRouteTablePropagationResult {
  public TransitGatewayPropagation $propagation;
}

class DisableVgwRoutePropagationRequest {
  public boolean $dry_run;
  public VpnGatewayId $gateway_id;
  public RouteTableId $route_table_id;
}

class DisableVpcClassicLinkDnsSupportRequest {
  public VpcId $vpc_id;
}

class DisableVpcClassicLinkDnsSupportResult {
  public boolean $return;
}

class DisableVpcClassicLinkRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class DisableVpcClassicLinkResult {
  public boolean $return;
}

class DisassociateAddressRequest {
  public ElasticIpAssociationId $association_id;
  public boolean $dry_run;
  public string $public_ip;
}

class DisassociateClientVpnTargetNetworkRequest {
  public ClientVpnAssociationId $association_id;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
}

class DisassociateClientVpnTargetNetworkResult {
  public string $association_id;
  public AssociationStatus $status;
}

class DisassociateIamInstanceProfileRequest {
  public IamInstanceProfileAssociationId $association_id;
}

class DisassociateIamInstanceProfileResult {
  public IamInstanceProfileAssociation $iam_instance_profile_association;
}

class DisassociateRouteTableRequest {
  public RouteTableAssociationId $association_id;
  public boolean $dry_run;
}

class DisassociateSubnetCidrBlockRequest {
  public SubnetCidrAssociationId $association_id;
}

class DisassociateSubnetCidrBlockResult {
  public SubnetIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $subnet_id;
}

class DisassociateTransitGatewayMulticastDomainRequest {
  public boolean $dry_run;
  public ValueStringList $subnet_ids;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class DisassociateTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomainAssociations $associations;
}

class DisassociateTransitGatewayRouteTableRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class DisassociateTransitGatewayRouteTableResult {
  public TransitGatewayAssociation $association;
}

class DisassociateVpcCidrBlockRequest {
  public VpcCidrAssociationId $association_id;
}

class DisassociateVpcCidrBlockResult {
  public VpcCidrBlockAssociation $cidr_block_association;
  public VpcIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $vpc_id;
}

class DiskCount {
}

class DiskImage {
  public string $description;
  public DiskImageDetail $image;
  public VolumeDetail $volume;
}

class DiskImageDescription {
  public string $checksum;
  public DiskImageFormat $format;
  public string $import_manifest_url;
  public Long $size;
}

class DiskImageDetail {
  public Long $bytes;
  public DiskImageFormat $format;
  public string $import_manifest_url;
}

class DiskImageFormat {
}

class DiskImageList {
}

class DiskImageVolumeDescription {
  public string $id;
  public Long $size;
}

class DiskInfo {
  public DiskCount $count;
  public DiskSize $size_in_gb;
  public DiskType $type;
}

class DiskInfoList {
}

class DiskSize {
}

class DiskType {
}

class DnsEntry {
  public string $dns_name;
  public string $hosted_zone_id;
}

class DnsEntrySet {
}

class DnsNameState {
}

class DnsServersOptionsModifyStructure {
  public ValueStringList $custom_dns_servers;
  public boolean $enabled;
}

class DnsSupportValue {
}

class DomainType {
}

class Double {
}

class EbsBlockDevice {
  public boolean $delete_on_termination;
  public boolean $encrypted;
  public int $iops;
  public string $kms_key_id;
  public string $snapshot_id;
  public int $volume_size;
  public VolumeType $volume_type;
}

class EbsEncryptionSupport {
}

class EbsInfo {
  public EbsOptimizedSupport $ebs_optimized_support;
  public EbsEncryptionSupport $encryption_support;
}

class EbsInstanceBlockDevice {
  public DateTime $attach_time;
  public boolean $delete_on_termination;
  public AttachmentStatus $status;
  public string $volume_id;
}

class EbsInstanceBlockDeviceSpecification {
  public boolean $delete_on_termination;
  public VolumeId $volume_id;
}

class EbsOptimizedSupport {
}

class EgressOnlyInternetGateway {
  public InternetGatewayAttachmentList $attachments;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public TagList $tags;
}

class EgressOnlyInternetGatewayId {
}

class EgressOnlyInternetGatewayIdList {
}

class EgressOnlyInternetGatewayList {
}

class ElasticGpuAssociation {
  public string $elastic_gpu_association_id;
  public string $elastic_gpu_association_state;
  public string $elastic_gpu_association_time;
  public string $elastic_gpu_id;
}

class ElasticGpuAssociationList {
}

class ElasticGpuHealth {
  public ElasticGpuStatus $status;
}

class ElasticGpuId {
}

class ElasticGpuIdSet {
}

class ElasticGpuSet {
}

class ElasticGpuSpecification {
  public string $type;
}

class ElasticGpuSpecificationList {
}

class ElasticGpuSpecificationResponse {
  public string $type;
}

class ElasticGpuSpecificationResponseList {
}

class ElasticGpuSpecifications {
}

class ElasticGpuState {
}

class ElasticGpuStatus {
}

class ElasticGpus {
  public string $availability_zone;
  public ElasticGpuHealth $elastic_gpu_health;
  public string $elastic_gpu_id;
  public ElasticGpuState $elastic_gpu_state;
  public string $elastic_gpu_type;
  public string $instance_id;
  public TagList $tags;
}

class ElasticInferenceAccelerator {
  public ElasticInferenceAcceleratorCount $count;
  public string $type;
}

class ElasticInferenceAcceleratorAssociation {
  public string $elastic_inference_accelerator_arn;
  public string $elastic_inference_accelerator_association_id;
  public string $elastic_inference_accelerator_association_state;
  public DateTime $elastic_inference_accelerator_association_time;
}

class ElasticInferenceAcceleratorAssociationList {
}

class ElasticInferenceAcceleratorCount {
}

class ElasticInferenceAccelerators {
}

class ElasticIpAssociationId {
}

class EnaSupport {
}

class EnableEbsEncryptionByDefaultRequest {
  public boolean $dry_run;
}

class EnableEbsEncryptionByDefaultResult {
  public boolean $ebs_encryption_by_default;
}

class EnableFastSnapshotRestoreErrorItem {
  public EnableFastSnapshotRestoreStateErrorSet $fast_snapshot_restore_state_errors;
  public string $snapshot_id;
}

class EnableFastSnapshotRestoreErrorSet {
}

class EnableFastSnapshotRestoreStateError {
  public string $code;
  public string $message;
}

class EnableFastSnapshotRestoreStateErrorItem {
  public string $availability_zone;
  public EnableFastSnapshotRestoreStateError $error;
}

class EnableFastSnapshotRestoreStateErrorSet {
}

class EnableFastSnapshotRestoreSuccessItem {
  public string $availability_zone;
  public MillisecondDateTime $disabled_time;
  public MillisecondDateTime $disabling_time;
  public MillisecondDateTime $enabled_time;
  public MillisecondDateTime $enabling_time;
  public MillisecondDateTime $optimizing_time;
  public string $owner_alias;
  public string $owner_id;
  public string $snapshot_id;
  public FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;
}

class EnableFastSnapshotRestoreSuccessSet {
}

class EnableFastSnapshotRestoresRequest {
  public AvailabilityZoneStringList $availability_zones;
  public boolean $dry_run;
  public SnapshotIdStringList $source_snapshot_ids;
}

class EnableFastSnapshotRestoresResult {
  public EnableFastSnapshotRestoreSuccessSet $successful;
  public EnableFastSnapshotRestoreErrorSet $unsuccessful;
}

class EnableTransitGatewayRouteTablePropagationRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class EnableTransitGatewayRouteTablePropagationResult {
  public TransitGatewayPropagation $propagation;
}

class EnableVgwRoutePropagationRequest {
  public boolean $dry_run;
  public VpnGatewayId $gateway_id;
  public RouteTableId $route_table_id;
}

class EnableVolumeIORequest {
  public boolean $dry_run;
  public VolumeId $volume_id;
}

class EnableVpcClassicLinkDnsSupportRequest {
  public VpcId $vpc_id;
}

class EnableVpcClassicLinkDnsSupportResult {
  public boolean $return;
}

class EnableVpcClassicLinkRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class EnableVpcClassicLinkResult {
  public boolean $return;
}

class EndDateType {
}

class EndpointSet {
}

class EventCode {
}

class EventInformation {
  public string $event_description;
  public string $event_sub_type;
  public string $instance_id;
}

class EventType {
}

class ExcessCapacityTerminationPolicy {
}

class ExecutableByStringList {
}

class ExportClientVpnClientCertificateRevocationListRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
}

class ExportClientVpnClientCertificateRevocationListResult {
  public string $certificate_revocation_list;
  public ClientCertificateRevocationListStatus $status;
}

class ExportClientVpnClientConfigurationRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
}

class ExportClientVpnClientConfigurationResult {
  public string $client_configuration;
}

class ExportEnvironment {
}

class ExportImageRequest {
  public string $client_token;
  public string $description;
  public DiskImageFormat $disk_image_format;
  public boolean $dry_run;
  public ImageId $image_id;
  public string $role_name;
  public ExportTaskS3LocationRequest $s_3_export_location;
}

class ExportImageResult {
  public string $description;
  public DiskImageFormat $disk_image_format;
  public string $export_image_task_id;
  public string $image_id;
  public string $progress;
  public string $role_name;
  public ExportTaskS3Location $s_3_export_location;
  public string $status;
  public string $status_message;
}

class ExportImageTask {
  public string $description;
  public string $export_image_task_id;
  public string $image_id;
  public string $progress;
  public ExportTaskS3Location $s_3_export_location;
  public string $status;
  public string $status_message;
}

class ExportImageTaskId {
}

class ExportImageTaskIdList {
}

class ExportImageTaskList {
}

class ExportTask {
  public string $description;
  public string $export_task_id;
  public ExportToS3Task $export_to_s_3_task;
  public InstanceExportDetails $instance_export_details;
  public ExportTaskState $state;
  public string $status_message;
  public TagList $tags;
}

class ExportTaskId {
}

class ExportTaskIdStringList {
}

class ExportTaskList {
}

class ExportTaskS3Location {
  public string $s_3_bucket;
  public string $s_3_prefix;
}

class ExportTaskS3LocationRequest {
  public string $s_3_bucket;
  public string $s_3_prefix;
}

class ExportTaskState {
}

class ExportToS3Task {
  public ContainerFormat $container_format;
  public DiskImageFormat $disk_image_format;
  public string $s_3_bucket;
  public string $s_3_key;
}

class ExportToS3TaskSpecification {
  public ContainerFormat $container_format;
  public DiskImageFormat $disk_image_format;
  public string $s_3_bucket;
  public string $s_3_prefix;
}

class ExportTransitGatewayRoutesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public string $s_3_bucket;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class ExportTransitGatewayRoutesResult {
  public string $s_3_location;
}

class ExportVmTaskId {
}

class FailedQueuedPurchaseDeletion {
  public DeleteQueuedReservedInstancesError $error;
  public string $reserved_instances_id;
}

class FailedQueuedPurchaseDeletionSet {
}

class FastSnapshotRestoreStateCode {
}

class Filter {
  public string $name;
  public ValueStringList $values;
}

class FilterList {
}

class FleetActivityStatus {
}

class FleetCapacityReservationUsageStrategy {
}

class FleetData {
  public FleetActivityStatus $activity_status;
  public string $client_token;
  public DateTime $create_time;
  public DescribeFleetsErrorSet $errors;
  public FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public FleetId $fleet_id;
  public FleetStateCode $fleet_state;
  public Double $fulfilled_capacity;
  public Double $fulfilled_on_demand_capacity;
  public DescribeFleetsInstancesSet $instances;
  public FleetLaunchTemplateConfigList $launch_template_configs;
  public OnDemandOptions $on_demand_options;
  public boolean $replace_unhealthy_instances;
  public SpotOptions $spot_options;
  public TagList $tags;
  public TargetCapacitySpecification $target_capacity_specification;
  public boolean $terminate_instances_with_expiration;
  public FleetType $type;
  public DateTime $valid_from;
  public DateTime $valid_until;
}

class FleetEventType {
}

class FleetExcessCapacityTerminationPolicy {
}

class FleetId {
}

class FleetIdSet {
}

class FleetLaunchTemplateConfig {
  public FleetLaunchTemplateSpecification $launch_template_specification;
  public FleetLaunchTemplateOverridesList $overrides;
}

class FleetLaunchTemplateConfigList {
}

class FleetLaunchTemplateConfigListRequest {
}

class FleetLaunchTemplateConfigRequest {
  public FleetLaunchTemplateSpecificationRequest $launch_template_specification;
  public FleetLaunchTemplateOverridesListRequest $overrides;
}

class FleetLaunchTemplateOverrides {
  public string $availability_zone;
  public InstanceType $instance_type;
  public string $max_price;
  public PlacementResponse $placement;
  public Double $priority;
  public string $subnet_id;
  public Double $weighted_capacity;
}

class FleetLaunchTemplateOverridesList {
}

class FleetLaunchTemplateOverridesListRequest {
}

class FleetLaunchTemplateOverridesRequest {
  public string $availability_zone;
  public InstanceType $instance_type;
  public string $max_price;
  public Placement $placement;
  public Double $priority;
  public SubnetId $subnet_id;
  public Double $weighted_capacity;
}

class FleetLaunchTemplateSpecification {
  public string $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public string $version;
}

class FleetLaunchTemplateSpecificationRequest {
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public string $version;
}

class FleetOnDemandAllocationStrategy {
}

class FleetSet {
}

class FleetStateCode {
}

class FleetType {
}

class Float {
}

class FlowLog {
  public MillisecondDateTime $creation_time;
  public string $deliver_logs_error_message;
  public string $deliver_logs_permission_arn;
  public string $deliver_logs_status;
  public string $flow_log_id;
  public string $flow_log_status;
  public string $log_destination;
  public LogDestinationType $log_destination_type;
  public string $log_format;
  public string $log_group_name;
  public int $max_aggregation_interval;
  public string $resource_id;
  public TagList $tags;
  public TrafficType $traffic_type;
}

class FlowLogIdList {
}

class FlowLogResourceId {
}

class FlowLogResourceIds {
}

class FlowLogSet {
}

class FlowLogsResourceType {
}

class FpgaDeviceCount {
}

class FpgaDeviceInfo {
  public FpgaDeviceCount $count;
  public FpgaDeviceManufacturerName $manufacturer;
  public FpgaDeviceMemoryInfo $memory_info;
  public FpgaDeviceName $name;
}

class FpgaDeviceInfoList {
}

class FpgaDeviceManufacturerName {
}

class FpgaDeviceMemoryInfo {
  public FpgaDeviceMemorySize $size_in_mi_b;
}

class FpgaDeviceMemorySize {
}

class FpgaDeviceName {
}

class FpgaImage {
  public DateTime $create_time;
  public boolean $data_retention_support;
  public string $description;
  public string $fpga_image_global_id;
  public string $fpga_image_id;
  public string $name;
  public string $owner_alias;
  public string $owner_id;
  public PciId $pci_id;
  public ProductCodeList $product_codes;
  public boolean $public;
  public string $shell_version;
  public FpgaImageState $state;
  public TagList $tags;
  public DateTime $update_time;
}

class FpgaImageAttribute {
  public string $description;
  public string $fpga_image_id;
  public LoadPermissionList $load_permissions;
  public string $name;
  public ProductCodeList $product_codes;
}

class FpgaImageAttributeName {
}

class FpgaImageId {
}

class FpgaImageIdList {
}

class FpgaImageList {
}

class FpgaImageState {
  public FpgaImageStateCode $code;
  public string $message;
}

class FpgaImageStateCode {
}

class FpgaInfo {
  public FpgaDeviceInfoList $fpgas;
  public totalFpgaMemory $total_fpga_memory_in_mi_b;
}

class FreeTierEligibleFlag {
}

class GatewayType {
}

class GetAssociatedIpv6PoolCidrsRequest {
  public boolean $dry_run;
  public Ipv6PoolMaxResults $max_results;
  public NextToken $next_token;
  public Ipv6PoolEc2Id $pool_id;
}

class GetAssociatedIpv6PoolCidrsResult {
  public Ipv6CidrAssociationSet $ipv_6_cidr_associations;
  public string $next_token;
}

class GetCapacityReservationUsageRequest {
  public CapacityReservationId $capacity_reservation_id;
  public boolean $dry_run;
  public GetCapacityReservationUsageRequestMaxResults $max_results;
  public string $next_token;
}

class GetCapacityReservationUsageRequestMaxResults {
}

class GetCapacityReservationUsageResult {
  public int $available_instance_count;
  public string $capacity_reservation_id;
  public string $instance_type;
  public InstanceUsageSet $instance_usages;
  public string $next_token;
  public CapacityReservationState $state;
  public int $total_instance_count;
}

class GetCoipPoolUsageRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public CoipPoolMaxResults $max_results;
  public string $next_token;
  public CoipPoolId $pool_id;
}

class GetCoipPoolUsageResult {
  public CoipAddressUsageSet $coip_address_usages;
  public string $coip_pool_id;
  public string $local_gateway_route_table_id;
}

class GetConsoleOutputRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
  public boolean $latest;
}

class GetConsoleOutputResult {
  public string $instance_id;
  public string $output;
  public DateTime $timestamp;
}

class GetConsoleScreenshotRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
  public boolean $wake_up;
}

class GetConsoleScreenshotResult {
  public string $image_data;
  public string $instance_id;
}

class GetDefaultCreditSpecificationRequest {
  public boolean $dry_run;
  public UnlimitedSupportedInstanceFamily $instance_family;
}

class GetDefaultCreditSpecificationResult {
  public InstanceFamilyCreditSpecification $instance_family_credit_specification;
}

class GetEbsDefaultKmsKeyIdRequest {
  public boolean $dry_run;
}

class GetEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;
}

class GetEbsEncryptionByDefaultRequest {
  public boolean $dry_run;
}

class GetEbsEncryptionByDefaultResult {
  public boolean $ebs_encryption_by_default;
}

class GetHostReservationPurchasePreviewRequest {
  public RequestHostIdSet $host_id_set;
  public OfferingId $offering_id;
}

class GetHostReservationPurchasePreviewResult {
  public CurrencyCodeValues $currency_code;
  public PurchaseSet $purchase;
  public string $total_hourly_price;
  public string $total_upfront_price;
}

class GetLaunchTemplateDataRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class GetLaunchTemplateDataResult {
  public ResponseLaunchTemplateData $launch_template_data;
}

class GetPasswordDataRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class GetPasswordDataResult {
  public string $instance_id;
  public string $password_data;
  public DateTime $timestamp;
}

class GetReservedInstancesExchangeQuoteRequest {
  public boolean $dry_run;
  public ReservedInstanceIdSet $reserved_instance_ids;
  public TargetConfigurationRequestSet $target_configurations;
}

class GetReservedInstancesExchangeQuoteResult {
  public string $currency_code;
  public boolean $is_valid_exchange;
  public DateTime $output_reserved_instances_will_expire_at;
  public string $payment_due;
  public ReservationValue $reserved_instance_value_rollup;
  public ReservedInstanceReservationValueSet $reserved_instance_value_set;
  public ReservationValue $target_configuration_value_rollup;
  public TargetReservationValueSet $target_configuration_value_set;
  public string $validation_failure_reason;
}

class GetTransitGatewayAttachmentPropagationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class GetTransitGatewayAttachmentPropagationsResult {
  public string $next_token;
  public TransitGatewayAttachmentPropagationList $transit_gateway_attachment_propagations;
}

class GetTransitGatewayMulticastDomainAssociationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class GetTransitGatewayMulticastDomainAssociationsResult {
  public TransitGatewayMulticastDomainAssociationList $multicast_domain_associations;
  public string $next_token;
}

class GetTransitGatewayRouteTableAssociationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class GetTransitGatewayRouteTableAssociationsResult {
  public TransitGatewayRouteTableAssociationList $associations;
  public string $next_token;
}

class GetTransitGatewayRouteTablePropagationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class GetTransitGatewayRouteTablePropagationsResult {
  public string $next_token;
  public TransitGatewayRouteTablePropagationList $transit_gateway_route_table_propagations;
}

class GpuDeviceCount {
}

class GpuDeviceInfo {
  public GpuDeviceCount $count;
  public GpuDeviceManufacturerName $manufacturer;
  public GpuDeviceMemoryInfo $memory_info;
  public GpuDeviceName $name;
}

class GpuDeviceInfoList {
}

class GpuDeviceManufacturerName {
}

class GpuDeviceMemoryInfo {
  public GpuDeviceMemorySize $size_in_mi_b;
}

class GpuDeviceMemorySize {
}

class GpuDeviceName {
}

class GpuInfo {
  public GpuDeviceInfoList $gpus;
  public totalGpuMemory $total_gpu_memory_in_mi_b;
}

class GroupIdStringList {
}

class GroupIdentifier {
  public string $group_id;
  public string $group_name;
}

class GroupIdentifierList {
}

class GroupIdentifierSet {
}

class GroupIds {
}

class GroupNameStringList {
}

class HibernationFlag {
}

class HibernationOptions {
  public boolean $configured;
}

class HibernationOptionsRequest {
  public boolean $configured;
}

class HistoryRecord {
  public EventInformation $event_information;
  public EventType $event_type;
  public DateTime $timestamp;
}

class HistoryRecordEntry {
  public EventInformation $event_information;
  public FleetEventType $event_type;
  public DateTime $timestamp;
}

class HistoryRecordSet {
}

class HistoryRecords {
}

class Host {
  public DateTime $allocation_time;
  public AllowsMultipleInstanceTypes $allows_multiple_instance_types;
  public AutoPlacement $auto_placement;
  public string $availability_zone;
  public string $availability_zone_id;
  public AvailableCapacity $available_capacity;
  public string $client_token;
  public string $host_id;
  public HostProperties $host_properties;
  public HostRecovery $host_recovery;
  public string $host_reservation_id;
  public HostInstanceList $instances;
  public boolean $member_of_service_linked_resource_group;
  public string $owner_id;
  public DateTime $release_time;
  public AllocationState $state;
  public TagList $tags;
}

class HostInstance {
  public string $instance_id;
  public string $instance_type;
  public string $owner_id;
}

class HostInstanceList {
}

class HostList {
}

class HostOffering {
  public CurrencyCodeValues $currency_code;
  public int $duration;
  public string $hourly_price;
  public string $instance_family;
  public string $offering_id;
  public PaymentOption $payment_option;
  public string $upfront_price;
}

class HostOfferingSet {
}

class HostProperties {
  public int $cores;
  public string $instance_family;
  public string $instance_type;
  public int $sockets;
  public int $total_v_cpus;
}

class HostRecovery {
}

class HostReservation {
  public int $count;
  public CurrencyCodeValues $currency_code;
  public int $duration;
  public DateTime $end;
  public ResponseHostIdSet $host_id_set;
  public string $host_reservation_id;
  public string $hourly_price;
  public string $instance_family;
  public string $offering_id;
  public PaymentOption $payment_option;
  public DateTime $start;
  public ReservationState $state;
  public TagList $tags;
  public string $upfront_price;
}

class HostReservationId {
}

class HostReservationIdSet {
}

class HostReservationSet {
}

class HostTenancy {
}

class HttpTokensState {
}

class HypervisorType {
}

class IKEVersionsList {
}

class IKEVersionsListValue {
  public string $value;
}

class IKEVersionsRequestList {
}

class IKEVersionsRequestListValue {
  public string $value;
}

class IamInstanceProfile {
  public string $arn;
  public string $id;
}

class IamInstanceProfileAssociation {
  public string $association_id;
  public IamInstanceProfile $iam_instance_profile;
  public string $instance_id;
  public IamInstanceProfileAssociationState $state;
  public DateTime $timestamp;
}

class IamInstanceProfileAssociationId {
}

class IamInstanceProfileAssociationSet {
}

class IamInstanceProfileAssociationState {
}

class IamInstanceProfileSpecification {
  public string $arn;
  public string $name;
}

class IcmpTypeCode {
  public int $code;
  public int $type;
}

class IdFormat {
  public DateTime $deadline;
  public string $resource;
  public boolean $use_long_ids;
}

class IdFormatList {
}

class Image {
  public ArchitectureValues $architecture;
  public BlockDeviceMappingList $block_device_mappings;
  public string $creation_date;
  public string $description;
  public boolean $ena_support;
  public HypervisorType $hypervisor;
  public string $image_id;
  public string $image_location;
  public string $image_owner_alias;
  public ImageTypeValues $image_type;
  public string $kernel_id;
  public string $name;
  public string $owner_id;
  public PlatformValues $platform;
  public string $platform_details;
  public ProductCodeList $product_codes;
  public boolean $public;
  public string $ramdisk_id;
  public string $root_device_name;
  public DeviceType $root_device_type;
  public string $sriov_net_support;
  public ImageState $state;
  public StateReason $state_reason;
  public TagList $tags;
  public string $usage_operation;
  public VirtualizationType $virtualization_type;
}

class ImageAttribute {
  public BlockDeviceMappingList $block_device_mappings;
  public AttributeValue $description;
  public string $image_id;
  public AttributeValue $kernel_id;
  public LaunchPermissionList $launch_permissions;
  public ProductCodeList $product_codes;
  public AttributeValue $ramdisk_id;
  public AttributeValue $sriov_net_support;
}

class ImageAttributeName {
}

class ImageDiskContainer {
  public string $description;
  public string $device_name;
  public string $format;
  public SnapshotId $snapshot_id;
  public string $url;
  public UserBucket $user_bucket;
}

class ImageDiskContainerList {
}

class ImageId {
}

class ImageIdStringList {
}

class ImageList {
}

class ImageState {
}

class ImageTypeValues {
}

class ImportClientVpnClientCertificateRevocationListRequest {
  public string $certificate_revocation_list;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
}

class ImportClientVpnClientCertificateRevocationListResult {
  public boolean $return;
}

class ImportImageLicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class ImportImageLicenseConfigurationResponse {
  public string $license_configuration_arn;
}

class ImportImageLicenseSpecificationListRequest {
}

class ImportImageLicenseSpecificationListResponse {
}

class ImportImageRequest {
  public string $architecture;
  public ClientData $client_data;
  public string $client_token;
  public string $description;
  public ImageDiskContainerList $disk_containers;
  public boolean $dry_run;
  public boolean $encrypted;
  public string $hypervisor;
  public KmsKeyId $kms_key_id;
  public ImportImageLicenseSpecificationListRequest $license_specifications;
  public string $license_type;
  public string $platform;
  public string $role_name;
}

class ImportImageResult {
  public string $architecture;
  public string $description;
  public boolean $encrypted;
  public string $hypervisor;
  public string $image_id;
  public string $import_task_id;
  public string $kms_key_id;
  public ImportImageLicenseSpecificationListResponse $license_specifications;
  public string $license_type;
  public string $platform;
  public string $progress;
  public SnapshotDetailList $snapshot_details;
  public string $status;
  public string $status_message;
}

class ImportImageTask {
  public string $architecture;
  public string $description;
  public boolean $encrypted;
  public string $hypervisor;
  public string $image_id;
  public string $import_task_id;
  public string $kms_key_id;
  public ImportImageLicenseSpecificationListResponse $license_specifications;
  public string $license_type;
  public string $platform;
  public string $progress;
  public SnapshotDetailList $snapshot_details;
  public string $status;
  public string $status_message;
  public TagList $tags;
}

class ImportImageTaskId {
}

class ImportImageTaskList {
}

class ImportInstanceLaunchSpecification {
  public string $additional_info;
  public ArchitectureValues $architecture;
  public SecurityGroupIdStringList $group_ids;
  public SecurityGroupStringList $group_names;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public InstanceType $instance_type;
  public boolean $monitoring;
  public Placement $placement;
  public string $private_ip_address;
  public SubnetId $subnet_id;
  public UserData $user_data;
}

class ImportInstanceRequest {
  public string $description;
  public DiskImageList $disk_images;
  public boolean $dry_run;
  public ImportInstanceLaunchSpecification $launch_specification;
  public PlatformValues $platform;
}

class ImportInstanceResult {
  public ConversionTask $conversion_task;
}

class ImportInstanceTaskDetails {
  public string $description;
  public string $instance_id;
  public PlatformValues $platform;
  public ImportInstanceVolumeDetailSet $volumes;
}

class ImportInstanceVolumeDetailItem {
  public string $availability_zone;
  public Long $bytes_converted;
  public string $description;
  public DiskImageDescription $image;
  public string $status;
  public string $status_message;
  public DiskImageVolumeDescription $volume;
}

class ImportInstanceVolumeDetailSet {
}

class ImportKeyPairRequest {
  public boolean $dry_run;
  public string $key_name;
  public Blob $public_key_material;
  public TagSpecificationList $tag_specifications;
}

class ImportKeyPairResult {
  public string $key_fingerprint;
  public string $key_name;
  public string $key_pair_id;
  public TagList $tags;
}

class ImportSnapshotRequest {
  public ClientData $client_data;
  public string $client_token;
  public string $description;
  public SnapshotDiskContainer $disk_container;
  public boolean $dry_run;
  public boolean $encrypted;
  public KmsKeyId $kms_key_id;
  public string $role_name;
}

class ImportSnapshotResult {
  public string $description;
  public string $import_task_id;
  public SnapshotTaskDetail $snapshot_task_detail;
}

class ImportSnapshotTask {
  public string $description;
  public string $import_task_id;
  public SnapshotTaskDetail $snapshot_task_detail;
  public TagList $tags;
}

class ImportSnapshotTaskId {
}

class ImportSnapshotTaskIdList {
}

class ImportSnapshotTaskList {
}

class ImportTaskId {
}

class ImportTaskIdList {
}

class ImportVolumeRequest {
  public string $availability_zone;
  public string $description;
  public boolean $dry_run;
  public DiskImageDetail $image;
  public VolumeDetail $volume;
}

class ImportVolumeResult {
  public ConversionTask $conversion_task;
}

class ImportVolumeTaskDetails {
  public string $availability_zone;
  public Long $bytes_converted;
  public string $description;
  public DiskImageDescription $image;
  public DiskImageVolumeDescription $volume;
}

class InferenceAcceleratorInfo {
  public InferenceDeviceInfoList $accelerators;
}

class InferenceDeviceCount {
}

class InferenceDeviceInfo {
  public InferenceDeviceCount $count;
  public InferenceDeviceManufacturerName $manufacturer;
  public InferenceDeviceName $name;
}

class InferenceDeviceInfoList {
}

class InferenceDeviceManufacturerName {
}

class InferenceDeviceName {
}

class Instance {
  public int $ami_launch_index;
  public ArchitectureValues $architecture;
  public InstanceBlockDeviceMappingList $block_device_mappings;
  public string $capacity_reservation_id;
  public CapacityReservationSpecificationResponse $capacity_reservation_specification;
  public string $client_token;
  public CpuOptions $cpu_options;
  public boolean $ebs_optimized;
  public ElasticGpuAssociationList $elastic_gpu_associations;
  public ElasticInferenceAcceleratorAssociationList $elastic_inference_accelerator_associations;
  public boolean $ena_support;
  public HibernationOptions $hibernation_options;
  public HypervisorType $hypervisor;
  public IamInstanceProfile $iam_instance_profile;
  public string $image_id;
  public string $instance_id;
  public InstanceLifecycleType $instance_lifecycle;
  public InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public DateTime $launch_time;
  public LicenseList $licenses;
  public InstanceMetadataOptionsResponse $metadata_options;
  public Monitoring $monitoring;
  public InstanceNetworkInterfaceList $network_interfaces;
  public string $outpost_arn;
  public Placement $placement;
  public PlatformValues $platform;
  public string $private_dns_name;
  public string $private_ip_address;
  public ProductCodeList $product_codes;
  public string $public_dns_name;
  public string $public_ip_address;
  public string $ramdisk_id;
  public string $root_device_name;
  public DeviceType $root_device_type;
  public GroupIdentifierList $security_groups;
  public boolean $source_dest_check;
  public string $spot_instance_request_id;
  public string $sriov_net_support;
  public InstanceState $state;
  public StateReason $state_reason;
  public string $state_transition_reason;
  public string $subnet_id;
  public TagList $tags;
  public VirtualizationType $virtualization_type;
  public string $vpc_id;
}

class InstanceAttribute {
  public InstanceBlockDeviceMappingList $block_device_mappings;
  public AttributeBooleanValue $disable_api_termination;
  public AttributeBooleanValue $ebs_optimized;
  public AttributeBooleanValue $ena_support;
  public GroupIdentifierList $groups;
  public string $instance_id;
  public AttributeValue $instance_initiated_shutdown_behavior;
  public AttributeValue $instance_type;
  public AttributeValue $kernel_id;
  public ProductCodeList $product_codes;
  public AttributeValue $ramdisk_id;
  public AttributeValue $root_device_name;
  public AttributeBooleanValue $source_dest_check;
  public AttributeValue $sriov_net_support;
  public AttributeValue $user_data;
}

class InstanceAttributeName {
}

class InstanceBlockDeviceMapping {
  public string $device_name;
  public EbsInstanceBlockDevice $ebs;
}

class InstanceBlockDeviceMappingList {
}

class InstanceBlockDeviceMappingSpecification {
  public string $device_name;
  public EbsInstanceBlockDeviceSpecification $ebs;
  public string $no_device;
  public string $virtual_name;
}

class InstanceBlockDeviceMappingSpecificationList {
}

class InstanceCapacity {
  public int $available_capacity;
  public string $instance_type;
  public int $total_capacity;
}

class InstanceCount {
  public int $instance_count;
  public ListingState $state;
}

class InstanceCountList {
}

class InstanceCreditSpecification {
  public string $cpu_credits;
  public string $instance_id;
}

class InstanceCreditSpecificationList {
}

class InstanceCreditSpecificationListRequest {
}

class InstanceCreditSpecificationRequest {
  public string $cpu_credits;
  public InstanceId $instance_id;
}

class InstanceEventId {
}

class InstanceExportDetails {
  public string $instance_id;
  public ExportEnvironment $target_environment;
}

class InstanceFamilyCreditSpecification {
  public string $cpu_credits;
  public UnlimitedSupportedInstanceFamily $instance_family;
}

class InstanceHealthStatus {
}

class InstanceId {
}

class InstanceIdSet {
}

class InstanceIdStringList {
}

class InstanceIdsSet {
}

class InstanceInterruptionBehavior {
}

class InstanceIpv6Address {
  public string $ipv_6_address;
}

class InstanceIpv6AddressList {
}

class InstanceIpv6AddressListRequest {
}

class InstanceIpv6AddressRequest {
  public string $ipv_6_address;
}

class InstanceLifecycle {
}

class InstanceLifecycleType {
}

class InstanceList {
}

class InstanceMarketOptionsRequest {
  public MarketType $market_type;
  public SpotMarketOptions $spot_options;
}

class InstanceMatchCriteria {
}

class InstanceMetadataEndpointState {
}

class InstanceMetadataOptionsRequest {
  public InstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public HttpTokensState $http_tokens;
}

class InstanceMetadataOptionsResponse {
  public InstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public HttpTokensState $http_tokens;
  public InstanceMetadataOptionsState $state;
}

class InstanceMetadataOptionsState {
}

class InstanceMonitoring {
  public string $instance_id;
  public Monitoring $monitoring;
}

class InstanceMonitoringList {
}

class InstanceNetworkInterface {
  public InstanceNetworkInterfaceAssociation $association;
  public InstanceNetworkInterfaceAttachment $attachment;
  public string $description;
  public GroupIdentifierList $groups;
  public string $interface_type;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public string $mac_address;
  public string $network_interface_id;
  public string $owner_id;
  public string $private_dns_name;
  public string $private_ip_address;
  public InstancePrivateIpAddressList $private_ip_addresses;
  public boolean $source_dest_check;
  public NetworkInterfaceStatus $status;
  public string $subnet_id;
  public string $vpc_id;
}

class InstanceNetworkInterfaceAssociation {
  public string $ip_owner_id;
  public string $public_dns_name;
  public string $public_ip;
}

class InstanceNetworkInterfaceAttachment {
  public DateTime $attach_time;
  public string $attachment_id;
  public boolean $delete_on_termination;
  public int $device_index;
  public AttachmentStatus $status;
}

class InstanceNetworkInterfaceList {
}

class InstanceNetworkInterfaceSpecification {
  public boolean $associate_public_ip_address;
  public boolean $delete_on_termination;
  public string $description;
  public int $device_index;
  public SecurityGroupIdStringList $groups;
  public string $interface_type;
  public int $ipv_6_address_count;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public string $network_interface_id;
  public string $private_ip_address;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public string $subnet_id;
}

class InstanceNetworkInterfaceSpecificationList {
}

class InstancePrivateIpAddress {
  public InstanceNetworkInterfaceAssociation $association;
  public boolean $primary;
  public string $private_dns_name;
  public string $private_ip_address;
}

class InstancePrivateIpAddressList {
}

class InstanceSpecification {
  public boolean $exclude_boot_volume;
  public InstanceId $instance_id;
}

class InstanceState {
  public int $code;
  public InstanceStateName $name;
}

class InstanceStateChange {
  public InstanceState $current_state;
  public string $instance_id;
  public InstanceState $previous_state;
}

class InstanceStateChangeList {
}

class InstanceStateName {
}

class InstanceStatus {
  public string $availability_zone;
  public InstanceStatusEventList $events;
  public string $instance_id;
  public InstanceState $instance_state;
  public InstanceStatusSummary $instance_status;
  public string $outpost_arn;
  public InstanceStatusSummary $system_status;
}

class InstanceStatusDetails {
  public DateTime $impaired_since;
  public StatusName $name;
  public StatusType $status;
}

class InstanceStatusDetailsList {
}

class InstanceStatusEvent {
  public EventCode $code;
  public string $description;
  public InstanceEventId $instance_event_id;
  public DateTime $not_after;
  public DateTime $not_before;
  public DateTime $not_before_deadline;
}

class InstanceStatusEventList {
}

class InstanceStatusList {
}

class InstanceStatusSummary {
  public InstanceStatusDetailsList $details;
  public SummaryStatus $status;
}

class InstanceStorageFlag {
}

class InstanceStorageInfo {
  public DiskInfoList $disks;
  public DiskSize $total_size_in_gb;
}

class InstanceTagKeySet {
}

class InstanceTagNotificationAttribute {
  public boolean $include_all_tags_of_instance;
  public InstanceTagKeySet $instance_tag_keys;
}

class InstanceType {
}

class InstanceTypeHypervisor {
}

class InstanceTypeInfo {
  public AutoRecoveryFlag $auto_recovery_supported;
  public BareMetalFlag $bare_metal;
  public BurstablePerformanceFlag $burstable_performance_supported;
  public CurrentGenerationFlag $current_generation;
  public DedicatedHostFlag $dedicated_hosts_supported;
  public EbsInfo $ebs_info;
  public FpgaInfo $fpga_info;
  public FreeTierEligibleFlag $free_tier_eligible;
  public GpuInfo $gpu_info;
  public HibernationFlag $hibernation_supported;
  public InstanceTypeHypervisor $hypervisor;
  public InferenceAcceleratorInfo $inference_accelerator_info;
  public InstanceStorageInfo $instance_storage_info;
  public InstanceStorageFlag $instance_storage_supported;
  public InstanceType $instance_type;
  public MemoryInfo $memory_info;
  public NetworkInfo $network_info;
  public PlacementGroupInfo $placement_group_info;
  public ProcessorInfo $processor_info;
  public RootDeviceTypeList $supported_root_device_types;
  public UsageClassTypeList $supported_usage_classes;
  public VCpuInfo $v_cpu_info;
}

class InstanceTypeInfoList {
}

class InstanceTypeList {
}

class InstanceTypeOffering {
  public InstanceType $instance_type;
  public Location $location;
  public LocationType $location_type;
}

class InstanceTypeOfferingsList {
}

class InstanceUsage {
  public string $account_id;
  public int $used_instance_count;
}

class InstanceUsageSet {
}

class Integer {
}

class InterfacePermissionType {
}

class InternetGateway {
  public InternetGatewayAttachmentList $attachments;
  public string $internet_gateway_id;
  public string $owner_id;
  public TagList $tags;
}

class InternetGatewayAttachment {
  public AttachmentStatus $state;
  public string $vpc_id;
}

class InternetGatewayAttachmentList {
}

class InternetGatewayId {
}

class InternetGatewayIdList {
}

class InternetGatewayList {
}

class IpPermission {
  public int $from_port;
  public string $ip_protocol;
  public IpRangeList $ip_ranges;
  public Ipv6RangeList $ipv_6_ranges;
  public PrefixListIdList $prefix_list_ids;
  public int $to_port;
  public UserIdGroupPairList $user_id_group_pairs;
}

class IpPermissionList {
}

class IpRange {
  public string $cidr_ip;
  public string $description;
}

class IpRangeList {
}

class IpRanges {
}

class Ipv4PoolEc2Id {
}

class Ipv6Address {
}

class Ipv6AddressList {
}

class Ipv6CidrAssociation {
  public string $associated_resource;
  public string $ipv_6_cidr;
}

class Ipv6CidrAssociationSet {
}

class Ipv6CidrBlock {
  public string $ipv_6_cidr_block;
}

class Ipv6CidrBlockSet {
}

class Ipv6Flag {
}

class Ipv6Pool {
  public string $description;
  public PoolCidrBlocksSet $pool_cidr_blocks;
  public string $pool_id;
  public TagList $tags;
}

class Ipv6PoolEc2Id {
}

class Ipv6PoolIdList {
}

class Ipv6PoolMaxResults {
}

class Ipv6PoolSet {
}

class Ipv6Range {
  public string $cidr_ipv_6;
  public string $description;
}

class Ipv6RangeList {
}

class Ipv6SupportValue {
}

class KernelId {
}

class KeyNameStringList {
}

class KeyPair {
  public string $key_fingerprint;
  public SensitiveUserData $key_material;
  public string $key_name;
  public string $key_pair_id;
  public TagList $tags;
}

class KeyPairId {
}

class KeyPairIdStringList {
}

class KeyPairInfo {
  public string $key_fingerprint;
  public string $key_name;
  public string $key_pair_id;
  public TagList $tags;
}

class KeyPairList {
}

class KeyPairName {
}

class KmsKeyId {
}

class LastError {
  public string $code;
  public string $message;
}

class LaunchPermission {
  public PermissionGroup $group;
  public string $user_id;
}

class LaunchPermissionList {
}

class LaunchPermissionModifications {
  public LaunchPermissionList $add;
  public LaunchPermissionList $remove;
}

class LaunchSpecification {
  public string $addressing_type;
  public BlockDeviceMappingList $block_device_mappings;
  public boolean $ebs_optimized;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public string $image_id;
  public InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public RunInstancesMonitoringEnabled $monitoring;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public SpotPlacement $placement;
  public string $ramdisk_id;
  public GroupIdentifierList $security_groups;
  public string $subnet_id;
  public string $user_data;
}

class LaunchSpecsList {
}

class LaunchTemplate {
  public DateTime $create_time;
  public string $created_by;
  public Long $default_version_number;
  public Long $latest_version_number;
  public string $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public TagList $tags;
}

class LaunchTemplateAndOverridesResponse {
  public FleetLaunchTemplateSpecification $launch_template_specification;
  public FleetLaunchTemplateOverrides $overrides;
}

class LaunchTemplateBlockDeviceMapping {
  public string $device_name;
  public LaunchTemplateEbsBlockDevice $ebs;
  public string $no_device;
  public string $virtual_name;
}

class LaunchTemplateBlockDeviceMappingList {
}

class LaunchTemplateBlockDeviceMappingRequest {
  public string $device_name;
  public LaunchTemplateEbsBlockDeviceRequest $ebs;
  public string $no_device;
  public string $virtual_name;
}

class LaunchTemplateBlockDeviceMappingRequestList {
}

class LaunchTemplateCapacityReservationSpecificationRequest {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTarget $capacity_reservation_target;
}

class LaunchTemplateCapacityReservationSpecificationResponse {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTargetResponse $capacity_reservation_target;
}

class LaunchTemplateConfig {
  public FleetLaunchTemplateSpecification $launch_template_specification;
  public LaunchTemplateOverridesList $overrides;
}

class LaunchTemplateConfigList {
}

class LaunchTemplateCpuOptions {
  public int $core_count;
  public int $threads_per_core;
}

class LaunchTemplateCpuOptionsRequest {
  public int $core_count;
  public int $threads_per_core;
}

class LaunchTemplateEbsBlockDevice {
  public boolean $delete_on_termination;
  public boolean $encrypted;
  public int $iops;
  public KmsKeyId $kms_key_id;
  public SnapshotId $snapshot_id;
  public int $volume_size;
  public VolumeType $volume_type;
}

class LaunchTemplateEbsBlockDeviceRequest {
  public boolean $delete_on_termination;
  public boolean $encrypted;
  public int $iops;
  public KmsKeyId $kms_key_id;
  public SnapshotId $snapshot_id;
  public int $volume_size;
  public VolumeType $volume_type;
}

class LaunchTemplateElasticInferenceAccelerator {
  public LaunchTemplateElasticInferenceAcceleratorCount $count;
  public string $type;
}

class LaunchTemplateElasticInferenceAcceleratorCount {
}

class LaunchTemplateElasticInferenceAcceleratorList {
}

class LaunchTemplateElasticInferenceAcceleratorResponse {
  public int $count;
  public string $type;
}

class LaunchTemplateElasticInferenceAcceleratorResponseList {
}

class LaunchTemplateErrorCode {
}

class LaunchTemplateHibernationOptions {
  public boolean $configured;
}

class LaunchTemplateHibernationOptionsRequest {
  public boolean $configured;
}

class LaunchTemplateHttpTokensState {
}

class LaunchTemplateIamInstanceProfileSpecification {
  public string $arn;
  public string $name;
}

class LaunchTemplateIamInstanceProfileSpecificationRequest {
  public string $arn;
  public string $name;
}

class LaunchTemplateId {
}

class LaunchTemplateIdStringList {
}

class LaunchTemplateInstanceMarketOptions {
  public MarketType $market_type;
  public LaunchTemplateSpotMarketOptions $spot_options;
}

class LaunchTemplateInstanceMarketOptionsRequest {
  public MarketType $market_type;
  public LaunchTemplateSpotMarketOptionsRequest $spot_options;
}

class LaunchTemplateInstanceMetadataEndpointState {
}

class LaunchTemplateInstanceMetadataOptions {
  public LaunchTemplateInstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public LaunchTemplateHttpTokensState $http_tokens;
  public LaunchTemplateInstanceMetadataOptionsState $state;
}

class LaunchTemplateInstanceMetadataOptionsRequest {
  public LaunchTemplateInstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public LaunchTemplateHttpTokensState $http_tokens;
}

class LaunchTemplateInstanceMetadataOptionsState {
}

class LaunchTemplateInstanceNetworkInterfaceSpecification {
  public boolean $associate_public_ip_address;
  public boolean $delete_on_termination;
  public string $description;
  public int $device_index;
  public GroupIdStringList $groups;
  public string $interface_type;
  public int $ipv_6_address_count;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public SubnetId $subnet_id;
}

class LaunchTemplateInstanceNetworkInterfaceSpecificationList {
}

class LaunchTemplateInstanceNetworkInterfaceSpecificationRequest {
  public boolean $associate_public_ip_address;
  public boolean $delete_on_termination;
  public string $description;
  public int $device_index;
  public SecurityGroupIdStringList $groups;
  public string $interface_type;
  public int $ipv_6_address_count;
  public InstanceIpv6AddressListRequest $ipv_6_addresses;
  public NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public SubnetId $subnet_id;
}

class LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList {
}

class LaunchTemplateLicenseConfiguration {
  public string $license_configuration_arn;
}

class LaunchTemplateLicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class LaunchTemplateLicenseList {
}

class LaunchTemplateLicenseSpecificationListRequest {
}

class LaunchTemplateName {
}

class LaunchTemplateNameStringList {
}

class LaunchTemplateOverrides {
  public string $availability_zone;
  public InstanceType $instance_type;
  public Double $priority;
  public string $spot_price;
  public string $subnet_id;
  public Double $weighted_capacity;
}

class LaunchTemplateOverridesList {
}

class LaunchTemplatePlacement {
  public string $affinity;
  public string $availability_zone;
  public string $group_name;
  public string $host_id;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $spread_domain;
  public Tenancy $tenancy;
}

class LaunchTemplatePlacementRequest {
  public string $affinity;
  public string $availability_zone;
  public PlacementGroupName $group_name;
  public DedicatedHostId $host_id;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $spread_domain;
  public Tenancy $tenancy;
}

class LaunchTemplateSet {
}

class LaunchTemplateSpecification {
  public LaunchTemplateId $launch_template_id;
  public string $launch_template_name;
  public string $version;
}

class LaunchTemplateSpotMarketOptions {
  public int $block_duration_minutes;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $max_price;
  public SpotInstanceType $spot_instance_type;
  public DateTime $valid_until;
}

class LaunchTemplateSpotMarketOptionsRequest {
  public int $block_duration_minutes;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $max_price;
  public SpotInstanceType $spot_instance_type;
  public DateTime $valid_until;
}

class LaunchTemplateTagSpecification {
  public ResourceType $resource_type;
  public TagList $tags;
}

class LaunchTemplateTagSpecificationList {
}

class LaunchTemplateTagSpecificationRequest {
  public ResourceType $resource_type;
  public TagList $tags;
}

class LaunchTemplateTagSpecificationRequestList {
}

class LaunchTemplateVersion {
  public DateTime $create_time;
  public string $created_by;
  public boolean $default_version;
  public ResponseLaunchTemplateData $launch_template_data;
  public string $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public VersionDescription $version_description;
  public Long $version_number;
}

class LaunchTemplateVersionSet {
}

class LaunchTemplatesMonitoring {
  public boolean $enabled;
}

class LaunchTemplatesMonitoringRequest {
  public boolean $enabled;
}

class LicenseConfiguration {
  public string $license_configuration_arn;
}

class LicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class LicenseList {
}

class LicenseSpecificationListRequest {
}

class ListingState {
}

class ListingStatus {
}

class LoadBalancersConfig {
  public ClassicLoadBalancersConfig $classic_load_balancers_config;
  public TargetGroupsConfig $target_groups_config;
}

class LoadPermission {
  public PermissionGroup $group;
  public string $user_id;
}

class LoadPermissionList {
}

class LoadPermissionListRequest {
}

class LoadPermissionModifications {
  public LoadPermissionListRequest $add;
  public LoadPermissionListRequest $remove;
}

class LoadPermissionRequest {
  public PermissionGroup $group;
  public string $user_id;
}

class LocalGateway {
  public LocalGatewayId $local_gateway_id;
  public string $outpost_arn;
  public string $owner_id;
  public string $state;
  public TagList $tags;
}

class LocalGatewayId {
}

class LocalGatewayIdSet {
}

class LocalGatewayMaxResults {
}

class LocalGatewayRoute {
  public string $destination_cidr_block;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public LocalGatewayRouteState $state;
  public LocalGatewayRouteType $type;
}

class LocalGatewayRouteList {
}

class LocalGatewayRouteState {
}

class LocalGatewayRouteTable {
  public LocalGatewayId $local_gateway_id;
  public string $local_gateway_route_table_id;
  public string $outpost_arn;
  public string $state;
  public TagList $tags;
}

class LocalGatewayRouteTableIdSet {
}

class LocalGatewayRouteTableSet {
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociation {
  public string $local_gateway_id;
  public LocalGatewayId $local_gateway_route_table_id;
  public LocalGatewayRouteTableVirtualInterfaceGroupAssociationId $local_gateway_route_table_virtual_interface_group_association_id;
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public string $state;
  public TagList $tags;
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociationId {
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociationIdSet {
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociationSet {
}

class LocalGatewayRouteTableVpcAssociation {
  public string $local_gateway_id;
  public string $local_gateway_route_table_id;
  public LocalGatewayRouteTableVpcAssociationId $local_gateway_route_table_vpc_association_id;
  public string $state;
  public TagList $tags;
  public string $vpc_id;
}

class LocalGatewayRouteTableVpcAssociationId {
}

class LocalGatewayRouteTableVpcAssociationIdSet {
}

class LocalGatewayRouteTableVpcAssociationSet {
}

class LocalGatewayRouteType {
}

class LocalGatewayRoutetableId {
}

class LocalGatewaySet {
}

class LocalGatewayVirtualInterface {
  public string $local_address;
  public int $local_bgp_asn;
  public string $local_gateway_id;
  public LocalGatewayVirtualInterfaceId $local_gateway_virtual_interface_id;
  public string $peer_address;
  public int $peer_bgp_asn;
  public TagList $tags;
  public int $vlan;
}

class LocalGatewayVirtualInterfaceGroup {
  public string $local_gateway_id;
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public LocalGatewayVirtualInterfaceIdSet $local_gateway_virtual_interface_ids;
  public TagList $tags;
}

class LocalGatewayVirtualInterfaceGroupId {
}

class LocalGatewayVirtualInterfaceGroupIdSet {
}

class LocalGatewayVirtualInterfaceGroupSet {
}

class LocalGatewayVirtualInterfaceId {
}

class LocalGatewayVirtualInterfaceIdSet {
}

class LocalGatewayVirtualInterfaceSet {
}

class Location {
}

class LocationType {
}

class LogDestinationType {
}

class Long {
}

class MarketType {
}

class MaxIpv4AddrPerInterface {
}

class MaxIpv6AddrPerInterface {
}

class MaxNetworkInterfaces {
}

class MaxResults {
}

class MembershipType {
}

class MemoryInfo {
  public MemorySize $size_in_mi_b;
}

class MemorySize {
}

class MillisecondDateTime {
}

class ModifyAvailabilityZoneGroupRequest {
  public boolean $dry_run;
  public string $group_name;
  public ModifyAvailabilityZoneOptInStatus $opt_in_status;
}

class ModifyAvailabilityZoneGroupResult {
  public boolean $return;
}

class ModifyAvailabilityZoneOptInStatus {
}

class ModifyCapacityReservationRequest {
  public CapacityReservationId $capacity_reservation_id;
  public boolean $dry_run;
  public DateTime $end_date;
  public EndDateType $end_date_type;
  public int $instance_count;
}

class ModifyCapacityReservationResult {
  public boolean $return;
}

class ModifyClientVpnEndpointRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public ConnectionLogOptions $connection_log_options;
  public string $description;
  public DnsServersOptionsModifyStructure $dns_servers;
  public boolean $dry_run;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public string $server_certificate_arn;
  public boolean $split_tunnel;
  public VpcId $vpc_id;
  public int $vpn_port;
}

class ModifyClientVpnEndpointResult {
  public boolean $return;
}

class ModifyDefaultCreditSpecificationRequest {
  public string $cpu_credits;
  public boolean $dry_run;
  public UnlimitedSupportedInstanceFamily $instance_family;
}

class ModifyDefaultCreditSpecificationResult {
  public InstanceFamilyCreditSpecification $instance_family_credit_specification;
}

class ModifyEbsDefaultKmsKeyIdRequest {
  public boolean $dry_run;
  public KmsKeyId $kms_key_id;
}

class ModifyEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;
}

class ModifyFleetRequest {
  public boolean $dry_run;
  public FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public FleetId $fleet_id;
  public TargetCapacitySpecificationRequest $target_capacity_specification;
}

class ModifyFleetResult {
  public boolean $return;
}

class ModifyFpgaImageAttributeRequest {
  public FpgaImageAttributeName $attribute;
  public string $description;
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
  public LoadPermissionModifications $load_permission;
  public string $name;
  public OperationType $operation_type;
  public ProductCodeStringList $product_codes;
  public UserGroupStringList $user_groups;
  public UserIdStringList $user_ids;
}

class ModifyFpgaImageAttributeResult {
  public FpgaImageAttribute $fpga_image_attribute;
}

class ModifyHostsRequest {
  public AutoPlacement $auto_placement;
  public RequestHostIdList $host_ids;
  public HostRecovery $host_recovery;
  public string $instance_family;
  public string $instance_type;
}

class ModifyHostsResult {
  public ResponseHostIdList $successful;
  public UnsuccessfulItemList $unsuccessful;
}

class ModifyIdFormatRequest {
  public string $resource;
  public boolean $use_long_ids;
}

class ModifyIdentityIdFormatRequest {
  public string $principal_arn;
  public string $resource;
  public boolean $use_long_ids;
}

class ModifyImageAttributeRequest {
  public string $attribute;
  public AttributeValue $description;
  public boolean $dry_run;
  public ImageId $image_id;
  public LaunchPermissionModifications $launch_permission;
  public OperationType $operation_type;
  public ProductCodeStringList $product_codes;
  public UserGroupStringList $user_groups;
  public UserIdStringList $user_ids;
  public string $value;
}

class ModifyInstanceAttributeRequest {
  public InstanceAttributeName $attribute;
  public InstanceBlockDeviceMappingSpecificationList $block_device_mappings;
  public AttributeBooleanValue $disable_api_termination;
  public boolean $dry_run;
  public AttributeBooleanValue $ebs_optimized;
  public AttributeBooleanValue $ena_support;
  public GroupIdStringList $groups;
  public InstanceId $instance_id;
  public AttributeValue $instance_initiated_shutdown_behavior;
  public AttributeValue $instance_type;
  public AttributeValue $kernel;
  public AttributeValue $ramdisk;
  public AttributeBooleanValue $source_dest_check;
  public AttributeValue $sriov_net_support;
  public BlobAttributeValue $user_data;
  public string $value;
}

class ModifyInstanceCapacityReservationAttributesRequest {
  public CapacityReservationSpecification $capacity_reservation_specification;
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class ModifyInstanceCapacityReservationAttributesResult {
  public boolean $return;
}

class ModifyInstanceCreditSpecificationRequest {
  public string $client_token;
  public boolean $dry_run;
  public InstanceCreditSpecificationListRequest $instance_credit_specifications;
}

class ModifyInstanceCreditSpecificationResult {
  public SuccessfulInstanceCreditSpecificationSet $successful_instance_credit_specifications;
  public UnsuccessfulInstanceCreditSpecificationSet $unsuccessful_instance_credit_specifications;
}

class ModifyInstanceEventStartTimeRequest {
  public boolean $dry_run;
  public string $instance_event_id;
  public InstanceId $instance_id;
  public DateTime $not_before;
}

class ModifyInstanceEventStartTimeResult {
  public InstanceStatusEvent $event;
}

class ModifyInstanceMetadataOptionsRequest {
  public boolean $dry_run;
  public InstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public HttpTokensState $http_tokens;
  public InstanceId $instance_id;
}

class ModifyInstanceMetadataOptionsResult {
  public string $instance_id;
  public InstanceMetadataOptionsResponse $instance_metadata_options;
}

class ModifyInstancePlacementRequest {
  public Affinity $affinity;
  public PlacementGroupName $group_name;
  public DedicatedHostId $host_id;
  public string $host_resource_group_arn;
  public InstanceId $instance_id;
  public int $partition_number;
  public HostTenancy $tenancy;
}

class ModifyInstancePlacementResult {
  public boolean $return;
}

class ModifyLaunchTemplateRequest {
  public string $client_token;
  public string $default_version;
  public boolean $dry_run;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
}

class ModifyLaunchTemplateResult {
  public LaunchTemplate $launch_template;
}

class ModifyNetworkInterfaceAttributeRequest {
  public NetworkInterfaceAttachmentChanges $attachment;
  public AttributeValue $description;
  public boolean $dry_run;
  public SecurityGroupIdStringList $groups;
  public NetworkInterfaceId $network_interface_id;
  public AttributeBooleanValue $source_dest_check;
}

class ModifyReservedInstancesRequest {
  public string $client_token;
  public ReservedInstancesIdStringList $reserved_instances_ids;
  public ReservedInstancesConfigurationList $target_configurations;
}

class ModifyReservedInstancesResult {
  public string $reserved_instances_modification_id;
}

class ModifySnapshotAttributeRequest {
  public SnapshotAttributeName $attribute;
  public CreateVolumePermissionModifications $create_volume_permission;
  public boolean $dry_run;
  public GroupNameStringList $group_names;
  public OperationType $operation_type;
  public SnapshotId $snapshot_id;
  public UserIdStringList $user_ids;
}

class ModifySpotFleetRequestRequest {
  public ExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public int $on_demand_target_capacity;
  public SpotFleetRequestId $spot_fleet_request_id;
  public int $target_capacity;
}

class ModifySpotFleetRequestResponse {
  public boolean $return;
}

class ModifySubnetAttributeRequest {
  public AttributeBooleanValue $assign_ipv_6_address_on_creation;
  public AttributeBooleanValue $map_public_ip_on_launch;
  public SubnetId $subnet_id;
}

class ModifyTrafficMirrorFilterNetworkServicesRequest {
  public TrafficMirrorNetworkServiceList $add_network_services;
  public boolean $dry_run;
  public TrafficMirrorNetworkServiceList $remove_network_services;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
}

class ModifyTrafficMirrorFilterNetworkServicesResult {
  public TrafficMirrorFilter $traffic_mirror_filter;
}

class ModifyTrafficMirrorFilterRuleRequest {
  public string $description;
  public string $destination_cidr_block;
  public TrafficMirrorPortRangeRequest $destination_port_range;
  public boolean $dry_run;
  public int $protocol;
  public TrafficMirrorFilterRuleFieldList $remove_fields;
  public TrafficMirrorRuleAction $rule_action;
  public int $rule_number;
  public string $source_cidr_block;
  public TrafficMirrorPortRangeRequest $source_port_range;
  public TrafficDirection $traffic_direction;
  public TrafficMirrorFilterRuleId $traffic_mirror_filter_rule_id;
}

class ModifyTrafficMirrorFilterRuleResult {
  public TrafficMirrorFilterRule $traffic_mirror_filter_rule;
}

class ModifyTrafficMirrorSessionRequest {
  public string $description;
  public boolean $dry_run;
  public int $packet_length;
  public TrafficMirrorSessionFieldList $remove_fields;
  public int $session_number;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
  public TrafficMirrorSessionId $traffic_mirror_session_id;
  public TrafficMirrorTargetId $traffic_mirror_target_id;
  public int $virtual_network_id;
}

class ModifyTrafficMirrorSessionResult {
  public TrafficMirrorSession $traffic_mirror_session;
}

class ModifyTransitGatewayVpcAttachmentRequest {
  public TransitGatewaySubnetIdList $add_subnet_ids;
  public boolean $dry_run;
  public ModifyTransitGatewayVpcAttachmentRequestOptions $options;
  public TransitGatewaySubnetIdList $remove_subnet_ids;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class ModifyTransitGatewayVpcAttachmentRequestOptions {
  public DnsSupportValue $dns_support;
  public Ipv6SupportValue $ipv_6_support;
}

class ModifyTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class ModifyVolumeAttributeRequest {
  public AttributeBooleanValue $auto_enable_io;
  public boolean $dry_run;
  public VolumeId $volume_id;
}

class ModifyVolumeRequest {
  public boolean $dry_run;
  public int $iops;
  public int $size;
  public VolumeId $volume_id;
  public VolumeType $volume_type;
}

class ModifyVolumeResult {
  public VolumeModification $volume_modification;
}

class ModifyVpcAttributeRequest {
  public AttributeBooleanValue $enable_dns_hostnames;
  public AttributeBooleanValue $enable_dns_support;
  public VpcId $vpc_id;
}

class ModifyVpcEndpointConnectionNotificationRequest {
  public ValueStringList $connection_events;
  public string $connection_notification_arn;
  public ConnectionNotificationId $connection_notification_id;
  public boolean $dry_run;
}

class ModifyVpcEndpointConnectionNotificationResult {
  public boolean $return_value;
}

class ModifyVpcEndpointRequest {
  public VpcEndpointRouteTableIdList $add_route_table_ids;
  public VpcEndpointSecurityGroupIdList $add_security_group_ids;
  public VpcEndpointSubnetIdList $add_subnet_ids;
  public boolean $dry_run;
  public string $policy_document;
  public boolean $private_dns_enabled;
  public VpcEndpointRouteTableIdList $remove_route_table_ids;
  public VpcEndpointSecurityGroupIdList $remove_security_group_ids;
  public VpcEndpointSubnetIdList $remove_subnet_ids;
  public boolean $reset_policy;
  public VpcEndpointId $vpc_endpoint_id;
}

class ModifyVpcEndpointResult {
  public boolean $return;
}

class ModifyVpcEndpointServiceConfigurationRequest {
  public boolean $acceptance_required;
  public ValueStringList $add_network_load_balancer_arns;
  public boolean $dry_run;
  public string $private_dns_name;
  public ValueStringList $remove_network_load_balancer_arns;
  public boolean $remove_private_dns_name;
  public VpcEndpointServiceId $service_id;
}

class ModifyVpcEndpointServiceConfigurationResult {
  public boolean $return;
}

class ModifyVpcEndpointServicePermissionsRequest {
  public ValueStringList $add_allowed_principals;
  public boolean $dry_run;
  public ValueStringList $remove_allowed_principals;
  public VpcEndpointServiceId $service_id;
}

class ModifyVpcEndpointServicePermissionsResult {
  public boolean $return_value;
}

class ModifyVpcPeeringConnectionOptionsRequest {
  public PeeringConnectionOptionsRequest $accepter_peering_connection_options;
  public boolean $dry_run;
  public PeeringConnectionOptionsRequest $requester_peering_connection_options;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class ModifyVpcPeeringConnectionOptionsResult {
  public PeeringConnectionOptions $accepter_peering_connection_options;
  public PeeringConnectionOptions $requester_peering_connection_options;
}

class ModifyVpcTenancyRequest {
  public boolean $dry_run;
  public VpcTenancy $instance_tenancy;
  public VpcId $vpc_id;
}

class ModifyVpcTenancyResult {
  public boolean $return_value;
}

class ModifyVpnConnectionRequest {
  public CustomerGatewayId $customer_gateway_id;
  public boolean $dry_run;
  public TransitGatewayId $transit_gateway_id;
  public VpnConnectionId $vpn_connection_id;
  public VpnGatewayId $vpn_gateway_id;
}

class ModifyVpnConnectionResult {
  public VpnConnection $vpn_connection;
}

class ModifyVpnTunnelCertificateRequest {
  public boolean $dry_run;
  public VpnConnectionId $vpn_connection_id;
  public string $vpn_tunnel_outside_ip_address;
}

class ModifyVpnTunnelCertificateResult {
  public VpnConnection $vpn_connection;
}

class ModifyVpnTunnelOptionsRequest {
  public boolean $dry_run;
  public ModifyVpnTunnelOptionsSpecification $tunnel_options;
  public VpnConnectionId $vpn_connection_id;
  public string $vpn_tunnel_outside_ip_address;
}

class ModifyVpnTunnelOptionsResult {
  public VpnConnection $vpn_connection;
}

class ModifyVpnTunnelOptionsSpecification {
  public int $dpd_timeout_seconds;
  public IKEVersionsRequestList $ike_versions;
  public Phase1DHGroupNumbersRequestList $phase_1_dh_group_numbers;
  public Phase1EncryptionAlgorithmsRequestList $phase_1_encryption_algorithms;
  public Phase1IntegrityAlgorithmsRequestList $phase_1_integrity_algorithms;
  public int $phase_1_lifetime_seconds;
  public Phase2DHGroupNumbersRequestList $phase_2_dh_group_numbers;
  public Phase2EncryptionAlgorithmsRequestList $phase_2_encryption_algorithms;
  public Phase2IntegrityAlgorithmsRequestList $phase_2_integrity_algorithms;
  public int $phase_2_lifetime_seconds;
  public string $pre_shared_key;
  public int $rekey_fuzz_percentage;
  public int $rekey_margin_time_seconds;
  public int $replay_window_size;
  public string $tunnel_inside_cidr;
}

class MonitorInstancesRequest {
  public boolean $dry_run;
  public InstanceIdStringList $instance_ids;
}

class MonitorInstancesResult {
  public InstanceMonitoringList $instance_monitorings;
}

class Monitoring {
  public MonitoringState $state;
}

class MonitoringState {
}

class MoveAddressToVpcRequest {
  public boolean $dry_run;
  public string $public_ip;
}

class MoveAddressToVpcResult {
  public string $allocation_id;
  public Status $status;
}

class MoveStatus {
}

class MovingAddressStatus {
  public MoveStatus $move_status;
  public string $public_ip;
}

class MovingAddressStatusSet {
}

class MulticastSupportValue {
}

class NatGateway {
  public DateTime $create_time;
  public DateTime $delete_time;
  public string $failure_code;
  public string $failure_message;
  public NatGatewayAddressList $nat_gateway_addresses;
  public string $nat_gateway_id;
  public ProvisionedBandwidth $provisioned_bandwidth;
  public NatGatewayState $state;
  public string $subnet_id;
  public TagList $tags;
  public string $vpc_id;
}

class NatGatewayAddress {
  public string $allocation_id;
  public string $network_interface_id;
  public string $private_ip;
  public string $public_ip;
}

class NatGatewayAddressList {
}

class NatGatewayId {
}

class NatGatewayIdStringList {
}

class NatGatewayList {
}

class NatGatewayState {
}

class NetworkAcl {
  public NetworkAclAssociationList $associations;
  public NetworkAclEntryList $entries;
  public boolean $is_default;
  public string $network_acl_id;
  public string $owner_id;
  public TagList $tags;
  public string $vpc_id;
}

class NetworkAclAssociation {
  public string $network_acl_association_id;
  public string $network_acl_id;
  public string $subnet_id;
}

class NetworkAclAssociationId {
}

class NetworkAclAssociationList {
}

class NetworkAclEntry {
  public string $cidr_block;
  public boolean $egress;
  public IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
  public PortRange $port_range;
  public string $protocol;
  public RuleAction $rule_action;
  public int $rule_number;
}

class NetworkAclEntryList {
}

class NetworkAclId {
}

class NetworkAclIdStringList {
}

class NetworkAclList {
}

class NetworkInfo {
  public EnaSupport $ena_support;
  public MaxIpv4AddrPerInterface $ipv_4_addresses_per_interface;
  public MaxIpv6AddrPerInterface $ipv_6_addresses_per_interface;
  public Ipv6Flag $ipv_6_supported;
  public MaxNetworkInterfaces $maximum_network_interfaces;
  public NetworkPerformance $network_performance;
}

class NetworkInterface {
  public NetworkInterfaceAssociation $association;
  public NetworkInterfaceAttachment $attachment;
  public string $availability_zone;
  public string $description;
  public GroupIdentifierList $groups;
  public NetworkInterfaceType $interface_type;
  public NetworkInterfaceIpv6AddressesList $ipv_6_addresses;
  public string $mac_address;
  public string $network_interface_id;
  public string $outpost_arn;
  public string $owner_id;
  public string $private_dns_name;
  public string $private_ip_address;
  public NetworkInterfacePrivateIpAddressList $private_ip_addresses;
  public string $requester_id;
  public boolean $requester_managed;
  public boolean $source_dest_check;
  public NetworkInterfaceStatus $status;
  public string $subnet_id;
  public TagList $tag_set;
  public string $vpc_id;
}

class NetworkInterfaceAssociation {
  public string $allocation_id;
  public string $association_id;
  public string $ip_owner_id;
  public string $public_dns_name;
  public string $public_ip;
}

class NetworkInterfaceAttachment {
  public DateTime $attach_time;
  public string $attachment_id;
  public boolean $delete_on_termination;
  public int $device_index;
  public string $instance_id;
  public string $instance_owner_id;
  public AttachmentStatus $status;
}

class NetworkInterfaceAttachmentChanges {
  public NetworkInterfaceAttachmentId $attachment_id;
  public boolean $delete_on_termination;
}

class NetworkInterfaceAttachmentId {
}

class NetworkInterfaceAttribute {
}

class NetworkInterfaceCreationType {
}

class NetworkInterfaceId {
}

class NetworkInterfaceIdList {
}

class NetworkInterfaceIpv6Address {
  public string $ipv_6_address;
}

class NetworkInterfaceIpv6AddressesList {
}

class NetworkInterfaceList {
}

class NetworkInterfacePermission {
  public string $aws_account_id;
  public string $aws_service;
  public string $network_interface_id;
  public string $network_interface_permission_id;
  public InterfacePermissionType $permission;
  public NetworkInterfacePermissionState $permission_state;
}

class NetworkInterfacePermissionId {
}

class NetworkInterfacePermissionIdList {
}

class NetworkInterfacePermissionList {
}

class NetworkInterfacePermissionState {
  public NetworkInterfacePermissionStateCode $state;
  public string $status_message;
}

class NetworkInterfacePermissionStateCode {
}

class NetworkInterfacePrivateIpAddress {
  public NetworkInterfaceAssociation $association;
  public boolean $primary;
  public string $private_dns_name;
  public string $private_ip_address;
}

class NetworkInterfacePrivateIpAddressList {
}

class NetworkInterfaceStatus {
}

class NetworkInterfaceType {
}

class NetworkPerformance {
}

class NewDhcpConfiguration {
  public string $key;
  public ValueStringList $values;
}

class NewDhcpConfigurationList {
}

class NextToken {
}

class OccurrenceDayRequestSet {
}

class OccurrenceDaySet {
}

class OfferingClassType {
}

class OfferingId {
}

class OfferingTypeValues {
}

class OnDemandAllocationStrategy {
}

class OnDemandOptions {
  public FleetOnDemandAllocationStrategy $allocation_strategy;
  public CapacityReservationOptions $capacity_reservation_options;
  public string $max_total_price;
  public int $min_target_capacity;
  public boolean $single_availability_zone;
  public boolean $single_instance_type;
}

class OnDemandOptionsRequest {
  public FleetOnDemandAllocationStrategy $allocation_strategy;
  public CapacityReservationOptionsRequest $capacity_reservation_options;
  public string $max_total_price;
  public int $min_target_capacity;
  public boolean $single_availability_zone;
  public boolean $single_instance_type;
}

class OperationType {
}

class OwnerStringList {
}

class PaymentOption {
}

class PciId {
  public string $device_id;
  public string $subsystem_id;
  public string $subsystem_vendor_id;
  public string $vendor_id;
}

class PeeringAttachmentStatus {
  public string $code;
  public string $message;
}

class PeeringConnectionOptions {
  public boolean $allow_dns_resolution_from_remote_vpc;
  public boolean $allow_egress_from_local_classic_link_to_remote_vpc;
  public boolean $allow_egress_from_local_vpc_to_remote_classic_link;
}

class PeeringConnectionOptionsRequest {
  public boolean $allow_dns_resolution_from_remote_vpc;
  public boolean $allow_egress_from_local_classic_link_to_remote_vpc;
  public boolean $allow_egress_from_local_vpc_to_remote_classic_link;
}

class PeeringTgwInfo {
  public string $owner_id;
  public string $region;
  public string $transit_gateway_id;
}

class PermissionGroup {
}

class Phase1DHGroupNumbersList {
}

class Phase1DHGroupNumbersListValue {
  public int $value;
}

class Phase1DHGroupNumbersRequestList {
}

class Phase1DHGroupNumbersRequestListValue {
  public int $value;
}

class Phase1EncryptionAlgorithmsList {
}

class Phase1EncryptionAlgorithmsListValue {
  public string $value;
}

class Phase1EncryptionAlgorithmsRequestList {
}

class Phase1EncryptionAlgorithmsRequestListValue {
  public string $value;
}

class Phase1IntegrityAlgorithmsList {
}

class Phase1IntegrityAlgorithmsListValue {
  public string $value;
}

class Phase1IntegrityAlgorithmsRequestList {
}

class Phase1IntegrityAlgorithmsRequestListValue {
  public string $value;
}

class Phase2DHGroupNumbersList {
}

class Phase2DHGroupNumbersListValue {
  public int $value;
}

class Phase2DHGroupNumbersRequestList {
}

class Phase2DHGroupNumbersRequestListValue {
  public int $value;
}

class Phase2EncryptionAlgorithmsList {
}

class Phase2EncryptionAlgorithmsListValue {
  public string $value;
}

class Phase2EncryptionAlgorithmsRequestList {
}

class Phase2EncryptionAlgorithmsRequestListValue {
  public string $value;
}

class Phase2IntegrityAlgorithmsList {
}

class Phase2IntegrityAlgorithmsListValue {
  public string $value;
}

class Phase2IntegrityAlgorithmsRequestList {
}

class Phase2IntegrityAlgorithmsRequestListValue {
  public string $value;
}

class Placement {
  public string $affinity;
  public string $availability_zone;
  public string $group_name;
  public string $host_id;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $spread_domain;
  public Tenancy $tenancy;
}

class PlacementGroup {
  public string $group_id;
  public string $group_name;
  public int $partition_count;
  public PlacementGroupState $state;
  public PlacementStrategy $strategy;
  public TagList $tags;
}

class PlacementGroupId {
}

class PlacementGroupIdStringList {
}

class PlacementGroupInfo {
  public PlacementGroupStrategyList $supported_strategies;
}

class PlacementGroupList {
}

class PlacementGroupName {
}

class PlacementGroupState {
}

class PlacementGroupStrategy {
}

class PlacementGroupStrategyList {
}

class PlacementGroupStringList {
}

class PlacementResponse {
  public string $group_name;
}

class PlacementStrategy {
}

class PlatformValues {
}

class PoolCidrBlock {
  public string $cidr;
}

class PoolCidrBlocksSet {
}

class PoolMaxResults {
}

class PortRange {
  public int $from;
  public int $to;
}

class PrefixList {
  public ValueStringList $cidrs;
  public string $prefix_list_id;
  public string $prefix_list_name;
}

class PrefixListId {
  public string $description;
  public string $prefix_list_id;
}

class PrefixListIdList {
}

class PrefixListIdSet {
}

class PrefixListResourceId {
}

class PrefixListResourceIdStringList {
}

class PrefixListSet {
}

class PriceSchedule {
  public boolean $active;
  public CurrencyCodeValues $currency_code;
  public Double $price;
  public Long $term;
}

class PriceScheduleList {
}

class PriceScheduleSpecification {
  public CurrencyCodeValues $currency_code;
  public Double $price;
  public Long $term;
}

class PriceScheduleSpecificationList {
}

class PricingDetail {
  public int $count;
  public Double $price;
}

class PricingDetailsList {
}

class PrincipalIdFormat {
  public string $arn;
  public IdFormatList $statuses;
}

class PrincipalIdFormatList {
}

class PrincipalType {
}

class PrivateDnsNameConfiguration {
  public string $name;
  public DnsNameState $state;
  public string $type;
  public string $value;
}

class PrivateIpAddressConfigSet {
}

class PrivateIpAddressSpecification {
  public boolean $primary;
  public string $private_ip_address;
}

class PrivateIpAddressSpecificationList {
}

class PrivateIpAddressStringList {
}

class ProcessorInfo {
  public ArchitectureTypeList $supported_architectures;
  public ProcessorSustainedClockSpeed $sustained_clock_speed_in_ghz;
}

class ProcessorSustainedClockSpeed {
}

class ProductCode {
  public string $product_code_id;
  public ProductCodeValues $product_code_type;
}

class ProductCodeList {
}

class ProductCodeStringList {
}

class ProductCodeValues {
}

class ProductDescriptionList {
}

class PropagatingVgw {
  public string $gateway_id;
}

class PropagatingVgwList {
}

class ProvisionByoipCidrRequest {
  public string $cidr;
  public CidrAuthorizationContext $cidr_authorization_context;
  public string $description;
  public boolean $dry_run;
  public boolean $publicly_advertisable;
}

class ProvisionByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class ProvisionedBandwidth {
  public DateTime $provision_time;
  public string $provisioned;
  public DateTime $request_time;
  public string $requested;
  public string $status;
}

class PublicIpStringList {
}

class PublicIpv4Pool {
  public string $description;
  public PublicIpv4PoolRangeSet $pool_address_ranges;
  public string $pool_id;
  public TagList $tags;
  public int $total_address_count;
  public int $total_available_address_count;
}

class PublicIpv4PoolIdStringList {
}

class PublicIpv4PoolRange {
  public int $address_count;
  public int $available_address_count;
  public string $first_address;
  public string $last_address;
}

class PublicIpv4PoolRangeSet {
}

class PublicIpv4PoolSet {
}

class Purchase {
  public CurrencyCodeValues $currency_code;
  public int $duration;
  public ResponseHostIdSet $host_id_set;
  public string $host_reservation_id;
  public string $hourly_price;
  public string $instance_family;
  public PaymentOption $payment_option;
  public string $upfront_price;
}

class PurchaseHostReservationRequest {
  public string $client_token;
  public CurrencyCodeValues $currency_code;
  public RequestHostIdSet $host_id_set;
  public string $limit_price;
  public OfferingId $offering_id;
}

class PurchaseHostReservationResult {
  public string $client_token;
  public CurrencyCodeValues $currency_code;
  public PurchaseSet $purchase;
  public string $total_hourly_price;
  public string $total_upfront_price;
}

class PurchaseRequest {
  public int $instance_count;
  public string $purchase_token;
}

class PurchaseRequestSet {
}

class PurchaseReservedInstancesOfferingRequest {
  public boolean $dry_run;
  public int $instance_count;
  public ReservedInstanceLimitPrice $limit_price;
  public DateTime $purchase_time;
  public ReservedInstancesOfferingId $reserved_instances_offering_id;
}

class PurchaseReservedInstancesOfferingResult {
  public string $reserved_instances_id;
}

class PurchaseScheduledInstancesRequest {
  public string $client_token;
  public boolean $dry_run;
  public PurchaseRequestSet $purchase_requests;
}

class PurchaseScheduledInstancesResult {
  public PurchasedScheduledInstanceSet $scheduled_instance_set;
}

class PurchaseSet {
}

class PurchasedScheduledInstanceSet {
}

class RIProductDescription {
}

class RamdiskId {
}

class ReasonCodesList {
}

class RebootInstancesRequest {
  public boolean $dry_run;
  public InstanceIdStringList $instance_ids;
}

class RecurringCharge {
  public Double $amount;
  public RecurringChargeFrequency $frequency;
}

class RecurringChargeFrequency {
}

class RecurringChargesList {
}

class Region {
  public string $endpoint;
  public string $opt_in_status;
  public string $region_name;
}

class RegionList {
}

class RegionNameStringList {
}

class RegisterImageRequest {
  public ArchitectureValues $architecture;
  public BillingProductList $billing_products;
  public BlockDeviceMappingRequestList $block_device_mappings;
  public string $description;
  public boolean $dry_run;
  public boolean $ena_support;
  public string $image_location;
  public KernelId $kernel_id;
  public string $name;
  public RamdiskId $ramdisk_id;
  public string $root_device_name;
  public string $sriov_net_support;
  public string $virtualization_type;
}

class RegisterImageResult {
  public string $image_id;
}

class RegisterInstanceEventNotificationAttributesRequest {
  public boolean $dry_run;
  public RegisterInstanceTagAttributeRequest $instance_tag_attribute;
}

class RegisterInstanceEventNotificationAttributesResult {
  public InstanceTagNotificationAttribute $instance_tag_attribute;
}

class RegisterInstanceTagAttributeRequest {
  public boolean $include_all_tags_of_instance;
  public InstanceTagKeySet $instance_tag_keys;
}

class RegisterTransitGatewayMulticastGroupMembersRequest {
  public boolean $dry_run;
  public string $group_ip_address;
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class RegisterTransitGatewayMulticastGroupMembersResult {
  public TransitGatewayMulticastRegisteredGroupMembers $registered_multicast_group_members;
}

class RegisterTransitGatewayMulticastGroupSourcesRequest {
  public boolean $dry_run;
  public string $group_ip_address;
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class RegisterTransitGatewayMulticastGroupSourcesResult {
  public TransitGatewayMulticastRegisteredGroupSources $registered_multicast_group_sources;
}

class RejectTransitGatewayPeeringAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class RejectTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class RejectTransitGatewayVpcAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class RejectTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class RejectVpcEndpointConnectionsRequest {
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class RejectVpcEndpointConnectionsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class RejectVpcPeeringConnectionRequest {
  public boolean $dry_run;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class RejectVpcPeeringConnectionResult {
  public boolean $return;
}

class ReleaseAddressRequest {
  public AllocationId $allocation_id;
  public boolean $dry_run;
  public string $network_border_group;
  public string $public_ip;
}

class ReleaseHostsRequest {
  public RequestHostIdList $host_ids;
}

class ReleaseHostsResult {
  public ResponseHostIdList $successful;
  public UnsuccessfulItemList $unsuccessful;
}

class ReplaceIamInstanceProfileAssociationRequest {
  public IamInstanceProfileAssociationId $association_id;
  public IamInstanceProfileSpecification $iam_instance_profile;
}

class ReplaceIamInstanceProfileAssociationResult {
  public IamInstanceProfileAssociation $iam_instance_profile_association;
}

class ReplaceNetworkAclAssociationRequest {
  public NetworkAclAssociationId $association_id;
  public boolean $dry_run;
  public NetworkAclId $network_acl_id;
}

class ReplaceNetworkAclAssociationResult {
  public string $new_association_id;
}

class ReplaceNetworkAclEntryRequest {
  public string $cidr_block;
  public boolean $dry_run;
  public boolean $egress;
  public IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
  public NetworkAclId $network_acl_id;
  public PortRange $port_range;
  public string $protocol;
  public RuleAction $rule_action;
  public int $rule_number;
}

class ReplaceRouteRequest {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public boolean $dry_run;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public RouteGatewayId $gateway_id;
  public InstanceId $instance_id;
  public LocalGatewayId $local_gateway_id;
  public boolean $local_target;
  public NatGatewayId $nat_gateway_id;
  public NetworkInterfaceId $network_interface_id;
  public RouteTableId $route_table_id;
  public TransitGatewayId $transit_gateway_id;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class ReplaceRouteTableAssociationRequest {
  public RouteTableAssociationId $association_id;
  public boolean $dry_run;
  public RouteTableId $route_table_id;
}

class ReplaceRouteTableAssociationResult {
  public RouteTableAssociationState $association_state;
  public string $new_association_id;
}

class ReplaceTransitGatewayRouteRequest {
  public boolean $blackhole;
  public string $destination_cidr_block;
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class ReplaceTransitGatewayRouteResult {
  public TransitGatewayRoute $route;
}

class ReportInstanceReasonCodes {
}

class ReportInstanceStatusRequest {
  public string $description;
  public boolean $dry_run;
  public DateTime $end_time;
  public InstanceIdStringList $instances;
  public ReasonCodesList $reason_codes;
  public DateTime $start_time;
  public ReportStatusType $status;
}

class ReportStatusType {
}

class RequestHostIdList {
}

class RequestHostIdSet {
}

class RequestInstanceTypeList {
}

class RequestLaunchTemplateData {
  public LaunchTemplateBlockDeviceMappingRequestList $block_device_mappings;
  public LaunchTemplateCapacityReservationSpecificationRequest $capacity_reservation_specification;
  public LaunchTemplateCpuOptionsRequest $cpu_options;
  public CreditSpecificationRequest $credit_specification;
  public boolean $disable_api_termination;
  public boolean $ebs_optimized;
  public ElasticGpuSpecificationList $elastic_gpu_specifications;
  public LaunchTemplateElasticInferenceAcceleratorList $elastic_inference_accelerators;
  public LaunchTemplateHibernationOptionsRequest $hibernation_options;
  public LaunchTemplateIamInstanceProfileSpecificationRequest $iam_instance_profile;
  public ImageId $image_id;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public LaunchTemplateInstanceMarketOptionsRequest $instance_market_options;
  public InstanceType $instance_type;
  public KernelId $kernel_id;
  public KeyPairName $key_name;
  public LaunchTemplateLicenseSpecificationListRequest $license_specifications;
  public LaunchTemplateInstanceMetadataOptionsRequest $metadata_options;
  public LaunchTemplatesMonitoringRequest $monitoring;
  public LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList $network_interfaces;
  public LaunchTemplatePlacementRequest $placement;
  public RamdiskId $ram_disk_id;
  public SecurityGroupIdStringList $security_group_ids;
  public SecurityGroupStringList $security_groups;
  public LaunchTemplateTagSpecificationRequestList $tag_specifications;
  public string $user_data;
}

class RequestSpotFleetRequest {
  public boolean $dry_run;
  public SpotFleetRequestConfigData $spot_fleet_request_config;
}

class RequestSpotFleetResponse {
  public string $spot_fleet_request_id;
}

class RequestSpotInstancesRequest {
  public string $availability_zone_group;
  public int $block_duration_minutes;
  public string $client_token;
  public boolean $dry_run;
  public int $instance_count;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $launch_group;
  public RequestSpotLaunchSpecification $launch_specification;
  public string $spot_price;
  public SpotInstanceType $type;
  public DateTime $valid_from;
  public DateTime $valid_until;
}

class RequestSpotInstancesResult {
  public SpotInstanceRequestList $spot_instance_requests;
}

class RequestSpotLaunchSpecification {
  public string $addressing_type;
  public BlockDeviceMappingList $block_device_mappings;
  public boolean $ebs_optimized;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public ImageId $image_id;
  public InstanceType $instance_type;
  public KernelId $kernel_id;
  public KeyPairName $key_name;
  public RunInstancesMonitoringEnabled $monitoring;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public SpotPlacement $placement;
  public RamdiskId $ramdisk_id;
  public RequestSpotLaunchSpecificationSecurityGroupIdList $security_group_ids;
  public RequestSpotLaunchSpecificationSecurityGroupList $security_groups;
  public SubnetId $subnet_id;
  public string $user_data;
}

class RequestSpotLaunchSpecificationSecurityGroupIdList {
}

class RequestSpotLaunchSpecificationSecurityGroupList {
}

class Reservation {
  public GroupIdentifierList $groups;
  public InstanceList $instances;
  public string $owner_id;
  public string $requester_id;
  public string $reservation_id;
}

class ReservationId {
}

class ReservationList {
}

class ReservationState {
}

class ReservationValue {
  public string $hourly_price;
  public string $remaining_total_value;
  public string $remaining_upfront_value;
}

class ReservedInstanceIdSet {
}

class ReservedInstanceLimitPrice {
  public Double $amount;
  public CurrencyCodeValues $currency_code;
}

class ReservedInstanceReservationValue {
  public ReservationValue $reservation_value;
  public string $reserved_instance_id;
}

class ReservedInstanceReservationValueSet {
}

class ReservedInstanceState {
}

class ReservedInstances {
  public string $availability_zone;
  public CurrencyCodeValues $currency_code;
  public Long $duration;
  public DateTime $end;
  public Float $fixed_price;
  public int $instance_count;
  public Tenancy $instance_tenancy;
  public InstanceType $instance_type;
  public OfferingClassType $offering_class;
  public OfferingTypeValues $offering_type;
  public RIProductDescription $product_description;
  public RecurringChargesList $recurring_charges;
  public string $reserved_instances_id;
  public scope $scope;
  public DateTime $start;
  public ReservedInstanceState $state;
  public TagList $tags;
  public Float $usage_price;
}

class ReservedInstancesConfiguration {
  public string $availability_zone;
  public int $instance_count;
  public InstanceType $instance_type;
  public string $platform;
  public scope $scope;
}

class ReservedInstancesConfigurationList {
}

class ReservedInstancesId {
  public string $reserved_instances_id;
}

class ReservedInstancesIdStringList {
}

class ReservedInstancesList {
}

class ReservedInstancesListing {
  public string $client_token;
  public DateTime $create_date;
  public InstanceCountList $instance_counts;
  public PriceScheduleList $price_schedules;
  public string $reserved_instances_id;
  public string $reserved_instances_listing_id;
  public ListingStatus $status;
  public string $status_message;
  public TagList $tags;
  public DateTime $update_date;
}

class ReservedInstancesListingId {
}

class ReservedInstancesListingList {
}

class ReservedInstancesModification {
  public string $client_token;
  public DateTime $create_date;
  public DateTime $effective_date;
  public ReservedInstancesModificationResultList $modification_results;
  public ReservedIntancesIds $reserved_instances_ids;
  public string $reserved_instances_modification_id;
  public string $status;
  public string $status_message;
  public DateTime $update_date;
}

class ReservedInstancesModificationId {
}

class ReservedInstancesModificationIdStringList {
}

class ReservedInstancesModificationList {
}

class ReservedInstancesModificationResult {
  public string $reserved_instances_id;
  public ReservedInstancesConfiguration $target_configuration;
}

class ReservedInstancesModificationResultList {
}

class ReservedInstancesOffering {
  public string $availability_zone;
  public CurrencyCodeValues $currency_code;
  public Long $duration;
  public Float $fixed_price;
  public Tenancy $instance_tenancy;
  public InstanceType $instance_type;
  public boolean $marketplace;
  public OfferingClassType $offering_class;
  public OfferingTypeValues $offering_type;
  public PricingDetailsList $pricing_details;
  public RIProductDescription $product_description;
  public RecurringChargesList $recurring_charges;
  public string $reserved_instances_offering_id;
  public scope $scope;
  public Float $usage_price;
}

class ReservedInstancesOfferingId {
}

class ReservedInstancesOfferingIdStringList {
}

class ReservedInstancesOfferingList {
}

class ReservedIntancesIds {
}

class ResetEbsDefaultKmsKeyIdRequest {
  public boolean $dry_run;
}

class ResetEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;
}

class ResetFpgaImageAttributeName {
}

class ResetFpgaImageAttributeRequest {
  public ResetFpgaImageAttributeName $attribute;
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
}

class ResetFpgaImageAttributeResult {
  public boolean $return;
}

class ResetImageAttributeName {
}

class ResetImageAttributeRequest {
  public ResetImageAttributeName $attribute;
  public boolean $dry_run;
  public ImageId $image_id;
}

class ResetInstanceAttributeRequest {
  public InstanceAttributeName $attribute;
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class ResetNetworkInterfaceAttributeRequest {
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
  public string $source_dest_check;
}

class ResetSnapshotAttributeRequest {
  public SnapshotAttributeName $attribute;
  public boolean $dry_run;
  public SnapshotId $snapshot_id;
}

class ResourceIdList {
}

class ResourceList {
}

class ResourceType {
}

class ResponseError {
  public LaunchTemplateErrorCode $code;
  public string $message;
}

class ResponseHostIdList {
}

class ResponseHostIdSet {
}

class ResponseLaunchTemplateData {
  public LaunchTemplateBlockDeviceMappingList $block_device_mappings;
  public LaunchTemplateCapacityReservationSpecificationResponse $capacity_reservation_specification;
  public LaunchTemplateCpuOptions $cpu_options;
  public CreditSpecification $credit_specification;
  public boolean $disable_api_termination;
  public boolean $ebs_optimized;
  public ElasticGpuSpecificationResponseList $elastic_gpu_specifications;
  public LaunchTemplateElasticInferenceAcceleratorResponseList $elastic_inference_accelerators;
  public LaunchTemplateHibernationOptions $hibernation_options;
  public LaunchTemplateIamInstanceProfileSpecification $iam_instance_profile;
  public string $image_id;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public LaunchTemplateInstanceMarketOptions $instance_market_options;
  public InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public LaunchTemplateLicenseList $license_specifications;
  public LaunchTemplateInstanceMetadataOptions $metadata_options;
  public LaunchTemplatesMonitoring $monitoring;
  public LaunchTemplateInstanceNetworkInterfaceSpecificationList $network_interfaces;
  public LaunchTemplatePlacement $placement;
  public string $ram_disk_id;
  public ValueStringList $security_group_ids;
  public ValueStringList $security_groups;
  public LaunchTemplateTagSpecificationList $tag_specifications;
  public string $user_data;
}

class RestorableByStringList {
}

class RestoreAddressToClassicRequest {
  public boolean $dry_run;
  public string $public_ip;
}

class RestoreAddressToClassicResult {
  public string $public_ip;
  public Status $status;
}

class RevokeClientVpnIngressRequest {
  public string $access_group_id;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public boolean $revoke_all_groups;
  public string $target_network_cidr;
}

class RevokeClientVpnIngressResult {
  public ClientVpnAuthorizationRuleStatus $status;
}

class RevokeSecurityGroupEgressRequest {
  public string $cidr_ip;
  public boolean $dry_run;
  public int $from_port;
  public SecurityGroupId $group_id;
  public IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;
}

class RevokeSecurityGroupIngressRequest {
  public string $cidr_ip;
  public boolean $dry_run;
  public int $from_port;
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;
}

class RootDeviceType {
}

class RootDeviceTypeList {
}

class Route {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public string $destination_prefix_list_id;
  public string $egress_only_internet_gateway_id;
  public string $gateway_id;
  public string $instance_id;
  public string $instance_owner_id;
  public string $local_gateway_id;
  public string $nat_gateway_id;
  public string $network_interface_id;
  public RouteOrigin $origin;
  public RouteState $state;
  public string $transit_gateway_id;
  public string $vpc_peering_connection_id;
}

class RouteGatewayId {
}

class RouteList {
}

class RouteOrigin {
}

class RouteState {
}

class RouteTable {
  public RouteTableAssociationList $associations;
  public string $owner_id;
  public PropagatingVgwList $propagating_vgws;
  public string $route_table_id;
  public RouteList $routes;
  public TagList $tags;
  public string $vpc_id;
}

class RouteTableAssociation {
  public RouteTableAssociationState $association_state;
  public string $gateway_id;
  public boolean $main;
  public string $route_table_association_id;
  public string $route_table_id;
  public string $subnet_id;
}

class RouteTableAssociationId {
}

class RouteTableAssociationList {
}

class RouteTableAssociationState {
  public RouteTableAssociationStateCode $state;
  public string $status_message;
}

class RouteTableAssociationStateCode {
}

class RouteTableId {
}

class RouteTableIdStringList {
}

class RouteTableList {
}

class RuleAction {
}

class RunInstancesMonitoringEnabled {
  public boolean $enabled;
}

class RunInstancesRequest {
  public string $additional_info;
  public BlockDeviceMappingRequestList $block_device_mappings;
  public CapacityReservationSpecification $capacity_reservation_specification;
  public string $client_token;
  public CpuOptionsRequest $cpu_options;
  public CreditSpecificationRequest $credit_specification;
  public boolean $disable_api_termination;
  public boolean $dry_run;
  public boolean $ebs_optimized;
  public ElasticGpuSpecifications $elastic_gpu_specification;
  public ElasticInferenceAccelerators $elastic_inference_accelerators;
  public HibernationOptionsRequest $hibernation_options;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public ImageId $image_id;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public InstanceMarketOptionsRequest $instance_market_options;
  public InstanceType $instance_type;
  public int $ipv_6_address_count;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public KernelId $kernel_id;
  public KeyPairName $key_name;
  public LaunchTemplateSpecification $launch_template;
  public LicenseSpecificationListRequest $license_specifications;
  public int $max_count;
  public InstanceMetadataOptionsRequest $metadata_options;
  public int $min_count;
  public RunInstancesMonitoringEnabled $monitoring;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public Placement $placement;
  public string $private_ip_address;
  public RamdiskId $ramdisk_id;
  public SecurityGroupIdStringList $security_group_ids;
  public SecurityGroupStringList $security_groups;
  public SubnetId $subnet_id;
  public TagSpecificationList $tag_specifications;
  public string $user_data;
}

class RunScheduledInstancesRequest {
  public string $client_token;
  public boolean $dry_run;
  public int $instance_count;
  public ScheduledInstancesLaunchSpecification $launch_specification;
  public ScheduledInstanceId $scheduled_instance_id;
}

class RunScheduledInstancesResult {
  public InstanceIdSet $instance_id_set;
}

class S3Storage {
  public string $aws_access_key_id;
  public string $bucket;
  public string $prefix;
  public Blob $upload_policy;
  public string $upload_policy_signature;
}

class ScheduledInstance {
  public string $availability_zone;
  public DateTime $create_date;
  public string $hourly_price;
  public int $instance_count;
  public string $instance_type;
  public string $network_platform;
  public DateTime $next_slot_start_time;
  public string $platform;
  public DateTime $previous_slot_end_time;
  public ScheduledInstanceRecurrence $recurrence;
  public string $scheduled_instance_id;
  public int $slot_duration_in_hours;
  public DateTime $term_end_date;
  public DateTime $term_start_date;
  public int $total_scheduled_instance_hours;
}

class ScheduledInstanceAvailability {
  public string $availability_zone;
  public int $available_instance_count;
  public DateTime $first_slot_start_time;
  public string $hourly_price;
  public string $instance_type;
  public int $max_term_duration_in_days;
  public int $min_term_duration_in_days;
  public string $network_platform;
  public string $platform;
  public string $purchase_token;
  public ScheduledInstanceRecurrence $recurrence;
  public int $slot_duration_in_hours;
  public int $total_scheduled_instance_hours;
}

class ScheduledInstanceAvailabilitySet {
}

class ScheduledInstanceId {
}

class ScheduledInstanceIdRequestSet {
}

class ScheduledInstanceRecurrence {
  public string $frequency;
  public int $interval;
  public OccurrenceDaySet $occurrence_day_set;
  public boolean $occurrence_relative_to_end;
  public string $occurrence_unit;
}

class ScheduledInstanceRecurrenceRequest {
  public string $frequency;
  public int $interval;
  public OccurrenceDayRequestSet $occurrence_days;
  public boolean $occurrence_relative_to_end;
  public string $occurrence_unit;
}

class ScheduledInstanceSet {
}

class ScheduledInstancesBlockDeviceMapping {
  public string $device_name;
  public ScheduledInstancesEbs $ebs;
  public string $no_device;
  public string $virtual_name;
}

class ScheduledInstancesBlockDeviceMappingSet {
}

class ScheduledInstancesEbs {
  public boolean $delete_on_termination;
  public boolean $encrypted;
  public int $iops;
  public SnapshotId $snapshot_id;
  public int $volume_size;
  public string $volume_type;
}

class ScheduledInstancesIamInstanceProfile {
  public string $arn;
  public string $name;
}

class ScheduledInstancesIpv6Address {
  public Ipv6Address $ipv_6_address;
}

class ScheduledInstancesIpv6AddressList {
}

class ScheduledInstancesLaunchSpecification {
  public ScheduledInstancesBlockDeviceMappingSet $block_device_mappings;
  public boolean $ebs_optimized;
  public ScheduledInstancesIamInstanceProfile $iam_instance_profile;
  public ImageId $image_id;
  public string $instance_type;
  public KernelId $kernel_id;
  public KeyPairName $key_name;
  public ScheduledInstancesMonitoring $monitoring;
  public ScheduledInstancesNetworkInterfaceSet $network_interfaces;
  public ScheduledInstancesPlacement $placement;
  public RamdiskId $ramdisk_id;
  public ScheduledInstancesSecurityGroupIdSet $security_group_ids;
  public SubnetId $subnet_id;
  public string $user_data;
}

class ScheduledInstancesMonitoring {
  public boolean $enabled;
}

class ScheduledInstancesNetworkInterface {
  public boolean $associate_public_ip_address;
  public boolean $delete_on_termination;
  public string $description;
  public int $device_index;
  public ScheduledInstancesSecurityGroupIdSet $groups;
  public int $ipv_6_address_count;
  public ScheduledInstancesIpv6AddressList $ipv_6_addresses;
  public NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public PrivateIpAddressConfigSet $private_ip_address_configs;
  public int $secondary_private_ip_address_count;
  public SubnetId $subnet_id;
}

class ScheduledInstancesNetworkInterfaceSet {
}

class ScheduledInstancesPlacement {
  public string $availability_zone;
  public PlacementGroupName $group_name;
}

class ScheduledInstancesPrivateIpAddressConfig {
  public boolean $primary;
  public string $private_ip_address;
}

class ScheduledInstancesSecurityGroupIdSet {
}

class SearchLocalGatewayRoutesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public MaxResults $max_results;
  public string $next_token;
}

class SearchLocalGatewayRoutesResult {
  public string $next_token;
  public LocalGatewayRouteList $routes;
}

class SearchTransitGatewayMulticastGroupsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class SearchTransitGatewayMulticastGroupsResult {
  public TransitGatewayMulticastGroupList $multicast_groups;
  public string $next_token;
}

class SearchTransitGatewayRoutesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class SearchTransitGatewayRoutesResult {
  public boolean $additional_routes_available;
  public TransitGatewayRouteList $routes;
}

class SecurityGroup {
  public string $description;
  public string $group_id;
  public string $group_name;
  public IpPermissionList $ip_permissions;
  public IpPermissionList $ip_permissions_egress;
  public string $owner_id;
  public TagList $tags;
  public string $vpc_id;
}

class SecurityGroupId {
}

class SecurityGroupIdStringList {
}

class SecurityGroupIdentifier {
  public string $group_id;
  public string $group_name;
}

class SecurityGroupList {
}

class SecurityGroupName {
}

class SecurityGroupReference {
  public string $group_id;
  public string $referencing_vpc_id;
  public string $vpc_peering_connection_id;
}

class SecurityGroupReferences {
}

class SecurityGroupStringList {
}

class SendDiagnosticInterruptRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class SensitiveUserData {
}

class ServiceConfiguration {
  public boolean $acceptance_required;
  public ValueStringList $availability_zones;
  public ValueStringList $base_endpoint_dns_names;
  public boolean $manages_vpc_endpoints;
  public ValueStringList $network_load_balancer_arns;
  public string $private_dns_name;
  public PrivateDnsNameConfiguration $private_dns_name_configuration;
  public string $service_id;
  public string $service_name;
  public ServiceState $service_state;
  public ServiceTypeDetailSet $service_type;
  public TagList $tags;
}

class ServiceConfigurationSet {
}

class ServiceDetail {
  public boolean $acceptance_required;
  public ValueStringList $availability_zones;
  public ValueStringList $base_endpoint_dns_names;
  public boolean $manages_vpc_endpoints;
  public string $owner;
  public string $private_dns_name;
  public DnsNameState $private_dns_name_verification_state;
  public string $service_id;
  public string $service_name;
  public ServiceTypeDetailSet $service_type;
  public TagList $tags;
  public boolean $vpc_endpoint_policy_supported;
}

class ServiceDetailSet {
}

class ServiceState {
}

class ServiceType {
}

class ServiceTypeDetail {
  public ServiceType $service_type;
}

class ServiceTypeDetailSet {
}

class ShutdownBehavior {
}

class SlotDateTimeRangeRequest {
  public DateTime $earliest_time;
  public DateTime $latest_time;
}

class SlotStartTimeRangeRequest {
  public DateTime $earliest_time;
  public DateTime $latest_time;
}

class Snapshot {
  public string $data_encryption_key_id;
  public string $description;
  public boolean $encrypted;
  public string $kms_key_id;
  public string $owner_alias;
  public string $owner_id;
  public string $progress;
  public string $snapshot_id;
  public DateTime $start_time;
  public SnapshotState $state;
  public string $state_message;
  public TagList $tags;
  public string $volume_id;
  public int $volume_size;
}

class SnapshotAttributeName {
}

class SnapshotDetail {
  public string $description;
  public string $device_name;
  public Double $disk_image_size;
  public string $format;
  public string $progress;
  public string $snapshot_id;
  public string $status;
  public string $status_message;
  public string $url;
  public UserBucketDetails $user_bucket;
}

class SnapshotDetailList {
}

class SnapshotDiskContainer {
  public string $description;
  public string $format;
  public string $url;
  public UserBucket $user_bucket;
}

class SnapshotId {
}

class SnapshotIdStringList {
}

class SnapshotInfo {
  public string $description;
  public boolean $encrypted;
  public string $owner_id;
  public string $progress;
  public string $snapshot_id;
  public MillisecondDateTime $start_time;
  public SnapshotState $state;
  public TagList $tags;
  public string $volume_id;
  public int $volume_size;
}

class SnapshotList {
}

class SnapshotSet {
}

class SnapshotState {
}

class SnapshotTaskDetail {
  public string $description;
  public Double $disk_image_size;
  public boolean $encrypted;
  public string $format;
  public string $kms_key_id;
  public string $progress;
  public string $snapshot_id;
  public string $status;
  public string $status_message;
  public string $url;
  public UserBucketDetails $user_bucket;
}

class SpotAllocationStrategy {
}

class SpotDatafeedSubscription {
  public string $bucket;
  public SpotInstanceStateFault $fault;
  public string $owner_id;
  public string $prefix;
  public DatafeedSubscriptionState $state;
}

class SpotFleetLaunchSpecification {
  public string $addressing_type;
  public BlockDeviceMappingList $block_device_mappings;
  public boolean $ebs_optimized;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public string $image_id;
  public InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public SpotFleetMonitoring $monitoring;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public SpotPlacement $placement;
  public string $ramdisk_id;
  public GroupIdentifierList $security_groups;
  public string $spot_price;
  public string $subnet_id;
  public SpotFleetTagSpecificationList $tag_specifications;
  public string $user_data;
  public Double $weighted_capacity;
}

class SpotFleetMonitoring {
  public boolean $enabled;
}

class SpotFleetRequestConfig {
  public ActivityStatus $activity_status;
  public MillisecondDateTime $create_time;
  public SpotFleetRequestConfigData $spot_fleet_request_config;
  public string $spot_fleet_request_id;
  public BatchState $spot_fleet_request_state;
  public TagList $tags;
}

class SpotFleetRequestConfigData {
  public AllocationStrategy $allocation_strategy;
  public string $client_token;
  public ExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public Double $fulfilled_capacity;
  public string $iam_fleet_role;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public LaunchSpecsList $launch_specifications;
  public LaunchTemplateConfigList $launch_template_configs;
  public LoadBalancersConfig $load_balancers_config;
  public OnDemandAllocationStrategy $on_demand_allocation_strategy;
  public Double $on_demand_fulfilled_capacity;
  public string $on_demand_max_total_price;
  public int $on_demand_target_capacity;
  public boolean $replace_unhealthy_instances;
  public string $spot_max_total_price;
  public string $spot_price;
  public TagSpecificationList $tag_specifications;
  public int $target_capacity;
  public boolean $terminate_instances_with_expiration;
  public FleetType $type;
  public DateTime $valid_from;
  public DateTime $valid_until;
}

class SpotFleetRequestConfigSet {
}

class SpotFleetRequestId {
}

class SpotFleetRequestIdList {
}

class SpotFleetTagSpecification {
  public ResourceType $resource_type;
  public TagList $tags;
}

class SpotFleetTagSpecificationList {
}

class SpotInstanceInterruptionBehavior {
}

class SpotInstanceRequest {
  public string $actual_block_hourly_price;
  public string $availability_zone_group;
  public int $block_duration_minutes;
  public DateTime $create_time;
  public SpotInstanceStateFault $fault;
  public InstanceId $instance_id;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $launch_group;
  public LaunchSpecification $launch_specification;
  public string $launched_availability_zone;
  public RIProductDescription $product_description;
  public string $spot_instance_request_id;
  public string $spot_price;
  public SpotInstanceState $state;
  public SpotInstanceStatus $status;
  public TagList $tags;
  public SpotInstanceType $type;
  public DateTime $valid_from;
  public DateTime $valid_until;
}

class SpotInstanceRequestId {
}

class SpotInstanceRequestIdList {
}

class SpotInstanceRequestList {
}

class SpotInstanceState {
}

class SpotInstanceStateFault {
  public string $code;
  public string $message;
}

class SpotInstanceStatus {
  public string $code;
  public string $message;
  public DateTime $update_time;
}

class SpotInstanceType {
}

class SpotMarketOptions {
  public int $block_duration_minutes;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $max_price;
  public SpotInstanceType $spot_instance_type;
  public DateTime $valid_until;
}

class SpotOptions {
  public SpotAllocationStrategy $allocation_strategy;
  public SpotInstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public string $max_total_price;
  public int $min_target_capacity;
  public boolean $single_availability_zone;
  public boolean $single_instance_type;
}

class SpotOptionsRequest {
  public SpotAllocationStrategy $allocation_strategy;
  public SpotInstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public string $max_total_price;
  public int $min_target_capacity;
  public boolean $single_availability_zone;
  public boolean $single_instance_type;
}

class SpotPlacement {
  public string $availability_zone;
  public string $group_name;
  public Tenancy $tenancy;
}

class SpotPrice {
  public string $availability_zone;
  public InstanceType $instance_type;
  public RIProductDescription $product_description;
  public string $spot_price;
  public DateTime $timestamp;
}

class SpotPriceHistoryList {
}

class StaleIpPermission {
  public int $from_port;
  public string $ip_protocol;
  public IpRanges $ip_ranges;
  public PrefixListIdSet $prefix_list_ids;
  public int $to_port;
  public UserIdGroupPairSet $user_id_group_pairs;
}

class StaleIpPermissionSet {
}

class StaleSecurityGroup {
  public string $description;
  public string $group_id;
  public string $group_name;
  public StaleIpPermissionSet $stale_ip_permissions;
  public StaleIpPermissionSet $stale_ip_permissions_egress;
  public string $vpc_id;
}

class StaleSecurityGroupSet {
}

class StartInstancesRequest {
  public string $additional_info;
  public boolean $dry_run;
  public InstanceIdStringList $instance_ids;
}

class StartInstancesResult {
  public InstanceStateChangeList $starting_instances;
}

class StartVpcEndpointServicePrivateDnsVerificationRequest {
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
}

class StartVpcEndpointServicePrivateDnsVerificationResult {
  public boolean $return_value;
}

class State {
}

class StateReason {
  public string $code;
  public string $message;
}

class Status {
}

class StatusName {
}

class StatusType {
}

class StopInstancesRequest {
  public boolean $dry_run;
  public boolean $force;
  public boolean $hibernate;
  public InstanceIdStringList $instance_ids;
}

class StopInstancesResult {
  public InstanceStateChangeList $stopping_instances;
}

class Storage {
  public S3Storage $s_3;
}

class StorageLocation {
  public string $bucket;
  public string $key;
}

class String {
}

class Subnet {
  public boolean $assign_ipv_6_address_on_creation;
  public string $availability_zone;
  public string $availability_zone_id;
  public int $available_ip_address_count;
  public string $cidr_block;
  public boolean $default_for_az;
  public SubnetIpv6CidrBlockAssociationSet $ipv_6_cidr_block_association_set;
  public boolean $map_public_ip_on_launch;
  public string $outpost_arn;
  public string $owner_id;
  public SubnetState $state;
  public string $subnet_arn;
  public string $subnet_id;
  public TagList $tags;
  public string $vpc_id;
}

class SubnetAssociation {
  public TransitGatewayMulitcastDomainAssociationState $state;
  public string $subnet_id;
}

class SubnetAssociationList {
}

class SubnetCidrAssociationId {
}

class SubnetCidrBlockState {
  public SubnetCidrBlockStateCode $state;
  public string $status_message;
}

class SubnetCidrBlockStateCode {
}

class SubnetId {
}

class SubnetIdStringList {
}

class SubnetIpv6CidrBlockAssociation {
  public string $association_id;
  public string $ipv_6_cidr_block;
  public SubnetCidrBlockState $ipv_6_cidr_block_state;
}

class SubnetIpv6CidrBlockAssociationSet {
}

class SubnetList {
}

class SubnetState {
}

class SuccessfulInstanceCreditSpecificationItem {
  public string $instance_id;
}

class SuccessfulInstanceCreditSpecificationSet {
}

class SuccessfulQueuedPurchaseDeletion {
  public string $reserved_instances_id;
}

class SuccessfulQueuedPurchaseDeletionSet {
}

class SummaryStatus {
}

class Tag {
  public string $key;
  public string $value;
}

class TagDescription {
  public string $key;
  public string $resource_id;
  public ResourceType $resource_type;
  public string $value;
}

class TagDescriptionList {
}

class TagList {
}

class TagSpecification {
  public ResourceType $resource_type;
  public TagList $tags;
}

class TagSpecificationList {
}

class TaggableResourceId {
}

class TargetCapacitySpecification {
  public DefaultTargetCapacityType $default_target_capacity_type;
  public int $on_demand_target_capacity;
  public int $spot_target_capacity;
  public int $total_target_capacity;
}

class TargetCapacitySpecificationRequest {
  public DefaultTargetCapacityType $default_target_capacity_type;
  public int $on_demand_target_capacity;
  public int $spot_target_capacity;
  public int $total_target_capacity;
}

class TargetConfiguration {
  public int $instance_count;
  public string $offering_id;
}

class TargetConfigurationRequest {
  public int $instance_count;
  public ReservedInstancesOfferingId $offering_id;
}

class TargetConfigurationRequestSet {
}

class TargetGroup {
  public string $arn;
}

class TargetGroups {
}

class TargetGroupsConfig {
  public TargetGroups $target_groups;
}

class TargetNetwork {
  public string $association_id;
  public string $client_vpn_endpoint_id;
  public ValueStringList $security_groups;
  public AssociationStatus $status;
  public string $target_network_id;
  public string $vpc_id;
}

class TargetNetworkSet {
}

class TargetReservationValue {
  public ReservationValue $reservation_value;
  public TargetConfiguration $target_configuration;
}

class TargetReservationValueSet {
}

class TelemetryStatus {
}

class Tenancy {
}

class TerminateClientVpnConnectionsRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public VpnConnectionId $connection_id;
  public boolean $dry_run;
  public string $username;
}

class TerminateClientVpnConnectionsResult {
  public string $client_vpn_endpoint_id;
  public TerminateConnectionStatusSet $connection_statuses;
  public string $username;
}

class TerminateConnectionStatus {
  public string $connection_id;
  public ClientVpnConnectionStatus $current_status;
  public ClientVpnConnectionStatus $previous_status;
}

class TerminateConnectionStatusSet {
}

class TerminateInstancesRequest {
  public boolean $dry_run;
  public InstanceIdStringList $instance_ids;
}

class TerminateInstancesResult {
  public InstanceStateChangeList $terminating_instances;
}

class ThreadsPerCore {
}

class ThreadsPerCoreList {
}

class TrafficDirection {
}

class TrafficMirrorFilter {
  public string $description;
  public TrafficMirrorFilterRuleList $egress_filter_rules;
  public TrafficMirrorFilterRuleList $ingress_filter_rules;
  public TrafficMirrorNetworkServiceList $network_services;
  public TagList $tags;
  public string $traffic_mirror_filter_id;
}

class TrafficMirrorFilterId {
}

class TrafficMirrorFilterIdList {
}

class TrafficMirrorFilterRule {
  public string $description;
  public string $destination_cidr_block;
  public TrafficMirrorPortRange $destination_port_range;
  public int $protocol;
  public TrafficMirrorRuleAction $rule_action;
  public int $rule_number;
  public string $source_cidr_block;
  public TrafficMirrorPortRange $source_port_range;
  public TrafficDirection $traffic_direction;
  public string $traffic_mirror_filter_id;
  public string $traffic_mirror_filter_rule_id;
}

class TrafficMirrorFilterRuleField {
}

class TrafficMirrorFilterRuleFieldList {
}

class TrafficMirrorFilterRuleId {
}

class TrafficMirrorFilterRuleList {
}

class TrafficMirrorFilterSet {
}

class TrafficMirrorNetworkService {
}

class TrafficMirrorNetworkServiceList {
}

class TrafficMirrorPortRange {
  public int $from_port;
  public int $to_port;
}

class TrafficMirrorPortRangeRequest {
  public int $from_port;
  public int $to_port;
}

class TrafficMirrorRuleAction {
}

class TrafficMirrorSession {
  public string $description;
  public string $network_interface_id;
  public string $owner_id;
  public int $packet_length;
  public int $session_number;
  public TagList $tags;
  public string $traffic_mirror_filter_id;
  public string $traffic_mirror_session_id;
  public string $traffic_mirror_target_id;
  public int $virtual_network_id;
}

class TrafficMirrorSessionField {
}

class TrafficMirrorSessionFieldList {
}

class TrafficMirrorSessionId {
}

class TrafficMirrorSessionIdList {
}

class TrafficMirrorSessionSet {
}

class TrafficMirrorTarget {
  public string $description;
  public string $network_interface_id;
  public string $network_load_balancer_arn;
  public string $owner_id;
  public TagList $tags;
  public string $traffic_mirror_target_id;
  public TrafficMirrorTargetType $type;
}

class TrafficMirrorTargetId {
}

class TrafficMirrorTargetIdList {
}

class TrafficMirrorTargetSet {
}

class TrafficMirrorTargetType {
}

class TrafficMirroringMaxResults {
}

class TrafficType {
}

class TransitAssociationGatewayId {
}

class TransitGateway {
  public DateTime $creation_time;
  public string $description;
  public TransitGatewayOptions $options;
  public string $owner_id;
  public TransitGatewayState $state;
  public TagList $tags;
  public string $transit_gateway_arn;
  public string $transit_gateway_id;
}

class TransitGatewayAssociation {
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayAssociationState $state;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class TransitGatewayAssociationState {
}

class TransitGatewayAttachment {
  public TransitGatewayAttachmentAssociation $association;
  public DateTime $creation_time;
  public string $resource_id;
  public string $resource_owner_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayAttachmentState $state;
  public TagList $tags;
  public string $transit_gateway_attachment_id;
  public string $transit_gateway_id;
  public string $transit_gateway_owner_id;
}

class TransitGatewayAttachmentAssociation {
  public TransitGatewayAssociationState $state;
  public string $transit_gateway_route_table_id;
}

class TransitGatewayAttachmentId {
}

class TransitGatewayAttachmentIdStringList {
}

class TransitGatewayAttachmentList {
}

class TransitGatewayAttachmentPropagation {
  public TransitGatewayPropagationState $state;
  public string $transit_gateway_route_table_id;
}

class TransitGatewayAttachmentPropagationList {
}

class TransitGatewayAttachmentResourceType {
}

class TransitGatewayAttachmentState {
}

class TransitGatewayId {
}

class TransitGatewayIdStringList {
}

class TransitGatewayList {
}

class TransitGatewayMaxResults {
}

class TransitGatewayMulitcastDomainAssociationState {
}

class TransitGatewayMulticastDeregisteredGroupMembers {
  public ValueStringList $deregistered_network_interface_ids;
  public string $group_ip_address;
  public string $transit_gateway_multicast_domain_id;
}

class TransitGatewayMulticastDeregisteredGroupSources {
  public ValueStringList $deregistered_network_interface_ids;
  public string $group_ip_address;
  public string $transit_gateway_multicast_domain_id;
}

class TransitGatewayMulticastDomain {
  public DateTime $creation_time;
  public TransitGatewayMulticastDomainState $state;
  public TagList $tags;
  public string $transit_gateway_id;
  public string $transit_gateway_multicast_domain_id;
}

class TransitGatewayMulticastDomainAssociation {
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public SubnetAssociation $subnet;
  public string $transit_gateway_attachment_id;
}

class TransitGatewayMulticastDomainAssociationList {
}

class TransitGatewayMulticastDomainAssociations {
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public SubnetAssociationList $subnets;
  public string $transit_gateway_attachment_id;
  public string $transit_gateway_multicast_domain_id;
}

class TransitGatewayMulticastDomainId {
}

class TransitGatewayMulticastDomainIdStringList {
}

class TransitGatewayMulticastDomainList {
}

class TransitGatewayMulticastDomainState {
}

class TransitGatewayMulticastGroup {
  public string $group_ip_address;
  public boolean $group_member;
  public boolean $group_source;
  public MembershipType $member_type;
  public string $network_interface_id;
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public MembershipType $source_type;
  public string $subnet_id;
  public string $transit_gateway_attachment_id;
}

class TransitGatewayMulticastGroupList {
}

class TransitGatewayMulticastRegisteredGroupMembers {
  public string $group_ip_address;
  public ValueStringList $registered_network_interface_ids;
  public string $transit_gateway_multicast_domain_id;
}

class TransitGatewayMulticastRegisteredGroupSources {
  public string $group_ip_address;
  public ValueStringList $registered_network_interface_ids;
  public string $transit_gateway_multicast_domain_id;
}

class TransitGatewayNetworkInterfaceIdList {
}

class TransitGatewayOptions {
  public Long $amazon_side_asn;
  public string $association_default_route_table_id;
  public AutoAcceptSharedAttachmentsValue $auto_accept_shared_attachments;
  public DefaultRouteTableAssociationValue $default_route_table_association;
  public DefaultRouteTablePropagationValue $default_route_table_propagation;
  public DnsSupportValue $dns_support;
  public MulticastSupportValue $multicast_support;
  public string $propagation_default_route_table_id;
  public VpnEcmpSupportValue $vpn_ecmp_support;
}

class TransitGatewayPeeringAttachment {
  public PeeringTgwInfo $accepter_tgw_info;
  public DateTime $creation_time;
  public PeeringTgwInfo $requester_tgw_info;
  public TransitGatewayAttachmentState $state;
  public PeeringAttachmentStatus $status;
  public TagList $tags;
  public string $transit_gateway_attachment_id;
}

class TransitGatewayPeeringAttachmentList {
}

class TransitGatewayPropagation {
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayPropagationState $state;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public string $transit_gateway_route_table_id;
}

class TransitGatewayPropagationState {
}

class TransitGatewayRequestOptions {
  public Long $amazon_side_asn;
  public AutoAcceptSharedAttachmentsValue $auto_accept_shared_attachments;
  public DefaultRouteTableAssociationValue $default_route_table_association;
  public DefaultRouteTablePropagationValue $default_route_table_propagation;
  public DnsSupportValue $dns_support;
  public MulticastSupportValue $multicast_support;
  public VpnEcmpSupportValue $vpn_ecmp_support;
}

class TransitGatewayRoute {
  public string $destination_cidr_block;
  public TransitGatewayRouteState $state;
  public TransitGatewayRouteAttachmentList $transit_gateway_attachments;
  public TransitGatewayRouteType $type;
}

class TransitGatewayRouteAttachment {
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public string $transit_gateway_attachment_id;
}

class TransitGatewayRouteAttachmentList {
}

class TransitGatewayRouteList {
}

class TransitGatewayRouteState {
}

class TransitGatewayRouteTable {
  public DateTime $creation_time;
  public boolean $default_association_route_table;
  public boolean $default_propagation_route_table;
  public TransitGatewayRouteTableState $state;
  public TagList $tags;
  public string $transit_gateway_id;
  public string $transit_gateway_route_table_id;
}

class TransitGatewayRouteTableAssociation {
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayAssociationState $state;
  public string $transit_gateway_attachment_id;
}

class TransitGatewayRouteTableAssociationList {
}

class TransitGatewayRouteTableId {
}

class TransitGatewayRouteTableIdStringList {
}

class TransitGatewayRouteTableList {
}

class TransitGatewayRouteTablePropagation {
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayPropagationState $state;
  public string $transit_gateway_attachment_id;
}

class TransitGatewayRouteTablePropagationList {
}

class TransitGatewayRouteTableState {
}

class TransitGatewayRouteType {
}

class TransitGatewayState {
}

class TransitGatewaySubnetIdList {
}

class TransitGatewayVpcAttachment {
  public DateTime $creation_time;
  public TransitGatewayVpcAttachmentOptions $options;
  public TransitGatewayAttachmentState $state;
  public ValueStringList $subnet_ids;
  public TagList $tags;
  public string $transit_gateway_attachment_id;
  public string $transit_gateway_id;
  public string $vpc_id;
  public string $vpc_owner_id;
}

class TransitGatewayVpcAttachmentList {
}

class TransitGatewayVpcAttachmentOptions {
  public DnsSupportValue $dns_support;
  public Ipv6SupportValue $ipv_6_support;
}

class TransportProtocol {
}

class TunnelOption {
  public int $dpd_timeout_seconds;
  public IKEVersionsList $ike_versions;
  public string $outside_ip_address;
  public Phase1DHGroupNumbersList $phase_1_dh_group_numbers;
  public Phase1EncryptionAlgorithmsList $phase_1_encryption_algorithms;
  public Phase1IntegrityAlgorithmsList $phase_1_integrity_algorithms;
  public int $phase_1_lifetime_seconds;
  public Phase2DHGroupNumbersList $phase_2_dh_group_numbers;
  public Phase2EncryptionAlgorithmsList $phase_2_encryption_algorithms;
  public Phase2IntegrityAlgorithmsList $phase_2_integrity_algorithms;
  public int $phase_2_lifetime_seconds;
  public string $pre_shared_key;
  public int $rekey_fuzz_percentage;
  public int $rekey_margin_time_seconds;
  public int $replay_window_size;
  public string $tunnel_inside_cidr;
}

class TunnelOptionsList {
}

class UnassignIpv6AddressesRequest {
  public Ipv6AddressList $ipv_6_addresses;
  public NetworkInterfaceId $network_interface_id;
}

class UnassignIpv6AddressesResult {
  public string $network_interface_id;
  public Ipv6AddressList $unassigned_ipv_6_addresses;
}

class UnassignPrivateIpAddressesRequest {
  public NetworkInterfaceId $network_interface_id;
  public PrivateIpAddressStringList $private_ip_addresses;
}

class UnlimitedSupportedInstanceFamily {
}

class UnmonitorInstancesRequest {
  public boolean $dry_run;
  public InstanceIdStringList $instance_ids;
}

class UnmonitorInstancesResult {
  public InstanceMonitoringList $instance_monitorings;
}

class UnsuccessfulInstanceCreditSpecificationErrorCode {
}

class UnsuccessfulInstanceCreditSpecificationItem {
  public UnsuccessfulInstanceCreditSpecificationItemError $error;
  public string $instance_id;
}

class UnsuccessfulInstanceCreditSpecificationItemError {
  public UnsuccessfulInstanceCreditSpecificationErrorCode $code;
  public string $message;
}

class UnsuccessfulInstanceCreditSpecificationSet {
}

class UnsuccessfulItem {
  public UnsuccessfulItemError $error;
  public string $resource_id;
}

class UnsuccessfulItemError {
  public string $code;
  public string $message;
}

class UnsuccessfulItemList {
}

class UnsuccessfulItemSet {
}

class UpdateSecurityGroupRuleDescriptionsEgressRequest {
  public boolean $dry_run;
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public IpPermissionList $ip_permissions;
}

class UpdateSecurityGroupRuleDescriptionsEgressResult {
  public boolean $return;
}

class UpdateSecurityGroupRuleDescriptionsIngressRequest {
  public boolean $dry_run;
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public IpPermissionList $ip_permissions;
}

class UpdateSecurityGroupRuleDescriptionsIngressResult {
  public boolean $return;
}

class UsageClassType {
}

class UsageClassTypeList {
}

class UserBucket {
  public string $s_3_bucket;
  public string $s_3_key;
}

class UserBucketDetails {
  public string $s_3_bucket;
  public string $s_3_key;
}

class UserData {
  public string $data;
}

class UserGroupStringList {
}

class UserIdGroupPair {
  public string $description;
  public string $group_id;
  public string $group_name;
  public string $peering_status;
  public string $user_id;
  public string $vpc_id;
  public string $vpc_peering_connection_id;
}

class UserIdGroupPairList {
}

class UserIdGroupPairSet {
}

class UserIdStringList {
}

class VCpuCount {
}

class VCpuInfo {
  public CoreCount $default_cores;
  public ThreadsPerCore $default_threads_per_core;
  public VCpuCount $default_v_cpus;
  public CoreCountList $valid_cores;
  public ThreadsPerCoreList $valid_threads_per_core;
}

class ValueStringList {
}

class VersionDescription {
}

class VersionStringList {
}

class VgwTelemetry {
  public int $accepted_route_count;
  public string $certificate_arn;
  public DateTime $last_status_change;
  public string $outside_ip_address;
  public TelemetryStatus $status;
  public string $status_message;
}

class VgwTelemetryList {
}

class VirtualizationType {
}

class Volume {
  public VolumeAttachmentList $attachments;
  public string $availability_zone;
  public DateTime $create_time;
  public boolean $encrypted;
  public boolean $fast_restored;
  public int $iops;
  public string $kms_key_id;
  public boolean $multi_attach_enabled;
  public string $outpost_arn;
  public int $size;
  public string $snapshot_id;
  public VolumeState $state;
  public TagList $tags;
  public string $volume_id;
  public VolumeType $volume_type;
}

class VolumeAttachment {
  public DateTime $attach_time;
  public boolean $delete_on_termination;
  public string $device;
  public string $instance_id;
  public VolumeAttachmentState $state;
  public string $volume_id;
}

class VolumeAttachmentList {
}

class VolumeAttachmentState {
}

class VolumeAttributeName {
}

class VolumeDetail {
  public Long $size;
}

class VolumeId {
}

class VolumeIdStringList {
}

class VolumeList {
}

class VolumeModification {
  public DateTime $end_time;
  public VolumeModificationState $modification_state;
  public int $original_iops;
  public int $original_size;
  public VolumeType $original_volume_type;
  public Long $progress;
  public DateTime $start_time;
  public string $status_message;
  public int $target_iops;
  public int $target_size;
  public VolumeType $target_volume_type;
  public string $volume_id;
}

class VolumeModificationList {
}

class VolumeModificationState {
}

class VolumeState {
}

class VolumeStatusAction {
  public string $code;
  public string $description;
  public string $event_id;
  public string $event_type;
}

class VolumeStatusActionsList {
}

class VolumeStatusAttachmentStatus {
  public string $instance_id;
  public string $io_performance;
}

class VolumeStatusAttachmentStatusList {
}

class VolumeStatusDetails {
  public VolumeStatusName $name;
  public string $status;
}

class VolumeStatusDetailsList {
}

class VolumeStatusEvent {
  public string $description;
  public string $event_id;
  public string $event_type;
  public string $instance_id;
  public MillisecondDateTime $not_after;
  public MillisecondDateTime $not_before;
}

class VolumeStatusEventsList {
}

class VolumeStatusInfo {
  public VolumeStatusDetailsList $details;
  public VolumeStatusInfoStatus $status;
}

class VolumeStatusInfoStatus {
}

class VolumeStatusItem {
  public VolumeStatusActionsList $actions;
  public VolumeStatusAttachmentStatusList $attachment_statuses;
  public string $availability_zone;
  public VolumeStatusEventsList $events;
  public string $outpost_arn;
  public string $volume_id;
  public VolumeStatusInfo $volume_status;
}

class VolumeStatusList {
}

class VolumeStatusName {
}

class VolumeType {
}

class Vpc {
  public string $cidr_block;
  public VpcCidrBlockAssociationSet $cidr_block_association_set;
  public string $dhcp_options_id;
  public Tenancy $instance_tenancy;
  public VpcIpv6CidrBlockAssociationSet $ipv_6_cidr_block_association_set;
  public boolean $is_default;
  public string $owner_id;
  public VpcState $state;
  public TagList $tags;
  public string $vpc_id;
}

class VpcAttachment {
  public AttachmentStatus $state;
  public string $vpc_id;
}

class VpcAttachmentList {
}

class VpcAttributeName {
}

class VpcCidrAssociationId {
}

class VpcCidrBlockAssociation {
  public string $association_id;
  public string $cidr_block;
  public VpcCidrBlockState $cidr_block_state;
}

class VpcCidrBlockAssociationSet {
}

class VpcCidrBlockState {
  public VpcCidrBlockStateCode $state;
  public string $status_message;
}

class VpcCidrBlockStateCode {
}

class VpcClassicLink {
  public boolean $classic_link_enabled;
  public TagList $tags;
  public string $vpc_id;
}

class VpcClassicLinkIdList {
}

class VpcClassicLinkList {
}

class VpcEndpoint {
  public MillisecondDateTime $creation_timestamp;
  public DnsEntrySet $dns_entries;
  public GroupIdentifierSet $groups;
  public LastError $last_error;
  public ValueStringList $network_interface_ids;
  public string $owner_id;
  public string $policy_document;
  public boolean $private_dns_enabled;
  public boolean $requester_managed;
  public ValueStringList $route_table_ids;
  public string $service_name;
  public State $state;
  public ValueStringList $subnet_ids;
  public TagList $tags;
  public string $vpc_endpoint_id;
  public VpcEndpointType $vpc_endpoint_type;
  public string $vpc_id;
}

class VpcEndpointConnection {
  public MillisecondDateTime $creation_timestamp;
  public DnsEntrySet $dns_entries;
  public ValueStringList $network_load_balancer_arns;
  public string $service_id;
  public string $vpc_endpoint_id;
  public string $vpc_endpoint_owner;
  public State $vpc_endpoint_state;
}

class VpcEndpointConnectionSet {
}

class VpcEndpointId {
}

class VpcEndpointIdList {
}

class VpcEndpointRouteTableIdList {
}

class VpcEndpointSecurityGroupIdList {
}

class VpcEndpointServiceId {
}

class VpcEndpointServiceIdList {
}

class VpcEndpointSet {
}

class VpcEndpointSubnetIdList {
}

class VpcEndpointType {
}

class VpcFlowLogId {
}

class VpcId {
}

class VpcIdStringList {
}

class VpcIpv6CidrBlockAssociation {
  public string $association_id;
  public string $ipv_6_cidr_block;
  public VpcCidrBlockState $ipv_6_cidr_block_state;
  public string $ipv_6_pool;
  public string $network_border_group;
}

class VpcIpv6CidrBlockAssociationSet {
}

class VpcList {
}

class VpcPeeringConnection {
  public VpcPeeringConnectionVpcInfo $accepter_vpc_info;
  public DateTime $expiration_time;
  public VpcPeeringConnectionVpcInfo $requester_vpc_info;
  public VpcPeeringConnectionStateReason $status;
  public TagList $tags;
  public string $vpc_peering_connection_id;
}

class VpcPeeringConnectionId {
}

class VpcPeeringConnectionIdList {
}

class VpcPeeringConnectionList {
}

class VpcPeeringConnectionOptionsDescription {
  public boolean $allow_dns_resolution_from_remote_vpc;
  public boolean $allow_egress_from_local_classic_link_to_remote_vpc;
  public boolean $allow_egress_from_local_vpc_to_remote_classic_link;
}

class VpcPeeringConnectionStateReason {
  public VpcPeeringConnectionStateReasonCode $code;
  public string $message;
}

class VpcPeeringConnectionStateReasonCode {
}

class VpcPeeringConnectionVpcInfo {
  public string $cidr_block;
  public CidrBlockSet $cidr_block_set;
  public Ipv6CidrBlockSet $ipv_6_cidr_block_set;
  public string $owner_id;
  public VpcPeeringConnectionOptionsDescription $peering_options;
  public string $region;
  public string $vpc_id;
}

class VpcState {
}

class VpcTenancy {
}

class VpnConnection {
  public string $category;
  public string $customer_gateway_configuration;
  public string $customer_gateway_id;
  public VpnConnectionOptions $options;
  public VpnStaticRouteList $routes;
  public VpnState $state;
  public TagList $tags;
  public string $transit_gateway_id;
  public GatewayType $type;
  public VgwTelemetryList $vgw_telemetry;
  public string $vpn_connection_id;
  public string $vpn_gateway_id;
}

class VpnConnectionId {
}

class VpnConnectionIdStringList {
}

class VpnConnectionList {
}

class VpnConnectionOptions {
  public boolean $enable_acceleration;
  public boolean $static_routes_only;
  public TunnelOptionsList $tunnel_options;
}

class VpnConnectionOptionsSpecification {
  public boolean $enable_acceleration;
  public boolean $static_routes_only;
  public VpnTunnelOptionsSpecificationsList $tunnel_options;
}

class VpnEcmpSupportValue {
}

class VpnGateway {
  public Long $amazon_side_asn;
  public string $availability_zone;
  public VpnState $state;
  public TagList $tags;
  public GatewayType $type;
  public VpcAttachmentList $vpc_attachments;
  public string $vpn_gateway_id;
}

class VpnGatewayId {
}

class VpnGatewayIdStringList {
}

class VpnGatewayList {
}

class VpnProtocol {
}

class VpnState {
}

class VpnStaticRoute {
  public string $destination_cidr_block;
  public VpnStaticRouteSource $source;
  public VpnState $state;
}

class VpnStaticRouteList {
}

class VpnStaticRouteSource {
}

class VpnTunnelOptionsSpecification {
  public int $dpd_timeout_seconds;
  public IKEVersionsRequestList $ike_versions;
  public Phase1DHGroupNumbersRequestList $phase_1_dh_group_numbers;
  public Phase1EncryptionAlgorithmsRequestList $phase_1_encryption_algorithms;
  public Phase1IntegrityAlgorithmsRequestList $phase_1_integrity_algorithms;
  public int $phase_1_lifetime_seconds;
  public Phase2DHGroupNumbersRequestList $phase_2_dh_group_numbers;
  public Phase2EncryptionAlgorithmsRequestList $phase_2_encryption_algorithms;
  public Phase2IntegrityAlgorithmsRequestList $phase_2_integrity_algorithms;
  public int $phase_2_lifetime_seconds;
  public string $pre_shared_key;
  public int $rekey_fuzz_percentage;
  public int $rekey_margin_time_seconds;
  public int $replay_window_size;
  public string $tunnel_inside_cidr;
}

class VpnTunnelOptionsSpecificationsList {
}

class WithdrawByoipCidrRequest {
  public string $cidr;
  public boolean $dry_run;
}

class WithdrawByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class ZoneIdStringList {
}

class ZoneNameStringList {
}

class scope {
}

class totalFpgaMemory {
}

class totalGpuMemory {
}

