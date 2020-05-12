<?hh // strict
namespace slack\aws\rds-data;

interface RDSData {
  public function BatchExecuteStatement(BatchExecuteStatementRequest $in): Awaitable<\Errors\Result<BatchExecuteStatementResponse>>;
  public function BeginTransaction(BeginTransactionRequest $in): Awaitable<\Errors\Result<BeginTransactionResponse>>;
  public function CommitTransaction(CommitTransactionRequest $in): Awaitable<\Errors\Result<CommitTransactionResponse>>;
  public function ExecuteSql(ExecuteSqlRequest $in): Awaitable<\Errors\Result<ExecuteSqlResponse>>;
  public function ExecuteStatement(ExecuteStatementRequest $in): Awaitable<\Errors\Result<ExecuteStatementResponse>>;
  public function RollbackTransaction(RollbackTransactionRequest $in): Awaitable<\Errors\Result<RollbackTransactionResponse>>;
}

type Arn = string;

type ArrayOfArray = vec<ArrayValue>;

class ArrayValue {
  public ?ArrayOfArray $array_values;
  public ?BooleanArray $boolean_values;
  public ?DoubleArray $double_values;
  public ?LongArray $long_values;
  public ?StringArray $string_values;

  public function __construct(shape(
    ?'array_values' => ?ArrayOfArray,
    ?'boolean_values' => ?BooleanArray,
    ?'double_values' => ?DoubleArray,
    ?'long_values' => ?LongArray,
    ?'string_values' => ?StringArray,
  ) $s = shape()) {
    $this->array_values = $s['array_values'] ?? vec[];
    $this->boolean_values = $s['boolean_values'] ?? vec[];
    $this->double_values = $s['double_values'] ?? vec[];
    $this->long_values = $s['long_values'] ?? vec[];
    $this->string_values = $s['string_values'] ?? vec[];
  }
}

type ArrayValueList = vec<Value>;

class BadRequestException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

class BatchExecuteStatementRequest {
  public ?DbName $database;
  public ?SqlParameterSets $parameter_sets;
  public ?Arn $resource_arn;
  public ?DbName $schema;
  public ?Arn $secret_arn;
  public ?SqlStatement $sql;
  public ?Id $transaction_id;

  public function __construct(shape(
    ?'database' => ?DbName,
    ?'parameter_sets' => ?SqlParameterSets,
    ?'resource_arn' => ?Arn,
    ?'schema' => ?DbName,
    ?'secret_arn' => ?Arn,
    ?'sql' => ?SqlStatement,
    ?'transaction_id' => ?Id,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->parameter_sets = $s['parameter_sets'] ?? vec[];
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->schema = $s['schema'] ?? '';
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->sql = $s['sql'] ?? '';
    $this->transaction_id = $s['transaction_id'] ?? '';
  }
}

class BatchExecuteStatementResponse {
  public ?UpdateResults $update_results;

  public function __construct(shape(
    ?'update_results' => ?UpdateResults,
  ) $s = shape()) {
    $this->update_results = $s['update_results'] ?? vec[];
  }
}

class BeginTransactionRequest {
  public ?DbName $database;
  public ?Arn $resource_arn;
  public ?DbName $schema;
  public ?Arn $secret_arn;

  public function __construct(shape(
    ?'database' => ?DbName,
    ?'resource_arn' => ?Arn,
    ?'schema' => ?DbName,
    ?'secret_arn' => ?Arn,
  ) $s = shape()) {
    $this->database = $s['database'] ?? '';
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->schema = $s['schema'] ?? '';
    $this->secret_arn = $s['secret_arn'] ?? '';
  }
}

class BeginTransactionResponse {
  public ?Id $transaction_id;

  public function __construct(shape(
    ?'transaction_id' => ?Id,
  ) $s = shape()) {
    $this->transaction_id = $s['transaction_id'] ?? '';
  }
}

type Blob = string;

type Boolean = bool;

type BooleanArray = vec<BoxedBoolean>;

type BoxedBoolean = bool;

type BoxedDouble = float;

type BoxedFloat = float;

type BoxedInteger = int;

type BoxedLong = int;

class ColumnMetadata {
  public int $array_base_column_type;
  public bool $is_auto_increment;
  public bool $is_case_sensitive;
  public bool $is_currency;
  public bool $is_signed;
  public string $label;
  public string $name;
  public int $nullable;
  public int $precision;
  public int $scale;
  public string $schema_name;
  public string $table_name;
  public int $type;
  public string $type_name;

  public function __construct(shape(
    ?'array_base_column_type' => int,
    ?'is_auto_increment' => bool,
    ?'is_case_sensitive' => bool,
    ?'is_currency' => bool,
    ?'is_signed' => bool,
    ?'label' => string,
    ?'name' => string,
    ?'nullable' => int,
    ?'precision' => int,
    ?'scale' => int,
    ?'schema_name' => string,
    ?'table_name' => string,
    ?'type' => int,
    ?'type_name' => string,
  ) $s = shape()) {
    $this->array_base_column_type = $s['array_base_column_type'] ?? 0;
    $this->is_auto_increment = $s['is_auto_increment'] ?? false;
    $this->is_case_sensitive = $s['is_case_sensitive'] ?? false;
    $this->is_currency = $s['is_currency'] ?? false;
    $this->is_signed = $s['is_signed'] ?? false;
    $this->label = $s['label'] ?? '';
    $this->name = $s['name'] ?? '';
    $this->nullable = $s['nullable'] ?? 0;
    $this->precision = $s['precision'] ?? 0;
    $this->scale = $s['scale'] ?? 0;
    $this->schema_name = $s['schema_name'] ?? '';
    $this->table_name = $s['table_name'] ?? '';
    $this->type = $s['type'] ?? 0;
    $this->type_name = $s['type_name'] ?? '';
  }
}

class CommitTransactionRequest {
  public ?Arn $resource_arn;
  public ?Arn $secret_arn;
  public ?Id $transaction_id;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'secret_arn' => ?Arn,
    ?'transaction_id' => ?Id,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->transaction_id = $s['transaction_id'] ?? '';
  }
}

class CommitTransactionResponse {
  public ?TransactionStatus $transaction_status;

  public function __construct(shape(
    ?'transaction_status' => ?TransactionStatus,
  ) $s = shape()) {
    $this->transaction_status = $s['transaction_status'] ?? '';
  }
}

type DbName = string;

type DecimalReturnType = string;

type DoubleArray = vec<BoxedDouble>;

type ErrorMessage = string;

class ExecuteSqlRequest {
  public ?Arn $aws_secret_store_arn;
  public ?DbName $database;
  public ?Arn $db_cluster_or_instance_arn;
  public ?DbName $schema;
  public ?SqlStatement $sql_statements;

  public function __construct(shape(
    ?'aws_secret_store_arn' => ?Arn,
    ?'database' => ?DbName,
    ?'db_cluster_or_instance_arn' => ?Arn,
    ?'schema' => ?DbName,
    ?'sql_statements' => ?SqlStatement,
  ) $s = shape()) {
    $this->aws_secret_store_arn = $s['aws_secret_store_arn'] ?? '';
    $this->database = $s['database'] ?? '';
    $this->db_cluster_or_instance_arn = $s['db_cluster_or_instance_arn'] ?? '';
    $this->schema = $s['schema'] ?? '';
    $this->sql_statements = $s['sql_statements'] ?? '';
  }
}

class ExecuteSqlResponse {
  public ?SqlStatementResults $sql_statement_results;

  public function __construct(shape(
    ?'sql_statement_results' => ?SqlStatementResults,
  ) $s = shape()) {
    $this->sql_statement_results = $s['sql_statement_results'] ?? vec[];
  }
}

class ExecuteStatementRequest {
  public bool $continue_after_timeout;
  public ?DbName $database;
  public bool $include_result_metadata;
  public ?SqlParametersList $parameters;
  public ?Arn $resource_arn;
  public ?ResultSetOptions $result_set_options;
  public ?DbName $schema;
  public ?Arn $secret_arn;
  public ?SqlStatement $sql;
  public ?Id $transaction_id;

  public function __construct(shape(
    ?'continue_after_timeout' => bool,
    ?'database' => ?DbName,
    ?'include_result_metadata' => bool,
    ?'parameters' => ?SqlParametersList,
    ?'resource_arn' => ?Arn,
    ?'result_set_options' => ?ResultSetOptions,
    ?'schema' => ?DbName,
    ?'secret_arn' => ?Arn,
    ?'sql' => ?SqlStatement,
    ?'transaction_id' => ?Id,
  ) $s = shape()) {
    $this->continue_after_timeout = $s['continue_after_timeout'] ?? false;
    $this->database = $s['database'] ?? '';
    $this->include_result_metadata = $s['include_result_metadata'] ?? false;
    $this->parameters = $s['parameters'] ?? vec[];
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->result_set_options = $s['result_set_options'] ?? null;
    $this->schema = $s['schema'] ?? '';
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->sql = $s['sql'] ?? '';
    $this->transaction_id = $s['transaction_id'] ?? '';
  }
}

class ExecuteStatementResponse {
  public ?Metadata $column_metadata;
  public ?FieldList $generated_fields;
  public ?RecordsUpdated $number_of_records_updated;
  public ?SqlRecords $records;

  public function __construct(shape(
    ?'column_metadata' => ?Metadata,
    ?'generated_fields' => ?FieldList,
    ?'number_of_records_updated' => ?RecordsUpdated,
    ?'records' => ?SqlRecords,
  ) $s = shape()) {
    $this->column_metadata = $s['column_metadata'] ?? vec[];
    $this->generated_fields = $s['generated_fields'] ?? vec[];
    $this->number_of_records_updated = $s['number_of_records_updated'] ?? 0;
    $this->records = $s['records'] ?? vec[];
  }
}

class Field {
  public ?ArrayValue $array_value;
  public ?Blob $blob_value;
  public ?BoxedBoolean $boolean_value;
  public ?BoxedDouble $double_value;
  public ?BoxedBoolean $is_null;
  public ?BoxedLong $long_value;
  public string $string_value;

  public function __construct(shape(
    ?'array_value' => ?ArrayValue,
    ?'blob_value' => ?Blob,
    ?'boolean_value' => ?BoxedBoolean,
    ?'double_value' => ?BoxedDouble,
    ?'is_null' => ?BoxedBoolean,
    ?'long_value' => ?BoxedLong,
    ?'string_value' => string,
  ) $s = shape()) {
    $this->array_value = $s['array_value'] ?? null;
    $this->blob_value = $s['blob_value'] ?? '';
    $this->boolean_value = $s['boolean_value'] ?? false;
    $this->double_value = $s['double_value'] ?? 0.0;
    $this->is_null = $s['is_null'] ?? false;
    $this->long_value = $s['long_value'] ?? 0;
    $this->string_value = $s['string_value'] ?? '';
  }
}

type FieldList = vec<Field>;

class ForbiddenException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type Id = string;

type Integer = int;

class InternalServerErrorException {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

type Long = int;

type LongArray = vec<BoxedLong>;

type Metadata = vec<ColumnMetadata>;

class NotFoundException {
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->message = $s['message'] ?? '';
  }
}

type ParameterName = string;

class Record {
  public ?Row $values;

  public function __construct(shape(
    ?'values' => ?Row,
  ) $s = shape()) {
    $this->values = $s['values'] ?? vec[];
  }
}

type Records = vec<Record>;

type RecordsUpdated = int;

class ResultFrame {
  public ?Records $records;
  public ?ResultSetMetadata $result_set_metadata;

  public function __construct(shape(
    ?'records' => ?Records,
    ?'result_set_metadata' => ?ResultSetMetadata,
  ) $s = shape()) {
    $this->records = $s['records'] ?? vec[];
    $this->result_set_metadata = $s['result_set_metadata'] ?? null;
  }
}

class ResultSetMetadata {
  public ?Long $column_count;
  public ?Metadata $column_metadata;

  public function __construct(shape(
    ?'column_count' => ?Long,
    ?'column_metadata' => ?Metadata,
  ) $s = shape()) {
    $this->column_count = $s['column_count'] ?? 0;
    $this->column_metadata = $s['column_metadata'] ?? vec[];
  }
}

class ResultSetOptions {
  public ?DecimalReturnType $decimal_return_type;

  public function __construct(shape(
    ?'decimal_return_type' => ?DecimalReturnType,
  ) $s = shape()) {
    $this->decimal_return_type = $s['decimal_return_type'] ?? '';
  }
}

class RollbackTransactionRequest {
  public ?Arn $resource_arn;
  public ?Arn $secret_arn;
  public ?Id $transaction_id;

  public function __construct(shape(
    ?'resource_arn' => ?Arn,
    ?'secret_arn' => ?Arn,
    ?'transaction_id' => ?Id,
  ) $s = shape()) {
    $this->resource_arn = $s['resource_arn'] ?? '';
    $this->secret_arn = $s['secret_arn'] ?? '';
    $this->transaction_id = $s['transaction_id'] ?? '';
  }
}

class RollbackTransactionResponse {
  public ?TransactionStatus $transaction_status;

  public function __construct(shape(
    ?'transaction_status' => ?TransactionStatus,
  ) $s = shape()) {
    $this->transaction_status = $s['transaction_status'] ?? '';
  }
}

type Row = vec<Value>;

class ServiceUnavailableError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SqlParameter {
  public ?ParameterName $name;
  public ?TypeHint $type_hint;
  public ?Field $value;

  public function __construct(shape(
    ?'name' => ?ParameterName,
    ?'type_hint' => ?TypeHint,
    ?'value' => ?Field,
  ) $s = shape()) {
    $this->name = $s['name'] ?? '';
    $this->type_hint = $s['type_hint'] ?? '';
    $this->value = $s['value'] ?? null;
  }
}

type SqlParameterSets = vec<SqlParametersList>;

type SqlParametersList = vec<SqlParameter>;

type SqlRecords = vec<FieldList>;

type SqlStatement = string;

class SqlStatementResult {
  public ?RecordsUpdated $number_of_records_updated;
  public ?ResultFrame $result_frame;

  public function __construct(shape(
    ?'number_of_records_updated' => ?RecordsUpdated,
    ?'result_frame' => ?ResultFrame,
  ) $s = shape()) {
    $this->number_of_records_updated = $s['number_of_records_updated'] ?? 0;
    $this->result_frame = $s['result_frame'] ?? null;
  }
}

type SqlStatementResults = vec<SqlStatementResult>;

class StatementTimeoutException {
  public ?Long $db_connection_id;
  public ?ErrorMessage $message;

  public function __construct(shape(
    ?'db_connection_id' => ?Long,
    ?'message' => ?ErrorMessage,
  ) $s = shape()) {
    $this->db_connection_id = $s['db_connection_id'] ?? 0;
    $this->message = $s['message'] ?? '';
  }
}

type String = string;

type StringArray = vec<String>;

class StructValue {
  public ?ArrayValueList $attributes;

  public function __construct(shape(
    ?'attributes' => ?ArrayValueList,
  ) $s = shape()) {
    $this->attributes = $s['attributes'] ?? vec[];
  }
}

type TransactionStatus = string;

type TypeHint = string;

class UpdateResult {
  public ?FieldList $generated_fields;

  public function __construct(shape(
    ?'generated_fields' => ?FieldList,
  ) $s = shape()) {
    $this->generated_fields = $s['generated_fields'] ?? vec[];
  }
}

type UpdateResults = vec<UpdateResult>;

class Value {
  public ?ArrayValueList $array_values;
  public ?BoxedLong $big_int_value;
  public ?BoxedBoolean $bit_value;
  public ?Blob $blob_value;
  public ?BoxedDouble $double_value;
  public ?BoxedInteger $int_value;
  public ?BoxedBoolean $is_null;
  public ?BoxedFloat $real_value;
  public string $string_value;
  public ?StructValue $struct_value;

  public function __construct(shape(
    ?'array_values' => ?ArrayValueList,
    ?'big_int_value' => ?BoxedLong,
    ?'bit_value' => ?BoxedBoolean,
    ?'blob_value' => ?Blob,
    ?'double_value' => ?BoxedDouble,
    ?'int_value' => ?BoxedInteger,
    ?'is_null' => ?BoxedBoolean,
    ?'real_value' => ?BoxedFloat,
    ?'string_value' => string,
    ?'struct_value' => ?StructValue,
  ) $s = shape()) {
    $this->array_values = $s['array_values'] ?? vec[];
    $this->big_int_value = $s['big_int_value'] ?? 0;
    $this->bit_value = $s['bit_value'] ?? false;
    $this->blob_value = $s['blob_value'] ?? '';
    $this->double_value = $s['double_value'] ?? 0.0;
    $this->int_value = $s['int_value'] ?? 0;
    $this->is_null = $s['is_null'] ?? false;
    $this->real_value = $s['real_value'] ?? 0.0;
    $this->string_value = $s['string_value'] ?? '';
    $this->struct_value = $s['struct_value'] ?? null;
  }
}

