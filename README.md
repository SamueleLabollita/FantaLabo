# FantaLabo
# DESCRIZIONE 
Facilitare il calcolo dei voti dei calciatori con i vari bonus (gol, assist) e malus (ammonizioni, espulsioni) per sommarli e scoprire la squadra vincente. Sucessivamente calcolare la calssifica totale e conoscere il vincitore del campionato.  (ispirato a fantamaster).
# Problema:  
offrire agli appassionati di calcio un'esperienza interattiva e coinvolgente, permettendo di creare e gestire squadre virtuali composte da giocatori reali. Questa applicazione mira a fornire un'esperienza simile a quella di un dirigente di una squadra di calcio, consentendo agli utenti di prendere decisioni riguardo alla formazione da schierare scegliendo i giocatori più adatti secondo le loro idee.
# Elenco funzionlità:  
FRONT

-registra un campionato (personalizzazione nome) 

-registra una squadra (personalizzazione nome e colori sociali) 

-schierare una formazione

-visualizzazione della classifica (3pt vittoria; 1pt pareggio; 0pt sconfitta)  
BACK

-inserire i giocatori nelle squadre

-voto giocatore

# TARGET
appasionati di calcio
# SCHEMA E/R
![er](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/8370c525-27f4-49f9-9d6f-c2d5a00098f4)



# SCHEMA RELAZIONALE
USER(<ins>Email</ins>, nome, cognome, username, ruolo, squadra_posseduta)

CAMPIONATO(<ins>id</ins>, nome_campionato)

SQUADRA(<ins>nome_squadra</ins>, colori, <ins>CAMPIONATO_id</ins>)

GIOCATORE(<ins>id</ins>, nome, cognome, <ins>SQUADRA _id</ins>, ruolo)

GIOCA(<ins>GIOCATORE_id</ins>, <ins>SQUADRA_id</ins>)

PARTITA(<ins>id</ins>, squadra_casa, squadra_ospite, gol, assist, ammonizioni, espulsioni)


# MOKUP
schermata principale

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/99130e94-0e9b-4d41-8633-e6ffac0cec5f)

Schermata inserimento giocatori

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/0cb1fe5d-6ac2-4418-a4c4-90d985c32e24)



# PREREQUISITI

-DOCKER 

-CODESPACES

PER IL DATABASE --> PASSAGGI

docker run --name db -p 41061:22 -p 41062:80 -d -v /workspaces/FantaLabo:/www tomsik68/xampp:8

-CLICCARE L'ICONA DELLA BALENA

-![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/7320d59e-d019-4d62-b5ed-c3134e1d2810)

-TASTO DESTRO SULLA RIGA CON SCRITTO (tomsik68..)

-OPEN IN BROWSER

-AL POSTO DI ....dashboard/ --> sostituire con (www)


