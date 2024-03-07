<?php include("header.php"); ?>


<?php 
if (isset($_GET["page"]) ) {
    $page = $_GET["page"];
    if ($page=="teenused"){
        include("teenused.php");
    }else if($page=="kontakt"){
        include("kontakt.php");
    }

}else {
?>
<h1>Avaleht</h1>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
     Eligendi illo molestias commodi obcaecati fugiat, a dolore numquam temporibus expedita,
      aliquid ducimus ea magnam aut pariatur error reiciendis dolor delectus et.</p>

<?php
}

?>

<?php include("footer.php"); ?>


          
