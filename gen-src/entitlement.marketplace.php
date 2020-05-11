<?hh // strict
namespace slack\aws\entitlement.marketplace;

interface  {
  public function GetEntitlements(GetEntitlementsRequest): Awaitable<Errors\Result<GetEntitlementsResult>>;
}

type Boolean = bool;

type Double = float;

class Entitlement {
  public NonEmptyString $customer_identifier;
  public NonEmptyString $dimension;
  public Timestamp $expiration_date;
  public ProductCode $product_code;
  public EntitlementValue $value;

  public function __construct(shape(
  ?'customer_identifier' => NonEmptyString,
  ?'dimension' => NonEmptyString,
  ?'expiration_date' => Timestamp,
  ?'product_code' => ProductCode,
  ?'value' => EntitlementValue,
  ) $s = shape()) {
    $this->customer_identifier = $customer_identifier ?? "";
    $this->dimension = $dimension ?? "";
    $this->expiration_date = $expiration_date ?? 0;
    $this->product_code = $product_code ?? "";
    $this->value = $value ?? null;
  }
}

type EntitlementList = vec<Entitlement>;

class EntitlementValue {
  public boolean $boolean_value;
  public Double $double_value;
  public int $integer_value;
  public string $string_value;

  public function __construct(shape(
  ?'boolean_value' => boolean,
  ?'double_value' => Double,
  ?'integer_value' => int,
  ?'string_value' => string,
  ) $s = shape()) {
    $this->boolean_value = $boolean_value ?? false;
    $this->double_value = $double_value ?? 0.0;
    $this->integer_value = $integer_value ?? 0;
    $this->string_value = $string_value ?? "";
  }
}

type ErrorMessage = string;

type FilterValue = string;

type FilterValueList = vec<FilterValue>;

type GetEntitlementFilterName = string;

type GetEntitlementFilters = dict<GetEntitlementFilterName, FilterValueList>;

class GetEntitlementsRequest {
  public GetEntitlementFilters $filter;
  public int $max_results;
  public NonEmptyString $next_token;
  public ProductCode $product_code;

  public function __construct(shape(
  ?'filter' => GetEntitlementFilters,
  ?'max_results' => int,
  ?'next_token' => NonEmptyString,
  ?'product_code' => ProductCode,
  ) $s = shape()) {
    $this->filter = $filter ?? [];
    $this->max_results = $max_results ?? 0;
    $this->next_token = $next_token ?? "";
    $this->product_code = $product_code ?? "";
  }
}

class GetEntitlementsResult {
  public EntitlementList $entitlements;
  public NonEmptyString $next_token;

  public function __construct(shape(
  ?'entitlements' => EntitlementList,
  ?'next_token' => NonEmptyString,
  ) $s = shape()) {
    $this->entitlements = $entitlements ?? [];
    $this->next_token = $next_token ?? "";
  }
}

type Integer = int;

class InternalServiceErrorException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidParameterException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type NonEmptyString = string;

type ProductCode = string;

type String = string;

class ThrottlingException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Timestamp = int;

