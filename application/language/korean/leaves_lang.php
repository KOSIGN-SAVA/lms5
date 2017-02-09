<?php
/**
 * Translation file
 * @copyright  Copyright (c) 2014-2016 Benjamin BALET
 * @license      http://opensource.org/licenses/AGPL-3.0 AGPL-3.0
 * @link            https://github.com/bbalet/jorani
 * @since         0.1.0
 */

$lang['leaves_summary_title'] = '내 요약';
$lang['leaves_summary_title_overtime'] = '초과 근무의 세부 사항 (연차를 보상하기 위해 추가)';
$lang['leaves_summary_key_overtime'] = 'Catch up for';
$lang['leaves_summary_thead_type'] = '연차 유형';
$lang['leaves_summary_thead_available'] = '사용가능한';
$lang['leaves_summary_thead_taken'] = '사용한';
$lang['leaves_summary_thead_entitled'] = '부여된';
$lang['leaves_summary_thead_description'] = '설명';
$lang['leaves_summary_tbody_empty'] = 'No entitled or taken days for this period. Please contact your HR Officer / Manager.';
$lang['leaves_summary_flash_msg_error'] = 'It appears that you have no contract. Please contact your HR Officer / Manager.';
$lang['leaves_summary_date_field'] = '보고서 날짜';

$lang['leaves_index_title'] = '내 연차 사용현황';
$lang['leaves_index_thead_tip_view'] = '조회';
$lang['leaves_index_thead_tip_edit'] = '수정';
$lang['leaves_index_thead_tip_cancel'] = '취소';
$lang['leaves_index_thead_tip_delete'] = '삭제';
$lang['leaves_index_thead_tip_history'] = '이력 조회';
$lang['leaves_index_thead_id'] = 'ID';
$lang['leaves_index_thead_start_date'] = '시작 일자';
$lang['leaves_index_thead_end_date'] = '종료 일자';
$lang['leaves_index_thead_cause'] = '사유';
$lang['leaves_index_thead_duration'] = '기간';
$lang['leaves_index_thead_type'] = '유형';
$lang['leaves_index_thead_status'] = '상태';
$lang['leaves_index_button_export'] = '이 목록을 내보내기';
$lang['leaves_index_button_create'] = '연차 신청';
$lang['leaves_index_popup_delete_title'] = '연차 신청 삭제';
$lang['leaves_index_popup_delete_message'] = '하나의 휴가 요청을 삭제하려고 하고, 이 절차는 돌이킬 수 없습니다.';
$lang['leaves_index_popup_delete_question'] = '계속 하시겠습니까?';
$lang['leaves_index_popup_delete_button_yes'] = '예';
$lang['leaves_index_popup_delete_button_no'] = '아니오';

$lang['leaves_history_thead_changed_date'] = 'Changed Date';
$lang['leaves_history_thead_change_type'] = 'Change Type';
$lang['leaves_history_thead_changed_by'] = 'Changed By';
$lang['leaves_history_thead_start_date'] = 'Start Date';
$lang['leaves_history_thead_end_date'] = 'End Date';
$lang['leaves_history_thead_cause'] = 'Reason';
$lang['leaves_history_thead_duration'] = 'Duration';
$lang['leaves_history_thead_type'] = 'Type';
$lang['leaves_history_thead_status'] = 'Status';

$lang['leaves_create_title'] = 'Submit a leave request';
$lang['leaves_create_field_start'] = 'Start Date';
$lang['leaves_create_field_end'] = 'End Date';
$lang['leaves_create_field_type'] = 'Leave type';
$lang['leaves_create_field_duration'] = 'Duration';
$lang['leaves_create_field_duration_message'] = 'You are exceeding your entitled days';
$lang['leaves_create_field_overlapping_message'] = 'You have requested another leave request within the same dates.';
$lang['leaves_create_field_cause'] = 'Cause (optional)';
$lang['leaves_create_field_status'] = 'Status';
$lang['leaves_create_button_create'] = 'Request leave';
$lang['leaves_create_button_cancel'] = 'Cancel';
$lang['leaves_create_flash_msg_success'] = 'The leave request has been successfully created';
$lang['leaves_create_flash_msg_error'] = 'The leave request has been successfully created or updated, but you don\'t have a manager.';

$lang['leaves_flash_spn_list_days_off'] = '%s non-working days in the period';
$lang['leaves_flash_msg_overlap_dayoff'] = 'Your leave request matches with a non-working day.';

$lang['leaves_edit_html_title'] = 'Edit a leave request';
$lang['leaves_edit_title'] = 'Edit leave request #';
$lang['leaves_edit_field_start'] = 'Start Date';
$lang['leaves_edit_field_end'] = 'End Date';
$lang['leaves_edit_field_type'] = 'Leave type';
$lang['leaves_edit_field_duration'] = 'Duration';
$lang['leaves_edit_field_duration_message'] = 'You are exceeding your entitled days';
$lang['leaves_edit_field_cause'] = 'Cause (optional)';
$lang['leaves_edit_field_status'] = 'Status';
$lang['leaves_edit_button_update'] = 'Update leave';
$lang['leaves_edit_button_cancel'] = 'Cancel';
$lang['leaves_edit_flash_msg_error'] = 'You cannot edit a leave request already submitted';
$lang['leaves_edit_flash_msg_success'] = 'The leave request has been successfully updated';

$lang['leaves_validate_mandatory_js_msg'] = '"The field " + fieldname + " is mandatory."';
$lang['leaves_validate_flash_msg_no_contract'] = 'It appears that you have no contract. Please contact your HR Officer / Manager.';
$lang['leaves_validate_flash_msg_overlap_period'] = 'You can\'t create a leave request for two yearly leave periods. Please create two different leave requests.';

$lang['leaves_cancel_flash_msg_error'] = 'You can\'t cancel this leave request';
$lang['leaves_cancel_flash_msg_success'] = 'The leave request has been successfully cancelled';
$lang['leaves_cancel_unauthorized_msg_error'] = 'You can\'t cancel a leave request starting in the past. Ask your manager for rejecting it.';

$lang['leaves_delete_flash_msg_error'] = 'You can\'t delete this leave request';
$lang['leaves_delete_flash_msg_success'] = 'The leave request has been successfully deleted';

$lang['leaves_view_title'] = 'View leave request #';
$lang['leaves_view_html_title'] = 'View a leave request';
$lang['leaves_view_field_start'] = 'Start Date';
$lang['leaves_view_field_end'] = 'End Date';
$lang['leaves_view_field_type'] = 'Leave type';
$lang['leaves_view_field_duration'] = 'Duration';
$lang['leaves_view_field_cause'] = 'Reason';
$lang['leaves_view_field_status'] = 'Status';
$lang['leaves_view_button_edit'] = 'Edit';
$lang['leaves_view_button_back_list'] = 'Back to list';

$lang['leaves_export_title'] = 'List of leaves';
$lang['leaves_export_thead_id'] = 'ID';
$lang['leaves_export_thead_start_date'] = 'Start Date';
$lang['leaves_export_thead_start_date_type'] = 'Morning/Afternoon';
$lang['leaves_export_thead_end_date'] = 'End Date';
$lang['leaves_export_thead_end_date_type'] = 'Morning/Afternoon';
$lang['leaves_export_thead_cause'] = 'Reason';
$lang['leaves_export_thead_duration'] = 'Duration';
$lang['leaves_export_thead_type'] = 'Type';
$lang['leaves_export_thead_status'] = 'Status';
