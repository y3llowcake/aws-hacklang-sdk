<?hh // strict
namespace slack\aws\api.pricing;

interface  {
  public function DescribeServices(DescribeServicesRequest): Awaitable<Errors\Result<DescribeServicesResponse>>;
  public function GetAttributeValues(GetAttributeValuesRequest): Awaitable<Errors\Result<GetAttributeValuesResponse>>;
  public function GetProducts(GetProductsRequest): Awaitable<Errors\Result<GetProductsResponse>>;
}

type AttributeNameList = vec<String>;

class AttributeValue {
  public string $value;

  public function __construct(shape(
  ?'value' => string,
  ) $s = shape()) {
    $this->value = $value ?? ;
  }
}

type AttributeValueList = vec<AttributeValue>;

type BoxedInteger = int;

class DescribeServicesRequest {
  public string $format_version;
  public BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;

  public function __construct(shape(
  ?'format_version' => string,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'service_code' => string,
  ) $s = shape()) {
    $this->format_version = $format_version ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->service_code = $service_code ?? ;
  }
}

class DescribeServicesResponse {
  public string $format_version;
  public string $next_token;
  public ServiceList $services;

  public function __construct(shape(
  ?'format_version' => string,
  ?'next_token' => string,
  ?'services' => ServiceList,
  ) $s = shape()) {
    $this->format_version = $format_version ?? ;
    $this->next_token = $next_token ?? ;
    $this->services = $services ?? ;
  }
}

class ExpiredNextTokenException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class Filter {
  public string $field;
  public FilterType $type;
  public string $value;

  public function __construct(shape(
  ?'field' => string,
  ?'type' => FilterType,
  ?'value' => string,
  ) $s = shape()) {
    $this->field = $field ?? ;
    $this->type = $type ?? ;
    $this->value = $value ?? ;
  }
}

type FilterType = string;

type Filters = vec<Filter>;

class GetAttributeValuesRequest {
  public string $attribute_name;
  public BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;

  public function __construct(shape(
  ?'attribute_name' => string,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'service_code' => string,
  ) $s = shape()) {
    $this->attribute_name = $attribute_name ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->service_code = $service_code ?? ;
  }
}

class GetAttributeValuesResponse {
  public AttributeValueList $attribute_values;
  public string $next_token;

  public function __construct(shape(
  ?'attribute_values' => AttributeValueList,
  ?'next_token' => string,
  ) $s = shape()) {
    $this->attribute_values = $attribute_values ?? ;
    $this->next_token = $next_token ?? ;
  }
}

class GetProductsRequest {
  public Filters $filters;
  public string $format_version;
  public BoxedInteger $max_results;
  public string $next_token;
  public string $service_code;

  public function __construct(shape(
  ?'filters' => Filters,
  ?'format_version' => string,
  ?'max_results' => BoxedInteger,
  ?'next_token' => string,
  ?'service_code' => string,
  ) $s = shape()) {
    $this->filters = $filters ?? [];
    $this->format_version = $format_version ?? ;
    $this->max_results = $max_results ?? ;
    $this->next_token = $next_token ?? ;
    $this->service_code = $service_code ?? ;
  }
}

class GetProductsResponse {
  public string $format_version;
  public string $next_token;
  public PriceList $price_list;

  public function __construct(shape(
  ?'format_version' => string,
  ?'next_token' => string,
  ?'price_list' => PriceList,
  ) $s = shape()) {
    $this->format_version = $format_version ?? ;
    $this->next_token = $next_token ?? ;
    $this->price_list = $price_list ?? [];
  }
}

class InternalErrorException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidNextTokenException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class InvalidParameterException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

class NotFoundException {
  public errorMessage $message;

  public function __construct(shape(
  ?'message' => errorMessage,
  ) $s = shape()) {
    $this->message = $message ?? ;
  }
}

type PriceList = vec<PriceListItemJSON>;

type PriceListItemJSON = string;

class Service {
  public AttributeNameList $attribute_names;
  public string $service_code;

  public function __construct(shape(
  ?'attribute_names' => AttributeNameList,
  ?'service_code' => string,
  ) $s = shape()) {
    $this->attribute_names = $attribute_names ?? ;
    $this->service_code = $service_code ?? ;
  }
}

type ServiceList = vec<Service>;

type String = string;

type errorMessage = string;

