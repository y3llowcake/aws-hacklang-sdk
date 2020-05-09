<?hh // strict
namespace slack\aws\securityhub;

interface SecurityHub {
  public function AcceptInvitation(AcceptInvitationRequest): Awaitable<Errors\Result<AcceptInvitationResponse>>;
  public function BatchDisableStandards(BatchDisableStandardsRequest): Awaitable<Errors\Result<BatchDisableStandardsResponse>>;
  public function BatchEnableStandards(BatchEnableStandardsRequest): Awaitable<Errors\Result<BatchEnableStandardsResponse>>;
  public function BatchImportFindings(BatchImportFindingsRequest): Awaitable<Errors\Result<BatchImportFindingsResponse>>;
  public function BatchUpdateFindings(BatchUpdateFindingsRequest): Awaitable<Errors\Result<BatchUpdateFindingsResponse>>;
  public function CreateActionTarget(CreateActionTargetRequest): Awaitable<Errors\Result<CreateActionTargetResponse>>;
  public function CreateInsight(CreateInsightRequest): Awaitable<Errors\Result<CreateInsightResponse>>;
  public function CreateMembers(CreateMembersRequest): Awaitable<Errors\Result<CreateMembersResponse>>;
  public function DeclineInvitations(DeclineInvitationsRequest): Awaitable<Errors\Result<DeclineInvitationsResponse>>;
  public function DeleteActionTarget(DeleteActionTargetRequest): Awaitable<Errors\Result<DeleteActionTargetResponse>>;
  public function DeleteInsight(DeleteInsightRequest): Awaitable<Errors\Result<DeleteInsightResponse>>;
  public function DeleteInvitations(DeleteInvitationsRequest): Awaitable<Errors\Result<DeleteInvitationsResponse>>;
  public function DeleteMembers(DeleteMembersRequest): Awaitable<Errors\Result<DeleteMembersResponse>>;
  public function DescribeActionTargets(DescribeActionTargetsRequest): Awaitable<Errors\Result<DescribeActionTargetsResponse>>;
  public function DescribeHub(DescribeHubRequest): Awaitable<Errors\Result<DescribeHubResponse>>;
  public function DescribeProducts(DescribeProductsRequest): Awaitable<Errors\Result<DescribeProductsResponse>>;
  public function DescribeStandards(DescribeStandardsRequest): Awaitable<Errors\Result<DescribeStandardsResponse>>;
  public function DescribeStandardsControls(DescribeStandardsControlsRequest): Awaitable<Errors\Result<DescribeStandardsControlsResponse>>;
  public function DisableImportFindingsForProduct(DisableImportFindingsForProductRequest): Awaitable<Errors\Result<DisableImportFindingsForProductResponse>>;
  public function DisableSecurityHub(DisableSecurityHubRequest): Awaitable<Errors\Result<DisableSecurityHubResponse>>;
  public function DisassociateFromMasterAccount(DisassociateFromMasterAccountRequest): Awaitable<Errors\Result<DisassociateFromMasterAccountResponse>>;
  public function DisassociateMembers(DisassociateMembersRequest): Awaitable<Errors\Result<DisassociateMembersResponse>>;
  public function EnableImportFindingsForProduct(EnableImportFindingsForProductRequest): Awaitable<Errors\Result<EnableImportFindingsForProductResponse>>;
  public function EnableSecurityHub(EnableSecurityHubRequest): Awaitable<Errors\Result<EnableSecurityHubResponse>>;
  public function GetEnabledStandards(GetEnabledStandardsRequest): Awaitable<Errors\Result<GetEnabledStandardsResponse>>;
  public function GetFindings(GetFindingsRequest): Awaitable<Errors\Result<GetFindingsResponse>>;
  public function GetInsightResults(GetInsightResultsRequest): Awaitable<Errors\Result<GetInsightResultsResponse>>;
  public function GetInsights(GetInsightsRequest): Awaitable<Errors\Result<GetInsightsResponse>>;
  public function GetInvitationsCount(GetInvitationsCountRequest): Awaitable<Errors\Result<GetInvitationsCountResponse>>;
  public function GetMasterAccount(GetMasterAccountRequest): Awaitable<Errors\Result<GetMasterAccountResponse>>;
  public function GetMembers(GetMembersRequest): Awaitable<Errors\Result<GetMembersResponse>>;
  public function InviteMembers(InviteMembersRequest): Awaitable<Errors\Result<InviteMembersResponse>>;
  public function ListEnabledProductsForImport(ListEnabledProductsForImportRequest): Awaitable<Errors\Result<ListEnabledProductsForImportResponse>>;
  public function ListInvitations(ListInvitationsRequest): Awaitable<Errors\Result<ListInvitationsResponse>>;
  public function ListMembers(ListMembersRequest): Awaitable<Errors\Result<ListMembersResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest): Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function TagResource(TagResourceRequest): Awaitable<Errors\Result<TagResourceResponse>>;
  public function UntagResource(UntagResourceRequest): Awaitable<Errors\Result<UntagResourceResponse>>;
  public function UpdateActionTarget(UpdateActionTargetRequest): Awaitable<Errors\Result<UpdateActionTargetResponse>>;
  public function UpdateFindings(UpdateFindingsRequest): Awaitable<Errors\Result<UpdateFindingsResponse>>;
  public function UpdateInsight(UpdateInsightRequest): Awaitable<Errors\Result<UpdateInsightResponse>>;
  public function UpdateStandardsControl(UpdateStandardsControlRequest): Awaitable<Errors\Result<UpdateStandardsControlResponse>>;
}

class AcceptInvitationRequest {
  public NonEmptyString $invitation_id;
  public NonEmptyString $master_id;
}

class AcceptInvitationResponse {
}

class AccessDeniedException {
  public NonEmptyString $code;
  public NonEmptyString $message;
}

class AccountDetails {
  public AccountId $account_id;
  public NonEmptyString $email;
}

class AccountDetailsList {
}

class AccountId {
}

class AccountIdList {
}

class ActionTarget {
  public NonEmptyString $action_target_arn;
  public NonEmptyString $description;
  public NonEmptyString $name;
}

class ActionTargetList {
}

class ArnList {
}

class AvailabilityZone {
  public NonEmptyString $subnet_id;
  public NonEmptyString $zone_name;
}

class AvailabilityZones {
}

class AwsCloudFrontDistributionDetails {
  public NonEmptyString $domain_name;
  public NonEmptyString $e_tag;
  public NonEmptyString $last_modified_time;
  public AwsCloudFrontDistributionLogging $logging;
  public AwsCloudFrontDistributionOrigins $origins;
  public NonEmptyString $status;
  public NonEmptyString $web_acl_id;
}

class AwsCloudFrontDistributionLogging {
  public NonEmptyString $bucket;
  public boolean $enabled;
  public boolean $include_cookies;
  public NonEmptyString $prefix;
}

class AwsCloudFrontDistributionOriginItem {
  public NonEmptyString $domain_name;
  public NonEmptyString $id;
  public NonEmptyString $origin_path;
}

class AwsCloudFrontDistributionOriginItemList {
}

class AwsCloudFrontDistributionOrigins {
  public AwsCloudFrontDistributionOriginItemList $items;
}

class AwsCodeBuildProjectDetails {
  public NonEmptyString $encryption_key;
  public AwsCodeBuildProjectEnvironment $environment;
  public NonEmptyString $name;
  public NonEmptyString $service_role;
  public AwsCodeBuildProjectSource $source;
  public AwsCodeBuildProjectVpcConfig $vpc_config;
}

class AwsCodeBuildProjectEnvironment {
  public NonEmptyString $certificate;
  public NonEmptyString $image_pull_credentials_type;
  public AwsCodeBuildProjectEnvironmentRegistryCredential $registry_credential;
  public NonEmptyString $type;
}

class AwsCodeBuildProjectEnvironmentRegistryCredential {
  public NonEmptyString $credential;
  public NonEmptyString $credential_provider;
}

class AwsCodeBuildProjectSource {
  public int $git_clone_depth;
  public boolean $insecure_ssl;
  public NonEmptyString $location;
  public NonEmptyString $type;
}

class AwsCodeBuildProjectVpcConfig {
  public NonEmptyStringList $security_group_ids;
  public NonEmptyStringList $subnets;
  public NonEmptyString $vpc_id;
}

class AwsEc2InstanceDetails {
  public NonEmptyString $iam_instance_profile_arn;
  public NonEmptyString $image_id;
  public StringList $ip_v_4_addresses;
  public StringList $ip_v_6_addresses;
  public NonEmptyString $key_name;
  public NonEmptyString $launched_at;
  public NonEmptyString $subnet_id;
  public NonEmptyString $type;
  public NonEmptyString $vpc_id;
}

class AwsEc2NetworkInterfaceAttachment {
  public NonEmptyString $attach_time;
  public NonEmptyString $attachment_id;
  public boolean $delete_on_termination;
  public int $device_index;
  public NonEmptyString $instance_id;
  public NonEmptyString $instance_owner_id;
  public NonEmptyString $status;
}

class AwsEc2NetworkInterfaceDetails {
  public AwsEc2NetworkInterfaceAttachment $attachment;
  public NonEmptyString $network_interface_id;
  public AwsEc2NetworkInterfaceSecurityGroupList $security_groups;
  public boolean $source_dest_check;
}

class AwsEc2NetworkInterfaceSecurityGroup {
  public NonEmptyString $group_id;
  public NonEmptyString $group_name;
}

class AwsEc2NetworkInterfaceSecurityGroupList {
}

class AwsEc2SecurityGroupDetails {
  public NonEmptyString $group_id;
  public NonEmptyString $group_name;
  public AwsEc2SecurityGroupIpPermissionList $ip_permissions;
  public AwsEc2SecurityGroupIpPermissionList $ip_permissions_egress;
  public NonEmptyString $owner_id;
  public NonEmptyString $vpc_id;
}

class AwsEc2SecurityGroupIpPermission {
  public int $from_port;
  public NonEmptyString $ip_protocol;
  public AwsEc2SecurityGroupIpRangeList $ip_ranges;
  public AwsEc2SecurityGroupIpv6RangeList $ipv_6_ranges;
  public AwsEc2SecurityGroupPrefixListIdList $prefix_list_ids;
  public int $to_port;
  public AwsEc2SecurityGroupUserIdGroupPairList $user_id_group_pairs;
}

class AwsEc2SecurityGroupIpPermissionList {
}

class AwsEc2SecurityGroupIpRange {
  public NonEmptyString $cidr_ip;
}

class AwsEc2SecurityGroupIpRangeList {
}

class AwsEc2SecurityGroupIpv6Range {
  public NonEmptyString $cidr_ipv_6;
}

class AwsEc2SecurityGroupIpv6RangeList {
}

class AwsEc2SecurityGroupPrefixListId {
  public NonEmptyString $prefix_list_id;
}

class AwsEc2SecurityGroupPrefixListIdList {
}

class AwsEc2SecurityGroupUserIdGroupPair {
  public NonEmptyString $group_id;
  public NonEmptyString $group_name;
  public NonEmptyString $peering_status;
  public NonEmptyString $user_id;
  public NonEmptyString $vpc_id;
  public NonEmptyString $vpc_peering_connection_id;
}

class AwsEc2SecurityGroupUserIdGroupPairList {
}

class AwsElasticsearchDomainDetails {
  public NonEmptyString $access_policies;
  public AwsElasticsearchDomainDomainEndpointOptions $domain_endpoint_options;
  public NonEmptyString $domain_id;
  public NonEmptyString $domain_name;
  public NonEmptyString $elasticsearch_version;
  public AwsElasticsearchDomainEncryptionAtRestOptions $encryption_at_rest_options;
  public NonEmptyString $endpoint;
  public FieldMap $endpoints;
  public AwsElasticsearchDomainNodeToNodeEncryptionOptions $node_to_node_encryption_options;
  public AwsElasticsearchDomainVPCOptions $vpc_options;
}

class AwsElasticsearchDomainDomainEndpointOptions {
  public boolean $enforce_https;
  public NonEmptyString $tls_security_policy;
}

class AwsElasticsearchDomainEncryptionAtRestOptions {
  public boolean $enabled;
  public NonEmptyString $kms_key_id;
}

class AwsElasticsearchDomainNodeToNodeEncryptionOptions {
  public boolean $enabled;
}

class AwsElasticsearchDomainVPCOptions {
  public NonEmptyStringList $availability_zones;
  public NonEmptyStringList $security_group_ids;
  public NonEmptyStringList $subnet_ids;
  public NonEmptyString $vpc_id;
}

class AwsElbv2LoadBalancerDetails {
  public AvailabilityZones $availability_zones;
  public NonEmptyString $canonical_hosted_zone_id;
  public NonEmptyString $created_time;
  public NonEmptyString $dns_name;
  public NonEmptyString $ip_address_type;
  public NonEmptyString $scheme;
  public SecurityGroups $security_groups;
  public LoadBalancerState $state;
  public NonEmptyString $type;
  public NonEmptyString $vpc_id;
}

class AwsIamAccessKeyDetails {
  public NonEmptyString $created_at;
  public NonEmptyString $principal_id;
  public NonEmptyString $principal_name;
  public NonEmptyString $principal_type;
  public AwsIamAccessKeyStatus $status;
  public NonEmptyString $user_name;
}

class AwsIamAccessKeyStatus {
}

class AwsIamRoleAssumeRolePolicyDocument {
}

class AwsIamRoleDetails {
  public AwsIamRoleAssumeRolePolicyDocument $assume_role_policy_document;
  public NonEmptyString $create_date;
  public int $max_session_duration;
  public NonEmptyString $path;
  public NonEmptyString $role_id;
  public NonEmptyString $role_name;
}

class AwsKmsKeyDetails {
  public NonEmptyString $aws_account_id;
  public Double $creation_date;
  public NonEmptyString $key_id;
  public NonEmptyString $key_manager;
  public NonEmptyString $key_state;
  public NonEmptyString $origin;
}

class AwsLambdaFunctionCode {
  public NonEmptyString $s_3_bucket;
  public NonEmptyString $s_3_key;
  public NonEmptyString $s_3_object_version;
  public NonEmptyString $zip_file;
}

class AwsLambdaFunctionDeadLetterConfig {
  public NonEmptyString $target_arn;
}

class AwsLambdaFunctionDetails {
  public AwsLambdaFunctionCode $code;
  public NonEmptyString $code_sha_256;
  public AwsLambdaFunctionDeadLetterConfig $dead_letter_config;
  public AwsLambdaFunctionEnvironment $environment;
  public NonEmptyString $function_name;
  public NonEmptyString $handler;
  public NonEmptyString $kms_key_arn;
  public NonEmptyString $last_modified;
  public AwsLambdaFunctionLayerList $layers;
  public NonEmptyString $master_arn;
  public int $memory_size;
  public NonEmptyString $revision_id;
  public NonEmptyString $role;
  public NonEmptyString $runtime;
  public int $timeout;
  public AwsLambdaFunctionTracingConfig $tracing_config;
  public NonEmptyString $version;
  public AwsLambdaFunctionVpcConfig $vpc_config;
}

class AwsLambdaFunctionEnvironment {
  public AwsLambdaFunctionEnvironmentError $error;
  public FieldMap $variables;
}

class AwsLambdaFunctionEnvironmentError {
  public NonEmptyString $error_code;
  public NonEmptyString $message;
}

class AwsLambdaFunctionLayer {
  public NonEmptyString $arn;
  public int $code_size;
}

class AwsLambdaFunctionLayerList {
}

class AwsLambdaFunctionTracingConfig {
  public NonEmptyString $mode;
}

class AwsLambdaFunctionVpcConfig {
  public NonEmptyStringList $security_group_ids;
  public NonEmptyStringList $subnet_ids;
  public NonEmptyString $vpc_id;
}

class AwsLambdaLayerVersionDetails {
  public NonEmptyStringList $compatible_runtimes;
  public NonEmptyString $created_date;
  public AwsLambdaLayerVersionNumber $version;
}

class AwsLambdaLayerVersionNumber {
}

class AwsRdsDbInstanceAssociatedRole {
  public NonEmptyString $feature_name;
  public NonEmptyString $role_arn;
  public NonEmptyString $status;
}

class AwsRdsDbInstanceAssociatedRoles {
}

class AwsRdsDbInstanceDetails {
  public AwsRdsDbInstanceAssociatedRoles $associated_roles;
  public NonEmptyString $ca_certificate_identifier;
  public NonEmptyString $db_cluster_identifier;
  public NonEmptyString $db_instance_class;
  public NonEmptyString $db_instance_identifier;
  public NonEmptyString $db_name;
  public int $db_instance_port;
  public NonEmptyString $dbi_resource_id;
  public boolean $deletion_protection;
  public AwsRdsDbInstanceEndpoint $endpoint;
  public NonEmptyString $engine;
  public NonEmptyString $engine_version;
  public boolean $iam_database_authentication_enabled;
  public NonEmptyString $instance_create_time;
  public NonEmptyString $kms_key_id;
  public boolean $publicly_accessible;
  public boolean $storage_encrypted;
  public NonEmptyString $tde_credential_arn;
  public AwsRdsDbInstanceVpcSecurityGroups $vpc_security_groups;
}

class AwsRdsDbInstanceEndpoint {
  public NonEmptyString $address;
  public NonEmptyString $hosted_zone_id;
  public int $port;
}

class AwsRdsDbInstanceVpcSecurityGroup {
  public NonEmptyString $status;
  public NonEmptyString $vpc_security_group_id;
}

class AwsRdsDbInstanceVpcSecurityGroups {
}

class AwsS3BucketDetails {
  public NonEmptyString $created_at;
  public NonEmptyString $owner_id;
  public NonEmptyString $owner_name;
  public AwsS3BucketServerSideEncryptionConfiguration $server_side_encryption_configuration;
}

class AwsS3BucketServerSideEncryptionByDefault {
  public NonEmptyString $kms_master_key_id;
  public NonEmptyString $sse_algorithm;
}

class AwsS3BucketServerSideEncryptionConfiguration {
  public AwsS3BucketServerSideEncryptionRules $rules;
}

class AwsS3BucketServerSideEncryptionRule {
  public AwsS3BucketServerSideEncryptionByDefault $apply_server_side_encryption_by_default;
}

class AwsS3BucketServerSideEncryptionRules {
}

class AwsS3ObjectDetails {
  public NonEmptyString $content_type;
  public NonEmptyString $e_tag;
  public NonEmptyString $last_modified;
  public NonEmptyString $ssekms_key_id;
  public NonEmptyString $server_side_encryption;
  public NonEmptyString $version_id;
}

class AwsSecurityFinding {
  public NonEmptyString $aws_account_id;
  public Compliance $compliance;
  public int $confidence;
  public NonEmptyString $created_at;
  public int $criticality;
  public NonEmptyString $description;
  public NonEmptyString $first_observed_at;
  public NonEmptyString $generator_id;
  public NonEmptyString $id;
  public NonEmptyString $last_observed_at;
  public MalwareList $malware;
  public Network $network;
  public Note $note;
  public ProcessDetails $process;
  public NonEmptyString $product_arn;
  public FieldMap $product_fields;
  public RecordState $record_state;
  public RelatedFindingList $related_findings;
  public Remediation $remediation;
  public ResourceList $resources;
  public NonEmptyString $schema_version;
  public Severity $severity;
  public NonEmptyString $source_url;
  public ThreatIntelIndicatorList $threat_intel_indicators;
  public NonEmptyString $title;
  public TypeList $types;
  public NonEmptyString $updated_at;
  public FieldMap $user_defined_fields;
  public VerificationState $verification_state;
  public Workflow $workflow;
  public WorkflowState $workflow_state;
}

class AwsSecurityFindingFilters {
  public StringFilterList $aws_account_id;
  public StringFilterList $company_name;
  public StringFilterList $compliance_status;
  public NumberFilterList $confidence;
  public DateFilterList $created_at;
  public NumberFilterList $criticality;
  public StringFilterList $description;
  public DateFilterList $first_observed_at;
  public StringFilterList $generator_id;
  public StringFilterList $id;
  public KeywordFilterList $keyword;
  public DateFilterList $last_observed_at;
  public StringFilterList $malware_name;
  public StringFilterList $malware_path;
  public StringFilterList $malware_state;
  public StringFilterList $malware_type;
  public StringFilterList $network_destination_domain;
  public IpFilterList $network_destination_ip_v_4;
  public IpFilterList $network_destination_ip_v_6;
  public NumberFilterList $network_destination_port;
  public StringFilterList $network_direction;
  public StringFilterList $network_protocol;
  public StringFilterList $network_source_domain;
  public IpFilterList $network_source_ip_v_4;
  public IpFilterList $network_source_ip_v_6;
  public StringFilterList $network_source_mac;
  public NumberFilterList $network_source_port;
  public StringFilterList $note_text;
  public DateFilterList $note_updated_at;
  public StringFilterList $note_updated_by;
  public DateFilterList $process_launched_at;
  public StringFilterList $process_name;
  public NumberFilterList $process_parent_pid;
  public StringFilterList $process_path;
  public NumberFilterList $process_pid;
  public DateFilterList $process_terminated_at;
  public StringFilterList $product_arn;
  public MapFilterList $product_fields;
  public StringFilterList $product_name;
  public StringFilterList $recommendation_text;
  public StringFilterList $record_state;
  public StringFilterList $related_findings_id;
  public StringFilterList $related_findings_product_arn;
  public StringFilterList $resource_aws_ec_2_instance_iam_instance_profile_arn;
  public StringFilterList $resource_aws_ec_2_instance_image_id;
  public IpFilterList $resource_aws_ec_2_instance_ip_v_4_addresses;
  public IpFilterList $resource_aws_ec_2_instance_ip_v_6_addresses;
  public StringFilterList $resource_aws_ec_2_instance_key_name;
  public DateFilterList $resource_aws_ec_2_instance_launched_at;
  public StringFilterList $resource_aws_ec_2_instance_subnet_id;
  public StringFilterList $resource_aws_ec_2_instance_type;
  public StringFilterList $resource_aws_ec_2_instance_vpc_id;
  public DateFilterList $resource_aws_iam_access_key_created_at;
  public StringFilterList $resource_aws_iam_access_key_status;
  public StringFilterList $resource_aws_iam_access_key_user_name;
  public StringFilterList $resource_aws_s_3_bucket_owner_id;
  public StringFilterList $resource_aws_s_3_bucket_owner_name;
  public StringFilterList $resource_container_image_id;
  public StringFilterList $resource_container_image_name;
  public DateFilterList $resource_container_launched_at;
  public StringFilterList $resource_container_name;
  public MapFilterList $resource_details_other;
  public StringFilterList $resource_id;
  public StringFilterList $resource_partition;
  public StringFilterList $resource_region;
  public MapFilterList $resource_tags;
  public StringFilterList $resource_type;
  public StringFilterList $severity_label;
  public NumberFilterList $severity_normalized;
  public NumberFilterList $severity_product;
  public StringFilterList $source_url;
  public StringFilterList $threat_intel_indicator_category;
  public DateFilterList $threat_intel_indicator_last_observed_at;
  public StringFilterList $threat_intel_indicator_source;
  public StringFilterList $threat_intel_indicator_source_url;
  public StringFilterList $threat_intel_indicator_type;
  public StringFilterList $threat_intel_indicator_value;
  public StringFilterList $title;
  public StringFilterList $type;
  public DateFilterList $updated_at;
  public MapFilterList $user_defined_fields;
  public StringFilterList $verification_state;
  public StringFilterList $workflow_state;
  public StringFilterList $workflow_status;
}

class AwsSecurityFindingIdentifier {
  public NonEmptyString $id;
  public NonEmptyString $product_arn;
}

class AwsSecurityFindingIdentifierList {
}

class AwsSecurityFindingList {
}

class AwsSnsTopicDetails {
  public NonEmptyString $kms_master_key_id;
  public NonEmptyString $owner;
  public AwsSnsTopicSubscriptionList $subscription;
  public NonEmptyString $topic_name;
}

class AwsSnsTopicSubscription {
  public NonEmptyString $endpoint;
  public NonEmptyString $protocol;
}

class AwsSnsTopicSubscriptionList {
}

class AwsSqsQueueDetails {
  public NonEmptyString $dead_letter_target_arn;
  public int $kms_data_key_reuse_period_seconds;
  public NonEmptyString $kms_master_key_id;
  public NonEmptyString $queue_name;
}

class AwsWafWebAclDetails {
  public NonEmptyString $default_action;
  public NonEmptyString $name;
  public AwsWafWebAclRuleList $rules;
  public NonEmptyString $web_acl_id;
}

class AwsWafWebAclRule {
  public WafAction $action;
  public WafExcludedRuleList $excluded_rules;
  public WafOverrideAction $override_action;
  public int $priority;
  public NonEmptyString $rule_id;
  public NonEmptyString $type;
}

class AwsWafWebAclRuleList {
}

class BatchDisableStandardsRequest {
  public StandardsSubscriptionArns $standards_subscription_arns;
}

class BatchDisableStandardsResponse {
  public StandardsSubscriptions $standards_subscriptions;
}

class BatchEnableStandardsRequest {
  public StandardsSubscriptionRequests $standards_subscription_requests;
}

class BatchEnableStandardsResponse {
  public StandardsSubscriptions $standards_subscriptions;
}

class BatchImportFindingsRequest {
  public AwsSecurityFindingList $findings;
}

class BatchImportFindingsResponse {
  public int $failed_count;
  public ImportFindingsErrorList $failed_findings;
  public int $success_count;
}

class BatchUpdateFindingsRequest {
  public RatioScale $confidence;
  public RatioScale $criticality;
  public AwsSecurityFindingIdentifierList $finding_identifiers;
  public NoteUpdate $note;
  public RelatedFindingList $related_findings;
  public SeverityUpdate $severity;
  public TypeList $types;
  public FieldMap $user_defined_fields;
  public VerificationState $verification_state;
  public WorkflowUpdate $workflow;
}

class BatchUpdateFindingsResponse {
  public AwsSecurityFindingIdentifierList $processed_findings;
  public BatchUpdateFindingsUnprocessedFindingsList $unprocessed_findings;
}

class BatchUpdateFindingsUnprocessedFinding {
  public NonEmptyString $error_code;
  public NonEmptyString $error_message;
  public AwsSecurityFindingIdentifier $finding_identifier;
}

class BatchUpdateFindingsUnprocessedFindingsList {
}

class Boolean {
}

class CategoryList {
}

class Compliance {
  public RelatedRequirementsList $related_requirements;
  public ComplianceStatus $status;
}

class ComplianceStatus {
}

class ContainerDetails {
  public NonEmptyString $image_id;
  public NonEmptyString $image_name;
  public NonEmptyString $launched_at;
  public NonEmptyString $name;
}

class ControlStatus {
}

class CreateActionTargetRequest {
  public NonEmptyString $description;
  public NonEmptyString $id;
  public NonEmptyString $name;
}

class CreateActionTargetResponse {
  public NonEmptyString $action_target_arn;
}

class CreateInsightRequest {
  public AwsSecurityFindingFilters $filters;
  public NonEmptyString $group_by_attribute;
  public NonEmptyString $name;
}

class CreateInsightResponse {
  public NonEmptyString $insight_arn;
}

class CreateMembersRequest {
  public AccountDetailsList $account_details;
}

class CreateMembersResponse {
  public ResultList $unprocessed_accounts;
}

class DateFilter {
  public DateRange $date_range;
  public NonEmptyString $end;
  public NonEmptyString $start;
}

class DateFilterList {
}

class DateRange {
  public DateRangeUnit $unit;
  public int $value;
}

class DateRangeUnit {
}

class DeclineInvitationsRequest {
  public AccountIdList $account_ids;
}

class DeclineInvitationsResponse {
  public ResultList $unprocessed_accounts;
}

class DeleteActionTargetRequest {
  public NonEmptyString $action_target_arn;
}

class DeleteActionTargetResponse {
  public NonEmptyString $action_target_arn;
}

class DeleteInsightRequest {
  public NonEmptyString $insight_arn;
}

class DeleteInsightResponse {
  public NonEmptyString $insight_arn;
}

class DeleteInvitationsRequest {
  public AccountIdList $account_ids;
}

class DeleteInvitationsResponse {
  public ResultList $unprocessed_accounts;
}

class DeleteMembersRequest {
  public AccountIdList $account_ids;
}

class DeleteMembersResponse {
  public ResultList $unprocessed_accounts;
}

class DescribeActionTargetsRequest {
  public ArnList $action_target_arns;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeActionTargetsResponse {
  public ActionTargetList $action_targets;
  public NextToken $next_token;
}

class DescribeHubRequest {
  public NonEmptyString $hub_arn;
}

class DescribeHubResponse {
  public NonEmptyString $hub_arn;
  public NonEmptyString $subscribed_at;
}

class DescribeProductsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeProductsResponse {
  public NextToken $next_token;
  public ProductsList $products;
}

class DescribeStandardsControlsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public NonEmptyString $standards_subscription_arn;
}

class DescribeStandardsControlsResponse {
  public StandardsControls $controls;
  public NextToken $next_token;
}

class DescribeStandardsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class DescribeStandardsResponse {
  public NextToken $next_token;
  public Standards $standards;
}

class DisableImportFindingsForProductRequest {
  public NonEmptyString $product_subscription_arn;
}

class DisableImportFindingsForProductResponse {
}

class DisableSecurityHubRequest {
}

class DisableSecurityHubResponse {
}

class DisassociateFromMasterAccountRequest {
}

class DisassociateFromMasterAccountResponse {
}

class DisassociateMembersRequest {
  public AccountIdList $account_ids;
}

class DisassociateMembersResponse {
}

class Double {
}

class EnableImportFindingsForProductRequest {
  public NonEmptyString $product_arn;
}

class EnableImportFindingsForProductResponse {
  public NonEmptyString $product_subscription_arn;
}

class EnableSecurityHubRequest {
  public boolean $enable_default_standards;
  public TagMap $tags;
}

class EnableSecurityHubResponse {
}

class FieldMap {
}

class GetEnabledStandardsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public StandardsSubscriptionArns $standards_subscription_arns;
}

class GetEnabledStandardsResponse {
  public NextToken $next_token;
  public StandardsSubscriptions $standards_subscriptions;
}

class GetFindingsRequest {
  public AwsSecurityFindingFilters $filters;
  public MaxResults $max_results;
  public NextToken $next_token;
  public SortCriteria $sort_criteria;
}

class GetFindingsResponse {
  public AwsSecurityFindingList $findings;
  public NextToken $next_token;
}

class GetInsightResultsRequest {
  public NonEmptyString $insight_arn;
}

class GetInsightResultsResponse {
  public InsightResults $insight_results;
}

class GetInsightsRequest {
  public ArnList $insight_arns;
  public MaxResults $max_results;
  public NextToken $next_token;
}

class GetInsightsResponse {
  public InsightList $insights;
  public NextToken $next_token;
}

class GetInvitationsCountRequest {
}

class GetInvitationsCountResponse {
  public int $invitations_count;
}

class GetMasterAccountRequest {
}

class GetMasterAccountResponse {
  public Invitation $master;
}

class GetMembersRequest {
  public AccountIdList $account_ids;
}

class GetMembersResponse {
  public MemberList $members;
  public ResultList $unprocessed_accounts;
}

class ImportFindingsError {
  public NonEmptyString $error_code;
  public NonEmptyString $error_message;
  public NonEmptyString $id;
}

class ImportFindingsErrorList {
}

class Insight {
  public AwsSecurityFindingFilters $filters;
  public NonEmptyString $group_by_attribute;
  public NonEmptyString $insight_arn;
  public NonEmptyString $name;
}

class InsightList {
}

class InsightResultValue {
  public int $count;
  public NonEmptyString $group_by_attribute_value;
}

class InsightResultValueList {
}

class InsightResults {
  public NonEmptyString $group_by_attribute;
  public NonEmptyString $insight_arn;
  public InsightResultValueList $result_values;
}

class Integer {
}

class IntegrationType {
}

class IntegrationTypeList {
}

class InternalException {
  public NonEmptyString $code;
  public NonEmptyString $message;
}

class InvalidAccessException {
  public NonEmptyString $code;
  public NonEmptyString $message;
}

class InvalidInputException {
  public NonEmptyString $code;
  public NonEmptyString $message;
}

class Invitation {
  public AccountId $account_id;
  public NonEmptyString $invitation_id;
  public Timestamp $invited_at;
  public NonEmptyString $member_status;
}

class InvitationList {
}

class InviteMembersRequest {
  public AccountIdList $account_ids;
}

class InviteMembersResponse {
  public ResultList $unprocessed_accounts;
}

class IpFilter {
  public NonEmptyString $cidr;
}

class IpFilterList {
}

class KeywordFilter {
  public NonEmptyString $value;
}

class KeywordFilterList {
}

class LimitExceededException {
  public NonEmptyString $code;
  public NonEmptyString $message;
}

class ListEnabledProductsForImportRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListEnabledProductsForImportResponse {
  public NextToken $next_token;
  public ProductSubscriptionArnList $product_subscriptions;
}

class ListInvitationsRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
}

class ListInvitationsResponse {
  public InvitationList $invitations;
  public NonEmptyString $next_token;
}

class ListMembersRequest {
  public MaxResults $max_results;
  public NextToken $next_token;
  public boolean $only_associated;
}

class ListMembersResponse {
  public MemberList $members;
  public NonEmptyString $next_token;
}

class ListTagsForResourceRequest {
  public ResourceArn $resource_arn;
}

class ListTagsForResourceResponse {
  public TagMap $tags;
}

class LoadBalancerState {
  public NonEmptyString $code;
  public NonEmptyString $reason;
}

class Malware {
  public NonEmptyString $name;
  public NonEmptyString $path;
  public MalwareState $state;
  public MalwareType $type;
}

class MalwareList {
}

class MalwareState {
}

class MalwareType {
}

class MapFilter {
  public MapFilterComparison $comparison;
  public NonEmptyString $key;
  public NonEmptyString $value;
}

class MapFilterComparison {
}

class MapFilterList {
}

class MaxResults {
}

class Member {
  public AccountId $account_id;
  public NonEmptyString $email;
  public Timestamp $invited_at;
  public NonEmptyString $master_id;
  public NonEmptyString $member_status;
  public Timestamp $updated_at;
}

class MemberList {
}

class Network {
  public NonEmptyString $destination_domain;
  public NonEmptyString $destination_ip_v_4;
  public NonEmptyString $destination_ip_v_6;
  public int $destination_port;
  public NetworkDirection $direction;
  public NonEmptyString $protocol;
  public NonEmptyString $source_domain;
  public NonEmptyString $source_ip_v_4;
  public NonEmptyString $source_ip_v_6;
  public NonEmptyString $source_mac;
  public int $source_port;
}

class NetworkDirection {
}

class NextToken {
}

class NonEmptyString {
}

class NonEmptyStringList {
}

class Note {
  public NonEmptyString $text;
  public NonEmptyString $updated_at;
  public NonEmptyString $updated_by;
}

class NoteUpdate {
  public NonEmptyString $text;
  public NonEmptyString $updated_by;
}

class NumberFilter {
  public Double $eq;
  public Double $gte;
  public Double $lte;
}

class NumberFilterList {
}

class Partition {
}

class ProcessDetails {
  public NonEmptyString $launched_at;
  public NonEmptyString $name;
  public int $parent_pid;
  public NonEmptyString $path;
  public int $pid;
  public NonEmptyString $terminated_at;
}

class Product {
  public NonEmptyString $activation_url;
  public CategoryList $categories;
  public NonEmptyString $company_name;
  public NonEmptyString $description;
  public IntegrationTypeList $integration_types;
  public NonEmptyString $marketplace_url;
  public NonEmptyString $product_arn;
  public NonEmptyString $product_name;
  public NonEmptyString $product_subscription_resource_policy;
}

class ProductSubscriptionArnList {
}

class ProductsList {
}

class RatioScale {
}

class Recommendation {
  public NonEmptyString $text;
  public NonEmptyString $url;
}

class RecordState {
}

class RelatedFinding {
  public NonEmptyString $id;
  public NonEmptyString $product_arn;
}

class RelatedFindingList {
}

class RelatedRequirementsList {
}

class Remediation {
  public Recommendation $recommendation;
}

class Resource {
  public ResourceDetails $details;
  public NonEmptyString $id;
  public Partition $partition;
  public NonEmptyString $region;
  public FieldMap $tags;
  public NonEmptyString $type;
}

class ResourceArn {
}

class ResourceConflictException {
  public NonEmptyString $code;
  public NonEmptyString $message;
}

class ResourceDetails {
  public AwsCloudFrontDistributionDetails $aws_cloud_front_distribution;
  public AwsCodeBuildProjectDetails $aws_code_build_project;
  public AwsEc2InstanceDetails $aws_ec_2_instance;
  public AwsEc2NetworkInterfaceDetails $aws_ec_2_network_interface;
  public AwsEc2SecurityGroupDetails $aws_ec_2_security_group;
  public AwsElasticsearchDomainDetails $aws_elasticsearch_domain;
  public AwsElbv2LoadBalancerDetails $aws_elbv_2_load_balancer;
  public AwsIamAccessKeyDetails $aws_iam_access_key;
  public AwsIamRoleDetails $aws_iam_role;
  public AwsKmsKeyDetails $aws_kms_key;
  public AwsLambdaFunctionDetails $aws_lambda_function;
  public AwsLambdaLayerVersionDetails $aws_lambda_layer_version;
  public AwsRdsDbInstanceDetails $aws_rds_db_instance;
  public AwsS3BucketDetails $aws_s_3_bucket;
  public AwsS3ObjectDetails $aws_s_3_object;
  public AwsSnsTopicDetails $aws_sns_topic;
  public AwsSqsQueueDetails $aws_sqs_queue;
  public AwsWafWebAclDetails $aws_waf_web_acl;
  public ContainerDetails $container;
  public FieldMap $other;
}

class ResourceList {
}

class ResourceNotFoundException {
  public NonEmptyString $code;
  public NonEmptyString $message;
}

class Result {
  public AccountId $account_id;
  public NonEmptyString $processing_result;
}

class ResultList {
}

class SecurityGroups {
}

class Severity {
  public SeverityLabel $label;
  public int $normalized;
  public Double $product;
}

class SeverityLabel {
}

class SeverityRating {
}

class SeverityUpdate {
  public SeverityLabel $label;
  public RatioScale $normalized;
  public Double $product;
}

class SortCriteria {
}

class SortCriterion {
  public NonEmptyString $field;
  public SortOrder $sort_order;
}

class SortOrder {
}

class Standard {
  public NonEmptyString $description;
  public boolean $enabled_by_default;
  public NonEmptyString $name;
  public NonEmptyString $standards_arn;
}

class Standards {
}

class StandardsControl {
  public NonEmptyString $control_id;
  public ControlStatus $control_status;
  public Timestamp $control_status_updated_at;
  public NonEmptyString $description;
  public NonEmptyString $disabled_reason;
  public RelatedRequirementsList $related_requirements;
  public NonEmptyString $remediation_url;
  public SeverityRating $severity_rating;
  public NonEmptyString $standards_control_arn;
  public NonEmptyString $title;
}

class StandardsControls {
}

class StandardsInputParameterMap {
}

class StandardsStatus {
}

class StandardsSubscription {
  public NonEmptyString $standards_arn;
  public StandardsInputParameterMap $standards_input;
  public StandardsStatus $standards_status;
  public NonEmptyString $standards_subscription_arn;
}

class StandardsSubscriptionArns {
}

class StandardsSubscriptionRequest {
  public NonEmptyString $standards_arn;
  public StandardsInputParameterMap $standards_input;
}

class StandardsSubscriptionRequests {
}

class StandardsSubscriptions {
}

class StringFilter {
  public StringFilterComparison $comparison;
  public NonEmptyString $value;
}

class StringFilterComparison {
}

class StringFilterList {
}

class StringList {
}

class TagKey {
}

class TagKeyList {
}

class TagMap {
}

class TagResourceRequest {
  public ResourceArn $resource_arn;
  public TagMap $tags;
}

class TagResourceResponse {
}

class TagValue {
}

class ThreatIntelIndicator {
  public ThreatIntelIndicatorCategory $category;
  public NonEmptyString $last_observed_at;
  public NonEmptyString $source;
  public NonEmptyString $source_url;
  public ThreatIntelIndicatorType $type;
  public NonEmptyString $value;
}

class ThreatIntelIndicatorCategory {
}

class ThreatIntelIndicatorList {
}

class ThreatIntelIndicatorType {
}

class Timestamp {
}

class TypeList {
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public TagKeyList $tag_keys;
}

class UntagResourceResponse {
}

class UpdateActionTargetRequest {
  public NonEmptyString $action_target_arn;
  public NonEmptyString $description;
  public NonEmptyString $name;
}

class UpdateActionTargetResponse {
}

class UpdateFindingsRequest {
  public AwsSecurityFindingFilters $filters;
  public NoteUpdate $note;
  public RecordState $record_state;
}

class UpdateFindingsResponse {
}

class UpdateInsightRequest {
  public AwsSecurityFindingFilters $filters;
  public NonEmptyString $group_by_attribute;
  public NonEmptyString $insight_arn;
  public NonEmptyString $name;
}

class UpdateInsightResponse {
}

class UpdateStandardsControlRequest {
  public ControlStatus $control_status;
  public NonEmptyString $disabled_reason;
  public NonEmptyString $standards_control_arn;
}

class UpdateStandardsControlResponse {
}

class VerificationState {
}

class WafAction {
  public NonEmptyString $type;
}

class WafExcludedRule {
  public NonEmptyString $rule_id;
}

class WafExcludedRuleList {
}

class WafOverrideAction {
  public NonEmptyString $type;
}

class Workflow {
  public WorkflowStatus $status;
}

class WorkflowState {
}

class WorkflowStatus {
}

class WorkflowUpdate {
  public WorkflowStatus $status;
}

