<?hh // strict
namespace slack\aws\forecastquery;

interface forecastquery {
  public function QueryForecast(QueryForecastRequest): Awaitable<Errors\Result<QueryForecastResponse>>;
}

type Arn = string;

type AttributeName = string;

type AttributeValue = string;

class DataPoint {
  public Timestamp $timestamp;
  public Double $value;

  public function __construct(shape(
  ?'timestamp' => Timestamp,
  ?'value' => Double,
  ) $s = shape()) {
    $this->timestamp = $timestamp ?? "";
    $this->value = $value ?? 0.0;
  }
}

type DateTime = string;

type Double = float;

type ErrorMessage = string;

type Filters = dict<AttributeName, AttributeValue>;

class Forecast {
  public Predictions $predictions;

  public function __construct(shape(
  ?'predictions' => Predictions,
  ) $s = shape()) {
    $this->predictions = $predictions ?? [];
  }
}

class InvalidInputException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class InvalidNextTokenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class LimitExceededException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type NextToken = string;

type Predictions = dict<Statistic, TimeSeries>;

class QueryForecastRequest {
  public DateTime $end_date;
  public Filters $filters;
  public Arn $forecast_arn;
  public NextToken $next_token;
  public DateTime $start_date;

  public function __construct(shape(
  ?'end_date' => DateTime,
  ?'filters' => Filters,
  ?'forecast_arn' => Arn,
  ?'next_token' => NextToken,
  ?'start_date' => DateTime,
  ) $s = shape()) {
    $this->end_date = $end_date ?? "";
    $this->filters = $filters ?? [];
    $this->forecast_arn = $forecast_arn ?? "";
    $this->next_token = $next_token ?? "";
    $this->start_date = $start_date ?? "";
  }
}

class QueryForecastResponse {
  public Forecast $forecast;

  public function __construct(shape(
  ?'forecast' => Forecast,
  ) $s = shape()) {
    $this->forecast = $forecast ?? null;
  }
}

class ResourceInUseException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class ResourceNotFoundException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type Statistic = string;

type TimeSeries = vec<DataPoint>;

type Timestamp = string;

