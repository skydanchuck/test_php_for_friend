<?php
const Items = [
  '/' => [
    'title' => 'Hueta',
    'content' => 'Menu
<ul>
  <li><a href="bla_raz.html">Bla raz</a></li>
  <li><a href="bla_dva.html">Bla dva</a></li>
</ul>'
  ],
  '/bla_dva.html' => [
    'title' => 'Awesome title 1',
    'content' => 'Awesome content 1'
  ],
  '/bla_raz.html' => [
    'title' => 'Lorem ipsum',
    'content' => 'dolor sit amet <img src="images/cat.jpg"/>'
  ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?php echo Items[$_SERVER["REQUEST_URI"]]['title']; ?></title>
</head>
<body>
<?php echo Items[$_SERVER["REQUEST_URI"]]['content']; ?>
<pre>
<!--    --><?php //var_dump($_SERVER); ?>
</pre>
</body>
</html>