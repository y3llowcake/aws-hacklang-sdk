<?hh // strict
namespace slack\aws\api.pricing;

interface  {
  public function DescribeServices(DescribeServicesRequest $in): Awaitable<\Errors\Result<DescribeServicesResponse>>;
  public function GetAttributeValues(GetAttributeValuesRequest $in): Awaitable<\Errors\Result<GetAttributeValuesResponse>>;
  public function GetProducts(GetProductsRequest $in): Awaitable<\Errors\Result<GetProductsResponse>>;
}

type AttributeNameList = vec<String>;

class AttributeValue {
  public string $value;

  public function __construct(shape(
    ?'value' => string,
  ) $s = shape()) {
    $this->value = $s['value'] ?? '';
  }
}

type AttributeValueList = vec<AttributeValue>;

type BoxedInteger = int;

class DescribeServicesRequest {
  public string $format_version;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;

  public function __construct(shape(
    ?'format_version' => string,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'service_code' => string,
  ) $s = shape()) {
    $this->format_version = $s['format_version'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class DescribeServicesResponse {
  public string $format_version;
  public string $next_token;
  public ?ServiceList $services;

  public function __construct(shape(
    ?'format_version' => string,
    ?'next_token' => string,
    ?'services' => ?ServiceList,
  ) $s = shape()) {
    $this->format_version = $s['format_version'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->services = $s['services'] ?? vec[];
  }
}

class ExpiredNextTokenException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Filter {
  public string $field;
  public ?FilterType $type;
  public string $value;

  public function __construct(shape(
    ?'field' => string,
    ?'type' => ?FilterType,
    ?'value' => string,
  ) $s = shape()) {
    $this->field = $s['field'] ?? '';
    $this->type = $s['type'] ?? '';
    $this->value = $s['value'] ?? '';
  }
}

type FilterType = string;

type Filters = vec<Filter>;

class GetAttributeValuesRequest {
  public string $attribute_name;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;

  public function __construct(shape(
    ?'attribute_name' => string,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'service_code' => string,
  ) $s = shape()) {
    $this->attribute_name = $s['attribute_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class GetAttributeValuesResponse {
  public ?AttributeValueList $attribute_values;
  public string $next_token;

  public function __construct(shape(
    ?'attribute_values' => ?AttributeValueList,
    ?'next_token' => string,
  ) $s = shape()) {
    $this->attribute_values = $s['attribute_values'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class GetProductsRequest {
  public ?Filters $filters;
  public string $format_version;
  public ?BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;

  public function __construct(shape(
    ?'filters' => ?Filters,
    ?'format_version' => string,
    ?'max_results' => ?BoxedInteger,
    ?'next_token' => string,
    ?'service_code' => string,
  ) $s = shape()) {
    $this->filters = $s['filters'] ?? vec[];
    $this->format_version = $s['format_version'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->service_code = $s['service_code'] ?? '';
  }
}

class GetProductsResponse {
  public string $format_version;
  public string $next_token;
  public ?PriceList $price_list;

  public function __construct(shape(
    ?'format_version' => string,
    ?'next_token' => string,
    ?'price_list' => ?PriceList,
  ) $s = shape()) {
    $this->format_version = $s['format_version'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->price_list = $s['price_list'] ?? vec[];
  }
}

class InternalErrorException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class NotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type PriceList = vec<PriceListItemJSON>;

type PriceListItemJSON = string;

class Service {
  public ?AttributeNameList $attribute_names;
  public string $service_code;

  public function __construct(shape(
    ?'attribute_names' => ?AttributeNameList,
    ?'service_code' => string,
  ) $s = shape()) {
    $this->attribute_names = $s['attribute_names'] ?? vec[];
    $this->service_code = $s['service_code'] ?? '';
  }
}

type ServiceList = vec<Service>;

type String = string;

type errorMessage = string;

