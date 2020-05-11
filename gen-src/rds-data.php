<?hh // strict
namespace slack\aws\rds-data;

interface RDS Data {
  public function BatchExecuteStatement(BatchExecuteStatementRequest): Awaitable<Errors\Result<BatchExecuteStatementResponse>>;
  public function BeginTransaction(BeginTransactionRequest): Awaitable<Errors\Result<BeginTransactionResponse>>;
  public function CommitTransaction(CommitTransactionRequest): Awaitable<Errors\Result<CommitTransactionResponse>>;
  public function ExecuteSql(ExecuteSqlRequest): Awaitable<Errors\Result<ExecuteSqlResponse>>;
  public function ExecuteStatement(ExecuteStatementRequest): Awaitable<Errors\Result<ExecuteStatementResponse>>;
  public function RollbackTransaction(RollbackTransactionRequest): Awaitable<Errors\Result<RollbackTransactionResponse>>;
}

type Arn = string;

type ArrayOfArray = vec<ArrayValue>;

class ArrayValue {
  public ArrayOfArray $array_values;
  public BooleanArray $boolean_values;
  public DoubleArray $double_values;
  public LongArray $long_values;
  public StringArray $string_values;

  public function __construct(shape(
  ?'array_values' => ArrayOfArray,
  ?'boolean_values' => BooleanArray,
  ?'double_values' => DoubleArray,
  ?'long_values' => LongArray,
  ?'string_values' => StringArray,
  ) $s = shape()) {
    $this->array_values = $array_values ?? [];
    $this->boolean_values = $boolean_values ?? [];
    $this->double_values = $double_values ?? [];
    $this->long_values = $long_values ?? [];
    $this->string_values = $string_values ?? [];
  }
}

type ArrayValueList = vec<Value>;

class BadRequestException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

class BatchExecuteStatementRequest {
  public DbName $database;
  public SqlParameterSets $parameter_sets;
  public Arn $resource_arn;
  public DbName $schema;
  public Arn $secret_arn;
  public SqlStatement $sql;
  public Id $transaction_id;

  public function __construct(shape(
  ?'database' => DbName,
  ?'parameter_sets' => SqlParameterSets,
  ?'resource_arn' => Arn,
  ?'schema' => DbName,
  ?'secret_arn' => Arn,
  ?'sql' => SqlStatement,
  ?'transaction_id' => Id,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->parameter_sets = $parameter_sets ?? [];
    $this->resource_arn = $resource_arn ?? "";
    $this->schema = $schema ?? "";
    $this->secret_arn = $secret_arn ?? "";
    $this->sql = $sql ?? "";
    $this->transaction_id = $transaction_id ?? "";
  }
}

class BatchExecuteStatementResponse {
  public UpdateResults $update_results;

  public function __construct(shape(
  ?'update_results' => UpdateResults,
  ) $s = shape()) {
    $this->update_results = $update_results ?? [];
  }
}

class BeginTransactionRequest {
  public DbName $database;
  public Arn $resource_arn;
  public DbName $schema;
  public Arn $secret_arn;

  public function __construct(shape(
  ?'database' => DbName,
  ?'resource_arn' => Arn,
  ?'schema' => DbName,
  ?'secret_arn' => Arn,
  ) $s = shape()) {
    $this->database = $database ?? "";
    $this->resource_arn = $resource_arn ?? "";
    $this->schema = $schema ?? "";
    $this->secret_arn = $secret_arn ?? "";
  }
}

class BeginTransactionResponse {
  public Id $transaction_id;

  public function __construct(shape(
  ?'transaction_id' => Id,
  ) $s = shape()) {
    $this->transaction_id = $transaction_id ?? "";
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
  public boolean $is_auto_increment;
  public boolean $is_case_sensitive;
  public boolean $is_currency;
  public boolean $is_signed;
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
  ?'is_auto_increment' => boolean,
  ?'is_case_sensitive' => boolean,
  ?'is_currency' => boolean,
  ?'is_signed' => boolean,
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
    $this->array_base_column_type = $array_base_column_type ?? 0;
    $this->is_auto_increment = $is_auto_increment ?? false;
    $this->is_case_sensitive = $is_case_sensitive ?? false;
    $this->is_currency = $is_currency ?? false;
    $this->is_signed = $is_signed ?? false;
    $this->label = $label ?? "";
    $this->name = $name ?? "";
    $this->nullable = $nullable ?? 0;
    $this->precision = $precision ?? 0;
    $this->scale = $scale ?? 0;
    $this->schema_name = $schema_name ?? "";
    $this->table_name = $table_name ?? "";
    $this->type = $type ?? 0;
    $this->type_name = $type_name ?? "";
  }
}

class CommitTransactionRequest {
  public Arn $resource_arn;
  public Arn $secret_arn;
  public Id $transaction_id;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'secret_arn' => Arn,
  ?'transaction_id' => Id,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->secret_arn = $secret_arn ?? "";
    $this->transaction_id = $transaction_id ?? "";
  }
}

class CommitTransactionResponse {
  public TransactionStatus $transaction_status;

  public function __construct(shape(
  ?'transaction_status' => TransactionStatus,
  ) $s = shape()) {
    $this->transaction_status = $transaction_status ?? "";
  }
}

type DbName = string;

type DecimalReturnType = string;

type DoubleArray = vec<BoxedDouble>;

type ErrorMessage = string;

class ExecuteSqlRequest {
  public Arn $aws_secret_store_arn;
  public DbName $database;
  public Arn $db_cluster_or_instance_arn;
  public DbName $schema;
  public SqlStatement $sql_statements;

  public function __construct(shape(
  ?'aws_secret_store_arn' => Arn,
  ?'database' => DbName,
  ?'db_cluster_or_instance_arn' => Arn,
  ?'schema' => DbName,
  ?'sql_statements' => SqlStatement,
  ) $s = shape()) {
    $this->aws_secret_store_arn = $aws_secret_store_arn ?? "";
    $this->database = $database ?? "";
    $this->db_cluster_or_instance_arn = $db_cluster_or_instance_arn ?? "";
    $this->schema = $schema ?? "";
    $this->sql_statements = $sql_statements ?? "";
  }
}

class ExecuteSqlResponse {
  public SqlStatementResults $sql_statement_results;

  public function __construct(shape(
  ?'sql_statement_results' => SqlStatementResults,
  ) $s = shape()) {
    $this->sql_statement_results = $sql_statement_results ?? [];
  }
}

class ExecuteStatementRequest {
  public boolean $continue_after_timeout;
  public DbName $database;
  public boolean $include_result_metadata;
  public SqlParametersList $parameters;
  public Arn $resource_arn;
  public ResultSetOptions $result_set_options;
  public DbName $schema;
  public Arn $secret_arn;
  public SqlStatement $sql;
  public Id $transaction_id;

  public function __construct(shape(
  ?'continue_after_timeout' => boolean,
  ?'database' => DbName,
  ?'include_result_metadata' => boolean,
  ?'parameters' => SqlParametersList,
  ?'resource_arn' => Arn,
  ?'result_set_options' => ResultSetOptions,
  ?'schema' => DbName,
  ?'secret_arn' => Arn,
  ?'sql' => SqlStatement,
  ?'transaction_id' => Id,
  ) $s = shape()) {
    $this->continue_after_timeout = $continue_after_timeout ?? false;
    $this->database = $database ?? "";
    $this->include_result_metadata = $include_result_metadata ?? false;
    $this->parameters = $parameters ?? [];
    $this->resource_arn = $resource_arn ?? "";
    $this->result_set_options = $result_set_options ?? null;
    $this->schema = $schema ?? "";
    $this->secret_arn = $secret_arn ?? "";
    $this->sql = $sql ?? "";
    $this->transaction_id = $transaction_id ?? "";
  }
}

class ExecuteStatementResponse {
  public Metadata $column_metadata;
  public FieldList $generated_fields;
  public RecordsUpdated $number_of_records_updated;
  public SqlRecords $records;

  public function __construct(shape(
  ?'column_metadata' => Metadata,
  ?'generated_fields' => FieldList,
  ?'number_of_records_updated' => RecordsUpdated,
  ?'records' => SqlRecords,
  ) $s = shape()) {
    $this->column_metadata = $column_metadata ?? [];
    $this->generated_fields = $generated_fields ?? [];
    $this->number_of_records_updated = $number_of_records_updated ?? 0;
    $this->records = $records ?? [];
  }
}

class Field {
  public ArrayValue $array_value;
  public Blob $blob_value;
  public BoxedBoolean $boolean_value;
  public BoxedDouble $double_value;
  public BoxedBoolean $is_null;
  public BoxedLong $long_value;
  public string $string_value;

  public function __construct(shape(
  ?'array_value' => ArrayValue,
  ?'blob_value' => Blob,
  ?'boolean_value' => BoxedBoolean,
  ?'double_value' => BoxedDouble,
  ?'is_null' => BoxedBoolean,
  ?'long_value' => BoxedLong,
  ?'string_value' => string,
  ) $s = shape()) {
    $this->array_value = $array_value ?? null;
    $this->blob_value = $blob_value ?? "";
    $this->boolean_value = $boolean_value ?? false;
    $this->double_value = $double_value ?? 0.0;
    $this->is_null = $is_null ?? false;
    $this->long_value = $long_value ?? 0;
    $this->string_value = $string_value ?? "";
  }
}

type FieldList = vec<Field>;

class ForbiddenException {
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
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
  public ErrorMessage $message;

  public function __construct(shape(
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->message = $message ?? "";
  }
}

type ParameterName = string;

class Record {
  public Row $values;

  public function __construct(shape(
  ?'values' => Row,
  ) $s = shape()) {
    $this->values = $values ?? [];
  }
}

type Records = vec<Record>;

type RecordsUpdated = int;

class ResultFrame {
  public Records $records;
  public ResultSetMetadata $result_set_metadata;

  public function __construct(shape(
  ?'records' => Records,
  ?'result_set_metadata' => ResultSetMetadata,
  ) $s = shape()) {
    $this->records = $records ?? [];
    $this->result_set_metadata = $result_set_metadata ?? null;
  }
}

class ResultSetMetadata {
  public Long $column_count;
  public Metadata $column_metadata;

  public function __construct(shape(
  ?'column_count' => Long,
  ?'column_metadata' => Metadata,
  ) $s = shape()) {
    $this->column_count = $column_count ?? 0;
    $this->column_metadata = $column_metadata ?? [];
  }
}

class ResultSetOptions {
  public DecimalReturnType $decimal_return_type;

  public function __construct(shape(
  ?'decimal_return_type' => DecimalReturnType,
  ) $s = shape()) {
    $this->decimal_return_type = $decimal_return_type ?? "";
  }
}

class RollbackTransactionRequest {
  public Arn $resource_arn;
  public Arn $secret_arn;
  public Id $transaction_id;

  public function __construct(shape(
  ?'resource_arn' => Arn,
  ?'secret_arn' => Arn,
  ?'transaction_id' => Id,
  ) $s = shape()) {
    $this->resource_arn = $resource_arn ?? "";
    $this->secret_arn = $secret_arn ?? "";
    $this->transaction_id = $transaction_id ?? "";
  }
}

class RollbackTransactionResponse {
  public TransactionStatus $transaction_status;

  public function __construct(shape(
  ?'transaction_status' => TransactionStatus,
  ) $s = shape()) {
    $this->transaction_status = $transaction_status ?? "";
  }
}

type Row = vec<Value>;

class ServiceUnavailableError {

  public function __construct(shape(
  ) $s = shape()) {
  }
}

class SqlParameter {
  public ParameterName $name;
  public TypeHint $type_hint;
  public Field $value;

  public function __construct(shape(
  ?'name' => ParameterName,
  ?'type_hint' => TypeHint,
  ?'value' => Field,
  ) $s = shape()) {
    $this->name = $name ?? "";
    $this->type_hint = $type_hint ?? "";
    $this->value = $value ?? null;
  }
}

type SqlParameterSets = vec<SqlParametersList>;

type SqlParametersList = vec<SqlParameter>;

type SqlRecords = vec<FieldList>;

type SqlStatement = string;

class SqlStatementResult {
  public RecordsUpdated $number_of_records_updated;
  public ResultFrame $result_frame;

  public function __construct(shape(
  ?'number_of_records_updated' => RecordsUpdated,
  ?'result_frame' => ResultFrame,
  ) $s = shape()) {
    $this->number_of_records_updated = $number_of_records_updated ?? 0;
    $this->result_frame = $result_frame ?? null;
  }
}

type SqlStatementResults = vec<SqlStatementResult>;

class StatementTimeoutException {
  public Long $db_connection_id;
  public ErrorMessage $message;

  public function __construct(shape(
  ?'db_connection_id' => Long,
  ?'message' => ErrorMessage,
  ) $s = shape()) {
    $this->db_connection_id = $db_connection_id ?? 0;
    $this->message = $message ?? "";
  }
}

type String = string;

type StringArray = vec<String>;

class StructValue {
  public ArrayValueList $attributes;

  public function __construct(shape(
  ?'attributes' => ArrayValueList,
  ) $s = shape()) {
    $this->attributes = $attributes ?? [];
  }
}

type TransactionStatus = string;

type TypeHint = string;

class UpdateResult {
  public FieldList $generated_fields;

  public function __construct(shape(
  ?'generated_fields' => FieldList,
  ) $s = shape()) {
    $this->generated_fields = $generated_fields ?? [];
  }
}

type UpdateResults = vec<UpdateResult>;

class Value {
  public ArrayValueList $array_values;
  public BoxedLong $big_int_value;
  public BoxedBoolean $bit_value;
  public Blob $blob_value;
  public BoxedDouble $double_value;
  public BoxedInteger $int_value;
  public BoxedBoolean $is_null;
  public BoxedFloat $real_value;
  public string $string_value;
  public StructValue $struct_value;

  public function __construct(shape(
  ?'array_values' => ArrayValueList,
  ?'big_int_value' => BoxedLong,
  ?'bit_value' => BoxedBoolean,
  ?'blob_value' => Blob,
  ?'double_value' => BoxedDouble,
  ?'int_value' => BoxedInteger,
  ?'is_null' => BoxedBoolean,
  ?'real_value' => BoxedFloat,
  ?'string_value' => string,
  ?'struct_value' => StructValue,
  ) $s = shape()) {
    $this->array_values = $array_values ?? [];
    $this->big_int_value = $big_int_value ?? 0;
    $this->bit_value = $bit_value ?? false;
    $this->blob_value = $blob_value ?? "";
    $this->double_value = $double_value ?? 0.0;
    $this->int_value = $int_value ?? 0;
    $this->is_null = $is_null ?? false;
    $this->real_value = $real_value ?? 0.0;
    $this->string_value = $string_value ?? "";
    $this->struct_value = $struct_value ?? null;
  }
}

