<html>
  <body>
    <h1>Welcome to ESI Demo!</h1>
    <h2>developed by Ashwaq Shaik</h2>
    <p>for practice on ESI attack</p>

    <!-- Simulating ESI (edge side include) -->
    <esi:include src="/secret.php" />

    <!-- Normal content -->
    <p>Today's Date: <?php echo date("Y-m-d"); ?></p>
  </body>
</html>
