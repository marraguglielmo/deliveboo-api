
DeliveBoo - Back-end
===

## Introduzione
DeliveBoo è una web app che permette agli utenti di ordinare cibo a domicilio nella città di ***. Questa sezione si occupa dello sviluppo back-end, gestendo la logica di business e le operazioni di database.

## Tecnologie Utilizzate
- MySQL
- MAMP
- Node.js
- Laravel
- JavaScript
- Braintree (per il sistema di pagamento)

## Requisiti Funzionali
- Registrazione Ristoratori: Permette ai ristoratori di registrarsi alla piattaforma.
- Aggiunta Piatti: Permette ai ristoratori di aggiungere e modificare piatti.
- Ricerca Ristoranti: Permette ai visitatori di cercare ristoranti per tipologia.
- Visualizzazione Menu: Permette ai visitatori di vedere il menu di un ristorante.
- Pagamento: Gestisce il pagamento degli ordini tramite Braintree.
-Riepilogo Ordini: Permette ai ristoratori di visualizzare il riepilogo degli ordini ricevuti.

## API Endpoints

- Auth:
    - POST /api/auth/register: Registrazione utente
    - POST /api/auth/login: Login utente
- Ristoranti:
    - GET /api/restaurants: Ottieni tutti i ristoranti
    - POST /api/restaurants: Aggiungi un nuovo ristorante
    - GET /api/restaurants/:id: Ottieni i dettagli di un ristorante
    - PUT /api/restaurants/:id: Modifica un ristorante
    - DELETE /api/restaurants/:id: Elimina un ristorante
- Ordini:
    - GET /api/orders: Ottieni tutti gli ordini
    - POST /api/orders: Crea un nuovo ordine

## Struttura del Progetto
```markdown
deliveboo-backend/
├── config/
│ ├── db.js
│ ├── ...
├── controllers/
│ ├── authController.js
│ ├── restaurantController.js
│ ├── orderController.js
│ └── ...
├── models/
│ ├── User.js
│ ├── Restaurant.js
│ ├── Order.js
│ └── ...
├── routes/
│ ├── authRoutes.js
│ ├── restaurantRoutes.js
│ ├── orderRoutes.js
│ └── ...
├── middleware/
│ ├── authMiddleware.js
│ └── ...
├── app.js
├── server.js
└── package.json
    -Statistiche Ordini: Permette ai ristoratori di visualizzare le statistiche degli ordini.
```
