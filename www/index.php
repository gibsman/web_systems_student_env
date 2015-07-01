<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php
include_once 'Router.php';

// вызывает {module}.routes.php
Router::process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);
?>
</body>
</html>