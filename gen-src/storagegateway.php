<?hh // strict
namespace slack\aws\storagegateway;

interface StorageGateway {
  public function ActivateGateway(ActivateGatewayInput $in): Awaitable<\Errors\Result<ActivateGatewayOutput>>;
  public function AddCache(AddCacheInput $in): Awaitable<\Errors\Result<AddCacheOutput>>;
  public function AddTagsToResource(AddTagsToResourceInput $in): Awaitable<\Errors\Result<AddTagsToResourceOutput>>;
  public function AddUploadBuffer(AddUploadBufferInput $in): Awaitable<\Errors\Result<AddUploadBufferOutput>>;
  public function AddWorkingStorage(AddWorkingStorageInput $in): Awaitable<\Errors\Result<AddWorkingStorageOutput>>;
  public function AssignTapePool(AssignTapePoolInput $in): Awaitable<\Errors\Result<AssignTapePoolOutput>>;
  public function AttachVolume(AttachVolumeInput $in): Awaitable<\Errors\Result<AttachVolumeOutput>>;
  public function CancelArchival(CancelArchivalInput $in): Awaitable<\Errors\Result<CancelArchivalOutput>>;
  public function CancelRetrieval(CancelRetrievalInput $in): Awaitable<\Errors\Result<CancelRetrievalOutput>>;
  public function CreateCachediSCSIVolume(CreateCachediSCSIVolumeInput $in): Awaitable<\Errors\Result<CreateCachediSCSIVolumeOutput>>;
  public function CreateNFSFileShare(CreateNFSFileShareInput $in): Awaitable<\Errors\Result<CreateNFSFileShareOutput>>;
  public function CreateSMBFileShare(CreateSMBFileShareInput $in): Awaitable<\Errors\Result<CreateSMBFileShareOutput>>;
  public function CreateSnapshot(CreateSnapshotInput $in): Awaitable<\Errors\Result<CreateSnapshotOutput>>;
  public function CreateSnapshotFromVolumeRecoveryPoint(CreateSnapshotFromVolumeRecoveryPointInput $in): Awaitable<\Errors\Result<CreateSnapshotFromVolumeRecoveryPointOutput>>;
  public function CreateStorediSCSIVolume(CreateStorediSCSIVolumeInput $in): Awaitable<\Errors\Result<CreateStorediSCSIVolumeOutput>>;
  public function CreateTapeWithBarcode(CreateTapeWithBarcodeInput $in): Awaitable<\Errors\Result<CreateTapeWithBarcodeOutput>>;
  public function CreateTapes(CreateTapesInput $in): Awaitable<\Errors\Result<CreateTapesOutput>>;
  public function DeleteAutomaticTapeCreationPolicy(DeleteAutomaticTapeCreationPolicyInput $in): Awaitable<\Errors\Result<DeleteAutomaticTapeCreationPolicyOutput>>;
  public function DeleteBandwidthRateLimit(DeleteBandwidthRateLimitInput $in): Awaitable<\Errors\Result<DeleteBandwidthRateLimitOutput>>;
  public function DeleteChapCredentials(DeleteChapCredentialsInput $in): Awaitable<\Errors\Result<DeleteChapCredentialsOutput>>;
  public function DeleteFileShare(DeleteFileShareInput $in): Awaitable<\Errors\Result<DeleteFileShareOutput>>;
  public function DeleteGateway(DeleteGatewayInput $in): Awaitable<\Errors\Result<DeleteGatewayOutput>>;
  public function DeleteSnapshotSchedule(DeleteSnapshotScheduleInput $in): Awaitable<\Errors\Result<DeleteSnapshotScheduleOutput>>;
  public function DeleteTape(DeleteTapeInput $in): Awaitable<\Errors\Result<DeleteTapeOutput>>;
  public function DeleteTapeArchive(DeleteTapeArchiveInput $in): Awaitable<\Errors\Result<DeleteTapeArchiveOutput>>;
  public function DeleteVolume(DeleteVolumeInput $in): Awaitable<\Errors\Result<DeleteVolumeOutput>>;
  public function DescribeAvailabilityMonitorTest(DescribeAvailabilityMonitorTestInput $in): Awaitable<\Errors\Result<DescribeAvailabilityMonitorTestOutput>>;
  public function DescribeBandwidthRateLimit(DescribeBandwidthRateLimitInput $in): Awaitable<\Errors\Result<DescribeBandwidthRateLimitOutput>>;
  public function DescribeCache(DescribeCacheInput $in): Awaitable<\Errors\Result<DescribeCacheOutput>>;
  public function DescribeCachediSCSIVolumes(DescribeCachediSCSIVolumesInput $in): Awaitable<\Errors\Result<DescribeCachediSCSIVolumesOutput>>;
  public function DescribeChapCredentials(DescribeChapCredentialsInput $in): Awaitable<\Errors\Result<DescribeChapCredentialsOutput>>;
  public function DescribeGatewayInformation(DescribeGatewayInformationInput $in): Awaitable<\Errors\Result<DescribeGatewayInformationOutput>>;
  public function DescribeMaintenanceStartTime(DescribeMaintenanceStartTimeInput $in): Awaitable<\Errors\Result<DescribeMaintenanceStartTimeOutput>>;
  public function DescribeNFSFileShares(DescribeNFSFileSharesInput $in): Awaitable<\Errors\Result<DescribeNFSFileSharesOutput>>;
  public function DescribeSMBFileShares(DescribeSMBFileSharesInput $in): Awaitable<\Errors\Result<DescribeSMBFileSharesOutput>>;
  public function DescribeSMBSettings(DescribeSMBSettingsInput $in): Awaitable<\Errors\Result<DescribeSMBSettingsOutput>>;
  public function DescribeSnapshotSchedule(DescribeSnapshotScheduleInput $in): Awaitable<\Errors\Result<DescribeSnapshotScheduleOutput>>;
  public function DescribeStorediSCSIVolumes(DescribeStorediSCSIVolumesInput $in): Awaitable<\Errors\Result<DescribeStorediSCSIVolumesOutput>>;
  public function DescribeTapeArchives(DescribeTapeArchivesInput $in): Awaitable<\Errors\Result<DescribeTapeArchivesOutput>>;
  public function DescribeTapeRecoveryPoints(DescribeTapeRecoveryPointsInput $in): Awaitable<\Errors\Result<DescribeTapeRecoveryPointsOutput>>;
  public function DescribeTapes(DescribeTapesInput $in): Awaitable<\Errors\Result<DescribeTapesOutput>>;
  public function DescribeUploadBuffer(DescribeUploadBufferInput $in): Awaitable<\Errors\Result<DescribeUploadBufferOutput>>;
  public function DescribeVTLDevices(DescribeVTLDevicesInput $in): Awaitable<\Errors\Result<DescribeVTLDevicesOutput>>;
  public function DescribeWorkingStorage(DescribeWorkingStorageInput $in): Awaitable<\Errors\Result<DescribeWorkingStorageOutput>>;
  public function DetachVolume(DetachVolumeInput $in): Awaitable<\Errors\Result<DetachVolumeOutput>>;
  public function DisableGateway(DisableGatewayInput $in): Awaitable<\Errors\Result<DisableGatewayOutput>>;
  public function JoinDomain(JoinDomainInput $in): Awaitable<\Errors\Result<JoinDomainOutput>>;
  public function ListAutomaticTapeCreationPolicies(ListAutomaticTapeCreationPoliciesInput $in): Awaitable<\Errors\Result<ListAutomaticTapeCreationPoliciesOutput>>;
  public function ListFileShares(ListFileSharesInput $in): Awaitable<\Errors\Result<ListFileSharesOutput>>;
  public function ListGateways(ListGatewaysInput $in): Awaitable<\Errors\Result<ListGatewaysOutput>>;
  public function ListLocalDisks(ListLocalDisksInput $in): Awaitable<\Errors\Result<ListLocalDisksOutput>>;
  public function ListTagsForResource(ListTagsForResourceInput $in): Awaitable<\Errors\Result<ListTagsForResourceOutput>>;
  public function ListTapes(ListTapesInput $in): Awaitable<\Errors\Result<ListTapesOutput>>;
  public function ListVolumeInitiators(ListVolumeInitiatorsInput $in): Awaitable<\Errors\Result<ListVolumeInitiatorsOutput>>;
  public function ListVolumeRecoveryPoints(ListVolumeRecoveryPointsInput $in): Awaitable<\Errors\Result<ListVolumeRecoveryPointsOutput>>;
  public function ListVolumes(ListVolumesInput $in): Awaitable<\Errors\Result<ListVolumesOutput>>;
  public function NotifyWhenUploaded(NotifyWhenUploadedInput $in): Awaitable<\Errors\Result<NotifyWhenUploadedOutput>>;
  public function RefreshCache(RefreshCacheInput $in): Awaitable<\Errors\Result<RefreshCacheOutput>>;
  public function RemoveTagsFromResource(RemoveTagsFromResourceInput $in): Awaitable<\Errors\Result<RemoveTagsFromResourceOutput>>;
  public function ResetCache(ResetCacheInput $in): Awaitable<\Errors\Result<ResetCacheOutput>>;
  public function RetrieveTapeArchive(RetrieveTapeArchiveInput $in): Awaitable<\Errors\Result<RetrieveTapeArchiveOutput>>;
  public function RetrieveTapeRecoveryPoint(RetrieveTapeRecoveryPointInput $in): Awaitable<\Errors\Result<RetrieveTapeRecoveryPointOutput>>;
  public function SetLocalConsolePassword(SetLocalConsolePasswordInput $in): Awaitable<\Errors\Result<SetLocalConsolePasswordOutput>>;
  public function SetSMBGuestPassword(SetSMBGuestPasswordInput $in): Awaitable<\Errors\Result<SetSMBGuestPasswordOutput>>;
  public function ShutdownGateway(ShutdownGatewayInput $in): Awaitable<\Errors\Result<ShutdownGatewayOutput>>;
  public function StartAvailabilityMonitorTest(StartAvailabilityMonitorTestInput $in): Awaitable<\Errors\Result<StartAvailabilityMonitorTestOutput>>;
  public function StartGateway(StartGatewayInput $in): Awaitable<\Errors\Result<StartGatewayOutput>>;
  public function UpdateAutomaticTapeCreationPolicy(UpdateAutomaticTapeCreationPolicyInput $in): Awaitable<\Errors\Result<UpdateAutomaticTapeCreationPolicyOutput>>;
  public function UpdateBandwidthRateLimit(UpdateBandwidthRateLimitInput $in): Awaitable<\Errors\Result<UpdateBandwidthRateLimitOutput>>;
  public function UpdateChapCredentials(UpdateChapCredentialsInput $in): Awaitable<\Errors\Result<UpdateChapCredentialsOutput>>;
  public function UpdateGatewayInformation(UpdateGatewayInformationInput $in): Awaitable<\Errors\Result<UpdateGatewayInformationOutput>>;
  public function UpdateGatewaySoftwareNow(UpdateGatewaySoftwareNowInput $in): Awaitable<\Errors\Result<UpdateGatewaySoftwareNowOutput>>;
  public function UpdateMaintenanceStartTime(UpdateMaintenanceStartTimeInput $in): Awaitable<\Errors\Result<UpdateMaintenanceStartTimeOutput>>;
  public function UpdateNFSFileShare(UpdateNFSFileShareInput $in): Awaitable<\Errors\Result<UpdateNFSFileShareOutput>>;
  public function UpdateSMBFileShare(UpdateSMBFileShareInput $in): Awaitable<\Errors\Result<UpdateSMBFileShareOutput>>;
  public function UpdateSMBSecurityStrategy(UpdateSMBSecurityStrategyInput $in): Awaitable<\Errors\Result<UpdateSMBSecurityStrategyOutput>>;
  public function UpdateSnapshotSchedule(UpdateSnapshotScheduleInput $in): Awaitable<\Errors\Result<UpdateSnapshotScheduleOutput>>;
  public function UpdateVTLDeviceType(UpdateVTLDeviceTypeInput $in): Awaitable<\Errors\Result<UpdateVTLDeviceTypeOutput>>;
}

class ActivateGatewayInput {
  public ?ActivationKey $activation_key;
  public ?GatewayName $gateway_name;
  public ?RegionId $gateway_region;
  public ?GatewayTimezone $gateway_timezone;
  public ?GatewayType $gateway_type;
  public ?MediumChangerType $medium_changer_type;
  public ?Tags $tags;
  public ?TapeDriveType $tape_drive_type;

  public function __construct(shape(
    ?'activation_key' => ?ActivationKey,
    ?'gateway_name' => ?GatewayName,
    ?'gateway_region' => ?RegionId,
    ?'gateway_timezone' => ?GatewayTimezone,
    ?'gateway_type' => ?GatewayType,
    ?'medium_changer_type' => ?MediumChangerType,
    ?'tags' => ?Tags,
    ?'tape_drive_type' => ?TapeDriveType,
  ) $s = shape()) {
    $this->activation_key = $s['activation_key'] ?? '';
    $this->gateway_name = $s['gateway_name'] ?? '';
    $this->gateway_region = $s['gateway_region'] ?? '';
    $this->gateway_timezone = $s['gateway_timezone'] ?? '';
    $this->gateway_type = $s['gateway_type'] ?? '';
    $this->medium_changer_type = $s['medium_changer_type'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->tape_drive_type = $s['tape_drive_type'] ?? '';
  }
}

class ActivateGatewayOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

type ActivationKey = string;

type ActiveDirectoryStatus = string;

class AddCacheInput {
  public ?DiskIds $disk_ids;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'disk_ids' => ?DiskIds,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->disk_ids = $s['disk_ids'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class AddCacheOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class AddTagsToResourceInput {
  public ?ResourceARN $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class AddTagsToResourceOutput {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class AddUploadBufferInput {
  public ?DiskIds $disk_ids;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'disk_ids' => ?DiskIds,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->disk_ids = $s['disk_ids'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class AddUploadBufferOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class AddWorkingStorageInput {
  public ?DiskIds $disk_ids;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'disk_ids' => ?DiskIds,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->disk_ids = $s['disk_ids'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class AddWorkingStorageOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class AssignTapePoolInput {
  public ?PoolId $pool_id;
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'pool_id' => ?PoolId,
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class AssignTapePoolOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class AttachVolumeInput {
  public ?DiskId $disk_id;
  public ?GatewayARN $gateway_arn;
  public ?NetworkInterfaceId $network_interface_id;
  public ?TargetName $target_name;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'disk_id' => ?DiskId,
    ?'gateway_arn' => ?GatewayARN,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'target_name' => ?TargetName,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->disk_id = $s['disk_id'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->target_name = $s['target_name'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class AttachVolumeOutput {
  public ?TargetARN $target_arn;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'target_arn' => ?TargetARN,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->target_arn = $s['target_arn'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

type AuditDestinationARN = string;

type Authentication = string;

class AutomaticTapeCreationPolicyInfo {
  public ?AutomaticTapeCreationRules $automatic_tape_creation_rules;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'automatic_tape_creation_rules' => ?AutomaticTapeCreationRules,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->automatic_tape_creation_rules = $s['automatic_tape_creation_rules'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

type AutomaticTapeCreationPolicyInfos = vec<AutomaticTapeCreationPolicyInfo>;

class AutomaticTapeCreationRule {
  public ?MinimumNumTapes $minimum_num_tapes;
  public ?PoolId $pool_id;
  public ?TapeBarcodePrefix $tape_barcode_prefix;
  public ?TapeSize $tape_size_in_bytes;

  public function __construct(shape(
    ?'minimum_num_tapes' => ?MinimumNumTapes,
    ?'pool_id' => ?PoolId,
    ?'tape_barcode_prefix' => ?TapeBarcodePrefix,
    ?'tape_size_in_bytes' => ?TapeSize,
  ) $s = shape()) {
    $this->minimum_num_tapes = $s['minimum_num_tapes'] ?? 0;
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tape_barcode_prefix = $s['tape_barcode_prefix'] ?? '';
    $this->tape_size_in_bytes = $s['tape_size_in_bytes'] ?? 0;
  }
}

type AutomaticTapeCreationRules = vec<AutomaticTapeCreationRule>;

type AvailabilityMonitorTestStatus = string;

type BandwidthDownloadRateLimit = int;

type BandwidthType = string;

type BandwidthUploadRateLimit = int;

type Boolean = bool;

class CachediSCSIVolume {
  public ?CreatedDate $created_date;
  public ?KMSKey $kms_key;
  public ?SnapshotId $source_snapshot_id;
  public ?TargetName $target_name;
  public ?VolumeARN $volume_arn;
  public ?VolumeAttachmentStatus $volume_attachment_status;
  public ?VolumeId $volume_id;
  public ?DoubleObject $volume_progress;
  public ?long $volume_size_in_bytes;
  public ?VolumeStatus $volume_status;
  public ?VolumeType $volume_type;
  public ?VolumeUsedInBytes $volume_used_in_bytes;
  public ?VolumeiSCSIAttributes $volumei_scsi_attributes;

  public function __construct(shape(
    ?'created_date' => ?CreatedDate,
    ?'kms_key' => ?KMSKey,
    ?'source_snapshot_id' => ?SnapshotId,
    ?'target_name' => ?TargetName,
    ?'volume_arn' => ?VolumeARN,
    ?'volume_attachment_status' => ?VolumeAttachmentStatus,
    ?'volume_id' => ?VolumeId,
    ?'volume_progress' => ?DoubleObject,
    ?'volume_size_in_bytes' => ?long,
    ?'volume_status' => ?VolumeStatus,
    ?'volume_type' => ?VolumeType,
    ?'volume_used_in_bytes' => ?VolumeUsedInBytes,
    ?'volumei_scsi_attributes' => ?VolumeiSCSIAttributes,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->source_snapshot_id = $s['source_snapshot_id'] ?? '';
    $this->target_name = $s['target_name'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
    $this->volume_attachment_status = $s['volume_attachment_status'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_progress = $s['volume_progress'] ?? 0.0;
    $this->volume_size_in_bytes = $s['volume_size_in_bytes'] ?? 0;
    $this->volume_status = $s['volume_status'] ?? '';
    $this->volume_type = $s['volume_type'] ?? '';
    $this->volume_used_in_bytes = $s['volume_used_in_bytes'] ?? 0;
    $this->volumei_scsi_attributes = $s['volumei_scsi_attributes'] ?? null;
  }
}

type CachediSCSIVolumes = vec<CachediSCSIVolume>;

class CancelArchivalInput {
  public ?GatewayARN $gateway_arn;
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class CancelArchivalOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class CancelRetrievalInput {
  public ?GatewayARN $gateway_arn;
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class CancelRetrievalOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

type ChapCredentials = vec<ChapInfo>;

class ChapInfo {
  public ?IqnName $initiator_name;
  public ?ChapSecret $secret_to_authenticate_initiator;
  public ?ChapSecret $secret_to_authenticate_target;
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'initiator_name' => ?IqnName,
    ?'secret_to_authenticate_initiator' => ?ChapSecret,
    ?'secret_to_authenticate_target' => ?ChapSecret,
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->initiator_name = $s['initiator_name'] ?? '';
    $this->secret_to_authenticate_initiator = $s['secret_to_authenticate_initiator'] ?? '';
    $this->secret_to_authenticate_target = $s['secret_to_authenticate_target'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

type ChapSecret = string;

type ClientToken = string;

type CloudWatchLogGroupARN = string;

class CreateCachediSCSIVolumeInput {
  public ?ClientToken $client_token;
  public ?GatewayARN $gateway_arn;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?NetworkInterfaceId $network_interface_id;
  public ?SnapshotId $snapshot_id;
  public ?VolumeARN $source_volume_arn;
  public ?Tags $tags;
  public ?TargetName $target_name;
  public ?long $volume_size_in_bytes;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'gateway_arn' => ?GatewayARN,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'snapshot_id' => ?SnapshotId,
    ?'source_volume_arn' => ?VolumeARN,
    ?'tags' => ?Tags,
    ?'target_name' => ?TargetName,
    ?'volume_size_in_bytes' => ?long,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->source_volume_arn = $s['source_volume_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_name = $s['target_name'] ?? '';
    $this->volume_size_in_bytes = $s['volume_size_in_bytes'] ?? 0;
  }
}

class CreateCachediSCSIVolumeOutput {
  public ?TargetARN $target_arn;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'target_arn' => ?TargetARN,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->target_arn = $s['target_arn'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class CreateNFSFileShareInput {
  public ?FileShareClientList $client_list;
  public ?ClientToken $client_token;
  public ?StorageClass $default_storage_class;
  public ?GatewayARN $gateway_arn;
  public bool $guess_mime_type_enabled;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?LocationARN $location_arn;
  public ?NFSFileShareDefaults $nfs_file_share_defaults;
  public ?ObjectACL $object_acl;
  public bool $read_only;
  public bool $requester_pays;
  public ?Role $role;
  public ?Squash $squash;
  public ?Tags $tags;

  public function __construct(shape(
    ?'client_list' => ?FileShareClientList,
    ?'client_token' => ?ClientToken,
    ?'default_storage_class' => ?StorageClass,
    ?'gateway_arn' => ?GatewayARN,
    ?'guess_mime_type_enabled' => bool,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'location_arn' => ?LocationARN,
    ?'nfs_file_share_defaults' => ?NFSFileShareDefaults,
    ?'object_acl' => ?ObjectACL,
    ?'read_only' => bool,
    ?'requester_pays' => bool,
    ?'role' => ?Role,
    ?'squash' => ?Squash,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->client_list = $s['client_list'] ?? vec[];
    $this->client_token = $s['client_token'] ?? '';
    $this->default_storage_class = $s['default_storage_class'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->guess_mime_type_enabled = $s['guess_mime_type_enabled'] ?? false;
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->location_arn = $s['location_arn'] ?? '';
    $this->nfs_file_share_defaults = $s['nfs_file_share_defaults'] ?? null;
    $this->object_acl = $s['object_acl'] ?? '';
    $this->read_only = $s['read_only'] ?? false;
    $this->requester_pays = $s['requester_pays'] ?? false;
    $this->role = $s['role'] ?? '';
    $this->squash = $s['squash'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class CreateNFSFileShareOutput {
  public ?FileShareARN $file_share_arn;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
  }
}

class CreateSMBFileShareInput {
  public ?FileShareUserList $admin_user_list;
  public ?AuditDestinationARN $audit_destination_arn;
  public ?Authentication $authentication;
  public ?ClientToken $client_token;
  public ?StorageClass $default_storage_class;
  public ?GatewayARN $gateway_arn;
  public bool $guess_mime_type_enabled;
  public ?FileShareUserList $invalid_user_list;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?LocationARN $location_arn;
  public ?ObjectACL $object_acl;
  public bool $read_only;
  public bool $requester_pays;
  public ?Role $role;
  public bool $smbacl_enabled;
  public ?Tags $tags;
  public ?FileShareUserList $valid_user_list;

  public function __construct(shape(
    ?'admin_user_list' => ?FileShareUserList,
    ?'audit_destination_arn' => ?AuditDestinationARN,
    ?'authentication' => ?Authentication,
    ?'client_token' => ?ClientToken,
    ?'default_storage_class' => ?StorageClass,
    ?'gateway_arn' => ?GatewayARN,
    ?'guess_mime_type_enabled' => bool,
    ?'invalid_user_list' => ?FileShareUserList,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'location_arn' => ?LocationARN,
    ?'object_acl' => ?ObjectACL,
    ?'read_only' => bool,
    ?'requester_pays' => bool,
    ?'role' => ?Role,
    ?'smbacl_enabled' => bool,
    ?'tags' => ?Tags,
    ?'valid_user_list' => ?FileShareUserList,
  ) $s = shape()) {
    $this->admin_user_list = $s['admin_user_list'] ?? vec[];
    $this->audit_destination_arn = $s['audit_destination_arn'] ?? '';
    $this->authentication = $s['authentication'] ?? '';
    $this->client_token = $s['client_token'] ?? '';
    $this->default_storage_class = $s['default_storage_class'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->guess_mime_type_enabled = $s['guess_mime_type_enabled'] ?? false;
    $this->invalid_user_list = $s['invalid_user_list'] ?? vec[];
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->location_arn = $s['location_arn'] ?? '';
    $this->object_acl = $s['object_acl'] ?? '';
    $this->read_only = $s['read_only'] ?? false;
    $this->requester_pays = $s['requester_pays'] ?? false;
    $this->role = $s['role'] ?? '';
    $this->smbacl_enabled = $s['smbacl_enabled'] ?? false;
    $this->tags = $s['tags'] ?? vec[];
    $this->valid_user_list = $s['valid_user_list'] ?? vec[];
  }
}

class CreateSMBFileShareOutput {
  public ?FileShareARN $file_share_arn;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
  }
}

class CreateSnapshotFromVolumeRecoveryPointInput {
  public ?SnapshotDescription $snapshot_description;
  public ?Tags $tags;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'snapshot_description' => ?SnapshotDescription,
    ?'tags' => ?Tags,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->snapshot_description = $s['snapshot_description'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class CreateSnapshotFromVolumeRecoveryPointOutput {
  public ?SnapshotId $snapshot_id;
  public ?VolumeARN $volume_arn;
  public ?string $volume_recovery_point_time;

  public function __construct(shape(
    ?'snapshot_id' => ?SnapshotId,
    ?'volume_arn' => ?VolumeARN,
    ?'volume_recovery_point_time' => ?string,
  ) $s = shape()) {
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
    $this->volume_recovery_point_time = $s['volume_recovery_point_time'] ?? '';
  }
}

class CreateSnapshotInput {
  public ?SnapshotDescription $snapshot_description;
  public ?Tags $tags;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'snapshot_description' => ?SnapshotDescription,
    ?'tags' => ?Tags,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->snapshot_description = $s['snapshot_description'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class CreateSnapshotOutput {
  public ?SnapshotId $snapshot_id;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'snapshot_id' => ?SnapshotId,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class CreateStorediSCSIVolumeInput {
  public ?DiskId $disk_id;
  public ?GatewayARN $gateway_arn;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?NetworkInterfaceId $network_interface_id;
  public ?boolean $preserve_existing_data;
  public ?SnapshotId $snapshot_id;
  public ?Tags $tags;
  public ?TargetName $target_name;

  public function __construct(shape(
    ?'disk_id' => ?DiskId,
    ?'gateway_arn' => ?GatewayARN,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'preserve_existing_data' => ?boolean,
    ?'snapshot_id' => ?SnapshotId,
    ?'tags' => ?Tags,
    ?'target_name' => ?TargetName,
  ) $s = shape()) {
    $this->disk_id = $s['disk_id'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->preserve_existing_data = $s['preserve_existing_data'] ?? false;
    $this->snapshot_id = $s['snapshot_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->target_name = $s['target_name'] ?? '';
  }
}

class CreateStorediSCSIVolumeOutput {
  public ?TargetARN $target_arn;
  public ?VolumeARN $volume_arn;
  public ?long $volume_size_in_bytes;

  public function __construct(shape(
    ?'target_arn' => ?TargetARN,
    ?'volume_arn' => ?VolumeARN,
    ?'volume_size_in_bytes' => ?long,
  ) $s = shape()) {
    $this->target_arn = $s['target_arn'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
    $this->volume_size_in_bytes = $s['volume_size_in_bytes'] ?? 0;
  }
}

class CreateTapeWithBarcodeInput {
  public ?GatewayARN $gateway_arn;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?PoolId $pool_id;
  public ?Tags $tags;
  public ?TapeBarcode $tape_barcode;
  public ?TapeSize $tape_size_in_bytes;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'pool_id' => ?PoolId,
    ?'tags' => ?Tags,
    ?'tape_barcode' => ?TapeBarcode,
    ?'tape_size_in_bytes' => ?TapeSize,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->tape_barcode = $s['tape_barcode'] ?? '';
    $this->tape_size_in_bytes = $s['tape_size_in_bytes'] ?? 0;
  }
}

class CreateTapeWithBarcodeOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class CreateTapesInput {
  public ?ClientToken $client_token;
  public ?GatewayARN $gateway_arn;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?NumTapesToCreate $num_tapes_to_create;
  public ?PoolId $pool_id;
  public ?Tags $tags;
  public ?TapeBarcodePrefix $tape_barcode_prefix;
  public ?TapeSize $tape_size_in_bytes;

  public function __construct(shape(
    ?'client_token' => ?ClientToken,
    ?'gateway_arn' => ?GatewayARN,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'num_tapes_to_create' => ?NumTapesToCreate,
    ?'pool_id' => ?PoolId,
    ?'tags' => ?Tags,
    ?'tape_barcode_prefix' => ?TapeBarcodePrefix,
    ?'tape_size_in_bytes' => ?TapeSize,
  ) $s = shape()) {
    $this->client_token = $s['client_token'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->num_tapes_to_create = $s['num_tapes_to_create'] ?? 0;
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->tape_barcode_prefix = $s['tape_barcode_prefix'] ?? '';
    $this->tape_size_in_bytes = $s['tape_size_in_bytes'] ?? 0;
  }
}

class CreateTapesOutput {
  public ?TapeARNs $tape_ar_ns;

  public function __construct(shape(
    ?'tape_ar_ns' => ?TapeARNs,
  ) $s = shape()) {
    $this->tape_ar_ns = $s['tape_ar_ns'] ?? vec[];
  }
}

type CreatedDate = int;

type DayOfMonth = int;

type DayOfWeek = int;

class DeleteAutomaticTapeCreationPolicyInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DeleteAutomaticTapeCreationPolicyOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DeleteBandwidthRateLimitInput {
  public ?BandwidthType $bandwidth_type;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'bandwidth_type' => ?BandwidthType,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->bandwidth_type = $s['bandwidth_type'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DeleteBandwidthRateLimitOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DeleteChapCredentialsInput {
  public ?IqnName $initiator_name;
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'initiator_name' => ?IqnName,
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->initiator_name = $s['initiator_name'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class DeleteChapCredentialsOutput {
  public ?IqnName $initiator_name;
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'initiator_name' => ?IqnName,
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->initiator_name = $s['initiator_name'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class DeleteFileShareInput {
  public ?FileShareARN $file_share_arn;
  public ?boolean $force_delete;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
    ?'force_delete' => ?boolean,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->force_delete = $s['force_delete'] ?? false;
  }
}

class DeleteFileShareOutput {
  public ?FileShareARN $file_share_arn;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
  }
}

class DeleteGatewayInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DeleteGatewayOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DeleteSnapshotScheduleInput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class DeleteSnapshotScheduleOutput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class DeleteTapeArchiveInput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class DeleteTapeArchiveOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class DeleteTapeInput {
  public ?GatewayARN $gateway_arn;
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class DeleteTapeOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class DeleteVolumeInput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class DeleteVolumeOutput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class DescribeAvailabilityMonitorTestInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeAvailabilityMonitorTestOutput {
  public ?GatewayARN $gateway_arn;
  public ?Time $start_time;
  public ?AvailabilityMonitorTestStatus $status;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'start_time' => ?Time,
    ?'status' => ?AvailabilityMonitorTestStatus,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->start_time = $s['start_time'] ?? 0;
    $this->status = $s['status'] ?? '';
  }
}

class DescribeBandwidthRateLimitInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeBandwidthRateLimitOutput {
  public ?BandwidthDownloadRateLimit $average_download_rate_limit_in_bits_per_sec;
  public ?BandwidthUploadRateLimit $average_upload_rate_limit_in_bits_per_sec;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'average_download_rate_limit_in_bits_per_sec' => ?BandwidthDownloadRateLimit,
    ?'average_upload_rate_limit_in_bits_per_sec' => ?BandwidthUploadRateLimit,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->average_download_rate_limit_in_bits_per_sec = $s['average_download_rate_limit_in_bits_per_sec'] ?? 0;
    $this->average_upload_rate_limit_in_bits_per_sec = $s['average_upload_rate_limit_in_bits_per_sec'] ?? 0;
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeCacheInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeCacheOutput {
  public ?long $cache_allocated_in_bytes;
  public ?double $cache_dirty_percentage;
  public ?double $cache_hit_percentage;
  public ?double $cache_miss_percentage;
  public ?double $cache_used_percentage;
  public ?DiskIds $disk_ids;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'cache_allocated_in_bytes' => ?long,
    ?'cache_dirty_percentage' => ?double,
    ?'cache_hit_percentage' => ?double,
    ?'cache_miss_percentage' => ?double,
    ?'cache_used_percentage' => ?double,
    ?'disk_ids' => ?DiskIds,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->cache_allocated_in_bytes = $s['cache_allocated_in_bytes'] ?? 0;
    $this->cache_dirty_percentage = $s['cache_dirty_percentage'] ?? 0.0;
    $this->cache_hit_percentage = $s['cache_hit_percentage'] ?? 0.0;
    $this->cache_miss_percentage = $s['cache_miss_percentage'] ?? 0.0;
    $this->cache_used_percentage = $s['cache_used_percentage'] ?? 0.0;
    $this->disk_ids = $s['disk_ids'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeCachediSCSIVolumesInput {
  public ?VolumeARNs $volume_ar_ns;

  public function __construct(shape(
    ?'volume_ar_ns' => ?VolumeARNs,
  ) $s = shape()) {
    $this->volume_ar_ns = $s['volume_ar_ns'] ?? vec[];
  }
}

class DescribeCachediSCSIVolumesOutput {
  public ?CachediSCSIVolumes $cachedi_scsi_volumes;

  public function __construct(shape(
    ?'cachedi_scsi_volumes' => ?CachediSCSIVolumes,
  ) $s = shape()) {
    $this->cachedi_scsi_volumes = $s['cachedi_scsi_volumes'] ?? vec[];
  }
}

class DescribeChapCredentialsInput {
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class DescribeChapCredentialsOutput {
  public ?ChapCredentials $chap_credentials;

  public function __construct(shape(
    ?'chap_credentials' => ?ChapCredentials,
  ) $s = shape()) {
    $this->chap_credentials = $s['chap_credentials'] ?? vec[];
  }
}

class DescribeGatewayInformationInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeGatewayInformationOutput {
  public ?CloudWatchLogGroupARN $cloud_watch_log_group_arn;
  public ?Ec2InstanceId $ec_2_instance_id;
  public ?Ec2InstanceRegion $ec_2_instance_region;
  public ?GatewayARN $gateway_arn;
  public ?GatewayId $gateway_id;
  public ?string $gateway_name;
  public ?GatewayNetworkInterfaces $gateway_network_interfaces;
  public ?GatewayState $gateway_state;
  public ?GatewayTimezone $gateway_timezone;
  public ?GatewayType $gateway_type;
  public ?HostEnvironment $host_environment;
  public ?LastSoftwareUpdate $last_software_update;
  public ?NextUpdateAvailabilityDate $next_update_availability_date;
  public ?Tags $tags;
  public ?string $vpc_endpoint;

  public function __construct(shape(
    ?'cloud_watch_log_group_arn' => ?CloudWatchLogGroupARN,
    ?'ec_2_instance_id' => ?Ec2InstanceId,
    ?'ec_2_instance_region' => ?Ec2InstanceRegion,
    ?'gateway_arn' => ?GatewayARN,
    ?'gateway_id' => ?GatewayId,
    ?'gateway_name' => ?string,
    ?'gateway_network_interfaces' => ?GatewayNetworkInterfaces,
    ?'gateway_state' => ?GatewayState,
    ?'gateway_timezone' => ?GatewayTimezone,
    ?'gateway_type' => ?GatewayType,
    ?'host_environment' => ?HostEnvironment,
    ?'last_software_update' => ?LastSoftwareUpdate,
    ?'next_update_availability_date' => ?NextUpdateAvailabilityDate,
    ?'tags' => ?Tags,
    ?'vpc_endpoint' => ?string,
  ) $s = shape()) {
    $this->cloud_watch_log_group_arn = $s['cloud_watch_log_group_arn'] ?? '';
    $this->ec_2_instance_id = $s['ec_2_instance_id'] ?? '';
    $this->ec_2_instance_region = $s['ec_2_instance_region'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->gateway_name = $s['gateway_name'] ?? '';
    $this->gateway_network_interfaces = $s['gateway_network_interfaces'] ?? vec[];
    $this->gateway_state = $s['gateway_state'] ?? '';
    $this->gateway_timezone = $s['gateway_timezone'] ?? '';
    $this->gateway_type = $s['gateway_type'] ?? '';
    $this->host_environment = $s['host_environment'] ?? '';
    $this->last_software_update = $s['last_software_update'] ?? '';
    $this->next_update_availability_date = $s['next_update_availability_date'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
    $this->vpc_endpoint = $s['vpc_endpoint'] ?? '';
  }
}

class DescribeMaintenanceStartTimeInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeMaintenanceStartTimeOutput {
  public ?DayOfMonth $day_of_month;
  public ?DayOfWeek $day_of_week;
  public ?GatewayARN $gateway_arn;
  public ?HourOfDay $hour_of_day;
  public ?MinuteOfHour $minute_of_hour;
  public ?GatewayTimezone $timezone;

  public function __construct(shape(
    ?'day_of_month' => ?DayOfMonth,
    ?'day_of_week' => ?DayOfWeek,
    ?'gateway_arn' => ?GatewayARN,
    ?'hour_of_day' => ?HourOfDay,
    ?'minute_of_hour' => ?MinuteOfHour,
    ?'timezone' => ?GatewayTimezone,
  ) $s = shape()) {
    $this->day_of_month = $s['day_of_month'] ?? 0;
    $this->day_of_week = $s['day_of_week'] ?? 0;
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->hour_of_day = $s['hour_of_day'] ?? 0;
    $this->minute_of_hour = $s['minute_of_hour'] ?? 0;
    $this->timezone = $s['timezone'] ?? '';
  }
}

class DescribeNFSFileSharesInput {
  public ?FileShareARNList $file_share_arn_list;

  public function __construct(shape(
    ?'file_share_arn_list' => ?FileShareARNList,
  ) $s = shape()) {
    $this->file_share_arn_list = $s['file_share_arn_list'] ?? vec[];
  }
}

class DescribeNFSFileSharesOutput {
  public ?NFSFileShareInfoList $nfs_file_share_info_list;

  public function __construct(shape(
    ?'nfs_file_share_info_list' => ?NFSFileShareInfoList,
  ) $s = shape()) {
    $this->nfs_file_share_info_list = $s['nfs_file_share_info_list'] ?? vec[];
  }
}

class DescribeSMBFileSharesInput {
  public ?FileShareARNList $file_share_arn_list;

  public function __construct(shape(
    ?'file_share_arn_list' => ?FileShareARNList,
  ) $s = shape()) {
    $this->file_share_arn_list = $s['file_share_arn_list'] ?? vec[];
  }
}

class DescribeSMBFileSharesOutput {
  public ?SMBFileShareInfoList $smb_file_share_info_list;

  public function __construct(shape(
    ?'smb_file_share_info_list' => ?SMBFileShareInfoList,
  ) $s = shape()) {
    $this->smb_file_share_info_list = $s['smb_file_share_info_list'] ?? vec[];
  }
}

class DescribeSMBSettingsInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeSMBSettingsOutput {
  public ?ActiveDirectoryStatus $active_directory_status;
  public ?DomainName $domain_name;
  public ?GatewayARN $gateway_arn;
  public bool $smb_guest_password_set;
  public ?SMBSecurityStrategy $smb_security_strategy;

  public function __construct(shape(
    ?'active_directory_status' => ?ActiveDirectoryStatus,
    ?'domain_name' => ?DomainName,
    ?'gateway_arn' => ?GatewayARN,
    ?'smb_guest_password_set' => bool,
    ?'smb_security_strategy' => ?SMBSecurityStrategy,
  ) $s = shape()) {
    $this->active_directory_status = $s['active_directory_status'] ?? '';
    $this->domain_name = $s['domain_name'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->smb_guest_password_set = $s['smb_guest_password_set'] ?? false;
    $this->smb_security_strategy = $s['smb_security_strategy'] ?? '';
  }
}

class DescribeSnapshotScheduleInput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class DescribeSnapshotScheduleOutput {
  public ?Description $description;
  public ?RecurrenceInHours $recurrence_in_hours;
  public ?HourOfDay $start_at;
  public ?Tags $tags;
  public ?GatewayTimezone $timezone;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'recurrence_in_hours' => ?RecurrenceInHours,
    ?'start_at' => ?HourOfDay,
    ?'tags' => ?Tags,
    ?'timezone' => ?GatewayTimezone,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->recurrence_in_hours = $s['recurrence_in_hours'] ?? 0;
    $this->start_at = $s['start_at'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
    $this->timezone = $s['timezone'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class DescribeStorediSCSIVolumesInput {
  public ?VolumeARNs $volume_ar_ns;

  public function __construct(shape(
    ?'volume_ar_ns' => ?VolumeARNs,
  ) $s = shape()) {
    $this->volume_ar_ns = $s['volume_ar_ns'] ?? vec[];
  }
}

class DescribeStorediSCSIVolumesOutput {
  public ?StorediSCSIVolumes $storedi_scsi_volumes;

  public function __construct(shape(
    ?'storedi_scsi_volumes' => ?StorediSCSIVolumes,
  ) $s = shape()) {
    $this->storedi_scsi_volumes = $s['storedi_scsi_volumes'] ?? vec[];
  }
}

class DescribeTapeArchivesInput {
  public ?PositiveIntObject $limit;
  public ?Marker $marker;
  public ?TapeARNs $tape_ar_ns;

  public function __construct(shape(
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
    ?'tape_ar_ns' => ?TapeARNs,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->tape_ar_ns = $s['tape_ar_ns'] ?? vec[];
  }
}

class DescribeTapeArchivesOutput {
  public ?Marker $marker;
  public ?TapeArchives $tape_archives;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'tape_archives' => ?TapeArchives,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->tape_archives = $s['tape_archives'] ?? vec[];
  }
}

class DescribeTapeRecoveryPointsInput {
  public ?GatewayARN $gateway_arn;
  public ?PositiveIntObject $limit;
  public ?Marker $marker;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
  }
}

class DescribeTapeRecoveryPointsOutput {
  public ?GatewayARN $gateway_arn;
  public ?Marker $marker;
  public ?TapeRecoveryPointInfos $tape_recovery_point_infos;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'marker' => ?Marker,
    ?'tape_recovery_point_infos' => ?TapeRecoveryPointInfos,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->tape_recovery_point_infos = $s['tape_recovery_point_infos'] ?? vec[];
  }
}

class DescribeTapesInput {
  public ?GatewayARN $gateway_arn;
  public ?PositiveIntObject $limit;
  public ?Marker $marker;
  public ?TapeARNs $tape_ar_ns;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
    ?'tape_ar_ns' => ?TapeARNs,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->tape_ar_ns = $s['tape_ar_ns'] ?? vec[];
  }
}

class DescribeTapesOutput {
  public ?Marker $marker;
  public ?Tapes $tapes;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'tapes' => ?Tapes,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->tapes = $s['tapes'] ?? vec[];
  }
}

class DescribeUploadBufferInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeUploadBufferOutput {
  public ?DiskIds $disk_ids;
  public ?GatewayARN $gateway_arn;
  public ?long $upload_buffer_allocated_in_bytes;
  public ?long $upload_buffer_used_in_bytes;

  public function __construct(shape(
    ?'disk_ids' => ?DiskIds,
    ?'gateway_arn' => ?GatewayARN,
    ?'upload_buffer_allocated_in_bytes' => ?long,
    ?'upload_buffer_used_in_bytes' => ?long,
  ) $s = shape()) {
    $this->disk_ids = $s['disk_ids'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->upload_buffer_allocated_in_bytes = $s['upload_buffer_allocated_in_bytes'] ?? 0;
    $this->upload_buffer_used_in_bytes = $s['upload_buffer_used_in_bytes'] ?? 0;
  }
}

class DescribeVTLDevicesInput {
  public ?GatewayARN $gateway_arn;
  public ?PositiveIntObject $limit;
  public ?Marker $marker;
  public ?VTLDeviceARNs $vtl_device_ar_ns;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
    ?'vtl_device_ar_ns' => ?VTLDeviceARNs,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->vtl_device_ar_ns = $s['vtl_device_ar_ns'] ?? vec[];
  }
}

class DescribeVTLDevicesOutput {
  public ?GatewayARN $gateway_arn;
  public ?Marker $marker;
  public ?VTLDevices $vtl_devices;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'marker' => ?Marker,
    ?'vtl_devices' => ?VTLDevices,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->vtl_devices = $s['vtl_devices'] ?? vec[];
  }
}

class DescribeWorkingStorageInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DescribeWorkingStorageOutput {
  public ?DiskIds $disk_ids;
  public ?GatewayARN $gateway_arn;
  public ?long $working_storage_allocated_in_bytes;
  public ?long $working_storage_used_in_bytes;

  public function __construct(shape(
    ?'disk_ids' => ?DiskIds,
    ?'gateway_arn' => ?GatewayARN,
    ?'working_storage_allocated_in_bytes' => ?long,
    ?'working_storage_used_in_bytes' => ?long,
  ) $s = shape()) {
    $this->disk_ids = $s['disk_ids'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->working_storage_allocated_in_bytes = $s['working_storage_allocated_in_bytes'] ?? 0;
    $this->working_storage_used_in_bytes = $s['working_storage_used_in_bytes'] ?? 0;
  }
}

type Description = string;

class DetachVolumeInput {
  public bool $force_detach;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'force_detach' => bool,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->force_detach = $s['force_detach'] ?? false;
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class DetachVolumeOutput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

type DeviceType = string;

class DeviceiSCSIAttributes {
  public ?boolean $chap_enabled;
  public ?NetworkInterfaceId $network_interface_id;
  public ?integer $network_interface_port;
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'chap_enabled' => ?boolean,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'network_interface_port' => ?integer,
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->chap_enabled = $s['chap_enabled'] ?? false;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->network_interface_port = $s['network_interface_port'] ?? 0;
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class DisableGatewayInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class DisableGatewayOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class Disk {
  public ?string $disk_allocation_resource;
  public ?DiskAllocationType $disk_allocation_type;
  public ?DiskAttributeList $disk_attribute_list;
  public ?DiskId $disk_id;
  public ?string $disk_node;
  public ?string $disk_path;
  public ?long $disk_size_in_bytes;
  public ?string $disk_status;

  public function __construct(shape(
    ?'disk_allocation_resource' => ?string,
    ?'disk_allocation_type' => ?DiskAllocationType,
    ?'disk_attribute_list' => ?DiskAttributeList,
    ?'disk_id' => ?DiskId,
    ?'disk_node' => ?string,
    ?'disk_path' => ?string,
    ?'disk_size_in_bytes' => ?long,
    ?'disk_status' => ?string,
  ) $s = shape()) {
    $this->disk_allocation_resource = $s['disk_allocation_resource'] ?? '';
    $this->disk_allocation_type = $s['disk_allocation_type'] ?? '';
    $this->disk_attribute_list = $s['disk_attribute_list'] ?? vec[];
    $this->disk_id = $s['disk_id'] ?? '';
    $this->disk_node = $s['disk_node'] ?? '';
    $this->disk_path = $s['disk_path'] ?? '';
    $this->disk_size_in_bytes = $s['disk_size_in_bytes'] ?? 0;
    $this->disk_status = $s['disk_status'] ?? '';
  }
}

type DiskAllocationType = string;

type DiskAttribute = string;

type DiskAttributeList = vec<DiskAttribute>;

type DiskId = string;

type DiskIds = vec<DiskId>;

type Disks = vec<Disk>;

type DomainName = string;

type DomainUserName = string;

type DomainUserPassword = string;

type DoubleObject = float;

type Ec2InstanceId = string;

type Ec2InstanceRegion = string;

type ErrorCode = string;

type FileShareARN = string;

type FileShareARNList = vec<FileShareARN>;

type FileShareClientList = vec<IPV4AddressCIDR>;

type FileShareId = string;

class FileShareInfo {
  public ?FileShareARN $file_share_arn;
  public ?FileShareId $file_share_id;
  public ?FileShareStatus $file_share_status;
  public ?FileShareType $file_share_type;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
    ?'file_share_id' => ?FileShareId,
    ?'file_share_status' => ?FileShareStatus,
    ?'file_share_type' => ?FileShareType,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->file_share_id = $s['file_share_id'] ?? '';
    $this->file_share_status = $s['file_share_status'] ?? '';
    $this->file_share_type = $s['file_share_type'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

type FileShareInfoList = vec<FileShareInfo>;

type FileShareStatus = string;

type FileShareType = string;

type FileShareUser = string;

type FileShareUserList = vec<FileShareUser>;

type Folder = string;

type FolderList = vec<Folder>;

type GatewayARN = string;

type GatewayId = string;

class GatewayInfo {
  public ?Ec2InstanceId $ec_2_instance_id;
  public ?Ec2InstanceRegion $ec_2_instance_region;
  public ?GatewayARN $gateway_arn;
  public ?GatewayId $gateway_id;
  public ?string $gateway_name;
  public ?GatewayOperationalState $gateway_operational_state;
  public ?GatewayType $gateway_type;

  public function __construct(shape(
    ?'ec_2_instance_id' => ?Ec2InstanceId,
    ?'ec_2_instance_region' => ?Ec2InstanceRegion,
    ?'gateway_arn' => ?GatewayARN,
    ?'gateway_id' => ?GatewayId,
    ?'gateway_name' => ?string,
    ?'gateway_operational_state' => ?GatewayOperationalState,
    ?'gateway_type' => ?GatewayType,
  ) $s = shape()) {
    $this->ec_2_instance_id = $s['ec_2_instance_id'] ?? '';
    $this->ec_2_instance_region = $s['ec_2_instance_region'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->gateway_name = $s['gateway_name'] ?? '';
    $this->gateway_operational_state = $s['gateway_operational_state'] ?? '';
    $this->gateway_type = $s['gateway_type'] ?? '';
  }
}

type GatewayName = string;

type GatewayNetworkInterfaces = vec<NetworkInterface>;

type GatewayOperationalState = string;

type GatewayState = string;

type GatewayTimezone = string;

type GatewayType = string;

type Gateways = vec<GatewayInfo>;

type Host = string;

type HostEnvironment = string;

type Hosts = vec<Host>;

type HourOfDay = int;

type IPV4AddressCIDR = string;

type Initiator = string;

type Initiators = vec<Initiator>;

class InternalServerError {
  public ?StorageGatewayError $error;
  public ?string $message;

  public function __construct(shape(
    ?'error' => ?StorageGatewayError,
    ?'message' => ?string,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->message = $s['message'] ?? '';
  }
}

class InvalidGatewayRequestException {
  public ?StorageGatewayError $error;
  public ?string $message;

  public function __construct(shape(
    ?'error' => ?StorageGatewayError,
    ?'message' => ?string,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->message = $s['message'] ?? '';
  }
}

type IqnName = string;

class JoinDomainInput {
  public ?Hosts $domain_controllers;
  public ?DomainName $domain_name;
  public ?GatewayARN $gateway_arn;
  public ?OrganizationalUnit $organizational_unit;
  public ?DomainUserPassword $password;
  public ?TimeoutInSeconds $timeout_in_seconds;
  public ?DomainUserName $user_name;

  public function __construct(shape(
    ?'domain_controllers' => ?Hosts,
    ?'domain_name' => ?DomainName,
    ?'gateway_arn' => ?GatewayARN,
    ?'organizational_unit' => ?OrganizationalUnit,
    ?'password' => ?DomainUserPassword,
    ?'timeout_in_seconds' => ?TimeoutInSeconds,
    ?'user_name' => ?DomainUserName,
  ) $s = shape()) {
    $this->domain_controllers = $s['domain_controllers'] ?? vec[];
    $this->domain_name = $s['domain_name'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->organizational_unit = $s['organizational_unit'] ?? '';
    $this->password = $s['password'] ?? '';
    $this->timeout_in_seconds = $s['timeout_in_seconds'] ?? 0;
    $this->user_name = $s['user_name'] ?? '';
  }
}

class JoinDomainOutput {
  public ?ActiveDirectoryStatus $active_directory_status;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'active_directory_status' => ?ActiveDirectoryStatus,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->active_directory_status = $s['active_directory_status'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

type KMSKey = string;

type LastSoftwareUpdate = string;

class ListAutomaticTapeCreationPoliciesInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class ListAutomaticTapeCreationPoliciesOutput {
  public ?AutomaticTapeCreationPolicyInfos $automatic_tape_creation_policy_infos;

  public function __construct(shape(
    ?'automatic_tape_creation_policy_infos' => ?AutomaticTapeCreationPolicyInfos,
  ) $s = shape()) {
    $this->automatic_tape_creation_policy_infos = $s['automatic_tape_creation_policy_infos'] ?? vec[];
  }
}

class ListFileSharesInput {
  public ?GatewayARN $gateway_arn;
  public ?PositiveIntObject $limit;
  public ?Marker $marker;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListFileSharesOutput {
  public ?FileShareInfoList $file_share_info_list;
  public ?Marker $marker;
  public ?Marker $next_marker;

  public function __construct(shape(
    ?'file_share_info_list' => ?FileShareInfoList,
    ?'marker' => ?Marker,
    ?'next_marker' => ?Marker,
  ) $s = shape()) {
    $this->file_share_info_list = $s['file_share_info_list'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
    $this->next_marker = $s['next_marker'] ?? '';
  }
}

class ListGatewaysInput {
  public ?PositiveIntObject $limit;
  public ?Marker $marker;

  public function __construct(shape(
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListGatewaysOutput {
  public ?Gateways $gateways;
  public ?Marker $marker;

  public function __construct(shape(
    ?'gateways' => ?Gateways,
    ?'marker' => ?Marker,
  ) $s = shape()) {
    $this->gateways = $s['gateways'] ?? vec[];
    $this->marker = $s['marker'] ?? '';
  }
}

class ListLocalDisksInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class ListLocalDisksOutput {
  public ?Disks $disks;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'disks' => ?Disks,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->disks = $s['disks'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class ListTagsForResourceInput {
  public ?PositiveIntObject $limit;
  public ?Marker $marker;
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceOutput {
  public ?Marker $marker;
  public ?ResourceARN $resource_arn;
  public ?Tags $tags;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'resource_arn' => ?ResourceARN,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

class ListTapesInput {
  public ?PositiveIntObject $limit;
  public ?Marker $marker;
  public ?TapeARNs $tape_ar_ns;

  public function __construct(shape(
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
    ?'tape_ar_ns' => ?TapeARNs,
  ) $s = shape()) {
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
    $this->tape_ar_ns = $s['tape_ar_ns'] ?? vec[];
  }
}

class ListTapesOutput {
  public ?Marker $marker;
  public ?TapeInfos $tape_infos;

  public function __construct(shape(
    ?'marker' => ?Marker,
    ?'tape_infos' => ?TapeInfos,
  ) $s = shape()) {
    $this->marker = $s['marker'] ?? '';
    $this->tape_infos = $s['tape_infos'] ?? vec[];
  }
}

class ListVolumeInitiatorsInput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class ListVolumeInitiatorsOutput {
  public ?Initiators $initiators;

  public function __construct(shape(
    ?'initiators' => ?Initiators,
  ) $s = shape()) {
    $this->initiators = $s['initiators'] ?? vec[];
  }
}

class ListVolumeRecoveryPointsInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class ListVolumeRecoveryPointsOutput {
  public ?GatewayARN $gateway_arn;
  public ?VolumeRecoveryPointInfos $volume_recovery_point_infos;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'volume_recovery_point_infos' => ?VolumeRecoveryPointInfos,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->volume_recovery_point_infos = $s['volume_recovery_point_infos'] ?? vec[];
  }
}

class ListVolumesInput {
  public ?GatewayARN $gateway_arn;
  public ?PositiveIntObject $limit;
  public ?Marker $marker;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'limit' => ?PositiveIntObject,
    ?'marker' => ?Marker,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->limit = $s['limit'] ?? 0;
    $this->marker = $s['marker'] ?? '';
  }
}

class ListVolumesOutput {
  public ?GatewayARN $gateway_arn;
  public ?Marker $marker;
  public ?VolumeInfos $volume_infos;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'marker' => ?Marker,
    ?'volume_infos' => ?VolumeInfos,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->marker = $s['marker'] ?? '';
    $this->volume_infos = $s['volume_infos'] ?? vec[];
  }
}

type LocalConsolePassword = string;

type LocationARN = string;

type Marker = string;

type MediumChangerType = string;

type MinimumNumTapes = int;

type MinuteOfHour = int;

class NFSFileShareDefaults {
  public ?PermissionMode $directory_mode;
  public ?PermissionMode $file_mode;
  public ?PermissionId $group_id;
  public ?PermissionId $owner_id;

  public function __construct(shape(
    ?'directory_mode' => ?PermissionMode,
    ?'file_mode' => ?PermissionMode,
    ?'group_id' => ?PermissionId,
    ?'owner_id' => ?PermissionId,
  ) $s = shape()) {
    $this->directory_mode = $s['directory_mode'] ?? '';
    $this->file_mode = $s['file_mode'] ?? '';
    $this->group_id = $s['group_id'] ?? 0;
    $this->owner_id = $s['owner_id'] ?? 0;
  }
}

class NFSFileShareInfo {
  public ?FileShareClientList $client_list;
  public ?StorageClass $default_storage_class;
  public ?FileShareARN $file_share_arn;
  public ?FileShareId $file_share_id;
  public ?FileShareStatus $file_share_status;
  public ?GatewayARN $gateway_arn;
  public bool $guess_mime_type_enabled;
  public ?boolean $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?LocationARN $location_arn;
  public ?NFSFileShareDefaults $nfs_file_share_defaults;
  public ?ObjectACL $object_acl;
  public ?Path $path;
  public bool $read_only;
  public bool $requester_pays;
  public ?Role $role;
  public ?Squash $squash;
  public ?Tags $tags;

  public function __construct(shape(
    ?'client_list' => ?FileShareClientList,
    ?'default_storage_class' => ?StorageClass,
    ?'file_share_arn' => ?FileShareARN,
    ?'file_share_id' => ?FileShareId,
    ?'file_share_status' => ?FileShareStatus,
    ?'gateway_arn' => ?GatewayARN,
    ?'guess_mime_type_enabled' => bool,
    ?'kms_encrypted' => ?boolean,
    ?'kms_key' => ?KMSKey,
    ?'location_arn' => ?LocationARN,
    ?'nfs_file_share_defaults' => ?NFSFileShareDefaults,
    ?'object_acl' => ?ObjectACL,
    ?'path' => ?Path,
    ?'read_only' => bool,
    ?'requester_pays' => bool,
    ?'role' => ?Role,
    ?'squash' => ?Squash,
    ?'tags' => ?Tags,
  ) $s = shape()) {
    $this->client_list = $s['client_list'] ?? vec[];
    $this->default_storage_class = $s['default_storage_class'] ?? '';
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->file_share_id = $s['file_share_id'] ?? '';
    $this->file_share_status = $s['file_share_status'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->guess_mime_type_enabled = $s['guess_mime_type_enabled'] ?? false;
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->location_arn = $s['location_arn'] ?? '';
    $this->nfs_file_share_defaults = $s['nfs_file_share_defaults'] ?? null;
    $this->object_acl = $s['object_acl'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->read_only = $s['read_only'] ?? false;
    $this->requester_pays = $s['requester_pays'] ?? false;
    $this->role = $s['role'] ?? '';
    $this->squash = $s['squash'] ?? '';
    $this->tags = $s['tags'] ?? vec[];
  }
}

type NFSFileShareInfoList = vec<NFSFileShareInfo>;

class NetworkInterface {
  public ?string $ipv_4_address;
  public ?string $ipv_6_address;
  public ?string $mac_address;

  public function __construct(shape(
    ?'ipv_4_address' => ?string,
    ?'ipv_6_address' => ?string,
    ?'mac_address' => ?string,
  ) $s = shape()) {
    $this->ipv_4_address = $s['ipv_4_address'] ?? '';
    $this->ipv_6_address = $s['ipv_6_address'] ?? '';
    $this->mac_address = $s['mac_address'] ?? '';
  }
}

type NetworkInterfaceId = string;

type NextUpdateAvailabilityDate = string;

type NotificationId = string;

class NotifyWhenUploadedInput {
  public ?FileShareARN $file_share_arn;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
  }
}

class NotifyWhenUploadedOutput {
  public ?FileShareARN $file_share_arn;
  public ?NotificationId $notification_id;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
    ?'notification_id' => ?NotificationId,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->notification_id = $s['notification_id'] ?? '';
  }
}

type NumTapesToCreate = int;

type ObjectACL = string;

type OrganizationalUnit = string;

type Path = string;

type PermissionId = int;

type PermissionMode = string;

type PoolId = string;

type PositiveIntObject = int;

type RecurrenceInHours = int;

class RefreshCacheInput {
  public ?FileShareARN $file_share_arn;
  public ?FolderList $folder_list;
  public bool $recursive;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
    ?'folder_list' => ?FolderList,
    ?'recursive' => bool,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->folder_list = $s['folder_list'] ?? vec[];
    $this->recursive = $s['recursive'] ?? false;
  }
}

class RefreshCacheOutput {
  public ?FileShareARN $file_share_arn;
  public ?NotificationId $notification_id;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
    ?'notification_id' => ?NotificationId,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->notification_id = $s['notification_id'] ?? '';
  }
}

type RegionId = string;

class RemoveTagsFromResourceInput {
  public ?ResourceARN $resource_arn;
  public ?TagKeys $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
    ?'tag_keys' => ?TagKeys,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class RemoveTagsFromResourceOutput {
  public ?ResourceARN $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?ResourceARN,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ResetCacheInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class ResetCacheOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

type ResourceARN = string;

class RetrieveTapeArchiveInput {
  public ?GatewayARN $gateway_arn;
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class RetrieveTapeArchiveOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class RetrieveTapeRecoveryPointInput {
  public ?GatewayARN $gateway_arn;
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

class RetrieveTapeRecoveryPointOutput {
  public ?TapeARN $tape_arn;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
  }
}

type Role = string;

class SMBFileShareInfo {
  public ?FileShareUserList $admin_user_list;
  public ?AuditDestinationARN $audit_destination_arn;
  public ?Authentication $authentication;
  public ?StorageClass $default_storage_class;
  public ?FileShareARN $file_share_arn;
  public ?FileShareId $file_share_id;
  public ?FileShareStatus $file_share_status;
  public ?GatewayARN $gateway_arn;
  public bool $guess_mime_type_enabled;
  public ?FileShareUserList $invalid_user_list;
  public ?boolean $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?LocationARN $location_arn;
  public ?ObjectACL $object_acl;
  public ?Path $path;
  public bool $read_only;
  public bool $requester_pays;
  public ?Role $role;
  public bool $smbacl_enabled;
  public ?Tags $tags;
  public ?FileShareUserList $valid_user_list;

  public function __construct(shape(
    ?'admin_user_list' => ?FileShareUserList,
    ?'audit_destination_arn' => ?AuditDestinationARN,
    ?'authentication' => ?Authentication,
    ?'default_storage_class' => ?StorageClass,
    ?'file_share_arn' => ?FileShareARN,
    ?'file_share_id' => ?FileShareId,
    ?'file_share_status' => ?FileShareStatus,
    ?'gateway_arn' => ?GatewayARN,
    ?'guess_mime_type_enabled' => bool,
    ?'invalid_user_list' => ?FileShareUserList,
    ?'kms_encrypted' => ?boolean,
    ?'kms_key' => ?KMSKey,
    ?'location_arn' => ?LocationARN,
    ?'object_acl' => ?ObjectACL,
    ?'path' => ?Path,
    ?'read_only' => bool,
    ?'requester_pays' => bool,
    ?'role' => ?Role,
    ?'smbacl_enabled' => bool,
    ?'tags' => ?Tags,
    ?'valid_user_list' => ?FileShareUserList,
  ) $s = shape()) {
    $this->admin_user_list = $s['admin_user_list'] ?? vec[];
    $this->audit_destination_arn = $s['audit_destination_arn'] ?? '';
    $this->authentication = $s['authentication'] ?? '';
    $this->default_storage_class = $s['default_storage_class'] ?? '';
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->file_share_id = $s['file_share_id'] ?? '';
    $this->file_share_status = $s['file_share_status'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->guess_mime_type_enabled = $s['guess_mime_type_enabled'] ?? false;
    $this->invalid_user_list = $s['invalid_user_list'] ?? vec[];
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->location_arn = $s['location_arn'] ?? '';
    $this->object_acl = $s['object_acl'] ?? '';
    $this->path = $s['path'] ?? '';
    $this->read_only = $s['read_only'] ?? false;
    $this->requester_pays = $s['requester_pays'] ?? false;
    $this->role = $s['role'] ?? '';
    $this->smbacl_enabled = $s['smbacl_enabled'] ?? false;
    $this->tags = $s['tags'] ?? vec[];
    $this->valid_user_list = $s['valid_user_list'] ?? vec[];
  }
}

type SMBFileShareInfoList = vec<SMBFileShareInfo>;

type SMBGuestPassword = string;

type SMBSecurityStrategy = string;

class ServiceUnavailableError {
  public ?StorageGatewayError $error;
  public ?string $message;

  public function __construct(shape(
    ?'error' => ?StorageGatewayError,
    ?'message' => ?string,
  ) $s = shape()) {
    $this->error = $s['error'] ?? null;
    $this->message = $s['message'] ?? '';
  }
}

class SetLocalConsolePasswordInput {
  public ?GatewayARN $gateway_arn;
  public ?LocalConsolePassword $local_console_password;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'local_console_password' => ?LocalConsolePassword,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->local_console_password = $s['local_console_password'] ?? '';
  }
}

class SetLocalConsolePasswordOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class SetSMBGuestPasswordInput {
  public ?GatewayARN $gateway_arn;
  public ?SMBGuestPassword $password;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'password' => ?SMBGuestPassword,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->password = $s['password'] ?? '';
  }
}

class SetSMBGuestPasswordOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class ShutdownGatewayInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class ShutdownGatewayOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

type SnapshotDescription = string;

type SnapshotId = string;

type Squash = string;

class StartAvailabilityMonitorTestInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class StartAvailabilityMonitorTestOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class StartGatewayInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class StartGatewayOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

type StorageClass = string;

class StorageGatewayError {
  public ?ErrorCode $error_code;
  public ?errorDetails $error_details;

  public function __construct(shape(
    ?'error_code' => ?ErrorCode,
    ?'error_details' => ?errorDetails,
  ) $s = shape()) {
    $this->error_code = $s['error_code'] ?? '';
    $this->error_details = $s['error_details'] ?? dict[];
  }
}

class StorediSCSIVolume {
  public ?CreatedDate $created_date;
  public ?KMSKey $kms_key;
  public ?boolean $preserved_existing_data;
  public ?SnapshotId $source_snapshot_id;
  public ?TargetName $target_name;
  public ?VolumeARN $volume_arn;
  public ?VolumeAttachmentStatus $volume_attachment_status;
  public ?DiskId $volume_disk_id;
  public ?VolumeId $volume_id;
  public ?DoubleObject $volume_progress;
  public ?long $volume_size_in_bytes;
  public ?VolumeStatus $volume_status;
  public ?VolumeType $volume_type;
  public ?VolumeUsedInBytes $volume_used_in_bytes;
  public ?VolumeiSCSIAttributes $volumei_scsi_attributes;

  public function __construct(shape(
    ?'created_date' => ?CreatedDate,
    ?'kms_key' => ?KMSKey,
    ?'preserved_existing_data' => ?boolean,
    ?'source_snapshot_id' => ?SnapshotId,
    ?'target_name' => ?TargetName,
    ?'volume_arn' => ?VolumeARN,
    ?'volume_attachment_status' => ?VolumeAttachmentStatus,
    ?'volume_disk_id' => ?DiskId,
    ?'volume_id' => ?VolumeId,
    ?'volume_progress' => ?DoubleObject,
    ?'volume_size_in_bytes' => ?long,
    ?'volume_status' => ?VolumeStatus,
    ?'volume_type' => ?VolumeType,
    ?'volume_used_in_bytes' => ?VolumeUsedInBytes,
    ?'volumei_scsi_attributes' => ?VolumeiSCSIAttributes,
  ) $s = shape()) {
    $this->created_date = $s['created_date'] ?? 0;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->preserved_existing_data = $s['preserved_existing_data'] ?? false;
    $this->source_snapshot_id = $s['source_snapshot_id'] ?? '';
    $this->target_name = $s['target_name'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
    $this->volume_attachment_status = $s['volume_attachment_status'] ?? '';
    $this->volume_disk_id = $s['volume_disk_id'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_progress = $s['volume_progress'] ?? 0.0;
    $this->volume_size_in_bytes = $s['volume_size_in_bytes'] ?? 0;
    $this->volume_status = $s['volume_status'] ?? '';
    $this->volume_type = $s['volume_type'] ?? '';
    $this->volume_used_in_bytes = $s['volume_used_in_bytes'] ?? 0;
    $this->volumei_scsi_attributes = $s['volumei_scsi_attributes'] ?? null;
  }
}

type StorediSCSIVolumes = vec<StorediSCSIVolume>;

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

type TagKeys = vec<TagKey>;

type TagValue = string;

type Tags = vec<Tag>;

class Tape {
  public ?KMSKey $kms_key;
  public ?PoolId $pool_id;
  public ?DoubleObject $progress;
  public ?TapeARN $tape_arn;
  public ?TapeBarcode $tape_barcode;
  public ?Time $tape_created_date;
  public ?TapeSize $tape_size_in_bytes;
  public ?TapeStatus $tape_status;
  public ?TapeUsage $tape_used_in_bytes;
  public ?VTLDeviceARN $vtl_device;

  public function __construct(shape(
    ?'kms_key' => ?KMSKey,
    ?'pool_id' => ?PoolId,
    ?'progress' => ?DoubleObject,
    ?'tape_arn' => ?TapeARN,
    ?'tape_barcode' => ?TapeBarcode,
    ?'tape_created_date' => ?Time,
    ?'tape_size_in_bytes' => ?TapeSize,
    ?'tape_status' => ?TapeStatus,
    ?'tape_used_in_bytes' => ?TapeUsage,
    ?'vtl_device' => ?VTLDeviceARN,
  ) $s = shape()) {
    $this->kms_key = $s['kms_key'] ?? '';
    $this->pool_id = $s['pool_id'] ?? '';
    $this->progress = $s['progress'] ?? 0.0;
    $this->tape_arn = $s['tape_arn'] ?? '';
    $this->tape_barcode = $s['tape_barcode'] ?? '';
    $this->tape_created_date = $s['tape_created_date'] ?? 0;
    $this->tape_size_in_bytes = $s['tape_size_in_bytes'] ?? 0;
    $this->tape_status = $s['tape_status'] ?? '';
    $this->tape_used_in_bytes = $s['tape_used_in_bytes'] ?? 0;
    $this->vtl_device = $s['vtl_device'] ?? '';
  }
}

type TapeARN = string;

type TapeARNs = vec<TapeARN>;

class TapeArchive {
  public ?Time $completion_time;
  public ?KMSKey $kms_key;
  public ?PoolId $pool_id;
  public ?GatewayARN $retrieved_to;
  public ?TapeARN $tape_arn;
  public ?TapeBarcode $tape_barcode;
  public ?Time $tape_created_date;
  public ?TapeSize $tape_size_in_bytes;
  public ?TapeArchiveStatus $tape_status;
  public ?TapeUsage $tape_used_in_bytes;

  public function __construct(shape(
    ?'completion_time' => ?Time,
    ?'kms_key' => ?KMSKey,
    ?'pool_id' => ?PoolId,
    ?'retrieved_to' => ?GatewayARN,
    ?'tape_arn' => ?TapeARN,
    ?'tape_barcode' => ?TapeBarcode,
    ?'tape_created_date' => ?Time,
    ?'tape_size_in_bytes' => ?TapeSize,
    ?'tape_status' => ?TapeArchiveStatus,
    ?'tape_used_in_bytes' => ?TapeUsage,
  ) $s = shape()) {
    $this->completion_time = $s['completion_time'] ?? 0;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->pool_id = $s['pool_id'] ?? '';
    $this->retrieved_to = $s['retrieved_to'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
    $this->tape_barcode = $s['tape_barcode'] ?? '';
    $this->tape_created_date = $s['tape_created_date'] ?? 0;
    $this->tape_size_in_bytes = $s['tape_size_in_bytes'] ?? 0;
    $this->tape_status = $s['tape_status'] ?? '';
    $this->tape_used_in_bytes = $s['tape_used_in_bytes'] ?? 0;
  }
}

type TapeArchiveStatus = string;

type TapeArchives = vec<TapeArchive>;

type TapeBarcode = string;

type TapeBarcodePrefix = string;

type TapeDriveType = string;

class TapeInfo {
  public ?GatewayARN $gateway_arn;
  public ?PoolId $pool_id;
  public ?TapeARN $tape_arn;
  public ?TapeBarcode $tape_barcode;
  public ?TapeSize $tape_size_in_bytes;
  public ?TapeStatus $tape_status;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'pool_id' => ?PoolId,
    ?'tape_arn' => ?TapeARN,
    ?'tape_barcode' => ?TapeBarcode,
    ?'tape_size_in_bytes' => ?TapeSize,
    ?'tape_status' => ?TapeStatus,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->pool_id = $s['pool_id'] ?? '';
    $this->tape_arn = $s['tape_arn'] ?? '';
    $this->tape_barcode = $s['tape_barcode'] ?? '';
    $this->tape_size_in_bytes = $s['tape_size_in_bytes'] ?? 0;
    $this->tape_status = $s['tape_status'] ?? '';
  }
}

type TapeInfos = vec<TapeInfo>;

class TapeRecoveryPointInfo {
  public ?TapeARN $tape_arn;
  public ?Time $tape_recovery_point_time;
  public ?TapeSize $tape_size_in_bytes;
  public ?TapeRecoveryPointStatus $tape_status;

  public function __construct(shape(
    ?'tape_arn' => ?TapeARN,
    ?'tape_recovery_point_time' => ?Time,
    ?'tape_size_in_bytes' => ?TapeSize,
    ?'tape_status' => ?TapeRecoveryPointStatus,
  ) $s = shape()) {
    $this->tape_arn = $s['tape_arn'] ?? '';
    $this->tape_recovery_point_time = $s['tape_recovery_point_time'] ?? 0;
    $this->tape_size_in_bytes = $s['tape_size_in_bytes'] ?? 0;
    $this->tape_status = $s['tape_status'] ?? '';
  }
}

type TapeRecoveryPointInfos = vec<TapeRecoveryPointInfo>;

type TapeRecoveryPointStatus = string;

type TapeSize = int;

type TapeStatus = string;

type TapeUsage = int;

type Tapes = vec<Tape>;

type TargetARN = string;

type TargetName = string;

type Time = int;

type TimeoutInSeconds = int;

class UpdateAutomaticTapeCreationPolicyInput {
  public ?AutomaticTapeCreationRules $automatic_tape_creation_rules;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'automatic_tape_creation_rules' => ?AutomaticTapeCreationRules,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->automatic_tape_creation_rules = $s['automatic_tape_creation_rules'] ?? vec[];
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateAutomaticTapeCreationPolicyOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateBandwidthRateLimitInput {
  public ?BandwidthDownloadRateLimit $average_download_rate_limit_in_bits_per_sec;
  public ?BandwidthUploadRateLimit $average_upload_rate_limit_in_bits_per_sec;
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'average_download_rate_limit_in_bits_per_sec' => ?BandwidthDownloadRateLimit,
    ?'average_upload_rate_limit_in_bits_per_sec' => ?BandwidthUploadRateLimit,
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->average_download_rate_limit_in_bits_per_sec = $s['average_download_rate_limit_in_bits_per_sec'] ?? 0;
    $this->average_upload_rate_limit_in_bits_per_sec = $s['average_upload_rate_limit_in_bits_per_sec'] ?? 0;
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateBandwidthRateLimitOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateChapCredentialsInput {
  public ?IqnName $initiator_name;
  public ?ChapSecret $secret_to_authenticate_initiator;
  public ?ChapSecret $secret_to_authenticate_target;
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'initiator_name' => ?IqnName,
    ?'secret_to_authenticate_initiator' => ?ChapSecret,
    ?'secret_to_authenticate_target' => ?ChapSecret,
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->initiator_name = $s['initiator_name'] ?? '';
    $this->secret_to_authenticate_initiator = $s['secret_to_authenticate_initiator'] ?? '';
    $this->secret_to_authenticate_target = $s['secret_to_authenticate_target'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class UpdateChapCredentialsOutput {
  public ?IqnName $initiator_name;
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'initiator_name' => ?IqnName,
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->initiator_name = $s['initiator_name'] ?? '';
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

class UpdateGatewayInformationInput {
  public ?CloudWatchLogGroupARN $cloud_watch_log_group_arn;
  public ?GatewayARN $gateway_arn;
  public ?GatewayName $gateway_name;
  public ?GatewayTimezone $gateway_timezone;

  public function __construct(shape(
    ?'cloud_watch_log_group_arn' => ?CloudWatchLogGroupARN,
    ?'gateway_arn' => ?GatewayARN,
    ?'gateway_name' => ?GatewayName,
    ?'gateway_timezone' => ?GatewayTimezone,
  ) $s = shape()) {
    $this->cloud_watch_log_group_arn = $s['cloud_watch_log_group_arn'] ?? '';
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->gateway_name = $s['gateway_name'] ?? '';
    $this->gateway_timezone = $s['gateway_timezone'] ?? '';
  }
}

class UpdateGatewayInformationOutput {
  public ?GatewayARN $gateway_arn;
  public ?string $gateway_name;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'gateway_name' => ?string,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->gateway_name = $s['gateway_name'] ?? '';
  }
}

class UpdateGatewaySoftwareNowInput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateGatewaySoftwareNowOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateMaintenanceStartTimeInput {
  public ?DayOfMonth $day_of_month;
  public ?DayOfWeek $day_of_week;
  public ?GatewayARN $gateway_arn;
  public ?HourOfDay $hour_of_day;
  public ?MinuteOfHour $minute_of_hour;

  public function __construct(shape(
    ?'day_of_month' => ?DayOfMonth,
    ?'day_of_week' => ?DayOfWeek,
    ?'gateway_arn' => ?GatewayARN,
    ?'hour_of_day' => ?HourOfDay,
    ?'minute_of_hour' => ?MinuteOfHour,
  ) $s = shape()) {
    $this->day_of_month = $s['day_of_month'] ?? 0;
    $this->day_of_week = $s['day_of_week'] ?? 0;
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->hour_of_day = $s['hour_of_day'] ?? 0;
    $this->minute_of_hour = $s['minute_of_hour'] ?? 0;
  }
}

class UpdateMaintenanceStartTimeOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateNFSFileShareInput {
  public ?FileShareClientList $client_list;
  public ?StorageClass $default_storage_class;
  public ?FileShareARN $file_share_arn;
  public bool $guess_mime_type_enabled;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?NFSFileShareDefaults $nfs_file_share_defaults;
  public ?ObjectACL $object_acl;
  public bool $read_only;
  public bool $requester_pays;
  public ?Squash $squash;

  public function __construct(shape(
    ?'client_list' => ?FileShareClientList,
    ?'default_storage_class' => ?StorageClass,
    ?'file_share_arn' => ?FileShareARN,
    ?'guess_mime_type_enabled' => bool,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'nfs_file_share_defaults' => ?NFSFileShareDefaults,
    ?'object_acl' => ?ObjectACL,
    ?'read_only' => bool,
    ?'requester_pays' => bool,
    ?'squash' => ?Squash,
  ) $s = shape()) {
    $this->client_list = $s['client_list'] ?? vec[];
    $this->default_storage_class = $s['default_storage_class'] ?? '';
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->guess_mime_type_enabled = $s['guess_mime_type_enabled'] ?? false;
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->nfs_file_share_defaults = $s['nfs_file_share_defaults'] ?? null;
    $this->object_acl = $s['object_acl'] ?? '';
    $this->read_only = $s['read_only'] ?? false;
    $this->requester_pays = $s['requester_pays'] ?? false;
    $this->squash = $s['squash'] ?? '';
  }
}

class UpdateNFSFileShareOutput {
  public ?FileShareARN $file_share_arn;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
  }
}

class UpdateSMBFileShareInput {
  public ?FileShareUserList $admin_user_list;
  public ?AuditDestinationARN $audit_destination_arn;
  public ?StorageClass $default_storage_class;
  public ?FileShareARN $file_share_arn;
  public bool $guess_mime_type_enabled;
  public ?FileShareUserList $invalid_user_list;
  public bool $kms_encrypted;
  public ?KMSKey $kms_key;
  public ?ObjectACL $object_acl;
  public bool $read_only;
  public bool $requester_pays;
  public bool $smbacl_enabled;
  public ?FileShareUserList $valid_user_list;

  public function __construct(shape(
    ?'admin_user_list' => ?FileShareUserList,
    ?'audit_destination_arn' => ?AuditDestinationARN,
    ?'default_storage_class' => ?StorageClass,
    ?'file_share_arn' => ?FileShareARN,
    ?'guess_mime_type_enabled' => bool,
    ?'invalid_user_list' => ?FileShareUserList,
    ?'kms_encrypted' => bool,
    ?'kms_key' => ?KMSKey,
    ?'object_acl' => ?ObjectACL,
    ?'read_only' => bool,
    ?'requester_pays' => bool,
    ?'smbacl_enabled' => bool,
    ?'valid_user_list' => ?FileShareUserList,
  ) $s = shape()) {
    $this->admin_user_list = $s['admin_user_list'] ?? vec[];
    $this->audit_destination_arn = $s['audit_destination_arn'] ?? '';
    $this->default_storage_class = $s['default_storage_class'] ?? '';
    $this->file_share_arn = $s['file_share_arn'] ?? '';
    $this->guess_mime_type_enabled = $s['guess_mime_type_enabled'] ?? false;
    $this->invalid_user_list = $s['invalid_user_list'] ?? vec[];
    $this->kms_encrypted = $s['kms_encrypted'] ?? false;
    $this->kms_key = $s['kms_key'] ?? '';
    $this->object_acl = $s['object_acl'] ?? '';
    $this->read_only = $s['read_only'] ?? false;
    $this->requester_pays = $s['requester_pays'] ?? false;
    $this->smbacl_enabled = $s['smbacl_enabled'] ?? false;
    $this->valid_user_list = $s['valid_user_list'] ?? vec[];
  }
}

class UpdateSMBFileShareOutput {
  public ?FileShareARN $file_share_arn;

  public function __construct(shape(
    ?'file_share_arn' => ?FileShareARN,
  ) $s = shape()) {
    $this->file_share_arn = $s['file_share_arn'] ?? '';
  }
}

class UpdateSMBSecurityStrategyInput {
  public ?GatewayARN $gateway_arn;
  public ?SMBSecurityStrategy $smb_security_strategy;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'smb_security_strategy' => ?SMBSecurityStrategy,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->smb_security_strategy = $s['smb_security_strategy'] ?? '';
  }
}

class UpdateSMBSecurityStrategyOutput {
  public ?GatewayARN $gateway_arn;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
  }
}

class UpdateSnapshotScheduleInput {
  public ?Description $description;
  public ?RecurrenceInHours $recurrence_in_hours;
  public ?HourOfDay $start_at;
  public ?Tags $tags;
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'description' => ?Description,
    ?'recurrence_in_hours' => ?RecurrenceInHours,
    ?'start_at' => ?HourOfDay,
    ?'tags' => ?Tags,
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->description = $s['description'] ?? '';
    $this->recurrence_in_hours = $s['recurrence_in_hours'] ?? 0;
    $this->start_at = $s['start_at'] ?? 0;
    $this->tags = $s['tags'] ?? vec[];
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class UpdateSnapshotScheduleOutput {
  public ?VolumeARN $volume_arn;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
  }
}

class UpdateVTLDeviceTypeInput {
  public ?DeviceType $device_type;
  public ?VTLDeviceARN $vtl_device_arn;

  public function __construct(shape(
    ?'device_type' => ?DeviceType,
    ?'vtl_device_arn' => ?VTLDeviceARN,
  ) $s = shape()) {
    $this->device_type = $s['device_type'] ?? '';
    $this->vtl_device_arn = $s['vtl_device_arn'] ?? '';
  }
}

class UpdateVTLDeviceTypeOutput {
  public ?VTLDeviceARN $vtl_device_arn;

  public function __construct(shape(
    ?'vtl_device_arn' => ?VTLDeviceARN,
  ) $s = shape()) {
    $this->vtl_device_arn = $s['vtl_device_arn'] ?? '';
  }
}

class VTLDevice {
  public ?DeviceiSCSIAttributes $devicei_scsi_attributes;
  public ?VTLDeviceARN $vtl_device_arn;
  public ?VTLDeviceProductIdentifier $vtl_device_product_identifier;
  public ?VTLDeviceType $vtl_device_type;
  public ?VTLDeviceVendor $vtl_device_vendor;

  public function __construct(shape(
    ?'devicei_scsi_attributes' => ?DeviceiSCSIAttributes,
    ?'vtl_device_arn' => ?VTLDeviceARN,
    ?'vtl_device_product_identifier' => ?VTLDeviceProductIdentifier,
    ?'vtl_device_type' => ?VTLDeviceType,
    ?'vtl_device_vendor' => ?VTLDeviceVendor,
  ) $s = shape()) {
    $this->devicei_scsi_attributes = $s['devicei_scsi_attributes'] ?? null;
    $this->vtl_device_arn = $s['vtl_device_arn'] ?? '';
    $this->vtl_device_product_identifier = $s['vtl_device_product_identifier'] ?? '';
    $this->vtl_device_type = $s['vtl_device_type'] ?? '';
    $this->vtl_device_vendor = $s['vtl_device_vendor'] ?? '';
  }
}

type VTLDeviceARN = string;

type VTLDeviceARNs = vec<VTLDeviceARN>;

type VTLDeviceProductIdentifier = string;

type VTLDeviceType = string;

type VTLDeviceVendor = string;

type VTLDevices = vec<VTLDevice>;

type VolumeARN = string;

type VolumeARNs = vec<VolumeARN>;

type VolumeAttachmentStatus = string;

type VolumeId = string;

class VolumeInfo {
  public ?GatewayARN $gateway_arn;
  public ?GatewayId $gateway_id;
  public ?VolumeARN $volume_arn;
  public ?VolumeAttachmentStatus $volume_attachment_status;
  public ?VolumeId $volume_id;
  public ?long $volume_size_in_bytes;
  public ?VolumeType $volume_type;

  public function __construct(shape(
    ?'gateway_arn' => ?GatewayARN,
    ?'gateway_id' => ?GatewayId,
    ?'volume_arn' => ?VolumeARN,
    ?'volume_attachment_status' => ?VolumeAttachmentStatus,
    ?'volume_id' => ?VolumeId,
    ?'volume_size_in_bytes' => ?long,
    ?'volume_type' => ?VolumeType,
  ) $s = shape()) {
    $this->gateway_arn = $s['gateway_arn'] ?? '';
    $this->gateway_id = $s['gateway_id'] ?? '';
    $this->volume_arn = $s['volume_arn'] ?? '';
    $this->volume_attachment_status = $s['volume_attachment_status'] ?? '';
    $this->volume_id = $s['volume_id'] ?? '';
    $this->volume_size_in_bytes = $s['volume_size_in_bytes'] ?? 0;
    $this->volume_type = $s['volume_type'] ?? '';
  }
}

type VolumeInfos = vec<VolumeInfo>;

class VolumeRecoveryPointInfo {
  public ?VolumeARN $volume_arn;
  public ?string $volume_recovery_point_time;
  public ?long $volume_size_in_bytes;
  public ?long $volume_usage_in_bytes;

  public function __construct(shape(
    ?'volume_arn' => ?VolumeARN,
    ?'volume_recovery_point_time' => ?string,
    ?'volume_size_in_bytes' => ?long,
    ?'volume_usage_in_bytes' => ?long,
  ) $s = shape()) {
    $this->volume_arn = $s['volume_arn'] ?? '';
    $this->volume_recovery_point_time = $s['volume_recovery_point_time'] ?? '';
    $this->volume_size_in_bytes = $s['volume_size_in_bytes'] ?? 0;
    $this->volume_usage_in_bytes = $s['volume_usage_in_bytes'] ?? 0;
  }
}

type VolumeRecoveryPointInfos = vec<VolumeRecoveryPointInfo>;

type VolumeStatus = string;

type VolumeType = string;

type VolumeUsedInBytes = int;

class VolumeiSCSIAttributes {
  public ?boolean $chap_enabled;
  public ?PositiveIntObject $lun_number;
  public ?NetworkInterfaceId $network_interface_id;
  public ?integer $network_interface_port;
  public ?TargetARN $target_arn;

  public function __construct(shape(
    ?'chap_enabled' => ?boolean,
    ?'lun_number' => ?PositiveIntObject,
    ?'network_interface_id' => ?NetworkInterfaceId,
    ?'network_interface_port' => ?integer,
    ?'target_arn' => ?TargetARN,
  ) $s = shape()) {
    $this->chap_enabled = $s['chap_enabled'] ?? false;
    $this->lun_number = $s['lun_number'] ?? 0;
    $this->network_interface_id = $s['network_interface_id'] ?? '';
    $this->network_interface_port = $s['network_interface_port'] ?? 0;
    $this->target_arn = $s['target_arn'] ?? '';
  }
}

type boolean = bool;

type double = float;

type errorDetails = dict<string, string>;

type integer = int;

type long = int;

type string = string;

