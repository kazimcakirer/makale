</div> <!-- container -->

</div> <!-- content -->

<footer class="footer text-right">
    2018 © Highdmin. - Coderthemes.com
</footer>

</div>

</div>
<!-- END wrapper -->



<!-- jQuery  -->
<script src="<?= public_admin_url('/js/jquery.min.js') ?>"></script>
<script src="<?= public_admin_url('/js/popper.min.js') ?>"></script>
<script src="<?= public_admin_url('/js/bootstrap.min.js') ?>"></script>
<script src="<?= public_admin_url('/js/metisMenu.min.js') ?>"></script>
<script src="<?= public_admin_url('/js/waves.js') ?>"></script>
<script src="<?= public_admin_url('/js/jquery.slimscroll.js') ?>"></script>

<!-- Jquery Ui js -->
<script src="<?= public_admin_url('plugins/jquery-ui/jquery-ui.min.js') ?>"></script>

<!-- App js -->
<script src="<?= public_admin_url('/js/jquery.core.js') ?>"></script>
<script src="<?= public_admin_url('/js/jquery.app.js') ?>"></script>

<script>
    $(document).ready(function() {

        $("#upcoming, #inprogress, #completed").sortable({
            connectWith: ".taskList",
            placeholder: 'task-placeholder',
            forcePlaceholderSize: true,
            update: function(event, ui) {

                var todo = $("#todo").sortable("toArray");
                var inprogress = $("#inprogress").sortable("toArray");
                var completed = $("#completed").sortable("toArray");
            }
        }).disableSelection();

    });
</script>

</body>

</html>