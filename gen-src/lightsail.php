<?hh // strict
namespace slack\aws\lightsail;

interface Lightsail {
  public function AllocateStaticIp(AllocateStaticIpRequest $in): Awaitable<\Errors\Result<AllocateStaticIpResult>>;
  public function AttachDisk(AttachDiskRequest $in): Awaitable<\Errors\Result<AttachDiskResult>>;
  public function AttachInstancesToLoadBalancer(AttachInstancesToLoadBalancerRequest $in): Awaitable<\Errors\Result<AttachInstancesToLoadBalancerResult>>;
  public function AttachLoadBalancerTlsCertificate(AttachLoadBalancerTlsCertificateRequest $in): Awaitable<\Errors\Result<AttachLoadBalancerTlsCertificateResult>>;
  public function AttachStaticIp(AttachStaticIpRequest $in): Awaitable<\Errors\Result<AttachStaticIpResult>>;
  public function CloseInstancePublicPorts(CloseInstancePublicPortsRequest $in): Awaitable<\Errors\Result<CloseInstancePublicPortsResult>>;
  public function CopySnapshot(CopySnapshotRequest $in): Awaitable<\Errors\Result<CopySnapshotResult>>;
  public function CreateCloudFormationStack(CreateCloudFormationStackRequest $in): Awaitable<\Errors\Result<CreateCloudFormationStackResult>>;
  public function CreateContactMethod(CreateContactMethodRequest $in): Awaitable<\Errors\Result<CreateContactMethodResult>>;
  public function CreateDisk(CreateDiskRequest $in): Awaitable<\Errors\Result<CreateDiskResult>>;
  public function CreateDiskFromSnapshot(CreateDiskFromSnapshotRequest $in): Awaitable<\Errors\Result<CreateDiskFromSnapshotResult>>;
  public function CreateDiskSnapshot(CreateDiskSnapshotRequest $in): Awaitable<\Errors\Result<CreateDiskSnapshotResult>>;
  public function CreateDomain(CreateDomainRequest $in): Awaitable<\Errors\Result<CreateDomainResult>>;
  public function CreateDomainEntry(CreateDomainEntryRequest $in): Awaitable<\Errors\Result<CreateDomainEntryResult>>;
  public function CreateInstanceSnapshot(CreateInstanceSnapshotRequest $in): Awaitable<\Errors\Result<CreateInstanceSnapshotResult>>;
  public function CreateInstances(CreateInstancesRequest $in): Awaitable<\Errors\Result<CreateInstancesResult>>;
  public function CreateInstancesFromSnapshot(CreateInstancesFromSnapshotRequest $in): Awaitable<\Errors\Result<CreateInstancesFromSnapshotResult>>;
  public function CreateKeyPair(CreateKeyPairRequest $in): Awaitable<\Errors\Result<CreateKeyPairResult>>;
  public function CreateLoadBalancer(CreateLoadBalancerRequest $in): Awaitable<\Errors\Result<CreateLoadBalancerResult>>;
  public function CreateLoadBalancerTlsCertificate(CreateLoadBalancerTlsCertificateRequest $in): Awaitable<\Errors\Result<CreateLoadBalancerTlsCertificateResult>>;
  public function CreateRelationalDatabase(CreateRelationalDatabaseRequest $in): Awaitable<\Errors\Result<CreateRelationalDatabaseResult>>;
  public function CreateRelationalDatabaseFromSnapshot(CreateRelationalDatabaseFromSnapshotRequest $in): Awaitable<\Errors\Result<CreateRelationalDatabaseFromSnapshotResult>>;
  public function CreateRelationalDatabaseSnapshot(CreateRelationalDatabaseSnapshotRequest $in): Awaitable<\Errors\Result<CreateRelationalDatabaseSnapshotResult>>;
  public function DeleteAlarm(DeleteAlarmRequest $in): Awaitable<\Errors\Result<DeleteAlarmResult>>;
  public function DeleteAutoSnapshot(DeleteAutoSnapshotRequest $in): Awaitable<\Errors\Result<DeleteAutoSnapshotResult>>;
  public function DeleteContactMethod(DeleteContactMethodRequest $in): Awaitable<\Errors\Result<DeleteContactMethodResult>>;
  public function DeleteDisk(DeleteDiskRequest $in): Awaitable<\Errors\Result<DeleteDiskResult>>;
  public function DeleteDiskSnapshot(DeleteDiskSnapshotRequest $in): Awaitable<\Errors\Result<DeleteDiskSnapshotResult>>;
  public function DeleteDomain(DeleteDomainRequest $in): Awaitable<\Errors\Result<DeleteDomainResult>>;
  public function DeleteDomainEntry(DeleteDomainEntryRequest $in): Awaitable<\Errors\Result<DeleteDomainEntryResult>>;
  public function DeleteInstance(DeleteInstanceRequest $in): Awaitable<\Errors\Result<DeleteInstanceResult>>;
  public function DeleteInstanceSnapshot(DeleteInstanceSnapshotRequest $in): Awaitable<\Errors\Result<DeleteInstanceSnapshotResult>>;
  public function DeleteKeyPair(DeleteKeyPairRequest $in): Awaitable<\Errors\Result<DeleteKeyPairResult>>;
  public function DeleteKnownHostKeys(DeleteKnownHostKeysRequest $in): Awaitable<\Errors\Result<DeleteKnownHostKeysResult>>;
  public function DeleteLoadBalancer(DeleteLoadBalancerRequest $in): Awaitable<\Errors\Result<DeleteLoadBalancerResult>>;
  public function DeleteLoadBalancerTlsCertificate(DeleteLoadBalancerTlsCertificateRequest $in): Awaitable<\Errors\Result<DeleteLoadBalancerTlsCertificateResult>>;
  public function DeleteRelationalDatabase(DeleteRelationalDatabaseRequest $in): Awaitable<\Errors\Result<DeleteRelationalDatabaseResult>>;
  public function DeleteRelationalDatabaseSnapshot(DeleteRelationalDatabaseSnapshotRequest $in): Awaitable<\Errors\Result<DeleteRelationalDatabaseSnapshotResult>>;
  public function DetachDisk(DetachDiskRequest $in): Awaitable<\Errors\Result<DetachDiskResult>>;
  public function DetachInstancesFromLoadBalancer(DetachInstancesFromLoadBalancerRequest $in): Awaitable<\Errors\Result<DetachInstancesFromLoadBalancerResult>>;
  public function DetachStaticIp(DetachStaticIpRequest $in): Awaitable<\Errors\Result<DetachStaticIpResult>>;
  public function DisableAddOn(DisableAddOnRequest $in): Awaitable<\Errors\Result<DisableAddOnResult>>;
  public function DownloadDefaultKeyPair(DownloadDefaultKeyPairRequest $in): Awaitable<\Errors\Result<DownloadDefaultKeyPairResult>>;
  public function EnableAddOn(EnableAddOnRequest $in): Awaitable<\Errors\Result<EnableAddOnResult>>;
  public function ExportSnapshot(ExportSnapshotRequest $in): Awaitable<\Errors\Result<ExportSnapshotResult>>;
  public function GetActiveNames(GetActiveNamesRequest $in): Awaitable<\Errors\Result<GetActiveNamesResult>>;
  public function GetAlarms(GetAlarmsRequest $in): Awaitable<\Errors\Result<GetAlarmsResult>>;
  public function GetAutoSnapshots(GetAutoSnapshotsRequest $in): Awaitable<\Errors\Result<GetAutoSnapshotsResult>>;
  public function GetBlueprints(GetBlueprintsRequest $in): Awaitable<\Errors\Result<GetBlueprintsResult>>;
  public function GetBundles(GetBundlesRequest $in): Awaitable<\Errors\Result<GetBundlesResult>>;
  public function GetCloudFormationStackRecords(GetCloudFormationStackRecordsRequest $in): Awaitable<\Errors\Result<GetCloudFormationStackRecordsResult>>;
  public function GetContactMethods(GetContactMethodsRequest $in): Awaitable<\Errors\Result<GetContactMethodsResult>>;
  public function GetDisk(GetDiskRequest $in): Awaitable<\Errors\Result<GetDiskResult>>;
  public function GetDiskSnapshot(GetDiskSnapshotRequest $in): Awaitable<\Errors\Result<GetDiskSnapshotResult>>;
  public function GetDiskSnapshots(GetDiskSnapshotsRequest $in): Awaitable<\Errors\Result<GetDiskSnapshotsResult>>;
  public function GetDisks(GetDisksRequest $in): Awaitable<\Errors\Result<GetDisksResult>>;
  public function GetDomain(GetDomainRequest $in): Awaitable<\Errors\Result<GetDomainResult>>;
  public function GetDomains(GetDomainsRequest $in): Awaitable<\Errors\Result<GetDomainsResult>>;
  public function GetExportSnapshotRecords(GetExportSnapshotRecordsRequest $in): Awaitable<\Errors\Result<GetExportSnapshotRecordsResult>>;
  public function GetInstance(GetInstanceRequest $in): Awaitable<\Errors\Result<GetInstanceResult>>;
  public function GetInstanceAccessDetails(GetInstanceAccessDetailsRequest $in): Awaitable<\Errors\Result<GetInstanceAccessDetailsResult>>;
  public function GetInstanceMetricData(GetInstanceMetricDataRequest $in): Awaitable<\Errors\Result<GetInstanceMetricDataResult>>;
  public function GetInstancePortStates(GetInstancePortStatesRequest $in): Awaitable<\Errors\Result<GetInstancePortStatesResult>>;
  public function GetInstanceSnapshot(GetInstanceSnapshotRequest $in): Awaitable<\Errors\Result<GetInstanceSnapshotResult>>;
  public function GetInstanceSnapshots(GetInstanceSnapshotsRequest $in): Awaitable<\Errors\Result<GetInstanceSnapshotsResult>>;
  public function GetInstanceState(GetInstanceStateRequest $in): Awaitable<\Errors\Result<GetInstanceStateResult>>;
  public function GetInstances(GetInstancesRequest $in): Awaitable<\Errors\Result<GetInstancesResult>>;
  public function GetKeyPair(GetKeyPairRequest $in): Awaitable<\Errors\Result<GetKeyPairResult>>;
  public function GetKeyPairs(GetKeyPairsRequest $in): Awaitable<\Errors\Result<GetKeyPairsResult>>;
  public function GetLoadBalancer(GetLoadBalancerRequest $in): Awaitable<\Errors\Result<GetLoadBalancerResult>>;
  public function GetLoadBalancerMetricData(GetLoadBalancerMetricDataRequest $in): Awaitable<\Errors\Result<GetLoadBalancerMetricDataResult>>;
  public function GetLoadBalancerTlsCertificates(GetLoadBalancerTlsCertificatesRequest $in): Awaitable<\Errors\Result<GetLoadBalancerTlsCertificatesResult>>;
  public function GetLoadBalancers(GetLoadBalancersRequest $in): Awaitable<\Errors\Result<GetLoadBalancersResult>>;
  public function GetOperation(GetOperationRequest $in): Awaitable<\Errors\Result<GetOperationResult>>;
  public function GetOperations(GetOperationsRequest $in): Awaitable<\Errors\Result<GetOperationsResult>>;
  public function GetOperationsForResource(GetOperationsForResourceRequest $in): Awaitable<\Errors\Result<GetOperationsForResourceResult>>;
  public function GetRegions(GetRegionsRequest $in): Awaitable<\Errors\Result<GetRegionsResult>>;
  public function GetRelationalDatabase(GetRelationalDatabaseRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseResult>>;
  public function GetRelationalDatabaseBlueprints(GetRelationalDatabaseBlueprintsRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseBlueprintsResult>>;
  public function GetRelationalDatabaseBundles(GetRelationalDatabaseBundlesRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseBundlesResult>>;
  public function GetRelationalDatabaseEvents(GetRelationalDatabaseEventsRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseEventsResult>>;
  public function GetRelationalDatabaseLogEvents(GetRelationalDatabaseLogEventsRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseLogEventsResult>>;
  public function GetRelationalDatabaseLogStreams(GetRelationalDatabaseLogStreamsRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseLogStreamsResult>>;
  public function GetRelationalDatabaseMasterUserPassword(GetRelationalDatabaseMasterUserPasswordRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseMasterUserPasswordResult>>;
  public function GetRelationalDatabaseMetricData(GetRelationalDatabaseMetricDataRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseMetricDataResult>>;
  public function GetRelationalDatabaseParameters(GetRelationalDatabaseParametersRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseParametersResult>>;
  public function GetRelationalDatabaseSnapshot(GetRelationalDatabaseSnapshotRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseSnapshotResult>>;
  public function GetRelationalDatabaseSnapshots(GetRelationalDatabaseSnapshotsRequest $in): Awaitable<\Errors\Result<GetRelationalDatabaseSnapshotsResult>>;
  public function GetRelationalDatabases(GetRelationalDatabasesRequest $in): Awaitable<\Errors\Result<GetRelationalDatabasesResult>>;
  public function GetStaticIp(GetStaticIpRequest $in): Awaitable<\Errors\Result<GetStaticIpResult>>;
  public function GetStaticIps(GetStaticIpsRequest $in): Awaitable<\Errors\Result<GetStaticIpsResult>>;
  public function ImportKeyPair(ImportKeyPairRequest $in): Awaitable<\Errors\Result<ImportKeyPairResult>>;
  public function IsVpcPeered(IsVpcPeeredRequest $in): Awaitable<\Errors\Result<IsVpcPeeredResult>>;
  public function OpenInstancePublicPorts(OpenInstancePublicPortsRequest $in): Awaitable<\Errors\Result<OpenInstancePublicPortsResult>>;
  public function PeerVpc(PeerVpcRequest $in): Awaitable<\Errors\Result<PeerVpcResult>>;
  public function PutAlarm(PutAlarmRequest $in): Awaitable<\Errors\Result<PutAlarmResult>>;
  public function PutInstancePublicPorts(PutInstancePublicPortsRequest $in): Awaitable<\Errors\Result<PutInstancePublicPortsResult>>;
  public function RebootInstance(RebootInstanceRequest $in): Awaitable<\Errors\Result<RebootInstanceResult>>;
  public function RebootRelationalDatabase(RebootRelationalDatabaseRequest $in): Awaitable<\Errors\Result<RebootRelationalDatabaseResult>>;
  public function ReleaseStaticIp(ReleaseStaticIpRequest $in): Awaitable<\Errors\Result<ReleaseStaticIpResult>>;
  public function SendContactMethodVerification(SendContactMethodVerificationRequest $in): Awaitable<\Errors\Result<SendContactMethodVerificationResult>>;
  public function StartInstance(StartInstanceRequest $in): Awaitable<\Errors\Result<StartInstanceResult>>;
  public function StartRelationalDatabase(StartRelationalDatabaseRequest $in): Awaitable<\Errors\Result<StartRelationalDatabaseResult>>;
  public function StopInstance(StopInstanceRequest $in): Awaitable<\Errors\Result<StopInstanceResult>>;
  public function StopRelationalDatabase(StopRelationalDatabaseRequest $in): Awaitable<\Errors\Result<StopRelationalDatabaseResult>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Result<TagResourceResult>>;
  public function TestAlarm(TestAlarmRequest $in): Awaitable<\Errors\Result<TestAlarmResult>>;
  public function UnpeerVpc(UnpeerVpcRequest $in): Awaitable<\Errors\Result<UnpeerVpcResult>>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Result<UntagResourceResult>>;
  public function UpdateDomainEntry(UpdateDomainEntryRequest $in): Awaitable<\Errors\Result<UpdateDomainEntryResult>>;
  public function UpdateLoadBalancerAttribute(UpdateLoadBalancerAttributeRequest $in): Awaitable<\Errors\Result<UpdateLoadBalancerAttributeResult>>;
  public function UpdateRelationalDatabase(UpdateRelationalDatabaseRequest $in): Awaitable<\Errors\Result<UpdateRelationalDatabaseResult>>;
  public function UpdateRelationalDatabaseParameters(UpdateRelationalDatabaseParametersRequest $in): Awaitable<\Errors\Result<UpdateRelationalDatabaseParametersResult>>;
}

class AccessDeniedException {
  public ?string $code;
  public ?string $docs;
  public ?string $message;
  public ?string $tip;

  public function __construct(shape(
    ?'code' => ?string,
    ?'docs' => ?string,
    ?'message' => ?string,
    ?'tip' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->docs = $s['docs'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->tip = $s['tip'] ?? '';
  }
}

type AccessDirection = string;

class AccountSetupInProgressException {
  public ?string $code;
  public ?string $docs;
  public ?string $message;
  public ?string $tip;

  public function __construct(shape(
    ?'code' => ?string,
    ?'docs' => ?string,
    ?'message' => ?string,
    ?'tip' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->docs = $s['docs'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->tip = $s['tip'] ?? '';
  }
}

class AddOn {
  public ?string $name;
  public ?TimeOfDay $next_snapshot_time_of_day;
  public ?TimeOfDay $snapshot_time_of_day;
  public ?string $status;

  public function __construct(shape(
    ?'name' => ?string,
    ?'next_snapshot_time_of_day' => ?TimeOfDay,
    ?'snapshot_time_of_day' => ?TimeOfDay,
    ?'status' => ?string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->next_snapshot_time_of_day = $s['next_snapshot_time_of_day'] ?? '';
    $this->snapshot_time_of_day = $s['snapshot_time_of_day'] ?? '';
    $this->status = $s['status'] ?? '';
  }
}

type AddOnList = vec<AddOn>;

class AddOnRequest {
  public ?AddOnType $add_on_type;
  public ?AutoSnapshotAddOnRequest $auto_snapshot_add_on_request;

  public function __construct(shape(
    ?'add_on_type' => ?AddOnType,
    ?'auto_snapshot_add_on_request' => ?AutoSnapshotAddOnRequest,
  ) $s = shape()) {
    $this->add_on_type = $s['add_on_type'] ?? '';
    $this->auto_snapshot_add_on_request = $s['auto_snapshot_add_on_request'] ?? null;
  }
}

type AddOnRequestList = vec<AddOnRequest>;

type AddOnType = string;

class Alarm {
  public ?NonEmptyString $arn;
  public ?ComparisonOperator $comparison_operator;
  public ?ContactProtocolsList $contact_protocols;
  public ?IsoDate $created_at;
  public ?integer $datapoints_to_alarm;
  public ?integer $evaluation_periods;
  public ?ResourceLocation $location;
  public ?MetricName $metric_name;
  public ?MonitoredResourceInfo $monitored_resource_info;
  public ?ResourceName $name;
  public ?boolean $notification_enabled;
  public ?NotificationTriggerList $notification_triggers;
  public ?MetricPeriod $period;
  public ?ResourceType $resource_type;
  public ?AlarmState $state;
  public ?MetricStatistic $statistic;
  public ?string $support_code;
  public ?double $threshold;
  public ?TreatMissingData $treat_missing_data;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'comparison_operator' => ?ComparisonOperator,
    ?'contact_protocols' => ?ContactProtocolsList,
    ?'created_at' => ?IsoDate,
    ?'datapoints_to_alarm' => ?integer,
    ?'evaluation_periods' => ?integer,
    ?'location' => ?ResourceLocation,
    ?'metric_name' => ?MetricName,
    ?'monitored_resource_info' => ?MonitoredResourceInfo,
    ?'name' => ?ResourceName,
    ?'notification_enabled' => ?boolean,
    ?'notification_triggers' => ?NotificationTriggerList,
    ?'period' => ?MetricPeriod,
    ?'resource_type' => ?ResourceType,
    ?'state' => ?AlarmState,
    ?'statistic' => ?MetricStatistic,
    ?'support_code' => ?string,
    ?'threshold' => ?double,
    ?'treat_missing_data' => ?TreatMissingData,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->contact_protocols = $s['contact_protocols'] ?? vec[];
    $this->created_at = $s['created_at'] ?? 0;
    $this->datapoints_to_alarm = $s['datapoints_to_alarm'] ?? 0;
    $this->evaluation_periods = $s['evaluation_periods'] ?? 0;
    $this->location = $s['location'] ?? null;
    $this->metric_name = $s['metric_name'] ?? '';
    $this->monitored_resource_info = $s['monitored_resource_info'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->notification_enabled = $s['notification_enabled'] ?? false;
    $this->notification_triggers = $s['notification_triggers'] ?? vec[];
    $this->period = $s['period'] ?? 0;
    $this->resource_type = $s['resource_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->statistic = $s['statistic'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->threshold = $s['threshold'] ?? 0.0;
    $this->treat_missing_data = $s['treat_missing_data'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

type AlarmState = string;

type AlarmsList = vec<Alarm>;

class AllocateStaticIpRequest {
  public ?ResourceName $static_ip_name;

  public function __construct(shape(
    ?'static_ip_name' => ?ResourceName,
  ) $s = shape()) {
    $this->static_ip_name = $s['static_ip_name'] ?? '';
  }
}

class AllocateStaticIpResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class AttachDiskRequest {
  public ?ResourceName $disk_name;
  public ?NonEmptyString $disk_path;
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'disk_name' => ?ResourceName,
    ?'disk_path' => ?NonEmptyString,
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->disk_name = $s['disk_name'] ?? '';
    $this->disk_path = $s['disk_path'] ?? '';
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class AttachDiskResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class AttachInstancesToLoadBalancerRequest {
  public ?ResourceNameList $instance_names;
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'instance_names' => ?ResourceNameList,
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_names = $s['instance_names'] ?? vec[];
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class AttachInstancesToLoadBalancerResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class AttachLoadBalancerTlsCertificateRequest {
  public ?ResourceName $certificate_name;
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'certificate_name' => ?ResourceName,
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->certificate_name = $s['certificate_name'] ?? '';
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class AttachLoadBalancerTlsCertificateResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class AttachStaticIpRequest {
  public ?ResourceName $instance_name;
  public ?ResourceName $static_ip_name;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
    ?'static_ip_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
    $this->static_ip_name = $s['static_ip_name'] ?? '';
  }
}

class AttachStaticIpResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class AttachedDisk {
  public ?string $path;
  public ?integer $size_in_gb;

  public function __construct(shape(
    ?'path' => ?string,
    ?'size_in_gb' => ?integer,
  ) $s = shape()) {
    $this->path = $s['path'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
  }
}

type AttachedDiskList = vec<AttachedDisk>;

type AttachedDiskMap = dict<ResourceName, DiskMapList>;

class AutoSnapshotAddOnRequest {
  public ?TimeOfDay $snapshot_time_of_day;

  public function __construct(shape(
    ?'snapshot_time_of_day' => ?TimeOfDay,
  ) $s = shape()) {
    $this->snapshot_time_of_day = $s['snapshot_time_of_day'] ?? '';
  }
}

type AutoSnapshotDate = string;

class AutoSnapshotDetails {
  public ?IsoDate $created_at;
  public ?string $date;
  public ?AttachedDiskList $from_attached_disks;
  public ?AutoSnapshotStatus $status;

  public function __construct(shape(
    ?'created_at' => ?IsoDate,
    ?'date' => ?string,
    ?'from_attached_disks' => ?AttachedDiskList,
    ?'status' => ?AutoSnapshotStatus,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->date = $s['date'] ?? '';
    $this->from_attached_disks = $s['from_attached_disks'] ?? vec[];
    $this->status = $s['status'] ?? '';
  }
}

type AutoSnapshotDetailsList = vec<AutoSnapshotDetails>;

type AutoSnapshotStatus = string;

class AvailabilityZone {
  public ?NonEmptyString $state;
  public ?NonEmptyString $zone_name;

  public function __construct(shape(
    ?'state' => ?NonEmptyString,
    ?'zone_name' => ?NonEmptyString,
  ) $s = shape()) {
    $this->state = $s['state'] ?? '';
    $this->zone_name = $s['zone_name'] ?? '';
  }
}

type AvailabilityZoneList = vec<AvailabilityZone>;

type Base64 = string;

class Blueprint {
  public ?NonEmptyString $blueprint_id;
  public ?string $description;
  public ?NonEmptyString $group;
  public ?boolean $is_active;
  public ?string $license_url;
  public ?integer $min_power;
  public ?ResourceName $name;
  public ?InstancePlatform $platform;
  public ?string $product_url;
  public ?BlueprintType $type;
  public ?string $version;
  public ?string $version_code;

  public function __construct(shape(
    ?'blueprint_id' => ?NonEmptyString,
    ?'description' => ?string,
    ?'group' => ?NonEmptyString,
    ?'is_active' => ?boolean,
    ?'license_url' => ?string,
    ?'min_power' => ?integer,
    ?'name' => ?ResourceName,
    ?'platform' => ?InstancePlatform,
    ?'product_url' => ?string,
    ?'type' => ?BlueprintType,
    ?'version' => ?string,
    ?'version_code' => ?string,
  ) $s = shape()) {
    $this->blueprint_id = $s['blueprint_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->group = $s['group'] ?? '';
    $this->is_active = $s['is_active'] ?? false;
    $this->license_url = $s['license_url'] ?? '';
    $this->min_power = $s['min_power'] ?? 0;
    $this->name = $s['name'] ?? '';
    $this->platform = $s['platform'] ?? '';
    $this->product_url = $s['product_url'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->version = $s['version'] ?? '';
    $this->version_code = $s['version_code'] ?? '';
  }
}

type BlueprintList = vec<Blueprint>;

type BlueprintType = string;

class Bundle {
  public ?NonEmptyString $bundle_id;
  public ?integer $cpu_count;
  public ?integer $disk_size_in_gb;
  public ?string $instance_type;
  public ?boolean $is_active;
  public ?string $name;
  public ?integer $power;
  public ?float $price;
  public ?float $ram_size_in_gb;
  public ?InstancePlatformList $supported_platforms;
  public ?integer $transfer_per_month_in_gb;

  public function __construct(shape(
    ?'bundle_id' => ?NonEmptyString,
    ?'cpu_count' => ?integer,
    ?'disk_size_in_gb' => ?integer,
    ?'instance_type' => ?string,
    ?'is_active' => ?boolean,
    ?'name' => ?string,
    ?'power' => ?integer,
    ?'price' => ?float,
    ?'ram_size_in_gb' => ?float,
    ?'supported_platforms' => ?InstancePlatformList,
    ?'transfer_per_month_in_gb' => ?integer,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->cpu_count = $s['cpu_count'] ?? 0;
    $this->disk_size_in_gb = $s['disk_size_in_gb'] ?? 0;
    $this->instance_type = $s['instance_type'] ?? '';
    $this->is_active = $s['is_active'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->power = $s['power'] ?? 0;
    $this->price = $s['price'] ?? 0.0;
    $this->ram_size_in_gb = $s['ram_size_in_gb'] ?? 0.0;
    $this->supported_platforms = $s['supported_platforms'] ?? vec[];
    $this->transfer_per_month_in_gb = $s['transfer_per_month_in_gb'] ?? 0;
  }
}

type BundleList = vec<Bundle>;

class CloseInstancePublicPortsRequest {
  public ?ResourceName $instance_name;
  public ?PortInfo $port_info;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
    ?'port_info' => ?PortInfo,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
    $this->port_info = $s['port_info'] ?? null;
  }
}

class CloseInstancePublicPortsResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class CloudFormationStackRecord {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?DestinationInfo $destination_info;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?ResourceType $resource_type;
  public ?CloudFormationStackRecordSourceInfoList $source_info;
  public ?RecordState $state;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'destination_info' => ?DestinationInfo,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
    ?'source_info' => ?CloudFormationStackRecordSourceInfoList,
    ?'state' => ?RecordState,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->destination_info = $s['destination_info'] ?? null;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->source_info = $s['source_info'] ?? vec[];
    $this->state = $s['state'] ?? '';
  }
}

type CloudFormationStackRecordList = vec<CloudFormationStackRecord>;

class CloudFormationStackRecordSourceInfo {
  public ?NonEmptyString $arn;
  public ?NonEmptyString $name;
  public ?CloudFormationStackRecordSourceType $resource_type;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'name' => ?NonEmptyString,
    ?'resource_type' => ?CloudFormationStackRecordSourceType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type CloudFormationStackRecordSourceInfoList = vec<CloudFormationStackRecordSourceInfo>;

type CloudFormationStackRecordSourceType = string;

type ComparisonOperator = string;

class ContactMethod {
  public ?NonEmptyString $arn;
  public ?NonEmptyString $contact_endpoint;
  public ?IsoDate $created_at;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?ContactProtocol $protocol;
  public ?ResourceType $resource_type;
  public ?ContactMethodStatus $status;
  public ?string $support_code;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'contact_endpoint' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'protocol' => ?ContactProtocol,
    ?'resource_type' => ?ResourceType,
    ?'status' => ?ContactMethodStatus,
    ?'support_code' => ?string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->contact_endpoint = $s['contact_endpoint'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
  }
}

type ContactMethodStatus = string;

type ContactMethodVerificationProtocol = string;

type ContactMethodsList = vec<ContactMethod>;

type ContactProtocol = string;

type ContactProtocolsList = vec<ContactProtocol>;

class CopySnapshotRequest {
  public ?string $restore_date;
  public ?RegionName $source_region;
  public ?string $source_resource_name;
  public ?ResourceName $source_snapshot_name;
  public ?ResourceName $target_snapshot_name;
  public ?boolean $use_latest_restorable_auto_snapshot;

  public function __construct(shape(
    ?'restore_date' => ?string,
    ?'source_region' => ?RegionName,
    ?'source_resource_name' => ?string,
    ?'source_snapshot_name' => ?ResourceName,
    ?'target_snapshot_name' => ?ResourceName,
    ?'use_latest_restorable_auto_snapshot' => ?boolean,
  ) $s = shape()) {
    $this->restore_date = $s['restore_date'] ?? '';
    $this->source_region = $s['source_region'] ?? '';
    $this->source_resource_name = $s['source_resource_name'] ?? '';
    $this->source_snapshot_name = $s['source_snapshot_name'] ?? '';
    $this->target_snapshot_name = $s['target_snapshot_name'] ?? '';
    $this->use_latest_restorable_auto_snapshot = $s['use_latest_restorable_auto_snapshot'] ?? false;
  }
}

class CopySnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateCloudFormationStackRequest {
  public ?InstanceEntryList $instances;

  public function __construct(shape(
    ?'instances' => ?InstanceEntryList,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
  }
}

class CreateCloudFormationStackResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateContactMethodRequest {
  public ?StringMax256 $contact_endpoint;
  public ?ContactProtocol $protocol;

  public function __construct(shape(
    ?'contact_endpoint' => ?StringMax256,
    ?'protocol' => ?ContactProtocol,
  ) $s = shape()) {
    $this->contact_endpoint = $s['contact_endpoint'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
  }
}

class CreateContactMethodResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateDiskFromSnapshotRequest {
  public ?AddOnRequestList $add_ons;
  public ?NonEmptyString $availability_zone;
  public ?ResourceName $disk_name;
  public ?ResourceName $disk_snapshot_name;
  public ?string $restore_date;
  public ?integer $size_in_gb;
  public ?string $source_disk_name;
  public ?TagList $tags;
  public ?boolean $use_latest_restorable_auto_snapshot;

  public function __construct(shape(
    ?'add_ons' => ?AddOnRequestList,
    ?'availability_zone' => ?NonEmptyString,
    ?'disk_name' => ?ResourceName,
    ?'disk_snapshot_name' => ?ResourceName,
    ?'restore_date' => ?string,
    ?'size_in_gb' => ?integer,
    ?'source_disk_name' => ?string,
    ?'tags' => ?TagList,
    ?'use_latest_restorable_auto_snapshot' => ?boolean,
  ) $s = shape()) {
    $this->add_ons = $s['add_ons'] ?? vec[];
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->disk_name = $s['disk_name'] ?? '';
    $this->disk_snapshot_name = $s['disk_snapshot_name'] ?? '';
    $this->restore_date = $s['restore_date'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
    $this->source_disk_name = $s['source_disk_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->use_latest_restorable_auto_snapshot = $s['use_latest_restorable_auto_snapshot'] ?? false;
  }
}

class CreateDiskFromSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateDiskRequest {
  public ?AddOnRequestList $add_ons;
  public ?NonEmptyString $availability_zone;
  public ?ResourceName $disk_name;
  public ?integer $size_in_gb;
  public ?TagList $tags;

  public function __construct(shape(
    ?'add_ons' => ?AddOnRequestList,
    ?'availability_zone' => ?NonEmptyString,
    ?'disk_name' => ?ResourceName,
    ?'size_in_gb' => ?integer,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->add_ons = $s['add_ons'] ?? vec[];
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->disk_name = $s['disk_name'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDiskResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateDiskSnapshotRequest {
  public ?ResourceName $disk_name;
  public ?ResourceName $disk_snapshot_name;
  public ?ResourceName $instance_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'disk_name' => ?ResourceName,
    ?'disk_snapshot_name' => ?ResourceName,
    ?'instance_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->disk_name = $s['disk_name'] ?? '';
    $this->disk_snapshot_name = $s['disk_snapshot_name'] ?? '';
    $this->instance_name = $s['instance_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDiskSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateDomainEntryRequest {
  public ?DomainEntry $domain_entry;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_entry' => ?DomainEntry,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_entry = $s['domain_entry'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class CreateDomainEntryResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class CreateDomainRequest {
  public ?DomainName $domain_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateDomainResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class CreateInstanceSnapshotRequest {
  public ?ResourceName $instance_name;
  public ?ResourceName $instance_snapshot_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
    ?'instance_snapshot_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
    $this->instance_snapshot_name = $s['instance_snapshot_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateInstanceSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateInstancesFromSnapshotRequest {
  public ?AddOnRequestList $add_ons;
  public ?AttachedDiskMap $attached_disk_mapping;
  public ?string $availability_zone;
  public ?NonEmptyString $bundle_id;
  public ?StringList $instance_names;
  public ?ResourceName $instance_snapshot_name;
  public ?ResourceName $key_pair_name;
  public ?string $restore_date;
  public ?string $source_instance_name;
  public ?TagList $tags;
  public ?boolean $use_latest_restorable_auto_snapshot;
  public ?string $user_data;

  public function __construct(shape(
    ?'add_ons' => ?AddOnRequestList,
    ?'attached_disk_mapping' => ?AttachedDiskMap,
    ?'availability_zone' => ?string,
    ?'bundle_id' => ?NonEmptyString,
    ?'instance_names' => ?StringList,
    ?'instance_snapshot_name' => ?ResourceName,
    ?'key_pair_name' => ?ResourceName,
    ?'restore_date' => ?string,
    ?'source_instance_name' => ?string,
    ?'tags' => ?TagList,
    ?'use_latest_restorable_auto_snapshot' => ?boolean,
    ?'user_data' => ?string,
  ) $s = shape()) {
    $this->add_ons = $s['add_ons'] ?? vec[];
    $this->attached_disk_mapping = $s['attached_disk_mapping'] ?? dict[];
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->instance_names = $s['instance_names'] ?? vec[];
    $this->instance_snapshot_name = $s['instance_snapshot_name'] ?? '';
    $this->key_pair_name = $s['key_pair_name'] ?? '';
    $this->restore_date = $s['restore_date'] ?? '';
    $this->source_instance_name = $s['source_instance_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->use_latest_restorable_auto_snapshot = $s['use_latest_restorable_auto_snapshot'] ?? false;
    $this->user_data = $s['user_data'] ?? '';
  }
}

class CreateInstancesFromSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateInstancesRequest {
  public ?AddOnRequestList $add_ons;
  public ?string $availability_zone;
  public ?NonEmptyString $blueprint_id;
  public ?NonEmptyString $bundle_id;
  public ?ResourceName $custom_image_name;
  public ?StringList $instance_names;
  public ?ResourceName $key_pair_name;
  public ?TagList $tags;
  public ?string $user_data;

  public function __construct(shape(
    ?'add_ons' => ?AddOnRequestList,
    ?'availability_zone' => ?string,
    ?'blueprint_id' => ?NonEmptyString,
    ?'bundle_id' => ?NonEmptyString,
    ?'custom_image_name' => ?ResourceName,
    ?'instance_names' => ?StringList,
    ?'key_pair_name' => ?ResourceName,
    ?'tags' => ?TagList,
    ?'user_data' => ?string,
  ) $s = shape()) {
    $this->add_ons = $s['add_ons'] ?? vec[];
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->blueprint_id = $s['blueprint_id'] ?? '';
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->custom_image_name = $s['custom_image_name'] ?? '';
    $this->instance_names = $s['instance_names'] ?? vec[];
    $this->key_pair_name = $s['key_pair_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->user_data = $s['user_data'] ?? '';
  }
}

class CreateInstancesResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateKeyPairRequest {
  public ?ResourceName $key_pair_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'key_pair_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->key_pair_name = $s['key_pair_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateKeyPairResult {
  public ?KeyPair $key_pair;
  public ?Operation $operation;
  public ?Base64 $private_key_base_64;
  public ?Base64 $public_key_base_64;

  public function __construct(shape(
    ?'key_pair' => ?KeyPair,
    ?'operation' => ?Operation,
    ?'private_key_base_64' => ?Base64,
    ?'public_key_base_64' => ?Base64,
  ) $s = shape()) {
    $this->key_pair = $s['key_pair'] ?? null;
    $this->operation = $s['operation'] ?? null;
    $this->private_key_base_64 = $s['private_key_base_64'] ?? '';
    $this->public_key_base_64 = $s['public_key_base_64'] ?? '';
  }
}

class CreateLoadBalancerRequest {
  public ?DomainNameList $certificate_alternative_names;
  public ?DomainName $certificate_domain_name;
  public ?ResourceName $certificate_name;
  public ?string $health_check_path;
  public ?Port $instance_port;
  public ?ResourceName $load_balancer_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'certificate_alternative_names' => ?DomainNameList,
    ?'certificate_domain_name' => ?DomainName,
    ?'certificate_name' => ?ResourceName,
    ?'health_check_path' => ?string,
    ?'instance_port' => ?Port,
    ?'load_balancer_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->certificate_alternative_names = $s['certificate_alternative_names'] ?? vec[];
    $this->certificate_domain_name = $s['certificate_domain_name'] ?? '';
    $this->certificate_name = $s['certificate_name'] ?? '';
    $this->health_check_path = $s['health_check_path'] ?? '';
    $this->instance_port = $s['instance_port'] ?? 0;
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateLoadBalancerResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateLoadBalancerTlsCertificateRequest {
  public ?DomainNameList $certificate_alternative_names;
  public ?DomainName $certificate_domain_name;
  public ?ResourceName $certificate_name;
  public ?ResourceName $load_balancer_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'certificate_alternative_names' => ?DomainNameList,
    ?'certificate_domain_name' => ?DomainName,
    ?'certificate_name' => ?ResourceName,
    ?'load_balancer_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->certificate_alternative_names = $s['certificate_alternative_names'] ?? vec[];
    $this->certificate_domain_name = $s['certificate_domain_name'] ?? '';
    $this->certificate_name = $s['certificate_name'] ?? '';
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateLoadBalancerTlsCertificateResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateRelationalDatabaseFromSnapshotRequest {
  public ?string $availability_zone;
  public ?boolean $publicly_accessible;
  public ?string $relational_database_bundle_id;
  public ?ResourceName $relational_database_name;
  public ?ResourceName $relational_database_snapshot_name;
  public ?IsoDate $restore_time;
  public ?ResourceName $source_relational_database_name;
  public ?TagList $tags;
  public ?boolean $use_latest_restorable_time;

  public function __construct(shape(
    ?'availability_zone' => ?string,
    ?'publicly_accessible' => ?boolean,
    ?'relational_database_bundle_id' => ?string,
    ?'relational_database_name' => ?ResourceName,
    ?'relational_database_snapshot_name' => ?ResourceName,
    ?'restore_time' => ?IsoDate,
    ?'source_relational_database_name' => ?ResourceName,
    ?'tags' => ?TagList,
    ?'use_latest_restorable_time' => ?boolean,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->relational_database_bundle_id = $s['relational_database_bundle_id'] ?? '';
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->relational_database_snapshot_name = $s['relational_database_snapshot_name'] ?? '';
    $this->restore_time = $s['restore_time'] ?? 0;
    $this->source_relational_database_name = $s['source_relational_database_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->use_latest_restorable_time = $s['use_latest_restorable_time'] ?? false;
  }
}

class CreateRelationalDatabaseFromSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateRelationalDatabaseRequest {
  public ?string $availability_zone;
  public ?string $master_database_name;
  public ?SensitiveString $master_user_password;
  public ?string $master_username;
  public ?string $preferred_backup_window;
  public ?string $preferred_maintenance_window;
  public ?boolean $publicly_accessible;
  public ?string $relational_database_blueprint_id;
  public ?string $relational_database_bundle_id;
  public ?ResourceName $relational_database_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'availability_zone' => ?string,
    ?'master_database_name' => ?string,
    ?'master_user_password' => ?SensitiveString,
    ?'master_username' => ?string,
    ?'preferred_backup_window' => ?string,
    ?'preferred_maintenance_window' => ?string,
    ?'publicly_accessible' => ?boolean,
    ?'relational_database_blueprint_id' => ?string,
    ?'relational_database_bundle_id' => ?string,
    ?'relational_database_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->master_database_name = $s['master_database_name'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->master_username = $s['master_username'] ?? '';
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->relational_database_blueprint_id = $s['relational_database_blueprint_id'] ?? '';
    $this->relational_database_bundle_id = $s['relational_database_bundle_id'] ?? '';
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRelationalDatabaseResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class CreateRelationalDatabaseSnapshotRequest {
  public ?ResourceName $relational_database_name;
  public ?ResourceName $relational_database_snapshot_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'relational_database_name' => ?ResourceName,
    ?'relational_database_snapshot_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->relational_database_snapshot_name = $s['relational_database_snapshot_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateRelationalDatabaseSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteAlarmRequest {
  public ?ResourceName $alarm_name;

  public function __construct(shape(
    ?'alarm_name' => ?ResourceName,
  ) $s = shape()) {
    $this->alarm_name = $s['alarm_name'] ?? '';
  }
}

class DeleteAlarmResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteAutoSnapshotRequest {
  public ?AutoSnapshotDate $date;
  public ?ResourceName $resource_name;

  public function __construct(shape(
    ?'date' => ?AutoSnapshotDate,
    ?'resource_name' => ?ResourceName,
  ) $s = shape()) {
    $this->date = $s['date'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class DeleteAutoSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteContactMethodRequest {
  public ?ContactProtocol $protocol;

  public function __construct(shape(
    ?'protocol' => ?ContactProtocol,
  ) $s = shape()) {
    $this->protocol = $s['protocol'] ?? '';
  }
}

class DeleteContactMethodResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteDiskRequest {
  public ?ResourceName $disk_name;
  public ?boolean $force_delete_add_ons;

  public function __construct(shape(
    ?'disk_name' => ?ResourceName,
    ?'force_delete_add_ons' => ?boolean,
  ) $s = shape()) {
    $this->disk_name = $s['disk_name'] ?? '';
    $this->force_delete_add_ons = $s['force_delete_add_ons'] ?? false;
  }
}

class DeleteDiskResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteDiskSnapshotRequest {
  public ?ResourceName $disk_snapshot_name;

  public function __construct(shape(
    ?'disk_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->disk_snapshot_name = $s['disk_snapshot_name'] ?? '';
  }
}

class DeleteDiskSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteDomainEntryRequest {
  public ?DomainEntry $domain_entry;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_entry' => ?DomainEntry,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_entry = $s['domain_entry'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteDomainEntryResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class DeleteDomainRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeleteDomainResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class DeleteInstanceRequest {
  public ?boolean $force_delete_add_ons;
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'force_delete_add_ons' => ?boolean,
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->force_delete_add_ons = $s['force_delete_add_ons'] ?? false;
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class DeleteInstanceResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteInstanceSnapshotRequest {
  public ?ResourceName $instance_snapshot_name;

  public function __construct(shape(
    ?'instance_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_snapshot_name = $s['instance_snapshot_name'] ?? '';
  }
}

class DeleteInstanceSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteKeyPairRequest {
  public ?ResourceName $key_pair_name;

  public function __construct(shape(
    ?'key_pair_name' => ?ResourceName,
  ) $s = shape()) {
    $this->key_pair_name = $s['key_pair_name'] ?? '';
  }
}

class DeleteKeyPairResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class DeleteKnownHostKeysRequest {
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class DeleteKnownHostKeysResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteLoadBalancerRequest {
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class DeleteLoadBalancerResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteLoadBalancerTlsCertificateRequest {
  public ?ResourceName $certificate_name;
  public ?boolean $force;
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'certificate_name' => ?ResourceName,
    ?'force' => ?boolean,
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->certificate_name = $s['certificate_name'] ?? '';
    $this->force = $s['force'] ?? false;
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class DeleteLoadBalancerTlsCertificateResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteRelationalDatabaseRequest {
  public ?ResourceName $final_relational_database_snapshot_name;
  public ?ResourceName $relational_database_name;
  public ?boolean $skip_final_snapshot;

  public function __construct(shape(
    ?'final_relational_database_snapshot_name' => ?ResourceName,
    ?'relational_database_name' => ?ResourceName,
    ?'skip_final_snapshot' => ?boolean,
  ) $s = shape()) {
    $this->final_relational_database_snapshot_name = $s['final_relational_database_snapshot_name'] ?? '';
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->skip_final_snapshot = $s['skip_final_snapshot'] ?? false;
  }
}

class DeleteRelationalDatabaseResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DeleteRelationalDatabaseSnapshotRequest {
  public ?ResourceName $relational_database_snapshot_name;

  public function __construct(shape(
    ?'relational_database_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->relational_database_snapshot_name = $s['relational_database_snapshot_name'] ?? '';
  }
}

class DeleteRelationalDatabaseSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DestinationInfo {
  public ?NonEmptyString $id;
  public ?NonEmptyString $service;

  public function __construct(shape(
    ?'id' => ?NonEmptyString,
    ?'service' => ?NonEmptyString,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->service = $s['service'] ?? '';
  }
}

class DetachDiskRequest {
  public ?ResourceName $disk_name;

  public function __construct(shape(
    ?'disk_name' => ?ResourceName,
  ) $s = shape()) {
    $this->disk_name = $s['disk_name'] ?? '';
  }
}

class DetachDiskResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DetachInstancesFromLoadBalancerRequest {
  public ?ResourceNameList $instance_names;
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'instance_names' => ?ResourceNameList,
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_names = $s['instance_names'] ?? vec[];
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class DetachInstancesFromLoadBalancerResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DetachStaticIpRequest {
  public ?ResourceName $static_ip_name;

  public function __construct(shape(
    ?'static_ip_name' => ?ResourceName,
  ) $s = shape()) {
    $this->static_ip_name = $s['static_ip_name'] ?? '';
  }
}

class DetachStaticIpResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class DisableAddOnRequest {
  public ?AddOnType $add_on_type;
  public ?ResourceName $resource_name;

  public function __construct(shape(
    ?'add_on_type' => ?AddOnType,
    ?'resource_name' => ?ResourceName,
  ) $s = shape()) {
    $this->add_on_type = $s['add_on_type'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class DisableAddOnResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class Disk {
  public ?AddOnList $add_ons;
  public ?NonEmptyString $arn;
  public ?ResourceName $attached_to;
  public ?string $attachment_state;
  public ?IsoDate $created_at;
  public ?integer $gb_in_use;
  public ?integer $iops;
  public ?boolean $is_attached;
  public ?boolean $is_system_disk;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?string $path;
  public ?ResourceType $resource_type;
  public ?integer $size_in_gb;
  public ?DiskState $state;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'add_ons' => ?AddOnList,
    ?'arn' => ?NonEmptyString,
    ?'attached_to' => ?ResourceName,
    ?'attachment_state' => ?string,
    ?'created_at' => ?IsoDate,
    ?'gb_in_use' => ?integer,
    ?'iops' => ?integer,
    ?'is_attached' => ?boolean,
    ?'is_system_disk' => ?boolean,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'path' => ?string,
    ?'resource_type' => ?ResourceType,
    ?'size_in_gb' => ?integer,
    ?'state' => ?DiskState,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->add_ons = $s['add_ons'] ?? vec[];
    $this->arn = $s['arn'] ?? '';
    $this->attached_to = $s['attached_to'] ?? '';
    $this->attachment_state = $s['attachment_state'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->gb_in_use = $s['gb_in_use'] ?? 0;
    $this->iops = $s['iops'] ?? 0;
    $this->is_attached = $s['is_attached'] ?? false;
    $this->is_system_disk = $s['is_system_disk'] ?? false;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DiskInfo {
  public ?boolean $is_system_disk;
  public ?string $name;
  public ?NonEmptyString $path;
  public ?integer $size_in_gb;

  public function __construct(shape(
    ?'is_system_disk' => ?boolean,
    ?'name' => ?string,
    ?'path' => ?NonEmptyString,
    ?'size_in_gb' => ?integer,
  ) $s = shape()) {
    $this->is_system_disk = $s['is_system_disk'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
  }
}

type DiskInfoList = vec<DiskInfo>;

type DiskList = vec<Disk>;

class DiskMap {
  public ?ResourceName $new_disk_name;
  public ?NonEmptyString $original_disk_path;

  public function __construct(shape(
    ?'new_disk_name' => ?ResourceName,
    ?'original_disk_path' => ?NonEmptyString,
  ) $s = shape()) {
    $this->new_disk_name = $s['new_disk_name'] ?? '';
    $this->original_disk_path = $s['original_disk_path'] ?? '';
  }
}

type DiskMapList = vec<DiskMap>;

class DiskSnapshot {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?NonEmptyString $from_disk_arn;
  public ?ResourceName $from_disk_name;
  public ?NonEmptyString $from_instance_arn;
  public ?ResourceName $from_instance_name;
  public ?boolean $is_from_auto_snapshot;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?string $progress;
  public ?ResourceType $resource_type;
  public ?integer $size_in_gb;
  public ?DiskSnapshotState $state;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'from_disk_arn' => ?NonEmptyString,
    ?'from_disk_name' => ?ResourceName,
    ?'from_instance_arn' => ?NonEmptyString,
    ?'from_instance_name' => ?ResourceName,
    ?'is_from_auto_snapshot' => ?boolean,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'progress' => ?string,
    ?'resource_type' => ?ResourceType,
    ?'size_in_gb' => ?integer,
    ?'state' => ?DiskSnapshotState,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->from_disk_arn = $s['from_disk_arn'] ?? '';
    $this->from_disk_name = $s['from_disk_name'] ?? '';
    $this->from_instance_arn = $s['from_instance_arn'] ?? '';
    $this->from_instance_name = $s['from_instance_name'] ?? '';
    $this->is_from_auto_snapshot = $s['is_from_auto_snapshot'] ?? false;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DiskSnapshotInfo {
  public ?integer $size_in_gb;

  public function __construct(shape(
    ?'size_in_gb' => ?integer,
  ) $s = shape()) {
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
  }
}

type DiskSnapshotList = vec<DiskSnapshot>;

type DiskSnapshotState = string;

type DiskState = string;

class Domain {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?DomainEntryList $domain_entries;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?ResourceType $resource_type;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'domain_entries' => ?DomainEntryList,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->domain_entries = $s['domain_entries'] ?? vec[];
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class DomainEntry {
  public ?NonEmptyString $id;
  public ?boolean $is_alias;
  public ?DomainName $name;
  public ?DomainEntryOptions $options;
  public ?string $target;
  public ?DomainEntryType $type;

  public function __construct(shape(
    ?'id' => ?NonEmptyString,
    ?'is_alias' => ?boolean,
    ?'name' => ?DomainName,
    ?'options' => ?DomainEntryOptions,
    ?'target' => ?string,
    ?'type' => ?DomainEntryType,
  ) $s = shape()) {
    $this->id = $s['id'] ?? '';
    $this->is_alias = $s['is_alias'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->options = $s['options'] ?? dict[];
    $this->target = $s['target'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

type DomainEntryList = vec<DomainEntry>;

type DomainEntryOptions = dict<DomainEntryOptionsKeys, string>;

type DomainEntryOptionsKeys = string;

type DomainEntryType = string;

type DomainList = vec<Domain>;

type DomainName = string;

type DomainNameList = vec<DomainName>;

class DownloadDefaultKeyPairRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DownloadDefaultKeyPairResult {
  public ?Base64 $private_key_base_64;
  public ?Base64 $public_key_base_64;

  public function __construct(shape(
    ?'private_key_base_64' => ?Base64,
    ?'public_key_base_64' => ?Base64,
  ) $s = shape()) {
    $this->private_key_base_64 = $s['private_key_base_64'] ?? '';
    $this->public_key_base_64 = $s['public_key_base_64'] ?? '';
  }
}

class EnableAddOnRequest {
  public ?AddOnRequest $add_on_request;
  public ?ResourceName $resource_name;

  public function __construct(shape(
    ?'add_on_request' => ?AddOnRequest,
    ?'resource_name' => ?ResourceName,
  ) $s = shape()) {
    $this->add_on_request = $s['add_on_request'] ?? null;
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class EnableAddOnResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class ExportSnapshotRecord {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?DestinationInfo $destination_info;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?ResourceType $resource_type;
  public ?ExportSnapshotRecordSourceInfo $source_info;
  public ?RecordState $state;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'destination_info' => ?DestinationInfo,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
    ?'source_info' => ?ExportSnapshotRecordSourceInfo,
    ?'state' => ?RecordState,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->destination_info = $s['destination_info'] ?? null;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->source_info = $s['source_info'] ?? null;
    $this->state = $s['state'] ?? '';
  }
}

type ExportSnapshotRecordList = vec<ExportSnapshotRecord>;

class ExportSnapshotRecordSourceInfo {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?DiskSnapshotInfo $disk_snapshot_info;
  public ?NonEmptyString $from_resource_arn;
  public ?NonEmptyString $from_resource_name;
  public ?InstanceSnapshotInfo $instance_snapshot_info;
  public ?NonEmptyString $name;
  public ?ExportSnapshotRecordSourceType $resource_type;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'disk_snapshot_info' => ?DiskSnapshotInfo,
    ?'from_resource_arn' => ?NonEmptyString,
    ?'from_resource_name' => ?NonEmptyString,
    ?'instance_snapshot_info' => ?InstanceSnapshotInfo,
    ?'name' => ?NonEmptyString,
    ?'resource_type' => ?ExportSnapshotRecordSourceType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->disk_snapshot_info = $s['disk_snapshot_info'] ?? null;
    $this->from_resource_arn = $s['from_resource_arn'] ?? '';
    $this->from_resource_name = $s['from_resource_name'] ?? '';
    $this->instance_snapshot_info = $s['instance_snapshot_info'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ExportSnapshotRecordSourceType = string;

class ExportSnapshotRequest {
  public ?ResourceName $source_snapshot_name;

  public function __construct(shape(
    ?'source_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->source_snapshot_name = $s['source_snapshot_name'] ?? '';
  }
}

class ExportSnapshotResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class GetActiveNamesRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetActiveNamesResult {
  public ?StringList $active_names;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'active_names' => ?StringList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->active_names = $s['active_names'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetAlarmsRequest {
  public ?ResourceName $alarm_name;
  public ?ResourceName $monitored_resource_name;
  public ?string $page_token;

  public function __construct(shape(
    ?'alarm_name' => ?ResourceName,
    ?'monitored_resource_name' => ?ResourceName,
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->monitored_resource_name = $s['monitored_resource_name'] ?? '';
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetAlarmsResult {
  public ?AlarmsList $alarms;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'alarms' => ?AlarmsList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->alarms = $s['alarms'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetAutoSnapshotsRequest {
  public ?ResourceName $resource_name;

  public function __construct(shape(
    ?'resource_name' => ?ResourceName,
  ) $s = shape()) {
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class GetAutoSnapshotsResult {
  public ?AutoSnapshotDetailsList $auto_snapshots;
  public ?ResourceName $resource_name;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'auto_snapshots' => ?AutoSnapshotDetailsList,
    ?'resource_name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->auto_snapshots = $s['auto_snapshots'] ?? vec[];
    $this->resource_name = $s['resource_name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class GetBlueprintsRequest {
  public ?boolean $include_inactive;
  public ?string $page_token;

  public function __construct(shape(
    ?'include_inactive' => ?boolean,
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->include_inactive = $s['include_inactive'] ?? false;
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetBlueprintsResult {
  public ?BlueprintList $blueprints;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'blueprints' => ?BlueprintList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->blueprints = $s['blueprints'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetBundlesRequest {
  public ?boolean $include_inactive;
  public ?string $page_token;

  public function __construct(shape(
    ?'include_inactive' => ?boolean,
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->include_inactive = $s['include_inactive'] ?? false;
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetBundlesResult {
  public ?BundleList $bundles;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'bundles' => ?BundleList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->bundles = $s['bundles'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetCloudFormationStackRecordsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetCloudFormationStackRecordsResult {
  public ?CloudFormationStackRecordList $cloud_formation_stack_records;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'cloud_formation_stack_records' => ?CloudFormationStackRecordList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->cloud_formation_stack_records = $s['cloud_formation_stack_records'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetContactMethodsRequest {
  public ?ContactProtocolsList $protocols;

  public function __construct(shape(
    ?'protocols' => ?ContactProtocolsList,
  ) $s = shape()) {
    $this->protocols = $s['protocols'] ?? vec[];
  }
}

class GetContactMethodsResult {
  public ?ContactMethodsList $contact_methods;

  public function __construct(shape(
    ?'contact_methods' => ?ContactMethodsList,
  ) $s = shape()) {
    $this->contact_methods = $s['contact_methods'] ?? vec[];
  }
}

class GetDiskRequest {
  public ?ResourceName $disk_name;

  public function __construct(shape(
    ?'disk_name' => ?ResourceName,
  ) $s = shape()) {
    $this->disk_name = $s['disk_name'] ?? '';
  }
}

class GetDiskResult {
  public ?Disk $disk;

  public function __construct(shape(
    ?'disk' => ?Disk,
  ) $s = shape()) {
    $this->disk = $s['disk'] ?? null;
  }
}

class GetDiskSnapshotRequest {
  public ?ResourceName $disk_snapshot_name;

  public function __construct(shape(
    ?'disk_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->disk_snapshot_name = $s['disk_snapshot_name'] ?? '';
  }
}

class GetDiskSnapshotResult {
  public ?DiskSnapshot $disk_snapshot;

  public function __construct(shape(
    ?'disk_snapshot' => ?DiskSnapshot,
  ) $s = shape()) {
    $this->disk_snapshot = $s['disk_snapshot'] ?? null;
  }
}

class GetDiskSnapshotsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetDiskSnapshotsResult {
  public ?DiskSnapshotList $disk_snapshots;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'disk_snapshots' => ?DiskSnapshotList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->disk_snapshots = $s['disk_snapshots'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetDisksRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetDisksResult {
  public ?DiskList $disks;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'disks' => ?DiskList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->disks = $s['disks'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetDomainRequest {
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class GetDomainResult {
  public ?Domain $domain;

  public function __construct(shape(
    ?'domain' => ?Domain,
  ) $s = shape()) {
    $this->domain = $s['domain'] ?? null;
  }
}

class GetDomainsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetDomainsResult {
  public ?DomainList $domains;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'domains' => ?DomainList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->domains = $s['domains'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetExportSnapshotRecordsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetExportSnapshotRecordsResult {
  public ?ExportSnapshotRecordList $export_snapshot_records;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'export_snapshot_records' => ?ExportSnapshotRecordList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->export_snapshot_records = $s['export_snapshot_records'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetInstanceAccessDetailsRequest {
  public ?ResourceName $instance_name;
  public ?InstanceAccessProtocol $protocol;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
    ?'protocol' => ?InstanceAccessProtocol,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
  }
}

class GetInstanceAccessDetailsResult {
  public ?InstanceAccessDetails $access_details;

  public function __construct(shape(
    ?'access_details' => ?InstanceAccessDetails,
  ) $s = shape()) {
    $this->access_details = $s['access_details'] ?? null;
  }
}

class GetInstanceMetricDataRequest {
  public ?timestamp $end_time;
  public ?ResourceName $instance_name;
  public ?InstanceMetricName $metric_name;
  public ?MetricPeriod $period;
  public ?timestamp $start_time;
  public ?MetricStatisticList $statistics;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'end_time' => ?timestamp,
    ?'instance_name' => ?ResourceName,
    ?'metric_name' => ?InstanceMetricName,
    ?'period' => ?MetricPeriod,
    ?'start_time' => ?timestamp,
    ?'statistics' => ?MetricStatisticList,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->instance_name = $s['instance_name'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
    $this->statistics = $s['statistics'] ?? vec[];
    $this->unit = $s['unit'] ?? '';
  }
}

class GetInstanceMetricDataResult {
  public ?MetricDatapointList $metric_data;
  public ?InstanceMetricName $metric_name;

  public function __construct(shape(
    ?'metric_data' => ?MetricDatapointList,
    ?'metric_name' => ?InstanceMetricName,
  ) $s = shape()) {
    $this->metric_data = $s['metric_data'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
  }
}

class GetInstancePortStatesRequest {
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class GetInstancePortStatesResult {
  public ?InstancePortStateList $port_states;

  public function __construct(shape(
    ?'port_states' => ?InstancePortStateList,
  ) $s = shape()) {
    $this->port_states = $s['port_states'] ?? vec[];
  }
}

class GetInstanceRequest {
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class GetInstanceResult {
  public ?Instance $instance;

  public function __construct(shape(
    ?'instance' => ?Instance,
  ) $s = shape()) {
    $this->instance = $s['instance'] ?? null;
  }
}

class GetInstanceSnapshotRequest {
  public ?ResourceName $instance_snapshot_name;

  public function __construct(shape(
    ?'instance_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_snapshot_name = $s['instance_snapshot_name'] ?? '';
  }
}

class GetInstanceSnapshotResult {
  public ?InstanceSnapshot $instance_snapshot;

  public function __construct(shape(
    ?'instance_snapshot' => ?InstanceSnapshot,
  ) $s = shape()) {
    $this->instance_snapshot = $s['instance_snapshot'] ?? null;
  }
}

class GetInstanceSnapshotsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetInstanceSnapshotsResult {
  public ?InstanceSnapshotList $instance_snapshots;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'instance_snapshots' => ?InstanceSnapshotList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->instance_snapshots = $s['instance_snapshots'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetInstanceStateRequest {
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class GetInstanceStateResult {
  public ?InstanceState $state;

  public function __construct(shape(
    ?'state' => ?InstanceState,
  ) $s = shape()) {
    $this->state = $s['state'] ?? null;
  }
}

class GetInstancesRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetInstancesResult {
  public ?InstanceList $instances;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'instances' => ?InstanceList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->instances = $s['instances'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetKeyPairRequest {
  public ?ResourceName $key_pair_name;

  public function __construct(shape(
    ?'key_pair_name' => ?ResourceName,
  ) $s = shape()) {
    $this->key_pair_name = $s['key_pair_name'] ?? '';
  }
}

class GetKeyPairResult {
  public ?KeyPair $key_pair;

  public function __construct(shape(
    ?'key_pair' => ?KeyPair,
  ) $s = shape()) {
    $this->key_pair = $s['key_pair'] ?? null;
  }
}

class GetKeyPairsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetKeyPairsResult {
  public ?KeyPairList $key_pairs;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'key_pairs' => ?KeyPairList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->key_pairs = $s['key_pairs'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetLoadBalancerMetricDataRequest {
  public ?timestamp $end_time;
  public ?ResourceName $load_balancer_name;
  public ?LoadBalancerMetricName $metric_name;
  public ?MetricPeriod $period;
  public ?timestamp $start_time;
  public ?MetricStatisticList $statistics;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'end_time' => ?timestamp,
    ?'load_balancer_name' => ?ResourceName,
    ?'metric_name' => ?LoadBalancerMetricName,
    ?'period' => ?MetricPeriod,
    ?'start_time' => ?timestamp,
    ?'statistics' => ?MetricStatisticList,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
    $this->metric_name = $s['metric_name'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->start_time = $s['start_time'] ?? 0;
    $this->statistics = $s['statistics'] ?? vec[];
    $this->unit = $s['unit'] ?? '';
  }
}

class GetLoadBalancerMetricDataResult {
  public ?MetricDatapointList $metric_data;
  public ?LoadBalancerMetricName $metric_name;

  public function __construct(shape(
    ?'metric_data' => ?MetricDatapointList,
    ?'metric_name' => ?LoadBalancerMetricName,
  ) $s = shape()) {
    $this->metric_data = $s['metric_data'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
  }
}

class GetLoadBalancerRequest {
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class GetLoadBalancerResult {
  public ?LoadBalancer $load_balancer;

  public function __construct(shape(
    ?'load_balancer' => ?LoadBalancer,
  ) $s = shape()) {
    $this->load_balancer = $s['load_balancer'] ?? null;
  }
}

class GetLoadBalancerTlsCertificatesRequest {
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class GetLoadBalancerTlsCertificatesResult {
  public ?LoadBalancerTlsCertificateList $tls_certificates;

  public function __construct(shape(
    ?'tls_certificates' => ?LoadBalancerTlsCertificateList,
  ) $s = shape()) {
    $this->tls_certificates = $s['tls_certificates'] ?? vec[];
  }
}

class GetLoadBalancersRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetLoadBalancersResult {
  public ?LoadBalancerList $load_balancers;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'load_balancers' => ?LoadBalancerList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->load_balancers = $s['load_balancers'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetOperationRequest {
  public ?NonEmptyString $operation_id;

  public function __construct(shape(
    ?'operation_id' => ?NonEmptyString,
  ) $s = shape()) {
    $this->operation_id = $s['operation_id'] ?? '';
  }
}

class GetOperationResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class GetOperationsForResourceRequest {
  public ?string $page_token;
  public ?ResourceName $resource_name;

  public function __construct(shape(
    ?'page_token' => ?string,
    ?'resource_name' => ?ResourceName,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
  }
}

class GetOperationsForResourceResult {
  public ?string $next_page_count;
  public ?string $next_page_token;
  public ?OperationList $operations;

  public function __construct(shape(
    ?'next_page_count' => ?string,
    ?'next_page_token' => ?string,
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->next_page_count = $s['next_page_count'] ?? '';
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->operations = $s['operations'] ?? vec[];
  }
}

class GetOperationsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetOperationsResult {
  public ?string $next_page_token;
  public ?OperationList $operations;

  public function __construct(shape(
    ?'next_page_token' => ?string,
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->operations = $s['operations'] ?? vec[];
  }
}

class GetRegionsRequest {
  public ?boolean $include_availability_zones;
  public ?boolean $include_relational_database_availability_zones;

  public function __construct(shape(
    ?'include_availability_zones' => ?boolean,
    ?'include_relational_database_availability_zones' => ?boolean,
  ) $s = shape()) {
    $this->include_availability_zones = $s['include_availability_zones'] ?? false;
    $this->include_relational_database_availability_zones = $s['include_relational_database_availability_zones'] ?? false;
  }
}

class GetRegionsResult {
  public ?RegionList $regions;

  public function __construct(shape(
    ?'regions' => ?RegionList,
  ) $s = shape()) {
    $this->regions = $s['regions'] ?? vec[];
  }
}

class GetRelationalDatabaseBlueprintsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetRelationalDatabaseBlueprintsResult {
  public ?RelationalDatabaseBlueprintList $blueprints;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'blueprints' => ?RelationalDatabaseBlueprintList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->blueprints = $s['blueprints'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetRelationalDatabaseBundlesRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetRelationalDatabaseBundlesResult {
  public ?RelationalDatabaseBundleList $bundles;
  public ?string $next_page_token;

  public function __construct(shape(
    ?'bundles' => ?RelationalDatabaseBundleList,
    ?'next_page_token' => ?string,
  ) $s = shape()) {
    $this->bundles = $s['bundles'] ?? vec[];
    $this->next_page_token = $s['next_page_token'] ?? '';
  }
}

class GetRelationalDatabaseEventsRequest {
  public ?integer $duration_in_minutes;
  public ?string $page_token;
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'duration_in_minutes' => ?integer,
    ?'page_token' => ?string,
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->duration_in_minutes = $s['duration_in_minutes'] ?? 0;
    $this->page_token = $s['page_token'] ?? '';
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class GetRelationalDatabaseEventsResult {
  public ?string $next_page_token;
  public ?RelationalDatabaseEventList $relational_database_events;

  public function __construct(shape(
    ?'next_page_token' => ?string,
    ?'relational_database_events' => ?RelationalDatabaseEventList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->relational_database_events = $s['relational_database_events'] ?? vec[];
  }
}

class GetRelationalDatabaseLogEventsRequest {
  public ?IsoDate $end_time;
  public ?string $log_stream_name;
  public ?string $page_token;
  public ?ResourceName $relational_database_name;
  public ?boolean $start_from_head;
  public ?IsoDate $start_time;

  public function __construct(shape(
    ?'end_time' => ?IsoDate,
    ?'log_stream_name' => ?string,
    ?'page_token' => ?string,
    ?'relational_database_name' => ?ResourceName,
    ?'start_from_head' => ?boolean,
    ?'start_time' => ?IsoDate,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->log_stream_name = $s['log_stream_name'] ?? '';
    $this->page_token = $s['page_token'] ?? '';
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->start_from_head = $s['start_from_head'] ?? false;
    $this->start_time = $s['start_time'] ?? 0;
  }
}

class GetRelationalDatabaseLogEventsResult {
  public ?string $next_backward_token;
  public ?string $next_forward_token;
  public ?LogEventList $resource_log_events;

  public function __construct(shape(
    ?'next_backward_token' => ?string,
    ?'next_forward_token' => ?string,
    ?'resource_log_events' => ?LogEventList,
  ) $s = shape()) {
    $this->next_backward_token = $s['next_backward_token'] ?? '';
    $this->next_forward_token = $s['next_forward_token'] ?? '';
    $this->resource_log_events = $s['resource_log_events'] ?? vec[];
  }
}

class GetRelationalDatabaseLogStreamsRequest {
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class GetRelationalDatabaseLogStreamsResult {
  public ?StringList $log_streams;

  public function __construct(shape(
    ?'log_streams' => ?StringList,
  ) $s = shape()) {
    $this->log_streams = $s['log_streams'] ?? vec[];
  }
}

class GetRelationalDatabaseMasterUserPasswordRequest {
  public ?RelationalDatabasePasswordVersion $password_version;
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'password_version' => ?RelationalDatabasePasswordVersion,
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->password_version = $s['password_version'] ?? '';
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class GetRelationalDatabaseMasterUserPasswordResult {
  public ?IsoDate $created_at;
  public ?SensitiveString $master_user_password;

  public function __construct(shape(
    ?'created_at' => ?IsoDate,
    ?'master_user_password' => ?SensitiveString,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->master_user_password = $s['master_user_password'] ?? '';
  }
}

class GetRelationalDatabaseMetricDataRequest {
  public ?IsoDate $end_time;
  public ?RelationalDatabaseMetricName $metric_name;
  public ?MetricPeriod $period;
  public ?ResourceName $relational_database_name;
  public ?IsoDate $start_time;
  public ?MetricStatisticList $statistics;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'end_time' => ?IsoDate,
    ?'metric_name' => ?RelationalDatabaseMetricName,
    ?'period' => ?MetricPeriod,
    ?'relational_database_name' => ?ResourceName,
    ?'start_time' => ?IsoDate,
    ?'statistics' => ?MetricStatisticList,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->end_time = $s['end_time'] ?? 0;
    $this->metric_name = $s['metric_name'] ?? '';
    $this->period = $s['period'] ?? 0;
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->statistics = $s['statistics'] ?? vec[];
    $this->unit = $s['unit'] ?? '';
  }
}

class GetRelationalDatabaseMetricDataResult {
  public ?MetricDatapointList $metric_data;
  public ?RelationalDatabaseMetricName $metric_name;

  public function __construct(shape(
    ?'metric_data' => ?MetricDatapointList,
    ?'metric_name' => ?RelationalDatabaseMetricName,
  ) $s = shape()) {
    $this->metric_data = $s['metric_data'] ?? vec[];
    $this->metric_name = $s['metric_name'] ?? '';
  }
}

class GetRelationalDatabaseParametersRequest {
  public ?string $page_token;
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'page_token' => ?string,
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class GetRelationalDatabaseParametersResult {
  public ?string $next_page_token;
  public ?RelationalDatabaseParameterList $parameters;

  public function __construct(shape(
    ?'next_page_token' => ?string,
    ?'parameters' => ?RelationalDatabaseParameterList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->parameters = $s['parameters'] ?? vec[];
  }
}

class GetRelationalDatabaseRequest {
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class GetRelationalDatabaseResult {
  public ?RelationalDatabase $relational_database;

  public function __construct(shape(
    ?'relational_database' => ?RelationalDatabase,
  ) $s = shape()) {
    $this->relational_database = $s['relational_database'] ?? null;
  }
}

class GetRelationalDatabaseSnapshotRequest {
  public ?ResourceName $relational_database_snapshot_name;

  public function __construct(shape(
    ?'relational_database_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->relational_database_snapshot_name = $s['relational_database_snapshot_name'] ?? '';
  }
}

class GetRelationalDatabaseSnapshotResult {
  public ?RelationalDatabaseSnapshot $relational_database_snapshot;

  public function __construct(shape(
    ?'relational_database_snapshot' => ?RelationalDatabaseSnapshot,
  ) $s = shape()) {
    $this->relational_database_snapshot = $s['relational_database_snapshot'] ?? null;
  }
}

class GetRelationalDatabaseSnapshotsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetRelationalDatabaseSnapshotsResult {
  public ?string $next_page_token;
  public ?RelationalDatabaseSnapshotList $relational_database_snapshots;

  public function __construct(shape(
    ?'next_page_token' => ?string,
    ?'relational_database_snapshots' => ?RelationalDatabaseSnapshotList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->relational_database_snapshots = $s['relational_database_snapshots'] ?? vec[];
  }
}

class GetRelationalDatabasesRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetRelationalDatabasesResult {
  public ?string $next_page_token;
  public ?RelationalDatabaseList $relational_databases;

  public function __construct(shape(
    ?'next_page_token' => ?string,
    ?'relational_databases' => ?RelationalDatabaseList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->relational_databases = $s['relational_databases'] ?? vec[];
  }
}

class GetStaticIpRequest {
  public ?ResourceName $static_ip_name;

  public function __construct(shape(
    ?'static_ip_name' => ?ResourceName,
  ) $s = shape()) {
    $this->static_ip_name = $s['static_ip_name'] ?? '';
  }
}

class GetStaticIpResult {
  public ?StaticIp $static_ip;

  public function __construct(shape(
    ?'static_ip' => ?StaticIp,
  ) $s = shape()) {
    $this->static_ip = $s['static_ip'] ?? null;
  }
}

class GetStaticIpsRequest {
  public ?string $page_token;

  public function __construct(shape(
    ?'page_token' => ?string,
  ) $s = shape()) {
    $this->page_token = $s['page_token'] ?? '';
  }
}

class GetStaticIpsResult {
  public ?string $next_page_token;
  public ?StaticIpList $static_ips;

  public function __construct(shape(
    ?'next_page_token' => ?string,
    ?'static_ips' => ?StaticIpList,
  ) $s = shape()) {
    $this->next_page_token = $s['next_page_token'] ?? '';
    $this->static_ips = $s['static_ips'] ?? vec[];
  }
}

class HostKeyAttributes {
  public ?string $algorithm;
  public ?string $fingerprint_sha_1;
  public ?string $fingerprint_sha_256;
  public ?IsoDate $not_valid_after;
  public ?IsoDate $not_valid_before;
  public ?string $public_key;
  public ?IsoDate $witnessed_at;

  public function __construct(shape(
    ?'algorithm' => ?string,
    ?'fingerprint_sha_1' => ?string,
    ?'fingerprint_sha_256' => ?string,
    ?'not_valid_after' => ?IsoDate,
    ?'not_valid_before' => ?IsoDate,
    ?'public_key' => ?string,
    ?'witnessed_at' => ?IsoDate,
  ) $s = shape()) {
    $this->algorithm = $s['algorithm'] ?? '';
    $this->fingerprint_sha_1 = $s['fingerprint_sha_1'] ?? '';
    $this->fingerprint_sha_256 = $s['fingerprint_sha_256'] ?? '';
    $this->not_valid_after = $s['not_valid_after'] ?? 0;
    $this->not_valid_before = $s['not_valid_before'] ?? 0;
    $this->public_key = $s['public_key'] ?? '';
    $this->witnessed_at = $s['witnessed_at'] ?? 0;
  }
}

type HostKeysList = vec<HostKeyAttributes>;

class ImportKeyPairRequest {
  public ?ResourceName $key_pair_name;
  public ?Base64 $public_key_base_64;

  public function __construct(shape(
    ?'key_pair_name' => ?ResourceName,
    ?'public_key_base_64' => ?Base64,
  ) $s = shape()) {
    $this->key_pair_name = $s['key_pair_name'] ?? '';
    $this->public_key_base_64 = $s['public_key_base_64'] ?? '';
  }
}

class ImportKeyPairResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class Instance {
  public ?AddOnList $add_ons;
  public ?NonEmptyString $arn;
  public ?NonEmptyString $blueprint_id;
  public ?NonEmptyString $blueprint_name;
  public ?NonEmptyString $bundle_id;
  public ?IsoDate $created_at;
  public ?InstanceHardware $hardware;
  public ?IpV6Address $ipv_6_address;
  public ?boolean $is_static_ip;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?InstanceNetworking $networking;
  public ?IpAddress $private_ip_address;
  public ?IpAddress $public_ip_address;
  public ?ResourceType $resource_type;
  public ?ResourceName $ssh_key_name;
  public ?InstanceState $state;
  public ?string $support_code;
  public ?TagList $tags;
  public ?NonEmptyString $username;

  public function __construct(shape(
    ?'add_ons' => ?AddOnList,
    ?'arn' => ?NonEmptyString,
    ?'blueprint_id' => ?NonEmptyString,
    ?'blueprint_name' => ?NonEmptyString,
    ?'bundle_id' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'hardware' => ?InstanceHardware,
    ?'ipv_6_address' => ?IpV6Address,
    ?'is_static_ip' => ?boolean,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'networking' => ?InstanceNetworking,
    ?'private_ip_address' => ?IpAddress,
    ?'public_ip_address' => ?IpAddress,
    ?'resource_type' => ?ResourceType,
    ?'ssh_key_name' => ?ResourceName,
    ?'state' => ?InstanceState,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
    ?'username' => ?NonEmptyString,
  ) $s = shape()) {
    $this->add_ons = $s['add_ons'] ?? vec[];
    $this->arn = $s['arn'] ?? '';
    $this->blueprint_id = $s['blueprint_id'] ?? '';
    $this->blueprint_name = $s['blueprint_name'] ?? '';
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->hardware = $s['hardware'] ?? null;
    $this->ipv_6_address = $s['ipv_6_address'] ?? '';
    $this->is_static_ip = $s['is_static_ip'] ?? false;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->networking = $s['networking'] ?? null;
    $this->private_ip_address = $s['private_ip_address'] ?? '';
    $this->public_ip_address = $s['public_ip_address'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->ssh_key_name = $s['ssh_key_name'] ?? '';
    $this->state = $s['state'] ?? null;
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->username = $s['username'] ?? '';
  }
}

class InstanceAccessDetails {
  public ?string $cert_key;
  public ?IsoDate $expires_at;
  public ?HostKeysList $host_keys;
  public ?ResourceName $instance_name;
  public ?IpAddress $ip_address;
  public ?string $password;
  public ?PasswordData $password_data;
  public ?string $private_key;
  public ?InstanceAccessProtocol $protocol;
  public ?string $username;

  public function __construct(shape(
    ?'cert_key' => ?string,
    ?'expires_at' => ?IsoDate,
    ?'host_keys' => ?HostKeysList,
    ?'instance_name' => ?ResourceName,
    ?'ip_address' => ?IpAddress,
    ?'password' => ?string,
    ?'password_data' => ?PasswordData,
    ?'private_key' => ?string,
    ?'protocol' => ?InstanceAccessProtocol,
    ?'username' => ?string,
  ) $s = shape()) {
    $this->cert_key = $s['cert_key'] ?? '';
    $this->expires_at = $s['expires_at'] ?? 0;
    $this->host_keys = $s['host_keys'] ?? vec[];
    $this->instance_name = $s['instance_name'] ?? '';
    $this->ip_address = $s['ip_address'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->password_data = $s['password_data'] ?? null;
    $this->private_key = $s['private_key'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->username = $s['username'] ?? '';
  }
}

type InstanceAccessProtocol = string;

class InstanceEntry {
  public ?string $availability_zone;
  public ?NonEmptyString $instance_type;
  public ?PortInfoSourceType $port_info_source;
  public ?ResourceName $source_name;
  public ?string $user_data;

  public function __construct(shape(
    ?'availability_zone' => ?string,
    ?'instance_type' => ?NonEmptyString,
    ?'port_info_source' => ?PortInfoSourceType,
    ?'source_name' => ?ResourceName,
    ?'user_data' => ?string,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->instance_type = $s['instance_type'] ?? '';
    $this->port_info_source = $s['port_info_source'] ?? '';
    $this->source_name = $s['source_name'] ?? '';
    $this->user_data = $s['user_data'] ?? '';
  }
}

type InstanceEntryList = vec<InstanceEntry>;

class InstanceHardware {
  public ?integer $cpu_count;
  public ?DiskList $disks;
  public ?float $ram_size_in_gb;

  public function __construct(shape(
    ?'cpu_count' => ?integer,
    ?'disks' => ?DiskList,
    ?'ram_size_in_gb' => ?float,
  ) $s = shape()) {
    $this->cpu_count = $s['cpu_count'] ?? 0;
    $this->disks = $s['disks'] ?? vec[];
    $this->ram_size_in_gb = $s['ram_size_in_gb'] ?? 0.0;
  }
}

type InstanceHealthReason = string;

type InstanceHealthState = string;

class InstanceHealthSummary {
  public ?InstanceHealthState $instance_health;
  public ?InstanceHealthReason $instance_health_reason;
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'instance_health' => ?InstanceHealthState,
    ?'instance_health_reason' => ?InstanceHealthReason,
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_health = $s['instance_health'] ?? '';
    $this->instance_health_reason = $s['instance_health_reason'] ?? '';
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

type InstanceHealthSummaryList = vec<InstanceHealthSummary>;

type InstanceList = vec<Instance>;

type InstanceMetricName = string;

class InstanceNetworking {
  public ?MonthlyTransfer $monthly_transfer;
  public ?InstancePortInfoList $ports;

  public function __construct(shape(
    ?'monthly_transfer' => ?MonthlyTransfer,
    ?'ports' => ?InstancePortInfoList,
  ) $s = shape()) {
    $this->monthly_transfer = $s['monthly_transfer'] ?? null;
    $this->ports = $s['ports'] ?? vec[];
  }
}

type InstancePlatform = string;

type InstancePlatformList = vec<InstancePlatform>;

class InstancePortInfo {
  public ?AccessDirection $access_direction;
  public ?string $access_from;
  public ?PortAccessType $access_type;
  public ?string $common_name;
  public ?Port $from_port;
  public ?NetworkProtocol $protocol;
  public ?Port $to_port;

  public function __construct(shape(
    ?'access_direction' => ?AccessDirection,
    ?'access_from' => ?string,
    ?'access_type' => ?PortAccessType,
    ?'common_name' => ?string,
    ?'from_port' => ?Port,
    ?'protocol' => ?NetworkProtocol,
    ?'to_port' => ?Port,
  ) $s = shape()) {
    $this->access_direction = $s['access_direction'] ?? '';
    $this->access_from = $s['access_from'] ?? '';
    $this->access_type = $s['access_type'] ?? '';
    $this->common_name = $s['common_name'] ?? '';
    $this->from_port = $s['from_port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

type InstancePortInfoList = vec<InstancePortInfo>;

class InstancePortState {
  public ?Port $from_port;
  public ?NetworkProtocol $protocol;
  public ?PortState $state;
  public ?Port $to_port;

  public function __construct(shape(
    ?'from_port' => ?Port,
    ?'protocol' => ?NetworkProtocol,
    ?'state' => ?PortState,
    ?'to_port' => ?Port,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

type InstancePortStateList = vec<InstancePortState>;

class InstanceSnapshot {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?DiskList $from_attached_disks;
  public ?string $from_blueprint_id;
  public ?string $from_bundle_id;
  public ?NonEmptyString $from_instance_arn;
  public ?ResourceName $from_instance_name;
  public ?boolean $is_from_auto_snapshot;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?string $progress;
  public ?ResourceType $resource_type;
  public ?integer $size_in_gb;
  public ?InstanceSnapshotState $state;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'from_attached_disks' => ?DiskList,
    ?'from_blueprint_id' => ?string,
    ?'from_bundle_id' => ?string,
    ?'from_instance_arn' => ?NonEmptyString,
    ?'from_instance_name' => ?ResourceName,
    ?'is_from_auto_snapshot' => ?boolean,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'progress' => ?string,
    ?'resource_type' => ?ResourceType,
    ?'size_in_gb' => ?integer,
    ?'state' => ?InstanceSnapshotState,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->from_attached_disks = $s['from_attached_disks'] ?? vec[];
    $this->from_blueprint_id = $s['from_blueprint_id'] ?? '';
    $this->from_bundle_id = $s['from_bundle_id'] ?? '';
    $this->from_instance_arn = $s['from_instance_arn'] ?? '';
    $this->from_instance_name = $s['from_instance_name'] ?? '';
    $this->is_from_auto_snapshot = $s['is_from_auto_snapshot'] ?? false;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->progress = $s['progress'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class InstanceSnapshotInfo {
  public ?NonEmptyString $from_blueprint_id;
  public ?NonEmptyString $from_bundle_id;
  public ?DiskInfoList $from_disk_info;

  public function __construct(shape(
    ?'from_blueprint_id' => ?NonEmptyString,
    ?'from_bundle_id' => ?NonEmptyString,
    ?'from_disk_info' => ?DiskInfoList,
  ) $s = shape()) {
    $this->from_blueprint_id = $s['from_blueprint_id'] ?? '';
    $this->from_bundle_id = $s['from_bundle_id'] ?? '';
    $this->from_disk_info = $s['from_disk_info'] ?? vec[];
  }
}

type InstanceSnapshotList = vec<InstanceSnapshot>;

type InstanceSnapshotState = string;

class InstanceState {
  public ?integer $code;
  public ?string $name;

  public function __construct(shape(
    ?'code' => ?integer,
    ?'name' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? 0;
    $this->name = $s['name'] ?? '';
  }
}

class InvalidInputException {
  public ?string $code;
  public ?string $docs;
  public ?string $message;
  public ?string $tip;

  public function __construct(shape(
    ?'code' => ?string,
    ?'docs' => ?string,
    ?'message' => ?string,
    ?'tip' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->docs = $s['docs'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->tip = $s['tip'] ?? '';
  }
}

type IpAddress = string;

type IpV6Address = string;

class IsVpcPeeredRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class IsVpcPeeredResult {
  public ?boolean $is_peered;

  public function __construct(shape(
    ?'is_peered' => ?boolean,
  ) $s = shape()) {
    $this->is_peered = $s['is_peered'] ?? false;
  }
}

type IsoDate = int;

class KeyPair {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?Base64 $fingerprint;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?ResourceType $resource_type;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'fingerprint' => ?Base64,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->fingerprint = $s['fingerprint'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type KeyPairList = vec<KeyPair>;

class LoadBalancer {
  public ?NonEmptyString $arn;
  public ?LoadBalancerConfigurationOptions $configuration_options;
  public ?IsoDate $created_at;
  public ?NonEmptyString $dns_name;
  public ?NonEmptyString $health_check_path;
  public ?InstanceHealthSummaryList $instance_health_summary;
  public ?integer $instance_port;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?LoadBalancerProtocol $protocol;
  public ?PortList $public_ports;
  public ?ResourceType $resource_type;
  public ?LoadBalancerState $state;
  public ?string $support_code;
  public ?TagList $tags;
  public ?LoadBalancerTlsCertificateSummaryList $tls_certificate_summaries;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'configuration_options' => ?LoadBalancerConfigurationOptions,
    ?'created_at' => ?IsoDate,
    ?'dns_name' => ?NonEmptyString,
    ?'health_check_path' => ?NonEmptyString,
    ?'instance_health_summary' => ?InstanceHealthSummaryList,
    ?'instance_port' => ?integer,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'protocol' => ?LoadBalancerProtocol,
    ?'public_ports' => ?PortList,
    ?'resource_type' => ?ResourceType,
    ?'state' => ?LoadBalancerState,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
    ?'tls_certificate_summaries' => ?LoadBalancerTlsCertificateSummaryList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->configuration_options = $s['configuration_options'] ?? dict[];
    $this->created_at = $s['created_at'] ?? 0;
    $this->dns_name = $s['dns_name'] ?? '';
    $this->health_check_path = $s['health_check_path'] ?? '';
    $this->instance_health_summary = $s['instance_health_summary'] ?? vec[];
    $this->instance_port = $s['instance_port'] ?? 0;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->protocol = $s['protocol'] ?? '';
    $this->public_ports = $s['public_ports'] ?? vec[];
    $this->resource_type = $s['resource_type'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->tls_certificate_summaries = $s['tls_certificate_summaries'] ?? vec[];
  }
}

type LoadBalancerAttributeName = string;

type LoadBalancerConfigurationOptions = dict<LoadBalancerAttributeName, string>;

type LoadBalancerList = vec<LoadBalancer>;

type LoadBalancerMetricName = string;

type LoadBalancerProtocol = string;

type LoadBalancerState = string;

class LoadBalancerTlsCertificate {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?DomainName $domain_name;
  public ?LoadBalancerTlsCertificateDomainValidationRecordList $domain_validation_records;
  public ?LoadBalancerTlsCertificateFailureReason $failure_reason;
  public ?boolean $is_attached;
  public ?IsoDate $issued_at;
  public ?NonEmptyString $issuer;
  public ?NonEmptyString $key_algorithm;
  public ?ResourceName $load_balancer_name;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?IsoDate $not_after;
  public ?IsoDate $not_before;
  public ?LoadBalancerTlsCertificateRenewalSummary $renewal_summary;
  public ?ResourceType $resource_type;
  public ?LoadBalancerTlsCertificateRevocationReason $revocation_reason;
  public ?IsoDate $revoked_at;
  public ?NonEmptyString $serial;
  public ?NonEmptyString $signature_algorithm;
  public ?LoadBalancerTlsCertificateStatus $status;
  public ?NonEmptyString $subject;
  public ?StringList $subject_alternative_names;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'domain_name' => ?DomainName,
    ?'domain_validation_records' => ?LoadBalancerTlsCertificateDomainValidationRecordList,
    ?'failure_reason' => ?LoadBalancerTlsCertificateFailureReason,
    ?'is_attached' => ?boolean,
    ?'issued_at' => ?IsoDate,
    ?'issuer' => ?NonEmptyString,
    ?'key_algorithm' => ?NonEmptyString,
    ?'load_balancer_name' => ?ResourceName,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'not_after' => ?IsoDate,
    ?'not_before' => ?IsoDate,
    ?'renewal_summary' => ?LoadBalancerTlsCertificateRenewalSummary,
    ?'resource_type' => ?ResourceType,
    ?'revocation_reason' => ?LoadBalancerTlsCertificateRevocationReason,
    ?'revoked_at' => ?IsoDate,
    ?'serial' => ?NonEmptyString,
    ?'signature_algorithm' => ?NonEmptyString,
    ?'status' => ?LoadBalancerTlsCertificateStatus,
    ?'subject' => ?NonEmptyString,
    ?'subject_alternative_names' => ?StringList,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->domain_validation_records = $s['domain_validation_records'] ?? vec[];
    $this->failure_reason = $s['failure_reason'] ?? '';
    $this->is_attached = $s['is_attached'] ?? false;
    $this->issued_at = $s['issued_at'] ?? 0;
    $this->issuer = $s['issuer'] ?? '';
    $this->key_algorithm = $s['key_algorithm'] ?? '';
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->not_after = $s['not_after'] ?? 0;
    $this->not_before = $s['not_before'] ?? 0;
    $this->renewal_summary = $s['renewal_summary'] ?? null;
    $this->resource_type = $s['resource_type'] ?? '';
    $this->revocation_reason = $s['revocation_reason'] ?? '';
    $this->revoked_at = $s['revoked_at'] ?? 0;
    $this->serial = $s['serial'] ?? '';
    $this->signature_algorithm = $s['signature_algorithm'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->subject = $s['subject'] ?? '';
    $this->subject_alternative_names = $s['subject_alternative_names'] ?? vec[];
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type LoadBalancerTlsCertificateDomainStatus = string;

class LoadBalancerTlsCertificateDomainValidationOption {
  public ?DomainName $domain_name;
  public ?LoadBalancerTlsCertificateDomainStatus $validation_status;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'validation_status' => ?LoadBalancerTlsCertificateDomainStatus,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->validation_status = $s['validation_status'] ?? '';
  }
}

type LoadBalancerTlsCertificateDomainValidationOptionList = vec<LoadBalancerTlsCertificateDomainValidationOption>;

class LoadBalancerTlsCertificateDomainValidationRecord {
  public ?DomainName $domain_name;
  public ?NonEmptyString $name;
  public ?NonEmptyString $type;
  public ?LoadBalancerTlsCertificateDomainStatus $validation_status;
  public ?NonEmptyString $value;

  public function __construct(shape(
    ?'domain_name' => ?DomainName,
    ?'name' => ?NonEmptyString,
    ?'type' => ?NonEmptyString,
    ?'validation_status' => ?LoadBalancerTlsCertificateDomainStatus,
    ?'value' => ?NonEmptyString,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->validation_status = $s['validation_status'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type LoadBalancerTlsCertificateDomainValidationRecordList = vec<LoadBalancerTlsCertificateDomainValidationRecord>;

type LoadBalancerTlsCertificateFailureReason = string;

type LoadBalancerTlsCertificateList = vec<LoadBalancerTlsCertificate>;

type LoadBalancerTlsCertificateRenewalStatus = string;

class LoadBalancerTlsCertificateRenewalSummary {
  public ?LoadBalancerTlsCertificateDomainValidationOptionList $domain_validation_options;
  public ?LoadBalancerTlsCertificateRenewalStatus $renewal_status;

  public function __construct(shape(
    ?'domain_validation_options' => ?LoadBalancerTlsCertificateDomainValidationOptionList,
    ?'renewal_status' => ?LoadBalancerTlsCertificateRenewalStatus,
  ) $s = shape()) {
    $this->domain_validation_options = $s['domain_validation_options'] ?? vec[];
    $this->renewal_status = $s['renewal_status'] ?? '';
  }
}

type LoadBalancerTlsCertificateRevocationReason = string;

type LoadBalancerTlsCertificateStatus = string;

class LoadBalancerTlsCertificateSummary {
  public ?boolean $is_attached;
  public ?ResourceName $name;

  public function __construct(shape(
    ?'is_attached' => ?boolean,
    ?'name' => ?ResourceName,
  ) $s = shape()) {
    $this->is_attached = $s['is_attached'] ?? false;
    $this->name = $s['name'] ?? '';
  }
}

type LoadBalancerTlsCertificateSummaryList = vec<LoadBalancerTlsCertificateSummary>;

class LogEvent {
  public ?IsoDate $created_at;
  public ?string $message;

  public function __construct(shape(
    ?'created_at' => ?IsoDate,
    ?'message' => ?string,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->message = $s['message'] ?? '';
  }
}

type LogEventList = vec<LogEvent>;

class MetricDatapoint {
  public ?double $average;
  public ?double $maximum;
  public ?double $minimum;
  public ?double $sample_count;
  public ?double $sum;
  public ?timestamp $timestamp;
  public ?MetricUnit $unit;

  public function __construct(shape(
    ?'average' => ?double,
    ?'maximum' => ?double,
    ?'minimum' => ?double,
    ?'sample_count' => ?double,
    ?'sum' => ?double,
    ?'timestamp' => ?timestamp,
    ?'unit' => ?MetricUnit,
  ) $s = shape()) {
    $this->average = $s['average'] ?? 0.0;
    $this->maximum = $s['maximum'] ?? 0.0;
    $this->minimum = $s['minimum'] ?? 0.0;
    $this->sample_count = $s['sample_count'] ?? 0.0;
    $this->sum = $s['sum'] ?? 0.0;
    $this->timestamp = $s['timestamp'] ?? 0;
    $this->unit = $s['unit'] ?? '';
  }
}

type MetricDatapointList = vec<MetricDatapoint>;

type MetricName = string;

type MetricPeriod = int;

type MetricStatistic = string;

type MetricStatisticList = vec<MetricStatistic>;

type MetricUnit = string;

class MonitoredResourceInfo {
  public ?ResourceArn $arn;
  public ?ResourceName $name;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'arn' => ?ResourceArn,
    ?'name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class MonthlyTransfer {
  public ?integer $gb_per_month_allocated;

  public function __construct(shape(
    ?'gb_per_month_allocated' => ?integer,
  ) $s = shape()) {
    $this->gb_per_month_allocated = $s['gb_per_month_allocated'] ?? 0;
  }
}

type NetworkProtocol = string;

type NonEmptyString = string;

class NotFoundException {
  public ?string $code;
  public ?string $docs;
  public ?string $message;
  public ?string $tip;

  public function __construct(shape(
    ?'code' => ?string,
    ?'docs' => ?string,
    ?'message' => ?string,
    ?'tip' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->docs = $s['docs'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->tip = $s['tip'] ?? '';
  }
}

type NotificationTriggerList = vec<AlarmState>;

class OpenInstancePublicPortsRequest {
  public ?ResourceName $instance_name;
  public ?PortInfo $port_info;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
    ?'port_info' => ?PortInfo,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
    $this->port_info = $s['port_info'] ?? null;
  }
}

class OpenInstancePublicPortsResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class Operation {
  public ?IsoDate $created_at;
  public ?string $error_code;
  public ?string $error_details;
  public ?NonEmptyString $id;
  public ?boolean $is_terminal;
  public ?ResourceLocation $location;
  public ?string $operation_details;
  public ?OperationType $operation_type;
  public ?ResourceName $resource_name;
  public ?ResourceType $resource_type;
  public ?OperationStatus $status;
  public ?IsoDate $status_changed_at;

  public function __construct(shape(
    ?'created_at' => ?IsoDate,
    ?'error_code' => ?string,
    ?'error_details' => ?string,
    ?'id' => ?NonEmptyString,
    ?'is_terminal' => ?boolean,
    ?'location' => ?ResourceLocation,
    ?'operation_details' => ?string,
    ?'operation_type' => ?OperationType,
    ?'resource_name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
    ?'status' => ?OperationStatus,
    ?'status_changed_at' => ?IsoDate,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->error_code = $s['error_code'] ?? '';
    $this->error_details = $s['error_details'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->is_terminal = $s['is_terminal'] ?? false;
    $this->location = $s['location'] ?? null;
    $this->operation_details = $s['operation_details'] ?? '';
    $this->operation_type = $s['operation_type'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->status = $s['status'] ?? '';
    $this->status_changed_at = $s['status_changed_at'] ?? 0;
  }
}

class OperationFailureException {
  public ?string $code;
  public ?string $docs;
  public ?string $message;
  public ?string $tip;

  public function __construct(shape(
    ?'code' => ?string,
    ?'docs' => ?string,
    ?'message' => ?string,
    ?'tip' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->docs = $s['docs'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->tip = $s['tip'] ?? '';
  }
}

type OperationList = vec<Operation>;

type OperationStatus = string;

type OperationType = string;

class PasswordData {
  public ?string $ciphertext;
  public ?ResourceName $key_pair_name;

  public function __construct(shape(
    ?'ciphertext' => ?string,
    ?'key_pair_name' => ?ResourceName,
  ) $s = shape()) {
    $this->ciphertext = $s['ciphertext'] ?? '';
    $this->key_pair_name = $s['key_pair_name'] ?? '';
  }
}

class PeerVpcRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class PeerVpcResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class PendingMaintenanceAction {
  public ?NonEmptyString $action;
  public ?IsoDate $current_apply_date;
  public ?NonEmptyString $description;

  public function __construct(shape(
    ?'action' => ?NonEmptyString,
    ?'current_apply_date' => ?IsoDate,
    ?'description' => ?NonEmptyString,
  ) $s = shape()) {
    $this->action = $s['action'] ?? '';
    $this->current_apply_date = $s['current_apply_date'] ?? 0;
    $this->description = $s['description'] ?? '';
  }
}

type PendingMaintenanceActionList = vec<PendingMaintenanceAction>;

class PendingModifiedRelationalDatabaseValues {
  public ?boolean $backup_retention_enabled;
  public ?string $engine_version;
  public ?string $master_user_password;

  public function __construct(shape(
    ?'backup_retention_enabled' => ?boolean,
    ?'engine_version' => ?string,
    ?'master_user_password' => ?string,
  ) $s = shape()) {
    $this->backup_retention_enabled = $s['backup_retention_enabled'] ?? false;
    $this->engine_version = $s['engine_version'] ?? '';
    $this->master_user_password = $s['master_user_password'] ?? '';
  }
}

type Port = int;

type PortAccessType = string;

class PortInfo {
  public ?Port $from_port;
  public ?NetworkProtocol $protocol;
  public ?Port $to_port;

  public function __construct(shape(
    ?'from_port' => ?Port,
    ?'protocol' => ?NetworkProtocol,
    ?'to_port' => ?Port,
  ) $s = shape()) {
    $this->from_port = $s['from_port'] ?? 0;
    $this->protocol = $s['protocol'] ?? '';
    $this->to_port = $s['to_port'] ?? 0;
  }
}

type PortInfoList = vec<PortInfo>;

type PortInfoSourceType = string;

type PortList = vec<Port>;

type PortState = string;

class PutAlarmRequest {
  public ?ResourceName $alarm_name;
  public ?ComparisonOperator $comparison_operator;
  public ?ContactProtocolsList $contact_protocols;
  public ?integer $datapoints_to_alarm;
  public ?integer $evaluation_periods;
  public ?MetricName $metric_name;
  public ?ResourceName $monitored_resource_name;
  public ?boolean $notification_enabled;
  public ?NotificationTriggerList $notification_triggers;
  public ?double $threshold;
  public ?TreatMissingData $treat_missing_data;

  public function __construct(shape(
    ?'alarm_name' => ?ResourceName,
    ?'comparison_operator' => ?ComparisonOperator,
    ?'contact_protocols' => ?ContactProtocolsList,
    ?'datapoints_to_alarm' => ?integer,
    ?'evaluation_periods' => ?integer,
    ?'metric_name' => ?MetricName,
    ?'monitored_resource_name' => ?ResourceName,
    ?'notification_enabled' => ?boolean,
    ?'notification_triggers' => ?NotificationTriggerList,
    ?'threshold' => ?double,
    ?'treat_missing_data' => ?TreatMissingData,
  ) $s = shape()) {
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->contact_protocols = $s['contact_protocols'] ?? vec[];
    $this->datapoints_to_alarm = $s['datapoints_to_alarm'] ?? 0;
    $this->evaluation_periods = $s['evaluation_periods'] ?? 0;
    $this->metric_name = $s['metric_name'] ?? '';
    $this->monitored_resource_name = $s['monitored_resource_name'] ?? '';
    $this->notification_enabled = $s['notification_enabled'] ?? false;
    $this->notification_triggers = $s['notification_triggers'] ?? vec[];
    $this->threshold = $s['threshold'] ?? 0.0;
    $this->treat_missing_data = $s['treat_missing_data'] ?? '';
  }
}

class PutAlarmResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class PutInstancePublicPortsRequest {
  public ?ResourceName $instance_name;
  public ?PortInfoList $port_infos;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
    ?'port_infos' => ?PortInfoList,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
    $this->port_infos = $s['port_infos'] ?? vec[];
  }
}

class PutInstancePublicPortsResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class RebootInstanceRequest {
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class RebootInstanceResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class RebootRelationalDatabaseRequest {
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class RebootRelationalDatabaseResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

type RecordState = string;

class Region {
  public ?AvailabilityZoneList $availability_zones;
  public ?string $continent_code;
  public ?string $description;
  public ?string $display_name;
  public ?RegionName $name;
  public ?AvailabilityZoneList $relational_database_availability_zones;

  public function __construct(shape(
    ?'availability_zones' => ?AvailabilityZoneList,
    ?'continent_code' => ?string,
    ?'description' => ?string,
    ?'display_name' => ?string,
    ?'name' => ?RegionName,
    ?'relational_database_availability_zones' => ?AvailabilityZoneList,
  ) $s = shape()) {
    $this->availability_zones = $s['availability_zones'] ?? vec[];
    $this->continent_code = $s['continent_code'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->display_name = $s['display_name'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->relational_database_availability_zones = $s['relational_database_availability_zones'] ?? vec[];
  }
}

type RegionList = vec<Region>;

type RegionName = string;

class RelationalDatabase {
  public ?NonEmptyString $arn;
  public ?boolean $backup_retention_enabled;
  public ?string $ca_certificate_identifier;
  public ?IsoDate $created_at;
  public ?NonEmptyString $engine;
  public ?NonEmptyString $engine_version;
  public ?RelationalDatabaseHardware $hardware;
  public ?IsoDate $latest_restorable_time;
  public ?ResourceLocation $location;
  public ?string $master_database_name;
  public ?RelationalDatabaseEndpoint $master_endpoint;
  public ?NonEmptyString $master_username;
  public ?ResourceName $name;
  public ?NonEmptyString $parameter_apply_status;
  public ?PendingMaintenanceActionList $pending_maintenance_actions;
  public ?PendingModifiedRelationalDatabaseValues $pending_modified_values;
  public ?NonEmptyString $preferred_backup_window;
  public ?NonEmptyString $preferred_maintenance_window;
  public ?boolean $publicly_accessible;
  public ?NonEmptyString $relational_database_blueprint_id;
  public ?NonEmptyString $relational_database_bundle_id;
  public ?ResourceType $resource_type;
  public ?string $secondary_availability_zone;
  public ?NonEmptyString $state;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'backup_retention_enabled' => ?boolean,
    ?'ca_certificate_identifier' => ?string,
    ?'created_at' => ?IsoDate,
    ?'engine' => ?NonEmptyString,
    ?'engine_version' => ?NonEmptyString,
    ?'hardware' => ?RelationalDatabaseHardware,
    ?'latest_restorable_time' => ?IsoDate,
    ?'location' => ?ResourceLocation,
    ?'master_database_name' => ?string,
    ?'master_endpoint' => ?RelationalDatabaseEndpoint,
    ?'master_username' => ?NonEmptyString,
    ?'name' => ?ResourceName,
    ?'parameter_apply_status' => ?NonEmptyString,
    ?'pending_maintenance_actions' => ?PendingMaintenanceActionList,
    ?'pending_modified_values' => ?PendingModifiedRelationalDatabaseValues,
    ?'preferred_backup_window' => ?NonEmptyString,
    ?'preferred_maintenance_window' => ?NonEmptyString,
    ?'publicly_accessible' => ?boolean,
    ?'relational_database_blueprint_id' => ?NonEmptyString,
    ?'relational_database_bundle_id' => ?NonEmptyString,
    ?'resource_type' => ?ResourceType,
    ?'secondary_availability_zone' => ?string,
    ?'state' => ?NonEmptyString,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->backup_retention_enabled = $s['backup_retention_enabled'] ?? false;
    $this->ca_certificate_identifier = $s['ca_certificate_identifier'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->hardware = $s['hardware'] ?? null;
    $this->latest_restorable_time = $s['latest_restorable_time'] ?? 0;
    $this->location = $s['location'] ?? null;
    $this->master_database_name = $s['master_database_name'] ?? '';
    $this->master_endpoint = $s['master_endpoint'] ?? null;
    $this->master_username = $s['master_username'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->parameter_apply_status = $s['parameter_apply_status'] ?? '';
    $this->pending_maintenance_actions = $s['pending_maintenance_actions'] ?? vec[];
    $this->pending_modified_values = $s['pending_modified_values'] ?? null;
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->relational_database_blueprint_id = $s['relational_database_blueprint_id'] ?? '';
    $this->relational_database_bundle_id = $s['relational_database_bundle_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->secondary_availability_zone = $s['secondary_availability_zone'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class RelationalDatabaseBlueprint {
  public ?string $blueprint_id;
  public ?RelationalDatabaseEngine $engine;
  public ?string $engine_description;
  public ?string $engine_version;
  public ?string $engine_version_description;
  public ?boolean $is_engine_default;

  public function __construct(shape(
    ?'blueprint_id' => ?string,
    ?'engine' => ?RelationalDatabaseEngine,
    ?'engine_description' => ?string,
    ?'engine_version' => ?string,
    ?'engine_version_description' => ?string,
    ?'is_engine_default' => ?boolean,
  ) $s = shape()) {
    $this->blueprint_id = $s['blueprint_id'] ?? '';
    $this->engine = $s['engine'] ?? '';
    $this->engine_description = $s['engine_description'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->engine_version_description = $s['engine_version_description'] ?? '';
    $this->is_engine_default = $s['is_engine_default'] ?? false;
  }
}

type RelationalDatabaseBlueprintList = vec<RelationalDatabaseBlueprint>;

class RelationalDatabaseBundle {
  public ?string $bundle_id;
  public ?integer $cpu_count;
  public ?integer $disk_size_in_gb;
  public ?boolean $is_active;
  public ?boolean $is_encrypted;
  public ?string $name;
  public ?float $price;
  public ?float $ram_size_in_gb;
  public ?integer $transfer_per_month_in_gb;

  public function __construct(shape(
    ?'bundle_id' => ?string,
    ?'cpu_count' => ?integer,
    ?'disk_size_in_gb' => ?integer,
    ?'is_active' => ?boolean,
    ?'is_encrypted' => ?boolean,
    ?'name' => ?string,
    ?'price' => ?float,
    ?'ram_size_in_gb' => ?float,
    ?'transfer_per_month_in_gb' => ?integer,
  ) $s = shape()) {
    $this->bundle_id = $s['bundle_id'] ?? '';
    $this->cpu_count = $s['cpu_count'] ?? 0;
    $this->disk_size_in_gb = $s['disk_size_in_gb'] ?? 0;
    $this->is_active = $s['is_active'] ?? false;
    $this->is_encrypted = $s['is_encrypted'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->price = $s['price'] ?? 0.0;
    $this->ram_size_in_gb = $s['ram_size_in_gb'] ?? 0.0;
    $this->transfer_per_month_in_gb = $s['transfer_per_month_in_gb'] ?? 0;
  }
}

type RelationalDatabaseBundleList = vec<RelationalDatabaseBundle>;

class RelationalDatabaseEndpoint {
  public ?NonEmptyString $address;
  public ?integer $port;

  public function __construct(shape(
    ?'address' => ?NonEmptyString,
    ?'port' => ?integer,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->port = $s['port'] ?? 0;
  }
}

type RelationalDatabaseEngine = string;

class RelationalDatabaseEvent {
  public ?IsoDate $created_at;
  public ?StringList $event_categories;
  public ?string $message;
  public ?ResourceName $resource;

  public function __construct(shape(
    ?'created_at' => ?IsoDate,
    ?'event_categories' => ?StringList,
    ?'message' => ?string,
    ?'resource' => ?ResourceName,
  ) $s = shape()) {
    $this->created_at = $s['created_at'] ?? 0;
    $this->event_categories = $s['event_categories'] ?? vec[];
    $this->message = $s['message'] ?? '';
    $this->resource = $s['resource'] ?? '';
  }
}

type RelationalDatabaseEventList = vec<RelationalDatabaseEvent>;

class RelationalDatabaseHardware {
  public ?integer $cpu_count;
  public ?integer $disk_size_in_gb;
  public ?float $ram_size_in_gb;

  public function __construct(shape(
    ?'cpu_count' => ?integer,
    ?'disk_size_in_gb' => ?integer,
    ?'ram_size_in_gb' => ?float,
  ) $s = shape()) {
    $this->cpu_count = $s['cpu_count'] ?? 0;
    $this->disk_size_in_gb = $s['disk_size_in_gb'] ?? 0;
    $this->ram_size_in_gb = $s['ram_size_in_gb'] ?? 0.0;
  }
}

type RelationalDatabaseList = vec<RelationalDatabase>;

type RelationalDatabaseMetricName = string;

class RelationalDatabaseParameter {
  public ?string $allowed_values;
  public ?string $apply_method;
  public ?string $apply_type;
  public ?string $data_type;
  public ?string $description;
  public ?boolean $is_modifiable;
  public ?string $parameter_name;
  public ?string $parameter_value;

  public function __construct(shape(
    ?'allowed_values' => ?string,
    ?'apply_method' => ?string,
    ?'apply_type' => ?string,
    ?'data_type' => ?string,
    ?'description' => ?string,
    ?'is_modifiable' => ?boolean,
    ?'parameter_name' => ?string,
    ?'parameter_value' => ?string,
  ) $s = shape()) {
    $this->allowed_values = $s['allowed_values'] ?? '';
    $this->apply_method = $s['apply_method'] ?? '';
    $this->apply_type = $s['apply_type'] ?? '';
    $this->data_type = $s['data_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->is_modifiable = $s['is_modifiable'] ?? false;
    $this->parameter_name = $s['parameter_name'] ?? '';
    $this->parameter_value = $s['parameter_value'] ?? '';
  }
}

type RelationalDatabaseParameterList = vec<RelationalDatabaseParameter>;

type RelationalDatabasePasswordVersion = string;

class RelationalDatabaseSnapshot {
  public ?NonEmptyString $arn;
  public ?IsoDate $created_at;
  public ?NonEmptyString $engine;
  public ?NonEmptyString $engine_version;
  public ?NonEmptyString $from_relational_database_arn;
  public ?string $from_relational_database_blueprint_id;
  public ?string $from_relational_database_bundle_id;
  public ?NonEmptyString $from_relational_database_name;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?ResourceType $resource_type;
  public ?integer $size_in_gb;
  public ?NonEmptyString $state;
  public ?string $support_code;
  public ?TagList $tags;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'created_at' => ?IsoDate,
    ?'engine' => ?NonEmptyString,
    ?'engine_version' => ?NonEmptyString,
    ?'from_relational_database_arn' => ?NonEmptyString,
    ?'from_relational_database_blueprint_id' => ?string,
    ?'from_relational_database_bundle_id' => ?string,
    ?'from_relational_database_name' => ?NonEmptyString,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
    ?'size_in_gb' => ?integer,
    ?'state' => ?NonEmptyString,
    ?'support_code' => ?string,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->engine = $s['engine'] ?? '';
    $this->engine_version = $s['engine_version'] ?? '';
    $this->from_relational_database_arn = $s['from_relational_database_arn'] ?? '';
    $this->from_relational_database_blueprint_id = $s['from_relational_database_blueprint_id'] ?? '';
    $this->from_relational_database_bundle_id = $s['from_relational_database_bundle_id'] ?? '';
    $this->from_relational_database_name = $s['from_relational_database_name'] ?? '';
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->size_in_gb = $s['size_in_gb'] ?? 0;
    $this->state = $s['state'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type RelationalDatabaseSnapshotList = vec<RelationalDatabaseSnapshot>;

class ReleaseStaticIpRequest {
  public ?ResourceName $static_ip_name;

  public function __construct(shape(
    ?'static_ip_name' => ?ResourceName,
  ) $s = shape()) {
    $this->static_ip_name = $s['static_ip_name'] ?? '';
  }
}

class ReleaseStaticIpResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

type ResourceArn = string;

class ResourceLocation {
  public ?string $availability_zone;
  public ?RegionName $region_name;

  public function __construct(shape(
    ?'availability_zone' => ?string,
    ?'region_name' => ?RegionName,
  ) $s = shape()) {
    $this->availability_zone = $s['availability_zone'] ?? '';
    $this->region_name = $s['region_name'] ?? '';
  }
}

type ResourceName = string;

type ResourceNameList = vec<ResourceName>;

type ResourceType = string;

class SendContactMethodVerificationRequest {
  public ?ContactMethodVerificationProtocol $protocol;

  public function __construct(shape(
    ?'protocol' => ?ContactMethodVerificationProtocol,
  ) $s = shape()) {
    $this->protocol = $s['protocol'] ?? '';
  }
}

class SendContactMethodVerificationResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

type SensitiveString = string;

class ServiceException {
  public ?string $code;
  public ?string $docs;
  public ?string $message;
  public ?string $tip;

  public function __construct(shape(
    ?'code' => ?string,
    ?'docs' => ?string,
    ?'message' => ?string,
    ?'tip' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->docs = $s['docs'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->tip = $s['tip'] ?? '';
  }
}

class StartInstanceRequest {
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class StartInstanceResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class StartRelationalDatabaseRequest {
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class StartRelationalDatabaseResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class StaticIp {
  public ?NonEmptyString $arn;
  public ?ResourceName $attached_to;
  public ?IsoDate $created_at;
  public ?IpAddress $ip_address;
  public ?boolean $is_attached;
  public ?ResourceLocation $location;
  public ?ResourceName $name;
  public ?ResourceType $resource_type;
  public ?string $support_code;

  public function __construct(shape(
    ?'arn' => ?NonEmptyString,
    ?'attached_to' => ?ResourceName,
    ?'created_at' => ?IsoDate,
    ?'ip_address' => ?IpAddress,
    ?'is_attached' => ?boolean,
    ?'location' => ?ResourceLocation,
    ?'name' => ?ResourceName,
    ?'resource_type' => ?ResourceType,
    ?'support_code' => ?string,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->attached_to = $s['attached_to'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->ip_address = $s['ip_address'] ?? '';
    $this->is_attached = $s['is_attached'] ?? false;
    $this->location = $s['location'] ?? null;
    $this->name = $s['name'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
    $this->support_code = $s['support_code'] ?? '';
  }
}

type StaticIpList = vec<StaticIp>;

class StopInstanceRequest {
  public ?boolean $force;
  public ?ResourceName $instance_name;

  public function __construct(shape(
    ?'force' => ?boolean,
    ?'instance_name' => ?ResourceName,
  ) $s = shape()) {
    $this->force = $s['force'] ?? false;
    $this->instance_name = $s['instance_name'] ?? '';
  }
}

class StopInstanceResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class StopRelationalDatabaseRequest {
  public ?ResourceName $relational_database_name;
  public ?ResourceName $relational_database_snapshot_name;

  public function __construct(shape(
    ?'relational_database_name' => ?ResourceName,
    ?'relational_database_snapshot_name' => ?ResourceName,
  ) $s = shape()) {
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->relational_database_snapshot_name = $s['relational_database_snapshot_name'] ?? '';
  }
}

class StopRelationalDatabaseResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

type StringList = vec<string>;

type StringMax256 = string;

class Tag {
  public ?TagKey $key;
  public ?TagValue $value;

  public function __construct(shape(
    ?'key' => ?TagKey,
    ?'value' => ?TagValue,
  ) $s = shape()) {
    $this->key = $s['key'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type TagKey = string;

type TagKeyList = vec<TagKey>;

type TagList = vec<Tag>;

class TagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?ResourceName $resource_name;
  public ?TagList $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'resource_name' => ?ResourceName,
    ?'tags' => ?TagList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class TagResourceResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

type TagValue = string;

class TestAlarmRequest {
  public ?ResourceName $alarm_name;
  public ?AlarmState $state;

  public function __construct(shape(
    ?'alarm_name' => ?ResourceName,
    ?'state' => ?AlarmState,
  ) $s = shape()) {
    $this->alarm_name = $s['alarm_name'] ?? '';
    $this->state = $s['state'] ?? '';
  }
}

class TestAlarmResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

type TimeOfDay = string;

type TreatMissingData = string;

class UnauthenticatedException {
  public ?string $code;
  public ?string $docs;
  public ?string $message;
  public ?string $tip;

  public function __construct(shape(
    ?'code' => ?string,
    ?'docs' => ?string,
    ?'message' => ?string,
    ?'tip' => ?string,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->docs = $s['docs'] ?? '';
    $this->message = $s['message'] ?? '';
    $this->tip = $s['tip'] ?? '';
  }
}

class UnpeerVpcRequest {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UnpeerVpcResult {
  public ?Operation $operation;

  public function __construct(shape(
    ?'operation' => ?Operation,
  ) $s = shape()) {
    $this->operation = $s['operation'] ?? null;
  }
}

class UntagResourceRequest {
  public ?ResourceArn $resource_arn;
  public ?ResourceName $resource_name;
  public ?TagKeyList $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceArn,
    ?'resource_name' => ?ResourceName,
    ?'tag_keys' => ?TagKeyList,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->resource_name = $s['resource_name'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UntagResourceResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class UpdateDomainEntryRequest {
  public ?DomainEntry $domain_entry;
  public ?DomainName $domain_name;

  public function __construct(shape(
    ?'domain_entry' => ?DomainEntry,
    ?'domain_name' => ?DomainName,
  ) $s = shape()) {
    $this->domain_entry = $s['domain_entry'] ?? null;
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class UpdateDomainEntryResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class UpdateLoadBalancerAttributeRequest {
  public ?LoadBalancerAttributeName $attribute_name;
  public ?StringMax256 $attribute_value;
  public ?ResourceName $load_balancer_name;

  public function __construct(shape(
    ?'attribute_name' => ?LoadBalancerAttributeName,
    ?'attribute_value' => ?StringMax256,
    ?'load_balancer_name' => ?ResourceName,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->attribute_value = $s['attribute_value'] ?? '';
    $this->load_balancer_name = $s['load_balancer_name'] ?? '';
  }
}

class UpdateLoadBalancerAttributeResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class UpdateRelationalDatabaseParametersRequest {
  public ?RelationalDatabaseParameterList $parameters;
  public ?ResourceName $relational_database_name;

  public function __construct(shape(
    ?'parameters' => ?RelationalDatabaseParameterList,
    ?'relational_database_name' => ?ResourceName,
  ) $s = shape()) {
    $this->parameters = $s['parameters'] ?? vec[];
    $this->relational_database_name = $s['relational_database_name'] ?? '';
  }
}

class UpdateRelationalDatabaseParametersResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

class UpdateRelationalDatabaseRequest {
  public ?boolean $apply_immediately;
  public ?string $ca_certificate_identifier;
  public ?boolean $disable_backup_retention;
  public ?boolean $enable_backup_retention;
  public ?SensitiveString $master_user_password;
  public ?string $preferred_backup_window;
  public ?string $preferred_maintenance_window;
  public ?boolean $publicly_accessible;
  public ?ResourceName $relational_database_name;
  public ?boolean $rotate_master_user_password;

  public function __construct(shape(
    ?'apply_immediately' => ?boolean,
    ?'ca_certificate_identifier' => ?string,
    ?'disable_backup_retention' => ?boolean,
    ?'enable_backup_retention' => ?boolean,
    ?'master_user_password' => ?SensitiveString,
    ?'preferred_backup_window' => ?string,
    ?'preferred_maintenance_window' => ?string,
    ?'publicly_accessible' => ?boolean,
    ?'relational_database_name' => ?ResourceName,
    ?'rotate_master_user_password' => ?boolean,
  ) $s = shape()) {
    $this->apply_immediately = $s['apply_immediately'] ?? false;
    $this->ca_certificate_identifier = $s['ca_certificate_identifier'] ?? '';
    $this->disable_backup_retention = $s['disable_backup_retention'] ?? false;
    $this->enable_backup_retention = $s['enable_backup_retention'] ?? false;
    $this->master_user_password = $s['master_user_password'] ?? '';
    $this->preferred_backup_window = $s['preferred_backup_window'] ?? '';
    $this->preferred_maintenance_window = $s['preferred_maintenance_window'] ?? '';
    $this->publicly_accessible = $s['publicly_accessible'] ?? false;
    $this->relational_database_name = $s['relational_database_name'] ?? '';
    $this->rotate_master_user_password = $s['rotate_master_user_password'] ?? false;
  }
}

class UpdateRelationalDatabaseResult {
  public ?OperationList $operations;

  public function __construct(shape(
    ?'operations' => ?OperationList,
  ) $s = shape()) {
    $this->operations = $s['operations'] ?? vec[];
  }
}

type boolean = bool;

type double = float;

type float = float;

type integer = int;

type string = string;

type timestamp = int;

