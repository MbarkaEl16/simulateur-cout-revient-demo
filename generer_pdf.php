<?php

// Calcul des valeurs (assurez-vous que ce code est exécuté avant l'affichage)
// Collecter les données du formulaire
$data = array();

if (isset($_POST['Poisson'])) {
    $data['Poisson'] = $_POST['Poisson'];
}
if (isset($_POST['Nature_Poisson'])) {
    $data['Nature_Poisson'] = $_POST['Nature_Poisson'];
}
if (isset($_POST['Nature_traitement'])) {
    $data['Nature_traitement'] = $_POST['Nature_traitement'];
}
if (isset($_POST['jus'])) {
    $data['jus'] = $_POST['jus'];
}
if (isset($_POST['format'])) {
    $data['format'] = $_POST['format'];
}
if (isset($_POST['marque'])) {
    $data['marque'] = $_POST['marque'];
}
if (isset($_POST['Sauce'])) {
    $data['Sauce'] = $_POST['Sauce'];
}
if (isset($_POST['uniteVente'])) {
    $data['unite de vente'] = $_POST['uniteVente'];
}
if (isset($_POST['Inco'])) {
    $data['incotherm'] = $_POST['Inco'];
}
if (isset($_POST['marge'])) {
    $data['Marge'] = $_POST['marge'];
}
if (isset($_POST['quantite1'])) {
    $data['quantite1'] = $_POST['quantite1'];
}
if (isset($_POST['coutAchat1'])) {
    $data['coutAchat1'] = $_POST['coutAchat1'];
}

if (isset($_POST['quantite2'])) {
    $data['quantite2'] = $_POST['quantite2'];
}
if (isset($_POST['coutAchat2'])) {
    $data['coutAchat2'] = $_POST['coutAchat2'];
}

if (isset($_POST['quantite3'])) {
    $data['quantite3'] = $_POST['quantite3'];
}
if (isset($_POST['coutAchat3'])) {
    $data['coutAchat3'] = $_POST['coutAchat3'];
}

if (isset($_POST['quantite4'])) {
    $data['quantite4'] = $_POST['quantite4'];
}
if (isset($_POST['coutAchat4'])) {
    $data['coutAchat4'] = $_POST['coutAchat4'];
}

if (isset($_POST['quantite5'])) {
    $data['quantite5'] = $_POST['quantite5'];
}
if (isset($_POST['coutAchat5'])) {
    $data['coutAchat5'] = $_POST['coutAchat5'];
}

if (isset($_POST['quantite6'])) {
    $data['quantite6'] = $_POST['quantite6'];
}
if (isset($_POST['coutAchat6'])) {
    $data['coutAchat6'] = $_POST['coutAchat6'];
}

if (isset($_POST['quantite7'])) {
    $data['quantite7'] = $_POST['quantite7'];
}
if (isset($_POST['coutAchat7'])) {
    $data['coutAchat7'] = $_POST['coutAchat7'];
}

if (isset($_POST['quantite8'])) {
    $data['quantite8'] = $_POST['quantite8'];
}
if (isset($_POST['coutAchat8'])) {
    $data['coutAchat8'] = $_POST['coutAchat8'];
}

if (isset($_POST['quantite9'])) {
    $data['quantite9'] = $_POST['quantite9'];
}
if (isset($_POST['coutAchat9'])) {
    $data['coutAchat9'] = $_POST['coutAchat9'];
}

if (isset($_POST['quantite10'])) {
    $data['quantite10'] = $_POST['quantite10'];
}
if (isset($_POST['coutAchat10'])) {             
    $data['coutAchat10'] = $_POST['coutAchat10'];
}

if (isset($_POST['quantite11'])) {
    $data['quantite11'] = $_POST['quantite11'];
}
if (isset($_POST['coutAchat11'])) {
    $data['coutAchat11'] = $_POST['coutAchat11'];
}

if (isset($_POST['quantite12'])) {
    $data['quantite12'] = $_POST['quantite12'];
}
if (isset($_POST['coutAchat12'])) {
    $data['coutAchat12'] = $_POST['coutAchat12'];
}

if (isset($_POST['quantite13'])) {
    $data['quantite13'] = $_POST['quantite13'];
}
if (isset($_POST['coutAchat13'])) {
    $data['coutAchat13'] = $_POST['coutAchat13'];
}

if (isset($_POST['quantite14'])) {
    $data['quantite14'] = $_POST['quantite14'];
}
if (isset($_POST['coutAchat14'])) {
    $data['coutAchat14'] = $_POST['coutAchat14'];
}

if (isset($_POST['quantite15'])) {
    $data['quantite15'] = $_POST['quantite15'];
}
if (isset($_POST['coutAchat15'])) {
    $data['coutAchat15'] = $_POST['coutAchat15'];
}

if (isset($_POST['quantite16'])) {
    $data['quantite16'] = $_POST['quantite16'];
}
if (isset($_POST['coutAchat16'])) {
    $data['coutAchat16'] = $_POST['coutAchat16'];
}

if (isset($_POST['QteTc'])) {
    $data['QteTc'] = $_POST['QteTc'];
}

if (isset($_POST['quantite17'])) {
    $data['quantite17'] = $_POST['quantite17'];
}

if (isset($_POST['quantite18'])) {
    $data['quantite18'] = $_POST['quantite18'];
}

if (isset($_POST['quantite19'])) {
    $data['quantite19'] = $_POST['quantite19'];
}

if (isset($_POST['quantite20'])) {
    $data['quantite20'] = $_POST['quantite20'];
}

if (isset($_POST['quantite21'])) {
    $data['quantite21'] = $_POST['quantite21'];
}

if (isset($_POST['quantite22'])) {
    $data['quantite22'] = $_POST['quantite22'];
}

if (isset($_POST['quantite23'])) {
    $data['quantite23'] = $_POST['quantite23'];
}

if (isset($_POST['quantite24'])) {
    $data['quantite24'] = $_POST['quantite24'];
}

if (isset($_POST['quantite25'])) {
    $data['quantite25'] = $_POST['quantite25'];
}

if (isset($_POST['costPriceResult'])) {
    $data['costPriceResult'] = $_POST['costPriceResult'];
}

if (isset($_POST['prixVenteResult'])) {
    $data['prixVenteResult'] = $_POST['prixVenteResult'];
}

if (isset($_POST['uniteCarton'])) {
    $data['uniteCarton'] = $_POST['uniteCarton'];
}

if (isset($_POST['uniteBarquette'])) {
    $data['uniteBarquette'] = $_POST['uniteBarquette'];
}

if (isset($_POST['uniteEtui'])) {
    $data['uniteEtui'] = $_POST['uniteEtui'];
}

if (
    isset($_POST['quantite1'], $_POST['coutAchat1'], $_POST['quantite2'], $_POST['coutAchat2'],
          $_POST['quantite3'], $_POST['coutAchat3'], $_POST['quantite4'], $_POST['coutAchat4'],
          $_POST['quantite5'], $_POST['coutAchat5'], $_POST['quantite6'], $_POST['coutAchat6'],
          $_POST['quantite7'], $_POST['coutAchat7'], $_POST['quantite8'], $_POST['coutAchat8'],
          $_POST['uniteVente'])
) {
    $data['coutProd'] = (
        $_POST['quantite1'] * $_POST['coutAchat1'] + 
        $_POST['quantite2'] * $_POST['coutAchat2'] - 
        ((($_POST['quantite3'] * $_POST['quantite2']) / 100) * $_POST['coutAchat3']) +
        $_POST['quantite4'] * $_POST['coutAchat4'] + 
        $_POST['quantite5'] * $_POST['coutAchat5'] +
        $_POST['quantite6'] * $_POST['coutAchat6'] + 
        $_POST['quantite7'] * $_POST['coutAchat7'] + 
        $_POST['quantite8'] * $_POST['coutAchat8']
    ) / $_POST['uniteVente'];
}


if (
    isset($_POST['quantite9'], $_POST['coutAchat9'], $_POST['quantite10'], $_POST['coutAchat10'],
          $_POST['quantite11'], $_POST['coutAchat11'], $_POST['quantite12'], $_POST['coutAchat12'],
          $_POST['quantite13'], $_POST['coutAchat13'], $_POST['quantite14'], $_POST['coutAchat14'],
          $_POST['quantite15'], $_POST['coutAchat15'], $_POST['uniteVente'])
) {
    $data['coutEmb'] = (
        ($_POST['quantite9'] * $_POST['coutAchat9']) + 
        ($_POST['quantite10'] * $_POST['coutAchat10']) +
        ($_POST['quantite11'] * $_POST['coutAchat11']) + 
        ($_POST['quantite12'] * $_POST['coutAchat12']) +
        ($_POST['quantite13'] * $_POST['coutAchat13']) + 
        ($_POST['quantite14'] * $_POST['coutAchat14']) + 
        ($_POST['quantite15'] * $_POST['coutAchat15'])
    ) / $_POST['uniteVente'];
}


if (
    isset($_POST['quantite16'], $_POST['coutAchat16'], $_POST['quantite17'],
          $_POST['quantite18'], $_POST['quantite19'], $_POST['quantite20'],
          $_POST['quantite21'], $_POST['quantite22'], $_POST['quantite23'],
          $_POST['quantite24'], $_POST['quantite25'], $_POST['uniteVente'], $_POST['QteTc'])
) {
    $data['coutInd'] = (
        $_POST['quantite16'] * $_POST['coutAchat16'] + 
        $_POST['quantite17'] +
        (($_POST['quantite18'] / $_POST['QteTc']) * 100) + 
        (($_POST['quantite19'] / $_POST['QteTc']) * 100) +
        (($_POST['quantite20'] / $_POST['QteTc']) * 100) + 
        (($_POST['quantite21'] / $_POST['QteTc']) * 100) + 
        (($_POST['quantite22'] / $_POST['QteTc']) * 100) + 
        (($_POST['quantite23'] / $_POST['QteTc']) * 100) + 
        (($_POST['quantite24'] / $_POST['QteTc']) * 100) +
        (($_POST['quantite25'] / $_POST['QteTc']) * 100)
    ) / $_POST['uniteVente'];
}

if (isset($data['coutProd'], $data['coutEmb'], $data['coutInd'])) {
    $data['cout_revient'] = $data['coutEmb'] + $data['coutProd'] + $data['coutInd'];
}

if (isset($data['cout_revient'], $data['Marge'])) {
    $data['Prix_vente'] = (($data['Marge'] / (100 - $data['Marge'])) * $data['cout_revient']) + $data['cout_revient'];
}


// Inclure FPDF
require("./fpdf/fpdf.php");

// Créer une nouvelle classe PDF
class PDF extends FPDF {
    function Header() {
        // Logo à gauche
        $this->Image('images/logoooos.png', 10, 9, 30);
    
        // Police Arial gras 15
        $this->SetFont('Arial', 'B', 15);
    
        // Décalage à droite pour le titre
        $this->Cell(60);
    
        // Titre
        $this->Cell(70, 10, utf8_decode('RÉSULTAT DE SIMULATION'), 0, 0, 'C');
    
        // Ajouter une image à droite
        $this->Image('images/logo.png', 170, 9, 30);
    
        // Saut de ligne
        $this->Ln(20);
    }
    

    // Pied de page
    function Footer() {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','I',8);
        // Numéro de page
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

    // Méthode pour générer le contenu du PDF avec deux tableaux distincts
    function GeneratePDF($data) {
        // Définir la police
        $this->SetFont('Arial','B',9);

        // Titre du deuxième tableau
        $this->Cell(0, 10, utf8_decode('  DÉSIGNATION PRODUIT'), 0, 1, 'C');
        // Deuxième tableau
        // Titres des colonnes
        $this->SetFont('Arial', 'B', 8);

        $this->Cell(24, 8, 'Poisson', 1, 0, 'C');
        $this->Cell(24, 8, 'Jus', 1, 0, 'C');
        $this->Cell(24, 8, 'Format', 1, 0, 'C');
        $this->Cell(24, 8, 'Marque', 1, 0, 'C');
        $this->Cell(24, 8, 'Sauce', 1, 0, 'C');
        $this->Cell(24, 8, 'Carton', 1, 0, 'C');
        $this->Cell(24, 8, 'Barquette', 1, 0, 'C'); 
        $this->Cell(24, 8, 'Etui', 1, 1, 'C'); 

        // Nouvelle ligne
        // Données du deuxième tableau
        $this->SetFont('Arial', '', 8);

        $this->Cell(24, 8, isset($data['Poisson']) ? $data['Poisson'] : '', 1, 0, 'C');
        $this->Cell(24, 8, isset($data['jus']) ? $data['jus'] : '', 1, 0, 'C');
        $this->Cell(24, 8, isset($data['format']) ? $data['format'] : '', 1, 0, 'C');
        $this->Cell(24, 8, isset($data['marque']) ? $data['marque'] : '', 1, 0, 'C');
        $this->Cell(24, 8, (isset($data['Sauce']) && $data['Sauce'] == 'Autres') ? '-' : $data['Sauce']  , 1, 0, 'C');
        $this->Cell(24, 8, (isset($data['uniteCarton']) && $data['uniteCarton'] == 0) ? '-' : ('CRT ' .$data['uniteCarton']), 1, 0, 'C');
        $this->Cell(24, 8, (isset($data['uniteBarquette']) && $data['uniteBarquette'] == 0) ? '-' : ('BRQ ' . $data['uniteBarquette']), 1, 0, 'C');
        $this->Cell(24, 8, isset($data['uniteEtui']) && $data['uniteEtui'] != 0 ? 'avec' : 'sans', 1, 1, 'C');
        
        // Nouvelle ligne
        // Titre du premier tableau

        $this->Cell(0, 10, '', 0, 1, 'C');

        // Centrage du tableau

        $this->SetX(($this->GetPageWidth() - 109) / 2); 
        // Calcul pour centrer le tableau avec des colonnes de largeur 28
        // Premier tableau (Unité de vente et Incotherm)
        $this->SetFont('Arial', 'B', 8);

        $this->Cell(28, 8, utf8_decode('Unité de vente'), 1, 0, 'C');
        $this->Cell(28, 8, 'Marge', 1, 0, 'C');
        $this->Cell(28, 8, utf8_decode('Coût de revient'), 1, 0, 'C');
        $this->Cell(28, 8, 'Prix de vente', 1, 1, 'C');
        
        // Données du premier tableau
        $this->SetFont('Arial', '', 8);

        $this->SetX(($this->GetPageWidth() - 109) / 2); // Réinitialisation de la position X pour les données
        $this->Cell(28, 8, isset($data['unite de vente']) ? $data['unite de vente'].utf8_decode(' unité') : '', 1, 0, 'C');
        $this->Cell(28, 8, isset($data['Marge']) ? $data['Marge'].'%' : '', 1, 0, 'C'); 
        $this->Cell(28, 8, isset($data['cout_revient']) ? number_format($data['cout_revient'], 4, '.', '').' DH' : '', 1, 0, 'C');
        $this->Cell(28, 8, isset($data['Prix_vente']) ? number_format($data['Prix_vente'], 4, '.', '').' DH' : '', 1, 1, 'C');



        // Titre du premier tableau
        $this->SetFont('Arial', 'B', 9);
        $this->Cell(0, 10, utf8_decode(''), 0, 1, '');
        $this->Cell(0, 10, utf8_decode('    1-COÛT DE PRODUCTION'), 0, 1, '');
        // Titres des colonnes
        $this->SetFont('Arial', 'B', 8);
        
        $this->Cell(48, 8, 'Composant', 1, 0, 'C');
        $this->Cell(48, 8, utf8_decode('Quantité'), 1, 0, 'C');
        $this->Cell(48, 8, utf8_decode("Coût d'achat"), 1, 0, 'C');
        $this->Cell(48, 8, utf8_decode('Coût total'), 1, 1, 'C');
        
        // Données du premier tableau
        $this->SetFont('Arial', '', 8);
        
        $components = [
            ['composant' => 'Boite Vide', 'quantite' => isset($data['quantite1']) ? $data['quantite1'] : '', 'cout_achat' => isset($data['coutAchat1']) ? $data['coutAchat1'] : '','cout_total' => (isset($data['quantite1']) && isset($data['coutAchat1'])) ? number_format($data['quantite1'] * $data['coutAchat1'], 4, '.', '') . ' DH' : ''],
            ['composant' => 'Poisson', 'quantite' => isset($data['quantite2']) ? $data['quantite2'] : '', 'cout_achat' => isset($data['coutAchat2']) ? $data['coutAchat2'] : '', 'cout_total' => (isset($data['quantite2']) && isset($data['coutAchat2'])) ? number_format($data['quantite2'] * $data['coutAchat2'], 4, '.', '').' DH' : ''],
            ['composant' => utf8_decode('Déchet (%)'), 'quantite' => isset($data['quantite3']) ? $data['quantite3'].'%' : '', 'cout_achat' => isset($data['coutAchat3']) ? $data['coutAchat3'] : '', 'cout_total' => (isset($data['quantite3']) && isset($data['quantite3']) && isset($data['coutAchat3'])) ? number_format(-(($data['quantite3'] * $data['quantite2'])/100) * $data['coutAchat3'], 4, '.', '').' DH' : ''],
            ['composant' => utf8_decode('Concentré de tomate (kg)'), 'quantite' => isset($data['quantite4']) ? $data['quantite4'] : '', 'cout_achat' => isset($data['coutAchat4']) ? $data['coutAchat4'] : '', 'cout_total' => (isset($data['quantite4']) && isset($data['coutAchat4'])) ? number_format($data['quantite4'] * $data['coutAchat4'], 4, '.', '').' DH' : ''],
            ['composant' => 'Huile (kg)', 'quantite' => isset($data['quantite5']) ? $data['quantite5'] : '', 'cout_achat' => isset($data['coutAchat5']) ? $data['coutAchat5'] : '', 'cout_total' => (isset($data['quantite5']) && isset($data['coutAchat5'])) ? number_format($data['quantite5'] * $data['coutAchat5'], 4, '.', '').' DH' : ''],
            ['composant' => 'Piment (kg) ', 'quantite' => isset($data['quantite6']) ? $data['quantite6'] : '', 'cout_achat' => isset($data['coutAchat6']) ? $data['coutAchat6'] : '', 'cout_total' => (isset($data['quantite6']) && isset($data['coutAchat6'])) ? number_format($data['quantite6'] * $data['coutAchat6'], 4, '.', '').' DH' : ''],
            ['composant' => 'MOD', 'quantite' => isset($data['quantite7']) ? $data['quantite7'] : '', 'cout_achat' => isset($data['coutAchat7']) ? $data['coutAchat7'] : '', 'cout_total' => (isset($data['quantite7']) && isset($data['coutAchat7'])) ? number_format($data['quantite7'] * $data['coutAchat7'], 4, '.', '').' DH' : ''],
            ['composant' => utf8_decode('Autres ingrédients'), 'quantite' => isset($data['quantite8']) ? $data['quantite8'] : '', 'cout_achat' => isset($data['coutAchat8']) ? $data['coutAchat8'] : '', 'cout_total' => (isset($data['quantite8']) && isset($data['coutAchat8'])) ? number_format($data['quantite8'] * $data['coutAchat8'], 4, '.', '').' DH' : ''],
            ['composant' => utf8_decode("Coût de production"), 'quantite' =>'', 'cout_achat' => '','cout_total' => isset($data['coutProd']) ? number_format($data['coutProd'], 4, '.', '').' DH' : ''],
        ];
        
        foreach ($components as $index => $row) {
            if ($index == count($components) - 1) {
                $this->SetFont('Arial', 'B', 8);
                $this->Cell(48, 8, $row['composant'], 1, 0, 'C');
                $this->Cell(96, 8, '', 1, 0, 'C'); // fusion des colonnes "quantité" et "coût d'achat"
                $this->Cell(48, 8, $row['cout_total'], 1, 1, 'C');
            } else {
                $this->Cell(48, 8, $row['composant'], 1, 0, 'C');
                $this->Cell(48, 8, $row['quantite'], 1, 0, 'C');
                $this->Cell(48, 8, $row['cout_achat'], 1, 0, 'C');
                $this->Cell(48, 8, $row['cout_total'], 1, 1, 'C');
            }
        }
        
        


                // Titre du premier tableau
                $this->SetFont('Arial','B',9);
                $this->Cell(0, 10, utf8_decode(''), 0, 1, '');
                $this->Cell(0, 10, utf8_decode("   2-COÛT D'EMBALLAGE"), 0, 1, '');
                $this->SetTextColor(0);
                $this->SetFont('Arial', 'B', 8);

                // Titres des colonnes
                $this->Cell(48, 8, 'Composant', 1, 0, 'C');
                $this->Cell(48, 8, utf8_decode('Quantité'), 1, 0, 'C');
                $this->Cell(48, 8, utf8_decode("Coût d'achat"), 1, 0, 'C');
                $this->Cell(48, 8, utf8_decode('Coût total'), 1, 1, 'C'); 
                
                // Nouvelle ligne
                // Données du premier tableau
                $this->SetFont('Arial', '', 8);


                $components = [
                    ['composant' => 'Carton', 'quantite' => isset($data['quantite9']) ? $data['quantite9'] : '', 'cout_achat' => isset($data['coutAchat9']) ? $data['coutAchat9'] : '','cout_total' => (isset($data['quantite9']) && isset($data['coutAchat9'])) ? number_format($data['quantite9'] * $data['coutAchat9'], 4, '.', '').' DH' : ''],
                    ['composant' => 'Barquette', 'quantite' => isset($data['quantite10']) ? $data['quantite10'] : '', 'cout_achat' => isset($data['coutAchat10']) ? $data['coutAchat10'] : '', 'cout_total' => (isset($data['quantite10']) && isset($data['coutAchat10'])) ? number_format($data['quantite10'] * $data['coutAchat10'], 4, '.', '').' DH' : ''],
                    ['composant' => 'Etui', 'quantite' => isset($data['quantite11']) ? $data['quantite11'] : '', 'cout_achat' => isset($data['coutAchat11']) ? $data['coutAchat11'] : '', 'cout_total' => (isset($data['quantite11']) && isset($data['coutAchat11'])) ?  number_format($data['quantite11'] * $data['coutAchat11'], 4, '.', '').' DH' : ''],
                    ['composant' => utf8_decode('Film Rétractable'), 'quantite' => isset($data['quantite12']) ? $data['quantite12'] : '', 'cout_achat' => isset($data['coutAchat12']) ? $data['coutAchat12'] : '', 'cout_total' => (isset($data['quantite12']) && isset($data['coutAchat12'])) ? number_format($data['quantite12'] * $data['coutAchat12'], 4, '.', '').' DH' : ''],
                    ['composant' => utf8_decode('Film Étirable'), 'quantite' => isset($data['quantite13']) ? $data['quantite13'] : '', 'cout_achat' => isset($data['coutAchat13']) ? $data['coutAchat13'] : '', 'cout_total' => (isset($data['quantite12']) && isset($data['coutAchat13'])) ? number_format($data['quantite13'] * $data['coutAchat13'], 4, '.', '').' DH' : ''],
                    ['composant' => 'MOD', 'quantite' => isset($data['quantite14']) ? $data['quantite14'] : '', 'cout_achat' => isset($data['coutAchat14']) ? $data['coutAchat14'] : '', 'cout_total' => (isset($data['quantite14']) && isset($data['coutAchat14'])) ? number_format($data['quantite14'] * $data['coutAchat14'], 4, '.', '').' DH' : ''],
                    ['composant' => 'Autres Auxiliaires Emballage', 'quantite' => isset($data['quantite15']) ? $data['quantite15'] : '', 'cout_achat' => isset($data['coutAchat15']) ? $data['coutAchat15'] : '', 'cout_total' => (isset($data['quantite15']) && isset($data['coutAchat15'])) ? number_format($data['quantite15'] * $data['coutAchat15'], 4, '.', '').' DH' : ''],
                    ['composant' => utf8_decode("Coût d'emballage"), 'quantite' =>'', 'cout_achat' => '','cout_total' => isset($data['coutEmb']) ? number_format($data['coutEmb'], 4, '.', '').' DH' : ''],
                ];
        
                foreach ($components as $index => $row) {
                    if ($index == count($components) - 1) {
                        $this->SetFont('Arial', 'B', 8);
                        $this->Cell(48, 8, $row['composant'], 1, 0, 'C');
                        $this->Cell(96, 8, '', 1, 0, 'C'); // fusion des colonnes "quantité" et "coût d'achat"
                        $this->Cell(48, 8, $row['cout_total'], 1, 1, 'C');
                    } else {
                        $this->Cell(48, 8, $row['composant'], 1, 0, 'C');
                        $this->Cell(48, 8, $row['quantite'], 1, 0, 'C');
                        $this->Cell(48, 8, $row['cout_achat'], 1, 0, 'C');
                        $this->Cell(48, 8, $row['cout_total'], 1, 1, 'C');
                    }
                }

                                // Titre du premier tableau
                                $this->SetFont('Arial','B',9);
                                $this->Cell(0, 10, utf8_decode(''), 0, 1, '');
                                $this->Cell(0, 10, utf8_decode('    3-COÛT DES CHARGES INDIRECTES & LOGISTIQUES'), 0, 1, '');
                                // Titres des colonnes
                                $this->SetFont('Arial', 'B', 8);

                                $this->Cell(48, 8, 'Composant', 1, 0, 'C');
                                $this->Cell(48, 8, utf8_decode('Quantité'), 1, 0, 'C');
                                $this->Cell(48, 8, utf8_decode("Coût d'achat"), 1, 0, 'C');
                                $this->Cell(48, 8, utf8_decode('Coût total'), 1, 1, 'C'); 

                                // Nouvelle ligne
                                // Données du premier tableau

                                $this->SetFont('Arial', '', 8);

                                $components = [
                                    ['composant' => utf8_decode('Fuel/Unité'), 'quantite' => isset($data['quantite16']) ? $data['quantite16'] : '', 'cout_achat' => isset($data['coutAchat16']) ? $data['coutAchat16'] : '','cout_total' => (isset($data['quantite16']) && isset($data['coutAchat16'])) ? number_format($data['quantite16'] * $data['coutAchat16'], 4, '.', '').' DH' : ''],
                                    ['composant' => utf8_decode('Electricite/Unité'), 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite17']) ? $data['quantite17'] : '', 'cout_total' => (isset($data['quantite17']) && isset($data['QteTc'])) ? number_format($data['quantite17'], 4, '.', '').' DH' : ''],
                                    ['composant' => 'Transport/TC', 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite18']) ? $data['quantite18'] : '', 'cout_total' => (isset($data['quantite18']) && isset($data['QteTc'])) ?  number_format((($data['quantite18'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => 'Transit/TC', 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite19']) ? $data['quantite19'] : '', 'cout_total' => (isset($data['quantite19']) && isset($data['QteTc'])) ? number_format((($data['quantite19'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => utf8_decode("Coût d'incoterm/TC"), 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite20']) ? $data['quantite20'] : '', 'cout_total' => (isset($data['quantite20']) && isset($data['QteTc'])) ? number_format((($data['quantite20'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => 'Prestations portuaires/TC', 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite21']) ? $data['quantite21'] : '', 'cout_total' => (isset($data['quantite21']) && isset($data['QteTc'])) ? number_format((($data['quantite21'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => 'TC', 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite22']) ? $data['quantite22'] : '', 'cout_total' => (isset($data['quantite22']) && isset($data['QteTc'])) ? number_format((($data['quantite22'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => 'Douane/TC', 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite23']) ? $data['quantite23'] : '', 'cout_total' => (isset($data['quantite23']) && isset($data['QteTc'])) ? number_format((($data['quantite23'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => 'Assurance/TC', 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite24']) ? $data['quantite24'] : '', 'cout_total' => (isset($data['quantite24']) && isset($data['QteTc'])) ? number_format((($data['quantite24'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => 'Autres Charges logistiques', 'quantite' => isset($data['']) ? $data[''] : '', 'cout_achat' => isset($data['quantite25']) ? $data['quantite25'] : '', 'cout_total' => (isset($data['quantite25']) && isset($data['QteTc'])) ? number_format((($data['quantite25'] / $data['QteTc']) * 100), 4, '.', '').' DH' : ''],
                                    ['composant' => utf8_decode('Coût des Charges indirectes'), 'quantite' =>'', 'cout_achat' => '','cout_total' => isset($data['coutInd']) ? number_format($data['coutInd'], 4, '.', '').' DH' : ''],
                                ];
                        
                                foreach ($components as $index => $row) {
                                    if ($index == count($components) - 1) {
                                        $this->SetFont('Arial', 'B', 8);
                                        $this->Cell(48, 8, $row['composant'], 1, 0, 'C');
                                        $this->Cell(96, 8, '', 1, 0, 'C'); // fusion des colonnes "quantité" et "coût d'achat"
                                        $this->Cell(48, 8, $row['cout_total'], 1, 1, 'C');
                                    } else {
                                        $this->Cell(48, 8, $row['composant'], 1, 0, 'C');
                                        $this->Cell(48, 8, $row['quantite'], 1, 0, 'C');
                                        $this->Cell(48, 8, $row['cout_achat'], 1, 0, 'C');
                                        $this->Cell(48, 8, $row['cout_total'], 1, 1, 'C');
                                    }
                                }
    }
}

// Créer une instance de la classe PDF
$pdf = new PDF();
$pdf->AliasNbPages(); // Alias pour le nombre total de pages
$pdf->AddPage();
// Générer le PDF avec les données
$pdf->GeneratePDF($data);

// Servir le PDF au navigateur
$pdf->Output("I", "calcul_cout_de_revient.pdf");
?>