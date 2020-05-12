<?hh // strict
namespace slack\aws\entitlement.marketplace;

interface  {
  public function GetEntitlements(GetEntitlementsRequest $in): Awaitable<\Errors\Result<GetEntitlementsResult>>;
}

type Boolean = bool;

type Double = float;

class Entitlement {
  public ?NonEmptyString $customer_identifier;
  public ?NonEmptyString $dimension;
  public ?Timestamp $expiration_date;
  public ?ProductCode $product_code;
  public ?EntitlementValue $value;

  public function __construct(shape(
    ?'customer_identifier' => ?NonEmptyString,
    ?'dimension' => ?NonEmptyString,
    ?'expiration_date' => ?Timestamp,
    ?'product_code' => ?ProductCode,
    ?'value' => ?EntitlementValue,
  ) $s = shape()) {
    $this->customer_identifier = $s['customer_identifier'] ?? '';
    $this->dimension = $s['dimension'] ?? '';
    $this->expiration_date = $s['expiration_date'] ?? 0;
    $this->product_code = $s['product_code'] ?? '';
    $this->value = $s['value'] ?? null;
  }
}

type EntitlementList = vec<Entitlement>;

class EntitlementValue {
  public bool $boolean_value;
  public ?Double $double_value;
  public int $integer_value;
  public string $string_value;

  public function __construct(shape(
    ?'boolean_value' => bool,
    ?'double_value' => ?Double,
    ?'integer_value' => int,
    ?'string_value' => string,
  ) $s = shape()) {
    $this->boolean_value = $s['boolean_value'] ?? false;
    $this->double_value = $s['double_value'] ?? 0.0;
    $this->integer_value = $s['integer_value'] ?? 0;
    $this->string_value = $s['string_value'] ?? '';
  }
}

type ErrorMessage = string;

type FilterValue = string;

type FilterValueList = vec<FilterValue>;

type GetEntitlementFilterName = string;

type GetEntitlementFilters = dict<GetEntitlementFilterName, FilterValueList>;

class GetEntitlementsRequest {
  public ?GetEntitlementFilters $filter;
  public int $max_results;
  public ?NonEmptyString $next_token;
  public ?ProductCode $product_code;

  public function __construct(shape(
    ?'filter' => ?GetEntitlementFilters,
    ?'max_results' => int,
    ?'next_token' => ?NonEmptyString,
    ?'product_code' => ?ProductCode,
  ) $s = shape()) {
    $this->filter = $s['filter'] ?? dict[];
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->product_code = $s['product_code'] ?? '';
  }
}

class GetEntitlementsResult {
  public ?EntitlementList $entitlements;
  public ?NonEmptyString $next_token;

  public function __construct(shape(
    ?'entitlements' => ?EntitlementList,
    ?'next_token' => ?NonEmptyString,
  ) $s = shape()) {
    $this->entitlements = $s['entitlements'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

type Integer = int;

class InternalServiceErrorException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidParameterException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NonEmptyString = string;

type ProductCode = string;

type String = string;

class ThrottlingException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Timestamp = int;

