</div>
<!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2025-2026 <a href="">StudentMS</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="dist/js/demo.js"></script>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function () {
  var path = window.location.href;

  $('.nav-link').each(function () {
    var href = $(this).prop('href'); // absolute URL

    if (path === decodeURIComponent(href)) {
      $(this).addClass('active');

      var parent = $(this).closest('.has-treeview');
      parent.addClass('menu-open');
      $(parent).find('.nav-link').first().addClass('active');
    }
  });
});
</script>
</body>
</html>
