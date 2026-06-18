<?php
$h2_color="blue";
 echo "<h1 style ='color:red' >php with html</h1>";
 echo "<h1 style ='color:green' >php with html</h1>";

?>

<?php
$name="Saurabh";
echo "<h1 style='color:blue'>My name is ".$name."</h1>";
?>

<h1 style="color:yellow">
    My real name is <?php echo $name; ?>
</h1>

<h2 style="color:<?php echo $h2_color;?>"> <?php echo "This is h2 tag"; ?></h2>
<h2 style="color:<?php echo $h2_color;?>"> <?php echo $name ?></h2>
<h2 style="color:<?php echo $h2_color;?>">My name is <?php echo $name ?> </h2>

