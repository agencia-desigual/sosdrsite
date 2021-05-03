</div>
</div>
<!--   Core JS Files   -->
<script src="<?= base_url(); ?>arquivos/assets-painel/js/core/jquery.min.js"></script>
<script src="<?= base_url(); ?>arquivos/assets-painel/js/mascara.1.4.1.js"></script>
<script src="<?= base_url(); ?>arquivos/assets-painel/js/core/popper.min.js"></script>
<script src="<?= base_url(); ?>arquivos/assets-painel/js/core/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>arquivos/assets-painel/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/8.11.8/sweetalert2.all.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?= base_url(); ?>arquivos/assets-painel/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?= base_url(); ?>arquivos/assets-painel/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
<!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="<?= base_url(); ?>arquivos/assets-painel/demo/demo.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script src="<?= base_url(); ?>arquivos/assets-painel/js/funcoes.js"></script>
<script>

    $(document).ready(function () {

        // -- Summernotee
        $('#summernote').summernote({
            placeholder: 'Faça a descrição da publicação aqui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'italic', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['view', ['fullscreen']],
                ['insert', ['link', 'picture', 'video']],
            ],
            callbacks: {
                onPaste: function (e) {
                    var bufferText = ((e.originalEvent || e).clipboardData || window.clipboardData).getData('Text');

                    e.preventDefault();

                    // Firefox fix
                    setTimeout(function () {
                        document.execCommand('insertText', false, bufferText);
                    }, 10);
                }
            }

        });
        // END >> Summernote


    });
</script>
</body>

</html>