<?php
/* Smarty version 4.3.1, created on 2023-06-30 05:06:57
  from 'C:\xampp\htdocs\jueves\semana7\view\templates\calculadora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_649e46d167e388_82177402',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4f7de4f7e05821c05a7ffd54af24bc41851be57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\jueves\\semana7\\view\\templates\\calculadora.tpl',
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
function content_649e46d167e388_82177402 (Smarty_Internal_Template $_smarty_tpl) {
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
