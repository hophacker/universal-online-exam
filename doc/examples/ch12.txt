chapter: XHTML
==================

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML LANG="en">
   <HEAD>
      <TITLE>A simple HTML document</TITLE>
   </HEAD>
   <BODY>
      <P>Hello world! <BR>
      Can anybody hear me?
   </BODY>
</HTML>

    
    
====================================

<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"
 lang="en">
   <head>
      <title>A simple XHTML document</title>
   </head>
   <body>
      <p>Hello world! <br />
      Can anybody hear me?</p>
   </body>
</html>

    
    
====================================

<html xmlns="http://www.w3.org/1999/xhtml" >

    
    
====================================

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

    
    
====================================

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

    
    
====================================

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">

    
    
====================================

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">

    
    
====================================

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 2.0//EN"
    "http://www.w3.org/MarkUp/DTD/xhtml2.dtd">

    
    
====================================
Example: A document defined as xhtml 1.0 strict
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Document Type Declaration Example</title>
    </head>
    <body>
        <p>The content of the page goes here.</p>
    </body>
</html>

    
    
====================================

<?xml version="1.0" encoding="UTF-8"?>

    
    
====================================
Example: Adding a validation link as validate.html
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Document Type Declaration Example</title>
    </head>
    <body>
        <p>The content of the page goes here.
            <a href="http://validator.w3.org/check/referer">Validate</a> </p>
    </body>
</html>

    
    
====================================
Example: Adding a couple of errors to validate_error.html
<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <title>Document Type Declaration Example</title>
    </head>
    <body>
        <p>The content of the page goes here.<br>
            <a href="http://validator.w3.org/check/referer">Validate</a>
    </body>
</html>

    
    
====================================

header('Content-Type: application/xhtml+xml; charset=utf-8');

    
    
====================================
Example: Creating an XHTML document from PHP
<?php
//Ask the browser if it knows about the application/xthml+xml MIME type
//This is necesary because of IE
if(stristr($_SERVER["HTTP_ACCEPT"],"application/xhtml+xml")) {
    header('Content-Type: application/xhtml+xml; charset=utf-8');
}
else {
    header('Content-Type: text/html; charset=utf-8');
}

//Create the document type
$doctype  = '<?xml version="1.0" encoding="UTF-8"?>';
$doctype .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" ';
$doctype .= '    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> ';

//Create the heading
$head=      '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">';
$head    .= '    <head>';
$head    .= '        <title>Document Type Declaration Example</title>';
$head    .= '    </head>';

//Create the body text
$body     = '    <body>';
$body    .= '         <p>The content of the page goes here.</p>';
$body    .= '    </body>';

//Create the footer text
$footer   = '</html>';

//Display it all together
echo $doctype;
echo $head;
echo $body;
echo $footer;
?>

    
    
==================