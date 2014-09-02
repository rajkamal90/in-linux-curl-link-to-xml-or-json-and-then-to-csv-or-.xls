//paste your curl link in the terminal

//followed by >> file  name /../path to save the xml or json file

//run the script below
//after giving the script path .
//>> write the file name example xxx.csv





<?php
$parser=xml_parser_create();

function char($parser,$data)
  {
  echo $data.',';
  }

xml_set_character_data_handler($parser,"char");
$fp=fopen("....path/xxx.xml","r");// path to your file
echo ',your header coulumns name put here seperated by coulumns';
while ($data=fread($fp,4096))
  {
  xml_parse($parser,$data,feof($fp)) or
  die (sprintf("XML Error: %s at line %d",
  xml_error_string(xml_get_error_code($parser)),
  xml_get_current_line_number($parser)));

  }

xml_parser_free($parser);
?> 
