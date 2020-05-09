<?hh // strict
namespace slack\aws\dataexchange;

interface DataExchange {
  public function CancelJob(CancelJobRequest) Awaitable<Errors\Error>;
  public function CreateDataSet(CreateDataSetRequest) Awaitable<Errors\Result<CreateDataSetResponse>>;
  public function CreateJob(CreateJobRequest) Awaitable<Errors\Result<CreateJobResponse>>;
  public function CreateRevision(CreateRevisionRequest) Awaitable<Errors\Result<CreateRevisionResponse>>;
  public function DeleteAsset(DeleteAssetRequest) Awaitable<Errors\Error>;
  public function DeleteDataSet(DeleteDataSetRequest) Awaitable<Errors\Error>;
  public function DeleteRevision(DeleteRevisionRequest) Awaitable<Errors\Error>;
  public function GetAsset(GetAssetRequest) Awaitable<Errors\Result<GetAssetResponse>>;
  public function GetDataSet(GetDataSetRequest) Awaitable<Errors\Result<GetDataSetResponse>>;
  public function GetJob(GetJobRequest) Awaitable<Errors\Result<GetJobResponse>>;
  public function GetRevision(GetRevisionRequest) Awaitable<Errors\Result<GetRevisionResponse>>;
  public function ListDataSetRevisions(ListDataSetRevisionsRequest) Awaitable<Errors\Result<ListDataSetRevisionsResponse>>;
  public function ListDataSets(ListDataSetsRequest) Awaitable<Errors\Result<ListDataSetsResponse>>;
  public function ListJobs(ListJobsRequest) Awaitable<Errors\Result<ListJobsResponse>>;
  public function ListRevisionAssets(ListRevisionAssetsRequest) Awaitable<Errors\Result<ListRevisionAssetsResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function StartJob(StartJobRequest) Awaitable<Errors\Result<StartJobResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Error>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Error>;
  public function UpdateAsset(UpdateAssetRequest) Awaitable<Errors\Result<UpdateAssetResponse>>;
  public function UpdateDataSet(UpdateDataSetRequest) Awaitable<Errors\Result<UpdateDataSetResponse>>;
  public function UpdateRevision(UpdateRevisionRequest) Awaitable<Errors\Result<UpdateRevisionResponse>>;
}

class AccessDeniedException {
  public __string $message;
}

class Arn {
}

class AssetDestinationEntry {
  public Id $asset_id;
  public __string $bucket;
  public __string $key;
}

class AssetDetails {
  public S3SnapshotAsset $s_3_snapshot_asset;
}

class AssetEntry {
  public Arn $arn;
  public AssetDetails $asset_details;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Id $data_set_id;
  public Id $id;
  public AssetName $name;
  public Id $revision_id;
  public Id $source_id;
  public Timestamp $updated_at;
}

class AssetName {
}

class AssetSourceEntry {
  public __string $bucket;
  public __string $key;
}

class AssetType {
}

class CancelJobRequest {
  public __string $job_id;
}

class Code {
}

class ConflictException {
  public __string $message;
  public __string $resource_id;
  public ResourceType $resource_type;
}

class CreateDataSetRequest {
  public AssetType $asset_type;
  public Description $description;
  public Name $name;
  public MapOf__string $tags;
}

class CreateDataSetResponse {
  public Arn $arn;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Description $description;
  public Id $id;
  public Name $name;
  public Origin $origin;
  public OriginDetails $origin_details;
  public Id $source_id;
  public MapOf__string $tags;
  public Timestamp $updated_at;
}

class CreateJobRequest {
  public RequestDetails $details;
  public Type $type;
}

class CreateJobResponse {
  public Arn $arn;
  public Timestamp $created_at;
  public ResponseDetails $details;
  public ListOfJobError $errors;
  public Id $id;
  public State $state;
  public Type $type;
  public Timestamp $updated_at;
}

class CreateRevisionRequest {
  public __stringMin0Max16384 $comment;
  public __string $data_set_id;
  public MapOf__string $tags;
}

class CreateRevisionResponse {
  public Arn $arn;
  public __stringMin0Max16384 $comment;
  public Timestamp $created_at;
  public Id $data_set_id;
  public __boolean $finalized;
  public Id $id;
  public Id $source_id;
  public MapOf__string $tags;
  public Timestamp $updated_at;
}

class DataSetEntry {
  public Arn $arn;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Description $description;
  public Id $id;
  public Name $name;
  public Origin $origin;
  public OriginDetails $origin_details;
  public Id $source_id;
  public Timestamp $updated_at;
}

class DeleteAssetRequest {
  public __string $asset_id;
  public __string $data_set_id;
  public __string $revision_id;
}

class DeleteDataSetRequest {
  public __string $data_set_id;
}

class DeleteRevisionRequest {
  public __string $data_set_id;
  public __string $revision_id;
}

class Description {
}

class Details {
  public ImportAssetFromSignedUrlJobErrorDetails $import_asset_from_signed_url_job_error_details;
  public ListOfAssetSourceEntry $import_assets_from_s_3_job_error_details;
}

class ExportAssetToSignedUrlRequestDetails {
  public Id $asset_id;
  public Id $data_set_id;
  public Id $revision_id;
}

class ExportAssetToSignedUrlResponseDetails {
  public Id $asset_id;
  public Id $data_set_id;
  public Id $revision_id;
  public __string $signed_url;
  public Timestamp $signed_url_expires_at;
}

class ExportAssetsToS3RequestDetails {
  public ListOfAssetDestinationEntry $asset_destinations;
  public Id $data_set_id;
  public ExportServerSideEncryption $encryption;
  public Id $revision_id;
}

class ExportAssetsToS3ResponseDetails {
  public ListOfAssetDestinationEntry $asset_destinations;
  public Id $data_set_id;
  public ExportServerSideEncryption $encryption;
  public Id $revision_id;
}

class ExportServerSideEncryption {
  public __string $kms_key_arn;
  public ServerSideEncryptionTypes $type;
}

class GetAssetRequest {
  public __string $asset_id;
  public __string $data_set_id;
  public __string $revision_id;
}

class GetAssetResponse {
  public Arn $arn;
  public AssetDetails $asset_details;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Id $data_set_id;
  public Id $id;
  public AssetName $name;
  public Id $revision_id;
  public Id $source_id;
  public Timestamp $updated_at;
}

class GetDataSetRequest {
  public __string $data_set_id;
}

class GetDataSetResponse {
  public Arn $arn;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Description $description;
  public Id $id;
  public Name $name;
  public Origin $origin;
  public OriginDetails $origin_details;
  public Id $source_id;
  public MapOf__string $tags;
  public Timestamp $updated_at;
}

class GetJobRequest {
  public __string $job_id;
}

class GetJobResponse {
  public Arn $arn;
  public Timestamp $created_at;
  public ResponseDetails $details;
  public ListOfJobError $errors;
  public Id $id;
  public State $state;
  public Type $type;
  public Timestamp $updated_at;
}

class GetRevisionRequest {
  public __string $data_set_id;
  public __string $revision_id;
}

class GetRevisionResponse {
  public Arn $arn;
  public __stringMin0Max16384 $comment;
  public Timestamp $created_at;
  public Id $data_set_id;
  public __boolean $finalized;
  public Id $id;
  public Id $source_id;
  public MapOf__string $tags;
  public Timestamp $updated_at;
}

class Id {
}

class ImportAssetFromSignedUrlJobErrorDetails {
  public AssetName $asset_name;
}

class ImportAssetFromSignedUrlRequestDetails {
  public AssetName $asset_name;
  public Id $data_set_id;
  public __stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 $md_5_hash;
  public Id $revision_id;
}

class ImportAssetFromSignedUrlResponseDetails {
  public AssetName $asset_name;
  public Id $data_set_id;
  public __stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 $md_5_hash;
  public Id $revision_id;
  public __string $signed_url;
  public Timestamp $signed_url_expires_at;
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

class InternalServerException {
  public __string $message;
}

class JobEntry {
  public Arn $arn;
  public Timestamp $created_at;
  public ResponseDetails $details;
  public ListOfJobError $errors;
  public Id $id;
  public State $state;
  public Type $type;
  public Timestamp $updated_at;
}

class JobError {
  public Code $code;
  public Details $details;
  public JobErrorLimitName $limit_name;
  public __double $limit_value;
  public __string $message;
  public __string $resource_id;
  public JobErrorResourceTypes $resource_type;
}

class JobErrorLimitName {
}

class JobErrorResourceTypes {
}

class LimitName {
}

class ListDataSetRevisionsRequest {
  public __string $data_set_id;
  public MaxResults $max_results;
  public __string $next_token;
}

class ListDataSetRevisionsResponse {
  public NextToken $next_token;
  public ListOfRevisionEntry $revisions;
}

class ListDataSetsRequest {
  public MaxResults $max_results;
  public __string $next_token;
  public __string $origin;
}

class ListDataSetsResponse {
  public ListOfDataSetEntry $data_sets;
  public NextToken $next_token;
}

class ListJobsRequest {
  public __string $data_set_id;
  public MaxResults $max_results;
  public __string $next_token;
  public __string $revision_id;
}

class ListJobsResponse {
  public ListOfJobEntry $jobs;
  public NextToken $next_token;
}

class ListOfAssetDestinationEntry {
}

class ListOfAssetEntry {
}

class ListOfAssetSourceEntry {
}

class ListOfDataSetEntry {
}

class ListOfJobEntry {
}

class ListOfJobError {
}

class ListOfRevisionEntry {
}

class ListOf__string {
}

class ListRevisionAssetsRequest {
  public __string $data_set_id;
  public MaxResults $max_results;
  public __string $next_token;
  public __string $revision_id;
}

class ListRevisionAssetsResponse {
  public ListOfAssetEntry $assets;
  public NextToken $next_token;
}

class ListTagsForResourceRequest {
  public __string $resource_arn;
}

class ListTagsForResourceResponse {
  public MapOf__string $tags;
}

class MapOf__string {
}

class MaxResults {
}

class Name {
}

class NextToken {
}

class Origin {
}

class OriginDetails {
  public __string $product_id;
}

class RequestDetails {
  public ExportAssetToSignedUrlRequestDetails $export_asset_to_signed_url;
  public ExportAssetsToS3RequestDetails $export_assets_to_s_3;
  public ImportAssetFromSignedUrlRequestDetails $import_asset_from_signed_url;
  public ImportAssetsFromS3RequestDetails $import_assets_from_s_3;
}

class ResourceNotFoundException {
  public __string $message;
  public __string $resource_id;
  public ResourceType $resource_type;
}

class ResourceType {
}

class ResponseDetails {
  public ExportAssetToSignedUrlResponseDetails $export_asset_to_signed_url;
  public ExportAssetsToS3ResponseDetails $export_assets_to_s_3;
  public ImportAssetFromSignedUrlResponseDetails $import_asset_from_signed_url;
  public ImportAssetsFromS3ResponseDetails $import_assets_from_s_3;
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

class S3SnapshotAsset {
  public __doubleMin0 $size;
}

class ServerSideEncryptionTypes {
}

class ServiceLimitExceededException {
  public LimitName $limit_name;
  public __double $limit_value;
  public __string $message;
}

class StartJobRequest {
  public __string $job_id;
}

class StartJobResponse {
}

class State {
}

class TagResourceRequest {
  public __string $resource_arn;
  public MapOf__string $tags;
}

class ThrottlingException {
  public __string $message;
}

class Timestamp {
}

class Type {
}

class UntagResourceRequest {
  public __string $resource_arn;
  public ListOf__string $tag_keys;
}

class UpdateAssetRequest {
  public __string $asset_id;
  public __string $data_set_id;
  public AssetName $name;
  public __string $revision_id;
}

class UpdateAssetResponse {
  public Arn $arn;
  public AssetDetails $asset_details;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Id $data_set_id;
  public Id $id;
  public AssetName $name;
  public Id $revision_id;
  public Id $source_id;
  public Timestamp $updated_at;
}

class UpdateDataSetRequest {
  public __string $data_set_id;
  public Description $description;
  public Name $name;
}

class UpdateDataSetResponse {
  public Arn $arn;
  public AssetType $asset_type;
  public Timestamp $created_at;
  public Description $description;
  public Id $id;
  public Name $name;
  public Origin $origin;
  public OriginDetails $origin_details;
  public Id $source_id;
  public Timestamp $updated_at;
}

class UpdateRevisionRequest {
  public __stringMin0Max16384 $comment;
  public __string $data_set_id;
  public __boolean $finalized;
  public __string $revision_id;
}

class UpdateRevisionResponse {
  public Arn $arn;
  public __stringMin0Max16384 $comment;
  public Timestamp $created_at;
  public Id $data_set_id;
  public __boolean $finalized;
  public Id $id;
  public Id $source_id;
  public Timestamp $updated_at;
}

class ValidationException {
  public __string $message;
}

class __boolean {
}

class __double {
}

class __doubleMin0 {
}

class __string {
}

class __stringMin0Max16384 {
}

class __stringMin24Max24PatternAZaZ094AZaZ092AZaZ093 {
}

