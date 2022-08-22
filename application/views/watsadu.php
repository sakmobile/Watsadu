<section class="content">


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">รายการวัสดุ</h3>
            <div align="right">
                <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#ModelAdd_Watsadu">
                    <i class="fas fa-plus"></i> เพิ่มข้อมูล
                </button>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>รหัส</th>
                        <th>ชื่อ</th>
                        <th>จำนวน</th>
                        <th>ราคา/หน่วย</th>
                        <th>ราคารวม</th>
                        <th>หน่วย</th>
                        <th>วัสดุประเภท</th>
                        <th>--</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>w001</td>
                        <td>กระดาษ A4</td>
                        <td>100</td>
                        <td>90</td>
                        <td><?php echo number_format(100 * 90, 2); ?></td>
                        <td>รีม</td>
                        <td>วัสดุสำนักงาน</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-sm" onclick="edit()"><i class="fas fa-edit"></i> </button>
                            <button type="button" class="btn btn-danger btn-sm" onclick="del(1)"><i class="fas fa-trash"></i> </button>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>รหัส</th>
                        <th>ชื่อ</th>
                        <th>จำนวน</th>
                        <th>ราคา/หน่วย</th>
                        <th>ราคารวม</th>
                        <th>หน่วย</th>
                        <th>วัสดุประเภท</th>
                        <th>--</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->

    </div>
</section>

<!-- เพิ่มข้อมูลวัสดุ  -->
<div class="modal fade" id="ModelAdd_Watsadu" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form id="myform1" name="form1" method="post" action="" novalidate>
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่มข้อมูลวัสดุ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ชื่อวัสดุ</label>
                                <input type="text" class="form-control" id="watsadu_name" placeholder="ชื่อวัสดุ" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    กรุณากรอกชื่อวัสดุ
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>จำนวน</label>
                                <input type="number" class="form-control" id="watsadu_qty" placeholder="จำนวน" oninput="validOtp(this)" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    กรุณากรอกจำนวน
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>ราคา/หน่วย</label>
                                <input type="text" class="form-control" id="watsadu_price" placeholder="ตัวอย่าง 1000" autocomplete="off" required>
                                <div class="invalid-feedback">
                                    กรุณากรอกราคา/หน่วย
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>หน่วยนับ</label>
                                <select class="form-control select2" id="watsadu_unit" autocomplete="off" required style="width: 100%;">
                                    <option value="">เลือก</option>
                                    <option>Alaska</option>
                                    <option>California</option>
                                    <option>Delaware</option>
                                    <option>Tennessee</option>
                                    <option>Texas</option>
                                    <option>Washington</option>
                                </select>
                                <div class="invalid-feedback">
                                    กรุณาเลือกหน่วยนับ
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>ประเภทวัสดุ</label>
                        <select class="form-control select2" id="watsadu_type" style="width: 100%;" autocomplete="off" required>
                            <option value="">เลือก</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                        </select>
                        <div class="invalid-feedback">
                            กรุณาเลือกประเภทวัสดุ
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">ยกเลิก</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- แก้ไขข้อมูลวัสดุ  -->
<div class="modal fade" id="ModelEdit_Watsadu" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">แก้ไขข้อมูลวัสดุ</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">

                </div>
                <div class="form-group">
                    <label>Minimal</label>
                    <select class="form-control select2" id="test" name="test" style="width: 100%;">
                        <option selected="selected">Alabama</option>
                        <option>Alaska</option>
                        <option>California</option>
                        <option>Delaware</option>
                        <option>Tennessee</option>
                        <option>Texas</option>
                        <option>Washington</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>