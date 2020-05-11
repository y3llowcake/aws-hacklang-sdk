<?hh // strict
namespace slack\aws\managedblockchain;

interface ManagedBlockchain {
  public function CreateMember(CreateMemberInput): Awaitable<Errors\Result<CreateMemberOutput>>;
  public function CreateNetwork(CreateNetworkInput): Awaitable<Errors\Result<CreateNetworkOutput>>;
  public function CreateNode(CreateNodeInput): Awaitable<Errors\Result<CreateNodeOutput>>;
  public function CreateProposal(CreateProposalInput): Awaitable<Errors\Result<CreateProposalOutput>>;
  public function DeleteMember(DeleteMemberInput): Awaitable<Errors\Result<DeleteMemberOutput>>;
  public function DeleteNode(DeleteNodeInput): Awaitable<Errors\Result<DeleteNodeOutput>>;
  public function GetMember(GetMemberInput): Awaitable<Errors\Result<GetMemberOutput>>;
  public function GetNetwork(GetNetworkInput): Awaitable<Errors\Result<GetNetworkOutput>>;
  public function GetNode(GetNodeInput): Awaitable<Errors\Result<GetNodeOutput>>;
  public function GetProposal(GetProposalInput): Awaitable<Errors\Result<GetProposalOutput>>;
  public function ListInvitations(ListInvitationsInput): Awaitable<Errors\Result<ListInvitationsOutput>>;
  public function ListMembers(ListMembersInput): Awaitable<Errors\Result<ListMembersOutput>>;
  public function ListNetworks(ListNetworksInput): Awaitable<Errors\Result<ListNetworksOutput>>;
  public function ListNodes(ListNodesInput): Awaitable<Errors\Result<ListNodesOutput>>;
  public function ListProposalVotes(ListProposalVotesInput): Awaitable<Errors\Result<ListProposalVotesOutput>>;
  public function ListProposals(ListProposalsInput): Awaitable<Errors\Result<ListProposalsOutput>>;
  public function RejectInvitation(RejectInvitationInput): Awaitable<Errors\Result<RejectInvitationOutput>>;
  public function UpdateMember(UpdateMemberInput): Awaitable<Errors\Result<UpdateMemberOutput>>;
  public function UpdateNode(UpdateNodeInput): Awaitable<Errors\Result<UpdateNodeOutput>>;
  public function VoteOnProposal(VoteOnProposalInput): Awaitable<Errors\Result<VoteOnProposalOutput>>;
}

class AccessDeniedException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class ApprovalThresholdPolicy {
  public ProposalDurationInt $proposal_duration_in_hours;
  public ThresholdComparator $threshold_comparator;
  public ThresholdPercentageInt $threshold_percentage;

  public function __construct(shape(
  ?'proposal_duration_in_hours' => ProposalDurationInt,
  ?'threshold_comparator' => ThresholdComparator,
  ?'threshold_percentage' => ThresholdPercentageInt,
  ) $s = shape()) {
    $this->proposal_duration_in_hours = $proposal_duration_in_hours ?? ;
    $this->threshold_comparator = $threshold_comparator ?? "";
    $this->threshold_percentage = $threshold_percentage ?? ;
  }
}

type AvailabilityZoneString = string;

type ClientRequestTokenString = string;

class CreateMemberInput {
  public ClientRequestTokenString $client_request_token;
  public ResourceIdString $invitation_id;
  public MemberConfiguration $member_configuration;
  public ResourceIdString $network_id;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'invitation_id' => ResourceIdString,
  ?'member_configuration' => MemberConfiguration,
  ?'network_id' => ResourceIdString,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->invitation_id = $invitation_id ?? ;
    $this->member_configuration = $member_configuration ?? null;
    $this->network_id = $network_id ?? ;
  }
}

class CreateMemberOutput {
  public ResourceIdString $member_id;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
  }
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

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'description' => DescriptionString,
  ?'framework' => Framework,
  ?'framework_configuration' => NetworkFrameworkConfiguration,
  ?'framework_version' => FrameworkVersionString,
  ?'member_configuration' => MemberConfiguration,
  ?'name' => NameString,
  ?'voting_policy' => VotingPolicy,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->description = $description ?? ;
    $this->framework = $framework ?? "";
    $this->framework_configuration = $framework_configuration ?? ;
    $this->framework_version = $framework_version ?? ;
    $this->member_configuration = $member_configuration ?? null;
    $this->name = $name ?? ;
    $this->voting_policy = $voting_policy ?? null;
  }
}

class CreateNetworkOutput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
  }
}

class CreateNodeInput {
  public ClientRequestTokenString $client_request_token;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public NodeConfiguration $node_configuration;

  public function __construct(shape(
  ?'client_request_token' => ClientRequestTokenString,
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ?'node_configuration' => NodeConfiguration,
  ) $s = shape()) {
    $this->client_request_token = $client_request_token ?? ;
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
    $this->node_configuration = $node_configuration ?? null;
  }
}

class CreateNodeOutput {
  public ResourceIdString $node_id;

  public function __construct(shape(
  ?'node_id' => ResourceIdString,
  ) $s = shape()) {
    $this->node_id = $node_id ?? ;
  }
}

class CreateProposalInput {
  public ProposalActions $actions;
  public ClientRequestTokenString $client_request_token;
  public DescriptionString $description;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;

  public function __construct(shape(
  ?'actions' => ProposalActions,
  ?'client_request_token' => ClientRequestTokenString,
  ?'description' => DescriptionString,
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->client_request_token = $client_request_token ?? ;
    $this->description = $description ?? ;
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
  }
}

class CreateProposalOutput {
  public ResourceIdString $proposal_id;

  public function __construct(shape(
  ?'proposal_id' => ResourceIdString,
  ) $s = shape()) {
    $this->proposal_id = $proposal_id ?? ;
  }
}

class DeleteMemberInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
  }
}

class DeleteMemberOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNodeInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public ResourceIdString $node_id;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ?'node_id' => ResourceIdString,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
    $this->node_id = $node_id ?? ;
  }
}

class DeleteNodeOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type DescriptionString = string;

type Edition = string;

type Enabled = bool;

type Framework = string;

type FrameworkVersionString = string;

class GetMemberInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
  }
}

class GetMemberOutput {
  public Member $member;

  public function __construct(shape(
  ?'member' => Member,
  ) $s = shape()) {
    $this->member = $member ?? null;
  }
}

class GetNetworkInput {
  public ResourceIdString $network_id;

  public function __construct(shape(
  ?'network_id' => ResourceIdString,
  ) $s = shape()) {
    $this->network_id = $network_id ?? ;
  }
}

class GetNetworkOutput {
  public Network $network;

  public function __construct(shape(
  ?'network' => Network,
  ) $s = shape()) {
    $this->network = $network ?? null;
  }
}

class GetNodeInput {
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public ResourceIdString $node_id;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ?'node_id' => ResourceIdString,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
    $this->node_id = $node_id ?? ;
  }
}

class GetNodeOutput {
  public Node $node;

  public function __construct(shape(
  ?'node' => Node,
  ) $s = shape()) {
    $this->node = $node ?? null;
  }
}

class GetProposalInput {
  public ResourceIdString $network_id;
  public ResourceIdString $proposal_id;

  public function __construct(shape(
  ?'network_id' => ResourceIdString,
  ?'proposal_id' => ResourceIdString,
  ) $s = shape()) {
    $this->network_id = $network_id ?? ;
    $this->proposal_id = $proposal_id ?? ;
  }
}

class GetProposalOutput {
  public Proposal $proposal;

  public function __construct(shape(
  ?'proposal' => Proposal,
  ) $s = shape()) {
    $this->proposal = $proposal ?? null;
  }
}

class IllegalActionException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type InstanceTypeString = string;

class InternalServiceErrorException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class InvalidRequestException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Invitation {
  public Timestamp $creation_date;
  public Timestamp $expiration_date;
  public ResourceIdString $invitation_id;
  public NetworkSummary $network_summary;
  public InvitationStatus $status;

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'expiration_date' => Timestamp,
  ?'invitation_id' => ResourceIdString,
  ?'network_summary' => NetworkSummary,
  ?'status' => InvitationStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->expiration_date = $expiration_date ?? ;
    $this->invitation_id = $invitation_id ?? ;
    $this->network_summary = $network_summary ?? null;
    $this->status = $status ?? ;
  }
}

type InvitationList = vec<Invitation>;

type InvitationStatus = string;

class InviteAction {
  public PrincipalString $principal;

  public function __construct(shape(
  ?'principal' => PrincipalString,
  ) $s = shape()) {
    $this->principal = $principal ?? ;
  }
}

type InviteActionList = vec<InviteAction>;

type IsOwned = bool;

class ListInvitationsInput {
  public ProposalListMaxResults $max_results;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => ProposalListMaxResults,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListInvitationsOutput {
  public InvitationList $invitations;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'invitations' => InvitationList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->invitations = $invitations ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListMembersInput {
  public IsOwned $is_owned;
  public MemberListMaxResults $max_results;
  public string $name;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;
  public MemberStatus $status;

  public function __construct(shape(
  ?'is_owned' => IsOwned,
  ?'max_results' => MemberListMaxResults,
  ?'name' => string,
  ?'network_id' => ResourceIdString,
  ?'next_token' => PaginationToken,
  ?'status' => MemberStatus,
  ) $s = shape()) {
    $this->is_owned = $is_owned ?? false;
    $this->max_results = $max_results ?? ;
    $this->name = $name ?? ;
    $this->network_id = $network_id ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
  }
}

class ListMembersOutput {
  public MemberSummaryList $members;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'members' => MemberSummaryList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->members = $members ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListNetworksInput {
  public Framework $framework;
  public NetworkListMaxResults $max_results;
  public string $name;
  public PaginationToken $next_token;
  public NetworkStatus $status;

  public function __construct(shape(
  ?'framework' => Framework,
  ?'max_results' => NetworkListMaxResults,
  ?'name' => string,
  ?'next_token' => PaginationToken,
  ?'status' => NetworkStatus,
  ) $s = shape()) {
    $this->framework = $framework ?? "";
    $this->max_results = $max_results ?? ;
    $this->name = $name ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
  }
}

class ListNetworksOutput {
  public NetworkSummaryList $networks;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'networks' => NetworkSummaryList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->networks = $networks ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListNodesInput {
  public NodeListMaxResults $max_results;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;
  public NodeStatus $status;

  public function __construct(shape(
  ?'max_results' => NodeListMaxResults,
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ?'next_token' => PaginationToken,
  ?'status' => NodeStatus,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
    $this->next_token = $next_token ?? ;
    $this->status = $status ?? ;
  }
}

class ListNodesOutput {
  public PaginationToken $next_token;
  public NodeSummaryList $nodes;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'nodes' => NodeSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->nodes = $nodes ?? ;
  }
}

class ListProposalVotesInput {
  public ProposalListMaxResults $max_results;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;
  public ResourceIdString $proposal_id;

  public function __construct(shape(
  ?'max_results' => ProposalListMaxResults,
  ?'network_id' => ResourceIdString,
  ?'next_token' => PaginationToken,
  ?'proposal_id' => ResourceIdString,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->network_id = $network_id ?? ;
    $this->next_token = $next_token ?? ;
    $this->proposal_id = $proposal_id ?? ;
  }
}

class ListProposalVotesOutput {
  public PaginationToken $next_token;
  public ProposalVoteList $proposal_votes;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'proposal_votes' => ProposalVoteList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->proposal_votes = $proposal_votes ?? ;
  }
}

class ListProposalsInput {
  public ProposalListMaxResults $max_results;
  public ResourceIdString $network_id;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'max_results' => ProposalListMaxResults,
  ?'network_id' => ResourceIdString,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->max_results = $max_results ?? ;
    $this->network_id = $network_id ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class ListProposalsOutput {
  public PaginationToken $next_token;
  public ProposalSummaryList $proposals;

  public function __construct(shape(
  ?'next_token' => PaginationToken,
  ?'proposals' => ProposalSummaryList,
  ) $s = shape()) {
    $this->next_token = $next_token ?? ;
    $this->proposals = $proposals ?? ;
  }
}

class LogConfiguration {
  public Enabled $enabled;

  public function __construct(shape(
  ?'enabled' => Enabled,
  ) $s = shape()) {
    $this->enabled = $enabled ?? false;
  }
}

class LogConfigurations {
  public LogConfiguration $cloudwatch;

  public function __construct(shape(
  ?'cloudwatch' => LogConfiguration,
  ) $s = shape()) {
    $this->cloudwatch = $cloudwatch ?? ;
  }
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

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'description' => DescriptionString,
  ?'framework_attributes' => MemberFrameworkAttributes,
  ?'id' => ResourceIdString,
  ?'log_publishing_configuration' => MemberLogPublishingConfiguration,
  ?'name' => NetworkMemberNameString,
  ?'network_id' => ResourceIdString,
  ?'status' => MemberStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->framework_attributes = $framework_attributes ?? ;
    $this->id = $id ?? ;
    $this->log_publishing_configuration = $log_publishing_configuration ?? ;
    $this->name = $name ?? ;
    $this->network_id = $network_id ?? ;
    $this->status = $status ?? ;
  }
}

class MemberConfiguration {
  public DescriptionString $description;
  public MemberFrameworkConfiguration $framework_configuration;
  public MemberLogPublishingConfiguration $log_publishing_configuration;
  public NetworkMemberNameString $name;

  public function __construct(shape(
  ?'description' => DescriptionString,
  ?'framework_configuration' => MemberFrameworkConfiguration,
  ?'log_publishing_configuration' => MemberLogPublishingConfiguration,
  ?'name' => NetworkMemberNameString,
  ) $s = shape()) {
    $this->description = $description ?? ;
    $this->framework_configuration = $framework_configuration ?? ;
    $this->log_publishing_configuration = $log_publishing_configuration ?? ;
    $this->name = $name ?? ;
  }
}

class MemberFabricAttributes {
  public UsernameString $admin_username;
  public string $ca_endpoint;

  public function __construct(shape(
  ?'admin_username' => UsernameString,
  ?'ca_endpoint' => string,
  ) $s = shape()) {
    $this->admin_username = $admin_username ?? ;
    $this->ca_endpoint = $ca_endpoint ?? ;
  }
}

class MemberFabricConfiguration {
  public PasswordString $admin_password;
  public UsernameString $admin_username;

  public function __construct(shape(
  ?'admin_password' => PasswordString,
  ?'admin_username' => UsernameString,
  ) $s = shape()) {
    $this->admin_password = $admin_password ?? ;
    $this->admin_username = $admin_username ?? ;
  }
}

class MemberFabricLogPublishingConfiguration {
  public LogConfigurations $ca_logs;

  public function __construct(shape(
  ?'ca_logs' => LogConfigurations,
  ) $s = shape()) {
    $this->ca_logs = $ca_logs ?? ;
  }
}

class MemberFrameworkAttributes {
  public MemberFabricAttributes $fabric;

  public function __construct(shape(
  ?'fabric' => MemberFabricAttributes,
  ) $s = shape()) {
    $this->fabric = $fabric ?? ;
  }
}

class MemberFrameworkConfiguration {
  public MemberFabricConfiguration $fabric;

  public function __construct(shape(
  ?'fabric' => MemberFabricConfiguration,
  ) $s = shape()) {
    $this->fabric = $fabric ?? ;
  }
}

type MemberListMaxResults = int;

class MemberLogPublishingConfiguration {
  public MemberFabricLogPublishingConfiguration $fabric;

  public function __construct(shape(
  ?'fabric' => MemberFabricLogPublishingConfiguration,
  ) $s = shape()) {
    $this->fabric = $fabric ?? ;
  }
}

type MemberStatus = string;

class MemberSummary {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public ResourceIdString $id;
  public IsOwned $is_owned;
  public NetworkMemberNameString $name;
  public MemberStatus $status;

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'description' => DescriptionString,
  ?'id' => ResourceIdString,
  ?'is_owned' => IsOwned,
  ?'name' => NetworkMemberNameString,
  ?'status' => MemberStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->id = $id ?? ;
    $this->is_owned = $is_owned ?? false;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type MemberSummaryList = vec<MemberSummary>;

type NameString = string;

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

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'description' => DescriptionString,
  ?'framework' => Framework,
  ?'framework_attributes' => NetworkFrameworkAttributes,
  ?'framework_version' => FrameworkVersionString,
  ?'id' => ResourceIdString,
  ?'name' => NameString,
  ?'status' => NetworkStatus,
  ?'voting_policy' => VotingPolicy,
  ?'vpc_endpoint_service_name' => string,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->framework = $framework ?? "";
    $this->framework_attributes = $framework_attributes ?? ;
    $this->framework_version = $framework_version ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
    $this->voting_policy = $voting_policy ?? null;
    $this->vpc_endpoint_service_name = $vpc_endpoint_service_name ?? ;
  }
}

class NetworkFabricAttributes {
  public Edition $edition;
  public string $ordering_service_endpoint;

  public function __construct(shape(
  ?'edition' => Edition,
  ?'ordering_service_endpoint' => string,
  ) $s = shape()) {
    $this->edition = $edition ?? "";
    $this->ordering_service_endpoint = $ordering_service_endpoint ?? ;
  }
}

class NetworkFabricConfiguration {
  public Edition $edition;

  public function __construct(shape(
  ?'edition' => Edition,
  ) $s = shape()) {
    $this->edition = $edition ?? "";
  }
}

class NetworkFrameworkAttributes {
  public NetworkFabricAttributes $fabric;

  public function __construct(shape(
  ?'fabric' => NetworkFabricAttributes,
  ) $s = shape()) {
    $this->fabric = $fabric ?? ;
  }
}

class NetworkFrameworkConfiguration {
  public NetworkFabricConfiguration $fabric;

  public function __construct(shape(
  ?'fabric' => NetworkFabricConfiguration,
  ) $s = shape()) {
    $this->fabric = $fabric ?? ;
  }
}

type NetworkListMaxResults = int;

type NetworkMemberNameString = string;

type NetworkStatus = string;

class NetworkSummary {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public Framework $framework;
  public FrameworkVersionString $framework_version;
  public ResourceIdString $id;
  public NameString $name;
  public NetworkStatus $status;

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'description' => DescriptionString,
  ?'framework' => Framework,
  ?'framework_version' => FrameworkVersionString,
  ?'id' => ResourceIdString,
  ?'name' => NameString,
  ?'status' => NetworkStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->framework = $framework ?? "";
    $this->framework_version = $framework_version ?? ;
    $this->id = $id ?? ;
    $this->name = $name ?? ;
    $this->status = $status ?? ;
  }
}

type NetworkSummaryList = vec<NetworkSummary>;

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

  public function __construct(shape(
  ?'availability_zone' => AvailabilityZoneString,
  ?'creation_date' => Timestamp,
  ?'framework_attributes' => NodeFrameworkAttributes,
  ?'id' => ResourceIdString,
  ?'instance_type' => InstanceTypeString,
  ?'log_publishing_configuration' => NodeLogPublishingConfiguration,
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ?'status' => NodeStatus,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->framework_attributes = $framework_attributes ?? ;
    $this->id = $id ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->log_publishing_configuration = $log_publishing_configuration ?? ;
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
    $this->status = $status ?? ;
  }
}

class NodeConfiguration {
  public AvailabilityZoneString $availability_zone;
  public InstanceTypeString $instance_type;
  public NodeLogPublishingConfiguration $log_publishing_configuration;

  public function __construct(shape(
  ?'availability_zone' => AvailabilityZoneString,
  ?'instance_type' => InstanceTypeString,
  ?'log_publishing_configuration' => NodeLogPublishingConfiguration,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->log_publishing_configuration = $log_publishing_configuration ?? ;
  }
}

class NodeFabricAttributes {
  public string $peer_endpoint;
  public string $peer_event_endpoint;

  public function __construct(shape(
  ?'peer_endpoint' => string,
  ?'peer_event_endpoint' => string,
  ) $s = shape()) {
    $this->peer_endpoint = $peer_endpoint ?? ;
    $this->peer_event_endpoint = $peer_event_endpoint ?? ;
  }
}

class NodeFabricLogPublishingConfiguration {
  public LogConfigurations $chaincode_logs;
  public LogConfigurations $peer_logs;

  public function __construct(shape(
  ?'chaincode_logs' => LogConfigurations,
  ?'peer_logs' => LogConfigurations,
  ) $s = shape()) {
    $this->chaincode_logs = $chaincode_logs ?? ;
    $this->peer_logs = $peer_logs ?? ;
  }
}

class NodeFrameworkAttributes {
  public NodeFabricAttributes $fabric;

  public function __construct(shape(
  ?'fabric' => NodeFabricAttributes,
  ) $s = shape()) {
    $this->fabric = $fabric ?? ;
  }
}

type NodeListMaxResults = int;

class NodeLogPublishingConfiguration {
  public NodeFabricLogPublishingConfiguration $fabric;

  public function __construct(shape(
  ?'fabric' => NodeFabricLogPublishingConfiguration,
  ) $s = shape()) {
    $this->fabric = $fabric ?? ;
  }
}

type NodeStatus = string;

class NodeSummary {
  public AvailabilityZoneString $availability_zone;
  public Timestamp $creation_date;
  public ResourceIdString $id;
  public InstanceTypeString $instance_type;
  public NodeStatus $status;

  public function __construct(shape(
  ?'availability_zone' => AvailabilityZoneString,
  ?'creation_date' => Timestamp,
  ?'id' => ResourceIdString,
  ?'instance_type' => InstanceTypeString,
  ?'status' => NodeStatus,
  ) $s = shape()) {
    $this->availability_zone = $availability_zone ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->id = $id ?? ;
    $this->instance_type = $instance_type ?? ;
    $this->status = $status ?? ;
  }
}

type NodeSummaryList = vec<NodeSummary>;

type PaginationToken = string;

type PasswordString = string;

type PrincipalString = string;

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

  public function __construct(shape(
  ?'actions' => ProposalActions,
  ?'creation_date' => Timestamp,
  ?'description' => DescriptionString,
  ?'expiration_date' => Timestamp,
  ?'network_id' => ResourceIdString,
  ?'no_vote_count' => VoteCount,
  ?'outstanding_vote_count' => VoteCount,
  ?'proposal_id' => ResourceIdString,
  ?'proposed_by_member_id' => ResourceIdString,
  ?'proposed_by_member_name' => NetworkMemberNameString,
  ?'status' => ProposalStatus,
  ?'yes_vote_count' => VoteCount,
  ) $s = shape()) {
    $this->actions = $actions ?? ;
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->expiration_date = $expiration_date ?? ;
    $this->network_id = $network_id ?? ;
    $this->no_vote_count = $no_vote_count ?? ;
    $this->outstanding_vote_count = $outstanding_vote_count ?? ;
    $this->proposal_id = $proposal_id ?? ;
    $this->proposed_by_member_id = $proposed_by_member_id ?? ;
    $this->proposed_by_member_name = $proposed_by_member_name ?? ;
    $this->status = $status ?? ;
    $this->yes_vote_count = $yes_vote_count ?? ;
  }
}

class ProposalActions {
  public InviteActionList $invitations;
  public RemoveActionList $removals;

  public function __construct(shape(
  ?'invitations' => InviteActionList,
  ?'removals' => RemoveActionList,
  ) $s = shape()) {
    $this->invitations = $invitations ?? ;
    $this->removals = $removals ?? ;
  }
}

type ProposalDurationInt = int;

type ProposalListMaxResults = int;

type ProposalStatus = string;

class ProposalSummary {
  public Timestamp $creation_date;
  public DescriptionString $description;
  public Timestamp $expiration_date;
  public ResourceIdString $proposal_id;
  public ResourceIdString $proposed_by_member_id;
  public NetworkMemberNameString $proposed_by_member_name;
  public ProposalStatus $status;

  public function __construct(shape(
  ?'creation_date' => Timestamp,
  ?'description' => DescriptionString,
  ?'expiration_date' => Timestamp,
  ?'proposal_id' => ResourceIdString,
  ?'proposed_by_member_id' => ResourceIdString,
  ?'proposed_by_member_name' => NetworkMemberNameString,
  ?'status' => ProposalStatus,
  ) $s = shape()) {
    $this->creation_date = $creation_date ?? ;
    $this->description = $description ?? ;
    $this->expiration_date = $expiration_date ?? ;
    $this->proposal_id = $proposal_id ?? ;
    $this->proposed_by_member_id = $proposed_by_member_id ?? ;
    $this->proposed_by_member_name = $proposed_by_member_name ?? ;
    $this->status = $status ?? ;
  }
}

type ProposalSummaryList = vec<ProposalSummary>;

type ProposalVoteList = vec<VoteSummary>;

class RejectInvitationInput {
  public ResourceIdString $invitation_id;

  public function __construct(shape(
  ?'invitation_id' => ResourceIdString,
  ) $s = shape()) {
    $this->invitation_id = $invitation_id ?? ;
  }
}

class RejectInvitationOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class RemoveAction {
  public ResourceIdString $member_id;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
  }
}

type RemoveActionList = vec<RemoveAction>;

class ResourceAlreadyExistsException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type ResourceIdString = string;

class ResourceLimitExceededException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotFoundException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class ResourceNotReadyException {
  public string $message;

  public function __construct(shape(
  ?'message' => string,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type String = string;

type ThresholdComparator = string;

type ThresholdPercentageInt = int;

class ThrottlingException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Timestamp = int;

class UpdateMemberInput {
  public MemberLogPublishingConfiguration $log_publishing_configuration;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;

  public function __construct(shape(
  ?'log_publishing_configuration' => MemberLogPublishingConfiguration,
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ) $s = shape()) {
    $this->log_publishing_configuration = $log_publishing_configuration ?? ;
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
  }
}

class UpdateMemberOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateNodeInput {
  public NodeLogPublishingConfiguration $log_publishing_configuration;
  public ResourceIdString $member_id;
  public ResourceIdString $network_id;
  public ResourceIdString $node_id;

  public function __construct(shape(
  ?'log_publishing_configuration' => NodeLogPublishingConfiguration,
  ?'member_id' => ResourceIdString,
  ?'network_id' => ResourceIdString,
  ?'node_id' => ResourceIdString,
  ) $s = shape()) {
    $this->log_publishing_configuration = $log_publishing_configuration ?? ;
    $this->member_id = $member_id ?? ;
    $this->network_id = $network_id ?? ;
    $this->node_id = $node_id ?? ;
  }
}

class UpdateNodeOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type UsernameString = string;

type VoteCount = int;

class VoteOnProposalInput {
  public ResourceIdString $network_id;
  public ResourceIdString $proposal_id;
  public VoteValue $vote;
  public ResourceIdString $voter_member_id;

  public function __construct(shape(
  ?'network_id' => ResourceIdString,
  ?'proposal_id' => ResourceIdString,
  ?'vote' => VoteValue,
  ?'voter_member_id' => ResourceIdString,
  ) $s = shape()) {
    $this->network_id = $network_id ?? ;
    $this->proposal_id = $proposal_id ?? ;
    $this->vote = $vote ?? ;
    $this->voter_member_id = $voter_member_id ?? ;
  }
}

class VoteOnProposalOutput {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class VoteSummary {
  public ResourceIdString $member_id;
  public NetworkMemberNameString $member_name;
  public VoteValue $vote;

  public function __construct(shape(
  ?'member_id' => ResourceIdString,
  ?'member_name' => NetworkMemberNameString,
  ?'vote' => VoteValue,
  ) $s = shape()) {
    $this->member_id = $member_id ?? ;
    $this->member_name = $member_name ?? ;
    $this->vote = $vote ?? ;
  }
}

type VoteValue = string;

class VotingPolicy {
  public ApprovalThresholdPolicy $approval_threshold_policy;

  public function __construct(shape(
  ?'approval_threshold_policy' => ApprovalThresholdPolicy,
  ) $s = shape()) {
    $this->approval_threshold_policy = $approval_threshold_policy ?? null;
  }
}

