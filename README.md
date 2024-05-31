
## BOOK Libary Webservice

## Installation
Clone project
run composer install
## Files location
## Controller has methods to get and add the book
BookControlle
## BOOK Libary Webservice

## Installation
Clone project
run composer install
## Files location
## Controller has methods to get and add the book
BookController is lo
## BOOK Libary Webservice

## Installation
Clone project
run composer install
## Files location
## Controller has methods to get and add the book
BookController is located in app/Http/BookController.php

Routes is located in routes/api.php
Model is located Models/Book.php
## XSD file is located in storge/schemas/book-schema.xsd

---

# Library Book Inventory Web Service

This project is a Laravel-based web service for managing a library's book inventory. It allows clients to add new books and retrieve details about existing books using XML for data exchange.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [License](#license)

## Requirements

- PHP >= 7.4
- Composer
- Laravel 8 or later
- MySQL or another supported database

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/agabaandre/book_inventory.git
    cd library-book-inventory
    ```

2. **Install dependencies**:
    ```sh
    composer install
    ```

3. **Create a copy of the `.env` file**:
    ```sh
    cp .env.example .env
    ```

4. **Configure your `.env` file** with your database credentials:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. **Generate an application key**:
    ```sh
    php artisan key:generate
    ```

6. **Run database migrations**:
    ```sh
    php artisan migrate
    ```

7. **Start the development server**:
    ```sh
    php artisan serve
    ```

8. **Serve the HTML client**: 
    - Save the `add-book.html` file in the `public` directory of your Laravel project.
    - Access the client through `http://localhost:8000/add-book.html` if using Laravel's built-in server.

## File Structure

- `app/Http/Controllers/BookController.php`: Controller handling book-related requests.
- `app/Models/Book.php`: Eloquent model representing a book.
- `database/migrations/xxxx_xx_xx_create_books_table.php`: Migration file for creating the books table.
- `storage/schemas/book-schema.xsd`: XML Schema definition for book data.
- `public/add-book.html`: HTML client for adding and retrieving books.

## Usage

### Adding a New Book

1. Open the HTML client in your browser:
    ```
    http://localhost:8000/add-book.html
    ```

2. Fill in the book details in the "Add New Book" form and click "Add Book".

### Retrieving Book Details

1. Open the HTML client in your browser:
    ```
    http://localhost/client_app/client.html
    ```

2. Enter the ISBN of the book in the "Get Book Details" form and click "Get Book Details".

## API Endpoints

### Add a New Book

- **URL**: `/add-book`
- **Method**: `POST`
- **Content-Type**: `application/x-www-form-urlencoded`
- **Parameters**:
  - `xml` (string): XML representation of the book data.

**Example Request**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

### Get Book Details by ISBN

- **URL**: `/book/{isbn}`
- **Method**: `GET`
- **Response**: XML representation of the book data.

**Example Response**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

## License

This project is open-source and available under the [MIT License](LICENSE).
cated in app/Http/BookController.php

Routes is located in routes/api.php
Model is located Models/Book.php
## XSD file is located in storge/schemas/book-schema.xsd

---

# Library Book Inventory Web Service

This project is a Laravel-based web service for managing a library's book inventory. It allows clients to add new books and retrieve details about existing books using XML for data exchange.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [License](#license)

## Requirements

- PHP >= 7.4
- Composer
- Laravel 8 or later
- MySQL or another supported database

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/agabaandre/book_inventory.git
    cd library-book-inventory
    ```

2. **Install dependencies**:
    ```sh
    composer install
    ```

3. **Create a copy of the `.env` file**:
    ```sh
    cp .env.example .env
    ```

4. **Configure your `.env` file** with your database credentials:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. **Generate an application key**:
    ```sh
    php artisan key:generate
    ```

6. **Run database migrations**:
    ```sh
    php artisan migrate
    ```

7. **Start the development server**:
    ```sh
    php artisan serve
    ```

8. **Serve the HTML client**: 
    - Save the `add-book.html` file in the `public` directory of your Laravel project.
    - Access the client through `http://localhost:8000/add-book.html` if using Laravel's built-in server.

## File Structure

- `app/Http/Controllers/BookController.php`: Controller handling book-related requests.
- `app/Models/Book.php`: Eloquent model representing a book.
- `database/migrations/xxxx_xx_xx_create_books_table.php`: Migration file for creating the books table.
- `storage/schemas/book-schema.xsd`: XML Schema definition for book data.
- `public/add-book.html`: HTML client for adding and retrieving books.

## Usage

### Adding a New Book

1. Open the HTML client in your browser:
    ```
    http://localhost:8000/add-book.html
    ```

2. Fill in the book details in the "Add New Book" form and click "Add Book".

### Retrieving Book Details

1. Open the HTML client in your browser:
    ```
    http://localhost/client_app/client.html
    ```

2. Enter the ISBN of the book in the "Get Book Details" form and click "Get Book Details".

## API Endpoints

### Add a New Book

- **URL**: `/add-book`
- **Method**: `POST`
- **Content-Type**: `application/x-www-form-urlencoded`
- **Parameters**:
  - `xml` (string): XML representation of the book data.

**Example Request**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

### Get Book Details by ISBN

- **URL**: `/book/{isbn}`
- **Method**: `GET`
- **Response**: XML representation of the book data.

**Example Response**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

## License

This project is open-source and available under the [MIT License](LICENSE).
r is lo
## BOOK Libary Webservice

## Installation
Clone project
run composer install
## Files location
## Controller has methods to get and add the book
BookController is located in app/Http/BookController.php

Routes is located in routes/api.php
Model is located Models/Book.php
## XSD file is located in storge/schemas/book-schema.xsd

---

# Library Book Inventory Web Service

This project is a Laravel-based web service for managing a library's book inventory. It allows clients to add new books and retrieve details about existing books using XML for data exchange.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [License](#license)

## Requirements

- PHP >= 7.4
- Composer
- Laravel 8 or later
- MySQL or another supported database

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/agabaandre/book_inventory.git
    cd library-book-inventory
    ```

2. **Install dependencies**:
    ```sh
    composer install
    ```

3. **Create a copy of the `.env` file**:
    ```sh
    cp .env.example .env
    ```

4. **Configure your `.env` file** with your database credentials:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. **Generate an application key**:
    ```sh
    php artisan key:generate
    ```

6. **Run database migrations**:
    ```sh
    php artisan migrate
    ```

7. **Start the development server**:
    ```sh
    php artisan serve
    ```

8. **Serve the HTML client**: 
    - Save the `add-book.html` file in the `public` directory of your Laravel project.
    - Access the client through `http://localhost:8000/add-book.html` if using Laravel's built-in server.

## File Structure

- `app/Http/Controllers/BookController.php`: Controller handling book-related requests.
- `app/Models/Book.php`: Eloquent model representing a book.
- `database/migrations/xxxx_xx_xx_create_books_table.php`: Migration file for creating the books table.
- `storage/schemas/book-schema.xsd`: XML Schema definition for book data.
- `public/add-book.html`: HTML client for adding and retrieving books.

## Usage

### Adding a New Book

1. Open the HTML client in your browser:
    ```
    http://localhost:8000/add-book.html
    ```

2. Fill in the book details in the "Add New Book" form and click "Add Book".

### Retrieving Book Details

1. Open the HTML client in your browser:
    ```
    http://localhost/client_app/client.html
    ```

2. Enter the ISBN of the book in the "Get Book Details" form and click "Get Book Details".

## API Endpoints

### Add a New Book

- **URL**: `/add-book`
- **Method**: `POST`
- **Content-Type**: `application/x-www-form-urlencoded`
- **Parameters**:
  - `xml` (string): XML representation of the book data.

**Example Request**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

### Get Book Details by ISBN

- **URL**: `/book/{isbn}`
- **Method**: `GET`
- **Response**: XML representation of the book data.

**Example Response**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

## License

This project is open-source and available under the [MIT License](LICENSE).
cated in app/Http/BookController.php

Routes is located in routes/api.php
Model is located Models/Book.php
## XSD file is located in storge/schemas/book-schema.xsd

---

# Library Book Inventory Web Service

This project is a Laravel-based web service for managing a library's book inventory. It allows clients to add new books and retrieve details about existing books using XML for data exchange.

## Table of Contents

- [Requirements](#requirements)
- [Installation](#installation)
- [File Structure](#file-structure)
- [Usage](#usage)
- [API Endpoints](#api-endpoints)
- [License](#license)

## Requirements

- PHP >= 7.4
- Composer
- Laravel 8 or later
- MySQL or another supported database

## Installation

1. **Clone the repository**:
    ```sh
    git clone https://github.com/agabaandre/book_inventory.git
    cd library-book-inventory
    ```

2. **Install dependencies**:
    ```sh
    composer install
    ```

3. **Create a copy of the `.env` file**:
    ```sh
    cp .env.example .env
    ```

4. **Configure your `.env` file** with your database credentials:
    ```ini
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. **Generate an application key**:
    ```sh
    php artisan key:generate
    ```

6. **Run database migrations**:
    ```sh
    php artisan migrate
    ```

7. **Start the development server**:
    ```sh
    php artisan serve
    ```

8. **Serve the HTML client**: 
    - Save the `add-book.html` file in the `public` directory of your Laravel project.
    - Access the client through `http://localhost:8000/add-book.html` if using Laravel's built-in server.

## File Structure

- `app/Http/Controllers/BookController.php`: Controller handling book-related requests.
- `app/Models/Book.php`: Eloquent model representing a book.
- `database/migrations/xxxx_xx_xx_create_books_table.php`: Migration file for creating the books table.
- `storage/schemas/book-schema.xsd`: XML Schema definition for book data.
- `public/add-book.html`: HTML client for adding and retrieving books.

## Usage

### Adding a New Book

1. Open the HTML client in your browser:
    ```
    http://localhost:8000/add-book.html
    ```

2. Fill in the book details in the "Add New Book" form and click "Add Book".

### Retrieving Book Details

1. Open the HTML client in your browser:
    ```
    http://localhost/client_app/client.html
    ```

2. Enter the ISBN of the book in the "Get Book Details" form and click "Get Book Details".

## API Endpoints

### Add a New Book

- **URL**: `/add-book`
- **Method**: `POST`
- **Content-Type**: `application/x-www-form-urlencoded`
- **Parameters**:
  - `xml` (string): XML representation of the book data.

**Example Request**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

### Get Book Details by ISBN

- **URL**: `/book/{isbn}`
- **Method**: `GET`
- **Response**: XML representation of the book data.

**Example Response**:
```xml
<book>
  <title>Example Book Title</title>
  <author>Author Name</author>
  <isbn>1234567890</isbn>
  <publicationYear>2024</publicationYear>
  <publisher>Example Publisher</publisher>
</book>
```

## License

This project is open-source and available under the [MIT License](LICENSE).
