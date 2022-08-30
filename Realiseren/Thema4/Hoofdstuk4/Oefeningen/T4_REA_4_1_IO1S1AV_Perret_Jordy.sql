-- Denk aan je moduleheader!!

/*
	Naam:			Jordy Perret
	Datum:			24-5-2005
	Omschrijving:	Realiseren 4.1
*/

-- uitwerking T4_REA_H4_oefening_1_SQL

-- Gebruik db Leerlingen
-- T4_REA_H4_Oefening_1_create.sql
-- Of: create script: ELO > T4 REA > instructies 
-- *********************************************


-- 0a. Toon alle gegevens van de tabel 'leerling'.

USE Leerlingen
SELECT * FROM leerling

-- 0b. Toon alle leerlingen uit klas 12.

SELECT *
FROM leerling
WHERE klas_nr = 12


-- 1. Zorg dat alle leerlingen in klas 666 komen te zitten.

UPDATE leerling
SET klas_nr = 666

-- 2. Check bovenstaande bewerking


-- // installeer de database opnieuw:
-- A. sla dit script op
-- B. sluit dit script af
-- C. voer T4_REA_H4_Oefening_1_create.sql opnieuw uit

-- 3. Verander de klas van alle leerlingen uit Everett in 666.

UPDATE leerling
SET klas_nr = 666
WHERE woonplaats = 'Everett';


-- 4. Check of bovenstaande bewerking gewerkt heeft.

USE Leerlingen
SELECT *
FROM dbo.leerling
WHERE woonplaats = 'Everett';

-- 5. Alle studenten die geboren zijn VOOR 1 januari 1993 worden uitgeschreven. Hun klas_nr wordt NULL. Zorg daarvoor.

UPDATE leerling
SET klas_nr = NULL
WHERE geboorte_datum < '1993-01-01';

-- 6. Check bovenstaande bewerking.


-- 7. Tel 10000 op bij de nummers van de studenten met nummer groter dan 2500.

UPDATE leerling
SET ll_nr += 10000
WHERE ll_nr > 2500


-- 8. Check bovenstaande bewerking.


-- 9. Verander alle achternamen van studenten, geboren NA 1 januari 1995 en waarvan achternamen zitten tussen de A en de K, in 'Astra Zeneca'

UPDATE leerling
SET achternaam = 'Astra Zeneca'
WHERE geboorte_datum > '1995-01-01'
	AND achternaam > 'A'
	AND achternaam < 'K'


-- 10. Check bovenstaande bewerking.


-- 11. Verander alle voornamen van leerlingen in 'Stadsbewoner' en achternamen in 'Voor de lol' die wonen in een plaatsnaam die eindigt met 'City'.


-- 12. Check bovenstaande bewerking.


-- 13. Verander de geboortedatum van de jongste student in jouw geboortedatum. Maak gebruik van ll_nr.
-- (zonder subquery)


-- 14. Check bovenstaande bewerking.


-- 15. Verander de voornaam van student met ll_nr 2348 in 'Babs'


-- 16. Check bovenstaande bewerking.