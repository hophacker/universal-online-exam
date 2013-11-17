<?php
echo $html->css('default');

echo $html->link(
    'Add New Product',
    array(
      'controller' => 'Student', 
      'action'     => 'add', 
    ),
    array(

    ),
    null
);
?>


<table>

<?php 

echo $html->tableHeaders(
    array(
      's_user',
      's_num',
      's_name',
      's_mail'
    )
  );

foreach($students as $student)
{
  echo $html->tableCells(
      array(
        array(
          $student['students']['s_user'],
          $student['students']['s_num'],
          $student['students']['s_name'],
          $student['students']['s_mail']
        )
      )
    );
}

?>

</table>

<?php

echo $html->div(
  null,
  $paginator->prev(
    '<< Previous', 
    array(
      'class' => 'PrevPg'
    ), 
    null, 
    array(
      'class' => 'PrevPg DisabledPgLk'
    )
  ).
  $paginator->numbers().
  $paginator->next(
    'Next >>', 
    array(
      'class' => 'NextPg'
    ), 
    null, 
    array(
      'class' => 'NextPg DisabledPgLk'
    )
  ),
  array(
    'style' => 'width: 100%;'
  )
);  

?>
