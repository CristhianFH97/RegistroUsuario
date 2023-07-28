<?php
/* Smarty version 4.3.1, created on 2023-07-13 03:01:30
  from 'C:\xampp\htdocs\jueves\semana8\view\templates\calculadora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64af4cea17cc61_94258574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40d9214002b3a2cd67884eae3c28d8f6f5d09684' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jueves\\semana8\\view\\templates\\calculadora.tpl',
      1 => 1688094336,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64af4cea17cc61_94258574 (Smarty_Internal_Template $_smarty_tpl) {
?> 
        <?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <form action="index.php" method="post">
            <input type="hidden" name="accion" value="calcular">
        <table border="1">
                <tr>
                    <td> Valor 1</td>
                    <td><input type="number" name="v1"></td>
                </tr>
                <tr>
                    <td>Operador</td>
                    <td>
                        <select name="cbo_operacion">
                            <option value="+">Sumar</option>
                            <option value="-">Menos</option>
                            <option value="*">Multiplicaci&oacute;n</option>
                            <option value="/">Divisi&oacute;n</option>
                        </select>  
                                                    
                    </td>
                </tr>
                <tr>
                    <td>Valor 1</td>
                    <td><input type="number" name="v2"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <center>
                                <input type="submit" value="Calcular">
                        </center>
                    </td>
                     
                </tr>
        </table>
        </form>
   <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
