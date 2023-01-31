<style type="text/css">
#ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
</style>
</head>

<body>
<form method="post" action="sendemail.php">
Username:<br />
  <input type="text" name="user" id="ed" /><br />
Email Address:<br />
  <input name="email" type="text" id="ed" size="50" />
  <br />
<input name="submit" type="submit" value="Send my password to email" id="button" />


</form>