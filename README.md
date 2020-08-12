 

# Generate Excel Document using Laravel

> In this project we have used Laravel Excel library (https://laravel-excel.com/)

> This project contains an API that generates Excel reports
 
## Code (API)

```API 
Route::get('/generate-report', function(){
   return Excel::download(new OrdersExport, 'Orders.xlsx');
});
```

---

## Installation

- git clone https://github.com/MuharremSmakiqi/generate-excel.git


### Clone

- Clone this repo to your local machine using `git clone https://github.com/MuharremSmakiqi/generate-excel.git`
- After clone please copy env.example to .env and setup your database.

### Setup 
- `cd generate-excel`
- `composer update`
- `npm install`
- `php artisan migrate --seed`
- `php artisan serve`
- Visit the route: /api/download
---
 

 
