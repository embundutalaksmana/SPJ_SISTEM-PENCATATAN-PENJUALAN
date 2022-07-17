<div class="container-fluid">
     <div class="row"> 
        <div class="col-xl-4 col-md-6 mb-4"> 
            <div class="card border-left-primary shadow h-100 py-2"> 
                <div class="card-body"> <div class="row no-gutters align-items-center"> 
                    <div class="col mr-2"> <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Jumlah Barang
                    </div> 
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $barang ?>
                    </div> 
                </div> 
                <div class="col-auto"> 
                    <i class="fas fa-book fa-2x text-gray-300"></i> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 


<div class="col-xl-4 col-md-6 mb-4"> 
    <div class="card border-left-success shadow h-100 py-2"> 
        <div class="card-body"> 
            <div class="row no-gutters align-items-center"> 
                <div class="col mr-2"> 
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                        Jumlah Pencatatan
                    </div> 
                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <?= $pencatatan ?>
                    </div>
                </div> 
                <div class="col-auto"> 
                    <i class="fas fa-shopping-cart fa-2x text-gray-300"></i> 
                
                </div> 
            </div> 
        </div> 
    </div> 
</div> 
</div> 
<div class="card shadow mb-4"> 
    <div class="card-body"> 
        <div class="chart-bar"> 
            <canvas id="myChart">

            </canvas> 
        </div> 
    </div> 
</div> 
</div> 
</div>