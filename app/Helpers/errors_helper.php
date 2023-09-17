<?php
function myErrorHandler($no, $msg, $file, $line)
{
  outArray($no);
  outArray($msg);
  outArray($file);
  outArray($line);  
}