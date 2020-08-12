 

# Generate Excel Document using Laravel

> In this project we have used Laravel Excel (https://laravel-excel.com/)

> This project contains an API download the file

> include terms/tags that can be searched

**Badges will go here**

- build status
- issues (waffle.io maybe)
- devDependencies
- npm package
- coverage
- slack
- downloads
- gitter chat
- license
- etc.
   
## Example (Optional)

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

### Setup 
- `cd generate-excel`
- `composer update`
- `npm install`
- `php artisan migrate --seed`
- `php artisan serve`
- Visit the route: /api/download
---
 

 
