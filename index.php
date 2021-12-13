<html>
<head>
    <title>Форма</title>
    <meta charset="UTF-8">
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
    Введіть ПІБ: <input type="text" name="name"><br>
    <input type="submit">
</form>
<?php
if (!empty($_POST['name'])) {
    
   
    $name = trim($_POST['name']); 
    
    
    $posOfFirstSpace=mb_strpos($name, " ");
    $familyName= mb_substr($name,0,  $posOfFirstSpace);
    $initials[0]=mb_strtoupper(mb_substr($familyName, 0, 1));
    
    $partOfName= trim(mb_substr($name, $posOfFirstSpace, mb_strlen($name)));
    
    $posOfFirstSpace=mb_strpos($partOfName, " ");
    $firstName= mb_substr($partOfName,0, $posOfFirstSpace);
    $initials[1]=mb_strtoupper(mb_substr($firstName, 0, 1));
    
    $partOfName= trim(mb_substr($partOfName, $posOfFirstSpace, mb_strlen($name)));
    
    $patronym=mb_substr($partOfName,0, mb_strlen($partOfName));
    $initials[2]=mb_strtoupper(mb_substr($patronym, 0, 1));
    
    
    
    
    echo "Ініціали: $initials[0]$initials[1]$initials[2]";
   
   
   
   
}
?>

</body>
</html>
