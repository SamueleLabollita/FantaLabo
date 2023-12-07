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
![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/17b66a8c-aafb-4257-ad04-3a6f6f39463b)

# SCHEMA RELAZIONALE
USER(<ins>Email</ins>, nome, cognome, ruolo)

SQUADRA(<ins>nome_squadra</ins>, colori)

GIOCATORE(<ins>id</ins>, nome, cognome, <ins>SQUADRA _id</ins>)

GIOCA(<ins>GIOCATORE_id</ins>, <ins>SQUADRA_id</ins>)

PARTITA(<ins>id</ins>, squadra_casa, squadra_ospite, gol, assist, ammonizioni, espulsioni)


# MOKUP
schermata principale

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/99130e94-0e9b-4d41-8633-e6ffac0cec5f)

Schermata inserimento giocatori

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/0cb1fe5d-6ac2-4418-a4c4-90d985c32e24)

Schermata partita

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/5baf6509-ff00-42c0-a8ba-5a846f2c266f)

schermata risultati

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/35f127c4-3878-4c75-bc10-6877032b97cc)

schermata classifica

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/62d6b637-6782-4d46-8b20-6b8fe6f903bb)

# QUERY DATABASE
Creo il database
CREATE DATABASE FantaLabo



