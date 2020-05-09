<?hh // strict
namespace slack\aws\data.mediastore;

interface MediaStore Data {
  public function DeleteObject(DeleteObjectRequest): Awaitable<Errors\Result<DeleteObjectResponse>>;
  public function DescribeObject(DescribeObjectRequest): Awaitable<Errors\Result<DescribeObjectResponse>>;
  public function GetObject(GetObjectRequest): Awaitable<Errors\Result<GetObjectResponse>>;
  public function ListItems(ListItemsRequest): Awaitable<Errors\Result<ListItemsResponse>>;
  public function PutObject(PutObjectRequest): Awaitable<Errors\Result<PutObjectResponse>>;
}

class ContainerNotFoundException {
  public ErrorMessage $message;
}

class ContentRangePattern {
}

class ContentType {
}

class DeleteObjectRequest {
  public PathNaming $path;
}

class DeleteObjectResponse {
}

class DescribeObjectRequest {
  public PathNaming $path;
}

class DescribeObjectResponse {
  public StringPrimitive $cache_control;
  public NonNegativeLong $content_length;
  public ContentType $content_type;
  public ETag $e_tag;
  public TimeStamp $last_modified;
}

class ETag {
}

class ErrorMessage {
}

class GetObjectRequest {
  public PathNaming $path;
  public RangePattern $range;
}

class GetObjectResponse {
  public PayloadBlob $body;
  public StringPrimitive $cache_control;
  public NonNegativeLong $content_length;
  public ContentRangePattern $content_range;
  public ContentType $content_type;
  public ETag $e_tag;
  public TimeStamp $last_modified;
  public statusCode $status_code;
}

class InternalServerError {
  public ErrorMessage $message;
}

class Item {
  public NonNegativeLong $content_length;
  public ContentType $content_type;
  public ETag $e_tag;
  public TimeStamp $last_modified;
  public ItemName $name;
  public ItemType $type;
}

class ItemList {
}

class ItemName {
}

class ItemType {
}

class ListItemsRequest {
  public ListLimit $max_results;
  public PaginationToken $next_token;
  public ListPathNaming $path;
}

class ListItemsResponse {
  public ItemList $items;
  public PaginationToken $next_token;
}

class ListLimit {
}

class ListPathNaming {
}

class NonNegativeLong {
}

class ObjectNotFoundException {
  public ErrorMessage $message;
}

class PaginationToken {
}

class PathNaming {
}

class PayloadBlob {
}

class PutObjectRequest {
  public PayloadBlob $body;
  public StringPrimitive $cache_control;
  public ContentType $content_type;
  public PathNaming $path;
  public StorageClass $storage_class;
  public UploadAvailability $upload_availability;
}

class PutObjectResponse {
  public SHA256Hash $content_sha_256;
  public ETag $e_tag;
  public StorageClass $storage_class;
}

class RangePattern {
}

class RequestedRangeNotSatisfiableException {
  public ErrorMessage $message;
}

class SHA256Hash {
}

class StorageClass {
}

class StringPrimitive {
}

class TimeStamp {
}

class UploadAvailability {
}

class statusCode {
}

