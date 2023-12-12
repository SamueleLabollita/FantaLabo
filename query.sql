
CREATE TABLE UTENTE ( 
    Email VARCHAR(255) PRIMARY KEY, 
    nome VARCHAR(255), 
    cognome VARCHAR(255), 
    username VARCHAR(255), 
    ruolo VARCHAR(255) 
);

CREATE TABLE CAMPIONATO ( 
    id int AUTO_INCREMENT PRIMARY KEY,
    nome_campionato VARCHAR(255) 
);

CREATE TABLE SQUADRA ( 
    nome_squadra VARCHAR(255) PRIMARY KEY, 
    colori VARCHAR(255),
    id int,
    FOREIGN KEY (id) REFERENCES CAMPIONATO(id)
);

CREATE TABLE GIOCATORE ( 
    id INT PRIMARY KEY, 
    nome VARCHAR(255), 
    cognome VARCHAR(255), 
    SQUADRA_id VARCHAR(255), 
    FOREIGN KEY (SQUADRA_id) REFERENCES SQUADRA(nome_squadra)
    ruolo VARCHAR(255), 
);

CREATE TABLE GIOCA ( 
    GIOCATORE_id INT, 
    SQUADRA_id VARCHAR(255), 
    PRIMARY KEY (GIOCATORE_id, SQUADRA_id), 
    FOREIGN KEY (GIOCATORE_id) REFERENCES GIOCATORE(id), 
    FOREIGN KEY (SQUADRA_id) REFERENCES SQUADRA(nome_squadra) 
);

CREATE TABLE PARTITA ( 
    id INT PRIMARY KEY, 
    squadra_casa VARCHAR(255), 
    squadra_ospite VARCHAR(255), 
    gol VARCHAR(255), 
    assist VARCHAR(255), 
    ammonizioni VARCHAR(255), 
    espulsioni VARCHAR(255), 
    FOREIGN KEY (squadra_casa) REFERENCES SQUADRA(nome_squadra), 
    FOREIGN KEY (squadra_ospite) REFERENCES SQUADRA(nome_squadra) 
);