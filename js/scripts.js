/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


function deroulerContenu(objet) {
    if(document.getElementById("contenuDeroulant").className =='contenuAffiche') {
        document.getElementById("contenuDeroulant").className = 'contenuCache'; 
    } else {
        document.getElementById("contenuDeroulant").className = 'contenuAffiche';   
    }
} // deroulerContenu() 