<?php
// userstatus
// 1. active
// 2. inactive
// 3. sleep
if (!function_exists('UserStatus')) {
    function UserStatus($value)
    {
        if ($value === 1 || $value === '1') {
            return '<span class="badge bg-success">Active</span>';
        } elseif ($value === 2 || $value === '2') {
            return '<span class="badge bg-danger">Inactive</span>';;
        } else {
            return 'unknown';
        }
    }
}