<?php echo $this->load->view('website/theme/breadcrumb'); ?>

<section id="content">
    <div class="content-wrap bg-light overflow-visible pb-0 pt-3">
        <div class="container">
            <div class="single-event">

                <div class="row flex-lg-row-reverse gutter-40">
                    <div class="col-lg-4 position-lg-sticky h-100" style="top: 100px;">
                        <div class="event-meta bg-white shadow-sm p-4 rounded-4 mb-3">
                            <h4 class="mb-1 fs-5 font-noto fw-semibold">ลงทะเบียนเรียน</h4>

                            <ul class="list-group">
                                <li class="list-group-item border-0">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start align-self-center col-md-2">
                                            <i class="box-square-sm d-flex align-items-center justify-content-center fas fa-book fs-3 color position-relative"></i>
                                        </div>
                                        <div class="p-1 align-self-end align-self-center col-md-10 fs-14 font-noto">
                                            <div class="fw-bold">ชื่อหลักสูตร</div>
                                            <a href="#" class="text-black h-text-color"><?php echo $title;?></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start align-self-center col-md-2">
                                            <i class="box-square-sm d-flex align-items-center justify-content-center fa-solid fa-bookmark fs-3 color position-relative"></i>
                                        </div>
                                        <div class="p-1 align-self-end align-self-center col-md-10 fs-14 font-noto">
                                            <div class="fw-bold">ประเภทหลักสูตร</div>
                                            <a href="#" class="text-black h-text-color">สะสมหน่วยกิต</a>
                                        </div>
                                    </div>
                                </li>
                                <!-- <li class="list-group-item border-0">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start align-self-center col-md-2">
                                            <i class="box-square-sm d-flex align-items-center justify-content-center fa-solid fa-users-viewfinder fs-3 color position-relative"></i>
                                        </div>
                                        <div class="p-1 align-self-end align-self-center col-md-10 fs-14 font-noto">
                                            <div class="fw-bold">วันที่เปิดลงทะเบียน</div>
                                            <a href="#" class="text-black h-text-color">
                                                <span class="badge text-bg-warning">รุ่นที่ 6 &nbsp;|&nbsp; 13 มิ.ย. 67 - 12 ก.ค. 67 &nbsp;|&nbsp; 60 คน</span></a>
                                                <span class="badge text-bg-warning">รุ่นที่ 7 &nbsp;|&nbsp; 13 มิ.ย. 67 - 12 ก.ค. 67 &nbsp;|&nbsp; 60 คน</span></a>
                                                <span class="badge text-bg-warning">รุ่นที่ 8 &nbsp;|&nbsp; 13 มิ.ย. 67 - 12 ก.ค. 67 &nbsp;|&nbsp; 60 คน</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start align-self-center col-md-2">
                                            <i class="box-square-sm d-flex align-items-center justify-content-center fa-regular fa-calendar-days fs-3 color position-relative"></i>
                                        </div>
                                        <div class="p-1 align-self-end align-self-center col-md-10 fs-14 font-noto">
                                            <div class="fw-bold">ระยะเวลาเปิดรับสมัคร</div>
                                            <a href="#" class="text-black h-text-color">13 มิ.ย. 67 - 12 ก.ค. 67</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start align-self-center col-md-2">
                                            <i class="box-square-sm d-flex align-items-center justify-content-center fa-solid fa-chalkboard-user fs-3 color position-relative"></i>
                                        </div>
                                        <div class="p-1 align-self-end align-self-center col-md-10 fs-14 font-noto">
                                            <div class="fw-bold">รูปแบบการเรียนการสอน <i class="fa-regular fa-circle-question"></i></div>
                                            <a href="#" class="text-black h-text-color">Hybrid Learning</a>
                                        </div>
                                    </div>
                                </li> -->
                                <li class="list-group-item border-0">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start align-self-center col-md-2">
                                            <i class="box-square-sm d-flex align-items-center justify-content-center fs-3 color position-relative fa-solid fa-baht-sign"></i>
                                        </div>
                                        <div class="p-1 align-self-end align-self-center col-md-10 fs-14 font-noto">
                                            <div class="fw-bold">ค่าลงทะเบียน</div>
                                            <a href="#" class="text-black h-text-color">ขึ้นอยู่กับชุดฝึกอบรมที่เลือกศึกษาเรียนรู้</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item border-0">
                                    <button type="button" class="btn btn-danger font-noto btn-lg w-100" data-bs-toggle="modal" data-bs-target="#TableListRegister" data-bs-whatever="<?php echo $title;?>"><i class="fa fa-sign-in-alt"></i> ลงทะเบียน</button>
                                </li>
                            </ul>

                            <ul class="mb-0">
                                <!-- <li class="row gx-3 gy-4 mb-4">
                                    <div class="col-auto">
                                        <i class="box-square-sm d-flex align-items-center justify-content-center fa-regular fa-bookmark fs-3 color position-relative"></i>
                                    </div>
                                    <div class="col mb-0 op-09 ps-3 fs-14 font-noto"><div class="fw-bold">ชื่อหลักสูตร</div><a href="#" class="text-black h-text-color">หลักสูตรสาธารณสุขศาสตรบัณฑิต สาขาวิชาสาธารณสุขศาสตร์ ส.บ. (สาธารณสุขศาสตร์)</a></div>
                                </li>

                                <li class="row gx-3 gy-4 mb-4">
                                    <div class="col-auto">
                                        <i class="box-square-sm d-flex align-items-center justify-content-center fa-solid fa-users-viewfinder fs-3 color position-relative"></i>
                                    </div>
                                    <div class="col mb-0 op-09 ps-3 fs-14 font-noto"><div class="fw-bold">รอบการสมัคร (จำนวนที่รับสมัคร)</div><a href="#" class="text-black h-text-color">รุ่นที่ 6 (จำนวน 60 คน)</a></div>
                                </li>
                                
                                <li class="row gx-3 gy-4 mb-4">
                                    <div class="col-auto">
                                        <i class="box-square-sm d-flex align-items-center justify-content-center fa-regular fa-calendar-days fs-3 color position-relative"></i>
                                    </div>
                                    <div class="col mb-0 op-09 ps-3 fs-14 font-noto"><div class="fw-bold">ระยะเวลาเปิดรับสมัคร</div><a href="#" class="text-black h-text-color">13 มิ.ย. 67 - 12 ก.ค. 67</a></div>
                                </li>
                                
                                <li class="row gx-3 gy-4 mb-4">
                                    <div class="col-auto">
                                        <i class="box-square-sm d-flex align-items-center justify-content-center fa-solid fa-chalkboard-user fs-3 color position-relative"></i>
                                    </div>
                                    <div class="col mb-0 op-09 ps-3 fs-14 font-noto"><div class="fw-bold">รูปแบบการเรียนการสอน</div><a href="#" class="text-black h-text-color">Hybrid Learning</a></div>
                                </li>

                                <li class="row gx-3 gy-4 mb-4">
                                    <div class="col-auto">
                                        <i class="box-square-sm d-flex align-items-center justify-content-center fs-3 color position-relative fa-solid fa-baht-sign"></i>
                                    </div>
                                    <div class="col mb-0 op-09 ps-3 fs-14 font-noto"><div class="fw-bold">ค่าลงทะเบียน</div><a href="#" class="text-black h-text-color">ขึ้นอยู่กับชุดฝึกอบรมที่เลือกศึกษาเรียนรู้</a></div>
                                </li>

                                <li class="row gx-3 gy-4">
                                    <button type="button" class="btn btn-danger font-noto btn-lg">ลงทะเบียน</button>
                                </li> -->
                            </ul>
                        </div>

                        <div id="respon_person" class="event-meta bg-white shadow-sm p-4 rounded-4 mb-3">
                            <h4 class="mb-2 fs-5 font-noto fw-semibold">ผู้รับผิดชอบหลักสูตร : </h4>
                            <div class="list-group fs-14 font-noto">
                                <a href="#" target="_blank" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start">
                                            <img src="https://images.unsplash.com/photo-1668554245893-2430d0077217?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded mx-auto d-block custom-img img-fluid" alt="..."></div>
                                        <div class="p-1 align-self-end align-self-center">
                                            <div class="fw-bold">ผศ.ดร.โชคฑีรภัคญ์ ธนเศรษฐวัฒนา</div>
                                            <div>คณบดี</div>
                                            <div>คณบดี คณะสาธารณสุขศาสตร์</div>
                                        </div>
                                    </div>
                                </a>
                                <a href="#" target="_blank" class="list-group-item list-group-item-action">
                                    <div class="d-flex">
                                        <div class="p-1 align-self-start"><img src="https://images.unsplash.com/photo-1717533564570-4ea91a5df160?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded mx-auto d-block custom-img img-fluid" alt="..."></div>
                                        <div class="p-1 align-self-end align-self-center">
                                            <div class="fw-bold">ผศ.ดร.ปณิธาน  จันทร์ทิพย์</div>
                                            <div>คณบดี</div>
                                            <div>คณบดี คณะสาธารณสุขศาสตร์</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div id="documents" class="event-meta bg-white shadow-sm p-4 rounded-4 mb-3">
                            <h4 class="mb-2 fs-5 font-noto fw-semibold">เอกสารที่เกี่ยวข้อง : </h4>
                            <div class="list-group fs-14 font-noto">
                                <a href="#" target="_blank" class="list-group-item list-group-item-action">1. ประกาศรับสมัครผู้เรียน <i class="fa-solid fa-download"></i></a>
                                <a href="#" target="_blank" class="list-group-item list-group-item-action">2. โครงสร้างหลักสูตร <i class="fa-solid fa-download"></i></a>
                            </div>
                        </div>

                        <div id="tags" class="event-meta bg-white shadow-sm p-4 rounded-4 mb-3">
                            <h4 class="mb-2 fs-5 font-noto fw-semibold">ป้ายกำกับ : </h4>
                            <div class="tagcloud font-noto">
									<a href="#">สาธารณสุขศาสตร์</a>
									<a href="#">สุขภาพชุมชน</a>
									<a href="#">Credit Bank</a>
									<a href="#">คลังหน่วยกิต</a>
								</div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <a href="#" class="social-icon si-small border-transparent op-03 fa-regular fa-heart" data-bs-toggle="tooltip" data-bs-placement="top" title="Favorite">
                                <i class="fa-solid fa-envelope text-dark h-color-email m-0"></i>
                            </a>

                            <a href="#" class="social-icon si-small border-transparent op-03 h-op-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Copy Link">
                                <i class="bi-clipboard text-dark h-color m-0"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="entry-image mb-5">
                            <a href="#"><img src="https://plus.unsplash.com/premium_photo-1716666258784-7f9a5b37c4aa?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Event Single" class="rounded-4"></a>
                        </div>

                        <h3 class="mb-3 font-noto"><?php echo $title;?></h3>
                       
                        <div class="course-detail font-noto">
                            <p class="my-2 ps-6">หลักสูตรคลังหน่วยกิต “สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน” เป็นหลักสูตรที่เป็นไปตามข้อบังคับมหาวิทยาลัย</p>
                            <p class="my-2">ราชภัฏเชียงราย ว่าด้วยการดำเนินงานคลังหน่วยกิตในระดับอุดมศึกษา พ.ศ. 2566 ซึ่งสามารถนำมานับหน่วยกิตได้ตามรายวิชาในหลักสูตร</p>
                            <p class="my-2">สาธารณสุขศาสตรบัณฑิต สาขาวิชาสาธารณสุขศาสตร์คณะสาธารณสุขศาสตร์ มหาวิทยาลัยราชภัฏเชียงราย</p>
                        </div>
                        
                        <hr class="my-5"/>

                        <h4 class="font-noto">คุณสมบัติผู้สมัคร</h4>

                        <div class="row col-mb-30">
                            <div class="col-md-12">
                                <ul class="iconlist mb-0 font-noto">
                                    <li class="fw-bold"><i class="fa-solid fa-user-check"></i> ชุดฝึกอบรม "ปรับพื้นฐานทางด้านสาธารณสุข"</li>
                                    <li><i class="fa-regular fa-circle-check"></i> ผู้ที่สำเร็จการศึกษาระดับอนุปริญญาหรือสูงกว่า (ทุกสาขา) และเป็นผู้ที่ทำงานในหน่วยงานด้านสุขภาพ หรือ</li>
                                    <li><i class="fa-regular fa-circle-check"></i> ผู้ที่สำเร็จการศึกษาหลักสูตรประกาศนียบัตรวิชาชีพชั้นสูง (ทุกสาขา) และเป็นผู้ที่ทำงานในหน่วยงานด้านสุขภาพ หรือ</li>
                                    <li><i class="fa-regular fa-circle-check"></i> ผู้ที่สำเร็จการศึกษาระดับอนุปริญญาหรือสูงกว่าทางด้านสาธารณสุขศาสตร์ หรือวิทยาศาสตร์สุขภาพ หรือ</li>
                                    <li><i class="fa-regular fa-circle-check"></i> ผู้ที่สำเร็จการศึกษาหลักสูตรประกาศนียบัตรวิชาชีพชั้นสูงทางด้านสาธารณสุขศาสตร์ หรือวิทยาศาสตร์สุขภาพ หรือ</li>
                                    <li><i class="fa-regular fa-circle-check"></i> ผู้ที่ผ่านการศึกษาเรียนรู้ในหลักสูตรคลังหน่วยกิต “สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน” ชุดฝึกอบรมปรับพื้นฐาน<br/>ทางด้านสาธารณสุข ชุดที่ P1-P4 หรือ</li>
                                    <li><i class="fa-regular fa-circle-check"></i> ประชาชนทั่วไปที่สนใจเข้าฝึกอบรม (เฉพาะชุดฝึกอบรม)</li>
                                    <li class="text-danger"><i class="fa-solid fa-lightbulb text-danger"></i> <b>หมายเหตุ :</b></li>
                                    <li class="text-danger"><i class="fa-solid fa-asterisk text-danger"></i> ผู้ที่มีคุณสมบัติตามข้อ 1-2 ต้องเป็นผู้ที่ทำงานในหน่วยงานด้านสุขภาพ และต้องเข้าศึกษาเรียนรู้ในชุดฝึกอบรมที่ P1-P4<br/>เพื่อปรับพื้นฐานด้านสาธารณสุขศาสตร์ก่อนเลือกฝึกอบรมชุดที่ 1-7</li>
                                    <li class="text-danger"><i class="fa-solid fa-asterisk text-danger"></i> ผู้ที่มีคุณสมบัติตามข้อ 3-5 สามารถเข้าฝึกอบรมในชุดฝึกอบรมที่ 1-7 ได้</li>
                                </ul>
                            </div>
                        </div>

                        <hr class="my-5"/>

                        <div class="row col-mb-80">
                            <div class="col-md-12 pb-0">
                                <h4 class="font-noto">โครงสร้างของหลักสูตร</h4>
                                <div class="font-noto mb-4">
                                    <p class="my-2 text-wrap" style="text-indent:80px; text-align: justify; text-justify: inter-word;">หลักสูตรคลังหน่วยกิต “สาธารณสุขศาสตร์เพื่อการพัฒนาสุขภาพชุมชน” เป็นหลักสูตรที่เป็นไปตามข้อบังคับมหาวิทยาลัยราชภัฏเชียงราย ว่าด้วยการดำเนินงานคลังหน่วยกิตในระดับอุดมศึกษา พ.ศ. 2566 ซึ่งสามารถนำมานับหน่วยกิตได้ตามรายวิชาในหลักสูตรสาธารณสุขศาสตรบัณฑิต สาขาวิชาสาธารณสุขศาสตร์ คณะสาธารณสุขศาสตร์ มหาวิทยาลัยราชภัฏเชียงราย ประกอบด้วยชุดฝึกอบรมดังนี้</p>
                                </div>
                                <ul class="iconlist font-noto">
                                    <li class="fw-bold"><i class="fa-solid fa-layer-group"></i> ชุดฝึกอบรม “ปรับพื้นฐานทางด้านสาธารณสุข” จำนวน 4 ชุดฝึกอบรม ดังนี้</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ P1 วิทยาศาสตร์ทางสาธารณสุข</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ P2 สุขศึกษาและการสื่อสารทางด้านสาธารณสุข</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ P3 การพยาบาลและเภสัชวิทยาทางสาธารณสุข</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ P4 สุขาภิบาลอาหารและสิ่งแวดล้อม</li>
                                </ul>
                                <ul class="iconlist mb-0 font-noto">
                                    <li class="fw-bold"><i class="fa-solid fa-layer-group"></i> ชุดฝึกอบรม “สาธารณสุขศาสตร์เพื่อการพัฒนาชุมชน” จำนวน 7 ชุดฝึกอบรม ดังนี้</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ 1 กายวิภาคศาสตร์ สรีรวิทยาและพยาธิวิทยา</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ 2 ระบาดวิทยาเพื่อการประยุกต์ใช้ในการป้องกันและควบคุมโรค</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ 3 อนามัยการเจริญพันธุ์และโภชนศาสตร์</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ 4 กระบวนการสร้างเสริมสุขภาพในชุมชน</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ 5 อาชีวอนามัยและอนามัยสิ่งแวดล้อม</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ 6 บริหารสาธารณสุขและกฎหมายสาธารณสุข</li>
                                    <li><i class="fa-solid fa-caret-right"></i> ชุดฝึกอบรมที่ 7 สถิติและการวิจัยทางด้านสาธารณสุข</li>
                                </ul>
                            </div>

                            <hr class="my-5"/>

                            <div class="col-md-12">
                                <h4 class="font-noto">การสำเร็จการศึกษาเรียนรู้ในหลักสูตร</h4>
                                <ul class="iconlist font-noto">
                                    <li><i class="fa-solid fa-graduation-cap"></i> ผู้เรียนที่ได้ศึกษาเรียนรู้ครบตามจำนวนชั่วโมง และผ่านการประเมินตามเกณฑ์การวัดและประเมินผลของแต่ละชุดฝึกอบรม<br/>จะได้รับ “วุฒิบัตร” การฝึกอบรมของชุดฝึกอบรมนั้นๆ</li>
                                    <li><i class="fa-solid fa-graduation-cap"></i> ผู้เรียนที่ผ่านการศึกษาเรียนรู้ตามข้อ 1 และได้ศึกษาเรียนรู้ครบทุกชุดวิชาหรือชุดฝึกอบรมตามที่กำหนด และได้รับความเห็นชอบ<br/>ผลการศึกษาเรียนรู้จากคณะกรรมการการศึกษาต่อเนื่อง จะได้รับ “ใบรับรองผลการศึกษาเรียนรู้” และสามารถนำไปเก็บไว้ใน<br/>ระบบคลังหน่วยกิต (Credit Bank) ได้</li>
                                    <li><i class="fa-solid fa-graduation-cap"></i> ผู้ที่ผ่านการฝึกอบรมที่ได้รับใบรับรองผลการศึกษาเรียนรู้ จะเทียบโอนเข้าสู่การศึกษาในระบบปกติระดับปริญญาตรีในหลักสูตร<br/>สาธารณสุขศาสตรบัณฑิต สาขาวิชาสาธารณสุขศาสตร์ หลักสูตรปรับปรุง พ.ศ. 2563 ได้ตามจำนวนหน่วยกิตที่แต่ละ<br/>ชุดฝึกอบรมกำหนด</li>
                                </ul>
                            </div>

                            <!-- <div class="col-12">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body p-4">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-borderless mb-0 font-noto">
                                                <thead>
                                                    <tr>
                                                        <th class="col-3">หมู่เรียน</th>
                                                        <th class="col-3">ระยะเวลาในการศึกษา</th>
                                                        <th class="col-6">เอกสารที่เกี่ยวข้อง</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>รุ่นที่ 5 หลักสูตรปี 2561</td>
                                                        <td>ต.ค. 67 - พ.ค. 68</td>
                                                        <td>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศรับสมัครผู้เรียน <i class="fa-regular fa-circle-down"></i></a>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศอัตราค่าลงทะเบียน <i class="fa-regular fa-circle-down"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>รุ่นที่ 5(รอบพิเศษ) หลักสูตรปี 2561</td>
                                                        <td>ต.ค. 67 - พ.ค. 68</td>
                                                        <td>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศรับสมัครผู้เรียน <i class="fa-regular fa-circle-down"></i></a>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศอัตราค่าลงทะเบียน <i class="fa-regular fa-circle-down"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>รุ่นที่ 4 หลักสูตรปี 2561</td>
                                                        <td>ต.ค. 67 - พ.ค. 68</td>
                                                        <td>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศรับสมัครผู้เรียน <i class="fa-regular fa-circle-down"></i></a>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศอัตราค่าลงทะเบียน <i class="fa-regular fa-circle-down"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>รุ่นที่ 3 หลักสูตรปี 2561</td>
                                                        <td>ต.ค. 67 - พ.ค. 68</td>
                                                        <td>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศรับสมัครผู้เรียน <i class="fa-regular fa-circle-down"></i></a>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศอัตราค่าลงทะเบียน <i class="fa-regular fa-circle-down"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>รุ่นที่ 2 หลักสูตรปี 2561</td>
                                                        <td>ต.ค. 67 - พ.ค. 68</td>
                                                        <td>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศรับสมัครผู้เรียน <i class="fa-regular fa-circle-down"></i></a>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศอัตราค่าลงทะเบียน <i class="fa-regular fa-circle-down"></i></a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>รุ่นที่ 1 หลักสูตรปี 2561</td>
                                                        <td>ต.ค. 67 - พ.ค. 68</td>
                                                        <td>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศรับสมัครผู้เรียน <i class="fa-regular fa-circle-down"></i></a>
                                                            <a href="#" target="_blank" class="btn btn-outline-dark btn-sm my-1"><i class="fa-regular fa-file-pdf"></i> ประกาศอัตราค่าลงทะเบียน <i class="fa-regular fa-circle-down"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="bg-white w-100 py-4 shadow-sm position-sticky bottom-0 mt-6 border-top border-dark-subtle border-opacity-50">

            <div class="row align-items-center justify-content-between mx-0 px-2">
                <div class="col-auto">
                    <a href="#" class="d-flex align-items-center justify-content-center">
                        <i class="fs-2 bi-chevron-left text-black h-color"></i>
                    </a>
                </div>
                <div class="col">
                    <div class="container px-0">
                        <div class="row align-items-center justify-content-between mx-0">
                            <div class="col-auto d-none d-md-block">
                                <h4 class="fs-5 fw-medium mb-0 font-noto"><?php echo $title;?></h4>
                            </div>

                            <div class="col-auto ms-md-auto font-noto">
                                <strong>ฟรี</strong>
                            </div>
                            <div class="col-auto">
                                <button type="button" class="btn btn-danger rounded-4 btn-lg fw-normal text-center m-0 px-4 font-noto" data-bs-toggle="modal" data-bs-target="#TableListRegister" data-bs-whatever="<?php echo $title;?>"><i class="fa fa-sign-in-alt"></i> ลงทะเบียน</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="#" class="d-flex align-items-center justify-content-center">
                        <i class="fs-2 bi-chevron-right text-black h-color"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<?php echo $this->load->view('website/course/register_list'); ?>

<style>
    .custom-img {
      width: 60px;  /* กำหนดความกว้างที่ต้องการ */
      height: 60px; /* กำหนดความสูงที่ต้องการ */
      object-fit: cover; /* ปรับขนาดรูปภาพให้พอดี */
    }
</style>