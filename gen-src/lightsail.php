<?hh // strict
namespace slack\aws\lightsail;

interface Lightsail {
  public function AllocateStaticIp(AllocateStaticIpRequest) Awaitable<Errors\Result<AllocateStaticIpResult>>;
  public function AttachDisk(AttachDiskRequest) Awaitable<Errors\Result<AttachDiskResult>>;
  public function AttachInstancesToLoadBalancer(AttachInstancesToLoadBalancerRequest) Awaitable<Errors\Result<AttachInstancesToLoadBalancerResult>>;
  public function AttachLoadBalancerTlsCertificate(AttachLoadBalancerTlsCertificateRequest) Awaitable<Errors\Result<AttachLoadBalancerTlsCertificateResult>>;
  public function AttachStaticIp(AttachStaticIpRequest) Awaitable<Errors\Result<AttachStaticIpResult>>;
  public function CloseInstancePublicPorts(CloseInstancePublicPortsRequest) Awaitable<Errors\Result<CloseInstancePublicPortsResult>>;
  public function CopySnapshot(CopySnapshotRequest) Awaitable<Errors\Result<CopySnapshotResult>>;
  public function CreateCloudFormationStack(CreateCloudFormationStackRequest) Awaitable<Errors\Result<CreateCloudFormationStackResult>>;
  public function CreateContactMethod(CreateContactMethodRequest) Awaitable<Errors\Result<CreateContactMethodResult>>;
  public function CreateDisk(CreateDiskRequest) Awaitable<Errors\Result<CreateDiskResult>>;
  public function CreateDiskFromSnapshot(CreateDiskFromSnapshotRequest) Awaitable<Errors\Result<CreateDiskFromSnapshotResult>>;
  public function CreateDiskSnapshot(CreateDiskSnapshotRequest) Awaitable<Errors\Result<CreateDiskSnapshotResult>>;
  public function CreateDomain(CreateDomainRequest) Awaitable<Errors\Result<CreateDomainResult>>;
  public function CreateDomainEntry(CreateDomainEntryRequest) Awaitable<Errors\Result<CreateDomainEntryResult>>;
  public function CreateInstanceSnapshot(CreateInstanceSnapshotRequest) Awaitable<Errors\Result<CreateInstanceSnapshotResult>>;
  public function CreateInstances(CreateInstancesRequest) Awaitable<Errors\Result<CreateInstancesResult>>;
  public function CreateInstancesFromSnapshot(CreateInstancesFromSnapshotRequest) Awaitable<Errors\Result<CreateInstancesFromSnapshotResult>>;
  public function CreateKeyPair(CreateKeyPairRequest) Awaitable<Errors\Result<CreateKeyPairResult>>;
  public function CreateLoadBalancer(CreateLoadBalancerRequest) Awaitable<Errors\Result<CreateLoadBalancerResult>>;
  public function CreateLoadBalancerTlsCertificate(CreateLoadBalancerTlsCertificateRequest) Awaitable<Errors\Result<CreateLoadBalancerTlsCertificateResult>>;
  public function CreateRelationalDatabase(CreateRelationalDatabaseRequest) Awaitable<Errors\Result<CreateRelationalDatabaseResult>>;
  public function CreateRelationalDatabaseFromSnapshot(CreateRelationalDatabaseFromSnapshotRequest) Awaitable<Errors\Result<CreateRelationalDatabaseFromSnapshotResult>>;
  public function CreateRelationalDatabaseSnapshot(CreateRelationalDatabaseSnapshotRequest) Awaitable<Errors\Result<CreateRelationalDatabaseSnapshotResult>>;
  public function DeleteAlarm(DeleteAlarmRequest) Awaitable<Errors\Result<DeleteAlarmResult>>;
  public function DeleteAutoSnapshot(DeleteAutoSnapshotRequest) Awaitable<Errors\Result<DeleteAutoSnapshotResult>>;
  public function DeleteContactMethod(DeleteContactMethodRequest) Awaitable<Errors\Result<DeleteContactMethodResult>>;
  public function DeleteDisk(DeleteDiskRequest) Awaitable<Errors\Result<DeleteDiskResult>>;
  public function DeleteDiskSnapshot(DeleteDiskSnapshotRequest) Awaitable<Errors\Result<DeleteDiskSnapshotResult>>;
  public function DeleteDomain(DeleteDomainRequest) Awaitable<Errors\Result<DeleteDomainResult>>;
  public function DeleteDomainEntry(DeleteDomainEntryRequest) Awaitable<Errors\Result<DeleteDomainEntryResult>>;
  public function DeleteInstance(DeleteInstanceRequest) Awaitable<Errors\Result<DeleteInstanceResult>>;
  public function DeleteInstanceSnapshot(DeleteInstanceSnapshotRequest) Awaitable<Errors\Result<DeleteInstanceSnapshotResult>>;
  public function DeleteKeyPair(DeleteKeyPairRequest) Awaitable<Errors\Result<DeleteKeyPairResult>>;
  public function DeleteKnownHostKeys(DeleteKnownHostKeysRequest) Awaitable<Errors\Result<DeleteKnownHostKeysResult>>;
  public function DeleteLoadBalancer(DeleteLoadBalancerRequest) Awaitable<Errors\Result<DeleteLoadBalancerResult>>;
  public function DeleteLoadBalancerTlsCertificate(DeleteLoadBalancerTlsCertificateRequest) Awaitable<Errors\Result<DeleteLoadBalancerTlsCertificateResult>>;
  public function DeleteRelationalDatabase(DeleteRelationalDatabaseRequest) Awaitable<Errors\Result<DeleteRelationalDatabaseResult>>;
  public function DeleteRelationalDatabaseSnapshot(DeleteRelationalDatabaseSnapshotRequest) Awaitable<Errors\Result<DeleteRelationalDatabaseSnapshotResult>>;
  public function DetachDisk(DetachDiskRequest) Awaitable<Errors\Result<DetachDiskResult>>;
  public function DetachInstancesFromLoadBalancer(DetachInstancesFromLoadBalancerRequest) Awaitable<Errors\Result<DetachInstancesFromLoadBalancerResult>>;
  public function DetachStaticIp(DetachStaticIpRequest) Awaitable<Errors\Result<DetachStaticIpResult>>;
  public function DisableAddOn(DisableAddOnRequest) Awaitable<Errors\Result<DisableAddOnResult>>;
  public function DownloadDefaultKeyPair(DownloadDefaultKeyPairRequest) Awaitable<Errors\Result<DownloadDefaultKeyPairResult>>;
  public function EnableAddOn(EnableAddOnRequest) Awaitable<Errors\Result<EnableAddOnResult>>;
  public function ExportSnapshot(ExportSnapshotRequest) Awaitable<Errors\Result<ExportSnapshotResult>>;
  public function GetActiveNames(GetActiveNamesRequest) Awaitable<Errors\Result<GetActiveNamesResult>>;
  public function GetAlarms(GetAlarmsRequest) Awaitable<Errors\Result<GetAlarmsResult>>;
  public function GetAutoSnapshots(GetAutoSnapshotsRequest) Awaitable<Errors\Result<GetAutoSnapshotsResult>>;
  public function GetBlueprints(GetBlueprintsRequest) Awaitable<Errors\Result<GetBlueprintsResult>>;
  public function GetBundles(GetBundlesRequest) Awaitable<Errors\Result<GetBundlesResult>>;
  public function GetCloudFormationStackRecords(GetCloudFormationStackRecordsRequest) Awaitable<Errors\Result<GetCloudFormationStackRecordsResult>>;
  public function GetContactMethods(GetContactMethodsRequest) Awaitable<Errors\Result<GetContactMethodsResult>>;
  public function GetDisk(GetDiskRequest) Awaitable<Errors\Result<GetDiskResult>>;
  public function GetDiskSnapshot(GetDiskSnapshotRequest) Awaitable<Errors\Result<GetDiskSnapshotResult>>;
  public function GetDiskSnapshots(GetDiskSnapshotsRequest) Awaitable<Errors\Result<GetDiskSnapshotsResult>>;
  public function GetDisks(GetDisksRequest) Awaitable<Errors\Result<GetDisksResult>>;
  public function GetDomain(GetDomainRequest) Awaitable<Errors\Result<GetDomainResult>>;
  public function GetDomains(GetDomainsRequest) Awaitable<Errors\Result<GetDomainsResult>>;
  public function GetExportSnapshotRecords(GetExportSnapshotRecordsRequest) Awaitable<Errors\Result<GetExportSnapshotRecordsResult>>;
  public function GetInstance(GetInstanceRequest) Awaitable<Errors\Result<GetInstanceResult>>;
  public function GetInstanceAccessDetails(GetInstanceAccessDetailsRequest) Awaitable<Errors\Result<GetInstanceAccessDetailsResult>>;
  public function GetInstanceMetricData(GetInstanceMetricDataRequest) Awaitable<Errors\Result<GetInstanceMetricDataResult>>;
  public function GetInstancePortStates(GetInstancePortStatesRequest) Awaitable<Errors\Result<GetInstancePortStatesResult>>;
  public function GetInstanceSnapshot(GetInstanceSnapshotRequest) Awaitable<Errors\Result<GetInstanceSnapshotResult>>;
  public function GetInstanceSnapshots(GetInstanceSnapshotsRequest) Awaitable<Errors\Result<GetInstanceSnapshotsResult>>;
  public function GetInstanceState(GetInstanceStateRequest) Awaitable<Errors\Result<GetInstanceStateResult>>;
  public function GetInstances(GetInstancesRequest) Awaitable<Errors\Result<GetInstancesResult>>;
  public function GetKeyPair(GetKeyPairRequest) Awaitable<Errors\Result<GetKeyPairResult>>;
  public function GetKeyPairs(GetKeyPairsRequest) Awaitable<Errors\Result<GetKeyPairsResult>>;
  public function GetLoadBalancer(GetLoadBalancerRequest) Awaitable<Errors\Result<GetLoadBalancerResult>>;
  public function GetLoadBalancerMetricData(GetLoadBalancerMetricDataRequest) Awaitable<Errors\Result<GetLoadBalancerMetricDataResult>>;
  public function GetLoadBalancerTlsCertificates(GetLoadBalancerTlsCertificatesRequest) Awaitable<Errors\Result<GetLoadBalancerTlsCertificatesResult>>;
  public function GetLoadBalancers(GetLoadBalancersRequest) Awaitable<Errors\Result<GetLoadBalancersResult>>;
  public function GetOperation(GetOperationRequest) Awaitable<Errors\Result<GetOperationResult>>;
  public function GetOperations(GetOperationsRequest) Awaitable<Errors\Result<GetOperationsResult>>;
  public function GetOperationsForResource(GetOperationsForResourceRequest) Awaitable<Errors\Result<GetOperationsForResourceResult>>;
  public function GetRegions(GetRegionsRequest) Awaitable<Errors\Result<GetRegionsResult>>;
  public function GetRelationalDatabase(GetRelationalDatabaseRequest) Awaitable<Errors\Result<GetRelationalDatabaseResult>>;
  public function GetRelationalDatabaseBlueprints(GetRelationalDatabaseBlueprintsRequest) Awaitable<Errors\Result<GetRelationalDatabaseBlueprintsResult>>;
  public function GetRelationalDatabaseBundles(GetRelationalDatabaseBundlesRequest) Awaitable<Errors\Result<GetRelationalDatabaseBundlesResult>>;
  public function GetRelationalDatabaseEvents(GetRelationalDatabaseEventsRequest) Awaitable<Errors\Result<GetRelationalDatabaseEventsResult>>;
  public function GetRelationalDatabaseLogEvents(GetRelationalDatabaseLogEventsRequest) Awaitable<Errors\Result<GetRelationalDatabaseLogEventsResult>>;
  public function GetRelationalDatabaseLogStreams(GetRelationalDatabaseLogStreamsRequest) Awaitable<Errors\Result<GetRelationalDatabaseLogStreamsResult>>;
  public function GetRelationalDatabaseMasterUserPassword(GetRelationalDatabaseMasterUserPasswordRequest) Awaitable<Errors\Result<GetRelationalDatabaseMasterUserPasswordResult>>;
  public function GetRelationalDatabaseMetricData(GetRelationalDatabaseMetricDataRequest) Awaitable<Errors\Result<GetRelationalDatabaseMetricDataResult>>;
  public function GetRelationalDatabaseParameters(GetRelationalDatabaseParametersRequest) Awaitable<Errors\Result<GetRelationalDatabaseParametersResult>>;
  public function GetRelationalDatabaseSnapshot(GetRelationalDatabaseSnapshotRequest) Awaitable<Errors\Result<GetRelationalDatabaseSnapshotResult>>;
  public function GetRelationalDatabaseSnapshots(GetRelationalDatabaseSnapshotsRequest) Awaitable<Errors\Result<GetRelationalDatabaseSnapshotsResult>>;
  public function GetRelationalDatabases(GetRelationalDatabasesRequest) Awaitable<Errors\Result<GetRelationalDatabasesResult>>;
  public function GetStaticIp(GetStaticIpRequest) Awaitable<Errors\Result<GetStaticIpResult>>;
  public function GetStaticIps(GetStaticIpsRequest) Awaitable<Errors\Result<GetStaticIpsResult>>;
  public function ImportKeyPair(ImportKeyPairRequest) Awaitable<Errors\Result<ImportKeyPairResult>>;
  public function IsVpcPeered(IsVpcPeeredRequest) Awaitable<Errors\Result<IsVpcPeeredResult>>;
  public function OpenInstancePublicPorts(OpenInstancePublicPortsRequest) Awaitable<Errors\Result<OpenInstancePublicPortsResult>>;
  public function PeerVpc(PeerVpcRequest) Awaitable<Errors\Result<PeerVpcResult>>;
  public function PutAlarm(PutAlarmRequest) Awaitable<Errors\Result<PutAlarmResult>>;
  public function PutInstancePublicPorts(PutInstancePublicPortsRequest) Awaitable<Errors\Result<PutInstancePublicPortsResult>>;
  public function RebootInstance(RebootInstanceRequest) Awaitable<Errors\Result<RebootInstanceResult>>;
  public function RebootRelationalDatabase(RebootRelationalDatabaseRequest) Awaitable<Errors\Result<RebootRelationalDatabaseResult>>;
  public function ReleaseStaticIp(ReleaseStaticIpRequest) Awaitable<Errors\Result<ReleaseStaticIpResult>>;
  public function SendContactMethodVerification(SendContactMethodVerificationRequest) Awaitable<Errors\Result<SendContactMethodVerificationResult>>;
  public function StartInstance(StartInstanceRequest) Awaitable<Errors\Result<StartInstanceResult>>;
  public function StartRelationalDatabase(StartRelationalDatabaseRequest) Awaitable<Errors\Result<StartRelationalDatabaseResult>>;
  public function StopInstance(StopInstanceRequest) Awaitable<Errors\Result<StopInstanceResult>>;
  public function StopRelationalDatabase(StopRelationalDatabaseRequest) Awaitable<Errors\Result<StopRelationalDatabaseResult>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResult>>;
  public function TestAlarm(TestAlarmRequest) Awaitable<Errors\Result<TestAlarmResult>>;
  public function UnpeerVpc(UnpeerVpcRequest) Awaitable<Errors\Result<UnpeerVpcResult>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResult>>;
  public function UpdateDomainEntry(UpdateDomainEntryRequest) Awaitable<Errors\Result<UpdateDomainEntryResult>>;
  public function UpdateLoadBalancerAttribute(UpdateLoadBalancerAttributeRequest) Awaitable<Errors\Result<UpdateLoadBalancerAttributeResult>>;
  public function UpdateRelationalDatabase(UpdateRelationalDatabaseRequest) Awaitable<Errors\Result<UpdateRelationalDatabaseResult>>;
  public function UpdateRelationalDatabaseParameters(UpdateRelationalDatabaseParametersRequest) Awaitable<Errors\Result<UpdateRelationalDatabaseParametersResult>>;
}

class AccessDeniedException {
  public string $code;
  public string $docs;
  public string $message;
  public string $tip;
}

class AccessDirection {
}

class AccountSetupInProgressException {
  public string $code;
  public string $docs;
  public string $message;
  public string $tip;
}

class AddOn {
  public string $name;
  public TimeOfDay $next_snapshot_time_of_day;
  public TimeOfDay $snapshot_time_of_day;
  public string $status;
}

class AddOnList {
}

class AddOnRequest {
  public AddOnType $add_on_type;
  public AutoSnapshotAddOnRequest $auto_snapshot_add_on_request;
}

class AddOnRequestList {
}

class AddOnType {
}

class Alarm {
  public NonEmptyString $arn;
  public ComparisonOperator $comparison_operator;
  public ContactProtocolsList $contact_protocols;
  public IsoDate $created_at;
  public integer $datapoints_to_alarm;
  public integer $evaluation_periods;
  public ResourceLocation $location;
  public MetricName $metric_name;
  public MonitoredResourceInfo $monitored_resource_info;
  public ResourceName $name;
  public boolean $notification_enabled;
  public NotificationTriggerList $notification_triggers;
  public MetricPeriod $period;
  public ResourceType $resource_type;
  public AlarmState $state;
  public MetricStatistic $statistic;
  public string $support_code;
  public double $threshold;
  public TreatMissingData $treat_missing_data;
  public MetricUnit $unit;
}

class AlarmState {
}

class AlarmsList {
}

class AllocateStaticIpRequest {
  public ResourceName $static_ip_name;
}

class AllocateStaticIpResult {
  public OperationList $operations;
}

class AttachDiskRequest {
  public ResourceName $disk_name;
  public NonEmptyString $disk_path;
  public ResourceName $instance_name;
}

class AttachDiskResult {
  public OperationList $operations;
}

class AttachInstancesToLoadBalancerRequest {
  public ResourceNameList $instance_names;
  public ResourceName $load_balancer_name;
}

class AttachInstancesToLoadBalancerResult {
  public OperationList $operations;
}

class AttachLoadBalancerTlsCertificateRequest {
  public ResourceName $certificate_name;
  public ResourceName $load_balancer_name;
}

class AttachLoadBalancerTlsCertificateResult {
  public OperationList $operations;
}

class AttachStaticIpRequest {
  public ResourceName $instance_name;
  public ResourceName $static_ip_name;
}

class AttachStaticIpResult {
  public OperationList $operations;
}

class AttachedDisk {
  public string $path;
  public integer $size_in_gb;
}

class AttachedDiskList {
}

class AttachedDiskMap {
}

class AutoSnapshotAddOnRequest {
  public TimeOfDay $snapshot_time_of_day;
}

class AutoSnapshotDate {
}

class AutoSnapshotDetails {
  public IsoDate $created_at;
  public string $date;
  public AttachedDiskList $from_attached_disks;
  public AutoSnapshotStatus $status;
}

class AutoSnapshotDetailsList {
}

class AutoSnapshotStatus {
}

class AvailabilityZone {
  public NonEmptyString $state;
  public NonEmptyString $zone_name;
}

class AvailabilityZoneList {
}

class Base64 {
}

class Blueprint {
  public NonEmptyString $blueprint_id;
  public string $description;
  public NonEmptyString $group;
  public boolean $is_active;
  public string $license_url;
  public integer $min_power;
  public ResourceName $name;
  public InstancePlatform $platform;
  public string $product_url;
  public BlueprintType $type;
  public string $version;
  public string $version_code;
}

class BlueprintList {
}

class BlueprintType {
}

class Bundle {
  public NonEmptyString $bundle_id;
  public integer $cpu_count;
  public integer $disk_size_in_gb;
  public string $instance_type;
  public boolean $is_active;
  public string $name;
  public integer $power;
  public float $price;
  public float $ram_size_in_gb;
  public InstancePlatformList $supported_platforms;
  public integer $transfer_per_month_in_gb;
}

class BundleList {
}

class CloseInstancePublicPortsRequest {
  public ResourceName $instance_name;
  public PortInfo $port_info;
}

class CloseInstancePublicPortsResult {
  public Operation $operation;
}

class CloudFormationStackRecord {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public DestinationInfo $destination_info;
  public ResourceLocation $location;
  public ResourceName $name;
  public ResourceType $resource_type;
  public CloudFormationStackRecordSourceInfoList $source_info;
  public RecordState $state;
}

class CloudFormationStackRecordList {
}

class CloudFormationStackRecordSourceInfo {
  public NonEmptyString $arn;
  public NonEmptyString $name;
  public CloudFormationStackRecordSourceType $resource_type;
}

class CloudFormationStackRecordSourceInfoList {
}

class CloudFormationStackRecordSourceType {
}

class ComparisonOperator {
}

class ContactMethod {
  public NonEmptyString $arn;
  public NonEmptyString $contact_endpoint;
  public IsoDate $created_at;
  public ResourceLocation $location;
  public ResourceName $name;
  public ContactProtocol $protocol;
  public ResourceType $resource_type;
  public ContactMethodStatus $status;
  public string $support_code;
}

class ContactMethodStatus {
}

class ContactMethodVerificationProtocol {
}

class ContactMethodsList {
}

class ContactProtocol {
}

class ContactProtocolsList {
}

class CopySnapshotRequest {
  public string $restore_date;
  public RegionName $source_region;
  public string $source_resource_name;
  public ResourceName $source_snapshot_name;
  public ResourceName $target_snapshot_name;
  public boolean $use_latest_restorable_auto_snapshot;
}

class CopySnapshotResult {
  public OperationList $operations;
}

class CreateCloudFormationStackRequest {
  public InstanceEntryList $instances;
}

class CreateCloudFormationStackResult {
  public OperationList $operations;
}

class CreateContactMethodRequest {
  public StringMax256 $contact_endpoint;
  public ContactProtocol $protocol;
}

class CreateContactMethodResult {
  public OperationList $operations;
}

class CreateDiskFromSnapshotRequest {
  public AddOnRequestList $add_ons;
  public NonEmptyString $availability_zone;
  public ResourceName $disk_name;
  public ResourceName $disk_snapshot_name;
  public string $restore_date;
  public integer $size_in_gb;
  public string $source_disk_name;
  public TagList $tags;
  public boolean $use_latest_restorable_auto_snapshot;
}

class CreateDiskFromSnapshotResult {
  public OperationList $operations;
}

class CreateDiskRequest {
  public AddOnRequestList $add_ons;
  public NonEmptyString $availability_zone;
  public ResourceName $disk_name;
  public integer $size_in_gb;
  public TagList $tags;
}

class CreateDiskResult {
  public OperationList $operations;
}

class CreateDiskSnapshotRequest {
  public ResourceName $disk_name;
  public ResourceName $disk_snapshot_name;
  public ResourceName $instance_name;
  public TagList $tags;
}

class CreateDiskSnapshotResult {
  public OperationList $operations;
}

class CreateDomainEntryRequest {
  public DomainEntry $domain_entry;
  public DomainName $domain_name;
}

class CreateDomainEntryResult {
  public Operation $operation;
}

class CreateDomainRequest {
  public DomainName $domain_name;
  public TagList $tags;
}

class CreateDomainResult {
  public Operation $operation;
}

class CreateInstanceSnapshotRequest {
  public ResourceName $instance_name;
  public ResourceName $instance_snapshot_name;
  public TagList $tags;
}

class CreateInstanceSnapshotResult {
  public OperationList $operations;
}

class CreateInstancesFromSnapshotRequest {
  public AddOnRequestList $add_ons;
  public AttachedDiskMap $attached_disk_mapping;
  public string $availability_zone;
  public NonEmptyString $bundle_id;
  public StringList $instance_names;
  public ResourceName $instance_snapshot_name;
  public ResourceName $key_pair_name;
  public string $restore_date;
  public string $source_instance_name;
  public TagList $tags;
  public boolean $use_latest_restorable_auto_snapshot;
  public string $user_data;
}

class CreateInstancesFromSnapshotResult {
  public OperationList $operations;
}

class CreateInstancesRequest {
  public AddOnRequestList $add_ons;
  public string $availability_zone;
  public NonEmptyString $blueprint_id;
  public NonEmptyString $bundle_id;
  public ResourceName $custom_image_name;
  public StringList $instance_names;
  public ResourceName $key_pair_name;
  public TagList $tags;
  public string $user_data;
}

class CreateInstancesResult {
  public OperationList $operations;
}

class CreateKeyPairRequest {
  public ResourceName $key_pair_name;
  public TagList $tags;
}

class CreateKeyPairResult {
  public KeyPair $key_pair;
  public Operation $operation;
  public Base64 $private_key_base_64;
  public Base64 $public_key_base_64;
}

class CreateLoadBalancerRequest {
  public DomainNameList $certificate_alternative_names;
  public DomainName $certificate_domain_name;
  public ResourceName $certificate_name;
  public string $health_check_path;
  public Port $instance_port;
  public ResourceName $load_balancer_name;
  public TagList $tags;
}

class CreateLoadBalancerResult {
  public OperationList $operations;
}

class CreateLoadBalancerTlsCertificateRequest {
  public DomainNameList $certificate_alternative_names;
  public DomainName $certificate_domain_name;
  public ResourceName $certificate_name;
  public ResourceName $load_balancer_name;
  public TagList $tags;
}

class CreateLoadBalancerTlsCertificateResult {
  public OperationList $operations;
}

class CreateRelationalDatabaseFromSnapshotRequest {
  public string $availability_zone;
  public boolean $publicly_accessible;
  public string $relational_database_bundle_id;
  public ResourceName $relational_database_name;
  public ResourceName $relational_database_snapshot_name;
  public IsoDate $restore_time;
  public ResourceName $source_relational_database_name;
  public TagList $tags;
  public boolean $use_latest_restorable_time;
}

class CreateRelationalDatabaseFromSnapshotResult {
  public OperationList $operations;
}

class CreateRelationalDatabaseRequest {
  public string $availability_zone;
  public string $master_database_name;
  public SensitiveString $master_user_password;
  public string $master_username;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public boolean $publicly_accessible;
  public string $relational_database_blueprint_id;
  public string $relational_database_bundle_id;
  public ResourceName $relational_database_name;
  public TagList $tags;
}

class CreateRelationalDatabaseResult {
  public OperationList $operations;
}

class CreateRelationalDatabaseSnapshotRequest {
  public ResourceName $relational_database_name;
  public ResourceName $relational_database_snapshot_name;
  public TagList $tags;
}

class CreateRelationalDatabaseSnapshotResult {
  public OperationList $operations;
}

class DeleteAlarmRequest {
  public ResourceName $alarm_name;
}

class DeleteAlarmResult {
  public OperationList $operations;
}

class DeleteAutoSnapshotRequest {
  public AutoSnapshotDate $date;
  public ResourceName $resource_name;
}

class DeleteAutoSnapshotResult {
  public OperationList $operations;
}

class DeleteContactMethodRequest {
  public ContactProtocol $protocol;
}

class DeleteContactMethodResult {
  public OperationList $operations;
}

class DeleteDiskRequest {
  public ResourceName $disk_name;
  public boolean $force_delete_add_ons;
}

class DeleteDiskResult {
  public OperationList $operations;
}

class DeleteDiskSnapshotRequest {
  public ResourceName $disk_snapshot_name;
}

class DeleteDiskSnapshotResult {
  public OperationList $operations;
}

class DeleteDomainEntryRequest {
  public DomainEntry $domain_entry;
  public DomainName $domain_name;
}

class DeleteDomainEntryResult {
  public Operation $operation;
}

class DeleteDomainRequest {
  public DomainName $domain_name;
}

class DeleteDomainResult {
  public Operation $operation;
}

class DeleteInstanceRequest {
  public boolean $force_delete_add_ons;
  public ResourceName $instance_name;
}

class DeleteInstanceResult {
  public OperationList $operations;
}

class DeleteInstanceSnapshotRequest {
  public ResourceName $instance_snapshot_name;
}

class DeleteInstanceSnapshotResult {
  public OperationList $operations;
}

class DeleteKeyPairRequest {
  public ResourceName $key_pair_name;
}

class DeleteKeyPairResult {
  public Operation $operation;
}

class DeleteKnownHostKeysRequest {
  public ResourceName $instance_name;
}

class DeleteKnownHostKeysResult {
  public OperationList $operations;
}

class DeleteLoadBalancerRequest {
  public ResourceName $load_balancer_name;
}

class DeleteLoadBalancerResult {
  public OperationList $operations;
}

class DeleteLoadBalancerTlsCertificateRequest {
  public ResourceName $certificate_name;
  public boolean $force;
  public ResourceName $load_balancer_name;
}

class DeleteLoadBalancerTlsCertificateResult {
  public OperationList $operations;
}

class DeleteRelationalDatabaseRequest {
  public ResourceName $final_relational_database_snapshot_name;
  public ResourceName $relational_database_name;
  public boolean $skip_final_snapshot;
}

class DeleteRelationalDatabaseResult {
  public OperationList $operations;
}

class DeleteRelationalDatabaseSnapshotRequest {
  public ResourceName $relational_database_snapshot_name;
}

class DeleteRelationalDatabaseSnapshotResult {
  public OperationList $operations;
}

class DestinationInfo {
  public NonEmptyString $id;
  public NonEmptyString $service;
}

class DetachDiskRequest {
  public ResourceName $disk_name;
}

class DetachDiskResult {
  public OperationList $operations;
}

class DetachInstancesFromLoadBalancerRequest {
  public ResourceNameList $instance_names;
  public ResourceName $load_balancer_name;
}

class DetachInstancesFromLoadBalancerResult {
  public OperationList $operations;
}

class DetachStaticIpRequest {
  public ResourceName $static_ip_name;
}

class DetachStaticIpResult {
  public OperationList $operations;
}

class DisableAddOnRequest {
  public AddOnType $add_on_type;
  public ResourceName $resource_name;
}

class DisableAddOnResult {
  public OperationList $operations;
}

class Disk {
  public AddOnList $add_ons;
  public NonEmptyString $arn;
  public ResourceName $attached_to;
  public string $attachment_state;
  public IsoDate $created_at;
  public integer $gb_in_use;
  public integer $iops;
  public boolean $is_attached;
  public boolean $is_system_disk;
  public ResourceLocation $location;
  public ResourceName $name;
  public string $path;
  public ResourceType $resource_type;
  public integer $size_in_gb;
  public DiskState $state;
  public string $support_code;
  public TagList $tags;
}

class DiskInfo {
  public boolean $is_system_disk;
  public string $name;
  public NonEmptyString $path;
  public integer $size_in_gb;
}

class DiskInfoList {
}

class DiskList {
}

class DiskMap {
  public ResourceName $new_disk_name;
  public NonEmptyString $original_disk_path;
}

class DiskMapList {
}

class DiskSnapshot {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public NonEmptyString $from_disk_arn;
  public ResourceName $from_disk_name;
  public NonEmptyString $from_instance_arn;
  public ResourceName $from_instance_name;
  public boolean $is_from_auto_snapshot;
  public ResourceLocation $location;
  public ResourceName $name;
  public string $progress;
  public ResourceType $resource_type;
  public integer $size_in_gb;
  public DiskSnapshotState $state;
  public string $support_code;
  public TagList $tags;
}

class DiskSnapshotInfo {
  public integer $size_in_gb;
}

class DiskSnapshotList {
}

class DiskSnapshotState {
}

class DiskState {
}

class Domain {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public DomainEntryList $domain_entries;
  public ResourceLocation $location;
  public ResourceName $name;
  public ResourceType $resource_type;
  public string $support_code;
  public TagList $tags;
}

class DomainEntry {
  public NonEmptyString $id;
  public boolean $is_alias;
  public DomainName $name;
  public DomainEntryOptions $options;
  public string $target;
  public DomainEntryType $type;
}

class DomainEntryList {
}

class DomainEntryOptions {
}

class DomainEntryOptionsKeys {
}

class DomainEntryType {
}

class DomainList {
}

class DomainName {
}

class DomainNameList {
}

class DownloadDefaultKeyPairRequest {
}

class DownloadDefaultKeyPairResult {
  public Base64 $private_key_base_64;
  public Base64 $public_key_base_64;
}

class EnableAddOnRequest {
  public AddOnRequest $add_on_request;
  public ResourceName $resource_name;
}

class EnableAddOnResult {
  public OperationList $operations;
}

class ExportSnapshotRecord {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public DestinationInfo $destination_info;
  public ResourceLocation $location;
  public ResourceName $name;
  public ResourceType $resource_type;
  public ExportSnapshotRecordSourceInfo $source_info;
  public RecordState $state;
}

class ExportSnapshotRecordList {
}

class ExportSnapshotRecordSourceInfo {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public DiskSnapshotInfo $disk_snapshot_info;
  public NonEmptyString $from_resource_arn;
  public NonEmptyString $from_resource_name;
  public InstanceSnapshotInfo $instance_snapshot_info;
  public NonEmptyString $name;
  public ExportSnapshotRecordSourceType $resource_type;
}

class ExportSnapshotRecordSourceType {
}

class ExportSnapshotRequest {
  public ResourceName $source_snapshot_name;
}

class ExportSnapshotResult {
  public OperationList $operations;
}

class GetActiveNamesRequest {
  public string $page_token;
}

class GetActiveNamesResult {
  public StringList $active_names;
  public string $next_page_token;
}

class GetAlarmsRequest {
  public ResourceName $alarm_name;
  public ResourceName $monitored_resource_name;
  public string $page_token;
}

class GetAlarmsResult {
  public AlarmsList $alarms;
  public string $next_page_token;
}

class GetAutoSnapshotsRequest {
  public ResourceName $resource_name;
}

class GetAutoSnapshotsResult {
  public AutoSnapshotDetailsList $auto_snapshots;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
}

class GetBlueprintsRequest {
  public boolean $include_inactive;
  public string $page_token;
}

class GetBlueprintsResult {
  public BlueprintList $blueprints;
  public string $next_page_token;
}

class GetBundlesRequest {
  public boolean $include_inactive;
  public string $page_token;
}

class GetBundlesResult {
  public BundleList $bundles;
  public string $next_page_token;
}

class GetCloudFormationStackRecordsRequest {
  public string $page_token;
}

class GetCloudFormationStackRecordsResult {
  public CloudFormationStackRecordList $cloud_formation_stack_records;
  public string $next_page_token;
}

class GetContactMethodsRequest {
  public ContactProtocolsList $protocols;
}

class GetContactMethodsResult {
  public ContactMethodsList $contact_methods;
}

class GetDiskRequest {
  public ResourceName $disk_name;
}

class GetDiskResult {
  public Disk $disk;
}

class GetDiskSnapshotRequest {
  public ResourceName $disk_snapshot_name;
}

class GetDiskSnapshotResult {
  public DiskSnapshot $disk_snapshot;
}

class GetDiskSnapshotsRequest {
  public string $page_token;
}

class GetDiskSnapshotsResult {
  public DiskSnapshotList $disk_snapshots;
  public string $next_page_token;
}

class GetDisksRequest {
  public string $page_token;
}

class GetDisksResult {
  public DiskList $disks;
  public string $next_page_token;
}

class GetDomainRequest {
  public DomainName $domain_name;
}

class GetDomainResult {
  public Domain $domain;
}

class GetDomainsRequest {
  public string $page_token;
}

class GetDomainsResult {
  public DomainList $domains;
  public string $next_page_token;
}

class GetExportSnapshotRecordsRequest {
  public string $page_token;
}

class GetExportSnapshotRecordsResult {
  public ExportSnapshotRecordList $export_snapshot_records;
  public string $next_page_token;
}

class GetInstanceAccessDetailsRequest {
  public ResourceName $instance_name;
  public InstanceAccessProtocol $protocol;
}

class GetInstanceAccessDetailsResult {
  public InstanceAccessDetails $access_details;
}

class GetInstanceMetricDataRequest {
  public timestamp $end_time;
  public ResourceName $instance_name;
  public InstanceMetricName $metric_name;
  public MetricPeriod $period;
  public timestamp $start_time;
  public MetricStatisticList $statistics;
  public MetricUnit $unit;
}

class GetInstanceMetricDataResult {
  public MetricDatapointList $metric_data;
  public InstanceMetricName $metric_name;
}

class GetInstancePortStatesRequest {
  public ResourceName $instance_name;
}

class GetInstancePortStatesResult {
  public InstancePortStateList $port_states;
}

class GetInstanceRequest {
  public ResourceName $instance_name;
}

class GetInstanceResult {
  public Instance $instance;
}

class GetInstanceSnapshotRequest {
  public ResourceName $instance_snapshot_name;
}

class GetInstanceSnapshotResult {
  public InstanceSnapshot $instance_snapshot;
}

class GetInstanceSnapshotsRequest {
  public string $page_token;
}

class GetInstanceSnapshotsResult {
  public InstanceSnapshotList $instance_snapshots;
  public string $next_page_token;
}

class GetInstanceStateRequest {
  public ResourceName $instance_name;
}

class GetInstanceStateResult {
  public InstanceState $state;
}

class GetInstancesRequest {
  public string $page_token;
}

class GetInstancesResult {
  public InstanceList $instances;
  public string $next_page_token;
}

class GetKeyPairRequest {
  public ResourceName $key_pair_name;
}

class GetKeyPairResult {
  public KeyPair $key_pair;
}

class GetKeyPairsRequest {
  public string $page_token;
}

class GetKeyPairsResult {
  public KeyPairList $key_pairs;
  public string $next_page_token;
}

class GetLoadBalancerMetricDataRequest {
  public timestamp $end_time;
  public ResourceName $load_balancer_name;
  public LoadBalancerMetricName $metric_name;
  public MetricPeriod $period;
  public timestamp $start_time;
  public MetricStatisticList $statistics;
  public MetricUnit $unit;
}

class GetLoadBalancerMetricDataResult {
  public MetricDatapointList $metric_data;
  public LoadBalancerMetricName $metric_name;
}

class GetLoadBalancerRequest {
  public ResourceName $load_balancer_name;
}

class GetLoadBalancerResult {
  public LoadBalancer $load_balancer;
}

class GetLoadBalancerTlsCertificatesRequest {
  public ResourceName $load_balancer_name;
}

class GetLoadBalancerTlsCertificatesResult {
  public LoadBalancerTlsCertificateList $tls_certificates;
}

class GetLoadBalancersRequest {
  public string $page_token;
}

class GetLoadBalancersResult {
  public LoadBalancerList $load_balancers;
  public string $next_page_token;
}

class GetOperationRequest {
  public NonEmptyString $operation_id;
}

class GetOperationResult {
  public Operation $operation;
}

class GetOperationsForResourceRequest {
  public string $page_token;
  public ResourceName $resource_name;
}

class GetOperationsForResourceResult {
  public string $next_page_count;
  public string $next_page_token;
  public OperationList $operations;
}

class GetOperationsRequest {
  public string $page_token;
}

class GetOperationsResult {
  public string $next_page_token;
  public OperationList $operations;
}

class GetRegionsRequest {
  public boolean $include_availability_zones;
  public boolean $include_relational_database_availability_zones;
}

class GetRegionsResult {
  public RegionList $regions;
}

class GetRelationalDatabaseBlueprintsRequest {
  public string $page_token;
}

class GetRelationalDatabaseBlueprintsResult {
  public RelationalDatabaseBlueprintList $blueprints;
  public string $next_page_token;
}

class GetRelationalDatabaseBundlesRequest {
  public string $page_token;
}

class GetRelationalDatabaseBundlesResult {
  public RelationalDatabaseBundleList $bundles;
  public string $next_page_token;
}

class GetRelationalDatabaseEventsRequest {
  public integer $duration_in_minutes;
  public string $page_token;
  public ResourceName $relational_database_name;
}

class GetRelationalDatabaseEventsResult {
  public string $next_page_token;
  public RelationalDatabaseEventList $relational_database_events;
}

class GetRelationalDatabaseLogEventsRequest {
  public IsoDate $end_time;
  public string $log_stream_name;
  public string $page_token;
  public ResourceName $relational_database_name;
  public boolean $start_from_head;
  public IsoDate $start_time;
}

class GetRelationalDatabaseLogEventsResult {
  public string $next_backward_token;
  public string $next_forward_token;
  public LogEventList $resource_log_events;
}

class GetRelationalDatabaseLogStreamsRequest {
  public ResourceName $relational_database_name;
}

class GetRelationalDatabaseLogStreamsResult {
  public StringList $log_streams;
}

class GetRelationalDatabaseMasterUserPasswordRequest {
  public RelationalDatabasePasswordVersion $password_version;
  public ResourceName $relational_database_name;
}

class GetRelationalDatabaseMasterUserPasswordResult {
  public IsoDate $created_at;
  public SensitiveString $master_user_password;
}

class GetRelationalDatabaseMetricDataRequest {
  public IsoDate $end_time;
  public RelationalDatabaseMetricName $metric_name;
  public MetricPeriod $period;
  public ResourceName $relational_database_name;
  public IsoDate $start_time;
  public MetricStatisticList $statistics;
  public MetricUnit $unit;
}

class GetRelationalDatabaseMetricDataResult {
  public MetricDatapointList $metric_data;
  public RelationalDatabaseMetricName $metric_name;
}

class GetRelationalDatabaseParametersRequest {
  public string $page_token;
  public ResourceName $relational_database_name;
}

class GetRelationalDatabaseParametersResult {
  public string $next_page_token;
  public RelationalDatabaseParameterList $parameters;
}

class GetRelationalDatabaseRequest {
  public ResourceName $relational_database_name;
}

class GetRelationalDatabaseResult {
  public RelationalDatabase $relational_database;
}

class GetRelationalDatabaseSnapshotRequest {
  public ResourceName $relational_database_snapshot_name;
}

class GetRelationalDatabaseSnapshotResult {
  public RelationalDatabaseSnapshot $relational_database_snapshot;
}

class GetRelationalDatabaseSnapshotsRequest {
  public string $page_token;
}

class GetRelationalDatabaseSnapshotsResult {
  public string $next_page_token;
  public RelationalDatabaseSnapshotList $relational_database_snapshots;
}

class GetRelationalDatabasesRequest {
  public string $page_token;
}

class GetRelationalDatabasesResult {
  public string $next_page_token;
  public RelationalDatabaseList $relational_databases;
}

class GetStaticIpRequest {
  public ResourceName $static_ip_name;
}

class GetStaticIpResult {
  public StaticIp $static_ip;
}

class GetStaticIpsRequest {
  public string $page_token;
}

class GetStaticIpsResult {
  public string $next_page_token;
  public StaticIpList $static_ips;
}

class HostKeyAttributes {
  public string $algorithm;
  public string $fingerprint_sha_1;
  public string $fingerprint_sha_256;
  public IsoDate $not_valid_after;
  public IsoDate $not_valid_before;
  public string $public_key;
  public IsoDate $witnessed_at;
}

class HostKeysList {
}

class ImportKeyPairRequest {
  public ResourceName $key_pair_name;
  public Base64 $public_key_base_64;
}

class ImportKeyPairResult {
  public Operation $operation;
}

class Instance {
  public AddOnList $add_ons;
  public NonEmptyString $arn;
  public NonEmptyString $blueprint_id;
  public NonEmptyString $blueprint_name;
  public NonEmptyString $bundle_id;
  public IsoDate $created_at;
  public InstanceHardware $hardware;
  public IpV6Address $ipv_6_address;
  public boolean $is_static_ip;
  public ResourceLocation $location;
  public ResourceName $name;
  public InstanceNetworking $networking;
  public IpAddress $private_ip_address;
  public IpAddress $public_ip_address;
  public ResourceType $resource_type;
  public ResourceName $ssh_key_name;
  public InstanceState $state;
  public string $support_code;
  public TagList $tags;
  public NonEmptyString $username;
}

class InstanceAccessDetails {
  public string $cert_key;
  public IsoDate $expires_at;
  public HostKeysList $host_keys;
  public ResourceName $instance_name;
  public IpAddress $ip_address;
  public string $password;
  public PasswordData $password_data;
  public string $private_key;
  public InstanceAccessProtocol $protocol;
  public string $username;
}

class InstanceAccessProtocol {
}

class InstanceEntry {
  public string $availability_zone;
  public NonEmptyString $instance_type;
  public PortInfoSourceType $port_info_source;
  public ResourceName $source_name;
  public string $user_data;
}

class InstanceEntryList {
}

class InstanceHardware {
  public integer $cpu_count;
  public DiskList $disks;
  public float $ram_size_in_gb;
}

class InstanceHealthReason {
}

class InstanceHealthState {
}

class InstanceHealthSummary {
  public InstanceHealthState $instance_health;
  public InstanceHealthReason $instance_health_reason;
  public ResourceName $instance_name;
}

class InstanceHealthSummaryList {
}

class InstanceList {
}

class InstanceMetricName {
}

class InstanceNetworking {
  public MonthlyTransfer $monthly_transfer;
  public InstancePortInfoList $ports;
}

class InstancePlatform {
}

class InstancePlatformList {
}

class InstancePortInfo {
  public AccessDirection $access_direction;
  public string $access_from;
  public PortAccessType $access_type;
  public string $common_name;
  public Port $from_port;
  public NetworkProtocol $protocol;
  public Port $to_port;
}

class InstancePortInfoList {
}

class InstancePortState {
  public Port $from_port;
  public NetworkProtocol $protocol;
  public PortState $state;
  public Port $to_port;
}

class InstancePortStateList {
}

class InstanceSnapshot {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public DiskList $from_attached_disks;
  public string $from_blueprint_id;
  public string $from_bundle_id;
  public NonEmptyString $from_instance_arn;
  public ResourceName $from_instance_name;
  public boolean $is_from_auto_snapshot;
  public ResourceLocation $location;
  public ResourceName $name;
  public string $progress;
  public ResourceType $resource_type;
  public integer $size_in_gb;
  public InstanceSnapshotState $state;
  public string $support_code;
  public TagList $tags;
}

class InstanceSnapshotInfo {
  public NonEmptyString $from_blueprint_id;
  public NonEmptyString $from_bundle_id;
  public DiskInfoList $from_disk_info;
}

class InstanceSnapshotList {
}

class InstanceSnapshotState {
}

class InstanceState {
  public integer $code;
  public string $name;
}

class InvalidInputException {
  public string $code;
  public string $docs;
  public string $message;
  public string $tip;
}

class IpAddress {
}

class IpV6Address {
}

class IsVpcPeeredRequest {
}

class IsVpcPeeredResult {
  public boolean $is_peered;
}

class IsoDate {
}

class KeyPair {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public Base64 $fingerprint;
  public ResourceLocation $location;
  public ResourceName $name;
  public ResourceType $resource_type;
  public string $support_code;
  public TagList $tags;
}

class KeyPairList {
}

class LoadBalancer {
  public NonEmptyString $arn;
  public LoadBalancerConfigurationOptions $configuration_options;
  public IsoDate $created_at;
  public NonEmptyString $dns_name;
  public NonEmptyString $health_check_path;
  public InstanceHealthSummaryList $instance_health_summary;
  public integer $instance_port;
  public ResourceLocation $location;
  public ResourceName $name;
  public LoadBalancerProtocol $protocol;
  public PortList $public_ports;
  public ResourceType $resource_type;
  public LoadBalancerState $state;
  public string $support_code;
  public TagList $tags;
  public LoadBalancerTlsCertificateSummaryList $tls_certificate_summaries;
}

class LoadBalancerAttributeName {
}

class LoadBalancerConfigurationOptions {
}

class LoadBalancerList {
}

class LoadBalancerMetricName {
}

class LoadBalancerProtocol {
}

class LoadBalancerState {
}

class LoadBalancerTlsCertificate {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public DomainName $domain_name;
  public LoadBalancerTlsCertificateDomainValidationRecordList $domain_validation_records;
  public LoadBalancerTlsCertificateFailureReason $failure_reason;
  public boolean $is_attached;
  public IsoDate $issued_at;
  public NonEmptyString $issuer;
  public NonEmptyString $key_algorithm;
  public ResourceName $load_balancer_name;
  public ResourceLocation $location;
  public ResourceName $name;
  public IsoDate $not_after;
  public IsoDate $not_before;
  public LoadBalancerTlsCertificateRenewalSummary $renewal_summary;
  public ResourceType $resource_type;
  public LoadBalancerTlsCertificateRevocationReason $revocation_reason;
  public IsoDate $revoked_at;
  public NonEmptyString $serial;
  public NonEmptyString $signature_algorithm;
  public LoadBalancerTlsCertificateStatus $status;
  public NonEmptyString $subject;
  public StringList $subject_alternative_names;
  public string $support_code;
  public TagList $tags;
}

class LoadBalancerTlsCertificateDomainStatus {
}

class LoadBalancerTlsCertificateDomainValidationOption {
  public DomainName $domain_name;
  public LoadBalancerTlsCertificateDomainStatus $validation_status;
}

class LoadBalancerTlsCertificateDomainValidationOptionList {
}

class LoadBalancerTlsCertificateDomainValidationRecord {
  public DomainName $domain_name;
  public NonEmptyString $name;
  public NonEmptyString $type;
  public LoadBalancerTlsCertificateDomainStatus $validation_status;
  public NonEmptyString $value;
}

class LoadBalancerTlsCertificateDomainValidationRecordList {
}

class LoadBalancerTlsCertificateFailureReason {
}

class LoadBalancerTlsCertificateList {
}

class LoadBalancerTlsCertificateRenewalStatus {
}

class LoadBalancerTlsCertificateRenewalSummary {
  public LoadBalancerTlsCertificateDomainValidationOptionList $domain_validation_options;
  public LoadBalancerTlsCertificateRenewalStatus $renewal_status;
}

class LoadBalancerTlsCertificateRevocationReason {
}

class LoadBalancerTlsCertificateStatus {
}

class LoadBalancerTlsCertificateSummary {
  public boolean $is_attached;
  public ResourceName $name;
}

class LoadBalancerTlsCertificateSummaryList {
}

class LogEvent {
  public IsoDate $created_at;
  public string $message;
}

class LogEventList {
}

class MetricDatapoint {
  public double $average;
  public double $maximum;
  public double $minimum;
  public double $sample_count;
  public double $sum;
  public timestamp $timestamp;
  public MetricUnit $unit;
}

class MetricDatapointList {
}

class MetricName {
}

class MetricPeriod {
}

class MetricStatistic {
}

class MetricStatisticList {
}

class MetricUnit {
}

class MonitoredResourceInfo {
  public ResourceArn $arn;
  public ResourceName $name;
  public ResourceType $resource_type;
}

class MonthlyTransfer {
  public integer $gb_per_month_allocated;
}

class NetworkProtocol {
}

class NonEmptyString {
}

class NotFoundException {
  public string $code;
  public string $docs;
  public string $message;
  public string $tip;
}

class NotificationTriggerList {
}

class OpenInstancePublicPortsRequest {
  public ResourceName $instance_name;
  public PortInfo $port_info;
}

class OpenInstancePublicPortsResult {
  public Operation $operation;
}

class Operation {
  public IsoDate $created_at;
  public string $error_code;
  public string $error_details;
  public NonEmptyString $id;
  public boolean $is_terminal;
  public ResourceLocation $location;
  public string $operation_details;
  public OperationType $operation_type;
  public ResourceName $resource_name;
  public ResourceType $resource_type;
  public OperationStatus $status;
  public IsoDate $status_changed_at;
}

class OperationFailureException {
  public string $code;
  public string $docs;
  public string $message;
  public string $tip;
}

class OperationList {
}

class OperationStatus {
}

class OperationType {
}

class PasswordData {
  public string $ciphertext;
  public ResourceName $key_pair_name;
}

class PeerVpcRequest {
}

class PeerVpcResult {
  public Operation $operation;
}

class PendingMaintenanceAction {
  public NonEmptyString $action;
  public IsoDate $current_apply_date;
  public NonEmptyString $description;
}

class PendingMaintenanceActionList {
}

class PendingModifiedRelationalDatabaseValues {
  public boolean $backup_retention_enabled;
  public string $engine_version;
  public string $master_user_password;
}

class Port {
}

class PortAccessType {
}

class PortInfo {
  public Port $from_port;
  public NetworkProtocol $protocol;
  public Port $to_port;
}

class PortInfoList {
}

class PortInfoSourceType {
}

class PortList {
}

class PortState {
}

class PutAlarmRequest {
  public ResourceName $alarm_name;
  public ComparisonOperator $comparison_operator;
  public ContactProtocolsList $contact_protocols;
  public integer $datapoints_to_alarm;
  public integer $evaluation_periods;
  public MetricName $metric_name;
  public ResourceName $monitored_resource_name;
  public boolean $notification_enabled;
  public NotificationTriggerList $notification_triggers;
  public double $threshold;
  public TreatMissingData $treat_missing_data;
}

class PutAlarmResult {
  public OperationList $operations;
}

class PutInstancePublicPortsRequest {
  public ResourceName $instance_name;
  public PortInfoList $port_infos;
}

class PutInstancePublicPortsResult {
  public Operation $operation;
}

class RebootInstanceRequest {
  public ResourceName $instance_name;
}

class RebootInstanceResult {
  public OperationList $operations;
}

class RebootRelationalDatabaseRequest {
  public ResourceName $relational_database_name;
}

class RebootRelationalDatabaseResult {
  public OperationList $operations;
}

class RecordState {
}

class Region {
  public AvailabilityZoneList $availability_zones;
  public string $continent_code;
  public string $description;
  public string $display_name;
  public RegionName $name;
  public AvailabilityZoneList $relational_database_availability_zones;
}

class RegionList {
}

class RegionName {
}

class RelationalDatabase {
  public NonEmptyString $arn;
  public boolean $backup_retention_enabled;
  public string $ca_certificate_identifier;
  public IsoDate $created_at;
  public NonEmptyString $engine;
  public NonEmptyString $engine_version;
  public RelationalDatabaseHardware $hardware;
  public IsoDate $latest_restorable_time;
  public ResourceLocation $location;
  public string $master_database_name;
  public RelationalDatabaseEndpoint $master_endpoint;
  public NonEmptyString $master_username;
  public ResourceName $name;
  public NonEmptyString $parameter_apply_status;
  public PendingMaintenanceActionList $pending_maintenance_actions;
  public PendingModifiedRelationalDatabaseValues $pending_modified_values;
  public NonEmptyString $preferred_backup_window;
  public NonEmptyString $preferred_maintenance_window;
  public boolean $publicly_accessible;
  public NonEmptyString $relational_database_blueprint_id;
  public NonEmptyString $relational_database_bundle_id;
  public ResourceType $resource_type;
  public string $secondary_availability_zone;
  public NonEmptyString $state;
  public string $support_code;
  public TagList $tags;
}

class RelationalDatabaseBlueprint {
  public string $blueprint_id;
  public RelationalDatabaseEngine $engine;
  public string $engine_description;
  public string $engine_version;
  public string $engine_version_description;
  public boolean $is_engine_default;
}

class RelationalDatabaseBlueprintList {
}

class RelationalDatabaseBundle {
  public string $bundle_id;
  public integer $cpu_count;
  public integer $disk_size_in_gb;
  public boolean $is_active;
  public boolean $is_encrypted;
  public string $name;
  public float $price;
  public float $ram_size_in_gb;
  public integer $transfer_per_month_in_gb;
}

class RelationalDatabaseBundleList {
}

class RelationalDatabaseEndpoint {
  public NonEmptyString $address;
  public integer $port;
}

class RelationalDatabaseEngine {
}

class RelationalDatabaseEvent {
  public IsoDate $created_at;
  public StringList $event_categories;
  public string $message;
  public ResourceName $resource;
}

class RelationalDatabaseEventList {
}

class RelationalDatabaseHardware {
  public integer $cpu_count;
  public integer $disk_size_in_gb;
  public float $ram_size_in_gb;
}

class RelationalDatabaseList {
}

class RelationalDatabaseMetricName {
}

class RelationalDatabaseParameter {
  public string $allowed_values;
  public string $apply_method;
  public string $apply_type;
  public string $data_type;
  public string $description;
  public boolean $is_modifiable;
  public string $parameter_name;
  public string $parameter_value;
}

class RelationalDatabaseParameterList {
}

class RelationalDatabasePasswordVersion {
}

class RelationalDatabaseSnapshot {
  public NonEmptyString $arn;
  public IsoDate $created_at;
  public NonEmptyString $engine;
  public NonEmptyString $engine_version;
  public NonEmptyString $from_relational_database_arn;
  public string $from_relational_database_blueprint_id;
  public string $from_relational_database_bundle_id;
  public NonEmptyString $from_relational_database_name;
  public ResourceLocation $location;
  public ResourceName $name;
  public ResourceType $resource_type;
  public integer $size_in_gb;
  public NonEmptyString $state;
  public string $support_code;
  public TagList $tags;
}

class RelationalDatabaseSnapshotList {
}

class ReleaseStaticIpRequest {
  public ResourceName $static_ip_name;
}

class ReleaseStaticIpResult {
  public OperationList $operations;
}

class ResourceArn {
}

class ResourceLocation {
  public string $availability_zone;
  public RegionName $region_name;
}

class ResourceName {
}

class ResourceNameList {
}

class ResourceType {
}

class SendContactMethodVerificationRequest {
  public ContactMethodVerificationProtocol $protocol;
}

class SendContactMethodVerificationResult {
  public OperationList $operations;
}

class SensitiveString {
}

class ServiceException {
  public string $code;
  public string $docs;
  public string $message;
  public string $tip;
}

class StartInstanceRequest {
  public ResourceName $instance_name;
}

class StartInstanceResult {
  public OperationList $operations;
}

class StartRelationalDatabaseRequest {
  public ResourceName $relational_database_name;
}

class StartRelationalDatabaseResult {
  public OperationList $operations;
}

class StaticIp {
  public NonEmptyString $arn;
  public ResourceName $attached_to;
  public IsoDate $created_at;
  public IpAddress $ip_address;
  public boolean $is_attached;
  public ResourceLocation $location;
  public ResourceName $name;
  public ResourceType $resource_type;
  public string $support_code;
}

class StaticIpList {
}

class StopInstanceRequest {
  public boolean $force;
  public ResourceName $instance_name;
}

class StopInstanceResult {
  public OperationList $operations;
}

class StopRelationalDatabaseRequest {
  public ResourceName $relational_database_name;
  public ResourceName $relational_database_snapshot_name;
}

class StopRelationalDatabaseResult {
  public OperationList $operations;
}

class StringList {
}

class StringMax256 {
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
  public ResourceName $resource_name;
  public TagList $tags;
}

class TagResourceResult {
  public OperationList $operations;
}

class TagValue {
}

class TestAlarmRequest {
  public ResourceName $alarm_name;
  public AlarmState $state;
}

class TestAlarmResult {
  public OperationList $operations;
}

class TimeOfDay {
}

class TreatMissingData {
}

class UnauthenticatedException {
  public string $code;
  public string $docs;
  public string $message;
  public string $tip;
}

class UnpeerVpcRequest {
}

class UnpeerVpcResult {
  public Operation $operation;
}

class UntagResourceRequest {
  public ResourceArn $resource_arn;
  public ResourceName $resource_name;
  public TagKeyList $tag_keys;
}

class UntagResourceResult {
  public OperationList $operations;
}

class UpdateDomainEntryRequest {
  public DomainEntry $domain_entry;
  public DomainName $domain_name;
}

class UpdateDomainEntryResult {
  public OperationList $operations;
}

class UpdateLoadBalancerAttributeRequest {
  public LoadBalancerAttributeName $attribute_name;
  public StringMax256 $attribute_value;
  public ResourceName $load_balancer_name;
}

class UpdateLoadBalancerAttributeResult {
  public OperationList $operations;
}

class UpdateRelationalDatabaseParametersRequest {
  public RelationalDatabaseParameterList $parameters;
  public ResourceName $relational_database_name;
}

class UpdateRelationalDatabaseParametersResult {
  public OperationList $operations;
}

class UpdateRelationalDatabaseRequest {
  public boolean $apply_immediately;
  public string $ca_certificate_identifier;
  public boolean $disable_backup_retention;
  public boolean $enable_backup_retention;
  public SensitiveString $master_user_password;
  public string $preferred_backup_window;
  public string $preferred_maintenance_window;
  public boolean $publicly_accessible;
  public ResourceName $relational_database_name;
  public boolean $rotate_master_user_password;
}

class UpdateRelationalDatabaseResult {
  public OperationList $operations;
}

class boolean {
}

class double {
}

class float {
}

class integer {
}

class string {
}

class timestamp {
}

