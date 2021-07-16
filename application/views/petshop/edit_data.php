<div class="content-wrapper">
<section class="content">
<div class="container-fluid"> 

<div class="container">

<div class="row-3">
<div class="col-d-6">

            <div class="card">
            <div class="card-header">
                Tambah Data
            </div>
            <div class="card-body">
            <form method="post" action="<?php echo base_url('petshop/proses_edit_data') ?>" >

            <input type="hidden" name="id" value="<?php echo $petshop['id']; ?>">

                        <div class="form-group">
                            <label for="petshop">Nama Petshop</label>
                            <input type="text" class="form-control" name="petshop" id="petshop" 
                            required=""  value="<?php echo $petshop['petshop']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="koordinat">Koordinat</label>
                            <input type="varchar" class="form-control" name="koordinat" id="koordinat" 
                            required="" value="<?php echo $petshop['koordinat']; ?>">
                        </div>
                        <button type="reset" class="btn btn-danger">Reset </button>

                    </from>
                    </div>
                    </section>
                    </div>
                </div>
            </div>




</div>

</div>

</div>