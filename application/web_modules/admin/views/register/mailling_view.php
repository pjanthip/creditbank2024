<div class="page-wrapper">
    <div class="container-fluid">
        <?php $this->load->view('admin/theme/breadcrumb'); ?>
        <!-- ============================================================== -->
        <!-- Containner -->
        <!-- ============================================================== -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h2>Sent Email Using SMTP</h2><br>

                    <form action="<?php echo site_url('admin/register/sendmail') ?>" method="post">
                        <input type="email" name="from" class="form-control" placeholder="Enter Email" required><br>
                        <textarea name="message" class="form-control" placeholder="Enter message here" required></textarea><br>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    function sendMail() {
        $.ajax({
                type: "POST",
                url: "<?php echo site_url('admin/register/sendmail') ?>",
                data: {mail_name:$("#mail_name").val(),mail_to:$("#mail_to").val(),mail_content:$("#mail_content").val()},
                beforeSend: function(){
                    $('#alert').html('');
                },
                success: function(data) {
                    $('#alert').html(data);
                }
            });
    };
</script>