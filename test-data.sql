INSERT INTO `e_studentska_sluzba`.`korisnik` (`korisnicko_ime`, `lozinka`, `tip`) VALUES ('13638', '2012991730066', 'administrator');
INSERT INTO `e_studentska_sluzba`.`korisnik` (`korisnicko_ime`, `lozinka`, `tip`) VALUES ('13812', 'QWxy777', 'administrator');
INSERT INTO `e_studentska_sluzba`.`korisnik` (`korisnicko_ime`, `lozinka`, `tip`) VALUES ('13542', 'abcdefg', 'posetilac');
INSERT INTO `e_studentska_sluzba`.`korisnik` (`korisnicko_ime`, `lozinka`, `tip`) VALUES ('13555', 'genijalac', 'posetilac');
INSERT INTO `e_studentska_sluzba`.`korisnik` (`korisnicko_ime`, `lozinka`, `tip`) VALUES ('13789', 'mnogo_sam_jak', 'posetilac');
INSERT INTO `e_studentska_sluzba`.`korisnik` (`korisnicko_ime`, `lozinka`, `tip`) VALUES ('14251', 'zivela_pobeda', 'posetilac');
INSERT INTO `e_studentska_sluzba`.`korisnik` (`korisnicko_ime`, `lozinka`, `tip`) VALUES ('15001', 'hahaton', 'posetilac');


INSERT INTO `e_studentska_sluzba`.`obavestenje` (`naslov`, `sadrzaj`, `datum`, `link`,  `tip`) VALUES ('Studentski tim HYSTERIA i ove godine na Hakatonu', 'HYSTERIA kao po obicaju zapocinje Hakaton veoma histericno, u delirijumu od uzbudnjenja i sta ce uciniti... Pozelimo im srecu da HYSTERIA ne prestane nikada...', '2014-11-22', NULL, 'opste');
INSERT INTO `e_studentska_sluzba`.`obavestenje` (`naslov`, `sadrzaj`, `datum`, `link`,  `tip`) VALUES ('Pocetak nastave na fakultetu', 'Nastava na fakultetu pocinje 08.10.2014. godine, a odgovarajuci raspored casova mozete pronaci na: elfak.ni.ac.rs', '2014-10-01', NULL, 'stipendije');
INSERT INTO `e_studentska_sluzba`.`obavestenje` (`naslov`, `sadrzaj`, `datum`, `link`,  `tip`) VALUES ('Pocetak nastave na fakultetu', 'Nastava na fakultetu pocinje 08.10.2014. godine, a odgovarajuci raspored casova mozete pronaci na: elfak.ni.ac.rs', '2014-08-02', NULL, 'prakse');
INSERT INTO `e_studentska_sluzba`.`obavestenje` (`naslov`, `sadrzaj`, `datum`, `link`,  `tip`) VALUES ('Pocetak nastave na fakultetu', 'Nastava na fakultetu pocinje 08.10.2014. godine, a odgovarajuci raspored casova mozete pronaci na: elfak.ni.ac.rs', '2014-07-05', NULL, 'stipendije');
INSERT INTO `e_studentska_sluzba`.`obavestenje` (`naslov`, `sadrzaj`, `datum`, `link`,  `tip`) VALUES ('Pocetak nastave na fakultetu', 'Nastava na fakultetu pocinje 08.10.2014. godine, a odgovarajuci raspored casova mozete pronaci na: elfak.ni.ac.rs', '2014-06-03', NULL, 'prakse');



INSERT INTO `e_studentska_sluzba`.`zahtev` (`tip`, `svrha`, `datum_zahtevanja`, `datum_izdavanja`, `status_f`, `komentar`, `korisnicko_ime_fk`) VALUES ('Potvrda', 'za zdravstvenu knjizicu', '2014-11-03', '2014-11-07' ,'obradjen', NULL, '13778');
INSERT INTO `e_studentska_sluzba`.`zahtev` (`tip`, `svrha`, `datum_zahtevanja`, `datum_izdavanja`, `status_f`, `komentar`, `korisnicko_ime_fk`) VALUES ('Potvrda', 'za zdravstvenu knjizicu', '2014-11-09', NULL, 'na čekanju', NULL, '121');
INSERT INTO `e_studentska_sluzba`.`zahtev` (`tip`, `svrha`, `datum_zahtevanja`, `datum_izdavanja`, `status_f`, `komentar`, `korisnicko_ime_fk`) VALUES ('Potvrda', 'za zdravstvenu knjizicu', '2014-11-05', NULL, 'na čekanju', NULL, '332');
INSERT INTO `e_studentska_sluzba`.`zahtev` (`tip`, `svrha`, `datum_zahtevanja`, `datum_izdavanja`, `status_f`, `komentar`, `korisnicko_ime_fk`) VALUES ('Potvrda', 'za javni gradski prevoz', '2014-11-11', NULL, 'odbijen', 'morate prvo regulisati status', '1113');
INSERT INTO `e_studentska_sluzba`.`zahtev` (`tip`, `svrha`, `datum_zahtevanja`, `datum_izdavanja`, `status_f`, `komentar`, `korisnicko_ime_fk`) VALUES ('Transkript ocena', 'upis studija u inostranstvu', '2014-11-03', NULL, 'na čekanju', NULL, '777');