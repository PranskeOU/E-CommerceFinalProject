<?php require_once("header.php"); ?>
<!DOCTYPE html>
<html>
<head>
<title> EduCba </title>
<style>
li{ display: inline-flex;
padding: 25px
}
section{
background-color: #607D8B;
width: 79%;
position: absolute;
height: 150px;
}
article{
width: 79%;
background-color: #607d8bc7;
position: absolute;
top: 368px;
height: 150px;
}
aside{
background-color: #607d8bde;
width: 20%;
position: absolute;
left: 80%;
height: 300px;
}
h2 , p {
text-align: center;
color: #fff;
}
ul{
text-align: center;
}
details {
margin-top: 330px;
width: 100%;
padding-top: 10px;
padding-bottom: 50px;
padding-left: 15px;
background-color: #607d8bdb;
}
details p {
font-size: 18px;
}
summary {
color: white;
font-size: 22px;
}
</style>
</head>
<body>

<div class = "main">
<section>
<h2> Section Part </h2>
<p> Some Text </p>
</section>
<article>
<h2> Article Part</h2>
<p> Some Detailed Text </p>
</article>
<aside>
<h2> Sidebar Part </h2>
<p> This will contain static part or anything like advertisement etc. </p>
</aside>
</div>
<details>
<summary> Summary: click here to show details </summary>
<p> Details: Upon clicking summary element, details will be shown to the user </p>
</details>
<footer style = " height: 100px; background-color:#607D8B; width: 100%; text-align: center;">
<h3 style = " color: #fff; text-align: center; padding-top: 10px; font-size: 30px; " >Footer Section</h3>
<p> © Copyright ( Year ) </p>
</footer>
</body>
</html>
