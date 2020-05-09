<?hh // strict
namespace slack\aws\dataexchange;

interface DataExchange {
  public function CreateRevision(CreateRevisionRequest) Awaitable<Errors\Result<CreateRevisionResponse>>;
  public function GetDataSet(GetDataSetRequest) Awaitable<Errors\Result<GetDataSetResponse>>;
  public function ListDataSets(ListDataSetsRequest) Awaitable<Errors\Result<ListDataSetsResponse>>;
  public function ListRevisionAssets(ListRevisionAssetsRequest) Awaitable<Errors\Result<ListRevisionAssetsResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function DeleteAsset(DeleteAssetRequest) Awaitable<Errors\Error>;
  public function GetAsset(GetAssetRequest) Awaitable<Errors\Result<GetAssetResponse>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResponse>>;
  public function ListDataSetRevisions(ListDataSetRevisionsRequest) Awaitable<Errors\Result<ListDataSetRevisionsResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function CancelJob(CancelJobRequest) Awaitable<Errors\Error>;
  public function CreateDataSet(CreateDataSetRequest) Awaitable<Errors\Result<CreateDataSetResponse>>;
  public function DeleteDataSet(DeleteDataSetRequest) Awaitable<Errors\Error>;
  public function DeleteRevision(DeleteRevisionRequest) Awaitable<Errors\Error>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function StartJob(StartJobRequest) Awaitable<Errors\Result<StartJobResponse>>;
  public function CreateJob(CreateJobRequest) Awaitable<Errors\Result<CreateJobResponse>>;
  public function GetRevision(GetRevisionRequest) Awaitable<Errors\Result<GetRevisionResponse>>;
  public function UpdateAsset(UpdateAssetRequest) Awaitable<Errors\Result<UpdateAssetResponse>>;
  public function UpdateDataSet(UpdateDataSetRequest) Awaitable<Errors\Result<UpdateDataSetResponse>>;
  public function UpdateRevision(UpdateRevisionRequest) Awaitable<Errors\Result<UpdateRevisionResponse>>;
}

class CreateRevisionResponse {
  public Timestamp $updated_at;
  public Id $id;
  public __stringMin0Max16384 $comment;
  public Timestamp $created_at;
  public Id $data_set_id;
  public __boolean $finalized;
  public Id $source_id;
  public MapOf__string $tags;
  public Arn $arn;
}

class Description {
}

class ExportAssetToSignedUrlResponseDetails {
  public Timestamp $signed_url_expires_at;
  public Id $asset_id;
  public Id $data_set_id;
  public Id $revision_id;
  public __string $signed_url;
}

class ImportAssetFromSignedUrlJobErrorDetails {
  public AssetName $asset_name;
}

class Type {
}

class __boolean {
}

class ListOfJobError {
}

class AssetSourceEntry {
  public __string $key;
  public __string $bucket;
}

class DeleteAssetRequest {
  public __string $revision_id;
  public __string $asset_id;
  public __string $data_set_id;
}

class GetJobRequest {
  public __string $job_id;
}

class Id {
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class NextToken {
}

class __string {
}

class __stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 {
}

class CreateJobResponse {
  public State $state;
  public Type $type;
  public Timestamp $updated_at;
  public Arn $arn;
  public Timestamp $created_at;
  public ResponseDetails $details;
  public ListOfJobError $errors;
  public Id $id;
}

class ExportAssetToSignedUrlRequestDetails {
  public Id $asset_id;
  public Id $data_set_id;
  public Id $revision_id;
}

class ExportAssetsToS3RequestDetails {
  public ExportServerSideEncryption $encryption;
  public Id $revision_id;
  public ListOfAssetDestinationEntry $asset_destinations;
  public Id $data_set_id;
}

class GetJobResponse {
  public ResponseDetails $details;
  public ListOfJobError $errors;
  public Id $id;
  public State $state;
  public Type $type;
  public Timestamp $updated_at;
  public Arn $arn;
  public Timestamp $created_at;
}

class JobErrorResourceTypes {
}

class ListDataSetRevisionsResponse {
  public NextToken $next_token;
  public ListOfRevisionEntry $revisions;
}

class ListTagsForResourceResponse {
  public MapOf__string $tags;
}

class ResourceNotFoundException {
  public __string $message;
  public __string $resource_id;
  public ResourceType $resource_type;
}

class S3SnapshotAsset {
  public __doubleMin0 $size;
}

class StartJobResponse {
}

class MapOf__string {
}

class AccessDeniedException {
  public __string $message;
}

class AssetName {
}

class Details {
  public ImportAssetFromSignedUrlJobErrorDetails $import_asset_from_signed_url_job_error_details;
  public ListOfAssetSourceEntry $import_assets_from_s_3_job_error_details;
}

class ImportAssetFromSignedUrlRequestDetails {
  public Id $revision_id;
  public AssetName $asset_name;
  public Id $data_set_id;
  public __stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 $md_5_hash;
}

class CreateDataSetResponse {
  public Origin $origin;
  public OriginDetails $origin_details;
  public MapOf__string $tags;
  public Arn $arn;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Description $description;
  public Id $id;
  public Name $name;
  public Id $source_id;
  public Timestamp $updated_at;
}

class JobEntry {
  public State $state;
  public Type $type;
  public Timestamp $updated_at;
  public Arn $arn;
  public Timestamp $created_at;
  public ResponseDetails $details;
  public ListOfJobError $errors;
  public Id $id;
}

class ListRevisionAssetsResponse {
  public ListOfAssetEntry $assets;
  public NextToken $next_token;
}

class ServiceLimitExceededException {
  public LimitName $limit_name;
  public __double $limit_value;
  public __string $message;
}

class UntagResourceRequest {
  public __string $resource_arn;
  public ListOf__string $tag_keys;
}

class UpdateAssetRequest {
  public __string $revision_id;
  public __string $asset_id;
  public __string $data_set_id;
  public AssetName $name;
}

class ValidationException {
  public __string $message;
}

class GetDataSetRequest {
  public __string $data_set_id;
}

class ExportServerSideEncryption {
  public __string $kms_key_arn;
  public ServerSideEncryptionTypes $type;
}

class ListJobsRequest {
  public __string $revision_id;
  public __string $data_set_id;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListOfAssetDestinationEntry {
}

class OriginDetails {
  public __string $product_id;
}

class RevisionEntry {
  public Arn $arn;
  public __stringMin0Max16384 $comment;
  public Timestamp $created_at;
  public Id $data_set_id;
  public __boolean $finalized;
  public Id $id;
  public Id $source_id;
  public Timestamp $updated_at;
}

class StartJobRequest {
  public __string $job_id;
}

class ListOfAssetEntry {
}

class ConflictException {
  public __string $resource_id;
  public ResourceType $resource_type;
  public __string $message;
}

class CreateJobRequest {
  public RequestDetails $details;
  public Type $type;
}

class TagResourceRequest {
  public __string $resource_arn;
  public MapOf__string $tags;
}

class CancelJobRequest {
  public __string $job_id;
}

class ExportAssetsToS3ResponseDetails {
  public ListOfAssetDestinationEntry $asset_destinations;
  public Id $data_set_id;
  public ExportServerSideEncryption $encryption;
  public Id $revision_id;
}

class LimitName {
}

class ResponseDetails {
  public ImportAssetsFromS3ResponseDetails $import_assets_from_s_3;
  public ExportAssetToSignedUrlResponseDetails $export_asset_to_signed_url;
  public ExportAssetsToS3ResponseDetails $export_assets_to_s_3;
  public ImportAssetFromSignedUrlResponseDetails $import_asset_from_signed_url;
}

class UpdateAssetResponse {
  public Id $data_set_id;
  public Id $id;
  public AssetName $name;
  public Id $source_id;
  public Arn $arn;
  public AssetType $asset_type;
  public Id $revision_id;
  public Timestamp $updated_at;
  public AssetDetails $asset_details;
  public Timestamp $created_at;
}

class UpdateRevisionRequest {
  public __stringMin0Max16384 $comment;
  public __string $data_set_id;
  public __boolean $finalized;
  public __string $revision_id;
}

class ListOfDataSetEntry {
}

class ListOfJobEntry {
}

class Arn {
}

class DeleteRevisionRequest {
  public __string $data_set_id;
  public __string $revision_id;
}

class GetRevisionRequest {
  public __string $revision_id;
  public __string $data_set_id;
}

class ListDataSetRevisionsRequest {
  public __string $data_set_id;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListOfAssetSourceEntry {
}

class __doubleMin0 {
}

class AssetType {
}

class CreateRevisionRequest {
  public __stringMin0Max16384 $comment;
  public __string $data_set_id;
  public MapOf__string $tags;
}

class ImportAssetsFromS3RequestDetails {
  public ListOfAssetSourceEntry $asset_sources;
  public Id $data_set_id;
  public Id $revision_id;
}

class ImportAssetsFromS3ResponseDetails {
  public ListOfAssetSourceEntry $asset_sources;
  public Id $data_set_id;
  public Id $revision_id;
}

class ListDataSetsRequest {
  public __string $origin;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListJobsResponse {
  public ListOfJobEntry $jobs;
  public NextToken $next_token;
}

class State {
}

class UpdateDataSetResponse {
  public OriginDetails $origin_details;
  public Timestamp $updated_at;
  public Arn $arn;
  public Timestamp $created_at;
  public Description $description;
  public Name $name;
  public AssetType $asset_type;
  public Id $id;
  public Origin $origin;
  public Id $source_id;
}

class GetAssetResponse {
  public AssetType $asset_type;
  public Id $id;
  public AssetName $name;
  public Id $source_id;
  public Timestamp $updated_at;
  public Arn $arn;
  public AssetDetails $asset_details;
  public Timestamp $created_at;
  public Id $data_set_id;
  public Id $revision_id;
}

class JobError {
  public JobErrorLimitName $limit_name;
  public __double $limit_value;
  public __string $message;
  public __string $resource_id;
  public JobErrorResourceTypes $resource_type;
  public Code $code;
  public Details $details;
}

class ListRevisionAssetsRequest {
  public __string $data_set_id;
  public MaxResults $max_results;
  public __string $next_token;
  public __string $revision_id;
}

class UpdateRevisionResponse {
  public __boolean $finalized;
  public Id $id;
  public Id $source_id;
  public Timestamp $updated_at;
  public Arn $arn;
  public __stringMin0Max16384 $comment;
  public Timestamp $created_at;
  public Id $data_set_id;
}

class ListOfRevisionEntry {
}

class AssetDestinationEntry {
  public Id $asset_id;
  public __string $bucket;
  public __string $key;
}

class DataSetEntry {
  public Arn $arn;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Id $id;
  public Name $name;
  public Origin $origin;
  public OriginDetails $origin_details;
  public Id $source_id;
  public Timestamp $updated_at;
  public Description $description;
}

class GetAssetRequest {
  public __string $data_set_id;
  public __string $revision_id;
  public __string $asset_id;
}

class GetDataSetResponse {
  public Id $id;
  public Name $name;
  public Origin $origin;
  public Id $source_id;
  public MapOf__string $tags;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Description $description;
  public Timestamp $updated_at;
  public Arn $arn;
  public OriginDetails $origin_details;
}

class MaxResults {
}

class Name {
}

class ServerSideEncryptionTypes {
}

class CreateDataSetRequest {
  public AssetType $asset_type;
  public Description $description;
  public Name $name;
  public MapOf__string $tags;
}

class ListDataSetsResponse {
  public ListOfDataSetEntry $data_sets;
  public NextToken $next_token;
}

class Origin {
}

class RequestDetails {
  public ExportAssetToSignedUrlRequestDetails $export_asset_to_signed_url;
  public ExportAssetsToS3RequestDetails $export_assets_to_s_3;
  public ImportAssetFromSignedUrlRequestDetails $import_asset_from_signed_url;
  public ImportAssetsFromS3RequestDetails $import_assets_from_s_3;
}

class ThrottlingException {
  public __string $message;
}

class __stringMin0Max16384 {
}

class AssetDetails {
  public S3SnapshotAsset $s_3_snapshot_asset;
}

class AssetEntry {
  public Id $revision_id;
  public Id $source_id;
  public Id $data_set_id;
  public Id $id;
  public AssetName $name;
  public Timestamp $updated_at;
  public Arn $arn;
  public AssetDetails $asset_details;
  public AssetType $asset_type;
  public Timestamp $created_at;
}

class DeleteDataSetRequest {
  public __string $data_set_id;
}

class GetRevisionResponse {
  public Id $id;
  public Id $source_id;
  public Timestamp $updated_at;
  public Arn $arn;
  public Timestamp $created_at;
  public __boolean $finalized;
  public __stringMin0Max16384 $comment;
  public Id $data_set_id;
  public MapOf__string $tags;
}

class InternalServerException {
  public __string $message;
}

class JobErrorLimitName {
}

class ResourceType {
}

class UpdateDataSetRequest {
  public __string $data_set_id;
  public Description $description;
  public Name $name;
}

class ListOf__string {
}

class Code {
}

class ImportAssetFromSignedUrlResponseDetails {
  public AssetName $asset_name;
  public Id $data_set_id;
  public __stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 $md_5_hash;
  public Id $revision_id;
  public __string $signed_url;
  public Timestamp $signed_url_expires_at;
}

class Timestamp {
}

class __double {
}

