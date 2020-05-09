<?hh // strict
namespace slack\aws\storagegateway;

interface Storage Gateway {
  public function ActivateGateway(ActivateGatewayInput): Awaitable<Errors\Result<ActivateGatewayOutput>>;
  public function AddCache(AddCacheInput): Awaitable<Errors\Result<AddCacheOutput>>;
  public function AddTagsToResource(AddTagsToResourceInput): Awaitable<Errors\Result<AddTagsToResourceOutput>>;
  public function AddUploadBuffer(AddUploadBufferInput): Awaitable<Errors\Result<AddUploadBufferOutput>>;
  public function AddWorkingStorage(AddWorkingStorageInput): Awaitable<Errors\Result<AddWorkingStorageOutput>>;
  public function AssignTapePool(AssignTapePoolInput): Awaitable<Errors\Result<AssignTapePoolOutput>>;
  public function AttachVolume(AttachVolumeInput): Awaitable<Errors\Result<AttachVolumeOutput>>;
  public function CancelArchival(CancelArchivalInput): Awaitable<Errors\Result<CancelArchivalOutput>>;
  public function CancelRetrieval(CancelRetrievalInput): Awaitable<Errors\Result<CancelRetrievalOutput>>;
  public function CreateCachediSCSIVolume(CreateCachediSCSIVolumeInput): Awaitable<Errors\Result<CreateCachediSCSIVolumeOutput>>;
  public function CreateNFSFileShare(CreateNFSFileShareInput): Awaitable<Errors\Result<CreateNFSFileShareOutput>>;
  public function CreateSMBFileShare(CreateSMBFileShareInput): Awaitable<Errors\Result<CreateSMBFileShareOutput>>;
  public function CreateSnapshot(CreateSnapshotInput): Awaitable<Errors\Result<CreateSnapshotOutput>>;
  public function CreateSnapshotFromVolumeRecoveryPoint(CreateSnapshotFromVolumeRecoveryPointInput): Awaitable<Errors\Result<CreateSnapshotFromVolumeRecoveryPointOutput>>;
  public function CreateStorediSCSIVolume(CreateStorediSCSIVolumeInput): Awaitable<Errors\Result<CreateStorediSCSIVolumeOutput>>;
  public function CreateTapeWithBarcode(CreateTapeWithBarcodeInput): Awaitable<Errors\Result<CreateTapeWithBarcodeOutput>>;
  public function CreateTapes(CreateTapesInput): Awaitable<Errors\Result<CreateTapesOutput>>;
  public function DeleteAutomaticTapeCreationPolicy(DeleteAutomaticTapeCreationPolicyInput): Awaitable<Errors\Result<DeleteAutomaticTapeCreationPolicyOutput>>;
  public function DeleteBandwidthRateLimit(DeleteBandwidthRateLimitInput): Awaitable<Errors\Result<DeleteBandwidthRateLimitOutput>>;
  public function DeleteChapCredentials(DeleteChapCredentialsInput): Awaitable<Errors\Result<DeleteChapCredentialsOutput>>;
  public function DeleteFileShare(DeleteFileShareInput): Awaitable<Errors\Result<DeleteFileShareOutput>>;
  public function DeleteGateway(DeleteGatewayInput): Awaitable<Errors\Result<DeleteGatewayOutput>>;
  public function DeleteSnapshotSchedule(DeleteSnapshotScheduleInput): Awaitable<Errors\Result<DeleteSnapshotScheduleOutput>>;
  public function DeleteTape(DeleteTapeInput): Awaitable<Errors\Result<DeleteTapeOutput>>;
  public function DeleteTapeArchive(DeleteTapeArchiveInput): Awaitable<Errors\Result<DeleteTapeArchiveOutput>>;
  public function DeleteVolume(DeleteVolumeInput): Awaitable<Errors\Result<DeleteVolumeOutput>>;
  public function DescribeAvailabilityMonitorTest(DescribeAvailabilityMonitorTestInput): Awaitable<Errors\Result<DescribeAvailabilityMonitorTestOutput>>;
  public function DescribeBandwidthRateLimit(DescribeBandwidthRateLimitInput): Awaitable<Errors\Result<DescribeBandwidthRateLimitOutput>>;
  public function DescribeCache(DescribeCacheInput): Awaitable<Errors\Result<DescribeCacheOutput>>;
  public function DescribeCachediSCSIVolumes(DescribeCachediSCSIVolumesInput): Awaitable<Errors\Result<DescribeCachediSCSIVolumesOutput>>;
  public function DescribeChapCredentials(DescribeChapCredentialsInput): Awaitable<Errors\Result<DescribeChapCredentialsOutput>>;
  public function DescribeGatewayInformation(DescribeGatewayInformationInput): Awaitable<Errors\Result<DescribeGatewayInformationOutput>>;
  public function DescribeMaintenanceStartTime(DescribeMaintenanceStartTimeInput): Awaitable<Errors\Result<DescribeMaintenanceStartTimeOutput>>;
  public function DescribeNFSFileShares(DescribeNFSFileSharesInput): Awaitable<Errors\Result<DescribeNFSFileSharesOutput>>;
  public function DescribeSMBFileShares(DescribeSMBFileSharesInput): Awaitable<Errors\Result<DescribeSMBFileSharesOutput>>;
  public function DescribeSMBSettings(DescribeSMBSettingsInput): Awaitable<Errors\Result<DescribeSMBSettingsOutput>>;
  public function DescribeSnapshotSchedule(DescribeSnapshotScheduleInput): Awaitable<Errors\Result<DescribeSnapshotScheduleOutput>>;
  public function DescribeStorediSCSIVolumes(DescribeStorediSCSIVolumesInput): Awaitable<Errors\Result<DescribeStorediSCSIVolumesOutput>>;
  public function DescribeTapeArchives(DescribeTapeArchivesInput): Awaitable<Errors\Result<DescribeTapeArchivesOutput>>;
  public function DescribeTapeRecoveryPoints(DescribeTapeRecoveryPointsInput): Awaitable<Errors\Result<DescribeTapeRecoveryPointsOutput>>;
  public function DescribeTapes(DescribeTapesInput): Awaitable<Errors\Result<DescribeTapesOutput>>;
  public function DescribeUploadBuffer(DescribeUploadBufferInput): Awaitable<Errors\Result<DescribeUploadBufferOutput>>;
  public function DescribeVTLDevices(DescribeVTLDevicesInput): Awaitable<Errors\Result<DescribeVTLDevicesOutput>>;
  public function DescribeWorkingStorage(DescribeWorkingStorageInput): Awaitable<Errors\Result<DescribeWorkingStorageOutput>>;
  public function DetachVolume(DetachVolumeInput): Awaitable<Errors\Result<DetachVolumeOutput>>;
  public function DisableGateway(DisableGatewayInput): Awaitable<Errors\Result<DisableGatewayOutput>>;
  public function JoinDomain(JoinDomainInput): Awaitable<Errors\Result<JoinDomainOutput>>;
  public function ListAutomaticTapeCreationPolicies(ListAutomaticTapeCreationPoliciesInput): Awaitable<Errors\Result<ListAutomaticTapeCreationPoliciesOutput>>;
  public function ListFileShares(ListFileSharesInput): Awaitable<Errors\Result<ListFileSharesOutput>>;
  public function ListGateways(ListGatewaysInput): Awaitable<Errors\Result<ListGatewaysOutput>>;
  public function ListLocalDisks(ListLocalDisksInput): Awaitable<Errors\Result<ListLocalDisksOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput): Awaitable<Errors\Result<ListTagsForResourceOutput>>;
  public function ListTapes(ListTapesInput): Awaitable<Errors\Result<ListTapesOutput>>;
  public function ListVolumeInitiators(ListVolumeInitiatorsInput): Awaitable<Errors\Result<ListVolumeInitiatorsOutput>>;
  public function ListVolumeRecoveryPoints(ListVolumeRecoveryPointsInput): Awaitable<Errors\Result<ListVolumeRecoveryPointsOutput>>;
  public function ListVolumes(ListVolumesInput): Awaitable<Errors\Result<ListVolumesOutput>>;
  public function NotifyWhenUploaded(NotifyWhenUploadedInput): Awaitable<Errors\Result<NotifyWhenUploadedOutput>>;
  public function RefreshCache(RefreshCacheInput): Awaitable<Errors\Result<RefreshCacheOutput>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceInput): Awaitable<Errors\Result<RemoveTagsFromResourceOutput>>;
  public function ResetCache(ResetCacheInput): Awaitable<Errors\Result<ResetCacheOutput>>;
  public function RetrieveTapeArchive(RetrieveTapeArchiveInput): Awaitable<Errors\Result<RetrieveTapeArchiveOutput>>;
  public function RetrieveTapeRecoveryPoint(RetrieveTapeRecoveryPointInput): Awaitable<Errors\Result<RetrieveTapeRecoveryPointOutput>>;
  public function SetLocalConsolePassword(SetLocalConsolePasswordInput): Awaitable<Errors\Result<SetLocalConsolePasswordOutput>>;
  public function SetSMBGuestPassword(SetSMBGuestPasswordInput): Awaitable<Errors\Result<SetSMBGuestPasswordOutput>>;
  public function ShutdownGateway(ShutdownGatewayInput): Awaitable<Errors\Result<ShutdownGatewayOutput>>;
  public function StartAvailabilityMonitorTest(StartAvailabilityMonitorTestInput): Awaitable<Errors\Result<StartAvailabilityMonitorTestOutput>>;
  public function StartGateway(StartGatewayInput): Awaitable<Errors\Result<StartGatewayOutput>>;
  public function UpdateAutomaticTapeCreationPolicy(UpdateAutomaticTapeCreationPolicyInput): Awaitable<Errors\Result<UpdateAutomaticTapeCreationPolicyOutput>>;
  public function UpdateBandwidthRateLimit(UpdateBandwidthRateLimitInput): Awaitable<Errors\Result<UpdateBandwidthRateLimitOutput>>;
  public function UpdateChapCredentials(UpdateChapCredentialsInput): Awaitable<Errors\Result<UpdateChapCredentialsOutput>>;
  public function UpdateGatewayInformation(UpdateGatewayInformationInput): Awaitable<Errors\Result<UpdateGatewayInformationOutput>>;
  public function UpdateGatewaySoftwareNow(UpdateGatewaySoftwareNowInput): Awaitable<Errors\Result<UpdateGatewaySoftwareNowOutput>>;
  public function UpdateMaintenanceStartTime(UpdateMaintenanceStartTimeInput): Awaitable<Errors\Result<UpdateMaintenanceStartTimeOutput>>;
  public function UpdateNFSFileShare(UpdateNFSFileShareInput): Awaitable<Errors\Result<UpdateNFSFileShareOutput>>;
  public function UpdateSMBFileShare(UpdateSMBFileShareInput): Awaitable<Errors\Result<UpdateSMBFileShareOutput>>;
  public function UpdateSMBSecurityStrategy(UpdateSMBSecurityStrategyInput): Awaitable<Errors\Result<UpdateSMBSecurityStrategyOutput>>;
  public function UpdateSnapshotSchedule(UpdateSnapshotScheduleInput): Awaitable<Errors\Result<UpdateSnapshotScheduleOutput>>;
  public function UpdateVTLDeviceType(UpdateVTLDeviceTypeInput): Awaitable<Errors\Result<UpdateVTLDeviceTypeOutput>>;
}

class ActivateGatewayInput {
  public ActivationKey $activation_key;
  public GatewayName $gateway_name;
  public RegionId $gateway_region;
  public GatewayTimezone $gateway_timezone;
  public GatewayType $gateway_type;
  public MediumChangerType $medium_changer_type;
  public Tags $tags;
  public TapeDriveType $tape_drive_type;
}

class ActivateGatewayOutput {
  public GatewayARN $gateway_arn;
}

class ActivationKey {
}

class ActiveDirectoryStatus {
}

class AddCacheInput {
  public DiskIds $disk_ids;
  public GatewayARN $gateway_arn;
}

class AddCacheOutput {
  public GatewayARN $gateway_arn;
}

class AddTagsToResourceInput {
  public ResourceARN $resource_arn;
  public Tags $tags;
}

class AddTagsToResourceOutput {
  public ResourceARN $resource_arn;
}

class AddUploadBufferInput {
  public DiskIds $disk_ids;
  public GatewayARN $gateway_arn;
}

class AddUploadBufferOutput {
  public GatewayARN $gateway_arn;
}

class AddWorkingStorageInput {
  public DiskIds $disk_ids;
  public GatewayARN $gateway_arn;
}

class AddWorkingStorageOutput {
  public GatewayARN $gateway_arn;
}

class AssignTapePoolInput {
  public PoolId $pool_id;
  public TapeARN $tape_arn;
}

class AssignTapePoolOutput {
  public TapeARN $tape_arn;
}

class AttachVolumeInput {
  public DiskId $disk_id;
  public GatewayARN $gateway_arn;
  public NetworkInterfaceId $network_interface_id;
  public TargetName $target_name;
  public VolumeARN $volume_arn;
}

class AttachVolumeOutput {
  public TargetARN $target_arn;
  public VolumeARN $volume_arn;
}

class AuditDestinationARN {
}

class Authentication {
}

class AutomaticTapeCreationPolicyInfo {
  public AutomaticTapeCreationRules $automatic_tape_creation_rules;
  public GatewayARN $gateway_arn;
}

class AutomaticTapeCreationPolicyInfos {
}

class AutomaticTapeCreationRule {
  public MinimumNumTapes $minimum_num_tapes;
  public PoolId $pool_id;
  public TapeBarcodePrefix $tape_barcode_prefix;
  public TapeSize $tape_size_in_bytes;
}

class AutomaticTapeCreationRules {
}

class AvailabilityMonitorTestStatus {
}

class BandwidthDownloadRateLimit {
}

class BandwidthType {
}

class BandwidthUploadRateLimit {
}

class Boolean {
}

class CachediSCSIVolume {
  public CreatedDate $created_date;
  public KMSKey $kms_key;
  public SnapshotId $source_snapshot_id;
  public TargetName $target_name;
  public VolumeARN $volume_arn;
  public VolumeAttachmentStatus $volume_attachment_status;
  public VolumeId $volume_id;
  public DoubleObject $volume_progress;
  public long $volume_size_in_bytes;
  public VolumeStatus $volume_status;
  public VolumeType $volume_type;
  public VolumeUsedInBytes $volume_used_in_bytes;
  public VolumeiSCSIAttributes $volumei_scsi_attributes;
}

class CachediSCSIVolumes {
}

class CancelArchivalInput {
  public GatewayARN $gateway_arn;
  public TapeARN $tape_arn;
}

class CancelArchivalOutput {
  public TapeARN $tape_arn;
}

class CancelRetrievalInput {
  public GatewayARN $gateway_arn;
  public TapeARN $tape_arn;
}

class CancelRetrievalOutput {
  public TapeARN $tape_arn;
}

class ChapCredentials {
}

class ChapInfo {
  public IqnName $initiator_name;
  public ChapSecret $secret_to_authenticate_initiator;
  public ChapSecret $secret_to_authenticate_target;
  public TargetARN $target_arn;
}

class ChapSecret {
}

class ClientToken {
}

class CloudWatchLogGroupARN {
}

class CreateCachediSCSIVolumeInput {
  public ClientToken $client_token;
  public GatewayARN $gateway_arn;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public NetworkInterfaceId $network_interface_id;
  public SnapshotId $snapshot_id;
  public VolumeARN $source_volume_arn;
  public Tags $tags;
  public TargetName $target_name;
  public long $volume_size_in_bytes;
}

class CreateCachediSCSIVolumeOutput {
  public TargetARN $target_arn;
  public VolumeARN $volume_arn;
}

class CreateNFSFileShareInput {
  public FileShareClientList $client_list;
  public ClientToken $client_token;
  public StorageClass $default_storage_class;
  public GatewayARN $gateway_arn;
  public boolean $guess_mime_type_enabled;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public LocationARN $location_arn;
  public NFSFileShareDefaults $nfs_file_share_defaults;
  public ObjectACL $object_acl;
  public boolean $read_only;
  public boolean $requester_pays;
  public Role $role;
  public Squash $squash;
  public Tags $tags;
}

class CreateNFSFileShareOutput {
  public FileShareARN $file_share_arn;
}

class CreateSMBFileShareInput {
  public FileShareUserList $admin_user_list;
  public AuditDestinationARN $audit_destination_arn;
  public Authentication $authentication;
  public ClientToken $client_token;
  public StorageClass $default_storage_class;
  public GatewayARN $gateway_arn;
  public boolean $guess_mime_type_enabled;
  public FileShareUserList $invalid_user_list;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public LocationARN $location_arn;
  public ObjectACL $object_acl;
  public boolean $read_only;
  public boolean $requester_pays;
  public Role $role;
  public boolean $smbacl_enabled;
  public Tags $tags;
  public FileShareUserList $valid_user_list;
}

class CreateSMBFileShareOutput {
  public FileShareARN $file_share_arn;
}

class CreateSnapshotFromVolumeRecoveryPointInput {
  public SnapshotDescription $snapshot_description;
  public Tags $tags;
  public VolumeARN $volume_arn;
}

class CreateSnapshotFromVolumeRecoveryPointOutput {
  public SnapshotId $snapshot_id;
  public VolumeARN $volume_arn;
  public string $volume_recovery_point_time;
}

class CreateSnapshotInput {
  public SnapshotDescription $snapshot_description;
  public Tags $tags;
  public VolumeARN $volume_arn;
}

class CreateSnapshotOutput {
  public SnapshotId $snapshot_id;
  public VolumeARN $volume_arn;
}

class CreateStorediSCSIVolumeInput {
  public DiskId $disk_id;
  public GatewayARN $gateway_arn;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public NetworkInterfaceId $network_interface_id;
  public boolean $preserve_existing_data;
  public SnapshotId $snapshot_id;
  public Tags $tags;
  public TargetName $target_name;
}

class CreateStorediSCSIVolumeOutput {
  public TargetARN $target_arn;
  public VolumeARN $volume_arn;
  public long $volume_size_in_bytes;
}

class CreateTapeWithBarcodeInput {
  public GatewayARN $gateway_arn;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public PoolId $pool_id;
  public Tags $tags;
  public TapeBarcode $tape_barcode;
  public TapeSize $tape_size_in_bytes;
}

class CreateTapeWithBarcodeOutput {
  public TapeARN $tape_arn;
}

class CreateTapesInput {
  public ClientToken $client_token;
  public GatewayARN $gateway_arn;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public NumTapesToCreate $num_tapes_to_create;
  public PoolId $pool_id;
  public Tags $tags;
  public TapeBarcodePrefix $tape_barcode_prefix;
  public TapeSize $tape_size_in_bytes;
}

class CreateTapesOutput {
  public TapeARNs $tape_ar_ns;
}

class CreatedDate {
}

class DayOfMonth {
}

class DayOfWeek {
}

class DeleteAutomaticTapeCreationPolicyInput {
  public GatewayARN $gateway_arn;
}

class DeleteAutomaticTapeCreationPolicyOutput {
  public GatewayARN $gateway_arn;
}

class DeleteBandwidthRateLimitInput {
  public BandwidthType $bandwidth_type;
  public GatewayARN $gateway_arn;
}

class DeleteBandwidthRateLimitOutput {
  public GatewayARN $gateway_arn;
}

class DeleteChapCredentialsInput {
  public IqnName $initiator_name;
  public TargetARN $target_arn;
}

class DeleteChapCredentialsOutput {
  public IqnName $initiator_name;
  public TargetARN $target_arn;
}

class DeleteFileShareInput {
  public FileShareARN $file_share_arn;
  public boolean $force_delete;
}

class DeleteFileShareOutput {
  public FileShareARN $file_share_arn;
}

class DeleteGatewayInput {
  public GatewayARN $gateway_arn;
}

class DeleteGatewayOutput {
  public GatewayARN $gateway_arn;
}

class DeleteSnapshotScheduleInput {
  public VolumeARN $volume_arn;
}

class DeleteSnapshotScheduleOutput {
  public VolumeARN $volume_arn;
}

class DeleteTapeArchiveInput {
  public TapeARN $tape_arn;
}

class DeleteTapeArchiveOutput {
  public TapeARN $tape_arn;
}

class DeleteTapeInput {
  public GatewayARN $gateway_arn;
  public TapeARN $tape_arn;
}

class DeleteTapeOutput {
  public TapeARN $tape_arn;
}

class DeleteVolumeInput {
  public VolumeARN $volume_arn;
}

class DeleteVolumeOutput {
  public VolumeARN $volume_arn;
}

class DescribeAvailabilityMonitorTestInput {
  public GatewayARN $gateway_arn;
}

class DescribeAvailabilityMonitorTestOutput {
  public GatewayARN $gateway_arn;
  public Time $start_time;
  public AvailabilityMonitorTestStatus $status;
}

class DescribeBandwidthRateLimitInput {
  public GatewayARN $gateway_arn;
}

class DescribeBandwidthRateLimitOutput {
  public BandwidthDownloadRateLimit $average_download_rate_limit_in_bits_per_sec;
  public BandwidthUploadRateLimit $average_upload_rate_limit_in_bits_per_sec;
  public GatewayARN $gateway_arn;
}

class DescribeCacheInput {
  public GatewayARN $gateway_arn;
}

class DescribeCacheOutput {
  public long $cache_allocated_in_bytes;
  public double $cache_dirty_percentage;
  public double $cache_hit_percentage;
  public double $cache_miss_percentage;
  public double $cache_used_percentage;
  public DiskIds $disk_ids;
  public GatewayARN $gateway_arn;
}

class DescribeCachediSCSIVolumesInput {
  public VolumeARNs $volume_ar_ns;
}

class DescribeCachediSCSIVolumesOutput {
  public CachediSCSIVolumes $cachedi_scsi_volumes;
}

class DescribeChapCredentialsInput {
  public TargetARN $target_arn;
}

class DescribeChapCredentialsOutput {
  public ChapCredentials $chap_credentials;
}

class DescribeGatewayInformationInput {
  public GatewayARN $gateway_arn;
}

class DescribeGatewayInformationOutput {
  public CloudWatchLogGroupARN $cloud_watch_log_group_arn;
  public Ec2InstanceId $ec_2_instance_id;
  public Ec2InstanceRegion $ec_2_instance_region;
  public GatewayARN $gateway_arn;
  public GatewayId $gateway_id;
  public string $gateway_name;
  public GatewayNetworkInterfaces $gateway_network_interfaces;
  public GatewayState $gateway_state;
  public GatewayTimezone $gateway_timezone;
  public GatewayType $gateway_type;
  public HostEnvironment $host_environment;
  public LastSoftwareUpdate $last_software_update;
  public NextUpdateAvailabilityDate $next_update_availability_date;
  public Tags $tags;
  public string $vpc_endpoint;
}

class DescribeMaintenanceStartTimeInput {
  public GatewayARN $gateway_arn;
}

class DescribeMaintenanceStartTimeOutput {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public GatewayARN $gateway_arn;
  public HourOfDay $hour_of_day;
  public MinuteOfHour $minute_of_hour;
  public GatewayTimezone $timezone;
}

class DescribeNFSFileSharesInput {
  public FileShareARNList $file_share_arn_list;
}

class DescribeNFSFileSharesOutput {
  public NFSFileShareInfoList $nfs_file_share_info_list;
}

class DescribeSMBFileSharesInput {
  public FileShareARNList $file_share_arn_list;
}

class DescribeSMBFileSharesOutput {
  public SMBFileShareInfoList $smb_file_share_info_list;
}

class DescribeSMBSettingsInput {
  public GatewayARN $gateway_arn;
}

class DescribeSMBSettingsOutput {
  public ActiveDirectoryStatus $active_directory_status;
  public DomainName $domain_name;
  public GatewayARN $gateway_arn;
  public boolean $smb_guest_password_set;
  public SMBSecurityStrategy $smb_security_strategy;
}

class DescribeSnapshotScheduleInput {
  public VolumeARN $volume_arn;
}

class DescribeSnapshotScheduleOutput {
  public Description $description;
  public RecurrenceInHours $recurrence_in_hours;
  public HourOfDay $start_at;
  public Tags $tags;
  public GatewayTimezone $timezone;
  public VolumeARN $volume_arn;
}

class DescribeStorediSCSIVolumesInput {
  public VolumeARNs $volume_ar_ns;
}

class DescribeStorediSCSIVolumesOutput {
  public StorediSCSIVolumes $storedi_scsi_volumes;
}

class DescribeTapeArchivesInput {
  public PositiveIntObject $limit;
  public Marker $marker;
  public TapeARNs $tape_ar_ns;
}

class DescribeTapeArchivesOutput {
  public Marker $marker;
  public TapeArchives $tape_archives;
}

class DescribeTapeRecoveryPointsInput {
  public GatewayARN $gateway_arn;
  public PositiveIntObject $limit;
  public Marker $marker;
}

class DescribeTapeRecoveryPointsOutput {
  public GatewayARN $gateway_arn;
  public Marker $marker;
  public TapeRecoveryPointInfos $tape_recovery_point_infos;
}

class DescribeTapesInput {
  public GatewayARN $gateway_arn;
  public PositiveIntObject $limit;
  public Marker $marker;
  public TapeARNs $tape_ar_ns;
}

class DescribeTapesOutput {
  public Marker $marker;
  public Tapes $tapes;
}

class DescribeUploadBufferInput {
  public GatewayARN $gateway_arn;
}

class DescribeUploadBufferOutput {
  public DiskIds $disk_ids;
  public GatewayARN $gateway_arn;
  public long $upload_buffer_allocated_in_bytes;
  public long $upload_buffer_used_in_bytes;
}

class DescribeVTLDevicesInput {
  public GatewayARN $gateway_arn;
  public PositiveIntObject $limit;
  public Marker $marker;
  public VTLDeviceARNs $vtl_device_ar_ns;
}

class DescribeVTLDevicesOutput {
  public GatewayARN $gateway_arn;
  public Marker $marker;
  public VTLDevices $vtl_devices;
}

class DescribeWorkingStorageInput {
  public GatewayARN $gateway_arn;
}

class DescribeWorkingStorageOutput {
  public DiskIds $disk_ids;
  public GatewayARN $gateway_arn;
  public long $working_storage_allocated_in_bytes;
  public long $working_storage_used_in_bytes;
}

class Description {
}

class DetachVolumeInput {
  public boolean $force_detach;
  public VolumeARN $volume_arn;
}

class DetachVolumeOutput {
  public VolumeARN $volume_arn;
}

class DeviceType {
}

class DeviceiSCSIAttributes {
  public boolean $chap_enabled;
  public NetworkInterfaceId $network_interface_id;
  public integer $network_interface_port;
  public TargetARN $target_arn;
}

class DisableGatewayInput {
  public GatewayARN $gateway_arn;
}

class DisableGatewayOutput {
  public GatewayARN $gateway_arn;
}

class Disk {
  public string $disk_allocation_resource;
  public DiskAllocationType $disk_allocation_type;
  public DiskAttributeList $disk_attribute_list;
  public DiskId $disk_id;
  public string $disk_node;
  public string $disk_path;
  public long $disk_size_in_bytes;
  public string $disk_status;
}

class DiskAllocationType {
}

class DiskAttribute {
}

class DiskAttributeList {
}

class DiskId {
}

class DiskIds {
}

class Disks {
}

class DomainName {
}

class DomainUserName {
}

class DomainUserPassword {
}

class DoubleObject {
}

class Ec2InstanceId {
}

class Ec2InstanceRegion {
}

class ErrorCode {
}

class FileShareARN {
}

class FileShareARNList {
}

class FileShareClientList {
}

class FileShareId {
}

class FileShareInfo {
  public FileShareARN $file_share_arn;
  public FileShareId $file_share_id;
  public FileShareStatus $file_share_status;
  public FileShareType $file_share_type;
  public GatewayARN $gateway_arn;
}

class FileShareInfoList {
}

class FileShareStatus {
}

class FileShareType {
}

class FileShareUser {
}

class FileShareUserList {
}

class Folder {
}

class FolderList {
}

class GatewayARN {
}

class GatewayId {
}

class GatewayInfo {
  public Ec2InstanceId $ec_2_instance_id;
  public Ec2InstanceRegion $ec_2_instance_region;
  public GatewayARN $gateway_arn;
  public GatewayId $gateway_id;
  public string $gateway_name;
  public GatewayOperationalState $gateway_operational_state;
  public GatewayType $gateway_type;
}

class GatewayName {
}

class GatewayNetworkInterfaces {
}

class GatewayOperationalState {
}

class GatewayState {
}

class GatewayTimezone {
}

class GatewayType {
}

class Gateways {
}

class Host {
}

class HostEnvironment {
}

class Hosts {
}

class HourOfDay {
}

class IPV4AddressCIDR {
}

class Initiator {
}

class Initiators {
}

class InternalServerError {
  public StorageGatewayError $error;
  public string $message;
}

class InvalidGatewayRequestException {
  public StorageGatewayError $error;
  public string $message;
}

class IqnName {
}

class JoinDomainInput {
  public Hosts $domain_controllers;
  public DomainName $domain_name;
  public GatewayARN $gateway_arn;
  public OrganizationalUnit $organizational_unit;
  public DomainUserPassword $password;
  public TimeoutInSeconds $timeout_in_seconds;
  public DomainUserName $user_name;
}

class JoinDomainOutput {
  public ActiveDirectoryStatus $active_directory_status;
  public GatewayARN $gateway_arn;
}

class KMSKey {
}

class LastSoftwareUpdate {
}

class ListAutomaticTapeCreationPoliciesInput {
  public GatewayARN $gateway_arn;
}

class ListAutomaticTapeCreationPoliciesOutput {
  public AutomaticTapeCreationPolicyInfos $automatic_tape_creation_policy_infos;
}

class ListFileSharesInput {
  public GatewayARN $gateway_arn;
  public PositiveIntObject $limit;
  public Marker $marker;
}

class ListFileSharesOutput {
  public FileShareInfoList $file_share_info_list;
  public Marker $marker;
  public Marker $next_marker;
}

class ListGatewaysInput {
  public PositiveIntObject $limit;
  public Marker $marker;
}

class ListGatewaysOutput {
  public Gateways $gateways;
  public Marker $marker;
}

class ListLocalDisksInput {
  public GatewayARN $gateway_arn;
}

class ListLocalDisksOutput {
  public Disks $disks;
  public GatewayARN $gateway_arn;
}

class ListTagsForResourceInput {
  public PositiveIntObject $limit;
  public Marker $marker;
  public ResourceARN $resource_arn;
}

class ListTagsForResourceOutput {
  public Marker $marker;
  public ResourceARN $resource_arn;
  public Tags $tags;
}

class ListTapesInput {
  public PositiveIntObject $limit;
  public Marker $marker;
  public TapeARNs $tape_ar_ns;
}

class ListTapesOutput {
  public Marker $marker;
  public TapeInfos $tape_infos;
}

class ListVolumeInitiatorsInput {
  public VolumeARN $volume_arn;
}

class ListVolumeInitiatorsOutput {
  public Initiators $initiators;
}

class ListVolumeRecoveryPointsInput {
  public GatewayARN $gateway_arn;
}

class ListVolumeRecoveryPointsOutput {
  public GatewayARN $gateway_arn;
  public VolumeRecoveryPointInfos $volume_recovery_point_infos;
}

class ListVolumesInput {
  public GatewayARN $gateway_arn;
  public PositiveIntObject $limit;
  public Marker $marker;
}

class ListVolumesOutput {
  public GatewayARN $gateway_arn;
  public Marker $marker;
  public VolumeInfos $volume_infos;
}

class LocalConsolePassword {
}

class LocationARN {
}

class Marker {
}

class MediumChangerType {
}

class MinimumNumTapes {
}

class MinuteOfHour {
}

class NFSFileShareDefaults {
  public PermissionMode $directory_mode;
  public PermissionMode $file_mode;
  public PermissionId $group_id;
  public PermissionId $owner_id;
}

class NFSFileShareInfo {
  public FileShareClientList $client_list;
  public StorageClass $default_storage_class;
  public FileShareARN $file_share_arn;
  public FileShareId $file_share_id;
  public FileShareStatus $file_share_status;
  public GatewayARN $gateway_arn;
  public boolean $guess_mime_type_enabled;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public LocationARN $location_arn;
  public NFSFileShareDefaults $nfs_file_share_defaults;
  public ObjectACL $object_acl;
  public Path $path;
  public boolean $read_only;
  public boolean $requester_pays;
  public Role $role;
  public Squash $squash;
  public Tags $tags;
}

class NFSFileShareInfoList {
}

class NetworkInterface {
  public string $ipv_4_address;
  public string $ipv_6_address;
  public string $mac_address;
}

class NetworkInterfaceId {
}

class NextUpdateAvailabilityDate {
}

class NotificationId {
}

class NotifyWhenUploadedInput {
  public FileShareARN $file_share_arn;
}

class NotifyWhenUploadedOutput {
  public FileShareARN $file_share_arn;
  public NotificationId $notification_id;
}

class NumTapesToCreate {
}

class ObjectACL {
}

class OrganizationalUnit {
}

class Path {
}

class PermissionId {
}

class PermissionMode {
}

class PoolId {
}

class PositiveIntObject {
}

class RecurrenceInHours {
}

class RefreshCacheInput {
  public FileShareARN $file_share_arn;
  public FolderList $folder_list;
  public boolean $recursive;
}

class RefreshCacheOutput {
  public FileShareARN $file_share_arn;
  public NotificationId $notification_id;
}

class RegionId {
}

class RemoveTagsFromResourceInput {
  public ResourceARN $resource_arn;
  public TagKeys $tag_keys;
}

class RemoveTagsFromResourceOutput {
  public ResourceARN $resource_arn;
}

class ResetCacheInput {
  public GatewayARN $gateway_arn;
}

class ResetCacheOutput {
  public GatewayARN $gateway_arn;
}

class ResourceARN {
}

class RetrieveTapeArchiveInput {
  public GatewayARN $gateway_arn;
  public TapeARN $tape_arn;
}

class RetrieveTapeArchiveOutput {
  public TapeARN $tape_arn;
}

class RetrieveTapeRecoveryPointInput {
  public GatewayARN $gateway_arn;
  public TapeARN $tape_arn;
}

class RetrieveTapeRecoveryPointOutput {
  public TapeARN $tape_arn;
}

class Role {
}

class SMBFileShareInfo {
  public FileShareUserList $admin_user_list;
  public AuditDestinationARN $audit_destination_arn;
  public Authentication $authentication;
  public StorageClass $default_storage_class;
  public FileShareARN $file_share_arn;
  public FileShareId $file_share_id;
  public FileShareStatus $file_share_status;
  public GatewayARN $gateway_arn;
  public boolean $guess_mime_type_enabled;
  public FileShareUserList $invalid_user_list;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public LocationARN $location_arn;
  public ObjectACL $object_acl;
  public Path $path;
  public boolean $read_only;
  public boolean $requester_pays;
  public Role $role;
  public boolean $smbacl_enabled;
  public Tags $tags;
  public FileShareUserList $valid_user_list;
}

class SMBFileShareInfoList {
}

class SMBGuestPassword {
}

class SMBSecurityStrategy {
}

class ServiceUnavailableError {
  public StorageGatewayError $error;
  public string $message;
}

class SetLocalConsolePasswordInput {
  public GatewayARN $gateway_arn;
  public LocalConsolePassword $local_console_password;
}

class SetLocalConsolePasswordOutput {
  public GatewayARN $gateway_arn;
}

class SetSMBGuestPasswordInput {
  public GatewayARN $gateway_arn;
  public SMBGuestPassword $password;
}

class SetSMBGuestPasswordOutput {
  public GatewayARN $gateway_arn;
}

class ShutdownGatewayInput {
  public GatewayARN $gateway_arn;
}

class ShutdownGatewayOutput {
  public GatewayARN $gateway_arn;
}

class SnapshotDescription {
}

class SnapshotId {
}

class Squash {
}

class StartAvailabilityMonitorTestInput {
  public GatewayARN $gateway_arn;
}

class StartAvailabilityMonitorTestOutput {
  public GatewayARN $gateway_arn;
}

class StartGatewayInput {
  public GatewayARN $gateway_arn;
}

class StartGatewayOutput {
  public GatewayARN $gateway_arn;
}

class StorageClass {
}

class StorageGatewayError {
  public ErrorCode $error_code;
  public errorDetails $error_details;
}

class StorediSCSIVolume {
  public CreatedDate $created_date;
  public KMSKey $kms_key;
  public boolean $preserved_existing_data;
  public SnapshotId $source_snapshot_id;
  public TargetName $target_name;
  public VolumeARN $volume_arn;
  public VolumeAttachmentStatus $volume_attachment_status;
  public DiskId $volume_disk_id;
  public VolumeId $volume_id;
  public DoubleObject $volume_progress;
  public long $volume_size_in_bytes;
  public VolumeStatus $volume_status;
  public VolumeType $volume_type;
  public VolumeUsedInBytes $volume_used_in_bytes;
  public VolumeiSCSIAttributes $volumei_scsi_attributes;
}

class StorediSCSIVolumes {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class TagKey {
}

class TagKeys {
}

class TagValue {
}

class Tags {
}

class Tape {
  public KMSKey $kms_key;
  public PoolId $pool_id;
  public DoubleObject $progress;
  public TapeARN $tape_arn;
  public TapeBarcode $tape_barcode;
  public Time $tape_created_date;
  public TapeSize $tape_size_in_bytes;
  public TapeStatus $tape_status;
  public TapeUsage $tape_used_in_bytes;
  public VTLDeviceARN $vtl_device;
}

class TapeARN {
}

class TapeARNs {
}

class TapeArchive {
  public Time $completion_time;
  public KMSKey $kms_key;
  public PoolId $pool_id;
  public GatewayARN $retrieved_to;
  public TapeARN $tape_arn;
  public TapeBarcode $tape_barcode;
  public Time $tape_created_date;
  public TapeSize $tape_size_in_bytes;
  public TapeArchiveStatus $tape_status;
  public TapeUsage $tape_used_in_bytes;
}

class TapeArchiveStatus {
}

class TapeArchives {
}

class TapeBarcode {
}

class TapeBarcodePrefix {
}

class TapeDriveType {
}

class TapeInfo {
  public GatewayARN $gateway_arn;
  public PoolId $pool_id;
  public TapeARN $tape_arn;
  public TapeBarcode $tape_barcode;
  public TapeSize $tape_size_in_bytes;
  public TapeStatus $tape_status;
}

class TapeInfos {
}

class TapeRecoveryPointInfo {
  public TapeARN $tape_arn;
  public Time $tape_recovery_point_time;
  public TapeSize $tape_size_in_bytes;
  public TapeRecoveryPointStatus $tape_status;
}

class TapeRecoveryPointInfos {
}

class TapeRecoveryPointStatus {
}

class TapeSize {
}

class TapeStatus {
}

class TapeUsage {
}

class Tapes {
}

class TargetARN {
}

class TargetName {
}

class Time {
}

class TimeoutInSeconds {
}

class UpdateAutomaticTapeCreationPolicyInput {
  public AutomaticTapeCreationRules $automatic_tape_creation_rules;
  public GatewayARN $gateway_arn;
}

class UpdateAutomaticTapeCreationPolicyOutput {
  public GatewayARN $gateway_arn;
}

class UpdateBandwidthRateLimitInput {
  public BandwidthDownloadRateLimit $average_download_rate_limit_in_bits_per_sec;
  public BandwidthUploadRateLimit $average_upload_rate_limit_in_bits_per_sec;
  public GatewayARN $gateway_arn;
}

class UpdateBandwidthRateLimitOutput {
  public GatewayARN $gateway_arn;
}

class UpdateChapCredentialsInput {
  public IqnName $initiator_name;
  public ChapSecret $secret_to_authenticate_initiator;
  public ChapSecret $secret_to_authenticate_target;
  public TargetARN $target_arn;
}

class UpdateChapCredentialsOutput {
  public IqnName $initiator_name;
  public TargetARN $target_arn;
}

class UpdateGatewayInformationInput {
  public CloudWatchLogGroupARN $cloud_watch_log_group_arn;
  public GatewayARN $gateway_arn;
  public GatewayName $gateway_name;
  public GatewayTimezone $gateway_timezone;
}

class UpdateGatewayInformationOutput {
  public GatewayARN $gateway_arn;
  public string $gateway_name;
}

class UpdateGatewaySoftwareNowInput {
  public GatewayARN $gateway_arn;
}

class UpdateGatewaySoftwareNowOutput {
  public GatewayARN $gateway_arn;
}

class UpdateMaintenanceStartTimeInput {
  public DayOfMonth $day_of_month;
  public DayOfWeek $day_of_week;
  public GatewayARN $gateway_arn;
  public HourOfDay $hour_of_day;
  public MinuteOfHour $minute_of_hour;
}

class UpdateMaintenanceStartTimeOutput {
  public GatewayARN $gateway_arn;
}

class UpdateNFSFileShareInput {
  public FileShareClientList $client_list;
  public StorageClass $default_storage_class;
  public FileShareARN $file_share_arn;
  public boolean $guess_mime_type_enabled;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public NFSFileShareDefaults $nfs_file_share_defaults;
  public ObjectACL $object_acl;
  public boolean $read_only;
  public boolean $requester_pays;
  public Squash $squash;
}

class UpdateNFSFileShareOutput {
  public FileShareARN $file_share_arn;
}

class UpdateSMBFileShareInput {
  public FileShareUserList $admin_user_list;
  public AuditDestinationARN $audit_destination_arn;
  public StorageClass $default_storage_class;
  public FileShareARN $file_share_arn;
  public boolean $guess_mime_type_enabled;
  public FileShareUserList $invalid_user_list;
  public boolean $kms_encrypted;
  public KMSKey $kms_key;
  public ObjectACL $object_acl;
  public boolean $read_only;
  public boolean $requester_pays;
  public boolean $smbacl_enabled;
  public FileShareUserList $valid_user_list;
}

class UpdateSMBFileShareOutput {
  public FileShareARN $file_share_arn;
}

class UpdateSMBSecurityStrategyInput {
  public GatewayARN $gateway_arn;
  public SMBSecurityStrategy $smb_security_strategy;
}

class UpdateSMBSecurityStrategyOutput {
  public GatewayARN $gateway_arn;
}

class UpdateSnapshotScheduleInput {
  public Description $description;
  public RecurrenceInHours $recurrence_in_hours;
  public HourOfDay $start_at;
  public Tags $tags;
  public VolumeARN $volume_arn;
}

class UpdateSnapshotScheduleOutput {
  public VolumeARN $volume_arn;
}

class UpdateVTLDeviceTypeInput {
  public DeviceType $device_type;
  public VTLDeviceARN $vtl_device_arn;
}

class UpdateVTLDeviceTypeOutput {
  public VTLDeviceARN $vtl_device_arn;
}

class VTLDevice {
  public DeviceiSCSIAttributes $devicei_scsi_attributes;
  public VTLDeviceARN $vtl_device_arn;
  public VTLDeviceProductIdentifier $vtl_device_product_identifier;
  public VTLDeviceType $vtl_device_type;
  public VTLDeviceVendor $vtl_device_vendor;
}

class VTLDeviceARN {
}

class VTLDeviceARNs {
}

class VTLDeviceProductIdentifier {
}

class VTLDeviceType {
}

class VTLDeviceVendor {
}

class VTLDevices {
}

class VolumeARN {
}

class VolumeARNs {
}

class VolumeAttachmentStatus {
}

class VolumeId {
}

class VolumeInfo {
  public GatewayARN $gateway_arn;
  public GatewayId $gateway_id;
  public VolumeARN $volume_arn;
  public VolumeAttachmentStatus $volume_attachment_status;
  public VolumeId $volume_id;
  public long $volume_size_in_bytes;
  public VolumeType $volume_type;
}

class VolumeInfos {
}

class VolumeRecoveryPointInfo {
  public VolumeARN $volume_arn;
  public string $volume_recovery_point_time;
  public long $volume_size_in_bytes;
  public long $volume_usage_in_bytes;
}

class VolumeRecoveryPointInfos {
}

class VolumeStatus {
}

class VolumeType {
}

class VolumeUsedInBytes {
}

class VolumeiSCSIAttributes {
  public boolean $chap_enabled;
  public PositiveIntObject $lun_number;
  public NetworkInterfaceId $network_interface_id;
  public integer $network_interface_port;
  public TargetARN $target_arn;
}

class boolean {
}

class double {
}

class errorDetails {
}

class integer {
}

class long {
}

class string {
}

