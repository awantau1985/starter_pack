<?php
// userstatus
// 1. active
// 2. inactive
// 3. sleep
if (!function_exists('UserStatus')) {
    function UserStatus($status)
    {
        if ($status == 1 || $status == '1') {
            return '<label class="badge badge-success" style="margin-right:3px;">Active</label>';
        } elseif ($status == 2 || $status == '2') {
            return '<label class="badge badge-danger" style="margin-right:3px;">Inactive</label>';
        } elseif ($status == 3 || $status == '3') {
            return '<label class="badge badge-info" style="margin-right:3px;">Sleep</label>';
        } else {
            return '<label class="badge badge-warning" style="margin-right:3px;">Unknow</label>';
        }
    }
}