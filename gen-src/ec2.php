<?hh // strict
namespace slack\aws\ec2;

interface EC2 {
  public function DetachInternetGateway(DetachInternetGatewayRequest) Awaitable<Errors\Error>;
  public function EnableFastSnapshotRestores(EnableFastSnapshotRestoresRequest) Awaitable<Errors\Result<EnableFastSnapshotRestoresResult>>;
  public function ProvisionByoipCidr(ProvisionByoipCidrRequest) Awaitable<Errors\Result<ProvisionByoipCidrResult>>;
  public function RegisterImage(RegisterImageRequest) Awaitable<Errors\Result<RegisterImageResult>>;
  public function ReplaceRouteTableAssociation(ReplaceRouteTableAssociationRequest) Awaitable<Errors\Result<ReplaceRouteTableAssociationResult>>;
  public function RevokeSecurityGroupEgress(RevokeSecurityGroupEgressRequest) Awaitable<Errors\Error>;
  public function CreateClientVpnRoute(CreateClientVpnRouteRequest) Awaitable<Errors\Result<CreateClientVpnRouteResult>>;
  public function CreateTransitGatewayRoute(CreateTransitGatewayRouteRequest) Awaitable<Errors\Result<CreateTransitGatewayRouteResult>>;
  public function GetTransitGatewayRouteTableAssociations(GetTransitGatewayRouteTableAssociationsRequest) Awaitable<Errors\Result<GetTransitGatewayRouteTableAssociationsResult>>;
  public function RunInstances(RunInstancesRequest) Awaitable<Errors\Result<Reservation>>;
  public function DeleteSpotDatafeedSubscription(DeleteSpotDatafeedSubscriptionRequest) Awaitable<Errors\Error>;
  public function DescribeVpcEndpointServiceConfigurations(DescribeVpcEndpointServiceConfigurationsRequest) Awaitable<Errors\Result<DescribeVpcEndpointServiceConfigurationsResult>>;
  public function DescribeExportTasks(DescribeExportTasksRequest) Awaitable<Errors\Result<DescribeExportTasksResult>>;
  public function DescribeLaunchTemplates(DescribeLaunchTemplatesRequest) Awaitable<Errors\Result<DescribeLaunchTemplatesResult>>;
  public function DescribePrefixLists(DescribePrefixListsRequest) Awaitable<Errors\Result<DescribePrefixListsResult>>;
  public function ModifyHosts(ModifyHostsRequest) Awaitable<Errors\Result<ModifyHostsResult>>;
  public function CreateVolume(CreateVolumeRequest) Awaitable<Errors\Result<Volume>>;
  public function DeleteTransitGatewayVpcAttachment(DeleteTransitGatewayVpcAttachmentRequest) Awaitable<Errors\Result<DeleteTransitGatewayVpcAttachmentResult>>;
  public function DeleteTransitGatewayPeeringAttachment(DeleteTransitGatewayPeeringAttachmentRequest) Awaitable<Errors\Result<DeleteTransitGatewayPeeringAttachmentResult>>;
  public function DisableEbsEncryptionByDefault(DisableEbsEncryptionByDefaultRequest) Awaitable<Errors\Result<DisableEbsEncryptionByDefaultResult>>;
  public function EnableVpcClassicLink(EnableVpcClassicLinkRequest) Awaitable<Errors\Result<EnableVpcClassicLinkResult>>;
  public function PurchaseReservedInstancesOffering(PurchaseReservedInstancesOfferingRequest) Awaitable<Errors\Result<PurchaseReservedInstancesOfferingResult>>;
  public function WithdrawByoipCidr(WithdrawByoipCidrRequest) Awaitable<Errors\Result<WithdrawByoipCidrResult>>;
  public function CreateLocalGatewayRoute(CreateLocalGatewayRouteRequest) Awaitable<Errors\Result<CreateLocalGatewayRouteResult>>;
  public function DeleteEgressOnlyInternetGateway(DeleteEgressOnlyInternetGatewayRequest) Awaitable<Errors\Result<DeleteEgressOnlyInternetGatewayResult>>;
  public function DeleteTransitGatewayRoute(DeleteTransitGatewayRouteRequest) Awaitable<Errors\Result<DeleteTransitGatewayRouteResult>>;
  public function EnableTransitGatewayRouteTablePropagation(EnableTransitGatewayRouteTablePropagationRequest) Awaitable<Errors\Result<EnableTransitGatewayRouteTablePropagationResult>>;
  public function ModifyDefaultCreditSpecification(ModifyDefaultCreditSpecificationRequest) Awaitable<Errors\Result<ModifyDefaultCreditSpecificationResult>>;
  public function ModifyInstanceAttribute(ModifyInstanceAttributeRequest) Awaitable<Errors\Error>;
  public function UnassignPrivateIpAddresses(UnassignPrivateIpAddressesRequest) Awaitable<Errors\Error>;
  public function AttachVolume(AttachVolumeRequest) Awaitable<Errors\Result<VolumeAttachment>>;
  public function CreateVpnConnectionRoute(CreateVpnConnectionRouteRequest) Awaitable<Errors\Error>;
  public function GetEbsDefaultKmsKeyId(GetEbsDefaultKmsKeyIdRequest) Awaitable<Errors\Result<GetEbsDefaultKmsKeyIdResult>>;
  public function ModifySubnetAttribute(ModifySubnetAttributeRequest) Awaitable<Errors\Error>;
  public function RevokeClientVpnIngress(RevokeClientVpnIngressRequest) Awaitable<Errors\Result<RevokeClientVpnIngressResult>>;
  public function DescribePlacementGroups(DescribePlacementGroupsRequest) Awaitable<Errors\Result<DescribePlacementGroupsResult>>;
  public function DescribeTrafficMirrorTargets(DescribeTrafficMirrorTargetsRequest) Awaitable<Errors\Result<DescribeTrafficMirrorTargetsResult>>;
  public function AssociateClientVpnTargetNetwork(AssociateClientVpnTargetNetworkRequest) Awaitable<Errors\Result<AssociateClientVpnTargetNetworkResult>>;
  public function CreateFpgaImage(CreateFpgaImageRequest) Awaitable<Errors\Result<CreateFpgaImageResult>>;
  public function DeletePlacementGroup(DeletePlacementGroupRequest) Awaitable<Errors\Error>;
  public function DescribeRouteTables(DescribeRouteTablesRequest) Awaitable<Errors\Result<DescribeRouteTablesResult>>;
  public function RegisterTransitGatewayMulticastGroupMembers(RegisterTransitGatewayMulticastGroupMembersRequest) Awaitable<Errors\Result<RegisterTransitGatewayMulticastGroupMembersResult>>;
  public function ResetNetworkInterfaceAttribute(ResetNetworkInterfaceAttributeRequest) Awaitable<Errors\Error>;
  public function AcceptReservedInstancesExchangeQuote(AcceptReservedInstancesExchangeQuoteRequest) Awaitable<Errors\Result<AcceptReservedInstancesExchangeQuoteResult>>;
  public function AssignIpv6Addresses(AssignIpv6AddressesRequest) Awaitable<Errors\Result<AssignIpv6AddressesResult>>;
  public function DeleteInternetGateway(DeleteInternetGatewayRequest) Awaitable<Errors\Error>;
  public function CreateInstanceExportTask(CreateInstanceExportTaskRequest) Awaitable<Errors\Result<CreateInstanceExportTaskResult>>;
  public function DeleteCustomerGateway(DeleteCustomerGatewayRequest) Awaitable<Errors\Error>;
  public function DeleteTrafficMirrorFilter(DeleteTrafficMirrorFilterRequest) Awaitable<Errors\Result<DeleteTrafficMirrorFilterResult>>;
  public function GetTransitGatewayAttachmentPropagations(GetTransitGatewayAttachmentPropagationsRequest) Awaitable<Errors\Result<GetTransitGatewayAttachmentPropagationsResult>>;
  public function DescribeTransitGatewayAttachments(DescribeTransitGatewayAttachmentsRequest) Awaitable<Errors\Result<DescribeTransitGatewayAttachmentsResult>>;
  public function DescribeVpnConnections(DescribeVpnConnectionsRequest) Awaitable<Errors\Result<DescribeVpnConnectionsResult>>;
  public function RejectVpcPeeringConnection(RejectVpcPeeringConnectionRequest) Awaitable<Errors\Result<RejectVpcPeeringConnectionResult>>;
  public function DescribeLocalGatewayVirtualInterfaces(DescribeLocalGatewayVirtualInterfacesRequest) Awaitable<Errors\Result<DescribeLocalGatewayVirtualInterfacesResult>>;
  public function DescribeSpotPriceHistory(DescribeSpotPriceHistoryRequest) Awaitable<Errors\Result<DescribeSpotPriceHistoryResult>>;
  public function RunScheduledInstances(RunScheduledInstancesRequest) Awaitable<Errors\Result<RunScheduledInstancesResult>>;
  public function StartVpcEndpointServicePrivateDnsVerification(StartVpcEndpointServicePrivateDnsVerificationRequest) Awaitable<Errors\Result<StartVpcEndpointServicePrivateDnsVerificationResult>>;
  public function DescribeInstanceStatus(DescribeInstanceStatusRequest) Awaitable<Errors\Result<DescribeInstanceStatusResult>>;
  public function DescribeNetworkInterfacePermissions(DescribeNetworkInterfacePermissionsRequest) Awaitable<Errors\Result<DescribeNetworkInterfacePermissionsResult>>;
  public function DescribeImages(DescribeImagesRequest) Awaitable<Errors\Result<DescribeImagesResult>>;
  public function DescribeTransitGateways(DescribeTransitGatewaysRequest) Awaitable<Errors\Result<DescribeTransitGatewaysResult>>;
  public function UnmonitorInstances(UnmonitorInstancesRequest) Awaitable<Errors\Result<UnmonitorInstancesResult>>;
  public function AllocateHosts(AllocateHostsRequest) Awaitable<Errors\Result<AllocateHostsResult>>;
  public function CreateNetworkInterfacePermission(CreateNetworkInterfacePermissionRequest) Awaitable<Errors\Result<CreateNetworkInterfacePermissionResult>>;
  public function CreateNatGateway(CreateNatGatewayRequest) Awaitable<Errors\Result<CreateNatGatewayResult>>;
  public function CreateTrafficMirrorFilter(CreateTrafficMirrorFilterRequest) Awaitable<Errors\Result<CreateTrafficMirrorFilterResult>>;
  public function DescribeEgressOnlyInternetGateways(DescribeEgressOnlyInternetGatewaysRequest) Awaitable<Errors\Result<DescribeEgressOnlyInternetGatewaysResult>>;
  public function DescribeLocalGatewayVirtualInterfaceGroups(DescribeLocalGatewayVirtualInterfaceGroupsRequest) Awaitable<Errors\Result<DescribeLocalGatewayVirtualInterfaceGroupsResult>>;
  public function DisassociateSubnetCidrBlock(DisassociateSubnetCidrBlockRequest) Awaitable<Errors\Result<DisassociateSubnetCidrBlockResult>>;
  public function ModifyVpnTunnelCertificate(ModifyVpnTunnelCertificateRequest) Awaitable<Errors\Result<ModifyVpnTunnelCertificateResult>>;
  public function CancelSpotInstanceRequests(CancelSpotInstanceRequestsRequest) Awaitable<Errors\Result<CancelSpotInstanceRequestsResult>>;
  public function CreateCustomerGateway(CreateCustomerGatewayRequest) Awaitable<Errors\Result<CreateCustomerGatewayResult>>;
  public function ResetImageAttribute(ResetImageAttributeRequest) Awaitable<Errors\Error>;
  public function DescribeHostReservationOfferings(DescribeHostReservationOfferingsRequest) Awaitable<Errors\Result<DescribeHostReservationOfferingsResult>>;
  public function DescribeSnapshots(DescribeSnapshotsRequest) Awaitable<Errors\Result<DescribeSnapshotsResult>>;
  public function ModifyVpcEndpoint(ModifyVpcEndpointRequest) Awaitable<Errors\Result<ModifyVpcEndpointResult>>;
  public function AuthorizeClientVpnIngress(AuthorizeClientVpnIngressRequest) Awaitable<Errors\Result<AuthorizeClientVpnIngressResult>>;
  public function DescribeClientVpnRoutes(DescribeClientVpnRoutesRequest) Awaitable<Errors\Result<DescribeClientVpnRoutesResult>>;
  public function RejectTransitGatewayPeeringAttachment(RejectTransitGatewayPeeringAttachmentRequest) Awaitable<Errors\Result<RejectTransitGatewayPeeringAttachmentResult>>;
  public function DescribeElasticGpus(DescribeElasticGpusRequest) Awaitable<Errors\Result<DescribeElasticGpusResult>>;
  public function DescribeSpotFleetRequests(DescribeSpotFleetRequestsRequest) Awaitable<Errors\Result<DescribeSpotFleetRequestsResponse>>;
  public function CreateVpcEndpointConnectionNotification(CreateVpcEndpointConnectionNotificationRequest) Awaitable<Errors\Result<CreateVpcEndpointConnectionNotificationResult>>;
  public function DeleteSnapshot(DeleteSnapshotRequest) Awaitable<Errors\Error>;
  public function DeleteVpcEndpoints(DeleteVpcEndpointsRequest) Awaitable<Errors\Result<DeleteVpcEndpointsResult>>;
  public function DescribeMovingAddresses(DescribeMovingAddressesRequest) Awaitable<Errors\Result<DescribeMovingAddressesResult>>;
  public function DescribeNetworkInterfaceAttribute(DescribeNetworkInterfaceAttributeRequest) Awaitable<Errors\Result<DescribeNetworkInterfaceAttributeResult>>;
  public function GetCapacityReservationUsage(GetCapacityReservationUsageRequest) Awaitable<Errors\Result<GetCapacityReservationUsageResult>>;
  public function AcceptTransitGatewayVpcAttachment(AcceptTransitGatewayVpcAttachmentRequest) Awaitable<Errors\Result<AcceptTransitGatewayVpcAttachmentResult>>;
  public function CancelCapacityReservation(CancelCapacityReservationRequest) Awaitable<Errors\Result<CancelCapacityReservationResult>>;
  public function ReplaceTransitGatewayRoute(ReplaceTransitGatewayRouteRequest) Awaitable<Errors\Result<ReplaceTransitGatewayRouteResult>>;
  public function GetTransitGatewayMulticastDomainAssociations(GetTransitGatewayMulticastDomainAssociationsRequest) Awaitable<Errors\Result<GetTransitGatewayMulticastDomainAssociationsResult>>;
  public function ModifyClientVpnEndpoint(ModifyClientVpnEndpointRequest) Awaitable<Errors\Result<ModifyClientVpnEndpointResult>>;
  public function DescribeFleetHistory(DescribeFleetHistoryRequest) Awaitable<Errors\Result<DescribeFleetHistoryResult>>;
  public function DescribeIpv6Pools(DescribeIpv6PoolsRequest) Awaitable<Errors\Result<DescribeIpv6PoolsResult>>;
  public function ExportImage(ExportImageRequest) Awaitable<Errors\Result<ExportImageResult>>;
  public function ModifyNetworkInterfaceAttribute(ModifyNetworkInterfaceAttributeRequest) Awaitable<Errors\Error>;
  public function StartInstances(StartInstancesRequest) Awaitable<Errors\Result<StartInstancesResult>>;
  public function CancelExportTask(CancelExportTaskRequest) Awaitable<Errors\Error>;
  public function CreateFlowLogs(CreateFlowLogsRequest) Awaitable<Errors\Result<CreateFlowLogsResult>>;
  public function DeleteClientVpnRoute(DeleteClientVpnRouteRequest) Awaitable<Errors\Result<DeleteClientVpnRouteResult>>;
  public function DescribeInstanceCreditSpecifications(DescribeInstanceCreditSpecificationsRequest) Awaitable<Errors\Result<DescribeInstanceCreditSpecificationsResult>>;
  public function ModifySnapshotAttribute(ModifySnapshotAttributeRequest) Awaitable<Errors\Error>;
  public function CancelBundleTask(CancelBundleTaskRequest) Awaitable<Errors\Result<CancelBundleTaskResult>>;
  public function CreateSecurityGroup(CreateSecurityGroupRequest) Awaitable<Errors\Result<CreateSecurityGroupResult>>;
  public function DescribeNetworkAcls(DescribeNetworkAclsRequest) Awaitable<Errors\Result<DescribeNetworkAclsResult>>;
  public function DescribeSubnets(DescribeSubnetsRequest) Awaitable<Errors\Result<DescribeSubnetsResult>>;
  public function ModifyInstanceMetadataOptions(ModifyInstanceMetadataOptionsRequest) Awaitable<Errors\Result<ModifyInstanceMetadataOptionsResult>>;
  public function ModifyVolumeAttribute(ModifyVolumeAttributeRequest) Awaitable<Errors\Error>;
  public function CopyImage(CopyImageRequest) Awaitable<Errors\Result<CopyImageResult>>;
  public function CreateVpnConnection(CreateVpnConnectionRequest) Awaitable<Errors\Result<CreateVpnConnectionResult>>;
  public function DescribeVpcs(DescribeVpcsRequest) Awaitable<Errors\Result<DescribeVpcsResult>>;
  public function DisassociateAddress(DisassociateAddressRequest) Awaitable<Errors\Error>;
  public function ModifyTrafficMirrorSession(ModifyTrafficMirrorSessionRequest) Awaitable<Errors\Result<ModifyTrafficMirrorSessionResult>>;
  public function CreateVpcEndpointServiceConfiguration(CreateVpcEndpointServiceConfigurationRequest) Awaitable<Errors\Result<CreateVpcEndpointServiceConfigurationResult>>;
  public function DescribeIdFormat(DescribeIdFormatRequest) Awaitable<Errors\Result<DescribeIdFormatResult>>;
  public function DeleteKeyPair(DeleteKeyPairRequest) Awaitable<Errors\Error>;
  public function DeleteNetworkInterfacePermission(DeleteNetworkInterfacePermissionRequest) Awaitable<Errors\Result<DeleteNetworkInterfacePermissionResult>>;
  public function DeleteTrafficMirrorFilterRule(DeleteTrafficMirrorFilterRuleRequest) Awaitable<Errors\Result<DeleteTrafficMirrorFilterRuleResult>>;
  public function DescribeAggregateIdFormat(DescribeAggregateIdFormatRequest) Awaitable<Errors\Result<DescribeAggregateIdFormatResult>>;
  public function DescribeLocalGatewayRouteTables(DescribeLocalGatewayRouteTablesRequest) Awaitable<Errors\Result<DescribeLocalGatewayRouteTablesResult>>;
  public function DescribeReservedInstances(DescribeReservedInstancesRequest) Awaitable<Errors\Result<DescribeReservedInstancesResult>>;
  public function CreateInternetGateway(CreateInternetGatewayRequest) Awaitable<Errors\Result<CreateInternetGatewayResult>>;
  public function CreateRoute(CreateRouteRequest) Awaitable<Errors\Result<CreateRouteResult>>;
  public function RequestSpotFleet(RequestSpotFleetRequest) Awaitable<Errors\Result<RequestSpotFleetResponse>>;
  public function RequestSpotInstances(RequestSpotInstancesRequest) Awaitable<Errors\Result<RequestSpotInstancesResult>>;
  public function DescribeCustomerGateways(DescribeCustomerGatewaysRequest) Awaitable<Errors\Result<DescribeCustomerGatewaysResult>>;
  public function DescribeInstanceTypes(DescribeInstanceTypesRequest) Awaitable<Errors\Result<DescribeInstanceTypesResult>>;
  public function DescribeTransitGatewayVpcAttachments(DescribeTransitGatewayVpcAttachmentsRequest) Awaitable<Errors\Result<DescribeTransitGatewayVpcAttachmentsResult>>;
  public function DescribeVpcClassicLink(DescribeVpcClassicLinkRequest) Awaitable<Errors\Result<DescribeVpcClassicLinkResult>>;
  public function DetachVolume(DetachVolumeRequest) Awaitable<Errors\Result<VolumeAttachment>>;
  public function ModifyVolume(ModifyVolumeRequest) Awaitable<Errors\Result<ModifyVolumeResult>>;
  public function DeleteTrafficMirrorSession(DeleteTrafficMirrorSessionRequest) Awaitable<Errors\Result<DeleteTrafficMirrorSessionResult>>;
  public function DeleteVpcPeeringConnection(DeleteVpcPeeringConnectionRequest) Awaitable<Errors\Result<DeleteVpcPeeringConnectionResult>>;
  public function ResetFpgaImageAttribute(ResetFpgaImageAttributeRequest) Awaitable<Errors\Result<ResetFpgaImageAttributeResult>>;
  public function DeleteQueuedReservedInstances(DeleteQueuedReservedInstancesRequest) Awaitable<Errors\Result<DeleteQueuedReservedInstancesResult>>;
  public function UpdateSecurityGroupRuleDescriptionsEgress(UpdateSecurityGroupRuleDescriptionsEgressRequest) Awaitable<Errors\Result<UpdateSecurityGroupRuleDescriptionsEgressResult>>;
  public function AssignPrivateIpAddresses(AssignPrivateIpAddressesRequest) Awaitable<Errors\Result<AssignPrivateIpAddressesResult>>;
  public function DeleteFleets(DeleteFleetsRequest) Awaitable<Errors\Result<DeleteFleetsResult>>;
  public function DescribeClientVpnConnections(DescribeClientVpnConnectionsRequest) Awaitable<Errors\Result<DescribeClientVpnConnectionsResult>>;
  public function DescribeNetworkInterfaces(DescribeNetworkInterfacesRequest) Awaitable<Errors\Result<DescribeNetworkInterfacesResult>>;
  public function DescribeVolumeStatus(DescribeVolumeStatusRequest) Awaitable<Errors\Result<DescribeVolumeStatusResult>>;
  public function ExportClientVpnClientConfiguration(ExportClientVpnClientConfigurationRequest) Awaitable<Errors\Result<ExportClientVpnClientConfigurationResult>>;
  public function ReplaceRoute(ReplaceRouteRequest) Awaitable<Errors\Error>;
  public function UpdateSecurityGroupRuleDescriptionsIngress(UpdateSecurityGroupRuleDescriptionsIngressRequest) Awaitable<Errors\Result<UpdateSecurityGroupRuleDescriptionsIngressResult>>;
  public function CreatePlacementGroup(CreatePlacementGroupRequest) Awaitable<Errors\Result<CreatePlacementGroupResult>>;
  public function CreateTransitGatewayMulticastDomain(CreateTransitGatewayMulticastDomainRequest) Awaitable<Errors\Result<CreateTransitGatewayMulticastDomainResult>>;
  public function DescribeReservedInstancesListings(DescribeReservedInstancesListingsRequest) Awaitable<Errors\Result<DescribeReservedInstancesListingsResult>>;
  public function DescribeVpcEndpointConnections(DescribeVpcEndpointConnectionsRequest) Awaitable<Errors\Result<DescribeVpcEndpointConnectionsResult>>;
  public function EnableEbsEncryptionByDefault(EnableEbsEncryptionByDefaultRequest) Awaitable<Errors\Result<EnableEbsEncryptionByDefaultResult>>;
  public function ExportClientVpnClientCertificateRevocationList(ExportClientVpnClientCertificateRevocationListRequest) Awaitable<Errors\Result<ExportClientVpnClientCertificateRevocationListResult>>;
  public function ModifyLaunchTemplate(ModifyLaunchTemplateRequest) Awaitable<Errors\Result<ModifyLaunchTemplateResult>>;
  public function ModifyVpcTenancy(ModifyVpcTenancyRequest) Awaitable<Errors\Result<ModifyVpcTenancyResult>>;
  public function CreateClientVpnEndpoint(CreateClientVpnEndpointRequest) Awaitable<Errors\Result<CreateClientVpnEndpointResult>>;
  public function CreateLaunchTemplateVersion(CreateLaunchTemplateVersionRequest) Awaitable<Errors\Result<CreateLaunchTemplateVersionResult>>;
  public function DescribeReservedInstancesModifications(DescribeReservedInstancesModificationsRequest) Awaitable<Errors\Result<DescribeReservedInstancesModificationsResult>>;
  public function DisassociateIamInstanceProfile(DisassociateIamInstanceProfileRequest) Awaitable<Errors\Result<DisassociateIamInstanceProfileResult>>;
  public function DisassociateRouteTable(DisassociateRouteTableRequest) Awaitable<Errors\Error>;
  public function GetLaunchTemplateData(GetLaunchTemplateDataRequest) Awaitable<Errors\Result<GetLaunchTemplateDataResult>>;
  public function DeleteNetworkAclEntry(DeleteNetworkAclEntryRequest) Awaitable<Errors\Error>;
  public function DescribeInternetGateways(DescribeInternetGatewaysRequest) Awaitable<Errors\Result<DescribeInternetGatewaysResult>>;
  public function DescribeFpgaImageAttribute(DescribeFpgaImageAttributeRequest) Awaitable<Errors\Result<DescribeFpgaImageAttributeResult>>;
  public function DescribeIamInstanceProfileAssociations(DescribeIamInstanceProfileAssociationsRequest) Awaitable<Errors\Result<DescribeIamInstanceProfileAssociationsResult>>;
  public function DescribeInstances(DescribeInstancesRequest) Awaitable<Errors\Result<DescribeInstancesResult>>;
  public function DescribeLocalGateways(DescribeLocalGatewaysRequest) Awaitable<Errors\Result<DescribeLocalGatewaysResult>>;
  public function EnableVpcClassicLinkDnsSupport(EnableVpcClassicLinkDnsSupportRequest) Awaitable<Errors\Result<EnableVpcClassicLinkDnsSupportResult>>;
  public function ImportVolume(ImportVolumeRequest) Awaitable<Errors\Result<ImportVolumeResult>>;
  public function ApplySecurityGroupsToClientVpnTargetNetwork(ApplySecurityGroupsToClientVpnTargetNetworkRequest) Awaitable<Errors\Result<ApplySecurityGroupsToClientVpnTargetNetworkResult>>;
  public function DeleteTransitGatewayRouteTable(DeleteTransitGatewayRouteTableRequest) Awaitable<Errors\Result<DeleteTransitGatewayRouteTableResult>>;
  public function ModifyInstancePlacement(ModifyInstancePlacementRequest) Awaitable<Errors\Result<ModifyInstancePlacementResult>>;
  public function DescribeIdentityIdFormat(DescribeIdentityIdFormatRequest) Awaitable<Errors\Result<DescribeIdentityIdFormatResult>>;
  public function DescribeInstanceAttribute(DescribeInstanceAttributeRequest) Awaitable<Errors\Result<InstanceAttribute>>;
  public function DescribeScheduledInstances(DescribeScheduledInstancesRequest) Awaitable<Errors\Result<DescribeScheduledInstancesResult>>;
  public function DescribeVpcClassicLinkDnsSupport(DescribeVpcClassicLinkDnsSupportRequest) Awaitable<Errors\Result<DescribeVpcClassicLinkDnsSupportResult>>;
  public function DisassociateVpcCidrBlock(DisassociateVpcCidrBlockRequest) Awaitable<Errors\Result<DisassociateVpcCidrBlockResult>>;
  public function ImportClientVpnClientCertificateRevocationList(ImportClientVpnClientCertificateRevocationListRequest) Awaitable<Errors\Result<ImportClientVpnClientCertificateRevocationListResult>>;
  public function DeleteFlowLogs(DeleteFlowLogsRequest) Awaitable<Errors\Result<DeleteFlowLogsResult>>;
  public function DescribeByoipCidrs(DescribeByoipCidrsRequest) Awaitable<Errors\Result<DescribeByoipCidrsResult>>;
  public function ModifyTransitGatewayVpcAttachment(ModifyTransitGatewayVpcAttachmentRequest) Awaitable<Errors\Result<ModifyTransitGatewayVpcAttachmentResult>>;
  public function ReportInstanceStatus(ReportInstanceStatusRequest) Awaitable<Errors\Error>;
  public function CreateDefaultSubnet(CreateDefaultSubnetRequest) Awaitable<Errors\Result<CreateDefaultSubnetResult>>;
  public function CreateNetworkAclEntry(CreateNetworkAclEntryRequest) Awaitable<Errors\Error>;
  public function DeleteVpnConnectionRoute(DeleteVpnConnectionRouteRequest) Awaitable<Errors\Error>;
  public function DescribeStaleSecurityGroups(DescribeStaleSecurityGroupsRequest) Awaitable<Errors\Result<DescribeStaleSecurityGroupsResult>>;
  public function ReplaceNetworkAclEntry(ReplaceNetworkAclEntryRequest) Awaitable<Errors\Error>;
  public function TerminateInstances(TerminateInstancesRequest) Awaitable<Errors\Result<TerminateInstancesResult>>;
  public function AssociateAddress(AssociateAddressRequest) Awaitable<Errors\Result<AssociateAddressResult>>;
  public function AssociateRouteTable(AssociateRouteTableRequest) Awaitable<Errors\Result<AssociateRouteTableResult>>;
  public function DescribeVpcPeeringConnections(DescribeVpcPeeringConnectionsRequest) Awaitable<Errors\Result<DescribeVpcPeeringConnectionsResult>>;
  public function ModifyReservedInstances(ModifyReservedInstancesRequest) Awaitable<Errors\Result<ModifyReservedInstancesResult>>;
  public function ModifyVpcEndpointConnectionNotification(ModifyVpcEndpointConnectionNotificationRequest) Awaitable<Errors\Result<ModifyVpcEndpointConnectionNotificationResult>>;
  public function DescribeClientVpnAuthorizationRules(DescribeClientVpnAuthorizationRulesRequest) Awaitable<Errors\Result<DescribeClientVpnAuthorizationRulesResult>>;
  public function DescribeFlowLogs(DescribeFlowLogsRequest) Awaitable<Errors\Result<DescribeFlowLogsResult>>;
  public function DeleteRoute(DeleteRouteRequest) Awaitable<Errors\Error>;
  public function DescribeCapacityReservations(DescribeCapacityReservationsRequest) Awaitable<Errors\Result<DescribeCapacityReservationsResult>>;
  public function ModifyFleet(ModifyFleetRequest) Awaitable<Errors\Result<ModifyFleetResult>>;
  public function ModifyVpcEndpointServicePermissions(ModifyVpcEndpointServicePermissionsRequest) Awaitable<Errors\Result<ModifyVpcEndpointServicePermissionsResult>>;
  public function AttachNetworkInterface(AttachNetworkInterfaceRequest) Awaitable<Errors\Result<AttachNetworkInterfaceResult>>;
  public function DescribeClassicLinkInstances(DescribeClassicLinkInstancesRequest) Awaitable<Errors\Result<DescribeClassicLinkInstancesResult>>;
  public function CreateTrafficMirrorSession(CreateTrafficMirrorSessionRequest) Awaitable<Errors\Result<CreateTrafficMirrorSessionResult>>;
  public function DeleteNetworkAcl(DeleteNetworkAclRequest) Awaitable<Errors\Error>;
  public function DeleteSubnet(DeleteSubnetRequest) Awaitable<Errors\Error>;
  public function DescribeAddresses(DescribeAddressesRequest) Awaitable<Errors\Result<DescribeAddressesResult>>;
  public function DescribeHostReservations(DescribeHostReservationsRequest) Awaitable<Errors\Result<DescribeHostReservationsResult>>;
  public function DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociations(DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest) Awaitable<Errors\Result<DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResult>>;
  public function CreateKeyPair(CreateKeyPairRequest) Awaitable<Errors\Result<KeyPair>>;
  public function CreateNetworkInterface(CreateNetworkInterfaceRequest) Awaitable<Errors\Result<CreateNetworkInterfaceResult>>;
  public function DescribeVpnGateways(DescribeVpnGatewaysRequest) Awaitable<Errors\Result<DescribeVpnGatewaysResult>>;
  public function MoveAddressToVpc(MoveAddressToVpcRequest) Awaitable<Errors\Result<MoveAddressToVpcResult>>;
  public function TerminateClientVpnConnections(TerminateClientVpnConnectionsRequest) Awaitable<Errors\Result<TerminateClientVpnConnectionsResult>>;
  public function DescribeVolumes(DescribeVolumesRequest) Awaitable<Errors\Result<DescribeVolumesResult>>;
  public function DescribeVolumesModifications(DescribeVolumesModificationsRequest) Awaitable<Errors\Result<DescribeVolumesModificationsResult>>;
  public function DescribeVpcEndpointServices(DescribeVpcEndpointServicesRequest) Awaitable<Errors\Result<DescribeVpcEndpointServicesResult>>;
  public function GetCoipPoolUsage(GetCoipPoolUsageRequest) Awaitable<Errors\Result<GetCoipPoolUsageResult>>;
  public function ModifyVpnConnection(ModifyVpnConnectionRequest) Awaitable<Errors\Result<ModifyVpnConnectionResult>>;
  public function CreateVpcEndpoint(CreateVpcEndpointRequest) Awaitable<Errors\Result<CreateVpcEndpointResult>>;
  public function DescribeTrafficMirrorFilters(DescribeTrafficMirrorFiltersRequest) Awaitable<Errors\Result<DescribeTrafficMirrorFiltersResult>>;
  public function DeleteSecurityGroup(DeleteSecurityGroupRequest) Awaitable<Errors\Error>;
  public function DescribeInstanceTypeOfferings(DescribeInstanceTypeOfferingsRequest) Awaitable<Errors\Result<DescribeInstanceTypeOfferingsResult>>;
  public function ModifyTrafficMirrorFilterNetworkServices(ModifyTrafficMirrorFilterNetworkServicesRequest) Awaitable<Errors\Result<ModifyTrafficMirrorFilterNetworkServicesResult>>;
  public function RejectVpcEndpointConnections(RejectVpcEndpointConnectionsRequest) Awaitable<Errors\Result<RejectVpcEndpointConnectionsResult>>;
  public function BundleInstance(BundleInstanceRequest) Awaitable<Errors\Result<BundleInstanceResult>>;
  public function CreateFleet(CreateFleetRequest) Awaitable<Errors\Result<CreateFleetResult>>;
  public function DescribeFastSnapshotRestores(DescribeFastSnapshotRestoresRequest) Awaitable<Errors\Result<DescribeFastSnapshotRestoresResult>>;
  public function DescribeFleets(DescribeFleetsRequest) Awaitable<Errors\Result<DescribeFleetsResult>>;
  public function DescribeHosts(DescribeHostsRequest) Awaitable<Errors\Result<DescribeHostsResult>>;
  public function DescribeSecurityGroupReferences(DescribeSecurityGroupReferencesRequest) Awaitable<Errors\Result<DescribeSecurityGroupReferencesResult>>;
  public function DetachVpnGateway(DetachVpnGatewayRequest) Awaitable<Errors\Error>;
  public function ModifyImageAttribute(ModifyImageAttributeRequest) Awaitable<Errors\Error>;
  public function CreateTransitGatewayVpcAttachment(CreateTransitGatewayVpcAttachmentRequest) Awaitable<Errors\Result<CreateTransitGatewayVpcAttachmentResult>>;
  public function DeleteLocalGatewayRouteTableVpcAssociation(DeleteLocalGatewayRouteTableVpcAssociationRequest) Awaitable<Errors\Result<DeleteLocalGatewayRouteTableVpcAssociationResult>>;
  public function SendDiagnosticInterrupt(SendDiagnosticInterruptRequest) Awaitable<Errors\Error>;
  public function CreateReservedInstancesListing(CreateReservedInstancesListingRequest) Awaitable<Errors\Result<CreateReservedInstancesListingResult>>;
  public function CreateSpotDatafeedSubscription(CreateSpotDatafeedSubscriptionRequest) Awaitable<Errors\Result<CreateSpotDatafeedSubscriptionResult>>;
  public function CreateTags(CreateTagsRequest) Awaitable<Errors\Error>;
  public function DescribeInstanceEventNotificationAttributes(DescribeInstanceEventNotificationAttributesRequest) Awaitable<Errors\Result<DescribeInstanceEventNotificationAttributesResult>>;
  public function DisassociateTransitGatewayMulticastDomain(DisassociateTransitGatewayMulticastDomainRequest) Awaitable<Errors\Result<DisassociateTransitGatewayMulticastDomainResult>>;
  public function ModifyInstanceEventStartTime(ModifyInstanceEventStartTimeRequest) Awaitable<Errors\Result<ModifyInstanceEventStartTimeResult>>;
  public function AuthorizeSecurityGroupEgress(AuthorizeSecurityGroupEgressRequest) Awaitable<Errors\Error>;
  public function CancelSpotFleetRequests(CancelSpotFleetRequestsRequest) Awaitable<Errors\Result<CancelSpotFleetRequestsResponse>>;
  public function ReplaceIamInstanceProfileAssociation(ReplaceIamInstanceProfileAssociationRequest) Awaitable<Errors\Result<ReplaceIamInstanceProfileAssociationResult>>;
  public function DescribeTags(DescribeTagsRequest) Awaitable<Errors\Result<DescribeTagsResult>>;
  public function ModifyVpcAttribute(ModifyVpcAttributeRequest) Awaitable<Errors\Error>;
  public function SearchLocalGatewayRoutes(SearchLocalGatewayRoutesRequest) Awaitable<Errors\Result<SearchLocalGatewayRoutesResult>>;
  public function CreateCapacityReservation(CreateCapacityReservationRequest) Awaitable<Errors\Result<CreateCapacityReservationResult>>;
  public function DeregisterTransitGatewayMulticastGroupMembers(DeregisterTransitGatewayMulticastGroupMembersRequest) Awaitable<Errors\Result<DeregisterTransitGatewayMulticastGroupMembersResult>>;
  public function ModifyVpcEndpointServiceConfiguration(ModifyVpcEndpointServiceConfigurationRequest) Awaitable<Errors\Result<ModifyVpcEndpointServiceConfigurationResult>>;
  public function MonitorInstances(MonitorInstancesRequest) Awaitable<Errors\Result<MonitorInstancesResult>>;
  public function RejectTransitGatewayVpcAttachment(RejectTransitGatewayVpcAttachmentRequest) Awaitable<Errors\Result<RejectTransitGatewayVpcAttachmentResult>>;
  public function CreateLocalGatewayRouteTableVpcAssociation(CreateLocalGatewayRouteTableVpcAssociationRequest) Awaitable<Errors\Result<CreateLocalGatewayRouteTableVpcAssociationResult>>;
  public function DescribeKeyPairs(DescribeKeyPairsRequest) Awaitable<Errors\Result<DescribeKeyPairsResult>>;
  public function CreateDefaultVpc(CreateDefaultVpcRequest) Awaitable<Errors\Result<CreateDefaultVpcResult>>;
  public function CreateDhcpOptions(CreateDhcpOptionsRequest) Awaitable<Errors\Result<CreateDhcpOptionsResult>>;
  public function DescribeVpcEndpoints(DescribeVpcEndpointsRequest) Awaitable<Errors\Result<DescribeVpcEndpointsResult>>;
  public function GetConsoleOutput(GetConsoleOutputRequest) Awaitable<Errors\Result<GetConsoleOutputResult>>;
  public function CancelImportTask(CancelImportTaskRequest) Awaitable<Errors\Result<CancelImportTaskResult>>;
  public function CancelReservedInstancesListing(CancelReservedInstancesListingRequest) Awaitable<Errors\Result<CancelReservedInstancesListingResult>>;
  public function DescribeVpcEndpointConnectionNotifications(DescribeVpcEndpointConnectionNotificationsRequest) Awaitable<Errors\Result<DescribeVpcEndpointConnectionNotificationsResult>>;
  public function DeleteLaunchTemplateVersions(DeleteLaunchTemplateVersionsRequest) Awaitable<Errors\Result<DeleteLaunchTemplateVersionsResult>>;
  public function DescribeAvailabilityZones(DescribeAvailabilityZonesRequest) Awaitable<Errors\Result<DescribeAvailabilityZonesResult>>;
  public function DescribeLocalGatewayRouteTableVpcAssociations(DescribeLocalGatewayRouteTableVpcAssociationsRequest) Awaitable<Errors\Result<DescribeLocalGatewayRouteTableVpcAssociationsResult>>;
  public function DescribeNatGateways(DescribeNatGatewaysRequest) Awaitable<Errors\Result<DescribeNatGatewaysResult>>;
  public function DescribeReservedInstancesOfferings(DescribeReservedInstancesOfferingsRequest) Awaitable<Errors\Result<DescribeReservedInstancesOfferingsResult>>;
  public function GetAssociatedIpv6PoolCidrs(GetAssociatedIpv6PoolCidrsRequest) Awaitable<Errors\Result<GetAssociatedIpv6PoolCidrsResult>>;
  public function ModifyIdFormat(ModifyIdFormatRequest) Awaitable<Errors\Error>;
  public function CreateVpnGateway(CreateVpnGatewayRequest) Awaitable<Errors\Result<CreateVpnGatewayResult>>;
  public function DeprovisionByoipCidr(DeprovisionByoipCidrRequest) Awaitable<Errors\Result<DeprovisionByoipCidrResult>>;
  public function DescribeLaunchTemplateVersions(DescribeLaunchTemplateVersionsRequest) Awaitable<Errors\Result<DescribeLaunchTemplateVersionsResult>>;
  public function DisableVpcClassicLinkDnsSupport(DisableVpcClassicLinkDnsSupportRequest) Awaitable<Errors\Result<DisableVpcClassicLinkDnsSupportResult>>;
  public function GetEbsEncryptionByDefault(GetEbsEncryptionByDefaultRequest) Awaitable<Errors\Result<GetEbsEncryptionByDefaultResult>>;
  public function RegisterTransitGatewayMulticastGroupSources(RegisterTransitGatewayMulticastGroupSourcesRequest) Awaitable<Errors\Result<RegisterTransitGatewayMulticastGroupSourcesResult>>;
  public function UnassignIpv6Addresses(UnassignIpv6AddressesRequest) Awaitable<Errors\Result<UnassignIpv6AddressesResult>>;
  public function DeleteVolume(DeleteVolumeRequest) Awaitable<Errors\Error>;
  public function DescribeFleetInstances(DescribeFleetInstancesRequest) Awaitable<Errors\Result<DescribeFleetInstancesResult>>;
  public function EnableVolumeIO(EnableVolumeIORequest) Awaitable<Errors\Error>;
  public function GetReservedInstancesExchangeQuote(GetReservedInstancesExchangeQuoteRequest) Awaitable<Errors\Result<GetReservedInstancesExchangeQuoteResult>>;
  public function ModifyAvailabilityZoneGroup(ModifyAvailabilityZoneGroupRequest) Awaitable<Errors\Result<ModifyAvailabilityZoneGroupResult>>;
  public function ModifyFpgaImageAttribute(ModifyFpgaImageAttributeRequest) Awaitable<Errors\Result<ModifyFpgaImageAttributeResult>>;
  public function DeleteDhcpOptions(DeleteDhcpOptionsRequest) Awaitable<Errors\Error>;
  public function DescribeClientVpnTargetNetworks(DescribeClientVpnTargetNetworksRequest) Awaitable<Errors\Result<DescribeClientVpnTargetNetworksResult>>;
  public function DetachNetworkInterface(DetachNetworkInterfaceRequest) Awaitable<Errors\Error>;
  public function ModifyTrafficMirrorFilterRule(ModifyTrafficMirrorFilterRuleRequest) Awaitable<Errors\Result<ModifyTrafficMirrorFilterRuleResult>>;
  public function AttachClassicLinkVpc(AttachClassicLinkVpcRequest) Awaitable<Errors\Result<AttachClassicLinkVpcResult>>;
  public function DescribeTransitGatewayPeeringAttachments(DescribeTransitGatewayPeeringAttachmentsRequest) Awaitable<Errors\Result<DescribeTransitGatewayPeeringAttachmentsResult>>;
  public function DescribeConversionTasks(DescribeConversionTasksRequest) Awaitable<Errors\Result<DescribeConversionTasksResult>>;
  public function DescribeSpotFleetRequestHistory(DescribeSpotFleetRequestHistoryRequest) Awaitable<Errors\Result<DescribeSpotFleetRequestHistoryResponse>>;
  public function PurchaseHostReservation(PurchaseHostReservationRequest) Awaitable<Errors\Result<PurchaseHostReservationResult>>;
  public function ReplaceNetworkAclAssociation(ReplaceNetworkAclAssociationRequest) Awaitable<Errors\Result<ReplaceNetworkAclAssociationResult>>;
  public function AttachInternetGateway(AttachInternetGatewayRequest) Awaitable<Errors\Error>;
  public function DeleteTags(DeleteTagsRequest) Awaitable<Errors\Error>;
  public function DescribeTransitGatewayRouteTables(DescribeTransitGatewayRouteTablesRequest) Awaitable<Errors\Result<DescribeTransitGatewayRouteTablesResult>>;
  public function DeleteVpnConnection(DeleteVpnConnectionRequest) Awaitable<Errors\Error>;
  public function DescribeSpotInstanceRequests(DescribeSpotInstanceRequestsRequest) Awaitable<Errors\Result<DescribeSpotInstanceRequestsResult>>;
  public function DeleteNatGateway(DeleteNatGatewayRequest) Awaitable<Errors\Result<DeleteNatGatewayResult>>;
  public function DescribeClientVpnEndpoints(DescribeClientVpnEndpointsRequest) Awaitable<Errors\Result<DescribeClientVpnEndpointsResult>>;
  public function DescribePublicIpv4Pools(DescribePublicIpv4PoolsRequest) Awaitable<Errors\Result<DescribePublicIpv4PoolsResult>>;
  public function DisableFastSnapshotRestores(DisableFastSnapshotRestoresRequest) Awaitable<Errors\Result<DisableFastSnapshotRestoresResult>>;
  public function ModifyIdentityIdFormat(ModifyIdentityIdFormatRequest) Awaitable<Errors\Error>;
  public function RebootInstances(RebootInstancesRequest) Awaitable<Errors\Error>;
  public function AttachVpnGateway(AttachVpnGatewayRequest) Awaitable<Errors\Result<AttachVpnGatewayResult>>;
  public function DeleteLocalGatewayRoute(DeleteLocalGatewayRouteRequest) Awaitable<Errors\Result<DeleteLocalGatewayRouteResult>>;
  public function ResetEbsDefaultKmsKeyId(ResetEbsDefaultKmsKeyIdRequest) Awaitable<Errors\Result<ResetEbsDefaultKmsKeyIdResult>>;
  public function DescribeExportImageTasks(DescribeExportImageTasksRequest) Awaitable<Errors\Result<DescribeExportImageTasksResult>>;
  public function GetDefaultCreditSpecification(GetDefaultCreditSpecificationRequest) Awaitable<Errors\Result<GetDefaultCreditSpecificationResult>>;
  public function ModifyCapacityReservation(ModifyCapacityReservationRequest) Awaitable<Errors\Result<ModifyCapacityReservationResult>>;
  public function ResetInstanceAttribute(ResetInstanceAttributeRequest) Awaitable<Errors\Error>;
  public function AssociateDhcpOptions(AssociateDhcpOptionsRequest) Awaitable<Errors\Error>;
  public function DeleteVpcEndpointConnectionNotifications(DeleteVpcEndpointConnectionNotificationsRequest) Awaitable<Errors\Result<DeleteVpcEndpointConnectionNotificationsResult>>;
  public function CreateTransitGateway(CreateTransitGatewayRequest) Awaitable<Errors\Result<CreateTransitGatewayResult>>;
  public function DeleteTransitGatewayMulticastDomain(DeleteTransitGatewayMulticastDomainRequest) Awaitable<Errors\Result<DeleteTransitGatewayMulticastDomainResult>>;
  public function DescribeBundleTasks(DescribeBundleTasksRequest) Awaitable<Errors\Result<DescribeBundleTasksResult>>;
  public function DescribeCoipPools(DescribeCoipPoolsRequest) Awaitable<Errors\Result<DescribeCoipPoolsResult>>;
  public function DescribeSpotFleetInstances(DescribeSpotFleetInstancesRequest) Awaitable<Errors\Result<DescribeSpotFleetInstancesResponse>>;
  public function DescribeVpcEndpointServicePermissions(DescribeVpcEndpointServicePermissionsRequest) Awaitable<Errors\Result<DescribeVpcEndpointServicePermissionsResult>>;
  public function CopySnapshot(CopySnapshotRequest) Awaitable<Errors\Result<CopySnapshotResult>>;
  public function CreateEgressOnlyInternetGateway(CreateEgressOnlyInternetGatewayRequest) Awaitable<Errors\Result<CreateEgressOnlyInternetGatewayResult>>;
  public function RegisterInstanceEventNotificationAttributes(RegisterInstanceEventNotificationAttributesRequest) Awaitable<Errors\Result<RegisterInstanceEventNotificationAttributesResult>>;
  public function ReleaseAddress(ReleaseAddressRequest) Awaitable<Errors\Error>;
  public function DisassociateTransitGatewayRouteTable(DisassociateTransitGatewayRouteTableRequest) Awaitable<Errors\Result<DisassociateTransitGatewayRouteTableResult>>;
  public function ModifyInstanceCapacityReservationAttributes(ModifyInstanceCapacityReservationAttributesRequest) Awaitable<Errors\Result<ModifyInstanceCapacityReservationAttributesResult>>;
  public function CreateVpc(CreateVpcRequest) Awaitable<Errors\Result<CreateVpcResult>>;
  public function DeleteVpc(DeleteVpcRequest) Awaitable<Errors\Error>;
  public function GetPasswordData(GetPasswordDataRequest) Awaitable<Errors\Result<GetPasswordDataResult>>;
  public function AdvertiseByoipCidr(AdvertiseByoipCidrRequest) Awaitable<Errors\Result<AdvertiseByoipCidrResult>>;
  public function CreateSnapshots(CreateSnapshotsRequest) Awaitable<Errors\Result<CreateSnapshotsResult>>;
  public function DeleteRouteTable(DeleteRouteTableRequest) Awaitable<Errors\Error>;
  public function DeleteVpcEndpointServiceConfigurations(DeleteVpcEndpointServiceConfigurationsRequest) Awaitable<Errors\Result<DeleteVpcEndpointServiceConfigurationsResult>>;
  public function DescribeDhcpOptions(DescribeDhcpOptionsRequest) Awaitable<Errors\Result<DescribeDhcpOptionsResult>>;
  public function DescribeSnapshotAttribute(DescribeSnapshotAttributeRequest) Awaitable<Errors\Result<DescribeSnapshotAttributeResult>>;
  public function DescribeSpotDatafeedSubscription(DescribeSpotDatafeedSubscriptionRequest) Awaitable<Errors\Result<DescribeSpotDatafeedSubscriptionResult>>;
  public function CreateRouteTable(CreateRouteTableRequest) Awaitable<Errors\Result<CreateRouteTableResult>>;
  public function DeleteLaunchTemplate(DeleteLaunchTemplateRequest) Awaitable<Errors\Result<DeleteLaunchTemplateResult>>;
  public function DescribeImportSnapshotTasks(DescribeImportSnapshotTasksRequest) Awaitable<Errors\Result<DescribeImportSnapshotTasksResult>>;
  public function DescribeVpcAttribute(DescribeVpcAttributeRequest) Awaitable<Errors\Result<DescribeVpcAttributeResult>>;
  public function DisableTransitGatewayRouteTablePropagation(DisableTransitGatewayRouteTablePropagationRequest) Awaitable<Errors\Result<DisableTransitGatewayRouteTablePropagationResult>>;
  public function GetConsoleScreenshot(GetConsoleScreenshotRequest) Awaitable<Errors\Result<GetConsoleScreenshotResult>>;
  public function ModifyEbsDefaultKmsKeyId(ModifyEbsDefaultKmsKeyIdRequest) Awaitable<Errors\Result<ModifyEbsDefaultKmsKeyIdResult>>;
  public function ModifyInstanceCreditSpecification(ModifyInstanceCreditSpecificationRequest) Awaitable<Errors\Result<ModifyInstanceCreditSpecificationResult>>;
  public function AssociateTransitGatewayRouteTable(AssociateTransitGatewayRouteTableRequest) Awaitable<Errors\Result<AssociateTransitGatewayRouteTableResult>>;
  public function CreateNetworkAcl(CreateNetworkAclRequest) Awaitable<Errors\Result<CreateNetworkAclResult>>;
  public function DescribeTransitGatewayMulticastDomains(DescribeTransitGatewayMulticastDomainsRequest) Awaitable<Errors\Result<DescribeTransitGatewayMulticastDomainsResult>>;
  public function RestoreAddressToClassic(RestoreAddressToClassicRequest) Awaitable<Errors\Result<RestoreAddressToClassicResult>>;
  public function StopInstances(StopInstancesRequest) Awaitable<Errors\Result<StopInstancesResult>>;
  public function ConfirmProductInstance(ConfirmProductInstanceRequest) Awaitable<Errors\Result<ConfirmProductInstanceResult>>;
  public function DeregisterImage(DeregisterImageRequest) Awaitable<Errors\Error>;
  public function CreateTransitGatewayRouteTable(CreateTransitGatewayRouteTableRequest) Awaitable<Errors\Result<CreateTransitGatewayRouteTableResult>>;
  public function DeleteVpnGateway(DeleteVpnGatewayRequest) Awaitable<Errors\Error>;
  public function AllocateAddress(AllocateAddressRequest) Awaitable<Errors\Result<AllocateAddressResult>>;
  public function CreateTransitGatewayPeeringAttachment(CreateTransitGatewayPeeringAttachmentRequest) Awaitable<Errors\Result<CreateTransitGatewayPeeringAttachmentResult>>;
  public function CancelConversionTask(CancelConversionRequest) Awaitable<Errors\Error>;
  public function CreateSnapshot(CreateSnapshotRequest) Awaitable<Errors\Result<Snapshot>>;
  public function DeleteClientVpnEndpoint(DeleteClientVpnEndpointRequest) Awaitable<Errors\Result<DeleteClientVpnEndpointResult>>;
  public function DeleteTrafficMirrorTarget(DeleteTrafficMirrorTargetRequest) Awaitable<Errors\Result<DeleteTrafficMirrorTargetResult>>;
  public function DeleteTransitGateway(DeleteTransitGatewayRequest) Awaitable<Errors\Result<DeleteTransitGatewayResult>>;
  public function DescribeSecurityGroups(DescribeSecurityGroupsRequest) Awaitable<Errors\Result<DescribeSecurityGroupsResult>>;
  public function AcceptVpcPeeringConnection(AcceptVpcPeeringConnectionRequest) Awaitable<Errors\Result<AcceptVpcPeeringConnectionResult>>;
  public function AuthorizeSecurityGroupIngress(AuthorizeSecurityGroupIngressRequest) Awaitable<Errors\Error>;
  public function EnableVgwRoutePropagation(EnableVgwRoutePropagationRequest) Awaitable<Errors\Error>;
  public function ModifyVpnTunnelOptions(ModifyVpnTunnelOptionsRequest) Awaitable<Errors\Result<ModifyVpnTunnelOptionsResult>>;
  public function DeregisterInstanceEventNotificationAttributes(DeregisterInstanceEventNotificationAttributesRequest) Awaitable<Errors\Result<DeregisterInstanceEventNotificationAttributesResult>>;
  public function DescribeImportImageTasks(DescribeImportImageTasksRequest) Awaitable<Errors\Result<DescribeImportImageTasksResult>>;
  public function DisableVpcClassicLink(DisableVpcClassicLinkRequest) Awaitable<Errors\Result<DisableVpcClassicLinkResult>>;
  public function PurchaseScheduledInstances(PurchaseScheduledInstancesRequest) Awaitable<Errors\Result<PurchaseScheduledInstancesResult>>;
  public function AssociateVpcCidrBlock(AssociateVpcCidrBlockRequest) Awaitable<Errors\Result<AssociateVpcCidrBlockResult>>;
  public function DeleteNetworkInterface(DeleteNetworkInterfaceRequest) Awaitable<Errors\Error>;
  public function DescribeAccountAttributes(DescribeAccountAttributesRequest) Awaitable<Errors\Result<DescribeAccountAttributesResult>>;
  public function DescribeRegions(DescribeRegionsRequest) Awaitable<Errors\Result<DescribeRegionsResult>>;
  public function ImportInstance(ImportInstanceRequest) Awaitable<Errors\Result<ImportInstanceResult>>;
  public function ImportKeyPair(ImportKeyPairRequest) Awaitable<Errors\Result<ImportKeyPairResult>>;
  public function ReleaseHosts(ReleaseHostsRequest) Awaitable<Errors\Result<ReleaseHostsResult>>;
  public function ResetSnapshotAttribute(ResetSnapshotAttributeRequest) Awaitable<Errors\Error>;
  public function AssociateIamInstanceProfile(AssociateIamInstanceProfileRequest) Awaitable<Errors\Result<AssociateIamInstanceProfileResult>>;
  public function CopyFpgaImage(CopyFpgaImageRequest) Awaitable<Errors\Result<CopyFpgaImageResult>>;
  public function CreateVpcPeeringConnection(CreateVpcPeeringConnectionRequest) Awaitable<Errors\Result<CreateVpcPeeringConnectionResult>>;
  public function DeleteFpgaImage(DeleteFpgaImageRequest) Awaitable<Errors\Result<DeleteFpgaImageResult>>;
  public function DescribeImageAttribute(DescribeImageAttributeRequest) Awaitable<Errors\Result<ImageAttribute>>;
  public function DescribeTrafficMirrorSessions(DescribeTrafficMirrorSessionsRequest) Awaitable<Errors\Result<DescribeTrafficMirrorSessionsResult>>;
  public function DetachClassicLinkVpc(DetachClassicLinkVpcRequest) Awaitable<Errors\Result<DetachClassicLinkVpcResult>>;
  public function DisableVgwRoutePropagation(DisableVgwRoutePropagationRequest) Awaitable<Errors\Error>;
  public function AcceptVpcEndpointConnections(AcceptVpcEndpointConnectionsRequest) Awaitable<Errors\Result<AcceptVpcEndpointConnectionsResult>>;
  public function CreateLaunchTemplate(CreateLaunchTemplateRequest) Awaitable<Errors\Result<CreateLaunchTemplateResult>>;
  public function ImportSnapshot(ImportSnapshotRequest) Awaitable<Errors\Result<ImportSnapshotResult>>;
  public function SearchTransitGatewayMulticastGroups(SearchTransitGatewayMulticastGroupsRequest) Awaitable<Errors\Result<SearchTransitGatewayMulticastGroupsResult>>;
  public function GetHostReservationPurchasePreview(GetHostReservationPurchasePreviewRequest) Awaitable<Errors\Result<GetHostReservationPurchasePreviewResult>>;
  public function ImportImage(ImportImageRequest) Awaitable<Errors\Result<ImportImageResult>>;
  public function AssociateSubnetCidrBlock(AssociateSubnetCidrBlockRequest) Awaitable<Errors\Result<AssociateSubnetCidrBlockResult>>;
  public function CreateTrafficMirrorTarget(CreateTrafficMirrorTargetRequest) Awaitable<Errors\Result<CreateTrafficMirrorTargetResult>>;
  public function CreateSubnet(CreateSubnetRequest) Awaitable<Errors\Result<CreateSubnetResult>>;
  public function DeregisterTransitGatewayMulticastGroupSources(DeregisterTransitGatewayMulticastGroupSourcesRequest) Awaitable<Errors\Result<DeregisterTransitGatewayMulticastGroupSourcesResult>>;
  public function DescribeFpgaImages(DescribeFpgaImagesRequest) Awaitable<Errors\Result<DescribeFpgaImagesResult>>;
  public function DescribeVolumeAttribute(DescribeVolumeAttributeRequest) Awaitable<Errors\Result<DescribeVolumeAttributeResult>>;
  public function ModifyVpcPeeringConnectionOptions(ModifyVpcPeeringConnectionOptionsRequest) Awaitable<Errors\Result<ModifyVpcPeeringConnectionOptionsResult>>;
  public function AssociateTransitGatewayMulticastDomain(AssociateTransitGatewayMulticastDomainRequest) Awaitable<Errors\Result<AssociateTransitGatewayMulticastDomainResult>>;
  public function CreateImage(CreateImageRequest) Awaitable<Errors\Result<CreateImageResult>>;
  public function DisassociateClientVpnTargetNetwork(DisassociateClientVpnTargetNetworkRequest) Awaitable<Errors\Result<DisassociateClientVpnTargetNetworkResult>>;
  public function ExportTransitGatewayRoutes(ExportTransitGatewayRoutesRequest) Awaitable<Errors\Result<ExportTransitGatewayRoutesResult>>;
  public function GetTransitGatewayRouteTablePropagations(GetTransitGatewayRouteTablePropagationsRequest) Awaitable<Errors\Result<GetTransitGatewayRouteTablePropagationsResult>>;
  public function RevokeSecurityGroupIngress(RevokeSecurityGroupIngressRequest) Awaitable<Errors\Error>;
  public function SearchTransitGatewayRoutes(SearchTransitGatewayRoutesRequest) Awaitable<Errors\Result<SearchTransitGatewayRoutesResult>>;
  public function DescribePrincipalIdFormat(DescribePrincipalIdFormatRequest) Awaitable<Errors\Result<DescribePrincipalIdFormatResult>>;
  public function DescribeScheduledInstanceAvailability(DescribeScheduledInstanceAvailabilityRequest) Awaitable<Errors\Result<DescribeScheduledInstanceAvailabilityResult>>;
  public function ModifySpotFleetRequest(ModifySpotFleetRequestRequest) Awaitable<Errors\Result<ModifySpotFleetRequestResponse>>;
  public function AcceptTransitGatewayPeeringAttachment(AcceptTransitGatewayPeeringAttachmentRequest) Awaitable<Errors\Result<AcceptTransitGatewayPeeringAttachmentResult>>;
  public function CreateTrafficMirrorFilterRule(CreateTrafficMirrorFilterRuleRequest) Awaitable<Errors\Result<CreateTrafficMirrorFilterRuleResult>>;
}

class ExportTaskId {
}

class UnsuccessfulItem {
  public string $resource_id;
  public UnsuccessfulItemError $error;
}

class DescribeSpotFleetRequestHistoryMaxResults {
}

class EndpointSet {
}

class IpRangeList {
}

class TunnelOption {
  public string $outside_ip_address;
  public IKEVersionsList $ike_versions;
  public Phase1IntegrityAlgorithmsList $phase_1_integrity_algorithms;
  public Phase1DHGroupNumbersList $phase_1_dh_group_numbers;
  public string $tunnel_inside_cidr;
  public int $phase_1_lifetime_seconds;
  public int $replay_window_size;
  public Phase1EncryptionAlgorithmsList $phase_1_encryption_algorithms;
  public string $pre_shared_key;
  public int $rekey_margin_time_seconds;
  public int $rekey_fuzz_percentage;
  public int $dpd_timeout_seconds;
  public int $phase_2_lifetime_seconds;
  public Phase2EncryptionAlgorithmsList $phase_2_encryption_algorithms;
  public Phase2IntegrityAlgorithmsList $phase_2_integrity_algorithms;
  public Phase2DHGroupNumbersList $phase_2_dh_group_numbers;
}

class TransitGatewayPeeringAttachment {
  public TagList $tags;
  public string $transit_gateway_attachment_id;
  public PeeringTgwInfo $requester_tgw_info;
  public PeeringTgwInfo $accepter_tgw_info;
  public PeeringAttachmentStatus $status;
  public TransitGatewayAttachmentState $state;
  public DateTime $creation_time;
}

class DescribeVpcPeeringConnectionsRequest {
  public DescribeVpcPeeringConnectionsMaxResults $max_results;
  public FilterList $filters;
  public boolean $dry_run;
  public VpcPeeringConnectionIdList $vpc_peering_connection_ids;
  public string $next_token;
}

class ModifyFpgaImageAttributeResult {
  public FpgaImageAttribute $fpga_image_attribute;
}

class SnapshotId {
}

class TransitGatewayMulticastDomainAssociationList {
}

class AuthorizeClientVpnIngressResult {
  public ClientVpnAuthorizationRuleStatus $status;
}

class LaunchTemplateSet {
}

class StartInstancesRequest {
  public InstanceIdStringList $instance_ids;
  public string $additional_info;
  public boolean $dry_run;
}

class TrafficMirrorFilterRuleId {
}

class VpnStaticRouteList {
}

class DescribeVolumesModificationsRequest {
  public string $next_token;
  public int $max_results;
  public boolean $dry_run;
  public VolumeIdStringList $volume_ids;
  public FilterList $filters;
}

class ImportSnapshotTaskId {
}

class Phase1EncryptionAlgorithmsRequestList {
}

class ReplaceNetworkAclAssociationRequest {
  public boolean $dry_run;
  public NetworkAclId $network_acl_id;
  public NetworkAclAssociationId $association_id;
}

class FpgaImageState {
  public FpgaImageStateCode $code;
  public string $message;
}

class InstanceIpv6AddressList {
}

class TargetGroups {
}

class TerminateInstancesRequest {
  public InstanceIdStringList $instance_ids;
  public boolean $dry_run;
}

class DescribeRouteTablesMaxResults {
}

class DescribeTransitGatewaysResult {
  public TransitGatewayList $transit_gateways;
  public string $next_token;
}

class InternetGatewayIdList {
}

class LaunchTemplateConfigList {
}

class Ipv6PoolEc2Id {
}

class LocalGatewayRouteTable {
  public string $local_gateway_route_table_id;
  public LocalGatewayId $local_gateway_id;
  public string $outpost_arn;
  public string $state;
  public TagList $tags;
}

class ResetFpgaImageAttributeRequest {
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
  public ResetFpgaImageAttributeName $attribute;
}

class VpnConnectionOptions {
  public boolean $enable_acceleration;
  public boolean $static_routes_only;
  public TunnelOptionsList $tunnel_options;
}

class LocalGatewayRouteState {
}

class DescribeFleetError {
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
  public string $error_code;
  public string $error_message;
}

class DisableFastSnapshotRestoreStateErrorSet {
}

class EventType {
}

class KmsKeyId {
}

class NetworkInterfacePermissionStateCode {
}

class CapacityReservationOptionsRequest {
  public FleetCapacityReservationUsageStrategy $usage_strategy;
}

class CreateNatGatewayResult {
  public string $client_token;
  public NatGateway $nat_gateway;
}

class DescribeClientVpnAuthorizationRulesResult {
  public AuthorizationRuleSet $authorization_rules;
  public NextToken $next_token;
}

class HibernationFlag {
}

class DeleteVpcPeeringConnectionResult {
  public boolean $return;
}

class NetworkAclIdStringList {
}

class PaymentOption {
}

class TransitGatewayMulticastGroup {
  public string $group_ip_address;
  public string $transit_gateway_attachment_id;
  public string $subnet_id;
  public MembershipType $member_type;
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public string $network_interface_id;
  public boolean $group_member;
  public boolean $group_source;
  public MembershipType $source_type;
}

class IamInstanceProfileAssociation {
  public string $instance_id;
  public IamInstanceProfile $iam_instance_profile;
  public IamInstanceProfileAssociationState $state;
  public DateTime $timestamp;
  public string $association_id;
}

class NatGatewayId {
}

class ReservedInstancesListing {
  public PriceScheduleList $price_schedules;
  public string $reserved_instances_id;
  public DateTime $update_date;
  public string $reserved_instances_listing_id;
  public ListingStatus $status;
  public string $status_message;
  public TagList $tags;
  public string $client_token;
  public DateTime $create_date;
  public InstanceCountList $instance_counts;
}

class TargetNetwork {
  public ValueStringList $security_groups;
  public string $association_id;
  public string $vpc_id;
  public string $target_network_id;
  public string $client_vpn_endpoint_id;
  public AssociationStatus $status;
}

class DeleteNetworkAclRequest {
  public boolean $dry_run;
  public NetworkAclId $network_acl_id;
}

class DescribeDhcpOptionsResult {
  public DhcpOptionsList $dhcp_options;
  public string $next_token;
}

class OfferingTypeValues {
}

class PurchasedScheduledInstanceSet {
}

class ReservedInstancesConfiguration {
  public string $platform;
  public scope $scope;
  public string $availability_zone;
  public int $instance_count;
  public InstanceType $instance_type;
}

class RunInstancesRequest {
  public RamdiskId $ramdisk_id;
  public CapacityReservationSpecification $capacity_reservation_specification;
  public string $client_token;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public InstanceMarketOptionsRequest $instance_market_options;
  public HibernationOptionsRequest $hibernation_options;
  public KeyPairName $key_name;
  public Placement $placement;
  public string $additional_info;
  public CpuOptionsRequest $cpu_options;
  public SecurityGroupIdStringList $security_group_ids;
  public string $user_data;
  public CreditSpecificationRequest $credit_specification;
  public boolean $dry_run;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public string $private_ip_address;
  public InstanceType $instance_type;
  public int $max_count;
  public int $min_count;
  public boolean $ebs_optimized;
  public LaunchTemplateSpecification $launch_template;
  public LicenseSpecificationListRequest $license_specifications;
  public int $ipv_6_address_count;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public SecurityGroupStringList $security_groups;
  public SubnetId $subnet_id;
  public boolean $disable_api_termination;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public KernelId $kernel_id;
  public InstanceMetadataOptionsRequest $metadata_options;
  public ElasticGpuSpecifications $elastic_gpu_specification;
  public ElasticInferenceAccelerators $elastic_inference_accelerators;
  public TagSpecificationList $tag_specifications;
  public BlockDeviceMappingRequestList $block_device_mappings;
  public ImageId $image_id;
  public RunInstancesMonitoringEnabled $monitoring;
}

class VpcIpv6CidrBlockAssociation {
  public string $association_id;
  public string $ipv_6_cidr_block;
  public VpcCidrBlockState $ipv_6_cidr_block_state;
  public string $network_border_group;
  public string $ipv_6_pool;
}

class ClientVpnAuthentication {
  public ClientVpnAuthenticationType $type;
  public DirectoryServiceAuthentication $active_directory;
  public CertificateAuthentication $mutual_authentication;
}

class DisassociateAddressRequest {
  public string $public_ip;
  public boolean $dry_run;
  public ElasticIpAssociationId $association_id;
}

class DiskImage {
  public string $description;
  public DiskImageDetail $image;
  public VolumeDetail $volume;
}

class ModifyCapacityReservationRequest {
  public boolean $dry_run;
  public CapacityReservationId $capacity_reservation_id;
  public int $instance_count;
  public DateTime $end_date;
  public EndDateType $end_date_type;
}

class ModifyInstanceMetadataOptionsRequest {
  public int $http_put_response_hop_limit;
  public InstanceMetadataEndpointState $http_endpoint;
  public boolean $dry_run;
  public InstanceId $instance_id;
  public HttpTokensState $http_tokens;
}

class DeleteLocalGatewayRouteResult {
  public LocalGatewayRoute $route;
}

class DeregisterTransitGatewayMulticastGroupMembersResult {
  public TransitGatewayMulticastDeregisteredGroupMembers $deregistered_multicast_group_members;
}

class DeregisterTransitGatewayMulticastGroupSourcesResult {
  public TransitGatewayMulticastDeregisteredGroupSources $deregistered_multicast_group_sources;
}

class InstanceTypeOfferingsList {
}

class ResourceType {
}

class AttachmentStatus {
}

class ClientVpnEndpointStatus {
  public ClientVpnEndpointStatusCode $code;
  public string $message;
}

class DescribeClientVpnEndpointsRequest {
  public NextToken $next_token;
  public FilterList $filters;
  public boolean $dry_run;
  public ClientVpnEndpointIdList $client_vpn_endpoint_ids;
  public DescribeClientVpnEndpointMaxResults $max_results;
}

class DescribeFleetsInstancesSet {
}

class VpnProtocol {
}

class InstanceInterruptionBehavior {
}

class CreateDefaultVpcRequest {
  public boolean $dry_run;
}

class CreateVpnConnectionResult {
  public VpnConnection $vpn_connection;
}

class DescribeDhcpOptionsRequest {
  public DescribeDhcpOptionsMaxResults $max_results;
  public DhcpOptionsIdStringList $dhcp_options_ids;
  public FilterList $filters;
  public boolean $dry_run;
  public string $next_token;
}

class ImportKeyPairResult {
  public string $key_name;
  public string $key_pair_id;
  public TagList $tags;
  public string $key_fingerprint;
}

class DatafeedSubscriptionState {
}

class DescribeExportTasksResult {
  public ExportTaskList $export_tasks;
}

class FpgaImageAttributeName {
}

class ReportStatusType {
}

class VpnStaticRouteSource {
}

class GetAssociatedIpv6PoolCidrsResult {
  public Ipv6CidrAssociationSet $ipv_6_cidr_associations;
  public string $next_token;
}

class GpuDeviceInfo {
  public GpuDeviceName $name;
  public GpuDeviceManufacturerName $manufacturer;
  public GpuDeviceCount $count;
  public GpuDeviceMemoryInfo $memory_info;
}

class HostProperties {
  public string $instance_type;
  public string $instance_family;
  public int $sockets;
  public int $total_v_cpus;
  public int $cores;
}

class PeeringConnectionOptionsRequest {
  public boolean $allow_dns_resolution_from_remote_vpc;
  public boolean $allow_egress_from_local_classic_link_to_remote_vpc;
  public boolean $allow_egress_from_local_vpc_to_remote_classic_link;
}

class RouteGatewayId {
}

class CreateSecurityGroupRequest {
  public string $description;
  public string $group_name;
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class Phase2IntegrityAlgorithmsRequestList {
}

class PrefixListIdList {
}

class PriceScheduleSpecification {
  public Long $term;
  public CurrencyCodeValues $currency_code;
  public Double $price;
}

class EnableTransitGatewayRouteTablePropagationResult {
  public TransitGatewayPropagation $propagation;
}

class IamInstanceProfile {
  public string $arn;
  public string $id;
}

class TransitGatewayAttachmentAssociation {
  public string $transit_gateway_route_table_id;
  public TransitGatewayAssociationState $state;
}

class VolumeList {
}

class CreateClientVpnRouteResult {
  public ClientVpnRouteStatus $status;
}

class EgressOnlyInternetGateway {
  public InternetGatewayAttachmentList $attachments;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public TagList $tags;
}

class ImportTaskId {
}

class NatGatewayAddress {
  public string $allocation_id;
  public string $network_interface_id;
  public string $private_ip;
  public string $public_ip;
}

class NatGatewayIdStringList {
}

class PlacementGroupStrategyList {
}

class AdvertiseByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class AllocateAddressResult {
  public string $customer_owned_ip;
  public string $customer_owned_ipv_4_pool;
  public string $public_ip;
  public string $allocation_id;
  public string $public_ipv_4_pool;
  public string $network_border_group;
  public DomainType $domain;
}

class CreateTransitGatewayRouteTableResult {
  public TransitGatewayRouteTable $transit_gateway_route_table;
}

class DescribeTrafficMirrorFiltersResult {
  public TrafficMirrorFilterSet $traffic_mirror_filters;
  public string $next_token;
}

class AccountAttributeNameStringList {
}

class DeleteFpgaImageResult {
  public boolean $return;
}

class CancelledSpotInstanceRequest {
  public CancelSpotInstanceRequestState $state;
  public string $spot_instance_request_id;
}

class DeleteTransitGatewayResult {
  public TransitGateway $transit_gateway;
}

class ElasticInferenceAccelerators {
}

class PriceSchedule {
  public boolean $active;
  public CurrencyCodeValues $currency_code;
  public Double $price;
  public Long $term;
}

class TrafficMirrorFilterRuleFieldList {
}

class DescribeCapacityReservationsRequest {
  public DescribeCapacityReservationsMaxResults $max_results;
  public FilterList $filters;
  public boolean $dry_run;
  public CapacityReservationIdSet $capacity_reservation_ids;
  public string $next_token;
}

class DescribeCustomerGatewaysRequest {
  public CustomerGatewayIdStringList $customer_gateway_ids;
  public FilterList $filters;
  public boolean $dry_run;
}

class InferenceDeviceCount {
}

class PrefixListId {
  public string $description;
  public string $prefix_list_id;
}

class SecurityGroupReferences {
}

class DeregisterInstanceEventNotificationAttributesResult {
  public InstanceTagNotificationAttribute $instance_tag_attribute;
}

class DescribeTransitGatewayMulticastDomainsRequest {
  public TransitGatewayMulticastDomainIdStringList $transit_gateway_multicast_domain_ids;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
}

class DisassociateRouteTableRequest {
  public RouteTableAssociationId $association_id;
  public boolean $dry_run;
}

class EnableFastSnapshotRestoresRequest {
  public AvailabilityZoneStringList $availability_zones;
  public SnapshotIdStringList $source_snapshot_ids;
  public boolean $dry_run;
}

class UserIdGroupPairList {
}

class DescribeVpcEndpointConnectionsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
}

class InstanceIdSet {
}

class Location {
}

class RequestSpotLaunchSpecification {
  public RequestSpotLaunchSpecificationSecurityGroupIdList $security_group_ids;
  public RequestSpotLaunchSpecificationSecurityGroupList $security_groups;
  public KeyPairName $key_name;
  public string $addressing_type;
  public KernelId $kernel_id;
  public RunInstancesMonitoringEnabled $monitoring;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public SubnetId $subnet_id;
  public string $user_data;
  public boolean $ebs_optimized;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public ImageId $image_id;
  public RamdiskId $ramdisk_id;
  public BlockDeviceMappingList $block_device_mappings;
  public InstanceType $instance_type;
  public SpotPlacement $placement;
}

class VpnEcmpSupportValue {
}

class TransitGatewaySubnetIdList {
}

class LaunchSpecification {
  public string $image_id;
  public string $user_data;
  public GroupIdentifierList $security_groups;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public string $key_name;
  public string $subnet_id;
  public string $addressing_type;
  public boolean $ebs_optimized;
  public string $kernel_id;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public RunInstancesMonitoringEnabled $monitoring;
  public BlockDeviceMappingList $block_device_mappings;
  public InstanceType $instance_type;
  public SpotPlacement $placement;
  public string $ramdisk_id;
}

class LaunchSpecsList {
}

class Phase1DHGroupNumbersList {
}

class ReservedInstanceIdSet {
}

class InstanceExportDetails {
  public string $instance_id;
  public ExportEnvironment $target_environment;
}

class TransitGatewayRouteTableAssociationList {
}

class InstanceEventId {
}

class LaunchTemplateCapacityReservationSpecificationResponse {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTargetResponse $capacity_reservation_target;
}

class UserIdGroupPairSet {
}

class ConfirmProductInstanceResult {
  public string $owner_id;
  public boolean $return;
}

class InstanceBlockDeviceMapping {
  public string $device_name;
  public EbsInstanceBlockDevice $ebs;
}

class Ipv6CidrAssociationSet {
}

class DescribeFpgaImagesMaxResults {
}

class DescribeNetworkInterfacesResult {
  public string $next_token;
  public NetworkInterfaceList $network_interfaces;
}

class ElasticGpuSpecification {
  public string $type;
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociation {
  public string $state;
  public TagList $tags;
  public LocalGatewayRouteTableVirtualInterfaceGroupAssociationId $local_gateway_route_table_virtual_interface_group_association_id;
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public string $local_gateway_id;
  public LocalGatewayId $local_gateway_route_table_id;
}

class CapacityReservationState {
}

class CurrentGenerationFlag {
}

class DeleteFlowLogsRequest {
  public boolean $dry_run;
  public FlowLogIdList $flow_log_ids;
}

class DeleteTrafficMirrorTargetRequest {
  public TrafficMirrorTargetId $traffic_mirror_target_id;
  public boolean $dry_run;
}

class PrefixListSet {
}

class DescribeVpcAttributeRequest {
  public VpcAttributeName $attribute;
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class ImportImageTaskList {
}

class InstanceStatusList {
}

class ReservedInstancesList {
}

class VpcPeeringConnectionOptionsDescription {
  public boolean $allow_dns_resolution_from_remote_vpc;
  public boolean $allow_egress_from_local_classic_link_to_remote_vpc;
  public boolean $allow_egress_from_local_vpc_to_remote_classic_link;
}

class TargetReservationValue {
  public ReservationValue $reservation_value;
  public TargetConfiguration $target_configuration;
}

class DescribeScheduledInstanceAvailabilityRequest {
  public DescribeScheduledInstanceAvailabilityMaxResults $max_results;
  public int $max_slot_duration_in_hours;
  public int $min_slot_duration_in_hours;
  public string $next_token;
  public ScheduledInstanceRecurrenceRequest $recurrence;
  public boolean $dry_run;
  public FilterList $filters;
  public SlotDateTimeRangeRequest $first_slot_start_time_range;
}

class DescribeSpotPriceHistoryResult {
  public string $next_token;
  public SpotPriceHistoryList $spot_price_history;
}

class DescribeVpnGatewaysResult {
  public VpnGatewayList $vpn_gateways;
}

class InstanceNetworkInterfaceSpecification {
  public SecurityGroupIdStringList $groups;
  public int $ipv_6_address_count;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public string $network_interface_id;
  public string $private_ip_address;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $device_index;
  public boolean $delete_on_termination;
  public string $description;
  public int $secondary_private_ip_address_count;
  public string $subnet_id;
  public string $interface_type;
  public boolean $associate_public_ip_address;
}

class CreateNetworkAclRequest {
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class RootDeviceTypeList {
}

class TrafficMirrorFilterRuleField {
}

class DisassociateTransitGatewayRouteTableRequest {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class ExportTaskState {
}

class InstanceStatusDetails {
  public DateTime $impaired_since;
  public StatusName $name;
  public StatusType $status;
}

class InstanceAttribute {
  public AttributeValue $kernel_id;
  public InstanceBlockDeviceMappingList $block_device_mappings;
  public AttributeBooleanValue $ena_support;
  public AttributeBooleanValue $ebs_optimized;
  public string $instance_id;
  public AttributeValue $root_device_name;
  public AttributeValue $user_data;
  public AttributeValue $sriov_net_support;
  public AttributeValue $instance_type;
  public ProductCodeList $product_codes;
  public AttributeValue $ramdisk_id;
  public AttributeBooleanValue $source_dest_check;
  public GroupIdentifierList $groups;
  public AttributeBooleanValue $disable_api_termination;
  public AttributeValue $instance_initiated_shutdown_behavior;
}

class RequestInstanceTypeList {
}

class DescribeByoipCidrsResult {
  public ByoipCidrSet $byoip_cidrs;
  public string $next_token;
}

class MarketType {
}

class ReplaceRouteTableAssociationRequest {
  public RouteTableAssociationId $association_id;
  public boolean $dry_run;
  public RouteTableId $route_table_id;
}

class Ipv6Pool {
  public string $pool_id;
  public string $description;
  public PoolCidrBlocksSet $pool_cidr_blocks;
  public TagList $tags;
}

class ServiceState {
}

class CreateClientVpnEndpointRequest {
  public TagSpecificationList $tag_specifications;
  public VpcId $vpc_id;
  public int $vpn_port;
  public string $description;
  public boolean $split_tunnel;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public ValueStringList $dns_servers;
  public TransportProtocol $transport_protocol;
  public boolean $dry_run;
  public string $client_token;
  public ClientVpnAuthenticationRequestList $authentication_options;
  public ConnectionLogOptions $connection_log_options;
  public string $client_cidr_block;
  public string $server_certificate_arn;
}

class Phase1IntegrityAlgorithmsRequestList {
}

class ProductDescriptionList {
}

class AllowsMultipleInstanceTypes {
}

class DedicatedHostId {
}

class PoolCidrBlocksSet {
}

class ScheduledInstancesEbs {
  public boolean $delete_on_termination;
  public boolean $encrypted;
  public int $iops;
  public SnapshotId $snapshot_id;
  public int $volume_size;
  public string $volume_type;
}

class AdvertiseByoipCidrRequest {
  public string $cidr;
  public boolean $dry_run;
}

class CreateTrafficMirrorFilterRuleRequest {
  public TrafficDirection $traffic_direction;
  public TrafficMirrorPortRangeRequest $destination_port_range;
  public int $protocol;
  public string $source_cidr_block;
  public boolean $dry_run;
  public string $client_token;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
  public int $rule_number;
  public TrafficMirrorRuleAction $rule_action;
  public TrafficMirrorPortRangeRequest $source_port_range;
  public string $destination_cidr_block;
  public string $description;
}

class CreditSpecification {
  public string $cpu_credits;
}

class ExportTaskS3LocationRequest {
  public string $s_3_bucket;
  public string $s_3_prefix;
}

class TransitGatewayAttachmentList {
}

class CustomerGatewayList {
}

class DnsEntrySet {
}

class Ipv6Address {
}

class ScheduledInstanceIdRequestSet {
}

class CoipPool {
  public CoipPoolId $pool_id;
  public ValueStringList $pool_cidrs;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public TagList $tags;
}

class AssignedPrivateIpAddressList {
}

class ConversionTaskId {
}

class ScheduledInstancesIamInstanceProfile {
  public string $arn;
  public string $name;
}

class Vpc {
  public VpcIpv6CidrBlockAssociationSet $ipv_6_cidr_block_association_set;
  public VpcCidrBlockAssociationSet $cidr_block_association_set;
  public TagList $tags;
  public string $vpc_id;
  public Tenancy $instance_tenancy;
  public VpcState $state;
  public string $owner_id;
  public boolean $is_default;
  public string $cidr_block;
  public string $dhcp_options_id;
}

class DescribeClientVpnConnectionsMaxResults {
}

class FpgaDeviceMemoryInfo {
  public FpgaDeviceMemorySize $size_in_mi_b;
}

class ImportImageLicenseSpecificationListRequest {
}

class TaggableResourceId {
}

class TransitGatewayVpcAttachmentOptions {
  public DnsSupportValue $dns_support;
  public Ipv6SupportValue $ipv_6_support;
}

class AllowedPrincipalSet {
}

class DescribeFlowLogsRequest {
  public string $next_token;
  public boolean $dry_run;
  public FilterList $filter;
  public FlowLogIdList $flow_log_ids;
  public int $max_results;
}

class DescribeHostReservationOfferingsRequest {
  public DescribeHostReservationsMaxResults $max_results;
  public int $min_duration;
  public string $next_token;
  public OfferingId $offering_id;
  public FilterList $filter;
  public int $max_duration;
}

class PlacementGroupState {
}

class DescribeVpcEndpointServicesResult {
  public ValueStringList $service_names;
  public ServiceDetailSet $service_details;
  public string $next_token;
}

class DhcpOptions {
  public DhcpConfigurationList $dhcp_configurations;
  public string $dhcp_options_id;
  public string $owner_id;
  public TagList $tags;
}

class ImportSnapshotTaskIdList {
}

class InferenceDeviceInfoList {
}

class VpcEndpointSecurityGroupIdList {
}

class DescribeVpcClassicLinkDnsSupportNextToken {
}

class TransitGatewayOptions {
  public MulticastSupportValue $multicast_support;
  public Long $amazon_side_asn;
  public DefaultRouteTableAssociationValue $default_route_table_association;
  public string $propagation_default_route_table_id;
  public VpnEcmpSupportValue $vpn_ecmp_support;
  public DnsSupportValue $dns_support;
  public AutoAcceptSharedAttachmentsValue $auto_accept_shared_attachments;
  public string $association_default_route_table_id;
  public DefaultRouteTablePropagationValue $default_route_table_propagation;
}

class VolumeType {
}

class VpcAttachmentList {
}

class PrivateDnsNameConfiguration {
  public string $value;
  public string $name;
  public DnsNameState $state;
  public string $type;
}

class Address {
  public string $network_interface_id;
  public string $private_ip_address;
  public TagList $tags;
  public string $network_border_group;
  public string $allocation_id;
  public string $association_id;
  public DomainType $domain;
  public string $network_interface_owner_id;
  public string $public_ipv_4_pool;
  public string $customer_owned_ip;
  public string $customer_owned_ipv_4_pool;
  public string $instance_id;
  public string $public_ip;
}

class DeleteFleetSuccessSet {
}

class DescribeHostReservationsMaxResults {
}

class DescribeNetworkInterfaceAttributeRequest {
  public NetworkInterfaceAttribute $attribute;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
}

class ElasticGpuIdSet {
}

class Ipv6PoolMaxResults {
}

class SpotDatafeedSubscription {
  public DatafeedSubscriptionState $state;
  public string $bucket;
  public SpotInstanceStateFault $fault;
  public string $owner_id;
  public string $prefix;
}

class LaunchTemplateInstanceMarketOptionsRequest {
  public MarketType $market_type;
  public LaunchTemplateSpotMarketOptionsRequest $spot_options;
}

class ModifyFleetRequest {
  public boolean $dry_run;
  public FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public FleetId $fleet_id;
  public TargetCapacitySpecificationRequest $target_capacity_specification;
}

class BundleTaskList {
}

class DeletePlacementGroupRequest {
  public boolean $dry_run;
  public PlacementGroupName $group_name;
}

class DescribeHostReservationsResult {
  public HostReservationSet $host_reservation_set;
  public string $next_token;
}

class HibernationOptionsRequest {
  public boolean $configured;
}

class AuthorizeSecurityGroupIngressRequest {
  public SecurityGroupName $group_name;
  public int $to_port;
  public boolean $dry_run;
  public string $cidr_ip;
  public int $from_port;
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public SecurityGroupId $group_id;
  public IpPermissionList $ip_permissions;
}

class DisableFastSnapshotRestoresRequest {
  public AvailabilityZoneStringList $availability_zones;
  public SnapshotIdStringList $source_snapshot_ids;
  public boolean $dry_run;
}

class LaunchTemplateBlockDeviceMappingRequest {
  public string $virtual_name;
  public LaunchTemplateEbsBlockDeviceRequest $ebs;
  public string $no_device;
  public string $device_name;
}

class RequestSpotLaunchSpecificationSecurityGroupIdList {
}

class AvailabilityZoneMessageList {
}

class BareMetalFlag {
}

class ScheduledInstancesIpv6Address {
  public Ipv6Address $ipv_6_address;
}

class TransitGatewayList {
}

class DescribeIdFormatResult {
  public IdFormatList $statuses;
}

class ExportClientVpnClientConfigurationRequest {
  public boolean $dry_run;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
}

class Ipv6CidrBlock {
  public string $ipv_6_cidr_block;
}

class LoadPermission {
  public PermissionGroup $group;
  public string $user_id;
}

class StartVpcEndpointServicePrivateDnsVerificationRequest {
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
}

class FleetLaunchTemplateConfigRequest {
  public FleetLaunchTemplateSpecificationRequest $launch_template_specification;
  public FleetLaunchTemplateOverridesListRequest $overrides;
}

class GroupIds {
}

class InstanceType {
}

class NetworkInterfacePermissionId {
}

class AcceptReservedInstancesExchangeQuoteResult {
  public string $exchange_id;
}

class AccountAttributeName {
}

class SpotInstanceInterruptionBehavior {
}

class TargetNetworkSet {
}

class VolumeModificationList {
}

class CreateClientVpnRouteRequest {
  public string $client_token;
  public boolean $dry_run;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $destination_cidr_block;
  public SubnetId $target_vpc_subnet_id;
  public string $description;
}

class CreateTrafficMirrorFilterResult {
  public TrafficMirrorFilter $traffic_mirror_filter;
  public string $client_token;
}

class ElasticInferenceAcceleratorAssociationList {
}

class InstanceStorageInfo {
  public DiskSize $total_size_in_gb;
  public DiskInfoList $disks;
}

class DeregisterInstanceTagAttributeRequest {
  public boolean $include_all_tags_of_instance;
  public InstanceTagKeySet $instance_tag_keys;
}

class LoadPermissionList {
}

class ModifyInstanceCapacityReservationAttributesRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
  public CapacityReservationSpecification $capacity_reservation_specification;
}

class CreateLaunchTemplateRequest {
  public boolean $dry_run;
  public string $client_token;
  public LaunchTemplateName $launch_template_name;
  public VersionDescription $version_description;
  public RequestLaunchTemplateData $launch_template_data;
  public TagSpecificationList $tag_specifications;
}

class ReleaseHostsResult {
  public ResponseHostIdList $successful;
  public UnsuccessfulItemList $unsuccessful;
}

class ReservedInstancesListingId {
}

class TrafficMirrorTargetId {
}

class EbsBlockDevice {
  public boolean $encrypted;
  public boolean $delete_on_termination;
  public int $iops;
  public string $snapshot_id;
  public int $volume_size;
  public VolumeType $volume_type;
  public string $kms_key_id;
}

class Filter {
  public string $name;
  public ValueStringList $values;
}

class SubnetCidrBlockState {
  public SubnetCidrBlockStateCode $state;
  public string $status_message;
}

class ModifyVpcTenancyRequest {
  public VpcId $vpc_id;
  public VpcTenancy $instance_tenancy;
  public boolean $dry_run;
}

class PlacementGroup {
  public int $partition_count;
  public string $group_id;
  public TagList $tags;
  public string $group_name;
  public PlacementGroupState $state;
  public PlacementStrategy $strategy;
}

class ScheduledInstancesBlockDeviceMapping {
  public string $device_name;
  public ScheduledInstancesEbs $ebs;
  public string $no_device;
  public string $virtual_name;
}

class CancelSpotInstanceRequestsRequest {
  public boolean $dry_run;
  public SpotInstanceRequestIdList $spot_instance_request_ids;
}

class DescribeElasticGpusResult {
  public ElasticGpuSet $elastic_gpu_set;
  public int $max_results;
  public string $next_token;
}

class DescribeFpgaImageAttributeRequest {
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
  public FpgaImageAttributeName $attribute;
}

class Ipv6CidrBlockSet {
}

class RequestSpotLaunchSpecificationSecurityGroupList {
}

class VpcPeeringConnectionId {
}

class DescribeAvailabilityZonesResult {
  public AvailabilityZoneList $availability_zones;
}

class DescribeClientVpnRoutesMaxResults {
}

class DhcpConfigurationValueList {
}

class NetworkInterfaceAssociation {
  public string $public_dns_name;
  public string $public_ip;
  public string $allocation_id;
  public string $association_id;
  public string $ip_owner_id;
}

class DisassociateIamInstanceProfileResult {
  public IamInstanceProfileAssociation $iam_instance_profile_association;
}

class LaunchPermissionModifications {
  public LaunchPermissionList $add;
  public LaunchPermissionList $remove;
}

class TransitGatewayRouteState {
}

class VpcClassicLink {
  public boolean $classic_link_enabled;
  public TagList $tags;
  public string $vpc_id;
}

class ConnectionNotificationId {
}

class CreateFleetInstancesSet {
}

class ScheduledInstancesIpv6AddressList {
}

class ElasticGpuSet {
}

class OnDemandOptionsRequest {
  public CapacityReservationOptionsRequest $capacity_reservation_options;
  public boolean $single_instance_type;
  public boolean $single_availability_zone;
  public int $min_target_capacity;
  public string $max_total_price;
  public FleetOnDemandAllocationStrategy $allocation_strategy;
}

class Phase2EncryptionAlgorithmsRequestList {
}

class HistoryRecords {
}

class InferenceDeviceManufacturerName {
}

class NetworkInterfaceId {
}

class NextToken {
}

class HostList {
}

class VpcFlowLogId {
}

class VpcTenancy {
}

class AcceptTransitGatewayVpcAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class ExportClientVpnClientConfigurationResult {
  public string $client_configuration;
}

class InstanceUsageSet {
}

class ModifyVpnTunnelCertificateRequest {
  public VpnConnectionId $vpn_connection_id;
  public string $vpn_tunnel_outside_ip_address;
  public boolean $dry_run;
}

class ReservationList {
}

class ClientVpnRouteStatus {
  public ClientVpnRouteStatusCode $code;
  public string $message;
}

class CreatePlacementGroupRequest {
  public boolean $dry_run;
  public string $group_name;
  public PlacementStrategy $strategy;
  public int $partition_count;
  public TagSpecificationList $tag_specifications;
}

class DescribePrincipalIdFormatRequest {
  public ResourceList $resources;
  public DescribePrincipalIdFormatMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
}

class PlacementGroupName {
}

class S3Storage {
  public Blob $upload_policy;
  public string $upload_policy_signature;
  public string $aws_access_key_id;
  public string $bucket;
  public string $prefix;
}

class AuthorizeClientVpnIngressRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $target_network_cidr;
  public string $access_group_id;
  public boolean $authorize_all_groups;
  public string $description;
  public string $client_token;
  public boolean $dry_run;
}

class ElasticGpuSpecifications {
}

class PurchaseReservedInstancesOfferingResult {
  public string $reserved_instances_id;
}

class RequestHostIdList {
}

class ClientData {
  public DateTime $upload_start;
  public string $comment;
  public DateTime $upload_end;
  public Double $upload_size;
}

class GetConsoleScreenshotRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
  public boolean $wake_up;
}

class ModifyVpcEndpointResult {
  public boolean $return;
}

class ProcessorSustainedClockSpeed {
}

class CurrencyCodeValues {
}

class DescribeInstanceStatusRequest {
  public FilterList $filters;
  public InstanceIdStringList $instance_ids;
  public int $max_results;
  public string $next_token;
  public boolean $dry_run;
  public boolean $include_all_instances;
}

class ImageId {
}

class LocalGatewayRouteTableVpcAssociationSet {
}

class RuleAction {
}

class InstanceMetadataEndpointState {
}

class ModifyEbsDefaultKmsKeyIdRequest {
  public KmsKeyId $kms_key_id;
  public boolean $dry_run;
}

class ModifySubnetAttributeRequest {
  public AttributeBooleanValue $assign_ipv_6_address_on_creation;
  public AttributeBooleanValue $map_public_ip_on_launch;
  public SubnetId $subnet_id;
}

class PublicIpv4PoolRange {
  public string $first_address;
  public string $last_address;
  public int $address_count;
  public int $available_address_count;
}

class GetConsoleOutputResult {
  public string $instance_id;
  public string $output;
  public DateTime $timestamp;
}

class ModifyImageAttributeRequest {
  public LaunchPermissionModifications $launch_permission;
  public ProductCodeStringList $product_codes;
  public UserGroupStringList $user_groups;
  public UserIdStringList $user_ids;
  public string $value;
  public string $attribute;
  public ImageId $image_id;
  public OperationType $operation_type;
  public boolean $dry_run;
  public AttributeValue $description;
}

class ModifyInstanceCreditSpecificationRequest {
  public boolean $dry_run;
  public string $client_token;
  public InstanceCreditSpecificationListRequest $instance_credit_specifications;
}

class SpotFleetRequestIdList {
}

class ClientVpnAuthenticationList {
}

class CreateDefaultSubnetResult {
  public Subnet $subnet;
}

class CreateInstanceExportTaskResult {
  public ExportTask $export_task;
}

class IKEVersionsListValue {
  public string $value;
}

class SecurityGroupList {
}

class ClientVpnConnectionStatusCode {
}

class DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsResult {
  public LocalGatewayRouteTableVirtualInterfaceGroupAssociationSet $local_gateway_route_table_virtual_interface_group_associations;
  public string $next_token;
}

class ElasticGpus {
  public TagList $tags;
  public string $elastic_gpu_id;
  public string $availability_zone;
  public string $elastic_gpu_type;
  public ElasticGpuHealth $elastic_gpu_health;
  public ElasticGpuState $elastic_gpu_state;
  public string $instance_id;
}

class GpuDeviceInfoList {
}

class DescribeInternetGatewaysRequest {
  public FilterList $filters;
  public boolean $dry_run;
  public InternetGatewayIdList $internet_gateway_ids;
  public string $next_token;
  public DescribeInternetGatewaysMaxResults $max_results;
}

class ImportSnapshotTask {
  public string $description;
  public string $import_task_id;
  public SnapshotTaskDetail $snapshot_task_detail;
  public TagList $tags;
}

class SearchTransitGatewayMulticastGroupsRequest {
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public FilterList $filters;
}

class InstanceLifecycle {
}

class KeyPairId {
}

class MaxNetworkInterfaces {
}

class PublicIpv4PoolIdStringList {
}

class CreateFlowLogsResult {
  public string $client_token;
  public ValueStringList $flow_log_ids;
  public UnsuccessfulItemSet $unsuccessful;
}

class DescribeIdentityIdFormatRequest {
  public string $principal_arn;
  public string $resource;
}

class DescribeScheduledInstancesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public ScheduledInstanceIdRequestSet $scheduled_instance_ids;
  public SlotStartTimeRangeRequest $slot_start_time_range;
}

class DescribeVolumesRequest {
  public FilterList $filters;
  public VolumeIdStringList $volume_ids;
  public boolean $dry_run;
  public int $max_results;
  public string $next_token;
}

class DescribeVpcEndpointConnectionsResult {
  public VpcEndpointConnectionSet $vpc_endpoint_connections;
  public string $next_token;
}

class DisableFastSnapshotRestoreSuccessSet {
}

class DisassociateTransitGatewayMulticastDomainRequest {
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ValueStringList $subnet_ids;
  public boolean $dry_run;
}

class ReplaceIamInstanceProfileAssociationRequest {
  public IamInstanceProfileSpecification $iam_instance_profile;
  public IamInstanceProfileAssociationId $association_id;
}

class CancelSpotFleetRequestsErrorItem {
  public CancelSpotFleetRequestsError $error;
  public string $spot_fleet_request_id;
}

class Phase1IntegrityAlgorithmsListValue {
  public string $value;
}

class ReservedInstancesModificationResult {
  public string $reserved_instances_id;
  public ReservedInstancesConfiguration $target_configuration;
}

class ResponseHostIdList {
}

class LaunchTemplateOverridesList {
}

class OnDemandOptions {
  public boolean $single_instance_type;
  public boolean $single_availability_zone;
  public int $min_target_capacity;
  public string $max_total_price;
  public FleetOnDemandAllocationStrategy $allocation_strategy;
  public CapacityReservationOptions $capacity_reservation_options;
}

class RegionNameStringList {
}

class RouteOrigin {
}

class DeleteSnapshotRequest {
  public SnapshotId $snapshot_id;
  public boolean $dry_run;
}

class DescribeConversionTasksResult {
  public DescribeConversionTaskList $conversion_tasks;
}

class DescribeStaleSecurityGroupsRequest {
  public boolean $dry_run;
  public DescribeStaleSecurityGroupsMaxResults $max_results;
  public DescribeStaleSecurityGroupsNextToken $next_token;
  public VpcId $vpc_id;
}

class EnableVpcClassicLinkDnsSupportRequest {
  public VpcId $vpc_id;
}

class InstanceBlockDeviceMappingSpecification {
  public string $no_device;
  public string $virtual_name;
  public string $device_name;
  public EbsInstanceBlockDeviceSpecification $ebs;
}

class LicenseSpecificationListRequest {
}

class TransitGatewayRouteTableId {
}

class VirtualizationType {
}

class SnapshotAttributeName {
}

class UnsuccessfulItemList {
}

class CapacityReservationSpecificationResponse {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTargetResponse $capacity_reservation_target;
}

class CreateTagsRequest {
  public boolean $dry_run;
  public ResourceIdList $resources;
  public TagList $tags;
}

class ExportTaskS3Location {
  public string $s_3_bucket;
  public string $s_3_prefix;
}

class Phase2IntegrityAlgorithmsList {
}

class DescribePlacementGroupsResult {
  public PlacementGroupList $placement_groups;
}

class Double {
}

class VpcCidrBlockStateCode {
}

class DescribeSpotDatafeedSubscriptionResult {
  public SpotDatafeedSubscription $spot_datafeed_subscription;
}

class GetTransitGatewayRouteTableAssociationsResult {
  public TransitGatewayRouteTableAssociationList $associations;
  public string $next_token;
}

class Phase2IntegrityAlgorithmsListValue {
  public string $value;
}

class TransitGatewayMulticastDomainId {
}

class PrefixListResourceId {
}

class ProductCodeStringList {
}

class Storage {
  public S3Storage $s_3;
}

class VpcPeeringConnectionIdList {
}

class ClassicLoadBalancers {
}

class DescribeElasticGpusRequest {
  public ElasticGpuIdSet $elastic_gpu_ids;
  public boolean $dry_run;
  public FilterList $filters;
  public DescribeElasticGpusMaxResults $max_results;
  public string $next_token;
}

class ExportTaskIdStringList {
}

class ImageIdStringList {
}

class ScheduledInstanceId {
}

class CreateLocalGatewayRouteResult {
  public LocalGatewayRoute $route;
}

class DescribeInstanceCreditSpecificationsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public InstanceIdStringList $instance_ids;
  public DescribeInstanceCreditSpecificationsMaxResults $max_results;
  public string $next_token;
}

class DescribeTransitGatewayMulticastDomainsResult {
  public TransitGatewayMulticastDomainList $transit_gateway_multicast_domains;
  public string $next_token;
}

class FpgaImageId {
}

class CreateVolumePermissionModifications {
  public CreateVolumePermissionList $add;
  public CreateVolumePermissionList $remove;
}

class CustomerGateway {
  public string $state;
  public string $type;
  public string $device_name;
  public TagList $tags;
  public string $bgp_asn;
  public string $customer_gateway_id;
  public string $ip_address;
  public string $certificate_arn;
}

class LocalGatewayIdSet {
}

class ModifyTrafficMirrorSessionRequest {
  public int $virtual_network_id;
  public boolean $dry_run;
  public TrafficMirrorTargetId $traffic_mirror_target_id;
  public int $packet_length;
  public int $session_number;
  public TrafficMirrorSessionFieldList $remove_fields;
  public TrafficMirrorSessionId $traffic_mirror_session_id;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
  public string $description;
}

class EventInformation {
  public string $event_description;
  public string $event_sub_type;
  public string $instance_id;
}

class ResponseError {
  public string $message;
  public LaunchTemplateErrorCode $code;
}

class RestoreAddressToClassicRequest {
  public boolean $dry_run;
  public string $public_ip;
}

class TransitGatewayAttachmentResourceType {
}

class AttachNetworkInterfaceRequest {
  public InstanceId $instance_id;
  public NetworkInterfaceId $network_interface_id;
  public int $device_index;
  public boolean $dry_run;
}

class ExportImageResult {
  public DiskImageFormat $disk_image_format;
  public string $role_name;
  public string $status;
  public string $description;
  public string $export_image_task_id;
  public string $image_id;
  public string $progress;
  public ExportTaskS3Location $s_3_export_location;
  public string $status_message;
}

class ModifyAvailabilityZoneGroupRequest {
  public string $group_name;
  public ModifyAvailabilityZoneOptInStatus $opt_in_status;
  public boolean $dry_run;
}

class DisableFastSnapshotRestoresResult {
  public DisableFastSnapshotRestoreErrorSet $unsuccessful;
  public DisableFastSnapshotRestoreSuccessSet $successful;
}

class LocalGatewayRouteType {
}

class TunnelOptionsList {
}

class UserIdStringList {
}

class CreateLaunchTemplateVersionRequest {
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public string $source_version;
  public VersionDescription $version_description;
  public RequestLaunchTemplateData $launch_template_data;
  public boolean $dry_run;
  public string $client_token;
}

class ModifyDefaultCreditSpecificationRequest {
  public boolean $dry_run;
  public UnlimitedSupportedInstanceFamily $instance_family;
  public string $cpu_credits;
}

class ModifySpotFleetRequestRequest {
  public int $on_demand_target_capacity;
  public ExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public SpotFleetRequestId $spot_fleet_request_id;
  public int $target_capacity;
}

class Reservation {
  public string $reservation_id;
  public GroupIdentifierList $groups;
  public InstanceList $instances;
  public string $owner_id;
  public string $requester_id;
}

class Subnet {
  public string $availability_zone;
  public string $availability_zone_id;
  public string $subnet_id;
  public string $vpc_id;
  public SubnetIpv6CidrBlockAssociationSet $ipv_6_cidr_block_association_set;
  public string $subnet_arn;
  public boolean $default_for_az;
  public boolean $map_public_ip_on_launch;
  public boolean $assign_ipv_6_address_on_creation;
  public SubnetState $state;
  public string $owner_id;
  public string $outpost_arn;
  public int $available_ip_address_count;
  public string $cidr_block;
  public TagList $tags;
}

class TrafficMirrorNetworkService {
}

class VpcEndpointType {
}

class DeleteRouteRequest {
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public boolean $dry_run;
  public RouteTableId $route_table_id;
}

class InferenceAcceleratorInfo {
  public InferenceDeviceInfoList $accelerators;
}

class LocalGatewayRouteTableVpcAssociation {
  public LocalGatewayRouteTableVpcAssociationId $local_gateway_route_table_vpc_association_id;
  public string $local_gateway_route_table_id;
  public string $local_gateway_id;
  public string $vpc_id;
  public string $state;
  public TagList $tags;
}

class ScheduledInstancesNetworkInterfaceSet {
}

class RequestHostIdSet {
}

class SubnetCidrAssociationId {
}

class TransitGatewayMulticastDomainList {
}

class TransitGatewayRouteAttachmentList {
}

class AssignIpv6AddressesResult {
  public Ipv6AddressList $assigned_ipv_6_addresses;
  public string $network_interface_id;
}

class AssociateClientVpnTargetNetworkRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public SubnetId $subnet_id;
  public string $client_token;
  public boolean $dry_run;
}

class DnsEntry {
  public string $dns_name;
  public string $hosted_zone_id;
}

class LaunchTemplateLicenseConfiguration {
  public string $license_configuration_arn;
}

class DiskSize {
}

class EnableVpcClassicLinkRequest {
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class KeyPairName {
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociationId {
}

class ClassicLoadBalancersConfig {
  public ClassicLoadBalancers $classic_load_balancers;
}

class DescribeSecurityGroupReferencesResult {
  public SecurityGroupReferences $security_group_reference_set;
}

class DescribeTransitGatewaysRequest {
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public TransitGatewayIdStringList $transit_gateway_ids;
  public FilterList $filters;
}

class DirectoryServiceAuthentication {
  public string $directory_id;
}

class LocalGatewayRouteTableVpcAssociationIdSet {
}

class VpcEndpointConnectionSet {
}

class VpcEndpointServiceIdList {
}

class CancelBatchErrorCode {
}

class HttpTokensState {
}

class ReservedInstancesId {
  public string $reserved_instances_id;
}

class InstanceList {
}

class InstanceMetadataOptionsRequest {
  public HttpTokensState $http_tokens;
  public int $http_put_response_hop_limit;
  public InstanceMetadataEndpointState $http_endpoint;
}

class LocalGatewayRouteTableVpcAssociationId {
}

class ModifyVpcPeeringConnectionOptionsResult {
  public PeeringConnectionOptions $accepter_peering_connection_options;
  public PeeringConnectionOptions $requester_peering_connection_options;
}

class ClientVpnRouteStatusCode {
}

class DeleteTransitGatewayRouteTableRequest {
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public boolean $dry_run;
}

class EbsInstanceBlockDevice {
  public DateTime $attach_time;
  public boolean $delete_on_termination;
  public AttachmentStatus $status;
  public string $volume_id;
}

class FleetIdSet {
}

class PlacementGroupStringList {
}

class WithdrawByoipCidrRequest {
  public string $cidr;
  public boolean $dry_run;
}

class CancelSpotFleetRequestsResponse {
  public CancelSpotFleetRequestsSuccessSet $successful_fleet_requests;
  public CancelSpotFleetRequestsErrorSet $unsuccessful_fleet_requests;
}

class LocalGatewayVirtualInterfaceIdSet {
}

class TransitGatewayMulitcastDomainAssociationState {
}

class TransitGatewayRouteTable {
  public string $transit_gateway_route_table_id;
  public string $transit_gateway_id;
  public TransitGatewayRouteTableState $state;
  public boolean $default_association_route_table;
  public boolean $default_propagation_route_table;
  public DateTime $creation_time;
  public TagList $tags;
}

class AvailabilityZoneState {
}

class ModifyInstanceMetadataOptionsResult {
  public InstanceMetadataOptionsResponse $instance_metadata_options;
  public string $instance_id;
}

class TransitGatewayAttachmentIdStringList {
}

class AttachVolumeRequest {
  public string $device;
  public InstanceId $instance_id;
  public VolumeId $volume_id;
  public boolean $dry_run;
}

class CapacityReservationPreference {
}

class scope {
}

class EnableTransitGatewayRouteTablePropagationRequest {
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
}

class ImportImageTaskId {
}

class NetworkInfo {
  public MaxIpv6AddrPerInterface $ipv_6_addresses_per_interface;
  public Ipv6Flag $ipv_6_supported;
  public EnaSupport $ena_support;
  public NetworkPerformance $network_performance;
  public MaxNetworkInterfaces $maximum_network_interfaces;
  public MaxIpv4AddrPerInterface $ipv_4_addresses_per_interface;
}

class NetworkInterfaceAttachment {
  public string $attachment_id;
  public boolean $delete_on_termination;
  public int $device_index;
  public string $instance_id;
  public string $instance_owner_id;
  public AttachmentStatus $status;
  public DateTime $attach_time;
}

class SnapshotState {
}

class CreateSpotDatafeedSubscriptionResult {
  public SpotDatafeedSubscription $spot_datafeed_subscription;
}

class DeleteTrafficMirrorSessionRequest {
  public TrafficMirrorSessionId $traffic_mirror_session_id;
  public boolean $dry_run;
}

class FleetExcessCapacityTerminationPolicy {
}

class ImportImageLicenseConfigurationResponse {
  public string $license_configuration_arn;
}

class DeleteDhcpOptionsRequest {
  public DhcpOptionsId $dhcp_options_id;
  public boolean $dry_run;
}

class DescribeVpcClassicLinkRequest {
  public VpcClassicLinkIdList $vpc_ids;
  public FilterList $filters;
  public boolean $dry_run;
}

class DetachClassicLinkVpcResult {
  public boolean $return;
}

class CreateTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomain $transit_gateway_multicast_domain;
}

class IamInstanceProfileAssociationSet {
}

class PlacementResponse {
  public string $group_name;
}

class ElasticGpuAssociation {
  public string $elastic_gpu_association_state;
  public string $elastic_gpu_association_time;
  public string $elastic_gpu_id;
  public string $elastic_gpu_association_id;
}

class ImportInstanceResult {
  public ConversionTask $conversion_task;
}

class TransitGatewayRoute {
  public string $destination_cidr_block;
  public TransitGatewayRouteAttachmentList $transit_gateway_attachments;
  public TransitGatewayRouteType $type;
  public TransitGatewayRouteState $state;
}

class UnmonitorInstancesResult {
  public InstanceMonitoringList $instance_monitorings;
}

class CreateTransitGatewayRequest {
  public boolean $dry_run;
  public string $description;
  public TransitGatewayRequestOptions $options;
  public TagSpecificationList $tag_specifications;
}

class DescribeVpcPeeringConnectionsMaxResults {
}

class StaleIpPermissionSet {
}

class DescribeTrafficMirrorTargetsResult {
  public TrafficMirrorTargetSet $traffic_mirror_targets;
  public string $next_token;
}

class Phase1DHGroupNumbersListValue {
  public int $value;
}

class AllocateHostsResult {
  public ResponseHostIdList $host_ids;
}

class DeleteNetworkAclEntryRequest {
  public boolean $dry_run;
  public boolean $egress;
  public NetworkAclId $network_acl_id;
  public int $rule_number;
}

class DescribeClassicLinkInstancesResult {
  public string $next_token;
  public ClassicLinkInstanceList $instances;
}

class DescribeSnapshotAttributeRequest {
  public SnapshotId $snapshot_id;
  public boolean $dry_run;
  public SnapshotAttributeName $attribute;
}

class LaunchTemplateLicenseSpecificationListRequest {
}

class ReservedInstances {
  public Float $usage_price;
  public OfferingClassType $offering_class;
  public OfferingTypeValues $offering_type;
  public string $availability_zone;
  public CurrencyCodeValues $currency_code;
  public RecurringChargesList $recurring_charges;
  public ReservedInstanceState $state;
  public Float $fixed_price;
  public int $instance_count;
  public InstanceType $instance_type;
  public string $reserved_instances_id;
  public DateTime $start;
  public Long $duration;
  public RIProductDescription $product_description;
  public Tenancy $instance_tenancy;
  public scope $scope;
  public TagList $tags;
  public DateTime $end;
}

class MemoryInfo {
  public MemorySize $size_in_mi_b;
}

class ProductCodeValues {
}

class AssociateTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomainAssociations $associations;
}

class DescribeVpcsResult {
  public VpcList $vpcs;
  public string $next_token;
}

class LoadPermissionRequest {
  public PermissionGroup $group;
  public string $user_id;
}

class MaxResults {
}

class DescribeClientVpnTargetNetworksRequest {
  public DescribeClientVpnTargetNetworksMaxResults $max_results;
  public NextToken $next_token;
  public FilterList $filters;
  public boolean $dry_run;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public ValueStringList $association_ids;
}

class GetConsoleScreenshotResult {
  public string $image_data;
  public string $instance_id;
}

class LaunchTemplateTagSpecificationRequestList {
}

class DescribeVpcEndpointsRequest {
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public boolean $dry_run;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class ModifyVpcEndpointRequest {
  public VpcEndpointSubnetIdList $add_subnet_ids;
  public VpcEndpointSubnetIdList $remove_subnet_ids;
  public VpcEndpointId $vpc_endpoint_id;
  public VpcEndpointRouteTableIdList $add_route_table_ids;
  public VpcEndpointRouteTableIdList $remove_route_table_ids;
  public VpcEndpointSecurityGroupIdList $add_security_group_ids;
  public VpcEndpointSecurityGroupIdList $remove_security_group_ids;
  public boolean $private_dns_enabled;
  public boolean $dry_run;
  public boolean $reset_policy;
  public string $policy_document;
}

class ReservedInstancesModificationResultList {
}

class TransitGatewayRouteTableIdStringList {
}

class AllocateHostsRequest {
  public string $instance_family;
  public int $quantity;
  public TagSpecificationList $tag_specifications;
  public HostRecovery $host_recovery;
  public AutoPlacement $auto_placement;
  public string $availability_zone;
  public string $client_token;
  public string $instance_type;
}

class CreateSubnetRequest {
  public string $ipv_6_cidr_block;
  public string $outpost_arn;
  public VpcId $vpc_id;
  public boolean $dry_run;
  public string $availability_zone;
  public string $availability_zone_id;
  public string $cidr_block;
}

class DescribeClientVpnTargetNetworksMaxResults {
}

class DescribeVpcsMaxResults {
}

class ServiceConfiguration {
  public ServiceState $service_state;
  public boolean $acceptance_required;
  public boolean $manages_vpc_endpoints;
  public PrivateDnsNameConfiguration $private_dns_name_configuration;
  public ValueStringList $network_load_balancer_arns;
  public ValueStringList $base_endpoint_dns_names;
  public string $private_dns_name;
  public TagList $tags;
  public ServiceTypeDetailSet $service_type;
  public string $service_id;
  public string $service_name;
  public ValueStringList $availability_zones;
}

class Snapshot {
  public boolean $encrypted;
  public string $kms_key_id;
  public string $progress;
  public int $volume_size;
  public string $description;
  public string $volume_id;
  public TagList $tags;
  public string $snapshot_id;
  public string $state_message;
  public string $owner_alias;
  public string $data_encryption_key_id;
  public string $owner_id;
  public DateTime $start_time;
  public SnapshotState $state;
}

class DeleteEgressOnlyInternetGatewayResult {
  public boolean $return_code;
}

class DeleteTrafficMirrorFilterRuleRequest {
  public TrafficMirrorFilterRuleId $traffic_mirror_filter_rule_id;
  public boolean $dry_run;
}

class DeleteTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomain $transit_gateway_multicast_domain;
}

class LaunchTemplateTagSpecificationRequest {
  public ResourceType $resource_type;
  public TagList $tags;
}

class FleetLaunchTemplateConfig {
  public FleetLaunchTemplateSpecification $launch_template_specification;
  public FleetLaunchTemplateOverridesList $overrides;
}

class StaleIpPermission {
  public PrefixListIdSet $prefix_list_ids;
  public int $to_port;
  public UserIdGroupPairSet $user_id_group_pairs;
  public int $from_port;
  public string $ip_protocol;
  public IpRanges $ip_ranges;
}

class TargetReservationValueSet {
}

class TelemetryStatus {
}

class TerminateConnectionStatus {
  public string $connection_id;
  public ClientVpnConnectionStatus $previous_status;
  public ClientVpnConnectionStatus $current_status;
}

class TransitGatewayRequestOptions {
  public DnsSupportValue $dns_support;
  public MulticastSupportValue $multicast_support;
  public Long $amazon_side_asn;
  public AutoAcceptSharedAttachmentsValue $auto_accept_shared_attachments;
  public DefaultRouteTableAssociationValue $default_route_table_association;
  public DefaultRouteTablePropagationValue $default_route_table_propagation;
  public VpnEcmpSupportValue $vpn_ecmp_support;
}

class DescribeReservedInstancesRequest {
  public FilterList $filters;
  public OfferingClassType $offering_class;
  public ReservedInstancesIdStringList $reserved_instances_ids;
  public boolean $dry_run;
  public OfferingTypeValues $offering_type;
}

class GetTransitGatewayAttachmentPropagationsResult {
  public string $next_token;
  public TransitGatewayAttachmentPropagationList $transit_gateway_attachment_propagations;
}

class RejectTransitGatewayVpcAttachmentRequest {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
}

class ReservedInstancesModificationList {
}

class CreateNetworkAclResult {
  public NetworkAcl $network_acl;
}

class DescribeSubnetsRequest {
  public FilterList $filters;
  public SubnetIdStringList $subnet_ids;
  public boolean $dry_run;
  public string $next_token;
  public DescribeSubnetsMaxResults $max_results;
}

class UnsuccessfulItemSet {
}

class ConnectionNotificationState {
}

class CreateVpcEndpointServiceConfigurationResult {
  public ServiceConfiguration $service_configuration;
  public string $client_token;
}

class DomainType {
}

class ScheduledInstanceRecurrenceRequest {
  public string $occurrence_unit;
  public string $frequency;
  public int $interval;
  public OccurrenceDayRequestSet $occurrence_days;
  public boolean $occurrence_relative_to_end;
}

class AllocationIdList {
}

class BillingProductList {
}

class DhcpOptionsId {
}

class GetCapacityReservationUsageResult {
  public CapacityReservationState $state;
  public InstanceUsageSet $instance_usages;
  public string $next_token;
  public string $capacity_reservation_id;
  public string $instance_type;
  public int $total_instance_count;
  public int $available_instance_count;
}

class TargetGroupsConfig {
  public TargetGroups $target_groups;
}

class BlobAttributeValue {
  public Blob $value;
}

class DescribeExportImageTasksResult {
  public ExportImageTaskList $export_image_tasks;
  public NextToken $next_token;
}

class LaunchTemplateElasticInferenceAccelerator {
  public string $type;
  public LaunchTemplateElasticInferenceAcceleratorCount $count;
}

class PoolCidrBlock {
  public string $cidr;
}

class AssociatedTargetNetwork {
  public string $network_id;
  public AssociatedNetworkType $network_type;
}

class AvailabilityZoneOptInStatus {
}

class BurstablePerformanceFlag {
}

class TransitGatewayIdStringList {
}

class VpcId {
}

class DhcpOptionsIdStringList {
}

class MovingAddressStatus {
  public MoveStatus $move_status;
  public string $public_ip;
}

class OnDemandAllocationStrategy {
}

class TransitGatewayAttachment {
  public TransitGatewayAttachmentState $state;
  public DateTime $creation_time;
  public string $transit_gateway_owner_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public string $resource_owner_id;
  public string $resource_id;
  public TransitGatewayAttachmentAssociation $association;
  public TagList $tags;
  public string $transit_gateway_attachment_id;
  public string $transit_gateway_id;
}

class DeleteLaunchTemplateVersionsResult {
  public DeleteLaunchTemplateVersionsResponseSuccessSet $successfully_deleted_launch_template_versions;
  public DeleteLaunchTemplateVersionsResponseErrorSet $unsuccessfully_deleted_launch_template_versions;
}

class DescribeCoipPoolsRequest {
  public FilterList $filters;
  public CoipPoolMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public CoipPoolIdSet $pool_ids;
}

class GetReservedInstancesExchangeQuoteRequest {
  public boolean $dry_run;
  public ReservedInstanceIdSet $reserved_instance_ids;
  public TargetConfigurationRequestSet $target_configurations;
}

class LaunchTemplateInstanceMarketOptions {
  public MarketType $market_type;
  public LaunchTemplateSpotMarketOptions $spot_options;
}

class CopyTagsFromSource {
}

class DiskImageList {
}

class ImportImageLicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class PublicIpStringList {
}

class ReservedInstancesOfferingList {
}

class SpotInstanceRequestIdList {
}

class AllowedPrincipal {
  public PrincipalType $principal_type;
  public string $principal;
}

class DeleteVpnConnectionRequest {
  public VpnConnectionId $vpn_connection_id;
  public boolean $dry_run;
}

class MonitoringState {
}

class Phase2EncryptionAlgorithmsRequestListValue {
  public string $value;
}

class GetTransitGatewayRouteTableAssociationsRequest {
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
}

class Phase1IntegrityAlgorithmsList {
}

class VpcPeeringConnectionVpcInfo {
  public string $cidr_block;
  public Ipv6CidrBlockSet $ipv_6_cidr_block_set;
  public CidrBlockSet $cidr_block_set;
  public string $owner_id;
  public VpcPeeringConnectionOptionsDescription $peering_options;
  public string $vpc_id;
  public string $region;
}

class DescribeReservedInstancesModificationsRequest {
  public FilterList $filters;
  public ReservedInstancesModificationIdStringList $reserved_instances_modification_ids;
  public string $next_token;
}

class DescribeSecurityGroupReferencesRequest {
  public boolean $dry_run;
  public GroupIds $group_id;
}

class ServiceTypeDetailSet {
}

class BundleInstanceResult {
  public BundleTask $bundle_task;
}

class DeleteVpcEndpointConnectionNotificationsRequest {
  public boolean $dry_run;
  public ValueStringList $connection_notification_ids;
}

class RejectVpcEndpointConnectionsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class RevokeClientVpnIngressResult {
  public ClientVpnAuthorizationRuleStatus $status;
}

class CreateTrafficMirrorSessionRequest {
  public NetworkInterfaceId $network_interface_id;
  public int $packet_length;
  public int $session_number;
  public string $description;
  public string $client_token;
  public TrafficMirrorTargetId $traffic_mirror_target_id;
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
  public int $virtual_network_id;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
}

class ElasticIpAssociationId {
}

class GetLaunchTemplateDataResult {
  public ResponseLaunchTemplateData $launch_template_data;
}

class GroupIdentifierSet {
}

class TrafficMirrorPortRangeRequest {
  public int $from_port;
  public int $to_port;
}

class AssociateAddressResult {
  public string $association_id;
}

class DescribeIpv6PoolsRequest {
  public Ipv6PoolIdList $pool_ids;
  public NextToken $next_token;
  public Ipv6PoolMaxResults $max_results;
  public boolean $dry_run;
  public FilterList $filters;
}

class EndDateType {
}

class Phase1IntegrityAlgorithmsRequestListValue {
  public string $value;
}

class CreateTrafficMirrorTargetRequest {
  public NetworkInterfaceId $network_interface_id;
  public string $network_load_balancer_arn;
  public string $description;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
  public string $client_token;
}

class DescribeNetworkInterfacesMaxResults {
}

class FleetLaunchTemplateConfigListRequest {
}

class FleetLaunchTemplateOverridesRequest {
  public string $availability_zone;
  public Double $weighted_capacity;
  public Double $priority;
  public Placement $placement;
  public InstanceType $instance_type;
  public string $max_price;
  public SubnetId $subnet_id;
}

class ModifyTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class OperationType {
}

class RegisterTransitGatewayMulticastGroupSourcesRequest {
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public boolean $dry_run;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public string $group_ip_address;
}

class ReplaceTransitGatewayRouteRequest {
  public string $destination_cidr_block;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $blackhole;
  public boolean $dry_run;
}

class CreateVpcResult {
  public Vpc $vpc;
}

class DescribeNetworkInterfacePermissionsMaxResults {
}

class FleetEventType {
}

class InstanceTypeOffering {
  public InstanceType $instance_type;
  public LocationType $location_type;
  public Location $location;
}

class TransitGatewayVpcAttachment {
  public DateTime $creation_time;
  public string $transit_gateway_attachment_id;
  public string $vpc_owner_id;
  public TransitGatewayAttachmentState $state;
  public ValueStringList $subnet_ids;
  public TransitGatewayVpcAttachmentOptions $options;
  public TagList $tags;
  public string $transit_gateway_id;
  public string $vpc_id;
}

class RegionList {
}

class RequestSpotFleetRequest {
  public boolean $dry_run;
  public SpotFleetRequestConfigData $spot_fleet_request_config;
}

class CpuOptions {
  public int $core_count;
  public int $threads_per_core;
}

class DescribeClientVpnTargetNetworksResult {
  public TargetNetworkSet $client_vpn_target_networks;
  public NextToken $next_token;
}

class DescribeInstanceCreditSpecificationsResult {
  public InstanceCreditSpecificationList $instance_credit_specifications;
  public string $next_token;
}

class LicenseConfiguration {
  public string $license_configuration_arn;
}

class DeleteLocalGatewayRouteTableVpcAssociationRequest {
  public LocalGatewayRouteTableVpcAssociationId $local_gateway_route_table_vpc_association_id;
  public boolean $dry_run;
}

class DescribeVpcClassicLinkDnsSupportResult {
  public DescribeVpcClassicLinkDnsSupportNextToken $next_token;
  public ClassicLinkDnsSupportList $vpcs;
}

class InstanceStatusSummary {
  public InstanceStatusDetailsList $details;
  public SummaryStatus $status;
}

class NetworkPerformance {
}

class ReservedInstancesOffering {
  public RecurringChargesList $recurring_charges;
  public scope $scope;
  public InstanceType $instance_type;
  public boolean $marketplace;
  public string $reserved_instances_offering_id;
  public CurrencyCodeValues $currency_code;
  public OfferingTypeValues $offering_type;
  public Long $duration;
  public Float $fixed_price;
  public OfferingClassType $offering_class;
  public Float $usage_price;
  public Tenancy $instance_tenancy;
  public PricingDetailsList $pricing_details;
  public string $availability_zone;
  public RIProductDescription $product_description;
}

class VolumeAttachment {
  public DateTime $attach_time;
  public string $device;
  public string $instance_id;
  public VolumeAttachmentState $state;
  public string $volume_id;
  public boolean $delete_on_termination;
}

class DescribeCustomerGatewaysResult {
  public CustomerGatewayList $customer_gateways;
}

class EbsOptimizedSupport {
}

class FreeTierEligibleFlag {
}

class InstanceBlockDeviceMappingSpecificationList {
}

class TransitGatewayRouteList {
}

class GetTransitGatewayAttachmentPropagationsRequest {
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public FilterList $filters;
}

class ModifyInstancePlacementRequest {
  public HostTenancy $tenancy;
  public int $partition_number;
  public string $host_resource_group_arn;
  public Affinity $affinity;
  public PlacementGroupName $group_name;
  public DedicatedHostId $host_id;
  public InstanceId $instance_id;
}

class ServiceConfigurationSet {
}

class UserGroupStringList {
}

class DescribeClassicLinkInstancesRequest {
  public boolean $dry_run;
  public InstanceIdStringList $instance_ids;
  public DescribeClassicLinkInstancesMaxResults $max_results;
  public string $next_token;
  public FilterList $filters;
}

class DescribeInstanceCreditSpecificationsMaxResults {
}

class ReplaceTransitGatewayRouteResult {
  public TransitGatewayRoute $route;
}

class DescribeSnapshotAttributeResult {
  public string $snapshot_id;
  public CreateVolumePermissionList $create_volume_permissions;
  public ProductCodeList $product_codes;
}

class SecurityGroupReference {
  public string $group_id;
  public string $referencing_vpc_id;
  public string $vpc_peering_connection_id;
}

class LocalGatewayRouteTableIdSet {
}

class ArchitectureTypeList {
}

class CancelSpotInstanceRequestState {
}

class FpgaDeviceCount {
}

class HostReservation {
  public int $count;
  public CurrencyCodeValues $currency_code;
  public string $host_reservation_id;
  public DateTime $start;
  public TagList $tags;
  public DateTime $end;
  public PaymentOption $payment_option;
  public string $upfront_price;
  public string $hourly_price;
  public string $offering_id;
  public ReservationState $state;
  public int $duration;
  public ResponseHostIdSet $host_id_set;
  public string $instance_family;
}

class ImageList {
}

class LicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class DescribeNatGatewaysResult {
  public NatGatewayList $nat_gateways;
  public string $next_token;
}

class InstanceMonitoringList {
}

class PropagatingVgw {
  public string $gateway_id;
}

class VpcState {
}

class AllocationStrategy {
}

class DescribeDhcpOptionsMaxResults {
}

class DescribeFleetsResult {
  public FleetSet $fleets;
  public string $next_token;
}

class DescribeSpotFleetRequestHistoryRequest {
  public EventType $event_type;
  public DescribeSpotFleetRequestHistoryMaxResults $max_results;
  public string $next_token;
  public SpotFleetRequestId $spot_fleet_request_id;
  public DateTime $start_time;
  public boolean $dry_run;
}

class FpgaDeviceInfoList {
}

class ModifyVpnTunnelCertificateResult {
  public VpnConnection $vpn_connection;
}

class TransitGatewayId {
}

class RIProductDescription {
}

class AuthorizationRule {
  public boolean $access_all;
  public string $destination_cidr;
  public ClientVpnAuthorizationRuleStatus $status;
  public string $client_vpn_endpoint_id;
  public string $description;
  public string $group_id;
}

class CidrAuthorizationContext {
  public string $message;
  public string $signature;
}

class DeleteTransitGatewayRouteRequest {
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public string $destination_cidr_block;
}

class DisassociateVpcCidrBlockRequest {
  public VpcCidrAssociationId $association_id;
}

class LocalGateway {
  public string $outpost_arn;
  public string $owner_id;
  public string $state;
  public TagList $tags;
  public LocalGatewayId $local_gateway_id;
}

class Placement {
  public string $availability_zone;
  public string $affinity;
  public string $group_name;
  public int $partition_number;
  public string $host_id;
  public Tenancy $tenancy;
  public string $spread_domain;
  public string $host_resource_group_arn;
}

class ReservedInstancesModificationIdStringList {
}

class AcceptTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class AllocateAddressRequest {
  public string $address;
  public string $public_ipv_4_pool;
  public string $network_border_group;
  public string $customer_owned_ipv_4_pool;
  public boolean $dry_run;
  public DomainType $domain;
}

class SpotFleetTagSpecification {
  public ResourceType $resource_type;
  public TagList $tags;
}

class VpcPeeringConnectionStateReasonCode {
}

class AssociateTransitGatewayRouteTableResult {
  public TransitGatewayAssociation $association;
}

class CopyFpgaImageRequest {
  public boolean $dry_run;
  public FpgaImageId $source_fpga_image_id;
  public string $description;
  public string $name;
  public string $source_region;
  public string $client_token;
}

class MovingAddressStatusSet {
}

class PrivateIpAddressSpecificationList {
}

class LaunchTemplateIdStringList {
}

class OfferingId {
}

class PrivateIpAddressSpecification {
  public boolean $primary;
  public string $private_ip_address;
}

class RejectVpcPeeringConnectionRequest {
  public VpcPeeringConnectionId $vpc_peering_connection_id;
  public boolean $dry_run;
}

class AttachInternetGatewayRequest {
  public boolean $dry_run;
  public InternetGatewayId $internet_gateway_id;
  public VpcId $vpc_id;
}

class DeleteTransitGatewayPeeringAttachmentRequest {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
}

class DescribeTransitGatewayAttachmentsRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
}

class DisableFastSnapshotRestoreStateError {
  public string $message;
  public string $code;
}

class Ipv6RangeList {
}

class PublicIpv4Pool {
  public TagList $tags;
  public string $pool_id;
  public string $description;
  public PublicIpv4PoolRangeSet $pool_address_ranges;
  public int $total_address_count;
  public int $total_available_address_count;
}

class IpPermission {
  public PrefixListIdList $prefix_list_ids;
  public int $to_port;
  public UserIdGroupPairList $user_id_group_pairs;
  public int $from_port;
  public string $ip_protocol;
  public IpRangeList $ip_ranges;
  public Ipv6RangeList $ipv_6_ranges;
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

class ClientVpnEndpointId {
}

class DisassociateVpcCidrBlockResult {
  public VpcCidrBlockAssociation $cidr_block_association;
  public string $vpc_id;
  public VpcIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
}

class InstanceTypeInfoList {
}

class DisableFastSnapshotRestoreErrorSet {
}

class HostReservationId {
}

class Ipv6PoolSet {
}

class RegisterInstanceEventNotificationAttributesRequest {
  public boolean $dry_run;
  public RegisterInstanceTagAttributeRequest $instance_tag_attribute;
}

class ActivityStatus {
}

class DescribeInternetGatewaysResult {
  public InternetGatewayList $internet_gateways;
  public string $next_token;
}

class DescribeLocalGatewayVirtualInterfaceGroupsRequest {
  public string $next_token;
  public boolean $dry_run;
  public LocalGatewayVirtualInterfaceGroupIdSet $local_gateway_virtual_interface_group_ids;
  public FilterList $filters;
  public LocalGatewayMaxResults $max_results;
}

class DescribeStaleSecurityGroupsResult {
  public string $next_token;
  public StaleSecurityGroupSet $stale_security_group_set;
}

class SpotPlacement {
  public string $availability_zone;
  public string $group_name;
  public Tenancy $tenancy;
}

class SuccessfulQueuedPurchaseDeletion {
  public string $reserved_instances_id;
}

class TerminateInstancesResult {
  public InstanceStateChangeList $terminating_instances;
}

class VolumeDetail {
  public Long $size;
}

class CreateImageRequest {
  public string $description;
  public boolean $dry_run;
  public InstanceId $instance_id;
  public string $name;
  public boolean $no_reboot;
  public BlockDeviceMappingRequestList $block_device_mappings;
}

class InstanceIpv6AddressListRequest {
}

class LaunchTemplateSpecification {
  public LaunchTemplateId $launch_template_id;
  public string $launch_template_name;
  public string $version;
}

class LocationType {
}

class CreateTransitGatewayPeeringAttachmentRequest {
  public string $peer_region;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
  public TransitGatewayId $transit_gateway_id;
  public TransitAssociationGatewayId $peer_transit_gateway_id;
  public string $peer_account_id;
}

class DescribeVpcEndpointServicePermissionsRequest {
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
}

class HistoryRecord {
  public EventInformation $event_information;
  public EventType $event_type;
  public DateTime $timestamp;
}

class PrincipalIdFormatList {
}

class RouteTableAssociationList {
}

class VpcClassicLinkIdList {
}

class BundleTaskState {
}

class DeleteTransitGatewayRouteTableResult {
  public TransitGatewayRouteTable $transit_gateway_route_table;
}

class DescribeHostReservationsRequest {
  public FilterList $filter;
  public HostReservationIdSet $host_reservation_id_set;
  public int $max_results;
  public string $next_token;
}

class DescribeVpnConnectionsRequest {
  public FilterList $filters;
  public VpnConnectionIdStringList $vpn_connection_ids;
  public boolean $dry_run;
}

class DescribeTransitGatewayRouteTablesRequest {
  public TransitGatewayRouteTableIdStringList $transit_gateway_route_table_ids;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
}

class ScheduledInstancesBlockDeviceMappingSet {
}

class DescribeInstanceEventNotificationAttributesRequest {
  public boolean $dry_run;
}

class PublicIpv4PoolSet {
}

class VolumeModification {
  public int $original_size;
  public int $original_iops;
  public string $volume_id;
  public string $status_message;
  public int $target_size;
  public int $target_iops;
  public VolumeType $target_volume_type;
  public VolumeModificationState $modification_state;
  public VolumeType $original_volume_type;
  public Long $progress;
  public DateTime $start_time;
  public DateTime $end_time;
}

class VolumeStatusActionsList {
}

class VpcEndpointSubnetIdList {
}

class GetHostReservationPurchasePreviewResult {
  public PurchaseSet $purchase;
  public string $total_hourly_price;
  public string $total_upfront_price;
  public CurrencyCodeValues $currency_code;
}

class ClientCertificateRevocationListStatusCode {
}

class VpnState {
}

class DefaultRouteTableAssociationValue {
}

class DescribeByoipCidrsMaxResults {
}

class GetEbsDefaultKmsKeyIdRequest {
  public boolean $dry_run;
}

class PlacementGroupList {
}

class SubnetIpv6CidrBlockAssociationSet {
}

class VpnConnectionIdStringList {
}

class StatusType {
}

class VpcEndpointId {
}

class DeleteTrafficMirrorFilterRuleResult {
  public string $traffic_mirror_filter_rule_id;
}

class ImportSnapshotRequest {
  public string $client_token;
  public string $description;
  public SnapshotDiskContainer $disk_container;
  public boolean $dry_run;
  public boolean $encrypted;
  public KmsKeyId $kms_key_id;
  public string $role_name;
  public ClientData $client_data;
}

class Ipv6Flag {
}

class NetworkInterfacePrivateIpAddressList {
}

class DeprovisionByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class RestorableByStringList {
}

class DescribeKeyPairsResult {
  public KeyPairList $key_pairs;
}

class DescribeVpcEndpointServicesRequest {
  public int $max_results;
  public string $next_token;
  public boolean $dry_run;
  public ValueStringList $service_names;
  public FilterList $filters;
}

class SpotInstanceState {
}

class TargetCapacitySpecification {
  public int $spot_target_capacity;
  public DefaultTargetCapacityType $default_target_capacity_type;
  public int $total_target_capacity;
  public int $on_demand_target_capacity;
}

class AssociateVpcCidrBlockRequest {
  public boolean $amazon_provided_ipv_6_cidr_block;
  public string $cidr_block;
  public VpcId $vpc_id;
  public string $ipv_6_cidr_block_network_border_group;
  public Ipv6PoolEc2Id $ipv_6_pool;
  public string $ipv_6_cidr_block;
}

class GetCoipPoolUsageRequest {
  public FilterList $filters;
  public CoipPoolMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public CoipPoolId $pool_id;
}

class GroupIdStringList {
}

class SuccessfulQueuedPurchaseDeletionSet {
}

class DeleteQueuedReservedInstancesRequest {
  public boolean $dry_run;
  public DeleteQueuedReservedInstancesIdList $reserved_instances_ids;
}

class ExportTransitGatewayRoutesResult {
  public string $s_3_location;
}

class MoveAddressToVpcResult {
  public string $allocation_id;
  public Status $status;
}

class Monitoring {
  public MonitoringState $state;
}

class NatGatewayAddressList {
}

class DeregisterTransitGatewayMulticastGroupSourcesRequest {
  public boolean $dry_run;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public string $group_ip_address;
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
}

class LocalGatewayMaxResults {
}

class MemorySize {
}

class ModifyVpcEndpointConnectionNotificationRequest {
  public boolean $dry_run;
  public ConnectionNotificationId $connection_notification_id;
  public string $connection_notification_arn;
  public ValueStringList $connection_events;
}

class ElasticGpuAssociationList {
}

class LogDestinationType {
}

class SuccessfulInstanceCreditSpecificationSet {
}

class TagList {
}

class CreateLocalGatewayRouteRequest {
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public boolean $dry_run;
  public string $destination_cidr_block;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
}

class ScheduledInstanceRecurrence {
  public string $occurrence_unit;
  public string $frequency;
  public int $interval;
  public OccurrenceDaySet $occurrence_day_set;
  public boolean $occurrence_relative_to_end;
}

class TransitGateway {
  public TransitGatewayOptions $options;
  public TagList $tags;
  public string $transit_gateway_id;
  public string $transit_gateway_arn;
  public TransitGatewayState $state;
  public string $owner_id;
  public string $description;
  public DateTime $creation_time;
}

class LaunchTemplateElasticInferenceAcceleratorResponseList {
}

class ConnectionNotificationType {
}

class DeprovisionByoipCidrRequest {
  public string $cidr;
  public boolean $dry_run;
}

class FleetLaunchTemplateOverrides {
  public Double $weighted_capacity;
  public Double $priority;
  public PlacementResponse $placement;
  public InstanceType $instance_type;
  public string $max_price;
  public string $subnet_id;
  public string $availability_zone;
}

class LaunchTemplateBlockDeviceMapping {
  public string $device_name;
  public string $virtual_name;
  public LaunchTemplateEbsBlockDevice $ebs;
  public string $no_device;
}

class CoipPoolSet {
}

class DeleteVpcPeeringConnectionRequest {
  public VpcPeeringConnectionId $vpc_peering_connection_id;
  public boolean $dry_run;
}

class DescribeFpgaImageAttributeResult {
  public FpgaImageAttribute $fpga_image_attribute;
}

class Ipv6PoolIdList {
}

class ScheduledInstancesPlacement {
  public string $availability_zone;
  public PlacementGroupName $group_name;
}

class DeleteTransitGatewayVpcAttachmentRequest {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
}

class DisassociateSubnetCidrBlockRequest {
  public SubnetCidrAssociationId $association_id;
}

class InstanceTypeList {
}

class ReasonCodesList {
}

class DescribeIdentityIdFormatResult {
  public IdFormatList $statuses;
}

class DescribeInstancesResult {
  public ReservationList $reservations;
  public string $next_token;
}

class DescribeVpcAttributeResult {
  public string $vpc_id;
  public AttributeBooleanValue $enable_dns_hostnames;
  public AttributeBooleanValue $enable_dns_support;
}

class InstanceTagNotificationAttribute {
  public InstanceTagKeySet $instance_tag_keys;
  public boolean $include_all_tags_of_instance;
}

class AvailableInstanceCapacityList {
}

class DeleteFleetsRequest {
  public boolean $dry_run;
  public FleetIdSet $fleet_ids;
  public boolean $terminate_instances;
}

class FleetStateCode {
}

class GetDefaultCreditSpecificationResult {
  public InstanceFamilyCreditSpecification $instance_family_credit_specification;
}

class CancelBundleTaskRequest {
  public BundleId $bundle_id;
  public boolean $dry_run;
}

class CreateSnapshotsResult {
  public SnapshotSet $snapshots;
}

class DescribeRegionsResult {
  public RegionList $regions;
}

class CreateNetworkInterfacePermissionRequest {
  public InterfacePermissionType $permission;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
  public string $aws_account_id;
  public string $aws_service;
}

class ElasticGpuId {
}

class ResetFpgaImageAttributeResult {
  public boolean $return;
}

class ElasticInferenceAcceleratorCount {
}

class FleetData {
  public string $client_token;
  public TargetCapacitySpecification $target_capacity_specification;
  public boolean $terminate_instances_with_expiration;
  public OnDemandOptions $on_demand_options;
  public DateTime $create_time;
  public FleetStateCode $fleet_state;
  public FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public Double $fulfilled_on_demand_capacity;
  public FleetType $type;
  public DateTime $valid_until;
  public SpotOptions $spot_options;
  public DescribeFleetsInstancesSet $instances;
  public FleetActivityStatus $activity_status;
  public FleetId $fleet_id;
  public Double $fulfilled_capacity;
  public DateTime $valid_from;
  public boolean $replace_unhealthy_instances;
  public FleetLaunchTemplateConfigList $launch_template_configs;
  public TagList $tags;
  public DescribeFleetsErrorSet $errors;
}

class CancelledSpotInstanceRequestList {
}

class DeleteVpnConnectionRouteRequest {
  public string $destination_cidr_block;
  public VpnConnectionId $vpn_connection_id;
}

class DescribeRouteTablesResult {
  public string $next_token;
  public RouteTableList $route_tables;
}

class ElasticGpuSpecificationResponse {
  public string $type;
}

class CreateTrafficMirrorTargetResult {
  public TrafficMirrorTarget $traffic_mirror_target;
  public string $client_token;
}

class LaunchTemplateEbsBlockDeviceRequest {
  public KmsKeyId $kms_key_id;
  public SnapshotId $snapshot_id;
  public int $volume_size;
  public VolumeType $volume_type;
  public boolean $encrypted;
  public boolean $delete_on_termination;
  public int $iops;
}

class ClientVpnEndpoint {
  public ConnectionLogResponseOptions $connection_log_options;
  public VpcId $vpc_id;
  public string $deletion_time;
  public string $client_cidr_block;
  public int $vpn_port;
  public AssociatedTargetNetworkSet $associated_target_networks;
  public VpnProtocol $vpn_protocol;
  public ClientVpnAuthenticationList $authentication_options;
  public TagList $tags;
  public string $description;
  public string $creation_time;
  public ValueStringList $dns_servers;
  public boolean $split_tunnel;
  public string $server_certificate_arn;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public string $client_vpn_endpoint_id;
  public ClientVpnEndpointStatus $status;
  public string $dns_name;
  public TransportProtocol $transport_protocol;
}

class DisableVpcClassicLinkResult {
  public boolean $return;
}

class State {
}

class VolumeStatusDetails {
  public VolumeStatusName $name;
  public string $status;
}

class ElasticGpuSpecificationResponseList {
}

class InternetGatewayAttachment {
  public AttachmentStatus $state;
  public string $vpc_id;
}

class StartVpcEndpointServicePrivateDnsVerificationResult {
  public boolean $return_value;
}

class VpcAttachment {
  public AttachmentStatus $state;
  public string $vpc_id;
}

class TargetConfiguration {
  public int $instance_count;
  public string $offering_id;
}

class AcceptTransitGatewayPeeringAttachmentRequest {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
}

class DeleteNetworkInterfaceRequest {
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
}

class DescribeVpcEndpointConnectionNotificationsResult {
  public ConnectionNotificationSet $connection_notification_set;
  public string $next_token;
}

class ModifyInstanceEventStartTimeRequest {
  public string $instance_event_id;
  public DateTime $not_before;
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class UpdateSecurityGroupRuleDescriptionsIngressResult {
  public boolean $return;
}

class DescribeClientVpnRoutesResult {
  public ClientVpnRouteSet $routes;
  public NextToken $next_token;
}

class DisableFastSnapshotRestoreErrorItem {
  public string $snapshot_id;
  public DisableFastSnapshotRestoreStateErrorSet $fast_snapshot_restore_state_errors;
}

class DiskCount {
}

class TrafficMirrorSessionSet {
}

class DisassociateClientVpnTargetNetworkRequest {
  public ClientVpnAssociationId $association_id;
  public boolean $dry_run;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
}

class PublicIpv4PoolRangeSet {
}

class VolumeStatusDetailsList {
}

class DescribeLocalGatewayRouteTableVpcAssociationsResult {
  public LocalGatewayRouteTableVpcAssociationSet $local_gateway_route_table_vpc_associations;
  public string $next_token;
}

class KeyPairIdStringList {
}

class ModifyReservedInstancesRequest {
  public ReservedInstancesIdStringList $reserved_instances_ids;
  public string $client_token;
  public ReservedInstancesConfigurationList $target_configurations;
}

class PlacementGroupStrategy {
}

class ServiceDetail {
  public boolean $vpc_endpoint_policy_supported;
  public boolean $acceptance_required;
  public boolean $manages_vpc_endpoints;
  public TagList $tags;
  public string $service_name;
  public ValueStringList $availability_zones;
  public ValueStringList $base_endpoint_dns_names;
  public string $private_dns_name;
  public DnsNameState $private_dns_name_verification_state;
  public string $service_id;
  public ServiceTypeDetailSet $service_type;
  public string $owner;
}

class DescribeIpv6PoolsResult {
  public Ipv6PoolSet $ipv_6_pools;
  public NextToken $next_token;
}

class ExportClientVpnClientCertificateRevocationListRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
}

class IKEVersionsRequestList {
}

class InstanceTagKeySet {
}

class ConnectionLogOptions {
  public boolean $enabled;
  public string $cloudwatch_log_group;
  public string $cloudwatch_log_stream;
}

class CpuOptionsRequest {
  public int $core_count;
  public int $threads_per_core;
}

class DescribeMovingAddressesRequest {
  public FilterList $filters;
  public boolean $dry_run;
  public DescribeMovingAddressesMaxResults $max_results;
  public string $next_token;
  public ValueStringList $public_ips;
}

class TargetGroup {
  public string $arn;
}

class DescribeVpcEndpointServiceConfigurationsRequest {
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public boolean $dry_run;
  public VpcEndpointServiceIdList $service_ids;
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

class ModifyVolumeRequest {
  public boolean $dry_run;
  public VolumeId $volume_id;
  public int $size;
  public VolumeType $volume_type;
  public int $iops;
}

class ModifyVpnConnectionResult {
  public VpnConnection $vpn_connection;
}

class AttachClassicLinkVpcResult {
  public boolean $return;
}

class CreateTransitGatewayRouteRequest {
  public boolean $dry_run;
  public string $destination_cidr_block;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $blackhole;
}

class DeleteVolumeRequest {
  public VolumeId $volume_id;
  public boolean $dry_run;
}

class DescribeSecurityGroupsMaxResults {
}

class RunScheduledInstancesRequest {
  public string $client_token;
  public boolean $dry_run;
  public int $instance_count;
  public ScheduledInstancesLaunchSpecification $launch_specification;
  public ScheduledInstanceId $scheduled_instance_id;
}

class AssociateTransitGatewayMulticastDomainRequest {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public ValueStringList $subnet_ids;
  public boolean $dry_run;
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
}

class CancelImportTaskResult {
  public string $import_task_id;
  public string $previous_state;
  public string $state;
}

class MembershipType {
}

class VolumeStatusAttachmentStatus {
  public string $io_performance;
  public string $instance_id;
}

class CreateRouteTableResult {
  public RouteTable $route_table;
}

class ModifyVolumeResult {
  public VolumeModification $volume_modification;
}

class ReservedInstancesModification {
  public string $client_token;
  public ReservedInstancesModificationResultList $modification_results;
  public string $reserved_instances_modification_id;
  public string $status;
  public DateTime $create_date;
  public DateTime $effective_date;
  public ReservedIntancesIds $reserved_instances_ids;
  public string $status_message;
  public DateTime $update_date;
}

class DescribeSecurityGroupsResult {
  public SecurityGroupList $security_groups;
  public string $next_token;
}

class LocalGatewayRouteTableSet {
}

class GetTransitGatewayRouteTablePropagationsResult {
  public TransitGatewayRouteTablePropagationList $transit_gateway_route_table_propagations;
  public string $next_token;
}

class IKEVersionsRequestListValue {
  public string $value;
}

class LocalGatewayRouteList {
}

class TargetConfigurationRequestSet {
}

class TrafficType {
}

class HostInstance {
  public string $instance_id;
  public string $instance_type;
  public string $owner_id;
}

class InstanceNetworkInterfaceAssociation {
  public string $ip_owner_id;
  public string $public_dns_name;
  public string $public_ip;
}

class ModifyVpcEndpointServicePermissionsResult {
  public boolean $return_value;
}

class Phase2IntegrityAlgorithmsRequestListValue {
  public string $value;
}

class AllocationState {
}

class ClientVpnConnectionSet {
}

class InstanceIpv6AddressRequest {
  public string $ipv_6_address;
}

class LocalGatewayVirtualInterfaceGroupIdSet {
}

class UnsuccessfulInstanceCreditSpecificationSet {
}

class ElasticGpuSpecificationList {
}

class Instance {
  public boolean $ebs_optimized;
  public InstanceNetworkInterfaceList $network_interfaces;
  public GroupIdentifierList $security_groups;
  public string $spot_instance_request_id;
  public int $ami_launch_index;
  public string $kernel_id;
  public string $ramdisk_id;
  public string $client_token;
  public HibernationOptions $hibernation_options;
  public StateReason $state_reason;
  public VirtualizationType $virtualization_type;
  public CapacityReservationSpecificationResponse $capacity_reservation_specification;
  public Placement $placement;
  public PlatformValues $platform;
  public string $subnet_id;
  public InstanceLifecycleType $instance_lifecycle;
  public string $state_transition_reason;
  public boolean $source_dest_check;
  public LicenseList $licenses;
  public string $key_name;
  public DateTime $launch_time;
  public Monitoring $monitoring;
  public string $public_ip_address;
  public InstanceType $instance_type;
  public HypervisorType $hypervisor;
  public string $outpost_arn;
  public CpuOptions $cpu_options;
  public DeviceType $root_device_type;
  public string $private_dns_name;
  public string $public_dns_name;
  public ArchitectureValues $architecture;
  public ElasticGpuAssociationList $elastic_gpu_associations;
  public IamInstanceProfile $iam_instance_profile;
  public string $instance_id;
  public ProductCodeList $product_codes;
  public string $vpc_id;
  public boolean $ena_support;
  public string $private_ip_address;
  public InstanceBlockDeviceMappingList $block_device_mappings;
  public TagList $tags;
  public string $sriov_net_support;
  public string $capacity_reservation_id;
  public InstanceMetadataOptionsResponse $metadata_options;
  public string $image_id;
  public InstanceState $state;
  public ElasticInferenceAcceleratorAssociationList $elastic_inference_accelerator_associations;
  public string $root_device_name;
}

class LaunchTemplateInstanceNetworkInterfaceSpecificationRequest {
  public boolean $delete_on_termination;
  public string $description;
  public string $interface_type;
  public int $ipv_6_address_count;
  public NetworkInterfaceId $network_interface_id;
  public string $private_ip_address;
  public int $secondary_private_ip_address_count;
  public boolean $associate_public_ip_address;
  public SubnetId $subnet_id;
  public SecurityGroupIdStringList $groups;
  public InstanceIpv6AddressListRequest $ipv_6_addresses;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $device_index;
}

class ThreadsPerCore {
}

class CreateLaunchTemplateResult {
  public LaunchTemplate $launch_template;
}

class DescribeScheduledInstancesResult {
  public string $next_token;
  public ScheduledInstanceSet $scheduled_instance_set;
}

class DescribeVolumeAttributeRequest {
  public VolumeAttributeName $attribute;
  public VolumeId $volume_id;
  public boolean $dry_run;
}

class DiskImageVolumeDescription {
  public Long $size;
  public string $id;
}

class TransitGatewayPropagation {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public string $transit_gateway_route_table_id;
  public TransitGatewayPropagationState $state;
}

class ClientVpnAuthorizationRuleStatus {
  public ClientVpnAuthorizationRuleStatusCode $code;
  public string $message;
}

class InstanceMetadataOptionsResponse {
  public InstanceMetadataOptionsState $state;
  public HttpTokensState $http_tokens;
  public int $http_put_response_hop_limit;
  public InstanceMetadataEndpointState $http_endpoint;
}

class LaunchTemplateElasticInferenceAcceleratorResponse {
  public string $type;
  public int $count;
}

class PricingDetailsList {
}

class BundleId {
}

class TrafficDirection {
}

class VpnGatewayId {
}

class DirectoryServiceAuthenticationRequest {
  public string $directory_id;
}

class GetCapacityReservationUsageRequestMaxResults {
}

class PlacementGroupInfo {
  public PlacementGroupStrategyList $supported_strategies;
}

class ScheduledInstancesSecurityGroupIdSet {
}

class CreateReservedInstancesListingRequest {
  public string $client_token;
  public int $instance_count;
  public PriceScheduleSpecificationList $price_schedules;
  public ReservationId $reserved_instances_id;
}

class ModifyVpcEndpointServiceConfigurationResult {
  public boolean $return;
}

class InstancePrivateIpAddress {
  public InstanceNetworkInterfaceAssociation $association;
  public boolean $primary;
  public string $private_dns_name;
  public string $private_ip_address;
}

class UsageClassTypeList {
}

class TransitGatewayPropagationState {
}

class GroupIdentifierList {
}

class LaunchTemplateId {
}

class PermissionGroup {
}

class TargetConfigurationRequest {
  public int $instance_count;
  public ReservedInstancesOfferingId $offering_id;
}

class TrafficMirrorSession {
  public int $virtual_network_id;
  public string $description;
  public string $owner_id;
  public string $traffic_mirror_target_id;
  public string $traffic_mirror_filter_id;
  public string $network_interface_id;
  public int $packet_length;
  public int $session_number;
  public TagList $tags;
  public string $traffic_mirror_session_id;
}

class ExportClientVpnClientCertificateRevocationListResult {
  public string $certificate_revocation_list;
  public ClientCertificateRevocationListStatus $status;
}

class FlowLogSet {
}

class NetworkAclId {
}

class TrafficMirrorFilterIdList {
}

class CreateSpotDatafeedSubscriptionRequest {
  public string $bucket;
  public boolean $dry_run;
  public string $prefix;
}

class CreateTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class DescribeSpotFleetInstancesMaxResults {
}

class SearchTransitGatewayRoutesResult {
  public TransitGatewayRouteList $routes;
  public boolean $additional_routes_available;
}

class ExportImageTask {
  public string $image_id;
  public string $progress;
  public ExportTaskS3Location $s_3_export_location;
  public string $status;
  public string $status_message;
  public string $description;
  public string $export_image_task_id;
}

class Phase2DHGroupNumbersRequestList {
}

class GatewayType {
}

class LaunchTemplateInstanceMetadataOptionsState {
}

class ModifySnapshotAttributeRequest {
  public boolean $dry_run;
  public SnapshotAttributeName $attribute;
  public CreateVolumePermissionModifications $create_volume_permission;
  public GroupNameStringList $group_names;
  public OperationType $operation_type;
  public SnapshotId $snapshot_id;
  public UserIdStringList $user_ids;
}

class ClientCertificateRevocationListStatus {
  public ClientCertificateRevocationListStatusCode $code;
  public string $message;
}

class ClientVpnAssociationId {
}

class RejectVpcPeeringConnectionResult {
  public boolean $return;
}

class ModifyClientVpnEndpointRequest {
  public string $description;
  public boolean $split_tunnel;
  public boolean $dry_run;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public ConnectionLogOptions $connection_log_options;
  public int $vpn_port;
  public VpcId $vpc_id;
  public string $server_certificate_arn;
  public DnsServersOptionsModifyStructure $dns_servers;
}

class DedicatedHostFlag {
}

class FailedQueuedPurchaseDeletionSet {
}

class LoadBalancersConfig {
  public ClassicLoadBalancersConfig $classic_load_balancers_config;
  public TargetGroupsConfig $target_groups_config;
}

class ModifyCapacityReservationResult {
  public boolean $return;
}

class CreateLocalGatewayRouteTableVpcAssociationRequest {
  public boolean $dry_run;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public VpcId $vpc_id;
}

class Float {
}

class RegisterImageRequest {
  public BillingProductList $billing_products;
  public string $root_device_name;
  public string $sriov_net_support;
  public ArchitectureValues $architecture;
  public BlockDeviceMappingRequestList $block_device_mappings;
  public boolean $dry_run;
  public boolean $ena_support;
  public RamdiskId $ramdisk_id;
  public string $virtualization_type;
  public string $image_location;
  public string $description;
  public KernelId $kernel_id;
  public string $name;
}

class ModifyInstanceAttributeRequest {
  public AttributeBooleanValue $disable_api_termination;
  public AttributeValue $ramdisk;
  public AttributeValue $sriov_net_support;
  public BlobAttributeValue $user_data;
  public string $value;
  public InstanceBlockDeviceMappingSpecificationList $block_device_mappings;
  public InstanceId $instance_id;
  public AttributeValue $kernel;
  public boolean $dry_run;
  public AttributeBooleanValue $ena_support;
  public AttributeValue $instance_initiated_shutdown_behavior;
  public GroupIdStringList $groups;
  public AttributeValue $instance_type;
  public AttributeBooleanValue $source_dest_check;
  public InstanceAttributeName $attribute;
  public AttributeBooleanValue $ebs_optimized;
}

class ModifyTransitGatewayVpcAttachmentRequestOptions {
  public DnsSupportValue $dns_support;
  public Ipv6SupportValue $ipv_6_support;
}

class VpcCidrBlockAssociationSet {
}

class AccountAttribute {
  public string $attribute_name;
  public AccountAttributeValueList $attribute_values;
}

class CoipPoolIdSet {
}

class CreateRouteRequest {
  public NetworkInterfaceId $network_interface_id;
  public RouteTableId $route_table_id;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
  public string $destination_ipv_6_cidr_block;
  public boolean $dry_run;
  public InstanceId $instance_id;
  public NatGatewayId $nat_gateway_id;
  public TransitGatewayId $transit_gateway_id;
  public LocalGatewayId $local_gateway_id;
  public string $destination_cidr_block;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public RouteGatewayId $gateway_id;
}

class DeleteNatGatewayRequest {
  public boolean $dry_run;
  public NatGatewayId $nat_gateway_id;
}

class DetachVolumeRequest {
  public InstanceId $instance_id;
  public VolumeId $volume_id;
  public boolean $dry_run;
  public string $device;
  public boolean $force;
}

class ImportImageRequest {
  public KmsKeyId $kms_key_id;
  public string $license_type;
  public boolean $dry_run;
  public boolean $encrypted;
  public string $hypervisor;
  public string $description;
  public ImageDiskContainerList $disk_containers;
  public string $platform;
  public string $role_name;
  public ImportImageLicenseSpecificationListRequest $license_specifications;
  public string $architecture;
  public ClientData $client_data;
  public string $client_token;
}

class PurchaseSet {
}

class ServiceDetailSet {
}

class SpotFleetTagSpecificationList {
}

class SpotInstanceRequest {
  public string $launch_group;
  public string $spot_price;
  public TagList $tags;
  public SpotInstanceType $type;
  public DateTime $valid_from;
  public string $availability_zone_group;
  public InstanceId $instance_id;
  public string $launched_availability_zone;
  public DateTime $create_time;
  public LaunchSpecification $launch_specification;
  public RIProductDescription $product_description;
  public string $spot_instance_request_id;
  public SpotInstanceState $state;
  public string $actual_block_hourly_price;
  public int $block_duration_minutes;
  public SpotInstanceStateFault $fault;
  public SpotInstanceStatus $status;
  public DateTime $valid_until;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
}

class VolumeStatusList {
}

class CreateTrafficMirrorFilterRuleResult {
  public TrafficMirrorFilterRule $traffic_mirror_filter_rule;
  public string $client_token;
}

class DescribeNetworkInterfaceAttributeResult {
  public NetworkInterfaceAttachment $attachment;
  public AttributeValue $description;
  public GroupIdentifierList $groups;
  public string $network_interface_id;
  public AttributeBooleanValue $source_dest_check;
}

class ModifyIdentityIdFormatRequest {
  public string $principal_arn;
  public string $resource;
  public boolean $use_long_ids;
}

class NetworkAclList {
}

class ModifyInstanceCreditSpecificationResult {
  public SuccessfulInstanceCreditSpecificationSet $successful_instance_credit_specifications;
  public UnsuccessfulInstanceCreditSpecificationSet $unsuccessful_instance_credit_specifications;
}

class RegisterInstanceTagAttributeRequest {
  public boolean $include_all_tags_of_instance;
  public InstanceTagKeySet $instance_tag_keys;
}

class DeleteVpnGatewayRequest {
  public VpnGatewayId $vpn_gateway_id;
  public boolean $dry_run;
}

class DescribeSecurityGroupsRequest {
  public FilterList $filters;
  public GroupIdStringList $group_ids;
  public GroupNameStringList $group_names;
  public boolean $dry_run;
  public string $next_token;
  public DescribeSecurityGroupsMaxResults $max_results;
}

class GetPasswordDataRequest {
  public InstanceId $instance_id;
  public boolean $dry_run;
}

class LaunchTemplateHibernationOptions {
  public boolean $configured;
}

class ScheduledInstancesLaunchSpecification {
  public SubnetId $subnet_id;
  public ScheduledInstancesBlockDeviceMappingSet $block_device_mappings;
  public ScheduledInstancesIamInstanceProfile $iam_instance_profile;
  public ImageId $image_id;
  public ScheduledInstancesMonitoring $monitoring;
  public ScheduledInstancesPlacement $placement;
  public ScheduledInstancesNetworkInterfaceSet $network_interfaces;
  public ScheduledInstancesSecurityGroupIdSet $security_group_ids;
  public string $user_data;
  public boolean $ebs_optimized;
  public string $instance_type;
  public KernelId $kernel_id;
  public KeyPairName $key_name;
  public RamdiskId $ramdisk_id;
}

class UnassignPrivateIpAddressesRequest {
  public NetworkInterfaceId $network_interface_id;
  public PrivateIpAddressStringList $private_ip_addresses;
}

class AttachVpnGatewayRequest {
  public VpnGatewayId $vpn_gateway_id;
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class DeleteFleetErrorCode {
}

class DescribeEgressOnlyInternetGatewaysRequest {
  public boolean $dry_run;
  public EgressOnlyInternetGatewayIdList $egress_only_internet_gateway_ids;
  public DescribeEgressOnlyInternetGatewaysMaxResults $max_results;
  public string $next_token;
  public FilterList $filters;
}

class SnapshotDiskContainer {
  public string $description;
  public string $format;
  public string $url;
  public UserBucket $user_bucket;
}

class VolumeStatusEventsList {
}

class ConversionTaskState {
}

class DescribeHostsRequest {
  public FilterList $filter;
  public RequestHostIdList $host_ids;
  public int $max_results;
  public string $next_token;
}

class FlowLogIdList {
}

class NetworkInterfaceList {
}

class totalGpuMemory {
}

class DescribeClientVpnConnectionsRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public FilterList $filters;
  public NextToken $next_token;
  public DescribeClientVpnConnectionsMaxResults $max_results;
  public boolean $dry_run;
}

class FleetActivityStatus {
}

class ModifyTransitGatewayVpcAttachmentRequest {
  public boolean $dry_run;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public TransitGatewaySubnetIdList $add_subnet_ids;
  public TransitGatewaySubnetIdList $remove_subnet_ids;
  public ModifyTransitGatewayVpcAttachmentRequestOptions $options;
}

class WithdrawByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class FlowLog {
  public string $deliver_logs_status;
  public string $flow_log_id;
  public int $max_aggregation_interval;
  public LogDestinationType $log_destination_type;
  public string $log_destination;
  public string $deliver_logs_permission_arn;
  public string $flow_log_status;
  public string $log_group_name;
  public string $deliver_logs_error_message;
  public string $log_format;
  public TagList $tags;
  public MillisecondDateTime $creation_time;
  public string $resource_id;
  public TrafficType $traffic_type;
}

class LaunchTemplateHttpTokensState {
}

class ScheduledInstance {
  public DateTime $create_date;
  public string $network_platform;
  public DateTime $previous_slot_end_time;
  public string $availability_zone;
  public string $instance_type;
  public DateTime $term_start_date;
  public int $total_scheduled_instance_hours;
  public int $instance_count;
  public ScheduledInstanceRecurrence $recurrence;
  public string $scheduled_instance_id;
  public DateTime $term_end_date;
  public string $hourly_price;
  public DateTime $next_slot_start_time;
  public string $platform;
  public int $slot_duration_in_hours;
}

class InstanceHealthStatus {
}

class SnapshotSet {
}

class DescribeVpcsRequest {
  public FilterList $filters;
  public VpcIdStringList $vpc_ids;
  public boolean $dry_run;
  public string $next_token;
  public DescribeVpcsMaxResults $max_results;
}

class ImportClientVpnClientCertificateRevocationListResult {
  public boolean $return;
}

class InstanceStateChange {
  public InstanceState $previous_state;
  public InstanceState $current_state;
  public string $instance_id;
}

class ListingStatus {
}

class NetworkInterfaceStatus {
}

class ByoipCidr {
  public string $status_message;
  public ByoipCidrState $state;
  public string $cidr;
  public string $description;
}

class CancelSpotInstanceRequestsResult {
  public CancelledSpotInstanceRequestList $cancelled_spot_instance_requests;
}

class FleetLaunchTemplateOverridesList {
}

class Ipv6AddressList {
}

class FlowLogResourceId {
}

class LaunchTemplateNameStringList {
}

class FpgaDeviceManufacturerName {
}

class NetworkInterfaceAttachmentChanges {
  public NetworkInterfaceAttachmentId $attachment_id;
  public boolean $delete_on_termination;
}

class AcceptTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class CapacityReservationIdSet {
}

class DeleteCustomerGatewayRequest {
  public CustomerGatewayId $customer_gateway_id;
  public boolean $dry_run;
}

class DescribeVpcEndpointConnectionNotificationsRequest {
  public int $max_results;
  public string $next_token;
  public boolean $dry_run;
  public ConnectionNotificationId $connection_notification_id;
  public FilterList $filters;
}

class ClassicLinkInstance {
  public TagList $tags;
  public string $vpc_id;
  public GroupIdentifierList $groups;
  public string $instance_id;
}

class PriceScheduleList {
}

class CreateFleetErrorsSet {
}

class ReplaceIamInstanceProfileAssociationResult {
  public IamInstanceProfileAssociation $iam_instance_profile_association;
}

class ImportVolumeResult {
  public ConversionTask $conversion_task;
}

class LaunchTemplateConfig {
  public LaunchTemplateOverridesList $overrides;
  public FleetLaunchTemplateSpecification $launch_template_specification;
}

class ModifyNetworkInterfaceAttributeRequest {
  public NetworkInterfaceAttachmentChanges $attachment;
  public AttributeValue $description;
  public boolean $dry_run;
  public SecurityGroupIdStringList $groups;
  public NetworkInterfaceId $network_interface_id;
  public AttributeBooleanValue $source_dest_check;
}

class ResourceIdList {
}

class DescribeFlowLogsResult {
  public FlowLogSet $flow_logs;
  public string $next_token;
}

class DescribeLaunchTemplateVersionsRequest {
  public boolean $dry_run;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public int $max_results;
  public FilterList $filters;
  public VersionStringList $versions;
  public string $min_version;
  public string $max_version;
  public string $next_token;
}

class DescribePrefixListsResult {
  public string $next_token;
  public PrefixListSet $prefix_lists;
}

class GpuDeviceManufacturerName {
}

class SpotPrice {
  public string $availability_zone;
  public InstanceType $instance_type;
  public RIProductDescription $product_description;
  public string $spot_price;
  public DateTime $timestamp;
}

class SubnetIpv6CidrBlockAssociation {
  public string $association_id;
  public string $ipv_6_cidr_block;
  public SubnetCidrBlockState $ipv_6_cidr_block_state;
}

class ConversionIdStringList {
}

class ResetInstanceAttributeRequest {
  public InstanceAttributeName $attribute;
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class VgwTelemetryList {
}

class LoadPermissionListRequest {
}

class NatGatewayState {
}

class RegisterInstanceEventNotificationAttributesResult {
  public InstanceTagNotificationAttribute $instance_tag_attribute;
}

class Status {
}

class TransitGatewayMulticastDomainAssociations {
  public TransitGatewayAttachmentResourceType $resource_type;
  public SubnetAssociationList $subnets;
  public string $transit_gateway_multicast_domain_id;
  public string $transit_gateway_attachment_id;
  public string $resource_id;
}

class CancelExportTaskRequest {
  public ExportVmTaskId $export_task_id;
}

class ConfirmProductInstanceRequest {
  public InstanceId $instance_id;
  public string $product_code;
  public boolean $dry_run;
}

class DeleteLaunchTemplateVersionsResponseErrorItem {
  public string $launch_template_id;
  public string $launch_template_name;
  public Long $version_number;
  public ResponseError $response_error;
}

class DescribeClientVpnRoutesRequest {
  public DescribeClientVpnRoutesMaxResults $max_results;
  public NextToken $next_token;
  public boolean $dry_run;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public FilterList $filters;
}

class CidrBlockSet {
}

class FleetLaunchTemplateConfigList {
}

class LaunchTemplateInstanceNetworkInterfaceSpecificationList {
}

class LaunchTemplateOverrides {
  public string $subnet_id;
  public string $availability_zone;
  public Double $weighted_capacity;
  public Double $priority;
  public InstanceType $instance_type;
  public string $spot_price;
}

class RunInstancesMonitoringEnabled {
  public boolean $enabled;
}

class VpcIpv6CidrBlockAssociationSet {
}

class AssociationStatusCode {
}

class AttachNetworkInterfaceResult {
  public string $attachment_id;
}

class FpgaInfo {
  public FpgaDeviceInfoList $fpgas;
  public totalFpgaMemory $total_fpga_memory_in_mi_b;
}

class UnsuccessfulInstanceCreditSpecificationItemError {
  public UnsuccessfulInstanceCreditSpecificationErrorCode $code;
  public string $message;
}

class EnableFastSnapshotRestoreErrorSet {
}

class NetworkAclEntry {
  public PortRange $port_range;
  public string $protocol;
  public RuleAction $rule_action;
  public int $rule_number;
  public string $cidr_block;
  public boolean $egress;
  public IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
}

class CreateKeyPairRequest {
  public string $key_name;
  public boolean $dry_run;
  public TagSpecificationList $tag_specifications;
}

class DescribeNetworkAclsResult {
  public string $next_token;
  public NetworkAclList $network_acls;
}

class InstanceAttributeName {
}

class VpcEndpointIdList {
}

class EnableFastSnapshotRestoreErrorItem {
  public EnableFastSnapshotRestoreStateErrorSet $fast_snapshot_restore_state_errors;
  public string $snapshot_id;
}

class ModifyVpnConnectionRequest {
  public VpnConnectionId $vpn_connection_id;
  public TransitGatewayId $transit_gateway_id;
  public CustomerGatewayId $customer_gateway_id;
  public VpnGatewayId $vpn_gateway_id;
  public boolean $dry_run;
}

class ResetImageAttributeRequest {
  public ResetImageAttributeName $attribute;
  public ImageId $image_id;
  public boolean $dry_run;
}

class AcceptVpcEndpointConnectionsRequest {
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class CreateCapacityReservationResult {
  public CapacityReservation $capacity_reservation;
}

class CreateVolumePermissionList {
}

class DescribeTrafficMirrorSessionsResult {
  public string $next_token;
  public TrafficMirrorSessionSet $traffic_mirror_sessions;
}

class InstanceNetworkInterfaceList {
}

class IpRange {
  public string $cidr_ip;
  public string $description;
}

class SecurityGroupName {
}

class VpcAttributeName {
}

class CreateFleetError {
  public string $error_code;
  public string $error_message;
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
}

class DeleteLaunchTemplateVersionsResponseSuccessItem {
  public string $launch_template_id;
  public string $launch_template_name;
  public Long $version_number;
}

class LaunchTemplateBlockDeviceMappingRequestList {
}

class Phase1EncryptionAlgorithmsListValue {
  public string $value;
}

class InstanceTypeInfo {
  public PlacementGroupInfo $placement_group_info;
  public CurrentGenerationFlag $current_generation;
  public FreeTierEligibleFlag $free_tier_eligible;
  public RootDeviceTypeList $supported_root_device_types;
  public InstanceStorageFlag $instance_storage_supported;
  public NetworkInfo $network_info;
  public InstanceType $instance_type;
  public VCpuInfo $v_cpu_info;
  public HibernationFlag $hibernation_supported;
  public BurstablePerformanceFlag $burstable_performance_supported;
  public DedicatedHostFlag $dedicated_hosts_supported;
  public UsageClassTypeList $supported_usage_classes;
  public InstanceTypeHypervisor $hypervisor;
  public ProcessorInfo $processor_info;
  public GpuInfo $gpu_info;
  public FpgaInfo $fpga_info;
  public AutoRecoveryFlag $auto_recovery_supported;
  public BareMetalFlag $bare_metal;
  public MemoryInfo $memory_info;
  public InstanceStorageInfo $instance_storage_info;
  public EbsInfo $ebs_info;
  public InferenceAcceleratorInfo $inference_accelerator_info;
}

class PurchaseHostReservationRequest {
  public string $client_token;
  public CurrencyCodeValues $currency_code;
  public RequestHostIdSet $host_id_set;
  public string $limit_price;
  public OfferingId $offering_id;
}

class SpotAllocationStrategy {
}

class SpotInstanceStateFault {
  public string $code;
  public string $message;
}

class AuthorizationRuleSet {
}

class SnapshotDetailList {
}

class TransitGatewayMulticastDomainState {
}

class String {
}

class ElasticInferenceAccelerator {
  public string $type;
  public ElasticInferenceAcceleratorCount $count;
}

class RamdiskId {
}

class RouteTableAssociation {
  public RouteTableAssociationState $association_state;
  public boolean $main;
  public string $route_table_association_id;
  public string $route_table_id;
  public string $subnet_id;
  public string $gateway_id;
}

class SpotFleetRequestId {
}

class DiskInfoList {
}

class LaunchTemplate {
  public string $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public DateTime $create_time;
  public string $created_by;
  public Long $default_version_number;
  public Long $latest_version_number;
  public TagList $tags;
}

class GetEbsEncryptionByDefaultResult {
  public boolean $ebs_encryption_by_default;
}

class VolumeStatusAction {
  public string $event_id;
  public string $event_type;
  public string $code;
  public string $description;
}

class InferenceDeviceName {
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociationIdSet {
}

class TrafficMirrorFilterRule {
  public string $destination_cidr_block;
  public string $source_cidr_block;
  public string $traffic_mirror_filter_id;
  public TrafficDirection $traffic_direction;
  public TrafficMirrorRuleAction $rule_action;
  public int $protocol;
  public TrafficMirrorPortRange $destination_port_range;
  public TrafficMirrorPortRange $source_port_range;
  public string $description;
  public string $traffic_mirror_filter_rule_id;
  public int $rule_number;
}

class InstanceCountList {
}

class RebootInstancesRequest {
  public InstanceIdStringList $instance_ids;
  public boolean $dry_run;
}

class StatusName {
}

class VpcClassicLinkList {
}

class VpnConnection {
  public string $category;
  public VpnState $state;
  public string $vpn_connection_id;
  public VpnConnectionOptions $options;
  public VpnStaticRouteList $routes;
  public string $customer_gateway_configuration;
  public string $customer_gateway_id;
  public GatewayType $type;
  public string $vpn_gateway_id;
  public string $transit_gateway_id;
  public TagList $tags;
  public VgwTelemetryList $vgw_telemetry;
}

class VpnConnectionId {
}

class CreateFlowLogsRequest {
  public string $client_token;
  public string $deliver_logs_permission_arn;
  public string $log_group_name;
  public FlowLogResourceIds $resource_ids;
  public TrafficType $traffic_type;
  public string $log_format;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
  public FlowLogsResourceType $resource_type;
  public LogDestinationType $log_destination_type;
  public string $log_destination;
  public int $max_aggregation_interval;
}

class DeleteNetworkInterfacePermissionResult {
  public boolean $return;
}

class DescribeFastSnapshotRestoresResult {
  public DescribeFastSnapshotRestoreSuccessSet $fast_snapshot_restores;
  public NextToken $next_token;
}

class DescribeVpcEndpointServiceConfigurationsResult {
  public ServiceConfigurationSet $service_configurations;
  public string $next_token;
}

class ModifyIdFormatRequest {
  public boolean $use_long_ids;
  public string $resource;
}

class SearchTransitGatewayRoutesRequest {
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
}

class CancelSpotFleetRequestsSuccessSet {
}

class DescribeVpnConnectionsResult {
  public VpnConnectionList $vpn_connections;
}

class GroupNameStringList {
}

class LoadPermissionModifications {
  public LoadPermissionListRequest $remove;
  public LoadPermissionListRequest $add;
}

class DescribeSpotFleetRequestsRequest {
  public boolean $dry_run;
  public int $max_results;
  public string $next_token;
  public SpotFleetRequestIdList $spot_fleet_request_ids;
}

class ReplaceRouteTableAssociationResult {
  public string $new_association_id;
  public RouteTableAssociationState $association_state;
}

class TrafficMirrorTarget {
  public string $description;
  public string $owner_id;
  public TagList $tags;
  public string $traffic_mirror_target_id;
  public string $network_interface_id;
  public string $network_load_balancer_arn;
  public TrafficMirrorTargetType $type;
}

class AssociateSubnetCidrBlockResult {
  public SubnetIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $subnet_id;
}

class CreateVolumeRequest {
  public boolean $encrypted;
  public VolumeType $volume_type;
  public TagSpecificationList $tag_specifications;
  public boolean $multi_attach_enabled;
  public string $availability_zone;
  public int $iops;
  public KmsKeyId $kms_key_id;
  public string $outpost_arn;
  public int $size;
  public SnapshotId $snapshot_id;
  public boolean $dry_run;
}

class ImportImageLicenseSpecificationListResponse {
}

class RecurringCharge {
  public Double $amount;
  public RecurringChargeFrequency $frequency;
}

class VpcPeeringConnectionStateReason {
  public VpcPeeringConnectionStateReasonCode $code;
  public string $message;
}

class AssignedPrivateIpAddress {
  public string $private_ip_address;
}

class BatchState {
}

class InstanceStatusDetailsList {
}

class SpotInstanceRequestList {
}

class CreateFleetResult {
  public FleetId $fleet_id;
  public CreateFleetErrorsSet $errors;
  public CreateFleetInstancesSet $instances;
}

class VpcCidrBlockState {
  public VpcCidrBlockStateCode $state;
  public string $status_message;
}

class ElasticGpuHealth {
  public ElasticGpuStatus $status;
}

class VgwTelemetry {
  public string $outside_ip_address;
  public TelemetryStatus $status;
  public string $status_message;
  public string $certificate_arn;
  public int $accepted_route_count;
  public DateTime $last_status_change;
}

class VpcList {
}

class CreateNetworkInterfaceResult {
  public NetworkInterface $network_interface;
}

class DescribeSubnetsResult {
  public SubnetList $subnets;
  public string $next_token;
}

class DescribeTransitGatewayVpcAttachmentsResult {
  public string $next_token;
  public TransitGatewayVpcAttachmentList $transit_gateway_vpc_attachments;
}

class DescribeVpcClassicLinkDnsSupportRequest {
  public DescribeVpcClassicLinkDnsSupportMaxResults $max_results;
  public DescribeVpcClassicLinkDnsSupportNextToken $next_token;
  public VpcClassicLinkIdList $vpc_ids;
}

class AvailableCapacity {
  public int $available_v_cpus;
  public AvailableInstanceCapacityList $available_instance_capacity;
}

class DescribeFpgaImagesRequest {
  public boolean $dry_run;
  public FpgaImageIdList $fpga_image_ids;
  public OwnerStringList $owners;
  public FilterList $filters;
  public NextToken $next_token;
  public DescribeFpgaImagesMaxResults $max_results;
}

class NetworkAclEntryList {
}

class TransitGatewayMulticastDeregisteredGroupMembers {
  public string $transit_gateway_multicast_domain_id;
  public ValueStringList $deregistered_network_interface_ids;
  public string $group_ip_address;
}

class AssignPrivateIpAddressesResult {
  public string $network_interface_id;
  public AssignedPrivateIpAddressList $assigned_private_ip_addresses;
}

class DhcpOptionsList {
}

class RecurringChargesList {
}

class TagSpecificationList {
}

class InstanceNetworkInterfaceAttachment {
  public AttachmentStatus $status;
  public DateTime $attach_time;
  public string $attachment_id;
  public boolean $delete_on_termination;
  public int $device_index;
}

class MulticastSupportValue {
}

class ByoipCidrState {
}

class CreateNetworkInterfaceRequest {
  public string $description;
  public SecurityGroupIdStringList $groups;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public string $private_ip_address;
  public int $secondary_private_ip_address_count;
  public boolean $dry_run;
  public int $ipv_6_address_count;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public NetworkInterfaceCreationType $interface_type;
  public SubnetId $subnet_id;
}

class DeleteInternetGatewayRequest {
  public boolean $dry_run;
  public InternetGatewayId $internet_gateway_id;
}

class IKEVersionsList {
}

class DescribeIamInstanceProfileAssociationsMaxResults {
}

class GetEbsEncryptionByDefaultRequest {
  public boolean $dry_run;
}

class InstanceCapacity {
  public int $available_capacity;
  public string $instance_type;
  public int $total_capacity;
}

class SlotDateTimeRangeRequest {
  public DateTime $earliest_time;
  public DateTime $latest_time;
}

class CreateNatGatewayRequest {
  public SubnetId $subnet_id;
  public TagSpecificationList $tag_specifications;
  public AllocationId $allocation_id;
  public string $client_token;
  public boolean $dry_run;
}

class MoveAddressToVpcRequest {
  public boolean $dry_run;
  public string $public_ip;
}

class DeleteLaunchTemplateRequest {
  public boolean $dry_run;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
}

class DescribeAddressesResult {
  public AddressList $addresses;
}

class LaunchTemplateTagSpecification {
  public ResourceType $resource_type;
  public TagList $tags;
}

class UserBucket {
  public string $s_3_bucket;
  public string $s_3_key;
}

class HostInstanceList {
}

class CreateCustomerGatewayResult {
  public CustomerGateway $customer_gateway;
}

class AssociationIdList {
}

class CreateFpgaImageResult {
  public string $fpga_image_id;
  public string $fpga_image_global_id;
}

class EnableFastSnapshotRestoreStateErrorSet {
}

class FpgaDeviceMemorySize {
}

class DeleteClientVpnRouteResult {
  public ClientVpnRouteStatus $status;
}

class OwnerStringList {
}

class RejectTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class IpPermissionList {
}

class CapacityReservationOptions {
  public FleetCapacityReservationUsageStrategy $usage_strategy;
}

class DeleteQueuedReservedInstancesError {
  public DeleteQueuedReservedInstancesErrorCode $code;
  public string $message;
}

class ModifyTrafficMirrorFilterRuleResult {
  public TrafficMirrorFilterRule $traffic_mirror_filter_rule;
}

class DescribeCoipPoolsResult {
  public CoipPoolSet $coip_pools;
  public string $next_token;
}

class KernelId {
}

class SpotFleetRequestConfig {
  public ActivityStatus $activity_status;
  public MillisecondDateTime $create_time;
  public SpotFleetRequestConfigData $spot_fleet_request_config;
  public string $spot_fleet_request_id;
  public BatchState $spot_fleet_request_state;
  public TagList $tags;
}

class FilterList {
}

class InferenceDeviceInfo {
  public InferenceDeviceCount $count;
  public InferenceDeviceName $name;
  public InferenceDeviceManufacturerName $manufacturer;
}

class ReplaceNetworkAclEntryRequest {
  public boolean $dry_run;
  public IcmpTypeCode $icmp_type_code;
  public int $rule_number;
  public NetworkAclId $network_acl_id;
  public PortRange $port_range;
  public string $protocol;
  public RuleAction $rule_action;
  public string $cidr_block;
  public boolean $egress;
  public string $ipv_6_cidr_block;
}

class SecurityGroupIdStringList {
}

class SpotFleetLaunchSpecification {
  public SpotFleetTagSpecificationList $tag_specifications;
  public GroupIdentifierList $security_groups;
  public BlockDeviceMappingList $block_device_mappings;
  public Double $weighted_capacity;
  public InstanceNetworkInterfaceSpecificationList $network_interfaces;
  public SpotPlacement $placement;
  public InstanceType $instance_type;
  public string $kernel_id;
  public string $key_name;
  public string $ramdisk_id;
  public boolean $ebs_optimized;
  public IamInstanceProfileSpecification $iam_instance_profile;
  public SpotFleetMonitoring $monitoring;
  public string $spot_price;
  public string $subnet_id;
  public string $user_data;
  public string $addressing_type;
  public string $image_id;
}

class VolumeStatusAttachmentStatusList {
}

class ExportImageTaskId {
}

class TransitGatewayMulticastRegisteredGroupSources {
  public ValueStringList $registered_network_interface_ids;
  public string $group_ip_address;
  public string $transit_gateway_multicast_domain_id;
}

class AvailabilityZoneMessage {
  public string $message;
}

class CreateClientVpnEndpointResult {
  public string $dns_name;
  public string $client_vpn_endpoint_id;
  public ClientVpnEndpointStatus $status;
}

class DisassociateTransitGatewayMulticastDomainResult {
  public TransitGatewayMulticastDomainAssociations $associations;
}

class EnableFastSnapshotRestoreStateErrorItem {
  public string $availability_zone;
  public EnableFastSnapshotRestoreStateError $error;
}

class LocalGatewayRouteTableVirtualInterfaceGroupAssociationSet {
}

class ReservedInstancesOfferingIdStringList {
}

class ResetEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;
}

class DescribeBundleTasksRequest {
  public FilterList $filters;
  public boolean $dry_run;
  public BundleIdStringList $bundle_ids;
}

class ExportVmTaskId {
}

class InstanceMatchCriteria {
}

class ListingState {
}

class DeregisterImageRequest {
  public ImageId $image_id;
  public boolean $dry_run;
}

class PurchaseRequest {
  public int $instance_count;
  public string $purchase_token;
}

class ScheduledInstancesMonitoring {
  public boolean $enabled;
}

class DeleteTrafficMirrorSessionResult {
  public string $traffic_mirror_session_id;
}

class NetworkInterfacePermissionIdList {
}

class RouteTableAssociationId {
}

class EnableVpcClassicLinkResult {
  public boolean $return;
}

class InstanceMarketOptionsRequest {
  public MarketType $market_type;
  public SpotMarketOptions $spot_options;
}

class ReservedInstancesListingList {
}

class VolumeAttributeName {
}

class ExportTaskList {
}

class ModifyVpnTunnelOptionsSpecification {
  public Phase1DHGroupNumbersRequestList $phase_1_dh_group_numbers;
  public Phase2DHGroupNumbersRequestList $phase_2_dh_group_numbers;
  public int $replay_window_size;
  public int $phase_1_lifetime_seconds;
  public int $phase_2_lifetime_seconds;
  public int $dpd_timeout_seconds;
  public string $tunnel_inside_cidr;
  public Phase1EncryptionAlgorithmsRequestList $phase_1_encryption_algorithms;
  public Phase1IntegrityAlgorithmsRequestList $phase_1_integrity_algorithms;
  public Phase2IntegrityAlgorithmsRequestList $phase_2_integrity_algorithms;
  public int $rekey_fuzz_percentage;
  public int $rekey_margin_time_seconds;
  public Phase2EncryptionAlgorithmsRequestList $phase_2_encryption_algorithms;
  public IKEVersionsRequestList $ike_versions;
  public string $pre_shared_key;
}

class OccurrenceDayRequestSet {
}

class ClientVpnConnection {
  public string $username;
  public string $connection_established_time;
  public string $ingress_bytes;
  public string $egress_bytes;
  public string $egress_packets;
  public string $common_name;
  public string $client_vpn_endpoint_id;
  public string $connection_id;
  public string $ingress_packets;
  public string $client_ip;
  public ClientVpnConnectionStatus $status;
  public string $connection_end_time;
  public string $timestamp;
}

class DeleteVpcEndpointServiceConfigurationsRequest {
  public boolean $dry_run;
  public VpcEndpointServiceIdList $service_ids;
}

class SendDiagnosticInterruptRequest {
  public InstanceId $instance_id;
  public boolean $dry_run;
}

class SpotOptionsRequest {
  public int $instance_pools_to_use_count;
  public boolean $single_instance_type;
  public boolean $single_availability_zone;
  public int $min_target_capacity;
  public string $max_total_price;
  public SpotAllocationStrategy $allocation_strategy;
  public SpotInstanceInterruptionBehavior $instance_interruption_behavior;
}

class DescribeStaleSecurityGroupsNextToken {
}

class ImportInstanceRequest {
  public DiskImageList $disk_images;
  public boolean $dry_run;
  public ImportInstanceLaunchSpecification $launch_specification;
  public PlatformValues $platform;
  public string $description;
}

class StartInstancesResult {
  public InstanceStateChangeList $starting_instances;
}

class SubnetAssociationList {
}

class DescribeLocalGatewayVirtualInterfacesRequest {
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public LocalGatewayVirtualInterfaceIdSet $local_gateway_virtual_interface_ids;
  public FilterList $filters;
}

class InstanceNetworkInterfaceSpecificationList {
}

class InternetGateway {
  public InternetGatewayAttachmentList $attachments;
  public string $internet_gateway_id;
  public string $owner_id;
  public TagList $tags;
}

class KeyPairList {
}

class CancelSpotFleetRequestsError {
  public CancelBatchErrorCode $code;
  public string $message;
}

class IcmpTypeCode {
  public int $code;
  public int $type;
}

class ModifyAvailabilityZoneOptInStatus {
}

class ModifyLaunchTemplateRequest {
  public boolean $dry_run;
  public string $client_token;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public string $default_version;
}

class CreateFleetInstance {
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
  public InstanceIdsSet $instance_ids;
  public InstanceType $instance_type;
  public PlatformValues $platform;
}

class TransitGatewayMulticastGroupList {
}

class DescribeKeyPairsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public KeyNameStringList $key_names;
  public KeyPairIdStringList $key_pair_ids;
}

class EnableVgwRoutePropagationRequest {
  public VpnGatewayId $gateway_id;
  public RouteTableId $route_table_id;
  public boolean $dry_run;
}

class ModifyAvailabilityZoneGroupResult {
  public boolean $return;
}

class AssociateIamInstanceProfileResult {
  public IamInstanceProfileAssociation $iam_instance_profile_association;
}

class SnapshotList {
}

class ExportToS3Task {
  public string $s_3_bucket;
  public string $s_3_key;
  public ContainerFormat $container_format;
  public DiskImageFormat $disk_image_format;
}

class ModifyVpcEndpointConnectionNotificationResult {
  public boolean $return_value;
}

class NetworkInterfacePermission {
  public string $network_interface_permission_id;
  public string $network_interface_id;
  public string $aws_account_id;
  public string $aws_service;
  public InterfacePermissionType $permission;
  public NetworkInterfacePermissionState $permission_state;
}

class VpcPeeringConnectionList {
}

class EnableFastSnapshotRestoreSuccessSet {
}

class InstanceLifecycleType {
}

class LaunchTemplateCapacityReservationSpecificationRequest {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTarget $capacity_reservation_target;
}

class ModifyVpcTenancyResult {
  public boolean $return_value;
}

class CapacityReservationInstancePlatform {
}

class CreateVpcEndpointResult {
  public VpcEndpoint $vpc_endpoint;
  public string $client_token;
}

class DeleteKeyPairRequest {
  public KeyPairName $key_name;
  public KeyPairId $key_pair_id;
  public boolean $dry_run;
}

class DescribeVolumesModificationsResult {
  public VolumeModificationList $volumes_modifications;
  public string $next_token;
}

class NetworkInterfaceIpv6AddressesList {
}

class DescribeBundleTasksResult {
  public BundleTaskList $bundle_tasks;
}

class DescribeFastSnapshotRestoreSuccessSet {
}

class HostReservationIdSet {
}

class LocalGatewayRoutetableId {
}

class CancelSpotFleetRequestsErrorSet {
}

class DITOMaxResults {
}

class DescribeAvailabilityZonesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public ZoneNameStringList $zone_names;
  public ZoneIdStringList $zone_ids;
  public boolean $all_availability_zones;
}

class DescribeSpotFleetRequestHistoryResponse {
  public DateTime $start_time;
  public HistoryRecords $history_records;
  public DateTime $last_evaluated_time;
  public string $next_token;
  public string $spot_fleet_request_id;
}

class PurchaseRequestSet {
}

class RouteTableIdStringList {
}

class TransitGatewayMaxResults {
}

class BlockDeviceMappingList {
}

class DescribeScheduledInstanceAvailabilityMaxResults {
}

class LaunchTemplateIamInstanceProfileSpecification {
  public string $name;
  public string $arn;
}

class ProvisionByoipCidrResult {
  public ByoipCidr $byoip_cidr;
}

class AcceptVpcPeeringConnectionRequest {
  public boolean $dry_run;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class TrafficMirrorFilter {
  public TrafficMirrorFilterRuleList $egress_filter_rules;
  public TrafficMirrorNetworkServiceList $network_services;
  public string $description;
  public TagList $tags;
  public string $traffic_mirror_filter_id;
  public TrafficMirrorFilterRuleList $ingress_filter_rules;
}

class BlockDeviceMappingRequestList {
}

class DisassociateIamInstanceProfileRequest {
  public IamInstanceProfileAssociationId $association_id;
}

class TerminateClientVpnConnectionsRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public VpnConnectionId $connection_id;
  public string $username;
  public boolean $dry_run;
}

class TransitAssociationGatewayId {
}

class DeleteFpgaImageRequest {
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
}

class ModifyVpcPeeringConnectionOptionsRequest {
  public PeeringConnectionOptionsRequest $accepter_peering_connection_options;
  public boolean $dry_run;
  public PeeringConnectionOptionsRequest $requester_peering_connection_options;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class SensitiveUserData {
}

class ClientVpnAuthenticationType {
}

class IamInstanceProfileSpecification {
  public string $name;
  public string $arn;
}

class LocalGatewayId {
}

class ScheduledInstanceSet {
}

class NetworkInterface {
  public GroupIdentifierList $groups;
  public string $outpost_arn;
  public string $private_dns_name;
  public string $requester_id;
  public boolean $source_dest_check;
  public TagList $tag_set;
  public NetworkInterfaceAssociation $association;
  public NetworkInterfaceStatus $status;
  public string $subnet_id;
  public string $network_interface_id;
  public NetworkInterfaceIpv6AddressesList $ipv_6_addresses;
  public string $owner_id;
  public boolean $requester_managed;
  public string $vpc_id;
  public string $availability_zone;
  public string $description;
  public NetworkInterfaceType $interface_type;
  public string $mac_address;
  public string $private_ip_address;
  public NetworkInterfacePrivateIpAddressList $private_ip_addresses;
  public NetworkInterfaceAttachment $attachment;
}

class ReservedInstancesConfigurationList {
}

class TrafficMirrorTargetType {
}

class ReservationValue {
  public string $hourly_price;
  public string $remaining_total_value;
  public string $remaining_upfront_value;
}

class AutoRecoveryFlag {
}

class DescribeSubnetsMaxResults {
}

class EnaSupport {
}

class InstanceCreditSpecificationListRequest {
}

class LaunchTemplateInstanceNetworkInterfaceSpecification {
  public string $private_ip_address;
  public SubnetId $subnet_id;
  public boolean $associate_public_ip_address;
  public boolean $delete_on_termination;
  public string $description;
  public InstanceIpv6AddressList $ipv_6_addresses;
  public NetworkInterfaceId $network_interface_id;
  public PrivateIpAddressSpecificationList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
  public int $device_index;
  public GroupIdStringList $groups;
  public string $interface_type;
  public int $ipv_6_address_count;
}

class SpotPriceHistoryList {
}

class TrafficMirrorRuleAction {
}

class VpcCidrBlockAssociation {
  public VpcCidrBlockState $cidr_block_state;
  public string $association_id;
  public string $cidr_block;
}

class DeleteQueuedReservedInstancesResult {
  public SuccessfulQueuedPurchaseDeletionSet $successful_queued_purchase_deletions;
  public FailedQueuedPurchaseDeletionSet $failed_queued_purchase_deletions;
}

class DescribeEgressOnlyInternetGatewaysResult {
  public string $next_token;
  public EgressOnlyInternetGatewayList $egress_only_internet_gateways;
}

class DescribeInstancesRequest {
  public boolean $dry_run;
  public int $max_results;
  public string $next_token;
  public FilterList $filters;
  public InstanceIdStringList $instance_ids;
}

class GetEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;
}

class DescribeNatGatewaysRequest {
  public boolean $dry_run;
  public FilterList $filter;
  public DescribeNatGatewaysMaxResults $max_results;
  public NatGatewayIdStringList $nat_gateway_ids;
  public string $next_token;
}

class RequestLaunchTemplateData {
  public string $user_data;
  public ElasticGpuSpecificationList $elastic_gpu_specifications;
  public SecurityGroupStringList $security_groups;
  public LaunchTemplateCpuOptionsRequest $cpu_options;
  public LaunchTemplateCapacityReservationSpecificationRequest $capacity_reservation_specification;
  public ImageId $image_id;
  public InstanceType $instance_type;
  public KeyPairName $key_name;
  public RamdiskId $ram_disk_id;
  public boolean $disable_api_termination;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public SecurityGroupIdStringList $security_group_ids;
  public LaunchTemplateInstanceMarketOptionsRequest $instance_market_options;
  public LaunchTemplateIamInstanceProfileSpecificationRequest $iam_instance_profile;
  public LaunchTemplateLicenseSpecificationListRequest $license_specifications;
  public LaunchTemplateInstanceMetadataOptionsRequest $metadata_options;
  public CreditSpecificationRequest $credit_specification;
  public LaunchTemplatesMonitoringRequest $monitoring;
  public LaunchTemplateTagSpecificationRequestList $tag_specifications;
  public KernelId $kernel_id;
  public LaunchTemplateBlockDeviceMappingRequestList $block_device_mappings;
  public LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList $network_interfaces;
  public LaunchTemplatePlacementRequest $placement;
  public LaunchTemplateElasticInferenceAcceleratorList $elastic_inference_accelerators;
  public LaunchTemplateHibernationOptionsRequest $hibernation_options;
  public boolean $ebs_optimized;
}

class VpcEndpointRouteTableIdList {
}

class AssociateSubnetCidrBlockRequest {
  public string $ipv_6_cidr_block;
  public SubnetId $subnet_id;
}

class CertificateAuthentication {
  public string $client_root_certificate_chain;
}

class CreateDhcpOptionsRequest {
  public NewDhcpConfigurationList $dhcp_configurations;
  public boolean $dry_run;
}

class ImportKeyPairRequest {
  public boolean $dry_run;
  public string $key_name;
  public Blob $public_key_material;
  public TagSpecificationList $tag_specifications;
}

class AddressList {
}

class DiskImageDescription {
  public DiskImageFormat $format;
  public string $import_manifest_url;
  public Long $size;
  public string $checksum;
}

class Phase2EncryptionAlgorithmsList {
}

class TransitGatewayMulticastDomain {
  public TransitGatewayMulticastDomainState $state;
  public DateTime $creation_time;
  public TagList $tags;
  public string $transit_gateway_multicast_domain_id;
  public string $transit_gateway_id;
}

class VpnStaticRoute {
  public VpnStaticRouteSource $source;
  public VpnState $state;
  public string $destination_cidr_block;
}

class AssociatedNetworkType {
}

class LocalGatewayVirtualInterfaceGroupSet {
}

class TagSpecification {
  public ResourceType $resource_type;
  public TagList $tags;
}

class AvailabilityZoneStringList {
}

class CoipPoolId {
}

class LaunchTemplateBlockDeviceMappingList {
}

class SnapshotDetail {
  public string $device_name;
  public string $format;
  public string $progress;
  public string $snapshot_id;
  public string $status_message;
  public UserBucketDetails $user_bucket;
  public string $description;
  public string $status;
  public string $url;
  public Double $disk_image_size;
}

class DescribeAccountAttributesRequest {
  public AccountAttributeNameStringList $attribute_names;
  public boolean $dry_run;
}

class TrafficMirrorSessionFieldList {
}

class TrafficMirroringMaxResults {
}

class TransitGatewayRouteTablePropagation {
  public string $transit_gateway_attachment_id;
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayPropagationState $state;
}

class Blob {
}

class DescribeClassicLinkInstancesMaxResults {
}

class DescribePrefixListsRequest {
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
  public PrefixListResourceIdStringList $prefix_list_ids;
  public boolean $dry_run;
}

class DescribeSpotDatafeedSubscriptionRequest {
  public boolean $dry_run;
}

class DescribeSpotPriceHistoryRequest {
  public FilterList $filters;
  public boolean $dry_run;
  public InstanceTypeList $instance_types;
  public string $next_token;
  public DateTime $start_time;
  public string $availability_zone;
  public DateTime $end_time;
  public int $max_results;
  public ProductDescriptionList $product_descriptions;
}

class LaunchTemplateIamInstanceProfileSpecificationRequest {
  public string $arn;
  public string $name;
}

class ServiceTypeDetail {
  public ServiceType $service_type;
}

class CreateTransitGatewayRouteResult {
  public TransitGatewayRoute $route;
}

class CreateVolumePermission {
  public PermissionGroup $group;
  public string $user_id;
}

class UnsuccessfulItemError {
  public string $code;
  public string $message;
}

class DeleteLaunchTemplateVersionsResponseErrorSet {
}

class DescribeClientVpnAuthorizationRulesMaxResults {
}

class DisableTransitGatewayRouteTablePropagationResult {
  public TransitGatewayPropagation $propagation;
}

class NetworkAclAssociation {
  public string $network_acl_association_id;
  public string $network_acl_id;
  public string $subnet_id;
}

class CopyFpgaImageResult {
  public string $fpga_image_id;
}

class CreditSpecificationRequest {
  public string $cpu_credits;
}

class DeleteTagsRequest {
  public boolean $dry_run;
  public ResourceIdList $resources;
  public TagList $tags;
}

class VersionStringList {
}

class RegisterTransitGatewayMulticastGroupMembersRequest {
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public string $group_ip_address;
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public boolean $dry_run;
}

class RouteTableId {
}

class AssociateIamInstanceProfileRequest {
  public IamInstanceProfileSpecification $iam_instance_profile;
  public InstanceId $instance_id;
}

class DeleteTrafficMirrorFilterRequest {
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
  public boolean $dry_run;
}

class DeregisterTransitGatewayMulticastGroupMembersRequest {
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public string $group_ip_address;
  public TransitGatewayNetworkInterfaceIdList $network_interface_ids;
  public boolean $dry_run;
}

class DescribeIamInstanceProfileAssociationsResult {
  public IamInstanceProfileAssociationSet $iam_instance_profile_associations;
  public NextToken $next_token;
}

class DescribeLaunchTemplateVersionsResult {
  public LaunchTemplateVersionSet $launch_template_versions;
  public string $next_token;
}

class ModifyTrafficMirrorFilterNetworkServicesRequest {
  public TrafficMirrorFilterId $traffic_mirror_filter_id;
  public TrafficMirrorNetworkServiceList $add_network_services;
  public TrafficMirrorNetworkServiceList $remove_network_services;
  public boolean $dry_run;
}

class SecurityGroupId {
}

class ImportImageResult {
  public ImportImageLicenseSpecificationListResponse $license_specifications;
  public string $description;
  public string $import_task_id;
  public string $platform;
  public string $progress;
  public string $status;
  public string $architecture;
  public string $hypervisor;
  public string $image_id;
  public SnapshotDetailList $snapshot_details;
  public string $status_message;
  public string $kms_key_id;
  public string $license_type;
  public boolean $encrypted;
}

class LaunchTemplateVersion {
  public Long $version_number;
  public VersionDescription $version_description;
  public DateTime $create_time;
  public string $created_by;
  public boolean $default_version;
  public ResponseLaunchTemplateData $launch_template_data;
  public string $launch_template_id;
  public LaunchTemplateName $launch_template_name;
}

class ClientVpnAuthenticationRequest {
  public DirectoryServiceAuthenticationRequest $active_directory;
  public CertificateAuthenticationRequest $mutual_authentication;
  public ClientVpnAuthenticationType $type;
}

class CustomerGatewayId {
}

class DeleteVpcEndpointConnectionNotificationsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class ImageAttribute {
  public string $image_id;
  public LaunchPermissionList $launch_permissions;
  public ProductCodeList $product_codes;
  public AttributeValue $description;
  public AttributeValue $kernel_id;
  public AttributeValue $ramdisk_id;
  public AttributeValue $sriov_net_support;
  public BlockDeviceMappingList $block_device_mappings;
}

class AssociateRouteTableRequest {
  public boolean $dry_run;
  public RouteTableId $route_table_id;
  public SubnetId $subnet_id;
  public RouteGatewayId $gateway_id;
}

class InstanceStateName {
}

class SecurityGroup {
  public IpPermissionList $ip_permissions;
  public string $owner_id;
  public string $group_id;
  public IpPermissionList $ip_permissions_egress;
  public TagList $tags;
  public string $vpc_id;
  public string $description;
  public string $group_name;
}

class DefaultRouteTablePropagationValue {
}

class DeleteQueuedReservedInstancesErrorCode {
}

class ImportTaskIdList {
}

class Phase1EncryptionAlgorithmsRequestListValue {
  public string $value;
}

class DescribeSpotInstanceRequestsRequest {
  public SpotInstanceRequestIdList $spot_instance_request_ids;
  public string $next_token;
  public int $max_results;
  public FilterList $filters;
  public boolean $dry_run;
}

class ElasticGpuStatus {
}

class ModifyEbsDefaultKmsKeyIdResult {
  public string $kms_key_id;
}

class DescribeInternetGatewaysMaxResults {
}

class PrivateIpAddressConfigSet {
}

class UpdateSecurityGroupRuleDescriptionsIngressRequest {
  public boolean $dry_run;
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public IpPermissionList $ip_permissions;
}

class LaunchTemplateSpotMarketOptionsRequest {
  public string $max_price;
  public SpotInstanceType $spot_instance_type;
  public int $block_duration_minutes;
  public DateTime $valid_until;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
}

class RejectTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class CreateVpcPeeringConnectionResult {
  public VpcPeeringConnection $vpc_peering_connection;
}

class DescribeRouteTablesRequest {
  public boolean $dry_run;
  public RouteTableIdStringList $route_table_ids;
  public string $next_token;
  public DescribeRouteTablesMaxResults $max_results;
  public FilterList $filters;
}

class DisableFastSnapshotRestoreSuccessItem {
  public MillisecondDateTime $disabled_time;
  public string $availability_zone;
  public string $owner_id;
  public MillisecondDateTime $enabling_time;
  public MillisecondDateTime $optimizing_time;
  public MillisecondDateTime $disabling_time;
  public string $snapshot_id;
  public FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;
  public string $owner_alias;
  public MillisecondDateTime $enabled_time;
}

class Ipv6SupportValue {
}

class InstanceMetadataOptionsState {
}

class RevokeSecurityGroupEgressRequest {
  public string $ip_protocol;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
  public SecurityGroupId $group_id;
  public IpPermissionList $ip_permissions;
  public int $from_port;
  public int $to_port;
  public boolean $dry_run;
  public string $cidr_ip;
}

class AcceptVpcEndpointConnectionsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class DeleteClientVpnEndpointRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
}

class DnsSupportValue {
}

class PrefixListResourceIdStringList {
}

class BundleIdStringList {
}

class CapacityReservationTenancy {
}

class InstanceStatusEvent {
  public EventCode $code;
  public string $description;
  public DateTime $not_after;
  public DateTime $not_before;
  public DateTime $not_before_deadline;
  public InstanceEventId $instance_event_id;
}

class DeregisterInstanceEventNotificationAttributesRequest {
  public boolean $dry_run;
  public DeregisterInstanceTagAttributeRequest $instance_tag_attribute;
}

class DescribeAccountAttributesResult {
  public AccountAttributeList $account_attributes;
}

class ReservedInstanceReservationValueSet {
}

class FlowLogsResourceType {
}

class GetPasswordDataResult {
  public string $instance_id;
  public string $password_data;
  public DateTime $timestamp;
}

class SubnetIdStringList {
}

class CancelConversionRequest {
  public string $reason_message;
  public ConversionTaskId $conversion_task_id;
  public boolean $dry_run;
}

class ProcessorInfo {
  public ArchitectureTypeList $supported_architectures;
  public ProcessorSustainedClockSpeed $sustained_clock_speed_in_ghz;
}

class SubnetAssociation {
  public string $subnet_id;
  public TransitGatewayMulitcastDomainAssociationState $state;
}

class VersionDescription {
}

class ZoneIdStringList {
}

class ClientVpnConnectionStatus {
  public ClientVpnConnectionStatusCode $code;
  public string $message;
}

class DescribeCapacityReservationsMaxResults {
}

class InstancePrivateIpAddressList {
}

class ModifyReservedInstancesResult {
  public string $reserved_instances_modification_id;
}

class CapacityReservationTarget {
  public CapacityReservationId $capacity_reservation_id;
}

class DisableVpcClassicLinkDnsSupportResult {
  public boolean $return;
}

class GetConsoleOutputRequest {
  public InstanceId $instance_id;
  public boolean $dry_run;
  public boolean $latest;
}

class HostRecovery {
}

class DescribeExportImageTasksRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public ExportImageTaskIdList $export_image_task_ids;
  public DescribeExportImageTasksMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeSpotFleetInstancesResponse {
  public string $spot_fleet_request_id;
  public ActiveInstanceSet $active_instances;
  public string $next_token;
}

class RouteTableAssociationStateCode {
}

class ExportTransitGatewayRoutesRequest {
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public FilterList $filters;
  public string $s_3_bucket;
  public boolean $dry_run;
}

class FpgaDeviceInfo {
  public FpgaDeviceCount $count;
  public FpgaDeviceMemoryInfo $memory_info;
  public FpgaDeviceName $name;
  public FpgaDeviceManufacturerName $manufacturer;
}

class InstanceBlockDeviceMappingList {
}

class ModifyDefaultCreditSpecificationResult {
  public InstanceFamilyCreditSpecification $instance_family_credit_specification;
}

class CreateDhcpOptionsResult {
  public DhcpOptions $dhcp_options;
}

class CreateTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class DeleteTransitGatewayRouteResult {
  public TransitGatewayRoute $route;
}

class DescribeInstanceTypesRequest {
  public NextToken $next_token;
  public boolean $dry_run;
  public RequestInstanceTypeList $instance_types;
  public FilterList $filters;
  public DITMaxResults $max_results;
}

class TransitGatewayRouteTableState {
}

class CapacityReservationSet {
}

class ClientVpnRouteSet {
}

class DetachNetworkInterfaceRequest {
  public NetworkInterfaceAttachmentId $attachment_id;
  public boolean $dry_run;
  public boolean $force;
}

class SearchLocalGatewayRoutesResult {
  public LocalGatewayRouteList $routes;
  public string $next_token;
}

class DescribeReservedInstancesOfferingsRequest {
  public InstanceType $instance_type;
  public RIProductDescription $product_description;
  public string $next_token;
  public OfferingTypeValues $offering_type;
  public int $max_results;
  public FilterList $filters;
  public Long $max_duration;
  public Long $min_duration;
  public OfferingClassType $offering_class;
  public ReservedInstancesOfferingIdStringList $reserved_instances_offering_ids;
  public Tenancy $instance_tenancy;
  public string $availability_zone;
  public boolean $include_marketplace;
  public int $max_instance_count;
  public boolean $dry_run;
}

class Image {
  public boolean $ena_support;
  public ArchitectureValues $architecture;
  public string $creation_date;
  public string $image_location;
  public string $kernel_id;
  public string $usage_operation;
  public ImageState $state;
  public string $description;
  public HypervisorType $hypervisor;
  public string $root_device_name;
  public DeviceType $root_device_type;
  public string $sriov_net_support;
  public TagList $tags;
  public VirtualizationType $virtualization_type;
  public boolean $public;
  public string $owner_id;
  public PlatformValues $platform;
  public string $platform_details;
  public ProductCodeList $product_codes;
  public string $image_id;
  public ImageTypeValues $image_type;
  public string $ramdisk_id;
  public string $image_owner_alias;
  public BlockDeviceMappingList $block_device_mappings;
  public string $name;
  public StateReason $state_reason;
}

class NatGateway {
  public string $nat_gateway_id;
  public ProvisionedBandwidth $provisioned_bandwidth;
  public NatGatewayState $state;
  public string $subnet_id;
  public string $vpc_id;
  public TagList $tags;
  public DateTime $create_time;
  public DateTime $delete_time;
  public string $failure_code;
  public string $failure_message;
  public NatGatewayAddressList $nat_gateway_addresses;
}

class NetworkInterfaceAttachmentId {
}

class ModifyInstancePlacementResult {
  public boolean $return;
}

class RequestSpotInstancesResult {
  public SpotInstanceRequestList $spot_instance_requests;
}

class SpotInstanceType {
}

class UnassignIpv6AddressesResult {
  public string $network_interface_id;
  public Ipv6AddressList $unassigned_ipv_6_addresses;
}

class CreateSnapshotsRequest {
  public string $description;
  public InstanceSpecification $instance_specification;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
  public CopyTagsFromSource $copy_tags_from_source;
}

class DeleteQueuedReservedInstancesIdList {
}

class EbsEncryptionSupport {
}

class ImageState {
}

class VpcPeeringConnection {
  public TagList $tags;
  public string $vpc_peering_connection_id;
  public VpcPeeringConnectionVpcInfo $accepter_vpc_info;
  public DateTime $expiration_time;
  public VpcPeeringConnectionVpcInfo $requester_vpc_info;
  public VpcPeeringConnectionStateReason $status;
}

class CreateImageResult {
  public string $image_id;
}

class TransportProtocol {
}

class VpnTunnelOptionsSpecificationsList {
}

class ContainerFormat {
}

class DescribeMovingAddressesMaxResults {
}

class GetLaunchTemplateDataRequest {
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class MaxIpv4AddrPerInterface {
}

class ByoipCidrSet {
}

class ReservationId {
}

class SnapshotTaskDetail {
  public string $progress;
  public string $status;
  public string $status_message;
  public string $url;
  public UserBucketDetails $user_bucket;
  public string $description;
  public Double $disk_image_size;
  public boolean $encrypted;
  public string $format;
  public string $kms_key_id;
  public string $snapshot_id;
}

class StaleSecurityGroupSet {
}

class SlotStartTimeRangeRequest {
  public DateTime $earliest_time;
  public DateTime $latest_time;
}

class SummaryStatus {
}

class DeleteLaunchTemplateVersionsRequest {
  public boolean $dry_run;
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public VersionStringList $versions;
}

class HypervisorType {
}

class ProvisionByoipCidrRequest {
  public boolean $dry_run;
  public string $cidr;
  public CidrAuthorizationContext $cidr_authorization_context;
  public boolean $publicly_advertisable;
  public string $description;
}

class RegisterImageResult {
  public string $image_id;
}

class TrafficMirrorFilterRuleList {
}

class ModifySpotFleetRequestResponse {
  public boolean $return;
}

class Phase1EncryptionAlgorithmsList {
}

class StaleSecurityGroup {
  public StaleIpPermissionSet $stale_ip_permissions;
  public StaleIpPermissionSet $stale_ip_permissions_egress;
  public string $vpc_id;
  public string $description;
  public string $group_id;
  public string $group_name;
}

class ConnectionNotification {
  public string $service_id;
  public string $vpc_endpoint_id;
  public ConnectionNotificationType $connection_notification_type;
  public string $connection_notification_arn;
  public ValueStringList $connection_events;
  public ConnectionNotificationState $connection_notification_state;
  public string $connection_notification_id;
}

class DeleteFleetErrorItem {
  public DeleteFleetError $error;
  public FleetId $fleet_id;
}

class GetReservedInstancesExchangeQuoteResult {
  public string $currency_code;
  public boolean $is_valid_exchange;
  public string $payment_due;
  public ReservationValue $reserved_instance_value_rollup;
  public ReservedInstanceReservationValueSet $reserved_instance_value_set;
  public DateTime $output_reserved_instances_will_expire_at;
  public ReservationValue $target_configuration_value_rollup;
  public TargetReservationValueSet $target_configuration_value_set;
  public string $validation_failure_reason;
}

class InstanceState {
  public InstanceStateName $name;
  public int $code;
}

class CoreCountList {
}

class DescribeTagsRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public int $max_results;
  public string $next_token;
}

class PropagatingVgwList {
}

class TransitGatewayVpcAttachmentList {
}

class TerminateConnectionStatusSet {
}

class DescribePrincipalIdFormatResult {
  public PrincipalIdFormatList $principals;
  public string $next_token;
}

class DescribeTransitGatewayPeeringAttachmentsResult {
  public TransitGatewayPeeringAttachmentList $transit_gateway_peering_attachments;
  public string $next_token;
}

class GpuDeviceCount {
}

class StorageLocation {
  public string $bucket;
  public string $key;
}

class IdFormatList {
}

class PrincipalType {
}

class CancelReservedInstancesListingResult {
  public ReservedInstancesListingList $reserved_instances_listings;
}

class ConnectionLogResponseOptions {
  public string $cloudwatch_log_stream;
  public boolean $enabled;
  public string $cloudwatch_log_group;
}

class DetachInternetGatewayRequest {
  public boolean $dry_run;
  public InternetGatewayId $internet_gateway_id;
  public VpcId $vpc_id;
}

class ReservedInstancesModificationId {
}

class InstanceIdsSet {
}

class InternetGatewayId {
}

class LaunchTemplateInstanceMetadataEndpointState {
}

class TransitGatewayNetworkInterfaceIdList {
}

class CreateRouteResult {
  public boolean $return;
}

class InstanceStateChangeList {
}

class InternetGatewayList {
}

class TransitGatewayMulticastRegisteredGroupMembers {
  public string $group_ip_address;
  public string $transit_gateway_multicast_domain_id;
  public ValueStringList $registered_network_interface_ids;
}

class ModifyVpcAttributeRequest {
  public AttributeBooleanValue $enable_dns_hostnames;
  public AttributeBooleanValue $enable_dns_support;
  public VpcId $vpc_id;
}

class ProductCodeList {
}

class RestoreAddressToClassicResult {
  public string $public_ip;
  public Status $status;
}

class ThreadsPerCoreList {
}

class TransitGatewayAttachmentPropagation {
  public string $transit_gateway_route_table_id;
  public TransitGatewayPropagationState $state;
}

class DescribeIamInstanceProfileAssociationsRequest {
  public DescribeIamInstanceProfileAssociationsMaxResults $max_results;
  public NextToken $next_token;
  public AssociationIdList $association_ids;
  public FilterList $filters;
}

class DescribeReservedInstancesModificationsResult {
  public string $next_token;
  public ReservedInstancesModificationList $reserved_instances_modifications;
}

class ElasticInferenceAcceleratorAssociation {
  public string $elastic_inference_accelerator_arn;
  public string $elastic_inference_accelerator_association_id;
  public string $elastic_inference_accelerator_association_state;
  public DateTime $elastic_inference_accelerator_association_time;
}

class ResetSnapshotAttributeRequest {
  public SnapshotAttributeName $attribute;
  public SnapshotId $snapshot_id;
  public boolean $dry_run;
}

class DeleteTransitGatewayMulticastDomainRequest {
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public boolean $dry_run;
}

class GetCoipPoolUsageResult {
  public string $coip_pool_id;
  public CoipAddressUsageSet $coip_address_usages;
  public string $local_gateway_route_table_id;
}

class TransitGatewayAssociationState {
}

class DescribeVolumeStatusRequest {
  public int $max_results;
  public string $next_token;
  public VolumeIdStringList $volume_ids;
  public boolean $dry_run;
  public FilterList $filters;
}

class ResetFpgaImageAttributeName {
}

class LaunchPermission {
  public string $user_id;
  public PermissionGroup $group;
}

class TransitGatewayAttachmentId {
}

class CreateTransitGatewayMulticastDomainRequest {
  public TransitGatewayId $transit_gateway_id;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
}

class CreateVpnConnectionRouteRequest {
  public string $destination_cidr_block;
  public VpnConnectionId $vpn_connection_id;
}

class DescribeTrafficMirrorSessionsRequest {
  public TrafficMirrorSessionIdList $traffic_mirror_session_ids;
  public boolean $dry_run;
  public FilterList $filters;
  public TrafficMirroringMaxResults $max_results;
  public NextToken $next_token;
}

class FastSnapshotRestoreStateCode {
}

class AssociateRouteTableResult {
  public RouteTableAssociationState $association_state;
  public string $association_id;
}

class DescribeLocalGatewaysResult {
  public LocalGatewaySet $local_gateways;
  public string $next_token;
}

class TransitGatewayRouteTablePropagationList {
}

class CreateInternetGatewayRequest {
  public boolean $dry_run;
}

class DeleteClientVpnRouteRequest {
  public SubnetId $target_vpc_subnet_id;
  public string $destination_cidr_block;
  public boolean $dry_run;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
}

class InstanceStorageFlag {
}

class CreateTrafficMirrorFilterRequest {
  public string $description;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
  public string $client_token;
}

class InstanceStatusEventList {
}

class TransitGatewayRouteType {
}

class DescribeRegionsRequest {
  public FilterList $filters;
  public RegionNameStringList $region_names;
  public boolean $dry_run;
  public boolean $all_regions;
}

class FleetLaunchTemplateSpecificationRequest {
  public LaunchTemplateId $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public string $version;
}

class ImageDiskContainerList {
}

class LaunchTemplatesMonitoring {
  public boolean $enabled;
}

class CreateCapacityReservationRequest {
  public string $instance_type;
  public CapacityReservationInstancePlatform $instance_platform;
  public CapacityReservationTenancy $tenancy;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
  public string $availability_zone_id;
  public boolean $ephemeral_storage;
  public InstanceMatchCriteria $instance_match_criteria;
  public boolean $ebs_optimized;
  public DateTime $end_date;
  public EndDateType $end_date_type;
  public string $client_token;
  public string $availability_zone;
  public int $instance_count;
}

class CreateEgressOnlyInternetGatewayResult {
  public string $client_token;
  public EgressOnlyInternetGateway $egress_only_internet_gateway;
}

class CreateFpgaImageRequest {
  public boolean $dry_run;
  public StorageLocation $input_storage_location;
  public StorageLocation $logs_storage_location;
  public string $description;
  public string $name;
  public string $client_token;
  public TagSpecificationList $tag_specifications;
}

class DefaultingDhcpOptionsId {
}

class LocalGatewayVirtualInterface {
  public LocalGatewayVirtualInterfaceId $local_gateway_virtual_interface_id;
  public string $local_gateway_id;
  public int $vlan;
  public string $local_address;
  public string $peer_address;
  public int $local_bgp_asn;
  public int $peer_bgp_asn;
  public TagList $tags;
}

class PrivateIpAddressStringList {
}

class ProvisionedBandwidth {
  public DateTime $provision_time;
  public string $provisioned;
  public DateTime $request_time;
  public string $requested;
  public string $status;
}

class RegisterTransitGatewayMulticastGroupMembersResult {
  public TransitGatewayMulticastRegisteredGroupMembers $registered_multicast_group_members;
}

class AvailabilityZoneList {
}

class CoipAddressUsage {
  public string $aws_service;
  public string $co_ip;
  public string $allocation_id;
  public string $aws_account_id;
}

class DhcpConfigurationList {
}

class KeyPair {
  public string $key_fingerprint;
  public SensitiveUserData $key_material;
  public string $key_name;
  public string $key_pair_id;
  public TagList $tags;
}

class ImportVolumeRequest {
  public VolumeDetail $volume;
  public string $availability_zone;
  public string $description;
  public boolean $dry_run;
  public DiskImageDetail $image;
}

class ReservationState {
}

class Tag {
  public string $key;
  public string $value;
}

class ArchitectureValues {
}

class UpdateSecurityGroupRuleDescriptionsEgressRequest {
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public IpPermissionList $ip_permissions;
  public boolean $dry_run;
}

class LaunchPermissionList {
}

class ModifyFpgaImageAttributeRequest {
  public OperationType $operation_type;
  public ProductCodeStringList $product_codes;
  public boolean $dry_run;
  public FpgaImageId $fpga_image_id;
  public FpgaImageAttributeName $attribute;
  public string $description;
  public string $name;
  public UserIdStringList $user_ids;
  public UserGroupStringList $user_groups;
  public LoadPermissionModifications $load_permission;
}

class RevokeClientVpnIngressRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $target_network_cidr;
  public string $access_group_id;
  public boolean $revoke_all_groups;
  public boolean $dry_run;
}

class SpotFleetRequestConfigSet {
}

class SubnetCidrBlockStateCode {
}

class DescribeConversionTasksRequest {
  public ConversionIdStringList $conversion_task_ids;
  public boolean $dry_run;
}

class DescribeHostReservationOfferingsResult {
  public string $next_token;
  public HostOfferingSet $offering_set;
}

class GetDefaultCreditSpecificationRequest {
  public boolean $dry_run;
  public UnlimitedSupportedInstanceFamily $instance_family;
}

class PrefixListIdSet {
}

class DescribeFleetsInstances {
  public InstanceType $instance_type;
  public PlatformValues $platform;
  public LaunchTemplateAndOverridesResponse $launch_template_and_overrides;
  public InstanceLifecycle $lifecycle;
  public InstanceIdsSet $instance_ids;
}

class DescribeLocalGatewayRouteTableVirtualInterfaceGroupAssociationsRequest {
  public FilterList $filters;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public LocalGatewayRouteTableVirtualInterfaceGroupAssociationIdSet $local_gateway_route_table_virtual_interface_group_association_ids;
}

class DescribeInstanceTypeOfferingsResult {
  public InstanceTypeOfferingsList $instance_type_offerings;
  public NextToken $next_token;
}

class GetAssociatedIpv6PoolCidrsRequest {
  public Ipv6PoolEc2Id $pool_id;
  public NextToken $next_token;
  public Ipv6PoolMaxResults $max_results;
  public boolean $dry_run;
}

class InstanceMonitoring {
  public string $instance_id;
  public Monitoring $monitoring;
}

class ModifyHostsRequest {
  public AutoPlacement $auto_placement;
  public RequestHostIdList $host_ids;
  public HostRecovery $host_recovery;
  public string $instance_type;
  public string $instance_family;
}

class CoipAddressUsageSet {
}

class CreateFleetRequest {
  public FleetType $type;
  public boolean $dry_run;
  public FleetExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public FleetLaunchTemplateConfigListRequest $launch_template_configs;
  public TargetCapacitySpecificationRequest $target_capacity_specification;
  public DateTime $valid_from;
  public DateTime $valid_until;
  public boolean $replace_unhealthy_instances;
  public TagSpecificationList $tag_specifications;
  public string $client_token;
  public SpotOptionsRequest $spot_options;
  public OnDemandOptionsRequest $on_demand_options;
  public boolean $terminate_instances_with_expiration;
}

class DeleteSubnetRequest {
  public boolean $dry_run;
  public SubnetId $subnet_id;
}

class DescribeFleetInstancesRequest {
  public string $next_token;
  public FleetId $fleet_id;
  public FilterList $filters;
  public boolean $dry_run;
  public int $max_results;
}

class ModifyTrafficMirrorFilterRuleRequest {
  public TrafficMirrorFilterRuleId $traffic_mirror_filter_rule_id;
  public TrafficDirection $traffic_direction;
  public TrafficMirrorRuleAction $rule_action;
  public string $description;
  public TrafficMirrorFilterRuleFieldList $remove_fields;
  public int $rule_number;
  public TrafficMirrorPortRangeRequest $destination_port_range;
  public TrafficMirrorPortRangeRequest $source_port_range;
  public int $protocol;
  public string $destination_cidr_block;
  public string $source_cidr_block;
  public boolean $dry_run;
}

class VCpuCount {
}

class CreateNetworkInterfacePermissionResult {
  public NetworkInterfacePermission $interface_permission;
}

class DescribeTransitGatewayPeeringAttachmentsRequest {
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
  public TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;
  public FilterList $filters;
}

class ImportClientVpnClientCertificateRevocationListRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public string $certificate_revocation_list;
  public boolean $dry_run;
}

class ImportImageTask {
  public ImportImageLicenseSpecificationListResponse $license_specifications;
  public string $description;
  public string $status;
  public string $image_id;
  public string $kms_key_id;
  public string $license_type;
  public string $progress;
  public string $architecture;
  public boolean $encrypted;
  public string $status_message;
  public TagList $tags;
  public string $platform;
  public SnapshotDetailList $snapshot_details;
  public string $hypervisor;
  public string $import_task_id;
}

class LaunchTemplateLicenseConfigurationRequest {
  public string $license_configuration_arn;
}

class LaunchTemplatesMonitoringRequest {
  public boolean $enabled;
}

class CreateTransitGatewayRouteTableRequest {
  public TransitGatewayId $transit_gateway_id;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
}

class DeleteLocalGatewayRouteRequest {
  public string $destination_cidr_block;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public boolean $dry_run;
}

class DeleteTrafficMirrorTargetResult {
  public string $traffic_mirror_target_id;
}

class DisableEbsEncryptionByDefaultResult {
  public boolean $ebs_encryption_by_default;
}

class ArchitectureType {
}

class LaunchTemplateLicenseList {
}

class LocalGatewayVirtualInterfaceSet {
}

class PciId {
  public string $vendor_id;
  public string $subsystem_id;
  public string $subsystem_vendor_id;
  public string $device_id;
}

class DescribeMovingAddressesResult {
  public MovingAddressStatusSet $moving_address_statuses;
  public string $next_token;
}

class DescribeSpotFleetInstancesRequest {
  public string $next_token;
  public SpotFleetRequestId $spot_fleet_request_id;
  public boolean $dry_run;
  public DescribeSpotFleetInstancesMaxResults $max_results;
}

class LaunchTemplatePlacement {
  public string $spread_domain;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $availability_zone;
  public string $affinity;
  public string $group_name;
  public string $host_id;
  public Tenancy $tenancy;
}

class PeeringTgwInfo {
  public string $transit_gateway_id;
  public string $owner_id;
  public string $region;
}

class ActiveInstance {
  public string $instance_id;
  public string $instance_type;
  public string $spot_instance_request_id;
  public InstanceHealthStatus $instance_health;
}

class ClassicLoadBalancer {
  public string $name;
}

class DeleteFleetErrorSet {
}

class DescribeImportImageTasksRequest {
  public ImportTaskIdList $import_task_ids;
  public int $max_results;
  public string $next_token;
  public boolean $dry_run;
  public FilterList $filters;
}

class AccountAttributeValue {
  public string $attribute_value;
}

class DisableTransitGatewayRouteTablePropagationRequest {
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
}

class ExportEnvironment {
}

class Integer {
}

class ReplaceNetworkAclAssociationResult {
  public string $new_association_id;
}

class SpotInstanceRequestId {
}

class StateReason {
  public string $code;
  public string $message;
}

class DisableVgwRoutePropagationRequest {
  public boolean $dry_run;
  public VpnGatewayId $gateway_id;
  public RouteTableId $route_table_id;
}

class EgressOnlyInternetGatewayList {
}

class InstanceTypeHypervisor {
}

class ModifyVpcEndpointServiceConfigurationRequest {
  public ValueStringList $add_network_load_balancer_arns;
  public ValueStringList $remove_network_load_balancer_arns;
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public string $private_dns_name;
  public boolean $remove_private_dns_name;
  public boolean $acceptance_required;
}

class DescribeReservedInstancesListingsRequest {
  public ReservedInstancesListingId $reserved_instances_listing_id;
  public FilterList $filters;
  public ReservationId $reserved_instances_id;
}

class Phase2DHGroupNumbersRequestListValue {
  public int $value;
}

class SpotInstanceStatus {
  public string $code;
  public string $message;
  public DateTime $update_time;
}

class VpnConnectionOptionsSpecification {
  public boolean $enable_acceleration;
  public boolean $static_routes_only;
  public VpnTunnelOptionsSpecificationsList $tunnel_options;
}

class CidrBlock {
  public string $cidr_block;
}

class DescribeNetworkInterfacePermissionsRequest {
  public NetworkInterfacePermissionIdList $network_interface_permission_ids;
  public FilterList $filters;
  public string $next_token;
  public DescribeNetworkInterfacePermissionsMaxResults $max_results;
}

class MaxIpv6AddrPerInterface {
}

class PurchaseScheduledInstancesRequest {
  public string $client_token;
  public boolean $dry_run;
  public PurchaseRequestSet $purchase_requests;
}

class OccurrenceDaySet {
}

class DiskImageFormat {
}

class InstanceFamilyCreditSpecification {
  public UnlimitedSupportedInstanceFamily $instance_family;
  public string $cpu_credits;
}

class LaunchTemplateInstanceMetadataOptionsRequest {
  public int $http_put_response_hop_limit;
  public LaunchTemplateInstanceMetadataEndpointState $http_endpoint;
  public LaunchTemplateHttpTokensState $http_tokens;
}

class MoveStatus {
}

class FpgaDeviceName {
}

class LastError {
  public string $message;
  public string $code;
}

class Tenancy {
}

class DeleteTransitGatewayVpcAttachmentResult {
  public TransitGatewayVpcAttachment $transit_gateway_vpc_attachment;
}

class DescribeVolumeStatusResult {
  public VolumeStatusList $volume_statuses;
  public string $next_token;
}

class EgressOnlyInternetGatewayId {
}

class FlowLogResourceIds {
}

class ApplySecurityGroupsToClientVpnTargetNetworkRequest {
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public VpcId $vpc_id;
  public ClientVpnSecurityGroupIdSet $security_group_ids;
  public boolean $dry_run;
}

class AutoAcceptSharedAttachmentsValue {
}

class DescribeNatGatewaysMaxResults {
}

class RouteTableList {
}

class DescribeInstanceEventNotificationAttributesResult {
  public InstanceTagNotificationAttribute $instance_tag_attribute;
}

class PurchaseHostReservationResult {
  public string $client_token;
  public CurrencyCodeValues $currency_code;
  public PurchaseSet $purchase;
  public string $total_hourly_price;
  public string $total_upfront_price;
}

class ReservedInstanceReservationValue {
  public ReservationValue $reservation_value;
  public string $reserved_instance_id;
}

class ScheduledInstancesPrivateIpAddressConfig {
  public boolean $primary;
  public string $private_ip_address;
}

class BundleTaskError {
  public string $code;
  public string $message;
}

class DescribeTrafficMirrorTargetsRequest {
  public TrafficMirrorTargetIdList $traffic_mirror_target_ids;
  public boolean $dry_run;
  public FilterList $filters;
  public TrafficMirroringMaxResults $max_results;
  public NextToken $next_token;
}

class SubnetList {
}

class TransitGatewayAttachmentPropagationList {
}

class CancelSpotFleetRequestsSuccessItem {
  public BatchState $current_spot_fleet_request_state;
  public BatchState $previous_spot_fleet_request_state;
  public string $spot_fleet_request_id;
}

class ClassicLinkDnsSupportList {
}

class Region {
  public string $endpoint;
  public string $region_name;
  public string $opt_in_status;
}

class AuthorizeSecurityGroupEgressRequest {
  public string $cidr_ip;
  public int $from_port;
  public string $ip_protocol;
  public string $source_security_group_name;
  public boolean $dry_run;
  public SecurityGroupId $group_id;
  public IpPermissionList $ip_permissions;
  public int $to_port;
  public string $source_security_group_owner_id;
}

class CreateDefaultVpcResult {
  public Vpc $vpc;
}

class DescribeImportSnapshotTasksRequest {
  public string $next_token;
  public boolean $dry_run;
  public FilterList $filters;
  public ImportSnapshotTaskIdList $import_task_ids;
  public int $max_results;
}

class DescribeSpotFleetRequestsResponse {
  public string $next_token;
  public SpotFleetRequestConfigSet $spot_fleet_request_configs;
}

class PlatformValues {
}

class TransitGatewayPeeringAttachmentList {
}

class DescribeNetworkAclsMaxResults {
}

class EnableVpcClassicLinkDnsSupportResult {
  public boolean $return;
}

class FleetId {
}

class RunScheduledInstancesResult {
  public InstanceIdSet $instance_id_set;
}

class CopySnapshotResult {
  public TagList $tags;
  public string $snapshot_id;
}

class CreateTransitGatewayVpcAttachmentRequest {
  public TransitGatewayId $transit_gateway_id;
  public VpcId $vpc_id;
  public TransitGatewaySubnetIdList $subnet_ids;
  public CreateTransitGatewayVpcAttachmentRequestOptions $options;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
}

class LaunchTemplateErrorCode {
}

class DescribePublicIpv4PoolsRequest {
  public PublicIpv4PoolIdStringList $pool_ids;
  public NextToken $next_token;
  public PoolMaxResults $max_results;
  public FilterList $filters;
}

class LaunchTemplateElasticInferenceAcceleratorList {
}

class VolumeAttachmentList {
}

class VolumeAttachmentState {
}

class DescribeVolumesResult {
  public VolumeList $volumes;
  public string $next_token;
}

class FleetOnDemandAllocationStrategy {
}

class LaunchTemplateName {
}

class LocalGatewayVirtualInterfaceId {
}

class CopyImageResult {
  public string $image_id;
}

class DescribeClientVpnEndpointsResult {
  public EndpointSet $client_vpn_endpoints;
  public NextToken $next_token;
}

class TransitGatewayRouteAttachment {
  public string $resource_id;
  public string $transit_gateway_attachment_id;
  public TransitGatewayAttachmentResourceType $resource_type;
}

class DescribeInstanceAttributeRequest {
  public InstanceAttributeName $attribute;
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class ExportTask {
  public string $export_task_id;
  public ExportToS3Task $export_to_s_3_task;
  public InstanceExportDetails $instance_export_details;
  public ExportTaskState $state;
  public string $status_message;
  public TagList $tags;
  public string $description;
}

class InstanceCount {
  public int $instance_count;
  public ListingState $state;
}

class Route {
  public string $egress_only_internet_gateway_id;
  public string $nat_gateway_id;
  public string $vpc_peering_connection_id;
  public string $destination_cidr_block;
  public string $instance_owner_id;
  public string $destination_ipv_6_cidr_block;
  public string $instance_id;
  public string $transit_gateway_id;
  public string $local_gateway_id;
  public string $network_interface_id;
  public RouteOrigin $origin;
  public RouteState $state;
  public string $destination_prefix_list_id;
  public string $gateway_id;
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

class DescribeVpcEndpointsResult {
  public VpcEndpointSet $vpc_endpoints;
  public string $next_token;
}

class FpgaImageIdList {
}

class HostOfferingSet {
}

class CreateNetworkAclEntryRequest {
  public int $rule_number;
  public boolean $dry_run;
  public NetworkAclId $network_acl_id;
  public PortRange $port_range;
  public RuleAction $rule_action;
  public string $protocol;
  public string $cidr_block;
  public boolean $egress;
  public IcmpTypeCode $icmp_type_code;
  public string $ipv_6_cidr_block;
}

class InstanceId {
}

class ScheduledInstancesNetworkInterface {
  public PrivateIpAddressConfigSet $private_ip_address_configs;
  public int $secondary_private_ip_address_count;
  public string $description;
  public int $ipv_6_address_count;
  public NetworkInterfaceId $network_interface_id;
  public ScheduledInstancesSecurityGroupIdSet $groups;
  public ScheduledInstancesIpv6AddressList $ipv_6_addresses;
  public string $private_ip_address;
  public SubnetId $subnet_id;
  public boolean $associate_public_ip_address;
  public boolean $delete_on_termination;
  public int $device_index;
}

class FleetSet {
}

class VpnConnectionList {
}

class Phase2DHGroupNumbersListValue {
  public int $value;
}

class GetHostReservationPurchasePreviewRequest {
  public RequestHostIdSet $host_id_set;
  public OfferingId $offering_id;
}

class PlacementStrategy {
}

class ProductCode {
  public ProductCodeValues $product_code_type;
  public string $product_code_id;
}

class SearchLocalGatewayRoutesRequest {
  public string $next_token;
  public boolean $dry_run;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
  public FilterList $filters;
  public MaxResults $max_results;
}

class Boolean {
}

class DescribeInstanceStatusResult {
  public InstanceStatusList $instance_statuses;
  public string $next_token;
}

class TrafficMirrorNetworkServiceList {
}

class CertificateAuthenticationRequest {
  public string $client_root_certificate_chain_arn;
}

class DescribeFastSnapshotRestoreSuccessItem {
  public MillisecondDateTime $enabling_time;
  public MillisecondDateTime $optimizing_time;
  public MillisecondDateTime $disabled_time;
  public FastSnapshotRestoreStateCode $state;
  public string $owner_alias;
  public string $state_transition_reason;
  public string $owner_id;
  public MillisecondDateTime $enabled_time;
  public MillisecondDateTime $disabling_time;
  public string $snapshot_id;
  public string $availability_zone;
}

class InstanceCreditSpecification {
  public string $instance_id;
  public string $cpu_credits;
}

class LaunchTemplatePlacementRequest {
  public string $spread_domain;
  public string $host_resource_group_arn;
  public int $partition_number;
  public string $availability_zone;
  public string $affinity;
  public PlacementGroupName $group_name;
  public DedicatedHostId $host_id;
  public Tenancy $tenancy;
}

class CreateTrafficMirrorSessionResult {
  public TrafficMirrorSession $traffic_mirror_session;
  public string $client_token;
}

class UnmonitorInstancesRequest {
  public InstanceIdStringList $instance_ids;
  public boolean $dry_run;
}

class DisassociateClientVpnTargetNetworkResult {
  public string $association_id;
  public AssociationStatus $status;
}

class InstanceIdStringList {
}

class CustomerGatewayIdStringList {
}

class DescribeAddressesRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public PublicIpStringList $public_ips;
  public AllocationIdList $allocation_ids;
}

class DescribeTransitGatewayRouteTablesResult {
  public TransitGatewayRouteTableList $transit_gateway_route_tables;
  public string $next_token;
}

class DescribeVpcClassicLinkResult {
  public VpcClassicLinkList $vpcs;
}

class Long {
}

class ModifyTrafficMirrorFilterNetworkServicesResult {
  public TrafficMirrorFilter $traffic_mirror_filter;
}

class SuccessfulInstanceCreditSpecificationItem {
  public string $instance_id;
}

class CreateLocalGatewayRouteTableVpcAssociationResult {
  public LocalGatewayRouteTableVpcAssociation $local_gateway_route_table_vpc_association;
}

class DescribeImportImageTasksResult {
  public ImportImageTaskList $import_image_tasks;
  public string $next_token;
}

class DeleteFlowLogsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class EnableEbsEncryptionByDefaultRequest {
  public boolean $dry_run;
}

class PrincipalIdFormat {
  public IdFormatList $statuses;
  public string $arn;
}

class ReportInstanceReasonCodes {
}

class TransitGatewayAttachmentState {
}

class DescribePrincipalIdFormatMaxResults {
}

class ImportInstanceTaskDetails {
  public string $description;
  public string $instance_id;
  public PlatformValues $platform;
  public ImportInstanceVolumeDetailSet $volumes;
}

class DeleteSecurityGroupRequest {
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public boolean $dry_run;
}

class LaunchTemplateTagSpecificationList {
}

class TargetCapacitySpecificationRequest {
  public int $total_target_capacity;
  public int $on_demand_target_capacity;
  public int $spot_target_capacity;
  public DefaultTargetCapacityType $default_target_capacity_type;
}

class ValueStringList {
}

class FleetCapacityReservationUsageStrategy {
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

class SpotMarketOptions {
  public DateTime $valid_until;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public string $max_price;
  public SpotInstanceType $spot_instance_type;
  public int $block_duration_minutes;
}

class VCpuInfo {
  public VCpuCount $default_v_cpus;
  public CoreCount $default_cores;
  public ThreadsPerCore $default_threads_per_core;
  public CoreCountList $valid_cores;
  public ThreadsPerCoreList $valid_threads_per_core;
}

class VolumeStatusItem {
  public VolumeStatusActionsList $actions;
  public string $availability_zone;
  public string $outpost_arn;
  public VolumeStatusEventsList $events;
  public string $volume_id;
  public VolumeStatusInfo $volume_status;
  public VolumeStatusAttachmentStatusList $attachment_statuses;
}

class DescribeLaunchTemplatesRequest {
  public LaunchTemplateIdStringList $launch_template_ids;
  public LaunchTemplateNameStringList $launch_template_names;
  public FilterList $filters;
  public string $next_token;
  public DescribeLaunchTemplatesMaxResults $max_results;
  public boolean $dry_run;
}

class FleetType {
}

class LaunchTemplateInstanceNetworkInterfaceSpecificationRequestList {
}

class UnlimitedSupportedInstanceFamily {
}

class CreateInstanceExportTaskRequest {
  public string $description;
  public ExportToS3TaskSpecification $export_to_s_3_task;
  public InstanceId $instance_id;
  public ExportEnvironment $target_environment;
}

class InstanceUsage {
  public string $account_id;
  public int $used_instance_count;
}

class NetworkInterfaceCreationType {
}

class NetworkInterfaceIpv6Address {
  public string $ipv_6_address;
}

class CreateSecurityGroupResult {
  public string $group_id;
}

class CreateSubnetResult {
  public Subnet $subnet;
}

class ExportImageRequest {
  public ExportTaskS3LocationRequest $s_3_export_location;
  public string $role_name;
  public string $client_token;
  public string $description;
  public DiskImageFormat $disk_image_format;
  public boolean $dry_run;
  public ImageId $image_id;
}

class NetworkInterfaceAttribute {
}

class DeleteSpotDatafeedSubscriptionRequest {
  public boolean $dry_run;
}

class ElasticGpuState {
}

class HistoryRecordSet {
}

class TrafficMirrorTargetSet {
}

class MonitorInstancesRequest {
  public InstanceIdStringList $instance_ids;
  public boolean $dry_run;
}

class PlacementGroupIdStringList {
}

class ScheduledInstanceAvailability {
  public int $total_scheduled_instance_hours;
  public string $availability_zone;
  public int $available_instance_count;
  public DateTime $first_slot_start_time;
  public string $hourly_price;
  public string $instance_type;
  public int $max_term_duration_in_days;
  public string $purchase_token;
  public int $min_term_duration_in_days;
  public string $network_platform;
  public string $platform;
  public ScheduledInstanceRecurrence $recurrence;
  public int $slot_duration_in_hours;
}

class VpcIdStringList {
}

class CreateEgressOnlyInternetGatewayRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
  public string $client_token;
}

class CreateVpnConnectionRequest {
  public boolean $dry_run;
  public VpnConnectionOptionsSpecification $options;
  public CustomerGatewayId $customer_gateway_id;
  public string $type;
  public VpnGatewayId $vpn_gateway_id;
  public TransitGatewayId $transit_gateway_id;
}

class ExecutableByStringList {
}

class Ipv6Range {
  public string $cidr_ipv_6;
  public string $description;
}

class VpnGatewayIdStringList {
}

class DescribeAggregateIdFormatResult {
  public boolean $use_long_ids_aggregated;
  public IdFormatList $statuses;
}

class NetworkAclAssociationId {
}

class VolumeIdStringList {
}

class VpnTunnelOptionsSpecification {
  public string $pre_shared_key;
  public int $rekey_margin_time_seconds;
  public Phase1EncryptionAlgorithmsRequestList $phase_1_encryption_algorithms;
  public Phase1IntegrityAlgorithmsRequestList $phase_1_integrity_algorithms;
  public Phase1DHGroupNumbersRequestList $phase_1_dh_group_numbers;
  public string $tunnel_inside_cidr;
  public int $phase_1_lifetime_seconds;
  public int $replay_window_size;
  public int $dpd_timeout_seconds;
  public Phase2EncryptionAlgorithmsRequestList $phase_2_encryption_algorithms;
  public int $phase_2_lifetime_seconds;
  public int $rekey_fuzz_percentage;
  public Phase2IntegrityAlgorithmsRequestList $phase_2_integrity_algorithms;
  public Phase2DHGroupNumbersRequestList $phase_2_dh_group_numbers;
  public IKEVersionsRequestList $ike_versions;
}

class AssociationStatus {
  public AssociationStatusCode $code;
  public string $message;
}

class CreateSnapshotRequest {
  public string $description;
  public VolumeId $volume_id;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
}

class DeleteLocalGatewayRouteTableVpcAssociationResult {
  public LocalGatewayRouteTableVpcAssociation $local_gateway_route_table_vpc_association;
}

class DeleteNetworkInterfacePermissionRequest {
  public NetworkInterfacePermissionId $network_interface_permission_id;
  public boolean $force;
  public boolean $dry_run;
}

class CopyImageRequest {
  public string $client_token;
  public string $description;
  public boolean $encrypted;
  public KmsKeyId $kms_key_id;
  public string $name;
  public string $source_image_id;
  public string $source_region;
  public boolean $dry_run;
}

class SecurityGroupStringList {
}

class NetworkInterfaceIdList {
}

class TrafficMirrorTargetIdList {
}

class CreateRouteTableRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class DescribeLocalGatewayVirtualInterfacesResult {
  public LocalGatewayVirtualInterfaceSet $local_gateway_virtual_interfaces;
  public string $next_token;
}

class ExportImageTaskIdList {
}

class ExportToS3TaskSpecification {
  public ContainerFormat $container_format;
  public DiskImageFormat $disk_image_format;
  public string $s_3_bucket;
  public string $s_3_prefix;
}

class RouteList {
}

class DeleteNatGatewayResult {
  public string $nat_gateway_id;
}

class DiskType {
}

class PoolMaxResults {
}

class RejectTransitGatewayPeeringAttachmentRequest {
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public boolean $dry_run;
}

class DeleteLaunchTemplateResult {
  public LaunchTemplate $launch_template;
}

class DescribeImagesRequest {
  public FilterList $filters;
  public ImageIdStringList $image_ids;
  public OwnerStringList $owners;
  public boolean $dry_run;
  public ExecutableByStringList $executable_users;
}

class DiskInfo {
  public DiskCount $count;
  public DiskType $type;
  public DiskSize $size_in_gb;
}

class StopInstancesResult {
  public InstanceStateChangeList $stopping_instances;
}

class GetCapacityReservationUsageRequest {
  public CapacityReservationId $capacity_reservation_id;
  public string $next_token;
  public GetCapacityReservationUsageRequestMaxResults $max_results;
  public boolean $dry_run;
}

class InstanceCreditSpecificationRequest {
  public string $cpu_credits;
  public InstanceId $instance_id;
}

class ModifyClientVpnEndpointResult {
  public boolean $return;
}

class ResetImageAttributeName {
}

class Affinity {
}

class BlockDeviceMapping {
  public string $device_name;
  public string $virtual_name;
  public EbsBlockDevice $ebs;
  public string $no_device;
}

class DescribeCapacityReservationsResult {
  public string $next_token;
  public CapacityReservationSet $capacity_reservations;
}

class EbsInstanceBlockDeviceSpecification {
  public VolumeId $volume_id;
  public boolean $delete_on_termination;
}

class Purchase {
  public string $upfront_price;
  public CurrencyCodeValues $currency_code;
  public int $duration;
  public ResponseHostIdSet $host_id_set;
  public string $host_reservation_id;
  public string $hourly_price;
  public string $instance_family;
  public PaymentOption $payment_option;
}

class DeleteVpcEndpointsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class DescribeClientVpnAuthorizationRulesRequest {
  public FilterList $filters;
  public DescribeClientVpnAuthorizationRulesMaxResults $max_results;
  public ClientVpnEndpointId $client_vpn_endpoint_id;
  public boolean $dry_run;
  public NextToken $next_token;
}

class LocalGatewayVirtualInterfaceGroup {
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public LocalGatewayVirtualInterfaceIdSet $local_gateway_virtual_interface_ids;
  public string $local_gateway_id;
  public TagList $tags;
}

class PricingDetail {
  public int $count;
  public Double $price;
}

class IdFormat {
  public DateTime $deadline;
  public string $resource;
  public boolean $use_long_ids;
}

class SnapshotInfo {
  public string $description;
  public TagList $tags;
  public MillisecondDateTime $start_time;
  public string $owner_id;
  public string $snapshot_id;
  public boolean $encrypted;
  public string $volume_id;
  public SnapshotState $state;
  public int $volume_size;
  public string $progress;
}

class SpotFleetRequestConfigData {
  public DateTime $valid_until;
  public LoadBalancersConfig $load_balancers_config;
  public string $client_token;
  public ExcessCapacityTerminationPolicy $excess_capacity_termination_policy;
  public Double $on_demand_fulfilled_capacity;
  public LaunchSpecsList $launch_specifications;
  public boolean $terminate_instances_with_expiration;
  public int $target_capacity;
  public string $on_demand_max_total_price;
  public FleetType $type;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public Double $fulfilled_capacity;
  public LaunchTemplateConfigList $launch_template_configs;
  public int $on_demand_target_capacity;
  public string $spot_max_total_price;
  public boolean $replace_unhealthy_instances;
  public TagSpecificationList $tag_specifications;
  public AllocationStrategy $allocation_strategy;
  public OnDemandAllocationStrategy $on_demand_allocation_strategy;
  public string $iam_fleet_role;
  public string $spot_price;
  public DateTime $valid_from;
}

class AssociateAddressRequest {
  public string $private_ip_address;
  public AllocationId $allocation_id;
  public InstanceId $instance_id;
  public string $public_ip;
  public boolean $allow_reassociation;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
}

class AssociateClientVpnTargetNetworkResult {
  public string $association_id;
  public AssociationStatus $status;
}

class CapacityReservation {
  public string $availability_zone;
  public int $total_instance_count;
  public string $instance_type;
  public CapacityReservationTenancy $tenancy;
  public CapacityReservationState $state;
  public string $owner_id;
  public string $capacity_reservation_arn;
  public string $availability_zone_id;
  public int $available_instance_count;
  public boolean $ebs_optimized;
  public EndDateType $end_date_type;
  public InstanceMatchCriteria $instance_match_criteria;
  public DateTime $create_date;
  public string $capacity_reservation_id;
  public boolean $ephemeral_storage;
  public DateTime $end_date;
  public TagList $tags;
  public CapacityReservationInstancePlatform $instance_platform;
}

class DnsNameState {
}

class ReleaseHostsRequest {
  public RequestHostIdList $host_ids;
}

class SpotOptions {
  public SpotInstanceInterruptionBehavior $instance_interruption_behavior;
  public int $instance_pools_to_use_count;
  public boolean $single_instance_type;
  public boolean $single_availability_zone;
  public int $min_target_capacity;
  public string $max_total_price;
  public SpotAllocationStrategy $allocation_strategy;
}

class VpcEndpointServiceId {
}

class DefaultTargetCapacityType {
}

class DescribeFastSnapshotRestoresRequest {
  public FilterList $filters;
  public DescribeFastSnapshotRestoresMaxResults $max_results;
  public NextToken $next_token;
  public boolean $dry_run;
}

class ReservedInstancesIdStringList {
}

class VpcEndpointConnection {
  public DnsEntrySet $dns_entries;
  public ValueStringList $network_load_balancer_arns;
  public string $service_id;
  public string $vpc_endpoint_id;
  public string $vpc_endpoint_owner;
  public State $vpc_endpoint_state;
  public MillisecondDateTime $creation_timestamp;
}

class DescribePlacementGroupsRequest {
  public FilterList $filters;
  public boolean $dry_run;
  public PlacementGroupStringList $group_names;
  public PlacementGroupIdStringList $group_ids;
}

class KeyPairInfo {
  public string $key_pair_id;
  public string $key_fingerprint;
  public string $key_name;
  public TagList $tags;
}

class NetworkInterfacePrivateIpAddress {
  public NetworkInterfaceAssociation $association;
  public boolean $primary;
  public string $private_dns_name;
  public string $private_ip_address;
}

class TransitGatewayState {
}

class ClassicLinkDnsSupport {
  public boolean $classic_link_dns_supported;
  public string $vpc_id;
}

class MillisecondDateTime {
}

class ModifyLaunchTemplateResult {
  public LaunchTemplate $launch_template;
}

class TrafficMirrorFilterSet {
}

class TagDescriptionList {
}

class TerminateClientVpnConnectionsResult {
  public string $client_vpn_endpoint_id;
  public string $username;
  public TerminateConnectionStatusSet $connection_statuses;
}

class TrafficMirrorSessionIdList {
}

class AcceptVpcPeeringConnectionResult {
  public VpcPeeringConnection $vpc_peering_connection;
}

class GetTransitGatewayRouteTablePropagationsRequest {
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
}

class LaunchTemplateElasticInferenceAcceleratorCount {
}

class RouteTableAssociationState {
  public string $status_message;
  public RouteTableAssociationStateCode $state;
}

class ActiveInstanceSet {
}

class DeleteFleetsResult {
  public DeleteFleetSuccessSet $successful_fleet_deletions;
  public DeleteFleetErrorSet $unsuccessful_fleet_deletions;
}

class TransitGatewayMulticastDomainAssociation {
  public SubnetAssociation $subnet;
  public string $transit_gateway_attachment_id;
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
}

class UserIdGroupPair {
  public string $vpc_id;
  public string $vpc_peering_connection_id;
  public string $description;
  public string $group_id;
  public string $group_name;
  public string $peering_status;
  public string $user_id;
}

class AcceptReservedInstancesExchangeQuoteRequest {
  public boolean $dry_run;
  public ReservedInstanceIdSet $reserved_instance_ids;
  public TargetConfigurationRequestSet $target_configurations;
}

class CancelCapacityReservationResult {
  public boolean $return;
}

class OfferingClassType {
}

class VpnGateway {
  public string $availability_zone;
  public VpnState $state;
  public GatewayType $type;
  public VpcAttachmentList $vpc_attachments;
  public string $vpn_gateway_id;
  public Long $amazon_side_asn;
  public TagList $tags;
}

class CreateCustomerGatewayRequest {
  public int $bgp_asn;
  public string $public_ip;
  public string $certificate_arn;
  public GatewayType $type;
  public string $device_name;
  public boolean $dry_run;
}

class EnableFastSnapshotRestoreSuccessItem {
  public string $snapshot_id;
  public string $owner_id;
  public string $owner_alias;
  public MillisecondDateTime $enabling_time;
  public MillisecondDateTime $enabled_time;
  public MillisecondDateTime $disabled_time;
  public string $availability_zone;
  public FastSnapshotRestoreStateCode $state;
  public string $state_transition_reason;
  public MillisecondDateTime $optimizing_time;
  public MillisecondDateTime $disabling_time;
}

class FpgaImageList {
}

class LaunchTemplateEbsBlockDevice {
  public VolumeType $volume_type;
  public boolean $encrypted;
  public boolean $delete_on_termination;
  public int $iops;
  public KmsKeyId $kms_key_id;
  public SnapshotId $snapshot_id;
  public int $volume_size;
}

class NetworkInterfaceType {
}

class AttachClassicLinkVpcRequest {
  public GroupIdStringList $groups;
  public InstanceId $instance_id;
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class FpgaImage {
  public string $shell_version;
  public boolean $data_retention_support;
  public string $fpga_image_id;
  public DateTime $create_time;
  public string $owner_id;
  public ProductCodeList $product_codes;
  public TagList $tags;
  public boolean $public;
  public string $name;
  public PciId $pci_id;
  public FpgaImageState $state;
  public string $owner_alias;
  public string $fpga_image_global_id;
  public string $description;
  public DateTime $update_time;
}

class InstanceNetworkInterface {
  public NetworkInterfaceStatus $status;
  public InstanceNetworkInterfaceAssociation $association;
  public string $mac_address;
  public string $private_ip_address;
  public boolean $source_dest_check;
  public string $owner_id;
  public string $private_dns_name;
  public InstancePrivateIpAddressList $private_ip_addresses;
  public string $subnet_id;
  public string $network_interface_id;
  public string $vpc_id;
  public string $interface_type;
  public InstanceNetworkInterfaceAttachment $attachment;
  public string $description;
  public GroupIdentifierList $groups;
  public InstanceIpv6AddressList $ipv_6_addresses;
}

class PeeringAttachmentStatus {
  public string $message;
  public string $code;
}

class TrafficMirrorFilterId {
}

class ClientVpnAuthorizationRuleStatusCode {
}

class DescribeLaunchTemplatesResult {
  public LaunchTemplateSet $launch_templates;
  public string $next_token;
}

class ExportImageTaskList {
}

class LaunchTemplateVersionSet {
}

class EgressOnlyInternetGatewayIdList {
}

class PrefixList {
  public ValueStringList $cidrs;
  public string $prefix_list_id;
  public string $prefix_list_name;
}

class ResetEbsDefaultKmsKeyIdRequest {
  public boolean $dry_run;
}

class DeleteTransitGatewayPeeringAttachmentResult {
  public TransitGatewayPeeringAttachment $transit_gateway_peering_attachment;
}

class DetachClassicLinkVpcRequest {
  public InstanceId $instance_id;
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class GetTransitGatewayMulticastDomainAssociationsRequest {
  public TransitGatewayMulticastDomainId $transit_gateway_multicast_domain_id;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
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

class UserBucketDetails {
  public string $s_3_bucket;
  public string $s_3_key;
}

class ConnectionNotificationSet {
}

class DescribeFastSnapshotRestoresMaxResults {
}

class FleetLaunchTemplateSpecification {
  public string $launch_template_id;
  public LaunchTemplateName $launch_template_name;
  public string $version;
}

class HibernationOptions {
  public boolean $configured;
}

class DescribeFleetHistoryRequest {
  public FleetId $fleet_id;
  public DateTime $start_time;
  public boolean $dry_run;
  public FleetEventType $event_type;
  public int $max_results;
  public string $next_token;
}

class SubnetState {
}

class CreateDefaultSubnetRequest {
  public string $availability_zone;
  public boolean $dry_run;
}

class CreateTransitGatewayVpcAttachmentRequestOptions {
  public DnsSupportValue $dns_support;
  public Ipv6SupportValue $ipv_6_support;
}

class LaunchTemplateAndOverridesResponse {
  public FleetLaunchTemplateSpecification $launch_template_specification;
  public FleetLaunchTemplateOverrides $overrides;
}

class VolumeModificationState {
}

class CancelReservedInstancesListingRequest {
  public ReservedInstancesListingId $reserved_instances_listing_id;
}

class GpuInfo {
  public GpuDeviceInfoList $gpus;
  public totalGpuMemory $total_gpu_memory_in_mi_b;
}

class NetworkInterfacePermissionState {
  public NetworkInterfacePermissionStateCode $state;
  public string $status_message;
}

class TrafficMirrorSessionField {
}

class PurchaseReservedInstancesOfferingRequest {
  public int $instance_count;
  public ReservedInstancesOfferingId $reserved_instances_offering_id;
  public boolean $dry_run;
  public ReservedInstanceLimitPrice $limit_price;
  public DateTime $purchase_time;
}

class ResponseHostIdSet {
}

class TransitGatewayAssociation {
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
  public string $resource_id;
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayAssociationState $state;
}

class VolumeStatusName {
}

class StopInstancesRequest {
  public InstanceIdStringList $instance_ids;
  public boolean $hibernate;
  public boolean $dry_run;
  public boolean $force;
}

class DeleteLaunchTemplateVersionsResponseSuccessSet {
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

class ImportVolumeTaskDetails {
  public string $availability_zone;
  public Long $bytes_converted;
  public string $description;
  public DiskImageDescription $image;
  public DiskImageVolumeDescription $volume;
}

class ServiceType {
}

class GpuDeviceMemoryInfo {
  public GpuDeviceMemorySize $size_in_mi_b;
}

class GroupIdentifier {
  public string $group_name;
  public string $group_id;
}

class VpcCidrAssociationId {
}

class VpnGatewayList {
}

class DescribeFleetsErrorSet {
}

class FleetLaunchTemplateOverridesListRequest {
}

class NewDhcpConfigurationList {
}

class SecurityGroupIdentifier {
  public string $group_id;
  public string $group_name;
}

class GetTransitGatewayMulticastDomainAssociationsResult {
  public TransitGatewayMulticastDomainAssociationList $multicast_domain_associations;
  public string $next_token;
}

class HostTenancy {
}

class Phase1DHGroupNumbersRequestListValue {
  public int $value;
}

class LaunchTemplateSpotMarketOptions {
  public string $max_price;
  public SpotInstanceType $spot_instance_type;
  public int $block_duration_minutes;
  public DateTime $valid_until;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
}

class TrafficMirrorSessionId {
}

class CreateVpcEndpointServiceConfigurationRequest {
  public string $private_dns_name;
  public ValueStringList $network_load_balancer_arns;
  public string $client_token;
  public TagSpecificationList $tag_specifications;
  public boolean $dry_run;
  public boolean $acceptance_required;
}

class DeleteClientVpnEndpointResult {
  public ClientVpnEndpointStatus $status;
}

class PlacementGroupId {
}

class VpcEndpointSet {
}

class DisableVpcClassicLinkDnsSupportRequest {
  public VpcId $vpc_id;
}

class LocalGatewayRoute {
  public string $destination_cidr_block;
  public LocalGatewayVirtualInterfaceGroupId $local_gateway_virtual_interface_group_id;
  public LocalGatewayRouteType $type;
  public LocalGatewayRouteState $state;
  public LocalGatewayRoutetableId $local_gateway_route_table_id;
}

class ModifyInstanceCapacityReservationAttributesResult {
  public boolean $return;
}

class ModifyVolumeAttributeRequest {
  public AttributeBooleanValue $auto_enable_io;
  public VolumeId $volume_id;
  public boolean $dry_run;
}

class UnsuccessfulInstanceCreditSpecificationItem {
  public string $instance_id;
  public UnsuccessfulInstanceCreditSpecificationItemError $error;
}

class AssociateVpcCidrBlockResult {
  public VpcIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public VpcCidrBlockAssociation $cidr_block_association;
  public string $vpc_id;
}

class DescribeNetworkInterfacesRequest {
  public FilterList $filters;
  public boolean $dry_run;
  public NetworkInterfaceIdList $network_interface_ids;
  public string $next_token;
  public DescribeNetworkInterfacesMaxResults $max_results;
}

class DescribeTransitGatewayVpcAttachmentsRequest {
  public string $next_token;
  public boolean $dry_run;
  public TransitGatewayAttachmentIdStringList $transit_gateway_attachment_ids;
  public FilterList $filters;
  public TransitGatewayMaxResults $max_results;
}

class EnableFastSnapshotRestoresResult {
  public EnableFastSnapshotRestoreSuccessSet $successful;
  public EnableFastSnapshotRestoreErrorSet $unsuccessful;
}

class NewDhcpConfiguration {
  public string $key;
  public ValueStringList $values;
}

class DescribeIdFormatRequest {
  public string $resource;
}

class DisableFastSnapshotRestoreStateErrorItem {
  public string $availability_zone;
  public DisableFastSnapshotRestoreStateError $error;
}

class Host {
  public string $client_token;
  public HostProperties $host_properties;
  public AllocationState $state;
  public TagList $tags;
  public boolean $member_of_service_linked_resource_group;
  public AutoPlacement $auto_placement;
  public string $availability_zone;
  public AvailableCapacity $available_capacity;
  public HostInstanceList $instances;
  public DateTime $allocation_time;
  public HostRecovery $host_recovery;
  public string $host_id;
  public DateTime $release_time;
  public AllowsMultipleInstanceTypes $allows_multiple_instance_types;
  public string $owner_id;
  public string $host_reservation_id;
  public string $availability_zone_id;
}

class ImageAttributeName {
}

class ReleaseAddressRequest {
  public AllocationId $allocation_id;
  public string $public_ip;
  public string $network_border_group;
  public boolean $dry_run;
}

class VolumeStatusEvent {
  public string $description;
  public string $event_id;
  public string $event_type;
  public MillisecondDateTime $not_after;
  public MillisecondDateTime $not_before;
  public string $instance_id;
}

class ZoneNameStringList {
}

class LocalGatewayVirtualInterfaceGroupId {
}

class DescribeLocalGatewayVirtualInterfaceGroupsResult {
  public LocalGatewayVirtualInterfaceGroupSet $local_gateway_virtual_interface_groups;
  public string $next_token;
}

class DescribeLocalGatewaysRequest {
  public string $next_token;
  public boolean $dry_run;
  public LocalGatewayIdSet $local_gateway_ids;
  public FilterList $filters;
  public LocalGatewayMaxResults $max_results;
}

class ModifyVpnTunnelOptionsRequest {
  public boolean $dry_run;
  public VpnConnectionId $vpn_connection_id;
  public string $vpn_tunnel_outside_ip_address;
  public ModifyVpnTunnelOptionsSpecification $tunnel_options;
}

class CreateLaunchTemplateVersionResult {
  public LaunchTemplateVersion $launch_template_version;
}

class DescribeInstanceTypeOfferingsRequest {
  public boolean $dry_run;
  public LocationType $location_type;
  public FilterList $filters;
  public DITOMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeReservedInstancesOfferingsResult {
  public ReservedInstancesOfferingList $reserved_instances_offerings;
  public string $next_token;
}

class ModifyInstanceEventStartTimeResult {
  public InstanceStatusEvent $event;
}

class ResponseLaunchTemplateData {
  public LaunchTemplateElasticInferenceAcceleratorResponseList $elastic_inference_accelerators;
  public LaunchTemplateCpuOptions $cpu_options;
  public LaunchTemplateInstanceMetadataOptions $metadata_options;
  public boolean $ebs_optimized;
  public LaunchTemplateIamInstanceProfileSpecification $iam_instance_profile;
  public string $key_name;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public string $user_data;
  public LaunchTemplateTagSpecificationList $tag_specifications;
  public ElasticGpuSpecificationResponseList $elastic_gpu_specifications;
  public ValueStringList $security_groups;
  public string $kernel_id;
  public InstanceType $instance_type;
  public string $ram_disk_id;
  public boolean $disable_api_termination;
  public LaunchTemplateInstanceMarketOptions $instance_market_options;
  public LaunchTemplateCapacityReservationSpecificationResponse $capacity_reservation_specification;
  public LaunchTemplateLicenseList $license_specifications;
  public LaunchTemplateHibernationOptions $hibernation_options;
  public string $image_id;
  public ValueStringList $security_group_ids;
  public CreditSpecification $credit_specification;
  public LaunchTemplateBlockDeviceMappingList $block_device_mappings;
  public LaunchTemplateInstanceNetworkInterfaceSpecificationList $network_interfaces;
  public LaunchTemplatesMonitoring $monitoring;
  public LaunchTemplatePlacement $placement;
}

class ScheduledInstanceAvailabilitySet {
}

class totalFpgaMemory {
}

class DITMaxResults {
}

class DeleteEgressOnlyInternetGatewayRequest {
  public boolean $dry_run;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
}

class LaunchTemplateCpuOptionsRequest {
  public int $core_count;
  public int $threads_per_core;
}

class ModifyFleetResult {
  public boolean $return;
}

class AssignIpv6AddressesRequest {
  public int $ipv_6_address_count;
  public Ipv6AddressList $ipv_6_addresses;
  public NetworkInterfaceId $network_interface_id;
}

class DeleteRouteTableRequest {
  public boolean $dry_run;
  public RouteTableId $route_table_id;
}

class IamInstanceProfileAssociationState {
}

class UsageClassType {
}

class Phase2DHGroupNumbersList {
}

class RouteTable {
  public RouteTableAssociationList $associations;
  public PropagatingVgwList $propagating_vgws;
  public string $route_table_id;
  public RouteList $routes;
  public TagList $tags;
  public string $vpc_id;
  public string $owner_id;
}

class DescribeConversionTaskList {
}

class DescribeImageAttributeRequest {
  public ImageAttributeName $attribute;
  public ImageId $image_id;
  public boolean $dry_run;
}

class DescribeLocalGatewayRouteTablesRequest {
  public LocalGatewayRouteTableIdSet $local_gateway_route_table_ids;
  public FilterList $filters;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
}

class DescribeSpotInstanceRequestsResult {
  public SpotInstanceRequestList $spot_instance_requests;
  public string $next_token;
}

class DescribeLocalGatewayRouteTablesResult {
  public LocalGatewayRouteTableSet $local_gateway_route_tables;
  public string $next_token;
}

class GpuDeviceMemorySize {
}

class VpcEndpoint {
  public ValueStringList $network_interface_ids;
  public string $owner_id;
  public LastError $last_error;
  public State $state;
  public ValueStringList $route_table_ids;
  public ValueStringList $subnet_ids;
  public boolean $requester_managed;
  public string $vpc_endpoint_id;
  public VpcEndpointType $vpc_endpoint_type;
  public MillisecondDateTime $creation_timestamp;
  public TagList $tags;
  public string $service_name;
  public string $policy_document;
  public GroupIdentifierSet $groups;
  public boolean $private_dns_enabled;
  public string $vpc_id;
  public DnsEntrySet $dns_entries;
}

class CapacityReservationSpecification {
  public CapacityReservationPreference $capacity_reservation_preference;
  public CapacityReservationTarget $capacity_reservation_target;
}

class DeleteFleetSuccessItem {
  public FleetStateCode $current_fleet_state;
  public FleetStateCode $previous_fleet_state;
  public FleetId $fleet_id;
}

class UnassignIpv6AddressesRequest {
  public NetworkInterfaceId $network_interface_id;
  public Ipv6AddressList $ipv_6_addresses;
}

class VolumeId {
}

class DescribeNetworkInterfacePermissionsResult {
  public NetworkInterfacePermissionList $network_interface_permissions;
  public string $next_token;
}

class ReservedInstanceState {
}

class ModifyVpcEndpointServicePermissionsRequest {
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public ValueStringList $add_allowed_principals;
  public ValueStringList $remove_allowed_principals;
}

class VolumeStatusInfoStatus {
}

class AccountAttributeList {
}

class HostReservationSet {
}

class InternetGatewayAttachmentList {
}

class SnapshotIdStringList {
}

class AssociateTransitGatewayRouteTableRequest {
  public boolean $dry_run;
  public TransitGatewayRouteTableId $transit_gateway_route_table_id;
  public TransitGatewayAttachmentId $transit_gateway_attachment_id;
}

class LocalGatewaySet {
}

class DescribeFpgaImagesResult {
  public FpgaImageList $fpga_images;
  public NextToken $next_token;
}

class EventCode {
}

class RequestSpotInstancesRequest {
  public string $availability_zone_group;
  public string $client_token;
  public boolean $dry_run;
  public int $instance_count;
  public string $launch_group;
  public RequestSpotLaunchSpecification $launch_specification;
  public string $spot_price;
  public SpotInstanceType $type;
  public DateTime $valid_until;
  public InstanceInterruptionBehavior $instance_interruption_behavior;
  public int $block_duration_minutes;
  public DateTime $valid_from;
}

class LaunchTemplateHibernationOptionsRequest {
  public boolean $configured;
}

class AttributeBooleanValue {
  public boolean $value;
}

class DateTime {
}

class ImportInstanceLaunchSpecification {
  public string $additional_info;
  public SecurityGroupIdStringList $group_ids;
  public SecurityGroupStringList $group_names;
  public ShutdownBehavior $instance_initiated_shutdown_behavior;
  public Placement $placement;
  public UserData $user_data;
  public ArchitectureValues $architecture;
  public InstanceType $instance_type;
  public boolean $monitoring;
  public string $private_ip_address;
  public SubnetId $subnet_id;
}

class InstanceSpecification {
  public boolean $exclude_boot_volume;
  public InstanceId $instance_id;
}

class Phase1DHGroupNumbersRequestList {
}

class RecurringChargeFrequency {
}

class ClassicLinkInstanceList {
}

class DescribeReservedInstancesResult {
  public ReservedInstancesList $reserved_instances;
}

class DescribeVpcEndpointServicePermissionsResult {
  public string $next_token;
  public AllowedPrincipalSet $allowed_principals;
}

class ImportSnapshotTaskList {
}

class AssociateDhcpOptionsRequest {
  public DefaultingDhcpOptionsId $dhcp_options_id;
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class EnableFastSnapshotRestoreStateError {
  public string $code;
  public string $message;
}

class ModifyHostsResult {
  public ResponseHostIdList $successful;
  public UnsuccessfulItemList $unsuccessful;
}

class TransitGatewayMulticastDomainIdStringList {
}

class DetachVpnGatewayRequest {
  public VpcId $vpc_id;
  public VpnGatewayId $vpn_gateway_id;
  public boolean $dry_run;
}

class ImageTypeValues {
}

class AssociatedTargetNetworkSet {
}

class AutoPlacement {
}

class CreateVpcEndpointConnectionNotificationRequest {
  public string $client_token;
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public VpcEndpointId $vpc_endpoint_id;
  public string $connection_notification_arn;
  public ValueStringList $connection_events;
}

class DescribeLocalGatewayRouteTableVpcAssociationsRequest {
  public LocalGatewayRouteTableVpcAssociationIdSet $local_gateway_route_table_vpc_association_ids;
  public FilterList $filters;
  public LocalGatewayMaxResults $max_results;
  public string $next_token;
  public boolean $dry_run;
}

class ImageDiskContainer {
  public string $url;
  public UserBucket $user_bucket;
  public string $description;
  public string $device_name;
  public string $format;
  public SnapshotId $snapshot_id;
}

class AssignPrivateIpAddressesRequest {
  public boolean $allow_reassignment;
  public NetworkInterfaceId $network_interface_id;
  public PrivateIpAddressStringList $private_ip_addresses;
  public int $secondary_private_ip_address_count;
}

class CancelSpotFleetRequestsRequest {
  public boolean $dry_run;
  public SpotFleetRequestIdList $spot_fleet_request_ids;
  public boolean $terminate_instances;
}

class FailedQueuedPurchaseDeletion {
  public DeleteQueuedReservedInstancesError $error;
  public string $reserved_instances_id;
}

class IamInstanceProfileAssociationId {
}

class DeleteFleetError {
  public string $message;
  public DeleteFleetErrorCode $code;
}

class DescribeVpnGatewaysRequest {
  public FilterList $filters;
  public VpnGatewayIdStringList $vpn_gateway_ids;
  public boolean $dry_run;
}

class MonitorInstancesResult {
  public InstanceMonitoringList $instance_monitorings;
}

class DescribeVpcPeeringConnectionsResult {
  public VpcPeeringConnectionList $vpc_peering_connections;
  public string $next_token;
}

class InstanceCreditSpecificationList {
}

class NetworkInterfacePermissionList {
}

class TrafficMirrorPortRange {
  public int $from_port;
  public int $to_port;
}

class DescribeEgressOnlyInternetGatewaysMaxResults {
}

class DescribeVolumeAttributeResult {
  public AttributeBooleanValue $auto_enable_io;
  public ProductCodeList $product_codes;
  public string $volume_id;
}

class NetworkAcl {
  public NetworkAclAssociationList $associations;
  public NetworkAclEntryList $entries;
  public boolean $is_default;
  public string $network_acl_id;
  public TagList $tags;
  public string $vpc_id;
  public string $owner_id;
}

class ApplySecurityGroupsToClientVpnTargetNetworkResult {
  public ClientVpnSecurityGroupIdSet $security_group_ids;
}

class DescribeStaleSecurityGroupsMaxResults {
}

class DisassociateTransitGatewayRouteTableResult {
  public TransitGatewayAssociation $association;
}

class InterfacePermissionType {
}

class CancelImportTaskRequest {
  public ImportTaskId $import_task_id;
  public string $cancel_reason;
  public boolean $dry_run;
}

class CreateVpcPeeringConnectionRequest {
  public VpcId $vpc_id;
  public string $peer_region;
  public boolean $dry_run;
  public string $peer_owner_id;
  public string $peer_vpc_id;
}

class DeviceType {
}

class DiskImageDetail {
  public Long $bytes;
  public DiskImageFormat $format;
  public string $import_manifest_url;
}

class DescribeTransitGatewayAttachmentsResult {
  public TransitGatewayAttachmentList $transit_gateway_attachments;
  public string $next_token;
}

class DisableVpcClassicLinkRequest {
  public boolean $dry_run;
  public VpcId $vpc_id;
}

class CoreCount {
}

class DescribeAggregateIdFormatRequest {
  public boolean $dry_run;
}

class DescribeFleetsRequest {
  public boolean $dry_run;
  public int $max_results;
  public string $next_token;
  public FleetIdSet $fleet_ids;
  public FilterList $filters;
}

class DescribeHostsResult {
  public HostList $hosts;
  public string $next_token;
}

class Ipv4PoolEc2Id {
}

class PeeringConnectionOptions {
  public boolean $allow_egress_from_local_vpc_to_remote_classic_link;
  public boolean $allow_dns_resolution_from_remote_vpc;
  public boolean $allow_egress_from_local_classic_link_to_remote_vpc;
}

class DescribeReservedInstancesListingsResult {
  public ReservedInstancesListingList $reserved_instances_listings;
}

class DescribeScheduledInstanceAvailabilityResult {
  public string $next_token;
  public ScheduledInstanceAvailabilitySet $scheduled_instance_availability_set;
}

class DisableEbsEncryptionByDefaultRequest {
  public boolean $dry_run;
}

class FpgaImageStateCode {
}

class DescribeFleetInstancesResult {
  public ActiveInstanceSet $active_instances;
  public string $next_token;
  public FleetId $fleet_id;
}

class VolumeState {
}

class ClientVpnRoute {
  public string $client_vpn_endpoint_id;
  public string $destination_cidr;
  public string $target_subnet;
  public string $type;
  public string $origin;
  public ClientVpnRouteStatus $status;
  public string $description;
}

class DescribeByoipCidrsRequest {
  public boolean $dry_run;
  public DescribeByoipCidrsMaxResults $max_results;
  public NextToken $next_token;
}

class DescribeClientVpnConnectionsResult {
  public NextToken $next_token;
  public ClientVpnConnectionSet $connections;
}

class RejectVpcEndpointConnectionsRequest {
  public boolean $dry_run;
  public VpcEndpointServiceId $service_id;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class InstanceStatus {
  public InstanceStatusEventList $events;
  public string $instance_id;
  public InstanceState $instance_state;
  public InstanceStatusSummary $instance_status;
  public InstanceStatusSummary $system_status;
  public string $availability_zone;
  public string $outpost_arn;
}

class SubnetId {
}

class UpdateSecurityGroupRuleDescriptionsEgressResult {
  public boolean $return;
}

class AccountAttributeValueList {
}

class CoipPoolMaxResults {
}

class LicenseList {
}

class SearchTransitGatewayMulticastGroupsResult {
  public TransitGatewayMulticastGroupList $multicast_groups;
  public string $next_token;
}

class CapacityReservationId {
}

class InstanceIpv6Address {
  public string $ipv_6_address;
}

class NetworkAclAssociationList {
}

class TagDescription {
  public string $resource_id;
  public ResourceType $resource_type;
  public string $value;
  public string $key;
}

class DescribeFleetHistoryResult {
  public FleetId $fleet_id;
  public DateTime $start_time;
  public HistoryRecordSet $history_records;
  public DateTime $last_evaluated_time;
  public string $next_token;
}

class DescribePublicIpv4PoolsResult {
  public PublicIpv4PoolSet $public_ipv_4_pools;
  public string $next_token;
}

class DescribeVpcClassicLinkDnsSupportMaxResults {
}

class ImportSnapshotResult {
  public string $description;
  public string $import_task_id;
  public SnapshotTaskDetail $snapshot_task_detail;
}

class CopySnapshotRequest {
  public string $destination_region;
  public string $source_snapshot_id;
  public TagSpecificationList $tag_specifications;
  public string $description;
  public boolean $encrypted;
  public KmsKeyId $kms_key_id;
  public string $presigned_url;
  public string $source_region;
  public boolean $dry_run;
}

class CreateVpcEndpointConnectionNotificationResult {
  public ConnectionNotification $connection_notification;
  public string $client_token;
}

class DeleteVpcEndpointServiceConfigurationsResult {
  public UnsuccessfulItemSet $unsuccessful;
}

class DeleteVpcRequest {
  public VpcId $vpc_id;
  public boolean $dry_run;
}

class KeyNameStringList {
}

class PurchaseScheduledInstancesResult {
  public PurchasedScheduledInstanceSet $scheduled_instance_set;
}

class TransitGatewayRouteTableAssociation {
  public TransitGatewayAttachmentResourceType $resource_type;
  public TransitGatewayAssociationState $state;
  public string $transit_gateway_attachment_id;
  public string $resource_id;
}

class CreateVpcRequest {
  public string $ipv_6_cidr_block_network_border_group;
  public string $cidr_block;
  public boolean $amazon_provided_ipv_6_cidr_block;
  public Ipv6PoolEc2Id $ipv_6_pool;
  public string $ipv_6_cidr_block;
  public boolean $dry_run;
  public Tenancy $instance_tenancy;
}

class DescribeTagsResult {
  public string $next_token;
  public TagDescriptionList $tags;
}

class CreateReservedInstancesListingResult {
  public ReservedInstancesListingList $reserved_instances_listings;
}

class DescribeElasticGpusMaxResults {
}

class DescribeExportTasksRequest {
  public ExportTaskIdStringList $export_task_ids;
  public FilterList $filters;
}

class TransitGatewayRouteTableList {
}

class ExcessCapacityTerminationPolicy {
}

class AttachVpnGatewayResult {
  public VpcAttachment $vpc_attachment;
}

class BundleInstanceRequest {
  public Storage $storage;
  public boolean $dry_run;
  public InstanceId $instance_id;
}

class CreateVpnGatewayResult {
  public VpnGateway $vpn_gateway;
}

class EbsInfo {
  public EbsOptimizedSupport $ebs_optimized_support;
  public EbsEncryptionSupport $encryption_support;
}

class ClientVpnAuthenticationRequestList {
}

class UserData {
  public string $data;
}

class AllocationId {
}

class ShutdownBehavior {
}

class DnsServersOptionsModifyStructure {
  public ValueStringList $custom_dns_servers;
  public boolean $enabled;
}

class FpgaImageAttribute {
  public string $fpga_image_id;
  public string $name;
  public string $description;
  public LoadPermissionList $load_permissions;
  public ProductCodeList $product_codes;
}

class PriceScheduleSpecificationList {
}

class ReservedIntancesIds {
}

class AttributeValue {
  public string $value;
}

class ClientVpnEndpointStatusCode {
}

class CreateTransitGatewayResult {
  public TransitGateway $transit_gateway;
}

class DescribeImportSnapshotTasksResult {
  public ImportSnapshotTaskList $import_snapshot_tasks;
  public string $next_token;
}

class HistoryRecordEntry {
  public EventInformation $event_information;
  public FleetEventType $event_type;
  public DateTime $timestamp;
}

class LaunchTemplateCpuOptions {
  public int $core_count;
  public int $threads_per_core;
}

class ModifyTrafficMirrorSessionResult {
  public TrafficMirrorSession $traffic_mirror_session;
}

class ClientVpnSecurityGroupIdSet {
}

class RevokeSecurityGroupIngressRequest {
  public SecurityGroupId $group_id;
  public SecurityGroupName $group_name;
  public string $ip_protocol;
  public boolean $dry_run;
  public int $to_port;
  public string $cidr_ip;
  public int $from_port;
  public IpPermissionList $ip_permissions;
  public string $source_security_group_name;
  public string $source_security_group_owner_id;
}

class DescribeLaunchTemplatesMaxResults {
}

class Ipv6CidrAssociation {
  public string $associated_resource;
  public string $ipv_6_cidr;
}

class Phase2EncryptionAlgorithmsListValue {
  public string $value;
}

class AvailabilityZone {
  public string $group_name;
  public string $network_border_group;
  public AvailabilityZoneState $state;
  public AvailabilityZoneOptInStatus $opt_in_status;
  public AvailabilityZoneMessageList $messages;
  public string $region_name;
  public string $zone_name;
  public string $zone_id;
}

class CapacityReservationTargetResponse {
  public string $capacity_reservation_id;
}

class CreatePlacementGroupResult {
  public PlacementGroup $placement_group;
}

class CreateVpcEndpointRequest {
  public VpcEndpointType $vpc_endpoint_type;
  public string $service_name;
  public string $policy_document;
  public boolean $dry_run;
  public VpcEndpointRouteTableIdList $route_table_ids;
  public VpcEndpointSubnetIdList $subnet_ids;
  public VpcEndpointSecurityGroupIdList $security_group_ids;
  public string $client_token;
  public boolean $private_dns_enabled;
  public TagSpecificationList $tag_specifications;
  public VpcId $vpc_id;
}

class DescribeTrafficMirrorFiltersRequest {
  public boolean $dry_run;
  public FilterList $filters;
  public TrafficMirroringMaxResults $max_results;
  public NextToken $next_token;
  public TrafficMirrorFilterIdList $traffic_mirror_filter_ids;
}

class LaunchTemplateInstanceMetadataOptions {
  public int $http_put_response_hop_limit;
  public LaunchTemplateInstanceMetadataEndpointState $http_endpoint;
  public LaunchTemplateInstanceMetadataOptionsState $state;
  public LaunchTemplateHttpTokensState $http_tokens;
}

class ReservedInstanceLimitPrice {
  public Double $amount;
  public CurrencyCodeValues $currency_code;
}

class RootDeviceType {
}

class CancelCapacityReservationRequest {
  public CapacityReservationId $capacity_reservation_id;
  public boolean $dry_run;
}

class DeleteTrafficMirrorFilterResult {
  public string $traffic_mirror_filter_id;
}

class ResourceList {
}

class SpotFleetMonitoring {
  public boolean $enabled;
}

class CreateVpnGatewayRequest {
  public GatewayType $type;
  public Long $amazon_side_asn;
  public boolean $dry_run;
  public string $availability_zone;
}

class ResetNetworkInterfaceAttributeRequest {
  public string $source_dest_check;
  public boolean $dry_run;
  public NetworkInterfaceId $network_interface_id;
}

class ClientVpnEndpointIdList {
}

class DescribeSnapshotsResult {
  public SnapshotList $snapshots;
  public string $next_token;
}

class NatGatewayList {
}

class CreateInternetGatewayResult {
  public InternetGateway $internet_gateway;
}

class ReplaceRouteRequest {
  public RouteTableId $route_table_id;
  public string $destination_cidr_block;
  public string $destination_ipv_6_cidr_block;
  public EgressOnlyInternetGatewayId $egress_only_internet_gateway_id;
  public InstanceId $instance_id;
  public boolean $local_target;
  public TransitGatewayId $transit_gateway_id;
  public NetworkInterfaceId $network_interface_id;
  public boolean $dry_run;
  public RouteGatewayId $gateway_id;
  public NatGatewayId $nat_gateway_id;
  public LocalGatewayId $local_gateway_id;
  public VpcPeeringConnectionId $vpc_peering_connection_id;
}

class DescribeClientVpnEndpointMaxResults {
}

class Volume {
  public VolumeAttachmentList $attachments;
  public boolean $encrypted;
  public VolumeType $volume_type;
  public string $availability_zone;
  public DateTime $create_time;
  public string $kms_key_id;
  public string $outpost_arn;
  public int $size;
  public string $snapshot_id;
  public boolean $fast_restored;
  public VolumeState $state;
  public string $volume_id;
  public int $iops;
  public TagList $tags;
  public boolean $multi_attach_enabled;
}

class DeleteTransitGatewayRequest {
  public TransitGatewayId $transit_gateway_id;
  public boolean $dry_run;
}

class RegisterTransitGatewayMulticastGroupSourcesResult {
  public TransitGatewayMulticastRegisteredGroupSources $registered_multicast_group_sources;
}

class CancelBundleTaskResult {
  public BundleTask $bundle_task;
}

class DeleteVpcEndpointsRequest {
  public boolean $dry_run;
  public VpcEndpointIdList $vpc_endpoint_ids;
}

class DhcpConfiguration {
  public string $key;
  public DhcpConfigurationValueList $values;
}

class DisassociateSubnetCidrBlockResult {
  public SubnetIpv6CidrBlockAssociation $ipv_6_cidr_block_association;
  public string $subnet_id;
}

class EnableEbsEncryptionByDefaultResult {
  public boolean $ebs_encryption_by_default;
}

class DescribeInstanceTypesResult {
  public InstanceTypeInfoList $instance_types;
  public NextToken $next_token;
}

class GpuDeviceName {
}

class ReservedInstancesOfferingId {
}

class EnableVolumeIORequest {
  public boolean $dry_run;
  public VolumeId $volume_id;
}

class ModifyVpnTunnelOptionsResult {
  public VpnConnection $vpn_connection;
}

class RequestSpotFleetResponse {
  public string $spot_fleet_request_id;
}

class IpRanges {
}

class PortRange {
  public int $from;
  public int $to;
}

class RouteState {
}

class TransitGatewayMulticastDeregisteredGroupSources {
  public string $group_ip_address;
  public string $transit_gateway_multicast_domain_id;
  public ValueStringList $deregistered_network_interface_ids;
}

class DescribeExportImageTasksMaxResults {
}

class DescribeImagesResult {
  public ImageList $images;
}

class DescribeNetworkAclsRequest {
  public string $next_token;
  public DescribeNetworkAclsMaxResults $max_results;
  public FilterList $filters;
  public boolean $dry_run;
  public NetworkAclIdStringList $network_acl_ids;
}

class ImportInstanceVolumeDetailSet {
}

class UnsuccessfulInstanceCreditSpecificationErrorCode {
}

class VolumeStatusInfo {
  public VolumeStatusDetailsList $details;
  public VolumeStatusInfoStatus $status;
}

