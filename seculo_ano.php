<?php

function seculo_ano(int $year)
{
  $century = ceil($year / 100);
  echo "século {$century}", PHP_EOL;
}

seculo_ano(1905);
seculo_ano(1700);