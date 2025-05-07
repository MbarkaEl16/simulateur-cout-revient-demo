<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Simulateur Coût De Revient</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="colorlib.com">
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
	<link rel="stylesheet" href="vendor/date-picker/css/datepicker.min.css">
	<link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=7c91lp88MqEBnVJ4owkn4oRcp8NgmucZ11e4OFkOBpVZKWvqwG0zXAHhJ9sH9nN7QZ1YtJfrOlvnDzCYeO2vOxEX5YIIUOc5IxvWCFlH5kc" charset="UTF-8"></script>

<style>
@media print {
  body {
    transform: translateY(-200px); 
  }
}
@media print {
  .step-arrow {
    display: none;
  }
}
@media print {
  .step-order {
    display: none;
  }
}
@media print {
  .steps ul li:first-child {
    display: none;
  }
}
@media print {
  .steps ul li:nth-child(2) {
    display: none;
  }
}
@media print {
  .steps ul li:nth-child(3) {
    display: none;
  }
}
@media print {
  .steps ul li:nth-child(4) {
    display: none;
  }
}
@media print {
    .steps ul li:last-child a {
    display: none;
  }
}

@media print {
    .actions li a {
    display: none;
  }
}

@media print {
    #convert-button {
            display: none; 
   
}
}

        @media print {
            button#print-button {
                display: none;
        }
    }
                #print-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: #8eb852;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
            .input-spacing {
            margin-right: 10px; 
        }
#logo {
  width: 130px; 
  margin-top: 0px; 
  margin-right: 300px;
}
    
    </style>
    <script>

      const selectPoisson = document.getElementById("Poisson");

       const spanElementChoisi = document.getElementById("elementChoisi");
       selectPoisson.addEventListener("change", function() {

       spanElementChoisi.textContent = selectPoisson.value;
        });

        function calculateTotal(row) {
            calculateQuantity10();


       var quantite = parseFloat(row.querySelector('.quantite').value);
       var coutAchat = parseFloat(row.querySelector('.cout-achat').value);
       var total = quantite * coutAchat;

       var totalCell = row.querySelector('.total');
       totalCell.textContent = isNaN(total) ? "0 DH" : total.toFixed(4) + " DH";

       calculateTotal3();
       calculateTotal12();
       calculateTotal4();
       calculateTotal5();
       calculateTotal6();
       calculateTotal7();
       calculateTotal8();
       calculateTotal9();
       calculateTotal10();
       calculateTotal11();
       calculateCostPrice()

      }

        function calculateTotal3() {
        var quantite2 = parseFloat(document.querySelector('input[name="quantite2"]').value);
        var quantite3 = parseFloat(document.querySelector('input[name="quantite3"]').value);
        var coutAchat3 = parseFloat(document.querySelector('input[name="coutAchat3"]').value);
        var total3 = (quantite2 * quantite3 * coutAchat3) / 100;
        var total3Cell = document.querySelector('.total3');
        var oppositeTotal3 = -total3; 
        total3Cell.textContent = isNaN(oppositeTotal3) ? "0 DH" : oppositeTotal3.toFixed(4) + " DH";
        }


        function calculateTotal12() {
         var quantite17 = parseFloat(document.querySelector('input[name="quantite17"]').value);
         var total12 = quantite17;
         var total12Cell = document.querySelector('.total12');
         total12Cell.textContent = isNaN(total12) ? "0 DH" : total12.toFixed(4) + " DH";
        }

        function calculateTotal4() {
        var quantite18 = parseFloat(document.querySelector('input[name="quantite18"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total4 = (quantite18 / QteTc) * uniteVente;
        var total4Cell = document.querySelector('.total4');
        total4Cell.textContent = isNaN(total4) ? "0 DH" : total4.toFixed(4) + " DH";
        }

        function calculateTotal5() {
        var quantite19 = parseFloat(document.querySelector('input[name="quantite19"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total5 = (quantite19 / QteTc) * uniteVente;
        var total5Cell = document.querySelector('.total5');
        total5Cell.textContent = isNaN(total5) ? "0 DH" : total5.toFixed(4) + " DH";
        }

        function calculateTotal6() {
        var quantite20 = parseFloat(document.querySelector('input[name="quantite20"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total6 = (quantite20 / QteTc) * uniteVente;
        var total6Cell = document.querySelector('.total6');
        total6Cell.textContent = isNaN(total6) ? "0 DH" : total6.toFixed(4) + " DH";
        }

        function calculateTotal7() {
        var quantite21 = parseFloat(document.querySelector('input[name="quantite21"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total7 = (quantite21 / QteTc) * uniteVente;
        var total7Cell = document.querySelector('.total7');
        total7Cell.textContent = isNaN(total7) ? "0 DH" : total7.toFixed(4) + " DH";
        }

        function calculateTotal8() {
        var quantite22 = parseFloat(document.querySelector('input[name="quantite22"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total8 = (quantite22 / QteTc) * uniteVente;
        var total8Cell = document.querySelector('.total8');
        total8Cell.textContent = isNaN(total8) ? "0 DH" : total8.toFixed(4) + " DH";
        }

        function calculateTotal9() {
        var quantite23 = parseFloat(document.querySelector('input[name="quantite23"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total9 = (quantite23 / QteTc) * uniteVente;
        var total9Cell = document.querySelector('.total9');
        total9Cell.textContent = isNaN(total9) ? "0 DH" : total9.toFixed(4) + " DH";
        }

        function calculateTotal10() {
        var quantite24 = parseFloat(document.querySelector('input[name="quantite24"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total10 = (quantite24 / QteTc) * uniteVente;
        var total10Cell = document.querySelector('.total10');
        total10Cell.textContent = isNaN(total10) ? "0 DH" : total10.toFixed(4) + " DH";
        }

        function calculateTotal11() {
        var quantite25 = parseFloat(document.querySelector('input[name="quantite25"]').value);
        var QteTc = parseFloat(document.querySelector('input[name="QteTc"]').value);
        var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
        var total11 = (quantite25 / QteTc) * uniteVente;
        var total11Cell = document.querySelector('.total11');
        total11Cell.textContent = isNaN(total11) ? "0 DH" : total11.toFixed(4) + " DH";
        }

       function checkOptions() {
        var selectElement = document.getElementById("Poisson");
        var selectedValue = selectElement.options[selectElement.selectedIndex].value;
        document.getElementById("valeurSelectionnee").innerText = selectedValue;

       var Poisson = document.getElementById('Poisson').value;
       var Nature_Poisson = document.getElementById('Nature_Poisson').value;
       var Nature_traitement = document.getElementById('Nature_traitement').value;
       var quantite3Input = document.getElementById('quantite3');

        if ((Poisson === 'Sardine' || Poisson === 'Maquereau') &&
        Nature_Poisson === 'Entier' &&
        Nature_traitement === 'EntierC') {
        quantite3Input.value = 45;

       }  else if ((Poisson === 'Sardine') &&
        Nature_Poisson === 'Entier' &&
        Nature_traitement === 'SPSA') {
        quantite3Input.value = 69;

       } else if ((Poisson === 'Sardine' || Poisson === 'Maquereau') &&
        Nature_Poisson === 'EEE' &&
        Nature_traitement === 'EntierC') {
        quantite3Input.value = 0;

       } else if ((Poisson === 'Maquereau') &&
        Nature_Poisson === 'Entier' &&
        Nature_traitement === 'Filet AP') {
        quantite3Input.value = 50;

       }else if ((Poisson === 'Maquereau') &&
        Nature_Poisson === 'Entier' &&
        Nature_traitement === 'Filet SP') {
        quantite3Input.value = 56;

       }else if ((Poisson === 'Thon') &&
        Nature_Poisson === 'Entier' &&
        Nature_traitement === 'Filet SP') {
        quantite3Input.value = 50;

        }else {
        quantite3Input.value = '';
        }

       calculateTotal(quantite3Input.parentNode.parentNode);
       calculateTotal3();
       calculateTotal12();
       calculateTotal4();
       calculateTotal5();
       calculateTotal6();
       calculateTotal7();
       calculateTotal8();
       calculateTotal9();
       calculateTotal10();
       calculateTotal11();
       calculateCostPrice()
    }
       function checkSauce() {

        var selectElement = document.getElementById("Sauce");
        var selectedValue = selectElement.value;
        var selectedSauceElement = document.getElementById("selectedSauce");

        if (selectedValue === "Tomate") {
        selectedSauceElement.innerHTML = "Tomate";
        } else {
        selectedSauceElement.innerHTML = "-";
        }
             var Sauce = document.getElementById('Sauce').value;
             var quantite4Input = document.getElementById('quantite4');
             var coutAchat4Input = document.getElementById('coutAchat4');
             if (Sauce === 'Autres') {

             quantite4Input.value = 0;
             coutAchat4Input.value = 0;

             } else if(Sauce === 'Tomate') {
                quantite4Input.value = '';
                coutAchat4Input.value = '';
            }

             calculateTotal(quantite3Input.parentNode.parentNode);  
        }

        function updatesauceRow() {
            var sauceRow = document.getElementById('sauceRow');
            var sauceSelect = document.getElementById('Sauce');
            if (sauceSelect.value === 'Autres') {
            sauceRow.style.display = 'none';
            } else {
            sauceRow.style.display = 'table-row';
             }
            }  

        function calculateQuantity9() {
            var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
            var uniteCarton = parseFloat(document.querySelector('input[name="uniteCarton"]').value);
            var Carton = parseFloat(document.querySelector('input[name="Carton"]').value);
            if (uniteCarton === 0) {
            document.querySelector('input[name="quantite9"]').value = 0;
            document.querySelector('input[name="coutAchat9"]').value = 0;
            document.querySelector('input[name="Carton"]').value = 0;

            }else {

            var quantite9 = (uniteVente / uniteCarton) * (1 + (Carton / 100));
            document.querySelector('input[name="quantite9"]').value = quantite9.toFixed(4);
            }
        }
                           
       function updateTableRow9() {

             var uniteCartonInput = document.getElementById('uniteCarton');

             if (uniteCartonInput.value === '0') {
             cartonRow.style.display = 'none';
             } else {
             cartonRow.style.display = 'table-row';
             }
        }

       function calculateQuantity10() {
       var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
       var uniteBarquette = parseFloat(document.querySelector('input[name="uniteBarquette"]').value);
       var Barquette = parseFloat(document.querySelector('input[name="Barquette"]').value);
    
       if (uniteBarquette === 0) {
        document.querySelector('input[name="quantite10"]').value = 0;
        document.querySelector('input[name="coutAchat10"]').value = 0;
        document.querySelector('input[name="Barquette"]').value = 0;

       } 
       else {
        var quantite10 = (uniteVente / uniteBarquette) * (1 + (Barquette / 100));
        document.querySelector('input[name="quantite10"]').value = quantite10.toFixed(4);
       }
       }

       function updateTableRow() {
        var uniteBarquetteInput = document.getElementById('uniteBarquette');

        if (uniteBarquetteInput.value === '0') {
        barquetteRow.style.display = 'none';
        } else {
        barquetteRow.style.display = 'table-row';
        }
       }

    function calculateCostPrice() {
    var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
    var totalElements = document.querySelectorAll('.total');
    var totalSum = 0;
    for (var i = 0; i < totalElements.length; i++) {
        var totalValue = parseFloat(totalElements[i].textContent);
        if (!isNaN(totalValue)) {
            totalSum += totalValue;
        }
    }
    
    var costPrice = totalSum / uniteVente;

    var costPriceResultElement = document.getElementById('costPriceResult');
    costPriceResultElement.textContent = isNaN(costPrice) ? "0 DH" : costPrice.toFixed(4) + " DH";

    var marge = parseFloat(document.querySelector('input[name="marge"]').value);
    var prixVente = ((marge / (100 - marge)) * costPrice) + costPrice;

    var prixVenteResultElement = document.getElementById('prixVenteResult');
    prixVenteResultElement.textContent = isNaN(prixVente) ? "0 DH" : prixVente.toFixed(4) + " DH";

     var Marge = document.getElementById('marge');
    Marge.textContent = isNaN(marge) ? "0%" : marge + "%";

    var UniteVente = document.getElementById('uniteVente');
    UniteVente.textContent = isNaN(uniteVente) ? "0(Unit)" : uniteVente + "(Unité)";

    var uniteEtui = parseFloat(document.querySelector('input[name="uniteEtui"]').value);
    var UniteEtui = document.getElementById('uniteEtui1');
    UniteEtui.textContent = isNaN(uniteEtui) ? "" : (uniteEtui === 0 ? "-" : "Avec" );

    var input1 = document.querySelector('input[name="jus"]').value;
    var Jus = document.getElementById('jus');
    Jus.textContent = input1 ;

    var input2 = document.querySelector('input[name="format"]').value;
    var Format = document.getElementById('format');
    Format.textContent = input2 ;

    var input3 = document.querySelector('input[name="marque"]').value;
    var Marque = document.getElementById('marque');
    Marque.textContent = input3 ;

    var uniteCarton = parseFloat(document.querySelector('input[name="uniteCarton"]').value);
    var UniteCarton = document.getElementById('uniteCarton1');
    UniteCarton.textContent = isNaN(uniteCarton) ? "" : (uniteCarton === 0 ? "-" : "CRT" + uniteCarton);

    var uniteBarquette = parseFloat(document.querySelector('input[name="uniteBarquette"]').value);
    var UniteBarquette = document.getElementById('uniteBarquette1');
    UniteBarquette.textContent = isNaN(uniteBarquette) ? "" : (uniteBarquette === 0 ? "-" : "Barquette" + uniteBarquette);

    
}
        
       function calculateAllTotals(event) {
        event.preventDefault();
       var rows = document.querySelectorAll('.charges-row');
       rows.forEach(function (row) {
        calculateTotal(row);
        });

       calculateTotal3();
       calculateTotal12();
       calculateTotal4();
       calculateTotal5();
       calculateTotal6();
       calculateTotal7();
       calculateTotal8();
       calculateTotal9();
       calculateTotal10();
       calculateTotal11();
       calculateCostPrice()

       }

       function calculateQuantity1() {
            var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
            var Boite = parseFloat(document.querySelector('input[name="Boite"]').value);
            var quantite1 = uniteVente * (1 + (Boite / 100));
            document.querySelector('input[name="quantite1"]').value = quantite1.toFixed(4);
        }

        function calculateQuantity11() {
            var uniteVente = parseFloat(document.querySelector('input[name="uniteVente"]').value);
            var uniteEtui = parseFloat(document.querySelector('input[name="uniteEtui"]').value);
            var Etui = parseFloat(document.querySelector('input[name="Etui"]').value);

            if (uniteEtui === 0) {
            document.querySelector('input[name="quantite11"]').value = 0;
            document.querySelector('input[name="coutAchat11"]').value = 0;
            document.querySelector('input[name="Etui"]').value = 0;

            } else {
            var quantite11 = uniteVente * (1 + (Etui / 100));
            document.querySelector('input[name="quantite11"]').value = quantite11.toFixed(4);
            }
        }

        function updateTableRow11() {
        var uniteEtuiInput = document.getElementById('uniteEtui');
        var etuiRow = document.getElementById('etuiRow');

        if  ((uniteEtuiInput.value === '0'|| uniteEtuiInput.value.trim() === '')) {
        etuiRow.style.display = 'none';
        } else {
        etuiRow.style.display = 'table-row';
        }
       }

        function updateQuantite14AndCoutAchat14() {
            var coutAchat7 = parseFloat(document.querySelector('input[name="coutAchat7"]').value);

            document.querySelector('input[name="coutAchat14"]').value = coutAchat7.toFixed(4);
        }

        function convertCurrency() {
            var amount = parseFloat(document.getElementById('prixVenteResult').textContent);
            var fromCurrency = 'MAD';
            var toCurrency = document.getElementById('devise').value;
            var exchangeRate = parseFloat(document.getElementById('tauxConversion').value);
            var convertedAmount = amount / exchangeRate;

            var convertedAmountElement = document.getElementById('convertedAmount');
            convertedAmountElement.textContent = convertedAmount.toFixed(4) + ' ' + toCurrency;
        }

       function setInitialQuantity() {
         var quantite3Input = document.getElementById('quantite3');
         if (quantite3Input) {
        quantite3Input.value = 45;
        calculateTotal(quantite3Input.parentNode.parentNode);
        }
        }
        
    </script>
</head>
	<body onload="setInitialQuantity()">
		<div class="wrapper">
        <img src="images/logoooos.png" alt="SIMULATEUR DE CALCUL DE COUT DE REVIENT " id="logo">
            <form id="wizard" method="post" action="generer_pdf.php" id="monFormulaire">
                 <!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <h3>Paramétrage</h3>
                    <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table" style="margin-bottom: 60px; margin-top: 90px;">
                        <tr>
                            <td style="color: #666;font-family: Lato-Bold">Poisson</td>
                            <td>
                                <select name="Poisson" id="Poisson"  onchange="checkOptions()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 154px;height: 20px;">
                                    <option value="Sardine">Sardine</option>
                                    <option value="Maquereau">Maquereau</option>
                                    <option value="Thon">Thon</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="color: #666;font-family: Lato-Bold">Nature Poisson</td>
                            <td>
                                <select name="Nature_Poisson" id="Nature_Poisson" onchange="checkOptions()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 154px;height: 20px;">
                                    <option value="Entier">Entier</option>
                                    <option value="EEE">EEE</option>
                                </select>
                            </td>
                        </tr>
                        
                        <tr>
                            <td style="color: #666;font-family: Lato-Bold">Nature Traitement</td>
                            <td>
                                <select name="Nature_traitement" id="Nature_traitement"  onchange="checkOptions()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 154px;height: 20px;">
                                    <option value="EntierC">Entier (classique)</option>
                                    <option value="Filet SP">Filet SP</option>
                                    <option value="SPSA">SPSA</option>
                                    <option value="Filet AP">Filet AP</option>
                                </select>
                            </td>
                        </tr>
                       <tr>
                           <td style="color: #666;font-family: Lato-Bold">Jus</td>
                           <td colspan="3"><input type="text" name="jus" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                       </tr>
                       <tr>
                           <td style="color: #666;font-family: Lato-Bold">Format</td>
                           <td colspan="3"><input type="text" name="format" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                       </tr>
                       <tr>
                           <td style="color: #666;font-family: Lato-Bold">Marque</td>
                           <td colspan="3"><input type="text" name="marque" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                       </tr>
                       <tr>
                           <td style="color: #666;font-family: Lato-Bold">Sauce</td>
                           <td>
                                <select name="Sauce" id="Sauce" onchange="checkSauce();updatesauceRow()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 154px;height: 20px;">
                                   <option value="Tomate">Tomate</option>
                                   <option value="Autres">Autres</option>
                                </select>
                         </td>
                       </tr>
                    
                        <tr>
                            <td style="color: #666;font-family: Lato-Bold">Unité De Vente</td>
                            <td colspan="3"><input type="number" name="uniteVente" step="0.01" required onchange="calculateQuantity1() ;calculateQuantity11();calculateQuantity9();calculateQuantity10()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                        </tr>
                        <tr>
                            <td style="color: #666;font-family: Lato-Bold">Unité D'emballage Etui</td>
                            <td colspan="3"><input type="number" name="uniteEtui" id="uniteEtui" step="0.01" required onchange="calculateQuantity11();updateTableRow11()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                        </tr>
                        <tr>
                            <td style="color: #666;font-family: Lato-Bold">Unité D'emballage Carton</td>
                            <td colspan="3"><input type="number" name="uniteCarton" id="uniteCarton" step="0.01" required onchange="calculateQuantity9();updateTableRow9()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                        </tr>
                        <tr>
                            <td style="color: #666;font-family: Lato-Bold">Unité D'emballage Barquette</td>
                            <td colspan="3"><input type="number" name="uniteBarquette" id="uniteBarquette" step="0.01" required onchange="calculateQuantity10();updateTableRow()" style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                        </tr>
                        <tr>
                            <td  style="color: #666 ;font-family: Lato-Bold">Qte TC</td>
                            <td colspan="3"><input type="number" name="QteTc" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                       </tr>
                       <tr>
                          <td style="color: #666;font-family: Lato-Bold">l'incotherm</td>
                          <td>
                            <select name="Inco" id="Inco"  style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 154px;height: 20px;">
                                <option value="Fob">FOB</option>
                                <option value="Cfr">CFR</option>
                                <option value="Exw">EXW</option>
                                <option value="Fca">FCA</option>
                                <option value="Cpt">CPT</option>
                                <option value="Cip">CIP</option>
                                <option value="Dap">DAP</option>
                                <option value="Dpu">DPU</option>
                                <option value="Ddp">DDP</option>
                                <option value="Fas">FAS</option>
                                <option value="Cif">CIF</option>
                            </select>
                          </td>
                       </tr>
                       <tr>
                                <td  style="color: #666 ;font-family: Lato-Bold">Marge(%)</td>
                                <td colspan="3"><input type="number" name="marge" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"></td>
                      </tr>
                    </table>
                 </section>
        		<!-- SECTION 2 -->
                <h4></h4>
                <section>
                    <h3>Coût De Production</h3>
                    <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
                        <thead>
                            <th >&nbsp;</th>
                            <th style="text-align: left;">Produit</th>
                            <th >Quantité</th>
                            <th >Coût D'achat</th>
                            <th >Coût D'achat Total(DH)</th>
                            <th >&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/boitevideee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Boite Vide</a>
                                        <span><input type="number" class="Boite" name="Boite" placeholder="Taux-Perte(%)"  onchange="calculateQuantity1()" required step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 100px;"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite1" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat1" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/sardineproo.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                         <a href="#">Poisson(kg)</a>
                                    </div>
                                </td>
                                <td >
                                    <div class="quantity">
                                        <input type="number" name="quantite2" class="quantite" onchange="calculateTotal(this.parentNode.parentNode); calculateTotal3()" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                        <input type="number" name="coutAchat2" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode); calculateTotal3()" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;">
                                    </div>
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/decheeeeet.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Déchet(%)</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite3" id="quantite3" class="quantite" onchange="calculateTotal(this.parentNode.parentNode); calculateTotal3()" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat3" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode); calculateTotal3()" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total total3"></td>
                            </tr>
                            <tr class="charges-row" id="sauceRow">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/concentredetomatee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail" >
                                    <div>
                                        <a href="#">Concentré De Tomate(kg)</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite4" id="quantite4" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat4"id="coutAchat4" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/huilee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Huile(kg)</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite5" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat5" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                    </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/Piment.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Piment(kg)</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite6" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat6" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/peche-femmee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Main D'oeuvre</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite7" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat7" class="cout-achat" onchange="updateQuantite14AndCoutAchat14();calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/blanchee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Autres Ingrédients</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite8" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat8" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                        </tbody>
                    </table>
                
                </section>

				<!-- SECTION 3 -->

                <h4></h4>
                <section>
                	<h3>Coût D'emballage</h3>
                    <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
                        <thead>
                            <th >&nbsp;</th>
                            <th style="text-align: left;">Produit</th>
                            <th >Quantité</th>
                            <th >Coût D'achat</th>
                            <th >Coût D'achat Total(DH)</th>
                            <th >&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr class="charges-row" id="cartonRow">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/cartonnn.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Carton</a>
                                        <span><input type="number" class="Carton" name="Carton" placeholder="Taux-Perte(%)" required onchange="calculateQuantity9()" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 100px;"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite9" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat9" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row" id="barquetteRow">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/barquette-en-carton.png" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                         <a href="#">Barquette</a>
                                         <span><input type="text" class="Barquette" name="Barquette" placeholder="Taux-Perte(%)" required onchange="calculateQuantity10()" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 100px;"></span>
                                    </div>
                                </td>
                                <td >
                                    <div class="quantity">
                                        <input type="number" name="quantite10" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                        <input type="number" name="coutAchat10" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;">
                                    </div>
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row" id="etuiRow">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/etuiee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Etui</a>
                                        <span><input type="number" class="Etui" name="Etui" placeholder="Taux-Perte(%)" required onchange="calculateQuantity11()" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;width: 100px;"></span>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite11" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat11" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/filmretractablee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Film Retractable </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite12" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat12" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/film-etirable1.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Film Etirable</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite13" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat13" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/peche-femmee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Main D'oeuvre</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite14" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat14" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                        <img src="images/blanchee.jpg" alt="">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Autre Auxiliaire D'emballage</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite15" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat15" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                        </tbody>
                    </table>
                </section>
                <!-- SECTION 4 -->
                <h4></h4>
                <section>
                    <h3 style="margin-bottom: 20px;">Les Charges Indirectes & Logistiques</h3>
                    <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table">
                        <thead>
                            <th >&nbsp;</th>
                            <th  style="text-align: left;">Produit</th>
                            <th  style="text-align: left;">Quantité</th>
                            <th  style="text-align: left;">Coût D'achat</th>
                            <th >Coût D'achat Total(DH)</th>
                            <th >&nbsp;</th>
                        </thead>
                        <tbody>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Fuel/Unite</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="quantity">
                                        <input type="number" name="quantite16" class="quantite" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>                              
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                    <input type="number" name="coutAchat16" class="cout-achat" onchange="calculateTotal(this.parentNode.parentNode)" step="0.01" required style="text-align: center; color: #666; background-color: #e6e6e6; border: none;"> 
                                </td>
                                <td class="total"></td>
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Electricité/Unite</a>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite17" class="quantite" onchange="calculateTotal12()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td>  
                                <td class="total total12" ></td>                           
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Transport/TC</a>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite18" class="quantite" onchange="calculateTotal4()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td>  
                                <td class="total total4"></td>                            
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Transit/TC</a>
                                    </div>
                                </td> 
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite19" class="quantite" onchange="calculateTotal5()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td> 
                                <td class="total total5"></td>                              
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Coût D'Incoterm/TC</a>
                                    </div>
                                </td> 
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite20" class="quantite" onchange="calculateTotal6()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td> 
                                <td class="total total6"></td>                              
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Prestations portuaires/TC</a>
                                    </div>
                                </td> 
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite21" class="quantite" onchange="calculateTotal7()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td> 
                                <td class="total total7"></td>                            
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">TC</a>
                                    </div>
                                </td>  
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite22" class="quantite" onchange="calculateTotal8()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td> 
                                <td class="total total8"></td>                           
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Douane/TC</a>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite23" class="quantite" onchange="calculateTotal9()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td> 
                                <td class="total total9"></td>                                  
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Assurance/TC</a>
                                    </div>
                                </td>
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                 <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite24" class="quantite" onchange="calculateTotal10()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td> 
                                <td class="total total10"></td>                             
                            </tr>
                            <tr class="charges-row">
                                <td class="product-thumb">
                                    <a href="#" class="item-thumb">
                                    </a>
                                </td>
                                <td class="product-detail" data-title="Product Detail">
                                    <div>
                                        <a href="#">Autres Charges logistiques</a>
                                    </div>
                                </td> 
                                <td class="total-price" data-title="Total Price">
                                    <div>
                                </td>
                                <td>
                                    <div class="quantity" >
                                        <input type="number" name="quantite25" class="quantite" onchange="calculateTotal11()" step="0.01" required style="text-align: center; color: #666;background-color: #e6e6e6; border: none;"> 
                                </td>  
                                <td class="total total11"></td>                           
                            </tr>
                        </tbody>
                    </table>
                  <br>
                  <input type="submit" value="Calculer" onclick="calculateAllTotals(event)" style="border: none;
                    display: inline-flex;
                    height: 42px;
                    width: 110px;
                    align-items: right 100px;
                    color: #fff;
                    cursor: pointer;
                    background: #8eb852;
                    text-transform: uppercase;
                    justify-content: center;
                    letter-spacing: 1px;
                    font-size: 15px;
                    border-radius: 3px;
                    margin-top: 20px; /* Ajustez cette valeur pour déplacer le bouton vers le bas */
                    display: flex;
                    justify-content: center;
                    text-align: center;
                    margin-left: 305px;"
                   >
            </section>
            <h4></h4>
            <section id="costPriceSection"> 
            <p  style='margin-left : 575px ;margin-bottom : 40px ;color: #666;font-family: Lato-Bold'>22/05/2024</p>                
            <h3 style="margin-bottom: 40px;">dÉsignation de produit</h3>

<table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table" style="margin-bottom: 70px">
    <tr class="charges-row">
        <td style="color: #666;font-family: Lato-Bold">Poisson</td>
        <td style="color: #666;font-family: Lato-Bold">Jus</td>
        <td style="color: #666;font-family: Lato-Bold">Format</td>
        <td style="color: #666;font-family: Lato-Bold">Marque</td>
        <td style="color: #666;font-family: Lato-Bold">sauce</td>
        <td style="color: #666;font-family: Lato-Bold">Carton</td>
        <td style="color: #666;font-family: Lato-Bold">Barquette</td>
        <td style="color: #666;font-family: Lato-Bold">Etui</td>
    </tr>
    <tr class="charges-row">
        <td style="color: #666;font-family: Lato-Bold"><span id="valeurSelectionnee">Sardine</span></td>
        <td style="color: #666;font-family: Lato-Bold"><span id="jus"></span></td>
        <td style="color: #666;font-family: Lato-Bold"><span id="format"></span></td>
        <td style="color: #666;font-family: Lato-Bold"><span id="marque"></span></td>
        <td style="color: #666;font-family: Lato-Bold"><span id="selectedSauce">Tomate</span></td>
        <td style="color: #666;font-family: Lato-Bold"><span id="uniteCarton1"></span></td>
        <td style="color: #666;font-family: Lato-Bold"><span id="uniteBarquette1"></span></td>
        <td style="color: #666;font-family: Lato-Bold"><span id="uniteEtui1"></span></td>
    </tr>
</table>
            <h3 style="margin-bottom: 40px;">rÉsultat de la simulation</h3>
           <table cellspacing="0" class="table-cart shop_table shop_table_responsive cart woocommerce-cart-form__contents table" id="shop_table" >
              <tr class="charges-row">
                 <td style="color: #666;font-family: Lato-Bold">Unité de vente</td>
                 <td style="color: #666;font-family: Lato-Bold"><span id="uniteVente">0 (unité)</span></td>
             </tr>
              <tr class="charges-row">
                 <td style="color: #666;font-family: Lato-Bold">Marge</td>
                 <td style="color: #666;font-family: Lato-Bold"><span id="marge">0 %</span></td>
             </tr>
             <tr class="charges-row">
                 <td style="color: #666;font-family: Lato-Bold">Coût de revient unitaire</td>
                 <td style="color: #666;font-family: Lato-Bold"><span id="costPriceResult">0 DH</span></td>
             </tr>
             <tr class="charges-row">
                 <td style="color: #666;font-family: Lato-Bold">Prix de vente</td>
                 <td style="color: #666;font-family: Lato-Bold"><span id="prixVenteResult">0 DH</span></td>
             </tr>
          </table>
    <button type="submit" style="border: none;
                    display: inline-flex;
                    height: 42px;
                    width: 110px;
                    align-items: right 100px;
                    color: #fff;
                    cursor: pointer;
                    background: #8eb852;
                    text-transform: uppercase;
                    justify-content: center;
                    letter-spacing: 1px;
                    font-size: 15px;
                    border-radius: 3px;
                    margin-top: 20px;
                    display: flex;
                    justify-content: center;
                    text-align: center;
                    margin-left: 580px;">Générer PDF</button>
        </section>
      </form>
     </div>
     <script>
        document.getElementById('monFormulaire').addEventListener('submit', function(event) {
            // Code pour vérifier ou manipuler les données avant la soumission, si nécessaire
            console.log('Formulaire soumis!');
        });
     </script>
		<script src="js/jquery-3.3.1.min.js"> </script>
	
		<script src="js/jquery.steps.js"></script>

		<script src="js/main.js"></script>
<button id="print-button" onclick="window.print()">IMPRIMER</button>
</body>
</html>