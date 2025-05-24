<?php
require_once __DIR__ . '/helper_funcs.php';
function prepare_insert_query($connection, $table_name, $datas, $types = "sss"): mysqli_stmt
{
    $columns = implode(", ", array_keys($datas));
    $placeholders = implode(", ", array_fill(0, count($datas), '?'));
    $query_str = "INSERT INTO $table_name($columns) VALUES($placeholders)";
    $query = $connection->prepare($query_str);
    $query->bind_param($types, ...array_values($datas));
    return $query;
}

function prepare_update_query($connection, $table_name, $datas, $types = "sssi"): mysqli_stmt
{
    $set_parts = [];

    foreach ($datas as $key => $value) {
        if ($key == "id") {
            continue; // skip id
        }
        $set_parts[] = "$key = ?";
    }

    $update_data_str = implode(", ", $set_parts);

    $query_str = "UPDATE $table_name SET $update_data_str WHERE id = ? ";
    $query = $connection->prepare($query_str);
    $query->bind_param(get_types(array_values($datas)), ...array_values($datas));

    return $query;
}

function prepare_delete_query($connection, $table_name, $id): mysqli_stmt
{
    $query_str = "DELETE FROM $table_name WHERE id = ?";
    $query = $connection->prepare($query_str);
    $query->bind_param("i", $id);

    return $query;
}

function prepare_select($connection, $table_name, $id): mysqli_stmt
{
    $query_str = "SELECT * FROM $table_name WHERE id = ?";
    $query = $connection->prepare($query_str);
    $query->bind_param("i", $id);

    return $query;
}

function prepare_select_all($connection, $table_name): mysqli_result
{
    $query_str = "SELECT * FROM $table_name ORDER BY id DESC";
    $query = $connection->query($query_str);
    return $query;
}