<html>
  <body>
    <h1>Welcome to ESI Demo!</h1>

    <!-- Simulating ESI (edge side include) -->
    <esi:include src="/secret.php" />

    <!-- Normal content -->
    <p>Today's Date: <?php echo date("Y-m-d"); ?></p>
  </body>
</html>
