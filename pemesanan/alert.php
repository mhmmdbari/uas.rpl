<?php
if(isset($_SESSION["alert"])){ ?>
<script>
   alert('<?php echo $_SESSION["alert"] ?>')
</script>
<?php
unset($_SESSION["alert"]);
}
?>