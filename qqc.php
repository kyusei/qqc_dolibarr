<?php

require 'config.php';
dol_include_once('core/class/html.formprojet.class.php');


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
$formcore = new TFormCore;
$formProjet = new FormProjets($db);
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
                <tr class="liste_titre">
                    <td colspan="3">
                        <label>Saisissez vos taches  :</label>
                    </td>

                </tr>
                <tr>
                    <td colspan="3">
                        <?php 
                        print $formProjet->selectTasks(-1, '', 'task1_id');
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <?php 
                        print $formProjet->selectTasks(-1, '', 'task2_id');
                        ?>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <?php 
                        print $formProjet->selectTasks(-1, '', 'task3_id');
                        ?>
                    </td>
                </tr>

                <tr>
                </tr>
            </table>
        </form>
        
    </div>

<?php






llxFooter();

