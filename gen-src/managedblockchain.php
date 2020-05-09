<?hh // strict
namespace slack\aws\managedblockchain;

interface ManagedBlockchain {
  public function CreateMember(CreateMemberInput) Awaitable<Errors\Result<CreateMemberOutput>>;
  public function CreateNetwork(CreateNetworkInput) Awaitable<Errors\Result<CreateNetworkOutput>>;
  public function CreateNode(CreateNodeInput) Awaitable<Errors\Result<CreateNodeOutput>>;
  public function CreateProposal(CreateProposalInput) Awaitable<Errors\Result<CreateProposalOutput>>;
  public function DeleteMember(DeleteMemberInput) Awaitable<Errors\Result<DeleteMemberOutput>>;
  public function DeleteNode(DeleteNodeInput) Awaitable<Errors\Result<DeleteNodeOutput>>;
  public function GetMember(GetMemberInput) Awaitable<Errors\Result<GetMemberOutput>>;
  public function GetNetwork(GetNetworkInput) Awaitable<Errors\Result<GetNetworkOutput>>;
  public function GetNode(GetNodeInput) Awaitable<Errors\Result<GetNodeOutput>>;
  public function GetProposal(GetProposalInput) Awaitable<Errors\Result<GetProposalOutput>>;
  public function ListInvitations(ListInvitationsInput) Awaitable<Errors\Result<ListInvitationsOutput>>;
  public function ListMembers(ListMembersInput) Awaitable<Errors\Result<ListMembersOutput>>;
  public function ListNetworks(ListNetworksInput) Awaitable<Errors\Result<ListNetworksOutput>>;
  public function ListNodes(ListNodesInput) Awaitable<Errors\Result<ListNodesOutput>>;
  public function ListProposalVotes(ListProposalVotesInput) Awaitable<Errors\Result<ListProposalVotesOutput>>;
  public function ListProposals(ListProposalsInput) Awaitable<Errors\Result<ListProposalsOutput>>;
  public function RejectInvitation(RejectInvitationInput) Awaitable<Errors\Result<RejectInvitationOutput>>;
  public function UpdateMember(UpdateMemberInput) Awaitable<Errors\Result<UpdateMemberOutput>>;
  public function UpdateNode(UpdateNodeInput) Awaitable<Errors\Result<UpdateNodeOutput>>;
  public function VoteOnProposal(VoteOnProposalInput) Awaitable<Errors\Result<VoteOnProposalOutput>>;
}

class AccessDeniedException {
}

class ApprovalThresholdPolicy {
  public ProposalDurationInt $proposal_duration_in_hours;
  public ThresholdComparator $threshold_comparator;
  public ThresholdPercentageInt $threshold_percentage;
}

class AvailabilityZoneString {
}

class ClientRequestTokenString {
}

class CreateMemberInput {
  public ClientRequestTokenString $client_request_token;
  public ResourceIdString $invitation_id;
  public MemberConfiguration $member_configuration;
  public ResourceIdString $network_id;
}

class CreateMemberOutput {
  public ResourceIdString $member_id;
}

class CreateNetworkInput {
  public ClientRequestTokenString $client_request_token;
  public DescriptionString $description;
  public Framework $framework;
  public NetworkFrameworkConfiguration $framework_configuration;
  public FrameworkVersionString $framework_version;
  public MemberConfiguration $member_configuration;
  public NameString $name;
  public VotingPolicy $voting_policy;
}

class CreateNetworkOutput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
}

class CreateNodeInput {
  public ClientRequestTokenString $client_request_token;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public NodeConfiguration $node_configuration;
}

class CreateNodeOutput {
  public ResourceIdString $node_id;
}

class CreateProposalInput {
  public ProposalActions $actions;
  public ClientRequestTokenString $client_request_token;
  public DescriptionString $description;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
}

class CreateProposalOutput {
  public ResourceIdString $proposal_id;
}

class DeleteMemberInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
}

class DeleteMemberOutput {
}

class DeleteNodeInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public ResourceIdString $node_id;
}

class DeleteNodeOutput {
}

class DescriptionString {
}

class Edition {
}

class Enabled {
}

class Framework {
}

class FrameworkVersionString {
}

class GetMemberInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
}

class GetMemberOutput {
  public Member $member;
}

class GetNetworkInput {
  public ResourceIdString $network_id;
}

class GetNetworkOutput {
  public Network $network;
}

class GetNodeInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public ResourceIdString $node_id;
}

class GetNodeOutput {
  public Node $node;
}

class GetProposalInput {
  public ResourceIdString $network_id;
  public ResourceIdString $proposal_id;
}

class GetProposalOutput {
  public Proposal $proposal;
}

class IllegalActionException {
  public string $message;
}

class InstanceTypeString {
}

class InternalServiceErrorException {
}

class InvalidRequestException {
  public string $message;
}

class Invitation {
  public Timestamp $creation_date;
  public Timestamp $expiration_date;
  public ResourceIdString $invitation_id;
  public NetworkSummary $network_summary;
  public InvitationStatus $status;
}

class InvitationList {
}

class InvitationStatus {
}

class InviteAction {
  public PrincipalString $principal;
}

class InviteActionList {
}

class IsOwned {
}

class ListInvitationsInput {
  public ProposalListMaxResults $max_results;
  public PaginationToken $next_token;
}

class ListInvitationsOutput {
  public InvitationList $invitations;
  public PaginationToken $next_token;
}

class ListMembersInput {
  public IsOwned $is_owned;
  public MemberListMaxResults $max_results;
  public string $name;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;
  public MemberStatus $status;
}

class ListMembersOutput {
  public MemberSummaryList $members;
  public PaginationToken $next_token;
}

class ListNetworksInput {
  public Framework $framework;
  public NetworkListMaxResults $max_results;
  public string $name;
  public PaginationToken $next_token;
  public NetworkStatus $status;
}

class ListNetworksOutput {
  public NetworkSummaryList $networks;
  public PaginationToken $next_token;
}

class ListNodesInput {
  public NodeListMaxResults $max_results;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;
  public NodeStatus $status;
}

class ListNodesOutput {
  public PaginationToken $next_token;
  public NodeSummaryList $nodes;
}

class ListProposalVotesInput {
  public ProposalListMaxResults $max_results;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;
  public ResourceIdString $proposal_id;
}

class ListProposalVotesOutput {
  public PaginationToken $next_token;
  public ProposalVoteList $proposal_votes;
}

class ListProposalsInput {
  public ProposalListMaxResults $max_results;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;
}

class ListProposalsOutput {
  public PaginationToken $next_token;
  public ProposalSummaryList $proposals;
}

class LogConfiguration {
  public Enabled $enabled;
}

class LogConfigurations {
  public LogConfiguration $cloudwatch;
}

class Member {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public MemberFrameworkAttributes $framework_attributes;
  public ResourceIdString $id;
  public MemberLogPublishingConfiguration $log_publishing_configuration;
  public NetworkMemberNameString $name;
  public ResourceIdString $network_id;
  public MemberStatus $status;
}

class MemberConfiguration {
  public DescriptionString $description;
  public MemberFrameworkConfiguration $framework_configuration;
  public MemberLogPublishingConfiguration $log_publishing_configuration;
  public NetworkMemberNameString $name;
}

class MemberFabricAttributes {
  public UsernameString $admin_username;
  public string $ca_endpoint;
}

class MemberFabricConfiguration {
  public PasswordString $admin_password;
  public UsernameString $admin_username;
}

class MemberFabricLogPublishingConfiguration {
  public LogConfigurations $ca_logs;
}

class MemberFrameworkAttributes {
  public MemberFabricAttributes $fabric;
}

class MemberFrameworkConfiguration {
  public MemberFabricConfiguration $fabric;
}

class MemberListMaxResults {
}

class MemberLogPublishingConfiguration {
  public MemberFabricLogPublishingConfiguration $fabric;
}

class MemberStatus {
}

class MemberSummary {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public ResourceIdString $id;
  public IsOwned $is_owned;
  public NetworkMemberNameString $name;
  public MemberStatus $status;
}

class MemberSummaryList {
}

class NameString {
}

class Network {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public Framework $framework;
  public NetworkFrameworkAttributes $framework_attributes;
  public FrameworkVersionString $framework_version;
  public ResourceIdString $id;
  public NameString $name;
  public NetworkStatus $status;
  public VotingPolicy $voting_policy;
  public string $vpc_endpoint_service_name;
}

class NetworkFabricAttributes {
  public Edition $edition;
  public string $ordering_service_endpoint;
}

class NetworkFabricConfiguration {
  public Edition $edition;
}

class NetworkFrameworkAttributes {
  public NetworkFabricAttributes $fabric;
}

class NetworkFrameworkConfiguration {
  public NetworkFabricConfiguration $fabric;
}

class NetworkListMaxResults {
}

class NetworkMemberNameString {
}

class NetworkStatus {
}

class NetworkSummary {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public Framework $framework;
  public FrameworkVersionString $framework_version;
  public ResourceIdString $id;
  public NameString $name;
  public NetworkStatus $status;
}

class NetworkSummaryList {
}

class Node {
  public AvailabilityZoneString $availability_zone;
  public Timestamp $creation_date;
  public NodeFrameworkAttributes $framework_attributes;
  public ResourceIdString $id;
  public InstanceTypeString $instance_type;
  public NodeLogPublishingConfiguration $log_publishing_configuration;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public NodeStatus $status;
}

class NodeConfiguration {
  public AvailabilityZoneString $availability_zone;
  public InstanceTypeString $instance_type;
  public NodeLogPublishingConfiguration $log_publishing_configuration;
}

class NodeFabricAttributes {
  public string $peer_endpoint;
  public string $peer_event_endpoint;
}

class NodeFabricLogPublishingConfiguration {
  public LogConfigurations $chaincode_logs;
  public LogConfigurations $peer_logs;
}

class NodeFrameworkAttributes {
  public NodeFabricAttributes $fabric;
}

class NodeListMaxResults {
}

class NodeLogPublishingConfiguration {
  public NodeFabricLogPublishingConfiguration $fabric;
}

class NodeStatus {
}

class NodeSummary {
  public AvailabilityZoneString $availability_zone;
  public Timestamp $creation_date;
  public ResourceIdString $id;
  public InstanceTypeString $instance_type;
  public NodeStatus $status;
}

class NodeSummaryList {
}

class PaginationToken {
}

class PasswordString {
}

class PrincipalString {
}

class Proposal {
  public ProposalActions $actions;
  public Timestamp $creation_date;
  public DescriptionString $description;
  public Timestamp $expiration_date;
  public ResourceIdString $network_id;
  public VoteCount $no_vote_count;
  public VoteCount $outstanding_vote_count;
  public ResourceIdString $proposal_id;
  public ResourceIdString $proposed_by_member_id;
  public NetworkMemberNameString $proposed_by_member_name;
  public ProposalStatus $status;
  public VoteCount $yes_vote_count;
}

class ProposalActions {
  public InviteActionList $invitations;
  public RemoveActionList $removals;
}

class ProposalDurationInt {
}

class ProposalListMaxResults {
}

class ProposalStatus {
}

class ProposalSummary {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public Timestamp $expiration_date;
  public ResourceIdString $proposal_id;
  public ResourceIdString $proposed_by_member_id;
  public NetworkMemberNameString $proposed_by_member_name;
  public ProposalStatus $status;
}

class ProposalSummaryList {
}

class ProposalVoteList {
}

class RejectInvitationInput {
  public ResourceIdString $invitation_id;
}

class RejectInvitationOutput {
}

class RemoveAction {
  public ResourceIdString $member_id;
}

class RemoveActionList {
}

class ResourceAlreadyExistsException {
  public string $message;
}

class ResourceIdString {
}

class ResourceLimitExceededException {
  public string $message;
}

class ResourceNotFoundException {
  public string $message;
}

class ResourceNotReadyException {
  public string $message;
}

class String {
}

class ThresholdComparator {
}

class ThresholdPercentageInt {
}

class ThrottlingException {
}

class Timestamp {
}

class UpdateMemberInput {
  public MemberLogPublishingConfiguration $log_publishing_configuration;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
}

class UpdateMemberOutput {
}

class UpdateNodeInput {
  public NodeLogPublishingConfiguration $log_publishing_configuration;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public ResourceIdString $node_id;
}

class UpdateNodeOutput {
}

class UsernameString {
}

class VoteCount {
}

class VoteOnProposalInput {
  public ResourceIdString $network_id;
  public ResourceIdString $proposal_id;
  public VoteValue $vote;
  public ResourceIdString $voter_member_id;
}

class VoteOnProposalOutput {
}

class VoteSummary {
  public ResourceIdString $member_id;
  public NetworkMemberNameString $member_name;
  public VoteValue $vote;
}

class VoteValue {
}

class VotingPolicy {
  public ApprovalThresholdPolicy $approval_threshold_policy;
}

