<?php // inc Header

if ($SEC_check != $CONFIG['SEC_Page_Secret']) exit;

if (!isset($PATH_2_ROOT)) $PATH_2_ROOT = '';
?>



<header id="header-logo">
    <div class="container-logo">
        <table style="width:100%; border-spacing:0;"><tr>
            <td style="text-align:right;"><img src="<?=$PATH_2_ROOT;?>img/Intellite_Foto_Header.PNG" alt="Intellite"></td>
        </tr></table>
    </div>
</header>