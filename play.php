<?php
var_dump($_POST);
foreach($_POST['tag'] as $bla){
    echo $bla . "<br>";
}
//exit;
$articles = [
    'statiata na pesho',
    'druga statia',
    'treta st.',
];
if(isset($_POST['send'])){
    $articles[] = $_POST['title'];
}

echo "<ol>";
foreach($articles as $index=>$val){
    echo "<li><a href='?id=$index'>$val</a></li>";
}
echo "</ol>";
echo "<hr>";
if(!isset($_GET['id'])){
    echo 'There is no allocated article.';
}else{
    $id=$_GET['id'];
    if(!isset($articles[$id])){
        echo 'Such an article doesnt exist.';
    }
        $val = intval($articles[$id]);
        echo $val;
    
}
echo "<hr>";
echo "<a href='article.php'>Create a new article</a>";