<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
SELECT node.nid AS nid,
   node_data_field_proyecto_screenshot.field_proyecto_screenshot_fid AS node_data_field_proyecto_screenshot_field_proyecto_screenshot_fid,
   node_data_field_proyecto_screenshot.field_proyecto_screenshot_list AS node_data_field_proyecto_screenshot_field_proyecto_screenshot_list,
   node_data_field_proyecto_screenshot.field_proyecto_screenshot_data AS node_data_field_proyecto_screenshot_field_proyecto_screenshot_data,
   node.type AS node_type,
   node.vid AS node_vid,
   node_data_field_proyecto_screenshot.field_proyecto_nombre_cliente_value AS node_data_field_proyecto_screenshot_field_proyecto_nombre_cliente_value,
   node_data_field_proyecto_screenshot.field_proyecto_descripcion_value AS node_data_field_proyecto_screenshot_field_proyecto_descripcion_value
 FROM node node 
 LEFT JOIN content_type_proyecto node_data_field_proyecto_screenshot ON node.vid = node_data_field_proyecto_screenshot.vid
 WHERE node.type in ('proyecto')

SELECT node.nid AS nid, 
node_data_field_proyecto_screenshot.field_proyecto_screenshot_fid AS node_data_field_proyecto_screenshot_field_proyecto_screenshot_fid, 
node_data_field_proyecto_screenshot.field_proyecto_screenshot_list AS node_data_field_proyecto_screenshot_field_proyecto_screenshot_list,
node_data_field_proyecto_screenshot.field_proyecto_screenshot_data AS node_data_field_proyecto_screenshot_field_proyecto_screenshot_data,
node.type AS node_type, 
node.vid AS node_vid, 
node_data_field_proyecto_screenshot.field_proyecto_nombre_cliente_value AS node_data_field_proyecto_screenshot_field_proyecto_nombre_cliente_value FROM node node  LEFT JOIN content_type_proyecto node_data_field_proyecto_screenshot ON node.vid = node_data_field_proyecto_screenshot.vid WHERE node.type in ('proyecto')