<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <li>
                <a href="{{ route("admin.home") }}">
                    <i class="fas fa-fw fa-tachometer-alt">

                    </i>
                    {{ trans('global.dashboard') }}
                </a>
            </li>
            @can('user_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-users">

                        </i>
                        <span>{{ trans('cruds.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fa-fw fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('cruds.permission.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.role.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fa-fw fas fa-user">

                                    </i>
                                    <span>{{ trans('cruds.user.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('audit_log_access')
                            <li class="{{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                <a href="{{ route("admin.audit-logs.index") }}">
                                    <i class="fa-fw fas fa-file-alt">

                                    </i>
                                    <span>{{ trans('cruds.auditLog.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('basic_c_r_m_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-briefcase">

                        </i>
                        <span>{{ trans('cruds.basicCRM.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('crm_status_access')
                            <li class="{{ request()->is("admin/crm-statuses") || request()->is("admin/crm-statuses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-statuses.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmStatus.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_customer_access')
                            <li class="{{ request()->is("admin/crm-customers") || request()->is("admin/crm-customers/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-customers.index") }}">
                                    <i class="fa-fw fas fa-user-plus">

                                    </i>
                                    <span>{{ trans('cruds.crmCustomer.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_note_access')
                            <li class="{{ request()->is("admin/crm-notes") || request()->is("admin/crm-notes/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-notes.index") }}">
                                    <i class="fa-fw fas fa-sticky-note">

                                    </i>
                                    <span>{{ trans('cruds.crmNote.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('crm_document_access')
                            <li class="{{ request()->is("admin/crm-documents") || request()->is("admin/crm-documents/*") ? "active" : "" }}">
                                <a href="{{ route("admin.crm-documents.index") }}">
                                    <i class="fa-fw fas fa-folder">

                                    </i>
                                    <span>{{ trans('cruds.crmDocument.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('task_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-list">

                        </i>
                        <span>{{ trans('cruds.taskManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('task_status_access')
                            <li class="{{ request()->is("admin/task-statuses") || request()->is("admin/task-statuses/*") ? "active" : "" }}">
                                <a href="{{ route("admin.task-statuses.index") }}">
                                    <i class="fa-fw fas fa-server">

                                    </i>
                                    <span>{{ trans('cruds.taskStatus.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('task_tag_access')
                            <li class="{{ request()->is("admin/task-tags") || request()->is("admin/task-tags/*") ? "active" : "" }}">
                                <a href="{{ route("admin.task-tags.index") }}">
                                    <i class="fa-fw fas fa-server">

                                    </i>
                                    <span>{{ trans('cruds.taskTag.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('task_access')
                            <li class="{{ request()->is("admin/tasks") || request()->is("admin/tasks/*") ? "active" : "" }}">
                                <a href="{{ route("admin.tasks.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.task.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('tasks_calendar_access')
                            <li class="{{ request()->is("admin/tasks-calendars") || request()->is("admin/tasks-calendars/*") ? "active" : "" }}">
                                <a href="{{ route("admin.tasks-calendars.index") }}">
                                    <i class="fa-fw fas fa-calendar">

                                    </i>
                                    <span>{{ trans('cruds.tasksCalendar.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('user_alert_access')
                <li class="{{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "active" : "" }}">
                    <a href="{{ route("admin.user-alerts.index") }}">
                        <i class="fa-fw fas fa-bell">

                        </i>
                        <span>{{ trans('cruds.userAlert.title') }}</span>

                    </a>
                </li>
            @endcan
            @can('time_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-clock">

                        </i>
                        <span>{{ trans('cruds.timeManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('time_work_type_access')
                            <li class="{{ request()->is("admin/time-work-types") || request()->is("admin/time-work-types/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-work-types.index") }}">
                                    <i class="fa-fw fas fa-th">

                                    </i>
                                    <span>{{ trans('cruds.timeWorkType.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('time_project_access')
                            <li class="{{ request()->is("admin/time-projects") || request()->is("admin/time-projects/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-projects.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.timeProject.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('time_entry_access')
                            <li class="{{ request()->is("admin/time-entries") || request()->is("admin/time-entries/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-entries.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.timeEntry.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('time_report_access')
                            <li class="{{ request()->is("admin/time-reports") || request()->is("admin/time-reports/*") ? "active" : "" }}">
                                <a href="{{ route("admin.time-reports.index") }}">
                                    <i class="fa-fw fas fa-chart-line">

                                    </i>
                                    <span>{{ trans('cruds.timeReport.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('faq_management_access')
                <li class="treeview">
                    <a href="#">
                        <i class="fa-fw fas fa-question">

                        </i>
                        <span>{{ trans('cruds.faqManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-fw fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('faq_category_access')
                            <li class="{{ request()->is("admin/faq-categories") || request()->is("admin/faq-categories/*") ? "active" : "" }}">
                                <a href="{{ route("admin.faq-categories.index") }}">
                                    <i class="fa-fw fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('cruds.faqCategory.title') }}</span>

                                </a>
                            </li>
                        @endcan
                        @can('faq_question_access')
                            <li class="{{ request()->is("admin/faq-questions") || request()->is("admin/faq-questions/*") ? "active" : "" }}">
                                <a href="{{ route("admin.faq-questions.index") }}">
                                    <i class="fa-fw fas fa-question">

                                    </i>
                                    <span>{{ trans('cruds.faqQuestion.title') }}</span>

                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            <li class="{{ request()->is("admin/system-calendar") || request()->is("admin/system-calendar/*") ? "active" : "" }}">
                <a href="{{ route("admin.systemCalendar") }}">
                    <i class="fas fa-fw fa-calendar">

                    </i>
                    <span>{{ trans('global.systemCalendar') }}</span>
                </a>
            </li>
            @php($unread = \App\Models\QaTopic::unreadCount())
                <li class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "active" : "" }}">
                    <a href="{{ route("admin.messenger.index") }}">
                        <i class="fa-fw fa fa-envelope">

                        </i>
                        <span>{{ trans('global.messages') }}</span>
                        @if($unread > 0)
                            <strong>( {{ $unread }} )</strong>
                        @endif

                    </a>
                </li>
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="{{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}">
                            <a href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key">
                                </i>
                                {{ trans('global.change_password') }}
                            </a>
                        </li>
                    @endcan
                @endif
                <li>
                    <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="fas fa-fw fa-sign-out-alt">

                        </i>
                        {{ trans('global.logout') }}
                    </a>
                </li>
        </ul>
    </section>
</aside>