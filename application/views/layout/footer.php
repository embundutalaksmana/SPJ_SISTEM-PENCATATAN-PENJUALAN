            <!-- Footer -->
            
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Embun Duta Laksmana 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->


        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Keluar</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" jika anda yakin untuk keluar.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?=base_url('auth/logout'); ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?=base_url('assets/')?>plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?=base_url('assets/')?>bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/')?>js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src=<?=base_url('assets/')?>"js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?=base_url('assets/')?>js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?=base_url('assets/')?>js/custom.js"></script>
    <!-- Page level plugins -->
    <script src="<?=base_url('assets/')?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?=base_url('assets/')?>vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="<?=base_url('assets/')?>js/demo/datatables-demo.js"></script>
    <script src="<?=base_url('assets/')?>plugins/bower_components/chartist/dist/chartist.min.js"></script>
    <script src="<?=base_url('assets/')?>plugins/bower_components/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?=base_url('assets/')?>js/pages/dashboards/dashboard1.js"></script>
    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        })
        $(document).ready(function() {
            $("#jumlah").on('keydown keyup change blur', function() {
                var harga = $("#harga").val();
                var jumlah = $("#jumlah").val();
                var total = parseInt(harga) * parseInt(jumlah);
                $("#total").val(total);
                if (parseInt($('input[name="stok"]').val()) <= parseInt(jumlah)) {
                    alert('stok tidak tersedia! stok tersedia : ' + parseInt($('input[name="stok"]').val()))
                    reset()
                }
            });
            function reset() {
                $('input[name="jumlah"]').val('')
                $('input[name="total"]').val('')
            }
        })
    </script>
    <script type="text/javascript"> 
    var ctx = document.getElementById('myChart').getContext('2d'); 
    var chart = new Chart(ctx, { 
        type:  'bar', 
        data: { 
            labels: [ 
                <?php foreach ($grfk as $data) { 
                    echo "'" . $data['barang'] . "',"; 
                    } ?> 
                    ], 
                    datasets: [{
                         label: 'Jumlah  Terjual', 
                         backgroundColor: "#4e73df", 
                         hoverBackgroundColor: "#2e59d9",
                         borderColor: "#4e73df", data: [ 
                            <?php foreach ($grfk as $data) { 
                                echo $data['jumm'] . ", "; 
                                } ?> ] 
                                }] 
                            }, 
                            options: { 
                                maintainAspectRatio: false, 
                                layout: { 
                                    padding: { 
                                        left: 10, 
                                        right: 25, 
                                        top: 25, 
                                        bottom: 0 } 
                                    }, 
                                    scales: { 
                                        xAxes: [{ 
                                            time: { 
                                                unit: 'barang'
                                             }, 
                                                gridLines: { 
                                                    display: false, 
                                                    drawBorder: false 
                                                }, 
                                                    ticks: { 
                                                        maxTicksLimit: 20 
                                                    },
                                                    maxBarThickness: 50, 
                                                }],
                                                 yAxes: [{ 
                                                    gridLines: { 
                                                        color: "rgb(234, 236, 244)", 
                                                        zeroLineColor: "rgb(234, 236, 244)", 
                                                        drawBorder: false,
                                                        borderDash: [2], 
                                                        zeroLineBorderDash: [2] } 
                                                    }], 
                                                }, 
                                                tooltips: { 
                                                    titleMarginBottom: 10, 
                                                    titleFontColor: '#6e707e', 
                                                    titleFontSize: 14, 
                                                    backgroundColor: "rgb(255,255,255)", 
                                                    bodyFontColor: "#858796", 
                                                    borderColor: '#dddfeb', 
                                                    borderWidth: 1, 
                                                    xPadding: 15, 
                                                    Padding: 15,
                                                    displayColors: false, 
                                                    caretPadding: 10, 
                                                    },   
                                    } 
                                                    }); 
</script>
</body>

</html>