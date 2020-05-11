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

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ContentRangePattern = string;

type ContentType = string;

class DeleteObjectRequest {
  public PathNaming $path;

  public function __construct(shape(
  ?'path' => PathNaming,
  ) $s = shape()) {
    $this->path = $path ?? "";
  }
}

class DeleteObjectResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeObjectRequest {
  public PathNaming $path;

  public function __construct(shape(
  ?'path' => PathNaming,
  ) $s = shape()) {
    $this->path = $path ?? "";
  }
}

class DescribeObjectResponse {
  public StringPrimitive $cache_control;
  public NonNegativeLong $content_length;
  public ContentType $content_type;
  public ETag $e_tag;
  public TimeStamp $last_modified;

  public function __construct(shape(
  ?'cache_control' => StringPrimitive,
  ?'content_length' => NonNegativeLong,
  ?'content_type' => ContentType,
  ?'e_tag' => ETag,
  ?'last_modified' => TimeStamp,
  ) $s = shape()) {
    $this->cache_control = $cache_control ?? "";
    $this->content_length = $content_length ?? 0;
    $this->content_type = $content_type ?? "";
    $this->e_tag = $e_tag ?? "";
    $this->last_modified = $last_modified ?? 0;
  }
}

type ETag = string;

type ErrorMessage = string;

class GetObjectRequest {
  public PathNaming $path;
  public RangePattern $range;

  public function __construct(shape(
  ?'path' => PathNaming,
  ?'range' => RangePattern,
  ) $s = shape()) {
    $this->path = $path ?? "";
    $this->range = $range ?? "";
  }
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

  public function __construct(shape(
  ?'body' => PayloadBlob,
  ?'cache_control' => StringPrimitive,
  ?'content_length' => NonNegativeLong,
  ?'content_range' => ContentRangePattern,
  ?'content_type' => ContentType,
  ?'e_tag' => ETag,
  ?'last_modified' => TimeStamp,
  ?'status_code' => statusCode,
  ) $s = shape()) {
    $this->body = $body ?? "";
    $this->cache_control = $cache_control ?? "";
    $this->content_length = $content_length ?? 0;
    $this->content_range = $content_range ?? "";
    $this->content_type = $content_type ?? "";
    $this->e_tag = $e_tag ?? "";
    $this->last_modified = $last_modified ?? 0;
    $this->status_code = $status_code ?? 0;
  }
}

class InternalServerError {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class Item {
  public NonNegativeLong $content_length;
  public ContentType $content_type;
  public ETag $e_tag;
  public TimeStamp $last_modified;
  public ItemName $name;
  public ItemType $type;

  public function __construct(shape(
  ?'content_length' => NonNegativeLong,
  ?'content_type' => ContentType,
  ?'e_tag' => ETag,
  ?'last_modified' => TimeStamp,
  ?'name' => ItemName,
  ?'type' => ItemType,
  ) $s = shape()) {
    $this->content_length = $content_length ?? 0;
    $this->content_type = $content_type ?? "";
    $this->e_tag = $e_tag ?? "";
    $this->last_modified = $last_modified ?? 0;
    $this->name = $name ?? "";
    $this->type = $type ?? "";
  }
}

type ItemList = vec<Item>;

type ItemName = string;

type ItemType = string;

class ListItemsRequest {
  public ListLimit $max_results;
  public PaginationToken $next_token;
  public ListPathNaming $path;

  public function __construct(shape(
  ?'max_results' => ListLimit,
  ?'next_token' => PaginationToken,
  ?'path' => ListPathNaming,
  ) $s = shape()) {
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->path = $path ?? "";
  }
}

class ListItemsResponse {
  public ItemList $items;
  public PaginationToken $next_token;

  public function __construct(shape(
  ?'items' => ItemList,
  ?'next_token' => PaginationToken,
  ) $s = shape()) {
    $this->items = $items ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type ListLimit = int;

type ListPathNaming = string;

type NonNegativeLong = int;

class ObjectNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type PaginationToken = string;

type PathNaming = string;

type PayloadBlob = string;

class PutObjectRequest {
  public PayloadBlob $body;
  public StringPrimitive $cache_control;
  public ContentType $content_type;
  public PathNaming $path;
  public StorageClass $storage_class;
  public UploadAvailability $upload_availability;

  public function __construct(shape(
  ?'body' => PayloadBlob,
  ?'cache_control' => StringPrimitive,
  ?'content_type' => ContentType,
  ?'path' => PathNaming,
  ?'storage_class' => StorageClass,
  ?'upload_availability' => UploadAvailability,
  ) $s = shape()) {
    $this->body = $body ?? "";
    $this->cache_control = $cache_control ?? "";
    $this->content_type = $content_type ?? "";
    $this->path = $path ?? "";
    $this->storage_class = $storage_class ?? "";
    $this->upload_availability = $upload_availability ?? "";
  }
}

class PutObjectResponse {
  public SHA256Hash $content_sha_256;
  public ETag $e_tag;
  public StorageClass $storage_class;

  public function __construct(shape(
  ?'content_sha_256' => SHA256Hash,
  ?'e_tag' => ETag,
  ?'storage_class' => StorageClass,
  ) $s = shape()) {
    $this->content_sha_256 = $content_sha_256 ?? "";
    $this->e_tag = $e_tag ?? "";
    $this->storage_class = $storage_class ?? "";
  }
}

type RangePattern = string;

class RequestedRangeNotSatisfiableException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type SHA256Hash = string;

type StorageClass = string;

type StringPrimitive = string;

type TimeStamp = int;

type UploadAvailability = string;

type statusCode = int;

