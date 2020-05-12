<?hh // strict
namespace slack\aws\dataexchange;

interface DataExchange {
  public function CancelJob(CancelJobRequest $in): Awaitable<\Errors\Error>;
  public function CreateDataSet(CreateDataSetRequest $in): Awaitable<\Errors\Result<CreateDataSetResponse>>;
  public function CreateJob(CreateJobRequest $in): Awaitable<\Errors\Result<CreateJobResponse>>;
  public function CreateRevision(CreateRevisionRequest $in): Awaitable<\Errors\Result<CreateRevisionResponse>>;
  public function DeleteAsset(DeleteAssetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDataSet(DeleteDataSetRequest $in): Awaitable<\Errors\Error>;
  public function DeleteRevision(DeleteRevisionRequest $in): Awaitable<\Errors\Error>;
  public function GetAsset(GetAssetRequest $in): Awaitable<\Errors\Result<GetAssetResponse>>;
  public function GetDataSet(GetDataSetRequest $in): Awaitable<\Errors\Result<GetDataSetResponse>>;
  public function GetJob(GetJobRequest $in): Awaitable<\Errors\Result<GetJobResponse>>;
  public function GetRevision(GetRevisionRequest $in): Awaitable<\Errors\Result<GetRevisionResponse>>;
  public function ListDataSetRevisions(ListDataSetRevisionsRequest $in): Awaitable<\Errors\Result<ListDataSetRevisionsResponse>>;
  public function ListDataSets(ListDataSetsRequest $in): Awaitable<\Errors\Result<ListDataSetsResponse>>;
  public function ListJobs(ListJobsRequest $in): Awaitable<\Errors\Result<ListJobsResponse>>;
  public function ListRevisionAssets(ListRevisionAssetsRequest $in): Awaitable<\Errors\Result<ListRevisionAssetsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest $in): Awaitable<\Errors\Result<ListTagsForResourceResponse>>;
  public function StartJob(StartJobRequest $in): Awaitable<\Errors\Result<StartJobResponse>>;
  public function TagResource(TagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UntagResource(UntagResourceRequest $in): Awaitable<\Errors\Error>;
  public function UpdateAsset(UpdateAssetRequest $in): Awaitable<\Errors\Result<UpdateAssetResponse>>;
  public function UpdateDataSet(UpdateDataSetRequest $in): Awaitable<\Errors\Result<UpdateDataSetResponse>>;
  public function UpdateRevision(UpdateRevisionRequest $in): Awaitable<\Errors\Result<UpdateRevisionResponse>>;
}

class AccessDeniedException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Arn = string;

class AssetDestinationEntry {
  public ?Id $asset_id;
  public ?__string $bucket;
  public ?__string $key;

  public function __construct(shape(
    ?'asset_id' => ?Id,
    ?'bucket' => ?__string,
    ?'key' => ?__string,
  ) $s = shape()) {
    $this->asset_id = $s['asset_id'] ?? '';
    $this->bucket = $s['bucket'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

class AssetDetails {
  public ?S3SnapshotAsset $s_3_snapshot_asset;

  public function __construct(shape(
    ?'s_3_snapshot_asset' => ?S3SnapshotAsset,
  ) $s = shape()) {
    $this->s_3_snapshot_asset = $s['s_3_snapshot_asset'] ?? null;
  }
}

class AssetEntry {
  public ?Arn $arn;
  public ?AssetDetails $asset_details;
  public ?AssetType $asset_type;
  public ?Timestamp $created_at;
  public ?Id $data_set_id;
  public ?Id $id;
  public ?AssetName $name;
  public ?Id $revision_id;
  public ?Id $source_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_details' => ?AssetDetails,
    ?'asset_type' => ?AssetType,
    ?'created_at' => ?Timestamp,
    ?'data_set_id' => ?Id,
    ?'id' => ?Id,
    ?'name' => ?AssetName,
    ?'revision_id' => ?Id,
    ?'source_id' => ?Id,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_details = $s['asset_details'] ?? null;
    $this->asset_type = $s['asset_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->source_id = $s['source_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type AssetName = string;

class AssetSourceEntry {
  public ?__string $bucket;
  public ?__string $key;

  public function __construct(shape(
    ?'bucket' => ?__string,
    ?'key' => ?__string,
  ) $s = shape()) {
    $this->bucket = $s['bucket'] ?? '';
    $this->key = $s['key'] ?? '';
  }
}

type AssetType = string;

class CancelJobRequest {
  public ?__string $job_id;

  public function __construct(shape(
    ?'job_id' => ?__string,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

type Code = string;

class ConflictException {
  public ?__string $message;
  public ?__string $resource_id;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'resource_id' => ?__string,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

class CreateDataSetRequest {
  public ?AssetType $asset_type;
  public ?Description $description;
  public ?Name $name;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'asset_type' => ?AssetType,
    ?'description' => ?Description,
    ?'name' => ?Name,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->asset_type = $s['asset_type'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateDataSetResponse {
  public ?Arn $arn;
  public ?AssetType $asset_type;
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?Id $id;
  public ?Name $name;
  public ?Origin $origin;
  public ?OriginDetails $origin_details;
  public ?Id $source_id;
  public ?MapOf__string $tags;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_type' => ?AssetType,
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'id' => ?Id,
    ?'name' => ?Name,
    ?'origin' => ?Origin,
    ?'origin_details' => ?OriginDetails,
    ?'source_id' => ?Id,
    ?'tags' => ?MapOf__string,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_type = $s['asset_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->origin = $s['origin'] ?? '';
    $this->origin_details = $s['origin_details'] ?? null;
    $this->source_id = $s['source_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class CreateJobRequest {
  public ?RequestDetails $details;
  public ?Type $type;

  public function __construct(shape(
    ?'details' => ?RequestDetails,
    ?'type' => ?Type,
  ) $s = shape()) {
    $this->details = $s['details'] ?? null;
    $this->type = $s['type'] ?? '';
  }
}

class CreateJobResponse {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?ResponseDetails $details;
  public ?ListOfJobError $errors;
  public ?Id $id;
  public ?State $state;
  public ?Type $type;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'details' => ?ResponseDetails,
    ?'errors' => ?ListOfJobError,
    ?'id' => ?Id,
    ?'state' => ?State,
    ?'type' => ?Type,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->details = $s['details'] ?? null;
    $this->errors = $s['errors'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class CreateRevisionRequest {
  public ?__stringMin0Max16384 $comment;
  public ?__string $data_set_id;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'comment' => ?__stringMin0Max16384,
    ?'data_set_id' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class CreateRevisionResponse {
  public ?Arn $arn;
  public ?__stringMin0Max16384 $comment;
  public ?Timestamp $created_at;
  public ?Id $data_set_id;
  public ?__boolean $finalized;
  public ?Id $id;
  public ?Id $source_id;
  public ?MapOf__string $tags;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'comment' => ?__stringMin0Max16384,
    ?'created_at' => ?Timestamp,
    ?'data_set_id' => ?Id,
    ?'finalized' => ?__boolean,
    ?'id' => ?Id,
    ?'source_id' => ?Id,
    ?'tags' => ?MapOf__string,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->comment = $s['comment'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->finalized = $s['finalized'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->source_id = $s['source_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class DataSetEntry {
  public ?Arn $arn;
  public ?AssetType $asset_type;
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?Id $id;
  public ?Name $name;
  public ?Origin $origin;
  public ?OriginDetails $origin_details;
  public ?Id $source_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_type' => ?AssetType,
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'id' => ?Id,
    ?'name' => ?Name,
    ?'origin' => ?Origin,
    ?'origin_details' => ?OriginDetails,
    ?'source_id' => ?Id,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_type = $s['asset_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->origin = $s['origin'] ?? '';
    $this->origin_details = $s['origin_details'] ?? null;
    $this->source_id = $s['source_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class DeleteAssetRequest {
  public ?__string $asset_id;
  public ?__string $data_set_id;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'asset_id' => ?__string,
    ?'data_set_id' => ?__string,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->asset_id = $s['asset_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class DeleteDataSetRequest {
  public ?__string $data_set_id;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
  }
}

class DeleteRevisionRequest {
  public ?__string $data_set_id;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

type Description = string;

class Details {
  public ?ImportAssetFromSignedUrlJobErrorDetails $import_asset_from_signed_url_job_error_details;
  public ?ListOfAssetSourceEntry $import_assets_from_s_3_job_error_details;

  public function __construct(shape(
    ?'import_asset_from_signed_url_job_error_details' => ?ImportAssetFromSignedUrlJobErrorDetails,
    ?'import_assets_from_s_3_job_error_details' => ?ListOfAssetSourceEntry,
  ) $s = shape()) {
    $this->import_asset_from_signed_url_job_error_details = $s['import_asset_from_signed_url_job_error_details'] ?? null;
    $this->import_assets_from_s_3_job_error_details = $s['import_assets_from_s_3_job_error_details'] ?? vec[];
  }
}

class ExportAssetToSignedUrlRequestDetails {
  public ?Id $asset_id;
  public ?Id $data_set_id;
  public ?Id $revision_id;

  public function __construct(shape(
    ?'asset_id' => ?Id,
    ?'data_set_id' => ?Id,
    ?'revision_id' => ?Id,
  ) $s = shape()) {
    $this->asset_id = $s['asset_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ExportAssetToSignedUrlResponseDetails {
  public ?Id $asset_id;
  public ?Id $data_set_id;
  public ?Id $revision_id;
  public ?__string $signed_url;
  public ?Timestamp $signed_url_expires_at;

  public function __construct(shape(
    ?'asset_id' => ?Id,
    ?'data_set_id' => ?Id,
    ?'revision_id' => ?Id,
    ?'signed_url' => ?__string,
    ?'signed_url_expires_at' => ?Timestamp,
  ) $s = shape()) {
    $this->asset_id = $s['asset_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->signed_url = $s['signed_url'] ?? '';
    $this->signed_url_expires_at = $s['signed_url_expires_at'] ?? 0;
  }
}

class ExportAssetsToS3RequestDetails {
  public ?ListOfAssetDestinationEntry $asset_destinations;
  public ?Id $data_set_id;
  public ?ExportServerSideEncryption $encryption;
  public ?Id $revision_id;

  public function __construct(shape(
    ?'asset_destinations' => ?ListOfAssetDestinationEntry,
    ?'data_set_id' => ?Id,
    ?'encryption' => ?ExportServerSideEncryption,
    ?'revision_id' => ?Id,
  ) $s = shape()) {
    $this->asset_destinations = $s['asset_destinations'] ?? vec[];
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->encryption = $s['encryption'] ?? null;
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ExportAssetsToS3ResponseDetails {
  public ?ListOfAssetDestinationEntry $asset_destinations;
  public ?Id $data_set_id;
  public ?ExportServerSideEncryption $encryption;
  public ?Id $revision_id;

  public function __construct(shape(
    ?'asset_destinations' => ?ListOfAssetDestinationEntry,
    ?'data_set_id' => ?Id,
    ?'encryption' => ?ExportServerSideEncryption,
    ?'revision_id' => ?Id,
  ) $s = shape()) {
    $this->asset_destinations = $s['asset_destinations'] ?? vec[];
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->encryption = $s['encryption'] ?? null;
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ExportServerSideEncryption {
  public ?__string $kms_key_arn;
  public ?ServerSideEncryptionTypes $type;

  public function __construct(shape(
    ?'kms_key_arn' => ?__string,
    ?'type' => ?ServerSideEncryptionTypes,
  ) $s = shape()) {
    $this->kms_key_arn = $s['kms_key_arn'] ?? '';
    $this->type = $s['type'] ?? '';
  }
}

class GetAssetRequest {
  public ?__string $asset_id;
  public ?__string $data_set_id;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'asset_id' => ?__string,
    ?'data_set_id' => ?__string,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->asset_id = $s['asset_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class GetAssetResponse {
  public ?Arn $arn;
  public ?AssetDetails $asset_details;
  public ?AssetType $asset_type;
  public ?Timestamp $created_at;
  public ?Id $data_set_id;
  public ?Id $id;
  public ?AssetName $name;
  public ?Id $revision_id;
  public ?Id $source_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_details' => ?AssetDetails,
    ?'asset_type' => ?AssetType,
    ?'created_at' => ?Timestamp,
    ?'data_set_id' => ?Id,
    ?'id' => ?Id,
    ?'name' => ?AssetName,
    ?'revision_id' => ?Id,
    ?'source_id' => ?Id,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_details = $s['asset_details'] ?? null;
    $this->asset_type = $s['asset_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->source_id = $s['source_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class GetDataSetRequest {
  public ?__string $data_set_id;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
  }
}

class GetDataSetResponse {
  public ?Arn $arn;
  public ?AssetType $asset_type;
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?Id $id;
  public ?Name $name;
  public ?Origin $origin;
  public ?OriginDetails $origin_details;
  public ?Id $source_id;
  public ?MapOf__string $tags;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_type' => ?AssetType,
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'id' => ?Id,
    ?'name' => ?Name,
    ?'origin' => ?Origin,
    ?'origin_details' => ?OriginDetails,
    ?'source_id' => ?Id,
    ?'tags' => ?MapOf__string,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_type = $s['asset_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->origin = $s['origin'] ?? '';
    $this->origin_details = $s['origin_details'] ?? null;
    $this->source_id = $s['source_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class GetJobRequest {
  public ?__string $job_id;

  public function __construct(shape(
    ?'job_id' => ?__string,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class GetJobResponse {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?ResponseDetails $details;
  public ?ListOfJobError $errors;
  public ?Id $id;
  public ?State $state;
  public ?Type $type;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'details' => ?ResponseDetails,
    ?'errors' => ?ListOfJobError,
    ?'id' => ?Id,
    ?'state' => ?State,
    ?'type' => ?Type,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->details = $s['details'] ?? null;
    $this->errors = $s['errors'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class GetRevisionRequest {
  public ?__string $data_set_id;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class GetRevisionResponse {
  public ?Arn $arn;
  public ?__stringMin0Max16384 $comment;
  public ?Timestamp $created_at;
  public ?Id $data_set_id;
  public ?__boolean $finalized;
  public ?Id $id;
  public ?Id $source_id;
  public ?MapOf__string $tags;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'comment' => ?__stringMin0Max16384,
    ?'created_at' => ?Timestamp,
    ?'data_set_id' => ?Id,
    ?'finalized' => ?__boolean,
    ?'id' => ?Id,
    ?'source_id' => ?Id,
    ?'tags' => ?MapOf__string,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->comment = $s['comment'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->finalized = $s['finalized'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->source_id = $s['source_id'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

type Id = string;

class ImportAssetFromSignedUrlJobErrorDetails {
  public ?AssetName $asset_name;

  public function __construct(shape(
    ?'asset_name' => ?AssetName,
  ) $s = shape()) {
    $this->asset_name = $s['asset_name'] ?? '';
  }
}

class ImportAssetFromSignedUrlRequestDetails {
  public ?AssetName $asset_name;
  public ?Id $data_set_id;
  public ?__stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 $md_5_hash;
  public ?Id $revision_id;

  public function __construct(shape(
    ?'asset_name' => ?AssetName,
    ?'data_set_id' => ?Id,
    ?'md_5_hash' => ?__stringMin24Max24PatternAZaZ094AZaZ092AZaZ093,
    ?'revision_id' => ?Id,
  ) $s = shape()) {
    $this->asset_name = $s['asset_name'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->md_5_hash = $s['md_5_hash'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ImportAssetFromSignedUrlResponseDetails {
  public ?AssetName $asset_name;
  public ?Id $data_set_id;
  public ?__stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 $md_5_hash;
  public ?Id $revision_id;
  public ?__string $signed_url;
  public ?Timestamp $signed_url_expires_at;

  public function __construct(shape(
    ?'asset_name' => ?AssetName,
    ?'data_set_id' => ?Id,
    ?'md_5_hash' => ?__stringMin24Max24PatternAZaZ094AZaZ092AZaZ093,
    ?'revision_id' => ?Id,
    ?'signed_url' => ?__string,
    ?'signed_url_expires_at' => ?Timestamp,
  ) $s = shape()) {
    $this->asset_name = $s['asset_name'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->md_5_hash = $s['md_5_hash'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->signed_url = $s['signed_url'] ?? '';
    $this->signed_url_expires_at = $s['signed_url_expires_at'] ?? 0;
  }
}

class ImportAssetsFromS3RequestDetails {
  public ?ListOfAssetSourceEntry $asset_sources;
  public ?Id $data_set_id;
  public ?Id $revision_id;

  public function __construct(shape(
    ?'asset_sources' => ?ListOfAssetSourceEntry,
    ?'data_set_id' => ?Id,
    ?'revision_id' => ?Id,
  ) $s = shape()) {
    $this->asset_sources = $s['asset_sources'] ?? vec[];
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ImportAssetsFromS3ResponseDetails {
  public ?ListOfAssetSourceEntry $asset_sources;
  public ?Id $data_set_id;
  public ?Id $revision_id;

  public function __construct(shape(
    ?'asset_sources' => ?ListOfAssetSourceEntry,
    ?'data_set_id' => ?Id,
    ?'revision_id' => ?Id,
  ) $s = shape()) {
    $this->asset_sources = $s['asset_sources'] ?? vec[];
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class InternalServerException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class JobEntry {
  public ?Arn $arn;
  public ?Timestamp $created_at;
  public ?ResponseDetails $details;
  public ?ListOfJobError $errors;
  public ?Id $id;
  public ?State $state;
  public ?Type $type;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'created_at' => ?Timestamp,
    ?'details' => ?ResponseDetails,
    ?'errors' => ?ListOfJobError,
    ?'id' => ?Id,
    ?'state' => ?State,
    ?'type' => ?Type,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->details = $s['details'] ?? null;
    $this->errors = $s['errors'] ?? vec[];
    $this->id = $s['id'] ?? '';
    $this->state = $s['state'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class JobError {
  public ?Code $code;
  public ?Details $details;
  public ?JobErrorLimitName $limit_name;
  public ?__double $limit_value;
  public ?__string $message;
  public ?__string $resource_id;
  public ?JobErrorResourceTypes $resource_type;

  public function __construct(shape(
    ?'code' => ?Code,
    ?'details' => ?Details,
    ?'limit_name' => ?JobErrorLimitName,
    ?'limit_value' => ?__double,
    ?'message' => ?__string,
    ?'resource_id' => ?__string,
    ?'resource_type' => ?JobErrorResourceTypes,
  ) $s = shape()) {
    $this->code = $s['code'] ?? '';
    $this->details = $s['details'] ?? null;
    $this->limit_name = $s['limit_name'] ?? '';
    $this->limit_value = $s['limit_value'] ?? 0.0;
    $this->message = $s['message'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type JobErrorLimitName = string;

type JobErrorResourceTypes = string;

type LimitName = string;

class ListDataSetRevisionsRequest {
  public ?__string $data_set_id;
  public ?MaxResults $max_results;
  public ?__string $next_token;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDataSetRevisionsResponse {
  public ?NextToken $next_token;
  public ?ListOfRevisionEntry $revisions;

  public function __construct(shape(
    ?'next_token' => ?NextToken,
    ?'revisions' => ?ListOfRevisionEntry,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->revisions = $s['revisions'] ?? vec[];
  }
}

class ListDataSetsRequest {
  public ?MaxResults $max_results;
  public ?__string $next_token;
  public ?__string $origin;

  public function __construct(shape(
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
    ?'origin' => ?__string,
  ) $s = shape()) {
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->origin = $s['origin'] ?? '';
  }
}

class ListDataSetsResponse {
  public ?ListOfDataSetEntry $data_sets;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'data_sets' => ?ListOfDataSetEntry,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->data_sets = $s['data_sets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListJobsRequest {
  public ?__string $data_set_id;
  public ?MaxResults $max_results;
  public ?__string $next_token;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ListJobsResponse {
  public ?ListOfJobEntry $jobs;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'jobs' => ?ListOfJobEntry,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->jobs = $s['jobs'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type ListOfAssetDestinationEntry = vec<AssetDestinationEntry>;

type ListOfAssetEntry = vec<AssetEntry>;

type ListOfAssetSourceEntry = vec<AssetSourceEntry>;

type ListOfDataSetEntry = vec<DataSetEntry>;

type ListOfJobEntry = vec<JobEntry>;

type ListOfJobError = vec<JobError>;

type ListOfRevisionEntry = vec<RevisionEntry>;

type ListOf__string = vec<__string>;

class ListRevisionAssetsRequest {
  public ?__string $data_set_id;
  public ?MaxResults $max_results;
  public ?__string $next_token;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?__string,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class ListRevisionAssetsResponse {
  public ?ListOfAssetEntry $assets;
  public ?NextToken $next_token;

  public function __construct(shape(
    ?'assets' => ?ListOfAssetEntry,
    ?'next_token' => ?NextToken,
  ) $s = shape()) {
    $this->assets = $s['assets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListTagsForResourceRequest {
  public ?__string $resource_arn;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
  }
}

class ListTagsForResourceResponse {
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->tags = $s['tags'] ?? dict[];
  }
}

type MapOf__string = dict<__string, __string>;

type MaxResults = int;

type Name = string;

type NextToken = string;

type Origin = string;

class OriginDetails {
  public ?__string $product_id;

  public function __construct(shape(
    ?'product_id' => ?__string,
  ) $s = shape()) {
    $this->product_id = $s['product_id'] ?? '';
  }
}

class RequestDetails {
  public ?ExportAssetToSignedUrlRequestDetails $export_asset_to_signed_url;
  public ?ExportAssetsToS3RequestDetails $export_assets_to_s_3;
  public ?ImportAssetFromSignedUrlRequestDetails $import_asset_from_signed_url;
  public ?ImportAssetsFromS3RequestDetails $import_assets_from_s_3;

  public function __construct(shape(
    ?'export_asset_to_signed_url' => ?ExportAssetToSignedUrlRequestDetails,
    ?'export_assets_to_s_3' => ?ExportAssetsToS3RequestDetails,
    ?'import_asset_from_signed_url' => ?ImportAssetFromSignedUrlRequestDetails,
    ?'import_assets_from_s_3' => ?ImportAssetsFromS3RequestDetails,
  ) $s = shape()) {
    $this->export_asset_to_signed_url = $s['export_asset_to_signed_url'] ?? null;
    $this->export_assets_to_s_3 = $s['export_assets_to_s_3'] ?? null;
    $this->import_asset_from_signed_url = $s['import_asset_from_signed_url'] ?? null;
    $this->import_assets_from_s_3 = $s['import_assets_from_s_3'] ?? null;
  }
}

class ResourceNotFoundException {
  public ?__string $message;
  public ?__string $resource_id;
  public ?ResourceType $resource_type;

  public function __construct(shape(
    ?'message' => ?__string,
    ?'resource_id' => ?__string,
    ?'resource_type' => ?ResourceType,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
    $this->resource_id = $s['resource_id'] ?? '';
    $this->resource_type = $s['resource_type'] ?? '';
  }
}

type ResourceType = string;

class ResponseDetails {
  public ?ExportAssetToSignedUrlResponseDetails $export_asset_to_signed_url;
  public ?ExportAssetsToS3ResponseDetails $export_assets_to_s_3;
  public ?ImportAssetFromSignedUrlResponseDetails $import_asset_from_signed_url;
  public ?ImportAssetsFromS3ResponseDetails $import_assets_from_s_3;

  public function __construct(shape(
    ?'export_asset_to_signed_url' => ?ExportAssetToSignedUrlResponseDetails,
    ?'export_assets_to_s_3' => ?ExportAssetsToS3ResponseDetails,
    ?'import_asset_from_signed_url' => ?ImportAssetFromSignedUrlResponseDetails,
    ?'import_assets_from_s_3' => ?ImportAssetsFromS3ResponseDetails,
  ) $s = shape()) {
    $this->export_asset_to_signed_url = $s['export_asset_to_signed_url'] ?? null;
    $this->export_assets_to_s_3 = $s['export_assets_to_s_3'] ?? null;
    $this->import_asset_from_signed_url = $s['import_asset_from_signed_url'] ?? null;
    $this->import_assets_from_s_3 = $s['import_assets_from_s_3'] ?? null;
  }
}

class RevisionEntry {
  public ?Arn $arn;
  public ?__stringMin0Max16384 $comment;
  public ?Timestamp $created_at;
  public ?Id $data_set_id;
  public ?__boolean $finalized;
  public ?Id $id;
  public ?Id $source_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'comment' => ?__stringMin0Max16384,
    ?'created_at' => ?Timestamp,
    ?'data_set_id' => ?Id,
    ?'finalized' => ?__boolean,
    ?'id' => ?Id,
    ?'source_id' => ?Id,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->comment = $s['comment'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->finalized = $s['finalized'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->source_id = $s['source_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class S3SnapshotAsset {
  public ?__doubleMin0 $size;

  public function __construct(shape(
    ?'size' => ?__doubleMin0,
  ) $s = shape()) {
    $this->size = $s['size'] ?? 0.0;
  }
}

type ServerSideEncryptionTypes = string;

class ServiceLimitExceededException {
  public ?LimitName $limit_name;
  public ?__double $limit_value;
  public ?__string $message;

  public function __construct(shape(
    ?'limit_name' => ?LimitName,
    ?'limit_value' => ?__double,
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->limit_name = $s['limit_name'] ?? '';
    $this->limit_value = $s['limit_value'] ?? 0.0;
    $this->message = $s['message'] ?? '';
  }
}

class StartJobRequest {
  public ?__string $job_id;

  public function __construct(shape(
    ?'job_id' => ?__string,
  ) $s = shape()) {
    $this->job_id = $s['job_id'] ?? '';
  }
}

class StartJobResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type State = string;

class TagResourceRequest {
  public ?__string $resource_arn;
  public ?MapOf__string $tags;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tags' => ?MapOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tags = $s['tags'] ?? dict[];
  }
}

class ThrottlingException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

type Type = string;

class UntagResourceRequest {
  public ?__string $resource_arn;
  public ?ListOf__string $tag_keys;

  public function __construct(shape(
    ?'resource_arn' => ?__string,
    ?'tag_keys' => ?ListOf__string,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->tag_keys = $s['tag_keys'] ?? vec[];
  }
}

class UpdateAssetRequest {
  public ?__string $asset_id;
  public ?__string $data_set_id;
  public ?AssetName $name;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'asset_id' => ?__string,
    ?'data_set_id' => ?__string,
    ?'name' => ?AssetName,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->asset_id = $s['asset_id'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class UpdateAssetResponse {
  public ?Arn $arn;
  public ?AssetDetails $asset_details;
  public ?AssetType $asset_type;
  public ?Timestamp $created_at;
  public ?Id $data_set_id;
  public ?Id $id;
  public ?AssetName $name;
  public ?Id $revision_id;
  public ?Id $source_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_details' => ?AssetDetails,
    ?'asset_type' => ?AssetType,
    ?'created_at' => ?Timestamp,
    ?'data_set_id' => ?Id,
    ?'id' => ?Id,
    ?'name' => ?AssetName,
    ?'revision_id' => ?Id,
    ?'source_id' => ?Id,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_details = $s['asset_details'] ?? null;
    $this->asset_type = $s['asset_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->revision_id = $s['revision_id'] ?? '';
    $this->source_id = $s['source_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class UpdateDataSetRequest {
  public ?__string $data_set_id;
  public ?Description $description;
  public ?Name $name;

  public function __construct(shape(
    ?'data_set_id' => ?__string,
    ?'description' => ?Description,
    ?'name' => ?Name,
  ) $s = shape()) {
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->description = $s['description'] ?? '';
    $this->name = $s['name'] ?? '';
  }
}

class UpdateDataSetResponse {
  public ?Arn $arn;
  public ?AssetType $asset_type;
  public ?Timestamp $created_at;
  public ?Description $description;
  public ?Id $id;
  public ?Name $name;
  public ?Origin $origin;
  public ?OriginDetails $origin_details;
  public ?Id $source_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'asset_type' => ?AssetType,
    ?'created_at' => ?Timestamp,
    ?'description' => ?Description,
    ?'id' => ?Id,
    ?'name' => ?Name,
    ?'origin' => ?Origin,
    ?'origin_details' => ?OriginDetails,
    ?'source_id' => ?Id,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->asset_type = $s['asset_type'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->description = $s['description'] ?? '';
    $this->id = $s['id'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->origin = $s['origin'] ?? '';
    $this->origin_details = $s['origin_details'] ?? null;
    $this->source_id = $s['source_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class UpdateRevisionRequest {
  public ?__stringMin0Max16384 $comment;
  public ?__string $data_set_id;
  public ?__boolean $finalized;
  public ?__string $revision_id;

  public function __construct(shape(
    ?'comment' => ?__stringMin0Max16384,
    ?'data_set_id' => ?__string,
    ?'finalized' => ?__boolean,
    ?'revision_id' => ?__string,
  ) $s = shape()) {
    $this->comment = $s['comment'] ?? '';
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->finalized = $s['finalized'] ?? false;
    $this->revision_id = $s['revision_id'] ?? '';
  }
}

class UpdateRevisionResponse {
  public ?Arn $arn;
  public ?__stringMin0Max16384 $comment;
  public ?Timestamp $created_at;
  public ?Id $data_set_id;
  public ?__boolean $finalized;
  public ?Id $id;
  public ?Id $source_id;
  public ?Timestamp $updated_at;

  public function __construct(shape(
    ?'arn' => ?Arn,
    ?'comment' => ?__stringMin0Max16384,
    ?'created_at' => ?Timestamp,
    ?'data_set_id' => ?Id,
    ?'finalized' => ?__boolean,
    ?'id' => ?Id,
    ?'source_id' => ?Id,
    ?'updated_at' => ?Timestamp,
  ) $s = shape()) {
    $this->arn = $s['arn'] ?? '';
    $this->comment = $s['comment'] ?? '';
    $this->created_at = $s['created_at'] ?? 0;
    $this->data_set_id = $s['data_set_id'] ?? '';
    $this->finalized = $s['finalized'] ?? false;
    $this->id = $s['id'] ?? '';
    $this->source_id = $s['source_id'] ?? '';
    $this->updated_at = $s['updated_at'] ?? 0;
  }
}

class ValidationException {
  public ?__string $message;

  public function __construct(shape(
    ?'message' => ?__string,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type __boolean = bool;

type __double = float;

type __doubleMin0 = float;

type __string = string;

type __stringMin0Max16384 = string;

type __stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 = string;

