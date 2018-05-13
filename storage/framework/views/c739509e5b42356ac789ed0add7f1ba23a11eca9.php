<!DOCTYPE>
<html>
<head>
    <title>Contact Us Email</title>
</head>
 
<body>

<h2>Name<b></b></h2>
<p> <?php echo e($data['name']); ?> </p>
<br>
<h2>Subject<b></b></h2>
<p> <?php echo e($data['subject']); ?> </p>
<br>
<h2>Message<b></b></h2>
<p> <?php echo e($data['message']); ?> </p>
<br>

</body>
 
</html>