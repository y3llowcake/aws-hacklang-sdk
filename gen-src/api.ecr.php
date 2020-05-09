<?hh // strict
namespace slack\aws\api.ecr;

interface ECR {
  public function DescribeImageScanFindings(DescribeImageScanFindingsRequest) Awaitable<Errors\Result<DescribeImageScanFindingsResponse>>;
  public function PutImageScanningConfiguration(PutImageScanningConfigurationRequest) Awaitable<Errors\Result<PutImageScanningConfigurationResponse>>;
  public function PutImageTagMutability(PutImageTagMutabilityRequest) Awaitable<Errors\Result<PutImageTagMutabilityResponse>>;
  public function InitiateLayerUpload(InitiateLayerUploadRequest) Awaitable<Errors\Result<InitiateLayerUploadResponse>>;
  public function PutImage(PutImageRequest) Awaitable<Errors\Result<PutImageResponse>>;
  public function StartLifecyclePolicyPreview(StartLifecyclePolicyPreviewRequest) Awaitable<Errors\Result<StartLifecyclePolicyPreviewResponse>>;
  public function CreateRepository(CreateRepositoryRequest) Awaitable<Errors\Result<CreateRepositoryResponse>>;
  public function DeleteLifecyclePolicy(DeleteLifecyclePolicyRequest) Awaitable<Errors\Result<DeleteLifecyclePolicyResponse>>;
  public function GetLifecyclePolicy(GetLifecyclePolicyRequest) Awaitable<Errors\Result<GetLifecyclePolicyResponse>>;
  public function GetLifecyclePolicyPreview(GetLifecyclePolicyPreviewRequest) Awaitable<Errors\Result<GetLifecyclePolicyPreviewResponse>>;
  public function ListTagsForResource(ListTagsForResourceRequest) Awaitable<Errors\Result<ListTagsForResourceResponse>>;
  public function SetRepositoryPolicy(SetRepositoryPolicyRequest) Awaitable<Errors\Result<SetRepositoryPolicyResponse>>;
  public function BatchDeleteImage(BatchDeleteImageRequest) Awaitable<Errors\Result<BatchDeleteImageResponse>>;
  public function DescribeImages(DescribeImagesRequest) Awaitable<Errors\Result<DescribeImagesResponse>>;
  public function GetDownloadUrlForLayer(GetDownloadUrlForLayerRequest) Awaitable<Errors\Result<GetDownloadUrlForLayerResponse>>;
  public function BatchGetImage(BatchGetImageRequest) Awaitable<Errors\Result<BatchGetImageResponse>>;
  public function DeleteRepository(DeleteRepositoryRequest) Awaitable<Errors\Result<DeleteRepositoryResponse>>;
  public function TagResource(TagResourceRequest) Awaitable<Errors\Result<TagResourceResponse>>;
  public function UploadLayerPart(UploadLayerPartRequest) Awaitable<Errors\Result<UploadLayerPartResponse>>;
  public function ListImages(ListImagesRequest) Awaitable<Errors\Result<ListImagesResponse>>;
  public function PutLifecyclePolicy(PutLifecyclePolicyRequest) Awaitable<Errors\Result<PutLifecyclePolicyResponse>>;
  public function StartImageScan(StartImageScanRequest) Awaitable<Errors\Result<StartImageScanResponse>>;
  public function GetAuthorizationToken(GetAuthorizationTokenRequest) Awaitable<Errors\Result<GetAuthorizationTokenResponse>>;
  public function GetRepositoryPolicy(GetRepositoryPolicyRequest) Awaitable<Errors\Result<GetRepositoryPolicyResponse>>;
  public function UntagResource(UntagResourceRequest) Awaitable<Errors\Result<UntagResourceResponse>>;
  public function BatchCheckLayerAvailability(BatchCheckLayerAvailabilityRequest) Awaitable<Errors\Result<BatchCheckLayerAvailabilityResponse>>;
  public function CompleteLayerUpload(CompleteLayerUploadRequest) Awaitable<Errors\Result<CompleteLayerUploadResponse>>;
  public function DeleteRepositoryPolicy(DeleteRepositoryPolicyRequest) Awaitable<Errors\Result<DeleteRepositoryPolicyResponse>>;
  public function DescribeRepositories(DescribeRepositoriesRequest) Awaitable<Errors\Result<DescribeRepositoriesResponse>>;
}

class Url {
}

class InvalidLayerException {
  public ExceptionMessage $message;
}

class RegistryId {
}

class UploadLayerPartRequest {
  public PartSize $part_last_byte;
  public LayerPartBlob $layer_part_blob;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
  public PartSize $part_first_byte;
}

class DeleteRepositoryRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ForceFlag $force;
}

class FindingDescription {
}

class NextToken {
}

class PushTimestamp {
}

class RepositoryNotFoundException {
  public ExceptionMessage $message;
}

class ScanTimestamp {
}

class Tag {
  public TagKey $key;
  public TagValue $value;
}

class FindingSeverity {
}

class GetRepositoryPolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class ImageFailureReason {
}

class InitiateLayerUploadResponse {
  public UploadId $upload_id;
  public PartSize $part_size;
}

class RepositoryNotEmptyException {
  public ExceptionMessage $message;
}

class PutImageTagMutabilityRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageTagMutability $image_tag_mutability;
}

class ScanStatus {
}

class ServerException {
  public ExceptionMessage $message;
}

class GetRepositoryPolicyResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public RepositoryPolicyText $policy_text;
}

class ImageDigest {
}

class ImageIdentifierList {
}

class LayerSizeInBytes {
}

class ListImagesFilter {
  public TagStatus $tag_status;
}

class TagValue {
}

class VulnerabilitySourceUpdateTimestamp {
}

class ImageNotFoundException {
  public ExceptionMessage $message;
}

class LifecyclePolicyPreviewInProgressException {
  public ExceptionMessage $message;
}

class ProxyEndpoint {
}

class BatchGetImageResponse {
  public ImageList $images;
  public ImageFailureList $failures;
}

class DescribeImageScanFindingsRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifier $image_id;
  public NextToken $next_token;
  public MaxResults $max_results;
}

class GetLifecyclePolicyResponse {
  public LifecyclePolicyText $lifecycle_policy_text;
  public EvaluationTimestamp $last_evaluated_at;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class ImageAlreadyExistsException {
  public ExceptionMessage $message;
}

class ImageManifest {
}

class Repository {
  public Arn $repository_arn;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public Url $repository_uri;
  public CreationTimestamp $created_at;
  public ImageTagMutability $image_tag_mutability;
  public ImageScanningConfiguration $image_scanning_configuration;
}

class SetRepositoryPolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public RepositoryPolicyText $policy_text;
  public ForceFlag $force;
}

class MaxResults {
}

class PutLifecyclePolicyResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyText $lifecycle_policy_text;
}

class DescribeImageScanFindingsResponse {
  public ImageScanStatus $image_scan_status;
  public ImageScanFindings $image_scan_findings;
  public NextToken $next_token;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifier $image_id;
}

class InvalidLayerPartException {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
  public PartSize $last_valid_byte_received;
  public ExceptionMessage $message;
}

class LayerList {
}

class LimitExceededException {
  public ExceptionMessage $message;
}

class ListImagesResponse {
  public ImageIdentifierList $image_ids;
  public NextToken $next_token;
}

class CompleteLayerUploadResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
  public LayerDigest $layer_digest;
}

class DeleteRepositoryPolicyResponse {
  public RepositoryPolicyText $policy_text;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DescribeImagesRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifierList $image_ids;
  public NextToken $next_token;
  public MaxResults $max_results;
  public DescribeImagesFilter $filter;
}

class ScanStatusDescription {
}

class StartImageScanResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifier $image_id;
  public ImageScanStatus $image_scan_status;
}

class LifecyclePolicyPreviewResult {
  public ImageTagList $image_tags;
  public ImageDigest $image_digest;
  public PushTimestamp $image_pushed_at;
  public LifecyclePolicyRuleAction $action;
  public LifecyclePolicyRulePriority $applied_rule_priority;
}

class ListTagsForResourceRequest {
  public Arn $resource_arn;
}

class SetRepositoryPolicyResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public RepositoryPolicyText $policy_text;
}

class DeleteRepositoryPolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DescribeImagesResponse {
  public ImageDetailList $image_details;
  public NextToken $next_token;
}

class ExpirationTimestamp {
}

class GetLifecyclePolicyPreviewRequest {
  public LifecyclePolicyPreviewFilter $filter;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifierList $image_ids;
  public NextToken $next_token;
  public LifecyclePreviewMaxResults $max_results;
}

class LayerInaccessibleException {
  public ExceptionMessage $message;
}

class ImageScanningConfiguration {
  public ScanOnPushFlag $scan_on_push;
}

class TagKey {
}

class FindingSeverityCounts {
}

class GetLifecyclePolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class ImageCount {
}

class ImageFailure {
  public ImageIdentifier $image_id;
  public ImageFailureCode $failure_code;
  public ImageFailureReason $failure_reason;
}

class ImageIdentifier {
  public ImageDigest $image_digest;
  public ImageTag $image_tag;
}

class StartLifecyclePolicyPreviewRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyText $lifecycle_policy_text;
}

class BatchDeleteImageResponse {
  public ImageIdentifierList $image_ids;
  public ImageFailureList $failures;
}

class ImageDetailList {
}

class ImageScanFindingsSummary {
  public ScanTimestamp $image_scan_completed_at;
  public VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;
  public FindingSeverityCounts $finding_severity_counts;
}

class LifecyclePolicyNotFoundException {
  public ExceptionMessage $message;
}

class RepositoryName {
}

class LayerFailureCode {
}

class BatchGetImageRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifierList $image_ids;
  public MediaTypeList $accepted_media_types;
}

class BatchedOperationLayerDigestList {
}

class CompleteLayerUploadRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
  public LayerDigestList $layer_digests;
}

class Image {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifier $image_id;
  public ImageManifest $image_manifest;
}

class ImageScanStatus {
  public ScanStatus $status;
  public ScanStatusDescription $description;
}

class MediaTypeList {
}

class SeverityCount {
}

class GetAuthorizationTokenRequest {
  public GetAuthorizationTokenRegistryIdList $registry_ids;
}

class ImageList {
}

class LayerAlreadyExistsException {
  public ExceptionMessage $message;
}

class LayerFailureReason {
}

class LifecyclePolicyText {
}

class AttributeList {
}

class AttributeValue {
}

class FindingName {
}

class ImageFailureCode {
}

class ImageTagAlreadyExistsException {
  public ExceptionMessage $message;
}

class AuthorizationDataList {
}

class ImageFailureList {
}

class ImageTagMutability {
}

class PartSize {
}

class TagList {
}

class GetAuthorizationTokenRegistryIdList {
}

class ImageDetail {
  public ImageScanFindingsSummary $image_scan_findings_summary;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageDigest $image_digest;
  public ImageTagList $image_tags;
  public ImageSizeInBytes $image_size_in_bytes;
  public PushTimestamp $image_pushed_at;
  public ImageScanStatus $image_scan_status;
}

class ImageScanFindingList {
}

class Arn {
}

class Attribute {
  public AttributeKey $key;
  public AttributeValue $value;
}

class Base64 {
}

class DeleteLifecyclePolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class DeleteLifecyclePolicyResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyText $lifecycle_policy_text;
  public EvaluationTimestamp $last_evaluated_at;
}

class TooManyTagsException {
  public ExceptionMessage $message;
}

class ListTagsForResourceResponse {
  public TagList $tags;
}

class UntagResourceRequest {
  public Arn $resource_arn;
  public TagKeyList $tag_keys;
}

class ForceFlag {
}

class Layer {
  public LayerSizeInBytes $layer_size;
  public MediaType $media_type;
  public LayerDigest $layer_digest;
  public LayerAvailability $layer_availability;
}

class LayerPartTooSmallException {
  public ExceptionMessage $message;
}

class LifecyclePolicyRuleAction {
  public ImageActionType $type;
}

class PutLifecyclePolicyRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyText $lifecycle_policy_text;
}

class RepositoryList {
}

class TagResourceRequest {
  public Arn $resource_arn;
  public TagList $tags;
}

class BatchCheckLayerAvailabilityResponse {
  public LayerList $layers;
  public LayerFailureList $failures;
}

class CreationTimestamp {
}

class EvaluationTimestamp {
}

class LayerAvailability {
}

class LifecyclePolicyPreviewStatus {
}

class UploadId {
}

class UploadNotFoundException {
  public ExceptionMessage $message;
}

class DescribeRepositoriesRequest {
  public RepositoryNameList $repository_names;
  public NextToken $next_token;
  public MaxResults $max_results;
  public RegistryId $registry_id;
}

class EmptyUploadException {
  public ExceptionMessage $message;
}

class GetDownloadUrlForLayerResponse {
  public Url $download_url;
  public LayerDigest $layer_digest;
}

class ImageScanFindings {
  public ScanTimestamp $image_scan_completed_at;
  public VulnerabilitySourceUpdateTimestamp $vulnerability_source_updated_at;
  public ImageScanFindingList $findings;
  public FindingSeverityCounts $finding_severity_counts;
}

class PutImageScanningConfigurationResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageScanningConfiguration $image_scanning_configuration;
}

class BatchCheckLayerAvailabilityRequest {
  public BatchedOperationLayerDigestList $layer_digests;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class ImageTag {
}

class InvalidTagParameterException {
  public ExceptionMessage $message;
}

class LifecyclePolicyPreviewNotFoundException {
  public ExceptionMessage $message;
}

class RepositoryPolicyNotFoundException {
  public ExceptionMessage $message;
}

class AttributeKey {
}

class BatchedOperationLayerDigest {
}

class GetDownloadUrlForLayerRequest {
  public RepositoryName $repository_name;
  public LayerDigest $layer_digest;
  public RegistryId $registry_id;
}

class LayersNotFoundException {
  public ExceptionMessage $message;
}

class ListImagesRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public NextToken $next_token;
  public MaxResults $max_results;
  public ListImagesFilter $filter;
}

class DeleteRepositoryResponse {
  public Repository $repository;
}

class ImageScanFinding {
  public FindingName $name;
  public FindingDescription $description;
  public Url $uri;
  public FindingSeverity $severity;
  public AttributeList $attributes;
}

class LayerDigest {
}

class MediaType {
}

class PutImageTagMutabilityResponse {
  public ImageTagMutability $image_tag_mutability;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class CreateRepositoryRequest {
  public ImageScanningConfiguration $image_scanning_configuration;
  public RepositoryName $repository_name;
  public TagList $tags;
  public ImageTagMutability $image_tag_mutability;
}

class GetLifecyclePolicyPreviewResponse {
  public RepositoryName $repository_name;
  public LifecyclePolicyText $lifecycle_policy_text;
  public LifecyclePolicyPreviewStatus $status;
  public NextToken $next_token;
  public LifecyclePolicyPreviewResultList $preview_results;
  public LifecyclePolicyPreviewSummary $summary;
  public RegistryId $registry_id;
}

class AuthorizationData {
  public Base64 $authorization_token;
  public ExpirationTimestamp $expires_at;
  public ProxyEndpoint $proxy_endpoint;
}

class LayerPartBlob {
}

class UntagResourceResponse {
}

class TagResourceResponse {
}

class ExceptionMessage {
}

class LifecyclePolicyPreviewSummary {
  public ImageCount $expiring_image_total_count;
}

class PutImageRequest {
  public ImageManifest $image_manifest;
  public ImageTag $image_tag;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
}

class RepositoryPolicyText {
}

class StartLifecyclePolicyPreviewResponse {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public LifecyclePolicyText $lifecycle_policy_text;
  public LifecyclePolicyPreviewStatus $status;
}

class BatchDeleteImageRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifierList $image_ids;
}

class DescribeRepositoriesResponse {
  public RepositoryList $repositories;
  public NextToken $next_token;
}

class ImageSizeInBytes {
}

class LayerFailureList {
}

class ScanOnPushFlag {
}

class DescribeImagesFilter {
  public TagStatus $tag_status;
}

class GetAuthorizationTokenResponse {
  public AuthorizationDataList $authorization_data;
}

class ImageTagList {
}

class LifecyclePolicyPreviewResultList {
}

class RepositoryNameList {
}

class TagStatus {
}

class InvalidParameterException {
  public ExceptionMessage $message;
}

class LifecyclePolicyRulePriority {
}

class LifecyclePreviewMaxResults {
}

class PutImageResponse {
  public Image $image;
}

class StartImageScanRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageIdentifier $image_id;
}

class PutImageScanningConfigurationRequest {
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public ImageScanningConfiguration $image_scanning_configuration;
}

class RepositoryAlreadyExistsException {
  public ExceptionMessage $message;
}

class TagKeyList {
}

class CreateRepositoryResponse {
  public Repository $repository;
}

class ImageActionType {
}

class InitiateLayerUploadRequest {
  public RepositoryName $repository_name;
  public RegistryId $registry_id;
}

class LayerDigestList {
}

class LayerFailure {
  public BatchedOperationLayerDigest $layer_digest;
  public LayerFailureCode $failure_code;
  public LayerFailureReason $failure_reason;
}

class UploadLayerPartResponse {
  public PartSize $last_byte_received;
  public RegistryId $registry_id;
  public RepositoryName $repository_name;
  public UploadId $upload_id;
}

class LifecyclePolicyPreviewFilter {
  public TagStatus $tag_status;
}

class ScanNotFoundException {
  public ExceptionMessage $message;
}

