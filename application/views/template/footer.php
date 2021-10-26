            </div>
            </div>
            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="<?= base_url() ?>assets/js/scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

            <script>
            	$(document).ready(() => {
            		<?php if (isset($_SESSION['toast'])) { ?>
            			toastr.options.closeButton = true;
            			var toastvalue = "<?php echo $_SESSION['toast'] ?>";
            			var status = toastvalue.split(":")[0];
            			var message = toastvalue.split(":")[1];
            			if (status === "success") {
            				toastr.success(message, status);
            			} else if (status === "error") {
            				toastr.error(message, status);
            			} else if (status == "warn") {
            				toastr.warning(message, status);
            			}
            		<?php } ?>
            	});
            </script>
            </body>

            </html>
