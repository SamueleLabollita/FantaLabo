# FantaLabo
# DESCRIZIONE 
Facilitare il calcolo dei voti dei calciatori con i vari bonus (gol, assist) e malus (ammonizioni, espulsioni) per sommarli e scoprire la squadra vincente. Sucessivamente calcolare la calssifica totale e conoscere il vincitore del campionato.  (ispirato a fantamaster).
# Problema:  
Aiutare gli appasionati di calcio che vogliono creare un campionato di fantacalcio tra amici per divertirsi, secondo i voti dei giocatori reali.
# Elenco funzionlità:  
-registra un campionato (personalizzazione nome e budget per squadra)  
-registra una squadra (personalizzazione nome e colori sociali)  
-mercato (inserimento giocatori nelle squadre)  
-voto giocatore  
-punteggio totale di squadra  
-calendario partite  
-classifica (3pt vittoria; 1pt pareggio; 0pt sconfitta)  
-classifica statistiche giocatori (gol, assist, g/a, ammonizioni, espulsioni)
# TARGET
appasionati di calcio
# SCHEMA E/R
![alt text](ER.png)
# SCHEMA RELAZIONALE
giocatore(<ins>id_giocatore</ins>, nome, cognome, ruolo, nazione, gol, assist, sostituito, subentrato, ammonizione, espulso, SQUADRA_nome_squadra)

squadra(<ins>nome_squadra</ins>, budget, colori, stemma, PARTECIPANTE_email, CAMPIONATO_nome_campionato)

campionato(<ins>nome_campionato</ins>, partite_giocate, n_squadre, classifica)

partecipante(<ins>email</ins>, nome, cognome, password)
# MOKUP
schermata principale

![alt text](principale.jpg)

Schermata inserimento giocatori

![alt text](inserimentoGiocatori.PNG)

Schermata partita

![alt text](partita.jpg)

schermata risultati

![alt text](risultati.jpg)

schermata classifica

![alt text](classifica.jpg)
