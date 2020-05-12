<?hh // strict
namespace slack\aws\forecastquery;

interface forecastquery {
  public function QueryForecast(QueryForecastRequest $in): Awaitable<\Errors\Result<QueryForecastResponse>>;
}

type Arn = string;

type AttributeName = string;

type AttributeValue = string;

class DataPoint {
  public ?Timestamp $timestamp;
  public ?Double $value;

  public function __construct(shape(
    ?'timestamp' => ?Timestamp,
    ?'value' => ?Double,
  ) $s = shape()) {
    $this->timestamp = $s['timestamp'] ?? '';
    $this->value = $s['value'] ?? 0.0;
  }
}

type DateTime = string;

type Double = float;

type ErrorMessage = string;

type Filters = dict<AttributeName, AttributeValue>;

class Forecast {
  public ?Predictions $predictions;

  public function __construct(shape(
    ?'predictions' => ?Predictions,
  ) $s = shape()) {
    $this->predictions = $s['predictions'] ?? dict[];
  }
}

class InvalidInputException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class InvalidNextTokenException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class LimitExceededException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type NextToken = string;

type Predictions = dict<Statistic, TimeSeries>;

class QueryForecastRequest {
  public ?DateTime $end_date;
  public ?Filters $filters;
  public ?Arn $forecast_arn;
  public ?NextToken $next_token;
  public ?DateTime $start_date;

  public function __construct(shape(
    ?'end_date' => ?DateTime,
    ?'filters' => ?Filters,
    ?'forecast_arn' => ?Arn,
    ?'next_token' => ?NextToken,
    ?'start_date' => ?DateTime,
  ) $s = shape()) {
    $this->end_date = $s['end_date'] ?? '';
    $this->filters = $s['filters'] ?? dict[];
    $this->forecast_arn = $s['forecast_arn'] ?? '';
    $this->next_token = $s['next_token'] ?? '';
    $this->start_date = $s['start_date'] ?? '';
  }
}

class QueryForecastResponse {
  public ?Forecast $forecast;

  public function __construct(shape(
    ?'forecast' => ?Forecast,
  ) $s = shape()) {
    $this->forecast = $s['forecast'] ?? null;
  }
}

class ResourceInUseException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class ResourceNotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Statistic = string;

type TimeSeries = vec<DataPoint>;

type Timestamp = string;

