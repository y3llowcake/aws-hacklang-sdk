<?hh // strict
namespace slack\aws\snowball;

interface Snowball {
  public function CancelCluster(CancelClusterRequest) Awaitable<Errors\Result<CancelClusterResult>>;
  public function CancelJob(CancelJobRequest) Awaitable<Errors\Result<CancelJobResult>>;
  public function CreateAddress(CreateAddressRequest) Awaitable<Errors\Result<CreateAddressResult>>;
  public function CreateCluster(CreateClusterRequest) Awaitable<Errors\Result<CreateClusterResult>>;
  public function CreateJob(CreateJobRequest) Awaitable<Errors\Result<CreateJobResult>>;
  public function DescribeAddress(DescribeAddressRequest) Awaitable<Errors\Result<DescribeAddressResult>>;
  public function DescribeAddresses(DescribeAddressesRequest) Awaitable<Errors\Result<DescribeAddressesResult>>;
  public function DescribeCluster(DescribeClusterRequest) Awaitable<Errors\Result<DescribeClusterResult>>;
  public function DescribeJob(DescribeJobRequest) Awaitable<Errors\Result<DescribeJobResult>>;
  public function GetJobManifest(GetJobManifestRequest) Awaitable<Errors\Result<GetJobManifestResult>>;
  public function GetJobUnlockCode(GetJobUnlockCodeRequest) Awaitable<Errors\Result<GetJobUnlockCodeResult>>;
  public function GetSnowballUsage(GetSnowballUsageRequest) Awaitable<Errors\Result<GetSnowballUsageResult>>;
  public function GetSoftwareUpdates(GetSoftwareUpdatesRequest) Awaitable<Errors\Result<GetSoftwareUpdatesResult>>;
  public function ListClusterJobs(ListClusterJobsRequest) Awaitable<Errors\Result<ListClusterJobsResult>>;
  public function ListClusters(ListClustersRequest) Awaitable<Errors\Result<ListClustersResult>>;
  public function ListCompatibleImages(ListCompatibleImagesRequest) Awaitable<Errors\Result<ListCompatibleImagesResult>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResult>>;
  public function UpdateCluster(UpdateClusterRequest) Awaitable<Errors\Result<UpdateClusterResult>>;
  public function UpdateJob(UpdateJobRequest) Awaitable<Errors\Result<UpdateJobResult>>;
}

class Address {
  public AddressId $address_id;
  public string $city;
  public string $company;
  public string $country;
  public boolean $is_restricted;
  public string $landmark;
  public string $name;
  public string $phone_number;
  public string $postal_code;
  public string $prefecture_or_district;
  public string $state_or_province;
  public string $street_1;
  public string $street_2;
  public string $street_3;
}

class AddressId {
}

class AddressList {
}

class AmiId {
}

class Boolean {
}

class CancelClusterRequest {
  public ClusterId $cluster_id;
}

class CancelClusterResult {
}

class CancelJobRequest {
  public JobId $job_id;
}

class CancelJobResult {
}

class ClusterId {
}

class ClusterLimitExceededException {
  public string $message;
}

class ClusterListEntry {
  public string $cluster_id;
  public ClusterState $cluster_state;
  public Timestamp $creation_date;
  public string $description;
}

class ClusterListEntryList {
}

class ClusterMetadata {
  public AddressId $address_id;
  public string $cluster_id;
  public ClusterState $cluster_state;
  public Timestamp $creation_date;
  public string $description;
  public AddressId $forwarding_address_id;
  public JobType $job_type;
  public KmsKeyARN $kms_key_arn;
  public Notification $notification;
  public JobResource $resources;
  public RoleARN $role_arn;
  public ShippingOption $shipping_option;
  public SnowballType $snowball_type;
  public TaxDocuments $tax_documents;
}

class ClusterState {
}

class CompatibleImage {
  public string $ami_id;
  public string $name;
}

class CompatibleImageList {
}

class CreateAddressRequest {
  public Address $address;
}

class CreateAddressResult {
  public string $address_id;
}

class CreateClusterRequest {
  public AddressId $address_id;
  public string $description;
  public AddressId $forwarding_address_id;
  public JobType $job_type;
  public KmsKeyARN $kms_key_arn;
  public Notification $notification;
  public JobResource $resources;
  public RoleARN $role_arn;
  public ShippingOption $shipping_option;
  public SnowballType $snowball_type;
  public TaxDocuments $tax_documents;
}

class CreateClusterResult {
  public ClusterId $cluster_id;
}

class CreateJobRequest {
  public AddressId $address_id;
  public ClusterId $cluster_id;
  public string $description;
  public AddressId $forwarding_address_id;
  public JobType $job_type;
  public KmsKeyARN $kms_key_arn;
  public Notification $notification;
  public JobResource $resources;
  public RoleARN $role_arn;
  public ShippingOption $shipping_option;
  public SnowballCapacity $snowball_capacity_preference;
  public SnowballType $snowball_type;
  public TaxDocuments $tax_documents;
}

class CreateJobResult {
  public JobId $job_id;
}

class DataTransfer {
  public Long $bytes_transferred;
  public Long $objects_transferred;
  public Long $total_bytes;
  public Long $total_objects;
}

class DescribeAddressRequest {
  public AddressId $address_id;
}

class DescribeAddressResult {
  public Address $address;
}

class DescribeAddressesRequest {
  public ListLimit $max_results;
  public string $next_token;
}

class DescribeAddressesResult {
  public AddressList $addresses;
  public string $next_token;
}

class DescribeClusterRequest {
  public ClusterId $cluster_id;
}

class DescribeClusterResult {
  public ClusterMetadata $cluster_metadata;
}

class DescribeJobRequest {
  public JobId $job_id;
}

class DescribeJobResult {
  public JobMetadata $job_metadata;
  public JobMetadataList $sub_job_metadata;
}

class Ec2AmiResource {
  public AmiId $ami_id;
  public string $snowball_ami_id;
}

class Ec2AmiResourceList {
}

class Ec2RequestFailedException {
  public string $message;
}

class EventTriggerDefinition {
  public ResourceARN $event_resource_arn;
}

class EventTriggerDefinitionList {
}

class GSTIN {
}

class GetJobManifestRequest {
  public JobId $job_id;
}

class GetJobManifestResult {
  public string $manifest_uri;
}

class GetJobUnlockCodeRequest {
  public JobId $job_id;
}

class GetJobUnlockCodeResult {
  public string $unlock_code;
}

class GetSnowballUsageRequest {
}

class GetSnowballUsageResult {
  public int $snowball_limit;
  public int $snowballs_in_use;
}

class GetSoftwareUpdatesRequest {
  public JobId $job_id;
}

class GetSoftwareUpdatesResult {
  public string $updates_uri;
}

class INDTaxDocuments {
  public GSTIN $gstin;
}

class Integer {
}

class InvalidAddressException {
  public string $message;
}

class InvalidInputCombinationException {
  public string $message;
}

class InvalidJobStateException {
  public string $message;
}

class InvalidNextTokenException {
  public string $message;
}

class InvalidResourceException {
  public string $message;
  public string $resource_type;
}

class JobId {
}

class JobListEntry {
  public Timestamp $creation_date;
  public string $description;
  public boolean $is_master;
  public string $job_id;
  public JobState $job_state;
  public JobType $job_type;
  public SnowballType $snowball_type;
}

class JobListEntryList {
}

class JobLogs {
  public string $job_completion_report_uri;
  public string $job_failure_log_uri;
  public string $job_success_log_uri;
}

class JobMetadata {
  public AddressId $address_id;
  public string $cluster_id;
  public Timestamp $creation_date;
  public DataTransfer $data_transfer_progress;
  public string $description;
  public AddressId $forwarding_address_id;
  public string $job_id;
  public JobLogs $job_log_info;
  public JobState $job_state;
  public JobType $job_type;
  public KmsKeyARN $kms_key_arn;
  public Notification $notification;
  public JobResource $resources;
  public RoleARN $role_arn;
  public ShippingDetails $shipping_details;
  public SnowballCapacity $snowball_capacity_preference;
  public SnowballType $snowball_type;
  public TaxDocuments $tax_documents;
}

class JobMetadataList {
}

class JobResource {
  public Ec2AmiResourceList $ec_2_ami_resources;
  public LambdaResourceList $lambda_resources;
  public S3ResourceList $s_3_resources;
}

class JobState {
}

class JobStateList {
}

class JobType {
}

class KMSRequestFailedException {
  public string $message;
}

class KeyRange {
  public string $begin_marker;
  public string $end_marker;
}

class KmsKeyARN {
}

class LambdaResource {
  public EventTriggerDefinitionList $event_triggers;
  public ResourceARN $lambda_arn;
}

class LambdaResourceList {
}

class ListClusterJobsRequest {
  public ClusterId $cluster_id;
  public ListLimit $max_results;
  public string $next_token;
}

class ListClusterJobsResult {
  public JobListEntryList $job_list_entries;
  public string $next_token;
}

class ListClustersRequest {
  public ListLimit $max_results;
  public string $next_token;
}

class ListClustersResult {
  public ClusterListEntryList $cluster_list_entries;
  public string $next_token;
}

class ListCompatibleImagesRequest {
  public ListLimit $max_results;
  public string $next_token;
}

class ListCompatibleImagesResult {
  public CompatibleImageList $compatible_images;
  public string $next_token;
}

class ListJobsRequest {
  public ListLimit $max_results;
  public string $next_token;
}

class ListJobsResult {
  public JobListEntryList $job_list_entries;
  public string $next_token;
}

class ListLimit {
}

class Long {
}

class Notification {
  public JobStateList $job_states_to_notify;
  public boolean $notify_all;
  public SnsTopicARN $sns_topic_arn;
}

class ResourceARN {
}

class RoleARN {
}

class S3Resource {
  public ResourceARN $bucket_arn;
  public KeyRange $key_range;
}

class S3ResourceList {
}

class Shipment {
  public string $status;
  public string $tracking_number;
}

class ShippingDetails {
  public Shipment $inbound_shipment;
  public Shipment $outbound_shipment;
  public ShippingOption $shipping_option;
}

class ShippingOption {
}

class SnowballCapacity {
}

class SnowballType {
}

class SnsTopicARN {
}

class String {
}

class TaxDocuments {
  public INDTaxDocuments $ind;
}

class Timestamp {
}

class UnsupportedAddressException {
  public string $message;
}

class UpdateClusterRequest {
  public AddressId $address_id;
  public ClusterId $cluster_id;
  public string $description;
  public AddressId $forwarding_address_id;
  public Notification $notification;
  public JobResource $resources;
  public RoleARN $role_arn;
  public ShippingOption $shipping_option;
}

class UpdateClusterResult {
}

class UpdateJobRequest {
  public AddressId $address_id;
  public string $description;
  public AddressId $forwarding_address_id;
  public JobId $job_id;
  public Notification $notification;
  public JobResource $resources;
  public RoleARN $role_arn;
  public ShippingOption $shipping_option;
  public SnowballCapacity $snowball_capacity_preference;
}

class UpdateJobResult {
}

