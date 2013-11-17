chapter: Dynamic Content and the Web
==================
Example: A PHP function to insert a comment into a comments database table
<?php
//A function to insert a comment into a comments table based on
//the $comment parameter.
//The database name is also a parameter

function add_comment($comment,$database){
    // Add a comment
    // As a security measure, escape any special characters in comment.
    $comment=mysql_real_escape_string($comment);

    // This is the SQL command
    $sql_insert = "INSERT INTO 'comments' (body) VALUES ('$comment')";

    // Select the database
    mysql_select_db($database);

    $success = mysql_query($sql_insert) or die(mysql_error(  ));

    // print the page header
    print('
        <html>
            <head>
                <title>Remove User</title>
                <link rel="stylesheet" type="text/css" href="example.css" />
            </head>
            <body>
                <div class="comments">');

    // Check to see if the insert was successful
    if ($success){
        // Tell the user it was successful
        print("The comment $comment was inserted successfully.");
    }
    else {
        // Tell the user it was not successful
        print("The comment $comment could not be inserted. Please try again later.");
    }

    // Print the page footer
    print('</div></body></html>');
}

?>

    
    
====================================
Example: A PHP Smarty template
<html>
    <head>
        <title>My Books</title>
    </head>
    <body>
        <p>Favorite Books:</p>
        <p>
            Title: {$title}<br />
            Author: {$author}
        </p>
    </body>
</html>

    
    
====================================
Example: The resulting HTML code after template substitution and processing
<html>
    <head>
        <title>My Books</title>
    </head>
    <body>
        <p>Favorite Books:</p>
        <p>
            Title: Java in a Nutshell<br />
            Author: Flanagan
        </p>
    </body>
</html>

    
    
====================================

<html>
    <head>
        <title>CSS Example</title>
        <style type="text/css">
            h4, b {color: #80D92F; font-family: arial; }
            p { text-indent: 2cm; background: yellow; font-family: courier;}
        </style>
    </head>

    <body>
        <h3>Learn how to use CSS on your web sites!</h3>
        <h4>It's cool, it's amazing, it even saves you time!</h4>
        <p>Isn't this <b>nifty</b>?</p>
    </body>
</html>

    
    
====================================

<tag>Isn't this nifty?</tag>

    
    
====================================

<h3>Learn how to use CSS on your web sites!</h3>

    
    
==================