<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('sis/theme/breadcrumb'); ?>
        <?php foreach ($learner as $data) {?>

            <div class="row g-0">
                <div class="card col-12 p-0 box-learner-content">
                    <div class="card-header">
                        <h5 class="card-title"><i class="fa-solid fa-address-book"></i> ข้อมูลการติดต่อ</h5>
                    </div>
                    <div class="card-body fs-16">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">ที่อยู่</th>
                                        <td style="width:70%;">
                                            เลขที่ <?php echo $data->learner_add_no; ?>
                                            หมู่ <?php echo $data->learner_add_moo; ?>
                                            <?php if($data->learner_alley !="" && $data->learner_alley !="-"):?>
                                            ซอย <?php echo $data->learner_alley; ?>
                                            <?php endif;?>
                                            <?php if($data->learner_road !="" && $data->learner_road !="-"):?>
                                            ซอย <?php echo $data->learner_road; ?>
                                            <?php endif;?>
                                            ต.<?php echo $DISTRICT; ?>
                                            อ.<?php echo $AMPHUR; ?>
                                            จ.<?php echo $PROVINCE; ?>
                                            <?php echo $data->learner_post; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">โทรศัพท์บ้าน</th>
                                        <td style="width:70%;"><?php echo $data->learner_tel; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">โทรศัพท์มือถือ</th>
                                        <td style="width:70%;"><?php echo $data->learner_phone; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">E-Mail</th>
                                        <td style="width:70%;"><?php echo $data->learner_email; ?></td>
                                    </tr>
                                    <tr>
                                        <th class="text-right" style="width:30%;" scope="row">Line ID</th>
                                        <td style="width:70%;"><?php echo $data->learner_line; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        <?php } ?>
    </div>
</div>