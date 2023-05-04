Class for handling Database-related operations
    Attributes:
        conn
            - Connection object.
    Return:
        - Union: mysqli, null

    Methods:
        init_db()
            - Initializes database. Creates all necessary tables.
            Return:
                - None

        getAllShopListings()
            - Fetches all shop listing entries from the database.
            Return:
                - Array: ShopListing

        getShopListingById()
            - Fetches a shop listing entry matching the specified ID.
            Parameters:
                id
                - ID of the entry to fetch.
            Return:
                - Union: ShopListing, null
        
        addShopListing()
            - Adds a shop listing entry to the database.
            Parameters:
                perk
                    - Perk being listed for sale.
                shop
                - Shop where the perk is for sale.
                stock
                    - Quantity of perk for sale.
                price
                - Selling price,
            Return:
                - null

        updateShopListing()
            - Updates a shop listing record in the database.
            Parameters:
                shopListing
                    - Updated shop listing
            Return:
                - null

        deleteShopListing()
            - Deletes a shop listing record from the database.
            Parameters:
                shopListing
                    - The record to delete.
            Return:
                - null

        getAllPlayers()
            - Fetches all players from the database.
            Return:
                - Array: Player

        addPlayer()
            - Adds a player to the database.
            Return:
                - null

        updatePlayer()
            - Updates a player on the database.
            Parameters:
                player
                    - Updated player
            Return:
                - null

        deletePlayer()
            - Deletes a player from the database.
            Parameters:
                player
                    - The player to delete.
            Return:
                - null

        getAllPurchases()
            - Fetches all purchases from the database.
            Return:
                - Array: Purchase

        getPurchaseById()
            - Fetches a purchased matching the specified ID.
            Parameters:
                id
                    - The ID of the purchase to fetch.
            Return:
                - Union: Purchase, null

        addPurchase()
            - Adds a purchase record to the database.
            Parameters:
                perk
                    - The perk purchased.
                quantity
                    - Amount of perk purchased.
                buyer
                    - The player who purchased the perk.
            Return:
                - null

        getAllShops()
            - Fetches all shops from the database.
            Return:
                - Array: Shop

        getShopById()
            - Fetches a shop from the database matching the ID.
            Paraeters:
                id
                    - The ID of the shop to search.
            Return:
                - Union: Shop, null

        getAllDevelopers()
            - Fetches all developers from the database.
            Return:
                - Array: Developer     

        getDeveloperById()
            - Fetches a developer matching the ID from the database.
            Parameters:
                id
                    - The ID of the developer to search.
            Return:
                - Union: Developer, null

        addDeveloper()
            - Adds a developer to the database.
            Parameters:
                player
                    - The player to add as developer.
            Return:
                - null

        updateDeveloper()
            - Updates a developer on the database.
            Prameters:
                developer
                - Updated developer
            Return:
                - null

        deleteDeveloper()
            - Deletes a developer from the database
            Parameters:
                developer
                    - The developer to delete
            Return:
                - null

        getAllModerators()
            - Fetches all moderators from the database.
            Return:
                - Array: Moderator     

        getModerator()
            - Fetches a moderator matching the ID from the database.
            Parameters:
                id
                    - The ID of the moderator to search.
            Return:
                - Union: Moderator, null

        addModerator()
            - Adds a moderator to the database.
            Parameters:
                player
                - The player to add as moderator.
            Return:
                - null

        updateModerator()
            - Updates a moderator on the database.
            Prameters:
                moderator
                    - Updated moderator.
            Return:
                - null

        deleteModerator()
            - Deletes a moderator from the database
            Parameters:
                moderator
                    - The moderator to delete.
            Return:
                - null
