function my_php_function3($item)
{
	$result = array();
   for ($index = 0; $index < $item->count(); $index++)
   {
   	$result[] = $item[$index] + 2;
   }
   return $result;
}

