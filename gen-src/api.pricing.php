<?hh // strict
namespace slack\aws\api.pricing;

interface  {
  public function DescribeServices(DescribeServicesRequest) Awaitable<Errors\Result<DescribeServicesResponse>>;
  public function GetAttributeValues(GetAttributeValuesRequest) Awaitable<Errors\Result<GetAttributeValuesResponse>>;
  public function GetProducts(GetProductsRequest) Awaitable<Errors\Result<GetProductsResponse>>;
}

class AttributeNameList {
}

class AttributeValue {
  public string $value;
}

class AttributeValueList {
}

class BoxedInteger {
}

class DescribeServicesRequest {
  public string $format_version;
  public BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;
}

class DescribeServicesResponse {
  public string $format_version;
  public string $next_token;
  public ServiceList $services;
}

class ExpiredNextTokenException {
  public errorMessage $message;
}

class Filter {
  public string $field;
  public FilterType $type;
  public string $value;
}

class FilterType {
}

class Filters {
}

class GetAttributeValuesRequest {
  public string $attribute_name;
  public BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;
}

class GetAttributeValuesResponse {
  public AttributeValueList $attribute_values;
  public string $next_token;
}

class GetProductsRequest {
  public Filters $filters;
  public string $format_version;
  public BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;
}

class GetProductsResponse {
  public string $format_version;
  public string $next_token;
  public PriceList $price_list;
}

class InternalErrorException {
  public errorMessage $message;
}

class InvalidNextTokenException {
  public errorMessage $message;
}

class InvalidParameterException {
  public errorMessage $message;
}

class NotFoundException {
  public errorMessage $message;
}

class PriceList {
}

class PriceListItemJSON {
}

class Service {
  public AttributeNameList $attribute_names;
  public string $service_code;
}

class ServiceList {
}

class String {
}

class errorMessage {
}

