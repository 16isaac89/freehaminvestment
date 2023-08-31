<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'management_access',
            ],
            [
                'id'    => 20,
                'title' => 'member_create',
            ],
            [
                'id'    => 21,
                'title' => 'member_edit',
            ],
            [
                'id'    => 22,
                'title' => 'member_show',
            ],
            [
                'id'    => 23,
                'title' => 'member_delete',
            ],
            [
                'id'    => 24,
                'title' => 'member_access',
            ],
            [
                'id'    => 25,
                'title' => 'share_create',
            ],
            [
                'id'    => 26,
                'title' => 'share_edit',
            ],
            [
                'id'    => 27,
                'title' => 'share_show',
            ],
            [
                'id'    => 28,
                'title' => 'share_delete',
            ],
            [
                'id'    => 29,
                'title' => 'share_access',
            ],
            [
                'id'    => 30,
                'title' => 'saving_create',
            ],
            [
                'id'    => 31,
                'title' => 'saving_edit',
            ],
            [
                'id'    => 32,
                'title' => 'saving_show',
            ],
            [
                'id'    => 33,
                'title' => 'saving_delete',
            ],
            [
                'id'    => 34,
                'title' => 'saving_access',
            ],
            [
                'id'    => 35,
                'title' => 'setting_create',
            ],
            [
                'id'    => 36,
                'title' => 'setting_edit',
            ],
            [
                'id'    => 37,
                'title' => 'setting_show',
            ],
            [
                'id'    => 38,
                'title' => 'setting_delete',
            ],
            [
                'id'    => 39,
                'title' => 'setting_access',
            ],
            [
                'id'    => 40,
                'title' => 'faq_create',
            ],
            [
                'id'    => 41,
                'title' => 'faq_edit',
            ],
            [
                'id'    => 42,
                'title' => 'faq_show',
            ],
            [
                'id'    => 43,
                'title' => 'faq_delete',
            ],
            [
                'id'    => 44,
                'title' => 'faq_access',
            ],
            [
                'id'    => 45,
                'title' => 'page_access',
            ],
            [
                'id'    => 46,
                'title' => 'team_create',
            ],
            [
                'id'    => 47,
                'title' => 'team_edit',
            ],
            [
                'id'    => 48,
                'title' => 'team_show',
            ],
            [
                'id'    => 49,
                'title' => 'team_delete',
            ],
            [
                'id'    => 50,
                'title' => 'team_access',
            ],
            [
                'id'    => 51,
                'title' => 'about_us_create',
            ],
            [
                'id'    => 52,
                'title' => 'about_us_edit',
            ],
            [
                'id'    => 53,
                'title' => 'about_us_show',
            ],
            [
                'id'    => 54,
                'title' => 'about_us_delete',
            ],
            [
                'id'    => 55,
                'title' => 'about_us_access',
            ],
            [
                'id'    => 56,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
