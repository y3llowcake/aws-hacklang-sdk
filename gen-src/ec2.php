<?hh // strict
namespace slack\aws\ec2;

interface EC2 {
  public function AcceptReservedInstancesExchangeQuote(AcceptReservedInstancesExchangeQuoteRequest $in): Awaitable<\Errors\Result<AcceptReservedInstancesExchangeQuoteResult>>;
  public function AcceptTransitGatewayPeeringAttachment(AcceptTransitGatewayPeeringAttachmentRequest $in): Awaitable<\Errors\Result<AcceptTransitGatewayPeeringAttachmentResult>>;
  public function AcceptTransitGatewayVpcAttachment(AcceptTransitGatewayVpcAttachmentRequest $in): Awaitable<\Errors\Result<AcceptTransitGatewayVpcAttachmentResult>>;
  public function AcceptVpcEndpointConnections(AcceptVpcEndpointConnectionsRequest $in): Awaitable<\Errors\Result<AcceptVpcEndpointConnectionsResult>>;
  public function AcceptVpcPeeringConnection(AcceptVpcPeeringConnectionRequest $in): Awaitable<\Errors\Result<AcceptVpcPeeringConnectionResult>>;
  public function AdvertiseByoipCidr(AdvertiseByoipCidrRequest $in): Awaitable<\Errors\Result<AdvertiseByoipCidrResult>>;
  public function AllocateAddress(AllocateAddressRequest $in): Awaitable<\Errors\Result<AllocateAddressResult>>;
  public function AllocateHosts(AllocateHostsRequest $in): Awaitable<\Errors\Result<AllocateHostsResult>>;
  public function ApplySecurityGroupsToClientVpnTargetNetwork(ApplySecurityGroupsToClientVpnTargetNetworkRequest $in): Awaitable<\Errors\Result<ApplySecurityGroupsToClientVpnTargetNetworkResult>>;
  public function AssignIpv6Addresses(AssignIpv6AddressesRequest $in): Awaitable<\Errors\Result<AssignIpv6AddressesResult>>;
  public function AssignPrivateIpAddresses(AssignPrivateIpAddressesRequest $in): Awaitable<\Errors\Result<AssignPrivateIpAddressesResult>>;
  public function AssociateAddress(AssociateAddressRequest $in): Awaitable<\Errors\Result<AssociateAddressResult>>;
  public function AssociateClientVpnTargetNetwork(AssociateClientVpnTargetNetworkRequest $in): Awaitable<\Errors\Result<AssociateClientVpnTargetNetworkResult>>;
  public function AssociateDhcpOptions(AssociateDhcpOptionsRequest $in): Awaitable<\Errors\Error>;
  public function AssociateIamInstanceProfile(AssociateIamInstanceProfileRequest $in): Awaitable<\Errors\Result<AssociateIamInstanceProfileResult>>;
  public function AssociateRouteTable(AssociateRouteTableRequest $in): Awaitable<\Errors\Result<AssociateRouteTableResult>>;
  public function AssociateSubnetCidrBlock(AssociateSubnetCidrBlockRequest $in): Awaitable<\Errors\Result<AssociateSubnetCidrBlockResult>>;
  public function AssociateTransitGatewayMulticastDomain(AssociateTransitGatewayMulticastDomainRequest $in): Awaitable<\Errors\Result<AssociateTransitGatewayMulticastDomainResult>>;
  public function AssociateTransitGatewayRouteTable(AssociateTransitGatewayRouteTableRequest $in): Awaitable<\Errors\Result<AssociateTransitGatewayRouteTableResult>>;
  public function AssociateVpcCidrBlock(AssociateVpcCidrBlockRequest $in): Awaitable<\Errors\Result<AssociateVpcCidrBlockResult>>;
  public function AttachClassicLinkVpc(AttachClassicLinkVpcRequest $in): Awaitable<\Errors\Result<AttachClassicLinkVpcResult>>;
  public function AttachInternetGateway(AttachInternetGatewayRequest $in): Awaitable<\Errors\Error>;
  public function AttachNetworkInterface(AttachNetworkInterfaceRequest $in): Awaitable<\Errors\Result<AttachNetworkInterfaceResult>>;
  public function AttachVolume(AttachVolumeRequest $in): Awaitable<\Errors\Result<VolumeAttachment>>;
  public function AttachVpnGateway(AttachVpnGatewayRequest $in): Awaitable<\Errors\Result<AttachVpnGatewayResult>>;
  public function AuthorizeClientVpnIngress(AuthorizeClientVpnIngressRequest $in): Awaitable<\Errors\Result<AuthorizeClientVpnIngressResult>>;
  public function AuthorizeSecurityGroupEgress(AuthorizeSecurityGroupEgressRequest $in): Awaitable<\Errors\Error>;
  public function AuthorizeSecurityGroupIngress(AuthorizeSecurityGroupIngressRequest $in): Awaitable<\Errors\Error>;
  public function BundleInstance(BundleInstanceRequest $in): Awaitable<\Errors\Result<BundleInstanceResult>>;
  public function CancelBundleTask(CancelBundleTaskRequest $in): Awaitable<\Errors\Result<CancelBundleTaskResult>>;
  public function CancelCapacityReservation(CancelCapacityReservationRequest $in): Awaitable<\Errors\Result<CancelCapacityReservationResult>>;
  public function CancelConversionTask(CancelConversionRequest $in): Awaitable<\Errors\Error>;
  public function CancelExportTask(CancelExportTaskRequest $in): Awaitable<\Errors\Error>;
  public function CancelImportTask(CancelImportTaskRequest $in): Awaitable<\Errors\Result<CancelImportTaskResult>>;
  public function CancelReservedInstancesListing(CancelReservedInstancesListingRequest $in): Awaitable<\Errors\Result<CancelReservedInstancesListingResult>>;
  public function CancelSpotFleetRequests(CancelSpotFleetRequestsRequest $in): Awaitable<\Errors\Result<CancelSpotFleetRequestsResponse>>;
  public function CancelSpotInstanceRequests(CancelSpotInstanceRequestsRequest $in): Awaitable<\Errors\Result<CancelSpotInstanceRequestsResult>>;
  public function ConfirmProductInstance(ConfirmProductInstanceRequest $in): Awaitable<\Errors\Result<ConfirmProductInstanceResult>>;
  public function CopyFpgaImage(CopyFpgaImageRequest $in): Awaitable<\Errors\Result<CopyFpgaImageResult>>;
  public function CopyImage(CopyImageRequest $in): Awaitable<\Errors\Result<CopyImageResult>>;
  public function CopySnapshot(CopySnapshotRequest $in): Awaitable<\Errors\Result<CopySnapshotResult>>;
  public function CreateCapacityReservation(CreateCapacityReservationRequest $in): Awaitable<\Errors\Result<CreateCapacityReservationResult>>;
  public function CreateClientVpnEndpoint(CreateClientVpnEndpointRequest $in): Awaitable<\Errors\Result<CreateClientVpnEndpointResult>>;
  public function CreateClientVpnRoute(CreateClientVpnRouteRequest $in): Awaitable<\Errors\Result<CreateClientVpnRouteResult>>;
  public function CreateCustomerGateway(CreateCustomerGatewayRequest $in): Awaitable<\Errors\Result<CreateCustomerGatewayResult>>;
  public function CreateDefaultSubnet(CreateDefaultSubnetRequest $in): Awaitable<\Errors\Result<CreateDefaultSubnetResult>>;
  public function CreateDefaultVpc(CreateDefaultVpcRequest $in): Awaitable<\Errors\Result<CreateDefaultVpcResult>>;
  public function CreateDhcpOptions(CreateDhcpOptionsRequest $in): Awaitable<\Errors\Result<CreateDhcpOptionsResult>>;
  public function CreateEgressOnlyInternetGateway(CreateEgressOnlyInternetGatewayRequest $in): Awaitable<\Errors\Result<CreateEgressOnlyInternetGatewayResult>>;
  public function CreateFleet(CreateFleetRequest $in): Awaitable<\Errors\Result<CreateFleetResult>>;
  public function CreateFlowLogs(CreateFlowLogsRequest $in): Awaitable<\Errors\Result<CreateFlowLogsResult>>;
  public function CreateFpgaImage(CreateFpgaImageRequest $in): Awaitable<\Errors\Result<CreateFpgaImageResult>>;
  public function CreateImage(CreateImageRequest $in): Awaitable<\Errors\Result<CreateImageResult>>;
  public function CreateInstanceExportTask(CreateInstanceExportTaskRequest $in): Awaitable<\Errors\Result<CreateInstanceExportTaskResult>>;
  public function CreateInternetGateway(CreateInternetGatewayRequest $in): Awaitable<\Errors\Result<CreateInternetGatewayResult>>;
  public function CreateKeyPair(CreateKeyPairRequest $in): Awaitable<\Errors\Result<KeyPair>>;
  public function CreateLaunchTemplate(CreateLaunchTemplateRequest $in): Awaitable<\Errors\Result<CreateLaunchTemplateResult>>;
  public function CreateLaunchTemplateVersion(CreateLaunchTemplateVersionRequest $in): Awaitable<\Errors\Result<CreateLaunchTemplateVersionResult>>;
  public function CreateLocalGatewayRoute(CreateLocalGatewayRouteRequest $in): Awaitable<\Errors\Result<CreateLocalGatewayRouteResult>>;
  public function CreateLocalGatewayRouteTableVpcAssociation(CreateLocalGatewayRouteTableVpcAssociationRequest $in): Awaitable<\Errors\Result<CreateLocalGatewayRouteTableVpcAssociationResult>>;
  public function CreateNatGateway(CreateNatGatewayRequest $in): Awaitable<\Errors\Result<CreateNatGatewayResult>>;
  public function CreateNetworkAcl(CreateNetworkAclRequest $in): Awaitable<\Errors\Result<CreateNetworkAclResult>>;
  public function CreateNetworkAclEntry(CreateNetworkAclEntryRequest $in): Awaitable<\Errors\Error>;
  public function CreateNetworkInterface(CreateNetworkInterfaceRequest $in): Awaitable<\Errors\Result<CreateNetworkInterfaceResult>>;
  public function CreateNetworkInterfacePermission(CreateNetworkInterfacePermissionRequest $in): Awaitable<\Errors\Result<CreateNetworkInterfacePermissionResult>>;
  public function CreatePlacementGroup(CreatePlacementGroupRequest $in): Awaitable<\Errors\Result<CreatePlacementGroupResult>>;
  public function CreateReservedInstancesListing(CreateReservedInstancesListingRequest $in): Awaitable<\Errors\Result<CreateReservedInstancesListingResult>>;
  public function CreateRoute(CreateRouteRequest $in): Awaitable<\Errors\Result<CreateRouteResult>>;
  public function CreateRouteTable(CreateRouteTableRequest $in): Awaitable<\Errors\Result<CreateRouteTableResult>>;
  public function CreateSecurityGroup(CreateSecurityGroupRequest $in): Awaitable<\Errors\Result<CreateSecurityGroupResult>>;
  public function CreateSnapshot(CreateSnapshotRequest $in): Awaitable<\Errors\Result<Snapshot>>;
  public function CreateSnapshots(CreateSnapshotsRequest $in): Awaitable<\Errors\Result<CreateSnapshotsResult>>;
  public function CreateSpotDatafeedSubscription(CreateSpotDatafeedSubscriptionRequest $in): Awaitable<\Errors\Result<CreateSpotDatafeedSubscriptionResult>>;
  public function CreateSubnet(CreateSubnetRequest $in): Awaitable<\Errors\Result<CreateSubnetResult>>;
  public function CreateTags(CreateTagsRequest $in): Awaitable<\Errors\Error>;
  public function CreateTrafficMirrorFilter(CreateTrafficMirrorFilterRequest $in): Awaitable<\Errors\Result<CreateTrafficMirrorFilterResult>>;
  public function CreateTrafficMirrorFilterRule(CreateTrafficMirrorFilterRuleRequest $in): Awaitable<\Errors\Result<CreateTrafficMirrorFilterRuleResult>>;
  public function CreateTrafficMirrorSession(CreateTrafficMirrorSessionRequest $in): Awaitable<\Errors\Result<CreateTrafficMirrorSessionResult>>;
  public function CreateTrafficMirrorTarget(CreateTrafficMirrorTargetRequest $in): Awaitable<\Errors\Result<CreateTrafficMirrorTargetResult>>;
  public function CreateTransitGateway(CreateTransitGatewayRequest $in): Awaitable<\Errors\Result<CreateTransitGatewayResult>>;
  public function CreateTransitGatewayMulticastDomain(CreateTransitGatewayMulticastDomainRequest $in): Awaitable<\Errors\Result<CreateTransitGatewayMulticastDomainResult>>;
  public function CreateTransitGatewayPeeringAttachment(CreateTransitGatewayPeeringAttachmentRequest $in): Awaitable<\Errors\Result<CreateTransitGatewayPeeringAttachmentResult>>;
  public function CreateTransitGatewayRoute(CreateTransitGatewayRouteRequest $in): Awaitable<\Errors\Result<CreateTransitGatewayRouteResult>>;
  public function CreateTransitGatewayRouteTable(CreateTransitGatewayRouteTableRequest $in): Awaitable<\Errors\Result<CreateTransitGatewayRouteTableResult>>;
  public function CreateTransitGatewayVpcAttachment(CreateTransitGatewayVpcAttachmentRequest $in): Awaitable<\Errors\Result<CreateTransitGatewayVpcAttachmentResult>>;
  public function CreateVolume(CreateVolumeRequest $in): Awaitable<\Errors\Result<Volume>>;
  public function CreateVpc(CreateVpcRequest $in): Awaitable<\Errors\Result<CreateVpcResult>>;
  public function CreateVpcEndpoint(CreateVpcEndpointRequest $in): Awaitable<\Errors\Result<CreateVpcEndpointResult>>;
  public function CreateVpcEndpointConnectionNotification(CreateVpcEndpointConnectionNotificationRequest $in): Awaitable<\Errors\Result<CreateVpcEndpointConnectionNotificationResult>>;
  public function CreateVpcEndpointServiceConfiguration(CreateVpcEndpointServiceConfigurationRequest $in): Awaitable<\Errors\Result<CreateVpcEndpointServiceConfigurationResult>>;
  public function CreateVpcPeeringConnection(CreateVpcPeeringConnectionRequest $in): Awaitable<\Errors\Result<CreateVpcPeeringConnectionResult>>;
  public function CreateVpnConnection(CreateVpnConnectionRequest $in): Awaitable<\Errors\Result<CreateVpnConnectionResult>>;
  public function CreateVpnConnectionRoute(CreateVpnConnectionRouteRequest $in): Awaitable<\Errors\Error>;
  public function CreateVpnGateway(CreateVpnGatewayRequest $in): Awaitable<\Errors\Result<CreateVpnGatewayResult>>;
  public function DeleteClientVpnEndpoint(DeleteClientVpnEndpointRequest $in): Awaitable<\Errors\Result<DeleteClientVpnEndpointResult>>;
  public function DeleteClientVpnRoute(DeleteClientVpnRouteRequest $in): Awaitable<\Errors\Result<DeleteClientVpnRouteResult>>;
  public function DeleteCustomerGateway(DeleteCustomerGatewayRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDhcpOptions(DeleteDhcpOptionsRequest $in): Awaitable<\Errors\Error>;
  public function DeleteEgressOnlyInternetGateway(DeleteEgressOnlyInternetGatewayRequest $in): Awaitable<\Errors\Result<DeleteEgressOnlyInternetGatewayResult>>;
  public function DeleteFleets(DeleteFleetsRequest $in): Awaitable<\Errors\Result<DeleteFleetsResult>>;
  public function DeleteFlowLogs(DeleteFlowLogsRequest $in): Awaitable<\Errors\Result<DeleteFlowLogsResult>>;
  public function DeleteFpgaImage(DeleteFpgaImageRequest $in): Awaitable<\Errors\Result<DeleteFpgaImageResult>>;
  public function DeleteInternetGateway(DeleteInternetGatewayRequest $in): Awaitable<\Errors\Error>;
  public function DeleteKeyPair(DeleteKeyPairRequest $in): Awaitable<\Errors\Error>;
  public function DeleteLaunchTemplate(DeleteLaunchTemplateRequest $in): Awaitable<\Errors\Result<DeleteLaunchTemplateResult>>;
  public function DeleteLaunchTemplateVersions(DeleteLaunchTemplateVersionsRequest $in): Awaitable<\Errors\Result<DeleteLaunchTemplateVersionsResult>>;
  public function DeleteLocalGatewayRoute(DeleteLocalGatewayRouteRequest $in): Awaitable<\Errors\Result<DeleteLocalGatewayRouteResult>>;
  public function DeleteLocalGatewayRouteTableVpcAssociation(DeleteLocalGatewayRouteTableVpcAssociationRequest $in): Awaitable<\Errors\Result<DeleteLocalGatewayRouteTableVpcAssociationResult>>;
  public function DeleteNatGateway(DeleteNatGatewayRequest $in): Awaitable<\Errors\Result<DeleteNatGatewayResult>>;
  public function DeleteNetworkAcl(DeleteNetworkAclRequest $in): Awaitable<\Errors\Error>;
  public function DeleteNetworkAclEntry(DeleteNetworkAclEntryRequest $in): Awaitable<\Errors\Error>;
  public function DeleteNetworkInterface(DeleteNetworkInterfaceRequest $in): Awaitable<\Errors\Error>;
  public function DeleteNetworkInterfacePermission(DeleteNetworkInterfacePermissionRequest $in): Awaitable<\Errors\Result<DeleteNetworkInterfacePermissionResult>>;
  public function DeletePlacementGroup(DeletePlacementGroupRequest $in): Awaitable<\Errors\Error>;
  public function DeleteQueuedReservedInstances(DeleteQueuedReservedInstancesRequest $in): Awaitable<\Errors\Result<DeleteQueuedReservedInstancesResult>>;
  public function DeleteRoute(DeleteRouteRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRouteTable(DeleteRouteTableRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSecurityGroup(DeleteSecurityGroupRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSnapshot(DeleteSnapshotRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSpotDatafeedSubscription(DeleteSpotDatafeedSubscriptionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteSubnet(DeleteSubnetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteTags(DeleteTagsRequest $in): Awaitable<\Errors\Error>;
  public function DeleteTrafficMirrorFilter(DeleteTrafficMirrorFilterRequest $in): Awaitable<\Errors\Result<DeleteTrafficMirrorFilterResult>>;
  public function DeleteTrafficMirrorFilterRule(DeleteTrafficMirrorFilterRuleRequest $in): Awaitable<\Errors\Result<DeleteTrafficMirrorFilterRuleResult>>;
  public function DeleteTrafficMirrorSession(DeleteTrafficMirrorSessionRequest $in): Awaitable<\Errors\Result<DeleteTrafficMirrorSessionResult>>;
  public function DeleteTrafficMirrorTarget(DeleteTrafficMirrorTargetRequest $in): Awaitable<\Errors\Result<DeleteTrafficMirrorTargetResult>>;
  public function DeleteTransitGateway(DeleteTransitGatewayRequest $in): Awaitable<\Errors\Result<DeleteTransitGatewayResult>>;
  public function DeleteTransitGatewayMulticastDomain(DeleteTransitGatewayMulticastDomainRequest $in): Awaitable<\Errors\Result<DeleteTransitGatewayMulticastDomainResult>>;
  public function DeleteTransitGatewayPeeringAttachment(DeleteTransitGatewayPeeringAttachmentRequest $in): Awaitable<\Errors\Result<DeleteTransitGatewayPeeringAttachmentResult>>;
  public function DeleteTransitGatewayRoute(DeleteTransitGatewayRouteRequest $in): Awaitable<\Errors\Result<DeleteTransitGatewayRouteResult>>;
  public function DeleteTransitGatewayRouteTable(DeleteTransitGatewayRouteTableRequest $in): Awaitable<\Errors\Result<DeleteTransitGatewayRouteTableResult>>;
  public function DeleteTransitGatewayVpcAttachment(DeleteTransitGatewayVpcAttachmentRequest $in): Awaitable<\Errors\Result<DeleteTransitGatewayVpcAttachmentResult>>;
  public function DeleteVolume(DeleteVolumeRequest $in): Awaitable<\Errors\Error>;
  public function DeleteVpc(DeleteVpcRequest $in): Awaitable<\Errors\Error>;
  public function DeleteVpcEndpointConnectionNotifications(DeleteVpcEndpointConnectionNotificationsRequest $in): Awaitable<\Errors\Result<DeleteVpcEndpointConnectionNotificationsResult>>;
  public function DeleteVpcEndpointServiceConfigurations(DeleteVpcEndpointServiceConfigurationsRequest $in): Awaitable<\Errors\Result<DeleteVpcEndpointServiceConfigurationsResult>>;
  public function DeleteVpcEndpoints(DeleteVpcEndpointsRequest $in): Awaitable<\Errors\Result<DeleteVpcEndpointsResult>>;
  public function DeleteVpcPeeringConnection(DeleteVpcPeeringConnectionRequest $in): Awaitable<\Errors\Result<DeleteVpcPeeringConnectionResult>>;
  public function DeleteVpnConnection(DeleteVpnConnectionRequest $in): Awaitable<\Errors\Error>;
  public function DeleteVpnConnectionRoute(DeleteVpnConnectionRouteRequest $in): Awaitable<\Errors\Error>;
  public function DeleteVpnGateway(DeleteVpnGatewayRequest $in): Awaitable<\Errors\Error>;
  public function DeprovisionByoipCidr(DeprovisionByoipCidrRequest $in): Awaitable<\Errors\Result<DeprovisionByoipCidrResult>>;
  public function DeregisterImage(DeregisterImageRequest $in): Awaitable<\Errors\Error>;
  public function DeregisterInstanceEventNotificationAttributes(DeregisterInstanceEventNotificationAttributesRequest $in): Awaitable<\Errors\Result<DeregisterInstanceEventNotificationAttributesResult>>;
  public function DeregisterTransitGatewayMulticastGroupMembers(DeregisterTransitGatewayMulticastGroupMembersRequest $in): Awaitable<\Errors\Result<DeregisterTransitGatewayMulticastGroupMembersResult>>;
  public function DeregisterTransitGatewayMulticastGroupSources(DeregisterTransitGatewayMulticastGroupSourcesRequest $in): Awaitable<\Errors\Result<DeregisterTransitGatewayMulticastGroupSourcesResult>>;
  public function DescribeAccountAttributes(DescribeAccountAttributesRequest $in): Awaitable<\Errors\Result<DescribeAccountAttributesResult>>;
  public function DescribeAddresses(DescribeAddressesRequest $in): Awaitable<\Errors\Result<DescribeAddressesResult>>;
  public function DescribeAggregateIdFormat(DescribeAggregateIdFormatRequest $in): Awaitable<\Errors\Result<DescribeAggregateIdFormatResult>>;
  public function DescribeAvailabilityZones(DescribeAvailabilityZonesRequest $in): Awaitable<\Errors\Result<DescribeAvailabilityZonesResult>>;
  public function DescribeBundleTasks(DescribeBundleTasksRequest $in): Awaitable<\Errors\Result<DescribeBundleTasksResult>>;
  public function DescribeByoipCidrs(DescribeByoipCidrsRequest $in): Awaitable<\Errors\Result<DescribeByoipCidrsResult>>;
  public function DescribeCapacityReservations(DescribeCapacityReservationsRequest $in): Awaitable<\Errors\Result<DescribeCapacityReservationsResult>>;
  public function DescribeClassicLinkInstances(DescribeClassicLinkInstancesRequest $in): Awaitable<\Errors\Result<DescribeClassicLinkInstancesResult>>;
  public function DescribeClientVpnAuthorizationRules(DescribeClientVpnAuthorizationRulesRequest $in): Awaitable<\Errors\Result<DescribeClientVpnAuthorizationRulesResult>>;
  public function DescribeClientVpnConnections(DescribeClientVpnConnectionsRequest $in): Awaitable<\Errors\Result<DescribeClientVpnConnectionsResult>>;
  public function DescribeClientVpnEndpoints(DescribeClientVpnEndpointsRequest $in): Awaitable<\Errors\Result<DescribeClientVpnEndpointsResult>>;
  public function DescribeClientVpnRoutes(DescribeClientVpnRoutesRequest $in): Awaitable<\Errors\Result<DescribeClientVpnRoutesResult>>;
  public function DescribeClientVpnTargetNetworks(DescribeClientVpnTargetNetworksRequest $in): Awaitable<\Errors\Result<DescribeClientVpnTargetNetworksResult>>;
  public function DescribeCoipPools(DescribeCoipPoolsRequest $in): Awaitable<\Errors\Result<DescribeCoipPoolsResult>>;
  public function DescribeConversionTasks(DescribeConversionTasksRequest $in): Awaitable<\Errors\Result<DescribeConversionTasksResult>>;
  public function DescribeCustomerGateways(DescribeCustomerGatewaysRequest $in): Awaitable<\Errors\Result<DescribeCustomerGatewaysResult>>;
  public function DescribeDhcpOptions(DescribeDhcpOptionsRequest $in): Awaitable<\Errors\Result<DescribeDhcpOptionsResult>>;
  public function DescribeEgressOnlyInternetGateways(DescribeEgressOnlyInternetGatewaysRequest $in): Awaitable<\Errors\Result<DescribeEgressOnlyInternetGatewaysResult>>;
  public function DescribeElasticGpus(DescribeElasticGpusRequest $in): Awaitable<\Errors\Result<DescribeElasticGpusResult>>;
  public function DescribeExportImageTasks(DescribeExportImageTasksRequest $in): Awaitable<\Errors\Result<DescribeExportImageTasksResult>>;
  public function DescribeExportTasks(DescribeExportTasksRequest $in): Awaitable<\Errors\Result<DescribeExportTasksResult>>;
  public function DescribeFastSnapshotRestores(DescribeFastSnapshotRestoresRequest $in): Awaitable<\Errors\Result<DescribeFastSnapshotRestoresResult>>;
  public function DescribeFleetHistory(DescribeFleetHistoryRequest $in): Awaitable<\Errors\Result<DescribeFleetHistoryResult>>;
  public function DescribeFleetInstances(DescribeFleetInstancesRequest $in): Awaitable<\Errors\Result<DescribeFleetInstancesResult>>;
  public function DescribeFleets(DescribeFleetsRequest $in): Awaitable<\Errors\Result<DescribeFleetsResult>>;
  public function DescribeFlowLogs(DescribeFlowLogsRequest $in): Awaitable<\Errors\Result<DescribeFlowLogsResult>>;
  public function DescribeFpgaImageAttribute(DescribeFpgaImageAttributeRequest $in): Awaitable<\Errors\Result<DescribeFpgaImageAttributeResult>>;
  public function DescribeFpgaImages(DescribeFpgaImagesRequest $in): Awaitable<\Errors\Result<DescribeFpgaImagesResult>>;
  public function DescribeHostReservationOfferings(DescribeHostReservationOfferingsRequest $in): Awaitable<\Errors\Result<DescribeHostReservationOfferingsResult>>;
  public function DescribeHostReservations(DescribeHostReservationsRequest $in): Awaitable<\Errors\Result<DescribeHostReservationsResult>>;
  public function DescribeHosts(DescribeHostsRequest $in): Awaitable<\Errors\Result<DescribeHostsResult>>;
  public function DescribeIamInstanceProfileAssociations(DescribeIamInstanceProfileAssociationsRequest $in): Awaitable<\Errors\Result<DescribeIamInstanceProfileAssociationsResult>>;
  public function DescribeIdFormat(DescribeIdFormatRequest $in): Awaitable<\Errors\Result<DescribeIdFormatResult>>;
  public function DescribeIdentityIdFormat(DescribeIdentityIdFormatRequest $in): Awaitable<\Errors\Result<DescribeIdentityIdFormatResult>>;
  public function DescribeImageAttribute(DescribeImageAttributeRequest $in): Awaitable<\Errors\Result<ImageAttribute>>;
  public function DescribeImages(DescribeImagesRequest $in): Awaitable<\Errors\Result<DescribeImagesResult>>;
  public function DescribeImportImageTasks(DescribeImportImageTasksRequest $in): Awaitable<\Errors\Result<DescribeImportImageTasksResult>>;
  public function DescribeImportSnapshotTasks(DescribeImportSnapshotTasksRequest $in): Awaitable<\Errors\Result<DescribeImportSnapshotTasksResult>>;
  public function DescribeInstanceAttribute(DescribeInstanceAttributeRequest $in): Awaitable<\Errors\Result<InstanceAttribute>>;
  public function DescribeInstanceCreditSpecifications(DescribeInstanceCreditSpecificationsRequest $in): Awaitable<\Errors\Result<DescribeInstanceCreditSpecificationsResult>>;
  public function DescribeInstanceEventNotificationAttributes(DescribeInstanceEventNotificationAttributesRequest $in): Awaitable<\Errors\Result<DescribeInstanceEventNotificationAttributesResult>>;
  public function DescribeInstanceStatus(DescribeInstanceStatusRequest $in): Awaitable<\Errors\Result<DescribeInstanceStatusResult>>;
  public function DescribeInstanceTypeOfferings(DescribeInstanceTypeOfferingsRequest $in): Awaitable<\Errors\Result<DescribeInstanceTypeOfferingsResult>>;
  public function DescribeInstanceTypes(DescribeInstanceTypesRequest $in): Awaitable<\Errors\Result<DescribeInstanceTypesResult>>;
  public function DescribeInstances(DescribeInstancesRequest $in): Awaitable<\Errors\Result<DescribeInstancesResult>>;
  public function DescribeInternetGateways(DescribeInternetGatewaysRequest $in): Awaitable<\Errors\Result<DescribeInternetGatewaysResult>>;
  public function DescribeIpv6Pools(DescribeIpv6PoolsRequest $in): Awaitable<\Errors\Result<DescribeIpv6PoolsResult>>;
  public function DescribeKeyPairs(DescribeKeyPairsRequest $in): Awaitable<\Errors\Result<DescribeKeyPairsResult>>;
  public function DescribeLaunchTemplateVersions(DescribeLaunchTemplateVersionsRequest $in): Awaitable<\Errors\Result<DescribeLaunchTemplateVersionsResult>>;
  public function DescribeLaunchTemplates(DescribeLaunchTemplatesRequest $in): Awaitable<\Errors\Result<DescribeLaunchTemplatesResult>>;
  public function DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociations(DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest $in): Awaitable<\Errors\Result<DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResult>>;
  public function DescribeLocalGatewayRouteTableVpcAssociations(DescribeLocalGatewayRouteTableVpcAssociationsRequest $in): Awaitable<\Errors\Result<DescribeLocalGatewayRouteTableVpcAssociationsResult>>;
  public function DescribeLocalGatewayRouteTables(DescribeLocalGatewayRouteTablesRequest $in): Awaitable<\Errors\Result<DescribeLocalGatewayRouteTablesResult>>;
  public function DescribeLocalGatewayVirtualInterfaceGroups(DescribeLocalGatewayVirtualInterfaceGroupsRequest $in): Awaitable<\Errors\Result<DescribeLocalGatewayVirtualInterfaceGroupsResult>>;
  public function DescribeLocalGatewayVirtualInterfaces(DescribeLocalGatewayVirtualInterfacesRequest $in): Awaitable<\Errors\Result<DescribeLocalGatewayVirtualInterfacesResult>>;
  public function DescribeLocalGateways(DescribeLocalGatewaysRequest $in): Awaitable<\Errors\Result<DescribeLocalGatewaysResult>>;
  public function DescribeMovingAddresses(DescribeMovingAddressesRequest $in): Awaitable<\Errors\Result<DescribeMovingAddressesResult>>;
  public function DescribeNatGateways(DescribeNatGatewaysRequest $in): Awaitable<\Errors\Result<DescribeNatGatewaysResult>>;
  public function DescribeNetworkAcls(DescribeNetworkAclsRequest $in): Awaitable<\Errors\Result<DescribeNetworkAclsResult>>;
  public function DescribeNetworkInterfaceAttribute(DescribeNetworkInterfaceAttributeRequest $in): Awaitable<\Errors\Result<DescribeNetworkInterfaceAttributeResult>>;
  public function DescribeNetworkInterfacePermissions(DescribeNetworkInterfacePermissionsRequest $in): Awaitable<\Errors\Result<DescribeNetworkInterfacePermissionsResult>>;
  public function DescribeNetworkInterfaces(DescribeNetworkInterfacesRequest $in): Awaitable<\Errors\Result<DescribeNetworkInterfacesResult>>;
  public function DescribePlacementGroups(DescribePlacementGroupsRequest $in): Awaitable<\Errors\Result<DescribePlacementGroupsResult>>;
  public function DescribePrefixLists(DescribePrefixListsRequest $in): Awaitable<\Errors\Result<DescribePrefixListsResult>>;
  public function DescribePrincipalIdFormat(DescribePrincipalIdFormatRequest $in): Awaitable<\Errors\Result<DescribePrincipalIdFormatResult>>;
  public function DescribePublicIpv4Pools(DescribePublicIpv4PoolsRequest $in): Awaitable<\Errors\Result<DescribePublicIpv4PoolsResult>>;
  public function DescribeRegions(DescribeRegionsRequest $in): Awaitable<\Errors\Result<DescribeRegionsResult>>;
  public function DescribeReservedInstances(DescribeReservedInstancesRequest $in): Awaitable<\Errors\Result<DescribeReservedInstancesResult>>;
  public function DescribeReservedInstancesListings(DescribeReservedInstancesListingsRequest $in): Awaitable<\Errors\Result<DescribeReservedInstancesListingsResult>>;
  public function DescribeReservedInstancesModifications(DescribeReservedInstancesModificationsRequest $in): Awaitable<\Errors\Result<DescribeReservedInstancesModificationsResult>>;
  public function DescribeReservedInstancesOfferings(DescribeReservedInstancesOfferingsRequest $in): Awaitable<\Errors\Result<DescribeReservedInstancesOfferingsResult>>;
  public function DescribeRouteTables(DescribeRouteTablesRequest $in): Awaitable<\Errors\Result<DescribeRouteTablesResult>>;
  public function DescribeScheduledInstanceAvailability(DescribeScheduledInstanceAvailabilityRequest $in): Awaitable<\Errors\Result<DescribeScheduledInstanceAvailabilityResult>>;
  public function DescribeScheduledInstances(DescribeScheduledInstancesRequest $in): Awaitable<\Errors\Result<DescribeScheduledInstancesResult>>;
  public function DescribeSecurityGroupReferences(DescribeSecurityGroupReferencesRequest $in): Awaitable<\Errors\Result<DescribeSecurityGroupReferencesResult>>;
  public function DescribeSecurityGroups(DescribeSecurityGroupsRequest $in): Awaitable<\Errors\Result<DescribeSecurityGroupsResult>>;
  public function DescribeSnapshotAttribute(DescribeSnapshotAttributeRequest $in): Awaitable<\Errors\Result<DescribeSnapshotAttributeResult>>;
  public function DescribeSnapshots(DescribeSnapshotsRequest $in): Awaitable<\Errors\Result<DescribeSnapshotsResult>>;
  public function DescribeSpotDatafeedSubscription(DescribeSpotDatafeedSubscriptionRequest $in): Awaitable<\Errors\Result<DescribeSpotDatafeedSubscriptionResult>>;
  public function DescribeSpotFleetInstances(DescribeSpotFleetInstancesRequest $in): Awaitable<\Errors\Result<DescribeSpotFleetInstancesResponse>>;
  public function DescribeSpotFleetRequestHistory(DescribeSpotFleetRequestHistoryRequest $in): Awaitable<\Errors\Result<DescribeSpotFleetRequestHistoryResponse>>;
  public function DescribeSpotFleetRequests(DescribeSpotFleetRequestsRequest $in): Awaitable<\Errors\Result<DescribeSpotFleetRequestsResponse>>;
  public function DescribeSpotInstanceRequests(DescribeSpotInstanceRequestsRequest $in): Awaitable<\Errors\Result<DescribeSpotInstanceRequestsResult>>;
  public function DescribeSpotPriceHistory(DescribeSpotPriceHistoryRequest $in): Awaitable<\Errors\Result<DescribeSpotPriceHistoryResult>>;
  public function DescribeStaleSecurityGroups(DescribeStaleSecurityGroupsRequest $in): Awaitable<\Errors\Result<DescribeStaleSecurityGroupsResult>>;
  public function DescribeSubnets(DescribeSubnetsRequest $in): Awaitable<\Errors\Result<DescribeSubnetsResult>>;
  public function DescribeTags(DescribeTagsRequest $in): Awaitable<\Errors\Result<DescribeTagsResult>>;
  public function DescribeTrafficMirrorFilters(DescribeTrafficMirrorFiltersRequest $in): Awaitable<\Errors\Result<DescribeTrafficMirrorFiltersResult>>;
  public function DescribeTrafficMirrorSessions(DescribeTrafficMirrorSessionsRequest $in): Awaitable<\Errors\Result<DescribeTrafficMirrorSessionsResult>>;
  public function DescribeTrafficMirrorTargets(DescribeTrafficMirrorTargetsRequest $in): Awaitable<\Errors\Result<DescribeTrafficMirrorTargetsResult>>;
  public function DescribeTransitGatewayAttachments(DescribeTransitGatewayAttachmentsRequest $in): Awaitable<\Errors\Result<DescribeTransitGatewayAttachmentsResult>>;
  public function DescribeTransitGatewayMulticastDomains(DescribeTransitGatewayMulticastDomainsRequest $in): Awaitable<\Errors\Result<DescribeTransitGatewayMulticastDomainsResult>>;
  public function DescribeTransitGatewayPeeringAttachments(DescribeTransitGatewayPeeringAttachmentsRequest $in): Awaitable<\Errors\Result<DescribeTransitGatewayPeeringAttachmentsResult>>;
  public function DescribeTransitGatewayRouteTables(DescribeTransitGatewayRouteTablesRequest $in): Awaitable<\Errors\Result<DescribeTransitGatewayRouteTablesResult>>;
  public function DescribeTransitGatewayVpcAttachments(DescribeTransitGatewayVpcAttachmentsRequest $in): Awaitable<\Errors\Result<DescribeTransitGatewayVpcAttachmentsResult>>;
  public function DescribeTransitGateways(DescribeTransitGatewaysRequest $in): Awaitable<\Errors\Result<DescribeTransitGatewaysResult>>;
  public function DescribeVolumeAttribute(DescribeVolumeAttributeRequest $in): Awaitable<\Errors\Result<DescribeVolumeAttributeResult>>;
  public function DescribeVolumeStatus(DescribeVolumeStatusRequest $in): Awaitable<\Errors\Result<DescribeVolumeStatusResult>>;
  public function DescribeVolumes(DescribeVolumesRequest $in): Awaitable<\Errors\Result<DescribeVolumesResult>>;
  public function DescribeVolumesModifications(DescribeVolumesModificationsRequest $in): Awaitable<\Errors\Result<DescribeVolumesModificationsResult>>;
  public function DescribeVpcAttribute(DescribeVpcAttributeRequest $in): Awaitable<\Errors\Result<DescribeVpcAttributeResult>>;
  public function DescribeVpcClassicLink(DescribeVpcClassicLinkRequest $in): Awaitable<\Errors\Result<DescribeVpcClassicLinkResult>>;
  public function DescribeVpcClassicLinkDnsSupport(DescribeVpcClassicLinkDnsSupportRequest $in): Awaitable<\Errors\Result<DescribeVpcClassicLinkDnsSupportResult>>;
  public function DescribeVpcEndpointConnectionNotifications(DescribeVpcEndpointConnectionNotificationsRequest $in): Awaitable<\Errors\Result<DescribeVpcEndpointConnectionNotificationsResult>>;
  public function DescribeVpcEndpointConnections(DescribeVpcEndpointConnectionsRequest $in): Awaitable<\Errors\Result<DescribeVpcEndpointConnectionsResult>>;
  public function DescribeVpcEndpointServiceConfigurations(DescribeVpcEndpointServiceConfigurationsRequest $in): Awaitable<\Errors\Result<DescribeVpcEndpointServiceConfigurationsResult>>;
  public function DescribeVpcEndpointServicePermissions(DescribeVpcEndpointServicePermissionsRequest $in): Awaitable<\Errors\Result<DescribeVpcEndpointServicePermissionsResult>>;
  public function DescribeVpcEndpointServices(DescribeVpcEndpointServicesRequest $in): Awaitable<\Errors\Result<DescribeVpcEndpointServicesResult>>;
  public function DescribeVpcEndpoints(DescribeVpcEndpointsRequest $in): Awaitable<\Errors\Result<DescribeVpcEndpointsResult>>;
  public function DescribeVpcPeeringConnections(DescribeVpcPeeringConnectionsRequest $in): Awaitable<\Errors\Result<DescribeVpcPeeringConnectionsResult>>;
  public function DescribeVpcs(DescribeVpcsRequest $in): Awaitable<\Errors\Result<DescribeVpcsResult>>;
  public function DescribeVpnConnections(DescribeVpnConnectionsRequest $in): Awaitable<\Errors\Result<DescribeVpnConnectionsResult>>;
  public function DescribeVpnGateways(DescribeVpnGatewaysRequest $in): Awaitable<\Errors\Result<DescribeVpnGatewaysResult>>;
  public function DetachClassicLinkVpc(DetachClassicLinkVpcRequest $in): Awaitable<\Errors\Result<DetachClassicLinkVpcResult>>;
  public function DetachInternetGateway(DetachInternetGatewayRequest $in): Awaitable<\Errors\Error>;
  public function DetachNetworkInterface(DetachNetworkInterfaceRequest $in): Awaitable<\Errors\Error>;
  public function DetachVolume(DetachVolumeRequest $in): Awaitable<\Errors\Result<VolumeAttachment>>;
  public function DetachVpnGateway(DetachVpnGatewayRequest $in): Awaitable<\Errors\Error>;
  public function DisableEbsEncryptionByDefault(DisableEbsEncryptionByDefaultRequest $in): Awaitable<\Errors\Result<DisableEbsEncryptionByDefaultResult>>;
  public function DisableFastSnapshotRestores(DisableFastSnapshotRestoresRequest $in): Awaitable<\Errors\Result<DisableFastSnapshotRestoresResult>>;
  public function DisableTransitGatewayRouteTablePropagation(DisableTransitGatewayRouteTablePropagationRequest $in): Awaitable<\Errors\Result<DisableTransitGatewayRouteTablePropagationResult>>;
  public function DisableVgwRoutePropagation(DisableVgwRoutePropagationRequest $in): Awaitable<\Errors\Error>;
  public function DisableVpcClassicLink(DisableVpcClassicLinkRequest $in): Awaitable<\Errors\Result<DisableVpcClassicLinkResult>>;
  public function DisableVpcClassicLinkDnsSupport(DisableVpcClassicLinkDnsSupportRequest $in): Awaitable<\Errors\Result<DisableVpcClassicLinkDnsSupportResult>>;
  public function DisassociateAddress(DisassociateAddressRequest $in): Awaitable<\Errors\Error>;
  public function DisassociateClientVpnTargetNetwork(DisassociateClientVpnTargetNetworkRequest $in): Awaitable<\Errors\Result<DisassociateClientVpnTargetNetworkResult>>;
  public function DisassociateIamInstanceProfile(DisassociateIamInstanceProfileRequest $in): Awaitable<\Errors\Result<DisassociateIamInstanceProfileResult>>;
  public function DisassociateRouteTable(DisassociateRouteTableRequest $in): Awaitable<\Errors\Error>;
  public function DisassociateSubnetCidrBlock(DisassociateSubnetCidrBlockRequest $in): Awaitable<\Errors\Result<DisassociateSubnetCidrBlockResult>>;
  public function DisassociateTransitGatewayMulticastDomain(DisassociateTransitGatewayMulticastDomainRequest $in): Awaitable<\Errors\Result<DisassociateTransitGatewayMulticastDomainResult>>;
  public function DisassociateTransitGatewayRouteTable(DisassociateTransitGatewayRouteTableRequest $in): Awaitable<\Errors\Result<DisassociateTransitGatewayRouteTableResult>>;
  public function DisassociateVpcCidrBlock(DisassociateVpcCidrBlockRequest $in): Awaitable<\Errors\Result<DisassociateVpcCidrBlockResult>>;
  public function EnableEbsEncryptionByDefault(EnableEbsEncryptionByDefaultRequest $in): Awaitable<\Errors\Result<EnableEbsEncryptionByDefaultResult>>;
  public function EnableFastSnapshotRestores(EnableFastSnapshotRestoresRequest $in): Awaitable<\Errors\Result<EnableFastSnapshotRestoresResult>>;
  public function EnableTransitGatewayRouteTablePropagation(EnableTransitGatewayRouteTablePropagationRequest $in): Awaitable<\Errors\Result<EnableTransitGatewayRouteTablePropagationResult>>;
  public function EnableVgwRoutePropagation(EnableVgwRoutePropagationRequest $in): Awaitable<\Errors\Error>;
  public function EnableVolumeIO(EnableVolumeIORequest $in): Awaitable<\Errors\Error>;
  public function EnableVpcClassicLink(EnableVpcClassicLinkRequest $in): Awaitable<\Errors\Result<EnableVpcClassicLinkResult>>;
  public function EnableVpcClassicLinkDnsSupport(EnableVpcClassicLinkDnsSupportRequest $in): Awaitable<\Errors\Result<EnableVpcClassicLinkDnsSupportResult>>;
  public function ExportClientVpnClientCertificateRevocationList(ExportClientVpnClientCertificateRevocationListRequest $in): Awaitable<\Errors\Result<ExportClientVpnClientCertificateRevocationListResult>>;
  public function ExportClientVpnClientConfiguration(ExportClientVpnClientConfigurationRequest $in): Awaitable<\Errors\Result<ExportClientVpnClientConfigurationResult>>;
  public function ExportImage(ExportImageRequest $in): Awaitable<\Errors\Result<ExportImageResult>>;
  public function ExportTransitGatewayRoutes(ExportTransitGatewayRoutesRequest $in): Awaitable<\Errors\Result<ExportTransitGatewayRoutesResult>>;
  public function GetAssociatedIpv6PoolCidrs(GetAssociatedIpv6PoolCidrsRequest $in): Awaitable<\Errors\Result<GetAssociatedIpv6PoolCidrsResult>>;
  public function GetCapacityReservationUsage(GetCapacityReservationUsageRequest $in): Awaitable<\Errors\Result<GetCapacityReservationUsageResult>>;
  public function GetCoipPoolUsage(GetCoipPoolUsageRequest $in): Awaitable<\Errors\Result<GetCoipPoolUsageResult>>;
  public function GetConsoleOutput(GetConsoleOutputRequest $in): Awaitable<\Errors\Result<GetConsoleOutputResult>>;
  public function GetConsoleScreenshot(GetConsoleScreenshotRequest $in): Awaitable<\Errors\Result<GetConsoleScreenshotResult>>;
  public function GetDefaultCreditSpecification(GetDefaultCreditSpecificationRequest $in): Awaitable<\Errors\Result<GetDefaultCreditSpecificationResult>>;
  public function GetEbsDefaultKmsKeyId(GetEbsDefaultKmsKeyIdRequest $in): Awaitable<\Errors\Result<GetEbsDefaultKmsKeyIdResult>>;
  public function GetEbsEncryptionByDefault(GetEbsEncryptionByDefaultRequest $in): Awaitable<\Errors\Result<GetEbsEncryptionByDefaultResult>>;
  public function GetHostReservationPurchasePreview(GetHostReservationPurchasePreviewRequest $in): Awaitable<\Errors\Result<GetHostReservationPurchasePreviewResult>>;
  public function GetLaunchTemplateData(GetLaunchTemplateDataRequest $in): Awaitable<\Errors\Result<GetLaunchTemplateDataResult>>;
  public function GetPasswordData(GetPasswordDataRequest $in): Awaitable<\Errors\Result<GetPasswordDataResult>>;
  public function GetReservedInstancesExchangeQuote(GetReservedInstancesExchangeQuoteRequest $in): Awaitable<\Errors\Result<GetReservedInstancesExchangeQuoteResult>>;
  public function GetTransitGatewayAttachmentPropagations(GetTransitGatewayAttachmentPropagationsRequest $in): Awaitable<\Errors\Result<GetTransitGatewayAttachmentPropagationsResult>>;
  public function GetTransitGatewayMulticastDomainAssociations(GetTransitGatewayMulticastDomainAssociationsRequest $in): Awaitable<\Errors\Result<GetTransitGatewayMulticastDomainAssociationsResult>>;
  public function GetTransitGatewayRouteTableAssociations(GetTransitGatewayRouteTableAssociationsRequest $in): Awaitable<\Errors\Result<GetTransitGatewayRouteTableAssociationsResult>>;
  public function GetTransitGatewayRouteTablePropagations(GetTransitGatewayRouteTablePropagationsRequest $in): Awaitable<\Errors\Result<GetTransitGatewayRouteTablePropagationsResult>>;
  public function ImportClientVpnClientCertificateRevocationList(ImportClientVpnClientCertificateRevocationListRequest $in): Awaitable<\Errors\Result<ImportClientVpnClientCertificateRevocationListResult>>;
  public function ImportImage(ImportImageRequest $in): Awaitable<\Errors\Result<ImportImageResult>>;
  public function ImportInstance(ImportInstanceRequest $in): Awaitable<\Errors\Result<ImportInstanceResult>>;
  public function ImportKeyPair(ImportKeyPairRequest $in): Awaitable<\Errors\Result<ImportKeyPairResult>>;
  public function ImportSnapshot(ImportSnapshotRequest $in): Awaitable<\Errors\Result<ImportSnapshotResult>>;
  public function ImportVolume(ImportVolumeRequest $in): Awaitable<\Errors\Result<ImportVolumeResult>>;
  public function ModifyAvailabilityZoneGroup(ModifyAvailabilityZoneGroupRequest $in): Awaitable<\Errors\Result<ModifyAvailabilityZoneGroupResult>>;
  public function ModifyCapacityReservation(ModifyCapacityReservationRequest $in): Awaitable<\Errors\Result<ModifyCapacityReservationResult>>;
  public function ModifyClientVpnEndpoint(ModifyClientVpnEndpointRequest $in): Awaitable<\Errors\Result<ModifyClientVpnEndpointResult>>;
  public function ModifyDefaultCreditSpecification(ModifyDefaultCreditSpecificationRequest $in): Awaitable<\Errors\Result<ModifyDefaultCreditSpecificationResult>>;
  public function ModifyEbsDefaultKmsKeyId(ModifyEbsDefaultKmsKeyIdRequest $in): Awaitable<\Errors\Result<ModifyEbsDefaultKmsKeyIdResult>>;
  public function ModifyFleet(ModifyFleetRequest $in): Awaitable<\Errors\Result<ModifyFleetResult>>;
  public function ModifyFpgaImageAttribute(ModifyFpgaImageAttributeRequest $in): Awaitable<\Errors\Result<ModifyFpgaImageAttributeResult>>;
  public function ModifyHosts(ModifyHostsRequest $in): Awaitable<\Errors\Result<ModifyHostsResult>>;
  public function ModifyIdFormat(ModifyIdFormatRequest $in): Awaitable<\Errors\Error>;
  public function ModifyIdentityIdFormat(ModifyIdentityIdFormatRequest $in): Awaitable<\Errors\Error>;
  public function ModifyImageAttribute(ModifyImageAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ModifyInstanceAttribute(ModifyInstanceAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ModifyInstanceCapacityReservationAttributes(ModifyInstanceCapacityReservationAttributesRequest $in): Awaitable<\Errors\Result<ModifyInstanceCapacityReservationAttributesResult>>;
  public function ModifyInstanceCreditSpecification(ModifyInstanceCreditSpecificationRequest $in): Awaitable<\Errors\Result<ModifyInstanceCreditSpecificationResult>>;
  public function ModifyInstanceEventStartTime(ModifyInstanceEventStartTimeRequest $in): Awaitable<\Errors\Result<ModifyInstanceEventStartTimeResult>>;
  public function ModifyInstanceMetadataOptions(ModifyInstanceMetadataOptionsRequest $in): Awaitable<\Errors\Result<ModifyInstanceMetadataOptionsResult>>;
  public function ModifyInstancePlacement(ModifyInstancePlacementRequest $in): Awaitable<\Errors\Result<ModifyInstancePlacementResult>>;
  public function ModifyLaunchTemplate(ModifyLaunchTemplateRequest $in): Awaitable<\Errors\Result<ModifyLaunchTemplateResult>>;
  public function ModifyNetworkInterfaceAttribute(ModifyNetworkInterfaceAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ModifyReservedInstances(ModifyReservedInstancesRequest $in): Awaitable<\Errors\Result<ModifyReservedInstancesResult>>;
  public function ModifySnapshotAttribute(ModifySnapshotAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ModifySpotFleetRequest(ModifySpotFleetRequestRequest $in): Awaitable<\Errors\Result<ModifySpotFleetRequestResponse>>;
  public function ModifySubnetAttribute(ModifySubnetAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ModifyTrafficMirrorFilterNetworkServices(ModifyTrafficMirrorFilterNetworkServicesRequest $in): Awaitable<\Errors\Result<ModifyTrafficMirrorFilterNetworkServicesResult>>;
  public function ModifyTrafficMirrorFilterRule(ModifyTrafficMirrorFilterRuleRequest $in): Awaitable<\Errors\Result<ModifyTrafficMirrorFilterRuleResult>>;
  public function ModifyTrafficMirrorSession(ModifyTrafficMirrorSessionRequest $in): Awaitable<\Errors\Result<ModifyTrafficMirrorSessionResult>>;
  public function ModifyTransitGatewayVpcAttachment(ModifyTransitGatewayVpcAttachmentRequest $in): Awaitable<\Errors\Result<ModifyTransitGatewayVpcAttachmentResult>>;
  public function ModifyVolume(ModifyVolumeRequest $in): Awaitable<\Errors\Result<ModifyVolumeResult>>;
  public function ModifyVolumeAttribute(ModifyVolumeAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ModifyVpcAttribute(ModifyVpcAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ModifyVpcEndpoint(ModifyVpcEndpointRequest $in): Awaitable<\Errors\Result<ModifyVpcEndpointResult>>;
  public function ModifyVpcEndpointConnectionNotification(ModifyVpcEndpointConnectionNotificationRequest $in): Awaitable<\Errors\Result<ModifyVpcEndpointConnectionNotificationResult>>;
  public function ModifyVpcEndpointServiceConfiguration(ModifyVpcEndpointServiceConfigurationRequest $in): Awaitable<\Errors\Result<ModifyVpcEndpointServiceConfigurationResult>>;
  public function ModifyVpcEndpointServicePermissions(ModifyVpcEndpointServicePermissionsRequest $in): Awaitable<\Errors\Result<ModifyVpcEndpointServicePermissionsResult>>;
  public function ModifyVpcPeeringConnectionOptions(ModifyVpcPeeringConnectionOptionsRequest $in): Awaitable<\Errors\Result<ModifyVpcPeeringConnectionOptionsResult>>;
  public function ModifyVpcTenancy(ModifyVpcTenancyRequest $in): Awaitable<\Errors\Result<ModifyVpcTenancyResult>>;
  public function ModifyVpnConnection(ModifyVpnConnectionRequest $in): Awaitable<\Errors\Result<ModifyVpnConnectionResult>>;
  public function ModifyVpnTunnelCertificate(ModifyVpnTunnelCertificateRequest $in): Awaitable<\Errors\Result<ModifyVpnTunnelCertificateResult>>;
  public function ModifyVpnTunnelOptions(ModifyVpnTunnelOptionsRequest $in): Awaitable<\Errors\Result<ModifyVpnTunnelOptionsResult>>;
  public function MonitorInstances(MonitorInstancesRequest $in): Awaitable<\Errors\Result<MonitorInstancesResult>>;
  public function MoveAddressToVpc(MoveAddressToVpcRequest $in): Awaitable<\Errors\Result<MoveAddressToVpcResult>>;
  public function ProvisionByoipCidr(ProvisionByoipCidrRequest $in): Awaitable<\Errors\Result<ProvisionByoipCidrResult>>;
  public function PurchaseHostReservation(PurchaseHostReservationRequest $in): Awaitable<\Errors\Result<PurchaseHostReservationResult>>;
  public function PurchaseReservedInstancesOffering(PurchaseReservedInstancesOfferingRequest $in): Awaitable<\Errors\Result<PurchaseReservedInstancesOfferingResult>>;
  public function PurchaseScheduledInstances(PurchaseScheduledInstancesRequest $in): Awaitable<\Errors\Result<PurchaseScheduledInstancesResult>>;
  public function RebootInstances(RebootInstancesRequest $in): Awaitable<\Errors\Error>;
  public function RegisterImage(RegisterImageRequest $in): Awaitable<\Errors\Result<RegisterImageResult>>;
  public function RegisterInstanceEventNotificationAttributes(RegisterInstanceEventNotificationAttributesRequest $in): Awaitable<\Errors\Result<RegisterInstanceEventNotificationAttributesResult>>;
  public function RegisterTransitGatewayMulticastGroupMembers(RegisterTransitGatewayMulticastGroupMembersRequest $in): Awaitable<\Errors\Result<RegisterTransitGatewayMulticastGroupMembersResult>>;
  public function RegisterTransitGatewayMulticastGroupSources(RegisterTransitGatewayMulticastGroupSourcesRequest $in): Awaitable<\Errors\Result<RegisterTransitGatewayMulticastGroupSourcesResult>>;
  public function RejectTransitGatewayPeeringAttachment(RejectTransitGatewayPeeringAttachmentRequest $in): Awaitable<\Errors\Result<RejectTransitGatewayPeeringAttachmentResult>>;
  public function RejectTransitGatewayVpcAttachment(RejectTransitGatewayVpcAttachmentRequest $in): Awaitable<\Errors\Result<RejectTransitGatewayVpcAttachmentResult>>;
  public function RejectVpcEndpointConnections(RejectVpcEndpointConnectionsRequest $in): Awaitable<\Errors\Result<RejectVpcEndpointConnectionsResult>>;
  public function RejectVpcPeeringConnection(RejectVpcPeeringConnectionRequest $in): Awaitable<\Errors\Result<RejectVpcPeeringConnectionResult>>;
  public function ReleaseAddress(ReleaseAddressRequest $in): Awaitable<\Errors\Error>;
  public function ReleaseHosts(ReleaseHostsRequest $in): Awaitable<\Errors\Result<ReleaseHostsResult>>;
  public function ReplaceIamInstanceProfileAssociation(ReplaceIamInstanceProfileAssociationRequest $in): Awaitable<\Errors\Result<ReplaceIamInstanceProfileAssociationResult>>;
  public function ReplaceNetworkAclAssociation(ReplaceNetworkAclAssociationRequest $in): Awaitable<\Errors\Result<ReplaceNetworkAclAssociationResult>>;
  public function ReplaceNetworkAclEntry(ReplaceNetworkAclEntryRequest $in): Awaitable<\Errors\Error>;
  public function ReplaceRoute(ReplaceRouteRequest $in): Awaitable<\Errors\Error>;
  public function ReplaceRouteTableAssociation(ReplaceRouteTableAssociationRequest $in): Awaitable<\Errors\Result<ReplaceRouteTableAssociationResult>>;
  public function ReplaceTransitGatewayRoute(ReplaceTransitGatewayRouteRequest $in): Awaitable<\Errors\Result<ReplaceTransitGatewayRouteResult>>;
  public function ReportInstanceStatus(ReportInstanceStatusRequest $in): Awaitable<\Errors\Error>;
  public function RequestSpotFleet(RequestSpotFleetRequest $in): Awaitable<\Errors\Result<RequestSpotFleetResponse>>;
  public function RequestSpotInstances(RequestSpotInstancesRequest $in): Awaitable<\Errors\Result<RequestSpotInstancesResult>>;
  public function ResetEbsDefaultKmsKeyId(ResetEbsDefaultKmsKeyIdRequest $in): Awaitable<\Errors\Result<ResetEbsDefaultKmsKeyIdResult>>;
  public function ResetFpgaImageAttribute(ResetFpgaImageAttributeRequest $in): Awaitable<\Errors\Result<ResetFpgaImageAttributeResult>>;
  public function ResetImageAttribute(ResetImageAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ResetInstanceAttribute(ResetInstanceAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ResetNetworkInterfaceAttribute(ResetNetworkInterfaceAttributeRequest $in): Awaitable<\Errors\Error>;
  public function ResetSnapshotAttribute(ResetSnapshotAttributeRequest $in): Awaitable<\Errors\Error>;
  public function RestoreAddressToClassic(RestoreAddressToClassicRequest $in): Awaitable<\Errors\Result<RestoreAddressToClassicResult>>;
  public function RevokeClientVpnIngress(RevokeClientVpnIngressRequest $in): Awaitable<\Errors\Result<RevokeClientVpnIngressResult>>;
  public function RevokeSecurityGroupEgress(RevokeSecurityGroupEgressRequest $in): Awaitable<\Errors\Error>;
  public function RevokeSecurityGroupIngress(RevokeSecurityGroupIngressRequest $in): Awaitable<\Errors\Error>;
  public function RunInstances(RunInstancesRequest $in): Awaitable<\Errors\Result<Reservation>>;
  public function RunScheduledInstances(RunScheduledInstancesRequest $in): Awaitable<\Errors\Result<RunScheduledInstancesResult>>;
  public function SearchLocalGatewayRoutes(SearchLocalGatewayRoutesRequest $in): Awaitable<\Errors\Result<SearchLocalGatewayRoutesResult>>;
  public function SearchTransitGatewayMulticastGroups(SearchTransitGatewayMulticastGroupsRequest $in): Awaitable<\Errors\Result<SearchTransitGatewayMulticastGroupsResult>>;
  public function SearchTransitGatewayRoutes(SearchTransitGatewayRoutesRequest $in): Awaitable<\Errors\Result<SearchTransitGatewayRoutesResult>>;
  public function SendDiagnosticInterrupt(SendDiagnosticInterruptRequest $in): Awaitable<\Errors\Error>;
  public function StartInstances(StartInstancesRequest $in): Awaitable<\Errors\Result<StartInstancesResult>>;
  public function StartVpcEndpointServicePrivateDnsVerification(StartVpcEndpointServicePrivateDnsVerificationRequest $in): Awaitable<\Errors\Result<StartVpcEndpointServicePrivateDnsVerificationResult>>;
  public function StopInstances(StopInstancesRequest $in): Awaitable<\Errors\Result<StopInstancesResult>>;
  public function TerminateClientVpnConnections(TerminateClientVpnConnectionsRequest $in): Awaitable<\Errors\Result<TerminateClientVpnConnectionsResult>>;
  public function TerminateInstances(TerminateInstancesRequest $in): Awaitable<\Errors\Result<TerminateInstancesResult>>;
  public function UnassignIpv6Addresses(UnassignIpv6AddressesRequest $in): Awaitable<\Errors\Result<UnassignIpv6AddressesResult>>;
  public function UnassignPrivateIpAddresses(UnassignPrivateIpAddressesRequest $in): Awaitable<\Errors\Error>;
  public function UnmonitorInstances(UnmonitorInstancesRequest $in): Awaitable<\Errors\Result<UnmonitorInstancesResult>>;
  public function UpdateSecurityGroupRuleDescriptionsEgress(UpdateSecurityGroupRuleDescriptionsEgressRequest $in): Awaitable<\Errors\Result<UpdateSecurityGroupRuleDescriptionsEgressResult>>;
  public function UpdateSecurityGroupRuleDescriptionsIngress(UpdateSecurityGroupRuleDescriptionsIngressRequest $in): Awaitable<\Errors\Result<UpdateSecurityGroupRuleDescriptionsIngressResult>>;
  public function WithdrawByoipCidr(WithdrawByoipCidrRequest $in): Awaitable<\Errors\Result<WithdrawByoipCidrResult>>;
}

class AcceptReservedInstancesExchangeQuoteRequest {
  public bool $dry_run;
  public ?ReservedInstanceIdSet $reserved_instance_ids;
  public ?TargetConfigurationRequestSet $target_configurations;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'reserved_instance_ids' => ?ReservedInstanceIdSet,
    ?'target_configurations' => ?TargetConfigurationRequestSet,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->reserved_instance_ids = $s['reserved_instance_ids'] ?? vec[];
    $this->target_configurations = $s['target_configurations'] ?? vec[];
  }
}

class AcceptReservedInstancesExchangeQuoteResult {
  public string $exchange_id;

  public function __construct(shape(
    ?'exchange_id' => string,
  ) $s = shape()) {
    $this->exchange_id = $s['exchange_id'] ?? '';
  }
}

class AcceptTransitGatewayPeeringAttachmentRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class AcceptTransitGatewayPeeringAttachmentResult {
  public ?TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;

  public function __construct(shape(
    ?'transit_gateway_peering_attachment' => ?TransitGatewayPeeringAttachment,
  ) $s = shape()) {
    $this->transit_gateway_peering_attachment = $s['transit_gateway_peering_attachment'] ?? null;
  }
}

class AcceptTransitGatewayVpcAttachmentRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class AcceptTransitGatewayVpcAttachmentResult {
  public ?TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;

  public function __construct(shape(
    ?'transit_gateway_vpc_attachment' => ?TransitGatewayVpcAttachment,
  ) $s = shape()) {
    $this->transit_gateway_vpc_attachment = $s['transit_gateway_vpc_attachment'] ?? null;
  }
}

class AcceptVpcEndpointConnectionsRequest {
  public bool $dry_run;
  public ?VpcEndpointServiceId $service_id;
  public ?VpcEndpointIdList $vpc_endpoint_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'service_id' => ?VpcEndpointServiceId,
    ?'vpc_endpoint_ids' => ?VpcEndpointIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->service_id = $s['service_id'] ?? '';
    $this->vpc_endpoint_ids = $s['vpc_endpoint_ids'] ?? vec[];
  }
}

class AcceptVpcEndpointConnectionsResult {
  public ?UnsuccessfulItemSet $unsuccessful;

  public function __construct(shape(
    ?'unsuccessful' => ?UnsuccessfulItemSet,
  ) $s = shape()) {
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class AcceptVpcPeeringConnectionRequest {
  public bool $dry_run;
  public ?VpcPeeringConnectionId $vpc_peering_connection_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_peering_connection_id' => ?VpcPeeringConnectionId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

class AcceptVpcPeeringConnectionResult {
  public ?VpcPeeringConnection $vpc_peering_connection;

  public function __construct(shape(
    ?'vpc_peering_connection' => ?VpcPeeringConnection,
  ) $s = shape()) {
    $this->vpc_peering_connection = $s['vpc_peering_connection'] ?? null;
  }
}

class AccountAttribute {
  public string $attribute_name;
  public ?AccountAttributeValueList $attribute_values;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'attribute_values' => ?AccountAttributeValueList,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_values = $s['attribute_values'] ?? vec[];
  }
}

type AccountAttributeList = vec<AccountAttribute>;

type AccountAttributeName = string;

type AccountAttributeNameStringList = vec<AccountAttributeName>;

class AccountAttributeValue {
  public string $attribute_value;

  public function __construct(shape(
    ?'attribute_value' => string,
  ) $s = shape()) {
    $this->attribute_value = $s['attribute_value'] ?? '';
  }
}

type AccountAttributeValueList = vec<AccountAttributeValue>;

class ActiveInstance {
  public ?InstanceHealthStatus $instance_health;
  public string $instance_id;
  public string $instance_type;
  public string $spot_instance_request_id;

  public function __construct(shape(
    ?'instance_health' => ?InstanceHealthStatus,
    ?'instance_id' => string,
    ?'instance_type' => string,
    ?'spot_instance_request_id' => string,
  ) $s = shape()) {
    $this->instance_health = $s['instance_health'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->spot_instance_request_id = $s['spot_instance_request_id'] ?? '';
  }
}

type ActiveInstanceSet = vec<ActiveInstance>;

type ActivityStatus = string;

class Address {
  public string $allocation_id;
  public string $association_id;
  public string $customer_owned_ip;
  public string $customer_owned_ipv_4_pool;
  public ?DomainType $domain;
  public string $instance_id;
  public string $network_border_group;
  public string $network_interface_id;
  public string $network_interface_owner_id;
  public string $private_ip_address;
  public string $public_ip;
  public string $public_ipv_4_pool;
  public ?TagList $tags;

  public function __construct(shape(
    ?'allocation_id' => string,
    ?'association_id' => string,
    ?'customer_owned_ip' => string,
    ?'customer_owned_ipv_4_pool' => string,
    ?'domain' => ?DomainType,
    ?'instance_id' => string,
    ?'network_border_group' => string,
    ?'network_interface_id' => string,
    ?'network_interface_owner_id' => string,
    ?'private_ip_address' => string,
    ?'public_ip' => string,
    ?'public_ipv_4_pool' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->association_id = $s['association_id'] ?? '';
    $this->customer_owned_ip = $s['customer_owned_ip'] ?? '';
    $this->customer_owned_ipv_4_pool = $s['customer_owned_ipv_4_pool'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->network_border_group = $s['network_border_group'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->network_interface_owner_id = $s['network_interface_owner_id'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
    $this->public_ipv_4_pool = $s['public_ipv_4_pool'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type AddressList = vec<Address>;

class AdvertiseByoipCidrRequest {
  public string $cidr;
  public bool $dry_run;

  public function __construct(shape(
    ?'cidr' => string,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->cidr = $s['cidr'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class AdvertiseByoipCidrResult {
  public ?ByoipCidr $byoip_cidr;

  public function __construct(shape(
    ?'byoip_cidr' => ?ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $s['byoip_cidr'] ?? null;
  }
}

type Affinity = string;

class AllocateAddressRequest {
  public string $address;
  public string $customer_owned_ipv_4_pool;
  public ?DomainType $domain;
  public bool $dry_run;
  public string $network_border_group;
  public string $public_ipv_4_pool;

  public function __construct(shape(
    ?'address' => string,
    ?'customer_owned_ipv_4_pool' => string,
    ?'domain' => ?DomainType,
    ?'dry_run' => bool,
    ?'network_border_group' => string,
    ?'public_ipv_4_pool' => string,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->customer_owned_ipv_4_pool = $s['customer_owned_ipv_4_pool'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_border_group = $s['network_border_group'] ?? '';
    $this->public_ipv_4_pool = $s['public_ipv_4_pool'] ?? '';
  }
}

class AllocateAddressResult {
  public string $allocation_id;
  public string $customer_owned_ip;
  public string $customer_owned_ipv_4_pool;
  public ?DomainType $domain;
  public string $network_border_group;
  public string $public_ip;
  public string $public_ipv_4_pool;

  public function __construct(shape(
    ?'allocation_id' => string,
    ?'customer_owned_ip' => string,
    ?'customer_owned_ipv_4_pool' => string,
    ?'domain' => ?DomainType,
    ?'network_border_group' => string,
    ?'public_ip' => string,
    ?'public_ipv_4_pool' => string,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->customer_owned_ip = $s['customer_owned_ip'] ?? '';
    $this->customer_owned_ipv_4_pool = $s['customer_owned_ipv_4_pool'] ?? '';
    $this->domain = $s['domain'] ?? '';
    $this->network_border_group = $s['network_border_group'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
    $this->public_ipv_4_pool = $s['public_ipv_4_pool'] ?? '';
  }
}

class AllocateHostsRequest {
  public ?AutoPlacement $auto_placement;
  public string $availability_zone;
  public string $client_token;
  public ?HostRecovery $host_recovery;
  public string $instance_family;
  public string $instance_type;
  public int $quantity;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'auto_placement' => ?AutoPlacement,
    ?'availability_zone' => string,
    ?'client_token' => string,
    ?'host_recovery' => ?HostRecovery,
    ?'instance_family' => string,
    ?'instance_type' => string,
    ?'quantity' => int,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->auto_placement = $s['auto_placement'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->host_recovery = $s['host_recovery'] ?? '';
    $this->instance_family = $s['instance_family'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->quantity = $s['quantity'] ?? 0;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class AllocateHostsResult {
  public ?ResponseHostIdList $host_ids;

  public function __construct(shape(
    ?'host_ids' => ?ResponseHostIdList,
  ) $s = shape()) {
    $this->host_ids = $s['host_ids'] ?? vec[];
  }
}

type AllocationId = string;

type AllocationIdList = vec<AllocationId>;

type AllocationState = string;

type AllocationStrategy = string;

class AllowedPrincipal {
  public string $principal;
  public ?PrincipalType $principal_type;

  public function __construct(shape(
    ?'principal' => string,
    ?'principal_type' => ?PrincipalType,
  ) $s = shape()) {
    $this->principal = $s['principal'] ?? '';
    $this->principal_type = $s['principal_type'] ?? '';
  }
}

type AllowedPrincipalSet = vec<AllowedPrincipal>;

type AllowsMultipleInstanceTypes = string;

class ApplySecurityGroupsToClientVpnTargetNetworkRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;
  public ?ClientVpnSecurityGroupIdSet $security_group_ids;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
    ?'security_group_ids' => ?ClientVpnSecurityGroupIdSet,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class ApplySecurityGroupsToClientVpnTargetNetworkResult {
  public ?ClientVpnSecurityGroupIdSet $security_group_ids;

  public function __construct(shape(
    ?'security_group_ids' => ?ClientVpnSecurityGroupIdSet,
  ) $s = shape()) {
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
  }
}

type ArchitectureType = string;

type ArchitectureTypeList = vec<ArchitectureType>;

type ArchitectureValues = string;

class AssignIpv6AddressesRequest {
  public int $ipv_6_address_count;
  public ?Ipv6AddressList $ipv_6_addresses;
  public ?NetworkInterfaceId $network_interface_id;

  public function __construct(shape(
    ?'ipv_6_address_count' => int,
    ?'ipv_6_addresses' => ?Ipv6AddressList,
    ?'network_interface_id' => ?NetworkInterfaceId,
  ) $s = shape()) {
    $this->ipv_6_address_count = $s['ipv_6_address_count'] ?? 0;
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
  }
}

class AssignIpv6AddressesResult {
  public ?Ipv6AddressList $assigned_ipv_6_addresses;
  public string $network_interface_id;

  public function __construct(shape(
    ?'assigned_ipv_6_addresses' => ?Ipv6AddressList,
    ?'network_interface_id' => string,
  ) $s = shape()) {
    $this->assigned_ipv_6_addresses = $s['assigned_ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
  }
}

class AssignPrivateIpAddressesRequest {
  public bool $allow_reassignment;
  public ?NetworkInterfaceId $network_interface_id;
  public ?PrivateIpAddressStringList $private_ip_addresses;
  public int $secondary_private_ip_address_count;

  public function __construct(shape(
    ?'allow_reassignment' => bool,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'private_ip_addresses' => ?PrivateIpAddressStringList,
    ?'secondary_private_ip_address_count' => int,
  ) $s = shape()) {
    $this->allow_reassignment = $s['allow_reassignment'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->secondary_private_ip_address_count = $s['secondary_private_ip_address_count'] ?? 0;
  }
}

class AssignPrivateIpAddressesResult {
  public ?AssignedPrivateIpAddressList $assigned_private_ip_addresses;
  public string $network_interface_id;

  public function __construct(shape(
    ?'assigned_private_ip_addresses' => ?AssignedPrivateIpAddressList,
    ?'network_interface_id' => string,
  ) $s = shape()) {
    $this->assigned_private_ip_addresses = $s['assigned_private_ip_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
  }
}

class AssignedPrivateIpAddress {
  public string $private_ip_address;

  public function __construct(shape(
    ?'private_ip_address' => string,
  ) $s = shape()) {
    $this->private_ip_address = $s['private_ip_address'] ?? '';
  }
}

type AssignedPrivateIpAddressList = vec<AssignedPrivateIpAddress>;

class AssociateAddressRequest {
  public ?AllocationId $allocation_id;
  public bool $allow_reassociation;
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public ?NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public string $public_ip;

  public function __construct(shape(
    ?'allocation_id' => ?AllocationId,
    ?'allow_reassociation' => bool,
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'private_ip_address' => string,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->allow_reassociation = $s['allow_reassociation'] ?? false;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

class AssociateAddressResult {
  public string $association_id;

  public function __construct(shape(
    ?'association_id' => string,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
  }
}

class AssociateClientVpnTargetNetworkRequest {
  public string $client_token;
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class AssociateClientVpnTargetNetworkResult {
  public string $association_id;
  public ?AssociationStatus $status;

  public function __construct(shape(
    ?'association_id' => string,
    ?'status' => ?AssociationStatus,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

class AssociateDhcpOptionsRequest {
  public ?DefaultingDhcpOptionsId $dhcp_options_id;
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dhcp_options_id' => ?DefaultingDhcpOptionsId,
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dhcp_options_id = $s['dhcp_options_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AssociateIamInstanceProfileRequest {
  public ?IamInstanceProfileSpecification $iam_instance_profile;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'iam_instance_profile' => ?IamInstanceProfileSpecification,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class AssociateIamInstanceProfileResult {
  public ?IamInstanceProfileAssociation $iam_instance_profile_association;

  public function __construct(shape(
    ?'iam_instance_profile_association' => ?IamInstanceProfileAssociation,
  ) $s = shape()) {
    $this->iam_instance_profile_association = $s['iam_instance_profile_association'] ?? null;
  }
}

class AssociateRouteTableRequest {
  public bool $dry_run;
  public ?RouteGatewayId $gateway_id;
  public ?RouteTableId $route_table_id;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'gateway_id' => ?RouteGatewayId,
    ?'route_table_id' => ?RouteTableId,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->route_table_id = $s['route_table_id'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class AssociateRouteTableResult {
  public string $association_id;
  public ?RouteTableAssociationState $association_state;

  public function __construct(shape(
    ?'association_id' => string,
    ?'association_state' => ?RouteTableAssociationState,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->association_state = $s['association_state'] ?? null;
  }
}

class AssociateSubnetCidrBlockRequest {
  public string $ipv_6_cidr_block;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'ipv_6_cidr_block' => string,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class AssociateSubnetCidrBlockResult {
  public ?SubnetIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $subnet_id;

  public function __construct(shape(
    ?'ipv_6_cidr_block_association' => ?SubnetIpv6CidrBlockAssociation,
    ?'subnet_id' => string,
  ) $s = shape()) {
    $this->ipv_6_cidr_block_association = $s['ipv_6_cidr_block_association'] ?? null;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class AssociateTransitGatewayMulticastDomainRequest {
  public bool $dry_run;
  public ?ValueStringList $subnet_ids;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'subnet_ids' => ?ValueStringList,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class AssociateTransitGatewayMulticastDomainResult {
  public ?TransitGatewayMulticastDomainAssociations $associations;

  public function __construct(shape(
    ?'associations' => ?TransitGatewayMulticastDomainAssociations,
  ) $s = shape()) {
    $this->associations = $s['associations'] ?? null;
  }
}

class AssociateTransitGatewayRouteTableRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class AssociateTransitGatewayRouteTableResult {
  public ?TransitGatewayAssociation $association;

  public function __construct(shape(
    ?'association' => ?TransitGatewayAssociation,
  ) $s = shape()) {
    $this->association = $s['association'] ?? null;
  }
}

class AssociateVpcCidrBlockRequest {
  public bool $amazon_provided_ipv_6_cidr_block;
  public string $cidr_block;
  public string $ipv_6_cidr_block;
  public string $ipv_6_cidr_block_network_border_group;
  public ?Ipv6PoolEc2Id $ipv_6_pool;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'amazon_provided_ipv_6_cidr_block' => bool,
    ?'cidr_block' => string,
    ?'ipv_6_cidr_block' => string,
    ?'ipv_6_cidr_block_network_border_group' => string,
    ?'ipv_6_pool' => ?Ipv6PoolEc2Id,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->amazon_provided_ipv_6_cidr_block = $s['amazon_provided_ipv_6_cidr_block'] ?? false;
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->ipv_6_cidr_block_network_border_group = $s['ipv_6_cidr_block_network_border_group'] ?? '';
    $this->ipv_6_pool = $s['ipv_6_pool'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AssociateVpcCidrBlockResult {
  public ?VpcCidrBlockAssociation $cidr_block_association;
  public ?VpcIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $vpc_id;

  public function __construct(shape(
    ?'cidr_block_association' => ?VpcCidrBlockAssociation,
    ?'ipv_6_cidr_block_association' => ?VpcIpv6CidrBlockAssociation,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cidr_block_association = $s['cidr_block_association'] ?? null;
    $this->ipv_6_cidr_block_association = $s['ipv_6_cidr_block_association'] ?? null;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type AssociatedNetworkType = string;

class AssociatedTargetNetwork {
  public string $network_id;
  public ?AssociatedNetworkType $network_type;

  public function __construct(shape(
    ?'network_id' => string,
    ?'network_type' => ?AssociatedNetworkType,
  ) $s = shape()) {
    $this->network_id = $s['network_id'] ?? '';
    $this->network_type = $s['network_type'] ?? '';
  }
}

type AssociatedTargetNetworkSet = vec<AssociatedTargetNetwork>;

type AssociationIdList = vec<IamInstanceProfileAssociationId>;

class AssociationStatus {
  public ?AssociationStatusCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?AssociationStatusCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type AssociationStatusCode = string;

class AttachClassicLinkVpcRequest {
  public bool $dry_run;
  public ?GroupIdStringList $groups;
  public ?InstanceId $instance_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'groups' => ?GroupIdStringList,
    ?'instance_id' => ?InstanceId,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AttachClassicLinkVpcResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class AttachInternetGatewayRequest {
  public bool $dry_run;
  public ?InternetGatewayId $internet_gateway_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'internet_gateway_id' => ?InternetGatewayId,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->internet_gateway_id = $s['internet_gateway_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class AttachNetworkInterfaceRequest {
  public int $device_index;
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public ?NetworkInterfaceId $network_interface_id;

  public function __construct(shape(
    ?'device_index' => int,
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'network_interface_id' => ?NetworkInterfaceId,
  ) $s = shape()) {
    $this->device_index = $s['device_index'] ?? 0;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
  }
}

class AttachNetworkInterfaceResult {
  public string $attachment_id;

  public function __construct(shape(
    ?'attachment_id' => string,
  ) $s = shape()) {
    $this->attachment_id = $s['attachment_id'] ?? '';
  }
}

class AttachVolumeRequest {
  public string $device;
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'device' => string,
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->device = $s['device'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class AttachVpnGatewayRequest {
  public bool $dry_run;
  public ?VpcId $vpc_id;
  public ?VpnGatewayId $vpn_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
    ?'vpn_gateway_id' => ?VpnGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpn_gateway_id = $s['vpn_gateway_id'] ?? '';
  }
}

class AttachVpnGatewayResult {
  public ?VpcAttachment $vpc_attachment;

  public function __construct(shape(
    ?'vpc_attachment' => ?VpcAttachment,
  ) $s = shape()) {
    $this->vpc_attachment = $s['vpc_attachment'] ?? null;
  }
}

type AttachmentStatus = string;

class AttributeBooleanValue {
  public bool $value;

  public function __construct(shape(
    ?'value' => bool,
  ) $s = shape()) {
    $this->value = $s['value'] ?? false;
  }
}

class AttributeValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

class AuthorizationRule {
  public bool $access_all;
  public string $client_vpn_endpoint_id;
  public string $description;
  public string $destination_cidr;
  public string $group_id;
  public ?ClientVpnAuthorizationRuleStatus $status;

  public function __construct(shape(
    ?'access_all' => bool,
    ?'client_vpn_endpoint_id' => string,
    ?'description' => string,
    ?'destination_cidr' => string,
    ?'group_id' => string,
    ?'status' => ?ClientVpnAuthorizationRuleStatus,
  ) $s = shape()) {
    $this->access_all = $s['access_all'] ?? false;
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->destination_cidr = $s['destination_cidr'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

type AuthorizationRuleSet = vec<AuthorizationRule>;

class AuthorizeClientVpnIngressRequest {
  public string $access_group_id;
  public bool $authorize_all_groups;
  public string $client_token;
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $description;
  public bool $dry_run;
  public string $target_network_cidr;

  public function __construct(shape(
    ?'access_group_id' => string,
    ?'authorize_all_groups' => bool,
    ?'client_token' => string,
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'target_network_cidr' => string,
  ) $s = shape()) {
    $this->access_group_id = $s['access_group_id'] ?? '';
    $this->authorize_all_groups = $s['authorize_all_groups'] ?? false;
    $this->client_token = $s['client_token'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->target_network_cidr = $s['target_network_cidr'] ?? '';
  }
}

class AuthorizeClientVpnIngressResult {
  public ?ClientVpnAuthorizationRuleStatus $status;

  public function __construct(shape(
    ?'status' => ?ClientVpnAuthorizationRuleStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? null;
  }
}

class AuthorizeSecurityGroupEgressRequest {
  public string $cidr_ip;
  public bool $dry_run;
  public int $from_port;
  public ?SecurityGroupId $group_id;
  public ?IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;

  public function __construct(shape(
    ?'cidr_ip' => string,
    ?'dry_run' => bool,
    ?'from_port' => int,
    ?'group_id' => ?SecurityGroupId,
    ?'ip_permissions' => ?IpPermissionList,
    ?'ip_protocol' => string,
    ?'source_security_group_name' => string,
    ?'source_security_group_owner_id' => string,
    ?'to_port' => int,
  ) $s = shape()) {
    $this->cidr_ip = $s['cidr_ip'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->from_port = $s['from_port'] ?? 0;
    $this->group_id = $s['group_id'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
    $this->ip_protocol = $s['ip_protocol'] ?? '';
    $this->source_security_group_name = $s['source_security_group_name'] ?? '';
    $this->source_security_group_owner_id = $s['source_security_group_owner_id'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

class AuthorizeSecurityGroupIngressRequest {
  public string $cidr_ip;
  public bool $dry_run;
  public int $from_port;
  public ?SecurityGroupId $group_id;
  public ?SecurityGroupName $group_name;
  public ?IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;

  public function __construct(shape(
    ?'cidr_ip' => string,
    ?'dry_run' => bool,
    ?'from_port' => int,
    ?'group_id' => ?SecurityGroupId,
    ?'group_name' => ?SecurityGroupName,
    ?'ip_permissions' => ?IpPermissionList,
    ?'ip_protocol' => string,
    ?'source_security_group_name' => string,
    ?'source_security_group_owner_id' => string,
    ?'to_port' => int,
  ) $s = shape()) {
    $this->cidr_ip = $s['cidr_ip'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->from_port = $s['from_port'] ?? 0;
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
    $this->ip_protocol = $s['ip_protocol'] ?? '';
    $this->source_security_group_name = $s['source_security_group_name'] ?? '';
    $this->source_security_group_owner_id = $s['source_security_group_owner_id'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

type AutoAcceptSharedAttachmentsValue = string;

type AutoPlacement = string;

type AutoRecoveryFlag = bool;

class AvailabilityZone {
  public string $group_name;
  public ?AvailabilityZoneMessageList $messages;
  public string $network_border_group;
  public ?AvailabilityZoneOptInStatus $opt_in_status;
  public string $region_name;
  public ?AvailabilityZoneState $state;
  public string $zone_id;
  public string $zone_name;

  public function __construct(shape(
    ?'group_name' => string,
    ?'messages' => ?AvailabilityZoneMessageList,
    ?'network_border_group' => string,
    ?'opt_in_status' => ?AvailabilityZoneOptInStatus,
    ?'region_name' => string,
    ?'state' => ?AvailabilityZoneState,
    ?'zone_id' => string,
    ?'zone_name' => string,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
    $this->messages = $s['messages'] ?? vec[];
    $this->network_border_group = $s['network_border_group'] ?? '';
    $this->opt_in_status = $s['opt_in_status'] ?? '';
    $this->region_name = $s['region_name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->zone_id = $s['zone_id'] ?? '';
    $this->zone_name = $s['zone_name'] ?? '';
  }
}

type AvailabilityZoneList = vec<AvailabilityZone>;

class AvailabilityZoneMessage {
  public string $message;

  public function __construct(shape(
    ?'message' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AvailabilityZoneMessageList = vec<AvailabilityZoneMessage>;

type AvailabilityZoneOptInStatus = string;

type AvailabilityZoneState = string;

type AvailabilityZoneStringList = vec<String>;

class AvailableCapacity {
  public ?AvailableInstanceCapacityList $available_instance_capacity;
  public int $available_v_cpus;

  public function __construct(shape(
    ?'available_instance_capacity' => ?AvailableInstanceCapacityList,
    ?'available_v_cpus' => int,
  ) $s = shape()) {
    $this->available_instance_capacity = $s['available_instance_capacity'] ?? vec[];
    $this->available_v_cpus = $s['available_v_cpus'] ?? 0;
  }
}

type AvailableInstanceCapacityList = vec<InstanceCapacity>;

type BareMetalFlag = bool;

type BatchState = string;

type BillingProductList = vec<String>;

type Blob = string;

class BlobAttributeValue {
  public ?Blob $value;

  public function __construct(shape(
    ?'value' => ?Blob,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

class BlockDeviceMapping {
  public string $device_name;
  public ?EbsBlockDevice $ebs;
  public string $no_device;
  public string $virtual_name;

  public function __construct(shape(
    ?'device_name' => string,
    ?'ebs' => ?EbsBlockDevice,
    ?'no_device' => string,
    ?'virtual_name' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->ebs = $s['ebs'] ?? null;
    $this->no_device = $s['no_device'] ?? '';
    $this->virtual_name = $s['virtual_name'] ?? '';
  }
}

type BlockDeviceMappingList = vec<BlockDeviceMapping>;

type BlockDeviceMappingRequestList = vec<BlockDeviceMapping>;

type Boolean = bool;

type BundleId = string;

type BundleIdStringList = vec<BundleId>;

class BundleInstanceRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public ?Storage $storage;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'storage' => ?Storage,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->storage = $s['storage'] ?? null;
  }
}

class BundleInstanceResult {
  public ?BundleTask $bundle_task;

  public function __construct(shape(
    ?'bundle_task' => ?BundleTask,
  ) $s = shape()) {
    $this->bundle_task = $s['bundle_task'] ?? null;
  }
}

class BundleTask {
  public string $bundle_id;
  public ?BundleTaskError $bundle_task_error;
  public string $instance_id;
  public string $progress;
  public ?DateTime $start_time;
  public ?BundleTaskState $state;
  public ?Storage $storage;
  public ?DateTime $update_time;

  public function __construct(shape(
    ?'bundle_id' => string,
    ?'bundle_task_error' => ?BundleTaskError,
    ?'instance_id' => string,
    ?'progress' => string,
    ?'start_time' => ?DateTime,
    ?'state' => ?BundleTaskState,
    ?'storage' => ?Storage,
    ?'update_time' => ?DateTime,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->bundle_task_error = $s['bundle_task_error'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->storage = $s['storage'] ?? null;
    $this->update_time = $s['update_time'] ?? 0;
  }
}

class BundleTaskError {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type BundleTaskList = vec<BundleTask>;

type BundleTaskState = string;

type BurstablePerformanceFlag = bool;

class ByoipCidr {
  public string $cidr;
  public string $description;
  public ?ByoipCidrState $state;
  public string $status_message;

  public function __construct(shape(
    ?'cidr' => string,
    ?'description' => string,
    ?'state' => ?ByoipCidrState,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->cidr = $s['cidr'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type ByoipCidrSet = vec<ByoipCidr>;

type ByoipCidrState = string;

type CancelBatchErrorCode = string;

class CancelBundleTaskRequest {
  public ?BundleId $bundle_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'bundle_id' => ?BundleId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class CancelBundleTaskResult {
  public ?BundleTask $bundle_task;

  public function __construct(shape(
    ?'bundle_task' => ?BundleTask,
  ) $s = shape()) {
    $this->bundle_task = $s['bundle_task'] ?? null;
  }
}

class CancelCapacityReservationRequest {
  public ?CapacityReservationId $capacity_reservation_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'capacity_reservation_id' => ?CapacityReservationId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class CancelCapacityReservationResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class CancelConversionRequest {
  public ?ConversionTaskId $conversion_task_id;
  public bool $dry_run;
  public string $reason_message;

  public function __construct(shape(
    ?'conversion_task_id' => ?ConversionTaskId,
    ?'dry_run' => bool,
    ?'reason_message' => string,
  ) $s = shape()) {
    $this->conversion_task_id = $s['conversion_task_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->reason_message = $s['reason_message'] ?? '';
  }
}

class CancelExportTaskRequest {
  public ?ExportVmTaskId $export_task_id;

  public function __construct(shape(
    ?'export_task_id' => ?ExportVmTaskId,
  ) $s = shape()) {
    $this->export_task_id = $s['export_task_id'] ?? '';
  }
}

class CancelImportTaskRequest {
  public string $cancel_reason;
  public bool $dry_run;
  public ?ImportTaskId $import_task_id;

  public function __construct(shape(
    ?'cancel_reason' => string,
    ?'dry_run' => bool,
    ?'import_task_id' => ?ImportTaskId,
  ) $s = shape()) {
    $this->cancel_reason = $s['cancel_reason'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->import_task_id = $s['import_task_id'] ?? '';
  }
}

class CancelImportTaskResult {
  public string $import_task_id;
  public string $previous_state;
  public string $state;

  public function __construct(shape(
    ?'import_task_id' => string,
    ?'previous_state' => string,
    ?'state' => string,
  ) $s = shape()) {
    $this->import_task_id = $s['import_task_id'] ?? '';
    $this->previous_state = $s['previous_state'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class CancelReservedInstancesListingRequest {
  public ?ReservedInstancesListingId $reserved_instances_listing_id;

  public function __construct(shape(
    ?'reserved_instances_listing_id' => ?ReservedInstancesListingId,
  ) $s = shape()) {
    $this->reserved_instances_listing_id = $s['reserved_instances_listing_id'] ?? '';
  }
}

class CancelReservedInstancesListingResult {
  public ?ReservedInstancesListingList $reserved_instances_listings;

  public function __construct(shape(
    ?'reserved_instances_listings' => ?ReservedInstancesListingList,
  ) $s = shape()) {
    $this->reserved_instances_listings = $s['reserved_instances_listings'] ?? vec[];
  }
}

class CancelSpotFleetRequestsError {
  public ?CancelBatchErrorCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?CancelBatchErrorCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class CancelSpotFleetRequestsErrorItem {
  public ?CancelSpotFleetRequestsError $error;
  public string $spot_fleet_request_id;

  public function __construct(shape(
    ?'error' => ?CancelSpotFleetRequestsError,
    ?'spot_fleet_request_id' => string,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
  }
}

type CancelSpotFleetRequestsErrorSet = vec<CancelSpotFleetRequestsErrorItem>;

class CancelSpotFleetRequestsRequest {
  public bool $dry_run;
  public ?SpotFleetRequestIdList $spot_fleet_request_ids;
  public bool $terminate_instances;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'spot_fleet_request_ids' => ?SpotFleetRequestIdList,
    ?'terminate_instances' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->spot_fleet_request_ids = $s['spot_fleet_request_ids'] ?? vec[];
    $this->terminate_instances = $s['terminate_instances'] ?? false;
  }
}

class CancelSpotFleetRequestsResponse {
  public ?CancelSpotFleetRequestsSuccessSet $successful_fleet_requests;
  public ?CancelSpotFleetRequestsErrorSet $unsuccessful_fleet_requests;

  public function __construct(shape(
    ?'successful_fleet_requests' => ?CancelSpotFleetRequestsSuccessSet,
    ?'unsuccessful_fleet_requests' => ?CancelSpotFleetRequestsErrorSet,
  ) $s = shape()) {
    $this->successful_fleet_requests = $s['successful_fleet_requests'] ?? vec[];
    $this->unsuccessful_fleet_requests = $s['unsuccessful_fleet_requests'] ?? vec[];
  }
}

class CancelSpotFleetRequestsSuccessItem {
  public ?BatchState $current_spot_fleet_request_state;
  public ?BatchState $previous_spot_fleet_request_state;
  public string $spot_fleet_request_id;

  public function __construct(shape(
    ?'current_spot_fleet_request_state' => ?BatchState,
    ?'previous_spot_fleet_request_state' => ?BatchState,
    ?'spot_fleet_request_id' => string,
  ) $s = shape()) {
    $this->current_spot_fleet_request_state = $s['current_spot_fleet_request_state'] ?? '';
    $this->previous_spot_fleet_request_state = $s['previous_spot_fleet_request_state'] ?? '';
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
  }
}

type CancelSpotFleetRequestsSuccessSet = vec<CancelSpotFleetRequestsSuccessItem>;

type CancelSpotInstanceRequestState = string;

class CancelSpotInstanceRequestsRequest {
  public bool $dry_run;
  public ?SpotInstanceRequestIdList $spot_instance_request_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'spot_instance_request_ids' => ?SpotInstanceRequestIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->spot_instance_request_ids = $s['spot_instance_request_ids'] ?? vec[];
  }
}

class CancelSpotInstanceRequestsResult {
  public ?CancelledSpotInstanceRequestList $cancelled_spot_instance_requests;

  public function __construct(shape(
    ?'cancelled_spot_instance_requests' => ?CancelledSpotInstanceRequestList,
  ) $s = shape()) {
    $this->cancelled_spot_instance_requests = $s['cancelled_spot_instance_requests'] ?? vec[];
  }
}

class CancelledSpotInstanceRequest {
  public string $spot_instance_request_id;
  public ?CancelSpotInstanceRequestState $state;

  public function __construct(shape(
    ?'spot_instance_request_id' => string,
    ?'state' => ?CancelSpotInstanceRequestState,
  ) $s = shape()) {
    $this->spot_instance_request_id = $s['spot_instance_request_id'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type CancelledSpotInstanceRequestList = vec<CancelledSpotInstanceRequest>;

class CapacityReservation {
  public string $availability_zone;
  public string $availability_zone_id;
  public int $available_instance_count;
  public string $capacity_reservation_arn;
  public string $capacity_reservation_id;
  public ?DateTime $create_date;
  public bool $ebs_optimized;
  public ?DateTime $end_date;
  public ?EndDateType $end_date_type;
  public bool $ephemeral_storage;
  public ?InstanceMatchCriteria $instance_match_criteria;
  public ?CapacityReservationInstancePlatform $instance_platform;
  public string $instance_type;
  public string $owner_id;
  public ?CapacityReservationState $state;
  public ?TagList $tags;
  public ?CapacityReservationTenancy $tenancy;
  public int $total_instance_count;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'availability_zone_id' => string,
    ?'available_instance_count' => int,
    ?'capacity_reservation_arn' => string,
    ?'capacity_reservation_id' => string,
    ?'create_date' => ?DateTime,
    ?'ebs_optimized' => bool,
    ?'end_date' => ?DateTime,
    ?'end_date_type' => ?EndDateType,
    ?'ephemeral_storage' => bool,
    ?'instance_match_criteria' => ?InstanceMatchCriteria,
    ?'instance_platform' => ?CapacityReservationInstancePlatform,
    ?'instance_type' => string,
    ?'owner_id' => string,
    ?'state' => ?CapacityReservationState,
    ?'tags' => ?TagList,
    ?'tenancy' => ?CapacityReservationTenancy,
    ?'total_instance_count' => int,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->available_instance_count = $s['available_instance_count'] ?? 0;
    $this->capacity_reservation_arn = $s['capacity_reservation_arn'] ?? '';
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->end_date = $s['end_date'] ?? 0;
    $this->end_date_type = $s['end_date_type'] ?? '';
    $this->ephemeral_storage = $s['ephemeral_storage'] ?? false;
    $this->instance_match_criteria = $s['instance_match_criteria'] ?? '';
    $this->instance_platform = $s['instance_platform'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->tenancy = $s['tenancy'] ?? '';
    $this->total_instance_count = $s['total_instance_count'] ?? 0;
  }
}

type CapacityReservationId = string;

type CapacityReservationIdSet = vec<CapacityReservationId>;

type CapacityReservationInstancePlatform = string;

class CapacityReservationOptions {
  public ?FleetCapacityReservationUsageStrategy $usage_strategy;

  public function __construct(shape(
    ?'usage_strategy' => ?FleetCapacityReservationUsageStrategy,
  ) $s = shape()) {
    $this->usage_strategy = $s['usage_strategy'] ?? '';
  }
}

class CapacityReservationOptionsRequest {
  public ?FleetCapacityReservationUsageStrategy $usage_strategy;

  public function __construct(shape(
    ?'usage_strategy' => ?FleetCapacityReservationUsageStrategy,
  ) $s = shape()) {
    $this->usage_strategy = $s['usage_strategy'] ?? '';
  }
}

type CapacityReservationPreference = string;

type CapacityReservationSet = vec<CapacityReservation>;

class CapacityReservationSpecification {
  public ?CapacityReservationPreference $capacity_reservation_preference;
  public ?CapacityReservationTarget $capacity_reservation_target;

  public function __construct(shape(
    ?'capacity_reservation_preference' => ?CapacityReservationPreference,
    ?'capacity_reservation_target' => ?CapacityReservationTarget,
  ) $s = shape()) {
    $this->capacity_reservation_preference = $s['capacity_reservation_preference'] ?? '';
    $this->capacity_reservation_target = $s['capacity_reservation_target'] ?? null;
  }
}

class CapacityReservationSpecificationResponse {
  public ?CapacityReservationPreference $capacity_reservation_preference;
  public ?CapacityReservationTargetResponse $capacity_reservation_target;

  public function __construct(shape(
    ?'capacity_reservation_preference' => ?CapacityReservationPreference,
    ?'capacity_reservation_target' => ?CapacityReservationTargetResponse,
  ) $s = shape()) {
    $this->capacity_reservation_preference = $s['capacity_reservation_preference'] ?? '';
    $this->capacity_reservation_target = $s['capacity_reservation_target'] ?? null;
  }
}

type CapacityReservationState = string;

class CapacityReservationTarget {
  public ?CapacityReservationId $capacity_reservation_id;

  public function __construct(shape(
    ?'capacity_reservation_id' => ?CapacityReservationId,
  ) $s = shape()) {
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
  }
}

class CapacityReservationTargetResponse {
  public string $capacity_reservation_id;

  public function __construct(shape(
    ?'capacity_reservation_id' => string,
  ) $s = shape()) {
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
  }
}

type CapacityReservationTenancy = string;

class CertificateAuthentication {
  public string $client_root_certificate_chain;

  public function __construct(shape(
    ?'client_root_certificate_chain' => string,
  ) $s = shape()) {
    $this->client_root_certificate_chain = $s['client_root_certificate_chain'] ?? '';
  }
}

class CertificateAuthenticationRequest {
  public string $client_root_certificate_chain_arn;

  public function __construct(shape(
    ?'client_root_certificate_chain_arn' => string,
  ) $s = shape()) {
    $this->client_root_certificate_chain_arn = $s['client_root_certificate_chain_arn'] ?? '';
  }
}

class CidrAuthorizationContext {
  public string $message;
  public string $signature;

  public function __construct(shape(
    ?'message' => string,
    ?'signature' => string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->signature = $s['signature'] ?? '';
  }
}

class CidrBlock {
  public string $cidr_block;

  public function __construct(shape(
    ?'cidr_block' => string,
  ) $s = shape()) {
    $this->cidr_block = $s['cidr_block'] ?? '';
  }
}

type CidrBlockSet = vec<CidrBlock>;

class ClassicLinkDnsSupport {
  public bool $classic_link_dns_supported;
  public string $vpc_id;

  public function __construct(shape(
    ?'classic_link_dns_supported' => bool,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->classic_link_dns_supported = $s['classic_link_dns_supported'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type ClassicLinkDnsSupportList = vec<ClassicLinkDnsSupport>;

class ClassicLinkInstance {
  public ?GroupIdentifierList $groups;
  public string $instance_id;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'groups' => ?GroupIdentifierList,
    ?'instance_id' => string,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type ClassicLinkInstanceList = vec<ClassicLinkInstance>;

class ClassicLoadBalancer {
  public string $name;

  public function __construct(shape(
    ?'name' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
  }
}

type ClassicLoadBalancers = vec<ClassicLoadBalancer>;

class ClassicLoadBalancersConfig {
  public ?ClassicLoadBalancers $classic_load_balancers;

  public function __construct(shape(
    ?'classic_load_balancers' => ?ClassicLoadBalancers,
  ) $s = shape()) {
    $this->classic_load_balancers = $s['classic_load_balancers'] ?? vec[];
  }
}

class ClientCertificateRevocationListStatus {
  public ?ClientCertificateRevocationListStatusCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?ClientCertificateRevocationListStatusCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ClientCertificateRevocationListStatusCode = string;

class ClientData {
  public string $comment;
  public ?DateTime $upload_end;
  public ?Double $upload_size;
  public ?DateTime $upload_start;

  public function __construct(shape(
    ?'comment' => string,
    ?'upload_end' => ?DateTime,
    ?'upload_size' => ?Double,
    ?'upload_start' => ?DateTime,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->upload_end = $s['upload_end'] ?? 0;
    $this->upload_size = $s['upload_size'] ?? 0.0;
    $this->upload_start = $s['upload_start'] ?? 0;
  }
}

type ClientVpnAssociationId = string;

class ClientVpnAuthentication {
  public ?DirectoryServiceAuthentication $active_directory;
  public ?CertificateAuthentication $mutual_authentication;
  public ?ClientVpnAuthenticationType $type;

  public function __construct(shape(
    ?'active_directory' => ?DirectoryServiceAuthentication,
    ?'mutual_authentication' => ?CertificateAuthentication,
    ?'type' => ?ClientVpnAuthenticationType,
  ) $s = shape()) {
    $this->active_directory = $s['active_directory'] ?? null;
    $this->mutual_authentication = $s['mutual_authentication'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

type ClientVpnAuthenticationList = vec<ClientVpnAuthentication>;

class ClientVpnAuthenticationRequest {
  public ?DirectoryServiceAuthenticationRequest $active_directory;
  public ?CertificateAuthenticationRequest $mutual_authentication;
  public ?ClientVpnAuthenticationType $type;

  public function __construct(shape(
    ?'active_directory' => ?DirectoryServiceAuthenticationRequest,
    ?'mutual_authentication' => ?CertificateAuthenticationRequest,
    ?'type' => ?ClientVpnAuthenticationType,
  ) $s = shape()) {
    $this->active_directory = $s['active_directory'] ?? null;
    $this->mutual_authentication = $s['mutual_authentication'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

type ClientVpnAuthenticationRequestList = vec<ClientVpnAuthenticationRequest>;

type ClientVpnAuthenticationType = string;

class ClientVpnAuthorizationRuleStatus {
  public ?ClientVpnAuthorizationRuleStatusCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?ClientVpnAuthorizationRuleStatusCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ClientVpnAuthorizationRuleStatusCode = string;

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
  public ?ClientVpnConnectionStatus $status;
  public string $timestamp;
  public string $username;

  public function __construct(shape(
    ?'client_ip' => string,
    ?'client_vpn_endpoint_id' => string,
    ?'common_name' => string,
    ?'connection_end_time' => string,
    ?'connection_established_time' => string,
    ?'connection_id' => string,
    ?'egress_bytes' => string,
    ?'egress_packets' => string,
    ?'ingress_bytes' => string,
    ?'ingress_packets' => string,
    ?'status' => ?ClientVpnConnectionStatus,
    ?'timestamp' => string,
    ?'username' => string,
  ) $s = shape()) {
    $this->client_ip = $s['client_ip'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->common_name = $s['common_name'] ?? '';
    $this->connection_end_time = $s['connection_end_time'] ?? '';
    $this->connection_established_time = $s['connection_established_time'] ?? '';
    $this->connection_id = $s['connection_id'] ?? '';
    $this->egress_bytes = $s['egress_bytes'] ?? '';
    $this->egress_packets = $s['egress_packets'] ?? '';
    $this->ingress_bytes = $s['ingress_bytes'] ?? '';
    $this->ingress_packets = $s['ingress_packets'] ?? '';
    $this->status = $s['status'] ?? null;
    $this->timestamp = $s['timestamp'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type ClientVpnConnectionSet = vec<ClientVpnConnection>;

class ClientVpnConnectionStatus {
  public ?ClientVpnConnectionStatusCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?ClientVpnConnectionStatusCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ClientVpnConnectionStatusCode = string;

class ClientVpnEndpoint {
  public ?AssociatedTargetNetworkSet $associated_target_networks;
  public ?ClientVpnAuthenticationList $authentication_options;
  public string $client_cidr_block;
  public string $client_vpn_endpoint_id;
  public ?ConnectionLogResponseOptions $connection_log_options;
  public string $creation_time;
  public string $deletion_time;
  public string $description;
  public string $dns_name;
  public ?ValueStringList $dns_servers;
  public ?ClientVpnSecurityGroupIdSet $security_group_ids;
  public string $server_certificate_arn;
  public bool $split_tunnel;
  public ?ClientVpnEndpointStatus $status;
  public ?TagList $tags;
  public ?TransportProtocol $transport_protocol;
  public ?VpcId $vpc_id;
  public int $vpn_port;
  public ?VpnProtocol $vpn_protocol;

  public function __construct(shape(
    ?'associated_target_networks' => ?AssociatedTargetNetworkSet,
    ?'authentication_options' => ?ClientVpnAuthenticationList,
    ?'client_cidr_block' => string,
    ?'client_vpn_endpoint_id' => string,
    ?'connection_log_options' => ?ConnectionLogResponseOptions,
    ?'creation_time' => string,
    ?'deletion_time' => string,
    ?'description' => string,
    ?'dns_name' => string,
    ?'dns_servers' => ?ValueStringList,
    ?'security_group_ids' => ?ClientVpnSecurityGroupIdSet,
    ?'server_certificate_arn' => string,
    ?'split_tunnel' => bool,
    ?'status' => ?ClientVpnEndpointStatus,
    ?'tags' => ?TagList,
    ?'transport_protocol' => ?TransportProtocol,
    ?'vpc_id' => ?VpcId,
    ?'vpn_port' => int,
    ?'vpn_protocol' => ?VpnProtocol,
  ) $s = shape()) {
    $this->associated_target_networks = $s['associated_target_networks'] ?? vec[];
    $this->authentication_options = $s['authentication_options'] ?? vec[];
    $this->client_cidr_block = $s['client_cidr_block'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->connection_log_options = $s['connection_log_options'] ?? null;
    $this->creation_time = $s['creation_time'] ?? '';
    $this->deletion_time = $s['deletion_time'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dns_name = $s['dns_name'] ?? '';
    $this->dns_servers = $s['dns_servers'] ?? vec[];
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->server_certificate_arn = $s['server_certificate_arn'] ?? '';
    $this->split_tunnel = $s['split_tunnel'] ?? false;
    $this->status = $s['status'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->transport_protocol = $s['transport_protocol'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpn_port = $s['vpn_port'] ?? 0;
    $this->vpn_protocol = $s['vpn_protocol'] ?? '';
  }
}

type ClientVpnEndpointId = string;

type ClientVpnEndpointIdList = vec<ClientVpnEndpointId>;

class ClientVpnEndpointStatus {
  public ?ClientVpnEndpointStatusCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?ClientVpnEndpointStatusCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ClientVpnEndpointStatusCode = string;

class ClientVpnRoute {
  public string $client_vpn_endpoint_id;
  public string $description;
  public string $destination_cidr;
  public string $origin;
  public ?ClientVpnRouteStatus $status;
  public string $target_subnet;
  public string $type;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => string,
    ?'description' => string,
    ?'destination_cidr' => string,
    ?'origin' => string,
    ?'status' => ?ClientVpnRouteStatus,
    ?'target_subnet' => string,
    ?'type' => string,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->destination_cidr = $s['destination_cidr'] ?? '';
    $this->origin = $s['origin'] ?? '';
    $this->status = $s['status'] ?? null;
    $this->target_subnet = $s['target_subnet'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type ClientVpnRouteSet = vec<ClientVpnRoute>;

class ClientVpnRouteStatus {
  public ?ClientVpnRouteStatusCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?ClientVpnRouteStatusCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ClientVpnRouteStatusCode = string;

type ClientVpnSecurityGroupIdSet = vec<SecurityGroupId>;

class CoipAddressUsage {
  public string $allocation_id;
  public string $aws_account_id;
  public string $aws_service;
  public string $co_ip;

  public function __construct(shape(
    ?'allocation_id' => string,
    ?'aws_account_id' => string,
    ?'aws_service' => string,
    ?'co_ip' => string,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->aws_service = $s['aws_service'] ?? '';
    $this->co_ip = $s['co_ip'] ?? '';
  }
}

type CoipAddressUsageSet = vec<CoipAddressUsage>;

class CoipPool {
  public ?LocalGatewayRoutetableId $local_gateway_route_table_id;
  public ?ValueStringList $pool_cidrs;
  public ?CoipPoolId $pool_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'local_gateway_route_table_id' => ?LocalGatewayRoutetableId,
    ?'pool_cidrs' => ?ValueStringList,
    ?'pool_id' => ?CoipPoolId,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->pool_cidrs = $s['pool_cidrs'] ?? vec[];
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type CoipPoolId = string;

type CoipPoolIdSet = vec<CoipPoolId>;

type CoipPoolMaxResults = int;

type CoipPoolSet = vec<CoipPool>;

class ConfirmProductInstanceRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public string $product_code;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'product_code' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->product_code = $s['product_code'] ?? '';
  }
}

class ConfirmProductInstanceResult {
  public string $owner_id;
  public bool $return;

  public function __construct(shape(
    ?'owner_id' => string,
    ?'return' => bool,
  ) $s = shape()) {
    $this->owner_id = $s['owner_id'] ?? '';
    $this->return = $s['return'] ?? false;
  }
}

class ConnectionLogOptions {
  public string $cloudwatch_log_group;
  public string $cloudwatch_log_stream;
  public bool $enabled;

  public function __construct(shape(
    ?'cloudwatch_log_group' => string,
    ?'cloudwatch_log_stream' => string,
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->cloudwatch_log_group = $s['cloudwatch_log_group'] ?? '';
    $this->cloudwatch_log_stream = $s['cloudwatch_log_stream'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
  }
}

class ConnectionLogResponseOptions {
  public string $cloudwatch_log_group;
  public string $cloudwatch_log_stream;
  public bool $enabled;

  public function __construct(shape(
    ?'cloudwatch_log_group' => string,
    ?'cloudwatch_log_stream' => string,
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->cloudwatch_log_group = $s['cloudwatch_log_group'] ?? '';
    $this->cloudwatch_log_stream = $s['cloudwatch_log_stream'] ?? '';
    $this->enabled = $s['enabled'] ?? false;
  }
}

class ConnectionNotification {
  public ?ValueStringList $connection_events;
  public string $connection_notification_arn;
  public string $connection_notification_id;
  public ?ConnectionNotificationState $connection_notification_state;
  public ?ConnectionNotificationType $connection_notification_type;
  public string $service_id;
  public string $vpc_endpoint_id;

  public function __construct(shape(
    ?'connection_events' => ?ValueStringList,
    ?'connection_notification_arn' => string,
    ?'connection_notification_id' => string,
    ?'connection_notification_state' => ?ConnectionNotificationState,
    ?'connection_notification_type' => ?ConnectionNotificationType,
    ?'service_id' => string,
    ?'vpc_endpoint_id' => string,
  ) $s = shape()) {
    $this->connection_events = $s['connection_events'] ?? vec[];
    $this->connection_notification_arn = $s['connection_notification_arn'] ?? '';
    $this->connection_notification_id = $s['connection_notification_id'] ?? '';
    $this->connection_notification_state = $s['connection_notification_state'] ?? '';
    $this->connection_notification_type = $s['connection_notification_type'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
    $this->vpc_endpoint_id = $s['vpc_endpoint_id'] ?? '';
  }
}

type ConnectionNotificationId = string;

type ConnectionNotificationSet = vec<ConnectionNotification>;

type ConnectionNotificationState = string;

type ConnectionNotificationType = string;

type ContainerFormat = string;

type ConversionIdStringList = vec<ConversionTaskId>;

class ConversionTask {
  public string $conversion_task_id;
  public string $expiration_time;
  public ?ImportInstanceTaskDetails $import_instance;
  public ?ImportVolumeTaskDetails $import_volume;
  public ?ConversionTaskState $state;
  public string $status_message;
  public ?TagList $tags;

  public function __construct(shape(
    ?'conversion_task_id' => string,
    ?'expiration_time' => string,
    ?'import_instance' => ?ImportInstanceTaskDetails,
    ?'import_volume' => ?ImportVolumeTaskDetails,
    ?'state' => ?ConversionTaskState,
    ?'status_message' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->conversion_task_id = $s['conversion_task_id'] ?? '';
    $this->expiration_time = $s['expiration_time'] ?? '';
    $this->import_instance = $s['import_instance'] ?? null;
    $this->import_volume = $s['import_volume'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ConversionTaskId = string;

type ConversionTaskState = string;

class CopyFpgaImageRequest {
  public string $client_token;
  public string $description;
  public bool $dry_run;
  public string $name;
  public ?FpgaImageId $source_fpga_image_id;
  public string $source_region;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'name' => string,
    ?'source_fpga_image_id' => ?FpgaImageId,
    ?'source_region' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->source_fpga_image_id = $s['source_fpga_image_id'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
  }
}

class CopyFpgaImageResult {
  public string $fpga_image_id;

  public function __construct(shape(
    ?'fpga_image_id' => string,
  ) $s = shape()) {
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
  }
}

class CopyImageRequest {
  public string $client_token;
  public string $description;
  public bool $dry_run;
  public bool $encrypted;
  public ?KmsKeyId $kms_key_id;
  public string $name;
  public string $source_image_id;
  public string $source_region;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'encrypted' => bool,
    ?'kms_key_id' => ?KmsKeyId,
    ?'name' => string,
    ?'source_image_id' => string,
    ?'source_region' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->source_image_id = $s['source_image_id'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
  }
}

class CopyImageResult {
  public string $image_id;

  public function __construct(shape(
    ?'image_id' => string,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? '';
  }
}

class CopySnapshotRequest {
  public string $description;
  public string $destination_region;
  public bool $dry_run;
  public bool $encrypted;
  public ?KmsKeyId $kms_key_id;
  public string $presigned_url;
  public string $source_region;
  public string $source_snapshot_id;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'description' => string,
    ?'destination_region' => string,
    ?'dry_run' => bool,
    ?'encrypted' => bool,
    ?'kms_key_id' => ?KmsKeyId,
    ?'presigned_url' => string,
    ?'source_region' => string,
    ?'source_snapshot_id' => string,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->destination_region = $s['destination_region'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->presigned_url = $s['presigned_url'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
    $this->source_snapshot_id = $s['source_snapshot_id'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CopySnapshotResult {
  public string $snapshot_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'snapshot_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type CopyTagsFromSource = string;

type CoreCount = int;

type CoreCountList = vec<CoreCount>;

class CpuOptions {
  public int $core_count;
  public int $threads_per_core;

  public function __construct(shape(
    ?'core_count' => int,
    ?'threads_per_core' => int,
  ) $s = shape()) {
    $this->core_count = $s['core_count'] ?? 0;
    $this->threads_per_core = $s['threads_per_core'] ?? 0;
  }
}

class CpuOptionsRequest {
  public int $core_count;
  public int $threads_per_core;

  public function __construct(shape(
    ?'core_count' => int,
    ?'threads_per_core' => int,
  ) $s = shape()) {
    $this->core_count = $s['core_count'] ?? 0;
    $this->threads_per_core = $s['threads_per_core'] ?? 0;
  }
}

class CreateCapacityReservationRequest {
  public string $availability_zone;
  public string $availability_zone_id;
  public string $client_token;
  public bool $dry_run;
  public bool $ebs_optimized;
  public ?DateTime $end_date;
  public ?EndDateType $end_date_type;
  public bool $ephemeral_storage;
  public int $instance_count;
  public ?InstanceMatchCriteria $instance_match_criteria;
  public ?CapacityReservationInstancePlatform $instance_platform;
  public string $instance_type;
  public ?TagSpecificationList $tag_specifications;
  public ?CapacityReservationTenancy $tenancy;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'availability_zone_id' => string,
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'ebs_optimized' => bool,
    ?'end_date' => ?DateTime,
    ?'end_date_type' => ?EndDateType,
    ?'ephemeral_storage' => bool,
    ?'instance_count' => int,
    ?'instance_match_criteria' => ?InstanceMatchCriteria,
    ?'instance_platform' => ?CapacityReservationInstancePlatform,
    ?'instance_type' => string,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'tenancy' => ?CapacityReservationTenancy,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->end_date = $s['end_date'] ?? 0;
    $this->end_date_type = $s['end_date_type'] ?? '';
    $this->ephemeral_storage = $s['ephemeral_storage'] ?? false;
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->instance_match_criteria = $s['instance_match_criteria'] ?? '';
    $this->instance_platform = $s['instance_platform'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->tenancy = $s['tenancy'] ?? '';
  }
}

class CreateCapacityReservationResult {
  public ?CapacityReservation $capacity_reservation;

  public function __construct(shape(
    ?'capacity_reservation' => ?CapacityReservation,
  ) $s = shape()) {
    $this->capacity_reservation = $s['capacity_reservation'] ?? null;
  }
}

class CreateClientVpnEndpointRequest {
  public ?ClientVpnAuthenticationRequestList $authentication_options;
  public string $client_cidr_block;
  public string $client_token;
  public ?ConnectionLogOptions $connection_log_options;
  public string $description;
  public ?ValueStringList $dns_servers;
  public bool $dry_run;
  public ?ClientVpnSecurityGroupIdSet $security_group_ids;
  public string $server_certificate_arn;
  public bool $split_tunnel;
  public ?TagSpecificationList $tag_specifications;
  public ?TransportProtocol $transport_protocol;
  public ?VpcId $vpc_id;
  public int $vpn_port;

  public function __construct(shape(
    ?'authentication_options' => ?ClientVpnAuthenticationRequestList,
    ?'client_cidr_block' => string,
    ?'client_token' => string,
    ?'connection_log_options' => ?ConnectionLogOptions,
    ?'description' => string,
    ?'dns_servers' => ?ValueStringList,
    ?'dry_run' => bool,
    ?'security_group_ids' => ?ClientVpnSecurityGroupIdSet,
    ?'server_certificate_arn' => string,
    ?'split_tunnel' => bool,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'transport_protocol' => ?TransportProtocol,
    ?'vpc_id' => ?VpcId,
    ?'vpn_port' => int,
  ) $s = shape()) {
    $this->authentication_options = $s['authentication_options'] ?? vec[];
    $this->client_cidr_block = $s['client_cidr_block'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->connection_log_options = $s['connection_log_options'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->dns_servers = $s['dns_servers'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->server_certificate_arn = $s['server_certificate_arn'] ?? '';
    $this->split_tunnel = $s['split_tunnel'] ?? false;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->transport_protocol = $s['transport_protocol'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpn_port = $s['vpn_port'] ?? 0;
  }
}

class CreateClientVpnEndpointResult {
  public string $client_vpn_endpoint_id;
  public string $dns_name;
  public ?ClientVpnEndpointStatus $status;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => string,
    ?'dns_name' => string,
    ?'status' => ?ClientVpnEndpointStatus,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dns_name = $s['dns_name'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

class CreateClientVpnRouteRequest {
  public string $client_token;
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $description;
  public string $destination_cidr_block;
  public bool $dry_run;
  public ?SubnetId $target_vpc_subnet_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'description' => string,
    ?'destination_cidr_block' => string,
    ?'dry_run' => bool,
    ?'target_vpc_subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->target_vpc_subnet_id = $s['target_vpc_subnet_id'] ?? '';
  }
}

class CreateClientVpnRouteResult {
  public ?ClientVpnRouteStatus $status;

  public function __construct(shape(
    ?'status' => ?ClientVpnRouteStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? null;
  }
}

class CreateCustomerGatewayRequest {
  public int $bgp_asn;
  public string $certificate_arn;
  public string $device_name;
  public bool $dry_run;
  public string $public_ip;
  public ?GatewayType $type;

  public function __construct(shape(
    ?'bgp_asn' => int,
    ?'certificate_arn' => string,
    ?'device_name' => string,
    ?'dry_run' => bool,
    ?'public_ip' => string,
    ?'type' => ?GatewayType,
  ) $s = shape()) {
    $this->bgp_asn = $s['bgp_asn'] ?? 0;
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->public_ip = $s['public_ip'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class CreateCustomerGatewayResult {
  public ?CustomerGateway $customer_gateway;

  public function __construct(shape(
    ?'customer_gateway' => ?CustomerGateway,
  ) $s = shape()) {
    $this->customer_gateway = $s['customer_gateway'] ?? null;
  }
}

class CreateDefaultSubnetRequest {
  public string $availability_zone;
  public bool $dry_run;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class CreateDefaultSubnetResult {
  public ?Subnet $subnet;

  public function __construct(shape(
    ?'subnet' => ?Subnet,
  ) $s = shape()) {
    $this->subnet = $s['subnet'] ?? null;
  }
}

class CreateDefaultVpcRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class CreateDefaultVpcResult {
  public ?Vpc $vpc;

  public function __construct(shape(
    ?'vpc' => ?Vpc,
  ) $s = shape()) {
    $this->vpc = $s['vpc'] ?? null;
  }
}

class CreateDhcpOptionsRequest {
  public ?NewDhcpConfigurationList $dhcp_configurations;
  public bool $dry_run;

  public function __construct(shape(
    ?'dhcp_configurations' => ?NewDhcpConfigurationList,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dhcp_configurations = $s['dhcp_configurations'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class CreateDhcpOptionsResult {
  public ?DhcpOptions $dhcp_options;

  public function __construct(shape(
    ?'dhcp_options' => ?DhcpOptions,
  ) $s = shape()) {
    $this->dhcp_options = $s['dhcp_options'] ?? null;
  }
}

class CreateEgressOnlyInternetGatewayRequest {
  public string $client_token;
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateEgressOnlyInternetGatewayResult {
  public string $client_token;
  public ?EgressOnlyInternetGateway $egress_only_internet_gateway;

  public function __construct(shape(
    ?'client_token' => string,
    ?'egress_only_internet_gateway' => ?EgressOnlyInternetGateway,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->egress_only_internet_gateway = $s['egress_only_internet_gateway'] ?? null;
  }
}

class CreateFleetError {
  public string $error_code;
  public string $error_message;
  public ?LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public ?InstanceLifecycle $lifecycle;

  public function __construct(shape(
    ?'error_code' => string,
    ?'error_message' => string,
    ?'launch_template_and_overrides' => ?LaunchTemplateAndOverridesResponse,
    ?'lifecycle' => ?InstanceLifecycle,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->launch_template_and_overrides = $s['launch_template_and_overrides'] ?? null;
    $this->lifecycle = $s['lifecycle'] ?? '';
  }
}

type CreateFleetErrorsSet = vec<CreateFleetError>;

class CreateFleetInstance {
  public ?InstanceIdsSet $instance_ids;
  public ?InstanceType $instance_type;
  public ?LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public ?InstanceLifecycle $lifecycle;
  public ?PlatformValues $platform;

  public function __construct(shape(
    ?'instance_ids' => ?InstanceIdsSet,
    ?'instance_type' => ?InstanceType,
    ?'launch_template_and_overrides' => ?LaunchTemplateAndOverridesResponse,
    ?'lifecycle' => ?InstanceLifecycle,
    ?'platform' => ?PlatformValues,
  ) $s = shape()) {
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->instance_type = $s['instance_type'] ?? '';
    $this->launch_template_and_overrides = $s['launch_template_and_overrides'] ?? null;
    $this->lifecycle = $s['lifecycle'] ?? '';
    $this->platform = $s['platform'] ?? '';
  }
}

type CreateFleetInstancesSet = vec<CreateFleetInstance>;

class CreateFleetRequest {
  public string $client_token;
  public bool $dry_run;
  public ?FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public ?FleetLaunchTemplateConfigListRequest $launch_template_configs;
  public ?OnDemandOptionsRequest $on_demand_options;
  public bool $replace_unhealthy_instances;
  public ?SpotOptionsRequest $spot_options;
  public ?TagSpecificationList $tag_specifications;
  public ?TargetCapacitySpecificationRequest $target_capacity_specification;
  public bool $terminate_instances_with_expiration;
  public ?FleetType $type;
  public ?DateTime $valid_from;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'excess_capacity_termination_policy' => ?FleetExcessCapacityTerminationPolicy,
    ?'launch_template_configs' => ?FleetLaunchTemplateConfigListRequest,
    ?'on_demand_options' => ?OnDemandOptionsRequest,
    ?'replace_unhealthy_instances' => bool,
    ?'spot_options' => ?SpotOptionsRequest,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'target_capacity_specification' => ?TargetCapacitySpecificationRequest,
    ?'terminate_instances_with_expiration' => bool,
    ?'type' => ?FleetType,
    ?'valid_from' => ?DateTime,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->excess_capacity_termination_policy = $s['excess_capacity_termination_policy'] ?? '';
    $this->launch_template_configs = $s['launch_template_configs'] ?? vec[];
    $this->on_demand_options = $s['on_demand_options'] ?? null;
    $this->replace_unhealthy_instances = $s['replace_unhealthy_instances'] ?? false;
    $this->spot_options = $s['spot_options'] ?? null;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->target_capacity_specification = $s['target_capacity_specification'] ?? null;
    $this->terminate_instances_with_expiration = $s['terminate_instances_with_expiration'] ?? false;
    $this->type = $s['type'] ?? '';
    $this->valid_from = $s['valid_from'] ?? 0;
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

class CreateFleetResult {
  public ?CreateFleetErrorsSet $errors;
  public ?FleetId $fleet_id;
  public ?CreateFleetInstancesSet $instances;

  public function __construct(shape(
    ?'errors' => ?CreateFleetErrorsSet,
    ?'fleet_id' => ?FleetId,
    ?'instances' => ?CreateFleetInstancesSet,
  ) $s = shape()) {
    $this->errors = $s['errors'] ?? vec[];
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->instances = $s['instances'] ?? vec[];
  }
}

class CreateFlowLogsRequest {
  public string $client_token;
  public string $deliver_logs_permission_arn;
  public bool $dry_run;
  public string $log_destination;
  public ?LogDestinationType $log_destination_type;
  public string $log_format;
  public string $log_group_name;
  public int $max_aggregation_interval;
  public ?FlowLogResourceIds $resource_ids;
  public ?FlowLogsResourceType $resource_type;
  public ?TagSpecificationList $tag_specifications;
  public ?TrafficType $traffic_type;

  public function __construct(shape(
    ?'client_token' => string,
    ?'deliver_logs_permission_arn' => string,
    ?'dry_run' => bool,
    ?'log_destination' => string,
    ?'log_destination_type' => ?LogDestinationType,
    ?'log_format' => string,
    ?'log_group_name' => string,
    ?'max_aggregation_interval' => int,
    ?'resource_ids' => ?FlowLogResourceIds,
    ?'resource_type' => ?FlowLogsResourceType,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'traffic_type' => ?TrafficType,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->deliver_logs_permission_arn = $s['deliver_logs_permission_arn'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->log_destination = $s['log_destination'] ?? '';
    $this->log_destination_type = $s['log_destination_type'] ?? '';
    $this->log_format = $s['log_format'] ?? '';
    $this->log_group_name = $s['log_group_name'] ?? '';
    $this->max_aggregation_interval = $s['max_aggregation_interval'] ?? 0;
    $this->resource_ids = $s['resource_ids'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->traffic_type = $s['traffic_type'] ?? '';
  }
}

class CreateFlowLogsResult {
  public string $client_token;
  public ?ValueStringList $flow_log_ids;
  public ?UnsuccessfulItemSet $unsuccessful;

  public function __construct(shape(
    ?'client_token' => string,
    ?'flow_log_ids' => ?ValueStringList,
    ?'unsuccessful' => ?UnsuccessfulItemSet,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->flow_log_ids = $s['flow_log_ids'] ?? vec[];
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class CreateFpgaImageRequest {
  public string $client_token;
  public string $description;
  public bool $dry_run;
  public ?StorageLocation $input_storage_location;
  public ?StorageLocation $logs_storage_location;
  public string $name;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'input_storage_location' => ?StorageLocation,
    ?'logs_storage_location' => ?StorageLocation,
    ?'name' => string,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->input_storage_location = $s['input_storage_location'] ?? null;
    $this->logs_storage_location = $s['logs_storage_location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateFpgaImageResult {
  public string $fpga_image_global_id;
  public string $fpga_image_id;

  public function __construct(shape(
    ?'fpga_image_global_id' => string,
    ?'fpga_image_id' => string,
  ) $s = shape()) {
    $this->fpga_image_global_id = $s['fpga_image_global_id'] ?? '';
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
  }
}

class CreateImageRequest {
  public ?BlockDeviceMappingRequestList $block_device_mappings;
  public string $description;
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public string $name;
  public bool $no_reboot;

  public function __construct(shape(
    ?'block_device_mappings' => ?BlockDeviceMappingRequestList,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'name' => string,
    ?'no_reboot' => bool,
  ) $s = shape()) {
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->no_reboot = $s['no_reboot'] ?? false;
  }
}

class CreateImageResult {
  public string $image_id;

  public function __construct(shape(
    ?'image_id' => string,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? '';
  }
}

class CreateInstanceExportTaskRequest {
  public string $description;
  public ?ExportToS3TaskSpecification $export_to_s_3_task;
  public ?InstanceId $instance_id;
  public ?ExportEnvironment $target_environment;

  public function __construct(shape(
    ?'description' => string,
    ?'export_to_s_3_task' => ?ExportToS3TaskSpecification,
    ?'instance_id' => ?InstanceId,
    ?'target_environment' => ?ExportEnvironment,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->export_to_s_3_task = $s['export_to_s_3_task'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->target_environment = $s['target_environment'] ?? '';
  }
}

class CreateInstanceExportTaskResult {
  public ?ExportTask $export_task;

  public function __construct(shape(
    ?'export_task' => ?ExportTask,
  ) $s = shape()) {
    $this->export_task = $s['export_task'] ?? null;
  }
}

class CreateInternetGatewayRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class CreateInternetGatewayResult {
  public ?InternetGateway $internet_gateway;

  public function __construct(shape(
    ?'internet_gateway' => ?InternetGateway,
  ) $s = shape()) {
    $this->internet_gateway = $s['internet_gateway'] ?? null;
  }
}

class CreateKeyPairRequest {
  public bool $dry_run;
  public string $key_name;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'key_name' => string,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->key_name = $s['key_name'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateLaunchTemplateRequest {
  public string $client_token;
  public bool $dry_run;
  public ?RequestLaunchTemplateData $launch_template_data;
  public ?LaunchTemplateName $launch_template_name;
  public ?TagSpecificationList $tag_specifications;
  public ?VersionDescription $version_description;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'launch_template_data' => ?RequestLaunchTemplateData,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'version_description' => ?VersionDescription,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->launch_template_data = $s['launch_template_data'] ?? null;
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->version_description = $s['version_description'] ?? '';
  }
}

class CreateLaunchTemplateResult {
  public ?LaunchTemplate $launch_template;

  public function __construct(shape(
    ?'launch_template' => ?LaunchTemplate,
  ) $s = shape()) {
    $this->launch_template = $s['launch_template'] ?? null;
  }
}

class CreateLaunchTemplateVersionRequest {
  public string $client_token;
  public bool $dry_run;
  public ?RequestLaunchTemplateData $launch_template_data;
  public ?LaunchTemplateId $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public string $source_version;
  public ?VersionDescription $version_description;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'launch_template_data' => ?RequestLaunchTemplateData,
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'source_version' => string,
    ?'version_description' => ?VersionDescription,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->launch_template_data = $s['launch_template_data'] ?? null;
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->source_version = $s['source_version'] ?? '';
    $this->version_description = $s['version_description'] ?? '';
  }
}

class CreateLaunchTemplateVersionResult {
  public ?LaunchTemplateVersion $launch_template_version;

  public function __construct(shape(
    ?'launch_template_version' => ?LaunchTemplateVersion,
  ) $s = shape()) {
    $this->launch_template_version = $s['launch_template_version'] ?? null;
  }
}

class CreateLocalGatewayRouteRequest {
  public string $destination_cidr_block;
  public bool $dry_run;
  public ?LocalGatewayRoutetableId $local_gateway_route_table_id;
  public ?LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'dry_run' => bool,
    ?'local_gateway_route_table_id' => ?LocalGatewayRoutetableId,
    ?'local_gateway_virtual_interface_group_id' => ?LocalGatewayVirtualInterfaceGroupId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->local_gateway_virtual_interface_group_id = $s['local_gateway_virtual_interface_group_id'] ?? '';
  }
}

class CreateLocalGatewayRouteResult {
  public ?LocalGatewayRoute $route;

  public function __construct(shape(
    ?'route' => ?LocalGatewayRoute,
  ) $s = shape()) {
    $this->route = $s['route'] ?? null;
  }
}

class CreateLocalGatewayRouteTableVpcAssociationRequest {
  public bool $dry_run;
  public ?LocalGatewayRoutetableId $local_gateway_route_table_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'local_gateway_route_table_id' => ?LocalGatewayRoutetableId,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateLocalGatewayRouteTableVpcAssociationResult {
  public ?LocalGatewayRouteTableVpcAssociation $local_gateway_route_table_vpc_association;

  public function __construct(shape(
    ?'local_gateway_route_table_vpc_association' => ?LocalGatewayRouteTableVpcAssociation,
  ) $s = shape()) {
    $this->local_gateway_route_table_vpc_association = $s['local_gateway_route_table_vpc_association'] ?? null;
  }
}

class CreateNatGatewayRequest {
  public ?AllocationId $allocation_id;
  public string $client_token;
  public bool $dry_run;
  public ?SubnetId $subnet_id;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'allocation_id' => ?AllocationId,
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'subnet_id' => ?SubnetId,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateNatGatewayResult {
  public string $client_token;
  public ?NatGateway $nat_gateway;

  public function __construct(shape(
    ?'client_token' => string,
    ?'nat_gateway' => ?NatGateway,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->nat_gateway = $s['nat_gateway'] ?? null;
  }
}

class CreateNetworkAclEntryRequest {
  public string $cidr_block;
  public bool $dry_run;
  public bool $egress;
  public ?IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
  public ?NetworkAclId $network_acl_id;
  public ?PortRange $port_range;
  public string $protocol;
  public ?RuleAction $rule_action;
  public int $rule_number;

  public function __construct(shape(
    ?'cidr_block' => string,
    ?'dry_run' => bool,
    ?'egress' => bool,
    ?'icmp_type_code' => ?IcmpTypeCode,
    ?'ipv_6_cidr_block' => string,
    ?'network_acl_id' => ?NetworkAclId,
    ?'port_range' => ?PortRange,
    ?'protocol' => string,
    ?'rule_action' => ?RuleAction,
    ?'rule_number' => int,
  ) $s = shape()) {
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->egress = $s['egress'] ?? false;
    $this->icmp_type_code = $s['icmp_type_code'] ?? null;
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->network_acl_id = $s['network_acl_id'] ?? '';
    $this->port_range = $s['port_range'] ?? null;
    $this->protocol = $s['protocol'] ?? '';
    $this->rule_action = $s['rule_action'] ?? '';
    $this->rule_number = $s['rule_number'] ?? 0;
  }
}

class CreateNetworkAclRequest {
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateNetworkAclResult {
  public ?NetworkAcl $network_acl;

  public function __construct(shape(
    ?'network_acl' => ?NetworkAcl,
  ) $s = shape()) {
    $this->network_acl = $s['network_acl'] ?? null;
  }
}

class CreateNetworkInterfacePermissionRequest {
  public string $aws_account_id;
  public string $aws_service;
  public bool $dry_run;
  public ?NetworkInterfaceId $network_interface_id;
  public ?InterfacePermissionType $permission;

  public function __construct(shape(
    ?'aws_account_id' => string,
    ?'aws_service' => string,
    ?'dry_run' => bool,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'permission' => ?InterfacePermissionType,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->aws_service = $s['aws_service'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->permission = $s['permission'] ?? '';
  }
}

class CreateNetworkInterfacePermissionResult {
  public ?NetworkInterfacePermission $interface_permission;

  public function __construct(shape(
    ?'interface_permission' => ?NetworkInterfacePermission,
  ) $s = shape()) {
    $this->interface_permission = $s['interface_permission'] ?? null;
  }
}

class CreateNetworkInterfaceRequest {
  public string $description;
  public bool $dry_run;
  public ?SecurityGroupIdStringList $groups;
  public ?NetworkInterfaceCreationType $interface_type;
  public int $ipv_6_address_count;
  public ?InstanceIpv6AddressList $ipv_6_addresses;
  public string $private_ip_address;
  public ?PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'description' => string,
    ?'dry_run' => bool,
    ?'groups' => ?SecurityGroupIdStringList,
    ?'interface_type' => ?NetworkInterfaceCreationType,
    ?'ipv_6_address_count' => int,
    ?'ipv_6_addresses' => ?InstanceIpv6AddressList,
    ?'private_ip_address' => string,
    ?'private_ip_addresses' => ?PrivateIpAddressSpecificationList,
    ?'secondary_private_ip_address_count' => int,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->interface_type = $s['interface_type'] ?? '';
    $this->ipv_6_address_count = $s['ipv_6_address_count'] ?? 0;
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->secondary_private_ip_address_count = $s['secondary_private_ip_address_count'] ?? 0;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class CreateNetworkInterfaceResult {
  public ?NetworkInterface $network_interface;

  public function __construct(shape(
    ?'network_interface' => ?NetworkInterface,
  ) $s = shape()) {
    $this->network_interface = $s['network_interface'] ?? null;
  }
}

class CreatePlacementGroupRequest {
  public bool $dry_run;
  public string $group_name;
  public int $partition_count;
  public ?PlacementStrategy $strategy;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_name' => string,
    ?'partition_count' => int,
    ?'strategy' => ?PlacementStrategy,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_name = $s['group_name'] ?? '';
    $this->partition_count = $s['partition_count'] ?? 0;
    $this->strategy = $s['strategy'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreatePlacementGroupResult {
  public ?PlacementGroup $placement_group;

  public function __construct(shape(
    ?'placement_group' => ?PlacementGroup,
  ) $s = shape()) {
    $this->placement_group = $s['placement_group'] ?? null;
  }
}

class CreateReservedInstancesListingRequest {
  public string $client_token;
  public int $instance_count;
  public ?PriceScheduleSpecificationList $price_schedules;
  public ?ReservationId $reserved_instances_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'instance_count' => int,
    ?'price_schedules' => ?PriceScheduleSpecificationList,
    ?'reserved_instances_id' => ?ReservationId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->price_schedules = $s['price_schedules'] ?? vec[];
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
  }
}

class CreateReservedInstancesListingResult {
  public ?ReservedInstancesListingList $reserved_instances_listings;

  public function __construct(shape(
    ?'reserved_instances_listings' => ?ReservedInstancesListingList,
  ) $s = shape()) {
    $this->reserved_instances_listings = $s['reserved_instances_listings'] ?? vec[];
  }
}

class CreateRouteRequest {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public bool $dry_run;
  public ?EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public ?RouteGatewayId $gateway_id;
  public ?InstanceId $instance_id;
  public ?LocalGatewayId $local_gateway_id;
  public ?NatGatewayId $nat_gateway_id;
  public ?NetworkInterfaceId $network_interface_id;
  public ?RouteTableId $route_table_id;
  public ?TransitGatewayId $transit_gateway_id;
  public ?VpcPeeringConnectionId $vpc_peering_connection_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'destination_ipv_6_cidr_block' => string,
    ?'dry_run' => bool,
    ?'egress_only_internet_gateway_id' => ?EgressOnlyInternetGatewayId,
    ?'gateway_id' => ?RouteGatewayId,
    ?'instance_id' => ?InstanceId,
    ?'local_gateway_id' => ?LocalGatewayId,
    ?'nat_gateway_id' => ?NatGatewayId,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'route_table_id' => ?RouteTableId,
    ?'transit_gateway_id' => ?TransitGatewayId,
    ?'vpc_peering_connection_id' => ?VpcPeeringConnectionId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->destination_ipv_6_cidr_block = $s['destination_ipv_6_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->egress_only_internet_gateway_id = $s['egress_only_internet_gateway_id'] ?? '';
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->nat_gateway_id = $s['nat_gateway_id'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->route_table_id = $s['route_table_id'] ?? '';
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

class CreateRouteResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class CreateRouteTableRequest {
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateRouteTableResult {
  public ?RouteTable $route_table;

  public function __construct(shape(
    ?'route_table' => ?RouteTable,
  ) $s = shape()) {
    $this->route_table = $s['route_table'] ?? null;
  }
}

class CreateSecurityGroupRequest {
  public string $description;
  public bool $dry_run;
  public string $group_name;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'description' => string,
    ?'dry_run' => bool,
    ?'group_name' => string,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_name = $s['group_name'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateSecurityGroupResult {
  public string $group_id;

  public function __construct(shape(
    ?'group_id' => string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
  }
}

class CreateSnapshotRequest {
  public string $description;
  public bool $dry_run;
  public ?TagSpecificationList $tag_specifications;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'description' => string,
    ?'dry_run' => bool,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class CreateSnapshotsRequest {
  public ?CopyTagsFromSource $copy_tags_from_source;
  public string $description;
  public bool $dry_run;
  public ?InstanceSpecification $instance_specification;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'copy_tags_from_source' => ?CopyTagsFromSource,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'instance_specification' => ?InstanceSpecification,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->copy_tags_from_source = $s['copy_tags_from_source'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_specification = $s['instance_specification'] ?? null;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateSnapshotsResult {
  public ?SnapshotSet $snapshots;

  public function __construct(shape(
    ?'snapshots' => ?SnapshotSet,
  ) $s = shape()) {
    $this->snapshots = $s['snapshots'] ?? vec[];
  }
}

class CreateSpotDatafeedSubscriptionRequest {
  public string $bucket;
  public bool $dry_run;
  public string $prefix;

  public function __construct(shape(
    ?'bucket' => string,
    ?'dry_run' => bool,
    ?'prefix' => string,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->prefix = $s['prefix'] ?? '';
  }
}

class CreateSpotDatafeedSubscriptionResult {
  public ?SpotDatafeedSubscription $spot_datafeed_subscription;

  public function __construct(shape(
    ?'spot_datafeed_subscription' => ?SpotDatafeedSubscription,
  ) $s = shape()) {
    $this->spot_datafeed_subscription = $s['spot_datafeed_subscription'] ?? null;
  }
}

class CreateSubnetRequest {
  public string $availability_zone;
  public string $availability_zone_id;
  public string $cidr_block;
  public bool $dry_run;
  public string $ipv_6_cidr_block;
  public string $outpost_arn;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'availability_zone_id' => string,
    ?'cidr_block' => string,
    ?'dry_run' => bool,
    ?'ipv_6_cidr_block' => string,
    ?'outpost_arn' => string,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateSubnetResult {
  public ?Subnet $subnet;

  public function __construct(shape(
    ?'subnet' => ?Subnet,
  ) $s = shape()) {
    $this->subnet = $s['subnet'] ?? null;
  }
}

class CreateTagsRequest {
  public bool $dry_run;
  public ?ResourceIdList $resources;
  public ?TagList $tags;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'resources' => ?ResourceIdList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->resources = $s['resources'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateTrafficMirrorFilterRequest {
  public string $client_token;
  public string $description;
  public bool $dry_run;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateTrafficMirrorFilterResult {
  public string $client_token;
  public ?TrafficMirrorFilter $traffic_mirror_filter;

  public function __construct(shape(
    ?'client_token' => string,
    ?'traffic_mirror_filter' => ?TrafficMirrorFilter,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->traffic_mirror_filter = $s['traffic_mirror_filter'] ?? null;
  }
}

class CreateTrafficMirrorFilterRuleRequest {
  public string $client_token;
  public string $description;
  public string $destination_cidr_block;
  public ?TrafficMirrorPortRangeRequest $destination_port_range;
  public bool $dry_run;
  public int $protocol;
  public ?TrafficMirrorRuleAction $rule_action;
  public int $rule_number;
  public string $source_cidr_block;
  public ?TrafficMirrorPortRangeRequest $source_port_range;
  public ?TrafficDirection $traffic_direction;
  public ?TrafficMirrorFilterId $traffic_mirror_filter_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'destination_cidr_block' => string,
    ?'destination_port_range' => ?TrafficMirrorPortRangeRequest,
    ?'dry_run' => bool,
    ?'protocol' => int,
    ?'rule_action' => ?TrafficMirrorRuleAction,
    ?'rule_number' => int,
    ?'source_cidr_block' => string,
    ?'source_port_range' => ?TrafficMirrorPortRangeRequest,
    ?'traffic_direction' => ?TrafficDirection,
    ?'traffic_mirror_filter_id' => ?TrafficMirrorFilterId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->destination_port_range = $s['destination_port_range'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->protocol = $s['protocol'] ?? 0;
    $this->rule_action = $s['rule_action'] ?? '';
    $this->rule_number = $s['rule_number'] ?? 0;
    $this->source_cidr_block = $s['source_cidr_block'] ?? '';
    $this->source_port_range = $s['source_port_range'] ?? null;
    $this->traffic_direction = $s['traffic_direction'] ?? '';
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
  }
}

class CreateTrafficMirrorFilterRuleResult {
  public string $client_token;
  public ?TrafficMirrorFilterRule $traffic_mirror_filter_rule;

  public function __construct(shape(
    ?'client_token' => string,
    ?'traffic_mirror_filter_rule' => ?TrafficMirrorFilterRule,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->traffic_mirror_filter_rule = $s['traffic_mirror_filter_rule'] ?? null;
  }
}

class CreateTrafficMirrorSessionRequest {
  public string $client_token;
  public string $description;
  public bool $dry_run;
  public ?NetworkInterfaceId $network_interface_id;
  public int $packet_length;
  public int $session_number;
  public ?TagSpecificationList $tag_specifications;
  public ?TrafficMirrorFilterId $traffic_mirror_filter_id;
  public ?TrafficMirrorTargetId $traffic_mirror_target_id;
  public int $virtual_network_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'packet_length' => int,
    ?'session_number' => int,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'traffic_mirror_filter_id' => ?TrafficMirrorFilterId,
    ?'traffic_mirror_target_id' => ?TrafficMirrorTargetId,
    ?'virtual_network_id' => int,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->packet_length = $s['packet_length'] ?? 0;
    $this->session_number = $s['session_number'] ?? 0;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
    $this->traffic_mirror_target_id = $s['traffic_mirror_target_id'] ?? '';
    $this->virtual_network_id = $s['virtual_network_id'] ?? 0;
  }
}

class CreateTrafficMirrorSessionResult {
  public string $client_token;
  public ?TrafficMirrorSession $traffic_mirror_session;

  public function __construct(shape(
    ?'client_token' => string,
    ?'traffic_mirror_session' => ?TrafficMirrorSession,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->traffic_mirror_session = $s['traffic_mirror_session'] ?? null;
  }
}

class CreateTrafficMirrorTargetRequest {
  public string $client_token;
  public string $description;
  public bool $dry_run;
  public ?NetworkInterfaceId $network_interface_id;
  public string $network_load_balancer_arn;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'network_load_balancer_arn' => string,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->network_load_balancer_arn = $s['network_load_balancer_arn'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateTrafficMirrorTargetResult {
  public string $client_token;
  public ?TrafficMirrorTarget $traffic_mirror_target;

  public function __construct(shape(
    ?'client_token' => string,
    ?'traffic_mirror_target' => ?TrafficMirrorTarget,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->traffic_mirror_target = $s['traffic_mirror_target'] ?? null;
  }
}

class CreateTransitGatewayMulticastDomainRequest {
  public bool $dry_run;
  public ?TagSpecificationList $tag_specifications;
  public ?TransitGatewayId $transit_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'transit_gateway_id' => ?TransitGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
  }
}

class CreateTransitGatewayMulticastDomainResult {
  public ?TransitGatewayMulticastDomain $transit_gateway_multicast_domain;

  public function __construct(shape(
    ?'transit_gateway_multicast_domain' => ?TransitGatewayMulticastDomain,
  ) $s = shape()) {
    $this->transit_gateway_multicast_domain = $s['transit_gateway_multicast_domain'] ?? null;
  }
}

class CreateTransitGatewayPeeringAttachmentRequest {
  public bool $dry_run;
  public string $peer_account_id;
  public string $peer_region;
  public ?TransitAssociationGatewayId $peer_transit_gateway_id;
  public ?TagSpecificationList $tag_specifications;
  public ?TransitGatewayId $transit_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'peer_account_id' => string,
    ?'peer_region' => string,
    ?'peer_transit_gateway_id' => ?TransitAssociationGatewayId,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'transit_gateway_id' => ?TransitGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->peer_account_id = $s['peer_account_id'] ?? '';
    $this->peer_region = $s['peer_region'] ?? '';
    $this->peer_transit_gateway_id = $s['peer_transit_gateway_id'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
  }
}

class CreateTransitGatewayPeeringAttachmentResult {
  public ?TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;

  public function __construct(shape(
    ?'transit_gateway_peering_attachment' => ?TransitGatewayPeeringAttachment,
  ) $s = shape()) {
    $this->transit_gateway_peering_attachment = $s['transit_gateway_peering_attachment'] ?? null;
  }
}

class CreateTransitGatewayRequest {
  public string $description;
  public bool $dry_run;
  public ?TransitGatewayRequestOptions $options;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'description' => string,
    ?'dry_run' => bool,
    ?'options' => ?TransitGatewayRequestOptions,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->options = $s['options'] ?? null;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateTransitGatewayResult {
  public ?TransitGateway $transit_gateway;

  public function __construct(shape(
    ?'transit_gateway' => ?TransitGateway,
  ) $s = shape()) {
    $this->transit_gateway = $s['transit_gateway'] ?? null;
  }
}

class CreateTransitGatewayRouteRequest {
  public bool $blackhole;
  public string $destination_cidr_block;
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'blackhole' => bool,
    ?'destination_cidr_block' => string,
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->blackhole = $s['blackhole'] ?? false;
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class CreateTransitGatewayRouteResult {
  public ?TransitGatewayRoute $route;

  public function __construct(shape(
    ?'route' => ?TransitGatewayRoute,
  ) $s = shape()) {
    $this->route = $s['route'] ?? null;
  }
}

class CreateTransitGatewayRouteTableRequest {
  public bool $dry_run;
  public ?TagSpecificationList $tag_specifications;
  public ?TransitGatewayId $transit_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'transit_gateway_id' => ?TransitGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
  }
}

class CreateTransitGatewayRouteTableResult {
  public ?TransitGatewayRouteTable $transit_gateway_route_table;

  public function __construct(shape(
    ?'transit_gateway_route_table' => ?TransitGatewayRouteTable,
  ) $s = shape()) {
    $this->transit_gateway_route_table = $s['transit_gateway_route_table'] ?? null;
  }
}

class CreateTransitGatewayVpcAttachmentRequest {
  public bool $dry_run;
  public ?CreateTransitGatewayVpcAttachmentRequestOptions $options;
  public ?TransitGatewaySubnetIdList $subnet_ids;
  public ?TagSpecificationList $tag_specifications;
  public ?TransitGatewayId $transit_gateway_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'options' => ?CreateTransitGatewayVpcAttachmentRequestOptions,
    ?'subnet_ids' => ?TransitGatewaySubnetIdList,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'transit_gateway_id' => ?TransitGatewayId,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->options = $s['options'] ?? null;
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateTransitGatewayVpcAttachmentRequestOptions {
  public ?DnsSupportValue $dns_support;
  public ?Ipv6SupportValue $ipv_6_support;

  public function __construct(shape(
    ?'dns_support' => ?DnsSupportValue,
    ?'ipv_6_support' => ?Ipv6SupportValue,
  ) $s = shape()) {
    $this->dns_support = $s['dns_support'] ?? '';
    $this->ipv_6_support = $s['ipv_6_support'] ?? '';
  }
}

class CreateTransitGatewayVpcAttachmentResult {
  public ?TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;

  public function __construct(shape(
    ?'transit_gateway_vpc_attachment' => ?TransitGatewayVpcAttachment,
  ) $s = shape()) {
    $this->transit_gateway_vpc_attachment = $s['transit_gateway_vpc_attachment'] ?? null;
  }
}

class CreateVolumePermission {
  public ?PermissionGroup $group;
  public string $user_id;

  public function __construct(shape(
    ?'group' => ?PermissionGroup,
    ?'user_id' => string,
  ) $s = shape()) {
    $this->group = $s['group'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

type CreateVolumePermissionList = vec<CreateVolumePermission>;

class CreateVolumePermissionModifications {
  public ?CreateVolumePermissionList $add;
  public ?CreateVolumePermissionList $remove;

  public function __construct(shape(
    ?'add' => ?CreateVolumePermissionList,
    ?'remove' => ?CreateVolumePermissionList,
  ) $s = shape()) {
    $this->add = $s['add'] ?? vec[];
    $this->remove = $s['remove'] ?? vec[];
  }
}

class CreateVolumeRequest {
  public string $availability_zone;
  public bool $dry_run;
  public bool $encrypted;
  public int $iops;
  public ?KmsKeyId $kms_key_id;
  public bool $multi_attach_enabled;
  public string $outpost_arn;
  public int $size;
  public ?SnapshotId $snapshot_id;
  public ?TagSpecificationList $tag_specifications;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'dry_run' => bool,
    ?'encrypted' => bool,
    ?'iops' => int,
    ?'kms_key_id' => ?KmsKeyId,
    ?'multi_attach_enabled' => bool,
    ?'outpost_arn' => string,
    ?'size' => int,
    ?'snapshot_id' => ?SnapshotId,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->multi_attach_enabled = $s['multi_attach_enabled'] ?? false;
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->size = $s['size'] ?? 0;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class CreateVpcEndpointConnectionNotificationRequest {
  public string $client_token;
  public ?ValueStringList $connection_events;
  public string $connection_notification_arn;
  public bool $dry_run;
  public ?VpcEndpointServiceId $service_id;
  public ?VpcEndpointId $vpc_endpoint_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'connection_events' => ?ValueStringList,
    ?'connection_notification_arn' => string,
    ?'dry_run' => bool,
    ?'service_id' => ?VpcEndpointServiceId,
    ?'vpc_endpoint_id' => ?VpcEndpointId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->connection_events = $s['connection_events'] ?? vec[];
    $this->connection_notification_arn = $s['connection_notification_arn'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->service_id = $s['service_id'] ?? '';
    $this->vpc_endpoint_id = $s['vpc_endpoint_id'] ?? '';
  }
}

class CreateVpcEndpointConnectionNotificationResult {
  public string $client_token;
  public ?ConnectionNotification $connection_notification;

  public function __construct(shape(
    ?'client_token' => string,
    ?'connection_notification' => ?ConnectionNotification,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->connection_notification = $s['connection_notification'] ?? null;
  }
}

class CreateVpcEndpointRequest {
  public string $client_token;
  public bool $dry_run;
  public string $policy_document;
  public bool $private_dns_enabled;
  public ?VpcEndpointRouteTableIdList $route_table_ids;
  public ?VpcEndpointSecurityGroupIdList $security_group_ids;
  public string $service_name;
  public ?VpcEndpointSubnetIdList $subnet_ids;
  public ?TagSpecificationList $tag_specifications;
  public ?VpcEndpointType $vpc_endpoint_type;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'policy_document' => string,
    ?'private_dns_enabled' => bool,
    ?'route_table_ids' => ?VpcEndpointRouteTableIdList,
    ?'security_group_ids' => ?VpcEndpointSecurityGroupIdList,
    ?'service_name' => string,
    ?'subnet_ids' => ?VpcEndpointSubnetIdList,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'vpc_endpoint_type' => ?VpcEndpointType,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->policy_document = $s['policy_document'] ?? '';
    $this->private_dns_enabled = $s['private_dns_enabled'] ?? false;
    $this->route_table_ids = $s['route_table_ids'] ?? vec[];
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->service_name = $s['service_name'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->vpc_endpoint_type = $s['vpc_endpoint_type'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateVpcEndpointResult {
  public string $client_token;
  public ?VpcEndpoint $vpc_endpoint;

  public function __construct(shape(
    ?'client_token' => string,
    ?'vpc_endpoint' => ?VpcEndpoint,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->vpc_endpoint = $s['vpc_endpoint'] ?? null;
  }
}

class CreateVpcEndpointServiceConfigurationRequest {
  public bool $acceptance_required;
  public string $client_token;
  public bool $dry_run;
  public ?ValueStringList $network_load_balancer_arns;
  public string $private_dns_name;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'acceptance_required' => bool,
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'network_load_balancer_arns' => ?ValueStringList,
    ?'private_dns_name' => string,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->acceptance_required = $s['acceptance_required'] ?? false;
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_load_balancer_arns = $s['network_load_balancer_arns'] ?? vec[];
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class CreateVpcEndpointServiceConfigurationResult {
  public string $client_token;
  public ?ServiceConfiguration $service_configuration;

  public function __construct(shape(
    ?'client_token' => string,
    ?'service_configuration' => ?ServiceConfiguration,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->service_configuration = $s['service_configuration'] ?? null;
  }
}

class CreateVpcPeeringConnectionRequest {
  public bool $dry_run;
  public string $peer_owner_id;
  public string $peer_region;
  public string $peer_vpc_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'peer_owner_id' => string,
    ?'peer_region' => string,
    ?'peer_vpc_id' => string,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->peer_owner_id = $s['peer_owner_id'] ?? '';
    $this->peer_region = $s['peer_region'] ?? '';
    $this->peer_vpc_id = $s['peer_vpc_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class CreateVpcPeeringConnectionResult {
  public ?VpcPeeringConnection $vpc_peering_connection;

  public function __construct(shape(
    ?'vpc_peering_connection' => ?VpcPeeringConnection,
  ) $s = shape()) {
    $this->vpc_peering_connection = $s['vpc_peering_connection'] ?? null;
  }
}

class CreateVpcRequest {
  public bool $amazon_provided_ipv_6_cidr_block;
  public string $cidr_block;
  public bool $dry_run;
  public ?Tenancy $instance_tenancy;
  public string $ipv_6_cidr_block;
  public string $ipv_6_cidr_block_network_border_group;
  public ?Ipv6PoolEc2Id $ipv_6_pool;

  public function __construct(shape(
    ?'amazon_provided_ipv_6_cidr_block' => bool,
    ?'cidr_block' => string,
    ?'dry_run' => bool,
    ?'instance_tenancy' => ?Tenancy,
    ?'ipv_6_cidr_block' => string,
    ?'ipv_6_cidr_block_network_border_group' => string,
    ?'ipv_6_pool' => ?Ipv6PoolEc2Id,
  ) $s = shape()) {
    $this->amazon_provided_ipv_6_cidr_block = $s['amazon_provided_ipv_6_cidr_block'] ?? false;
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_tenancy = $s['instance_tenancy'] ?? '';
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->ipv_6_cidr_block_network_border_group = $s['ipv_6_cidr_block_network_border_group'] ?? '';
    $this->ipv_6_pool = $s['ipv_6_pool'] ?? '';
  }
}

class CreateVpcResult {
  public ?Vpc $vpc;

  public function __construct(shape(
    ?'vpc' => ?Vpc,
  ) $s = shape()) {
    $this->vpc = $s['vpc'] ?? null;
  }
}

class CreateVpnConnectionRequest {
  public ?CustomerGatewayId $customer_gateway_id;
  public bool $dry_run;
  public ?VpnConnectionOptionsSpecification $options;
  public ?TransitGatewayId $transit_gateway_id;
  public string $type;
  public ?VpnGatewayId $vpn_gateway_id;

  public function __construct(shape(
    ?'customer_gateway_id' => ?CustomerGatewayId,
    ?'dry_run' => bool,
    ?'options' => ?VpnConnectionOptionsSpecification,
    ?'transit_gateway_id' => ?TransitGatewayId,
    ?'type' => string,
    ?'vpn_gateway_id' => ?VpnGatewayId,
  ) $s = shape()) {
    $this->customer_gateway_id = $s['customer_gateway_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->options = $s['options'] ?? null;
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->vpn_gateway_id = $s['vpn_gateway_id'] ?? '';
  }
}

class CreateVpnConnectionResult {
  public ?VpnConnection $vpn_connection;

  public function __construct(shape(
    ?'vpn_connection' => ?VpnConnection,
  ) $s = shape()) {
    $this->vpn_connection = $s['vpn_connection'] ?? null;
  }
}

class CreateVpnConnectionRouteRequest {
  public string $destination_cidr_block;
  public ?VpnConnectionId $vpn_connection_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'vpn_connection_id' => ?VpnConnectionId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->vpn_connection_id = $s['vpn_connection_id'] ?? '';
  }
}

class CreateVpnGatewayRequest {
  public ?Long $amazon_side_asn;
  public string $availability_zone;
  public bool $dry_run;
  public ?GatewayType $type;

  public function __construct(shape(
    ?'amazon_side_asn' => ?Long,
    ?'availability_zone' => string,
    ?'dry_run' => bool,
    ?'type' => ?GatewayType,
  ) $s = shape()) {
    $this->amazon_side_asn = $s['amazon_side_asn'] ?? 0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->type = $s['type'] ?? '';
  }
}

class CreateVpnGatewayResult {
  public ?VpnGateway $vpn_gateway;

  public function __construct(shape(
    ?'vpn_gateway' => ?VpnGateway,
  ) $s = shape()) {
    $this->vpn_gateway = $s['vpn_gateway'] ?? null;
  }
}

class CreditSpecification {
  public string $cpu_credits;

  public function __construct(shape(
    ?'cpu_credits' => string,
  ) $s = shape()) {
    $this->cpu_credits = $s['cpu_credits'] ?? '';
  }
}

class CreditSpecificationRequest {
  public string $cpu_credits;

  public function __construct(shape(
    ?'cpu_credits' => string,
  ) $s = shape()) {
    $this->cpu_credits = $s['cpu_credits'] ?? '';
  }
}

type CurrencyCodeValues = string;

type CurrentGenerationFlag = bool;

class CustomerGateway {
  public string $bgp_asn;
  public string $certificate_arn;
  public string $customer_gateway_id;
  public string $device_name;
  public string $ip_address;
  public string $state;
  public ?TagList $tags;
  public string $type;

  public function __construct(shape(
    ?'bgp_asn' => string,
    ?'certificate_arn' => string,
    ?'customer_gateway_id' => string,
    ?'device_name' => string,
    ?'ip_address' => string,
    ?'state' => string,
    ?'tags' => ?TagList,
    ?'type' => string,
  ) $s = shape()) {
    $this->bgp_asn = $s['bgp_asn'] ?? '';
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->customer_gateway_id = $s['customer_gateway_id'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

type CustomerGatewayId = string;

type CustomerGatewayIdStringList = vec<CustomerGatewayId>;

type CustomerGatewayList = vec<CustomerGateway>;

type DITMaxResults = int;

type DITOMaxResults = int;

type DatafeedSubscriptionState = string;

type DateTime = int;

type DedicatedHostFlag = bool;

type DedicatedHostId = string;

type DefaultRouteTableAssociationValue = string;

type DefaultRouteTablePropagationValue = string;

type DefaultTargetCapacityType = string;

type DefaultingDhcpOptionsId = string;

class DeleteClientVpnEndpointRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DeleteClientVpnEndpointResult {
  public ?ClientVpnEndpointStatus $status;

  public function __construct(shape(
    ?'status' => ?ClientVpnEndpointStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? null;
  }
}

class DeleteClientVpnRouteRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $destination_cidr_block;
  public bool $dry_run;
  public ?SubnetId $target_vpc_subnet_id;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'destination_cidr_block' => string,
    ?'dry_run' => bool,
    ?'target_vpc_subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->target_vpc_subnet_id = $s['target_vpc_subnet_id'] ?? '';
  }
}

class DeleteClientVpnRouteResult {
  public ?ClientVpnRouteStatus $status;

  public function __construct(shape(
    ?'status' => ?ClientVpnRouteStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? null;
  }
}

class DeleteCustomerGatewayRequest {
  public ?CustomerGatewayId $customer_gateway_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'customer_gateway_id' => ?CustomerGatewayId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->customer_gateway_id = $s['customer_gateway_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DeleteDhcpOptionsRequest {
  public ?DhcpOptionsId $dhcp_options_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'dhcp_options_id' => ?DhcpOptionsId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dhcp_options_id = $s['dhcp_options_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DeleteEgressOnlyInternetGatewayRequest {
  public bool $dry_run;
  public ?EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'egress_only_internet_gateway_id' => ?EgressOnlyInternetGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->egress_only_internet_gateway_id = $s['egress_only_internet_gateway_id'] ?? '';
  }
}

class DeleteEgressOnlyInternetGatewayResult {
  public bool $return_code;

  public function __construct(shape(
    ?'return_code' => bool,
  ) $s = shape()) {
    $this->return_code = $s['return_code'] ?? false;
  }
}

class DeleteFleetError {
  public ?DeleteFleetErrorCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?DeleteFleetErrorCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type DeleteFleetErrorCode = string;

class DeleteFleetErrorItem {
  public ?DeleteFleetError $error;
  public ?FleetId $fleet_id;

  public function __construct(shape(
    ?'error' => ?DeleteFleetError,
    ?'fleet_id' => ?FleetId,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->fleet_id = $s['fleet_id'] ?? '';
  }
}

type DeleteFleetErrorSet = vec<DeleteFleetErrorItem>;

class DeleteFleetSuccessItem {
  public ?FleetStateCode $current_fleet_state;
  public ?FleetId $fleet_id;
  public ?FleetStateCode $previous_fleet_state;

  public function __construct(shape(
    ?'current_fleet_state' => ?FleetStateCode,
    ?'fleet_id' => ?FleetId,
    ?'previous_fleet_state' => ?FleetStateCode,
  ) $s = shape()) {
    $this->current_fleet_state = $s['current_fleet_state'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->previous_fleet_state = $s['previous_fleet_state'] ?? '';
  }
}

type DeleteFleetSuccessSet = vec<DeleteFleetSuccessItem>;

class DeleteFleetsRequest {
  public bool $dry_run;
  public ?FleetIdSet $fleet_ids;
  public bool $terminate_instances;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'fleet_ids' => ?FleetIdSet,
    ?'terminate_instances' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->fleet_ids = $s['fleet_ids'] ?? vec[];
    $this->terminate_instances = $s['terminate_instances'] ?? false;
  }
}

class DeleteFleetsResult {
  public ?DeleteFleetSuccessSet $successful_fleet_deletions;
  public ?DeleteFleetErrorSet $unsuccessful_fleet_deletions;

  public function __construct(shape(
    ?'successful_fleet_deletions' => ?DeleteFleetSuccessSet,
    ?'unsuccessful_fleet_deletions' => ?DeleteFleetErrorSet,
  ) $s = shape()) {
    $this->successful_fleet_deletions = $s['successful_fleet_deletions'] ?? vec[];
    $this->unsuccessful_fleet_deletions = $s['unsuccessful_fleet_deletions'] ?? vec[];
  }
}

class DeleteFlowLogsRequest {
  public bool $dry_run;
  public ?FlowLogIdList $flow_log_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'flow_log_ids' => ?FlowLogIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->flow_log_ids = $s['flow_log_ids'] ?? vec[];
  }
}

class DeleteFlowLogsResult {
  public ?UnsuccessfulItemSet $unsuccessful;

  public function __construct(shape(
    ?'unsuccessful' => ?UnsuccessfulItemSet,
  ) $s = shape()) {
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class DeleteFpgaImageRequest {
  public bool $dry_run;
  public ?FpgaImageId $fpga_image_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'fpga_image_id' => ?FpgaImageId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
  }
}

class DeleteFpgaImageResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class DeleteInternetGatewayRequest {
  public bool $dry_run;
  public ?InternetGatewayId $internet_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'internet_gateway_id' => ?InternetGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->internet_gateway_id = $s['internet_gateway_id'] ?? '';
  }
}

class DeleteKeyPairRequest {
  public bool $dry_run;
  public ?KeyPairName $key_name;
  public ?KeyPairId $key_pair_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'key_name' => ?KeyPairName,
    ?'key_pair_id' => ?KeyPairId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->key_name = $s['key_name'] ?? '';
    $this->key_pair_id = $s['key_pair_id'] ?? '';
  }
}

class DeleteLaunchTemplateRequest {
  public bool $dry_run;
  public ?LaunchTemplateId $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => ?LaunchTemplateName,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
  }
}

class DeleteLaunchTemplateResult {
  public ?LaunchTemplate $launch_template;

  public function __construct(shape(
    ?'launch_template' => ?LaunchTemplate,
  ) $s = shape()) {
    $this->launch_template = $s['launch_template'] ?? null;
  }
}

class DeleteLaunchTemplateVersionsRequest {
  public bool $dry_run;
  public ?LaunchTemplateId $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public ?VersionStringList $versions;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'versions' => ?VersionStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class DeleteLaunchTemplateVersionsResponseErrorItem {
  public string $launch_template_id;
  public string $launch_template_name;
  public ?ResponseError $response_error;
  public ?Long $version_number;

  public function __construct(shape(
    ?'launch_template_id' => string,
    ?'launch_template_name' => string,
    ?'response_error' => ?ResponseError,
    ?'version_number' => ?Long,
  ) $s = shape()) {
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->response_error = $s['response_error'] ?? null;
    $this->version_number = $s['version_number'] ?? 0;
  }
}

type DeleteLaunchTemplateVersionsResponseErrorSet = vec<DeleteLaunchTemplateVersionsResponseErrorItem>;

class DeleteLaunchTemplateVersionsResponseSuccessItem {
  public string $launch_template_id;
  public string $launch_template_name;
  public ?Long $version_number;

  public function __construct(shape(
    ?'launch_template_id' => string,
    ?'launch_template_name' => string,
    ?'version_number' => ?Long,
  ) $s = shape()) {
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

type DeleteLaunchTemplateVersionsResponseSuccessSet = vec<DeleteLaunchTemplateVersionsResponseSuccessItem>;

class DeleteLaunchTemplateVersionsResult {
  public ?DeleteLaunchTemplateVersionsResponseSuccessSet $successfully_deleted_launch_template_versions;
  public ?DeleteLaunchTemplateVersionsResponseErrorSet $unsuccessfully_deleted_launch_template_versions;

  public function __construct(shape(
    ?'successfully_deleted_launch_template_versions' => ?DeleteLaunchTemplateVersionsResponseSuccessSet,
    ?'unsuccessfully_deleted_launch_template_versions' => ?DeleteLaunchTemplateVersionsResponseErrorSet,
  ) $s = shape()) {
    $this->successfully_deleted_launch_template_versions = $s['successfully_deleted_launch_template_versions'] ?? vec[];
    $this->unsuccessfully_deleted_launch_template_versions = $s['unsuccessfully_deleted_launch_template_versions'] ?? vec[];
  }
}

class DeleteLocalGatewayRouteRequest {
  public string $destination_cidr_block;
  public bool $dry_run;
  public ?LocalGatewayRoutetableId $local_gateway_route_table_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'dry_run' => bool,
    ?'local_gateway_route_table_id' => ?LocalGatewayRoutetableId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
  }
}

class DeleteLocalGatewayRouteResult {
  public ?LocalGatewayRoute $route;

  public function __construct(shape(
    ?'route' => ?LocalGatewayRoute,
  ) $s = shape()) {
    $this->route = $s['route'] ?? null;
  }
}

class DeleteLocalGatewayRouteTableVpcAssociationRequest {
  public bool $dry_run;
  public ?LocalGatewayRouteTableVpcAssociationId $local_gateway_route_table_vpc_association_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'local_gateway_route_table_vpc_association_id' => ?LocalGatewayRouteTableVpcAssociationId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->local_gateway_route_table_vpc_association_id = $s['local_gateway_route_table_vpc_association_id'] ?? '';
  }
}

class DeleteLocalGatewayRouteTableVpcAssociationResult {
  public ?LocalGatewayRouteTableVpcAssociation $local_gateway_route_table_vpc_association;

  public function __construct(shape(
    ?'local_gateway_route_table_vpc_association' => ?LocalGatewayRouteTableVpcAssociation,
  ) $s = shape()) {
    $this->local_gateway_route_table_vpc_association = $s['local_gateway_route_table_vpc_association'] ?? null;
  }
}

class DeleteNatGatewayRequest {
  public bool $dry_run;
  public ?NatGatewayId $nat_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'nat_gateway_id' => ?NatGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->nat_gateway_id = $s['nat_gateway_id'] ?? '';
  }
}

class DeleteNatGatewayResult {
  public string $nat_gateway_id;

  public function __construct(shape(
    ?'nat_gateway_id' => string,
  ) $s = shape()) {
    $this->nat_gateway_id = $s['nat_gateway_id'] ?? '';
  }
}

class DeleteNetworkAclEntryRequest {
  public bool $dry_run;
  public bool $egress;
  public ?NetworkAclId $network_acl_id;
  public int $rule_number;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'egress' => bool,
    ?'network_acl_id' => ?NetworkAclId,
    ?'rule_number' => int,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->egress = $s['egress'] ?? false;
    $this->network_acl_id = $s['network_acl_id'] ?? '';
    $this->rule_number = $s['rule_number'] ?? 0;
  }
}

class DeleteNetworkAclRequest {
  public bool $dry_run;
  public ?NetworkAclId $network_acl_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'network_acl_id' => ?NetworkAclId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_acl_id = $s['network_acl_id'] ?? '';
  }
}

class DeleteNetworkInterfacePermissionRequest {
  public bool $dry_run;
  public bool $force;
  public ?NetworkInterfacePermissionId $network_interface_permission_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'force' => bool,
    ?'network_interface_permission_id' => ?NetworkInterfacePermissionId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->force = $s['force'] ?? false;
    $this->network_interface_permission_id = $s['network_interface_permission_id'] ?? '';
  }
}

class DeleteNetworkInterfacePermissionResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class DeleteNetworkInterfaceRequest {
  public bool $dry_run;
  public ?NetworkInterfaceId $network_interface_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'network_interface_id' => ?NetworkInterfaceId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
  }
}

class DeletePlacementGroupRequest {
  public bool $dry_run;
  public ?PlacementGroupName $group_name;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_name' => ?PlacementGroupName,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_name = $s['group_name'] ?? '';
  }
}

class DeleteQueuedReservedInstancesError {
  public ?DeleteQueuedReservedInstancesErrorCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?DeleteQueuedReservedInstancesErrorCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type DeleteQueuedReservedInstancesErrorCode = string;

type DeleteQueuedReservedInstancesIdList = vec<ReservationId>;

class DeleteQueuedReservedInstancesRequest {
  public bool $dry_run;
  public ?DeleteQueuedReservedInstancesIdList $reserved_instances_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'reserved_instances_ids' => ?DeleteQueuedReservedInstancesIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->reserved_instances_ids = $s['reserved_instances_ids'] ?? vec[];
  }
}

class DeleteQueuedReservedInstancesResult {
  public ?FailedQueuedPurchaseDeletionSet $failed_queued_purchase_deletions;
  public ?SuccessfulQueuedPurchaseDeletionSet $successful_queued_purchase_deletions;

  public function __construct(shape(
    ?'failed_queued_purchase_deletions' => ?FailedQueuedPurchaseDeletionSet,
    ?'successful_queued_purchase_deletions' => ?SuccessfulQueuedPurchaseDeletionSet,
  ) $s = shape()) {
    $this->failed_queued_purchase_deletions = $s['failed_queued_purchase_deletions'] ?? vec[];
    $this->successful_queued_purchase_deletions = $s['successful_queued_purchase_deletions'] ?? vec[];
  }
}

class DeleteRouteRequest {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public bool $dry_run;
  public ?RouteTableId $route_table_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'destination_ipv_6_cidr_block' => string,
    ?'dry_run' => bool,
    ?'route_table_id' => ?RouteTableId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->destination_ipv_6_cidr_block = $s['destination_ipv_6_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->route_table_id = $s['route_table_id'] ?? '';
  }
}

class DeleteRouteTableRequest {
  public bool $dry_run;
  public ?RouteTableId $route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'route_table_id' => ?RouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->route_table_id = $s['route_table_id'] ?? '';
  }
}

class DeleteSecurityGroupRequest {
  public bool $dry_run;
  public ?SecurityGroupId $group_id;
  public ?SecurityGroupName $group_name;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_id' => ?SecurityGroupId,
    ?'group_name' => ?SecurityGroupName,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

class DeleteSnapshotRequest {
  public bool $dry_run;
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class DeleteSpotDatafeedSubscriptionRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DeleteSubnetRequest {
  public bool $dry_run;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class DeleteTagsRequest {
  public bool $dry_run;
  public ?ResourceIdList $resources;
  public ?TagList $tags;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'resources' => ?ResourceIdList,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->resources = $s['resources'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DeleteTrafficMirrorFilterRequest {
  public bool $dry_run;
  public ?TrafficMirrorFilterId $traffic_mirror_filter_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'traffic_mirror_filter_id' => ?TrafficMirrorFilterId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
  }
}

class DeleteTrafficMirrorFilterResult {
  public string $traffic_mirror_filter_id;

  public function __construct(shape(
    ?'traffic_mirror_filter_id' => string,
  ) $s = shape()) {
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
  }
}

class DeleteTrafficMirrorFilterRuleRequest {
  public bool $dry_run;
  public ?TrafficMirrorFilterRuleId $traffic_mirror_filter_rule_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'traffic_mirror_filter_rule_id' => ?TrafficMirrorFilterRuleId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->traffic_mirror_filter_rule_id = $s['traffic_mirror_filter_rule_id'] ?? '';
  }
}

class DeleteTrafficMirrorFilterRuleResult {
  public string $traffic_mirror_filter_rule_id;

  public function __construct(shape(
    ?'traffic_mirror_filter_rule_id' => string,
  ) $s = shape()) {
    $this->traffic_mirror_filter_rule_id = $s['traffic_mirror_filter_rule_id'] ?? '';
  }
}

class DeleteTrafficMirrorSessionRequest {
  public bool $dry_run;
  public ?TrafficMirrorSessionId $traffic_mirror_session_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'traffic_mirror_session_id' => ?TrafficMirrorSessionId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->traffic_mirror_session_id = $s['traffic_mirror_session_id'] ?? '';
  }
}

class DeleteTrafficMirrorSessionResult {
  public string $traffic_mirror_session_id;

  public function __construct(shape(
    ?'traffic_mirror_session_id' => string,
  ) $s = shape()) {
    $this->traffic_mirror_session_id = $s['traffic_mirror_session_id'] ?? '';
  }
}

class DeleteTrafficMirrorTargetRequest {
  public bool $dry_run;
  public ?TrafficMirrorTargetId $traffic_mirror_target_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'traffic_mirror_target_id' => ?TrafficMirrorTargetId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->traffic_mirror_target_id = $s['traffic_mirror_target_id'] ?? '';
  }
}

class DeleteTrafficMirrorTargetResult {
  public string $traffic_mirror_target_id;

  public function __construct(shape(
    ?'traffic_mirror_target_id' => string,
  ) $s = shape()) {
    $this->traffic_mirror_target_id = $s['traffic_mirror_target_id'] ?? '';
  }
}

class DeleteTransitGatewayMulticastDomainRequest {
  public bool $dry_run;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class DeleteTransitGatewayMulticastDomainResult {
  public ?TransitGatewayMulticastDomain $transit_gateway_multicast_domain;

  public function __construct(shape(
    ?'transit_gateway_multicast_domain' => ?TransitGatewayMulticastDomain,
  ) $s = shape()) {
    $this->transit_gateway_multicast_domain = $s['transit_gateway_multicast_domain'] ?? null;
  }
}

class DeleteTransitGatewayPeeringAttachmentRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class DeleteTransitGatewayPeeringAttachmentResult {
  public ?TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;

  public function __construct(shape(
    ?'transit_gateway_peering_attachment' => ?TransitGatewayPeeringAttachment,
  ) $s = shape()) {
    $this->transit_gateway_peering_attachment = $s['transit_gateway_peering_attachment'] ?? null;
  }
}

class DeleteTransitGatewayRequest {
  public bool $dry_run;
  public ?TransitGatewayId $transit_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_id' => ?TransitGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
  }
}

class DeleteTransitGatewayResult {
  public ?TransitGateway $transit_gateway;

  public function __construct(shape(
    ?'transit_gateway' => ?TransitGateway,
  ) $s = shape()) {
    $this->transit_gateway = $s['transit_gateway'] ?? null;
  }
}

class DeleteTransitGatewayRouteRequest {
  public string $destination_cidr_block;
  public bool $dry_run;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'dry_run' => bool,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class DeleteTransitGatewayRouteResult {
  public ?TransitGatewayRoute $route;

  public function __construct(shape(
    ?'route' => ?TransitGatewayRoute,
  ) $s = shape()) {
    $this->route = $s['route'] ?? null;
  }
}

class DeleteTransitGatewayRouteTableRequest {
  public bool $dry_run;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class DeleteTransitGatewayRouteTableResult {
  public ?TransitGatewayRouteTable $transit_gateway_route_table;

  public function __construct(shape(
    ?'transit_gateway_route_table' => ?TransitGatewayRouteTable,
  ) $s = shape()) {
    $this->transit_gateway_route_table = $s['transit_gateway_route_table'] ?? null;
  }
}

class DeleteTransitGatewayVpcAttachmentRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class DeleteTransitGatewayVpcAttachmentResult {
  public ?TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;

  public function __construct(shape(
    ?'transit_gateway_vpc_attachment' => ?TransitGatewayVpcAttachment,
  ) $s = shape()) {
    $this->transit_gateway_vpc_attachment = $s['transit_gateway_vpc_attachment'] ?? null;
  }
}

class DeleteVolumeRequest {
  public bool $dry_run;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class DeleteVpcEndpointConnectionNotificationsRequest {
  public ?ValueStringList $connection_notification_ids;
  public bool $dry_run;

  public function __construct(shape(
    ?'connection_notification_ids' => ?ValueStringList,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->connection_notification_ids = $s['connection_notification_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DeleteVpcEndpointConnectionNotificationsResult {
  public ?UnsuccessfulItemSet $unsuccessful;

  public function __construct(shape(
    ?'unsuccessful' => ?UnsuccessfulItemSet,
  ) $s = shape()) {
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class DeleteVpcEndpointServiceConfigurationsRequest {
  public bool $dry_run;
  public ?VpcEndpointServiceIdList $service_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'service_ids' => ?VpcEndpointServiceIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->service_ids = $s['service_ids'] ?? vec[];
  }
}

class DeleteVpcEndpointServiceConfigurationsResult {
  public ?UnsuccessfulItemSet $unsuccessful;

  public function __construct(shape(
    ?'unsuccessful' => ?UnsuccessfulItemSet,
  ) $s = shape()) {
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class DeleteVpcEndpointsRequest {
  public bool $dry_run;
  public ?VpcEndpointIdList $vpc_endpoint_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_endpoint_ids' => ?VpcEndpointIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_endpoint_ids = $s['vpc_endpoint_ids'] ?? vec[];
  }
}

class DeleteVpcEndpointsResult {
  public ?UnsuccessfulItemSet $unsuccessful;

  public function __construct(shape(
    ?'unsuccessful' => ?UnsuccessfulItemSet,
  ) $s = shape()) {
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class DeleteVpcPeeringConnectionRequest {
  public bool $dry_run;
  public ?VpcPeeringConnectionId $vpc_peering_connection_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_peering_connection_id' => ?VpcPeeringConnectionId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

class DeleteVpcPeeringConnectionResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class DeleteVpcRequest {
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DeleteVpnConnectionRequest {
  public bool $dry_run;
  public ?VpnConnectionId $vpn_connection_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpn_connection_id' => ?VpnConnectionId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpn_connection_id = $s['vpn_connection_id'] ?? '';
  }
}

class DeleteVpnConnectionRouteRequest {
  public string $destination_cidr_block;
  public ?VpnConnectionId $vpn_connection_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'vpn_connection_id' => ?VpnConnectionId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->vpn_connection_id = $s['vpn_connection_id'] ?? '';
  }
}

class DeleteVpnGatewayRequest {
  public bool $dry_run;
  public ?VpnGatewayId $vpn_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpn_gateway_id' => ?VpnGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpn_gateway_id = $s['vpn_gateway_id'] ?? '';
  }
}

class DeprovisionByoipCidrRequest {
  public string $cidr;
  public bool $dry_run;

  public function __construct(shape(
    ?'cidr' => string,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->cidr = $s['cidr'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DeprovisionByoipCidrResult {
  public ?ByoipCidr $byoip_cidr;

  public function __construct(shape(
    ?'byoip_cidr' => ?ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $s['byoip_cidr'] ?? null;
  }
}

class DeregisterImageRequest {
  public bool $dry_run;
  public ?ImageId $image_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'image_id' => ?ImageId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->image_id = $s['image_id'] ?? '';
  }
}

class DeregisterInstanceEventNotificationAttributesRequest {
  public bool $dry_run;
  public ?DeregisterInstanceTagAttributeRequest $instance_tag_attribute;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_tag_attribute' => ?DeregisterInstanceTagAttributeRequest,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_tag_attribute = $s['instance_tag_attribute'] ?? null;
  }
}

class DeregisterInstanceEventNotificationAttributesResult {
  public ?InstanceTagNotificationAttribute $instance_tag_attribute;

  public function __construct(shape(
    ?'instance_tag_attribute' => ?InstanceTagNotificationAttribute,
  ) $s = shape()) {
    $this->instance_tag_attribute = $s['instance_tag_attribute'] ?? null;
  }
}

class DeregisterInstanceTagAttributeRequest {
  public bool $include_all_tags_of_instance;
  public ?InstanceTagKeySet $instance_tag_keys;

  public function __construct(shape(
    ?'include_all_tags_of_instance' => bool,
    ?'instance_tag_keys' => ?InstanceTagKeySet,
  ) $s = shape()) {
    $this->include_all_tags_of_instance = $s['include_all_tags_of_instance'] ?? false;
    $this->instance_tag_keys = $s['instance_tag_keys'] ?? vec[];
  }
}

class DeregisterTransitGatewayMulticastGroupMembersRequest {
  public bool $dry_run;
  public string $group_ip_address;
  public ?TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_ip_address' => string,
    ?'network_interface_ids' => ?TransitGatewayNetworkInterfaceIdList,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->network_interface_ids = $s['network_interface_ids'] ?? vec[];
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class DeregisterTransitGatewayMulticastGroupMembersResult {
  public ?TransitGatewayMulticastDeregisteredGroupMembers $deregistered_multicast_group_members;

  public function __construct(shape(
    ?'deregistered_multicast_group_members' => ?TransitGatewayMulticastDeregisteredGroupMembers,
  ) $s = shape()) {
    $this->deregistered_multicast_group_members = $s['deregistered_multicast_group_members'] ?? null;
  }
}

class DeregisterTransitGatewayMulticastGroupSourcesRequest {
  public bool $dry_run;
  public string $group_ip_address;
  public ?TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_ip_address' => string,
    ?'network_interface_ids' => ?TransitGatewayNetworkInterfaceIdList,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->network_interface_ids = $s['network_interface_ids'] ?? vec[];
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class DeregisterTransitGatewayMulticastGroupSourcesResult {
  public ?TransitGatewayMulticastDeregisteredGroupSources $deregistered_multicast_group_sources;

  public function __construct(shape(
    ?'deregistered_multicast_group_sources' => ?TransitGatewayMulticastDeregisteredGroupSources,
  ) $s = shape()) {
    $this->deregistered_multicast_group_sources = $s['deregistered_multicast_group_sources'] ?? null;
  }
}

class DescribeAccountAttributesRequest {
  public ?AccountAttributeNameStringList $attribute_names;
  public bool $dry_run;

  public function __construct(shape(
    ?'attribute_names' => ?AccountAttributeNameStringList,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DescribeAccountAttributesResult {
  public ?AccountAttributeList $account_attributes;

  public function __construct(shape(
    ?'account_attributes' => ?AccountAttributeList,
  ) $s = shape()) {
    $this->account_attributes = $s['account_attributes'] ?? vec[];
  }
}

class DescribeAddressesRequest {
  public ?AllocationIdList $allocation_ids;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?PublicIpStringList $public_ips;

  public function __construct(shape(
    ?'allocation_ids' => ?AllocationIdList,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'public_ips' => ?PublicIpStringList,
  ) $s = shape()) {
    $this->allocation_ids = $s['allocation_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->public_ips = $s['public_ips'] ?? vec[];
  }
}

class DescribeAddressesResult {
  public ?AddressList $addresses;

  public function __construct(shape(
    ?'addresses' => ?AddressList,
  ) $s = shape()) {
    $this->addresses = $s['addresses'] ?? vec[];
  }
}

class DescribeAggregateIdFormatRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DescribeAggregateIdFormatResult {
  public ?IdFormatList $statuses;
  public bool $use_long_ids_aggregated;

  public function __construct(shape(
    ?'statuses' => ?IdFormatList,
    ?'use_long_ids_aggregated' => bool,
  ) $s = shape()) {
    $this->statuses = $s['statuses'] ?? vec[];
    $this->use_long_ids_aggregated = $s['use_long_ids_aggregated'] ?? false;
  }
}

class DescribeAvailabilityZonesRequest {
  public bool $all_availability_zones;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?ZoneIdStringList $zone_ids;
  public ?ZoneNameStringList $zone_names;

  public function __construct(shape(
    ?'all_availability_zones' => bool,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'zone_ids' => ?ZoneIdStringList,
    ?'zone_names' => ?ZoneNameStringList,
  ) $s = shape()) {
    $this->all_availability_zones = $s['all_availability_zones'] ?? false;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->zone_ids = $s['zone_ids'] ?? vec[];
    $this->zone_names = $s['zone_names'] ?? vec[];
  }
}

class DescribeAvailabilityZonesResult {
  public ?AvailabilityZoneList $availability_zones;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
  }
}

class DescribeBundleTasksRequest {
  public ?BundleIdStringList $bundle_ids;
  public bool $dry_run;
  public ?FilterList $filters;

  public function __construct(shape(
    ?'bundle_ids' => ?BundleIdStringList,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
  ) $s = shape()) {
    $this->bundle_ids = $s['bundle_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
  }
}

class DescribeBundleTasksResult {
  public ?BundleTaskList $bundle_tasks;

  public function __construct(shape(
    ?'bundle_tasks' => ?BundleTaskList,
  ) $s = shape()) {
    $this->bundle_tasks = $s['bundle_tasks'] ?? vec[];
  }
}

type DescribeByoipCidrsMaxResults = int;

class DescribeByoipCidrsRequest {
  public bool $dry_run;
  public ?DescribeByoipCidrsMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'max_results' => ?DescribeByoipCidrsMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeByoipCidrsResult {
  public ?ByoipCidrSet $byoip_cidrs;
  public string $next_token;

  public function __construct(shape(
    ?'byoip_cidrs' => ?ByoipCidrSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->byoip_cidrs = $s['byoip_cidrs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeCapacityReservationsMaxResults = int;

class DescribeCapacityReservationsRequest {
  public ?CapacityReservationIdSet $capacity_reservation_ids;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeCapacityReservationsMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'capacity_reservation_ids' => ?CapacityReservationIdSet,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeCapacityReservationsMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->capacity_reservation_ids = $s['capacity_reservation_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeCapacityReservationsResult {
  public ?CapacityReservationSet $capacity_reservations;
  public string $next_token;

  public function __construct(shape(
    ?'capacity_reservations' => ?CapacityReservationSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->capacity_reservations = $s['capacity_reservations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeClassicLinkInstancesMaxResults = int;

class DescribeClassicLinkInstancesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?InstanceIdStringList $instance_ids;
  public ?DescribeClassicLinkInstancesMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'instance_ids' => ?InstanceIdStringList,
    ?'max_results' => ?DescribeClassicLinkInstancesMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClassicLinkInstancesResult {
  public ?ClassicLinkInstanceList $instances;
  public string $next_token;

  public function __construct(shape(
    ?'instances' => ?ClassicLinkInstanceList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeClientVpnAuthorizationRulesMaxResults = int;

class DescribeClientVpnAuthorizationRulesRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeClientVpnAuthorizationRulesMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeClientVpnAuthorizationRulesMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClientVpnAuthorizationRulesResult {
  public ?AuthorizationRuleSet $authorization_rules;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'authorization_rules' => ?AuthorizationRuleSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->authorization_rules = $s['authorization_rules'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeClientVpnConnectionsMaxResults = int;

class DescribeClientVpnConnectionsRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeClientVpnConnectionsMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeClientVpnConnectionsMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClientVpnConnectionsResult {
  public ?ClientVpnConnectionSet $connections;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'connections' => ?ClientVpnConnectionSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->connections = $s['connections'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeClientVpnEndpointMaxResults = int;

class DescribeClientVpnEndpointsRequest {
  public ?ClientVpnEndpointIdList $client_vpn_endpoint_ids;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeClientVpnEndpointMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'client_vpn_endpoint_ids' => ?ClientVpnEndpointIdList,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeClientVpnEndpointMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->client_vpn_endpoint_ids = $s['client_vpn_endpoint_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClientVpnEndpointsResult {
  public ?EndpointSet $client_vpn_endpoints;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'client_vpn_endpoints' => ?EndpointSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->client_vpn_endpoints = $s['client_vpn_endpoints'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeClientVpnRoutesMaxResults = int;

class DescribeClientVpnRoutesRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeClientVpnRoutesMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeClientVpnRoutesMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClientVpnRoutesResult {
  public ?NextToken $next_token;
  public ?ClientVpnRouteSet $routes;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'routes' => ?ClientVpnRouteSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->routes = $s['routes'] ?? vec[];
  }
}

type DescribeClientVpnTargetNetworksMaxResults = int;

class DescribeClientVpnTargetNetworksRequest {
  public ?ValueStringList $association_ids;
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeClientVpnTargetNetworksMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'association_ids' => ?ValueStringList,
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeClientVpnTargetNetworksMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->association_ids = $s['association_ids'] ?? vec[];
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeClientVpnTargetNetworksResult {
  public ?TargetNetworkSet $client_vpn_target_networks;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'client_vpn_target_networks' => ?TargetNetworkSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->client_vpn_target_networks = $s['client_vpn_target_networks'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeCoipPoolsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?CoipPoolMaxResults $max_results;
  public string $next_token;
  public ?CoipPoolIdSet $pool_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?CoipPoolMaxResults,
    ?'next_token' => string,
    ?'pool_ids' => ?CoipPoolIdSet,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pool_ids = $s['pool_ids'] ?? vec[];
  }
}

class DescribeCoipPoolsResult {
  public ?CoipPoolSet $coip_pools;
  public string $next_token;

  public function __construct(shape(
    ?'coip_pools' => ?CoipPoolSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->coip_pools = $s['coip_pools'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeConversionTaskList = vec<ConversionTask>;

class DescribeConversionTasksRequest {
  public ?ConversionIdStringList $conversion_task_ids;
  public bool $dry_run;

  public function __construct(shape(
    ?'conversion_task_ids' => ?ConversionIdStringList,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->conversion_task_ids = $s['conversion_task_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DescribeConversionTasksResult {
  public ?DescribeConversionTaskList $conversion_tasks;

  public function __construct(shape(
    ?'conversion_tasks' => ?DescribeConversionTaskList,
  ) $s = shape()) {
    $this->conversion_tasks = $s['conversion_tasks'] ?? vec[];
  }
}

class DescribeCustomerGatewaysRequest {
  public ?CustomerGatewayIdStringList $customer_gateway_ids;
  public bool $dry_run;
  public ?FilterList $filters;

  public function __construct(shape(
    ?'customer_gateway_ids' => ?CustomerGatewayIdStringList,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
  ) $s = shape()) {
    $this->customer_gateway_ids = $s['customer_gateway_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
  }
}

class DescribeCustomerGatewaysResult {
  public ?CustomerGatewayList $customer_gateways;

  public function __construct(shape(
    ?'customer_gateways' => ?CustomerGatewayList,
  ) $s = shape()) {
    $this->customer_gateways = $s['customer_gateways'] ?? vec[];
  }
}

type DescribeDhcpOptionsMaxResults = int;

class DescribeDhcpOptionsRequest {
  public ?DhcpOptionsIdStringList $dhcp_options_ids;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeDhcpOptionsMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dhcp_options_ids' => ?DhcpOptionsIdStringList,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeDhcpOptionsMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dhcp_options_ids = $s['dhcp_options_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeDhcpOptionsResult {
  public ?DhcpOptionsList $dhcp_options;
  public string $next_token;

  public function __construct(shape(
    ?'dhcp_options' => ?DhcpOptionsList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dhcp_options = $s['dhcp_options'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeEgressOnlyInternetGatewaysMaxResults = int;

class DescribeEgressOnlyInternetGatewaysRequest {
  public bool $dry_run;
  public ?EgressOnlyInternetGatewayIdList $egress_only_internet_gateway_ids;
  public ?FilterList $filters;
  public ?DescribeEgressOnlyInternetGatewaysMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'egress_only_internet_gateway_ids' => ?EgressOnlyInternetGatewayIdList,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeEgressOnlyInternetGatewaysMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->egress_only_internet_gateway_ids = $s['egress_only_internet_gateway_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeEgressOnlyInternetGatewaysResult {
  public ?EgressOnlyInternetGatewayList $egress_only_internet_gateways;
  public string $next_token;

  public function __construct(shape(
    ?'egress_only_internet_gateways' => ?EgressOnlyInternetGatewayList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->egress_only_internet_gateways = $s['egress_only_internet_gateways'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeElasticGpusMaxResults = int;

class DescribeElasticGpusRequest {
  public bool $dry_run;
  public ?ElasticGpuIdSet $elastic_gpu_ids;
  public ?FilterList $filters;
  public ?DescribeElasticGpusMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'elastic_gpu_ids' => ?ElasticGpuIdSet,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeElasticGpusMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->elastic_gpu_ids = $s['elastic_gpu_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeElasticGpusResult {
  public ?ElasticGpuSet $elastic_gpu_set;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'elastic_gpu_set' => ?ElasticGpuSet,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->elastic_gpu_set = $s['elastic_gpu_set'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeExportImageTasksMaxResults = int;

class DescribeExportImageTasksRequest {
  public bool $dry_run;
  public ?ExportImageTaskIdList $export_image_task_ids;
  public ?FilterList $filters;
  public ?DescribeExportImageTasksMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'export_image_task_ids' => ?ExportImageTaskIdList,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeExportImageTasksMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->export_image_task_ids = $s['export_image_task_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeExportImageTasksResult {
  public ?ExportImageTaskList $export_image_tasks;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'export_image_tasks' => ?ExportImageTaskList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->export_image_tasks = $s['export_image_tasks'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeExportTasksRequest {
  public ?ExportTaskIdStringList $export_task_ids;
  public ?FilterList $filters;

  public function __construct(shape(
    ?'export_task_ids' => ?ExportTaskIdStringList,
    ?'filters' => ?FilterList,
  ) $s = shape()) {
    $this->export_task_ids = $s['export_task_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
  }
}

class DescribeExportTasksResult {
  public ?ExportTaskList $export_tasks;

  public function __construct(shape(
    ?'export_tasks' => ?ExportTaskList,
  ) $s = shape()) {
    $this->export_tasks = $s['export_tasks'] ?? vec[];
  }
}

class DescribeFastSnapshotRestoreSuccessItem {
  public string $availability_zone;
  public ?MillisecondDateTime $disabled_time;
  public ?MillisecondDateTime $disabling_time;
  public ?MillisecondDateTime $enabled_time;
  public ?MillisecondDateTime $enabling_time;
  public ?MillisecondDateTime $optimizing_time;
  public string $owner_alias;
  public string $owner_id;
  public string $snapshot_id;
  public ?FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'disabled_time' => ?MillisecondDateTime,
    ?'disabling_time' => ?MillisecondDateTime,
    ?'enabled_time' => ?MillisecondDateTime,
    ?'enabling_time' => ?MillisecondDateTime,
    ?'optimizing_time' => ?MillisecondDateTime,
    ?'owner_alias' => string,
    ?'owner_id' => string,
    ?'snapshot_id' => string,
    ?'state' => ?FastSnapshotRestoreStateCode,
    ?'state_transition_reason' => string,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->disabled_time = $s['disabled_time'] ?? 0;
    $this->disabling_time = $s['disabling_time'] ?? 0;
    $this->enabled_time = $s['enabled_time'] ?? 0;
    $this->enabling_time = $s['enabling_time'] ?? 0;
    $this->optimizing_time = $s['optimizing_time'] ?? 0;
    $this->owner_alias = $s['owner_alias'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->state_transition_reason = $s['state_transition_reason'] ?? '';
  }
}

type DescribeFastSnapshotRestoreSuccessSet = vec<DescribeFastSnapshotRestoreSuccessItem>;

type DescribeFastSnapshotRestoresMaxResults = int;

class DescribeFastSnapshotRestoresRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeFastSnapshotRestoresMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeFastSnapshotRestoresMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFastSnapshotRestoresResult {
  public ?DescribeFastSnapshotRestoreSuccessSet $fast_snapshot_restores;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'fast_snapshot_restores' => ?DescribeFastSnapshotRestoreSuccessSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->fast_snapshot_restores = $s['fast_snapshot_restores'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetError {
  public string $error_code;
  public string $error_message;
  public ?LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public ?InstanceLifecycle $lifecycle;

  public function __construct(shape(
    ?'error_code' => string,
    ?'error_message' => string,
    ?'launch_template_and_overrides' => ?LaunchTemplateAndOverridesResponse,
    ?'lifecycle' => ?InstanceLifecycle,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_message = $s['error_message'] ?? '';
    $this->launch_template_and_overrides = $s['launch_template_and_overrides'] ?? null;
    $this->lifecycle = $s['lifecycle'] ?? '';
  }
}

class DescribeFleetHistoryRequest {
  public bool $dry_run;
  public ?FleetEventType $event_type;
  public ?FleetId $fleet_id;
  public int $max_results;
  public string $next_token;
  public ?DateTime $start_time;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'event_type' => ?FleetEventType,
    ?'fleet_id' => ?FleetId,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'start_time' => ?DateTime,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->event_type = $s['event_type'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeFleetHistoryResult {
  public ?FleetId $fleet_id;
  public ?HistoryRecordSet $history_records;
  public ?DateTime $last_evaluated_time;
  public string $next_token;
  public ?DateTime $start_time;

  public function __construct(shape(
    ?'fleet_id' => ?FleetId,
    ?'history_records' => ?HistoryRecordSet,
    ?'last_evaluated_time' => ?DateTime,
    ?'next_token' => string,
    ?'start_time' => ?DateTime,
  ) $s = shape()) {
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->history_records = $s['history_records'] ?? vec[];
    $this->last_evaluated_time = $s['last_evaluated_time'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeFleetInstancesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?FleetId $fleet_id;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'fleet_id' => ?FleetId,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetInstancesResult {
  public ?ActiveInstanceSet $active_instances;
  public ?FleetId $fleet_id;
  public string $next_token;

  public function __construct(shape(
    ?'active_instances' => ?ActiveInstanceSet,
    ?'fleet_id' => ?FleetId,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->active_instances = $s['active_instances'] ?? vec[];
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeFleetsErrorSet = vec<DescribeFleetError>;

class DescribeFleetsInstances {
  public ?InstanceIdsSet $instance_ids;
  public ?InstanceType $instance_type;
  public ?LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public ?InstanceLifecycle $lifecycle;
  public ?PlatformValues $platform;

  public function __construct(shape(
    ?'instance_ids' => ?InstanceIdsSet,
    ?'instance_type' => ?InstanceType,
    ?'launch_template_and_overrides' => ?LaunchTemplateAndOverridesResponse,
    ?'lifecycle' => ?InstanceLifecycle,
    ?'platform' => ?PlatformValues,
  ) $s = shape()) {
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->instance_type = $s['instance_type'] ?? '';
    $this->launch_template_and_overrides = $s['launch_template_and_overrides'] ?? null;
    $this->lifecycle = $s['lifecycle'] ?? '';
    $this->platform = $s['platform'] ?? '';
  }
}

type DescribeFleetsInstancesSet = vec<DescribeFleetsInstances>;

class DescribeFleetsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?FleetIdSet $fleet_ids;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'fleet_ids' => ?FleetIdSet,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->fleet_ids = $s['fleet_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFleetsResult {
  public ?FleetSet $fleets;
  public string $next_token;

  public function __construct(shape(
    ?'fleets' => ?FleetSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->fleets = $s['fleets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFlowLogsRequest {
  public bool $dry_run;
  public ?FilterList $filter;
  public ?FlowLogIdList $flow_log_ids;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filter' => ?FilterList,
    ?'flow_log_ids' => ?FlowLogIdList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filter = $s['filter'] ?? vec[];
    $this->flow_log_ids = $s['flow_log_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFlowLogsResult {
  public ?FlowLogSet $flow_logs;
  public string $next_token;

  public function __construct(shape(
    ?'flow_logs' => ?FlowLogSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->flow_logs = $s['flow_logs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeFpgaImageAttributeRequest {
  public ?FpgaImageAttributeName $attribute;
  public bool $dry_run;
  public ?FpgaImageId $fpga_image_id;

  public function __construct(shape(
    ?'attribute' => ?FpgaImageAttributeName,
    ?'dry_run' => bool,
    ?'fpga_image_id' => ?FpgaImageId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
  }
}

class DescribeFpgaImageAttributeResult {
  public ?FpgaImageAttribute $fpga_image_attribute;

  public function __construct(shape(
    ?'fpga_image_attribute' => ?FpgaImageAttribute,
  ) $s = shape()) {
    $this->fpga_image_attribute = $s['fpga_image_attribute'] ?? null;
  }
}

type DescribeFpgaImagesMaxResults = int;

class DescribeFpgaImagesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?FpgaImageIdList $fpga_image_ids;
  public ?DescribeFpgaImagesMaxResults $max_results;
  public ?NextToken $next_token;
  public ?OwnerStringList $owners;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'fpga_image_ids' => ?FpgaImageIdList,
    ?'max_results' => ?DescribeFpgaImagesMaxResults,
    ?'next_token' => ?NextToken,
    ?'owners' => ?OwnerStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->fpga_image_ids = $s['fpga_image_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->owners = $s['owners'] ?? vec[];
  }
}

class DescribeFpgaImagesResult {
  public ?FpgaImageList $fpga_images;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'fpga_images' => ?FpgaImageList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->fpga_images = $s['fpga_images'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeHostReservationOfferingsRequest {
  public ?FilterList $filter;
  public int $max_duration;
  public ?DescribeHostReservationsMaxResults $max_results;
  public int $min_duration;
  public string $next_token;
  public ?OfferingId $offering_id;

  public function __construct(shape(
    ?'filter' => ?FilterList,
    ?'max_duration' => int,
    ?'max_results' => ?DescribeHostReservationsMaxResults,
    ?'min_duration' => int,
    ?'next_token' => string,
    ?'offering_id' => ?OfferingId,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? vec[];
    $this->max_duration = $s['max_duration'] ?? 0;
    $this->max_results = $s['max_results'] ?? 0;
    $this->min_duration = $s['min_duration'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->offering_id = $s['offering_id'] ?? '';
  }
}

class DescribeHostReservationOfferingsResult {
  public string $next_token;
  public ?HostOfferingSet $offering_set;

  public function __construct(shape(
    ?'next_token' => string,
    ?'offering_set' => ?HostOfferingSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->offering_set = $s['offering_set'] ?? vec[];
  }
}

type DescribeHostReservationsMaxResults = int;

class DescribeHostReservationsRequest {
  public ?FilterList $filter;
  public ?HostReservationIdSet $host_reservation_id_set;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'filter' => ?FilterList,
    ?'host_reservation_id_set' => ?HostReservationIdSet,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? vec[];
    $this->host_reservation_id_set = $s['host_reservation_id_set'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeHostReservationsResult {
  public ?HostReservationSet $host_reservation_set;
  public string $next_token;

  public function __construct(shape(
    ?'host_reservation_set' => ?HostReservationSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->host_reservation_set = $s['host_reservation_set'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeHostsRequest {
  public ?FilterList $filter;
  public ?RequestHostIdList $host_ids;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'filter' => ?FilterList,
    ?'host_ids' => ?RequestHostIdList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? vec[];
    $this->host_ids = $s['host_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeHostsResult {
  public ?HostList $hosts;
  public string $next_token;

  public function __construct(shape(
    ?'hosts' => ?HostList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->hosts = $s['hosts'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeIamInstanceProfileAssociationsMaxResults = int;

class DescribeIamInstanceProfileAssociationsRequest {
  public ?AssociationIdList $association_ids;
  public ?FilterList $filters;
  public ?DescribeIamInstanceProfileAssociationsMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'association_ids' => ?AssociationIdList,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeIamInstanceProfileAssociationsMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->association_ids = $s['association_ids'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeIamInstanceProfileAssociationsResult {
  public ?IamInstanceProfileAssociationSet $iam_instance_profile_associations;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'iam_instance_profile_associations' => ?IamInstanceProfileAssociationSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->iam_instance_profile_associations = $s['iam_instance_profile_associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeIdFormatRequest {
  public string $resource;

  public function __construct(shape(
    ?'resource' => string,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
  }
}

class DescribeIdFormatResult {
  public ?IdFormatList $statuses;

  public function __construct(shape(
    ?'statuses' => ?IdFormatList,
  ) $s = shape()) {
    $this->statuses = $s['statuses'] ?? vec[];
  }
}

class DescribeIdentityIdFormatRequest {
  public string $principal_arn;
  public string $resource;

  public function __construct(shape(
    ?'principal_arn' => string,
    ?'resource' => string,
  ) $s = shape()) {
    $this->principal_arn = $s['principal_arn'] ?? '';
    $this->resource = $s['resource'] ?? '';
  }
}

class DescribeIdentityIdFormatResult {
  public ?IdFormatList $statuses;

  public function __construct(shape(
    ?'statuses' => ?IdFormatList,
  ) $s = shape()) {
    $this->statuses = $s['statuses'] ?? vec[];
  }
}

class DescribeImageAttributeRequest {
  public ?ImageAttributeName $attribute;
  public bool $dry_run;
  public ?ImageId $image_id;

  public function __construct(shape(
    ?'attribute' => ?ImageAttributeName,
    ?'dry_run' => bool,
    ?'image_id' => ?ImageId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->image_id = $s['image_id'] ?? '';
  }
}

class DescribeImagesRequest {
  public bool $dry_run;
  public ?ExecutableByStringList $executable_users;
  public ?FilterList $filters;
  public ?ImageIdStringList $image_ids;
  public ?OwnerStringList $owners;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'executable_users' => ?ExecutableByStringList,
    ?'filters' => ?FilterList,
    ?'image_ids' => ?ImageIdStringList,
    ?'owners' => ?OwnerStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->executable_users = $s['executable_users'] ?? vec[];
    $this->filters = $s['filters'] ?? vec[];
    $this->image_ids = $s['image_ids'] ?? vec[];
    $this->owners = $s['owners'] ?? vec[];
  }
}

class DescribeImagesResult {
  public ?ImageList $images;

  public function __construct(shape(
    ?'images' => ?ImageList,
  ) $s = shape()) {
    $this->images = $s['images'] ?? vec[];
  }
}

class DescribeImportImageTasksRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?ImportTaskIdList $import_task_ids;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'import_task_ids' => ?ImportTaskIdList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->import_task_ids = $s['import_task_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeImportImageTasksResult {
  public ?ImportImageTaskList $import_image_tasks;
  public string $next_token;

  public function __construct(shape(
    ?'import_image_tasks' => ?ImportImageTaskList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->import_image_tasks = $s['import_image_tasks'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeImportSnapshotTasksRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?ImportSnapshotTaskIdList $import_task_ids;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'import_task_ids' => ?ImportSnapshotTaskIdList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->import_task_ids = $s['import_task_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeImportSnapshotTasksResult {
  public ?ImportSnapshotTaskList $import_snapshot_tasks;
  public string $next_token;

  public function __construct(shape(
    ?'import_snapshot_tasks' => ?ImportSnapshotTaskList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->import_snapshot_tasks = $s['import_snapshot_tasks'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceAttributeRequest {
  public ?InstanceAttributeName $attribute;
  public bool $dry_run;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'attribute' => ?InstanceAttributeName,
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

type DescribeInstanceCreditSpecificationsMaxResults = int;

class DescribeInstanceCreditSpecificationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?InstanceIdStringList $instance_ids;
  public ?DescribeInstanceCreditSpecificationsMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'instance_ids' => ?InstanceIdStringList,
    ?'max_results' => ?DescribeInstanceCreditSpecificationsMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceCreditSpecificationsResult {
  public ?InstanceCreditSpecificationList $instance_credit_specifications;
  public string $next_token;

  public function __construct(shape(
    ?'instance_credit_specifications' => ?InstanceCreditSpecificationList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->instance_credit_specifications = $s['instance_credit_specifications'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceEventNotificationAttributesRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DescribeInstanceEventNotificationAttributesResult {
  public ?InstanceTagNotificationAttribute $instance_tag_attribute;

  public function __construct(shape(
    ?'instance_tag_attribute' => ?InstanceTagNotificationAttribute,
  ) $s = shape()) {
    $this->instance_tag_attribute = $s['instance_tag_attribute'] ?? null;
  }
}

class DescribeInstanceStatusRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public bool $include_all_instances;
  public ?InstanceIdStringList $instance_ids;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'include_all_instances' => bool,
    ?'instance_ids' => ?InstanceIdStringList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->include_all_instances = $s['include_all_instances'] ?? false;
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceStatusResult {
  public ?InstanceStatusList $instance_statuses;
  public string $next_token;

  public function __construct(shape(
    ?'instance_statuses' => ?InstanceStatusList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->instance_statuses = $s['instance_statuses'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceTypeOfferingsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocationType $location_type;
  public ?DITOMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'location_type' => ?LocationType,
    ?'max_results' => ?DITOMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->location_type = $s['location_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceTypeOfferingsResult {
  public ?InstanceTypeOfferingsList $instance_type_offerings;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_type_offerings' => ?InstanceTypeOfferingsList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_type_offerings = $s['instance_type_offerings'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceTypesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?RequestInstanceTypeList $instance_types;
  public ?DITMaxResults $max_results;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'instance_types' => ?RequestInstanceTypeList,
    ?'max_results' => ?DITMaxResults,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->instance_types = $s['instance_types'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstanceTypesResult {
  public ?InstanceTypeInfoList $instance_types;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'instance_types' => ?InstanceTypeInfoList,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->instance_types = $s['instance_types'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstancesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?InstanceIdStringList $instance_ids;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'instance_ids' => ?InstanceIdStringList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->instance_ids = $s['instance_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInstancesResult {
  public string $next_token;
  public ?ReservationList $reservations;

  public function __construct(shape(
    ?'next_token' => string,
    ?'reservations' => ?ReservationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->reservations = $s['reservations'] ?? vec[];
  }
}

type DescribeInternetGatewaysMaxResults = int;

class DescribeInternetGatewaysRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?InternetGatewayIdList $internet_gateway_ids;
  public ?DescribeInternetGatewaysMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'internet_gateway_ids' => ?InternetGatewayIdList,
    ?'max_results' => ?DescribeInternetGatewaysMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->internet_gateway_ids = $s['internet_gateway_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeInternetGatewaysResult {
  public ?InternetGatewayList $internet_gateways;
  public string $next_token;

  public function __construct(shape(
    ?'internet_gateways' => ?InternetGatewayList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->internet_gateways = $s['internet_gateways'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeIpv6PoolsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?Ipv6PoolMaxResults $max_results;
  public ?NextToken $next_token;
  public ?Ipv6PoolIdList $pool_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?Ipv6PoolMaxResults,
    ?'next_token' => ?NextToken,
    ?'pool_ids' => ?Ipv6PoolIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pool_ids = $s['pool_ids'] ?? vec[];
  }
}

class DescribeIpv6PoolsResult {
  public ?Ipv6PoolSet $ipv_6_pools;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'ipv_6_pools' => ?Ipv6PoolSet,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->ipv_6_pools = $s['ipv_6_pools'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeKeyPairsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?KeyNameStringList $key_names;
  public ?KeyPairIdStringList $key_pair_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'key_names' => ?KeyNameStringList,
    ?'key_pair_ids' => ?KeyPairIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->key_names = $s['key_names'] ?? vec[];
    $this->key_pair_ids = $s['key_pair_ids'] ?? vec[];
  }
}

class DescribeKeyPairsResult {
  public ?KeyPairList $key_pairs;

  public function __construct(shape(
    ?'key_pairs' => ?KeyPairList,
  ) $s = shape()) {
    $this->key_pairs = $s['key_pairs'] ?? vec[];
  }
}

class DescribeLaunchTemplateVersionsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LaunchTemplateId $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public int $max_results;
  public string $max_version;
  public string $min_version;
  public string $next_token;
  public ?VersionStringList $versions;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'max_results' => int,
    ?'max_version' => string,
    ?'min_version' => string,
    ?'next_token' => string,
    ?'versions' => ?VersionStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->max_version = $s['max_version'] ?? '';
    $this->min_version = $s['min_version'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->versions = $s['versions'] ?? vec[];
  }
}

class DescribeLaunchTemplateVersionsResult {
  public ?LaunchTemplateVersionSet $launch_template_versions;
  public string $next_token;

  public function __construct(shape(
    ?'launch_template_versions' => ?LaunchTemplateVersionSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->launch_template_versions = $s['launch_template_versions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeLaunchTemplatesMaxResults = int;

class DescribeLaunchTemplatesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LaunchTemplateIdStringList $launch_template_ids;
  public ?LaunchTemplateNameStringList $launch_template_names;
  public ?DescribeLaunchTemplatesMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'launch_template_ids' => ?LaunchTemplateIdStringList,
    ?'launch_template_names' => ?LaunchTemplateNameStringList,
    ?'max_results' => ?DescribeLaunchTemplatesMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->launch_template_ids = $s['launch_template_ids'] ?? vec[];
    $this->launch_template_names = $s['launch_template_names'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLaunchTemplatesResult {
  public ?LaunchTemplateSet $launch_templates;
  public string $next_token;

  public function __construct(shape(
    ?'launch_templates' => ?LaunchTemplateSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->launch_templates = $s['launch_templates'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocalGatewayRouteTableVirtualInterfaceGroupAssociationIdSet $local_gateway_route_table_virtual_interface_group_association_ids;
  public ?LocalGatewayMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'local_gateway_route_table_virtual_interface_group_association_ids' => ?LocalGatewayRouteTableVirtualInterfaceGroupAssociationIdSet,
    ?'max_results' => ?LocalGatewayMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->local_gateway_route_table_virtual_interface_group_association_ids = $s['local_gateway_route_table_virtual_interface_group_association_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResult {
  public ?LocalGatewayRouteTableVirtualInterfaceGroupAssociationSet $local_gateway_route_table_virtual_interface_group_associations;
  public string $next_token;

  public function __construct(shape(
    ?'local_gateway_route_table_virtual_interface_group_associations' => ?LocalGatewayRouteTableVirtualInterfaceGroupAssociationSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->local_gateway_route_table_virtual_interface_group_associations = $s['local_gateway_route_table_virtual_interface_group_associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayRouteTableVpcAssociationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocalGatewayRouteTableVpcAssociationIdSet $local_gateway_route_table_vpc_association_ids;
  public ?LocalGatewayMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'local_gateway_route_table_vpc_association_ids' => ?LocalGatewayRouteTableVpcAssociationIdSet,
    ?'max_results' => ?LocalGatewayMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->local_gateway_route_table_vpc_association_ids = $s['local_gateway_route_table_vpc_association_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayRouteTableVpcAssociationsResult {
  public ?LocalGatewayRouteTableVpcAssociationSet $local_gateway_route_table_vpc_associations;
  public string $next_token;

  public function __construct(shape(
    ?'local_gateway_route_table_vpc_associations' => ?LocalGatewayRouteTableVpcAssociationSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->local_gateway_route_table_vpc_associations = $s['local_gateway_route_table_vpc_associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayRouteTablesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocalGatewayRouteTableIdSet $local_gateway_route_table_ids;
  public ?LocalGatewayMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'local_gateway_route_table_ids' => ?LocalGatewayRouteTableIdSet,
    ?'max_results' => ?LocalGatewayMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->local_gateway_route_table_ids = $s['local_gateway_route_table_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayRouteTablesResult {
  public ?LocalGatewayRouteTableSet $local_gateway_route_tables;
  public string $next_token;

  public function __construct(shape(
    ?'local_gateway_route_tables' => ?LocalGatewayRouteTableSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->local_gateway_route_tables = $s['local_gateway_route_tables'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayVirtualInterfaceGroupsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocalGatewayVirtualInterfaceGroupIdSet $local_gateway_virtual_interface_group_ids;
  public ?LocalGatewayMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'local_gateway_virtual_interface_group_ids' => ?LocalGatewayVirtualInterfaceGroupIdSet,
    ?'max_results' => ?LocalGatewayMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->local_gateway_virtual_interface_group_ids = $s['local_gateway_virtual_interface_group_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayVirtualInterfaceGroupsResult {
  public ?LocalGatewayVirtualInterfaceGroupSet $local_gateway_virtual_interface_groups;
  public string $next_token;

  public function __construct(shape(
    ?'local_gateway_virtual_interface_groups' => ?LocalGatewayVirtualInterfaceGroupSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->local_gateway_virtual_interface_groups = $s['local_gateway_virtual_interface_groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayVirtualInterfacesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocalGatewayVirtualInterfaceIdSet $local_gateway_virtual_interface_ids;
  public ?LocalGatewayMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'local_gateway_virtual_interface_ids' => ?LocalGatewayVirtualInterfaceIdSet,
    ?'max_results' => ?LocalGatewayMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->local_gateway_virtual_interface_ids = $s['local_gateway_virtual_interface_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewayVirtualInterfacesResult {
  public ?LocalGatewayVirtualInterfaceSet $local_gateway_virtual_interfaces;
  public string $next_token;

  public function __construct(shape(
    ?'local_gateway_virtual_interfaces' => ?LocalGatewayVirtualInterfaceSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->local_gateway_virtual_interfaces = $s['local_gateway_virtual_interfaces'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewaysRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocalGatewayIdSet $local_gateway_ids;
  public ?LocalGatewayMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'local_gateway_ids' => ?LocalGatewayIdSet,
    ?'max_results' => ?LocalGatewayMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->local_gateway_ids = $s['local_gateway_ids'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeLocalGatewaysResult {
  public ?LocalGatewaySet $local_gateways;
  public string $next_token;

  public function __construct(shape(
    ?'local_gateways' => ?LocalGatewaySet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->local_gateways = $s['local_gateways'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeMovingAddressesMaxResults = int;

class DescribeMovingAddressesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeMovingAddressesMaxResults $max_results;
  public string $next_token;
  public ?ValueStringList $public_ips;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeMovingAddressesMaxResults,
    ?'next_token' => string,
    ?'public_ips' => ?ValueStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->public_ips = $s['public_ips'] ?? vec[];
  }
}

class DescribeMovingAddressesResult {
  public ?MovingAddressStatusSet $moving_address_statuses;
  public string $next_token;

  public function __construct(shape(
    ?'moving_address_statuses' => ?MovingAddressStatusSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->moving_address_statuses = $s['moving_address_statuses'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeNatGatewaysMaxResults = int;

class DescribeNatGatewaysRequest {
  public bool $dry_run;
  public ?FilterList $filter;
  public ?DescribeNatGatewaysMaxResults $max_results;
  public ?NatGatewayIdStringList $nat_gateway_ids;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filter' => ?FilterList,
    ?'max_results' => ?DescribeNatGatewaysMaxResults,
    ?'nat_gateway_ids' => ?NatGatewayIdStringList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filter = $s['filter'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->nat_gateway_ids = $s['nat_gateway_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeNatGatewaysResult {
  public ?NatGatewayList $nat_gateways;
  public string $next_token;

  public function __construct(shape(
    ?'nat_gateways' => ?NatGatewayList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->nat_gateways = $s['nat_gateways'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeNetworkAclsMaxResults = int;

class DescribeNetworkAclsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeNetworkAclsMaxResults $max_results;
  public ?NetworkAclIdStringList $network_acl_ids;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeNetworkAclsMaxResults,
    ?'network_acl_ids' => ?NetworkAclIdStringList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->network_acl_ids = $s['network_acl_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeNetworkAclsResult {
  public ?NetworkAclList $network_acls;
  public string $next_token;

  public function __construct(shape(
    ?'network_acls' => ?NetworkAclList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->network_acls = $s['network_acls'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeNetworkInterfaceAttributeRequest {
  public ?NetworkInterfaceAttribute $attribute;
  public bool $dry_run;
  public ?NetworkInterfaceId $network_interface_id;

  public function __construct(shape(
    ?'attribute' => ?NetworkInterfaceAttribute,
    ?'dry_run' => bool,
    ?'network_interface_id' => ?NetworkInterfaceId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
  }
}

class DescribeNetworkInterfaceAttributeResult {
  public ?NetworkInterfaceAttachment $attachment;
  public ?AttributeValue $description;
  public ?GroupIdentifierList $groups;
  public string $network_interface_id;
  public ?AttributeBooleanValue $source_dest_check;

  public function __construct(shape(
    ?'attachment' => ?NetworkInterfaceAttachment,
    ?'description' => ?AttributeValue,
    ?'groups' => ?GroupIdentifierList,
    ?'network_interface_id' => string,
    ?'source_dest_check' => ?AttributeBooleanValue,
  ) $s = shape()) {
    $this->attachment = $s['attachment'] ?? null;
    $this->description = $s['description'] ?? null;
    $this->groups = $s['groups'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->source_dest_check = $s['source_dest_check'] ?? null;
  }
}

type DescribeNetworkInterfacePermissionsMaxResults = int;

class DescribeNetworkInterfacePermissionsRequest {
  public ?FilterList $filters;
  public ?DescribeNetworkInterfacePermissionsMaxResults $max_results;
  public ?NetworkInterfacePermissionIdList $network_interface_permission_ids;
  public string $next_token;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeNetworkInterfacePermissionsMaxResults,
    ?'network_interface_permission_ids' => ?NetworkInterfacePermissionIdList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->network_interface_permission_ids = $s['network_interface_permission_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeNetworkInterfacePermissionsResult {
  public ?NetworkInterfacePermissionList $network_interface_permissions;
  public string $next_token;

  public function __construct(shape(
    ?'network_interface_permissions' => ?NetworkInterfacePermissionList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->network_interface_permissions = $s['network_interface_permissions'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type DescribeNetworkInterfacesMaxResults = int;

class DescribeNetworkInterfacesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeNetworkInterfacesMaxResults $max_results;
  public ?NetworkInterfaceIdList $network_interface_ids;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeNetworkInterfacesMaxResults,
    ?'network_interface_ids' => ?NetworkInterfaceIdList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->network_interface_ids = $s['network_interface_ids'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeNetworkInterfacesResult {
  public ?NetworkInterfaceList $network_interfaces;
  public string $next_token;

  public function __construct(shape(
    ?'network_interfaces' => ?NetworkInterfaceList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribePlacementGroupsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?PlacementGroupIdStringList $group_ids;
  public ?PlacementGroupStringList $group_names;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'group_ids' => ?PlacementGroupIdStringList,
    ?'group_names' => ?PlacementGroupStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->group_ids = $s['group_ids'] ?? vec[];
    $this->group_names = $s['group_names'] ?? vec[];
  }
}

class DescribePlacementGroupsResult {
  public ?PlacementGroupList $placement_groups;

  public function __construct(shape(
    ?'placement_groups' => ?PlacementGroupList,
  ) $s = shape()) {
    $this->placement_groups = $s['placement_groups'] ?? vec[];
  }
}

class DescribePrefixListsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?PrefixListResourceIdStringList $prefix_list_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'prefix_list_ids' => ?PrefixListResourceIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->prefix_list_ids = $s['prefix_list_ids'] ?? vec[];
  }
}

class DescribePrefixListsResult {
  public string $next_token;
  public ?PrefixListSet $prefix_lists;

  public function __construct(shape(
    ?'next_token' => string,
    ?'prefix_lists' => ?PrefixListSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->prefix_lists = $s['prefix_lists'] ?? vec[];
  }
}

type DescribePrincipalIdFormatMaxResults = int;

class DescribePrincipalIdFormatRequest {
  public bool $dry_run;
  public ?DescribePrincipalIdFormatMaxResults $max_results;
  public string $next_token;
  public ?ResourceList $resources;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'max_results' => ?DescribePrincipalIdFormatMaxResults,
    ?'next_token' => string,
    ?'resources' => ?ResourceList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->resources = $s['resources'] ?? vec[];
  }
}

class DescribePrincipalIdFormatResult {
  public string $next_token;
  public ?PrincipalIdFormatList $principals;

  public function __construct(shape(
    ?'next_token' => string,
    ?'principals' => ?PrincipalIdFormatList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->principals = $s['principals'] ?? vec[];
  }
}

class DescribePublicIpv4PoolsRequest {
  public ?FilterList $filters;
  public ?PoolMaxResults $max_results;
  public ?NextToken $next_token;
  public ?PublicIpv4PoolIdStringList $pool_ids;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'max_results' => ?PoolMaxResults,
    ?'next_token' => ?NextToken,
    ?'pool_ids' => ?PublicIpv4PoolIdStringList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pool_ids = $s['pool_ids'] ?? vec[];
  }
}

class DescribePublicIpv4PoolsResult {
  public string $next_token;
  public ?PublicIpv4PoolSet $public_ipv_4_pools;

  public function __construct(shape(
    ?'next_token' => string,
    ?'public_ipv_4_pools' => ?PublicIpv4PoolSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->public_ipv_4_pools = $s['public_ipv_4_pools'] ?? vec[];
  }
}

class DescribeRegionsRequest {
  public bool $all_regions;
  public bool $dry_run;
  public ?FilterList $filters;
  public ?RegionNameStringList $region_names;

  public function __construct(shape(
    ?'all_regions' => bool,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'region_names' => ?RegionNameStringList,
  ) $s = shape()) {
    $this->all_regions = $s['all_regions'] ?? false;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->region_names = $s['region_names'] ?? vec[];
  }
}

class DescribeRegionsResult {
  public ?RegionList $regions;

  public function __construct(shape(
    ?'regions' => ?RegionList,
  ) $s = shape()) {
    $this->regions = $s['regions'] ?? vec[];
  }
}

class DescribeReservedInstancesListingsRequest {
  public ?FilterList $filters;
  public ?ReservationId $reserved_instances_id;
  public ?ReservedInstancesListingId $reserved_instances_listing_id;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'reserved_instances_id' => ?ReservationId,
    ?'reserved_instances_listing_id' => ?ReservedInstancesListingId,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
    $this->reserved_instances_listing_id = $s['reserved_instances_listing_id'] ?? '';
  }
}

class DescribeReservedInstancesListingsResult {
  public ?ReservedInstancesListingList $reserved_instances_listings;

  public function __construct(shape(
    ?'reserved_instances_listings' => ?ReservedInstancesListingList,
  ) $s = shape()) {
    $this->reserved_instances_listings = $s['reserved_instances_listings'] ?? vec[];
  }
}

class DescribeReservedInstancesModificationsRequest {
  public ?FilterList $filters;
  public string $next_token;
  public ?ReservedInstancesModificationIdStringList $reserved_instances_modification_ids;

  public function __construct(shape(
    ?'filters' => ?FilterList,
    ?'next_token' => string,
    ?'reserved_instances_modification_ids' => ?ReservedInstancesModificationIdStringList,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->reserved_instances_modification_ids = $s['reserved_instances_modification_ids'] ?? vec[];
  }
}

class DescribeReservedInstancesModificationsResult {
  public string $next_token;
  public ?ReservedInstancesModificationList $reserved_instances_modifications;

  public function __construct(shape(
    ?'next_token' => string,
    ?'reserved_instances_modifications' => ?ReservedInstancesModificationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->reserved_instances_modifications = $s['reserved_instances_modifications'] ?? vec[];
  }
}

class DescribeReservedInstancesOfferingsRequest {
  public string $availability_zone;
  public bool $dry_run;
  public ?FilterList $filters;
  public bool $include_marketplace;
  public ?Tenancy $instance_tenancy;
  public ?InstanceType $instance_type;
  public ?Long $max_duration;
  public int $max_instance_count;
  public int $max_results;
  public ?Long $min_duration;
  public string $next_token;
  public ?OfferingClassType $offering_class;
  public ?OfferingTypeValues $offering_type;
  public ?RIProductDescription $product_description;
  public ?ReservedInstancesOfferingIdStringList $reserved_instances_offering_ids;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'include_marketplace' => bool,
    ?'instance_tenancy' => ?Tenancy,
    ?'instance_type' => ?InstanceType,
    ?'max_duration' => ?Long,
    ?'max_instance_count' => int,
    ?'max_results' => int,
    ?'min_duration' => ?Long,
    ?'next_token' => string,
    ?'offering_class' => ?OfferingClassType,
    ?'offering_type' => ?OfferingTypeValues,
    ?'product_description' => ?RIProductDescription,
    ?'reserved_instances_offering_ids' => ?ReservedInstancesOfferingIdStringList,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->include_marketplace = $s['include_marketplace'] ?? false;
    $this->instance_tenancy = $s['instance_tenancy'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->max_duration = $s['max_duration'] ?? 0;
    $this->max_instance_count = $s['max_instance_count'] ?? 0;
    $this->max_results = $s['max_results'] ?? 0;
    $this->min_duration = $s['min_duration'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->offering_class = $s['offering_class'] ?? '';
    $this->offering_type = $s['offering_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->reserved_instances_offering_ids = $s['reserved_instances_offering_ids'] ?? vec[];
  }
}

class DescribeReservedInstancesOfferingsResult {
  public string $next_token;
  public ?ReservedInstancesOfferingList $reserved_instances_offerings;

  public function __construct(shape(
    ?'next_token' => string,
    ?'reserved_instances_offerings' => ?ReservedInstancesOfferingList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->reserved_instances_offerings = $s['reserved_instances_offerings'] ?? vec[];
  }
}

class DescribeReservedInstancesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?OfferingClassType $offering_class;
  public ?OfferingTypeValues $offering_type;
  public ?ReservedInstancesIdStringList $reserved_instances_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'offering_class' => ?OfferingClassType,
    ?'offering_type' => ?OfferingTypeValues,
    ?'reserved_instances_ids' => ?ReservedInstancesIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->offering_class = $s['offering_class'] ?? '';
    $this->offering_type = $s['offering_type'] ?? '';
    $this->reserved_instances_ids = $s['reserved_instances_ids'] ?? vec[];
  }
}

class DescribeReservedInstancesResult {
  public ?ReservedInstancesList $reserved_instances;

  public function __construct(shape(
    ?'reserved_instances' => ?ReservedInstancesList,
  ) $s = shape()) {
    $this->reserved_instances = $s['reserved_instances'] ?? vec[];
  }
}

type DescribeRouteTablesMaxResults = int;

class DescribeRouteTablesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeRouteTablesMaxResults $max_results;
  public string $next_token;
  public ?RouteTableIdStringList $route_table_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeRouteTablesMaxResults,
    ?'next_token' => string,
    ?'route_table_ids' => ?RouteTableIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->route_table_ids = $s['route_table_ids'] ?? vec[];
  }
}

class DescribeRouteTablesResult {
  public string $next_token;
  public ?RouteTableList $route_tables;

  public function __construct(shape(
    ?'next_token' => string,
    ?'route_tables' => ?RouteTableList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->route_tables = $s['route_tables'] ?? vec[];
  }
}

type DescribeScheduledInstanceAvailabilityMaxResults = int;

class DescribeScheduledInstanceAvailabilityRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?SlotDateTimeRangeRequest $first_slot_start_time_range;
  public ?DescribeScheduledInstanceAvailabilityMaxResults $max_results;
  public int $max_slot_duration_in_hours;
  public int $min_slot_duration_in_hours;
  public string $next_token;
  public ?ScheduledInstanceRecurrenceRequest $recurrence;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'first_slot_start_time_range' => ?SlotDateTimeRangeRequest,
    ?'max_results' => ?DescribeScheduledInstanceAvailabilityMaxResults,
    ?'max_slot_duration_in_hours' => int,
    ?'min_slot_duration_in_hours' => int,
    ?'next_token' => string,
    ?'recurrence' => ?ScheduledInstanceRecurrenceRequest,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->first_slot_start_time_range = $s['first_slot_start_time_range'] ?? null;
    $this->max_results = $s['max_results'] ?? 0;
    $this->max_slot_duration_in_hours = $s['max_slot_duration_in_hours'] ?? 0;
    $this->min_slot_duration_in_hours = $s['min_slot_duration_in_hours'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->recurrence = $s['recurrence'] ?? null;
  }
}

class DescribeScheduledInstanceAvailabilityResult {
  public string $next_token;
  public ?ScheduledInstanceAvailabilitySet $scheduled_instance_availability_set;

  public function __construct(shape(
    ?'next_token' => string,
    ?'scheduled_instance_availability_set' => ?ScheduledInstanceAvailabilitySet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->scheduled_instance_availability_set = $s['scheduled_instance_availability_set'] ?? vec[];
  }
}

class DescribeScheduledInstancesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?ScheduledInstanceIdRequestSet $scheduled_instance_ids;
  public ?SlotStartTimeRangeRequest $slot_start_time_range;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'scheduled_instance_ids' => ?ScheduledInstanceIdRequestSet,
    ?'slot_start_time_range' => ?SlotStartTimeRangeRequest,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->scheduled_instance_ids = $s['scheduled_instance_ids'] ?? vec[];
    $this->slot_start_time_range = $s['slot_start_time_range'] ?? null;
  }
}

class DescribeScheduledInstancesResult {
  public string $next_token;
  public ?ScheduledInstanceSet $scheduled_instance_set;

  public function __construct(shape(
    ?'next_token' => string,
    ?'scheduled_instance_set' => ?ScheduledInstanceSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->scheduled_instance_set = $s['scheduled_instance_set'] ?? vec[];
  }
}

class DescribeSecurityGroupReferencesRequest {
  public bool $dry_run;
  public ?GroupIds $group_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_id' => ?GroupIds,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_id = $s['group_id'] ?? vec[];
  }
}

class DescribeSecurityGroupReferencesResult {
  public ?SecurityGroupReferences $security_group_reference_set;

  public function __construct(shape(
    ?'security_group_reference_set' => ?SecurityGroupReferences,
  ) $s = shape()) {
    $this->security_group_reference_set = $s['security_group_reference_set'] ?? vec[];
  }
}

type DescribeSecurityGroupsMaxResults = int;

class DescribeSecurityGroupsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?GroupIdStringList $group_ids;
  public ?GroupNameStringList $group_names;
  public ?DescribeSecurityGroupsMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'group_ids' => ?GroupIdStringList,
    ?'group_names' => ?GroupNameStringList,
    ?'max_results' => ?DescribeSecurityGroupsMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->group_ids = $s['group_ids'] ?? vec[];
    $this->group_names = $s['group_names'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeSecurityGroupsResult {
  public string $next_token;
  public ?SecurityGroupList $security_groups;

  public function __construct(shape(
    ?'next_token' => string,
    ?'security_groups' => ?SecurityGroupList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
  }
}

class DescribeSnapshotAttributeRequest {
  public ?SnapshotAttributeName $attribute;
  public bool $dry_run;
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'attribute' => ?SnapshotAttributeName,
    ?'dry_run' => bool,
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class DescribeSnapshotAttributeResult {
  public ?CreateVolumePermissionList $create_volume_permissions;
  public ?ProductCodeList $product_codes;
  public string $snapshot_id;

  public function __construct(shape(
    ?'create_volume_permissions' => ?CreateVolumePermissionList,
    ?'product_codes' => ?ProductCodeList,
    ?'snapshot_id' => string,
  ) $s = shape()) {
    $this->create_volume_permissions = $s['create_volume_permissions'] ?? vec[];
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

class DescribeSnapshotsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?OwnerStringList $owner_ids;
  public ?RestorableByStringList $restorable_by_user_ids;
  public ?SnapshotIdStringList $snapshot_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'owner_ids' => ?OwnerStringList,
    ?'restorable_by_user_ids' => ?RestorableByStringList,
    ?'snapshot_ids' => ?SnapshotIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->owner_ids = $s['owner_ids'] ?? vec[];
    $this->restorable_by_user_ids = $s['restorable_by_user_ids'] ?? vec[];
    $this->snapshot_ids = $s['snapshot_ids'] ?? vec[];
  }
}

class DescribeSnapshotsResult {
  public string $next_token;
  public ?SnapshotList $snapshots;

  public function __construct(shape(
    ?'next_token' => string,
    ?'snapshots' => ?SnapshotList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->snapshots = $s['snapshots'] ?? vec[];
  }
}

class DescribeSpotDatafeedSubscriptionRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DescribeSpotDatafeedSubscriptionResult {
  public ?SpotDatafeedSubscription $spot_datafeed_subscription;

  public function __construct(shape(
    ?'spot_datafeed_subscription' => ?SpotDatafeedSubscription,
  ) $s = shape()) {
    $this->spot_datafeed_subscription = $s['spot_datafeed_subscription'] ?? null;
  }
}

type DescribeSpotFleetInstancesMaxResults = int;

class DescribeSpotFleetInstancesRequest {
  public bool $dry_run;
  public ?DescribeSpotFleetInstancesMaxResults $max_results;
  public string $next_token;
  public ?SpotFleetRequestId $spot_fleet_request_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'max_results' => ?DescribeSpotFleetInstancesMaxResults,
    ?'next_token' => string,
    ?'spot_fleet_request_id' => ?SpotFleetRequestId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
  }
}

class DescribeSpotFleetInstancesResponse {
  public ?ActiveInstanceSet $active_instances;
  public string $next_token;
  public string $spot_fleet_request_id;

  public function __construct(shape(
    ?'active_instances' => ?ActiveInstanceSet,
    ?'next_token' => string,
    ?'spot_fleet_request_id' => string,
  ) $s = shape()) {
    $this->active_instances = $s['active_instances'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
  }
}

type DescribeSpotFleetRequestHistoryMaxResults = int;

class DescribeSpotFleetRequestHistoryRequest {
  public bool $dry_run;
  public ?EventType $event_type;
  public ?DescribeSpotFleetRequestHistoryMaxResults $max_results;
  public string $next_token;
  public ?SpotFleetRequestId $spot_fleet_request_id;
  public ?DateTime $start_time;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'event_type' => ?EventType,
    ?'max_results' => ?DescribeSpotFleetRequestHistoryMaxResults,
    ?'next_token' => string,
    ?'spot_fleet_request_id' => ?SpotFleetRequestId,
    ?'start_time' => ?DateTime,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->event_type = $s['event_type'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeSpotFleetRequestHistoryResponse {
  public ?HistoryRecords $history_records;
  public ?DateTime $last_evaluated_time;
  public string $next_token;
  public string $spot_fleet_request_id;
  public ?DateTime $start_time;

  public function __construct(shape(
    ?'history_records' => ?HistoryRecords,
    ?'last_evaluated_time' => ?DateTime,
    ?'next_token' => string,
    ?'spot_fleet_request_id' => string,
    ?'start_time' => ?DateTime,
  ) $s = shape()) {
    $this->history_records = $s['history_records'] ?? vec[];
    $this->last_evaluated_time = $s['last_evaluated_time'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeSpotFleetRequestsRequest {
  public bool $dry_run;
  public int $max_results;
  public string $next_token;
  public ?SpotFleetRequestIdList $spot_fleet_request_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'spot_fleet_request_ids' => ?SpotFleetRequestIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_fleet_request_ids = $s['spot_fleet_request_ids'] ?? vec[];
  }
}

class DescribeSpotFleetRequestsResponse {
  public string $next_token;
  public ?SpotFleetRequestConfigSet $spot_fleet_request_configs;

  public function __construct(shape(
    ?'next_token' => string,
    ?'spot_fleet_request_configs' => ?SpotFleetRequestConfigSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_fleet_request_configs = $s['spot_fleet_request_configs'] ?? vec[];
  }
}

class DescribeSpotInstanceRequestsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?SpotInstanceRequestIdList $spot_instance_request_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'spot_instance_request_ids' => ?SpotInstanceRequestIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_instance_request_ids = $s['spot_instance_request_ids'] ?? vec[];
  }
}

class DescribeSpotInstanceRequestsResult {
  public string $next_token;
  public ?SpotInstanceRequestList $spot_instance_requests;

  public function __construct(shape(
    ?'next_token' => string,
    ?'spot_instance_requests' => ?SpotInstanceRequestList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_instance_requests = $s['spot_instance_requests'] ?? vec[];
  }
}

class DescribeSpotPriceHistoryRequest {
  public string $availability_zone;
  public bool $dry_run;
  public ?DateTime $end_time;
  public ?FilterList $filters;
  public ?InstanceTypeList $instance_types;
  public int $max_results;
  public string $next_token;
  public ?ProductDescriptionList $product_descriptions;
  public ?DateTime $start_time;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'dry_run' => bool,
    ?'end_time' => ?DateTime,
    ?'filters' => ?FilterList,
    ?'instance_types' => ?InstanceTypeList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'product_descriptions' => ?ProductDescriptionList,
    ?'start_time' => ?DateTime,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->end_time = $s['end_time'] ?? 0;
    $this->filters = $s['filters'] ?? vec[];
    $this->instance_types = $s['instance_types'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->product_descriptions = $s['product_descriptions'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class DescribeSpotPriceHistoryResult {
  public string $next_token;
  public ?SpotPriceHistoryList $spot_price_history;

  public function __construct(shape(
    ?'next_token' => string,
    ?'spot_price_history' => ?SpotPriceHistoryList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->spot_price_history = $s['spot_price_history'] ?? vec[];
  }
}

type DescribeStaleSecurityGroupsMaxResults = int;

type DescribeStaleSecurityGroupsNextToken = string;

class DescribeStaleSecurityGroupsRequest {
  public bool $dry_run;
  public ?DescribeStaleSecurityGroupsMaxResults $max_results;
  public ?DescribeStaleSecurityGroupsNextToken $next_token;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'max_results' => ?DescribeStaleSecurityGroupsMaxResults,
    ?'next_token' => ?DescribeStaleSecurityGroupsNextToken,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DescribeStaleSecurityGroupsResult {
  public string $next_token;
  public ?StaleSecurityGroupSet $stale_security_group_set;

  public function __construct(shape(
    ?'next_token' => string,
    ?'stale_security_group_set' => ?StaleSecurityGroupSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->stale_security_group_set = $s['stale_security_group_set'] ?? vec[];
  }
}

type DescribeSubnetsMaxResults = int;

class DescribeSubnetsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeSubnetsMaxResults $max_results;
  public string $next_token;
  public ?SubnetIdStringList $subnet_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeSubnetsMaxResults,
    ?'next_token' => string,
    ?'subnet_ids' => ?SubnetIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
  }
}

class DescribeSubnetsResult {
  public string $next_token;
  public ?SubnetList $subnets;

  public function __construct(shape(
    ?'next_token' => string,
    ?'subnets' => ?SubnetList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
  }
}

class DescribeTagsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeTagsResult {
  public string $next_token;
  public ?TagDescriptionList $tags;

  public function __construct(shape(
    ?'next_token' => string,
    ?'tags' => ?TagDescriptionList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DescribeTrafficMirrorFiltersRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TrafficMirroringMaxResults $max_results;
  public ?NextToken $next_token;
  public ?TrafficMirrorFilterIdList $traffic_mirror_filter_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TrafficMirroringMaxResults,
    ?'next_token' => ?NextToken,
    ?'traffic_mirror_filter_ids' => ?TrafficMirrorFilterIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->traffic_mirror_filter_ids = $s['traffic_mirror_filter_ids'] ?? vec[];
  }
}

class DescribeTrafficMirrorFiltersResult {
  public string $next_token;
  public ?TrafficMirrorFilterSet $traffic_mirror_filters;

  public function __construct(shape(
    ?'next_token' => string,
    ?'traffic_mirror_filters' => ?TrafficMirrorFilterSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->traffic_mirror_filters = $s['traffic_mirror_filters'] ?? vec[];
  }
}

class DescribeTrafficMirrorSessionsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TrafficMirroringMaxResults $max_results;
  public ?NextToken $next_token;
  public ?TrafficMirrorSessionIdList $traffic_mirror_session_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TrafficMirroringMaxResults,
    ?'next_token' => ?NextToken,
    ?'traffic_mirror_session_ids' => ?TrafficMirrorSessionIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->traffic_mirror_session_ids = $s['traffic_mirror_session_ids'] ?? vec[];
  }
}

class DescribeTrafficMirrorSessionsResult {
  public string $next_token;
  public ?TrafficMirrorSessionSet $traffic_mirror_sessions;

  public function __construct(shape(
    ?'next_token' => string,
    ?'traffic_mirror_sessions' => ?TrafficMirrorSessionSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->traffic_mirror_sessions = $s['traffic_mirror_sessions'] ?? vec[];
  }
}

class DescribeTrafficMirrorTargetsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TrafficMirroringMaxResults $max_results;
  public ?NextToken $next_token;
  public ?TrafficMirrorTargetIdList $traffic_mirror_target_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TrafficMirroringMaxResults,
    ?'next_token' => ?NextToken,
    ?'traffic_mirror_target_ids' => ?TrafficMirrorTargetIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->traffic_mirror_target_ids = $s['traffic_mirror_target_ids'] ?? vec[];
  }
}

class DescribeTrafficMirrorTargetsResult {
  public string $next_token;
  public ?TrafficMirrorTargetSet $traffic_mirror_targets;

  public function __construct(shape(
    ?'next_token' => string,
    ?'traffic_mirror_targets' => ?TrafficMirrorTargetSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->traffic_mirror_targets = $s['traffic_mirror_targets'] ?? vec[];
  }
}

class DescribeTransitGatewayAttachmentsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_attachment_ids' => ?TransitGatewayAttachmentIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_attachment_ids = $s['transit_gateway_attachment_ids'] ?? vec[];
  }
}

class DescribeTransitGatewayAttachmentsResult {
  public string $next_token;
  public ?TransitGatewayAttachmentList $transit_gateway_attachments;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateway_attachments' => ?TransitGatewayAttachmentList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_attachments = $s['transit_gateway_attachments'] ?? vec[];
  }
}

class DescribeTransitGatewayMulticastDomainsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayMulticastDomainIdStringList $transit_gateway_multicast_domain_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_multicast_domain_ids' => ?TransitGatewayMulticastDomainIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_multicast_domain_ids = $s['transit_gateway_multicast_domain_ids'] ?? vec[];
  }
}

class DescribeTransitGatewayMulticastDomainsResult {
  public string $next_token;
  public ?TransitGatewayMulticastDomainList $transit_gateway_multicast_domains;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateway_multicast_domains' => ?TransitGatewayMulticastDomainList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_multicast_domains = $s['transit_gateway_multicast_domains'] ?? vec[];
  }
}

class DescribeTransitGatewayPeeringAttachmentsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_attachment_ids' => ?TransitGatewayAttachmentIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_attachment_ids = $s['transit_gateway_attachment_ids'] ?? vec[];
  }
}

class DescribeTransitGatewayPeeringAttachmentsResult {
  public string $next_token;
  public ?TransitGatewayPeeringAttachmentList $transit_gateway_peering_attachments;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateway_peering_attachments' => ?TransitGatewayPeeringAttachmentList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_peering_attachments = $s['transit_gateway_peering_attachments'] ?? vec[];
  }
}

class DescribeTransitGatewayRouteTablesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayRouteTableIdStringList $transit_gateway_route_table_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_route_table_ids' => ?TransitGatewayRouteTableIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_route_table_ids = $s['transit_gateway_route_table_ids'] ?? vec[];
  }
}

class DescribeTransitGatewayRouteTablesResult {
  public string $next_token;
  public ?TransitGatewayRouteTableList $transit_gateway_route_tables;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateway_route_tables' => ?TransitGatewayRouteTableList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_route_tables = $s['transit_gateway_route_tables'] ?? vec[];
  }
}

class DescribeTransitGatewayVpcAttachmentsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_attachment_ids' => ?TransitGatewayAttachmentIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_attachment_ids = $s['transit_gateway_attachment_ids'] ?? vec[];
  }
}

class DescribeTransitGatewayVpcAttachmentsResult {
  public string $next_token;
  public ?TransitGatewayVpcAttachmentList $transit_gateway_vpc_attachments;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateway_vpc_attachments' => ?TransitGatewayVpcAttachmentList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_vpc_attachments = $s['transit_gateway_vpc_attachments'] ?? vec[];
  }
}

class DescribeTransitGatewaysRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayIdStringList $transit_gateway_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_ids' => ?TransitGatewayIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_ids = $s['transit_gateway_ids'] ?? vec[];
  }
}

class DescribeTransitGatewaysResult {
  public string $next_token;
  public ?TransitGatewayList $transit_gateways;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateways' => ?TransitGatewayList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateways = $s['transit_gateways'] ?? vec[];
  }
}

class DescribeVolumeAttributeRequest {
  public ?VolumeAttributeName $attribute;
  public bool $dry_run;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'attribute' => ?VolumeAttributeName,
    ?'dry_run' => bool,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class DescribeVolumeAttributeResult {
  public ?AttributeBooleanValue $auto_enable_io;
  public ?ProductCodeList $product_codes;
  public string $volume_id;

  public function __construct(shape(
    ?'auto_enable_io' => ?AttributeBooleanValue,
    ?'product_codes' => ?ProductCodeList,
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->auto_enable_io = $s['auto_enable_io'] ?? null;
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class DescribeVolumeStatusRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?VolumeIdStringList $volume_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'volume_ids' => ?VolumeIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->volume_ids = $s['volume_ids'] ?? vec[];
  }
}

class DescribeVolumeStatusResult {
  public string $next_token;
  public ?VolumeStatusList $volume_statuses;

  public function __construct(shape(
    ?'next_token' => string,
    ?'volume_statuses' => ?VolumeStatusList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->volume_statuses = $s['volume_statuses'] ?? vec[];
  }
}

class DescribeVolumesModificationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?VolumeIdStringList $volume_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'volume_ids' => ?VolumeIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->volume_ids = $s['volume_ids'] ?? vec[];
  }
}

class DescribeVolumesModificationsResult {
  public string $next_token;
  public ?VolumeModificationList $volumes_modifications;

  public function __construct(shape(
    ?'next_token' => string,
    ?'volumes_modifications' => ?VolumeModificationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->volumes_modifications = $s['volumes_modifications'] ?? vec[];
  }
}

class DescribeVolumesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?VolumeIdStringList $volume_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'volume_ids' => ?VolumeIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->volume_ids = $s['volume_ids'] ?? vec[];
  }
}

class DescribeVolumesResult {
  public string $next_token;
  public ?VolumeList $volumes;

  public function __construct(shape(
    ?'next_token' => string,
    ?'volumes' => ?VolumeList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->volumes = $s['volumes'] ?? vec[];
  }
}

class DescribeVpcAttributeRequest {
  public ?VpcAttributeName $attribute;
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'attribute' => ?VpcAttributeName,
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DescribeVpcAttributeResult {
  public ?AttributeBooleanValue $enable_dns_hostnames;
  public ?AttributeBooleanValue $enable_dns_support;
  public string $vpc_id;

  public function __construct(shape(
    ?'enable_dns_hostnames' => ?AttributeBooleanValue,
    ?'enable_dns_support' => ?AttributeBooleanValue,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->enable_dns_hostnames = $s['enable_dns_hostnames'] ?? null;
    $this->enable_dns_support = $s['enable_dns_support'] ?? null;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type DescribeVpcClassicLinkDnsSupportMaxResults = int;

type DescribeVpcClassicLinkDnsSupportNextToken = string;

class DescribeVpcClassicLinkDnsSupportRequest {
  public ?DescribeVpcClassicLinkDnsSupportMaxResults $max_results;
  public ?DescribeVpcClassicLinkDnsSupportNextToken $next_token;
  public ?VpcClassicLinkIdList $vpc_ids;

  public function __construct(shape(
    ?'max_results' => ?DescribeVpcClassicLinkDnsSupportMaxResults,
    ?'next_token' => ?DescribeVpcClassicLinkDnsSupportNextToken,
    ?'vpc_ids' => ?VpcClassicLinkIdList,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_ids = $s['vpc_ids'] ?? vec[];
  }
}

class DescribeVpcClassicLinkDnsSupportResult {
  public ?DescribeVpcClassicLinkDnsSupportNextToken $next_token;
  public ?ClassicLinkDnsSupportList $vpcs;

  public function __construct(shape(
    ?'next_token' => ?DescribeVpcClassicLinkDnsSupportNextToken,
    ?'vpcs' => ?ClassicLinkDnsSupportList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->vpcs = $s['vpcs'] ?? vec[];
  }
}

class DescribeVpcClassicLinkRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?VpcClassicLinkIdList $vpc_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'vpc_ids' => ?VpcClassicLinkIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->vpc_ids = $s['vpc_ids'] ?? vec[];
  }
}

class DescribeVpcClassicLinkResult {
  public ?VpcClassicLinkList $vpcs;

  public function __construct(shape(
    ?'vpcs' => ?VpcClassicLinkList,
  ) $s = shape()) {
    $this->vpcs = $s['vpcs'] ?? vec[];
  }
}

class DescribeVpcEndpointConnectionNotificationsRequest {
  public ?ConnectionNotificationId $connection_notification_id;
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'connection_notification_id' => ?ConnectionNotificationId,
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->connection_notification_id = $s['connection_notification_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeVpcEndpointConnectionNotificationsResult {
  public ?ConnectionNotificationSet $connection_notification_set;
  public string $next_token;

  public function __construct(shape(
    ?'connection_notification_set' => ?ConnectionNotificationSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->connection_notification_set = $s['connection_notification_set'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeVpcEndpointConnectionsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeVpcEndpointConnectionsResult {
  public string $next_token;
  public ?VpcEndpointConnectionSet $vpc_endpoint_connections;

  public function __construct(shape(
    ?'next_token' => string,
    ?'vpc_endpoint_connections' => ?VpcEndpointConnectionSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_endpoint_connections = $s['vpc_endpoint_connections'] ?? vec[];
  }
}

class DescribeVpcEndpointServiceConfigurationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?VpcEndpointServiceIdList $service_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'service_ids' => ?VpcEndpointServiceIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_ids = $s['service_ids'] ?? vec[];
  }
}

class DescribeVpcEndpointServiceConfigurationsResult {
  public string $next_token;
  public ?ServiceConfigurationSet $service_configurations;

  public function __construct(shape(
    ?'next_token' => string,
    ?'service_configurations' => ?ServiceConfigurationSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->service_configurations = $s['service_configurations'] ?? vec[];
  }
}

class DescribeVpcEndpointServicePermissionsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?VpcEndpointServiceId $service_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'service_id' => ?VpcEndpointServiceId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
  }
}

class DescribeVpcEndpointServicePermissionsResult {
  public ?AllowedPrincipalSet $allowed_principals;
  public string $next_token;

  public function __construct(shape(
    ?'allowed_principals' => ?AllowedPrincipalSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->allowed_principals = $s['allowed_principals'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeVpcEndpointServicesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?ValueStringList $service_names;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'service_names' => ?ValueStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_names = $s['service_names'] ?? vec[];
  }
}

class DescribeVpcEndpointServicesResult {
  public string $next_token;
  public ?ServiceDetailSet $service_details;
  public ?ValueStringList $service_names;

  public function __construct(shape(
    ?'next_token' => string,
    ?'service_details' => ?ServiceDetailSet,
    ?'service_names' => ?ValueStringList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->service_details = $s['service_details'] ?? vec[];
    $this->service_names = $s['service_names'] ?? vec[];
  }
}

class DescribeVpcEndpointsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ?VpcEndpointIdList $vpc_endpoint_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => int,
    ?'next_token' => string,
    ?'vpc_endpoint_ids' => ?VpcEndpointIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_endpoint_ids = $s['vpc_endpoint_ids'] ?? vec[];
  }
}

class DescribeVpcEndpointsResult {
  public string $next_token;
  public ?VpcEndpointSet $vpc_endpoints;

  public function __construct(shape(
    ?'next_token' => string,
    ?'vpc_endpoints' => ?VpcEndpointSet,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_endpoints = $s['vpc_endpoints'] ?? vec[];
  }
}

type DescribeVpcPeeringConnectionsMaxResults = int;

class DescribeVpcPeeringConnectionsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeVpcPeeringConnectionsMaxResults $max_results;
  public string $next_token;
  public ?VpcPeeringConnectionIdList $vpc_peering_connection_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeVpcPeeringConnectionsMaxResults,
    ?'next_token' => string,
    ?'vpc_peering_connection_ids' => ?VpcPeeringConnectionIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_peering_connection_ids = $s['vpc_peering_connection_ids'] ?? vec[];
  }
}

class DescribeVpcPeeringConnectionsResult {
  public string $next_token;
  public ?VpcPeeringConnectionList $vpc_peering_connections;

  public function __construct(shape(
    ?'next_token' => string,
    ?'vpc_peering_connections' => ?VpcPeeringConnectionList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_peering_connections = $s['vpc_peering_connections'] ?? vec[];
  }
}

type DescribeVpcsMaxResults = int;

class DescribeVpcsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?DescribeVpcsMaxResults $max_results;
  public string $next_token;
  public ?VpcIdStringList $vpc_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?DescribeVpcsMaxResults,
    ?'next_token' => string,
    ?'vpc_ids' => ?VpcIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->vpc_ids = $s['vpc_ids'] ?? vec[];
  }
}

class DescribeVpcsResult {
  public string $next_token;
  public ?VpcList $vpcs;

  public function __construct(shape(
    ?'next_token' => string,
    ?'vpcs' => ?VpcList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->vpcs = $s['vpcs'] ?? vec[];
  }
}

class DescribeVpnConnectionsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?VpnConnectionIdStringList $vpn_connection_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'vpn_connection_ids' => ?VpnConnectionIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->vpn_connection_ids = $s['vpn_connection_ids'] ?? vec[];
  }
}

class DescribeVpnConnectionsResult {
  public ?VpnConnectionList $vpn_connections;

  public function __construct(shape(
    ?'vpn_connections' => ?VpnConnectionList,
  ) $s = shape()) {
    $this->vpn_connections = $s['vpn_connections'] ?? vec[];
  }
}

class DescribeVpnGatewaysRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?VpnGatewayIdStringList $vpn_gateway_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'vpn_gateway_ids' => ?VpnGatewayIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->vpn_gateway_ids = $s['vpn_gateway_ids'] ?? vec[];
  }
}

class DescribeVpnGatewaysResult {
  public ?VpnGatewayList $vpn_gateways;

  public function __construct(shape(
    ?'vpn_gateways' => ?VpnGatewayList,
  ) $s = shape()) {
    $this->vpn_gateways = $s['vpn_gateways'] ?? vec[];
  }
}

class DetachClassicLinkVpcRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DetachClassicLinkVpcResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class DetachInternetGatewayRequest {
  public bool $dry_run;
  public ?InternetGatewayId $internet_gateway_id;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'internet_gateway_id' => ?InternetGatewayId,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->internet_gateway_id = $s['internet_gateway_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DetachNetworkInterfaceRequest {
  public ?NetworkInterfaceAttachmentId $attachment_id;
  public bool $dry_run;
  public bool $force;

  public function __construct(shape(
    ?'attachment_id' => ?NetworkInterfaceAttachmentId,
    ?'dry_run' => bool,
    ?'force' => bool,
  ) $s = shape()) {
    $this->attachment_id = $s['attachment_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->force = $s['force'] ?? false;
  }
}

class DetachVolumeRequest {
  public string $device;
  public bool $dry_run;
  public bool $force;
  public ?InstanceId $instance_id;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'device' => string,
    ?'dry_run' => bool,
    ?'force' => bool,
    ?'instance_id' => ?InstanceId,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->device = $s['device'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->force = $s['force'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class DetachVpnGatewayRequest {
  public bool $dry_run;
  public ?VpcId $vpc_id;
  public ?VpnGatewayId $vpn_gateway_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
    ?'vpn_gateway_id' => ?VpnGatewayId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpn_gateway_id = $s['vpn_gateway_id'] ?? '';
  }
}

type DeviceType = string;

class DhcpConfiguration {
  public string $key;
  public ?DhcpConfigurationValueList $values;

  public function __construct(shape(
    ?'key' => string,
    ?'values' => ?DhcpConfigurationValueList,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type DhcpConfigurationList = vec<DhcpConfiguration>;

type DhcpConfigurationValueList = vec<AttributeValue>;

class DhcpOptions {
  public ?DhcpConfigurationList $dhcp_configurations;
  public string $dhcp_options_id;
  public string $owner_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'dhcp_configurations' => ?DhcpConfigurationList,
    ?'dhcp_options_id' => string,
    ?'owner_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->dhcp_configurations = $s['dhcp_configurations'] ?? vec[];
    $this->dhcp_options_id = $s['dhcp_options_id'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type DhcpOptionsId = string;

type DhcpOptionsIdStringList = vec<DhcpOptionsId>;

type DhcpOptionsList = vec<DhcpOptions>;

class DirectoryServiceAuthentication {
  public string $directory_id;

  public function __construct(shape(
    ?'directory_id' => string,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DirectoryServiceAuthenticationRequest {
  public string $directory_id;

  public function __construct(shape(
    ?'directory_id' => string,
  ) $s = shape()) {
    $this->directory_id = $s['directory_id'] ?? '';
  }
}

class DisableEbsEncryptionByDefaultRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DisableEbsEncryptionByDefaultResult {
  public bool $ebs_encryption_by_default;

  public function __construct(shape(
    ?'ebs_encryption_by_default' => bool,
  ) $s = shape()) {
    $this->ebs_encryption_by_default = $s['ebs_encryption_by_default'] ?? false;
  }
}

class DisableFastSnapshotRestoreErrorItem {
  public ?DisableFastSnapshotRestoreStateErrorSet $fast_snapshot_restore_state_errors;
  public string $snapshot_id;

  public function __construct(shape(
    ?'fast_snapshot_restore_state_errors' => ?DisableFastSnapshotRestoreStateErrorSet,
    ?'snapshot_id' => string,
  ) $s = shape()) {
    $this->fast_snapshot_restore_state_errors = $s['fast_snapshot_restore_state_errors'] ?? vec[];
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

type DisableFastSnapshotRestoreErrorSet = vec<DisableFastSnapshotRestoreErrorItem>;

class DisableFastSnapshotRestoreStateError {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class DisableFastSnapshotRestoreStateErrorItem {
  public string $availability_zone;
  public ?DisableFastSnapshotRestoreStateError $error;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'error' => ?DisableFastSnapshotRestoreStateError,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->error = $s['error'] ?? null;
  }
}

type DisableFastSnapshotRestoreStateErrorSet = vec<DisableFastSnapshotRestoreStateErrorItem>;

class DisableFastSnapshotRestoreSuccessItem {
  public string $availability_zone;
  public ?MillisecondDateTime $disabled_time;
  public ?MillisecondDateTime $disabling_time;
  public ?MillisecondDateTime $enabled_time;
  public ?MillisecondDateTime $enabling_time;
  public ?MillisecondDateTime $optimizing_time;
  public string $owner_alias;
  public string $owner_id;
  public string $snapshot_id;
  public ?FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'disabled_time' => ?MillisecondDateTime,
    ?'disabling_time' => ?MillisecondDateTime,
    ?'enabled_time' => ?MillisecondDateTime,
    ?'enabling_time' => ?MillisecondDateTime,
    ?'optimizing_time' => ?MillisecondDateTime,
    ?'owner_alias' => string,
    ?'owner_id' => string,
    ?'snapshot_id' => string,
    ?'state' => ?FastSnapshotRestoreStateCode,
    ?'state_transition_reason' => string,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->disabled_time = $s['disabled_time'] ?? 0;
    $this->disabling_time = $s['disabling_time'] ?? 0;
    $this->enabled_time = $s['enabled_time'] ?? 0;
    $this->enabling_time = $s['enabling_time'] ?? 0;
    $this->optimizing_time = $s['optimizing_time'] ?? 0;
    $this->owner_alias = $s['owner_alias'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->state_transition_reason = $s['state_transition_reason'] ?? '';
  }
}

type DisableFastSnapshotRestoreSuccessSet = vec<DisableFastSnapshotRestoreSuccessItem>;

class DisableFastSnapshotRestoresRequest {
  public ?AvailabilityZoneStringList $availability_zones;
  public bool $dry_run;
  public ?SnapshotIdStringList $source_snapshot_ids;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneStringList,
    ?'dry_run' => bool,
    ?'source_snapshot_ids' => ?SnapshotIdStringList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->source_snapshot_ids = $s['source_snapshot_ids'] ?? vec[];
  }
}

class DisableFastSnapshotRestoresResult {
  public ?DisableFastSnapshotRestoreSuccessSet $successful;
  public ?DisableFastSnapshotRestoreErrorSet $unsuccessful;

  public function __construct(shape(
    ?'successful' => ?DisableFastSnapshotRestoreSuccessSet,
    ?'unsuccessful' => ?DisableFastSnapshotRestoreErrorSet,
  ) $s = shape()) {
    $this->successful = $s['successful'] ?? vec[];
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class DisableTransitGatewayRouteTablePropagationRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class DisableTransitGatewayRouteTablePropagationResult {
  public ?TransitGatewayPropagation $propagation;

  public function __construct(shape(
    ?'propagation' => ?TransitGatewayPropagation,
  ) $s = shape()) {
    $this->propagation = $s['propagation'] ?? null;
  }
}

class DisableVgwRoutePropagationRequest {
  public bool $dry_run;
  public ?VpnGatewayId $gateway_id;
  public ?RouteTableId $route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'gateway_id' => ?VpnGatewayId,
    ?'route_table_id' => ?RouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->route_table_id = $s['route_table_id'] ?? '';
  }
}

class DisableVpcClassicLinkDnsSupportRequest {
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DisableVpcClassicLinkDnsSupportResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class DisableVpcClassicLinkRequest {
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class DisableVpcClassicLinkResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class DisassociateAddressRequest {
  public ?ElasticIpAssociationId $association_id;
  public bool $dry_run;
  public string $public_ip;

  public function __construct(shape(
    ?'association_id' => ?ElasticIpAssociationId,
    ?'dry_run' => bool,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

class DisassociateClientVpnTargetNetworkRequest {
  public ?ClientVpnAssociationId $association_id;
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'association_id' => ?ClientVpnAssociationId,
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DisassociateClientVpnTargetNetworkResult {
  public string $association_id;
  public ?AssociationStatus $status;

  public function __construct(shape(
    ?'association_id' => string,
    ?'status' => ?AssociationStatus,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

class DisassociateIamInstanceProfileRequest {
  public ?IamInstanceProfileAssociationId $association_id;

  public function __construct(shape(
    ?'association_id' => ?IamInstanceProfileAssociationId,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
  }
}

class DisassociateIamInstanceProfileResult {
  public ?IamInstanceProfileAssociation $iam_instance_profile_association;

  public function __construct(shape(
    ?'iam_instance_profile_association' => ?IamInstanceProfileAssociation,
  ) $s = shape()) {
    $this->iam_instance_profile_association = $s['iam_instance_profile_association'] ?? null;
  }
}

class DisassociateRouteTableRequest {
  public ?RouteTableAssociationId $association_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'association_id' => ?RouteTableAssociationId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class DisassociateSubnetCidrBlockRequest {
  public ?SubnetCidrAssociationId $association_id;

  public function __construct(shape(
    ?'association_id' => ?SubnetCidrAssociationId,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
  }
}

class DisassociateSubnetCidrBlockResult {
  public ?SubnetIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $subnet_id;

  public function __construct(shape(
    ?'ipv_6_cidr_block_association' => ?SubnetIpv6CidrBlockAssociation,
    ?'subnet_id' => string,
  ) $s = shape()) {
    $this->ipv_6_cidr_block_association = $s['ipv_6_cidr_block_association'] ?? null;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class DisassociateTransitGatewayMulticastDomainRequest {
  public bool $dry_run;
  public ?ValueStringList $subnet_ids;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'subnet_ids' => ?ValueStringList,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class DisassociateTransitGatewayMulticastDomainResult {
  public ?TransitGatewayMulticastDomainAssociations $associations;

  public function __construct(shape(
    ?'associations' => ?TransitGatewayMulticastDomainAssociations,
  ) $s = shape()) {
    $this->associations = $s['associations'] ?? null;
  }
}

class DisassociateTransitGatewayRouteTableRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class DisassociateTransitGatewayRouteTableResult {
  public ?TransitGatewayAssociation $association;

  public function __construct(shape(
    ?'association' => ?TransitGatewayAssociation,
  ) $s = shape()) {
    $this->association = $s['association'] ?? null;
  }
}

class DisassociateVpcCidrBlockRequest {
  public ?VpcCidrAssociationId $association_id;

  public function __construct(shape(
    ?'association_id' => ?VpcCidrAssociationId,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
  }
}

class DisassociateVpcCidrBlockResult {
  public ?VpcCidrBlockAssociation $cidr_block_association;
  public ?VpcIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $vpc_id;

  public function __construct(shape(
    ?'cidr_block_association' => ?VpcCidrBlockAssociation,
    ?'ipv_6_cidr_block_association' => ?VpcIpv6CidrBlockAssociation,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cidr_block_association = $s['cidr_block_association'] ?? null;
    $this->ipv_6_cidr_block_association = $s['ipv_6_cidr_block_association'] ?? null;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type DiskCount = int;

class DiskImage {
  public string $description;
  public ?DiskImageDetail $image;
  public ?VolumeDetail $volume;

  public function __construct(shape(
    ?'description' => string,
    ?'image' => ?DiskImageDetail,
    ?'volume' => ?VolumeDetail,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->image = $s['image'] ?? null;
    $this->volume = $s['volume'] ?? null;
  }
}

class DiskImageDescription {
  public string $checksum;
  public ?DiskImageFormat $format;
  public string $import_manifest_url;
  public ?Long $size;

  public function __construct(shape(
    ?'checksum' => string,
    ?'format' => ?DiskImageFormat,
    ?'import_manifest_url' => string,
    ?'size' => ?Long,
  ) $s = shape()) {
    $this->checksum = $s['checksum'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->import_manifest_url = $s['import_manifest_url'] ?? '';
    $this->size = $s['size'] ?? 0;
  }
}

class DiskImageDetail {
  public ?Long $bytes;
  public ?DiskImageFormat $format;
  public string $import_manifest_url;

  public function __construct(shape(
    ?'bytes' => ?Long,
    ?'format' => ?DiskImageFormat,
    ?'import_manifest_url' => string,
  ) $s = shape()) {
    $this->bytes = $s['bytes'] ?? 0;
    $this->format = $s['format'] ?? '';
    $this->import_manifest_url = $s['import_manifest_url'] ?? '';
  }
}

type DiskImageFormat = string;

type DiskImageList = vec<DiskImage>;

class DiskImageVolumeDescription {
  public string $id;
  public ?Long $size;

  public function __construct(shape(
    ?'id' => string,
    ?'size' => ?Long,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->size = $s['size'] ?? 0;
  }
}

class DiskInfo {
  public ?DiskCount $count;
  public ?DiskSize $size_in_gb;
  public ?DiskType $type;

  public function __construct(shape(
    ?'count' => ?DiskCount,
    ?'size_in_gb' => ?DiskSize,
    ?'type' => ?DiskType,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type DiskInfoList = vec<DiskInfo>;

type DiskSize = int;

type DiskType = string;

class DnsEntry {
  public string $dns_name;
  public string $hosted_zone_id;

  public function __construct(shape(
    ?'dns_name' => string,
    ?'hosted_zone_id' => string,
  ) $s = shape()) {
    $this->dns_name = $s['dns_name'] ?? '';
    $this->hosted_zone_id = $s['hosted_zone_id'] ?? '';
  }
}

type DnsEntrySet = vec<DnsEntry>;

type DnsNameState = string;

class DnsServersOptionsModifyStructure {
  public ?ValueStringList $custom_dns_servers;
  public bool $enabled;

  public function __construct(shape(
    ?'custom_dns_servers' => ?ValueStringList,
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->custom_dns_servers = $s['custom_dns_servers'] ?? vec[];
    $this->enabled = $s['enabled'] ?? false;
  }
}

type DnsSupportValue = string;

type DomainType = string;

type Double = float;

class EbsBlockDevice {
  public bool $delete_on_termination;
  public bool $encrypted;
  public int $iops;
  public string $kms_key_id;
  public string $snapshot_id;
  public int $volume_size;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'delete_on_termination' => bool,
    ?'encrypted' => bool,
    ?'iops' => int,
    ?'kms_key_id' => string,
    ?'snapshot_id' => string,
    ?'volume_size' => int,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

type EbsEncryptionSupport = string;

class EbsInfo {
  public ?EbsOptimizedSupport $ebs_optimized_support;
  public ?EbsEncryptionSupport $encryption_support;

  public function __construct(shape(
    ?'ebs_optimized_support' => ?EbsOptimizedSupport,
    ?'encryption_support' => ?EbsEncryptionSupport,
  ) $s = shape()) {
    $this->ebs_optimized_support = $s['ebs_optimized_support'] ?? '';
    $this->encryption_support = $s['encryption_support'] ?? '';
  }
}

class EbsInstanceBlockDevice {
  public ?DateTime $attach_time;
  public bool $delete_on_termination;
  public ?AttachmentStatus $status;
  public string $volume_id;

  public function __construct(shape(
    ?'attach_time' => ?DateTime,
    ?'delete_on_termination' => bool,
    ?'status' => ?AttachmentStatus,
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->attach_time = $s['attach_time'] ?? 0;
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->status = $s['status'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class EbsInstanceBlockDeviceSpecification {
  public bool $delete_on_termination;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'delete_on_termination' => bool,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

type EbsOptimizedSupport = string;

class EgressOnlyInternetGateway {
  public ?InternetGatewayAttachmentList $attachments;
  public ?EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'attachments' => ?InternetGatewayAttachmentList,
    ?'egress_only_internet_gateway_id' => ?EgressOnlyInternetGatewayId,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->attachments = $s['attachments'] ?? vec[];
    $this->egress_only_internet_gateway_id = $s['egress_only_internet_gateway_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type EgressOnlyInternetGatewayId = string;

type EgressOnlyInternetGatewayIdList = vec<EgressOnlyInternetGatewayId>;

type EgressOnlyInternetGatewayList = vec<EgressOnlyInternetGateway>;

class ElasticGpuAssociation {
  public string $elastic_gpu_association_id;
  public string $elastic_gpu_association_state;
  public string $elastic_gpu_association_time;
  public string $elastic_gpu_id;

  public function __construct(shape(
    ?'elastic_gpu_association_id' => string,
    ?'elastic_gpu_association_state' => string,
    ?'elastic_gpu_association_time' => string,
    ?'elastic_gpu_id' => string,
  ) $s = shape()) {
    $this->elastic_gpu_association_id = $s['elastic_gpu_association_id'] ?? '';
    $this->elastic_gpu_association_state = $s['elastic_gpu_association_state'] ?? '';
    $this->elastic_gpu_association_time = $s['elastic_gpu_association_time'] ?? '';
    $this->elastic_gpu_id = $s['elastic_gpu_id'] ?? '';
  }
}

type ElasticGpuAssociationList = vec<ElasticGpuAssociation>;

class ElasticGpuHealth {
  public ?ElasticGpuStatus $status;

  public function __construct(shape(
    ?'status' => ?ElasticGpuStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? '';
  }
}

type ElasticGpuId = string;

type ElasticGpuIdSet = vec<ElasticGpuId>;

type ElasticGpuSet = vec<ElasticGpus>;

class ElasticGpuSpecification {
  public string $type;

  public function __construct(shape(
    ?'type' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

type ElasticGpuSpecificationList = vec<ElasticGpuSpecification>;

class ElasticGpuSpecificationResponse {
  public string $type;

  public function __construct(shape(
    ?'type' => string,
  ) $s = shape()) {
    $this->type = $s['type'] ?? '';
  }
}

type ElasticGpuSpecificationResponseList = vec<ElasticGpuSpecificationResponse>;

type ElasticGpuSpecifications = vec<ElasticGpuSpecification>;

type ElasticGpuState = string;

type ElasticGpuStatus = string;

class ElasticGpus {
  public string $availability_zone;
  public ?ElasticGpuHealth $elastic_gpu_health;
  public string $elastic_gpu_id;
  public ?ElasticGpuState $elastic_gpu_state;
  public string $elastic_gpu_type;
  public string $instance_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'elastic_gpu_health' => ?ElasticGpuHealth,
    ?'elastic_gpu_id' => string,
    ?'elastic_gpu_state' => ?ElasticGpuState,
    ?'elastic_gpu_type' => string,
    ?'instance_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->elastic_gpu_health = $s['elastic_gpu_health'] ?? null;
    $this->elastic_gpu_id = $s['elastic_gpu_id'] ?? '';
    $this->elastic_gpu_state = $s['elastic_gpu_state'] ?? '';
    $this->elastic_gpu_type = $s['elastic_gpu_type'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ElasticInferenceAccelerator {
  public ?ElasticInferenceAcceleratorCount $count;
  public string $type;

  public function __construct(shape(
    ?'count' => ?ElasticInferenceAcceleratorCount,
    ?'type' => string,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

class ElasticInferenceAcceleratorAssociation {
  public string $elastic_inference_accelerator_arn;
  public string $elastic_inference_accelerator_association_id;
  public string $elastic_inference_accelerator_association_state;
  public ?DateTime $elastic_inference_accelerator_association_time;

  public function __construct(shape(
    ?'elastic_inference_accelerator_arn' => string,
    ?'elastic_inference_accelerator_association_id' => string,
    ?'elastic_inference_accelerator_association_state' => string,
    ?'elastic_inference_accelerator_association_time' => ?DateTime,
  ) $s = shape()) {
    $this->elastic_inference_accelerator_arn = $s['elastic_inference_accelerator_arn'] ?? '';
    $this->elastic_inference_accelerator_association_id = $s['elastic_inference_accelerator_association_id'] ?? '';
    $this->elastic_inference_accelerator_association_state = $s['elastic_inference_accelerator_association_state'] ?? '';
    $this->elastic_inference_accelerator_association_time = $s['elastic_inference_accelerator_association_time'] ?? 0;
  }
}

type ElasticInferenceAcceleratorAssociationList = vec<ElasticInferenceAcceleratorAssociation>;

type ElasticInferenceAcceleratorCount = int;

type ElasticInferenceAccelerators = vec<ElasticInferenceAccelerator>;

type ElasticIpAssociationId = string;

type EnaSupport = string;

class EnableEbsEncryptionByDefaultRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class EnableEbsEncryptionByDefaultResult {
  public bool $ebs_encryption_by_default;

  public function __construct(shape(
    ?'ebs_encryption_by_default' => bool,
  ) $s = shape()) {
    $this->ebs_encryption_by_default = $s['ebs_encryption_by_default'] ?? false;
  }
}

class EnableFastSnapshotRestoreErrorItem {
  public ?EnableFastSnapshotRestoreStateErrorSet $fast_snapshot_restore_state_errors;
  public string $snapshot_id;

  public function __construct(shape(
    ?'fast_snapshot_restore_state_errors' => ?EnableFastSnapshotRestoreStateErrorSet,
    ?'snapshot_id' => string,
  ) $s = shape()) {
    $this->fast_snapshot_restore_state_errors = $s['fast_snapshot_restore_state_errors'] ?? vec[];
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

type EnableFastSnapshotRestoreErrorSet = vec<EnableFastSnapshotRestoreErrorItem>;

class EnableFastSnapshotRestoreStateError {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class EnableFastSnapshotRestoreStateErrorItem {
  public string $availability_zone;
  public ?EnableFastSnapshotRestoreStateError $error;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'error' => ?EnableFastSnapshotRestoreStateError,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->error = $s['error'] ?? null;
  }
}

type EnableFastSnapshotRestoreStateErrorSet = vec<EnableFastSnapshotRestoreStateErrorItem>;

class EnableFastSnapshotRestoreSuccessItem {
  public string $availability_zone;
  public ?MillisecondDateTime $disabled_time;
  public ?MillisecondDateTime $disabling_time;
  public ?MillisecondDateTime $enabled_time;
  public ?MillisecondDateTime $enabling_time;
  public ?MillisecondDateTime $optimizing_time;
  public string $owner_alias;
  public string $owner_id;
  public string $snapshot_id;
  public ?FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'disabled_time' => ?MillisecondDateTime,
    ?'disabling_time' => ?MillisecondDateTime,
    ?'enabled_time' => ?MillisecondDateTime,
    ?'enabling_time' => ?MillisecondDateTime,
    ?'optimizing_time' => ?MillisecondDateTime,
    ?'owner_alias' => string,
    ?'owner_id' => string,
    ?'snapshot_id' => string,
    ?'state' => ?FastSnapshotRestoreStateCode,
    ?'state_transition_reason' => string,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->disabled_time = $s['disabled_time'] ?? 0;
    $this->disabling_time = $s['disabling_time'] ?? 0;
    $this->enabled_time = $s['enabled_time'] ?? 0;
    $this->enabling_time = $s['enabling_time'] ?? 0;
    $this->optimizing_time = $s['optimizing_time'] ?? 0;
    $this->owner_alias = $s['owner_alias'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->state_transition_reason = $s['state_transition_reason'] ?? '';
  }
}

type EnableFastSnapshotRestoreSuccessSet = vec<EnableFastSnapshotRestoreSuccessItem>;

class EnableFastSnapshotRestoresRequest {
  public ?AvailabilityZoneStringList $availability_zones;
  public bool $dry_run;
  public ?SnapshotIdStringList $source_snapshot_ids;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneStringList,
    ?'dry_run' => bool,
    ?'source_snapshot_ids' => ?SnapshotIdStringList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->source_snapshot_ids = $s['source_snapshot_ids'] ?? vec[];
  }
}

class EnableFastSnapshotRestoresResult {
  public ?EnableFastSnapshotRestoreSuccessSet $successful;
  public ?EnableFastSnapshotRestoreErrorSet $unsuccessful;

  public function __construct(shape(
    ?'successful' => ?EnableFastSnapshotRestoreSuccessSet,
    ?'unsuccessful' => ?EnableFastSnapshotRestoreErrorSet,
  ) $s = shape()) {
    $this->successful = $s['successful'] ?? vec[];
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class EnableTransitGatewayRouteTablePropagationRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class EnableTransitGatewayRouteTablePropagationResult {
  public ?TransitGatewayPropagation $propagation;

  public function __construct(shape(
    ?'propagation' => ?TransitGatewayPropagation,
  ) $s = shape()) {
    $this->propagation = $s['propagation'] ?? null;
  }
}

class EnableVgwRoutePropagationRequest {
  public bool $dry_run;
  public ?VpnGatewayId $gateway_id;
  public ?RouteTableId $route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'gateway_id' => ?VpnGatewayId,
    ?'route_table_id' => ?RouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->route_table_id = $s['route_table_id'] ?? '';
  }
}

class EnableVolumeIORequest {
  public bool $dry_run;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class EnableVpcClassicLinkDnsSupportRequest {
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class EnableVpcClassicLinkDnsSupportResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class EnableVpcClassicLinkRequest {
  public bool $dry_run;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class EnableVpcClassicLinkResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

type EndDateType = string;

type EndpointSet = vec<ClientVpnEndpoint>;

type EventCode = string;

class EventInformation {
  public string $event_description;
  public string $event_sub_type;
  public string $instance_id;

  public function __construct(shape(
    ?'event_description' => string,
    ?'event_sub_type' => string,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->event_description = $s['event_description'] ?? '';
    $this->event_sub_type = $s['event_sub_type'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

type EventType = string;

type ExcessCapacityTerminationPolicy = string;

type ExecutableByStringList = vec<String>;

class ExportClientVpnClientCertificateRevocationListRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class ExportClientVpnClientCertificateRevocationListResult {
  public string $certificate_revocation_list;
  public ?ClientCertificateRevocationListStatus $status;

  public function __construct(shape(
    ?'certificate_revocation_list' => string,
    ?'status' => ?ClientCertificateRevocationListStatus,
  ) $s = shape()) {
    $this->certificate_revocation_list = $s['certificate_revocation_list'] ?? '';
    $this->status = $s['status'] ?? null;
  }
}

class ExportClientVpnClientConfigurationRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class ExportClientVpnClientConfigurationResult {
  public string $client_configuration;

  public function __construct(shape(
    ?'client_configuration' => string,
  ) $s = shape()) {
    $this->client_configuration = $s['client_configuration'] ?? '';
  }
}

type ExportEnvironment = string;

class ExportImageRequest {
  public string $client_token;
  public string $description;
  public ?DiskImageFormat $disk_image_format;
  public bool $dry_run;
  public ?ImageId $image_id;
  public string $role_name;
  public ?ExportTaskS3LocationRequest $s_3_export_location;

  public function __construct(shape(
    ?'client_token' => string,
    ?'description' => string,
    ?'disk_image_format' => ?DiskImageFormat,
    ?'dry_run' => bool,
    ?'image_id' => ?ImageId,
    ?'role_name' => string,
    ?'s_3_export_location' => ?ExportTaskS3LocationRequest,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->disk_image_format = $s['disk_image_format'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->image_id = $s['image_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->s_3_export_location = $s['s_3_export_location'] ?? null;
  }
}

class ExportImageResult {
  public string $description;
  public ?DiskImageFormat $disk_image_format;
  public string $export_image_task_id;
  public string $image_id;
  public string $progress;
  public string $role_name;
  public ?ExportTaskS3Location $s_3_export_location;
  public string $status;
  public string $status_message;

  public function __construct(shape(
    ?'description' => string,
    ?'disk_image_format' => ?DiskImageFormat,
    ?'export_image_task_id' => string,
    ?'image_id' => string,
    ?'progress' => string,
    ?'role_name' => string,
    ?'s_3_export_location' => ?ExportTaskS3Location,
    ?'status' => string,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->disk_image_format = $s['disk_image_format'] ?? '';
    $this->export_image_task_id = $s['export_image_task_id'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
    $this->s_3_export_location = $s['s_3_export_location'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

class ExportImageTask {
  public string $description;
  public string $export_image_task_id;
  public string $image_id;
  public string $progress;
  public ?ExportTaskS3Location $s_3_export_location;
  public string $status;
  public string $status_message;

  public function __construct(shape(
    ?'description' => string,
    ?'export_image_task_id' => string,
    ?'image_id' => string,
    ?'progress' => string,
    ?'s_3_export_location' => ?ExportTaskS3Location,
    ?'status' => string,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->export_image_task_id = $s['export_image_task_id'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->s_3_export_location = $s['s_3_export_location'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type ExportImageTaskId = string;

type ExportImageTaskIdList = vec<ExportImageTaskId>;

type ExportImageTaskList = vec<ExportImageTask>;

class ExportTask {
  public string $description;
  public string $export_task_id;
  public ?ExportToS3Task $export_to_s_3_task;
  public ?InstanceExportDetails $instance_export_details;
  public ?ExportTaskState $state;
  public string $status_message;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'export_task_id' => string,
    ?'export_to_s_3_task' => ?ExportToS3Task,
    ?'instance_export_details' => ?InstanceExportDetails,
    ?'state' => ?ExportTaskState,
    ?'status_message' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->export_task_id = $s['export_task_id'] ?? '';
    $this->export_to_s_3_task = $s['export_to_s_3_task'] ?? null;
    $this->instance_export_details = $s['instance_export_details'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ExportTaskId = string;

type ExportTaskIdStringList = vec<ExportTaskId>;

type ExportTaskList = vec<ExportTask>;

class ExportTaskS3Location {
  public string $s_3_bucket;
  public string $s_3_prefix;

  public function __construct(shape(
    ?'s_3_bucket' => string,
    ?'s_3_prefix' => string,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
  }
}

class ExportTaskS3LocationRequest {
  public string $s_3_bucket;
  public string $s_3_prefix;

  public function __construct(shape(
    ?'s_3_bucket' => string,
    ?'s_3_prefix' => string,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
  }
}

type ExportTaskState = string;

class ExportToS3Task {
  public ?ContainerFormat $container_format;
  public ?DiskImageFormat $disk_image_format;
  public string $s_3_bucket;
  public string $s_3_key;

  public function __construct(shape(
    ?'container_format' => ?ContainerFormat,
    ?'disk_image_format' => ?DiskImageFormat,
    ?'s_3_bucket' => string,
    ?'s_3_key' => string,
  ) $s = shape()) {
    $this->container_format = $s['container_format'] ?? '';
    $this->disk_image_format = $s['disk_image_format'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
  }
}

class ExportToS3TaskSpecification {
  public ?ContainerFormat $container_format;
  public ?DiskImageFormat $disk_image_format;
  public string $s_3_bucket;
  public string $s_3_prefix;

  public function __construct(shape(
    ?'container_format' => ?ContainerFormat,
    ?'disk_image_format' => ?DiskImageFormat,
    ?'s_3_bucket' => string,
    ?'s_3_prefix' => string,
  ) $s = shape()) {
    $this->container_format = $s['container_format'] ?? '';
    $this->disk_image_format = $s['disk_image_format'] ?? '';
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_prefix = $s['s_3_prefix'] ?? '';
  }
}

class ExportTransitGatewayRoutesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public string $s_3_bucket;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'s_3_bucket' => string,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class ExportTransitGatewayRoutesResult {
  public string $s_3_location;

  public function __construct(shape(
    ?'s_3_location' => string,
  ) $s = shape()) {
    $this->s_3_location = $s['s_3_location'] ?? '';
  }
}

type ExportVmTaskId = string;

class FailedQueuedPurchaseDeletion {
  public ?DeleteQueuedReservedInstancesError $error;
  public string $reserved_instances_id;

  public function __construct(shape(
    ?'error' => ?DeleteQueuedReservedInstancesError,
    ?'reserved_instances_id' => string,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
  }
}

type FailedQueuedPurchaseDeletionSet = vec<FailedQueuedPurchaseDeletion>;

type FastSnapshotRestoreStateCode = string;

class Filter {
  public string $name;
  public ?ValueStringList $values;

  public function __construct(shape(
    ?'name' => string,
    ?'values' => ?ValueStringList,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type FilterList = vec<Filter>;

type FleetActivityStatus = string;

type FleetCapacityReservationUsageStrategy = string;

class FleetData {
  public ?FleetActivityStatus $activity_status;
  public string $client_token;
  public ?DateTime $create_time;
  public ?DescribeFleetsErrorSet $errors;
  public ?FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public ?FleetId $fleet_id;
  public ?FleetStateCode $fleet_state;
  public ?Double $fulfilled_capacity;
  public ?Double $fulfilled_on_demand_capacity;
  public ?DescribeFleetsInstancesSet $instances;
  public ?FleetLaunchTemplateConfigList $launch_template_configs;
  public ?OnDemandOptions $on_demand_options;
  public bool $replace_unhealthy_instances;
  public ?SpotOptions $spot_options;
  public ?TagList $tags;
  public ?TargetCapacitySpecification $target_capacity_specification;
  public bool $terminate_instances_with_expiration;
  public ?FleetType $type;
  public ?DateTime $valid_from;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'activity_status' => ?FleetActivityStatus,
    ?'client_token' => string,
    ?'create_time' => ?DateTime,
    ?'errors' => ?DescribeFleetsErrorSet,
    ?'excess_capacity_termination_policy' => ?FleetExcessCapacityTerminationPolicy,
    ?'fleet_id' => ?FleetId,
    ?'fleet_state' => ?FleetStateCode,
    ?'fulfilled_capacity' => ?Double,
    ?'fulfilled_on_demand_capacity' => ?Double,
    ?'instances' => ?DescribeFleetsInstancesSet,
    ?'launch_template_configs' => ?FleetLaunchTemplateConfigList,
    ?'on_demand_options' => ?OnDemandOptions,
    ?'replace_unhealthy_instances' => bool,
    ?'spot_options' => ?SpotOptions,
    ?'tags' => ?TagList,
    ?'target_capacity_specification' => ?TargetCapacitySpecification,
    ?'terminate_instances_with_expiration' => bool,
    ?'type' => ?FleetType,
    ?'valid_from' => ?DateTime,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->activity_status = $s['activity_status'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->errors = $s['errors'] ?? vec[];
    $this->excess_capacity_termination_policy = $s['excess_capacity_termination_policy'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->fleet_state = $s['fleet_state'] ?? '';
    $this->fulfilled_capacity = $s['fulfilled_capacity'] ?? 0.0;
    $this->fulfilled_on_demand_capacity = $s['fulfilled_on_demand_capacity'] ?? 0.0;
    $this->instances = $s['instances'] ?? vec[];
    $this->launch_template_configs = $s['launch_template_configs'] ?? vec[];
    $this->on_demand_options = $s['on_demand_options'] ?? null;
    $this->replace_unhealthy_instances = $s['replace_unhealthy_instances'] ?? false;
    $this->spot_options = $s['spot_options'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->target_capacity_specification = $s['target_capacity_specification'] ?? null;
    $this->terminate_instances_with_expiration = $s['terminate_instances_with_expiration'] ?? false;
    $this->type = $s['type'] ?? '';
    $this->valid_from = $s['valid_from'] ?? 0;
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

type FleetEventType = string;

type FleetExcessCapacityTerminationPolicy = string;

type FleetId = string;

type FleetIdSet = vec<FleetId>;

class FleetLaunchTemplateConfig {
  public ?FleetLaunchTemplateSpecification $launch_template_specification;
  public ?FleetLaunchTemplateOverridesList $overrides;

  public function __construct(shape(
    ?'launch_template_specification' => ?FleetLaunchTemplateSpecification,
    ?'overrides' => ?FleetLaunchTemplateOverridesList,
  ) $s = shape()) {
    $this->launch_template_specification = $s['launch_template_specification'] ?? null;
    $this->overrides = $s['overrides'] ?? vec[];
  }
}

type FleetLaunchTemplateConfigList = vec<FleetLaunchTemplateConfig>;

type FleetLaunchTemplateConfigListRequest = vec<FleetLaunchTemplateConfigRequest>;

class FleetLaunchTemplateConfigRequest {
  public ?FleetLaunchTemplateSpecificationRequest $launch_template_specification;
  public ?FleetLaunchTemplateOverridesListRequest $overrides;

  public function __construct(shape(
    ?'launch_template_specification' => ?FleetLaunchTemplateSpecificationRequest,
    ?'overrides' => ?FleetLaunchTemplateOverridesListRequest,
  ) $s = shape()) {
    $this->launch_template_specification = $s['launch_template_specification'] ?? null;
    $this->overrides = $s['overrides'] ?? vec[];
  }
}

class FleetLaunchTemplateOverrides {
  public string $availability_zone;
  public ?InstanceType $instance_type;
  public string $max_price;
  public ?PlacementResponse $placement;
  public ?Double $priority;
  public string $subnet_id;
  public ?Double $weighted_capacity;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'instance_type' => ?InstanceType,
    ?'max_price' => string,
    ?'placement' => ?PlacementResponse,
    ?'priority' => ?Double,
    ?'subnet_id' => string,
    ?'weighted_capacity' => ?Double,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->max_price = $s['max_price'] ?? '';
    $this->placement = $s['placement'] ?? null;
    $this->priority = $s['priority'] ?? 0.0;
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->weighted_capacity = $s['weighted_capacity'] ?? 0.0;
  }
}

type FleetLaunchTemplateOverridesList = vec<FleetLaunchTemplateOverrides>;

type FleetLaunchTemplateOverridesListRequest = vec<FleetLaunchTemplateOverridesRequest>;

class FleetLaunchTemplateOverridesRequest {
  public string $availability_zone;
  public ?InstanceType $instance_type;
  public string $max_price;
  public ?Placement $placement;
  public ?Double $priority;
  public ?SubnetId $subnet_id;
  public ?Double $weighted_capacity;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'instance_type' => ?InstanceType,
    ?'max_price' => string,
    ?'placement' => ?Placement,
    ?'priority' => ?Double,
    ?'subnet_id' => ?SubnetId,
    ?'weighted_capacity' => ?Double,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->max_price = $s['max_price'] ?? '';
    $this->placement = $s['placement'] ?? null;
    $this->priority = $s['priority'] ?? 0.0;
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->weighted_capacity = $s['weighted_capacity'] ?? 0.0;
  }
}

class FleetLaunchTemplateSpecification {
  public string $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public string $version;

  public function __construct(shape(
    ?'launch_template_id' => string,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'version' => string,
  ) $s = shape()) {
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class FleetLaunchTemplateSpecificationRequest {
  public ?LaunchTemplateId $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public string $version;

  public function __construct(shape(
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'version' => string,
  ) $s = shape()) {
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

type FleetOnDemandAllocationStrategy = string;

type FleetSet = vec<FleetData>;

type FleetStateCode = string;

type FleetType = string;

type Float = float;

class FlowLog {
  public ?MillisecondDateTime $creation_time;
  public string $deliver_logs_error_message;
  public string $deliver_logs_permission_arn;
  public string $deliver_logs_status;
  public string $flow_log_id;
  public string $flow_log_status;
  public string $log_destination;
  public ?LogDestinationType $log_destination_type;
  public string $log_format;
  public string $log_group_name;
  public int $max_aggregation_interval;
  public string $resource_id;
  public ?TagList $tags;
  public ?TrafficType $traffic_type;

  public function __construct(shape(
    ?'creation_time' => ?MillisecondDateTime,
    ?'deliver_logs_error_message' => string,
    ?'deliver_logs_permission_arn' => string,
    ?'deliver_logs_status' => string,
    ?'flow_log_id' => string,
    ?'flow_log_status' => string,
    ?'log_destination' => string,
    ?'log_destination_type' => ?LogDestinationType,
    ?'log_format' => string,
    ?'log_group_name' => string,
    ?'max_aggregation_interval' => int,
    ?'resource_id' => string,
    ?'tags' => ?TagList,
    ?'traffic_type' => ?TrafficType,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->deliver_logs_error_message = $s['deliver_logs_error_message'] ?? '';
    $this->deliver_logs_permission_arn = $s['deliver_logs_permission_arn'] ?? '';
    $this->deliver_logs_status = $s['deliver_logs_status'] ?? '';
    $this->flow_log_id = $s['flow_log_id'] ?? '';
    $this->flow_log_status = $s['flow_log_status'] ?? '';
    $this->log_destination = $s['log_destination'] ?? '';
    $this->log_destination_type = $s['log_destination_type'] ?? '';
    $this->log_format = $s['log_format'] ?? '';
    $this->log_group_name = $s['log_group_name'] ?? '';
    $this->max_aggregation_interval = $s['max_aggregation_interval'] ?? 0;
    $this->resource_id = $s['resource_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->traffic_type = $s['traffic_type'] ?? '';
  }
}

type FlowLogIdList = vec<VpcFlowLogId>;

type FlowLogResourceId = string;

type FlowLogResourceIds = vec<FlowLogResourceId>;

type FlowLogSet = vec<FlowLog>;

type FlowLogsResourceType = string;

type FpgaDeviceCount = int;

class FpgaDeviceInfo {
  public ?FpgaDeviceCount $count;
  public ?FpgaDeviceManufacturerName $manufacturer;
  public ?FpgaDeviceMemoryInfo $memory_info;
  public ?FpgaDeviceName $name;

  public function __construct(shape(
    ?'count' => ?FpgaDeviceCount,
    ?'manufacturer' => ?FpgaDeviceManufacturerName,
    ?'memory_info' => ?FpgaDeviceMemoryInfo,
    ?'name' => ?FpgaDeviceName,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->manufacturer = $s['manufacturer'] ?? '';
    $this->memory_info = $s['memory_info'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

type FpgaDeviceInfoList = vec<FpgaDeviceInfo>;

type FpgaDeviceManufacturerName = string;

class FpgaDeviceMemoryInfo {
  public ?FpgaDeviceMemorySize $size_in_mi_b;

  public function __construct(shape(
    ?'size_in_mi_b' => ?FpgaDeviceMemorySize,
  ) $s = shape()) {
    $this->size_in_mi_b = $s['size_in_mi_b'] ?? 0;
  }
}

type FpgaDeviceMemorySize = int;

type FpgaDeviceName = string;

class FpgaImage {
  public ?DateTime $create_time;
  public bool $data_retention_support;
  public string $description;
  public string $fpga_image_global_id;
  public string $fpga_image_id;
  public string $name;
  public string $owner_alias;
  public string $owner_id;
  public ?PciId $pci_id;
  public ?ProductCodeList $product_codes;
  public bool $public;
  public string $shell_version;
  public ?FpgaImageState $state;
  public ?TagList $tags;
  public ?DateTime $update_time;

  public function __construct(shape(
    ?'create_time' => ?DateTime,
    ?'data_retention_support' => bool,
    ?'description' => string,
    ?'fpga_image_global_id' => string,
    ?'fpga_image_id' => string,
    ?'name' => string,
    ?'owner_alias' => string,
    ?'owner_id' => string,
    ?'pci_id' => ?PciId,
    ?'product_codes' => ?ProductCodeList,
    ?'public' => bool,
    ?'shell_version' => string,
    ?'state' => ?FpgaImageState,
    ?'tags' => ?TagList,
    ?'update_time' => ?DateTime,
  ) $s = shape()) {
    $this->create_time = $s['create_time'] ?? 0;
    $this->data_retention_support = $s['data_retention_support'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->fpga_image_global_id = $s['fpga_image_global_id'] ?? '';
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner_alias = $s['owner_alias'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->pci_id = $s['pci_id'] ?? null;
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->public = $s['public'] ?? false;
    $this->shell_version = $s['shell_version'] ?? '';
    $this->state = $s['state'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->update_time = $s['update_time'] ?? 0;
  }
}

class FpgaImageAttribute {
  public string $description;
  public string $fpga_image_id;
  public ?LoadPermissionList $load_permissions;
  public string $name;
  public ?ProductCodeList $product_codes;

  public function __construct(shape(
    ?'description' => string,
    ?'fpga_image_id' => string,
    ?'load_permissions' => ?LoadPermissionList,
    ?'name' => string,
    ?'product_codes' => ?ProductCodeList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
    $this->load_permissions = $s['load_permissions'] ?? vec[];
    $this->name = $s['name'] ?? '';
    $this->product_codes = $s['product_codes'] ?? vec[];
  }
}

type FpgaImageAttributeName = string;

type FpgaImageId = string;

type FpgaImageIdList = vec<FpgaImageId>;

type FpgaImageList = vec<FpgaImage>;

class FpgaImageState {
  public ?FpgaImageStateCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?FpgaImageStateCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type FpgaImageStateCode = string;

class FpgaInfo {
  public ?FpgaDeviceInfoList $fpgas;
  public ?totalFpgaMemory $total_fpga_memory_in_mi_b;

  public function __construct(shape(
    ?'fpgas' => ?FpgaDeviceInfoList,
    ?'total_fpga_memory_in_mi_b' => ?totalFpgaMemory,
  ) $s = shape()) {
    $this->fpgas = $s['fpgas'] ?? vec[];
    $this->total_fpga_memory_in_mi_b = $s['total_fpga_memory_in_mi_b'] ?? 0;
  }
}

type FreeTierEligibleFlag = bool;

type GatewayType = string;

class GetAssociatedIpv6PoolCidrsRequest {
  public bool $dry_run;
  public ?Ipv6PoolMaxResults $max_results;
  public ?NextToken $next_token;
  public ?Ipv6PoolEc2Id $pool_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'max_results' => ?Ipv6PoolMaxResults,
    ?'next_token' => ?NextToken,
    ?'pool_id' => ?Ipv6PoolEc2Id,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pool_id = $s['pool_id'] ?? '';
  }
}

class GetAssociatedIpv6PoolCidrsResult {
  public ?Ipv6CidrAssociationSet $ipv_6_cidr_associations;
  public string $next_token;

  public function __construct(shape(
    ?'ipv_6_cidr_associations' => ?Ipv6CidrAssociationSet,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->ipv_6_cidr_associations = $s['ipv_6_cidr_associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetCapacityReservationUsageRequest {
  public ?CapacityReservationId $capacity_reservation_id;
  public bool $dry_run;
  public ?GetCapacityReservationUsageRequestMaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'capacity_reservation_id' => ?CapacityReservationId,
    ?'dry_run' => bool,
    ?'max_results' => ?GetCapacityReservationUsageRequestMaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

type GetCapacityReservationUsageRequestMaxResults = int;

class GetCapacityReservationUsageResult {
  public int $available_instance_count;
  public string $capacity_reservation_id;
  public string $instance_type;
  public ?InstanceUsageSet $instance_usages;
  public string $next_token;
  public ?CapacityReservationState $state;
  public int $total_instance_count;

  public function __construct(shape(
    ?'available_instance_count' => int,
    ?'capacity_reservation_id' => string,
    ?'instance_type' => string,
    ?'instance_usages' => ?InstanceUsageSet,
    ?'next_token' => string,
    ?'state' => ?CapacityReservationState,
    ?'total_instance_count' => int,
  ) $s = shape()) {
    $this->available_instance_count = $s['available_instance_count'] ?? 0;
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->instance_usages = $s['instance_usages'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->total_instance_count = $s['total_instance_count'] ?? 0;
  }
}

class GetCoipPoolUsageRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?CoipPoolMaxResults $max_results;
  public string $next_token;
  public ?CoipPoolId $pool_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?CoipPoolMaxResults,
    ?'next_token' => string,
    ?'pool_id' => ?CoipPoolId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->pool_id = $s['pool_id'] ?? '';
  }
}

class GetCoipPoolUsageResult {
  public ?CoipAddressUsageSet $coip_address_usages;
  public string $coip_pool_id;
  public string $local_gateway_route_table_id;

  public function __construct(shape(
    ?'coip_address_usages' => ?CoipAddressUsageSet,
    ?'coip_pool_id' => string,
    ?'local_gateway_route_table_id' => string,
  ) $s = shape()) {
    $this->coip_address_usages = $s['coip_address_usages'] ?? vec[];
    $this->coip_pool_id = $s['coip_pool_id'] ?? '';
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
  }
}

class GetConsoleOutputRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public bool $latest;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'latest' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->latest = $s['latest'] ?? false;
  }
}

class GetConsoleOutputResult {
  public string $instance_id;
  public string $output;
  public ?DateTime $timestamp;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'output' => string,
    ?'timestamp' => ?DateTime,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->output = $s['output'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

class GetConsoleScreenshotRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;
  public bool $wake_up;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
    ?'wake_up' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->wake_up = $s['wake_up'] ?? false;
  }
}

class GetConsoleScreenshotResult {
  public string $image_data;
  public string $instance_id;

  public function __construct(shape(
    ?'image_data' => string,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->image_data = $s['image_data'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class GetDefaultCreditSpecificationRequest {
  public bool $dry_run;
  public ?UnlimitedSupportedInstanceFamily $instance_family;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_family' => ?UnlimitedSupportedInstanceFamily,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_family = $s['instance_family'] ?? '';
  }
}

class GetDefaultCreditSpecificationResult {
  public ?InstanceFamilyCreditSpecification $instance_family_credit_specification;

  public function __construct(shape(
    ?'instance_family_credit_specification' => ?InstanceFamilyCreditSpecification,
  ) $s = shape()) {
    $this->instance_family_credit_specification = $s['instance_family_credit_specification'] ?? null;
  }
}

class GetEbsDefaultKmsKeyIdRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class GetEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;

  public function __construct(shape(
    ?'kms_key_id' => string,
  ) $s = shape()) {
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

class GetEbsEncryptionByDefaultRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class GetEbsEncryptionByDefaultResult {
  public bool $ebs_encryption_by_default;

  public function __construct(shape(
    ?'ebs_encryption_by_default' => bool,
  ) $s = shape()) {
    $this->ebs_encryption_by_default = $s['ebs_encryption_by_default'] ?? false;
  }
}

class GetHostReservationPurchasePreviewRequest {
  public ?RequestHostIdSet $host_id_set;
  public ?OfferingId $offering_id;

  public function __construct(shape(
    ?'host_id_set' => ?RequestHostIdSet,
    ?'offering_id' => ?OfferingId,
  ) $s = shape()) {
    $this->host_id_set = $s['host_id_set'] ?? vec[];
    $this->offering_id = $s['offering_id'] ?? '';
  }
}

class GetHostReservationPurchasePreviewResult {
  public ?CurrencyCodeValues $currency_code;
  public ?PurchaseSet $purchase;
  public string $total_hourly_price;
  public string $total_upfront_price;

  public function __construct(shape(
    ?'currency_code' => ?CurrencyCodeValues,
    ?'purchase' => ?PurchaseSet,
    ?'total_hourly_price' => string,
    ?'total_upfront_price' => string,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->purchase = $s['purchase'] ?? vec[];
    $this->total_hourly_price = $s['total_hourly_price'] ?? '';
    $this->total_upfront_price = $s['total_upfront_price'] ?? '';
  }
}

class GetLaunchTemplateDataRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class GetLaunchTemplateDataResult {
  public ?ResponseLaunchTemplateData $launch_template_data;

  public function __construct(shape(
    ?'launch_template_data' => ?ResponseLaunchTemplateData,
  ) $s = shape()) {
    $this->launch_template_data = $s['launch_template_data'] ?? null;
  }
}

class GetPasswordDataRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class GetPasswordDataResult {
  public string $instance_id;
  public string $password_data;
  public ?DateTime $timestamp;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'password_data' => string,
    ?'timestamp' => ?DateTime,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->password_data = $s['password_data'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

class GetReservedInstancesExchangeQuoteRequest {
  public bool $dry_run;
  public ?ReservedInstanceIdSet $reserved_instance_ids;
  public ?TargetConfigurationRequestSet $target_configurations;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'reserved_instance_ids' => ?ReservedInstanceIdSet,
    ?'target_configurations' => ?TargetConfigurationRequestSet,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->reserved_instance_ids = $s['reserved_instance_ids'] ?? vec[];
    $this->target_configurations = $s['target_configurations'] ?? vec[];
  }
}

class GetReservedInstancesExchangeQuoteResult {
  public string $currency_code;
  public bool $is_valid_exchange;
  public ?DateTime $output_reserved_instances_will_expire_at;
  public string $payment_due;
  public ?ReservationValue $reserved_instance_value_rollup;
  public ?ReservedInstanceReservationValueSet $reserved_instance_value_set;
  public ?ReservationValue $target_configuration_value_rollup;
  public ?TargetReservationValueSet $target_configuration_value_set;
  public string $validation_failure_reason;

  public function __construct(shape(
    ?'currency_code' => string,
    ?'is_valid_exchange' => bool,
    ?'output_reserved_instances_will_expire_at' => ?DateTime,
    ?'payment_due' => string,
    ?'reserved_instance_value_rollup' => ?ReservationValue,
    ?'reserved_instance_value_set' => ?ReservedInstanceReservationValueSet,
    ?'target_configuration_value_rollup' => ?ReservationValue,
    ?'target_configuration_value_set' => ?TargetReservationValueSet,
    ?'validation_failure_reason' => string,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->is_valid_exchange = $s['is_valid_exchange'] ?? false;
    $this->output_reserved_instances_will_expire_at = $s['output_reserved_instances_will_expire_at'] ?? 0;
    $this->payment_due = $s['payment_due'] ?? '';
    $this->reserved_instance_value_rollup = $s['reserved_instance_value_rollup'] ?? null;
    $this->reserved_instance_value_set = $s['reserved_instance_value_set'] ?? vec[];
    $this->target_configuration_value_rollup = $s['target_configuration_value_rollup'] ?? null;
    $this->target_configuration_value_set = $s['target_configuration_value_set'] ?? vec[];
    $this->validation_failure_reason = $s['validation_failure_reason'] ?? '';
  }
}

class GetTransitGatewayAttachmentPropagationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class GetTransitGatewayAttachmentPropagationsResult {
  public string $next_token;
  public ?TransitGatewayAttachmentPropagationList $transit_gateway_attachment_propagations;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateway_attachment_propagations' => ?TransitGatewayAttachmentPropagationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_attachment_propagations = $s['transit_gateway_attachment_propagations'] ?? vec[];
  }
}

class GetTransitGatewayMulticastDomainAssociationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class GetTransitGatewayMulticastDomainAssociationsResult {
  public ?TransitGatewayMulticastDomainAssociationList $multicast_domain_associations;
  public string $next_token;

  public function __construct(shape(
    ?'multicast_domain_associations' => ?TransitGatewayMulticastDomainAssociationList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->multicast_domain_associations = $s['multicast_domain_associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetTransitGatewayRouteTableAssociationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class GetTransitGatewayRouteTableAssociationsResult {
  public ?TransitGatewayRouteTableAssociationList $associations;
  public string $next_token;

  public function __construct(shape(
    ?'associations' => ?TransitGatewayRouteTableAssociationList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->associations = $s['associations'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetTransitGatewayRouteTablePropagationsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class GetTransitGatewayRouteTablePropagationsResult {
  public string $next_token;
  public ?TransitGatewayRouteTablePropagationList $transit_gateway_route_table_propagations;

  public function __construct(shape(
    ?'next_token' => string,
    ?'transit_gateway_route_table_propagations' => ?TransitGatewayRouteTablePropagationList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_route_table_propagations = $s['transit_gateway_route_table_propagations'] ?? vec[];
  }
}

type GpuDeviceCount = int;

class GpuDeviceInfo {
  public ?GpuDeviceCount $count;
  public ?GpuDeviceManufacturerName $manufacturer;
  public ?GpuDeviceMemoryInfo $memory_info;
  public ?GpuDeviceName $name;

  public function __construct(shape(
    ?'count' => ?GpuDeviceCount,
    ?'manufacturer' => ?GpuDeviceManufacturerName,
    ?'memory_info' => ?GpuDeviceMemoryInfo,
    ?'name' => ?GpuDeviceName,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->manufacturer = $s['manufacturer'] ?? '';
    $this->memory_info = $s['memory_info'] ?? null;
    $this->name = $s['name'] ?? '';
  }
}

type GpuDeviceInfoList = vec<GpuDeviceInfo>;

type GpuDeviceManufacturerName = string;

class GpuDeviceMemoryInfo {
  public ?GpuDeviceMemorySize $size_in_mi_b;

  public function __construct(shape(
    ?'size_in_mi_b' => ?GpuDeviceMemorySize,
  ) $s = shape()) {
    $this->size_in_mi_b = $s['size_in_mi_b'] ?? 0;
  }
}

type GpuDeviceMemorySize = int;

type GpuDeviceName = string;

class GpuInfo {
  public ?GpuDeviceInfoList $gpus;
  public ?totalGpuMemory $total_gpu_memory_in_mi_b;

  public function __construct(shape(
    ?'gpus' => ?GpuDeviceInfoList,
    ?'total_gpu_memory_in_mi_b' => ?totalGpuMemory,
  ) $s = shape()) {
    $this->gpus = $s['gpus'] ?? vec[];
    $this->total_gpu_memory_in_mi_b = $s['total_gpu_memory_in_mi_b'] ?? 0;
  }
}

type GroupIdStringList = vec<String>;

class GroupIdentifier {
  public string $group_id;
  public string $group_name;

  public function __construct(shape(
    ?'group_id' => string,
    ?'group_name' => string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type GroupIdentifierList = vec<GroupIdentifier>;

type GroupIdentifierSet = vec<SecurityGroupIdentifier>;

type GroupIds = vec<SecurityGroupId>;

type GroupNameStringList = vec<SecurityGroupName>;

type HibernationFlag = bool;

class HibernationOptions {
  public bool $configured;

  public function __construct(shape(
    ?'configured' => bool,
  ) $s = shape()) {
    $this->configured = $s['configured'] ?? false;
  }
}

class HibernationOptionsRequest {
  public bool $configured;

  public function __construct(shape(
    ?'configured' => bool,
  ) $s = shape()) {
    $this->configured = $s['configured'] ?? false;
  }
}

class HistoryRecord {
  public ?EventInformation $event_information;
  public ?EventType $event_type;
  public ?DateTime $timestamp;

  public function __construct(shape(
    ?'event_information' => ?EventInformation,
    ?'event_type' => ?EventType,
    ?'timestamp' => ?DateTime,
  ) $s = shape()) {
    $this->event_information = $s['event_information'] ?? null;
    $this->event_type = $s['event_type'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

class HistoryRecordEntry {
  public ?EventInformation $event_information;
  public ?FleetEventType $event_type;
  public ?DateTime $timestamp;

  public function __construct(shape(
    ?'event_information' => ?EventInformation,
    ?'event_type' => ?FleetEventType,
    ?'timestamp' => ?DateTime,
  ) $s = shape()) {
    $this->event_information = $s['event_information'] ?? null;
    $this->event_type = $s['event_type'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type HistoryRecordSet = vec<HistoryRecordEntry>;

type HistoryRecords = vec<HistoryRecord>;

class Host {
  public ?DateTime $allocation_time;
  public ?AllowsMultipleInstanceTypes $allows_multiple_instance_types;
  public ?AutoPlacement $auto_placement;
  public string $availability_zone;
  public string $availability_zone_id;
  public ?AvailableCapacity $available_capacity;
  public string $client_token;
  public string $host_id;
  public ?HostProperties $host_properties;
  public ?HostRecovery $host_recovery;
  public string $host_reservation_id;
  public ?HostInstanceList $instances;
  public bool $member_of_service_linked_resource_group;
  public string $owner_id;
  public ?DateTime $release_time;
  public ?AllocationState $state;
  public ?TagList $tags;

  public function __construct(shape(
    ?'allocation_time' => ?DateTime,
    ?'allows_multiple_instance_types' => ?AllowsMultipleInstanceTypes,
    ?'auto_placement' => ?AutoPlacement,
    ?'availability_zone' => string,
    ?'availability_zone_id' => string,
    ?'available_capacity' => ?AvailableCapacity,
    ?'client_token' => string,
    ?'host_id' => string,
    ?'host_properties' => ?HostProperties,
    ?'host_recovery' => ?HostRecovery,
    ?'host_reservation_id' => string,
    ?'instances' => ?HostInstanceList,
    ?'member_of_service_linked_resource_group' => bool,
    ?'owner_id' => string,
    ?'release_time' => ?DateTime,
    ?'state' => ?AllocationState,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->allocation_time = $s['allocation_time'] ?? 0;
    $this->allows_multiple_instance_types = $s['allows_multiple_instance_types'] ?? '';
    $this->auto_placement = $s['auto_placement'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->available_capacity = $s['available_capacity'] ?? null;
    $this->client_token = $s['client_token'] ?? '';
    $this->host_id = $s['host_id'] ?? '';
    $this->host_properties = $s['host_properties'] ?? null;
    $this->host_recovery = $s['host_recovery'] ?? '';
    $this->host_reservation_id = $s['host_reservation_id'] ?? '';
    $this->instances = $s['instances'] ?? vec[];
    $this->member_of_service_linked_resource_group = $s['member_of_service_linked_resource_group'] ?? false;
    $this->owner_id = $s['owner_id'] ?? '';
    $this->release_time = $s['release_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class HostInstance {
  public string $instance_id;
  public string $instance_type;
  public string $owner_id;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'instance_type' => string,
    ?'owner_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
  }
}

type HostInstanceList = vec<HostInstance>;

type HostList = vec<Host>;

class HostOffering {
  public ?CurrencyCodeValues $currency_code;
  public int $duration;
  public string $hourly_price;
  public string $instance_family;
  public string $offering_id;
  public ?PaymentOption $payment_option;
  public string $upfront_price;

  public function __construct(shape(
    ?'currency_code' => ?CurrencyCodeValues,
    ?'duration' => int,
    ?'hourly_price' => string,
    ?'instance_family' => string,
    ?'offering_id' => string,
    ?'payment_option' => ?PaymentOption,
    ?'upfront_price' => string,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->hourly_price = $s['hourly_price'] ?? '';
    $this->instance_family = $s['instance_family'] ?? '';
    $this->offering_id = $s['offering_id'] ?? '';
    $this->payment_option = $s['payment_option'] ?? '';
    $this->upfront_price = $s['upfront_price'] ?? '';
  }
}

type HostOfferingSet = vec<HostOffering>;

class HostProperties {
  public int $cores;
  public string $instance_family;
  public string $instance_type;
  public int $sockets;
  public int $total_v_cpus;

  public function __construct(shape(
    ?'cores' => int,
    ?'instance_family' => string,
    ?'instance_type' => string,
    ?'sockets' => int,
    ?'total_v_cpus' => int,
  ) $s = shape()) {
    $this->cores = $s['cores'] ?? 0;
    $this->instance_family = $s['instance_family'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->sockets = $s['sockets'] ?? 0;
    $this->total_v_cpus = $s['total_v_cpus'] ?? 0;
  }
}

type HostRecovery = string;

class HostReservation {
  public int $count;
  public ?CurrencyCodeValues $currency_code;
  public int $duration;
  public ?DateTime $end;
  public ?ResponseHostIdSet $host_id_set;
  public string $host_reservation_id;
  public string $hourly_price;
  public string $instance_family;
  public string $offering_id;
  public ?PaymentOption $payment_option;
  public ?DateTime $start;
  public ?ReservationState $state;
  public ?TagList $tags;
  public string $upfront_price;

  public function __construct(shape(
    ?'count' => int,
    ?'currency_code' => ?CurrencyCodeValues,
    ?'duration' => int,
    ?'end' => ?DateTime,
    ?'host_id_set' => ?ResponseHostIdSet,
    ?'host_reservation_id' => string,
    ?'hourly_price' => string,
    ?'instance_family' => string,
    ?'offering_id' => string,
    ?'payment_option' => ?PaymentOption,
    ?'start' => ?DateTime,
    ?'state' => ?ReservationState,
    ?'tags' => ?TagList,
    ?'upfront_price' => string,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->end = $s['end'] ?? 0;
    $this->host_id_set = $s['host_id_set'] ?? vec[];
    $this->host_reservation_id = $s['host_reservation_id'] ?? '';
    $this->hourly_price = $s['hourly_price'] ?? '';
    $this->instance_family = $s['instance_family'] ?? '';
    $this->offering_id = $s['offering_id'] ?? '';
    $this->payment_option = $s['payment_option'] ?? '';
    $this->start = $s['start'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->upfront_price = $s['upfront_price'] ?? '';
  }
}

type HostReservationId = string;

type HostReservationIdSet = vec<HostReservationId>;

type HostReservationSet = vec<HostReservation>;

type HostTenancy = string;

type HttpTokensState = string;

type HypervisorType = string;

type IKEVersionsList = vec<IKEVersionsListValue>;

class IKEVersionsListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type IKEVersionsRequestList = vec<IKEVersionsRequestListValue>;

class IKEVersionsRequestListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

class IamInstanceProfile {
  public string $arn;
  public string $id;

  public function __construct(shape(
    ?'arn' => string,
    ?'id' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->id = $s['id'] ?? '';
  }
}

class IamInstanceProfileAssociation {
  public string $association_id;
  public ?IamInstanceProfile $iam_instance_profile;
  public string $instance_id;
  public ?IamInstanceProfileAssociationState $state;
  public ?DateTime $timestamp;

  public function __construct(shape(
    ?'association_id' => string,
    ?'iam_instance_profile' => ?IamInstanceProfile,
    ?'instance_id' => string,
    ?'state' => ?IamInstanceProfileAssociationState,
    ?'timestamp' => ?DateTime,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type IamInstanceProfileAssociationId = string;

type IamInstanceProfileAssociationSet = vec<IamInstanceProfileAssociation>;

type IamInstanceProfileAssociationState = string;

class IamInstanceProfileSpecification {
  public string $arn;
  public string $name;

  public function __construct(shape(
    ?'arn' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class IcmpTypeCode {
  public int $code;
  public int $type;

  public function __construct(shape(
    ?'code' => int,
    ?'type' => int,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->type = $s['type'] ?? 0;
  }
}

class IdFormat {
  public ?DateTime $deadline;
  public string $resource;
  public bool $use_long_ids;

  public function __construct(shape(
    ?'deadline' => ?DateTime,
    ?'resource' => string,
    ?'use_long_ids' => bool,
  ) $s = shape()) {
    $this->deadline = $s['deadline'] ?? 0;
    $this->resource = $s['resource'] ?? '';
    $this->use_long_ids = $s['use_long_ids'] ?? false;
  }
}

type IdFormatList = vec<IdFormat>;

class Image {
  public ?ArchitectureValues $architecture;
  public ?BlockDeviceMappingList $block_device_mappings;
  public string $creation_date;
  public string $description;
  public bool $ena_support;
  public ?HypervisorType $hypervisor;
  public string $image_id;
  public string $image_location;
  public string $image_owner_alias;
  public ?ImageTypeValues $image_type;
  public string $kernel_id;
  public string $name;
  public string $owner_id;
  public ?PlatformValues $platform;
  public string $platform_details;
  public ?ProductCodeList $product_codes;
  public bool $public;
  public string $ramdisk_id;
  public string $root_device_name;
  public ?DeviceType $root_device_type;
  public string $sriov_net_support;
  public ?ImageState $state;
  public ?StateReason $state_reason;
  public ?TagList $tags;
  public string $usage_operation;
  public ?VirtualizationType $virtualization_type;

  public function __construct(shape(
    ?'architecture' => ?ArchitectureValues,
    ?'block_device_mappings' => ?BlockDeviceMappingList,
    ?'creation_date' => string,
    ?'description' => string,
    ?'ena_support' => bool,
    ?'hypervisor' => ?HypervisorType,
    ?'image_id' => string,
    ?'image_location' => string,
    ?'image_owner_alias' => string,
    ?'image_type' => ?ImageTypeValues,
    ?'kernel_id' => string,
    ?'name' => string,
    ?'owner_id' => string,
    ?'platform' => ?PlatformValues,
    ?'platform_details' => string,
    ?'product_codes' => ?ProductCodeList,
    ?'public' => bool,
    ?'ramdisk_id' => string,
    ?'root_device_name' => string,
    ?'root_device_type' => ?DeviceType,
    ?'sriov_net_support' => string,
    ?'state' => ?ImageState,
    ?'state_reason' => ?StateReason,
    ?'tags' => ?TagList,
    ?'usage_operation' => string,
    ?'virtualization_type' => ?VirtualizationType,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->creation_date = $s['creation_date'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->ena_support = $s['ena_support'] ?? false;
    $this->hypervisor = $s['hypervisor'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
    $this->image_location = $s['image_location'] ?? '';
    $this->image_owner_alias = $s['image_owner_alias'] ?? '';
    $this->image_type = $s['image_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->platform_details = $s['platform_details'] ?? '';
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->public = $s['public'] ?? false;
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->root_device_name = $s['root_device_name'] ?? '';
    $this->root_device_type = $s['root_device_type'] ?? '';
    $this->sriov_net_support = $s['sriov_net_support'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->state_reason = $s['state_reason'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->usage_operation = $s['usage_operation'] ?? '';
    $this->virtualization_type = $s['virtualization_type'] ?? '';
  }
}

class ImageAttribute {
  public ?BlockDeviceMappingList $block_device_mappings;
  public ?AttributeValue $description;
  public string $image_id;
  public ?AttributeValue $kernel_id;
  public ?LaunchPermissionList $launch_permissions;
  public ?ProductCodeList $product_codes;
  public ?AttributeValue $ramdisk_id;
  public ?AttributeValue $sriov_net_support;

  public function __construct(shape(
    ?'block_device_mappings' => ?BlockDeviceMappingList,
    ?'description' => ?AttributeValue,
    ?'image_id' => string,
    ?'kernel_id' => ?AttributeValue,
    ?'launch_permissions' => ?LaunchPermissionList,
    ?'product_codes' => ?ProductCodeList,
    ?'ramdisk_id' => ?AttributeValue,
    ?'sriov_net_support' => ?AttributeValue,
  ) $s = shape()) {
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->description = $s['description'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? null;
    $this->launch_permissions = $s['launch_permissions'] ?? vec[];
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->ramdisk_id = $s['ramdisk_id'] ?? null;
    $this->sriov_net_support = $s['sriov_net_support'] ?? null;
  }
}

type ImageAttributeName = string;

class ImageDiskContainer {
  public string $description;
  public string $device_name;
  public string $format;
  public ?SnapshotId $snapshot_id;
  public string $url;
  public ?UserBucket $user_bucket;

  public function __construct(shape(
    ?'description' => string,
    ?'device_name' => string,
    ?'format' => string,
    ?'snapshot_id' => ?SnapshotId,
    ?'url' => string,
    ?'user_bucket' => ?UserBucket,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->url = $s['url'] ?? '';
    $this->user_bucket = $s['user_bucket'] ?? null;
  }
}

type ImageDiskContainerList = vec<ImageDiskContainer>;

type ImageId = string;

type ImageIdStringList = vec<ImageId>;

type ImageList = vec<Image>;

type ImageState = string;

type ImageTypeValues = string;

class ImportClientVpnClientCertificateRevocationListRequest {
  public string $certificate_revocation_list;
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'certificate_revocation_list' => string,
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->certificate_revocation_list = $s['certificate_revocation_list'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class ImportClientVpnClientCertificateRevocationListResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ImportImageLicenseConfigurationRequest {
  public string $license_configuration_arn;

  public function __construct(shape(
    ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $s['license_configuration_arn'] ?? '';
  }
}

class ImportImageLicenseConfigurationResponse {
  public string $license_configuration_arn;

  public function __construct(shape(
    ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $s['license_configuration_arn'] ?? '';
  }
}

type ImportImageLicenseSpecificationListRequest = vec<ImportImageLicenseConfigurationRequest>;

type ImportImageLicenseSpecificationListResponse = vec<ImportImageLicenseConfigurationResponse>;

class ImportImageRequest {
  public string $architecture;
  public ?ClientData $client_data;
  public string $client_token;
  public string $description;
  public ?ImageDiskContainerList $disk_containers;
  public bool $dry_run;
  public bool $encrypted;
  public string $hypervisor;
  public ?KmsKeyId $kms_key_id;
  public ?ImportImageLicenseSpecificationListRequest $license_specifications;
  public string $license_type;
  public string $platform;
  public string $role_name;

  public function __construct(shape(
    ?'architecture' => string,
    ?'client_data' => ?ClientData,
    ?'client_token' => string,
    ?'description' => string,
    ?'disk_containers' => ?ImageDiskContainerList,
    ?'dry_run' => bool,
    ?'encrypted' => bool,
    ?'hypervisor' => string,
    ?'kms_key_id' => ?KmsKeyId,
    ?'license_specifications' => ?ImportImageLicenseSpecificationListRequest,
    ?'license_type' => string,
    ?'platform' => string,
    ?'role_name' => string,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->client_data = $s['client_data'] ?? null;
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->disk_containers = $s['disk_containers'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->hypervisor = $s['hypervisor'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_specifications = $s['license_specifications'] ?? vec[];
    $this->license_type = $s['license_type'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class ImportImageResult {
  public string $architecture;
  public string $description;
  public bool $encrypted;
  public string $hypervisor;
  public string $image_id;
  public string $import_task_id;
  public string $kms_key_id;
  public ?ImportImageLicenseSpecificationListResponse $license_specifications;
  public string $license_type;
  public string $platform;
  public string $progress;
  public ?SnapshotDetailList $snapshot_details;
  public string $status;
  public string $status_message;

  public function __construct(shape(
    ?'architecture' => string,
    ?'description' => string,
    ?'encrypted' => bool,
    ?'hypervisor' => string,
    ?'image_id' => string,
    ?'import_task_id' => string,
    ?'kms_key_id' => string,
    ?'license_specifications' => ?ImportImageLicenseSpecificationListResponse,
    ?'license_type' => string,
    ?'platform' => string,
    ?'progress' => string,
    ?'snapshot_details' => ?SnapshotDetailList,
    ?'status' => string,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->hypervisor = $s['hypervisor'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
    $this->import_task_id = $s['import_task_id'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_specifications = $s['license_specifications'] ?? vec[];
    $this->license_type = $s['license_type'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->snapshot_details = $s['snapshot_details'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

class ImportImageTask {
  public string $architecture;
  public string $description;
  public bool $encrypted;
  public string $hypervisor;
  public string $image_id;
  public string $import_task_id;
  public string $kms_key_id;
  public ?ImportImageLicenseSpecificationListResponse $license_specifications;
  public string $license_type;
  public string $platform;
  public string $progress;
  public ?SnapshotDetailList $snapshot_details;
  public string $status;
  public string $status_message;
  public ?TagList $tags;

  public function __construct(shape(
    ?'architecture' => string,
    ?'description' => string,
    ?'encrypted' => bool,
    ?'hypervisor' => string,
    ?'image_id' => string,
    ?'import_task_id' => string,
    ?'kms_key_id' => string,
    ?'license_specifications' => ?ImportImageLicenseSpecificationListResponse,
    ?'license_type' => string,
    ?'platform' => string,
    ?'progress' => string,
    ?'snapshot_details' => ?SnapshotDetailList,
    ?'status' => string,
    ?'status_message' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->hypervisor = $s['hypervisor'] ?? '';
    $this->image_id = $s['image_id'] ?? '';
    $this->import_task_id = $s['import_task_id'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->license_specifications = $s['license_specifications'] ?? vec[];
    $this->license_type = $s['license_type'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->snapshot_details = $s['snapshot_details'] ?? vec[];
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ImportImageTaskId = string;

type ImportImageTaskList = vec<ImportImageTask>;

class ImportInstanceLaunchSpecification {
  public string $additional_info;
  public ?ArchitectureValues $architecture;
  public ?SecurityGroupIdStringList $group_ids;
  public ?SecurityGroupStringList $group_names;
  public ?ShutdownBehavior $instance_initiated_shutdown_behavior;
  public ?InstanceType $instance_type;
  public bool $monitoring;
  public ?Placement $placement;
  public string $private_ip_address;
  public ?SubnetId $subnet_id;
  public ?UserData $user_data;

  public function __construct(shape(
    ?'additional_info' => string,
    ?'architecture' => ?ArchitectureValues,
    ?'group_ids' => ?SecurityGroupIdStringList,
    ?'group_names' => ?SecurityGroupStringList,
    ?'instance_initiated_shutdown_behavior' => ?ShutdownBehavior,
    ?'instance_type' => ?InstanceType,
    ?'monitoring' => bool,
    ?'placement' => ?Placement,
    ?'private_ip_address' => string,
    ?'subnet_id' => ?SubnetId,
    ?'user_data' => ?UserData,
  ) $s = shape()) {
    $this->additional_info = $s['additional_info'] ?? '';
    $this->architecture = $s['architecture'] ?? '';
    $this->group_ids = $s['group_ids'] ?? vec[];
    $this->group_names = $s['group_names'] ?? vec[];
    $this->instance_initiated_shutdown_behavior = $s['instance_initiated_shutdown_behavior'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->monitoring = $s['monitoring'] ?? false;
    $this->placement = $s['placement'] ?? null;
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->user_data = $s['user_data'] ?? null;
  }
}

class ImportInstanceRequest {
  public string $description;
  public ?DiskImageList $disk_images;
  public bool $dry_run;
  public ?ImportInstanceLaunchSpecification $launch_specification;
  public ?PlatformValues $platform;

  public function __construct(shape(
    ?'description' => string,
    ?'disk_images' => ?DiskImageList,
    ?'dry_run' => bool,
    ?'launch_specification' => ?ImportInstanceLaunchSpecification,
    ?'platform' => ?PlatformValues,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->disk_images = $s['disk_images'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->launch_specification = $s['launch_specification'] ?? null;
    $this->platform = $s['platform'] ?? '';
  }
}

class ImportInstanceResult {
  public ?ConversionTask $conversion_task;

  public function __construct(shape(
    ?'conversion_task' => ?ConversionTask,
  ) $s = shape()) {
    $this->conversion_task = $s['conversion_task'] ?? null;
  }
}

class ImportInstanceTaskDetails {
  public string $description;
  public string $instance_id;
  public ?PlatformValues $platform;
  public ?ImportInstanceVolumeDetailSet $volumes;

  public function __construct(shape(
    ?'description' => string,
    ?'instance_id' => string,
    ?'platform' => ?PlatformValues,
    ?'volumes' => ?ImportInstanceVolumeDetailSet,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->volumes = $s['volumes'] ?? vec[];
  }
}

class ImportInstanceVolumeDetailItem {
  public string $availability_zone;
  public ?Long $bytes_converted;
  public string $description;
  public ?DiskImageDescription $image;
  public string $status;
  public string $status_message;
  public ?DiskImageVolumeDescription $volume;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'bytes_converted' => ?Long,
    ?'description' => string,
    ?'image' => ?DiskImageDescription,
    ?'status' => string,
    ?'status_message' => string,
    ?'volume' => ?DiskImageVolumeDescription,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->bytes_converted = $s['bytes_converted'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->image = $s['image'] ?? null;
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->volume = $s['volume'] ?? null;
  }
}

type ImportInstanceVolumeDetailSet = vec<ImportInstanceVolumeDetailItem>;

class ImportKeyPairRequest {
  public bool $dry_run;
  public string $key_name;
  public ?Blob $public_key_material;
  public ?TagSpecificationList $tag_specifications;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'key_name' => string,
    ?'public_key_material' => ?Blob,
    ?'tag_specifications' => ?TagSpecificationList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->key_name = $s['key_name'] ?? '';
    $this->public_key_material = $s['public_key_material'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
  }
}

class ImportKeyPairResult {
  public string $key_fingerprint;
  public string $key_name;
  public string $key_pair_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'key_fingerprint' => string,
    ?'key_name' => string,
    ?'key_pair_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->key_fingerprint = $s['key_fingerprint'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->key_pair_id = $s['key_pair_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ImportSnapshotRequest {
  public ?ClientData $client_data;
  public string $client_token;
  public string $description;
  public ?SnapshotDiskContainer $disk_container;
  public bool $dry_run;
  public bool $encrypted;
  public ?KmsKeyId $kms_key_id;
  public string $role_name;

  public function __construct(shape(
    ?'client_data' => ?ClientData,
    ?'client_token' => string,
    ?'description' => string,
    ?'disk_container' => ?SnapshotDiskContainer,
    ?'dry_run' => bool,
    ?'encrypted' => bool,
    ?'kms_key_id' => ?KmsKeyId,
    ?'role_name' => string,
  ) $s = shape()) {
    $this->client_data = $s['client_data'] ?? null;
    $this->client_token = $s['client_token'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->disk_container = $s['disk_container'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->role_name = $s['role_name'] ?? '';
  }
}

class ImportSnapshotResult {
  public string $description;
  public string $import_task_id;
  public ?SnapshotTaskDetail $snapshot_task_detail;

  public function __construct(shape(
    ?'description' => string,
    ?'import_task_id' => string,
    ?'snapshot_task_detail' => ?SnapshotTaskDetail,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->import_task_id = $s['import_task_id'] ?? '';
    $this->snapshot_task_detail = $s['snapshot_task_detail'] ?? null;
  }
}

class ImportSnapshotTask {
  public string $description;
  public string $import_task_id;
  public ?SnapshotTaskDetail $snapshot_task_detail;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'import_task_id' => string,
    ?'snapshot_task_detail' => ?SnapshotTaskDetail,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->import_task_id = $s['import_task_id'] ?? '';
    $this->snapshot_task_detail = $s['snapshot_task_detail'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ImportSnapshotTaskId = string;

type ImportSnapshotTaskIdList = vec<ImportSnapshotTaskId>;

type ImportSnapshotTaskList = vec<ImportSnapshotTask>;

type ImportTaskId = string;

type ImportTaskIdList = vec<ImportImageTaskId>;

class ImportVolumeRequest {
  public string $availability_zone;
  public string $description;
  public bool $dry_run;
  public ?DiskImageDetail $image;
  public ?VolumeDetail $volume;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'image' => ?DiskImageDetail,
    ?'volume' => ?VolumeDetail,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->image = $s['image'] ?? null;
    $this->volume = $s['volume'] ?? null;
  }
}

class ImportVolumeResult {
  public ?ConversionTask $conversion_task;

  public function __construct(shape(
    ?'conversion_task' => ?ConversionTask,
  ) $s = shape()) {
    $this->conversion_task = $s['conversion_task'] ?? null;
  }
}

class ImportVolumeTaskDetails {
  public string $availability_zone;
  public ?Long $bytes_converted;
  public string $description;
  public ?DiskImageDescription $image;
  public ?DiskImageVolumeDescription $volume;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'bytes_converted' => ?Long,
    ?'description' => string,
    ?'image' => ?DiskImageDescription,
    ?'volume' => ?DiskImageVolumeDescription,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->bytes_converted = $s['bytes_converted'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->image = $s['image'] ?? null;
    $this->volume = $s['volume'] ?? null;
  }
}

class InferenceAcceleratorInfo {
  public ?InferenceDeviceInfoList $accelerators;

  public function __construct(shape(
    ?'accelerators' => ?InferenceDeviceInfoList,
  ) $s = shape()) {
    $this->accelerators = $s['accelerators'] ?? vec[];
  }
}

type InferenceDeviceCount = int;

class InferenceDeviceInfo {
  public ?InferenceDeviceCount $count;
  public ?InferenceDeviceManufacturerName $manufacturer;
  public ?InferenceDeviceName $name;

  public function __construct(shape(
    ?'count' => ?InferenceDeviceCount,
    ?'manufacturer' => ?InferenceDeviceManufacturerName,
    ?'name' => ?InferenceDeviceName,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->manufacturer = $s['manufacturer'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type InferenceDeviceInfoList = vec<InferenceDeviceInfo>;

type InferenceDeviceManufacturerName = string;

type InferenceDeviceName = string;

class Instance {
  public int $ami_launch_index;
  public ?ArchitectureValues $architecture;
  public ?InstanceBlockDeviceMappingList $block_device_mappings;
  public string $capacity_reservation_id;
  public ?CapacityReservationSpecificationResponse $capacity_reservation_specification;
  public string $client_token;
  public ?CpuOptions $cpu_options;
  public bool $ebs_optimized;
  public ?ElasticGpuAssociationList $elastic_gpu_associations;
  public ?ElasticInferenceAcceleratorAssociationList $elastic_inference_accelerator_associations;
  public bool $ena_support;
  public ?HibernationOptions $hibernation_options;
  public ?HypervisorType $hypervisor;
  public ?IamInstanceProfile $iam_instance_profile;
  public string $image_id;
  public string $instance_id;
  public ?InstanceLifecycleType $instance_lifecycle;
  public ?InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public ?DateTime $launch_time;
  public ?LicenseList $licenses;
  public ?InstanceMetadataOptionsResponse $metadata_options;
  public ?Monitoring $monitoring;
  public ?InstanceNetworkInterfaceList $network_interfaces;
  public string $outpost_arn;
  public ?Placement $placement;
  public ?PlatformValues $platform;
  public string $private_dns_name;
  public string $private_ip_address;
  public ?ProductCodeList $product_codes;
  public string $public_dns_name;
  public string $public_ip_address;
  public string $ramdisk_id;
  public string $root_device_name;
  public ?DeviceType $root_device_type;
  public ?GroupIdentifierList $security_groups;
  public bool $source_dest_check;
  public string $spot_instance_request_id;
  public string $sriov_net_support;
  public ?InstanceState $state;
  public ?StateReason $state_reason;
  public string $state_transition_reason;
  public string $subnet_id;
  public ?TagList $tags;
  public ?VirtualizationType $virtualization_type;
  public string $vpc_id;

  public function __construct(shape(
    ?'ami_launch_index' => int,
    ?'architecture' => ?ArchitectureValues,
    ?'block_device_mappings' => ?InstanceBlockDeviceMappingList,
    ?'capacity_reservation_id' => string,
    ?'capacity_reservation_specification' => ?CapacityReservationSpecificationResponse,
    ?'client_token' => string,
    ?'cpu_options' => ?CpuOptions,
    ?'ebs_optimized' => bool,
    ?'elastic_gpu_associations' => ?ElasticGpuAssociationList,
    ?'elastic_inference_accelerator_associations' => ?ElasticInferenceAcceleratorAssociationList,
    ?'ena_support' => bool,
    ?'hibernation_options' => ?HibernationOptions,
    ?'hypervisor' => ?HypervisorType,
    ?'iam_instance_profile' => ?IamInstanceProfile,
    ?'image_id' => string,
    ?'instance_id' => string,
    ?'instance_lifecycle' => ?InstanceLifecycleType,
    ?'instance_type' => ?InstanceType,
    ?'kernel_id' => string,
    ?'key_name' => string,
    ?'launch_time' => ?DateTime,
    ?'licenses' => ?LicenseList,
    ?'metadata_options' => ?InstanceMetadataOptionsResponse,
    ?'monitoring' => ?Monitoring,
    ?'network_interfaces' => ?InstanceNetworkInterfaceList,
    ?'outpost_arn' => string,
    ?'placement' => ?Placement,
    ?'platform' => ?PlatformValues,
    ?'private_dns_name' => string,
    ?'private_ip_address' => string,
    ?'product_codes' => ?ProductCodeList,
    ?'public_dns_name' => string,
    ?'public_ip_address' => string,
    ?'ramdisk_id' => string,
    ?'root_device_name' => string,
    ?'root_device_type' => ?DeviceType,
    ?'security_groups' => ?GroupIdentifierList,
    ?'source_dest_check' => bool,
    ?'spot_instance_request_id' => string,
    ?'sriov_net_support' => string,
    ?'state' => ?InstanceState,
    ?'state_reason' => ?StateReason,
    ?'state_transition_reason' => string,
    ?'subnet_id' => string,
    ?'tags' => ?TagList,
    ?'virtualization_type' => ?VirtualizationType,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->ami_launch_index = $s['ami_launch_index'] ?? 0;
    $this->architecture = $s['architecture'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
    $this->capacity_reservation_specification = $s['capacity_reservation_specification'] ?? null;
    $this->client_token = $s['client_token'] ?? '';
    $this->cpu_options = $s['cpu_options'] ?? null;
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->elastic_gpu_associations = $s['elastic_gpu_associations'] ?? vec[];
    $this->elastic_inference_accelerator_associations = $s['elastic_inference_accelerator_associations'] ?? vec[];
    $this->ena_support = $s['ena_support'] ?? false;
    $this->hibernation_options = $s['hibernation_options'] ?? null;
    $this->hypervisor = $s['hypervisor'] ?? '';
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_lifecycle = $s['instance_lifecycle'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->launch_time = $s['launch_time'] ?? 0;
    $this->licenses = $s['licenses'] ?? vec[];
    $this->metadata_options = $s['metadata_options'] ?? null;
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->placement = $s['placement'] ?? null;
    $this->platform = $s['platform'] ?? '';
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->public_dns_name = $s['public_dns_name'] ?? '';
    $this->public_ip_address = $s['public_ip_address'] ?? '';
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->root_device_name = $s['root_device_name'] ?? '';
    $this->root_device_type = $s['root_device_type'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->source_dest_check = $s['source_dest_check'] ?? false;
    $this->spot_instance_request_id = $s['spot_instance_request_id'] ?? '';
    $this->sriov_net_support = $s['sriov_net_support'] ?? '';
    $this->state = $s['state'] ?? null;
    $this->state_reason = $s['state_reason'] ?? null;
    $this->state_transition_reason = $s['state_transition_reason'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->virtualization_type = $s['virtualization_type'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class InstanceAttribute {
  public ?InstanceBlockDeviceMappingList $block_device_mappings;
  public ?AttributeBooleanValue $disable_api_termination;
  public ?AttributeBooleanValue $ebs_optimized;
  public ?AttributeBooleanValue $ena_support;
  public ?GroupIdentifierList $groups;
  public string $instance_id;
  public ?AttributeValue $instance_initiated_shutdown_behavior;
  public ?AttributeValue $instance_type;
  public ?AttributeValue $kernel_id;
  public ?ProductCodeList $product_codes;
  public ?AttributeValue $ramdisk_id;
  public ?AttributeValue $root_device_name;
  public ?AttributeBooleanValue $source_dest_check;
  public ?AttributeValue $sriov_net_support;
  public ?AttributeValue $user_data;

  public function __construct(shape(
    ?'block_device_mappings' => ?InstanceBlockDeviceMappingList,
    ?'disable_api_termination' => ?AttributeBooleanValue,
    ?'ebs_optimized' => ?AttributeBooleanValue,
    ?'ena_support' => ?AttributeBooleanValue,
    ?'groups' => ?GroupIdentifierList,
    ?'instance_id' => string,
    ?'instance_initiated_shutdown_behavior' => ?AttributeValue,
    ?'instance_type' => ?AttributeValue,
    ?'kernel_id' => ?AttributeValue,
    ?'product_codes' => ?ProductCodeList,
    ?'ramdisk_id' => ?AttributeValue,
    ?'root_device_name' => ?AttributeValue,
    ?'source_dest_check' => ?AttributeBooleanValue,
    ?'sriov_net_support' => ?AttributeValue,
    ?'user_data' => ?AttributeValue,
  ) $s = shape()) {
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->disable_api_termination = $s['disable_api_termination'] ?? null;
    $this->ebs_optimized = $s['ebs_optimized'] ?? null;
    $this->ena_support = $s['ena_support'] ?? null;
    $this->groups = $s['groups'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_initiated_shutdown_behavior = $s['instance_initiated_shutdown_behavior'] ?? null;
    $this->instance_type = $s['instance_type'] ?? null;
    $this->kernel_id = $s['kernel_id'] ?? null;
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->ramdisk_id = $s['ramdisk_id'] ?? null;
    $this->root_device_name = $s['root_device_name'] ?? null;
    $this->source_dest_check = $s['source_dest_check'] ?? null;
    $this->sriov_net_support = $s['sriov_net_support'] ?? null;
    $this->user_data = $s['user_data'] ?? null;
  }
}

type InstanceAttributeName = string;

class InstanceBlockDeviceMapping {
  public string $device_name;
  public ?EbsInstanceBlockDevice $ebs;

  public function __construct(shape(
    ?'device_name' => string,
    ?'ebs' => ?EbsInstanceBlockDevice,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->ebs = $s['ebs'] ?? null;
  }
}

type InstanceBlockDeviceMappingList = vec<InstanceBlockDeviceMapping>;

class InstanceBlockDeviceMappingSpecification {
  public string $device_name;
  public ?EbsInstanceBlockDeviceSpecification $ebs;
  public string $no_device;
  public string $virtual_name;

  public function __construct(shape(
    ?'device_name' => string,
    ?'ebs' => ?EbsInstanceBlockDeviceSpecification,
    ?'no_device' => string,
    ?'virtual_name' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->ebs = $s['ebs'] ?? null;
    $this->no_device = $s['no_device'] ?? '';
    $this->virtual_name = $s['virtual_name'] ?? '';
  }
}

type InstanceBlockDeviceMappingSpecificationList = vec<InstanceBlockDeviceMappingSpecification>;

class InstanceCapacity {
  public int $available_capacity;
  public string $instance_type;
  public int $total_capacity;

  public function __construct(shape(
    ?'available_capacity' => int,
    ?'instance_type' => string,
    ?'total_capacity' => int,
  ) $s = shape()) {
    $this->available_capacity = $s['available_capacity'] ?? 0;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->total_capacity = $s['total_capacity'] ?? 0;
  }
}

class InstanceCount {
  public int $instance_count;
  public ?ListingState $state;

  public function __construct(shape(
    ?'instance_count' => int,
    ?'state' => ?ListingState,
  ) $s = shape()) {
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->state = $s['state'] ?? '';
  }
}

type InstanceCountList = vec<InstanceCount>;

class InstanceCreditSpecification {
  public string $cpu_credits;
  public string $instance_id;

  public function __construct(shape(
    ?'cpu_credits' => string,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->cpu_credits = $s['cpu_credits'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

type InstanceCreditSpecificationList = vec<InstanceCreditSpecification>;

type InstanceCreditSpecificationListRequest = vec<InstanceCreditSpecificationRequest>;

class InstanceCreditSpecificationRequest {
  public string $cpu_credits;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'cpu_credits' => string,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->cpu_credits = $s['cpu_credits'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

type InstanceEventId = string;

class InstanceExportDetails {
  public string $instance_id;
  public ?ExportEnvironment $target_environment;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'target_environment' => ?ExportEnvironment,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->target_environment = $s['target_environment'] ?? '';
  }
}

class InstanceFamilyCreditSpecification {
  public string $cpu_credits;
  public ?UnlimitedSupportedInstanceFamily $instance_family;

  public function __construct(shape(
    ?'cpu_credits' => string,
    ?'instance_family' => ?UnlimitedSupportedInstanceFamily,
  ) $s = shape()) {
    $this->cpu_credits = $s['cpu_credits'] ?? '';
    $this->instance_family = $s['instance_family'] ?? '';
  }
}

type InstanceHealthStatus = string;

type InstanceId = string;

type InstanceIdSet = vec<String>;

type InstanceIdStringList = vec<InstanceId>;

type InstanceIdsSet = vec<InstanceId>;

type InstanceInterruptionBehavior = string;

class InstanceIpv6Address {
  public string $ipv_6_address;

  public function __construct(shape(
    ?'ipv_6_address' => string,
  ) $s = shape()) {
    $this->ipv_6_address = $s['ipv_6_address'] ?? '';
  }
}

type InstanceIpv6AddressList = vec<InstanceIpv6Address>;

type InstanceIpv6AddressListRequest = vec<InstanceIpv6AddressRequest>;

class InstanceIpv6AddressRequest {
  public string $ipv_6_address;

  public function __construct(shape(
    ?'ipv_6_address' => string,
  ) $s = shape()) {
    $this->ipv_6_address = $s['ipv_6_address'] ?? '';
  }
}

type InstanceLifecycle = string;

type InstanceLifecycleType = string;

type InstanceList = vec<Instance>;

class InstanceMarketOptionsRequest {
  public ?MarketType $market_type;
  public ?SpotMarketOptions $spot_options;

  public function __construct(shape(
    ?'market_type' => ?MarketType,
    ?'spot_options' => ?SpotMarketOptions,
  ) $s = shape()) {
    $this->market_type = $s['market_type'] ?? '';
    $this->spot_options = $s['spot_options'] ?? null;
  }
}

type InstanceMatchCriteria = string;

type InstanceMetadataEndpointState = string;

class InstanceMetadataOptionsRequest {
  public ?InstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public ?HttpTokensState $http_tokens;

  public function __construct(shape(
    ?'http_endpoint' => ?InstanceMetadataEndpointState,
    ?'http_put_response_hop_limit' => int,
    ?'http_tokens' => ?HttpTokensState,
  ) $s = shape()) {
    $this->http_endpoint = $s['http_endpoint'] ?? '';
    $this->http_put_response_hop_limit = $s['http_put_response_hop_limit'] ?? 0;
    $this->http_tokens = $s['http_tokens'] ?? '';
  }
}

class InstanceMetadataOptionsResponse {
  public ?InstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public ?HttpTokensState $http_tokens;
  public ?InstanceMetadataOptionsState $state;

  public function __construct(shape(
    ?'http_endpoint' => ?InstanceMetadataEndpointState,
    ?'http_put_response_hop_limit' => int,
    ?'http_tokens' => ?HttpTokensState,
    ?'state' => ?InstanceMetadataOptionsState,
  ) $s = shape()) {
    $this->http_endpoint = $s['http_endpoint'] ?? '';
    $this->http_put_response_hop_limit = $s['http_put_response_hop_limit'] ?? 0;
    $this->http_tokens = $s['http_tokens'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type InstanceMetadataOptionsState = string;

class InstanceMonitoring {
  public string $instance_id;
  public ?Monitoring $monitoring;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'monitoring' => ?Monitoring,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->monitoring = $s['monitoring'] ?? null;
  }
}

type InstanceMonitoringList = vec<InstanceMonitoring>;

class InstanceNetworkInterface {
  public ?InstanceNetworkInterfaceAssociation $association;
  public ?InstanceNetworkInterfaceAttachment $attachment;
  public string $description;
  public ?GroupIdentifierList $groups;
  public string $interface_type;
  public ?InstanceIpv6AddressList $ipv_6_addresses;
  public string $mac_address;
  public string $network_interface_id;
  public string $owner_id;
  public string $private_dns_name;
  public string $private_ip_address;
  public ?InstancePrivateIpAddressList $private_ip_addresses;
  public bool $source_dest_check;
  public ?NetworkInterfaceStatus $status;
  public string $subnet_id;
  public string $vpc_id;

  public function __construct(shape(
    ?'association' => ?InstanceNetworkInterfaceAssociation,
    ?'attachment' => ?InstanceNetworkInterfaceAttachment,
    ?'description' => string,
    ?'groups' => ?GroupIdentifierList,
    ?'interface_type' => string,
    ?'ipv_6_addresses' => ?InstanceIpv6AddressList,
    ?'mac_address' => string,
    ?'network_interface_id' => string,
    ?'owner_id' => string,
    ?'private_dns_name' => string,
    ?'private_ip_address' => string,
    ?'private_ip_addresses' => ?InstancePrivateIpAddressList,
    ?'source_dest_check' => bool,
    ?'status' => ?NetworkInterfaceStatus,
    ?'subnet_id' => string,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->association = $s['association'] ?? null;
    $this->attachment = $s['attachment'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->groups = $s['groups'] ?? vec[];
    $this->interface_type = $s['interface_type'] ?? '';
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->mac_address = $s['mac_address'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->source_dest_check = $s['source_dest_check'] ?? false;
    $this->status = $s['status'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class InstanceNetworkInterfaceAssociation {
  public string $ip_owner_id;
  public string $public_dns_name;
  public string $public_ip;

  public function __construct(shape(
    ?'ip_owner_id' => string,
    ?'public_dns_name' => string,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->ip_owner_id = $s['ip_owner_id'] ?? '';
    $this->public_dns_name = $s['public_dns_name'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

class InstanceNetworkInterfaceAttachment {
  public ?DateTime $attach_time;
  public string $attachment_id;
  public bool $delete_on_termination;
  public int $device_index;
  public ?AttachmentStatus $status;

  public function __construct(shape(
    ?'attach_time' => ?DateTime,
    ?'attachment_id' => string,
    ?'delete_on_termination' => bool,
    ?'device_index' => int,
    ?'status' => ?AttachmentStatus,
  ) $s = shape()) {
    $this->attach_time = $s['attach_time'] ?? 0;
    $this->attachment_id = $s['attachment_id'] ?? '';
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->device_index = $s['device_index'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type InstanceNetworkInterfaceList = vec<InstanceNetworkInterface>;

class InstanceNetworkInterfaceSpecification {
  public bool $associate_public_ip_address;
  public bool $delete_on_termination;
  public string $description;
  public int $device_index;
  public ?SecurityGroupIdStringList $groups;
  public string $interface_type;
  public int $ipv_6_address_count;
  public ?InstanceIpv6AddressList $ipv_6_addresses;
  public string $network_interface_id;
  public string $private_ip_address;
  public ?PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public string $subnet_id;

  public function __construct(shape(
    ?'associate_public_ip_address' => bool,
    ?'delete_on_termination' => bool,
    ?'description' => string,
    ?'device_index' => int,
    ?'groups' => ?SecurityGroupIdStringList,
    ?'interface_type' => string,
    ?'ipv_6_address_count' => int,
    ?'ipv_6_addresses' => ?InstanceIpv6AddressList,
    ?'network_interface_id' => string,
    ?'private_ip_address' => string,
    ?'private_ip_addresses' => ?PrivateIpAddressSpecificationList,
    ?'secondary_private_ip_address_count' => int,
    ?'subnet_id' => string,
  ) $s = shape()) {
    $this->associate_public_ip_address = $s['associate_public_ip_address'] ?? false;
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->device_index = $s['device_index'] ?? 0;
    $this->groups = $s['groups'] ?? vec[];
    $this->interface_type = $s['interface_type'] ?? '';
    $this->ipv_6_address_count = $s['ipv_6_address_count'] ?? 0;
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->secondary_private_ip_address_count = $s['secondary_private_ip_address_count'] ?? 0;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type InstanceNetworkInterfaceSpecificationList = vec<InstanceNetworkInterfaceSpecification>;

class InstancePrivateIpAddress {
  public ?InstanceNetworkInterfaceAssociation $association;
  public bool $primary;
  public string $private_dns_name;
  public string $private_ip_address;

  public function __construct(shape(
    ?'association' => ?InstanceNetworkInterfaceAssociation,
    ?'primary' => bool,
    ?'private_dns_name' => string,
    ?'private_ip_address' => string,
  ) $s = shape()) {
    $this->association = $s['association'] ?? null;
    $this->primary = $s['primary'] ?? false;
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
  }
}

type InstancePrivateIpAddressList = vec<InstancePrivateIpAddress>;

class InstanceSpecification {
  public bool $exclude_boot_volume;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'exclude_boot_volume' => bool,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->exclude_boot_volume = $s['exclude_boot_volume'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class InstanceState {
  public int $code;
  public ?InstanceStateName $name;

  public function __construct(shape(
    ?'code' => int,
    ?'name' => ?InstanceStateName,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

class InstanceStateChange {
  public ?InstanceState $current_state;
  public string $instance_id;
  public ?InstanceState $previous_state;

  public function __construct(shape(
    ?'current_state' => ?InstanceState,
    ?'instance_id' => string,
    ?'previous_state' => ?InstanceState,
  ) $s = shape()) {
    $this->current_state = $s['current_state'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->previous_state = $s['previous_state'] ?? null;
  }
}

type InstanceStateChangeList = vec<InstanceStateChange>;

type InstanceStateName = string;

class InstanceStatus {
  public string $availability_zone;
  public ?InstanceStatusEventList $events;
  public string $instance_id;
  public ?InstanceState $instance_state;
  public ?InstanceStatusSummary $instance_status;
  public string $outpost_arn;
  public ?InstanceStatusSummary $system_status;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'events' => ?InstanceStatusEventList,
    ?'instance_id' => string,
    ?'instance_state' => ?InstanceState,
    ?'instance_status' => ?InstanceStatusSummary,
    ?'outpost_arn' => string,
    ?'system_status' => ?InstanceStatusSummary,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->events = $s['events'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_state = $s['instance_state'] ?? null;
    $this->instance_status = $s['instance_status'] ?? null;
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->system_status = $s['system_status'] ?? null;
  }
}

class InstanceStatusDetails {
  public ?DateTime $impaired_since;
  public ?StatusName $name;
  public ?StatusType $status;

  public function __construct(shape(
    ?'impaired_since' => ?DateTime,
    ?'name' => ?StatusName,
    ?'status' => ?StatusType,
  ) $s = shape()) {
    $this->impaired_since = $s['impaired_since'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type InstanceStatusDetailsList = vec<InstanceStatusDetails>;

class InstanceStatusEvent {
  public ?EventCode $code;
  public string $description;
  public ?InstanceEventId $instance_event_id;
  public ?DateTime $not_after;
  public ?DateTime $not_before;
  public ?DateTime $not_before_deadline;

  public function __construct(shape(
    ?'code' => ?EventCode,
    ?'description' => string,
    ?'instance_event_id' => ?InstanceEventId,
    ?'not_after' => ?DateTime,
    ?'not_before' => ?DateTime,
    ?'not_before_deadline' => ?DateTime,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->instance_event_id = $s['instance_event_id'] ?? '';
    $this->not_after = $s['not_after'] ?? 0;
    $this->not_before = $s['not_before'] ?? 0;
    $this->not_before_deadline = $s['not_before_deadline'] ?? 0;
  }
}

type InstanceStatusEventList = vec<InstanceStatusEvent>;

type InstanceStatusList = vec<InstanceStatus>;

class InstanceStatusSummary {
  public ?InstanceStatusDetailsList $details;
  public ?SummaryStatus $status;

  public function __construct(shape(
    ?'details' => ?InstanceStatusDetailsList,
    ?'status' => ?SummaryStatus,
  ) $s = shape()) {
    $this->details = $s['details'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

type InstanceStorageFlag = bool;

class InstanceStorageInfo {
  public ?DiskInfoList $disks;
  public ?DiskSize $total_size_in_gb;

  public function __construct(shape(
    ?'disks' => ?DiskInfoList,
    ?'total_size_in_gb' => ?DiskSize,
  ) $s = shape()) {
    $this->disks = $s['disks'] ?? vec[];
    $this->total_size_in_gb = $s['total_size_in_gb'] ?? 0;
  }
}

type InstanceTagKeySet = vec<String>;

class InstanceTagNotificationAttribute {
  public bool $include_all_tags_of_instance;
  public ?InstanceTagKeySet $instance_tag_keys;

  public function __construct(shape(
    ?'include_all_tags_of_instance' => bool,
    ?'instance_tag_keys' => ?InstanceTagKeySet,
  ) $s = shape()) {
    $this->include_all_tags_of_instance = $s['include_all_tags_of_instance'] ?? false;
    $this->instance_tag_keys = $s['instance_tag_keys'] ?? vec[];
  }
}

type InstanceType = string;

type InstanceTypeHypervisor = string;

class InstanceTypeInfo {
  public ?AutoRecoveryFlag $auto_recovery_supported;
  public ?BareMetalFlag $bare_metal;
  public ?BurstablePerformanceFlag $burstable_performance_supported;
  public ?CurrentGenerationFlag $current_generation;
  public ?DedicatedHostFlag $dedicated_hosts_supported;
  public ?EbsInfo $ebs_info;
  public ?FpgaInfo $fpga_info;
  public ?FreeTierEligibleFlag $free_tier_eligible;
  public ?GpuInfo $gpu_info;
  public ?HibernationFlag $hibernation_supported;
  public ?InstanceTypeHypervisor $hypervisor;
  public ?InferenceAcceleratorInfo $inference_accelerator_info;
  public ?InstanceStorageInfo $instance_storage_info;
  public ?InstanceStorageFlag $instance_storage_supported;
  public ?InstanceType $instance_type;
  public ?MemoryInfo $memory_info;
  public ?NetworkInfo $network_info;
  public ?PlacementGroupInfo $placement_group_info;
  public ?ProcessorInfo $processor_info;
  public ?RootDeviceTypeList $supported_root_device_types;
  public ?UsageClassTypeList $supported_usage_classes;
  public ?VCpuInfo $v_cpu_info;

  public function __construct(shape(
    ?'auto_recovery_supported' => ?AutoRecoveryFlag,
    ?'bare_metal' => ?BareMetalFlag,
    ?'burstable_performance_supported' => ?BurstablePerformanceFlag,
    ?'current_generation' => ?CurrentGenerationFlag,
    ?'dedicated_hosts_supported' => ?DedicatedHostFlag,
    ?'ebs_info' => ?EbsInfo,
    ?'fpga_info' => ?FpgaInfo,
    ?'free_tier_eligible' => ?FreeTierEligibleFlag,
    ?'gpu_info' => ?GpuInfo,
    ?'hibernation_supported' => ?HibernationFlag,
    ?'hypervisor' => ?InstanceTypeHypervisor,
    ?'inference_accelerator_info' => ?InferenceAcceleratorInfo,
    ?'instance_storage_info' => ?InstanceStorageInfo,
    ?'instance_storage_supported' => ?InstanceStorageFlag,
    ?'instance_type' => ?InstanceType,
    ?'memory_info' => ?MemoryInfo,
    ?'network_info' => ?NetworkInfo,
    ?'placement_group_info' => ?PlacementGroupInfo,
    ?'processor_info' => ?ProcessorInfo,
    ?'supported_root_device_types' => ?RootDeviceTypeList,
    ?'supported_usage_classes' => ?UsageClassTypeList,
    ?'v_cpu_info' => ?VCpuInfo,
  ) $s = shape()) {
    $this->auto_recovery_supported = $s['auto_recovery_supported'] ?? false;
    $this->bare_metal = $s['bare_metal'] ?? false;
    $this->burstable_performance_supported = $s['burstable_performance_supported'] ?? false;
    $this->current_generation = $s['current_generation'] ?? false;
    $this->dedicated_hosts_supported = $s['dedicated_hosts_supported'] ?? false;
    $this->ebs_info = $s['ebs_info'] ?? null;
    $this->fpga_info = $s['fpga_info'] ?? null;
    $this->free_tier_eligible = $s['free_tier_eligible'] ?? false;
    $this->gpu_info = $s['gpu_info'] ?? null;
    $this->hibernation_supported = $s['hibernation_supported'] ?? false;
    $this->hypervisor = $s['hypervisor'] ?? '';
    $this->inference_accelerator_info = $s['inference_accelerator_info'] ?? null;
    $this->instance_storage_info = $s['instance_storage_info'] ?? null;
    $this->instance_storage_supported = $s['instance_storage_supported'] ?? false;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->memory_info = $s['memory_info'] ?? null;
    $this->network_info = $s['network_info'] ?? null;
    $this->placement_group_info = $s['placement_group_info'] ?? null;
    $this->processor_info = $s['processor_info'] ?? null;
    $this->supported_root_device_types = $s['supported_root_device_types'] ?? vec[];
    $this->supported_usage_classes = $s['supported_usage_classes'] ?? vec[];
    $this->v_cpu_info = $s['v_cpu_info'] ?? null;
  }
}

type InstanceTypeInfoList = vec<InstanceTypeInfo>;

type InstanceTypeList = vec<InstanceType>;

class InstanceTypeOffering {
  public ?InstanceType $instance_type;
  public ?Location $location;
  public ?LocationType $location_type;

  public function __construct(shape(
    ?'instance_type' => ?InstanceType,
    ?'location' => ?Location,
    ?'location_type' => ?LocationType,
  ) $s = shape()) {
    $this->instance_type = $s['instance_type'] ?? '';
    $this->location = $s['location'] ?? '';
    $this->location_type = $s['location_type'] ?? '';
  }
}

type InstanceTypeOfferingsList = vec<InstanceTypeOffering>;

class InstanceUsage {
  public string $account_id;
  public int $used_instance_count;

  public function __construct(shape(
    ?'account_id' => string,
    ?'used_instance_count' => int,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->used_instance_count = $s['used_instance_count'] ?? 0;
  }
}

type InstanceUsageSet = vec<InstanceUsage>;

type Integer = int;

type InterfacePermissionType = string;

class InternetGateway {
  public ?InternetGatewayAttachmentList $attachments;
  public string $internet_gateway_id;
  public string $owner_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'attachments' => ?InternetGatewayAttachmentList,
    ?'internet_gateway_id' => string,
    ?'owner_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->attachments = $s['attachments'] ?? vec[];
    $this->internet_gateway_id = $s['internet_gateway_id'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class InternetGatewayAttachment {
  public ?AttachmentStatus $state;
  public string $vpc_id;

  public function __construct(shape(
    ?'state' => ?AttachmentStatus,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type InternetGatewayAttachmentList = vec<InternetGatewayAttachment>;

type InternetGatewayId = string;

type InternetGatewayIdList = vec<InternetGatewayId>;

type InternetGatewayList = vec<InternetGateway>;

class IpPermission {
  public int $from_port;
  public string $ip_protocol;
  public ?IpRangeList $ip_ranges;
  public ?Ipv6RangeList $ipv_6_ranges;
  public ?PrefixListIdList $prefix_list_ids;
  public int $to_port;
  public ?UserIdGroupPairList $user_id_group_pairs;

  public function __construct(shape(
    ?'from_port' => int,
    ?'ip_protocol' => string,
    ?'ip_ranges' => ?IpRangeList,
    ?'ipv_6_ranges' => ?Ipv6RangeList,
    ?'prefix_list_ids' => ?PrefixListIdList,
    ?'to_port' => int,
    ?'user_id_group_pairs' => ?UserIdGroupPairList,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->ip_protocol = $s['ip_protocol'] ?? '';
    $this->ip_ranges = $s['ip_ranges'] ?? vec[];
    $this->ipv_6_ranges = $s['ipv_6_ranges'] ?? vec[];
    $this->prefix_list_ids = $s['prefix_list_ids'] ?? vec[];
    $this->to_port = $s['to_port'] ?? 0;
    $this->user_id_group_pairs = $s['user_id_group_pairs'] ?? vec[];
  }
}

type IpPermissionList = vec<IpPermission>;

class IpRange {
  public string $cidr_ip;
  public string $description;

  public function __construct(shape(
    ?'cidr_ip' => string,
    ?'description' => string,
  ) $s = shape()) {
    $this->cidr_ip = $s['cidr_ip'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

type IpRangeList = vec<IpRange>;

type IpRanges = vec<String>;

type Ipv4PoolEc2Id = string;

type Ipv6Address = string;

type Ipv6AddressList = vec<String>;

class Ipv6CidrAssociation {
  public string $associated_resource;
  public string $ipv_6_cidr;

  public function __construct(shape(
    ?'associated_resource' => string,
    ?'ipv_6_cidr' => string,
  ) $s = shape()) {
    $this->associated_resource = $s['associated_resource'] ?? '';
    $this->ipv_6_cidr = $s['ipv_6_cidr'] ?? '';
  }
}

type Ipv6CidrAssociationSet = vec<Ipv6CidrAssociation>;

class Ipv6CidrBlock {
  public string $ipv_6_cidr_block;

  public function __construct(shape(
    ?'ipv_6_cidr_block' => string,
  ) $s = shape()) {
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
  }
}

type Ipv6CidrBlockSet = vec<Ipv6CidrBlock>;

type Ipv6Flag = bool;

class Ipv6Pool {
  public string $description;
  public ?PoolCidrBlocksSet $pool_cidr_blocks;
  public string $pool_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'description' => string,
    ?'pool_cidr_blocks' => ?PoolCidrBlocksSet,
    ?'pool_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->pool_cidr_blocks = $s['pool_cidr_blocks'] ?? vec[];
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type Ipv6PoolEc2Id = string;

type Ipv6PoolIdList = vec<Ipv6PoolEc2Id>;

type Ipv6PoolMaxResults = int;

type Ipv6PoolSet = vec<Ipv6Pool>;

class Ipv6Range {
  public string $cidr_ipv_6;
  public string $description;

  public function __construct(shape(
    ?'cidr_ipv_6' => string,
    ?'description' => string,
  ) $s = shape()) {
    $this->cidr_ipv_6 = $s['cidr_ipv_6'] ?? '';
    $this->description = $s['description'] ?? '';
  }
}

type Ipv6RangeList = vec<Ipv6Range>;

type Ipv6SupportValue = string;

type KernelId = string;

type KeyNameStringList = vec<KeyPairName>;

class KeyPair {
  public string $key_fingerprint;
  public ?SensitiveUserData $key_material;
  public string $key_name;
  public string $key_pair_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'key_fingerprint' => string,
    ?'key_material' => ?SensitiveUserData,
    ?'key_name' => string,
    ?'key_pair_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->key_fingerprint = $s['key_fingerprint'] ?? '';
    $this->key_material = $s['key_material'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->key_pair_id = $s['key_pair_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type KeyPairId = string;

type KeyPairIdStringList = vec<KeyPairId>;

class KeyPairInfo {
  public string $key_fingerprint;
  public string $key_name;
  public string $key_pair_id;
  public ?TagList $tags;

  public function __construct(shape(
    ?'key_fingerprint' => string,
    ?'key_name' => string,
    ?'key_pair_id' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->key_fingerprint = $s['key_fingerprint'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->key_pair_id = $s['key_pair_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type KeyPairList = vec<KeyPairInfo>;

type KeyPairName = string;

type KmsKeyId = string;

class LastError {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class LaunchPermission {
  public ?PermissionGroup $group;
  public string $user_id;

  public function __construct(shape(
    ?'group' => ?PermissionGroup,
    ?'user_id' => string,
  ) $s = shape()) {
    $this->group = $s['group'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

type LaunchPermissionList = vec<LaunchPermission>;

class LaunchPermissionModifications {
  public ?LaunchPermissionList $add;
  public ?LaunchPermissionList $remove;

  public function __construct(shape(
    ?'add' => ?LaunchPermissionList,
    ?'remove' => ?LaunchPermissionList,
  ) $s = shape()) {
    $this->add = $s['add'] ?? vec[];
    $this->remove = $s['remove'] ?? vec[];
  }
}

class LaunchSpecification {
  public string $addressing_type;
  public ?BlockDeviceMappingList $block_device_mappings;
  public bool $ebs_optimized;
  public ?IamInstanceProfileSpecification $iam_instance_profile;
  public string $image_id;
  public ?InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public ?RunInstancesMonitoringEnabled $monitoring;
  public ?InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public ?SpotPlacement $placement;
  public string $ramdisk_id;
  public ?GroupIdentifierList $security_groups;
  public string $subnet_id;
  public string $user_data;

  public function __construct(shape(
    ?'addressing_type' => string,
    ?'block_device_mappings' => ?BlockDeviceMappingList,
    ?'ebs_optimized' => bool,
    ?'iam_instance_profile' => ?IamInstanceProfileSpecification,
    ?'image_id' => string,
    ?'instance_type' => ?InstanceType,
    ?'kernel_id' => string,
    ?'key_name' => string,
    ?'monitoring' => ?RunInstancesMonitoringEnabled,
    ?'network_interfaces' => ?InstanceNetworkInterfaceSpecificationList,
    ?'placement' => ?SpotPlacement,
    ?'ramdisk_id' => string,
    ?'security_groups' => ?GroupIdentifierList,
    ?'subnet_id' => string,
    ?'user_data' => string,
  ) $s = shape()) {
    $this->addressing_type = $s['addressing_type'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->placement = $s['placement'] ?? null;
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->user_data = $s['user_data'] ?? '';
  }
}

type LaunchSpecsList = vec<SpotFleetLaunchSpecification>;

class LaunchTemplate {
  public ?DateTime $create_time;
  public string $created_by;
  public ?Long $default_version_number;
  public ?Long $latest_version_number;
  public string $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'create_time' => ?DateTime,
    ?'created_by' => string,
    ?'default_version_number' => ?Long,
    ?'latest_version_number' => ?Long,
    ?'launch_template_id' => string,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->create_time = $s['create_time'] ?? 0;
    $this->created_by = $s['created_by'] ?? '';
    $this->default_version_number = $s['default_version_number'] ?? 0;
    $this->latest_version_number = $s['latest_version_number'] ?? 0;
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class LaunchTemplateAndOverridesResponse {
  public ?FleetLaunchTemplateSpecification $launch_template_specification;
  public ?FleetLaunchTemplateOverrides $overrides;

  public function __construct(shape(
    ?'launch_template_specification' => ?FleetLaunchTemplateSpecification,
    ?'overrides' => ?FleetLaunchTemplateOverrides,
  ) $s = shape()) {
    $this->launch_template_specification = $s['launch_template_specification'] ?? null;
    $this->overrides = $s['overrides'] ?? null;
  }
}

class LaunchTemplateBlockDeviceMapping {
  public string $device_name;
  public ?LaunchTemplateEbsBlockDevice $ebs;
  public string $no_device;
  public string $virtual_name;

  public function __construct(shape(
    ?'device_name' => string,
    ?'ebs' => ?LaunchTemplateEbsBlockDevice,
    ?'no_device' => string,
    ?'virtual_name' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->ebs = $s['ebs'] ?? null;
    $this->no_device = $s['no_device'] ?? '';
    $this->virtual_name = $s['virtual_name'] ?? '';
  }
}

type LaunchTemplateBlockDeviceMappingList = vec<LaunchTemplateBlockDeviceMapping>;

class LaunchTemplateBlockDeviceMappingRequest {
  public string $device_name;
  public ?LaunchTemplateEbsBlockDeviceRequest $ebs;
  public string $no_device;
  public string $virtual_name;

  public function __construct(shape(
    ?'device_name' => string,
    ?'ebs' => ?LaunchTemplateEbsBlockDeviceRequest,
    ?'no_device' => string,
    ?'virtual_name' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->ebs = $s['ebs'] ?? null;
    $this->no_device = $s['no_device'] ?? '';
    $this->virtual_name = $s['virtual_name'] ?? '';
  }
}

type LaunchTemplateBlockDeviceMappingRequestList = vec<LaunchTemplateBlockDeviceMappingRequest>;

class LaunchTemplateCapacityReservationSpecificationRequest {
  public ?CapacityReservationPreference $capacity_reservation_preference;
  public ?CapacityReservationTarget $capacity_reservation_target;

  public function __construct(shape(
    ?'capacity_reservation_preference' => ?CapacityReservationPreference,
    ?'capacity_reservation_target' => ?CapacityReservationTarget,
  ) $s = shape()) {
    $this->capacity_reservation_preference = $s['capacity_reservation_preference'] ?? '';
    $this->capacity_reservation_target = $s['capacity_reservation_target'] ?? null;
  }
}

class LaunchTemplateCapacityReservationSpecificationResponse {
  public ?CapacityReservationPreference $capacity_reservation_preference;
  public ?CapacityReservationTargetResponse $capacity_reservation_target;

  public function __construct(shape(
    ?'capacity_reservation_preference' => ?CapacityReservationPreference,
    ?'capacity_reservation_target' => ?CapacityReservationTargetResponse,
  ) $s = shape()) {
    $this->capacity_reservation_preference = $s['capacity_reservation_preference'] ?? '';
    $this->capacity_reservation_target = $s['capacity_reservation_target'] ?? null;
  }
}

class LaunchTemplateConfig {
  public ?FleetLaunchTemplateSpecification $launch_template_specification;
  public ?LaunchTemplateOverridesList $overrides;

  public function __construct(shape(
    ?'launch_template_specification' => ?FleetLaunchTemplateSpecification,
    ?'overrides' => ?LaunchTemplateOverridesList,
  ) $s = shape()) {
    $this->launch_template_specification = $s['launch_template_specification'] ?? null;
    $this->overrides = $s['overrides'] ?? vec[];
  }
}

type LaunchTemplateConfigList = vec<LaunchTemplateConfig>;

class LaunchTemplateCpuOptions {
  public int $core_count;
  public int $threads_per_core;

  public function __construct(shape(
    ?'core_count' => int,
    ?'threads_per_core' => int,
  ) $s = shape()) {
    $this->core_count = $s['core_count'] ?? 0;
    $this->threads_per_core = $s['threads_per_core'] ?? 0;
  }
}

class LaunchTemplateCpuOptionsRequest {
  public int $core_count;
  public int $threads_per_core;

  public function __construct(shape(
    ?'core_count' => int,
    ?'threads_per_core' => int,
  ) $s = shape()) {
    $this->core_count = $s['core_count'] ?? 0;
    $this->threads_per_core = $s['threads_per_core'] ?? 0;
  }
}

class LaunchTemplateEbsBlockDevice {
  public bool $delete_on_termination;
  public bool $encrypted;
  public int $iops;
  public ?KmsKeyId $kms_key_id;
  public ?SnapshotId $snapshot_id;
  public int $volume_size;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'delete_on_termination' => bool,
    ?'encrypted' => bool,
    ?'iops' => int,
    ?'kms_key_id' => ?KmsKeyId,
    ?'snapshot_id' => ?SnapshotId,
    ?'volume_size' => int,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class LaunchTemplateEbsBlockDeviceRequest {
  public bool $delete_on_termination;
  public bool $encrypted;
  public int $iops;
  public ?KmsKeyId $kms_key_id;
  public ?SnapshotId $snapshot_id;
  public int $volume_size;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'delete_on_termination' => bool,
    ?'encrypted' => bool,
    ?'iops' => int,
    ?'kms_key_id' => ?KmsKeyId,
    ?'snapshot_id' => ?SnapshotId,
    ?'volume_size' => int,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class LaunchTemplateElasticInferenceAccelerator {
  public ?LaunchTemplateElasticInferenceAcceleratorCount $count;
  public string $type;

  public function __construct(shape(
    ?'count' => ?LaunchTemplateElasticInferenceAcceleratorCount,
    ?'type' => string,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type LaunchTemplateElasticInferenceAcceleratorCount = int;

type LaunchTemplateElasticInferenceAcceleratorList = vec<LaunchTemplateElasticInferenceAccelerator>;

class LaunchTemplateElasticInferenceAcceleratorResponse {
  public int $count;
  public string $type;

  public function __construct(shape(
    ?'count' => int,
    ?'type' => string,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->type = $s['type'] ?? '';
  }
}

type LaunchTemplateElasticInferenceAcceleratorResponseList = vec<LaunchTemplateElasticInferenceAcceleratorResponse>;

type LaunchTemplateErrorCode = string;

class LaunchTemplateHibernationOptions {
  public bool $configured;

  public function __construct(shape(
    ?'configured' => bool,
  ) $s = shape()) {
    $this->configured = $s['configured'] ?? false;
  }
}

class LaunchTemplateHibernationOptionsRequest {
  public bool $configured;

  public function __construct(shape(
    ?'configured' => bool,
  ) $s = shape()) {
    $this->configured = $s['configured'] ?? false;
  }
}

type LaunchTemplateHttpTokensState = string;

class LaunchTemplateIamInstanceProfileSpecification {
  public string $arn;
  public string $name;

  public function __construct(shape(
    ?'arn' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class LaunchTemplateIamInstanceProfileSpecificationRequest {
  public string $arn;
  public string $name;

  public function __construct(shape(
    ?'arn' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

type LaunchTemplateId = string;

type LaunchTemplateIdStringList = vec<LaunchTemplateId>;

class LaunchTemplateInstanceMarketOptions {
  public ?MarketType $market_type;
  public ?LaunchTemplateSpotMarketOptions $spot_options;

  public function __construct(shape(
    ?'market_type' => ?MarketType,
    ?'spot_options' => ?LaunchTemplateSpotMarketOptions,
  ) $s = shape()) {
    $this->market_type = $s['market_type'] ?? '';
    $this->spot_options = $s['spot_options'] ?? null;
  }
}

class LaunchTemplateInstanceMarketOptionsRequest {
  public ?MarketType $market_type;
  public ?LaunchTemplateSpotMarketOptionsRequest $spot_options;

  public function __construct(shape(
    ?'market_type' => ?MarketType,
    ?'spot_options' => ?LaunchTemplateSpotMarketOptionsRequest,
  ) $s = shape()) {
    $this->market_type = $s['market_type'] ?? '';
    $this->spot_options = $s['spot_options'] ?? null;
  }
}

type LaunchTemplateInstanceMetadataEndpointState = string;

class LaunchTemplateInstanceMetadataOptions {
  public ?LaunchTemplateInstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public ?LaunchTemplateHttpTokensState $http_tokens;
  public ?LaunchTemplateInstanceMetadataOptionsState $state;

  public function __construct(shape(
    ?'http_endpoint' => ?LaunchTemplateInstanceMetadataEndpointState,
    ?'http_put_response_hop_limit' => int,
    ?'http_tokens' => ?LaunchTemplateHttpTokensState,
    ?'state' => ?LaunchTemplateInstanceMetadataOptionsState,
  ) $s = shape()) {
    $this->http_endpoint = $s['http_endpoint'] ?? '';
    $this->http_put_response_hop_limit = $s['http_put_response_hop_limit'] ?? 0;
    $this->http_tokens = $s['http_tokens'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class LaunchTemplateInstanceMetadataOptionsRequest {
  public ?LaunchTemplateInstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public ?LaunchTemplateHttpTokensState $http_tokens;

  public function __construct(shape(
    ?'http_endpoint' => ?LaunchTemplateInstanceMetadataEndpointState,
    ?'http_put_response_hop_limit' => int,
    ?'http_tokens' => ?LaunchTemplateHttpTokensState,
  ) $s = shape()) {
    $this->http_endpoint = $s['http_endpoint'] ?? '';
    $this->http_put_response_hop_limit = $s['http_put_response_hop_limit'] ?? 0;
    $this->http_tokens = $s['http_tokens'] ?? '';
  }
}

type LaunchTemplateInstanceMetadataOptionsState = string;

class LaunchTemplateInstanceNetworkInterfaceSpecification {
  public bool $associate_public_ip_address;
  public bool $delete_on_termination;
  public string $description;
  public int $device_index;
  public ?GroupIdStringList $groups;
  public string $interface_type;
  public int $ipv_6_address_count;
  public ?InstanceIpv6AddressList $ipv_6_addresses;
  public ?NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public ?PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'associate_public_ip_address' => bool,
    ?'delete_on_termination' => bool,
    ?'description' => string,
    ?'device_index' => int,
    ?'groups' => ?GroupIdStringList,
    ?'interface_type' => string,
    ?'ipv_6_address_count' => int,
    ?'ipv_6_addresses' => ?InstanceIpv6AddressList,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'private_ip_address' => string,
    ?'private_ip_addresses' => ?PrivateIpAddressSpecificationList,
    ?'secondary_private_ip_address_count' => int,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->associate_public_ip_address = $s['associate_public_ip_address'] ?? false;
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->device_index = $s['device_index'] ?? 0;
    $this->groups = $s['groups'] ?? vec[];
    $this->interface_type = $s['interface_type'] ?? '';
    $this->ipv_6_address_count = $s['ipv_6_address_count'] ?? 0;
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->secondary_private_ip_address_count = $s['secondary_private_ip_address_count'] ?? 0;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type LaunchTemplateInstanceNetworkInterfaceSpecificationList = vec<LaunchTemplateInstanceNetworkInterfaceSpecification>;

class LaunchTemplateInstanceNetworkInterfaceSpecificationRequest {
  public bool $associate_public_ip_address;
  public bool $delete_on_termination;
  public string $description;
  public int $device_index;
  public ?SecurityGroupIdStringList $groups;
  public string $interface_type;
  public int $ipv_6_address_count;
  public ?InstanceIpv6AddressListRequest $ipv_6_addresses;
  public ?NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public ?PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'associate_public_ip_address' => bool,
    ?'delete_on_termination' => bool,
    ?'description' => string,
    ?'device_index' => int,
    ?'groups' => ?SecurityGroupIdStringList,
    ?'interface_type' => string,
    ?'ipv_6_address_count' => int,
    ?'ipv_6_addresses' => ?InstanceIpv6AddressListRequest,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'private_ip_address' => string,
    ?'private_ip_addresses' => ?PrivateIpAddressSpecificationList,
    ?'secondary_private_ip_address_count' => int,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->associate_public_ip_address = $s['associate_public_ip_address'] ?? false;
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->device_index = $s['device_index'] ?? 0;
    $this->groups = $s['groups'] ?? vec[];
    $this->interface_type = $s['interface_type'] ?? '';
    $this->ipv_6_address_count = $s['ipv_6_address_count'] ?? 0;
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->secondary_private_ip_address_count = $s['secondary_private_ip_address_count'] ?? 0;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList = vec<LaunchTemplateInstanceNetworkInterfaceSpecificationRequest>;

class LaunchTemplateLicenseConfiguration {
  public string $license_configuration_arn;

  public function __construct(shape(
    ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $s['license_configuration_arn'] ?? '';
  }
}

class LaunchTemplateLicenseConfigurationRequest {
  public string $license_configuration_arn;

  public function __construct(shape(
    ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $s['license_configuration_arn'] ?? '';
  }
}

type LaunchTemplateLicenseList = vec<LaunchTemplateLicenseConfiguration>;

type LaunchTemplateLicenseSpecificationListRequest = vec<LaunchTemplateLicenseConfigurationRequest>;

type LaunchTemplateName = string;

type LaunchTemplateNameStringList = vec<LaunchTemplateName>;

class LaunchTemplateOverrides {
  public string $availability_zone;
  public ?InstanceType $instance_type;
  public ?Double $priority;
  public string $spot_price;
  public string $subnet_id;
  public ?Double $weighted_capacity;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'instance_type' => ?InstanceType,
    ?'priority' => ?Double,
    ?'spot_price' => string,
    ?'subnet_id' => string,
    ?'weighted_capacity' => ?Double,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->priority = $s['priority'] ?? 0.0;
    $this->spot_price = $s['spot_price'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->weighted_capacity = $s['weighted_capacity'] ?? 0.0;
  }
}

type LaunchTemplateOverridesList = vec<LaunchTemplateOverrides>;

class LaunchTemplatePlacement {
  public string $affinity;
  public string $availability_zone;
  public string $group_name;
  public string $host_id;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $spread_domain;
  public ?Tenancy $tenancy;

  public function __construct(shape(
    ?'affinity' => string,
    ?'availability_zone' => string,
    ?'group_name' => string,
    ?'host_id' => string,
    ?'host_resource_group_arn' => string,
    ?'partition_number' => int,
    ?'spread_domain' => string,
    ?'tenancy' => ?Tenancy,
  ) $s = shape()) {
    $this->affinity = $s['affinity'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->host_id = $s['host_id'] ?? '';
    $this->host_resource_group_arn = $s['host_resource_group_arn'] ?? '';
    $this->partition_number = $s['partition_number'] ?? 0;
    $this->spread_domain = $s['spread_domain'] ?? '';
    $this->tenancy = $s['tenancy'] ?? '';
  }
}

class LaunchTemplatePlacementRequest {
  public string $affinity;
  public string $availability_zone;
  public ?PlacementGroupName $group_name;
  public ?DedicatedHostId $host_id;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $spread_domain;
  public ?Tenancy $tenancy;

  public function __construct(shape(
    ?'affinity' => string,
    ?'availability_zone' => string,
    ?'group_name' => ?PlacementGroupName,
    ?'host_id' => ?DedicatedHostId,
    ?'host_resource_group_arn' => string,
    ?'partition_number' => int,
    ?'spread_domain' => string,
    ?'tenancy' => ?Tenancy,
  ) $s = shape()) {
    $this->affinity = $s['affinity'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->host_id = $s['host_id'] ?? '';
    $this->host_resource_group_arn = $s['host_resource_group_arn'] ?? '';
    $this->partition_number = $s['partition_number'] ?? 0;
    $this->spread_domain = $s['spread_domain'] ?? '';
    $this->tenancy = $s['tenancy'] ?? '';
  }
}

type LaunchTemplateSet = vec<LaunchTemplate>;

class LaunchTemplateSpecification {
  public ?LaunchTemplateId $launch_template_id;
  public string $launch_template_name;
  public string $version;

  public function __construct(shape(
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => string,
    ?'version' => string,
  ) $s = shape()) {
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->version = $s['version'] ?? '';
  }
}

class LaunchTemplateSpotMarketOptions {
  public int $block_duration_minutes;
  public ?InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $max_price;
  public ?SpotInstanceType $spot_instance_type;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'block_duration_minutes' => int,
    ?'instance_interruption_behavior' => ?InstanceInterruptionBehavior,
    ?'max_price' => string,
    ?'spot_instance_type' => ?SpotInstanceType,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->block_duration_minutes = $s['block_duration_minutes'] ?? 0;
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->max_price = $s['max_price'] ?? '';
    $this->spot_instance_type = $s['spot_instance_type'] ?? '';
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

class LaunchTemplateSpotMarketOptionsRequest {
  public int $block_duration_minutes;
  public ?InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $max_price;
  public ?SpotInstanceType $spot_instance_type;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'block_duration_minutes' => int,
    ?'instance_interruption_behavior' => ?InstanceInterruptionBehavior,
    ?'max_price' => string,
    ?'spot_instance_type' => ?SpotInstanceType,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->block_duration_minutes = $s['block_duration_minutes'] ?? 0;
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->max_price = $s['max_price'] ?? '';
    $this->spot_instance_type = $s['spot_instance_type'] ?? '';
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

class LaunchTemplateTagSpecification {
  public ?ResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_type' => ?ResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LaunchTemplateTagSpecificationList = vec<LaunchTemplateTagSpecification>;

class LaunchTemplateTagSpecificationRequest {
  public ?ResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_type' => ?ResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LaunchTemplateTagSpecificationRequestList = vec<LaunchTemplateTagSpecificationRequest>;

class LaunchTemplateVersion {
  public ?DateTime $create_time;
  public string $created_by;
  public bool $default_version;
  public ?ResponseLaunchTemplateData $launch_template_data;
  public string $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;
  public ?VersionDescription $version_description;
  public ?Long $version_number;

  public function __construct(shape(
    ?'create_time' => ?DateTime,
    ?'created_by' => string,
    ?'default_version' => bool,
    ?'launch_template_data' => ?ResponseLaunchTemplateData,
    ?'launch_template_id' => string,
    ?'launch_template_name' => ?LaunchTemplateName,
    ?'version_description' => ?VersionDescription,
    ?'version_number' => ?Long,
  ) $s = shape()) {
    $this->create_time = $s['create_time'] ?? 0;
    $this->created_by = $s['created_by'] ?? '';
    $this->default_version = $s['default_version'] ?? false;
    $this->launch_template_data = $s['launch_template_data'] ?? null;
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
    $this->version_description = $s['version_description'] ?? '';
    $this->version_number = $s['version_number'] ?? 0;
  }
}

type LaunchTemplateVersionSet = vec<LaunchTemplateVersion>;

class LaunchTemplatesMonitoring {
  public bool $enabled;

  public function __construct(shape(
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class LaunchTemplatesMonitoringRequest {
  public bool $enabled;

  public function __construct(shape(
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class LicenseConfiguration {
  public string $license_configuration_arn;

  public function __construct(shape(
    ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $s['license_configuration_arn'] ?? '';
  }
}

class LicenseConfigurationRequest {
  public string $license_configuration_arn;

  public function __construct(shape(
    ?'license_configuration_arn' => string,
  ) $s = shape()) {
    $this->license_configuration_arn = $s['license_configuration_arn'] ?? '';
  }
}

type LicenseList = vec<LicenseConfiguration>;

type LicenseSpecificationListRequest = vec<LicenseConfigurationRequest>;

type ListingState = string;

type ListingStatus = string;

class LoadBalancersConfig {
  public ?ClassicLoadBalancersConfig $classic_load_balancers_config;
  public ?TargetGroupsConfig $target_groups_config;

  public function __construct(shape(
    ?'classic_load_balancers_config' => ?ClassicLoadBalancersConfig,
    ?'target_groups_config' => ?TargetGroupsConfig,
  ) $s = shape()) {
    $this->classic_load_balancers_config = $s['classic_load_balancers_config'] ?? null;
    $this->target_groups_config = $s['target_groups_config'] ?? null;
  }
}

class LoadPermission {
  public ?PermissionGroup $group;
  public string $user_id;

  public function __construct(shape(
    ?'group' => ?PermissionGroup,
    ?'user_id' => string,
  ) $s = shape()) {
    $this->group = $s['group'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

type LoadPermissionList = vec<LoadPermission>;

type LoadPermissionListRequest = vec<LoadPermissionRequest>;

class LoadPermissionModifications {
  public ?LoadPermissionListRequest $add;
  public ?LoadPermissionListRequest $remove;

  public function __construct(shape(
    ?'add' => ?LoadPermissionListRequest,
    ?'remove' => ?LoadPermissionListRequest,
  ) $s = shape()) {
    $this->add = $s['add'] ?? vec[];
    $this->remove = $s['remove'] ?? vec[];
  }
}

class LoadPermissionRequest {
  public ?PermissionGroup $group;
  public string $user_id;

  public function __construct(shape(
    ?'group' => ?PermissionGroup,
    ?'user_id' => string,
  ) $s = shape()) {
    $this->group = $s['group'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
  }
}

class LocalGateway {
  public ?LocalGatewayId $local_gateway_id;
  public string $outpost_arn;
  public string $owner_id;
  public string $state;
  public ?TagList $tags;

  public function __construct(shape(
    ?'local_gateway_id' => ?LocalGatewayId,
    ?'outpost_arn' => string,
    ?'owner_id' => string,
    ?'state' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LocalGatewayId = string;

type LocalGatewayIdSet = vec<LocalGatewayId>;

type LocalGatewayMaxResults = int;

class LocalGatewayRoute {
  public string $destination_cidr_block;
  public ?LocalGatewayRoutetableId $local_gateway_route_table_id;
  public ?LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public ?LocalGatewayRouteState $state;
  public ?LocalGatewayRouteType $type;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'local_gateway_route_table_id' => ?LocalGatewayRoutetableId,
    ?'local_gateway_virtual_interface_group_id' => ?LocalGatewayVirtualInterfaceGroupId,
    ?'state' => ?LocalGatewayRouteState,
    ?'type' => ?LocalGatewayRouteType,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->local_gateway_virtual_interface_group_id = $s['local_gateway_virtual_interface_group_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type LocalGatewayRouteList = vec<LocalGatewayRoute>;

type LocalGatewayRouteState = string;

class LocalGatewayRouteTable {
  public ?LocalGatewayId $local_gateway_id;
  public string $local_gateway_route_table_id;
  public string $outpost_arn;
  public string $state;
  public ?TagList $tags;

  public function __construct(shape(
    ?'local_gateway_id' => ?LocalGatewayId,
    ?'local_gateway_route_table_id' => string,
    ?'outpost_arn' => string,
    ?'state' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LocalGatewayRouteTableIdSet = vec<LocalGatewayRoutetableId>;

type LocalGatewayRouteTableSet = vec<LocalGatewayRouteTable>;

class LocalGatewayRouteTableVirtualInterfaceGroupAssociation {
  public string $local_gateway_id;
  public ?LocalGatewayId $local_gateway_route_table_id;
  public ?LocalGatewayRouteTableVirtualInterfaceGroupAssociationId $local_gateway_route_table_virtual_interface_group_association_id;
  public ?LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public string $state;
  public ?TagList $tags;

  public function __construct(shape(
    ?'local_gateway_id' => string,
    ?'local_gateway_route_table_id' => ?LocalGatewayId,
    ?'local_gateway_route_table_virtual_interface_group_association_id' => ?LocalGatewayRouteTableVirtualInterfaceGroupAssociationId,
    ?'local_gateway_virtual_interface_group_id' => ?LocalGatewayVirtualInterfaceGroupId,
    ?'state' => string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->local_gateway_route_table_virtual_interface_group_association_id = $s['local_gateway_route_table_virtual_interface_group_association_id'] ?? '';
    $this->local_gateway_virtual_interface_group_id = $s['local_gateway_virtual_interface_group_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LocalGatewayRouteTableVirtualInterfaceGroupAssociationId = string;

type LocalGatewayRouteTableVirtualInterfaceGroupAssociationIdSet = vec<LocalGatewayRouteTableVirtualInterfaceGroupAssociationId>;

type LocalGatewayRouteTableVirtualInterfaceGroupAssociationSet = vec<LocalGatewayRouteTableVirtualInterfaceGroupAssociation>;

class LocalGatewayRouteTableVpcAssociation {
  public string $local_gateway_id;
  public string $local_gateway_route_table_id;
  public ?LocalGatewayRouteTableVpcAssociationId $local_gateway_route_table_vpc_association_id;
  public string $state;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'local_gateway_id' => string,
    ?'local_gateway_route_table_id' => string,
    ?'local_gateway_route_table_vpc_association_id' => ?LocalGatewayRouteTableVpcAssociationId,
    ?'state' => string,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->local_gateway_route_table_vpc_association_id = $s['local_gateway_route_table_vpc_association_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type LocalGatewayRouteTableVpcAssociationId = string;

type LocalGatewayRouteTableVpcAssociationIdSet = vec<LocalGatewayRouteTableVpcAssociationId>;

type LocalGatewayRouteTableVpcAssociationSet = vec<LocalGatewayRouteTableVpcAssociation>;

type LocalGatewayRouteType = string;

type LocalGatewayRoutetableId = string;

type LocalGatewaySet = vec<LocalGateway>;

class LocalGatewayVirtualInterface {
  public string $local_address;
  public int $local_bgp_asn;
  public string $local_gateway_id;
  public ?LocalGatewayVirtualInterfaceId $local_gateway_virtual_interface_id;
  public string $peer_address;
  public int $peer_bgp_asn;
  public ?TagList $tags;
  public int $vlan;

  public function __construct(shape(
    ?'local_address' => string,
    ?'local_bgp_asn' => int,
    ?'local_gateway_id' => string,
    ?'local_gateway_virtual_interface_id' => ?LocalGatewayVirtualInterfaceId,
    ?'peer_address' => string,
    ?'peer_bgp_asn' => int,
    ?'tags' => ?TagList,
    ?'vlan' => int,
  ) $s = shape()) {
    $this->local_address = $s['local_address'] ?? '';
    $this->local_bgp_asn = $s['local_bgp_asn'] ?? 0;
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->local_gateway_virtual_interface_id = $s['local_gateway_virtual_interface_id'] ?? '';
    $this->peer_address = $s['peer_address'] ?? '';
    $this->peer_bgp_asn = $s['peer_bgp_asn'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
    $this->vlan = $s['vlan'] ?? 0;
  }
}

class LocalGatewayVirtualInterfaceGroup {
  public string $local_gateway_id;
  public ?LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public ?LocalGatewayVirtualInterfaceIdSet $local_gateway_virtual_interface_ids;
  public ?TagList $tags;

  public function __construct(shape(
    ?'local_gateway_id' => string,
    ?'local_gateway_virtual_interface_group_id' => ?LocalGatewayVirtualInterfaceGroupId,
    ?'local_gateway_virtual_interface_ids' => ?LocalGatewayVirtualInterfaceIdSet,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->local_gateway_virtual_interface_group_id = $s['local_gateway_virtual_interface_group_id'] ?? '';
    $this->local_gateway_virtual_interface_ids = $s['local_gateway_virtual_interface_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LocalGatewayVirtualInterfaceGroupId = string;

type LocalGatewayVirtualInterfaceGroupIdSet = vec<LocalGatewayVirtualInterfaceGroupId>;

type LocalGatewayVirtualInterfaceGroupSet = vec<LocalGatewayVirtualInterfaceGroup>;

type LocalGatewayVirtualInterfaceId = string;

type LocalGatewayVirtualInterfaceIdSet = vec<LocalGatewayVirtualInterfaceId>;

type LocalGatewayVirtualInterfaceSet = vec<LocalGatewayVirtualInterface>;

type Location = string;

type LocationType = string;

type LogDestinationType = string;

type Long = int;

type MarketType = string;

type MaxIpv4AddrPerInterface = int;

type MaxIpv6AddrPerInterface = int;

type MaxNetworkInterfaces = int;

type MaxResults = int;

type MembershipType = string;

class MemoryInfo {
  public ?MemorySize $size_in_mi_b;

  public function __construct(shape(
    ?'size_in_mi_b' => ?MemorySize,
  ) $s = shape()) {
    $this->size_in_mi_b = $s['size_in_mi_b'] ?? 0;
  }
}

type MemorySize = int;

type MillisecondDateTime = int;

class ModifyAvailabilityZoneGroupRequest {
  public bool $dry_run;
  public string $group_name;
  public ?ModifyAvailabilityZoneOptInStatus $opt_in_status;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_name' => string,
    ?'opt_in_status' => ?ModifyAvailabilityZoneOptInStatus,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_name = $s['group_name'] ?? '';
    $this->opt_in_status = $s['opt_in_status'] ?? '';
  }
}

class ModifyAvailabilityZoneGroupResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

type ModifyAvailabilityZoneOptInStatus = string;

class ModifyCapacityReservationRequest {
  public ?CapacityReservationId $capacity_reservation_id;
  public bool $dry_run;
  public ?DateTime $end_date;
  public ?EndDateType $end_date_type;
  public int $instance_count;

  public function __construct(shape(
    ?'capacity_reservation_id' => ?CapacityReservationId,
    ?'dry_run' => bool,
    ?'end_date' => ?DateTime,
    ?'end_date_type' => ?EndDateType,
    ?'instance_count' => int,
  ) $s = shape()) {
    $this->capacity_reservation_id = $s['capacity_reservation_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->end_date = $s['end_date'] ?? 0;
    $this->end_date_type = $s['end_date_type'] ?? '';
    $this->instance_count = $s['instance_count'] ?? 0;
  }
}

class ModifyCapacityReservationResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifyClientVpnEndpointRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public ?ConnectionLogOptions $connection_log_options;
  public string $description;
  public ?DnsServersOptionsModifyStructure $dns_servers;
  public bool $dry_run;
  public ?ClientVpnSecurityGroupIdSet $security_group_ids;
  public string $server_certificate_arn;
  public bool $split_tunnel;
  public ?VpcId $vpc_id;
  public int $vpn_port;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'connection_log_options' => ?ConnectionLogOptions,
    ?'description' => string,
    ?'dns_servers' => ?DnsServersOptionsModifyStructure,
    ?'dry_run' => bool,
    ?'security_group_ids' => ?ClientVpnSecurityGroupIdSet,
    ?'server_certificate_arn' => string,
    ?'split_tunnel' => bool,
    ?'vpc_id' => ?VpcId,
    ?'vpn_port' => int,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->connection_log_options = $s['connection_log_options'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->dns_servers = $s['dns_servers'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->server_certificate_arn = $s['server_certificate_arn'] ?? '';
    $this->split_tunnel = $s['split_tunnel'] ?? false;
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpn_port = $s['vpn_port'] ?? 0;
  }
}

class ModifyClientVpnEndpointResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifyDefaultCreditSpecificationRequest {
  public string $cpu_credits;
  public bool $dry_run;
  public ?UnlimitedSupportedInstanceFamily $instance_family;

  public function __construct(shape(
    ?'cpu_credits' => string,
    ?'dry_run' => bool,
    ?'instance_family' => ?UnlimitedSupportedInstanceFamily,
  ) $s = shape()) {
    $this->cpu_credits = $s['cpu_credits'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_family = $s['instance_family'] ?? '';
  }
}

class ModifyDefaultCreditSpecificationResult {
  public ?InstanceFamilyCreditSpecification $instance_family_credit_specification;

  public function __construct(shape(
    ?'instance_family_credit_specification' => ?InstanceFamilyCreditSpecification,
  ) $s = shape()) {
    $this->instance_family_credit_specification = $s['instance_family_credit_specification'] ?? null;
  }
}

class ModifyEbsDefaultKmsKeyIdRequest {
  public bool $dry_run;
  public ?KmsKeyId $kms_key_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'kms_key_id' => ?KmsKeyId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

class ModifyEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;

  public function __construct(shape(
    ?'kms_key_id' => string,
  ) $s = shape()) {
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

class ModifyFleetRequest {
  public bool $dry_run;
  public ?FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public ?FleetId $fleet_id;
  public ?TargetCapacitySpecificationRequest $target_capacity_specification;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'excess_capacity_termination_policy' => ?FleetExcessCapacityTerminationPolicy,
    ?'fleet_id' => ?FleetId,
    ?'target_capacity_specification' => ?TargetCapacitySpecificationRequest,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->excess_capacity_termination_policy = $s['excess_capacity_termination_policy'] ?? '';
    $this->fleet_id = $s['fleet_id'] ?? '';
    $this->target_capacity_specification = $s['target_capacity_specification'] ?? null;
  }
}

class ModifyFleetResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifyFpgaImageAttributeRequest {
  public ?FpgaImageAttributeName $attribute;
  public string $description;
  public bool $dry_run;
  public ?FpgaImageId $fpga_image_id;
  public ?LoadPermissionModifications $load_permission;
  public string $name;
  public ?OperationType $operation_type;
  public ?ProductCodeStringList $product_codes;
  public ?UserGroupStringList $user_groups;
  public ?UserIdStringList $user_ids;

  public function __construct(shape(
    ?'attribute' => ?FpgaImageAttributeName,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'fpga_image_id' => ?FpgaImageId,
    ?'load_permission' => ?LoadPermissionModifications,
    ?'name' => string,
    ?'operation_type' => ?OperationType,
    ?'product_codes' => ?ProductCodeStringList,
    ?'user_groups' => ?UserGroupStringList,
    ?'user_ids' => ?UserIdStringList,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
    $this->load_permission = $s['load_permission'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->operation_type = $s['operation_type'] ?? '';
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->user_groups = $s['user_groups'] ?? vec[];
    $this->user_ids = $s['user_ids'] ?? vec[];
  }
}

class ModifyFpgaImageAttributeResult {
  public ?FpgaImageAttribute $fpga_image_attribute;

  public function __construct(shape(
    ?'fpga_image_attribute' => ?FpgaImageAttribute,
  ) $s = shape()) {
    $this->fpga_image_attribute = $s['fpga_image_attribute'] ?? null;
  }
}

class ModifyHostsRequest {
  public ?AutoPlacement $auto_placement;
  public ?RequestHostIdList $host_ids;
  public ?HostRecovery $host_recovery;
  public string $instance_family;
  public string $instance_type;

  public function __construct(shape(
    ?'auto_placement' => ?AutoPlacement,
    ?'host_ids' => ?RequestHostIdList,
    ?'host_recovery' => ?HostRecovery,
    ?'instance_family' => string,
    ?'instance_type' => string,
  ) $s = shape()) {
    $this->auto_placement = $s['auto_placement'] ?? '';
    $this->host_ids = $s['host_ids'] ?? vec[];
    $this->host_recovery = $s['host_recovery'] ?? '';
    $this->instance_family = $s['instance_family'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
  }
}

class ModifyHostsResult {
  public ?ResponseHostIdList $successful;
  public ?UnsuccessfulItemList $unsuccessful;

  public function __construct(shape(
    ?'successful' => ?ResponseHostIdList,
    ?'unsuccessful' => ?UnsuccessfulItemList,
  ) $s = shape()) {
    $this->successful = $s['successful'] ?? vec[];
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class ModifyIdFormatRequest {
  public string $resource;
  public bool $use_long_ids;

  public function __construct(shape(
    ?'resource' => string,
    ?'use_long_ids' => bool,
  ) $s = shape()) {
    $this->resource = $s['resource'] ?? '';
    $this->use_long_ids = $s['use_long_ids'] ?? false;
  }
}

class ModifyIdentityIdFormatRequest {
  public string $principal_arn;
  public string $resource;
  public bool $use_long_ids;

  public function __construct(shape(
    ?'principal_arn' => string,
    ?'resource' => string,
    ?'use_long_ids' => bool,
  ) $s = shape()) {
    $this->principal_arn = $s['principal_arn'] ?? '';
    $this->resource = $s['resource'] ?? '';
    $this->use_long_ids = $s['use_long_ids'] ?? false;
  }
}

class ModifyImageAttributeRequest {
  public string $attribute;
  public ?AttributeValue $description;
  public bool $dry_run;
  public ?ImageId $image_id;
  public ?LaunchPermissionModifications $launch_permission;
  public ?OperationType $operation_type;
  public ?ProductCodeStringList $product_codes;
  public ?UserGroupStringList $user_groups;
  public ?UserIdStringList $user_ids;
  public string $value;

  public function __construct(shape(
    ?'attribute' => string,
    ?'description' => ?AttributeValue,
    ?'dry_run' => bool,
    ?'image_id' => ?ImageId,
    ?'launch_permission' => ?LaunchPermissionModifications,
    ?'operation_type' => ?OperationType,
    ?'product_codes' => ?ProductCodeStringList,
    ?'user_groups' => ?UserGroupStringList,
    ?'user_ids' => ?UserIdStringList,
    ?'value' => string,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->description = $s['description'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->image_id = $s['image_id'] ?? '';
    $this->launch_permission = $s['launch_permission'] ?? null;
    $this->operation_type = $s['operation_type'] ?? '';
    $this->product_codes = $s['product_codes'] ?? vec[];
    $this->user_groups = $s['user_groups'] ?? vec[];
    $this->user_ids = $s['user_ids'] ?? vec[];
    $this->value = $s['value'] ?? '';
  }
}

class ModifyInstanceAttributeRequest {
  public ?InstanceAttributeName $attribute;
  public ?InstanceBlockDeviceMappingSpecificationList $block_device_mappings;
  public ?AttributeBooleanValue $disable_api_termination;
  public bool $dry_run;
  public ?AttributeBooleanValue $ebs_optimized;
  public ?AttributeBooleanValue $ena_support;
  public ?GroupIdStringList $groups;
  public ?InstanceId $instance_id;
  public ?AttributeValue $instance_initiated_shutdown_behavior;
  public ?AttributeValue $instance_type;
  public ?AttributeValue $kernel;
  public ?AttributeValue $ramdisk;
  public ?AttributeBooleanValue $source_dest_check;
  public ?AttributeValue $sriov_net_support;
  public ?BlobAttributeValue $user_data;
  public string $value;

  public function __construct(shape(
    ?'attribute' => ?InstanceAttributeName,
    ?'block_device_mappings' => ?InstanceBlockDeviceMappingSpecificationList,
    ?'disable_api_termination' => ?AttributeBooleanValue,
    ?'dry_run' => bool,
    ?'ebs_optimized' => ?AttributeBooleanValue,
    ?'ena_support' => ?AttributeBooleanValue,
    ?'groups' => ?GroupIdStringList,
    ?'instance_id' => ?InstanceId,
    ?'instance_initiated_shutdown_behavior' => ?AttributeValue,
    ?'instance_type' => ?AttributeValue,
    ?'kernel' => ?AttributeValue,
    ?'ramdisk' => ?AttributeValue,
    ?'source_dest_check' => ?AttributeBooleanValue,
    ?'sriov_net_support' => ?AttributeValue,
    ?'user_data' => ?BlobAttributeValue,
    ?'value' => string,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->disable_api_termination = $s['disable_api_termination'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->ebs_optimized = $s['ebs_optimized'] ?? null;
    $this->ena_support = $s['ena_support'] ?? null;
    $this->groups = $s['groups'] ?? vec[];
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_initiated_shutdown_behavior = $s['instance_initiated_shutdown_behavior'] ?? null;
    $this->instance_type = $s['instance_type'] ?? null;
    $this->kernel = $s['kernel'] ?? null;
    $this->ramdisk = $s['ramdisk'] ?? null;
    $this->source_dest_check = $s['source_dest_check'] ?? null;
    $this->sriov_net_support = $s['sriov_net_support'] ?? null;
    $this->user_data = $s['user_data'] ?? null;
    $this->value = $s['value'] ?? '';
  }
}

class ModifyInstanceCapacityReservationAttributesRequest {
  public ?CapacityReservationSpecification $capacity_reservation_specification;
  public bool $dry_run;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'capacity_reservation_specification' => ?CapacityReservationSpecification,
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->capacity_reservation_specification = $s['capacity_reservation_specification'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class ModifyInstanceCapacityReservationAttributesResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifyInstanceCreditSpecificationRequest {
  public string $client_token;
  public bool $dry_run;
  public ?InstanceCreditSpecificationListRequest $instance_credit_specifications;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'instance_credit_specifications' => ?InstanceCreditSpecificationListRequest,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_credit_specifications = $s['instance_credit_specifications'] ?? vec[];
  }
}

class ModifyInstanceCreditSpecificationResult {
  public ?SuccessfulInstanceCreditSpecificationSet $successful_instance_credit_specifications;
  public ?UnsuccessfulInstanceCreditSpecificationSet $unsuccessful_instance_credit_specifications;

  public function __construct(shape(
    ?'successful_instance_credit_specifications' => ?SuccessfulInstanceCreditSpecificationSet,
    ?'unsuccessful_instance_credit_specifications' => ?UnsuccessfulInstanceCreditSpecificationSet,
  ) $s = shape()) {
    $this->successful_instance_credit_specifications = $s['successful_instance_credit_specifications'] ?? vec[];
    $this->unsuccessful_instance_credit_specifications = $s['unsuccessful_instance_credit_specifications'] ?? vec[];
  }
}

class ModifyInstanceEventStartTimeRequest {
  public bool $dry_run;
  public string $instance_event_id;
  public ?InstanceId $instance_id;
  public ?DateTime $not_before;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_event_id' => string,
    ?'instance_id' => ?InstanceId,
    ?'not_before' => ?DateTime,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_event_id = $s['instance_event_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->not_before = $s['not_before'] ?? 0;
  }
}

class ModifyInstanceEventStartTimeResult {
  public ?InstanceStatusEvent $event;

  public function __construct(shape(
    ?'event' => ?InstanceStatusEvent,
  ) $s = shape()) {
    $this->event = $s['event'] ?? null;
  }
}

class ModifyInstanceMetadataOptionsRequest {
  public bool $dry_run;
  public ?InstanceMetadataEndpointState $http_endpoint;
  public int $http_put_response_hop_limit;
  public ?HttpTokensState $http_tokens;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'http_endpoint' => ?InstanceMetadataEndpointState,
    ?'http_put_response_hop_limit' => int,
    ?'http_tokens' => ?HttpTokensState,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->http_endpoint = $s['http_endpoint'] ?? '';
    $this->http_put_response_hop_limit = $s['http_put_response_hop_limit'] ?? 0;
    $this->http_tokens = $s['http_tokens'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class ModifyInstanceMetadataOptionsResult {
  public string $instance_id;
  public ?InstanceMetadataOptionsResponse $instance_metadata_options;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'instance_metadata_options' => ?InstanceMetadataOptionsResponse,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_metadata_options = $s['instance_metadata_options'] ?? null;
  }
}

class ModifyInstancePlacementRequest {
  public ?Affinity $affinity;
  public ?PlacementGroupName $group_name;
  public ?DedicatedHostId $host_id;
  public string $host_resource_group_arn;
  public ?InstanceId $instance_id;
  public int $partition_number;
  public ?HostTenancy $tenancy;

  public function __construct(shape(
    ?'affinity' => ?Affinity,
    ?'group_name' => ?PlacementGroupName,
    ?'host_id' => ?DedicatedHostId,
    ?'host_resource_group_arn' => string,
    ?'instance_id' => ?InstanceId,
    ?'partition_number' => int,
    ?'tenancy' => ?HostTenancy,
  ) $s = shape()) {
    $this->affinity = $s['affinity'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->host_id = $s['host_id'] ?? '';
    $this->host_resource_group_arn = $s['host_resource_group_arn'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->partition_number = $s['partition_number'] ?? 0;
    $this->tenancy = $s['tenancy'] ?? '';
  }
}

class ModifyInstancePlacementResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifyLaunchTemplateRequest {
  public string $client_token;
  public string $default_version;
  public bool $dry_run;
  public ?LaunchTemplateId $launch_template_id;
  public ?LaunchTemplateName $launch_template_name;

  public function __construct(shape(
    ?'client_token' => string,
    ?'default_version' => string,
    ?'dry_run' => bool,
    ?'launch_template_id' => ?LaunchTemplateId,
    ?'launch_template_name' => ?LaunchTemplateName,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->default_version = $s['default_version'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->launch_template_id = $s['launch_template_id'] ?? '';
    $this->launch_template_name = $s['launch_template_name'] ?? '';
  }
}

class ModifyLaunchTemplateResult {
  public ?LaunchTemplate $launch_template;

  public function __construct(shape(
    ?'launch_template' => ?LaunchTemplate,
  ) $s = shape()) {
    $this->launch_template = $s['launch_template'] ?? null;
  }
}

class ModifyNetworkInterfaceAttributeRequest {
  public ?NetworkInterfaceAttachmentChanges $attachment;
  public ?AttributeValue $description;
  public bool $dry_run;
  public ?SecurityGroupIdStringList $groups;
  public ?NetworkInterfaceId $network_interface_id;
  public ?AttributeBooleanValue $source_dest_check;

  public function __construct(shape(
    ?'attachment' => ?NetworkInterfaceAttachmentChanges,
    ?'description' => ?AttributeValue,
    ?'dry_run' => bool,
    ?'groups' => ?SecurityGroupIdStringList,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'source_dest_check' => ?AttributeBooleanValue,
  ) $s = shape()) {
    $this->attachment = $s['attachment'] ?? null;
    $this->description = $s['description'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->groups = $s['groups'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->source_dest_check = $s['source_dest_check'] ?? null;
  }
}

class ModifyReservedInstancesRequest {
  public string $client_token;
  public ?ReservedInstancesIdStringList $reserved_instances_ids;
  public ?ReservedInstancesConfigurationList $target_configurations;

  public function __construct(shape(
    ?'client_token' => string,
    ?'reserved_instances_ids' => ?ReservedInstancesIdStringList,
    ?'target_configurations' => ?ReservedInstancesConfigurationList,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->reserved_instances_ids = $s['reserved_instances_ids'] ?? vec[];
    $this->target_configurations = $s['target_configurations'] ?? vec[];
  }
}

class ModifyReservedInstancesResult {
  public string $reserved_instances_modification_id;

  public function __construct(shape(
    ?'reserved_instances_modification_id' => string,
  ) $s = shape()) {
    $this->reserved_instances_modification_id = $s['reserved_instances_modification_id'] ?? '';
  }
}

class ModifySnapshotAttributeRequest {
  public ?SnapshotAttributeName $attribute;
  public ?CreateVolumePermissionModifications $create_volume_permission;
  public bool $dry_run;
  public ?GroupNameStringList $group_names;
  public ?OperationType $operation_type;
  public ?SnapshotId $snapshot_id;
  public ?UserIdStringList $user_ids;

  public function __construct(shape(
    ?'attribute' => ?SnapshotAttributeName,
    ?'create_volume_permission' => ?CreateVolumePermissionModifications,
    ?'dry_run' => bool,
    ?'group_names' => ?GroupNameStringList,
    ?'operation_type' => ?OperationType,
    ?'snapshot_id' => ?SnapshotId,
    ?'user_ids' => ?UserIdStringList,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->create_volume_permission = $s['create_volume_permission'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_names = $s['group_names'] ?? vec[];
    $this->operation_type = $s['operation_type'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->user_ids = $s['user_ids'] ?? vec[];
  }
}

class ModifySpotFleetRequestRequest {
  public ?ExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public int $on_demand_target_capacity;
  public ?SpotFleetRequestId $spot_fleet_request_id;
  public int $target_capacity;

  public function __construct(shape(
    ?'excess_capacity_termination_policy' => ?ExcessCapacityTerminationPolicy,
    ?'on_demand_target_capacity' => int,
    ?'spot_fleet_request_id' => ?SpotFleetRequestId,
    ?'target_capacity' => int,
  ) $s = shape()) {
    $this->excess_capacity_termination_policy = $s['excess_capacity_termination_policy'] ?? '';
    $this->on_demand_target_capacity = $s['on_demand_target_capacity'] ?? 0;
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
    $this->target_capacity = $s['target_capacity'] ?? 0;
  }
}

class ModifySpotFleetRequestResponse {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifySubnetAttributeRequest {
  public ?AttributeBooleanValue $assign_ipv_6_address_on_creation;
  public ?AttributeBooleanValue $map_public_ip_on_launch;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'assign_ipv_6_address_on_creation' => ?AttributeBooleanValue,
    ?'map_public_ip_on_launch' => ?AttributeBooleanValue,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->assign_ipv_6_address_on_creation = $s['assign_ipv_6_address_on_creation'] ?? null;
    $this->map_public_ip_on_launch = $s['map_public_ip_on_launch'] ?? null;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

class ModifyTrafficMirrorFilterNetworkServicesRequest {
  public ?TrafficMirrorNetworkServiceList $add_network_services;
  public bool $dry_run;
  public ?TrafficMirrorNetworkServiceList $remove_network_services;
  public ?TrafficMirrorFilterId $traffic_mirror_filter_id;

  public function __construct(shape(
    ?'add_network_services' => ?TrafficMirrorNetworkServiceList,
    ?'dry_run' => bool,
    ?'remove_network_services' => ?TrafficMirrorNetworkServiceList,
    ?'traffic_mirror_filter_id' => ?TrafficMirrorFilterId,
  ) $s = shape()) {
    $this->add_network_services = $s['add_network_services'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->remove_network_services = $s['remove_network_services'] ?? vec[];
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
  }
}

class ModifyTrafficMirrorFilterNetworkServicesResult {
  public ?TrafficMirrorFilter $traffic_mirror_filter;

  public function __construct(shape(
    ?'traffic_mirror_filter' => ?TrafficMirrorFilter,
  ) $s = shape()) {
    $this->traffic_mirror_filter = $s['traffic_mirror_filter'] ?? null;
  }
}

class ModifyTrafficMirrorFilterRuleRequest {
  public string $description;
  public string $destination_cidr_block;
  public ?TrafficMirrorPortRangeRequest $destination_port_range;
  public bool $dry_run;
  public int $protocol;
  public ?TrafficMirrorFilterRuleFieldList $remove_fields;
  public ?TrafficMirrorRuleAction $rule_action;
  public int $rule_number;
  public string $source_cidr_block;
  public ?TrafficMirrorPortRangeRequest $source_port_range;
  public ?TrafficDirection $traffic_direction;
  public ?TrafficMirrorFilterRuleId $traffic_mirror_filter_rule_id;

  public function __construct(shape(
    ?'description' => string,
    ?'destination_cidr_block' => string,
    ?'destination_port_range' => ?TrafficMirrorPortRangeRequest,
    ?'dry_run' => bool,
    ?'protocol' => int,
    ?'remove_fields' => ?TrafficMirrorFilterRuleFieldList,
    ?'rule_action' => ?TrafficMirrorRuleAction,
    ?'rule_number' => int,
    ?'source_cidr_block' => string,
    ?'source_port_range' => ?TrafficMirrorPortRangeRequest,
    ?'traffic_direction' => ?TrafficDirection,
    ?'traffic_mirror_filter_rule_id' => ?TrafficMirrorFilterRuleId,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->destination_port_range = $s['destination_port_range'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->protocol = $s['protocol'] ?? 0;
    $this->remove_fields = $s['remove_fields'] ?? vec[];
    $this->rule_action = $s['rule_action'] ?? '';
    $this->rule_number = $s['rule_number'] ?? 0;
    $this->source_cidr_block = $s['source_cidr_block'] ?? '';
    $this->source_port_range = $s['source_port_range'] ?? null;
    $this->traffic_direction = $s['traffic_direction'] ?? '';
    $this->traffic_mirror_filter_rule_id = $s['traffic_mirror_filter_rule_id'] ?? '';
  }
}

class ModifyTrafficMirrorFilterRuleResult {
  public ?TrafficMirrorFilterRule $traffic_mirror_filter_rule;

  public function __construct(shape(
    ?'traffic_mirror_filter_rule' => ?TrafficMirrorFilterRule,
  ) $s = shape()) {
    $this->traffic_mirror_filter_rule = $s['traffic_mirror_filter_rule'] ?? null;
  }
}

class ModifyTrafficMirrorSessionRequest {
  public string $description;
  public bool $dry_run;
  public int $packet_length;
  public ?TrafficMirrorSessionFieldList $remove_fields;
  public int $session_number;
  public ?TrafficMirrorFilterId $traffic_mirror_filter_id;
  public ?TrafficMirrorSessionId $traffic_mirror_session_id;
  public ?TrafficMirrorTargetId $traffic_mirror_target_id;
  public int $virtual_network_id;

  public function __construct(shape(
    ?'description' => string,
    ?'dry_run' => bool,
    ?'packet_length' => int,
    ?'remove_fields' => ?TrafficMirrorSessionFieldList,
    ?'session_number' => int,
    ?'traffic_mirror_filter_id' => ?TrafficMirrorFilterId,
    ?'traffic_mirror_session_id' => ?TrafficMirrorSessionId,
    ?'traffic_mirror_target_id' => ?TrafficMirrorTargetId,
    ?'virtual_network_id' => int,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->packet_length = $s['packet_length'] ?? 0;
    $this->remove_fields = $s['remove_fields'] ?? vec[];
    $this->session_number = $s['session_number'] ?? 0;
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
    $this->traffic_mirror_session_id = $s['traffic_mirror_session_id'] ?? '';
    $this->traffic_mirror_target_id = $s['traffic_mirror_target_id'] ?? '';
    $this->virtual_network_id = $s['virtual_network_id'] ?? 0;
  }
}

class ModifyTrafficMirrorSessionResult {
  public ?TrafficMirrorSession $traffic_mirror_session;

  public function __construct(shape(
    ?'traffic_mirror_session' => ?TrafficMirrorSession,
  ) $s = shape()) {
    $this->traffic_mirror_session = $s['traffic_mirror_session'] ?? null;
  }
}

class ModifyTransitGatewayVpcAttachmentRequest {
  public ?TransitGatewaySubnetIdList $add_subnet_ids;
  public bool $dry_run;
  public ?ModifyTransitGatewayVpcAttachmentRequestOptions $options;
  public ?TransitGatewaySubnetIdList $remove_subnet_ids;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'add_subnet_ids' => ?TransitGatewaySubnetIdList,
    ?'dry_run' => bool,
    ?'options' => ?ModifyTransitGatewayVpcAttachmentRequestOptions,
    ?'remove_subnet_ids' => ?TransitGatewaySubnetIdList,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->add_subnet_ids = $s['add_subnet_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->options = $s['options'] ?? null;
    $this->remove_subnet_ids = $s['remove_subnet_ids'] ?? vec[];
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class ModifyTransitGatewayVpcAttachmentRequestOptions {
  public ?DnsSupportValue $dns_support;
  public ?Ipv6SupportValue $ipv_6_support;

  public function __construct(shape(
    ?'dns_support' => ?DnsSupportValue,
    ?'ipv_6_support' => ?Ipv6SupportValue,
  ) $s = shape()) {
    $this->dns_support = $s['dns_support'] ?? '';
    $this->ipv_6_support = $s['ipv_6_support'] ?? '';
  }
}

class ModifyTransitGatewayVpcAttachmentResult {
  public ?TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;

  public function __construct(shape(
    ?'transit_gateway_vpc_attachment' => ?TransitGatewayVpcAttachment,
  ) $s = shape()) {
    $this->transit_gateway_vpc_attachment = $s['transit_gateway_vpc_attachment'] ?? null;
  }
}

class ModifyVolumeAttributeRequest {
  public ?AttributeBooleanValue $auto_enable_io;
  public bool $dry_run;
  public ?VolumeId $volume_id;

  public function __construct(shape(
    ?'auto_enable_io' => ?AttributeBooleanValue,
    ?'dry_run' => bool,
    ?'volume_id' => ?VolumeId,
  ) $s = shape()) {
    $this->auto_enable_io = $s['auto_enable_io'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

class ModifyVolumeRequest {
  public bool $dry_run;
  public int $iops;
  public int $size;
  public ?VolumeId $volume_id;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'iops' => int,
    ?'size' => int,
    ?'volume_id' => ?VolumeId,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->size = $s['size'] ?? 0;
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class ModifyVolumeResult {
  public ?VolumeModification $volume_modification;

  public function __construct(shape(
    ?'volume_modification' => ?VolumeModification,
  ) $s = shape()) {
    $this->volume_modification = $s['volume_modification'] ?? null;
  }
}

class ModifyVpcAttributeRequest {
  public ?AttributeBooleanValue $enable_dns_hostnames;
  public ?AttributeBooleanValue $enable_dns_support;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'enable_dns_hostnames' => ?AttributeBooleanValue,
    ?'enable_dns_support' => ?AttributeBooleanValue,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->enable_dns_hostnames = $s['enable_dns_hostnames'] ?? null;
    $this->enable_dns_support = $s['enable_dns_support'] ?? null;
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class ModifyVpcEndpointConnectionNotificationRequest {
  public ?ValueStringList $connection_events;
  public string $connection_notification_arn;
  public ?ConnectionNotificationId $connection_notification_id;
  public bool $dry_run;

  public function __construct(shape(
    ?'connection_events' => ?ValueStringList,
    ?'connection_notification_arn' => string,
    ?'connection_notification_id' => ?ConnectionNotificationId,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->connection_events = $s['connection_events'] ?? vec[];
    $this->connection_notification_arn = $s['connection_notification_arn'] ?? '';
    $this->connection_notification_id = $s['connection_notification_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class ModifyVpcEndpointConnectionNotificationResult {
  public bool $return_value;

  public function __construct(shape(
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->return_value = $s['return_value'] ?? false;
  }
}

class ModifyVpcEndpointRequest {
  public ?VpcEndpointRouteTableIdList $add_route_table_ids;
  public ?VpcEndpointSecurityGroupIdList $add_security_group_ids;
  public ?VpcEndpointSubnetIdList $add_subnet_ids;
  public bool $dry_run;
  public string $policy_document;
  public bool $private_dns_enabled;
  public ?VpcEndpointRouteTableIdList $remove_route_table_ids;
  public ?VpcEndpointSecurityGroupIdList $remove_security_group_ids;
  public ?VpcEndpointSubnetIdList $remove_subnet_ids;
  public bool $reset_policy;
  public ?VpcEndpointId $vpc_endpoint_id;

  public function __construct(shape(
    ?'add_route_table_ids' => ?VpcEndpointRouteTableIdList,
    ?'add_security_group_ids' => ?VpcEndpointSecurityGroupIdList,
    ?'add_subnet_ids' => ?VpcEndpointSubnetIdList,
    ?'dry_run' => bool,
    ?'policy_document' => string,
    ?'private_dns_enabled' => bool,
    ?'remove_route_table_ids' => ?VpcEndpointRouteTableIdList,
    ?'remove_security_group_ids' => ?VpcEndpointSecurityGroupIdList,
    ?'remove_subnet_ids' => ?VpcEndpointSubnetIdList,
    ?'reset_policy' => bool,
    ?'vpc_endpoint_id' => ?VpcEndpointId,
  ) $s = shape()) {
    $this->add_route_table_ids = $s['add_route_table_ids'] ?? vec[];
    $this->add_security_group_ids = $s['add_security_group_ids'] ?? vec[];
    $this->add_subnet_ids = $s['add_subnet_ids'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->policy_document = $s['policy_document'] ?? '';
    $this->private_dns_enabled = $s['private_dns_enabled'] ?? false;
    $this->remove_route_table_ids = $s['remove_route_table_ids'] ?? vec[];
    $this->remove_security_group_ids = $s['remove_security_group_ids'] ?? vec[];
    $this->remove_subnet_ids = $s['remove_subnet_ids'] ?? vec[];
    $this->reset_policy = $s['reset_policy'] ?? false;
    $this->vpc_endpoint_id = $s['vpc_endpoint_id'] ?? '';
  }
}

class ModifyVpcEndpointResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifyVpcEndpointServiceConfigurationRequest {
  public bool $acceptance_required;
  public ?ValueStringList $add_network_load_balancer_arns;
  public bool $dry_run;
  public string $private_dns_name;
  public ?ValueStringList $remove_network_load_balancer_arns;
  public bool $remove_private_dns_name;
  public ?VpcEndpointServiceId $service_id;

  public function __construct(shape(
    ?'acceptance_required' => bool,
    ?'add_network_load_balancer_arns' => ?ValueStringList,
    ?'dry_run' => bool,
    ?'private_dns_name' => string,
    ?'remove_network_load_balancer_arns' => ?ValueStringList,
    ?'remove_private_dns_name' => bool,
    ?'service_id' => ?VpcEndpointServiceId,
  ) $s = shape()) {
    $this->acceptance_required = $s['acceptance_required'] ?? false;
    $this->add_network_load_balancer_arns = $s['add_network_load_balancer_arns'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->remove_network_load_balancer_arns = $s['remove_network_load_balancer_arns'] ?? vec[];
    $this->remove_private_dns_name = $s['remove_private_dns_name'] ?? false;
    $this->service_id = $s['service_id'] ?? '';
  }
}

class ModifyVpcEndpointServiceConfigurationResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ModifyVpcEndpointServicePermissionsRequest {
  public ?ValueStringList $add_allowed_principals;
  public bool $dry_run;
  public ?ValueStringList $remove_allowed_principals;
  public ?VpcEndpointServiceId $service_id;

  public function __construct(shape(
    ?'add_allowed_principals' => ?ValueStringList,
    ?'dry_run' => bool,
    ?'remove_allowed_principals' => ?ValueStringList,
    ?'service_id' => ?VpcEndpointServiceId,
  ) $s = shape()) {
    $this->add_allowed_principals = $s['add_allowed_principals'] ?? vec[];
    $this->dry_run = $s['dry_run'] ?? false;
    $this->remove_allowed_principals = $s['remove_allowed_principals'] ?? vec[];
    $this->service_id = $s['service_id'] ?? '';
  }
}

class ModifyVpcEndpointServicePermissionsResult {
  public bool $return_value;

  public function __construct(shape(
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->return_value = $s['return_value'] ?? false;
  }
}

class ModifyVpcPeeringConnectionOptionsRequest {
  public ?PeeringConnectionOptionsRequest $accepter_peering_connection_options;
  public bool $dry_run;
  public ?PeeringConnectionOptionsRequest $requester_peering_connection_options;
  public ?VpcPeeringConnectionId $vpc_peering_connection_id;

  public function __construct(shape(
    ?'accepter_peering_connection_options' => ?PeeringConnectionOptionsRequest,
    ?'dry_run' => bool,
    ?'requester_peering_connection_options' => ?PeeringConnectionOptionsRequest,
    ?'vpc_peering_connection_id' => ?VpcPeeringConnectionId,
  ) $s = shape()) {
    $this->accepter_peering_connection_options = $s['accepter_peering_connection_options'] ?? null;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->requester_peering_connection_options = $s['requester_peering_connection_options'] ?? null;
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

class ModifyVpcPeeringConnectionOptionsResult {
  public ?PeeringConnectionOptions $accepter_peering_connection_options;
  public ?PeeringConnectionOptions $requester_peering_connection_options;

  public function __construct(shape(
    ?'accepter_peering_connection_options' => ?PeeringConnectionOptions,
    ?'requester_peering_connection_options' => ?PeeringConnectionOptions,
  ) $s = shape()) {
    $this->accepter_peering_connection_options = $s['accepter_peering_connection_options'] ?? null;
    $this->requester_peering_connection_options = $s['requester_peering_connection_options'] ?? null;
  }
}

class ModifyVpcTenancyRequest {
  public bool $dry_run;
  public ?VpcTenancy $instance_tenancy;
  public ?VpcId $vpc_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_tenancy' => ?VpcTenancy,
    ?'vpc_id' => ?VpcId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_tenancy = $s['instance_tenancy'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class ModifyVpcTenancyResult {
  public bool $return_value;

  public function __construct(shape(
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->return_value = $s['return_value'] ?? false;
  }
}

class ModifyVpnConnectionRequest {
  public ?CustomerGatewayId $customer_gateway_id;
  public bool $dry_run;
  public ?TransitGatewayId $transit_gateway_id;
  public ?VpnConnectionId $vpn_connection_id;
  public ?VpnGatewayId $vpn_gateway_id;

  public function __construct(shape(
    ?'customer_gateway_id' => ?CustomerGatewayId,
    ?'dry_run' => bool,
    ?'transit_gateway_id' => ?TransitGatewayId,
    ?'vpn_connection_id' => ?VpnConnectionId,
    ?'vpn_gateway_id' => ?VpnGatewayId,
  ) $s = shape()) {
    $this->customer_gateway_id = $s['customer_gateway_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->vpn_connection_id = $s['vpn_connection_id'] ?? '';
    $this->vpn_gateway_id = $s['vpn_gateway_id'] ?? '';
  }
}

class ModifyVpnConnectionResult {
  public ?VpnConnection $vpn_connection;

  public function __construct(shape(
    ?'vpn_connection' => ?VpnConnection,
  ) $s = shape()) {
    $this->vpn_connection = $s['vpn_connection'] ?? null;
  }
}

class ModifyVpnTunnelCertificateRequest {
  public bool $dry_run;
  public ?VpnConnectionId $vpn_connection_id;
  public string $vpn_tunnel_outside_ip_address;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpn_connection_id' => ?VpnConnectionId,
    ?'vpn_tunnel_outside_ip_address' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpn_connection_id = $s['vpn_connection_id'] ?? '';
    $this->vpn_tunnel_outside_ip_address = $s['vpn_tunnel_outside_ip_address'] ?? '';
  }
}

class ModifyVpnTunnelCertificateResult {
  public ?VpnConnection $vpn_connection;

  public function __construct(shape(
    ?'vpn_connection' => ?VpnConnection,
  ) $s = shape()) {
    $this->vpn_connection = $s['vpn_connection'] ?? null;
  }
}

class ModifyVpnTunnelOptionsRequest {
  public bool $dry_run;
  public ?ModifyVpnTunnelOptionsSpecification $tunnel_options;
  public ?VpnConnectionId $vpn_connection_id;
  public string $vpn_tunnel_outside_ip_address;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'tunnel_options' => ?ModifyVpnTunnelOptionsSpecification,
    ?'vpn_connection_id' => ?VpnConnectionId,
    ?'vpn_tunnel_outside_ip_address' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->tunnel_options = $s['tunnel_options'] ?? null;
    $this->vpn_connection_id = $s['vpn_connection_id'] ?? '';
    $this->vpn_tunnel_outside_ip_address = $s['vpn_tunnel_outside_ip_address'] ?? '';
  }
}

class ModifyVpnTunnelOptionsResult {
  public ?VpnConnection $vpn_connection;

  public function __construct(shape(
    ?'vpn_connection' => ?VpnConnection,
  ) $s = shape()) {
    $this->vpn_connection = $s['vpn_connection'] ?? null;
  }
}

class ModifyVpnTunnelOptionsSpecification {
  public int $dpd_timeout_seconds;
  public ?IKEVersionsRequestList $ike_versions;
  public ?Phase1DHGroupNumbersRequestList $phase_1_dh_group_numbers;
  public ?Phase1EncryptionAlgorithmsRequestList $phase_1_encryption_algorithms;
  public ?Phase1IntegrityAlgorithmsRequestList $phase_1_integrity_algorithms;
  public int $phase_1_lifetime_seconds;
  public ?Phase2DHGroupNumbersRequestList $phase_2_dh_group_numbers;
  public ?Phase2EncryptionAlgorithmsRequestList $phase_2_encryption_algorithms;
  public ?Phase2IntegrityAlgorithmsRequestList $phase_2_integrity_algorithms;
  public int $phase_2_lifetime_seconds;
  public string $pre_shared_key;
  public int $rekey_fuzz_percentage;
  public int $rekey_margin_time_seconds;
  public int $replay_window_size;
  public string $tunnel_inside_cidr;

  public function __construct(shape(
    ?'dpd_timeout_seconds' => int,
    ?'ike_versions' => ?IKEVersionsRequestList,
    ?'phase_1_dh_group_numbers' => ?Phase1DHGroupNumbersRequestList,
    ?'phase_1_encryption_algorithms' => ?Phase1EncryptionAlgorithmsRequestList,
    ?'phase_1_integrity_algorithms' => ?Phase1IntegrityAlgorithmsRequestList,
    ?'phase_1_lifetime_seconds' => int,
    ?'phase_2_dh_group_numbers' => ?Phase2DHGroupNumbersRequestList,
    ?'phase_2_encryption_algorithms' => ?Phase2EncryptionAlgorithmsRequestList,
    ?'phase_2_integrity_algorithms' => ?Phase2IntegrityAlgorithmsRequestList,
    ?'phase_2_lifetime_seconds' => int,
    ?'pre_shared_key' => string,
    ?'rekey_fuzz_percentage' => int,
    ?'rekey_margin_time_seconds' => int,
    ?'replay_window_size' => int,
    ?'tunnel_inside_cidr' => string,
  ) $s = shape()) {
    $this->dpd_timeout_seconds = $s['dpd_timeout_seconds'] ?? 0;
    $this->ike_versions = $s['ike_versions'] ?? vec[];
    $this->phase_1_dh_group_numbers = $s['phase_1_dh_group_numbers'] ?? vec[];
    $this->phase_1_encryption_algorithms = $s['phase_1_encryption_algorithms'] ?? vec[];
    $this->phase_1_integrity_algorithms = $s['phase_1_integrity_algorithms'] ?? vec[];
    $this->phase_1_lifetime_seconds = $s['phase_1_lifetime_seconds'] ?? 0;
    $this->phase_2_dh_group_numbers = $s['phase_2_dh_group_numbers'] ?? vec[];
    $this->phase_2_encryption_algorithms = $s['phase_2_encryption_algorithms'] ?? vec[];
    $this->phase_2_integrity_algorithms = $s['phase_2_integrity_algorithms'] ?? vec[];
    $this->phase_2_lifetime_seconds = $s['phase_2_lifetime_seconds'] ?? 0;
    $this->pre_shared_key = $s['pre_shared_key'] ?? '';
    $this->rekey_fuzz_percentage = $s['rekey_fuzz_percentage'] ?? 0;
    $this->rekey_margin_time_seconds = $s['rekey_margin_time_seconds'] ?? 0;
    $this->replay_window_size = $s['replay_window_size'] ?? 0;
    $this->tunnel_inside_cidr = $s['tunnel_inside_cidr'] ?? '';
  }
}

class MonitorInstancesRequest {
  public bool $dry_run;
  public ?InstanceIdStringList $instance_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_ids' => ?InstanceIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class MonitorInstancesResult {
  public ?InstanceMonitoringList $instance_monitorings;

  public function __construct(shape(
    ?'instance_monitorings' => ?InstanceMonitoringList,
  ) $s = shape()) {
    $this->instance_monitorings = $s['instance_monitorings'] ?? vec[];
  }
}

class Monitoring {
  public ?MonitoringState $state;

  public function __construct(shape(
    ?'state' => ?MonitoringState,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
  }
}

type MonitoringState = string;

class MoveAddressToVpcRequest {
  public bool $dry_run;
  public string $public_ip;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

class MoveAddressToVpcResult {
  public string $allocation_id;
  public ?Status $status;

  public function __construct(shape(
    ?'allocation_id' => string,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type MoveStatus = string;

class MovingAddressStatus {
  public ?MoveStatus $move_status;
  public string $public_ip;

  public function __construct(shape(
    ?'move_status' => ?MoveStatus,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->move_status = $s['move_status'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

type MovingAddressStatusSet = vec<MovingAddressStatus>;

type MulticastSupportValue = string;

class NatGateway {
  public ?DateTime $create_time;
  public ?DateTime $delete_time;
  public string $failure_code;
  public string $failure_message;
  public ?NatGatewayAddressList $nat_gateway_addresses;
  public string $nat_gateway_id;
  public ?ProvisionedBandwidth $provisioned_bandwidth;
  public ?NatGatewayState $state;
  public string $subnet_id;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'create_time' => ?DateTime,
    ?'delete_time' => ?DateTime,
    ?'failure_code' => string,
    ?'failure_message' => string,
    ?'nat_gateway_addresses' => ?NatGatewayAddressList,
    ?'nat_gateway_id' => string,
    ?'provisioned_bandwidth' => ?ProvisionedBandwidth,
    ?'state' => ?NatGatewayState,
    ?'subnet_id' => string,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->create_time = $s['create_time'] ?? 0;
    $this->delete_time = $s['delete_time'] ?? 0;
    $this->failure_code = $s['failure_code'] ?? '';
    $this->failure_message = $s['failure_message'] ?? '';
    $this->nat_gateway_addresses = $s['nat_gateway_addresses'] ?? vec[];
    $this->nat_gateway_id = $s['nat_gateway_id'] ?? '';
    $this->provisioned_bandwidth = $s['provisioned_bandwidth'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class NatGatewayAddress {
  public string $allocation_id;
  public string $network_interface_id;
  public string $private_ip;
  public string $public_ip;

  public function __construct(shape(
    ?'allocation_id' => string,
    ?'network_interface_id' => string,
    ?'private_ip' => string,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip = $s['private_ip'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

type NatGatewayAddressList = vec<NatGatewayAddress>;

type NatGatewayId = string;

type NatGatewayIdStringList = vec<NatGatewayId>;

type NatGatewayList = vec<NatGateway>;

type NatGatewayState = string;

class NetworkAcl {
  public ?NetworkAclAssociationList $associations;
  public ?NetworkAclEntryList $entries;
  public bool $is_default;
  public string $network_acl_id;
  public string $owner_id;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'associations' => ?NetworkAclAssociationList,
    ?'entries' => ?NetworkAclEntryList,
    ?'is_default' => bool,
    ?'network_acl_id' => string,
    ?'owner_id' => string,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->associations = $s['associations'] ?? vec[];
    $this->entries = $s['entries'] ?? vec[];
    $this->is_default = $s['is_default'] ?? false;
    $this->network_acl_id = $s['network_acl_id'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class NetworkAclAssociation {
  public string $network_acl_association_id;
  public string $network_acl_id;
  public string $subnet_id;

  public function __construct(shape(
    ?'network_acl_association_id' => string,
    ?'network_acl_id' => string,
    ?'subnet_id' => string,
  ) $s = shape()) {
    $this->network_acl_association_id = $s['network_acl_association_id'] ?? '';
    $this->network_acl_id = $s['network_acl_id'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type NetworkAclAssociationId = string;

type NetworkAclAssociationList = vec<NetworkAclAssociation>;

class NetworkAclEntry {
  public string $cidr_block;
  public bool $egress;
  public ?IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
  public ?PortRange $port_range;
  public string $protocol;
  public ?RuleAction $rule_action;
  public int $rule_number;

  public function __construct(shape(
    ?'cidr_block' => string,
    ?'egress' => bool,
    ?'icmp_type_code' => ?IcmpTypeCode,
    ?'ipv_6_cidr_block' => string,
    ?'port_range' => ?PortRange,
    ?'protocol' => string,
    ?'rule_action' => ?RuleAction,
    ?'rule_number' => int,
  ) $s = shape()) {
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->egress = $s['egress'] ?? false;
    $this->icmp_type_code = $s['icmp_type_code'] ?? null;
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->port_range = $s['port_range'] ?? null;
    $this->protocol = $s['protocol'] ?? '';
    $this->rule_action = $s['rule_action'] ?? '';
    $this->rule_number = $s['rule_number'] ?? 0;
  }
}

type NetworkAclEntryList = vec<NetworkAclEntry>;

type NetworkAclId = string;

type NetworkAclIdStringList = vec<NetworkAclId>;

type NetworkAclList = vec<NetworkAcl>;

class NetworkInfo {
  public ?EnaSupport $ena_support;
  public ?MaxIpv4AddrPerInterface $ipv_4_addresses_per_interface;
  public ?MaxIpv6AddrPerInterface $ipv_6_addresses_per_interface;
  public ?Ipv6Flag $ipv_6_supported;
  public ?MaxNetworkInterfaces $maximum_network_interfaces;
  public ?NetworkPerformance $network_performance;

  public function __construct(shape(
    ?'ena_support' => ?EnaSupport,
    ?'ipv_4_addresses_per_interface' => ?MaxIpv4AddrPerInterface,
    ?'ipv_6_addresses_per_interface' => ?MaxIpv6AddrPerInterface,
    ?'ipv_6_supported' => ?Ipv6Flag,
    ?'maximum_network_interfaces' => ?MaxNetworkInterfaces,
    ?'network_performance' => ?NetworkPerformance,
  ) $s = shape()) {
    $this->ena_support = $s['ena_support'] ?? '';
    $this->ipv_4_addresses_per_interface = $s['ipv_4_addresses_per_interface'] ?? 0;
    $this->ipv_6_addresses_per_interface = $s['ipv_6_addresses_per_interface'] ?? 0;
    $this->ipv_6_supported = $s['ipv_6_supported'] ?? false;
    $this->maximum_network_interfaces = $s['maximum_network_interfaces'] ?? 0;
    $this->network_performance = $s['network_performance'] ?? '';
  }
}

class NetworkInterface {
  public ?NetworkInterfaceAssociation $association;
  public ?NetworkInterfaceAttachment $attachment;
  public string $availability_zone;
  public string $description;
  public ?GroupIdentifierList $groups;
  public ?NetworkInterfaceType $interface_type;
  public ?NetworkInterfaceIpv6AddressesList $ipv_6_addresses;
  public string $mac_address;
  public string $network_interface_id;
  public string $outpost_arn;
  public string $owner_id;
  public string $private_dns_name;
  public string $private_ip_address;
  public ?NetworkInterfacePrivateIpAddressList $private_ip_addresses;
  public string $requester_id;
  public bool $requester_managed;
  public bool $source_dest_check;
  public ?NetworkInterfaceStatus $status;
  public string $subnet_id;
  public ?TagList $tag_set;
  public string $vpc_id;

  public function __construct(shape(
    ?'association' => ?NetworkInterfaceAssociation,
    ?'attachment' => ?NetworkInterfaceAttachment,
    ?'availability_zone' => string,
    ?'description' => string,
    ?'groups' => ?GroupIdentifierList,
    ?'interface_type' => ?NetworkInterfaceType,
    ?'ipv_6_addresses' => ?NetworkInterfaceIpv6AddressesList,
    ?'mac_address' => string,
    ?'network_interface_id' => string,
    ?'outpost_arn' => string,
    ?'owner_id' => string,
    ?'private_dns_name' => string,
    ?'private_ip_address' => string,
    ?'private_ip_addresses' => ?NetworkInterfacePrivateIpAddressList,
    ?'requester_id' => string,
    ?'requester_managed' => bool,
    ?'source_dest_check' => bool,
    ?'status' => ?NetworkInterfaceStatus,
    ?'subnet_id' => string,
    ?'tag_set' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->association = $s['association'] ?? null;
    $this->attachment = $s['attachment'] ?? null;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->groups = $s['groups'] ?? vec[];
    $this->interface_type = $s['interface_type'] ?? '';
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->mac_address = $s['mac_address'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
    $this->requester_id = $s['requester_id'] ?? '';
    $this->requester_managed = $s['requester_managed'] ?? false;
    $this->source_dest_check = $s['source_dest_check'] ?? false;
    $this->status = $s['status'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tag_set = $s['tag_set'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class NetworkInterfaceAssociation {
  public string $allocation_id;
  public string $association_id;
  public string $ip_owner_id;
  public string $public_dns_name;
  public string $public_ip;

  public function __construct(shape(
    ?'allocation_id' => string,
    ?'association_id' => string,
    ?'ip_owner_id' => string,
    ?'public_dns_name' => string,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->association_id = $s['association_id'] ?? '';
    $this->ip_owner_id = $s['ip_owner_id'] ?? '';
    $this->public_dns_name = $s['public_dns_name'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

class NetworkInterfaceAttachment {
  public ?DateTime $attach_time;
  public string $attachment_id;
  public bool $delete_on_termination;
  public int $device_index;
  public string $instance_id;
  public string $instance_owner_id;
  public ?AttachmentStatus $status;

  public function __construct(shape(
    ?'attach_time' => ?DateTime,
    ?'attachment_id' => string,
    ?'delete_on_termination' => bool,
    ?'device_index' => int,
    ?'instance_id' => string,
    ?'instance_owner_id' => string,
    ?'status' => ?AttachmentStatus,
  ) $s = shape()) {
    $this->attach_time = $s['attach_time'] ?? 0;
    $this->attachment_id = $s['attachment_id'] ?? '';
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->device_index = $s['device_index'] ?? 0;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_owner_id = $s['instance_owner_id'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class NetworkInterfaceAttachmentChanges {
  public ?NetworkInterfaceAttachmentId $attachment_id;
  public bool $delete_on_termination;

  public function __construct(shape(
    ?'attachment_id' => ?NetworkInterfaceAttachmentId,
    ?'delete_on_termination' => bool,
  ) $s = shape()) {
    $this->attachment_id = $s['attachment_id'] ?? '';
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
  }
}

type NetworkInterfaceAttachmentId = string;

type NetworkInterfaceAttribute = string;

type NetworkInterfaceCreationType = string;

type NetworkInterfaceId = string;

type NetworkInterfaceIdList = vec<NetworkInterfaceId>;

class NetworkInterfaceIpv6Address {
  public string $ipv_6_address;

  public function __construct(shape(
    ?'ipv_6_address' => string,
  ) $s = shape()) {
    $this->ipv_6_address = $s['ipv_6_address'] ?? '';
  }
}

type NetworkInterfaceIpv6AddressesList = vec<NetworkInterfaceIpv6Address>;

type NetworkInterfaceList = vec<NetworkInterface>;

class NetworkInterfacePermission {
  public string $aws_account_id;
  public string $aws_service;
  public string $network_interface_id;
  public string $network_interface_permission_id;
  public ?InterfacePermissionType $permission;
  public ?NetworkInterfacePermissionState $permission_state;

  public function __construct(shape(
    ?'aws_account_id' => string,
    ?'aws_service' => string,
    ?'network_interface_id' => string,
    ?'network_interface_permission_id' => string,
    ?'permission' => ?InterfacePermissionType,
    ?'permission_state' => ?NetworkInterfacePermissionState,
  ) $s = shape()) {
    $this->aws_account_id = $s['aws_account_id'] ?? '';
    $this->aws_service = $s['aws_service'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->network_interface_permission_id = $s['network_interface_permission_id'] ?? '';
    $this->permission = $s['permission'] ?? '';
    $this->permission_state = $s['permission_state'] ?? null;
  }
}

type NetworkInterfacePermissionId = string;

type NetworkInterfacePermissionIdList = vec<NetworkInterfacePermissionId>;

type NetworkInterfacePermissionList = vec<NetworkInterfacePermission>;

class NetworkInterfacePermissionState {
  public ?NetworkInterfacePermissionStateCode $state;
  public string $status_message;

  public function __construct(shape(
    ?'state' => ?NetworkInterfacePermissionStateCode,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type NetworkInterfacePermissionStateCode = string;

class NetworkInterfacePrivateIpAddress {
  public ?NetworkInterfaceAssociation $association;
  public bool $primary;
  public string $private_dns_name;
  public string $private_ip_address;

  public function __construct(shape(
    ?'association' => ?NetworkInterfaceAssociation,
    ?'primary' => bool,
    ?'private_dns_name' => string,
    ?'private_ip_address' => string,
  ) $s = shape()) {
    $this->association = $s['association'] ?? null;
    $this->primary = $s['primary'] ?? false;
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
  }
}

type NetworkInterfacePrivateIpAddressList = vec<NetworkInterfacePrivateIpAddress>;

type NetworkInterfaceStatus = string;

type NetworkInterfaceType = string;

type NetworkPerformance = string;

class NewDhcpConfiguration {
  public string $key;
  public ?ValueStringList $values;

  public function __construct(shape(
    ?'key' => string,
    ?'values' => ?ValueStringList,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->values = $s['values'] ?? vec[];
  }
}

type NewDhcpConfigurationList = vec<NewDhcpConfiguration>;

type NextToken = string;

type OccurrenceDayRequestSet = vec<Integer>;

type OccurrenceDaySet = vec<Integer>;

type OfferingClassType = string;

type OfferingId = string;

type OfferingTypeValues = string;

type OnDemandAllocationStrategy = string;

class OnDemandOptions {
  public ?FleetOnDemandAllocationStrategy $allocation_strategy;
  public ?CapacityReservationOptions $capacity_reservation_options;
  public string $max_total_price;
  public int $min_target_capacity;
  public bool $single_availability_zone;
  public bool $single_instance_type;

  public function __construct(shape(
    ?'allocation_strategy' => ?FleetOnDemandAllocationStrategy,
    ?'capacity_reservation_options' => ?CapacityReservationOptions,
    ?'max_total_price' => string,
    ?'min_target_capacity' => int,
    ?'single_availability_zone' => bool,
    ?'single_instance_type' => bool,
  ) $s = shape()) {
    $this->allocation_strategy = $s['allocation_strategy'] ?? '';
    $this->capacity_reservation_options = $s['capacity_reservation_options'] ?? null;
    $this->max_total_price = $s['max_total_price'] ?? '';
    $this->min_target_capacity = $s['min_target_capacity'] ?? 0;
    $this->single_availability_zone = $s['single_availability_zone'] ?? false;
    $this->single_instance_type = $s['single_instance_type'] ?? false;
  }
}

class OnDemandOptionsRequest {
  public ?FleetOnDemandAllocationStrategy $allocation_strategy;
  public ?CapacityReservationOptionsRequest $capacity_reservation_options;
  public string $max_total_price;
  public int $min_target_capacity;
  public bool $single_availability_zone;
  public bool $single_instance_type;

  public function __construct(shape(
    ?'allocation_strategy' => ?FleetOnDemandAllocationStrategy,
    ?'capacity_reservation_options' => ?CapacityReservationOptionsRequest,
    ?'max_total_price' => string,
    ?'min_target_capacity' => int,
    ?'single_availability_zone' => bool,
    ?'single_instance_type' => bool,
  ) $s = shape()) {
    $this->allocation_strategy = $s['allocation_strategy'] ?? '';
    $this->capacity_reservation_options = $s['capacity_reservation_options'] ?? null;
    $this->max_total_price = $s['max_total_price'] ?? '';
    $this->min_target_capacity = $s['min_target_capacity'] ?? 0;
    $this->single_availability_zone = $s['single_availability_zone'] ?? false;
    $this->single_instance_type = $s['single_instance_type'] ?? false;
  }
}

type OperationType = string;

type OwnerStringList = vec<String>;

type PaymentOption = string;

class PciId {
  public string $device_id;
  public string $subsystem_id;
  public string $subsystem_vendor_id;
  public string $vendor_id;

  public function __construct(shape(
    ?'device_id' => string,
    ?'subsystem_id' => string,
    ?'subsystem_vendor_id' => string,
    ?'vendor_id' => string,
  ) $s = shape()) {
    $this->device_id = $s['device_id'] ?? '';
    $this->subsystem_id = $s['subsystem_id'] ?? '';
    $this->subsystem_vendor_id = $s['subsystem_vendor_id'] ?? '';
    $this->vendor_id = $s['vendor_id'] ?? '';
  }
}

class PeeringAttachmentStatus {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class PeeringConnectionOptions {
  public bool $allow_dns_resolution_from_remote_vpc;
  public bool $allow_egress_from_local_classic_link_to_remote_vpc;
  public bool $allow_egress_from_local_vpc_to_remote_classic_link;

  public function __construct(shape(
    ?'allow_dns_resolution_from_remote_vpc' => bool,
    ?'allow_egress_from_local_classic_link_to_remote_vpc' => bool,
    ?'allow_egress_from_local_vpc_to_remote_classic_link' => bool,
  ) $s = shape()) {
    $this->allow_dns_resolution_from_remote_vpc = $s['allow_dns_resolution_from_remote_vpc'] ?? false;
    $this->allow_egress_from_local_classic_link_to_remote_vpc = $s['allow_egress_from_local_classic_link_to_remote_vpc'] ?? false;
    $this->allow_egress_from_local_vpc_to_remote_classic_link = $s['allow_egress_from_local_vpc_to_remote_classic_link'] ?? false;
  }
}

class PeeringConnectionOptionsRequest {
  public bool $allow_dns_resolution_from_remote_vpc;
  public bool $allow_egress_from_local_classic_link_to_remote_vpc;
  public bool $allow_egress_from_local_vpc_to_remote_classic_link;

  public function __construct(shape(
    ?'allow_dns_resolution_from_remote_vpc' => bool,
    ?'allow_egress_from_local_classic_link_to_remote_vpc' => bool,
    ?'allow_egress_from_local_vpc_to_remote_classic_link' => bool,
  ) $s = shape()) {
    $this->allow_dns_resolution_from_remote_vpc = $s['allow_dns_resolution_from_remote_vpc'] ?? false;
    $this->allow_egress_from_local_classic_link_to_remote_vpc = $s['allow_egress_from_local_classic_link_to_remote_vpc'] ?? false;
    $this->allow_egress_from_local_vpc_to_remote_classic_link = $s['allow_egress_from_local_vpc_to_remote_classic_link'] ?? false;
  }
}

class PeeringTgwInfo {
  public string $owner_id;
  public string $region;
  public string $transit_gateway_id;

  public function __construct(shape(
    ?'owner_id' => string,
    ?'region' => string,
    ?'transit_gateway_id' => string,
  ) $s = shape()) {
    $this->owner_id = $s['owner_id'] ?? '';
    $this->region = $s['region'] ?? '';
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
  }
}

type PermissionGroup = string;

type Phase1DHGroupNumbersList = vec<Phase1DHGroupNumbersListValue>;

class Phase1DHGroupNumbersListValue {
  public int $value;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
  }
}

type Phase1DHGroupNumbersRequestList = vec<Phase1DHGroupNumbersRequestListValue>;

class Phase1DHGroupNumbersRequestListValue {
  public int $value;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
  }
}

type Phase1EncryptionAlgorithmsList = vec<Phase1EncryptionAlgorithmsListValue>;

class Phase1EncryptionAlgorithmsListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type Phase1EncryptionAlgorithmsRequestList = vec<Phase1EncryptionAlgorithmsRequestListValue>;

class Phase1EncryptionAlgorithmsRequestListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type Phase1IntegrityAlgorithmsList = vec<Phase1IntegrityAlgorithmsListValue>;

class Phase1IntegrityAlgorithmsListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type Phase1IntegrityAlgorithmsRequestList = vec<Phase1IntegrityAlgorithmsRequestListValue>;

class Phase1IntegrityAlgorithmsRequestListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type Phase2DHGroupNumbersList = vec<Phase2DHGroupNumbersListValue>;

class Phase2DHGroupNumbersListValue {
  public int $value;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
  }
}

type Phase2DHGroupNumbersRequestList = vec<Phase2DHGroupNumbersRequestListValue>;

class Phase2DHGroupNumbersRequestListValue {
  public int $value;

  public function __construct(shape(
    ?'value' => int,
  ) $s = shape()) {
    $this->value = $s['value'] ?? 0;
  }
}

type Phase2EncryptionAlgorithmsList = vec<Phase2EncryptionAlgorithmsListValue>;

class Phase2EncryptionAlgorithmsListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type Phase2EncryptionAlgorithmsRequestList = vec<Phase2EncryptionAlgorithmsRequestListValue>;

class Phase2EncryptionAlgorithmsRequestListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type Phase2IntegrityAlgorithmsList = vec<Phase2IntegrityAlgorithmsListValue>;

class Phase2IntegrityAlgorithmsListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type Phase2IntegrityAlgorithmsRequestList = vec<Phase2IntegrityAlgorithmsRequestListValue>;

class Phase2IntegrityAlgorithmsRequestListValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

class Placement {
  public string $affinity;
  public string $availability_zone;
  public string $group_name;
  public string $host_id;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $spread_domain;
  public ?Tenancy $tenancy;

  public function __construct(shape(
    ?'affinity' => string,
    ?'availability_zone' => string,
    ?'group_name' => string,
    ?'host_id' => string,
    ?'host_resource_group_arn' => string,
    ?'partition_number' => int,
    ?'spread_domain' => string,
    ?'tenancy' => ?Tenancy,
  ) $s = shape()) {
    $this->affinity = $s['affinity'] ?? '';
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->host_id = $s['host_id'] ?? '';
    $this->host_resource_group_arn = $s['host_resource_group_arn'] ?? '';
    $this->partition_number = $s['partition_number'] ?? 0;
    $this->spread_domain = $s['spread_domain'] ?? '';
    $this->tenancy = $s['tenancy'] ?? '';
  }
}

class PlacementGroup {
  public string $group_id;
  public string $group_name;
  public int $partition_count;
  public ?PlacementGroupState $state;
  public ?PlacementStrategy $strategy;
  public ?TagList $tags;

  public function __construct(shape(
    ?'group_id' => string,
    ?'group_name' => string,
    ?'partition_count' => int,
    ?'state' => ?PlacementGroupState,
    ?'strategy' => ?PlacementStrategy,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->partition_count = $s['partition_count'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->strategy = $s['strategy'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type PlacementGroupId = string;

type PlacementGroupIdStringList = vec<PlacementGroupId>;

class PlacementGroupInfo {
  public ?PlacementGroupStrategyList $supported_strategies;

  public function __construct(shape(
    ?'supported_strategies' => ?PlacementGroupStrategyList,
  ) $s = shape()) {
    $this->supported_strategies = $s['supported_strategies'] ?? vec[];
  }
}

type PlacementGroupList = vec<PlacementGroup>;

type PlacementGroupName = string;

type PlacementGroupState = string;

type PlacementGroupStrategy = string;

type PlacementGroupStrategyList = vec<PlacementGroupStrategy>;

type PlacementGroupStringList = vec<PlacementGroupName>;

class PlacementResponse {
  public string $group_name;

  public function __construct(shape(
    ?'group_name' => string,
  ) $s = shape()) {
    $this->group_name = $s['group_name'] ?? '';
  }
}

type PlacementStrategy = string;

type PlatformValues = string;

class PoolCidrBlock {
  public string $cidr;

  public function __construct(shape(
    ?'cidr' => string,
  ) $s = shape()) {
    $this->cidr = $s['cidr'] ?? '';
  }
}

type PoolCidrBlocksSet = vec<PoolCidrBlock>;

type PoolMaxResults = int;

class PortRange {
  public int $from;
  public int $to;

  public function __construct(shape(
    ?'from' => int,
    ?'to' => int,
  ) $s = shape()) {
    $this->from = $s['from'] ?? 0;
    $this->to = $s['to'] ?? 0;
  }
}

class PrefixList {
  public ?ValueStringList $cidrs;
  public string $prefix_list_id;
  public string $prefix_list_name;

  public function __construct(shape(
    ?'cidrs' => ?ValueStringList,
    ?'prefix_list_id' => string,
    ?'prefix_list_name' => string,
  ) $s = shape()) {
    $this->cidrs = $s['cidrs'] ?? vec[];
    $this->prefix_list_id = $s['prefix_list_id'] ?? '';
    $this->prefix_list_name = $s['prefix_list_name'] ?? '';
  }
}

class PrefixListId {
  public string $description;
  public string $prefix_list_id;

  public function __construct(shape(
    ?'description' => string,
    ?'prefix_list_id' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->prefix_list_id = $s['prefix_list_id'] ?? '';
  }
}

type PrefixListIdList = vec<PrefixListId>;

type PrefixListIdSet = vec<String>;

type PrefixListResourceId = string;

type PrefixListResourceIdStringList = vec<PrefixListResourceId>;

type PrefixListSet = vec<PrefixList>;

class PriceSchedule {
  public bool $active;
  public ?CurrencyCodeValues $currency_code;
  public ?Double $price;
  public ?Long $term;

  public function __construct(shape(
    ?'active' => bool,
    ?'currency_code' => ?CurrencyCodeValues,
    ?'price' => ?Double,
    ?'term' => ?Long,
  ) $s = shape()) {
    $this->active = $s['active'] ?? false;
    $this->currency_code = $s['currency_code'] ?? '';
    $this->price = $s['price'] ?? 0.0;
    $this->term = $s['term'] ?? 0;
  }
}

type PriceScheduleList = vec<PriceSchedule>;

class PriceScheduleSpecification {
  public ?CurrencyCodeValues $currency_code;
  public ?Double $price;
  public ?Long $term;

  public function __construct(shape(
    ?'currency_code' => ?CurrencyCodeValues,
    ?'price' => ?Double,
    ?'term' => ?Long,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->price = $s['price'] ?? 0.0;
    $this->term = $s['term'] ?? 0;
  }
}

type PriceScheduleSpecificationList = vec<PriceScheduleSpecification>;

class PricingDetail {
  public int $count;
  public ?Double $price;

  public function __construct(shape(
    ?'count' => int,
    ?'price' => ?Double,
  ) $s = shape()) {
    $this->count = $s['count'] ?? 0;
    $this->price = $s['price'] ?? 0.0;
  }
}

type PricingDetailsList = vec<PricingDetail>;

class PrincipalIdFormat {
  public string $arn;
  public ?IdFormatList $statuses;

  public function __construct(shape(
    ?'arn' => string,
    ?'statuses' => ?IdFormatList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->statuses = $s['statuses'] ?? vec[];
  }
}

type PrincipalIdFormatList = vec<PrincipalIdFormat>;

type PrincipalType = string;

class PrivateDnsNameConfiguration {
  public string $name;
  public ?DnsNameState $state;
  public string $type;
  public string $value;

  public function __construct(shape(
    ?'name' => string,
    ?'state' => ?DnsNameState,
    ?'type' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type PrivateIpAddressConfigSet = vec<ScheduledInstancesPrivateIpAddressConfig>;

class PrivateIpAddressSpecification {
  public bool $primary;
  public string $private_ip_address;

  public function __construct(shape(
    ?'primary' => bool,
    ?'private_ip_address' => string,
  ) $s = shape()) {
    $this->primary = $s['primary'] ?? false;
    $this->private_ip_address = $s['private_ip_address'] ?? '';
  }
}

type PrivateIpAddressSpecificationList = vec<PrivateIpAddressSpecification>;

type PrivateIpAddressStringList = vec<String>;

class ProcessorInfo {
  public ?ArchitectureTypeList $supported_architectures;
  public ?ProcessorSustainedClockSpeed $sustained_clock_speed_in_ghz;

  public function __construct(shape(
    ?'supported_architectures' => ?ArchitectureTypeList,
    ?'sustained_clock_speed_in_ghz' => ?ProcessorSustainedClockSpeed,
  ) $s = shape()) {
    $this->supported_architectures = $s['supported_architectures'] ?? vec[];
    $this->sustained_clock_speed_in_ghz = $s['sustained_clock_speed_in_ghz'] ?? 0.0;
  }
}

type ProcessorSustainedClockSpeed = float;

class ProductCode {
  public string $product_code_id;
  public ?ProductCodeValues $product_code_type;

  public function __construct(shape(
    ?'product_code_id' => string,
    ?'product_code_type' => ?ProductCodeValues,
  ) $s = shape()) {
    $this->product_code_id = $s['product_code_id'] ?? '';
    $this->product_code_type = $s['product_code_type'] ?? '';
  }
}

type ProductCodeList = vec<ProductCode>;

type ProductCodeStringList = vec<String>;

type ProductCodeValues = string;

type ProductDescriptionList = vec<String>;

class PropagatingVgw {
  public string $gateway_id;

  public function __construct(shape(
    ?'gateway_id' => string,
  ) $s = shape()) {
    $this->gateway_id = $s['gateway_id'] ?? '';
  }
}

type PropagatingVgwList = vec<PropagatingVgw>;

class ProvisionByoipCidrRequest {
  public string $cidr;
  public ?CidrAuthorizationContext $cidr_authorization_context;
  public string $description;
  public bool $dry_run;
  public bool $publicly_advertisable;

  public function __construct(shape(
    ?'cidr' => string,
    ?'cidr_authorization_context' => ?CidrAuthorizationContext,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'publicly_advertisable' => bool,
  ) $s = shape()) {
    $this->cidr = $s['cidr'] ?? '';
    $this->cidr_authorization_context = $s['cidr_authorization_context'] ?? null;
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->publicly_advertisable = $s['publicly_advertisable'] ?? false;
  }
}

class ProvisionByoipCidrResult {
  public ?ByoipCidr $byoip_cidr;

  public function __construct(shape(
    ?'byoip_cidr' => ?ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $s['byoip_cidr'] ?? null;
  }
}

class ProvisionedBandwidth {
  public ?DateTime $provision_time;
  public string $provisioned;
  public ?DateTime $request_time;
  public string $requested;
  public string $status;

  public function __construct(shape(
    ?'provision_time' => ?DateTime,
    ?'provisioned' => string,
    ?'request_time' => ?DateTime,
    ?'requested' => string,
    ?'status' => string,
  ) $s = shape()) {
    $this->provision_time = $s['provision_time'] ?? 0;
    $this->provisioned = $s['provisioned'] ?? '';
    $this->request_time = $s['request_time'] ?? 0;
    $this->requested = $s['requested'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type PublicIpStringList = vec<String>;

class PublicIpv4Pool {
  public string $description;
  public ?PublicIpv4PoolRangeSet $pool_address_ranges;
  public string $pool_id;
  public ?TagList $tags;
  public int $total_address_count;
  public int $total_available_address_count;

  public function __construct(shape(
    ?'description' => string,
    ?'pool_address_ranges' => ?PublicIpv4PoolRangeSet,
    ?'pool_id' => string,
    ?'tags' => ?TagList,
    ?'total_address_count' => int,
    ?'total_available_address_count' => int,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->pool_address_ranges = $s['pool_address_ranges'] ?? vec[];
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->total_address_count = $s['total_address_count'] ?? 0;
    $this->total_available_address_count = $s['total_available_address_count'] ?? 0;
  }
}

type PublicIpv4PoolIdStringList = vec<Ipv4PoolEc2Id>;

class PublicIpv4PoolRange {
  public int $address_count;
  public int $available_address_count;
  public string $first_address;
  public string $last_address;

  public function __construct(shape(
    ?'address_count' => int,
    ?'available_address_count' => int,
    ?'first_address' => string,
    ?'last_address' => string,
  ) $s = shape()) {
    $this->address_count = $s['address_count'] ?? 0;
    $this->available_address_count = $s['available_address_count'] ?? 0;
    $this->first_address = $s['first_address'] ?? '';
    $this->last_address = $s['last_address'] ?? '';
  }
}

type PublicIpv4PoolRangeSet = vec<PublicIpv4PoolRange>;

type PublicIpv4PoolSet = vec<PublicIpv4Pool>;

class Purchase {
  public ?CurrencyCodeValues $currency_code;
  public int $duration;
  public ?ResponseHostIdSet $host_id_set;
  public string $host_reservation_id;
  public string $hourly_price;
  public string $instance_family;
  public ?PaymentOption $payment_option;
  public string $upfront_price;

  public function __construct(shape(
    ?'currency_code' => ?CurrencyCodeValues,
    ?'duration' => int,
    ?'host_id_set' => ?ResponseHostIdSet,
    ?'host_reservation_id' => string,
    ?'hourly_price' => string,
    ?'instance_family' => string,
    ?'payment_option' => ?PaymentOption,
    ?'upfront_price' => string,
  ) $s = shape()) {
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->host_id_set = $s['host_id_set'] ?? vec[];
    $this->host_reservation_id = $s['host_reservation_id'] ?? '';
    $this->hourly_price = $s['hourly_price'] ?? '';
    $this->instance_family = $s['instance_family'] ?? '';
    $this->payment_option = $s['payment_option'] ?? '';
    $this->upfront_price = $s['upfront_price'] ?? '';
  }
}

class PurchaseHostReservationRequest {
  public string $client_token;
  public ?CurrencyCodeValues $currency_code;
  public ?RequestHostIdSet $host_id_set;
  public string $limit_price;
  public ?OfferingId $offering_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'currency_code' => ?CurrencyCodeValues,
    ?'host_id_set' => ?RequestHostIdSet,
    ?'limit_price' => string,
    ?'offering_id' => ?OfferingId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->currency_code = $s['currency_code'] ?? '';
    $this->host_id_set = $s['host_id_set'] ?? vec[];
    $this->limit_price = $s['limit_price'] ?? '';
    $this->offering_id = $s['offering_id'] ?? '';
  }
}

class PurchaseHostReservationResult {
  public string $client_token;
  public ?CurrencyCodeValues $currency_code;
  public ?PurchaseSet $purchase;
  public string $total_hourly_price;
  public string $total_upfront_price;

  public function __construct(shape(
    ?'client_token' => string,
    ?'currency_code' => ?CurrencyCodeValues,
    ?'purchase' => ?PurchaseSet,
    ?'total_hourly_price' => string,
    ?'total_upfront_price' => string,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->currency_code = $s['currency_code'] ?? '';
    $this->purchase = $s['purchase'] ?? vec[];
    $this->total_hourly_price = $s['total_hourly_price'] ?? '';
    $this->total_upfront_price = $s['total_upfront_price'] ?? '';
  }
}

class PurchaseRequest {
  public int $instance_count;
  public string $purchase_token;

  public function __construct(shape(
    ?'instance_count' => int,
    ?'purchase_token' => string,
  ) $s = shape()) {
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->purchase_token = $s['purchase_token'] ?? '';
  }
}

type PurchaseRequestSet = vec<PurchaseRequest>;

class PurchaseReservedInstancesOfferingRequest {
  public bool $dry_run;
  public int $instance_count;
  public ?ReservedInstanceLimitPrice $limit_price;
  public ?DateTime $purchase_time;
  public ?ReservedInstancesOfferingId $reserved_instances_offering_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_count' => int,
    ?'limit_price' => ?ReservedInstanceLimitPrice,
    ?'purchase_time' => ?DateTime,
    ?'reserved_instances_offering_id' => ?ReservedInstancesOfferingId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->limit_price = $s['limit_price'] ?? null;
    $this->purchase_time = $s['purchase_time'] ?? 0;
    $this->reserved_instances_offering_id = $s['reserved_instances_offering_id'] ?? '';
  }
}

class PurchaseReservedInstancesOfferingResult {
  public string $reserved_instances_id;

  public function __construct(shape(
    ?'reserved_instances_id' => string,
  ) $s = shape()) {
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
  }
}

class PurchaseScheduledInstancesRequest {
  public string $client_token;
  public bool $dry_run;
  public ?PurchaseRequestSet $purchase_requests;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'purchase_requests' => ?PurchaseRequestSet,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->purchase_requests = $s['purchase_requests'] ?? vec[];
  }
}

class PurchaseScheduledInstancesResult {
  public ?PurchasedScheduledInstanceSet $scheduled_instance_set;

  public function __construct(shape(
    ?'scheduled_instance_set' => ?PurchasedScheduledInstanceSet,
  ) $s = shape()) {
    $this->scheduled_instance_set = $s['scheduled_instance_set'] ?? vec[];
  }
}

type PurchaseSet = vec<Purchase>;

type PurchasedScheduledInstanceSet = vec<ScheduledInstance>;

type RIProductDescription = string;

type RamdiskId = string;

type ReasonCodesList = vec<ReportInstanceReasonCodes>;

class RebootInstancesRequest {
  public bool $dry_run;
  public ?InstanceIdStringList $instance_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_ids' => ?InstanceIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class RecurringCharge {
  public ?Double $amount;
  public ?RecurringChargeFrequency $frequency;

  public function __construct(shape(
    ?'amount' => ?Double,
    ?'frequency' => ?RecurringChargeFrequency,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? 0.0;
    $this->frequency = $s['frequency'] ?? '';
  }
}

type RecurringChargeFrequency = string;

type RecurringChargesList = vec<RecurringCharge>;

class Region {
  public string $endpoint;
  public string $opt_in_status;
  public string $region_name;

  public function __construct(shape(
    ?'endpoint' => string,
    ?'opt_in_status' => string,
    ?'region_name' => string,
  ) $s = shape()) {
    $this->endpoint = $s['endpoint'] ?? '';
    $this->opt_in_status = $s['opt_in_status'] ?? '';
    $this->region_name = $s['region_name'] ?? '';
  }
}

type RegionList = vec<Region>;

type RegionNameStringList = vec<String>;

class RegisterImageRequest {
  public ?ArchitectureValues $architecture;
  public ?BillingProductList $billing_products;
  public ?BlockDeviceMappingRequestList $block_device_mappings;
  public string $description;
  public bool $dry_run;
  public bool $ena_support;
  public string $image_location;
  public ?KernelId $kernel_id;
  public string $name;
  public ?RamdiskId $ramdisk_id;
  public string $root_device_name;
  public string $sriov_net_support;
  public string $virtualization_type;

  public function __construct(shape(
    ?'architecture' => ?ArchitectureValues,
    ?'billing_products' => ?BillingProductList,
    ?'block_device_mappings' => ?BlockDeviceMappingRequestList,
    ?'description' => string,
    ?'dry_run' => bool,
    ?'ena_support' => bool,
    ?'image_location' => string,
    ?'kernel_id' => ?KernelId,
    ?'name' => string,
    ?'ramdisk_id' => ?RamdiskId,
    ?'root_device_name' => string,
    ?'sriov_net_support' => string,
    ?'virtualization_type' => string,
  ) $s = shape()) {
    $this->architecture = $s['architecture'] ?? '';
    $this->billing_products = $s['billing_products'] ?? vec[];
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->ena_support = $s['ena_support'] ?? false;
    $this->image_location = $s['image_location'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->root_device_name = $s['root_device_name'] ?? '';
    $this->sriov_net_support = $s['sriov_net_support'] ?? '';
    $this->virtualization_type = $s['virtualization_type'] ?? '';
  }
}

class RegisterImageResult {
  public string $image_id;

  public function __construct(shape(
    ?'image_id' => string,
  ) $s = shape()) {
    $this->image_id = $s['image_id'] ?? '';
  }
}

class RegisterInstanceEventNotificationAttributesRequest {
  public bool $dry_run;
  public ?RegisterInstanceTagAttributeRequest $instance_tag_attribute;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_tag_attribute' => ?RegisterInstanceTagAttributeRequest,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_tag_attribute = $s['instance_tag_attribute'] ?? null;
  }
}

class RegisterInstanceEventNotificationAttributesResult {
  public ?InstanceTagNotificationAttribute $instance_tag_attribute;

  public function __construct(shape(
    ?'instance_tag_attribute' => ?InstanceTagNotificationAttribute,
  ) $s = shape()) {
    $this->instance_tag_attribute = $s['instance_tag_attribute'] ?? null;
  }
}

class RegisterInstanceTagAttributeRequest {
  public bool $include_all_tags_of_instance;
  public ?InstanceTagKeySet $instance_tag_keys;

  public function __construct(shape(
    ?'include_all_tags_of_instance' => bool,
    ?'instance_tag_keys' => ?InstanceTagKeySet,
  ) $s = shape()) {
    $this->include_all_tags_of_instance = $s['include_all_tags_of_instance'] ?? false;
    $this->instance_tag_keys = $s['instance_tag_keys'] ?? vec[];
  }
}

class RegisterTransitGatewayMulticastGroupMembersRequest {
  public bool $dry_run;
  public string $group_ip_address;
  public ?TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_ip_address' => string,
    ?'network_interface_ids' => ?TransitGatewayNetworkInterfaceIdList,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->network_interface_ids = $s['network_interface_ids'] ?? vec[];
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class RegisterTransitGatewayMulticastGroupMembersResult {
  public ?TransitGatewayMulticastRegisteredGroupMembers $registered_multicast_group_members;

  public function __construct(shape(
    ?'registered_multicast_group_members' => ?TransitGatewayMulticastRegisteredGroupMembers,
  ) $s = shape()) {
    $this->registered_multicast_group_members = $s['registered_multicast_group_members'] ?? null;
  }
}

class RegisterTransitGatewayMulticastGroupSourcesRequest {
  public bool $dry_run;
  public string $group_ip_address;
  public ?TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_ip_address' => string,
    ?'network_interface_ids' => ?TransitGatewayNetworkInterfaceIdList,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->network_interface_ids = $s['network_interface_ids'] ?? vec[];
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class RegisterTransitGatewayMulticastGroupSourcesResult {
  public ?TransitGatewayMulticastRegisteredGroupSources $registered_multicast_group_sources;

  public function __construct(shape(
    ?'registered_multicast_group_sources' => ?TransitGatewayMulticastRegisteredGroupSources,
  ) $s = shape()) {
    $this->registered_multicast_group_sources = $s['registered_multicast_group_sources'] ?? null;
  }
}

class RejectTransitGatewayPeeringAttachmentRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class RejectTransitGatewayPeeringAttachmentResult {
  public ?TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;

  public function __construct(shape(
    ?'transit_gateway_peering_attachment' => ?TransitGatewayPeeringAttachment,
  ) $s = shape()) {
    $this->transit_gateway_peering_attachment = $s['transit_gateway_peering_attachment'] ?? null;
  }
}

class RejectTransitGatewayVpcAttachmentRequest {
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

class RejectTransitGatewayVpcAttachmentResult {
  public ?TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;

  public function __construct(shape(
    ?'transit_gateway_vpc_attachment' => ?TransitGatewayVpcAttachment,
  ) $s = shape()) {
    $this->transit_gateway_vpc_attachment = $s['transit_gateway_vpc_attachment'] ?? null;
  }
}

class RejectVpcEndpointConnectionsRequest {
  public bool $dry_run;
  public ?VpcEndpointServiceId $service_id;
  public ?VpcEndpointIdList $vpc_endpoint_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'service_id' => ?VpcEndpointServiceId,
    ?'vpc_endpoint_ids' => ?VpcEndpointIdList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->service_id = $s['service_id'] ?? '';
    $this->vpc_endpoint_ids = $s['vpc_endpoint_ids'] ?? vec[];
  }
}

class RejectVpcEndpointConnectionsResult {
  public ?UnsuccessfulItemSet $unsuccessful;

  public function __construct(shape(
    ?'unsuccessful' => ?UnsuccessfulItemSet,
  ) $s = shape()) {
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class RejectVpcPeeringConnectionRequest {
  public bool $dry_run;
  public ?VpcPeeringConnectionId $vpc_peering_connection_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'vpc_peering_connection_id' => ?VpcPeeringConnectionId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

class RejectVpcPeeringConnectionResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class ReleaseAddressRequest {
  public ?AllocationId $allocation_id;
  public bool $dry_run;
  public string $network_border_group;
  public string $public_ip;

  public function __construct(shape(
    ?'allocation_id' => ?AllocationId,
    ?'dry_run' => bool,
    ?'network_border_group' => string,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->allocation_id = $s['allocation_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_border_group = $s['network_border_group'] ?? '';
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

class ReleaseHostsRequest {
  public ?RequestHostIdList $host_ids;

  public function __construct(shape(
    ?'host_ids' => ?RequestHostIdList,
  ) $s = shape()) {
    $this->host_ids = $s['host_ids'] ?? vec[];
  }
}

class ReleaseHostsResult {
  public ?ResponseHostIdList $successful;
  public ?UnsuccessfulItemList $unsuccessful;

  public function __construct(shape(
    ?'successful' => ?ResponseHostIdList,
    ?'unsuccessful' => ?UnsuccessfulItemList,
  ) $s = shape()) {
    $this->successful = $s['successful'] ?? vec[];
    $this->unsuccessful = $s['unsuccessful'] ?? vec[];
  }
}

class ReplaceIamInstanceProfileAssociationRequest {
  public ?IamInstanceProfileAssociationId $association_id;
  public ?IamInstanceProfileSpecification $iam_instance_profile;

  public function __construct(shape(
    ?'association_id' => ?IamInstanceProfileAssociationId,
    ?'iam_instance_profile' => ?IamInstanceProfileSpecification,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
  }
}

class ReplaceIamInstanceProfileAssociationResult {
  public ?IamInstanceProfileAssociation $iam_instance_profile_association;

  public function __construct(shape(
    ?'iam_instance_profile_association' => ?IamInstanceProfileAssociation,
  ) $s = shape()) {
    $this->iam_instance_profile_association = $s['iam_instance_profile_association'] ?? null;
  }
}

class ReplaceNetworkAclAssociationRequest {
  public ?NetworkAclAssociationId $association_id;
  public bool $dry_run;
  public ?NetworkAclId $network_acl_id;

  public function __construct(shape(
    ?'association_id' => ?NetworkAclAssociationId,
    ?'dry_run' => bool,
    ?'network_acl_id' => ?NetworkAclId,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_acl_id = $s['network_acl_id'] ?? '';
  }
}

class ReplaceNetworkAclAssociationResult {
  public string $new_association_id;

  public function __construct(shape(
    ?'new_association_id' => string,
  ) $s = shape()) {
    $this->new_association_id = $s['new_association_id'] ?? '';
  }
}

class ReplaceNetworkAclEntryRequest {
  public string $cidr_block;
  public bool $dry_run;
  public bool $egress;
  public ?IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
  public ?NetworkAclId $network_acl_id;
  public ?PortRange $port_range;
  public string $protocol;
  public ?RuleAction $rule_action;
  public int $rule_number;

  public function __construct(shape(
    ?'cidr_block' => string,
    ?'dry_run' => bool,
    ?'egress' => bool,
    ?'icmp_type_code' => ?IcmpTypeCode,
    ?'ipv_6_cidr_block' => string,
    ?'network_acl_id' => ?NetworkAclId,
    ?'port_range' => ?PortRange,
    ?'protocol' => string,
    ?'rule_action' => ?RuleAction,
    ?'rule_number' => int,
  ) $s = shape()) {
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->egress = $s['egress'] ?? false;
    $this->icmp_type_code = $s['icmp_type_code'] ?? null;
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->network_acl_id = $s['network_acl_id'] ?? '';
    $this->port_range = $s['port_range'] ?? null;
    $this->protocol = $s['protocol'] ?? '';
    $this->rule_action = $s['rule_action'] ?? '';
    $this->rule_number = $s['rule_number'] ?? 0;
  }
}

class ReplaceRouteRequest {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public bool $dry_run;
  public ?EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public ?RouteGatewayId $gateway_id;
  public ?InstanceId $instance_id;
  public ?LocalGatewayId $local_gateway_id;
  public bool $local_target;
  public ?NatGatewayId $nat_gateway_id;
  public ?NetworkInterfaceId $network_interface_id;
  public ?RouteTableId $route_table_id;
  public ?TransitGatewayId $transit_gateway_id;
  public ?VpcPeeringConnectionId $vpc_peering_connection_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'destination_ipv_6_cidr_block' => string,
    ?'dry_run' => bool,
    ?'egress_only_internet_gateway_id' => ?EgressOnlyInternetGatewayId,
    ?'gateway_id' => ?RouteGatewayId,
    ?'instance_id' => ?InstanceId,
    ?'local_gateway_id' => ?LocalGatewayId,
    ?'local_target' => bool,
    ?'nat_gateway_id' => ?NatGatewayId,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'route_table_id' => ?RouteTableId,
    ?'transit_gateway_id' => ?TransitGatewayId,
    ?'vpc_peering_connection_id' => ?VpcPeeringConnectionId,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->destination_ipv_6_cidr_block = $s['destination_ipv_6_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->egress_only_internet_gateway_id = $s['egress_only_internet_gateway_id'] ?? '';
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->local_target = $s['local_target'] ?? false;
    $this->nat_gateway_id = $s['nat_gateway_id'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->route_table_id = $s['route_table_id'] ?? '';
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

class ReplaceRouteTableAssociationRequest {
  public ?RouteTableAssociationId $association_id;
  public bool $dry_run;
  public ?RouteTableId $route_table_id;

  public function __construct(shape(
    ?'association_id' => ?RouteTableAssociationId,
    ?'dry_run' => bool,
    ?'route_table_id' => ?RouteTableId,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->route_table_id = $s['route_table_id'] ?? '';
  }
}

class ReplaceRouteTableAssociationResult {
  public ?RouteTableAssociationState $association_state;
  public string $new_association_id;

  public function __construct(shape(
    ?'association_state' => ?RouteTableAssociationState,
    ?'new_association_id' => string,
  ) $s = shape()) {
    $this->association_state = $s['association_state'] ?? null;
    $this->new_association_id = $s['new_association_id'] ?? '';
  }
}

class ReplaceTransitGatewayRouteRequest {
  public bool $blackhole;
  public string $destination_cidr_block;
  public bool $dry_run;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'blackhole' => bool,
    ?'destination_cidr_block' => string,
    ?'dry_run' => bool,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->blackhole = $s['blackhole'] ?? false;
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class ReplaceTransitGatewayRouteResult {
  public ?TransitGatewayRoute $route;

  public function __construct(shape(
    ?'route' => ?TransitGatewayRoute,
  ) $s = shape()) {
    $this->route = $s['route'] ?? null;
  }
}

type ReportInstanceReasonCodes = string;

class ReportInstanceStatusRequest {
  public string $description;
  public bool $dry_run;
  public ?DateTime $end_time;
  public ?InstanceIdStringList $instances;
  public ?ReasonCodesList $reason_codes;
  public ?DateTime $start_time;
  public ?ReportStatusType $status;

  public function __construct(shape(
    ?'description' => string,
    ?'dry_run' => bool,
    ?'end_time' => ?DateTime,
    ?'instances' => ?InstanceIdStringList,
    ?'reason_codes' => ?ReasonCodesList,
    ?'start_time' => ?DateTime,
    ?'status' => ?ReportStatusType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->end_time = $s['end_time'] ?? 0;
    $this->instances = $s['instances'] ?? vec[];
    $this->reason_codes = $s['reason_codes'] ?? vec[];
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

type ReportStatusType = string;

type RequestHostIdList = vec<DedicatedHostId>;

type RequestHostIdSet = vec<DedicatedHostId>;

type RequestInstanceTypeList = vec<InstanceType>;

class RequestLaunchTemplateData {
  public ?LaunchTemplateBlockDeviceMappingRequestList $block_device_mappings;
  public ?LaunchTemplateCapacityReservationSpecificationRequest $capacity_reservation_specification;
  public ?LaunchTemplateCpuOptionsRequest $cpu_options;
  public ?CreditSpecificationRequest $credit_specification;
  public bool $disable_api_termination;
  public bool $ebs_optimized;
  public ?ElasticGpuSpecificationList $elastic_gpu_specifications;
  public ?LaunchTemplateElasticInferenceAcceleratorList $elastic_inference_accelerators;
  public ?LaunchTemplateHibernationOptionsRequest $hibernation_options;
  public ?LaunchTemplateIamInstanceProfileSpecificationRequest $iam_instance_profile;
  public ?ImageId $image_id;
  public ?ShutdownBehavior $instance_initiated_shutdown_behavior;
  public ?LaunchTemplateInstanceMarketOptionsRequest $instance_market_options;
  public ?InstanceType $instance_type;
  public ?KernelId $kernel_id;
  public ?KeyPairName $key_name;
  public ?LaunchTemplateLicenseSpecificationListRequest $license_specifications;
  public ?LaunchTemplateInstanceMetadataOptionsRequest $metadata_options;
  public ?LaunchTemplatesMonitoringRequest $monitoring;
  public ?LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList $network_interfaces;
  public ?LaunchTemplatePlacementRequest $placement;
  public ?RamdiskId $ram_disk_id;
  public ?SecurityGroupIdStringList $security_group_ids;
  public ?SecurityGroupStringList $security_groups;
  public ?LaunchTemplateTagSpecificationRequestList $tag_specifications;
  public string $user_data;

  public function __construct(shape(
    ?'block_device_mappings' => ?LaunchTemplateBlockDeviceMappingRequestList,
    ?'capacity_reservation_specification' => ?LaunchTemplateCapacityReservationSpecificationRequest,
    ?'cpu_options' => ?LaunchTemplateCpuOptionsRequest,
    ?'credit_specification' => ?CreditSpecificationRequest,
    ?'disable_api_termination' => bool,
    ?'ebs_optimized' => bool,
    ?'elastic_gpu_specifications' => ?ElasticGpuSpecificationList,
    ?'elastic_inference_accelerators' => ?LaunchTemplateElasticInferenceAcceleratorList,
    ?'hibernation_options' => ?LaunchTemplateHibernationOptionsRequest,
    ?'iam_instance_profile' => ?LaunchTemplateIamInstanceProfileSpecificationRequest,
    ?'image_id' => ?ImageId,
    ?'instance_initiated_shutdown_behavior' => ?ShutdownBehavior,
    ?'instance_market_options' => ?LaunchTemplateInstanceMarketOptionsRequest,
    ?'instance_type' => ?InstanceType,
    ?'kernel_id' => ?KernelId,
    ?'key_name' => ?KeyPairName,
    ?'license_specifications' => ?LaunchTemplateLicenseSpecificationListRequest,
    ?'metadata_options' => ?LaunchTemplateInstanceMetadataOptionsRequest,
    ?'monitoring' => ?LaunchTemplatesMonitoringRequest,
    ?'network_interfaces' => ?LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList,
    ?'placement' => ?LaunchTemplatePlacementRequest,
    ?'ram_disk_id' => ?RamdiskId,
    ?'security_group_ids' => ?SecurityGroupIdStringList,
    ?'security_groups' => ?SecurityGroupStringList,
    ?'tag_specifications' => ?LaunchTemplateTagSpecificationRequestList,
    ?'user_data' => string,
  ) $s = shape()) {
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->capacity_reservation_specification = $s['capacity_reservation_specification'] ?? null;
    $this->cpu_options = $s['cpu_options'] ?? null;
    $this->credit_specification = $s['credit_specification'] ?? null;
    $this->disable_api_termination = $s['disable_api_termination'] ?? false;
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->elastic_gpu_specifications = $s['elastic_gpu_specifications'] ?? vec[];
    $this->elastic_inference_accelerators = $s['elastic_inference_accelerators'] ?? vec[];
    $this->hibernation_options = $s['hibernation_options'] ?? null;
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_initiated_shutdown_behavior = $s['instance_initiated_shutdown_behavior'] ?? '';
    $this->instance_market_options = $s['instance_market_options'] ?? null;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->license_specifications = $s['license_specifications'] ?? vec[];
    $this->metadata_options = $s['metadata_options'] ?? null;
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->placement = $s['placement'] ?? null;
    $this->ram_disk_id = $s['ram_disk_id'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->user_data = $s['user_data'] ?? '';
  }
}

class RequestSpotFleetRequest {
  public bool $dry_run;
  public ?SpotFleetRequestConfigData $spot_fleet_request_config;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'spot_fleet_request_config' => ?SpotFleetRequestConfigData,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->spot_fleet_request_config = $s['spot_fleet_request_config'] ?? null;
  }
}

class RequestSpotFleetResponse {
  public string $spot_fleet_request_id;

  public function __construct(shape(
    ?'spot_fleet_request_id' => string,
  ) $s = shape()) {
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
  }
}

class RequestSpotInstancesRequest {
  public string $availability_zone_group;
  public int $block_duration_minutes;
  public string $client_token;
  public bool $dry_run;
  public int $instance_count;
  public ?InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $launch_group;
  public ?RequestSpotLaunchSpecification $launch_specification;
  public string $spot_price;
  public ?SpotInstanceType $type;
  public ?DateTime $valid_from;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'availability_zone_group' => string,
    ?'block_duration_minutes' => int,
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'instance_count' => int,
    ?'instance_interruption_behavior' => ?InstanceInterruptionBehavior,
    ?'launch_group' => string,
    ?'launch_specification' => ?RequestSpotLaunchSpecification,
    ?'spot_price' => string,
    ?'type' => ?SpotInstanceType,
    ?'valid_from' => ?DateTime,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->availability_zone_group = $s['availability_zone_group'] ?? '';
    $this->block_duration_minutes = $s['block_duration_minutes'] ?? 0;
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->launch_group = $s['launch_group'] ?? '';
    $this->launch_specification = $s['launch_specification'] ?? null;
    $this->spot_price = $s['spot_price'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->valid_from = $s['valid_from'] ?? 0;
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

class RequestSpotInstancesResult {
  public ?SpotInstanceRequestList $spot_instance_requests;

  public function __construct(shape(
    ?'spot_instance_requests' => ?SpotInstanceRequestList,
  ) $s = shape()) {
    $this->spot_instance_requests = $s['spot_instance_requests'] ?? vec[];
  }
}

class RequestSpotLaunchSpecification {
  public string $addressing_type;
  public ?BlockDeviceMappingList $block_device_mappings;
  public bool $ebs_optimized;
  public ?IamInstanceProfileSpecification $iam_instance_profile;
  public ?ImageId $image_id;
  public ?InstanceType $instance_type;
  public ?KernelId $kernel_id;
  public ?KeyPairName $key_name;
  public ?RunInstancesMonitoringEnabled $monitoring;
  public ?InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public ?SpotPlacement $placement;
  public ?RamdiskId $ramdisk_id;
  public ?RequestSpotLaunchSpecificationSecurityGroupIdList $security_group_ids;
  public ?RequestSpotLaunchSpecificationSecurityGroupList $security_groups;
  public ?SubnetId $subnet_id;
  public string $user_data;

  public function __construct(shape(
    ?'addressing_type' => string,
    ?'block_device_mappings' => ?BlockDeviceMappingList,
    ?'ebs_optimized' => bool,
    ?'iam_instance_profile' => ?IamInstanceProfileSpecification,
    ?'image_id' => ?ImageId,
    ?'instance_type' => ?InstanceType,
    ?'kernel_id' => ?KernelId,
    ?'key_name' => ?KeyPairName,
    ?'monitoring' => ?RunInstancesMonitoringEnabled,
    ?'network_interfaces' => ?InstanceNetworkInterfaceSpecificationList,
    ?'placement' => ?SpotPlacement,
    ?'ramdisk_id' => ?RamdiskId,
    ?'security_group_ids' => ?RequestSpotLaunchSpecificationSecurityGroupIdList,
    ?'security_groups' => ?RequestSpotLaunchSpecificationSecurityGroupList,
    ?'subnet_id' => ?SubnetId,
    ?'user_data' => string,
  ) $s = shape()) {
    $this->addressing_type = $s['addressing_type'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->placement = $s['placement'] ?? null;
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->user_data = $s['user_data'] ?? '';
  }
}

type RequestSpotLaunchSpecificationSecurityGroupIdList = vec<SecurityGroupId>;

type RequestSpotLaunchSpecificationSecurityGroupList = vec<SecurityGroupName>;

class Reservation {
  public ?GroupIdentifierList $groups;
  public ?InstanceList $instances;
  public string $owner_id;
  public string $requester_id;
  public string $reservation_id;

  public function __construct(shape(
    ?'groups' => ?GroupIdentifierList,
    ?'instances' => ?InstanceList,
    ?'owner_id' => string,
    ?'requester_id' => string,
    ?'reservation_id' => string,
  ) $s = shape()) {
    $this->groups = $s['groups'] ?? vec[];
    $this->instances = $s['instances'] ?? vec[];
    $this->owner_id = $s['owner_id'] ?? '';
    $this->requester_id = $s['requester_id'] ?? '';
    $this->reservation_id = $s['reservation_id'] ?? '';
  }
}

type ReservationId = string;

type ReservationList = vec<Reservation>;

type ReservationState = string;

class ReservationValue {
  public string $hourly_price;
  public string $remaining_total_value;
  public string $remaining_upfront_value;

  public function __construct(shape(
    ?'hourly_price' => string,
    ?'remaining_total_value' => string,
    ?'remaining_upfront_value' => string,
  ) $s = shape()) {
    $this->hourly_price = $s['hourly_price'] ?? '';
    $this->remaining_total_value = $s['remaining_total_value'] ?? '';
    $this->remaining_upfront_value = $s['remaining_upfront_value'] ?? '';
  }
}

type ReservedInstanceIdSet = vec<ReservationId>;

class ReservedInstanceLimitPrice {
  public ?Double $amount;
  public ?CurrencyCodeValues $currency_code;

  public function __construct(shape(
    ?'amount' => ?Double,
    ?'currency_code' => ?CurrencyCodeValues,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? 0.0;
    $this->currency_code = $s['currency_code'] ?? '';
  }
}

class ReservedInstanceReservationValue {
  public ?ReservationValue $reservation_value;
  public string $reserved_instance_id;

  public function __construct(shape(
    ?'reservation_value' => ?ReservationValue,
    ?'reserved_instance_id' => string,
  ) $s = shape()) {
    $this->reservation_value = $s['reservation_value'] ?? null;
    $this->reserved_instance_id = $s['reserved_instance_id'] ?? '';
  }
}

type ReservedInstanceReservationValueSet = vec<ReservedInstanceReservationValue>;

type ReservedInstanceState = string;

class ReservedInstances {
  public string $availability_zone;
  public ?CurrencyCodeValues $currency_code;
  public ?Long $duration;
  public ?DateTime $end;
  public ?Float $fixed_price;
  public int $instance_count;
  public ?Tenancy $instance_tenancy;
  public ?InstanceType $instance_type;
  public ?OfferingClassType $offering_class;
  public ?OfferingTypeValues $offering_type;
  public ?RIProductDescription $product_description;
  public ?RecurringChargesList $recurring_charges;
  public string $reserved_instances_id;
  public ?scope $scope;
  public ?DateTime $start;
  public ?ReservedInstanceState $state;
  public ?TagList $tags;
  public ?Float $usage_price;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'currency_code' => ?CurrencyCodeValues,
    ?'duration' => ?Long,
    ?'end' => ?DateTime,
    ?'fixed_price' => ?Float,
    ?'instance_count' => int,
    ?'instance_tenancy' => ?Tenancy,
    ?'instance_type' => ?InstanceType,
    ?'offering_class' => ?OfferingClassType,
    ?'offering_type' => ?OfferingTypeValues,
    ?'product_description' => ?RIProductDescription,
    ?'recurring_charges' => ?RecurringChargesList,
    ?'reserved_instances_id' => string,
    ?'scope' => ?scope,
    ?'start' => ?DateTime,
    ?'state' => ?ReservedInstanceState,
    ?'tags' => ?TagList,
    ?'usage_price' => ?Float,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->end = $s['end'] ?? 0;
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->instance_tenancy = $s['instance_tenancy'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->offering_class = $s['offering_class'] ?? '';
    $this->offering_type = $s['offering_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
    $this->scope = $s['scope'] ?? '';
    $this->start = $s['start'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->usage_price = $s['usage_price'] ?? 0.0;
  }
}

class ReservedInstancesConfiguration {
  public string $availability_zone;
  public int $instance_count;
  public ?InstanceType $instance_type;
  public string $platform;
  public ?scope $scope;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'instance_count' => int,
    ?'instance_type' => ?InstanceType,
    ?'platform' => string,
    ?'scope' => ?scope,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->scope = $s['scope'] ?? '';
  }
}

type ReservedInstancesConfigurationList = vec<ReservedInstancesConfiguration>;

class ReservedInstancesId {
  public string $reserved_instances_id;

  public function __construct(shape(
    ?'reserved_instances_id' => string,
  ) $s = shape()) {
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
  }
}

type ReservedInstancesIdStringList = vec<ReservationId>;

type ReservedInstancesList = vec<ReservedInstances>;

class ReservedInstancesListing {
  public string $client_token;
  public ?DateTime $create_date;
  public ?InstanceCountList $instance_counts;
  public ?PriceScheduleList $price_schedules;
  public string $reserved_instances_id;
  public string $reserved_instances_listing_id;
  public ?ListingStatus $status;
  public string $status_message;
  public ?TagList $tags;
  public ?DateTime $update_date;

  public function __construct(shape(
    ?'client_token' => string,
    ?'create_date' => ?DateTime,
    ?'instance_counts' => ?InstanceCountList,
    ?'price_schedules' => ?PriceScheduleList,
    ?'reserved_instances_id' => string,
    ?'reserved_instances_listing_id' => string,
    ?'status' => ?ListingStatus,
    ?'status_message' => string,
    ?'tags' => ?TagList,
    ?'update_date' => ?DateTime,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->instance_counts = $s['instance_counts'] ?? vec[];
    $this->price_schedules = $s['price_schedules'] ?? vec[];
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
    $this->reserved_instances_listing_id = $s['reserved_instances_listing_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->update_date = $s['update_date'] ?? 0;
  }
}

type ReservedInstancesListingId = string;

type ReservedInstancesListingList = vec<ReservedInstancesListing>;

class ReservedInstancesModification {
  public string $client_token;
  public ?DateTime $create_date;
  public ?DateTime $effective_date;
  public ?ReservedInstancesModificationResultList $modification_results;
  public ?ReservedIntancesIds $reserved_instances_ids;
  public string $reserved_instances_modification_id;
  public string $status;
  public string $status_message;
  public ?DateTime $update_date;

  public function __construct(shape(
    ?'client_token' => string,
    ?'create_date' => ?DateTime,
    ?'effective_date' => ?DateTime,
    ?'modification_results' => ?ReservedInstancesModificationResultList,
    ?'reserved_instances_ids' => ?ReservedIntancesIds,
    ?'reserved_instances_modification_id' => string,
    ?'status' => string,
    ?'status_message' => string,
    ?'update_date' => ?DateTime,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->effective_date = $s['effective_date'] ?? 0;
    $this->modification_results = $s['modification_results'] ?? vec[];
    $this->reserved_instances_ids = $s['reserved_instances_ids'] ?? vec[];
    $this->reserved_instances_modification_id = $s['reserved_instances_modification_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->update_date = $s['update_date'] ?? 0;
  }
}

type ReservedInstancesModificationId = string;

type ReservedInstancesModificationIdStringList = vec<ReservedInstancesModificationId>;

type ReservedInstancesModificationList = vec<ReservedInstancesModification>;

class ReservedInstancesModificationResult {
  public string $reserved_instances_id;
  public ?ReservedInstancesConfiguration $target_configuration;

  public function __construct(shape(
    ?'reserved_instances_id' => string,
    ?'target_configuration' => ?ReservedInstancesConfiguration,
  ) $s = shape()) {
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
    $this->target_configuration = $s['target_configuration'] ?? null;
  }
}

type ReservedInstancesModificationResultList = vec<ReservedInstancesModificationResult>;

class ReservedInstancesOffering {
  public string $availability_zone;
  public ?CurrencyCodeValues $currency_code;
  public ?Long $duration;
  public ?Float $fixed_price;
  public ?Tenancy $instance_tenancy;
  public ?InstanceType $instance_type;
  public bool $marketplace;
  public ?OfferingClassType $offering_class;
  public ?OfferingTypeValues $offering_type;
  public ?PricingDetailsList $pricing_details;
  public ?RIProductDescription $product_description;
  public ?RecurringChargesList $recurring_charges;
  public string $reserved_instances_offering_id;
  public ?scope $scope;
  public ?Float $usage_price;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'currency_code' => ?CurrencyCodeValues,
    ?'duration' => ?Long,
    ?'fixed_price' => ?Float,
    ?'instance_tenancy' => ?Tenancy,
    ?'instance_type' => ?InstanceType,
    ?'marketplace' => bool,
    ?'offering_class' => ?OfferingClassType,
    ?'offering_type' => ?OfferingTypeValues,
    ?'pricing_details' => ?PricingDetailsList,
    ?'product_description' => ?RIProductDescription,
    ?'recurring_charges' => ?RecurringChargesList,
    ?'reserved_instances_offering_id' => string,
    ?'scope' => ?scope,
    ?'usage_price' => ?Float,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->currency_code = $s['currency_code'] ?? '';
    $this->duration = $s['duration'] ?? 0;
    $this->fixed_price = $s['fixed_price'] ?? 0.0;
    $this->instance_tenancy = $s['instance_tenancy'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->marketplace = $s['marketplace'] ?? false;
    $this->offering_class = $s['offering_class'] ?? '';
    $this->offering_type = $s['offering_type'] ?? '';
    $this->pricing_details = $s['pricing_details'] ?? vec[];
    $this->product_description = $s['product_description'] ?? '';
    $this->recurring_charges = $s['recurring_charges'] ?? vec[];
    $this->reserved_instances_offering_id = $s['reserved_instances_offering_id'] ?? '';
    $this->scope = $s['scope'] ?? '';
    $this->usage_price = $s['usage_price'] ?? 0.0;
  }
}

type ReservedInstancesOfferingId = string;

type ReservedInstancesOfferingIdStringList = vec<ReservedInstancesOfferingId>;

type ReservedInstancesOfferingList = vec<ReservedInstancesOffering>;

type ReservedIntancesIds = vec<ReservedInstancesId>;

class ResetEbsDefaultKmsKeyIdRequest {
  public bool $dry_run;

  public function __construct(shape(
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class ResetEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;

  public function __construct(shape(
    ?'kms_key_id' => string,
  ) $s = shape()) {
    $this->kms_key_id = $s['kms_key_id'] ?? '';
  }
}

type ResetFpgaImageAttributeName = string;

class ResetFpgaImageAttributeRequest {
  public ?ResetFpgaImageAttributeName $attribute;
  public bool $dry_run;
  public ?FpgaImageId $fpga_image_id;

  public function __construct(shape(
    ?'attribute' => ?ResetFpgaImageAttributeName,
    ?'dry_run' => bool,
    ?'fpga_image_id' => ?FpgaImageId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->fpga_image_id = $s['fpga_image_id'] ?? '';
  }
}

class ResetFpgaImageAttributeResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

type ResetImageAttributeName = string;

class ResetImageAttributeRequest {
  public ?ResetImageAttributeName $attribute;
  public bool $dry_run;
  public ?ImageId $image_id;

  public function __construct(shape(
    ?'attribute' => ?ResetImageAttributeName,
    ?'dry_run' => bool,
    ?'image_id' => ?ImageId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->image_id = $s['image_id'] ?? '';
  }
}

class ResetInstanceAttributeRequest {
  public ?InstanceAttributeName $attribute;
  public bool $dry_run;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'attribute' => ?InstanceAttributeName,
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class ResetNetworkInterfaceAttributeRequest {
  public bool $dry_run;
  public ?NetworkInterfaceId $network_interface_id;
  public string $source_dest_check;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'source_dest_check' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->source_dest_check = $s['source_dest_check'] ?? '';
  }
}

class ResetSnapshotAttributeRequest {
  public ?SnapshotAttributeName $attribute;
  public bool $dry_run;
  public ?SnapshotId $snapshot_id;

  public function __construct(shape(
    ?'attribute' => ?SnapshotAttributeName,
    ?'dry_run' => bool,
    ?'snapshot_id' => ?SnapshotId,
  ) $s = shape()) {
    $this->attribute = $s['attribute'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
  }
}

type ResourceIdList = vec<TaggableResourceId>;

type ResourceList = vec<String>;

type ResourceType = string;

class ResponseError {
  public ?LaunchTemplateErrorCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?LaunchTemplateErrorCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type ResponseHostIdList = vec<String>;

type ResponseHostIdSet = vec<String>;

class ResponseLaunchTemplateData {
  public ?LaunchTemplateBlockDeviceMappingList $block_device_mappings;
  public ?LaunchTemplateCapacityReservationSpecificationResponse $capacity_reservation_specification;
  public ?LaunchTemplateCpuOptions $cpu_options;
  public ?CreditSpecification $credit_specification;
  public bool $disable_api_termination;
  public bool $ebs_optimized;
  public ?ElasticGpuSpecificationResponseList $elastic_gpu_specifications;
  public ?LaunchTemplateElasticInferenceAcceleratorResponseList $elastic_inference_accelerators;
  public ?LaunchTemplateHibernationOptions $hibernation_options;
  public ?LaunchTemplateIamInstanceProfileSpecification $iam_instance_profile;
  public string $image_id;
  public ?ShutdownBehavior $instance_initiated_shutdown_behavior;
  public ?LaunchTemplateInstanceMarketOptions $instance_market_options;
  public ?InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public ?LaunchTemplateLicenseList $license_specifications;
  public ?LaunchTemplateInstanceMetadataOptions $metadata_options;
  public ?LaunchTemplatesMonitoring $monitoring;
  public ?LaunchTemplateInstanceNetworkInterfaceSpecificationList $network_interfaces;
  public ?LaunchTemplatePlacement $placement;
  public string $ram_disk_id;
  public ?ValueStringList $security_group_ids;
  public ?ValueStringList $security_groups;
  public ?LaunchTemplateTagSpecificationList $tag_specifications;
  public string $user_data;

  public function __construct(shape(
    ?'block_device_mappings' => ?LaunchTemplateBlockDeviceMappingList,
    ?'capacity_reservation_specification' => ?LaunchTemplateCapacityReservationSpecificationResponse,
    ?'cpu_options' => ?LaunchTemplateCpuOptions,
    ?'credit_specification' => ?CreditSpecification,
    ?'disable_api_termination' => bool,
    ?'ebs_optimized' => bool,
    ?'elastic_gpu_specifications' => ?ElasticGpuSpecificationResponseList,
    ?'elastic_inference_accelerators' => ?LaunchTemplateElasticInferenceAcceleratorResponseList,
    ?'hibernation_options' => ?LaunchTemplateHibernationOptions,
    ?'iam_instance_profile' => ?LaunchTemplateIamInstanceProfileSpecification,
    ?'image_id' => string,
    ?'instance_initiated_shutdown_behavior' => ?ShutdownBehavior,
    ?'instance_market_options' => ?LaunchTemplateInstanceMarketOptions,
    ?'instance_type' => ?InstanceType,
    ?'kernel_id' => string,
    ?'key_name' => string,
    ?'license_specifications' => ?LaunchTemplateLicenseList,
    ?'metadata_options' => ?LaunchTemplateInstanceMetadataOptions,
    ?'monitoring' => ?LaunchTemplatesMonitoring,
    ?'network_interfaces' => ?LaunchTemplateInstanceNetworkInterfaceSpecificationList,
    ?'placement' => ?LaunchTemplatePlacement,
    ?'ram_disk_id' => string,
    ?'security_group_ids' => ?ValueStringList,
    ?'security_groups' => ?ValueStringList,
    ?'tag_specifications' => ?LaunchTemplateTagSpecificationList,
    ?'user_data' => string,
  ) $s = shape()) {
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->capacity_reservation_specification = $s['capacity_reservation_specification'] ?? null;
    $this->cpu_options = $s['cpu_options'] ?? null;
    $this->credit_specification = $s['credit_specification'] ?? null;
    $this->disable_api_termination = $s['disable_api_termination'] ?? false;
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->elastic_gpu_specifications = $s['elastic_gpu_specifications'] ?? vec[];
    $this->elastic_inference_accelerators = $s['elastic_inference_accelerators'] ?? vec[];
    $this->hibernation_options = $s['hibernation_options'] ?? null;
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_initiated_shutdown_behavior = $s['instance_initiated_shutdown_behavior'] ?? '';
    $this->instance_market_options = $s['instance_market_options'] ?? null;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->license_specifications = $s['license_specifications'] ?? vec[];
    $this->metadata_options = $s['metadata_options'] ?? null;
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->placement = $s['placement'] ?? null;
    $this->ram_disk_id = $s['ram_disk_id'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->user_data = $s['user_data'] ?? '';
  }
}

type RestorableByStringList = vec<String>;

class RestoreAddressToClassicRequest {
  public bool $dry_run;
  public string $public_ip;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'public_ip' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->public_ip = $s['public_ip'] ?? '';
  }
}

class RestoreAddressToClassicResult {
  public string $public_ip;
  public ?Status $status;

  public function __construct(shape(
    ?'public_ip' => string,
    ?'status' => ?Status,
  ) $s = shape()) {
    $this->public_ip = $s['public_ip'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

class RevokeClientVpnIngressRequest {
  public string $access_group_id;
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public bool $dry_run;
  public bool $revoke_all_groups;
  public string $target_network_cidr;

  public function __construct(shape(
    ?'access_group_id' => string,
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'dry_run' => bool,
    ?'revoke_all_groups' => bool,
    ?'target_network_cidr' => string,
  ) $s = shape()) {
    $this->access_group_id = $s['access_group_id'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->revoke_all_groups = $s['revoke_all_groups'] ?? false;
    $this->target_network_cidr = $s['target_network_cidr'] ?? '';
  }
}

class RevokeClientVpnIngressResult {
  public ?ClientVpnAuthorizationRuleStatus $status;

  public function __construct(shape(
    ?'status' => ?ClientVpnAuthorizationRuleStatus,
  ) $s = shape()) {
    $this->status = $s['status'] ?? null;
  }
}

class RevokeSecurityGroupEgressRequest {
  public string $cidr_ip;
  public bool $dry_run;
  public int $from_port;
  public ?SecurityGroupId $group_id;
  public ?IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;

  public function __construct(shape(
    ?'cidr_ip' => string,
    ?'dry_run' => bool,
    ?'from_port' => int,
    ?'group_id' => ?SecurityGroupId,
    ?'ip_permissions' => ?IpPermissionList,
    ?'ip_protocol' => string,
    ?'source_security_group_name' => string,
    ?'source_security_group_owner_id' => string,
    ?'to_port' => int,
  ) $s = shape()) {
    $this->cidr_ip = $s['cidr_ip'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->from_port = $s['from_port'] ?? 0;
    $this->group_id = $s['group_id'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
    $this->ip_protocol = $s['ip_protocol'] ?? '';
    $this->source_security_group_name = $s['source_security_group_name'] ?? '';
    $this->source_security_group_owner_id = $s['source_security_group_owner_id'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

class RevokeSecurityGroupIngressRequest {
  public string $cidr_ip;
  public bool $dry_run;
  public int $from_port;
  public ?SecurityGroupId $group_id;
  public ?SecurityGroupName $group_name;
  public ?IpPermissionList $ip_permissions;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public int $to_port;

  public function __construct(shape(
    ?'cidr_ip' => string,
    ?'dry_run' => bool,
    ?'from_port' => int,
    ?'group_id' => ?SecurityGroupId,
    ?'group_name' => ?SecurityGroupName,
    ?'ip_permissions' => ?IpPermissionList,
    ?'ip_protocol' => string,
    ?'source_security_group_name' => string,
    ?'source_security_group_owner_id' => string,
    ?'to_port' => int,
  ) $s = shape()) {
    $this->cidr_ip = $s['cidr_ip'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->from_port = $s['from_port'] ?? 0;
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
    $this->ip_protocol = $s['ip_protocol'] ?? '';
    $this->source_security_group_name = $s['source_security_group_name'] ?? '';
    $this->source_security_group_owner_id = $s['source_security_group_owner_id'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

type RootDeviceType = string;

type RootDeviceTypeList = vec<RootDeviceType>;

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
  public ?RouteOrigin $origin;
  public ?RouteState $state;
  public string $transit_gateway_id;
  public string $vpc_peering_connection_id;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'destination_ipv_6_cidr_block' => string,
    ?'destination_prefix_list_id' => string,
    ?'egress_only_internet_gateway_id' => string,
    ?'gateway_id' => string,
    ?'instance_id' => string,
    ?'instance_owner_id' => string,
    ?'local_gateway_id' => string,
    ?'nat_gateway_id' => string,
    ?'network_interface_id' => string,
    ?'origin' => ?RouteOrigin,
    ?'state' => ?RouteState,
    ?'transit_gateway_id' => string,
    ?'vpc_peering_connection_id' => string,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->destination_ipv_6_cidr_block = $s['destination_ipv_6_cidr_block'] ?? '';
    $this->destination_prefix_list_id = $s['destination_prefix_list_id'] ?? '';
    $this->egress_only_internet_gateway_id = $s['egress_only_internet_gateway_id'] ?? '';
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_owner_id = $s['instance_owner_id'] ?? '';
    $this->local_gateway_id = $s['local_gateway_id'] ?? '';
    $this->nat_gateway_id = $s['nat_gateway_id'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->origin = $s['origin'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

type RouteGatewayId = string;

type RouteList = vec<Route>;

type RouteOrigin = string;

type RouteState = string;

class RouteTable {
  public ?RouteTableAssociationList $associations;
  public string $owner_id;
  public ?PropagatingVgwList $propagating_vgws;
  public string $route_table_id;
  public ?RouteList $routes;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'associations' => ?RouteTableAssociationList,
    ?'owner_id' => string,
    ?'propagating_vgws' => ?PropagatingVgwList,
    ?'route_table_id' => string,
    ?'routes' => ?RouteList,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->associations = $s['associations'] ?? vec[];
    $this->owner_id = $s['owner_id'] ?? '';
    $this->propagating_vgws = $s['propagating_vgws'] ?? vec[];
    $this->route_table_id = $s['route_table_id'] ?? '';
    $this->routes = $s['routes'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class RouteTableAssociation {
  public ?RouteTableAssociationState $association_state;
  public string $gateway_id;
  public bool $main;
  public string $route_table_association_id;
  public string $route_table_id;
  public string $subnet_id;

  public function __construct(shape(
    ?'association_state' => ?RouteTableAssociationState,
    ?'gateway_id' => string,
    ?'main' => bool,
    ?'route_table_association_id' => string,
    ?'route_table_id' => string,
    ?'subnet_id' => string,
  ) $s = shape()) {
    $this->association_state = $s['association_state'] ?? null;
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->main = $s['main'] ?? false;
    $this->route_table_association_id = $s['route_table_association_id'] ?? '';
    $this->route_table_id = $s['route_table_id'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type RouteTableAssociationId = string;

type RouteTableAssociationList = vec<RouteTableAssociation>;

class RouteTableAssociationState {
  public ?RouteTableAssociationStateCode $state;
  public string $status_message;

  public function __construct(shape(
    ?'state' => ?RouteTableAssociationStateCode,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type RouteTableAssociationStateCode = string;

type RouteTableId = string;

type RouteTableIdStringList = vec<RouteTableId>;

type RouteTableList = vec<RouteTable>;

type RuleAction = string;

class RunInstancesMonitoringEnabled {
  public bool $enabled;

  public function __construct(shape(
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class RunInstancesRequest {
  public string $additional_info;
  public ?BlockDeviceMappingRequestList $block_device_mappings;
  public ?CapacityReservationSpecification $capacity_reservation_specification;
  public string $client_token;
  public ?CpuOptionsRequest $cpu_options;
  public ?CreditSpecificationRequest $credit_specification;
  public bool $disable_api_termination;
  public bool $dry_run;
  public bool $ebs_optimized;
  public ?ElasticGpuSpecifications $elastic_gpu_specification;
  public ?ElasticInferenceAccelerators $elastic_inference_accelerators;
  public ?HibernationOptionsRequest $hibernation_options;
  public ?IamInstanceProfileSpecification $iam_instance_profile;
  public ?ImageId $image_id;
  public ?ShutdownBehavior $instance_initiated_shutdown_behavior;
  public ?InstanceMarketOptionsRequest $instance_market_options;
  public ?InstanceType $instance_type;
  public int $ipv_6_address_count;
  public ?InstanceIpv6AddressList $ipv_6_addresses;
  public ?KernelId $kernel_id;
  public ?KeyPairName $key_name;
  public ?LaunchTemplateSpecification $launch_template;
  public ?LicenseSpecificationListRequest $license_specifications;
  public int $max_count;
  public ?InstanceMetadataOptionsRequest $metadata_options;
  public int $min_count;
  public ?RunInstancesMonitoringEnabled $monitoring;
  public ?InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public ?Placement $placement;
  public string $private_ip_address;
  public ?RamdiskId $ramdisk_id;
  public ?SecurityGroupIdStringList $security_group_ids;
  public ?SecurityGroupStringList $security_groups;
  public ?SubnetId $subnet_id;
  public ?TagSpecificationList $tag_specifications;
  public string $user_data;

  public function __construct(shape(
    ?'additional_info' => string,
    ?'block_device_mappings' => ?BlockDeviceMappingRequestList,
    ?'capacity_reservation_specification' => ?CapacityReservationSpecification,
    ?'client_token' => string,
    ?'cpu_options' => ?CpuOptionsRequest,
    ?'credit_specification' => ?CreditSpecificationRequest,
    ?'disable_api_termination' => bool,
    ?'dry_run' => bool,
    ?'ebs_optimized' => bool,
    ?'elastic_gpu_specification' => ?ElasticGpuSpecifications,
    ?'elastic_inference_accelerators' => ?ElasticInferenceAccelerators,
    ?'hibernation_options' => ?HibernationOptionsRequest,
    ?'iam_instance_profile' => ?IamInstanceProfileSpecification,
    ?'image_id' => ?ImageId,
    ?'instance_initiated_shutdown_behavior' => ?ShutdownBehavior,
    ?'instance_market_options' => ?InstanceMarketOptionsRequest,
    ?'instance_type' => ?InstanceType,
    ?'ipv_6_address_count' => int,
    ?'ipv_6_addresses' => ?InstanceIpv6AddressList,
    ?'kernel_id' => ?KernelId,
    ?'key_name' => ?KeyPairName,
    ?'launch_template' => ?LaunchTemplateSpecification,
    ?'license_specifications' => ?LicenseSpecificationListRequest,
    ?'max_count' => int,
    ?'metadata_options' => ?InstanceMetadataOptionsRequest,
    ?'min_count' => int,
    ?'monitoring' => ?RunInstancesMonitoringEnabled,
    ?'network_interfaces' => ?InstanceNetworkInterfaceSpecificationList,
    ?'placement' => ?Placement,
    ?'private_ip_address' => string,
    ?'ramdisk_id' => ?RamdiskId,
    ?'security_group_ids' => ?SecurityGroupIdStringList,
    ?'security_groups' => ?SecurityGroupStringList,
    ?'subnet_id' => ?SubnetId,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'user_data' => string,
  ) $s = shape()) {
    $this->additional_info = $s['additional_info'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->capacity_reservation_specification = $s['capacity_reservation_specification'] ?? null;
    $this->client_token = $s['client_token'] ?? '';
    $this->cpu_options = $s['cpu_options'] ?? null;
    $this->credit_specification = $s['credit_specification'] ?? null;
    $this->disable_api_termination = $s['disable_api_termination'] ?? false;
    $this->dry_run = $s['dry_run'] ?? false;
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->elastic_gpu_specification = $s['elastic_gpu_specification'] ?? vec[];
    $this->elastic_inference_accelerators = $s['elastic_inference_accelerators'] ?? vec[];
    $this->hibernation_options = $s['hibernation_options'] ?? null;
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_initiated_shutdown_behavior = $s['instance_initiated_shutdown_behavior'] ?? '';
    $this->instance_market_options = $s['instance_market_options'] ?? null;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->ipv_6_address_count = $s['ipv_6_address_count'] ?? 0;
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->launch_template = $s['launch_template'] ?? null;
    $this->license_specifications = $s['license_specifications'] ?? vec[];
    $this->max_count = $s['max_count'] ?? 0;
    $this->metadata_options = $s['metadata_options'] ?? null;
    $this->min_count = $s['min_count'] ?? 0;
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->placement = $s['placement'] ?? null;
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->user_data = $s['user_data'] ?? '';
  }
}

class RunScheduledInstancesRequest {
  public string $client_token;
  public bool $dry_run;
  public int $instance_count;
  public ?ScheduledInstancesLaunchSpecification $launch_specification;
  public ?ScheduledInstanceId $scheduled_instance_id;

  public function __construct(shape(
    ?'client_token' => string,
    ?'dry_run' => bool,
    ?'instance_count' => int,
    ?'launch_specification' => ?ScheduledInstancesLaunchSpecification,
    ?'scheduled_instance_id' => ?ScheduledInstanceId,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->launch_specification = $s['launch_specification'] ?? null;
    $this->scheduled_instance_id = $s['scheduled_instance_id'] ?? '';
  }
}

class RunScheduledInstancesResult {
  public ?InstanceIdSet $instance_id_set;

  public function __construct(shape(
    ?'instance_id_set' => ?InstanceIdSet,
  ) $s = shape()) {
    $this->instance_id_set = $s['instance_id_set'] ?? vec[];
  }
}

class S3Storage {
  public string $aws_access_key_id;
  public string $bucket;
  public string $prefix;
  public ?Blob $upload_policy;
  public string $upload_policy_signature;

  public function __construct(shape(
    ?'aws_access_key_id' => string,
    ?'bucket' => string,
    ?'prefix' => string,
    ?'upload_policy' => ?Blob,
    ?'upload_policy_signature' => string,
  ) $s = shape()) {
    $this->aws_access_key_id = $s['aws_access_key_id'] ?? '';
    $this->bucket = $s['bucket'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->upload_policy = $s['upload_policy'] ?? '';
    $this->upload_policy_signature = $s['upload_policy_signature'] ?? '';
  }
}

class ScheduledInstance {
  public string $availability_zone;
  public ?DateTime $create_date;
  public string $hourly_price;
  public int $instance_count;
  public string $instance_type;
  public string $network_platform;
  public ?DateTime $next_slot_start_time;
  public string $platform;
  public ?DateTime $previous_slot_end_time;
  public ?ScheduledInstanceRecurrence $recurrence;
  public string $scheduled_instance_id;
  public int $slot_duration_in_hours;
  public ?DateTime $term_end_date;
  public ?DateTime $term_start_date;
  public int $total_scheduled_instance_hours;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'create_date' => ?DateTime,
    ?'hourly_price' => string,
    ?'instance_count' => int,
    ?'instance_type' => string,
    ?'network_platform' => string,
    ?'next_slot_start_time' => ?DateTime,
    ?'platform' => string,
    ?'previous_slot_end_time' => ?DateTime,
    ?'recurrence' => ?ScheduledInstanceRecurrence,
    ?'scheduled_instance_id' => string,
    ?'slot_duration_in_hours' => int,
    ?'term_end_date' => ?DateTime,
    ?'term_start_date' => ?DateTime,
    ?'total_scheduled_instance_hours' => int,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->create_date = $s['create_date'] ?? 0;
    $this->hourly_price = $s['hourly_price'] ?? '';
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->network_platform = $s['network_platform'] ?? '';
    $this->next_slot_start_time = $s['next_slot_start_time'] ?? 0;
    $this->platform = $s['platform'] ?? '';
    $this->previous_slot_end_time = $s['previous_slot_end_time'] ?? 0;
    $this->recurrence = $s['recurrence'] ?? null;
    $this->scheduled_instance_id = $s['scheduled_instance_id'] ?? '';
    $this->slot_duration_in_hours = $s['slot_duration_in_hours'] ?? 0;
    $this->term_end_date = $s['term_end_date'] ?? 0;
    $this->term_start_date = $s['term_start_date'] ?? 0;
    $this->total_scheduled_instance_hours = $s['total_scheduled_instance_hours'] ?? 0;
  }
}

class ScheduledInstanceAvailability {
  public string $availability_zone;
  public int $available_instance_count;
  public ?DateTime $first_slot_start_time;
  public string $hourly_price;
  public string $instance_type;
  public int $max_term_duration_in_days;
  public int $min_term_duration_in_days;
  public string $network_platform;
  public string $platform;
  public string $purchase_token;
  public ?ScheduledInstanceRecurrence $recurrence;
  public int $slot_duration_in_hours;
  public int $total_scheduled_instance_hours;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'available_instance_count' => int,
    ?'first_slot_start_time' => ?DateTime,
    ?'hourly_price' => string,
    ?'instance_type' => string,
    ?'max_term_duration_in_days' => int,
    ?'min_term_duration_in_days' => int,
    ?'network_platform' => string,
    ?'platform' => string,
    ?'purchase_token' => string,
    ?'recurrence' => ?ScheduledInstanceRecurrence,
    ?'slot_duration_in_hours' => int,
    ?'total_scheduled_instance_hours' => int,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->available_instance_count = $s['available_instance_count'] ?? 0;
    $this->first_slot_start_time = $s['first_slot_start_time'] ?? 0;
    $this->hourly_price = $s['hourly_price'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->max_term_duration_in_days = $s['max_term_duration_in_days'] ?? 0;
    $this->min_term_duration_in_days = $s['min_term_duration_in_days'] ?? 0;
    $this->network_platform = $s['network_platform'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->purchase_token = $s['purchase_token'] ?? '';
    $this->recurrence = $s['recurrence'] ?? null;
    $this->slot_duration_in_hours = $s['slot_duration_in_hours'] ?? 0;
    $this->total_scheduled_instance_hours = $s['total_scheduled_instance_hours'] ?? 0;
  }
}

type ScheduledInstanceAvailabilitySet = vec<ScheduledInstanceAvailability>;

type ScheduledInstanceId = string;

type ScheduledInstanceIdRequestSet = vec<ScheduledInstanceId>;

class ScheduledInstanceRecurrence {
  public string $frequency;
  public int $interval;
  public ?OccurrenceDaySet $occurrence_day_set;
  public bool $occurrence_relative_to_end;
  public string $occurrence_unit;

  public function __construct(shape(
    ?'frequency' => string,
    ?'interval' => int,
    ?'occurrence_day_set' => ?OccurrenceDaySet,
    ?'occurrence_relative_to_end' => bool,
    ?'occurrence_unit' => string,
  ) $s = shape()) {
    $this->frequency = $s['frequency'] ?? '';
    $this->interval = $s['interval'] ?? 0;
    $this->occurrence_day_set = $s['occurrence_day_set'] ?? vec[];
    $this->occurrence_relative_to_end = $s['occurrence_relative_to_end'] ?? false;
    $this->occurrence_unit = $s['occurrence_unit'] ?? '';
  }
}

class ScheduledInstanceRecurrenceRequest {
  public string $frequency;
  public int $interval;
  public ?OccurrenceDayRequestSet $occurrence_days;
  public bool $occurrence_relative_to_end;
  public string $occurrence_unit;

  public function __construct(shape(
    ?'frequency' => string,
    ?'interval' => int,
    ?'occurrence_days' => ?OccurrenceDayRequestSet,
    ?'occurrence_relative_to_end' => bool,
    ?'occurrence_unit' => string,
  ) $s = shape()) {
    $this->frequency = $s['frequency'] ?? '';
    $this->interval = $s['interval'] ?? 0;
    $this->occurrence_days = $s['occurrence_days'] ?? vec[];
    $this->occurrence_relative_to_end = $s['occurrence_relative_to_end'] ?? false;
    $this->occurrence_unit = $s['occurrence_unit'] ?? '';
  }
}

type ScheduledInstanceSet = vec<ScheduledInstance>;

class ScheduledInstancesBlockDeviceMapping {
  public string $device_name;
  public ?ScheduledInstancesEbs $ebs;
  public string $no_device;
  public string $virtual_name;

  public function __construct(shape(
    ?'device_name' => string,
    ?'ebs' => ?ScheduledInstancesEbs,
    ?'no_device' => string,
    ?'virtual_name' => string,
  ) $s = shape()) {
    $this->device_name = $s['device_name'] ?? '';
    $this->ebs = $s['ebs'] ?? null;
    $this->no_device = $s['no_device'] ?? '';
    $this->virtual_name = $s['virtual_name'] ?? '';
  }
}

type ScheduledInstancesBlockDeviceMappingSet = vec<ScheduledInstancesBlockDeviceMapping>;

class ScheduledInstancesEbs {
  public bool $delete_on_termination;
  public bool $encrypted;
  public int $iops;
  public ?SnapshotId $snapshot_id;
  public int $volume_size;
  public string $volume_type;

  public function __construct(shape(
    ?'delete_on_termination' => bool,
    ?'encrypted' => bool,
    ?'iops' => int,
    ?'snapshot_id' => ?SnapshotId,
    ?'volume_size' => int,
    ?'volume_type' => string,
  ) $s = shape()) {
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class ScheduledInstancesIamInstanceProfile {
  public string $arn;
  public string $name;

  public function __construct(shape(
    ?'arn' => string,
    ?'name' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class ScheduledInstancesIpv6Address {
  public ?Ipv6Address $ipv_6_address;

  public function __construct(shape(
    ?'ipv_6_address' => ?Ipv6Address,
  ) $s = shape()) {
    $this->ipv_6_address = $s['ipv_6_address'] ?? '';
  }
}

type ScheduledInstancesIpv6AddressList = vec<ScheduledInstancesIpv6Address>;

class ScheduledInstancesLaunchSpecification {
  public ?ScheduledInstancesBlockDeviceMappingSet $block_device_mappings;
  public bool $ebs_optimized;
  public ?ScheduledInstancesIamInstanceProfile $iam_instance_profile;
  public ?ImageId $image_id;
  public string $instance_type;
  public ?KernelId $kernel_id;
  public ?KeyPairName $key_name;
  public ?ScheduledInstancesMonitoring $monitoring;
  public ?ScheduledInstancesNetworkInterfaceSet $network_interfaces;
  public ?ScheduledInstancesPlacement $placement;
  public ?RamdiskId $ramdisk_id;
  public ?ScheduledInstancesSecurityGroupIdSet $security_group_ids;
  public ?SubnetId $subnet_id;
  public string $user_data;

  public function __construct(shape(
    ?'block_device_mappings' => ?ScheduledInstancesBlockDeviceMappingSet,
    ?'ebs_optimized' => bool,
    ?'iam_instance_profile' => ?ScheduledInstancesIamInstanceProfile,
    ?'image_id' => ?ImageId,
    ?'instance_type' => string,
    ?'kernel_id' => ?KernelId,
    ?'key_name' => ?KeyPairName,
    ?'monitoring' => ?ScheduledInstancesMonitoring,
    ?'network_interfaces' => ?ScheduledInstancesNetworkInterfaceSet,
    ?'placement' => ?ScheduledInstancesPlacement,
    ?'ramdisk_id' => ?RamdiskId,
    ?'security_group_ids' => ?ScheduledInstancesSecurityGroupIdSet,
    ?'subnet_id' => ?SubnetId,
    ?'user_data' => string,
  ) $s = shape()) {
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->placement = $s['placement'] ?? null;
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->security_group_ids = $s['security_group_ids'] ?? vec[];
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->user_data = $s['user_data'] ?? '';
  }
}

class ScheduledInstancesMonitoring {
  public bool $enabled;

  public function __construct(shape(
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class ScheduledInstancesNetworkInterface {
  public bool $associate_public_ip_address;
  public bool $delete_on_termination;
  public string $description;
  public int $device_index;
  public ?ScheduledInstancesSecurityGroupIdSet $groups;
  public int $ipv_6_address_count;
  public ?ScheduledInstancesIpv6AddressList $ipv_6_addresses;
  public ?NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public ?PrivateIpAddressConfigSet $private_ip_address_configs;
  public int $secondary_private_ip_address_count;
  public ?SubnetId $subnet_id;

  public function __construct(shape(
    ?'associate_public_ip_address' => bool,
    ?'delete_on_termination' => bool,
    ?'description' => string,
    ?'device_index' => int,
    ?'groups' => ?ScheduledInstancesSecurityGroupIdSet,
    ?'ipv_6_address_count' => int,
    ?'ipv_6_addresses' => ?ScheduledInstancesIpv6AddressList,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'private_ip_address' => string,
    ?'private_ip_address_configs' => ?PrivateIpAddressConfigSet,
    ?'secondary_private_ip_address_count' => int,
    ?'subnet_id' => ?SubnetId,
  ) $s = shape()) {
    $this->associate_public_ip_address = $s['associate_public_ip_address'] ?? false;
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->description = $s['description'] ?? '';
    $this->device_index = $s['device_index'] ?? 0;
    $this->groups = $s['groups'] ?? vec[];
    $this->ipv_6_address_count = $s['ipv_6_address_count'] ?? 0;
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->private_ip_address_configs = $s['private_ip_address_configs'] ?? vec[];
    $this->secondary_private_ip_address_count = $s['secondary_private_ip_address_count'] ?? 0;
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type ScheduledInstancesNetworkInterfaceSet = vec<ScheduledInstancesNetworkInterface>;

class ScheduledInstancesPlacement {
  public string $availability_zone;
  public ?PlacementGroupName $group_name;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'group_name' => ?PlacementGroupName,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

class ScheduledInstancesPrivateIpAddressConfig {
  public bool $primary;
  public string $private_ip_address;

  public function __construct(shape(
    ?'primary' => bool,
    ?'private_ip_address' => string,
  ) $s = shape()) {
    $this->primary = $s['primary'] ?? false;
    $this->private_ip_address = $s['private_ip_address'] ?? '';
  }
}

type ScheduledInstancesSecurityGroupIdSet = vec<SecurityGroupId>;

class SearchLocalGatewayRoutesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?LocalGatewayRoutetableId $local_gateway_route_table_id;
  public ?MaxResults $max_results;
  public string $next_token;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'local_gateway_route_table_id' => ?LocalGatewayRoutetableId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->local_gateway_route_table_id = $s['local_gateway_route_table_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchLocalGatewayRoutesResult {
  public string $next_token;
  public ?LocalGatewayRouteList $routes;

  public function __construct(shape(
    ?'next_token' => string,
    ?'routes' => ?LocalGatewayRouteList,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->routes = $s['routes'] ?? vec[];
  }
}

class SearchTransitGatewayMulticastGroupsRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public string $next_token;
  public ?TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'next_token' => string,
    ?'transit_gateway_multicast_domain_id' => ?TransitGatewayMulticastDomainId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class SearchTransitGatewayMulticastGroupsResult {
  public ?TransitGatewayMulticastGroupList $multicast_groups;
  public string $next_token;

  public function __construct(shape(
    ?'multicast_groups' => ?TransitGatewayMulticastGroupList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->multicast_groups = $s['multicast_groups'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class SearchTransitGatewayRoutesRequest {
  public bool $dry_run;
  public ?FilterList $filters;
  public ?TransitGatewayMaxResults $max_results;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'filters' => ?FilterList,
    ?'max_results' => ?TransitGatewayMaxResults,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->filters = $s['filters'] ?? vec[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class SearchTransitGatewayRoutesResult {
  public bool $additional_routes_available;
  public ?TransitGatewayRouteList $routes;

  public function __construct(shape(
    ?'additional_routes_available' => bool,
    ?'routes' => ?TransitGatewayRouteList,
  ) $s = shape()) {
    $this->additional_routes_available = $s['additional_routes_available'] ?? false;
    $this->routes = $s['routes'] ?? vec[];
  }
}

class SecurityGroup {
  public string $description;
  public string $group_id;
  public string $group_name;
  public ?IpPermissionList $ip_permissions;
  public ?IpPermissionList $ip_permissions_egress;
  public string $owner_id;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'description' => string,
    ?'group_id' => string,
    ?'group_name' => string,
    ?'ip_permissions' => ?IpPermissionList,
    ?'ip_permissions_egress' => ?IpPermissionList,
    ?'owner_id' => string,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
    $this->ip_permissions_egress = $s['ip_permissions_egress'] ?? vec[];
    $this->owner_id = $s['owner_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type SecurityGroupId = string;

type SecurityGroupIdStringList = vec<SecurityGroupId>;

class SecurityGroupIdentifier {
  public string $group_id;
  public string $group_name;

  public function __construct(shape(
    ?'group_id' => string,
    ?'group_name' => string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
  }
}

type SecurityGroupList = vec<SecurityGroup>;

type SecurityGroupName = string;

class SecurityGroupReference {
  public string $group_id;
  public string $referencing_vpc_id;
  public string $vpc_peering_connection_id;

  public function __construct(shape(
    ?'group_id' => string,
    ?'referencing_vpc_id' => string,
    ?'vpc_peering_connection_id' => string,
  ) $s = shape()) {
    $this->group_id = $s['group_id'] ?? '';
    $this->referencing_vpc_id = $s['referencing_vpc_id'] ?? '';
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

type SecurityGroupReferences = vec<SecurityGroupReference>;

type SecurityGroupStringList = vec<SecurityGroupName>;

class SendDiagnosticInterruptRequest {
  public bool $dry_run;
  public ?InstanceId $instance_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_id' => ?InstanceId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

type SensitiveUserData = string;

class ServiceConfiguration {
  public bool $acceptance_required;
  public ?ValueStringList $availability_zones;
  public ?ValueStringList $base_endpoint_dns_names;
  public bool $manages_vpc_endpoints;
  public ?ValueStringList $network_load_balancer_arns;
  public string $private_dns_name;
  public ?PrivateDnsNameConfiguration $private_dns_name_configuration;
  public string $service_id;
  public string $service_name;
  public ?ServiceState $service_state;
  public ?ServiceTypeDetailSet $service_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'acceptance_required' => bool,
    ?'availability_zones' => ?ValueStringList,
    ?'base_endpoint_dns_names' => ?ValueStringList,
    ?'manages_vpc_endpoints' => bool,
    ?'network_load_balancer_arns' => ?ValueStringList,
    ?'private_dns_name' => string,
    ?'private_dns_name_configuration' => ?PrivateDnsNameConfiguration,
    ?'service_id' => string,
    ?'service_name' => string,
    ?'service_state' => ?ServiceState,
    ?'service_type' => ?ServiceTypeDetailSet,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->acceptance_required = $s['acceptance_required'] ?? false;
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->base_endpoint_dns_names = $s['base_endpoint_dns_names'] ?? vec[];
    $this->manages_vpc_endpoints = $s['manages_vpc_endpoints'] ?? false;
    $this->network_load_balancer_arns = $s['network_load_balancer_arns'] ?? vec[];
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_dns_name_configuration = $s['private_dns_name_configuration'] ?? null;
    $this->service_id = $s['service_id'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_state = $s['service_state'] ?? '';
    $this->service_type = $s['service_type'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
  }
}

type ServiceConfigurationSet = vec<ServiceConfiguration>;

class ServiceDetail {
  public bool $acceptance_required;
  public ?ValueStringList $availability_zones;
  public ?ValueStringList $base_endpoint_dns_names;
  public bool $manages_vpc_endpoints;
  public string $owner;
  public string $private_dns_name;
  public ?DnsNameState $private_dns_name_verification_state;
  public string $service_id;
  public string $service_name;
  public ?ServiceTypeDetailSet $service_type;
  public ?TagList $tags;
  public bool $vpc_endpoint_policy_supported;

  public function __construct(shape(
    ?'acceptance_required' => bool,
    ?'availability_zones' => ?ValueStringList,
    ?'base_endpoint_dns_names' => ?ValueStringList,
    ?'manages_vpc_endpoints' => bool,
    ?'owner' => string,
    ?'private_dns_name' => string,
    ?'private_dns_name_verification_state' => ?DnsNameState,
    ?'service_id' => string,
    ?'service_name' => string,
    ?'service_type' => ?ServiceTypeDetailSet,
    ?'tags' => ?TagList,
    ?'vpc_endpoint_policy_supported' => bool,
  ) $s = shape()) {
    $this->acceptance_required = $s['acceptance_required'] ?? false;
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->base_endpoint_dns_names = $s['base_endpoint_dns_names'] ?? vec[];
    $this->manages_vpc_endpoints = $s['manages_vpc_endpoints'] ?? false;
    $this->owner = $s['owner'] ?? '';
    $this->private_dns_name = $s['private_dns_name'] ?? '';
    $this->private_dns_name_verification_state = $s['private_dns_name_verification_state'] ?? '';
    $this->service_id = $s['service_id'] ?? '';
    $this->service_name = $s['service_name'] ?? '';
    $this->service_type = $s['service_type'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_endpoint_policy_supported = $s['vpc_endpoint_policy_supported'] ?? false;
  }
}

type ServiceDetailSet = vec<ServiceDetail>;

type ServiceState = string;

type ServiceType = string;

class ServiceTypeDetail {
  public ?ServiceType $service_type;

  public function __construct(shape(
    ?'service_type' => ?ServiceType,
  ) $s = shape()) {
    $this->service_type = $s['service_type'] ?? '';
  }
}

type ServiceTypeDetailSet = vec<ServiceTypeDetail>;

type ShutdownBehavior = string;

class SlotDateTimeRangeRequest {
  public ?DateTime $earliest_time;
  public ?DateTime $latest_time;

  public function __construct(shape(
    ?'earliest_time' => ?DateTime,
    ?'latest_time' => ?DateTime,
  ) $s = shape()) {
    $this->earliest_time = $s['earliest_time'] ?? 0;
    $this->latest_time = $s['latest_time'] ?? 0;
  }
}

class SlotStartTimeRangeRequest {
  public ?DateTime $earliest_time;
  public ?DateTime $latest_time;

  public function __construct(shape(
    ?'earliest_time' => ?DateTime,
    ?'latest_time' => ?DateTime,
  ) $s = shape()) {
    $this->earliest_time = $s['earliest_time'] ?? 0;
    $this->latest_time = $s['latest_time'] ?? 0;
  }
}

class Snapshot {
  public string $data_encryption_key_id;
  public string $description;
  public bool $encrypted;
  public string $kms_key_id;
  public string $owner_alias;
  public string $owner_id;
  public string $progress;
  public string $snapshot_id;
  public ?DateTime $start_time;
  public ?SnapshotState $state;
  public string $state_message;
  public ?TagList $tags;
  public string $volume_id;
  public int $volume_size;

  public function __construct(shape(
    ?'data_encryption_key_id' => string,
    ?'description' => string,
    ?'encrypted' => bool,
    ?'kms_key_id' => string,
    ?'owner_alias' => string,
    ?'owner_id' => string,
    ?'progress' => string,
    ?'snapshot_id' => string,
    ?'start_time' => ?DateTime,
    ?'state' => ?SnapshotState,
    ?'state_message' => string,
    ?'tags' => ?TagList,
    ?'volume_id' => string,
    ?'volume_size' => int,
  ) $s = shape()) {
    $this->data_encryption_key_id = $s['data_encryption_key_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->owner_alias = $s['owner_alias'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->state_message = $s['state_message'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
  }
}

type SnapshotAttributeName = string;

class SnapshotDetail {
  public string $description;
  public string $device_name;
  public ?Double $disk_image_size;
  public string $format;
  public string $progress;
  public string $snapshot_id;
  public string $status;
  public string $status_message;
  public string $url;
  public ?UserBucketDetails $user_bucket;

  public function __construct(shape(
    ?'description' => string,
    ?'device_name' => string,
    ?'disk_image_size' => ?Double,
    ?'format' => string,
    ?'progress' => string,
    ?'snapshot_id' => string,
    ?'status' => string,
    ?'status_message' => string,
    ?'url' => string,
    ?'user_bucket' => ?UserBucketDetails,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->device_name = $s['device_name'] ?? '';
    $this->disk_image_size = $s['disk_image_size'] ?? 0.0;
    $this->format = $s['format'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->url = $s['url'] ?? '';
    $this->user_bucket = $s['user_bucket'] ?? null;
  }
}

type SnapshotDetailList = vec<SnapshotDetail>;

class SnapshotDiskContainer {
  public string $description;
  public string $format;
  public string $url;
  public ?UserBucket $user_bucket;

  public function __construct(shape(
    ?'description' => string,
    ?'format' => string,
    ?'url' => string,
    ?'user_bucket' => ?UserBucket,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->format = $s['format'] ?? '';
    $this->url = $s['url'] ?? '';
    $this->user_bucket = $s['user_bucket'] ?? null;
  }
}

type SnapshotId = string;

type SnapshotIdStringList = vec<SnapshotId>;

class SnapshotInfo {
  public string $description;
  public bool $encrypted;
  public string $owner_id;
  public string $progress;
  public string $snapshot_id;
  public ?MillisecondDateTime $start_time;
  public ?SnapshotState $state;
  public ?TagList $tags;
  public string $volume_id;
  public int $volume_size;

  public function __construct(shape(
    ?'description' => string,
    ?'encrypted' => bool,
    ?'owner_id' => string,
    ?'progress' => string,
    ?'snapshot_id' => string,
    ?'start_time' => ?MillisecondDateTime,
    ?'state' => ?SnapshotState,
    ?'tags' => ?TagList,
    ?'volume_id' => string,
    ?'volume_size' => int,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->encrypted = $s['encrypted'] ?? false;
    $this->owner_id = $s['owner_id'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_size = $s['volume_size'] ?? 0;
  }
}

type SnapshotList = vec<Snapshot>;

type SnapshotSet = vec<SnapshotInfo>;

type SnapshotState = string;

class SnapshotTaskDetail {
  public string $description;
  public ?Double $disk_image_size;
  public bool $encrypted;
  public string $format;
  public string $kms_key_id;
  public string $progress;
  public string $snapshot_id;
  public string $status;
  public string $status_message;
  public string $url;
  public ?UserBucketDetails $user_bucket;

  public function __construct(shape(
    ?'description' => string,
    ?'disk_image_size' => ?Double,
    ?'encrypted' => bool,
    ?'format' => string,
    ?'kms_key_id' => string,
    ?'progress' => string,
    ?'snapshot_id' => string,
    ?'status' => string,
    ?'status_message' => string,
    ?'url' => string,
    ?'user_bucket' => ?UserBucketDetails,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->disk_image_size = $s['disk_image_size'] ?? 0.0;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->format = $s['format'] ?? '';
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
    $this->url = $s['url'] ?? '';
    $this->user_bucket = $s['user_bucket'] ?? null;
  }
}

type SpotAllocationStrategy = string;

class SpotDatafeedSubscription {
  public string $bucket;
  public ?SpotInstanceStateFault $fault;
  public string $owner_id;
  public string $prefix;
  public ?DatafeedSubscriptionState $state;

  public function __construct(shape(
    ?'bucket' => string,
    ?'fault' => ?SpotInstanceStateFault,
    ?'owner_id' => string,
    ?'prefix' => string,
    ?'state' => ?DatafeedSubscriptionState,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->fault = $s['fault'] ?? null;
    $this->owner_id = $s['owner_id'] ?? '';
    $this->prefix = $s['prefix'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class SpotFleetLaunchSpecification {
  public string $addressing_type;
  public ?BlockDeviceMappingList $block_device_mappings;
  public bool $ebs_optimized;
  public ?IamInstanceProfileSpecification $iam_instance_profile;
  public string $image_id;
  public ?InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public ?SpotFleetMonitoring $monitoring;
  public ?InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public ?SpotPlacement $placement;
  public string $ramdisk_id;
  public ?GroupIdentifierList $security_groups;
  public string $spot_price;
  public string $subnet_id;
  public ?SpotFleetTagSpecificationList $tag_specifications;
  public string $user_data;
  public ?Double $weighted_capacity;

  public function __construct(shape(
    ?'addressing_type' => string,
    ?'block_device_mappings' => ?BlockDeviceMappingList,
    ?'ebs_optimized' => bool,
    ?'iam_instance_profile' => ?IamInstanceProfileSpecification,
    ?'image_id' => string,
    ?'instance_type' => ?InstanceType,
    ?'kernel_id' => string,
    ?'key_name' => string,
    ?'monitoring' => ?SpotFleetMonitoring,
    ?'network_interfaces' => ?InstanceNetworkInterfaceSpecificationList,
    ?'placement' => ?SpotPlacement,
    ?'ramdisk_id' => string,
    ?'security_groups' => ?GroupIdentifierList,
    ?'spot_price' => string,
    ?'subnet_id' => string,
    ?'tag_specifications' => ?SpotFleetTagSpecificationList,
    ?'user_data' => string,
    ?'weighted_capacity' => ?Double,
  ) $s = shape()) {
    $this->addressing_type = $s['addressing_type'] ?? '';
    $this->block_device_mappings = $s['block_device_mappings'] ?? vec[];
    $this->ebs_optimized = $s['ebs_optimized'] ?? false;
    $this->iam_instance_profile = $s['iam_instance_profile'] ?? null;
    $this->image_id = $s['image_id'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->kernel_id = $s['kernel_id'] ?? '';
    $this->key_name = $s['key_name'] ?? '';
    $this->monitoring = $s['monitoring'] ?? null;
    $this->network_interfaces = $s['network_interfaces'] ?? vec[];
    $this->placement = $s['placement'] ?? null;
    $this->ramdisk_id = $s['ramdisk_id'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->spot_price = $s['spot_price'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->user_data = $s['user_data'] ?? '';
    $this->weighted_capacity = $s['weighted_capacity'] ?? 0.0;
  }
}

class SpotFleetMonitoring {
  public bool $enabled;

  public function __construct(shape(
    ?'enabled' => bool,
  ) $s = shape()) {
    $this->enabled = $s['enabled'] ?? false;
  }
}

class SpotFleetRequestConfig {
  public ?ActivityStatus $activity_status;
  public ?MillisecondDateTime $create_time;
  public ?SpotFleetRequestConfigData $spot_fleet_request_config;
  public string $spot_fleet_request_id;
  public ?BatchState $spot_fleet_request_state;
  public ?TagList $tags;

  public function __construct(shape(
    ?'activity_status' => ?ActivityStatus,
    ?'create_time' => ?MillisecondDateTime,
    ?'spot_fleet_request_config' => ?SpotFleetRequestConfigData,
    ?'spot_fleet_request_id' => string,
    ?'spot_fleet_request_state' => ?BatchState,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->activity_status = $s['activity_status'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->spot_fleet_request_config = $s['spot_fleet_request_config'] ?? null;
    $this->spot_fleet_request_id = $s['spot_fleet_request_id'] ?? '';
    $this->spot_fleet_request_state = $s['spot_fleet_request_state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class SpotFleetRequestConfigData {
  public ?AllocationStrategy $allocation_strategy;
  public string $client_token;
  public ?ExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public ?Double $fulfilled_capacity;
  public string $iam_fleet_role;
  public ?InstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public ?LaunchSpecsList $launch_specifications;
  public ?LaunchTemplateConfigList $launch_template_configs;
  public ?LoadBalancersConfig $load_balancers_config;
  public ?OnDemandAllocationStrategy $on_demand_allocation_strategy;
  public ?Double $on_demand_fulfilled_capacity;
  public string $on_demand_max_total_price;
  public int $on_demand_target_capacity;
  public bool $replace_unhealthy_instances;
  public string $spot_max_total_price;
  public string $spot_price;
  public ?TagSpecificationList $tag_specifications;
  public int $target_capacity;
  public bool $terminate_instances_with_expiration;
  public ?FleetType $type;
  public ?DateTime $valid_from;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'allocation_strategy' => ?AllocationStrategy,
    ?'client_token' => string,
    ?'excess_capacity_termination_policy' => ?ExcessCapacityTerminationPolicy,
    ?'fulfilled_capacity' => ?Double,
    ?'iam_fleet_role' => string,
    ?'instance_interruption_behavior' => ?InstanceInterruptionBehavior,
    ?'instance_pools_to_use_count' => int,
    ?'launch_specifications' => ?LaunchSpecsList,
    ?'launch_template_configs' => ?LaunchTemplateConfigList,
    ?'load_balancers_config' => ?LoadBalancersConfig,
    ?'on_demand_allocation_strategy' => ?OnDemandAllocationStrategy,
    ?'on_demand_fulfilled_capacity' => ?Double,
    ?'on_demand_max_total_price' => string,
    ?'on_demand_target_capacity' => int,
    ?'replace_unhealthy_instances' => bool,
    ?'spot_max_total_price' => string,
    ?'spot_price' => string,
    ?'tag_specifications' => ?TagSpecificationList,
    ?'target_capacity' => int,
    ?'terminate_instances_with_expiration' => bool,
    ?'type' => ?FleetType,
    ?'valid_from' => ?DateTime,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->allocation_strategy = $s['allocation_strategy'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->excess_capacity_termination_policy = $s['excess_capacity_termination_policy'] ?? '';
    $this->fulfilled_capacity = $s['fulfilled_capacity'] ?? 0.0;
    $this->iam_fleet_role = $s['iam_fleet_role'] ?? '';
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->instance_pools_to_use_count = $s['instance_pools_to_use_count'] ?? 0;
    $this->launch_specifications = $s['launch_specifications'] ?? vec[];
    $this->launch_template_configs = $s['launch_template_configs'] ?? vec[];
    $this->load_balancers_config = $s['load_balancers_config'] ?? null;
    $this->on_demand_allocation_strategy = $s['on_demand_allocation_strategy'] ?? '';
    $this->on_demand_fulfilled_capacity = $s['on_demand_fulfilled_capacity'] ?? 0.0;
    $this->on_demand_max_total_price = $s['on_demand_max_total_price'] ?? '';
    $this->on_demand_target_capacity = $s['on_demand_target_capacity'] ?? 0;
    $this->replace_unhealthy_instances = $s['replace_unhealthy_instances'] ?? false;
    $this->spot_max_total_price = $s['spot_max_total_price'] ?? '';
    $this->spot_price = $s['spot_price'] ?? '';
    $this->tag_specifications = $s['tag_specifications'] ?? vec[];
    $this->target_capacity = $s['target_capacity'] ?? 0;
    $this->terminate_instances_with_expiration = $s['terminate_instances_with_expiration'] ?? false;
    $this->type = $s['type'] ?? '';
    $this->valid_from = $s['valid_from'] ?? 0;
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

type SpotFleetRequestConfigSet = vec<SpotFleetRequestConfig>;

type SpotFleetRequestId = string;

type SpotFleetRequestIdList = vec<SpotFleetRequestId>;

class SpotFleetTagSpecification {
  public ?ResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_type' => ?ResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type SpotFleetTagSpecificationList = vec<SpotFleetTagSpecification>;

type SpotInstanceInterruptionBehavior = string;

class SpotInstanceRequest {
  public string $actual_block_hourly_price;
  public string $availability_zone_group;
  public int $block_duration_minutes;
  public ?DateTime $create_time;
  public ?SpotInstanceStateFault $fault;
  public ?InstanceId $instance_id;
  public ?InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $launch_group;
  public ?LaunchSpecification $launch_specification;
  public string $launched_availability_zone;
  public ?RIProductDescription $product_description;
  public string $spot_instance_request_id;
  public string $spot_price;
  public ?SpotInstanceState $state;
  public ?SpotInstanceStatus $status;
  public ?TagList $tags;
  public ?SpotInstanceType $type;
  public ?DateTime $valid_from;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'actual_block_hourly_price' => string,
    ?'availability_zone_group' => string,
    ?'block_duration_minutes' => int,
    ?'create_time' => ?DateTime,
    ?'fault' => ?SpotInstanceStateFault,
    ?'instance_id' => ?InstanceId,
    ?'instance_interruption_behavior' => ?InstanceInterruptionBehavior,
    ?'launch_group' => string,
    ?'launch_specification' => ?LaunchSpecification,
    ?'launched_availability_zone' => string,
    ?'product_description' => ?RIProductDescription,
    ?'spot_instance_request_id' => string,
    ?'spot_price' => string,
    ?'state' => ?SpotInstanceState,
    ?'status' => ?SpotInstanceStatus,
    ?'tags' => ?TagList,
    ?'type' => ?SpotInstanceType,
    ?'valid_from' => ?DateTime,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->actual_block_hourly_price = $s['actual_block_hourly_price'] ?? '';
    $this->availability_zone_group = $s['availability_zone_group'] ?? '';
    $this->block_duration_minutes = $s['block_duration_minutes'] ?? 0;
    $this->create_time = $s['create_time'] ?? 0;
    $this->fault = $s['fault'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->launch_group = $s['launch_group'] ?? '';
    $this->launch_specification = $s['launch_specification'] ?? null;
    $this->launched_availability_zone = $s['launched_availability_zone'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->spot_instance_request_id = $s['spot_instance_request_id'] ?? '';
    $this->spot_price = $s['spot_price'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->status = $s['status'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->type = $s['type'] ?? '';
    $this->valid_from = $s['valid_from'] ?? 0;
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

type SpotInstanceRequestId = string;

type SpotInstanceRequestIdList = vec<SpotInstanceRequestId>;

type SpotInstanceRequestList = vec<SpotInstanceRequest>;

type SpotInstanceState = string;

class SpotInstanceStateFault {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

class SpotInstanceStatus {
  public string $code;
  public string $message;
  public ?DateTime $update_time;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
    ?'update_time' => ?DateTime,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->update_time = $s['update_time'] ?? 0;
  }
}

type SpotInstanceType = string;

class SpotMarketOptions {
  public int $block_duration_minutes;
  public ?InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $max_price;
  public ?SpotInstanceType $spot_instance_type;
  public ?DateTime $valid_until;

  public function __construct(shape(
    ?'block_duration_minutes' => int,
    ?'instance_interruption_behavior' => ?InstanceInterruptionBehavior,
    ?'max_price' => string,
    ?'spot_instance_type' => ?SpotInstanceType,
    ?'valid_until' => ?DateTime,
  ) $s = shape()) {
    $this->block_duration_minutes = $s['block_duration_minutes'] ?? 0;
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->max_price = $s['max_price'] ?? '';
    $this->spot_instance_type = $s['spot_instance_type'] ?? '';
    $this->valid_until = $s['valid_until'] ?? 0;
  }
}

class SpotOptions {
  public ?SpotAllocationStrategy $allocation_strategy;
  public ?SpotInstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public string $max_total_price;
  public int $min_target_capacity;
  public bool $single_availability_zone;
  public bool $single_instance_type;

  public function __construct(shape(
    ?'allocation_strategy' => ?SpotAllocationStrategy,
    ?'instance_interruption_behavior' => ?SpotInstanceInterruptionBehavior,
    ?'instance_pools_to_use_count' => int,
    ?'max_total_price' => string,
    ?'min_target_capacity' => int,
    ?'single_availability_zone' => bool,
    ?'single_instance_type' => bool,
  ) $s = shape()) {
    $this->allocation_strategy = $s['allocation_strategy'] ?? '';
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->instance_pools_to_use_count = $s['instance_pools_to_use_count'] ?? 0;
    $this->max_total_price = $s['max_total_price'] ?? '';
    $this->min_target_capacity = $s['min_target_capacity'] ?? 0;
    $this->single_availability_zone = $s['single_availability_zone'] ?? false;
    $this->single_instance_type = $s['single_instance_type'] ?? false;
  }
}

class SpotOptionsRequest {
  public ?SpotAllocationStrategy $allocation_strategy;
  public ?SpotInstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public string $max_total_price;
  public int $min_target_capacity;
  public bool $single_availability_zone;
  public bool $single_instance_type;

  public function __construct(shape(
    ?'allocation_strategy' => ?SpotAllocationStrategy,
    ?'instance_interruption_behavior' => ?SpotInstanceInterruptionBehavior,
    ?'instance_pools_to_use_count' => int,
    ?'max_total_price' => string,
    ?'min_target_capacity' => int,
    ?'single_availability_zone' => bool,
    ?'single_instance_type' => bool,
  ) $s = shape()) {
    $this->allocation_strategy = $s['allocation_strategy'] ?? '';
    $this->instance_interruption_behavior = $s['instance_interruption_behavior'] ?? '';
    $this->instance_pools_to_use_count = $s['instance_pools_to_use_count'] ?? 0;
    $this->max_total_price = $s['max_total_price'] ?? '';
    $this->min_target_capacity = $s['min_target_capacity'] ?? 0;
    $this->single_availability_zone = $s['single_availability_zone'] ?? false;
    $this->single_instance_type = $s['single_instance_type'] ?? false;
  }
}

class SpotPlacement {
  public string $availability_zone;
  public string $group_name;
  public ?Tenancy $tenancy;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'group_name' => string,
    ?'tenancy' => ?Tenancy,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->tenancy = $s['tenancy'] ?? '';
  }
}

class SpotPrice {
  public string $availability_zone;
  public ?InstanceType $instance_type;
  public ?RIProductDescription $product_description;
  public string $spot_price;
  public ?DateTime $timestamp;

  public function __construct(shape(
    ?'availability_zone' => string,
    ?'instance_type' => ?InstanceType,
    ?'product_description' => ?RIProductDescription,
    ?'spot_price' => string,
    ?'timestamp' => ?DateTime,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->product_description = $s['product_description'] ?? '';
    $this->spot_price = $s['spot_price'] ?? '';
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type SpotPriceHistoryList = vec<SpotPrice>;

class StaleIpPermission {
  public int $from_port;
  public string $ip_protocol;
  public ?IpRanges $ip_ranges;
  public ?PrefixListIdSet $prefix_list_ids;
  public int $to_port;
  public ?UserIdGroupPairSet $user_id_group_pairs;

  public function __construct(shape(
    ?'from_port' => int,
    ?'ip_protocol' => string,
    ?'ip_ranges' => ?IpRanges,
    ?'prefix_list_ids' => ?PrefixListIdSet,
    ?'to_port' => int,
    ?'user_id_group_pairs' => ?UserIdGroupPairSet,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->ip_protocol = $s['ip_protocol'] ?? '';
    $this->ip_ranges = $s['ip_ranges'] ?? vec[];
    $this->prefix_list_ids = $s['prefix_list_ids'] ?? vec[];
    $this->to_port = $s['to_port'] ?? 0;
    $this->user_id_group_pairs = $s['user_id_group_pairs'] ?? vec[];
  }
}

type StaleIpPermissionSet = vec<StaleIpPermission>;

class StaleSecurityGroup {
  public string $description;
  public string $group_id;
  public string $group_name;
  public ?StaleIpPermissionSet $stale_ip_permissions;
  public ?StaleIpPermissionSet $stale_ip_permissions_egress;
  public string $vpc_id;

  public function __construct(shape(
    ?'description' => string,
    ?'group_id' => string,
    ?'group_name' => string,
    ?'stale_ip_permissions' => ?StaleIpPermissionSet,
    ?'stale_ip_permissions_egress' => ?StaleIpPermissionSet,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->stale_ip_permissions = $s['stale_ip_permissions'] ?? vec[];
    $this->stale_ip_permissions_egress = $s['stale_ip_permissions_egress'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type StaleSecurityGroupSet = vec<StaleSecurityGroup>;

class StartInstancesRequest {
  public string $additional_info;
  public bool $dry_run;
  public ?InstanceIdStringList $instance_ids;

  public function __construct(shape(
    ?'additional_info' => string,
    ?'dry_run' => bool,
    ?'instance_ids' => ?InstanceIdStringList,
  ) $s = shape()) {
    $this->additional_info = $s['additional_info'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class StartInstancesResult {
  public ?InstanceStateChangeList $starting_instances;

  public function __construct(shape(
    ?'starting_instances' => ?InstanceStateChangeList,
  ) $s = shape()) {
    $this->starting_instances = $s['starting_instances'] ?? vec[];
  }
}

class StartVpcEndpointServicePrivateDnsVerificationRequest {
  public bool $dry_run;
  public ?VpcEndpointServiceId $service_id;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'service_id' => ?VpcEndpointServiceId,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->service_id = $s['service_id'] ?? '';
  }
}

class StartVpcEndpointServicePrivateDnsVerificationResult {
  public bool $return_value;

  public function __construct(shape(
    ?'return_value' => bool,
  ) $s = shape()) {
    $this->return_value = $s['return_value'] ?? false;
  }
}

type State = string;

class StateReason {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type Status = string;

type StatusName = string;

type StatusType = string;

class StopInstancesRequest {
  public bool $dry_run;
  public bool $force;
  public bool $hibernate;
  public ?InstanceIdStringList $instance_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'force' => bool,
    ?'hibernate' => bool,
    ?'instance_ids' => ?InstanceIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->force = $s['force'] ?? false;
    $this->hibernate = $s['hibernate'] ?? false;
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class StopInstancesResult {
  public ?InstanceStateChangeList $stopping_instances;

  public function __construct(shape(
    ?'stopping_instances' => ?InstanceStateChangeList,
  ) $s = shape()) {
    $this->stopping_instances = $s['stopping_instances'] ?? vec[];
  }
}

class Storage {
  public ?S3Storage $s_3;

  public function __construct(shape(
    ?'s_3' => ?S3Storage,
  ) $s = shape()) {
    $this->s_3 = $s['s_3'] ?? null;
  }
}

class StorageLocation {
  public string $bucket;
  public string $key;

  public function __construct(shape(
    ?'bucket' => string,
    ?'key' => string,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

type String = string;

class Subnet {
  public bool $assign_ipv_6_address_on_creation;
  public string $availability_zone;
  public string $availability_zone_id;
  public int $available_ip_address_count;
  public string $cidr_block;
  public bool $default_for_az;
  public ?SubnetIpv6CidrBlockAssociationSet $ipv_6_cidr_block_association_set;
  public bool $map_public_ip_on_launch;
  public string $outpost_arn;
  public string $owner_id;
  public ?SubnetState $state;
  public string $subnet_arn;
  public string $subnet_id;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'assign_ipv_6_address_on_creation' => bool,
    ?'availability_zone' => string,
    ?'availability_zone_id' => string,
    ?'available_ip_address_count' => int,
    ?'cidr_block' => string,
    ?'default_for_az' => bool,
    ?'ipv_6_cidr_block_association_set' => ?SubnetIpv6CidrBlockAssociationSet,
    ?'map_public_ip_on_launch' => bool,
    ?'outpost_arn' => string,
    ?'owner_id' => string,
    ?'state' => ?SubnetState,
    ?'subnet_arn' => string,
    ?'subnet_id' => string,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->assign_ipv_6_address_on_creation = $s['assign_ipv_6_address_on_creation'] ?? false;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->availability_zone_id = $s['availability_zone_id'] ?? '';
    $this->available_ip_address_count = $s['available_ip_address_count'] ?? 0;
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->default_for_az = $s['default_for_az'] ?? false;
    $this->ipv_6_cidr_block_association_set = $s['ipv_6_cidr_block_association_set'] ?? vec[];
    $this->map_public_ip_on_launch = $s['map_public_ip_on_launch'] ?? false;
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->subnet_arn = $s['subnet_arn'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class SubnetAssociation {
  public ?TransitGatewayMulitcastDomainAssociationState $state;
  public string $subnet_id;

  public function __construct(shape(
    ?'state' => ?TransitGatewayMulitcastDomainAssociationState,
    ?'subnet_id' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
  }
}

type SubnetAssociationList = vec<SubnetAssociation>;

type SubnetCidrAssociationId = string;

class SubnetCidrBlockState {
  public ?SubnetCidrBlockStateCode $state;
  public string $status_message;

  public function __construct(shape(
    ?'state' => ?SubnetCidrBlockStateCode,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type SubnetCidrBlockStateCode = string;

type SubnetId = string;

type SubnetIdStringList = vec<SubnetId>;

class SubnetIpv6CidrBlockAssociation {
  public string $association_id;
  public string $ipv_6_cidr_block;
  public ?SubnetCidrBlockState $ipv_6_cidr_block_state;

  public function __construct(shape(
    ?'association_id' => string,
    ?'ipv_6_cidr_block' => string,
    ?'ipv_6_cidr_block_state' => ?SubnetCidrBlockState,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->ipv_6_cidr_block_state = $s['ipv_6_cidr_block_state'] ?? null;
  }
}

type SubnetIpv6CidrBlockAssociationSet = vec<SubnetIpv6CidrBlockAssociation>;

type SubnetList = vec<Subnet>;

type SubnetState = string;

class SuccessfulInstanceCreditSpecificationItem {
  public string $instance_id;

  public function __construct(shape(
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

type SuccessfulInstanceCreditSpecificationSet = vec<SuccessfulInstanceCreditSpecificationItem>;

class SuccessfulQueuedPurchaseDeletion {
  public string $reserved_instances_id;

  public function __construct(shape(
    ?'reserved_instances_id' => string,
  ) $s = shape()) {
    $this->reserved_instances_id = $s['reserved_instances_id'] ?? '';
  }
}

type SuccessfulQueuedPurchaseDeletionSet = vec<SuccessfulQueuedPurchaseDeletion>;

type SummaryStatus = string;

class Tag {
  public string $key;
  public string $value;

  public function __construct(shape(
    ?'key' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class TagDescription {
  public string $key;
  public string $resource_id;
  public ?ResourceType $resource_type;
  public string $value;

  public function __construct(shape(
    ?'key' => string,
    ?'resource_id' => string,
    ?'resource_type' => ?ResourceType,
    ?'value' => string,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagDescriptionList = vec<TagDescription>;

type TagList = vec<Tag>;

class TagSpecification {
  public ?ResourceType $resource_type;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_type' => ?ResourceType,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_type = $s['resource_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type TagSpecificationList = vec<TagSpecification>;

type TaggableResourceId = string;

class TargetCapacitySpecification {
  public ?DefaultTargetCapacityType $default_target_capacity_type;
  public int $on_demand_target_capacity;
  public int $spot_target_capacity;
  public int $total_target_capacity;

  public function __construct(shape(
    ?'default_target_capacity_type' => ?DefaultTargetCapacityType,
    ?'on_demand_target_capacity' => int,
    ?'spot_target_capacity' => int,
    ?'total_target_capacity' => int,
  ) $s = shape()) {
    $this->default_target_capacity_type = $s['default_target_capacity_type'] ?? '';
    $this->on_demand_target_capacity = $s['on_demand_target_capacity'] ?? 0;
    $this->spot_target_capacity = $s['spot_target_capacity'] ?? 0;
    $this->total_target_capacity = $s['total_target_capacity'] ?? 0;
  }
}

class TargetCapacitySpecificationRequest {
  public ?DefaultTargetCapacityType $default_target_capacity_type;
  public int $on_demand_target_capacity;
  public int $spot_target_capacity;
  public int $total_target_capacity;

  public function __construct(shape(
    ?'default_target_capacity_type' => ?DefaultTargetCapacityType,
    ?'on_demand_target_capacity' => int,
    ?'spot_target_capacity' => int,
    ?'total_target_capacity' => int,
  ) $s = shape()) {
    $this->default_target_capacity_type = $s['default_target_capacity_type'] ?? '';
    $this->on_demand_target_capacity = $s['on_demand_target_capacity'] ?? 0;
    $this->spot_target_capacity = $s['spot_target_capacity'] ?? 0;
    $this->total_target_capacity = $s['total_target_capacity'] ?? 0;
  }
}

class TargetConfiguration {
  public int $instance_count;
  public string $offering_id;

  public function __construct(shape(
    ?'instance_count' => int,
    ?'offering_id' => string,
  ) $s = shape()) {
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->offering_id = $s['offering_id'] ?? '';
  }
}

class TargetConfigurationRequest {
  public int $instance_count;
  public ?ReservedInstancesOfferingId $offering_id;

  public function __construct(shape(
    ?'instance_count' => int,
    ?'offering_id' => ?ReservedInstancesOfferingId,
  ) $s = shape()) {
    $this->instance_count = $s['instance_count'] ?? 0;
    $this->offering_id = $s['offering_id'] ?? '';
  }
}

type TargetConfigurationRequestSet = vec<TargetConfigurationRequest>;

class TargetGroup {
  public string $arn;

  public function __construct(shape(
    ?'arn' => string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
  }
}

type TargetGroups = vec<TargetGroup>;

class TargetGroupsConfig {
  public ?TargetGroups $target_groups;

  public function __construct(shape(
    ?'target_groups' => ?TargetGroups,
  ) $s = shape()) {
    $this->target_groups = $s['target_groups'] ?? vec[];
  }
}

class TargetNetwork {
  public string $association_id;
  public string $client_vpn_endpoint_id;
  public ?ValueStringList $security_groups;
  public ?AssociationStatus $status;
  public string $target_network_id;
  public string $vpc_id;

  public function __construct(shape(
    ?'association_id' => string,
    ?'client_vpn_endpoint_id' => string,
    ?'security_groups' => ?ValueStringList,
    ?'status' => ?AssociationStatus,
    ?'target_network_id' => string,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->security_groups = $s['security_groups'] ?? vec[];
    $this->status = $s['status'] ?? null;
    $this->target_network_id = $s['target_network_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type TargetNetworkSet = vec<TargetNetwork>;

class TargetReservationValue {
  public ?ReservationValue $reservation_value;
  public ?TargetConfiguration $target_configuration;

  public function __construct(shape(
    ?'reservation_value' => ?ReservationValue,
    ?'target_configuration' => ?TargetConfiguration,
  ) $s = shape()) {
    $this->reservation_value = $s['reservation_value'] ?? null;
    $this->target_configuration = $s['target_configuration'] ?? null;
  }
}

type TargetReservationValueSet = vec<TargetReservationValue>;

type TelemetryStatus = string;

type Tenancy = string;

class TerminateClientVpnConnectionsRequest {
  public ?ClientVpnEndpointId $client_vpn_endpoint_id;
  public ?VpnConnectionId $connection_id;
  public bool $dry_run;
  public string $username;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => ?ClientVpnEndpointId,
    ?'connection_id' => ?VpnConnectionId,
    ?'dry_run' => bool,
    ?'username' => string,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->connection_id = $s['connection_id'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
    $this->username = $s['username'] ?? '';
  }
}

class TerminateClientVpnConnectionsResult {
  public string $client_vpn_endpoint_id;
  public ?TerminateConnectionStatusSet $connection_statuses;
  public string $username;

  public function __construct(shape(
    ?'client_vpn_endpoint_id' => string,
    ?'connection_statuses' => ?TerminateConnectionStatusSet,
    ?'username' => string,
  ) $s = shape()) {
    $this->client_vpn_endpoint_id = $s['client_vpn_endpoint_id'] ?? '';
    $this->connection_statuses = $s['connection_statuses'] ?? vec[];
    $this->username = $s['username'] ?? '';
  }
}

class TerminateConnectionStatus {
  public string $connection_id;
  public ?ClientVpnConnectionStatus $current_status;
  public ?ClientVpnConnectionStatus $previous_status;

  public function __construct(shape(
    ?'connection_id' => string,
    ?'current_status' => ?ClientVpnConnectionStatus,
    ?'previous_status' => ?ClientVpnConnectionStatus,
  ) $s = shape()) {
    $this->connection_id = $s['connection_id'] ?? '';
    $this->current_status = $s['current_status'] ?? null;
    $this->previous_status = $s['previous_status'] ?? null;
  }
}

type TerminateConnectionStatusSet = vec<TerminateConnectionStatus>;

class TerminateInstancesRequest {
  public bool $dry_run;
  public ?InstanceIdStringList $instance_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_ids' => ?InstanceIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class TerminateInstancesResult {
  public ?InstanceStateChangeList $terminating_instances;

  public function __construct(shape(
    ?'terminating_instances' => ?InstanceStateChangeList,
  ) $s = shape()) {
    $this->terminating_instances = $s['terminating_instances'] ?? vec[];
  }
}

type ThreadsPerCore = int;

type ThreadsPerCoreList = vec<ThreadsPerCore>;

type TrafficDirection = string;

class TrafficMirrorFilter {
  public string $description;
  public ?TrafficMirrorFilterRuleList $egress_filter_rules;
  public ?TrafficMirrorFilterRuleList $ingress_filter_rules;
  public ?TrafficMirrorNetworkServiceList $network_services;
  public ?TagList $tags;
  public string $traffic_mirror_filter_id;

  public function __construct(shape(
    ?'description' => string,
    ?'egress_filter_rules' => ?TrafficMirrorFilterRuleList,
    ?'ingress_filter_rules' => ?TrafficMirrorFilterRuleList,
    ?'network_services' => ?TrafficMirrorNetworkServiceList,
    ?'tags' => ?TagList,
    ?'traffic_mirror_filter_id' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->egress_filter_rules = $s['egress_filter_rules'] ?? vec[];
    $this->ingress_filter_rules = $s['ingress_filter_rules'] ?? vec[];
    $this->network_services = $s['network_services'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
  }
}

type TrafficMirrorFilterId = string;

type TrafficMirrorFilterIdList = vec<TrafficMirrorFilterId>;

class TrafficMirrorFilterRule {
  public string $description;
  public string $destination_cidr_block;
  public ?TrafficMirrorPortRange $destination_port_range;
  public int $protocol;
  public ?TrafficMirrorRuleAction $rule_action;
  public int $rule_number;
  public string $source_cidr_block;
  public ?TrafficMirrorPortRange $source_port_range;
  public ?TrafficDirection $traffic_direction;
  public string $traffic_mirror_filter_id;
  public string $traffic_mirror_filter_rule_id;

  public function __construct(shape(
    ?'description' => string,
    ?'destination_cidr_block' => string,
    ?'destination_port_range' => ?TrafficMirrorPortRange,
    ?'protocol' => int,
    ?'rule_action' => ?TrafficMirrorRuleAction,
    ?'rule_number' => int,
    ?'source_cidr_block' => string,
    ?'source_port_range' => ?TrafficMirrorPortRange,
    ?'traffic_direction' => ?TrafficDirection,
    ?'traffic_mirror_filter_id' => string,
    ?'traffic_mirror_filter_rule_id' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->destination_port_range = $s['destination_port_range'] ?? null;
    $this->protocol = $s['protocol'] ?? 0;
    $this->rule_action = $s['rule_action'] ?? '';
    $this->rule_number = $s['rule_number'] ?? 0;
    $this->source_cidr_block = $s['source_cidr_block'] ?? '';
    $this->source_port_range = $s['source_port_range'] ?? null;
    $this->traffic_direction = $s['traffic_direction'] ?? '';
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
    $this->traffic_mirror_filter_rule_id = $s['traffic_mirror_filter_rule_id'] ?? '';
  }
}

type TrafficMirrorFilterRuleField = string;

type TrafficMirrorFilterRuleFieldList = vec<TrafficMirrorFilterRuleField>;

type TrafficMirrorFilterRuleId = string;

type TrafficMirrorFilterRuleList = vec<TrafficMirrorFilterRule>;

type TrafficMirrorFilterSet = vec<TrafficMirrorFilter>;

type TrafficMirrorNetworkService = string;

type TrafficMirrorNetworkServiceList = vec<TrafficMirrorNetworkService>;

class TrafficMirrorPortRange {
  public int $from_port;
  public int $to_port;

  public function __construct(shape(
    ?'from_port' => int,
    ?'to_port' => int,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->to_port = $s['to_port'] ?? 0;
  }
}

class TrafficMirrorPortRangeRequest {
  public int $from_port;
  public int $to_port;

  public function __construct(shape(
    ?'from_port' => int,
    ?'to_port' => int,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->to_port = $s['to_port'] ?? 0;
  }
}

type TrafficMirrorRuleAction = string;

class TrafficMirrorSession {
  public string $description;
  public string $network_interface_id;
  public string $owner_id;
  public int $packet_length;
  public int $session_number;
  public ?TagList $tags;
  public string $traffic_mirror_filter_id;
  public string $traffic_mirror_session_id;
  public string $traffic_mirror_target_id;
  public int $virtual_network_id;

  public function __construct(shape(
    ?'description' => string,
    ?'network_interface_id' => string,
    ?'owner_id' => string,
    ?'packet_length' => int,
    ?'session_number' => int,
    ?'tags' => ?TagList,
    ?'traffic_mirror_filter_id' => string,
    ?'traffic_mirror_session_id' => string,
    ?'traffic_mirror_target_id' => string,
    ?'virtual_network_id' => int,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->packet_length = $s['packet_length'] ?? 0;
    $this->session_number = $s['session_number'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
    $this->traffic_mirror_filter_id = $s['traffic_mirror_filter_id'] ?? '';
    $this->traffic_mirror_session_id = $s['traffic_mirror_session_id'] ?? '';
    $this->traffic_mirror_target_id = $s['traffic_mirror_target_id'] ?? '';
    $this->virtual_network_id = $s['virtual_network_id'] ?? 0;
  }
}

type TrafficMirrorSessionField = string;

type TrafficMirrorSessionFieldList = vec<TrafficMirrorSessionField>;

type TrafficMirrorSessionId = string;

type TrafficMirrorSessionIdList = vec<TrafficMirrorSessionId>;

type TrafficMirrorSessionSet = vec<TrafficMirrorSession>;

class TrafficMirrorTarget {
  public string $description;
  public string $network_interface_id;
  public string $network_load_balancer_arn;
  public string $owner_id;
  public ?TagList $tags;
  public string $traffic_mirror_target_id;
  public ?TrafficMirrorTargetType $type;

  public function __construct(shape(
    ?'description' => string,
    ?'network_interface_id' => string,
    ?'network_load_balancer_arn' => string,
    ?'owner_id' => string,
    ?'tags' => ?TagList,
    ?'traffic_mirror_target_id' => string,
    ?'type' => ?TrafficMirrorTargetType,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->network_load_balancer_arn = $s['network_load_balancer_arn'] ?? '';
    $this->owner_id = $s['owner_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->traffic_mirror_target_id = $s['traffic_mirror_target_id'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type TrafficMirrorTargetId = string;

type TrafficMirrorTargetIdList = vec<TrafficMirrorTargetId>;

type TrafficMirrorTargetSet = vec<TrafficMirrorTarget>;

type TrafficMirrorTargetType = string;

type TrafficMirroringMaxResults = int;

type TrafficType = string;

type TransitAssociationGatewayId = string;

class TransitGateway {
  public ?DateTime $creation_time;
  public string $description;
  public ?TransitGatewayOptions $options;
  public string $owner_id;
  public ?TransitGatewayState $state;
  public ?TagList $tags;
  public string $transit_gateway_arn;
  public string $transit_gateway_id;

  public function __construct(shape(
    ?'creation_time' => ?DateTime,
    ?'description' => string,
    ?'options' => ?TransitGatewayOptions,
    ?'owner_id' => string,
    ?'state' => ?TransitGatewayState,
    ?'tags' => ?TagList,
    ?'transit_gateway_arn' => string,
    ?'transit_gateway_id' => string,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->options = $s['options'] ?? null;
    $this->owner_id = $s['owner_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->transit_gateway_arn = $s['transit_gateway_arn'] ?? '';
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
  }
}

class TransitGatewayAssociation {
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?TransitGatewayAssociationState $state;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ?TransitGatewayRouteTableId $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'state' => ?TransitGatewayAssociationState,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => ?TransitGatewayRouteTableId,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

type TransitGatewayAssociationState = string;

class TransitGatewayAttachment {
  public ?TransitGatewayAttachmentAssociation $association;
  public ?DateTime $creation_time;
  public string $resource_id;
  public string $resource_owner_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?TransitGatewayAttachmentState $state;
  public ?TagList $tags;
  public string $transit_gateway_attachment_id;
  public string $transit_gateway_id;
  public string $transit_gateway_owner_id;

  public function __construct(shape(
    ?'association' => ?TransitGatewayAttachmentAssociation,
    ?'creation_time' => ?DateTime,
    ?'resource_id' => string,
    ?'resource_owner_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'state' => ?TransitGatewayAttachmentState,
    ?'tags' => ?TagList,
    ?'transit_gateway_attachment_id' => string,
    ?'transit_gateway_id' => string,
    ?'transit_gateway_owner_id' => string,
  ) $s = shape()) {
    $this->association = $s['association'] ?? null;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_owner_id = $s['resource_owner_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->transit_gateway_owner_id = $s['transit_gateway_owner_id'] ?? '';
  }
}

class TransitGatewayAttachmentAssociation {
  public ?TransitGatewayAssociationState $state;
  public string $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'state' => ?TransitGatewayAssociationState,
    ?'transit_gateway_route_table_id' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

type TransitGatewayAttachmentId = string;

type TransitGatewayAttachmentIdStringList = vec<TransitGatewayAttachmentId>;

type TransitGatewayAttachmentList = vec<TransitGatewayAttachment>;

class TransitGatewayAttachmentPropagation {
  public ?TransitGatewayPropagationState $state;
  public string $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'state' => ?TransitGatewayPropagationState,
    ?'transit_gateway_route_table_id' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

type TransitGatewayAttachmentPropagationList = vec<TransitGatewayAttachmentPropagation>;

type TransitGatewayAttachmentResourceType = string;

type TransitGatewayAttachmentState = string;

type TransitGatewayId = string;

type TransitGatewayIdStringList = vec<TransitGatewayId>;

type TransitGatewayList = vec<TransitGateway>;

type TransitGatewayMaxResults = int;

type TransitGatewayMulitcastDomainAssociationState = string;

class TransitGatewayMulticastDeregisteredGroupMembers {
  public ?ValueStringList $deregistered_network_interface_ids;
  public string $group_ip_address;
  public string $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'deregistered_network_interface_ids' => ?ValueStringList,
    ?'group_ip_address' => string,
    ?'transit_gateway_multicast_domain_id' => string,
  ) $s = shape()) {
    $this->deregistered_network_interface_ids = $s['deregistered_network_interface_ids'] ?? vec[];
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class TransitGatewayMulticastDeregisteredGroupSources {
  public ?ValueStringList $deregistered_network_interface_ids;
  public string $group_ip_address;
  public string $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'deregistered_network_interface_ids' => ?ValueStringList,
    ?'group_ip_address' => string,
    ?'transit_gateway_multicast_domain_id' => string,
  ) $s = shape()) {
    $this->deregistered_network_interface_ids = $s['deregistered_network_interface_ids'] ?? vec[];
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class TransitGatewayMulticastDomain {
  public ?DateTime $creation_time;
  public ?TransitGatewayMulticastDomainState $state;
  public ?TagList $tags;
  public string $transit_gateway_id;
  public string $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'creation_time' => ?DateTime,
    ?'state' => ?TransitGatewayMulticastDomainState,
    ?'tags' => ?TagList,
    ?'transit_gateway_id' => string,
    ?'transit_gateway_multicast_domain_id' => string,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class TransitGatewayMulticastDomainAssociation {
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?SubnetAssociation $subnet;
  public string $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'subnet' => ?SubnetAssociation,
    ?'transit_gateway_attachment_id' => string,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->subnet = $s['subnet'] ?? null;
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

type TransitGatewayMulticastDomainAssociationList = vec<TransitGatewayMulticastDomainAssociation>;

class TransitGatewayMulticastDomainAssociations {
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?SubnetAssociationList $subnets;
  public string $transit_gateway_attachment_id;
  public string $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'subnets' => ?SubnetAssociationList,
    ?'transit_gateway_attachment_id' => string,
    ?'transit_gateway_multicast_domain_id' => string,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->subnets = $s['subnets'] ?? vec[];
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

type TransitGatewayMulticastDomainId = string;

type TransitGatewayMulticastDomainIdStringList = vec<TransitGatewayMulticastDomainId>;

type TransitGatewayMulticastDomainList = vec<TransitGatewayMulticastDomain>;

type TransitGatewayMulticastDomainState = string;

class TransitGatewayMulticastGroup {
  public string $group_ip_address;
  public bool $group_member;
  public bool $group_source;
  public ?MembershipType $member_type;
  public string $network_interface_id;
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?MembershipType $source_type;
  public string $subnet_id;
  public string $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'group_ip_address' => string,
    ?'group_member' => bool,
    ?'group_source' => bool,
    ?'member_type' => ?MembershipType,
    ?'network_interface_id' => string,
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'source_type' => ?MembershipType,
    ?'subnet_id' => string,
    ?'transit_gateway_attachment_id' => string,
  ) $s = shape()) {
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->group_member = $s['group_member'] ?? false;
    $this->group_source = $s['group_source'] ?? false;
    $this->member_type = $s['member_type'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->source_type = $s['source_type'] ?? '';
    $this->subnet_id = $s['subnet_id'] ?? '';
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

type TransitGatewayMulticastGroupList = vec<TransitGatewayMulticastGroup>;

class TransitGatewayMulticastRegisteredGroupMembers {
  public string $group_ip_address;
  public ?ValueStringList $registered_network_interface_ids;
  public string $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'group_ip_address' => string,
    ?'registered_network_interface_ids' => ?ValueStringList,
    ?'transit_gateway_multicast_domain_id' => string,
  ) $s = shape()) {
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->registered_network_interface_ids = $s['registered_network_interface_ids'] ?? vec[];
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

class TransitGatewayMulticastRegisteredGroupSources {
  public string $group_ip_address;
  public ?ValueStringList $registered_network_interface_ids;
  public string $transit_gateway_multicast_domain_id;

  public function __construct(shape(
    ?'group_ip_address' => string,
    ?'registered_network_interface_ids' => ?ValueStringList,
    ?'transit_gateway_multicast_domain_id' => string,
  ) $s = shape()) {
    $this->group_ip_address = $s['group_ip_address'] ?? '';
    $this->registered_network_interface_ids = $s['registered_network_interface_ids'] ?? vec[];
    $this->transit_gateway_multicast_domain_id = $s['transit_gateway_multicast_domain_id'] ?? '';
  }
}

type TransitGatewayNetworkInterfaceIdList = vec<NetworkInterfaceId>;

class TransitGatewayOptions {
  public ?Long $amazon_side_asn;
  public string $association_default_route_table_id;
  public ?AutoAcceptSharedAttachmentsValue $auto_accept_shared_attachments;
  public ?DefaultRouteTableAssociationValue $default_route_table_association;
  public ?DefaultRouteTablePropagationValue $default_route_table_propagation;
  public ?DnsSupportValue $dns_support;
  public ?MulticastSupportValue $multicast_support;
  public string $propagation_default_route_table_id;
  public ?VpnEcmpSupportValue $vpn_ecmp_support;

  public function __construct(shape(
    ?'amazon_side_asn' => ?Long,
    ?'association_default_route_table_id' => string,
    ?'auto_accept_shared_attachments' => ?AutoAcceptSharedAttachmentsValue,
    ?'default_route_table_association' => ?DefaultRouteTableAssociationValue,
    ?'default_route_table_propagation' => ?DefaultRouteTablePropagationValue,
    ?'dns_support' => ?DnsSupportValue,
    ?'multicast_support' => ?MulticastSupportValue,
    ?'propagation_default_route_table_id' => string,
    ?'vpn_ecmp_support' => ?VpnEcmpSupportValue,
  ) $s = shape()) {
    $this->amazon_side_asn = $s['amazon_side_asn'] ?? 0;
    $this->association_default_route_table_id = $s['association_default_route_table_id'] ?? '';
    $this->auto_accept_shared_attachments = $s['auto_accept_shared_attachments'] ?? '';
    $this->default_route_table_association = $s['default_route_table_association'] ?? '';
    $this->default_route_table_propagation = $s['default_route_table_propagation'] ?? '';
    $this->dns_support = $s['dns_support'] ?? '';
    $this->multicast_support = $s['multicast_support'] ?? '';
    $this->propagation_default_route_table_id = $s['propagation_default_route_table_id'] ?? '';
    $this->vpn_ecmp_support = $s['vpn_ecmp_support'] ?? '';
  }
}

class TransitGatewayPeeringAttachment {
  public ?PeeringTgwInfo $accepter_tgw_info;
  public ?DateTime $creation_time;
  public ?PeeringTgwInfo $requester_tgw_info;
  public ?TransitGatewayAttachmentState $state;
  public ?PeeringAttachmentStatus $status;
  public ?TagList $tags;
  public string $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'accepter_tgw_info' => ?PeeringTgwInfo,
    ?'creation_time' => ?DateTime,
    ?'requester_tgw_info' => ?PeeringTgwInfo,
    ?'state' => ?TransitGatewayAttachmentState,
    ?'status' => ?PeeringAttachmentStatus,
    ?'tags' => ?TagList,
    ?'transit_gateway_attachment_id' => string,
  ) $s = shape()) {
    $this->accepter_tgw_info = $s['accepter_tgw_info'] ?? null;
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->requester_tgw_info = $s['requester_tgw_info'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->status = $s['status'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

type TransitGatewayPeeringAttachmentList = vec<TransitGatewayPeeringAttachment>;

class TransitGatewayPropagation {
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?TransitGatewayPropagationState $state;
  public ?TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public string $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'state' => ?TransitGatewayPropagationState,
    ?'transit_gateway_attachment_id' => ?TransitGatewayAttachmentId,
    ?'transit_gateway_route_table_id' => string,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

type TransitGatewayPropagationState = string;

class TransitGatewayRequestOptions {
  public ?Long $amazon_side_asn;
  public ?AutoAcceptSharedAttachmentsValue $auto_accept_shared_attachments;
  public ?DefaultRouteTableAssociationValue $default_route_table_association;
  public ?DefaultRouteTablePropagationValue $default_route_table_propagation;
  public ?DnsSupportValue $dns_support;
  public ?MulticastSupportValue $multicast_support;
  public ?VpnEcmpSupportValue $vpn_ecmp_support;

  public function __construct(shape(
    ?'amazon_side_asn' => ?Long,
    ?'auto_accept_shared_attachments' => ?AutoAcceptSharedAttachmentsValue,
    ?'default_route_table_association' => ?DefaultRouteTableAssociationValue,
    ?'default_route_table_propagation' => ?DefaultRouteTablePropagationValue,
    ?'dns_support' => ?DnsSupportValue,
    ?'multicast_support' => ?MulticastSupportValue,
    ?'vpn_ecmp_support' => ?VpnEcmpSupportValue,
  ) $s = shape()) {
    $this->amazon_side_asn = $s['amazon_side_asn'] ?? 0;
    $this->auto_accept_shared_attachments = $s['auto_accept_shared_attachments'] ?? '';
    $this->default_route_table_association = $s['default_route_table_association'] ?? '';
    $this->default_route_table_propagation = $s['default_route_table_propagation'] ?? '';
    $this->dns_support = $s['dns_support'] ?? '';
    $this->multicast_support = $s['multicast_support'] ?? '';
    $this->vpn_ecmp_support = $s['vpn_ecmp_support'] ?? '';
  }
}

class TransitGatewayRoute {
  public string $destination_cidr_block;
  public ?TransitGatewayRouteState $state;
  public ?TransitGatewayRouteAttachmentList $transit_gateway_attachments;
  public ?TransitGatewayRouteType $type;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'state' => ?TransitGatewayRouteState,
    ?'transit_gateway_attachments' => ?TransitGatewayRouteAttachmentList,
    ?'type' => ?TransitGatewayRouteType,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_attachments = $s['transit_gateway_attachments'] ?? vec[];
    $this->type = $s['type'] ?? '';
  }
}

class TransitGatewayRouteAttachment {
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public string $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'transit_gateway_attachment_id' => string,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

type TransitGatewayRouteAttachmentList = vec<TransitGatewayRouteAttachment>;

type TransitGatewayRouteList = vec<TransitGatewayRoute>;

type TransitGatewayRouteState = string;

class TransitGatewayRouteTable {
  public ?DateTime $creation_time;
  public bool $default_association_route_table;
  public bool $default_propagation_route_table;
  public ?TransitGatewayRouteTableState $state;
  public ?TagList $tags;
  public string $transit_gateway_id;
  public string $transit_gateway_route_table_id;

  public function __construct(shape(
    ?'creation_time' => ?DateTime,
    ?'default_association_route_table' => bool,
    ?'default_propagation_route_table' => bool,
    ?'state' => ?TransitGatewayRouteTableState,
    ?'tags' => ?TagList,
    ?'transit_gateway_id' => string,
    ?'transit_gateway_route_table_id' => string,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->default_association_route_table = $s['default_association_route_table'] ?? false;
    $this->default_propagation_route_table = $s['default_propagation_route_table'] ?? false;
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->transit_gateway_route_table_id = $s['transit_gateway_route_table_id'] ?? '';
  }
}

class TransitGatewayRouteTableAssociation {
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?TransitGatewayAssociationState $state;
  public string $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'state' => ?TransitGatewayAssociationState,
    ?'transit_gateway_attachment_id' => string,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

type TransitGatewayRouteTableAssociationList = vec<TransitGatewayRouteTableAssociation>;

type TransitGatewayRouteTableId = string;

type TransitGatewayRouteTableIdStringList = vec<TransitGatewayRouteTableId>;

type TransitGatewayRouteTableList = vec<TransitGatewayRouteTable>;

class TransitGatewayRouteTablePropagation {
  public string $resource_id;
  public ?TransitGatewayAttachmentResourceType $resource_type;
  public ?TransitGatewayPropagationState $state;
  public string $transit_gateway_attachment_id;

  public function __construct(shape(
    ?'resource_id' => string,
    ?'resource_type' => ?TransitGatewayAttachmentResourceType,
    ?'state' => ?TransitGatewayPropagationState,
    ?'transit_gateway_attachment_id' => string,
  ) $s = shape()) {
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
  }
}

type TransitGatewayRouteTablePropagationList = vec<TransitGatewayRouteTablePropagation>;

type TransitGatewayRouteTableState = string;

type TransitGatewayRouteType = string;

type TransitGatewayState = string;

type TransitGatewaySubnetIdList = vec<SubnetId>;

class TransitGatewayVpcAttachment {
  public ?DateTime $creation_time;
  public ?TransitGatewayVpcAttachmentOptions $options;
  public ?TransitGatewayAttachmentState $state;
  public ?ValueStringList $subnet_ids;
  public ?TagList $tags;
  public string $transit_gateway_attachment_id;
  public string $transit_gateway_id;
  public string $vpc_id;
  public string $vpc_owner_id;

  public function __construct(shape(
    ?'creation_time' => ?DateTime,
    ?'options' => ?TransitGatewayVpcAttachmentOptions,
    ?'state' => ?TransitGatewayAttachmentState,
    ?'subnet_ids' => ?ValueStringList,
    ?'tags' => ?TagList,
    ?'transit_gateway_attachment_id' => string,
    ?'transit_gateway_id' => string,
    ?'vpc_id' => string,
    ?'vpc_owner_id' => string,
  ) $s = shape()) {
    $this->creation_time = $s['creation_time'] ?? 0;
    $this->options = $s['options'] ?? null;
    $this->state = $s['state'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->transit_gateway_attachment_id = $s['transit_gateway_attachment_id'] ?? '';
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpc_owner_id = $s['vpc_owner_id'] ?? '';
  }
}

type TransitGatewayVpcAttachmentList = vec<TransitGatewayVpcAttachment>;

class TransitGatewayVpcAttachmentOptions {
  public ?DnsSupportValue $dns_support;
  public ?Ipv6SupportValue $ipv_6_support;

  public function __construct(shape(
    ?'dns_support' => ?DnsSupportValue,
    ?'ipv_6_support' => ?Ipv6SupportValue,
  ) $s = shape()) {
    $this->dns_support = $s['dns_support'] ?? '';
    $this->ipv_6_support = $s['ipv_6_support'] ?? '';
  }
}

type TransportProtocol = string;

class TunnelOption {
  public int $dpd_timeout_seconds;
  public ?IKEVersionsList $ike_versions;
  public string $outside_ip_address;
  public ?Phase1DHGroupNumbersList $phase_1_dh_group_numbers;
  public ?Phase1EncryptionAlgorithmsList $phase_1_encryption_algorithms;
  public ?Phase1IntegrityAlgorithmsList $phase_1_integrity_algorithms;
  public int $phase_1_lifetime_seconds;
  public ?Phase2DHGroupNumbersList $phase_2_dh_group_numbers;
  public ?Phase2EncryptionAlgorithmsList $phase_2_encryption_algorithms;
  public ?Phase2IntegrityAlgorithmsList $phase_2_integrity_algorithms;
  public int $phase_2_lifetime_seconds;
  public string $pre_shared_key;
  public int $rekey_fuzz_percentage;
  public int $rekey_margin_time_seconds;
  public int $replay_window_size;
  public string $tunnel_inside_cidr;

  public function __construct(shape(
    ?'dpd_timeout_seconds' => int,
    ?'ike_versions' => ?IKEVersionsList,
    ?'outside_ip_address' => string,
    ?'phase_1_dh_group_numbers' => ?Phase1DHGroupNumbersList,
    ?'phase_1_encryption_algorithms' => ?Phase1EncryptionAlgorithmsList,
    ?'phase_1_integrity_algorithms' => ?Phase1IntegrityAlgorithmsList,
    ?'phase_1_lifetime_seconds' => int,
    ?'phase_2_dh_group_numbers' => ?Phase2DHGroupNumbersList,
    ?'phase_2_encryption_algorithms' => ?Phase2EncryptionAlgorithmsList,
    ?'phase_2_integrity_algorithms' => ?Phase2IntegrityAlgorithmsList,
    ?'phase_2_lifetime_seconds' => int,
    ?'pre_shared_key' => string,
    ?'rekey_fuzz_percentage' => int,
    ?'rekey_margin_time_seconds' => int,
    ?'replay_window_size' => int,
    ?'tunnel_inside_cidr' => string,
  ) $s = shape()) {
    $this->dpd_timeout_seconds = $s['dpd_timeout_seconds'] ?? 0;
    $this->ike_versions = $s['ike_versions'] ?? vec[];
    $this->outside_ip_address = $s['outside_ip_address'] ?? '';
    $this->phase_1_dh_group_numbers = $s['phase_1_dh_group_numbers'] ?? vec[];
    $this->phase_1_encryption_algorithms = $s['phase_1_encryption_algorithms'] ?? vec[];
    $this->phase_1_integrity_algorithms = $s['phase_1_integrity_algorithms'] ?? vec[];
    $this->phase_1_lifetime_seconds = $s['phase_1_lifetime_seconds'] ?? 0;
    $this->phase_2_dh_group_numbers = $s['phase_2_dh_group_numbers'] ?? vec[];
    $this->phase_2_encryption_algorithms = $s['phase_2_encryption_algorithms'] ?? vec[];
    $this->phase_2_integrity_algorithms = $s['phase_2_integrity_algorithms'] ?? vec[];
    $this->phase_2_lifetime_seconds = $s['phase_2_lifetime_seconds'] ?? 0;
    $this->pre_shared_key = $s['pre_shared_key'] ?? '';
    $this->rekey_fuzz_percentage = $s['rekey_fuzz_percentage'] ?? 0;
    $this->rekey_margin_time_seconds = $s['rekey_margin_time_seconds'] ?? 0;
    $this->replay_window_size = $s['replay_window_size'] ?? 0;
    $this->tunnel_inside_cidr = $s['tunnel_inside_cidr'] ?? '';
  }
}

type TunnelOptionsList = vec<TunnelOption>;

class UnassignIpv6AddressesRequest {
  public ?Ipv6AddressList $ipv_6_addresses;
  public ?NetworkInterfaceId $network_interface_id;

  public function __construct(shape(
    ?'ipv_6_addresses' => ?Ipv6AddressList,
    ?'network_interface_id' => ?NetworkInterfaceId,
  ) $s = shape()) {
    $this->ipv_6_addresses = $s['ipv_6_addresses'] ?? vec[];
    $this->network_interface_id = $s['network_interface_id'] ?? '';
  }
}

class UnassignIpv6AddressesResult {
  public string $network_interface_id;
  public ?Ipv6AddressList $unassigned_ipv_6_addresses;

  public function __construct(shape(
    ?'network_interface_id' => string,
    ?'unassigned_ipv_6_addresses' => ?Ipv6AddressList,
  ) $s = shape()) {
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->unassigned_ipv_6_addresses = $s['unassigned_ipv_6_addresses'] ?? vec[];
  }
}

class UnassignPrivateIpAddressesRequest {
  public ?NetworkInterfaceId $network_interface_id;
  public ?PrivateIpAddressStringList $private_ip_addresses;

  public function __construct(shape(
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'private_ip_addresses' => ?PrivateIpAddressStringList,
  ) $s = shape()) {
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->private_ip_addresses = $s['private_ip_addresses'] ?? vec[];
  }
}

type UnlimitedSupportedInstanceFamily = string;

class UnmonitorInstancesRequest {
  public bool $dry_run;
  public ?InstanceIdStringList $instance_ids;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'instance_ids' => ?InstanceIdStringList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->instance_ids = $s['instance_ids'] ?? vec[];
  }
}

class UnmonitorInstancesResult {
  public ?InstanceMonitoringList $instance_monitorings;

  public function __construct(shape(
    ?'instance_monitorings' => ?InstanceMonitoringList,
  ) $s = shape()) {
    $this->instance_monitorings = $s['instance_monitorings'] ?? vec[];
  }
}

type UnsuccessfulInstanceCreditSpecificationErrorCode = string;

class UnsuccessfulInstanceCreditSpecificationItem {
  public ?UnsuccessfulInstanceCreditSpecificationItemError $error;
  public string $instance_id;

  public function __construct(shape(
    ?'error' => ?UnsuccessfulInstanceCreditSpecificationItemError,
    ?'instance_id' => string,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->instance_id = $s['instance_id'] ?? '';
  }
}

class UnsuccessfulInstanceCreditSpecificationItemError {
  public ?UnsuccessfulInstanceCreditSpecificationErrorCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?UnsuccessfulInstanceCreditSpecificationErrorCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type UnsuccessfulInstanceCreditSpecificationSet = vec<UnsuccessfulInstanceCreditSpecificationItem>;

class UnsuccessfulItem {
  public ?UnsuccessfulItemError $error;
  public string $resource_id;

  public function __construct(shape(
    ?'error' => ?UnsuccessfulItemError,
    ?'resource_id' => string,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->resource_id = $s['resource_id'] ?? '';
  }
}

class UnsuccessfulItemError {
  public string $code;
  public string $message;

  public function __construct(shape(
    ?'code' => string,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type UnsuccessfulItemList = vec<UnsuccessfulItem>;

type UnsuccessfulItemSet = vec<UnsuccessfulItem>;

class UpdateSecurityGroupRuleDescriptionsEgressRequest {
  public bool $dry_run;
  public ?SecurityGroupId $group_id;
  public ?SecurityGroupName $group_name;
  public ?IpPermissionList $ip_permissions;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_id' => ?SecurityGroupId,
    ?'group_name' => ?SecurityGroupName,
    ?'ip_permissions' => ?IpPermissionList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
  }
}

class UpdateSecurityGroupRuleDescriptionsEgressResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

class UpdateSecurityGroupRuleDescriptionsIngressRequest {
  public bool $dry_run;
  public ?SecurityGroupId $group_id;
  public ?SecurityGroupName $group_name;
  public ?IpPermissionList $ip_permissions;

  public function __construct(shape(
    ?'dry_run' => bool,
    ?'group_id' => ?SecurityGroupId,
    ?'group_name' => ?SecurityGroupName,
    ?'ip_permissions' => ?IpPermissionList,
  ) $s = shape()) {
    $this->dry_run = $s['dry_run'] ?? false;
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->ip_permissions = $s['ip_permissions'] ?? vec[];
  }
}

class UpdateSecurityGroupRuleDescriptionsIngressResult {
  public bool $return;

  public function __construct(shape(
    ?'return' => bool,
  ) $s = shape()) {
    $this->return = $s['return'] ?? false;
  }
}

type UsageClassType = string;

type UsageClassTypeList = vec<UsageClassType>;

class UserBucket {
  public string $s_3_bucket;
  public string $s_3_key;

  public function __construct(shape(
    ?'s_3_bucket' => string,
    ?'s_3_key' => string,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
  }
}

class UserBucketDetails {
  public string $s_3_bucket;
  public string $s_3_key;

  public function __construct(shape(
    ?'s_3_bucket' => string,
    ?'s_3_key' => string,
  ) $s = shape()) {
    $this->s_3_bucket = $s['s_3_bucket'] ?? '';
    $this->s_3_key = $s['s_3_key'] ?? '';
  }
}

class UserData {
  public string $data;

  public function __construct(shape(
    ?'data' => string,
  ) $s = shape()) {
    $this->data = $s['data'] ?? '';
  }
}

type UserGroupStringList = vec<String>;

class UserIdGroupPair {
  public string $description;
  public string $group_id;
  public string $group_name;
  public string $peering_status;
  public string $user_id;
  public string $vpc_id;
  public string $vpc_peering_connection_id;

  public function __construct(shape(
    ?'description' => string,
    ?'group_id' => string,
    ?'group_name' => string,
    ?'peering_status' => string,
    ?'user_id' => string,
    ?'vpc_id' => string,
    ?'vpc_peering_connection_id' => string,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->group_id = $s['group_id'] ?? '';
    $this->group_name = $s['group_name'] ?? '';
    $this->peering_status = $s['peering_status'] ?? '';
    $this->user_id = $s['user_id'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

type UserIdGroupPairList = vec<UserIdGroupPair>;

type UserIdGroupPairSet = vec<UserIdGroupPair>;

type UserIdStringList = vec<String>;

type VCpuCount = int;

class VCpuInfo {
  public ?CoreCount $default_cores;
  public ?ThreadsPerCore $default_threads_per_core;
  public ?VCpuCount $default_v_cpus;
  public ?CoreCountList $valid_cores;
  public ?ThreadsPerCoreList $valid_threads_per_core;

  public function __construct(shape(
    ?'default_cores' => ?CoreCount,
    ?'default_threads_per_core' => ?ThreadsPerCore,
    ?'default_v_cpus' => ?VCpuCount,
    ?'valid_cores' => ?CoreCountList,
    ?'valid_threads_per_core' => ?ThreadsPerCoreList,
  ) $s = shape()) {
    $this->default_cores = $s['default_cores'] ?? 0;
    $this->default_threads_per_core = $s['default_threads_per_core'] ?? 0;
    $this->default_v_cpus = $s['default_v_cpus'] ?? 0;
    $this->valid_cores = $s['valid_cores'] ?? vec[];
    $this->valid_threads_per_core = $s['valid_threads_per_core'] ?? vec[];
  }
}

type ValueStringList = vec<String>;

type VersionDescription = string;

type VersionStringList = vec<String>;

class VgwTelemetry {
  public int $accepted_route_count;
  public string $certificate_arn;
  public ?DateTime $last_status_change;
  public string $outside_ip_address;
  public ?TelemetryStatus $status;
  public string $status_message;

  public function __construct(shape(
    ?'accepted_route_count' => int,
    ?'certificate_arn' => string,
    ?'last_status_change' => ?DateTime,
    ?'outside_ip_address' => string,
    ?'status' => ?TelemetryStatus,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->accepted_route_count = $s['accepted_route_count'] ?? 0;
    $this->certificate_arn = $s['certificate_arn'] ?? '';
    $this->last_status_change = $s['last_status_change'] ?? 0;
    $this->outside_ip_address = $s['outside_ip_address'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type VgwTelemetryList = vec<VgwTelemetry>;

type VirtualizationType = string;

class Volume {
  public ?VolumeAttachmentList $attachments;
  public string $availability_zone;
  public ?DateTime $create_time;
  public bool $encrypted;
  public bool $fast_restored;
  public int $iops;
  public string $kms_key_id;
  public bool $multi_attach_enabled;
  public string $outpost_arn;
  public int $size;
  public string $snapshot_id;
  public ?VolumeState $state;
  public ?TagList $tags;
  public string $volume_id;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'attachments' => ?VolumeAttachmentList,
    ?'availability_zone' => string,
    ?'create_time' => ?DateTime,
    ?'encrypted' => bool,
    ?'fast_restored' => bool,
    ?'iops' => int,
    ?'kms_key_id' => string,
    ?'multi_attach_enabled' => bool,
    ?'outpost_arn' => string,
    ?'size' => int,
    ?'snapshot_id' => string,
    ?'state' => ?VolumeState,
    ?'tags' => ?TagList,
    ?'volume_id' => string,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->attachments = $s['attachments'] ?? vec[];
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->create_time = $s['create_time'] ?? 0;
    $this->encrypted = $s['encrypted'] ?? false;
    $this->fast_restored = $s['fast_restored'] ?? false;
    $this->iops = $s['iops'] ?? 0;
    $this->kms_key_id = $s['kms_key_id'] ?? '';
    $this->multi_attach_enabled = $s['multi_attach_enabled'] ?? false;
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->size = $s['size'] ?? 0;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

class VolumeAttachment {
  public ?DateTime $attach_time;
  public bool $delete_on_termination;
  public string $device;
  public string $instance_id;
  public ?VolumeAttachmentState $state;
  public string $volume_id;

  public function __construct(shape(
    ?'attach_time' => ?DateTime,
    ?'delete_on_termination' => bool,
    ?'device' => string,
    ?'instance_id' => string,
    ?'state' => ?VolumeAttachmentState,
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->attach_time = $s['attach_time'] ?? 0;
    $this->delete_on_termination = $s['delete_on_termination'] ?? false;
    $this->device = $s['device'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

type VolumeAttachmentList = vec<VolumeAttachment>;

type VolumeAttachmentState = string;

type VolumeAttributeName = string;

class VolumeDetail {
  public ?Long $size;

  public function __construct(shape(
    ?'size' => ?Long,
  ) $s = shape()) {
    $this->size = $s['size'] ?? 0;
  }
}

type VolumeId = string;

type VolumeIdStringList = vec<VolumeId>;

type VolumeList = vec<Volume>;

class VolumeModification {
  public ?DateTime $end_time;
  public ?VolumeModificationState $modification_state;
  public int $original_iops;
  public int $original_size;
  public ?VolumeType $original_volume_type;
  public ?Long $progress;
  public ?DateTime $start_time;
  public string $status_message;
  public int $target_iops;
  public int $target_size;
  public ?VolumeType $target_volume_type;
  public string $volume_id;

  public function __construct(shape(
    ?'end_time' => ?DateTime,
    ?'modification_state' => ?VolumeModificationState,
    ?'original_iops' => int,
    ?'original_size' => int,
    ?'original_volume_type' => ?VolumeType,
    ?'progress' => ?Long,
    ?'start_time' => ?DateTime,
    ?'status_message' => string,
    ?'target_iops' => int,
    ?'target_size' => int,
    ?'target_volume_type' => ?VolumeType,
    ?'volume_id' => string,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->modification_state = $s['modification_state'] ?? '';
    $this->original_iops = $s['original_iops'] ?? 0;
    $this->original_size = $s['original_size'] ?? 0;
    $this->original_volume_type = $s['original_volume_type'] ?? '';
    $this->progress = $s['progress'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
    $this->status_message = $s['status_message'] ?? '';
    $this->target_iops = $s['target_iops'] ?? 0;
    $this->target_size = $s['target_size'] ?? 0;
    $this->target_volume_type = $s['target_volume_type'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
  }
}

type VolumeModificationList = vec<VolumeModification>;

type VolumeModificationState = string;

type VolumeState = string;

class VolumeStatusAction {
  public string $code;
  public string $description;
  public string $event_id;
  public string $event_type;

  public function __construct(shape(
    ?'code' => string,
    ?'description' => string,
    ?'event_id' => string,
    ?'event_type' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->event_id = $s['event_id'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
  }
}

type VolumeStatusActionsList = vec<VolumeStatusAction>;

class VolumeStatusAttachmentStatus {
  public string $instance_id;
  public string $io_performance;

  public function __construct(shape(
    ?'instance_id' => string,
    ?'io_performance' => string,
  ) $s = shape()) {
    $this->instance_id = $s['instance_id'] ?? '';
    $this->io_performance = $s['io_performance'] ?? '';
  }
}

type VolumeStatusAttachmentStatusList = vec<VolumeStatusAttachmentStatus>;

class VolumeStatusDetails {
  public ?VolumeStatusName $name;
  public string $status;

  public function __construct(shape(
    ?'name' => ?VolumeStatusName,
    ?'status' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type VolumeStatusDetailsList = vec<VolumeStatusDetails>;

class VolumeStatusEvent {
  public string $description;
  public string $event_id;
  public string $event_type;
  public string $instance_id;
  public ?MillisecondDateTime $not_after;
  public ?MillisecondDateTime $not_before;

  public function __construct(shape(
    ?'description' => string,
    ?'event_id' => string,
    ?'event_type' => string,
    ?'instance_id' => string,
    ?'not_after' => ?MillisecondDateTime,
    ?'not_before' => ?MillisecondDateTime,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->event_id = $s['event_id'] ?? '';
    $this->event_type = $s['event_type'] ?? '';
    $this->instance_id = $s['instance_id'] ?? '';
    $this->not_after = $s['not_after'] ?? 0;
    $this->not_before = $s['not_before'] ?? 0;
  }
}

type VolumeStatusEventsList = vec<VolumeStatusEvent>;

class VolumeStatusInfo {
  public ?VolumeStatusDetailsList $details;
  public ?VolumeStatusInfoStatus $status;

  public function __construct(shape(
    ?'details' => ?VolumeStatusDetailsList,
    ?'status' => ?VolumeStatusInfoStatus,
  ) $s = shape()) {
    $this->details = $s['details'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

type VolumeStatusInfoStatus = string;

class VolumeStatusItem {
  public ?VolumeStatusActionsList $actions;
  public ?VolumeStatusAttachmentStatusList $attachment_statuses;
  public string $availability_zone;
  public ?VolumeStatusEventsList $events;
  public string $outpost_arn;
  public string $volume_id;
  public ?VolumeStatusInfo $volume_status;

  public function __construct(shape(
    ?'actions' => ?VolumeStatusActionsList,
    ?'attachment_statuses' => ?VolumeStatusAttachmentStatusList,
    ?'availability_zone' => string,
    ?'events' => ?VolumeStatusEventsList,
    ?'outpost_arn' => string,
    ?'volume_id' => string,
    ?'volume_status' => ?VolumeStatusInfo,
  ) $s = shape()) {
    $this->actions = $s['actions'] ?? vec[];
    $this->attachment_statuses = $s['attachment_statuses'] ?? vec[];
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->events = $s['events'] ?? vec[];
    $this->outpost_arn = $s['outpost_arn'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_status = $s['volume_status'] ?? null;
  }
}

type VolumeStatusList = vec<VolumeStatusItem>;

type VolumeStatusName = string;

type VolumeType = string;

class Vpc {
  public string $cidr_block;
  public ?VpcCidrBlockAssociationSet $cidr_block_association_set;
  public string $dhcp_options_id;
  public ?Tenancy $instance_tenancy;
  public ?VpcIpv6CidrBlockAssociationSet $ipv_6_cidr_block_association_set;
  public bool $is_default;
  public string $owner_id;
  public ?VpcState $state;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'cidr_block' => string,
    ?'cidr_block_association_set' => ?VpcCidrBlockAssociationSet,
    ?'dhcp_options_id' => string,
    ?'instance_tenancy' => ?Tenancy,
    ?'ipv_6_cidr_block_association_set' => ?VpcIpv6CidrBlockAssociationSet,
    ?'is_default' => bool,
    ?'owner_id' => string,
    ?'state' => ?VpcState,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->cidr_block_association_set = $s['cidr_block_association_set'] ?? vec[];
    $this->dhcp_options_id = $s['dhcp_options_id'] ?? '';
    $this->instance_tenancy = $s['instance_tenancy'] ?? '';
    $this->ipv_6_cidr_block_association_set = $s['ipv_6_cidr_block_association_set'] ?? vec[];
    $this->is_default = $s['is_default'] ?? false;
    $this->owner_id = $s['owner_id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class VpcAttachment {
  public ?AttachmentStatus $state;
  public string $vpc_id;

  public function __construct(shape(
    ?'state' => ?AttachmentStatus,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type VpcAttachmentList = vec<VpcAttachment>;

type VpcAttributeName = string;

type VpcCidrAssociationId = string;

class VpcCidrBlockAssociation {
  public string $association_id;
  public string $cidr_block;
  public ?VpcCidrBlockState $cidr_block_state;

  public function __construct(shape(
    ?'association_id' => string,
    ?'cidr_block' => string,
    ?'cidr_block_state' => ?VpcCidrBlockState,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->cidr_block_state = $s['cidr_block_state'] ?? null;
  }
}

type VpcCidrBlockAssociationSet = vec<VpcCidrBlockAssociation>;

class VpcCidrBlockState {
  public ?VpcCidrBlockStateCode $state;
  public string $status_message;

  public function __construct(shape(
    ?'state' => ?VpcCidrBlockStateCode,
    ?'status_message' => string,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->status_message = $s['status_message'] ?? '';
  }
}

type VpcCidrBlockStateCode = string;

class VpcClassicLink {
  public bool $classic_link_enabled;
  public ?TagList $tags;
  public string $vpc_id;

  public function __construct(shape(
    ?'classic_link_enabled' => bool,
    ?'tags' => ?TagList,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->classic_link_enabled = $s['classic_link_enabled'] ?? false;
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type VpcClassicLinkIdList = vec<VpcId>;

type VpcClassicLinkList = vec<VpcClassicLink>;

class VpcEndpoint {
  public ?MillisecondDateTime $creation_timestamp;
  public ?DnsEntrySet $dns_entries;
  public ?GroupIdentifierSet $groups;
  public ?LastError $last_error;
  public ?ValueStringList $network_interface_ids;
  public string $owner_id;
  public string $policy_document;
  public bool $private_dns_enabled;
  public bool $requester_managed;
  public ?ValueStringList $route_table_ids;
  public string $service_name;
  public ?State $state;
  public ?ValueStringList $subnet_ids;
  public ?TagList $tags;
  public string $vpc_endpoint_id;
  public ?VpcEndpointType $vpc_endpoint_type;
  public string $vpc_id;

  public function __construct(shape(
    ?'creation_timestamp' => ?MillisecondDateTime,
    ?'dns_entries' => ?DnsEntrySet,
    ?'groups' => ?GroupIdentifierSet,
    ?'last_error' => ?LastError,
    ?'network_interface_ids' => ?ValueStringList,
    ?'owner_id' => string,
    ?'policy_document' => string,
    ?'private_dns_enabled' => bool,
    ?'requester_managed' => bool,
    ?'route_table_ids' => ?ValueStringList,
    ?'service_name' => string,
    ?'state' => ?State,
    ?'subnet_ids' => ?ValueStringList,
    ?'tags' => ?TagList,
    ?'vpc_endpoint_id' => string,
    ?'vpc_endpoint_type' => ?VpcEndpointType,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->creation_timestamp = $s['creation_timestamp'] ?? 0;
    $this->dns_entries = $s['dns_entries'] ?? vec[];
    $this->groups = $s['groups'] ?? vec[];
    $this->last_error = $s['last_error'] ?? null;
    $this->network_interface_ids = $s['network_interface_ids'] ?? vec[];
    $this->owner_id = $s['owner_id'] ?? '';
    $this->policy_document = $s['policy_document'] ?? '';
    $this->private_dns_enabled = $s['private_dns_enabled'] ?? false;
    $this->requester_managed = $s['requester_managed'] ?? false;
    $this->route_table_ids = $s['route_table_ids'] ?? vec[];
    $this->service_name = $s['service_name'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->subnet_ids = $s['subnet_ids'] ?? vec[];
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_endpoint_id = $s['vpc_endpoint_id'] ?? '';
    $this->vpc_endpoint_type = $s['vpc_endpoint_type'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

class VpcEndpointConnection {
  public ?MillisecondDateTime $creation_timestamp;
  public ?DnsEntrySet $dns_entries;
  public ?ValueStringList $network_load_balancer_arns;
  public string $service_id;
  public string $vpc_endpoint_id;
  public string $vpc_endpoint_owner;
  public ?State $vpc_endpoint_state;

  public function __construct(shape(
    ?'creation_timestamp' => ?MillisecondDateTime,
    ?'dns_entries' => ?DnsEntrySet,
    ?'network_load_balancer_arns' => ?ValueStringList,
    ?'service_id' => string,
    ?'vpc_endpoint_id' => string,
    ?'vpc_endpoint_owner' => string,
    ?'vpc_endpoint_state' => ?State,
  ) $s = shape()) {
    $this->creation_timestamp = $s['creation_timestamp'] ?? 0;
    $this->dns_entries = $s['dns_entries'] ?? vec[];
    $this->network_load_balancer_arns = $s['network_load_balancer_arns'] ?? vec[];
    $this->service_id = $s['service_id'] ?? '';
    $this->vpc_endpoint_id = $s['vpc_endpoint_id'] ?? '';
    $this->vpc_endpoint_owner = $s['vpc_endpoint_owner'] ?? '';
    $this->vpc_endpoint_state = $s['vpc_endpoint_state'] ?? '';
  }
}

type VpcEndpointConnectionSet = vec<VpcEndpointConnection>;

type VpcEndpointId = string;

type VpcEndpointIdList = vec<VpcEndpointId>;

type VpcEndpointRouteTableIdList = vec<RouteTableId>;

type VpcEndpointSecurityGroupIdList = vec<SecurityGroupId>;

type VpcEndpointServiceId = string;

type VpcEndpointServiceIdList = vec<VpcEndpointServiceId>;

type VpcEndpointSet = vec<VpcEndpoint>;

type VpcEndpointSubnetIdList = vec<SubnetId>;

type VpcEndpointType = string;

type VpcFlowLogId = string;

type VpcId = string;

type VpcIdStringList = vec<VpcId>;

class VpcIpv6CidrBlockAssociation {
  public string $association_id;
  public string $ipv_6_cidr_block;
  public ?VpcCidrBlockState $ipv_6_cidr_block_state;
  public string $ipv_6_pool;
  public string $network_border_group;

  public function __construct(shape(
    ?'association_id' => string,
    ?'ipv_6_cidr_block' => string,
    ?'ipv_6_cidr_block_state' => ?VpcCidrBlockState,
    ?'ipv_6_pool' => string,
    ?'network_border_group' => string,
  ) $s = shape()) {
    $this->association_id = $s['association_id'] ?? '';
    $this->ipv_6_cidr_block = $s['ipv_6_cidr_block'] ?? '';
    $this->ipv_6_cidr_block_state = $s['ipv_6_cidr_block_state'] ?? null;
    $this->ipv_6_pool = $s['ipv_6_pool'] ?? '';
    $this->network_border_group = $s['network_border_group'] ?? '';
  }
}

type VpcIpv6CidrBlockAssociationSet = vec<VpcIpv6CidrBlockAssociation>;

type VpcList = vec<Vpc>;

class VpcPeeringConnection {
  public ?VpcPeeringConnectionVpcInfo $accepter_vpc_info;
  public ?DateTime $expiration_time;
  public ?VpcPeeringConnectionVpcInfo $requester_vpc_info;
  public ?VpcPeeringConnectionStateReason $status;
  public ?TagList $tags;
  public string $vpc_peering_connection_id;

  public function __construct(shape(
    ?'accepter_vpc_info' => ?VpcPeeringConnectionVpcInfo,
    ?'expiration_time' => ?DateTime,
    ?'requester_vpc_info' => ?VpcPeeringConnectionVpcInfo,
    ?'status' => ?VpcPeeringConnectionStateReason,
    ?'tags' => ?TagList,
    ?'vpc_peering_connection_id' => string,
  ) $s = shape()) {
    $this->accepter_vpc_info = $s['accepter_vpc_info'] ?? null;
    $this->expiration_time = $s['expiration_time'] ?? 0;
    $this->requester_vpc_info = $s['requester_vpc_info'] ?? null;
    $this->status = $s['status'] ?? null;
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_peering_connection_id = $s['vpc_peering_connection_id'] ?? '';
  }
}

type VpcPeeringConnectionId = string;

type VpcPeeringConnectionIdList = vec<VpcPeeringConnectionId>;

type VpcPeeringConnectionList = vec<VpcPeeringConnection>;

class VpcPeeringConnectionOptionsDescription {
  public bool $allow_dns_resolution_from_remote_vpc;
  public bool $allow_egress_from_local_classic_link_to_remote_vpc;
  public bool $allow_egress_from_local_vpc_to_remote_classic_link;

  public function __construct(shape(
    ?'allow_dns_resolution_from_remote_vpc' => bool,
    ?'allow_egress_from_local_classic_link_to_remote_vpc' => bool,
    ?'allow_egress_from_local_vpc_to_remote_classic_link' => bool,
  ) $s = shape()) {
    $this->allow_dns_resolution_from_remote_vpc = $s['allow_dns_resolution_from_remote_vpc'] ?? false;
    $this->allow_egress_from_local_classic_link_to_remote_vpc = $s['allow_egress_from_local_classic_link_to_remote_vpc'] ?? false;
    $this->allow_egress_from_local_vpc_to_remote_classic_link = $s['allow_egress_from_local_vpc_to_remote_classic_link'] ?? false;
  }
}

class VpcPeeringConnectionStateReason {
  public ?VpcPeeringConnectionStateReasonCode $code;
  public string $message;

  public function __construct(shape(
    ?'code' => ?VpcPeeringConnectionStateReasonCode,
    ?'message' => string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->message = $s['message'] ?? '';
  }
}

type VpcPeeringConnectionStateReasonCode = string;

class VpcPeeringConnectionVpcInfo {
  public string $cidr_block;
  public ?CidrBlockSet $cidr_block_set;
  public ?Ipv6CidrBlockSet $ipv_6_cidr_block_set;
  public string $owner_id;
  public ?VpcPeeringConnectionOptionsDescription $peering_options;
  public string $region;
  public string $vpc_id;

  public function __construct(shape(
    ?'cidr_block' => string,
    ?'cidr_block_set' => ?CidrBlockSet,
    ?'ipv_6_cidr_block_set' => ?Ipv6CidrBlockSet,
    ?'owner_id' => string,
    ?'peering_options' => ?VpcPeeringConnectionOptionsDescription,
    ?'region' => string,
    ?'vpc_id' => string,
  ) $s = shape()) {
    $this->cidr_block = $s['cidr_block'] ?? '';
    $this->cidr_block_set = $s['cidr_block_set'] ?? vec[];
    $this->ipv_6_cidr_block_set = $s['ipv_6_cidr_block_set'] ?? vec[];
    $this->owner_id = $s['owner_id'] ?? '';
    $this->peering_options = $s['peering_options'] ?? null;
    $this->region = $s['region'] ?? '';
    $this->vpc_id = $s['vpc_id'] ?? '';
  }
}

type VpcState = string;

type VpcTenancy = string;

class VpnConnection {
  public string $category;
  public string $customer_gateway_configuration;
  public string $customer_gateway_id;
  public ?VpnConnectionOptions $options;
  public ?VpnStaticRouteList $routes;
  public ?VpnState $state;
  public ?TagList $tags;
  public string $transit_gateway_id;
  public ?GatewayType $type;
  public ?VgwTelemetryList $vgw_telemetry;
  public string $vpn_connection_id;
  public string $vpn_gateway_id;

  public function __construct(shape(
    ?'category' => string,
    ?'customer_gateway_configuration' => string,
    ?'customer_gateway_id' => string,
    ?'options' => ?VpnConnectionOptions,
    ?'routes' => ?VpnStaticRouteList,
    ?'state' => ?VpnState,
    ?'tags' => ?TagList,
    ?'transit_gateway_id' => string,
    ?'type' => ?GatewayType,
    ?'vgw_telemetry' => ?VgwTelemetryList,
    ?'vpn_connection_id' => string,
    ?'vpn_gateway_id' => string,
  ) $s = shape()) {
    $this->category = $s['category'] ?? '';
    $this->customer_gateway_configuration = $s['customer_gateway_configuration'] ?? '';
    $this->customer_gateway_id = $s['customer_gateway_id'] ?? '';
    $this->options = $s['options'] ?? null;
    $this->routes = $s['routes'] ?? vec[];
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->transit_gateway_id = $s['transit_gateway_id'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->vgw_telemetry = $s['vgw_telemetry'] ?? vec[];
    $this->vpn_connection_id = $s['vpn_connection_id'] ?? '';
    $this->vpn_gateway_id = $s['vpn_gateway_id'] ?? '';
  }
}

type VpnConnectionId = string;

type VpnConnectionIdStringList = vec<VpnConnectionId>;

type VpnConnectionList = vec<VpnConnection>;

class VpnConnectionOptions {
  public bool $enable_acceleration;
  public bool $static_routes_only;
  public ?TunnelOptionsList $tunnel_options;

  public function __construct(shape(
    ?'enable_acceleration' => bool,
    ?'static_routes_only' => bool,
    ?'tunnel_options' => ?TunnelOptionsList,
  ) $s = shape()) {
    $this->enable_acceleration = $s['enable_acceleration'] ?? false;
    $this->static_routes_only = $s['static_routes_only'] ?? false;
    $this->tunnel_options = $s['tunnel_options'] ?? vec[];
  }
}

class VpnConnectionOptionsSpecification {
  public bool $enable_acceleration;
  public bool $static_routes_only;
  public ?VpnTunnelOptionsSpecificationsList $tunnel_options;

  public function __construct(shape(
    ?'enable_acceleration' => bool,
    ?'static_routes_only' => bool,
    ?'tunnel_options' => ?VpnTunnelOptionsSpecificationsList,
  ) $s = shape()) {
    $this->enable_acceleration = $s['enable_acceleration'] ?? false;
    $this->static_routes_only = $s['static_routes_only'] ?? false;
    $this->tunnel_options = $s['tunnel_options'] ?? vec[];
  }
}

type VpnEcmpSupportValue = string;

class VpnGateway {
  public ?Long $amazon_side_asn;
  public string $availability_zone;
  public ?VpnState $state;
  public ?TagList $tags;
  public ?GatewayType $type;
  public ?VpcAttachmentList $vpc_attachments;
  public string $vpn_gateway_id;

  public function __construct(shape(
    ?'amazon_side_asn' => ?Long,
    ?'availability_zone' => string,
    ?'state' => ?VpnState,
    ?'tags' => ?TagList,
    ?'type' => ?GatewayType,
    ?'vpc_attachments' => ?VpcAttachmentList,
    ?'vpn_gateway_id' => string,
  ) $s = shape()) {
    $this->amazon_side_asn = $s['amazon_side_asn'] ?? 0;
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->type = $s['type'] ?? '';
    $this->vpc_attachments = $s['vpc_attachments'] ?? vec[];
    $this->vpn_gateway_id = $s['vpn_gateway_id'] ?? '';
  }
}

type VpnGatewayId = string;

type VpnGatewayIdStringList = vec<VpnGatewayId>;

type VpnGatewayList = vec<VpnGateway>;

type VpnProtocol = string;

type VpnState = string;

class VpnStaticRoute {
  public string $destination_cidr_block;
  public ?VpnStaticRouteSource $source;
  public ?VpnState $state;

  public function __construct(shape(
    ?'destination_cidr_block' => string,
    ?'source' => ?VpnStaticRouteSource,
    ?'state' => ?VpnState,
  ) $s = shape()) {
    $this->destination_cidr_block = $s['destination_cidr_block'] ?? '';
    $this->source = $s['source'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

type VpnStaticRouteList = vec<VpnStaticRoute>;

type VpnStaticRouteSource = string;

class VpnTunnelOptionsSpecification {
  public int $dpd_timeout_seconds;
  public ?IKEVersionsRequestList $ike_versions;
  public ?Phase1DHGroupNumbersRequestList $phase_1_dh_group_numbers;
  public ?Phase1EncryptionAlgorithmsRequestList $phase_1_encryption_algorithms;
  public ?Phase1IntegrityAlgorithmsRequestList $phase_1_integrity_algorithms;
  public int $phase_1_lifetime_seconds;
  public ?Phase2DHGroupNumbersRequestList $phase_2_dh_group_numbers;
  public ?Phase2EncryptionAlgorithmsRequestList $phase_2_encryption_algorithms;
  public ?Phase2IntegrityAlgorithmsRequestList $phase_2_integrity_algorithms;
  public int $phase_2_lifetime_seconds;
  public string $pre_shared_key;
  public int $rekey_fuzz_percentage;
  public int $rekey_margin_time_seconds;
  public int $replay_window_size;
  public string $tunnel_inside_cidr;

  public function __construct(shape(
    ?'dpd_timeout_seconds' => int,
    ?'ike_versions' => ?IKEVersionsRequestList,
    ?'phase_1_dh_group_numbers' => ?Phase1DHGroupNumbersRequestList,
    ?'phase_1_encryption_algorithms' => ?Phase1EncryptionAlgorithmsRequestList,
    ?'phase_1_integrity_algorithms' => ?Phase1IntegrityAlgorithmsRequestList,
    ?'phase_1_lifetime_seconds' => int,
    ?'phase_2_dh_group_numbers' => ?Phase2DHGroupNumbersRequestList,
    ?'phase_2_encryption_algorithms' => ?Phase2EncryptionAlgorithmsRequestList,
    ?'phase_2_integrity_algorithms' => ?Phase2IntegrityAlgorithmsRequestList,
    ?'phase_2_lifetime_seconds' => int,
    ?'pre_shared_key' => string,
    ?'rekey_fuzz_percentage' => int,
    ?'rekey_margin_time_seconds' => int,
    ?'replay_window_size' => int,
    ?'tunnel_inside_cidr' => string,
  ) $s = shape()) {
    $this->dpd_timeout_seconds = $s['dpd_timeout_seconds'] ?? 0;
    $this->ike_versions = $s['ike_versions'] ?? vec[];
    $this->phase_1_dh_group_numbers = $s['phase_1_dh_group_numbers'] ?? vec[];
    $this->phase_1_encryption_algorithms = $s['phase_1_encryption_algorithms'] ?? vec[];
    $this->phase_1_integrity_algorithms = $s['phase_1_integrity_algorithms'] ?? vec[];
    $this->phase_1_lifetime_seconds = $s['phase_1_lifetime_seconds'] ?? 0;
    $this->phase_2_dh_group_numbers = $s['phase_2_dh_group_numbers'] ?? vec[];
    $this->phase_2_encryption_algorithms = $s['phase_2_encryption_algorithms'] ?? vec[];
    $this->phase_2_integrity_algorithms = $s['phase_2_integrity_algorithms'] ?? vec[];
    $this->phase_2_lifetime_seconds = $s['phase_2_lifetime_seconds'] ?? 0;
    $this->pre_shared_key = $s['pre_shared_key'] ?? '';
    $this->rekey_fuzz_percentage = $s['rekey_fuzz_percentage'] ?? 0;
    $this->rekey_margin_time_seconds = $s['rekey_margin_time_seconds'] ?? 0;
    $this->replay_window_size = $s['replay_window_size'] ?? 0;
    $this->tunnel_inside_cidr = $s['tunnel_inside_cidr'] ?? '';
  }
}

type VpnTunnelOptionsSpecificationsList = vec<VpnTunnelOptionsSpecification>;

class WithdrawByoipCidrRequest {
  public string $cidr;
  public bool $dry_run;

  public function __construct(shape(
    ?'cidr' => string,
    ?'dry_run' => bool,
  ) $s = shape()) {
    $this->cidr = $s['cidr'] ?? '';
    $this->dry_run = $s['dry_run'] ?? false;
  }
}

class WithdrawByoipCidrResult {
  public ?ByoipCidr $byoip_cidr;

  public function __construct(shape(
    ?'byoip_cidr' => ?ByoipCidr,
  ) $s = shape()) {
    $this->byoip_cidr = $s['byoip_cidr'] ?? null;
  }
}

type ZoneIdStringList = vec<String>;

type ZoneNameStringList = vec<String>;

type scope = string;

type totalFpgaMemory = int;

type totalGpuMemory = int;

