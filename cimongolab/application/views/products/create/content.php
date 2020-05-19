<section class="htc__product__grid bg__white ptb--100">
    <div class="container">
    <h2>สร้างสินค้า</h2>
    </br>
    <form method="post" action="<?php echo base_url('products/save'); ?>">
        <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>ชื่อสินค้า</label> <span class="text-denger">*</span>
                        <input type="text" class="form-control" name="name" placeholder="ชื่อสินค้า"  required>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label >ราคา/ชิ้น</label><span class="text-denger">*</span>
                        <input type="number" class="form-control" name="price" placeholder="ราคา/ชิ้น" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label >หมวดหมู่</label><span class="text-denger">*</span>
                        <select class="form-control" name="categories" required>
                        <option>เลือกหมวดหมู่สินค้า</option>
                        <?php foreach ($Car as $key => $row) {?>
                            <option value="<?php echo $row['_id']?>"><?php echo $row['name_car']?></option>
                        <?php } ?>
                        
                        </select>
                    </div>
                </div>
            
            </div> 
            <p class="text-center"><button type="submit" class="btn btn-success"><i class="fas fa-save"></i>บันทึก</button> </p>     
        
    </form>
       
    </div>
</section>