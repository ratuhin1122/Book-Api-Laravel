# Book API (Read-Only)

This is a simple **Laravel REST API** for managing books.  
This API currently supports **read-only operations**:

- **List all books** (`index`)  
- **Get a single book** (`show`)  

Other operations like `store`, `update`, and `delete` exist in the controller but **require a CSRF token** and are not publicly accessible.

---

## 🚀 Installation

1. Clone the repository:


git clone https://github.com/your-username/book-api.git
cd book-api

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve


| Method | Endpoint    | Description             |
| ------ | ----------- | ----------------------- |
| GET    | /books      | Get all books           |
| GET    | /books/{id} | Get a single book by ID |



[
    {
        "id": 1,
        "title": "Book Title",
        "author": "Author Name",
        "published_year": "2025",
        "created_at": "2025-09-07T13:45:00.000000Z",
        "updated_at": "2025-09-07T13:45:00.000000Z"
    },
    ...
]



