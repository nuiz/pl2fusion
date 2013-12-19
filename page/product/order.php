<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 13/12/2556
 * Time: 14:51 น.
 * To change this template use File | Settings | File Templates.
 */
?>
<div>
    <div class="container">
        <form class="form-horizontal" role="form">
            <div class="pull-left horz-block half">
                <fieldset>
                    <h4>ข้อมูลผู้สั่ง</h4>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อองค์กร</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="customer[organize]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ประเภท</label>
                        <div class="col-sm-8">
                            <select name="customer[organize_type]">
                                <option value="school">โรงเรียน</option>
                                <option value="school">ร้านค้า</option>
                                <option value="school">องค์กร</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อผู้ซื้อ</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="customer[name]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ที่อยู่</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="customer[addres]"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">โทรศัพท์</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="customer[phone]">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">email</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="customer[email]">
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="pull-left horz-block half">
                <fieldset>
                    <h4>รายละเอียด</h4>
                    <div class="form-group">
                        <label class="col-sm-3 control-label"></label>
                        <div class="col-sm-8">
                            <label><input type="radio" name="organize[type]"> Standard Package</label><br />
                            <label><input type="radio" name="organize[type]"> Premium Package</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">เพิ่มเติม</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" name="customer[addres]" style="min-height: 200px;"></textarea>
                        </div>
                    </div>
                </fieldset>
            </div>
            <div class="clearfix"></div>
            <div class="text-center" style="padding-top: 20px;">
                <button type="submit" class="btn btn-success" style="width: 140px;">ส่งข้อมูล</button>
                <p class="text-center">
                    ภายในส่งข้อมูล เจ้าหน้าจะทำการติดต่อกลับภายใน 1 วันทำการ ขอบคุณค่ะ
                </p>
            </div>
        </form>
    </div>
</div>
<style type="text/css">

</style>