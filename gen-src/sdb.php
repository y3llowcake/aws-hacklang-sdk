<?hh // strict
namespace slack\aws\sdb;

interface  {
  public function BatchDeleteAttributes(BatchDeleteAttributesRequest $in): Awaitable<\Errors\Error>;
  public function BatchPutAttributes(BatchPutAttributesRequest $in): Awaitable<\Errors\Error>;
  public function CreateDomain(CreateDomainRequest $in): Awaitable<\Errors\Error>;
  public function DeleteAttributes(DeleteAttributesRequest $in): Awaitable<\Errors\Error>;
  public function DeleteDomain(DeleteDomainRequest $in): Awaitable<\Errors\Error>;
  public function DomainMetadata(DomainMetadataRequest $in): Awaitable<\Errors\Result<DomainMetadataResult>>;
  public function GetAttributes(GetAttributesRequest $in): Awaitable<\Errors\Result<GetAttributesResult>>;
  public function ListDomains(ListDomainsRequest $in): Awaitable<\Errors\Result<ListDomainsResult>>;
  public function PutAttributes(PutAttributesRequest $in): Awaitable<\Errors\Error>;
  public function Select(SelectRequest $in): Awaitable<\Errors\Result<SelectResult>>;
}

class Attribute {
  public string $alternate_name_encoding;
  public string $alternate_value_encoding;
  public string $name;
  public string $value;

  public function __construct(shape(
    ?'alternate_name_encoding' => string,
    ?'alternate_value_encoding' => string,
    ?'name' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->alternate_name_encoding = $s['alternate_name_encoding'] ?? '';
    $this->alternate_value_encoding = $s['alternate_value_encoding'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

class AttributeDoesNotExist {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

type AttributeList = vec<Attribute>;

type AttributeNameList = vec<String>;

class BatchDeleteAttributesRequest {
  public string $domain_name;
  public ?DeletableItemList $items;

  public function __construct(shape(
    ?'domain_name' => string,
    ?'items' => ?DeletableItemList,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->items = $s['items'] ?? vec[];
  }
}

class BatchPutAttributesRequest {
  public string $domain_name;
  public ?ReplaceableItemList $items;

  public function __construct(shape(
    ?'domain_name' => string,
    ?'items' => ?ReplaceableItemList,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
    $this->items = $s['items'] ?? vec[];
  }
}

type Boolean = bool;

class CreateDomainRequest {
  public string $domain_name;

  public function __construct(shape(
    ?'domain_name' => string,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DeletableAttribute {
  public string $name;
  public string $value;

  public function __construct(shape(
    ?'name' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type DeletableAttributeList = vec<DeletableAttribute>;

class DeletableItem {
  public ?DeletableAttributeList $attributes;
  public string $name;

  public function __construct(shape(
    ?'attributes' => ?DeletableAttributeList,
    ?'name' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

type DeletableItemList = vec<DeletableItem>;

class DeleteAttributesRequest {
  public ?DeletableAttributeList $attributes;
  public string $domain_name;
  public ?UpdateCondition $expected;
  public string $item_name;

  public function __construct(shape(
    ?'attributes' => ?DeletableAttributeList,
    ?'domain_name' => string,
    ?'expected' => ?UpdateCondition,
    ?'item_name' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->domain_name = $s['domain_name'] ?? '';
    $this->expected = $s['expected'] ?? null;
    $this->item_name = $s['item_name'] ?? '';
  }
}

class DeleteDomainRequest {
  public string $domain_name;

  public function __construct(shape(
    ?'domain_name' => string,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DomainMetadataRequest {
  public string $domain_name;

  public function __construct(shape(
    ?'domain_name' => string,
  ) $s = shape()) {
    $this->domain_name = $s['domain_name'] ?? '';
  }
}

class DomainMetadataResult {
  public int $attribute_name_count;
  public ?Long $attribute_names_size_bytes;
  public int $attribute_value_count;
  public ?Long $attribute_values_size_bytes;
  public int $item_count;
  public ?Long $item_names_size_bytes;
  public int $timestamp;

  public function __construct(shape(
    ?'attribute_name_count' => int,
    ?'attribute_names_size_bytes' => ?Long,
    ?'attribute_value_count' => int,
    ?'attribute_values_size_bytes' => ?Long,
    ?'item_count' => int,
    ?'item_names_size_bytes' => ?Long,
    ?'timestamp' => int,
  ) $s = shape()) {
    $this->attribute_name_count = $s['attribute_name_count'] ?? 0;
    $this->attribute_names_size_bytes = $s['attribute_names_size_bytes'] ?? 0;
    $this->attribute_value_count = $s['attribute_value_count'] ?? 0;
    $this->attribute_values_size_bytes = $s['attribute_values_size_bytes'] ?? 0;
    $this->item_count = $s['item_count'] ?? 0;
    $this->item_names_size_bytes = $s['item_names_size_bytes'] ?? 0;
    $this->timestamp = $s['timestamp'] ?? 0;
  }
}

type DomainNameList = vec<String>;

class DuplicateItemName {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

type Float = float;

class GetAttributesRequest {
  public ?AttributeNameList $attribute_names;
  public bool $consistent_read;
  public string $domain_name;
  public string $item_name;

  public function __construct(shape(
    ?'attribute_names' => ?AttributeNameList,
    ?'consistent_read' => bool,
    ?'domain_name' => string,
    ?'item_name' => string,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
    $this->consistent_read = $s['consistent_read'] ?? false;
    $this->domain_name = $s['domain_name'] ?? '';
    $this->item_name = $s['item_name'] ?? '';
  }
}

class GetAttributesResult {
  public ?AttributeList $attributes;

  public function __construct(shape(
    ?'attributes' => ?AttributeList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

type Integer = int;

class InvalidNextToken {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class InvalidNumberPredicates {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class InvalidNumberValueTests {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class InvalidParameterValue {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class InvalidQueryExpression {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class Item {
  public string $alternate_name_encoding;
  public ?AttributeList $attributes;
  public string $name;

  public function __construct(shape(
    ?'alternate_name_encoding' => string,
    ?'attributes' => ?AttributeList,
    ?'name' => string,
  ) $s = shape()) {
    $this->alternate_name_encoding = $s['alternate_name_encoding'] ?? '';
    $this->attributes = $s['attributes'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

type ItemList = vec<Item>;

class ListDomainsRequest {
  public int $max_number_of_domains;
  public string $next_token;

  public function __construct(shape(
    ?'max_number_of_domains' => int,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->max_number_of_domains = $s['max_number_of_domains'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class ListDomainsResult {
  public ?DomainNameList $domain_names;
  public string $next_token;

  public function __construct(shape(
    ?'domain_names' => ?DomainNameList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->domain_names = $s['domain_names'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Long = int;

class MissingParameter {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class NoSuchDomain {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class NumberDomainAttributesExceeded {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class NumberDomainBytesExceeded {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class NumberDomainsExceeded {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class NumberItemAttributesExceeded {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class NumberSubmittedAttributesExceeded {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class NumberSubmittedItemsExceeded {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class PutAttributesRequest {
  public ?ReplaceableAttributeList $attributes;
  public string $domain_name;
  public ?UpdateCondition $expected;
  public string $item_name;

  public function __construct(shape(
    ?'attributes' => ?ReplaceableAttributeList,
    ?'domain_name' => string,
    ?'expected' => ?UpdateCondition,
    ?'item_name' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->domain_name = $s['domain_name'] ?? '';
    $this->expected = $s['expected'] ?? null;
    $this->item_name = $s['item_name'] ?? '';
  }
}

class ReplaceableAttribute {
  public string $name;
  public bool $replace;
  public string $value;

  public function __construct(shape(
    ?'name' => string,
    ?'replace' => bool,
    ?'value' => string,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->replace = $s['replace'] ?? false;
    $this->value = $s['value'] ?? '';
  }
}

type ReplaceableAttributeList = vec<ReplaceableAttribute>;

class ReplaceableItem {
  public ?ReplaceableAttributeList $attributes;
  public string $name;

  public function __construct(shape(
    ?'attributes' => ?ReplaceableAttributeList,
    ?'name' => string,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
    $this->name = $s['name'] ?? '';
  }
}

type ReplaceableItemList = vec<ReplaceableItem>;

class RequestTimeout {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class SelectRequest {
  public bool $consistent_read;
  public string $next_token;
  public string $select_expression;

  public function __construct(shape(
    ?'consistent_read' => bool,
    ?'next_token' => string,
    ?'select_expression' => string,
  ) $s = shape()) {
    $this->consistent_read = $s['consistent_read'] ?? false;
    $this->next_token = $s['next_token'] ?? '';
    $this->select_expression = $s['select_expression'] ?? '';
  }
}

class SelectResult {
  public ?ItemList $items;
  public string $next_token;

  public function __construct(shape(
    ?'items' => ?ItemList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->items = $s['items'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type String = string;

class TooManyRequestedAttributes {
  public ?Float $box_usage;

  public function __construct(shape(
    ?'box_usage' => ?Float,
  ) $s = shape()) {
    $this->box_usage = $s['box_usage'] ?? 0.0;
  }
}

class UpdateCondition {
  public bool $exists;
  public string $name;
  public string $value;

  public function __construct(shape(
    ?'exists' => bool,
    ?'name' => string,
    ?'value' => string,
  ) $s = shape()) {
    $this->exists = $s['exists'] ?? false;
    $this->name = $s['name'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

