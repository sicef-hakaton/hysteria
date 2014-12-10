CREATE TABLE korisnik (
    	korisnicko_ime INTEGER(7),
    	lozinka VARCHAR(255),
		tip VARCHAR(15),
    	PRIMARY KEY(korisnicko_ime),
    	CONSTRAINT chk_tip CHECK (tip = 'administrator' XOR tip = 'posetilac')
    );

CREATE TABLE zahtev (
    id INTEGER(10) AUTO_INCREMENT,
    tip VARCHAR(50) NOT NULL,
	svrha VARCHAR(255),
    datum_zahtevanja DATE NOT NULL,
    datum_izdavanja DATE,
    status_f VARCHAR(20) DEFAULT 'na čekanju',
    komentar VARCHAR(1500),
    korisnicko_ime_fk INTEGER(7) NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(korisnicko_ime_fk) REFERENCES korisnik(korisnicko_ime),
    CONSTRAINT chk_status_f CHECK (status_f = 'na čekanju' XOR status_f='odbijen' XOR status_f = 'obradjen'),
	CONSTRAINT chk_datum_izdavanja CHECK (status_f = 'obradjen' AND datum_izdavanja IS NOT NULL),
	CONSTRAINT chk_komentar CHECK (status_f = 'odbijen' AND komentar IS NOT NULL),
	CONSTRAINT chk_svrha CHECK ((tip = 'potvrda' OR tip = 'uverenje' OR tip = 'transkript ocena') AND svrha IS NOT NULL)
    );
	
CREATE TABLE obavestenje (
    id INTEGER(10) AUTO_INCREMENT,
    naslov VARCHAR(255) NOT NULL,
    sadrzaj VARCHAR(2500) NOT NULL,
	tip VARCHAR(255),
    datum DATE,
    link VARCHAR(255),
    PRIMARY KEY(id)
    );