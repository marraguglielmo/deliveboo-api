<?php

return [
    [
        "business_name" => "Pizzeria Paradiso",
        "address" => "Via Balestrieri 6",
        "phone_number" => "0234637286",
        "image" => "https://images.unsplash.com/photo-1571757392712-7c1052de7ce5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["pizzeria"],
        "dishes" => [
            [
                "name" => "Margherita Classica",
                "price" => 6.50,
                "ingredients" => ["pomodoro", "mozzarella", "basilico"],
                "image" => "https://images.unsplash.com/photo-1574071318508-1cdbab80d002?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Quattro Stagioni",
                "price" => 8.50,
                "ingredients" => ["pomodoro", "mozzarella", "funghi", "prosciutto cotto", "olive", "carciofi"],
                "image" => "https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?q=80&w=1981&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Calzone Ripieno",
                "price" => 7.00,
                "ingredients" => ["pomodoro", "mozzarella", "ricotta", "salame", "basilico"],
                "image" => "https://images.unsplash.com/photo-1641244999574-5afea228bd26?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => false
            ],
        ]
    ],
    [
        "business_name" => "La Dolce Pizza",
        "address" => "Via Giotto 22",
        "phone_number" => "0254457286",
        "image" => "https://images.unsplash.com/photo-1564936281291-294551497d81?q=80&w=1952&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["pizzeria", "italiano"],
        "dishes" => [
            [
                "name" => "Pizza al Tartufo",
                "price" => 18.50,
                "ingredients" => ["mozzarella", "tartufo"],
                "image" => "https://images.unsplash.com/photo-1566843972223-8fc2316bfa9e?q=80&w=2022&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Pizza Prosciutto e Funghi",
                "price" => 9.00,
                "ingredients" => ["pomodoro", "mozzarella", "funghi", "prosciutto cotto"],
                "image" => "https://plus.unsplash.com/premium_photo-1663858366999-aa1ce123a972?q=80&w=1887&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Pizza Diavola",
                "price" => 8.50,
                "ingredients" => ["pomodoro", "mozzarella", "salame piccante"],
                "image" => "https://images.unsplash.com/photo-1534308983496-4fabb1a015ee?q=80&w=1776&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Napoli Delight",
    //     "address" => "Viale Piave 38",
    //     "phone_number" => "0254857262",
    //     "image" => "https://images.unsplash.com/photo-1579751626657-72bc17010498?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["pizzeria", "italiano"],
    //     "dishes" => [
    //         [
    //             "name" => "Pizza Marinara",
    //             "price" => 8.50,
    //             "ingredients" => ["pomodoro", "origano"],
    //             "image" => "https://images.unsplash.com/photo-1458642849426-cfb724f15ef7?q=80&w=2000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true

    //         ],
    //         [
    //             "name" => "Pizza Capricciosa",
    //             "price" => 9.00,
    //             "ingredients" => ["pomodoro", "mozzarella", "prosciutto cotto", "funghi", "olive", "carciofini"],
    //             "image" => "https://images.unsplash.com/photo-1632641736168-3a77815a6384?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true

    //         ],
    //         [
    //             "name" => "Pizza Quattro Formaggi",
    //             "price" => 8.50,
    //             "ingredients" => ["pomodoro", "mozzarella", "salame piccante"],
    //             "image" => "https://images.unsplash.com/photo-1513104890138-7c749659a591?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Pizza e Passione",
        "address" => "Via Savona 23",
        "phone_number" => "0289857262",
        "image" => "https://images.unsplash.com/photo-1619853618139-fe43aff572fa?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["pizzeria", "italiano"],
        "dishes" => [
            [
                "name" => "Pizza Salsiccia e Friarielli",
                "price" => 9.50,
                "ingredients" => ["mozzarella", "salsiccia", "friarielli"],
                "image" => "https://plus.unsplash.com/premium_photo-1661762555601-47d088a26b50?q=80&w=1792&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Pizza Ortolana",
                "price" => 8.00,
                "ingredients" => ["pomodoro", "mozzarella", "zucchine", "melanzane", "peperoni"],
                "image" => "https://images.unsplash.com/photo-1617470702892-e01504297e84?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Pizza Bufalina",
                "price" => 8.50,
                "ingredients" => ["pomodoro", "mozzarella", "basilico"],
                "image" => "https://images.unsplash.com/photo-1604068549290-dea0e4a305ca?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => false
            ],
        ]
    ],
    [
        "business_name" => "Golden Dragon",
        "address" => "Via Paolo Sarpi 3",
        "phone_number" => "02898572376",
        "image" => "https://plus.unsplash.com/premium_photo-1664299332779-5cadf16015a7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["cinese", "italiano"],
        "dishes" => [
            [
                "name" => "Pollo al Limone",
                "price" => 7.00,
                "ingredients" => ["pollo", "limone", "zenzero", "salsa di soia", "aceto di riso", "cipollotto"],
                "image" => "https://images.unsplash.com/photo-1560717869-37296557a131?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Maiale in Agrodolce",
                "price" => 8.50,
                "ingredients" => ["maiale", "aceto di riso", "salsa di soia", "peperoni", "broccoli"],
                "image" => "https://images.unsplash.com/photo-1623689046286-01d812cc8bad?q=80&w=2075&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Riso alla Cantonese",
                "price" => 5.50,
                "ingredients" => ["riso", "uova", "carote", "piselli", "cipollotto", "salsa di soia"],
                "image" => "https://images.unsplash.com/photo-1578160112054-954a67602b88?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => false
            ],
        ]
    ],
    // [
    //     "business_name" => "Panda Palace",
    //     "address" => "Via Luigi Canonica 12",
    //     "phone_number" => "02898572479",
    //     "image" => "https://images.unsplash.com/photo-1559667709-eabb5b50117a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["cinese"],
    //     "dishes" => [
    //         [
    //             "name" => "Anatra alla Pechinese",
    //             "price" => 12.50,
    //             "ingredients" => ["anatra", "miele", "sake", "zenzero", "cipolla verde", "zucchero di canna"],
    //             "image" => "https://images.unsplash.com/photo-1543362426-39c5b9067c0f?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true

    //         ],
    //         [
    //             "name" => "Gamberi in Salsa Piccante",
    //             "price" => 10.00,
    //             "ingredients" => ["gamberi", "peperoncino", "aglio", "salsa di soia", "ketchup"],
    //             "image" => "https://images.unsplash.com/photo-1535400255456-984241443b29?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true

    //         ],
    //         [
    //             "name" => "Zuppa di Wonton",
    //             "price" => 6.50,
    //             "ingredients" => ["pasta di wonton", "carne di maiale", "gamberetti", "cipolla verde", "zenzero", "salsa di soia"],
    //             "image" => "https://images.unsplash.com/photo-1504669221159-56caf7b07f57?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => false
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Mandarin Magic",
        "address" => "Via Sirtori 14",
        "phone_number" => "02896562469",
        "image" => "https://images.unsplash.com/photo-1498654896293-37aacf113fd9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["cinese"],
        "dishes" => [
            [
                "name" => "Manzo con Broccoli",
                "price" => 14.50,
                "ingredients" => ["carne di manzo", "broccoli", "salsa di soia", "olio di sesamo", "brodo di carne"],
                "image" => "https://images.unsplash.com/photo-1573225342350-16731dd9bf3d?q=80&w=1962&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Noodles alla Piastra",
                "price" => 6.00,
                "ingredients" => ["noodles", "gamberetti", "carote", "peperoni", "cavolo", "germogli di soia", "salsa di soia", "zenzero"],
                "image" => "https://images.unsplash.com/photo-1585032226651-759b368d7246?q=80&w=1892&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Pollo Kung Pao",
                "price" => 6.50,
                "ingredients" => ["pollo", "arachidi", "peperoncino", "cipolla", "peperone verde", "aceto di riso"],
                "image" => "https://plus.unsplash.com/premium_photo-1701118441783-d68d6bb12060?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Dynasty Delight",
        "address" => "Piazzale Bacone 21",
        "phone_number" => "02876587469",
        "image" => "https://plus.unsplash.com/premium_photo-1669727914916-9d093297e1da?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["cinese"],
        "dishes" => [
            [
                "name" => "Riso Saltato con Gamberi",
                "price" => 4.50,
                "ingredients" => ["riso", "gamberi", "piselli", "carote", "uova", "cipolla"],
                "image" => "https://images.unsplash.com/photo-1569058242252-623df46b5025?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => false

            ],
            [
                "name" => "Involtini Primavera",
                "price" => 5.00,
                "ingredients" => ["carne di maiale", "cavolo cinese", "carote", "funghi shiitake", "germogli di soia", "cipolla verde", "salsa di soia"],
                "image" => "https://images.unsplash.com/photo-1606525437679-037aca74a3e9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Pollo al Curry",
                "price" => 6.50,
                "ingredients" => ["pollo", "cipolla", "zenzero", "pomodori", "latte di cocco", "pasta di curry", "peperoni", "patate", "carote", "coriandolo"],
                "image" => "https://images.unsplash.com/photo-1594610352113-ad218529cfb7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Sakura Sushi",
    //     "address" => "Corso Magenta 12",
    //     "phone_number" => "02848587769",
    //     "image" => "https://images.unsplash.com/photo-1553621042-f6e147245754?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["giapponese"],
    //     "dishes" => [
    //         [
    //             "name" => "Sushi Misto",
    //             "price" => 21.50,
    //             "ingredients" => ["riso", "gamberi", "salmone", "tonno", "avocado", "alga nori", "wasabi", "zenzero marinato"],
    //             "image" => "https://images.unsplash.com/photo-1611143669185-af224c5e3252?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => false

    //         ],
    //         [
    //             "name" => "Sashimi di Tonno",
    //             "price" => 6.00,
    //             "ingredients" => ["tonno", "wasabi", "zenzero marinato", "salsa di soia"],
    //             "image" => "https://images.unsplash.com/photo-1490052048947-f6d652c8512a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true

    //         ],
    //         [
    //             "name" => "Uramaki California",
    //             "price" => 8.00,
    //             "ingredients" => ["riso", "salmone", "avocado", "surimi", "cetriolo", "semi di sesamo"],
    //             "image" => "https://images.unsplash.com/photo-1617196035154-1e7e6e28b0db?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Tokyo Tempura",
        "address" => "Via Monte Rosa 4",
        "phone_number" => "02848584888",
        "image" => "https://images.unsplash.com/photo-1590987337605-84f3ed4dc29f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["giapponese"],
        "dishes" => [
            [
                "name" => "Tempura di Gamberi",
                "price" => 6.00,
                "ingredients" => ["gamberi", "tempura", "salsa tempura"],
                "image" => "https://images.unsplash.com/photo-1669385184561-1f4d6153bd65?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Ramen al Miso",
                "price" => 12.50,
                "ingredients" => ["bordo vegetale", "miso", "zenzero", "salsa di soia", "mirin", "tare", "noodles", "tofu", "uovo sodo", "alga nori", "funghi shiitake"],
                "image" => "https://images.unsplash.com/photo-1623341214825-9f4f963727da?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Yakitori di Pollo",
                "price" => 8.00,
                "ingredients" => ["pollo", "salsa teriyaki", "sake", "zenzero", "cipollotto"],
                "image" => "https://images.unsplash.com/photo-1634003310704-9a1a5771ab8e?q=80&w=1926&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Ninja Noodles",
        "address" => "Via Panfilo Castaldi 25",
        "phone_number" => "02848697888",
        "image" => "https://images.unsplash.com/photo-1534482421-64566f976cfa?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["giapponese"],
        "dishes" => [
            [
                "name" => "Ramen di Maiale",
                "price" => 14.50,
                "ingredients" => ["brodo di maiale", "chashu", "noodles", "uovo", "bambù"],
                "image" => "https://images.unsplash.com/photo-1617093727343-374698b1b08d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Gyoza",
                "price" => 9.50,
                "ingredients" => ["carne di maiale macinata", "cavolo cinese", "cipollotto", "salsa di soia", "zenzero"],
                "image" => "https://plus.unsplash.com/premium_photo-1661431423340-fa30b97312bc?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Tempura di Verdure",
                "price" => 6.00,
                "ingredients" => ["zucchine", "carote", "tempura", "salsa tempura"],
                "image" => "https://plus.unsplash.com/premium_photo-1667807522245-ae3de2a7813a?q=80&w=1900&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Samurai Sushi",
        "address" => "Via Vincenzo Monti 16",
        "phone_number" => "02823997888",
        "image" => "https://plus.unsplash.com/premium_photo-1668146932065-d08643791942?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["giapponese"],
        "dishes" => [
            [
                "name" => "Sushi Nigiri",
                "price" => 5.50,
                "ingredients" => ["riso", "salmone", "wasabi"],
                "image" => "https://images.unsplash.com/photo-1615750824451-cdf6c3b7e06a?q=80&w=1959&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Chirashi Don",
                "price" => 9.50,
                "ingredients" => ["riso", "salmone", "tonno", "uova di salmone", "tamago", "alga nori", "shiso"],
                "image" => "https://images.unsplash.com/photo-1534482421-64566f976cfa?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true

            ],
            [
                "name" => "Uramaki Philadelphia",
                "price" => 6.00,
                "ingredients" => ["riso", "salmone", "avocado", "philadelphia", "alga nori"],
                "image" => "https://images.unsplash.com/photo-1617196905100-216ffe128142?q=80&w=2064&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "El Mariachi",
        "address" => "Corso Buenos Aires 12",
        "phone_number" => "0293759462",
        "image" => "https://plus.unsplash.com/premium_photo-1679746244307-e3f10314cfaa?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["messicano", "italiano"],
        "dishes" => [
            [
                "name" => "Tacos al Pastor",
                "price" => 7.00,
                "ingredients" => ["tortilla di mais", "maiale", "ananas", "cipolla", "coriandolo"],
                "image" => "https://images.unsplash.com/photo-1611250188496-e966043a0629?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Enchiladas Verdes",
                "price" => 8.50,
                "ingredients" => ["tortilla di mais", "pollo", "salsa verde", "formaggio", "panna acida"],
                "image" => "https://images.unsplash.com/photo-1570461226513-e08b58a52c53?q=80&w=2074&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Guacamole con Chips",
                "price" => 5.00,
                "ingredients" => ["avocado", "lime", "cipolla", "pomodoro", "coriandolo", "tortilla chips"],
                "image" => "https://plus.unsplash.com/premium_photo-1681406689566-98c727aedda2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "La Hacienda",
        "address" => "Via della Moscova 5",
        "phone_number" => "0298732641",
        "image" => "https://images.unsplash.com/photo-1579932709647-3a151893f730?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["messicano", "spagnolo"],
        "dishes" => [
            [
                "name" => "Quesadilla de Pollo",
                "price" => 6.50,
                "ingredients" => ["tortilla di farina", "pollo", "formaggio", "peperoni", "cipolla"],
                "image" => "https://images.unsplash.com/photo-1618040996337-56904b7850b9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Fajitas de Res",
                "price" => 12.00,
                "ingredients" => ["manzo", "peperoni", "cipolla", "tortilla di farina", "guacamole"],
                "image" => "https://images.unsplash.com/photo-1586561945641-98a839abd3f7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Churros con Cioccolato",
                "price" => 4.00,
                "ingredients" => ["farina", "zucchero", "cioccolato", "cannella"],
                "image" => "https://images.unsplash.com/photo-1695234502934-dca6a45f88cb?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Cantina Mexicana",
    //     "address" => "Piazza della Repubblica 8",
    //     "phone_number" => "0236598741",
    //     "image" => "https://images.unsplash.com/photo-1625167171750-419e95f877d8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["messicano"],
    //     "dishes" => [
    //         [
    //             "name" => "Burrito de Carne Asada",
    //             "price" => 9.00,
    //             "ingredients" => ["tortilla di farina", "manzo", "fagioli neri", "riso", "formaggio", "salsa"],
    //             "image" => "https://images.unsplash.com/photo-1562059390-a761a084768e?q=80&w=2019&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Nachos con Queso",
    //             "price" => 6.00,
    //             "ingredients" => ["tortilla chips", "formaggio fuso", "jalapeños", "fagioli", "salsa"],
    //             "image" => "https://images.unsplash.com/photo-1582169296194-e4d644c48063?q=80&w=2000&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Tostadas de Tinga",
    //             "price" => 7.50,
    //             "ingredients" => ["tostadas", "pollo", "pomodoro", "cipolla", "lattuga", "panna acida"],
    //             "image" => "https://images.unsplash.com/photo-1613585435238-5577aa11505f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    // [
    //     "business_name" => "Taqueria El Sol",
    //     "address" => "Via Torino 20",
    //     "phone_number" => "0245896321",
    //     "image" => "https://plus.unsplash.com/premium_photo-1681406994502-bb673c265877?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["messicano"],
    //     "dishes" => [
    //         [
    //             "name" => "Tacos de Barbacoa",
    //             "price" => 8.00,
    //             "ingredients" => ["tortilla di mais", "agnello", "cipolla", "coriandolo", "salsa roja"],
    //             "image" => "https://plus.unsplash.com/premium_photo-1661730314652-911662c0d86e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Sopes con Chorizo",
    //             "price" => 7.00,
    //             "ingredients" => ["masa", "chorizo", "fagioli", "lattuga", "formaggio", "panna acida"],
    //             "image" => "https://images.unsplash.com/photo-1700629622456-13d722217d29?q=80&w=1997&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Elote",
    //             "price" => 4.50,
    //             "ingredients" => ["pannocchia", "maionese", "formaggio cotija", "peperoncino", "lime"],
    //             "image" => "https://images.unsplash.com/photo-1619719015141-8f5c1b8dfedf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Taj Mahal",
        "address" => "Via Dante 14",
        "phone_number" => "0283749201",
        "image" => "https://images.unsplash.com/photo-1552590635-27c2c2128abf?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["indiano", "italiano"],
        "dishes" => [
            [
                "name" => "Butter Chicken",
                "price" => 10.00,
                "ingredients" => ["pollo", "burro", "pomodoro", "spezie", "panna"],
                "image" => "https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Palak Paneer",
                "price" => 8.50,
                "ingredients" => ["spinaci", "paneer", "aglio", "zenzero", "spezie"],
                "image" => "https://images.unsplash.com/photo-1567188040759-fb8a883dc6d8?q=80&w=2034&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Samosa",
                "price" => 5.00,
                "ingredients" => ["patate", "piselli", "spezie", "farina", "olio"],
                "image" => "https://plus.unsplash.com/premium_photo-1695297515362-b51affc09b40?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Biryani House",
        "address" => "Via Vigevano 21",
        "phone_number" => "0298736452",
        "image" => "https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["indiano"],
        "dishes" => [
            [
                "name" => "Chicken Biryani",
                "price" => 12.00,
                "ingredients" => ["riso basmati", "pollo", "yogurt", "spezie", "menta"],
                "image" => "https://images.unsplash.com/photo-1631515243349-e0cb75fb8d3a?q=80&w=2088&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Lamb Rogan Josh",
                "price" => 14.00,
                "ingredients" => ["agnello", "cipolla", "yogurt", "spezie", "pomodoro"],
                "image" => "https://images.unsplash.com/photo-1628294896516-344152572ee8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Garlic Naan",
                "price" => 3.00,
                "ingredients" => ["farina", "aglio", "burro", "lievito", "sale"],
                "image" => "https://images.unsplash.com/photo-1565557623262-b51c2513a641?q=80&w=1971&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "India Palace",
        "address" => "Via Torino 38",
        "phone_number" => "0245896345",
        "image" => "https://images.unsplash.com/photo-1598514983318-2f64f8f4796c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["indiano", "thailandese"],
        "dishes" => [
            [
                "name" => "Tandoori Chicken",
                "price" => 11.00,
                "ingredients" => ["pollo", "yogurt", "limone", "spezie", "coriandolo"],
                "image" => "https://images.unsplash.com/photo-1617692855027-33b14f061079?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Chana Masala",
                "price" => 8.00,
                "ingredients" => ["ceci", "pomodoro", "cipolla", "spezie", "coriandolo"],
                "image" => "https://images.unsplash.com/photo-1542354254-d856f94968ea?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Gulab Jamun",
                "price" => 4.50,
                "ingredients" => ["latte", "farina", "sciroppo di zucchero", "cardamomo", "pistacchi"],
                "image" => "https://images.unsplash.com/photo-1616429266392-63ba6f1570a1?q=80&w=1954&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Curry Express",
    //     "address" => "Corso Como 15",
    //     "phone_number" => "0236478510",
    //     "image" => "https://images.unsplash.com/photo-1476224203421-9ac39bcb3327?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["indiano"],
    //     "dishes" => [
    //         [
    //             "name" => "Lamb Vindaloo",
    //             "price" => 13.00,
    //             "ingredients" => ["agnello", "aceto", "spezie", "patate", "pomodoro"],
    //             "image" => "https://images.unsplash.com/photo-1628294897055-a9bfca0f47ba?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Aloo Gobi",
    //             "price" => 7.50,
    //             "ingredients" => ["patate", "cavolfiore", "spezie", "pomodoro", "coriandolo"],
    //             "image" => "https://images.unsplash.com/photo-1652545296893-ff9227b3512e?q=80&w=2076&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Mango Lassi",
    //             "price" => 3.50,
    //             "ingredients" => ["mango", "yogurt", "zucchero", "cardamomo"],
    //             "image" => "https://images.unsplash.com/photo-1688458297155-228a3b1e5b49?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Seoul Garden",
        "address" => "Via Roma 45",
        "phone_number" => "0298745631",
        "image" => "https://images.unsplash.com/photo-1498654896293-37aacf113fd9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["coreano", "cinese"],
        "dishes" => [
            [
                "name" => "Bibimbap",
                "price" => 10.00,
                "ingredients" => ["riso", "verdure miste", "uovo", "carne di manzo", "gochujang"],
                "image" => "https://images.unsplash.com/photo-1600289031464-74d374b64991?q=80&w=1975&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Kimchi Jjigae",
                "price" => 9.00,
                "ingredients" => ["kimchi", "tofu", "maiale", "cipolla", "aglio", "brodo"],
                "image" => "https://plus.unsplash.com/premium_photo-1700947160393-78ab82cc71f4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Tteokbokki",
                "price" => 7.50,
                "ingredients" => ["tteok", "gochujang", "zucchero", "cipolla verde", "uova sode"],
                "image" => "https://images.unsplash.com/photo-1583224964978-2257b960c3d3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Korean BBQ House",
        "address" => "Corso Vittorio Emanuele 23",
        "phone_number" => "0245879632",
        "image" => "https://plus.unsplash.com/premium_photo-1669687759596-8d6d8836f480?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["coreano", "vietnamita"],
        "dishes" => [
            [
                "name" => "Bulgogi",
                "price" => 12.00,
                "ingredients" => ["manzo", "salsa di soia", "zucchero", "cipolla", "aglio", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1583032353423-04fd96ef221c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Samgyeopsal",
                "price" => 15.00,
                "ingredients" => ["pancetta di maiale", "aglio", "cipolla", "salsa ssamjang", "verdure"],
                "image" => "https://images.unsplash.com/photo-1677029969065-c9f4003a9ad5?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Japchae",
                "price" => 8.50,
                "ingredients" => ["noodles di patate dolci", "verdure", "carne", "salsa di soia", "zucchero"],
                "image" => "https://images.unsplash.com/photo-1583032015879-e5022cb87c3b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Kimchi Palace",
    //     "address" => "Via Dante 89",
    //     "phone_number" => "0273648591",
    //     "image" => "https://images.unsplash.com/photo-1693429308125-3be7b105ad56?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["coreano", "giapponese"],
    //     "dishes" => [
    //         [
    //             "name" => "Kimchi Bokkeumbap",
    //             "price" => 9.00,
    //             "ingredients" => ["riso", "kimchi", "uovo", "verdure", "carne di maiale"],
    //             "image" => "https://images.unsplash.com/photo-1679844795701-4c7864627456?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Sundubu Jjigae",
    //             "price" => 8.00,
    //             "ingredients" => ["tofu morbido", "frutti di mare", "uovo", "cipolla verde", "brodo"],
    //             "image" => "https://images.unsplash.com/photo-1601974915460-f55ea921f8ad?q=80&w=1989&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Haemul Pajeon",
    //             "price" => 7.50,
    //             "ingredients" => ["farina", "uova", "cipolla verde", "frutti di mare", "salsa di soia"],
    //             "image" => "https://images.unsplash.com/photo-1668283653825-37b80f055b05?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Han River",
        "address" => "Piazza Duomo 15",
        "phone_number" => "0258741693",
        "image" => "https://images.unsplash.com/photo-1478749485505-2a903a729c63?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["coreano"],
        "dishes" => [
            [
                "name" => "Galbi",
                "price" => 14.00,
                "ingredients" => ["costine di manzo", "salsa di soia", "zucchero", "aglio", "cipolla"],
                "image" => "https://images.unsplash.com/photo-1593030668930-8130abedd2b0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Kimchi Fried Rice",
                "price" => 8.00,
                "ingredients" => ["riso", "kimchi", "uovo", "carne", "cipolla verde"],
                "image" => "https://images.unsplash.com/photo-1500040760498-8be2dccbdea7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Banchan",
                "price" => 5.50,
                "ingredients" => ["verdure miste", "spezie", "salsa di soia", "olio di sesamo"],
                "image" => "https://images.unsplash.com/photo-1546069901-eacef0df6022?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Pho House",
        "address" => "Via Verdi 24",
        "phone_number" => "0274896521",
        "image" => "https://images.unsplash.com/photo-1533787761082-492a5b83e614?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["vietnamita", "coreano"],
        "dishes" => [
            [
                "name" => "Pho Bo",
                "price" => 8.50,
                "ingredients" => ["brodo di manzo", "noodles di riso", "manzo", "cipolla", "erbe aromatiche"],
                "image" => "https://images.unsplash.com/photo-1631709497146-a239ef373cf1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Banh Mi",
                "price" => 6.00,
                "ingredients" => ["baguette", "maiale", "paté", "carote marinate", "coriandolo"],
                "image" => "https://images.unsplash.com/photo-1599719455360-ff0be7c4dd06?q=80&w=2049&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Goi Cuon",
                "price" => 5.00,
                "ingredients" => ["carta di riso", "gamberetti", "vermicelli", "verdure fresche", "erbe"],
                "image" => "https://images.unsplash.com/photo-1669340781012-ae89fbac9fc3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Saigon Street Food",
    //     "address" => "Corso Venezia 55",
    //     "phone_number" => "0245678901",
    //     "image" => "https://images.unsplash.com/photo-1693429308125-3be7b105ad56?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["vietnamita"],
    //     "dishes" => [
    //         [
    //             "name" => "Bun Cha",
    //             "price" => 9.00,
    //             "ingredients" => ["maiale grigliato", "vermicelli di riso", "erbe aromatiche", "salsa di pesce"],
    //             "image" => "https://images.unsplash.com/photo-1676813904943-c67e000fb0d8?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Cha Gio",
    //             "price" => 6.50,
    //             "ingredients" => ["involtini primavera", "maiale", "gamberi", "verdure", "salsa di pesce"],
    //             "image" => "https://images.unsplash.com/photo-1695712641388-87c0f9c2d36e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Com Tam",
    //             "price" => 7.50,
    //             "ingredients" => ["riso spezzato", "maiale alla griglia", "uovo fritto", "verdure in salamoia"],
    //             "image" => "https://images.unsplash.com/photo-1648421331147-9fcfab29536e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Little Hanoi",
        "address" => "Via Marconi 12",
        "phone_number" => "0267845291",
        "image" => "https://images.unsplash.com/photo-1695712641504-b852ff7ffa9f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["vietnamita", "italiano"],
        "dishes" => [
            [
                "name" => "Pho Ga",
                "price" => 8.00,
                "ingredients" => ["brodo di pollo", "noodles di riso", "pollo", "cipolla", "erbe aromatiche"],
                "image" => "https://images.unsplash.com/photo-1631709497146-a239ef373cf1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Banh Xeo",
                "price" => 7.00,
                "ingredients" => ["crepes di riso", "gamberetti", "maiale", "fagioli mungo", "erbe fresche"],
                "image" => "https://images.unsplash.com/photo-1518310532637-f5225f94f3c3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Ca Kho To",
                "price" => 9.50,
                "ingredients" => ["pesce in casseruola", "caramello", "salsa di pesce", "cipolla", "pepe"],
                "image" => "https://images.unsplash.com/photo-1629978448078-c94a0ab6500f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Hanoi Delights",
        "address" => "Piazza Navona 19",
        "phone_number" => "0257483629",
        "image" => "https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["vietnamita"],
        "dishes" => [
            [
                "name" => "Canh Chua",
                "price" => 7.50,
                "ingredients" => ["brodo di pesce", "gamberetti", "ananas", "pomodoro", "erbe aromatiche"],
                "image" => "https://images.unsplash.com/photo-1621916805485-53048be4920a?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Bun Thit Nuong",
                "price" => 8.00,
                "ingredients" => ["vermicelli di riso", "maiale grigliato", "verdure", "arachidi", "salsa di pesce"],
                "image" => "https://images.unsplash.com/photo-1593967858208-67ddb5b4c406?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Che Ba Mau",
                "price" => 4.50,
                "ingredients" => ["gelatina di fagioli mungo", "latte di cocco", "ghiaccio tritato", "fagioli rossi"],
                "image" => "https://takestwoeggs.com/wp-content/uploads/2021/09/Che%CC%80-Ba-Ma%CC%80u-Vietnamese-three-colored-dessert-Takestwoeggs-Final-SQ-500x500.jpg",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Bangkok Bites",
        "address" => "Via Torino 34",
        "phone_number" => "0293485712",
        "image" => "https://images.unsplash.com/photo-1559847844-5315695dadae?q=80&w=2058&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["thailandese"],
        "dishes" => [
            [
                "name" => "Pad Thai",
                "price" => 10.00,
                "ingredients" => ["noodles di riso", "gamberi", "tofu", "uovo", "arachidi", "germogli di soia"],
                "image" => "https://images.unsplash.com/photo-1565976469640-8c764ce9721c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Tom Yum Goong",
                "price" => 8.50,
                "ingredients" => ["gamberi", "fungo", "lemongrass", "lime", "foglie di kaffir", "peperoncino"],
                "image" => "https://images.unsplash.com/photo-1589563340504-3d0eb8ee3697?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Som Tum",
                "price" => 7.00,
                "ingredients" => ["papaya verde", "pomodoro", "arachidi", "lime", "salsa di pesce", "peperoncino"],
                "image" => "https://images.unsplash.com/photo-1648421331147-9fcfab29536e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Thai Spice",
        "address" => "Corso Buenos Aires 88",
        "phone_number" => "0246893571",
        "image" => "https://images.unsplash.com/photo-1455619452474-d2be8b1e70cd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["thailandese", "indiano"],
        "dishes" => [
            [
                "name" => "Green Curry",
                "price" => 9.50,
                "ingredients" => ["pollo", "latte di cocco", "melanzane", "basilico thai", "peperoncino verde"],
                "image" => "https://images.unsplash.com/photo-1631452180539-96aca7d48617?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Pad Kra Pao",
                "price" => 8.00,
                "ingredients" => ["carne macinata", "basilico thai", "aglio", "peperoncino", "uovo fritto"],
                "image" => "https://images.services.kitchenstories.io/MRxcM_KNscGAJaphGq57qFKQWJ8=/3840x0/filters:quality(85)/images.kitchenstories.io/wagtailOriginalImages/R2592-final-photo.jpg",
                "available" => true
            ],
            [
                "name" => "Mango Sticky Rice",
                "price" => 6.50,
                "ingredients" => ["riso glutinoso", "latte di cocco", "mango", "zucchero", "sale"],
                "image" => "https://images.unsplash.com/photo-1582878827114-c6bb4e6eb0de?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Golden Thai",
        "address" => "Via Garibaldi 15",
        "phone_number" => "0265748392",
        "image" => "https://images.unsplash.com/photo-1548943487-a2e4e43b4853?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["thailandese"],
        "dishes" => [
            [
                "name" => "Massaman Curry",
                "price" => 9.00,
                "ingredients" => ["manzo", "latte di cocco", "patate", "arachidi", "cipolla"],
                "image" => "https://images.unsplash.com/photo-1603894584373-5ac82b2ae398?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Tom Kha Gai",
                "price" => 8.50,
                "ingredients" => ["pollo", "latte di cocco", "lemongrass", "galanga", "foglie di kaffir"],
                "image" => "https://recipecontent.fooby.ch/15049_3-2_480-320.jpg",
                "available" => true
            ],
            [
                "name" => "Larb Gai",
                "price" => 7.50,
                "ingredients" => ["pollo macinato", "lime", "menta", "cipolla", "peperoncino"],
                "image" => "https://inquiringchef.com/wp-content/uploads/2020/02/Recipe-24.jpg",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Siam Square",
    //     "address" => "Piazza San Marco 28",
    //     "phone_number" => "0254893765",
    //     "image" => "https://images.unsplash.com/photo-1504674900247-0877df9cc836?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["thailandese", "cinese"],
    //     "dishes" => [
    //         [
    //             "name" => "Red Curry",
    //             "price" => 9.00,
    //             "ingredients" => ["pollo", "latte di cocco", "peperoncino rosso", "basilico thai", "zucchine"],
    //             "image" => "https://images.unsplash.com/photo-1627366422957-3efa9c6df0fc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Pad See Ew",
    //             "price" => 8.00,
    //             "ingredients" => ["noodles di riso", "uovo", "broccoli cinesi", "salsa di soia", "maiale"],
    //             "image" => "https://images.unsplash.com/photo-1553621043-f607bfbf6640?q=80&w=1926&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Tod Mun Pla",
    //             "price" => 6.50,
    //             "ingredients" => ["pesce", "curry rosso", "fagiolini", "foglie di kaffir", "salsa di pesce"],
    //             "image" => "https://images.unsplash.com/photo-1587040690786-b091531837a2?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Le Petit Bistro",
        "address" => "Via Montenapoleone 12",
        "phone_number" => "0123456789",
        "image" => "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["francese"],
        "dishes" => [
            [
                "name" => "Coq au Vin",
                "price" => 18.50,
                "ingredients" => ["pollo", "vino rosso", "funghi", "cipolla", "pancetta"],
                "image" => "https://images.unsplash.com/photo-1456404823214-a69ef7a1fae5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Ratatouille",
                "price" => 14.00,
                "ingredients" => ["melanzane", "zucchine", "pomodori", "peperoni", "cipolla", "aglio"],
                "image" => "https://images.unsplash.com/photo-1572453800999-e8d2d1589b7c?q=80&w=1970&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Tarte Tatin",
                "price" => 7.50,
                "ingredients" => ["mele", "zucchero", "burro", "pasta sfoglia"],
                "image" => "https://images.unsplash.com/photo-1473340325660-0f786fd1571c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Chez Marie",
        "address" => "Corso Buenos Aires 76, Milano",
        "phone_number" => "0234567890",
        "image" => "https://images.unsplash.com/photo-1642231877874-ce3e205f39c0?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["francese"],
        "dishes" => [
            [
                "name" => "Bouillabaisse",
                "price" => 22.00,
                "ingredients" => ["pesce", "frutti di mare", "pomodori", "zafferano", "aglio", "prezzemolo"],
                "image" => "https://images.unsplash.com/photo-1621339881990-c94ba5cf98fc?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Quiche Lorraine",
                "price" => 12.00,
                "ingredients" => ["uova", "panna", "pancetta", "formaggio", "cipolla"],
                "image" => "https://images.unsplash.com/photo-1650844010413-3f24dc1c182b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Crème Brûlée",
                "price" => 6.50,
                "ingredients" => ["panna", "zucchero", "uova", "vaniglia"],
                "image" => "https://images.unsplash.com/photo-1676300184943-09b2a08319a3?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "La Belle Époque",
        "address" => "Via della Moscova 98, Milano",
        "phone_number" => "0345678901",
        "image" => "https://images.unsplash.com/photo-1607403218119-83b4df4c0959?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["francese", "italiano"],
        "dishes" => [
            [
                "name" => "Manzo Bourguignon",
                "price" => 20.00,
                "ingredients" => ["manzo", "vino rosso", "cipolle", "carote", "funghi", "pancetta"],
                "image" => "https://images.unsplash.com/photo-1568096889942-6eedde686635?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Insalata Niçoise",
                "price" => 13.00,
                "ingredients" => ["tonno", "uova", "pomodori", "olive", "patate", "fagiolini"],
                "image" => "https://images.unsplash.com/photo-1621634892819-80f7874c96dd?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Soufflé al Cioccolato Bianco",
                "price" => 8.00,
                "ingredients" => ["cioccolato", "uova", "zucchero", "burro"],
                "image" => "https://images.unsplash.com/photo-1624695172952-ea2b4113af7f?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Café de Paris",
    //     "address" => "Piazza del Duomo 3, Milano",
    //     "phone_number" => "0456789012",
    //     "image" => "https://images.unsplash.com/photo-1579712267685-42da80f60aa4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["francese"],
    //     "dishes" => [
    //         [
    //             "name" => "Lumache al burro",
    //             "price" => 15.00,
    //             "ingredients" => ["lumache", "burro", "aglio", "prezzemolo"],
    //             "image" => "https://img.freepik.com/foto-premium/escargots-de-bourgogne-lumache-con-burro-alle-erbe-mangiare-sano-cibo-francese_97840-2962.jpg",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Anatra all'arancia",
    //             "price" => 19.50,
    //             "ingredients" => ["anatra", "arancia", "vino bianco", "brodo di pollo", "burro"],
    //             "image" => "https://images.unsplash.com/photo-1607403217872-27422b4ece0b?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Profiteroles",
    //             "price" => 7.50,
    //             "ingredients" => ["pasta choux", "crema pasticcera", "caramello"],
    //             "image" => "https://images.unsplash.com/photo-1625735562355-0a1d3173fbb1?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "El Patio de Flamenco",
        "address" => "Via Torino 21",
        "phone_number" => "0123456789",
        "image" => "https://images.unsplash.com/photo-1630175860333-5131bda75071?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["spagnolo"],
        "dishes" => [
            [
                "name" => "Paella Valenciana",
                "price" => 18.00,
                "ingredients" => ["riso", "pollo", "coniglio", "fagiolini", "pomodori", "zafferano"],
                "image" => "https://images.unsplash.com/photo-1534080564583-6be75777b70a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Gamberi all'aglio",
                "price" => 14.50,
                "ingredients" => ["gamberi", "aglio", "olio d'oliva", "prezzemolo", "peperoncino"],
                "image" => "https://images.unsplash.com/photo-1702650770029-b91afe8d7b3d?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Churros al Cioccolato",
                "price" => 6.50,
                "ingredients" => ["farina", "acqua", "zucchero", "cioccolato fondente"],
                "image" => "https://images.unsplash.com/photo-1505851498219-ee2449c18936?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Casa de Tapas",
        "address" => "Corso Sempione 45",
        "phone_number" => "0234567890",
        "image" => "https://images.unsplash.com/photo-1625938145744-e380515399bf?q=80&w=1946&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["spagnolo"],
        "dishes" => [
            [
                "name" => "Tortilla",
                "price" => 10.00,
                "ingredients" => ["uova", "patate", "cipolla", "olio d'oliva", "sale"],
                "image" => "https://images.unsplash.com/photo-1639669794539-952631b44515?q=80&w=2121&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Polpo alla Gallega",
                "price" => 16.50,
                "ingredients" => ["polpo", "patate", "paprika", "olio d'oliva", "sale grosso"],
                "image" => "https://images.unsplash.com/photo-1526243070121-8040f7c9cc1c?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Crema Catalana",
                "price" => 7.00,
                "ingredients" => ["latte", "uova", "zucchero", "amido di mais", "cannella", "limone"],
                "image" => "https://images.unsplash.com/photo-1593469348361-5ca3b78288f0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "La Bodega",
        "address" => "Via della Moscova 10",
        "phone_number" => "0345678901",
        "image" => "https://images.unsplash.com/photo-1621327017866-6fb07e6c96ea?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["spagnolo", "italiano"],
        "dishes" => [
            [
                "name" => "Gazpacho",
                "price" => 8.50,
                "ingredients" => ["pomodori", "peperoni", "cetrioli", "aglio", "aceto", "olio d'oliva"],
                "image" => "https://images.unsplash.com/photo-1662469853918-c615ffb1e030?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Patatas Bravas",
                "price" => 6.00,
                "ingredients" => ["patate", "olio d'oliva", "salsa brava", "aglio", "paprika"],
                "image" => "https://images.unsplash.com/photo-1633959639810-16c90bee95f9?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Flan",
                "price" => 5.50,
                "ingredients" => ["latte", "zucchero", "uova", "vaniglia"],
                "image" => "https://images.unsplash.com/photo-1679959350482-9585bf3e72fd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    // [
    //     "business_name" => "Tapas y Vino",
    //     "address" => "Piazza Gae Aulenti 3",
    //     "phone_number" => "0456789012",
    //     "image" => "https://images.unsplash.com/photo-1542986151-13ecf8e0453e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //     "types" => ["spagnolo"],
    //     "dishes" => [
    //         [
    //             "name" => "Prosciutto Ibérico",
    //             "price" => 20.00,
    //             "ingredients" => ["prosciutto iberico", "pane", "olio d'oliva"],
    //             "image" => "https://images.unsplash.com/photo-1640703935633-ca20bef6c38f?q=80&w=2012&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Crocchette di prosciutto",
    //             "price" => 12.00,
    //             "ingredients" => ["prosciutto", "besciamella", "farina", "uova", "pangrattato"],
    //             "image" => "https://images.unsplash.com/photo-1674480367370-4e4bd64eb3c5?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
    //             "available" => true
    //         ],
    //         [
    //             "name" => "Torta di Santiago",
    //             "price" => 7.00,
    //             "ingredients" => ["mandorle", "zucchero", "uova", "limone", "cannella"],
    //             "image" => "https://primochef.it/wp-content/uploads/2021/05/SH_torta_di_santiago.jpg",
    //             "available" => true
    //         ],
    //     ]
    // ],
    [
        "business_name" => "Poke Paradise",
        "address" => "Via Dante 15",
        "phone_number" => "0123456789",
        "image" => "https://images.unsplash.com/photo-1618839851956-b5280e86677a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["poke"],
        "dishes" => [
            [
                "name" => "Hawaiian Classic",
                "price" => 12.00,
                "ingredients" => ["riso", "tonno", "edamame", "ananas", "cipolla rossa", "alghe", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1555990206-5264326d3c1c?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Salmon Lover",
                "price" => 14.50,
                "ingredients" => ["riso", "salmone", "avocado", "cetriolo", "carote", "sesamo", "salsa teriyaki"],
                "image" => "https://images.unsplash.com/photo-1633862472152-e3873eb1b3ff?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Veggie Delight",
                "price" => 11.00,
                "ingredients" => ["riso", "tofu", "avocado", "mango", "carote", "edamame", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1547496502-affa22d38842?q=80&w=1954&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Aloha Poke",
        "address" => "Corso Garibaldi 20, Milano",
        "phone_number" => "0234567890",
        "image" => "https://images.unsplash.com/photo-1604259597308-5321e8e4789c?q=80&w=2002&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["poke"],
        "dishes" => [
            [
                "name" => "Tuna Ahi Poke",
                "price" => 13.00,
                "ingredients" => ["riso", "tonno", "avocado", "cetriolo", "ananas", "cipolla rossa", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1534528696266-aade1e8bae09?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Spicy Salmon",
                "price" => 14.00,
                "ingredients" => ["riso", "salmone piccante", "avocado", "edamame", "carote", "alghe", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1661257711676-79a0fc533569?q=80&w=2059&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Chicken Poke",
                "price" => 12.50,
                "ingredients" => ["riso", "pollo grigliato", "mango", "cetriolo", "carote", "edamame", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1670944316338-40c256cb144e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Pacific Poke",
        "address" => "Via Solferino 42, Milano",
        "phone_number" => "0345678901",
        "image" => "https://images.unsplash.com/photo-1556041081-888e5afc8c69?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["poke"],
        "dishes" => [
            [
                "name" => "Shrimp Poke",
                "price" => 13.50,
                "ingredients" => ["riso", "gamberetti", "avocado", "mango", "carote", "edamame", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1520066391310-428f06ebd602?q=80&w=2075&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Tofu Teriyaki",
                "price" => 11.50,
                "ingredients" => ["riso", "tofu", "avocado", "carote", "alghe", "salsa teriyaki", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1542354255-839e272e3408?q=80&w=2062&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Rainbow Poke",
                "price" => 15.00,
                "ingredients" => ["riso", "tonno", "salmone", "gamberetti", "avocado", "edamame", "alghe", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1697530747440-9b5a18ca050d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Poke Bowl Heaven",
        "address" => "Piazza del Duomo 5",
        "phone_number" => "0456789012",
        "image" => "https://images.unsplash.com/photo-1561954468-49af576e1d7d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["poke"],
        "dishes" => [
            [
                "name" => "Classic Poke",
                "price" => 12.00,
                "ingredients" => ["riso", "salmone", "avocado", "edamame", "carote", "sesamo", "salsa soia"],
                "image" => "https://images.unsplash.com/photo-1561954468-49af576e1d7d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Mango Madness",
                "price" => 13.00,
                "ingredients" => ["riso", "salmone", "mango", "avocado", "cetriolo", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1592171029478-6e98b23f3f03?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Spicy Tuna",
                "price" => 14.00,
                "ingredients" => ["riso", "tonno piccante", "avocado", "edamame", "carote", "alghe", "sesamo"],
                "image" => "https://images.unsplash.com/photo-1670816978291-a5cf23d87968?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Ethiopian Delights",
        "address" => "Via Paolo Sarpi 30",
        "phone_number" => "0123456789",
        "image" => "https://images.unsplash.com/photo-1414235077428-338989a2e8c0?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["etiope"],
        "dishes" => [
            [
                "name" => "Doro Wat",
                "price" => 15.00,
                "ingredients" => ["pollo", "cipolle", "burro chiarificato", "peperoni etiopici", "spezie"],
                "image" => "https://www.foodandwine.com/thmb/NUUBSTe1QLuCkIeRoT9puQGnNwU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Doro-Wat-FT-RECIPE1123-3039296a65154fc5a079ac208c7cee05.jpg",
                "available" => true
            ],
            [
                "name" => "Injera",
                "price" => 12.00,
                "ingredients" => ["farina di teff", "lievito naturale", "acqua", "sale"],
                "image" => "https://cdn.britannica.com/13/250513-050-1304A5E6/Injera-Ethiopian-bread.jpg",
                "available" => true
            ],
            [
                "name" => "Misir Wat",
                "price" => 11.50,
                "ingredients" => ["lenticchie rosse", "cipolle", "burro chiarificato", "peperoni etiopici", "spezie"],
                "image" => "https://i0.wp.com/mealsbymavis.com/wp-content/uploads/2019/09/misirwat_2.png?fit=1200%2C800&ssl=1",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Taste of Ethiopia",
        "address" => "Via Washington 5",
        "phone_number" => "0234567890",
        "image" => "https://images.unsplash.com/photo-1634650947274-0c3fa9d8ee8a?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["etiope"],
        "dishes" => [
            [
                "name" => "Kitfo",
                "price" => 16.50,
                "ingredients" => ["manzo macinato crudo", "burro chiarificato", "peperoni etiopici", "spezie"],
                "image" => "https://d1c8xu194km6ge.cloudfront.net/assets/421893/kefetohero_HD1280.jpg",
                "available" => true
            ],
            [
                "name" => "Shiro",
                "price" => 10.00,
                "ingredients" => ["cicerchie in polvere", "cipolle", "burro chiarificato", "peperoni etiopici", "spezie"],
                "image" => "https://www.africarivista.it/wp-content/uploads/2021/05/shir%C2%A6-2.jpg",
                "available" => true
            ],
            [
                "name" => "Gomen Wat",
                "price" => 12.00,
                "ingredients" => ["spinaci", "cipolle", "burro chiarificato", "peperoni etiopici", "spezie"],
                "image" => "https://i.pinimg.com/736x/68/8d/48/688d48006c7d59067af8b06dc67eb746.jpg",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Ethiopian Flavors",
        "address" => "Via Solferino 10",
        "phone_number" => "0345678901",
        "image" => "https://images.unsplash.com/photo-1528451635828-f28cd48439a7?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["etiope"],
        "dishes" => [
            [
                "name" => "Tibs",
                "price" => 14.00,
                "ingredients" => ["manzo", "cipolle", "peperoni etiopici", "burro chiarificato", "spezie"],
                "image" => "https://blog.bauer.it/wp-content/uploads/2022/05/tibs-e1651503312862.jpg",
                "available" => true
            ],
            [
                "name" => "Firfir",
                "price" => 11.50,
                "ingredients" => ["injera sbriciolata", "burro chiarificato", "peperoni etiopici", "spezie"],
                "image" => "https://ethiopiandish.com/wp-content/uploads/2022/01/sega-firfir-e1642674757942.jpg",
                "available" => true
            ],
            [
                "name" => "Atkilt Wat",
                "price" => 12.50,
                "ingredients" => ["verdure miste", "cipolle", "burro chiarificato", "peperoni etiopici", "spezie"],
                "image" => "https://cloudinary-cdn.whisk.com/image/upload/g_auto,c_fill,q_60,f_auto,h_630,w_1200/v1685546292/recipe/f46764392c2d0866a3973ae67c63ad0a.jpg",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Santorini",
        "address" => "Via Montenapoleone 10",
        "phone_number" => "0123456789",
        "image" => "https://images.unsplash.com/photo-1597075561373-cf8898ec7290?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["greco"],
        "dishes" => [
            [
                "name" => "Moussaka",
                "price" => 14.50,
                "ingredients" => ["melanzane", "carne macinata di agnello", "patate", "salsa bechamel", "formaggio grattugiato"],
                "image" => "https://images.unsplash.com/photo-1510693206972-df098062cb71?q=80&w=1996&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Souvlaki",
                "price" => 12.00,
                "ingredients" => ["spiedini di carne di maiale", "cipolla", "peperoni", "pomodoro", "tzatziki"],
                "image" => "https://images.unsplash.com/photo-1573126161855-f9633aa8a9f0?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Horiatiki Salad",
                "price" => 10.00,
                "ingredients" => ["pomodori", "cetrioli", "cipolla rossa", "olive nere", "feta", "origano"],
                "image" => "https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Olympus",
        "address" => "Via Manzoni 15",
        "phone_number" => "0234567890",
        "image" => "https://images.unsplash.com/photo-1583057341912-a0df64b8da4d?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["greco"],
        "dishes" => [
            [
                "name" => "Spanakopita",
                "price" => 11.50,
                "ingredients" => ["spinaci", "feta", "cipolla", "erbe aromatiche", "sfoglia croccante"],
                "image" => "https://images.unsplash.com/photo-1612477491914-a2f46ef8586e?q=80&w=2091&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Gyros",
                "price" => 13.00,
                "ingredients" => ["carne di maiale", "cipolla", "pomodoro", "patatine fritte", "tzatziki"],
                "image" => "https://images.unsplash.com/photo-1646488643615-84b4f85bb2c5?q=80&w=2056&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Kleftiko",
                "price" => 16.00,
                "ingredients" => ["agnello", "patate", "cipolla", "aglio", "limone", "erbe aromatiche"],
                "image" => "https://images.unsplash.com/photo-1514516345957-556ca7d90a29?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Greek Taverna Milos",
        "address" => "Via Dante 20",
        "phone_number" => "0345678901",
        "image" => "https://images.unsplash.com/photo-1523986371872-9d3ba2e2a389?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["greco"],
        "dishes" => [
            [
                "name" => "Dolmades",
                "price" => 10.50,
                "ingredients" => ["foglie di vite", "riso", "carne macinata", "erbe aromatiche", "limone"],
                "image" => "https://blog.giallozafferano.it/lareginadelfocolare/wp-content/uploads/2022/04/Dolmades-greci-or.jpg",
                "available" => true
            ],
            [
                "name" => "Taramosalata",
                "price" => 9.00,
                "ingredients" => ["uova di pesce", "patate", "cipolla", "limone", "olio d'oliva"],
                "image" => "https://wips.plug.it/cips/buonissimo.org/cms/2011/09/taramosalata-5.jpg?w=713&a=c&h=407",
                "available" => true
            ],
            [
                "name" => "Loukoumades",
                "price" => 8.00,
                "ingredients" => ["pasta lievitata", "miele", "noci", "cannella"],
                "image" => "https://www.foodandwine.com/thmb/L9e3eDtrUvz0FYQ9lfrunhThDAM=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Loukoumades-FT-RECIPE1123-02e0684c1d43401cb37ef53f654513d4.jpg",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Beirut Lounge",
        "address" => "Via Solferino 25",
        "phone_number" => "0123456789",
        "image" => "https://images.unsplash.com/photo-1542528180-a1208c5169a5?q=80&w=2077&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["libanese", "italiano"],
        "dishes" => [
            [
                "name" => "Hummus",
                "price" => 8.50,
                "ingredients" => ["ceci", "tahini", "aglio", "limone", "olio d'oliva"],
                "image" => "https://images.unsplash.com/photo-1637949385162-e416fb15b2ce?q=80&w=2052&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Falafel",
                "price" => 9.00,
                "ingredients" => ["ceci", "prezzemolo", "cipolla", "aglio", "spezie"],
                "image" => "https://images.unsplash.com/photo-1593001872095-7d5b3868fb1d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Tabbouleh",
                "price" => 10.00,
                "ingredients" => ["prezzemolo", "pomodori", "cetrioli", "menta", "couscous", "limone", "olio d'oliva"],
                "image" => "https://images.unsplash.com/photo-1542528180-0c79567c66de?q=80&w=2057&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Levant Cuisine",
        "address" => "Via Montenapoleone 15",
        "phone_number" => "0234567890",
        "image" => "https://images.unsplash.com/photo-1541518763669-27fef04b14ea?q=80&w=1933&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["libanese"],
        "dishes" => [
            [
                "name" => "Kibbeh",
                "price" => 12.50,
                "ingredients" => ["carne macinata", "bulgur", "cipolla", "noci", "spezie"],
                "image" => "https://falasteenifoodie.com/wp-content/uploads/2022/11/Fried-Lebanese-Kibbeh-Recipe.jpeg",
                "available" => true
            ],
            [
                "name" => "Moujadara",
                "price" => 11.00,
                "ingredients" => ["lenticchie", "riso", "cipolla", "spezie"],
                "image" => "https://images.unsplash.com/photo-1630409349416-24884761a307?q=80&w=2094&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Baba Ghanoush",
                "price" => 9.50,
                "ingredients" => ["melanzane arrostite", "tahini", "aglio", "limone", "olio d'oliva"],
                "image" => "https://www.seriouseats.com/thmb/nhgfDG68_YXD-qz-0b1C9L45lmE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/__opt__aboutcom__coeus__resources__content_migration__serious_eats__seriouseats.com__recipes__images__2014__02__20140225-baba-ganoush-recipe-food-lab-vegan-primary-3-30d3fa6c920a4c3dafce66e140a35905.jpg",
                "available" => true
            ],
        ]
    ],
    [
        "business_name" => "Cedars of Lebanon",
        "address" => "Via Manzoni 20",
        "phone_number" => "0345678901",
        "image" => "https://images.unsplash.com/photo-1534824394572-a24ff25bbb5e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
        "types" => ["libanese"],
        "dishes" => [
            [
                "name" => "Shawarma",
                "price" => 13.00,
                "ingredients" => ["carne di pollo", "aglio", "limone", "spezie", "pane pita", "insalata"],
                "image" => "https://images.unsplash.com/photo-1638537125835-82acb38d3531?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Hummus Beiruti",
                "price" => 8.00,
                "ingredients" => ["ceci", "tahini", "aglio", "peperoncino", "limone", "prezzemolo", "olio d'oliva"],
                "image" => "https://images.unsplash.com/photo-1547516453-01c9910aafbf?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
            [
                "name" => "Fattoush",
                "price" => 10.50,
                "ingredients" => ["insalata mista", "pomodori", "cetrioli", "cipolla", "peperoni", "pane pita croccante", "sumac"],
                "image" => "https://images.unsplash.com/photo-1595786802424-d6efbc413db5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D",
                "available" => true
            ],
        ]
    ],
];
