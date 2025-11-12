# API Eindopdracht – Eisen & Wensen

## Kernfunctionaliteiten (Eisen)
1. **Gebruikersbeheer**
   - Registreren van gebruikers.
   - Inloggen van gebruikers met **access tokens** (Sanctum).
   - Authenticatie voor beveiligde endpoints.

2. **Voetballers**
   - CRUD: Aanmaken, lezen, bijwerken, verwijderen van voetballers.
   - Attributen: naam, leeftijd, positie.

3. **Clubs**
   - CRUD: Aanmaken, lezen, bijwerken, verwijderen van clubs.
   - Attributen: naam, stad.

4. **Many-to-Many Relatie**
   - Koppelen en ontkoppelen van voetballers aan clubs via `club_voetballer`.
   - Endpoints voor lijst van voetballers per club en clubs per voetballer.

5. **Endpoints en API-documentatie**
   - Alle CRUD-endpoints zijn beschreven met HTTP-methodes, URL, vereiste parameters en authenticatie.

---

## Extra Functionaliteiten (Wensen)
1. Frontend die alle kernflows ondersteunt (login → token → CRUD).
2. Filteren en zoeken van voetballers of clubs.
3. Rotating access tokens of refresh-token flow.
4. Import/export van data (CSV/JSON).
5. Logging van belangrijke events (login, create/update/delete).
6. Extra endpoints voor statistieken (bv. top spelers per club).

---

### Acceptatiecriteria
- **O (Onvoldoende):** Kernfunctionaliteiten ontbreken of er is geen authenticatie.
- **V (Voldoende):** Alle kernfunctionaliteiten zijn aanwezig met correct gebruik van tokens.
- **G (Goed):** Alle kernfunctionaliteiten én wensen zijn aanwezig; prioriteit is duidelijk, logging en extra features zoals search of token refresh zijn geïmplementeerd.
