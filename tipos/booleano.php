<div class="titulo">Tipo Booleano</div>

<?php
echo TRUE;
echo '<br>';
echo false;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' . is_bool(false);
echo '<br>' . is_bool('false');

echo '<br> Regras de conversões:';
echo '<br> 0 é o único que será convertido para false, nos inteiros';
echo '<br> Input = var_dumo((bool)0)';
echo '<br>', var_dump((bool) 0);
echo '<br> Input = var_dumo((bool)20)';
echo '<br>', var_dump((bool) 20);
echo '<br> Input = var_dumo((bool) -1)';
echo '<br>', var_dump((bool) -1);
echo '<br> Input = var_dumo((bool)0.0)';
echo '<br>', var_dump((bool) 0.0);
echo '<br> Input = var_dumo((bool)0.000000001)';
echo '<br>', var_dump((bool) 0.000000001);
echo '<br> Input = var_dumo((bool)"")';
echo '<br>', var_dump((bool) "");
echo '<br> Input = var_dumo((bool)" ")';
echo '<br>', var_dump((bool) " ");
echo '<br> Input = var_dumo((bool)"0")';
echo '<br>', var_dump((bool) "0");
echo '<br> Input = var_dumo((bool)"00")';
echo '<br>', var_dump((bool) "00");
echo '<br> Input = var_dumo(!"false")';
echo '<br>', var_dump(!"false");
echo '<br> Input = var_dumo(!!"false")';
echo '<br>', var_dump(!!"false");
?>