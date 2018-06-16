<?php

/**
 * @file
 * API documentation and examples for the Search and Replace Scanner module.
 */

/**
 * Allow additional arguments to be added to the 'or' query.
 *
 * @param db_or $or
 *   The 'or' argument for the main query.
 * @param string $table
 *   The table being queried.
 * @param string $field
 *   The field being queried.
 * @param string $where
 *   Something
 * @param bool $binary
 *   If this is querying a binary field, will contain the string ' BINARY'.
 */
function hook_scanner_query_where(&$or, $table, $field, $where, $binary) {
}

/**
 * Allow the full query to be adjusted.
 *
 * @param SelectQuery $query
 *   The query being executed.
 * @param array $map
 *   The map of fields.
 * @param string $table
 *   The table being queried.
 * @param string $field
 *   The field being queried.
 */
function hook_scanner_query_alter(&$query, $map, $table, $field) {
}

/**
 * Wrapper for preg_match_all() to allow customizations at the field level.
 *
 * @param array $matches
 *   Expected to be passed to preg_match_all() as the third argument.
 * @param string $regextr
 *   The regular expression being used for the query.
 * @param object $row
 *   The results row from the search process.
 *
 * @return int
 *   The number of matches found in this check.
 */
function hook_scanner_preg_match_all(&$matches, $regexstr, $row) {
}

/**
 * Wrapper for preg_replace() to allow customizations at the field level.
 *
 * @param object $node
 *   The full node object being modified. Changes are expected to be made
 *   directly to the node.
 * @param string $field
 *   The field being modified.
 * @param array $matches
 *   Expected to be passed to preg_replace() as the third argument.
 * @param string $regextr
 *   The regular expression being used for the query.
 * @param object $row
 *   The results row from the search process.
 * @param string $replace
 *   The new string being replaced into the $node based upon what is identified
 *   in $matches.
 *
 * @return int
 *   The number of items replaced.
 */
function hook_scanner_preg_replace(&$node, $field, $matches, $row, $regexstr, $replace) {
}
