<?php

declare(strict_types=1);

namespace FlixTech\AvroSerializer\Objects\Schema;

class TypeName
{
    const RECORD = 'record';
    const NULL = 'null';
    const BOOLEAN = 'boolean';
    const INT = 'int';
    const LONG = 'long';
    const FLOAT = 'float';
    const DOUBLE = 'double';
    const BYTES = 'bytes';
    const STRING = 'string';
    const ARRAY = 'array';
    const MAP = 'map';
    const ENUM = 'enum';
    const FIXED = 'fixed';
    const DATE = 'date';
    const DURATION = 'duration';
    const LOCAL_TIMESTAMP_MICROS = 'local-timestamp-micros';
    const LOCAL_TIMESTAMP_MILLIS = 'local-timestamp-millis';
    const TIME_MICROS = 'time-micros';
    const TIME_MILLIS = 'time-millis';
    const TIMESTAMP_MICROS = 'timestamp-micros';
    const TIMESTAMP_MILLIS = 'timestamp-millis';
    const UUID = 'uuid';
}
