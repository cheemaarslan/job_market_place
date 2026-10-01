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
                'title' => 'basic_c_r_m_access',
            ],
            [
                'id'    => 18,
                'title' => 'crm_status_create',
            ],
            [
                'id'    => 19,
                'title' => 'crm_status_edit',
            ],
            [
                'id'    => 20,
                'title' => 'crm_status_show',
            ],
            [
                'id'    => 21,
                'title' => 'crm_status_delete',
            ],
            [
                'id'    => 22,
                'title' => 'crm_status_access',
            ],
            [
                'id'    => 23,
                'title' => 'crm_customer_create',
            ],
            [
                'id'    => 24,
                'title' => 'crm_customer_edit',
            ],
            [
                'id'    => 25,
                'title' => 'crm_customer_show',
            ],
            [
                'id'    => 26,
                'title' => 'crm_customer_delete',
            ],
            [
                'id'    => 27,
                'title' => 'crm_customer_access',
            ],
            [
                'id'    => 28,
                'title' => 'crm_note_create',
            ],
            [
                'id'    => 29,
                'title' => 'crm_note_edit',
            ],
            [
                'id'    => 30,
                'title' => 'crm_note_show',
            ],
            [
                'id'    => 31,
                'title' => 'crm_note_delete',
            ],
            [
                'id'    => 32,
                'title' => 'crm_note_access',
            ],
            [
                'id'    => 33,
                'title' => 'crm_document_create',
            ],
            [
                'id'    => 34,
                'title' => 'crm_document_edit',
            ],
            [
                'id'    => 35,
                'title' => 'crm_document_show',
            ],
            [
                'id'    => 36,
                'title' => 'crm_document_delete',
            ],
            [
                'id'    => 37,
                'title' => 'crm_document_access',
            ],
            [
                'id'    => 38,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 39,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 40,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 41,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 42,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 43,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 44,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 45,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 46,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 47,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 48,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 49,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 50,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 51,
                'title' => 'task_create',
            ],
            [
                'id'    => 52,
                'title' => 'task_edit',
            ],
            [
                'id'    => 53,
                'title' => 'task_show',
            ],
            [
                'id'    => 54,
                'title' => 'task_delete',
            ],
            [
                'id'    => 55,
                'title' => 'task_access',
            ],
            [
                'id'    => 56,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 57,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 58,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 59,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 60,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 61,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 62,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 63,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 64,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 65,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 66,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 67,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 68,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 69,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 70,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 71,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 72,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 73,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 74,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 75,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 76,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 77,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 78,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 79,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 80,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 81,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 82,
                'title' => 'faq_management_access',
            ],
            [
                'id'    => 83,
                'title' => 'faq_category_create',
            ],
            [
                'id'    => 84,
                'title' => 'faq_category_edit',
            ],
            [
                'id'    => 85,
                'title' => 'faq_category_show',
            ],
            [
                'id'    => 86,
                'title' => 'faq_category_delete',
            ],
            [
                'id'    => 87,
                'title' => 'faq_category_access',
            ],
            [
                'id'    => 88,
                'title' => 'faq_question_create',
            ],
            [
                'id'    => 89,
                'title' => 'faq_question_edit',
            ],
            [
                'id'    => 90,
                'title' => 'faq_question_show',
            ],
            [
                'id'    => 91,
                'title' => 'faq_question_delete',
            ],
            [
                'id'    => 92,
                'title' => 'faq_question_access',
            ],
            [
                'id'    => 93,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
