<html>
<head>
<title>Info</title>
</head>
<body>

<pre>
User Information:

Name: {$name}
Address: {$address}
</pre>
<ul>
{foreach $names as $name}
{strip}
  <li>{$name}</li>
{/strip} 
{/foreach}
{foreach $dbrows as $dbrow}
{strip}
  <li>{$dbrow['firstname']}  {$dbrow['lastname']}</li>
{/strip} 
{/foreach}


{section name=loopindex
loop=$names}
        <li style="background:#5e564e">{$names[loopindex]}</li>
{/section}
</ul>
</body>
</html>