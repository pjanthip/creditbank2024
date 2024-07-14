<?php echo $this->load->view('website/theme/breadcrumb'); ?>

<section id="content">
    <div class="content-wrap bg-light pt-5 pb-3">
        <div class="container font-noto">
            <div class="row g-4 mb-5">
                <?php for($i=0;$i<10;$i++):?>
                <article class="entry event col-6 mb-0 font-noto">
                    <div class="grid-inner bg-white row g-0 p-3 border-0 rounded-5 shadow-sm h-shadow all-ts h-translate-y-sm">
                        <div class="col-md-5 mb-md-0">
                            <a href="#" class="entry-image mb-0 h-100">
                                <img src="https://plus.unsplash.com/premium_photo-1682284353484-4e16001c58eb?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Inventore voluptates velit totam ipsa tenetur" class="rounded-2 h-100 object-cover">
                            </a>
                        </div>
                        <div class="col-md-7 p-4">
                            <div class="entry-meta no-separator mb-1 mt-0">
                                <ul>
                                    <li><span class="badge rounded-pill text-bg-warning">Modular</span></li>
                                    <li><i class="fa-regular fa-calendar"></i> 2024/05/13</li>
                                    <li><i class="fa-regular fa-eye"></i> 1,259</li>
                                </ul>
                            </div>

                            <div class="entry-title nott">
                                <h3 class="lh-1"><a href="#" class="font-noto fs-16">เปิดรับสมัครผู้เรียนในหลักสูตรคลังหน่วยกิต “การศึกษาพิเศษ” ชุดวิชาที่ 1</a></h3>
                            </div>
                            <div class="entry-content my-3">
                                <p class="mb-0 font-noto fs-12">📣📣เปิดรับสมัครผู้เรียน “การศึกษาพิเศษ” ชุดวิชาที่ 1 🎯รับจำนวน 30 คน ตั้งแต่วันที่ 15 ม.ค. – 29 ก.พ. 67 (หรือจนกว่าจำนวนจะเต็ม) สามารถสมัครได้ที่ https://creditbank.crru.ac.th/</p>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endfor;?>
                <div class="text-center mt-5">
                    <button type="button" class="btn btn-outline-secondary btn-sm px-5 py-2">LOAD MORE</button>
                </div>
            </div>
        </div>
    </div>
</section>