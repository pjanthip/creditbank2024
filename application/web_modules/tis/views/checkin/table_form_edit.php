<form id="savedata" name="savedata" role="form" accept-charset="utf-8" method="post" action="<?php echo site_url('tis/checkin/save'); ?>">
    <input type="hidden" name="typefrm" id="typefrm" value="edit" />
    <input type="hidden" name="fulldate" id="fulldate" value="<?php echo $current_date; ?>" />
    <div class="table-responsive">
        <table class="table table-bordered table-hover table-condensed">
            <thead>
                <tr class="bg-primary">
                    <th class="text-center col-1">ที่</th>
                    <th class="text-center col-2">รหัสผู้เรียน</th>
                    <th class="text-center col-3">ชื่อผู้เรียน</th>
                    <th class="text-center col-3">เช้า
                        <button type="button" class="btn btn-sm ml-2 waves-effect waves-light btn-success" onclick="javascript:check_coming(1);"><i class="fa-solid fa-circle-check"></i> มาทั้งหมด</button>
                        <button type="button" class="btn btn-sm ml-2 waves-effect waves-light btn-danger" onclick="javascript:clear_check(1);"><i class="fa-solid fa-circle-dot"></i> ล้างทั้งหมด</button>
                    </th>
                    <th class="text-center col-3">บ่าย
                        <button type="button" class="btn btn-sm ml-2 waves-effect waves-light btn-success" onclick="javascript:check_coming(2);"><i class="fa-solid fa-circle-check"></i> มาทั้งหมด</button>
                        <button type="button" class="btn btn-sm ml-2 waves-effect waves-light btn-danger" onclick="javascript:clear_check(2);"><i class="fa-solid fa-circle-dot"></i> ล้างทั้งหมด</button>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php
                $i = 0;
                foreach ($learner as $data) {
                ?>
                    <tr>
                        <td class="text-center"><?php echo ($i + 1); ?></td>
                        <td class="text-center">
                            <?php echo $data->learner_code; ?>
                            <input type="hidden" name="learner_code[<?php echo $i; ?>]" id="learner_code" value="<?php echo $data->learner_code; ?>" />
                            <input type="hidden" name="id-<?php echo $data->learner_code; ?>" id="learner_code" value="<?php echo $data->checkin_learner_id; ?>" />
                        </td>
                        <td class="text-left"><?php echo $data->prefix_name_full_th . $data->learner_fname_th . ' ' . $data->learner_lname_th; ?></td>

                        <td class="text-center">
                            <input type="hidden" name="1-learner_code-<?php echo $data->learner_code; ?>" id="1-code-<?php echo $data->learner_code; ?>" value="<?php echo $data->learner_code; ?>" />
                            <div class="radio-list row">
                                <div class="col-2 custom-control custom-radio">
                                    <?php $chk = ($data->checkin_learner1 == "1") ? "checked" : ""; ?>
                                    <input type="radio" id="1-coming-<?php echo $data->learner_code; ?>" name="1-learner_<?php echo $data->learner_code; ?>" value="1" <?php echo $chk; ?> onchange="javascript:close_leave_note('<?php echo $data->learner_code; ?>',1);" class="form-check-input radio-1 coming-1">
                                    <label class="form-check-label text-success" for="1-coming-<?php echo $data->learner_code; ?>">มา</label>
                                </div>
                                <div class="col-2 custom-control custom-radio">
                                    <?php $chk = ($data->checkin_learner1 == "0") ? "checked" : ""; ?>
                                    <input type="radio" id="1-absent-<?php echo $data->learner_code; ?>" name="1-learner_<?php echo $data->learner_code; ?>" value="0" <?php echo $chk; ?> onchange="javascript:close_leave_note('<?php echo $data->learner_code; ?>',1);" class="form-check-input radio-1">
                                    <label class="form-check-label text-warning" for="1-absent-<?php echo $data->learner_code; ?>">ขาด</label>
                                </div>
                                <div class="col-8  custom-control custom-radio">
                                    <div class="row">
                                        <div class="col-4">
                                            <?php $chk = ($data->checkin_learner1 == "2") ? "checked" : ""; ?>
                                            <input type="radio" id="1-leave-<?php echo $data->learner_code; ?>" name="1-learner_<?php echo $data->learner_code; ?>" value="2" <?php echo $chk; ?> onchange="javascript:leave_note('<?php echo $data->learner_code; ?>',1);" class="form-check-input radio-1">
                                            <label class="form-check-label text-danger" for="1-leave-<?php echo $data->learner_code; ?>">ลา</label>
                                        </div>
                                        <div class="col-8">
                                            <?php $dis = ($data->checkin_learner1 != "2") ? "disabled" : ""; ?>
                                            <?php $note = ($data->checkin_learner1 == "2") ? $data->checkin_learner1_note : ""; ?>
                                            <input type="text" name="1-note_<?php echo $data->learner_code; ?>" id="1-leave-note-<?php echo $data->learner_code; ?>" class="form-control note-1" <?php echo $dis; ?> value="<?php echo $note; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                        <td class="text-center">
                            <input type="hidden" name="2-learner_code" id="2-code-<?php echo $data->learner_code; ?>" value="<?php echo $data->learner_code; ?>" />
                            <div class="radio-list row">
                                <div class="col-2 custom-control custom-radio">
                                    <?php $chk = ($data->checkin_learner2 == "1") ? "checked" : ""; ?>
                                    <input type="radio" id="2-coming-<?php echo $data->learner_code; ?>" name="2-learner_<?php echo $data->learner_code; ?>" value="1" <?php echo $chk; ?> onchange="javascript:close_leave_note('<?php echo $data->learner_code; ?>',2);" class="form-check-input radio-2 coming-2">
                                    <label class="form-check-label text-success" for="2-coming-<?php echo $data->learner_code; ?>">มา</label>
                                </div>
                                <div class="col-2 custom-control custom-radio">
                                    <?php $chk = ($data->checkin_learner2 == "0") ? "checked" : ""; ?>
                                    <input type="radio" id="2-absent-<?php echo $data->learner_code; ?>" name="2-learner_<?php echo $data->learner_code; ?>" value="0" <?php echo $chk; ?> onchange="javascript:close_leave_note('<?php echo $data->learner_code; ?>',2);" class="form-check-input radio-2">
                                    <label class="form-check-label text-warning" for="2-absent-<?php echo $data->learner_code; ?>">ขาด</label>
                                </div>
                                <div class="col-8  custom-control custom-radio">
                                    <div class="row">
                                        <div class="col-4">
                                            <?php $chk = ($data->checkin_learner2 == "2") ? "checked" : ""; ?>
                                            <input type="radio" id="2-leave-<?php echo $data->learner_code; ?>" name="2-learner_<?php echo $data->learner_code; ?>" <?php echo $chk; ?> onchange="javascript:leave_note('<?php echo $data->learner_code; ?>',2);" value="2" class="form-check-input radio-2">
                                            <label class="form-check-label text-danger" for="2-leave-<?php echo $data->learner_code; ?>">ลา</label>
                                        </div>
                                        <div class="col-8">
                                            <?php $dis2 = ($data->checkin_learner2 != "2") ? "disabled" : ""; ?>
                                            <?php $note2 = ($data->checkin_learner2 == "2") ? $data->checkin_learner2_note : ""; ?>
                                            <input type="text" name="2-note_<?php echo $data->learner_code; ?>" id="2-leave-note-<?php echo $data->learner_code; ?>" class="form-control note-2" <?php echo $dis2; ?> value="<?php echo $note2; ?>">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>

                    <?php
                    $i++;
                }
                    ?>
            </tbody>
        </table>

        <div class="col-12 row text-center d-flex justify-content-center">
            <div class="input-group col-md-3 my-2">
                <span class="input-group-text" id="">ผู้บันทึก</span>
                <input type="text" id="check_date" name="check_date" class="form-control" value="<?php echo $this->session->userdata('fulllname'); ?>" disabled>
            </div>
            <button type="button" onclick="javascript:save();" class="btn btn-info"><span class="fa fa-save"></span> บันทึกเวลาเรียน</a>
        </div>
    </div>
</form>
