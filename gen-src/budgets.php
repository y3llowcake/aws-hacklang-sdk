<?hh // strict
namespace slack\aws\budgets;

interface Budgets {
  public function CreateBudget(CreateBudgetRequest $in): Awaitable<\Errors\Result<CreateBudgetResponse>>;
  public function CreateNotification(CreateNotificationRequest $in): Awaitable<\Errors\Result<CreateNotificationResponse>>;
  public function CreateSubscriber(CreateSubscriberRequest $in): Awaitable<\Errors\Result<CreateSubscriberResponse>>;
  public function DeleteBudget(DeleteBudgetRequest $in): Awaitable<\Errors\Result<DeleteBudgetResponse>>;
  public function DeleteNotification(DeleteNotificationRequest $in): Awaitable<\Errors\Result<DeleteNotificationResponse>>;
  public function DeleteSubscriber(DeleteSubscriberRequest $in): Awaitable<\Errors\Result<DeleteSubscriberResponse>>;
  public function DescribeBudget(DescribeBudgetRequest $in): Awaitable<\Errors\Result<DescribeBudgetResponse>>;
  public function DescribeBudgetPerformanceHistory(DescribeBudgetPerformanceHistoryRequest $in): Awaitable<\Errors\Result<DescribeBudgetPerformanceHistoryResponse>>;
  public function DescribeBudgets(DescribeBudgetsRequest $in): Awaitable<\Errors\Result<DescribeBudgetsResponse>>;
  public function DescribeNotificationsForBudget(DescribeNotificationsForBudgetRequest $in): Awaitable<\Errors\Result<DescribeNotificationsForBudgetResponse>>;
  public function DescribeSubscribersForNotification(DescribeSubscribersForNotificationRequest $in): Awaitable<\Errors\Result<DescribeSubscribersForNotificationResponse>>;
  public function UpdateBudget(UpdateBudgetRequest $in): Awaitable<\Errors\Result<UpdateBudgetResponse>>;
  public function UpdateNotification(UpdateNotificationRequest $in): Awaitable<\Errors\Result<UpdateNotificationResponse>>;
  public function UpdateSubscriber(UpdateSubscriberRequest $in): Awaitable<\Errors\Result<UpdateSubscriberResponse>>;
}

class AccessDeniedException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type AccountId = string;

class Budget {
  public ?Spend $budget_limit;
  public ?BudgetName $budget_name;
  public ?BudgetType $budget_type;
  public ?CalculatedSpend $calculated_spend;
  public ?CostFilters $cost_filters;
  public ?CostTypes $cost_types;
  public ?GenericTimestamp $last_updated_time;
  public ?PlannedBudgetLimits $planned_budget_limits;
  public ?TimePeriod $time_period;
  public ?TimeUnit $time_unit;

  public function __construct(shape(
    ?'budget_limit' => ?Spend,
    ?'budget_name' => ?BudgetName,
    ?'budget_type' => ?BudgetType,
    ?'calculated_spend' => ?CalculatedSpend,
    ?'cost_filters' => ?CostFilters,
    ?'cost_types' => ?CostTypes,
    ?'last_updated_time' => ?GenericTimestamp,
    ?'planned_budget_limits' => ?PlannedBudgetLimits,
    ?'time_period' => ?TimePeriod,
    ?'time_unit' => ?TimeUnit,
  ) $s = shape()) {
    $this->budget_limit = $s['budget_limit'] ?? null;
    $this->budget_name = $s['budget_name'] ?? '';
    $this->budget_type = $s['budget_type'] ?? '';
    $this->calculated_spend = $s['calculated_spend'] ?? null;
    $this->cost_filters = $s['cost_filters'] ?? dict[];
    $this->cost_types = $s['cost_types'] ?? null;
    $this->last_updated_time = $s['last_updated_time'] ?? 0;
    $this->planned_budget_limits = $s['planned_budget_limits'] ?? dict[];
    $this->time_period = $s['time_period'] ?? null;
    $this->time_unit = $s['time_unit'] ?? '';
  }
}

type BudgetName = string;

class BudgetPerformanceHistory {
  public ?BudgetName $budget_name;
  public ?BudgetType $budget_type;
  public ?BudgetedAndActualAmountsList $budgeted_and_actual_amounts_list;
  public ?CostFilters $cost_filters;
  public ?CostTypes $cost_types;
  public ?TimeUnit $time_unit;

  public function __construct(shape(
    ?'budget_name' => ?BudgetName,
    ?'budget_type' => ?BudgetType,
    ?'budgeted_and_actual_amounts_list' => ?BudgetedAndActualAmountsList,
    ?'cost_filters' => ?CostFilters,
    ?'cost_types' => ?CostTypes,
    ?'time_unit' => ?TimeUnit,
  ) $s = shape()) {
    $this->budget_name = $s['budget_name'] ?? '';
    $this->budget_type = $s['budget_type'] ?? '';
    $this->budgeted_and_actual_amounts_list = $s['budgeted_and_actual_amounts_list'] ?? vec[];
    $this->cost_filters = $s['cost_filters'] ?? dict[];
    $this->cost_types = $s['cost_types'] ?? null;
    $this->time_unit = $s['time_unit'] ?? '';
  }
}

type BudgetType = string;

class BudgetedAndActualAmounts {
  public ?Spend $actual_amount;
  public ?Spend $budgeted_amount;
  public ?TimePeriod $time_period;

  public function __construct(shape(
    ?'actual_amount' => ?Spend,
    ?'budgeted_amount' => ?Spend,
    ?'time_period' => ?TimePeriod,
  ) $s = shape()) {
    $this->actual_amount = $s['actual_amount'] ?? null;
    $this->budgeted_amount = $s['budgeted_amount'] ?? null;
    $this->time_period = $s['time_period'] ?? null;
  }
}

type BudgetedAndActualAmountsList = vec<BudgetedAndActualAmounts>;

type Budgets = vec<Budget>;

class CalculatedSpend {
  public ?Spend $actual_spend;
  public ?Spend $forecasted_spend;

  public function __construct(shape(
    ?'actual_spend' => ?Spend,
    ?'forecasted_spend' => ?Spend,
  ) $s = shape()) {
    $this->actual_spend = $s['actual_spend'] ?? null;
    $this->forecasted_spend = $s['forecasted_spend'] ?? null;
  }
}

type ComparisonOperator = string;

type CostFilters = dict<GenericString, DimensionValues>;

class CostTypes {
  public ?NullableBoolean $include_credit;
  public ?NullableBoolean $include_discount;
  public ?NullableBoolean $include_other_subscription;
  public ?NullableBoolean $include_recurring;
  public ?NullableBoolean $include_refund;
  public ?NullableBoolean $include_subscription;
  public ?NullableBoolean $include_support;
  public ?NullableBoolean $include_tax;
  public ?NullableBoolean $include_upfront;
  public ?NullableBoolean $use_amortized;
  public ?NullableBoolean $use_blended;

  public function __construct(shape(
    ?'include_credit' => ?NullableBoolean,
    ?'include_discount' => ?NullableBoolean,
    ?'include_other_subscription' => ?NullableBoolean,
    ?'include_recurring' => ?NullableBoolean,
    ?'include_refund' => ?NullableBoolean,
    ?'include_subscription' => ?NullableBoolean,
    ?'include_support' => ?NullableBoolean,
    ?'include_tax' => ?NullableBoolean,
    ?'include_upfront' => ?NullableBoolean,
    ?'use_amortized' => ?NullableBoolean,
    ?'use_blended' => ?NullableBoolean,
  ) $s = shape()) {
    $this->include_credit = $s['include_credit'] ?? false;
    $this->include_discount = $s['include_discount'] ?? false;
    $this->include_other_subscription = $s['include_other_subscription'] ?? false;
    $this->include_recurring = $s['include_recurring'] ?? false;
    $this->include_refund = $s['include_refund'] ?? false;
    $this->include_subscription = $s['include_subscription'] ?? false;
    $this->include_support = $s['include_support'] ?? false;
    $this->include_tax = $s['include_tax'] ?? false;
    $this->include_upfront = $s['include_upfront'] ?? false;
    $this->use_amortized = $s['use_amortized'] ?? false;
    $this->use_blended = $s['use_blended'] ?? false;
  }
}

class CreateBudgetRequest {
  public ?AccountId $account_id;
  public ?Budget $budget;
  public ?NotificationWithSubscribersList $notifications_with_subscribers;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget' => ?Budget,
    ?'notifications_with_subscribers' => ?NotificationWithSubscribersList,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget = $s['budget'] ?? null;
    $this->notifications_with_subscribers = $s['notifications_with_subscribers'] ?? vec[];
  }
}

class CreateBudgetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateNotificationRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?Notification $notification;
  public ?Subscribers $subscribers;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'notification' => ?Notification,
    ?'subscribers' => ?Subscribers,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->subscribers = $s['subscribers'] ?? vec[];
  }
}

class CreateNotificationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreateSubscriberRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?Notification $notification;
  public ?Subscriber $subscriber;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'notification' => ?Notification,
    ?'subscriber' => ?Subscriber,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->subscriber = $s['subscriber'] ?? null;
  }
}

class CreateSubscriberResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class CreationLimitExceededException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class DeleteBudgetRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
  }
}

class DeleteBudgetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteNotificationRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?Notification $notification;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'notification' => ?Notification,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->notification = $s['notification'] ?? null;
  }
}

class DeleteNotificationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DeleteSubscriberRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?Notification $notification;
  public ?Subscriber $subscriber;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'notification' => ?Notification,
    ?'subscriber' => ?Subscriber,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->notification = $s['notification'] ?? null;
    $this->subscriber = $s['subscriber'] ?? null;
  }
}

class DeleteSubscriberResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class DescribeBudgetPerformanceHistoryRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?MaxResults $max_results;
  public ?GenericString $next_token;
  public ?TimePeriod $time_period;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?GenericString,
    ?'time_period' => ?TimePeriod,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->time_period = $s['time_period'] ?? null;
  }
}

class DescribeBudgetPerformanceHistoryResponse {
  public ?BudgetPerformanceHistory $budget_performance_history;
  public ?GenericString $next_token;

  public function __construct(shape(
    ?'budget_performance_history' => ?BudgetPerformanceHistory,
    ?'next_token' => ?GenericString,
  ) $s = shape()) {
    $this->budget_performance_history = $s['budget_performance_history'] ?? null;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeBudgetRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
  }
}

class DescribeBudgetResponse {
  public ?Budget $budget;

  public function __construct(shape(
    ?'budget' => ?Budget,
  ) $s = shape()) {
    $this->budget = $s['budget'] ?? null;
  }
}

class DescribeBudgetsRequest {
  public ?AccountId $account_id;
  public ?MaxResults $max_results;
  public ?GenericString $next_token;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?GenericString,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeBudgetsResponse {
  public ?Budgets $budgets;
  public ?GenericString $next_token;

  public function __construct(shape(
    ?'budgets' => ?Budgets,
    ?'next_token' => ?GenericString,
  ) $s = shape()) {
    $this->budgets = $s['budgets'] ?? vec[];
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeNotificationsForBudgetRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?MaxResults $max_results;
  public ?GenericString $next_token;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?GenericString,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
  }
}

class DescribeNotificationsForBudgetResponse {
  public ?GenericString $next_token;
  public ?Notifications $notifications;

  public function __construct(shape(
    ?'next_token' => ?GenericString,
    ?'notifications' => ?Notifications,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->notifications = $s['notifications'] ?? vec[];
  }
}

class DescribeSubscribersForNotificationRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?MaxResults $max_results;
  public ?GenericString $next_token;
  public ?Notification $notification;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'max_results' => ?MaxResults,
    ?'next_token' => ?GenericString,
    ?'notification' => ?Notification,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->max_results = $s['max_results'] ?? 0;
    $this->next_token = $s['next_token'] ?? '';
    $this->notification = $s['notification'] ?? null;
  }
}

class DescribeSubscribersForNotificationResponse {
  public ?GenericString $next_token;
  public ?Subscribers $subscribers;

  public function __construct(shape(
    ?'next_token' => ?GenericString,
    ?'subscribers' => ?Subscribers,
  ) $s = shape()) {
    $this->next_token = $s['next_token'] ?? '';
    $this->subscribers = $s['subscribers'] ?? vec[];
  }
}

type DimensionValues = vec<GenericString>;

class DuplicateRecordException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
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

type GenericString = string;

type GenericTimestamp = int;

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

type MaxResults = int;

class NotFoundException {
  public ?errorMessage $message;

  public function __construct(shape(
    ?'message' => ?errorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class Notification {
  public ?ComparisonOperator $comparison_operator;
  public ?NotificationState $notification_state;
  public ?NotificationType $notification_type;
  public ?NotificationThreshold $threshold;
  public ?ThresholdType $threshold_type;

  public function __construct(shape(
    ?'comparison_operator' => ?ComparisonOperator,
    ?'notification_state' => ?NotificationState,
    ?'notification_type' => ?NotificationType,
    ?'threshold' => ?NotificationThreshold,
    ?'threshold_type' => ?ThresholdType,
  ) $s = shape()) {
    $this->comparison_operator = $s['comparison_operator'] ?? '';
    $this->notification_state = $s['notification_state'] ?? '';
    $this->notification_type = $s['notification_type'] ?? '';
    $this->threshold = $s['threshold'] ?? 0.0;
    $this->threshold_type = $s['threshold_type'] ?? '';
  }
}

type NotificationState = string;

type NotificationThreshold = float;

type NotificationType = string;

class NotificationWithSubscribers {
  public ?Notification $notification;
  public ?Subscribers $subscribers;

  public function __construct(shape(
    ?'notification' => ?Notification,
    ?'subscribers' => ?Subscribers,
  ) $s = shape()) {
    $this->notification = $s['notification'] ?? null;
    $this->subscribers = $s['subscribers'] ?? vec[];
  }
}

type NotificationWithSubscribersList = vec<NotificationWithSubscribers>;

type Notifications = vec<Notification>;

type NullableBoolean = bool;

type NumericValue = string;

type PlannedBudgetLimits = dict<GenericString, Spend>;

class Spend {
  public ?NumericValue $amount;
  public ?UnitValue $unit;

  public function __construct(shape(
    ?'amount' => ?NumericValue,
    ?'unit' => ?UnitValue,
  ) $s = shape()) {
    $this->amount = $s['amount'] ?? '';
    $this->unit = $s['unit'] ?? '';
  }
}

class Subscriber {
  public ?SubscriberAddress $address;
  public ?SubscriptionType $subscription_type;

  public function __construct(shape(
    ?'address' => ?SubscriberAddress,
    ?'subscription_type' => ?SubscriptionType,
  ) $s = shape()) {
    $this->address = $s['address'] ?? '';
    $this->subscription_type = $s['subscription_type'] ?? '';
  }
}

type SubscriberAddress = string;

type Subscribers = vec<Subscriber>;

type SubscriptionType = string;

type ThresholdType = string;

class TimePeriod {
  public ?GenericTimestamp $end;
  public ?GenericTimestamp $start;

  public function __construct(shape(
    ?'end' => ?GenericTimestamp,
    ?'start' => ?GenericTimestamp,
  ) $s = shape()) {
    $this->end = $s['end'] ?? 0;
    $this->start = $s['start'] ?? 0;
  }
}

type TimeUnit = string;

type UnitValue = string;

class UpdateBudgetRequest {
  public ?AccountId $account_id;
  public ?Budget $new_budget;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'new_budget' => ?Budget,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->new_budget = $s['new_budget'] ?? null;
  }
}

class UpdateBudgetResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateNotificationRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?Notification $new_notification;
  public ?Notification $old_notification;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'new_notification' => ?Notification,
    ?'old_notification' => ?Notification,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->new_notification = $s['new_notification'] ?? null;
    $this->old_notification = $s['old_notification'] ?? null;
  }
}

class UpdateNotificationResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class UpdateSubscriberRequest {
  public ?AccountId $account_id;
  public ?BudgetName $budget_name;
  public ?Subscriber $new_subscriber;
  public ?Notification $notification;
  public ?Subscriber $old_subscriber;

  public function __construct(shape(
    ?'account_id' => ?AccountId,
    ?'budget_name' => ?BudgetName,
    ?'new_subscriber' => ?Subscriber,
    ?'notification' => ?Notification,
    ?'old_subscriber' => ?Subscriber,
  ) $s = shape()) {
    $this->account_id = $s['account_id'] ?? '';
    $this->budget_name = $s['budget_name'] ?? '';
    $this->new_subscriber = $s['new_subscriber'] ?? null;
    $this->notification = $s['notification'] ?? null;
    $this->old_subscriber = $s['old_subscriber'] ?? null;
  }
}

class UpdateSubscriberResponse {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type errorMessage = string;

