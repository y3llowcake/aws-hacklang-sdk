<?hh // strict
namespace slack\aws\sdb;

interface  {
  public function BatchDeleteAttributes(BatchDeleteAttributesRequest): Awaitable<Errors\Error>;
  public function BatchPutAttributes(BatchPutAttributesRequest): Awaitable<Errors\Error>;
  public function CreateDomain(CreateDomainRequest): Awaitable<Errors\Error>;
  public function DeleteAttributes(DeleteAttributesRequest): Awaitable<Errors\Error>;
  public function DeleteDomain(DeleteDomainRequest): Awaitable<Errors\Error>;
  public function DomainMetadata(DomainMetadataRequest): Awaitable<Errors\Result<DomainMetadataResult>>;
  public function GetAttributes(GetAttributesRequest): Awaitable<Errors\Result<GetAttributesResult>>;
  public function ListDomains(ListDomainsRequest): Awaitable<Errors\Result<ListDomainsResult>>;
  public function PutAttributes(PutAttributesRequest): Awaitable<Errors\Error>;
  public function Select(SelectRequest): Awaitable<Errors\Result<SelectResult>>;
}

class Attribute {
  public string $alternate_name_encoding;
  public string $alternate_value_encoding;
  public string $name;
  public string $value;
}

class AttributeDoesNotExist {
  public Float $box_usage;
}



class BatchDeleteAttributesRequest {
  public string $domain_name;
  public DeletableItemList $items;
}

class BatchPutAttributesRequest {
  public string $domain_name;
  public ReplaceableItemList $items;
}

class Boolean {
}

class CreateDomainRequest {
  public string $domain_name;
}

class DeletableAttribute {
  public string $name;
  public string $value;
}


class DeletableItem {
  public DeletableAttributeList $attributes;
  public string $name;
}


class DeleteAttributesRequest {
  public DeletableAttributeList $attributes;
  public string $domain_name;
  public UpdateCondition $expected;
  public string $item_name;
}

class DeleteDomainRequest {
  public string $domain_name;
}

class DomainMetadataRequest {
  public string $domain_name;
}

class DomainMetadataResult {
  public int $attribute_name_count;
  public Long $attribute_names_size_bytes;
  public int $attribute_value_count;
  public Long $attribute_values_size_bytes;
  public int $item_count;
  public Long $item_names_size_bytes;
  public int $timestamp;
}


class DuplicateItemName {
  public Float $box_usage;
}

class Float {
}

class GetAttributesRequest {
  public AttributeNameList $attribute_names;
  public boolean $consistent_read;
  public string $domain_name;
  public string $item_name;
}

class GetAttributesResult {
  public AttributeList $attributes;
}

class Integer {
}

class InvalidNextToken {
  public Float $box_usage;
}

class InvalidNumberPredicates {
  public Float $box_usage;
}

class InvalidNumberValueTests {
  public Float $box_usage;
}

class InvalidParameterValue {
  public Float $box_usage;
}

class InvalidQueryExpression {
  public Float $box_usage;
}

class Item {
  public string $alternate_name_encoding;
  public AttributeList $attributes;
  public string $name;
}


class ListDomainsRequest {
  public int $max_number_of_domains;
  public string $next_token;
}

class ListDomainsResult {
  public DomainNameList $domain_names;
  public string $next_token;
}

class Long {
}

class MissingParameter {
  public Float $box_usage;
}

class NoSuchDomain {
  public Float $box_usage;
}

class NumberDomainAttributesExceeded {
  public Float $box_usage;
}

class NumberDomainBytesExceeded {
  public Float $box_usage;
}

class NumberDomainsExceeded {
  public Float $box_usage;
}

class NumberItemAttributesExceeded {
  public Float $box_usage;
}

class NumberSubmittedAttributesExceeded {
  public Float $box_usage;
}

class NumberSubmittedItemsExceeded {
  public Float $box_usage;
}

class PutAttributesRequest {
  public ReplaceableAttributeList $attributes;
  public string $domain_name;
  public UpdateCondition $expected;
  public string $item_name;
}

class ReplaceableAttribute {
  public string $name;
  public boolean $replace;
  public string $value;
}


class ReplaceableItem {
  public ReplaceableAttributeList $attributes;
  public string $name;
}


class RequestTimeout {
  public Float $box_usage;
}

class SelectRequest {
  public boolean $consistent_read;
  public string $next_token;
  public string $select_expression;
}

class SelectResult {
  public ItemList $items;
  public string $next_token;
}

class String {
}

class TooManyRequestedAttributes {
  public Float $box_usage;
}

class UpdateCondition {
  public boolean $exists;
  public string $name;
  public string $value;
}

