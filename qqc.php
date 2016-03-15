<?php

require 'config.php';


// Security check
$result=restrictedArea($user,'societe',0,'','','','');

$thirdparty_static = new Societe($db);


/*
 * View
 */
global $db, $user;

llxHeader();
print load_fiche_titre($transAreaType,$linkback);


$form = new Form($db);
?>
    <div class="">
        <form method="post" name="formQQC">
            <table width="100%">
                <tr class="liste_titre">
                    <td colspan=3>
                        <label>Utilisateur :</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Sélectionnez l'utilisateur pour lequel saisir le QQC :</label>
                    </td>
                    <td colspan=2>
                        <?php 
                        print $form->select_users();
                        ?>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Sélectionnez le jour pour lequel vous voulez saisir le QQC :</label>
                    </td>
                    <td colspan=2>
                        <?php 
                        print $form->select_date();
                        ?>
                    </td>
                    <td>
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Saisissez le contenu de votre QQC :</label>
                    </td>
                    <td colspan=2>
                        <?php 
                        print $form->select_date();
                        ?>
                    </td>
                    <td>
                        
                    </td>
                </tr>
            </table>
        </form>
        
    </div>

<?php






llxFooter();

