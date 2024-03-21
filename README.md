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
![image](![er](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/cccc284e-6eb2-4821-b702-12718ac17a99)
)


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

Schermata partita

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/5baf6509-ff00-42c0-a8ba-5a846f2c266f)

schermata risultati

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/35f127c4-3878-4c75-bc10-6877032b97cc)

schermata classifica

![image](https://github.com/SamueleLabollita/FantaLabo/assets/101709291/62d6b637-6782-4d46-8b20-6b8fe6f903bb)

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


