<!-- start footer.php -->
</div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/jquery/jquery.min.js' ?> "></script>
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/jquery-ui/jquery-ui.min.js' ?> "></script>
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/popper.js/popper.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/bootstrap/js/bootstrap.min.js' ?> "></script>
    <!-- waves js -->
    <script src="<?php echo roothtml.'lib/assets/pages/waves/js/waves.min.js' ?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/jquery-slimscroll/jquery.slimscroll.js' ?>">
    </script>

    <!-- slimscroll js -->
    <script src="<?php echo roothtml.'lib/assets/js/jquery.mCustomScrollbar.concat.min.js' ?> "></script>

    <!-- menu js -->
    <script src="<?php echo roothtml.'lib/assets/js/pcoded.min.js' ?>"></script>
    <script src="<?php echo roothtml.'lib/assets/js/vertical/vertical-layout.min.js' ?> "></script>

    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/script.js' ?> "></script>
    <script>
    $(document).ready(function() {
        $(document).on("click", "#btnlogout", function(e) {
            e.preventDefault();
            swal({
                    title: "Answer ?",
                    text: "Are you sure Exit!",
                    type: "info",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes,Sure!",
                    closeOnConfirm: false
                },
                function() {
                    $.ajax({
                        type: "post",
                        url: "<?php echo roothtml.'index_action.php' ?>",
                        data: {
                            action: 'logout'
                        },
                        success: function(data) {
                            if (data == 1) {
                                location.href =
                                    "<?php echo roothtml.'index.php' ?>";
                            }
                        }
                    });
                });
        });

    });
    </script>
</body>

</html>

